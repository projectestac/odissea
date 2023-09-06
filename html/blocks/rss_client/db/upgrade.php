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
 * Database upgrades for the RSS block.
 *
 * @package   block_rss_client
 * @copyright 2014 Davo Smith
 * @author    Neill Magill <neill.magill@nottingham.ac.uk>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL
 */
defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade the block_rss_client database.
 *
 * @param int $oldversion The version number of the plugin that was installed.
 * @return boolean
 */
function xmldb_block_rss_client_upgrade($oldversion) {
    global $CFG, $DB;

    // Automatically generated Moodle v3.9.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2021121600) {
        // From Moodle 4.0, this block has been disabled by default in new installations.
        // If the site has no instances of this block, it will disabled during the upgrading process too.
        $totalcount = $DB->count_records('block_instances', ['blockname' => 'rss_client']);
        if ($totalcount == 0) {
            $DB->set_field('block', 'visible', 0, ['name' => 'rss_client']);
        }

        upgrade_block_savepoint(true, 2021121600, 'rss_client', false);
    }

    // Automatically generated Moodle v4.0.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v4.1.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
