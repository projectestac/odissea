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
 * Strings for component 'facetoface', language 'pt', version '4.4'.
 *
 * @package     facetoface
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingsession'] = 'A adicionar uma nova sessão em {$a}';
$string['addmanageremailaddress'] = 'Adicionar endereço de e-mail do gestor';
$string['addmanageremailinstruction'] = 'Ainda não indicou o endereço de e-mail do seu gestor. Por favor, insira-o abaixo para se inscrever nesta sessão.';
$string['addnewfield'] = 'Adicionar um novo campo personalizado';
$string['addnewfieldlink'] = 'Criar um novo campo personalizado';
$string['addnewnotice'] = 'Adicionar um novo aviso de site';
$string['addnewnoticelink'] = 'Criar um novo aviso de site';
$string['addremoveattendees'] = 'Adicionar/remover participantes';
$string['addsession'] = 'Adicionar nova sessão';
$string['addstudent'] = 'Adicionar aluno';
$string['addtoallsessions'] = 'Adicionar utilizadores a todas as sessões (próximas)';
$string['addtoallsessions_help'] = 'Ative esta opção se pretender adicionar utilizadores a todas as próximas sessões da Atividade presencial. Quando ativada, os utilizadores selecionados serão adicionados a esta sessão e a todas as outras sessões futuras da atividade.';
$string['alllocations'] = 'Todos os locais';
$string['allowcancellations'] = 'Permitir cancelamento da inscrição';
$string['allowcancellations_help'] = 'Se ativar esta opção, os participantes da sessão poderão cancelar as suas inscrições';
$string['allowcancellationsdefault'] = 'Permitir cancelamento da inscrição';
$string['allowcancellationsdefault_help'] = 'Se ativar esta opção, ao criar novas sessões para esta atividade, a configuração predefinida será permitir o cancelamento da inscrição';
$string['allowoverbook'] = 'Permitir lista de espera';
$string['allowoverbook_help'] = 'Quando a opção "Permitir lista de espera" está ativada, os alunos poderão inscrever-se numa sessão da Atividade presencial, mesmo que já esteja lotada.<br />

Quando um aluno inscreve-se numa sessão com lotação esgotada, receberá um e-mail avisando que foi colocado na lista de espera da sessão e será notificado quando a reserva estiver disponível.';
$string['allsessionsin'] = 'Todas as sessões em {$a}';
$string['alreadysignedup'] = 'Já está inscrito nesta Atividade presencial.';
$string['answer'] = 'Entrar';
$string['answercancel'] = 'Sair';
$string['approvalreqd'] = 'Aprovação necessária';
$string['approvalreqd_help'] = 'Se ativar esta opção, o aluno precisará da aprovação do gestor para poder participar numa sessão da Atividade presencial.';
$string['approve'] = 'Aprovar';
$string['assessmentyour'] = 'A sua avaliação';
$string['attendance'] = 'Presença';
$string['attendanceinstructions'] = 'Selecione os utilizadores que participaram na sessão:';
$string['attendedsession'] = 'Sessão assistida';
$string['attendees'] = 'Participantes';
$string['attendeesexporttofileheading'] = 'Exportar participações para ficheiro';
$string['booked'] = 'Reservado';
$string['bookingcancelled'] = 'A sua reserva foi cancelada.';
$string['bookingcompleted'] = 'A sua reserva foi concluída.';
$string['bookingfull'] = 'Reservas completas';
$string['bookingopen'] = 'Reservas abertas';
$string['bookingstatus'] = 'Efetuou reserva para a seguinte sessão';
$string['calendareventdescriptionbooking'] = 'Tem reserva para esta <a href="{$a}">sessão de Atividade presencial</a>.';
$string['calendareventdescriptionsession'] = 'Ir para <a href="{$a}">sessão de Atividade presencial</a>';
$string['calendaroptions'] = 'Opções do calendário';
$string['cancelbooking'] = 'Cancelar reserva';
$string['cancelbookingfor'] = 'Cancelar a reserva para {$a}';
$string['cancellation'] = 'Cancelamento';
$string['cancellationconfirm'] = 'Tem a certeza de que pretende cancelar a sua reserva para esta sessão?';
$string['cancellationinstrmngr'] = '# Notificação para o gestor';
$string['cancellationinstrmngr_help'] = 'Quando **Enviar notificação ao gestor** estiver ativado, o texto no campo **Notificação para o gestor** será enviado ao gestor do aluno informando que ele cancelou uma reserva da Atividade presencial.';
$string['cancellationmessage'] = 'Mensagem de cancelamento';
$string['cancellationmessage_help'] = 'Esta mensagem é enviada sempre que os utilizadores cancelam a sua reserva para uma sessão.';
$string['cancellations'] = 'Cancelamentos';
$string['cancellationsent'] = 'Irá receber dentro de instantes um e-mail de cancelamento.';
$string['cancellationsentmgr'] = 'Dentro de instantes, irá receber, tal como o seu gestor, um e-mail de cancelamento.';
$string['cancellationstablesummary'] = 'Lista de pessoas que cancelaram as suas inscrições na sessão.';
$string['cancelreason'] = 'Motivo';
$string['cannotapproveatcapacity'] = 'Não pode aprovar mais participantes porque esta sessão tem a lotação completa.';
$string['cannotsignupsessioninprogress'] = 'Não pode-se inscrever uma vez que esta sessão está a decorrer';
$string['cannotsignupsessionover'] = 'Não pode-se inscrever uma vez que esta sessão já terminou';
$string['capacity'] = 'Lotação';
$string['capacity_help'] = '**Lotação** é o número de lugares disponíveis numa sessão.

