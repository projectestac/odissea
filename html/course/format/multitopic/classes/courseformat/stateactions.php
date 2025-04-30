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

namespace format_multitopic\courseformat;

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/../../locallib.php');

use format_multitopic;

/**
 * Contains the core course state actions.
 *
 * The methods from this class should be executed via "core_courseformat_edit" web service.
 *
 * Each format plugin could extend this class to provide new actions to the editor.
 * Extended classes should be locate in "format_XXX\course" namespace and
 * extends core_courseformat\stateactions.
 *
 * @package    format_multitopic
 * @copyright  2022 onwards James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class stateactions extends \core_courseformat\stateactions {

    /**
     * Move course sections to another location in the same course.
     *
     * @param \core_courseformat\stateupdates $updates the affected course elements track
     * @param \stdClass $course the course object
     * @param int[] $ids the list of affected course section ids
     * @param int|null $targetsectionid optional target section id
     * @param int|null $targetcmid optional target cm id
     */
    public function section_move(
        \core_courseformat\stateupdates $updates,
        \stdClass $course,
        array $ids,
        ?int $targetsectionid = null,
        ?int $targetcmid = null
    ): void {
        // Validate target elements.
        if (!$targetsectionid) {
            throw new \moodle_exception("Action section_move requires targetsectionid");
        }

        $this->validate_sections($course, $ids, __FUNCTION__);

        $coursecontext = \context_course::instance($course->id);
        require_capability('moodle/course:movesections', $coursecontext);

        // Target section.
        $this->validate_sections($course, [$targetsectionid], __FUNCTION__);

        $format = course_get_format($course->id);
        $allsectionsextra = $format->fmt_get_sections_extra();
        $draggedoriginsection = $allsectionsextra[$ids[0]];
        if (method_exists($this, 'sort_section_ids_by_section_number')) {
            $ids = $this->sort_section_ids_by_section_number($course, $ids, false);
        }

        // ADDED.
        $origins = [];
        $subids = [];
        foreach ($ids as $id) {
            $originextra = $allsectionsextra[$id];
            $origins[] = $originextra;
            for ($originsubextra = $originextra; /* ... */
                    $originsubextra && ($originsubextra->id == $originextra->id
                                        || $originsubextra->levelsan > $originextra->levelsan); /* ... */
                    $originsubextra = $originsubextra->nextanyid ? $allsectionsextra[$originsubextra->nextanyid] : null) {
                $subids[] = $originsubextra->id;
            }
        }
        $targetsection = $allsectionsextra[$targetsectionid];
        if ($targetsection->section > $draggedoriginsection->section) {
            $destination = (object)['prevupid' => $targetsectionid];
        } else {
            $destination = (object)['nextupid' => $targetsectionid];
        }
        // END ADDED.

        $affectedsections = [$targetsectionid => true];

        foreach ($subids as $id) {
            $affectedsections[$id] = true;
        }
        format_multitopic_move_section_to($course, $origins, $destination);      // CHANGED.

        // Use section_state to return the section and activities updated state.
        $this->section_state($updates, $course, $subids, $targetsectionid);

        // All course sections can be renamed because of the resort.
        foreach ($allsectionsextra as $section) {
            // Ignore the affected sections because they are already in the updates.
            if (isset($affectedsections[$section->id])) {
                continue;
            }
            $updates->add_section_put($section->id);
        }
        // The section order is at a course level.
        $updates->add_course_put();
    }

    /**
     * Move course sections after another location in the same course.
     *
     * @param \core_courseformat\stateupdates $updates the affected course elements track
     * @param \stdClass $course the course object
     * @param int[] $ids the list of affected course section ids
     * @param int|null $targetsectionid optional target section id
     * @param int|null $targetcmid optional target cm id
     */
    public function section_move_after(
        \core_courseformat\stateupdates $updates,
        \stdClass $course,
        array $ids,
        ?int $targetsectionid = null,
        ?int $targetcmid = null
    ): void {
        // Validate target elements.
        if (!$targetsectionid) {
            throw new \moodle_exception("Action section_move_after requires targetsectionid");
        }

        $this->validate_sections($course, $ids, __FUNCTION__);

        $coursecontext = \context_course::instance($course->id);
        require_capability('moodle/course:movesections', $coursecontext);

        // Target section.
        $this->validate_sections($course, [$targetsectionid], __FUNCTION__);

        $format = course_get_format($course->id);
        $allsectionsextra = $format->fmt_get_sections_extra();
        if (method_exists($this, 'sort_section_ids_by_section_number')) {
            $ids = $this->sort_section_ids_by_section_number($course, $ids, false);
        }

        // ADDED.
        $origins = [];
        $subids = [];
        foreach ($ids as $id) {
            $originextra = $allsectionsextra[$id];
            $origins[] = $originextra;
            for ($originsubextra = $originextra; /* ... */
                    $originsubextra && ($originsubextra->id == $originextra->id
                                        || $originsubextra->levelsan > $originextra->levelsan); /* ... */
                    $originsubextra = $originsubextra->nextanyid ? $allsectionsextra[$originsubextra->nextanyid] : null) {
                $subids[] = $originsubextra->id;
            }
        }
        $destination = (object)['prevupid' => $targetsectionid];
        // END ADDED.

        $affectedsections = [$targetsectionid => true];

        foreach ($subids as $id) {
            $affectedsections[$id] = true;
        }
        format_multitopic_move_section_to($course, $origins, $destination);      // CHANGED.

        // Use section_state to return the section and activities updated state.
        $this->section_state($updates, $course, $subids, $targetsectionid);

        // All course sections can be renamed because of the resort.
        foreach ($allsectionsextra as $section) {
            // Ignore the affected sections because they are already in the updates.
            if (isset($affectedsections[$section->id])) {
                continue;
            }
            $updates->add_section_put($section->id);
        }
        // The section order is at a course level.
        $updates->add_course_put();
    }

    /**
     * Move course sections into another location in the same course.
     *
     * @param \core_courseformat\stateupdates $updates the affected course elements track
     * @param \stdClass $course the course object
     * @param int[] $ids the list of affected course section ids
     * @param int|null $targetsectionid optional target section id
     * @param int|null $targetcmid optional target cm id
     */
    public function fmt_section_move_into(
        \core_courseformat\stateupdates $updates,
        \stdClass $course,
        array $ids,
        ?int $targetsectionid = null,
        ?int $targetcmid = null
    ): void {
        // Validate target elements.
        if (!$targetsectionid) {
            throw new \moodle_exception("Action section_move_into requires targetsectionid");
        }

        $this->validate_sections($course, $ids, __FUNCTION__);

        $coursecontext = \context_course::instance($course->id);
        require_capability('moodle/course:movesections', $coursecontext);

        // Target section.
        $this->validate_sections($course, [$targetsectionid], __FUNCTION__);

        $format = course_get_format($course->id);
        $allsectionsextra = $format->fmt_get_sections_extra();
        if (method_exists($this, 'sort_section_ids_by_section_number')) {
            $ids = $this->sort_section_ids_by_section_number($course, $ids, false);
        }

        // ADDED.
        $origins = [];
        $subids = [];
        foreach ($ids as $id) {
            $originextra = $allsectionsextra[$id];
            $origins[] = $originextra;
            for ($originsubextra = $originextra; /* ... */
                    $originsubextra && ($originsubextra->id == $originextra->id
                                        || $originsubextra->levelsan > $originextra->levelsan); /* ... */
                    $originsubextra = $originsubextra->nextanyid ? $allsectionsextra[$originsubextra->nextanyid] : null) {
                $subids[] = $originsubextra->id;
            }
        }
        $destination = (object)['parentid' => $targetsectionid];
        // END ADDED.

        $affectedsections = [$targetsectionid => true];

        foreach ($subids as $id) {
            $affectedsections[$id] = true;
        }
        format_multitopic_move_section_to($course, $origins, $destination);      // CHANGED.

        // Use section_state to return the section and activities updated state.
        $this->section_state($updates, $course, $subids, $targetsectionid);

        // All course sections can be renamed because of the resort.
        foreach ($allsectionsextra as $section) {
            // Ignore the affected sections because they are already in the updates.
            if (isset($affectedsections[$section->id])) {
                continue;
            }
            $updates->add_section_put($section->id);
        }
        // The section order is at a course level.
        $updates->add_course_put();
    }

    /**
     * Show/hide course sections.
     *
     * @param \core_courseformat\stateupdates $updates the affected course elements track
     * @param \stdClass $course the course object
     * @param int[] $ids section ids
     * @param int $visible the new visible value
     */
    protected function set_section_visibility(
        \core_courseformat\stateupdates $updates,
        \stdClass $course,
        array $ids,
        int $visible
    ): void {
        $this->validate_sections($course, $ids, __FUNCTION__);
        $coursecontext = \context_course::instance($course->id);
        require_all_capabilities(['moodle/course:update', 'moodle/course:sectionvisibility'], $coursecontext);

        $format = course_get_format($course->id);
        $allsectionsextra = $format->fmt_get_sections_extra();

        $delegatedids = [];
        foreach ($ids as $sectionid) {
            $sectionextra = $allsectionsextra[$sectionid];
            if (!empty($sectionextra->sectionbase->component)) {
                $delegatedids[] = $sectionid;
                continue;
            }
            if (!$visible && $sectionextra->section || $visible && $sectionextra->parentvisiblesan) {
                course_update_section($course, $sectionextra->sectionbase, ['visible' => $visible]);
            }
        }
        if (count($delegatedids) > 0) {
            parent::set_section_visibility($updates, $course, $delegatedids, $visible);
        }
        $this->section_state($updates, $course, $ids);
    }

}
