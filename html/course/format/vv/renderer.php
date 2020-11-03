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

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/format/topics/renderer.php');
require_once($CFG->dirroot.'/course/renderer.php');

class format_vv_renderer extends format_topics_renderer {

    /**
     * Constructor method, calls the parent constructor
     *
     * @param moodle_page $page
     * @param string $target one of rendering target constants
     */
    public function __construct(moodle_page $page, $target) {
        parent::__construct($page, $target);
        $this->courserenderer = $this->page->get_renderer('format_vv', 'course');
    }

    /**
     * Generate the section title, wraps it in a link to the section page if page is to be displayed
     * on a separate page
     *
     * @param stdClass $section The course_section entry from DB
     * @param stdClass $course The course entry from DB
     * @return string HTML to output.
     */
    public function section_title($section, $course) {
        return get_section_name($course, $section);
    }

    /**
     * Generate the section title to be displayed on the section page, without a link
     *
     * @param stdClass $section The course_section entry from DB
     * @param stdClass $course The course entry from DB
     * @return string HTML to output.
     */
    public function section_title_without_link($section, $course) {
        return get_section_name($course, $section);
    }

    /**
     * Output the html for a multiple section page
     *
     * @param stdClass $course The course entry from DB
     * @param array $sections (argument not used)
     * @param array $mods (argument not used)
     * @param array $modnames (argument not used)
     * @param array $modnamesused (argument not used)
     */
    public function print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused) {

        $modinfo = get_fast_modinfo($course);
        $course = course_get_format($course)->get_course();

        $context = context_course::instance($course->id);

        echo html_writer::start_tag('div', array('class' => 'vv-' . $this->get_book_type($course)));
        $coursefullname = format_string($course->fullname, true, array('context' => $context));
        echo html_writer::tag('div', $coursefullname, array('class' => 'vv-title'));

        // Copy activity clipboard.
        echo $this->course_activity_clipboard($course, 0);

        // Now the list of sections.
        echo $this->start_section_list();

        foreach ($modinfo->get_section_info_all() as $section => $thissection) {
            if ($section == 0) {
                // 0-section is displayed a little different then the others.
                if ($thissection->summary or !empty($modinfo->sections[0]) or $this->page->user_is_editing()) {
                    echo $this->section_header($thissection, $course, false, 0);
                    echo $this->courserenderer->course_section_cm_list($course, $thissection, 0);
                    echo $this->courserenderer->course_section_add_cm_control($course, 0, 0);
                    echo $this->section_footer();
                }
                continue;
            }
            if ($section > $course->numsections) {
                // Activities inside this section are orphaned, this section will be printed as stealth below.
                continue;
            }
            // Show the section if the user is permitted to access it, OR if it's not available,
            // But there is some available info text which explains the reason & should display.
            $showsection = $thissection->uservisible ||
                    ($thissection->visible && !$thissection->available &&
                    !empty($thissection->availableinfo));
            if (!$showsection) {
                // If the hiddensections option is set to 'show hidden sections in collapsed
                // form', then display the hidden section message - UNLESS the section is
                // hidden by the availability system, which is set to hide the reason.
                if (!$course->hiddensections && $thissection->available) {
                    echo $this->section_hidden($section, $course->id);
                }

                continue;
            }

            echo $this->section_header($thissection, $course, false, 0);
            if ($thissection->uservisible) {
                echo $this->courserenderer->course_section_cm_list($course, $thissection, 0);
                echo $this->courserenderer->course_section_add_cm_control($course, $section, 0);
            }
            echo $this->section_footer();
        }

        if ($this->page->user_is_editing() and has_capability('moodle/course:update', $context)) {
            // Print stealth sections if present.
            foreach ($modinfo->get_section_info_all() as $section => $thissection) {
                if ($section <= $course->numsections or empty($modinfo->sections[$section])) {
                    // This is not stealth section or it is empty.
                    continue;
                }
                echo $this->stealth_section_header($section);
                echo $this->courserenderer->course_section_cm_list($course, $thissection, 0);
                echo $this->stealth_section_footer();
            }

            echo $this->end_section_list();

            echo html_writer::start_tag('div', array('id' => 'changenumsections', 'class' => 'mdl-right'));

            // Increase number of sections.
            $straddsection = get_string('increasesections', 'moodle');
            $url = new moodle_url('/course/changenumsections.php',
                array('courseid' => $course->id,
                      'increase' => true,
                      'sesskey' => sesskey()));
            $icon = $this->output->pix_icon('t/switch_plus', $straddsection);
            echo html_writer::link($url, $icon.get_accesshide($straddsection), array('class' => 'increase-sections'));

            if ($course->numsections > 0) {
                // Reduce number of sections sections.
                $strremovesection = get_string('reducesections', 'moodle');
                $url = new moodle_url('/course/changenumsections.php',
                    array('courseid' => $course->id,
                          'increase' => false,
                          'sesskey' => sesskey()));
                $icon = $this->output->pix_icon('t/switch_minus', $strremovesection);
                echo html_writer::link($url, $icon.get_accesshide($strremovesection), array('class' => 'reduce-sections'));
            }

            echo html_writer::end_tag('div');
        } else {
            echo $this->end_section_list();
        }

        echo html_writer::end_tag('div');
    }

    /**
     * Generate the starting container html for a list of sections
     * @return string HTML to output.
     */
    protected function start_section_list() {
        return html_writer::start_tag('ul', array('class' => 'vv-topics'));
    }

    /**
     * Generate the display of the header part of a section before
     * course modules are included
     *
     * @param stdClass $section The course_section entry from DB
     * @param stdClass $course The course entry from DB
     * @param bool $onsectionpage true if being printed on a single-section page
     * @param int $sectionreturn The section to return to after an action
     * @return string HTML to output.
     */
    protected function section_header($section, $course, $onsectionpage, $sectionreturn=null) {
        $o = '';
        $currenttext = '';
        $sectionstyle = '';

        if ($section->section != 0) {
            // Only in the non-general sections.
            if (!$section->visible) {
                $sectionstyle = ' hidden';
            }
        }

        $o .= html_writer::start_tag('li', array('id' => 'section-'.$section->section,
            'class' => 'vv-section clearfix'.$sectionstyle, 'role' => 'region',
            'aria-label' => get_section_name($course, $section)));

        // When not on a section page, we display the section titles except the general section if null.
        $hasnamenotsecpg = (!$onsectionpage && ($section->section != 0 || !is_null($section->name)));

        // When on a section page, we only display the general section title, if title is not the default one.
        $hasnamesecpg = ($onsectionpage && ($section->section == 0 && !is_null($section->name)));

        // Ocultar despliegue en secciones vacías.
        $classes = 'vv-sectionname';
        if ($section->sequence == '') {
                $classes .= ' vv-void';
        }
        if (!$hasnamenotsecpg && !$hasnamesecpg) {
            $classes .= ' accesshide';
        }

        // Ocultar despliegue en secciones vacías.
        $icons = html_writer::tag('span', '', array('class' => 'vv-icon-section'));
        if ($section->sequence != '') {
                $icons .= html_writer::tag('span', '', array('class' => 'vv-icon-arrow'));
        }

        $edit = '';

        $context = context_course::instance($course->id);
        if ($this->page->user_is_editing() && has_capability('moodle/course:update', $context)) {
            $url = new moodle_url('/course/editsection.php', array('id' => $section->id, 'sr' => $sectionreturn));
            $edit .= html_writer::start_tag('span', array('class' => 'commands'));
            if ($section->section != 0) {
                $controls = $this->section_edit_controls($course, $section, $onsectionpage);
                if (!empty($controls)) {
                    $edit .= implode('', $controls);
                }
            }
            $edit .= html_writer::end_tag('span');
        }

        $title = $this->section_title($section, $course);

        // Ocultar despliegue en secciones vacías.
        $o .= $this->output->heading($icons . $title . ' ' . $edit, 3, $classes);

        $o .= $this->section_availability_message($section,
                has_capability('moodle/course:viewhiddensections', $context));

        return $o;
    }


    /**
     * Generate the display of the footer part of a section
     *
     * @return string HTML to output.
     */
    protected function section_footer() {
        return html_writer::end_tag('li');
    }

    /**
     * Generate the header html of a stealth section
     *
     * @param int $sectionno The section number in the coruse which is being dsiplayed
     * @return string HTML to output.
     */
    protected function stealth_section_header($sectionno) {
        $o = '';
        $o .= html_writer::start_tag('li', array('id' => 'section-' . $sectionno,
            'class' => 'section main clearfix orphaned hidden'));
        $o .= $this->output->heading(get_string('orphanedactivitiesinsectionno', '', $sectionno),
            3, 'sectionname');
        return $o;
    }

    /**
     * Generate footer html of a stealth section
     *
     * @return string HTML to output.
     */
    protected function stealth_section_footer() {
        return html_writer::end_tag('li');
    }

    /**
     * Generate the edit controls of a section
     *
     * @param stdClass $course The course entry from DB
     * @param stdClass $section The course_section entry from DB
     * @param bool $onsectionpage true if being printed on a section page
     * @return array of links with edit controls
     */
    protected function section_edit_controls($course, $section, $onsectionpage = false) {
        if (!$this->page->user_is_editing()) {
            return array();
        }

        $coursecontext = context_course::instance($course->id);

        if ($onsectionpage) {
            $baseurl = course_get_url($course, $section->section);
        } else {
            $baseurl = course_get_url($course);
        }
        $baseurl->param('sesskey', sesskey());

        $controls = array();

        $url = clone($baseurl);
        if (has_capability('moodle/course:sectionvisibility', $coursecontext)) {
            if ($section->visible) { // Show the hide/show eye.
                $strhidefromothers = get_string('hidefromothers', 'format_'.$course->format);
                $url->param('hide', $section->section);
                $controls[] = html_writer::link($url,
                    $this->output->pix_icon('i/hide', $strhidefromothers, 'moodle', array('class' => 'icon hide')),
                    array('title' => $strhidefromothers, 'class' => 'editing_showhide'));
            } else {
                $strshowfromothers = get_string('showfromothers', 'format_'.$course->format);
                $url->param('show',  $section->section);
                $controls[] = html_writer::link($url,
                    $this->output->pix_icon('i/show', $strshowfromothers, 'moodle', array('class' => 'icon hide')),
                    array('title' => $strshowfromothers, 'class' => 'editing_showhide'));
            }
        }

        return $controls;
    }

    private function get_book_type($course) {
        $subjects = array("mates", "lengua", "naturales", "sociales");
        $subject = substr($course->idnumber, strrpos($course->idnumber, '-') + 1);
        if (!in_array($subject, $subjects)) {
            return $subjects[0];
        }
        return $subject;
    }
}