Quando uma sessão presencial atinge a lotação, os detalhes da sessão deixam de aparecer na página da disciplina. Os detalhes aparecerão a cinzento na página "Ver todas as sessões" e o aluno não poderá inscrever-se na sessão.';
$string['changemanageremailaddress'] = 'Alterar endereço de e-mail do gestor';
$string['changemanageremailinstruction'] = 'Indique abaixo o endereço de e-mail do seu gestor atual.';
$string['clearall'] = 'Limpar tudo';
$string['closed'] = 'Fechada';
$string['conditions'] = 'Condições';
$string['conditionsexplanation'] = 'Todos estes critérios têm de ser cumpridos para que o aviso apareça no calendário de treino:';
$string['confirm'] = 'Confirmar';
$string['confirmanager'] = 'Confirme o endereço de e-mail do gestor';
$string['confirmation'] = 'Confirmação';
$string['confirmationinstrmngr'] = '# Notificação para o gestor';
$string['confirmationinstrmngr_help'] = 'Quando **Enviar notificação ao gestor** estiver ativado, o texto no campo **Notificação para o gestor** será enviado a um gestor informando que um membro da equipe se inscreveu numa sessão da atividade presencial.';
$string['confirmationmessage'] = 'Mensagem de confirmação';
$string['confirmationmessage_help'] = 'Esta mensagem é enviada sempre que os utilizadores inscrevem-se para uma sessão.';
$string['confirmationsent'] = 'Irá receber dentro de instantes um e-mail de confirmação.';
$string['confirmationsentmgr'] = 'Dentro de instantes, irá receber, tal como o seu gestor, um e-mail de confirmação.';
$string['confirmmanageremailaddress'] = 'Confirmar endereço de e-mail do gestor';
$string['confirmmanageremailaddressquestion'] = '<b>{$a}</b> continua a ser o e-mail do seu gestor?';
$string['confirmmanageremailinstruction1'] = 'Anteriormente, indicou como endereço de e-mail do seu gestor:';
$string['confirmmanageremailinstruction2'] = 'Este ainda é o endereço de e-mail do seu gestor?';
$string['continuetologin'] = 'Clique em Continuar para iniciar sessão';
$string['copy'] = 'Duplicar';
$string['copyingsession'] = 'Duplicar como nova sessão em {$a}';
$string['copysession'] = 'Copiar sessão';
$string['cost'] = 'Custo';
$string['costheading'] = 'Custo da sessão';
$string['crontask'] = 'Tarefas de manutenção de Atividade presencial';
$string['currentstatus'] = 'Estado atual';
$string['customfieldid'] = 'ID do campo personalizado';
$string['customfieldnewshortname'] = 'Novo nome curto do campo personalizado';
$string['customfieldoriginalshortname'] = 'Nome curto original do campo personalizado';
$string['customfieldsheading'] = 'Campos personalizados de sessão';
$string['date'] = 'Data';
$string['dateadd'] = 'Adicionar nova data';
$string['dateremove'] = 'Apagar esta data';
$string['datesignedup'] = 'Data de inscrição';
$string['datetext'] = 'Está inscrito para a data';
$string['decidelater'] = 'Decidir depois';
$string['decline'] = 'Rejeitar';
$string['delete'] = 'Apagar';
$string['deleteall'] = 'Apagar tudo';
$string['deletesession'] = 'Apagar sessão';
$string['deletesessionconfirm'] = 'Tem a certeza absoluta de que pretende apagar esta sessão e todas as inscrições da sessão?';
$string['deletingsession'] = 'A apagar sessão em {$a}';
$string['description'] = 'Texto da introdução';
$string['description_help'] = '**Descrição** é a descrição da disciplina que é mostrada quando um aluno se inscreve numa sessão de Atividade presencial.

A **Descrição** também aparece no calendário de treino.';
$string['details'] = 'Detalhes';
$string['discountcode'] = 'Código do desconto';
$string['discountcodelearner'] = 'Código do desconto';
$string['discountcost'] = 'Desconto';
$string['due'] = 'terminada';
$string['duration'] = 'Duração';
$string['duration_help'] = '**Duração** é duração total de treino (em horas)
Por exemplo:
* "2 horas" é introduzido como **2** ou **2:00**
* "1 hora e 30 minutos" é introduzido como **1:30**
* "45 minutos" é introduzido como **0:45**
* "20 minutos" é introduzido como **0:20**.

