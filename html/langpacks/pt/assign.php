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
 * Strings for component 'assign', language 'pt', version '4.4'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Anexos da atividade trabalho';
$string['activitydate:submissionsdue'] = 'Data limite:';
$string['activitydate:submissionsopen'] = 'Abre:';
$string['activitydate:submissionsopened'] = 'Abriu:';
$string['activityeditor'] = 'Instruções da atividade';
$string['activityeditor_help'] = 'As ações que gostaria que o aluno concluísse neste trabalho. Só é mostrado na página de submissão, onde o aluno edita e submete o trabalho.';
$string['activityoverview'] = 'Atenção aos seus trabalhos! Clique aqui para mais informações.';
$string['addattempt'] = 'Permitir nova tentativa';
$string['addnewattempt'] = 'Adicionar nova tentativa';
$string['addnewattempt_help'] = 'Isto irá criar uma nova submissão em branco.';
$string['addnewattemptfromprevious'] = 'Adicionar nova tentativa baseada na submissão anterior';
$string['addnewattemptfromprevious_help'] = 'Isto irá copiar o conteúdo da sua submissão anterior para a nova submissão para servir de base de trabalho.';
$string['addnewgroupoverride'] = 'Adicionar exceção para grupo';
$string['addnewuseroverride'] = 'Adicionar exceção para utilizador';
$string['addsubmission'] = 'Enviar trabalho';
$string['addsubmission_help'] = 'Ainda não efetuou a submissão.';
$string['allocatedmarker'] = 'Avaliador atribuído';
$string['allocatedmarker_help'] = 'Avaliador atribuído a esta submissão.';
$string['allowsubmissions'] = 'Permitir que o utilizador continue a efetuar submissões neste trabalho.';
$string['allowsubmissionsfromdate'] = 'Aceitar trabalhos a partir de';
$string['allowsubmissionsfromdate_help'] = 'Se ativar esta opção, os alunos não podem submeter os seus trabalhos antes da data/hora definida. Se desativada, podem começar a submeter os trabalhos a partir de agora.';
$string['allowsubmissionsshort'] = 'Permitir atualizar o trabalho (desbloquear)';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativar esta opção, os alunos só poderão ver a descrição do trabalho após a data "Aceitar trabalhos a partir de".';
$string['applytoteam'] = 'Atribuir notas e comentários a todo o grupo';
$string['assign:addinstance'] = 'Adicionar novo trabalho';
$string['assign:editothersubmission'] = 'Editar submissão do aluno';
$string['assign:exportownsubmission'] = 'Exportar o próprio trabalho';
$string['assign:grade'] = 'Avaliar trabalho';
$string['assign:grantextension'] = 'Prolongar o prazo';
$string['assign:manageallocations'] = 'Gerir avaliadores atribuídos a estas submissões';
$string['assign:managegrades'] = 'Rever e lançar notas';
$string['assign:manageoverrides'] = 'Gerir exceções do trabalho';
$string['assign:receivegradernotifications'] = 'Receber notificações de submissão do avaliador';
$string['assign:releasegrades'] = 'Lançar notas';
$string['assign:revealidentities'] = 'Revelar a identidade dos alunos';
$string['assign:reviewgrades'] = 'Rever notas';
$string['assign:showhiddengrader'] = 'Ver a identidade de um avaliador oculto';
$string['assign:submit'] = 'Submeter trabalho';
$string['assign:view'] = 'Ver trabalho';
$string['assign:viewblinddetails'] = 'Ver identidades dos alunos quando as submissões anónimas estão ativadas';
$string['assign:viewgrades'] = 'Ver notas';
$string['assign:viewownsubmissionsummary'] = 'Ver o resumo da própria submissão';
$string['assignfeedback'] = 'Módulo de feedback';
$string['assignfeedbackpluginname'] = 'Módulo de feedback';
$string['assignmentisdue'] = 'Já terminou o prazo para submeter trabalhos';
$string['assignmentmail'] = '{$a->grader} submeteu feedback ao seu trabalho
que submeteu na atividade \'{$a->assignment}\'

Pode ver o feedback em:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} submeteu feedback ao seu trabalho
que submeteu na atividade \'<i>{$a->assignment}</i>\'.</p>
<p>Pode consultar o feedback, anexado à sua submissão do trabalho, em <a href="{$a->url}"></a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} submeteu feedback
ao seu trabalho que submeteu na atividade \'{$a->assignment}\'. Pode consultar o feedback na área do trabalho.';
$string['assignmentname'] = 'Designação';
$string['assignmentplugins'] = 'Trabalho';
$string['assignmentsperpage'] = 'Número de trabalhos por página';
$string['assignsubmission'] = 'Módulo de submissão';
$string['assignsubmissionpluginname'] = 'Módulo de submissão';
$string['assigntimeleft'] = 'Tempo restante';
$string['attemptheading'] = 'Tentativa {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Tentativas anteriores';
$string['attemptnumber'] = 'Número da tentativa';
$string['attemptreopenmethod'] = 'Tentativas adicionais';
$string['attemptreopenmethod_help'] = 'Esta configuração determina se o aluno pode realizar outras tentativas no trabalho. Para cada tentativa, a nota e o feedback são guardados e podem ser visualizados pelo professor e pelo aluno. As opções disponíveis são:

