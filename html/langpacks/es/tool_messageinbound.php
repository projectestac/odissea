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
 * Strings for component 'tool_messageinbound', language 'es', version '3.11'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nombre de la clase';
$string['component'] = 'Componente';
$string['configmessageinboundhost'] = 'La dirección de un servidor en el que Moodle deberá comprobar el correo. Para especificar un puerto no predeterminado, puede utilizar el formato [server]:[port], por ejemplo, mail.example.com:993. Si deja este campo en blanco, Moodle utilizará el puerto predeterminado para el tipo de servidor de correo que especifique.';
$string['defaultexpiration'] = 'Periodo de expiración de la dirección predeterminada';
$string['defaultexpiration_help'] = 'Cuando el controlador genere una dirección de correo electrónico, esta se puede configurar para que caduque al cabo de un periodo de tiempo predeterminado de forma que no se pueda seguir utilizando. Se recomienda establecer un periodo de expiración.';
$string['description'] = 'Descripción';
$string['domain'] = 'Dominio del correo electrónico';
$string['edit'] = 'Editar';
$string['edithandler'] = 'Editar los ajustes del controlador {$a}';
$string['editinghandler'] = 'Editando {$a}';
$string['enabled'] = 'Habilitado';
$string['fixedenabled_help'] = 'No puede cambiar el estado de este controlador. Esto puede deberse a que otros controladores pueden necesitarlo.';
$string['fixedvalidateaddress'] = 'Validar dirección del remitente';
$string['fixedvalidateaddress_help'] = 'No puede cambiar la validación de la dirección para este controlador. Esto puede deberse a que el controlador necesita un ajuste específico.';
$string['handlerdisabled'] = 'El controlador del correo electrónico con el que ha intentado contactar está deshabilitado. No ha sido posible procesar el mensaje en este momento.';
$string['incomingmailconfiguration'] = 'Configuración del correo entrante';
$string['incomingmailserversettings'] = 'Ajustes del servidor de correo entrante';
$string['incomingmailserversettings_desc'] = 'Moodle puede conectarse a servidores IMAP que estén configurados correctamente. Puede especificar los ajustes utilizados para conectarse a su servidor IMAP aquí.';
$string['invalid_recipient_handler'] = 'Si se recibe un mensaje válido pero no se puede autenticar el remitente, el mensaje se guarda en el servidor de correo electrónico y se contacta con el usuario utilizando para ello la dirección de correo electrónico de su perfil de usuario. El usuario puede responder para confirmar la autenticidad del mensaje original.

Este controlador procesa dichas respuestas.

No es posible deshabilitar la verificación del remitente de este controlador debido a que el usuario puede responder desde una dirección de correo electrónico incorrecta si posee una configuración incorrecta del cliente de correo electrónico.';
$string['invalid_recipient_handler_name'] = 'Controlador del remitente no válido';
$string['invalidrecipientdescription'] = 'No se ha podido autenticar el mensaje "{$a->subject}" debido a que se envió desde una dirección de correo electrónico distinta a la que aparece en su perfil de usuario. Deberá responder a este mensaje para que se pueda autenticar el mensaje.';
$string['invalidrecipientdescriptionhtml'] = 'No se ha podido autenticar el mensaje "{$a->subject}" debido a que se envió desde una dirección de correo electrónico distinta a la que aparece en su perfil de usuario. Deberá responder a este mensaje para que se pueda autenticar el mensaje.';
$string['invalidrecipientfinal'] = 'No se ha podido autenticar el mensaje "{$a->subject}". Compruebe que haya enviado el mensaje desde la misma dirección de correo electrónico que figura en su perfil.';
$string['mailbox'] = 'Nombre de buzón';
$string['mailboxconfiguration'] = 'Configuración del buzón';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Configuración del correo';
$string['message_handlers'] = 'Controladores de mensaje';
$string['messageinbound'] = 'Mensaje entrante';
$string['messageinboundenabled'] = 'Habilitar el procesamiento del correo de entrada';
$string['messageinboundenabled_desc'] = 'El procesamiento del correo de entrada debe estar habilitado para que se puedan enviar los mensajes con la información adecuada.';
$string['messageinboundgeneralconfiguration'] = 'Configuración general';
$string['messageinboundgeneralconfiguration_desc'] = 'El procesamiento de mensajes entrantes le permite recibir y procesar correos electrónicos dentro de Moodle. Esto se puede aplicar a la hora de enviar respuestas de correos electrónicos a publicaciones en foros o al añadir archivos a los archivos privados de un usuario.';
$string['messageinboundhost'] = 'Servidor de correo entrante';
$string['messageinboundhostpass'] = 'Contraseña';
$string['messageinboundhostpass_desc'] = 'Se trata de la contraseña que el proveedor del servicio le haya proporcionado para que inicie sesión en su cuenta de correo electrónico.';
$string['messageinboundhostssl'] = 'Utilizar SSL';
$string['messageinboundhostssl_desc'] = 'Algunos servidores de correo admiten un nivel adicional de seguridad al encriptar la comunicación entre Moodle y su servidor. Si su servidor lo admite, le recomendamos que se utilice esta encriptación SSL.';
$string['messageinboundhosttype'] = 'Tipo de servidor';
$string['messageinboundhostuser'] = 'Nombre de usuario';
$string['messageinboundhostuser_desc'] = 'Se trata del nombre de usuario que el proveedor del servicio le haya proporcionado para que inicie sesión en su cuenta de correo electrónico.';
$string['messageinboundmailboxconfiguration_desc'] = 'Cuando se envían mensajes, estos se adaptan al formato address+data@example.com. Para generar de forma segura direcciones desde Moodle, especifique la dirección que utilizaría normalmente antes del símbolo @ y después de este, el dominio. Por ejemplo, el nombre del buzón en el ejemplo anterior sería «address» y el dominio del correo electrónico sería «example.com». Para ello, debería utilizar una cuenta de correo electrónico específica.';
$string['messageprocessingerror'] = 'Recientemente, ha enviado un correo electrónico con el asunto "{$a->subject}", pero no se ha podido procesar.

