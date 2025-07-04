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
 * Strings for component 'publication', language 'de', version '4.4'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Datei hochladen';
$string['allfiles'] = 'Dateiabgaben';
$string['allowedfiletypes'] = 'Akzeptierte Dateitypen';
$string['allowedfiletypes_err'] = 'Bitte Eingabe überprüfen! Dateitypen enthalten ungültige Sonder- oder Trennzeichen';
$string['allowedfiletypes_help'] = 'Die akzeptierten Dateitypen können Sie hier einschränken. Entweder als kommagetrennte Liste aus Mimetypes, z.B. \'video/mp4, audio/mp3, image/png, image/jpeg\', oder als kommagtrennte Liste aus Dateiendungen, z.B, \'.png, .jpg\'. Falls das Feld leer ist, sind alle Dateitypen erlaubt.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Aufgabendetails und Abgabeformular sind ab <strong>{$a}</strong> verfügbar';
$string['allowsubmissionsfromdate'] = 'Ab';
$string['allowsubmissionsfromdate_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen ihre Dateiabgaben nicht vor diesem Datum einreichen. Ist die Option deaktiviert, können Teilnehmer/innen sofort mit der Einreichung beginnen.';
$string['allowsubmissionsfromdate_import'] = 'Freigabe ab';
$string['allowsubmissionsfromdate_upload'] = 'Hochladen ab';
$string['allowsubmissionsfromdatesummary'] = 'Diese Aufgabe akzeptiert Abgaben ab <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer/innen nur während des Bearbeitungszeitraums angezeigt.';
$string['approval_required'] = 'Freigabe ausstehend';
$string['approval_timeover'] = 'Sie können Ihre Freigabe nur während der Bearbeitungszeit ändern.';
$string['approvalchange'] = 'Status der Veröffentlichung wurde geändert';
$string['approvalfromdate'] = 'Freigabe ab';
$string['approvalfromdate_help'] = 'Der Status der Freigabe kann vor diesem Datum nicht geändert werden. Diese Einstellung ist nur relevant, wenn die Freigabe von Teilnehmer/innen oder Gruppen nicht automatisch erfolgt.';
$string['approvalsettings'] = 'Veröffentlichungseinstellungen';
$string['approvaltodate'] = 'Freigabe bis';
$string['approvaltodate_help'] = 'Der Status der Freigabe kann nach diesem Datum nicht mehr geändert werden. Diese Einstellung ist nur relevant, wenn die Freigabe von Teilnehmer/innen oder Gruppen nicht automatisch erfolgt.';
$string['approvaltodatevalidation'] = 'Das Freigabe bis-Datum muss nach dem Freigabe ab-Datum liegen.';
$string['approved'] = 'Freigegeben';
$string['approveusers'] = 'Freigeben';
$string['assignment'] = 'Aufgabe';
$string['assignment_help'] = 'Aufgabe für die Veröffentlichung von Dateiabgaben von Einzel- oder Gruppeneinreichungen auswählen.';
$string['assignment_notfound'] = 'Die Aufgabe aus der Dateien übernommen wurden, konnte nicht mehr gefunden werden.';
$string['assignment_notset'] = 'Es wurde noch keine Aufgabe ausgewählt.';
$string['availability'] = 'Bearbeitungszeit (Hochladen bzw. Freigabe)';
$string['choose'] = 'Bitte auswählen ...';
$string['completiondetail:upload'] = 'Datei hochladen';
$string['completionupload'] = 'Teilnehmer/in muss eine Datei hochladen';
$string['configautoimport'] = 'Wenn diese Option aktiviert ist, können Dateiabgaben aus Aufgaben automatisch in Studierendenordner importiert werden. Diese Funktion kann für jeden Studierendenordner separat ein-/ausgeschaltet werden.';
$string['configmaxbytes'] = 'Standardmäßige maximale Dateigröße für Dateien im Studierendenordner.';
$string['configmaxfiles'] = 'Standardmäßige maximale Anzahl von Dateien, die pro Teilnehmer/in im Studierendenordner erlaubt sind.';
$string['configobtainstudentapproval'] = 'Dateien werden erst nach Freigabe von Teilnehmer/innen und Trainer/innen veröffentlicht (d.h. allen angezeigt).';
$string['configobtainteacherapproval'] = 'Dateien von Teilnehmer/innen werden sofort ohne Überprüfung für alle angezeigt.';
$string['configrequiremodintro'] = 'Deaktivieren Sie diese Option, wenn die Eingabe von Beschreibungen für jede Aktivität nicht verpflichtend sein soll.';
$string['courseuploadlimit'] = 'Maximale Dateigröße';
$string['currentlynotapproved'] = '* Aktuell Veröffentlichung nicht freigegeben oder verweigert.';
$string['cutoffdate'] = 'Letzte Abgabemöglichkeit';
$string['cutoffdate_help'] = 'Diese Funktion sperrt die Abgabe von Lösungen ab diesem Termin, sofern keine Terminverlängerung gewährt wird.';
$string['cutoffdate_import'] = 'Letzte Freigabe bis';
$string['cutoffdate_upload'] = 'Letztes Hochladen bis';
$string['cutoffdatefromdatevalidation'] = 'Die letzte Abgabemöglichkeit muss nach der erstmöglichen Abgabe liegen.';
$string['cutoffdatevalidation'] = 'Die letzte Abgabemöglichkeit muss nach dem Abgabebeginn liegen.';
$string['details'] = 'Details';
$string['downloadall'] = 'Alle Dateiabgaben herunterladen';
$string['duedate'] = 'Bis';
$string['duedate_help'] = 'Wenn diese Einstellung aktiviert ist, können Teilnehmer/innen keine Abgaben nach diesem Datum hinzufügen. Wenn diese Einstellung deaktiviert ist, können Teilnehmer/innen jederzeit Abgaben tätigen.';
$string['duedate_import'] = 'Freigabe bis';
$string['duedate_upload'] = 'Hochladen bis';
$string['duedatevalidation'] = 'Das Abgabeende muss später als der Abgabebeginn sein.';
$string['edit_timeover'] = 'Dateien können nur während der Bearbeitungszeit geändert werden.';
$string['edit_uploads'] = 'Dateien hochladen + verwalten';
$string['email:filechange:footer'] = '</ul><br />Bitte überprüfen Sie, ob Ihre Freigabe für die Veröffentlichung erforderlich ist.';
$string['email:filechange_import:header'] = 'Folgende Datei(en) der Aufgabe <b>\'{$a->assign}\'</b> wurden am {$a->dayupdated} um {$a->timeupdated} nach <b>\'{$a->publication}\'</b> importiert:<br /><ul>';
$string['email:filechange_import:subject'] = 'Importierte Datei(en)';
$string['email:filechange_upload:header'] = '<b>{$a->username}</b> hat die folgende(n) Datei(en) in <b>\'{$a->publication}\'</b> am {$a->dayupdated} um {$a->timeupdated} hochgeladen:<br /><ul>';
$string['email:filechange_upload:subject'] = 'Hochgeladene Datei(en)';
$string['email:statuschange:filename'] = '<li>\'{$a->filename}\' nach \'<b>{$a->apstatus}</b>\'</li>';
$string['email:statuschange:footer'] = '</ul>';
$string['email:statuschange:header'] = 'Der Status der Veröffentlichung folgender Datei(en) für <b>\'{$a->publication}\'</b> wurde am {$a->dayupdated} um {$a->timeupdated} von <b>{$a->username}</b> geändert:<br /><ul>';
$string['email:statuschange:subject'] = 'Veröffentlichungsstatus aktualisiert';
$string['entiresperpage'] = 'Einträge pro Seite';
$string['eventpublicationapprovalchanged'] = 'Studierendenordner: Dateifreigabe wurde geändert';
$string['eventpublicationduedateextended'] = 'Studierendenordner: Abgabeende wurde verlängert';
$string['eventpublicationfiledeleted'] = 'Studierendenordner: Datei wurde gelöscht';
$string['eventpublicationfileimported'] = 'Studierendenordner: Datei wurde importiert';
$string['eventpublicationfileuploaded'] = 'Studierendenordner: Datei wurde hochgeladen';
$string['extensionduedate'] = 'Erweiterung des Abgabeendes';
$string['extensionnotafterduedate'] = 'Das erweiterte Abgabeende muss nach dem (normalen) Abgabeende liegen.';
$string['extensionnotafterfromdate'] = 'Das erweiterte Abgabeende muss nach Abgabeende liegen.';
$string['extensionto'] = 'Erweiterung bis';
$string['filedetails'] = 'Details';
$string['filesofthesetypes'] = 'Dateien dieses Typs können hinzugefügt werden:';
$string['filter'] = 'Filter';
$string['filter:allfiles'] = 'Alle Dateiabgaben';
$string['filter:approvalrequired'] = 'Entscheidung ausstehend';
$string['filter:approved'] = 'Freigegeben';
$string['filter:nofiles'] = 'Keine Dateiabgabe vorhanden';
$string['filter:nofilter'] = 'Kein Filter';
$string['filter:rejected'] = 'Freigabe verweigert';
$string['giveapproval'] = 'Freigeben';
$string['go'] = 'Start';
$string['grantextension'] = 'Verlängerung zulassen';
$string['group_approved'] = 'Freigabe durch alle Mitglieder der Gruppe erfolgt.';
$string['guideline'] = 'Veröffentlichung von Dateiabgaben';
$string['hidden'] = 'Verborgen';
$string['importfrom_err'] = 'Sie müssen eine Aufgabe auswählen, aus welcher Sie Dateiabgaben übernehmen möchten.';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['maxbytes_help'] = 'Legt die Größenbegrenzung für hochgeladene Dateien fest.';
$string['maxfiles'] = 'Anzahl hochladbarer Dateien';
$string['maxfiles_help'] = 'Wenn die Abgabe von Dateien als Lösung der Aufgabe gewählt wird, wird hier festgelegt wie viele Dateien je Teilnehmer/in hochgeladen werden können.';
$string['messageprovider:publication_updates'] = 'Studierendenordner Benachrichtigungen';
$string['mode'] = 'Modus';
$string['mode_help'] = 'Legen Sie fest, ob Teilnehmer/innen hier Dateien hochladen können oder ob ihre Abgaben aus einer Aufgabe übernommen werden sollen.';
$string['modeimport'] = 'Dateien aus Aufgabe übernehmen';
$string['modeupload'] = 'Dateien direkt hochladen';
$string['modulename'] = 'Studierendenordner';
$string['modulename_help'] = 'Der Studierendenordner bietet folgende Funktionen:<br><ul><li>Teilnehmer/innen können Dateien hochladen oder aus einer Aufgabenaktivität importieren.</li><li>Die Dateien werden automatisch oder nach Freigabe durch Teilnehmer/innen und/oder Trainer/innen veröffentlicht (für alle sichtbar).</li><li>Teilnehmer/innen und/oder Trainer/innen erhalten eine Benachrichtigung, wenn Teilnehmer/innen eine Datei hochgeladen oder aus einer Aufgabenaktivität importiert oder aktualisiert wurde. Weiters erhalten Teilnehmer/innen und/oder Trainer/innen eine Benachrichtigung über Änderungen des Veröffentlichungsstatus.</li></ul>';
$string['modulenameplural'] = 'Studierendenordner';
$string['myfiles'] = 'Meine Dateien';
$string['mygroupfiles'] = 'Meine Gruppendateien';
$string['name'] = 'Name';
$string['noentries'] = 'Keine Einträge';
$string['nofiles'] = 'Keine Dateien vorhanden';
$string['nofilestodisplay'] = 'Aktuell sind noch keine Dateien vorhanden bzw. noch nicht veröffentlicht.';
$string['nofilestozip'] = 'Keine Dateien zu zippen';
$string['nonexistentfiletypes'] = 'Die folgenden Dateitypen konnten nicht erkannt werden: {$a}';
$string['nopublicationsincourse'] = 'In diesem Kurs gibt es keinen Studierendenordner.';
$string['nothing_to_show_groups'] = 'Nichts anzuzeigen - keine Gruppen vorhanden';
$string['nothing_to_show_users'] = 'Nichts anzuzeigen - keine Teilnehmer/innen vorhanden';
$string['nothingtodisplay'] = 'Keine Einträge';
$string['notice'] = '<strong>Hinweis: </strong>';
$string['notice_changes_possible_in_original'] = 'Änderungen an vorhandenen Dateien sind ausschließlich in der ursprünglichen Aufgabenaktivität möglich.';
$string['notice_files_imported'] = 'Angezeigte Dateien werden aus einer Aufgabenaktivität importiert.';
$string['notice_files_imported_group'] = 'Angezeigte Dateien stammen aus einer Gruppeneinreichung, importiert aus einer Aufgabenaktivität.';
$string['notice_group_all_teachernotrequired'] = 'Diese Dateien werden nur veröffentlicht, wenn die <strong>Freigabe durch ALLE Gruppenmitglieder </strong> erfolgt ist.';
$string['notice_group_all_teacherrequired'] = 'Diese Dateien werden nur veröffentlicht, wenn die <strong>Freigabe durch ALLE Gruppenmitglieder und Trainer/innen </strong> erfolgt ist. Trainer/innen können eine Veröffentlichung jederzeit aufheben.';
$string['notice_group_one_teachernotrequired'] = 'Die Dateien werden nur veröffentlicht, wenn die <strong>Freigabe von MINDESTENS EINEM Gruppenmitglied</strong> erfolgt ist.';
$string['notice_group_one_teacherrequired'] = 'Die Dateien werden nur veröffentlicht, wenn die <strong>Freigabe von MINDESTENS EINEM Gruppenmitglied und Trainer/innen</strong> erfolgt ist. Trainer/innen können eine Veröffentlichung jederzeit aufheben.';
$string['notice_import_studentnotrequired_teachernotrequired'] = 'Die Dateien werden <strong>automatisch</strong> veröffentlicht (allen angezeigt).';
$string['notice_import_studentnotrequired_teacherrequired'] = 'Die Dateien werden erst <strong>nach der Freigabe durch die Trainer/innen</strong> veröffentlicht. Trainer/innen können eine Veröffentlichung jederzeit ablehnen.';
$string['notice_import_studentrequired_teachernotrequired'] = 'Die Dateien werden erst <strong>nach Ihrer Freigabe</strong> veröffentlicht (allen angezeigt).';
$string['notice_import_studentrequired_teacherrequired'] = 'Die Dateien werden <strong>nach Ihrer Freigabe und der Freigabe der Trainer/innen</strong> veröffentlicht (allen angezeigt). Trainer/innen können eine Veröffentlichung jederzeit aufheben.';
$string['notice_upload_studentnotrequired_teachernotrequired'] = 'Alle hier hochgeladenen Dateien werden <strong>automatisch</strong> veröffentlicht (allen angezeigt).';
$string['notice_upload_studentnotrequired_teacherrequired'] = 'Alle hier hochgeladenen Dateien werden erst <strong>nach der Freigabe durch Trainer/innen</strong> veröffentlicht (allen angezeigt). Trainer/innen können eine Veröffentlichung jederzeit ablehnen.';
$string['notice_upload_studentrequired_teachernotrequired'] = 'Alle hier hochgeladenen Dateien werden erst <strong>nach Ihrer Freigabe</strong> veröffentlicht (allen angezeigt).';
$string['notice_upload_studentrequired_teacherrequired'] = 'Alle hier hochgeladenen Dateien werden erst <strong>nach Ihrer Freigabe und der Freigabe durch Trainer/innen</strong> veröffentlicht (allen angezeigt). Trainer/innen können eine Veröffentlichung jederzeit ablehnen.';
$string['notifications'] = 'Benachrichtigungen';
$string['notify:filechange'] = 'Benachrichtigungen zu abgegebenen oder importierten Dateien';
$string['notify:filechange_admin'] = 'Standardeinstellung für Benachrichtigung für abgegebene oder importierte Dateien';
$string['notify:filechange_help'] = 'Abhängig von der Einstellung, wenn aktiviert, werden Teilnehmer/innen und/oder Trainer/innen über das Hochladen, Änderungen oder den Import einer Datei aus einer Aufgabenaktivität benachrichtigt.';
$string['notify:setting:0'] = 'Keine Benachrichtigungen';
$string['notify:setting:1'] = 'Nur Trainer/innen';
$string['notify:setting:2'] = 'Nur Teilnehmer/innen';
$string['notify:setting:3'] = 'An Trainer/innen und Teilnehmer/innen';
$string['notify:statuschange'] = 'Benachrichtigungen über Änderungen des Veröffentlichungsstatus';
$string['notify:statuschange_admin'] = 'Standardeinstellung für Benachrichtigung bei Änderungen des Veröffentlichungsstatus';
$string['notify:statuschange_help'] = 'Abhängig von der Einstellung werden Teilnehmer/innen und/oder Trainer/innen über die Statusänderung einer Veröffentlichung benachrichtigt.';
$string['notifystudents'] = 'Teilnehmer/innen über Änderungen der Veröffentlichung informieren';
$string['notifystudents_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer/innen eine Benachrichtigung, sobald sich der Status der Veröffentlichung einer ihrer hochgeladenen Dateien ändert.';
$string['notifyteacher'] = 'Trainer/innen über Dateiabgaben informieren';
$string['notifyteacher_help'] = 'Wenn diese Option aktiviert ist, erhalten Trainer/innen eine Benachrichtigung, sobald Teilnehmer/innen eine Datei hochladen.';
$string['obtainapproval_automatic'] = 'Automatisch';
$string['obtainapproval_required'] = 'Erforderlich';
$string['obtaingroupapproval'] = 'Freigabe durch Gruppe';
$string['obtaingroupapproval_admin'] = 'Standardeinstellung für Freigabe durch Gruppe';
$string['obtaingroupapproval_admin_desc'] = 'Diese Einstellung regelt die Freigabe durch Gruppenmitglieder. Diese Einstellung ist nur relevant, wenn Dateien von einer Aktivität Aufgabe importiert werden und für diese Aufgabe eine Gruppeneinreichung konfiguriert wurde.';
$string['obtaingroupapproval_all'] = 'Erforderlich von ALLEN Gruppenmitgliedern';
$string['obtaingroupapproval_help'] = 'Diese Option legt fest, wie die Veröffentlichung (Sichtbarkeit) von Dateiabgaben von Gruppen gehandhabt wird: <br/><ul><li><strong>Automatisch</strong> - keine Freigabe durch Gruppenmitglieder erforderlich. Aufgrund von urheberrechtlichen Bestimmungen empfehlen wir, die Freigabe von Teilnehmer/innen einzuholen, bevor Dokumente veröffentlicht werden.</li><li><strong>Erforderlich von mindestens EINEM Gruppenmitglied</strong> - Mindestens ein Gruppenmitglied muss freigeben</li><li><strong>Erforderlich von ALLEN Gruppenmitgliedern</strong> - alle Mitglieder der Gruppe müssen freigeben</li></ul>';
$string['obtaingroupapproval_single'] = 'Erforderlich von mindestens EINEM Gruppenmitglied';
$string['obtaingroupapproval_title'] = 'Freigabe durch Gruppe';
$string['obtainstudentapproval'] = 'Freigabe durch Teilnehmer/in';
$string['obtainstudentapproval_admin'] = 'Standardeinstellungen zur Freigabe durch Teilnehmer/in';
$string['obtainstudentapproval_admin_desc'] = 'Diese Einstellung legt den Standard für die Freigabe durch Teilnehmer/innen fest.';
$string['obtainstudentapproval_help'] = 'Diese Option legt fest, wie die Veröffentlichung (Sichtbarkeit) von Dateiabgaben stattfindet: <br><ul><li><strong>Automatisch</strong> - keine Freigabe durch Teilnehmer/innen erforderlich. In Bezug auf das Urheberrecht wird jedoch empfohlen, die Freigabe der Teilnehmer/innen anderweitig einzuholen.</li><li><strong>Erforderlich</strong> - Teilnehmer/innen müssen die Veröffentlichung manuell freigeben.</li></ul>';
$string['obtainstudentapproval_no'] = 'Automatisch';
$string['obtainstudentapproval_yes'] = 'Erforderlich';
$string['obtainteacherapproval'] = 'Freigabe durch Trainer/innen';
$string['obtainteacherapproval_admin'] = 'Standardeinstellung Freigabe durch Trainer/in';
$string['obtainteacherapproval_admin_desc'] = 'Diese Einstellung legt den Standard für die Freigabe durch Trainer/innen fest.';
$string['obtainteacherapproval_help'] = 'Diese Option legt fest, wie die Veröffentlichung (Sichtbarkeit) von Dateiabgaben durch Trainer/innen stattfindet: <br><ul><li><strong>Automatisch</strong> - Keine Freigabe durch Trainer/innen erforderlich.</li><li><strong>Erforderlich</strong> - Trainer/innen müssen die Datei manuell zur Veröffentlichung freigeben.</li></ul>';
$string['obtainteacherapproval_no'] = 'Automatisch';
$string['obtainteacherapproval_yes'] = 'Erforderlich';
$string['optionalsettings'] = 'Optionen';
$string['overdue'] = 'Bearbeitungszeitraum überschritten';
$string['overview'] = 'Überblick';
$string['pending'] = 'Ausstehend';
$string['pluginadministration'] = 'Studierendenordner Administration';
$string['pluginname'] = 'Studierendenordner';
$string['privacy:metadata:approval'] = 'Speichert, ob das Gruppenmitglied die Freigabe zur Veröffentlichung erteilt oder verweigert hat.';
$string['privacy:metadata:contenthash'] = 'SHA1 hash des Dateiinhalts, wird zur Feststellung von Dateiänderungen genutzt.';
$string['privacy:metadata:extduedates'] = 'Speichert Informationen über überschriebene/verlängerte Fälligkeitsdaten für das Modul Studierendenordner.';
$string['privacy:metadata:extensionduedate'] = 'Das für Teilnehmer/innen durch die Verlängerung gültige Fälligkeitsdatum.';
$string['privacy:metadata:fileid'] = 'Kennung der Datei.';
$string['privacy:metadata:filename'] = 'Dateiname.';
$string['privacy:metadata:files'] = 'Speichert Informationen über Dateien, die in das Modul Studierendenordner hochgeladen/importiert werden (Kennung, wem sie gehören, woher sie kommen, Hash des Inhalts, Dateiname und Bestätigung durch Lehrende und/oder Teilnehmer).';
$string['privacy:metadata:groupapproval'] = 'Speichert Informationen über die erteilte oder verweigerte Freigabe von Dateien durch Gruppenmitglieder, importiert aus einer Gruppeneinreichung.';
$string['privacy:metadata:publicationfileexplanation'] = 'Dateien und konvertierte Onlinetextaufgaben für dieses Plugin werden durch die Moodle Datei-API gespeichert.';
$string['privacy:metadata:publicationperpage'] = 'Wie viele Einträge auf einer einzelnen Tabellenseite angezeigt werden sollen!';
$string['privacy:metadata:studentapproval'] = 'Ob die Person ihre Freigabe zur Veröffentlichung einer Datei erteilt oder verweigert hat.';
$string['privacy:metadata:teacherapproval'] = 'Ob Trainer/innen die Freigabe zur Veröffentlichung einer Datei erteilt oder verweigert haben.';
$string['privacy:metadata:timecreated'] = 'Uhrzeit und Datum, zu dem der Datensatz erzeugt wurde.';
$string['privacy:metadata:timemodified'] = 'Uhrzeit und Datum der letzten Aktualisierung/Änderung des Datensatzes.';
$string['privacy:metadata:type'] = 'Markiert die Originalversion der Datei oder des Onlinetexts, hochgeladen und importiert oder konvertiert aus der Aktivität.';
$string['privacy:metadata:userid'] = 'Nutzerkennung.';
$string['privacy:path:files'] = 'Dateien';
$string['privacy:path:resources'] = 'Ressourcen';
$string['privacy:type:import'] = 'Importierte Datei';
$string['privacy:type:onlinetext'] = 'Importierter Onlinetext';
$string['privacy:type:upload'] = 'Hochgeladene Datei';
$string['publication:addinstance'] = 'Studierendenordner hinzufügen';
$string['publication:approve'] = 'Entscheiden Sie, ob Dateien veröffentlicht (d.h. für alle Teilnehmer/innen sichtbar) sein sollen';
$string['publication:grantextension'] = 'Verlängerung zulassen';
$string['publication:receiveteachernotification'] = 'Benachrichtigung für Trainer/innen empfangen';
$string['publication:upload'] = 'Dateien in den Studierendenordner hochladen';
$string['publication:view'] = 'Studierendenordner anzeigen';
$string['publicationstatus'] = 'Veröffentlichung';
$string['publicationstatus_help'] = 'Der Status der Veröffentlichung stellt die Freigabe der Trainer/in sowie die endgültige Veröffentlichung dar: <ul><li><i class="fa fa-check text-success fa-fw"></i> Datei ist veröffentlicht und wird somit für alle Teilnehmer/innen angezeigt</li><li><i class="fa fa-times text-danger fa-fw"></i> Datei ist nicht veröffentlicht (Freigabe ist noch nicht erfolgt oder wurde verweigert) und wird somit nicht angezeigt</li></ul>';
$string['publicfiles'] = 'Veröffentlichte Dateien';
$string['published_aftercheck'] = 'Freigabe durch Trainer/innen erforderlich';
$string['published_immediately'] = 'Automatische Freigabe';
$string['rejected'] = 'Abgelehnt';
$string['rejectusers'] = 'Freigabe verweigern';
$string['requiremodintro'] = 'Beschreibung notwendig';
$string['reset'] = 'Zurücksetzen';
$string['reset_userdata'] = 'Alle Daten';
$string['resetstudentapproval'] = 'Freigabe zurücksetzen';
$string['save_changes'] = 'Änderungen speichern';
$string['saveapproval'] = 'Änderungen speichern';
$string['savestudentapprovalwarning'] = 'Möchten Sie diese Änderungen wirklich speichern? Der Status der Veröffentlichung kann im Nachhinein nicht mehr geändert werden.';
$string['saveteacherapproval'] = 'Änderungen speichern';
$string['search:activity'] = 'Studierendenordner - Aktivitätsinformation';
$string['show_details'] = 'Details anzeigen';
$string['status'] = 'Status';
$string['status:approved'] = 'Freigegeben';
$string['status:approvednot'] = 'Freigabe verweigert';
$string['status:approvedrevoke'] = 'Zurückgezogen';
$string['student_approve'] = 'Freigeben';
$string['student_approved'] = 'Von Teilnehmer/in freigegeben.';
$string['student_approved_automatically'] = 'Automatische Freigabe durch Teilnehmer/in.';
$string['student_pending'] = 'Entscheidung von Teilnehmer/in ausstehend.';
$string['student_reject'] = 'Verweigern';
$string['student_rejected'] = 'Freigabe von Teilnehmer/in verweigert.';
$string['studentapproval'] = 'Freigabe (Teilnehmer/innen)';
$string['studentapproval_help'] = 'In der Spalte "Freigabe (Teilnehmer/innen)" wird die Rückmeldung der Teilnehmer/innen angezeigt:<br><ul><li><i class="fa fa-question fa-fw text-warning"></i> - Entscheidung ausstehend</li><li><i class="fa fa-check text-success fa-fw"></i> - Freigabe erteilt</li><li><i class="fa fa-times text-danger fa-fw"></i> - Freigabe verweigert</li></ul>';
$string['submissionsettings'] = 'Abgabeeinstellungen';
$string['teacher_approve'] = 'Freigeben';
$string['teacher_approved'] = 'Freigabe durch Trainer/in';
$string['teacher_approved_automatically'] = 'Automatische Freigabe durch Trainer/in';
$string['teacher_pending'] = 'Entscheidung von Trainer/in ausstehend';
$string['teacher_reject'] = 'Verweigern';
$string['teacher_rejected'] = 'Nicht veröffentlicht (Freigabe verweigert)';
$string['teacherapproval'] = 'Freigabe';
$string['teacherapproval_help'] = 'Aktuelle Freigabe/ Ablehnung von Dateien, d.h. ob diese für alle Teilnehmer/innen sichtbar sind: <br><ul><li><strong>Auswählen...</strong> - Entscheidung ausstehend/ keine Freigabe erteilt oder verweigert, diese Dateien werden nicht angezeigt.</li><li><strong>Freigeben</strong> - Freigabe erteilt, diese Dateien sind veröffentlicht und werden somit für alle angezeigt.</li><li><strong>Verweigern</strong> - keine Freigabe erteilt, diese Dateien sind nicht veröffentlicht und werden somit nicht angezeigt.</li></ul>';
$string['total'] = 'Gesamt';
$string['updatefiles'] = 'Dateien aktualisieren';
$string['updatefileswarning'] = 'Bereits importierte Dateien werden ersetzt oder entfernt, wenn die ursprünglichen Dateien in der Aufgabe geändert oder gelöscht wurden. Die Freigabe zur Veröffentlichung durch Teinehmer/innen bleibt unverändert.';
$string['uploaded'] = 'Hochgeladen';
$string['uploadnotopen'] = 'Hochladen von Dateien ist geschlossen!';
$string['visibility'] = 'Veröffentlicht';
$string['visible'] = 'Veröffentlicht';
$string['visibleforstudents'] = 'Veröffentlicht';
$string['visibleforstudents_no'] = 'Diese Datei ist nicht veröffentlicht (d.h. wird Teilnehmer/innen nicht angezeigt).';
$string['visibleforstudents_yes'] = 'Diese Datei ist veröffentlicht (d.h. wird für Teilnehmer/innen angezeigt).';
$string['withselected'] = 'Mit Auswahl...';
$string['zipusers'] = 'Ausgewählte Dateiabgaben herunterladen';
