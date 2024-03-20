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
 * Strings for component 'repository_dropbox', language 'fr', version '4.1'.
 *
 * @package     repository_dropbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clef API Dropbox';
$string['cachelimit'] = 'Limite du cache';
$string['cachelimit_info'] = 'Indiquez la taille maximale des fichiers (en octets) à mettre en cache sur le serveur pour les alias/raccourcis Dropbox. Les fichiers en cache seront fournis si la source n’est plus disponible. Une valeur nulle ou vide indique que tous les fichiers seront mis en cache, quelle que soit leur taille.';
$string['configplugin'] = 'Configuration Dropbox';
$string['crontask'] = 'Traitement en tâche de fond du dépôt Dropbox';
$string['dropbox'] = 'Dropbox';
$string['dropbox:view'] = 'Consulter un dépôt Dropbox';
$string['instruction'] = 'Vous pouvez obtenir votre clef API et votre secret sur <a href="https://www.dropbox.com/developers/apps">Dropbox developers</a>. Indiquer « Full Dropbox » dans les réglages lors de la configuration de la clef.';
$string['issuer'] = 'Service OAuth 2';
$string['issuer_help'] = 'Sélectionner le service OAuth 2 configuré pour communiquer avec l’API de Dropbox. Si le service n’existe pas encore, il faut le créer.';
$string['logoutdesc'] = '(Déconnexion après avoir utilisé Dropbox)';
$string['notitle'] = 'sans titre';
$string['oauth2redirecturi'] = 'URI de redirection OAuth 2';
$string['pluginname'] = 'Dropbox';
$string['privacy:metadata:repository_dropbox'] = 'Le plugin de dépôt DropBox n’enregistre aucune donnée personnelle, mais transmet des données des utilisateurs de Moodle vers le système distant.';
$string['privacy:metadata:repository_dropbox:query'] = 'La requête de recherche utilisateur du dépôt Dropbox.';
$string['remember'] = 'Se souvenir de moi';
$string['secret'] = 'Secret Dropbox';
