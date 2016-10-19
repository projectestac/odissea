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
 * Alexandria importer
 *
 * @package    local
 * @subpackage alexandriaimporter
 * @copyright  2016 Pau Ferrer Ocaña pau@moodle.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Get Alexandria connection data.
 * @return Object with the URL and token where to connect.
 */
function get_alexandria_data() {
    $data = new StdClass();
    $data->url = get_config('local_alexandriaimporter', 'alexandria_url');
    $data->token = get_config('local_alexandriaimporter', 'alexandria_token');
    return $data;
}

/**
 * Is enabled the importer?
 * @return boolean wether is enabled or not.
 */
function alexandria_importer_is_enabled() {
    $hub = get_alexandria_data();
    return !empty($hub->url) && !empty($hub->token);
}

/**
 * Function to add the alexandria importer link to the course navigation.
 */
function local_alexandriaimporter_extend_navigation_course(navigation_node $parentnode,
    stdClass $course, context_course $context) {
    global $CFG;

    // Must hold restoretargetimport in the current course.
    if (alexandria_importer_is_enabled() && has_capability('moodle/restore:restoretargetimport', $context) ) {
        $url = $CFG->wwwroot.'/local/alexandriaimporter/search.php?id='.$course->id;
        $icon = new pix_icon('i/import', "");
        $node = navigation_node::create(get_string('importfromalexandria', 'local_alexandriaimporter'), $url,
            navigation_node::TYPE_SETTING, null, get_string('importfromalexandria', 'local_alexandriaimporter'), $icon);
        $parentnode->add_node($node, 'publish');
    }

}
