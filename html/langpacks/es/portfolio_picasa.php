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
 * Strings for component 'portfolio_picasa', language 'es', version '3.11'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['noauthtoken'] = 'No se ha recibido de google una ficha de autenticación. Por favor, asegúrese de que está permitiendo que moodle acceda a su cuenta en google';
$string['nooauthcredentials'] = 'Se requieren las credenciales de OAuth.';
$string['nooauthcredentials_help'] = 'Para utilizar el complemento de cartera de Picasa, debe configurar las credenciales de OAuth en la configuración del portfolio.';
$string['oauthinfo'] = '<p> Para utilizar este plugin, debe registrar su sitio en Google, como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p> Como parte del proceso de registro, tendrá que introducir la siguiente URL como "Authorized Redirect URIs \': </p><p> {$a->callbackurl} </p> Una vez registrado, se le proporcionará un ID de cliente y el secreto que se puede utilizar para configurar los plugins de Google Drive y Picasa. </p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Este complemento envía datos de forma externa a una cuenta de Picasa vinculada. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales transferidos desde el subsistema de cartera.';
$string['secret'] = 'Clave secreta';
$string['sendfailed'] = 'No se ha podido transferir el archivo {$a} a Picasa';
