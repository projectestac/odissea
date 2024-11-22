<?php
// This file is part of Moodle - https://moodle.org/
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
 * Adds admin settings for the plugin.
 *
 * @package     format_multitopic
 * @category    admin
 * @copyright   2021 James Calder and Otago Polytechnic
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configselect(
        'format_multitopic/startwday',
        new lang_string('configstartwday', 'admin'),
        new lang_string('helpstartofweek', 'admin'),
        1,
        [
            0 => new lang_string('sunday',  'calendar'),
            1 => new lang_string('monday',  'calendar'),
            5 => new lang_string('friday',  'calendar'),
            6 => new lang_string('saturday', 'calendar'),
        ]
    ));

    $settings->add(new admin_setting_configselect(
        'format_multitopic/weeks_mindays',
        new lang_string('weeks_mindays',    'format_multitopic'),
        new lang_string('weeks_mindays_desc', 'format_multitopic'),
        4,
        [ 1 => 1, 4 => 4 ]
    ));

    $settings->add(new admin_setting_configcheckbox(
        'format_multitopic/weeks_partial',
        new lang_string('weeks_partial',    'format_multitopic'),
        new lang_string('weeks_partial_desc', 'format_multitopic'),
        0
    ));

    if ($CFG->version >= 2022041907.09 && $CFG->version < 2022042000
     || $CFG->version >= 2022112802.09 && $CFG->version < 2022112900
     || $CFG->version >= 2023031400) {
        if ($CFG->version < 2022112900 || $CFG->version >= 2023032200) {
            $url = new moodle_url('/admin/course/resetindentation.php', ['format' => 'multitopic']);
            $link = '<br />' . html_writer::link($url, get_string('resetindentation', 'admin'));
        } else {
            $link = '';
        }
        $settings->add(new admin_setting_configcheckbox(
            'format_multitopic/indentation',
            new lang_string('indentation', 'format_topics'),
            new lang_string('indentation_help', 'format_topics') . $link,
            1
        ));
    }

}
