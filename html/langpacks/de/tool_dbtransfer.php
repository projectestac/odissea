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
 * Strings for component 'tool_dbtransfer', language 'de', version '3.11'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Verfügbare Datenbanktreiber für die Migration';
$string['cliheading'] = 'Datenbank-Migration - während der Migration darf kein Serverzugriff stattfinden!';
$string['climigrationnotice'] = 'Aktuell läuft eine Datenbank-Migration - bitte warten Sie, bis die Migration abgeschlossen ist und die/der Administrator/in die Konfiguration aktualisiert und die Datei $CFG->dataroot/climaintenance.html gelöscht hat.';
$string['convertinglogdisplay'] = 'Logging-Anzeigen werden konvertiert';
$string['dbexport'] = 'Datenbank-Export';
$string['dbtransfer'] = 'Datenbank-Migration';
$string['enablemaintenance'] = 'Wartungsmodus aktivieren';
$string['enablemaintenance_help'] = 'Diese Option aktiviert den Wartungsmodus während und nach der Datenbankmigration. Bis zum Anschluss der Migration kann niemand auf die Plattform zugreifen. Beachten Sie, dass die Datei $CFG->dataroot/climaintenance.html manuell gelöscht werden muss, nachdem die Einstellungen in der config.php aktualisiert wurden und die Plattform wieder genutzt werden soll.';
$string['exportdata'] = 'Daten exportieren';
$string['notargetconectexception'] = 'Die Zieldatenbank kann nicht verbunden werden';
$string['options'] = 'Optionen';
$string['pluginname'] = 'Datenbank-Transfer';
$string['privacy:metadata'] = 'Das Plugin \'Datenbank-Transfer\' speichert keine personenbezogenen Daten.';
$string['targetdatabase'] = 'Zieldatenbank';
$string['targetdatabasenotempty'] = 'Die Zieldatenbank darf keine Tabellen mit dem gewählten Prefix enthalten!';
$string['transferdata'] = 'Daten übertragen';
$string['transferdbintro'] = 'Dieses Skript überträgt die Inhalte dieser Datenbank vollständig in eine andere Datenbank. Es wird oft benutzt, um Daten in einen anderen Datenbanktyp zu umzuwandeln.';
$string['transferdbtoserver'] = 'Diese Moodle-Datenbank auf einen anderen Server übertragen';
$string['transferringdbto'] = 'Diese Datenbank in die {$a->dbtype} Datenbank \'{$a->dbname}\' auf \'{$a->dbhost}\' übertragen';
