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
 * Strings for component 'dialogue', language 'pt', version '4.4'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['ago'] = 'atrás';
$string['attachment'] = 'Anexo';
$string['attachments'] = 'Anexos';
$string['bulkopener'] = 'Abrir "Em grupo"';
$string['bulkopenrule'] = 'Regra "Em grupo"';
$string['bulkopenrulenotifymessage'] = '<strong>Aviso:</strong><br/>Quando utiliza regras "Em grupo", as conversas não são iniciadas de imediato. As conversas só iniciam quando a função do sistema Cron é executada, normalmente a cada 30 minutos.';
$string['bulkopenrules'] = 'Regras "Em grupo"';
$string['cachedef_params'] = 'Parâmetros - interface de utilizador';
$string['cachedef_participants'] = 'ID dos participantes (informação básica)';
$string['cachedef_unreadcounts'] = 'Mensagens não lidas dos utlizadores contam em conversas';
$string['cachedef_userdetails'] = 'Breves detalhes do utilizador, todos os utilizadores inscritos';
$string['cannotclosedraftconversation'] = 'Não pode terminar uma conversa que ainda não começou!';
$string['cannotdeleteopenconversation'] = 'Não pode apagar uma conversa aberta';
$string['closeconversation'] = 'Terminar conversa';
$string['closed'] = 'Terminadas';
$string['completed'] = 'Completas';
$string['configmaxattachments'] = 'Número máximo predefinido de anexos permitidos.';
$string['configmaxbytes'] = 'Tamanho máximo predefinido para todos os anexos de conversas no site (sujeito a limites da disciplina e a outras configurações locais)';
$string['configtrackunread'] = 'Seguir as mensagens não lidas na página inicial da disciplina';
$string['configviewconversationsbyrole'] = 'Visualização de conversas por papel, lista ordenada de conversas por papel do autor (experimental)';
$string['configviewstudentconversations'] = 'Lista de alunos envolvidos em conversas (experimental)';
$string['conversation'] = 'Conversas';
$string['conversationcloseconfirm'] = 'Tem a certeza de que pretende terminar a conversa \'{$a}\'?';
$string['conversationclosed'] = 'A conversa \'{$a}\' foi terminada';
$string['conversationdeleteconfirm'] = 'Tem a certeza de que pretende apagar a conversa \'{$a}\'? Não é possível anular esta operação.';
$string['conversationdeleted'] = 'A conversa \'{$a}\' foi apagada';
$string['conversationdiscarded'] = 'Conversa descartada';
$string['conversationlistdisplayheader'] = 'Mostrar {$a->show} {$a->state} conversas {$a->groupname}';
$string['conversationopened'] = 'A conversa foi iniciada';
$string['conversationopenedcron'] = 'Conversas serão iniciadas automaticamente';
$string['conversationopenedwith'] = '<strong>1</strong> conversa iniciada com:';
$string['conversations'] = 'Conversas';
$string['conversationsopenedwith'] = '<strong>{$a}</strong> conversas com:';
$string['cutoffdate'] = 'Data de fim';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = 'dia';
$string['days'] = 'dias';
$string['deleteallconversations'] = 'Apagar todas as conversas';
$string['deletealldrafts'] = 'Apagar todos os rascunhos';
$string['deleteallrules'] = 'Apagar todas as regras do iniciante';
$string['deleteconversation'] = 'Apagar conversa';
$string['deletereply'] = 'Apagar resposta';
$string['dialogue:addinstance'] = 'Adicionar Dialogue';
$string['dialogue:bulkopenrulecreate'] = 'Criar regra "Em grupo"';
$string['dialogue:bulkopenruleeditany'] = 'Permite ao utilizador editar qualquer regra, útil para administradores, etc.';
$string['dialogue:close'] = 'Terminar uma conversa';
$string['dialogue:closeany'] = 'Terminar qualquer uma';
$string['dialogue:delete'] = 'Apagar as próprias';
$string['dialogue:deleteany'] = 'Apagar qualquer conversa';
$string['dialogue:open'] = 'Iniciar uma conversa';
$string['dialogue:receive'] = 'Receber, quem pode ser o destinatário ao iniciar uma conversa';
$string['dialogue:reply'] = 'Responder';
$string['dialogue:replyany'] = 'Responder a qualquer conversa';
$string['dialogue:viewany'] = 'Ver qualquer conversa';
$string['dialogue:viewbyrole'] = 'Ver lista de conversas por papel (experimental)';
$string['dialoguecron'] = 'Cron do Dialogue';
$string['dialogueintro'] = 'Descrição';
$string['dialoguename'] = 'Nome';
$string['displaybystudent'] = 'Mostrar por aluno';
$string['displayconversationsheading'] = 'Lista de {$a} conversas';
$string['displaying'] = 'Listagem';
$string['draft'] = 'Rascunho';
$string['draftconversation'] = 'Rascunho de conversa';
$string['draftconversationtrashed'] = 'Rascunho de conversa apagado';
$string['draftlistdisplayheader'] = 'Lista de rascunhos';
$string['draftreply'] = 'Rascunho de resposta';
$string['draftreplytrashed'] = 'Rascunho de resposta apagado';
$string['drafts'] = 'Rascunhos';
$string['errorcutoffdateinpast'] = 'Data de Fim não pode ser definida no passado';
$string['erroremptymessage'] = '<strong>Mensagem</strong> não pode estar em branco';
$string['erroremptysubject'] = '<strong>Assunto</strong> não pode estar em branco';
$string['errornoparticipant'] = 'Tem de iniciar uma conversa com alguém...';
$string['eventconversationclosed'] = 'Conversa terminada';
$string['eventconversationcreated'] = 'Conversa criada';
$string['eventconversationdeleted'] = 'Conversa apagada';
$string['eventconversationviewed'] = 'Conversa visualizada';
$string['eventreplycreated'] = 'Resposta criada';
$string['everybody'] = 'Todos (disponível para todos)';
$string['everyone'] = 'Qualquer um';
$string['everyones'] = 'Todos';
$string['firstname'] = 'Nome';
$string['fullname'] = 'Nome+Apelido';
$string['groupmodenotifymessage'] = 'A atividade está a ser executada no modo de grupo. Irá afetar quem pode iniciar uma conversa com e que conversas são mostradas.';
$string['hasnotrun'] = 'Ainda não foi executada';
$string['hour'] = 'hora';
$string['hours'] = 'horas';
$string['includefuturemembers'] = 'Incluir futuros membros';
$string['incompleteconversation'] = 'Tem de selecionar um destinatário para esta conversa. Por favor, tente novamente.';
$string['ingroup'] = 'no grupo {$a}';
$string['justmy'] = 'apenas minha';
$string['lastname'] = 'Apelido';
$string['lastranon'] = 'Última execução em';
$string['latest'] = 'Recentes';
$string['listpaginationheader'] = '{$a->start}-{$a->end} de {$a->total}';
$string['matchingpeople'] = 'Pessoas correspondentes ({$a})';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachments_help'] = 'Esta configuração especifica o número máximo de ficheiros que podem ser anexados numa mensagem.';
$string['maxattachmentsize'] = 'Tamanho máximo do anexo';
$string['maxattachmentsize_help'] = 'Esta configuração especifica o tamanho máximo do ficheiro que pode ser anexado numa mensagem.';
$string['message'] = 'Mensagem';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} adicionou uma nova mensagem numa conversa na qual está a participar com o assunto: <i>{$a->subject}</i>
<br/><br/><a href="{$a->url}">Ver no Moodle</a></p>';
$string['messageapismallmessage'] = '{$a} adicionou uma nova mensagem numa conversa na qual está a participar';
$string['messageprovider:post'] = 'Notificações do "Dialogue"';
$string['messages'] = 'mensagens';
$string['mine'] = 'Minha';
$string['minute'] = 'minuto';
$string['minutes'] = 'minutos';
$string['modulename'] = 'Dialogue';
$string['modulename_help'] = '*Dialogue* permite que os alunos ou professores iniciem conversas bidirecionais com outras pessoas. É uma atividade da disciplina que pode ser útil quando o professor pretende um lugar privado para dar feedback a um aluno na sua atividade online. Por exemplo, se um aluno está a participar num fórum de estudo de língua estrangeira e cometeu um erro gramatical que o professor pretende apontar sem embaraçar o aluno, o *Dialogue* é o modo ideal de o fazer. A atividade *Dialogue* também pode ser uma excelente ferramenta para os conselheiros dentro de uma instituição interagirem com os alunos - todas as atividades são registadas e o e-mail não é necessariamente obrigatório';
$string['modulenameplural'] = 'Dialogues';
$string['month'] = 'mês';
$string['months'] = 'meses';
$string['nobulkrulesfound'] = 'Não existem regras "Em grupo"';
$string['noconversationsfound'] = 'Nenhuma conversa encontrada!';
$string['nodraftsfound'] = 'Nenhum rascunho!';
$string['nomatchingpeople'] = 'Nenhum utilizador coincide com \'{$a}\'';
$string['nopermissiontoclose'] = 'Não tem permissão para terminar esta conversa!';
$string['nopermissiontodelete'] = 'Não tem permissão para apagar!';
$string['nosubject'] = '[sem assunto]';
$string['numberattachments'] = '{$a} anexos';
$string['numberunread'] = '{$a} não lidas';
$string['oldest'] = 'Antigas';
$string['onlydraftscanbetrashed'] = 'Apenas os rascunhos podem ser apagados';
$string['open'] = 'Aberta';
$string['openedbyfullyear'] = '<small>Inciada por</small> <strong>{$a->fullname}</strong> <small>em</small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Inciada por</small> <strong>{$a->fullname}</strong> <small>em</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Iniciada por</small> <strong>{$a->fullname}</strong> <small>às</small> {$a->time} <small>({$a->timepast} atrás)</small>';
$string['openwith'] = 'Iniciar com';
$string['participants'] = 'participantes';
$string['people'] = 'Pessoa';
$string['pluginadministration'] = 'Administração do Dialogue';
$string['pluginname'] = 'Dialogue';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>respondeu há </small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>respondeu em</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>respondeu em</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>respondeu às</small> {$a->time} <small>({$a->timepast} atrás)</small>';
$string['reply'] = 'Responder';
$string['replydeleteconfirm'] = 'Tem a certeza de que pretende apagar esta resposta?';
$string['replydeleted'] = 'A resposta foi apagada';
$string['replysent'] = 'A resposta foi enviada';
$string['runsuntil'] = 'Executar até';
$string['savedraft'] = 'Guardar rascunho';
$string['search:activity'] = 'Dialogue - informação sobre a atividade';
$string['search:conversations'] = 'Dialogue - informação sobre conversas e mensagens';
$string['searchpotentials'] = 'Pesquisar participantes...';
$string['second'] = 'segundo';
$string['seconds'] = 'segundos';
$string['send'] = 'Enviar';
$string['senton'] = '<small><strong>Enviada: </strong></small>';
$string['sortedby'] = 'Ordenar por: {$a}';
$string['studenttostudent'] = 'Aluno para aluno';
$string['subject'] = 'Assunto';
$string['teachertostudent'] = 'Professor para aluno';
$string['trashdraft'] = 'Apagar rascunho';
$string['unread'] = 'Não lidas';
$string['unreadmessages'] = 'Mensagens não lidas';
$string['unreadmessagesnumber'] = '{$a} mensagens não lidas';
$string['unreadmessagesone'] = '1 mensagem não lida';
$string['usecoursegroups'] = 'Usar grupos da disciplina';
$string['usecoursegroups_help'] = 'Se a disciplina tem grupos definidos, será adicionada uma outra restrição para quem uma conversa pode ser aberta. *Dialogue* só pode ser aberto entre os membros do grupo a não ser que a pessoa que iniciar a conversa tenha a permissão de "**Aceder a todos os grupos**".';
$string['usesearch'] = 'Utilize a pesquisa para encontrar pessoas com quem conversar';
$string['viewconversations'] = 'Conversas';
$string['viewconversationsbyrole'] = 'Ver conversas por papel';
$string['week'] = 'semana';
$string['weeks'] = 'semanas';
$string['year'] = 'ano';
$string['years'] = 'anos';
