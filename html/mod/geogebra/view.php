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
 * Prints a particular instance of geogebra
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod
 * @subpackage geogebra
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/locallib.php');
require_once($CFG->libdir.'/completionlib.php');


$id = optional_param('id', 0, PARAM_INT); // course_module ID, or
$n  = optional_param('n', 0, PARAM_INT);  // geogebra instance ID - it should be named as the first character of the module

if ($id) {
    $cm         = get_coursemodule_from_id('geogebra', $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $geogebra  = $DB->get_record('geogebra', array('id' => $cm->instance), '*', MUST_EXIST);
} else if ($n) {
    $geogebra  = $DB->get_record('geogebra', array('id' => $n), '*', MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $geogebra->course), '*', MUST_EXIST);
    $cm         = get_coursemodule_from_instance('geogebra', $geogebra->id, $course->id, false, MUST_EXIST);
} else {
    print_error('You must specify a course_module ID or an instance ID');
}

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/geogebra:view', $context);

$ispreview = false;
$attemptid = optional_param('attemptid', null, PARAM_INT); // attempt ID

$params = array(
    'context' => $context,
    'objectid' => $geogebra->id
);
$event = \mod_geogebra\event\course_module_viewed::create($params);
$event->add_record_snapshot('geogebra', $geogebra);
$event->trigger();

$PAGE->set_url('/mod/geogebra/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($geogebra->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($context);


// Mark viewed if required
$completion = new completion_info($course);
$completion->set_module_viewed($cm);

echo $OUTPUT->header();

echo '<div class="reportlink">'.geogebra_submittedlink().'</div>';

geogebra_view_intro($geogebra, $cm);

if ($attemptid) {
    $attempt = geogebra_get_attempt($attemptid);
    $cangrade = is_siteadmin() || has_capability('moodle/grade:edit', $context, $USER->id, false);
    if ($cangrade || $attempt->userid == $USER->id) {
        echo geogebra_view_applet($geogebra, $cm, $context, $attempt, true);
    } else {
        print_error(get_string('accessdenied', 'admin'));
    }
} else {
    echo geogebra_view_applet($geogebra, $cm, $context, null, $ispreview);
}

echo $OUTPUT->footer();
