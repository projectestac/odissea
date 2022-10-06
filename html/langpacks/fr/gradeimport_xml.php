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
 * Strings for component 'gradeimport_xml', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   gradeimport_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Erreur - format XML incorrect';
$string['errduplicategradeidnumber'] = 'Erreur - il y a deux notes de même identifiant « {$a} » dans ce cours. Cela ne devrait pas être possible.';
$string['errduplicateidnumber'] = 'Erreur - identifiant en double';
$string['errincorrectgradeidnumber'] = 'Erreur - l\'identifiant « {$a} » du fichier d\'importation ne correspond à aucun élément d\'évaluation.';
$string['errincorrectidnumber'] = 'Erreur - identifiant incorrect';
$string['errincorrectuseridnumber'] = 'Erreur - l\'identifiant « {$a} » du fichier d\'importation ne correspond à aucun utilisateur.';
$string['error'] = 'Des erreurs sont survenues';
$string['errorduringimport'] = 'Une erreur est survenue lors de l\'importation : {$a}';
$string['fileurl'] = 'URL du fichier distant';
$string['fileurl_help'] = 'Le champ de l\'URL de fichier distant permet de récupérer des données d\'un serveur distant, par exemple d\'un système d\'informations.';
$string['importxml'] = 'Importation XML';
$string['importxml_help'] = 'Les notes peuvent être importées via un fichier XML contenant les identifiants numériques des utilisateurs et les identifiants numériques des activités. Pour obtenir un exemple de format correct, exportez quelques notes en format XML et consultez le fichier obtenu.';
$string['pluginname'] = 'Fichier XML';
$string['privacy:metadata'] = 'Le plugin d\'importation de notes Fichier XML n\'enregistre aucune donnée personnelle.';
$string['xml:publish'] = 'Publier les notes importées depuis un fichier XML';
$string['xml:view'] = 'Importer des notes à partir d\'un fichier XML';
