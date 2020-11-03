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

$courses = report_coursequotas_get_course_sizes();

// Sort the array by course size.
usort($courses, "cmp_sort_course_array");

$canmanage = can_manage_files();

$table = new html_table();
$table->class = 'generaltable';
$table->head = array(
    get_string('course_name', 'report_coursequotas'),
    get_string('category_name', 'report_coursequotas'),
    get_string('disk_used', 'report_coursequotas')
);
$table->align = array('left', 'center', 'center');

if ($canmanage) {
    $managebaseurl = $CFG->wwwroot.'/report/coursequotas/filemanager.php?children=true&course=';
    $managestr = get_string('manage', 'report_coursequotas');
    $table->head[] = get_string('actions');
    $table->align[] = 'center';
}
$coursebaseurl = $CFG->wwwroot.'/course/view.php?id=';

foreach ($courses as $course) {
    $dimmed = $course->visible ? "" : ' class="dimmed"';
    $row = array(
        '<a href="'.$coursebaseurl.$course->id.'" '.$dimmed.' target="_blank">'.$course->fullname.'</a>',
        $course->catlink,
        $course->sizeformat
    );

    if ($canmanage) {
        $row[] = ($course->bytes > 0) ? '<a href="'.$managebaseurl.$course->id.'">'.$managestr.'</a>' : "";
    }

    $table->data[] = $row;
}

$backuptab = "";
$backupusage = report_coursequotas_get_backup_usage();
if ($backupusage->bytes > 0) {
    $backuptab = '<li><a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC">' . get_string('backups', 'report_coursequotas') . '</a></li>';
}

echo '<div id="coursequotas">
        <ul  class="nav nav-tabs">
            <li><a href="index.php">' . get_string('total_data', 'report_coursequotas') . '</a></li>
            <li><a href="category.php">' . get_string('category_data', 'report_coursequotas') . '</a></li>
            <li class="active"><a href="course.php" >' . get_string('larger_courses', 'report_coursequotas') . '</a></li>
            ' . $backuptab . '
        </ul>
        <div>' .
            $OUTPUT->heading(get_string('courses_description', 'report_coursequotas'), 3).
            html_writer::table($table) . '</div>
    </div>';

echo $OUTPUT->footer();