* Nunca - apenas é possível uma tentativa.
* Manualmente -  um professor pode adicionar tentativas adicionais
* Automaticamente até obter aproveitamento - são permitidas tentativas adicionais automaticamente até que o aluno obtenha a nota de aprovação definida nas configurações do trabalho.';
$string['attemptreopenmethod_manual'] = 'Manualmente';
$string['attemptreopenmethod_none'] = 'Nunca';
$string['attemptreopenmethod_untilpass'] = 'Automaticamente até obter aproveitamento';
$string['attemptsettings'] = 'Configurações da tentativa';
$string['availability'] = 'Disponibilidade';
$string['back'] = 'Voltar';
$string['backtoassignment'] = 'Voltar ao trabalho';
$string['batchoperationconfirmaddattempt'] = 'Permitir outra tentativa para as submissões selecionadas?';
$string['batchoperationconfirmdownloadselected'] = 'Descarregar as submissões selecionadas?';
$string['batchoperationconfirmgrantextension'] = 'Prolongar o prazo para todas as submissões selecionadas?';
$string['batchoperationconfirmlock'] = 'Bloquear todos os trabalhos selecionados?';
$string['batchoperationconfirmremovesubmission'] = 'Pretende remover as submissões selecionadas?';
$string['batchoperationconfirmreverttodraft'] = 'Reverter as submissões selecionadas para o estado “Trabalho em curso”?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Definir atribuição de avaliadores para todas as submissões selecionadas?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Definir "Usar processo de avaliação" para todas as submissões selecionadas?';
$string['batchoperationconfirmunlock'] = 'Desbloquear todos os trabalhos selecionados?';
$string['batchoperationlock'] = 'bloquear trabalhos';
$string['batchoperationreverttodraft'] = 'reverter submissões para “Trabalho em curso”';
$string['batchoperationsdescription'] = 'Com os selecionados, executar a ação:';
$string['batchoperationunlock'] = 'desbloquear trabalhos';
$string['batchsetallocatedmarker'] = 'Definir avaliador atribuído a {$a} utilizador(es) selecionado(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Definir processo de avaliação por estados para {$a} utilizador(es) selecionado(s).';
$string['beginassignment'] = 'Iniciar trabalho';
$string['blindmarking'] = 'Submissões anónimas';
$string['blindmarking_help'] = 'As submissões anónimas ocultam a identidade dos alunos aos avaliadores. As configurações das submissões anónimas ficarão bloqueadas assim que um trabalho ou nota forem submetidos neste trabalho.';
$string['blindmarkingenabledwarning'] = 'As \'Submissões anónimas\' estão ativadas nesta atividade. As notas não serão adicionadas à pauta até que as identidades dos alunos sejam reveladas através do menu de ação da avaliação.';
$string['cachedef_overrides'] = 'Informações da exceção para utilizador e para grupo';
$string['calendardue'] = 'Termina o prazo de \'{$a}\'';
$string['calendargradingdue'] = 'Termina o prazo de avaliação de \'{$a}\'';
$string['caneditsubmission'] = 'Pode editar a sua submissão após o limite de tempo ter expirado, mas será marcado como atrasado.';
$string['changefilters'] = 'Alterar filtros';
$string['changeuser'] = 'Alterar utilizador';
$string['choosegradingaction'] = 'Ação de avaliação';
$string['choosemarker'] = 'Escolha...';
$string['chooseoperation'] = 'Selecione a operação';
$string['clickexpandreviewpanel'] = 'Clique para expandir o painel de revisão';
$string['collapsegradepanel'] = 'Contrair o painel de avaliação';
$string['collapsereviewpanel'] = 'Contrair o painel de revisão';
$string['comment'] = 'Comentário';
$string['completiondetail:submit'] = 'Submeter trabalho';
$string['completionsubmit'] = 'Submeter o trabalho';
$string['configshowrecentsubmissions'] = 'Se ativar esta opção, todos podem ver as notificações de trabalhos submetidos nos relatórios de atividade recente.';
$string['confirmbatchgradingoperation'] = 'Tem a certeza de que pretende {$a->operation} para {$a->count} alunos?';
$string['confirmstart'] = 'Tem um tempo limite de {$a} para concluir este trabalho. Quando começar, o temporizador começará a contagem decrescente e não é possível parar ou fazer pausa.';
$string['confirmsubmission'] = 'Tem a certeza de que pretende submeter o seu trabalho para avaliação? Não poderá realizar mais alterações.';
$string['confirmsubmissionheading'] = 'Confirmar submissão';
$string['conversionexception'] = 'Não foi possível converter o trabalho. A exceção foi: {$a}.';
$string['couldnotconvertgrade'] = 'Não foi possível converter a nota do trabalho do aluno {$a}.';
$string['couldnotconvertsubmission'] = 'Não foi possível converter o trabalho submetido pelo aluno {$a}.';
$string['couldnotcreatecoursemodule'] = 'Não foi possível criar o módulo da disciplina.';
$string['couldnotcreatenewassignmentinstance'] = 'Não foi possível criar uma nova instância do trabalho.';
$string['couldnotfindassignmenttoupgrade'] = 'Não foi possível encontrar antigas instância do trabalho para atualizar.';
$string['crontask'] = 'Processamento em segundo plano do módulo Trabalho';
$string['currentassigngrade'] = 'Nota atual do trabalho';
$string['currentattempt'] = 'Tentativa {$a}';
$string['currentattemptof'] = 'Esta é a {$a->attemptnumber}.ª tentativa (em {$a->maxattempts} tentativas permitidas).';
$string['currentgrade'] = 'Nota atual na pauta';
$string['cutoffdate'] = 'Data de fecho';
$string['cutoffdate_help'] = 'Se ativar esta opção, não serão aceites submissões do trabalho após esta data, exceto se houver prorrogação do prazo. Se desativado, as submissões serão sempre aceites.';
$string['cutoffdatecolon'] = 'Data de fecho: {$a}';
$string['cutoffdatefromdatevalidation'] = 'A data de fecho não pode ser anterior à data de início das submissões.';
$string['cutoffdatevalidation'] = 'Data de fecho não pode ser anterior à data limite para submeter trabalhos.';
$string['defaultlayout'] = 'Restaurar a estrutura predefinida';
$string['defaultsettings'] = 'Configurações predefinidas do trabalho';
$string['defaultsettings_help'] = 'Estas configurações definem as opções predefinidas para os trabalhos que criar futuramente.';
$string['defaultteam'] = 'Grupo predefinido';
$string['deleteallsubmissions'] = 'Apagar todas as submissões';
$string['description'] = 'Descrição';
$string['disabled'] = 'Desativar';
$string['downloadall'] = 'Descarregar todos os trabalhos';
$string['downloadasfolders'] = 'Descarregar submissões em pastas separadas';
$string['downloadasfolders_help'] = 'Os trabalhos submetidos podem ser descarregados em diferentes pastas. Cada submissão é colocada numa pasta separada, sendo mantida a estrutura de quaisquer subpastas e os nomes dos ficheiros não serão alterados.';
$string['downloadselectedsubmissions'] = 'Descarregar as submissões selecionadas';
$string['duedate'] = 'Data limite para submeter trabalhos';
$string['duedate_help'] = 'Se definida, será a data limite para a submissão dos trabalhos. Continuará a ser possível submeter trabalhos após esta data, mas será atribuído o estado "Submetido com atraso". Defina uma data de fecho para impedir submissões após uma determinada data.';
$string['duedateaftersubmissionvalidation'] = 'A data limite tem de ser posterior à data de início de aceitação de trabalhos.';
$string['duedatecolon'] = 'Data limite para submeter trabalhos: {$a}';
$string['duedatereached'] = 'A data limite de submissão deste trabalho já foi ultrapassada.';
$string['duedatevalidation'] = 'A data limite tem de ser posterior à data de início das submissões.';
$string['duplicateoverride'] = 'Duplicar exceção';
$string['editaction'] = 'Ações…';
$string['editattemptfeedback'] = 'Editar a nota e o feedback da tentativa número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Está a editar o feedback de uma tentativa anterior. Esta é a tentativa {$a->attemptnumber} de {$a->totalattempts}.';
$string['editingstatus'] = 'Editar o estado';
$string['editonline'] = 'Editar online';
$string['editoverride'] = 'Editar exceção';
$string['editsubmission'] = 'Editar submissão';
$string['editsubmission_help'] = 'Pode fazer alterações à sua submissão.';
$string['editsubmissionother'] = 'Editar submissão de {$a}';
$string['enabled'] = 'Ativado';
$string['enabletimelimit'] = 'Ativar trabalhos cronometrados';
$string['enabletimelimit_help'] = 'Se ativar esta opção, poderá definir um limite de tempo na página das configurações do trabalho.';
$string['errornosubmissions'] = 'Não existem trabalhos submetidos para descarregar';
$string['errorquickgradingvsadvancedgrading'] = 'As notas não foram guardadas porque este trabalho está a usar um método de avaliação avançado.';
$string['errorrecordmodified'] = 'As notas não foram guardadas porque alguém alterou um ou mais registos desde o momento em que acedeu à página.';
$string['eventallsubmissionsdownloaded'] = 'Todas as submissões estão a ser descarregadas.';
$string['eventassessablesubmitted'] = 'Enviada uma submissão do trabalho';
$string['eventbatchsetmarkerallocationviewed'] = 'Página de atribuição de avaliador visualizada';
$string['eventbatchsetworkflowstateviewed'] = 'Página de definição do processo de avaliação visualizada';
$string['eventextensiongranted'] = 'Foi concedido um prolongamento da data limite';
$string['eventfeedbackupdated'] = 'Feedback atualizado';
$string['eventfeedbackviewed'] = 'Feedback visualizado';
$string['eventgradingformviewed'] = 'Formulário de avaliação visualizado';
$string['eventgradingtableviewed'] = 'Grelha de avaliação visualizada';
$string['eventidentitiesrevealed'] = 'As identidades foram reveladas';
$string['eventmarkerupdated'] = 'O avaliador atribuído foi atualizado';
$string['eventoverridecreated'] = 'Exceção para trabalho criada';
$string['eventoverridedeleted'] = 'Exceção para trabalho apagada';
$string['eventoverrideupdated'] = 'Exceção para trabalho atualizada';
$string['eventremovesubmissionformviewed'] = 'Visualizada a confirmação da remoção da submissão';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Página de confirmação para revelar identidades visualizada';
$string['eventstatementaccepted'] = 'Utilizador aceitou a declaração de submissão';
$string['eventsubmissionconfirmationformviewed'] = 'Formulário de confirmação de submissão visualizado';
$string['eventsubmissioncreated'] = 'Submissão criada';
$string['eventsubmissionduplicated'] = 'Utilizador duplicou a sua submissão';
$string['eventsubmissionformviewed'] = 'Formulário de submissão visualizado';
$string['eventsubmissiongraded'] = 'A submissão foi avaliada';
$string['eventsubmissionlocked'] = 'As submissões foram bloqueadas para um utilizador.';
$string['eventsubmissionremoved'] = 'Submissão removida.';
$string['eventsubmissionstatusupdated'] = 'Estado da submissão atualizado';
$string['eventsubmissionstatusviewed'] = 'Estado da submissão visualizado';
$string['eventsubmissionunlocked'] = 'As submissões foram desbloqueadas para um utilizador.';
$string['eventsubmissionupdated'] = 'Submissão atualizada';
$string['eventsubmissionviewed'] = 'Submissão visualizada';
$string['eventworkflowstateupdated'] = 'O estado do processo de avaliação foi atualizado.';
$string['expandreviewpanel'] = 'Expandir painel de revisão';
$string['extensionduedate'] = 'Prolongamento do prazo';
$string['extensionduedatecurrent'] = 'Data do prolongamento de prazo atual';
$string['extensionduedatenone'] = 'Nenhum';
$string['extensionnotafterduedate'] = 'A data de prolongamento deve ser posterior à data limite';
$string['extensionnotafterfromdate'] = 'A data de prorrogação deve ser posterior à data definida para iniciar a aceitação de trabalhos';
$string['feedback'] = 'Feedback';
$string['feedbackavailableanonhtml'] = 'Existe um novo feedback referente à sua submissão do trabalho na atividade \'<i>{$a->assignment}</i>\'<br /><br />
Pode consultá-lo anexado à <a href="{$a->url}">submissão do seu trabalho</a>.';
$string['feedbackavailableanonsmall'] = 'Novo feedback para o trabalho na atividade \'{$a->assignment}\'';
$string['feedbackavailableanontext'] = 'Existe um novo feedback relativo à sua submissão do trabalho na atividade \'{$a->assignment}\'

