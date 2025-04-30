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

require_once("$CFG->libdir/gradelib.php");

class local_wsvicensvives_external extends external_api {

    public static function update_lti_grade_parameters() {
        return new external_function_parameters(
            [
                'courseid' => new external_value(PARAM_INT, 'ID of the course'),
                'userid' => new external_value(PARAM_INT, 'ID of the user'),
                'ltiidnumber' => new external_value(PARAM_RAW, 'ID number of the LTI activity'),
                'grade' => new external_value(PARAM_FLOAT, 'Grade'),
            ]
        );
    }

    public static function update_lti_grade_returns() {
        return new external_value(PARAM_BOOL, 'Status');
    }

    public static function update_lti_grade($courseid, $userid, $ltiidnumber, $grade) {
        global $DB, $USER, $CFG;

        // Parameter validation.
        $params = ['courseid' => $courseid, 'userid' => $userid, 'ltiidnumber' => $ltiidnumber, 'grade' => $grade];
        $params = self::validate_parameters(self::update_lti_grade_parameters(), $params);

        if (!$course = $DB->get_record('course', ['id' => $params['courseid']])) {
            throw new moodle_exception('notexistcourse');
        }

        if (!$user = $DB->get_record('user', ['id' => $params['userid']])) {
            throw new moodle_exception('notexistuser');
        }

        $context = context_course::instance($course->id);

        if (!has_capability('moodle/grade:edit', $context)) {
            throw new moodle_exception('nopermissions', '', '', get_string('grade:edit', 'role'));
        }

        if (!is_enrolled($context, $user)) {
            throw new moodle_exception('usernotenroled');
        }

        $gradeitem = grade_item::fetch([
            'courseid' => $course->id,
            'itemtype' => 'mod',
            'itemmodule' => 'lti',
            'idnumber' => $params['ltiidnumber'],
        ]);
        if (!$gradeitem) {
            throw new moodle_exception('ltinotexist');
        }

        return $gradeitem->update_final_grade($userid, $grade, 'vicensvives');
    }
}
