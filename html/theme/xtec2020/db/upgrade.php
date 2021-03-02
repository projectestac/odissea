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
 * Plugin upgrade steps are defined here.
 *
 * @package     theme_xtec2020
 * @category    upgrade
 * @copyright   2020 Pau Ferrer Ocaña <pau@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Execute theme_xtec2020 upgrade from the given old version.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_theme_xtec2020_upgrade($oldversion) {
    global $DB, $CFG;

    $dbman = $DB->get_manager();

    // For further information please read the Upgrade API documentation:
    // https://docs.moodle.org/dev/Upgrade_API
    //
    // You will also have to create the db/install.xml file by using the XMLDB Editor.
    // Documentation for the XMLDB Editor can be found at:
    // https://docs.moodle.org/dev/XMLDB_editor

    if ($oldversion < 2020110302) {

    	include_once($CFG->dirroot.'/theme/xtec2020/constants.php');
        
        $colorset = get_config('theme_xtec2020', 'colorset'); // Get current colorset
        print_r($colorset);

        if ($colorset != 'personalitzat' && $colorset != 'nodes' && $colorset != 'PEDC') { // Force PEDC color combination
        	set_config('colorset', 'PEDC', 'theme_xtec2020');
        	set_config('maincolor', DEFAULT_MAINCOLOR, 'theme_xtec2020');
        	set_config('fontcolor', DEFAULT_FONTCOLOR, 'theme_xtec2020');
            set_config('linkscolor', DEFAULT_LINKSCOLOR, 'theme_xtec2020');
            set_config('headerbg', DEFAULT_HEADERBG, 'theme_xtec2020');            
        }

        // xtec2020 savepoint reached
        upgrade_plugin_savepoint(true, 2020110302, 'theme', 'xtec2020');
    }

    return true;
}
