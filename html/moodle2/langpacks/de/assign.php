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
 * Strings for component 'assign', language 'de', branch 'MOODLE_32_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Sie haben Aufgaben, die Ihre Bearbeitung erfordern.';
$string['addattempt'] = 'Einen weiteren Versuch zulassen';
$string['addnewattempt'] = 'Neuen Versuch hinzufügen';
$string['addnewattemptfromprevious'] = 'Neuen Versuch auf Grundlage der vorherigen Lösung abgeben';
$string['addnewattemptfromprevious_help'] = 'Hiermit kopieren Sie den Inhalt Ihrer vorherigen Einreichungen, um eine neue Einreichung zu erstellen.';
$string['addnewattempt_help'] = 'Dies erzeugt eine neue leere Lösung, in der Sie arbeiten können.';
$string['addnewgroupoverride'] = 'Verfügbarkeitsänderungen für Gruppen anlegen';
$string['addnewuseroverride'] = 'Verfügbarkeitsänderung für Nutzer anlegen';
$string['addsubmission'] = 'Abgabe hinzufügen';
$string['allocatedmarker'] = 'Zugeordnete/r Bewerter/in';
$string['allocatedmarker_help'] = 'Bewerter/in, der/die dieser Abgabe zugeordnet ist';
$string['allowsubmissions'] = 'Nutzer/innen erlauben, für diese Aufgabe weiter Lösungen abzugeben';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Die Aufgabendetails und die Lösungsabgabe stehen zur Verfügung ab <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Abgabebeginn';
$string['allowsubmissionsfromdate_help'] = 'Wenn diese Option aktiviert ist, können Lösungen nicht vor diesem Zeitpunkt abgegeben werden. Wenn diese Option deaktiviert ist, ist die Abgabe sofort möglich.';
$string['allowsubmissionsfromdatesummary'] = 'Abgabe möglich ab <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Abgabeänderung erlauben';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer/innen nur während des Abgabezeitraums angezeigt.';
$string['applytoteam'] = 'Bewertungen und Feedback der gesamten Gruppe zuweisen.';
$string['assign:addinstance'] = 'Aufgabe hinzufügen';
$string['assign:editothersubmission'] = 'Weitere Teilnehmerlösung bearbeiten';
$string['assign:exportownsubmission'] = 'Eigene Abgabe exportieren';
$string['assignfeedback'] = 'Feedback Plugin';
$string['assignfeedbackpluginname'] = 'Feedback Plugin';
$string['assign:grade'] = 'Aufgabe bewerten';
$string['assign:grantextension'] = 'Erweiterung zulassen';
$string['assign:manageallocations'] = 'Bewerter/innen verwalten, die dieser Abgabe zugeordnet sind';
$string['assign:managegrades'] = 'Bewertungen überprüfen und veröffentlichen';
$string['assign:manageoverrides'] = 'Verfügbarkeitsänderungen für Aufgaben verwalten';
$string['assignmentisdue'] = 'Das Abgabeende ist vorbei';
$string['assignmentmail'] = '{$a->grader} hat Ihnen ein Feedback zur Ihrer Aufgabenlösung für  \'{$a->assignment}\' bereitgestellt. Mit dem folgenden Link können Sie direkt darauf zugreifen: {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} hat Ihnen ein Feedback zur Ihrer Aufgabenlösung für \'<i>{$a->assignment}</i>\' bereitgestellt.</p> <p>Mit dem folgenden Link können Sie direkt darauf zugreifen: <a href="{$a->url}">Link zu Ihrer Lösung und zum Feedback</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} hat Ihnen ein Feedback zur Ihrer Aufgabenlösung für  \'{$a->assignment}\' bereitgestellt. Mit dem folgenden Link können Sie direkt darauf zugreifen: {$a->url}';
$string['assignmentname'] = 'Name der Aufgabe';
$string['assignmentplugins'] = 'Aufgabentypen';
$string['assignmentsperpage'] = 'Aufgaben pro Seite';
$string['assign:receivegradernotifications'] = 'Mitteilungen zur Bewertungsabgabe empfangen';
$string['assign:releasegrades'] = 'Bewertung veröffentlichen';
$string['assign:revealidentities'] = 'Teilnehmeridentität anzeigen';
$string['assign:reviewgrades'] = 'Bewertungen prüfen';
$string['assignsubmission'] = 'Abgabetyp';
$string['assignsubmissionpluginname'] = 'Abgabetyp';
$string['assign:submit'] = 'Aufgabe abgeben';
$string['assign:view'] = 'Aufgabe ansehen';
$string['assign:viewblinddetails'] = 'Teilnehmeridentität anzeigen, obwohl anonyme Bewertung eingeschaltet ist';
$string['assign:viewgrades'] = 'Bewertungen anzeigen';
$string['attemptheading'] = 'Versuch {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Vorherige Versuche';
$string['attemptnumber'] = 'Nummer des Versuchs';
$string['attemptreopenmethod'] = 'Versuche erneut bearbeitbar';
$string['attemptreopenmethod_help'] = 'Die Option legt fest, ob Teilnehmer/innen die eingereichten Versuche erneut zum Bearbeiten öffnen dürfen. Mögliche Optionen sind: <ul><li>Nie - Die Lösung kann nicht erneut bearbeitet werden.</li><li>Manuell - Ein/e Trainer/in kann das erneute Bearbeiten zulassen.</li><li>Automatisch bis zum Bestehen - Die Lösung kann solange bearbeitet werden, bis die Voraussetzung zum Bestehen erfüllt sind (Eintrag in Bewertungen - Kategorien und Aspekte).</li></ul>';
$string['attemptreopenmethod_manual'] = 'Manuell';
$string['attemptreopenmethod_none'] = 'Nie';
$string['attemptreopenmethod_untilpass'] = 'Automatisch bis zum Bestehen';
$string['attemptsettings'] = 'Einstellungen für Versuche';
$string['availability'] = 'Verfügbarkeit';
$string['backtoassignment'] = 'Zurück zur Aufgabe';
$string['batchoperationconfirmaddattempt'] = 'Einen weiteren Versuch für ausgewählte Lösungen erlauben?';
$string['batchoperationconfirmdownloadselected'] = 'Ausgewählte Abgaben herunterladen?';
$string['batchoperationconfirmgrantextension'] = 'Abgabeende für die ausgewählten Abgaben verlängern?';
$string['batchoperationconfirmlock'] = 'Ausgewählte Abgaben sperren?';
$string['batchoperationconfirmreverttodraft'] = 'Ausgewählte Abgaben in den Entwurfsmodus zurücksetzen?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Bewerter-Zuordnung für alle ausgewählten Einreichungen setzen?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Bewertungsworkflow-Status für alle ausgewählten Einreichungen setzen?';
$string['batchoperationconfirmunlock'] = 'Ausgewählte Abgaben freigeben?';
$string['batchoperationlock'] = 'Abgaben sperren';
$string['batchoperationreverttodraft'] = 'Abgaben in den Entwurfsmodus zurücksetzen';
$string['batchoperationsdescription'] = 'Mit Auswahl...';
$string['batchoperationunlock'] = 'Abgaben freigeben';
$string['batchsetallocatedmarker'] = 'Bewerter für {$a} ausgewählte Nutzer festlegen.';
$string['batchsetmarkingworkflowstateforusers'] = 'Bewertungsworkflow-Status für {$a} ausgewählte Nutzer festlegen.';
$string['blindmarking'] = 'Anonyme Bewertung';
$string['blindmarkingenabledwarning'] = 'Anonyme Bewertungen sind für diese Aktivität aktiviert.';
$string['blindmarking_help'] = 'Die anonyme Bewertung verbirgt die Teilnehmeridentität während der Bewertung. Die Option kann nicht mehr geändert werden, nachdem die erste Lösung eingereicht oder Bewertung vorgenommen wurde.';
$string['changefilters'] = 'Filter wechseln';
$string['changegradewarning'] = 'In dieser Aufgabe sind bereits Lösungen bewertet worden. Bei einer Änderung der Bewertungsskala sind Neuberechnungen der Bewertungen erforderlich. Sie müssen ggfs. die Neuberechnung gesondert starten.';
$string['changeuser'] = 'Nutzer/in wechseln';
$string['choosegradingaction'] = 'Bewertungsvorgang';
$string['choosemarker'] = 'Auswählen...';
$string['chooseoperation'] = 'Operation wählen';
$string['clickexpandreviewpanel'] = 'Klicken, um die Überprüfungsansicht aufzuklappen';
$string['collapsegradepanel'] = 'Bewertungsansicht einklappen';
$string['collapsereviewpanel'] = 'Überprüfungsansicht einklappen';
$string['comment'] = 'Kommentar';
$string['completionsubmit'] = 'Teilnehmer/in muss Lösung eingereicht haben, um Aktivität abzuschließen';
$string['configshowrecentsubmissions'] = 'Alle können Mitteilungen zur Aufgabenabgabe im Aktivitätenbericht sehen';
$string['confirmbatchgradingoperation'] = 'Möchten Sie für {$a->count} Nutzer/innen die Operation {$a->operation} ausführen?';
$string['confirmsubmission'] = 'Wenn Sie nun Ihre Lösung zur Bewertung einreichen, können Sie keine Änderungen mehr vornehmen. Sind Sie sich sicher?';
$string['conversionexception'] = 'Die Aufgabe konnte nicht konvertiert werden. {$a}';
$string['couldnotconvertgrade'] = 'Die Aufgabenbewertung für \'{$a}\' konnte nicht konvertiert werden.';
$string['couldnotconvertsubmission'] = 'Die Aufgabenabgabe für \'{$a}\' konnte nicht konvertiert werden.';
$string['couldnotcreatecoursemodule'] = 'Das Kursmodul konnte nicht angelegt werden.';
$string['couldnotcreatenewassignmentinstance'] = 'Die neue Aufgabeninstanz konnte nicht angelegt werden.';
$string['couldnotfindassignmenttoupgrade'] = 'Die alte Aufgabeninstanz konnte nicht gefunden werden, um sie zu aktualisieren.';
$string['currentattempt'] = 'Dies ist Versuch {$a}';
$string['currentattemptof'] = 'Versuch {$a->attemptnumber} (mögliche Versuche {$a->maxattempts})';
$string['currentgrade'] = 'Aktuelle Bewertung';
$string['cutoffdate'] = 'Letzte Abgabemöglichkeit';
$string['cutoffdatecolon'] = 'Letzte Abgabemöglichkeit: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Die letzte Abgabemöglichkeit muss nach dem Abgabebeginn liegen.';
$string['cutoffdate_help'] = 'Diese Funktion sperrt die Abgabe von Lösungen ab diesem Termin, sofern keine individuellen Verlängerungen zugelassen wurden.';
$string['cutoffdatevalidation'] = 'Die letzte Abgabemöglichkeit kann nicht vor dem Fälligkeitsdatum liegen.';
$string['defaultlayout'] = 'Standardlayout wiederherstellen';
$string['defaultsettings'] = 'Standardmäßige Voreinstellungen';
$string['defaultsettings_help'] = 'Diese Einstellungen legen Vorgaben für alle neuen Aufgaben fest.';
$string['defaultteam'] = 'Standard-Gruppe';
$string['deleteallsubmissions'] = 'Alle Abgaben löschen';
$string['description'] = 'Beschreibung';
$string['disabled'] = 'Deaktiviert';
$string['downloadall'] = 'Alle Abgaben herunterladen';
$string['downloadasfolders'] = 'Als separate Ordner runterladen';
$string['downloadasfolders_help'] = 'Wenn mehr als eine Datei als Lösung abgegeben wurde, werden diese in getrennte Ordner zum Download gelegt. Bei Aktivierung werden die heruntergeladenen Dateien in separate Ordnern platziert und Dateien werden nicht umbenannt.';
$string['downloadselectedsubmissions'] = 'Ausgewählte Abgaben herunterladen';
$string['duedate'] = 'Fälligkeitsdatum';
$string['duedatecolon'] = 'Fälligkeitsdatum: {$a}';
$string['duedate_help'] = 'Zum Abgabeende wird die Aufgabe fällig. Spätere Abgaben sind weiterhin erlaubt, nachdem das Abgabeende überschritten ist, werden dann aber als verspätet markiert. Um eine Abgabe nach einem bestimmten Verspätungsdatum zu verhindern, kann ein verlängertes Abgabedatum gesetzt werden.';
$string['duedateno'] = 'Kein Fälligkeitsdatum';
$string['duedatereached'] = 'Das Fälligkeitsdatum für diese Aufgabe ist vorbei.';
$string['duedatevalidation'] = 'Das Fälligkeitsdatum muss später als der Abgabebeginn sein.';
$string['duplicateoverride'] = 'Überschreibung duplizieren';
$string['editaction'] = 'Aktivitäten...';
$string['editattemptfeedback'] = 'Bewertung und Feedback für Versuch {$a} bearbeiten';
$string['editingpreviousfeedbackwarning'] = 'Sie bearbeiten das Feedback für einen vorherigen Versuch. Dies ist Versuch {$a->attemptnumber} von {$a->totalattempts}.';
$string['editingstatus'] = 'Bearbeitungsstatus';
$string['editoverride'] = 'Überschreibung bearbeiten';
$string['editsubmission'] = 'Lösung bearbeiten';
$string['editsubmission_help'] = 'Lösung ändern';
$string['editsubmissionother'] = 'Abgabe bearbeiten für {$a}';
$string['enabled'] = 'Aktiviert';
$string['errornosubmissions'] = 'Keine Abgaben zum Herunterladen verfügbar';
$string['errorquickgradingvsadvancedgrading'] = 'Die Aufgabe verwendet das erweiterte Bewertungsschema. Daher werden diese Bewertungen nun nicht abgespeichert.';
$string['errorrecordmodified'] = 'Bevor Sie die Seite aufgerufen haben, hat jemand anders einen oder mehrere Daten geändert. Deswegen können Ihre Einträge nun nicht gesichert werden.';
$string['eventallsubmissionsdownloaded'] = 'Alle abgegebenen Lösungen wurden heruntergeladen.';
$string['eventassessablesubmitted'] = 'Eine Lösung wurde abgegeben.';
$string['eventbatchsetmarkerallocationviewed'] = 'Bewerter-Zuordnung angezeigt';
$string['eventbatchsetworkflowstateviewed'] = 'Bewertungsworkflow-Batch angezeigt';
$string['eventextensiongranted'] = 'Eine Verlängerung wurde gewährt.';
$string['eventfeedbackupdated'] = 'Feedback aktualisiert';
$string['eventfeedbackviewed'] = 'Feedback angezeigt';
$string['eventgradingformviewed'] = 'Bewertungsformular angezeigt';
$string['eventgradingtableviewed'] = 'Bewertungstabelle angezeigt';
$string['eventidentitiesrevealed'] = 'Die Identitäten wurden aufgedeckt.';
$string['eventmarkerupdated'] = 'Zugewiesene/r Bewerter/in wurde aktualisiert.';
$string['eventoverridecreated'] = 'Verfügbarkeitsänderung für Aufgaben angelegt';
$string['eventoverridedeleted'] = 'Verfügbarkeitsänderungen für Aufgaben gelöscht';
$string['eventoverrideupdated'] = 'Verfügbarkeitsänderungen für Aufgaben bearbeitet';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Identität der Bewerter wurde sichtbar gemacht';
$string['eventstatementaccepted'] = 'Nutzer/in hat die Abgabebedingung bestätigt.';
$string['eventsubmissionconfirmationformviewed'] = 'Abgabebestätigungsformular angesehen';
$string['eventsubmissioncreated'] = 'Abgabe angelegt';
$string['eventsubmissionduplicated'] = 'Die Lösung wurde von Nutzer/in dupliziert';
$string['eventsubmissionformviewed'] = 'Abgabeformular angezeigt';
$string['eventsubmissiongraded'] = 'Die Lösung wurde bewertet.';
$string['eventsubmissionlocked'] = 'Die Abgabe wurde für Nutzer/in gesperrt.';
$string['eventsubmissionstatusupdated'] = 'Der Abgabestatus wurde aktualisiert.';
$string['eventsubmissionstatusviewed'] = 'Abgabestaus angezeigt';
$string['eventsubmissionunlocked'] = 'Die Abgabe wurde für Nutzer/in freigeschaltet.';
$string['eventsubmissionupdated'] = 'Nutzer/in hat Lösung gesichert.';
$string['eventsubmissionviewed'] = 'Abgabe angezeigt';
$string['eventworkflowstateupdated'] = 'Der Workflow-Status wurde aktualisiert.';
$string['expandreviewpanel'] = 'Überprüfungsansicht ausklappen';
$string['extensionduedate'] = 'Verlängerung des Fälligkeitsdatums';
$string['extensionnotafterduedate'] = 'Das verlängerte Fälligkeitsdatum muss nach dem (normalen) Fälligkeitsdatum liegen.';
$string['extensionnotafterfromdate'] = 'Das verlängerte Abgabeende muss nach dem Abgabebeginn liegen.';
$string['feedback'] = 'Feedback';
$string['feedbackavailablehtml'] = '{$a->username} hat Ihnen ein Feedback zu Ihrer Abgabe für \'<i>{$a->assignment}</i>\' bereitgestellt.<br /><br /> Mit dem folgenden Link können Sie direkt darauf zugreifen: <a href="{$a->url}">Link zu Ihrer Lösung und zum Feedback</a>.';
$string['feedbackavailablesmall'] = '{$a->username} hat Ihnen für Ihre Lösung bei \'{$a->assignment}\' ein Feedback gegeben.';
$string['feedbackavailabletext'] = '{$a->username} hat Ihnen ein Feedback zu Ihrer Abgabe für \'{$a->assignment}\' bereitgestellt. Mit dem folgenden Link können Sie direkt darauf zugreifen: {$a->url}';
$string['feedbackplugin'] = 'Feedback Plugin';
$string['feedbackpluginforgradebook'] = 'Plugin zur Übertragung von Feedback in den Bewertungsbereich';
$string['feedbackpluginforgradebook_help'] = 'Nur eine Bewertung kann in den Bewertungsbereich des Kurses übertragen werden.';
$string['feedbackplugins'] = 'Feedback Plugins';
$string['feedbacksettings'] = 'Feedback';
$string['feedbacktypes'] = 'Feedback-Typen';
$string['filesubmissions'] = 'Dateiabgaben';
$string['filter'] = 'Filter';
$string['filternone'] = 'Kein Filter';
$string['filternotsubmitted'] = 'Nicht abgegeben';
$string['filterrequiregrading'] = 'Bewertung notwendig';
$string['filtersubmitted'] = 'Abgegeben';
$string['gradeabovemaximum'] = 'Bewertung muss kleiner oder gleich {$a} sein.';
$string['gradebelowzero'] = 'Bewertung muss größer oder gleich Null sein.';
$string['gradecanbechanged'] = 'Bewertung kann geändert werden';
$string['gradechangessaveddetail'] = 'Die Änderungen für Bewertung und Feedback wurden gesichert.';
$string['graded'] = 'Bewertet';
$string['gradedby'] = 'Bewertet von';
$string['gradedon'] = 'Bewertet am';
$string['gradelocked'] = 'Diese Bewertung ist gesperrt oder wurde im Bewertungsbereich überschrieben.';
$string['gradeoutof'] = 'Bewertung (max. {$a})';
$string['gradeoutofhelp'] = 'Bewertung';
$string['gradeoutofhelp_help'] = 'Geben Sie hier die Bewertung für die Aufgabenlösung ein. Es können Dezimalwerte eingetragen werden.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} hat die Aufgabe <i>\'{$a->assignment}\'</i> bearbeitet und am {$a->timeupdated} hochgeladen. <br /><br />
Die Abgabe ist <br /><a href="{$a->url}">auf der Website verfügbar</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} hat die eingereichte Lösung zur Aufgabe \'{$a->assignment}\' neu bearbeitet.';
$string['gradersubmissionupdatedtext'] = '{$a->username} hat die Aufgabe \'{$a->assignment}\' bearbeitet und am {$a->timeupdated} hochgeladen.

