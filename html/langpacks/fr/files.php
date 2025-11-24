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
 * Strings for component 'files', language 'fr', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Hâchage du contenu';
$string['eventfileaddedtodraftarea'] = 'Fichier ajouté à la zone brouillon';
$string['eventfiledeletedfromdraftarea'] = 'Fichier supprimé de la zone de brouillon';
$string['privacy:metadata:core_userkey'] = 'Un jeton privé est généré et enregistré. Ce jeton peut être utilisé pour accéder aux fichiers de Moodle sans nécessiter de connexion via mot de passe.';
$string['privacy:metadata:file_conversion:usermodified'] = 'L’utilisateur qui a commencé la conversion du fichier.';
$string['privacy:metadata:file_conversions'] = 'Un enregistrement des conversions de fichiers effectuées par un utilisateur.';
$string['privacy:metadata:files'] = 'Un enregistrement des fichiers déposés ou partagés par des utilisateurs';
$string['privacy:metadata:files:author'] = 'L’auteur du contenu du fichier';
$string['privacy:metadata:files:contenthash'] = 'Un hachage du contenu du fichier';
$string['privacy:metadata:files:filename'] = 'Le nom du fichier dans sa zone de fichiers';
$string['privacy:metadata:files:filepath'] = 'Le chemin du fichier dans sa zone de fichiers';
$string['privacy:metadata:files:filesize'] = 'La taille du fichier';
$string['privacy:metadata:files:license'] = 'La licence du contenu du fichier';
$string['privacy:metadata:files:mimetype'] = 'Le type MIME du fichier';
$string['privacy:metadata:files:source'] = 'La source du fichier';
$string['privacy:metadata:files:timecreated'] = 'La date et l’heure de création du fichier';
$string['privacy:metadata:files:timemodified'] = 'La date et l’heure de la dernière modification du fichier';
$string['privacy:metadata:files:userid'] = 'L’utilisateur qui a créé le fichier';
$string['redactor'] = 'Caviardage de fichiers';
$string['redactor:exifremover'] = 'Nettoyeur EXIF';
$string['redactor:exifremover:emptyremovetags'] = 'Les balises à supprimer ne peuvent pas être vides !';
$string['redactor:exifremover:enabled'] = 'Activer le nettoyeur EXIF';
$string['redactor:exifremover:enabled_desc'] = 'Par défaut, le nettoyeur EXIF ne prend en charge les fichiers JPG qu’avec PHP GD ou ExifTool, s’il est configuré.
L’utilisation de PHP GD à cet effet peut dégrader la qualité de l’image.

Pour améliorer la performance du nettoyeur EXIF, veuillez configurer ExifTool ci-dessous.

Plus d’info sur l’installation de ExifTool se trouve sur {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Échec du caviardage : impossible de traiter le fichier avec ExifTool !';
$string['redactor:exifremover:failedprocessgd'] = 'Échec du caviardage : impossible de traiter le fichier avec PHP gd !';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Types MIME pris en charge';
$string['redactor:exifremover:mimetype_desc'] = 'Caviardage de fichiers';
$string['redactor:exifremover:removetags'] = 'Les tags EXIF à supprimer.';
$string['redactor:exifremover:removetags_desc'] = 'Les tags EXIF qui doivent être supprimés.';
$string['redactor:exifremover:tag:all'] = 'Tous';
$string['redactor:exifremover:tag:gps'] = 'Seulement GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Caviardage échoué : ExifTool n’existe pas !';
$string['redactor:exifremover:toolpath'] = 'Chemin d’accès à <em>ExifTool</em>';
$string['redactor:exifremover:toolpath_desc'] = 'Pour utiliser ExifTool, veuillez indique le chemin d’accès du programme « ExifTool ». En général quelque chose comme « /usr/bin/exiftool ».';
