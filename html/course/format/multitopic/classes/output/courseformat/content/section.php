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
        global $PAGE;

        $format = $this->format;
        $course = $format->get_course();
        $section = $this->section;
        $sectionextra = $this->fmtsectionextra;

        $summary = new $this->summaryclass($format, $section);

        $data = (object)[
            'num' => $section->section ?? '0',
            'id' => $section->id,
            'sectionreturnid' => $section->section,                             // CHANGED.
            'insertafter' => false,
            'summary' => $summary->export_for_template($output),
            'highlightedlabel' => $format->get_section_highlighted_name(),
            'sitehome' => $course->id == SITEID,
            'editing' => $PAGE->user_is_editing(),
            'levelsan' => $sectionextra->levelsan,
        ];

        $haspartials = [];
        $haspartials['availability'] = $this->add_availability_data($data, $output);
        $haspartials['visibility'] = $this->add_visibility_data($data, $output);
        $haspartials['editor'] = $this->add_editor_data($data, $output);
        $haspartials['header'] = $this->add_header_data($data, $output);
        $haspartials['cm'] = $this->add_cm_data($data, $output);
        $this->add_format_data($data, $haspartials, $output);

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
        if (!empty($this->hidetitle)) {
            return false;
        }

        $section = $this->section;
        $format = $this->format;

        $header = new $this->headerclass($format, $section);
        $headerdata = $header->export_for_template($output);

        // REMOVED singlesection code.
        $data->header = $headerdata;
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
        $sectionextra = $this->fmtsectionextra;
        $format = $this->format;

        // REMOVED index code.

        // ADDED.
        $pageid = ($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) ?
                    $section->id : $sectionextra->parentid;
        $onpage = ($pageid == $format->get_sectionid()) || ($format->get_sectionid() === null);
        // END ADDED.
        $showcmlist = ($section->uservisible || $section->section == 0);        // CHANGED.

        // REMOVED index code.
        // Add the cm list.
        if ($showcmlist) {
            if ($onpage) {
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
        if (!$this->format->show_editor()) {
            return false;
        }

        $course = $this->format->get_course();
        if (empty($this->hidecontrols)) {
            $controlmenu = new $this->controlmenuclass($this->format, $this->section);
            $data->controlmenu = $controlmenu->export_for_template($output);
        }
        // REMOVED stealth section code.
        $data->cmcontrols = $output->course_section_add_cm_control(
            $course,
            $this->section->section
        ); // REMOVED section return.
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
        $sectionextra = $this->fmtsectionextra;
        $format = $this->format;

        // REMOVED coursedisplay setting.

        if ($sectionextra->levelsan < 2 && ($section->id == $format->get_sectionid() || $format->get_sectionid() === null)) {
            $data->collapsemenu = true;
        }

        $data->contentcollapsed = false;
        $preferences = $format->get_sections_preferences();
        if (isset($preferences[$section->id])) {
            $sectionpreferences = $preferences[$section->id];
            if (!empty($sectionpreferences->contentcollapsed)) {
                $data->contentcollapsed = true;
            }
        }

        if ($format->is_section_current($section)) {
            $data->iscurrent = true;
            $data->currentlink = get_accesshide(
                get_string('currentsection', 'format_'.$format->get_format())
            );
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
