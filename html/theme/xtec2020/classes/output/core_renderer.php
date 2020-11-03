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

namespace theme_xtec2020\output;

use moodle_url;
use custom_menu;
use cache;
use single_select;
use html_writer;
use context_system;
use stdClass;

defined('MOODLE_INTERNAL') || die;

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package     theme_xtec2020
 * @category    admin
 * @copyright   2020 Pau Ferrer Ocaña <pau@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class core_renderer extends \core_renderer {

    public function social_icons() {
        $cache = cache::make('core', 'htmlpurifier');
        if ($text = $cache->get('social_icons')) {
            return $text;
        }
        $content = "";
        if ($url = get_config('theme_xtec2020', 'website')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-globe" aria-hidden="true" title="Web"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'email')) {
            $content .= '<a href="mailto:' . $url . '" target="_blank"><i class="icon fa fa-envelope" aria-hidden="true"  title="' . get_string('email', 'theme_xtec2020', $url) . '"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'phone')) {
            $content .= '<a href="tel:' . $url . '" target="_blank"><i class="icon fa fa-phone" aria-hidden="true" title="' . get_string('phone', 'theme_xtec2020', $url) . '"></i></a>';
        }
        if (get_config('theme_xtec2020', 'nodes') && theme_xtec2020_is_service_enabled('nodes')) {
            $content .= '<a href="' . get_service_url('nodes') . '" target="_blank" class="agora-social icon nodes"><img src="' . $this->image_url('nodes-32', 'theme') . '" alt="" title="Nodes" /></a>';
        }
        if ($url = get_config('theme_xtec2020', 'whatsapp')) {
            $content .= '<a href="tel:' . $url . '" target="_blank"><i class="icon fa fa-whatsapp" aria-hidden="true" title="' . get_string('whatsapp_tel', 'theme_xtec2020', $url) . '"></i></a>';
        }

        if ($url = get_config('theme_xtec2020', 'facebook')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-facebook" aria-hidden="true" title="Facebook"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'twitter')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-twitter" aria-hidden="true" title="Twitter"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'instagram')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-instagram" aria-hidden="true" title="Instagram"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'flickr')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-flickr" aria-hidden="true" title="Flickr"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'linkedin')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-linkedin" aria-hidden="true" title="LinkedIn"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'pinterest')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-pinterest" aria-hidden="true" title="Pinterest"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'youtube')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-youtube" aria-hidden="true" title="Youtube"></i></a>';
        }
        if ($url = get_config('theme_xtec2020', 'skype')) {
            $url     = 'skype://' . $url;
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-skype" aria-hidden="true" title="Skype"></i></a>';
        }
        $cache->set('social_icons', $content);
        return $content;
    }

    /**
     * This code renders the custom lang items
     */
    protected function render_lang($lang, $langname, $url, $currentlang) {
        $class = 'lang fa';
        if ($langname === $currentlang) {
            $class   .= ' current-lang';
            $content = '<li title="' . $langname . '" class="' . $class . '">' . $lang . '</li>';
        } else {
            $content = '<li class="' . $class . '"><a href="' . $url . '" title="' . $langname . '">' . $lang . '</a></li>';
        }
        return $content;
    }

    public function lang_menu() {
        $strlang  = get_string('language');
        $currlang = current_language();
        $langs    = get_string_manager()->get_list_of_translations();

        if (sizeof($langs) > 5) {
            if (count($langs) < 2) {
                return '';
            }

            $s        = new single_select($this->page->url, 'lang', $langs, $currlang, null);
            $s->label = get_accesshide($strlang);
            $s->class = 'langmenu';
            $content  = $this->render($s);
        } else {
            if (isset($langs[$currlang])) {
                $currentlang = $langs[$currlang];
            } else {
                $currentlang = $strlang;
            }
            $content = '<ul>';
            foreach ($langs as $langtype => $langname) {
                $url     = new \moodle_url($this->page->url, ['lang' => $langtype]);
                $content .= $this->render_lang($langtype, $langname, $url, $currentlang);
            }
            $content .= '</ul>';
        }

        return $content;
    }

    public function header_logos() {
        $logos = '<a href="http://ensenyament.gencat.cat/ca/inici/" class="brand ensenyament d-none d-sm-inline"><img src="'.$this->image_url('departament', 'theme').'" alt="Departament d\'Educació" title="" /></a>';
        // XTEC logo moved to footer
        // $logos .= '<a href="http://xtec.gencat.cat" class="brand xtec d-none d-sm-inline"><img src="'.$this->image_url('xtec', 'theme').'" alt="Xarxa Telemàtica Educativa de Catalunya" title="" /></a>';

        return $logos;
    }

    public function footer_logos() {
        global $CFG;
        $logos = '<a href="http://ensenyament.gencat.cat/ca/inici/" class="brand ensenyament"><img src="'.$this->image_url('departament', 'theme').'" alt="Departament d\'Educació" title="" /></a>';
        $logos .= '<a href="http://xtec.gencat.cat" class="brand xtec"><img src="'.$this->image_url('xtec', 'theme').'" alt="Xarxa Telemàtica Educativa de Catalunya" title="" /></a>';
        if (isset($CFG->isagora) && $CFG->isagora) {
            $href = (isset($CFG->iseoi) && $CFG->iseoi) ? 'https://agora-eoi.xtec.cat/' : 'https://educaciodigital.cat/';
            $logos .= '<a href="'.$href.'" target="_blank" class="agora_footer"><img src="'.$this->image_url('logo_main', 'theme').'" alt="Eix" title="" /></a>';
        }
        $logos .= '<a href="https://moodle.org" target="_blank" class="moodle_footer" title="Moodle"><img src="'.$this->image_url('moodlelogo').'" alt="'.get_string('moodlelogo').'"/></a>';

        return $logos;
    }

    /**
     * Return the 'back' link that normally appears in the footer.
     *
     * @return string HTML fragment.
     */
    public function home_link() {
        global $CFG, $SITE;

        if ($this->page->pagetype == 'site-index') {
            return '';
        } else if (!empty($CFG->target_release) && $CFG->target_release != $CFG->release) {
            return '';
        } else if ($this->page->course->id == $SITE->id || strpos($this->page->pagetype, 'course-view') === 0) {
            return '<div class="homelink"><a href="' . $CFG->wwwroot . '/">' .
                    get_string('home') . '</a></div>';

        } else {
            return '<div class="homelink"><a href="' . $CFG->wwwroot . '/course/view.php?id=' . $this->page->course->id . '">' .
                    format_string($this->page->course->shortname, true, array('context' => $this->page->context)) . '</a></div>';
        }
    }

    /**
     * Wrapper for header elements.
     *
     * @return string HTML to display the main header.
     */
    public function full_header() {
        global $PAGE;

        if ($PAGE->include_region_main_settings_in_header_actions() && !$PAGE->blocks->is_block_present('settings')) {
            // Only include the region main settings if the page has requested it and it doesn't already have
            // the settings block on it. The region main settings are included in the settings block and
            // duplicating the content causes behat failures.
            $PAGE->add_header_action(html_writer::div(
                $this->region_main_settings_menu(),
                'd-print-none',
                ['id' => 'region-main-settings-menu']
            ));
        }

        $header = new \stdClass();
        $header->settingsmenu = $this->context_header_settings_menu();
        $header->contextheader = $this->context_header();
        $header->custom_menu = $this->custom_menu();
        $header->hasnavbar = empty($PAGE->layout_options['nonavbar']);
        $header->navbar = $this->navbar();
        $header->pageheadingbutton = $this->page_heading_button();
        $header->courseheader = $this->course_header();
        $header->headeractions = $PAGE->get_header_actions();
        $header->isloggedin = isloggedin();
        $header->gradesbutton = $this->course_grade_button();

        $blockshtml = $this->blocks('side-pre');
        $header->hasblocks = strpos($blockshtml, 'data-block=') !== false;
        return $this->render_from_template('core/full_header', $header);
    }

    public function course_grade_button() {
        global $CFG;

        if ($this->page->pagelayout == 'course' && theme_xtec2020_show_course_grades($this->page->course->showgrades, $this->page->course->id)) {
            $title  = get_string('grades');
            $url    = $CFG->wwwroot . '/grade/report/index.php?id=' . $this->page->course->id;
            $return = '<div class="agora_navbar">';
            $return .= html_writer::tag('a', html_writer::start_tag('i', ['class' => 'fa fa-fw fa-table']) .
                                             html_writer::end_tag('i') . $title, ['href' => $url, 'class' => 'edit-btn btn btn-primary', 'title' => $title]);
            $return .= '</div>';

            return $return;
        }

        return "";
    }

    /**
     * Whether we should display the main logo.
     *
     * @param int $headinglevel The heading level we want to check against.
     * @return bool
     */
    public function should_display_main_logo($headinglevel = 1) {
        return false;
    }

    /**
     * Renders a custom menu object (located in outputcomponents.php)
     *
     * The custom menu this method produces makes use of the YUI3 menunav widget
     * and requires very specific html elements and classes.
     *
     * @staticvar int $menucount
     * @param custom_menu $menu
     * @return string
     */
    protected function render_custom_menu(custom_menu $menu) {
        global $CFG;

        if (!$menu->has_children()) {
            return '';
        }

        $content = '';
        foreach ($menu->get_children() as $item) {
            $context = $item->export_for_template($this);
            $context = self::set_children_uniqids($context);
            $content .= $this->render_from_template('core/custom_menu_item', $context);
        }

        return $content;
    }

    public static function set_children_uniqids(object $context){
        $uniqid = 'id_'.rand(0, 0xFFFFFFFF);
        $context->uniqid = $uniqid;
        if($context->haschildren) {
            foreach ($context->children as $child) {
                self::set_children_uniqids($child);
            }
        }
        return $context;
    }
    
    public function agora_alerts() {
        static $renderized = false;

        if ($renderized) {
            return "";
        }

        $renderized = true;

        $cache = cache::make('core', 'htmlpurifier');

        $isadmin = isloggedin() && has_capability('moodle/site:config', context_system::instance());

        if ($isadmin) {
            $cachekey = 'agora_alerts_admin';
        } else {
            $cachekey = 'agora_alerts';
        }

        if ($text = $cache->get($cachekey)) {
            return $text;
        }

        $text         = "";
        $pluginconfig = get_config('theme_xtec2020');
        if ($isadmin) {
            if ($adminmsg = self::get_alert_message($pluginconfig, 'admin_alert')) {
                $text .= '<div class="admin_alert">' . $adminmsg;
                $text .= '<div style="font-size:smaller">' . get_string('show_admins', 'theme_xtec2020') . '</div></div>';
            }
        }

        if ($agoramsg = self::get_alert_message($pluginconfig, 'agora_alert')) {
            $text .= '<div class="all_alert">' . $agoramsg . '</div>';
        }

        if (!empty($text)) {

            $controlshtml = '<i class="iconsmall closeicon fa fa-remove" alt="" title="" id="close_agora_alerts"></i>';

            $id = 'agora-alerts';
            $context = new stdClass();
            $context->title = get_string('advices', 'theme_xtec2020');
            $context->skipid = 'agora_alerts_skip';
            $context->blockinstanceid = uniqid('fakeid-');
            $context->dockable = false;
            $context->id = $id;
            $context->hidden = false;
            $context->skiptitle = strip_tags($context->title);
            $context->showskiplink = !empty($context->skiptitle);
            $context->arialabel = $context->title;
            $context->ariarole = 'complementary';
            $context->class = 'block block_advices';
            $context->type = 'advices';
            $context->content = $text;
            $context->annotation = "";
            $context->footer = "";
            $context->hascontrols = true;
            if ($context->hascontrols) {
                $context->controls = $controlshtml;
            }

            $output = $this->render_from_template('core/block', $context);
            //$cache->set($cachekey, $output);
            return $output;
        }

        $cache->set($cachekey, "");
        return "";
    }

     public function blocks_for_region($region) {
        $output = $this->agora_alerts();
        $output .= parent::blocks_for_region($region);
        return $output;
    }

    public static function get_alert_message($pluginconfig, $configname) {
        $msgvar = $configname . '_message';
        if (!empty($pluginconfig->$msgvar)) {
            $time     = date("Ymd", time());
            $startvar = $configname . '_start';
            $endvar   = $configname . '_end';
            return $pluginconfig->$msgvar;
            if ((empty($pluginconfig->$startvar) || $time >= $pluginconfig->$startvar)
                && (empty($pluginconfig->$endvar) || $time <= $pluginconfig->$endvar)) {
                return $pluginconfig->$msgvar;
            }
        }
        return false;
    }

}