Pode vê-lo anexado à submissão do seu trabalho:

{$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} submeteu feedback ao seu trabalho que submeteu na atividade \'<i>{$a->assignment}</i>\'<br /><br />
Pode vê-lo anexado à <a href="{$a->url}">submissão do seu trabalho</a>.';
$string['feedbackavailablesmall'] = '{$a->username} submeteu feedback ao seu trabalho na atividade \'{$a->assignment}\'';
$string['feedbackavailabletext'] = '{$a->username} submeteu feedback ao seu trabalho que submeteu na atividade \'{$a->assignment}\'

Pode consultar o feedback em:
    {$a->url}';
$string['feedbackplugin'] = 'Módulo de feedback';
$string['feedbackpluginforgradebook'] = 'Módulo de feedback que irá inserir os comentários na pauta.';
$string['feedbackpluginforgradebook_help'] = 'Apenas um módulo de feedback do trabalho pode enviar feedback para a pauta.';
$string['feedbackplugins'] = 'Módulos de feedback';
$string['feedbacksettings'] = 'Configurações do feedback do avaliador';
$string['feedbacktypes'] = 'Tipos de feedback';
$string['filesubmissions'] = 'Submissões de ficheiros';
$string['filter'] = 'Filtro';
$string['filterdraft'] = 'Rascunho';
$string['filtergrantedextension'] = 'Prazo prolongado';
$string['filternone'] = 'Sem filtro';
$string['filternotsubmitted'] = 'Não submetidos';
$string['filterrequiregrading'] = 'Trabalhos por avaliar';
$string['filtersubmitted'] = 'Trabalhos submetidos';
$string['fixrescalednullgrades'] = 'Este trabalho contém algumas notas incorretas. Pode <a href="{$a->link}">corrigir automaticamente as notas</a>. Isto pode afetar os totais da disciplina.';
$string['fixrescalednullgradesconfirm'] = 'Tem a certeza de que pretende corrigir as notas erradas? Todas as notas afetadas serão removidas. Isto pode afetar os totais da disciplina.';
$string['fixrescalednullgradesdone'] = 'Notas corrigidas.';
$string['gradeabovemaximum'] = 'A nota deve ser menor ou igual a {$a}.';
$string['gradebelowzero'] = 'A nota deve ser maior ou igual a 0.';
$string['gradebreakdown'] = 'Detalhe da nota';
$string['gradecanbechanged'] = 'A nota pode ser alterada.';
$string['gradechangessaveddetail'] = 'As alterações à nota e/ou ao feedback foram guardadas';
$string['graded'] = 'Avaliado';
$string['gradedby'] = 'Avaliado por';
$string['gradedfollowupsubmit'] = 'Avaliada - resubmetida';
$string['gradedon'] = 'Avaliado em';
$string['gradeitem:submissions'] = 'Submissões';
$string['gradelocked'] = 'Esta nota está bloqueada ou foi ajustada na pauta.';
$string['gradeoutof'] = 'Nota (de 0 a {$a})';
$string['gradeoutofhelp'] = 'Avaliação';
$string['gradeoutofhelp_help'] = 'Insira aqui a nota do trabalho do aluno. Pode incluir casas decimais.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} atualizou a submissão do seu trabalho na atividade "{$a->assignment}", <i>{$a->timeupdated}</i><br /><br />
<a href="{$a->url}">Consultar no Moodle</a>';
$string['gradersubmissionupdatedsmall'] = '{$a->username} atualizou o seu trabalho na atividade \'{$a->assignment}\'.';
$string['gradersubmissionupdatedtext'] = '{$a->username} atualizou a submissão do trabalho na atividade \'{$a->assignment}\' - {$a->timeupdated}
Pode consultar aqui:

    {$a->url}';
