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
 * Strings for component 'portfolio_googledocs', language 'gl', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Id do cliente';
$string['noauthtoken'] = 'Non se recibiu unha credencial de autenticación Google. Asegúrese de terlle permitido a Moodle que acceda á súa conta de Google.';
$string['nooauthcredentials'] = 'Requírense credenciais OAuth.';
$string['nooauthcredentials_help'] = 'Para usar o engadido do portafolios de Google Drive, ten que configurar as credenciais de OAuth nos axustes do portafolios.';
$string['nosessiontoken'] = 'Non existe unha credencial de sesión, o que impide exportar a Google.';
$string['oauthinfo'] = '<p>Para usar este engadido, ten que rexistrar este sitio en Google, tal e como se describe na documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte do proceso de rexistro, deberá introducir o seguinte URL como «URI de redireccionamento autorizada» (Authorized Redirect URIs):</p><p>{$a->callbackurl}</p>Unha vez rexistrado, forneceráselle un ID de cliente e un secreto que poderá entón empregar para configurar todos os engadidos de Google Drive e Picasa.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Este engadido envía datos externamente a unha conta de Google ligada. Non almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos persoais pasados a mediante o subsistema portafolios.';
$string['secret'] = 'Secreto';
$string['sendfailed'] = 'Non foi posíbel transferir o ficheiro {$a} a Google';
