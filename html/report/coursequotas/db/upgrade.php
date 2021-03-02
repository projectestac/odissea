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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

global $CFG;

include_once($CFG->dirroot . '/report/coursequotas/constants.php');

function xmldb_report_coursequotas_upgrade($oldversion): bool {

    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < REPORT_COURSEQUOTAS_VERSION_CREATETABLE) {

        // Define table coursequotas_coursesize to be created.
        $table = new xmldb_table('coursequotas_coursesize');

        // Adding fields to table coursequotas_coursesize.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '20', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('quota', XMLDB_TYPE_INTEGER, '20', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table coursequotas_coursesize.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);

        // Adding indexes to table coursequotas_coursesize.
        $table->add_index('courseid_idx', XMLDB_INDEX_UNIQUE, ['courseid']);

        // Conditionally launch create table for coursequotas_coursesize.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Define table coursequotas_catsize to be created.
        $table = new xmldb_table('coursequotas_catsize');

        // Adding fields to table coursequotas_catsize.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('categoryid', XMLDB_TYPE_INTEGER, '20', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('quota', XMLDB_TYPE_INTEGER, '20', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table coursequotas_catsize.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);

        // Adding indexes to table coursequotas_catsize.
        $table->add_index('categoryid_idx', XMLDB_INDEX_UNIQUE, ['categoryid']);

        // Conditionally launch create table for coursequotas_catsize.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Coursequotas savepoint reached.
        upgrade_plugin_savepoint(true, REPORT_COURSEQUOTAS_VERSION_CREATETABLE, 'report', 'coursequotas');
    }

    return true;
}
