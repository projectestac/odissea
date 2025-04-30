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
 * Strings for component 'group', language 'de', version '4.4'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Hinzugefügt von {$a}';
$string['addgroup'] = 'Nutzer/in zur Gruppe hinzufügen';
$string['addgroupstogrouping'] = 'Gruppe zur Gruppierung hinzufügen';
$string['addgroupstogroupings'] = 'Gruppen verwalten';
$string['adduserstogroup'] = 'Nutzer/innen verwalten';
$string['allocateby'] = 'Mitglieder zuordnen';
$string['anygrouping'] = '[Jede Gruppierung]';
$string['autocreategroups'] = 'Gruppen automatisch anlegen';
$string['backtogroupings'] = 'Zurück zu Gruppierungen';
$string['backtogroups'] = 'Zurück zu Gruppen';
$string['badnamingscheme'] = 'Der Name muss genau ein \'@\' oder ein \'#\' Zeichen enthalten.';
$string['byfirstname'] = 'Alphabetisch: Vorname Nachname';
$string['byidnumber'] = 'Alphabetisch nach ID-Nummer';
$string['bylastname'] = 'Alphabetisch: Nachname Vorname';
$string['createautomaticgrouping'] = 'Gruppierung automatisch anlegen';
$string['creategroup'] = 'Gruppe anlegen';
$string['creategrouping'] = 'Gruppierung anlegen';
$string['creategroupinselectedgrouping'] = 'Gruppe in der Gruppierung anlegen';
$string['createingrouping'] = 'Gruppierung von automatisch angelegten Gruppen';
$string['createorphangroup'] = 'Verwaiste Gruppe';
$string['csvdelimiter'] = 'CSV-Trennzeichen';
$string['databaseupgradegroups'] = 'Die Gruppenversion ist {$a}.';
$string['defaultgrouping'] = 'Standard für Gruppierung';
$string['defaultgroupingname'] = 'Gruppierung';
$string['defaultgroupname'] = 'Gruppe';
$string['deleteallgroupings'] = 'Alle Gruppierungen löschen';
$string['deleteallgroups'] = 'Alle Gruppen löschen';
$string['deletegroupconfirm'] = 'Möchten Sie die Gruppe \'{$a}\' wirklich löschen?';
$string['deletegrouping'] = 'Gruppierung löschen';
$string['deletegroupingconfirm'] = 'Möchten Sie die Gruppierung \'{$a}\' wirklich löschen? Die darin enthaltenen Gruppen werden nicht gelöscht.';
$string['deletegroupsconfirm'] = 'Möchten Sie die folgenden Gruppen wirklich löschen?';
$string['deleteselectedgroup'] = 'Löschen';
$string['disablemessagingaction'] = 'Mitteilungen deaktivieren';
$string['editgroupingsettings'] = 'Gruppierung bearbeiten';
$string['editgroupsettings'] = 'Gruppe bearbeiten';
$string['editusersgroupsa'] = 'Gruppen für \'{$a}\' bearbeiten';
$string['enablemessaging'] = 'Gruppenmitteilungen';
$string['enablemessaging_help'] = 'Wenn aktiv, können Gruppenmitglieder an andere Mitglieder der Gruppe Mitteilungen senden.';
$string['enablemessagingaction'] = 'Mitteilungen aktivieren';
$string['encoding'] = 'Codierung';
$string['enrolmentkey'] = 'Einschreibeschlüssel';
$string['enrolmentkey_help'] = 'Ein Einschreibeschlüssel erlaubt die Einschränkung von Kurszugängen auf diejenigen, die den Einschreibeschlüssel kennen. Falls zusätzlich ein Einschreibeschlüssel für eine Gruppe angegeben ist, dann dient dieser Schlüssel dem Kurszugang, aber auch der automatischen Zuweisung der Nutzer zur richtigen Gruppe.';
$string['enrolmentkeyalreadyinuse'] = 'Dieser Einschreibeschlüssel wird bereits für eine andere Gruppe benutzt.';
$string['erroraddremoveuser'] = 'Fehler beim Hinzufügen/Entfernen von {$a} in der Gruppe';
$string['erroraddtogroup'] = 'Ungültiger Wert für addtogroup. Der Wert sollte 0 sein, wenn kein Gruppenmodus aktiviert ist, oder 1, wenn eine neue Gruppe erstellt werden soll.';
$string['erroraddtogroupgroupname'] = 'Sie können nicht den Gruppennamen festlegen, wenn addtogroup gesetzt ist.';
$string['erroreditgroup'] = 'Fehler beim Bearbeiten der Gruppe {$a}';
$string['erroreditgrouping'] = 'Fehler beim Bearbeiten der Gruppierung {$a}';
$string['errorinvalidgroup'] = 'Fehler: Ungültige Gruppe {$a}';
$string['errorremovenotpermitted'] = 'Sie haben nicht das Recht, automatisch hinzugefügte Gruppenmitglieder {$a} zu entfernen.';
$string['errorselectone'] = 'Bitte markieren Sie nur eine Gruppe, bevor Sie diese Option wählen.';
$string['errorselectsome'] = 'Markieren Sie eine oder mehrere Gruppen, bevor Sie diese Option wählen.';
$string['evenallocation'] = 'Um die Gruppen gleichmäßig zu verteilen, kann die Zahl der Mitglieder je Gruppe von der angegeben Zahl abweichen.';
$string['eventgroupcreated'] = 'Gruppe angelegt';
$string['eventgroupdeleted'] = 'Gruppe gelöscht';
$string['eventgroupingcreated'] = 'Gruppierung angelegt';
$string['eventgroupingdeleted'] = 'Gruppierung gelöscht';
$string['eventgroupinggroupassigned'] = 'Gruppe mit Gruppierung verbunden';
$string['eventgroupinggroupunassigned'] = 'Gruppe von Gruppierung gelöst';
$string['eventgroupingupdated'] = 'Gruppierung aktualisiert';
$string['eventgroupmemberadded'] = 'Gruppenmitglied hinzugefügt';
$string['eventgroupmemberremoved'] = 'Gruppenmitglied entfernt';
$string['eventgroupupdated'] = 'Gruppe aktualisiert';
$string['existingmembers'] = 'Vorhandene Mitglieder: {$a}';
$string['exportgroupsgroupings'] = 'Gruppen und Gruppierungen herunterladen als';
$string['filtergroups'] = 'Gruppen filtern nach:';
$string['group'] = 'Gruppe';
$string['groupaddedsuccesfully'] = 'Gruppe {$a} erfolgreich hinzugefügt';
$string['groupaddedtogroupingsuccesfully'] = 'Gruppe {$a->groupname} wurde erfolgreich zur Gruppierung {$a->groupingname} hinzugefügt';
$string['groupby'] = 'Kriterien für automatisches Anlegen';
$string['groupdescription'] = 'Beschreibung der Gruppe';
$string['groupinfo'] = 'Info zu ausgewählten Gruppen';
$string['groupinfomembers'] = 'Info zu ausgewählten Mitglieder';
$string['groupinfopeople'] = 'Info zu ausgewählten Personen';
$string['grouping'] = 'Gruppierung';
$string['grouping_help'] = 'Eine Gruppierung ist eine Sammlung von Gruppen innerhalb eines Kurses. Wenn eine Gruppierung ausgewählt ist, dann können Teilnehmer/innen aus unterschiedlichen Gruppen innerhalb der Gruppierung zusammenarbeiten.';
$string['groupingaddedsuccesfully'] = 'Gruppierung \'{$a}\' wurde erfolgreich hinzugefügt';
$string['groupingdescription'] = 'Beschreibung der Gruppierung';
$string['groupingname'] = 'Name der Gruppierung';
$string['groupingnameexists'] = 'Der Name der Gruppierung \'{$a}\' existiert bereits in diesem Kurs. Bitte wählen Sie einen anderen Namen.';
$string['groupings'] = 'Gruppierungen';
$string['groupingsection'] = 'Gruppierungszugang';
$string['groupingsection_help'] = 'Eine Gruppierung ist eine Liste von Gruppen innerhalb eines Kurses. Wenn hier eine Gruppierung ausgewählt wird, haben ausschließlich Teilnehmer/innen Zugang zum Bereich, die Gruppen innerhalb der Gruppierung zugeordnet sind.';
$string['groupingsonly'] = 'Nur Gruppierungen';
$string['groupmember'] = 'Gruppenmitglied';
$string['groupmemberdesc'] = 'Standardrolle für Mitglieder einer Gruppe';
$string['groupmembers'] = 'Gruppenmitglieder';
$string['groupmemberssee'] = 'Gruppenmitglieder anzeigen';
$string['groupmembersselected'] = 'Mitglieder der markierten Gruppe';
$string['groupmode'] = 'Gruppenmodus';
$string['groupmode_groupsseparate_help'] = 'Teilnehmer/innen sind in Gruppen geteilt und können nur die Arbeit der eigenen Gruppe sehen.';
$string['groupmode_groupsvisible_help'] = 'Teilnehmer/innen sind in Gruppen geteilt, aber sie können die Arbeit anderer Gruppen sehen.';
$string['groupmode_help'] = '* Keine Gruppen
* Getrennte Gruppen - Teilnehmer/innen sind in Gruppen geteilt und können nur die Arbeit der eigenen Gruppe sehen.
* Sichtbare Gruppen - Teilnehmer/innen sind in Gruppen geteilt, aber sie können die Arbeit anderer Gruppen sehen.

