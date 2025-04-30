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
 * Contains the default activity list from a section.
 *
 * @package   core_courseformat
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_vv\output\courseformat\content\section;

use core_courseformat\output\local\content\section\cmlist as cmlist_base;
use core_courseformat\base as course_format;
use moodle_url;
use section_info;
use stdClass;

/**
 * Base class to render a section activity list.
 *
 * @package   core_courseformat
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class cmlist extends cmlist_base {

    /** @var string the item output class name */
    protected $subsectionclass;

    /**
     * Constructor.
     *
     * @param course_format $format the course format
     * @param section_info $section the section info
     * @param array $displayoptions optional extra display options
     */
    public function __construct(course_format $format, section_info $section, array $displayoptions = []) {
        parent::__construct($format, $section, $displayoptions);
        $this->subsectionclass = 'format_vv\\output\\courseformat\\content\\section\\subsectioncmitem';
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param renderer_base $output typically, the renderer that's calling this function
     * @return array data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): stdClass {
        global $USER;

        $format = $this->format;
        $section = $this->section;
        $course = $format->get_course();
        $modinfo = $format->get_modinfo();
        $user = $USER;

        $data = new stdClass();
        $data->subsections = [];
        $data->cms = [];

        // By default, non-ajax controls are disabled but in some places like the frontpage
        // it is necessary to display them. This is a temporal solution while JS is still
        // optional for course editing.
        $showmovehere = ismoving($course->id);

        if ($showmovehere) {
            $data->hascms = true;
            $data->showmovehere = true;
            $data->strmovefull = strip_tags(get_string("movefull", "", "'$user->activitycopyname'"));
            $data->movetosectionurl = new moodle_url('/course/mod.php', ['movetosection' => $section->id, 'sesskey' => sesskey()]);
            $data->movingstr = strip_tags(get_string('activityclipboard', '', $user->activitycopyname));
            $data->cancelcopyurl = new moodle_url('/course/mod.php', ['cancelcopy' => 'true', 'sesskey' => sesskey()]);
        }

        if (empty($modinfo->sections[$section->section])) {
            return $data;
        }

        $currentsubsection = null;
        $subsectionindex = 0;
        foreach ($modinfo->sections[$section->section] as $modnumber) {
            $mod = $modinfo->cms[$modnumber];
            // If the old non-ajax move is necessary, we do not print the selected cm.
            if ($showmovehere && $USER->activitycopy == $mod->id) {
                continue;
            }
            if ($mod->is_visible_on_course_page()) {
                $itemdata = new \stdClass;

                // Labels represent subsections.
                if ($mod->modname === 'label') {
                    $item = new $this->subsectionclass($format, $section, $mod, $this->displayoptions);
                    $itemdata->cmitem = $item->export_for_template($output);
                    $itemdata->moveurl = new moodle_url('/course/mod.php', ['moveto' => $modnumber, 'sesskey' => sesskey()]);
                    $itemdata->subsectionnum = $section->section . '_' . $subsectionindex++;

                    $itemdata->cms = [];
                    $itemdata->hascms = false;

                    $data->subsections[] = $itemdata;
                    $currentsubsection = $itemdata;
                } else {
                    $item = new $this->itemclass($format, $section, $mod, $this->displayoptions);
                    $itemdata->cmitem = $item->export_for_template($output);
                    $itemdata->moveurl = new moodle_url('/course/mod.php', ['moveto' => $modnumber, 'sesskey' => sesskey()]);

                    if (is_null($currentsubsection)) {
                        $data->cms[] = $itemdata;
                    } else {
                        $currentsubsection->cms[] = $itemdata;
                        $currentsubsection->hascms = true;
                    }
                }

            }
        }

        if (!empty($data->cms) || !empty($data->subsections)) {
            $data->hascms = true;
        }

        return $data;
    }

    /**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course content is rendered.
     */
    public function get_template_name(\renderer_base $renderer): string {
        return 'format_vv/local/content/section/cmlist';
    }
}
