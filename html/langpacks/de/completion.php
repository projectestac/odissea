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
 * Strings for component 'completion', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Erreichen der Bewertung';
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
$string['affectedactivities'] = 'Die Änderungen betreffen die folgenden <b>{$a}</b> Aktivitäten:';
$string['aggregationmethod'] = 'Methode zur Zusammenfassung';
$string['all'] = 'Alle';
$string['any'] = 'Irgendein';
$string['approval'] = 'Freigabe';
$string['areyousureoverridecompletion'] = 'Möchten Sie wirklich den aktuellen Abschlussstatus für diese Aktivität und diese Person überschreiben und mit \'{$a}\' markieren?';
$string['badautocompletion'] = 'Wenn Sie einen automatischen Abschluss wählen, müssen Sie mindestens eine Abschlussbedingung angeben.';
$string['badcompletiongradeitemnumber'] = 'Erforderliche Note kann für <b>{$a}</b> nicht aktiviert werden, da Benotung mit {$a} nicht aktiviert ist.';
$string['bulkactivitycompletion'] = 'Bulk-Bearbeitung von Aktivitätsabschlüssen';
$string['bulkactivitydetail'] = 'Wählen Sie die Aktivitäten, die Sie bearbeiten möchten.';
$string['bulkcompletiontracking'] = 'Abschlussverfolgung';
$string['bulkcompletiontracking_help'] = '<strong>Keine:</strong> Aktivitätenabschluss wird nicht angezeigt

<strong>Manuell:</strong> Teilnehmer können die Aufgabe manuell als abgeschlossen markieren

<strong>Unter Bedingung(en):</strong> Aktivität wird als abgeschlossen angezeigt, wenn die Bedingungen erfüllt sind';
$string['checkactivity'] = 'Kontrollfeld für Aktivität: {$a}';
$string['checkall'] = 'Kontrollfelder für alle Aktivitäten markieren oder löschen';
$string['checkallsection'] = 'Kontrollfelder für alle Aktivitäten im Abschnitt markieren oder löschen: {$a}';
$string['completed'] = 'Abgeschlossen';
$string['completedunlocked'] = 'Abschlussoptionen verfügbar';
$string['completedunlockedtext'] = 'Wenn Sie Ihre Änderungen speichern, wird der Abschlussstatus für alle Nutzer/innen gelöscht. Wenn Sie dies nicht möchten, speichern Sie bitte nicht!';
$string['completedwarning'] = 'Abschlussoptionen gesperrt';
$string['completedwarningtext'] = 'Eine oder mehrere Personen ({$a}) haben diese Aktivität bereits als abgeschlossen markiert.

Die Änderung der Abschlussoptionen löscht alle Daten zum Abschlussstatus und könnte zu Verwirrungen führen. Deswegen wurden die Optionen gesperrt und sollten auch nicht freigegeben werden, außer es ist unbedingt notwendig.';
$string['completion'] = 'Abschlussverfolgung';
$string['completionactivitydefault'] = 'Aktivitätseinstellungen benutzen';
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
$string['completion_automatic'] = 'Abschluss, wenn alle Bedingungen erfüllt sind';
$string['completiondefault'] = 'Abschlussverfolgung-Standardwert';
$string['completiondisabled'] = 'Deaktiviert';
$string['completionduration'] = 'Einschreibung';
$string['completionenabled'] = 'Aktiviert';
$string['completionexpected'] = 'Abschlusstermin';
$string['completionexpecteddesc'] = 'Abschluss erwartet bis {$a}';
$string['completionexpectedfor'] = 'Abschluss erwartet für {$a->instancename}';
$string['completionexpected_help'] = 'Diese Einstellung legt den Zeitpunkt fest, wann für die Aktivität der Bearbeitungsabschluss erwartet wird.';
$string['completion-fail'] = 'Abgeschlossen (Bestehensgrenze nicht erreicht)';
$string['completion_help'] = 'Wenn diese Option aktiviert ist, dann werden die Aktivitätsfortschritte manuell oder automatisch entsprechend den gesetzten Bedingungen protokolliert. Mehrfachbedingungen können gesetzt sein, falls dies gewünscht ist. Ist dies der Fall, so wird eine Aktivität erst dann abgeschlossen, wenn ALLE Bedingungen zutreffen.

