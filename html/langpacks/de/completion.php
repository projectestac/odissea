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
 * Strings for component 'completion', language 'de', version '4.1'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Erreichen der Bewertung';
$string['achievingpassinggrade'] = 'Erreichen der Bestehensnote';
$string['activities'] = 'Aktivitäten';
$string['activitiescompleted'] = 'Aktivitätsabschluss';
$string['activitiescompletednote'] = 'Hinweis: Ein Aktivitätenabschluss muss gesetzt sein, bevor die Aktivität in der Liste angezeigt wird.';
$string['activitieslabel'] = 'Aktivitäten / Materialien';
$string['activityaggregation'] = 'Bedingung notwendig';
$string['activityaggregation_all'] = 'Alle ausgewählten Aktivitäten müssen abgeschlossen sein';
$string['activityaggregation_any'] = 'Mindestens eine der ausgewählten Aktivitäten muss abgeschlossen sein';
$string['activitycompletion'] = 'Aktivitätsabschluss';
$string['activitycompletionupdated'] = 'Änderungen gespeichert';
$string['activitygradenotrequired'] = 'Bewertung nicht notwendig';
$string['activitygradetopassnotset'] = 'Für diese Aktivität ist keine gültige Bestehensgrenze vorhanden. Sie kann im Abschnitt \'Bewertung\' der Aktivitätseinstellungen festgelegt werden.';
$string['affectedactivities'] = 'Die Änderungen betreffen die folgenden <b>{$a}</b> Aktivitäten:';
$string['aggregationmethod'] = 'Methode zur Zusammenfassung';
$string['all'] = 'Alle';
$string['any'] = 'Irgendein';
$string['approval'] = 'Freigabe';
$string['areyousureoverridecompletion'] = 'Möchten Sie wirklich den aktuellen Abschlussstatus für diese Aktivität und diese Person überschreiben und mit \'{$a}\' markieren?';
$string['badautocompletion'] = 'Wenn Sie einen automatischen Abschluss wählen, müssen Sie mindestens eine Abschlussbedingung angeben.';
$string['badcompletiongradeitemnumber'] = 'Erforderliche Note kann für <b>{$a}</b> nicht aktiviert werden, da Benotung mit {$a} nicht aktiviert ist.';
$string['bulkactivitycompletion'] = 'Sammelbearbeitung von Aktivitätsabschlüssen';
$string['bulkactivitydetail'] = 'Wählen Sie die Aktivitäten, die Sie gesammelt bearbeiten möchten.';
$string['bulkcompletiontracking'] = 'Abschlussverfolgung';
$string['bulkcompletiontracking_help'] = '<strong>Keine:</strong> Aktivitätsabschluss wird nicht angezeigt

<strong>Manuell:</strong> Teilnehmer/innen können die Aufgabe manuell als abgeschlossen markieren

