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
 * Strings for component 'enrol_meta', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_meta
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Zu Gruppe hinzufügen';
$string['coursesort'] = 'Kursliste sortieren';
$string['coursesort_help'] = 'Diese Option legt fest, ob die Liste der verknüpfbaren Kurse sortiert angezeigt wird. Die Sortierung ist alphabetisch oder in der Reihenfolge, die über \'Website-Administration > Kurse > Kurse und Kursbereiche verwalten\' festgelegt wurde.';
$string['creategroup'] = 'Neue Gruppe anlegen';
$string['defaultgroupnametext'] = '{$a->name} Kurs {$a->increment}';
$string['enrolmetasynctask'] = 'Meta-Einschreibung Synchronisierungsaufgabe';
$string['linkedcourse'] = 'Kurs verbinden';
$string['meta:config'] = 'Meta-Einschreibungen konfigurieren';
$string['meta:selectaslinked'] = 'Kurs zur Meta-Verbindung auswählen';
$string['meta:unenrol'] = 'Gesperrte Nutzer/innen aus Kursen abmelden';
$string['nosyncroleids'] = 'Nichtsynchronisierte Rollen';
$string['nosyncroleids_desc'] = 'Standardmäßig werden alle kursbezogenen Rollenzuweisungen auf verbundene Kurse übertragen (from parent to child). Die ausgewählten Rollen werden nicht in die Synchronisation einbezogen. Die zur Synchronisation vorgesehenen Rollen werden mit der nächsten Ausführung des Cronjobs aktualisiert.';
$string['pluginname'] = 'Meta-Einschreibung';
$string['pluginname_desc'] = 'Das Plugin \'Meta-Einschreibung\' synchronisiert die Einschreibungen und Rollen in zwei unterschiedlichen Kursen.';
$string['privacy:metadata:core_group'] = 'Das Plugin zur Meta-Einschreibung kann eine neue Gruppe anlegen oder eine bereits vorhandene Gruppe verwenden, um alle Mitglieder der globalen Gruppe hinzuzufügen.';
$string['syncall'] = 'Eingeschriebene Nutzer/innen synchronisieren';
$string['syncall_desc'] = 'Wenn diese Option aktiviert ist, werden alle Nutzer/innen synchronisiert, auch wenn sie im Hauptkurs keine Rolle haben. Wenn diese Option deaktiviert ist, werden nur Nutzer/innen in Metakurse synchronisiert, die im Hauptkurs mindestens eine Rolle besitzen.';
