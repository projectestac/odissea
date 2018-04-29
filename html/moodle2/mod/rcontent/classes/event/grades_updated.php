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
 * The mod_rcontent grades updated event.
 *
 * @package    mod_rcontent
 * @copyright  2017 Maria Luisa Suarez <msuare44@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace mod_rcontent\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The grades_updated event class.
 *
 * @property-read array $other {
 *      Extra information about event.
 *
 *      - int gradeid: the id of grade.
 *      - int rcontentid: the id of the item.
 *
 * }
 */
class grades_updated extends \core\event\base {

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    /**
     * Returns localised general event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventgrades_updated', 'mod_rcontent');
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' updated the grade with id '{$this->other['gradeid']}' for the user with " .
            "id '$this->relateduserid' for the grade item with id '{$this->other['rcontentid']}'.";
    }

    /**
     * Get URL related to the action
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/rcontent/grade.php', array(
            'id' => $this->contextinstanceid,
            'userid'   => $this->relateduserid,
            'gradeid' => $this->other['gradeid'],
            'itemid' => $this->other['rcontentid']
        ));
    }


    /**
     * Return legacy log info.
     *
     * @return array
     */
    public function get_legacy_logdata() {
        // Override if you are migrating an add_to_log() call.
        return array($this->courseid, 'rcontent', 'update grades',
            'grade.php?id=' . $this->contextinstanceid . '&userid='. $this->relateduserid,
            $this->other['rcontentid'], $this->contextinstanceid);
    }

    /**
     * Custom validation.
     *
     * @throws \coding_exception
     * @return void
     */
    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->other['rcontentid'])) {
            throw new \coding_exception('The \'rcontentid\' value must be set in other.');
        }
    }

}