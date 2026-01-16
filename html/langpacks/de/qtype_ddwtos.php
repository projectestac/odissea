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
 * Strings for component 'qtype_ddwtos', language 'de', version '4.5'.
 *
 * @package     qtype_ddwtos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Leerfelder für {no} weitere Wahlmöglichkeiten';
$string['answer'] = 'Antwort';
$string['blank'] = 'leer';
$string['blanknumber'] = 'Leer {$a}';
$string['choicesacceptedtext'] = 'Schreiben Sie die Antworten, die in die Lücken gezogen werden sollen. Sie können zusätzliche Antworten hinzufügen, um den Schwierigkeitsgrad zu erhöhen. <br/>
Akzeptierte Textformatierung: &lt;sub&gt;, &lt;sup&gt;, &lt;b&gt;, &lt;i&gt;, &lt;em&gt;, &lt;strong&gt;. TeX wird ebenfalls akzeptiert, wenn $$ am Anfang und am Ende verwendet wird.';
$string['correctansweris'] = 'Die richtige Antwort lautet: {$a}';
$string['errorlimitedchoice'] = 'Die Wahlmöglichkeit [[{$a}]] wurde mehr als einmal verwendet, ohne auf "Unbegrenzt" gesetzt zu sein. Bitte überprüfen Sie diese Frage erneut.';
$string['infinite'] = 'Unbegrenzt';
$string['pleaseputananswerineachbox'] = 'Schieben Sie eine Antwort in jedes Feld.';
$string['pluginname'] = 'Drag&drop auf Text';
$string['pluginname_help'] = 'Fragetexte mit Drag&drop-Lücken benötigen Platzhalter, um die richtigen Antworten in die entsprechenden Lücken im Fragetext zuordnen zu können. [[1]], [[2]], [[3]], ... werden als Platzhalter im Fragetext benutzt, wobei die richtigen Antworten als Auswahlantworten 1, 2, 3, ... angegeben sind. Antworten können gruppiert werden, um alle Antwortenmöglichkeiten für eine Lücke farblich zu markieren. Wenn Antwortmöglichkeiten als \'unbegrenzt\' markiert sind, können sie in mehr als einer Lücke verwendet werden.';
$string['pluginname_link'] = 'question/type/ddwtos';
$string['pluginnameadding'] = '"Drag&drop auf Text" hinzufügen';
$string['pluginnameediting'] = '"Drag&drop auf Text" bearbeiten';
$string['pluginnamesummary'] = 'Fehlende Wörter im Fragetext werden per Drag&drop ausgefüllt.';
$string['privacy:metadata'] = 'Das Frageformat "Drag&drop in Text" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:penalty'] = 'Abzug für jeden falschen Versuch, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:shuffleanswers'] = 'Gibt an, ob die Antworten automatisch gemischt werden sollen.';
