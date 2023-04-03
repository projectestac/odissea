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
 * Strings for component 'organizer', language 'pt', version '3.11'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Data limite das inscrições';
$string['absolutedeadline_help'] = 'Marque esta opção para definir o momento após o qual não é permitido mais ações aos alunos.';
$string['actionlink_delete'] = 'apagar';
$string['actionlink_edit'] = 'editar';
$string['actionlink_eval'] = 'avaliar';
$string['actionlink_print'] = 'imprimir';
$string['actions'] = 'Ação';
$string['actions_help'] = 'Ação a executar.';
$string['addappointment'] = 'Adicionar compromisso';
$string['addslots_placesinfo'] = 'Esta ação irá criar {$a->numplaces} novos lugares possíveis, o que permitirá um total de {$a->totalplaces} lugares possíveis para {$a->numstudents} alunos.';
$string['addslots_placesinfo_group'] = 'Esta ação irá criar {$a->numplaces} novos lugares possíveis, o que permitirá um total de {$a->totalplaces} lugares possíveis para {$a->numgroups} grupos.';
$string['allowcreationofpasttimeslots'] = 'Criação de vagas no passado';
$string['allowedprofilefieldsprint'] = 'Campos de perfil do uilizador permitidos';
$string['allowedprofilefieldsprint2'] = 'Campos de perfil do utilizador permitidos para impressão de vagas de organizador único';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes do organizador e o formulário de inscrição estarão disponíveis a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Iniciar inscrições em';
$string['allowsubmissionsfromdate_help'] = 'Marque esta opção se pretende apenas disponibilizar este organizador aos alunos após um determinado momento.';
$string['allowsubmissionsfromdatesummary'] = 'Este organizador aceitará inscrições em <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Permitir registos até';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativar esta opção, a descrição acima só será visível para os alunos na data de "Iniciar inscrições em".';
$string['applicant'] = 'Pessoa que inscreveu o grupo';
$string['appointment_reminder_student:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, tem um compromisso {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.

Sistema de mensagens Moodle';
$string['appointment_reminder_student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, tem um compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.

Sistema de mensagens Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'Tem um compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso de grupo';
$string['appointment_reminder_student:smallmessage'] = 'Tem um compromisso {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Olá {$a->receivername}!

Amanhã tem os seguintes compromissos:

{$a->digest}

Sistema de Mensagens do Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Recebeu uma mensagem com o resumo dos seus compromissos para amanhã.';
$string['appointment_reminder_teacher:digest:subject'] = 'Resumo dos compromissos';
$string['appointment_reminder_teacher:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, tem um compromisso com alunos {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Olá {$a->receivername}!

Amanhã tem os seguintes compromissos:

{$a->digest}

Sistema de Mensagens do Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Recebeu uma mensagem com o resumo dos seus compromissos para amanhã.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Resumo dos compromissos';
$string['appointment_reminder_teacher:smallmessage'] = 'Tem um compromisso com alunos {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso';
$string['appointmentcomments'] = 'Comentários';
$string['appointmentcomments_help'] = 'Informações adicionais sobre os compromissos podem ser adicionadas aqui.';
$string['appointmentdatetime'] = 'Data & hora';
$string['assign'] = 'Atribuir';
$string['assign_notify_student:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi lhe atribuído por {$a->sendername}.

Professor: {$a->slot_teacher}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_student:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi atribuído ao seu grupo {$a->groupname} por {$a->sendername}.

Professor: {$a->slot_teacher}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_student:group:smallmessage'] = 'Um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi atribuído ao seu grupo {$a->groupname} por {$a->sendername}.';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído pelo professor';
$string['assign_notify_student:smallmessage'] = 'Um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi lhe atribuído por {$a->sendername}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído pelo professor';
$string['assign_notify_teacher:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, um compromisso com {$a->participantname}, {$a->date} às {$a->time}, foi lhe atribuído por {$a->sendername}.

Participante: {$a->participantname}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_teacher:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, um compromisso com o grupo {$a->groupname}, {$a->date} às {$a->time}, foi lhe atribuído por {$a->sendername}.

Grupo: {$a->groupname}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_teacher:group:smallmessage'] = 'Um compromisso com o grupo {$a->groupname} {$a->date} às {$a->time} foi lhe atribuído por {$a->sendername}.';
$string['assign_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído';
$string['assign_notify_teacher:smallmessage'] = 'Um compromisso com {$a->groupname} {$a->date} às {$a->time} foi lhe atribuído por {$a->sendername}.';
$string['assign_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído';
$string['assign_title'] = 'Atribuir compromisso';
$string['assignsuccess'] = 'A vaga foi atribuída com sucesso e os participantes foram notificados.';
$string['assignsuccessnotsent'] = 'A vaga foi atribuída com sucesso, MAS o(s) participante(s) NÃO foi notificado(s).';
$string['atlocation'] = 'em';
$string['attended'] = 'Participou';
$string['auth'] = 'Método de autenticação';
$string['availability'] = 'Disponibilidade';
$string['availablefrom'] = 'Ações possíveis';
$string['availablefrom_help'] = 'Defina o período de tempo dentro do qual os alunos terão permissão para se inscreverem nestes intervalos de tempo. Alternativamente, marque "A partir de agora" para ativar a inscrição a partir deste instante.';
$string['availablegrouplist'] = 'Grupos disponíveis';
$string['availableslotsfor'] = 'Vagas disponíveis para';
$string['back'] = 'Voltar';
$string['btn_add'] = 'Adicionar novas vagas';
$string['btn_assign'] = 'Atribuir vaga';
$string['btn_comment'] = 'Editar comentário';
$string['btn_delete'] = 'Apagar vagas selecionadas';
$string['btn_deletesingle'] = 'Apagar vaga selecionada';
$string['btn_edit'] = 'Editar vagas selecionadas';
$string['btn_editsingle'] = 'Edita vagas selecionada';
$string['btn_eval'] = 'Avaliar vagas selecionadas';
$string['btn_eval_short'] = 'Avaliar';
$string['btn_evalsingle'] = 'Avaliar vaga selecionada';
$string['btn_print'] = 'Imprimir vagas selecionadas';
$string['btn_printsingle'] = 'Imprimir vaga selecionada';
$string['btn_queue'] = 'Fila de espera';
$string['btn_reeval'] = 'Reavaliar';
$string['btn_register'] = 'Inscrever';
$string['btn_remind'] = 'Enviar lembrete';
$string['btn_reregister'] = 'Reinscrever';
$string['btn_save'] = 'Guardar comentário';
$string['btn_send'] = 'Enviar';
$string['btn_sendall'] = 'Enviar lembretes para todos os alunos sem compromisso';
$string['btn_start'] = 'Iniciar';
$string['btn_unqueue'] = 'Remover da fila de espera';
$string['btn_unregister'] = 'Cancelar inscrição';
$string['calendarsettings'] = 'Configurações do calendário';
$string['can_reregister'] = 'Pode inscrever-se novamente noutro compromisso.';
$string['cannot_eval'] = 'Não pode avaliar, o aluno tem';
$string['changegradewarning'] = 'Este organizador avaliou compromissos e a alteração das configurações da nota não irá recalcular automaticamente as notas já existentes. Tem de reavaliar todos os compromissos existentes, se desejar alterar nota.';
$string['collision'] = 'Aviso! Foi detetado um conflito com o(s) seguinte(s) evento(s) e/ou vaga(s):';
$string['configabsolutedeadline'] = 'O deslocamento predefinido do seletor de data e hora a partir da data e hora atuais.';
$string['configahead'] = 'antes';
$string['configallowcreationofpasttimeslots'] = 'É permitido criar vagas para horários já passados?';
$string['configday'] = 'dia';
$string['configdays'] = 'dia';
$string['configdigest'] = 'Enviar ao professor um resumo dos compromissos do dia seguinte (hora de envio).';
$string['configdigest_label'] = 'Enviar resumo dos compromissos aos professores';
$string['configdontsend'] = 'Não enviar';
$string['configemailteachers'] = 'Enviar notificações por e-mail aos professores sobre alterações do estado da inscrição';
$string['configemailteachers_label'] = 'Enviar notificações por e-mail aos professores';
$string['confighour'] = 'hora';
$string['confighours'] = 'horas';
$string['configintro'] = 'Os valores aqui indicados definem os valores predefinidos que serão usados no formulário de configurações quando criar um novo organizador.';
$string['configlocationlink'] = 'A hiperligação para um mecanismo de pesquisa usado para mostrar o caminho para a localização. Digite $searchstring no URL para onde vai a consulta.';
$string['configlocationslist'] = 'Localização do campo de preenchimento automático';
$string['configlocationslist_desc'] = 'Cada localização deve ser inserida numa linha separada!';
$string['configmaximumgrade'] = 'Define o valor predefinido no campo da nota ao criar um novo organizador. É a nota máxima que pode atribuir a um aluno neste compromisso.';
$string['configminute'] = 'minuto';
$string['configminutes'] = 'minutos';
$string['configmonth'] = 'mês';
$string['configmonths'] = 'meses';
$string['confignever'] = 'Nenhum';
$string['configrelativedeadline'] = 'O intervalo de tempo predefinido antes de um compromisso para notificar os participantes.';
$string['configrequiremodintro'] = 'Desative esta opção se não pretende forçar os utilizadores a inserir a descrição de cada atividade.';
$string['configsingleslotprintfield'] = 'campo de utilizador a ser impresso quando uma única vaga é impressa';
$string['configweek'] = 'semana';
$string['configweeks'] = 'semanas';
$string['configyear'] = 'ano';
$string['confirm_conflicts'] = 'Tem a certeza de que pretende ignorar os conflitos e criar os intervalos de tempo?';
$string['confirm_delete'] = 'Apagar';
$string['confirm_organizer_remind_all'] = 'Enviar';
$string['create'] = 'Criar';
$string['created'] = 'Criado';
$string['createsubmit'] = 'Criar intervalos de tempo';
$string['crontaskname'] = 'Tarefa cron do Organizador';
$string['datapreviewtitle'] = 'Visualização de dados';
$string['datapreviewtitle_help'] = 'Clique em [+] ou [-] para mostrar ou ocultar colunas.';
$string['datetemplate'] = '%d.%m.%Y';
$string['datetime'] = 'Datahora';
$string['datetime_help'] = 'Data & hora da vaga';
$string['day'] = 'dia';
$string['day_0'] = 'Segunda';
$string['day_1'] = 'Terça';
$string['day_2'] = 'Quarta';
$string['day_3'] = 'Quinta';
$string['day_4'] = 'Sexta';
$string['day_5'] = 'Sábado';
$string['day_6'] = 'Domingo';
$string['day_pl'] = 'dias';
$string['dbid'] = 'ID da BD';
$string['defaultsingleslotprintfields'] = 'Campos de perfil do utilizador predefinidos de vaga de impressão única';
$string['delete_organizer_grades'] = 'A apagar avaliação de todos os organizadores';
$string['deleteheader'] = 'A apagar as seguintes vagas:';
$string['deletekeep'] = 'Os seguintes compromissos serão cancelados. Os alunos inscritos serão notificados e vagas serão apagadas:';
$string['deletenoslots'] = 'Não existem vagas apagáveis selecionadas';
$string['deleteorganizergrades'] = 'Apagar notas da pauta';
$string['details'] = 'Detalhes do estado';
$string['details_help'] = 'Estado atual desta vaga';
$string['downloadfile'] = 'Descarregar ficheiro';
$string['duedate'] = 'Data de expiração';
$string['duedateerror'] = 'O data limite absoluta não pode ser definida antes da data de disponibilidade.';
$string['duration'] = 'Duração';
$string['duration_help'] = 'Define a duração dos compromissos. Todos os períodos de tempo definidos serão divididos em intervalos de duração aqui definida. Qualquer tempo restante permanecerá não utilizado (ou seja, se o período de tempo for de 40 minuto e a duração estiver definida para 15 minuto, haverá 2 intervalos no total e 10 minutos não utilizados).';
$string['edit_notify_student:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, os detalhes do compromisso {$a->sendername} de {$a->date} às {$a->time} foram alterados.

Professor: {$a->slot_teacher}
Localização: {$a->slot_location}
Máx. participantes: {$a->slot_maxparticipants}
Comentários:
{$a->slot_comments}

Sistema de mensagens Moodle';
$string['edit_notify_student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, os detalhes do compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} foram alterados.

Professor: {$a->slot_teacher}
Localização: {$a->slot_location}
Máx. participantes: {$a->slot_maxparticipants}
Comentários:
{$a->slot_comments}

Sistema de mensagens Moodle';
$string['edit_notify_student:group:smallmessage'] = 'Os detalhes do compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} foram alterados.';
$string['edit_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalhes do compromisso alterados';
$string['edit_notify_student:smallmessage'] = 'Os detalhes do compromisso {$a->sendername} de {$a->date} às {$a->time} foram alterados.';
$string['edit_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalhes do compromisso alterados';
$string['edit_notify_teacher:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, os detalhes da vaga de {$a->date} às {$a->time} foram alterados por {$a->sendername}.

Professor: {$a->slot_teacher}
Local: {$a->slot_location}
Max. participantes: {$a->slot_maxparticipants}
Comentários:
{$a->slot_comments}

Sistema de Mensagens do Moodle';
$string['edit_notify_teacher:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, os detalhes da vaga de {$a->date} às {$a->time} foram alterados por {$a->sendername}.

Professor: {$a->slot_teacher}
Local: {$a->slot_location}
Max. participantes: {$a->slot_maxparticipants}
Comentários:
{$a->slot_comments}

Sistema de Mensagens do Moodle';
$string['edit_notify_teacher:group:smallmessage'] = 'Os detalhes da vaga de {$a->date} às {$a->time} foram alterados por {$a->sendername}.';
$string['edit_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalhes do compromisso alterados';
$string['edit_notify_teacher:smallmessage'] = 'Os detalhes da vaga de {$a->date} às {$a->time} foram alterados por {$a->sendername}.';
$string['edit_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalhes do compromisso alterados';
$string['edit_submit'] = 'Confirmar alterações';
$string['emailteachers'] = 'Enviar notificações por e-mail aos professores';
$string['emailteachers_help'] = 'As notificações aos professores quando um aluno se inscreve pela primeira vez num intervalo de tempo são normalmente suprimidas para evitar o envio de SPAM. Marque esta opção para permitir que o organizador envie estas notificações por e-mail aos professores. Tenha em atenção que as notificações de cancelamento da inscrição e alteração de vagas são sempre enviadas.';
$string['enableprintslotuserfields'] = 'Permitir alteração nos campos de perfil do utilizador';
$string['enableprintslotuserfieldsdesc'] = 'Controla se os professores têm permissão para alterar os campos de perfil do utilizador predefinidos selecionados abaixo';
$string['err_availablefromearly'] = 'Esta data não pode ser definida depois da data de início!';
$string['err_availablefromlate'] = 'Esta data não pode ser definida mais tarde do que a data de fim!';
$string['err_availablepastdeadline'] = 'Esta vaga não pode ser disponibilizada após o prazo limite da agenda ({$a->deadline})!';
$string['err_collision'] = 'Este período está em colisão com outros períodos:';
$string['err_comments'] = 'Tem de indicar a descrição!';
$string['err_enddate'] = 'A data de fim não pode ser definida antes da data de início!';
$string['err_fromto'] = 'A hora de fim não pode ser definida antes da hora de início!';
$string['err_fullminute'] = 'A duração tem que ser um minuto completo.';
$string['err_fullminutegap'] = 'O intervalo tem de ser um minuto completo.';
$string['err_isgrouporganizer_app'] = 'Não é possível alterar o modo de grupo, pois já existem compromissos agendados neste organizador!';
$string['err_location'] = 'Tem de indicar um local!';
$string['err_noslots'] = 'Nenhuma vaga foi selecionada!';
$string['err_posint'] = 'Tem de inserir um número inteiro!';
$string['err_startdate'] = 'A data de início não pode ser definida antes da data de hoje ({$a->now})!';
$string['eval_attended'] = 'Participou';
$string['eval_feedback'] = 'Feedback';
$string['eval_grade'] = 'Avaliar';
$string['eval_header'] = 'Vagas selecionadas';
$string['eval_no_participants'] = 'Esta vaga não teve participantes';
$string['eval_not_occured'] = 'Esta vaga ainda não ocorreu';
$string['eval_notify_newappointment:student:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o seu compromisso {$a->sendername} de {$a->date} às {$a->time} em {$a->location} foi avaliado.

Os professores da disciplina permitem que volte a registar-se novamente em qualquer vaga disponível no organizador {$a->coursefullname}.

Sistema de mensagens Moodle';
$string['eval_notify_newappointment:student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o seu compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} em {$a->location} foi avaliado.

Os professores da disciplina permitem que volte a registar-se novamente em qualquer vaga disponível no organizador {$a->coursefullname}.

Sistema de mensagens Moodle';
$string['eval_notify_newappointment:student:group:smallmessage'] = 'O seu compromisso de grupo de {$a->date} às {$a->time} em {$a->location} foi avaliado.';
$string['eval_notify_newappointment:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso avaliado';
$string['eval_notify_newappointment:student:smallmessage'] = 'O seu compromisso de {$a->date} às {$a->time} em {$a->location} foi avaliado.';
$string['eval_notify_newappointment:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso avaliado';
$string['eval_notify_student:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o seu compromisso {$a->sendername} de {$a->date} às {$a->time} em {$a->location} foi avaliado.

Sistema de mensagens Moodle';
$string['eval_notify_student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o seu compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} em {$a->location} foi avaliado.

Sistema de mensagens Moodle';
$string['eval_notify_student:group:smallmessage'] = 'O seu compromisso de {$a->date} às {$a->time} em {$a->location} foi avaliado.';
$string['eval_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso avaliado';
$string['eval_notify_student:smallmessage'] = 'O seu compromisso de {$a->date} às {$a->time} em {$a->location} foi avaliado.';
$string['eval_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso avaliado';
$string['evaluate'] = 'Avaliar';
$string['event'] = 'Evento no calendário';
$string['eventappointmentadded'] = 'Aluno inscreveu-se numa vaga.';
$string['eventappointmentassigned'] = 'O compromisso foi atribuído pelo professor.';
$string['eventappointmentcommented'] = 'O compromisso foi comentado.';
$string['eventappointmentevaluated'] = 'O compromisso foi avaliado.';
$string['eventappointmentlistprinted'] = 'A lista do compromisso foi impressa.';
$string['eventappointmentremindersent'] = 'Lembrete de compromisso enviado.';
$string['eventappointmentremoved'] = 'Aluno cancelou inscrição numa vaga.';
$string['eventappwith:group'] = 'Compromisso para grupos';
$string['eventappwith:single'] = 'Compromisso';
$string['eventnoparticipants'] = 'Sem participantes';
$string['eventqueueadded'] = 'Adicionado à lista de espera';
$string['eventqueueremoved'] = 'Removido da lista de espera';
$string['eventregistrationsviewed'] = 'Separador das inscrições visualizado';
$string['eventslotcreated'] = 'Novas vagas criadas.';
$string['eventslotdeleted'] = 'Vaga apagada.';
$string['eventslotupdated'] = 'Vaga atualizada.';
$string['eventslotviewed'] = 'Vaga visualizada.';
$string['eventteacheranonymous'] = 'um professor anónimo';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />Local: {$a->location}<br />';
$string['eventtemplatecomment'] = 'Comentário:<br />{$a}<br />';
$string['eventtemplatewithoutlinks'] = '{$a->coursename} / {$a->organizername}: {$a->appwith} {$a->with} {$a->participants}<br />Localização: {$a->location}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'com';
$string['eventwithout'] = 'com';
$string['exportsettings'] = 'Configurações da exportação';
$string['filtertable'] = '\'A pesquisar esta tabela\'';
$string['filtertable_help'] = 'Pesquisar estas vagas por strings mútuas aqui.';
$string['finalgrade'] = 'Este valor já foi definido na pauta e não pode ser alterado no organizador.';
$string['font_large'] = 'largo';
$string['font_medium'] = 'médio';
$string['font_small'] = 'pequeno';
$string['format'] = 'Formato';
$string['format_csv_comma'] = 'CSV (;)';
$string['format_csv_tab'] = 'CSV (sep)';
$string['format_ods'] = 'ODS';
$string['format_pdf'] = 'PDF';
$string['format_xls'] = 'XLS';
$string['format_xlsx'] = 'XLSX';
$string['fulldatelongtemplate'] = '%A %d. %B %Y';
$string['fulldatetemplate'] = '%a %d.%m.%Y';
$string['fulldatetimelongtemplate'] = '%A %d. %B %Y %H:%M';
$string['fulldatetimetemplate'] = '%a %d.%m.%Y %H:%M';
$string['fullname_template'] = '{$a->firstname} {$a->lastname}';
$string['gap'] = 'Intervalo';
$string['gap_help'] = 'Define o intervalo entre dois compromissos.';
$string['grade'] = 'Nota máxima';
$string['grade_help'] = 'Define o número máximo de pontos que podem ser atribuídos a qualquer compromisso que possa ser classificado.';
$string['group_registration_notify:student:queue:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} adicionou o seu grupo {$a->groupname} à lista de espera da vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:queue:group:smallmessage'] = '{$a->sendername} adicionou o seu grupo {$a->groupname} à lista de espera da vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gupo adicionado à lista de espera';
$string['group_registration_notify:student:register:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} inscreveu o seu grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:register:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} inscreveu o seu grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:register:group:smallmessage'] = '{$a->sendername} inscreveu o seu grupo {$a->groupname} na vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo inscrito';
$string['group_registration_notify:student:register:smallmessage'] = '{$a->sendername} inscreveu o seu grupo {$a->groupname} na vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo inscrito';
$string['group_registration_notify:student:reregister:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} reinscreveu o seu grupo {$a->groupname} numa nova vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} reinscreveu o seu grupo {$a->groupname} numa nova vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:reregister:group:smallmessage'] = '{$a->sendername} reinscreveu o seu grupo {$a->groupname} numa nova vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo reinscrito';
$string['group_registration_notify:student:reregister:smallmessage'] = '{$a->sendername} reinscreveu o seu grupo {$a->groupname} numa nova vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo reinscrito';
$string['group_registration_notify:student:unqueue:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} cancelou a inscrição do seu grupo {$a->groupname} da lista de espera da vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = '{$a->sendername} retirou o seu grupo {$a->groupname} da lista de espera da vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo removido da lista de espera';
$string['group_registration_notify:student:unregister:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} cancelou a inscrição do seu grupo {$a->groupname} da vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'Olá {$a->receivername}!

No contexto da disciplina {$a->courseid} {$a->coursefullname}, {$a->sendername} cancelou a inscrição do seu grupo {$a->groupname} da vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['group_registration_notify:student:unregister:group:smallmessage'] = '{$a->sendername} cancelou a inscrição do seu grupo {$a->groupname} da vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo não inscrito';
$string['group_registration_notify:student:unregister:smallmessage'] = '{$a->sendername} cancelou a inscrição do seu grupo {$a->groupname} da vaga de {$a->date} às {$a->time}.';
$string['group_registration_notify:student:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Inscrição do grupo cancelada';
$string['group_slot_available'] = 'Vaga disponível';
$string['group_slot_full'] = 'Vaga ocupada';
$string['groupmodeexistingcoursegroups'] = 'Usar grupos da disciplina existentes';
$string['groupmodenogroups'] = 'Nenhuma marcação de grupo';
$string['groupmodeslotgroups'] = 'Criação de grupo por vaga vazia';
$string['groupmodeslotgroupsappointment'] = 'Criação de grupo por vaga reservada';
$string['groupoptions'] = 'Configurações do grupo';
$string['grouporganizer_desc_hasgroup'] = 'Este organizador é para grupos. Ao clicar no botão de inscrição, todos os membros do seu grupo {$a->groupname} ficarão inscritos nesta vaga. Todos os membros do grupo podem mudar e comentar a inscrição.';
$string['grouppicker'] = 'Escolher grupo';
$string['groupwarning'] = 'Verifique abaixo as opções do grupo!';
$string['headerfooter'] = 'Imprimir cabeçalho/rodapé';
$string['headerfooter_help'] = 'Se selecionado, imprime o cabeçalho e o rodapé';
$string['hidecalendar'] = 'Ocultar calendário';
$string['hidecalendar_help'] = 'Marque esta opção para ocultar o calendário neste organizador';
$string['hour'] = 'hora';
$string['hour_pl'] = 'horas';
$string['id'] = 'ID';
$string['img_title_due'] = 'A vaga expirou';
$string['img_title_evaluated'] = 'A vaga está avaliada';
$string['img_title_no_participants'] = 'A vaga não teve participantes';
$string['img_title_past_deadline'] = 'A vaga já passou do prazo';
$string['img_title_pending'] = 'Vaga pendente de avaliação';
$string['includetraineringroups'] = 'Incluir o instrutor em grupos';
$string['includetraineringroups_help'] = 'Se marcar a caixa de seleção, além dos participantes da vaga, também os seus instrutores estão incluídos nos grupos.';
$string['infobox_app_countdown'] = 'Tempo até ao compromisso: {$a->days} dia(s), {$a->hours} hora(s), {$a->minutes} minuto(s), {$a->seconds} segundo(s)';
$string['infobox_app_occured'] = 'O compromisso já ocorreu.';
$string['infobox_deadline_countdown'] = 'Tempo disponível até à data limite: {$a->days} dia(s), {$a->hours} hora(s), {$a->minutes} minuto(s), {$a->seconds} segundo(s)';
$string['infobox_deadline_passed'] = 'O prazo de inscrição já terminou. Já não pode alterar as inscrições.';
$string['infobox_deadline_passed_slot'] = 'xxx vagas não puderam ser criados porque o prazo de registo já terminou.';
$string['infobox_deadlines_title'] = 'Prazos limite';
$string['infobox_description_title'] = 'Descrição do organizador';
$string['infobox_feedback_title'] = 'Feedback';
$string['infobox_group'] = 'O meu grupo: {$a->groupname}';
$string['infobox_messages_title'] = 'Mensagens do sistema';
$string['infobox_messaging_title'] = '';
$string['infobox_mycomments_title'] = 'Meus comentários';
$string['infobox_myslot_noslot'] = 'De momento não está inscrito em nenhuma vaga.';
$string['infobox_myslot_title'] = 'As minhas inscrições em vagas';
$string['infobox_organizer_expired'] = 'Este organizador expirou {$a->date} às {$a->time}';
$string['infobox_organizer_expires'] = 'Este organizador irá expirar {$a->date} às {$a->time}';
$string['infobox_organizer_never_expires'] = 'Este organizador não expira.';
$string['infobox_showfreeslots'] = 'Vagas livres';
$string['infobox_showhiddenslots'] = 'Vagas ocultas';
$string['infobox_showmyslotsonly'] = 'As minhas vagas';
$string['infobox_showregistrationsonly'] = 'Vagas reservadas';
$string['infobox_showslots'] = 'Também vagas passadas';
$string['infobox_slotoverview_title'] = 'Visão global da vaga';
$string['infobox_slotsviewoptions'] = 'Opções especiais do filtro';
$string['infobox_slotsviewoptions_help'] = 'Estas opções do filtro são combinadas por conjunções AND!';
$string['infobox_title'] = 'Caixa de informação';
$string['introeditor_error'] = 'Tem de indicar uma descrição do organizador!';
$string['invalidgrouping'] = 'Tem de selecionar um agrupamento válido!';
$string['inwaitingqueue'] = 'Fila de espera';
$string['isgrouporganizer'] = 'Compromisso para grupos';
$string['isgrouporganizer_help'] = 'Marque esta opção se pretender que este Organizador lide com grupos em vez de utilizadores individuais.
"Usar grupos existentes": um único membro do grupo reserva uma vaga para o grupo.
"Criação de grupo por vaga vazia": É criado um grupo da disciplina para  cada nova vaga.
"Criação de grupo por vaga reservada": É criado um grupo da disciplina para cada vaga reservada.';
$string['location'] = 'Local';
$string['location_help'] = 'O local onde a vaga ocorre.';
$string['locationlink'] = 'URL para o local';
$string['locationlink_help'] = 'Digite aqui o endereço completo do site que pretende que a hiperligação se refira. Este site deve, pelo menos, conter informações sobre como chegar ao local. Digite o endereço completo (incluindo http://)';
$string['locationlinkenable'] = 'Auto ligação a informação do local';
$string['locationmandatory'] = 'Obrigatório indicar localização da vaga';
$string['locationsettings'] = 'Configurações da localização da vaga';
$string['maillink'] = 'O organizador está disponível <a href="{$a}">aqui</a>.';
$string['maxparticipants'] = 'Máx. participantes';
$string['maxparticipants_help'] = 'Define o número máximo de alunos que podem inscrever-se nestes intervalos de tempo. No caso de ser um organizador para grupos, este número está sempre limitado a um.';
$string['message_autogenerated2'] = 'Mensagem gerada automaticamente';
$string['message_custommessage'] = 'Mensagem personalizada';
$string['message_custommessage_help'] = 'Use este campo para inserir um texto pessoal na mensagem gerada automaticamente.';
$string['message_error_groupsynchronization'] = 'Falha na sincronização da vaga de grupo!';
$string['message_error_noactionchosen'] = 'Escolha uma ação antes de pressionar o botão Iniciar.';
$string['message_error_slot_full_group'] = 'Este intervalo de tempo já está ocupado!';
$string['message_error_slot_full_single'] = 'Este intervalo de tempo não tem lugares vazios!';
$string['message_error_unknown_unqueue'] = 'A sua entrada na lista de espera não pôde ser removida! Erro desconhecido.';
$string['message_error_unknown_unregister'] = 'A sua inscrição não pode ser removida! Erro desconhecido.';
$string['message_info_reminders_sent_pl'] = 'Foram enviados {$a->count} lembretes.';
$string['message_info_reminders_sent_sg'] = 'Foi enviado {$a->count} lembrete.';
$string['message_info_slots_added_pl'] = 'Foram adicionadas {$a->count} vagas.';
$string['message_info_slots_added_sg'] = 'Foi adicionada {$a->count} vaga.';
$string['message_warning_no_slots_added'] = 'Não foram adicionadas novas vagas!';
$string['message_warning_no_slots_selected'] = 'Primeiro tem de selecionar, pelo menos, uma vaga!';
$string['message_warning_no_visible_slots_selected'] = 'Primeiro tem de selecionar, pelo menos, uma vaga VISÍVEL!';
$string['messageprovider:appointment_reminder_student'] = 'Lembrete do compromisso do organizador';
$string['messageprovider:appointment_reminder_teacher'] = 'Lembrete de compromisso do organizador (Professor)';
$string['messageprovider:assign_notify_student'] = 'Atribuição pelo professor no organizador';
$string['messageprovider:assign_notify_teacher'] = 'Atribuição no organizador';
$string['messageprovider:edit_notify_student'] = 'Alterações do organizador';
$string['messageprovider:edit_notify_teacher'] = 'Alterações do organizador (Professor)';
$string['messageprovider:eval_notify_student'] = 'Notificação de avaliação do organizador';
$string['messageprovider:group_registration_notify_student'] = 'Notificação de inscrição do grupo no organizador';
$string['messageprovider:manual_reminder_student'] = 'Lembrete de compromisso manual do organizador';
$string['messageprovider:register_notify_teacher'] = 'Notificação de inscrição do organizador';
$string['messageprovider:register_notify_teacher_queue'] = 'Notificação de colocação em fila de espera do organizador';
$string['messageprovider:register_notify_teacher_register'] = 'Notificação de inscrição do organizador';
$string['messageprovider:register_notify_teacher_reregister'] = 'Notificação de reinscrição do organizador';
$string['messageprovider:register_notify_teacher_unqueue'] = 'Notificação de saída da fila de espera do organizador';
$string['messageprovider:register_notify_teacher_unregister'] = 'Notificação de cancelamento do organizador';
$string['messageprovider:register_promotion_student'] = 'Organizador promovido da notificação de fila';
$string['messageprovider:register_reminder_student'] = 'Notificação de inscrição do organizador';
$string['messageprovider:slotdeleted_notify_student'] = 'Vagas do organizador canceladas';
$string['messageprovider:test'] = 'Mensagem de teste do organizador';
$string['messages_all'] = 'Inscrições, reinscrições e cancelamentos';
$string['messages_none'] = 'Nenhuma notificação da inscrição';
$string['messages_re_unreg'] = 'Apenas reinscrições e cancelamentos';
$string['min'] = 'minuto';
$string['min_pl'] = 'minutos';
$string['modformwarningplural'] = 'Estes campos não podem ser editados porque já existem compromissos neste organizador!';
$string['modformwarningsingular'] = 'Este campo não pode ser editado porque já existem compromissos neste organizador!';
$string['modulename'] = 'Organizador';
$string['modulename_help'] = 'Os organizadores permitem que os professores façam marcações com os alunos criando intervalos de tempo nos quais os alunos podem-se registar.';
$string['modulenameplural'] = 'Organizadores';
$string['multimember'] = 'Os utilizadores não podem pertencer a vários grupos dentro do mesmo agrupamento!';
$string['multimemberspecific'] = 'O utilizador{$a->username} {$a->idnumber} está inscrito em mais do que um grupo! ({$a->groups})';
$string['multipleappointmentenddate'] = 'Data de fim';
$string['multipleappointmentstartdate'] = 'Data de início';
$string['mymoodle_app_slot'] = 'Compromisso de {$a->date} às {$a->time}';
$string['mymoodle_attended'] = '{$a->attended}/{$a->total} alunos concluíram um compromisso';
$string['mymoodle_attended_group'] = '{$a->attended}/{$a->total} grupos concluíram um compromisso';
$string['mymoodle_attended_group_short'] = '{$a->attended}/{$a->total} grupos concluíram';
$string['mymoodle_attended_short'] = '{$a->attended}/{$a->total} alunos concluíram';
$string['mymoodle_completed_app'] = 'Completou o compromisso de {$a->date} às {$a->time}';
$string['mymoodle_completed_app_group'] = 'O seu grupo {$a->groupname} participou do compromisso de {$a->date} às {$a->time}';
$string['mymoodle_missed_app'] = 'Não participou do compromisso de {$a->date} às {$a->time}';
$string['mymoodle_missed_app_group'] = 'O seu grupo {$a->groupname} não participou do compromisso de {$a->date} às {$a->time}';
$string['mymoodle_next_slot'] = 'Nova vaga para {$a->date} às {$a->time}';
$string['mymoodle_no_reg_slot'] = 'Ainda não se inscreveu numa vaga';
$string['mymoodle_no_reg_slot_group'] = 'O seu grupo {$a->groupname} ainda não está inscrito num intervalo de tempo';
$string['mymoodle_no_slots'] = 'Sem vagas de imediato';
$string['mymoodle_organizer_expired'] = 'Este organizador expirou {$a->date} às {$a->time}. Já não pode mais usá-lo.';
$string['mymoodle_organizer_expires'] = 'Este organizador expira {$a->date} às {$a->time}';
$string['mymoodle_pending_app'] = 'O seu compromisso está pendente de avaliação';
$string['mymoodle_pending_app_group'] = 'O compromisso do seu grupo {$a->groupname} está pendente de avaliação';
$string['mymoodle_reg_slot'] = 'Já está inscrito num intervalo de tempo';
$string['mymoodle_reg_slot_group'] = 'O seu grupo {$a->groupname} já está inscrito num intervalo de tempo';
$string['mymoodle_registered'] = '{$a->registered}/{$a->total} alunos inscritos num compromisso';
$string['mymoodle_registered_group'] = '{$a->registered}/{$a->total} grupos inscritos num compromisso';
$string['mymoodle_registered_group_short'] = '{$a->registered}/{$a->total} grupos inscritos';
$string['mymoodle_registered_short'] = '$a->registered}/{$a->total} alunos inscritos';
$string['mymoodle_upcoming_app'] = 'O compromisso irá ocorrer {$a->date} às {$a->time} em {$a->location}';
$string['mymoodle_upcoming_app_group'] = 'O compromisso do seu grupo {$a->groupname} será {$a->date} às {$a->time} em {$a->location}';
$string['newslot'] = 'Addicionar mais vagas';
$string['no_due_my_slots'] = 'Todos os seus intervalos de tempo neste organizador expiraram e/ou estão ocultos';
$string['no_due_slots'] = 'Todos os intervalos de tempo criados neste organizador expiraram';
$string['no_my_slots'] = 'Ainda não criou vagas neste organizador';
$string['no_slots'] = 'Não existem intervalos de tempo criados neste organizador';
$string['no_slots_defined'] = 'De momento, não existem vagas de compromissos disponíveis.';
$string['no_slots_defined_teacher'] = 'De momento, não existem vagas de compromissos. Clique <a href="{$a->link}">aqui</a> para criar algumas.';
$string['nocalendareventslotcreation'] = 'Nenhum evento de calendário para vagas vazias';
$string['nocalendareventslotcreation_help'] = 'Se ativar esta opção, nenhum evento será criado no calendário ao criar vagas. Apenas as marcações criarão eventos de calendário referente à vaga.';
$string['nofreeslots'] = 'Não existem vagas disponíveis';
$string['nogroup'] = 'Sem grupo';
$string['noparticipants'] = 'Sem participantes';
$string['norightpage'] = 'Não tem permissão para aceder a esta página.';
$string['nosingleslotprintfields'] = 'Não é possível imprimir. Não existem campos de utilizador definidos. Veja as configurações do organizador.';
$string['noslots'] = 'Não existem vagas para';
$string['noslotsselected'] = 'Nenhuma vaga selecionada!';
$string['notificationtime'] = 'Lembrete do compromisso correspondente';
$string['notificationtime_help'] = 'Define o quanto antes de um compromisso, o aluno deve ser lembrado.';
$string['novalidparticipants'] = 'Nenhum participante válido';
$string['numentries'] = 'Entradas a mostrar por página';
$string['numentries_help'] = 'Escolha "Ótimo" para otimizar a distribuição das entradas da lista de acordo com o tamanho do texto escolhido e a orientação da página, se houver muitos participantes inscritos na disciplina';
$string['organizer'] = 'Organizador';
$string['organizer:addinstance'] = 'Adicionar um novo organizador';
$string['organizer:addslots'] = 'Adicionar novos tempos de vagas';
$string['organizer:assignslots'] = 'Atribuir vaga a um aluno';
$string['organizer:comment'] = 'Adicionar comentários';
$string['organizer:deleteslots'] = 'Apagar intervalos de tempos de vagas';
$string['organizer:editslots'] = 'Editar intervalos de tempos de vagas';
$string['organizer:evalslots'] = 'Avaliar vagas concluídas';
$string['organizer:leadslots'] = 'Liderar vagas';
$string['organizer:printslots'] = 'Imprimir vagas existentes';
$string['organizer:receivemessagesstudent'] = 'Receber mensagens como as enviadas aos alunos';
$string['organizer:receivemessagesteacher'] = 'Receber mensagens como as enviadas aos professores';
$string['organizer:register'] = 'Inscrever num intervalo de tempo';
$string['organizer:sendreminders'] = 'Enviar lembrete de inscrição aos alunos';
$string['organizer:unregister'] = 'Cancelar a inscrição de um intervalo de tempo';
$string['organizer:viewallslots'] = 'Visualizar como professor todos os intervalos de tempo';
$string['organizer:viewmyslots'] = 'Visualizar como professor ao próprios intervalos de tempo';
$string['organizer:viewregistrations'] = 'Ver estados das inscrições dos alunos';
$string['organizer:viewstudentview'] = 'Visualizar como aluno todos os intervalos de tempo';
$string['organizer_remind_all_no_recepients'] = 'Não existem destinatários válidos.';
$string['organizer_remind_all_recepients_pl'] = 'Um total de {$a->count} mensagens serão enviadas para os seguintes destinatários:';
$string['organizer_remind_all_recepients_sg'] = 'Um total de {$a->count} mensagem será enviada para os seguintes destinatários:';
$string['organizer_remind_all_title'] = 'Enviar lembretes';
$string['organizercommon'] = 'Configurações do Organizador';
$string['organizername'] = 'Nome';
$string['orientationlandscape'] = 'paisagem';
$string['orientationportrait'] = 'retrato';
$string['otherheader'] = 'Adicional';
$string['pageorientation'] = 'Orientação da página';
$string['participants'] = 'Participante(s)';
$string['participants_help'] = 'Lista de participantes que reservaram esta vaga.';
$string['pasttimeslotstring'] = 'xxx vagas não puderam ser criados porque não é permito criar vagas no passado.';
$string['pdf_notactive'] = 'não ativo';
$string['pdfsettings'] = 'Configurações PDF';
$string['places_inqueue'] = '{$a->inqueue} em lista de espera';
$string['places_inqueue_withposition'] = '{$a->queueposition}ª posição da lista de espera';
$string['places_taken_pl'] = '{$a->numtakenplaces}/{$a->totalplaces} lugares ocupados';
$string['places_taken_sg'] = '{$a->numtakenplaces}/{$a->totalplaces} lugares ocupados';
$string['pluginadministration'] = 'Administração do Organizador';
$string['pluginname'] = 'Organizador';
$string['position'] = 'Posição na fila';
$string['print_return'] = 'Voltar para visão global da vaga';
$string['printout'] = 'Imprimir';
$string['printpreview'] = 'Pré-visualização de impressão (10 primeiras entradas)';
$string['printslotuserfieldsnotenabled'] = 'A funcionalidade Imprimir campos do utilizador da vaga não está ativado pelo administrador.';
$string['printsubmit'] = 'Mostrar tabela de impressão';
$string['queue'] = 'Filas de espera';
$string['queue_help'] = 'As filas de espera permitem que os utilizadores se inscrevam num intervalo de tempo mesmo que o número máximo de participantes já tenha sido atingido.
Os utilizadores são adicionados a uma fila de espera e atribuídos à vaga (por ordem) assim que a vaga se tornar disponível.';
$string['recipientname'] = '&lt;nome do destinatário&gt;';
$string['reg_status'] = 'Estado das inscrições';
$string['reg_status_not_registered'] = 'Não inscrito';
$string['reg_status_organizer_expired'] = 'Organizador expirado';
$string['reg_status_registered'] = 'Inscrito';
$string['reg_status_slot_attended'] = 'Participou';
$string['reg_status_slot_available'] = 'Vaga disponível';
$string['reg_status_slot_expired'] = 'Vaga expirada';
$string['reg_status_slot_full'] = 'Vaga preenchida';
$string['reg_status_slot_not_attended'] = 'Não participou';
$string['reg_status_slot_past_deadline'] = 'Vaga fora do prazo';
$string['reg_status_slot_pending'] = 'Pendente de avaliação';
$string['register_notify_teacher:queue:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} está em fila de espera na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:queue:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} colocou em lista de espera o grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:queue:group:smallmessage'] = 'O aluno {$a->sendername} colocou em lista de espera o grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo em lista de espera';
$string['register_notify_teacher:queue:smallmessage'] = 'O aluno {$a->sendername} está em fila de espera na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:queue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Aluno em fila de espera';
$string['register_notify_teacher:register:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} inscreveu-se na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:register:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} inscreveu o grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:register:group:smallmessage'] = 'O aluno {$a->sendername} inscreveu o grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo inscrito';
$string['register_notify_teacher:register:smallmessage'] = 'O aluno {$a->sendername} inscreveu-se na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Aluno inscrito';
$string['register_notify_teacher:reregister:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} inscreveu-se novamente na nova vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:reregister:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} inscreveu novamente o grupo {$a->groupname} na nova vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:reregister:group:smallmessage'] = 'O aluno {$a->sendername} inscreveu novamente o grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo reinscrito';
$string['register_notify_teacher:reregister:smallmessage'] = 'O aluno {$a->sendername} inscreveu-se novamente na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Aluno reinscrito';
$string['register_notify_teacher:unqueue:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} retirou-se da lista de espera da vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:unqueue:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} removeu o grupo {$a->groupname} da lista de espera da vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:unqueue:group:smallmessage'] = 'O aluno {$a->sendername} removeu o grupo {$a->groupname} da lista de espera da vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo removido da lista de espera';
$string['register_notify_teacher:unqueue:smallmessage'] = 'O aluno {$a->sendername} retirou-se da lista de espera da vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:unqueue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Aluno removido da lista de espera';
$string['register_notify_teacher:unregister:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} cancelou a sua inscrição na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:unregister:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o aluno {$a->sendername} cancelou a inscrição do grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['register_notify_teacher:unregister:group:smallmessage'] = 'O aluno {$a->sendername} cancelou a inscriçãoo do grupo {$a->groupname} na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo não inscrito';
$string['register_notify_teacher:unregister:smallmessage'] = 'O aluno {$a->sendername} cancelou a sua inscrição na vaga de {$a->date} às {$a->time} em {$a->location}.';
$string['register_notify_teacher:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Aluno não inscrito';
$string['register_promotion_student:fullmessage'] = 'A sua inscrição para um intervalo de tempo foi promovida do estado de "lista de espera" para o estado "reservado".';
$string['register_promotion_student:smallmessage'] = 'A sua inscrição para um intervalo de tempo foi promovida do estado de "lista de espera" para o estado "reservado".';
$string['register_promotion_student:subject'] = 'Organizador: promovido da fila de espera';
$string['register_reminder_student:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, ainda não se inscreveu em nenhum intervalo de tempo ou faltou ao qual estava inscrito.

{$a->custommessage}

Sistema de Mensagens do Moodle';
$string['register_reminder_student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da disciplina {$a->courseid} {$a->coursefullname}, o seu grupo {$a->groupname} ainda não está inscrito em qualquer intervalo de tempo (vaga) ou faltou ao que estava inscrito.

{$a->custommessage}

Sistema de Mensagens do Moodle';
$string['register_reminder_student:group:smallmessage'] = 'Inscreva o seu grupo num novo intervalo de tempo.';
$string['register_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de inscrição';
$string['register_reminder_student:smallmessage'] = 'Inscreva-se num (novo) intervalo de tempo.';
$string['register_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de inscrição';
$string['relative_deadline_before'] = 'antes do compromisso';
$string['relative_deadline_now'] = 'A partir de agora';
$string['relativedeadline'] = 'Prazo limite relativo';
$string['relativedeadline_help'] = 'Define o prazo limite para a aplicação de um determinado tempo de avanço numa vaga específica. Os alunos não poderão alterar a inscrição ou cancelar a inscrição uma vez que o prazo já expirou.';
$string['remindall_desc'] = 'Enviar lembrete para todos os alunos sem compromisso';
$string['requiremodintro'] = 'Requer descrição da atividade';
$string['reset_organizer_all'] = 'A apagar vagas, compromissos e eventos relacionados';
$string['resetorganizerall'] = 'Limpar todos os dados do organizador (vagas e compromissos)';
$string['reviewsubmit'] = 'Rever intervalos de tempo';
$string['rewievslotsheader'] = 'Rever intervalos de tempo';
$string['search:activity'] = 'Organizador - Informação da atividade';
$string['sec'] = 'segundo';
$string['sec_pl'] = 'segundos';
$string['select'] = 'Selecionar vagas';
$string['select_all_slots'] = 'Selecionar todas as vagas visíveis';
$string['select_help'] = 'Selecione uma ou mais vagas com os quais deseja trabalhar.';
$string['selectedgrouplist'] = 'Grupos selecionados';
$string['selectedslots'] = 'Vaga(s) selecionada(s)';
$string['signature'] = 'Assinatura';
$string['singleslotcommands'] = 'Ação para uma vaga apenas';
$string['singleslotcommands_help'] = 'Clique num botão de ação para trabalhar diretamente na vaga.';
$string['singleslotprintfield'] = 'Imprimir campo do utilizador da vaga';
$string['singleslotprintfield0'] = 'Imprimir campo do utilizador da vaga';
$string['singleslotprintfield0_help'] = 'Estes campos de utilizador são usados por cada participante quando é impresso apenas uma vaga.';
$string['singleslotprintfields'] = 'Campos de perfil do utilizador de vaga de impressão única';
$string['singleslotprintfields_help'] = 'TEXTO FALSO - deve ser alterado com mais informações sobre os campos do perfil e como eles são controlados por uma configuração de administrador';
$string['slot'] = 'Marcação';
$string['slot_anonymous'] = 'Vaga anónima';
$string['slot_slotvisible'] = 'Membros apenas visíveis aos da mesma vaga';
$string['slot_visible'] = 'Membros da vaga sempre visíveis';
$string['slotassignedby'] = 'Vaga atribuída por';
$string['slotdeleted_notify_student:fullmessage'] = 'Olá {$a->receivername}!

O seu compromisso na disciplina {$a->coursehortname} de {$a->date} às {$a->time} em {$a->location} foi cancelado.
Tenha em atenção que não tem mais compromissos no organizador {$a->organizername}.
Por favor, clique na hiperligação para criar um novo compromisso: {$a->courselink}';
$string['slotdeleted_notify_student:group:fullmessage'] = 'Olá {$a->receivername}!

O seu compromisso na disciplina {$a->coursehortname} de {$a->date} às {$a->time} em {$a->location} foi cancelado.
Tenha em atenção que não tem mais compromissos no organizador {$a->organizername}.
Por favor, clique na hiperligação para criar um novo compromisso: {$a->courselink}';
$string['slotdeleted_notify_student:group:smallmessage'] = 'O seu compromisso de {$a->date} às {$a->time} do organizador "{$a->organizername}" foi cancelado.';
$string['slotdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso cancelado';
$string['slotdeleted_notify_student:smallmessage'] = 'O seu compromisso de {$a->date} às {$a->time} do organizador "{$a->organizername}" foi cancelado.';
$string['slotdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso cancelado';
$string['slotdetails'] = 'Detalhes da vaga';
$string['slotfrom'] = 'desde';
$string['slotlistempty'] = 'Não foram encontradas vagas.';
$string['slotperiodendtime'] = 'Data de fim';
$string['slotperiodheader'] = 'Gerar vagas para período';
$string['slotperiodheader_help'] = 'Especifique a data de início e a data de fim a que se aplicam os intervalos de tempo diários (secção abaixo). Especifique aqui também se a vaga deve estar visível para os alunos.';
$string['slotperiodstarttime'] = 'Data de início';
$string['slottimeframesheader'] = 'Períodos de tempo específicos';
$string['slottimeframesheader_help'] = 'Esta secção permite a definição de períodos do dia que serão preenchidos com vagas de compromisso com as propriedades acima especificadas. Pode haver mais de um período de tempo por dia. Se for selecionado um período na segunda-feira, ele gerará intervalos de tempo para todas as segundas-feiras entre a data de início e a data de fim (inclusivé).';
$string['slotto'] = 'até';
$string['status'] = 'Detalhes do estado';
$string['status_help'] = 'Estado atua da vaga';
$string['status_no_entries'] = 'Este organizador não tem alunos inscritos.';
$string['stroptimal'] = 'óptimo';
$string['studentcomment_title'] = 'Comentários do aluno';
$string['taballapp'] = 'Compromissos';
$string['tabstatus'] = 'Estado das inscrições';
$string['tabstud'] = 'Vista do aluno';
$string['teacher'] = 'Professor';
$string['teacher_help'] = 'Lista de instrutores desta vaga';
$string['teacher_unchanged'] = '-- não alterado --';
$string['teachercomment_title'] = 'Comentários do professor';
$string['teacherfeedback_title'] = 'Feedback do professor';
$string['teacherid'] = 'Instrutor';
$string['teacherid_help'] = 'Selecione o instrutor que irá orientar as marcações';
$string['teacherinvisible'] = 'Professor não visível';
$string['teachervisible'] = 'Professor visível';
$string['teachervisible_help'] = 'Marque esta opção para permitir que os alunos vejam o professor associado ao intervalo de tempo.';
$string['textsize'] = 'Tamanho do texto';
$string['th_actions'] = 'Ação';
$string['th_appdetails'] = 'Detalhes';
$string['th_attended'] = 'Participou';
$string['th_comments'] = 'Comentário do participante';
$string['th_datetime'] = 'Data & hora';
$string['th_datetimedeadline'] = 'Data & hora';
$string['th_details'] = 'Estado';
$string['th_duration'] = 'Duração';
$string['th_email'] = 'E-mail';
$string['th_evaluated'] = 'Avaliada';
$string['th_feedback'] = 'Feedback';
$string['th_firstname'] = 'Nome';
$string['th_grade'] = 'Avaliar';
$string['th_group'] = 'Grupo';
$string['th_groupname'] = 'Grupo';
$string['th_idnumber'] = 'Número ID';
$string['th_lastname'] = 'Apelido';
$string['th_location'] = 'Local';
$string['th_participant'] = 'Participante';
$string['th_participants'] = 'Participantes';
$string['th_status'] = 'Estado';
$string['th_teacher'] = 'Professor';
$string['th_teachercomments'] = 'Comentário do professor';
$string['timeshift'] = 'Mudança do prazo limite absoluto';
$string['timeslot'] = 'Organizador de vagas';
$string['timetemplate'] = '%H:%M';
$string['title_add'] = 'Adicionar novas vagas ao compromisso';
$string['title_comment'] = 'Editar os seus comentários';
$string['title_delete'] = 'Apagar as vagas selecionadas';
$string['title_edit'] = 'Editar as vagas selecionadas';
$string['title_eval'] = 'Avaliar as vagas selecionadas';
$string['title_print'] = 'Imprimir vagas';
$string['totalday'] = 'xxx vagas para yyy participantes';
$string['totalday_groups'] = 'xxx vagas para yyy grupos';
$string['totalslots'] = 'das {$a->starttime} até às {$a->endtime}, {$a->duration} {$a->unit} cada, {$a->totalslots} vaga(s) no total';
$string['totaltotal'] = 'Total: xxx vagas para yyy participantes';
$string['totaltotal_groups'] = 'Total: xxx vagas para yyy grupos';
$string['trainer'] = 'Instrutor';
$string['trainerid'] = 'Professor';
$string['trainerid_help'] = 'Selecione o professor que irá orientar as marcações';
$string['unavailableslot'] = 'Esta vaga está disponível desde';
$string['unknown'] = 'Desconhecido';
$string['visibility'] = 'Visibilidade dos membros - predefinição';
$string['visibility_all'] = 'Visível';
$string['visibility_anonymous'] = 'Anónimo';
$string['visibility_help'] = 'Definição da opção de visibilidade predefinida a usar quando uma nova vaga for criada.<br/><b>Anónimo:</b> Os membros desta vaga estão sempre "invisíveis" para todos.<br/><b>Visível:</b> Todos os membros desta vaga estão sempre visíveis para todos.<br/><b>Apenas para os membros:</b> Somente os membros da mesma vaga se podem ver.';
$string['visibility_slot'] = 'Apenas visível para os membros da vaga';
$string['visible'] = 'Vaga visível';
$string['warning_groupingid'] = 'Modo de grupo ativado. Tem de selecionar um agrupamento válido.';
$string['warninggroupmode'] = 'Tem de ativar o modo de grupo e selecionar um agrupamento para criar um organizador para grupos!';
$string['warningtext1'] = 'As vagas selecionadas possuem valores diferentes neste campo!';
$string['warningtext2'] = 'ATENÇÃO! O conteúdo deste campo foi alterado!';
$string['weekdaylabel'] = 'Dia da semana';
$string['with'] = 'com';
