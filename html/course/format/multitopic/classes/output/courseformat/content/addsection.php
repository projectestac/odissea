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
 * Contains the default section course format output class.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_multitopic\output\courseformat\content;

use core_courseformat\output\local\content\addsection as addsection_base;

/**
 * Base class to render a course add section buttons.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class addsection extends addsection_base {

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return \stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): \stdClass {

        // If no editor must be displayed, just return an empty structure.
        if (!$this->format->show_editor()) {
            return new \stdClass();
        }

        $format = $this->format;
        $course = $format->get_course();
        $options = $format->get_format_options();

        $lastsection = $format->get_last_section_number();
        $maxsections = $format->get_max_sections();

        // Component based formats handle add section button in the frontend.
        $show = true;

        $data = new \stdClass();                                                // ADDED.

        // REMOVED numsections.
        if (course_get_format($course)->uses_sections() && $show) {
            $data = $this->get_add_section_data($output, $lastsection, $maxsections);
        }

        if (count((array)$data)) {
            $data->showaddsection = true;
        }

        return $data;
    }

    /**
     * Get the add section button data.
     *
     * Current course format does not have 'numsections' option but it has multiple sections suppport.
     * Display the "Add section" link that will insert a section in the end.
     * Note to course format developers: inserting sections in the other positions should check both
     * capabilities 'moodle/course:update' and 'moodle/course:movesections'.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @param int $lastsection the last section number
     * @param int $maxsections the maximum number of sections
     * @return \stdClass data context for a mustache template
     */
    protected function get_add_section_data(\renderer_base $output, int $lastsection, int $maxsections): \stdClass {
        $format = $this->format;
        $course = $format->get_course();
        $data = new \stdClass();

        if (get_string_manager()->string_exists('addsectiontopic', 'format_' . $course->format)) {
            $addstring = get_string('addsectiontopic', 'format_' . $course->format);
        } else {
            $addstring = get_string('addsections');
        }

        $params = ['courseid' => $course->id,                               // CHANGED.
                    'insertparentid' => $format->get_sectionid(),
                    'insertlevel' => FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC,
                    'sesskey' => sesskey(),
                    'returnurl' => new \moodle_url("/course/view.php?id={$course->id}"
                        . (($format->get_sectionid() != $format->fmtrootsectionid) ?
                        "&sectionid={$format->get_sectionid()}" : "")), ];

        // REMOVED section return.

        $data->addsections = (object) [                                     // CHANGED.
            'url' => new \moodle_url('/course/format/multitopic/_course_changenumsections.php', $params),
            'title' => $addstring,
            'newsection' => $maxsections - $lastsection,
            'canaddmore' => $maxsections > $lastsection,
        ];
        return $data;
    }
}
