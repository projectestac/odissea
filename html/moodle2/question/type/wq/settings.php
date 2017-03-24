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

// Checking that WIRIS plugin is installed.
$filterexists = file_exists($CFG->dirroot . '/filter/wiris/filter.php');

$output = '';
if (!$filterexists) {
    $title = '<br /><br /><br /><span style="color:#aa0000; font-size:18px;">Attention! WIRIS filter is not installed</span>';
    $info = '<a target="_blank" href="http://www.wiris.com/plugins/docs/moodle">';
    $info .= '<img style="vertical-align:-3px;"';
    $info .= ' alt="" src="https://www.wiris.com/system/files/attachments/1689/WIRIS_manual_icon_17_17.png" /></a>';
    $text = '<br />WIRIS quizzes for Moodle 2.x needs that WIRIS plugin for Moodle 2.x is installed on your Moodle. ';
    $output = $title . $text . $info;
}

// Checkbox to enable/disable all the WIRIS quizzes question types.
$qtypes = array('essay', 'match', 'multianswer', 'multichoice', 'shortanswer', 'truefalse');
$quizzesdisabled = get_config('question', 'wq_disabled');

if ($quizzesdisabled == '1') {
    foreach ($qtypes as $key => $value) {
        if (get_config('question', $value . 'wiris_disabled') != 1) {
            set_config($value . 'wiris_disabled', 1, 'question');
            set_config('wq_disabled', 1, 'question');
        }
    }
} else {
    foreach ($qtypes as $key => $value) {
        if (get_config('question', $value . 'wiris_disabled') == 1) {
            set_config($value . 'wiris_disabled', 0, 'question');
            set_config('wq_disabled', 0, 'question');
        }
    }
}

$settings->add(new admin_setting_configcheckbox('question/wq_disabled', 'WIRIS quizzes', $output, '0', '0', '1'));

if ($filterexists) {
    if ($CFG->version >= 2012120300 && $CFG->version < 2013051400) {
        $settingslink = 'filtersettingfilterwiris';
    } else {
        $settingslink = 'filtersettingwiris';
    }
    $url = $CFG->wwwroot . '/admin/settings.php?section=' . $settingslink;
    $url = '<a href="' . $url . '">WIRIS filter settings</a>';
    $settings->add(new admin_setting_heading('filter_wirisfilterheading', $url, ''));
}
