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

namespace tiny_c4l;

use context;
use editor_tiny\plugin;
use editor_tiny\plugin_with_buttons;
use editor_tiny\plugin_with_configuration;
use editor_tiny\plugin_with_menuitems;

/**
 * Tiny c4l plugin for Moodle.
 *
 * @package    tiny_c4l
 * @copyright  2022 Marc Català <reskit@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class plugininfo extends plugin implements
    plugin_with_buttons,
    plugin_with_menuitems,
    plugin_with_configuration {

    /**
     * Get the editor buttons for this plugins
     *
     * @return array
     */
    public static function get_available_buttons(): array {
        return [
            'tiny_c4l/c4l',
        ];
    }
    /**
     * Get the dropdown menu items for this plugin
     *
     * @return array
     */
    public static function get_available_menuitems(): array {
        return [
            'tiny_c4l/c4l',
        ];
    }

    /**
     * Get the configuration for the plugin, capabilities and
     * config (from settings.php)
     *
     * @param context $context
     * @param array $options
     * @param array $fpoptions
     * @param \editor_tiny\editor|null $editor
     * @return void
     *
     * @return array
     */
    public static function get_plugin_configuration_for_context(
        context $context,
        array $options,
        array $fpoptions,
        ?\editor_tiny\editor $editor = null
    ): array {

        $config = get_config('tiny_c4l');
        $viewc4l = has_capability('tiny/c4l:viewplugin', $context);
        $showpreview = get_config('tiny_c4l', 'enablepreview');
        $isstudent = !has_capability('gradereport/grader:view', $context);
        $allowedcomps = [];
        if ($isstudent) {
            $aimedcomps = explode(',', get_config('tiny_c4l', 'aimedatstudents'));
            $notintendedcomps = explode(',', get_config('tiny_c4l', 'notintendedforstudents'));
            $allowedcomps = array_merge($aimedcomps, $notintendedcomps);
        }

        // Get CSS preview.
        $previewcss = $config->custompreviewcss ?? '';

        // Get custom components.
        $customcomponents = self::get_custom_components($config);

        return [
            'isstudent' => $isstudent,
            'allowedcomps' => $allowedcomps,
            'showpreview' => ($showpreview == '1'),
            'viewc4l' => $viewc4l,
            'previewcss' => $previewcss,
            'customcomps' => $customcomponents,
        ];
    }

    /**
     * Get the custom components.
     *
     * @param  stdClass $config tiny_c4l config
     * @return array
     */
    public static function get_custom_components(\stdClass $config) {
        global $OUTPUT;

        $customcomponents = [];
        if ($config->customcompcount > 0) {
            $context = \context_system::instance();
            $customfiles = [];
            if ($config->customimagesbank) {
                // Get filearea.
                $fs = get_file_storage();

                // Get all files from filearea.
                $files = $fs->get_area_files($context->id, 'tiny_c4l', 'customimagesbank',
                        false, 'itemid', false);
                foreach ($files as $file) {
                    $customfiles[$file->get_filename()] = $file;
                }
            }
            for ($i = 1; $i <= $config->customcompcount; $i++) {
                $compcode   = "customcompcode{$i}";
                $compenable = "customcompenable{$i}";
                $compname   = "customcompname{$i}";
                if ($config->$compenable === '1'
                    && !empty(trim($config->$compname))
                    && !empty(trim($config->$compcode))) {

                    // Component parameters.
                    $compicon  = "customcompicon{$i}";
                    $comptext  = "customcomptext{$i}";
                    $compvar   = "customcompvariant{$i}";
                    $compsort  = "customcompsortorder{$i}";

                    if (!empty($config->$compicon)) {
                        $icon = \moodle_url::make_pluginfile_url($context->id, 'tiny_c4l',
                            "customcompicon{$i}", 0, '/', basename($config->$compicon));
                    } else {
                        $icon = $OUTPUT->image_url('c4l_customcomponent_icon', 'tiny_c4l');
                    }

                    // Replace {} before searching for images and cleaning code (FORMAT_HTML).
                    $html = str_replace('{{CUSTOMCLASS}}', '~~CUSTOMCLASS~~', $config->$compcode);
                    $html = str_replace('{{PLACEHOLDER}}', '~~PLACEHOLDER~~', $html);

                    // Set url images.
                    $html = preg_replace_callback('/{{([^}]*)}}/',
                        function ($matches) use ($customfiles) {
                            if (isset($matches[1]) && isset($customfiles[$matches[1]])) {
                                $file = $customfiles[$matches[1]];
                                $fileurl = \moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(),
                                    $file->get_filearea(), $file->get_itemid(), $file->get_filepath(),
                                    $file->get_filename(), false)->out();

                                return $fileurl;
                            } else {
                                return '';
                            }
                        },
                        $html
                    );

                    // Clean HTML code.
                    $html = format_text($html, FORMAT_HTML);
                    $html = preg_replace('/ style=("|\')(.*?)("|\')/', '', $html);

                    // Restore {}.
                    $html = str_replace('~~CUSTOMCLASS~~', '{{CUSTOMCLASS}}', $html);
                    $html = str_replace('~~PLACEHOLDER~~', '{{PLACEHOLDER}}', $html);

                    $key = count($customcomponents);
                    $customcomponents[$key]['id'] = $i;
                    $customcomponents[$key]['name'] = 'customcomp' . $i;
                    $customcomponents[$key]['buttonname'] = $config->$compname;
                    $customcomponents[$key]['icon'] = $icon->out();
                    $customcomponents[$key]['code'] = $html;
                    $customcomponents[$key]['text'] = $config->$comptext ?? '';
                    $customcomponents[$key]['variants'] = $config->$compvar === '1';
                    $customcomponents[$key]['sortorder'] = $config->$compsort;
                }
            }

            // Sort components.
            usort($customcomponents, function($a, $b) {
                return $a['sortorder'] <=> $b['sortorder'];
            });
        }

        return $customcomponents;
    }
}
