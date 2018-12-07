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
 * Strings for component 'repository_googledocs', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Interne et externe';
$string['cachedef_folder'] = 'IDs de fichier Google pour les dossiers dans le compte système.';
$string['clientid'] = 'ID client';
$string['configplugin'] = 'Configuration plugin Google Drive';
$string['defaultreturntype'] = 'Type retourné par défaut';
$string['docsformat'] = 'Format d\'importation de document texte à importer par défaut';
$string['drawingformat'] = 'Format d\'importation de dessin par défaut';
$string['external'] = 'Externe (liens seulement enregistrés dans Moodle)';
$string['fileoptions'] = 'Les types et réglages par défaut des fichiers retournés peuvent être configurés ici. Tous les fichiers liés vers l\'extérieur seront modifiés de sorte que le compte système Moodle en sera propriétaire.';
$string['googledocs:view'] = 'Consulter un dépôt Google Drive';
$string['importformat'] = 'Configurer les formats d\'importation de Google par défaut';
$string['internal'] = 'Interne (fichiers enregistrés dans Moodle)';
$string['issuer'] = 'Service OAuth 2';
$string['issuer_help'] = 'Sélectionner le service OAuth 2 configuré pour communiquer avec l\'API Google Drive. Si le service n\'existe pas encore, il est nécessaire de le créer.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Lien vers la configuration Services OAuth">Configuration services OAuth 2</a>';
$string['oauthinfo'] = '<p>Pour utiliser ce plugin, vous devez d\'abord enregistrer votre site auprès de Google, suivant la documentation de <a href="{$a->docsurl}">configuration Google OAuth 2.0</a>.</p><p>Au cours du processus d\'enregistrement, vous devrez saisir l\'URL suivante comme « Authorized Redirect URIs » :</p><p>{$a->callbackurl}</p><p>Après l\'enregistrement, vous recevrez un ID client et un secret que vous pourrez utiliser pour configurer d\'autres plugins Google Drive et Picasa.</p><p>Vous devrez également activer le service « Drive API ».</p>';
$string['owner'] = 'Propriété de {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'Format d\'importation de présentation par défaut';
$string['privacy:metadata:repository_googledocs'] = 'Le plugin de dépôt Google Drive n\'enregistre aucune donnée personnelle, mais transmet des données des utilisateurs de Moodle vers le système distant.';
$string['searchfor'] = 'Recherche de {$a}';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'Accès non configuré. Assurez-vous que le service « Drive API » est activé.';
$string['spreadsheetformat'] = 'Format d\'importation de feuille de calcul par défaut';
$string['supportedreturntypes'] = 'Fichiers supportés';