Se o treino ocorrer em dois ou mais períodos de tempo, a duração será o total combinado.';
$string['early'] = '{$a} mais cedo';
$string['edit'] = 'Editar';
$string['editingsession'] = 'A editar sessão em {$a}';
$string['editsession'] = 'Editar sessão';
$string['email:instrmngr'] = 'Notificação para o gestor';
$string['email:message'] = 'Mensagem';
$string['email:subject'] = 'Assunto';
$string['emailmanager'] = 'Enviar notificação ao gestor';
$string['emailmanagercancellation'] = '# Enviar notificação ao gestor';
$string['emailmanagercancellation_help'] = 'Quando "Enviar notificação ao gestor" estiver ativado, será enviado um e-mail ao gestor do aluno informando que a reserva para a atividade presencial foi cancelada.';
$string['emailmanagerconfirmation'] = '# Enviar notificação ao gestor';
$string['emailmanagerconfirmation_help'] = 'Quando "Enviar notificação ao gestor" estiver ativado, será enviado um e-mail de confirmação ao gestor do aluno quando o aluno se inscrever numa da atividade presencial.';
$string['emailmanagerreminder'] = '# Enviar notificação ao gestor';
$string['emailmanagerreminder_help'] = 'Quando "Enviar notificação ao gestor" estiver ativado, será enviado uma uma mensagem de lembrete  ao gestor do aluno quando o aluno alguns dias antes da data de início da sessão da atividade presencial.';
$string['emptylocation'] = 'Localidade estava em branco';
$string['enrolled'] = 'inscrito';
$string['error:addalreadysignedupattendee'] = '{$a} já está inscrito para esta Atividade presencial.';
$string['error:addattendee'] = 'Não foi possível adicionar {$a} à sessão.';
$string['error:cancelbooking'] = 'Ocorreu um erro ao cancelar a sua reserva';
$string['error:cancellationsnotallowed'] = 'Não tem permissão para cancelar esta inscrição.';
$string['error:cannotsendconfirmationmanager'] = 'Uma mensagem de confirmação foi enviada para a sua conta de e-mail, mas ocorreu um erro ao enviar a mensagem de confirmação para o endereço de e-mail do seu gestor.';
$string['error:cannotsendconfirmationthirdparty'] = 'Uma mensagem de confirmação foi enviada para a sua conta de e-mail e para a conta de e-mail do seu gestor, mas ocorreu um erro ao enviar a mensagem de confirmação para o endereço de e-mail de terceiros.';
$string['error:cannotsendconfirmationuser'] = 'Ocorreu um erro ao enviar a mensagem de confirmação para a sua conta de e-mail.';
$string['error:cannotsendrequestuser'] = 'Ocorreu um erro ao enviar a mensagem do pedido de inscrição para a sua conta de e-mail.';
$string['error:canttakeattendanceforunstartedsession'] = 'Não é possível registar presenças dea uma sessão que ainda não iniciou.';
$string['error:couldnotaddnotice'] = 'Não foi possível adicionar o aviso de site.';
$string['error:couldnotaddsession'] = 'Não foi possível adicionar sessão';
$string['error:couldnotcopysession'] = 'Não foi possível duplicar a sessão';
$string['error:couldnotdeletenotice'] = 'Não foi possível apagar o aviso de site.';
$string['error:couldnotdeletesession'] = 'Não foi possível apagar a sessão';
$string['error:couldnotupdatecalendar'] = 'Não foi possível atualizar o evento da sessão no calendário.';
$string['error:couldnotupdatenotice'] = 'Não foi possível atualizar o aviso de site.';
$string['error:couldnotupdatesession'] = 'Não foi possível atualizar a sessão';
$string['error:coursemisconfigured'] = 'Erro na configuração da disciplina';
$string['error:emptylocation'] = 'Localidade estava em branco.';
$string['error:emptymanageremail'] = 'Endereço de e-mail do gestor em branco.';
$string['error:emptyvenue'] = 'O local estava vazio.';
$string['error:enrolmentfailed'] = 'Não foi possível inscrever {$a} na disciplina.';
$string['error:eventoccurred'] = 'Não pode cancelar um evento que já ocorreu.';
$string['error:f2ffailedupdatestatus'] = 'Ocorreu um erro ao atualizar o estado do utilizador da Atividade presencial';
$string['error:nopermissiontosignup'] = 'Não tem permissão para se inscrever nesta sessão de Atividade presencial.';
$string['error:problemsigningup'] = 'Ocorreu um erro na sua inscrição';
$string['error:removeattendee'] = 'Não foi possível apagar {$a} da sessão.';
$string['error:sessionstartafterend'] = 'A data/hora de início da sessão é após a data de fim.';
$string['error:shortnametaken'] = 'Já existe um campo personalizado com este nome curto.';
$string['error:signedupinothersession'] = 'Já está inscrito noutra sessão desta atividade. Só se pode inscrever numa sessão por Atividade presencial.';
$string['error:unknownbuttonclicked'] = 'Nenhuma ação está associada ao botão que foi clicado';
$string['eventaddsession'] = 'Sessão adicionada';
$string['eventaddsessionfailed'] = 'Sessão adicionada (FALHOU)';
$string['eventapproverequests'] = 'Aprovar pedidos da sessão';
$string['eventcancelbooking'] = 'Cancelar reserva na sessão';
$string['eventcancelbookingfailed'] = 'Cancelar reserva na sessão (FALHOU)';
$string['eventdeletesession'] = 'Sessão adicionada';
$string['eventdeletesessionfailed'] = 'Sessão adicionada (FALHOU)';
$string['eventsignup'] = 'Inscrição na sessão';
$string['eventsignupfailed'] = 'Inscrição na sessão (FALHOU)';
$string['eventupdatesession'] = 'Sessão atualizada';
$string['eventupdatesessionfailed'] = 'Sessão atualizada (FALHOU)';
$string['excelformat'] = 'Excel';
$string['export'] = 'Exportar';
$string['exportattendance'] = 'Exportar presenças';
$string['exporttofile'] = 'Exportar para ficheiro';
$string['facetoface'] = 'Atividade presencial';
$string['facetoface:addattendees'] = 'Adicionar participantes a uma sessão de Atividade presencial';
$string['facetoface:addinstance'] = 'Adicionar instância';
$string['facetoface:configurecancellation'] = 'Permitir a configuração de cancelamentos da inscrição ao adicionar/editar uma Atividade presencial.';
$string['facetoface:editsessions'] = 'Adicionar, editar, copiar e apagar sessões de Atividade presencial';
$string['facetoface:overbook'] = 'Inscrever-se em todas as sessões';
$string['facetoface:signup'] = 'Inscrever-se numa sessão';
$string['facetoface:takeattendance'] = 'Registar assiduidade';
$string['facetoface:viewattendees'] = 'Ver lista de presenças e participantes';
$string['facetoface:viewcancellations'] = 'Ver cancelamentos';
$string['facetofacebooking'] = 'Reserva para Atividade presencial';
$string['facetofacename'] = 'Nome da Atividade presencial';
$string['facetofacesession'] = 'Sessão de Atividade presencial';
$string['feedback'] = 'Feedback';
$string['field:multiselect'] = 'Múltiplas sessões';
$string['field:select'] = 'Menu das escolhas';
$string['field:text'] = 'Texto';
$string['fielddeleteconfirm'] = 'Apagar o campo \'{$a}\' e todos os dados da sessão associados a ele?';
$string['floor'] = 'Piso';
$string['format'] = 'Formato:';
$string['full'] = 'Está totalmente ocupada';
$string['goback'] = 'Voltar';
$string['guestsno'] = 'Os visitantes não têm permissão para se inscreverem nas sessões.';
$string['icalendarheading'] = 'Anexos iCalendar';
$string['import'] = 'Importar';
$string['info'] = 'Informação';
$string['late'] = '\\{$a} atrasado';
$string['location'] = 'Localização';
$string['lookfor'] = 'Pesquisar';
$string['manageradded'] = 'O endereço de e-mail do seu gestor foi aceite.';
$string['managerchanged'] = 'O endereço de e-mail do seu gestor foi alterado.';
$string['manageremail'] = 'E-mail do gestor';
$string['manageremailaddress'] = 'E-mail do gestor';
$string['manageremaildisabled'] = 'As configurações do e-mail do gestor não estarão disponíveis se as aprovações do gestor não estiverem ativadas.';
$string['manageremailinstructionconfirm'] = 'Confirme se este é o endereço de e-mail do seu gestor:';
$string['managername'] = 'Nome do gestor';
$string['managerupdated'] = 'O endereço de e-mail do seu gestor foi atualizado.';
$string['maximumpoints'] = 'Pontuação máxima';
$string['maximumsize'] = 'Número máximo de participantes';
$string['message'] = 'Alteração da reserva na disciplina {$a->coursename}!

