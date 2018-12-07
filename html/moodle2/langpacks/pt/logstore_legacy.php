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
 * Strings for component 'logstore_legacy', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Registo de evento de retrocompatibilidade';
$string['loglegacy'] = 'Registo de dados de retrocompatibilidade';
$string['loglegacy_help'] = 'Este módulo grava registos de atividade na tabela de registos de retrocompatibilidade (mdl_log). Esta funcionalidade foi substituída por módulos mais recentes, ricos e eficientes, por isso, só deve executar este módulo se tiver relatórios personalizados antigos que consultam diretamente a tabela de registos de atividade antiga. Escrever nos registos de retrocompatibilidade vai aumentar a carga no servidor, por isso, é recomendado que desative este módulo por motivos de desempenho, quando este não é necessário.';
$string['pluginname'] = 'Registo de atividade de retrocompatibilidade';
$string['pluginname_desc'] = 'Um módulo de registos que armazena entradas de registos de atividade na tabela de registos de retrocompatibilidade.';
$string['privacy:metadata:log'] = 'Uma coleção de eventos passados';
$string['privacy:metadata:log:action'] = 'Uma descrição da ação';
$string['privacy:metadata:log:info'] = 'informação adicional';
$string['privacy:metadata:log:ip'] = 'O endereço de IP utilizado na altura da ação';
$string['privacy:metadata:log:time'] = 'A data de quando a ação ocorreu';
$string['privacy:metadata:log:url'] = 'O URL relacionado com o evento';
$string['privacy:metadata:log:userid'] = 'O ID do utilizador que executou a ação';
$string['taskcleanup'] = 'Limpeza da tabela de registos de atividade de retrocompatibilidade';
