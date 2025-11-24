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
 * @package   theme_xtecboost
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    require_once($CFG->dirroot . '/theme/xtecboost/lib.php');
    include_once($CFG->dirroot . '/theme/xtecboost/constants.php');

    global $PAGE;
    $PAGE->requires->js('/theme/xtecboost/javascript/config.js');
    $PAGE->requires->js_init_code('xtecboost_theme_onload({HEADERBG: "' . XTECBOOST_DEFAULT_HEADERBG . '", MAINCOLOR: "' .
        XTECBOOST_DEFAULT_MAINCOLOR . '", FONTCOLOR: "' . XTECBOOST_DEFAULT_FONTCOLOR . '", LINKSCOLOR: "' . XTECBOOST_DEFAULT_LINKSCOLOR . '"});');

    $settings = new theme_boost_admin_settingspage_tabs('themesettingxtecboost', get_string('configtitle', 'theme_xtecboost'));

    // General settings only available to xtecadmin.
    if (function_exists('get_protected_agora') && get_protected_agora()) {
        $page = new admin_settingpage('theme_xtecboost_general', get_string('generalsettings', 'theme_xtecboost'));

        // Blocks to be excluded when this theme is enabled in the "Add a block" list: Administration, Navigation, Courses and Section links.
        $default = 'navigation,settings,course_list,section_links';
        $setting = new admin_setting_configtext('theme_xtecboost/unaddableblocks',
            get_string('unaddableblocks', 'theme_boost'), get_string('unaddableblocks_desc', 'theme_boost'), $default, PARAM_TEXT);
        $page->add($setting);

        // Preset.
        $name = 'theme_xtecboost/preset';
        $title = get_string('preset', 'theme_xtecboost');
        $description = get_string('preset_desc', 'theme_xtecboost');
        $default = 'default.scss';

        $context = context_system::instance();
        $fs = get_file_storage();
        $files = $fs->get_area_files($context->id, 'theme_xtecboost', 'preset', 0, 'itemid, filepath, filename', false);

        $choices = [];
        foreach ($files as $file) {
            $choices[$file->get_filename()] = $file->get_filename();
        }
        // These are the built-in presets.
        $choices['default.scss'] = 'default.scss';
        $choices['plain.scss'] = 'plain.scss';

        $setting = new admin_setting_configthemepreset($name, $title, $description, $default, $choices, 'boost');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Preset files setting.
        $name = 'theme_xtecboost/presetfiles';
        $title = get_string('presetfiles', 'theme_xtecboost');
        $description = get_string('presetfiles_desc', 'theme_xtecboost');

        $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
            ['maxfiles' => 20, 'accepted_types' => ['.scss']]);
        $page->add($setting);

        // Variable $body-color.
        // We use an empty default value because the default colour should come from the preset.
        $name = 'theme_xtecboost/brandcolor';
        $title = get_string('brandcolor', 'theme_boost');
        $description = get_string('brandcolor_desc', 'theme_boost');
        $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Must add the page after defining all the settings!
        $settings->add($page);
    }

    // Advanced settings.
    $page = new admin_settingpage('theme_xtecboost_advanced', get_string('advancedsettings', 'theme_boost'));

    if (function_exists('get_protected_agora') && get_protected_agora()) {
        // Raw SCSS to include before the content.
        $setting = new admin_setting_scsscode('theme_xtecboost/scsspre',
            get_string('rawscsspre', 'theme_boost'), get_string('rawscsspre_desc', 'theme_boost'), '', PARAM_RAW);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Raw SCSS to include after the content.
        $setting = new admin_setting_scsscode('theme_xtecboost/scss', get_string('rawscss', 'theme_boost'),
            get_string('rawscss_desc', 'theme_boost'), '', PARAM_RAW);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    }

    global $CFG;
    include_once($CFG->dirroot . '/local/agora/lib.php');

    // Header settings
    $setting = new admin_setting_heading('theme_xtecboost/header_settings', get_string('header_settings', 'theme_xtecboost'), '');
    $page->add($setting);

    $name = 'theme_xtecboost/logo';
    $title = get_string('logo', 'theme_xtecboost');
    $description = get_string('logodesc', 'theme_xtecboost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/headerbg';
    $title = get_string('headerbg', 'theme_xtecboost');
    $default = XTECBOOST_DEFAULT_HEADERBG;
    $setting = new admin_setting_configcolourpicker($name, $title, '', $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Course settings
    $setting = new admin_setting_heading('theme_xtecboost/course_settings', get_string('course_settings', 'theme_xtecboost'), '');
    $page->add($setting);

    $name = 'theme_xtecboost/coursecontentmaxwidth';
    $title = get_string('coursecontentmaxwidth', 'theme_xtecboost');
    $description = get_string('coursecontentmaxwidthdesc', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description, '1000', PARAM_INT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footer Params
    $setting = new admin_setting_heading('theme_xtecboost/footer_settings', get_string('footer_settings', 'theme_xtecboost'), '');
    $page->add($setting);

    $name = 'theme_xtecboost/footnote';
    $title = get_string('footnote', 'theme_xtecboost');
    $description = get_string('footnotedesc', 'theme_xtecboost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $page->add($setting);

    $description_url_desc = get_string('urldesc', 'theme_xtecboost');
    $description_tel_desc = get_string('teldesc', 'theme_xtecboost');
    $description_mail_desc = get_string('maildesc', 'theme_xtecboost');

    $name = 'theme_xtecboost/website';
    $title = get_string('website', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/email';
    $title = get_string('email');
    $setting = new admin_setting_configtext($name, $title, $description_mail_desc, '', PARAM_EMAIL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/phone';
    $title = get_string('phone');
    $setting = new admin_setting_configtext($name, $title, $description_tel_desc, '', PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    if (theme_xtecboost_is_service_enabled('nodes')) {
        $name = 'theme_xtecboost/nodes';
        $title = get_string('nodes', 'theme_xtecboost');
        $description = get_string('nodesdesc', 'theme_xtecboost');
        $default = 1;
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    }


    $name = 'theme_xtecboost/whatsapp';
    $title = get_string('whatsapp', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_tel_desc, '', PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/facebook';
    $title = get_string('facebook', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/twitter';
    $title = get_string('twitter', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/instagram';
    $title = get_string('instagram', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/flickr';
    $title = get_string('flickr', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/linkedin';
    $title = get_string('linkedin', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/pinterest';
    $title = get_string('pinterest', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/youtube';
    $title = get_string('youtube', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, $description_url_desc, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/skype';
    $title = get_string('skype', 'theme_xtecboost');
    $setting = new admin_setting_configtext($name, $title, get_string('skypedesc', 'theme_xtecboost'), '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Select color set
    $setting = new admin_setting_heading('theme_xtecboost/color_settings', get_string('color_settings', 'theme_xtecboost'), get_string('colorsetdesc', 'theme_xtecboost'));
    $page->add($setting);

    $name = 'theme_xtecboost/colorset';
    $title = get_string('colorset', 'theme_xtecboost');
    $default = 'PEDC';
    $choices = [
        'personalitzat' => get_string('custom', 'theme_xtecboost'),
        'PEDC' => get_string('PEDC', 'theme_xtecboost'),
        'grana' => get_string('grana', 'theme_xtecboost'),
        'coral' => get_string('coral', 'theme_xtecboost'),
        'kellygreen' => get_string('kellygreen', 'theme_xtecboost'),
        'colourful' => get_string('colourful', 'theme_xtecboost')
    ];

    $setting = new admin_setting_configselect($name, $title, '', $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/maincolor';
    $title = get_string('maincolor', 'theme_xtecboost');
    $default = XTECBOOST_DEFAULT_MAINCOLOR;
    $setting = new admin_setting_configcolourpicker($name, $title, '', $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/fontcolor';
    $title = get_string('fontcolor', 'theme_xtecboost');
    $default = XTECBOOST_DEFAULT_FONTCOLOR;
    $colorwarning = get_string('color_warning', 'theme_xtecboost', theme_xtecboost_get_YIQ(get_config('theme_xtecboost', 'fontcolor')));
    $setting = new admin_setting_configcolourpicker($name, $title, $colorwarning, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_xtecboost/linkscolor';
    $title = get_string('linkscolor', 'theme_xtecboost');
    $default = XTECBOOST_DEFAULT_LINKSCOLOR;
    $colorwarning = get_string('color_warning', 'theme_xtecboost', theme_xtecboost_get_YIQ(get_config('theme_xtecboost', 'linkscolor')));
    $setting = new admin_setting_configcolourpicker($name, $title, $colorwarning, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Select font settings
    $setting = new admin_setting_heading('theme_xtecboost/font_settings', get_string('font_settings', 'theme_xtecboost'), '');
    $page->add($setting);

    $name = 'theme_xtecboost/fontsize';
    $title = get_string('fontsize', 'theme_xtecboost');
    $description = get_string('fontsizedesc', 'theme_xtecboost') .
        '<ul style="margin-left:15%;">' .
        '<li><span style="font-size:0.8rem">' . get_string('fontsizedesc1', 'theme_xtecboost') . '</span></li>' .
        '<li><span style="font-size:0.9rem">' . get_string('fontsizedesc2', 'theme_xtecboost') . '</span></li>' .
        '<li><span style="font-size:1rem">' . get_string('fontsizedesc3', 'theme_xtecboost') . '</span></li>' .
        '<li><span style="font-size:1.2rem">' . get_string('fontsizedesc4', 'theme_xtecboost') . '</span></li>' .
        '<li><span style="font-size:1.4rem">' . get_string('fontsizedesc5', 'theme_xtecboost') . '</span></li>' .
        '</ul>';
    $default = '100';
    $choices = [
        '80' => get_string('fontsizedesc1', 'theme_xtecboost'),
        '90' => get_string('fontsizedesc2', 'theme_xtecboost'),
        '100' => get_string('fontsizedesc3', 'theme_xtecboost'),
        '120' => get_string('fontsizedesc4', 'theme_xtecboost'),
        '140' => get_string('fontsizedesc5', 'theme_xtecboost'),
    ];

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Select font style
    $name = 'theme_xtecboost/fontstyle';
    $title = get_string('fontstyle', 'theme_xtecboost');
    $description = get_string('fontstyledesc', 'theme_xtecboost') .
        '<ul style="margin-left:15%;">' .
        '<li><span style="font-family: arial, helvetica, clean, sans-serif; !important">' .
        get_string('fontstyledesc1', 'theme_xtecboost') .
        '</span></li>' .
        '<li><span style="font-family: Abecedario; !important">' .
        get_string('fontstyledesc2', 'theme_xtecboost') .
        '</span></li>' .
        '<li><span style="text-transform: uppercase; !important">' .
        get_string('fontstyledesc3', 'theme_xtecboost') .
        '</span></li>' .
        '</ul>';
    $default = 'normal';
    $choices = [
        'normal' => get_string('fontstyledesc1', 'theme_xtecboost'),
        'lligada' => get_string('fontstyledesc2', 'theme_xtecboost'),
        'majuscules' => get_string('fontstyledesc3', 'theme_xtecboost'),
    ];

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Select font settings
    $setting = new admin_setting_heading('theme_xtecboost/css_settings', get_string('css_settings', 'theme_xtecboost'), '');
    $page->add($setting);

    // Set CSS to be imported
    $name = 'theme_xtecboost/importcss';
    $title = get_string('importcss', 'theme_xtecboost');
    $description = get_string('importcssdesc', 'theme_xtecboost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Custom CSS file.
    $name = 'theme_xtecboost/customcss';
    $title = get_string('customcss', 'theme_xtecboost');
    $description = get_string('customcssdesc', 'theme_xtecboost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    if (function_exists('get_protected_agora') && get_protected_agora()) {
        // XTEC service type
        $setting = new admin_setting_heading('theme_xtecboost/xtec_type_heading', get_string('xtec_type_heading', 'theme_xtecboost'), '');
        $page->add($setting);

        $name = 'theme_xtecboost/xtec_type';
        $title = get_string('xtec_type', 'theme_xtecboost');
        $description = get_string('xtec_type_desc', 'theme_xtecboost');
        $default = 'eix';
        $choices = [
            'eix' => get_string('xtectypedesc1', 'theme_xtecboost'),
            'eoi' => get_string('xtectypedesc2', 'theme_xtecboost'),
            'alexandria' => get_string('xtectypedesc3', 'theme_xtecboost'),
            'odissea' => get_string('xtectypedesc4', 'theme_xtecboost'),
        ];
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    }

    $settings->add($page);
}
