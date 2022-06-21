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
require_once $CFG->dirroot . '/report/coursequotas/constants.php';

admin_externalpage_setup(REPORT_COURSEQUOTAS_NAME, '', null, '/report/coursequotas/index.php', array('pagelayout' => REPORT_COURSEQUOTAS_REPORTSTRING));

echo $OUTPUT->header();

// Check restricted hour
function_exists('require_not_rush_hour') && require_not_rush_hour();

// Get summary of disk usage from database (config_plugins), grouped by type
$chartinfo = report_course_quotas_get_chart_info();

// Get summary of global quota usage by this Moodle in Agora. If it's not in Agora, $totaldisk will be false
$totaldisk = report_coursequotas_diskinfo($chartinfo);

if ($totaldisk) {
    $content = $OUTPUT->heading(get_string('total_description', REPORT_COMPONENTNAME), 2);
    $content .= report_coursequotas_print_chart($chartinfo, $totaldisk->consumed, $totaldisk->space);
    $content .= $OUTPUT->notification(get_string('disk_consume_explain', REPORT_COMPONENTNAME, $totaldisk), 'success');
} else {
    $content = $OUTPUT->heading(get_string('total_noquota_description', REPORT_COMPONENTNAME), 2);
    $content .= report_coursequotas_print_chart($chartinfo);
}

if ($chartinfo['backup']->bytes > 0) {
    $content .= $OUTPUT->notification(
        get_string('manage_backup_files', REPORT_COMPONENTNAME,$CFG->wwwroot . '/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC'),
        'info'
    );
    $backuptab = REPORT_COURSEQUOTAS_LI_OPEN_HTML.'<a href="' . $CFG->wwwroot . '/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC">' . get_string('backups', REPORT_COMPONENTNAME) . '</a>'.REPORT_COURSEQUOTAS_LI_CLOSE_HTML;
} else {
    $backuptab = '';
}

$content .= '
    <ul style="width: 800px; margin: auto auto 20px;">' .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_courses', REPORT_COMPONENTNAME, $chartinfo['course']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_backups', REPORT_COMPONENTNAME, $chartinfo['backup']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_user', REPORT_COMPONENTNAME, $chartinfo['user']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_h5plib', REPORT_COMPONENTNAME, $chartinfo['h5plib']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_repofiles', REPORT_COMPONENTNAME, $chartinfo['repository']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_temp', REPORT_COMPONENTNAME, $chartinfo['temp']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
        REPORT_COURSEQUOTAS_LI_OPEN_HTML . get_string('disk_consume_trash', REPORT_COMPONENTNAME, $chartinfo['trash']) . REPORT_COURSEQUOTAS_LI_CLOSE_HTML .
    '</ul>
    ';

// Create the page and send it to the user
echo '<div role="main" id="coursequotas">
        <div style="margin: 5px 0px 15px 0px;">
            <ul class="nav nav-tabs">
                <li class="active"><a href="index.php">' . get_string('total_data', REPORT_COMPONENTNAME) . '</a></li>
                <li><a href="category.php">' . get_string('category_data', REPORT_COMPONENTNAME) . '</a></li>
                <li><a href="course.php">' . get_string('larger_courses', REPORT_COMPONENTNAME) . '</a></li>
                ' . $backuptab . '
            </ul>
        </div>
        <div class="box">' . $content . '</div>
    </div>';

echo $OUTPUT->footer();
