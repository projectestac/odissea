<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_quickmail', language 'es', branch 'MOODLE_26_STABLE'
 *
 * @package   block_quickmail
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['add_all'] = 'Añadir todo';
$string['add_button'] = 'Añadir';
$string['additional_emails'] = 'Correos adicionales';
$string['additional_emails_help'] = 'Otras direcciones a las que quiere que se le envíen los mensajes, separadas por coma o punto y coma. Ejemplo

 email1@example.com, email2@example.com';
$string['allowstudents'] = 'Permitir a los estudiantes usar Quickmail';
$string['allowstudentsdesc'] = 'Permitir a los estudiantes usar Quickmail. Si elige \'Nunca\', no podrá configurar el bloque para que los estudiantes accedan a nivel de curso.';
$string['all_sections'] = 'Todos los grupos';
$string['alternate'] = 'Emails alternativos';
$string['alternate_body'] = '<p>
{$a->fullname} añadió {$a->address} como email alternativo para el curso {$a->course}.
</p>

<p>
El propósito de este email es verificar que la dirección existe, y que el
propietario tiene los permisos necesarios en la plataforma.
</p>


<p>
Para completar el proceso de verificación, haga clic en el siguiente enlace: {$a->url}
</p>

<p>
Si cree que este correo no va dirigido a usted, puede que lo haya recibido por error.
Simplemente ignore el mensaje.
</p>

