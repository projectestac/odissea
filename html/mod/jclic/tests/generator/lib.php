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

defined('MOODLE_INTERNAL') || die();

/**
 * jclic module data generator class
 *
 * @package mod_jclic
 * @category test
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @copyright 2014 Pau Ferrer
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_jclic_generator extends testing_module_generator {

    public function create_instance($record = null, array $options = null) {
        global $CFG;
        $record = (object)(array)$record;

        $defaultsettings = array(
            'url'               => '',
            'skin'              => '@default.xml',
            'maxattempts'       => -1,
            'width'             => 800,
            'height'            => 600,
            'avaluation'        => 'score',
            'maxgrade'          => 0,
            'grade'             => 100,
            'lang'              => $CFG->lang,
            'exiturl'           => "",
            'timeavailable'     => time(),
            'timedue'           => 0,
        );

        foreach ($defaultsettings as $name => $value) {
            if (!isset($record->{$name})) {
                $record->{$name} = $value;
            }
        }

        return parent::create_instance($record, (array)$options);
    }

    public function grade_jclic($jclic, $userid, $record) {
        global $CFG, $DB;
        $record = (object)(array)$record;

        $defaultsettings = array(
            'userid'            => $userid,
            'attempts'          => 1,
            'totaltime'         => "1' 13''",
            'starttime'         => time(),
            'done'              => true,
            'rawgrade'          => 0
        );

        foreach ($defaultsettings as $name => $value) {
            if (!isset($record->{$name})) {
                $record->{$name} = $value;
            }
        }

        $grades = array($userid => $record);

        $cm = get_coursemodule_from_instance('jclic', $jclic->id);
        $jclic->cmidnumber = $cm->idnumber;
        return jclic_grade_item_update($jclic, $grades);
    }
}
