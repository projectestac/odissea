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
 * Strings for component 'publication', language 'de', version '3.11'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Datei hochladen';
$string['allfiles'] = 'Alle Dateien';
$string['allowedfiletypes'] = 'Akzeptierte Dateitypen';
$string['allowedfiletypes_err'] = 'Bitte Eingabe überprüfen! Dateitypen enthalten ungültige Sonder- oder Trennzeichen';
$string['allowedfiletypes_help'] = 'Die akzeptierten Dateitypen können Sie hier einschränken. Entweder als kommagetrennte Liste aus Mimetypes, z.B. \'video/mp4, audio/mp3, image/png, image/jpeg\', oder als kommagtrennte Liste aus Dateiendungen, z.B, \'.png, .jpg\'. Falls das Feld leer ist, sind alle Dateitypen erlaubt.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Die Aufgabendetails und das Abgabeformular ist von <strong>{$a}</strong> verfügbar';
$string['allowsubmissionsfromdate'] = 'von';
$string['allowsubmissionsfromdate_import'] = 'Einverständniserklärung von';
$string['allowsubmissionsfromdate_upload'] = 'Uploadmöglichkeit von';
$string['allowsubmissionsfromdateh'] = 'Zeitraum für Uploadmöglichkeit/Einverständniserklärung';
$string['allowsubmissionsfromdateh_help'] = 'Im festgelegten Zeitraum können Teilnehmer/innen je nach Modus entweder Dateien hochladen oder ihr Einverständnis für die Sichtbarkeit ihrer Dateien geben. Solange der Zeitraum geöffnet ist, können Sie ihre hochgeladenen Dateien bearbeiten oder ihr Einverständnis für die Sichtbarkeit wieder entziehen.';
$string['allowsubmissionsfromdatesummary'] = 'Diese Aufgabe akzeptiert Abgaben von <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer/innen nur während des Abgabezeitraums angezeigt.';
$string['approval_timeover'] = 'Sie können ihre Zustimmung nur während des Änderungszeitraumes ändern.';
$string['approvalchange'] = 'Einverständniserklärung wurde geändert';
$string['approved'] = 'Zugestimmt';
$string['approveusers'] = 'für alle sichtbar';
$string['assignment'] = 'Aufgabe';
$string['assignment_help'] = 'Aufgabe für den Dateiimport auswählen. Derzeit können Gruppenabgaben nicht zum Import herangezogen werden.';
$string['assignment_notfound'] = 'Die Aufgabe von der Dateien importiert wurden, konnte nicht mehr gefunden werden.';
$string['assignment_notset'] = 'Es wurde noch keine Aufgabe ausgewählt.';
$string['autoimport'] = 'Automatische Synchronisation mit Aufgabe';
$string['autoimport_help'] = 'Wenn aktiviert, werden neue Abgaben in der Aufgabe automatisch in den Studierendenordner übernommen. Eventuelle Zustimmungen müssen neu eingeholt werden.';
$string['availability'] = 'Zeitraum für Uploadmöglichkeit/Einverständniserklärung';
$string['choose'] = 'bitte auswählen ...';
$string['configautoimport'] = 'Wenn Sie bevorzugen, dass Abgaben automatisch in den/die Studierendenordner importiert werden. Dieses Feature kann für jeden Studierendenordner separat an-/ausgeschaltet werden.';
$string['configmaxbytes'] = 'Voreinstellung für die Dateigröße von Dateien im Studierendenordner.';
$string['configmaxfiles'] = 'Voreinstellung für die Anzahl von Dateien, die pro Teilnehmer/in im Studierendenordner erlaubt sind.';
$string['configobtainstudentapproval'] = 'Daten werden erst nach Einverständnis der Teilnehmer/innen für alle sichtbar geschaltet.';
$string['configobtainteacherapproval'] = 'Dateien von Teilnehmer/innen werden sofort ohne Überprüfung für alle sichtbar geschaltet.';
$string['configrequiremodintro'] = 'Deaktivieren Sie diese Option, wenn die Eingabe von Beschreibungen für jede Aktivität nicht verpflichtend sein soll.';
$string['courseuploadlimit'] = 'Max. Dateigröße Aktivität';
$string['currentlynotapproved'] = '* Aktuell keine Freigabe oder Ablehnung erteilt.';
$string['cutoffdate'] = 'Letzter Abgabetermin';
$string['cutoffdate_help'] = 'Diese Funktion sperrt die Abgabe von Lösungen ab diesem Termin, sofern keine Terminverlängerung gewährt wird.';
$string['cutoffdate_import'] = 'Letzte Einverständniserklärung bis';
$string['cutoffdate_upload'] = 'Letzte Uploadmöglichkeit bis';
$string['cutoffdatefromdatevalidation'] = 'Der letzte Abgabetermin muss nach der erstmöglichen Abgabe liegen.';
$string['cutoffdatevalidation'] = 'Der letzte Abgabetermin muss nach dem Abgabebeginn liegen.';
$string['details'] = 'Details';
$string['downloadall'] = 'Alle Dateien als ZIP herunterladen';
$string['duedate'] = 'bis';
$string['duedate_help'] = 'Zum Abgabeende wird die Aufgabe fällig. Wenn spätere Abgaben erlaubt sind, wird jede nach diesem Datum eingereichte Abgabe als verspätet markiert. Um eine Abgabe nach einem bestimmten Verspätungsdatum zu verhindern kann ein letzter Abgabetermin gesetzt werden.';
$string['duedate_import'] = 'Einverständniserklärung bis';
$string['duedate_upload'] = 'Uploadmöglichkeit bis';
$string['duedatevalidation'] = 'Das Abgabeende muss später als der Abgabebeginn sein.';
$string['edit_timeover'] = 'Dateien können nur während des Änderungszeitraumes geändert werden.';
$string['edit_uploads'] = 'Dateien bearbeiten/hochladen';
$string['emailstudentsmail'] = '{$a->username} hat die Einverständniserklärung zu \'{$a->filename}\'
für \'{$a->publication}\' auf {$a->apstatus} am {$a->dayupdated} um {$a->timeupdated} geändert.