Ein Häkchen direkt neben den Aktivitätsnamen signalisiert auf der Kursseite, dass diese Aktivität abgeschlossen ist.';
$string['completionicons'] = 'Markierung zur Fortschrittsanzeige';
$string['completionicons_help'] = 'Das Kästchen an der Seite neben der Aktivität zeigt an, ob Sie die Aktivität abgeschlossen haben.

Falls ein Kästchen mit gepunktetem Rand zu sehen ist, wird darin automatisch ein Häkchen erscheinen, sobald Sie die Aktivität entsprechend den Trainervorgaben abgeschlossen haben.

Falls ein Kästchen mit durchgezogenem Rand zu sehen ist, können Sie es anklicken, wenn diese Aktivität Ihrer Meinung nach abgeschlossen ist. (Ein erneuter Klick entfernt das Häkchen wieder, falls Sie Ihre Meinung nachträglich ändern sollten.)';
$string['completion_manual'] = 'Abschluss wird manuell markiert';
$string['completionmenuitem'] = 'Abschluss';
$string['completion-n'] = 'Nicht abgeschlossen';
$string['completion_none'] = 'Abschluss wird nicht angezeigt';
$string['completionnotenabled'] = 'Abschluss ist nicht aktiviert';
$string['completionnotenabledforcourse'] = 'Abschluss ist für diesen Kurs nicht aktiviert';
$string['completionnotenabledforsite'] = 'Abschluss ist für diese Website nicht aktiviert';
$string['completion-n-override'] = 'Nicht abgeschlossen (gesetzt von {$a})';
$string['completionondate'] = 'Datum';
$string['completionondatevalue'] = 'Datum, wann der Kurs als abgeschlossen markiert wird';
$string['completion-pass'] = 'Abgeschlossen (Bestehensgrenze erreicht)';
$string['completionsettingslocked'] = 'Abschlusseinstellungen gesperrt';
$string['completionupdated'] = 'Aktualisierter Abschluss für Aktivität <b>{$a}</b>';
$string['completionusegrade'] = 'Bewertung notwendig';
$string['completionusegrade_desc'] = 'Teilnehmer/innen müssen eine Bewertung erhalten, um diese Aktivität abzuschließen';
$string['completionusegrade_help'] = 'Wenn diese Option aktiviert ist, wird die Aktivität als abgeschlossen betrachtet, sobald eine Bewertung vorliegt. Icons für die erfolgreiche oder erfolglose Bearbeitung können angezeigt werden, wenn dafür eine Bestehensgrenze festgelegt wurde.';
$string['completionview'] = 'Ansicht notwendig';
$string['completionview_desc'] = 'Teilnehmer/innen müssen die Aktivität aufgerufen haben, um sie abzuschließen';
$string['completion-y'] = 'Abgeschlossen';
$string['completion-y-override'] = 'Abgeschlossen (gesetzt von {$a})';
$string['configcompletiondefault'] = 'Standardwert für die Abschlussverfolgung beim Erstellen neuer Aktivitäten.';
$string['configenablecompletion'] = 'Diese Option legt fest, dass Abschlussbedingungen für den Kurs und für Aktivitäten festgelegen werden können. Abschlussbedingungen für die Aktivitäten werden empfohlen, um Nutzer/innen in deren Kursübersicht im Dashboard aussagekräftige Daten anzuzeigen.';
$string['confirmselfcompletion'] = 'Vollständigen Abschluss des Kurses bestätigen';
$string['courseaggregation'] = 'Bedingung erfordert';
$string['courseaggregation_all'] = 'Alle ausgewählten Kurse müssen beendet werden';
$string['courseaggregation_any'] = 'Mind. ein ausgewählter Kurs muss beendet werden';
$string['coursealreadycompleted'] = 'Haben Sie diesen Kurs bereits abgeschlossen?';
$string['coursecomplete'] = 'Kurs abschließen';
$string['coursecompleted'] = 'Kurs abgeschlossen';
$string['coursecompletion'] = 'Kursabschluss';
$string['coursecompletioncondition'] = 'Bedingung: {$a}';
$string['coursegrade'] = 'Kursbewertung';
$string['coursesavailable'] = 'Kurse verfügbar';
$string['coursesavailableexplaination'] = 'Kursabschlusskriterien müssen festgelegt sein, damit ein Kurs in dieser Liste erscheint.';
$string['criteria'] = 'Kriterien';
$string['criteriagroup'] = 'Kriteriengruppe';
$string['criteriarequiredall'] = 'Alle folgenden Kriterien sind notwendig';
$string['criteriarequiredany'] = 'Eines der folgenden Kriterien ist notwendig';
$string['csvdownload'] = 'Download als Tabelle (.csv, utf-8)';
$string['datepassed'] = 'Zeitpunkt vorbei';
$string['days'] = 'Tage';
$string['daysoftotal'] = '{$a->days} von {$a->total}';
$string['defaultcompletion'] = 'Standardabschluss für Aktivität';
$string['defaultcompletionupdated'] = 'Änderungen gespeichert';
$string['deletecompletiondata'] = 'Abschlussdaten löschen';
$string['dependencies'] = 'Abhängigkeiten';
$string['dependenciescompleted'] = 'Abschluss von anderen Kursen';
$string['editcoursecompletionsettings'] = 'Abschlusseinstellungen bearbeiten';
$string['enablecompletion'] = 'Abschlussverfolgung aktivieren';
$string['enablecompletion_help'] = 'Diese Option legt fest, ob die Einstellung zur Abschlussverfolgung in den Einstellungen der Aktivität und/oder der Übersichtsseite zur Abschlussverfolgung angezeigt wird. Es wird empfohlen diese Einstellung zu verwenden, damit im Dashboard sinnvolle Informationen zum Kursfortschritt angezeigt werden können.';
$string['enrolmentduration'] = 'Tage noch verfügbar';
$string['enrolmentdurationlength'] = 'Nutzer/in muss eingeschrieben bleiben';
$string['err_noactivities'] = 'Die Abschlussinformation ist nicht für jede Aktivität eingeschaltet, daher kann keine angezeigt werden. Sie können die Abschlussinformation einschalten, indem Sie die Einstellungen einer Aktivität bearbeiten.';
$string['err_nocourses'] = 'Die Abschlussverfolgung ist für keinen Kurs aktiviert, so dass kein Kurs angezeigt werden kann. Sie können die Abschlussverfolgung in den Kurseinstellungen aktivieren.';
$string['err_nograde'] = 'Eine Bestehensgrenze wurde für diesen Kurs nicht angegeben. Um diesen Kriteriumstyp zu aktivieren, müssen Sie eine Bestehensgrenze für den Kurs angeben, mit welcher er als \'erfolgreich\' gewertet werden soll.';
$string['err_noroles'] = 'Keine der Rollen im Kurs hat die Fähigkeit \'moodle/course:markcomplete\'.';
$string['err_nousers'] = 'In diesem Kurs oder in dieser Gruppe gibt es keine Teilnehmer/innen, für die Abschlussinformationen angezeigt werden. (Abschlussinformationen  werden ausschließlich für Teilnehmer/innen angezeigt ... wenn es also keine gibt, so sehen Sie diese Fehlermeldung. Administrator/innen können diese Einstellung im Administrationsmenü ändern.)';
$string['err_settingslocked'] = 'Die Einstellung wurde gesperrt, weil bereits jemand ein Abschlusskriterium erfüllt hat. Wenn Sie die Abschlussbedingungen entsperren, werden die vorhandenen Nutzerdaten gelöscht und es könnte zu Verwirrungen kommen.';
$string['err_system'] = 'Ein interner Fehler ist im Abschluss-System aufgetreten. (Systemadministratoren können den Debug-Modus aktivieren um weitere Details angezeigt zu bekommen.)';
$string['eventcoursecompleted'] = 'Kurs beendet';
$string['eventcoursecompletionupdated'] = 'Kursabschluss aktualisiert';
$string['eventcoursemodulecompletionupdated'] = 'Abschluss für Aktivität aktualisiert';
$string['eventdefaultcompletionupdated'] = 'Standard für Kursaktivitätsabschluss aktualisiert';
$string['excelcsvdownload'] = 'Download als Tabelle (.csv)';
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
$string['modifybulkactions'] = 'Ändern Sie die Aktionen, die Sie bearbeiten möchten';
$string['moredetails'] = 'Weitere Details';
$string['nocriteriaset'] = 'Kein Abschlusskriterium für diesen Kurs vorhanden';
$string['nogradeitem'] = 'Die Option \'Bewertung erforderlich\' kann für <b>{$a}</b> nicht aktiviert werden, weil die Aktivität nicht bewertet wird.';
$string['notcompleted'] = 'Nicht abgeschlossen';
$string['notenroled'] = 'Sie sind nicht in diesen Kurs eingeschrieben';
$string['nottracked'] = 'Für Sie läuft aktuell in diesem Kurs keine Abschlussverfolgung';
$string['notyetstarted'] = 'Noch nicht begonnen';
$string['overallaggregation'] = 'Abschlussbedingungen';
$string['overallaggregation_all'] = 'Kurs ist beendet, wenn alle Bedingungen zutreffen';
$string['overallaggregation_any'] = 'Kurs ist beendet, wenn mind. eine Bedingung zutrifft';
$string['pending'] = 'Unerledigt';
$string['periodpostenrolment'] = 'Zeit nach der Einschreibung';
$string['privacy:metadata:completionstate'] = 'Wann das Kursmodul abgeschlossen wurde';
$string['privacy:metadata:course'] = 'Kurs-ID';
$string['privacy:metadata:coursecompletedsummary'] = 'Enthält Informationen über Teilnehmende, die Kursabschlusskriterien erlangt haben';
$string['privacy:metadata:coursemoduleid'] = 'ID für Aktivität';
$string['privacy:metadata:coursemodulesummary'] = 'Speichert Aktivitätsabschlussdaten für Nutzer';
$string['privacy:metadata:coursesummary'] = 'Speichert Kursabschlussdaten für Nutzer';
$string['privacy:metadata:gradefinal'] = 'Erreichte Endbewertung für Kursabschluss';
$string['privacy:metadata:overrideby'] = 'ID der Person, die den Modulabschluss überschrieben hat';
$string['privacy:metadata:reaggregate'] = 'Wenn Kursabschlus neu ermittelt wurde';
$string['privacy:metadata:timecompleted'] = 'Zeitpunkt des Kursabschlusses';
$string['privacy:metadata:timeenrolled'] = 'Zeit, bei der die Person im Kurs eingeschrieben wurde';
$string['privacy:metadata:timemodified'] = 'Zeitpunkt zu dem Kursmodulabschluss geändert wurde';
$string['privacy:metadata:timestarted'] = 'Startzeitpunkt des Kurses';
$string['privacy:metadata:unenroled'] = 'Zeitpunkt, zu dem Einschreibung in Kurs aufgehoben wurde';
$string['privacy:metadata:userid'] = 'ID der Person, für die der Kurs- und Aktivitätsabschluss gespeichert wird';
$string['privacy:metadata:viewed'] = 'Wann das Kursmodul angesehen wurde';
$string['progress'] = 'Bearbeitungsstand';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Mein Bearbeitungsstand: {$a->complete}/{$a->total}';
$string['recognitionofpriorlearning'] = 'Anerkennung von Vorkenntnissen';
$string['remainingenroledfortime'] = ' Für die angegebene Zeitdauer eingeschrieben bleiben';
$string['remainingenroleduntildate'] = 'Bis zum angegebenen Zeitpunkt eingeschrieben bleiben';
$string['reportpage'] = 'Teilnehmer/innen {$a->from} bis {$a->to} von {$a->total} anzeigen';
$string['requiredcriteria'] = 'Notwendiges Kriterium';
$string['resetactivities'] = 'Alle markierte Aktivitäten und Materialien abwählen';
$string['restoringcompletiondata'] = 'Abschlussdaten werden wiederhergestellt';
$string['roleaggregation'] = 'Voraussetzung';
$string['roleaggregation_all'] = 'ALLE gewählten Rollen müssen markieren, um den Kurs abzuschließen';
$string['roleaggregation_any'] = 'JEDE der gewählten Rollen kann den Kurs als abschlossen markieren';
$string['roleidnotfound'] = 'Rollen-ID {$a} wurde nicht gefunden';
$string['saved'] = 'Gesichert';
$string['seedetails'] = 'Details ansehen';
$string['select'] = 'Auswählen';
$string['self'] = 'Selbst';
$string['selfcompletion'] = 'Eigener Abschluss';
$string['showinguser'] = 'Nutzeranzeige';
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