Houve um lugar livre na sessão de {$a->duedate} ({$a->name}) na disciplina {$a->coursename}.
Foi efetuado o seu registo. Se a data não já não lhe convém, por favor cancele o registo em <a href=\'{$a->url} \'>{$a->url}</a>.';
$string['mods_help'] = 'As Atividades Presenciais são usadas para acompanhar os treinos presenciais que exigem reserva antecipada.

Cada atividade é oferecida numa ou mais sessões idênticas. As sessões podem ocorrer em vários dias.

As mensagens de lembrete são enviadas aos utilizadores e gestores alguns dias antes do início da sessão. As mensagens de confirmação são enviadas quando os utilizadores se inscrevem numa sessão ou cancelam a inscrição.';
$string['modulename'] = 'Atividade presencial';
$string['modulename_help'] = 'O módulo Atividade presencial permite que o professor configure um sistema de auto reserva para uma ou várias sessões presenciais.

Cada sessão dentro de uma Atividade presencial pode ter configurações personalizadas: local, hora de início, hora de fim, custo, lotação, etc. Podem ser configuradas para serem executadas em vários dias ou para permitir sessões não programadas e com lista de espera.

Uma Atividade presencial pode ser definida para exigir aprovação do gestor e os professores podem configurar notificações automáticas e lembretes de sessão para os participantes.

