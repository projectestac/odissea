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
 * Strings for component 'tool_lpmigrate', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Zugelassene Kurse';
$string['allowedcourses_help'] = 'Wählen Sie Kurse, die zum neuen Kompetenzrahmen migriert werden sollen. Wenn kein Kurs angegeben ist, wird die Migration für alle Kurse durchgeführt.';
$string['continuetoframeworks'] = 'Weiter zu Kompetenzrahmen';
$string['coursecompetencymigrations'] = 'Migration von Kurskompetenzen';
$string['coursemodulecompetencymigrations'] = 'Migration von Aktivitäts- und Materialkompetenzen';
$string['coursemodulesfound'] = 'Kursaktivitäten und -material gefunden';
$string['coursesfound'] = 'Kurse gefunden';
$string['coursestartdate'] = 'Kursbeginn';
$string['coursestartdate_help'] = 'Wenn diese Option aktiviert ist, werden Kurse mit einem Kursbeginn vor dem eingegebenen Datum werden nicht migriert.';
$string['disallowedcourses'] = 'Nicht zugelassene Kurse';
$string['disallowedcourses_help'] = 'Wählen Sie alle Kurse, die nicht auf den neuen Kompetenzrahmen migriert werden sollen.';
$string['errorcannotmigratetosameframework'] = 'Fehler: Die Migration kann nicht von einem auf denselben Kompetenzramen stattfinden.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Fehler: Keine Zuordnung zu einer Kompetenz in diesem Kompetenzrahmen möglich.';
$string['errors'] = 'Fehler';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Fehler beim Migrieren der Kurskompetenzen: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Fehler beim Migrieren der Aktivitäts- und Materialkompetenzen: {$a}';
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
$string['migratefrom_help'] = 'Wählen Sie den aktuell verwendeten Kompetenzrahmen aus.';
$string['migratemore'] = 'Mehr migrieren';
$string['migrateto'] = 'Migrieren nach';
$string['migrateto_help'] = 'Wählen Sie den neuen Kompetenzrahmen aus. Es ist nur möglich, einen nicht verborgenen Kompetenzrahmen auszuwählen.';
$string['migratingcourses'] = 'Kurse migrieren';
$string['missingmappings'] = 'Fehlende Zuordnungen';
$string['performmigration'] = 'Migration ausführen';
$string['pluginname'] = 'Kompetenzen-Migrationstool';
$string['privacy:metadata'] = 'Das Plugin \'Tool Kompetenzen-Migration\' speichert keine personenbezogenen Daten.';
$string['results'] = 'Ergebnisse';
$string['startdatefrom'] = 'Kursbeginn ab';
$string['unmappedin'] = 'Keine Zuordnung in {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Diese Kurs Kompetenzen konnten nicht entfernt werden.';
$string['warningcouldnotremovemodulecompetency'] = 'Die Aktivität oder Ressourcen Kompetenz konnte nicht entfernt werden.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Die Zielkurs Kompetenz existiert bereits.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Die Zielaktivität oder -ressourcen Kompetenz existiert bereits.';
$string['warnings'] = 'Warnungen';