<strong>Unter Bedingung(en):</strong> Aktivität wird als abgeschlossen angezeigt, wenn die Bedingungen erfüllt sind';
$string['checkactivity'] = 'Kontrollfeld für Aktivität: {$a}';
$string['checkall'] = 'Kontrollfelder für alle Aktivitäten markieren oder löschen';
$string['checkallsection'] = 'Kontrollfelder für alle Aktivitäten im Abschnitt markieren oder löschen: {$a}';
$string['completeactivity'] = 'Aktivität abschließen';
$string['completed'] = 'Abgeschlossen';
$string['completedunlocked'] = 'Abschlusseinstellungen verfügbar';
$string['completedunlockedtext'] = 'Wenn Sie Ihre Änderungen speichern, werden die Abschlussdaten für alle Nutzer/innen gelöscht und wenn möglich neu berechnet. Wenn Sie dies nicht möchten, speichern Sie bitte nicht!';
$string['completedwarning'] = 'Abschlusseinstellungen gesperrt';
$string['completedwarningtext'] = 'Diese Aktivität wurde von einer oder mehreren Personen als abgeschlossen markiert. Wenn Sie die Einstellungen entsperren, um Änderungen vorzunehmen und zu speichern, werden die Abschlussdaten gelöscht und wenn möglich neu berechnet. Manuelle Abschlüsse können nicht neu berechnet werden, so dass Teilnehmer/innen diese erneut als erledigt markieren müssen.';
$string['completion'] = 'Abschlussverfolgung';
$string['completion-alt-auto-enabled'] = 'Das System markiert dieses Element entsprechend den Bedingungen als abgeschlossen: {$a}';
$string['completion-alt-auto-fail'] = 'Abgeschlossen: {$a} (Bestehensgrenze nicht erreicht)';
$string['completion-alt-auto-n'] = 'Nicht abgeschlossen: {$a}';
$string['completion-alt-auto-n-override'] = 'Nicht abgeschlossen: {$a->modname} (gesetzt von {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Abgeschlossen: {$a} (Bestehensgrenze erreicht)';
$string['completion-alt-auto-y'] = 'Abgeschlossen: {$a}';
$string['completion-alt-auto-y-override'] = 'Abgeschlossen: {$a->modname} (gesetzt von {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Abschluss wird manuell signalisiert: {$a}';
$string['completion-alt-manual-n'] = 'Nicht abgeschlossen: {$a} - mit Auswahl als abgeschlossen markieren';
$string['completion-alt-manual-n-override'] = 'Nicht abgeschlossen: {$a->modname} (gesetzt von {$a->overrideuser}). Wählen, um dies als abgeschlossen zu markieren.';
$string['completion-alt-manual-y'] = 'Abgeschlossen: {$a}  - mit Auswahl als nicht abgeschlossen markieren';
$string['completion-alt-manual-y-override'] = 'Abgeschlossen: {$a->modname} (gesetzt von {$a->overrideuser}). Wählen, um dies als nicht abgeschlossen zu markieren.';
$string['completion-fail'] = 'Abgeschlossen (Bestehensgrenze nicht erreicht)';
$string['completion-n'] = 'Nicht abgeschlossen';
$string['completion-n-override'] = 'Nicht abgeschlossen (gesetzt von {$a})';
$string['completion-pass'] = 'Abgeschlossen (Bestehensgrenze erreicht)';
$string['completion-y'] = 'Abgeschlossen';
$string['completion-y-override'] = 'Abgeschlossen (gesetzt von {$a})';
$string['completion_automatic'] = 'Abschluss, wenn alle Bedingungen erfüllt sind';
$string['completion_help'] = 'Wenn diese Option aktiviert ist, wird der Aktivitätsabschluss nachverfolgt, entweder manuell oder automatisch. Falls gewünscht, können mehrere Bedingungen festgelegt werden. In diesem Fall gilt die Aktivität erst dann als abgeschlossen, wenn alle Bedingungen erfüllt sind.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Abschluss wird manuell markiert';
$string['completion_none'] = 'Aktivitätsabschluss wird nicht angezeigt';
$string['completionactivitydefault'] = 'Aktivitätseinstellungen benutzen';
$string['completiondefault'] = 'Abschlussverfolgung-Standardwert';
$string['completiondisabled'] = 'Deaktiviert';
$string['completionduration'] = 'Einschreibung';
$string['completionenabled'] = 'Aktiviert';
$string['completionexpected'] = 'Abschlusstermin';
$string['completionexpected_help'] = 'Diese Einstellung gibt den Zeitpunkt an, an dem die Aktivität abgeschlossen werden soll. Wenn das Datum herannaht, wird die Aktivität im Zeitleistenblock im Dashboard aufgeführt.';
$string['completionexpecteddesc'] = 'Abschluss erwartet bis {$a}';
$string['completionexpectedfor'] = 'Abschluss erwartet für {$a->instancename}';
$string['completionicons'] = 'Markierung zur Fortschrittsanzeige';
$string['completionicons_help'] = 'Das Kästchen an der Seite neben der Aktivität zeigt an, ob Sie die Aktivität abgeschlossen haben.

