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
 * Contains the default section controls output class.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2012 Dan Poltawski
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_multitopic\output\courseformat\content\section;

use context_course;
use core_courseformat\output\local\content\section\controlmenu as controlmenu_base;

/**
 * Base class to render a course section menu.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2012 Dan Poltawski
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class controlmenu extends controlmenu_base {

    /** @var \format_multitopic\section_info_extra Multitopic-specific section information */
    protected $fmtsectionextra;

    /**
     * Constructor.
     *
     * @param \format_multitopic $format the course format
     * @param \section_info $section the section info
     */
    public function __construct(\format_multitopic $format, \section_info $section) {
        parent::__construct($format, $section);
        $this->fmtsectionextra = $format->fmt_get_section_extra($section);
    }

    /**
     * Generate the edit control items of a section.
     *
     * This method must remain public until the final deprecation of section_edit_control_items.
     *
     * @return array of edit control items
     */
    public function section_control_items() {
        global $USER, $CFG;

        $format = $this->format;
        $section = $this->section;
        $sectionextra = $this->fmtsectionextra;                                 // ADDED.
        $onsectionpage = $sectionextra->levelsan < FORMAT_MULTITOPIC_SECTION_LEVEL_TOPIC; // ADDED.
        $course = $format->get_course();
        $user = $USER;
        $usecomponents = $format->supports_components();
        $coursecontext = context_course::instance($course->id);

        $baseurl = course_get_url($course, $section, ['fmtedit' => true]);      // CHANGED.
        $baseurl->param('sesskey', sesskey());

        $parentcontrols = parent::section_control_items();

        $movecontrols = [];
        if ($section->section
                && has_capability('moodle/course:movesections', $coursecontext, $user)
                && has_capability('moodle/course:sectionvisibility', $coursecontext, $user)) {

            // INCLUDED funct section_control_items if (!$sectionreturn) .
            if ($onsectionpage) {                                               // CHANGED.
                if (has_capability('moodle/course:update', $coursecontext, $user)) {
                    $url = clone($baseurl);
                    if ($sectionextra->levelsan - 1 > FORMAT_MULTITOPIC_SECTION_LEVEL_ROOT) { // Raise section. // CHANGED.
                        // CHANGED.
                        $url->param('sectionid', $section->id);
                        $url->param('destprevupid', $sectionextra->parentid);
                        $url->param('destlevel', $sectionextra->levelsan - 1);
                        $strmovelevelup = get_string_manager()->string_exists('move_level_up', 'format_multitopic') ?
                                            get_string('move_level_up', 'format_multitopic') : get_string('moveup');
                        // END CHANGED.
                        $movecontrols['movelevelup'] = [                        // CHANGED.
                            'url' => $url,
                            'icon' => 'i/up',
                            'name' => $strmovelevelup,
                            'pixattr' => ['class' => ''],
                            'attr' => ['class' => 'icon fmtmovelevelup'],       // CHANGED.
                        ];
                    }

                    $url = clone($baseurl);
                    if ($sectionextra->pagedepth + 1 <= FORMAT_MULTITOPIC_SECTION_LEVEL_PAGE_USE) { // Lower section. CHANGED.
                        // CHANGED.
                        $url->param('sectionid', $section->id);
                        $url->param('destparentid', $sectionextra->prevupid);
                        $url->param('destlevel', $sectionextra->levelsan + 1);
                        $strmoveleveldown = get_string_manager()->string_exists('move_level_down', 'format_multitopic') ?
                                            get_string('move_level_down', 'format_multitopic') : get_string('movedown');
                        // END CHANGED.
                        $movecontrols['moveleveldown'] = [                      // CHANGED.
                            'url' => $url,
                            'icon' => 'i/down',
                            'name' => $strmoveleveldown,
                            'pixattr' => ['class' => ''],
                            'attr' => ['class' => 'icon fmtmoveleveldown'],     // CHANGED.
                        ];
                    }
                }

                $url = clone($baseurl);
                // CHANGED: Replaced up with previous.
                if (isset($sectionextra->prevupid) && $sectionextra->prevupid != course_get_format($course)->fmtrootsectionid) {
                        // Add a arrow to move section back.
                    $url->param('sectionid', $section->id);
                    $url->param('destnextupid', $sectionextra->prevupid);
                    $strmovepageprev = get_string_manager()->string_exists('move_page_prev', 'format_multitopic') ?
                                        get_string('move_page_prev', 'format_multitopic') : get_string('moveleft');
                    $movecontrols['moveprev'] = [
                        'url' => $url,
                        'icon' => 't/left',
                        'name' => $strmovepageprev,
                        'pixattr' => ['class' => ''],
                        'attr' => ['class' => 'icon fmtmovepageprev'],
                    ];
                }
                // END CHANGED.

                $url = clone($baseurl);
                // CHANGED: Replaced down with next.
                if (isset($sectionextra->nextupid)) { // Add a arrow to move section forward.
                    $url->param('sectionid', $section->id);
                    $url->param('destprevupid', $sectionextra->nextupid);
                    $strmovepagenext = get_string_manager()->string_exists('move_page_next', 'format_multitopic') ?
                                        get_string('move_page_next', 'format_multitopic') : get_string('moveright');
                    $movecontrols['movenext'] = [
                        'url' => $url,
                        'icon' => 't/right',
                        'name' => $strmovepagenext,
                        'pixattr' => ['class' => ''],
                        'attr' => ['class' => 'icon fmtmovepagenext'],
                    ];
                }
                // END CHANGED.

            } else { // END INCLUDED.

                // Move sections left and right.

                $url = clone($baseurl);
                // CHANGED: Replaced up with to previous page.
                if ($sectionextra->prevpageid) { // Add a arrow to move section to previous page.
                    $url->param('sectionid', $section->id);
                    $url->param('destparentid', $sectionextra->prevpageid);
                    $strmovetoprevpage = get_string_manager()->string_exists('move_to_prev_page', 'format_multitopic') ?
                                            get_string('move_to_prev_page', 'format_multitopic') : get_string('moveleft');
                    $movecontrols['movetoprevpage'] = [
                        'url' => $url,
                        'icon' => 't/left',
                        'name' => $strmovetoprevpage,
                        'pixattr' => ['class' => ''],
                        'attr' => ['class' => 'icon fmtmovetoprevpage'],
                    ];
                }
                // END CHANGED.

                $url = clone($baseurl);
                // CHANGED: Replaced down with to next page.
                if ($sectionextra->nextpageid) { // Add a arrow to move section to next page.
                    $url->param('sectionid', $section->id);
                    $url->param('destparentid', $sectionextra->nextpageid);
                    $strmovetonextpage = get_string_manager()->string_exists('move_to_next_page', 'format_multitopic') ?
                                            get_string('move_to_next_page', 'format_multitopic') : get_string('moveright');
                    $movecontrols['movetonextpage'] = [
                        'url' => $url,
                        'icon' => 't/right',
                        'name' => $strmovetonextpage,
                        'pixattr' => ['class' => ''],
                        'attr' => ['class' => 'icon fmtmovetonextpage'],
                    ];
                }
                // END CHANGED.

                if ($usecomponents && $CFG->version >= 2023042400 && !array_key_exists('movesection', $parentcontrols)) {
                    // This tool will appear only when the state is ready.
                    $url = clone ($baseurl);
                    $url->param('movesection', $section->section);
                    $url->param('section', $section->section);
                    $movecontrols['movesection'] = [
                        'url' => $url,
                        'icon' => 'i/dragdrop',
                        'name' => get_string('move', 'moodle'),
                        'pixattr' => ['class' => ''],
                        'attr' => [
                            'class' => 'icon move waitstate',
                            'data-action' => 'moveSection',
                            'data-id' => $section->id,
                        ],
                    ];
                }

                $url = clone($baseurl);
                if ($sectionextra->prevupid != $sectionextra->parentid
                        && !array_key_exists('moveup', $parentcontrols)) { // Add a arrow to move section up.
                    $url->param('sectionid', $section->id);
                    $url->param('destnextupid', $sectionextra->prevupid);
                    $strmoveup = get_string('moveup');
                    $movecontrols['moveup'] = [
                        'url' => $url,
                        'icon' => 'i/up',
                        'name' => $strmoveup,
                        'pixattr' => ['class' => ''],
                        'attr' => ['class' => 'icon moveup whilenostate'],
                    ];
                }

                $url = clone($baseurl);
                if ($sectionextra->nextupid != $sectionextra->nextpageid
                        && !array_key_exists('movedown', $parentcontrols)) { // Add a arrow to move section down.
                    $url->param('sectionid', $section->id);
                    $url->param('destprevupid', $sectionextra->nextupid);
                    $strmovedown = get_string('movedown');
                    $movecontrols['movedown'] = [
                        'url' => $url,
                        'icon' => 'i/down',
                        'name' => $strmovedown,
                        'pixattr' => ['class' => ''],
                        'attr' => ['class' => 'icon movedown whilenostate'],
                    ];
                }

            }

        }
        $addedmovecontrols = false;

        $merged = [];
        // We can't use splice because we are using associative arrays.
        // Step through the array and merge the arrays.
        foreach ($parentcontrols as $key => $action) {
            if (!$addedmovecontrols && (substr($key, 0, 4) == 'move' || $key == 'delete' || $key == 'permalink')) {
                // If we have come to a move key, merge these controls here.
                $merged = array_merge($merged, $movecontrols);
                $addedmovecontrols = true;
            }
            $merged[$key] = $action;
        }
        if (!$addedmovecontrols) {
            $merged = array_merge($merged, $movecontrols);
            $addedmovecontrols = true;
        }

        if (array_key_exists('view', $merged)) {
            unset($merged['view']);
        }

        if (array_key_exists('edit', $merged)) {
            $merged['edit']['url'] = new \moodle_url('/course/format/multitopic/_course_editsection.php',
                                            ['id' => $section->id]);            // CHANGED.
        }

        if (array_key_exists('duplicate', $merged)) {
            if ($onsectionpage) {
                unset($merged['duplicate']);
            } else {
                $url = course_get_url($course);
                $url->param('sesskey', sesskey());
                $url->param('sectionid', $section->id);
                $url->param('duplicatesection', $section->section);
                $merged['duplicate']['url'] = $url;
            }
        }

        if (array_key_exists('visiblity', $merged) || array_key_exists('visibility', $merged)) {
            $url = clone($baseurl);
            $strhidefromothers = get_string_manager()->string_exists('hidefromothers', 'format_' . $course->format) ?
                                    get_string('hidefromothers', 'format_' . $course->format)
                                    : get_string('hide');                       // CHANGED.
            $strshowfromothers = get_string_manager()->string_exists('showfromothers', 'format_' . $course->format) ?
                                    get_string('showfromothers', 'format_' . $course->format)
                                    : get_string('show');                       // CHANGED.
            $visibilitystr = array_key_exists('visibility', $merged) ? 'visibility' : 'visiblity';
            if ($section->visible) { // Show the hide/show eye.
                $url->param('hideid',  $section->id);                           // CHANGED.
                $merged[$visibilitystr]['url'] = $url;
                $merged[$visibilitystr]['name'] = $strhidefromothers;
                unset($merged[$visibilitystr]['attr']['data-sectionreturn']);
                if ($onsectionpage) {
                    unset($merged[$visibilitystr]['attr']['data-action']);
                }
                $merged[$visibilitystr]['attr']['data-swapname'] = $strshowfromothers;
            } else if (!$sectionextra->parentvisiblesan) {
                unset($merged[$visibilitystr]);
            } else {
                $url->param('showid',  $section->id);                           // CHANGED.
                $merged[$visibilitystr]['url'] = $url;
                $merged[$visibilitystr]['name'] = $strshowfromothers;
                unset($merged[$visibilitystr]['attr']['data-sectionreturn']);
                if ($onsectionpage) {
                    unset($merged[$visibilitystr]['attr']['data-action']);
                }
                $merged[$visibilitystr]['attr']['data-swapname'] = $strhidefromothers;
            }
        }

        if (array_key_exists('movesection', $merged)) {
            if (!has_capability('moodle/course:movesections', $coursecontext, $user)
                    || !has_capability('moodle/course:sectionvisibility', $coursecontext, $user)
                    || $onsectionpage || !$usecomponents || $CFG->version < 2023042400) {
                unset($merged['movesection']);
            }
        }

        if (array_key_exists('moveup', $merged)) {
            if (!has_capability('moodle/course:movesections', $coursecontext, $user)
                    || !has_capability('moodle/course:sectionvisibility', $coursecontext, $user)
                    || $onsectionpage || $sectionextra->prevupid == $sectionextra->parentid) {
                unset($merged['moveup']);
            } else {
                $url = clone($baseurl);
                $url->param('sectionid', $section->id);
                $url->param('destnextupid', $sectionextra->prevupid);
                $merged['moveup']['url'] = $url;
            }
        }

        if (array_key_exists('movedown', $merged)) {
            if (!has_capability('moodle/course:movesections', $coursecontext, $user)
                    || !has_capability('moodle/course:sectionvisibility', $coursecontext, $user)
                    || $onsectionpage || $sectionextra->nextupid == $sectionextra->nextpageid) {
                unset($merged['movedown']);
            } else {
                $url = clone($baseurl);
                $url->param('sectionid', $section->id);
                $url->param('destprevupid', $sectionextra->nextupid);
                $merged['movedown']['url'] = $url;
            }
        }

        if (array_key_exists('delete', $merged)) {
            $url = new \moodle_url(
                '/course/format/multitopic/_course_editsection.php',
                [
                    'id' => $section->id,
                    // REMOVED: section return.
                    'delete' => 1,
                    'sesskey' => sesskey(),
                ]
            );
            $merged['delete']['url'] = $url;
            if ($onsectionpage) {
                unset($merged['delete']['attr']['data-action']);
            }
        }

        if (array_key_exists('permalink', $merged)) {
            $sectionlink = course_get_url($course, $section);
            $merged['permalink']['url'] = $sectionlink;
        }

        return $merged;
    }
}
