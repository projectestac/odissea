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
 * Strings for component 'qbank_statistics', language 'ro', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Este necesară verificarea?';
$string['discrimination_index_help'] = 'O întrebare este indicată ca probabil să necesite verificare pe baza statisticilor întrebărilor. De exemplu, dacă cursanții obțin un scor scăzut la întrebare, dar un scor mare la întregul test, sau un scor mare la întrebare, dar un scor scăzut la întregul test, atunci poate exista o problemă cu întrebarea, cum ar fi răspunsul greșit fiind setat ca fiind corect. Statisticile nu sunt însă infailibile; acesta este doar un indiciu că întrebarea ar trebui verificată.';
$string['discriminative_efficiency'] = 'Eficiență discriminatorie';
$string['discriminative_efficiency_help'] = 'Eficiența discriminatorie este o estimare statistică despre cât de bine se evaluează cursanții prin această întrebare, o valoare mai mare fiind mai bună. O valoare deosebit de scăzută poate indica o problemă cu întrebarea. O întrebare foarte dificilă sau ușoară (cu indice de facilitate aproape de 0% sau 100%) poate duce, de asemenea, la o valoare scăzută.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Index de facilități';
$string['facility_index_help'] = 'Indexul de facilitate oferă punctaj mediu (în procente) obținut la întrebare (toate versiunile) la toate testele în care a fost încercată întrebarea. O valoare mai mare indică, în mod normal, o întrebare mai ușoară.';
$string['likely'] = 'Probabil';
$string['na'] = 'N/A';
$string['pluginname'] = 'Statistici întrebare';
$string['privacy:metadata'] = 'Pluginul Statistici întrebări al Băncii de întrebări nu colectează date cu caracter personal.';
$string['unlikely'] = 'Improbabil';
$string['verylikely'] = 'Foarte probabil';
