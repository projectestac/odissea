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

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/lib.php');

class block_courses_vicensvives extends block_list {

    public function init() {
        $this->title = get_string('pluginname', 'block_courses_vicensvives');
    }

    public function instance_allow_multiple() {
        return false;
    }

    public function has_config() {
        return true;
    }

    public function get_content() {
        global $CFG, $USER, $DB, $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = [];
        $this->content->icons = [];
        $this->content->footer = '';

        $icon = $OUTPUT->pix_icon('i/course', '');

        // Administradores.
        if (is_siteadmin()) {
            $text = get_string('show_courses', 'block_courses_vicensvives');
            $url = new moodle_url('/blocks/courses_vicensvives/courses.php');
            $this->content->items[] = html_writer::link($url, $text);

            $text = get_string('addcourse', 'block_courses_vicensvives');
            $url = new moodle_url('/blocks/courses_vicensvives/books.php');
            $this->content->items[] = html_writer::link($url, $text);

            return $this->content;
        }

        // Profesores y gestores.
        $contextcat = context_coursecat::instance($CFG->block_courses_vicensvives_defaultcategory);
        if (isloggedin() && !isguestuser()) {
            $mycourses = enrol_get_my_courses(null, 'visible DESC, fullname ASC');
            if (!$mycourses && !has_capability('moodle/course:create', $contextcat)) {
                return $this->content;
            }

            // Filtrar mycourses con sólo los de VV.
            $courses = $mycourses;

            $i = 0;
            foreach ($courses as $course) {
                // Falta filtrar VV.
                $coursecontext = context_course::instance($course->id); // Eliminamos alumnos de esta manera.
                if (has_capability('moodle/course:update', $coursecontext) && $i < $CFG->block_courses_vicensvives_maxcourses) {
                    $linkcss = $course->visible ? "" : " class=\"dimmed\" ";
                    $text = $icon . ' ' . format_string($course->shortname, true, ['context' => $coursecontext]);
                    $url = new moodle_url('/course/view.php', ['id' => $course->id]);
                    $attributes = ['class' => $course->visible ? '' : 'dimmed'];
                    $this->content->items[] = html_writer::link($url, $text, $attributes);
                    $i++;
                } else if ($i >= $CFG->block_courses_vicensvives_maxcourses) {
                    $text = get_string('show_more', 'block_courses_vicensvives');
                    $url = new moodle_url('/blocks/courses_vicensvives/courses.php');
                    $this->content->items[] = html_writer::link($url, $text);
                    break;
                }
            }

            if (has_capability('moodle/course:create', $contextcat)) {
                $text = get_string('addcourse', 'block_courses_vicensvives');
                $url = new moodle_url('/blocks/courses_vicensvives/books.php');
                $this->content->items[] = html_writer::link($url, $text);
            }

            return $this->content;
        }

        return $this->content;
    }

    /**
     * Returns the role that best describes this blocks contents.
     *
     * This returns 'navigation' as the blocks contents is a list of links to activities and resources.
     *
     * @return string 'navigation'
     */
    public function get_aria_role() {
        return 'navigation';
    }

    public function applicable_formats() {
        return [
            'all' => false,
            'site' => true,
            'my' => true,
        ];
    }
}
