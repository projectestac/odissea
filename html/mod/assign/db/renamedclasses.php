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
 * This file contains mappings for classes that have been renamed.
 *
 * @package    mod_assign
 * @copyright  2021 Catalyst IT Australia Pty Ltd
 * @author     Cameron Ball <cameron@cameron1729.xyz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$renamedclasses = [
    // Since Moodle 4.0.
    'assign_header' => 'mod_assign\output\assign_header',
    'assign_submission_status' => 'mod_assign\output\assign_submission_status',
    // Since Moodle 4.1.
    'mod_assign\local\views\secondary' => 'mod_assign\navigation\views\secondary',
];
