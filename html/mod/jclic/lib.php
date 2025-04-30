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
 * Library of interface functions and constants for module jclic
 *
 * All the core Moodle functions, neeeded to allow the module to work
 * integrated in Moodle should be placed here.
 * All the jclic specific functions, needed to implement all the module
 * logic, should go to locallib.php. This will help to save some memory when
 * Moodle is performing actions across all modules.
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

const JCLIC_DEFAULT_JARBASE = 'https://clic.xtec.cat/dist/jclic';
const JCLIC_DEFAULT_LAP = 5;

// JClic file types
const JCLIC_FILE_TYPE_LOCAL = 'local';
const JCLIC_FILE_TYPE_EXTERNAL = 'external';

// JClic activity type
const JCLIC_ACTIVITY_TYPE_JAVA = 0;
const JCLIC_ACTIVITY_TYPE_HTML5 = 1;

// require_once($CFG->libdir.'/eventslib.php');
require_once $CFG->libdir . '/formslib.php';
require_once($CFG->dirroot . '/calendar/lib.php');

// Moodle core API.

/**
 * Returns the information on whether the module supports a feature
 *
 * @param string $feature FEATURE_xx constant for requested feature
 * @return mixed true if the feature is supported, null if unknown
 * @todo: review features before publishing the module
 *
 * @see plugin_supports() in lib/moodlelib.php
 */
function jclic_supports($feature) {
    switch ($feature) {
        case FEATURE_GROUPS:
            return true;
//        case FEATURE_GROUPINGS:               return true;
//        case FEATURE_GROUPMEMBERSONLY:        return true;
        case FEATURE_MOD_INTRO:
            return true;
        case FEATURE_COMPLETION_TRACKS_VIEWS:
            return true;
//        case FEATURE_COMPLETION_HAS_RULES:    return true;
        case FEATURE_GRADE_HAS_GRADE:
            return true;
//        case FEATURE_GRADE_OUTCOMES:          return true;
//        case FEATURE_RATE:                    return true;
        case FEATURE_BACKUP_MOODLE2:
            return true;
//        case FEATURE_SHOW_DESCRIPTION:        return true;
//        case FEATURE_ADVANCED_GRADING:        return true;
        case FEATURE_MOD_PURPOSE:
            return MOD_PURPOSE_ASSESSMENT;
        default:
            if (defined('FEATURE_SHOW_DESCRIPTION') && $feature === FEATURE_SHOW_DESCRIPTION) {
                return true;
            } else {
                return null;
            }
    }
}

/**
 * Saves a new instance of the jclic into the database
 *
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will create a new instance and return the id number
 * of the new instance.
 *
 * @param stdClass $data
 * @param mod_jclic_mod_form|null $mform
 * @return int The id of the newly inserted jclic record
 * @todo: create event (when timedue added)
 */
function jclic_add_instance(stdClass $data, mod_jclic_mod_form $mform = null) {
    global $CFG;
    require_once($CFG->dirroot . '/mod/jclic/locallib.php');

    $jclic = new jclic(context_module::instance($data->coursemodule), null, null);
    return $jclic->add_instance($data);
}

/**
 * Updates an instance of the jclic in the database
 *
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will update an existing instance with new data.
 *
 * @param stdClass $data
 * @param $form
 * @return boolean Success/Fail
 */
function jclic_update_instance(stdClass $data, $form) {
    global $CFG;
    require_once $CFG->dirroot . '/mod/jclic/locallib.php';

    $context = context_module::instance($data->coursemodule);
    $jclic = new jclic($context, null, null);

    return $jclic->update_instance($data);
}

/**
 * Removes an instance of the jclic from the database
 *
 * Given an ID of an instance of this module,
 * this function will permanently delete the instance
 * and any data that depends on it.
 *
 * @param int $id Id of the module instance
 * @throws coding_exception
 * @return boolean Success/Failure
 */
function jclic_delete_instance($id) {
    global $CFG;
    require_once $CFG->dirroot . '/mod/jclic/locallib.php';

    $cm = get_coursemodule_from_instance('jclic', $id, 0, false, MUST_EXIST);
    $context = context_module::instance($cm->id);
    $jclic = new jclic($context, $cm, null);

    return $jclic->delete_instance();
}

/**
 * Returns a small object with summary information about what a
 * user has done with a given particular instance of this module
 * Used for user activity reports.
 * $return->time = the time they did it
 * $return->info = a short text description
 *
 * @param object $course
 * @param object $user
 * @param object $mod
 * @param object $jclic
 * @throws coding_exception
 * @return stdClass|null
 */
