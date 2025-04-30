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
 * Contains the default activity control menu.
 *
 * @package   format_vv
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_vv\output\courseformat\content\cm;

use action_menu;
use action_menu_link;
use core_courseformat\output\local\content\cm\controlmenu as controlmenu_base;

/**
 * Class to render a course module menu inside a course format.
 *
 * @package   format_vvv
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class controlmenu extends controlmenu_base {

    /**
     * Generate the aciton menu element.
     *
     * This method is public in case some block needs to modify the menu before output it.
     * @param \core_renderer $output typically, the renderer that's calling this function
     * @return action_menu the activity action menu
     */
    public function get_action_menu(\renderer_base $output): ?action_menu {

        if (!empty($this->menu)) {
            return $this->menu;
        }

        $mod = $this->mod;

        $controls = $this->cm_control_items();

        if (empty($controls)) {
            return null;
        }

        // Filter control array.
        $regex = '/^\d+_(label|section|document|question|link|video|mauthorgym|mauthorcloudlibrary|mauthor)_\d+/';
        if (preg_match($regex, $mod->idnumber)) {
            unset(
                $controls['move'],
                $controls['moveright'],
                $controls['moveleft'],
                $controls['duplicate'],
                $controls['assign']
            );
        }

        // Convert control array into an action_menu.
        $menu = new action_menu();
        $icon = $output->pix_icon('i/menu', get_string('edit'));
        $menu->set_menu_trigger($icon, 'btn btn-icon d-flex align-items-center justify-content-center');

        $menu->attributes['class'] .= ' section-cm-edit-actions commands';

        // Prioritise the menu ahead of all other actions.
        $menu->prioritise = true;

        $ownerselector = $displayoptions['ownerselector'] ?? '#module-' . $mod->id;
        $menu->set_owner_selector($ownerselector);

        $constraint = $displayoptions['constraintselector'] ?? '.course-content';
        $menu->set_constraint($constraint);

        foreach ($controls as $control) {
            if ($control instanceof action_menu_link) {
                $control->add_class('cm-edit-action');
            }
            $menu->add($control);
        }

        $this->menu = $menu;

        return $menu;
    }

    /**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course content is rendered.
     */
    public function get_template_name(\renderer_base $renderer): string {
        return 'format_vv/local/content/cm/controlmenu';
    }
}
