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
 * Strings for component 'assign', language 'de', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:submissionsdue'] = 'Fällig:';
$string['activitydate:submissionsopen'] = 'Öffnet:';
$string['activitydate:submissionsopened'] = 'Geöffnet:';
$string['activityoverview'] = 'Sie haben Aufgaben, die Ihre Bearbeitung erfordern.';
$string['addattempt'] = 'Weiteren Versuch zulassen';
$string['addnewattempt'] = 'Neuen Versuch hinzufügen';
$string['addnewattempt_help'] = 'Dies erzeugt eine neue leere Lösung, die Sie bearbeiten können.';
$string['addnewattemptfromprevious'] = 'Neuen Versuch basierend auf der vorherigen Lösung abgeben';
$string['addnewattemptfromprevious_help'] = 'Hiermit kopieren Sie den Inhalt Ihrer vorherigen Lösung, um eine neue Lösung zu erstellen.';
$string['addnewgroupoverride'] = 'Gruppenänderung hinzufügen';
$string['addnewuseroverride'] = 'Nutzeränderung hinzufügen';
$string['addsubmission'] = 'Abgabe hinzufügen';
$string['addsubmission_help'] = 'Sie haben bisher keine Lösungen abgegeben.';
$string['allocatedmarker'] = 'Zugeordnete/r Bewerter/in';
$string['allocatedmarker_help'] = 'Bewerter/in, der/die dieser Abgabe zugeordnet ist';
$string['allowsubmissions'] = 'Nutzer/in erlauben, für diese Aufgabe weiter Lösungen abzugeben';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Die Aufgabendetails und die Lösungsabgabe sind verfügbar ab <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Abgabebeginn';
$string['allowsubmissionsfromdate_help'] = 'Wenn diese Option aktiviert ist, können Lösungen nicht vor diesem Zeitpunkt abgegeben werden. Wenn diese Option deaktiviert ist, ist die Abgabe sofort möglich.';
$string['allowsubmissionsfromdatesummary'] = 'Abgabe möglich ab <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Abgabeänderung erlauben';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer/innen nur ab dem Abgabebeginn angezeigt.';
$string['applytoteam'] = 'Bewertungen und Feedback der gesamten Gruppe zuweisen';
$string['assign:addinstance'] = 'Neue Aufgabe hinzufügen';
$string['assign:editothersubmission'] = 'Weitere Teilnehmendenlösung bearbeiten';
$string['assign:exportownsubmission'] = 'Eigene Lösung exportieren';
$string['assign:grade'] = 'Aufgabe bewerten';
$string['assign:grantextension'] = 'Erweiterung zulassen';
$string['assign:manageallocations'] = 'Bewerter/innen verwalten, die dieser Abgabe zugeordnet sind';
$string['assign:managegrades'] = 'Bewertungen überprüfen und veröffentlichen';
$string['assign:manageoverrides'] = 'Verfügbarkeitsänderungen für Aufgaben verwalten';
$string['assign:receivegradernotifications'] = 'Systemnachrichten zur Bewertungsabgabe empfangen';
$string['assign:releasegrades'] = 'Bewertung veröffentlichen';
$string['assign:revealidentities'] = 'Teilnehmendenidentität anzeigen';
$string['assign:reviewgrades'] = 'Bewertungen prüfen';
$string['assign:showhiddengrader'] = 'Identität von verborgener Bewertungsperson sehen';
$string['assign:submit'] = 'Lösung abgeben';
$string['assign:view'] = 'Aufgabe anzeigen';
$string['assign:viewblinddetails'] = 'Teilnehmendenidentität anzeigen, obwohl anonyme Bewertung eingeschaltet ist';
$string['assign:viewgrades'] = 'Bewertungen anzeigen';
$string['assign:viewownsubmissionsummary'] = 'Eigene Abgabezusammenfassung anzeigen';
$string['assignfeedback'] = 'Feedback Plugin';
$string['assignfeedbackpluginname'] = 'Feedback Plugin';
$string['assignmentisdue'] = 'Aufgabe ist fällig';
$string['assignmentmail'] = 'Guten Tag,

{$a->grader} hat Ihnen ein Feedback zur Ihrer Aufgabenlösung für  \'{$a->assignment}\' bereitgestellt.

Mit dem folgenden Link können Sie direkt darauf zugreifen:

{$a->url}

Ihr E-Learning-Team';
$string['assignmentmailhtml'] = 'Guten Tag,

<p>{$a->grader} hat Ihnen ein Feedback zur Ihrer Aufgabenlösung für \'<i>{$a->assignment}</i>\' bereitgestellt.</p> <p>Mit dem folgenden Link können Sie direkt darauf zugreifen: <a href="{$a->url}">Link zu Ihrer Lösung und zum Feedback</a>.</p>

Ihr E-Learning-Team';
$string['assignmentmailsmall'] = 'Guten Tag,

{$a->grader} hat Ihnen ein Feedback zur Ihrer Aufgabenlösung für  \'{$a->assignment}\' bereitgestellt. Mit dem folgenden Link können Sie direkt darauf zugreifen: {$a->url}

Ihr E-Learning-Team';
$string['assignmentname'] = 'Name der Aufgabe';
$string['assignmentplugins'] = 'Aufgabentypen';
$string['assignmentsperpage'] = 'Aufgaben pro Seite';
$string['assignsubmission'] = 'Abgabetyp';
$string['assignsubmissionpluginname'] = 'Abgabetyp';
$string['attemptheading'] = 'Versuch {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Vorherige Versuche';
$string['attemptnumber'] = 'Nummer';
$string['attemptreopenmethod'] = 'Zusätzliche Versuche';
$string['attemptreopenmethod_help'] = 'Die Einstellung legt fest, ob Teilnehmer/innen zusätzliche Versuche bei der Aufgabe unternehmen können. Bei jedem Versuch werden die Note und das Feedback gespeichert und können von Trainer/in und Teilnehmer/in angezeigt werden. Mögliche Optionen sind:

