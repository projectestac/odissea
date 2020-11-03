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
 * Strings for component 'portfolio_googledocs', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['noauthtoken'] = 'No se ha recibido una ficha de autenticación (token) de Google. Por favor asegúrese de que le ha permitido a Moodle que acceda a su cuenta de Google';
$string['nooauthcredentials'] = 'Se requieren las credenciales de OAuth.';
$string['nooauthcredentials_help'] = 'Para usar el plugin del portafolio de Google Drive debe configurar credenciales de OAuth en los ajustes del portafolio.';
$string['nosessiontoken'] = 'No existe ficha de sesión que impida exportar a google.';
$string['oauthinfo'] = '<p> Para utilizar este plugin, debe registrar su sitio en Google, como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p> Como parte del proceso de registro, tendrá que introducir la siguiente URL como "Authorized Redirect URIs \': </p><p> {$a->callbackurl} </p> Una vez registrado, se le proporcionará un ID de cliente y el secreto que se puede utilizar para configurar los plugins de Google Drive y Picasa.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Este plugin envía datos externamente hacia una cuenta Google enlazada. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales enviados a través del subsistema de portafolio.';
$string['secret'] = 'Secreto';
$string['sendfailed'] = 'No se ha podido transferir el archivo {$a} a google';