class format_vv_course_renderer extends core_course_renderer {

    /**
     * Renders HTML to display a list of course modules in a course section
     * Also displays "move here" controls in Javascript-disabled mode
     *
     * This function calls {@link core_course_renderer::course_section_cm()}
     *
     * @param stdClass $course course object
     * @param int|stdClass|section_info $section relative section number or section object
     * @param int $sectionreturn section number to return to
     * @param int $displayoptions
     * @return void
     */
    public function course_section_cm_list($course, $section, $sectionreturn = null, $displayoptions = array()) {
        global $USER;

        $output = '';
        $modinfo = get_fast_modinfo($course);
        if (is_object($section)) {
            $section = $modinfo->get_section_info($section->section);
        } else {
            $section = $modinfo->get_section_info($section);
        }
        $completioninfo = new completion_info($course);

        // Check if we are currently in the process of moving a module with JavaScript disabled.
        $ismoving = $this->page->user_is_editing() && ismoving($course->id);
        if ($ismoving) {
            $movingpix = new pix_icon('movehere', get_string('movehere'), 'moodle', array('class' => 'movetarget'));
            $strmovefull = strip_tags(get_string("movefull", "", "'$USER->activitycopyname'"));
        }

        // Get the list of modules visible to user (excluding the module being moved if there is one).
        $moduleshtml = array();
        if (!empty($modinfo->sections[$section->section])) {
            foreach ($modinfo->sections[$section->section] as $modnumber) {
                $mod = $modinfo->cms[$modnumber];

                if ($ismoving and $mod->id == $USER->activitycopy) {
                    // Do not display moving mod.
                    continue;
                }

                if ($modulehtml = $this->course_section_cm_list_item($course,
                        $completioninfo, $mod, $sectionreturn, $displayoptions)) {
                    $moduleshtml[$modnumber] = $modulehtml;
                }
            }
        }

        $sectionoutput = '';
        if (!empty($moduleshtml) || $ismoving) {
            $insubsection = false;

            foreach ($moduleshtml as $modnumber => $modulehtml) {
                if ($ismoving) {
                    $movingurl = new moodle_url('/course/mod.php', array('moveto' => $modnumber, 'sesskey' => sesskey()));
                    $sectionoutput .= html_writer::tag('li',
                            html_writer::link($movingurl, $this->output->render($movingpix), array('title' => $strmovefull)),
                            array('class' => 'movehere vv-activity'));
                }

                $mod = $modinfo->cms[$modnumber];
                if ($mod->modname == 'label') {
                    if ($insubsection) {
                        $sectionoutput .= html_writer::end_tag('ul');
                        $sectionoutput .= html_writer::end_tag('li');
                    }
                    $sectionoutput .= html_writer::start_tag('li', array('class' => 'vv-subsection'));
                    $sectionoutput .= $modulehtml;
                    $sectionoutput .= html_writer::start_tag('ul', array('class' => 'vv-subsection vv-hidden'));
                    $insubsection = true;
                } else {
                    $sectionoutput .= $modulehtml;
                }
            }

            if ($ismoving) {
                $movingurl = new moodle_url('/course/mod.php', array('movetosection' => $section->id, 'sesskey' => sesskey()));
                $sectionoutput .= html_writer::tag('li',
                        html_writer::link($movingurl, $this->output->render($movingpix), array('title' => $strmovefull)),
                        array('class' => 'movehere vv-activity'));
            }

            if ($insubsection) {
                $sectionoutput .= html_writer::end_tag('ul');
                $sectionoutput .= html_writer::end_tag('li');
            }
        }

        // Always output the section module list.
        $class = 'vv-section img-text';
        if ($section->section > 0) {
            $class .= ' vv-hidden';
        }
        $output .= html_writer::tag('ul', $sectionoutput, array('class' => $class));

        return $output;
    }