* Nie - Es ist nur ein Versuch möglich.
* Manuell - Zusätzliche Versuche können von Trainer/innen zugelassen werden.
* Automatisch bis zum Bestehen - Zusätzliche Versuche sind automatisch zulässig, bis Teilnehmer/innen die im Notenbuch für diese Aufgabe festgelegte Bestehensnote erreicht haben.';
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
$string['batchoperationconfirmremovesubmission'] = 'Ausgewählte Abgaben entfernen?';
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
$string['blindmarking'] = 'Anonyme Einreichungen';
$string['blindmarking_help'] = 'Die anonyme Einreichung verbirgt die Identität von Teilnehmer/innen während der Bewertung. Die Option kann nicht mehr geändert werden, nachdem die erste Lösung eingereicht oder Bewertung vorgenommen wurde.';
$string['blindmarkingenabledwarning'] = 'Für diese Aktivität sind anonyme Abgaben aktiviert. Punkte werden erst in die Bewertungen übernommen, wenn die Identität der Teilnehmer/innen über das Aktionsmenü für die Benotung bekannt gegeben ist.';
$string['cachedef_overrides'] = 'Infos zu Nutzer- und Gruppenänderungen';
$string['calendardue'] = '{$a} ist fällig.';
$string['calendargradingdue'] = '{$a} ist zur Bewertung fällig.';
$string['changefilters'] = 'Filter wechseln';
$string['changeuser'] = 'Nutzer/in wechseln';
$string['choosegradingaction'] = 'Bewertungsvorgang';
$string['choosemarker'] = 'Auswählen...';
$string['chooseoperation'] = 'Operation wählen';
$string['clickexpandreviewpanel'] = 'Klicken, um die Überprüfungsansicht aufzuklappen';
$string['collapsegradepanel'] = 'Bewertungsansicht einklappen';
$string['collapsereviewpanel'] = 'Überprüfungsansicht einklappen';
$string['comment'] = 'Kommentar';
$string['completiondetail:submit'] = 'Abgabe einreichen';
$string['completionsubmit'] = 'Teilnehmer/in muss eine Abgabe machen';
$string['configshowrecentsubmissions'] = 'Alle können Nachrichten zur Aufgabenabgabe im Aktivitätenbericht sehen';
$string['confirmbatchgradingoperation'] = 'Möchten Sie für {$a->count} Nutzer/innen die Operation {$a->operation} ausführen?';
$string['confirmsubmission'] = 'Wenn Sie Ihre Lösung zur Bewertung abgeben, können Sie nichts mehr verändern. Sind Sie sich sicher?';
$string['confirmsubmissionheading'] = 'Abgabe bestätigen';
$string['conversionexception'] = 'Die Aufgabe konnte nicht konvertiert werden. {$a}';
$string['couldnotconvertgrade'] = 'Die Aufgabenbewertung für \'{$a}\' konnte nicht konvertiert werden.';
$string['couldnotconvertsubmission'] = 'Die Aufgabenabgabe für \'{$a}\' konnte nicht konvertiert werden.';
$string['couldnotcreatecoursemodule'] = 'Das Kursmodul konnte nicht angelegt werden.';
$string['couldnotcreatenewassignmentinstance'] = 'Die neue Aufgabeninstanz konnte nicht angelegt werden.';
$string['couldnotfindassignmenttoupgrade'] = 'Die alte Aufgabeninstanz konnte nicht gefunden werden, um sie zu aktualisieren.';
$string['crontask'] = 'Hintergrundprozess für das Aufgabenmodul';
$string['currentassigngrade'] = 'Aktuelle Bewertung in Aufgabe';
$string['currentattempt'] = 'Dies ist Versuch {$a}.';
$string['currentattemptof'] = 'Versuch {$a->attemptnumber} (möglich {$a->maxattempts})';
$string['currentgrade'] = 'Aktuelle Bewertung im Bewertungsbereich';
$string['cutoffdate'] = 'Letzte Abgabemöglichkeit';
$string['cutoffdate_help'] = 'Diese Funktion sperrt die Abgabe von Lösungen ab diesem Termin, sofern keine individuellen Verlängerungen zugelassen wurden.';
$string['cutoffdatecolon'] = 'Letzte Abgabemöglichkeit: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Der Termin der letzten Abgabemöglichkeit kann nicht früher liegen als der erlaubte Abgabebeginn.';
$string['cutoffdatevalidation'] = 'Der Termin der letzten Abgabemöglichkeit kann nicht früher liegen als das Fälligkeitsdatum.';
$string['defaultlayout'] = 'Standardlayout wiederherstellen';
$string['defaultsettings'] = 'Voreinstellungen';
$string['defaultsettings_help'] = 'Diese Einstellungen legen Vorgaben für alle neuen Aufgaben fest.';
$string['defaultteam'] = 'Standard-Gruppe';
$string['deleteallsubmissions'] = 'Alle Abgaben löschen';
$string['description'] = 'Beschreibung';
$string['disabled'] = 'Deaktiviert';
$string['downloadall'] = 'Alle Abgaben herunterladen';
$string['downloadasfolders'] = 'Abgaben in Verzeichnissen herunterladen';
$string['downloadasfolders_help'] = 'Bei Aktivierung werden die heruntergeladenen Dateien in separaten Ordnern platziert und Dateien werden nicht umbenannt.';
$string['downloadselectedsubmissions'] = 'Ausgewählte Abgaben herunterladen';
$string['duedate'] = 'Fälligkeitsdatum';
$string['duedate_help'] = 'Zum Abgabeende wird die Aufgabe fällig. Spätere Abgaben sind auch danach noch möglich, werden dann aber als verspätet markiert. Um eine Abgabe nach einem bestimmten Datum zu verhindern, kann ein Termin der letzten Abgabemöglichkeit gesetzt werden.';
$string['duedatecolon'] = 'Fälligkeitsdatum: {$a}';
$string['duedateno'] = 'Kein Fälligkeitsdatum';
$string['duedatereached'] = 'Das Fälligkeitsdatum für diese Aufgabe ist vorbei.';
$string['duedatevalidation'] = 'Das Fälligkeitsdatum kann nicht früher liegen als der erlaubte Abgabebeginn.';
$string['duplicateoverride'] = 'Verfügbarkeitsänderung duplizieren';
$string['editaction'] = 'Aktivitäten...';
$string['editattemptfeedback'] = 'Bewertung und Feedback für Versuch {$a} bearbeiten';
$string['editingpreviousfeedbackwarning'] = 'Sie bearbeiten das Feedback für einen vorherigen Versuch. Dies ist Versuch {$a->attemptnumber} von {$a->totalattempts}.';
$string['editingstatus'] = 'Bearbeitungsstatus';
$string['editonline'] = 'Online bearbeiten';
$string['editoverride'] = 'Verfügbarkeitsänderung bearbeiten';
$string['editsubmission'] = 'Abgabe bearbeiten';
$string['editsubmission_help'] = 'Sie können Ihre Abgabe noch verändern.';
$string['editsubmissionother'] = 'Abgabe bearbeiten für {$a}';
$string['enabled'] = 'Aktiviert';
$string['errornosubmissions'] = 'Keine Abgaben zum Herunterladen verfügbar';
$string['errorquickgradingvsadvancedgrading'] = 'Die Aufgabe verwendet das erweiterte Bewertungsschema. Daher werden diese Bewertungen nun nicht abgespeichert.';
$string['errorrecordmodified'] = 'Bevor Sie die Seite aufgerufen haben, hat jemand anders einen oder mehrere Daten geändert. Deswegen können Ihre Einträge nun nicht gespeichert werden.';
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
$string['eventremovesubmissionformviewed'] = 'Bestätigung für \'Abgabe entfernen\' angesehen.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Identität der Bewerter wurde sichtbar gemacht';
$string['eventstatementaccepted'] = 'Nutzer/in hat die Abgabebedingung bestätigt.';
$string['eventsubmissionconfirmationformviewed'] = 'Abgabebestätigungsformular angesehen';
$string['eventsubmissioncreated'] = 'Abgabe angelegt';
$string['eventsubmissionduplicated'] = 'Nutzer/in hat die Lösung dupliziert';
$string['eventsubmissionformviewed'] = 'Abgabeformular angezeigt';
$string['eventsubmissiongraded'] = 'Die Lösung wurde bewertet.';
$string['eventsubmissionlocked'] = 'Die Abgabe wurde für Nutzer/in gesperrt.';
$string['eventsubmissionstatusupdated'] = 'Der Abgabestatus wurde aktualisiert.';
$string['eventsubmissionstatusviewed'] = 'Abgabestatus angezeigt';
$string['eventsubmissionunlocked'] = 'Die Abgabe wurde für Nutzer/in freigeschaltet.';
$string['eventsubmissionupdated'] = 'Nutzer/in hat Lösung gesichert.';
$string['eventsubmissionviewed'] = 'Abgabe angezeigt';
$string['eventworkflowstateupdated'] = 'Der Workflow-Status wurde aktualisiert.';
$string['expandreviewpanel'] = 'Überprüfungsansicht ausklappen';
$string['extensionduedate'] = 'Verlängerung des Fälligkeitsdatums';
$string['extensionnotafterduedate'] = 'Das verlängerte Fälligkeitsdatum muss nach dem (normalen) Fälligkeitsdatum liegen.';
$string['extensionnotafterfromdate'] = 'Das verlängerte Abgabeende muss nach dem Abgabebeginn liegen.';
$string['feedback'] = 'Feedback';
$string['feedbackavailableanonhtml'] = 'Sie haben ein neues Feedback zur Aufgabe \'<i>{$a->assignment}</i>\' erhalten.<br /><br />Das Feedback finden bei Ihrer <a href="{$a->url}">Aufgabenlösung</a>.';
$string['feedbackavailableanonsmall'] = 'Neues Feedback für Aufgabe {$a->assignment}';
$string['feedbackavailableanontext'] = 'Sie haben ein neues Feedback zur Aufgabe \'<i>{$a->assignment}</i>\' erhalten.

