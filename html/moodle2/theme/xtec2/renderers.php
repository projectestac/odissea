<?php
require_once($CFG->dirroot.'/theme/bootstrapbase/renderers/core_renderer.php');

class theme_xtec2_core_renderer extends theme_bootstrapbase_core_renderer {

    public function user_picture(stdClass $user, array $options = null) {
        $class = 'img-circle userpic';

        if (!is_array($options)) {
            $options = array();
        }

        if (isset($options['class'])) $class .= ' '.$options['class'];

        $options['class'] = $class;
        return parent::user_picture($user, $options);
    }



    public function messages_menu() {
        global $CFG;
        if (isloggedin() && !isguestuser()) {
            if (file_exists($CFG->dirroot.'/local/agora/message_notifier/global.lib.php')) {
                require_once($CFG->dirroot.'/local/agora/message_notifier/global.lib.php');
                if (function_exists('message_notifier_get_badge')) {
                    return message_notifier_get_badge();
                }
            }
        }
        return "";
    }

    /**
     * Construct a user menu, returning HTML that can be echoed out by a
     * layout file.
     *
     * @param stdClass $user A user object, usually $USER.
     * @param bool $withlinks true if a dropdown should be built.
     * @return string HTML fragment.
     */
    public function user_menu($user = null, $withlinks = null) {
        global $USER, $CFG;
        require_once($CFG->dirroot . '/user/lib.php');

        if (is_null($user)) {
            $user = $USER;
        }

        // Note: this behaviour is intended to match that of core_renderer::login_info,
        // but should not be considered to be good practice; layout options are
        // intended to be theme-specific. Please don't copy this snippet anywhere else.
        if (is_null($withlinks)) {
            $withlinks = empty($this->page->layout_options['nologinlinks']);
        }

        // Add a class for when $withlinks is false.
        $usermenuclasses = 'usermenu';
        if (!$withlinks) {
            $usermenuclasses .= ' withoutlinks';
        }

        $returnstr = "";

        // If during initial install, return the empty return string.
        if (during_initial_install()) {
            return $returnstr;
        }

        $loginpage = ((string)$this->page->url === get_login_url());
        $loginurl = get_login_url();
        // If not logged in, show the typical not-logged-in string.
        if (!isloggedin()) {
            $returnstr = get_string('loggedinnot', 'moodle');
            if (!$loginpage) {
                $returnstr .= " (<a href=\"$loginurl\">" . get_string('login') . '</a>)';
            }
            return html_writer::div(
                html_writer::span(
                    $returnstr,
                    'login'
                ),
                $usermenuclasses
            );

        }

        // If logged in as a guest user, show a string to that effect.
        if (isguestuser()) {
            $returnstr = get_string('loggedinasguest');
            if (!$loginpage && $withlinks) {
                $returnstr .= " (<a href=\"$loginurl\">".get_string('login').'</a>)';
            }

            return html_writer::div(
                html_writer::span(
                    $returnstr,
                    'login'
                ),
                $usermenuclasses
            );
        }

        // Get some navigation opts.
        $opts = user_get_user_navigation_info($user, $this->page, $this->page->course);

        $opt = array_pop($opts->navitems); // Get the last item to add it at the end

        $calendar = new stdClass();
        $calendar->itemtype = 'link';
        $calendar->url = new moodle_url('/calendar/view.php', array('view' => 'month'));
        $calendar->title = get_string('calendar', 'calendar');
        $calendar->pix = 'i/calendar';
        $opts->navitems[] = $calendar;

        // Link: Grades
        $courses = enrol_get_users_courses($user->id, true);
        if (!empty($courses)) {
            $mygrades = new stdClass();
            $mygrades->itemtype = 'link';
            $course = array_shift($courses);
            $mygrades->url = new moodle_url('/grade/report/overview/index.php', array('id' => $course->id));
            $mygrades->title = get_string('mygrades', 'local_agora');
            $mygrades->pix = 't/grades';
            $opts->navitems[] = $mygrades;
        }

        $opts->navitems[] = $opt;  // Add the last item at the end

        $avatarclasses = "avatars";
        $avatarcontents = html_writer::span($opts->metadata['useravatar'], 'avatar current');
        $usertextcontents = $opts->metadata['userfullname'];

        // Other user.
        if (!empty($opts->metadata['asotheruser'])) {
            $avatarcontents .= html_writer::span(
                $opts->metadata['realuseravatar'],
                'avatar realuser'
            );
            $usertextcontents = $opts->metadata['realuserfullname'];
            $usertextcontents .= html_writer::tag(
                'span',
                get_string(
                    'loggedinas',
                    'moodle',
                    html_writer::span(
                        $opts->metadata['userfullname'],
                        'value'
                    )
                ),
                array('class' => 'meta viewingas')
            );
        }

        // Role.
        if (!empty($opts->metadata['asotherrole'])) {
            $role = core_text::strtolower(preg_replace('#[ ]+#', '-', trim($opts->metadata['rolename'])));
            $usertextcontents .= html_writer::span(
                $opts->metadata['rolename'],
                'meta role role-' . $role
            );
        }

        // User login failures.
        if (!empty($opts->metadata['userloginfail'])) {
            $usertextcontents .= html_writer::span(
                $opts->metadata['userloginfail'],
                'meta loginfailures'
            );
        }

        // MNet.
        if (!empty($opts->metadata['asmnetuser'])) {
            $mnet = strtolower(preg_replace('#[ ]+#', '-', trim($opts->metadata['mnetidprovidername'])));
            $usertextcontents .= html_writer::span(
                $opts->metadata['mnetidprovidername'],
                'meta mnet mnet-' . $mnet
            );
        }

        $returnstr .= $usertextcontents.$avatarcontents;

        // Navigation to the User menu
        $options = array();

        $navitemcount = count($opts->navitems);
        $idx = 0;
        foreach ($opts->navitems as $key => $value) {
            switch ($value->itemtype) {
                case 'divider':
                    // If the nav item is a divider, add one and skip link processing.
                    $options[] = '<li class="divider"></li>';
                    break;

                case 'invalid':
                    // Silently skip invalid entries (should we post a notification?).
                    break;

                case 'link':
                    // Process this as a link item.
                    $pix = "";
                    if (isset($value->pix) && !empty($value->pix)) {
                        $pix = new pix_icon($value->pix, $value->title, null, array('class' => 'iconsmall'));
                        $pix = $this->render($pix);
                    } else if (isset($value->imgsrc) && !empty($value->imgsrc)) {
                        $value->title = html_writer::img(
                            $value->imgsrc,
                            $value->title,
                            array('class' => 'iconsmall')
                        ) . $value->title;
                    }
                    $options[] = '<li><a class="icon menu-action" role="menuitem" href="'.$value->url.'" >'.$pix.
                    '<span class="menu-action-text">'.$value->title.'</span></a></li>';
                    break;
            }

            $idx++;

            // Add dividers after the first item and before the last item.
            if ($idx == 1) {
                $options[] = '<li class="divider"></li>';
            } else if ($idx == $navitemcount - 1) {
                $options[] = '<li class="divider"></li>';
                $myprofile = $this->page->navigation->get('myprofile');
                if ($myprofile && $myprofile->has_children()) {
                    $deleteditems = array(get_string('viewprofile'), get_string('messages', 'message'), get_string('myfiles'), get_string('mybadges', 'badges'));

                    foreach ($myprofile->children as $child) {
                        if (!in_array($child->get_content(), $deleteditems)) {
                            $options[] = theme_xtec2_render_dropdown_menu($child);
                        }
                    }
                }

                $usernav = $this->page->settingsnav->get('usercurrentsettings');
                if ($usernav && $usernav->has_children()) {
                    $title = $usernav->get_content();
                    $text = '<li class="icon dropdown-submenu pull-left">';
                    $pix = new pix_icon('i/settings', $title, null, array('class' => 'iconsmall'));
                    $text .= '<a class="icon dropdown-toggle" data-toggle="dropdown" href="#">'.$this->render($pix);
                    $text .= '<span class="menu-action-text">'.$title.'</span></a><ul class="dropdown-menu">';
                    foreach ($usernav->children as $child) {
                        $text .= theme_xtec2_render_dropdown_menu($child);
                    }
                    $text .= '</ul></li>';
                    $options[] = $text;
                }
                $options[] = '<li class="divider"></li>';
            }
        }

        if (empty($options)) {
            return $returnstr;
        }

        $menu = '<div id="usermenu" class="dropdown pull-right">';
        $menu .= '<a id="usermenu_toogle" class="dropdown-toggle" href="#usermenu">'.$returnstr.'<b class="caret"></b></a>';
        $menu .= '<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
        foreach ($options as $option) {
            $menu .= $option;
        }
        $menu .= '</ul>';
        $menu .= '</div>';

        return $menu;
    }

