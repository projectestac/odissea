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
require_once("$CFG->libdir/adminlib.php");
require_once("$CFG->dirroot/local/clickedu/locallib.php");

admin_externalpage_setup('clickedu_synccourses');

clickedu_require_token();

echo $OUTPUT->header();

$courses = clickedu_get_courses();

if ($courses) {
    if (optional_param('confirm', false, PARAM_BOOL)) {
        require_sesskey();
        set_time_limit(0);
        echo html_writer::start_div('clickedu-progressbar');
        $progressbar = new progress_bar();
        $progressbar->create();
        clickedu_sync_courses($courses, $progressbar);
        echo html_writer::end_div();
        $text = get_string('coursessynced', 'local_clickedu');
        echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
    } else {
        echo $OUTPUT->heading(get_string('synccourses', 'local_clickedu'), 3);

        $text = html_writer::tag('p', get_string('courses', 'local_clickedu', count($courses)));
        $url = new moodle_url($PAGE->url, array('confirm' => true, 'sesskey' => sesskey()));
        $button = $OUTPUT->single_button($url, get_string('continue'));
        echo html_writer::div($text . $button, 'generalbox', array('id' => 'notice'));

        $table = new html_table;
        $table->attributes['class'] = 'generaltable';
        $table->align = array('left', 'left', 'center', 'center', 'center');
        $table->head = array(
            get_string('shortname'),
            get_string('fullname'),
            get_string('teachers'),
            get_string('students'),
            get_string('status'),
        );
        foreach ($courses as $course) {
            $action = new html_table_cell(get_string('coursenochanges', 'local_clickedu'));
            if (!$course->id) {
                $action->text = get_string('coursecreate', 'local_clickedu');
                $action->attributes['class'] = 'course-create';
            } else if ($course->oldteachers != $course->newteachers or
                       $course->oldstudents != $course->newstudents) {
                $action->text = get_string('courseupdate', 'local_clickedu');
                $action->attributes['class'] = 'course-update';
            }
            $table->data[] = array(
                $course->shortname,
                $course->fullname,
                count($course->newteachers),
                count($course->newstudents),
                $action,
            );
        }
        echo html_writer::table($table);
    }
} else {
    $text = get_string('nocourses', 'local_clickedu');
    echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
}

echo $OUTPUT->footer();
