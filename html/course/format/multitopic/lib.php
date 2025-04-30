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
 * This file contains main class for Multitopic course format.
 *
 * @since     Moodle 2.0
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2009 Sam Hemelryk
 * @copyright based on work by 2012 onwards Marina Glancy
 * @copyright based on work by 2012 David Herney Bernal - cirano
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/course/format/lib.php');
// ADDED.
require_once(__DIR__ . '/locallib.php');
require_once(__DIR__ . '/classes/global_navigation_wrapper.php');
require_once(__DIR__ . '/classes/courseheader.php');
require_once(__DIR__ . '/classes/coursecontentheaderfooter.php');
// END ADDED.

use core\output\inplace_editable;

// ADDED.
/** @var int The level of the General section, which represents the course as a whole.
 * Set to -1, to be a level above the top-level sections in OneTopic format, which are numbered 0.
 * NOTE: None of these constants can be changed anymore, as parts of the code assume these values.
 */
const FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT = -1;

/** @var int Deepest level of page to let users create.  Must be between the root level and the topic level. */
const FORMAT_MULTITOPIC_SECTION_LEVEL_PAGE_USE = 1;

/** @var int Level of topics, which are displayed within pages. */
const FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC = 2;
// END ADDED.

/**
 * Main class for the Multitopic course format.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2009 Sam Hemelryk
 * @copyright based on work by 2012 onwards Marina Glancy
 * @copyright based on work by 2012 David Herney Bernal - cirano
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_multitopic extends core_courseformat\base {

    // ADDED.
    /** @var int ID of section 0 / the General section, treated as the section root by the Multitopic format */
    public $fmtrootsectionid;

    /** @var stdClass Multitopic-specific section information */
    private $fmtsectionsextra = null;

    /** @var course_modinfo|null Mod info the Multitopic-specific section information was based on */
    private $fmtmodinfo = null;

    /** @var bool Multitopic-specific section information is complete*/
    private $fmtsectionsextracomplete = false;

    /** @var int|null the sectionid selected */
    protected $singlesectionid = null;

    /** @var int|null the sectionid as specified */
    public $originalsinglesectionid = null;
    // END ADDED.

    // INCLUDED declaration /course/format/classes/base.php class base function __construct.
    /**
     * Creates a new instance of class
     *
     * Please use course_get_format($courseorid) to get an instance of the format class
     *
     * @param string $format
     * @param int $courseid
     * @return format_multitopic
     */
    protected function __construct($format, $courseid) {
        global $DB;
        parent::__construct($format, $courseid);
        if ($courseid) {
            $this->fmtrootsectionid = $DB->get_field('course_sections', 'id', ['section' => 0, 'course' => $courseid]);
            // TODO: Check if this is set correctly for new courses?
        }
    }
    // END INCLUDED.

    // INCLUDED /course/format/classes/base.php class base function get_course_display.
    /**
     * Get the course display value for the current course.
     *
     * Formats extending topics or weeks will use coursedisplay as this setting name
     * so they don't need to override the method. However, if the format uses a different
     * display logic it must override this method to ensure the core renderers know
     * if a COURSE_DISPLAY_MULTIPAGE or COURSE_DISPLAY_SINGLEPAGE is being used.
     *
     * @return int The current value (COURSE_DISPLAY_MULTIPAGE or COURSE_DISPLAY_SINGLEPAGE)
     */
    public function get_course_display(): int {
        return COURSE_DISPLAY_SINGLEPAGE;
    }
    // END INCLUDED.

    /**
     * Generate the title for this section page.
     *
     * @return string the page title
     */
    public function page_title(): string {
        return get_string_manager()->string_exists('sectionoutline', 'format_multitopic') ?
                get_string('sectionoutline', 'format_multitopic') : get_string('topicoutline');
    }

    /**
     * Returns true if this course format uses sections.
     *
     * @return bool
     */
    public function uses_sections(): bool {
        return true;
    }

    /**
     * Returns true if this course format uses course index
     *
     * This function may be called without specifying the course id
     * i.e. in course_index_drawer()
     *
     * @return bool
     */
    public function uses_course_index(): bool {
        return true;
    }

    /**
     * Returns true if this course format uses activity indentation.
     *
     * @return bool if the course format uses indentation.
     */
    public function uses_indentation(): bool {
        global $CFG;
        return (($CFG->version >= 2022041907.09 && $CFG->version < 2022042000
              || $CFG->version >= 2022112802.09 && $CFG->version < 2022112900
              || $CFG->version >= 2023031400)
            && get_config('format_multitopic', 'indentation')) ? true : false;
    }

    // ADDED.
    /**
     * Returns a list of Multitopic-specific section information.
     *
     * @param bool $needall do we need all properties
     * @return \format_multitopic\section_info_extra[]
     */
    final public function fmt_get_sections_extra($needall = true): array {

        $course = $this->get_course();
        $modinfo = $course ? $this->get_modinfo() : null;

        if (isset($this->fmtsectionsextra) && $this->fmtmodinfo == $modinfo) {

            $fmtsectionsextra = $this->fmtsectionsextra;

        } else {

            $this->fmtsectionsextracomplete = false;

            if ($course) {
                $sections = $modinfo->get_section_info_all();
            } else {
                $sections = [];
            }

            $timenow = time();

            $courseperioddays = format_multitopic_duration_as_days($course->periodduration);

            // Forward pass.

            // Initialise generated list of sections.
            $fmtsectionsextra = [];

            // The previous section at, or above, each level.
            $sectionextraprevatlevel = array_fill(FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT,
                                            FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1, null);

            // The current section at, or above, each level.
            $sectionextraatlevel = array_fill(FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT,
                                        FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1, null);

            foreach ($sections as $thissection) {

                // Create new object.
                $thissectionextra = new \format_multitopic\section_info_extra($thissection);

                if (!empty($thissection->component)) {
                    $thissectionextra->levelsan = 0;
                    $fmtsectionsextra[$thissection->id] = $thissectionextra;
                    continue;
                }

                // Fix the section's level within appropriate bounds.
                $levelsan = ($sectionextraatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT] == null) ?
                        FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT
                        : max(FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1,
                        min($thissection->level ?? FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC, FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC));
                $thissectionextra->levelsan = $levelsan;

                // Update remembered sections.
                for ($sublevel = $levelsan; $sublevel <= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC; $sublevel++) {
                    $sectionextraprevatlevel[$sublevel] = $sectionextraatlevel[$sublevel];
                    $sectionextraatlevel[$sublevel] = $thissectionextra;
                }

                // The previous section at or above this section's level.
                $thissectionextra->prevupid = $sectionextraprevatlevel[$levelsan] ? $sectionextraprevatlevel[$levelsan]->id : null;

                // The previous page.
                $thissectionextra->prevpageid = $sectionextraprevatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - 1] ?
                                                $sectionextraprevatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - 1]->id : null;

                // The previous section at any level.
                $thissectionextra->prevanyid = $sectionextraprevatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC] ?
                                                $sectionextraprevatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC]->id : null;

                // The section's parent.
                $thissectionextra->parentid = ($levelsan > FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT) ?
                                                $sectionextraatlevel[$levelsan - 1]->id : null;

                // Initialise tree-related properties to be set in the reverse pass.
                $thissectionextra->hassubsections = false;  // Whether this section has any subsections (page or topic).
                $thissectionextra->pagedepth = $levelsan;   // The lowest level of all sub-pages.
                $thissectionextra->pagedepthdirect = $levelsan; // The lowest level of direct sub-pages.

                // Set visibility properties.
                $thissectionextra->parentvisiblesan = ($levelsan <= FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT) ?
                                                    true : $sectionextraatlevel[$levelsan - 1]->visiblesan;
                $thissectionextra->visiblesan = ($levelsan <= FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT) ?
                                                    true
                                                    : ($sectionextraatlevel[$levelsan - 1]->visiblesan && $thissection->visible);

                // Set date-start property from previous section.
                $thissectionextra->datestart = $sectionextraprevatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC] ?
                                                $sectionextraprevatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC]->dateend
                                                : (is_null($courseperioddays) ? null : $course->startdate);

                // Set date-end property.
                if ($levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) {
                    $sectionperioddays = 0;
                } else {
                    $sectionperioddays = format_multitopic_duration_as_days($thissection->periodduration);
                    if ($sectionperioddays === null) {
                        $sectionperioddays = $courseperioddays;
                    }
                }
                $thissectionextra->dateend = (is_null($thissectionextra->datestart) || is_null($sectionperioddays)) ?
                                            null
                                            : ($thissectionextra->datestart + $sectionperioddays * 24 * 60 * 60);

                // The level down to which this section contains the current section.
                // Initialise for reverse pass.
                $iscurrent = $thissectionextra->dateend
                            && ($thissectionextra->datestart <= $timenow) && ($timenow < $thissectionextra->dateend);
                $thissectionextra->currentnestedlevel = $iscurrent ? FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC
                                                            : FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT - 1;

                // Add this section to the list.
                $fmtsectionsextra[$thissection->id] = $thissectionextra;

            }

            $this->fmtsectionsextra = $fmtsectionsextra;
            $this->fmtmodinfo = $modinfo;

        }

        if ($needall && !$this->fmtsectionsextracomplete) {

            // Reverse pass.

            // Remembered sections.
            $sectionnextatlevel = array_fill(FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT,
                                            FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1, null);

            foreach (array_reverse($fmtsectionsextra) as $thissectionextra) {
                $thissection = $thissectionextra->sectionbase;

                if (!empty($thissection->component)) {
                    continue;
                }

                $levelsan = $thissectionextra->levelsan;

                // Tree properties from next sections.
                $thissectionextra->nextupid = $sectionnextatlevel[$levelsan] ?
                                                $sectionnextatlevel[$levelsan]->id : null;
                $thissectionextra->nextpageid = $sectionnextatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - 1] ?
                                                $sectionnextatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - 1]->id : null;
                $thissectionextra->nextanyid = $sectionnextatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC] ?
                                                $sectionnextatlevel[FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC]->id : null;

                // Parent's tree properties.
                if ($thissectionextra->parentid) {
                    $parent = $fmtsectionsextra[$thissectionextra->parentid];
                    $parent->hassubsections = true;
                    if ($levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) {
                        $parent->pagedepth = max($parent->pagedepth, $thissectionextra->pagedepth);
                        $showsection = $thissection->uservisible || ($thissection->section == 0) ||
                                ($parent->uservisible || ($parent->section == 0))
                                && ($thissection->visible || !$course->hiddensections)
                                && ($thissection->available || !empty($thissection->availableinfo));
                        if ($showsection) {
                            $parent->pagedepthdirect = max($parent->pagedepthdirect, $levelsan);
                        }
                    }
                    if ($thissectionextra->currentnestedlevel >= FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT) {
                        $parent->currentnestedlevel = max($parent->currentnestedlevel, $levelsan - 1);
                    }
                }

                // Update remembered next sections.
                for ($sublevel = $levelsan; $sublevel <= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC; $sublevel++) {
                    $sectionnextatlevel[$sublevel] = $thissectionextra;
                }

            }

            $this->fmtsectionsextra = $fmtsectionsextra;
            $this->fmtsectionsextracomplete = true;

        }

        return $fmtsectionsextra;

    }

    /**
     * Returns Multitopic-specific section information.
     *
     * @param int|stdClass|\section_info $section either section number or row from course_section table
     * @param int $strictness
     * @return \format_multitopic\section_info_extra
     */
    final public function fmt_get_section_extra($section, int $strictness = IGNORE_MISSING) {
        if (!is_object($section)) {
            $section = (object)['section' => $section];
        }
        $sectionsextra = $this->fmt_get_sections_extra();
        if (isset($section->id)) {
            if (array_key_exists($section->id, $sectionsextra)) {
                return $sectionsextra[$section->id];
            }
        } else if (isset($section->section)) {
            foreach ($sectionsextra as $thissectionextra) {
                if ($thissectionextra->section == $section->section) {
                    return $thissectionextra;
                }
            }
        }
        if ($strictness == MUST_EXIST) {
            throw new moodle_exception('sectionnotexist');
        }
        return null;
    }
    // END ADDED.

    /**
     * Returns the display name of the given section that the course prefers.
     *
     * Use section name is specified by user. Otherwise use default.
     *
     * @param int|stdClass|\section_info $section Section object from database.
     * @return string Display name that the course format prefers, e.g. "Section 2"
     */
    public function get_section_name($section): string {

        // ADDED.
        if (!is_object($section)) {
            $section = $this->get_section($section);
        }
        $sectionextra = $this->fmt_get_section_extra($section);

        $weekword = new lang_string('week');
        $weeksword = get_string_manager()->string_exists('weeks_capitalised', 'format_multitopic') ?
            get_string('weeks_capitalised', 'format_multitopic') : get_string('weeks');
        // Figure out the string for the week number.
        $daystring = '';
        if ($sectionextra->dateend && ($sectionextra->datestart < $sectionextra->dateend)) {
            $currentyear = format_multitopic_week_date(time())->o;
            $datestart = format_multitopic_week_date($sectionextra->datestart + 12 * 60 * 60);
            $dateend = format_multitopic_week_date($sectionextra->dateend - 12 * 60 * 60);
            if ($datestart->o == $dateend->o) {
                // Within one year.
                $yearstring = $datestart->o != $currentyear ? ($datestart->o . ' ') : '';
                if ($datestart->W == $dateend->W) {
                    // Within one week.
                    $weekstring = $yearstring . $weekword . ' ' . $datestart->W;
                    if ($datestart->N == $dateend->N) {
                        // One day.
                        $daystring = $weekstring . ' ' . $datestart->D;
                    } else if (($datestart->N == 1) && ($dateend->N == 7)) {
                        // Whole week.
                        $daystring = $weekstring;
                    } else {
                        // Partial week.
                        $daystring = $weekstring . ' ' . $datestart->D . '–' . $dateend->D;
                    }
                } else if (($datestart->N == 1) && ($dateend->N == 7)) {
                    // Spans whole weeks.
                    $daystring = $yearstring . $weeksword . ' ' . $datestart->W . '–' . $dateend->W;
                } else {
                    // Spans partial weeks.
                    $daystring = $yearstring . $weekword . ' ' . $datestart->W . ' ' . $datestart->D
                                . '–' . $weekword . ' ' . $dateend->W . ' ' . $dateend->D;
                }
            } else {
                // Spans years.
                $yearstartstring = $datestart->o != $currentyear ? ($datestart->o . ' ') : '';
                $yearendstring = $dateend->o != $currentyear ? ($dateend->o . ' ') : '';
                if (($datestart->N == 1) && ($dateend->N == 7)) {
                    // Spans whole weeks.
                    $daystring = $yearstartstring . $weekword . ' ' . $datestart->W
                            . '–' . $yearendstring . $weekword . ' ' . $dateend->W;
                } else {
                    // Spans partial weeks.
                    $daystring = $yearstartstring . $weekword . ' ' . $datestart->W . ' ' . $datestart->D
                            . '–' . $yearendstring . $weekword . ' ' . $dateend->W . ' ' . $dateend->D;
                }
            }
            $daystring = '<span class="section-title-prefix">' . $daystring . ': ' . '</span>';
        }
        // END ADDED.

        if ((string)$section->name !== '') {
            return $daystring . format_string($section->name, true,
                    ['context' => context_course::instance($this->courseid)]);  // CHANGED.
        } else {
            return $daystring . $this->get_default_section_name($section);
        }
    }

    /**
     * Returns the default section name for the Multitopic course format.
     *
     * If the section number is 0, it will use the string with key = section0name from the course format's lang file.
     * If the section number is not 0, the base implementation of course_format::get_default_section_name which uses
     * the string with the key = 'sectionname' from the course format's lang file + the section number will be used.
     *
     * @param stdClass $section Section object from database or just field course_sections section
     * @return string The default value for the section name.
     */
    public function get_default_section_name($section): string {
        if ($section->section == 0) {
            // Return the general section.
            return get_string('section0name', 'format_multitopic');
        } else {
            // Use course_format::get_default_section_name implementation which
            // will display the section name in "Section n" format.
            return parent::get_default_section_name($section);
        }
    }

    /**
     * Set if the current format instance will show all pages or an individual one.
     *
     * @param int|null $sectionid null for all pages, or a page's sectionid.
     */
    public function set_sectionid(?int $sectionid): void {
        $this->set_sectionnum(isset($sectionid) ? (object)['id' => $sectionid] : null);
    }

    /**
     * Get if the current format instance will show all pages or an individual one.
     *
     * @return int|null null for all pages or the page's sectionid.
     */
    public function get_sectionid(): ?int {
        return $this->singlesectionid;
    }

    /**
     * Set which section page the current format instance will show.
     *
     * @param int $singlesection a page's section number
     * @deprecated
     */
    public function set_section_number(int $singlesection): void {
        $this->set_sectionnum($singlesection);
    }

    /**
     * Set the current page to display.
     *
     * @param \section_info|stdClass|int|null $section null for all pages or a page's section info or number.
     */
    public function set_sectionnum($section): void {
        if ($section === null) {
            $this->singlesection = null;
            $this->singlesectionid = null;
            $this->originalsinglesectionid = null;
            return;
        }

        $sectionextra = $this->fmt_get_section_extra($section);

        $this->originalsinglesectionid = $sectionextra->id;

        // If display section is a topic, get the page it is on instead.
        if ($sectionextra->levelsan >= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) {
            $sectionsextra = $this->fmt_get_sections_extra();
            $sectionextra = $sectionsextra[$sectionextra->parentid];
        }

        $this->singlesectionid = $sectionextra->id;
        $this->singlesection = $sectionextra->section;
    }

    /**
     * Get the current page's section number to display.
     *
     * @return int|null the current page's section number or null when there is no single page.
     */
    public function get_sectionnum(): ?int {
        return $this->singlesection;
    }

    /**
     * Get the section number of the page the current format instance will show.
     *
     * @return int the page's section number
     * @deprecated
     */
    public function get_section_number(): int {
        if ($this->singlesection === null) {
            return 0;
        }

        return $this->singlesection;
    }

    /**
     * Return the format section preferences.
     *
     * @return array of preferences indexed by section ID
     */
    public function get_sections_preferences(): array {

        $result = [];

        $course = $this->get_course();
        $sectionsextra = $this->fmt_get_sections_extra();
        $coursesectionscache = cache::make('core', 'coursesectionspreferences');

        $coursesections = $coursesectionscache->get($course->id);
        $collapsedset = ($coursesections && count($coursesections) > 0) ? max(array_keys($coursesections)) : 0;
        $collapsedset = ($collapsedset > 0 && isset($coursesections[$collapsedset]->fmtcollapsedset)) ?
                        $collapsedset : 0;
        if ($collapsedset >= max(array_keys($sectionsextra))) {
            return $coursesections;
        }

        $sectionpreferences = $this->fmt_set_get_sections_preferences();

        foreach ($sectionpreferences as $preference => $sectionids) {
            if (!empty($sectionids) && is_array($sectionids)) {
                foreach ($sectionids as $sectionid) {
                    if (!isset($result[$sectionid])) {
                        $result[$sectionid] = new stdClass();
                    }
                    $result[$sectionid]->$preference = true;
                }
            }
        }

        $coursesectionscache->set($course->id, $result);
        return $result;
    }

    /**
     * Return the format section preferences.
     *
     * @return array of preferences indexed by preference name
     */
    public function get_sections_preferences_by_preference(): array {
        return $this->fmt_set_get_sections_preferences();
    }

    /**
     * Set the format section preferences.
     *
     * @param string $preferencename preference name
     * @param int[] $sectionids affected section IDs
     *
     */
    public function set_sections_preference(string $preferencename, array $sectionids): void {
        $this->fmt_set_get_sections_preferences($preferencename, $sectionids);
    }

    /**
     * Set and return the format section preferences.
     *
     * @param string|null $preferencename preference name
     * @param int[]|null $sectionids affected section IDs
     * @return array of preferences indexed by section ID
     *
     */
    protected function fmt_set_get_sections_preferences(?string $preferencename = null, ?array $sectionids = null): array {

        $course = $this->get_course();
        $sectionsextra = $this->fmt_get_sections_extra();

        $sectionpreferences = parent::get_sections_preferences_by_preference();

        $collapsedsetold = (count($sectionpreferences['fmtcollapsedset'] ?? []) > 0) ?
                            max($sectionpreferences['fmtcollapsedset']) : 0;

        // Clean, and index content collapsed.
        $contentcollapsedindexed = [];
        foreach ($sectionpreferences as $prefname => $sectids) {
            if ($prefname != 'fmtcollapsedset') {
                foreach ($sectids as $i => $sectionid) {
                    if (!isset($sectionsextra[$sectionid])) {
                        unset($sectids[$i]);
                    } else if ($prefname == 'contentcollapsed') {
                        $contentcollapsedindexed[$sectionid] = true;
                    }
                }
            }
        }

        // Try autocollapsing content.
        $sectionidsold = $sectionpreferences['contentcollapsed'] ?? null;
        $collapsedset = $collapsedsetold;
        $autocollapsedchanged = false;
        foreach ($sectionsextra as $sectionid => $sectionextra) {
            $section = $sectionextra->sectionbase;
            if ($sectionid > $collapsedsetold
                    && $sectionextra->levelsan >= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC
                    && ((($section->collapsible != '') ? $section->collapsible : $course->collapsible) != '0')
                    && !isset($contentcollapsedindexed[$sectionid])) {
                if (!isset($sectionpreferences['contentcollapsed'])) {
                    $sectionpreferences['contentcollapsed'] = [];
                }
                $sectionpreferences['contentcollapsed'][] = $sectionid;
                $autocollapsedchanged = true;
            }
            $collapsedset = max($collapsedset, $sectionid);
        }
        $sectionpreferences['fmtcollapsedset'] = [ $collapsedset ];
        $collapsedsetupdated = false;
        if ($autocollapsedchanged) {
            try {
                $this->fmt_set_sections_preferences_sub($sectionpreferences);
                $collapsedsetupdated = true;
            } catch (coding_exception $e) {
                if (isset($sectionidsold)) {
                    $sectionpreferences['contentcollapsed'] = $sectionidsold;
                } else {
                    unset($sectionpreferences['contentcollapsed']);
                }
            }
        }

        // Try writing specified changes.
        $error = null;
        if ($preferencename) {
            $sectionidsold = $sectionpreferences[$preferencename] ?? null;
            $sectionpreferences[$preferencename] = $sectionids;
            try {
                $this->fmt_set_sections_preferences_sub($sectionpreferences);
                $collapsedsetupdated = true;
            } catch (coding_exception $e) {
                $error = $e;  // We may want to rethrow this.
            }

            // Try writing specified changes without last seen section.
            if ($error && isset($sectionidsold) && count($sectionids) < count($sectionidsold)
                    && !$collapsedsetupdated && $collapsedset > $collapsedsetold) {
                $error = null;
                if ($collapsedsetold > 0) {
                    $sectionpreferences['fmtcollapsedset'] = [ $collapsedsetold ];
                } else {
                    unset($sectionpreferences['fmtcollapsedset']);
                }
                try {
                    $this->fmt_set_sections_preferences_sub($sectionpreferences);
                } catch (coding_exception $e) {
                    $error = $e;  // We will want to rethrow this.
                }
            }

            if ($error) {
                if (isset($sectionidsold)) {
                    $sectionpreferences[$preferencename] = $sectionidsold;
                } else {
                    unset($sectionpreferences[$preferencename]);
                }
            }

        }

        // If nothing else, try writing last seen section.
        if (!$collapsedsetupdated && $collapsedset > $collapsedsetold) {
            $sectionpreferences['fmtcollapsedset'] = [ $collapsedset ];
            try {
                $this->fmt_set_sections_preferences_sub($sectionpreferences);
                $collapsedsetupdated = true;
            } catch (coding_exception $e) {
                // Do nothing, because there's nothing we can do.
                $collapsedsetupdated = false;
            }
        }

        if ($error) {
            throw $error;
        }

        return $sectionpreferences;

    }

    /**
     * Set the format section preferences, given all preferences indexed by preference.
     *
     * @param array $sectionpreferences of preferences indexed by preference
     *
     */
    protected function fmt_set_sections_preferences_sub(array $sectionpreferences): void {
        global $USER;
        $course = $this->get_course();
        set_user_preference('coursesectionspreferences_' . $course->id, json_encode($sectionpreferences), $USER->id);
        // Invalidate section preferences cache.
        $coursesectionscache = cache::make('core', 'coursesectionspreferences');
        $coursesectionscache->delete($course->id);
    }

    /**
     * The URL to use for the specified course (with section).
     *
     * @param int|stdClass $section Section object from database or just field course_sections.section
     *                      Should specify fmt calculated properties,
     *                      specifically levelsan, and parentid where levelsan is topic level.
     * @param array $options options for view URL. At the moment core uses:
     *     'fmtedit' (bool)    if true, return URL for edit page rather than view page
     *     'navigation' (bool) if true and section has no separate page, the function returns null
     * @return null|moodle_url
     */
    public function get_view_url($section, $options = []) {
        global $CFG;
        $course = $this->get_course();
        $url = new moodle_url( ($options['fmtedit'] ?? false) ? '/course/format/multitopic/_course_view.php'
                                : '/course/view.php', ['id' => $course->id]);   // CHANGED.
        // REMOVED section return.
        // REMOVED convert sectioninfo to number.
        $sectionextra = ($section === null) ? null : $this->fmt_get_section_extra($section); // ADDED.
        if ($sectionextra !== null) {                                           // CHANGED.
            $pageid = $sectionextra->id;
            if (!empty($sectionextra->sectionbase->component)
                && $sectionextra->sectionbase->component == 'mod_subsection') {
                $modinfo = get_fast_modinfo($course);
                $pageid = $modinfo->get_instances_of('subsection')[$sectionextra->sectionbase->itemid]->section;
            }
            // CHANGED.
            $pageextra = ($pageid == $sectionextra->id) ?
                $sectionextra : $this->fmt_get_section_extra((object)['id' => $pageid]);
            $pageid = ($pageextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC) ?
                $pageextra->id : $pageextra->parentid;
            if ($pageid && $pageid != $this->fmtrootsectionid) {
                if (!empty($pageextra->sectionbase->component)) {
                    $url = new moodle_url( '/course/section.php', ['id' => $pageid]);
                } else {
                    $url->param('sectionid', $pageid);
                }
            }
            if ($sectionextra && $sectionextra->id != $pageid) {
                if (empty($CFG->linkcoursesections) && !empty($options['navigation']) && $CFG->version < 2023120700) {
                    return null;
                }
                $url->set_anchor('sectionid-' . $sectionextra->id . '-title');
            }
            // END CHANGED.
        }
        return $url;
    }

    /**
     * Returns the information about the ajax support in the given source format.
     *
     * The returned object's property (boolean)capable indicates that
     * the course format supports Moodle course ajax features.
     *
     * @return stdClass
     */
    public function supports_ajax(): stdClass {
        $ajaxsupport = new stdClass();
        $ajaxsupport->capable = true;
        return $ajaxsupport;
    }

    /**
     * Returns true if this course format is compatible with content components.
     *
     * Using components means the content elements can watch the frontend course state and
     * react to the changes. Formats with component compatibility can have more interactions
     * without refreshing the page, like having drag and drop from the course index to reorder
     * sections and activities.
     *
     * @return bool if the format is compatible with components.
     */
    public function supports_components(): bool {
        return true;
    }

    /**
     * Loads all of the course sections into the navigation.
     *
     * @param global_navigation $navigation
     * @param navigation_node $node The course node within the navigation
     * @return void
     */
    public function extend_course_navigation($navigation, navigation_node $node) {
        global $PAGE;

        $navigationwrapper = new \format_multitopic\global_navigation_wrapper($navigation); // ADDED.

        // If section is specified in course/view.php, make sure it is expanded in navigation.
        if ($navigation->includesectionnum === false) {
            // CHANGED.
            $selectedsectionid = optional_param('sectionid', null, PARAM_INT);
            if ($selectedsectionid !== null && (!defined('AJAX_SCRIPT') || AJAX_SCRIPT == '0') &&
                    $PAGE->url->compare(new moodle_url('/course/view.php'), URL_MATCH_BASE)) {
                $navigationwrapper->innerincludesectionid = $selectedsectionid;
            }
            // END CHANGED.
        }

        // Check if there are callbacks to extend course navigation.
        // REMOVED function call.
        // INCLUDED instead /course/format/classes/base.php function extend_course_navigation body.
        if ($course = $this->get_course()) {
            $navigationwrapper->load_generic_course_sections($course, $node);   // CHANGED: Wrapped navigation object.
        }
        // END INCLUDED.

        // We want to remove the general section if it is empty.
        // REMOVED.
    }

    // INCLUDED instead /course/format/weeks/lib.php function ajax_section_move .
    /**
     * Custom action after section has been moved in AJAX mode.
     *
     * Used in course/rest.php
     *
     * @return array This will be passed in ajax respose
     */
    public function ajax_section_move(): array {
        global $PAGE;
        $titles = [];
        $current = -1;
        $course = $this->get_course();
        $modinfo = get_fast_modinfo($course);
        $renderer = $this->get_renderer($PAGE);
        if ($renderer && ($sections = $modinfo->get_section_info_all())) {
            foreach ($sections as $number => $section) {
                $titles[$number] = $renderer->section_title($section, $course);
                if ($this->is_section_current($section)) {
                    $current = $number;
                }
            }
        }
        return ['sectiontitles' => $titles, 'current' => $current, 'action' => 'move'];
    }
    // END INCLUDED.

    /**
     * Returns the list of blocks to be automatically added for the newly created course.
     *
     * @return array of default blocks, must contain two keys BLOCK_POS_LEFT and BLOCK_POS_RIGHT
     *     each of values is an array of block names (for left and right side columns)
     */
    public function get_default_blocks(): array {
        return [
            BLOCK_POS_LEFT => [],
            BLOCK_POS_RIGHT => [],
        ];
    }

    /**
     * Definitions of the additional options that this course format uses for courses.
     *
     * Multitopic format uses the following options:
     * - periodduration (from Periods format): how long each topic takes.  (Only 1 day, 1 week, or null are currently supported.)
     * - hiddensections (from the standard Topics format): whether hidden sections are shown collapsed, or not shown at all.
     * - bannerslice (custom option): how far down the course image to take the banner slice from (0-100).
     *
     * @param bool $foreditform
     * @return array of options
     */
    public function course_format_options($foreditform = false): array {
        static $courseformatoptions = false;
        if ($courseformatoptions === false) {
            $courseconfig = get_config('moodlecourse');
            $courseformatoptions = [
                // INCLUDED /course/format/periods/lib.php function course_format_options 'periodduration'.
                'periodduration' => [
                    'default' => null,                                          // CHANGED.
                    'type' => PARAM_NOTAGS,
                ],
                // END INCLUDED.
                // ADDED.
                'collapsible' => [
                    'default' => '1',
                    'type' => PARAM_ALPHANUM,
                ],
                // END ADDED.
                'hiddensections' => [
                    'default' => $courseconfig->hiddensections,
                    'type' => PARAM_INT,
                ],
                // REMOVED: course display.
                // ADDED.
                'bannerslice' => [
                    'default' => 0,
                    'type' => PARAM_INT,
                ],
                // END ADDED.
            ];
        }
        if ($foreditform && !isset($courseformatoptions['hiddensections']['label'])) { // CHANGED.
            $courseformatoptionsedit = [
                // INCLUDED /course/format/periods/lib.php function course_format_options $foreditform 'periodduration' .
                'periodduration' => [
                    'label' => new lang_string('perioddurationdefault', 'format_multitopic'), // CHANGED.
                    'help' => 'perioddurationdefault',
                    'help_component' => 'format_multitopic',                    // CHANGED.
                    'element_type' => 'select',                                 // CHANGED.
                    // REMOVED: Replaced periodduration type.
                    // ADDED.
                    'element_attributes' => [[
                        null => new lang_string('period_undefined', 'format_multitopic'),
                        '1 day' => new lang_string('numday', '', 1),
                        '1 week' => new lang_string('numweek', '', 1),
                    ], ],
                    // END ADDED.
                ],
                // END INCLUDED.
                // ADDED.
                'collapsible' => [
                    'label' => get_string('collapsibledefault', 'format_multitopic'),
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            '0' => get_string('no'),
                            '1' => get_string('yes'),
                        ],
                    ],
                    'help' => 'collapsibledefault',
                    'help_component' => 'format_multitopic',
                ],
                // END ADDED.
                'hiddensections' => [
                    'label' => new lang_string('hiddensections'),
                    'help' => 'hiddensections',
                    'help_component' => 'moodle',
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            0 => new lang_string('hiddensectionscollapsed'),
                            1 => new lang_string('hiddensectionsinvisible'),
                        ],
                    ],
                ],
                // REMOVED: coursedisplay .
                // ADDED.
                'bannerslice' => [
                    'label' => new lang_string('bannerslice', 'format_multitopic'),
                    'help' => 'bannerslice',
                    'help_component' => 'format_multitopic',
                    'element_type' => 'select',
                    'element_attributes' => [
                            [ ' 0%', ' 1%', ' 2%', ' 3%', ' 4%', ' 5%', ' 6%', ' 7%', ' 8%', ' 9%',
                              '10%', '11%', '12%', '13%', '14%', '15%', '16%', '17%', '18%', '19%',
                              '20%', '21%', '22%', '23%', '24%', '25%', '26%', '27%', '28%', '29%',
                              '30%', '31%', '32%', '33%', '34%', '35%', '36%', '37%', '38%', '39%',
                              '40%', '41%', '42%', '43%', '44%', '45%', '46%', '47%', '48%', '49%',
                              '50%', '51%', '52%', '53%', '54%', '55%', '56%', '57%', '58%', '59%',
                              '60%', '61%', '62%', '63%', '64%', '65%', '66%', '67%', '68%', '69%',
                              '70%', '71%', '72%', '73%', '74%', '75%', '76%', '77%', '78%', '79%',
                              '80%', '81%', '82%', '83%', '84%', '85%', '86%', '87%', '88%', '89%',
                              '90%', '91%', '92%', '93%', '94%', '95%', '96%', '97%', '98%', '99%',
                              '100%', ],
                    ],
                ],
                // END ADDED.
            ];
            $courseformatoptions = array_merge_recursive($courseformatoptions, $courseformatoptionsedit);
        }
        return $courseformatoptions;
    }

    // INCLUDED course/format/classes/base.php function section_format_options declaration.
    /**
     * Definitions of the additional options that this course format uses for section
     *
     * See course_format::course_format_options() for return array definition.
     *
     * Additionally section format options may have property 'cache' set to true
     * if this option needs to be cached in see get_fast_modinfo(). The 'cache' property
     * is recommended to be set only for fields used in course_format::get_section_name(),
     * course_format::extend_course_navigation() and course_format::get_view_url()
     *
     * For better performance cached options are recommended to have 'cachedefault' property
     * Unlike 'default', 'cachedefault' should be static and not access get_config().
     *
     * Regardless of value of 'cache' all options are accessed in the code as
     * $sectioninfo->OPTIONNAME
     * where $sectioninfo is instance of section_info, returned by
     * get_fast_modinfo($course)->get_section_info($sectionnum)
     * or get_fast_modinfo($course)->get_section_info_all()
     *
     * All format options for particular section are returned by calling:
     * $this->get_format_options($section);
     *
     * @param bool $foreditform
     * @return array
     */
    public function section_format_options($foreditform = false): array {
        // INCLUDED instead /course/format/topics/lib.php function course_format_options body (excluding array items).
        static $sectionformatoptions = false;
        if ($sectionformatoptions === false) {
            $sectionformatoptions = [
                // INCLUDED /course/format/onetopic/lib.php function section_format_options 'level'.
                'level' => [
                    'default' => FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC,         // CHANGED.
                    'type' => PARAM_INT,
                ],
                // END INCLUDED.
                // INCLUDED /course/format/periods/lib.php function section_format_options 'periodduration'.
                'periodduration' => [
                    'default' => null,                                          // ADDED.
                    'type' => PARAM_NOTAGS,
                ],
                // END INCLUDED.
                // ADDED.
                'collapsible' => [
                    'default' => null,
                    'type' => PARAM_ALPHANUM,
                ],
                // END ADDED.
            ];
        }
        if ($foreditform && !isset($sectionformatoptions['level']['label'])) {
            $sectionformatoptionsedit = [
                // INCLUDED /course/format/onetopic/lib.php function section_format_options $foreditform 'level'.
                'level' => [
                    // REMOVED: 'default' & 'type'.
                    'label' => get_string('level', 'format_multitopic'),        // CHANGED.
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1 => get_string('asprincipal', 'format_multitopic'), // CHANGED.
                            FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 2 => get_string('aschild', 'format_multitopic'),     // CHANGED.
                            FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC => get_string('topic'), // ADDED.
                        ],
                    ],
                    'help' => 'level',
                    'help_component' => 'format_multitopic',
                ],
                // END INCLUDED.
                // INCLUDED /course/format/periods/lib.php function section_format_options $foreditform 'periodduration'.
                'periodduration' => [
                    'label' => new lang_string('perioddurationoverride', 'format_multitopic'), // CHANGED.
                    'help' => 'perioddurationoverride',
                    'help_component' => 'format_multitopic',                    // CHANGED.
                    'element_type' => 'select',                                 // CHANGED.
                    // REMOVED: Changed type.
                    // ADDED.
                    'element_attributes' => [[
                        null => new lang_string('default'),
                        '0 day' => new lang_string('period_0_days', 'format_multitopic'),
                        '1 day' => new lang_string('numday', '', 1),
                        '2 day' => new lang_string('numdays', '', 2),
                        '3 day' => new lang_string('numdays', '', 3),
                        '4 day' => new lang_string('numdays', '', 4),
                        '5 day' => new lang_string('numdays', '', 5),
                        '6 day' => new lang_string('numdays', '', 6),
                        '1 week' => new lang_string('numweek', '', 1),
                        '2 week' => new lang_string('numweeks', '', 2),
                        '3 week' => new lang_string('numweeks', '', 3),
                        '4 week' => new lang_string('numweeks', '', 4),
                    ], ],
                    // END ADDED.
                ],
                // END INCLUDED.
                // ADDED.
                'collapsible' => [
                    'label' => get_string('collapsibleoverride', 'format_multitopic'),
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            null => new lang_string('default'),
                            '0' => get_string('no'),
                            '1' => get_string('yes'),
                        ],
                    ],
                    'help' => 'collapsibleoverride',
                    'help_component' => 'format_multitopic',
                ],
                // END ADDED.
            ];
            $sectionformatoptions = array_merge_recursive($sectionformatoptions, $sectionformatoptionsedit); // CHANGED.
        }
        return $sectionformatoptions;                                           // CHANGED.
        // END INCLUDED.
    }
    // END INCLUDED.

    /**
     * Adds format options elements to the course/section edit form.
     *
     * This function is called from {@see course_edit_form::definition_after_data()}.
     *
     * @param MoodleQuickForm $mform form the elements are added to.
     * @param bool $forsection 'true' if this is a section edit form, 'false' if this is course edit form.
     * @return array array of references to the added form elements.
     */
    public function create_edit_form_elements(&$mform, $forsection = false): array {
        $elements = parent::create_edit_form_elements($mform, $forsection);

        // REMOVED: numsections .

        // ADDED.
        global $PAGE;
        // Include code to preview the banner (and attribution, to an extent), if we're on the course edit page.
        if (!$forsection) {
            $PAGE->requires->js('/course/format/multitopic/_course_edit.js');
        }
        // END ADDED.

        return $elements;
    }

    /**
     * Updates format options for a course.
     *
     * If the course format was changed to 'multitopic', we try to copy options
     * 'periodduration', 'hiddensections', and 'bannerslice' from the previous format.
     *
     * @param stdClass|array $data return value from {@see moodleform::get_data()} or array with data
     * @param stdClass $oldcourse if this function is called from {@see update_course()}
     *     this object contains information about the course before update
     * @return bool whether there were any changes to the options values
     */
    public function update_course_format_options($data, $oldcourse = null): bool {
        $data = (array)$data;
        if ($oldcourse !== null) {
            $oldcourse = (array)$oldcourse;
            $options = $this->course_format_options();
            foreach ($options as $key => $unused) {
                if (!array_key_exists($key, $data)) {
                    if (array_key_exists($key, $oldcourse)) {
                        $data[$key] = $oldcourse[$key];
                    }
                }
            }
            if (!array_key_exists('periodduration', $data) && array_key_exists('layoutstructure', $oldcourse)) {
                if ($oldcourse['layoutstructure'] == 1 || $oldcourse['layoutstructure'] == 4) {
                    $data['periodduration'] = null;
                } else if ($oldcourse['layoutstructure'] == 5) {
                    $data['periodduration'] = '1 day';
                } else if ($oldcourse['layoutstructure'] == 2 || $oldcourse['layoutstructure'] == 3) {
                    $data['periodduration'] = '1 week';
                }
            }
        }
        return $this->update_format_options($data);
    }

    // TODO: Customise editsection_form to sanitise periodduration?

    // INCLUDED /course/format/classes/base.php function course_header declaration.
    /**
     * Create course header: A banner showing the course name, with a slice of the course image as the background.
     *
     * @return null|renderable
     */
    public function course_header() {
        // REMOVED: Removed empty function body.
        // ADDED.
        return new \format_multitopic\courseheader($this->get_course());
        // END ADDED.
    }
    // END INCLUDED.

    // INCLUDED /course/format/classes/base.php function course_content_header declaration.
    /**
     * Create course content header when applicable: A "back to course" button.
     *
     * @return renderable|null
     */
    public function course_content_header() {
        global $PAGE;
        // Don't show in manage files popup.  TODO: Better way?
        if (class_exists('\format_multitopic\output\renderer')) {
            return new \format_multitopic\coursecontentheaderfooter($PAGE, -1);
        } else {
            return null;
        }

    }
    // END INCLUDED.

    // INCLUDED /course/format/classes/base.php function course_content_footer declaration.
    /**
     * Create course content footer when applicable: Another "back to course" button.
     *
     * @return renderable|null
     */
    public function course_content_footer() {
        global $PAGE;
        // Don't show in manage files popup.  TODO: Better way?
        if (class_exists('\format_multitopic\output\renderer')) {
            return new \format_multitopic\coursecontentheaderfooter($PAGE, 1);
        } else {
            return null;
        }

    }
    // END INCLUDED.

    // INCLUDED /course/format/classes/base.php function is_section_current .
    /**
     * Returns true if the specified section is current.
     *
     * @param int|stdClass|section_info $section The section to check.  Should specify fmt calculated properties.
     * @return bool
     */
    public function is_section_current($section): bool {
        $sectionextra = $this->fmt_get_section_extra($section);                 // ADDED.
        return ($sectionextra->section && $sectionextra->currentnestedlevel >= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC); // CHANGED.
    }
    // END INCLUDED.

    // INCLUDED /course/format/classes/base.php function is_section_visible.
    /**
     * Returns if an specific section is visible to the current user.
     *
     * Formats can overrride this method to implement any special section logic.
     *
     * @param section_info $section the section modinfo
     * @return bool;
     */
    public function is_section_visible(section_info $section): bool {
        // Previous to Moodle 4.0 thas logic was hardcoded. To prevent errors in the contrib plugins
        // the default logic is the same required for topics and weeks format and still uses
        // a "hiddensections" format setting.
        $course = $this->get_course();
        $hidesections = $course->hiddensections ?? true;
        // Show the section if the user is permitted to access it, OR if it's not available
        // but there is some available info text which explains the reason & should display,
        // OR it is hidden but the course has a setting to display hidden sections as unavilable.
        return $section->uservisible || ($section->section == 0) ||
            ($section->visible || !$hidesections)
            && ($section->available || !empty($section->availableinfo));
    }
    // END INCLUDED.

    /**
     * Allows to specify for modinfo that section is not available even when it is visible and conditionally available.
     *
     * @param section_info $section
     * @param bool $available the 'available' propery of the section_info as it was evaluated by conditional availability.
     * @param string $availableinfo the 'availableinfo' propery of the section_info as it was evaluated by conditional availability.
     */
    public function section_get_available_hook(section_info $section, &$available, &$availableinfo): void {
        $sectionsextra = $this->fmt_get_sections_extra(false);
        $parentid = $sectionsextra[$section->id]->parentid;
        if (isset($parentid)) {
            $parent = $sectionsextra[$parentid]->sectionbase;
            if (!($parent->visible && $parent->available) && ($parent->id != $this->fmtrootsectionid)) {
                $available = false;
                if (!$parent->uservisible) {
                    $availableinfo = '';
                }
            }
        }
    }

    /**
     * Whether this format allows to delete sections.
     *
     * Do not call this function directly, instead use see course_can_delete_section().
     *
     * @param int|stdClass|section_info $section The section to check.
     * @return bool
     */
    public function can_delete_section($section): bool {
        $sectionextra = $this->fmt_get_section_extra($section);                 // ADDED.
        return !$sectionextra->hassubsections;                                  // CHANGED.
    }

    // TODO: Customise delete_section to be recursive?

    /**
     * Prepares the templateable object to display section name.
     *
     * @param section_info|stdClass $section
     * @param bool $linkifneeded
     * @param bool $editable
     * @param null|lang_string|string $edithint
     * @param null|lang_string|string $editlabel
     * @return \core\output\inplace_editable
     */
    public function inplace_editable_render_section_name($section, $linkifneeded = true,
            $editable = null, $edithint = null, $editlabel = null): \core\output\inplace_editable {
        if (empty($edithint)) {
            $edithint = new lang_string('editsectionname');                     // CHANGED.
        }
        if (empty($editlabel)) {
            $title = get_section_name($section->course, $section);
            $editlabel = new lang_string('newsectionname', '', $title);         // CHANGED.
        }

        // REMOVED function call.
        // INCLUDED instead /course/format/classes/base.php function inplace_editable_render_section_name body.
        global $USER, $CFG;
        require_once($CFG->dirroot . '/course/lib.php');

        if ($editable === null) {
            $editable = !empty($USER->editing) && has_capability('moodle/course:update',
                    context_course::instance($section->course));
        }

        $displayvalue = $title = get_section_name($section->course, $section);
        if ($linkifneeded) {
            // Display link under the section name, for page sections.
            $url = course_get_url($section->course, $section, ['navigation' => true]); // CHANGED.
            if ($url) {
                $displayvalue = html_writer::link($url, $title);
            }
            $itemtype = 'sectionname';
        } else {
            // If $linkifneeded==false, we never display the link (this is used when rendering the section header).
            // Itemtype 'sectionnamenl' (nl=no link) will tell the callback that link should not be rendered -
            // there is no other way callback can know where we display the section name.
            $itemtype = 'sectionnamenl';
        }
        if (empty($edithint)) {
            $edithint = new lang_string('editsectionname');
        }
        if (empty($editlabel)) {
            $editlabel = new lang_string('newsectionname', '', $title);
        }

        return new \core\output\inplace_editable('format_' . $this->format, $itemtype, $section->id, $editable,
            $displayvalue, $section->name, $edithint, $editlabel);
        // END INCLUDED.
    }

    /**
     * Indicates whether the course format supports the creation of a news forum.
     *
     * @return bool
     */
    public function supports_news(): bool {
        return true;
    }

    /**
     * Returns whether this course format allows the activity to
     * have "triple visibility state" - visible always, hidden on course page but available, hidden.
     *
     * @param stdClass|cm_info $cm course module (may be null if we are displaying a form for adding a module)
     * @param stdClass|section_info $section section where this module is located or will be added to
     * @return bool
     */
    public function allow_stealth_module_visibility($cm, $section): bool {
        // Allow the third visibility state inside visible sections or in section 0.
        return !$section->section || $section->visible;
    }

    /**
     * Callback used in WS core_course_edit_section when teacher performs an AJAX action on a section (show/hide).
     *
     * Access to the course is already validated in the WS but the callback has to make sure
     * that particular action is allowed by checking capabilities.
     *
     * Course formats should register.
     *
     * @param section_info|stdClass $section
     * @param string $action
     * @param int $sr unused
     * @return null|array any data for the Javascript post-processor (must be json-encodeable)
     */
    public function section_action($section, $action, $sr) {
        global $PAGE;

        // REMOVED: marker.

        // For show/hide actions call the parent method and return the new content for .section_availability element.
        $rv = parent::section_action($section, $action, null);                  // CHANGED: removed section return.
        $renderer = $PAGE->get_renderer('format_multitopic');                   // CHANGED.

        if (!($section instanceof section_info)) {
            $modinfo = course_modinfo::instance($this->courseid);
            $section = $modinfo->get_section_info($section->section);
        }
        $elementclass = $this->get_output_classname('content\\section\\availability');
        $availability = new $elementclass($this, $section);

        $rv['section_availability'] = $renderer->render($availability);
        return $rv;
    }

    /**
     * Return the plugin configs for external functions.
     *
     * @return array the list of configuration settings
     * @since Moodle 3.5
     */
    public function get_config_for_external(): array {
        // Return everything (nothing to hide).
        return $this->get_format_options();
    }
}

/**
 * Implements callback inplace_editable() allowing to edit values in-place.
 *
 * @param string $itemtype
 * @param int $itemid
 * @param mixed $newvalue
 * @return inplace_editable
 */
function format_multitopic_inplace_editable(string $itemtype, int $itemid, $newvalue): \core\output\inplace_editable {
    // CHANGED LINE ABOVE.
    global $DB, $CFG;
    require_once($CFG->dirroot . '/course/lib.php');
    if ($itemtype === 'sectionname' || $itemtype === 'sectionnamenl') {
        $section = $DB->get_record_sql(
            'SELECT s.* FROM {course_sections} s JOIN {course} c ON s.course = c.id WHERE s.id = ? AND c.format = ?',
            [$itemid, 'multitopic'], MUST_EXIST);                               // CHANGED.
        return course_get_format($section->course)->inplace_editable_update_section_name($section, $itemtype, $newvalue);
    }
}
