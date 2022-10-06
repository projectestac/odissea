<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/question/type/multianswer/question.php');
require_once($CFG->dirroot . '/question/type/wq/question.php');
require_once($CFG->dirroot . '/question/type/wq/step.php');


class qtype_multianswerwiris_question extends qtype_wq_question implements question_automatically_gradable_with_countback {

    /**
     * A link to last question attempt step and also a helper class for some
     * grading issues.
     */
    public $step;

    /**
     * Subquestions of wiris qtype.
     */
    public $wirissubquestions;
    /**
     * Reference to subquestions array (of Moodle qtype).
     */
    public $subquestions;
    public $places;
    public $textfragments;

    public function __construct($base) {
        parent::__construct($base);
        $this->step = new qtype_wirisstep();
    }

    protected function get_substep($step, $i) {
        // Cannot call $this->base because it is a protected method. So the
        // following is a copy of the multianswer get_substep() implementation.
        return new question_attempt_step_subquestion_adapter($step, 'sub' . $i . '_');
    }

    protected function load_step($step) {
        foreach ($this->subquestions as $i => $subquestion) {
            if (isset($subquestion->step)) {
                $subquestion->step->load($this->get_substep($step, $i));
            }
        }
        $this->step->load($step);
    }

    protected function set_wirisquestioninstance() {
        foreach ($this->subquestions as $i => $subquestion) {
            if (substr($subquestion->get_type_name(), -5) == 'wiris') {
                $subquestion->wirisquestioninstance = $this->wirisquestioninstance;
            }
        }
    }

    public function start_attempt(question_attempt_step $step, $variant) {
        parent::start_attempt($step, $variant);
        $this->set_wirisquestioninstance();
        $this->load_step($step);
    }

    public function apply_attempt_state(question_attempt_step $step) {
        parent::apply_attempt_state($step);
        $this->set_wirisquestioninstance();
        $this->load_step($step);
        foreach ($this->subquestions as $subquestion) {
            if ($subquestion->get_type_name() == 'shortanswerwiris') {
                // This is a regrade because is the only case where this function is
                // called with the first step instead of start_attempt. So invalidate
                // cached matching answers.
                if ($subquestion->step->is_first_step()) {
                    $subquestion->step->set_var('_response_hash', '0');
                }
            }
        }
    }

    private function set_shortanswer_matching_answers(array $response) {
        try {
            // Security protection:
            // The same question should not be graded more than N times with failure.
            if ($this->step->is_attempt_limit_reached()) {
                return;
            }
            // Build list of shortanswerwiris subquestions.
            $indexes = array();
            $needsgrade = false;
            foreach ($this->subquestions as $i => $subquestion) {
                if ($subquestion->get_type_name() == 'shortanswerwiris') {
                    $indexes[] = $i;
                    if (!$needsgrade) {
                        $substep = $this->get_substep(null, $i);
                        $subresp = $substep->filter_array($response);
                        $subresphash = isset($subresp['answer']) ? md5($subresp['answer']) : null;
                        if (!is_null($subresphash) && ($subresphash != $subquestion->step->get_var('_response_hash'))) {
                            $needsgrade = true;
                        }
                    }
                }
            }

            // Quick return if nothing to do.
            if (!$needsgrade) {
                return;
            }

            $builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
            $wrap = com_wiris_system_CallWrapper::getInstance();
            $q = $this->wirisquestion;

            // Build the list of grading assertions.
            $assertions = array();
            $wrap->start();
            $qimpl = $q->question->getImpl();

            // The following if is only for backwards compatibility: some old
            // multianswer assertions don't have assertions array.
            if (empty($qimpl->assertions)) {
                $qimpl->setAssertion("equivalent_symbolic", 0, 0);
            }

            // Remove all non-syntactic assertions from question and save to $assertions array.
            for ($i = $qimpl->assertions->length - 1; $i >= 0; $i--) {
                $assertion = $qimpl->assertions[$i];
                if (!$assertion->isSyntactic()) {
                    $assertions[] = $assertion;
                    $qimpl->assertions->remove($assertion);
                }
            }
            $wrap->stop();

            // Build request object.
            $studentanswers = array();
            $teacheranswers = array();

            foreach ($indexes as $i) {
                $subquestion = $this->subquestions[$i];

                $substep = $this->get_substep(null, $i);
                $subresp = $substep->filter_array($response);
                // Call test code.
                $subquestion->get_matching_answer_fail_test($subresp);

                // Set assertions.
                foreach ($subquestion->answers as $answer) {
                    foreach ($assertions as $assertion) {
                        $newassertion = clone $assertion;
                        $wrap->start();
                        $newassertion->setCorrectAnswer(count($teacheranswers));
                        $newassertion->setAnswer(count($studentanswers));
                        $qimpl = $q->question->getImpl();
                        $qimpl->assertions->push($newassertion);
                        $wrap->stop();
                    }
                    $teacheranswers[] = $answer->answer;
                }
                $studentanswers[] = $subresp['answer'];
            }
            // Get question instance with the variables!
            $qi = $this->wirisquestioninstance;

            // Call service.
            for ($i = 0; $i < count($studentanswers); $i++) {
                $qi->setStudentAnswer($i, $studentanswers[$i]);
            }
            for ($i = 0; $i < count($teacheranswers); $i++) {
                $q->setCorrectAnswer($i, $teacheranswers[$i]);
            }
            $request = $builder->newFeedbackRequest($this->join_feedback_text(), $q, $qi);
            $resp = $this->call_wiris_service($request);
            $qi->update($resp);

            // Parse response.
            $numsubq = 0;
            $numsubans = 0;
            foreach ($indexes as $i) {
                $subquestion = $this->subquestions[$i];
                $substep = $this->get_substep(null, $i);
                $subresp = $substep->filter_array($response);
                // Compute matching answer for this subquestion.
                $matching = null;
                $maxgrade = 0.0;
                foreach ($subquestion->answers as $answer) {
                    $grade = $qi->getAnswerGrade($numsubans, $numsubq, $q);
                    if ($grade > $maxgrade) {
                        $maxgrade = $grade;
                        $matching = $answer;
                    }
                    if (!isset($matching) && $subquestion->compare_response_with_answer($subresp, $answer)) {
                        $matching = $answer;
                    }
                    $numsubans++;
                }
                $matchinganswerid = 0;
                if (!empty($matching)) {
                    $matchinganswerid = $matching->id;
                    if ($maxgrade < 1.0) {
                        $subquestion->step->set_var('_matching_answer_grade', $maxgrade, true);
                    }
                }
                $subresphash = md5($subresp['answer']);
                $subquestion->step->set_var('_response_hash', $subresphash, true);
                $subquestion->step->set_var('_matching_answer', $matchinganswerid, true);
                $numsubq++;
            }
            // Update question instance.
            $xml = $qi->serialize();
            $this->step->set_var('_qi', $xml, true);
            $this->step->reset_attempts();
        } catch (moodle_exception $e) {
            // Notify of the error.
            $this->step->inc_attempts();
            throw $e;
        }
    }

