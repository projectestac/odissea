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

define('NO_OUTPUT_BUFFERING', true);

require_once('../../config.php');
require_once("$CFG->dirroot/local/clickedu/locallib.php");

$courseid = required_param('id', PARAM_INT);

require_login($courseid, false);
require_capability('local/clickedu:synccontents', $PAGE->context);

$url = new moodle_url('/local/clickedu/synccontents.php', array('id' => $courseid));

$PAGE->set_url($url);
$PAGE->set_pagelayout('incourse');
$PAGE->set_heading($COURSE->fullname);

clickedu_require_token();

echo $OUTPUT->header();

$contents = clickedu_get_contents($PAGE->course);

if ($contents) {
    if (optional_param('confirm', false, PARAM_BOOL)) {
        require_sesskey();
        set_time_limit(0);
        echo html_writer::start_div('clickedu-progressbar');
        $progressbar = new progress_bar();
        $progressbar->create();
        clickedu_sync_contents($PAGE->course, $contents, $progressbar);
        echo html_writer::end_div();
        $text = get_string('contentssynced', 'local_clickedu');
        $url = new moodle_url('/course/view.php', array('id' => $PAGE->course->id));
        $button = $OUTPUT->single_button($url, get_string('continue'));
        echo html_writer::div($text . $button, 'generalbox', array('id' => 'notice'));
    } else {
        echo $OUTPUT->heading(get_string('synccontents', 'local_clickedu'), 3);
        $text = html_writer::tag('p', get_string('synccontentsnotice', 'local_clickedu'));
        $url = new moodle_url($url, array('confirm' => true, 'sesskey' => sesskey()));
        $button = $OUTPUT->single_button($url, get_string('continue'));
        echo html_writer::div($text . $button, 'generalbox', array('id' => 'notice'));
    }
} else {
    $text = get_string('nocontents', 'local_clickedu');
    echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
}

echo $OUTPUT->footer();
