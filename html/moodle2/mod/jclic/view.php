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
require_once($CFG->libdir.'/completionlib.php');


$id = optional_param('id', 0, PARAM_INT); // course_module ID, or
$n  = optional_param('n', 0, PARAM_INT);  // jclic instance ID - it should be named as the first character of the module

if ($id) {
    $cm         = get_coursemodule_from_id('jclic', $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $jclic  = $DB->get_record('jclic', array('id' => $cm->instance), '*', MUST_EXIST);
} elseif ($n) {
    $jclic  = $DB->get_record('jclic', array('id' => $n), '*', MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $jclic->course), '*', MUST_EXIST);
    $cm         = get_coursemodule_from_instance('jclic', $jclic->id, $course->id, false, MUST_EXIST);
} else {
    error('You must specify a course_module ID or an instance ID');
}

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/jclic:view', $context);

$ispreview = false;
if (has_capability('moodle/grade:viewall', $context)) {
    $action = optional_param('action', false, PARAM_TEXT);
    if ($action == 'preview') {
        $ispreview = true;
    } else {
        redirect('report.php?id='.$cm->id);
    }
}

$params = array(
    'context' => $context,
    'objectid' => $jclic->id
);
$event = \mod_jclic\event\course_module_viewed::create($params);
$event->add_record_snapshot('jclic', $jclic);
$event->trigger();

/// Print the page header

$PAGE->set_url('/mod/jclic/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($jclic->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($context);

// Mark viewed if required
$completion = new completion_info($course);
$completion->set_module_viewed($cm);

echo $OUTPUT->header();

echo $OUTPUT->heading($jclic->name);

jclic_view_intro($jclic, $cm);
jclic_view_applet($jclic, $context, $ispreview);

echo $OUTPUT->footer();
