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
 * Strings for component 'adaptivequiz', language 'de', version '4.1'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Geschätzte Fähigkeit';
$string['abilityestimated_help'] = 'Die geschätzte Fähigkeit von Testteilnehmer/innen entspricht der Schwierigkeitsstufe derjenigen Fragen, bei denen eine Person eine 50%-ige Wahrscheinlichkeit hat, die Frage richtig zu beantworten. Die Leistungsstufe einer Person wird dabei durch Vergleich des geschätzten Fähigkeitswertes mit dem Gesamtbereich der Schwierigkeitsstufen ermittelt (siehe nach dem \'/\'-Symbol angezeigtes maximales Niveau).';
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
$string['answerdistgraph_right'] = 'Richtig';
$string['answerdistgraph_title'] = 'Verteilung der Antworten für {$a->firstname} {$a->lastname}';
$string['answerdistgraph_wrong'] = 'Falsch';
$string['answers_display_name'] = 'Antworten';
$string['attempt_questiondetails'] = 'Fragendetails';
$string['attempt_state'] = 'Bearbeitungsstand des Versuchs';
$string['attempt_summary'] = 'Zusammenfassung des Versuchs';
$string['attempt_user'] = 'Teilnehmer';
$string['attemptclosed'] = 'Der Versuch wurde manuell beendet.';
$string['attemptclosedstatus'] = 'Manuell geschlossen von {$a->current_user_name} (user-id: {$a->current_user_id}) am {$a->now}.';
$string['attemptdeleted'] = 'Am {$a->timecompleted} eingereichter Versuch von {$a->name} gelöscht';
$string['attemptfeedback'] = 'Rückmeldung zum Versuch';
$string['attemptfeedback_help'] = 'Die Rückmeldung zum Versuch wird Teilnehmer/innen angezeigt, sobald der Versuch beendet ist';
$string['attemptfeedbackdefaulttext'] = 'Sie haben den Versuch abgeschlossen. Danke für die Teilnahme am Test!';
$string['attemptfinishedtimestamp'] = 'Versuch beendet';
$string['attemptfirst'] = 'Erster Versuch';
$string['attemptlast'] = 'Letzter Versuch';
$string['attemptnofirstquestion'] = 'Es tut uns leid, aber die erste Frage zum Testbeginn konnte nicht definiert werden, der Test ist möglicherweise falsch konfiguriert.';
$string['attemptquestion_ability'] = 'Fähigkeitsmessung';
$string['attemptquestion_abilitylogits'] = 'Gemessene Fähigkeit (logits)';
$string['attemptquestion_difficulty'] = 'Fragenschwierigkeit (logits)';
$string['attemptquestion_diffsum'] = 'Summe der Schwierigkeiten';
$string['attemptquestion_error'] = 'Standardfehler (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Fragenschwierigkeit';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Richtig/Falsch';
$string['attemptquestion_stderr'] = 'Standardfehler (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Fragenfortschritt: {$a}';
$string['attemptquestionsprogress_help'] = 'Die hier angezeigte maximale Anzahl an Fragen entspricht nicht unbedingt der Anzahl an Fragen, die Sie während des Tests tatsächlich vorgelegt bekommen. Es ist lediglich die MAXIMAL MÖGLICHE Anzahl an Fragen, die pro Test vorgelegt werden. Ihr Test kann aber auch bereits früher enden, wenn die Fähigkeitsmessung ausreichend definiert ist.';
$string['attemptsallowed'] = 'zulässige Versuche';
$string['attemptsallowed_help'] = 'Die Anzahl, wie oft ein Teilnehmer diese Aktivität versuchen kann';
$string['attemptstarttime'] = 'Startzeit des Versuchs';
$string['attemptstate'] = 'Bearbeitungsstand des Versuchs';
$string['attemptstopcriteria'] = 'Grund für die Beendigung des Versuchs';
$string['attemptsusernoprevious'] = 'Sie haben diesen Test noch nicht aufgerufen.';
$string['attemptsuserprevious'] = 'Ihre vorherigen Versuche';
$string['attempttotaltime'] = 'Gesamtdauer (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Zurück zu allen Fragen';
$string['bestscore'] = 'Höchste Punktzahl';
$string['bestscorestderror'] = 'Standardfehler';
$string['browsersecurity'] = 'Browsersicherheit';
$string['browsersecurity_help'] = 'Wenn "Vollbild-Popup mit etwas JavaScript-Sicherheit" ausgewählt ist, wird der Test nur starten, wenn Teilnehmer/innen einen JavaScript-fähigen Webbrowser verwenden. Der Test erscheint in einem Vollbild-Popup-Fenster über allen anderen Fenstern und hat keine Navigationselemente. Die Teilnehmer/innen werden – so weit wie möglich – davon abgehalten, Funktionen wie Kopieren und Einfügen zu nutzen.';
$string['calcerrorwithinlimits'] = 'Berechneter Standardfehler von {$a->calerror} befindet sich innerhalb der Grenzen, welche durch die Aktivität {$a->definederror} festgelegt wurden';
$string['closeattempt'] = 'Versuch beenden';
$string['completionattemptcompletedcminfo'] = 'Versuch abschließen';
$string['completionattemptcompletedform'] = 'Teilnehmer/in muss über mindestens einen abgeschlossenen Versuch in dieser Aktivität verfügen';
$string['confirmcloseattempt'] = 'Möchten Sie wirklich diesen Versuch von {$a->name} beenden und schließen?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} Fragen wurden beantwortet und die bisherige Punktzahl beträgt {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Dieser Versuch wurde am {$a->started} begonnen und am {$a->modified} zuletzt aktualisiert.';
$string['confirmdeleteattempt'] = 'Bestätigung zur Löschung des Versuchs von {$a->name}, eingereicht am {$a->timecompleted}';
$string['deleteattemp'] = 'Versuch löschen';
$string['discrimination_display_name'] = 'Diskriminierung';
$string['downloadcsv'] = 'CSV herunterladen';
$string['enterrequiredpassword'] = 'Benötigtes Password eingeben';
$string['errorattemptstate'] = 'Fehler bei der Zustandsbestimmung des Testversuchs aufgetreten';
$string['errorclosingattempt_alreadycomplete'] = 'Der Versuch ist bereits beendet und kann nicht mehr manuell geschlossen werden.';
$string['errorfetchingquest'] = 'Es konnte keine Frage mit Schwierigkeit {$a->level} abgerufen werden';
$string['errorlastattpquest'] = 'Fehler beim Überprüfen des Antwortwerts für die zuletzt versuchte Frage';
$string['errornumattpzero'] = 'Fehler: Die Anzahl der bearbeiteten Fragen ist null, obwohl eine Antwort auf die vorhergehende Frage gegeben wurde';
$string['errorsumrightwrong'] = 'Die Summe der richtigen und falschen Antworten entspricht nicht der Gesamtanzahl der bearbeiteten Fragen';
$string['eventattemptcompleted'] = 'Versuch abgeschlossen';
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
$string['leveloutofbounds'] = 'Die angeforderte Schwierigkeitsstufe {$a->level} liegt außerhalb des für diesen Versuch zulässigen Bereichs.';
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
$string['modformshowattemptprogress'] = 'Testfortschritt für Teilnehmer/innen anzeigen';
$string['modformshowattemptprogress_help'] = 'Wenn diese Option aktiviert ist, sehen die Teilnehmer/innen während des Versuchs eine Fortschrittsanzeige, die die Anzahl der beantworteten Fragen im Vergleich zur maximal möglichen Anzahl anzeigt.';
$string['modulename'] = 'Adaptiver Test';
$string['modulename_help'] = 'Die Aktivität "Adaptiver Test" ermöglicht es Trainer/innen, Tests zu erstellen, die die Fähigkeiten der Teilnehmer/innen effizient messen. Adaptive Tests bestehen aus Fragen, die aus einer Fragensammlung ausgewählt werden und mit einer Schwierigkeitsstufe versehen sind. Die Fragen werden passend zur geschätzten Fähigkeitsstufe der jeweiligen Person ausgewählt. Wenn die Person eine Frage erfolgreich beantwortet, wird nachfolgend eine schwierigere Frage gestellt. Wenn die Person eine Frage falsch beantwortet, wird eine weniger anspruchsvolle Frage gestellt. Dieser Prozess erzeugt eine Abfolge von Fragen, die auf die tatsächliche Fähigkeitsstufe der jeweiligen Person zusteuert. Der Test endet, wenn die Fähigkeit mit der erforderlichen Genauigkeit bestimmt wurde.

