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

class block_courses_vicensvives_renderer extends plugin_renderer_base {

    public function course_info_box($course) {
        global $CFG;

        $output = '';

        $context = context_course::instance($course->id);

        // Rewrite file URLs so that they are correct.
        $course->summary = file_rewrite_pluginfile_urls($course->summary,
            'pluginfile.php', $context->id, 'course', 'summary', null);

        $output .= html_writer::start_tag('div', array('class' => 'vicensvives_course clearfix'));
        $output .= html_writer::start_tag('div', array('class' => 'vicensvives_course_left'));
        $output .= html_writer::start_tag('h3', array('class' => 'vicensvives_course_name'));

        $linkhref = new moodle_url('/course/view.php', array('id' => $course->id));

        $linktext = format_string($course->fullname);
        $linkparams = array('title' => get_string('entercourse'));
        if (empty($course->visible)) {
            $linkparams['class'] = 'dimmed';
        }
        $output .= html_writer::link($linkhref, $linktext, $linkparams);
        $output .= html_writer::end_tag('h3');

        $output .= html_writer::start_tag('ul', array('class' => 'vicensvives_course_teachers'));
        foreach ($this->get_course_contacts($course) as $userid => $coursecontact) {
            $name = $coursecontact['rolename'].': '.
                    html_writer::link(new moodle_url('/user/view.php',
                            array('id' => $userid, 'course' => SITEID)),
                        $coursecontact['username']);
            $output .= html_writer::tag('li', $name);
        }
        $output .= html_writer::end_tag('ul');

        $output .= html_writer::end_tag('div'); // End of info div.

        $context = context_coursecat::instance($CFG->block_courses_vicensvives_defaultcategory);
        if (has_capability('moodle/course:create', $context)) {
            $url = new moodle_url('/blocks/courses_vicensvives/courses.php', array('update' => $course->id));
            $label = get_string('update');
            $button = $this->single_button($url, $label);
            $output .= html_writer::tag('div', $button, array('class' => 'vicensvives_course_right'));
        }

        $output .= html_writer::start_tag('div', array('class' => 'vicensvives_course_right'));
        $options = new stdClass();
        $options->noclean = true;
        $options->para = false;
        $options->overflowdiv = true;
        if (!isset($course->summaryformat)) {
            $course->summaryformat = FORMAT_MOODLE;
        }
        $output .= format_text($course->summary, $course->summaryformat, $options,  $course->id);
        $output .= html_writer::end_tag('div'); // End of summary div.

        $output .= html_writer::end_tag('div'); // End of coursebox div.

        return $output;
    }

    // Esta función es diferente para cada versión de Moodle.
    private function get_course_contacts($course) {
        global $CFG;
        require_once($CFG->libdir. '/coursecatlib.php');
        $course = new course_in_list($course);
        return $course->get_course_contacts();
    }
}
