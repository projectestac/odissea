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
 * Tiny C4L library functions.
 *
 * @package   tiny_c4l
 * @copyright 2023 Marc Català <reskit@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Return a list of all the user preferences used by tiny_c4l.
 *
 * @return array
 */
function tiny_c4l_user_preferences() {
    $preferences = [];

    $preferences['c4l_components_variants'] = [
        'type' => PARAM_RAW,
        'null' => NULL_NOT_ALLOWED,
        'default' => '',
    ];

    return $preferences;
}

/**
 * Serves the tiny_c4l files.
 *
 * @param stdClass $course course object
 * @param stdClass $cm course module object
 * @param stdClass $context context object
 * @param string $filearea file area
 * @param array $args extra arguments
 * @param bool $forcedownload whether or not force download
 * @param array $options additional options affecting the file serving
 * @return bool false if file not found, does not return if found - just send the file
 */
function tiny_c4l_pluginfile($course,
    $cm,
    $context,
    $filearea,
    $args,
    $forcedownload,
    array $options = []) {

    $compicon = strpos($filearea, 'compicon') !== false;
    $compimage = strpos($filearea, 'customimagesbank') !== false;

    if ($context->contextlevel == CONTEXT_SYSTEM && ($compicon || $compimage)) {
        // Get file.
        $fs = get_file_storage();
        $relativepath = implode('/', $args);
        $fullpath = "/$context->id/tiny_c4l/$filearea/$relativepath";
        $file = $fs->get_file_by_hash(sha1($fullpath));

        if (!$file || $file->is_directory()) {
            return false;
        }

        if (PHPUNIT_TEST) {
            return $file;
        }
        send_stored_file($file, null, 0, false, $options);
    } else {
        send_file_not_found();
    }
}
