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
 * Strings for component 'groupselect', language 'de', version '3.11'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aktion';
$string['assignedteacher'] = 'Zugeordnete(r) Betreuer/in';
$string['assigngroup'] = 'Betreuer/innen zu Gruppen zuordnen';
$string['assigngroup_help'] = 'Wenn diese Option aktiviert ist, erscheint ein Button um Betreuer/innen, sofern in diesem Kurs welche existieren, Gruppen zuzuordnen. Zugeordnete Betreuer/innen sind keine Gruppenmitglieder, erscheinen aber in exportierten Dateien und in der Hauptansicht (sofern ausgewählt). Nützlich, wenn der Kurs Assistenten benutzt, um Gruppen zu betreuen. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['cannotselectclosed'] = 'Der Einschreibezeitraum ist abgelaufen.';
$string['cannotselectmaxed'] = 'Einschreibung in Gruppe {$a} nicht möglich - die maximale Mitgliederzahl wurde erreicht.';
$string['cannotselectnocap'] = 'Sie haben keine Berechtigung, eine Gruppe zu wählen.';
$string['cannotselectnoenrol'] = 'Sie müssen in den Kurs eingeschrieben sein, um Gruppenmitglied zu werden.';
$string['cannotunselectclosed'] = 'Sie können die Gruppe nicht verlassen.';
$string['creategroup'] = 'Neue Gruppe anlegen';
$string['deleteallgrouppasswords'] = 'Alle Gruppenpasswörter löschen';
$string['deleteemptygroups'] = 'Gruppe wird gelöscht, sobald sie leer ist';
$string['deleteemptygroups_help'] = 'Wenn diese Option aktiviert ist, wird eine Gruppe automatisch gelöscht, sobald alle Teilnehmer/innen die Gruppe verlassen haben.';
$string['description'] = 'Beschreibung der Gruppe';
$string['duedate'] = 'Fälligkeitsdatum';
$string['edittooltip'] = 'Zum Bearbeiten klicken';
$string['enablepermissions'] = 'Allgemeine Berechtigungen';
$string['eventexportlinkcreated'] = 'Exportlink erstellt';
$string['eventgroupteacheradded'] = 'Betreuer/innen zugeordnet';
$string['export'] = 'Einen Downloadlink für eine Gruppendaten-Datei erzeugen (CSV)';
$string['export_download'] = 'CSV-Datei herunterladen';
$string['fromallgroups'] = 'Alle Gruppen';
$string['globalpassword_help'] = 'Setzen eines globalen Passworts zum Betreten einer Gruppe. Passwörter, die Teilnehmer/innen angelegt haben, werden überschrieben.';
$string['groupid'] = 'Gruppen ID';
$string['groupselect:addinstance'] = 'Neue freie Gruppeneinteilung hinzufügen';
$string['groupselect:assign'] = 'Das Hinzufügen eingeschriebener Betreuer/innen zu Gruppen erlauben';
$string['groupselect:create'] = 'Erstellen einer Gruppe erlauben';
$string['groupselect:export'] = 'Gruppenmitglieder exportieren erlauben';
$string['groupselect:select'] = 'Das Einschreiben in die Gruppe zulassen';
$string['groupselect:unselect'] = 'Das Verlassen der Gruppe zulassen';
$string['hidefullgroups'] = 'Volle Gruppen in der Hauptansicht verbergen';
$string['hidefullgroups_help'] = 'Wenn diese Option aktiviert ist, werden alle Gruppen, bei denen die maximale Anzahl an Mitgliedern erreicht wurde, von der Hauptansicht versteckt (ausgenommen Gruppen, die von Benutzern selbst angelegt wurden). Dies könnte nützlich sein, wenn diese Aktivität sehr viele Gruppen hat.';
$string['hidegroupmembers'] = 'Gruppenmitglieder für Teilnehmende verbergen';
$string['hidegroupmembers_help'] = 'Wenn diese Option aktiviert ist, werden alle Gruppenmitglieder für Teilnehmende ausgeblendet. Wenn die Teilehmenden die Möglichkeit haben, Gruppen zu verwalten (moodle/course:managegroups) oder wenn sie auf alle Gruppen zugreifen können (moodle/site:accessallgroups), werden die Mitglieder immer angezeigt.';
$string['hidesuspendedstudents'] = 'Inaktive Teilnehmende ignorieren';
$string['hidesuspendedstudents_help'] = 'Wenn diese Option aktiviert ist, werden inaktive Teilnehmende bei der Nutzerzahl und aus Gruppenlisten weggelassen.';
$string['incorrectpassword'] = 'Falsches Passwort';
$string['managegroups'] = 'Gruppeneinteilung bearbeiten';
$string['maxcharlenreached'] = 'Maximale Anzahl von Zeichen erreicht';
$string['maxgroupmembership'] = 'Maximale Anzahl der Gruppenteilnahme pro Teilnehmenden';
$string['maxgroupmembership_error_low'] = 'Negative Anzahl an Mitgliedschaften ist nicht erlaubt!';
$string['maxgroupmembership_help'] = 'Legt die maximale Anzahl an Gruppenteilnahmen fest. Eine 0 bedeutet, dass keine Teilnahme möglich ist.';
$string['maxlimitreached'] = 'Das Maximum der Gruppenmitglieder wurde erreicht.';
$string['maxmembers'] = 'Maximale Mitglieder pro Gruppe';
$string['maxmembers_error_low'] = 'Negative Anzahl an Mitgliedschaften ist nicht erlaubt!';
$string['maxmembers_error_smaller_minmembers'] = 'Die Maximalanzahl der Teilnehmer muss grösser sein als die Mindestanzahl!';
$string['maxmembers_help'] = 'Maximale Anzahl von Mitgliedern pro Gruppen, 0 für unbegrenzt';
$string['maxmembers_icon'] = 'Die Gruppe hat zu viele Mitglieder';
$string['maxmembers_notification'] = 'Ihre Gruppe hat zu viele Mitglieder! Das Maximum ist {$a}.';
$string['member'] = 'Mitglied';
$string['membercount'] = 'Anzahl';
$string['membershidden'] = 'Liste der Gruppenmitgleider nicht abrufbar';
$string['memberslist'] = 'Gruppenmitglieder';
$string['minmembers'] = 'Minimale Mitgliederzahl pro Gruppe';
$string['minmembers_error_bigger_maxmembers'] = 'Die Mindestgruppengrösse muss kleiner sein als die maximale Anzahl an Teilnehmern!';
$string['minmembers_error_low'] = 'Negative Anzahl an Gruppenmitgliedern ist nicht erlaubt!';
$string['minmembers_help'] = 'Minimale Anzahl von Mitgleidern pro Gruppe. Eine Benachrichtigung für Gruppenmitglieder wird angezeigt, wenn die Anzahl nicht erreicht wurde. Standard ist 0 (deaktiviert).';
$string['minmembers_icon'] = 'Gruppe hat weniger Mitglieder als erforderlich';
$string['minmembers_notification'] = 'Ihre Gruppe hat weniger Mitgleider als benötigt werden. Minimum ist {$a}.';
$string['miscellaneoussettings'] = 'Verschiedene Einstellungen';
$string['modulename'] = 'Freie Gruppeneinteilung';
$string['modulename_help'] = 'Teilnehmer/innen können Gruppen erstellen und wählen:

