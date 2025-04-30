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
 * List of deprecated mod_book functions
 *
 * @package     mod_book
 * @copyright   2024 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * @deprecated since Moodle 3.8
 */
function book_scale_used() {
    throw new coding_exception('book_scale_used() can not be used anymore. Plugins can implement ' .
        '<modname>_scale_used_anywhere, all implementations of <modname>_scale_used are now ignored');
}

/**
 * @deprecated since Moodle 4.0
 */
function book_get_nav_types() {
    throw new coding_exception(__FUNCTION__ . '() has been removed.');
}

/**
 * Returns list of available navigation link CSS classes.
 *
 * @deprecated since Moodle 4.4.
 * @todo MDL-81328 Final deprecation in Moodle 4.8.
 * @return array
 */
function book_get_nav_classes() {
    debugging(__FUNCTION__ . '() is deprecated. There is no replacement.');

    return ['navtoc', 'navimages', 'navtext'];
}