    public function standard_end_of_body_html() {
        global $CFG;

        // This function is normally called from a layout.php file in {@link core_renderer::header()}
        // but some of the content won't be known until later, so we return a placeholder
        // for now. This will be replaced with the real content in {@link core_renderer::footer()}.
        $output = '';
        if (!empty($CFG->additionalhtmlfooter)) {
            $output .= "\n".$CFG->additionalhtmlfooter;
        }
        $output .= $this->unique_end_html_token;

        $jsmodule = array(
            'name'     => 'theme_xtec2',
            'fullpath' => '/theme/xtec2/javascript/xtec2_footer.js',
            'requires' => array('base'),
        );
        $this->page->requires->js_init_call('M.theme_xtec2.init',array(), true, $jsmodule);

        return $output;
    }

    /*
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

    /*
     * This renders the bootstrap top menu.
     *
     * This renderer is needed to enable the Bootstrap style navigation.
     */
    protected function render_custom_menu(custom_menu $menu) {
        $content = '';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return (!empty($content)) ? '<ul class="nav">'.$content.'</ul>' : "";
    }

 	/*
     * This code renders the custom menu items for the
     * bootstrap dropdown menu.
     */
    protected function render_custom_menu_item(custom_menu_item $menunode, $level = 0 ) {
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
            $content = html_writer::start_tag('li', array('class' => $class));
            // If the child has menus render it as a sub menu.
            $submenucount++;
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#cm_submenu_'.$submenucount;
            }
            $content .= html_writer::start_tag('a', array('href' => $url, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'title' => $menunode->get_title()));
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
            $content .= html_writer::link($url, $menunode->get_text(), array('title' => $menunode->get_title()));
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
        if ($currentcourse  && $currentcourse->has_children()) {
            $menucontent = "";
            foreach ($currentcourse->children as $child) {
                foreach ($child->children as $child2) {
                    $menucontent .= theme_xtec2_render_dropdown_menu($child2);
                }
            }
            if (!empty($menucontent)) {
                $content .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" title="'.$currentcourse->get_content().'">';
                $content .= $currentcourse->get_content().'<b class="caret"></b></a><ul class="dropdown-menu pull-right">';
                $content .= $menucontent;
                $content .= '</ul>';
            }
        }

