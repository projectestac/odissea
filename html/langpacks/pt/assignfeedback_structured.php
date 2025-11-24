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
 * Strings for component 'assignfeedback_structured', language 'pt', version '4.5'.
 *
 * @package     assignfeedback_structured
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['close'] = 'Fechar';
$string['criteria'] = 'Critérios do feedback';
$string['criteria_help'] = 'Digite o nome (e, opcionalmente, uma descrição) para cada critério que pretende adicionar feedback. Os critérios sem nome serão ignorados. Todos os campos serão bloqueados assim que for atribuído feedback a qualquer critério.';
$string['criteriafieldsadd'] = 'Adicionar mais campos de critério';
$string['criteriaset'] = 'Conjunto de critérios';
$string['criteriaset_help'] = 'Clique para selecionar um conjunto de critérios anteriormente guardado para configurar automaticamente os detalhes dos critérios abaixo.';
$string['criteriasetconfirmdelete'] = 'Tem a certeza de que pretende apagar <b>definitivamente</b> o conjunto de critérios "{$a}"?';
$string['criteriasetconfirmuse'] = 'Tem a certeza? Esta ação substituirá os critérios que estão atualmente configurados para este trabalho.';
$string['criteriasetdelete'] = 'Apagar conjunto de critérios';
$string['criteriasetempty'] = 'Tem de definir pelo menos um critério antes de guardar como um conjunto.';
$string['criteriasetemptytitle'] = 'O conjunto de critérios está vazio';
$string['criteriasetname'] = 'Nome do conjunto de critérios';
$string['criteriasetname_help'] = 'O nome do conjunto de critérios deve ser único em todo o site, por isso, escolha-o com cuidado.';
$string['criteriasetnameedit'] = 'Editar nome do conjunto de critérios';
$string['criteriasetnameenter'] = 'Indique um nome exclusivo';
$string['criteriasetnameused'] = 'Já existe um conjunto de critérios com o nome "{$a}". Por favor, tente um nome diferente.';
$string['criteriasetnameusedtitle'] = 'Nome já em uso';
$string['criteriasetnoname'] = 'Tem de indicar um nome para o conjunto de critérios.';
$string['criteriasetnonametitle'] = 'Nenhum nome indicado';
$string['criteriasetnotdeleted'] = 'Infelizmente, o conjunto de critérios "{$a}" não pôde ser apagado. Tente novamente ou comunique o erro ao administrador.';
$string['criteriasetnotsaved'] = 'Infelizmente, o conjunto de critérios não pôde ser guardado. Tente novamente ou comunique o erro ao administrador.';
$string['criteriasetnotupdated'] = 'Infelizmente, o conjunto de critérios não pôde ser atualizado. Tente novamente ou comunique o erro ao administrador.';
$string['criteriasetpublish'] = 'Partilhar com outros utilizadores';
$string['criteriasetpublish_help'] = 'Marque a caixa para permitir que qualquer pessoa possa fazer uma cópia deste conjunto de critérios. Por predefinição, apenas está disponível para si.';
$string['criteriasetsave'] = 'Guardar o conjunto de critérios';
$string['criteriasetsave_help'] = 'Indique um nome exclusivo para o conjunto de critérios acima para que possa ser copiado facilmente para outros trabalhos.';
$string['criteriasetsaved'] = 'Conjunto de critérios guardado';
$string['criteriasetsavedsuccess'] = 'O conjunto de critérios "{$a}" foi guardado com sucesso.';
$string['criteriasetselect'] = 'Selecionar o conjunto de critérios...';
$string['criteriasetshared'] = 'Partilhado';
$string['criteriasetsmanage'] = 'Gestão dos conjuntos de critérios';
$string['criteriasetsmanage_help'] = 'Visualizar e gerir os seus conjuntos de critérios guardados.';
$string['criteriasetsowned'] = 'Os seus conjuntos de critérios';
$string['criteriasetssaved'] = 'Conjuntos de critérios guardados';
$string['criteriasetsshared'] = 'Conjuntos de critérios partilhados';
$string['criteriasetsshowshared'] = 'Mostrar conjuntos de critérios partilhados';
$string['criteriasetupdated'] = 'Conjunto de critérios atualizado';
$string['criteriasetupdatedsuccess'] = 'O seu conjunto de critérios foi atualizado com sucesso.';
$string['criteriasetuse'] = 'Usar este conjunto';
$string['criteriasetusesaved'] = 'Usar conjunto de critérios guardado';
$string['criteriaused'] = 'Os critérios para este trabalho já não podem ser alterados porque já foi atribuído algum feedback.';
$string['criteriondesc'] = 'Descrição do critério {$a} (opcional)';
$string['criterionheader'] = '{$a->name}: {$a->desc}';
$string['criterionname'] = 'Nome do critério <b>{$a}</b>';
$string['criteriontitle'] = '<span class="criterion-name">{$a->name}:</span> <span class="criterion-desc">{$a->desc}</span>';
$string['default'] = 'Ativado por predefinição';
$string['default_help'] = 'Se ativar esta opção, este método de feedback estará disponível, por predefinição, para todos os trabalho.';
$string['defaultcritdesc'] = 'Descrição predefinida para o primeiro critério';
$string['defaultcritdesc_help'] = 'Descrição predefinida do feedback do primeiro critério (opcional) para todos os novos trabalhos.';
$string['defaultcritname'] = 'Nome predefinido para o primeiro critério';
$string['defaultcritname_help'] = 'Nome predefinido do feedback do primeiro critério (opcional) para todos os novos trabalhos. <br>Tenha em atenção que inserir um valor aqui ativará automaticamente o método de feedback estruturado para todos os novos trabalhos.';
$string['enabled'] = 'Feedback estruturado';
$string['enabled_help'] = 'Se ativado, o professor poderá definir qualquer número de critérios para fornecer feedback específico.';
$string['escapetocancel'] = 'ESC para cancelar';
$string['noownedsets'] = 'Não existem conjuntos guardados.';
$string['nopermissionstodelete'] = 'Não tem permissões para apagar os seus conjuntos de critérios guardados.';
$string['nopermissionstomanage'] = 'Não tem permissões para gerir os seus conjuntos de critérios guardados.';
$string['nopermissionstopublish'] = 'Não tem permissões para parilhar os seus conjuntos de critérios guardados.';
$string['nopermissionstosave'] = 'Não tem permissões para guardar conjuntos de critérios';
$string['nopermissionstoupdate'] = 'Não tem permissões para atualizar os seus conjuntos de critérios guardados.';
$string['nosharedsets'] = 'Não existem conjuntos partilhados disponíveis.';
$string['pluginname'] = 'Feedback estruturado';
$string['privacy:metadata:assignmentid'] = 'ID do trabalho';
$string['privacy:metadata:commentpurpose'] = 'O texto do comentário';
$string['privacy:metadata:critdescpurpose'] = 'A descrição do critério ao qual o comentário se refere.';
$string['privacy:metadata:criterionpurpose'] = 'O nome do critério ao qual o comentário se refere.';
$string['privacy:metadata:filepurpose'] = 'Ficheiros de feedback do avaliador para o aluno.';
$string['privacy:metadata:gradepurpose'] = 'O ID da nota associada ao feedback.';
$string['privacy:metadata:tablesummary'] = 'Armazena os comentários feitos pelos avaliadores como feedback para o aluno sobre aspetos específicos da sua submissão.';
$string['privacy:path'] = 'Feedback estruturado';
$string['structured:manageowncriteriasets'] = 'Gerir conjuntos de critérios guardados';
$string['structured:publishcriteriasets'] = 'Disponibilizar conjuntos de critérios guardados para outros utilizadores';
$string['structuredfilename'] = 'feedback_estruturado.html';
