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
 * Contains the default content output class.
 *
 * @package   format_simple
 * @copyright 2012 onwards UPCnet / IThinkUPC
 * @author    Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es
 * @author    Israel Forés Monzó israel.fores@ithinkupc.com
 * @author    Toni Ginard toni.ginard@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_simple\output\courseformat;

use core_courseformat\output\local\content as content_base;
use renderer_base;
use stdClass;

/**
 * Base class to render a course content.
 */
class content extends content_base {

    /**
     * @var bool Topic format has also added section after each topic.
     */
    protected $hasaddsection = true;

    /**
     * Export this data so it can be used as the context for a mustache template (core/inplace_editable).
     *
     * @param renderer_base $output typically, the renderer that's calling this function
     * @return stdClass data context for a mustache template
     */
    public function export_for_template(renderer_base $output): stdClass
    {
        global $PAGE;

        $data = parent::export_for_template($output);

        if ($PAGE->user_is_editing()) {
            $data->format = 'topics';
        }

        return $data;
    }

    /**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course content is rendered.
     */
    public function get_template_name(\renderer_base $renderer): string {
        global $PAGE;

        if ($PAGE->user_is_editing()) {
            return 'core_courseformat/local/content';
        }

        return 'format_simple/local/content';
    }

}
