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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings for the question bank overview report.
 *
 * @package    report_questionbankoverview
 * @copyright  2025 Toni Ginard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$ADMIN->add(
    'reports',
    new admin_externalpage(
        'questionbankoverview',
        get_string('pluginname', 'report_questionbankoverview'),
        $CFG->wwwroot . '/report/questionbankoverview/index.php',
        'report/questionbankoverview:view'
    )
);

$settings = null;
