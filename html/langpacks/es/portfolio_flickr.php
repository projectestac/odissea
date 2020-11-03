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
 * Strings for component 'portfolio_flickr', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_flickr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clave de API';
$string['contenttype'] = 'Tipos de contenido';
$string['err_noapikey'] = 'No hay una clave de API';
$string['err_noapikey_help'] = 'No hay ninguna clave API configurado para este plugin.
Puede obtener una de estas desde la página de servicios de Flickr.';
$string['hidefrompublicsearches'] = '¿Ocultar las imágenes de las búsquedas públicas?';
$string['isfamily'] = 'Visible a la familia';
$string['isfriend'] = 'Visible para amigos';
$string['ispublic'] = 'Público (cualquiera puede verlas)';
$string['moderate'] = 'Moderada';
$string['noauthtoken'] = 'No se ha podido recuperar una ficha de autentificación para usar en esta sesión';
$string['other'] = 'Rótulos, ilustraciones, CGI u otras imágenes no fotográficas.';
$string['photo'] = 'Fotos';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Este plugin envía información a la cuenta asociada de Flickr. No se almacena ninguna información localmente.';
$string['privacy:metadata:data'] = 'Información personal enviada a través del subsistema de portafolio.';
$string['restricted'] = 'Restringidos';
$string['safe'] = 'Seguro';
$string['safetylevel'] = 'Nivel de seguridad';
$string['screenshot'] = 'Imágenes';
$string['set'] = 'Ajustar';
$string['setupinfo'] = 'Instrucciones de instalación';
$string['setupinfodetails'] = 'Para obtener la llave API y la cadena secreta, inicie sesión en Flickr y <a href="{$a->applyurl}">solicite una nueva llave</a>.
Una vez que una nueva llave y cadena secreta sean generadas, siga el enlace de \'Editar flujo de autenticación para esta app\' de la página. Seleccione \'Tipo de App\' a \'Aplicación Web\'. En el campo \'Callback URL\' introduzca el valor: <br /><code>{$a->callbackurl}</code><br />Opcionalmente también podrá proveer su descripción del sitio Moodle y un logo. Estos valores podrán ser configurados posteriormente en <a href="{$a->keysurl}">la página</a> que muestra sus aplicaciones Flickr.';
$string['sharedsecret'] = 'Cadena secreta';
$string['title'] = 'Título';
$string['uploadfailed'] = 'No se ha podido subir la imagen(es) a flickr.com: {$a}
';
