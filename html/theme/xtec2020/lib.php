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
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_xtec2020
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function theme_xtec2020_clean_cache(){
    $cache = cache::make('core', 'htmlpurifier');
    $cache->delete('social_icons', true);
    $cache->delete('agora_alerts', true);
}

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_xtec2020_get_main_scss_content($theme) {
    global $CFG;

    return file_get_contents($CFG->dirroot . '/theme/xtec2020/scss/default.scss');
}

/**
 * Inject additional SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_xtec2020_get_extra_scss($theme) {
    $content = '';
    $imageurl = $theme->setting_file_url('logo', 'logo');

    // Sets the background image, and its settings.
    if (!empty($imageurl)) {
        $content .= "#page-header { background-image: url('$imageurl'); }";
    }

    // Always return the background image with the scss when we have it.
    return $content;
}

/**
 * Get compiled css.
 *
 * @return string compiled css
 */
function theme_xtec2020_get_precompiled_css() {
    global $CFG;
    return file_get_contents($CFG->dirroot . '/theme/xtec2020/style/custom.css');
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return array
 */
function theme_xtec2020_get_pre_scss($theme) {
    global $CFG;

    $scss = '';
    $configurable = [
        // Config key => [variableName, ...].
        'maincolor' => ['maincolor', 'primary'],
        'fontcolor' => ['fontcolor'],
        'linkscolor' => ['linkscolor'],
        'fontstyle' => ['fontfamily'],
        'texttransform' => ['texttransform'],
        'headerbg' => ['headerbg'],
        'colorcontrast' => ['colorcontrast'],
    ];

    $theme->settings->maincolor = !empty($theme->settings->maincolor) ? $theme->settings->maincolor : '#AC2013';
    $theme->settings->fontcolor = !empty($theme->settings->fontcolor) ? $theme->settings->fontcolor : '#303030';
    $theme->settings->linkscolor = !empty($theme->settings->linkscolor) ? $theme->settings->linkscolor : '#AC2013';
    $theme->settings->headerbg = !empty($theme->settings->headerbg) ? $theme->settings->headerbg : '#f4f4f4';
    if (!empty($theme->settings->colorset) && $theme->settings->colorset == 'nodes' &&
        theme_xtec2020_is_service_enabled('nodes')) {
        $colors = get_colors_from_nodes(true);
        if ($colors) {
            $theme->settings->maincolor = $colors['color'];
            $theme->settings->fontcolor = $colors['color'];
            $theme->settings->linkscolor = $colors['color'];
            $theme->settings->headerbg = $colors['logo_color'];
        }
    }

    // Decide foreground color depending on the other
    $theme->settings->colorcontrast = theme_xtec2020_get_contrast_YIQ($theme->settings->maincolor);

    if (theme_xtec2020_get_YIQ($theme->settings->fontcolor) > 135) {
        $theme->settings->fontcolor = 'black';
    }

    if (theme_xtec2020_get_YIQ($theme->settings->linkscolor) > 135) {
        $theme->settings->linkscolor = 'black';
    }

    switch ($theme->settings->fontstyle) {
        case 'lligada':
            $theme->settings->fontstyle = 'Abecedario !important';
            break;
        case 'majuscules':
            $theme->settings->texttransform = 'uppercase';
            break;
        default:
        case 'normal':
            $theme->settings->fontstyle = null;
            break;
    }


    // Prepend variables first.
    foreach ($configurable as $configkey => $targets) {
        $value = isset($theme->settings->{$configkey}) ? $theme->settings->{$configkey} : null;
        if (empty($value)) {
            continue;
        }
        array_map(function($target) use (&$scss, $value) {
            $scss .= '$' . $target . ': ' . $value . ";\n";
        }, (array) $targets);
    }

    if (!empty($theme->settings->fontsize)) {
        $scss .= '$font-size-base: ' . (1 / 100 * $theme->settings->fontsize) . "rem !default;\n";
    }

    // Append pre-scss.
    if (!empty($theme->settings->customcss)) {
        $scss .= $theme->settings->customcss;
    }

    return $scss;
}

// Returns if black or white is the color with more contrast over the hexcolor using the YIQ equation
function theme_xtec2020_get_contrast_YIQ($hexcolor){
    $yiq = theme_xtec2020_get_YIQ($hexcolor);
    return ($yiq >= 128) ? 'black' : 'white';
}


// Get the YIQ number of the color
// http://en.wikipedia.org/wiki/YIQ
function theme_xtec2020_get_YIQ($hexcolor){
    $r = hexdec(substr($hexcolor, 1, 2));
    $g = hexdec(substr($hexcolor, 3, 2));
    $b = hexdec(substr($hexcolor, 5, 2));
    return (int)((($r*299)+($g*587)+($b*114))/1000);
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_xtec2020_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('xtec2020');
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

function theme_xtec2020_is_service_enabled($service) {
    if (function_exists('is_service_enabled')) {
        return is_service_enabled($service);
    }
    return false;
}

function theme_xtec2020_show_course_grades($showgrades, $courseid) {

    if (empty($showgrades)) {
        return false;
    }

    $coursecontext = context_course::instance($courseid, MUST_EXIST);
    // Show reports
    if (has_capability('moodle/grade:viewall', $coursecontext)) {
        return true;
    }
    if ($reports = core_component::get_plugin_list('gradereport')) {     // Get all installed reports
        arsort($reports); // user is last, we want to test it first
        foreach ($reports as $plugin => $pluginname) {
            if (has_capability('gradereport/' . $plugin . ':view', $coursecontext)) {
                // Stop when the first visible plugin is found
                return true;
            }
        }
    }

    return false;
}