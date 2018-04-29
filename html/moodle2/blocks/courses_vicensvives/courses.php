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

require('../../config.php');
require_once("$CFG->dirroot/blocks/courses_vicensvives/locallib.php");

require_login(null, false);

$returnurl = new moodle_url('/blocks/courses_vicensvives/courses.php');
$PAGE->set_url($returnurl);

$PAGE->set_context(context_system::instance());

$PAGE->set_pagelayout('standard');

$PAGE->set_title(get_string('courses', 'block_courses_vicensvives'));
$PAGE->set_heading(get_string('courses', 'block_courses_vicensvives'));

$viewcourses = new moodle_url('/blocks/courses_vicensvives/courses.php');
$PAGE->navbar->add(get_string('blocks'));
$PAGE->navbar->add(get_string('pluginname', 'block_courses_vicensvives'));
$PAGE->navbar->add(get_string('courses', 'block_courses_vicensvives'), $viewcourses);

if ($courseid = optional_param('update', false, PARAM_INT)) {
    $context = context_coursecat::instance($CFG->block_courses_vicensvives_defaultcategory);
    require_capability('moodle/course:create', $context);
    require_sesskey();

    @set_time_limit(0);
    raise_memory_limit(MEMORY_HUGE);

    $PAGE->set_pagelayout('base');
    echo $OUTPUT->header();

    $coursename = format_string(get_course($courseid)->fullname);
    echo $OUTPUT->heading(get_string('updateingcourse', 'block_courses_vicensvives') . ': ' . $coursename);

    $progress = new progress_bar();
    $updatedunits = courses_vicensvives_add_book::update($courseid  , $progress);

    if ($updatedunits) {
        echo $OUTPUT->heading(get_string('updatedunits', 'block_courses_vicensvives'), 4);
        echo html_writer::start_tag('ul', array('class' => 'vicensives_newunits'));
        foreach ($updatedunits as $unit) {
            echo html_writer::tag('li', html_writer::tag('strong', $unit->label . '.') . ' ' . $unit->name);
        }
        echo html_writer::end_tag('ul');
    } else {
        echo $OUTPUT->heading(get_string('noupdatedunits', 'block_courses_vicensvives'), 4);
    }

    $urlcourse = new moodle_url('/course/view.php', array('id' => $courseid));
    $link = html_writer::link($urlcourse, get_string('gotocourse', 'block_courses_vicensvives'));
    echo html_writer::div("($link)", 'continuebutton');

    echo $OUTPUT->footer();

    exit;
}

$fields = 'id, format, fullname, visible, summary, summaryformat';

if (has_capability('moodle/course:update', context_system::instance())) {
    $select = $DB->sql_like('idnumber', ':idnumber');
    $params = array('idnumber' => 'vv-%');
    $courses = $DB->get_records_select('course', $select, $params, 'sortorder', $fields);
} else {
    $courses = array();
    foreach (enrol_get_my_courses($fields, 'visible DESC, fullname ASC') as $course) {
        if (!preg_match('/^vv-/i', $course->idnumber)) {
            continue;
        }
        $coursecontext = context_course::instance($course->id);
        if ($course->visible or has_capability('moodle/course:viewhiddencourses', $coursecontext)) {
            $courses[] = $course;
        }
    }
}

echo $OUTPUT->header();

if (!$courses) {
    echo html_writer::div(get_string('nohaycursos', 'block_courses_vicensvives'), 'alert alert-info');
}

$contextcat = context_coursecat::instance($CFG->block_courses_vicensvives_defaultcategory);
if (has_capability('moodle/course:create', $contextcat)) {
    $url = new moodle_url('/blocks/courses_vicensvives/books.php');
    $text = get_string('addcourse', 'block_courses_vicensvives');
    echo $OUTPUT->single_button($url, $text);
}

$renderer = $PAGE->get_renderer('block_courses_vicensvives');

foreach ($courses as $course) {
    echo $renderer->course_info_box($course);
}

echo $OUTPUT->footer();
