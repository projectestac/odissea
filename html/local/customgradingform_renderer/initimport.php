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
 * Initializes grading area and redirects to import if rubric doesn't exist yet.
 *
 * @package   local_customgradingform_renderer
 * @copyright 2025 Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once($CFG->dirroot . '/grade/grading/lib.php');

$cmid  = required_param('cmid', PARAM_INT);
$debug = optional_param('debug', 0, PARAM_BOOL);

$cm      = get_coursemodule_from_id(null, $cmid, 0, false, MUST_EXIST);
$context = context_module::instance($cm->id);
$course  = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);

require_login($course, true, $cm);
require_capability('moodle/grade:managegradingforms', $context);

$component = 'mod_' . $cm->modname;
$area = 'submissions';

$gradingarea = $DB->get_record('grading_areas', [
    'contextid' => $context->id,
    'component' => $component,
    'areaname'  => $area,
]);

if (!$gradingarea) {
    $gradingarea = new stdClass();
    $gradingarea->contextid = $context->id;
    $gradingarea->component = $component;
    $gradingarea->areaname = $area;
    $gradingarea->activemethod = 'rubric';
    $gradingarea->id = $DB->insert_record('grading_areas', $gradingarea);
} else if ($gradingarea->activemethod !== 'rubric') {
    $gradingarea->activemethod = 'rubric';
    $DB->update_record('grading_areas', $gradingarea);
}

$alreadyexists = $DB->record_exists('grading_definitions', [
    'areaid' => $gradingarea->id,
    'method' => 'rubric',
]);

$returnurl = new moodle_url('/mod/' . $cm->modname . '/view.php', ['id' => $cm->id]);

if ($alreadyexists) {
    $message = get_string('rubricalreadydefined', 'local_customgradingform_renderer');

    if ($debug) {
        echo $OUTPUT->header();
        echo $OUTPUT->notification($message, 'notifyproblem');
        echo html_writer::start_div('debug');
        echo html_writer::tag('p', "cmid: {$cmid}");
        echo html_writer::tag('p', "contextid: {$context->id}");
        echo html_writer::tag('p', "component: {$component}");
        echo html_writer::tag('p', "area: {$area}");
        echo html_writer::tag('p', "gradingarea id: {$gradingarea->id}");
        echo html_writer::end_div();
        echo $OUTPUT->continue_button($returnurl);
        echo $OUTPUT->footer();
        exit;
    } else {
        redirect($returnurl, $message, 5);
    }
}

$importurl = new moodle_url('/local/customgradingform_renderer/import.php', [
    'areaid' => $gradingarea->id,
    'contextid' => $context->id,
    'returnurl' => $returnurl->out(false),
]);

redirect($importurl);
