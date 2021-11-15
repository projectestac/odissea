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

defined('MOODLE_INTERNAL') || die;

require_once($CFG->dirroot.'/blocks/courses_vicensvives/lib/vicensvives.php');

global $DB;
if ($ADMIN->fulltree) {

    require_once($CFG->dirroot.'/blocks/courses_vicensvives/settingslib.php');
    require_once($CFG->dirroot.'/blocks/courses_vicensvives/lib/vicensvives.php');

    $settings->add(new courses_vicensvives_setting_wscheck());


    $name = get_string('apiurl', 'block_courses_vicensvives');
    $desc = get_string('configapiurl', 'block_courses_vicensvives');
    $default = vicensvives_ws::WS_URL;
    $setting = new admin_setting_configtext('vicensvives_apiurl', $name, $desc, $default, PARAM_URL);
    $setting->set_updatedcallback('vicensvives_reset_token');
    $settings->add($setting);

    $default = '';
    $name = get_string('sharekey', 'block_courses_vicensvives');
    $desc = get_string('configsharekey', 'block_courses_vicensvives');
    $setting = new admin_setting_configpasswordunmask('vicensvives_sharekey', $name, $desc, $default);
    $setting->set_updatedcallback('vicensvives_reset_token');
    $settings->add($setting);

    $name = get_string('sharepass', 'block_courses_vicensvives');
    $desc = get_string('configsharepass', 'block_courses_vicensvives');
    $setting = new admin_setting_configpasswordunmask('vicensvives_sharepass', $name, $desc, $default);
    $setting->set_updatedcallback('vicensvives_reset_token');
    $settings->add($setting);

    $name = get_string('maxcourses', 'block_courses_vicensvives');
    $desc = get_string('configmaxcourses', 'block_courses_vicensvives');
    $default = 10;
    $selectnum = range(0, 100);
    $setting = new admin_setting_configselect('block_courses_vicensvives_maxcourses', $name, $desc, $default, $selectnum);
    $settings->add($setting);

    $name = get_string('defaultcategory', 'block_courses_vicensvives');
    $desc = get_string('configdefaultcategory', 'block_courses_vicensvives');
    $default = 1;
    $setting = new admin_settings_coursecat_select('block_courses_vicensvives_defaultcategory', $name, $desc, $default);
    $settings->add($setting);

    $settings->add(new courses_vicensvives_setting_moodlews());
}