Hier verfügbar:

    {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} hat die Einverständniserkärung zu \'{$a->filename}\'
für <i>\'{$a->publication}\'</i> auf <b>{$a->apstatus}</b> am {$a->dayupdated} um {$a->timeupdated}</i> geändert.<br /><br />
Verfügbar auf dieser <a href="{$a->url}">Seite</a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} hat \'{$a->filename}\' für \'{$a->publication}\' am {$a->dayupdated} um {$a->timeupdated} hochgeladen.

Hier verfügbar:

    {$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} hat \'{$a->filename}\' für <i>\'{$a->publication}\' am {$a->dayupdated} um {$a->timeupdated} hochgeladen</i><br /><br />
Verfügbar auf dieser <a href="{$a->url}">Seite</a>.';
$string['entiresperpage'] = 'Einträge pro Seite';
$string['eventpublicationapprovalchanged'] = 'Studierendenordner: Dateizustimmung wurde geändert';
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
$string['go'] = 'Start';
$string['grantextension'] = 'Erweiterung zulassen';
$string['groupapprovalmode'] = 'Modus Gruppenzustimmung';
$string['groupapprovalmode_all'] = 'ALLE Gruppenmitglieder müssen bestätigen';
$string['groupapprovalmode_help'] = 'Hier legen Sie fest, ob Sie das Einverständnis aller Gruppenmitglieder oder eines einzelnen Gruppenmitglied einholen.<br />Erst nach Einverständnis aller Gruppenmitglieder oder eines einzelnen Gruppenmitglied sind die Dateien auch wirklich für alle sichtbar.';
$string['groupapprovalmode_single'] = 'Mindestens EIN Gruppenmitglied muss bestätigen';
$string['guideline'] = 'sichtbar für alle:';
$string['hidden'] = 'verborgen';
$string['importfrom_err'] = 'Sie müssen eine Aufgabe auswählen von der Sie importieren möchten.';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['maxfiles'] = 'Anzahl hochladbarer Dateien';
$string['messageprovider:publication_updates'] = 'Studierendenordner Benachrichtigungen';
$string['mode'] = 'Modus';
$string['mode_help'] = 'Treffen Sie hier die Entscheidung, ob die Aktivität als “Upload-Platz” für Teilnehmer/innen dienen soll oder Sie eine Aufgabe als Ursprung der Dateien festgelegen wollen.';
$string['modeimport'] = 'Dateien aus Aufgabe importieren';
$string['modeupload'] = 'Teilnehmer/innen dürfen Dateien hochladen';
$string['modulename'] = 'Studierendenordner';
$string['modulename_help'] = 'Der Studierendenordner bietet folgendes:
<ul><li>Teilnehmer/innen können Dokumente hochladen, welche sofort nachdem Sie diese überprüft und freigegeben haben für die anderen Teilnehmer/innen sichtbar werden.</li>
<li>Eine Aufgabe kann als Grundlage für einen Studierendenordner genutzt werden. Der Trainer kann entscheiden, welche Dokumente der Aufgabe für alle Teilnehmer/innen sichtbar sein sollen. Trainer können auch die Teilnehmer/innen selbst entscheiden lassen, ob ihre Dateien für andere Teilnehmer/innen sichtbar sein sollen.</li></ul>';
$string['modulenameplural'] = 'Studierendenordner';
$string['myfiles'] = 'Meine Dateien';
$string['mygroupfiles'] = 'Meine Gruppendateien';
$string['name'] = 'Name des Studierendenordners';
$string['noentries'] = 'Keine Einträge';
$string['nofiles'] = 'Keine Dateien vorhanden';
$string['nofilestozip'] = 'Keine Dateien zu zippen';
$string['nonexistentfiletypes'] = 'Die folgenden Dateitypen konnten nicht erkannt werden: {$a}';
$string['nopublicationsincourse'] = 'In diesem Kurs existieren keine Studierendenordner.';
$string['nothing_to_show_groups'] = 'nichts anzuzeigen - keine Gruppen vorhanden';
$string['nothing_to_show_users'] = 'nichts anzuzeigen - keine Teilnehmer/innen vorhanden';
$string['nothingtodisplay'] = 'Keine Einträge';
$string['notice'] = 'Hinweis:';
$string['notice_groupimportrequireallapproval'] = 'Entscheiden Sie hier, ob Sie Ihre Gruppendateien allen zur Verfügung stellen. Alle Gruppenmitglieder müssen Ihre Zustimmung geben bevor die Datei sichtbar ist.';
$string['notice_groupimportrequireoneapproval'] = 'Entscheiden Sie hier, ob Sie Ihre Gruppendateien allen zur Verfügung stellen. Eine Zustimmung eines Gruppenmitglieds reicht bereits aus um die Datei sichtbar zu schalten. Bitte klären Sie bevor Sie Ihre Zustimmung abgeben gruppenintern ab, ob Ihre Datei sichtbar sein soll oder nicht!';
$string['notice_importnoapproval'] = 'Folgende Dateien wurden für alle sichtbar geschaltet.';
$string['notice_importrequireapproval'] = 'Entscheiden Sie hier, ob Sie Ihre Dateien allen zur Verfügung stellen.';
$string['notice_uploadnoapproval'] = 'Alle Dateien, die Sie hier hochladen, werden sofort für alle sichtbar geschaltet. Trainer/innen behalten sich das Recht vor die Sichtbarkeit Ihrer Dateien wieder aufzuheben.';
$string['notice_uploadrequireapproval'] = 'Alle Dateien, die Sie hier hochladen, werden erst nach Überprüfung durch die Trainer/innen für alle sichtbar.';
$string['notifications'] = 'Benachrichtigungen';
$string['notifystudents'] = 'Studierende über Zustimmungsänderungen informieren';
$string['notifystudents_help'] = 'Wenn aktiviert, erhalten Studierende eine Benachrichtigung, sobald sich der Status einer ihrer hochgeladener Dateien ändert . Benachrichtigungseinstellungen sind konfigurierbar.';
$string['notifyteacher'] = 'Bewerter/innen über Uploads informieren';
$string['notifyteacher_help'] = 'Wenn aktiviert, erhalten Bewerter/Innen (üblicherweise Lehrende) eine Benachrichtigung, sobald ein/e Studierende/r eine Datei hochlädt. Benachrichtigungseinstellungen sind konfigurierbar.';
$string['obtainstudentapproval'] = 'Einverständnis einholen';
$string['obtainstudentapproval_help'] = 'Hier legen Sie fest, ob Sie das Einverständnis der Teilnehmer/innen über Moodle (ja) oder auf eine andere Weise einholen (nein). <br> In Moodle können Sie festlegen, von welchen Teilnehmer/innen das Einverständnis eingeholt wird. Erst nach Einverständnis der Teilnehmer/innen sind die Dateien auch wirklich für alle sichtbar.';
$string['obtainteacherapproval'] = 'sofortige Freigabe';
$string['obtainteacherapproval_help'] = 'Diese Option legt fest, ob Dateien sofort für alle ohne Prüfung sichtbar werden: <br><ul><li> Ja - Einträge werden sofort nach dem Speichern angezeigt </li><li> Nein - Einträge werden von Trainer/innen geprüft und freigegeben</li></ul>';
$string['optionalsettings'] = 'Optionen';
$string['pending'] = 'Ausstehend';
$string['pluginadministration'] = 'Studierendenordner Administration';
$string['pluginname'] = 'Studierendenordner';
$string['privacy:metadata:approval'] = 'Ob das Gruppenmitglied die Datei bestätigt oder zurückgewiesen hat.';
$string['privacy:metadata:contenthash'] = 'SHA1 hash des Dateiinhalts, wird zur Feststellung von Dateiänderungen genutzt.';
$string['privacy:metadata:extduedates'] = 'Speichert Informationen über überschriebene/verlängerte Fälligkeitsdaten für das Modul Studierendenordner.';
$string['privacy:metadata:extensionduedate'] = 'Das für den Nutzer durch die Überschreibung/Verlängerung gültige Fälligkeitsdatum.';
$string['privacy:metadata:fileid'] = 'Kennung der Datei.';
$string['privacy:metadata:filename'] = 'Dateiname.';
$string['privacy:metadata:files'] = 'Speichert Informationen über Dateien, die in das Modul Studierendenordner hochgeladen/importiert werden (Kennung, wem sie gehören, woher sie kommen, Hash des Inhalts, Dateiname und Bestätigung durch Lehrende und/oder Teilnehmer).';
$string['privacy:metadata:groupapproval'] = 'Speichert Informationen über die Bestätigung oder Zurückweisung von Dateien, die aus einer Gruppenaufgabe importiert wurden, durch Gruppenmitglieder';
$string['privacy:metadata:publicationfileexplanation'] = 'Dateien und konvertierte Onlinetextaufgaben für dieses Plugin werden durch die Moodle Datei-API gespeichert.';
$string['privacy:metadata:publicationperpage'] = 'Wie viele Einträge auf einer einzelnen Tabellenseite angezeigt werden sollen!';
$string['privacy:metadata:studentapproval'] = 'Ob der Teilnehmer die Datei bestätigt oder zurückgewiesen hat.';
$string['privacy:metadata:teacherapproval'] = 'Ob der Lehrende die Datei bestätigt oder zurückgewiesen hat.';
$string['privacy:metadata:timecreated'] = 'Uhrzeit und Datum, zu dem der Datensatz erzeugt wurde.';
$string['privacy:metadata:timemodified'] = 'Uhrzeit und Datum der letzten Aktualisierung/Änderung des Datensatzes.';
$string['privacy:metadata:type'] = 'Markiert die Originalversion der Datei (hochgeladen vom Teilnehmer, importiert aus der Aufgabenabgabe oder konvertierter Onlinetext aus der Aufgabenabgabe).';
$string['privacy:metadata:userid'] = 'Nutzerkennung.';
$string['privacy:path:files'] = 'Dateien';
$string['privacy:path:resources'] = 'Ressourcen';
$string['privacy:type:import'] = 'importierte Datei';
$string['privacy:type:onlinetext'] = 'importierter Onlinetext';
$string['privacy:type:upload'] = 'hochgeladene Datei';
$string['publication:addinstance'] = 'Studierendenordner hinzufügen';
$string['publication:approve'] = 'Entscheiden ob Dateien für alle Teilnehmer/innen sichtbar sein sollen';
$string['publication:grantextension'] = 'Erweiterung zulassen';
$string['publication:receiveteachernotification'] = 'Benachrichtigung für Trainer/innen empfangen';
$string['publication:upload'] = 'Dateien in den Studierendenordner hochladen';
$string['publication:view'] = 'Studierendenordner anzeigen';
$string['publicfiles'] = 'Öffentliche Dateien';
$string['published_aftercheck'] = 'nein, erst nach Prüfung durch die Trainer/innen';
$string['published_immediately'] = 'ja sofort, ohne Prüfung durch die Trainer/innen';
$string['rejected'] = 'Abgelehnt';
$string['rejectusers'] = 'für alle unsichtbar';
$string['requiremodintro'] = 'Beschreibung notwendig';
$string['reset'] = 'Zurücksetzen';
$string['reset_userdata'] = 'Alle Daten';
$string['resetstudentapproval'] = 'Status zurücksetzen';
$string['save_changes'] = 'Änderungen speichern';
$string['saveapproval'] = 'Einverständnis aktualisieren';
$string['savestudentapprovalwarning'] = 'Sind Sie sicher dass Sie diese Änderungen speichern möchten? Der Status kann im Nachhinein nicht mehr geändert werden.';
$string['saveteacherapproval'] = 'Zustimmung aktualisieren';
$string['search:activity'] = 'Studierendenordner - Aktivitätsinformation';
$string['show_details'] = 'Details anzeigen';
$string['status'] = 'Status';
$string['status:approved'] = 'zugestimmt';
$string['status:approvednot'] = 'abgewiesen';
$string['student_approve'] = 'zustimmen';
$string['student_approved'] = 'Zugestimmt';
$string['student_pending'] = 'verborgen (nicht freigegeben)';
$string['student_reject'] = 'ablehnen';
$string['student_rejected'] = 'Abgelehnt';
$string['studentapproval'] = 'Status';
$string['studentapproval_help'] = 'In der Spalte Status wird die Rückmeldung des Teilnehmers/der Teilnehmerin angezeigt:

