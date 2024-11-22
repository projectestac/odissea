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
 * Strings for component 'qtype_multianswer', language 'de', version '4.1'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Ich bestätige, dass die Frage als nachträglich korrigiert gespeichert werden soll';
$string['confirmsave'] = 'Bestätigen und dann {$a} speichern';
$string['correctanswer'] = 'Richtige Antwort';
$string['correctanswerandfeedback'] = 'Richtige Antwort und Feedback';
$string['corruptedquestion'] = 'Diese Frage ist beschädigt und enthält Unterfragen, die in Ihrem System nicht vorhanden sind.';
$string['decodeverifyquestiontext'] = 'Fragetext entschlüsseln und prüfen';
$string['invalidmultianswerquestion'] = 'Lückentextfrage ({$a}) ungültig';
$string['layout'] = 'Layout';
$string['layouthorizontal'] = 'Eine horizontale Zeile mit Einfach-Auswahl-Möglichkeiten.';
$string['layoutmultiple_horizontal'] = 'Waagerechte Zeile von Ankreuzfeldern';
$string['layoutmultiple_vertical'] = 'Senkrechte Spalte von Ankreuzfeldern';
$string['layoutselectinline'] = 'Auswahlmenü direkt im Text';
$string['layoutundefined'] = 'Undefiniertes Layout';
$string['layoutvertical'] = 'Eine vertikale Spalte mit Einfach-Auswahl-Möglichkeiten';
$string['missingsubquestion'] = 'Diese Unterfrage ist in Ihrem System nicht vorhanden und kann nicht angezeigt werden.';
$string['multichoicex'] = 'Multiple-Choice {$a}';
$string['nooptionsforsubquestion'] = 'Optionen für den Frageteil # {$a->sub} (question->id={$a->id}) konnten nicht gefunden werden';
$string['noquestions'] = 'Die Lückentext-Frage "<strong>{$a}</strong>" enthält keine Frage.';
$string['pleaseananswerallparts'] = 'Bitte beantworten Sie alle Teile der Frage.';
$string['pluginname'] = 'Lückentext (Cloze)';
$string['pluginname_help'] = 'Lückentext-Fragen bestehen aus Textpassagen, die z.B. Multiple-Choice- oder Kurztextfragen enthalten.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Lückentext-Frage hinzufügen';
$string['pluginnameediting'] = 'Lückentext-Frage bearbeiten';
$string['pluginnamesummary'] = 'Fragen dieses Typs sind sehr flexibel. Der Text muss zur Erzeugung einer Lücke codiert werden, um Multiple-Choice-Fragen, Kurztextfragen oder numerische Fragen einzubinden.';
$string['privacy:metadata'] = 'Der eingebettete Antworten Fragetyp speichert keine personenbezogenen Daten';
$string['qtypenotrecognized'] = 'Fragetyp {$a} nicht erkannt';
$string['questiondefinition'] = 'Fragendefinition';
$string['questiondeleted'] = 'Frage entfernt';
$string['questioninquiz'] = '<ul>
  <li>Fragen löschen oder hinzufügen, </li>
  <li>die Reihenfolge der Fragen ändern,</li>
  <li>den Fragetyp (numerisch, Kurzantwort, Multiple-Choice) ändern. </li></ul>';
$string['questionnotfound'] = 'Frage zum Frageteil #{$a} kann nicht gefunden werden';
$string['questionsadded'] = 'Frage hinzugefügt';
$string['questionsaveasedited'] = 'Die Frage wird als bearbeitet gespeichert';
$string['questionsless'] = '{$a} Frage(n) weniger als in der Mehrfachantwort-Frage, die in der Datenbank hinterlegt ist';
$string['questionsmissing'] = 'Der Fragetext muss mindestens eine Antwort anbieten.';
$string['questionsmore'] = '{$a} Frage(n) mehr als in der Mehrfachantwort-Frage, die in der Datenbank hinterlegt ist';
$string['questiontypechanged'] = 'Fragetyp geändert';
$string['questiontypechangedcomment'] = 'Mindestens ein Fragetyp wurde geändert.<br /> Haben Sie eine Frage hinzugefügt, gelöscht oder verschoben?';
$string['questionusedinquiz'] = 'Diese Frage wird bereits in {$a->nb_of_quiz} Test(s) verwendet; Gesamtzahl an Versuchen: {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Die Anzahl eingebetteter Unterfragen in der Frage hat sich geändert.';
$string['storedqtype'] = 'Gespeicherter Fragetyp {$a}';
$string['subqresponse'] = 'Teil {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Unbekannter Fragetyp: {$a->type} in Frageteil # {$a->sub}';
$string['warningquestionmodified'] = '<b>WARNUNG</b>';
$string['youshouldnot'] = '<b>SIE SOLLTEN NICHT</b>';
