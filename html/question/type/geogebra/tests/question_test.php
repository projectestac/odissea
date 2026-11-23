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
 * Unit tests for the GeoGebra question definition class.
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_geogebra;

use advanced_testcase;
use qtype_geogebra_question;
use question_state;
use test_question_maker;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/tests/helpers.php');
require_once($CFG->dirroot . '/question/type/geogebra/question.php');
require_once($CFG->dirroot . '/question/type/geogebra/tests/fixtures/ggbstringsfortesting.php');

/**
 * Unit tests for the GeoGebra question definition class.
 *
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_test extends advanced_testcase {

    public function test_is_complete_response() {
        /* @var $question qtype_geogebra_question the question object */
        $question = test_question_maker::make_question('geogebra', 'point');

        $this->assertFalse($question->is_complete_response(array()), "empty response mustn't result in complete response");
        $this->assertFalse($question->is_complete_response(array('ggbbase64' => 0)));
        $this->assertFalse($question->is_complete_response(array('ggbbase64' => '')),
                "empty ggbBase64 shouldn't result in complete response");
        // This isn't a ggbBase64 string but it's ok for testing...
        $this->assertFalse($question->is_complete_response(array('ggbbase64' => 'adf',
                                                                 'ggbxml'    => ggbstringsfortesting::$pointxml)),
                "if the question is automatically graded a missing answer mustn't result in a complete response");
        $this->assertTrue($question->is_complete_response(array('ggbbase64' => 'adf',
                                                                'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                                'answer'    => '0')));
        $this->assertTrue($question->is_complete_response(array('ggbbase64' => 'adf',
                                                                'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                                'answer'    => '01')));
        $this->assertFalse($question->is_complete_response(array('answer' => 'test')),
                "missing ggbBase64 mustn't result in complete response");

        $question = test_question_maker::make_question('geogebra', 'manually');

        $this->assertFalse($question->is_complete_response(array()), "empty response mustn't result in complete response");
        $this->assertFalse($question->is_complete_response(array('ggbbase64' => 0)));
        $this->assertFalse($question->is_complete_response(array('ggbbase64' => '')),
                "empty ggbBase64 shouldn't result in complete response");
        // This question is manually graded so ggbbase64 is enough.
        $this->assertTrue($question->is_complete_response(array('ggbbase64' => 'adf', 'ggbxml' => ggbstringsfortesting::$pointxml)),
                "if the question is manually graded answer should be empty");
        $this->assertTrue($question->is_complete_response(array('ggbbase64' => 'adf',
                                                                'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                                'answer'    => '0')));
        $this->assertTrue($question->is_complete_response(array('ggbbase64' => 'adf',
                                                                'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                                'answer'    => '01')));
        $this->assertFalse($question->is_complete_response(array('answer' => 'test')),
                "missing ggbBase64 mustn't result in complete response");
    }

    public function test_is_gradable_response() {
        /* @var $question qtype_geogebra_question the question object */
        $question = test_question_maker::make_question('geogebra', 'point');

        $this->assertFalse($question->is_gradable_response(array()), "empty response mustn't result in complete response");
        $this->assertFalse($question->is_gradable_response(array('ggbbase64' => 0)));
        $this->assertFalse($question->is_gradable_response(array('ggbbase64' => '')),
            "empty ggbBase64 shouldn't result in complete response");
        // This isn't a ggbBase64 string but it's ok for testing...
        $this->assertFalse($question->is_gradable_response(array('ggbbase64' => 'adf')),

        "if the question is automatically graded a missing answer mustn't result in a complete response");
        $this->assertTrue($question->is_gradable_response(array('ggbbase64' => 'adf',
                                                            'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                            'answer'    => '0')));
        $this->assertTrue($question->is_gradable_response(array('ggbbase64' => 'adf',
                                                            'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                            'answer'    => '01')));
        $this->assertFalse($question->is_gradable_response(array('answer' => 'test')),
            "missing ggbBase64 mustn't result in complete response");

        $question = test_question_maker::make_question('geogebra', 'manually');

        $this->assertFalse($question->is_gradable_response(array()), "empty response mustn't result in complete response");
        $this->assertFalse($question->is_gradable_response(array('ggbbase64' => 0)));
        $this->assertFalse($question->is_gradable_response(array('ggbbase64' => '')),
            "empty ggbBase64 shouldn't result in complete response");
        // This question is manually graded so ggbbase64 is enough.
        $this->assertTrue($question->is_gradable_response(array('ggbbase64' => 'adf',
                                                            'ggbxml'    => ggbstringsfortesting::$pointxml)),
            "if the question is manually graded answer should be empty");
        // ... nevertheless we don't check if the question is manually graded.
        $this->assertTrue($question->is_gradable_response(array('ggbbase64' => 'adf',
                                                            'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                            'answer'    => '0')));
        $this->assertTrue($question->is_gradable_response(array('ggbbase64' => 'adf',
                                                            'ggbxml'    => ggbstringsfortesting::$pointxml,
                                                            'answer'    => '01')));
        $this->assertFalse($question->is_gradable_response(array('answer' => 'test')),
            "missing ggbBase64 mustn't result in complete response");
    }

    public function test_grading() {
        /* @var $question qtype_geogebra_question the question object */
        $question = test_question_maker::make_question('geogebra', 'point');

        $this->assertEquals(array(0, question_state::$gradedwrong),
                $question->grade_response(array('ggbbase64' => 'adf', 'answer' => '0')));
        $this->assertEquals(array(1, question_state::$gradedright),
                $question->grade_response(array('ggbbase64' => 'adf', 'answer' => '1')));
    }

    public function test_summarise_response() {
        /* @var $question qtype_geogebra_question the question object */
        $question = test_question_maker::make_question('geogebra', 'point');
        $summary = $question->summarise_response(array('ggbbase64' => 'adf', 'answer' => '0'));
        $this->assertEquals('e=false, Grade: 0; Total: 0', $summary);

        $question = test_question_maker::make_question('geogebra', 'manually');
        $summary = $question->summarise_response(array('ggbbase64' => 'adf', 'answer' => ''));
        $this->assertEquals('Response graded manually', $summary);
    }
}
