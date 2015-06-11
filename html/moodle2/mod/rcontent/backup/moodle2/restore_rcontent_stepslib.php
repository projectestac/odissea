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
 * @package moodlecore
 * @subpackage backup-moodle2
 * @copyright 2010 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Define all the restore steps that will be used by the restore_rcontent_activity_task
 */

/**
 * Structure step to restore one rcontent activity
 */
class restore_rcontent_activity_structure_step extends restore_activity_structure_step {

    var $current_book_id = null;
    var $current_isbn = null;

    protected function define_structure() {

        $paths = array();
        $userinfo = $this->get_setting_value('userinfo');

        $paths[] = new restore_path_element('rcontent', '/activity/rcontent');
        $paths[] = new restore_path_element('rcontent_grades', '/activity/rcontent/grades/grade');
        $paths[] = new restore_path_element('rcontent_grades_details', '/activity/rcontent/grades/grades_details/grade_detail');

        // Return the paths wrapped into standard activity structure
        return $this->prepare_activity_structure($paths);
    }

    protected function process_rcontent($data) {
        global $DB;

        $data = (object)$data;
        $oldid = $data->id;

        $data->levelid = $this->get_level($data->levelcode, $data->name);

        $this->current_isbn = isset($data->isbn) ? $data->isbn : false;
        $data->bookid = $this->get_book_id($this->current_isbn, $data->name);
        $this->current_book_id = $data->bookid;

        $data->unitid = $this->get_unit_id($data->unitcode);
        $data->activityid = $this->get_activity_id($data->activitycode, $data->unitid);

        if (!isset($data->intro) && isset($data->summary)) {
            $data->intro = $data->summary;
            if ($CFG->texteditors !== 'textarea') {
                $data->intro = text_to_html($data->intro, false, false, true);
            }
            $data->introformat = FORMAT_HTML;
        }

        $data->course = $this->get_courseid();

        $data->timecreated = $this->apply_date_offset($data->timecreated);
        $data->timemodified = $this->apply_date_offset($data->timemodified);


        // insert the scorm record
        $newitemid = $DB->insert_record('rcontent', $data);
        // immediately after inserting "activity" record, call this
        $this->apply_activity_instance($newitemid);
    }

    protected function process_rcontent_grades($data) {
        global $DB;

        $data = (object)$data;

        $oldid = $data->id;
        $data->rcontentid = $this->get_new_parentid('rcontent');

        $data->unitid = $this->get_unit_id($data->unitcode);
        $data->activityid = $this->get_activity_id($data->activitycode, $data->unitid);

        $data->userid = $this->get_mappingid('user', $data->userid);

        $newitemid = $DB->insert_record('rcontent_grades', $data);
        $this->set_mapping('rcontent_grades', $oldid, $newitemid);
    }

    protected function process_rcontent_grades_details($data) {
        global $DB;

        $data = (object)$data;

        $oldid = $data->id;
        $data->rcontentid = $this->get_new_parentid('rcontent');

        $data->unitid = $this->get_unit_id($data->unitcode);
        $data->activityid = $this->get_activity_id($data->activitycode, $data->unitid);

        $data->userid = $this->get_mappingid('user', $data->userid);

        $newitemid = $DB->insert_record('rcontent_grades_details', $data);
        $this->set_mapping('rcontent_grades_details', $oldid, $newitemid);
    }

    protected function after_execute() {
        // Add scorm related files, no need to match by itemname (just internally handled context)
        $this->add_related_files('mod_rcontent', 'intro', null);

    }

    private function get_level($levelcode, $name) {
        global $DB;
        if ($levelcode == null or empty($levelcode)) {
            $levelcode = 'SENSE NIVELL';
        }

        if (!empty($levelcode)) {
            $levelid = $DB->get_field('rcommon_level', 'id', array('code' => $levelcode));
            if ($levelid) {
                return $levelid;
            }
        }
        $this->get_logger()->process("Level code: $levelcode not found in bd for activity name: ".$name."!" , backup::LOG_ERROR);
    }

    private function get_book_id($isbn, $name) {
        global $DB;
        if (!empty($isbn)) {
            $bookid = $DB->get_field('rcommon_books', 'id', array('isbn' => $isbn));
            if ($bookid) {
                return $bookid;
            }
        }
        $this->get_logger()->process("Book ISBN: {$isbn} not found in DB for activity name: ".$name, backup::LOG_ERROR);
        return false;
    }

    private function get_unit_id($unitcode) {
        global $DB;
        if (!empty($unitcode) && !empty($this->current_book_id)) {
            $unitid = $DB->get_field('rcommon_books_units', 'id', array('bookid' => $this->current_book_id, 'code' => $unitcode));
            if ($unitid) {
                return $unitid;
            }
            // Mostramos mensaje de error
            $this->get_logger()->process("Unit: $unitcode not found in DB for book {$this->current_isbn} (id {$this->current_book_id})"
            , backup::LOG_ERROR);
        }
        return 0;
    }

    private function get_activity_id($activitycode, $unitid) {
        global $DB;
        if (!empty($activitycode) && !empty($unitid) && !empty($this->current_book_id)) {
            $activityid = $DB->get_field('rcommon_books_activities', 'id', array('bookid' => $this->current_book_id, 'unitid' => $unitid, 'code' => $activitycode));
            if ($activityid) {
                return $activityid;
            }
            // Mostramos mensaje de error
            $this->get_logger()->process("Activity code: $activitycode not found in DB for book {$this->current_isbn} (id {$this->current_book_id}) and unit id: $unitid"
            , backup::LOG_ERROR);
        }
        return 0;
    }
}
