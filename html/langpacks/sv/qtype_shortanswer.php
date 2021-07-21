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
 * Strings for component 'qtype_shortanswer', language 'sv', version '3.11'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Tomma utrymmen för {no}  fler svar';
$string['answer'] = 'Svar: {$a}';
$string['answermustbegiven'] = 'Du måste ange ett svar om det finns en poäng eller en återkoppling.';
$string['answerno'] = 'Svar {$a}';
$string['caseno'] = 'Nej, är skiftläge är oviktigt';
$string['casesensitive'] = 'Skiftlägeskänslighet';
$string['caseyes'] = 'Ja, skiftläge måste vara rätt';
$string['correctansweris'] = 'Det rätta svaret är: {$a}';
$string['correctanswers'] = 'Rätta svar';
$string['filloutoneanswer'] = 'Du måste avge åtminstone ett möjligt svar. Svar som lämnas tomma kommer inte att användas. \'*\' kan användas som ett \'wildcard\' för att matcha vilket tecken som helst. Det första matchande svaret kommer att användas för att bestämma resultatet och återkopplingen.';
$string['notenoughanswers'] = 'Denna typ av fråga kräver minst {$a} svar';
$string['pleaseenterananswer'] = 'Ange ett svar.';
$string['pluginname'] = 'Kort svar';
$string['pluginname_help'] = 'Som svar på en fråga (som kan innehålla en bild) skriver den som svarar ett ord eller en kort fras. Det kan finnas flera möjliga korrekta svar, alla med olika betyg. Om "Skiftlägeskänslig" är valt, kan du ha olika poäng för "Ord" eller "ord".';
$string['pluginnameadding'] = 'Lägga en kortsvarsfråga';
$string['pluginnameediting'] = 'Redigera en kortsvarsfråga';
$string['pluginnamesummary'] = 'Tillåter ett svar på ett eller några få ord som rättas genom att jämföra mot olika modell svar, som kan innehålla jokertecken.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Kort svar gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:usecase'] = 'Om svaren ska vara skiftlägeskänsliga.';
