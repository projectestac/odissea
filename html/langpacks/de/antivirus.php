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
 * Strings for component 'antivirus', language 'de', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Verfügbare Antivirus-Plugins';
$string['antiviruscommonsettings'] = 'Antivirus-Einstellungen';
$string['antiviruses'] = 'Antivirus-Plugins';
$string['antivirussettings'] = 'Antivirus-Plugins verwalten';
$string['configantivirusplugins'] = 'Wählen Sie die Antivirus-Plugins, die Sie verwenden möchten, und ordnen Sie sie in der Reihenfolge der Anwendung an.';
$string['datainfecteddesc'] = 'Es wurden infizierte Daten festgestellt';
$string['datainfectedname'] = 'Daten infiziert';
$string['datastream'] = 'Daten';
$string['emailadditionalinfo'] = 'Zusätzliche Details, die von der Viren-Engine zurückgegeben wurden:';
$string['emailauthor'] = 'Hochgeladen von:';
$string['emailcontenthash'] = 'Inhaltshash:';
$string['emailcontenttype'] = 'Inhaltstyp:';
$string['emaildate'] = 'Hochgeladen am:';
$string['emailfilename'] = 'Dateiname:';
$string['emailfilesize'] = 'Dateigröße:';
$string['emailgeoinfo'] = 'Standort:';
$string['emailinfectedfiledetected'] = 'Infizierte Datei gefunden';
$string['emailipaddress'] = 'IP-Adresse:';
$string['emailreferer'] = 'Referer:';
$string['emailreport'] = 'Bericht:';
$string['emailscanner'] = 'Scanner:';
$string['emailscannererrordetected'] = 'Scanner-Fehler aufgetreten';
$string['emailsubject'] = '{$a} :: Antivirus-Nachricht';
$string['enablequarantine'] = 'Quarantäne aktivieren';
$string['enablequarantine_help'] = 'Wenn diese Option aktiviert ist, werden alle Dateien, die als Viren erkannt werden, zur späteren Überprüfung in einem Quarantäneordner gespeichert ([dataroot]/{$a}).
Das Hochladen in Moodle wird weiterhin fehlschlagen.
Wenn ein Virenscan auf Dateisystemebene vorhanden ist, sollte der Quarantäneordner von der Antivirenprüfung ausgeschlossen werden, um zu vermeiden, da sonst die unter Quarantäne gestellten Dateien erkannt werden.';
$string['fileinfecteddesc'] = 'Es wurde eine infizierte Datei entdeckt.';
$string['fileinfectedname'] = 'Datei infiziert';
$string['notifyemail'] = 'Antivirus-Benachrichtigung';
$string['notifyemail_help'] = 'E-Mail-Adresse für Systemnachrichten, sobald ein Virus erkannt wird. Wenn Sie dieses Feld leer lassen, werden allen Administrator/innen benachrichtigt.';
$string['privacy:metadata'] = 'Das Antivirus-System speichert keine personenbezogenen Daten.';
$string['quarantinedfiles'] = 'Antivirus-Dateien in Quarantäne';
$string['quarantinedisabled'] = 'Quarantäne ist deaktiviert, Die Datei wird nicht gespeichert';
$string['quarantinetime'] = 'Maximale Quarantänedauer';
$string['quarantinetime_desc'] = 'Quarantänedateien werden gelöscht, wenn sie älter als der angegebene Zeitraum sind.';
$string['taskcleanup'] = 'Quarantänedateien löschen';
$string['unknown'] = 'Unbekannt';
$string['virusfound'] = '{$a->item} wurde von einem Virenprüfprogramm analysiert und als infiziert eingeschätzt!';
