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
 * @version   See the value of '$plugin->version' in version.php.
 * @copyright 2012-onwards UPCnet
 * @author    Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat,
 *            Marc Espinosa Zamora marc.espinosa.zamora@upcnet.es, Israel Forés Monzó israel.fores@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_simple\output;

use core_courseformat\output\section_renderer;
use moodle_page;

/**
 * Basic renderer for simple format.
 *
 * @copyright 2012-onwards UPCnet
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class renderer extends section_renderer {

    public const DEFAULTICONSIZE = 128;

    /**
     * Constructor method, calls the parent constructor.
     *
     * @param moodle_page $page
     * @param string $target one of rendering target constants
     */
    public function __construct(moodle_page $page, $target) {
        parent::__construct($page, $target);

        // Since format_topics_renderer::section_edit_control_items() only displays the 'Highlight' control
        // when editing mode is on we need to be sure that the link 'Turn editing mode on' is available for a user
        // who does not have any other managing capability.
        $page->set_other_editing_capability('moodle/course:setcurrentsection');
    }

    /**
     * Generate the section title, wraps it in a link to the section page if page is to be displayed on a separate page.
     *
     * @param section_info|\stdClass $section The course_section entry from DB
     * @param \stdClass $course The course entry from DB
     * @return string HTML to output.
     */
    public function section_title($section, $course): string {
        return $this->render(course_get_format($course)->inplace_editable_render_section_name($section));
    }

    /**
     * Generate the section title to be displayed on the section page, without a link.
     *
     * @param section_info|\stdClass $section The course_section entry from DB
     * @param int|\stdClass $course The course entry from DB
     * @return string HTML to output.
     */
    public function section_title_without_link($section, $course): string {
        return $this->render(course_get_format($course)->inplace_editable_render_section_name($section, false));
    }

}