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
 * Strings for component 'portfolio_flickr', language 'gl', version '4.5'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Chave da API';
$string['contenttype'] = 'Tipos de contido';
$string['err_noapikey'] = 'Sen chave da API';
$string['err_noapikey_help'] = 'Non hai unha chave de API configurada para este engadido. Pode obter un destes da páxina de desenvolvemento de Flickr.';
$string['hidefrompublicsearches'] = 'Agochar estas imaxes das buscas públicas?';
$string['isfamily'] = 'Visíbel para a familia';
$string['isfriend'] = 'Visíbel para os amigos';
$string['ispublic'] = 'Pública (calquera pode vela)';
$string['moderate'] = 'Moderada';
$string['noauthtoken'] = 'Non foi posíbel obter un testemuño de autenticación para empregar nesta sesión';
$string['other'] = 'Arte, ilustración, CGI, ou imaxes non fotográficas';
$string['photo'] = 'Fotos';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Este engadido envía datos externamente a unha conta de Flickr ligada. Non almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos persoais pasados a mediante o subsistema portafolios.';
$string['restricted'] = 'Restrinxido';
$string['safe'] = 'Seguridade';
$string['safetylevel'] = 'Nivel de seguridade';
$string['screenshot'] = 'Capturas de pantalla';
$string['set'] = 'Estabelecer';
$string['setupinfo'] = 'Instrucións de configuración';
$string['setupinfodetails'] = 'Para obter a chave da API e a cadea segreda, entre en Flickr e <a href="{$a->applyurl}">solicite unha nova chave</a>. Unha vez sexan xeradas a súa chave nova e o seu segredo, siga a ligazón de «Edit auth flow for this app» na páxina. Seleccione «App Type» a «Web Application». No campo «Callback URL», poña o valor: <br /><code>{$a->callbackurl}</code><br />Opcionalmente, tamén pode fornecer o seu logotipo e a descrición do seu sitio Moodle. Estes valores poden estabelecerse após na <a href="{$a->keysurl}">páxina</a> que lista as súas aplicacións Flickr.';
$string['sharedsecret'] = 'Cadea segreda';
$string['title'] = 'Título';
$string['uploadfailed'] = 'Non foi posíbel enviar imaxes a flickr.com: {$a}';
