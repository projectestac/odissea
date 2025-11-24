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
 * Strings for component 'files', language 'nl', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Hash van de inhoud';
$string['eventfileaddedtodraftarea'] = 'Bestand toegevoegd aan conceptzone';
$string['eventfiledeletedfromdraftarea'] = 'Bestand verwijderd uit conceptgebied';
$string['privacy:metadata:core_userkey'] = 'Een privé-token wordt gegenereerd en opgeslagen. Dit token kan worden gebruikt om Moodle-bestanden te openen zonder dat u zich hoeft aan te melden';
$string['privacy:metadata:file_conversion:usermodified'] = 'De gebruiker die de bestandsconversie heeft gestart.';
$string['privacy:metadata:file_conversions'] = 'Een record van de bestand_conversies uitgevoerd door een gebruiker.';
$string['privacy:metadata:files'] = 'Een record van de bestanden die door gebruikers zijn geüpload of gedeeld';
$string['privacy:metadata:files:author'] = 'De auteur van de inhoud van het bestand';
$string['privacy:metadata:files:contenthash'] = 'Een hash van de inhoud van het bestand';
$string['privacy:metadata:files:filename'] = 'De naam van het bestand in het bestandsgedeelte';
$string['privacy:metadata:files:filepath'] = 'Het pad naar het bestand in het bestandsgedeelte';
$string['privacy:metadata:files:filesize'] = 'De grootte van het bestand';
$string['privacy:metadata:files:license'] = 'De licentie voor de inhoud van het bestand';
$string['privacy:metadata:files:mimetype'] = 'Het MIME-type van het bestand';
$string['privacy:metadata:files:source'] = 'De bron van het bestand';
$string['privacy:metadata:files:timecreated'] = 'Het tijdstip waarop het bestand is gemaakt';
$string['privacy:metadata:files:timemodified'] = 'Het tijdstip waarop het bestand voor het laatst is gewijzigd';
$string['privacy:metadata:files:userid'] = 'De gebruiker die het bestand heeft gemaakt';
$string['redactor'] = 'Bestandsredactie';
$string['redactor:exifremover'] = 'EXIF verwijderen';
$string['redactor:exifremover:emptyremovetags'] = 'Verwijder tags kan niet leeg zijn!';
$string['redactor:exifremover:enabled'] = 'EXIF verwijderen inschakelen';
$string['redactor:exifremover:enabled_desc'] = 'Standaard ondersteunt de EXIF-verwijderaar enkel JPG-bestanden met PHP, GD of ExifTool als dit geconfigureerd is. PHP GD gebruiken vermindert de kwaliteit van de afbeelding .

Om de performantie van de EXIF-verwijderaar te vergroten kun je de ExifTool-instellingen hier onder aanpassen.

Meer informatie over het installeren van ExifTool kun je vinden op {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Redactie mislukt: kon bestand niet verwerken met ExifTool.';
$string['redactor:exifremover:failedprocessgd'] = 'Redactie mislukt: kon bestand niet verwerken met PHP GD.';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Ondersteunde MIME-types';
$string['redactor:exifremover:mimetype_desc'] = 'Om nieuwe MIME-types toe te voegen met je er voor zorgen dat ze bij de <a href="./tool/filetypes/index.php">Bestandstypes</a> staan.';
$string['redactor:exifremover:removetags'] = 'De EXIF-tag zal verwijderd worden';
$string['redactor:exifremover:removetags_desc'] = 'De EXIF-tags die verwijderd moeten worden.';
$string['redactor:exifremover:tag:all'] = 'Alle';
$string['redactor:exifremover:tag:gps'] = 'Enkel GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Redactie mislukt: ExifTool bestaat niet!';
$string['redactor:exifremover:toolpath'] = 'Pad naar ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Om de ExifTool te kunnen gebruiken, moet je het pad naar het uitvoerbaar bestand van de ExifTool geven.';