Die Abgabe ist auf der Website verfügbar
{$a->url}';
$string['gradestudent'] = 'Bewertung für Teilnehmer/in: (id={$a->id}, Name={$a->fullname}).';
$string['gradeuser'] = 'Bewertung {$a}';
$string['grading'] = 'Wird bewertet';
$string['gradingchangessaved'] = 'Die geänderten Bewertungen wurden gespeichert.';
$string['gradingmethodpreview'] = 'Bewertungskriterium';
$string['gradingoptions'] = 'Optionen';
$string['gradingstatus'] = 'Bewertungsstatus';
$string['gradingstudent'] = 'Person wird bewertet';
$string['gradingsummary'] = 'Bewertungsüberblick';
$string['grantextension'] = 'Verlängerung zulassen';
$string['grantextensionforusers'] = 'Verlängerung für {$a} Teillnehmer/innen zulassen';
$string['groupoverrides'] = 'Verfügbarkeitsänderung für Gruppen';
$string['groupoverridesdeleted'] = 'Verfügbarkeitsänderungen für Gruppen gelöscht';
$string['groupsnone'] = 'In diesem Kurs gibt es keine Gruppe.';
$string['groupsubmissionsettings'] = 'Einstellungen für Gruppeneinreichungen';
$string['hiddenuser'] = 'Teilnehmer/in';
$string['hideshow'] = 'Verbergen/Anzeigen';
$string['inactiveoverridehelp'] = '* Der Schüler hat nicht die korrekte Gruppe oder Rolle um die Aufgabe zu versuchen';
$string['instructionfiles'] = 'Anleitungsdateien';
$string['introattachments'] = 'Zusätzliche Dateien';
$string['introattachments_help'] = 'Zusätzliche Dateien bei der Benutzung der Aktivität Aufgabe können hinzugefügt werden, z.B. Antwortvorlagen.';
$string['invalidfloatforgrade'] = 'Die eingegebene Bewertung \'{$a}\' scheint nicht korrekt zu sein. Bitte prüfen Sie die Eingabe.';
$string['invalidgradeforscale'] = 'Die eingegebene Bewertung ist bei der gewählten Bewertungsskala nicht vorgesehen.';
$string['invalidoverrideid'] = 'Ungültige Überschreibungs-ID';
$string['lastmodifiedgrade'] = 'Zuletzt geändert (Bewertung)';
$string['lastmodifiedsubmission'] = 'Zuletzt geändert (Abgabe)';
$string['latesubmissions'] = 'Verspätete Abgaben';
$string['latesubmissionsaccepted'] = 'Erlaubt bis {$a}';
$string['loading'] = 'Laden...';
$string['locksubmissionforstudent'] = 'Weitere Abgaben verhindern von {$a->fullname} (id={$a->id})';
$string['locksubmissions'] = 'Abgabe sperren';
$string['manageassignfeedbackplugins'] = 'Überblick über Feedback';
$string['manageassignsubmissionplugins'] = 'Überblick über Abgabe';
$string['marker'] = 'Bewerter/in';
$string['markerfilter'] = 'Bewerter/in filtern';
$string['markerfilternomarker'] = 'Kein/e Bewerter/in';
$string['markingallocation'] = 'Bewerter-Zuordnung verwenden';
$string['markingallocation_help'] = 'Nach der Aktivierung können einzelnen Nutzer/innen Bewerter zugewiesen werden. Dazu muss der Bewertungsablaufstatus aktiviert worden sein.';
$string['markingworkflow'] = 'Bewertungsworkflow verwenden';
$string['markingworkflow_help'] = 'Nach der Aktivierung werden für Bewertungen mehrere Schritte durchlaufen bevor Teilnehmende sie sehen. Damit können mehrere Bewertungsdurchläufe erfolgen bevor alle Bewertungen zugleich den Teilnehmenden sichtbar gemacht werden.';
$string['markingworkflowstate'] = 'Status des Bewertungsworkflows';
$string['markingworkflowstate_help'] = 'Die Liste der Workflowstatus, die Sie auswählen können, wird durch die Berechtigungungen in der Aufgabe festgelegt. Es gibt folgende Status:

