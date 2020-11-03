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

namespace local_clickedu\event;

defined('MOODLE_INTERNAL') || die();

class users_synced extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->context = \context_system::instance();
    }

    public static function create_from_count($count) {
        return parent::create(array('other' => array('count' => $count)));
    }

    public static function get_name() {
        return get_string('eventuserssynced', 'local_clickedu');
    }

    public function get_description() {
        return "The user with id '{$this->userid}' synced {$this->other['count']} users from Clickedu.";
    }

    public function get_legacy_logdata() {
        $info = $this->other['count'] . ' new users';
        return array(SITEID, 'clickedu', 'sync_users', '', $info);
    }

    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->other['count'])) {
            throw new \coding_exception('The \'count\' value must be set in other.');
        }
    }
}
