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
 * Strings for component 'feedback', language 'pt', version '3.11'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Adicionar uma pergunta';
$string['add_pagebreak'] = 'Adicionar quebra de página';
$string['adjustment'] = 'Disposição';
$string['after_submit'] = 'Após submissão';
$string['allowfullanonymous'] = 'Permitir resposta completamente anónima';
$string['analysis'] = 'Análise';
$string['anonymous'] = 'Anónimo';
$string['anonymous_edit'] = 'Guardar nomes dos utilizadores';
$string['anonymous_entries'] = 'Respostas anónimas ({$a})';
$string['anonymous_user'] = 'Utilizador anónimo';
$string['answerquestions'] = 'Responder às perguntas';
$string['append_new_items'] = 'Acrescentar novos itens';
$string['autonumbering'] = 'Numerar as perguntas automaticamente';
$string['autonumbering_help'] = 'Ativa ou desativa a numeração automática das questões';
$string['average'] = 'Média';
$string['bold'] = 'Negrito';
$string['calendarend'] = 'Fecha \'{$a}\'';
$string['calendarstart'] = 'Abre \'{$a}\'';
$string['cannotaccess'] = 'Apenas pode aceder a este Inquérito a partir de uma disciplina';
$string['cannotsavetempl'] = 'Não é permitido guardar modelos';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'O Captcha não foi configurado';
$string['check'] = 'Escolha múltipla - múltiplas respostas';
$string['check_values'] = 'Respostas possíveis';
$string['checkbox'] = 'Escolha múltipla - são permitidas múltiplas respostas (caixas de seleção)';
$string['choosefile'] = 'Selecionar ficheiro';
$string['chosen_feedback_response'] = 'Resposta escolhida do Inquérito';
$string['closebeforeopen'] = 'Especificou uma data de fim anterior à data de início.';
$string['complete_the_form'] = 'Responder às perguntas';
$string['completed'] = 'Concluído';
$string['completed_feedbacks'] = 'Respostas submetidas';
$string['completedon'] = 'Concluído em {$a}';
$string['completiondetail:submit'] = 'Dar feedback';
$string['completionsubmit'] = 'Ver como concluído se o inquérito tiver sido submetido';
$string['configallowfullanonymous'] = 'Se selecionar \'Sim\', os utilizadores poderão concluir uma atividade inquérito na página principal sem estar autenticado.';
$string['confirmdeleteentry'] = 'Tem a certeza de que pretende apagar esta resposta?';
$string['confirmdeleteitem'] = 'Tem a certeza de que pretende apagar este item?';
$string['confirmdeletetemplate'] = 'Tem a certeza de que pretende apagar este modelo?';
$string['confirmusetemplate'] = 'Tem a certeza de que pretende aplicar este modelo?';
$string['continue_the_form'] = 'Continuar a responder às perguntas';
$string['count_of_nums'] = 'Contagem de números';
$string['courseid'] = 'ID da disciplina';
$string['creating_templates'] = 'Guardar estas perguntas como um novo modelo';
$string['delete_entry'] = 'Apagar resposta';
$string['delete_item'] = 'Apagar questão';
$string['delete_old_items'] = 'Apagar itens antigos';
$string['delete_pagebreak'] = 'Eliminar a quebra de página';
$string['delete_template'] = 'Apagar modelo';
$string['delete_templates'] = 'Apagar modelo…';
$string['depending'] = 'Dependências';
$string['depending_help'] = 'Esta opção permite que uma questão só seja exibida se tiver sido dada uma determinada resposta a uma questão prévia.<br />
<strong>Siga os passos seguintes para criar uma dependência:</strong><br />
<ol>
    <li>Crie uma pergunta que condicionará a exibição de outras perguntas.</li>
    <li>Adicione uma quebra de página (as questões dependentes não podem ocupar a mesma página).</li>
    <li>Adicione as perguntas cuja exibição depende da resposta à pergunta anterior.<br />
    <li>Selecione a pergunta na lista "Dependência de" e indique o valor necessário na caixa de texto "Resposta requerida".</li>
</ol>
<strong>Exemplo:</strong>
<ol>
    <li>Questão: Tem um carro? R: sim/não</li>
    <li>Quebra de página</li>
    <li>Questão: De que cor é o seu carro?<br />
        (esta questão depende da resposta à primeira questão ser "sim")</li>
    <li>Questão: Porque não tem um carro?<br />
        (esta questão depende da resposta à primeira questão ser "não")</li>
    <li> ... outros itens</li>
