<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'workshopeval_credit', language 'ca', version '4.1'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Mode d\'avaluació';
$string['mode_desc'] = 'Mode d\'avaluació de les qualificacions per defecte utilitzat pel mètode de _Crèdit de participació_';
$string['mode_help'] = 'El mode determina com s\'han de calcular les qualificacions de l\'avaluació.

* Tot o res. Qui revisa ha d\'avaluar totes les trameses assignades per obtenir la màxima qualificació; en cas contrari, la nota serà equivalent a zero.
* Proporcional. La qualificació obtinguda és proporcional al nombre d\'avaluacions. Si s\'avaluen totes les trameses assignades, la persona que revisi obtindrà la màxima qualificació. Si s\'avaluen la meitat de les trameses assignades, la persona que avaluï obtindrà el 50% de la qualificació màxima.
* Com a mínim una. Qui revisa ha d\'avaluar com a mínim una tramesa assignada per obtenir la màxima qualificació.';
$string['modeall'] = 'Tot o res';
$string['modeone'] = 'Com a mínim un';
$string['modeproportional'] = 'Proporcional';
$string['pluginname'] = 'Crèdit de participació';
