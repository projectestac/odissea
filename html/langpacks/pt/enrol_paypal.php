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
 * Strings for component 'enrol_paypal', language 'pt', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuir papel';
$string['businessemail'] = 'Endereço de e-mail da conta PayPal';
$string['businessemail_desc'] = 'E-mail da sua conta de negócio PayPal';
$string['cost'] = 'Preço da inscrição';
$string['costerror'] = 'O preço da inscrição tem de ser um valor numérico';
$string['costorkey'] = 'Selecione um dos seguintes métodos de inscrição.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Atribuição de papel predefinido';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos utilizadores nas inscrições PayPal';
$string['enrolenddate'] = 'Data de fim';
$string['enrolenddate_help'] = 'Se ativar esta opção, os utilizadores apenas podem ser inscritos até esta data.';
$string['enrolenddaterror'] = 'A data de fim de inscrição não pode ser anterior à data de início';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Duração predefinida da inscrição.  Se for definida como zero, a validade da inscrição será ilimitada por predefinição.';
$string['enrolperiod_help'] = 'Intervalo de tempo durante o qual a inscrição é válida, a partir do momento em que o utilizador é inscrito. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativar esta opção, os utilizadores apenas podem ser inscritos a partir desta data.';
$string['errdisabled'] = 'O módulo de inscrição PayPal está desativado e não controla as notificações de pagamento.';
$string['erripninvalid'] = 'A notificação de pagamento instantâneo não foi verificada pelo PayPal.';
$string['errpaypalconnect'] = 'Could not connect to {$a->url} to verify the instant payment notification: {$a->result}';
$string['expiredaction'] = 'Ação de expiração da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do utilizador expira. Tenha em atenção que alguns dados e configurações do utilizador são eliminados da disciplina quando a inscrição é cancelada.';
$string['mailadmins'] = 'Notificar administradores por e-mail';
$string['mailstudents'] = 'Notificar alunos por e-mail';
$string['mailteachers'] = 'Notificar professores por e-mail';
$string['messageprovider:paypal_enrolment'] = 'Mensagens de inscrição PayPal';
$string['nocost'] = 'A inscrição nesta disciplina é gratuita!';
$string['paypal:config'] = 'Configurar instâncias de inscrição Paypal';
$string['paypal:manage'] = 'Gerir utilizadores inscritos';
$string['paypal:unenrol'] = 'Cancelar inscrições de alunos na disciplina';
$string['paypal:unenrolself'] = 'Cancelar a sua inscrição desta disciplina';
$string['paypalaccepted'] = 'Tipos de pagamentos aceites';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Este módulo de inscrição permite utilizar o serviço PayPal para configurar disciplinas com acesso pago. Se o preço da disciplina for definido como zero não haverá lugar à cobrança de qualquer valor. Pode ser definido neste módulo um valor genérico a aplicar em todas as disciplinas que usem este módulo. Pode ainda indicar, para cada disciplina individualmente, um valor diferente.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informação sobre transações PayPal das inscrições PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'E-mail ou ID da conta PayPal do destinatário do pagamento (ou seja, o vendedor).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'O ID da disciplina que foi vendido.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'O ID da instância de inscrição na disciplina.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'O nome completo da disciplina que foi vendida.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Observação que foi adicionada pelo comprador no campo observações do pagamento no site do PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nome completo do comprador.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'No caso de reembolso, anulação ou cancelamento, este seria o ID da transação original.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Estado do pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Indica se o pagamento foi pago com um eCheck (echeck), se foi pago com saldo do PayPal, com cartão de crédito ou por transferência bancária (instantânea).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Motivo do estado pendente do pagamento (se for este o caso).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'O motivo pelo qual o estado do pagamento é Anulado, Reembolsado, Cancelado_Anulado ou Negado (se for um deles).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'E-mail principal do destinatário do pagamento (o vendedor).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID exclusivo da conta PayPal do destinatário do pagamento (por exemplo, o vendedor).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Montante do imposto cobrado no pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Data e hora da notificação do PayPal ao Moodle acerca do pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Número de identificação (ID) da transação original do vendedor para o pagamento do comprador, com o qual foi registado';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID do utilizador que comprou a inscrição na disciplina.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'O módulo de inscrição PayPal transmite dados de utilizador do Moodle para o website PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Morada do comprador.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Cidade do comprador.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'País do comprador.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Uma string separada por hífen que contém o ID do utilizador (o comprador), o ID da disciplina e o ID da instância de inscrição';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'E-mail do comprador.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Nome do comprador.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Apelido do comprador.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nome completo do comprador.';
$string['processexpirationstask'] = 'Envio de notificações da expiração da inscrição PayPal';
$string['sendpaymentbutton'] = 'Realizar pagamento através de "Paypal"';
$string['status'] = 'Permitir inscrições PayPal';
$string['status_desc'] = 'Permitir que os utilizadores usem preferencialmente o PayPal para se inscreverem numa disciplina.';
$string['transactions'] = 'Transações PayPal';
$string['unenrolselfconfirm'] = 'Tem a certeza de que pretende cancelar a sua inscrição na disciplina "{$a}"?';
