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
 * @package   theme_xtec2
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function theme_xtec2_clean_cache(){
    $cache = cache::make('core', 'htmlpurifier');
    $cache->delete('social_icons',true);
    $cache->delete('agora_alerts',true);
}

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_xtec2_process_css($css, $theme) {
    global $CFG;

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_xtec2_set_logo($css, $logo);


    $color2 = !empty($theme->settings->color2) ? $theme->settings->color2 : '#AC2013';
    $color4 = !empty($theme->settings->color4) ? $theme->settings->color4 : '#303030';
    $color5 = !empty($theme->settings->color5) ? $theme->settings->color5 : '#AC2013';
    $logocolor = !empty($theme->settings->logo_color) ? $theme->settings->logo_color : '#675A70';
    if (!empty($theme->settings->colorset) && $theme->settings->colorset == 'nodes' &&
        theme_xtec2_is_service_enabled('nodes')) {
        $colors = get_colors_from_nodes(true);
        if ($colors) {
            $color2 = $colors['color'];
            $color4 = $colors['color'];
            $color5 = $colors['color'];
            $logocolor = $colors['logo_color'];
        }
    }

    // Set the tint logo color
    $transparency = !empty($theme->settings->logo_color_transparency) ? $theme->settings->logo_color_transparency : 0;
    $css = theme_xtec2_set_logo_tint($css, $logocolor, $transparency);

    // Set the font size
    $fontsize = !empty($theme->settings->fontsize) ? $theme->settings->fontsize : 'mitjana';
    $css = theme_xtec2_set_fontsize($css, $fontsize);

    // Set the font style
    $fontstyle = !empty($theme->settings->fontstyle) ? $theme->settings->fontstyle : 'normal';
    $css = theme_xtec2_set_fontstyle($css, $fontstyle);

    $css = theme_xtec2_set_color($css, 2, $color2);

    // Decide foreground color depending on the other
    $color3 = theme_xtec2_get_contrast_YIQ($color2);
    $css = theme_xtec2_set_color($css, 3, $color3);
    if ($color3 == 'black') {
        $anticolor3 = 'rgba(255,255,255,0.5)';
        $invert = '';
    } else {
        $anticolor3 = 'rgba(0,0,0,0.5)';
        $invert = 'invert(100%)';
    }
    $css = theme_xtec2_set_color($css, '3a', $anticolor3);
    $css = theme_xtec2_set_color($css, '3b', $invert);

    if (theme_xtec2_get_YIQ($color4) > 135) {
        $color4 = 'black';
    }
    $css = theme_xtec2_set_color($css, 4, $color4);

    if (theme_xtec2_get_YIQ($color5) > 135) {
        $color5 = 'black';
    }
    $css = theme_xtec2_set_color($css, 5, $color5);


    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_xtec2_set_customcss($css, $customcss);

    // Fix for @font-face: when style sheets are minimized, @font-face only
    // work if the URL are absolute
    $css = str_replace('[[url]]', $CFG->wwwroot, $css);

    return $css;
}

// Returns if black or white is the color with more contrast over the hexcolor using the YIQ equation
function theme_xtec2_get_contrast_YIQ($hexcolor){
    $yiq = theme_xtec2_get_YIQ($hexcolor);
    return ($yiq >= 128) ? 'black' : 'white';
}


// Get the YIQ number of the color
// http://en.wikipedia.org/wiki/YIQ
function theme_xtec2_get_YIQ($hexcolor){
    $r = hexdec(substr($hexcolor,1,2));
    $g = hexdec(substr($hexcolor,3,2));
    $b = hexdec(substr($hexcolor,5,2));
    return (int)((($r*299)+($g*587)+($b*114))/1000);
}

function theme_xtec2_set_color($css, $colornumber, $color) {
    $tag = '[[setting:color'.$colornumber.']]';
    $css = str_replace($tag, $color, $css);
    return $css;
}

function theme_xtec2_set_logo_tint($css, $color, $transparency) {
    $tag = '[[setting:logo_color]]';
    if($transparency >= 100){
        $css = str_replace($tag, $color, $css);
    } else if($transparency <= 0) {
        $css = str_replace($tag, 'none', $css);
    } else {
        if ($color[0] == '#') {
            $color = substr( $color, 1);
        }
        if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
            $css = str_replace($tag, 'none', $css);
            return $css;
        }
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        $color = 'rgba('.implode(",",$rgb).', 0.'.$transparency.')';
        $css = str_replace($tag, $color, $css);
    }
    return $css;
}

function theme_xtec2_set_fontsize($css, $fontsize) {
    $tag = '[[setting:fontsize]]';
    switch ($fontsize) {
        case 'moltpetita':
            $fontsize = '10px';
            break;
        case 'petita':
            $fontsize = '12px';
            break;
        case 'gran':
            $fontsize = '16px';
            break;
        case 'moltgran':
            $fontsize = '18px';
            break;
        default:
        case 'mitjana':
            $fontsize = '14px';
            break;
    }

    $css = str_replace($tag, $fontsize, $css);

    return $css;
}