function jclic_user_outline($course, $user, $mod, $jclic) {
    global $CFG;

    require_once "$CFG->libdir/gradelib.php";

    $gradinginfo = grade_get_grades($course->id, 'mod', 'jclic', $jclic->id, $user->id);
    $gradingitem = $gradinginfo->items[0];
    $gradebookgrade = $gradingitem->grades[$user->id];

    if (empty($gradebookgrade->str_long_grade)) {
        return null;
    }

    $result = new stdClass();
    $result->info = get_string('grade') . ': ' . $gradebookgrade->str_long_grade;

    // If grade was last modified by the user themselves use date graded. Otherwise use date submitted
    if ($gradebookgrade->usermodified === $user->id || empty($gradebookgrade->datesubmitted)) {
        $result->time = $gradebookgrade->dategraded;
    } else {
        $result->time = $gradebookgrade->datesubmitted;
    }

    return $result;
}


/**
 * Prints a detailed representation of what a user has done with
 * a given particular instance of this module, for user activity reports.
 *
 * @param $course
 * @param $user
 * @param $coursemodule
 * @param $jclic
 * @throws coding_exception
 * @return string HTML
 * @todo: implement
 */
function jclic_user_complete($course, $user, $coursemodule, $jclic) {
    $outline = jclic_user_outline($course, $user, $coursemodule, $jclic);

    print_r($outline->info);
    return true;
}


/**
 * Given a course and a time, this module should find recent activity
 * that has occurred in jclic activities and print it out.
 * Return true if there was output, or false is there was none.
 *
 * @return boolean
 * @todo: implement
 */
function jclic_print_recent_activity($course, $viewfullnames, $timestart) {
    return false; // True if anything was printed, otherwise false
}

/**
 * Returns all activity in jclics since a given time
 *
 * @param array $activities sequentially indexed array of objects
 * @param int $index
 * @param int $timestart
 * @param int $courseid
 * @param int $cmid
 * @param int $userid defaults to 0
 * @param int $groupid defaults to 0
 * @return void adds items into $activities and increases $index
 * @todo: implement
 *
 */
function jclic_get_recent_mod_activity(&$activities, &$index, $timestart, $courseid, $cmid, $userid = 0, $groupid = 0) {
}

/**
 * Prints single activity item prepared by {@see jclic_get_recent_mod_activity()}
 *
 * @return void
 * @todo: implement
 */
function jclic_print_recent_mod_activity($activity, $courseid, $detail, $modnames, $viewfullnames) {
}

/**
 * Returns an array of users who are participanting in this jclic
 *
 * Must return an array of users who are participants for a given instance
 * of jclic. Must include every user involved in the instance,
 * independient of his role (student, teacher, admin...). The returned
 * objects must contain at least id property.
 * See other modules as example.
 *
 * @param int $jclicid ID of an instance of this module
 * @throws dml_exception
 * @return boolean|array false if no participants, array of objects otherwise
 */
