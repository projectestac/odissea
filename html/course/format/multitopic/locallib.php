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
 * Library of useful functions
 *
 * INCLUDED /course/lib.php selected functions
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 1999 Martin Dougiamas  http://dougiamas.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * For a given course section, marks it visible or hidden,
 * and does the same for every activity in that section
 *
 * @param int $courseid course id
 * @param stdClass|\section_info $section The section to adjust.  Must specify id
 * @param int $visibility The new visibility.  0 = hidden, 1 = visible
 * @return array A list of resources which were hidden in the section
 */
function format_multitopic_set_section_visible(int $courseid, $section, int $visibility): array {
    // CHANGED LINE ABOVE: Use sectioninfo, not section number.
    global $DB;

    $resourcestotoggle = [];
    // ADDED.
    // Fetch section info.
    $sectionsextra = course_get_format($courseid)->fmt_get_sections_extra();
    $sectionextra = array_key_exists($section->id, $sectionsextra) ? $sectionsextra[$section->id] : null;
    // We will recurse if setting visibility to hidden, because hidden sections should not contain visible sections.
    $recurse = ($visibility == 0);
    // END ADDED.
    for ($subsectionextra = $sectionextra; /* ... */
        $subsectionextra && ($subsectionextra->id == $section->id
                            || $recurse && $subsectionextra->levelsan > $sectionextra->levelsan); /* ... */
        $subsectionextra = array_key_exists($subsectionextra->nextanyid, $sectionsextra) ?
            $sectionsextra[$subsectionextra->nextanyid] : null) {
        // CHANGED LINES ABOVE: Recurse, if necessary.
        $subsection = $subsectionextra->sectionbase;
        course_update_section($courseid, $subsection, ['visible' => $visibility]); // CHANGED: $section -> $subsection .

        // Determine which modules are visible for AJAX update.
        $modules = !empty($subsection->sequence) ? explode(',', $subsection->sequence) : [];
        // CHANGED LINE ABOVE: $section -> $subsection.
        if (!empty($modules)) {
            list($insql, $params) = $DB->get_in_or_equal($modules);
            $select = 'id ' . $insql . ' AND visible = ?';
            array_push($params, $visibility);
            if (!$visibility) {
                $select .= ' AND visibleold = 1';
            }
            $resourcestotoggle = array_merge($resourcestotoggle,
                                            $DB->get_fieldset_select('course_modules', 'id', $select, $params));
            // CHANGED LINE ABOVE: Merge results.
        }
    }
    return $resourcestotoggle;
}


/**
 * Creates a course section and adds it to the specified position
 *
 * @param stdClass $courseorid course id or course object
 * @param stdClass $section position to insert at.  Must specify parentid.  May specify level.
 * @return stdClass created section object.  Has database properties plus parentid and levelsan.
 */
function format_multitopic_course_create_section(\stdClass $courseorid, \stdClass $section): \stdClass {
    // CHANGED LINE ABOVE: Use section info, specifying parentid and level, instead of section number.
    global $CFG, $DB;
    $courseid = is_object($courseorid) ? $courseorid->id : $courseorid;

    // ADDED: Require that the parent exists.
    $parent = $DB->get_record('course_sections', ['id' => $section->parentid, 'course' => $courseid]);
    if (!$parent) {
        throw new \moodle_exception('sectionnotexist');
    }
    // END ADDED.

    // Find the last sectionnum among existing sections.
    if (false) {                                                                // CHANGED: Don't skip check.
        $lastsection = $section->section - 1;                                   // CHANGED: Extract from section info.
    } else {
        $lastsection = (int)$DB->get_field_sql('SELECT max(section) from {course_sections} WHERE course = ?', [$courseid]);
    }

    // First add section to the end.
    $cw = new \stdClass();
    $cw->course = $courseid;
    $cw->section = $lastsection + 1;
    $cw->summary = '';
    $cw->summaryformat = FORMAT_HTML;
    $cw->sequence = '';
    $cw->name = null;
    $cw->visible = 1;
    $cw->availability = null;
    if ($CFG->version >= 2023122100.01) {
        $cw->component = null;
        $cw->itemid = null;
    }
    $cw->timemodified = time();
    $cw->id = $DB->insert_record("course_sections", $cw);

    // Now move it to the specified position.
    if (true) {                                                                 // CHANGED: We've already checked the parent exists.
        $course = is_object($courseorid) ? $courseorid : get_course($courseorid);
        rebuild_course_cache($courseid, true);                                  // ADDED.
        format_multitopic_move_section_to($course, $cw, $section);              // CHANGED: Use section info instead of position.
        // END CHANGED.
        $cw->section = (int)$DB->get_field_sql('SELECT section from {course_sections} WHERE course = ? AND id = ?',
                                                [$courseid, $cw->id]);          // CHANGED.
        $cw->parentid = $section->parentid;                                     // ADDED.
        $cw->levelsan = $section->level ?? FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC; // ADDED.
    }

    \core\event\course_section_created::create_from_section($cw)->trigger();

    rebuild_course_cache($courseid, true);
    return $cw;
}


