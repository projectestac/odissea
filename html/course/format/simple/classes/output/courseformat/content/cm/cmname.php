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
 * Simple Format.
 *
 * @package   format_simple
 * @copyright 2012 onwards UPCnet / IThinkUPC
 * @author    Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es
 * @author    Israel Forés Monzó israel.fores@ithinkupc.com
 * @author    Toni Ginard toni.ginard@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_simple\output\courseformat\content\cm;

use core_courseformat\output\local\content\cm\cmname as cmname_base;
use format_simple\output\renderer;
use renderer_base;

class cmname extends cmname_base
{
    /**
     * Override export for template data.
     *
     * @param renderer_base $output typically, the renderer that's calling this function
     * @return array data context for a mustache template
     */
    public function export_for_template(renderer_base $output): array
    {
        global $PAGE;

        $format = $this->format;
        $course = $format->get_course();
        $userisediting = $PAGE->user_is_editing();
        $mod = $this->mod;

        $data = parent::export_for_template($output);

        if ($mod->modname === 'label') {
            $data['content'] = $mod->content;
            $data['iconclass'] = '';
            return $data;
        }

        if (!$userisediting) {
            global $CFG;
            require_once $CFG->dirroot . '/course/format/simple/lib.php';

            $iconsize = !empty($course->simpleiconsize) ? $course->simpleiconsize : renderer::DEFAULTICONSIZE;
            $newicon = simple_get_icon_url($mod, $mod->id, $iconsize);

            $data['iconsize'] = $iconsize;
            $data['icon'] = $newicon;

            if (is_string($newicon)) {
                $data['customiconurl'] = $newicon;
            }
        }

        $data['iconclass'] = '';

        return $data;
    }

}
