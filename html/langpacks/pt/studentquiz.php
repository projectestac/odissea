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
 * Strings for component 'studentquiz', language 'pt', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Cancelar';
$string['add_comment'] = 'Adicionar comentário';
$string['add_reply'] = 'Adicionar resposta';
$string['after_answering_end_date'] = 'Este Auto-Teste fechou as respostas a perguntas em {$a}.';
$string['after_submission_end_date'] = 'Este Auto-Teste fechou o envio de perguntas em {$a}.';
$string['anonymous_user_name'] = 'Utilizador anónimo #{$a}';
$string['answeringndbeforestart'] = 'O data limite de resposta não pode ser anterior à data de abertura para resposta';
$string['api_state_change_success_content'] = 'O estado da pergunta/visibilidade foi alterado com sucesso';
$string['api_state_change_success_title'] = 'Sucesso';
$string['approve'] = 'Executar';
$string['approve_toggle'] = 'Aprovar/Não aprovar';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprovada';
$string['approved_veryshort'] = 'A';
$string['approveselectedscheck'] = 'Tem a certeza de que pretende aprovar/não aprovar as seguintes perguntas?<br /><br />{$a}';
$string['average_column_name'] = 'Média';
$string['before_answering_end_date'] = 'Este Auto-Teste fechará as respostas a perguntas em {$a}.';
$string['before_answering_start_date'] = 'Abre para responder em {$a}.';
$string['before_submission_end_date'] = 'Este Auto-Teste fechará o envio de perguntas em {$a}.';
$string['before_submission_start_date'] = 'Abre para envio de perguntas em {$a}.';
$string['cachedef_permissionssync'] = 'Monitorização da sincronização de permissão no Auto-Teste';
$string['cannotcapturecommenthistory'] = 'Não é possível capar o registo do histórico de comentários';
$string['collapseall'] = 'Contrair todos os comentários';
$string['collapsecomment'] = 'Contrair comentário';
$string['comment_author'] = 'Autor';
$string['comment_cannot_update'] = 'Não é possível atualizar o comentário';
$string['comment_column_name'] = 'Comentários';
$string['comment_error'] = 'Adicione um comentário';
$string['comment_error_unsaved'] = 'Pretende guardar este comentário?';
$string['comment_help'] = 'Adicionar um comentário';
$string['comment_help_help'] = 'Adicionar um comentário à pergunta';
$string['comment_veryshort'] = 'C';
$string['commenthistory'] = 'Histórico dos comentários';
$string['confirmdeletecomment'] = 'Tem a certeza de que pretende apagar este comentário?';
$string['createnewquestion'] = 'Criar nova pergunta';
$string['createnewquestionfirst'] = 'Criar a primeira pergunta';
$string['creator_anonym_fullname'] = 'Aluno anónimo';
$string['current_of_total'] = '{$a->current} de {$a->total}';
$string['delete'] = 'Apagar';
$string['deletecomment'] = 'Apagar comentário';
$string['deletedbyauthor'] = 'Esta mensagem foi apagada em {$a}.';
$string['deletedbyuser'] = 'Esta mensagem foi apagada por {$a->user} ({$a->date}).';
$string['deletedcomment'] = 'Mensagem apagada.';
$string['deleteorphanedquestions'] = 'Apagar perguntas orfãs';
$string['deleteorphanedquestionserrormdlquestion'] = '<font color="red">erro</font>: não foi possível apagar da tabela mdl_question. A pergunta provavelmente está em uso em algum lugar.<br><font color="red">erro</font>: não foi apagada das tabelas mdl_studentquiz*.<br>';
$string['deleteorphanedquestionserrorstudentquiz'] = '<font color="red">erro</font>: não foi possível apagar das tabelas mdl_studentquiz*.<br>';
$string['deleteorphanedquestionsfullmessage'] = 'Perguntas reprovadas/sinalizadas para apagar:<ul>{$a->fullmessage}</ul>';
$string['deleteorphanedquestionsnonefound'] = '<b>nenhuma encontrada</b>';
$string['deleteorphanedquestionsquestioninfo'] = '<li><b>{$a->name}</b> (Tipo de pergunta: {$a->qtype}, ID: {$a->questionid})</li>';
$string['deleteorphanedquestionssmallmessage'] = 'Auto-Teste: A tarefa para apagar perguntas órfãs foi executada';
$string['deleteorphanedquestionssubject'] = 'Auto-Teste';
$string['deleteorphanedquestionssuccessmdlquestion'] = '<font color="green">successo</font>: apagada da tabela mdl_question<br>';
$string['deleteorphanedquestionssuccessstudentquiz'] = '<font color="green">successo</font>: apagada das tabelas mdl_studentquiz*<br>';
$string['describe_already_deleted'] = 'Este comentário já está apagado.';
$string['describe_not_creator'] = 'Este comentário não é seu.';
$string['describe_out_of_time_delete'] = 'Já foi ultrapassado o prazo para apagar este comentário';
$string['describe_out_of_time_edit'] = 'Já passou o prazo para poder editar este comentário';
$string['difficulty_all_column_name'] = 'Dificuldade da comunidade';
$string['difficulty_level_column_name'] = 'Dificuldade';
$string['difficulty_title'] = 'Barra de dificuldade';
$string['editcomment'] = 'Editar comentário';
$string['editedcomment_last_edit'] = 'Última edição:';
$string['editedcommenthistory'] = 'Editado por {$a->lastesteditedcommentauthorname} {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Histórico';
$string['editorplaceholder'] = 'Digite seu comentário aqui...';
$string['emailautomationnote'] = 'Tenha em atenção que esta é uma mensagem automática do sistema  - este endereço de e-mail não é monitorizado.';
$string['emailcommentaddedbody'] = 'Caro/a {$a->recepientname},