Das Feedback finden bei Ihrer Aufgabenlösung:

    {$a->url}';
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
$string['filterdraft'] = 'Entwurf';
$string['filtergrantedextension'] = 'Gewährte Verlängerung';
$string['filternone'] = 'Kein Filter';
$string['filternotsubmitted'] = 'Nicht abgegeben';
$string['filterrequiregrading'] = 'Bewertung notwendig';
$string['filtersubmitted'] = 'Abgegeben';
$string['fixrescalednullgrades'] = 'Die Aufgabe enthält fehlerhafte Bewertungen. Sie können die <a href="{$a->link} ">Bewertungen automatisch beheben</a>. Die Kurssummen könnten dabei beeinflusst werden.';
$string['fixrescalednullgradesconfirm'] = 'Möchten Sie die fehlerhaften Bewertungen automatisch beheben lassen? Alle betroffenen Bewertungen werden entfernt. Die Kurssummen könnten beeinflusst werden.';
$string['fixrescalednullgradesdone'] = 'Bewertungen korrigiert';
$string['gradeabovemaximum'] = 'Bewertung muss kleiner oder gleich {$a} sein.';
$string['gradebelowzero'] = 'Bewertung muss größer oder gleich Null sein.';
$string['gradecanbechanged'] = 'Bewertung kann geändert werden';
$string['gradechangessaveddetail'] = 'Die Änderungen für Bewertung und Feedback wurden gespeichert.';
$string['graded'] = 'Bewertet';
$string['gradedby'] = 'Bewertet von';
$string['gradedfollowupsubmit'] = 'Bewertet - Folgeabgabe empfangen';
$string['gradedon'] = 'Bewertet am';
$string['gradeitem:submissions'] = 'Einreichungen';
$string['gradelocked'] = 'Diese Bewertung ist gesperrt oder wurde im Bewertungsbereich überschrieben.';
$string['gradeoutof'] = 'Bewertung (max. {$a})';
$string['gradeoutofhelp'] = 'Bewertung';
$string['gradeoutofhelp_help'] = 'Geben Sie hier die Bewertung für die Aufgabenlösung ein. Es können Dezimalwerte eingetragen werden.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} hat die Aufgabe <i>\'{$a->assignment}\'</i> bearbeitet und am {$a->timeupdated} hochgeladen. <br /><br />
Die Abgabe ist <a href="{$a->url}">auf der Website verfügbar</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} hat die eingereichte Lösung zur Aufgabe \'{$a->assignment}\' aktualisiert.';
$string['gradersubmissionupdatedtext'] = '{$a->username} hat die Aufgabe \'{$a->assignment}\' bearbeitet und am {$a->timeupdated} hochgeladen.

