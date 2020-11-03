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
 * Services description file
 *
 * @author      Adrià Monguillot <amonguillot@clickedu.net>
 * @author      Daniel Ureña Zafra <durenadev@gmail.com>
 * @copyright   2019 CLICKART TALLER DE COMUNICACIÓ, S.L.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = array(

    'local_clickedu_get_activities' => array(
        'classname'   => 'local_clickedu_external',
        'methodname'  => 'get_activities',
        'classpath'   => 'local/clickedu/externallib.php',
        'description' => 'Get list of activities in a course.',
        'type'        => 'read',
    ),

    'local_clickedu_get_grades' => array(
        'classname'   => 'local_clickedu_external',
        'methodname'  => 'get_grades',
        'classpath'   => 'local/clickedu/externallib.php',
        'description' => 'Get grades of a grade item.',
        'type'        => 'read',
    ),
);

$services = array(
    'Clickedu' => array(
        'functions' => array_keys($functions),
        'restrictedusers' => true,
        'enabled' => true,
    ),
);