$string['gradestudent'] = 'Avaliação do aluno: (ID = {$a->id}, nome completo = {$a->fullname}).';
$string['gradeuser'] = 'Avaliar {$a}';
$string['grading'] = 'A avaliar';
$string['gradingchangessaved'] = 'As alterações feitas à nota foram guardadas';
$string['gradingduedate'] = 'Lembrete para terminar avaliação antes de';
$string['gradingduedate_help'] = 'A data prevista para a conclusão das avaliações. Esta data é usada para definir a prioridade das notificações para os professores no seu painel do utilizador.';
$string['gradingdueduedatevalidation'] = 'O lembrete não pode ser anterior à data limite.';
$string['gradingduefromdatevalidation'] = 'A data/hora do lembrete para terminar a avaliação não pode ser anterior à data de "Aceitar trabalhos a partir de".';
$string['gradingmethodpreview'] = 'Critérios de avaliação';
$string['gradingoptions'] = 'Configurar tabela de trabalhos e avaliação';
$string['gradingstatus'] = 'Estado da avaliação';
$string['gradingstudent'] = 'Avaliar aluno';
$string['gradingsummary'] = 'Estado da avaliação';
$string['grantextension'] = 'Prolongar o prazo';
$string['grantextensionforusers'] = 'Prolongar prazo a {$a} alunos';
$string['groupoverrides'] = 'Exceções para grupos';
$string['groupoverridesdeleted'] = 'Exceções para grupos apagadas';
$string['groupsnone'] = 'Sem grupos a que possa aceder.';
$string['groupsubmissionsettings'] = 'Configurações das submissões em grupo';
$string['hiddenuser'] = 'Participante';
$string['hidegrader'] = 'Ocultar a identidade do avaliador';
$string['hidegrader_help'] = 'Se ativar esta opção, a identidade do utilizador que avaliou a submissão do trabalho não será mostrada, de modo a que os alunos não possam saber quem avaliou o seu trabalho.

