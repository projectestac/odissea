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

namespace format_tiles\hooks\output;

/**
 * Allows plugins to add any elements to the page <head> html tag
 *
 * @package   format_tiles
 * @copyright 2024 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class standard_head_html_prepend {

    /**
     * Callback to add head elements.  Used to add dynamic CSS used by Tiles format.
     *
     * @param \core\hook\output\before_standard_head_html_generation $hook
     */
    public static function callback(\core\hook\output\before_standard_head_html_generation $hook): void {
        global $PAGE;
        if (($PAGE->course->format ?? null) !== 'tiles') {
            // This is called on every page so check that we are in a tiles course first.
            return;
        }
        $debug = "Could not prepare format_tiles head data";
        try {
            if (method_exists('format_tiles\local\dynamic_styles', 'get_tiles_dynamic_css')) {
                // The method get_tiles_dynamic_css() will check that we are on a page that really needs it.
                $dynamiccss = \format_tiles\local\dynamic_styles::get_tiles_dynamic_css();
                if ($dynamiccss) {
                    $hook->add_html("<style id=\"format-tiles-dynamic-css\">$dynamiccss</style>");
                }
            } else {
                debugging("$debug: class not found", DEBUG_DEVELOPER);
            }
        } catch (\Exception $e) {
            debugging("Could not prepare format_tiles head data: " . $e->getMessage(), DEBUG_DEVELOPER);
        }
    }
}
