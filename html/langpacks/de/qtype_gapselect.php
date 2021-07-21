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
 * Strings for component 'qtype_gapselect', language 'de', version '3.11'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Leerfeld für {no} weitere Auswahlmöglichkeiten';
$string['answer'] = 'Antwort';
$string['choices'] = 'Auswahl';
$string['choicex'] = 'Auswahl [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'Dropdown-Menü';
$string['combinedcontrolnamegapselectplural'] = 'Dropdown-Menüs';
$string['correctansweris'] = 'Die richtige Antwort lautet: {$a}';
$string['errorblankchoice'] = 'Überprüfen Sie die Auswahlmöglichkeiten: Auswahl {$a} ist leer.';
$string['errormissingchoice'] = 'Überprüfen Sie den Fragetext: {$a} wurde nicht in den Auswahloptionen gefunden. Als Platzhalter sind nur Nummern erlaubt, die als Auswahlmöglichkeiten vorkommen.';
$string['errornoslots'] = 'Der Fragetext muss Platzhalter wie [[1]] enthalten, um zu zeigen, wo die fehlenden Wörter sind.';
$string['errorquestiontextblank'] = 'Sie müssen einen Fragetext eingeben.';
$string['group'] = 'Gruppe';
$string['pleaseputananswerineachbox'] = 'Bitte tragen Sie in jedes Feld eine Antwort ein.';
$string['pluginname'] = 'Lückentextauswahl';
$string['pluginname_help'] = 'Fragetexte mit Auswahlantworten benötigen Platzhalter, um die richtigen Antworten über Dropdown-Menüs auswählen zu können. [[1]], [[2]], [[3]], ... werden als Platzhalter im Fragetext verwendet, wobei die richtigen Antworten als Auswahlantworten 1, 2, 3, ... angegeben sind. Zusätzliche Auswahlantworten können hinzugefügt werden, um die Beantwortung der Frage schwieriger zu machen. Auswahlantworten können gruppiert werden, um Antworten in den Dropdown-Menüs zu beschränken.';
$string['pluginnameadding'] = '"Lückentextauswahl"-Frage hinzufügen';
$string['pluginnameediting'] = '"Lückentextauswahl"-Frage bearbeiten';
$string['pluginnamesummary'] = 'Fehlende Wörter im Fragetext werden über Dropdown-Menüs ausgefüllt.';
$string['privacy:metadata'] = 'Das Plugin "Lückentext-Frageformat" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:penalty'] = 'Abzug für jeden falschen Versuch, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:shuffleanswers'] = 'Gibt an, ob die Antworten automatisch gemischt werden sollen.';
$string['shuffle'] = 'Zufallsanordnung';
$string['tagsnotallowed'] = '{$a->tag} ist unzulässig. (Nur {$a->allowed} sind zulässig.)';
$string['tagsnotallowedatall'] = '{$a->tag} ist unzulässig. (HTML ist hier nicht zulässig.)';
