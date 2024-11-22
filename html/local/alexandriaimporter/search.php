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

require_once '../../config.php';
require_once 'lib.php';
require_once 'locallib.php';

// The courseid we are importing to.
$courseid = required_param('id', PARAM_INT);
$dataid = optional_param('dataid', false, PARAM_INT);

// Load the course and context.
$course = $DB->get_record('course', ['id' => $courseid], '*', MUST_EXIST);
$context = context_course::instance($courseid);

// Must pass login.
require_login($course);

// Must hold restoretargetimport in the current course.
require_capability('moodle/restore:restoretargetimport', $context);

// Set up the page.
$PAGE->set_title($course->shortname . ': ' . get_string('importfromalexandria', 'local_alexandriaimporter'));
$PAGE->set_heading($course->fullname);
$PAGE->set_url(new moodle_url('/local/alexandriaimporter/search.php', ['id' => $courseid]));
$PAGE->set_context($context);
$PAGE->set_pagelayout('incourse');

$PAGE->requires->jquery();
$PAGE->requires->jquery_plugin('ui');

// Show the course selector.
echo $OUTPUT->header();

// Check if alexandria import is enabled.
$dbs = alexandria_get_databases();
if (count($dbs) <= 0) {
    echo $OUTPUT->notification(get_string('nodatabases', 'local_alexandriaimporter'), 'error');
    echo $OUTPUT->footer();
    die();
}

echo $OUTPUT->heading(get_string('importfromalexandria', 'local_alexandriaimporter'));
echo $OUTPUT->container_start('', 'alexandria_restore');

// Echo tabs.
echo '<ul class="nav nav-tabs">';
foreach ($dbs as $db) {
    if (!$dataid || $db->id === $dataid) {
        echo '<li class="nav-item active">';
        $dataid = $db->id;
    } else {
        echo '<li class="nav-item">';
    }
    echo '<a href="#dbsel' . $db->id . '" class="nav-link" data-toggle="tab">'
        . core_text::strtotitle($db->searching)
        . '</a></li>';
}
echo '</ul><div class="tab-content">';

$searchurl = new moodle_url('/local/alexandriaimporter/search.php', ['id' => $courseid]);

$selected = false;
$showadvanced = false;

// Echo tab contents.
foreach ($dbs as $db) {
    if ($db->id === $dataid) {
        echo '<div class="tab-pane active" id="dbsel' . $db->id . '">';
    } else {
        echo '<div class="tab-pane" id="dbsel' . $db->id . '">';
    }
    $selected = ($dataid === $db->id);

    $search = render_alexandria_searchform($db, $searchurl, $selected);
    if ($selected && !empty($search)) {
        $showadvanced = empty($search['search']);

        $found = search_in_alexandria($db->id, $search);

        if (!empty($found)) {
            render_search_results($db, $found, $courseid, $search);
        }

    }
    echo '</div>';
}

echo '</div>
    <script type="text/javascript">
        $(function() {
            $(".showhideadv").click(function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggle_advanced(!$(".advanced").is(":visible"));
            });
            function toggle_advanced(advanced) {
                if (advanced) {
                    $(".advanced").show();
                    $(".advanced input").removeAttr("disabled");
                    $(".advanced select").removeAttr("disabled");
                    $(".simple").hide();
                    $(".simple input").attr("disabled", "disabled");
                    $(".simple select").attr("disabled", "disabled");
                } else {
                    $(".simple").show();
                    $(".simple input").removeAttr("disabled");
                    $(".simple select").removeAttr("disabled");
                    $(".advanced").hide();
                    $(".advanced input").attr("disabled", "disabled");
                    $(".advanced select").attr("disabled", "disabled");
                }
            }
            toggle_advanced(' . $showadvanced . ');
            $(".tab-dbsel").click(function() {
                $(".tab-dbsel").toggleClass("active");
            });
        });
    </script>';

echo $OUTPUT->container_end();

echo $OUTPUT->footer();