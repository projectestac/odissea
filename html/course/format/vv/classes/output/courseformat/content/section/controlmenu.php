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
 * Contains the default section controls output class.
 *
 * @package   format_vv
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_vv\output\courseformat\content\section;

use action_menu;
use action_menu_link_secondary;
use format_topics\output\courseformat\content\section\controlmenu as controlmenu_base;
use moodle_url;
use pix_icon;
use stdClass;

/**
 * Base class to render a course section menu.
 *
 * @package   format_vv
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class controlmenu extends controlmenu_base {

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param renderer_base $output typically, the renderer that's calling this function
     * @return array data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): stdClass {

        $section = $this->section;

        $controls = $this->section_control_items();

        if (empty($controls)) {
            return new stdClass();
        }

        // Convert control array into an action_menu.
        $menu = new action_menu();
        $icon = $output->pix_icon('i/menu', get_string('edit'));
        $menu->set_menu_trigger($icon, 'btn btn-icon d-flex align-items-center justify-content-center');
        $menu->attributes['class'] .= ' section-actions ml-auto';
        foreach ($controls as $value) {
            $url = empty($value['url']) ? '' : $value['url'];
            $icon = empty($value['icon']) ? '' : $value['icon'];
            $name = empty($value['name']) ? '' : $value['name'];
            $attr = empty($value['attr']) ? [] : $value['attr'];
            $class = empty($value['pixattr']['class']) ? '' : $value['pixattr']['class'];
            $al = new action_menu_link_secondary(
                new moodle_url($url),
                new pix_icon($icon, '', null, ['class' => "smallicon " . $class]),
                $name,
                $attr
            );
            $menu->add($al);
        }

        $data = (object)[
            'menu' => $output->render($menu),
            'hasmenu' => true,
            'id' => $section->id,
        ];

        return $data;
    }


    /**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course content is rendered.
     */
    public function get_template_name(\renderer_base $renderer): string {
        return 'format_vv/local/content/section/controlmenu';
    }
}
