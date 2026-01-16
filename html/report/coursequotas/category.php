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
require_once $CFG->dirroot . '/report/coursequotas/constants.php';

admin_externalpage_setup(REPORT_COURSEQUOTAS_NAME, '', null, '/report/coursequotas/category.php', array('pagelayout' => REPORT_COURSEQUOTAS_REPORTSTRING));

echo $OUTPUT->header();

function_exists('require_not_rush_hour') && require_not_rush_hour();

// Get category tree with information about its courses and disk usage.
$cattree = report_coursequotas_get_category_sizes();

$backuptab = '';
$backupusage = report_coursequotas_format_size((int)get_config(REPORT_COMPONENTNAME, 'backup_usage'));
if ($backupusage->bytes > 0) {
    $backuptab = '<li style="margin: 10px;"><a href="' . $CFG->wwwroot . '/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC">' . get_string('backups', REPORT_COMPONENTNAME) . '</a></li>';
}

// Create the page and send it to the user
echo '<div role="main" id="coursequotas">
        <div style="margin: 5px 0 15px 0;">
            <ul class="nav nav-tabs">
                <li style="margin: 10px;"><a href="index.php">' . get_string('total_data', REPORT_COMPONENTNAME) . '</a></li>
                <li class="active" style="margin: 10px;"><a href="category.php">' . get_string('category_data', REPORT_COMPONENTNAME) . '</a></li>
                <li style="margin: 10px;"><a href="course.php">' . get_string('larger_courses', REPORT_COMPONENTNAME) . '</a></li>
                ' . $backuptab . '
            </ul>
        </div>
        <div>' .
            $OUTPUT->heading(get_string('category_description', REPORT_COMPONENTNAME), 2) .
            report_coursequotas_print_category_data($cattree) . '
        </div>
    </div>';

echo $OUTPUT->footer();
