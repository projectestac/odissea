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
 * @copyright  2012 onwards Agora Development Team (https://github.com/projectestac/agora)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once '../../config.php';
require_once $CFG->libdir . '/adminlib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/local.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/util.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/calculate.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/constants.php';

admin_externalpage_setup(REPORT_COURSEQUOTAS_NAME, '', null, '/report/coursequotas/index.php', array('pagelayout' => REPORT_COURSEQUOTAS_REPORTSTRING));

// Check restricted hour
function_exists('require_not_rush_hour') && require_not_rush_hour();

$block_size = get_block_size();

// Update table with categories information
$categories = $DB->get_records('course_categories', [], 'depth, id', 'id');
foreach ($categories as $cat_id => $record) {
    $coursecat_context = \context_coursecat::instance($cat_id);
    insert_or_update_coursequotas_size($coursecat_context, CATEGORYSIZE_TABLENAME, CATEGORYSIZE_FIELDCATEGORYID, CATEGORYSIZE_FIELDQUOTA, $cat_id, $block_size);
}

// Update table with courses information
$courses = $DB->get_records('course', null, '', 'id');
foreach ($courses as $course_id => $course) {
    $course_context = \context_course::instance($course_id);
    insert_or_update_coursequotas_size($course_context, COURSESIZE_TABLENAME, COURSESIZE_FIELDCOURSEID, COURSESIZE_FIELDQUOTA, $course_id, $block_size);
}

// Update chart information

// Calculate backup usage
set_config('backup_usage', get_coursequotas_filesize(get_backup_where_sql(), '', $block_size), REPORT_COMPONENTNAME);

// Calculate global usages from database
$query_items = get_coursequotas_queries_info();
foreach ($query_items as $item) {
    set_config(
        $item[REPORT_COURSEQUOTAS_CONFIGNAME_STRING],
        get_coursequotas_filesize($item[REPORT_COURSEQUOTAS_WHERE_STRING], $item[REPORT_COURSEQUOTAS_TABLES_STRING], $block_size),
        REPORT_COMPONENTNAME
    );
}

$directory_items = get_coursequotas_directories_info();
foreach ($directory_items as $item) {
    set_config(
        $item[REPORT_COURSEQUOTAS_CONFIGNAME_STRING],
        report_coursequotas_get_directory_size($item[REPORT_COURSEQUOTAS_DIRECTORY_STRING]),
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
