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
 * Prints a particular instance of qv
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod
 * @subpackage qv
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/locallib.php');

$id = optional_param('id', 0, PARAM_INT);  // Course Module ID

if ($id) {
    $cm         = get_coursemodule_from_id('qv', $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $record     = $DB->get_record('qv', array('id' => $cm->instance), '*', MUST_EXIST);
} else {
    print_error('You must specify a course_module ID or an instance ID');
}

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/qv:view', $context);
require_capability('moodle/grade:viewall', $context);

$qv = new qv();
$qv->load_record($record);

$PAGE->set_url('/mod/qv/report.php', array('id' => $cm->id));
$PAGE->set_title(format_string($qv->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($context);

echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('results', 'qv'));

groups_print_activity_menu($cm, $CFG->wwwroot . '/mod/qv/report.php?id=' . $cm->id);

echo $qv->view_dates();

// Show students list with their results
require_once($CFG->libdir.'/gradelib.php');
$perpage = optional_param('perpage', 10, PARAM_INT);
$perpage = ($perpage <= 0) ? 10 : $perpage;
$page    = optional_param('page', 0, PARAM_INT);

// Find out current groups mode
$groupmode = groups_get_activity_groupmode($qv->cm);
$currentgroup = groups_get_activity_group($qv->cm, true);

// Get all ppl that are allowed to submit qv
list($esql, $params) = get_enrolled_sql($qv->context, 'mod/qv:submit', $currentgroup);
$sql = "SELECT u.id FROM {user} u ".
       "LEFT JOIN ($esql) eu ON eu.id=u.id ".
       "WHERE u.deleted = 0 AND eu.id=u.id ";

$users = $DB->get_records_sql($sql, $params);
if (!empty($users)) {
    $users = array_keys($users);
}

// if groupmembersonly used, remove users who are not in any group
if ($users and !empty($CFG->enablegroupmembersonly) and $qv->cm->groupmembersonly) {
    if ($groupingusers = groups_get_grouping_members($qv->cm->groupingid, 'u.id', 'u.id')) {
        $users = array_intersect($users, array_keys($groupingusers));
    }
}

// Create results table
if (function_exists('get_extra_user_fields') ) {
    $extrafields = get_extra_user_fields($qv->context);
} else {
    $extrafields = array();
}
$tablecolumns = array_merge(array('picture', 'fullname'), $extrafields,
        array('state', 'unread', 'grade', 'delivers', 'time', 'actions'));

$extrafieldnames = array();
foreach ($extrafields as $field) {
    $extrafieldnames[] = get_user_field_name($field);
}

$tableheaders = array_merge(
        array('', get_string('fullnameuser')),
        $extrafieldnames,
        array(
            get_string('state', 'qv'),
            get_string('unread', 'qv'),
            get_string('score', 'qv'),
            get_string('delivers', 'qv'),
            get_string('time'),
            '&nbsp;',
        ));

require_once($CFG->libdir.'/tablelib.php');
$table = new flexible_table('mod-qv-results');

$table->define_columns($tablecolumns);
$table->define_headers($tableheaders);
$table->define_baseurl($CFG->wwwroot.'/mod/qv/report.php?id='.$qv->cm->id.'&amp;currentgroup='.$currentgroup);

$table->sortable(true, 'lastname'); // Sorted by lastname by default
$table->collapsible(true);
$table->initialbars(true);

$table->column_suppress('picture');
$table->column_suppress('fullname');

foreach ($tablecolumns as $field) {
    $table->column_class($field, $field);
}

$table->set_attribute('cellspacing', '0');
$table->set_attribute('id', 'qv_attempts');
$table->set_attribute('class', 'results generaltable generalbox');
$table->set_attribute('width', '100%');

$table->no_sorting('state');
$table->no_sorting('unread');
$table->no_sorting('grade');
$table->no_sorting('delivers');
$table->no_sorting('time');
$table->no_sorting('actions');

// Start working -- this is necessary as soon as the niceties are over
$table->setup();

// Construct the SQL
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
           'WHERE '.$where.'u.id IN ('.implode(',', $users).') ';

    $ausers = $DB->get_records_sql($select.$sql.$sort, $params, $table->get_page_start(), $table->get_page_size());

    $table->pagesize($perpage, count($users));
    $offset = $page * $perpage; //offset used to calculate index of student in that particular query, needed for the pop up to know who's next
    if ($ausers !== false) {
        //$grading_info = grade_get_grades($course->id, 'mod', 'qv', $qv->id, array_keys($ausers));
        $endposition = $offset + $perpage;
        $currentposition = $offset;
        $ausersObj = new ArrayObject($ausers);
        $iterator = $ausersObj->getIterator();
        $iterator->seek($currentposition);

          while ($iterator->valid() && $currentposition < $endposition ) {
            $auser = $iterator->current();
            $picture = $OUTPUT->user_picture($auser);
            $student_name = fullname($auser, has_capability('moodle/site:viewfullnames', $qv->context));
            $userlink = '<a href="' . $CFG->wwwroot . '/user/view.php?id=' . $auser->id . '&amp;course=' . $course->id . '">' . $student_name . '</a>';
            $extradata = array();
            foreach ($extrafields as $field) {
                $extradata[] = $auser->{$field};
            }

            $assignment_summary = qv_get_assignment_summary($qv->id, $auser->id);
            $qv_full_url = $qv->get_full_url($assignment_summary, $auser->id, $student_name, true);

            if (!empty($qv_full_url)) {
                $params = array();
                $params['status'] = 0;
                $params['toolbar'] = 0;
                $params['scrollbars'] = 1;
                $params['resizable'] = 1;
                $params['fullscreen'] = 1;

                $action = new popup_action('click', $qv_full_url, 'popup', $params);
                $student_info = $OUTPUT->action_link($qv_full_url, $student_name, $action);
            } else {
                $student_info = $student_name; //Albert
            }

            $states = qv_print_states($assignment_summary->states);
            if (isset($assignment_summary->id)){
                $unread_messages = qv_assignment_messages($assignment_summary->id);
                if($unread_messages > 0){
                    $unread_messages .= $OUTPUT->pix_icon('qv_msg_notread', get_string('msg_not_read', 'qv'), 'mod_qv');
                }
            }
            else $unread_messages = 0;

            $viewlink = '';
            if (!empty($assignment_summary->id)){
                $viewlink = html_writer::link($qv_full_url, get_string('view'), array('target'=>'_blank'));
            }
            $row = array_merge(array($picture, $userlink), $extradata,
                    array($states, $unread_messages, $assignment_summary->pending_score, $assignment_summary->attempts, $assignment_summary->time, $viewlink));
            $table->add_data($row);

            // Forward iterator
            $currentposition++;
            $iterator->next();
        }
        $table->print_html();  /// Print the whole table

        echo '<hr/>';
        // states legend
        $legendtable = new html_table();
        $legendtable->width='40%';
        $legendtable->fontsize='0.6em';
        $legendtable->cellspacing='0';
        $legendtable->data[] = array (
            qv_print_state_icon(qv::STATE_NOT_STARTED),
            qv_print_state_icon(qv::STATE_DELIVERED),
            qv_print_state_icon(qv::STATE_CORRECTED));
        $legendtable->data[] = array (
            qv_print_state_icon(qv::STATE_STARTED),
            qv_print_state_icon(qv::STATE_PARTIALLY_DELIVERED),
            qv_print_state_icon(qv::STATE_PARTIALLY_CORRECTED));
        echo html_writer::table($legendtable);
    }
} else {
    echo $OUTPUT->notification(get_string('msg_nosessions', 'qv'), 'notifymessage');
}

echo $OUTPUT->footer();