/**
 * Moves sections within a course, from a position to another.
 *
 * @param \stdClass $course
 * @param \stdClass|\section_info|array $origins The section(s) to be moved.  Must specify id.
 * @param \stdClass $destination Where to move it to.  Must specify parentid, prevupid, or nextupid.  May specify level.
 * @param int $include 0 = regular only, 1 = also orphan, 2 = also delegated.
 */
function format_multitopic_move_section_to(\stdClass $course, $origins, \stdClass $destination, int $include = 1): void {
    // CHANGED LINE ABOVE: Use section info instead of number.  Removed $ignorenumsections param.  No return value (use exceptions).
    // Moves course sections within the course.
    // CHANGES THROUGHOUT: Use section info instead of number.
    global $DB;                                                                 // CHANGED: Removed $USER.

    if (!isset($destination)) {                                                 // CHANGED.
        throw new \moodle_exception('sectionnotexist');                         // CHANGED.
    }

    // Compatibility with course formats using field 'numsections'.
    // REMOVED.

    // Get all sections for this course and re-order them.
    if (!$sectionsextra = course_get_format($course)->fmt_get_sections_extra()) { // CHANGED.
        throw new \moodle_exception('cannotcreateorfindstructs');               // CHANGED.
    }

    $movedsections = format_multitopic_reorder_sections($sectionsextra, $origins, $destination, $include); // CHANGED.

    // Update all sections. Do this in 2 steps to avoid breaking database
    // uniqueness constraint.
    $transaction = $DB->start_delegated_transaction();
    // CHANGED.
    foreach ($movedsections as $id => $movedsection) {
        $position = $movedsection->section;
        if ($sectionsextra[$id]->section !== $position) {
            $DB->set_field('course_sections', 'section', -$position, ['id' => $id]);
        }
    }
    foreach ($movedsections as $id => $movedsection) {
        $position = $movedsection->section;
        if ($sectionsextra[$id]->section !== $position) {
            $DB->set_field('course_sections', 'section', $position, ['id' => $id]);
        }
    }
    // END CHANGED.

    // If we move the highlighted section itself, then just highlight the destination.
    // Adjust the higlighted section location if we move something over it either direction.
    // REMOVED.

    $transaction->allow_commit();
    rebuild_course_cache($course->id, true);

    // ADDED.
    // Set properties for moved sections.
    foreach ($movedsections as $id => $movedsection) {
        if (!empty($sectionsextra[$id]->sectionbase->component)) {
            continue;
        }
        // Find differences between original section and moved section, and store as updates.
        $updates = [];
        if ($sectionsextra[$id]->sectionbase->level !== $movedsection->level) {
            $updates['level'] = $movedsection->level;
        }
        if ($sectionsextra[$id]->sectionbase->visible != $movedsection->visible) {
            $updates['visible'] = $movedsection->visible;
        }
        // Set page-level sections to untimed.
        if ($movedsection->level < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC
                && $sectionsextra[$id]->sectionbase->periodduration != '0 day') {
            $updates['periodduration'] = '0 day';
        }
        // Apply section updates.
        if ($updates) {
            course_update_section($course, $sectionsextra[$id]->sectionbase, $updates);
        }
    }
    // END ADDED.

    return;                                                                     // CHANGED.
}


