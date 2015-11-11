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
 * Strings for component 'repository_picasa', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   repository_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del client';
$string['configplugin'] = 'Configuració del repositori Picasa';
$string['oauth2upgrade_message_content'] = 'Com a part de l\'actualització a Moodle 2.3, s\'ha inhabilitat el connector de repositori de Picasa. Per tornar-lo a habilitar, cal que registreu el vostre lloc Moodle amb Google, tal com es descriu a la documentació {$a->docsurl}, a fi d\'obtenir un ID de client i una contrasenya secreta. L\'ID de client i la contrasenya secreta es poden utilitzar llavors per configurar tots els connectors de Google Drive i Picasa.';
$string['oauth2upgrade_message_small'] = 'Aquest connector s\'ha inhabilitat, ja que requereix una configuració com la que es descriu a la documentació de la configuració de Google OAuth 2.0.';
$string['oauth2upgrade_message_subject'] = 'Informació important sobre el repositori de dipòsit de Picasa';
$string['oauthinfo'] = '<p>Per a utilitzar aquest connector, heu de registrar el vostre lloc a Google, tal com es descriu a la documentació sobre <a href="{$a->docsurl}">configuració de Google OAuth 2.0</a>.</p><p>Com a part del procés de registre, haureu d\'introduir l\'URL següent com a «URL de redirecció autoritzats»:</p><p>{$a->callbackurl}</p> Una vegada registrat, se us proporcionarà un ID de client i un secret que podreu utilitzar per a configurar tots els connectors de Google Drive i Picasa.</p>';
$string['picasa:view'] = 'Mostra el repositori de Picasa';
$string['pluginname'] = 'Àlbum web Picasa';
$string['secret'] = 'Secret';
