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
 * Strings for component 'repository_picasa', language 'fr', version '4.4'.
 *
 * @package     repository_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID client';
$string['configplugin'] = 'Configuration Picasa';
$string['oauthinfo'] = '<p>Pour utiliser ce plugin, vous devez d’abord enregistrer votre site auprès de Google, suivant la documentation de <a href="{$a->docsurl}">configuration Google OAuth 2.0</a>.</p><p>au cours du processus d’enregistrement, vous devrez saisir l’URL suivante comme « Authorized Redirect URIs » :</p><p>{$a->callbackurl}</p><p>Après l’enregistrement, vous recevrez un ID client et un secret que vous pourrez utiliser pour configurer tous les plugins Google Drive et Picasa.</p>';
$string['picasa:view'] = 'Consulter un dépôt Picasa';
$string['pluginname'] = 'Album web Picasa';
$string['privacy:metadata:repository_picasa'] = 'Le plugin de dépôt Album web Picasa n’enregistre aucune donnée personnelle, mais transmet des données des utilisateurs de Moodle vers le système distant.';
$string['privacy:metadata:repository_picasa:searchtext'] = 'La requête de recherche utilisateur du dépôt Picasa.';
$string['secret'] = 'Secret';
