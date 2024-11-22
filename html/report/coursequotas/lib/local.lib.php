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
use core_privacy\local\request\transform;

/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (https://github.com/projectestac/agora)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Get disk usage for the Moodle site
 *
 * @param $chartinfo
 * @return false|StdClass
 */
function report_coursequotas_diskinfo($chartinfo) {
    global $CFG;

    $hasinfo = function_exists('is_agora') && is_agora() && function_exists('getDiskInfo');

    if ($hasinfo) {
        // Get quota usage from Àgora portal (might be out-of-date).
        $tempinfo = getDiskInfo($CFG->dnscentre, 'Moodle');

        $info = new \stdClass();
        $info->space = round($tempinfo['quota'] / (1024 * 1024)); // Bytes -> MB.
        $info->consumed = $tempinfo['used_quota'] / (1024 * 1024); // Bytes -> MB.

        // If disk info is not available.
        if ((int)$info->consumed === 0) {
            $info->consumed += report_coursequotas_get_chart_info_total($chartinfo);
        }
        $info->consumed = round($info->consumed);
    }

    return (isset($info) && is_object($info)) ? $info : false;
}

/**
 * Get the summary of disk usage from database (config_plugins), grouped by type
 *
 * @throws dml_exception
 * @return array
 */
function report_course_quotas_get_chart_info(): array {

    $chartinfo = [];

    // Get quota used in courses.
    $chartinfo['course'] = report_coursequotas_format_size((int)get_config(REPORT_COMPONENTNAME, 'course_usage'));

    // Get quota used in backups.
    $chartinfo['backup'] = report_coursequotas_format_size((int)get_config(REPORT_COMPONENTNAME, 'backup_usage'));

    // Get quota used by users.
    $chartinfo['user'] = report_coursequotas_format_size((int)get_config(REPORT_COMPONENTNAME, 'user_usage'));

    // Get quota used in H5P libraries.
    $chartinfo['h5plib'] = report_coursequotas_format_size((int)get_config(REPORT_COMPONENTNAME, 'h5plib_usage'));

    // Get quota used in repositories.
    $chartinfo['repository'] = report_coursequotas_format_size((float)get_config(REPORT_COMPONENTNAME, 'repositories_usage'));

    // Get quota used in files in temp and trash directories.
    $chartinfo['temp'] = report_coursequotas_format_size((float)get_config(REPORT_COMPONENTNAME, 'tempdir_usage'));
    $chartinfo['trash'] = report_coursequotas_format_size((float)get_config(REPORT_COMPONENTNAME, 'trashdir_usage'));

    return $chartinfo;
}

/**
 * Generate HTML code to show the chart
 *
 * @param $chartinfo
 * @param false $consumed
 * @param false $total
 * @throws coding_exception
 * @throws dml_exception
 * @return string
 */
function report_coursequotas_print_chart($chartinfo, $consumed = false, $total = false): string {
    global $CFG, $OUTPUT;

    $text = '';
    $unlocated = 0;

    $consumedcalc = report_coursequotas_get_chart_info_total($chartinfo);

    if ($consumed && $total) {
        // Get boxes that inform about latest update and show updating button
        $text .= report_coursequotas_get_notifications();

        if ($consumedcalc > $consumed) {
            $consumed = $consumedcalc;
            $unlocated = 0;
        } else {
            $unlocated = round($consumed - $consumedcalc);
        }

        // Protect the graph against data errors.
        $free = $total - $consumed > 0 ? $total - $consumed : 0;
    } else {
        $free = 0;
        $total = $consumed = $consumedcalc;
    }

    $colors = [
        'course' => '#FDB45C',
        'backup' => '#46BFBD',
        'user' => '#4C86B9',
        'h5plib' => '#A4822D',
        'temp' => '#984298',
        'trash' => '#A4822D',
        'repository' => '#BB556F',
    ];

    $highlights = [
        'course' => '#FFC870',
        'backup' => '#5AD3D1',
        'user' => '#5B90BF',
        'h5plib' => '#C79E37',
        'temp' => '#D19ED1',
        'trash' => '#C79E37',
        'repository' => '#DF6A88',
    ];

    $onepercent = (int)$total / 100;
    $consumedpercent = 0;
    $chartvalues = [];

    foreach ($chartinfo as $type => $value) {
        $value = $value->bytes / (1024 * 1024);
        if ($value > $onepercent) {
            $chartvalue = new \stdClass();
            $chartvalue->label = get_string('disk_used_' . $type, 'report_coursequotas');
            $chartvalue->value = $value;
            $chartvalue->percent = round($value / $total * 100, 1);
            $chartvalue->color = $colors[$type];
            $chartvalue->highlight = $highlights[$type];
            $chartvalues[] = $chartvalue;
            $consumed -= $value;
            $consumedpercent += $chartvalue->percent;
        }
    }

    if ($consumed > 0) {
        $chartvalue = new \stdClass();
        $chartvalue->label = get_string('disk_used_other', 'report_coursequotas');
        $chartvalue->value = $consumed;
        $chartvalue->percent = round($consumed / $total * 100, 1);
        $chartvalue->color = '#F7464A';
        $chartvalue->highlight = '#FF5A5E';
        $chartvalues[] = $chartvalue;
        $consumedpercent += $chartvalue->percent;
    }

    if ($consumedpercent < 100) {
        $chartvalue = new \stdClass();
        $chartvalue->label = get_string('disk_free', 'report_coursequotas');
        $chartvalue->value = $free;
        $chartvalue->percent = round(100 - $consumedpercent, 1);
        $chartvalue->color = '#2C9C69';
        $chartvalue->highlight = '#4CCA91';
        $chartvalues[] = $chartvalue;
    }

    $text .= '<script src="' . $CFG->wwwroot . '/report/coursequotas/chartjs/Chart.min.js"></script>';
    $text .= '<div id="canvas-holder" style="text-align:center;"><canvas id="chart-area" width="300" height="300"/></div>';
    $text .= '<script>
        window.onload = function(){
            let ctx = document.getElementById("chart-area").getContext("2d");
            let data = [';

    foreach ($chartvalues as $value) {
        $text .= '{ value: ' . $value->value . ', label: "' . $value->label . ' (' . $value->percent . '%)", color: "' . $value->color . '", highlight: "' . $value->highlight . '"},';
    }

    $text .= '];
            var options = {
                animateRotate : true,
                animateScale : true,
                tooltipTemplate: "<%if (label){%><%=label%><%} else {%><%= value %><%}%>"
            };
            window.pieChart = new Chart(ctx).Pie(data, options);
        };
    </script>';

    if (get_protected_agora()) {
        if ($unlocated > 0) {
            $text .= $OUTPUT->notification(get_string('disk_quota_missing', REPORT_COMPONENTNAME, $unlocated), 'info');
        }
    }

    return $text;
}

/**
 * Build the boxes with time and upgrade information shown over the pie chart
 *
 * @throws coding_exception
 * @throws dml_exception
 * @return string
 */
function report_coursequotas_get_notifications(): string {

    global $CFG, $OUTPUT;

    define('UPDATED_OK', 43200); // 12 hours
    define('UPDATED_WARNING', 86400); // 1 day

    // Distance in seconds from latest update
    $diff = time() - (int)get_config(REPORT_COMPONENTNAME, 'updated');

    // Quota was updated very recently. Show time information and don't show upgrade button.
    if ($diff < UPDATED_OK) {
        return $OUTPUT->notification(
            get_string('lastest_update', REPORT_COMPONENTNAME) . ': ' . transform::datetime(get_config(REPORT_COMPONENTNAME, 'updated')),
            'info'
        );
    } else {
        // Show time information AND upgrade button
        $notify = ($diff < UPDATED_WARNING) ? 'warning' : 'notifyproblem';

        $time_box = $OUTPUT->notification(
            get_string('lastest_update', REPORT_COMPONENTNAME) . ': ' . transform::datetime(get_config(REPORT_COMPONENTNAME, 'updated')),
            $notify
        );

        $upgrade_box = $OUTPUT->notification(
            get_string('update_long_time', REPORT_COMPONENTNAME) .
            '<span style="margin-left: 10px;">' .
            '<div class="btn btn-info" aria-hidden="true">' .
            '<a href="' . $CFG->wwwroot . '/report/coursequotas/calculate.php">' .
            '<i class="fa fa-reload" aria-hidden="true"></i>' .
            get_string('update_now', REPORT_COMPONENTNAME) .
            '</a>' .
            '</span>',
            'info'
        );

        return $time_box . $upgrade_box;
    }
}

/**
 * Creates a tree of categories with size information.
 *
 * @throws dml_exception
 * @throws coding_exception
 * @return array Tree with data (see description)
 * @author Pau Ferrer (pau@moodle.com)
 *
 */
function report_coursequotas_get_category_sizes() {
    global $DB;

    // Build category tree
    $catrecords = $DB->get_records('course_categories', [], 'depth, id', 'id, name, parent, visible');
    $cattree = report_coursequotas_build_category_tree($catrecords);

    // Add fake front page category
    $cat = new \stdClass();
    $cat->id = 0;
    $cat->name = get_string('front_page', REPORT_COMPONENTNAME);
    $courseid = $DB->get_field('course', 'id', ['category' => 0]);
    $size = $DB->get_field(COURSESIZE_TABLENAME, COURSESIZE_FIELDQUOTA, [COURSESIZE_FIELDCOURSEID => (int)$courseid]);
    $cat->categorysize = (int)$size;
    $cat->visible = 1;
    $cat->subcategories = false;
    $cattree[0] = $cat;

    return $cattree;
}

/**
 * Creates a tree data structure which contains, only, category information. Iterates recursively.
 *
 * @param array $catrecords Contains all the categories info from the data base
 * @param int $parent ID of the category where to start
 * @throws dml_exception
 * @return array Tree with data (see description)
 * @author Toni Ginard (aginard@xtec.cat)
 *
 */
function report_coursequotas_build_category_tree(array &$catrecords, $parent = 0) {
    global $DB;

    $cattree = [];

    // Find categories with the same parent and add them.
    foreach ($catrecords as $catid => $record) {
        if ($record->parent === $parent) {
            $cat = new \stdClass();
            $cat->id = $catid;
            $cat->name = $record->name;
            $cat->categorysize = (int)$DB->get_field(CATEGORYSIZE_TABLENAME, CATEGORYSIZE_FIELDQUOTA, [CATEGORYSIZE_FIELDCATEGORYID => $catid]);
            $cat->visible = $record->visible;
            $cattree[$catid] = $cat;
            // Efficiency improvement: Once the category is added to the tree, it won't be added again.
            unset($catrecords[$catid]);
        }
    }

    if (empty($cattree)) {
        return false;
    }

    // Find categories with the same parent and add them. This is done in a second iteration to avoid repeating the same level.
    foreach ($cattree as $catid => $cat) {
        // Recursive call to find subcategories.
        $cat->subcategories = report_coursequotas_build_category_tree($catrecords, $catid);
    }

    return $cattree;
}

/**
 * Transforms category tree in a string HTML-formatted to be sent to the browser. Iterates recursively.
 *
 * @param array $cattree Category tree
 *
 * @throws coding_exception
 * @throws dml_exception
 * @return string HTML code to be sent to the browser
 * @author Pau Ferrer (pau@moodle.com)
 */
function report_coursequotas_print_category_data(array $cattree): string {
    global $CFG;

    $content = '<ul>';
    $managestr = get_string('manage', REPORT_COMPONENTNAME);
    $canmanage = can_manage_files();

    foreach ($cattree as $catid => $category) {

        // Format size number adding unit information.
        $size = report_coursequotas_format_size($category->categorysize);

        // Build list content.
        $content .= '<li>';
        if ($catid === 0) {
            $content .= $category->name;
        } else {
            $dimmed = $category->visible ? '' : ' class="dimmed"';
            $content .= '<a href="' . $CFG->wwwroot . '/course/index.php?categoryid=' . $catid . '" ' . $dimmed . ' target="_blank">' . $category->name . '</a>';
        }
        $content .= ' - ' . $size->number . ' ' . $size->unit;

        if ($canmanage && $size->bytes > 0) {
            $content .= ' - <a href="' . $CFG->wwwroot . '/report/coursequotas/filemanager.php?category=' . $catid . '&children=true">' . $managestr . '</a>';
        }

        // Recursive call for subcategories.
        if (!empty($category->subcategories)) {
            $content .= report_coursequotas_print_category_data($category->subcategories);
        }
        $content .= '</li>';
    }
    $content .= '</ul>';

    return $content;
}