    /**
     * Renders HTML to display one course module for display within a section.
     *
     * This function calls:
     * {@link core_course_renderer::course_section_cm()}
     *
     * @param stdClass $course
     * @param completion_info $completioninfo
     * @param cm_info $mod
     * @param int|null $sectionreturn
     * @param array $displayoptions
     * @return String
     */
    public function course_section_cm_list_item($course, &$completioninfo, cm_info $mod, $sectionreturn,
        $displayoptions = array()) {

        $output = '';

        if ($mod->modname == 'label') {
            if (!$mod->uservisible) {
                return;
            }

            $labelname = $mod->name;
            $labelnum = '&nbsp';
            if (preg_match('/^(\w{1,5})\.(.*)$/', trim($mod->name), $match)) {
                $labelnum = $match[1];
                $labelname = trim($match[2]);
            }
            // Formato de versiones anteriores.
            if (preg_match('/^\[(\w+)\]( .*)$/', trim($mod->name), $match)) {
                $labelnum = $match[1];
                $labelname = $match[2];
            }

            $icons = html_writer::tag('span', '', array('class' => 'vv-icon-arrow'));
            $number = html_writer::tag('span', $labelnum, array('class' => 'vv-subsectionnum'));
            $name = format_string($labelname);

            $modicons = '';
            if ($this->page->user_is_editing()) {
                $modicons .= $this->get_cm_edit_actions($mod, $mod->indent, $sectionreturn);
                $modicons .= $mod->afterediticons;
            }
            if (!empty($modicons)) {
                $icons .= html_writer::span($modicons, 'actions');
            }

            return html_writer::tag('h4', $icons . $number . $name, array('class' => 'vv-subsectionname'));
        }

        if ($modulehtml = $this->course_section_cm($course, $completioninfo, $mod, $sectionreturn,
                $displayoptions)) {
            $modclasses = 'vv-activity ' . $mod->modname . ' modtype_' . $mod->modname .
                ' ' . $mod->extraclasses;
            $output .= html_writer::tag('li', $modulehtml,
                array('class' => $modclasses, 'id' => 'module-' . $mod->id));
        }
        return $output;
    }

