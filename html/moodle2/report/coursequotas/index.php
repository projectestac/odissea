<?php

/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (http://agora.xtec.cat)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot.'/report/coursequotas/locallib.php');

admin_externalpage_setup('coursequotas', '', null, '', array('pagelayout' => 'report'));
$PAGE->requires->jquery();
$PAGE->requires->jquery_plugin('ui');
echo $OUTPUT->header();

function_exists('require_not_rush_hour') && require_not_rush_hour();

// Get category tree with information about its courses and disk usage.
$treedata = report_coursequotas_get_category_data();

$chartinfo = report_course_quotas_get_chart_info($treedata);

// Content for first tab (general).
$totaldisk = report_coursequotas_diskinfo($chartinfo);
if ($totaldisk) {
    $generalcontent = $OUTPUT->heading(get_string('total_description', 'report_coursequotas'), 3);
    $generalcontent .= report_coursequotas_print_chart($chartinfo, $totaldisk->consumed, $totaldisk->space);
    $generalcontent .= $OUTPUT->notification(get_string('disk_consume_explain', 'report_coursequotas', $totaldisk), 'success');
} else {
    $generalcontent = $OUTPUT->heading(get_string('total_noquota_description', 'report_coursequotas'), 3);
    $generalcontent .= report_coursequotas_print_chart($chartinfo);
}
if ($chartinfo['backup']->bytes > 0) {
    $generalcontent .= $OUTPUT->notification(get_string('manage_backup_files', 'report_coursequotas',
        $CFG->wwwroot.'/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC'), 'info');
}
$generalcontent .= '<ul style="margin:auto; width:400px; margin-bottom:20px;">' .
            '<li>' . get_string('disk_consume_courses', 'report_coursequotas', $chartinfo['course'] ) . '</li>' .
            '<li>' . get_string('disk_consume_backups', 'report_coursequotas', $chartinfo['backup']) . '</li>' .
            '<li>' . get_string('disk_consume_user', 'report_coursequotas', $chartinfo['user']) . '</li>' .
            '<li>' . get_string('disk_consume_repofiles', 'report_coursequotas', $chartinfo['repository']) . '</li>' .
            '<li>' . get_string('disk_consume_temp', 'report_coursequotas', $chartinfo['temp']) . '</li>' .
            '<li>' . get_string('disk_consume_trash', 'report_coursequotas', $chartinfo['trash']) . '</li>' .
            '</ul>';

// Content for second tab (categories).
$categorycontent = $OUTPUT->heading(get_string('category_description', 'report_coursequotas'), 3).
    report_coursequotas_print_category_data($treedata);

// Content for third tab (courses).
$coursescontent = $OUTPUT->heading(get_string('courses_description', 'report_coursequotas'), 3).
    report_coursequotas_print_courses_data($treedata);

echo '<div id="coursequotas">
        <ul  class="nav nav-tabs">
            <li class="active"><a href="#general" data-toggle="tab">' . get_string('total_data', 'report_coursequotas') . '</a></li>
            <li><a href="#category" data-toggle="tab">' . get_string('category_data', 'report_coursequotas') . '</a></li>
            <li><a href="#course" data-toggle="tab">' . get_string('larger_courses', 'report_coursequotas') . '</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="general">' . $generalcontent . '</div>
          <div class="tab-pane" id="category">' . $categorycontent . '</div>
          <div class="tab-pane" id="course">' . $coursescontent . '</div>
        </div>
    </div>';

echo $OUTPUT->footer();
