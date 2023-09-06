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
 * Strings for component 'qtype_ddwtos', language 'sv', version '4.1'.
 *
 * @package     qtype_ddwtos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Blankt för {no} fler svar';
$string['answer'] = 'Svar';
$string['blank'] = 'tom';
$string['correctansweris'] = 'Det rätta svaret är: {$a}';
$string['errorlimitedchoice'] = 'Alternativet [[{$a}]] har använts mer än en gång utan att vara inställt på "Obegränsat". Kontrollera den här frågan igen.';
$string['infinite'] = 'Obegränsat';
$string['pleaseputananswerineachbox'] = 'Vänligen ange ett svar i varje textruta.';
$string['pluginname'] = 'Dra och släpp i texten';
$string['pluginname_help'] = 'Dra och släpp i text-frågor kräver att användaren drar ord eller fraser till rätt mellanrum i frågetexten. [[1]], [[2]], [[3]], ... används som platshållare i frågetexten, med de rätta svaren angivna som svarsalternativ 1, 2, 3, ... Svarsalternativen kan grupperas så att alla svar i en viss grupp färgas likadant som luckorna för dem i frågetexten. De svarsalternativ som markerats som obegränsade får användas i mer än ett mellanrum.';
$string['pluginname_link'] = 'question/type/ddwtos';
$string['pluginnameadding'] = 'Lägger till dra och släpp i texten';
$string['pluginnameediting'] = 'Redigerar dra och släpp i texten';
$string['pluginnamesummary'] = 'Saknade ord i frågetexten fylls i genom att dra och släppa svar på den tomma platsen.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Dra och släpp i text gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:shuffleanswers'] = 'Om svaren ska blandas automatiskt.';