</ol>';
$string['dependitem'] = 'Dependência de';
$string['dependvalue'] = 'Resposta requerida';
$string['description'] = 'Descrição';
$string['do_not_analyse_empty_submits'] = 'Não analisar respostas em branco';
$string['downloadresponseas'] = 'Descarregar todas as respostas como:';
$string['drop_feedback'] = 'Apagar desta disciplina';
$string['dropdown'] = 'Escolha múltipla - resposta única (lista pendente)';
$string['dropdown_values'] = 'Respostas';
$string['dropdownlist'] = 'Escolha múltipla - resposta única (lista pendente)';
$string['dropdownrated'] = 'Lista pendente (c/escala)';
$string['edit_item'] = 'Editar questão';
$string['edit_items'] = 'Editar questões';
$string['email_notification'] = 'Ativar notificação de submissões';
$string['email_notification_help'] = 'Se ativar esta opção, os professores serão notificados por e-mail sempre que houverem novas submissões de inquéritos.';
$string['emailteachermail'] = 'O utilizador {$a->username} respondeu ao inquérito:
\'{$a->feedback}\'

Pode visuazilar as suas respostas em:
{$a->url}';
$string['emailteachermailhtml'] = 'O utilizador {$a->username} completou o inquérito: <i>\'{$a->feedback}\'</i> disponível em <a href="{$a->url}"></a>.';
$string['entries_saved'] = 'As suas respostas foram guardadas. Obrigado';
$string['eventresponsedeleted'] = 'Resposta apagada';
$string['eventresponsesubmitted'] = 'Resposta submetida';
$string['export_questions'] = 'Exportar questões';
$string['export_to_excel'] = 'Exportar para ficheiro Excel';
$string['feedback:addinstance'] = 'Adicionar um novo pedido de opiniões';
$string['feedback:complete'] = 'Concluir um inquérito';
$string['feedback:createprivatetemplate'] = 'Criar modelo privado';
$string['feedback:createpublictemplate'] = 'Criar modelo público';
$string['feedback:deletesubmissions'] = 'Apagar submissões concluídas';
$string['feedback:deletetemplate'] = 'Apagar modelo';
$string['feedback:edititems'] = 'Editar perguntas';
$string['feedback:mapcourse'] = 'Associar inquéritos globais a disciplinas';
$string['feedback:receivemail'] = 'Receber notificações por e-mail';
$string['feedback:view'] = 'Ver um inquérito';
$string['feedback:viewanalysepage'] = 'Ver a página de análise após a submissão';
$string['feedback:viewreports'] = 'Ver relatórios';
$string['feedback_is_not_for_anonymous'] = 'O Inquérito não permite respostas anónimas';
$string['feedback_is_not_open'] = 'O inquérito não está aberto';
$string['feedbackclose'] = 'Permitir respostas até';
$string['feedbackcompleted'] = '{$a->username} concluíu {$a->feedbackname}';
$string['feedbackopen'] = 'Permitir respostas a partir de';
$string['file'] = 'Ficheiro';
$string['filter_by_course'] = 'Filtrar por disciplina';
$string['handling_error'] = 'Ocorreu um erro no processamento do módulo de ação do inquérito';
$string['hide_no_select_option'] = 'Ocultar opção \'Não respondido\'';
$string['horizontal'] = 'Horizontal';
$string['import_questions'] = 'Importar questões';
$string['import_successfully'] = 'A importação foi concluída com sucesso';
$string['importfromthisfile'] = 'Importar deste ficheiro';
$string['includeuserinrecipientslist'] = 'Incluir {$a} na lista de destinatários';
$string['indicator:cognitivedepth'] = 'Compreensão do Inquérito';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na capacidade cognitiva alcançada pelo aluno na atividade Inquérito.';
$string['indicator:cognitivedepthdef'] = 'Compreensão do Inquérito';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pelas atividades Inquérito durante esse intervalo de análise (Níveis = Não visualizado, Visualizado, Submetido)';
$string['indicator:socialbreadth'] = 'Socialização do Inquérito';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno na atividade Inquérito.';
$string['indicator:socialbreadthdef'] = 'Socialização do Inquérito';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social oferecido pelas atividades Inquérito durante esse intervalo de análise (Níveis = Sem participação, Participante individual, Participante com outros)';
$string['info'] = 'Informação de sistema';
$string['infotype'] = 'Tipo de informação';
$string['insufficient_responses'] = 'respostas insuficientes';
$string['insufficient_responses_for_this_group'] = 'As respostas deste grupo são insuficientes';
$string['insufficient_responses_help'] = 'Para que o inquérito seja anónimo, são necessárias pelo menos duas respostas.';
$string['item_label'] = 'Identificador';
$string['item_name'] = 'Questão';
$string['label'] = 'Separador';
$string['labelcontents'] = 'Conteúdos';
$string['mapcourse'] = 'Associar o inquérito a disciplinas';
$string['mapcourse_help'] = 'Por predefinição, os inquéritos criados na sua página de entrada estão disponíveis em todo o site e aparecerão em todas as disciplinas que utilizem o bloco <b>Inquérito</b>. Pode forçar a apresentação dos inquéritos tornando o bloco inquérito como bloco persistente ou limitar as disciplinas em que inquérito aparece fazendo a sua associação a disciplinas específicas.';
$string['mapcourseinfo'] = 'Este é um inquérito global que está disponível em todas as disciplinas através do bloco <b>Inquérito</b>. É possível definir em que disciplinas o formulário deve aparecer se se fizer a respetiva associação.';
$string['mapcoursenone'] = 'Como não foi efetuada nenhuma associação o inquérito estará disponível em todas as disciplinas.';
$string['mapcourses'] = 'Associar o inquérito a disciplinas';
$string['mappedcourses'] = 'Disciplinas associadas';
$string['mappingchanged'] = 'O mapeamento da disciplina foi alterado';
$string['maximal'] = 'Máximo';
$string['messageprovider:message'] = 'Lembretes do inquérito';
$string['messageprovider:submission'] = 'Notificações do inquérito';
$string['minimal'] = 'Mínimo';
$string['mode'] = 'Modo';
$string['modulename'] = 'Inquérito';
$string['modulename_help'] = 'O módulo <b>Inquérito</b> permite que um professor crie um inquérito personalizado para obter feedback dos participantes, usando uma variedade de tipos de questões, incluindo escolha múltipla, sim/não ou de resposta curta

