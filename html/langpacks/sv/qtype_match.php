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
 * Strings for component 'qtype_match', language 'sv', version '3.11'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Svar {$a}';
$string['availablechoices'] = 'Tillgängliga val';
$string['blanksforxmorequestions'] = '{no}  fler uppsättningar av tomma';
$string['correctansweris'] = 'Det rätta svaret är: {$a}';
$string['deletedchoice'] = '[Borttaget alternativ]';
$string['deletedsubquestion'] = 'Den här delen av frågan togs bort efter det att försöket påbörjades.';
$string['filloutthreeqsandtwoas'] = 'Du måste ange minst två frågor och tre svar. Du kan ange ytterligare fel svar genom att ge ett svar med en tom fråga. Poster där både fråga och svar är tomma kommer att ignoreras.';
$string['nomatchinganswer'] = 'Du måste ange ett svar som matchar frågan \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Du måste ange ett svar på den här frågan.';
$string['notenoughqsandas'] = 'Du måste ange minst {$a->q} frågor och {$a->a} svar.';
$string['notenoughquestions'] = 'Du måste ange åtminstone {$a} kombination/er av fråga och svar.';
$string['pleaseananswerallparts'] = 'Vänligen besvara alla delar av frågan.';
$string['pluginname'] = 'Matchande';
$string['pluginname_help'] = 'Matchningsfrågor kräver att den som svarar på ett korrekt sätt matchar en lista med namn eller påståenden (frågor) med en anna lista med anmn eller påståenden (svar).';
$string['pluginnameadding'] = 'Lägga till en matchningsfråga';
$string['pluginnameediting'] = 'Redigera en matchningsfråga';
$string['pluginnamesummary'] = 'Svaret på var och en av ett antal underfrågor måste väljas från en lista över möjliga svar.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Matchande frågor gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:shuffleanswers'] = 'Om svaren ska blandas automatiskt.';
$string['shuffle'] = 'Blanda';
$string['shuffle_help'] = 'Om aktiverat blandas frågornas ordning slumpmässigt för varje försök förutsatt att "Blanda inom frågor" i aktivitetsinställningarna också är aktiverat. I en matchande fråga påverkas endast frågorna av den här parametern. Svarsalternativen kommer alltid att blandas.';
