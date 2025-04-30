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

use core_courseformat\output\local\content\section as section_base;
use core_courseformat\base as course_format;

/**
 * Base class to render a course section.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class section extends section_base {

    // ADDED.
    /** @var \format_multitopic\section_info_extra the section info */
    protected $fmtsectionextra;

    /**
     * Constructor.
     *
     * @param course_format $format the course format
     * @param \section_info $section the section info
     */
    public function __construct(course_format $format, \section_info $section) {
        parent::__construct($format, $section);
        $this->fmtsectionextra = $format->fmt_get_section_extra($section);
        $this->isstealth = false;
    }
    // END ADDED.

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return \stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): \stdClass {
        $data = parent::export_for_template($output);

        $sectionextra = $this->fmtsectionextra;
        unset($data->displayonesection);
        $data->levelsan = $sectionextra->levelsan;

        return $data;
    }

    /**
     * Add the section header to the data structure.
     *
     * @param \stdClass $data the current cm data reference
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return bool if the cm has name data
     */
    protected function add_header_data(\stdClass &$data, \renderer_base $output): bool {
        $result = parent::add_header_data($data, $output);
        if (!$result || !empty($section->component)) {
            return $result;
        }

        if (isset($data->singleheader) && !isset($data->header)) {
            $data->header = $data->singleheader;
            unset($data->singleheader);
        }
        return true;
    }

    /**
     * Add the section cm list to the data structure.
     *
     * @param \stdClass $data the current cm data reference
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return bool if the cm has name data
     */
    protected function add_cm_data(\stdClass &$data, \renderer_base $output): bool {
        $result = false;

        $section = $this->section;

        if (!empty($section->component)) {
            return parent::add_cm_data($data, $output);
        }

        $sectionextra = $this->fmtsectionextra;
        $format = $this->format;

        // REMOVED index code.

        // ADDED.
        $pageid = ($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) ?
                    $section->id : $sectionextra->parentid;
        $onpage = ($pageid == $format->get_sectionid());
        // END ADDED.
        $showcmlist = ($section->uservisible || $section->section == 0);        // CHANGED.

        // REMOVED index code.
        // Add the cm list.
        if ($showcmlist) {
            if ($onpage || $format->get_sectionid() == null) {
                $cmlist = new $this->cmlistclass($format, $section);
                $data->cmlist = $cmlist->export_for_template($output);
            } else {
                $cmlisteft = new \stdClass();
                $cmlisteft->cms = [];
                $data->cmlist = $cmlisteft;
            }
            $result = true;
        }

        return $result;
    }

    /**
     * Add the section editor attributes to the data structure.
     *
     * @param \stdClass $data the current cm data reference
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return bool if the cm has name data
     */
    protected function add_editor_data(\stdClass &$data, \renderer_base $output): bool {
        $result = parent::add_editor_data($data, $output);

        if (!empty($this->section->component) || !$result) {
            return $result;
        }

        if (empty($data->controlmenu) && empty($this->hidecontrols)) {
            $controlmenu = new $this->controlmenuclass($this->format, $this->section);
            $data->controlmenu = $controlmenu->export_for_template($output);
        }
        return true;
    }

    /**
     * Add the section format attributes to the data structure.
     *
     * @param \stdClass $data the current cm data reference
     * @param bool[] $haspartials the result of loading partial data elements
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return bool if the cm has name data
     */
    protected function add_format_data(\stdClass &$data, array $haspartials, \renderer_base $output): bool {
        $section = $this->section;

        $result = parent::add_format_data($data, $haspartials, $output);
        if (!empty($section->component)) {
            return $result;
        }

        $sectionextra = $this->fmtsectionextra;
        $format = $this->format;

        if ($section->id == $format->get_sectionid()) {
            $data->collapsemenu = true;
        } else {
            unset($data->collapsemenu);
        }

        // ADDED.
        $course = $this->format->get_course();
        $pageid = ($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) ?
                    $section->id : $sectionextra->parentid;
        $onpage = ($pageid == $format->get_sectionid());
        $sectionstyle = " sectionid-{$section->id}";
        $iscollapsible = false;
        // Determine the section type.
        if ($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) {
            $sectionstyle .= ' section-page';
        } else {
            $sectionstyle .= ' section-topic';
            if (format_multitopic_duration_as_days($section->periodduration) === 0) {
                $sectionstyle .= ' section-topic-untimed';
            } else {
                $sectionstyle .= ' section-topic-timed';
            }
            if ((($section->collapsible != '') ? $section->collapsible : $course->collapsible) != '0') {
                $sectionstyle .= ' section-topic-collapsible section-collapsed';
                $iscollapsible = true;
            } else {
                $sectionstyle .= ' section-topic-noncollapsible';
            }
        }
        $data->fmtclasses = $sectionstyle;
        $data->iscollapsible = $iscollapsible;
        $data->fmtonpage = $onpage;
        // END ADDED.

        return true;
    }

}
