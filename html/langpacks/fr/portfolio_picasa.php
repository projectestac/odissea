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
 * Strings for component 'portfolio_picasa', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID client';
$string['noauthtoken'] = 'Aucun jeton d\'authentification n\'a été reçu de Google. Veuillez vous assurer que vous autorisez vraiment Moodle à accéder à votre compte Google.';
$string['nooauthcredentials'] = 'Données d\'authentification OAuth requises.';
$string['nooauthcredentials_help'] = 'Pour utiliser le plugin de portfolio Picasa, vous devez configurer d\'abord les données d\'authentification OAuth dans les réglages de portfolio.';
$string['oauthinfo'] = '<p>Pour utiliser ce plugin, vous devez d\'abord enregistrer votre site auprès de Google, suivant la documentation de <a href="{$a->docsurl}">configuration Google OAuth 2.0</a>.</p><p>au cours du processus d\'enregistrement, vous devrez saisir l\'URL suivante comme « Authorized Redirect URIs » :</p><p>{$a->callbackurl}</p><p>Après l\'enregistrement, vous recevrez un ID client et un secret que vous pourrez utiliser pour configurer tous les plugins Google Drive et Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Ce plugin transmet des données vers un compte Picasa lié. Il n\'enregistre aucune donnée localement.';
$string['privacy:metadata:data'] = 'Données personnelles transmises à partir du sous-système portfolio.';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'Échec du transfert du fichier {$a} vers Picasa';
