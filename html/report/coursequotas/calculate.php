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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (https://github.com/projectestac/agora)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once '../../config.php';
require_once $CFG->libdir . '/adminlib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/local.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/util.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/calculate.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/constants.php';

admin_externalpage_setup(REPORT_COURSEQUOTAS_NAME, '', null, '/report/coursequotas/index.php', array('pagelayout' => REPORT_COURSEQUOTAS_REPORTSTRING));

$PAGE->requires->jquery();
$PAGE->requires->jquery_plugin('ui');

// Check restricted hour
function_exists('require_not_rush_hour') && require_not_rush_hour();


// Get block size. Block size is the allocation unit of space in the file system. So if the block size is 4096, that means
//  that a file of 1 byte, uses 4096 bytes in the file system
$tempdir = isset($CFG->tempdir) ? $CFG->tempdir : $CFG->dataroot . '/temp';
$trashdir = isset($CFG->trashdir) ? $CFG->trashdir : $CFG->dataroot . '/trashdir';

$tempfile = $tempdir . '/test.txt';
file_put_contents($tempfile, REPORT_COMPONENTNAME);
$block_size = intval(exec('du ' . $tempfile . " | awk '{print $1}'")) * 1024;


// Update table with categories information
$categories = $DB->get_records('course_categories', [], 'depth, id', 'id');

foreach ($categories as $catid => $record) {
    $categoryContext = \context_coursecat::instance($catid);
    $categorySize = report_coursequotas_get_contextsize($categoryContext, $block_size);

    // Update or insert record
    $dataObject = $DB->get_record(CATEGORYSIZE_TABLENAME, [CATEGORYSIZE_FIELDCATEGORYID => $catid], '*', IGNORE_MULTIPLE);

    if ($dataObject) {
        $dataObject->{CATEGORYSIZE_FIELDQUOTA} = $categorySize;
        $DB->update_record(CATEGORYSIZE_TABLENAME, $dataObject);
    } else {
        $dataObject = new \stdClass();
        $dataObject->{CATEGORYSIZE_FIELDCATEGORYID} = $catid;
        $dataObject->{CATEGORYSIZE_FIELDQUOTA} = $categorySize;
        $DB->insert_record(CATEGORYSIZE_TABLENAME, $dataObject);
    }
}


// Update table with course information

$courses = $DB->get_records('course', null, '', 'id');

foreach ($courses as $courseId => $course) {
    $courseContext = \context_course::instance($courseId);
    $courseSize = report_coursequotas_get_contextsize($courseContext, $block_size);

    // Update or insert record
    $dataObject = $DB->get_record(COURSESIZE_TABLENAME, [COURSESIZE_FIELDCOURSEID => $courseId], '*', IGNORE_MULTIPLE);

    if ($dataObject) {
        $dataObject->{COURSESIZE_FIELDQUOTA} = $courseSize;
        $DB->update_record(COURSESIZE_TABLENAME, $dataObject);
    } else {
        $dataObject = new \stdClass();
        $dataObject->{COURSESIZE_FIELDCOURSEID} = $courseId;
        $dataObject->{COURSESIZE_FIELDQUOTA} = $courseSize;
        $DB->insert_record(COURSESIZE_TABLENAME, $dataObject);
    }
}


// Update chart information

// Calculate backup usage
set_config('backup_usage', get_coursequotas_filesize(get_backup_where_sql(), '', $block_size), REPORT_COMPONENTNAME);

// Calculate course usage
$syscontext = \context_system::instance();
$params = [$syscontext->depth + 1, CONTEXT_COURSECAT, $syscontext->path . '/%'];

$sql = "SELECT id, path
        FROM {context}
        WHERE depth = ? AND contextlevel = ? AND path LIKE ?";
$contexts = $DB->get_records_sql_menu($sql, $params);

$sitecourse = $DB->get_field('course', 'id', ['category' => 0]);
$context = \context_course::instance($sitecourse);
$contexts[$context->id] = $context->path;

$sqlparts = [];
foreach ($contexts as $contexid => $path) {
    $sqlparts[] = "(f.contextid = c.id AND c.path LIKE '$path/%')";
}
$sqlparts[] = 'f.contextid IN (' . implode(',', array_keys($contexts)) . ')';

$sql = implode(' OR ', $sqlparts);

// Exclude backup files.
$sql = "($sql) AND (f.component != 'backup' OR (f.filearea != 'activity' AND f.filearea != 'course' AND f.filearea != 'automated'))";

$get_filesize = [
    [
        'where' => $sql,
        'tables' => '{context} c',
        'config_name' => 'course_usage',
    ],
    [
        'where' => "component = 'user' AND filearea != 'backup'",
        'tables' => '',
        'config_name' => 'user_usage',
    ],
    [
        'where' => "(f.component = 'mod_hvp' AND f.filearea = 'libraries') OR (f.component = 'core_h5p' AND f.filearea = 'libraries')",
        'tables' => '',
        'config_name' => 'h5plib_usage',
    ],
];

foreach ($get_filesize as $item) {
    set_config(
        $item['config_name'],
        get_coursequotas_filesize($item['where'], $item['tables'], $block_size),
        REPORT_COMPONENTNAME
    );
}

$get_directory_size = [
    [
        'directory' => $CFG->dataroot . '/repository/',
        'config_name' => 'repositories_usage',
    ],
    [
        'directory' => $tempdir,
        'config_name' => 'tempdir_usage',
    ],
    [
        'directory' => $trashdir,
        'config_name' => 'trashdir_usage',
    ],
];

foreach ($get_directory_size as $item) {
    set_config(
        $item['config_name'],
        report_coursequotas_get_directory_size($item['directory']),
        REPORT_COMPONENTNAME
    );
}

// Save timestamp
set_config('updated', time(), REPORT_COMPONENTNAME);

// Back to main page
redirect(
    new moodle_url('/report/coursequotas/index.php'),
    get_string('quotas_updated', REPORT_COMPONENTNAME),
    null,
    \core\output\notification::NOTIFY_SUCCESS
);
