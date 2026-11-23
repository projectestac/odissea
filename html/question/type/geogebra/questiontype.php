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

/**
 * GeoGebra question type
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
global $CFG;
require_once($CFG->dirroot . '/question/type/shortanswer/questiontype.php');

/**
 * GeoGebra question type
 *
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_geogebra extends question_type {

    /**
     * In order to let the base class automatically save, backup and restore the extra fields,
     * we return an array with all the database fields used by this question type. The first field is the table name.
     *
     * @return mixed array as above, or null to tell the base class to do nothing.
     */
    public function extra_question_fields() {
        return array('qtype_geogebra_options', 'ggbturl', 'ggbparameters', 'ggbviews', 'ggbcodebaseversion', 'ggbxml',
                'israndomized', 'randomizedvar', 'constraints', 'isexercise', 'forcedimensions', 'width', 'height');
    }

    /**
     * Saves question-type specific options
     *
     * This is called by {@see save_question()} to save the question-type specific data
     *
     * Always saved question options and if present saves the question answers and hints
     *
     * @return object $result->error or $result->notice
     * @param object $question This holds the information from the editing form,
     *                         it is not a standard question object.
     */
    public function save_question_options($question) {

        // Insert all the new answers.
        if (isset($question->answer)) {
            if (!empty($question->feedback) && !is_array($question->feedback[0])) {
                foreach ($question->feedback as $key => $value) {
                    $question->feedback[$key] = array('text' => $value . '<br>', 'format' => FORMAT_HTML);
                }
            }
            $parentresult = parent::save_question_answers($question);
            if ($parentresult !== null) {
                // Parent function returns null if all is OK. Otherwise we return an array with errors or notice.
                return $parentresult;
            }
        }
        // Save the question options.
        $parentresult = parent::save_question_options($question);
        if ($parentresult !== null) {
            return $parentresult;
        }

        $this->save_hints($question);

        return null;
    }

    /**
     * @return bool true if this question type sometimes requires manual grading.
     */
    public function is_manual_graded() {
        return true;
    }

    /**
     * @param qtype_geogebra_question $questiondata
     * @return null returning null since it is not possible to estimate.
     */
    public function get_random_guess_score($questiondata) {
        return null;
    }

    /**
     * GeoGebra questiontype should be able to perform analysis of student responses,
     * therefore implementing get_possible_responses and classify_response
     *
     * @return true this report can analyse all the student responses
     * for things like the quiz statistics report.
     */
    public function can_analyse_responses() {
        return true;
    }

    // TODO not correct if autochecking enabled.
    /**
     * This method should return all the possible types of response that are
     * recognised for this question.
     *
     * A response is an object with two fields, ->responseclass is a string
     * presentation of that response, and ->fraction, the credit for a response
     * in that class.
     *
     * Array keys have no specific meaning, but must be unique, and must be
     * the same if this function is called repeatedly.
     *
     * @param  object $questiondata                 the question definition data.
     * @return array keys are the decimal representation of the (binary) responsestring,
     *                                              values are arrays of possible responses to that subquestion.
     */
    public function get_possible_responses($questiondata) {
        // There are no possible answers which can be calculated if answers array is empty i.e. question is manually graded.
        if (empty($questiondata->options->answers)) {
            if ($questiondata->options->isexercise) {
                return array($questiondata->id =>
                    array(null => new question_possible_response("Response graded automatically", null)));
            }
            return array($questiondata->id => array(null => new question_possible_response("Response graded manually", null)));
        }

        $responses = array();
        /*
         * If one fraction is 1 for a particular answer then all other fractions may be irrelevant for correct response
         * for example answer[0] = e, fraction[0] = 1; answer[1] = e1, fraction[1] = 0.5;
         * Case 1: e might be the correct construction, e1 a part of the construction which will receive grading but probably
         * isn't needed for the correct construction (and is not part of the question)
         * Case 2: e might be the reduced fraction after adding questions, e1 the sum of the fractions but not reduced
         * response 00 meaning answer[0] & answer[1] incorrect (or not started yet) -> fraction for grade: 0 (OK in Case 1 & 2)
         * response 01 meaning answer[0] incorrect & answer[1] correct -> fraction for grade: 0.5 (OK in Case 1 & 2)
         * response 10 meaning answer[1] correct & answer[0] incorrect -> fraction for grade: 1 (OK in Case 1 but not possible in
         *  Case 2)
         * response 11 meaning answer[1] incorrect & answer[1] correct -> fraction for grade: 1 (OK in Case 1 & 2)
         * Since we have no possibility to decide which case we have for a question we return the possible responses from Case 1
         * since Case 2 could be reformulated to answer[0] = e, fraction[0] = 0.5; answer[1] = e1,
         * fraction[1] = 0.5 also resulting in the same grades.
         */
        $answers = $questiondata->options->answers;
        $count = pow(2, count($answers)) - 1;
        for ($i = $count; $i >= 0; $i--) {
            $response = decbin($i);
            $response = str_pad($response, count($answers), 0, STR_PAD_LEFT);
            $j = 0;
            $fraction = 0;
            $responseclass = '';
            foreach ($answers as $answer) {
                $correct = (bool)substr($response, $j, 1);
                if ($responseclass !== '') {
                    $responseclass .= ', ';
                }
                $responseclass .= $answer->answer . '=';
                if ($correct) {
                    $fraction += $answer->fraction;
                    $responseclass .= 'true';
                } else {
                    $responseclass .= 'false';
                }
                $j++;
            }
            if ($fraction > 1) {
                $fraction = 1;
            }
            $responses[$i] = new question_possible_response($responseclass, $fraction);
        }
        $responses[null] = question_possible_response::no_response();

        return array($questiondata->id => $responses);
    }

    /**
     * Initialise the common question_definition fields.
     *
     * @param question_definition $question     the question_definition we are creating.
     * @param object              $questiondata the question data loaded from the database.
     */
    protected function initialise_question_instance(question_definition $question, $questiondata) {
        parent::initialise_question_instance($question, $questiondata);
        $this->initialise_question_answers($question, $questiondata);
    }
}