function theme_xtec2_set_fontstyle($css, $fontstyle) {
    $tag = '[[setting:fontstyle]]';
    switch ($fontstyle) {
        case 'lligada':
            $fontstyle = 'font-family: Abecedario!important;';
            break;
        case 'majuscules':
            $fontstyle = 'text-transform: uppercase;';
            break;
        default:
        case 'normal':
            $fontstyle = 'font-family: arial, helvetica, clean, sans-serif;';
            break;
    }

    $css = str_replace($tag, $fontstyle, $css);

    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_xtec2_set_logo($css, $logo) {
    global $OUTPUT;

    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (empty($replacement)) {
        $replacement = $OUTPUT->pix_url('top','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
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
function theme_xtec2_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('xtec2');
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_xtec2_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Returns an object containing HTML for the areas affected by settings.
 *
 * @param renderer_base $output Pass in $OUTPUT.
 * @param moodle_page $page Pass in $PAGE.
 * @return stdClass An object with the following properties:
 *      - navbarclass A CSS class to use on the navbar. By default ''.
 *      - heading HTML to use for the heading. A logo if one is selected or the default heading.
 *      - footnote HTML to use as a footnote. By default ''.
 */
function theme_xtec2_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;

    $return->navbarclass = "";

    if (!empty($page->theme->settings->logo)) {
        $return->heading = html_writer::link($CFG->wwwroot, '', array('title' => get_string('home'), 'class' => 'logo'));
    } else {
        $return->heading = $output->page_heading();
    }

    $return->importcss = "";
    if (!empty($page->theme->settings->importcss)) {
        $return->importcss = '<link rel="stylesheet" type="text/css" href="'.$page->theme->settings->importcss.'">';
    }

    $return->footnote = "";
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="footnote text-center">'.$page->theme->settings->footnote.'</div>';
    }

    return $return;
}

function theme_xtec2_render_dropdown_menu($node, $attrs = array(), $expansionlimit = null, array $options = array()) {
    global $CFG, $OUTPUT, $PAGE;

    if (!$node) {
        return "";
    }

    if (!$node->display && !$node->contains_active_node()) {
        return '';
    }

    $contenttext = $node->get_content();

    if ($contenttext === '') {
        return "";
    }

    $title = $node->get_title();
    $liclasses = "";
    $isexpandable = (empty($expansionlimit) || ($node->type > navigation_node::TYPE_ACTIVITY || $node->type < $expansionlimit) || ($node->contains_active_node() && ($node->children && $node->children->count() > 0)));

    $attributes = array();
    if ($title !== '') {
        $attributes['title'] = $title;
    }

    if ($node->icon instanceof renderable && !$node->hideicon && $node->icon->pix != 'i/navigationitem') {
        $icon = $OUTPUT->render($node->icon);
    } else {
        $icon = "";
    }

    if (is_string($node->action) || empty($node->action) || ($node->type === navigation_node::TYPE_CATEGORY && empty($options['linkcategories']))) {
        $action = $icon.$contenttext;
    } else if ($node->action instanceof action_link) {
        // TODO: to be replaced with something else
        $link = $node->action;
        $link->text = $icon.$link->text;
        $link->attributes = array_merge($link->attributes, $attributes);
        $action = $OUTPUT->render($link);
    } else if ($node->action instanceof moodle_url) {
        $action = html_writer::link($node->action, $icon.$contenttext, $attributes);
    } else {
        return "";
    }

    // this applies to the li item which contains all child lists too
    $content = $action;

    if ($node->hidden) {
        $liclasses = 'disabled';
    }

    if ($isexpandable) {
        $children = array();

        foreach ($node->children as $child) {
            $children[] = theme_xtec2_render_dropdown_menu($child, array(), $expansionlimit, $options);
        }

        if (!empty($children)) {
            if ((!is_string($node->action) && !empty($node->action))) {
                array_unshift($children, html_writer::tag('li', $action));
            }
            $content = '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$contenttext.'</a>';
            $content .= html_writer::tag('ul', implode("\n", $children), array('class' => 'dropdown-menu'));
            $liclasses .= ' dropdown-submenu pull-left';
        } else if (empty($node->action)) {
            // Loaded by ajax but no action
            return "";
        } else {
            // Loaded by ajax but have action
        }
    }

    return html_writer::tag('li', $content, array('class' => $liclasses));
}

function theme_xtec2_is_service_enabled($service) {
    if (function_exists('is_service_enabled')) {
        return is_service_enabled($service);
    }
    return false;
}

function theme_xtec2_show_course_grades($showgrades, $courseid) {

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