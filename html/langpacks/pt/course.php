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
 * Strings for component 'course', language 'pt', version '4.5'.
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
$string['activitychoosertabmode_desc'] = 'O seletor de atividades lista atividades e recursos que o professor pode adicionar à sua disciplina. Para adicionar itens ao separador \'Recomendados\', vá a <a href=\'../course/recommendations.php\'>Atividades recomendadas</a>.';
$string['activitychoosertabmodefive'] = 'Com estrela, Recomendado, Tudo';
$string['activitychoosertabmodefour'] = 'Com estrela, Recomendados, Tudo, Atividades, Recursos';
$string['activitychoosertabmodeone'] = 'Com estrela, Tudo, Atividades, Recursos, Recomendados';
$string['activitychoosertabmodesix'] = 'Com estrela, Recomendados, Atividades, Recursos';
$string['activitychoosertabmodethree'] = 'Com estrela, Atividades, Recursos, Recomendados';
$string['activitychoosertabmodetwo'] = 'Com estrela, Tudo, Recomendados';
$string['activitydate:closed'] = 'Fechou:';
$string['activitydate:closes'] = 'Fecha:';
$string['activitydate:opened'] = 'Abriu:';
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
$string['browsecourseadminindex'] = 'Navegue pela administração da disciplina com este índice.';
$string['browsesettingindex'] = 'Navegue pelas configurações com este índice.';
$string['communicationroomlink'] = 'Conversar com os participantes da disciplina';
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
$string['courseaccess'] = 'Acesso à disciplina';
$string['coursealreadyfinished'] = 'Disciplina já terminada';
$string['coursecommunication_desc'] = 'O serviço de comunicação predefinido para as novas disciplinas. As disciplinas existentes não terão nenhum fornecedor selecionado por predefinição.';
$string['coursecontentnotification'] = 'Enviar notificação de alteração de conteúdo';
$string['coursecontentnotification_help'] = 'Se ativar esta opção, será enviada uma notificação aos utilizadores da disciplina sobre qualquer alteração da atividade/recurso ou sobre nova atividade/recurso. Tenha em atenção que a notificação será enviada apenas se o novo recurso ou a nova atividade estiver visível.';
$string['coursecontentnotifnew'] = 'Novo conteúdo em {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> é novo/a na disciplina <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Alterar as preferências de notificação</a></p>';
$string['coursecontentnotifupdate'] = 'Alteração de conteúdo em {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> foi alterado/a na disciplina <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Alterar as preferências de notificação</a></p>';
$string['coursecount'] = 'Total disciplinas';
$string['coursenotyetfinished'] = 'A disciplina ainda não terminou';
$string['coursenotyetstarted'] = 'A disciplina ainda não iniciou';
$string['courseparticipants'] = 'Participantes da disciplina';
$string['coursetoolong'] = 'A disciplina é muito longa';
$string['customfield_islocked'] = 'Bloqueado';
$string['customfield_islocked_help'] = 'Se o campo estiver bloqueado, apenas os utilizadores com a permissão de alterar campos personalizados bloqueados (por predefinição, apenas os utilizadores com a função predefinida de gestor) poderão alterá-lo nas configurações da disciplina.';
$string['customfield_notvisible'] = 'Ninguém';
$string['customfield_visibility'] = 'Visível para';
$string['customfield_visibility_help'] = 'Esta configuração determina quem pode visualizar o nome e o valor do campo personalizado na lista de disciplinas ou no filtro de campo personalizado disponível do Painel do utilizador.';
$string['customfield_visibletoall'] = 'Todos';
$string['customfield_visibletoteachers'] = 'Professores';
$string['customfieldsettings'] = 'Configurações gerais dos campos personalizados da disciplina';
$string['daystakingcourse'] = 'Dias de disciplina';
$string['defaultsettingscategory'] = 'Configurações predefinidas';
$string['downloadcontent'] = 'Incluir no descarregamento do conteúdo da disciplina';
$string['downloadcontent_help'] = 'Esta atividade ou recurso deve ser incluída(o) no arquivo Zip do conteúdo da disciplina disponível para descarregamento? Ficheiros, Pastas, Páginas e Separadores podem ser descarregados na íntegra. Para todas as outras atividades e ou recursos, apenas o nome e a descrição são descarregados. Esta opção requer que a opção \'Ativar descarregamento do conteúdo da disciplina\' esteja ativa nas configurações da disciplina.
Esta configuração não tem efeito no descarregamento de conteúdo através da Aplicação móvel para uso offline.';
$string['downloadcourseconfirmation'] = 'Está prestes a descarregar um arquivo Zip com o conteúdo da disciplina (estão excluídos os itens que não podem ser descarregados e quaisquer ficheiros maiores do que {$a}).';
$string['downloadcoursecontent'] = 'Descarregar o conteúdo da disciplina';
$string['downloadcoursecontent_help'] = 'Esta configuração determina se o conteúdo da disciplina pode, ou não, ser descarregado por utilizadores com a permissão para descarregar o conteúdo da disciplina (por predefinição, utilizadores com o papel de aluno ou professor).';
$string['enabledownloadcoursecontent'] = 'Ativar descarregamento do conteúdo da disciplina';
$string['errorendbeforestart'] = 'A data de fim ({$a}) é anterior à data de início da disciplina';
$string['favourite'] = 'Disciplina com estrela';
$string['filterbothactive'] = 'Primeiro ({$a->first}) Último ({$a->last})';
$string['filterbyname'] = 'Filtrar por nome';
$string['filterfirstactive'] = 'Primeiro ({$a->first})';
$string['filterlastactive'] = 'Último ({$a->last})';
$string['gotosection'] = 'Ir para a secção {$a}';
$string['gradetopassnotset'] = 'Esta disciplina não tem nota de aprovação definida. Pode ser definida em Avaliação da disciplina (Configuração da pauta).';
$string['hideendedcoursestask'] = 'Ocultação de disciplinas na data de fim';
$string['informationformodule'] = 'Informações sobre a atividade {$a}';
$string['module'] = 'Atividade';
$string['namewithlink'] = 'Nome da categoria com hiperligação';
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
$string['participants:perpage'] = 'Participantes por página';
$string['participants:perpage_help'] = 'Especifique o número de participantes a mostrar por página em cada disciplina.';
$string['participantsnavigation'] = 'Participantes de navegação terciária.';
$string['pdfexportfont'] = 'Tipo de letra dos PDF';
$string['pdfexportfont_help'] = 'O tipo de letra a ser usado nos ficheiros PDF gerados, como por exemplo, as submissões nos trabalhos.';
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
$string['searchactivitiesbyname'] = 'Pesquisar atividades por nome';
$string['searchresults'] = 'Resultados da pesquisa: {$a}';
$string['sectionlink'] = 'Hiperligação permanente';
$string['showstartedcoursestask'] = 'Ocultar disciplinas na data de início';
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
$string['totalactivities'] = 'Atividades: {$a}';
