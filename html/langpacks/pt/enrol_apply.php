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
 * Strings for component 'enrol_apply', language 'pt', version '3.11'.
 *
 * @package     enrol_apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'O seu pedido de inscrição na disciplina foi cancelado.';
$string['applicationconfirmednotification'] = 'O seu pedido de inscrição na disciplina foi confirmado.';
$string['applicationdeferrednotification'] = 'O seu pedido de inscrição na disciplina foi adiado (de momento está em lista de espera).';
$string['apply:config'] = 'Configurar instâncias do método Autoinscrição com aprovação';
$string['apply:manage'] = 'Gerir inscrições do utilizador';
$string['apply:manageapplications'] = 'Gerir método de inscrição';
$string['apply:unenrol'] = 'Cancelar inscrição dos utilizadores na disciplina';
$string['apply:unenrolself'] = 'Cancelar a própria inscrição na disciplina';
$string['applycomment'] = 'Comentário';
$string['applydate'] = 'Data de inscrição';
$string['applymanage'] = 'Pedidos de inscrição';
$string['applyuser'] = 'Nome/Apelido';
$string['applyusermail'] = 'E-mail';
$string['btncancel'] = 'Cancelar pedidos';
$string['btnconfirm'] = 'Confirmar pedidos';
$string['btnwait'] = 'Adiar pedidos';
$string['cancelmail_heading'] = 'E-mail de cancelamento';
$string['cancelmailcontent'] = 'Mensagem do e-mail de cancelamento';
$string['cancelmailcontent_desc'] = 'Por favor, use os seguintes campos especiais para substituir o conteúdo do e-mail por dados do Moodle.<br/><b>{firstname}</b>: O nome do utilizador; <b>{content}</b>: O nome da disciplina; <b>{lastname}</b>: O apelido do utilizador; <b>{username}</b>: O nome de utilizador (conta Moodle)';
$string['cancelmailsubject'] = 'Assunto do e-mail de cancelamento';
$string['cantenrol'] = 'A inscrição está desativada ou inativa';
$string['comment'] = 'Observações';
$string['confirmenrol'] = 'Gerir pedidos';
$string['confirmmail_heading'] = 'E-mail de confirmação';
$string['confirmmailcontent'] = 'Mensagem do e-mail de confirmação';
$string['confirmmailcontent_desc'] = 'Por favor, use os seguintes campos especiais para substituir o conteúdo do e-mail por dados do Moodle.<br/>{firstname}:O nome do utilizador; {content}:O nome da disciplina;{lastname}:O apelido do utilizador;{username}:O nome de utilizador (conta Moodle);{timeend}: A data de fim da inscrição';
$string['confirmmailsubject'] = 'Assunto do e-mail de confirmação';
$string['confirmusers'] = 'Confirmar inscrição';
$string['confirmusers_desc'] = 'Os utilizadores nas linhas a cinza estão em lista de espera.';
$string['coursename'] = 'Disciplina';
$string['custom_label'] = 'Etiqueta personalizada';
$string['defaultperiod'] = 'Duração da inscrição';
$string['defaultperiod_desc'] = 'Duração predefinida da validade da inscrição. Se definida como zero, a duração da inscrição será ilimitada, por predefinição.';
$string['defaultperiod_help'] = 'Duração predefinida da validade da inscrição, desde o momento da inscrição do utilizador. Se desativado, a duração da inscrição será ilimitada, por predefinição.';
$string['editdescription'] = 'Texto a mostrar';
$string['enrolname'] = 'Confirmação da inscrição na disciplina';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Duração predefinida da validade da inscrição. Se definida como zero, a duração da inscrição será ilimitada, por predefinição.';
$string['enrolperiod_help'] = 'Duração predefinida da validade da inscrição, desde o momento da inscrição do utilizador. Se desativado, a duração da inscrição será ilimitada, por predefinição.';
$string['enrolusers'] = 'Inscrever utilizadores';
$string['expiredaction'] = 'Ação após expiração da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do utilizador expirar. Tenha em atenção que alguns dados e configurações do utilizador são removidos da disciplina durante o cancelamento da inscrição na disciplina.';
$string['expiry_heading'] = 'Configurações da expiração';
$string['expirymessageenrolledbody'] = 'Caro(a) {$a->user},

Esta é uma notificação de que a sua inscrição na disciplina \'{$a->course}\' expira em {$a->timeend}.

