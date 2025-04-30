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
 * Strings for component 'editor_atto', language 'pt', version '4.4'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Não foi possível ligar ao servidor. Se submeter esta página agora, as alterações podem ser perdidas.';
$string['autosavefrequency'] = 'Frequência da gravação automática';
$string['autosavefrequency_desc'] = 'Duração do intervalo de tempo entre as tentativas de gravação automática. O Atto irá guardar automaticamente o texto no editor de acordo com esta definição, para que o texto possa ser recuperado automaticamente quando o mesmo utilizador voltar ao mesmo formulário.';
$string['autosaves'] = 'Informações sobre Guardar automático do editor';
$string['autosavesucceeded'] = 'Rascunho guardado';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'A linha \'{$a}\' não está no formato correto.';
$string['errorgroupisusedtwice'] = 'O grupo {$a}\' está definido duas vezes. Os nomes dos grupos devem ser únicos.';
$string['errornopluginsorgroupsfound'] = 'Nenhum módulo ou grupo encontrados. Por favor, adicione alguns grupos e módulos.';
$string['errorpluginisusedtwice'] = 'O módulo \'{$a}\' está a ser usado duas vezes. Os módulos só podem ser definidos uma vez.';
$string['errorpluginnotfound'] = 'O módulo \'{$a}\' não pode ser usado, não parece estar instalado.';
$string['errortextrecovery'] = 'Infelizmente a versão de rascunho não pôde ser restaurada.';
$string['infostatus'] = 'Informação';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Editor HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Rascunhos do editor de texto guardados automaticamente.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'O texto guardado.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Data e hora de modificação do conteúdo';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID do utilizador dos dados guardados.';
$string['recover'] = 'Recuperar';
$string['richtexteditor'] = 'Editor \'Rich text\'';
$string['settings'] = 'Configurações da barra de ferramentas Atto';
$string['subplugintype_atto'] = 'Módulo Atto';
$string['subplugintype_atto_plural'] = 'Módulos Atto';
$string['taskautosavecleanup'] = 'Eliminação dos rascunhos automáticos expirados';
$string['textrecovered'] = 'Uma versão de rascunho deste texto foi automaticamente restaurada.';
$string['toolbarconfig'] = 'Configurações da barra de ferramentas';
$string['toolbarconfig_desc'] = 'A lista de módulos e a ordem pela qual são apresentados podem ser configurados aqui. A configuração consiste em grupos (um por linha), seguido pela lista ordenada de módulos para esse grupo. O grupo é separado dos módulos com um sinal de igual e os módulos são separados por vírgulas. Os nomes dos grupos devem ser únicos e devem indicar o que os botões têm em comum. Os botões e os nomes dos grupos não devem ser repetidos e só podem conter caracteres alfanuméricos.';
$string['warningstatus'] = 'Aviso';