Diese Aktivität eignet sich am besten zur Bestimmung einer Fähigkeitsmessung entlang einer eindimensionalen Skala. Diese Skala kann sehr breit sein, aber alle Fragen müssen eine gemeinsame Fähigkeit oder Eignung auf dieser gleichen Skala messen. In einem Einstufungstest sollten beispielsweise alle Fragen, die Anfänger/innen richtig beantworten können, auch von Expert/innen korrekt beantwortet werden können, während Fragen, die höher auf der Skala liegen, nur von Expert/innen oder durch Zufall beantwortet werden können. Fragen, die keinen Unterschied zwischen Personen unterschiedlicher Fähigkeiten abbilden, machen den Test unwirksam und können zu unklaren Ergebnissen führen.

Die im adaptiven Test verwendeten Fragen müssen:

* automatisch als richtig/falsch bewertet werden

* mit ihrem Schwierigkeitsniveau durch ein Tag gekennzeichnet sein, das mit dem Präfix "adpq_" beginnt, gefolgt von einer positiven Zahl, die im Schwierigkeitsbereich des Tests liegt.

Der adaptive Test kann konfiguriert werden, um folgendes festzulegen:

* den Bereich der Fragenschwierigkeit/Nutzerfähigkeit, der gemessen werden soll (Beispiele für gültige Bereiche sind 1-10, 2-16 oder 1-100)
* die erforderliche Präzision, bevor der Test endet (oft ist ein Fehler von 5% in der Fähigkeitsmessung eine angemessene Stoppregel)
* die minimale Anzahl der zu beantwortenden Fragen
* die maximale Anzahl der zu beantwortenden Fragen.

