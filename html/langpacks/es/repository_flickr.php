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
 * Strings for component 'repository_flickr', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   repository_flickr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clave API';
$string['callbackurl'] = 'URL de llamada';
$string['callbackurltext'] = '<ol>
<li>Visite <a href="http://www.flickr.com/services/api/keys/">Flickr API Keys</a> nuevamente.</li>
<li>Asegúrese de configurar la URL de llamado callback para esta llave Flickr como  <strong>{$a}</strong></li></ol>';
$string['callbackwarning'] = '<ol>
<li>Obtenga una  <a href="http://www.flickr.com/services/api/keys/">llave y cadena secreta de Flickr API</a> desde Flickr para este sitio Moodle.</li>
<li>Introduzca los detalles aquí, luego haga clic en Guardar y en Configuración para volver a esta página. Encontrará que Moodle a generado una URL de llamado callback para usted.</li>
<li>Edite los detalles de su llave  <a href="http://www.flickr.com/services/api/keys/">Flickr</a> nuevamente e inicialice la URL de llamado callback.</li></ol>';
$string['configplugin'] = 'Configuración Flickr';
$string['emailaddress'] = 'Dirección email';
$string['flickr:view'] = 'Ver repositorio Flickr';
$string['invalidemail'] = 'Dirección de email no válida para Flickr';
$string['notitle'] = 'sin título';
$string['nullphotolist'] = 'No hay fotografías en esta cuenta';
$string['pluginname'] = 'Flickr';
$string['pluginname_help'] = 'Repositorio en flickr.com';
$string['privacy:metadata:repository_flickr'] = 'El plugin de repositorio Flickr no almacena preferencias de usuario, y transmite datos de usuario desde Moodle al sistema remoto.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token'] = 'Preferencia de la llave OAuth para el repositorio Flickr.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token_secret'] = 'Preferencia de la cadena secreta OAuth para el repositorio Flickr; esto es excluido de la exportación de privacidad de datos.';
$string['privacy:metadata:repository_flickr:text'] = 'Texto de consulta para el repositorio Flickr del usuario.';
$string['remember'] = 'Recordarme';
$string['secret'] = 'Secreto';
$string['username'] = 'Email de la cuenta Flickr';
