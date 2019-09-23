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
 * Strings for component 'logstore_database', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Puffergröße';
$string['buffersize_help'] = 'Anzahl der Logeinträge, die als Stapel verarbeitet werden sollen. Dies verbessert die Performance.';
$string['conectexception'] = 'Keine Verbindung zur Datenbank';
$string['create'] = 'Anlegen';
$string['databasecollation'] = 'Optimierung der Datenbank';
$string['databasehandlesoptions'] = 'Datenbank verarbeitet Optionen';
$string['databasehandlesoptions_help'] = 'Diese Einstellung erlaubt, dass die externe Datenbank ihre eigenen Optionen verarbeitet.';
$string['databasepersist'] = 'Bestehende Datenbankverbindungen';
$string['databaseschema'] = 'Datenbank-Schema';
$string['databasesettings'] = 'Datenbank-Einstellungen';
$string['databasesettings_help'] = 'Verbindungsdetails für die externe Logdatenbank: {$a}';
$string['databasetable'] = 'Datenbank-Tabelle';
$string['databasetable_help'] = 'Name der Tabelle in der die Logs gespeichert werden. Die Tabelle sollte die gleiche Struktur haben wie die von \'Logdaten Standard\' (mdl_logstore_standard_log).';
$string['filters'] = 'Logdaten filtern';
$string['filters_help'] = 'Diese Option nimmt Aktivitäten aus, die nicht aufgezeichnet werden sollen.';
$string['includeactions'] = 'Aktivitäten mit diesen Typen einbeziehen';
$string['includelevels'] = 'Aktivitäten mit diesen Bildungsstufen einbeziehen';
$string['logguests'] = 'Aktionen von Gästen einbeziehen';
$string['other'] = 'Andere';
$string['participating'] = 'Teilnehmend';
$string['pluginname'] = 'Logdaten Extern';
$string['pluginname_desc'] = 'Dieses Plugin speichert die Logdaten in einer externen Datenbank.';
$string['privacy:metadata:log'] = 'Sammlung letzter Ereignisse';
$string['privacy:metadata:log:anonymous'] = 'Ob das Ereignis als anonym gekennzeichnet wurde';
$string['privacy:metadata:log:eventname'] = 'Ereignsname';
$string['privacy:metadata:log:ip'] = 'IP-Adresse, die zum Zeitpunkt des Ereignisses genutzt wurde';
$string['privacy:metadata:log:origin'] = 'Ursprung des Ereignisses';
$string['privacy:metadata:log:other'] = 'Zusätzliche Information zum Ereignis';
$string['privacy:metadata:log:realuserid'] = 'ID des tatsächlichen Nutzers wenn er im Namen eines anderen Nutzers tätig war.';
$string['privacy:metadata:log:relateduserid'] = 'ID des Nutzers, auf den sich Ereignis bezieht';
$string['privacy:metadata:log:timecreated'] = 'Zeitpunkt des Ereignisses';
$string['privacy:metadata:log:userid'] = 'ID des Nutzers, der Ereignis ausgelöst hat';
$string['read'] = 'Lesen';
$string['tablenotfound'] = 'Die angegebene Tabelle wurde nicht gefunden';
$string['teaching'] = 'Unterrichtend';
$string['testingsettings'] = 'Datenbank-Einstellungen prüfen...';
$string['testsettings'] = 'Verbindungstest';
$string['update'] = 'Aktualisierung';
