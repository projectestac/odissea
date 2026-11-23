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
 * Overall tests of GeoGebra questions.
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_geogebra;

use qbehaviour_walkthrough_test_base;
use question_state;
use test_question_maker;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/tests/helpers.php');
require_once($CFG->dirroot . '/question/type/geogebra/tests/helper.php');

/**
 * Overall tests of GeoGebra questions.
 *
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class walkthrough_test extends qbehaviour_walkthrough_test_base {
    public function test_interactive_point() {
            $q = test_question_maker::make_question('geogebra', 'point');

            $this->start_attempt_at_question($q, 'interactive', 1);

            $data = $this->quba->get_question_attempt($this->slot)->get_last_step()->get_qt_data();
            $summaryexpected = 'Drag the point to (' . $data['_var_a'] . '/' . $data['_var_b'] . ')';
            $this->assertEquals($summaryexpected, $q->get_question_summary());

            // Check the initial state.
            $this->check_current_state(question_state::$todo);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_contains_submit_button_expectation(true),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_validation_error_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Submit blank.
            $this->process_submission(array(
                    '-submit'   => 1,
                    'answer'    => '',
                    'ggbbase64' => 'asd'
            )); // This isn't a ggbBase64 string but it's ok for testing...

            // Verify.
            $this->check_current_state(question_state::$invalid);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_contains_submit_button_expectation(true),
                    $this->get_contains_validation_error_expectation(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Submit something that is not allowed to be a response.
            $this->process_submission(array(
                    '-submit'   => 1,
                    'answer'    => 'asd',
                    'ggbxml'    => ggbstringsfortesting::$pointxml,
                    'ggbbase64' => 'asd'
            )); // This isn't a ggbBase64 string but it's ok for testing...

            // Verify.
            $this->check_current_state(question_state::$invalid);
            $this->check_current_mark(null);

            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_contains_submit_button_expectation(true),
                    $this->get_contains_validation_error_expectation(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Now get it right.
            $this->process_submission(array(
                    '-submit'   => 1,
                    'answer'    => '1',
                    'ggbxml'    => ggbstringsfortesting::$pointxml,
                    'ggbbase64' => 'asd'
            )); // This isn't a ggbBase64 string but it's ok for testing...

            $this->check_current_state(question_state::$gradedright);
            $this->check_current_mark(1);
            $this->check_current_output(
                    $this->get_contains_mark_summary(1),
                    $this->get_contains_correct_expectation(),
                    $this->get_does_not_contain_validation_error_expectation(),
                    $this->get_no_hint_visible_expectation()
            );
            $this->assertEquals('e=true, Grade: 1.00; Total: 1', $this->quba->get_response_summary($this->slot));
    }

    public function test_deferredfeedback_point() {
            $q = test_question_maker::make_question('geogebra', 'point');

            $this->start_attempt_at_question($q, 'deferredfeedback', 1);

            // Check the initial state.
            $this->check_current_state(question_state::$todo);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_validation_error_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Submit blank.
            $this->process_submission(array('answer' => ''));

            // Verify.
            $this->check_current_state(question_state::$todo);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_validation_error_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Submit something that must not validate - missing ggbbase64...
            $this->process_submission(array(
                    'answer' => '1',
                    'ggbxml' => ggbstringsfortesting::$pointxml
            ));

            // Verify.
            $this->check_current_state(question_state::$todo);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Submit something that must not validate - wrong responsestring: must only contain 0 and 1.
            $this->process_submission(array(
                    'answer'    => '123',
                    'ggbxml'    => ggbstringsfortesting::$pointxml,
                    'ggbbase64' => 'asd'
            )); // This isn't a ggbBase64 string but it's ok for testing...

            // Verify.
            $this->check_current_state(question_state::$todo);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Now put in the right answer.
            $this->process_submission(array(
                    'answer'    => '1',
                    'ggbxml'    => ggbstringsfortesting::$pointxml,
                    'ggbbase64' => 'asd'
            )); // This isn't a ggbBase64 string but it's ok for testing...

            $this->check_current_state(question_state::$complete);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_does_not_contain_feedback_expectation(),
                    $this->get_does_not_contain_validation_error_expectation(),
                    $this->get_does_not_contain_try_again_button_expectation(),
                    $this->get_no_hint_visible_expectation()
            );

            // Submit all and finish.
            $this->finish();
            $this->check_current_state(question_state::$gradedright);
            $this->check_current_mark(1);
            $this->check_current_output(
                    $this->get_contains_mark_summary(1),
                    $this->get_contains_correct_expectation(),
                    $this->get_does_not_contain_validation_error_expectation(),
                    $this->get_no_hint_visible_expectation()
            );
            $this->assertEquals(
                    'e=true, Grade: 1.00; Total: 1',
                    $this->quba->get_response_summary($this->slot)
            );
    }

    public function test_interactive_manually() {
            $q = test_question_maker::make_question('geogebra', 'manually');

            $this->start_attempt_at_question($q, 'interactive', 1); // Should result in manualgraded behaviour.

            $behaviour = $this->quba->get_question_attempt($this->slot)->get_behaviour()->get_name();
            $this->assertEquals('manualgraded', $behaviour);

            // Check the initial state.
            $this->check_current_state(question_state::$todo);
            $this->check_current_mark(null);
            $this->render();

            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_contains_question_text_expectation($q),
                    $this->get_does_not_contain_feedback_expectation()
            );

            // Submit no answer but ggbBase64 and ggbxml -> this should be enough for manual graded.
            $this->process_submission(array(
                    '-submit'   => 1,
                    'answer'    => '',
                    'ggbxml'    => ggbstringsfortesting::$pointxml,
                    'ggbbase64' => 'asd'
            )); // This isn't a ggbBase64 string but it's ok for testing...

            // Verify.
            $this->check_current_state(question_state::$complete);
            $this->check_current_mark(null);
            $this->check_current_output(
                    $this->get_contains_marked_out_of_summary(),
                    $this->get_contains_question_text_expectation($q),
                    $this->get_does_not_contain_feedback_expectation()
            );

            $this->finish();
            $this->check_current_state(question_state::$needsgrading);

            $this->quba->manual_grade($this->slot, "Not right, but at least some response", 0.5, FORMAT_HTML);

            $this->check_current_state(question_state::$mangrpartial);
            $this->check_current_mark(0.5);
            $this->check_current_output(
                    $this->get_contains_mark_summary(0.5),
                    $this->get_contains_general_feedback_expectation($q),
                    $this->get_no_hint_visible_expectation()
            );
            $this->assertEquals(
                    'Response graded manually',
                    $this->quba->get_response_summary($this->slot)
            );
    }

    #[\PHPUnit\Framework\Attributes\Group('baseline')]
    /**
     * Hints taken from the submitted exercise result are cleaned before they are rendered.
     *
     * @covers \qtype_geogebra_renderer::specific_feedback
     */
    public function test_exercise_hint_is_cleaned(): void {
        $q = test_question_maker::make_question('geogebra', 'point');
        $q->isexercise = 1;
        $this->start_attempt_at_question($q, 'deferredfeedback', 1);

        $this->process_submission([
            'answer' => '1',
            'ggbxml' => ggbstringsfortesting::$pointxml,
            'ggbbase64' => 'asd',
            'exerciseresult' => '{"a":{"result":"CORRECT","fraction":1,"hint":"Well done<img src=x onerror=alert(1)>"}}',
        ]);
        $this->finish();

        // Violation: the event handler must not reach the page; verification: the hint is still shown.
        $this->check_current_output(
            new \question_no_pattern_expectation('/<img[^>]*onerror/'),
            new \question_pattern_expectation('/Well done/')
        );
    }

    #[\PHPUnit\Framework\Attributes\Group('baseline')]
    /**
     * Applet parameters from the question definition cannot inject attributes into the applet element.
     *
     * @covers \qtype_geogebra_renderer::formulation_and_controls
     */
    public function test_applet_parameters_cannot_inject_attributes(): void {
        $q = test_question_maker::make_question('geogebra', 'point');
        $q->ggbparameters = '{} onmouseover=alert(document.domain)';

        $this->start_attempt_at_question($q, 'interactive', 1);

        $this->check_current_output(
            new \question_no_pattern_expectation('/data-parameters=\{\}\s/'),
            new \question_pattern_expectation('/data-parameters="\{\} onmouseover=alert\(document\.domain\)"/')
        );
    }

    #[\PHPUnit\Framework\Attributes\Group('baseline')]
    /**
     * Regular JSON applet parameters are rendered quoted and escaped in the applet element.
     *
     * @covers \qtype_geogebra_renderer::formulation_and_controls
     */
    public function test_applet_parameters_are_rendered(): void {
        $q = test_question_maker::make_question('geogebra', 'point');
        $q->ggbparameters = '{"id":"applet1","width":800}';

        $this->start_attempt_at_question($q, 'interactive', 1);

        $this->check_current_output(
            new \question_pattern_expectation('/data-parameters="\{&quot;id&quot;:&quot;applet1&quot;,&quot;width&quot;:800\}"/')
        );
    }
}