        $navigation = $this->page->navigation;
        if ($navigation  && $navigation->has_children()) {
            $menucontent = "";
            foreach ($navigation->children as $child) {
                if ($child->key != 'currentcourse' && $child->key != 'home' && $child->key != 'myprofile') {
                    $menucontent .= theme_xtec2_render_dropdown_menu($child);
                }
            }
            if (!empty($menucontent)) {
                $content .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" title="'.get_string('pluginname', 'block_navigation').'">';
                $content .= get_string('pluginname', 'block_navigation').'<b class="caret"></b></a><ul class="dropdown-menu pull-right">';
                $content .= $menucontent;
                $content .= '</ul>';
            }
        }

        $settings = $this->page->settingsnav;
        if ($settings  && $settings->has_children()) {
            $menucontent = "";
            foreach ($settings->children as $child) {
                if ($child->key != 'usercurrentsettings') {
                    $menucontent .= theme_xtec2_render_dropdown_menu($child);
                }
            }
            if (has_capability('moodle/site:config', context_system::instance())) {
                $menucontent .= '<li><form class="navbar-search" method="get" action="'.$CFG->wwwroot.'/'.$CFG->admin.'/search.php"><input type="text" class="search-query" name="query" placeholder="'.get_string('search').'"></form></li>';
            }
            if (!empty($menucontent)) {
                $content .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" title="'.get_string('pluginname', 'block_settings').'">';
                $content .= get_string('pluginname', 'block_settings').'<b class="caret"></b></a><ul class="dropdown-menu pull-right">';
                $content .= $menucontent;
                $content .= '</ul>';
            }
        }

