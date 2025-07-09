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
 * Strings for component 'filter_embedquestion', language 'de', version '4.4'.
 *
 * @package     filter_embedquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptoptions'] = 'Versuchsoptionen';
$string['authorizedsecrets'] = 'Autorisierte Secrets';
$string['authorizedsecrets_desc'] = 'Fügen Sie hier Secrets von anderen Servern hinzu, jeweils eines pro Zeile, damit die importierten eingebetteten Fragen korrekt funktionieren.<br/><br/>Das Secret dieses Servers ist <code>{$a}</code>.';
$string['chooserandomly'] = 'Zufällig eine einbettbare Frage aus dieser Kategorie auswählen';
$string['corruptattempt'] = 'Ihr vorheriger Versuch bei einer Frage hier funktioniert nicht mehr. Wenn Sie auf Weiter klicken, wird er entfernt und ein neuer Versuch erstellt.';
$string['corruptattemptwithreason'] = 'Ihr vorheriger Versuch bei einer Frage hier funktioniert nicht mehr. ({$a})  Wenn Sie auf Weiter klicken, wird er entfernt und ein neuer Versuch erstellt.';
$string['defaultsheading'] = 'Standardeinstellungen für die Einbettung von Fragen';
$string['defaultsheading_desc'] = 'Dies sind die Standardeinstellungen für die Optionen, die die Anzeige und Funktion von eingebetteten Fragen steuern. Dies sind die Werte, die verwendet werden, wenn eine bestimmte Option beim Einbetten der Frage nicht gesetzt ist.';
$string['defaultx'] = 'Standard ({$a})';
$string['displayoptions'] = 'Anzeigeoptionen';
$string['embedquestion'] = 'Frage einbetten';
$string['errormaxmarknumber'] = 'Die höchste Bewertung muss eine Nummer sein.';
$string['errornopermissions'] = 'Sie haben nicht die Berechtigung, diese Frage einzubetten.';
$string['errorunknownquestion'] = 'Unbekannte oder nicht gemeinsam nutzbare Frage.';
$string['errorvariantformat'] = 'Die Variantenummer muss eine positive ganze Zahl sein.';
$string['errorvariantoutofrange'] = 'Die Variantenummer muss eine positive ganze Zahl sein, höchstens {$a}.';
$string['filtername'] = 'Fragen einbetten';
$string['generalfeedback_desc'] = 'Ob das allgemeine Feedback standardmäßig für eingebettete Fragen angezeigt werden soll.';
$string['howquestionbehaves'] = 'Wie sich die Frage verhält';
$string['howquestionbehaves_desc'] = 'Das zu verwendende Standard-Frageverhalten für eingebettete Fragen';
$string['iframedescription'] = 'iFrame Beschreibung';
$string['iframedescription_help'] = 'Diese Beschreibung unterstützt Nutzer/innen mit einem Screenreader bei der Navigation der Seite, wenn mehrere Fragen auf der selben Seite eingebettet werden.
Die Barrierefreiheit wird verbessert, wenn Sie jede eingebettete Frage kurz beschreiben, um diese eindeutig zu kennzeichnen. Beachten Sie, dass das System dies automatisch als "Eingebettete Frage [[n]]" beschreibt, wobei die genaue Zahl vom System berechnet wird. Sie können weiteren Text als Beschreibung hinzufügen. Beachten Sie auch, dass die Textlänge 100 Zeichen nicht überschreitet.';
$string['iframedescriptionmaxlengthwarning'] = 'Kürzen Sie bitte die Beschreibung auf maximal 100 Zeichen.';
$string['iframedescriptionminlengthwarning'] = 'Eine Beschreibung muss mindestens 3 Zeichen lang sein.';
$string['iframetitle'] = 'Eingebettete Frage';
$string['iframetitleauto'] = 'Eingebettete Frage {$a}';
$string['invalidcategory'] = 'Die Kategorie mit der ID-Nummer "{$a->catid}" existiert nicht in "{$a->contextname}".';
$string['invalidemptycategory'] = 'Die Kategorie "{$a->catname}" in "{$a->contextname}" enthält keine einbettbaren Fragen.';
$string['invalidquestion'] = 'Die Frage mit der ID-Nummer "{$a->qid}" existiert nicht in der Kategorie "{$a->catname} [{$a->catidnumber}]".';
$string['invalidrandomquestion'] = 'Kann keine zufällige Frage aus der Kategorie "{$a}" generieren.';
$string['invalidtoken'] = 'Diese eingebettete Frage ist falsch konfiguriert.';
$string['markdp_desc'] = 'Die standardmäßige Anzahl der angezeigten Nachkommastellen, wenn Bewertungen in eingebetteten Fragen angezeigt werden.';
$string['markedoutof'] = 'Erreichbare Punkte';
$string['marks_desc'] = 'Ob numerische Bewertungsinformationen standardmäßig in eingebetteten Fragen angezeigt werden sollen.';
$string['nameandcount'] = '{$a->name} ({$a->count})';
$string['nameandidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['nameidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->count})';
$string['noguests'] = 'Gäste haben keine Berechtigung, mit eingebetteten Fragen zu interagieren.';
$string['notyourattempt'] = 'Dies ist nicht Ihr Versuch.';
$string['pluginname'] = 'Fragen einbetten';
$string['previousattempts'] = 'Vorheriger Versuch';
$string['privacy:metadata'] = 'Der Filter für eingebettete Fragen speichert keine personenbezogenen Daten.';
$string['questionbank'] = 'Fragensammlung';
$string['questionidnumber'] = 'ID-Nummer der Frage';
$string['questionidnumberchanged'] = 'Die hier versuchte Frage hat nicht mehr die ID-Nummer {$a}.';
$string['questionnolongerhasidnumber'] = 'Die hier versuchte Frage hat keine ID-Nummer mehr';
$string['questionnolongerincategory'] = 'Die hier versuchte Frage befindet sich nicht mehr in der Kategorie mit der ID-Nummer {$a}.';
$string['responsehistory_desc'] = 'Ob die Tabelle mit dem Antworten-Rückblick standardmäßig für eingebettete Fragen angezeigt werden soll.';
$string['restart'] = 'Nochmal beginnen';
$string['rightanswer_desc'] = 'Ob die automatisch generierte Anzeige der richtigen Antwort standardmäßig für eingebettete Fragen angezeigt werden soll. Wir empfehlen, diese nicht zu verwenden, und stattdessen die Frageautoren ermutigen, die richtige Antwort im allgemeinen Feedback zu erklären.';
$string['securityheading'] = 'Sicherheitseinstellungen';
$string['specificfeedback_desc'] = 'Ob Studierenden standardmäßig ihr spezifisches Feedback für ihre Antworten in eingebetteten Fragen angezeigt werden soll.';
$string['taskcleanup'] = 'Alte Versuche von eingebetteten Fragen entfernen';
$string['title'] = 'Eingebettete Fragen';
$string['warningfilteroffglobally'] = 'Warnung: der Filter für eingebettete Fragen ist in den Filtereinstellungen für die gesamte Website deaktiviert.';
$string['warningfilteroffhere'] = 'Warnung: der Filter für eingebettete Fragen ist in diesem Kurs deaktiviert.';
$string['whethercorrect_desc'] = 'Ob Studierenden Hinweise gegeben werden sollen, ob ihre Antwort in eingebetteten Fragen korrekt war. Dies beinhaltet sowohl die textliche Beschreibung für \'Richtig\', \'Teilweise richtig\' und \'Falsch\' wie auch alle farbigen Hervorhebungen für die Informationen.';
$string['whichquestion'] = 'Welche Frage';
