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
 * Strings for component 'files', language 'ro', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Identificator conținut (hash)';
$string['eventfileaddedtodraftarea'] = 'Fișier adăugat la ciornă';
$string['eventfiledeletedfromdraftarea'] = 'Fișier șters din zona de ciorne';
$string['privacy:metadata:core_userkey'] = 'Un token privat este generat și stocat. Acest simbol poate fi utilizat pentru a accesa fișierele Moodle fără a fi nevoie să vă conectați.';
$string['privacy:metadata:file_conversion:usermodified'] = 'Utilizatorul care a început conversia fișierului.';
$string['privacy:metadata:file_conversions'] = 'O înregistrare a conversiei fișierelor efectuată de un utilizator.';
$string['privacy:metadata:files'] = 'O evidență a fișierelor încărcate sau distribuite de utilizatori';
$string['privacy:metadata:files:author'] = 'Autorul conținutului fișierului';
$string['privacy:metadata:files:contenthash'] = 'Un hash al conținutului fișierului';
$string['privacy:metadata:files:filename'] = 'Numele fișierului din zona de fișiere';
$string['privacy:metadata:files:filepath'] = 'Calea către fișier în zona de fișiere';
$string['privacy:metadata:files:filesize'] = 'Dimensiunea fișierului';
$string['privacy:metadata:files:license'] = 'Licența conținutului fișierului';
$string['privacy:metadata:files:mimetype'] = 'Tipul MIME al fișierului';
$string['privacy:metadata:files:source'] = 'Sursa fișierului';
$string['privacy:metadata:files:timecreated'] = 'Când a fost creat fișierul';
$string['privacy:metadata:files:timemodified'] = 'Când a fost modificat fișierul ultima dată';
$string['privacy:metadata:files:userid'] = 'Utilizatorul care a creat fișierul';
$string['redactor'] = 'Editare fișier';
$string['redactor:exifremover'] = 'Eliminarea EXIF';
$string['redactor:exifremover:emptyremovetags'] = 'Nu pot fi eliminate etichetele goale!';
$string['redactor:exifremover:enabled'] = 'Activare EXIF remover';
$string['redactor:exifremover:enabled_desc'] = 'În mod implicit, EXIF Remover acceptă numai fișiere JPG folosind PHP GD sau ExifTool dacă este configurat.
Acest lucru degradează calitatea imaginii și elimină eticheta de orientare.

Pentru a îmbunătăți performanța EXIF Remover, vă rugăm să configurați setările ExifTool de mai jos.

Mai multe informații despre instalarea ExifTool pot fi găsite la {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Editare eșuată: nu s-a putut procesa fișierul cu ExifTool!';
$string['redactor:exifremover:failedprocessgd'] = 'Editare eșuată: nu s-a putut procesa fișierul cu PHP gd!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'TIpuri MIME acceptate';
$string['redactor:exifremover:mimetype_desc'] = 'Pentru a adăuga tipuri noi de MIME, aisgurați-vă că sunt incluse în <a href="./tool/filetypes/index.php">File Types</a>.';
$string['redactor:exifremover:removetags'] = 'Etichetele EXIF care vor fi șterse.';
$string['redactor:exifremover:removetags_desc'] = 'Etichetele EXIF care trebuie să fie eliminate.';
$string['redactor:exifremover:tag:all'] = 'Toate';
$string['redactor:exifremover:tag:gps'] = 'Doar GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Editare eșuată: ExifTool nu există!';
$string['redactor:exifremover:toolpath'] = 'Calea către ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Pentru a utiliza ExifTool, vă rugăm să furnizați calea către ExifTool executabil.
De obicei, în sistemele Unix/Linux, calea este /usr/bin/exiftool.';