Os alunos podem visualizar e inscreverem-se nas sessões e a sua presença pode ser monitorizada e registada na pauta.';
$string['modulenameplural'] = 'Atividades presenciais';
$string['moreinfo'] = 'Mais informações';
$string['multidate'] = '(vários horários)';
$string['multiple'] = 'Múltipla';
$string['multiplesignupmethod'] = 'Método de inscrição múltipla';
$string['multiplesignupmethod_help'] = 'Quando definido como "Por sessão", os alunos inscrevem-se em cada sessão da atividade presencial. Quando definido como "Por atividade", os alunos só terão a opção de se inscrever em todas as sessões da atividade presencial.';
$string['multiplesignupperactivity'] = 'Por atividade';
$string['multiplesignuppersession'] = 'Por sessão';
$string['newmanageremailaddress'] = 'E-mail do gestor';
$string['nocustomfields'] = '<p>Nenhum campo personalizado definido.</p>';
$string['nofacetofaces'] = 'Não existe Atividades presenciais';
$string['none'] = 'nenhum';
$string['noremindersneedtobesent'] = 'Não é necessário enviar lembrete.';
$string['normalcost'] = 'Custo normal';
$string['nosignedupusers'] = 'Nenhum utilizador está inscrito nesta sessão.';
$string['nositenotices'] = '<p>Nenhum aviso de site definido.</p>';
$string['note'] = 'Observação';
$string['noticedeleteconfirm'] = 'Apagar este aviso \'{$a->name}\'?<br/><blockquote>{$a->text}</blockquote>';
$string['noticetext'] = 'Texto da notificação';
$string['notificationboth'] = 'Notificação por e-mail e agendamento no iCalendar';
$string['notificationemail'] = 'Apenas notificação por e-mail';
$string['notificationical'] = 'Apenas agendamento no iCalendar';
$string['notificationtype'] = 'Tipo de Notificação';
$string['notsignedup'] = 'Não está inscrito nesta sessão.';
$string['notsubmittedyet'] = 'Ainda não avaliado';
$string['noupcoming'] = '<p><i>Não existem próximas sessões</i></p>';
$string['odsformat'] = 'OpenDocument';
$string['onehour'] = '1 hora';
$string['oneminute'] = '1 minuto';
$string['options'] = 'Opções';
$string['or'] = 'ou';
$string['order'] = 'Ordem';
$string['place'] = 'Sala';
$string['placeholder:alldates'] = '[todasdatas]';
$string['placeholder:attendeeslink'] = '[linkparticipantes]';
$string['placeholder:cost'] = '[custo]';
$string['placeholder:details'] = '[detalhes]';
$string['placeholder:duration'] = '[duração]';
$string['placeholder:facetofacename'] = '[nomeatividade]';
$string['placeholder:finishtime'] = '[horafim]';
$string['placeholder:firstname'] = '[nome]';
$string['placeholder:lastname'] = '[apelido]';
$string['placeholder:reminderperiod'] = '[tempolembrete]';
$string['placeholder:sessiondate'] = '[datasessão]';
$string['placeholder:starttime'] = '[horainício]';
$string['pluginadministration'] = 'Administração da Atividade presencial';
$string['pluginname'] = 'Atividade presencial';
$string['points'] = 'Ponto';
$string['pointsplural'] = 'Pontos';
$string['potentialattendees'] = 'Potenciais participanrtes';
$string['previoussessions'] = 'Sessões anteriores';
$string['printversionid'] = 'Versão impressa: sem nome';
$string['printversionname'] = 'Versão impressa: com nome';
$string['privacy:metadata:facetoface_signups'] = 'Inscrições de utilizadores para sessões presenciais';
$string['privacy:metadata:facetoface_signups:mailedreminder'] = 'A hora em que um lembrete foi enviado pela última vez';
$string['really'] = 'Tem a certeza absoluta de que pretende apagar todos os resultados desta Atividade presencial?';
$string['registeredon'] = 'Registado em';
$string['registrations'] = 'Registos';
$string['reminder'] = 'Lembrete';
$string['reminderinstrmngr'] = '# Notificação para o gestor';
$string['remindermessage'] = 'Mensagem de lembrete';
$string['remindermessage_help'] = 'Esta mensagem é enviada alguns dias antes da data de início de uma sessão.';
$string['reminderperiod'] = 'Dias antes para envio da mensagem';
$string['reminderperiod_help'] = 'Número de dias antes do início da sessão em que será enviado o lembrete.';
$string['requestmessage'] = 'Mensagem de requisição';
$string['requestmessage_help'] = 'Quando **Aprovação necessária** está ativa, a secção **Solicitar mensagem** está disponível.

