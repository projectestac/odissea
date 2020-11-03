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
 * Version file
 *
 * @author      Adrià Monguillot <amonguillot@clickedu.net>
 * @author      Daniel Ureña Zafra <durenadev@gmail.com>
 * @copyright   2019 CLICKART TALLER DE COMUNICACIÓ, S.L.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_clickedu';
$plugin->version = 20190724000; // Té un dígit de més per error, el mantenim per compatibilitat.
$plugin->requires = 2018120300; // Moodle 3.6
