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

namespace block_courses_vicensvives\event;

class webservice_called extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    public static function get_name() {
        return get_string('eventwebservicecalled', 'block_courses_vicensvives');
    }

    public function get_description() {
        return 'Se ha llamado el webservice: ' . $this->get_info();
    }

    private function get_info() {
        $method = strtoupper($this->other['method']);
        $path = $this->other['path'];
        $status = $this->other['status'];
        $info = "$method $path => $status";
        if (!empty($this->other['message'])) {
            $info .= ' ' . $this->other['message'];
        }
        return $info;
    }
}
