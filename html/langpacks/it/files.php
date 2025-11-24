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
 * Strings for component 'files', language 'it', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Hash del contenuto';
$string['eventfileaddedtodraftarea'] = 'File aggiunto all\'area bozze';
$string['eventfiledeletedfromdraftarea'] = 'Eliminazione file dall\'area draft';
$string['privacy:metadata:core_userkey'] = 'Token privato generato e memorizzato. È possibile usare il token per accedere ai file di Moodle senza che sia necessario effettuare il login.';
$string['privacy:metadata:file_conversion:usermodified'] = 'Utente che ha avviato la conversione file';
$string['privacy:metadata:file_conversions'] = 'Record delle conversioni di file eseguite da un utente.';
$string['privacy:metadata:files'] = 'Un record dei file caricati o condivisi dagli utenti';
$string['privacy:metadata:files:author'] = 'Autore del contenuto del file';
$string['privacy:metadata:files:contenthash'] = 'Hash del contenuto del file';
$string['privacy:metadata:files:filename'] = 'Nome del file nell\'area file di appartenenza';
$string['privacy:metadata:files:filepath'] = 'Percorso del file nell\'area file di appartenenza.';
$string['privacy:metadata:files:filesize'] = 'Dimensione del file';
$string['privacy:metadata:files:license'] = 'Licenza del file';
$string['privacy:metadata:files:mimetype'] = 'Tipo MIME del file.';
$string['privacy:metadata:files:source'] = 'Sorgente del file';
$string['privacy:metadata:files:timecreated'] = 'Orario di creazione del file';
$string['privacy:metadata:files:timemodified'] = 'Orario della modifica più recente del file.';
$string['privacy:metadata:files:userid'] = 'Utente che ha creato il file';
$string['redactor'] = 'Redazione del file';
$string['redactor:exifremover'] = 'Rimozione EXIF';
$string['redactor:exifremover:emptyremovetags'] = '';
$string['redactor:exifremover:enabled'] = 'Abilita rimozione EXIF';
$string['redactor:exifremover:enabled_desc'] = 'Di default, la rimozione EXIF supporta solo file JPG utilizzando PHP GD o ExifTool, se configurato.

Per migliorare le prestazioni di rimozione EXIF, configurare le impostazioni di ExifTool di seguito.

Per maggiori informazioni sull\'installazione di ExifTool, visitare {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Redazione non andata a buon fine: non è stato possibile elaborare il file con ExifTool.';
$string['redactor:exifremover:failedprocessgd'] = 'Redazione non andata a buon fine: non è stato possibile elaborare il file con PHP gd!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Tipi MIME supportati';
$string['redactor:exifremover:mimetype_desc'] = 'Per aggiungere nuovi tipi MIME, assicurarsi che siano inclusi nei <a href="./tool/filetypes/index.php">Tipi di file</a>.';
$string['redactor:exifremover:removetags'] = 'I tag EXIF che verranno rimossi.';
$string['redactor:exifremover:removetags_desc'] = 'I tag EXIF che devono essere rimossi.';
$string['redactor:exifremover:tag:all'] = 'Tutti';
$string['redactor:exifremover:tag:gps'] = 'Solo GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Redazione non andata a buon fine: ExifTool non esiste.';
$string['redactor:exifremover:toolpath'] = 'Percorso di ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Per utilizzare ExifTool, specificare il percorso all\'eseguibile ExifTool.
In genere, nei sistemi Unix/Linux, il percorso è /usr/bin/exiftool.';
