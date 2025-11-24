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
 * Strings for component 'booktool_wordimport', language 'fr', version '4.5'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Impossible d’ouvrir le fichier temporaire <b>{$a}</b>';
$string['embeddedimageswarning'] = 'Attention : ce fichier doit être ouvert à l’aide de Word 2020 ou Word 365 afin de gérer correctement les images intégrées.';
$string['encodedimageswarning'] = 'Attention : ce fichier contient des images encodées. Voir <a href="http://www.moodle2word.net/mod/page/view.php?id=143"> plus d’informations sur la façon de les reconvertir en images intégrées</a>.';
$string['exportbook'] = 'Exporter le livre vers Microsoft Word';
$string['exportchapter'] = 'Exporter ce chapitre vers Microsoft Word';
$string['exportformat'] = 'Format d’exportation.';
$string['exportformat_desc'] = 'Format d’exportation.';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Choisissez le format compatible Word 2020/365 si vous avez accès à Word 2019, Word 2020 ou Word 365. Sinon, choisissez Word 2010, qui nécessite un modèle Word externe afin de pouvoir convertir les images dans un format utilisable. Voir <a href="http://www.moodle2word.net/mod/page/view.php?id=143"> plus d’informations sur la façon de les reconvertir en images intégrées</a>.';
$string['heading1stylelevel'] = 'Niveau de titre pour le style « Titre 1 »';
$string['heading1stylelevel_desc'] = 'Niveau d’élément d’en-tête HTML avec lequel le style « Titre 1 » de Word doit être mis en correspondance';
$string['importchapters'] = 'Importer de Microsoft Word';
$string['insertionpoint'] = 'Insérer avant le chapitre actuel';
$string['insertionpoint_help'] = 'Insérer le contenu avant le chapitre actuel, en gardant tout le contenu existant';
$string['nochapters'] = 'Pas de chapitres de livres trouvés, donc impossible à exporter vers Microsoft Word';
$string['pluginname'] = 'Import/export de fichiers Microsoft Word (Livre)';
$string['privacy:metadata'] = 'L’outil d’importation/exportation de fichiers Microsoft Word pour les livres n’enregistre pas de données personnelles.';
$string['replacebook'] = 'Remplacer le livre';
$string['replacebook_help'] = 'Supprimer le contenu actuel du livre avant d’importer';
$string['replacechapter'] = 'Remplacer le chapitre actuel';
$string['replacechapter_help'] = 'Remplacer le contenu du chapitre avec le premier chapitre du fichier, mais garder tous les autres chapitres';
$string['settings'] = 'Paramètres d’importation de fichier Word';
$string['splitonsubheadings'] = 'Créer des sous-chapitres basés sur les niveaux de titres';
$string['splitonsubheadings_help'] = 'Les sous-chapitres seront crées à partir des styles « Titre 2 »';
$string['stylesheetunavailable'] = 'La feuille de style XSLT <b>{$a}</b> n’est pas disponible';
$string['transformationfailed'] = 'La transformation XSLT n’a pas réussi (<b>{$a}</b>)';
$string['wordfile'] = 'Fichier Microsoft Word';
$string['wordfile_help'] = 'Déposer le fichier <i>.docx</i> enregistré à partir de Microsoft Word ou LibreOffice';
$string['wordimport:export'] = 'Exporter le fichier Microsoft Word';
$string['wordimport:import'] = 'Importer le fichier Microsoft Word';
$string['xsltunavailable'] = 'Vous devez avoir la librairie XSLT installée dans PHP pour enregistrer ce fichier Word';
