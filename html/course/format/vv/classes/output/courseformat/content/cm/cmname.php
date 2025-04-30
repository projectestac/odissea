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
 * Contains the default activity name inplace editable.
 *
 * @package   core_courseformat
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_vv\output\courseformat\content\cm;

use core_courseformat\output\local\content\cm\cmname as cmname_base;

/**
 * Class to render a course module inplace editable header.
 *
 * @package   core_courseformat
 * @copyright 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class cmname extends cmname_base {

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return stdClass data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): array {
        $mod = $this->mod;
        $displayoptions = $this->displayoptions;

        if (!$this->has_name()) {
            // Nothing to be displayed to the user.
            return [];
        }

        // Get personalized icons.
        $icontype = '';
        if (preg_match('/unit|section/', $mod->idnumber)) {
            $icontype = 'icon-book';
        } else if (preg_match('/document/', $mod->idnumber)) {
            $icontype = 'icon-document';
        } else if (preg_match('/question/', $mod->idnumber)) {
            $icontype = 'icon-activity';
        } else if (preg_match('/link/', $mod->idnumber)) {
            $icontype = 'icon-link';
        } else if (preg_match('/video/', $mod->idnumber)) {
            $icontype = 'icon-video';
        } else if (preg_match('/mauthorgym/', $mod->idnumber)) {
            $icontype = 'icon-mauthorgym';
        } else if (preg_match('/mauthorcloudlibrary/', $mod->idnumber)) {
            $icontype = 'icon-mauthorcloudlibrary';
        } else if (preg_match('/mauthor/', $mod->idnumber)) {
            $icontype = 'icon-mauthor';
        }

        $hascustomicon = ! empty($icontype);
        $iconurl = $mod->get_icon_url();
        $iconclass = $iconurl->get_param('filtericon') ? '' : 'nofilter';

        $data = [
            'url' => $mod->url,
            'hascustomicon' => $hascustomicon,
            'icontype' => $icontype,
            'icon' => $iconurl,
            'iconclass' => $iconclass,
            'modname' => $mod->modname,
            'textclasses' => $displayoptions['textclasses'] ?? '',
            'pluginname' => get_string('pluginname', 'mod_' . $mod->modname),
            'showpluginname' => $this->format->show_editor(),
            'purpose' => plugin_supports('mod', $mod->modname, FEATURE_MOD_PURPOSE, MOD_PURPOSE_OTHER),
            'activityname' => $this->get_title_data($output),
        ];

        return $data;
    }

    /**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course content is rendered.
     */
    public function get_template_name(\renderer_base $renderer): string {
        return 'format_vv/local/content/cm/cmname';
    }
}
