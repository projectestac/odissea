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
 * Upgrade script for the scorm module.
 *
 * @package    mod_scorm
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * @global moodle_database $DB
 * @param int $oldversion
 * @return bool
 */
function xmldb_scorm_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    // Automatically generated Moodle v3.3.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.4.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2018032300) {
        set_config('scormstandard', get_config('scorm', 'scorm12standard'), 'scorm');
        unset_config('scorm12standard', 'scorm');

        upgrade_mod_savepoint(true, 2018032300, 'scorm');
    }

    if ($oldversion < 2018041100) {

        // Changing precision of field completionscorerequired on table scorm to (10).
        $table = new xmldb_table('scorm');
        $field = new xmldb_field('completionscorerequired', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'completionstatusrequired');

        // Launch change of precision for field completionscorerequired.
        $dbman->change_field_precision($table, $field);

        // Scorm savepoint reached.
        upgrade_mod_savepoint(true, 2018041100, 'scorm');
    }

    // Automatically generated Moodle v3.5.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.6.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2018123100) {

        // Remove un-used/large index on element field.
        $table = new xmldb_table('scorm_scoes_track');
        $index = new xmldb_index('element', XMLDB_INDEX_UNIQUE, ['element']);
        if ($dbman->index_exists($table, $index)) {
            $dbman->drop_index($table, $index);
        }

        // Scorm savepoint reached.
        upgrade_mod_savepoint(true, 2018123100, 'scorm');
    }

    // Automatically generated Moodle v3.7.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.8.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
