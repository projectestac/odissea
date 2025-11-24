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
 * Strings for component 'qtype_calculatedmulti', language 'de', version '4.5'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Auswahloptionen';
$string['answeroptions_help'] = 'Die vorgeschlagene Formelauswahl ist ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Berechnete Multiple-Choice';
$string['pluginname_help'] = 'Berechnete Multiple-Choice-Fragen entsprechen normalen MultipleChoice-Fragen, können aber zusätzlich Variablen in geschweiften Klammern  (Wildcards) enthalten. In diese Variablen werden bei der Testdurchführung gegen zufällige Zahlen aus der Wertemenge eingesetzt. <p>Beispiel: Auf die Frage "Welche Fläche hat ein Rechteck mit der Länge {l} und der Breite {b}?" wäre  die Antwort "{={l}*{b}}". Der Stern (*) steht für die Multiplikation.';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'Berechnete Multiple-Choice-Frage hinzufügen';
$string['pluginnameediting'] = 'Berechnete Multiple-Choice-Frage bearbeiten';
$string['pluginnamesummary'] = 'Berechnete Multiple-Choice-Fragen können Variablen enthalten, in die bei der Testdurchführung zufällige Zahlen aus der Wertemenge eingesetzt werden.';
$string['privacy:metadata'] = 'Das Berechnete Fragen Multiple-Choice Frageformat Plugin speichert keine personenbezogenen Daten.';
