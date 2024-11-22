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
 * This script allows the number of sections in a course to be increased or decreased, redirecting to the course page.
 *
 * CHANGES:
 *  - Use section info instead of section number.
 *  - Specify the insertion location as the new section's parent ID, rather than the new section's section number.
 *  - Specify the new section's level.
 *
 * @package   format_multitopic
 * @copyright 2019 James Calder and Otago Polytechnic
 * @copyright based on work by 2012 Dan Poltawski
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since     Moodle 2.3
 */

require_once(__DIR__.'/../../../config.php');                                   // CHANGED.
require_once($CFG->dirroot.'/course/lib.php');
require_once(__DIR__.'/locallib.php');
// ADDED LINE ABOVE: For function format_multitopic_course_create_section .

$courseid = required_param('courseid', PARAM_INT);
$increase = optional_param('increase', null, PARAM_BOOL);
$insertparentid = optional_param('insertparentid', null, PARAM_INT);            // CHANGED: Insert nested in section with ID.
$insertlevel = optional_param('insertlevel', null, PARAM_INT);                  // ADDED: Level for inserted section.
$numsections = optional_param('numsections', 1, PARAM_INT);        // Number of sections to insert.
$returnurl = optional_param('returnurl', null, PARAM_LOCALURL);    // Where to return to after the action.
// REMOVED: sectionreturn .

// ADDED: Create section info object.
$insertsection = null;
if (isset($insertparentid)) {
    $insertsection = new \stdClass();
    $insertsection->parentid = $insertparentid;
    $insertsection->level = $insertlevel ?? FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC;
}
// END ADDED.

$course = $DB->get_record('course', ['id' => $courseid], '*', MUST_EXIST);
$courseformatoptions = course_get_format($course)->get_format_options();

$PAGE->set_url('/course/changenumsections.php', ['courseid' => $courseid]);
// TODO: Change?

// Authorisation checks.
require_login($course);
require_capability('moodle/course:update', \context_course::instance($course->id));
require_sesskey();

$desirednumsections = 0;
$courseformat = course_get_format($course);
$lastsectionnumber = $courseformat->get_last_section_number();
$maxsections = $courseformat->get_max_sections();

if (false) {                                                                    // CHANGED: Don't use numsections.
    $desirednumsections = $courseformatoptions['numsections'] + 1;
} else if (course_get_format($course)->uses_sections() && $insertsection !== null) {
    // Count the sections in the course.
    $desirednumsections = $lastsectionnumber + $numsections;
}

if ($desirednumsections > $maxsections) {
    // Increase in number of sections is not allowed.
    \core\notification::warning(get_string('maxsectionslimit', 'moodle', $maxsections));
    $increase = null;
    $insertsection = null;
    $numsections = 0;

    if (!$returnurl) {
        $returnurl = course_get_url($course);
    }
}

if (false) {                                                                    // CHANGED: Don't use numsections.
    if ($increase) {
        // Add an additional section.
        $courseformatoptions['numsections']++;
        course_create_sections_if_missing($course, $courseformatoptions['numsections']);
    } else {
        // Remove a section.
        $courseformatoptions['numsections']--;
    }

    // Don't go less than 0, intentionally redirect silently (for the case of
    // double clicks).
    if ($courseformatoptions['numsections'] >= 0) {
        update_course((object)['id' => $course->id,
            'numsections' => $courseformatoptions['numsections'], ]);
    }
    // Overwriting returnurl to be consistent with block below even though we never get here.
    $returnurl = course_get_url($course);
    $returnurl->set_anchor('changenumsections');

} else if (course_get_format($course)->uses_sections() && $insertsection !== null) {
    if (true) {
        // CHANGED: Usually Moodle would not check for the capability to move sections when adding a section to the end.
        // Since "the end" seems a less meaningful distinction for a heirarchy than for a list, this special case is omitted.
        require_capability('moodle/course:movesections', \context_course::instance($course->id));
    }
    $sections = [];
    for ($i = 0; $i < max($numsections, 1); $i ++) {
        $sections[] = format_multitopic_course_create_section($course, $insertsection);
        // CHANGED LINE ABOVE: Use custom method, and send section info, not section number.
    }
    $returnurl = course_get_url($course, $sections[0], []);
    // CHANGED LINE ABOVE: Send section info, not section number or section return.
}

// Redirect to where we were..
redirect($returnurl);
