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
 * Display the course home page.
 *
 * CHANGES: This file is for editing course sections, not just viewing them.
 * Section IDs are passed on to the appropriate function.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 1999 Martin Dougiamas  http://dougiamas.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

    require_once('../../../config.php');                                        // CHANGED.
    require_once('locallib.php');                                               // CHANGED: Use custom code.
    require_once($CFG->libdir . '/completionlib.php');

if (true) {                                                                     // ADDED: To pass indentation style check.

    $id = optional_param('id', 0, PARAM_INT);
    $name = optional_param('name', '', PARAM_TEXT);
    $edit = optional_param('edit', -1, PARAM_BOOL);
    $hideid = optional_param('hideid', null, PARAM_INT);                        // CHANGED: Use ID.
    $showid = optional_param('showid', null, PARAM_INT);                        // CHANGED: Use ID.
    $idnumber = optional_param('idnumber', '', PARAM_RAW);
    $sectionid = optional_param('sectionid', 0, PARAM_INT);
    $section = optional_param('section', 0, PARAM_INT);
    // REMOVED: move parameter.
    // ADDED instead: Specify destination via relationship to another section (identified by ID).
    $destparentid = optional_param('destparentid', null, PARAM_INT);
    $destprevupid = optional_param('destprevupid', null, PARAM_INT);
    $destnextupid = optional_param('destnextupid', null, PARAM_INT);
    $destlevel = optional_param('destlevel', null, PARAM_INT);
    // END ADDED.
    $marker = optional_param('marker', -1, PARAM_INT);
    $switchrole = optional_param('switchrole', -1, PARAM_INT); // Deprecated, use course/switchrole.php instead.
    $return = optional_param('return', 0, PARAM_LOCALURL);

    // ADDED.
    $hide = null;
    if (isset($hideid)) {
        $hide = new \stdClass();
        $hide->id = $hideid;
    }
    $show = null;
    if (isset($showid)) {
        $show = new \stdClass();
        $show->id = $showid;
    }
    $dest = null;
    if (isset($destparentid) || isset($destprevupid) || isset($destnextupid)) {
        $dest = new \stdClass();
        if (isset($destparentid)) {
            $dest->parentid = $destparentid;
        }
        if (isset($destprevupid)) {
            $dest->prevupid = $destprevupid;
        }
        if (isset($destnextupid)) {
            $dest->nextupid = $destnextupid;
        }
        if (isset($destlevel)) {
            $dest->level = $destlevel;
        }
    }
    // END ADDED.

    $params = [];
    if (!empty($name)) {
        $params = ['shortname' => $name];
    } else if (!empty($idnumber)) {
        $params = ['idnumber' => $idnumber];
    } else if (!empty($id)) {
        $params = ['id' => $id];
    } else {
        throw new moodle_exception('unspecifycourseid', 'error');
    }

    $course = $DB->get_record('course', $params, '*', MUST_EXIST);

    $urlparams = ['id' => $course->id];

    // Sectionid should get priority over section number.
    // CHANGED.
    if ($sectionid) {
        $section = $DB->get_record('course_sections', ['id' => $sectionid, 'course' => $course->id], '*', MUST_EXIST);
    } else {
        $section = $DB->get_record('course_sections', ['section' => $section, 'course' => $course->id], '*', MUST_EXIST);
    }
    if ($section->section) {
        // NOTE: This parameter is changed from number to ID, in renderer.php for view pages, and here for edit pages.
        $urlparams['sectionid'] = $section->id;
    }
    // END CHANGED.

    $PAGE->set_url('/course/view.php', $urlparams); // Defined here to avoid notices on errors etc.
    // TODO: Change?
    // NOTE: Can't change this without changing references to $PAGE->url ?

    // Prevent caching of this page to stop confusion when changing page after making AJAX changes.
    $PAGE->set_cacheable(false);

    \context_helper::preload_course($course->id);
    $context = \context_course::instance($course->id, MUST_EXIST);

    // Remove any switched roles before checking login.
    if ($switchrole == 0 && confirm_sesskey()) {
        role_switch($switchrole, $context);
    }

    require_login($course);

    // Switchrole - sanity check in cost-order...
    $resetuserallowedediting = false;
    if ($switchrole > 0 && confirm_sesskey() &&
        has_capability('moodle/role:switchroles', $context)) {
        // Is this role assignable in this context?
        // Inquiring minds want to know...
        $aroles = get_switchable_roles($context);
        if (is_array($aroles) && isset($aroles[$switchrole])) {
            role_switch($switchrole, $context);
            // Double check that this role is allowed here.
            require_login($course);
        }
        // Reset course page state - this prevents some weird problems ;-) .
        $USER->activitycopy = false;
        $USER->activitycopycourse = null;
        unset($USER->activitycopyname);
        unset($SESSION->modform);
        $USER->editing = 0;
        $resetuserallowedediting = true;
    }

    // If course is hosted on an external server, redirect to corresponding
    // url with appropriate authentication attached as parameter.
    if (file_exists($CFG->dirroot . '/course/externservercourse.php')) {
        include($CFG->dirroot . '/course/externservercourse.php');
        if (function_exists('extern_server_course')) {
            if ($externurl = extern_server_course($course)) {
                redirect($externurl);                                           // TODO: Check if there are issues with this?
            }
        }
    }


    require_once($CFG->dirroot . '/calendar/lib.php');    // This is after login because it needs $USER.

    // Must set layout before gettting section info. See MDL-47555.
    $PAGE->set_pagelayout('course');
    $PAGE->add_body_class('limitedwidth');

    if ($section && $section->section > 0) {
        // CHANGED LINE ABOVE: section is now an object. Dereference number property.

        // Get section details and check it exists.
        $modinfo = get_fast_modinfo($course);
        $coursesections = $modinfo->get_section_info($section->section, MUST_EXIST); // CHANGED: Dereference section number.

        // Check user is allowed to see it.
        if (!$coursesections->uservisible) {
            // Check if coursesection has conditions affecting availability and if
            // so, output availability info.
            if ($coursesections->visible && $coursesections->availableinfo) {
                $sectionname = get_section_name($course, $coursesections);
                $message = get_string('notavailablecourse', '', $sectionname);
                redirect(course_get_url($course), $message, null, \core\output\notification::NOTIFY_ERROR);
            } else {
                // Note: We actually already know they don't have this capability
                // or uservisible would have been true; this is just to get the
                // correct error message shown.
                require_capability('moodle/course:viewhiddensections', $context);
            }
        }
    }

    // Fix course format if it is no longer installed.
    $format = course_get_format($course);
    $course->format = $format->get_format();

    $PAGE->set_pagetype('course-view-' . $course->format);
    $PAGE->set_other_editing_capability('moodle/course:update');
    $PAGE->set_other_editing_capability('moodle/course:manageactivities');
    $PAGE->set_other_editing_capability('moodle/course:activityvisibility');
    if (course_format_uses_sections($course->format)) {
        $PAGE->set_other_editing_capability('moodle/course:sectionvisibility');
        $PAGE->set_other_editing_capability('moodle/course:movesections');
    }

    // Preload course format renderer before output starts.
    // This is a little hacky but necessary since
    // format.php is not included until after output starts.
    $format->get_renderer($PAGE);

    if ($resetuserallowedediting) {
        // Ugly hack.
        unset($PAGE->_user_allowed_editing);
    }

    if (!isset($USER->editing)) {
        $USER->editing = 0;
    }
    if ($PAGE->user_allowed_editing()) {
        if (($edit == 1) && confirm_sesskey()) {
            $USER->editing = 1;
            // Redirect to site root if Editing is toggled on frontpage.
            if ($course->id == SITEID) {
                redirect($CFG->wwwroot . '/?redirect=0');
            } else if (!empty($return)) {
                redirect($CFG->wwwroot . $return);
            } else {
                $url = new \moodle_url($PAGE->url, ['notifyeditingon' => 1]);
                redirect($url);
            }
        } else if (($edit == 0) && confirm_sesskey()) {
            $USER->editing = 0;
            if (!empty($USER->activitycopy) && $USER->activitycopycourse == $course->id) {
                $USER->activitycopy = false;
                $USER->activitycopycourse = null;
            }
            // Redirect to site root if Editing is toggled on frontpage.
            if ($course->id == SITEID) {
                redirect($CFG->wwwroot . '/?redirect=0');
            } else if (!empty($return)) {
                redirect($CFG->wwwroot . $return);
            } else {
                redirect($PAGE->url);
            }
        }

        if (has_capability('moodle/course:sectionvisibility', $context)) {
            // CHANGED: Call custom functions, pass section info.
            if ($hide && confirm_sesskey()) {
                format_multitopic_set_section_visible($course->id, $hide, 0);
                redirect($PAGE->url);
            }

            if ($show && confirm_sesskey()) {
                format_multitopic_set_section_visible($course->id, $show, 1);
                redirect($PAGE->url);
            }
            // END CHANGED.
        }

        if (!empty($section) && !empty($dest) &&
                has_capability('moodle/course:movesections', $context) &&
                (has_capability('moodle/course:update', $context) || !isset($dest->level)) &&
                confirm_sesskey()) {                                            // CHANGED: Use $dest, check capability for level.
                                                                                // TODO: Is this the correct capability?
            $destsection = $dest;                                               // CHANGED: Use section info with ID instead of num.
            try {                                                               // CHANGED: Use try/catch instead of return false.
                format_multitopic_move_section_to($course, $section, $destsection);
                if ($course->id == SITEID) {
                    redirect($CFG->wwwroot . '/?redirect=0');
                } else {
                    redirect(course_get_url($course, $section));                // CHANGED: Return to the moved section.
                }
            } catch (moodle_exception $e) {                                     // CHANGED: Use returned error message.
                echo $OUTPUT->notification($e->getMessage());
            }
        }
    } else {
        $USER->editing = 0;
    }

    $SESSION->fromdiscussion = $PAGE->url->out(false);


    if ($course->id == SITEID) {
        // This course is not a real course.
        redirect($CFG->wwwroot . '/');
    }

    // Determine whether the user has permission to download course content.
    $candownloadcourse = \core\content::can_export_context($context, $USER);

    // We are currently keeping the button here from 1.x to help new teachers figure out
    // what to do, even though the link also appears in the course admin block.  It also
    // means you can back out of a situation where you removed the admin block. :) .
    if ($PAGE->user_allowed_editing()) {
        $buttons = $OUTPUT->edit_button($PAGE->url);
        $PAGE->set_button($buttons);
    }

    // If viewing a section, make the title more specific.
    if ($section && $section->section > 0 && course_format_uses_sections($course->format)) { // CHANGED: Dereference section num.
        $sectionname = get_string('sectionname', "format_$course->format");
        $sectiontitle = get_section_name($course, $section);
        $PAGE->set_title(get_string('coursesectiontitle', 'moodle',
            ['course' => $course->fullname, 'sectiontitle' => $sectiontitle, 'sectionname' => $sectionname]));
    } else {
        $PAGE->set_title(get_string('coursetitle', 'moodle', ['course' => $course->fullname]));
    }

    $PAGE->set_heading($course->fullname);
    echo $OUTPUT->header();

    if ($USER->editing == 1) {

        // MDL-65321 The backup libraries are quite heavy, only require the bare minimum.
        require_once($CFG->dirroot . '/backup/util/helper/async_helper.class.php');

        if (\async_helper::is_async_pending($id, 'course', 'backup')) {
            echo $OUTPUT->notification(get_string('pendingasyncedit', 'backup'), 'warning');
        }
    }

    // Course wrapper start.
    echo \html_writer::start_tag('div', ['class' => 'course-content']);

    // Make sure that section 0 exists (this function will create one if it is missing).
    course_create_sections_if_missing($course, 0);

    // Get information about course modules and existing module types.
    // format.php in course formats may rely on presence of these variables.
    $modinfo = get_fast_modinfo($course);
    $modnames = get_module_types_names();
    $modnamesplural = get_module_types_names(true);
    $modnamesused = $modinfo->get_used_module_names();
    $mods = $modinfo->get_cms();
    $sections = $modinfo->get_section_info_all();

    // CAUTION, hacky fundamental variable defintion to follow!
    // Note that because of the way course fromats are constructed though
    // inclusion we pass parameters around this way..
    $displaysection = $section;

    // Include course AJAX.
    include_course_ajax($course, $modnamesused);

    // Include the actual course format.
    require($CFG->dirroot . '/course/format/' . $course->format . '/format.php');
    // Content wrapper end.

    echo \html_writer::end_tag('div');

    // Trigger course viewed event.
    // We don't trust $context here. Course format inclusion above executes in the global space. We can't assume
    // anything after that point.
    course_view(\context_course::instance($course->id), $section->section);      // CHANGED: Dereference section number property.

    // If available, include the JS to prepare the download course content modal.
    if ($candownloadcourse) {
        $PAGE->requires->js_call_amd('core_course/downloadcontent', 'init');
    }

    // Load the view JS module if completion tracking is enabled for this course.
    $completion = new \completion_info($course);
    if ($completion->is_enabled()) {
        $PAGE->requires->js_call_amd('core_course/view', 'init');
    }

    echo $OUTPUT->footer();

}
