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
 * Strings for component 'repository_googledocs', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID de cliente';
$string['configplugin'] = 'Configurar o módulo Google Drive';
$string['googledocs:view'] = 'Visualizar o repositório Google Drive';
$string['oauthinfo'] = '<p>Para utilizar este módulo, tem de registar o seu site com o Google, tal como indicado na documentação <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte do processo de registo, terá de introduzir o seguinte URL como \'URLs de redirecionamento Autorizados\':</p><p>{$a->callbackurl}</p><p>Uma vez registado, ser-lhe-á atribuído um utilizador e senha que podem ser usadas para configurar todos os módulos do Google Docs e do Picasa.</p><p>Note que tem de ativar o serviço \'Drive API\'.</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Senha';
$string['servicenotenabled'] = 'Acesso não configurado. Verifique se o serviço \'Drive API\'  está ativo.';
