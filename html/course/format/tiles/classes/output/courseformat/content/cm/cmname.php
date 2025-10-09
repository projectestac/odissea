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
 * @package format_tiles
 * @copyright 2024 David Watson {@link http://evolutioncode.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_tiles\output\courseformat\content\cm;

/**
 * Base class to render a course module inplace editable header.
 *
 * @package format_tiles
 * @copyright 2024 David Watson {@link http://evolutioncode.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class cmname extends \core_courseformat\output\local\content\cm\cmname {

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output typically, the renderer that's calling this function
     * @return \array data context for a mustache template
     */
    public function export_for_template(\renderer_base $output): array {
        global $DB, $CFG;
        $data = parent::export_for_template($output);
        $data['cmtitle'] = $this->mod->get_formatted_name();
        $data['is_label'] = $this->mod->modname === 'label';
        // The icon overrides below will have no effect while editing in Moodle 4.0.2- but will for higher versions.
        // This is because in Moodle 4.0.2- the icon is in the title class not this one.
        if ($this->mod->modname == 'url') {
            $externalurl = $DB->get_field('url', 'externalurl', ['id' => $this->mod->instance]);
            if (\format_tiles\output\course_output::is_video_url($externalurl)) {
                $data['icon'] = $output->image_url('play', 'format_tiles');
            }
        } else if ($this->mod->modname == 'resource') {
            // Use local tiles override icons if present.
            // If we are in Moodle 4.1 we can use the new less DB intensive way to get the mod resource type.
            $moodlerelease = \format_tiles\local\util::get_moodle_release();
            $modresourcetype = $moodlerelease === 4.0
                ? \format_tiles\local\util::get_mod_resource_icon_name_legacy($this->mod->context->id)
                : \format_tiles\local\util::get_mod_resource_type($this->mod->icon);
            $filepath = "$CFG->dirroot/course/format/tiles/pix/resource_subtile/$modresourcetype.svg";
            if ($modresourcetype && file_exists($filepath)) {
                $needslargeicon = in_array($modresourcetype, ['pdf', 'doc', 'ppt', 'xls', 'html']);
                $data['icon'] =
                    $output->image_url("resource_subtile/$modresourcetype", 'format_tiles');
                // Remove nofilter class and add large icon class if needed.
                $data['iconclass'] = $needslargeicon ? 'format-tiles-large-activity-icon' : '';
            }
        } else if ($this->mod->modname == 'bigbluebuttonbn') {
            $data['iconclass'] .= 'nofilter';
        }
        return $data;
    }
}
