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
 * Strings for component 'qbank_statistics', language 'sv', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Behöver du kontrolleras?';
$string['discrimination_index_help'] = 'En fråga flaggas som att den antagligen behöver kontrolleras baserat på frågestatistik. Till exempel; om eleverna får en låg poäng på frågan men en hög poäng på hela kunskapstestet, eller en hög poäng på frågan men en låg poäng på hela kunskapstestet, kan det finnas ett problem med frågan, till exempel att ett felaktigt svar angivits som korrekt. Statistik är dock inte ofelbar; den är bara en ledtråd om att frågan bör kontrolleras.';
$string['discriminative_efficiency'] = 'Diskrimineringseffektivitet';
$string['discriminative_efficiency_help'] = 'Bedömningseffektivitet är en statistisk uppskattning av hur väl frågan bedömer eleverna, där ett högre värde är bättre. Ett särskilt lågt värde kan indikera ett problem med frågan. En mycket svår eller enkel fråga (med svårighetsindex nära 0% eller 100%) kan också leda till ett lågt värde.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Facilitetsindex';
$string['facility_index_help'] = 'Svårighetsindexet anger det genomsnittliga betyget (i procent) som erhållits på frågan (samtliga versioner) i alla kunskapstest där frågan har besvarats. Ett högre värde indikerar normalt en enklare fråga.';
$string['likely'] = 'Troligt';
$string['na'] = 'N/A';
$string['pluginname'] = 'Frågestatistik';
$string['privacy:metadata'] = 'Pluginmodulen Frågestatistik lagrar ingen personinformation.';
$string['unlikely'] = 'Osannolikt';
$string['verylikely'] = 'Mycket troligt';
