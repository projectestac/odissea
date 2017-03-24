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
 * Plugin settings
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {

    $settings = new admin_settingpage('local_mobile', new lang_string('pluginname', 'local_mobile'));
    $ADMIN->add('localplugins', $settings);

    $options = array(
        1 => new lang_string('loginintheapp', 'local_mobile'),
        2 => new lang_string('logininthebrowser', 'local_mobile'),
        3 => new lang_string('loginintheinappbrowser', 'local_mobile'),
    );

    $settings->add(new admin_setting_configselect('local_mobile/typeoflogin',
                        get_string('local_mobiletypeoflogin_key', 'local_mobile'),
                        get_string('local_mobiletypeoflogin', 'local_mobile'), 1, $options));

    $settings->add(new admin_setting_configtext('local_mobile/urlscheme',
                        get_string('local_mobileurlscheme_key', 'local_mobile'),
                        get_string('local_mobileurlscheme', 'local_mobile'), '', PARAM_NOTAGS));

    // Features related settings.
    $settings->add(new admin_setting_heading('local_mobile/logout',
                new lang_string('logout'), ''));

    $settings->add(new admin_setting_configcheckbox('local_mobile/forcelogout',
                new lang_string('forcelogout', 'local_mobile'),
                new lang_string('forcelogout_desc', 'local_mobile'), 0));

    $settings->add(new admin_setting_heading('local_mobile/features',
                new lang_string('mobilefeatures', 'local_mobile'), ''));

    // Get the features list.
    $general = new lang_string('general');
    $mainmenu = new lang_string('mainmenu', 'local_mobile');
    $course = new lang_string('course');
    $modules = new lang_string('managemodules');
    $user = new lang_string('user');
    $files = new lang_string('files');

    $options = array(
        '$mmSideMenuDelegate_mmCourses' => $mainmenu . ': ' . new lang_string('mycourses'),
        '$mmSideMenuDelegate_mmaFrontpage' => $mainmenu . ': ' . new lang_string('sitehome'),
        '$mmSideMenuDelegate_mmaCompetency' => $mainmenu . ': ' . new lang_string('myplans', 'tool_lp'),
        '$mmSideMenuDelegate_mmaNotifications' => $mainmenu . ': ' . new lang_string('notifications', 'local_mobile'),
        '$mmSideMenuDelegate_mmaMessages' => $mainmenu . ': ' . new lang_string('messages', 'message'),
        '$mmSideMenuDelegate_mmaCalendar' => $mainmenu . ': ' . new lang_string('calendar', 'calendar'),
        '$mmSideMenuDelegate_mmaFiles' => $mainmenu . ': ' . new lang_string('files'),
        '$mmSideMenuDelegate_website' => $mainmenu . ': ' . new lang_string('webpage'),
        '$mmSideMenuDelegate_help' => $mainmenu . ': ' . new lang_string('help'),
        '$mmCoursesDelegate_search' => $course . ': ' . new lang_string('search'),
        '$mmCoursesDelegate_mmaCompetency' => $course . ': ' . new lang_string('competencies', 'competency'),
        '$mmCoursesDelegate_mmaParticipants' => $course . ': ' . new lang_string('participants'),
        '$mmCoursesDelegate_mmaGrades' => $course . ': ' . new lang_string('grades', 'grades'),
        '$mmCoursesDelegate_mmaCourseCompletion' => $course . ': ' . new lang_string('coursecompletion', 'completion'),
        '$mmCoursesDelegate_mmaNotes' => $course . ': ' . new lang_string('notes', 'notes'),
        '$mmUserDelegate_mmaBadges' => $user . ': ' . new lang_string('badges', 'badges'),
        '$mmUserDelegate_mmaCompetency:learningPlan' => $user . ': ' . new lang_string('competencies', 'competency'),
        '$mmUserDelegate_mmaCourseCompletion:viewCompletion' => $user . ': ' . new lang_string('coursecompletion', 'completion'),
        '$mmUserDelegate_mmaGrades:viewGrades' => $user . ': ' . new lang_string('grades', 'grades'),
        '$mmUserDelegate_mmaMessages:sendMessage' => $user . ': ' . new lang_string('sendmessage', 'message'),
        '$mmUserDelegate_mmaMessages:addContact' => $user . ': ' . new lang_string('addcontact', 'message'),
        '$mmUserDelegate_mmaMessages:blockContact' => $user . ': ' . new lang_string('blockcontact', 'message'),
        '$mmUserDelegate_mmaNotes:addNote' => $user . ': ' . new lang_string('addnewnote', 'notes'),
        '$mmUserDelegate_picture' => $user . ': ' . new lang_string('userpic'),
        'files_privatefiles' => $files . ': ' . new lang_string('privatefiles'),
        'files_sitefiles' => $files . ': ' . new lang_string('sitefiles'),
        'files_upload' => $files . ': ' . new lang_string('upload'),
    );

    $availablemods = core_plugin_manager::instance()->get_plugins_of_type('mod');
    $coursemodules = array();
    $appsupportedmodules = array('assign', 'book', 'chat', 'choice', 'folder', 'forum', 'glossary', 'imscp', 'label',
                                    'lti', 'page', 'quiz', 'resource', 'scorm', 'survey', 'url', 'wiki');
    foreach ($availablemods as $mod) {
        if (in_array($mod->name, $appsupportedmodules)) {
            $options['$mmCourseDelegate_mmaMod' . ucfirst($mod->name)] = $modules . ': ' . $mod->displayname;
        }
    }

    $settings->add(new admin_setting_configmultiselect('local_mobile/disabledfeatures',
                new lang_string('disabledfeatures', 'local_mobile'),
                new lang_string('disabledfeatures_desc', 'local_mobile'), array(), $options));

    $settings->add(new admin_setting_configtextarea('local_mobile/custommenuitems',
                new lang_string('custommenuitems', 'local_mobile'),
                new lang_string('custommenuitems_desc', 'local_mobile'), '', PARAM_RAW, '50', '10'));

    $settings->add(new admin_setting_heading('local_mobile/language',
                new lang_string('language'), ''));

    $settings->add(new admin_setting_configtextarea('local_mobile/customlangstrings',
                new lang_string('customlangstrings', 'local_mobile'),
                new lang_string('customlangstrings_desc', 'local_mobile'),
                '', PARAM_RAW, '50', '10'));

    $url = new moodle_url('/local/mobile/checkconfiguration.php', array('sesskey' => sesskey()));
    $link = html_writer::link($url, get_string('checkpluginconfiguration', 'local_mobile'));
    $settings->add(new admin_setting_heading('checkpluginconfiguration', '', $link));
}
