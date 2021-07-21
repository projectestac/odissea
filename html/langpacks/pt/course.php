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
 * Strings for component 'course', language 'pt', version '3.11'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Rodapé do seletor de atividades';
$string['activitychooseractivefooter_desc'] = 'O seletor de atividades pode oferecer suporte a módulos que adicionam itens ao rodapé.';
$string['activitychoosercategory'] = 'Selector de atividades';
$string['activitychooserhidefooter'] = 'Sem rodapé';
$string['activitychooserrecommendations'] = 'Atividades recomendadas';
$string['activitychoosersettings'] = 'Configurações do seletor de atividades';
$string['activitychoosertabmode'] = 'Separadores do seletor de atividades';
$string['activitychoosertabmode_desc'] = 'O seletor de atividades permite que um professor selecione facilmente atividades e recursos para adicionar à sua disciplina. Esta configuração determina que separadores devem ser mostrados no seletor. Tenha em atenção que o separador \'Com estrela\' é mostrado apenas ao utilizador se ele marcou uma ou mais atividades com estrela e o separador \'Recomendados\' é mostrado apenas se um administrador do site especificou algumas atividades recomendadas.';
$string['activitychoosertabmodeone'] = 'Com estrela, Todos, Atividades, Recursos, Recomendados';
$string['activitychoosertabmodethree'] = 'Com estrela, Atividades, Recursos, Recomendados';
$string['activitychoosertabmodetwo'] = 'Com estrela, Todos, Recomendados';
$string['activitydate:closed'] = 'Fechado:';
$string['activitydate:closes'] = 'Fecha:';
$string['activitydate:opened'] = 'Aberto:';
$string['activitydate:opens'] = 'Abre:';
$string['aria:coursecategory'] = 'Categoria da disciplina';
$string['aria:courseimage'] = 'Imagem da disciplina';
$string['aria:coursename'] = 'Nome da disciplina';
$string['aria:courseshortname'] = 'Nome curto da disciplina';
$string['aria:defaulttab'] = 'Atividades predefinidas';
$string['aria:favourite'] = 'Disciplina está marcada com estrela';
$string['aria:favouritestab'] = 'Atividades marcadas com estrela';
$string['aria:modulefavourite'] = 'Marcar a atividade {$a} com estrela';
$string['aria:recommendedtab'] = 'Atividades recomendadas';
$string['completion_automatic:done'] = 'Concluída:';
$string['completion_automatic:failed'] = 'Sem aprovação:';
$string['completion_automatic:todo'] = 'Por concluir:';
$string['completion_manual:aria:done'] = '\'{$a}\' está marcada como concluída. Clique para desmarcar';
$string['completion_manual:aria:markdone'] = 'Marcar \'{$a}\' como concluída';
$string['completion_manual:done'] = 'Concluída';
$string['completion_manual:markdone'] = 'Marcar como concluída';
$string['completion_setby:auto:done'] = 'Concluída: {$a->condition} (marcada por {$a->setby})';
$string['completion_setby:auto:todo'] = 'Por concluir: {$a->condition} (marcada por {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} foi marcada como concluída por {$a->setby}. Clique para desmarcar.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} foi marcada como não concluída por {$a->setby}. Clique para marcar como concluída.';
$string['completionrequirements'] = 'Requisitos de conclusão de {$a}';
$string['coursealreadyfinished'] = 'Disciplina já terminada';
$string['coursenotyetfinished'] = 'A disciplina ainda não terminou';
$string['coursenotyetstarted'] = 'A disciplina ainda não iniciou';
$string['coursetoolong'] = 'A disciplina é muito longa';
$string['customfield_islocked'] = 'Bloqueado';
$string['customfield_islocked_help'] = 'Se o campo estiver bloqueado, apenas os utilizadores com a permissão de alterar campos personalizados bloqueados (por predefinição, apenas os utilizadores com a função predefinida de gestor) poderão alterá-lo nas configurações da disciplina.';
$string['customfield_notvisible'] = 'Ninguém';
$string['customfield_visibility'] = 'Visível para';
$string['customfield_visibility_help'] = 'Esta configuração determina quem pode visualizar o nome e o valor do campo personalizado na lista de disciplinas ou no filtro de campo personalizado disponível do Painel do utilizador.';
$string['customfield_visibletoall'] = 'Todos';
$string['customfield_visibletoteachers'] = 'Professores';
$string['customfieldsettings'] = 'Configurações gerais dos campos personalizados da disciplina';
$string['downloadcourseconfirmation'] = 'Está prestes a descarregar um arquivo zip com o conteúdo da disciplina (estão excluídos os itens que não podem ser descarregados e quaisquer ficheiros maiores do que {$a}).';
$string['downloadcoursecontent'] = 'Descarregar o conteúdo da disciplina';
$string['downloadcoursecontent_help'] = 'Esta configuração determina se o conteúdo da disciplina pode, ou não, ser descarregado por utilizadores com a permissão para descarregar o conteúdo da disciplina (por predefinição, utilizadores com o papel de aluno ou professor).';
$string['enabledownloadcoursecontent'] = 'Ativar descarregamento do conteúdo da disciplina';
$string['errorendbeforestart'] = 'A data de fim ({$a}) é anterior à data de início da disciplina';
$string['favourite'] = 'Disciplina com estrela';
$string['gradetopassnotset'] = 'Esta disciplina não tem nota de aprovação definida. Pode ser definida no item Avaliação da disciplina (Configuração da pauta).';
$string['informationformodule'] = 'Informações sobre a atividade {$a}';
$string['module'] = 'Atividade';
$string['noaccesssincestartinfomessage'] = 'Olá {$a->userfirstname},
<p>Alguns alunos da disciplina \'{$a->coursename}\' nunca acederam à disciplina.</p>';
$string['nocourseactivity'] = 'Não existe atividade da disciplina suficiente entre o início e o fim da disciplina';
$string['nocourseendtime'] = 'A disciplina não tem data/hora de fim';
$string['nocoursesections'] = 'Disciplina sem secções';
$string['nocoursestudents'] = 'Sem alunos';
$string['norecentaccessesinfomessage'] = 'Olá {$a->userfirstname},
<p>Alguns alunos da disciplina \'{$a->coursename}\' não acederam à disciplina ultimamente.</p>';
$string['noteachinginfomessage'] = 'Olá {$a->userfirstname},
<p>As disciplinas com datas de início na próxima semana foram identificadas como sem inscrições de alunos ou sem professor.</p>';
$string['privacy:completionpath'] = 'Conclusão da disciplina';
$string['privacy:favouritespath'] = 'Informação da disciplina com estrela';
$string['privacy:metadata:activityfavouritessummary'] = 'O sistema da disciplina contém informações sobre quais itens do seletor de atividades foram marcados com uma estrela pelo utilizador.';
$string['privacy:metadata:completionsummary'] = 'A disciplina contém informações do utilizador sobe a conclusão.';
$string['privacy:metadata:favouritessummary'] = 'A disciplina contém informações relacionadas com a disciplina que está a ser marcada com uma estrela pelo utilizador.';
$string['privacy:perpage'] = 'Número de disciplinas a mostrar por página.';
$string['recommend'] = 'Recomendar';
$string['recommendcheckbox'] = 'Recomendar a atividade: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} após a disciplina iniciar';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes da disciplina iniciar';
$string['searchactivitiesbyname'] = 'Procurar atividades por nome';
$string['searchresults'] = 'Resultados da pesquisa: {$a}';
$string['studentsatriskincourse'] = 'Alunos em risco na disciplina \'{$a}\'';
$string['studentsatriskinfomessage'] = 'Olá {$a->userfirstname},
<p>Alguns alunos da disciplina \'{$a->coursename}\' foram identificados como estando em risco.<p/>';
$string['submitsearch'] = 'Submeter pesquisa';
$string['target:coursecompetencies'] = 'Alunos em risco de não alcançar as competências associadas a uma disciplina';
$string['target:coursecompetencies_help'] = 'Esta meta indica se um aluno corre o risco de não atingir as competências associadas a uma disciplina. Esta meta considera que todas as competências associadas a uma disciplina devem ser atingidas até ao fim da disciplina.';
$string['target:coursecompletion'] = 'Alunos em risco de não cumprir as condições de conclusão da disciplina';
$string['target:coursecompletion_help'] = 'Esta meta indica se o aluno é considerado em risco de não cumprir as condições de conclusão da disciplina.';
$string['target:coursedropout'] = 'Alunos em risco de desistir';
$string['target:coursedropout_help'] = 'Esta meta indica se o aluno é considerado em risco de abandono.';
$string['target:coursegradetopass'] = 'Alunos em risco de não obter a nota mínima para passar na disciplina';
$string['target:coursegradetopass_help'] = 'Esta meta indica se o aluno corre o risco de não obter a nota mínima para concluir a disciplina.';
$string['target:noaccesssincecoursestart'] = 'Alunos que ainda não acederam à disciplina';
$string['target:noaccesssincecoursestart_help'] = 'Esta meta descreve os alunos que nunca acederam a uma disciplina em que estão inscritos.';
$string['target:noaccesssincecoursestartinfo'] = 'Os seguintes alunos estão inscritos numa disciplina que já iniciou, mas nunca acederam à disciplina.';
$string['target:norecentaccesses'] = 'Alunos que não acederam à disciplina recentemente';
$string['target:norecentaccesses_help'] = 'Esta meta identifica os alunos que não acederam a uma disciplina em que estão inscritos, no intervalo de análise definido (por predefinição, no mês passado).';
$string['target:norecentaccessesinfo'] = 'Os seguintes alunos não acederam a uma disciplina em que estão inscritos, no intervalo de análise definido (por predefinição, no mês passado).';
$string['target:noteachingactivity'] = 'Disciplinas em risco de não iniciar';
$string['target:noteachingactivity_help'] = 'Esta meta indica se as disciplinas previstas para iniciar na próxima semana terão atividades de ensino.';
$string['target:noteachingactivityinfo'] = 'As disciplinas a seguir, que iniciarão nos próximos dias, correm o risco de não iniciarem porque não têm professores nem alunos inscritos.';
$string['targetlabelstudentcompetenciesno'] = 'Aluno que provavelmente conseguirá alcançar as competências associadas a uma disciplina';
$string['targetlabelstudentcompetenciesyes'] = 'Aluno em risco de não conseguir alcançar as competências associadas a uma disciplina';
$string['targetlabelstudentcompletionno'] = 'Aluno que provavelmente cumprirá as condições de conclusão da disciplina';
$string['targetlabelstudentcompletionyes'] = 'Aluno em risco de não cumprir as condições de conclusão da disciplina';
$string['targetlabelstudentdropoutno'] = 'Não está em risco';
$string['targetlabelstudentdropoutyes'] = 'Aluno em risco de abandono';
$string['targetlabelstudentgradetopassno'] = 'Aluno que provavelmente alcançará a nota mínima para passar na disciplina.';
$string['targetlabelstudentgradetopassyes'] = 'Aluno em risco de não ter a nota mínima para passar na disciplina.';
$string['targetlabelteachingno'] = 'Disciplinas em risco de não iniciar';
$string['targetlabelteachingyes'] = 'Utilizadores com capacidades de ensino que têm acesso à disciplina';
