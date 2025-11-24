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
 * Strings for component 'qbank_statistics', language 'nl', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Moet nagekeken worden?';
$string['discrimination_index_help'] = 'Op basis van vraagstatistieken wordt aangegeven dat een vraag waarschijnlijk moet worden gecontroleerd. Als leerlingen bijvoorbeeld een lage score behalen op de vraag maar een hoge score op de hele test, of een hoge score op de vraag maar een lage score op de hele test, dan kan er een probleem zijn met de vraag, zoals de verkeerde antwoord als correct is ingesteld. Statistieken zijn echter niet onfeilbaar; dit is slechts een hint dat de vraag moet worden gecontroleerd.';
$string['discriminative_efficiency'] = 'Discriminerende efficiëntie';
$string['discriminative_efficiency_help'] = 'Discriminerende efficiëntie is een statistische schatting van hoe goed de vraag leerlingen beoordeelt, waarbij een hogere waarde beter is. Een bijzonder lage waarde kan wijzen op een probleem met de vraag. Een zeer moeilijke of gemakkelijke vraag (met een gemakkelijkheidsindex van bijna 0% of 100%) kan ook leiden tot een lage waarde.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Gemakkelijkheidssindex';
$string['facility_index_help'] = 'De gemakkelijkheidsindex geeft het gemiddelde cijfer (als percentage) dat is behaald op de vraag (alle versies) in alle testen waarbij de vraag is gebruikt. Een hogere waarde geeft normaal gesproken een eenvoudigere vraag aan.';
$string['likely'] = 'Waarschijnlijk';
$string['na'] = 'Nvt';
$string['pluginname'] = 'Vraagstatistieken';
$string['privacy:metadata'] = 'De plug-in voor vraagstatistieken slaat geen gebruikersgegevens op.';
$string['unlikely'] = 'Onwaarschijnlijk';
$string['verylikely'] = 'Zeer waarschijnlijk';