function jclic_get_participants($jclicid) {
    global $DB;

    // Get students.
    $students = $DB->get_records_sql("SELECT DISTINCT u.id, u.id as userid
                                 FROM {user} u,
                                      {jclic_sessions} js
                                 WHERE js.jclicid = ? and
                                       u.id = js.user_id", [$jclicid]);

    //Get teachers.
    $teachers = $DB->get_records_sql("SELECT DISTINCT u.id, u.id as userid
                                 FROM {user} u,
                                      {jclic_sessions} js
                                 WHERE js.jclicid = ? and
                                       u.id = js.user_id", [$jclicid]);

    // Add teachers to students.
    if ($teachers) {
        foreach ($teachers as $teacher) {
            $students[$teacher->id] = $teacher;
        }
    }

    // Return students array (it contains an array of unique users).
    return ($students);
}

/**
 * Returns all other caps used in the module
 *
 * @return array
 * @example return array('moodle/site:accessallgroups');
 */
function jclic_get_extra_capabilities() {
    return array('moodle/site:accessallgroups', 'moodle/site:viewfullnames', 'moodle/grade:managegradingforms');
}

// Gradebook API.

/**
 * Is a given scale used by the instance of jclic?
 *
 * This function returns if a scale is being used by one jclic
 * if it has support for grading and scales. Commented code should be
 * modified if necessary. See forum, glossary or journal modules
 * as reference.
 *
 * @param int $jclicid ID of an instance of this module
 * @param $scaleid
 * @throws dml_exception
 * @return bool true if the scale is used by the given jclic instance
 */
function jclic_scale_used($jclicid, $scaleid) {
    global $DB;

    $return = false;
    $rec = $DB->get_record('jclic', ['id' => $jclicid, 'grade' => -$scaleid]);
    if (!empty($rec) && !empty($scaleid)) {
        $return = true;
    }

    return $return;
}

/**
 * Checks if scale is being used by any instance of jclic.
 *
 * This is used to find out if scale used anywhere.
 *
 * @param $scaleid int
 * @throws dml_exception
 * @return boolean true if the scale is used by any jclic instance
 */
function jclic_scale_used_anywhere($scaleid) {
    global $DB;
    return $scaleid && $DB->record_exists('jclic', ['grade' => -$scaleid]);
}

/**
 * Creates or updates grade item for the give jclic instance
 *
 * Needed by grade_update_mod_grades() in lib/gradelib.php
 *
 * @param stdClass $jclic instance object with extra cmidnumber and modname property
 * @param mixed $grades optional array/object of grade(s); 'reset' means reset grades in gradebook
 * @throws coding_exception
 * @return boolean 0 if ok
 * @uses GRADE_TYPE_VALUE
 * @uses GRADE_TYPE_SCALE
 * @uses GRADE_TYPE_NONE
 */
function jclic_grade_item_update(stdClass $jclic, $grades = null) {
    global $CFG;
    require_once $CFG->libdir . '/gradelib.php';

    if (!isset($jclic->courseid)) {
        $jclic->courseid = $jclic->course;
    }

    $params = [];
    $params['itemname'] = clean_param($jclic->name, PARAM_NOTAGS);
    $params['idnumber'] = $jclic->cmidnumber;

    if ($jclic->grade > 0) {
        $params['gradetype'] = GRADE_TYPE_VALUE;
        $params['grademax'] = $jclic->grade;
        $params['grademin'] = 0;
    } else {
        if ($jclic->grade < 0) {
            $params['gradetype'] = GRADE_TYPE_SCALE;
            $params['scaleid'] = -$jclic->grade;
        } else {
            $params['gradetype'] = GRADE_TYPE_TEXT; // allow text comments only.
        }
    }

    if ($grades === 'reset') {
        $params['reset'] = true;
        $grades = null;
    }

    grade_update('mod/jclic', $jclic->courseid, 'mod', 'jclic', $jclic->id, 0, $grades, $params);

    return true;
}


/**
 * Return grade for given user or all users.
 *
 * @param object $jclic object
 * @param int $userid optional user id, 0 means all users
 * @return array array of grades, false if none
 * @todo: optimize this function (to avoid call jclic_get_sessions_summary or update only mandatory info)
 *
 * @todo: implement userid=0 (all users)
 */
function jclic_get_user_grades($jclic, $userid = 0) {
    global $CFG;
    require_once $CFG->dirroot . '/mod/jclic/locallib.php';

    // sanity check on $jclic->id
    if (!isset($jclic->id)) {
        return false;
    }

    $sessions_summary = jclic_get_sessions_summary($jclic->id, $userid);

    $grades[$userid] = new stdClass();
    $grades[$userid]->userid = $userid;
    $grades[$userid]->attempts = $sessions_summary->attempts;
    $grades[$userid]->totaltime = $sessions_summary->totaltime;
    $grades[$userid]->starttime = $sessions_summary->starttime;
    $grades[$userid]->done = $sessions_summary->done;
    $grades[$userid]->rawgrade = 0;

    if ($jclic->avaluation === 'score') {
        $grades[$userid]->rawgrade = $sessions_summary->score;
    } else {
        $grades[$userid]->rawgrade = $sessions_summary->solved;
    }

    return $grades;
}

/**
 * Update jclic grades in the gradebook
 *
 * Needed by grade_update_mod_grades() in lib/gradelib.php
 *
 * @param stdClass $jclic instance object with extra cmidnumber and modname property
 * @param int $userid update grade of specific user only, 0 means all participants
 * @param boolean $nullifnone return null if grade does not exist
 * @throws coding_exception
 * @return void
 * @todo: Fix some problems (this function is not working when is called from beans.php)
 */
function jclic_update_grades(stdClass $jclic, $userid = 0, $nullifnone = true) {
    global $CFG;
    require_once $CFG->libdir . '/gradelib.php';

    if ($jclic->grade === 0) {
        jclic_grade_item_update($jclic);
    } else {
        if ($grades = jclic_get_user_grades($jclic, $userid)) {
            foreach ($grades as $k => $v) {
                if ($v->rawgrade === -1) {
                    $grades[$k]->rawgrade = null;
                }
            }
            jclic_grade_item_update($jclic, $grades);
        } else {
            if ($userid && $nullifnone) {
                $grade = new stdClass();
                $grade->userid = $userid;
                $grade->rawgrade = NULL;
                jclic_grade_item_update($jclic, $grade);
            } else {
                jclic_grade_item_update($jclic);
            }
        }
    }
}

// File API.

/**
 * Returns the lists of all browsable file areas within the given module context
 *
 * The file area 'intro' for the activity introduction field is added automatically
 * by {@link file_browser::get_file_info_context_module()}
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param stdClass $context
 * @throws coding_exception
 * @return array of [(string)filearea] => (string)description
 */
function jclic_get_file_areas($course, $cm, $context) {
    return [
        'package' => get_string('urledit', 'jclic'),
    ];
}

/**
 * File browsing support for jclic module content area.
 *
 * @param object $browser
 * @param object $areas
 * @param object $course
 * @param object $cm
 * @param object $context
 * @param string $filearea
 * @param int $itemid
 * @param string $filepath
 * @param string $filename
 * @throws coding_exception
 * @return object file_info instance or null if not found
 */
function jclic_get_file_info($browser, $areas, $course, $cm, $context, $filearea, $itemid, $filepath, $filename) {
    global $CFG;

    if (!has_capability('moodle/course:managefiles', $context)) {
        // Students can not peak here.
        return null;
    }

    $fs = get_file_storage();

    if ($filearea === 'package') {
        $filepath = is_null($filepath) ? '/' : $filepath;
        $filename = is_null($filename) ? '.' : $filename;

        $urlbase = $CFG->wwwroot . '/pluginfile.php';
        if (!$storedfile = $fs->get_file($context->id, 'mod_jclic', 'package', 0, $filepath, $filename)) {
            if ($filepath === '/' && $filename === '.') {
                $storedfile = new virtual_root_file($context->id, 'mod_jclic', 'package', 0);
            } else {
                // Not found.
                return null;
            }
        }
        return new file_info_stored($browser, $context, $storedfile, $urlbase, $areas[$filearea], false, true, false, false);
    }
    // note: jclic_intro handled in file_browser automatically

    return null;
}


/**
 * Serves the files from the jclic file areas
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param stdClass $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @throws coding_exception
 * @throws moodle_exception
 * @throws require_login_exception
 * @return boolean this should never return to the caller
 */
function jclic_pluginfile($course, $cm, $context, $filearea, array $args, $forcedownload) {

    if ($context->contextlevel !== CONTEXT_MODULE) {
        send_file_not_found();
    }

    require_login($course, true, $cm);

    if (!has_capability('mod/jclic:view', $context)) {
        return false;
    }

    array_shift($args); // Ignore revision - designed to prevent caching problems only.

    $fs = get_file_storage();
    $relativepath = implode('/', $args);
    $fullpath = rtrim("/$context->id/mod_jclic/$filearea/0/$relativepath", '/');

    do {
        if ($file = $fs->get_file_by_hash(sha1($fullpath))) {
            break;
        }
    } while (false);

    // Finally send the file.
    send_stored_file($file, 86400, 0, $forcedownload);

    return true;

}

// Navigation API.

/**
 * Extends the settings navigation with the jclic settings
 *
 * This function is called when the context for the page is a jclic module. This is not called by AJAX
 * so it is safe to rely on the $PAGE.
 *
 * @param settings_navigation $settingsnav {@link settings_navigation}
 * @param navigation_node|null $jclicnode {@link navigation_node}
 * @throws coding_exception
 * @throws moodle_exception
 */
function jclic_extend_settings_navigation(settings_navigation $settingsnav, navigation_node $jclicnode = null) {
    global $PAGE;

    $keys = $jclicnode->get_children_key_list();
    $beforekey = null;
    $i = array_search('modedit', $keys, true);

    if ($i === false && array_key_exists(0, $keys)) {
        $beforekey = $keys[0];
    } else {
        if (array_key_exists($i + 1, $keys)) {
            $beforekey = $keys[$i + 1];
        }
    }

    if (has_capability('moodle/grade:viewall', $PAGE->context)) {

        $node = navigation_node::create(
            get_string('preview_jclic', 'jclic'),
            new moodle_url('/mod/jclic/view.php', ['id' => $PAGE->cm->id, 'action' => 'preview']),
            navigation_node::TYPE_SETTING,
            null,
            'mod_preview_jclic_preview',
            new pix_icon('i/preview', '')
        );

        $jclicnode->add_node($node, $beforekey);

        $url_normal = null;
        $url_details = null;

        if (!empty($PAGE->url->param('mode')) && $PAGE->url->param('mode') === 'details') {
            $url_normal = new moodle_url('/mod/jclic/report.php', ['id' => $PAGE->cm->id, 'mode' => 'normal']);
        } else {
            $url_details = new moodle_url('/mod/jclic/report.php', ['id' => $PAGE->cm->id, 'mode' => 'details']);
        }

        $reportnode = $jclicnode->add_node(
            navigation_node::create(
                get_string('results', 'jclic'),
                $url_normal,
                navigation_node::TYPE_SETTING,
                null,
                null,
                new pix_icon('i/report', '')
            ),
            $beforekey
        );

        $reportnode->add_node(
            navigation_node::create(
                get_string('report_normal', 'jclic'),
                $url_normal,
                navigation_node::TYPE_SETTING,
                null,
                null,
                new pix_icon('i/report', '')
            )
        );

        $reportnode->add_node(
            navigation_node::create(
                get_string('report_details', 'jclic'),
                $url_details,
                navigation_node::TYPE_SETTING,
                null,
                null,
                new pix_icon('i/report', '')
            )
        );

    }

}

// Reset.

/**
 * Removes all grades from gradebook
 *
 * @param int $courseid
 * @throws coding_exception
 * @throws dml_exception
 */
function jclic_reset_gradebook($courseid) {

    global $DB;

    $params = ['courseid' => $courseid];

    $sql = "SELECT j.*, cm.idnumber AS cmidnumber, j.course AS courseid
            FROM {jclic} j, {course_modules} cm, {modules} m
            WHERE m.name='jclic' AND m.id=cm.module AND cm.instance=j.id AND j.course=:courseid ";

    if ($jclics = $DB->get_records_sql($sql, $params)) {
        foreach ($jclics as $jclic) {
            jclic_grade_item_update($jclic, 'reset');
        }
    }

}

/**
 * This function is used by the reset_course_userdata function in moodlelib.
 * This function will remove all posts from the specified jclic
 * and clean up any related data.
 *
 * @param $data Data submitted from the reset course.
 * @throws coding_exception
 * @throws dml_exception
 * @return array status array
 */
function jclic_reset_userdata($data) {

    global $DB;

    $componentstr = get_string('modulenameplural', 'jclic');
    $status = [];

    if (!empty($data->reset_jclic_deleteallsessions)) {
        $params = ['courseid' => $data->courseid];
        $select = 'session_id IN'
            . " (SELECT s.session_id FROM {jclic_sessions} s"
            . " INNER JOIN {jclic} j ON s.jclicid = j.id"
            . " WHERE j.course = :courseid)";
        $DB->delete_records_select('jclic_activities', $select, $params);

        $select = 'jclicid IN'
            . " (SELECT j.id FROM {jclic} j"
            . " WHERE j.course = :courseid)";
        $DB->delete_records_select('jclic_sessions', $select, $params);

        // Remove all grades from gradebook.
        if (empty($data->reset_gradebook_grades)) {
            jclic_reset_gradebook($data->courseid);
        }

        $status[] = [
            'component' => $componentstr,
            'item' => get_string('deleteallsessions', 'jclic'),
            'error' => false,
        ];
    }

    return $status;

}

/**
 * Implementation of the function for printing the form elements that control
 * whether the course reset functionality affects the jclic.
 *
 * @param $mform form passed by reference
 * @throws coding_exception
 */
function jclic_reset_course_form_definition(&$mform) {
    $mform->addElement('header', 'jclicheader', get_string('modulenameplural', 'jclic'));
    $mform->addElement('checkbox', 'reset_jclic_deleteallsessions', get_string('deleteallsessions', 'jclic'));
}

/**
 * Course reset form defaults.
 */
function jclic_reset_course_form_defaults($course) {
    return ['reset_jclic_deleteallsessions' => 1];
}

/**
 * List the actions that correspond to a view of this module.
 * This is used by the participation report.
 *
 * @return array
 */
function jclic_get_view_actions() {
    return ['view'];
}

/**
 * List the actions that correspond to a post of this module.
 * This is used by the participation report.
 *
 * @return array
 */
function jclic_get_post_actions() {
    return [];
}