A sua pergunta \'{$a->questionname}\' na atividade Auto-Teste \'{$a->modulename}\' da disciplina \'{$a->coursename}\' foi comentada por {$a->actorname} em {$a->timestamp}.

Comentário adicionado: \'{$a->commenttext}\'

Pode rever a pergunta aqui: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'A sua pergunta \'{$a->questionname}\' foi comentada por {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'Pergunta comentada: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Caro/a {$a->recepientname},

O comentário efetuado em \'{$a->commenttime}\' à sua pergunta \'{$a->questionname}\' na atividade Auto-Teste \'{$a->modulename}\' da disciplina \'{$a->coursename}\' foi apagado por {$a->actorname} em {$a->timestamp}.

Comentário apagado: \'{$a->commenttext}\'

Pode rever a pergunta aqui: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'O comentário à sua pergunta foi apagado por {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Comentário apagado da pergunta: {$a->questionname}';
$string['emaildigestbody'] = 'O resumo das notificações {$a->digesttype} da atividade Auto-Teste \'<b>{$a->modulename}</b>\', está disponível aqui:';
$string['emaildigestbody_section_content'] = 'A sua pergunta <b>{$a->questionname}</b> foi <b>{$a->actiontype}</b> por <b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'Notificação {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'Resumo da notificação do Auto-Teste';
$string['emailminecommentdeletedbody'] = 'Caro/a {$a->recepientname},

O seu comentário efetuado em \'{$a->commenttime}\' à pergunta \'{$a->questionname}\' na atividade Auto-Teste \'{$a->modulename}\' da disciplina \'{$a->coursename}\' foi apagado por {$a->actorname} em {$a->timestamp}.

Comentário apagado: \'{$a->commenttext}\'

Pode rever a pergunta aqui: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'O seu comentário à pergunta \'{$a->questionname}\' foi apagado por {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Comentário apagado da pergunta: {$a->questionname}';
$string['emailsalutation'] = 'Caro/a {$a},';
$string['emailsinglebody'] = 'A sua pergunta \'<b>{$a->questionname}</b>\' na atividade Auto-Teste \'{$a->modulename}\' da disciplina \'{$a->coursename}\' foi {$a->eventname} por <b>{$a->actorname}</b> em <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'Pode rever esta pergunta em::';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Ocorreu um erro ao enviar a sua denúncia para {$a}.
Não foi possível enviar o relatório.';
$string['expandall'] = 'Expandir todos os comentários';
$string['expandcomment'] = 'Expandir comentário';
$string['filter'] = 'Filtro';
$string['filter_advanced_element'] = '{$a} (elemento avançado)';
$string['filter_comment_label_date'] = 'Data';
$string['filter_comment_label_forename'] = 'Nome';
$string['filter_comment_label_sort_by'] = 'Ordenar por:';
$string['filter_comment_label_sort_toggle'] = 'Ordenar por {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Apelido';
$string['filter_ishigher'] = 'É maior';
$string['filter_islower'] = 'É menor';
$string['filter_label_approved'] = 'Perguntas aprovadas';
$string['filter_label_comment'] = 'Comentários';
$string['filter_label_createdate'] = 'Data de criação';
$string['filter_label_difficulty_level'] = 'Dificuldade';
$string['filter_label_fast_filters'] = 'Filtro rápido das perguntas';
$string['filter_label_myattempts'] = 'Minhas tentativa';
$string['filter_label_mydifficulty'] = 'Minha dificuldade';
$string['filter_label_mylastattempt'] = 'Minha última tentativa';
$string['filter_label_myrate'] = 'Minha classificação';
$string['filter_label_onlyapproved'] = 'Aprovada';
$string['filter_label_onlyapproved_help'] = 'Perguntas aprovadas pelo teu professor';
$string['filter_label_onlydifficult'] = 'Difícil para todos';
$string['filter_label_onlydifficult_help'] = 'Pergunta com a dificuldade média maior que {$a}%';
$string['filter_label_onlydifficultforme'] = 'Difícil para mim';
$string['filter_label_onlydifficultforme_help'] = 'Pergunta com a minha dificuldade maior que {$a}%';
$string['filter_label_onlygood'] = 'Útil';
$string['filter_label_onlygood_help'] = 'Pergunta com classificação média de pelo menos {$a} estrelas';
$string['filter_label_onlymine'] = 'Minha';
$string['filter_label_onlymine_help'] = 'Perguntas criadas por ti';
$string['filter_label_onlynew'] = 'Não respondida';
$string['filter_label_onlynew_help'] = 'Perguntas que nunca respondeu';
$string['filter_label_question'] = 'Título da pergunta';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Conteúdo da pergunta';
$string['filter_label_rates'] = 'Classificação';
$string['filter_label_show_mine'] = 'Minhas perguntas';
$string['filter_label_tags'] = 'Etiqueta';
$string['finish_button'] = 'Terminar';
$string['image_placeholder'] = '[Imagem]';
$string['invalidcomment'] = 'comentarioinválido';
$string['invalidemail'] = 'Este endereço de e-mail não é válido. Digite um endereço de e-mail único.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Última tentativa correta';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Última tentativa incorreta';
$string['latest_column_name'] = 'Última';
$string['manager_anonym_fullname'] = 'Gestor anónimo';
$string['message'] = 'Mensagem';
$string['messageprovider:commentadded'] = 'Notificação de comentário adicionado';
$string['messageprovider:commentdeleted'] = 'Notificação de comentário apagado';
$string['messageprovider:deleteorphanedquestions'] = 'Notificação de pergunta apagada';
$string['messageprovider:minecommentdeleted'] = 'Notificação de meu comentário apagado';
$string['messageprovider:questionchanged'] = 'Notificação de evento de pergunta';
$string['migrate_already_done'] = 'Nada foi alterado porque esta atividade já estava migrada!';
$string['migrate_ask'] = 'A velocidade do Auto-Teste melhorou com a versão 3.2.1, mas este conjunto de perguntas ainda está baseado numa versão anterior.
As perguntas e testes serão carregados mais rapidamente se executar essa migração de aceleração. Irá ocorrer um um carregamento mais rápido; nada mais irá ser alterado.';
$string['migrate_studentquiz'] = 'Faça a migração das perguntas do Auto-Teste anteriores à versão 3.2.1 para a versão mais rápida com valores agregados';
$string['migrate_studentquiz_short'] = 'Acelerar este conjunto de perguntas';
$string['migrated_successful'] = 'A migração da atividade foi realizada com sucesso!';
$string['mine_column_name'] = 'Minha';
$string['missingparam'] = 'Um parâmetro obrigatório está incorreto ou está em falta';
$string['moderator'] = 'Moderador';
$string['modulename'] = 'Auto-Teste';
$string['modulename_help'] = 'A atividade **Auto-Teste** permite que os alunos adicionem perguntas para a comunidade. Na vista geral do Auto-Teste, os estudantes podem filtrar as perguntas. Também podem usar as perguntas filtradas na comunidade para praticar. O professor tem a opção de tornar "não visível" a coluna do criador da pergunta.<br><br>A atividade Auto-Teste premeia os alunos com pontos para motivá-los a adicionar perguntas e a praticar. Os pontos são listados numa tabela de classificação.';
$string['modulenameplural'] = 'Auto-Testes';
$string['more'] = 'Mais';
$string['myattempts_column_name'] = 'Minhas tentativas';
$string['mydifficulty_column_name'] = 'Minha dificuldade';
$string['mylastattempt_column_name'] = 'Minha última tentativa';
$string['myrate_column_name'] = 'Minha classificação';
$string['nav_export'] = 'Exportar';
$string['nav_import'] = 'Importar';
$string['nav_question_no'] = 'Pergunta {$a->current} de {$a->total}';
$string['needtoallowatleastoneqtype'] = 'Tem de permitir pelo menos um tipo de pergunta';
$string['next_button'] = 'Seguinte';
$string['no_comment'] = 'n.d.';
$string['no_comments'] = 'Sem comentários';
$string['no_difficulty_level'] = 'n.d.';
$string['no_myattempts'] = 'n.d.';
$string['no_mylastattempt'] = 'n.d.';
$string['no_mylastattempt_label'] = 'Nenhuma tentativa à pergunta';
$string['no_questions_add'] = 'Ainda não existem perguntas neste Auto-Teste. Não hesite em adicionar algumas perguntas.';
$string['no_questions_filter'] = 'Nenhuma das perguntas corresponde aos critérios de filtro. Limpe o filtro para ver tudo.';
$string['no_questions_selected_message'] = 'Tem de selecionar pelo menos uma pergunta para iniciar o teste.';
$string['no_rates'] = 'n.d.';
$string['no_tags'] = 'n.d.';
$string['nocommenthistoryexist'] = 'Ainda não há histórico de comentários para este comentário.';
$string['not_approved'] = '✗';
$string['notshowratingcomment'] = 'Atenção: a classificação e o comentário não estão disponíveis no modo de pré-visualização das suas perguntas';
$string['num_questions'] = '{$a} perguntas';
$string['number_column_name'] = 'Número';
$string['numberreply'] = 'Respostas: {$a}';
$string['onlyrootcommentcanreply'] = 'Apenas o primeiro nível de comentário pode ser respondido';
$string['pagesize'] = 'Tamanho da página:';
$string['please_enrole_message'] = 'Inscreva-se nesta disciplina para ver o seu progresso pessoal';
$string['pluginadministration'] = 'Administração do Auto-Teste';
$string['pluginname'] = 'Auto-Teste';
$string['previous_button'] = 'Anterior';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'A preferência do utilizador para o tipo de filtro de comentário.';
$string['privacy:metadata:studentquiz_attempt'] = 'Representa uma tentativa de responder do utilizador a um conjunto de perguntas.';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID da categoria';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID do uso da pergunta.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID do Auto-Teste.';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID do utilizador.';
$string['privacy:metadata:studentquiz_comment'] = 'Armazena comentários das perguntas.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Comentário da pergunta.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Data/hora da criação do documentário';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID da pergunta.';
$string['privacy:metadata:studentquiz_comment:status'] = 'Estado do comentário';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'Data/hora da modificação do comentário';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID do utilizador.';
$string['privacy:metadata:studentquiz_comment:usermodified'] = 'ID do utilizador que modificou o comentário';
$string['privacy:metadata:studentquiz_comment_history:commentid'] = 'ID do comentário';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'Conteúdo do histórico de comentários';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'Modificação do comentário';
$string['privacy:metadata:studentquiz_comment_history:userid'] = 'ID do utilizador que editou o comentário';
$string['privacy:metadata:studentquiz_notification'] = 'Fila de espera da notificação';
$string['privacy:metadata:studentquiz_notification:content'] = 'Conteúdo da notificação';
$string['privacy:metadata:studentquiz_notification:status'] = 'Estado da notificação';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'ID do Auto-Teste';
$string['privacy:metadata:studentquiz_notification:timetosend'] = 'Horário para envio da notificação';
$string['privacy:metadata:studentquiz_progress'] = 'Armazena informação do progresso do aluno nesta pergunta.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Número de tentativas para responder a esta pergunta.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Número de respostas corretas.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: a última resposta estava errada ou indefinida, 1: a última resposta estava correta.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID da pergunta.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID do Auto-Teste.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID do utilizador.';
$string['privacy:metadata:studentquiz_rate'] = 'Armazena as avaliações das perguntas.';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID da pergunta.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Avaliação da pergunta.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID do utilizador.';
$string['progress_bar_caption'] = 'O seu progresso nesta atividade Auto-Teste';
$string['questionsinuse'] = '(* Perguntas marcadas com um asterisco já estão em uso em alguns testes.)';
$string['ranking_block_title'] = 'Classificação';
$string['ranking_block_title_anonymised'] = 'Classificação (Sem nomes)';
$string['rate_all_column_name'] = 'Avaliação da comunidade';
$string['rate_column_name'] = 'Avaliação';
$string['rate_error'] = 'Por favor, avalie a pergunta.';
$string['rate_help'] = 'Avaliar esta pergunta';
$string['rate_help_help'] = 'Avaliar esta pergunta:<br />1 estrela é muito má, 5 estrelas é muito boa';
$string['rate_multi_stars_desc'] = '{$a} estrelas selecionadas';
$string['rate_one_star_desc'] = '1 estrela selecionada';
$string['rate_points'] = 'Pontos';
$string['rate_title'] = 'Avaliar';
$string['ratingbar_title'] = 'Barra da classificação';
$string['remove_comment'] = 'Remover';
$string['remove_comment_label'] = 'Remover comentário';
$string['replies'] = 'Respostas';
$string['reply'] = 'Resposta';
$string['replycomment'] = 'Responder';
$string['report_comment_condition1'] = 'É abusivo';
$string['report_comment_condition2'] = 'É assédio';
$string['report_comment_condition3'] = 'Tem conteúdo obsceno, como por exemplo, pornografia';
$string['report_comment_condition4'] = 'É injurioso ou difamatório';
$string['report_comment_condition5'] = 'Não respeita direitos de autor';
$string['report_comment_condition6'] = 'É contra as regras por algum outro motivo';
$string['report_comment_condition_more'] = 'Outras informações (opcional)';
$string['report_comment_emailappendix'] = 'Está a receber esta mensagem porque o seu endereço de e-mail foi
usado no Auto-Teste para denunciar comentários inaceitáveis.';
$string['report_comment_emailpreface'] = 'Um comentário foi denunciado por {$a->fullname} ({$a->username},
{$a->email}).';
$string['report_comment_emailsubject'] = 'Denunciar o comentário {$a->commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'A sua denúncia foi enviada com sucesso. Um responsável irá verificar a situação.';
$string['report_comment_info'] = 'A funcionalidade \'Denunciar\' pode enviar este comentário para um responsável que irá verificar a situação. <strong>Use esta funcionalidade apenas se achar que o comentário não cumpre as regras</strong>.';
$string['report_comment_invalid'] = 'Tem de especificar o motivo da denúncia deste comentário.';
$string['report_comment_invalid_checkbox'] = 'Tem de marcar pelo menos uma das caixas.';
$string['report_comment_link_text'] = 'Pré-visualizar aqui';
$string['report_comment_not_available'] = 'A funcionalidade denunciar comentário não está disponível.';
$string['report_comment_pagename'] = 'Denunciar um comentário como inaceitável';
$string['report_comment_reasons'] = 'Razões para denunciar o comentário:';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Detalhes do denunciante</strong>:';
$string['report_comment_submit'] = 'Enviar denúncia';
$string['reportcomment'] = 'Denunciar';
$string['reportcomment_title'] = 'Denunciar comentários como inaceitáveis';
$string['reportquiz_admin_title'] = 'Estatísticas do aluno';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Média das últimas respostas corretas da comunidade';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Média das últimas respostas incorretas da comunidade';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Percentagem de respostas corretas da comunidade';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Soma das respostas corretas / soma de todas as respostas.';
$string['reportquiz_stats_all_progress'] = 'Progresso médio da comunidade';
$string['reportquiz_stats_all_progress_help'] = 'Progresso médio da comunidade com base em todos os membros da comunidade.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Média de respostas corretas da comunidade';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Média de respostas incorretas da comunidade';
$string['reportquiz_stats_all_questions_answered'] = 'Média de todas as respostas da comunidade';
$string['reportquiz_stats_all_questions_answered_help'] = 'Número médio de respostas dadas por todos os membros da comunidade.';
$string['reportquiz_stats_all_questions_approved'] = 'Número de perguntas aprovadas';
$string['reportquiz_stats_all_questions_approved_help'] = 'Os professores podem aprovar perguntas para verificar a correção. Este número corresponde a todas as perguntas aprovadas neste Auto-Teste.';
$string['reportquiz_stats_all_questions_created'] = 'Número de perguntas neste Auto-Teste';
$string['reportquiz_stats_all_questions_created_help'] = 'Número de perguntas criadas pela comunidade';
$string['reportquiz_stats_all_rates_average'] = 'Cassificação média de todas as perguntas';
$string['reportquiz_stats_all_rates_average_help'] = 'A classificação de cada pergunta é a média das estrelas que recebeu da comunidade. Exemplo: a comunidade criou 4 perguntas. Se a pergunta A tiver sido classificada como 3 estrelas pela comunidade, a pergunta B = 4 estrelas,  pergunta C = 2 estrelas e A pergunta D = 5 estrelas, então a classificação média  de todas as perguntas é de 3,5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Número das suas últimas respostas corretas';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Número das suas últimas respostas incorretas';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Percentagem das suas respostas corretas';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Percentagem do total das suas respostas corretas em relação ao conjunto de todas as perguntas deste Auto-Teste. As respostas parcialmente corretas contam como respostas incorretas.';
$string['reportquiz_stats_own_progress'] = 'Progresso pessoal';
$string['reportquiz_stats_own_progress_help'] = 'Percentagem das suas últimas respostas corretas em relação ao conjunto de todas as perguntas neste Auto-Teste. As respostas parcialmente corretas contam como respostas incorretas.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total das suas respostas corretas';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total das suas respostas incorretas';
$string['reportquiz_stats_own_questions_answered'] = 'Total de todas as suas respostas';
$string['reportquiz_stats_own_questions_answered_help'] = 'Número de todas as suas respostas dadas neste Auto-Teste.';
$string['reportquiz_stats_own_questions_approved'] = 'Número de perguntas suas aprovadas';
$string['reportquiz_stats_own_questions_approved_help'] = 'Os professores podem aprovar perguntas para verificar a correção. Este é o número de perguntas suas aprovadas neste Auto-Teste.';
$string['reportquiz_stats_own_questions_created'] = 'Número de perguntas que já contribuiu';
$string['reportquiz_stats_own_questions_created_help'] = 'Número de perguntas que já contribuiu neste Auto-Teste';
$string['reportquiz_stats_own_rates_average'] = 'A sua classificação média obtida';
$string['reportquiz_stats_own_rates_average_help'] = 'A classificação de cada pergunta é a média das estrelas que recebeu da comunidade. Exemplo: criou as perguntas A e B. Se a sua pergunta A foi classificada como 3 estrelas pela comunidade e a sua pergunta B foi classificada como 4 estrelas, a sua classificação média recebida é de 3,5.';
$string['reportquiz_stats_title'] = 'Estatísticas';
$string['reportquiz_total_attempt'] = 'Número de vezes que tentou o teste';
$string['reportquiz_total_obtained_marks'] = 'Nota total';
$string['reportquiz_total_questions_answered'] = 'Total de respostas';
$string['reportquiz_total_questions_right'] = 'Total de perguntas corretas';
$string['reportquiz_total_questions_wrong'] = 'Respostas incorretas';
$string['reportquiz_total_users'] = 'Número de participantes';
$string['reportrank_table_column_approvedquestions'] = 'Pontos para perguntas aprovadas';
$string['reportrank_table_column_communitystatus'] = 'Estatísticas da comunidade';
$string['reportrank_table_column_correctanswers'] = 'Respostas corretas';
$string['reportrank_table_column_countquestions'] = 'Pontos para perguntas publicadas';
$string['reportrank_table_column_description'] = 'Descrição';
$string['reportrank_table_column_factor'] = 'Fator';
$string['reportrank_table_column_fullname'] = 'Nome completo';
$string['reportrank_table_column_incorrectanswers'] = 'Respostas incorretas';
$string['reportrank_table_column_lastcorrectanswers'] = 'Pontos para as últimas tentativas corretas';
$string['reportrank_table_column_lastincorrectanswers'] = 'Pontos para as últimas tentativas incorretas';
$string['reportrank_table_column_points'] = 'Pontos';
$string['reportrank_table_column_progress'] = 'Progresso pessoal';
$string['reportrank_table_column_quantifier_name'] = 'Nome';
$string['reportrank_table_column_rank'] = 'Posição';
$string['reportrank_table_column_summeanrates'] = 'Pontos para as estrelas recebidas';
$string['reportrank_table_column_total_points'] = 'Total de pontos';
$string['reportrank_table_column_value'] = 'Valor';
$string['reportrank_table_column_yourstatus'] = 'Estatísticas pessoais';
$string['reportrank_table_quantifier_caption'] = 'Cálculo da pontuação';
$string['reportrank_table_title'] = 'Pontuação do aluno - Top 10';
$string['reportrank_table_title_for_manager'] = 'Pontuação do aluno';
$string['reportrank_title'] = 'Pontuação';
$string['review_button'] = 'Rever';
$string['savechanges'] = 'Guardar alterações';
$string['scheduled_task_send_digest_notification'] = 'Enviar notificação de resumo';
$string['setting_question_publishing'] = 'Publicação de perguntas';
$string['setting_question_publishing_automatic'] = 'Publicar automaticamente as novas perguntas';
$string['setting_question_publishing_help'] = 'As perguntas publicadas são exibidas no conjunto de perguntas para que outros alunos as possam usar. Permita que todas as perguntas sejam publicadas automaticamente ou exija aprovação antes de poderem ser publicadas.<br>Tenha em atenção que esta configuração apenas se aplica às próximas novas perguntas.';
$string['setting_question_publishing_require_approval'] = 'Exigir aprovação antes da publicação';
$string['settings_allowallqtypes'] = 'Permitir todos os tipos de pergunta';
$string['settings_allowedqtypes'] = 'Tipos de pergunta permitidos';
$string['settings_allowedqtypes_help'] = 'Limitar os tipos de pergunta permitidos às entradas selecionadas';
$string['settings_anonymous'] = 'Anonimizar os alunos';
$string['settings_anonymous_help'] = 'Os alunos não podem ver os nomes uns dos outros.';
$string['settings_anonymous_label'] = 'Tornar os alunos anónimos';
$string['settings_approvedquantifier'] = 'Fator para pergunta aprovada';
$string['settings_approvedquantifier_help'] = 'Pontos atribuídos a cada pergunta aprovada';
$string['settings_approvedquantifier_label'] = 'Pontos para cada pergunta aprovada';
$string['settings_availability_close_answering_from'] = 'Fechada a resposta em';
$string['settings_availability_close_submission_from'] = 'Fecha a submissão de perguntas em';
$string['settings_availability_open_answering_from'] = 'Abre para resposta em';
$string['settings_availability_open_submission_from'] = 'Abre para submissão de perguntas em';
$string['settings_comment_editor_toolbar'] = 'Configuração da barra de ferramentas do editor de comentários';
$string['settings_comment_editor_toolbar_des'] = 'A lista de módulos e a ordem em que são exibidos podem ser configuradas aqui';
$string['settings_commentdeletionperiod'] = 'Prazo para editar/apagar comentários (minutos)';
$string['settings_commentdeletionperiod_help'] = 'Defina o intervalo de tempo (em minutos) durante o qual o botão Editar/Apagar estará disponível para os alunos editarem/apagarem o seu próprio comentário (ou resposta a um comentário) após a publicação. São permitidos valores entre 0 e 60 minutos. Se o intervalo de tempo for definido como 0, os alunos não poderão editar/apagar os seus próprios comentários. Tenha em atenção que os professores e administradores poderão, a qualquer instante, editar/apagar os comentários dos alunos assim como ver o conteúdo de qualquer comentário apagado.';
$string['settings_email_digest_first_day'] = 'Primeiro dia da semana?';
$string['settings_email_digest_first_day_help'] = 'Se selecionou um resumo semanal, esta opção permite definir o primeiro dia (a partir das 00h:00m:00s daquele dia) do período de sete dias. É especialmente útil se, por exemplo, a atividade começar no meio da semana.';
$string['settings_email_digest_type'] = 'Tipo de e-mail do resumo';
$string['settings_email_digest_type_daily_digest'] = 'Resumo diário';
$string['settings_email_digest_type_help'] = 'O Auto-Teste possui várias notificações que pode ativar, tais como, informar o aluno autor da pergunta sobre uma alteração de estado (por exemplo, um professor aprovou uma de suas perguntas). Pode usar esta configuração para especificar a frequência dessas notificações. Os e-mails de resumo serão enviados apenas quando houver pelo menos uma notificação no período definido';
$string['settings_email_digest_type_no_digest'] = 'Sem resumo (um e-mail por ação)';
$string['settings_email_digest_type_weekly_digest'] = 'Resumo semanal';
$string['settings_excluderoles'] = 'Papéis a excluir na classificação';
$string['settings_excluderoles_help'] = 'Os papéis selecionados estarão ocultos nas classificações. Os utilizadores inscritos com estes papéis podem participar normalmente na atividade';
$string['settings_excluderoles_label'] = 'Papéis a excluir na classificação';
$string['settings_forcecommenting'] = 'Forçar adição de comentários';
$string['settings_forcecommenting_help'] = 'Forçar comentários na tentativa de responder à pergunta';
$string['settings_forcerating'] = 'Forçar classificação';
$string['settings_forcerating_help'] = 'Forçar classificação na tentativa da pergunta';
$string['settings_lastcorrectanswerquantifier'] = 'Fator para resposta correta';
$string['settings_lastcorrectanswerquantifier_help'] = 'Pontos para cada resposta correta na última tentativa';
$string['settings_lastcorrectanswerquantifier_label'] = 'Pontos para as últimas respostas corretas';
$string['settings_lastincorrectanswerquantifier'] = 'Fator para resposta incorreta';
$string['settings_lastincorrectanswerquantifier_help'] = 'Pontos para cada resposta incorreta, ou parcialmente incorreta, na última tentativa';
$string['settings_lastincorrectanswerquantifier_label'] = 'Pontos para as últimas respostas incorretas';
$string['settings_notification'] = 'Configurações das notificações';
$string['settings_questionquantifier'] = 'Fator para pergunta publicada';
$string['settings_questionquantifier_help'] = 'Pontos atribuídos a cada pergunta publicada';
$string['settings_questionquantifier_label'] = 'Pontos para cada pergunta publicada';
$string['settings_ratequantifier'] = 'Fator de avaliação';
$string['settings_ratequantifier_help'] = 'Pontos por cada estrela recebida';
$string['settings_ratequantifier_label'] = 'Multiplicador para a média de estrelas recebidas por pergunta';
$string['settings_removeqbehavior'] = 'Desinstalar o módulo de comportamento de perguntas Auto-Teste';
$string['settings_removeqbehavior_help'] = 'Esta informação deve aparecer apenas uma vez durante a atualização. Foi detetado que o módulo de comportamento de perguntas Auto-Teste está instalado. Este módulo já não é necessário e, portanto, tentamos desinstalar automaticamente. Se ainda vê esta configuração, desinstale o módulo de comportamento de perguntas StudentQuiz manualmente <a href="{$a}">aqui</a>.';
$string['settings_removeqbehavior_label'] = 'Desinstalar o módulo de comportamento de perguntas Auto-Teste';
$string['settings_reportingemail'] = 'E-mail para reportar comentários ofensivos';
$string['settings_reportingemail_help'] = 'Se for indicado o endereço de e-mail, ao lado de cada comentário será exibida uma hiperligação para denunciar. Os utilizadores podem clicar na hiperligação para reportar comentários ofensivos. As informações serão enviadas para este endereço.

