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
 * Strings for component 'portfolio_googledocs', language 'pt', version '3.11'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID de Cliente';
$string['noauthtoken'] = 'Um token de autenticação não foi recebido pelo Google. Por favor, verifique que está a dar acesso ao Moodle para aceder à sua conta Google';
$string['nooauthcredentials'] = 'Credencias OAuth necessárias.';
$string['nooauthcredentials_help'] = 'Para utilizar o módulo do portefólio do Google Drive tem de configurar as credenciais OAuth nas configurações do portefólio.';
$string['nosessiontoken'] = 'Não existe uma sessão token de prevenção de exportação para o google.';
$string['oauthinfo'] = '<p>Para utilizar este modulo, tem de registar o seu site com a Google, tal como descrito na documentação <a href="{$a->docsurl}">Configuração Google OAuth 2.0</a>.</p><p>Como parte do processo de registo, terá de indicar o seguinte URL como \'URIs de redirecionamento autorizados\':</p><p>{$a->callbackurl}</p><p>Uma vez registado, ser-lhe-á atribuído um  ID de cliente e uma Chave secreta que podem ser utilizados para configurar todos os módulos Google Drive e Picasa.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Este módulo envia dados externamente para uma conta Google. Não armazena dados localmente.';
$string['privacy:metadata:data'] = 'Dados pessoais transmitidos através do subsistema portefólio.';
$string['secret'] = 'Senha';
$string['sendfailed'] = 'Falhou a transferência do ficheiro {$a} para o google';
