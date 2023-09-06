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

namespace qbank_history;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/editlib.php');

/**
 * Custom history view - qbank api test.
 *
 * @package    qbank_history
 * @copyright  2022 Catalyst IT Australia Pty Ltd
 * @author     Safat Shahin <safatshahin@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @coversDefaultClass \qbank_history\question_history_view
 */
class question_history_view_test extends \advanced_testcase {

    /**
     * Test that the history page shows all the versions of a question.
     *
     * @covers ::display
     */
    public function test_question_history_shows_all_versions() {
        $this->resetAfterTest();
        $this->setAdminUser();
        $generator = $this->getDataGenerator();
        $questiongenerator = $this->getDataGenerator()->get_plugin_generator('core_question');

        // Create a course.
        $course = $generator->create_course();
        $context = \context_course::instance($course->id);

        // Create a question in the default category.
        $contexts = new \core_question\local\bank\question_edit_contexts($context);
        $cat = $questiongenerator->create_question_category();
        $questiondata1 = $questiongenerator->create_question('numerical', null,
            ['name' => 'Example question', 'category' => $cat->id]);

        // Create a new version.
        $questiondata2 = $questiongenerator->update_question($questiondata1, null,
            ['name' => 'Example question second version']);

        $entry = get_question_bank_entry($questiondata1->id);

        // Generate the view.
        $view = new question_history_view($contexts, new \moodle_url('/'), $course,  $entry->id, '/');
        ob_start();
        $pagevars = [
            'qpage' => 0,
            'qperpage' => 20,
            'cat' => $cat->id . ',' . $cat->contextid,
            'recurse' => false,
            'showhidden' => false,
            'qbshowtext' => false
        ];
        $view->display($pagevars, 'questions');
        $html = ob_get_clean();

        // Verify the output includes the first version.
        $this->assertStringContainsString($questiondata1->name, $html);

        // Verify the output includes the second version.
        $this->assertStringContainsString($questiondata2->name, $html);
    }

    /**
     * Test that the question bank header in the history page shows the latest question.
     *
     * @covers ::display_question_bank_header
     */
    public function test_display_question_bank_header() {
        $this->resetAfterTest();
        $this->setAdminUser();
        $generator = $this->getDataGenerator();
        $questiongenerator = $this->getDataGenerator()->get_plugin_generator('core_question');

        // Create a course.
        $course = $generator->create_course();
        $context = \context_course::instance($course->id);

        // Create a question in the default category.
        $contexts = new \core_question\local\bank\question_edit_contexts($context);
        $cat = $questiongenerator->create_question_category();
        $questiondata1 = $questiongenerator->create_question('numerical', null,
            ['name' => 'First version', 'category' => $cat->id]);

        $entry = get_question_bank_entry($questiondata1->id);

        // Generate the view.
        $view = new question_history_view($contexts, new \moodle_url('/'), $course,  $entry->id, '/');
        ob_start();
        $view->display_question_bank_header();
        $headerhtml = ob_get_clean();
        // Verify the output includes the latest version.
        $this->assertStringContainsString($questiondata1->name, $headerhtml);

        $questiondata2 = $questiongenerator->update_question($questiondata1, null,
            ['name' => 'Second version']);
        $view = new question_history_view($contexts, new \moodle_url('/'), $course,  $entry->id, new \moodle_url('/'));
        ob_start();
        $view->display_question_bank_header();
        $headerhtml = ob_get_clean();

        $this->assertStringContainsString($questiondata2->name, $headerhtml);
    }
}