Die Abgabe ist auf der Website verfügbar
{$a->url}';
$string['gradestudent'] = 'Bewertung für Teilnehmer/in: (id={$a->id}, Name={$a->fullname}).';
$string['gradeuser'] = 'Bewertung {$a}';
$string['grading'] = 'Bewertung';
$string['gradingchangessaved'] = 'Die geänderten Bewertungen wurden gespeichert.';
$string['gradingduedate'] = 'An Bewertung erinnern';
$string['gradingduedate_help'] = 'Dieser voraussichtliche Termin markiert den Abschluss der Abgabe. Das Datum wird verwendet, um Benachrichtigungen für Trainer/innen im Dashboard zu priorisieren.';
$string['gradingdueduedatevalidation'] = 'Der Erinnerungstermin zur Bewertung kann nicht früher liegen als das Fälligkeitsdatum.';
$string['gradingduefromdatevalidation'] = 'Der Erinnerungstermin zur Bewertung kann nicht früher liegen als der erlaubte Abgabebeginn.';
$string['gradingmethodpreview'] = 'Bewertungskriterium';
$string['gradingoptions'] = 'Optionen';
$string['gradingstatus'] = 'Bewertungsstatus';
$string['gradingstudent'] = 'Person wird bewertet';
$string['gradingsummary'] = 'Bewertungsüberblick';
$string['grantextension'] = 'Verlängerung zulassen';
$string['grantextensionforusers'] = 'Verlängerung für {$a} Teilnehmer/innen zulassen';
$string['groupoverrides'] = 'Gruppenänderungen';
$string['groupoverridesdeleted'] = 'Gruppenänderungen gelöscht';
$string['groupsnone'] = 'Keine Gruppe, auf die Sie zugreifen können.';
$string['groupsubmissionsettings'] = 'Einstellungen für Gruppeneinreichungen';
$string['hiddenuser'] = 'Teilnehmer/in';
$string['hidegrader'] = 'Bewerteridentität für Teilnehmer/innen verbergen';
$string['hidegrader_help'] = 'Wenn diese Option aktiviert ist, wird die Identität von Personen verborgen, die eine Aufgabeneinreichung bewerten. Teilnehmer/innen können nicht sehen können, wer ihre Arbeit bewertet.

Beachten Sie, dass diese Einstellung keine Auswirkungen auf das Kommentarfeld auf der Bewertungsseite hat.';
$string['hideshow'] = 'Verbergen/Anzeigen';
$string['inactiveoverridehelp'] = '* Diese Nutzeränderung ist inaktiv, weil kein Zugang zur Aktivität besteht. Das kann aufgrund der Gruppenzugehörigkeit oder Rolle sein, aufgrund anderer Zugriffsbeschränkungen oder weil die Aktivität verborgen ist.';
$string['indicator:cognitivedepth'] = 'Aufgabe kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer Aufgabenaktivität erreicht hat.';
$string['indicator:cognitivedepthdef'] = 'Aufgabe kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Aufgabenaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren, Beiträge nach Feedback überarbeiten).';
$string['indicator:socialbreadth'] = 'Aufgabe sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer Aufgabenaktivität erreicht hat.';
$string['indicator:socialbreadthdef'] = 'Aufgabe sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die Aufgabenaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
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
$string['markingworkflowstate_help'] = 'Die Liste der Workflowstati, die Sie auswählen können, wird durch die Berechtigungungen in der Aufgabe festgelegt. Es gibt folgende Stati:

* Unbewertet: Es wurde noch keine Bewertung begonnen.
* In Bewertung: Die Bewertung wurde begonnen, ist jedoch noch nicht abgeschlossen.
* Bewertung abgeschlossen: Die Bewertung wurde vorgenommen, ist jedoch noch nicht für die Teilnehmer/innen freigegeben.
* In weiterer Überprüfung: Die Bewertung wird im Review-Verfahren von weiteren Trainer/innen durchgesehen.
* Fertig zur Freigabe: Die abschließende Bewertung steht fest, wartet jedoch noch mit der Freigabe für die Teilnehmer/innen.
* Freigegeben: Teilnehmer/innen können ihre Bewertungen sowie das Feedback einsehen und erhalten, sofern dies aktiviert wird,  eine Benachrichtgung per E-Mail.';
$string['markingworkflowstateinmarking'] = 'In Bewertung';
$string['markingworkflowstateinreview'] = 'In weiterer Überprüfung';
$string['markingworkflowstatenotmarked'] = 'Unbewertet';
$string['markingworkflowstatereadyforrelease'] = 'Fertig zur Freigabe';
$string['markingworkflowstatereadyforreview'] = 'Bewertung abgeschlossen';
$string['markingworkflowstatereleased'] = 'Freigegeben';
$string['maxattempts'] = 'Maximal mögliche Versuche';
$string['maxattempts_help'] = 'Maximale Anzahl von Abgabeversuchen. Nach dieser Anzahl von Versuchen können Teilnehmer/innen ihre Abgabe nicht mehr neu öffnen oder ändern.';
$string['maxgrade'] = 'Bestwertung';
$string['maxperpage'] = 'Maximale Aufgaben pro Seite';
$string['maxperpage_help'] = 'Die Höchstzahl von Aufgaben, die in der Bewertungsübersicht angezeigt werden. Diese Einstellung ist sinnvoll zur Vermeidung von Timeout-Effekten bei Kursen mit sehr großen Nutzerzahlen.';
$string['messageprovider:assign_notification'] = 'Systemnachricht zu Aufgaben';
$string['modulename'] = 'Aufgabe';
$string['modulename_help'] = 'Stellen Sie Aufgaben bereit, um Lösungen einzusammeln und Bewertungen und Feedback zu geben.