Der Gruppenmodus, der auf Kursebene gesetzt wird, ist der Standardmodus für alle Aktivitäten im Kurs. Falls der Gruppenmodus auf Kursebene erzwungen wird, kann diese Einstellung für keine Aktivität geändert werden.';
$string['groupmodeforce'] = 'Gruppenmodus erzwingen';
$string['groupmodeforce_help'] = 'Der Gruppenmodus ist für den ganzen Kurs erzwungen und kann für keine Aktivität geändert werden.';
$string['groupmy'] = 'Meine Gruppe';
$string['groupname'] = 'Gruppenname';
$string['groupnameexists'] = 'Der Gruppenname \'{$a}\' existiert in diesem Kurs bereits.';
$string['groupnotamember'] = 'Sie sind kein Mitglied dieser Gruppe.';
$string['groups'] = 'Gruppen';
$string['groupscount'] = 'Gruppen ({$a})';
$string['groupsettingsheader'] = 'Gruppen';
$string['groupsgroupings'] = 'Gruppen & Gruppierungen';
$string['groupsinselectedgrouping'] = 'Gruppen in:';
$string['groupsnone'] = 'Keine Gruppen';
$string['groupsonly'] = 'Nur Gruppen';
$string['groupspreview'] = 'Gruppenvorschau';
$string['groupsseparate'] = 'Getrennte Gruppen';
$string['groupsvisible'] = 'Sichtbare Gruppen';
$string['grouptemplate'] = 'Gruppe @';
$string['importgroups'] = 'Gruppen importieren';
$string['importgroups_help'] = 'Gruppen können über eine Textdatei angelegt werden. Die Textdatei sollte folgendes Format haben:

