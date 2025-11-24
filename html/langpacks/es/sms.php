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
 * Strings for component 'sms', language 'es', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['countrycode'] = 'Prefijo de país por defecto';
$string['countrycode_help'] = 'Prefijo de país a añadir a los números de teléfono si los usuarios no introducen su propio prefijo de país. Introduzca el número sin el símbolo "+".';
$string['createnewgateway'] = 'Crear nueva puerta de enlace SMS';
$string['delete_sms_gateway'] = 'Borrar puerta de enlace SMS';
$string['delete_sms_gateway_confirmation'] = 'Esto borará la puerta de enlace SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Editar puerta de enlace SMS {$a->gateway}';
$string['gateway'] = 'Puerta de enlace';
$string['gateway_name'] = 'Nombre de puerta de enlace';
$string['manage_sms_gateways'] = 'Gestionar puertas de enlace SMS';
$string['phonenumbernotvalid'] = 'No se reconoce este formato de número de teléfono: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Almacena mensajes enviados vía SMS';
$string['privacy:metadata:sms_messages:content'] = 'El texto del mensaje';
$string['privacy:metadata:sms_messages:id'] = 'El ID del mensaje';
$string['privacy:metadata:sms_messages:recipient'] = 'El número de teléfono al que se envió el mensaje';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'El usuario a quien se envió el mensaje, si se conoce';
$string['privacy:metadata:sms_messages:status'] = 'El estado del mensaje';
$string['privacy:metadata:sms_messages:timecreated'] = 'La hora en que se creó el mensaje';
$string['privacy:sms:sensitive_not_shown'] = 'No se almacenó el contenido de este mensaje por estar marcado como contenido sensible.';
$string['select_sms_gateways'] = 'Proveedor de puerta de enlace SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'No se puede borrar la puerta de enlace {$a->gateway}. O la puerta de enlace se está usando o hay un problema con la base de datos. Compruebe si la puerta de enlace está activa o contacte con su administrador de bases de datos para obtener ayuda.';
$string['sms_gateway_deleted'] = 'Puerta de enlace SMS {$a->gateway} borrada';
$string['sms_gateway_disable_failed'] = 'No se puede borrar la puerta de enlace. O la puerta de enlace se está usando o hay un problema con la base de datos. Compruebe si la puerta de enlace está activa o contacte con su administrador de bases de datos para obtener ayuda.';
$string['sms_gateways'] = 'Puertas de enlace SMS';
$string['sms_gateways_info'] = 'Crear y gestionar puertas de enlace SMS para enviar mensajes SMS desde su sitio.';
$string['status:gateway_failed'] = 'La puerta de enlace ha fallado al enviar el mensaje';
$string['status:gateway_not_available'] = 'La puerta de enlace no está disponible para enviar el mensaje';
$string['status:gateway_queued'] = 'El mensaje está encolado para su envío por la puerta de enlace';
$string['status:gateway_rejected'] = 'La puerta de enlace ha rechazado el mensaje';
$string['status:gateway_sent'] = 'El mensaje ha sido enviado por la puerta de enlace';
$string['status:message_over_size'] = 'El mensaje es demasiado grande para poderse enviar por la puerta de enlace';
$string['status:unknown'] = 'Imposible determinar el estado del mensaje';