Teilnehmer/innen können beliebige digitale Inhalte (Dateien) einreichen, wie z.B. Textdokumente, Tabellenkalkulationen, Bilder, Audio- oder Videoclips. Alternativ oder zusätzlich kann die Aufgabe verlangen, Texte direkt in ein Textfeld einzugeben. Sie können mit einer Aufgabe auch daran erinnern, dass die Teilnehmer/innen "reale" Dinge offline erledigen sollen, aber keine digitalen Inhalte erfordern, wie z.B. Kunstwerke oder Sporttraining. Die Teilnehmer/innen können ihre Arbeiten einzeln oder als Mitglied einer Gruppe einreichen.

Die Bewertungsmöglichkeiten umfassen Text-Feedback, Dateianhänge, wie z.B. Musterlösungen, korrigierte Lösungen, Dokumente mit Kommentaren oder gesprochenes Audio-Feedback. Die Aufgaben können mit einer vorgegebenen oder selbst erstellten Bewertungsskala oder mit einer fortgeschrittenen Bewertungsmethode, wie z.B. Rubriken (Bewertungsrastern), benotet werden. Die Endnote wird in den Bewertungen festgehalten.';
$string['modulenameplural'] = 'Aufgaben';
$string['moreusers'] = 'Weitere {$a} ...';
$string['multipleteams'] = 'Mitglied in mehr als einer Gruppe';
$string['multipleteams_desc'] = 'Diese Aufgabe wird in Gruppen abgegeben. Sie sind Mitglied in mehr als einer Gruppe. Um etwas abgeben zu können, dürfen Sie nur Mitglied in einer Gruppe sein. Kontaktieren Sie Ihre Trainer/innen, um Ihre Gruppenzugehörigkeit zu aktualisieren.';
$string['multipleteamsgrader'] = 'Mitglied in mehreren Gruppen. Die Abgabe von Aufgaben ist nicht möglich.';
$string['mysubmission'] = 'Meine Lösung:&nbsp;';
$string['newsubmissions'] = 'Aufgaben abgegeben';
$string['nextuser'] = 'Nächste/r Nutzer/in';
$string['noattempt'] = 'Kein Versuch';
$string['noclose'] = 'Kein Enddatum';
$string['nofiles'] = 'Keine Dateien.';
$string['nofilters'] = 'Keine Filter';
$string['nograde'] = 'Keine Bewertung.';
$string['nolatesubmissions'] = 'Spätere Abgaben sind nicht zugelassen.';
$string['nomoresubmissionsaccepted'] = 'Weitere Abgaben sind nur zugelassen, wenn der Abgabezeitraum verlängert wird.';
$string['none'] = 'Kein';
$string['noonlinesubmissions'] = 'Diese Aufgabe benötigt keine Online-Abgabe';
$string['noopen'] = 'Kein Startdatum';
$string['nooverridedata'] = 'Sie müssen mindestens eine Aufgabeneinstellung überschreiben.';
$string['nosavebutnext'] = 'Weiter';
$string['nosubmission'] = 'Für diese Aufgabe wurde nichts abgegeben';
$string['nosubmissionsacceptedafter'] = 'Weitere Abgaben sind nicht zugelassen nach';
$string['noteam'] = 'Kein Mitglied in einer Gruppe';
$string['noteam_desc'] = 'Diese Aufgabe wird in Gruppen abgegeben. Sie sind kein Mitglied in einer Gruppe und können die Aufgabe deswegen nicht abgeben. Kontaktieren Sie Ihre Trainer/innen, um zu einer Gruppe hinzugefügt zu werden.';
$string['noteamgrader'] = 'Nicht Mitglied einer Gruppe. Die Abgabe von Aufgaben ist nicht möglich.';
$string['notgraded'] = 'Nicht bewertet';
$string['notgradedyet'] = 'Noch nicht bewertet';
$string['notifications'] = 'Systemnachrichten';
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
$string['overdue'] = 'Abgabeende überschritten seit: {$a}';
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
$string['previoususer'] = 'Vorherige/r Nutzer/in';
$string['privacy:attemptpath'] = 'Versuch {$a}';
$string['privacy:blindmarkingidentifier'] = 'Identifier, der für verdeckte Bewertungen genutzt wird';
$string['privacy:gradepath'] = 'Bewertung';
$string['privacy:metadata:assigndownloadasfolders'] = 'Nutzerpräferenz, ob mehrere Dateien in einer  Aufgabenlösung in Ordnern sortiert heruntergeladen werden sollen.';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Feedbackeinträge für die Aufgabe';
$string['privacy:metadata:assignfilter'] = 'Filteroptionen wie \'Eingereicht\', \'Nicht eingereicht\', \'Erfordert Bewertung\' und \'Verlängerung bewilligt\'';
$string['privacy:metadata:assigngrades'] = 'Speichert Bewertungen des Nutzers für die Aufgabe';
$string['privacy:metadata:assignmarkerfilter'] = 'Aufgabenzusammenfassung gefiltert anhand des zugewiesenen Kennzeichens';
$string['privacy:metadata:assignmentid'] = 'Aufgaben-ID';
$string['privacy:metadata:assignmessageexplanation'] = 'Mitteilungen an den Nutzer über das Mitteilungssystem';
$string['privacy:metadata:assignoverrides'] = 'Speichert überschriebene Informationen für die Aufgabe';
$string['privacy:metadata:assignperpage'] = 'Anzahl der Aufgabenlösungen auf einer Seite';
$string['privacy:metadata:assignquickgrading'] = 'Voreinstellung, ob die \'Schnelle Bewertung\' verwendet wird oder nicht';
$string['privacy:metadata:assignsubmissiondetail'] = 'Speichert Informationen zur Lösung des Nutzers';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Lösungsdaten zur Aufgabe';
$string['privacy:metadata:assignuserflags'] = 'Speichert Metadaten des Nutzers wie Verlängerungsdaten';
$string['privacy:metadata:assignusermapping'] = 'Zuodnung für verdeckte Bewertung';
$string['privacy:metadata:assignworkflowfilter'] = 'Filter für verschiedene Workflow-Schritte';
$string['privacy:metadata:grade'] = 'Die Bewertung als Zahl für die Lösung der Aufgabe.  Kann von einer Skala oder mehreren Bewertungskriterien erzeugt sein. Es handelt sich immer um eine Zahl.';
$string['privacy:metadata:grader'] = 'Dies ist die Nutzer ID der bewertenden Person.';
$string['privacy:metadata:groupid'] = 'Dies ist die ID der Gruppe, zu der der Nutzer gehört.';
$string['privacy:metadata:latest'] = 'Stark vereinfachte Abfrage zum letzten Versuch';
$string['privacy:metadata:mailed'] = 'Wurde dem Nutzer bereits eine E-Mail geschickt?';
$string['privacy:metadata:timecreated'] = 'Erstelldatum';
$string['privacy:metadata:userid'] = 'Nutzer-ID';
$string['privacy:studentpath'] = 'Abgaben von Teilnehmenden';
$string['privacy:submissionpath'] = 'Abgabe';
$string['quickgrading'] = 'Schnellbewertung';
$string['quickgrading_help'] = 'Die Schnellbewertung ermöglicht Ihnen direkt in der Übersichtstabelle Bewertungen vorzunehmen. Diese Möglichkeit steht nicht bei erweiterten Bewertungsmethoden zur Verfügung.';
$string['quickgradingchangessaved'] = 'Die Änderungen in der Bewertung wurden gespeichert';
$string['quickgradingresult'] = 'Schnellbewertung';
$string['recordid'] = 'ID';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} nach Kursbeginn';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} vor Kursbeginn';
$string['relativedatessubmissiontimeleft'] = 'Für alle Teilnehmer/innen berechnet';
$string['removeallgroupoverrides'] = 'Alle Gruppenänderungen löschen';
$string['removealluseroverrides'] = 'Alle Nutzeränderungen löschen';
$string['removesubmission'] = 'Lösung entfernen';
$string['removesubmissionconfirm'] = 'Möchten Sie wirklich die Abgabedaten löschen?';
$string['removesubmissionconfirmforstudent'] = 'Möchten Sie wirklich die Abgabedaten von {$a} löschen?';
$string['removesubmissionforstudent'] = 'Abgabe entfernen für Teilnehmer/in: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Die Option \'Lösungen erneut bearbeitbar\'  ist mit der anonymen Bewertung nicht kompatibel, da die Bewertungen erst in den Bewertungsbereich übertragen werden, wenn die Identitäten der Teilnehmer/innen aufgedeckt werden.';
$string['requireallteammemberssubmit'] = 'Erfordert eine Abgabebestätigung durch alle Gruppenmitglieder';
$string['requireallteammemberssubmit_help'] = 'Wenn die Option aktiviert ist, müssen alle Gruppenmitglieder die eingereichte Lösung bestätigen, bevor eine Abgabe als abgegeben markiert wird.';
$string['requiresubmissionstatement'] = 'Erklärung zur Eigenständigkeit muss bestätigt werden';
$string['requiresubmissionstatement_help'] = 'Teilnehmer/innen müssen die Erklärung zur Eigenständigkeit bei Lösungen für diese Aufgabe abgeben.';
$string['revealidentities'] = 'Identität der Teilnehmenden aufdecken';
$string['revealidentitiesconfirm'] = 'Möchten Sie wirklich die Teilnehmendenidentität für diese Aufgabe aufgedeckten? Die Einstellung kann nicht zurückgesetzt werden. Sobald die Teilnehmendenidentität aufgedeckt ist, werden die Bewertungen in der Bewertungsübersicht angezeigt.';
$string['reverttodefaults'] = 'Aufgabeneinstellungen zurücksetzen';
$string['reverttodraft'] = 'Abgabe in den Entwurfsmodus zurücksetzen';
$string['reverttodraftforstudent'] = 'Den Status der Lösung auf Entwurf zurücksetzen für (id={$a->id}, fullname={$a->fullname}). Danach ist eine Bearbeitung wieder möglich.';
$string['reverttodraftshort'] = 'Abgabe in den Entwurfsmodus zurücksetzen';
$string['reviewed'] = 'Nachgeprüft';
$string['save'] = 'Speichern';
$string['saveallquickgradingchanges'] = 'Bewertungsänderungen sichern';
$string['saveandcontinue'] = 'Speichern und weiter';
$string['savechanges'] = 'Änderungen speichern';
$string['savegradingresult'] = 'Bewertung';
$string['savenext'] = 'Speichern und weiter';
$string['saveoverrideandstay'] = 'Speichern und weitere Änderung anlegen';
$string['savingchanges'] = 'Änderungen sichern...';
$string['scale'] = 'Skala';
$string['search:activity'] = 'Aufgabe - Aktivitätsinfo';
$string['selectedusers'] = 'Ausgewählte Nutzer/innen';
$string['selectlink'] = 'Auswählen...';
$string['selectuser'] = '{$a} auswählen';
$string['sendlatenotifications'] = 'Bewerter/innen über verspätete Abgaben von Lösungen informieren.';
$string['sendlatenotifications_help'] = 'Mit der Aktivierung werden die Bewerter (meist die Trainer/innen) benachrichtigt wenn eine Lösung verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendnotifications'] = 'Mitteilungen an bewertende Personen senden';
$string['sendnotifications_help'] = 'Mit der Aktivierung werden die Bewerter (meist die Trainer/innen) benachrichtigt wenn eine Lösung zeitgerecht oder verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendstudentnotifications'] = 'Teilnehmer/in benachrichtigen';
$string['sendstudentnotifications_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer/innen eine Benachrichtigung über aktualisierte Bewertungen oder Feedbacks. Wenn in dieser Aufgabe der Bewertungsworkflow verwendet wird, werden Benachrichtigungen erst verschickt, nachdem dessen Status auf "Freigegeben" gesetzt wird.';
$string['sendstudentnotificationsdefault'] = 'Standardeinstellung für "Teilnehmer/in benachrichtigen"';
$string['sendstudentnotificationsdefault_help'] = 'Den Standardwert für Auswahlfeld "Teilnehmer/in benachrichtigen"  im Bewertungsformular festlegen.';
$string['sendsubmissionreceipts'] = 'Abgabebestätigung an Teilnehmer/innen versenden';
$string['sendsubmissionreceipts_help'] = 'Diese Option aktiviert Bestätigungen, die bei der Einreichung von Aufgabenlösungen an die Teilnehmer/innen gesendet werden.';
$string['setmarkerallocationforlog'] = 'Bewertungszuordnung gesetzt auf: (id={$a->id}, Name={$a->fullname}, Bewerter={$a->marker}).';
$string['setmarkingallocation'] = 'Zugewiesene Bewerter/innen festlegen';
$string['setmarkingworkflowstate'] = 'Bewertungsworkflowstatus festlegen';
$string['setmarkingworkflowstateforlog'] = 'Bewertungsworkflow-Status gesetzt: (id={$a->id}, Name={$a->fullname}, Status={$a->state}).';
$string['settings'] = 'Einstellungen';
$string['showrecentsubmissions'] = 'Neue Abgaben anzeigen';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'Der Status für den Ablauf muss \'Freigegeben\' sein, um Teilnehmer/innen zu benachrichtigen.';
$string['submission'] = 'Abgabe';
$string['submissioncopiedhtml'] = '<p>Sie haben eine Kopie der früheren Lösung für die Aufgabe \'<i>{$a->assignment} erstellt</i>\'</p><p>.
Sehen sehen hier den Status  <a href="{$a->url}"> für Ihre Aufgabenlösung</a>.</p>';
$string['submissioncopiedsmall'] = 'Sie haben Ihre bisherige Aufgabenlösung für {$a->assignment} kopiert.';
$string['submissioncopiedtext'] = 'Sie haben Ihre bisherige Aufgabenlösung für {$a->assignment} kopiert.

Sie können den Status der Aufgabenlösung sehen unter
    {$a->url}';
$string['submissiondrafts'] = 'Abgabetaste muss gedrückt werden';
$string['submissiondrafts_help'] = 'Diese Option legt fest, dass Teilnehmer/innen die Taste zum Abgeben klicken müssen, um ihre Einreichung als fertig zu deklarieren. Auf diese Weise können Aufgabenlösungen zunächst als Entwurf hinterlegt und weiterhin überarbeitet werden.

Wenn diese Einstellung von "Nein" in "Ja" geändert wird und Teilnehmer/innen bereits Entwürfe eingereicht haben, gelten diese Einreichungen als endgültig.';
$string['submissioneditable'] = 'Teilnehmer/innen können die eingereichte Lösung bearbeiten';
$string['submissionempty'] = 'Es wurde nichts eingereicht.';
$string['submissionlog'] = 'Teilnehmer/in: {$a->fullname}, Status: {$a->status}';
$string['submissionmodified'] = 'Sie haben bestehende Abgabedaten. Verlassen Sie die Seite und versuchen Sie es noch einmal.';
$string['submissionmodifiedgroup'] = 'Die Abgabe wurde von jemand anderem verändert. Verlassen Sie die Seite und versuchen Sie es noch einmal.';
$string['submissionnotcopiedinvalidstatus'] = 'Die Abgabe wurde nicht kopiert, weil sie seit dem Öffnen verändert wurde.';
$string['submissionnoteditable'] = 'Teilnehmer/innen können die eingereichte Lösung nicht bearbeiten';
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
$string['submissionsclosed'] = 'Abgabe beendet';
$string['submissionsettings'] = 'Abgabeeinstellungen';
$string['submissionslocked'] = 'Bei dieser Aufgabe können derzeit keine Lösungen abgeben werden.';
$string['submissionslockedshort'] = 'Abgabeänderungen sind nicht erlaubt';
$string['submissionsnotgraded'] = 'Nicht bewertete Abgaben: {$a}';
$string['submissionstatement'] = 'Erklärung zur Eigenständigkeit';
$string['submissionstatement_help'] = 'Die Erklärung zur Eigenständigkeit muss akzeptiert werden, um die Arbeit abzugeben.';
$string['submissionstatementacceptedlog'] = 'Erklärung zur Eigenständigkeit wurde akzeptiert von {$a}';
$string['submissionstatementdefault'] = 'Diese Arbeit ist meine eigene Leistung. Sofern ich fremde Quellen verwendet habe, sind diese Stellen entsprechend gekennzeichnet.';
$string['submissionstatementteamsubmission'] = 'Gruppenerklärung zur Eigenständigkeit';
$string['submissionstatementteamsubmission_help'] = 'Die Erklärung zur Eigenständigkeit muss akzeptiert werden, um die Arbeit der Gruppe abzugeben.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Gruppenerklärung zur Eigenständigkeit, der alle Gruppenmitglieder zustimmen';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Die Erklärung zur Eigenständigkeit muss akzeptiert werden, um die Arbeit als Gruppemitglied abzugeben.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Diese Arbeit ist meine eigene Leistung als Gruppenmitglied. Sofern ich fremde Quellen verwendet habe, sind diese Stellen entsprechend gekennzeichnet.';
$string['submissionstatementteamsubmissiondefault'] = 'Diese Arbeit ist die eigene Leistung meiner Gruppe. Sofern wir fremde Quellen verwendet haben, sind diese Stellen entsprechend gekennzeichnet.';
$string['submissionstatus'] = 'Abgabestatus';
$string['submissionstatus_'] = 'Keine Abgabe';
$string['submissionstatus_draft'] = 'Entwurf (nicht abgegeben)';
$string['submissionstatus_marked'] = 'Bewertet';
$string['submissionstatus_new'] = 'Keine Abgabe';
$string['submissionstatus_reopened'] = 'Erneut geöffnet';
$string['submissionstatus_submitted'] = 'Zur Bewertung abgegeben';
$string['submissionstatusheading'] = 'Abgabestatus';
$string['submissionsummary'] = '{$a->status}. Letzte Änderung {$a->timemodified}';
$string['submissionteam'] = 'Gruppe';
$string['submissiontypes'] = 'Abgabetypen';
$string['submitaction'] = 'Abgeben';
$string['submitassignment'] = 'Aufgabe abgeben';
$string['submitassignment_help'] = 'Sobald die Aufgabe abgegeben ist, können Sie nichts mehr ändern.';
$string['submitforgrading'] = 'Zur Bewertung abgeben';
$string['submitted'] = 'Abgegeben';
$string['submittedearly'] = 'Aufgabe wurde {$a} vor dem Abgabeende abgegeben';
$string['submittedlate'] = 'Aufgabe wurde {$a} verspätet abgegeben';
$string['submittedlateshort'] = '{$a} später';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Feedback Plugin';
$string['subplugintype_assignfeedback_plural'] = 'Feedback Plugins';
$string['subplugintype_assignsubmission'] = 'Abgabe Plugin';
$string['subplugintype_assignsubmission_plural'] = 'Abgabe Plugins';
$string['teamname'] = 'Team: {$a}';
$string['teamsubmission'] = 'Teilnehmer/innen geben in Gruppen ab';
$string['teamsubmission_help'] = 'Wenn diese Option aktiviert ist, werden die Teilnehmer/innen anhand der Standardgruppen oder einer benutzerdefinierten Gruppierung in Gruppen eingeteilt. Eine Gruppeneinreichung wird unter den Gruppenmitgliedern geteilt, und alle sehen die Änderungen der jeweils anderen Personen an der Einreichung.';
$string['teamsubmissiongroupingid'] = 'Berücksichtigte Gruppierung';
$string['teamsubmissiongroupingid_help'] = 'Diese Gruppierung wird verwendet, um Gruppen für die Aufgabenbearbeitung zu finden. Wird keine Gruppierung festgelegt, wird die Standardeinstellung für Gruppen verwendet.';
$string['textinstructions'] = 'Aufgabenstellung';
$string['timemodified'] = 'Zuletzt geändert';
$string['timeremaining'] = 'Verbleibende Zeit';
$string['timeremainingcolon'] = 'Verbleibende Zeit: {$a}';
$string['togglezoom'] = 'Bereich zoomen';
$string['ungroupedusers'] = 'Die Einstellung \'Gruppe notwendig, um etwas abgeben zu können\' ist aktiviert. Es gibt Personen ohne Gruppe oder Personen mit mehreren Gruppen, die deshalb nichts abgeben können.';
$string['ungroupedusersoptional'] = 'Die Einstellung \'Teilnehmer/innen reichen in Gruppen ein\' ist aktiviert. Es gibt Teilnehmer/innen, die entweder kein Mitglied einer Gruppe oder Mitglied in mehr als einer Gruppe sind. Diese Teilnehmer/innen geben als Mitglieder der Standardgruppe ab.';
$string['unlimitedattempts'] = 'Unbegrenzt';
$string['unlimitedattemptsallowed'] = 'Unbegrenzte Versuche erlaubt';
$string['unlimitedpages'] = 'Unbegrenzt';
$string['unlocksubmissionforstudent'] = 'Abgabe für Teilnehmer/in erlauben: (id={$a->id}, Name={$a->fullname})';
$string['unlocksubmissions'] = 'Abgabe freigeben';
$string['unsavedchanges'] = 'Ungespeicherte Änderungen';
$string['unsavedchangesquestion'] = 'Die Änderungen für Bewertung und Feedback sind noch nicht gespeichert. Möchten Sie diese Änderungen sichern und fortfahren?';
$string['updategrade'] = 'Bewertung aktualisieren';
$string['updatetable'] = 'Speichern und Tabelle aktualisieren';
$string['upgradenotimplemented'] = 'Upgrade nicht implementiert für Plugin ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Standardwerte für die Nutzerzuordnung';
$string['userextensiondate'] = 'Verlängertes Abgabeende bis: {$a}';
$string['usergrade'] = 'Nutzerbewertung';
$string['useridlistnotcached'] = 'Abbruch des Speichervorgangs. Moodle konnte nicht erkennen für welchen Nutzer die Bewertung gespeichert werden soll.';
$string['useroverrides'] = 'Nutzeränderungen';
$string['useroverridesdeleted'] = 'Nutzeränderungen gelöscht';
$string['usersnone'] = 'Kein/e Teilnehmer/in hat Zugriff auf diese Aufgabe.';
$string['usersubmissioncannotberemoved'] = 'Die Aufgabenlösung von {$a} kann nicht entfernt werden.';
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
$string['viewrevealidentitiesconfirm'] = 'Bestätigungsseite mit Teilnehmendennamen anzeigen';
$string['viewsubmission'] = 'Abgabe anzeigen';
$string['viewsubmissionforuser'] = 'Abgabe von {$a} anzeigen';
$string['viewsubmissiongradingtable'] = 'Bewertungsübersicht zur Abgabe anzeigen';
$string['viewsummary'] = 'Zusammenfassung anzeigen';
$string['workflowfilter'] = 'Workflow-Filter';
$string['xofy'] = '{$a->x} von {$a->y}';
