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
 * Strings for component 'enrol_meta', language 'pt', version '3.11'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Adicionar ao grupo';
$string['coursesort'] = 'Ordenar a lista de disciplinas';
$string['coursesort_help'] = 'Esta opção determina se a lista de disciplinas em que pode sincronizar as inscrições estão ordenadas por ordem predefinida (ou seja, a ordem definida em Administração do Site / Disciplinas / Gerir disciplinas e categorias) ou por ordem alfabética de configuração da disciplina.';
$string['creategroup'] = 'Criar um novo grupo';
$string['defaultgroupnametext'] = '{$a->increment} disciplina {$a->name}';
$string['enrolmetasynctask'] = 'Tarefa de sincronização de inscrições com disciplina';
$string['linkedcourse'] = 'Sincronizar inscrições com';
$string['meta:config'] = 'Configurar instâncias de Sincronização com disciplina';
$string['meta:selectaslinked'] = 'Selecionar a disciplina para sincronizar inscrições';
$string['meta:unenrol'] = 'Cancelar inscrição de utilizadores suspensos';
$string['nosyncroleids'] = 'Papéis que não são sincronizados';
$string['nosyncroleids_desc'] = 'Por predefinição todas as atribuições de papéis feitas ao nível da disciplina são sincronizadas. Os papéis aqui indicados não serão sincronizados. Os papéis atuais serão atualizados durante a próxima execução do cron.';
$string['pluginname'] = 'Sincronização com disciplina';
$string['pluginname_desc'] = 'Este módulo de inscrição permite sincronizar inscrições e atribuições de papéis entre duas disciplinas.';
$string['privacy:metadata:core_group'] = 'O módulo de inscrição por sincronização pode criar um novo grupo ou usar um grupo existente para adicionar todos os participantes da disciplina vinculada.';
$string['syncall'] = 'Sincronizar todos os utilizadores inscritos';
$string['syncall_desc'] = 'Se ativar esta opção, todos os utilizadores inscritos são sincronizados mesmo que não possuam nenhum papel na disciplina de origem das inscrições. Caso contrário, apenas os utilizadores que possuem pelo menos um papel sincronizado na disciplina de origem serão inscritos na disciplina.';
