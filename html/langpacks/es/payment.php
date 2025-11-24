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
 * Strings for component 'payment', language 'es', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Archivado';
$string['accountconfignote'] = 'El portal de pagos para esta cuenta será configurado de forma separada';
$string['accountdeleteconfirm'] = 'Si esta cuenta tiene pagos anteriores, será archivada. En caso contrario, sus datos de configuración serán eliminados permanentemente. ¿Está seguro de querer continuar?';
$string['accountidnumber'] = 'Número ID';
$string['accountidnumber_help'] = 'El número ID solamente es usado cuando se contrasta la cuenta contra sistemas externos y no es mostrado en ninguna otra parte del sitio. Si la cuenta tiene un nombre en código oficial se puede introducir; en caso contrario, el campo puede dejarse vacío.';
$string['accountname'] = 'Nombre de la cuenta';
$string['accountname_help'] = 'Cómo esta cuenta será identificada para los profesores o administradores que configuran los pagos (por ejemplo, en el complemento de inscripción al curso).';
$string['accountnotavailable'] = 'No disponible';
$string['createaccount'] = 'Crear cuenta de pagos';
$string['deleteorarchive'] = 'Eliminar o archivar';
$string['editpaymentaccount'] = 'Editar cuenta para pago';
$string['eventaccountcreated'] = 'Cuenta de pagos creada';
$string['eventaccountdeleted'] = 'Cuenta de pagos eliminada';
$string['eventaccountupdated'] = 'Cuenta de pagos actualizada';
$string['feeincludesurcharge'] = '{$a->fee} (incluye {$a->surcharge}% cargo adicional por usar este tipo de pago)';
$string['gatewaycannotbeenabled'] = 'El portal de pago no puede ser habilitado porque la configuración está  incompleta.';
$string['gatewaydisabled'] = 'Deshabilitado';
$string['gatewayenabled'] = 'Habilitado';
$string['gatewaynotfound'] = 'Portal de pago no encontrado';
$string['gotomanageplugins'] = 'Habilitar y deshabilitar portales de pago y configurar cargos adicionales vía {$a}.';
$string['gotopaymentaccounts'] = 'Usted puede crear múltiples cuentas de pagos usando cualquiera de estos portales de pago en {$a}';
$string['hidearchived'] = 'Ocultar archivados';
$string['noaccountsavilable'] = 'No hay cuentas para pagos disponibles.';
$string['nocurrencysupported'] = 'No está soportado el pago en ninguna divisa. Por favor asegúrese de que esté habilitado al menos un portal de pagos.';
$string['nogateway'] = 'No hay un portal de pagos que pueda ser usado.';
$string['nogatewayselected'] = 'Primeramente necesita seleccionar un portal de pagos.';
$string['paymentaccount'] = 'Cuenta para pago';
$string['paymentaccounts'] = 'Cuentas para pago';
$string['paymentaccountsexplained'] = 'Crear una o más cuentas para pago para este sitio. Cada cuenta incluye configuración para portales de pagos disponibles. La persona que configura pagos en el sitio (por ejemplo, pago para la inscripción al curso) podrá elegir de entre las cuentas disponibles.';
$string['payments'] = 'Pagos';
$string['privacy:metadata:database:payments'] = 'Información acerca de los pagos.';
$string['privacy:metadata:database:payments:amount'] = 'La cantidad para el pago.';
$string['privacy:metadata:database:payments:currency'] = 'La divisa del pago.';
$string['privacy:metadata:database:payments:gateway'] = 'El portal de pagos que es usado para el pago.';
$string['privacy:metadata:database:payments:timecreated'] = 'La hora de cuando fue hecho el pago.';
$string['privacy:metadata:database:payments:timemodified'] = 'La hora de cuando fue actualizado por última vez el registro del pago.';
$string['privacy:metadata:database:payments:userid'] = 'El usuario que hizo el pago.';
$string['restoreaccount'] = 'Restaurar';
$string['selectpaymenttype'] = 'Seleccionar tipo de pago';
$string['showarchived'] = 'Mostrar archivados';
$string['supportedcurrencies'] = 'Divisas soportadas';
$string['surcharge'] = 'Cargo adicional (porcentaje)';
$string['surcharge_desc'] = 'El cargo adicional es un porcentaje adicional cobrado a los usuarios que eligen pagar usando este portal de pagos.';
