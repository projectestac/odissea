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
 * Strings for component 'enrol_meta', language 'de', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Zu Gruppe hinzufügen';
$string['coursesort'] = 'Kursliste sortieren';
$string['coursesort_help'] = 'Diese Option legt fest, in welcher Reihenfolge die Quellkurse angeordnet werden, wenn der Quellkurs mit dem Zielkurs verknüpft wird.';
$string['creategroup'] = 'Neue Gruppe anlegen';
$string['defaultgroupnametext'] = 'Kurs {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Synchronisierung von Meta-Einschreibungen';
$string['linkedcourse'] = 'Kurs verbinden';
$string['meta:config'] = 'Meta-Einschreibungen konfigurieren';
$string['meta:selectaslinked'] = 'Kurs zur Meta-Verbindung auswählen';
$string['meta:unenrol'] = 'Gesperrte Nutzer/innen von Kursen abmelden';
$string['nosyncroleids'] = 'Nichtsynchronisierte Rollen';
$string['nosyncroleids_desc'] = 'Wählen Sie alle Rollen aus, die nicht zwischen dem Quellkurs und dem Zielkurs synchronisiert werden sollen.';
$string['pluginname'] = 'Meta-Einschreibung';
$string['pluginname_desc'] = 'Das Plugin \'Meta-Einschreibung\' synchronisiert die Einschreibungen und Rollen vom  Quellkurs in den Zielkurs.';
$string['privacy:metadata:core_group'] = 'Das Plugin \'Meta-Einschreibung\' kann eine neue Gruppe anlegen oder eine bereits vorhandene Gruppe verwenden, um Mitglieder vom Quellkurs hinzuzufügen.';
$string['samemetacourse'] = 'Sie können keine Meta-Verlinkung auf den gleichen Kurs vornehmen.';
$string['syncall'] = 'Eingeschriebene Nutzer/innen synchronisieren';
$string['syncall_desc'] = 'Wenn diese Option aktiviert ist, werden alle Nutzer/innen synchronisiert, auch wenn sie im Hauptkurs keine Rolle haben. Andernfalls werden nur Nutzer/innen synchronisiert, die im Hauptkurs mindestens eine Rolle haben.';
$string['unknownmetacourse'] = 'Unbekannter Kurzname des Meta-Kurses';
$string['wscannotcreategroup'] = 'Kein Recht zum Anlegen von Gruppen in verlinkter Kurs-ID {$a}.';
$string['wsinvalidcourse'] = 'Die Kurs-ID {$a} existiert nicht oder Sie haben nicht das Recht, eine Meta-Einschreibung zu hinzuzufügen..';
$string['wsinvalidmetacourse'] = 'Die Meta-Kurs-ID {$a} existiert nicht oder Sie haben nicht das Recht, eine Einschreibemethode hinzuzufügen.';
$string['wsnoinstancesspecified'] = 'Keine Instanzen angegeben';
