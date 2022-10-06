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
require_once($CFG->dirroot . '/question/type/wq/question.php');
require_once($CFG->dirroot . '/question/type/wq/step.php');

class qtype_shortanswerwiris_question extends qtype_wq_question
        implements question_automatically_gradable, question_response_answer_comparer {
    /**
     * A link to last question attempt step and also a helper class for some
     * grading issues.
     */
    public $step;

    /**
     * reference to Moodle's shortanswer question fields.
     */
    public $answers;

    public function __construct(question_definition $base = null) {
        parent::__construct($base);
        $this->step = new qtype_wirisstep();
    }
    public function start_attempt(question_attempt_step $step, $variant) {
        parent::start_attempt($step, $variant);
        $this->step->load($step);
    }
    public function apply_attempt_state(question_attempt_step $step) {
        parent::apply_attempt_state($step);
        $this->step->load($step);
        if ($this->step->is_first_step()) {
            // This is a regrade because is the only case where this function is
            // called with the first step instead of start_attempt. So invalidate
            // cached matching answers.
            $this->step->set_var('_response_hash', '0');
        }
    }
    /**
     * @return All the text of the question in a single string so Wiris Quizzes
     * can extract the variable placeholders.
     */
    public function join_all_text() {
        $text = parent::join_all_text();
        // Answers and feedback.
        foreach ($this->base->answers as $key => $value) {
            $text .= ' ' . $value->answer . ' ' . $value->feedback;
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
        // Answer feedback.
        foreach ($this->base->answers as $key => $value) {
            $text .= ' ' . $value->feedback;
        }

        return $text;
    }

    public function grade_response(array $response) {
        $answer = $this->get_matching_answer($response);
        if ($answer) {
            $fraction = $answer->fraction;
            // Multiply Moodle fraction by quizzes grade (due to custom function
            // grading or compound grade distribution).
            $grade = $this->step->get_var('_matching_answer_grade');
            if (!empty($grade)) {
                $fraction = $fraction * $grade;
            }
            $state = question_state::graded_state_for_fraction($fraction);
            return array($fraction, $state);
        } else if ($this->step->is_error()) {
            // Do not grade and tell teacher to do so...
            return array(null, question_state::$needsgrading);
        } else {
            return array(0, question_state::$gradedwrong);
        }
    }
    /**
     * Function used in unit testing environment. Throws an exception if it has
     * been configured to do so.
     * **/
    public function get_matching_answer_fail_test(array $response) {
        // BEGIN TEST
        // The following "if" is used only under unit-testing conditions.
        global $CFG;
        global $DB;
        $error = false;
        $conditiona = isset($CFG->wq_fail_shortanswer_grade) && $CFG->wq_fail_shortanswer_grade;
        if ($conditiona && $CFG->wq_fail_shortanswer_grade != 'false') {
            $fail = explode("@", $CFG->wq_fail_shortanswer_grade);
            $attemptid = $DB->get_record('question_attempt_steps',
                    array('id' => $this->step->step_id), 'questionattemptid')->questionattemptid;
            $attemptid = $DB->get_record('question_attempts', array('id' => $attemptid), 'questionusageid')->questionusageid;
            $activity = $DB->get_field('question_usages', 'component', array('id' => $attemptid));
            if ($activity == 'mod_quiz') {
                $attemptid = $DB->get_record('quiz_attempts', array('uniqueid' => $attemptid), 'id')->id;
                if ($attemptid == $fail[0]) { // Fail only the designated attempt.
                    if (count($fail) == 1) {
                        $error = true;
                    } else {
                        // Check also the name.
                        if ($this->name == $fail[1]) {
                            $error = true;
                        }
                    }
                }
            }
        }
        if (isset($CFG->wq_fail_shortanswer_grade) && $CFG->wq_fail_shortanswer_grade == 'true' && $response['answer'] == 'error') {
            // Only allow an explicit error if defined wq_fail_shortanswer_grade.
            $error = true;
        }
        // Used to simulate a grade failure when doing tests!
        if ($error) {
            throw new moodle_exception(get_string('failedtogradetest', 'qtype_shortanswerwiris', ($this->step->get_attempts() + 1)), 'qtype_wq');
        }
        // END TEST.
    }

    public function get_matching_answer(array $response) {
        try {
            // Quick return if no answer given.
            if (!isset($response['answer']) || $response['answer'] === null) {
                return null;
            }
            // Optimization in order to avoid a service call.
            $responsehash = md5($response['answer']);
            if ($this->step->get_var('_response_hash') == $responsehash) {
                $matchinganswer = $this->step->get_var('_matching_answer');
                if (!empty($matchinganswer)) {
                    return $this->base->answers[$matchinganswer];
                } else if (!is_null($matchinganswer)) {
                    return null;
                }
            }

            // Security protection:
            // The same question should not be graded more than N times with failure.
            if ($this->step->is_attempt_limit_reached()) {
                return null;
            }

            // Test code:
            // Does nothing on production, may throw exception on test environment.
            $this->get_matching_answer_fail_test($response);

            // Use the Wiris Quizzes API to grade this response.
            $builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
            // Build array of correct answers.
            $correctvalues = array();
            $correctanswers = array();
            $i = 0;
            foreach ($this->base->answers as $answer) {
                $correctvalues[] = $answer->answer;
                $correctanswers[] = $answer;
                $this->wirisquestion->setCorrectAnswer($i, $answer->answer);
                $i++;
            }
            // Load instance.
            $qi = $this->wirisquestioninstance;
            // Set correct answer to question instance.
            $qi->setStudentAnswer(0, $response['answer']);

            // Make call.
            $request = $builder->newFeedbackRequest($this->join_feedback_text(), $this->wirisquestion, $qi);
            $response = $this->call_wiris_service($request);
            $qi->update($response);

            // Choose best answer.
            $max = 0.0;
            $answer = null;
            for ($i = 0; $i < count($correctanswers); $i++) {
                $grade = $qi->getAnswerGrade($i, 0, $this->wirisquestion);
                if ($grade > $max) {
                    $max = $grade;
                    $answer = $correctanswers[$i];
                }
            }
            // Backup matching answer.
            $matchinganswerid = 0;
            // Reset variable.
            $this->step->set_var('_matching_answer_grade', null);
            if (!empty($answer)) {
                $matchinganswerid = $answer->id;
                if ($max < 1.0) {
                    $this->step->set_var('_matching_answer_grade', $max, true);
                }
            }

            $this->step->set_var('_matching_answer', $matchinganswerid, true);
            $this->step->set_var('_response_hash', $responsehash, true);
            $this->step->set_var('_qi', $qi->serialize(), true);
            $this->step->reset_attempts();

            return $answer;
        } catch (moodle_exception $e) {
            // Notify of the error.
            $this->step->inc_attempts();
            throw $e;
        }
    }

    public function summarise_response(array $response) {
        // This function must return plain text output. Since student response
        // may be mathml and the conversion MathML => text made in
        // expand_variables_text() is not good, we prevent to show incorrect
        // data.
        if (!$this->is_text_answer()) {
            return get_string('contentnotviewable', 'qtype_shortanswerwiris');
        } else {
            return parent::summarise_response($response);
        }
    }

    public function get_right_answer_summary() {
        return get_string('contentnotviewable', 'qtype_shortanswerwiris');
    }

    public function format_answer($text) {
        if ($this->is_text_answer() && !$this->is_compound_answer()) {
            $text = $this->expand_variables_text($text);
        } else {
            $text = $this->expand_variables_mathml($text);
        }

        return $text;
    }

    private function is_text_answer() {
        // @codingStandardsIgnoreStart
        $inputfield = $this->wirisquestion->question->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_ANSWER_FIELD_TYPE);
        $inputtext = ($inputfield == com_wiris_quizzes_api_QuizzesConstants::$ANSWER_FIELD_TYPE_TEXT);
        // @codingStandardsIgnoreEnd
        return $inputtext;
    }

    private function is_compound_answer() {
        // @codingStandardsIgnoreLine
        $iscompound = $this->wirisquestion->question->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER);
        return ($iscompound == 'true');
    }

    public function get_correct_response() {
        // We need to replace all aterisk for scaped asterisks:
        // Because shortanswer get_correct_response() methods
        // cleans all asterisks, asterisks are shortanswer wildcards.
        // However on Wiris shortanswers asterisk means product.
        foreach ($this->answers as $key => $value) {
            $this->answers[$key]->answer = str_replace('*', '\*', $value->answer);
        }

        $correct = parent::get_correct_response();
        $correct['answer'] = $this->format_answer($correct['answer']);
        return $correct;
    }
}