* Teilnehmer/innen können Gruppen erstellen, diesen eine Beschreibung geben und, falls gewünscht, mit einem Kennwort schützen
* Teilnehmer/innen können Gruppen auswählen und betreten
* Betreuer/innen können Gruppen hinzugefügt werden
* Die Trainer/innen können die Gruppenliste des Kurses als CSV-Datei exportieren
* Volle Kompatibilität zu Basis Moodle-Gruppen: Gruppen können auch durch andere Plugins erzeugt werden.';
$string['modulenameplural'] = 'Freie Gruppeneinteilungen';
$string['nogroups'] = 'Keine Gruppen vorhanden, aus denen Sie wählen können.';
$string['notavailableanymore'] = 'Die freie Gruppeneinteilung ist nicht mehr verfügbar (seit {$a}).';
$string['notavailableyet'] = 'Die freie Gruppeneinteilung wird nutzbar sein ab {$a}.';
$string['notifyexpiredselection'] = 'Zeige Meldung, wenn das Einschreibeende vorüber ist';
$string['notifyexpiredselection_help'] = 'Wenn diese Option aktiviert ist, wird eine Meldung angezeigt, falls das Einschreibeende vorüber ist';
$string['ok'] = 'OK';
$string['password'] = 'Passwort benötigt';
$string['pluginadministration'] = 'Modul Administration';
$string['pluginname'] = 'Freie Gruppeneinteilung';
$string['privacy:metadata'] = 'Das Plugin \'Freie Gruppeneinteilung\' speichert keine personenbezogenen Daten.';
$string['removeallsupervisors'] = 'Alle Betreuerzuweisungen enfernen';
$string['saving'] = 'Speichern ...';
$string['select'] = 'Gruppe beitreten {$a}';
$string['selectconfirm'] = 'Wollen Sie sich wirklich in die Gruppe <em>{$a}</em> einschreiben?';
$string['selectgroupaction'] = 'Gruppe wählen';
$string['showassignedteacher'] = 'Zugeteilte Betreuer/innen anzeigen';
$string['showassignedteacher_help'] = 'Wenn diese Option aktiviert ist, werden zugeteilte Betreuer/innen in Gruppenmitglieder angezeigt. Dies könnte nützlich sein, wenn Teilnehmer/innen ihre zugeteilten Betreuer/innen wissen müssen.';
$string['studentcancreate'] = 'Teilnehmende können Gruppen anlegen';
$string['studentcancreate_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmende ohne Gruppenzugehörigkeit (in der ausgewählten Gruppierung) Gruppen erstellen. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['studentcanjoin'] = 'Teilnehmende können Gruppen beitreten';
$string['studentcanjoin_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmende Gruppen beitreten. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['studentcanleave'] = 'Teilnehmende können Gruppen verlassen';
$string['studentcanleave_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmende Gruppen verlassen. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['studentcansetdesc'] = 'Teilnehmende können Gruppenbeschreibung erstellen und ändern';
$string['studentcansetdesc_help'] = 'Wenn diese Option aktiviert ist, können Gruppenmitglieder beim Erstellen einer Gruppe eine Beschreibung anlegen und diese bearbeiten.';
$string['studentcansetenrolmentkey'] = 'Teilnehmende können Passwörter setzen, um Gruppen beizutreten';
$string['studentcansetenrolmentkey_help'] = 'Wenn diese Option aktiviert ist, kann ein/e Teilnehmer/in ein Gruppenpasswort setzen';
$string['studentcansetgroupname'] = 'Teilnehmende dürfen Gruppennamen selbst bestimmen';
$string['studentcansetgroupname_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmende die Gruppennamen für neue Gruppen setzen.';
$string['supervisionrole'] = 'Rolle für die Betreuung';
$string['supervisionrole_help'] = 'Supervisorenrolle festlegen für die Betreuung der Gruppen festlegen (Standard: Lehrer ohne Bearbeitungsrecht)';
$string['targetgrouping'] = 'Gruppen aus einer Gruppierung auswählen';
$string['timeavailable'] = 'Einschreibebeginn';
$string['timeavailable_error_past_timedue'] = 'Aktivität kann nicht nach dem Ende anfangen!';
$string['timedue'] = 'Einschreibeende';
$string['timedue_error_pre_timeavailable'] = 'Aktivität kann nicht vor dem Start enden!';
$string['unassigngroup'] = 'Betreuer/innen von Gruppen entfernen';
$string['unassigngroup_confirm'] = 'Diese Aktion entfernt Betreuer/innen von Gruppen. Sind Sie sicher?';
$string['unselect'] = 'Gruppe {$a} verlassen';
$string['unselectconfirm'] = 'Wollen Sie sich wirklich aus der Gruppe <em>{$a}</em> austragen?';
