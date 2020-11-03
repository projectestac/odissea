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
 * Plugin administration pages are defined here.
 *
 * @package     theme_xtec2020
 * @category    admin
 * @copyright   2020 Pau Ferrer Ocaña <pau@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    require_once($CFG->dirroot.'/theme/xtec2020/lib.php');

    global $PAGE;
    $PAGE->requires->js('/theme/xtec2020/javascript/config.js');
    $PAGE->requires->js_init_code('xtec2020_theme_onload();');

    // Header settings
    $setting = new admin_setting_heading('theme_xtec2020/header_settings', get_string('header_settings', 'theme_xtec2020'), "");
    $settings->add($setting);

    $name = 'theme_xtec2020/logo';
    $title = get_string('logo', 'theme_xtec2020');
    $description = get_string('logodesc', 'theme_xtec2020');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $name = 'theme_xtec2020/headerbg';
    $title = get_string('headerbg', 'theme_xtec2020');
    $default = '#f4f4f4';
    $setting = new admin_setting_configcolourpicker($name, $title, "", $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer Params
    $setting = new admin_setting_heading('theme_xtec2020/footer_settings', get_string('footer_settings', 'theme_xtec2020'), "");
    $settings->add($setting);

    $name = 'theme_xtec2020/footnote';
    $title = get_string('footnote', 'theme_xtec2020');
    $description = get_string('footnotedesc', 'theme_xtec2020');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);

    $description_url_desc = get_string('urldesc', 'theme_xtec2020');
    $description_tel_desc = get_string('teldesc', 'theme_xtec2020');
    $description_mail_desc = get_string('maildesc', 'theme_xtec2020');

    $name = 'theme_xtec2020/website';
    $title = get_string('website', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/email';
    $title = get_string('email');
    $setting = new admin_setting_configtext($name, $title, $description_mail_desc, '', PARAM_EMAIL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/phone';
    $title = get_string('phone');
    $setting = new admin_setting_configtext($name, $title, $description_tel_desc, '', PARAM_TEXT);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    if (theme_xtec2020_is_service_enabled('nodes')) {
        $name = 'theme_xtec2020/nodes';
        $title = get_string('nodes', 'theme_xtec2020');
        $description = get_string('nodesdesc', 'theme_xtec2020');
        $default = 1;
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_xtec2_clean_cache');
        $settings->add($setting);
    }

    $name = 'theme_xtec2020/whatsapp';
    $title = get_string('whatsapp', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_tel_desc, '', PARAM_TEXT);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/facebook';
    $title = get_string('facebook', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/twitter';
    $title = get_string('twitter', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/instagram';
    $title = get_string('instagram', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/flickr';
    $title = get_string('flickr', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/linkedin';
    $title = get_string('linkedin', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/pinterest';
    $title = get_string('pinterest', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/youtube';
    $title = get_string('youtube', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    $name = 'theme_xtec2020/skype';
    $title = get_string('skype', 'theme_xtec2020');
    $setting = new admin_setting_configtext($name, $title, get_string('skypedesc', 'theme_xtec2020'), '', PARAM_URL);
    $setting->set_updatedcallback('theme_xtec2_clean_cache');
    $settings->add($setting);

    // Select color set
    $setting = new admin_setting_heading('theme_xtec2020/color_settings', get_string('color_settings', 'theme_xtec2020'), get_string('colorsetdesc', 'theme_xtec2020'));
    $settings->add($setting);

    $name = 'theme_xtec2020/colorset';
    $title = get_string('colorset', 'theme_xtec2020');
    $default = 'grana';
    $choices = array('personalitzat' => get_string('custom', 'theme_xtec2020'),
                    'grana' => get_string('grana', 'theme_xtec2020'),
                    'coral' => get_string('coral', 'theme_xtec2020'),
                    'kellygreen' => get_string('kellygreen', 'theme_xtec2020'),
                    'colourful' => get_string('colourful', 'theme_xtec2020'));
    if (theme_xtec2020_is_service_enabled('nodes')) {
        $colors = get_colors_from_nodes();
        if ($colors) {
            $choices['nodes'] = get_string('nodes_color', 'theme_xtec2020');
            $init = 'init_nodes_colors("'.$colors['color'].'", "'.$colors['logo_color'].'");';
            $PAGE->requires->js_init_code($init);
        }
    }

    $setting = new admin_setting_configselect($name, $title, "", $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $name = 'theme_xtec2020/maincolor';
    $title = get_string('maincolor', 'theme_xtec2020');
    $default = '#AC2013';
    $setting = new admin_setting_configcolourpicker($name, $title, '', $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $name = 'theme_xtec2020/fontcolor';
    $title = get_string('fontcolor', 'theme_xtec2020');
    $default = '#303030';
    $colorwarning = get_string('color_warning', 'theme_xtec2020', theme_xtec2020_get_YIQ(get_config('theme_xtec2020', 'fontcolor')));
    $setting = new admin_setting_configcolourpicker($name, $title, $colorwarning, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $name = 'theme_xtec2020/linkscolor';
    $title = get_string('linkscolor', 'theme_xtec2020');
    $default = '#AC2013';
    $colorwarning = get_string('color_warning', 'theme_xtec2020', theme_xtec2020_get_YIQ(get_config('theme_xtec2020', 'linkscolor')));
    $setting = new admin_setting_configcolourpicker($name, $title, $colorwarning, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);


    // Select font settings
    $setting = new admin_setting_heading('theme_xtec2020/font_settings', get_string('font_settings', 'theme_xtec2020'), "");
    $settings->add($setting);

    $name = 'theme_xtec2020/fontsize';
    $title = get_string('fontsize', 'theme_xtec2020');
    $description = get_string('fontsizedesc', 'theme_xtec2020') .
                   '<ul style="margin-left:15%;">' .
                   '<li><span style="font-size:0.8rem">' .
                   get_string('fontsizedesc1', 'theme_xtec2020') .
                   '</span></li>' .
                   '<li><span style="font-size:0.9rem">' .
                   get_string('fontsizedesc2', 'theme_xtec2020') .
                   '</span></li>' .
                   '<li><span style="font-size:1rem">' .
                   get_string('fontsizedesc3', 'theme_xtec2020') .
                   '</span></li>' .
                   '<li><span style="font-size:1.2rem">' .
                   get_string('fontsizedesc4', 'theme_xtec2020') .
                   '</span></li>' .
                   '<li><span style="font-size:1.4rem">' .
                   get_string('fontsizedesc5', 'theme_xtec2020') .
                   '</span></li>' .
                   '</ul>';
    $default = '100';
    $choices = array('80' => get_string('fontsizedesc1', 'theme_xtec2020'),
                    '90' => get_string('fontsizedesc2', 'theme_xtec2020'),
                    '100' => get_string('fontsizedesc3', 'theme_xtec2020'),
                    '120' => get_string('fontsizedesc4', 'theme_xtec2020'),
                    '140' => get_string('fontsizedesc5', 'theme_xtec2020'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);


    // Select font style
    $name = 'theme_xtec2020/fontstyle';
    $title = get_string('fontstyle', 'theme_xtec2020');
    $description = get_string('fontstyledesc', 'theme_xtec2020') .
                   '<ul style="margin-left:15%;">' .
                   '<li><span style="font-family: arial, helvetica, clean, sans-serif; !important">' .
                   get_string('fontstyledesc1', 'theme_xtec2020') .
                   '</span></li>' .
                   '<li><span style="font-family: Abecedario; !important">' .
                   get_string('fontstyledesc2', 'theme_xtec2020') .
                   '</span></li>'.
                   '<li><span style="text-transform: uppercase; !important">' .
                   get_string('fontstyledesc3', 'theme_xtec2020') .
                   '</span></li>' .
                   '</ul>';
    $default = 'normal';
    $choices = array('normal' =>  get_string('fontstyledesc1', 'theme_xtec2020'),
                    'lligada' =>  get_string('fontstyledesc2', 'theme_xtec2020'),
                    'majuscules' => get_string('fontstyledesc3', 'theme_xtec2020'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Select font settings
    $setting = new admin_setting_heading('theme_xtec2020/css_settings', get_string('css_settings', 'theme_xtec2020'), "");
    $settings->add($setting);

    // Set CSS to be imported
    $name = 'theme_xtec2020/importcss';
    $title = get_string('importcss', 'theme_xtec2020');
    $description = get_string('importcssdesc', 'theme_xtec2020');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_xtec2020/customcss';
    $title = get_string('customcss', 'theme_xtec2020');
    $description = get_string('customcssdesc', 'theme_xtec2020');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    if (!function_exists('is_xtecadmin') || is_xtecadmin()) {
        $setting = new admin_setting_heading('theme_xtec2020/advices_user', get_string('advices_user', 'theme_xtec2020'), "");
        $settings->add($setting);

        $name = 'theme_xtec2020/agora_alert_message';
        $title = get_string('alert_message', 'theme_xtec2020');
        $description = get_string('agora_alert_message_desc', 'theme_xtec2020');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $settings->add($setting);
        $setting->set_updatedcallback('theme_reset_all_caches');

        $name = 'theme_xtec2020/agora_alert_start';
        $title = get_string('alert_start', 'theme_xtec2020');
        $description = get_string('alert_start_desc', 'theme_xtec2020');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $settings->add($setting);
        $setting->set_updatedcallback('theme_reset_all_caches');

        $name = 'theme_xtec2020/agora_alert_end';
        $title = get_string('alert_end', 'theme_xtec2020');
        $description = get_string('alert_end_desc', 'theme_xtec2020');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $settings->add($setting);
        $setting->set_updatedcallback('theme_reset_all_caches');

        $setting = new admin_setting_heading('theme_xtec2020/advices_admin', get_string('advices_admin', 'theme_xtec2020'), "");
        $settings->add($setting);

        $name = 'theme_xtec2020/admin_alert_message';
        $title = get_string('alert_message', 'theme_xtec2020');
        $description = get_string('admin_alert_message_desc', 'theme_xtec2020');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $settings->add($setting);
        $setting->set_updatedcallback('theme_reset_all_caches');

        $name = 'theme_xtec2020/admin_alert_start';
        $title = get_string('alert_start', 'theme_xtec2020');
        $description = get_string('alert_start_desc', 'theme_xtec2020');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $settings->add($setting);
        $setting->set_updatedcallback('theme_reset_all_caches');

        $name = 'theme_xtec2020/admin_alert_end';
        $title = get_string('alert_end', 'theme_xtec2020');
        $description = get_string('alert_end_desc', 'theme_xtec2020');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $settings->add($setting);
        $setting->set_updatedcallback('theme_reset_all_caches');
    }

}
