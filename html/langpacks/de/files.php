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
 * Strings for component 'files', language 'de', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Hash des Inhalts';
$string['eventfileaddedtodraftarea'] = 'Datei zum Entwurfsbereich hinzugefügt';
$string['eventfiledeletedfromdraftarea'] = 'Datei aus dem Entwurfsbereich gelöscht';
$string['privacy:metadata:core_userkey'] = 'Ein privates Token wird erstellt und gespeichert. Es wird für einen Zugriff auf private Dateien ohne Login genutzt.';
$string['privacy:metadata:file_conversion:usermodified'] = 'Person, die die Dateiumwandlung gestartet hat.';
$string['privacy:metadata:file_conversions'] = 'Eine Aufzeichnung der von einer Person durchgeführten Dateiumwandlungen';
$string['privacy:metadata:files'] = 'Aufzeichnung der Dateien, die von einem Nutzer hochgeladen und geteilt wurden.';
$string['privacy:metadata:files:author'] = 'Autor des Dateiinhalts';
$string['privacy:metadata:files:contenthash'] = 'Hash des Dateiinhalts';
$string['privacy:metadata:files:filename'] = 'Name der Datei in dem Ablagebereich für Dateien';
$string['privacy:metadata:files:filepath'] = 'Pfad zur Datei in der Dateiablage';
$string['privacy:metadata:files:filesize'] = 'Größe der Datei';
$string['privacy:metadata:files:license'] = 'Lizenz für den Dateiinhalt';
$string['privacy:metadata:files:mimetype'] = 'MIME-Typ der Datei';
$string['privacy:metadata:files:source'] = 'Quelle der Datei';
$string['privacy:metadata:files:timecreated'] = 'Zeit der Dateierstellung';
$string['privacy:metadata:files:timemodified'] = 'Zeit der letzten Dateiänderung';
$string['privacy:metadata:files:userid'] = 'Person, die die Datei erstellt hat';
$string['redactor'] = 'Nachbearbeitung';
$string['redactor:exifremover'] = 'EXIF Remover';
$string['redactor:exifremover:emptyremovetags'] = 'Die zu entfernenden Tags dürfen nicht leer sein!';
$string['redactor:exifremover:enabled'] = 'EXIF Remover aktivieren';
$string['redactor:exifremover:enabled_desc'] = 'Der EXIF Remover bearbeitet JPG-Dateien standardmäßig mit der PHP-Extension GD, wodurch die Bildqualität beeinträchtigt werden kann.

Um die Leistung des EXIF Remover zu verbessern, kann das ExifTool verwendet werden. Konfigurieren Sie bitte die folgenden ExifTool-Einstellungen.

Weitere Informationen zur Installation von ExifTool finden Sie unter {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Bearbeitung fehlgeschlagen: Datei konnte nicht mit ExifTool verarbeitet werden!';
$string['redactor:exifremover:failedprocessgd'] = 'Bearbeitung fehlgeschlagen: Datei konnte nicht mit PHP GD verarbeitet werden!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Unterstützte MIME-Typen';
$string['redactor:exifremover:mimetype_desc'] = 'Um neue MIME-Typen hinzuzufügen, stellen Sie sicher, dass sie in den <a href="./tool/filetypes/index.php">Dateitypen</a> enthalten sind.';
$string['redactor:exifremover:removetags'] = 'EXIF-Tags, die entfernt werden sollen';
$string['redactor:exifremover:removetags_desc'] = 'Wählen Sie die EXIF-Tags aus, die entfernt werden sollen.';
$string['redactor:exifremover:tag:all'] = 'Alle';
$string['redactor:exifremover:tag:gps'] = 'Nur GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Bearbeitung fehlgeschlagen: ExifTool existiert nicht!';
$string['redactor:exifremover:toolpath'] = 'Pfad zum ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Um das ExifTool zu verwenden, geben Sie bitte den Pfad zur ausführbaren Datei ExifTool an.
Auf Unix-/Linux-Systemen ist der Pfad normalerweise: /usr/bin/exiftool';
