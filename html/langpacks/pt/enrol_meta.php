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
 * Strings for component 'enrol_meta', language 'pt', version '4.5'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Adicionar ao grupo';
$string['coursesort'] = 'Ordem da lista de disciplinas de origem';
$string['coursesort_help'] = 'Ao sincronizar a disciplina de origem com a disciplina de destino, como devem ser ordenadas as disciplinas de origem?';
$string['creategroup'] = 'Criar um novo grupo';
$string['defaultgroupnametext'] = '{$a->increment} disciplina {$a->name}';
$string['enrolmetasynctask'] = 'Sincronização de inscrições com disciplina';
$string['linkedcourse'] = 'Sincronizar inscrições com';
$string['meta:config'] = 'Configurar instâncias de Sincronização com disciplina';
$string['meta:selectaslinked'] = 'Selecionar a disciplina para sincronizar inscrições';
$string['meta:unenrol'] = 'Cancelar inscrição de utilizadores suspensos';
$string['nosyncroleids'] = 'Papéis que não são sincronizados';
$string['nosyncroleids_desc'] = 'Selecione quaisquer papéis que não devam ser sincronizadas entre a disciplina de origem e o disciplina de destino.';
$string['pluginname'] = 'Sincronização com disciplina';
$string['pluginname_desc'] = 'O módulo de inscrição por sincronização permite sincronizar inscrições e atribuições de papéis entre duas disciplinas.';
$string['privacy:metadata:core_group'] = 'O módulo de inscrição por sincronização pode criar um novo grupo ou usar um grupo existente para adicionar todos os participantes da disciplina de origem.';
$string['samemetacourse'] = 'Não pode adicionar sincronização com disciplina com a própria disciplina.';
$string['syncall'] = 'Sincronizar todos os utilizadores inscritos';
$string['syncall_desc'] = 'Se ativar esta opção, todos os utilizadores inscritos são sincronizados mesmo que não possuam nenhum papel na disciplina de origem. Caso contrário, apenas serão inscritos na disciplina os utilizadores que tenham pelo menos um papel na disciplina de origem .';
$string['unknownmetacourse'] = 'Nome curto da meta-disciplina desconhecido';
$string['wscannotcreategroup'] = 'Sem permissão para criar grupo na disciplina vinculada com ID = {$a}.';
$string['wsinvalidcourse'] = 'O ID da disciplina = {$a} não existe ou não tem permissão para vincular na meta-inscrição.';
$string['wsinvalidmetacourse'] = 'O ID da meta-disciplina = {$a} não existe ou não tem permissão para adicionar instância de inscrição.';
$string['wsnoinstancesspecified'] = 'Sem instâncias especificadas';