Se este endereço de e-mail for deixado em branco, o recurso Denunciar não será exibido (a menos que tenha sido fornecido um endereço de denúncia ao nível do site).

É possível adicionar mais do que um endereço de e-mail, desde que separados por ponto e vírgula.';
$string['settings_section_description_default'] = 'Valores predefinidos para quando criar uma nova atividade de Auto-Teste';
$string['settings_section_header_comment_rating'] = 'Configurações do comentário e da pontuação';
$string['settings_section_header_question'] = 'Configurações da pergunta';
$string['settings_section_header_ranking'] = 'Configurações da classificação';
$string['settingsdeleteorphaned'] = 'Apagar perguntas órfãs';
$string['settingsdeleteorphaned_help'] = 'Ativa uma tarefa agendada que será executada todos os dias para apagar todas as perguntas órfãs/não aprovadas da base de dados.';
$string['settingsdeleteorphanedtime1y'] = '1 ano';
$string['settingsdeleteorphanedtime2y'] = '2 anos';
$string['settingsdeleteorphanedtime3y'] = '3 anos';
$string['settingsdeleteorphanedtime6m'] = '6 meses';
$string['settingsdeleteorphanedtimelimit'] = 'Limite de tempo para apagar pergunta órfã';
$string['settingsdeleteorphanedtimelimit_help'] = 'Define o limite de tempo para apagar perguntas órfãs/não aprovadas. As perguntas mais antigas que este limite serão apagadas.';
$string['show_less'] = 'Mostrar menos';
$string['show_more'] = 'Mostrar mais';
$string['slot_of_slot'] = 'Pergunta {$a->slot} de {$a->slots} deste conjunto';
$string['start_quiz_button'] = 'Iniciar teste';
$string['state_approved'] = 'Aprovada';
$string['state_change_tooltip_approved'] = 'A pergunta foi aprovada. Clique aqui para alterar o estado desta pergunta';
$string['state_change_tooltip_changed'] = 'A pergunta foi alterada. Clique aqui para alterar o estado desta pergunta';
$string['state_change_tooltip_disapproved'] = 'A pergunta não foi aprovada. Clique aqui para alterar o estado desta pergunta';
$string['state_change_tooltip_new'] = 'A pergunta é nova. Clique aqui para alterar o estado desta pergunta';
$string['state_changed'] = 'Alterada';
$string['state_column_name'] = 'Estado';
$string['state_column_name_veryshort'] = 'E';
$string['state_disapproved'] = 'Desaprovada';
$string['state_new'] = 'Nova';
$string['state_toggle'] = 'Alterar estado';
$string['statistic_block_approvals'] = 'Perguntas aprovadas';
$string['statistic_block_created'] = 'Perguntas criadas';
$string['statistic_block_disapprovals'] = 'Perguntas desaprovadas';
$string['statistic_block_new_changed'] = 'Perguntas novas/alteradas';
$string['statistic_block_progress_available'] = 'Perguntas disponíveis';
$string['statistic_block_progress_last_attempt_correct'] = 'Última tentativa correta';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Última tentativa incorreta';
$string['statistic_block_progress_never'] = 'Perguntas nunca respondidas';
$string['statistic_block_title'] = 'Meu progresso';
$string['studentquiz'] = 'auto-teste';
$string['studentquiz:addinstance'] = 'Adicionar nova instância de Auto-Teste';
$string['studentquiz:canselfratecomment'] = 'Avaliação e comentários na pré-visualização';
$string['studentquiz:changestate'] = 'Definir o estado de uma pergunta no Auto-Teste';
$string['studentquiz:emailnotifyapproved'] = 'Notificação de pergunta aprovada';
$string['studentquiz:emailnotifychanged'] = 'Notificação de pergunta alterada';
$string['studentquiz:emailnotifycommentadded'] = 'Notificação de comentário adicionado';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notificação de comentário apagado';
$string['studentquiz:emailnotifyquestion'] = 'O utilizador recebe uma notificação por e-mail acerca das suas perguntas';
$string['studentquiz:manage'] = 'Editar e apagar perguntas no Auto-Teste';
$string['studentquiz:organize'] = 'Mover as perguntas para categorias no Auto-Teste';
$string['studentquiz:previewothers'] = 'Pré-visualizar perguntas de outros no Auto-Teste';
$string['studentquiz:submit'] = 'Criar perguntas no Auto-Teste';
$string['studentquiz:systemnotifytaskdeleteorphanedquestions'] = 'Notificação de perguntas órfãs apagadas';
$string['studentquiz:unhideanonymous'] = 'Pode ver os nomes reais mesmo quando o anonimato está ativo';
$string['studentquiz:view'] = 'Ver e usar perguntas no Auto-Teste';
$string['studentquizname'] = 'Nome do Auto-Teste';
$string['studentquizname_help'] = 'Nome desta atividade de Auto-Teste';
$string['submissionendbeforestart'] = 'A data limite para submeter não pode ser anterior à data de abertura para submissões';
$string['tags'] = 'Etiquetas';
$string['unapprove'] = 'Não aprovar';
