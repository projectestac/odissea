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

class local_wsvicensvives_external extends external_api {

    /**
     * Returns description of grades parameters
     * @return get_lti_grade_parameters
     */
    public static function get_lti_grade_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'userid' => new external_value(PARAM_INT, 'User ID'),
                'ltiidnumber' => new external_value(PARAM_TEXT, 'LTI ID'),
                'grade' => new external_value(PARAM_FLOAT, 'Grade'),
            )
        );
    }

    /**
     * return grades data
     * @param  integer $courseid identificador del curso
     * @param  integer $userid   identificador del usuario
     * @param  string  $ltiidnumber identificador del LTI
     * @return object  nota del LTI del usuario
     */
    public static function get_lti_grade($courseid, $userid, $ltiidnumber, $grade) {
        global $DB, $USER, $CFG;

        // Parameter validation.
        // REQUIRED.
        $params = self::validate_parameters(self::get_lti_grade_parameters(),
                    array(
                        'courseid' => $courseid,
                        'userid' => $userid,
                        'ltiidnumber' => $ltiidnumber,
                        'grade' => $grade,
                    )
                );
        if (!$course = $DB->get_record('course', array('id' => $courseid))) {
            throw new moodle_exception('notexistcourse');
        }
        /* Para 2.6.
        if (!$course = get_course($courseid)) {
            throw new moodle_exception('notexistcourse');
        }
        */
        $user = new stdClass();
        if (!$user = $DB->get_record('user', array('id' => $userid))) {
            throw new moodle_exception('notexistuser');
        }

        /* Para 2.6.
        if (!$user = core_user::get_user($userid, 'id', MUST_EXIST)) {
            throw new moodle_exception('notexistuser');
        }
        */

        // Context validation.
        $context = context_course::instance($course->id);

        // Capability checking.
        if (!has_capability('moodle/grade:edit', $context)) {
            throw new moodle_exception('nopermissions', '', '', get_string('grade:edit', 'role'));
        }

        $sql = "SELECT DISTINCT e.courseid
            FROM {enrol} e
                ,{user_enrolments} ue
                ,{course} c
            WHERE c.id = ?
            AND ue.enrolid = e.id
            AND ue.userid = ?
            AND e.courseid = c.id";
        if (!$exist = $DB->get_records_sql($sql, array($course->id, $user->id))) {
            throw new moodle_exception('usernotenroled');
        }

        // Nota en la base de datos...
        // Obtener.
        $ltisql = "SELECT l.*, cm.idnumber ".
            "FROM {lti} l inner join {course_modules} cm ON cm.instance = l.id AND cm.module = ".
            "(SELECT id FROM {modules} where name = 'lti') ".
            "WHERE cm.course = ? and cm.idnumber = ?";
        if (!$ltiinstance = $DB->get_record_sql($ltisql, array($courseid, $ltiidnumber))) {
            throw new moodle_exception('ltinotexist');
        }

        $gradesql = "SELECT gg.* ".
            "FROM {grade_grades} gg INNER JOIN {grade_items} gi on gg.itemid = gi.id ".
            "WHERE gi.iteminstance = ? AND gg.userid = ?";
        $create = 0;
        if (!$gradeobj = $DB->get_record_sql($gradesql, array($ltiinstance->id, $userid))) {
            // Buscamos el ITEM.
            if (!$gradeitem = $DB->get_record('grade_items', array('iteminstance' => $ltiinstance->id))) {
                // Crear el item para evaluaciones en el gradebook, partiendo del global del curso.
                $gradeitem = $DB->get_record('grade_items', array('courseid' => $courseid, 'itemtype' => 'course'));
                unset($gradeitem->id);
                $gradeitem->categoryid = $gradeitem->iteminstance;
                $gradeitem->itemname = $ltiinstance->name;
                $gradeitem->itemtype = 'mod';
                $gradeitem->itemmodule = 'lti';
                $gradeitem->iteminstance = $ltiinstance->id;
                $gradeitem->itemnumber = 0;
                $gradeitem->idnumber = $ltiinstance->idnumber;
                $gradeitem->sortorder = $gradeitem->sortorder + 1;
                $gradeitem->timecreated = time();
                $gradeitem->timemodified = time();
                $gradeitem->id = $DB->insert_record('grade_items', $gradeitem);
            }
            $create = 1;
            // Crear Grade a partir del Item.
            $gradeobj = new stdClass();
            $gradeobj->itemid = $gradeitem->id;
            $gradeobj->userid = $userid;
            $gradeobj->rawgrade = '';
            $gradeobj->rawgrademax = $gradeitem->grademax;
            $gradeobj->rawgrademin = $gradeitem->grademin;
            $gradeobj->rawscaleid = $gradeitem->scaleid;
            $gradeobj->usermodified = $USER->id;
            $gradeobj->hidden = 0;
            $gradeobj->locked = 0;
            $gradeobj->locktime = 0;
            $gradeobj->exported = 0;
            $gradeobj->excluded = 0;
            $gradeobj->feedback = '';
            $gradeobj->feedbackformat = 0;
            $gradeobj->information = '';
            $gradeobj->informationformat = '';
            $gradeobj->timecreated = time();
        }
        $gradeobj->finalgrade = $grade;
        $gradeobj->overridden = time();
        $gradeobj->timemodified = time();

        if ($create) {
            if ($gradeobj->id = $DB->insert_record('grade_grades', $gradeobj)) {
                return true;
            }
            return false;
        }
        return $DB->update_record('grade_grades', $gradeobj);
    }

    /**
     * Returns description of grades result value
     * @return grades description
     */

    public static function get_lti_grade_returns() {
        return new external_value(PARAM_BOOL, 'status');
    }
}
