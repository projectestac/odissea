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

if ($hassiteconfig) {

    require_once("$CFG->dirroot/local/clickedu/locallib.php");

    $visiblename = new lang_string('pluginname', 'local_clickedu');
    $settings = new admin_settingpage('localclickedusettings', $visiblename);

    $name = 'local_clickedu/webserviceurl';
    $visiblename = new lang_string('configwebserviceurl', 'local_clickedu');
    $description = new lang_string('configwebserviceurldesc', 'local_clickedu');
    $default = '';
    $type = PARAM_URL;
    $settings->add(new admin_setting_configtext($name, $visiblename, $description, $default, $type));

    $name = 'local_clickedu/syncusers';
    $visiblename = new lang_string('configsyncusers', 'local_clickedu');
    $description = new lang_string('configsyncusersdesc', 'local_clickedu');
    $default = false;
    $settings->add(new admin_setting_configcheckbox($name, $visiblename, $description, $default));

    $name = 'local_clickedu/synccourses';
    $visiblename = new lang_string('configsynccourses', 'local_clickedu');
    $description = new lang_string('configsynccoursesdesc', 'local_clickedu');
    $default = false;
    $settings->add(new admin_setting_configcheckbox($name, $visiblename, $description, $default));

    $name = 'local_clickedu/synccontents';
    $visiblename = new lang_string('configsynccontents', 'local_clickedu');
    $description = new lang_string('configsynccontentsdesc', 'local_clickedu');
    $default = false;
    $settings->add(new admin_setting_configcheckbox($name, $visiblename, $description, $default));

    $name = 'local_clickedu/moodlews';
    $visiblename = new lang_string('configmoodlews', 'local_clickedu');
    $description = new lang_string('configmoodlewsdesc', 'local_clickedu');
    $settings->add(new clickedu_moodle_webservice_setting($name, $visiblename, $description));

    $name = 'local_clickedu/moodlewstoken';
    $visiblename = new lang_string('configmoodlewstoken', 'local_clickedu');
    $description = new lang_string('configmoodlewstokendesc', 'local_clickedu');
    $settings->add(new clickedu_moodle_webservice_token_setting($name, $visiblename, $description));

    $conditions = array('contextlevel' => CONTEXT_COURSE);
    $roleids = array_keys($DB->get_records('role_context_levels', $conditions, '', 'roleid'));
    $roles = $DB->get_records_list('role', 'id', $roleids);
    $choices = role_fix_names($roles, null, ROLENAME_ORIGINAL, true);

    $name = 'local_clickedu/coursecat';
    $visiblename = new lang_string('configcoursecat', 'local_clickedu');
    $description = new lang_string('configcoursecatdesc', 'local_clickedu');
    $settings->add(new admin_settings_coursecat_select($name, $visiblename, $description, 1));

    $name = 'local_clickedu/teacherrole';
    $visiblename = new lang_string('configteacherrole', 'local_clickedu');
    $description = new lang_string('configteacherroledesc', 'local_clickedu');
    $default = $DB->get_field('role', 'id', array('shortname' => 'editingteacher'));
    $settings->add(new admin_setting_configselect($name, $visiblename, $description, $default, $choices));

    $name = 'local_clickedu/studentrole';
    $visiblename = new lang_string('configstudentrole', 'local_clickedu');
    $description = new lang_string('configstudentroledesc', 'local_clickedu');
    $default = $DB->get_field('role', 'id', array('shortname' => 'student'));
    $settings->add(new admin_setting_configselect($name, $visiblename, $description, $default, $choices));

    $ADMIN->add('localplugins', $settings);
}

if (has_any_capability(array('local/clickedu:syncusers', 'local/clickedu:synccourses'), context_system::instance())) {
    $visiblename = new lang_string('pluginname', 'local_clickedu');
    $ADMIN->add('root', new admin_category('clickedu', $visiblename));

    if (get_config('local_clickedu', 'syncusers')) {
        $name = 'clickedu_syncusers';
        $visiblename = new lang_string('syncusers', 'local_clickedu');
        $url = new moodle_url('/local/clickedu/syncusers.php');
        $capability = 'local/clickedu:syncusers';
        $ADMIN->add('clickedu', new admin_externalpage($name, $visiblename, $url, $capability));
    }

    if (get_config('local_clickedu', 'synccourses')) {
        $name = 'clickedu_synccourses';
        $visiblename = new lang_string('synccourses', 'local_clickedu');
        $url = new moodle_url('/local/clickedu/synccourses.php');
        $capability = 'local/clickedu:synccourses';
        $ADMIN->add('clickedu', new admin_externalpage($name, $visiblename, $url, $capability));
    }
}
