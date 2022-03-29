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
 * Strings for component 'organizer', language 'es', version '3.11'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Error'] = 'Error';
$string['Info'] = 'Información';
$string['Warning'] = 'Advertencia';
$string['absolutedeadline'] = 'Fin del registro';
$string['absolutedeadline_help'] = 'Active esto para definir el tiempo después del cual ya no serán posibles más acciones del estudiante.';
$string['actionlink_delete'] = 'eliminar';
$string['actionlink_edit'] = 'editar';
$string['actionlink_eval'] = 'calificar';
$string['actionlink_print'] = 'imprimir';
$string['actions'] = 'Acción';
$string['actions_help'] = 'Acción a tomar.';
$string['addappointment'] = 'Añadir cita';
$string['addslots_placesinfo'] = 'Esta acción creará {$a->numplaces} nuevos posibles lugares, haciendo un total de {$a->totalplaces} posibles lugares para {$a->numstudents} estudiantes.';
$string['addslots_placesinfo_group'] = 'Esta acción creará {$a->numplaces} nuevos posibles lugares, haciendo un total de {$a->totalplaces} posibles lugares para {$a->numgroups} grupos.';
$string['allowcreationofpasttimeslots'] = 'Creación de espacios de tiempos pasados';
$string['allowedprofilefieldsprint'] = 'Campos del perfil del usuario permitidos';
$string['allowedprofilefieldsprint2'] = 'Campos de perfil de usuario permitidos para imprimir posiciones de un solo organizador';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles del organizador y el formulario de registro estarán disponibles en <strong> {$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Inicio del registro';
$string['allowsubmissionsfromdate_help'] = 'Active ésto si desea hacer este organizador accesible a los estudiantes después de un cierto período de tiempo.';
$string['allowsubmissionsfromdatesummary'] = 'Este organizador aceptará registros desde <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Fin del registro';
$string['alwaysshowdescription'] = 'Mostrar descripción siempre';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la descripción superior de la Tarea solamente será visible para los estudiantes en la fecha de "Inicio del registro".';
$string['applicant'] = 'Esta es la persona que registró al grupo';
$string['appointment_reminder_student:fullmessage'] = '¡Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, tiene una cita con {$a->sendername} el {$a->date} a las {$a->time} en {$a->location}.

Sistema de Mensajería de Moodle';
$string['appointment_reminder_student:group:fullmessage'] = '¡Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, tiene una cita grupal con {$a->sendername} el {$a->date} a las {$a->time} en {$a->location}.

 Sistema de Mensajería de Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'Tiene una cita grupal {$a->sendername} en {$a->date} a las {$a->time} en {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Recordatorio de cita grupal';
$string['appointment_reminder_student:smallmessage'] = 'Tiene una cita {$a->sendername} en {$a->date} a las {$a->time} en {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Recordatorio de cita';
$string['appointment_reminder_teacher:digest:fullmessage'] = '¡Hola {$a->receivername}!

Mañana tiene las citas siguientes:

{$a->digest}

Sistema de Mensajería de Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Ha recibido un mensaje con el resumen de sus citas para mañana.';
$string['appointment_reminder_teacher:digest:subject'] = 'Resumen de citas';
$string['appointment_reminder_teacher:fullmessage'] = '¡Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, tiene una cita con estudiantes el {$a->date} a las {$a->time} en {$a->location}.

Sistema de Mensajería de Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = '¡Hola {$a->receivername}!

Mañana tiene las siguientes citas:

{$a->digest}

Sistema de Mensajería de Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Ha recibido un mensaje con el resumen de sus citas para mañana.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Resumen de citas';
$string['appointment_reminder_teacher:smallmessage'] = 'Tiene una cita con estudiantes el {$a->date} a las {$a->time} en {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Recordatorio de cita';
$string['appointmentcomments'] = 'Comentarios';
$string['appointmentcomments_help'] = 'Aquí puede añadirse información adicional acerca de las citas.';
$string['appointmentdatetime'] = 'Fecha y hora';
$string['assign'] = 'Asignar';
$string['assign_notify_student:fullmessage'] = '¡Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, {$a->sendername} le ha asignado una cita con {$a->slot_teacher} en {$a->date} a las {$a->time}.

Profesor: {$a->slot_teacher}
Lugar: {$a->slot_location}
Fecha: {$a->date} a las {$a->time}

Sistema de Mensajería de Moodle';
$string['assign_notify_student:group:fullmessage'] = '¡Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, {$a->sendername} le ha asignado una cita a su grupo {$a->groupname} con {$a->slot_teacher} el {$a->date} a las {$a->time}.

Profesor: {$a->slot_teacher}
Lugar: {$a->slot_location}
Fecha: {$a->date} at {$a->time}

Sistema de Mensajería de Moodle';
$string['assign_notify_student:group:smallmessage'] = 'Una cita con {$a->slot_teacher} el {$a->date} a las {$a->time} ha sido asignada a su grupo {$a->groupname} por {$a->sendername}.';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Cita asignada por el profesor';
$string['assign_notify_student:smallmessage'] = 'Una cita con {$a->slot_teacher} el {$a->date} a las {$a->time} le ha sido asignada por {$a->sendername}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Cita asignada por el profesor';
$string['configdigest_label'] = 'Enviar resumen de citas a los profesores';
$string['format'] = 'Formato';
$string['message_warning_no_slots_added'] = '¡Ninguna celda nueva añadida!';
$string['message_warning_no_slots_selected'] = '¡Debe seleccionar al menos una celda primero!';
$string['min'] = 'min';
$string['min_pl'] = 'mins';
$string['modformwarningplural'] = '¡Estos campos no pueden ser editados ya que hay citas ya concertadas en este organizador!';
$string['modformwarningsingular'] = '¡Este campo no puede ser editado ya que hay citas ya concertadas en este organizador!';
$string['modulename'] = 'Organizador';
$string['modulename_help'] = 'Los organizadores permiten que el profesor concierte citas con los estudiantes creando celdas de tiempo donde los estudiantes se pueden registrar.';
$string['modulenameplural'] = 'Organizadores';
$string['multimemberspecific'] = '¡El usuario {$a->username} {$a->idnumber} está registrado en más de un grupo! ({$a->groups})';
$string['mymoodle_app_slot'] = 'Cita el {$a->date} a las {$a->time}';
$string['mymoodle_attended'] = '{$a->attended}/{$a->total} estudiantes han completado una cita';
$string['mymoodle_attended_group_short'] = '{$a->attended}/{$a->total} grupos completos';
$string['mymoodle_completed_app'] = 'Usted asistió a su cita el {$a->date} a las  {$a->time}';
$string['mymoodle_completed_app_group'] = 'Su grupo {$a->groupname} asistió a la cita el {$a->date} a las {$a->time}';
$string['mymoodle_missed_app'] = 'Usted no asistió a la cita el {$a->date} a las {$a->time}';
$string['mymoodle_missed_app_group'] = 'Su grupo {$a->groupname} no asistió a la cita el {$a->date} a las {$a->time}';
$string['mymoodle_next_slot'] = 'Siguiente hueco el {$a->date} a las {$a->time}';
$string['mymoodle_no_reg_slot'] = 'No se ha registrado para una celda de tiempo aún';
$string['mymoodle_no_reg_slot_group'] = 'Su grupo {$a->groupname} no se ha registrado para una celda de tiempo aún';
$string['mymoodle_no_slots'] = 'Ninguna celda próxima';
$string['mymoodle_organizer_expired'] = 'Este organizador expiró el {$a->date} a las {$a->time}. Ya no lo puede usar más';
$string['mymoodle_organizer_expires'] = 'Este organizador expira el {$a->date} a las {$a->time}';
$string['mymoodle_pending_app'] = 'Su cita está pendiente de evaluación';
$string['mymoodle_pending_app_group'] = 'Su cita de grupo {$a->groupname} está pendiente de evaluación';
$string['mymoodle_reg_slot'] = 'Ya se ha registrado en una celda de tiempo';
$string['mymoodle_reg_slot_group'] = 'Su grupo {$a->groupname} ya se ha registrado en una celda de tiempo';
$string['mymoodle_registered'] = '{$a->registered}/{$a->total} estudiantes se han registrado para una cita';
$string['mymoodle_registered_group'] = '{$a->registered}/{$a->total} grupos se han registrado para una cita';
$string['mymoodle_registered_group_short'] = '{$a->registered}/{$a->total} grupos registrados';
$string['mymoodle_registered_short'] = '{$a->attended}/{$a->total} estudiantes registrados';
$string['mymoodle_upcoming_app'] = 'Su cita tendrá lugar el {$a->date} a las {$a->time} en {$a->location}';
$string['mymoodle_upcoming_app_group'] = 'Cita de su grupo, {$a->groupname}, tendrá lugar el {$a->date} a las {$a->time} en {$a->location}';
$string['newslot'] = 'Añadir más celdas';
$string['no_due_my_slots'] = 'Todas sus celdas de tiempo en este organizador han expirado';
$string['no_due_slots'] = 'Todas las celdas de tiempo creadas en este organizador han expirado.';
$string['no_my_slots'] = 'No tiene celdas creadas en este organizador';
$string['no_slots'] = 'No hay celdas de tiempo creadas en este organizador';
$string['no_slots_defined'] = 'No hay celdas de citas disponibles en este momento.';
$string['no_slots_defined_teacher'] = 'No hay celdas de citas presentes en este momento. Haga click <a href="{$a->link}">aquí</a> para crear alguna ahora.';
$string['nofreeslots'] = 'Ninguna celda libre.';
$string['nogroup'] = 'Ningún grupo';
$string['noparticipants'] = 'Ningún participante';
$string['norightpage'] = 'Usted no está autorizado para desplegar esta página.';
$string['noslots'] = 'No hay celdas para';
$string['noslotsselected'] = '¡Ninguna celda seleccionada!';
$string['notificationtime_help'] = 'Define con cuanta antelación hay que avisar a un estudiante antes de una cita registrada.';
$string['numentries'] = 'Entradas mostradas por página';
$string['numentries_help'] = 'Elija "óptimo" para optimizar la distribución de la lista de entradas de acuerdo con el tamaño de texto y orientación de página elegidos, si hay muchos participantes registrados en su curso';
$string['organizer'] = 'Organizador';
$string['organizer:addinstance'] = 'Añadir un nuevo organizador';
$string['organizer:addslots'] = 'Añadir nuevas celdas de tiempo';
$string['organizer:assignslots'] = 'Asignar celda de tiempo a un estudiante';
$string['organizer:comment'] = 'Añadir comentarios';
$string['organizer:deleteslots'] = 'Eliminar celdas de tiempo existentes';
$string['organizercommon'] = 'Ajustes de organizador';