* Nicht bewertet - Der/die Bewerter/in hat noch nicht begonnen
* In Bewertung - Die Bewertung hat begonnen, ist jedoch noch nicht abgeschlossen
* Bewertung vorläufig abgeschlossen - Der Bewerter hat die Bewertung vorgenommen, jedoch noch nicht freigegeben
* In der Zweitbewertung - Die Bewertung wird nun von Zweitbewertern (Trainer) durchgesehen
* Fertig für Veröffentlichung - Der/die Trainer/in hat die abschließende Bewertung vorgenommen, wartet jedoch mit der Veröffentlichung
* Veröffentlicht - Teilnehmer/innen sehen ihre Bewertungen und das Feedback';
$string['markingworkflowstateinmarking'] = 'In Bewertung';
$string['markingworkflowstateinreview'] = 'Wird überprüft';
$string['markingworkflowstatenotmarked'] = 'Unbewertet';
$string['markingworkflowstatereadyforrelease'] = 'Fertig zur Freigabe';
$string['markingworkflowstatereadyforreview'] = 'Bewertung abgeschlossen';
$string['markingworkflowstatereleased'] = 'Freigegeben';
$string['maxattempts'] = 'Maximal mögliche Versuche';
$string['maxattempts_help'] = 'Maximale Anzahl von Abgabeversuchen. Nach dieser Anzahl von Versuchen können Teilnehmer/innen ihre Abgabe nicht mehr neu öffnen oder ändern.';
$string['maxgrade'] = 'Bestwertung';
$string['maxperpage'] = 'Maximale Aufgaben pro Seite';
$string['maxperpage_help'] = 'Die Höchstzahl von Aufgaben, die ein Bewerter in der Bewertungsübersicht sehen kann. Nützlich zur Vermeidung von Timeout-Effekten bei Kursen mit sehr großen Nutzerzahlen.';
$string['messageprovider:assign_notification'] = 'Mitteilung zur Aufgabe';
$string['modulename'] = 'Aufgabe';
$string['modulename_help'] = 'Stellen Sie für die Teilnehmer/innen Ihres Kurses Aufgaben bereit, die diese online oder offline bearbeiten. Die Lösung kann online als Texteingabe oder Dateiabgabe erfolgen. Geben Sie konstruktiv Feedback und bewerten Sie die Lösung.