Se precisar de ajuda, entre em contacto com {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Aplicar notificação de expiração da inscrição';
$string['expirymessageenrollerbody'] = 'A inscrição na disciplina \'{$a->course}\' expirará nos próximo {$a->threshold} para os seguintes utilizadores:

    {$a->users}

Para prolongar a inscrição, vá a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificações de expiração da inscrição';
$string['expirynotifyall'] = 'Professor e utilizador inscrito';
$string['expirynotifyenroller'] = 'Apenas professor';
$string['group'] = 'Atribuição de grupo';
$string['group_help'] = 'Pode atribuir nenhum ou vários grupos';
$string['mailtoteacher_suject'] = 'Novo pedido de inscrição!';
$string['maxenrolled'] = 'Máximo de utilizadores inscritos';
$string['maxenrolled_help'] = 'Especifica o número máximo de utilizadores que podem inscrever-se automaticamente. 0 (zero) significa sem limite.';
$string['maxenrolled_tip_1'] = 'de';
$string['maxenrolled_tip_2'] = 'inscrições já reservadas.';
$string['maxenrolledreached_left'] = 'Número máximo de utilizadores permitidos';
$string['maxenrolledreached_right'] = 'já foi alcançado.';
$string['messageprovider:application'] = 'Notificações de inscrição na disciplina';
$string['messageprovider:cancelation'] = 'Notificações de cancelamento da inscrição na disciplina';
$string['messageprovider:confirmation'] = 'Notificações de confirmação da inscrição na disciplina';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração da inscrição';
$string['messageprovider:waitinglist'] = 'Notificações de adiamento da inscrição na disciplina';
$string['newapplicationnotification'] = 'Existe um novo pedido de inscrição a aguardar aprovação.';
$string['newenrols'] = 'Permitir novo pedido de inscrição na disciplina';
$string['notification'] = '<b>Pedido de inscrição enviado com sucesso</b>.<br/><br/>Será informado por e-mail quando a sua inscrição for confirmada.';
$string['notify_desc'] = 'Quem será notificado acerca de novos pedidos de inscrição.';
$string['notify_heading'] = 'Configurações da notificação';
$string['notifycoursebased'] = 'Nova notificação de inscrição (baseado na instância, por exemplo, professores da disciplina)';
$string['notifycoursebased_desc'] = 'Predefinição para novas instâncias: Notificar todos os utilizadores com permissão para \'Gerir método de inscrição\' na disciplina correspondente (por exemplo, professores e gestores).';
$string['notifyglobal'] = 'Nova notificação de inscrição (global, por exemplo, gestores globais e administradores)';
$string['notifyglobal_desc'] = 'Quem será notificado acerca de novos pedidos de inscrição para qualquer disciplina.';
$string['opt_commentaryzone'] = 'Campo de comentário';
$string['opt_commentaryzone_help'] = 'Sim -> Ativar o campo de comentários no formulário de inscrição';
$string['pluginname'] = 'Autoinscrição com aprovação';
$string['pluginname_desc'] = 'Com este módulo os utilizadores podem requerer a inscrição numa disciplina. Um professor ou um gestor terão de aprovar o pedido para que o utilizador fique inscrito.';
$string['privacy:metadata'] = 'O módulo Autoinscrição com aprovação não armazena quaisquer dados pessoais.';
$string['sendexpirynotificationstask'] = 'Aplicar tarefa de envio de notificações de expiração da inscrição';
$string['show_extra_user_profile'] = 'Mostrar os campos opcionais do perfil do utilizador';
$string['show_standard_user_profile'] = 'Mostrar os campos gerais do perfil do utilizador';
$string['status'] = 'Ativar Autoinscrição com aprovação';
$string['status_desc'] = 'Permitir acesso à disciplina aos utilizadores inscritos internamente.';
$string['submitted_info'] = 'Informação da inscrição';
$string['user_profile'] = 'Perfil do utilizador';
$string['waitmail_heading'] = 'E-mail de adiamento';
$string['waitmailcontent'] = 'Mensagem do e-mail de adiamento';
$string['waitmailcontent_desc'] = 'Por favor, use os seguintes campos especiais para substituir o conteúdo do e-mail por dados do Moodle.<br/><b>{firstname}</b>: O nome do utilizador; <b>{content}</b>: O nome da disciplina; <b>{lastname}</b>: O apelido do utilizador; <b>{username}</b>: O nome de utilizador (conta Moodle)';
$string['waitmailsubject'] = 'Assunto do e-mail de adiamento';