A continuación se muestran los detalles del error.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Recientemente, ha enviado un correo electrónico con el asunto "{$a->subject}", pero no se ha podido procesar.</p>
<p>A continuación se muestran los detalles del error.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'No se ha podido procesar el correo electrónico con el asunto "{$a->subject}". Se ha producido el siguiente error: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'No se ha podido procesar el correo electrónico con el asunto "{$a->subject}". Póngase en contacto con su administrador para obtener más información.';
$string['messageprocessingsuccess'] = '{$a->plain}

Si en el futuro no desea recibir estas notificaciones, puede editar las preferencias personales de los mensajes abriendo {$a->messagepreferencesurl} en su navegador.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Si en el futuro no desea recibir estas notificaciones, puede <a href="{$a->messagepreferencesurl}">editar las preferencias personales de los mensajes</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Mensaje para confirmar que recibiste un mensaje entrante';
$string['messageprovider:messageprocessingerror'] = 'Advertencia cuando no se pudo procesar un mensaje entrante';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmación de que un mensaje se procesó correctamente';
$string['name'] = 'Nombre';
$string['noencryption'] = 'Desactivado: sin encriptación';
$string['noexpiry'] = 'Sin caducidad';
$string['oldmessagenotfound'] = 'Ha intentado autenticar manualmente un mensaje, pero este no se ha podido encontrar. Esto podría deberse a que ya ha sido procesado o a que el mensaje ha caducado.';
$string['oneday'] = 'Un día';
$string['onehour'] = 'Una hora';
$string['oneweek'] = 'Una semana';
$string['oneyear'] = 'Un año';
$string['pluginname'] = 'Configuración del mensaje entrante';
$string['privacy:metadata:coreuserkey'] = 'Claves de usuario para validar el correo electrónico recibido';
$string['privacy:metadata:messagelist'] = 'Una lista de identificadores de mensajes que fallaron en la validación y requieren autorización adicional';
$string['privacy:metadata:messagelist:address'] = 'La dirección a la que se envió el correo electrónico';
$string['privacy:metadata:messagelist:messageid'] = 'El ID del mensaje';
$string['privacy:metadata:messagelist:timecreated'] = 'El momento en el que se hizo el registro';
$string['privacy:metadata:messagelist:userid'] = 'El ID del usuario que necesita aprobar el mensaje';
$string['replysubjectprefix'] = 'Asunto:';
$string['requirevalidation'] = 'Validar dirección del remitente';
$string['ssl'] = 'SSL (detectar automáticamente versión de SSL)';
$string['sslv2'] = 'SSLv2 (forzar la versión 2 de SSL)';
$string['sslv3'] = 'SSLv3 (forzar versión 3 de SSL)';
$string['taskcleanup'] = 'Limpieza de los correos electrónicos entrantes no verificados';
$string['taskpickup'] = 'Recogida de correos electrónicos entrantes';
$string['tls'] = 'TLS (TLS; iniciado a través de una negociación a nivel del protocolo en un canal sin encriptar; forma RECOMENDADA de iniciar una conexión segura)';
$string['tlsv1'] = 'TLSv1 (conexión directa al servidor TLS versión 1.x)';
$string['validateaddress'] = 'Validar dirección de correo electrónico del remitente';
$string['validateaddress_help'] = 'Cuando se recibe un mensaje de un usuario, Moodle trata de validar el mensaje comparando la dirección de correo electrónico del remitente con la dirección de correo electrónico en su perfil de usuario.

En caso de que el remitente no coincida, se envía una notificación al usuario para que confirme que realmente ha enviado el correo electrónico.

Si este ajuste no está habilitado, no se comprueba la dirección de correo electrónico del remitente.';