* ? - Einverständnis noch nicht erfolgt
* ✓ - Einverständnis gegeben
* ✖ - Einverständnis entzogen';
$string['teacher_approved'] = 'sichtbar (freigegeben)';
$string['teacher_pending'] = 'Bestätigung ausstehend';
$string['teacher_rejected'] = 'abgelehnt';
$string['teacherapproval'] = 'Zustimmung';
$string['teacherapproval_help'] = 'Aktuelle Zustimmung/ Ablehnung von Dateien, d.h. ob diese für alle Teilnehmer/innen sichtbar sind: <br /><ul><li>Auswählen... - Entscheidung ausständig/ keine Freigabe erteilt oder verweigert, diese Dateien sind nicht sichtbar.</li><li>Ja - Freigabe erteilt, diese Dateien sind sichtbar.</li><li>Nein - keine Freigabe erteilt, diese Dateien sind nicht sichtbar.</li></ul>';
$string['total'] = 'Gesamt';
$string['updatefiles'] = 'Dateien aktualisieren';
$string['updatefileswarning'] = 'Die Dateien der einzelnen Teilnehmer/innen aus dem Studierendenordner werden mit denen der Aufgabe aktualisiert. Bereits sichtbare Dateien eines Teilnehmers/einer Teilnehmerin werden ebenfalls überschrieben, falls diese in der Aufgabe nicht mehr vorhanden sind bzw. geändert wurden - d.h. das Einverständnis zur Sichtbarkeit der einzelnen Teilnehmer/innen bleibt unverändert.';
$string['uploaded'] = 'Hochgeladen';
$string['visibility'] = 'für alle sichtbar';
$string['visible'] = 'sichtbar';
$string['visibleforstudents'] = 'Für alle sichtbar';
$string['visibleforstudents_no'] = 'Diese Datei ist für Teilnehmer/innen NICHT sichtbar';
$string['visibleforstudents_yes'] = 'Teilnehmer/innen können diese Datei sehen';
$string['warning_changefromobtainstudentapproval'] = 'Wenn Sie diese Änderung durchführen, können nur Sie bestimmen welche Dateien für alle anderen Teilnehmer/innen sichtbar sind. Das Einverständnis von Teilnehmer/innen wird nicht eingeholt. Alle zum Einverständis gekennzeichneten Dateien werden unabhängig von der Teilnehmer/innen-Zustimmung nach dieser Änderung sofort für alle sichtbar.';
$string['warning_changefromobtainteacherapproval'] = 'Wenn Sie diese Änderung durchführen werden hochgeladene Dateien sofort für andere Teilnehmer/innen sichtbar. Alle bis jetzt hochgeladenen Dateien werden mit diesen Schritt ebenfalls auf sichtbar gesetzt. Sie haben jedoch das Recht Teilnehmer/innen die Sichtbarkeit aktiv zu entziehen.';
$string['warning_changetoobtainstudentapproval'] = 'Wenn Sie diese Änderung durchführen, wird das Einverständnis der Teilnehmer/innen eingeholt. Nach dieser Änderung wird für alle als sichtbar gekennzeichneten Dateien das Einverständnis der einzelnen Teilnehmer/innen eingeholt - die Dateien sind erst nach gegebenem Einverständnis für alle sichtbar.';
$string['warning_changetoobtainteacherapproval'] = 'Wenn Sie diese Änderung durchführen werden hochgeladene Dateien nicht sofort für andere Teilnehmer/innen sichtbar. Sie müssen dann aktiv Dateien von Teilnehmer/innen sichtbar schalten. Alle bis jetzt hochgeladenen Dateien werden mit diesem Schritt ebenfalls auf nicht sichtbar gesetzt.';
$string['withselected'] = 'Mit Auswahl...';
$string['zipusers'] = 'als ZIP herunterladen';
