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
 * Test case compatibility shim.
 *
 * @package    block_completion_progress
 * @copyright  2022 Jonathon Fowler <fowlerj@usq.edu.au>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_completion_progress\tests;

defined('MOODLE_INTERNAL') || die();

if (version_compare(\PHPUnit\Runner\Version::id(), '8', '<')) {
    // Moodle 3.9.
    class_alias('block_completion_progress\tests\testcase_phpunit7', 'block_completion_progress\tests\testcase');
} else {
    // Moodle 3.10 onwards.
    class_alias('block_completion_progress\tests\testcase_phpunit8', 'block_completion_progress\tests\testcase');
}
