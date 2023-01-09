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
namespace mod_data;

use mod_data\external\record_exporter;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/data/locallib.php');

/**
 * Unit tests for locallib.php
 *
 * @package    mod_data
 * @copyright  2022 Laurent David <laurent.david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class locallib_test extends \advanced_testcase {

    /**
     * Confirms that search is working
     * @covers ::data_search_entries
     */
    public function test_data_search_entries() {
        $this->resetAfterTest();
        $this->setAdminUser();
        $course = $this->getDataGenerator()->create_course();
        $record = new \stdClass();
        $record->course = $course->id;
        $record->name = "Mod data delete test";
        $record->intro = "Some intro of some sort";

        $module = $this->getDataGenerator()->create_module('data', $record);
        $titlefield = $this->getDataGenerator()->get_plugin_generator('mod_data')->create_field(
            (object) [
                'name' => 'title',
                'type' => 'text',
                'required' => 1
            ],
            $module);
        $captionfield = $this->getDataGenerator()->get_plugin_generator('mod_data')->create_field(
            (object) [
                'name' => 'caption',
                'type' => 'text',
                'required' => 1
            ],
            $module);
        $this->getDataGenerator()->get_plugin_generator('mod_data')->create_entry($module, [
            $titlefield->field->id => 'Entry 1',
            $captionfield->field->id => 'caption'
        ]);
        $this->getDataGenerator()->get_plugin_generator('mod_data')->create_entry($module, [
            $titlefield->field->id => 'Entry 2',
            $captionfield->field->id => ''
        ]);
        $cm = get_coursemodule_from_id('data', $module->cmid);
        // Search for entries without any search query set, we should return them all.
        list($records, $maxcount, $totalcount, $page, $nowperpage, $sort, $mode) =
            data_search_entries($module, $cm, \context_course::instance($course->id), 'list', 0);
        $this->assertCount(2, $records);
        // Search for entries for "caption" we should return only one of them.
        list($records, $maxcount, $totalcount, $page, $nowperpage, $sort, $mode) =
            data_search_entries($module, $cm, \context_course::instance($course->id), 'list', 0, 'caption');
        $this->assertCount(1, $records);
        // Same search but we order by title.
        list($records, $maxcount, $totalcount, $page, $nowperpage, $sort, $mode) =
            data_search_entries($module, $cm, \context_course::instance($course->id), 'list', 0, 'caption',
                $titlefield->field->id, 'ASC');
        $this->assertCount(1, $records);
        $this->assert_record_entries_contains($records, $captionfield->field->id, 'caption');

        // Now with advanced search.
        $defaults = [];
        $fn = $ln = ''; // Defaults for first and last name.
        // Force value for advanced search.
        $_GET['f_' . $captionfield->field->id] = 'caption';
        list($searcharray, $searchtext) = data_build_search_array($module, false, [], $defaults, $fn, $ln);
        list($records, $maxcount, $totalcount, $page, $nowperpage, $sort, $mode) =
            data_search_entries($module, $cm, \context_course::instance($course->id), 'list', 0, $searchtext,
                $titlefield->field->id, 'ASC', 0, 0, true, $searcharray);
        $this->assertCount(1, $records);
        $this->assert_record_entries_contains($records, $captionfield->field->id, 'caption');
    }

    /**
     * Assert that all records contains a value for the matching field id.
     *
     * @param array $records
     * @param int $fieldid
     * @param string $content
     * @return void
     */
    private function assert_record_entries_contains($records, $fieldid, $content) {
        global $DB;
        foreach ($records as $record) {
            $fieldscontent = $DB->get_records('data_content', ['recordid' => $record->id]);
            foreach ($fieldscontent as $fieldcontent) {
                if ($fieldcontent->id == $fieldid) {
                    $this->assertStringContainsString($fieldcontent->content, $content);
                }
            }
        }
    }
}
