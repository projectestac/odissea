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
 * Exports Bigdata profiles
 *
 * @package    local_bigdata
 * @copyright  2016 Pau Ferrer <pferre22@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_bigdata\task;

/**
 * Exports Bigdata profiles
 */
class export extends \core\task\scheduled_task {

    /**
     * Get a descriptive name for this task.
     *
     * @return string
     */
    public function get_name() {
        return get_string('pluginname', 'local_bigdata');
    }

    /**
     * Performs the task
     */
    public function execute() {
        global $CFG, $DB;

        require_once($CFG->dirroot . '/local/bigdata/lib.php');
        require_once($CFG->dirroot . '/local/bigdata/locallib.php');

        $now = time();

        $profiles = $DB->get_records('bigdata_profiles');
        foreach ($profiles as $profile) {

            $nextcron = get_profile_next_cron($profile);
            if (empty($nextcron)) {
                continue;
            }
            if ($nextcron <= time()) {
                mtrace("Profile: $profile->name", "\n");
                if (bigdata_export($profile->name)) {
                    $DB->set_field('bigdata_profiles', 'lastcron', $now, array('id' => $profile->id));
                }
            }
        }
    }
}