A secção **Mensagem de requisição** mostra os avisos enviados ao aluno e ao seu gestor sobre o processo de aprovação para o aluno participar na sessão da Atividade presencial.

**Assunto:** é o assunto que aparece nos e-mails de aprovação dos pedidos enviados ao gestor e ao aluno.

**Mensagem:** é o texto do e-mail enviado ao aluno, informando-o que o seu pedido para participar na sessão da Atividade presencial foi enviado ao seu gestor para aprovação.

**Notificação para o gestor:** é o texto do e-mail enviado ao gestor do aluno a solicitar aprovação para participar na sessão da Atividade presencial.';
$string['room'] = 'Sala';
$string['room_help'] = '**Sala** é o nome/número/identificador da sala usada para a sessão de treino.
A **Sala** é mostrada na página "Inscrição", na página "Ver todas as sessões" e em todas as notificações por e-mail.';
$string['saveallfeedback'] = 'Guardar todas as respostas';
$string['saveattendance'] = 'Guardar';
$string['scheduledsession'] = 'Sessão programada';
$string['scheduledsessions'] = 'Sessões programadas';
$string['search:activity'] = 'Atividades Presenciais';
$string['seatsavailable'] = 'Lugares disponíveis';
$string['seeattendees'] = 'Ver participantes';
$string['sentremindermanager'] = 'Enviado e-mail de lembrete ao gestor do utililizador';
$string['sentreminderuser'] = 'Enviado e-mail de lembrete para o utilizador';
$string['sessiondate'] = 'A data da sessão é a data em que a sessão ocorre.';
$string['sessiondateandtime'] = '{$a->startdatetime} - {$a->enddatetime} (time zone: {$a->timezone})';
$string['sessiondatetime'] = 'Data/hora da sessão';
$string['sessiondatetimeknown'] = 'Mostrar data/hora da sessão';
$string['sessionfinishtime'] = 'Hora de fim da sessão';
$string['sessioninprogress'] = 'a decorrer';
$string['sessionisfull'] = 'Esta sessão está lotada. Tem de escolher outro horário ou conversar com o instrutor.';
$string['sessionover'] = 'terminada';
$string['sessionrequiresmanagerapproval'] = 'Esta sessão requer aprovação para reservar.';
$string['sessionroles'] = 'Papéis na sessão';
$string['sessions'] = 'Sessões';
$string['sessionsoncoursepage'] = 'Sessões na página da disciplina';
$string['sessionsoncoursepage_help'] = 'Número de sessões, para cada Atividade presencial, que é mostrado na página principal da disciplina.';
$string['sessionstartdate'] = 'Data de início da sessão';
$string['sessionstarttime'] = 'Hora de início da sessão';
$string['sessionvenue'] = 'Local da sessão';
$string['setting:addchangemanageremail'] = 'Pedir aos utilizadores o endereço de e-mail dos seus gestores.';
$string['setting:addchangemanageremail_caption'] = 'E-mail do gestor';
$string['setting:addchangemanageremaildefault'] = 'Pedir aos utilizadores o endereço de e-mail dos seus gestores.';
$string['setting:defaultcancellationinstrmngr'] = 'Mensagem de cancelamento predefinida enviada aos gestores.';
$string['setting:defaultcancellationinstrmngr_caption'] = 'Mensagem de cancelamento (gestores)';
$string['setting:defaultcancellationmessage'] = 'Mensagem de cancelamento predefinida foi enviada para o utilizador.';
$string['setting:defaultcancellationmessage_caption'] = 'Mensagem de cancelamento';
$string['setting:defaultcancellationsubject'] = 'Assunto predefinido para e-mails de cancelamento.';
$string['setting:defaultcancellationsubject_caption'] = 'Assunto do cancelamento';
$string['setting:defaultcancellationsubjectdefault'] = 'Cancelamento de reserva';
$string['setting:defaultconfirmationinstrmngr'] = 'Mensagem de confirmação predefinida enviada aos gestores.';
$string['setting:defaultconfirmationinstrmngr_caption'] = 'Mensagem de confirmação (gestores)';
$string['setting:defaultconfirmationmessage'] = 'Mensagem de confirmação predefinida a enviar aos utilizadores.';
$string['setting:defaultconfirmationmessage_caption'] = 'Mensagem de confirmação';
$string['setting:defaultconfirmationmessagedefault2'] = 'p><b>Obrigado por se inscrever!</b></p>';
$string['setting:defaultconfirmationsubject'] = 'Linha de assunto predefinida para e-mails de confirmação.';
$string['setting:defaultconfirmationsubject_caption'] = 'Assunto da confirmação';
$string['setting:defaultconfirmationsubjectdefault'] = 'Confirmação de reserva na disciplina: [facetofacename], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultremindermessage'] = 'Mensagem de lembrete predefinida a enviar aos utilizadores.';
$string['setting:defaultremindermessage_caption'] = 'Mensagem do lembrete';
$string['setting:defaultremindersubject_caption'] = 'Assunto do lembrete';
$string['setting:defaultrequestmessagedefault'] = 'O seu pedido de inscrição na seguinte disciplina foi enviado ao seu gestor:

