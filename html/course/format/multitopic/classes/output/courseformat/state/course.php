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

use core_courseformat\output\local\state\course as base_course;
use core_courseformat\base as course_format;
use stdClass;

defined('MOODLE_INTERNAL') || die();
require_once(__DIR__ . '/../../../../lib.php');

/**
 * Contains the ajax update course structure.
 *
 * @package    format_multitopic
 * @copyright  2022 Jeremy FitzPatrick and Te Wānanga o Aotearoa
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course extends base_course {

    /** @var course_format the course format class */
    protected $format;

    /**
     * Constructor.
     *
     * @param course_format $format the course format
     */
    public function __construct(course_format $format) {
        $this->format = $format;
    }

    /**
     * Export this data so it can be used as state object in the course editor.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): stdClass {
        global $CFG;
        $data = parent::export_for_template($output);

        $data->tabsdata = [];
        $data->draganddropsectionmoveafter = $CFG->version >= 2023120100;

        $format = $this->format;
        $sectionsextra = $format->fmt_get_sections_extra();

        foreach ($sectionsextra as $sectionextra) {
            $section = $sectionextra->sectionbase;
            if (empty($section->component) && $format->is_section_visible($section)) {
                if ($sectionextra->levelsan <= 0) {
                    // Tabs uses first item as parent, Course index might not.
                    $data->tabsdata[] = (object)['sectionid' => $section->id, 'subtree' => [(object)['sectionid' => $section->id]]];
                } else if ($sectionextra->levelsan == 1) {
                    end($data->tabsdata)->subtree[] = (object)['sectionid' => $section->id];
                }
            }
        }

        return $data;
    }
}
