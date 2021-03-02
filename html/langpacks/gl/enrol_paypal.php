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
 * Strings for component 'enrol_paypal', language 'gl', version '3.8'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['businessemail'] = 'Correo de empresa PayPal';
$string['businessemail_desc'] = 'O enderezo de correo da súa conta de empresa PayPal';
$string['cost'] = 'Custo de matrícula';
$string['costerror'] = 'O custo da matriculación non é numérico';
$string['costorkey'] = 'Escolla un dos seguintes métodos de matriculación.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Asignación de rol predeterminado';
$string['defaultrole_desc'] = 'Seleccionar o rol que se lle debería asignar aos usuarios durante as matriculacións PayPal';
$string['enrolenddate'] = 'Fin de data';
$string['enrolenddate_help'] = 'De estar activado, os usuarios soamente se poden matricularse ata esta data.';
$string['enrolenddaterror'] = 'A fin de data de matriculación non pode ser anterior á data de inicio';
$string['enrolperiod'] = 'Duración da matriculación';
$string['enrolperiod_desc'] = 'Período de tempo durante o que é válida a matriculación. De configurarse a cero, a duración da matriculación será ilimitada de modo predeterminado.';
$string['enrolperiod_help'] = 'Tempo durante o que a matriculación é válida, comezando desde o momento en que o usuario se matricula. De estar desactivado, a duración da matriculación será ilimitada.';
$string['enrolstartdate'] = 'Data de inicio';
$string['enrolstartdate_help'] = 'De estar conectada, os usuarios soamente se poden matricular dende esta data en diante.';
$string['errdisabled'] = 'O engadido de matriculación con PayPal está desactivado e non manexa as notificacións de pagamentos.';
$string['erripninvalid'] = 'A notificación de pagamento instantáneo non foi verificada por PayPal.';
$string['errpaypalconnect'] = 'Non foi posíbel conectar a {$a->url} para verificar a notificación de pagamento instantáneo: {$a->result}';
$string['expiredaction'] = 'Acción na expiración da matrícula';
$string['expiredaction_help'] = 'Seleccione a acción que se realizar cando a matricula do usuario expire. Vexa que algúns datos do usuario e de configuración purgaranse do curso na desmatriculación.';
$string['mailadmins'] = 'Notificarlle ao admin';
$string['mailstudents'] = 'Notificarlle aos alumnos';
$string['mailteachers'] = 'Notificarlle aos profesores';
$string['messageprovider:paypal_enrolment'] = 'Mensaxes de matriculación por PayPal';
$string['nocost'] = 'Non hai custo asociado coa matriculación deste curso!';
$string['paypal:config'] = 'Configurar instancias de matrícula vía PayPal';
$string['paypal:manage'] = 'Xestionar os usuarios matriculados';
$string['paypal:unenrol'] = 'Desmatricular usuarios do curso';
$string['paypal:unenrolself'] = 'Desmatricularse por si mesmo do curso';
$string['paypalaccepted'] = 'Pagamentos PayPal aceptados';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'O módulo Paypal permítelle configurar cursos de pago. No caso de calquera curso ser cero, non se lles pedirá aos alumnos ningún pagamento para a entrada. Hai un custo xeral que vostede configura como predeterminado para o sitio enteiro e despois unha configuración para cada curso individualmente. O custo do curso sobrescribe o custo do sitio.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Información sobre as transaccións de PayPal para matriculacións con PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Enderezo de correo ou identificación da conta de PayPal do destinatario do pagamento (é dicir, o comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'O ID do curso que se vende.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'O ID da instancia de matriculación no curso.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'O nome completo do curso cuxa matriculación foi vendida.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Unha nota que introduciu o comprador no campo de nota de pagamentos do sitio web de PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nome completo do comprador.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'No caso de reembolso, reversión ou revogación cancelada, este sería o ID de transacción da transacción orixinal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'O estado do pagamento';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Considera se o pagamento foi financiado cun eCheck (echeck), ou foi financiado con saldo de PayPal, tarxeta de crédito ou transferencia instantánea (instantánea).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'A razón pola que o estado de pagamento está pendente (se así for).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'A razón pola que o estado do pagamento está revertido, reembolsado, cancelado ou rexeitado (se o estado é un deles).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Enderezo de correo electrónico principal do destinatario (é dicir, o comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Identificación única da conta de PayPal do destinatario do pagamento (é dicir, o comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Importe do imposto cargado no pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'O momento no que Moodle foi notificado por PayPal sobre o pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'O número de identificación da transacción orixinal do comerciante para o pago do comprador, contra o que se rexistrou o caso';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'O ID do usuario que comprou a matrícula do curso.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'O engadido de matriculación con PayPal transmite os datos do usuario de Moodle ao sitio web de PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Enderezo do usuario que está a mercar o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Cidade do usuario que está a mercar o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'País do usuario que está a mercar o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Unha cadea separada por guións que contén o ID do usuario (o comprador), o ID do curso e o ID da instancia de matriculación.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Enderezo de correo do usuario que está a mercar o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Nome do usuario que está a mercar o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Apelido(s) do usuario que está a mercar o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nome completo do comprador.';
$string['processexpirationstask'] = 'Tarefas de enviar notificacións de expiración da matriculación con PayPal';
$string['sendpaymentbutton'] = 'Enviar pagamento a través de PayPal';
$string['status'] = 'Permitir matriculacións con PayPal';
$string['status_desc'] = 'Permitirlle aos usuarios usar PayPal para matricularse no curso de modo predeterminado.';
$string['transactions'] = 'Transaccións de PayPal';
$string['unenrolselfconfirm'] = 'Confirma que quere desmatricularse por si mesmo do curso «{$a}»';