* Jede Zeile enthält einen genau Datensatz
* Jeder Datensatz enthält eine Serie von Daten, getrennt durch das gewählte Trennzeichen
* Die erste Zeile enthält eine Liste der Feldnamen und definiert die Struktur der übrigen Datensätze
* Die Feldnamen müssen in der englischen Bezeichnung angegeben sein
* Notwendiges Feld ist groupname (Gruppenname)
* Optionale Felder sind groupidnumber (Gruppen-ID), description (Beschreibung), enrolmentkey (Gruppenschlüssel), groupingname (Gruppierungsname), enablemessaging (Mitteilungen aktivieren)
* Die Felder müssen in der englischen Bezeichnung angegeben sein';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Nur aktive Einschreibungen einbeziehen';
$string['includeonlyactiveenrol_help'] = 'Diese Option legt fest, dass gesperrte Nutzer/innen keiner Gruppe zugeteilt werden.';
$string['javascriptrequired'] = 'Diese Seite benötigt JavaScript.';
$string['manageactions'] = 'Verwalten';
$string['memberofgroup'] = 'Gruppenmitglied von: {$a}';
$string['members'] = 'Mitglieder pro Gruppe';
$string['membersofselectedgroup'] = 'Mitglieder in:';
$string['messagingdisabled'] = 'Mitteilungen in {$a} Gruppe(n) erfolgreich deaktiviert';
$string['messagingenabled'] = 'Mitteilungen in {$a} Gruppe(n) erfolgreich aktiviert';
$string['mygroups'] = 'Meine Gruppen';
$string['namingscheme'] = 'Namenschema';
$string['namingscheme_help'] = 'Das Symbol \'@\' kann benutzt werden, um Gruppen zu erzeugen, die Buchstaben im Namen haben. \'Gruppe @\' erzeugt z.B. Gruppen mit den Namen Gruppe A, Gruppe B, Gruppe C, ...

