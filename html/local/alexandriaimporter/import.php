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
 * Alexandria importer
 *
 * @package    local
 * @subpackage alexandriaimporter
 * @copyright  2016 Pau Ferrer Ocaña pau@moodle.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once('lib.php');
require_once('locallib.php');

// The courseid we are importing to.
$courseid = required_param('id', PARAM_INT);
$datatype = required_param('datatype', PARAM_TEXT);
$fieldid = required_param('fieldid', PARAM_INT);
$recordid = required_param('recordid', PARAM_INT);
$filename = required_param('filename', PARAM_TEXT);
$name = optional_param('name', false,  PARAM_TEXT);

// Load the course and context.
$course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
$context = context_course::instance($courseid);

// Must pass login.
require_login($course);

// Must hold restoretargetimport in the current course.
require_capability('moodle/restore:restoretargetimport', $context);

if ($datatype != 'course' && $datatype != 'scorm') {
    print_error('Option not available.');
}

if (!alexandria_download_resource($fieldid, $recordid, $filename)) {
    print_error('Cannot download file '.$filename);
}

if ($datatype == 'course') {
    alexandria_import_course($courseid, $filename);
} else {
    alexandria_import_scorm($course, $filename, $name);
}
