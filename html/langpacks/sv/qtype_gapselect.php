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
 * Strings for component 'qtype_gapselect', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Blankt för {no} fler svar';
$string['answer'] = 'Svar';
$string['choices'] = 'Alternativ';
$string['choicex'] = 'Alternativ [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'rullgardinsmeny';
$string['combinedcontrolnamegapselectplural'] = 'rullgardins-menyer';
$string['correctansweris'] = 'Det rätta svaret är: {$a}';
$string['errorblankchoice'] = 'Vänligen kontrollera dina val. Valet {$a} är tomt.';
$string['errormissingchoice'] = 'Vänligen kontrollera frågetexten: {$a} hittades inte i de valda alternativen! Endast tal med svarsalternativ som angivits tillåts användas som platshållare.';
$string['errornoslots'] = 'Frågetexten måste innehålla platshållare som [[1]] för att visa var de saknade orden ska placeras.';
$string['errorquestiontextblank'] = 'Du måste ange någon text för frågan.';
$string['group'] = 'Grupp';
$string['pleaseputananswerineachbox'] = 'Placera ett svar i var och en av rutorna.';
$string['pluginname'] = 'Välj de saknade orden';
$string['pluginnameadding'] = 'Lägger till en Välj de saknade orden-fråga';
$string['pluginnameediting'] = 'Redigerar en Välj de saknade orden-fråga';
$string['pluginname_help'] = 'Välj saknade ord-frågor kräver att användaren väljer rätt svar från rullgardinsmenyer. [[1]], [[2]], [[3]], ... används som platshållare i frågetexten, med de rätta svaren angivna som svarsalternativ 1, 2, 3, ... osv. Ytterligare svarsalternativ kan läggas till för att göra frågan svårare. Svarsalternativ kan grupperas för att begränsa vilka svar som finns i varje rullgardinsmeny.';
$string['pluginnamesummary'] = 'Saknade ord i texten fylls i via rullgardinsmenyer.';
$string['privacy:metadata'] = 'Välj saknade ord-frågeplugintypen lagrar ingen personlig data.';
$string['shuffle'] = 'Blanda';
$string['tagsnotallowed'] = '{$a->tag} är inte tillåtet. (Enbart {$a->allowed} är tillåtna.)';
$string['tagsnotallowedatall'] = '{$a->tag} är inte tillåtet. (Ingen HTML är tillåten här.)';
