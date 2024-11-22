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
 * Contains the default section header format output class.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_multitopic\output\courseformat\content\section;

use core_courseformat\output\local\content\section\header as header_base;

/**
 * Base class to render a section header.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class header extends header_base {

    /** @var \format_multitopic\section_info_extra Multitopic-specific section information */
    protected $fmtsectionextra;

    /**
     * Constructor.
     *
     * @param \format_multitopic $format the course format
     * @param \section_info $section the section info
     */
    public function __construct(\format_multitopic $format, \section_info $section) {
        parent::__construct($format, $section);
        $this->fmtsectionextra = $format->fmt_get_section_extra($section);
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return \stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): \stdClass {
        global $CFG;

        $format = $this->format;
        $section = $this->section;
        $sectionextra = $this->fmtsectionextra;
        $course = $format->get_course();

        $data = (object)[
            'num' => $section->section,
            'id' => $section->id,
        ];

        $data->title = $output->section_title_without_link($section, $course);

        if ($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) {  // CHANGED link condition.
            $data->title = $output->section_title($section, $course);
        }

        // REMOVED stealth sections.

        // ADDED.
        $data->fmticon = $sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC ?
                            'icon fa fa-folder-o fa-fw' : 'icon fa fa-list fa-fw';
        // END ADDED.

        if (!$section->visible) {
            $data->ishidden = true;
        }

        if ($course->id == SITEID) {
            $data->sitehome = true;
        }

        $data->editing = $format->show_editor();

        // REMOVED index page.

        $data->name = get_section_name($course, $section);

        $data->sectionbulk = ($CFG->version >= 2023021000);

        return $data;
    }
}
