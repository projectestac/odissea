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

namespace theme_xtecboost\output;

use cache;
use get_string;
use single_select;

defined('MOODLE_INTERNAL') || die;

class core_renderer extends \theme_boost\output\core_renderer {

    public function favicon() {
        global $CFG;
        // TODO: Use theme/image.php instead of a direct path!
        $type = theme_xtecboost_get_xtec_type('_');
        return $CFG->wwwroot . '/theme/' . $this->page->theme->name . '/pix/favicon' . $type . '.ico';
    }

    public function social_icons() {
        $cache = cache::make('core', 'htmlpurifier');
        if ($text = $cache->get('social_icons')) {
            return $text;
        }
        $content = '';
        if ($url = get_config('theme_xtecboost', 'website')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-globe" aria-hidden="true" title="Web"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'email')) {
            $content .= '<a href="mailto:' . $url . '" target="_blank"><i class="icon fa fa-envelope" aria-hidden="true"  title="' . get_string('email', 'theme_xtecboost', $url) . '"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'phone')) {
            $content .= '<a href="tel:' . $url . '" target="_blank"><i class="icon fa fa-phone" aria-hidden="true" title="' . get_string('phone', 'theme_xtecboost', $url) . '"></i></a>';
        }
        if (get_config('theme_xtecboost', 'nodes') && theme_xtecboost_is_service_enabled('nodes')) {
            $content .= '<a href="' . get_service_url('nodes') . '" target="_blank" class="agora-social icon nodes"><img src="' . $this->image_url('nodes-32', 'theme') . '" alt="" title="Nodes" /></a>';
        }
        if ($url = get_config('theme_xtecboost', 'whatsapp')) {
            $content .= '<a href="tel:' . $url . '" target="_blank"><i class="icon fa fa-whatsapp" aria-hidden="true" title="' . get_string('whatsapp_tel', 'theme_xtecboost', $url) . '"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'facebook')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-facebook" aria-hidden="true" title="Facebook"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'twitter')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-twitter" aria-hidden="true" title="Twitter"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'instagram')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-instagram" aria-hidden="true" title="Instagram"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'flickr')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-flickr" aria-hidden="true" title="Flickr"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'linkedin')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-linkedin" aria-hidden="true" title="LinkedIn"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'pinterest')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-pinterest" aria-hidden="true" title="Pinterest"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'youtube')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="icon fa fa-youtube" aria-hidden="true" title="Youtube"></i></a>';
        }
        if ($url = get_config('theme_xtecboost', 'skype')) {
            $url = 'skype://' . $url;
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
            $class .= ' current-lang';
            $content = '<li title="' . $langname . '" class="' . $class . '">' . $lang . '</li>';
        } else {
            $content = '<li class="' . $class . '"><a href="' . $url . '" title="' . $langname . '">' . $lang . '</a></li>';
        }
        return $content;
    }

    public function lang_menu() {
        $strlang = get_string('language');
        $currlang = current_language();
        $langs = get_string_manager()->get_list_of_translations();

        if (count($langs) < 2) {
            return '';
        }

        if (count($langs) > 5) {
            $s = new single_select($this->page->url, 'lang', $langs, $currlang, null);
            $s->label = get_accesshide($strlang);
            $s->class = 'langmenu';
            $content = $this->render($s);
        } else {
            if (isset($langs[$currlang])) {
                $currentlang = $langs[$currlang];
            } else {
                $currentlang = $strlang;
            }
            $content = '<ul>';
            foreach ($langs as $langtype => $langname) {
                $url = new \moodle_url($this->page->url, ['lang' => $langtype]);
                $content .= $this->render_lang($langtype, $langname, $url, $currentlang);
            }
            $content .= '</ul>';
        }

        return $content;
    }

    /**
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function footer_logos(): string {
        $xtec_type = theme_xtecboost_get_xtec_type();
        $logos = '<a href="https://educacio.gencat.cat/ca/inici/" class="brand ensenyament"><img src="' . $this->image_url('departament', 'theme') . '" alt="Departament d\'Educació" title="" /></a>';
        $logos .= '<a href="https://xtec.gencat.cat/ca/inici" class="brand xtec"><img src="' . $this->image_url('xtec', 'theme') . '" alt="Xarxa Telemàtica Educativa de Catalunya" title="" /></a>';

        if ($xtec_type === 'alexandria') {
            $href = 'https://alexandria.xtec.cat/';
            $logos .= '<a href="' . $href . '" target="_blank" class="agora_footer"><img src="' . $this->image_url('logo_main_alexandria', 'theme') . '" alt="Alexandria" title="" /></a>';
        } elseif ($xtec_type === 'odissea') {
            $href = 'https://odissea.xtec.cat/';
            $logos .= '<a href="' . $href . '" target="_blank" class="agora_footer"><img src="' . $this->image_url('logo_main_odissea', 'theme') . '" alt="Odissea" title="" /></a>';
        } elseif ($xtec_type === 'eoi') {
            $href = 'https://agora-eoi.xtec.cat/';
            $logos .= '<a href="' . $href . '" target="_blank" class="agora_footer"><img src="' . $this->image_url('logo_main_eoi', 'theme') . '" alt="Àgora-EOI" title="" /></a>';
        } elseif ($xtec_type === 'eix') {
            $href = 'https://educaciodigital.cat/';
            $logos .= '<a href="' . $href . '" target="_blank" class="agora_footer"><img src="' . $this->image_url('logo_main_eix', 'theme') . '" alt="Eix" title="" /></a>';
        }

        $logos .= '<a href="https://moodle.org" target="_blank" class="moodle_footer" title="Moodle"><img src="' . $this->image_url('moodlelogo') . '" alt="' . get_string('moodlelogo') . '"/></a>';

        return $logos;
    }

}
