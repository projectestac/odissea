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
 * Strings for component 'checklist', language 'de', version '4.5'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Kommentar hinzufügen';
$string['additem'] = 'Hinzufügen';
$string['additemalt'] = 'Neues Element in die Liste einfügen';
$string['additemhere'] = 'Neues Element nach diesem einfügen';
$string['addownitems'] = 'Eigene Elemente hinzufügen';
$string['addownitems-stop'] = 'Hinzufügen von eigenen Elemente beenden';
$string['allowmodulelinks'] = 'Modul-Links aktivieren';
$string['anygrade'] = 'Beliebig';
$string['anygrouping'] = 'Beliebige Gruppierung';
$string['autopopulate'] = 'Kursmodule in Fortschrittsliste anzeigen';
$string['autopopulate_help'] = 'Hiermit wird automatisch eine Liste der Arbeitsmaterialien und Aktivitäten des aktuellen Kurses zur Fortschrittsliste hinzugefügt.<br />
Nach Kursänderungen kann diese Liste aktualisiert werden, wenn Sie die \'Bearbeiten\'-Seite der Fortschrittsliste besuchen.<br />
Elemente der Liste können verborgen werden, indem Sie das danebenstehende \'Verbergen\'-Symbol anklicken.<br />
Wenn Sie die automatisch hinzugefügten Elemente wieder aus der Liste entfernen möchten, ändern Sie diese Einstellung auf \'Nein\' und klicken Sie auf \'Kurselemente entfernen\' auf der \'Bearbeiten\'-Seite.';
$string['autoupdate'] = 'Abhaken, wenn Aktivitäten abgeschlossen sind';
$string['autoupdate2'] = 'Abhaken, wenn Kurse oder Module abgeschlossen sind';
$string['autoupdate2_help'] = 'Diese Einstellung markiert Einträger in Ihrer Fortschrittsliste automatisch als abgeschlossen, wenn die zugehörige Aktivität im Kurs abgeschlossen wurde.<br />
Wenn die Abschlussverfolgung für eine Aktivität aktiviert wurde, wird diese für die Markierung als abgeschlossen verwendet.<br>
\'Abschließen\' variiert von einer Aktivität zur Anderen - ein Arbeitsmaterial \'ansehen\', einen Test oder eine Aufgabe \'einreichen\', in einem Forum eine Nachricht \'schreiben\' oder an einem Chat \'teilnehmen\' etc. Bei Fragen, wann genau eine Aktivität als \'abgeschlossen\' markiert wird, wenden Sie sich an Ihren Systemadministrator oder sehen Sie in der Datei \'mod/checklist/autoupdate.php\' nach.<br />
Wenn ein Element mit einem Kurs verknüpft ist und in diesem Kurs die Abschlussverfolgung aktiviert ist, wird das Element aktualisiert, wenn dieser Kurs als abgeschlossen markiert wird.';
$string['autoupdate_help'] = 'Diese Einstellung markiert Einträger in Ihrer Fortschrittsliste automatisch als abgeschlossen, wenn die zugehörige Aktivität im Kurs abgeschlossen wurde.<br />
Wenn die Abschlussverfolgung für eine Aktivität aktiviert wurde, wird diese für die Markierung als abgeschlossen verwendet.<br>
\'Abschließen\' variiert von einer Aktivität zur Anderen - ein Arbeitsmaterial \'ansehen\', einen Test oder eine Aufgabe \'einreichen\', in einem Forum eine Nachricht \'schreiben\' oder an einem Chat \'teilnehmen\' etc. Bei Fragen, wann genau eine Aktivität als \'abgeschlossen\' markiert wird, wenden Sie sich an Ihren Systemadministrator oder sehen Sie in der Datei \'mod/checklist/autoupdate.php\' nach.<br />';
$string['autoupdatenote'] = 'Der Eintrag für "Teilnehmer/innen" wird automatisch abgehakt - auf "Nur Trainer/innen"-Fortschrittslisten werden keine automatischen Änderungen vorgenommen';
$string['autoupdatewarning_both'] = 'Auf dieser Fortschrittsliste sind Elemente, die automatisch abgehakt werden (wenn Teilnehmer die entsprechende Aktivität abschließen). Da dies aber eine \'Teilnehmer-Trainer\'-Fortschrittsliste ist, wird der Fortschrittsbalken erst dann aktualisiert, wenn der Lehrer die Kennzeichnungen freigibt.';
$string['autoupdatewarning_student'] = 'Auf dieser Fortschrittsliste sind Elemente, die automatisch abgehakt werden (wenn Teilnehmer die entsprechende Aktivität abschließen).';
$string['autoupdatewarning_teacher'] = 'Die Aktivitäten in der Fortschrittsliste werden automatisch abgehakt, wenn Teilnehmer/innen sie jeweils abgeschlossen haben.';
$string['calendardescription'] = 'Dieses Ereignis wurde zu Ihrer Fortschrittsliste hinzugefügt: {$a}';
$string['canceledititem'] = 'Abbrechen';
$string['changetextcolour'] = 'Nächste Textfarbe';
$string['checkeditemsdeleted'] = 'Ausgewählte Elemente gelöscht';
$string['checklist'] = 'Fortschrittsliste';
$string['checklist:addinstance'] = 'Neue Fortschrittsliste hinzufügen';
$string['checklist:edit'] = 'Erstellen und Bearbeiten von Fortschrittlisten';
$string['checklist:emailoncomplete'] = 'E-Mail bei Abschluss versenden';
$string['checklist:preview'] = 'Vorschau Fortschrittliste';
$string['checklist:updatelocked'] = 'Gesperrte Kennzeichnungen aktualisieren';
$string['checklist:updateother'] = 'Aktualisieren der Teilnehmerkennzeichnung der Fortschrittslisten';
$string['checklist:updateown'] = 'Aktualisieren Ihrer Fortschrittlistenkennzeichnung';
$string['checklist:viewmenteereports'] = 'Fortschritt des Mentoren (nur-lesend) ansehen';
$string['checklist:viewreports'] = 'Teilnehmerfortschritt anschauen';
$string['checklistautoupdate'] = 'Fortschrittsliste soll automatisch aktualiert werden';
$string['checklistfor'] = 'Lernfortschritt für';
$string['checklistintro'] = 'Einführung';
$string['checklistsettings'] = 'Einstellungen';
$string['checks'] = 'Kennzeichnungen';
$string['choosecourse'] = 'Kurs wählen ...';
$string['commenton'] = '{$a} kommentieren';
$string['comments'] = 'Kommentare';
$string['completiondetail:items'] = 'Einträge abhaken: {$a}';
$string['completiondetail:percent'] = 'Einträge abhaken: {$a}%';
$string['completionpercent'] = 'Prozentualer Anteil der Elemente, die abgehakt sein müssen:';
$string['completionpercentgroup'] = 'Verpflichtendes Abhaken';
$string['completionpercentgroup_help'] = 'Wenn "Prozent der Listenpunkte" ausgewählt ist, muss der Benutzer mindestens den angegebenen Prozentsatz der Listenpunkte abhaken, um als "vollständig" zu gelten. Wenn "Listenpunkte" ausgewählt ist, muss der Benutzer mindestens so viele einzelne Punkte in der Liste abhaken. Beachten Sie, wenn Sie hier eine Anzahl von Listenpunkten angeben, die größer ist als die Anzahl der Listenpunkte in der Checkliste, dann wird diese nie als vollständig markiert.';
$string['configchecklistautoupdate'] = 'Bevor dies aktiviert werden kann, müssen Sie einige Änderungen im Moodle Core vornehmen, bitte lesen Sie dazu mod/checklist/README.txt';
$string['configshowcompletemymoodle'] = 'Wenn diese Einstellung deaktiviert wird, werden erledigte Fortschrittslisten im Dashboard ausgeblendet';
$string['configshowmymoodle'] = 'Wenn diese Einstellung deaktiviert wird, werden Fortschrittslisten (und die Fortschrittsbalken) im Dashboard ausgeblendet';
$string['configshowupdateablemymoodle'] = 'Wenn diese Einstellung aktiviert ist, werden nur Fortschrittslisten, die aktualisiert werden können, im Dashboard angezeigt.';
$string['confirmdeleteitem'] = 'Möchten Sie dieses Fortschrittslisten-Element dauerthaft löschen?';
$string['deleteitem'] = 'Dieses Element löschen';
$string['duedatesoncalendar'] = 'Fälligkeiten zum Kalender hinzufügen';
$string['edit'] = 'Fortschrittsliste bearbeiten';
$string['editchecks'] = 'Kennzeichnungen bearbeiten';
$string['editdatesstart'] = 'Termine bearbeiten';
$string['editdatesstop'] = 'Termine bearbeiten beenden';
$string['edititem'] = 'Dieses Element bearbeiten';
$string['emailoncomplete'] = 'E-Mail versenden, wenn die Fortschrittsliste erledigt ist';
$string['emailoncomplete_help'] = 'Sobald eine Fortschrittsliste erledigt ist, kann eine Benachrichtigung sowohl an Teilnehmer/innen, die sie abgeschlossen haben, als auch an alle Trainer/innen des Kurses, versendet werden.<br />
Der Administrator kann über die Berechtigung \'mod:checklist/emailoncomplete\' beeinflussen, wer die E-Mail erhält - standardmäßig sind das alle Trainer/innen mit und ohne Bearbeitungsrecht.';
$string['emailoncompletebody'] = '{$a->user} hat die Fortschrittsliste \'{$a->checklist}\' im Kurs \'{$a->coursename}\' erledigt. Prüfen Sie die Ergebnisse hier:';
$string['emailoncompletebodyown'] = 'Sie haben die Fortschrittsliste \'{$a->checklist}\' im Kurs {$a->coursename}\' erledigt.
Prüfen Sie die Ergebnisse hier:';
$string['emailoncompletesubject'] = '{$a->user} hat die Fortschrittsliste \'{$a->checklist}\' abgeschlossen.';
$string['emailoncompletesubjectown'] = 'Sie haben die Fortschrittsliste \'{$a->checklist}\' abgeschlossen.';
$string['enterurl'] = 'URL eingeben ...';
$string['errorchecklistitemnotvalid'] = 'Die Fortschritslisten-Element-ID gehört nicht zu diesem Kursmodul!';
$string['eventchecklistcomplete'] = 'Fortschrittsliste abgeschlossen';
$string['eventchecklistupdated'] = 'Fortschrittsliste aktualisiert';
$string['eventeditpageviewed'] = 'Bearbeiten-Seite angesehen';
$string['eventreportviewed'] = 'Bericht angesehen';
$string['eventstudentchecksupdated'] = 'Teilnehmermarkierungen aktualisiert';
$string['eventteacherchecksupdated'] = 'Trainermarkierungen aktualisiert';
$string['export'] = 'Einträge exportieren';
$string['forceupdate'] = 'Kennzeichnungen für alle automatisch erstellten Elemente aktualisieren';
$string['gradetocomplete'] = 'Für den Abschluss nötige Bewertung:';
$string['grouping'] = 'Sichtbar für Gruppierung';
$string['guestsno'] = 'Sie haben keine Berechtigung, diese Fortschrittsliste anzusehen';
$string['headingitem'] = 'Dieses Element ist eine Überschrift ohne Ankreuzfeld.';
$string['import'] = 'Einträge importieren';
$string['importfile'] = 'Importdatei wählen';
$string['importfromcourse'] = 'Ganzer Kurs';
$string['importfromsection'] = 'Aktueller Abschnitt';
$string['indentitem'] = 'Element einrücken';
$string['itemcomplete'] = 'Erledigt';
$string['items'] = 'Elemente der Fortschrittsliste';
$string['itemstype'] = 'Listenpunkte';
$string['linkcourses'] = 'Elemente zu Kursen verlinken erlaubt';
$string['linkcourses_desc'] = 'Wenn aktiviert, können Checklistenelemente mit Kursen in Moodle verknüpft werden – werden somit als abgeschlossen markiert, wenn der zugehörige Kurs abgeschlossen ist. Dieses zu aktivieren hat möglicherweise Einfluss auf die Performance bei der Bearbeitung von Checklistenelementen auf Seiten mit einer großen Anzahl Kursen.';
$string['linkto'] = 'Link zu';
$string['linktocourse'] = 'Mit diesem Element verlinkter Kurs';
$string['linktomodule'] = 'Mit diesem Element verlinkte Aktivität';
$string['linktourl'] = 'Mit diesem Element verbundender Link';
$string['lockteachermarks'] = 'Kennzeichnungen von Trainer/innen sperren';
$string['lockteachermarks_help'] = 'Wenn diese Einstellung aktiv ist, können Trainer/innen, sobald  einmal eine \'Ja\' Kennzeichnung vergeben wurde, diese nicht mehr ändern. Benutzer mit der Berechtigung \'mod/checklist:updatelocked\' können die Sperre übergeben und die Kennzeichnung trotzdem ändern.';
$string['lockteachermarkswarning'] = 'Hinweis: Sobald Sie diese Kennzeichnungen gespeichert haben, werden Sie \'Ja\' Kennzeichnungen nicht mehr ändern können';
$string['missinguser'] = 'Nutzer/in existiert nicht';
$string['modulename'] = 'Fortschrittsliste';
$string['modulename_help'] = 'Die Fortschrittslistenaktivität erlaubt Trainer/innen, eine Fortschrittsliste (Todo- oder Aufgabenliste) für die Teilnehmer/innen zu erstellen, welche diese abarbeiten sollen.';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'Fortschrittslisten';
$string['moveitemdown'] = 'Dieses Element nach unten verschieben';
$string['moveitemup'] = 'Dieses Element nach oben verschieben';
$string['noitems'] = 'Diese Fortschrittsliste enthält keine Elemente';
$string['onlyenrolled'] = 'Nur aktive Nutzer/innen';
$string['onlyenrolleddesc'] = 'Wenn dies aktiviert ist, werden nur Nutzer/innen mit aktiver Einschreibung in der Fortschrittsliste angezeigt. (Deaktivieren für das frühere Verhalten der Aktivität)';
$string['openlinkinnewwindow'] = 'In neuem Fenster öffnen?';
$string['optionalhide'] = 'Optionale Elemente ausblenden';
$string['optionalitem'] = 'Dieses Element ist optional';
$string['optionalshow'] = 'Optionale Elemente anzeigen';
$string['or'] = 'ODER';
$string['percent'] = 'Prozentualer Anteil an Elementen';
$string['percentcomplete'] = 'Pflichtelemente';
$string['percentcompleteall'] = 'Alle Elemente';
$string['pluginadministration'] = 'Fortschrittslistenverwaltung';
$string['pluginname'] = 'Fortschrittsliste';
$string['preview'] = 'Vorschau';
$string['privacy:metadata:checklist_check'] = 'Informationen darüber, welche Einträge von Teilnehmer/innen (oder von Trainer/innen für die Teilnehmer/innen) in einer bestimmten Fortschrittsliste abgewählt wurden';
$string['privacy:metadata:checklist_check:item'] = 'Die ID des abgewählten Listeneintrages';
$string['privacy:metadata:checklist_check:teacherid'] = 'DIe ID des/der Trainers/in, der zuletzt den Status der Einträge aktualisiert hat';
$string['privacy:metadata:checklist_check:teachermark'] = 'Der von einem/einer Trainer/in für einen Nutzer dem Element zugewiesene Status';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'Zeit, zu der zuletzt durch einen/eine  Trainer/in ein Status zugewiesen wurde';
$string['privacy:metadata:checklist_check:userid'] = 'Die ID des Nutzers, der den Eintrag abgewählt hat (bzw. durch den/die Trainer/in vorgenommen)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'Zeit, zu der der Eintrag zuletzt durch den Nutzer abgewählt wurde';
$string['privacy:metadata:checklist_comment'] = 'Informationen über Kommentare durch den/die Trainer/in über den Fortschritt eines/einer ausgewählten Teilnehmer/in';
$string['privacy:metadata:checklist_comment:commentby'] = 'DIe ID eines Nutzers (Trainer/in), von dem der Kommentar stammt';
$string['privacy:metadata:checklist_comment:itemid'] = 'DIe ID des Listeneintrages, auf den sich der Kommentar bezieht';
$string['privacy:metadata:checklist_comment:text'] = 'Text des Kommentars';
$string['privacy:metadata:checklist_comment:userid'] = 'Nutzer-ID von Teilnehmer/in) auf den sich der Kommentar bezieht';
$string['privacy:metadata:checklist_comment_student'] = 'Kommentare von Teilnehmer/in in der Fortschrittsliste';
$string['privacy:metadata:checklist_comment_student:itemid'] = 'ID des Fortschrittslistenelements, auf dass sich der Kommentar bezieht';
$string['privacy:metadata:checklist_comment_student:text'] = 'Text des Kommentars';
$string['privacy:metadata:checklist_comment_student:usermodified'] = 'Nutzer-ID der Person, die den Kommentar gemacht hat';
$string['privacy:metadata:checklist_comp_notification'] = 'Markieren, welche Nutzer/innen bereits alle Punkte ihrer Fortschrittsliste abgeschlossen haben, damit E-Mails nicht erneut versendet werden';
$string['privacy:metadata:checklist_comp_notification:checklistid'] = 'ID der Fortschritsliste';
$string['privacy:metadata:checklist_comp_notification:iscomplete'] = '1 für abgeschlossen und 0 für nicht abgeschlossen';
$string['privacy:metadata:checklist_comp_notification:userid'] = 'Nutzer-ID der Person, die die Fortschrittsliste abgeschlossen hat';
$string['privacy:metadata:checklist_item'] = 'Informationen über private Einträge, die ein Nutzer zu einer bestimmten Fortschrittsliste hinzugefügt hat';
$string['privacy:metadata:checklist_item:checklist'] = 'ID der Fortschrittsliste, bei der private Eintrag hinzugefügt wurde';
$string['privacy:metadata:checklist_item:displaytext'] = 'Text des privaten Fortschrittslisteneintrages';
$string['privacy:metadata:checklist_item:userid'] = 'Nutzer-ID der Person, die diesen privaten Eintrag erstellt hat (0 bei Einträgen von Trainer/innen, die für alle Nutzer/innen sichtbar sind)';
$string['progress'] = 'Verlauf';
$string['removeauto'] = 'Kursmodul-Elemente entfernen';
$string['report'] = 'Teilnehmerfortschritt anzeigen';
$string['reporttablesummary'] = 'Die Tabelle zeigt alle Elemente auf der Fortschrittliste an, die jeder einzelne Teilnehmer abgeschlossen hat';
$string['requireditem'] = 'Dieses Element ist Pflicht - es muss erledigt werden';
$string['resetchecklistprogress'] = 'Fortschrittsliste und Benutzerelemente zurücksetzen';
$string['savechecks'] = 'Speichern';
$string['showcolorchooser'] = 'Farbauswahl anzeigen';
$string['showcolorchooserdesc'] = 'Die Farbauswahl für die Listen-Einträge in edit.php wird angezeigt.';
$string['showcompletemymoodle'] = 'Erledigte Fortschrittslisten im Dashboard anzeigen';
$string['showfulldetails'] = 'Alle Details anzeigen';
$string['showhidechecked'] = 'Gewählte Elemente anzeigen/verbergen';
$string['showmymoodle'] = 'Fortschrittslisten im Dashboard anzeigen';
$string['showprogressbars'] = 'Fortschrittsbalken anzeigen';
$string['showupdateablemymoodle'] = 'Nur aktualisierbare Fortschrittslisten im Dashboard';
$string['student_comment_created'] = 'Teilnehmerkommentar erstellt';
$string['student_comment_updated'] = 'Teilnehmerkommentar aktualisiert';
$string['student_comment_updated_desc'] = 'Teilnehmer/in mit der ID {$a->userid} hat einen Kommentar in der Fortschrittsliste im Kursmodul {$a->cmid} mit dem Text \'{$a->commenttext}\' aktualisiert';
$string['studentcomments'] = 'Teilnehmer/innen können eigene Kommentare zu Punkten in der Fortschrittsliste hinzufügen';
$string['teacheralongsidecheck'] = 'Teilnehmer/innen und Trainer/innen';
$string['teachercomments'] = 'Trainer/innen können Kommentare hinzufügen';
$string['teacherdate'] = 'Zeitpunkt, zu dem ein/e Trainer/in dieses Element zum letzten Mal aktualisiert hat';
$string['teacheredit'] = 'Aktualisiert von';
$string['teacherid'] = 'Trainer/in, der/die dieses Element zum letzten Mal aktualisiert hat';
$string['teachermarkno'] = 'Trainer/innen haben festgestellt, dass Sie dieses Element NICHT abgeschlossen haben.';
$string['teachermarkundecided'] = 'Die Trainer/innen haben dieses Element noch nicht bewertet';
$string['teachermarkyes'] = 'Trainer/innen tragen ein wenn Sie dieses Element erledigt haben';
$string['teachernoteditcheck'] = 'Nur Teilnehmer/in';
$string['teacheroverwritecheck'] = 'Nur Trainer/in';
$string['theme'] = 'Design der Fortschrittsliste';
$string['togglecolumn'] = 'Spalten tauschen';
$string['toggledates'] = 'Termine tauschen';
$string['togglerow'] = 'Zeilen tauschen';
$string['unindentitem'] = 'Element nicht mehr einrücken';
$string['update_student_comment_failed'] = 'Fehler beim Aktualisieren des Teilnehmerkommentars';
$string['updatecompletescore'] = 'Bewertungen speichern';
$string['updateitem'] = 'Aktualisieren';
$string['userdate'] = 'Zeitpunkt, zu dem die Person dieses Element zum letzten Mal aktualisiert hat';
$string['useritemsallowed'] = 'Teilnehmer/in darf eigene Elemente hinzufügen';
$string['useritemsdeleted'] = 'Eigenes Element gelöscht';
$string['view'] = 'Fortschrittsliste ansehen';
$string['viewall'] = 'Alle Teilnehmer/innen ansehen';
$string['viewallcancel'] = 'Abbrechen';
$string['viewallsave'] = 'Speichern';
$string['viewsinglereport'] = 'Fortschritt für diese Person anzeigen';
$string['viewsingleupdate'] = 'Fortschritt für diese Person aktualisieren';
$string['yesnooverride'] = 'Ja, kann nicht übergehen';
$string['yesoverride'] = 'Ja, kann übergehen';
