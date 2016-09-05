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
 * Strings for component 'tool_lpmigrate', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Zugelassene Kurse';
$string['allowedcourses_help'] = 'Wenn zumindest ein Kurs ausgewählt wurde, wird die Migration nur für die hier aufgelisteten Kurse durchgeführt.';
$string['coursemodulesfound'] = 'Kursaktivitäten gefunden';
$string['coursesfound'] = 'Gefundene Kurse';
$string['coursestartdate'] = 'Kursstartdatum';
$string['coursestartdate_help'] = 'Kurse mit einem Startdatum vor dem eingegebenen Datum werden nicht migriert.';
$string['disallowedcourses'] = 'Nicht zugelassene Kurse';
$string['errors'] = 'Fehler';
$string['excludethese'] = 'Diese ausschließen';
$string['explanation'] = 'Diese Anwendung kann benutzt werden, um einen Kompetenzrahmen zu einer neueren Version zu aktualisieren. Es sucht in Kursen und Aktivitäten nach Kompetenzen , die im alten Kompetenzrahmen aufgelistet waren, und stellt die Links auf den neuen Rahmen um.
Es wird nicht empfohlen, die alte Liste von Kompetenzen direkt zu bearbeiten, weil das auch alle Kompetenzen verändern würde, die schon in den Lernplänen der Teilnehmer vergeben wurden.
Üblicherweise wird die neue Version des Kompetenzrahmens importiert, der alte Kompetenzrahmen unsichtbar geschaltet und dann wird diese Anwendung zur Migration der neuen Kurse zu dem neuen Kompetenzen verwendet.';
$string['findingcoursecompetencies'] = 'Kurskompetenzen suchen';
$string['findingmodulecompetencies'] = 'Aktivitäts- und Ressourcenaktivitäten suchen';
$string['frameworks'] = 'Kompetenzrahmen';
$string['limittothese'] = 'Begrenzen auf';
$string['lpmigrate:frameworksmigrate'] = 'Kompetenzrahmen migrieren';
$string['migrateframeworks'] = 'Kompetenzrahmen migrieren';
$string['migratefrom'] = 'Migrieren von';
$string['migratemore'] = 'Mehr migrieren';
$string['migrateto'] = 'Migrieren nach';
$string['migratingcourses'] = 'Kurse migrieren';
$string['missingmappings'] = 'Fehlende Zuordnungen';
$string['performmigration'] = 'Migration ausführen';
$string['pluginname'] = 'Kompetenzen-Migrationstool';
$string['results'] = 'Ergebnisse';
$string['startdatefrom'] = 'Startdatum ab';
$string['unmappedin'] = 'Keine Zuordnung in {$a}';
$string['warnings'] = 'Warnungen';
