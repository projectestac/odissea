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
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Returns the main SCSS content.
 *
 * @return string
 */
function theme_xtecboost_get_main_scss_content(): string {
    global $CFG;
    return file_get_contents($CFG->dirroot . '/theme/xtecboost/scss/default.scss');
}

/**
 * Inject additional SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_xtecboost_get_extra_scss($theme): string {
    return '';
}

/**
 * Get compiled css.
 *
 * @return string compiled css
 */
function theme_xtecboost_get_precompiled_css(): string {
    return '';
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return array|string
 */
function theme_xtecboost_get_pre_scss($theme): string {
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

    $theme->settings->maincolor = !empty($theme->settings->maincolor) ? $theme->settings->maincolor : '#FF494E';
    $theme->settings->fontcolor = !empty($theme->settings->fontcolor) ? $theme->settings->fontcolor : '#007377';
    $theme->settings->linkscolor = !empty($theme->settings->linkscolor) ? $theme->settings->linkscolor : '#910048';
    $theme->settings->headerbg = !empty($theme->settings->headerbg) ? $theme->settings->headerbg : '#F8F8F8';

    if (!empty($theme->settings->colorset) && $theme->settings->colorset === 'nodes' && theme_xtecboost_is_service_enabled('nodes')) {
        $colors = get_colors_from_nodes(true);
        if ($colors) {
            $theme->settings->maincolor = $colors['color'];
            $theme->settings->fontcolor = $colors['color'];
            $theme->settings->linkscolor = $colors['color'];
            $theme->settings->headerbg = $colors['logo_color'];
        }
    }

    // Decide foreground color depending on the other
    $theme->settings->colorcontrast = theme_xtecboost_get_contrast_YIQ($theme->settings->maincolor);

    if (theme_xtecboost_get_YIQ($theme->settings->fontcolor) > 135) {
        $theme->settings->fontcolor = 'black';
    }

    if (theme_xtecboost_get_YIQ($theme->settings->linkscolor) > 135) {
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
        $value = $theme->settings->{$configkey} ?? null;
        if (empty($value)) {
            continue;
        }
        array_map(static function ($target) use (&$scss, $value) {
            $scss .= '$' . $target . ': ' . $value . ";\n";
        }, $targets);
    }

    if (!empty($theme->settings->fontsize)) {
        $scss .= '$fontsize: ' . (1 / 100 * $theme->settings->fontsize) . "rem !default;\n";
    } else {
        $scss .= '$fontsize: 0.9375rem !default;' . "\n";
    }

    if (!empty($theme->settings->coursecontentmaxwidth)) {
        $coursecontentmaxwidth = (int)$theme->settings->coursecontentmaxwidth;
        if ($coursecontentmaxwidth >= 500 && $coursecontentmaxwidth <= 1500) {
            $scss .= '$course-content-maxwidth: ' . $theme->settings->coursecontentmaxwidth . 'px !default;' . "\n";
        } else {
            $scss .= '$course-content-maxwidth: 1000px !default;' . "\n";
        }
    } else {
        $scss .= '$course-content-maxwidth: 1000px !default;' . "\n";
    }

    // Append pre-scss.
    if (!empty($theme->settings->customcss)) {
        $scss .= $theme->settings->customcss;
    }

    return $scss;
}

// Returns if black or white is the color with more contrast over the hexcolor using the YIQ equation
function theme_xtecboost_get_contrast_YIQ($hexcolor): string {
    $yiq = theme_xtecboost_get_YIQ($hexcolor);
    return ($yiq >= 128) ? 'black' : 'white';
}

// Get the YIQ number of the color
// http://en.wikipedia.org/wiki/YIQ
function theme_xtecboost_get_YIQ($hexcolor): int {
    $r = hexdec(substr($hexcolor, 1, 2));
    $g = hexdec(substr($hexcolor, 3, 2));
    $b = hexdec(substr($hexcolor, 5, 2));

    return (int)((($r * 299) + ($g * 587) + ($b * 114)) / 1000);
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
 * @throws moodle_exception
 * @return bool
 */
function theme_xtecboost_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = []): bool {
    if ($context->contextlevel === CONTEXT_SYSTEM && $filearea === 'logo') {
        return theme_config::load('xtecboost')->setting_file_serve('logo', $args, $forcedownload, $options);
    }

    send_file_not_found();
}

function theme_xtecboost_is_service_enabled($service): bool {
    if (function_exists('is_service_enabled')) {
        return is_service_enabled($service);
    }
    return false;
}

/**
 * Returns the name of the XTEC service currently running, with an optional prefix.
 * Current valid options are "eix", "alexandria" , "odissea" and "eoi".
 *
 * @param string $prefix
 * @throws dml_exception
 * @return string
 */
function theme_xtecboost_get_xtec_type(string $prefix = ''): string {
    global $CFG;

    $type = '';

    if ($setting = get_config('theme_xtecboost', 'xtec_type')) {
        $type = $prefix . $setting;
    } elseif (isset($CFG->isalexandria) && $CFG->isalexandria) {
        $type = $prefix . 'alexandria';
    } elseif (isset($CFG->isodissea) && $CFG->isodissea) {
        $type = $prefix . 'odissea';
    } elseif (isset($CFG->iseoi) && $CFG->iseoi) {
        $type = $prefix . 'eoi';
    } elseif (isset($CFG->isagora) && $CFG->isagora) {
        $type = $prefix . 'eix';
    }

    return $type;
} 
