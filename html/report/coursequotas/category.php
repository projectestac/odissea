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
$cattree = report_coursequotas_get_category_sizes();

$backuptab = "";
$backupusage = report_coursequotas_get_backup_usage();
if ($backupusage->bytes > 0) {
    $backuptab = '<li><a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?backups=true&sort=filesize&dir=DESC">' . get_string('backups', 'report_coursequotas') . '</a></li>';
}


echo '<div id="coursequotas">
        <ul  class="nav nav-tabs">
            <li><a href="index.php">' . get_string('total_data', 'report_coursequotas') . '</a></li>
            <li class="active"><a href="category.php">' . get_string('category_data', 'report_coursequotas') . '</a></li>
            <li><a href="course.php">' . get_string('larger_courses', 'report_coursequotas') . '</a></li>
            ' . $backuptab . '
        </ul>
        <div>' .
            $OUTPUT->heading(get_string('category_description', 'report_coursequotas'), 3) .
            report_coursequotas_print_category_data($cattree) . '</div>
    </div>';

echo $OUTPUT->footer();
