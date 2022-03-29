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
 * Strings for component 'adaptivequiz', language 'de', version '3.11'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Bericht der Versuche';
$string['adaptivequiz:addinstance'] = 'Einen neuen adaptiven Test hinzufügen';
$string['adaptivequiz:attempt'] = 'Adaptiven Test starten';
$string['adaptivequiz:reviewattempts'] = 'Abgaben des adaptiven Tests ansehen';
$string['adaptivequiz:viewreport'] = 'Berichte des adaptiven Tests ansehen';
$string['adaptivequizname'] = 'Name';
$string['adaptivequizname_help'] = 'Namen des adaptiven Tests eingeben';
$string['all_attempts_deleted'] = 'Alle Versuche des adaptiven Tests wurden gelöscht';
$string['all_grades_removed'] = 'Alle Bewertungen des adaptiven Tests wurden entfernt';
$string['answer'] = 'Antwort';
$string['answerdistgraph_numrightwrong'] = 'Anz. falsch (-) / Anz. richtig (+)';
$string['answerdistgraph_questiondifficulty'] = 'Fragenschwierigkeit';
$string['answerdistgraph_title'] = 'Verteilung der Antworten für {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Antworten';
$string['attempt_questiondetails'] = 'Fragendetails';
$string['attempt_state'] = 'Bearbeitungsstand des Versuchs';
$string['attempt_summary'] = 'Zusammenfassung des Versuchs';
$string['attempt_user'] = 'Teilnehmer';
$string['attemptclosed'] = 'Der Versuch wurde manuell beendet.';
$string['attemptclosedstatus'] = 'Manuell geschlossen von {$a->current_user_name} (user-id: {$a->current_user_id}) am {$a->now}.';
$string['attemptdeleted'] = 'Am {$a->timecompleted} eingereichter Versuch von {$a->name} gelöscht';
$string['attemptfeedback'] = 'Feedback für den Versuch';
$string['attemptfeedback_help'] = 'Das Feedback für den Versuch wird dem Teilnehmer angezeigt, sobald er abgeschlossen wurde';
$string['attemptfinishedtimestamp'] = 'Versuch beendet';
$string['attemptfirst'] = 'Erster Versuch';
$string['attemptlast'] = 'Letzter Versuch';
$string['attemptquestion_ability'] = 'Fähigkeitsmessung';
$string['attemptquestion_abilitylogits'] = 'Gemessene Fähigkeit';
$string['attemptquestion_difficulty'] = 'Fragenschwierigkeit (logits)';
$string['attemptquestion_diffsum'] = 'Summe der Schwierigkeiten';
$string['attemptquestion_error'] = 'Standardfehler (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Fragenschwierigkeit';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Richtig/Falsch';
$string['attemptquestion_stderr'] = 'Standardfehler (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'zulässige Versuche';
$string['attemptsallowed_help'] = 'Die Anzahl, wie oft ein Teilnehmer diese Aktivität versuchen kann';
$string['attemptstarttime'] = 'Startzeit des Versuchs';
$string['attemptstate'] = 'Bearbeitungsstand des Versuchs';
$string['attemptstopcriteria'] = 'Grund für die Unterbrechung des Versuchs';
$string['attempttotaltime'] = 'Gesamtdauer (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Zurück zu allen Fragen';
$string['bestscore'] = 'Höchste Punktzahl';
$string['bestscorestderror'] = 'Standardfehler';
$string['browsersecurity'] = 'Browsersicherheit';
$string['browsersecurity_help'] = 'Wenn "Vollbild-Popup mit etwas JavaScript-Sicherheit" ausgewählt ist, wird der Test nur starten, wenn Teilnehmer/innen einen JavaScript-fähigen Webbrowser verwenden. Der Test erscheint in einem Vollbild-Popup-Fenster über allen anderen Fenstern und hat keine Navigationselemente. Die Teilnehmer/innen werden – so weit wie möglich – davon abgehalten, Funktionen wie Kopieren und Einfügen zu nutzen.';
$string['calcerrorwithinlimits'] = 'Berechneter Standardfehler von {$a->calerror} befindet sich innerhalb der Grenzen, welche durch die Aktivität {$a->definederror} festgelegt wurden';
$string['closeattempt'] = 'Versuch beenden';
$string['confirmcloseattempt'] = 'Den Versuch von {$a->name} sicher beenden?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} Fragen wurden beantwortet und die bisherige Punktzahl beträgt {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Dieser Versuch wurde am {$a->started} begonnen und am {$a->modified} zuletzt aktualisiert.';
$string['confirmdeleteattempt'] = 'Bestätigung den am {$a->timecompleted} eingereichten Versuch von {$a->name} zu löschen';
$string['deleteattemp'] = 'Versuch löschen';
$string['discrimination_display_name'] = 'Diskriminierung';
$string['downloadcsv'] = 'CSV herunterladen';
$string['enterrequiredpassword'] = 'Benötigtes Password eingeben';
$string['errorattemptstate'] = 'Fehler bei der Zustandsbestimmung des Testversuchs aufgetreten';
$string['errorclosingattempt'] = 'Versuchsaufzeichnung wurde nicht gefunden';
$string['errorclosingattempt_alreadycomplete'] = 'Der Versuch ist bereits beendet und kann nicht mehr manuell geschlossen werden.';
$string['errordeletingattempt'] = 'Versuchsaufzeichnung wurde nicht gefunden';
$string['errorfetchingquest'] = 'Es konnte keine Frage mit Schwierigkeit {$a->level} abgerufen werden';
$string['errorlastattpquest'] = 'Fehler beim Überprüfen des Antwortwerts für die zuletzt versuchte Frage';
$string['errornumattpzero'] = 'Fehler: Die Anzahl der bearbeiteten Fragen ist null, obwohl eine Antwort auf die vorhergehende Frage gegeben wurde';
$string['errorsumrightwrong'] = 'Die Summe der richtigen und falschen Antworten entspricht nicht der Gesamtanzahl der bearbeiteten Fragen';
$string['formelementdecimal'] = 'Die Eingabe ist eine Dezimalzahl. Dezimalzahlen dürfen höchstens 10 Ziffern lang sein und höchstens 5 Nachkommastellen besitzen';
$string['formelementempty'] = 'Eine Zahl zwischen 1 und 999 eingeben';
$string['formelementnegative'] = 'Eine Zahl zwischen 1 und 999 eingeben';
$string['formelementnumeric'] = 'Einen numerischen Wert zwischen 1 und 999 eingeben';
$string['formlowlevelgreaterthan'] = 'Niedrigster Schwierigkeitsgrad muss unter dem höchsten liegen';
$string['formminquestgreaterthan'] = 'Die minimale Fragenanzahl muss unter der maximalen liegen';
$string['formquestionpool'] = 'Mindestens eine Fragenkategorie wählen';
$string['formstartleveloutofbounds'] = 'Das Startlevel muss eine Zahl sein, die zwischen niedrigstem und höchstem Schwierigkeitsgrad liegt';
$string['formstderror'] = 'Ein Prozentsatz von weniger 50 und größer gleich 0 muss eingegeben werden';
$string['functiondisabledbysecuremode'] = 'Diese Funktion is momentan nicht verfügbar.';
$string['gradehighest'] = 'Höchste Bewertung';
$string['grademethod'] = 'Bewertungsmethode';
$string['grademethod_help'] = 'Wenn mehrere Versuche erlaubt sind, sind die folgenden Methoden zur Berechnung der endgültigen Testbewertung verfügbar:

