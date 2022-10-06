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
 * Strings for component 'qtype_gapselect', language 'sv', version '3.11'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Blankt för {no} fler svar';
$string['answer'] = 'Svar';
$string['blanknumber'] = 'Tom {$a}';
$string['choices'] = 'Alternativ';
$string['choicex'] = 'Alternativ [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'listruta';
$string['combinedcontrolnamegapselectplural'] = 'rullgardins-menyer';
$string['correctansweris'] = 'Det rätta svaret är: {$a}';
$string['errorblankchoice'] = 'Vänligen kontrollera dina val. Valet {$a} är tomt.';
$string['errormissingchoice'] = 'Vänligen kontrollera frågetexten: {$a} hittades inte i de valda alternativen! Endast tal med svarsalternativ som angivits tillåts användas som platshållare.';
$string['errornoslots'] = 'Frågetexten måste innehålla platshållare som [[1]] för att visa var de saknade orden ska placeras.';
$string['errorquestiontextblank'] = 'Du måste ange någon text för frågan.';
$string['group'] = 'Grupp';
$string['pleaseputananswerineachbox'] = 'Placera ett svar i var och en av rutorna.';
$string['pluginname'] = 'Välj de saknade orden';
$string['pluginname_help'] = 'Välj saknade ord-frågor kräver att användaren väljer rätt svar fria listrutor. [[1]], [[2]], [[3]], ... används som platshållare i frågetexten, med de rätta svaren angivna som svarsalternativ 1, 2, 3, ... osv. Ytterligare svarsalternativ kan läggas till för att göra frågan svårare. Svarsalternativen kan grupperas för att begränsa vilka svar som finns i varje listruta.';
$string['pluginnameadding'] = 'Lägger till en Välj de saknade orden-fråga';
$string['pluginnameediting'] = 'Redigerar en Välj de saknade orden-fråga';
$string['pluginnamesummary'] = 'Saknade ord i texten fylls i via listrutor.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Saknade ord gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:shuffleanswers'] = 'Om svaren ska blandas automatiskt.';
$string['shuffle'] = 'Blanda';
$string['tagsnotallowed'] = '{$a->tag} är inte tillåtet. (Enbart {$a->allowed} är tillåtna.)';
$string['tagsnotallowedatall'] = '{$a->tag} är inte tillåten. (Ingen HTML är tillåten här.)';