/**
 * Checks if the current user can delete a section (if course format allows it and user has proper permissions).
 *
 * CHANGED: Pass section info through to corresponding course format function.
 *
 * @param stdClass $course
 * @param section_info $section The section to check.  Must specify section (number).  Should specify calculated properties.
 * @return bool
 */
function format_multitopic_course_can_delete_section(\stdClass $course, \section_info $section): bool {
    // CHANGED LINE ABOVE.
    // REMOVED: extract number from section parameter.
    if (!$section->section) {                                                   // CHANGED: Check inside section info.
        // Not possible to delete 0-section.
        return false;
    }
    // Course format should allow to delete sections.
    if (!course_get_format($course)->can_delete_section($section)) {
        return false;
    }
    // Make sure user has capability to update course and move sections.
    $context = \context_course::instance(is_object($course) ? $course->id : $course);
    if (!has_all_capabilities(['moodle/course:movesections', 'moodle/course:update'], $context)) {
        return false;
    }
    // Make sure user has capability to delete each activity in this section.
    $modinfo = get_fast_modinfo($course);
    if (!empty($modinfo->sections[$section->section])) {                        // CHANGED.
        foreach ($modinfo->sections[$section->section] as $cmid) {              // CHANGED.
            if (!has_capability('moodle/course:manageactivities', \context_module::instance($cmid))) {
                return false;
            }
        }
    }
    return true;
}


/**
 * Reordering algorithm for course sections. Given an array of sections indexed by section->id,
 * origins, and a target, rebuilds the array.
 *
 * @param \format_multitopic\section_info_extra[] $sectionsextra The list of sections.
 * @param \stdClass|\section_info|array $origins The section(s) to be moved.  Must specify id.
 * @param \stdClass $target The destination.  Must specify parentid, prevupid, or nextupid.  May specify level.
 * @param int $include 0 = regular sections, 1 = also orphaned, 2 = also delegated
 * @return array
 */