Participante:   [firstname] [lastname]
Disciplina:   [facetofacename]
Custo:   [cost]

Duração:   [duration]
Data(s):
[alldates]

Local:   [session:location]
Sítio:   [session:venue]
Sala:   [session:room]';
$string['setting:defaultrequestsubjectdefault'] = 'Pedido de reserva na disciplina: [facetofacename], [starttime]-[finishtime]';
$string['setting:defaultvalue'] = 'Valor predefinido';
$string['setting:defaultwaitlistedmessage'] = 'Mensagem predefinida a enviar aos utilizadores em lista de espera';
$string['setting:defaultwaitlistedmessage_caption'] = 'Mensagem de lista de espera';
$string['setting:enableapprovals'] = 'Se desativada, a opção de adicionar aprovações através da configuração da atividade deixará de estar disponível.';
$string['setting:enableapprovals_caption'] = 'Ativar aprovações do gestor';
$string['setting:fromaddress'] = 'O que aparecerá no campo \'De\' dos lembretes por e-mail enviados por este módulo.';
$string['setting:fromaddress_caption'] = 'Endereço do remetente:';
$string['setting:fromaddressdefault'] = 'moodle@exemplo.com';
$string['setting:hidecost'] = 'Ocultar os campos de código de custo e desconto.';
$string['setting:hidecost_caption'] = 'Ocultar custo e desconto:';
$string['setting:hidediscount'] = 'Ocultar apenas s campos de código do desconto.';
$string['setting:hidediscount_caption'] = 'Ocultar desconto:';
$string['setting:isfilter'] = 'Mostrar como filtro';
$string['setting:limit_candidates'] = 'Limitar candidatos aos utilizadores inscritos na disciplina.';
$string['setting:limit_candidates_caption'] = 'Limitar candidatos';
$string['setting:manageraddressformat_caption'] = 'Sufixo obrigatório:';
$string['setting:manageraddressformatreadable_caption'] = 'Exemplo de formato:';
$string['setting:manageraddressformatreadabledefault'] = 'nome.apelido@empresa.com';
$string['setting:oneemailperday'] = 'Enviar vários e-mails de confirmação para eventos de vários dias.';
$string['setting:oneemailperday_caption'] = 'Uma mensagem por dia:';
$string['setting:possiblevalues'] = 'Lista de valores possíveis';
$string['setting:sessionroles'] = 'Os utilizadores com os papéis selecionadas numa disciplina podem ser monitorizados em cada sessão da atividade.';
$string['setting:sessionroles_caption'] = 'Papéis na sessão:';
$string['setting:showinsummary'] = 'Mostrar nas exportações e listas';
$string['setting:type'] = 'Tipo de cdampo';
$string['shortname'] = '# Nome curto';
$string['shortname_help'] = '**Nome curto** é a descrição da sessão que aparece no calendário do treino quando **Mostrar no calendário** está ativo.';
$string['showbylocation'] = 'Mostrar por local';
$string['showoncalendar'] = 'Configurações do calendário';
$string['showoncalendar_help'] = 'Quando é escolhido **Site**, as sessões da Atividade presencial serão mostradas no calendário do site como um evento global. Todos os utilizadores do site poderão ver estas sessões.

Quando é escolhido **Disciplina**, todas as sessões da Atividade presencial serão mostradas no calendário da disciplina e como evento da disciplina no calendário ao nível do site e visíveis para todos os utilizadores inscritos na disciplina.

