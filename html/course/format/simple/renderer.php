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
 * Renderer for outputting the Simple topics course format.
 *
 * @package format_simple
 * @copyright 2012-2014 UPCnet
 * @author Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat, Marc Espinosa Zamora marc.espinosa.zamora@upcnet.es (Moodle 2.4)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since Moodle 2.0
 */


defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot.'/course/format/renderer.php');
require_once($CFG->dirroot.'/course/format/topics/renderer.php');

/**
 * Basic renderer for topics format.
 *
 * @copyright 2012 Dan Poltawski
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_simple_renderer extends format_topics_renderer {


    const DEFAULTICONSIZE = 128;

    /**
     * Generate the starting container html for a list of sections
     * @param type $addclass boolean to indicate if add or not class attribute
     * @return string HTML to output.
     */
    protected function start_section_list($addclass = false) {
        return html_writer::start_tag('ul', array('class' => 'simple'));
    }

    /**
     * Output the html for a single section page .
     *
     * @param stdClass $course The course entry from DB
     * @param array $sections (argument not used)
     * @param array $mods (argument not used)
     * @param array $modnames (argument not used)
     * @param array $modnamesused (argument not used)
     * @param int $displaysection The section number in the course which is being displayed
     */
    public function print_single_section_page($course, $sections, $mods, $modnames, $modnamesused, $displaysection) {
        global $PAGE;

        $modinfo = get_fast_modinfo($course);
        $course = course_get_format($course)->get_course();

        // Can we view the section in question?
        if (!($sectioninfo = $modinfo->get_section_info($displaysection))) {
            // This section doesn't exist
            print_error('unknowncoursesection', 'error', null, $course->fullname);
            return;
        }

        if (!$sectioninfo->uservisible) {
            if (!$course->hiddensections) {
                echo $this->start_section_list();
                echo $this->section_hidden($displaysection);
                echo $this->end_section_list();
            }
            // Can't view this section.
            return;
        }

        // Copy activity clipboard..
        echo $this->course_activity_clipboard($course, $displaysection);

        if (!empty($course->showtopiczero) && $displaysection) {
	        $thissection = $modinfo->get_section_info(0);
	        if ($thissection->summary or !empty($modinfo->sections[0])) {
	            echo $this->start_section_list();
	            echo $this->section_header($thissection, $course, true, $displaysection);

                $this->print_simple_section($course, $thissection, null, null, true, '100%', false, $displaysection);
	            echo $this->section_footer();
	            echo $this->end_section_list();
	        }
	    }


        // Start single-section div
        echo html_writer::start_tag('div', array('class' => 'single-section'));

        // The requested section page.
        $thissection = $modinfo->get_section_info($displaysection);

        // Title with section navigation links.
        $sectionnavlinks = $this->get_nav_links($course, $modinfo->get_section_info_all(), $displaysection);
        $sectiontitle = '';
        $sectiontitle .= html_writer::start_tag('div', array('class' => 'section-navigation navigationtitle'));
        $sectiontitle .= html_writer::tag('span', $sectionnavlinks['previous'], array('class' => 'mdl-left'));
        $sectiontitle .= html_writer::tag('span', $sectionnavlinks['next'], array('class' => 'mdl-right'));
        // Title attributes
        $classes = 'sectionname';
        if (!$thissection->visible) {
            $classes .= ' dimmed_text';
        }
        $sectiontitle .= $this->output->heading(get_section_name($course, $displaysection), 3, $classes);

        $sectiontitle .= html_writer::end_tag('div');
        echo $sectiontitle;

        // Now the list of sections..
        echo $this->start_section_list();

        echo $this->section_header($thissection, $course, true, $displaysection);

        $this->print_simple_section($course, $thissection, null, null, true, '100%', false, $displaysection);
        echo $this->section_footer();
        echo $this->end_section_list();

        // Display section bottom navigation.
        $sectionbottomnav = '';
        $sectionbottomnav .= html_writer::start_tag('div', array('class' => 'section-navigation mdl-bottom'));
        $sectionbottomnav .= html_writer::tag('span', $sectionnavlinks['previous'], array('class' => 'mdl-left'));
        $sectionbottomnav .= html_writer::tag('span', $sectionnavlinks['next'], array('class' => 'mdl-right'));
        $sectionbottomnav .= html_writer::tag('div', $this->section_nav_selection($course, $sections, $displaysection),
            array('class' => 'mdl-align'));
        $sectionbottomnav .= html_writer::end_tag('div');
        echo $sectionbottomnav;

        // Close single-section div.
        echo html_writer::end_tag('div');
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
        global $PAGE;

        $modinfo = get_fast_modinfo($course);
        $course = course_get_format($course)->get_course();

        $context = context_course::instance($course->id);
        // Title with completion help icon.
        echo $this->output->heading($this->page_title(), 2, 'accesshide');


        // Now the list of sections..
        echo $this->start_section_list();

        foreach ($modinfo->get_section_info_all() as $section => $thissection) {
            if ($section == 0) {
                // 0-section is displayed a little different then the others
                if ($thissection->summary or !empty($modinfo->sections[0]) or $PAGE->user_is_editing()) {
                    echo $this->section_header($thissection, $course, false, 0);
                    $this->print_simple_section($course, $thissection, null, null, true, '100%', false, $section);
                    echo $this->section_footer();
                }
                continue;
            }
            if ($section > $course->numsections) {
                // activities inside this section are 'orphaned', this section will be printed as 'stealth' below
                continue;
            }
            // Show the section if the user is permitted to access it, OR if it's not available
            // but showavailability is turned on (and there is some available info text).
            $showsection = $thissection->uservisible ||
                    ($thissection->visible && !$thissection->available && $thissection->showavailability
                    && !empty($thissection->availableinfo));
            if (!$showsection) {
                // Hidden section message is overridden by 'unavailable' control
                // (showavailability option).
                if (!$course->hiddensections && $thissection->available) {
                    echo $this->section_hidden($section);
                }

                continue;
            }

            if (!$PAGE->user_is_editing() && $course->coursedisplay == COURSE_DISPLAY_MULTIPAGE) {
                // Display section summary only.
                echo $this->section_summary($thissection, $course, null);
            } else {
                echo $this->section_header($thissection, $course, false, 0);
                if ($thissection->uservisible) {
                    $this->print_simple_section($course, $thissection, null, null, true, '100%', false, $section);
                }
                echo $this->section_footer();
            }
        }

        echo $this->end_section_list();

    }

	/**
	 * Prints a section full of activity modules
	 *
	 * @param stdClass $course The course
	 * @param stdClass|section_info $section The section object containing properties id and section
	 * @param array $mods (argument not used)
	 * @param array $modnamesused (argument not used)
	 * @param bool $absolute All links are absolute
	 * @param string $width Width of the container
	 * @param bool $hidecompletion Hide completion status
	 * @param int $sectionreturn The section to return to
	 * @return void
	 */
	function print_simple_section($course, $section, $mods, $modnamesused, $absolute=false, $width="100%", $hidecompletion=false, $sectionreturn=null) {
		global $CFG, $USER, $DB, $PAGE;

		$modinfo = get_fast_modinfo($course);

		//Accessibility: replace table with list <ul>, but don't output empty list.
		if (!empty($modinfo->sections[$section->section])) {

			// Fix bug #5027, don't want style=\"width:$width\".
			echo "<ul class=\"section img-text simple-mod-list\">\n";

			foreach ($modinfo->sections[$section->section] as $modnumber) {
				$mod = $modinfo->cms[$modnumber];

				// We can continue (because it will not be displayed at all)
	            // if The activity is not visible to users
	            if (!$mod->uservisible) {
	                // visibility shortcut
	                continue;
	            }

				$modcontext = context_module::instance($mod->id);

				$iconsize = !empty($course->simpleiconsize)?$course->simpleiconsize:self::DEFAULTICONSIZE;

				$liclasses = array();
				$liclasses[] = 'activity';
				$liclasses[] = $mod->modname;
				$liclasses[] = 'modtype_'.$mod->modname;
				$liclasses[] = 'size_'.$iconsize;

				$extraclasses = $mod->extraclasses;
				if ($extraclasses) {
					$liclasses = array_merge($liclasses, explode(' ', $extraclasses));
				}
				echo html_writer::start_tag('li', array('class'=>join(' ', $liclasses), 'id'=>'module-'.$modnumber));

				echo html_writer::start_tag('div');

				// Get data about this course-module
				$cm = $modinfo->cms[$modnumber];
				$content = $cm->get_formatted_content(array('overflowdiv' => true, 'noclean' => true));
        		$instancename = $cm->get_formatted_name();

				// Accessibility: for files get description via icon, this is very ugly hack!
				$altname = '';
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

				// Start the div for the activity title, excluding the edit icons.
				echo html_writer::start_tag('div', array('class' => 'activityinstance'));

				// We may be displaying this just in order to show information
				// about visibility, without the actual link
				$contentpart = '';

				// Get on-click attribute value if specified and decode the onclick - it
                // has already been encoded for display (puke).
                $onclick = htmlspecialchars_decode($mod->onclick, ENT_QUOTES);

				if ($url = $mod->url) {
					// Display link itself.

					// resize mimetype icons to a proper size
					$iconurl = simple_get_icon_url($mod, $modnumber, $iconsize);
					$pattern = '/f\/[a-zA-Z0-9]*-(\d+)\D*$/';
					preg_match($pattern, $iconurl, $matches);
					if ($matches) {
						$baseiconurl = str_replace($matches[0], "", $iconurl);
						$relativeiconurl = str_replace($matches[1], $iconsize, $matches[0]);
						$iconurl = $baseiconurl.$relativeiconurl;
					}
					$html = '<div class="simple_image" style="background-image: url(\''.$iconurl.'\');"></div>';
					$activitylink = $html .html_writer::start_tag('div').
						html_writer::tag('span', $instancename . $altname, array('class' => 'instancename'))
						.html_writer::end_tag('div');
					echo html_writer::link($url, $activitylink, array('onclick' => $onclick));
					// If specified, display extra content after link.
					if ($content) {
						$contentpart = html_writer::tag('div', $content, array('class' =>
								trim('contentafterlink ')));
					}
				} else {
					// No link, so display only content.
					$contentpart = html_writer::tag('div', $content);
				}

				// Module can put text after the link (e.g. forum unread)
				//echo $mod->get_after_link();

				// Closing the tag which contains everything but edit icons. $contentpart should not be part of this.
				echo html_writer::end_tag('div');

				// If there is content but NO link (eg label), then display the
				// content here (BEFORE any icons). In this case cons must be
				// displayed after the content so that it makes more sense visually
				// and for accessibility reasons, e.g. if you have a one-line label
				// it should work similarly (at least in terms of ordering) to an
				// activity.
				if (empty($url)) {
					echo $contentpart;
				}

				echo html_writer::end_tag('div');
				echo html_writer::end_tag('li')."\n";
			}
			echo "</ul><!--class='section'-->\n\n";
		}
	}

}
