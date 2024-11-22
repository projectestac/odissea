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
 * format_tiles cache definitions.
 * @see \format_tiles\local\modal_helper::get_modal_allowed_cm_ids()
 * @see \format_tiles\observer::clear_cache_modal_cmids()
 *
 * @package     format_tiles
 * @category    cache
 * @copyright   2023 onwards Evolution Code {@link http://evolutioncode.uk}
 * @author      David Watson
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$definitions = [
    // In cache modalcmids, we store an array of which course modules for each course can launch in modals.
    // E.g. for course 2 the key is 2-pdf and the value is a list of cmids.
    'modalcmids' => [
        'mode' => cache_store::MODE_APPLICATION,
        'simplekeys' => true,
        'simpledata' => false,
        'staticacceleration' => true,
        'staticaccelerationsize' => 30,
        'invalidationevents' => [
            'format_tiles/modaladminsettingchanged',
        ],
    ],
];
