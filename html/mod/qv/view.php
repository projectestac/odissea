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

require_once dirname(__FILE__, 3) .'/config.php';
require_once __DIR__ .'/locallib.php';
require_once $CFG->libdir . '/completionlib.php';

$id = optional_param('id', 0, PARAM_INT);  // Course Module ID
$q  = optional_param('q', 0, PARAM_INT);   // qv instance ID - it should be named as the first character of the module

if ($id) {
    $cm         = get_coursemodule_from_id('qv', $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $record     = $DB->get_record('qv', array('id' => $cm->instance), '*', MUST_EXIST);
} else if ($q) {
    $record     = $DB->get_record('qv', array('id' => $q), '*', MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $qv->course), '*', MUST_EXIST);
    $cm         = get_coursemodule_from_instance('qv', $qv->id, $course->id, false, MUST_EXIST);
} else {
    throw new moodle_exception('invalidid', 'qv');
}

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/qv:view', $context);

$ispreview = false;
if (has_capability('moodle/grade:viewall', $context)) {
    $action = optional_param('action', false, PARAM_TEXT);
    if ($action == 'preview') {
        $ispreview = true;
    } else {
        redirect('report.php?id='.$cm->id);
    }
}

$qv = new qv();
$qv->load_record($record);

$params = array(
    'context' => $qv->context,
    'objectid' => $qv->id
);
$event = \mod_qv\event\course_module_viewed::create($params);
$event->add_record_snapshot('qv', $record);


/// Print the page header
$PAGE->set_url('/mod/qv/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($qv->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($context);


// Mark viewed if required
$completion = new completion_info($course);
$completion->set_module_viewed($cm);

echo $OUTPUT->header();

echo $OUTPUT->heading($qv->name);

echo $qv->view_intro();
echo $qv->view_assessment($USER, $ispreview);

echo $OUTPUT->footer();
