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
 * Output section for the format_pluginname plugin.
 *
 * @package   format_simple
 * @copyright 2012 onwards UPCnet / IThinkUPC
 * @author    Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es
 * @author    Israel Forés Monzó israel.fores@ithinkupc.com
 * @author    Toni Ginard toni.ginard@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_simple\output\courseformat\content;

use core_courseformat\output\local\content\section as base_section;

class section extends base_section
{
    /**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course section is rendered.
     */
    public function get_template_name(\renderer_base $renderer): string
    {
        return 'format_simple/local/content/section';
    }
}