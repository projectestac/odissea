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
 * Contains the sectionnavigation class.
 *
 * @package   format_multitopic
 * @copyright 2022 Te Wānanga o Aotearoa
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_multitopic\output\courseformat\content;

use core_courseformat\output\local\content\sectionnavigation as sectionnavigation_base;
use core_courseformat\base as course_format;
use stdClass;


/**
 * Class to render a sectionnavigation inside a Multitopic course format.
 *
 * @package   format_multitopic
 * @copyright 2022 Te Wānanga o Aotearoa
 * @author    Jeremy FitzPatrick
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class sectionnavigation extends sectionnavigation_base {

    /** @var \section_info the course displayed section */
    protected $section;

    /** @var \format_multitopic\section_info_extra Multitopic-specific section information */
    protected $fmtsectionextra;

    /** @var stdClass the calculated data to prevent calculations when rendered several times */
    private $data = null;

    /**
     * Constructor.
     *
     * @param course_format $format the course format
     * @param \section_info $section section info
     */
    public function __construct(course_format $format, $section) {
        parent::__construct($format, $section->section);
        $this->section = $section;
        $this->fmtsectionextra = $format->fmt_get_section_extra($section);
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): stdClass {

        if ($this->data !== null) {
            return $this->data;
        }

        $format = $this->format;
        $course = $format->get_course();

        $sectionsextra = $format->fmt_get_sections_extra();

        $data = (object)[
            'previousurl' => '',
            'nexturl' => '',
            'larrow' => $output->larrow(),
            'rarrow' => $output->rarrow(),
            'currentsection' => $this->sectionno,
        ];

        $back = $this->section;
        $backextra = $this->fmtsectionextra;
        while (isset($backextra->prevpageid)) {
            $backextra = $sectionsextra[$backextra->prevpageid];
            $back = $backextra->sectionbase;
            if ($back->uservisible) {
                $data->previousname = get_section_name($course, $back);
                $data->previousurl = course_get_url($course, $back);
                $data->hasprevious = true;
                break;
            }
        }

        $next = $this->section;
        $nextextra = $this->fmtsectionextra;
        while (isset($nextextra->nextpageid)) {
            $nextextra = $sectionsextra[$nextextra->nextpageid];
            $next = $nextextra->sectionbase;
            if ($next->uservisible) {
                $data->nextname = get_section_name($course, $next);
                $data->nexturl = course_get_url($course, $next);
                $data->hasnext = true;
                break;
            }
        }

        $this->data = $data;
        return $data;
    }
}
