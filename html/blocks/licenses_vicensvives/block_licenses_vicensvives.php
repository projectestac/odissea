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


class block_licenses_vicensvives extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_licenses_vicensvives');
    }

    public function instance_allow_multiple() {
        return false;
    }

    public function get_content() {
        global $CFG, $COURSE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        require_once("$CFG->dirroot/blocks/licenses_vicensvives/locallib.php");

        $context = context_system::instance();

        if (has_capability('moodle/course:update', $context)) {
            $this->title = get_string('pluginname', 'block_licenses_vicensvives');
            if (preg_match('/^vv-([0-9]+)-/', $COURSE->idnumber, $match)) {
                $idbook = (int) $match[1];
                try {
                    $licenses = vicensvives_count_licenses($idbook);
                } catch (vicensvives_ws_error $e) {
                    $this->content->text = html_writer::tag('div', $e->getMessage(), ['class' => 'error alert alert-danger']);
                    return $this->context;
                }
                if (isset($licenses[$idbook])) {
                    $count = $licenses[$idbook];
                    $student = get_string('studentlicenses', 'block_licenses_vicensvives') . ': '
                             . $count->studentactivated . ' / ' . $count->studenttotal;
                    $teacher = get_string('teacherlicenses', 'block_licenses_vicensvives') . ': '
                             . $count->teacheractivated . ' / ' . $count->teachertotal;
                    $this->content->text .= $student . '<br/>' . $teacher . '<br/>';
                }
            }
            $url = new moodle_url('/blocks/licenses_vicensvives/licenses.php', ['course' => $COURSE->id]);
            $text = get_string('showlicenses', 'block_licenses_vicensvives');
            $this->content->text .= html_writer::link($url, $text);
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
        return ['all' => true];
    }

}
