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

namespace format_multitopic\output\courseformat\content;

use core_courseformat\output\local\content\bulkedittools as bulkedittools_base;

defined('MOODLE_INTERNAL') || die();

global $CFG;

if ($CFG->version >= 2023021000) {

    /**
     * Contains the bulk editor tools bar.
     *
     * @package   format_multitopic
     * @copyright 2023 James Calder and Otago Polytechnic
     * @copyright based on work by 2023 Ferran Recio <ferran@moodle.com>
     * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */
    class bulkedittools extends bulkedittools_base {

        /**
         * Generate the bulk edit control items of a section.
         *
         * Format plugins can override the method to add or remove elements
         * from the toolbar.
         *
         * @return array of edit control items
         */
        protected function section_control_items(): array {
            global $USER;
            $format = $this->format;
            $context = $format->get_context();
            $user = $USER;

            $parentcontrols = parent::section_control_items();

            $additionalcontrols = [];

            if (has_capability('moodle/course:movesections', $context, $user) && !array_key_exists('move', $parentcontrols)) {
                $additionalcontrols['move'] = [
                    'icon' => 'i/dragdrop',
                    'action' => 'moveSection',
                    'name' => get_string('move', 'moodle'),
                    'title' => $this->format->get_format_string('sectionsmove'),
                    'bulk' => 'section',
                ];
            }

            $deletecapabilities = ['moodle/course:movesections', 'moodle/course:update'];
            if (has_all_capabilities($deletecapabilities, $context, $user) && !array_key_exists('delete', $parentcontrols)) {
                $additionalcontrols['delete'] = [
                    'icon' => 'i/delete',
                    'action' => 'deleteSection',
                    'name' => get_string('delete'),
                    'title' => $this->format->get_format_string('sectionsdelete'),
                    'bulk' => 'section',
                ];
            }

            $addedcontrols = false;

            $merged = [];
            foreach ($parentcontrols as $key => $action) {
                if (!$addedcontrols && $key == 'move' || $key == 'delete') {
                    $merged = array_merge($merged, $additionalcontrols);
                    $addedcontrols = true;
                }
                $merged[$key] = $action;
            }
            if (!$addedcontrols) {
                $merged = array_merge($merged, $additionalcontrols);
                $addedcontrols = true;
            }

            return $merged;
        }

    }

}
