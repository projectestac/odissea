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

define('AJAX_SCRIPT', true);

require_once('../../config.php');
require_once('lib.php');
require_once('locallib.php');

// The courseid we are importing to.
$courseid = required_param('id', PARAM_INT);
$dataid = required_param('dataid', PARAM_INT);
$from = required_param('from', PARAM_INT);
$search = required_param_array('search', PARAM_TEXT);

// Load the course and context.
$course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
$context = context_course::instance($courseid);

// Must pass login.
require_login($course);

// Must hold restoretargetimport in the current course.
require_capability('moodle/restore:restoretargetimport', $context);

// Check if alexandria import is enabled.
$dbs = alexandria_get_databases();
if (count($dbs) <= 0) {
    return '';
}

$data = $dbs[$dataid];
if (!$data) {
    return '';
}

$found = search_in_alexandria($dataid, $search, $from);

$url = new moodle_url('/local/alexandriaimporter/import.php',
    array(
        'id' => $courseid,
        'datatype' => $data->type,
        'fieldid' => $found->fieldid
    )
);
foreach ($found->results as $result) {
    $url->param('recordid', $result->id);
    $url->param('filename', $result->filename);
    $result->formatted = format_record_contents($result->content, $result->id, $url);
}

echo json_encode($found);
