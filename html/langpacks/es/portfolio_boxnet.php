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
 * Strings for component 'portfolio_boxnet', language 'es', version '3.11'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['clientsecret'] = 'Clave secreta del cliente';
$string['existingfolder'] = 'Carpeta existente para incluir archivo(s)';
$string['folderclash'] = 'La carpeta que intenta crear ya existe';
$string['foldercreatefailed'] = 'No se pudo crear la carpeta de destino en box.net';
$string['folderlistfailed'] = 'No se ha podido recuperar una lista de carpetas de box.net';
$string['missinghttps'] = 'Se requiere HTTPS';
$string['missingoauthkeys'] = 'ID del cliente y clave secreta no encontradas';
$string['newfolder'] = 'Nueva carpeta para guardar archivos';
$string['noauthtoken'] = 'No se ha podido recuperar una ficha de autenticación para usar en esta sesión';
$string['notarget'] = 'Debe especificar una carpeta existente o una carpeta nueva a la que subir el archivo';
$string['noticket'] = 'No se pudo recibir un ticket desde box.net para comenzar con la sesión de identificación';
$string['password'] = 'Su contraseña en Box.net (no se guardará)';
$string['pluginname'] = 'Box.net';
$string['sendfailed'] = 'No se pudo enviar el contenido a box.net: {$a}';
$string['setupinfo'] = 'Instrucciones de instalación';
$string['setupinfodetails'] = 'Para obtener la clave API, ingrese a Box.net y visite su <a href="{$a->servicesurl}">OpenBox development page</a>. En \'Developer Tools\',  acceda a \'Create new application\' para crear una nueva aplicación para su sitio Moodle. La clave API se mostrará en la sección  \'Backend parameters\' del formato para editar la aplicación. En este formulario, cumplimente el campo  \'Redirect URL\' con:<br /><code>{$a->callbackurl}</code><br />Opcionalmente, puede proporcionar otra información extra sobre su sitio Moodle. Estos valores podrán editarse posteriormente en la página de \'View my applications\' .';
$string['sharedfolder'] = 'Compartido';
$string['sharefile'] = '¿Compartir este archivo?';
$string['sharefolder'] = '¿Compartir esta carpeta nueva?';
$string['targetfolder'] = 'Carpeta de destino';
$string['tobecreated'] = 'A ser creado';
$string['username'] = 'Su nombre de usuario en Box.net (no se guardará)';
