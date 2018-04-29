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
 * Strings for component 'logstore_database', language 'pt', branch 'MOODLE_32_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamanho do buffer';
$string['buffersize_help'] = 'Número de entradas de registos de atividade inseridos numa operação de base de dados em série, que melhora o desempenho.';
$string['conectexception'] = 'Não é possível ligar à base de dados.';
$string['create'] = 'Criar';
$string['databasecollation'] = 'Verificação de base de dados';
$string['databasehandlesoptions'] = 'Opções de execução da base de dados';
$string['databasehandlesoptions_help'] = 'A base de dados remota executa as suas próprias opções.';
$string['databasepersist'] = 'Ligações de base de dados persistentes';
$string['databaseschema'] = 'Esquema de base de dados';
$string['databasesettings'] = 'Configurações de base de dados';
$string['databasesettings_help'] = 'Detalhes da ligação para a base de dados externa para registos de atividade: {$a}';
$string['databasetable'] = 'Tabela de base de dados';
$string['databasetable_help'] = 'Nome da tabela onde os registos de atividade serão armazenados. Esta tabela deve ter uma estrutura idêntica à utilizada por logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtrar registos';
$string['filters_help'] = 'Ativar filtros que impedem que algumas ações sejam registadas.';
$string['includeactions'] = 'Incluir ações destes tipos';
$string['includelevels'] = 'Incluir ações destes tipos de níveis';
$string['logguests'] = 'Registo de ações do Visitante';
$string['other'] = 'Outro';
$string['participating'] = 'Aluno';
$string['pluginname'] = 'Base de dados externa para registos de atividade';
$string['pluginname_desc'] = 'Um módulo de registo que armazena entradas de registos de atividade numa tabela de uma base de dados externa.';
$string['read'] = 'Ler';
$string['tablenotfound'] = 'A tabela especificada não foi encontrada';
$string['teaching'] = 'Professor';
$string['testingsettings'] = 'A testar configurações da base de dados...';
$string['testsettings'] = 'Testar ligação';
$string['update'] = 'Atualizar';
