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
 * Test helpers for the geogebra question type.
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use qtype_geogebra\ggbstringsfortesting;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/type/geogebra/tests/fixtures/ggbstringsfortesting.php');

/**
 * Test helper class for the geogebra question type.
 *
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_geogebra_test_helper extends question_test_helper {

    /**
     * @return array of example question names that can be passed as the $which
     * argument of {@see test_question_maker::make_question} when $qtype is
     * this question type.
     */
    public function get_test_questions() {
        return array('point', 'manually'); // TODO add fraction (question with constraints and more than one answer).
    }

    /**
     * Make a question to test "Finding a point in the coordinate system"
     *
     * @return qtype_geogebra_question
     */
    public function make_geogebra_question_point() {
        question_bank::load_question_definition_classes('geogebra');
        $geo = new qtype_geogebra_question();
        test_question_maker::initialise_a_question($geo);
        $geo->name = "Finding a point in the plane";
        $geo->questiontext = "Drag the point to ({a}/{b})";
        $geo->generalfeedback = 'Generalfeedback: Dragging a point isn\'t to hard.';
        $geo->ggbxml = ggbstringsfortesting::$pointxml;
        $geo->ggbparameters = ggbstringsfortesting::$pointparameters;
        $geo->ggbviews = ggbstringsfortesting::$views;
        $geo->ggbcodebaseversion = '5.0';
        $geo->israndomized = 1;
        $geo->randomizedvar = 'a,b,';
        $geo->answers = array(
                13 => new question_answer(13, 'e', 1.0, 'Very Good!', FORMAT_HTML)
        );
        $geo->qtype = question_bank::get_qtype('geogebra');

        return $geo;
    }

    /**
     * Make a form with data to test "Finding a point in the coordinate system"
     *
     * @return \stdClass formdata
     */
    public function get_geogebra_question_form_data_point() {
        global $CFG;
        $form = new stdClass();
        $form->name = "Finding a point in the plane";
        $form->questiontext = array();
        $form->questiontext['format'] = "1";
        $form->questiontext['text'] = "Drag the point to ({a}/{b})";

        $form->defaultmark = 1;
        $form->generalfeedback = array();
        $form->generalfeedback['format'] = '1';
        $form->generalfeedback['text'] = "Generalfeedback: Dragging a point isn't to hard";

        $form->ggbturl = 'https://tube.geogebra.org/student/mI8RJzVzI';
        $form->ggbxml = ggbstringsfortesting::$pointxml;
        $form->ggbparameters = ggbstringsfortesting::$pointparameters;
        $form->ggbviews = ggbstringsfortesting::$views;
        $form->ggbcodebaseversion = '5.0';
        $form->israndomized = 1;
        $form->randomizedvar = 'a,b,';

        $form->noanswers = 1;
        $form->answer = array();
        $form->answer[0] = 'e';
        if ($CFG->version >= 2022041900) {
            $form->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        }

        $form->fraction = array();
        $form->fraction[0] = '1.0';

        $form->feedback = array();
        $form->feedback[0] = array();
        $form->feedback[0]['format'] = '1';
        $form->feedback[0]['text'] = 'Very good.';

        $form->penalty = '0.3333333';
        $form->numhints = 2;
        $form->hint = array();
        $form->hint[0] = array();
        $form->hint[0]['format'] = '1';
        $form->hint[0]['text'] = '';

        $form->hint[1] = array();
        $form->hint[1]['format'] = '1';
        $form->hint[1]['text'] = '';

        $form->qtype = 'geogebra';
        return $form;
    }

    /**
     * Make questiondata with data to test "Finding a point in the coordinate system"
     *
     * @return \stdClass questiondata
     */
    public function get_geogebra_question_data_point() {
        global $CFG;
        $q = new stdClass();
        $q->name = 'Finding a point in the plane';
        $q->questiontext = "Drag the point to ({a}/{b})";
        $q->questiontextformat = FORMAT_HTML;
        $q->generalfeedback = "Generalfeedback: Dragging a point isn't to hard";
        $q->generalfeedbackformat = FORMAT_HTML;
        $q->defaultmark = 1;
        $q->penalty = 0.3333333;
        $q->qtype = 'geogebra';
        $q->length = '1';
        $q->createdby = '2';
        $q->modifiedby = '2';
        $q->idnumber = 0;
        $q->options = new stdClass();
        $q->options->answers = array();
        $q->options->answers[0] = new stdClass();
        $q->options->answers[0]->answer = 'e';
        $q->options->answers[0]->fraction = '1.0000000';
        $q->options->answers[0]->feedback = 'Very good.';
        $q->options->answers[0]->feedbackformat = FORMAT_HTML;

        $q->options->ggbturl = 'https://tube.geogebra.org/student/mI8RJzVzI';
        $q->options->ggbxml = ggbstringsfortesting::$pointxml;
        $q->options->ggbparameters = ggbstringsfortesting::$pointparameters;
        $q->options->ggbviews = ggbstringsfortesting::$views;
        $q->options->ggbcodebaseversion = '5.0';
        $q->options->israndomized = 1;
        $q->options->randomizedvar = 'a,b,';
        if ($CFG->version >= 2022041900) {
            $q->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        }

        return $q;
    }

    /**
     * Make a question which has to be manually graded because answers are missing
     *
     * @return qtype_geogebra_question
     */
    public function make_geogebra_question_manually() {
        question_bank::load_question_definition_classes('geogebra');
        $geo = new qtype_geogebra_question();
        test_question_maker::initialise_a_question($geo);
        $geo->name = "Finding a point in the plane";
        $geo->questiontext = "Drag the point to ({a}/{b})";
        $geo->generalfeedback = 'Generalfeedback: Dragging a point isn\'t to hard.';
        $geo->ggbturl = 'https://tube.geogebra.org/student/mI8RJzVzI';
        $geo->ggbxml = ggbstringsfortesting::$pointxml;
        $geo->ggbparameters = ggbstringsfortesting::$pointparameters;
        $geo->ggbviews = ggbstringsfortesting::$views;
        $geo->ggbcodebaseversion = '5.0';
        $geo->israndomized = 0;
        $geo->randomizedvar = '';
        $geo->qtype = question_bank::get_qtype('geogebra');

        return $geo;
    }
}
