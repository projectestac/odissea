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
 * Strings for component 'portfolio_picasa', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID de Cliente';
$string['noauthtoken'] = 'Um token de autenticação não foi recebido a partir do Google. Verifique se permite que o Moodle aceda à sua conta do Google';
$string['nooauthcredentials'] = 'Credencias OAuth necessárias.';
$string['nooauthcredentials_help'] = 'Para usar o módulo do portefólio Picasa tem de configurar as credenciais OAuth nas definições do portefólio.';
$string['oauthinfo'] = '<p>Para utilizar este módulo, tem de registar o seu site com o Google, tal como indicado na documentação <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p> Como parte do processo de registo, terá de introduzir o seguinte URL como \'URLs Redirecionados Autorizados\':</p><p>{$a->callbackurl}</p><p>Uma vez registado, ser-lhe-á atribuída uma identidade de cliente e senha que podem ser usadas para configurar todos os módulos do Google Drive e do Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Este módulo envia dados externamente para uma conta Picasa. Não armazena dados localmente.';
$string['privacy:metadata:data'] = 'Dados pessoais transmitidos através do subsistema portefólio.';
$string['secret'] = 'Senha';
$string['sendfailed'] = 'Falhou a transferência do ficheiro {$a} para o Picasa';