Bewertungsmöglichkeiten:
- mit vorgegebener oder selbst erstellter Bewertungsskala
- durch Text-Feedback
- mit Dateianhang (z.B. Musterlösung oder korrigierte Lösung)
- Bewertung mit mehreren Kriterien.';
$string['modulenameplural'] = 'Aufgaben';
$string['moreusers'] = 'Weitere {$a}...';
$string['multipleteams'] = 'Mitglied in mehreren Gruppen';
$string['multipleteamsgrader'] = 'Mitglied in mehreren Gruppen. Die Abgabe von Aufgaben ist nicht möglich.';
$string['mysubmission'] = 'Meine Lösung:&nbsp;';
$string['newsubmissions'] = 'Aufgaben abgegeben';
$string['noattempt'] = 'Kein Versuch';
$string['noclose'] = 'Kein Enddatum';
$string['nofiles'] = 'Keine Dateien.';
$string['nofilters'] = 'Keine Filter';
$string['nograde'] = 'Keine Bewertung.';
$string['nolatesubmissions'] = 'Spätere Abgaben sind nicht zugelassen.';
$string['nomoresubmissionsaccepted'] = 'Weitere Abgaben sind nur zugelassen wenn der Abgabezeitraum verlängert wurde.';
$string['none'] = 'Kein';
$string['noonlinesubmissions'] = 'Diese Aufgabe benötigt keine Online-Abgabe';
$string['noopen'] = 'Kein Startdatum';
$string['nooverridedata'] = 'Sie müssen mindestens eine Aufgabeneinstellung überschreiben.';
$string['nosavebutnext'] = 'Weiter';
$string['nosubmission'] = 'Für diese Aufgabe wurde nichts abgegeben';
$string['nosubmissionsacceptedafter'] = 'Weitere Abgaben sind nicht zugelassen nach';
$string['noteam'] = 'Nicht Mitglied einer Gruppe';
$string['noteamgrader'] = 'Nicht Mitglied einer Gruppe. Die Abgabe von Aufgaben ist nicht möglich.';
$string['notgraded'] = 'Nicht bewertet';
$string['notgradedyet'] = 'Noch nicht bewertet';
$string['notifications'] = 'Mitteilungen';
$string['notsubmittedyet'] = 'Noch nichts abgegeben';
$string['nousers'] = 'Keine Nutzer/innen';
$string['nousersselected'] = 'Niemand ausgewählt';
$string['numberofdraftsubmissions'] = 'Entwürfe';
$string['numberofparticipants'] = 'Teilnehmer/innen';
$string['numberofsubmissionsneedgrading'] = 'Bewertung erwartet';
$string['numberofsubmittedassignments'] = 'Abgegeben';
$string['numberofteams'] = 'Gruppen';
$string['offline'] = 'Keine Online-Abgabe notwendig';
$string['open'] = 'Offen';
$string['outlinegrade'] = 'Bewertung: {$a}';
$string['outof'] = '{$a->current} von {$a->total}';
$string['overdue'] = '<font color="red">Abgabeende überschritten seit: {$a}</font>';
$string['override'] = 'Überschreiben';
$string['overridedeletegroupsure'] = 'Möchten Sie wirklich die Überschreibung für die Gruppe {$a} löschen?';
$string['overridedeleteusersure'] = 'Möchten Sie wirklich die Überschreibung für Nutzer/in {$a} löschen?';
$string['overridegroup'] = 'Gruppe überschreiben';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Überschreibungen';
$string['overrideuser'] = 'Nutzer/in überschreiben';
$string['overrideusereventname'] = '{$a->assign} - Überschreibung';
$string['page-mod-assign-view'] = 'Aufgabenhauptseite';
$string['page-mod-assign-x'] = 'Jede Aufgabenseite';
$string['paramtimeremaining'] = 'Verbleibend: {$a}';
$string['participant'] = 'Teilnehmer/in';
$string['pluginadministration'] = 'Aufgaben-Administration';
$string['pluginname'] = 'Aufgabe';
$string['preventsubmissionnotingroup'] = 'Gruppe notwendig, um etwas abgeben zu können';
$string['preventsubmissionnotingroup_help'] = 'Diese Option legt fest, dass ausschließlich Mitglieder in Gruppen etwas abgeben können.';
$string['preventsubmissions'] = 'Verhindert die Abgabe von Lösungen für diese Aufgabe durch Teilnehmer/innen';
$string['preventsubmissionsshort'] = 'Abgabeänderung verhindern';
$string['previous'] = 'Zurück';
$string['quickgrading'] = 'Schnellbewertung';
$string['quickgradingchangessaved'] = 'Die Änderungen in der Bewertung wurden gespeichert';
$string['quickgrading_help'] = 'Die Schnellbewertung ermöglicht Ihnen direkt in der Übersichtstabelle Bewertungen vorzunehmen. Diese Möglichkeit steht nicht bei erweiterten Bewertungsmethoden zur Verfügung.';
$string['quickgradingresult'] = 'Schnellbewertung';
$string['recordid'] = 'ID';
$string['removeallgroupoverrides'] = 'Alle Verfügbarkeitsänderungen für Gruppen löschen';
$string['removealluseroverrides'] = 'Alle Verfügbarkeitsänderungen für Nutzer löschen';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Die Option \'Lösungen erneut bearbeitbar\'  ist mit der anonymen Bewertung nicht kompatibel, da die Bewertungen erst in den Bewertungsbereich übertragen werden, wenn die Identitäten der Teilnehmer/innen aufgedeckt werden.';
$string['requireallteammemberssubmit'] = 'Erfordert eine Abgabebestätigung durch alle Gruppenmitglieder';
$string['requireallteammemberssubmit_help'] = 'Wenn die Option aktiviert ist, müssen alle Gruppenmitglieder die eingereichte Lösung bestätigen, bevor eine Abgabe als abgegeben markiert wird.';
$string['requiresubmissionstatement'] = 'Erklärung zur Eigenständigkeit muss bestätigt werden';
$string['requiresubmissionstatement_help'] = 'Teilnehmer/innen müssen die Erklärung zur Eigenständigkeit bei Lösungen für diese Aufgabe abgeben.';
$string['revealidentities'] = 'Identität der Teilnehmenden aufdecken';
$string['revealidentitiesconfirm'] = 'Möchten Sie wirklich die Teilnehmeridentität für diese Aufgabe aufgedeckten? Die Einstellung kann nicht zurückgesetzt werden. Sobald die Teilnehmeridentität aufgedeckt ist, werden die Bewertungen in der Bewertungsübersicht angezeigt.';
$string['reverttodefaults'] = 'Aufgabeneinstellungen zurücksetzen';
$string['reverttodraft'] = 'Abgabe in den Entwurfsmodus zurücksetzen';
$string['reverttodraftforstudent'] = 'Den Status der Lösung auf Entwurf zurücksetzen für (id={$a->id}, fullname={$a->fullname}). Danach ist eine Bearbeitung wieder möglich.';
$string['reverttodraftshort'] = 'Abgabe in den Entwurfsmodus zurücksetzen';
$string['reviewed'] = 'Nachgeprüft';
$string['save'] = 'Speichern';
$string['saveallquickgradingchanges'] = 'Bewertungsänderungen sichern';
$string['saveandcontinue'] = 'Sichern und weiter';
$string['savechanges'] = 'Änderungen sichern';
$string['savegradingresult'] = 'Bewertung';
$string['savenext'] = 'Sichern und weiter';
$string['saveoverrideandstay'] = 'Speichern und weitere Überschreibung anlegen';
$string['savingchanges'] = 'Änderungen sichern...';
$string['scale'] = 'Skala';
$string['search:activity'] = 'Aufgabe - Aktivitätsinformation';
$string['selectedusers'] = 'Ausgewählte Nutzer/innen';
$string['selectlink'] = 'Auswählen...';
$string['selectuser'] = '{$a} auswählen';
$string['sendlatenotifications'] = 'Bewerter/innen über verspätete Abgaben von Lösungen informieren.';
$string['sendlatenotifications_help'] = 'Mit der Aktivierung werden die Bewerter (meist die Trainer/innen) benachrichtigt wenn eine Lösung verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendnotifications'] = 'Mitteilungen an bewertende Personen senden';
$string['sendnotifications_help'] = 'Mit der Aktivierung werden die Bewerter (meist die Trainer/innen) benachrichtigt wenn eine Lösung zeitgerecht oder verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendstudentnotifications'] = 'Teilnehmer/innen benachrichtigen';
$string['sendstudentnotificationsdefault'] = 'Standardeinstellung für Teilnehmer&shy;benachrichtigung';
$string['sendstudentnotificationsdefault_help'] = 'Den Standardwert für Auswahlfeld "Teilnehmer/innen benachrichtigen"  im Bewertungsformular festlegen.';
$string['sendstudentnotifications_help'] = 'Wenn aktiviert erhalten Teilnehmer/innen eine Benachrichtigung über aktualisierte Bewertungen oder Feedbacks.';
$string['sendsubmissionreceipts'] = 'Abgabebestätigung an Teilnehmer/innen versenden';
$string['sendsubmissionreceipts_help'] = 'Diese Option aktiviert Bestätigungen, die bei der Abgabe von Aufgabenlösungen an die Teilnehmer/innen versandt werden.';
$string['setmarkerallocationforlog'] = 'Bewertungszuordnung gesetzt auf: (id={$a->id}, Name={$a->fullname}, Bewerter={$a->marker}).';
$string['setmarkingallocation'] = 'Zugewiesene Bewerter/innen festlegen';
$string['setmarkingworkflowstate'] = 'Bewertungsworkflowstatus festlegen';
$string['setmarkingworkflowstateforlog'] = 'Bewertungsworkflow-Status gesetzt: (id={$a->id}, Name={$a->fullname}, Status={$a->state}).';
$string['settings'] = 'Einstellungen';
$string['showrecentsubmissions'] = 'Neue Abgaben anzeigen';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'Der Status für den Ablauf muss \'freigegeben\' sein, um Teilnehmer/innen zu benachrichtigen.';
$string['submission'] = 'Abgabe';
$string['submissioncopiedhtml'] = '<p>Sie haben eine Kopie der früheren Lösung für die Aufgabe \'<i>{$a->assignment} erstellt</i>\'</p><p>.
Sehen sehen hier den Status  <a href="{$a->url}"> für Ihre Aufgabenlösung</a>.</p>';
$string['submissioncopiedsmall'] = 'Sie haben Ihre bisherige Aufgabenlösung für {$a->assignment} kopiert.';
$string['submissioncopiedtext'] = 'Sie haben Ihre bisherige Aufgabenlösung für {$a->assignment} kopiert.