As respostas do inquérito podem ser anónimas, se desejado, e os resultados podem ser mostrados a todos os participantes ou restritos apenas aos professores. Quaisquer atividades de inquérito na página principal do site também podem ser concluídas por utilizadores não autenticados.

As Atividades de inquérito podem ser usadas:

* Para avaliações da disciplina, ajudando a melhorar os conteúdos para futuros participantes
* Para permitir que os participantes se inscrevam nos módulos da disciplina, em eventos, etc.
* Para inquérito aos visitantes sobre escolhas de disciplinas, políticas escolares, etc.
* Para inquéritos anti-bullying nos quais os alunos podem relatar incidentes anonimamente
* Para a criação de inquéritos configuráveis';
$string['modulenameplural'] = 'Inquéritos';
$string['move_item'] = 'Mover esta questão';
$string['multichoice'] = 'Escolha múltipla';
$string['multichoice_values'] = 'Opções de escolha múltipla';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Escolha múltipla (c/escala)';
$string['multichoicetype'] = 'Tipo de escolha múltipla';
$string['multiplesubmit'] = 'Permitir múltiplas submissões';
$string['multiplesubmit_help'] = 'Se ativar esta opção, os utilizadores poderão responder a inquéritos anónimos um número ilimitado de vezes.';
$string['name'] = 'Designação';
$string['name_required'] = 'O preenchimento do nome é obrigatório';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Página seguinte';
$string['no_handler'] = 'Não existe ação designada para';
$string['no_itemlabel'] = 'Sem identificador';
$string['no_itemname'] = 'O item não tem nome';
$string['no_items_available_yet'] = 'Ainda não foram configuradas questões';
$string['no_templates_available_yet'] = 'Ainda não existem modelos disponíveis';
$string['non_anonymous'] = 'O nome do utilizador será registado e identificado com as respostas';
$string['non_anonymous_entries'] = 'Respostas não anónimas ({$a})';
$string['non_respondents_students'] = 'Alunos que não responderam ({$a})';
$string['not_completed_yet'] = 'Incompletos';
$string['not_selected'] = 'Não respondido';
$string['not_started'] = 'Por iniciar';
$string['numberoutofrange'] = 'Valor fora do intervalo';
$string['numeric'] = 'Resposta numérica';
$string['numeric_range_from'] = 'Valor mínimo';
$string['numeric_range_to'] = 'Valor máximo';
$string['of'] = 'de';
$string['oldvaluespreserved'] = 'Todas as questões antigas e os seus valores serão preservadas';
$string['oldvalueswillbedeleted'] = 'As questões atuais e as respostas de todos os utilizadores serão apagadas.';
$string['only_one_captcha_allowed'] = 'Apenas é permitido inserir um CAPTCHA em cada inquérito';
$string['openafterclose'] = 'A data de início indicada é posterior à data de fim';
$string['overview'] = 'Visão global';
$string['page'] = 'Página';
$string['page-mod-feedback-x'] = 'Qualquer página da atividade Inquérito';
$string['page_after_submit'] = 'Mensagem de conclusão';
$string['pagebreak'] = 'Quebra de página';
$string['pluginadministration'] = 'Administração do Inquérito';
$string['pluginname'] = 'Inquérito';
$string['position'] = 'Posição';
$string['previous_page'] = 'Página anterior';
$string['privacy:metadata:completed'] = 'Registo das submissões ao Inquérito';
$string['privacy:metadata:completed:anonymousresponse'] = 'Se a submissão deve ser anónima.';
$string['privacy:metadata:completed:timemodified'] = 'A hora em que a submissão foi modificado pelo última vez.';
$string['privacy:metadata:completed:userid'] = 'O ID do utilizador que completou a atividade inquérito.';
$string['privacy:metadata:completedtmp'] = 'O registo de submissões que estão ainda em progresso.';
$string['privacy:metadata:value'] = 'O registo da resposta a uma questão.';
$string['privacy:metadata:value:value'] = 'A resposta escolhida.';
$string['privacy:metadata:valuetmp'] = 'O registo da resposta à questão numa submissão em progresso.';
$string['public'] = 'Público';
$string['question'] = 'Questão';
$string['questionandsubmission'] = 'Configurações da questão e da submissão';
$string['questions'] = 'Questões';
$string['questionslimited'] = 'A mostrar apenas as {$a} primeiras questões. Veja as respostas individuais ou descarregue a tabela de dados para ver todas.';
$string['radio'] = 'Escolha múltipla - resposta única';
$string['radio_values'] = 'Respostas';
$string['ready_feedbacks'] = 'Inquéritos prontos';
$string['required'] = 'Resposta obrigatória';
$string['resetting_data'] = 'Apagar todas as respostas do inquérito';
$string['resetting_feedbacks'] = 'Reiniciar inquéritos';
$string['response_nr'] = 'Número da resposta';
$string['responses'] = 'Respostas';
$string['responsetime'] = 'Dia/hora de resposta';
$string['save_as_new_item'] = 'Guardar como nova questão';
$string['save_as_new_template'] = 'Guardar como novo modelo';
$string['save_entries'] = 'Submeter respostas';
$string['save_item'] = 'Guardar';
$string['saving_failed'] = 'Erro ao guardar';
$string['search:activity'] = 'Inquérito - informações da atividade';
$string['search_course'] = 'Pesquisar disciplina';
$string['searchcourses'] = 'Pesquisar disciplinas';
$string['searchcourses_help'] = 'Pesquisar pelo código ou nome da(s) disciplina(s) que pretende associar a este inquérito.';
$string['selected_dump'] = 'Os índices selecionados da variável <b>$SESSION</b> são apresentados na lista seguinte:';
$string['send'] = 'Enviar';
$string['send_message'] = 'Enviar notificação';
$string['show_all'] = 'Mostrar todos';
$string['show_analysepage_after_submit'] = 'Mostrar página de análise de respostas';
$string['show_entries'] = 'Respostas';
$string['show_entry'] = 'Mostrar resposta';
$string['show_nonrespondents'] = 'Utilizadores que não responderam';
$string['site_after_submit'] = 'Site após submissão';
$string['sort_by_course'] = 'Ordenar por disciplina';
$string['started'] = 'Iniciado';
$string['startedon'] = 'Iniciado em {$a}';
$string['subject'] = 'Assunto';
$string['switch_item_to_not_required'] = 'Definir como não obrigatória';
$string['switch_item_to_required'] = 'Definir como obrigatória';
$string['template'] = 'Modelo';
$string['template_deleted'] = 'Modelo eliminado';
$string['template_saved'] = 'O modelo foi guardado';
$string['templates'] = 'Modelos';
$string['textarea'] = 'Resposta de texto longo';
$string['textarea_height'] = 'Número de linhas';
$string['textarea_width'] = 'Largura';
$string['textfield'] = 'Resposta de texto curto';
$string['textfield_maxlength'] = 'Limite de caracteres';
$string['textfield_size'] = 'Largura do campo de resposta';
$string['there_are_no_settings_for_recaptcha'] = 'O Captcha não foi configurado';
$string['this_feedback_is_already_submitted'] = 'Já concluiu esta atividade';
$string['typemissing'] = 'Não foi indicado o valor "tipo"';
$string['update_item'] = 'Guardar alterações';
$string['url_for_continue'] = 'Hiperligação para a atividade seguinte';
$string['url_for_continue_help'] = 'Após submeter o inquérito, é exibido um botão \'Continuar\' que remete para a página da disciplina. Em alternativa, esse botão poderá remeter para a atividade seguinte se o URL da atividade for inserido aqui.';
$string['use_one_line_for_each_value'] = 'Utilize uma linha para cada resposta!';
$string['use_this_template'] = 'Usar este modelo';
$string['using_templates'] = 'Usar um modelo';
$string['vertical'] = 'Vertical';