Falls ein Kästchen mit gepunktetem Rand zu sehen ist, wird darin automatisch ein Häkchen erscheinen, sobald Sie die Aktivität entsprechend den Trainer/innenvorgaben abgeschlossen haben.

Falls ein Kästchen mit durchgezogenem Rand zu sehen ist, können Sie es anklicken, wenn diese Aktivität Ihrer Meinung nach abgeschlossen ist. (Ein erneuter Klick entfernt das Häkchen wieder, falls Sie Ihre Meinung nachträglich ändern sollten.)';
$string['completionmenuitem'] = 'Abschluss';
$string['completionnotenabled'] = 'Abschluss ist nicht aktiviert';
$string['completionnotenabledforcourse'] = 'Abschluss ist für diesen Kurs nicht aktiviert';
$string['completionnotenabledforsite'] = 'Abschluss ist für diese Website nicht aktiviert';
$string['completionondate'] = 'Datum';
$string['completionondatevalue'] = 'Datum, wann der Kurs als abgeschlossen markiert wird';
$string['completionpassgrade'] = 'Bestehensnote erforderlich';
$string['completionpassgrade_desc'] = 'Teilnehmer/in muss eine Bestehensnote erhalten, um diese Aktivität abzuschließen';
$string['completionpassgrade_help'] = 'Wenn diese Option aktiviert ist, gilt die Aktivität als bestanden, wenn Teilnehmer/innen die Bestehensnote erreichen.';
$string['completionsettingslocked'] = 'Abschlusseinstellungen gesperrt';
$string['completionupdated'] = 'Aktualisierter Abschluss für Aktivität <b>{$a}</b>';
$string['completionusegrade'] = 'Bewertung notwendig';
$string['completionusegrade_desc'] = 'Teilnehmer/innen müssen eine Bewertung erhalten, um diese Aktivität abzuschließen';
$string['completionusegrade_help'] = 'Wenn diese Option aktiviert ist, gilt die Aktivität als abgeschlossen, sobald eine Bewertung vorliegt. Icons für die erfolgreiche bzw. erfolglose Bearbeitung können angezeigt werden, wenn dafür eine Bestehensgrenze festgelegt wurde.';
$string['completionview'] = 'Ansicht notwendig';
$string['completionview_desc'] = 'Teilnehmer/innen müssen die Aktivität aufgerufen haben, um sie abzuschließen.';
$string['configcompletiondefault'] = 'Standardwert für die Abschlussverfolgung beim Erstellen neuer Aktivitäten.';
$string['configenablecompletion'] = 'Wenn diese Option aktiviert ist, können Bedingungen für den Kurs- und Aktivitätsabschluss festgelegt werden. Abschlussbedingungen für die Aktivitäten werden empfohlen, um Nutzer/innen in deren Kursübersicht im Dashboard aussagekräftige Daten anzuzeigen.';
$string['confirmselfcompletion'] = 'Vollständigen Abschluss des Kurses bestätigen';
$string['courseaggregation'] = 'Bedingung erfordert';
$string['courseaggregation_all'] = 'Alle ausgewählten Kurse müssen beendet werden';
$string['courseaggregation_any'] = 'Mind. ein ausgewählter Kurs muss beendet werden';
$string['coursealreadycompleted'] = 'Haben Sie diesen Kurs bereits abgeschlossen?';
$string['coursecomplete'] = 'Kurs abschließen';
$string['coursecompleted'] = 'Kurs abgeschlossen';
$string['coursecompletedmessage'] = '<p>Herzlichen Glückwunsch!</p><p>Sie haben den Kurs <a href="{$a->courselink}">{$a->coursename}</a> abgeschlossen.</p>';
$string['coursecompletion'] = 'Kursabschluss';
$string['coursecompletioncondition'] = 'Bedingung: {$a}';
$string['coursecompletionnavigation'] = 'Kursabschluss tertiäre Navigation';
$string['coursegrade'] = 'Kursbewertung';
$string['coursesavailable'] = 'Kurse verfügbar';
$string['coursesavailableexplaination'] = 'Bemerkung: Abschlussbedingungen für den Kurs müssen festgelegt sein, damit ein Kurs in dieser Liste erscheint.';
$string['criteria'] = 'Kriterien';
$string['criteriagroup'] = 'Kriteriengruppe';
$string['criteriarequiredall'] = 'Alle folgenden Kriterien sind notwendig';
$string['criteriarequiredany'] = 'Eines der folgenden Kriterien ist notwendig';
$string['csvdownload'] = 'Als Tabelle (utf-8 .csv) herunterladen';
$string['datepassed'] = 'Zeitpunkt vorbei';
$string['days'] = 'Tage';
$string['daysoftotal'] = '{$a->days} von {$a->total}';
$string['daysuntilcompletion'] = 'Tage bis zum Abschluss';
$string['defaultcompletion'] = 'Standard-Aktivitätsabschluss';
$string['defaultcompletionupdated'] = 'Änderungen gespeichert';
$string['deletecompletiondata'] = 'Abschlussdaten löschen';
$string['dependencies'] = 'Abhängigkeiten';
$string['dependenciescompleted'] = 'Abschluss von anderen Kursen';
$string['detail_desc:receivegrade'] = 'Eine Bewertung erhalten';
$string['detail_desc:receivepassgrade'] = 'Bestehensnote erreichen';
$string['detail_desc:view'] = 'Anzeigen';
$string['done'] = 'Erledigt';
$string['editcoursecompletionsettings'] = 'Abschlusseinstellungen für den Kurs bearbeiten';
$string['enablecompletion'] = 'Abschlussverfolgung aktivieren';
$string['enablecompletion_help'] = 'Wenn diese Option aktiviert ist, können Bedingungen für Aktivitätsabschlüsse und für den Kursabschluss gesetzt werden.';
$string['enrolmentduration'] = 'Einschreibedauer';
$string['enrolmentdurationlength'] = 'Nutzer/in muss eingeschrieben bleiben';
$string['err_noactivities'] = 'Abschlussinformationen sind nicht für jede Aktivität eingeschaltet, daher können keine angezeigt werden. Sie können die Abschlussinformationen einschalten, indem Sie die Einstellungen einer Aktivität bearbeiten.';
$string['err_nocourses'] = 'Der Kursabschluss ist für keinen anderen Kurs aktiviert. Deshalb wird kein Kurs zur Auswahl angezeigt. Sie können den Kursabschluss in den Kurseinstellungen aktivieren.';
$string['err_nograde'] = 'Eine Bestehensgrenze wurde für diesen Kurs nicht angegeben. Um diesen Kriteriumstyp zu aktivieren, müssen Sie eine Bestehensgrenze für den Kurs angeben, mit welcher er als \'erfolgreich\' gewertet werden soll.';
$string['err_noroles'] = 'Keine der Rollen im Kurs hat die Fähigkeit \'moodle/course:markcomplete\'.';
$string['err_nousers'] = 'In diesem Kurs oder in dieser Gruppe gibt es keine Teilnehmer/innen, für die Abschlussinformationen angezeigt werden. (Abschlussinformationen werden ausschließlich für Teilnehmer/innen mit der Fähigkeit \'In Abschlussverfolgung anzeigen\' angezeigt. Die Fähigkeit ist nur für die Standardrolle Teilnehmer/in erlaubt. Wenn es also keine gibt, so sehen Sie diese Fehlermeldung. Administrator/innen können diese Einstellung im Administrationsmenü ändern.)';
$string['err_settingslocked'] = 'Die Einstellungen wurde gesperrt, weil bereits jemand ein Abschlusskriterium erfüllt hat. Das Entsperren der Einstellungen löscht die Nutzerabschlussdaten und könnte Verwirrung stiften.';
$string['err_system'] = 'Ein interner Fehler ist im Abschluss-System aufgetreten. (Systemadministrator/innen können den Debug-Modus aktivieren um weitere Details angezeigt zu bekommen.)';
$string['eventcoursecompleted'] = 'Kurs beendet';
$string['eventcoursecompletionupdated'] = 'Kursabschluss aktualisiert';
$string['eventcoursemodulecompletionupdated'] = 'Abschluss für Aktivität aktualisiert';
$string['eventdefaultcompletionupdated'] = 'Standard für Kursaktivitätsabschluss aktualisiert';
$string['excelcsvdownload'] = 'Als Excel-Datei (.csv) herunterladen';
$string['failed'] = 'Nicht bestanden';
$string['fraction'] = 'Bruchteil';
$string['graderequired'] = 'Wertung erforderlich';
$string['gradexrequired'] = '{$a} erforderlich';
$string['hiddenrules'] = 'Einige für <b>{$a}</b> spezifische Einstellungen wurden verborgen. Zum Anzeigen wählen Sie andere Aktivitäten ab.';
$string['inprogress'] = 'In Bearbeitung';
$string['manual'] = 'Manuell';
$string['manualcompletionby'] = 'Manueller Abschluss durch andere';
$string['manualcompletionbynote'] = 'Hinweis: Die Berechtigung moodle/course:markcomplete muss für eine Rolle erlaubt sein, damit sie in der Liste erscheint.';
$string['manualselfcompletion'] = 'Manueller eigener Abschluss';
$string['manualselfcompletionnote'] = 'Hinweis: Der Kursabschluss-Block sollte im Kurs eingefügt werden, wenn den Teilnehmer/innen erlaubt werden soll, selber den Kurs anzuschließen.';
$string['markcomplete'] = 'Abgeschlossen markieren';
$string['markedcompleteby'] = 'Abgeschlossen markiert von {$a}';
$string['markingyourselfcomplete'] = 'Selbst abgeschlossen markiert';
$string['modifybulkactions'] = 'Ändern Sie die Aktionen, die Sie gesammelt bearbeiten möchten';
$string['moredetails'] = 'Weitere Details';
$string['nocriteriaset'] = 'Kein Abschlusskriterium für diesen Kurs vorhanden';
$string['nogradeitem'] = 'Die Option \'Bewertung erforderlich\' kann für <b>{$a}</b> nicht aktiviert werden, weil die Aktivität nicht bewertet wird.';
$string['notcompleted'] = 'Nicht abgeschlossen';
$string['notenroled'] = 'Sie sind nicht in diesen Kurs eingeschrieben';
$string['nottracked'] = 'Aktuell läuft für Sie in diesem Kurs keine Abschlussverfolgung';
$string['notyetstarted'] = 'Noch nicht begonnen';
$string['overallaggregation'] = 'Abschlussbedingungen';
$string['overallaggregation_all'] = 'Kurs ist beendet, wenn alle Bedingungen zutreffen';
$string['overallaggregation_any'] = 'Kurs ist beendet, wenn mind. eine Bedingung zutrifft';
$string['pending'] = 'Unerledigt';
$string['periodpostenrolment'] = 'Zeit nach der Einschreibung';
$string['privacy:metadata:completionstate'] = 'Wann das Kursmodul abgeschlossen wurde';
$string['privacy:metadata:course'] = 'Kurs-ID';
$string['privacy:metadata:coursecompletedsummary'] = 'Enthält Informationen über Teilnehmer/innen, die Kursabschlusskriterien erlangt haben';
$string['privacy:metadata:coursemoduleid'] = 'ID für Aktivität';
$string['privacy:metadata:coursemodulesummary'] = 'Speichert Aktivitätsabschlussdaten für eine Person';
$string['privacy:metadata:coursesummary'] = 'Speichert Kursabschlussdaten für Nutzer';
$string['privacy:metadata:gradefinal'] = 'Erreichte Endbewertung für Kursabschluss';
$string['privacy:metadata:overrideby'] = 'ID der Person, die den Aktivitätsabschluss überschrieben hat';
$string['privacy:metadata:reaggregate'] = 'Ob der Kursabschluss neu ermittelt wurde';
$string['privacy:metadata:timecompleted'] = 'Zeitpunkt des Kursabschlusses';
$string['privacy:metadata:timecreated'] = 'Zeit, zu der der Aktivitätsabschluss erstellt wurde';
$string['privacy:metadata:timeenrolled'] = 'Zeit, bei der die Person im Kurs eingeschrieben wurde';
$string['privacy:metadata:timemodified'] = 'Zeitpunkt zu dem der Aktivitätsabschluss geändert wurde';
$string['privacy:metadata:timestarted'] = 'Startzeitpunkt des Kurses';
$string['privacy:metadata:unenroled'] = 'Ob die Person vom Kurs abgemeldet wurde';
$string['privacy:metadata:userid'] = 'ID der Person, für welche die Kurs- und Aktivitätsabschlussdaten gespeichert werden';
$string['privacy:metadata:viewed'] = 'Wann das Kursmodul angesehen wurde';
$string['progress'] = 'Bearbeitungsstand';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Mein Bearbeitungsstand: {$a->complete}/{$a->total}';
$string['recognitionofpriorlearning'] = 'Anerkennung von Vorkenntnissen';
$string['remainingenroledfortime'] = 'Die angegebene Zeitdauer eingeschrieben bleiben';
$string['remainingenroleduntildate'] = 'Bis zum angegebenen Zeitpunkt eingeschrieben bleiben';
$string['reportpage'] = 'Teilnehmer/innen {$a->from} bis {$a->to} von {$a->total} anzeigen';
$string['requiredcriteria'] = 'Notwendiges Kriterium';
$string['resetactivities'] = 'Alle markierte Aktivitäten und Materialien abwählen';
$string['restoringcompletiondata'] = 'Abschlussdaten werden wiederhergestellt';
$string['roleaggregation'] = 'Voraussetzung';
$string['roleaggregation_all'] = 'ALLE gewählten Rollen müssen markieren, um den Kurs abzuschließen';
$string['roleaggregation_any'] = 'JEDE der gewählten Rollen kann den Kurs als abgeschlossen markieren';
$string['roleidnotfound'] = 'Rollen-ID {$a} wurde nicht gefunden';
$string['saved'] = 'Gespeichert';
$string['seedetails'] = 'Details ansehen';
$string['select'] = 'Auswählen';
$string['self'] = 'Selbst';
$string['selfcompletion'] = 'Eigener Abschluss';
$string['showcompletionconditions'] = 'Abschlussbedingungen anzeigen';
$string['showcompletionconditions_help'] = 'Die Abschlussbedingungen werden auf der Kursseite angezeigt.';
$string['showinguser'] = 'Nutzeranzeige';
$string['timecompleted'] = 'Zeit abgeschlossen';
$string['todo'] = 'Zu erledigen';
$string['unenrolingfromcourse'] = 'Vom Kurs abmelden';
$string['unenrolment'] = 'Abmeldung';
$string['unit'] = 'Abschnitt';
$string['unlockcompletion'] = 'Abschlusseinstellungen freigeben';
$string['unlockcompletiondelete'] = 'Abschlusseinstellungen freigeben und alle Fortschrittsdaten löschen';
$string['updateactivities'] = 'Abschlussstatus der markierten Aktivitäten aktualisieren';
$string['usealternateselector'] = 'Alternative Kursauswahl benutzen';
$string['usernotenroled'] = 'Nutzer/in ist nicht in diesem Kurs eingeschrieben';
$string['viewcoursereport'] = 'Kursbericht ansehen';
$string['viewingactivity'] = '{$a} ansehen';
$string['withconditions'] = 'Mit Bedingungen';
$string['writingcompletiondata'] = 'Abschlussdaten schreiben';
$string['xdays'] = '{$a} Tage';
$string['yourprogress'] = 'Fortschritte';