function format_multitopic_reorder_sections(array $sectionsextra, $origins, \stdClass $target, int $include): array {
    // CHANGED THROUGHOUT: Section numbers changed to IDs, used exceptions instead of returning false.
    // Reads Calculated section values (levelsan, visiblesan).
    // Writes raw section values (level, visible).
    if (!is_array($sectionsextra)) {
        throw new \moodle_exception('cannotcreateorfindstructs');
    }

    // Ignore delegated sections if appropriate.
    $ignoredsections = [];
    if ($include < 2) {
        foreach ($sectionsextra as $id => $sectionextra) {
            if (!empty($sectionextra->sectionbase->component)) {
                $ignoredsections[$id] = $sectionextra;
                unset($sectionsextra[$id]);
            }
        }
    }

    $origins = !is_array($origins) ? [ $origins ] : $origins;

    $originextraarray = [];
    $originlevel = null;
    foreach ($origins as $origin) {

        // Locate origin section in sections array.
        if (!($originextra = array_key_exists($origin->id, $sectionsextra) ? $sectionsextra[$origin->id] : null)) {
            throw new \moodle_exception('sectionnotexist');
        }

        // We can't move section position 0.
        if (isset($originextra->section) && $originextra->section < 1) {
            throw new \moodle_exception('cannotcreateorfindstructs');
        }

        if (!isset($originlevel)) {
            $originlevel = $originextra->levelsan;
        } else {
            if ($originextra->levelsan != $originlevel) {
                throw new \moodle_exception('cannotcreateorfindstructs');
            }
        }

        // Extract origin sections.
        for ($originsubkey = $originextra->id; /* ... */
            $originsubkey == $originextra->id
                || $originsubkey && $sectionsextra[$originsubkey]->levelsan > $originextra->levelsan; /* ... */
            $originsubkey = $originextraarray[$originsubkey]->nextanyid) {
            $originextraarray[$originsubkey] = $sectionsextra[$originsubkey];
            unset($sectionsextra[$originsubkey]);
        }

    }

    // Find target position and extract remaining sections.
    $target->level = $target->level ?? $originlevel;
    $parentextra = null;
    $prevextra = null;
    $found = false;
    $appendextraarray = [];
    foreach ($sectionsextra as $id => $sectionextra) {
        if ($found) {
            // Target position already found, extract remaining sections.
            $appendextraarray[$id] = $sectionextra;
            unset($sectionsextra[$id]);
        } else if (isset($target->parentid) && $sectionextra->id == $target->parentid) {
            // Reached the target parent section, remember it.
            $parentextra = $sectionextra;
            if ($target->level <= $parentextra->levelsan) {
                // The moved section can not be a child of the specified parent.
                throw new \moodle_exception('cannotcreateorfindstructs');
            }
        } else if (isset($target->prevupid) && $sectionextra->id == $target->prevupid) {
            // Reached the target previous section, remember it.
            $prevextra = $sectionextra;
            if ($target->level < $prevextra->levelsan) {
                // The moved section can not have the specified section as its previous.
                throw new \moodle_exception('cannotcreateorfindstructs');
            }
        } else if (isset($parentextra)
                        && ($sectionextra->levelsan < $target->level || $sectionextra->levelsan <= $parentextra->levelsan)
                    || isset($prevextra) && ($sectionextra->levelsan <= $target->level)
                    || isset($target->nextupid) && $sectionextra->id == $target->nextupid) {
            // Reached the last position in a specified parent in which the moved section would be a (direct) child,
            // or the appropriate position after a specified previous section,
            // or the position before a specified next section.
            if ($sectionextra->levelsan > $target->level) {
                // If inserted here, the moved section would absorb other sections.
                throw new \moodle_exception('cannotcreateorfindstructs');
            }
            $appendextraarray[$id] = $sectionextra;
            unset($sectionsextra[$id]);
            $found = true;
        }
    }
    if (isset($parentextra) || isset($prevextra)) {
        // If a specified parent or previous was found, but no position within the section list was appropriate,
        // the appropriate position must be the end of the section list.
        $found = true;
    }
    if (!$found) {
        throw new \moodle_exception('sectionnotexist');
    }

    $sections = [];

    // Clone pre-target sections (to avoid cross-linking),
    // and check if the target location's parent is visible.
    $parentvisible = true;
    if (true) {
        foreach ($sectionsextra as $id => $sectionextra) {
            $sections[$id] = new \stdClass;
            $sections[$id]->id = $id;
            $sections[$id]->visible = $sectionextra->visiblesan;
            $sections[$id]->level = max($sectionextra->levelsan, 0);
            if ($sectionextra->levelsan < $target->level) {
                $parentvisible = $sectionextra->visiblesan;
            }
        }
    }

    // Append moved sections.
    $levelchange = $target->level - $originlevel;
    foreach ($originextraarray as $id => $sectionextra) {
        $sections[$id] = new \stdClass;
        $sections[$id]->id = $id;
        $sections[$id]->visible = $sectionextra->visiblesan && $parentvisible;
        $sections[$id]->level = ($sectionextra->levelsan >= FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC
                                        && $sectionextra->levelsan != $originlevel) ?
                                    FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC       // Don't change topic level.
                                    : max($sectionextra->levelsan + $levelchange, 0);
    }

    // Append rest of array.
    if (true) {                                                                 // CHANGED: Don't need to check for empty array?
        foreach ($appendextraarray as $id => $sectionextra) {
            $sections[$id] = new \stdClass;
            $sections[$id]->id = $id;
            $sections[$id]->visible = $sectionextra->visiblesan;
            $sections[$id]->level = max($sectionextra->levelsan, 0);
        }
    }

    // Append ignored sections.
    foreach ($ignoredsections as $id => $sectionextra) {
        $sections[$id] = new \stdClass;
        $sections[$id]->id = $id;
        $sections[$id]->visible = $sectionextra->sectionbase->visible;
    }

    // Renumber positions.
    $position = 0;
    foreach ($sections as $section) {
        $section->section = $position;
        $position++;
    }

    return $sections;

}


// ADDED.


/**
 * Generate attribution string from info
 *
 * @param string|null $imagename
 * @param string|null $authorwithurl
 * @param string|null $licencecode
 * @return string
 */
