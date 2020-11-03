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

class contents_synced extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_TEACHING;
    }

    public static function create_from_course($courseid) {
        return parent::create(array('context' => \context_course::instance($courseid)));
    }

    public static function get_name() {
        return get_string('eventcontentssynced', 'local_clickedu');
    }

    public function get_description() {
        return "The user with id '{$this->userid}' synced the contents of the course with id '{$this->courseid}'.";
    }

    public function get_legacy_logdata() {
        return array($this->courseid, 'clickedu', 'sync_contents');
    }
}