    /**
     * Renders HTML to display one course module in a course section
     *
     * This includes link, content, availability, completion info and additional information
     * that module type wants to display (i.e. number of unread forum posts)
     *
     * This function calls:
     * {@link core_course_renderer::course_section_cm_name()}
     * {@link cm_info::get_after_link()}
     * {@link core_course_renderer::course_section_cm_text()}
     * {@link core_course_renderer::course_section_cm_availability()}
     * {@link core_course_renderer::course_section_cm_completion()}
     * {@link course_get_cm_edit_actions()}
     * {@link core_course_renderer::course_section_cm_edit_actions()}
     *
     * @param stdClass $course
     * @param completion_info $completioninfo
     * @param cm_info $mod
     * @param int|null $sectionreturn
     * @param array $displayoptions
     * @return string
     */
    public function course_section_cm($course, &$completioninfo, cm_info $mod, $sectionreturn,
        $displayoptions = array()) {
        $output = '';
        // We return empty string (because course module will not be displayed at all) if:
        // 1) The activity is not visible to users.
        // And.
        // 2) The 'availableinfo' is empty, i.e. the activity was hidden in a way that leaves no info,
        // Such as using the eye icon.
        if (!$mod->uservisible && empty($mod->availableinfo)) {
            return $output;
        }

        $output .= html_writer::start_tag('div');

        // Start a wrapper for the actual content to keep the indentation consistent.
        $output .= html_writer::start_tag('div');

        $modicons = '';
        if ($this->page->user_is_editing()) {
            $modicons .= $this->get_cm_edit_actions($mod, $mod->indent, $sectionreturn);
            $modicons .= $mod->afterediticons;
        }

        $modicons .= $this->course_section_cm_completion($course, $completioninfo, $mod, $displayoptions);

        if (!empty($modicons)) {
            $output .= html_writer::span($modicons, 'actions');
        }

        // Display the link to the module (or do nothing if module has no url).
        $cmname = $this->course_section_cm_name($mod, $displayoptions);

        if (!empty($cmname)) {
            // Start the div for the activity title, excluding the edit icons.
            $output .= html_writer::start_tag('div', array('class' => 'activityinstance'));
            $output .= $cmname;

            // Module can put text after the link (e.g. forum unread).
            $output .= $mod->afterlink;

            // Closing the tag which contains everything but edit icons.
            // Content part of the module should not be part of this.
            $output .= html_writer::end_tag('div');
        }

        $output .= $this->course_section_cm_text($mod, $displayoptions);

        // Show availability info (if module is not available).
        $output .= $this->course_section_cm_availability($mod, $displayoptions);

        $output .= html_writer::end_tag('div');
        return $output;
    }

