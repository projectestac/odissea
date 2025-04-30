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

namespace format_multitopic\output\courseformat\state;

use core_courseformat\output\local\state\section as base_section;

use core_courseformat\base as course_format;
use section_info;
use stdClass;

/**
 * Contains the ajax update section structure.
 *
 * @package   format_multitopic
 * @copyright 2022 James Calder and Otago Polytechnic
 *            based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class section extends base_section {

    /** @var \format_multitopic\section_info_extra Multitopic-specific section information */
    protected $fmtsectionextra;

    /**
     * Constructor.
     *
     * @param course_format $format the course format
     * @param section_info $section the section info
     */
    public function __construct(course_format $format, section_info $section) {
        parent::__construct($format, $section);
        $this->fmtsectionextra = $format->fmt_get_section_extra($section);
    }

    /**
     * Export this data so it can be used as state object in the course editor.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): stdClass {
        $data = parent::export_for_template($output);
        $section = $this->section;
        $sectionextra = $this->fmtsectionextra;
        $data->levelsan = $sectionextra->levelsan;
        $data->indent = max($sectionextra->levelsan, 0);
        $data->pageid = ($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) ? $section->id : $sectionextra->parentid;
        $data->component = $section->component ?? null;
        if ($section->component) {
            return $data;
        }
        $data->timed = $sectionextra->dateend && ($sectionextra->datestart < $sectionextra->dateend);
        $data->parentid = $sectionextra->parentid;
        $data->available = $section->available;
        $data->currentnestedlevel = $sectionextra->currentnestedlevel;
        $controlmenuclass = $this->format->get_output_classname('content\\section\\controlmenu');
        $controlmenu = new $controlmenuclass($this->format, $section);
        $data->controlmenu = $controlmenu->export_for_template($output);
        return $data;
    }

    /**
     * Return if the section can be selected for bulk editing.
     * @return bool if the section can be edited in bulk
     */
    protected function is_bulk_editable(): bool {
        $section = $this->section;
        return ($section->section != 0); // Should be levelsan >= 2, this but doesn't work.
    }

}
