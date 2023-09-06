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
 * The mod_quiz quiz grade updated event.
 *
 * @package    mod_quiz
 * @copyright  2021 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_quiz\event;

/**
 * The mod_quiz quiz grade updated event class.
 *
 * @property-read array $other {
 *      Extra information about event.
 *
 *      - int newgrade: the new maximum grade value.
 *      - int oldgrade: the old maximum grade value.
 * }
 *
 * @package    mod_quiz
 * @copyright  2021 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_grade_updated extends \core\event\base {
    protected function init() {
        $this->data['objecttable'] = 'quiz';
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_TEACHING;
    }

    public static function get_name() {
        return get_string('eventquizgradeupdated', 'mod_quiz');
    }

    public function get_description() {
        return "The user with id '$this->userid' updated the maximum grade for the quiz with " .
            "course module id '$this->contextinstanceid'. " .
            "The maximum grade was changed from '{$this->other['oldgrade']}' to '{$this->other['newgrade']}'.";
    }

    public function get_url() {
        return new \moodle_url('/mod/quiz/edit.php', [
            'cmid' => $this->contextinstanceid
        ]);
    }

    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->objectid)) {
            throw new \coding_exception('The \'objectid\' value must be set.');
        }

        if (!isset($this->contextinstanceid)) {
            throw new \coding_exception('The \'contextinstanceid\' value must be set.');
        }

        if (!isset($this->other['oldgrade'])) {
            throw new \coding_exception('The \'oldgrade\' value must be set in other.');
        }

        if (!isset($this->other['newgrade'])) {
            throw new \coding_exception('The \'newgrade\' value must be set in other.');
        }
    }

    public static function get_objectid_mapping() {
        return ['db' => 'quiz', 'restore' => 'quiz'];
    }

    public static function get_other_mapping() {
        return [];
    }
}