    /**
     * Returns the list of all editing actions that current user can perform on the module
     *
     * @param cm_info $mod The module to produce editing buttons for
     * @param int $indent The current indenting (default -1 means no move left-right actions)
     * @param int $sr The section to link back to (used for creating the links)
     * @return string Output
     */
    public function get_cm_edit_actions(cm_info $mod, $indent=-1, $sr=null) {
        global $COURSE, $SITE;

        static $str;

        $output = '';

        $coursecontext = context_course::instance($mod->course);
        $modcontext = context_module::instance($mod->id);

        $editcaps = array('moodle/course:manageactivities', 'moodle/course:activityvisibility');

        // No permission to edit anything.
        if (!has_any_capability($editcaps, $modcontext)) {
            return array();
        }

        $hasmanageactivities = has_capability('moodle/course:manageactivities', $modcontext);

        if (!isset($str)) {
            $str = get_strings(array('delete', 'move', 'editsettings', 'hide', 'show'), 'moodle');
        }

        $baseurl = new moodle_url('/course/mod.php', array('sesskey' => sesskey()));

        if ($sr !== null) {
            $baseurl->param('sr', $sr);
        }

        // Move.
        if ($hasmanageactivities) {
            if (!preg_match(
            '/^\d+_(label|section|document|question|link|video|mauthorgym|mauthorcloudlibrary|mauthor)_\d+/',
            $mod->idnumber)) {
                $output .= $this->output->action_link(
                    new moodle_url($baseurl, array('copy' => $mod->id)), '',  null, array(),
                    new pix_icon('t/move', $str->move, 'moodle',
                        array('class' => 'iconsmall', 'title' => $str->move))
                );
            }
        }

        // Update.
        if ($hasmanageactivities) {
            $output .= $this->output->action_link(
                new moodle_url($baseurl, array('update' => $mod->id)), '',  null, array(),
                new pix_icon('t/edit', $str->editsettings, 'moodle',
                    array('class' => 'iconsmall', 'title' => $str->editsettings))
            );
        }

        // Hide/Show.
        if (has_capability('moodle/course:activityvisibility', $modcontext)) {
            if ($mod->visible) {
                $output .= $this->output->action_link(
                    new moodle_url($baseurl, array('hide' => $mod->id)), '', null, array(),
                    new pix_icon('t/hide', $str->hide, 'moodle',
                        array('class' => 'iconsmall', 'title' => $str->hide))
                );
            } else {
                $output .= $this->output->action_link(
                    new moodle_url($baseurl, array('show' => $mod->id)), '', null, array(),
                    new pix_icon('t/show', $str->show, 'moodle',
                        array('class' => 'iconsmall', 'title' => $str->show))
                );
            }
        }

        // Delete.
        if ($hasmanageactivities) {
            $output .= $this->output->action_link(
                new moodle_url($baseurl, array('delete' => $mod->id)), '', null, array(),
                new pix_icon('t/delete', $str->delete, 'moodle',
                    array('class' => 'iconsmall', 'title' => $str->delete))
            );
        }

        return $output;
    }