Tenha em atenção que esta configuração não tem efeito na caixa de comentários na página de avaliação.';
$string['hideshow'] = 'Mostrar/Ocultar';
$string['inactiveoverridehelp'] = '* Esta exceção está inativa porque o acesso do utilizador à atividade é restrito. Pode ser devido às atribuições de papel ou de grupo, outras restrições de acesso ou a atividade está oculta.';
$string['indicator:cognitivedepth'] = 'Compreensão do Trabalho';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na capacidade cognitiva alcançada pelo aluno numa atividade de trabalho.';
$string['indicator:cognitivedepthdef'] = 'Compreensão do Trabalho';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pelas atividades Trabalho durante esse intervalo de análise (Níveis = Não visualizado, Visualizado, Submetido, Feedback visualizado, Comentários ao feedback, Voltar a submeter após visualizar feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Socialização do Trabalho';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno numa atividade de trabalho.';
$string['indicator:socialbreadthdef'] = 'Socialização do Trabalho';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social proposto pelas atividades Trabalho durante este intervalo de análise (Níveis = Sem participação, Participante individual, Participante com outros)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'Ficheiros de instruções';
$string['introattachments'] = 'Ficheiros adicionais';
$string['introattachments_help'] = 'Podem ser adicionados ficheiros para utilização no trabalho, como por exemplo modelos de resposta.';
$string['invalidfloatforgrade'] = 'A avaliação submetida não é perceptivel: {$a}';
$string['invalidgradeforscale'] = 'A avaliação atríbuida não é válida para a escala em uso';
$string['invalidoverrideid'] = 'O ID da exceção não é válido';
$string['lastmodifiedgrade'] = 'Última atualização (avaliação)';
$string['lastmodifiedsubmission'] = 'Última atualização (submissão)';
$string['latesubmissions'] = 'Submissões com atraso';
$string['latesubmissionsaccepted'] = 'Disponível até {$a}';
$string['loading'] = 'A carregar...';
$string['locksubmissionforstudent'] = 'Impedir novas submissões para o aluno: (ID = {$a->id}, nome completo = {$a->fullname}).';
$string['locksubmissions'] = 'Bloquear trabalhos';
$string['manageassignfeedbackplugins'] = 'Gerir módulos de feedback do trabalho';
$string['manageassignsubmissionplugins'] = 'Gerir módulos de submissão do trabalho';
$string['marker'] = 'Avaliador';
$string['markerfilter'] = 'Filtro por avaliador';
$string['markerfilternomarker'] = 'Sem avaliador';
$string['markingallocation'] = 'Usar atribuição de avaliador';
$string['markingallocation_help'] = 'Se ativar esta opção, os avaliadores podem ser atribuídos a determinados alunos - requer ativação do processo de avaliação.';
$string['markinganonymous'] = 'Lançamento parcial das notas durante a avaliação anónima';
$string['markinganonymous_help'] = 'Se ativado conjuntamente com Submissões anónimas e Processo de avaliação, permite o lançamento parcial das notas durante a avaliação anónima';
$string['markingworkflow'] = 'Usar processo de avaliação';
$string['markingworkflow_help'] = 'Se ativar esta opção, as notas irão passar por diversos estados do  processo de avaliação antes de serem lançadas para os alunos. Isto permite efetuar várias rondas de avaliação e permite que as notas sejam lançadas para todos os alunos ao mesmo tempo.';
$string['markingworkflowstate'] = 'Estado do processo de avaliação';
$string['markingworkflowstate_help'] = 'Os estados do processo de avaliação poderão incluir as seguintes opções (dependendo das suas permissões de utilizador):

- Não avaliado: o avaliador ainda não iniciou a avaliação;
- Em avaliação: o avaliador iniciou a avaliação mas ainda não está concluída;
- Avaliação concluída: o avaliador terminou a avaliação mas ainda poderá ser sujeita a análise e/ou alterações;
- Em validação: o professor responsável está a proceder à validação qualitativa;
- Avaliação validada: o professor responsável validou a avaliação mas ainda não está disponível para os alunos;
- Avaliação publicada: os alunos podem aceder às notas/feedback.';
$string['markingworkflowstateinmarking'] = 'Em avaliação';
$string['markingworkflowstateinreview'] = 'Em validação';
$string['markingworkflowstatenotmarked'] = 'Não avaliado';
$string['markingworkflowstatereadyforrelease'] = 'Avaliação validada';
$string['markingworkflowstatereadyforreview'] = 'Avaliação concluída';
$string['markingworkflowstatereleased'] = 'Nota lançada';
$string['maxattempts'] = 'Número máximo de tentativas';
$string['maxattempts_help'] = 'Número máximo de tentativas de submissão permitidas a um aluno. Após ser atingido este número de tentativas, a submissão do aluno não poderá ser reaberta.';
$string['maxgrade'] = 'Nota máxima';
$string['maxperpage'] = 'Número máximo de trabalhos por página';
$string['maxperpage_help'] = 'O número máximo de trabalhos por avaliar a mostrar na página de avaliação dos trabalhos. Útil para evitar elevados tempos de espera em disciplinas com um grande número de participantes.';
$string['messageprovider:assign_notification'] = 'Notificações dos trabalhos';
$string['modulename'] = 'Trabalho';
$string['modulename_help'] = 'A atividade Trabalho permite ao professor definir tarefas ou disponibilizar o enunciado de um trabalho, recolher submissões dos alunos e rever, avaliar e dar feedback.

Os alunos podem submeter ficheiros, tais como documentos de texto, folhas de cálculo, imagens, sons e vídeos. Em alternativa, ou como complemento, o trabalho pode incluir a submissão de um texto usando o editor de texto do Moodle. Esta atividade pode também servir para lembrar os alunos de atividades presenciais, como exames ou trabalhos, em que não é necessário submeter qualquer ficheiro ou texto. Os alunos podem submeter o trabalho individualmente ou em grupo.

Ao avaliar os trabalhos, os professores podem inserir comentários de feedback e submeter ficheiros, nomeadamente o ficheiro de trabalho do aluno com comentários ou um ficheiro de áudio com o feedback. Os trabalhos podem ser avaliados utilizando uma escala numérica, uma escala personalizada ou um critério avançado de avaliação como, por exemplo, as grelhas qualitativas. As notas dos trabalhos são registadas na pauta da disciplina.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Trabalhos';
$string['moreusers'] = 'mais {$a}...';
$string['multipleteams'] = 'Inscrito em mais do que um grupo';
$string['multipleteams_desc'] = 'Este trabalho requer submissão em grupos. Você é membro de mais do que um grupo. Para conseguir submeter deve ser membro de apenas um grupo. Por favor, contacte o seu professor para alterar a sua participação nos grupos.';
$string['multipleteamsgrader'] = 'Não pode fazer submissões deste trabalho porque está inscrito em mais do que um grupo.';
$string['newsubmissions'] = 'Trabalhos submetidos';
$string['nextuser'] = 'Utilizador seguinte';
$string['noattempt'] = 'Nenhuma submissão';
$string['noclose'] = 'Sem data de fecho';
$string['nofiles'] = 'Não foi submetido nenhum ficheiro';
$string['nofilters'] = 'Sem filtros';
$string['nograde'] = 'Sem avaliação';
$string['nogroupoverrides'] = 'Não existem exceções para grupos.';
$string['nomoresubmissionsaccepted'] = 'Apenas disponível aos alunos a quem tenha sido concedida uma prorrogação do prazo.';
$string['none'] = 'Nenhum';
$string['noonlinesubmissions'] = 'Este trabalho não requer que submeta nada online.';
$string['noopen'] = 'Sem data de início';
$string['nooverridedata'] = 'Tem de definir uma exceção em pelo menos uma opção da configuração do Trabalho.';
$string['nosavebutnext'] = 'Seguinte';
$string['nosubmission'] = 'Nenhuma submissão efetuada';
$string['nosubmissionyet'] = 'Ainda não foram submetidos trabalhos';
$string['noteam'] = 'Não está inscrito em nenhum grupo';
$string['noteam_desc'] = 'Este trabalho requer submissão em grupos. Como não é membro de qualquer grupo, não é possível criar uma submissão. Por favor, contacte o seu professor para ser adicionado a um grupo.';
$string['noteamgrader'] = 'Não pode submeter trabalhos porque não está inscrito em nenhum grupo.';
$string['notgraded'] = 'Sem avaliação';
$string['notgradedyet'] = 'Ainda não foi avaliado';
$string['notifications'] = 'Notificações';
$string['nouseroverrides'] = 'Não existem exceções para utilizadores.';
$string['nousers'] = 'Sem utilizadores';
$string['nousersselected'] = 'Sem alunos selecionados';
$string['numberofdraftsubmissions'] = 'Trabalhos em curso';
$string['numberofparticipants'] = 'Número de alunos';
$string['numberofsubmissionsneedgrading'] = 'Requerem avaliação';
$string['numberofsubmissionsneedgradinglabel'] = 'Por avaliar: {$a}';
$string['numberofsubmittedassignments'] = 'Número de trabalhos submetidos';
$string['numberofteams'] = 'Grupos';
$string['offline'] = 'Não é necessário submeter nada online';
$string['open'] = 'Abrir';
$string['opensubmissionexists'] = 'Já existe a abertura das submissões do trabalho.';
$string['outlinegrade'] = 'Avaliação: {$a}';
$string['outof'] = '{$a->current} de {$a->total}';
$string['overdue'] = 'Trabalho está \'{$a}\' atrasado';
$string['override'] = 'Exceção';
$string['overridedeletegroupsure'] = 'Tem a certeza de que pretende apagar a exceção para o grupo \'{$a}\'?';
$string['overridedeleteusersure'] = 'Tem a certeza de que pretende apagar a exceção para o utilizador \'{$a}\'?';
$string['overridegroup'] = 'Exceção para grupo';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Exceções';
$string['overrideuser'] = 'Exceção para o utilizador';
$string['overrideusereventname'] = '{$a->assign} - Exceção';
$string['page-mod-assign-view'] = 'Página principal e de submissão do trabalho';
$string['page-mod-assign-x'] = 'Qualquer página da atividade trabalho';
$string['paramtimeremaining'] = 'Tempo restante: {$a}';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administração do Trabalho';
$string['pluginname'] = 'Trabalho';
$string['preventsubmissionnotingroup'] = 'Requer grupo para submeter trabalho';
$string['preventsubmissionnotingroup_help'] = 'Se ativar esta opção, os utilizadores que não sejam membros de um grupo não poderão fazer submissões.';
$string['preventsubmissions'] = 'Impedir novas submissões do aluno para este trabalho (bloquear)';
$string['preventsubmissionsshort'] = 'Impedir novas submissões (bloquear)';
$string['previous'] = 'Anterior';
$string['previoususer'] = 'Utilizador anterior';
$string['privacy:attemptpath'] = 'Tentativa {$a}';
$string['privacy:blindmarkingidentifier'] = 'O identificador usado para as submissões anónimas';
$string['privacy:gradepath'] = 'Avaliação';
$string['privacy:metadata:assigndownloadasfolders'] = 'Se  os vários ficheiros submetidos devem, ou não, ser descarregados em pastas';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Dados de feedback para o trabalho';
$string['privacy:metadata:assignfilter'] = 'Opções de filtro tais como "Submetido", "Não submetido", "Por avaliar" e "Prazo prolongado"';
$string['privacy:metadata:assigngrades'] = 'Armazena as avaliações do trabalho dos utilizadores';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtrar o resumo pela avaliação atribuída';
$string['privacy:metadata:assignmentid'] = 'ID do trabalho';
$string['privacy:metadata:assignmessageexplanation'] = 'Mensagens enviadas aos alunos através do sistema de mensagens.';
$string['privacy:metadata:assignoverrides'] = 'Armazena informação das exceções do trabalho';
$string['privacy:metadata:assignperpage'] = 'Número de trabalhos por página';
$string['privacy:metadata:assignquickgrading'] = 'A preferência de ser, ou não, usada a avaliação rápida';
$string['privacy:metadata:assignsubmissiondetail'] = 'Armazena informação acerca da submissão do utilizador';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Dados de submissão do trabalho';
$string['privacy:metadata:assignuserflags'] = 'Armazena metadados do utilizador, tais como, prorrogação dos prazos';
$string['privacy:metadata:assignusermapping'] = 'O mapeamento para as submissões anónimas';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtrar pelos diferentes estado do processo de avaliação';
$string['privacy:metadata:grade'] = 'Avaliação numérica para esta submissão do trabalho. Pode ser determinada por escalas/formas de avaliação avançadas, etc., mas irá ser sempre convertida novamente para número';
$string['privacy:metadata:grader'] = 'ID do utilizador da pessoa que avaliou';
$string['privacy:metadata:groupid'] = 'ID do grupo a que o utilizador pertence';
$string['privacy:metadata:latest'] = 'Simplifica as consultas de informação apenas sobre a última tentativa.';
$string['privacy:metadata:mailed'] = 'Este utilizador já foi notificado?';
$string['privacy:metadata:timecreated'] = 'Data e hora de criação';
$string['privacy:metadata:timestarted'] = 'Data e hora de início';
$string['privacy:metadata:userid'] = 'ID do utilizador';
$string['privacy:studentpath'] = 'Submissões dos alunos';
$string['privacy:submissionpath'] = 'Submissão';
$string['quickgrading'] = 'Avaliação rápida';
$string['quickgrading_help'] = 'A avaliação rápida permite que atribua as notas diretamente na tabela de trabalhos e avaliação. Não funciona nos métodos de avaliação avançados nem é recomendada quando existem mais que um professor a avaliar.';
$string['quickgradingchangessaved'] = 'As atualizações das notas foram guardadas';
$string['quickgradingresult'] = 'Avaliação rápida';
$string['recordid'] = 'Identificador';
$string['relativedatessubmissiontimeleft'] = 'Calculado para cada aluno';
$string['removeallgroupoverrides'] = 'Apagar todas as exceções para grupos';
$string['removealluseroverrides'] = 'Apagar todas as exceções para utilizadores';
$string['removesubmission'] = 'Remover submissão';
$string['removesubmissionconfirm'] = 'Tem a certeza de que pretende remover a sua submissão?';
$string['removesubmissionconfirmforstudent'] = 'Tem a certeza de que pretende remover a submissão de \'{$a}\'?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Tem a certeza de que pretende remover a submissão de \'{$a}\'? Tenha em atenção que isso não redefinirá o limite de tempo do aluno para submeter. Pode conceder mais tempo adicionando uma exceção de limite de tempo ao aluno.';
$string['removesubmissionconfirmwithtimelimit'] = 'Tem a certeza de que pretende remover a sua submissão? Tenha em atenção que isso não redefinirá o seu limite de tempo para submeter.';
$string['removesubmissionforstudent'] = 'Remover submissão do aluno: (ID={$a->id}, nome completo={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = '\'Automaticamente até obter aproveitamento\' é incompatível com as submissões anónimas, porque as notas não são lançadas na pauta até que as identidades dos alunos sejam reveladas.';
$string['requireallteammemberssubmit'] = 'Todos os membros do grupo têm de submeter o trabalho';
$string['requireallteammemberssubmit_help'] = 'Esta configuração deve ser usada juntamente com "Ativar o botão \'Submeter o trabalho\'" nas Configurações da submissão do trabalho.

Se ativar esta opção, todos os membros do grupo de alunos têm de clicar no botão Submeter para que o trabalho do grupo seja considerado submetido. Se desativar esta opção, qualquer um dos membros do grupo pode clicar no botão Submeter.';
$string['requiresubmissionstatement'] = 'Alunos têm de aceitar a declaração de submissão';
$string['requiresubmissionstatement_help'] = 'Se ativar esta opção, os alunos têm de aceitar a declaração de submissão para todas as submissões deste trabalho.';
$string['revealidentities'] = 'Revelar as identidades dos alunos';
$string['revealidentitiesconfirm'] = 'Tem a certeza de que pretende revelar as identidades dos alunos para este trabalho? Esta operação é irreversível. Uma vez reveladas as identidades dos alunos, as notas serão disponibilizadas na pauta.';
$string['reverttodefaults'] = 'Restaurar as predefinições do trabalho';
$string['reverttodraft'] = 'Reverter submissão para “Trabalho em curso”';
$string['reverttodraftforgroup'] = 'Reverter a submissão para rascunho para o grupo {$a}.';
$string['reverttodraftforstudent'] = 'Reverter para o estado “Trabalho em curso” a submissão do aluno: (ID = {$a->id}, nome completo = {$a->fullname}).';
$string['reverttodraftshort'] = 'Reverter submissão para “Trabalho em curso”';
$string['reviewed'] = 'Revisto';
$string['save'] = 'Guardar';
$string['saveallquickgradingchanges'] = 'Guardar todas as alterações da avaliação rápida';
$string['saveandcontinue'] = 'Guardar e continuar';
$string['savechanges'] = 'Guardar alterações';
$string['savegradingresult'] = 'Avaliar';
$string['savenext'] = 'Guardar e mostrar seguinte';
$string['saveoverrideandstay'] = 'Guardar e adicionar outra exceção';
$string['savingchanges'] = 'A guardar as alterações...';
$string['scale'] = 'Escala';
$string['search:activity'] = 'Trabalho - informações da atividade';
$string['selectedusers'] = 'Utilizadores selecionados';
$string['selectlink'] = 'Selecionar…';
$string['selectuser'] = 'Selecione {$a}';
$string['sendlatenotifications'] = 'Notificar submissões atrasadas aos avaliadores';
$string['sendlatenotifications_help'] = 'Se ativar esta opção, os avaliadores (geralmente os professores) receberão uma mensagem quando um aluno submete um trabalho fora do prazo. Os métodos das mensagens são configuráveis.';
$string['sendnotifications'] = 'Notificar submissões aos avaliadores';
$string['sendnotifications_help'] = 'Se ativar esta opção, os avaliadores (geralmente os professores) receberão uma mensagem sempre que um aluno submete um trabalho, antes, durante ou fora do prazo. Os métodos das mensagens são configuráveis.';
$string['sendstudentnotifications'] = 'Notificar alunos';
$string['sendstudentnotifications_help'] = 'Se ativar esta opção, os alunos recebem uma mensagem sobre a atualização da nota e/ou feedback. Se neste trabalho estiver ativa a opção "Usar processo de avaliação", as notificações não serão enviadas até que o estado seja "Nota lançada".';
$string['sendstudentnotificationsdefault'] = 'Configuração predefinida para "Notificar alunos"';
$string['sendstudentnotificationsdefault_help'] = 'Definir o valor predefinido para a opção "Notificar alunos" no formulário de avaliação.';
$string['sendsubmissionreceipts'] = 'Notificar submissão do trabalho ao aluno';
$string['sendsubmissionreceipts_help'] = 'Se ativar esta opção, os alunos receberão notificações da submissão do trabalho. Receberão uma notificação sempre que submeterem um trabalho com sucesso.';
$string['setmarkerallocationforlog'] = 'Definir atribuição de avaliador: (ID={$a->id}, nome completo = {$a->fullname}, avaliador = {$a->marker}).';
$string['setmarkingallocation'] = 'Definir avaliador atribuído';
$string['setmarkingworkflowstate'] = 'Definir estado do processo de avaliação';
$string['setmarkingworkflowstateforlog'] = 'Definir estado do processo de avaliação: (ID={$a->id}, nome completo={$a->fullname}, estado={$a->state}).';
$string['settings'] = 'Configurações do trabalho';
$string['showrecentsubmissions'] = 'Mostrar submissões recentes';
$string['status'] = 'Estado';
$string['studentnotificationworkflowstateerror'] = 'O estado do processo de avaliação tem de ser "Nota lançada" para que os alunos sejam notificados.';
$string['submission'] = 'Trabalho';
$string['submissionattachments'] = 'Mostrar os ficheiros apenas durante a submissão';
$string['submissionattachments_help'] = 'Ative esta opção para que os ficheiros só sejam mostrados na página de submissão. Se desativada, os ficheiros serão mostrados nas páginas do trabalho e da submissão.';
$string['submissioncopiedhtml'] = '<p>Efetuou uma cópia da sua anterior submissão do trabalho na atividade \'<i>{$a->assignment}</i>\'.</p>
<p>Pode ver o <a href="{$a->url}">estado da submissão</a> do seu trabalho.</p>';
$string['submissioncopiedsmall'] = 'Copiou a sua anterior submissão do trabalho na atividade {$a->assignment}';
$string['submissioncopiedtext'] = 'Efetuou uma cópia da sua anterior submissão do trabalho na atividade \'{$a->assignment}\'.

Pode ver o estado da sua submissão de trabalho:

{$a->url}';
$string['submissiondrafts'] = 'Ativar o botão \'Submeter o trabalho\'';
$string['submissiondrafts_help'] = 'Se ativar esta opção, os alunos terão de clicar no botão Submeter para declarar o seu envio como sendo o trabalho final. Isto permite que os alunos possam manter o trabalho em curso no sistema até o finalizarem. Se esta opção for alterada de "Não" para "Sim" após algum aluno já ter submetido o seu trabalho, este será considerado como final.';
$string['submissioneditable'] = 'Os alunos podem editar esta submissão';
$string['submissionempty'] = 'Nenhum trabalho submetido';
$string['submissionlog'] = 'Aluno: {$a->fullname},
Estado: {$a->status}';
$string['submissionmodified'] = 'Existem dados por submeter. Por favor, entre novamente nesta página e tente de novo.';
$string['submissionmodifiedgroup'] = 'A submissão foi alterada por outro utilizador. Por favor, entre novamente nesta página e tente de novo.';
$string['submissionnotcopiedinvalidstatus'] = 'A submissão não foi copiada porque foi editada desde que foi reaberta.';
$string['submissionnoteditable'] = 'O aluno não pode editar esta submissão';
$string['submissionnotopen'] = 'Este trabalho não está aberto para submissões';
$string['submissionnotready'] = 'Este trabalho não está pronto para ser submetido:';
$string['submissionplugins'] = 'Módulos de submissão';
$string['submissionreceipthtml'] = '<p>Submeteu um trabalho na atividade \'<i>{$a->assignment}</i>\'.</p>
<p>Pode consultar o <a href="{$a->url}">estado da submissão</a> do seu trabalho.</p>';
$string['submissionreceiptotherhtml'] = 'A sua submissão do trabalho na atividade \'<i>{$a->assignment}</i>\' foi concluída.<br /><br />Pode consultar o <a href="{$a->url}">estado da submissão</a> do seu trabalho.';
$string['submissionreceiptothersmall'] = 'A sua submissão de trabalho na atividade \'{$a->assignment}\' foi submetida.';
$string['submissionreceiptothertext'] = 'A sua submissão do trabalho na atividade \'{$a->assignment}\' foi concluída.

Pode consultar o estado da submissão do seu trabalho:

{$a->url}';
$string['submissionreceipts'] = 'Enviar notificações de submissão';
$string['submissionreceiptsmall'] = 'Submeteu o seu trabalho na atividade \'{$a->assignment}\'';
$string['submissionreceipttext'] = 'Submeteu um trabalho na atividade \'{$a->assignment}\'

Pode consultar o estado do seu trabalho em:

{$a->url}';
$string['submissionsclosed'] = 'Submissões encerradas';
$string['submissionsettings'] = 'Configurações da submissão do trabalho';
$string['submissionslocked'] = 'Este trabalho não está a aceitar submissões';
$string['submissionslockedshort'] = 'Não é permitido alterar a submissão dos trabalhos';
$string['submissionstatement'] = 'Declaração de submissão';
$string['submissionstatement_help'] = 'Declaração que o aluno tem de aceitar para submeter o seu trabalho.';
$string['submissionstatementacceptedlog'] = 'Declaração de submissão aceite pelo utilizador {$a}';
$string['submissionstatementdefault'] = 'Esta submissão é de minha autoria, exceto nos casos em que faço referência a trabalhos de outros autores.';
$string['submissionstatementrequired'] = 'É obrigatório concordar com esta declaração antes de enviar.';
$string['submissionstatementteamsubmission'] = 'Declaração de submissão do grupo';
$string['submissionstatementteamsubmission_help'] = 'Declaração que cada aluno tem de aceitar para enviar o trabalho do seu grupo.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Declaração de submissão do grupo em que todos os membros do grupo submetem';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Declaração que cada aluno tem de aceitar para enviar o trabalho como membro do grupo.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Esta submissão é de minha autoria como elemento do grupo, exceto nos casos em que faço referência a trabalhos de outros autores.';
$string['submissionstatementteamsubmissiondefault'] = 'Esta submissão é da autoria do meu grupo, exceto nos casos em que fazemos referência a trabalhos de outros autores.';
$string['submissionstatus'] = 'Estado da submissão';
$string['submissionstatus_'] = 'Não submetido';
$string['submissionstatus_draft'] = 'Trabalho em curso (não submetido)';
$string['submissionstatus_marked'] = 'Avaliado';
$string['submissionstatus_new'] = 'Nenhuma submissão';
$string['submissionstatus_reopened'] = 'Reaberta';
$string['submissionstatus_submitted'] = 'Submetido para avaliação';
$string['submissionstatusheading'] = 'Estado do trabalho';
$string['submissionsummary'] = '{$a->status}. Última modificação: {$a->timemodified}';
$string['submissionteam'] = 'Grupo';
$string['submissiontypes'] = 'Tipos de submissão';
$string['submitaction'] = 'Enviar';
$string['submitassignment'] = 'Submeter o trabalho';
$string['submitassignment_help'] = 'Após submeter o trabalho não poderá realizar mais alterações.';
$string['submitforgrading'] = 'Submeter para avaliação';
$string['submitted'] = 'Enviados';
$string['submittedearly'] = 'O trabalho foi submetido \'{$a}\' antes do prazo';
$string['submittedlate'] = 'O trabalho foi submetido \'{$a}\' depois do prazo';
$string['submittedlateshort'] = '\'{$a}\' atrasado';
$string['submittedovertime'] = 'O trabalho foi submetido \'{$a}\' depois do tempo limite';
$string['submittedundertime'] = 'O trabalho foi submetido \'{$a}\' antes do tempo limite';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Módulo de feedback';
$string['subplugintype_assignfeedback_plural'] = 'Módulos de feedback';
$string['subplugintype_assignsubmission'] = 'Módulo de submissão';
$string['subplugintype_assignsubmission_plural'] = 'Módulos de submissão';
$string['teamname'] = 'Equipa: {$a}';
$string['teamsubmission'] = 'Os alunos submetem em grupos';
$string['teamsubmission_help'] = 'Se ativar esta opção, os alunos serão divididos em grupos de acordo com o conjunto predefinido de grupos ou de um agrupamento específico. A submissão do grupo será partilhada entre todos os membros do grupo e todos veem as alterações realizadas à submissão.';
$string['teamsubmissiongroupingid'] = 'Agrupamento para grupos de alunos';
$string['teamsubmissiongroupingid_help'] = 'Agrupamento que o trabalho utilizará para encontrar grupos para os grupos de alunos. Se não configurar esta opção, será utilizada a configuração predefinida de grupos.';
$string['textinstructions'] = 'Instruções do trabalho';
$string['timelimit'] = 'Tempo limite';
$string['timelimit_help'] = 'Se ativar esta opção, o limite de tempo é anunciado na página do trabalho e é exibido um temporizador com contagem decrescente do tempo restante  durante a realização do trabalho.';
$string['timelimitnotenabled'] = 'O limite de tempo não está ativado no trabalho.';
$string['timelimitpassed'] = 'O limite de tempo expirou';
$string['timemodified'] = 'Última modificação';
$string['timeremaining'] = 'Tempo restante';
$string['timeremainingcolon'] = 'Tempo restante: {$a}';
$string['togglezoom'] = 'Mais/menos zoom de uma região';
$string['ungroupedusers'] = 'A configuração \'Requer grupo para submeter trabalho\' está ativa e existem utilizadores que não pertencem a nenhum grupo, ou que estão inscritos em mais do que um, o que fará com que estes fiquem impossibilitados de submeter os seus trabalhos.';
$string['ungroupedusersoptional'] = 'A configuração \'Os alunos submetem em grupos\' está ativada e alguns utilizadores não são membros de nenhum grupo ou são membros de mais de um grupo. Tenha em atenção de que estes alunos submeterão como membros do \'Grupo predefinido\'.';
$string['unlimitedattempts'] = 'Ilimitado';
$string['unlimitedattemptsallowed'] = 'Tentativas ilimitadas permitidas.';
$string['unlimitedpages'] = 'Ilimitado';
$string['unlocksubmissionforstudent'] = 'Permitir submissões ao aluno: (ID = {$a->id}, nome completo = {$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloquear trabalhos';
$string['unsavedchanges'] = 'Alterações não guardadas';
$string['unsavedchangesquestion'] = 'Existem alterações da avaliação e/ou feedback que não foram guardadas. Pretende guardar as alterações e continuar?';
$string['updategrade'] = 'Atualizar nota';
$string['updatetable'] = 'Guardar e atualizar tabela';
$string['upgradenotimplemented'] = 'Atualização não implementada no módulo ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Predefinições do trabalho do utilizador';
$string['userextensiondate'] = 'Prazo prolongado até {$a}';
$string['usergrade'] = 'Nota do utilizador';
$string['useridlistnotcached'] = 'As notas não foram guardadas. O Moodle não foi capaz de determinar para que submissão eram as notas.';
$string['useroverrides'] = 'Exceções para utilizadores';
$string['useroverridesdeleted'] = 'Exceções para utilizadores apagadas';
$string['usersnone'] = 'Nenhum aluno tem acesso a este trabalho.';
$string['usersubmissioncannotberemoved'] = 'A submissão efetuada por \'{$a}\' não pode ser apagada.';
$string['userswhoneedtosubmit'] = 'Utilizadores que têm de submeter: {$a}';
$string['validmarkingworkflowstates'] = 'Estados válidos do processo de avaliação';
$string['viewadifferentattempt'] = 'Ver outra tentativa';
$string['viewbatchmarkingallocation'] = 'Ver atribuição de avaliadores';
$string['viewbatchsetmarkingworkflowstate'] = 'Ver definição do estado do processo de avaliação';
$string['viewfeedback'] = 'Ver feedback';
$string['viewfeedbackforuser'] = 'Ver feedback do aluno: {$a}';
$string['viewfull'] = 'Ver tudo';
$string['viewfullgradingpage'] = 'Abrir a página de avaliações para submeter feedback';
$string['viewgradebook'] = 'Ver pauta';
$string['viewgrading'] = 'Ver todas as submissões';
$string['viewgradingformforstudent'] = 'Ver página de avaliação do aluno: (ID={$a->id}, nome completo = {$a->fullname}).';
$string['viewownsubmissionform'] = 'Ver o seu trabalho.';
$string['viewownsubmissionstatus'] = 'Ver o estado do seu trabalho';
$string['viewrevealidentitiesconfirm'] = 'Ver a página de confirmação para revelar as identidades dos alunos.';
$string['viewsubmission'] = 'Ver trabalho';
$string['viewsubmissionforuser'] = 'Ver trabalho do utilizador: {$a}';
$string['viewsubmissiongradingtable'] = 'Ver tabela de trabalhos e avaliação.';
$string['viewsummary'] = 'Ver sumário';
$string['workflowfilter'] = 'Filtro por processo de avaliação';
$string['xofy'] = '{$a->x} de {$a->y}';
