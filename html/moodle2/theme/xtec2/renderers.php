<?php
require_once($CFG->dirroot . '/theme/bootstrapbase/renderers/core_renderer.php');

class theme_xtec2_core_renderer extends theme_bootstrapbase_core_renderer {

    public function user_picture(stdClass $user, array $options = null) {
        $class = 'img-circle userpic';

        if (!is_array($options)) {
            $options = [];
        }

        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }

        $options['class'] = $class;
        return parent::user_picture($user, $options);
    }

    public function messages_menu() {
        global $CFG;
        if (isloggedin() && !isguestuser()) {
            if (file_exists($CFG->dirroot . '/local/agora/message_notifier/global.lib.php')) {
                require_once($CFG->dirroot . '/local/agora/message_notifier/global.lib.php');
                if (function_exists('message_notifier_get_badge')) {
                    return message_notifier_get_badge();
                }
            }
        }
        return "";
    }

    public function standard_end_of_body_html() {
        global $CFG;

        // This function is normally called from a layout.php file in {@link core_renderer::header()}
        // but some of the content won't be known until later, so we return a placeholder
        // for now. This will be replaced with the real content in {@link core_renderer::footer()}.
        $output = '';
        if (!empty($CFG->additionalhtmlfooter)) {
            $output .= "\n" . $CFG->additionalhtmlfooter;
        }
        $output .= $this->unique_end_html_token;

        $jsmodule = [
            'name' => 'theme_xtec2',
            'fullpath' => '/theme/xtec2/javascript/xtec2_footer.js',
            'requires' => ['base'],
        ];
        $this->page->requires->js_init_call('M.theme_xtec2.init', [], true, $jsmodule);

        return $output;
    }

    /**
     * Overriding the custom_menu function ensures the custom menu is
     * always shown, even if no menu items are configured in the global
     * theme settings page.
     */
    public function custom_menu($custommenuitems = '') {
        global $CFG;

        if (!empty($CFG->custommenuitems)) {
            $custommenuitems .= $CFG->custommenuitems;
        }
        $custommenu = new custom_menu($custommenuitems, current_language());
        return $this->render_custom_menu($custommenu);
    }

    /**
     * This renders the bootstrap top menu.
     *
     * This renderer is needed to enable the Bootstrap style navigation.
     */
    protected function render_custom_menu(custom_menu $menu) {
        $content = '';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return (!empty($content)) ? '<ul class="nav">' . $content . '</ul>' : "";
    }

    /**
     * This code renders the custom menu items for the
     * bootstrap dropdown menu.
     */
    protected function render_custom_menu_item(custom_menu_item $menunode, $level = 0) {
        static $submenucount = 0;

        if ($menunode->has_children()) {

            if ($level == 1) {
                $class = 'dropdown pull-left';
            } else {
                $class = 'dropdown-submenu';
            }

            if ($menunode === $this->language) {
                $class .= ' langmenu';
            }
            $content = html_writer::start_tag('li', ['class' => $class]);
            // If the child has menus render it as a sub menu.
            $submenucount++;
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#cm_submenu_' . $submenucount;
            }
            $content .= html_writer::start_tag('a', ['href' => $url, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'title' => $menunode->get_title()]);
            $content .= $menunode->get_text();
            if ($level == 1) {
                $content .= '<b class="caret"></b>';
            }
            $content .= '</a>';
            $content .= '<ul class="dropdown-menu">';
            foreach ($menunode->get_children() as $menunode) {
                $content .= $this->render_custom_menu_item($menunode, 0);
            }
            $content .= '</ul>';
        } else {
            $content = '<li>';
            // The node doesn't have children so produce a final menuitem.
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#';
            }
            $content .= html_writer::link($url, $menunode->get_text(), ['title' => $menunode->get_title()]);
        }
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

    public function main_menu() {
        global $CFG;

        if (!isloggedin()) {
            return "";
        }

        $content = '<ul class="nav">';

        $currentcourse = $this->page->navigation->get('currentcourse');
        if ($currentcourse && $currentcourse->has_children()) {
            $menucontent = "";
            foreach ($currentcourse->children as $child) {
                foreach ($child->children as $child2) {
                    $menucontent .= theme_xtec2_render_dropdown_menu($child2);
                }
            }
            if (!empty($menucontent)) {
                $content .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" title="' . $currentcourse->get_content() . '">';
                $content .= $currentcourse->get_content() . '<b class="caret"></b></a><ul class="dropdown-menu pull-right">';
                $content .= $menucontent;
                $content .= '</ul>';
            }
        }

        $navigation = $this->page->navigation;
        if ($navigation && $navigation->has_children()) {
            $menucontent = "";
            foreach ($navigation->children as $child) {
                if ($child->key != 'currentcourse' && $child->key != 'home' && $child->key != 'myprofile') {
                    $menucontent .= theme_xtec2_render_dropdown_menu($child);
                }
            }
            if (!empty($menucontent)) {
                $content .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" title="' . get_string('pluginname', 'block_navigation') . '">';
                $content .= get_string('pluginname', 'block_navigation') . '<b class="caret"></b></a><ul class="dropdown-menu pull-right">';
                $content .= $menucontent;
                $content .= '</ul>';
            }
        }

        $settings = $this->page->settingsnav;
        if ($settings && $settings->has_children()) {
            $menucontent = "";
            foreach ($settings->children as $child) {
                $menucontent .= theme_xtec2_render_dropdown_menu($child);
            }
            if (has_capability('moodle/site:config', context_system::instance())) {
                $menucontent .= '<li><form class="navbar-search" method="get" action="' . $CFG->wwwroot . '/' . $CFG->admin . '/search.php"><input type="text" class="search-query" name="query" placeholder="' . get_string('search') . '"></form></li>';
            }
            if (!empty($menucontent)) {
                $content .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" title="' . get_string('pluginname', 'block_settings') . '">';
                $content .= get_string('pluginname', 'block_settings') . '<b class="caret"></b></a><ul class="dropdown-menu pull-right">';
                $content .= $menucontent;
                $content .= '</ul>';
            }
        }

        return $content . '</ul>';
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
                $url     = new moodle_url($this->page->url, ['lang' => $langtype]);
                $content .= $this->render_lang($langtype, $langname, $url, $currentlang);
            }
            $content .= '</ul>';
        }

        return $content;
    }

    function social_icons() {
        $cache = cache::make('core', 'htmlpurifier');
        if ($text = $cache->get('social_icons')) {
            return $text;
        }
        global $OUTPUT;
        $content = "";
        if ($url = get_config('theme_xtec2', 'website')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-globe" title="Web"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'email')) {
            $content .= '<a href="mailto:' . $url . '" target="_blank"><i class="fa fa-envelope" title="' . get_string('email', 'theme_xtec2', $url) . '"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'phone')) {
            $content .= '<a href="tel:' . $url . '" target="_blank"><i class="fa fa-phone" title="' . get_string('phone', 'theme_xtec2', $url) . '"></i></a>';
        }
        if (get_config('theme_xtec2', 'nodes') && theme_xtec2_is_service_enabled('nodes')) {
            $content .= '<a href="' . get_service_url('nodes') . '" target="_blank" class="agora-social icon nodes"><img src="' . $OUTPUT->image_url('nodes-32', 'theme') . '" alt="" title="Nodes" /></a>';
        }
        if (get_config('theme_xtec2', 'intranet') && theme_xtec2_is_service_enabled('intranet')) {
            $content .= '<a href="' . get_service_url('intranet') . '" target="_blank" class="agora-social icon intranet"><img src="' . $OUTPUT->image_url('intranet-32', 'theme') . '" alt="" title="Intranet" /></a>';
        }
        if ($url = get_config('theme_xtec2', 'whatsapp')) {
            $content .= '<a href="tel:' . $url . '" target="_blank"><i class="fa fa-whatsapp" title="' . get_string('whatsapp_tel', 'theme_xtec2', $url) . '"></i></a>';
        }

        if ($url = get_config('theme_xtec2', 'facebook')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-facebook" title="Facebook"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'twitter')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-twitter" title="Twitter"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'googleplus')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-google-plus" title="Google Plus"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'instagram')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'flickr')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-flickr" title="Flickr"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'linkedin')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-linkedin" title="LinkedIn"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'pinterest')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-pinterest" title="Pinterest"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'youtube')) {
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-youtube" title="Youtube"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'skype')) {
            $url     = 'skype://' . $url;
            $content .= '<a href="' . $url . '" target="_blank"><i class="fa fa-skype" title="Skype"></i></a>';
        }
        $cache->set('social_icons', $content);
        return $content;
    }

    /**
     * Returns HTML to display a "Turn editing on/off" button in a form.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     *
     * @return string HTML the button
     * @author G J Barnard
     * @throws coding_exception
     */
    public function edit_button(moodle_url $url) {
        $url->param('sesskey', sesskey());
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $btn   = 'btn-danger';
            $title = get_string('turneditingoff');
            $icon  = 'fa-power-off';
        } else {
            $url->param('edit', 'on');
            $btn   = 'btn-success';
            $title = get_string('turneditingon');
            $icon  = 'fa-edit';
        }
        return html_writer::tag('a', html_writer::start_tag('i', ['class' => $icon . ' fa fa-fw']) .
                                     html_writer::end_tag('i') . $title, ['href' => $url, 'class' => 'edit-btn btn ' . $btn, 'title' => $title]);
    }

    public static function agora_alerts() {
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
        $pluginconfig = get_config('theme_xtec2');
        if ($isadmin) {
            if ($adminmsg = self::get_alert_message($pluginconfig, 'admin_alert')) {
                $text .= '<div class="admin_alert">' . $adminmsg;
                $text .= '<div style="font-size:smaller">' . get_string('show_admins', 'theme_xtec2') . '</div></div>';
            }
        }

        if ($agoramsg = self::get_alert_message($pluginconfig, 'agora_alert')) {
            $text .= '<div class="all_alert">' . $agoramsg . '</div>';
        }
        if (!empty($text)) {
            $title     = get_string('advices', 'theme_xtec2');
            $skiptitle = strip_tags($title);
            $skipid    = 'agora_alerts_skip';

            $output       = html_writer::tag('a', get_string('skipa', 'access', $skiptitle), ['href' => '#sb-' . $skipid, 'class' => 'skip-block']);
            $output       .= html_writer::start_tag('div', ['id' => 'agora-alerts', 'class' => 'block block_advices']);
            $title        = html_writer::tag('h2', $title);
            $controlshtml = '<i class="iconsmall closeicon fa fa-remove" alt="" title="" onclick="close_agora_alerts();"></i>';
            $output       .= html_writer::tag('div', html_writer::tag('div', html_writer::tag('div', $controlshtml, ['class' => 'block_action']) . $title, ['class' => 'title']), ['class' => 'header']);

            $output .= '<div class="content">' . $text . '</div>';

            $output .= html_writer::end_tag('div');

            $output .= html_writer::tag('span', '', ['id' => 'sb-' . $skipid, 'class' => 'skip-block-to']);
            $cache->set($cachekey, $output);
            return $output;
        }

        $cache->set($cachekey, "");
        return "";
    }

    public function blocks_for_region($region) {
        $output = self::agora_alerts();
        $output .= parent::blocks_for_region($region);
        return $output;
    }

    public static function get_alert_message($pluginconfig, $configname) {
        $msgvar = $configname . '_message';
        if (!empty($pluginconfig->$msgvar)) {
            $time     = date("Ymd", time());
            $startvar = $configname . '_start';
            $endvar   = $configname . '_end';
            if ((empty($pluginconfig->$startvar) || $time >= $pluginconfig->$startvar)
                && (empty($pluginconfig->$endvar) || $time <= $pluginconfig->$endvar)) {
                return $pluginconfig->$msgvar;
            }
        }
        return false;
    }

    public function course_content_header($onlyifnotcalledbefore = false) {
        global $CFG;
        if ($this->page->course->id == SITEID) {
            // return immediately and do not include /course/lib.php if not necessary
            return '';
        }
        static $functioncalled = false;
        if ($functioncalled && $onlyifnotcalledbefore) {
            // we have already output the content header
            return '';
        }
        require_once($CFG->dirroot . '/course/lib.php');
        $functioncalled = true;
        $courseformat   = course_get_format($this->page->course);
        $return         = "";
        if (($obj = $courseformat->course_content_header()) !== null) {
            $return = html_writer::div($courseformat->get_renderer($this->page)->render($obj), 'course-content-header');
        }

        if ($this->page->pagelayout == 'course' && theme_xtec2_show_course_grades($this->page->course->showgrades, $this->page->course->id)) {
            $title  = get_string('grades');
            $url    = $CFG->wwwroot . '/grade/report/index.php?id=' . $this->page->course->id;
            $return .= '<div class="agora_navbar">';
            $return .= html_writer::tag('a', html_writer::start_tag('i', ['class' => 'fa fa-fw fa-table']) .
                                             html_writer::end_tag('i') . $title, ['href' => $url, 'class' => 'edit-btn btn btn-primary', 'title' => $title]);
            $return .= '</div>';
        }

        return $return;
    }
}
