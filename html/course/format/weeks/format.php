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
 * Weeks course format.  Display the whole course as "weeks" made of modules.
 *
 * @package format_weeks
 * @copyright 2006 The Open University
 * @author N.D.Freear@open.ac.uk, and others.
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');
require_once($CFG->libdir.'/completionlib.php');

// Horrible backwards compatible parameter aliasing..
if ($week = optional_param('week', 0, PARAM_INT)) {
    $url = $PAGE->url;
    $url->param('section', $week);
    debugging('Outdated week param passed to course/view.php', DEBUG_DEVELOPER);
    redirect($url);
}
// End backwards-compatible aliasing..

// Make sure section 0 is created.
$course = course_get_format($course)->get_course();
course_create_sections_if_missing($course, 0);

$renderer = $PAGE->get_renderer('format_weeks');

//XTEC ************ AFEGIT - To show current section if none is selected
//2012.08.20  @sarjona
//2013.11.26 @mespinosa - Fixed for weeks format
if ($course->coursedisplay == COURSE_DISPLAY_MULTIPAGE){
    $notifyeditingon = optional_param('notifyeditingon', -1, PARAM_BOOL);
    if ($edit < 0 && $notifyeditingon < 0 && empty($displaysection)) {
    	$format = course_get_format($course);
    	$sections = $DB->get_records('course_sections',array('course' => $course->id));
    	foreach($sections as $section_aux) {
    		if($format->is_section_current($section_aux) && $section_aux->section <= $course->numsections) {
    			$displaysection = $section_aux->section;
    			break;
    		}
    	}
    } else if ($displaysection == -1){
        $displaysection = 0;
    }
}
//************ FI

if (!empty($displaysection)) {
    $renderer->print_single_section_page($course, null, null, null, null, $displaysection);
} else {
    $renderer->print_multiple_section_page($course, null, null, null, null);
}

$PAGE->requires->js('/course/format/weeks/format.js');
$PAGE->requires->js_call_amd('core_course/sectionlistener');
