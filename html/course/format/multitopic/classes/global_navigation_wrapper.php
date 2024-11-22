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
 * This file contains classes used to manage the navigation structures within Moodle.
 *
 * INCLUDED from /lib/navigationlib.php class global_navigation
 * CHANGED: Modified to show sections in a heirarchy, and use section IDs where possible.
 *
 * @since     Moodle 2.0
 * @package   format_multitopic
 * @copyright 2019 James Calder and Otago Polytechnic
 * @copyright based on work by 2009 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace format_multitopic;

// REMOVED start - class navigation_node_collection .

/**
 * The global navigation class used for... the global navigation
 *
 * This class is used by PAGE to store the global navigation for the site
 * and is then used by the settings nav and navbar to save on processing and DB calls
 *
 * See
 * lib/pagelib.php see moodle_page::initialise_theme_and_output()
 * lib/ajax/getnavbranch.php Called by ajax
 *
 * @package   format_multitopic
 * @category  navigation
 * @copyright 2019 James Calder and Otago Polytechnic
 * @copyright based on work by 2009 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class global_navigation_wrapper {
    // CHANGED LINE ABOVE.

    // ADDED.
    /** @var \global_navigation wrapped renderer */
    private $inner;
    // END ADDED.

    // NOTE: We need access to these private variables, so store our own copy.
    /** @var \moodle_page The Moodle page this navigation object belongs to. */
    protected $innerpage;
    /** @var bool A switch for whether to show empty sections in the navigation. */
    protected $innershowemptysections = true;

    // INCLUDED /lib/navigationlib.php class navigation_node $includesectionnum .
    /** @var mixed If set to an int, that section will be included even if it has no activities */
    public $innerincludesectionid = null;
    // END INCLUDED.

    // ADDED.
    /**
     * Construct wrapper
     *
     * @param \global_navigation $inner navigation to wrap
     */
    public function __construct(\global_navigation $inner) {
        global $PAGE;
        $this->inner = $inner;
        $this->innerpage = $PAGE;
        $this->innershowemptysections = true;
    }
    // END ADDED.

    // REMOVED class start - function load_course_sections .

    /**
     * Generates an array of sections and an array of activities for the given course.
     *
     * @param \stdClass $course
     * @return array [$sections, $activities]
     */
    protected function generate_sections_and_activities(\stdClass $course): array {
        global $CFG;
        require_once($CFG->dirroot . '/course/lib.php');

        $modinfo = get_fast_modinfo($course);
        $sectionsorig = $modinfo->get_section_info_all();

        // For course formats using 'numsections' trim the sections list.
        // REMOVED.

        $sections = [];
        $activities = [];

        foreach ($sectionsorig as $section) {                                   // CHANGED.
            $key = $section->id;                                                // ADDED.
            // Clone and unset summary to prevent $SESSION bloat (MDL-31802).
            $sections[$key] = clone($section);
            unset($sections[$key]->summary);
            $sections[$key]->hasactivites = false;
            if (!array_key_exists($section->section, $modinfo->sections)) {
                continue;
            }
            foreach ($modinfo->sections[$section->section] as $cmid) {
                $cm = $modinfo->cms[$cmid];
                $activity = new \stdClass;
                $activity->id = $cm->id;
                $activity->course = $course->id;
                $activity->sectionid = $section->id;                            // CHANGED: Use section ID instead of number.
                $activity->name = $cm->name;
                $activity->icon = $cm->icon;
                $activity->iconcomponent = $cm->iconcomponent;
                $activity->hidden = (!$cm->visible);
                $activity->modname = $cm->modname;
                $activity->nodetype = \navigation_node::NODETYPE_LEAF;
                $activity->onclick = $cm->onclick;
                $url = $cm->url;
                if (!$url) {
                    $activity->url = null;
                    $activity->display = false;
                } else {
                    $activity->url = $url->out();
                    $activity->display = $cm->is_visible_on_course_page() ? true : false;
                    if (\global_navigation::module_extends_navigation($cm->modname)) { // CHANGED.
                        $activity->nodetype = \navigation_node::NODETYPE_BRANCH;
                    }
                }
                $activities[$cmid] = $activity;
                if ($activity->display) {
                    $sections[$key]->hasactivites = true;
                }
            }
        }

        return [$sections, $activities];
    }

    /**
     * Generically loads the course sections into the course's navigation.
     *
     * @param \stdClass $course
     * @param \navigation_node $coursenode
     * @return array An array of course section nodes
     */
    public function load_generic_course_sections(\stdClass $course, \navigation_node $coursenode): array {
        global $CFG, $SITE;                                                     // CHANGED: Removed $DB and $USER.
        require_once($CFG->dirroot . '/course/lib.php');

        list($sections, $activities) = $this->generate_sections_and_activities($course);

        $navigationsections = [];
        // ADDED.
        // Navigation node at level n.
        // This is a list of the navigation nodes currently at each level,
        // from the node for the course, down to the node we're currently working on.
        $nodeln = array_fill(FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT,
                             FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC - FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1, $coursenode);
        // The navigation node we're currently working on.
        $sectionnode = $coursenode;
        // Extra navigation node ID counter.
        // Each navigation node must have an ID. Normally we would use section IDs,
        // but we need extra IDs for sections shown at multiple levels.
        // (These extra IDs are negative so they don't conflict with existing IDs).
        $extraid = -1;
        // END ADDED.
        foreach ($sections as $sectionid => $section) {
            $section = clone($section);
            $sectionextra = course_get_format($course)->fmt_get_section_extra($section); // ADDED.
            if ($course->id == $SITE->id) {
                $this->load_section_activities($coursenode, $section, $activities); // CHANGED: Pass section info rather than num.
            } else {
                if ((!$section->uservisible && $section->section != 0) || (!$this->innershowemptysections &&
                        !$section->hasactivites && !$sectionextra->hassubsections
                        && $this->inner->includesectionnum !== $section->section    // TODO: Remove?
                        && $this->innerincludesectionid !== $section->id)) {
                            // CHANGED ABOVE: Use sanitised visibility, check for subsections, and use section ID.
                    continue;
                }

                // CHANGED.
                $sectionname = get_section_name($course, $section);
                $url = course_get_url($course, $section, ['navigation' => true]); // CHANGED: Custom call.

                // Add multiple nodes per section, one per level as required.
                // The course node already exists, so we must start below course level.
                // And activities don't seem to get removed from the course node in the Boost theme,
                // so we need at least one section node to attach activities to.
                // ADDED.
                $firstlevel = max($sectionextra->levelsan, FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT + 1);
                $lastlevel = max($sectionextra->pagedepthdirect, $firstlevel);
                // END ADDED.
                for ($level = $firstlevel; $level <= $lastlevel; $level++) {
                    $parentnode = $nodeln[$level - 1];                          // ADDED.
                    $nodeid = ($level == $lastlevel) ? $sectionid : $extraid--; // ADDED.
                    $sectionnode = $parentnode->add($sectionname, $url, \navigation_node::TYPE_SECTION,
                        null, $nodeid,
                        new \pix_icon($sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC ? 'i/section'
                                                                                                 : 'e/bullet_list', ''));
                    // CHANGED ABOVE: Attach to parentnode with nodeid as defined above, and use a list icon for topic sections.
                    $sectionnode->nodetype = \navigation_node::NODETYPE_BRANCH;
                    $sectionnode->hidden = (!$section->visible || !$section->available) && ($section->section != 0);
                    $nodeln[$level] = $sectionnode;                             // ADDED.
                }

                // Fill the rest of the list of nodes with the node we're currently working on.
                // This is so Topic-level sections will find the correct parent.
                for ($level = $level; $level <= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC; $level++) {
                    $nodeln[$level] = $sectionnode;
                }

                if ($this->inner->includesectionnum !== false && $this->inner->includesectionnum == $section->section
                        || isset($this->innerincludesectionid) && $this->innerincludesectionid == $section->id
                        || $sectionextra->hassubsections) {
                            // CHANGED ABOVE: Use section ID.
                            // Also check for subsections, because activities might not get loaded otherwise.
                    $this->load_section_activities($sectionnode, $section, $activities);
                }
                $navigationsections[$sectionid] = $section;
                // END CHANGED.

            }
        }
        return $navigationsections;
    }

    /**
     * Loads all of the activities for a section into the navigation structure.
     *
     * @param \navigation_node $sectionnode
     * @param \section_info $section
     * @param array $activities An array of activites as returned by see global_navigation::generate_sections_and_activities()
     * @param \stdClass|null $course The course object the section and activities relate to.
     * @return array Array of activity nodes
     */
    protected function load_section_activities(\navigation_node $sectionnode, \section_info $section, array $activities,
                                                ?\stdClass $course = null): array {
        // CHANGED ABOVE: Use section info instead of number.
        global $CFG, $SITE;
        // A static counter for JS function naming.
        static $legacyonclickcounter = 0;

        $activitynodes = [];
        if (empty($activities)) {
            return $activitynodes;
        }

        if (!is_object($course)) {
            $activity = reset($activities);
            $courseid = $activity->course;
        } else {
            $courseid = $course->id;
        }
        $showactivities = ($courseid != $SITE->id || !empty($CFG->navshowfrontpagemods));

        foreach ($activities as $activity) {
            if ($activity->sectionid != $section->id) {                         // CHANGED: Use section ID.
                continue;
            }
            if ($activity->icon) {
                $icon = new \pix_icon($activity->icon, get_string('modulename', $activity->modname), $activity->iconcomponent);
            } else {
                $icon = new \pix_icon('icon', get_string('modulename', $activity->modname), $activity->modname);
            }

            // Prepare the default name and url for the node.
            $activityname = format_string($activity->name, true, ['context' => \context_module::instance($activity->id)]);
            $action = new \moodle_url($activity->url);

            // Check if the onclick property is set (puke!).
            if (!empty($activity->onclick)) {
                // Increment the counter so that we have a unique number.
                $legacyonclickcounter++;
                // Generate the function name we will use.
                $functionname = 'legacy_activity_onclick_handler_' . $legacyonclickcounter;
                $propogrationhandler = '';
                // Check if we need to cancel propogation. Remember inline onclick
                // events would return false if they wanted to prevent propogation and the
                // default action.
                if (strpos($activity->onclick, 'return false')) {
                    $propogrationhandler = 'e.halt();';
                }
                // Decode the onclick - it has already been encoded for display (puke).
                $onclick = htmlspecialchars_decode($activity->onclick, ENT_QUOTES);
                // Build the JS function the click event will call.
                $jscode = "function {$functionname}(e) { $propogrationhandler $onclick }";
                $this->innerpage->requires->js_amd_inline($jscode);       // CHANGED.
                // Override the default url with the new action link.
                $action = new \action_link($action, $activityname, new \component_action('click', $functionname));
            }

            $activitynode = $sectionnode->add($activityname, $action, \navigation_node::TYPE_ACTIVITY, null, $activity->id, $icon);
            $activitynode->title(get_string('modulename', $activity->modname));
            $activitynode->hidden = $activity->hidden;
            $activitynode->display = $showactivities && $activity->display;
            $activitynode->nodetype = $activity->nodetype;
            $activitynodes[$activity->id] = $activitynode;
        }

        return $activitynodes;
    }

    // REMOVED function load_stealth_activity - class end .

}

// REMOVED class global_navigation_for_ajax - end .
