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
 * Strings for component 'repository_picasa', language 'es', version '3.11'.
 *
 * @package     repository_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID de cliente';
$string['configplugin'] = 'Configuración del repositorio Picasa';
$string['oauthinfo'] = '<p>Para utilizar este complemento, debe registrar su sitio en Google, como se describe en la documentación <a href="{$a->docsurl}">Configuración de Google OAuth 2.0</a>.</p><p>Como parte del proceso de registro, deberá introducir la siguiente URL como \'URI de redireccionamiento autorizado\':</p><p>{$a->callbackurl}</p><p>Una vez registrado, se le proporcionará un ID de cliente y un secreto que se puede usar para configurar todos los complementos de Google Drive y Picasa.</p>';
$string['picasa:view'] = 'Ver repositorio Picasa';
$string['pluginname'] = 'Álbum web Picasa';
$string['privacy:metadata:repository_picasa'] = 'El complemento del repositorio de álbumes web de Picasa no almacena ningún dato personal, pero transmite datos de usuario desde Moodle al sistema remoto.';
$string['privacy:metadata:repository_picasa:searchtext'] = 'La consulta de texto de búsqueda del usuario del repositorio de Picasa.';
$string['secret'] = 'Clave secreta';