        return $content.'</ul>';
    }

	public function lang_menu() {
		global $CFG;

		$menu = new custom_menu('', current_language());
    	// TODO: eliminate this duplicated logic, it belongs in core, not
        // here. See MDL-39565.
        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2
            or empty($CFG->langmenu)
            or ($this->page->course != SITEID and !empty($this->page->course->lang))) {
        }

        $strlang = get_string('language');
        $currentlang = current_language();
        if (isset($langs[$currentlang])) {
            $currentlang = $langs[$currentlang];
        } else {
            $currentlang = $strlang;
        }
        foreach ($langs as $langtype => $langname) {
            $menu->add($langname, new moodle_url($this->page->url, array('lang' => $langtype)), $langname);
        }

		$content = '<div class="btn-group dropup langmenu">';
		$content .= '<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">'.$currentlang;
		$content .= '<span class="caret"></span>';
		$content .= '</a>';
		$content .= '<ul class="dropdown-menu pull-right">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return $content.'</ul></div>';
    }

    function social_icons() {
        global $DB;

		$cache = cache::make('core', 'htmlpurifier');
		if ($text = $cache->get('social_icons')) {
			return $text;
		}
        global $school_info, $CFG, $OUTPUT;
        $content = "";
        if ($url = get_config('theme_xtec2', 'website')) {
            $content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-globe" title="Web"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'email')) {
            $content .= '<a href="mailto:'.$url.'" target="_blank"><i class="fa fa-envelope" title="'.get_string('email', 'theme_xtec2', $url).'"></i></a>';
        }
        if ($url = get_config('theme_xtec2', 'phone')) {
            $content .= '<a href="tel:'.$url.'" target="_blank"><i class="fa fa-phone" title="'.get_string('phone', 'theme_xtec2', $url).'"></i></a>';
        }
        if (get_config('theme_xtec2', 'nodes') && theme_xtec2_is_service_enabled('nodes')) {
            $content .= '<a href="'.get_service_url('nodes').'" target="_blank" class="agora-social icon nodes"><img src="'.$OUTPUT->pix_url('nodes-32', 'theme').'" alt="" title="Nodes" /></a>';
        }
        if (get_config('theme_xtec2', 'intranet') && theme_xtec2_is_service_enabled('intranet')) {
            $content .= '<a href="'.get_service_url('intranet').'" target="_blank" class="agora-social icon intranet"><img src="'.$OUTPUT->pix_url('intranet-32', 'theme').'" alt="" title="Intranet" /></a>';
        }
        if ($url = get_config('theme_xtec2', 'whatsapp')) {
            $content .= '<a href="tel:'.$url.'" target="_blank"><i class="fa fa-whatsapp" title="'.get_string('whatsapp_tel', 'theme_xtec2', $url).'"></i></a>';
        }

        if ($url = get_config('theme_xtec2', 'facebook')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-facebook" title="Facebook"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'twitter')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-twitter" title="Twitter"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'googleplus')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-google-plus" title="Google Plus"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'instagram')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'flickr')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-flickr" title="Flickr"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'linkedin')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-linkedin" title="LinkedIn"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'pinterest')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-pinterest" title="Pinterest"></i></a>';
		}
		if ($url = get_config('theme_xtec2', 'youtube')) {
			$content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-youtube" title="Youtube"></i></a>';
		}
        if ($url = get_config('theme_xtec2', 'skype')) {
            $url = 'skype://'.$url;
            $content .= '<a href="'.$url.'" target="_blank"><i class="fa fa-skype" title="Skype"></i></a>';
        }
        $cache->set('social_icons', $content);
        return $content;
    }

    /*
    * This code replaces icons in with
    * FontAwesome variants where available.
    */
    public function render_pix_icon(pix_icon $icon) {
        static $icons = array(
            'add' => 'plus',
            'book' => 'book',
            'chapter' => 'file',
            'docs' => 'info-circle',
            'help' => 'question-circle',
            'generate' => 'gift',
            'users' => 'users',
            'withoutpassword' => 'unlock',
            'withpassword' => 'lock',
            'withoutkey' => 'magic',
            'a/download_all' => 'cloud-download',
            'a/logout' => 'sign-out',
            'i/badge' => 'trophy',
            'i/course' => 'graduation-cap',
            'i/enrolusers' => 'user-plus',
            'i/marker' => 'lightbulb-o',
            'i/dragdrop' => 'arrows',
            'i/loading' => 'refresh fa-spin fa-2x',
            'i/loading_small' => 'spinner fa-spin ',
            'i/backup' => 'cloud-download',
            'i/calendar' => 'calendar',
            'i/checkpermissions' => 'user',
            'i/dragdrop' => 'arrows',
            'i/edit' => 'pencil',
            'i/email' => 'envelope-o',
            'i/filter' => 'filter',
            'i/folder' => 'folder',
            'i/grades' => 'table',
            'i/group' => 'group',
            'i/groupn' => 'group',
            'i/groupv' => 'group',
            'i/groups' => 'group',
            'i/hide' => 'eye-slash',
            'i/import' => 'download',
            'i/export' => 'upload',
            'i/info' => 'info-circle',
            'i/item' => 'circle-o',
            'i/move_2d' => 'arrows',
            'i/navigationitem' => 'circle',
            'i/outcomes' => 'pie-chart',
            'i/publish' => 'globe',
            'i/preview' => 'search',
            'i/reload' => 'refresh',
            'i/report' => 'list-alt',
            'i/restore' => 'cloud-upload',
            'i/return' => 'repeat',
            'i/roles' => 'user',
            'i/cohort' => 'users',
			'i/scales' => 'signal',
            'i/settings' => 'cog',
            'i/show' => 'eye',
            'i/switchrole' => 'random',
            'i/user' => 'user',
            'i/users' => 'user',
			'i/twoway' => 'arrows-h',
			'i/withsubcat' => 'indent',
			'i/permissions' => 'key',
			't/add' => 'plus',
            'i/assignroles' => 'lock',
			't/assignroles' => 'lock',
            't/award' => 'trophy',
			't/cohort' => 'users',
			't/delete' => 'times-circle',
			't/edit' => 'pencil',
			't/right' => 'arrow-right',
            't/left' => 'arrow-left',
			't/edit_menu' => 'cog',
			// 't/hide' => 'eye-slash', //Disabled to solve errors hidding activities
			// 't/show' => 'eye',
			't/up' => 'arrow-up',
			't/down' => 'arrow-down',
            't/download' => 'download',
            't/copy' => 'copy',
            't/lock' => 'unlock',
            't/unlock' => 'lock',
            't/locked' => 'lock',
            't/unlocked' => 'unlock',
            't/move' => 'arrows-alt',
            't/switch_minus' => 'minus-square',
            't/switch_plus' => 'plus-square',
            't/block_to_dock' => 'caret-square-o-left',
            't/sort' => 'sort',
            't/sort_asc' => 'sort-asc',
            't/sort_desc' => 'sort-desc',
            't/grades' => 'th-list',
            't/preview' => 'search',
            't/message' => 'comment',
            't/editstring' => 'pencil-square-o',
            't/check' => 'check',
            't/calc_off' => 'calculator',
        );

        $name = $icon->pix;
        if (isset($icons[$name])) {
			$icon->attributes['class'] = isset($icon->attributes['class'])? $icon->attributes['class'] : '';
			$icon->attributes['class'] .= " fa fa-$icons[$name]";
			if (isset($icon->attributes['alt'])) {
				$icon->attributes['title'] = $icon->attributes['alt'];
			}
			$style = "";
			if (isset($icon->attributes['width'])) {
				$style .= 'width:'.$icon->attributes['width'].';';
				unset($icon->attributes['width']);
			}
			if (isset($icon->attributes['height'])) {
				$style .= 'height:'.$icon->attributes['height'].';line-height:'.$icon->attributes['height'].';';
				unset($icon->attributes['height']);
			}
			if (!empty($style)) {
				$icon->attributes['style'] = isset($icon->attributes['style'])? $icon->attributes['style'].$style : $style;
			}

			// unset($icon->attributes['alt']);
            return html_writer::tag('i', '', $icon->attributes);
        } else {
            return parent::render_pix_icon($icon);
        }
    }

    /**
     * Returns HTML to display a "Turn editing on/off" button in a form.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     * @return string HTML the button
     * Written by G J Barnard
     */
    public function edit_button(moodle_url $url) {
        $url->param('sesskey', sesskey());
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $btn = 'btn-danger';
            $title = get_string('turneditingoff');
            $icon = 'fa-power-off';
        } else {
            $url->param('edit', 'on');
            $btn = 'btn-success';
            $title = get_string('turneditingon');
            $icon = 'fa-edit';
        }
        return html_writer::tag('a', html_writer::start_tag('i', array('class' => $icon . ' fa fa-fw')) .
            html_writer::end_tag('i') . $title, array('href' => $url, 'class' => 'edit-btn btn ' . $btn, 'title' => $title));
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

        $text = "";
        $pluginconfig = get_config('theme_xtec2');
        if ($isadmin) {
            if ($adminmsg = self::get_alert_message($pluginconfig, 'admin_alert')) {
                $text .= '<div class="admin_alert">'.$adminmsg;
                $text .= '<div style="font-size:smaller">' . get_string('show_admins', 'theme_xtec2') . '</div></div>';
            }
        }

        if ($agoramsg = self::get_alert_message($pluginconfig, 'agora_alert')) {
            $text .= '<div class="all_alert">'.$agoramsg.'</div>';
        }
        if (!empty($text)) {
            $title = get_string('advices', 'theme_xtec2');
            $skiptitle = strip_tags($title);
            $skipid = 'agora_alerts_skip';

            $output = html_writer::tag('a', get_string('skipa', 'access', $skiptitle), array('href' => '#sb-' . $skipid, 'class' => 'skip-block'));
            $output .= html_writer::start_tag('div' , array('id'=> 'agora-alerts', 'class' => 'block block_advices'));
            $title = html_writer::tag('h2', $title);
            $controlshtml =  '<i class="iconsmall closeicon fa fa-remove" alt="" title="" onclick="close_agora_alerts();"></i>';
            $output .= html_writer::tag('div', html_writer::tag('div', html_writer::tag('div',  $controlshtml, array('class'=>'block_action')). $title, array('class' => 'title')), array('class' => 'header'));

            $output .= '<div class="content">'.$text.'</div>';

            $output .= html_writer::end_tag('div');

            $output .= html_writer::tag('span', '', array('id' => 'sb-' . $skipid, 'class' => 'skip-block-to'));
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
        $msgvar = $configname.'_message';
        if (!empty($pluginconfig->$msgvar)) {
            $time = date("Ymd", time());
            $startvar = $configname.'_start';
            $endvar = $configname.'_end';
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
        require_once($CFG->dirroot.'/course/lib.php');
        $functioncalled = true;
        $courseformat = course_get_format($this->page->course);
        $return = "";
        if (($obj = $courseformat->course_content_header()) !== null) {
            $return = html_writer::div($courseformat->get_renderer($this->page)->render($obj), 'course-content-header');
        }

        if ($this->page->pagelayout == 'course' && theme_xtec2_show_course_grades($this->page->course->showgrades, $this->page->course->id)) {
            $title = get_string('grades');
            $url = $CFG->wwwroot.'/grade/report/index.php?id=' . $this->page->course->id;
            $return .= '<div class="agora_navbar">';
            $return .= html_writer::tag('a', html_writer::start_tag('i', array('class' => 'fa fa-fw fa-table')) .
                html_writer::end_tag('i') . $title, array('href' => $url, 'class' => 'edit-btn btn btn-primary', 'title' => $title));
            $return .= '</div>';
        }

        return $return;
    }

}
