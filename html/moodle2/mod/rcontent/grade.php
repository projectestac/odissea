<?php

// This script uses installed report plugins to print quiz reports

require_once("../../config.php");
require_once('locallib.php');
require_once('reportlib.php');
require_once('gradeform.php');

$id = required_param('id', PARAM_INT);    // Course Module ID, or
if (! $cm = get_coursemodule_from_id('rcontent', $id)) {
    print_error('Course Module ID was incorrect');
}
if (! $course = $DB->get_record('course', array('id' => $cm->course))) {
    print_error('Course is misconfigured');
}
if (! $rcontent = $DB->get_record('rcontent', array('id' => $cm->instance))) {
    print_error('Course module is incorrect');
}

require_login($course, false, $cm);

$userid = required_param('user', PARAM_INT);  // User ID
$attempt = optional_param('attempt', '1', PARAM_INT);  // attempt number
$update = optional_param('update', false, PARAM_INT);
$unitid = optional_param('b', false, PARAM_INT);     // Unit Id
$activityid = optional_param('c', false, PARAM_INT);     // Activity Id

// Filter by status, get parameter with the filterby
$filterby   = optional_param('filterby', '', PARAM_RAW);

$heading = '';

$url = new moodle_url('/mod/rcontent/report.php', array('id' => $id)); // Base URL
$PAGE->set_title($rcontent->name);
$PAGE->set_heading($course->fullname);

$PAGE->set_url($url);

$contextmodule = context_module::instance($cm->id);
if (!$contextmodule) {
    $contextmodule = context_system::instance();
}
require_capability('mod/rcontent:updatescore', $contextmodule);

// Add parameter idgrade to the loader data
if (!$grade = rcontent_grade_user_attempt($rcontent->id, $userid, $attempt, $unitid, $activityid, $update)) {
    notice('Grade not found');
}

$user = $DB->get_record('user', array('id' => $userid));
$userdata = rcontent_get_user_data($userid);

$toform = new stdClass();
$toform->rcontentid = $rcontent->id;
$toform->id = $cm->id;
$toform->user = $user->id;
$toform->attempt = $attempt;
$toform->duration = rcontent_get_ellapsed_time($grade->totaltime);
$toform->gradeid = $grade->id;
$toform->grade = $grade->justgrade;
$toform->comment_editor['text'] = $grade->justcomments;
$toform->comment_editor['format'] = FORMAT_HTML;

$mform = new mod_rcontent_grade_form(null, array($rcontent, $toform, null), 'post', '', array('class' => 'gradeform'));
if (!$mform->is_cancelled() && $data = $mform->get_data()) {
    // Save data in bd
    $update = new stdClass();
    $update->id = $data->gradeid;
    $update->grade = round($data->grade, 2);
    $update->comments = $data->comment_editor['text'];
    $update->timemodified = time();

    // Retrieve data of that registry from db to know if status must be update or not
    if ($rdatastatus = $DB->get_field('rcontent_grades', 'status', array('id' => $update->id))) {
        if ($rdatastatus == "POR_CORREGIR") {
            $update->status = "CORREGIDO";
        }
    }
    $DB->update_record('rcontent_grades', $update);

    // Update gradebook
    $rcontent = $DB->get_record('rcontent', array('id' => $rcontent->id));
    rcontent_update_grades($rcontent, $data->user);

    add_to_log($course->id, 'rcontent', 'update grades', 'grade.php?id='.$data->id.'&user='.$data->user, $data->user, $data->id);

    close_window();
}

$struserfullname = fullname($user, true);
$PAGE->set_pagelayout('popup');

$PAGE->navbar->add(get_string('comments', 'rcontent').':'.$struserfullname.':'.format_string($rcontent->name), null, null, navigation_node::TYPE_CUSTOM, null);

echo $OUTPUT->header();
echo $OUTPUT->heading($heading);

// Print user information
$picture = $OUTPUT->user_picture($user, array('courseid' => $course->id));

$userlink = '<a href="' . $CFG->wwwroot . '/user/view.php?id=' . $user->id . '&amp;course=' . $rcontent->course . '">'
    . fullname($user, has_capability('moodle/site:viewfullnames', $contextmodule)) . '</a>';
echo $picture.' '.$userlink.' ('.$user->email.')';
// Print form
$mform->display();

echo $OUTPUT->footer($course);
