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
 * Specialised restore for Multitopic course format.
 *
 * @package   format_multitopic
 * @category  backup
 * @copyright 2020 James Calder and Otago Polytechnic
 * @copyright based on work by 2017 Marina Glancy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Specialised restore for Multitopic course format.
 *
 * Change periodduration "0 days" to "0 day", and add collapsible.
 *
 * @package   format_multitopic
 * @category  backup
 * @copyright 2020 James Calder and Otago Polytechnic
 * @copyright based on work by 2017 Marina Glancy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class restore_format_multitopic_plugin extends restore_format_plugin {

    /**
     * Creates a dummy path element in order to be able to execute code after restore.
     *
     * @return restore_path_element[]
     */
    public function define_course_plugin_structure() {

        // Dummy path element is needed in order for after_restore_course() to be called.
        return [new restore_path_element('dummy_course', $this->get_pathfor('/dummycourse'))];
    }

    /**
     * Dummy process method.
     *
     * @return void
     */
    public function process_dummy_course() {

    }

    /**
     * Executed after course restore is complete.
     *
     * This method is only executed if course configuration was overridden.
     *
     * @return void
     */
    public function after_restore_course() {
        global $DB;

        $backupinfo = $this->step->get_task()->get_info();
        if ($backupinfo->original_course_format !== 'multitopic') {
            // Backup from another course format.
            return;
        }

        $DB->execute(
            "UPDATE {course_format_options} SET value = '0 day'
             WHERE courseid = ? AND format = 'multitopic' AND name = 'periodduration' AND value = '0 days'",
            [$this->step->get_task()->get_courseid()]
        );
        $DB->execute(
            "INSERT INTO {course_format_options} (courseid, format, sectionid, name, value)
             SELECT courseid AS courseid, format AS format, sectionid AS sectionid, 'collapsible' AS name, '0' AS value
             FROM {course_format_options} cfo_pd
             WHERE courseid = ? AND format = 'multitopic' AND name = 'periodduration' AND value LIKE '0 %' AND NOT EXISTS (
                SELECT id
                FROM {course_format_options} cfo_c
                WHERE courseid = cfo_pd.courseid AND format = cfo_pd.format AND sectionid = cfo_pd.sectionid AND name='collapsible'
             )",
            [$this->step->get_task()->get_courseid()]
        );

    }
}
