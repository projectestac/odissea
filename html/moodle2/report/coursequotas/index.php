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

$chartinfo = report_course_quotas_get_chart_info();

// Content for first tab (general).
$totaldisk = report_coursequotas_diskinfo($chartinfo);
if ($totaldisk) {
    $content = $OUTPUT->heading(get_string('total_description', 'report_coursequotas'), 3);
    $content .= report_coursequotas_print_chart($chartinfo, $totaldisk->consumed, $totaldisk->space);
    $content .= $OUTPUT->notification(get_string('disk_consume_explain', 'report_coursequotas', $totaldisk), 'success');
} else {
    $content = $OUTPUT->heading(get_string('total_noquota_description', 'report_coursequotas'), 3);
    $content .= report_coursequotas_print_chart($chartinfo);
}

$backuptab = "";
if ($chartinfo['backup']->bytes > 0) {
    $content .= $OUTPUT->notification(get_string('manage_backup_files', 'report_coursequotas',
        $CFG->wwwroot.'/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC'), 'info');
    $backuptab = '<li><a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC">' . get_string('backups', 'report_coursequotas') . '</a></li>';
}

$content .= '<ul style="margin:auto; width: 800px; margin-bottom:20px;">' .
            '<li>' . get_string('disk_consume_courses', 'report_coursequotas', $chartinfo['course'] ) . '</li>' .
            '<li>' . get_string('disk_consume_backups', 'report_coursequotas', $chartinfo['backup']) . '</li>' .
            '<li>' . get_string('disk_consume_user', 'report_coursequotas', $chartinfo['user']) . '</li>' .
            '<li>' . get_string('disk_consume_repofiles', 'report_coursequotas', $chartinfo['repository']) . '</li>' .
            '<li>' . get_string('disk_consume_temp', 'report_coursequotas', $chartinfo['temp']) . '</li>' .
            '<li>' . get_string('disk_consume_trash', 'report_coursequotas', $chartinfo['trash']) . '</li>' .
            '</ul>';

echo '<div id="coursequotas">
        <ul  class="nav nav-tabs">
            <li class="active"><a href="index.php">' . get_string('total_data', 'report_coursequotas') . '</a></li>
            <li><a href="category.php">' . get_string('category_data', 'report_coursequotas') . '</a></li>
            <li><a href="course.php">' . get_string('larger_courses', 'report_coursequotas') . '</a></li>
            '.$backuptab.'
        </ul>
        <div>' . $content . '</div>
    </div>';

echo $OUTPUT->footer();
