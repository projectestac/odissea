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

class invalidresponse_received extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->context = \context_system::instance();
    }

    public static function create_from_response($path, $response) {
        return parent::create(array('other' => array('path' => $path, 'response' => $response)));
    }

    public static function get_name() {
        return get_string('eventinvalidresponsereceived', 'local_clickedu');
    }

    public function get_description() {
        return "The user with id '{$this->userid}' receveid an invalid response from '{$this->other['path']}':"
            . " '{$this->other['response']}'.";
    }

    public function get_legacy_logdata() {
        $info = $this->other['path'] . ' => ' . $this->other['response'];
        return array(SITEID, 'clickedu', 'error', '', $info);
    }

    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->other['path'])) {
            throw new \coding_exception('The \'path\' value must be set in other.');
        }
        if (!isset($this->other['response'])) {
            throw new \coding_exception('The \'response\' value must be set in other.');
        }
    }
}
