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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Tiny C4L plugin settings.
 *
 * @package     tiny_c4l
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editortiny', new admin_category('tiny_c4l', new lang_string('pluginname', 'tiny_c4l')));

$settings = new admin_settingpage('tiny_c4l_settings', new lang_string('pluginname', 'tiny_c4l'));

if ($ADMIN->fulltree) {

    // Custom components settings.
    $settings->add(new admin_setting_heading('tiny_c4l/generalsettings', new lang_string('generalsettings', 'tiny_c4l'), ''));

    // Configure component preview.
    $name = get_string('enablepreview', 'tiny_c4l');
    $desc = get_string('enablepreview_desc', 'tiny_c4l');
    $default = 1;
    $setting = new admin_setting_configcheckbox('tiny_c4l/enablepreview', $name, $desc, $default);
    $settings->add($setting);

    // Configure available students' components.
    $components = [
        'keyconcept' => get_string('keyconcept', 'tiny_c4l'),
        'tip' => get_string('tip', 'tiny_c4l'),
        'reminder' => get_string('reminder', 'tiny_c4l'),
        'quote' => get_string('quote', 'tiny_c4l'),
        'dodontcards' => get_string('dodontcards', 'tiny_c4l'),
        'readingcontext' => get_string('readingcontext', 'tiny_c4l'),
        'example' => get_string('example', 'tiny_c4l'),
        'figure' => get_string('figure', 'tiny_c4l'),
        'tag' => get_string('tag', 'tiny_c4l'),
        'inlinetag' => get_string('inlinetag', 'tiny_c4l'),
        'attention' => get_string('attention', 'tiny_c4l'),
        'allpurposecard' => get_string('allpurposecard', 'tiny_c4l'),
    ];
    $name = get_string('aimedatstudents', 'tiny_c4l');
    $desc = get_string('aimedatstudents_desc', 'tiny_c4l');
    $setting = new admin_setting_configmulticheckbox('tiny_c4l/aimedatstudents', $name, $desc, $components, $components);
    $settings->add($setting);


    // Configure not intended students' components.
    $components = [
        'estimatedtime' => get_string('estimatedtime', 'tiny_c4l'),
        'duedate' => get_string('duedate', 'tiny_c4l'),
        'proceduralcontext' => get_string('proceduralcontext', 'tiny_c4l'),
        'gradingvalue' => get_string('gradingvalue', 'tiny_c4l'),
        'expectedfeedback' => get_string('expectedfeedback', 'tiny_c4l'),
        'learningoutcomes' => get_string('learningoutcomes', 'tiny_c4l'),
    ];
    $name = get_string('notintendedforstudents', 'tiny_c4l');
    $desc = get_string('notintendedforstudents_desc', 'tiny_c4l');
    $setting = new admin_setting_configmulticheckbox('tiny_c4l/notintendedforstudents', $name, $desc, [], $components);
    $settings->add($setting);

    // Custom components settings.
    $settings->add(new admin_setting_heading('tiny_c4l/customcomponents', new lang_string('customcomponents', 'tiny_c4l'), ''));

    // Number of custom components.
    $name = 'tiny_c4l/customcompcount';
    $title = get_string('customcompcount', 'tiny_c4l');
    $description = get_string('customcompcountdesc', 'tiny_c4l');
    $options = range(0, 12);
    $options = array_combine($options, $options);
    $setting = new admin_setting_configselect($name, $title, $description, 0, $options);
    $setting->set_updatedcallback('purge_all_caches');
    $settings->add($setting);


    // CSS for preview content inside editor.
    $name = 'tiny_c4l/custompreviewcss';
    $title = get_string('custompreviewcss', 'tiny_c4l');
    $url = new moodle_url('/admin/settings.php', ['section' => 'additionalhtml']);
    $link = html_writer::link($url, get_string('additionalhtml', 'tiny_c4l'), ['target' => '_blank']);
    $description = get_string('custompreviewcssdesc', 'tiny_c4l', $link);
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);

    // Images bank.
    $fileareaid = 'customimagesbank';
    $name = 'tiny_c4l/customimagesbank';
    $title = get_string('customimagesbank', 'tiny_c4l');
    $description = get_string('customimagesbankdesc', 'tiny_c4l');
    $options = ['accepted_types' => ['image'], 'maxfiles' => -1];
    $setting = new admin_setting_configstoredfile($name, $title, $description, $fileareaid, 0, $options);
    $settings->add($setting);

    // If we don't have any custom component yet, set to 0.
    if (!$customcompcount = get_config('tiny_c4l', 'customcompcount')) {
        $customcompcount = 0;
    }

    for ($componentindex = 1; $componentindex <= $customcompcount; $componentindex++) {

        // Header.
        $name = 'tiny_c4l/customcomptitle' . $componentindex;
        $title = get_string('customcomptitle', 'tiny_c4l', $componentindex);
        $title = html_writer::tag('h4', $title);
        $setting = new admin_setting_description($name, '', $title);
        $settings->add($setting);

        // Enable.
        $name = 'tiny_c4l/customcompenable' . $componentindex;
        $title = get_string('customcompenable', 'tiny_c4l', $componentindex);
        $description = get_string('customcompenabledesc', 'tiny_c4l');
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $settings->add($setting);

        // Name.
        $name = 'tiny_c4l/customcompname' . $componentindex;
        $title = get_string('customcompname', 'tiny_c4l', $componentindex);
        $description = get_string('customcompnamedesc', 'tiny_c4l');
        $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, '', PARAM_TEXT, null, 15);
        $settings->add($setting);

        // Icon.
        $fileareaid = 'customcompicon' . $componentindex;
        $name = 'tiny_c4l/customcompicon' . $componentindex;
        $title = get_string('customcompicon', 'tiny_c4l', $componentindex);
        $description = get_string('customcompicondesc', 'tiny_c4l');
        $options = ['accepted_types' => ['image'], 'maxfiles' => 1];
        $setting = new admin_setting_configstoredfile($name, $title, $description, $fileareaid, 0, $options);
        $settings->add($setting);

        // Text.
        $name = 'tiny_c4l/customcomptext' . $componentindex;
        $title = get_string('customcomptext', 'tiny_c4l', $componentindex);
        $description = get_string('customcomptextdesc', 'tiny_c4l');
        $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_TEXT);
        $settings->add($setting);

        // Code.
        $name = 'tiny_c4l/customcompcode' . $componentindex;
        $title = get_string('customcompcode', 'tiny_c4l', $componentindex);
        $description = get_string('customcompcodedesc', 'tiny_c4l');
        $setting = new admin_setting_configtextarea($name, $title, $description, '');
        $settings->add($setting);

        // Variant.
        $name = 'tiny_c4l/customcompvariant' . $componentindex;
        $title = get_string('customcompvariant', 'tiny_c4l', $componentindex);
        $description = get_string('customcompvariantdesc', 'tiny_c4l');
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $settings->add($setting);

        // Sortorder.
        $name = 'tiny_c4l/customcompsortorder' . $componentindex;
        $title = get_string('customcompsortorder', 'tiny_c4l', $componentindex);
        $description = get_string('customcompsortorderdesc', 'tiny_c4l');
        $setting = new admin_setting_configtext($name, $title, $description, $componentindex, PARAM_INT);
        $settings->add($setting);
    }

}