Das Symbol \'#\' kann benutzt werden, um Gruppen zu erzeugen, die Zahlen im Namen haben. \'Gruppe #\' erzeugt z.B. Gruppen mit den Namen Gruppe 1, Gruppe 2, Gruppe 3, ...';
$string['newgrouping'] = 'Neue Gruppierung';
$string['newpicture'] = 'Neues Bild';
$string['newpicture_help'] = 'Wählen Sie ein Bild im Format GIF, JPG oder PNG aus. Das Bild wird als Quadrat beschnitten und in der Größe auf 100x100 Pixel verändert.';
$string['noallocation'] = 'Keine Zuweisung';
$string['nogroup'] = 'Keine Gruppe';
$string['nogrouping'] = 'Keine Gruppierung';
$string['nogroups'] = 'In diesem Kurs gibt es bisher keine Gruppeneinstellungen';
$string['nogroupsassigned'] = 'Keine Gruppen zugeordnet';
$string['nopermissionforcreation'] = 'Die Gruppe "{$a}" konnte nicht erstellt werden, weil Sie nicht über die notwendigen Rechte verfügen.';
$string['nosmallgroups'] = 'Letzte kleine Gruppe vermeiden';
$string['notingroup'] = 'Nutzer/innen in Gruppen ignorieren';
$string['notingrouping'] = 'Nicht in einer Gruppierung';
$string['notingrouplist'] = 'Nicht in einer Gruppe';
$string['nousersinrole'] = 'In der ausgewählten Rolle gibt es keine passenden Nutzer/innen';
$string['number'] = 'Anzahl von Gruppen oder Mitgliedern pro Gruppe';
$string['numgroups'] = 'Anzahl von Gruppen';
$string['nummembers'] = 'Mitgliedern pro Gruppe';
$string['othergroups'] = 'Weitere Gruppen';
$string['overview'] = 'Überblick';
$string['participation'] = 'Im Gruppenmodus die Gruppe im Dropdown-Menü für Aktivitäten anzeigen';
$string['participation_help'] = 'Sollen Gruppenmitglieder diese Gruppe auswählen können, wenn Aktivitäten im getrennten oder sichtbaren Gruppenmodus sind? (Nur zutreffend, wenn die Gruppenmitgliedschaft sichtbar oder nur für Mitglieder sichtbar ist.)';
$string['participationshort'] = 'Beteiligung';
$string['potentialmembers'] = 'Mögliche Mitglieder: {$a}';
$string['potentialmembs'] = 'Mögliche Mitglieder';
$string['printerfriendly'] = 'Druckansicht';
$string['privacy:metadata:core_message'] = 'Gruppenkommunikationen';
$string['privacy:metadata:groups'] = 'Aufzeichnung der Gruppenmitgliedschaft';
$string['privacy:metadata:groups:groupid'] = 'ID der Gruppe';
$string['privacy:metadata:groups:timeadded'] = 'Zeitpunkt zu dem der Nutzer der Gruppe zugeordnet wurde';
$string['privacy:metadata:groups:userid'] = 'ID des Nutzers, der der Gruppe zugeordnet wurde';
$string['random'] = 'Zufällig';
$string['removefromgroup'] = 'Nutzer/in aus der Gruppe {$a} löschen';
$string['removefromgroupconfirm'] = 'Möchten Sie \'{$a->user}\' wirklich aus der Gruppe \'{$a->group}\' löschen?';
$string['removegroupfromselectedgrouping'] = 'Gruppe aus der Gruppierung entfernen';
$string['removegroupingsmembers'] = 'Alle Gruppen aus den Gruppierungen entfernen';
$string['removegroupsmembers'] = 'Alle Gruppenmitglieder entfernen';
$string['removeselectedusers'] = 'Ausgewählte Nutzer/innen entfernen';
$string['selectfromgroup'] = 'Mitglieder aus der Gruppe wählen';
$string['selectfromgrouping'] = 'Mitglieder aus der Gruppierung wählen';
$string['selectfromrole'] = 'Nutzer/innen mit der Rolle auswählen';
$string['showgroupsingrouping'] = 'Gruppen in Gruppierungen anzeigen';
$string['showmembersforgroup'] = 'Mitglieder der Gruppe anzeigen';
$string['toomanygroups'] = 'Nur {$a} Nutzer/innen haben die gewählte Rolle. Dies sind zu wenig für die Anzahl der Gruppen.';
$string['usercount'] = 'Nutzerzahl';
$string['usercounttotal'] = 'Nutzerzahl ({$a})';
$string['usergroupmembership'] = 'Mitgliedschaft der ausgewählten Person:';
$string['visibility'] = 'Sichtbarkeit der Gruppenmitgliedschaft';
$string['visibility_help'] = '* Sichtbar - Alle Teilnehmer/innen können sehen, wer in der Gruppe ist
* Nur für Mitglieder sichtbar - Teilnehmer/innen außerhalb der Gruppe können die Gruppe und deren Mitglieder nicht sehen
* Nur eigene Mitgliedschaft sehen - eine Person kann sich selber in der Gruppe sehen, aber keine anderen Mitglieder
* Verborgen - nur Trainer/innen können die Gruppe und deren Mitglieder sehen

Nutzer/innen mit dem Recht "Verborgene Gruppen anzeigen“ können die Gruppenmitgliedschaft immer sehen.

Beachten Sie, dass Sie diese Einstellung nicht ändern können, sobald die Gruppe Mitglieder hat.';
$string['visibilityall'] = 'Sichtbar';
$string['visibilitymembers'] = 'Sichtbar nur für Mitglieder';
$string['visibilitynone'] = 'Verborgen';
$string['visibilityown'] = 'Nur eigene Mitgliedschaft anzeigen';
$string['visibilityshort'] = 'Sichtbarkeit';
$string['withselected'] = 'Mit den ausgewählten';
