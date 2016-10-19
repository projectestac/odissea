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

class user_authenticated extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->context = \context_system::instance();
    }

    public static function create_from_username($username) {
        return parent::create(array('other' => array('username' => $username)));
    }

    public static function get_name() {
        return get_string('eventuserauthenticated', 'local_clickedu');
    }

    public function get_description() {
        return "The user with id '{$this->userid}' has been authenticated with username '{$this->other['username']}'.";
    }

    public function get_legacy_logdata() {
        return array(SITEID, 'clickedu', 'login', '', $this->other['username']);
    }

    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->other['username'])) {
            throw new \coding_exception('The \'username\' value must be set in other.');
        }
    }
}