Diese Beschreibung und der Testprozess in dieser Aktivität basieren auf <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Adaptive Tests';
$string['na'] = 'nicht verfügbar';
$string['name'] = 'Name';
$string['noattemptsallowed'] = 'In dieser Aktivität sind keine weiteren Testversuche erlaubt';
$string['nonewmodules'] = 'Es wurden keine Instanzen des Adaptiven Tests gefunden';
$string['nopermission'] = 'Sie haben nicht das Recht, diese Ressource anzuzeigen';
$string['notinprogress'] = 'Dieser Testversuch ist nicht in Bearbeitung.';
$string['notyourattempt'] = 'Dies ist nicht Ihr Testversuch in dieser Aktivität';
$string['numofattemptshdr'] = 'Anzahl der Versuche';
$string['numright'] = 'Anzahl richtig';
$string['numwrong'] = 'Anzahl falsch';
$string['percent_correct_display_name'] = '% korrekt';
$string['pluginadministration'] = 'Adaptiver Test';
$string['pluginname'] = 'Adaptiver Test';
$string['question_report'] = 'Fragenanalyse';
$string['questionanalysisbtn'] = 'Fragenauswertung';
$string['questionnumber'] = 'Frage Nr.';
$string['questionpool'] = 'Fragensammlung';
$string['questionpool_help'] = 'Wählen Sie Fragekategorien, aus denen die Aktivität während des Testversuchs Fragen auswählen wird.';
$string['questions_report'] = 'Fragenbericht';
$string['questionsattempted'] = 'Summe der bearbeiteten Fragen';
$string['questionspoolerrornovalidstartingquestions'] = 'Die gewählten Fragenkategorien enthalten keine Fragen, die ordnungsgemäß mit dem ausgewählten Anfangsniveau der Schwierigkeit markiert sind.';
$string['recentactquestionsattempted'] = 'Fragen bearbeitet: {$a}';
$string['recentattemptstate'] = 'Zustand des Versuchs:';
$string['recentcomplete'] = 'Abgeschlossen';
$string['recentinprogress'] = 'In Bearbeitung';
$string['reportattemptanswerdistributiontab'] = 'Antwortverteilung';
$string['reportattemptanswerdistributiontabletitle'] = 'Tabellenansicht der Antwortverteilung';
$string['reportattemptgraphtab'] = 'Versuchsgrafik';
$string['reportattemptgraphtabletitle'] = 'Tabellenansicht der Versuchsgrafik';
$string['reportattemptquestionsdetailstab'] = 'Fragendetails';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - Überprüfung des Versuchs von {$a->fullname}, eingereicht am {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'alle Nutzer/innen, die jemals Versuche unternommen haben';
$string['reportattemptsdownloadfilename'] = '{$a}_Versuchsbericht';
$string['reportattemptsenrolledwithattempts'] = 'Teilnehmer/innen, die Versuche unternommen haben';
$string['reportattemptsenrolledwithnoattempts'] = 'Teilnehmer/innen ohne Versuche';
$string['reportattemptsfilterformheader'] = 'Filtern';
$string['reportattemptsfilterformsubmit'] = 'Filter';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Nutzer/innen mit inaktiven Anmeldungen einbeziehen';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Die Option legt fest, ob Nutzer/innen mit ausgesetzten Anmeldungen einbezogen werden sollen';
$string['reportattemptsfilterusers'] = 'Anzeigen';
$string['reportattemptsnotenrolled'] = 'Nicht angemeldete Nutzer/innen, die Versuche unternommen haben';
$string['reportattemptspersistentfilter'] = 'Dauerhafter Filter';
$string['reportattemptspersistentfilter_help'] = 'Wenn diese Option aktiviert ist, werden die Filtereinstellungen gespeichert und zukünftig verwendet, wenn Sie die Berichtsseite besuchen.';
$string['reportattemptsprefsformheader'] = 'Berichtseinstellungen';
$string['reportattemptsprefsformsubmit'] = 'Anwenden';
$string['reportattemptsresetfilter'] = 'Zurücksetzen';
$string['reportattemptsshowinitialbars'] = 'Initialienleiste anzeigen';
$string['reportattemptsummarytab'] = 'Zusammenfassung des Versuchs';
$string['reportattemptsusersperpage'] = 'Anzahl angezeigter Nutzer/innen:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - Einzelbericht für {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} -  Fragenbericht';
$string['reportuserattemptstitleshort'] = 'Versuche von {$a}';
$string['requirepassword'] = 'Benötigtes Passwort';
$string['requirepassword_help'] = 'Teilnehmer/innen müssen ein Kennwort angeben, bevor sie mit dem Testversuch beginnen können';
$string['requirepasswordmessage'] = 'Um mit diesem Test zu beginnen, müssen Sie das Kennwort wissen';
$string['resetadaptivequizsall'] = 'Alle Testversuche löschen';
$string['result'] = 'Ergebnis';
$string['reviewattempt'] = 'Testversuch überprüfen';
$string['reviewattemptreport'] = 'Überprüfung des Versuchs von {$a->fullname}, eingereicht am {$a->finished}';
$string['score'] = 'Punktzahl';
$string['showabilitymeasure'] = 'Teilnehmer/innen ihr Fähigkeitsmaß anzeigen';
$string['showabilitymeasure_help'] = 'Es kann vorteilhaft sein, den Teilnehmer/innen nach einem adaptiven Testlauf ihre Fähigkeitsschätzungen anzuzeigen. Wenn diese Einstellung aktiviert ist, kann eine Person ihr geschätztes Fähigkeitsmaß im Versuchskurzüberblick und unmittelbar nach Beendigung des Versuchs sehen.';
$string['standarderror'] = 'Standardfehler, der Testende bewirkt';
$string['standarderror_help'] = 'Wenn der Fehlerwert in der Messung der Nutzerfähigkeit unter diesen Wert fällt, wird der Testversuch beendet. Justieren Sie diesen Wert (Voreinstellung 5%) entsprechend, um eine höhere oder geringere Genauigkeit in der Fähigkeitsmessung zu erreichen';
$string['standarderrorhdr'] = 'Standardabweichung';
$string['startattemptbtn'] = 'Versuch starten';
$string['startinglevel'] = 'Schwierigkeitsstufe der Startfrage';
$string['startinglevel_help'] = 'Wenn eine Person einen Versuch beginnt, wählt die Aktivität zufällig eine Frage aus, die diesem Schwierigkeitsniveau entspricht.';
$string['statistic'] = 'Statistik';
$string['stopingconditionshdr'] = 'Anhaltebedingungen';
$string['submitanswer'] = 'Antwort einreichen';
$string['times_used_display_name'] = 'Anzahl der Nutzungen';
$string['updateattempterror'] = 'Fehler beim Aktualisieren des Testversuchs';
$string['user'] = 'Nutzer/in';
$string['value'] = 'Wert';
$string['wrongpassword'] = 'Das Kennwort ist falsch';