* Bester Versuch
* Erster Versuch (alle anderen Versuche werden ignoriert)
* Letzer Versuch (alle anderen Versuche werden ignoriert)';
$string['graphlegend_error'] = 'Standardfehler';
$string['graphlegend_target'] = 'Zielstufe';
$string['highestlevel'] = 'Höchste Schwierigkeitsstufe';
$string['highestlevel_help'] = 'Die höchste Schwierigkeitsstufe für Fragen, die der Test auswählen kann. Während eines Testversuchs werden keine Fragen über diese Schwierigkeitsstufe hinaus gestellt';
$string['highlevelusers'] = 'Nutzer/innen über der Schwierigkeitsstufe';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Individueller Testversuchsbericht für {$a}';
$string['leveloutofbounds'] = 'Die verlangte Schwierigkeitsstufe {$a->level} liegt außerhalb des Intervalls für diesen Testversuch';
$string['lowestlevel'] = 'Niedrigste Schwierigkeitsstufe';
$string['lowestlevel_help'] = 'Niedrigster Schwierigkeitsgrad oder geringste Schwierigkeitsstufe für Fragen, die der Test auswählen kann.  Während eines Testversuchs werden keine Fragen unterhalb dieser Schwierigkeitsstufe gestellt';
$string['lowlevelusers'] = 'Nutzer/innen unter der Schwierigkeitsstufe';
$string['maximumquestions'] = 'Maximale Anzahl von Fragen';
$string['maximumquestions_help'] = 'Die minimale Anzahl von Fragen, die der Teilnehmer beantworten kann';
$string['maxquestattempted'] = 'Höchste Anzahl von bearbeiteten Fragen';
$string['midlevelusers'] = 'Nutzer/innen in der Nähe der Schwierigkeitsstufe';
$string['minimumquestions'] = 'Minimale Anzahl von Fragen';
$string['minimumquestions_help'] = 'Die minimale Anzahl von Fragen, die der Teilnehmer beantworten muss';
$string['missingtagprefix'] = 'Fehlendes Präfix des Tags';
$string['modulename'] = 'Adaptiver Test';
$string['modulenameplural'] = 'Adaptiver Test';
$string['na'] = 'nicht verfügbar';
$string['name'] = 'Name';
$string['noattemptrecords'] = 'Für diese Person liegen keine Testversuche vor';
$string['noattemptsallowed'] = 'In dieser Aktivität sind keine weiteren Testversuche erlaubt';
$string['nonewmodules'] = 'Es wurden keine Instanzen des Adaptiven Tests gefunden';
$string['nopermission'] = 'Sie besitzen nicht das Recht diese Ressource anzuzeigen';
$string['notinprogress'] = 'Dieser Testversuch ist nicht in Bearbeitung.';
$string['notyourattempt'] = 'Dies ist nicht Ihr Testversuch in dieser Aktivität';
$string['numofattemptshdr'] = 'Anzahl der Versuche';
$string['numright'] = 'Anzahl richtig';
$string['numwrong'] = 'Anzahl falsch';
$string['percent_correct_display_name'] = '% korrekt';
$string['pluginadministration'] = 'Adaptiver Test';
$string['pluginname'] = 'Adaptiver Test';
$string['question_report'] = 'Fragenanalyse';
$string['questionanalysisbtn'] = 'Fragenanalyse';
$string['questionnumber'] = 'Frage Nr.';
$string['questionpool'] = 'Fragensammlung';
$string['questionpool_help'] = 'Wählen Sie Fragekategorien, aus denen die Aktivität während des Testversuchs Fragen auswählen wird.';
$string['questions_report'] = 'Fragenbericht';
$string['questionsattempted'] = 'Summe der bearbeiteten Fragen';
$string['recentactquestionsattempted'] = 'Fragen bearbeitet: {$a}';
$string['recentattemptstate'] = 'Zustand des Versuchs:';
$string['recentcomplete'] = 'Abgeschlossen';
$string['recentinprogress'] = 'In Bearbeitung';
$string['requirepassword'] = 'Benötigtes Passwort';
$string['requirepassword_help'] = 'Teilnehmer/innen müssen ein Kennwort angeben, bevor sie mit dem Testversuch beginnen können';
$string['requirepasswordmessage'] = 'Um mit diesem Test zu beginnen, müssen Sie das Kennwort wissen';
$string['resetadaptivequizsall'] = 'Alle Testversuche löschen';
$string['result'] = 'Ergebnis';
$string['reviewattempt'] = 'Testversuch überprüfen';
$string['reviewattemptreport'] = 'Textversuch überprüfen von {$a->fullname}, eingereicht {$a->finished}';
$string['score'] = 'Punktzahl';
$string['standarderror'] = 'Standardabweichung um anzuhalten';
$string['standarderror_help'] = 'Wenn der Fehlerwert in der Messung der Nutzerfähigkeiten unter diesen Wert fällt, wird der Testversuch angehalten. Stellen Sie diesen Wert ein (Standard 5%), um eine höhere oder geringere Genauigkeit in der Fähigkeitsmessung zu erreichen';
$string['standarderrorhdr'] = 'Standardabweichung';
$string['startattemptbtn'] = 'Versuch  für Fragen, die der Test auswählen kann.';
$string['startinglevel'] = 'Schwierigkeitsstufe beginnen';
$string['statistic'] = 'Statistik';
$string['stopingconditionshdr'] = 'Anhaltebedingungen';
$string['submitanswer'] = 'Antwort einreichen';
$string['times_used_display_name'] = 'Anzahl der Nutzungen';
$string['unknownuser'] = 'Unbekannte Person';
$string['updateattempterror'] = 'Fehler beim Aktualisieren des Testversuchs';
$string['user'] = 'Nutzer/in';
$string['value'] = 'Wert';
$string['wrongpassword'] = 'Das Kennwort ist falsch';
