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
 * Strings for component 'enrol_flatfile', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Dateikodierung';
$string['expiredaction'] = 'Aktion bei Ablauf der Einschreibung';
$string['expiredaction_help'] = 'Wählen Sie, was passieren soll, wenn die Nutzereinschreibung abläuft. Beachten Sie, dass einige Nutzerdaten und -einstellungen bei der Kursabmeldung gelöscht werden.';
$string['filelockedmail'] = 'Die Textdatei \'{$a}\' für die Kurseinschreibung kann nicht vom Cronjob gelöscht werden. Dieses Problem tritt meistens bei falschen Zugriffsrechten auf. Bitte korrigieren Sie die Zugriffsrechte, damit die Datei gelöscht werden kann und nicht  erneut ausgeführt wird.';
$string['filelockedmailsubject'] = 'Fehler: Datei für Kursanmeldung';
$string['flatfileenrolments'] = 'Flat-File (CSV) Einschreibungen';
$string['flatfile:manage'] = 'Nutzer/innen manuell in den Kurs einschreiben';
$string['flatfilesync'] = 'CSV-Einschreibung (Flat file)';
$string['flatfile:unenrol'] = 'Nutzer/innen manuell aus dem Kurs abmelden';
$string['location'] = 'Dateiverzeichnis';
$string['location_desc'] = 'Geben Sie den vollständigen Pfad der Einschreibedatei an. Die Datei wird nach der Verarbeitung automatisch gelöscht.';
$string['mapping'] = 'CSV-Rollenzuweisung (Flat file)';
$string['messageprovider:flatfile_enrolment'] = 'Systemnachricht bei CSV-Einschreibung (flat file)';
$string['notifyadmin'] = 'Administrator/innen benachrichtigen';
$string['notifyenrolled'] = 'Eingeschriebene Nutzer/innen benachrichtigen';
$string['notifyenroller'] = 'Nutzer/in benachrichtigen, die die Einschreibung veranlasst hat';
$string['pluginname'] = 'CSV-Einschreibung (Flat file)';
$string['pluginname_desc'] = 'Die CSV-Rollenzuweisung (Flat file) arbeitet eine speziell formatierte Textdatei ab, deren Ort Sie selber festlegen. Diese Textdatei enthält kommagetrennte Listen mit 4 oder 6 Feldern pro Zeile:

operation, role, user idnumber, course idnumber [, starttime [, endtime]]

Die einzelnen Parameter sind:
* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber in the user table NB not id
* course idnumber - idnumber in the course table NB not id
* starttime - Startzeit (als Unixzeit) - optional
*  endtime - Endzeit (als Unixzeit) - optional

Die Datei könnte folgendermaßen aussehen:
<pre class="informationbox">
   add, student, 5, Kurs101
   add, teacher, 6, Kurs101
   add, teacheredit, 7, Kurs101
   del, student, 8, Kurs101
   del, student, 17, Kurs101
   add, student, 21, Kurs101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Das Flat-File (CSV) Einschreibungsplugin kann für künftige Einschreibungen in der enrol_flatfile-Tabelle personenbezogene Daten speichern.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Die Einschreibung wird zum angegebenen Termin vorgenommen.';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Kurs-ID für die Einschreibung';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID der Rolle, die zugewiesen oder entfernt wird';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Zeit, bei der die Einschreibung endet';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Zeit, bei der die Einschreibung geändert wird';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Zeit, bei der die Einschreibung beginnt';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID der Person, der die Rolle zugeordnet wurde';
