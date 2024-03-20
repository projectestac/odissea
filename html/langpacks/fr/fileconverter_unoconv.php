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
 * Strings for component 'fileconverter_unoconv', language 'fr', version '4.1'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Chemin d’accès du convertisseur de documents <em>unoconv</em>';
$string['pathtounoconv_help'] = 'Chemin d’accès du programme « unoconv ». Ce programme permet de convertir les documents d’un format supporté par LibreOffice à un autre. Ce réglage est optionnel. Cependant, s’il est renseigné correctement, Moodle utilisera ce programme pour convertir automatiquement les documents au besoin. Notamment, cette fonctionnalité est utilisée pour permettre l’annotation PDF des devoirs avec un plus grand nombre de types de fichiers.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Le plugin format de données Unoconv n’enregistre aucune donnée personnelle.';
$string['test_unoconv'] = 'Tester le chemin d’accès à <em>unoconv</em>';
$string['test_unoconvdoesnotexist'] = 'Le chemin d’accès à <em>unoconv</em> ne pointe pas vers le programme correct. Veuillez contrôler le réglage.';
$string['test_unoconvdownload'] = 'Télécharger le fichier PDF de test.';
$string['test_unoconvempty'] = 'Le chemin d’accès à <em>unoconv</em> n’est pas défini. Veuillez contrôler ce réglage.';
$string['test_unoconvisdir'] = 'Le chemin d’accès à <em>unoconv</em> pointe vers un dossier. Veuillez inclure le nom du programme dans le chemin indiqué.';
$string['test_unoconvnotestfile'] = 'Le document de test à convertir en PDF est manquant.';
$string['test_unoconvnotexecutable'] = 'Le chemin d’accès à <em>unoconv</em> pointe vers un programme qui n’est pas exécutable.';
$string['test_unoconvok'] = 'Le chemin d’accès à <em>unoconv</em> est configuré adéquatement.';
$string['test_unoconvversionnotsupported'] = 'La version installée de <em>unoconv</em> n’est pas supportée.';
