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
 * Prints a particular instance of jclic
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/locallib.php');

$id = optional_param('id', 0, PARAM_INT); // course_module ID, or
$mode = optional_param('mode', 'normal', PARAM_TEXT);

if ($id) {
    $cm         = get_coursemodule_from_id('jclic', $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $jclic      = $DB->get_record('jclic', array('id' => $cm->instance), '*', MUST_EXIST);
} else {
    error('You must specify a course_module ID or an instance ID');
}

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/jclic:view', $context);
require_capability('moodle/grade:viewall', $context);


$PAGE->set_url('/mod/jclic/report.php', array('id' => $cm->id, 'mode' => $mode));
$PAGE->set_title(format_string($jclic->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_pagelayout('report');
$PAGE->set_context($context);

echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('report_'.$mode, 'jclic'));

groups_print_activity_menu($cm, $CFG->wwwroot . '/mod/jclic/report.php?id=' . $cm->id);
jclic_view_dates($jclic, $cm);

// Report
$PAGE->requires->js('/mod/jclic/jclic.js');

// Show students list with their results
require_once($CFG->libdir.'/gradelib.php');
$perpage = optional_param('perpage', 10, PARAM_INT);
$perpage = ($perpage <= 0) ? 10 : $perpage;
$page    = optional_param('page', 0, PARAM_INT);


// find out current groups mode
$groupmode = groups_get_activity_groupmode($cm);
$currentgroup = groups_get_activity_group($cm, true);

// Get all ppl that are allowed to submit jclic
list($esql, $params) = get_enrolled_sql($context, 'mod/jclic:submit', $currentgroup);
$sql = "SELECT u.id FROM {user} u ".
       "LEFT JOIN ($esql) eu ON eu.id=u.id ".
       "WHERE u.deleted = 0 AND eu.id=u.id ";

$users = $DB->get_records_sql($sql, $params);
if (!empty($users)) {
    $users = array_keys($users);
}

// if groupmembersonly used, remove users who are not in any group
if ($users and !empty($CFG->enablegroupmembersonly) and $cm->groupmembersonly) {
    if ($groupingusers = groups_get_grouping_members($cm->groupingid, 'u.id', 'u.id')) {
        $users = array_intersect($users, array_keys($groupingusers));
    }
}

// Create results table
if (function_exists('get_extra_user_fields') ) {
    $extrafields = get_extra_user_fields($context);
} else {
    $extrafields = array();
}
$tablecolumns = array_merge(array('picture', 'fullname'), $extrafields,
        array('starttime', 'attempts', 'solveddone', 'totaltime', 'grade'));

$extrafieldnames = array();
foreach ($extrafields as $field) {
    $extrafieldnames[] = get_user_field_name($field);
}

$strstarttime = ($mode=='details') ? get_string('starttime', 'jclic') : get_string('lastaccess', 'jclic');

$tableheaders = array_merge(
        array('', get_string('fullnameuser')),
        $extrafieldnames,
        array(
            $strstarttime,
            get_string('attempts', 'jclic'),
            get_string('solveddone', 'jclic'),
            get_string('totaltime', 'jclic'),
            get_string('grade'),
        ));

require_once($CFG->libdir.'/tablelib.php');
$table = new flexible_table('mod-jclic-results');

$table->define_columns($tablecolumns);
$table->define_headers($tableheaders);
$table->define_baseurl($CFG->wwwroot.'/mod/jclic/report.php?id='.$cm->id.'&currentgroup='.$currentgroup.'&mode='.$mode);

$table->sortable(true, 'lastname'); // Sorted by lastname by default
$table->collapsible(true);
$table->initialbars(true);

$table->column_suppress('picture');
$table->column_suppress('fullname');

$table->column_class('picture', 'picture');
$table->column_class('fullname', 'fullname');
foreach ($extrafields as $field) {
    $table->column_class($field, $field);
}

$table->set_attribute('cellspacing', '0');
$table->set_attribute('id', 'attempts');
$table->set_attribute('class', 'results generaltable generalbox');
$table->set_attribute('width', '100%');

$table->no_sorting('starttime');
$table->no_sorting('solveddone');
$table->no_sorting('totaltime');
$table->no_sorting('attempts');
$table->no_sorting('grade');

// Start working -- this is necessary as soon as the niceties are over
$table->setup();

/// Construct the SQL
list($where, $params) = $table->get_sql_where();
if ($where) {
    $where .= ' AND ';
}

if ($sort = $table->get_sql_sort()) {
    $sort = ' ORDER BY '.$sort;
}

$ufields = user_picture::fields('u', $extrafields);
if (!empty($users)) {
    $select = "SELECT $ufields ";

    $sql = 'FROM {user} u '.
           'WHERE '.$where.'u.id IN ('.implode(',',$users).') ';

    $ausers = $DB->get_records_sql($select.$sql.$sort, $params, $table->get_page_start(), $table->get_page_size());

    if ($ausers !== false) {
        //$grading_info = grade_get_grades($course->id, 'mod', 'jclic', $jclic->id, array_keys($ausers));
        $countusers = 0;
        foreach ($ausers as $auser) {

            $sessions_summary = jclic_get_sessions_summary($jclic->id, $auser->id);
            if ($sessions_summary->attempts <= 0) {
                continue;
            }
            $countusers++;

            $picture = $OUTPUT->user_picture($auser);
            $userlink = '<a href="' . $CFG->wwwroot . '/user/view.php?id=' . $auser->id . '&course=' . $course->id . '">' . fullname($auser, has_capability('moodle/site:viewfullnames', $context)) . '</a>';
            $extradata = array();
            foreach ($extrafields as $field) {
                $extradata[] = $auser->{$field};
            }
            $numsessions = 0;
            if ($mode == 'details') {
                // Print sessions for each student
                $sessions = jclic_get_sessions($jclic->id, $auser->id);
                $numsessions = count($sessions);
                if ($numsessions > 0) {
                    $first_session=true;
                    foreach ($sessions as $session) {
                        // Print session information
                        $rowclass = null;
                        $starttime='<a href="#" onclick="showSessionActivities(\''.$session->session_id.'\');">'.date('d/m/Y H:i',strtotime($session->starttime)).'</a>';
                        $solveddone = $session->solved. ' / '. $session->done;
                        $grade = $session->score;
                        $totaltime = $session->totaltime;
                        $attempts = $session->attempts;
                        $row = array_merge(array($picture, $userlink), $extradata,
                                array($starttime, $attempts, $solveddone, $totaltime, $grade));
                        $table->add_data($row, $rowclass);

                        // Print activities for each session
                        $html='<tr class="jclic-session-activities-hidden" id="session_'.$session->session_id.'" >';
                        $html.='<td colspan="'.(8+sizeof($extradata)).'">';
                        $html.= jclic_get_session_activities_html($session->session_id);
                        $html.= '</td></tr>';
                        echo $html;

                        // Remove user information (only showed in the first row)
                        if ($first_session) {
                            $first_session = false;
                            $picture = null;
                            $userlink = null;
                            // Remove extradata fields to show them only once
                            foreach ($extradata as $key=>$value) {
                                $extradata[$key] = '';
                            }
                        }
                    }
                }
            }

            // Sessions summary
            $starttime = ($numsessions>0)?get_string('totals', 'jclic'):(isset($sessions_summary->starttime)?date('d/m/Y H:i',strtotime($sessions_summary->starttime)):'-');
            $solveddone = $sessions_summary->solved. ' / '. $sessions_summary->done;
            $grade = $sessions_summary->score;
            $totaltime = $sessions_summary->totaltime;
            $attempts = $sessions_summary->attempts;
            $row = array_merge(array($picture, $userlink), $extradata,
                    array($starttime, $attempts, $solveddone, $totaltime, $grade));
            $rowclass = ($numsessions > 0) ? 'summary-row' : "";
            $table->add_data($row, $rowclass);
        }
        if ($countusers) {
            $table->pagesize($perpage, $countusers);
            $table->print_html();  // Print the whole table
        } else {
            echo $OUTPUT->notification(get_string('msg_nosessions', 'jclic'), 'notifymessage');
        }
    }
} else {
    echo $OUTPUT->notification(get_string('msg_nosessions', 'jclic'), 'notifymessage');
}

echo $OUTPUT->footer();