    /**
     * Renders html to display a name with the link to the course module on a course page
     *
     * If module is unavailable for user but still needs to be displayed
     * in the list, just the name is returned without a link
     *
     * Note, that for course modules that never have separate pages (i.e. labels)
     * this function return an empty string
     *
     * @param cm_info $mod
     * @param array $displayoptions
     * @return string
     */
    public function course_section_cm_name(cm_info $mod, $displayoptions = array()) {
        global $CFG;
        $output = '';
        if (!$mod->uservisible && empty($mod->availableinfo)) {
            // Nothing to be displayed to the user.
            return $output;
        }
        if (!$mod->url) {
            return $output;
        }

        // Accessibility: for files get description via icon, this is very ugly hack!
        $instancename = $mod->get_formatted_name();
        $altname = $mod->modfullname;
        // Avoid unnecessary duplication: if e.g. a forum name already
        // includes the word forum (or Forum, etc) then it is unhelpful
        // to include that in the accessible description that is added.
        if (false !== strpos(core_text::strtolower($instancename),
                core_text::strtolower($altname))) {
            $altname = '';
        }
        // File type after name, for alphabetic lists (screen reader).
        if ($altname) {
            $altname = get_accesshide(' '.$altname);
        }

        // For items which are hidden but available to current user
        // ($mod->uservisible), we show those as dimmed only if the user has
        // viewhiddenactivities, so that teachers see 'items which might not
        // be available to some students' dimmed but students do not see 'item
        // which is actually available to current student' dimmed.
        $linkclasses = 'vv-activitylink';
        $accesstext = '';
        $textclasses = '';
        if ($mod->uservisible) {
            $conditionalhidden = $this->is_cm_conditionally_hidden($mod);
            $accessiblebutdim = (!$mod->visible || $conditionalhidden) &&
                has_capability('moodle/course:viewhiddenactivities', $mod->context);
            if ($accessiblebutdim) {
                $linkclasses .= ' dimmed';
                $textclasses .= ' dimmed_text';
                if ($conditionalhidden) {
                    $linkclasses .= ' conditionalhidden';
                    $textclasses .= ' conditionalhidden';
                }
                // Show accessibility note only if user can access the module himself.
                $accesstext = get_accesshide(get_string('hiddenfromstudents').':'. $mod->modfullname);
            }
        } else {
            $linkclasses .= ' dimmed';
            $textclasses .= ' dimmed_text';
        }

        // Get on-click attribute value if specified and decode the onclick - it
        // has already been encoded for display (puke).
        $onclick = htmlspecialchars_decode($mod->onclick, ENT_QUOTES);

        $groupinglabel = '';
        if (!empty($mod->groupingid) &&
            has_capability('moodle/course:managegroups', context_course::instance($mod->course))) {
            $groupings = groups_get_all_groupings($mod->course);
            $groupinglabel = html_writer::tag('span',
                '('.format_string($groupings[$mod->groupingid]->name).')',
                array('class' => 'groupinglabel '.$textclasses));
        }

        // Display link itself.
        if (preg_match('/unit|section/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-book'));
        } else if (preg_match('/document/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-document'));
        } else if (preg_match('/question/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-activity'));
        } else if (preg_match('/link/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-link'));
        } else if (preg_match('/video/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-video'));
        } else if (preg_match('/mauthorgym/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-mauthorgym'));
        } else if (preg_match('/mauthorcloudlibrary/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-mauthorcloudlibrary'));
        } else if (preg_match('/mauthor/', $mod->idnumber)) {
            $icon = html_writer::tag('div', '', array('class' => 'vv-icon-mauthor'));
        } else {
            $attributes = array(
                'src' => $mod->get_icon_url(),
                'class' => 'iconlarge activityicon',
                'alt' => ' ',
                'role' => 'presentation',
            );
            $icon = html_writer::empty_tag('img', $attributes);
        }

        $activitylink = $icon . $accesstext .
                html_writer::tag('span', $instancename . $altname, array('class' => 'instancename'));
        if ($mod->uservisible) {
            $output .= html_writer::link($mod->url, $activitylink,
                array('class' => $linkclasses, 'onclick' => $onclick)) . $groupinglabel;
        } else {
            // We may be displaying this just in order to show information.
            // About visibility, without the actual link ($mod->uservisible).
            $output .= html_writer::tag('div', $activitylink, array('class' => $textclasses)) .
                    $groupinglabel;
        }
        return $output;
    }
}
