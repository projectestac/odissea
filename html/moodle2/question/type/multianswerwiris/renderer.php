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
require_once($CFG->dirroot . '/question/type/multianswer/renderer.php');
require_once($CFG->dirroot . '/question/type/wq/renderer.php');

class qtype_multianswerwiris_renderer extends qtype_wq_renderer {

    public function __construct(moodle_page $page, $target) {
        parent::__construct(new qtype_multianswerwiris_helper_renderer($page, $target), $page, $target);
    }
}
class qtype_multianswerwiris_helper_renderer extends qtype_multianswer_renderer {
    public function subquestion(question_attempt $qa, question_display_options $options, $index, $subq) {
        if ($subq->get_type_name() == 'shortanswerwiris') {
            $subquestion = new qtype_multianswerwiris_shortanswer_helper_question($subq);
        } else if (substr($subq->get_type_name(), -5) == 'wiris') {
            $subquestion = $subq->base;
        } else {
            $subquestion = $subq;
        }
        if ($subq->get_type_name() == 'shortanswerwiris') {
            $renderer = $this->page->get_renderer('qtype_multianswerwiris', 'wirisanswerfield');
            $text = $renderer->subquestion($qa, $options, $index, $subquestion);
        } else {
            $text = parent::subquestion($qa, $options, $index, $subquestion);
        }
        $text = $qa->get_question()->format_text($text, FORMAT_HTML, $qa, 'question', 'subquestion', $subq->id);
        return $text;
    }
}
/**
 * Helper/Hack class which is a mix between the base shortanswer question class
 * and the shortanswerwiris question class so it is usable by the multianswer
 * renderer functions.
 * **/
class qtype_multianswerwiris_shortanswer_helper_question extends qtype_shortanswer_question {
    private $subq;

    public function __construct($subq) {
        $this->subq = $subq;

        $this->qtype = &$this->subq->base->qtype; // Base shortanswer qtype.

        $this->maxmark = &$this->subq->maxmark;
        $this->answers = &$this->subq->answers;
    }
    // Shortanswerwiris grading.
    public function get_matching_answer(array $response) {
        if (isset($response['answer'])) {
            if (!empty($response['correct_response'])) {
                // This is called to produce de feedback popup "The correct response is ...".
                return $this->subq->base->get_matching_answer($this->subq->base->get_correct_response());
            } else {
                // This is called to know how to render the input field (correct,
                // partially correct, incorrect, etc).
                if (!$this->subq->step->is_error()) {
                    if (!is_null($this->subq->step->get_var('_matching_answer'))) {
                        return $this->subq->get_matching_answer($response);
                    }
                    // This code is for retro-compatibility. The attempts graded
                    // with previous versions of WIRIS quizzes don't have the
                    // '_matching_answer' var but a '_fraction' var. We re-grade
                    // such answers in order to have the new data and therefore
                    // have the good rendering of correct/incorrect responses.
                    if (!is_null($this->subq->step->get_var('_fraction'))) {
                        return $this->subq->get_matching_answer($response);
                    }
                }
            }
        }
        return null;
    }
    public function get_correct_response() {
        // Mark the correct response so we can know inside get_matching_answer
        // that the value is comming from this function and not from the user.
        $correct = $this->subq->get_correct_response();
        $correct['correct_response'] = true;
        return $correct;
    }
}

/**
 * Subclass for generating the bits of output specific to shortanswerwiris
 * subquestions. Replaces the qtype_multianswer_textfield_renderer class.
 */
class qtype_multianswerwiris_wirisanswerfield_renderer extends qtype_multianswer_subq_renderer_base {
    public function subquestion(question_attempt $qa, question_display_options $options,
            $index, question_graded_automatically $subq) {

        $fieldprefix = 'sub' . $index . '_';
        $fieldname = $fieldprefix . 'answer';

        $response = $qa->get_last_qt_var($fieldname);
        if ($subq->qtype->name() == 'shortanswer') {
            $matchinganswer = $subq->get_matching_answer(array('answer' => $response));
        } else if ($subq->qtype->name() == 'numerical') {
            list($value, $unit, $multiplier) = $subq->ap->apply_units($response, '');
            $matchinganswer = $subq->get_matching_answer($value, 1);
        } else {
            $matchinganswer = $subq->get_matching_answer($response);
        }

        if (!$matchinganswer) {
            if (is_null($response) || $response === '') {
                $matchinganswer = new question_answer(0, '', null, '', FORMAT_HTML);
            } else {
                $matchinganswer = new question_answer(0, '', 0.0, '', FORMAT_HTML);
            }
        }

        // Work out a good input field size.
        // Moodle 2.6 and upwards.
        if (class_exists('core_text')) {
            $size = max(1, core_text::strlen(trim($response)) + 1);
            foreach ($subq->answers as $ans) {
                $size = max($size, core_text::strlen(trim($ans->answer)));
            }
        } else {
            $size = max(1, textlib::strlen(trim($response)) + 1);
            foreach ($subq->answers as $ans) {
                $size = max($size, textlib::strlen(trim($ans->answer)));
            }
        }
        $size = min(60, round($size + rand(0, $size * 0.15)));
        // The rand bit is to make guessing harder.

        $inputattributes = array(
            'type' => 'text',
            'name' => $qa->get_qt_field_name($fieldname),
            'value' => $response,
            'id' => $qa->get_qt_field_name($fieldname),
            'size' => $size,
            // Popup editor class.
            'class' => 'wirisanswerfield wirisembedded wiriscopystyle',
        );
        if ($options->readonly) {
            $inputattributes['readonly'] = 'readonly';
        }

        $feedbackimg = '';
        if ($options->correctness) {
            $inputattributes['class'] .= ' wirisembeddedfeedback ' . $this->feedback_class($matchinganswer->fraction);
        }

        if ($subq->qtype->name() == 'shortanswer') {
            $correctanswer = $subq->get_matching_answer($subq->get_correct_response());
        } else {
            $correctanswer = $subq->get_correct_answer();
        }

        $feedbackpopup = parent::feedback_popup($subq, $matchinganswer->fraction,
                $subq->format_text($matchinganswer->feedback, $matchinganswer->feedbackformat,
                        $qa, 'question', 'answerfeedback', $matchinganswer->id),
                s($correctanswer->answer), $options);

        $output = html_writer::start_tag('span', array('class' => 'subquestion'));
        $output .= html_writer::tag('label', get_string('answer'),
                array('class' => 'subq accesshide', 'for' => $inputattributes['id']));
        $output .= html_writer::empty_tag('input', $inputattributes);
        $output .= $feedbackimg;
        $output .= $feedbackpopup;
        $output .= html_writer::end_tag('span');

        return $output;
    }

    public function feedback_class($fraction) {
        return 'wiris' . parent::feedback_class($fraction);
    }
}
