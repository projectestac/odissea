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
 * Strings for component 'qtype_match', language 'de', version '4.4'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Antwort {$a}';
$string['availablechoices'] = 'Verfügbare Wahlmöglichkeiten';
$string['blanksforxmorequestions'] = '{no} weitere Leerfelder';
$string['correctansweris'] = 'Die richtige Antwort ist: {$a}';
$string['deletedchoice'] = '[Auswahl löschen]';
$string['deletedsubquestion'] = 'Dieser Teil der Frage ist gelöscht worden, nachdem der Versuch begonnen wurde.';
$string['filloutthreeqsandtwoas'] = 'Sie müssen zumindest zwei Fragen und drei Antworten zur Verfügung stellen. Sie können weiter falsche Antworten anbieten, indem Sie eine Antwort mit einer leeren Frage erstellen. Einträge, bei denen sowohl die Frage als auch die Antwort leer ist, werden ignoriert.';
$string['nomatchinganswer'] = 'Sie müssen eine zur Frage \'{$a}\' passende Antwort angeben.';
$string['nomatchinganswerforq'] = 'Sie müssen eine Antwort für diese Frage angeben.';
$string['notenoughqsandas'] = 'Sie müssen mindestens {$a->q} Fragen und {$a->a} Antworten anbieten.';
$string['notenoughquestions'] = 'Sie müssen mindestens {$a} Paare mit Frage und Antwort anbieten.';
$string['pleaseananswerallparts'] = 'Bitte beantworten Sie alle Teile der Frage';
$string['pluginname'] = 'Zuordnung';
$string['pluginname_help'] = 'Zuordnungsfragen fordern dazu auf, eine Liste von Begriffen oder Aussagen (Fragen) jeweils anderen Begriffen oder Aussagen (Antworten) zuzuordnen.';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Zuordnungsfrage hinzufügen';
$string['pluginnameediting'] = 'Zuordnungsfrage bearbeiten';
$string['pluginnamesummary'] = 'Die Antwort auf jede der Unterfragen muss aus einer Liste von Möglichkeiten ausgewählt werden.';
$string['privacy:metadata'] = 'Das Plugin "Zuordnungsfrage" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:penalty'] = 'Abzug für jeden falschen Versuch, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:shuffleanswers'] = 'Ob die Antworten automatisch gemischt werden sollen.';
$string['regradeissuenumchoiceschanged'] = 'Die Anzahl der Auswahloptionen hat sich geändert.';
$string['regradeissuenumstemschanged'] = 'Die Anzahl der Unterfragen hat sich geändert.';
$string['shuffle'] = 'Mischen';
$string['shuffle_help'] = 'Wenn diese Option aktiviert ist, ist die Reihenfolge der Begriffe oder Aussagen (Antworten) bei jedem Versuch zufällig, sofern die Option "Antworten innerhalb der Fragen mischen" in den Einstellungen des Tests ebenfalls aktiviert ist. Bei einer Zuordnungsfrage sind nur die Fragen von diesem Parameter betroffen. Die Antwortmöglichkeiten werden immer gemischt.';