Sie können den Status der Aufgabenlösung sehen unter
    {$a->url}';
$string['submissiondrafts'] = 'Abgabetaste muss gedrückt werden';
$string['submissiondrafts_help'] = 'Diese Option ermöglicht es Teilnehmer/innen, die Lösung zu einer Aufgabe zunächst als Entwurf zu hinterlegen und sie später noch einmal zu überarbeiten. Erst mit der Bestätigung der Lösung als abgeschlossen werden die Trainer/innen aufgefordert, die Lösung zu bewerten.';
$string['submissioneditable'] = 'Teilnehmer/innen können eingereichte Lösung bearbeiten';
$string['submissionempty'] = 'Es wurde nichts eingereicht.';
$string['submissionlog'] = 'Teilnehmer/in: {$a->fullname}, Status: {$a->status}';
$string['submissionmodified'] = 'Sie haben bestehende Abgabedaten. Verlassen Sie die Seite und versuchen Sie es noch einmal.';
$string['submissionmodifiedgroup'] = 'Die Abgabe wurde von jemand anderem verändert. Verlassen Sie die Seite und versuchen Sie es noch einmal.';
$string['submissionnotcopiedinvalidstatus'] = 'Die Abgabe wurde nicht kopiert, weil sie seit dem Öffnen verändert wurde.';
$string['submissionnoteditable'] = 'Teilnehmer/innen können eingereichte Lösung nicht bearbeiten';
$string['submissionnotready'] = 'Diese Aufgabe ist nicht zur Abgabe fertig';
$string['submissionplugins'] = 'Plugins zur Abgabe';
$string['submissionreceipthtml'] = '<p>Sie haben eine Lösung zur Aufgabe \'<i>{$a->assignment}</i>\' abgegeben.</p><p> Den Bewertungsstatus für die Aufgabe können Sie <a href="{$a->url}">hier</a> einsehen.</p>';
$string['submissionreceiptotherhtml'] = 'Ihre Aufgabenlösung für \'{$a->assignment}\' wurde übermittelt.
<br /><br />
Sie können den Status <a href="{$a->url}">Ihrer Aufgabenlösung</a> sehen.';
$string['submissionreceiptothersmall'] = 'Ihre Aufgabenlösung für \'{$a->assignment}\' wurde übermittelt.';
$string['submissionreceiptothertext'] = 'Ihre Aufgabenlösung für \'{$a->assignment}\' wurde übermittelt.

