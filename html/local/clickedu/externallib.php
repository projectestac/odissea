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
 * External services library file
 *
 * @author      Adrià Monguillot <amonguillot@clickedu.net>
 * @author      Daniel Ureña Zafra <durenadev@gmail.com>
 * @copyright   2019 CLICKART TALLER DE COMUNICACIÓ, S.L.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/externallib.php");
require_once("$CFG->libdir/gradelib.php");

class local_clickedu_external extends external_api {

    public static function get_activities_parameters() {
        return new external_function_parameters(array(
            'idnumber' => new external_value(PARAM_RAW, 'Course idnumber'),
        ));
    }

    public static function get_activities_returns() {
        return new external_multiple_structure(
             new external_single_structure(array(
                 'id' => new external_value(PARAM_INT, 'Activity ID'),
                 'name' => new external_value(PARAM_TEXT, 'Activity name'),
                 'module' => new external_value(PARAM_ALPHA, 'Activity module'),
                 'idnumber' => new external_value(PARAM_RAW, 'Activity idnumber'),
                 'section' => new external_value(PARAM_INT, 'Section number'),
                 'items' => new external_multiple_structure(
                     new external_single_structure(array(
                         'itemid' => new external_value(PARAM_INT, 'Grade item ID'),
                         'itemname' => new external_value(PARAM_TEXT, 'Grade item name'),
                         'idnumber' => new external_value(PARAM_RAW, 'Grade item idnumber'),
                     ))
                 ),
                 'outcomes' => new external_multiple_structure(
                     new external_single_structure(array(
                         'itemid' => new external_value(PARAM_INT, 'Grade item ID'),
                         'itemname' => new external_value(PARAM_TEXT, 'Grade item name'),
                         'idnumber' => new external_value(PARAM_RAW, 'Grade item idnumber'),
                         'shortname' => new external_value(PARAM_NOTAGS, 'Outcome shortname'),
                         'fullname' => new external_value(PARAM_TEXT, 'Outcome fullname'),
                     ))
                 ),
             ))
        );
    }

    public static function get_activities($idnumber) {
        global $CFG, $DB;

        $description = self::get_activities_parameters();
        $params = self::validate_parameters($description, array('idnumber' => $idnumber));

        $course = $DB->get_record('course', array('idnumber' => $idnumber));
        if (!$idnumber or !$course) {
            throw new moodle_exception('coursenotfound', 'local_clickedu', '', $idnumber);
        }

        $activities = array();

        $gradeparams = array('courseid' => $course->id, 'itemtype' => 'mod');
        foreach (grade_item::fetch_all($gradeparams) as $gradeitem) {

            if(strpos($gradeitem->itemmodule, 'h5p') === false) {

            $cm = get_coursemodule_from_instance(
                $gradeitem->itemmodule, $gradeitem->iteminstance, 0, true, MUST_EXIST);
            if (!isset($activities[$cm->id])) {
                $activities[$cm->id] = array(
                    'id' => $cm->id,
                    'module' => $cm->modname,
                    'name' => $cm->name,
                    'section' => $cm->sectionnum,
                    'idnumber' => $cm->idnumber ?: '',
                    'items' => array(),
                    'outcomes' => array(),
                );
            }
            if ($outcome = $gradeitem->load_outcome()) {
                $activities[$cm->id]['outcomes'][] = array(
                    'itemid' => $gradeitem->id,
                    'itemname' => $gradeitem->itemname,
                    'idnumber' => $gradeitem->idnumber ?: '',
                    'shortname' => $outcome->shortname,
                    'fullname' => $outcome->fullname,
                );
            } else {
                $activities[$cm->id]['items'][] = array(
                    'itemid' => $gradeitem->id,
                    'itemname' => $gradeitem->itemname,
                    'idnumber' => $gradeitem->idnumber ?: '',
                );
            }
        }
        }

        return $activities;
    }

    public static function get_grades_parameters() {
        return new external_function_parameters(array(
            'itemid' => new external_value(PARAM_INT, 'Grade item ID'),
        ));
    }

    public static function get_grades_returns() {
        return new external_multiple_structure(
            new external_single_structure(array(
                'user' => new external_value(PARAM_RAW, 'User idnumber'),
                'grade' => new external_value(PARAM_RAW, 'User grade'),
                'rawgrade' => new external_value(PARAM_FLOAT, 'Raw user grade'),
                'mingrade' => new external_value(PARAM_FLOAT, 'Minimum user grade'),
                'maxgrade' => new external_value(PARAM_FLOAT, 'Maximum user grade'),
            ))
        );
    }

    public static function get_grades($itemid) {
        global $CFG, $DB;

        require_once("$CFG->libdir/gradelib.php");

        $description = self::get_grades_parameters();
        $params = self::validate_parameters($description, array('itemid' => $itemid));
        $gradeitem = grade_item::fetch(array('id' => $itemid));

        if (!$gradeitem) {
            throw new moodle_exception('gradeitemnotfound', 'local_clickedu', '', $itemid);
        }

        grade_regrade_final_grades($gradeitem->courseid);

        if (in_array($gradeitem->gradetype, array(GRADE_TYPE_TEXT, GRADE_TYPE_NONE))) {
            return array();
        }

        $grades = array();
        $outcome = $gradeitem->load_outcome();
        $scale = $gradeitem->load_scale();

        $context = context_course::instance($gradeitem->courseid);
        $roles = explode(',', $CFG->gradebookroles);
        list($rolessql, $sqlparams) = $DB->get_in_or_equal($roles, SQL_PARAMS_NAMED, 'r');
        $sql = "SELECT g.*, u.idnumber AS useridnumber
                FROM {grade_grades} g
                JOIN {user} u ON u.id = g.userid
                JOIN {user_enrolments} ue ON ue.userid = u.id
                JOIN {role_assignments} ra ON ra.userid = u.id
                JOIN {enrol} e ON e.id = ue.enrolid
                WHERE g.itemid = :itemid
                AND ra.contextid = :contextid
                AND ra.roleid $rolessql
                AND e.courseid = :courseid";
        $sqlparams['itemid'] = $gradeitem->id;
        $sqlparams['courseid'] = $gradeitem->courseid;
        $sqlparams['contextid'] = $context->id;

        foreach ($DB->get_records_sql($sql, $sqlparams) as $r) {
            if (!$r->useridnumber or is_null($r->finalgrade)) {
                continue;
            }
            $rawgrade = $r->finalgrade;
            if ($outcome) {
                $grade = format_string($scale->scale_items[(int) $r->finalgrade - 1]);
            } else {
                $grade = grade_format_gradevalue($r->finalgrade, $gradeitem, false);
            }
            $grades[] = array(
                'user' => $r->useridnumber,
                'grade' => $grade,
                'rawgrade' => $rawgrade,
                'mingrade' => $gradeitem->grademin,
                'maxgrade' => $gradeitem->grademax,
            );
        }

        return $grades;
    }
}