function format_multitopic_image_attribution($imagename, $authorwithurl, $licencecode): string {
    $o = '';
    $authorwithurlarray = explode('|', $authorwithurl ?? '');
    $authorhtml = $authorwithurlarray[0];
    if (count($authorwithurlarray) > 1) {
        $authorurl = $authorwithurlarray[1];
        $authorhtml = \html_writer::tag('a', $authorhtml, ['href' => $authorurl, 'target' => '_blank']);
    }
    $licencehtml = ($licencecode && $licencecode != 'unknown') ? get_string($licencecode, 'license') : '';
    if ($licencehtml && substr($licencecode, 0 , 3) == 'cc-') { // TODO: Links to other licences? Make this into a list?
        $licenceurl = 'https://creativecommons.org/licenses/by-' . substr($licencecode, 3, 5) . '/4.0';
        $licencehtml = \html_writer::tag('a', $licencehtml, ['href' => $licenceurl, 'target' => '_blank']);
    }
    $o .= \html_writer::tag('span', get_string('image', 'format_multitopic') . ": {$imagename}"
                            . (($authorhtml || $licencehtml) ? ',' : ''),
                            ['style' => 'white-space: nowrap;']) . ' ';
    if ($authorhtml) {
        $o .= \html_writer::tag('span', get_string('image_by', 'format_multitopic') . " {$authorhtml}"
                                . ($licencehtml ? ',' : ''),
                                ['style' => 'white-space: nowrap;']) . ' ';
    }
    if ($licencehtml) {
        $o .= \html_writer::tag('span', get_string('image_licence', 'format_multitopic') . " {$licencehtml}",
                                ['style' => 'white-space: nowrap;']);
    }
    return $o;
}


/**
 * Convert duration string to days.
 * Note: Doesn't handle months or years correctly.
 *
 * @param string|null $duration
 * @return int|null
 */
function format_multitopic_duration_as_days($duration) {
    $days = null;
    $matchok = preg_match('/^([0-9]+) (day|week|month|year)(s)?$/', $duration ?? '', $matches);
    if ($matchok) {
        $match1 = (int)$matches[1];
        switch($matches[2]) {
            case 'day':
                $days = $match1 * 1;
                break;
            case 'week':
                $days = $match1 * 7;
                break;
            case 'month':
                $days = $match1 * 30;
                break;
            case 'year':
                $days = $match1 * 365;
                break;
            default:
                $days = null;
        }
    } else {
        $days = null;
    }
    return $days;
}


/**
 * Get week date.
 *
 * @param int $date Unix timestamp for date.
 * @return stdClass Week date.
 */
function format_multitopic_week_date($date) {

    $config = get_config('format_multitopic');

    $mstartwday = $config->startwday;       // Starting week day, 0 = Sunday.
    $wmd = $config->weeks_mindays;          // First week of year contains a minimum of how many days of that year, 1-7.
    $weekspartial = $config->weeks_partial; // Partial weeks.

    $dow = (date('w', $date) - $mstartwday + 7) % 7 + 1;                // Day of week, 1 = starting week day.
    $down = new lang_string(strtolower(date('D', $date)), 'calendar');  // Day of week name.

    $y = date('Y', $date);                      // Year.
    $doy = date('z', $date) + 1;                // Day of year, 1 = Jan 1.
    $woy = intdiv(14 - $wmd + $doy - $dow, 7);  // Week of year, 1 = first.

    if (!$weekspartial) {
        if ($woy < 1) { // Last week of previous year.
            $y = date('Y', $date - 7 * 24 * 60 * 60);
            $doy = date('z', $date - 7 * 24 * 60 * 60) + 7 + 1;
            $woy = intdiv(14 - $wmd + $doy - $dow, 7);
        } else if (($ny = date('Y', $date + 7 * 24 * 60 * 60)) > $y) {    // Maybe first week of next year.
            $dony = date('z', $date + 7 * 24 * 60 * 60) - 7 + 1;
            $wony = intdiv(14 - $wmd + $dony - $dow, 7);
            if ($wony >= 1) {
                $y = $ny;
                $doy = $dony;
                $woy = $wony;
            }
        }
    }

    $result = new \stdClass();
    $result->o = $y;                                    // Year.
    $result->W = str_pad($woy, 2, "0", STR_PAD_LEFT);   // Week of year.
    $result->N = $dow;                                  // Day of week (number).
    $result->D = $down;                                 // Day of week (name).
    return $result;

}