    public function grade_response(array $response) {
        $this->set_shortanswer_matching_answers($response);
        // Use wiris subquestion types in base question.
        if ($this->step->is_error()) {
            return array(null, question_state::$needsgrading);
        } else {
            $basesubquestions = $this->base->subquestions;
            $this->base->subquestions = $this->subquestions;
            $result = parent::grade_response($response);
            $this->base->subquestions = $basesubquestions;
            return $result;
        }
    }

    public function clear_wrong_from_response(array $response) {
        $this->set_shortanswer_matching_answers($response);
        // Clean "_sqi" index from clean response:
        // Is not necessary and, in some scenarios, (multiple tries for example) the sqi variable is scaped twice.
        if (array_key_exists("_sqi", $response)) {
            unset($response["_sqi"]);
        }
        // Use wiris subquestion types in base question.
        $basesubquestions = $this->base->subquestions;
        $this->base->subquestions = $this->subquestions;
        $result = parent::clear_wrong_from_response($response);
        $this->base->subquestions = $basesubquestions;
        return $result;
    }

    public function get_num_parts_right(array $response) {
        $this->set_shortanswer_matching_answers($response);
        // Use wiris subquestion types in base question.
        $basesubquestions = $this->base->subquestions;
        $this->base->subquestions = $this->subquestions;
        $result = parent::get_num_parts_right($response);
        $this->base->subquestions = $basesubquestions;
        return $result;
    }

    public function compute_final_grade($responses, $totaltries) {
        $this->set_shortanswer_matching_answers($responses);
        // Use wiris subquestion types in base question.
        $basesubquestions = $this->base->subquestions;
        $this->base->subquestions = $this->subquestions;
        $result = parent::compute_final_grade($responses, $totaltries);
        $this->base->subquestions = $basesubquestions;
        return $result;
    }

    public function get_correct_response() {
        // Use wiris subquestion types in base question.
        $basesubquestions = $this->base->subquestions;
        $this->base->subquestions = $this->subquestions;
        $result = parent::get_correct_response();
        $this->base->subquestions = $basesubquestions;
        return $result;
    }

    public function join_all_text() {
        $text = parent::join_all_text();
        // Subquestions.
        foreach ($this->subquestions as $key => $question) {
            // Numerical question type is also possible but don't have the method.
            if (method_exists($question, 'join_all_text')) {
                $text .= ' ' . $question->join_all_text();
            }
        }
        return $text;
    }

    /**
     * @return String Return all the question text without feedback texts.
     */
    public function join_question_text() {
        $text = parent::join_question_text();
        // Subquestions.
        if (method_exists($question, 'join_question_text')) {
            $text .= ' ' .$question->join_question_text();
        }
        return $text;
    }


    /**
     *
     * @return String Return the general feedback text in a single string so Wiris
     * quizzes can extract the variable placeholders.
     */
    public function join_feedback_text() {
        $text = parent::join_feedback_text();
        // Subquestions.
        foreach ($this->subquestions as $key => $question) {
            // Numerical question type is also possible but don't have the method.
            if (method_exists($question, 'join_feedback_text')) {
                $text .= ' ' . $question->join_feedback_text();
            }
        }
        return $text;
    }

    public function get_renderer(moodle_page $page) {
        // Disable Strict standard errors before calling the parent because the
        // subquestions are not of class question_graded_automatically and
        // therefore the renderer overriding function subquestion doesn't have
        // a compatible type hinting.
        $errors = error_reporting();
        error_reporting($errors & ~E_STRICT);
        $result = parent::get_renderer($page);
        error_reporting($errors);
        return $result;
    }

    public function summarise_response(array $response) {
        // This function must return plain text output. Since student response
        // may be mathml and the conversion MathML => text made in
        // expand_variables_text() is not good, we prevent to show incorrect
        // data.
        return get_string('contentnotviewable', 'qtype_multianswerwiris');
    }
}