Sie können den Status Ihrer Aufgabenlösung sehen unter {$a->url}';
$string['submissionreceipts'] = 'Abgabebestätigungen versenden';
$string['submissionreceiptsmall'] = 'Sie haben eine Lösung für {$a->assignment} abgegeben.';
$string['submissionreceipttext'] = 'Sie haben eine Lösung für \'{$a->assignment}\' abgegeben.

Sie können den Bewertungsstatus für die Aufgabe dort einsehen:

   {$a->url}';
$string['submissions'] = 'Abgegebene Aufgaben';
$string['submissionsclosed'] = 'Abgabe beendet';
$string['submissionsettings'] = 'Abgabeeinstellungen';
$string['submissionslocked'] = 'Bei dieser Aufgabe können derzeit keine Lösungen abgeben werden.';
$string['submissionslockedshort'] = 'Abgabeänderungen sind nicht erlaubt';
$string['submissionsnotgraded'] = 'Nicht bewertete Abgaben: {$a}';
$string['submissionstatement'] = 'Erklärung zur Eigenständigkeit';
$string['submissionstatementacceptedlog'] = 'Erklärung zur Eigenständigkeit wurde akzeptiert von {$a}';
$string['submissionstatementdefault'] = 'Diese Arbeit ist meine persönliche Leistung. Sofern ich irgendwo fremde Quellen verwendet habe, sind diese Stellen entsprechend gekennzeichnet.';
$string['submissionstatement_help'] = 'Erklärung zur Eigenständigkeit';
$string['submissionstatus'] = 'Abgabestatus';
$string['submissionstatus_'] = 'Keine Abgabe';
$string['submissionstatus_draft'] = 'Entwurf (nicht abgegeben)';
$string['submissionstatusheading'] = 'Abgabestatus';
$string['submissionstatus_marked'] = 'Bewertet';
$string['submissionstatus_new'] = 'Keine Abgabe';
$string['submissionstatus_reopened'] = 'Erneut geöffnet';
$string['submissionstatus_submitted'] = 'Zur Bewertung abgegeben';
$string['submissionsummary'] = '{$a->status}. Letzte Änderung {$a->timemodified}';
$string['submissionteam'] = 'Gruppe';
$string['submissiontypes'] = 'Abgabetypen';
$string['submitaction'] = 'Abgeben';
$string['submitassignment'] = 'Aufgabe abgeben';
$string['submitassignment_help'] = 'Sobald diese Aufgabe abgegeben wird, sind keine weiteren Änderungen mehr möglich';
$string['submitforgrading'] = 'Zur Bewertung abgeben';
$string['submitted'] = 'Abgegeben';
$string['submittedearly'] = 'Aufgabe wurde {$a} vor dem Abgabeende abgegeben';
$string['submittedlate'] = 'Aufgabe wurde {$a} verspätet abgegeben';
$string['submittedlateshort'] = '{$a} später';
$string['subplugintype_assignfeedback'] = 'Feedback Plugin';
$string['subplugintype_assignfeedback_plural'] = 'Feedback Plugins';
$string['subplugintype_assignsubmission'] = 'Abgabe Plugin';
$string['subplugintype_assignsubmission_plural'] = 'Abgabe Plugins';
$string['teamname'] = 'Team: {$a}';
$string['teamsubmission'] = 'Teilnehmer/innen geben in Gruppen ab';
$string['teamsubmissiongroupingid'] = 'Berücksichtigte Gruppierung';
$string['teamsubmissiongroupingid_help'] = 'Gruppen, die zu der gewählten Gruppierung gehören, werden zur Bearbeitung der Aufgabe genutzt. Wird keine Gruppierung ausgewählt, werden alle vorhandenen Gruppen verwendet.';
$string['teamsubmission_help'] = 'Mit der Aktivierung werden die Teilnehmer/innen in ihren Gruppen der Aufgabe zugeordnet. Eine Gruppenlösung steht allen Gruppenmitgliedern zur Verfügung. Änderungen können von allen eingesehen werden.';
$string['textinstructions'] = 'Aufgabenstellung';
$string['timemodified'] = 'Zuletzt geändert';
$string['timeremaining'] = 'Verbleibende Zeit';
$string['timeremainingcolon'] = 'Verbleibende Zeit: {$a}';
$string['togglezoom'] = 'Bereich zoomen';
$string['ungroupedusers'] = 'Die Option \'Gruppe notwendig, um etwas abgeben zu können\' ist aktiviert. Es gibt Personen ohne Gruppe oder Personen mit mehreren Gruppen, die deshalb nichts abgeben können.';
$string['unlimitedattempts'] = 'Unbegrenzt';
$string['unlimitedattemptsallowed'] = 'Unbegrenzte Versuche erlaubt';
$string['unlimitedpages'] = 'Unbegrenzt';
$string['unlocksubmissionforstudent'] = 'Abgabe für Teilnehmer/in erlauben: (id={$a->id}, Name={$a->fullname})';
$string['unlocksubmissions'] = 'Abgabe freigeben';
$string['unsavedchanges'] = 'Ungesicherte Änderungen';
$string['unsavedchangesquestion'] = 'Die Änderungen für Bewertung und Feedback sind noch nicht gesichert. Möchten Sie diese Änderungen sichern und fortfahren?';
$string['updategrade'] = 'Bewertung aktualisieren';
$string['updatetable'] = 'Sichern und Tabelle aktualisieren';
$string['upgradenotimplemented'] = 'Upgrade nicht implementiert für Plugin ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Verlängertes Abgabeende bis: {$a}';
$string['usergrade'] = 'Nutzerbewertung';
$string['useridlistnotcached'] = 'Abbruch des Speichervorgangs. Moodle konnte nicht erkennen für welchen Nutzer die Bewertung gespeichert werden soll.';
$string['useroverrides'] = 'Verfügbarkeitsänderung für Nutzer';
$string['useroverridesdeleted'] = 'Verfügbarkeitsänderungen für Nutzer gelöscht';
$string['usersnone'] = 'Kein/e Teilnehmer/in hat Zugriff auf diese Aufgabe.';
$string['userswhoneedtosubmit'] = 'Nutzer/innen, die noch nicht abgegeben haben: {$a}';
$string['validmarkingworkflowstates'] = 'Gültige Status für Bewertungsworkflow';
$string['viewadifferentattempt'] = 'Anderen Versuch anzeigen';
$string['viewbatchmarkingallocation'] = 'Stapelverarbeitung für Bewerterzuordnung anzeigen.';
$string['viewbatchsetmarkingworkflowstate'] = 'Stapelverarbeitung für Bewertungsworkflow angesehen';
$string['viewfeedback'] = 'Feedback anzeigen';
$string['viewfeedbackforuser'] = 'Feedback anzeigen für: {$a}';
$string['viewfull'] = 'Vollständige Anzeige';
$string['viewfullgradingpage'] = 'Die komplette Bewertungsseite öffnen, um ein Feedback zu erstellen.';
$string['viewgradebook'] = 'Bewertungen anzeigen';
$string['viewgrading'] = 'Alle Abgaben anzeigen';
$string['viewgradingformforstudent'] = 'Bewertungsseite für Teilnehmer/in: (id={$a->id}, fullname={$a->fullname}) anzeigen.';
$string['viewownsubmissionform'] = 'Seite mit meinen eigenen Lösungen für Aufgaben anzeigen.';
$string['viewownsubmissionstatus'] = 'Eigene Statusseite zur Abgabe anzeigen';
$string['viewrevealidentitiesconfirm'] = 'Bestätigungsseite mit Teilnehmernamen anzeigen';
$string['viewsubmission'] = 'Abgabe anzeigen';
$string['viewsubmissionforuser'] = 'Abgabe von {$a} anzeigen';
$string['viewsubmissiongradingtable'] = 'Bewertungsübersicht zur Abgabe anzeigen';
$string['viewsummary'] = 'Zusammenfassung anzeigen';
$string['workflowfilter'] = 'Workflow-Filter';
$string['xofy'] = '{$a->x} von {$a->y}';
