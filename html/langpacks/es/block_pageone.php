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
 * Strings for component 'block_pageone', language 'es', version '4.1'.
 *
 * @package     block_pageone
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_info'] = 'Información de cuenta y configuraciones adicionales';
$string['account_info2'] = 'Funciones';
$string['account_works'] = 'Ingreso a servidor PageOne';
$string['action'] = 'Acción';
$string['add_alpha_tag'] = 'Añadir un nuevo MSISDNs personalizado';
$string['add_callback'] = 'Añadir SMS Callback';
$string['all_course_messages'] = 'Todos los mensajes de usuario para este curso';
$string['all_messages'] = 'Todos los mensajes de usuario para todos los cursos';
$string['all_own_messages'] = 'Mensajes para todos mis cursos';
$string['alphatag'] = 'MSISDN';
$string['alphatag_help'] = '(<b>*</b> MSISDN ya está en uso en configuraciones personalizadas. <b>#</b> Ajuste por defecto del sistema MSISDN)';
$string['already_set'] = 'Un MSISDN personalizado para este usuario ya ha sido enviado';
$string['areyousure'] = '¿Está Usted seguro de querer eliminar todos los textos/Emails en su historia?';
$string['attachment'] = 'Anexo';
$string['attachment_warn'] = 'Advertencia: los anexos solamente pueden ser enviados por Email y no por mensaje de texto. ¿Desea continuar?';
$string['attachmentalt'] = 'Añadir un anexo a su texto/email';
$string['attachmenterror'] = '¡No es un anexo válido! El archivo siguiente no existe : <strong>$a</strong>';
$string['attachmentoptional'] = ')Opcional - solamente enviado con Emails=';
$string['available_credit'] = 'Crédito de cuenta disponible';
$string['blockname'] = 'MoodleMobile';
$string['callback_added'] = 'El servicio callback (llamar de regreso) ha sido añadido y debería estar enlistado debajo.';
$string['callback_delay'] = 'Por favor tenga en cuenta que puede haber un breve retraso (~10 minutos) entre el registro de un \'\'callback\'\' para mensajería en 2-sentidos y el que se vuelva activo.';
$string['callback_instructions'] = 'Para recibir mensajes de texto entrantes y repórtes de entrega de mensajes, Usted necesita registrar un servicio callback con PageOne. La URL callback para este servidor Moodle que debería de enviarse a soporte PageOne es mostrada debajo.';
$string['callback_ok'] = 'Servicio SMS Callback';
$string['callback_ok_des'] = 'necesario para contestaciones de mensaje de texto';
$string['callback_problem'] = 'Los servicios callback SMS neecesarios para recibir contestaciones a mensajes de texto y para reporte de estado de mensajería mejorada podrían no configurarse automáticamente. Esto es porque, ya sea que el servidor PageOne ha rechazado la solicitud de configuración de callback o porque ya existe un sistema diferente de callbacks.';
$string['callback_problem_1'] = 'Ingonar cualquier configuración existente y añadir las SMS callbaks para esta instancia Moodle';
$string['callback_problem_2'] = 'Eliminar todas las callbacks existentes y añadir callbacks SMS a esta instancia Moodle';
$string['callback_problem_3'] = 'Ver y editar manualmente todos los callbacks SMS registrados';
$string['callback_reg_error_delivery'] = 'Hubo un error al registrar los callbacks de reportes de entrega';
$string['callback_reg_error_reply'] = 'Hubo un error al registrar los callbacks de contestaciones de mensaje';
$string['char_limit_error'] = 'Su mensaje ha excedido el límite de caracteres para un mensaje de texto. Por favor reduzca la longitud de su mensaje.';
$string['char_limit_mm'] = 'Su mensaje ha excedido el límite de caracteres para un mensaje de texto. El mensaje de texto no fue enviado.';
$string['check'] = 'Revisar todos';
$string['clearhistory'] = 'Limpiar Historia';
$string['compose'] = 'Componer Mensaje';
$string['config_account_num'] = 'Número de cuenta PageOne';
$string['config_account_pass'] = 'Contraseña de Cuenta PageOne';
$string['config_alpha_tag'] = 'MSISDN del sistema por defecto';
$string['config_alpha_tag_help'] = 'El número por defecto desde donde vendrán todos los mensajes de texto enviados desde este sistema. Esto puede sobrescribirse por las configuraciones personalizadas MSISDN.';
$string['config_char_limit'] = 'Límite de caracteres del mensaje';
$string['config_char_limit_help'] = 'El número máximo de caracteres permitidos en un solo mensaje saliente.';
$string['config_country_code'] = 'Código para marcar al país';
$string['config_country_code_help'] = 'El código internacional de marcación para su país, solamente dígitos. Para México ingrese 52. Puede consultarlos en http://www.nationsonline.org/oneworld/international-calling-codes.htm';
$string['config_default_mbox'] = 'Buzón por defecto para mensajes entrantes';
$string['config_default_mbox_help'] = 'Esto debería ajustarse a una dirección Email apropiada.';
$string['config_https'] = 'Usar HTTPS para el callback end point';
$string['config_https_help'] = 'Configurar a si cuando su servidor Moodle solamente acepta conexiones HTTPS para \'\'callbacks\'\'.';
$string['config_mobile_find'] = 'Método de identificación del número del teléfono móvil';
$string['config_mobile_find_always_first'] = 'Parámetro de usuario de Moodle \'Phone\'';
$string['config_mobile_find_always_second'] = 'Parámetro de usuario de Moodle \'Mobile Phone\'';
$string['config_mobile_find_first_valid'] = 'Primer número de teléfono válido';
$string['config_mobile_find_help'] = 'Esta configuración controla el mecanismo usado para identificar números de teléfono móvil en los parámetros de usuario de Moodle. Las opciones son:<br /><ul><li><b>Parámetro de usuario Moodle \'Teléfono móvil\' :</b> La opción recomendada si su base de datos de usuarios es consistente y el número del teléfono móvil nunca está situado en el otro campo (tenga en cuenta que esto era referido como \'Teléfono 2 \' en algunas versiones anteriores de Moodle).</li><li><b>Parámetro de usuario Moodle \'Teléfono\' :</b> Usa el número en el campo  de parámetro de usuario \'Teléfono\'. (Tenga en cuenta que esto era referido como\'Teléfono 1\' en algunas versiones antiguas de Moodle)</li><li><b>Primer número válido de teléfono:</b> Esto revisará ambos campos, tanto \'Teléfono\' y \'Teléfono móvil\'. Si \'Teléfono\' contiene un número válido, entonces ese será usado. Si no fuera así, se usará el contenido de \'Teléfono móvil\'.</li><li><b>Segundo número de teléfono válido:</b> Esto revisará ambos campos, el \'Teléfono móvil\' y \'Teléfono\'. Si \'Teléfono móvil\' contiene un número válido, entonces este será usado. En caso contrario, se usará el contenido de \'Teléfono\'.</li><li><b>Identificar automáticamente números de teléfono móvil del Reino Unido:</b> Este método revisa todos  los números de teléfonos almacenados en los perfiles de usuarios para ver si comienzan con el prefijo normal de número de teléfono móvil de UK, 07.</li><li><b>Número de teléfono móvil prefijado con la letra m:</b> Use esta opción si el número de teléfono móvil es almacenado prefijado con una m (por ejemplo m07123 456789) en cualquiera de los dos campos de número de teléfono </li></ul>';
$string['config_mobile_find_second_valid'] = 'Segundo número de teléfono válido';
$string['config_mobile_find_starts_m'] = 'Número de teléfono móvil prefijado con letra m';
$string['config_mobile_find_uk_auto'] = 'Identificar automáticamente número de teléfono móvil del Reino Unido UK';
$string['config_mtype'] = 'Entrega de mensaje de texto';
$string['config_mtype_0'] = 'Email';
$string['config_mtype_1'] = 'Mensajería Moodle';
$string['config_mtype_help'] = 'El mecanismo por el que los mensajes de texto son enviados a usuarios.';
$string['config_receive'] = 'Acción destinatario noidentificado';
$string['config_receive_0'] = 'Ignorar';
$string['config_receive_1'] = 'Mensaje de rechazo de Email al remitente si es posible; de lo contrario, re-enviar al buzón por defecto';
$string['config_receive_2'] = 'Reenviar a buzón por defecto';
$string['config_receive_3'] = 'Mandar mensaje de texto de rechazo al remitente';
$string['config_receive_help'] = 'La acción a tomar cuando el destinatario de un mensaje entrante no puede ser identificado.';
$string['confirmed'] = 'Confirmado';
$string['confirmed_errors'] = 'Confirmado con Errores';
$string['contact_with_mm'] = 'Contactar con MoodleMobile';
$string['course_id'] = 'La ID del curso era incorrecta';
$string['credit_message'] = 'Advertencia : los créditos para texto SMS fueron reportados como bajos/vacío cuando este mensaje fue enviado. Para añadir crédito, por favor contacte  a PageOne Janet Customer Support en 0844 811 0808, o Email janettxt@pageone.co.uk. LLamadas telefónicas al 0844 811 0808 cost 5ppm a cualquier hora desde una linea telefónica terrestre de BT. Otras redes pueden vartiar.';
$string['credit_usage'] = 'Uso de Crédito SMS';
$string['date'] = 'Fecha';
$string['delete'] = 'Eeliminar';
$string['deletefail'] = 'Eliminación Falló';
$string['deletesuccess'] = 'Eeliminación(es) exitosa';
$string['domxml_warn'] = 'Advertncia: No pudieron encontrarse las clases PHP DOMXML. Este bloque no funcionará sin ellas. Por favor refiérase al arechivo Readme (Léame) en la descarga del bloque para más información.';
$string['edit_alpha'] = 'Editar MSISDN personalizado';
$string['edit_callback'] = 'Editar Callbacks SMS Registrados';
$string['email'] = 'Texto/Email';
$string['email_address'] = 'Dirección Email';
$string['email_found'] = 'Dirección Email encontrada';
$string['email_not_found'] = 'Dirección Email deshabilitada / no encontrada';
$string['emailfail'] = 'error de Email:';
$string['emailfailerror'] = 'A los siguientes usuarios no se les envió Email debido a ...';
$string['emailstop'] = 'Dirección Email deshabilitada:';
$string['error_code_0'] = 'El ingreso al servidor PageOne ha fallado. No se envió ningún mensaje de texto.';
$string['error_code_200'] = 'Enviado';
$string['error_code_201'] = 'Aceptado';
$string['error_code_202'] = 'Grupo Aceptado';
$string['error_code_203'] = 'Ingreso Válido';
$string['error_code_210'] = 'email aceptado';
$string['error_code_211'] = 'Pager aceptado';
$string['error_code_213'] = 'Ubicación aceptada';
$string['error_code_214'] = 'TTS aceptado';
$string['error_code_400'] = 'Sin acceso a este servicio';
$string['error_code_401'] = 'Mensaje No Enviado';
$string['error_code_402'] = 'Servicio Actalmente No Disponible';
$string['error_code_403'] = 'No pudo enviarse Email';
$string['error_code_404'] = 'No se pudo enviar';
$string['error_code_501'] = 'Caracter Malo';
$string['error_code_502'] = 'Número Inválido';
$string['error_code_503'] = 'Dirección LLamada Desconocida';
$string['error_code_504'] = 'Pager Desconocido';
$string['error_code_505'] = 'Error de Protocolo';
$string['error_code_507'] = 'Crédito Insuficieente';
$string['error_code_551'] = 'Falló Seguridad';
$string['error_code_552'] = 'Suscriptor Inactivo';
$string['error_code_553'] = 'Límite Máximo Alcanzado';
$string['error_code_554'] = 'Por favor póngase en contacto con el Proveedor del Servicio';
$string['error_code_555'] = 'Error del Sistema';
$string['error_code_556'] = 'Error Desconocido';
$string['error_code_558'] = 'No se pudo colgar el teléfono';
$string['error_code_559'] = 'Fondos Insuficientes';
$string['errors'] = 'Nota: Hubo erores al enviar este mensaje; parte, o todo el texto o Email, puede que no haya alcanzado su destino.';
$string['failed'] = 'Falló';
$string['from'] = 'De';
$string['history'] = 'Buzón de salida';
$string['host'] = 'Host';
$string['includefrom'] = 'Incluir nombre de remitente en mensaje de texto';
$string['inhistory'] = 'Buzón de entrada (Solo SMS)';
$string['mailto_key'] = '*=Sin número válido de teléfono móvil, #=Sin dirección Email válida.';
$string['message'] = 'Extracto del Mensaje';
$string['message_from'] = 'Mensaje de texto de';
$string['message_log'] = 'Bitácora de Mensaje';
$string['message_time'] = 'Hora del mensaje';
$string['messageerror'] = '¡Debe tener un mensaje!';
$string['messagefail'] = 'Su mensaje de texto no pudo ser entregado porque fue enviado a un número que no tiene destinatario designado.';
$string['messagefail_extra'] = 'Debajo se muestran los detalles del mensaje de texto fallido.';
$string['messagefail_subject'] = 'Falló su mensaje de texto';
$string['messagefail_subject_default'] = 'Falló el envío de mensaje de texto a';
$string['messagetype'] = 'Tipo de mensaje';
$string['messagetype_0'] = 'Mensaje de Texto + Email';
$string['messagetype_1'] = 'Mensaje de Texto solamente';
$string['messagetype_2'] = 'Email solamente';
$string['messagetype_3'] = 'Mensaje de Texto + Mensajería Moodle';
$string['messagetype_4'] = 'Mensajería Moodle';
$string['messagetype_help_button'] = 'tipos de mensajes';
$string['messagewarn_1'] = 'Advertencia: el mensaje contiene caracter extendido';
$string['messagewarn_2'] = 'por favor revise el número de SMS por mensaje antes de enviar';
$string['mm_disabled'] = '(Nota : La Mensajería de Moodle está deshabilitada en este sistema, solamente puede usarse Email.)';
$string['mobile_found'] = 'Número Mobile encontrado';
$string['mobile_number'] = 'Número Mobile';
$string['more_users'] = 'La lista de usuarios muestra todos los usuarios que tienen permiso para usar todas las instancias MoodleMobile en este sistema. Si Usted ha usado un solo sticky (pegajoso) o una instancia para todo el sitio de MoodleMobile en lugar de añadirla al curso donde se requería, entonces Usted podría encontrar que faltan muchos usuarios de la lista de usuarios. Cuando use MoodleMobile de esta manera. Usted necesita darle a cualquier usuario que Usted desea que pueda enviar o recibir mensajes en todo el sitio el permiso \'puede enviar\'.';
$string['no_available_users'] = 'Todos los usuario apropiados  tienen MSIDNSs personalizados configurados';
$string['no_contact'] = 'Los siguientes usuarios no tienen detalles de contacto válidos para sus métodos de mensajería elegidos y no recibirán su mensaje :';
$string['no_course_users'] = 'No se encontraron usuarios de curso para enviar Email';
$string['no_list'] = 'La lista MSISDN no pudo ser recuperada. Si Usted está instalando este bloque por primera vez, deje vacía esta configuración por ahora y regrese a la página de la configuración del bloque después de que las otras configuraciones hayan sido guardadas para ver la lista de MSISDNs disponibles. Si el bloque ya ha sido instalado, entonces por favor revise el número de cuenta y las configuraciones de contraseña.';
$string['no_mobile'] = 'Número Mobile no encontrado';
$string['no_permission'] = 'Usted no aparenta tener permiso para usar MoodleMobile en ninguna parte del sistema.';
$string['no_permission_view'] = 'Lo sentimos, pero Usted no tiene permisos para ver mensajes de otros usuarios.';
$string['no_suitable_course'] = 'No se especificó ningún curso y el usuario al cual Usted está intentando contactar no fue encontrado en ninguno de los cursos en los cuales Usted tiene permiso de usar MoodleMobile.';
$string['no_user_email'] = 'No se encontraron usuarios de curso para enviarles Email';
$string['no_user_select'] = 'Uste no ha seleccionado a ningún usuario para enviar texto/email.';
$string['no_view_priv'] = 'Advertencia: Usted no tiene permitido ver detalles de usuario, por lo que se han ocultado los detalles completos de estos errores.';
$string['nogroupmembers'] = 'Sin miembros de grupo';
$string['not_authorised'] = 'Usted no está autorizado para hacer esto';
$string['not_configured'] = 'No se han ingresado las configuraciones de la cuenta PageOne. Bloque deshabilitado.';
$string['notingroup'] = 'No está en un grupo';
$string['own_messages'] = 'Mis mensajes para este curso solamente';
$string['pageone:addinstance'] = 'Añadir una instancia de MoodleMobile';
$string['pageone:cansend'] = 'Puede enviar Emails y textos con MoodleMobile';
$string['pageone:myaddinstance'] = 'Añadir una instancia de MoodleMobile';
$string['permission'] = 'Lo sentimos; Usted no tiene los permisos correctos para usar MoodleMobile.';
$string['please_select'] = 'Por favor seleccione';
$string['pluginname'] = 'MoodleMobile';
$string['receive'] = 'Mensajes recibidos';
$string['registered'] = 'Registrado';
$string['reply_mm'] = 'Contestar vía MM';
$string['reply_subject'] = 'Mensaje de texto';
$string['reply_with'] = 'Responder a este mensaje con MoodleMobile usando el enlace inferior :';
$string['scope'] = 'Alcance';
$string['scope_0'] = 'Restringido';
$string['scope_1'] = 'Sesión';
$string['scope_2'] = 'Mensaje';
$string['scope_3'] = 'Permanente';
$string['select_help'] = 'Mantenga presionada la tecla CTRL para hacer selecciones múltiples de la lista de usuarios, o para seleccionar/des-seleccionar usuarios individuales. Si desea seleccionar a todos los ítems en una lista rápidamente, simplemente haga clic en el ítem superior y arrastre hacia abajo.';
$string['selectuser'] = 'Seleccionar usuario';
$string['send_error'] = 'Error de Envío de Mensaje de Texto';
$string['send_error_help'] = 'Hubo un error al comunicarse con el servidor de mensajería de texto PageOne. Esto podría deberse a un problema de red o un problema con su cuenta PageOne. Si el problema persiste, por favor repórtelo a su administrador del sistema con una copia de este mensaje de error.';
$string['send_with_mm'] = 'Mandar una copia de este mensaje por SMS con MoodleMobile';
$string['sendemail'] = 'Enviar Mensaje(s)';
$string['sender'] = 'Remitente';
$string['sent'] = 'Enviado';
$string['server_fail'] = 'El servidor no respondió';
$string['service'] = 'Servicio';
$string['service_0'] = 'Todos los eeventos';
$string['service_1'] = 'Reportes de Entrega';
$string['service_2'] = 'Responder Mensajes';
$string['soap_fault'] = 'Falla de conexión SOAP';
$string['soap_fault_help'] = 'Este problema podría deberse a problemas de red o a un problemilla en el Bloque MoodleMobile o los servicios  a los cuales está intentando conectarse. Si el problema persiste, por favor repórtelo a su administrador del sistema junto con una copia de este mensaje de error.';
$string['status'] = 'Estatus';
$string['status_help'] = 'Enviado = Entregado sin errores al servidor PageOne.<br />Confirmado = La entrega del mensaje de texto ha sido confirmada por el servidor  PageOne.';
$string['status_info_header'] = 'Estatus del mensaje';
$string['subjecterror'] = '¡Debe de tener un asunto!';
$string['successfulemail'] = 'Texto(s)/Email(s) enviado(s) exitosamente';
$string['textfail'] = 'Error(es) de mensajería de texto';
$string['textfailerror'] = 'A los siguientes usuarios nose les envió texto debido a ...';
$string['textstop'] = 'dirección de texto deshabilitada:';
$string['to'] = 'Para';
$string['toerror'] = 'Debe seleccionar destinatarios para el texto/Email';
$string['uncheck'] = 'Des-seleccionar a todos';
$string['update_alphas'] = 'Actualizar MSISDNs personalizados';
$string['user'] = 'Usuario';
$string['user_not_found'] = 'Usuario No encontrado';
$string['via'] = '(Recibido via MoodleMobile)';
$string['view_message'] = 'Ver Mensaje';
