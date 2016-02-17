<?php
//
//  Copyright (c) 2011, Maths for More S.L. http://www.wiris.com
//  This file is part of Moodle WIRIS Plugin.
//
//  Moodle WIRIS Plugin is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  Moodle WIRIS Plugin is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with Moodle WIRIS Plugin. If not, see <http://www.gnu.org/licenses/>.
//

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    global $CFG;
    global $wirisconfigurationclass;

    require_once('wirispluginwrapper.php');

    $wirisplugin = new WIRISpluginWrapper();

    // If "uninstall" status changes, plugins caches must be reloaded in order to read new dependencies.
    // Moodle 2.4 and upwards
    if ($CFG->version>=2012120300) {
        if (get_config('filter_wiris', 'uninstall') !== get_config('filter_wiris', 'uninstallchange')) {
            set_config('uninstallchange', get_config('filter_wiris', 'uninstall'), 'filter_wiris');
            if ($CFG->version>=2013111800) {
                $cache = cache::make('core', 'plugin_manager');
                $cache->purge();
                $pluginmanager = core_plugin_manager::instance();

                if ($plugininfo = $pluginmanager->get_plugin_info('tinymce_tiny_mce_wiris')) {
                    set_config('uninstall',  get_config('filter_wiris', 'uninstall'), 'tinymce_tiny_mce_wiris');

                }

                if ($plugininfo = $pluginmanager->get_plugin_info('atto_wiris')) {
                    set_config('uninstall',  get_config('filter_wiris', 'uninstall'), 'atto_wiris');
                }
            } else { // tinymce plugin allways installed on Moodle 2.4 and 2.5
                set_config('uninstall', 'tinymce_tiny_mce_wiris', get_config('filter_wiris', 'uninstall'));

            }
        }
    }

    if ($wirisplugin->is_installed()) {
        //Editor and CAS checkbox
        $output = '';
        $wirisplugin->begin();
        $was_editor_enabled = $wirisplugin->was_editor_enabled();
        $was_cas_enabled = $wirisplugin->was_cas_enabled();
        $was_chem_editor_enabled = $wirisplugin->was_chem_editor_enabled();
        $conf = $wirisplugin->get_instance()->getConfiguration();
        $cache = $conf->getProperty("wiriscachedirectory",null);
        $formula = $conf->getProperty("wirisformuladirectory",null);
        $wirisplugin->end();

        //Text to be shown when editor and cas are disabled in MoodleConfigurationUpdater
        if (!$was_editor_enabled) {
            $output = '<div class="form-item clearfix">'.
                '<div class="form-label" style="color:#aaaaaa;" >WIRIS editor<span class="form-shortname" style="color:#aaaaaa;">'.
                'filter_wiris_editor_enable</span></div><div class="form-setting"><div class="form-checkbox defaultsnext">'.
                '<input type="checkbox" disabled="disabled"></div></div><div class="form-description"></div></div>';
        }
        /* if (!$was_cas_enabled) {
            $output .= '<div class="form-item clearfix"><div class="form-label" style="color:#aaaaaa;">WIRIS cas'.
                '<span class="form-shortname" style="color:#aaaaaa;">filter_wiris_cas_enable</span></div><div class="form-setting">'.
                '<div class="form-checkbox defaultsnext"><input type="checkbox" disabled="disabled"></div></div>'.
                '<div class="form-description"></div></div>';
        } */

        $settings->add(new admin_setting_heading('filter_wiris_disabled', '', $output));

        $output = '';
        if ($was_editor_enabled) {
            $settings->add(new admin_setting_configcheckbox('filter_wiris_editor_enable', get_string('wirismatheditor', 'filter_wiris'), '', '1'));
        } else {
            if (isset($CFG->filter_wiris_editor_enable) && $CFG->filter_wiris_editor_enable) {
                set_config('filter_wiris_editor_enable', 0, 'config');
                $CFG->filter_wiris_editor_enable = false;
            }
        }

        if ($was_chem_editor_enabled) {
            $settings->add(new admin_setting_configcheckbox('filter_wiris_chem_editor_enable', get_string('wirischemeditor', 'filter_wiris'), '', '0'));
        } else {
            if (isset($CFG->filter_wiris_chem_editor_enable) && $CFG->filter_wiris_chem_editor_enable) {
                set_config('filter_wiris_chem_editor_enable', 0, 'config');
                $CFG->filter_wiris_chem_editor_enable = false;
            }
        }

        if ($was_cas_enabled) {
            $settings->add(new admin_setting_configcheckbox('filter_wiris_cas_enable', get_string('wiriscas', 'filter_wiris'), '', '1'));
        } else {
            if (isset($CFG->filter_wiris_cas_enable) && $CFG->filter_wiris_cas_enable) {
                set_config('filter_wiris_cas_enable', 0, 'config');
                $CFG->filter_wiris_cas_enable = false;
            }
        }

    } else {
        $title = '<br /><br /><br /><span style="color:#aa0000; font-size:18px;">Attention! A component is missing for WIRIS filter to function correctly</span>';
        $output = $title . 
            '<br />WIRIS filter requires that <a target="_blank" href="http://www.wiris.com/plugins/docs/moodle">'.
            'WIRIS plugin for Moodle and TinyMCE or Atto '.
            '<img style="vertical-align:-3px;" alt="" src="https://www.wiris.com/system/files/attachments/1689/WIRIS_manual_icon_17_17.png" />'.
            '</a>'.
            ' is also installed.';
    }

    // Clearing cache.
    if (get_config('filter_wiris', 'clear_cache')) {
        if (isset($cache) && !is_null($cache)) {
            $wirisplugin->clear_folder($cache);
        }
        if (isset($formula) && !is_null($formula)) {
            $wirisplugin->clear_folder($formula);
        }
        reset_text_filters_cache();

        // Disabling the cache clearing for the next request.
        set_config('clear_cache', false, 'filter_wiris');
        $CFG->filter_wiris_clear_cache = false;
    }

    if ($CFG->version>=2012120300) {
        $settings->add(new admin_setting_configcheckbox('filter_wiris/clear_cache', get_string('clearcache', 'filter_wiris'), get_string('clearcachedesc', 'filter_wiris'), false, true, false));
        $settings->add(new admin_setting_configcheckbox('filter_wiris/uninstall', get_string('uninstallmode', 'filter_wiris'), get_string('uninstallmodedesc', 'filter_wiris'), false, true, false));
    }

    //$output = '<a href="../filter/wiris/info.php">Visit plugin test page.</a>';
    //$settings->add(new admin_setting_heading('filter_wiris_link_test', '', $output));

    $wiris_quizzes = dirname(__FILE__) . '/../../question/type/wq/';
    $quizzes_installed = file_exists($wiris_quizzes);

    if ($quizzes_installed){
        $url = $CFG->wwwroot . '/admin/settings.php?section=qtypesettingwq';
        $url = '<a href="' . $url . '">WIRIS quizzes settings</a>';
        $settings->add(new admin_setting_heading('filter_wirisquizzesheading', $url, ''));
    }

}