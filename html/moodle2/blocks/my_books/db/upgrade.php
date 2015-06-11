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

/* This file keeps track of upgrades to
 * the scorm module
 *
 * Sometimes, changes between versions involve
 * alterations to database structures and other
 * major things that may break installations.
 *
 * The upgrade function in this file will attempt
 * to perform all the necessary actions to upgrade
 * your older installtion to the current version.
 *
 * If there's something it cannot do itself, it
 * will tell you what you need to do.
 *
 * The commands in here will all be database-neutral,
 * using the functions defined in lib/ddllib.php
 */

function xmldb_block_my_books_upgrade($oldversion=0) {

    global $CFG, $DB;

    if ($oldversion < 2014111100) {
        set_config('viewer_opening', $CFG->mybooks_viewer_opening, 'mybooks');
        unset_config('mybooks_viewer_opening');

        set_config('width', $CFG->mybooks_width, 'mybooks');
        unset_config('mybooks_width');

        set_config('height', $CFG->mybooks_height, 'mybooks');
        unset_config('mybooks_height');

        set_config('activity_opening', $CFG->mybooks_activity_opening, 'mybooks');
        unset_config('mybooks_activity_opening');

        set_config('scrollbars', $CFG->mybooks_scrollbars, 'mybooks');
        unset_config('mybooks_scrollbars');

        set_config('menubar', $CFG->mybooks_menubar, 'mybooks');
        unset_config('mybooks_menubar');

        set_config('toolbar', $CFG->mybooks_toolbar, 'mybooks');
        unset_config('mybooks_toolbar');

        set_config('status', $CFG->mybooks_status, 'mybooks');
        unset_config('mybooks_status');

        set_config('addkey', $CFG->mybooks_addkey, 'mybooks');
        unset_config('mybooks_addkey');

        unset_config('mybooks_directories');
        unset_config('mybooks_resizable');
        unset_config('mybooks_location');

        upgrade_block_savepoint(true, 2014111100, 'my_books');
    }

    if ($oldversion < 2015051900) {
        unset_config('resizable', 'mybooks');
        unset_config('directories', 'mybooks');
        unset_config('location', 'mybooks');

        $DB->set_field('rcontent', 'frame', 0, array('course' => SITEID));

        upgrade_block_savepoint(true, 2015051900, 'my_books');
    }

    return true;
}