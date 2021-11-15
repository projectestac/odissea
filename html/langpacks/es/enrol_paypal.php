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
 * Strings for component 'enrol_paypal', language 'es', version '3.11'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['businessemail'] = 'Correo electrónico de negocios de PayPal';
$string['businessemail_desc'] = 'La dirección de correo electrónico
de su cuenta PayPal Business';
$string['cost'] = 'Coste de matriculación';
$string['costerror'] = 'El coste de matriculación no es un número';
$string['costorkey'] = 'Por favor, seleccione uno de los siguientes métodos de matriculación.';
$string['currency'] = 'Moneda';
$string['defaultrole'] = 'Asignación de roles por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que debería asignarse a los usuarios durante las matriculaciones con PayPal';
$string['enrolenddate'] = 'Fecha de finalización';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden inscibirse solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha final de matrícula no puede ser anterior a la fecha inicial.';
$string['enrolperiod'] = 'Duración del periodo de inscripción';
$string['enrolperiod_desc'] = 'Periodo de tiempo por defecto en el que la matricula es válida. Si se establece a cero, la matricula durará de forma ilimitada por defecto';
$string['enrolperiod_help'] = 'Tiempo de duración de la inscripción válida, empezando al momento que el usuario es inscrito. Si se deshabilita, la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios sólamente pueden inscribirse a partir de esta fecha.';
$string['errdisabled'] = 'El complemento de inscripción de PayPal está deshabilitado y no maneja notificaciones de pago.';
$string['erripninvalid'] = 'PayPal no ha verificado la notificación de pago instantánea.';
$string['errpaypalconnect'] = 'No se pudo conectar a {$a->url} para verificar la notificación de pago instantáneo: {$a->result}';
$string['expiredaction'] = 'Acción al finalizar la matrícula';
$string['expiredaction_help'] = 'Seleccione la acción a realizar cuando termine la matrícula. Por favor, tenga en cuenta que algunos datos y configuraciones del usuario son eliminados si son dados de baja del curso.';
$string['mailadmins'] = 'Notificar a admin';
$string['mailstudents'] = 'Notificar a los estudiantes';
$string['mailteachers'] = 'Notificar a los profesores';
$string['messageprovider:paypal_enrolment'] = 'Mensajes de inscripción por PayPal';
$string['nocost'] = '¡No hay ningún coste asociado a la matriculación en este curso!';
$string['paypal:config'] = 'Configurar matriculaciones desde PayPal';
$string['paypal:manage'] = 'Administrar los usuarios registrados';
$string['paypal:unenrol'] = 'Dar de baja usuarios del curso';
$string['paypal:unenrolself'] = 'Darse de baja a sí mismo del curso';
$string['paypalaccepted'] = 'Pagos PayPal aceptados';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'El módulo de PayPal le permite crear cursos de pago. Si el coste de cualquier curso es cero, entonces los estudiantes no tienen que pagar para entrar. Hay un coste para todo el sitio que se establece como un valor predeterminado para todo el sitio y también valor de configuración que se puede establecer para cada curso por separado. El costo del curso anula el costo de sitio.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Información sobre transacciones PayPal para las matrículas con PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Dirección de correo electrónico o ID de cuenta de PayPal del destinatario del pago (es decir, el comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'El ID del curso que es vendido.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'El ID de la instancia de matrícula en este curso.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'El nombre completo del curso cuya matrícula ha sido vendida.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Una nota que introdujo el comprador en el campo de nota de pagos del sitio web de PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nombre completo del comprador.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'En el caso de un reembolso, una anulación o una anulación cancelada, este sería el ID de transacción de la transacción original.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'El estado del pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Mantiene si el pago se financió con un eCheck (echeck) o se financió con saldo de PayPal, tarjeta de crédito o transferencia instantánea (instantánea).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'La razón por la que el pago está pendiente (si es que lo está).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'La razón por la que el estado de pago es Invertido, Reembolsado, Cancelado_Reversión o Denegado (si el estado es uno de ellos).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Dirección de correo electrónico principal del destinatario del pago (es decir, el comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID único de cuenta de PayPal del destinatario del pago (es decir, el comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Importe del impuesto cargado en el pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'El momento en que PayPal notifica a Moodle información sobre el pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'El número de identificación de la transacción original del comerciante para el pago del comprador, contra el que se registró el caso';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'El ID del usuario que compró la matrícula del curso.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'El complemento de matrícula con PayPal envía datos del usuario desde Moodle al sitio web de PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Dirección del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Ciudad del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'País del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Una cadena separada por guiones que contiene el ID del usuario (el comprador), el ID del curso, el ID de la instancia de inscripción.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Dirección de correo electrónico del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Nombre del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Apellido del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nombre completo del comprador.';
$string['processexpirationstask'] = 'Tarea de envío de notificaciones de caducidad de matrícula de PayPal';
$string['sendpaymentbutton'] = 'Enviar pago por Paypal';
$string['status'] = 'Permitir la matrícula con PayPal';
$string['status_desc'] = 'Permitir a los usuarios utilizar PayPal para inscribirse en un curso de forma predeterminada.';
$string['transactions'] = 'Transacciones PayPal';
$string['unenrolselfconfirm'] = '¿Está seguro que desea darse de baja del curso "{$a}"?';
