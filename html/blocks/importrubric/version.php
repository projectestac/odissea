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
 * Version file for block_importrubric.
 *
 * @package   block_importrubric
 * @copyright 2025 Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'block_importrubric';
$plugin->version   = 2025101000; // Plugin version (YYYYMMDDXX).
$plugin->requires  = 2022041900; // Minimum required Moodle version (Moodle 4.1).
$plugin->maturity  = MATURITY_STABLE; // Development maturity level.
$plugin->release   = '1.0.3'; // Human-readable release name.

$plugin->dependencies = [
    'local_customgradingform_renderer' => 2024051800,
];