Quando é escolhido **Nenhum**, as sessões da Atividade presencial só serão mostradas como eventos do utilizador no calendário do participante confirmado, desde que a opção **Mostrar no calendário do utilizador** esteja selecionada.';
$string['sign-ups'] = 'Inscrições';
$string['signup'] = 'Inscrever';
$string['signupfor'] = 'Inscrição para {$a}';
$string['signupforsession'] = 'Inscrever-se numa das seguintes sessões disponíveis';
$string['signupforthissession'] = 'Inscrever-se nesta sessão de Atividade presencial';
$string['signups'] = 'Inscrições';
$string['signuptype'] = 'Tipo de inscrição';
$string['signuptype_help'] = 'Quando definido como “Única”, o aluno só poderá inscrever-se numa sessão em cada atividade presencial. Quando definido como "Múltipla", um aluno pode inscrever-se em múltiplas sessões por atividade.';
$string['signuptypemismatch'] = 'O tipo de inscrição tem de ser "Múltipla" quando o método de inscrição for por atividade';
$string['single'] = 'Única';
$string['sitenoticesheading'] = 'Avisos de site.';
$string['status'] = 'Estado';
$string['status_approved'] = 'Aprovado';
$string['status_booked'] = 'Reservado';
$string['status_declined'] = 'Rejeitado';
$string['status_fully_attended'] = 'Presente';
$string['status_no_show'] = 'Não mostrar';
$string['status_partially_attended'] = 'Presença parcial';
$string['status_requested'] = 'Requisitada';
$string['status_session_cancelled'] = 'Sessão cancelada';
$string['status_user_cancelled'] = 'Cancelado';
$string['status_waitlisted'] = 'Em lista de espera';
$string['subject'] = 'Alteração da reserva na disciplina {$a->coursename} ({$a->duedate})';
$string['submissions'] = 'Submissões';
$string['submit'] = 'Submeter';
$string['submitted'] = 'Submetido';
$string['summary'] = 'Sumário';
$string['suppressemail'] = 'Não enviar notificação por e-mail';
$string['suppressemail_help'] = 'Ative esta opção se pretender adicionar/remover utilizadores "silenciosamente" de uma sessão da Atividade presencial. Quando ativada, o e-mail de confirmação não é enviado para os utilizadores selecionados.';
$string['takeattendance'] = 'Registar assiduidade';
$string['thirdpartyemailaddress'] = 'Endereços de e-mail de terceiros';
$string['thirdpartyemailaddress_help'] = '**Endereços de e-mail de terceiros** é um campo opcional usado para especificar o endereço de e-mail de um terceiro (exemplo: um instrutor externo) que receberá mensagens de confirmação sempre que um utilizador se inscrever numa sessão.
Ao inserir **Vários endereços de e-mail**, separe cada endereço com uma vírgula. Por exemplo: bob@example.com,joe@example.com';
$string['thirdpartywaitlist'] = 'Notificar terceiros sobre sessões em lista de espera';
$string['thirdpartywaitlist_help'] = 'Quando **Notificar terceiros sobre sessões em lista de espera** está selecionado, os terceiros serão notificados quando um aluno se inscrever em numa sessão em lista de espera. Quando desativado, os terceiros só serão notificados quando um utilizador se inscrever (ou cancelar) numa sessão agendada.';
$string['time'] = 'Horários';
$string['timecancelled'] = 'Cancelamento';
$string['timedue'] = 'Data limite de registo';
$string['timefinish'] = 'Hora de fim';
$string['timefinish_help'] = 'Hora de fim é a hora a que sessão termina.';
$string['timerequested'] = 'Data do pedido';
$string['timesignedup'] = 'Inscrição';
$string['timestart'] = 'Hora de início';
$string['timestart_help'] = 'A hora de início é a hora em que a sessão começa.';
$string['unapprovedrequests'] = 'Pedidos não aprovados';
$string['unknowndate'] = '(data desconhecida)';
$string['unknowntime'] = '(horário desconhecido)';
$string['upcomingsessions'] = 'Próximas sessões';
$string['upcomingsessionslist'] = 'Lista de todas as próximas sessões desta Atividade presencial';
$string['updaterequests'] = 'Atualizar pedidos';
$string['upgradeinfofacetoface'] = '{$a}: Informações sobre atualização da atividade presencial';
$string['upgradeprocessinggrades'] = 'A processar notas da atividade presencial. Pode demorar algum tempo se houver muitas sessões...';
$string['usercalentry'] = 'Mostrar no calendário do utilizador';
$string['usercalentry_help'] = 'Se ativar esta opção, é adicionado um evento de utilizador ao calendário do participante da sessão de Atividade presencial. Quando desativada, isto impede que apareça um evento duplicado no calendário do participante da sessão, quando as configurações do calendário estão definidas como Disciplina ou Site.';
$string['usercancelledon'] = 'Cancelado em {$a}';
$string['userdeletedcancel'] = 'O utilizador foi apagado';
$string['usernotsignedup'] = 'Estado: não inscrito';
$string['usersignedup'] = 'Estado: inscrito';
$string['usersignedupon'] = 'Utilizador inscrito em {$a}';
$string['userwillbewaitlisted'] = 'Esta sessão tem a lotação completa. Ao clicar no botão "Inscrever", será colocado na lista de espera da sessão.';
$string['validation:needatleastonedate'] = 'Tem de fornecer pelo menos uma data ou marcar a sessão como em lista de espera.';
$string['venue'] = 'Local';
$string['venue_help'] = '**Local** é o edifício em que a sessão será realizada.

O **Local** aparece na página "Inscrição", na página "Ver todas as sessões" e em todas as notificações por e-mail.';
$string['viewallsessions'] = 'Ver todas as sessões';
$string['viewsubmissions'] = 'Visualizar submissões';
$string['wait-list'] = 'Lista de espera';
$string['wait-listed'] = 'Em lista de espera';
$string['waitlistedmessage'] = 'Mensagem de lista de espera';
$string['waitlistedmessage_help'] = 'Essa mensagem é enviada sempre que os utilizadores se inscrevem na lista de espera de uma sessão.';
$string['waitliststatus'] = 'Está na lista de espera da seguinte sessão';
$string['xhours'] = '{$a} horas';
$string['xminutes'] = '{$a} minutos';
$string['youarebooked'] = 'Efetuou reserva para a sessão seguinte';
$string['youremailaddress'] = 'O teu e-mail';