Gracias.';
$string['alternate_from'] = 'Moodle: Quickmail';
$string['alternate_new'] = 'Añadir un email alternativo';
$string['alternate_subject'] = 'Verificación de la dirección alternativa';
$string['approved'] = 'Aprobado';
$string['are_you_sure'] = '¿Está seguro de que quiere eliminar {$a->title}? Esta acción no se puede deshacer';
$string['attachment'] = 'Adjunto(s)';
$string['backup_history'] = 'Incluir historial de Quickmail';
$string['body'] = 'Cuerpo';
$string['composenew'] = 'Escribir nuevo email';
$string['config'] = 'Configuración';
$string['courseferpa'] = 'Respetar el modo de grupos';
$string['courselayout'] = 'Estilo del curso';
$string['courselayout_desc'] = 'Usar el estilo de página del _Course_ cuando se muestren las páginas del bloque. Active esta opción si está teniendo problemas con los anchos de las páginas.';
$string['default_flag'] = 'Por defecto';
$string['delete_confirm'] = 'Está seguro de que quiere eliminar el mensaje: {$a}';
$string['delete_failed'] = 'Error al eliminar el correo';
$string['download_all'] = 'Descargar todos';
$string['drafts'] = 'Ver borradores';
$string['draftssuccess'] = 'Borradores';
$string['email'] = 'Email';
$string['email_error'] = 'No se pudo enviar: {$a->firstname} {$a->lastname} ({$a->email})';
$string['email_error_field'] = 'No puede estar vacío: {$a}';
$string['entry_activated'] = 'Ahora puede utilizar el email alternativo {$a->address} en el curso {$a->course}.';
$string['entry_failure'] = 'No se ha podido enviar el email a {$a->address}. Compruebe que {$a->address} existe y pruebe de nuevo.';
$string['entry_key_not_valid'] = 'El enlace de activación ya no es válido para {$a->address}. Reenviar un nuevo enlace de activación.';
$string['entry_saved'] = 'Se ha guardado el email alternativo {$a->address}.';
$string['entry_success'] = 'Se ha enviado un email a {$a->address} para verificar su validez.';
$string['failed_to_send_to'] = 'Fallo al enviar a';
$string['ferpa'] = 'Modo FERPA';
$string['ferpa_desc'] = 'Permite al sistema comportarse según el modo de grupos del curso, ignorando el modo de grupos pero separándolos, o ignorando los grupos totalmente.';
$string['from'] = 'De';
$string['history'] = 'Ver Historial';
$string['log'] = 'Ver Historial';
$string['logsuccess'] = 'todos los mensajes se enviaron correctamente';
$string['message'] = 'Mensaje';
$string['message_body_as_follows'] = 'cuerpo del mensaje como sigue';
$string['message_failure'] = 'algunos usuarios no recibieron el mensaje';
$string['messageprovider:broadcast'] = 'Enviar mensaje múltiple usando el email del administrador.';
$string['message_sent_to'] = 'ensaje enviado a';
$string['moodle_attachments'] = 'Adjuntos ({$a})';
$string['no_alternates'] = 'No se encontraron email alternativos para {$a->fullname}. Crear uno.';
$string['no_course'] = 'Curso no válido id: {$a}';
$string['no_drafts'] = 'No hay borradores.';
$string['no_email'] = 'No se pudo enviar el correo {$a->firstname} {$a->lastname}.';
$string['no_email_address'] = 'No se pudo enviar el correo {$a}';
$string['noferpa'] = 'No respetar el modo de grupos';
$string['no_filter'] = 'Eliminar filtro';
$string['no_log'] = 'No hay mensajes en su historial.';
$string['no_permission'] = 'No tiene permisos para enviar correos con Quickmail';
$string['no_section'] = 'Grupo no asignado';
$string['no_selected'] = 'Debe elegir usuarios a los que enviar correos.';
$string['no_subject'] = 'Debe incluir un asunto';
$string['not_valid'] = 'Tipo de visor de log inválido {$a}';
$string['not_valid_action'] = 'Debe introducir una acción válida: {$a}';
$string['not_valid_typeid'] = 'Debe introducir un email válido para {$a}';
$string['not_valid_user'] = 'No puede ver historiales de otros usuarios.';
$string['no_type'] = '{$a} no es un usuario autorizado. Por favor, use la aplicación correctamente.';
$string['no_usergroups'] = 'No hay usuarios en su grupo a los que se pueda enviar un correo.';
$string['no_users'] = 'No hay usuarios a los que se pueda enviar un correo.';
$string['overwrite_history'] = 'Sobreescribir historial de Quickmail';
$string['pluginname'] = 'Quickmail';
$string['potential_sections'] = 'Grupos disponibles';
$string['potential_users'] = 'Destinatarios disponibles';
$string['prepend_class'] = 'Anteponer el nombre del curso';
$string['prepend_class_desc'] = 'Anteponer el nombre corto del curso al asunto del email.';
$string['qm_contents'] = 'Descargar el contenido';
$string['quickmail:addinstance'] = 'Añadir un nuevo bloque Quickmail al curso';
$string['quickmail:allowalternate'] = 'Permite a los usuarios añadir un email alternativo para los cursos.';
$string['quickmail:canconfig'] = 'Permite a los usuarios configurar instancias de Quickmail.';
$string['quickmail:candelete'] = 'Permite a los usuarios borrar un email del historial.';
$string['quickmail:canimpersonate'] = 'Permite a los usuarios registrarse como otro y ver el historial.';
$string['quickmail:cansend'] = 'Permite a los usuarios enviar emails con Quickmail.';
$string['quickmail:myaddinstance'] = 'Añadir un nuevo bloque Quickmail a la página /my';
$string['receipt'] = 'Recibir copia';
$string['receipt_help'] = 'Recibir una copia del email enviado';
$string['remove_all'] = 'Eliminar todo';
$string['remove_button'] = 'Eliminar';
$string['required'] = 'Rellene los campos obligatorios.';
$string['reset'] = 'Volver a la configuración predeterminada';
$string['restore_history'] = 'Restaurar historial de Quickmail';
$string['role_filter'] = 'Filtrar por rol';
$string['save_draft'] = 'Guardar borrador';
$string['seconds'] = 'segundos';
$string['selected'] = 'Destinatarios Seleccionados';
$string['select_groups'] = 'Seleccione grupos ...';
$string['select_roles'] = 'Filtrar por rol';
$string['select_users'] = 'Seleccione usuarios ...';
$string['sendadmin'] = 'Enviar email al Administrador';
$string['send_again'] = 'envie otra vez el mensaje';
$string['send_email'] = 'Enviar email';
$string['sent_success'] = 'todos los mensajes se enviaron correctamente';
$string['sent_successfully_to_the_following_users'] = 'enviado correctamente a los usuarios:';
$string['sig'] = 'Firma';
$string['signature'] = 'Firmas';
$string['something_broke'] = 'Parece que el envío de emails está desactivado o algo ha fallado';
$string['strictferpa'] = 'Separar grupos siempre';
$string['subject'] = 'Asunto';
$string['sure'] = '¿Está seguro de que quiere eliminar {$a->address}? Esta acción no se puede deshacer.';
$string['time_elapsed'] = 'Tiempo transcurrido:';
$string['title'] = 'Título';
$string['user'] = 'usuario';
$string['users'] = 'usuarios';
$string['valid'] = 'Estado de activación';
$string['waiting'] = 'Esperando';
$string['warnings'] = 'Advertencias';
