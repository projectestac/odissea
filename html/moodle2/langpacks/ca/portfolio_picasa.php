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
 * Strings for component 'portfolio_picasa', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del client';
$string['noauthtoken'] = 'No s\'ha rebut el testimoni d\'autenticació de Google. Assegureu-vos que esteu permetent que Moodle accedeixi al vostre compte de Google.';
$string['nooauthcredentials'] = 'Es requereixen credencials OAuth';
$string['nooauthcredentials_help'] = 'Per a utilitzar el connector de portafolis de Picasa heu de configurar les credencials OAuth en la configuració del portafolis.';
$string['oauth2upgrade_message_content'] = 'Com a part de l\'actualització a Moodle 2.3, s\'ha inhabilitat el connector de portafolis de Picasa. Per tornar-lo a habilitar, heu de registrar el vostre lloc Moodle amb Google, com es descriu a la documentació {$a->docsurl}, a fi d\'obtenir un ID de client i una contrasenya secreta. L\'ID de client i la contrasenya secreta es poden utilitzar per configurar tots els connectors de Picasa i Google Docs.';
$string['oauth2upgrade_message_small'] = 'Aquest connector s\'ha inhabilitat, ja que requereix una configuració com la que es descriu a la documentació de la configuració de Google OAuth 2.0.';
$string['oauth2upgrade_message_subject'] = 'Informació important sobre el connector de portafolis de Picasa';
$string['oauthinfo'] = '<p> Per utilitzar aquest connector, heu de registrar el vostre lloc a Google, com es descriu en la documentació de la <a href="{$a->docsurl}">configuració de Google OAuth 2.0</a>. </p><p> Com a part del procés de registre, haureu d\'introduir l\'URL següent com a «URL de redirecció autoritzats»: </p><p> {$a->callbackurl} </p> Un cop registrat, se us proporcionarà un ID de client i un secret que podeu utilitzar per configurar tots els connectors de Google Docs i Picasa. </p>';
$string['pluginname'] = 'Picasa';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'La transferència del fitxer {$a} a Picasa ha fallat';
