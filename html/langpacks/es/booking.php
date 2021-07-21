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
 * Strings for component 'booking', language 'es', version '3.11'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Editar categorías';
$string['addeditbooking'] = 'Editar reservas';
$string['addmorebookings'] = 'Añadir más reservas';
$string['addnewbookingoption'] = 'Añadir una nueva opción de reserva';
$string['addnewcategory'] = 'Añadir nueva categoría';
$string['addnewinstitution'] = 'Añadir nueva Institución';
$string['address'] = 'Dirección';
$string['addteachers'] = 'Añadir docentes';
$string['addtocalendar'] = 'Añadir al calendario';
$string['addusertogroup'] = 'Añadir usuario/a al grupo';
$string['advancedoptions'] = 'Opciones avanzadas';
$string['aftercompletedtext_help'] = 'Deje esta opción en blanco para usar el texto predeterminado del sitio. Puede usar cualquiera de los siguientes marcadores de posición en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - Correo electrónico del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor; ejemplo: {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con el id de usuario</li>
<li>{qr_username} - Insertar código QR con el nombre de usuario</li>
<li>{times} - Tiempos de sesión</li>
<li>{shorturl} - Opción de url corta</li>
</ul>';
$string['agreetobookingpolicy'] = 'He leído y estoy de acuerdo con las siguientes políticas para reservas';
$string['allbookingoptions'] = 'Descargar usuarios para todas las opciones de reservas';
$string['allchangessave'] = 'Todos los cambios han sido guardados.';
$string['allcomments'] = 'Todos pueden comentar';
$string['allmailssend'] = '¡Todos los correos electrónicos a los usuarios han sido enviados!';
$string['allowdelete'] = 'Permitirle a los usuarios cancelar sus reservas ellos mismos';
$string['allowupdate'] = 'Permitir que se actualicen reservas';
$string['allratings'] = 'Todos pueden calificar';
$string['allusersbooked'] = 'Todos los {$a} usuarios seleccionados han sido asignados exitosamente a esta opción de reserva.';
$string['answer'] = 'Responder';
$string['answered'] = 'Contestado';
$string['associatedcourse'] = 'Curso asociado';
$string['attachedfiles'] = 'Archivos adjuntos';
$string['attachical'] = 'Adjuntar evento ical individual por reserva';
$string['attachicaldesc'] = 'Las notificaciones por correo electrónico incluirán un evento ical adjunto, si está habilitado. El ical incluirá solo una hora de inicio y una hora de finalización definidas en la configuración de la opción de reserva o en la hora de inicio de la primera sesión hasta la hora de finalización de la última sesión';
$string['attachicalsess'] = 'Adjunte todas las fechas de la sesión como eventos ical';
$string['attachicalsessdesc'] = 'Las notificaciones por correo electrónico incluirán todas las fechas de sesión definidas para una opción de reserva como ical adjunto.';
$string['autoenrol'] = 'Inscribir automáticamente usuarios';
$string['autoenrol_help'] = 'Si se selecciona, los usuarios se inscribirán en el curso correspondiente tan pronto como realicen la reserva y se darán de baja en ese curso tan pronto como se cancele la reserva.';
$string['availability'] = 'Todavía disponible';
$string['available'] = 'Lugares disponibles';
$string['backtoresponses'] = '<< Volver a las respuestas';
$string['banusernames'] = 'Prohibir nombres de usuario';
$string['banusernames_help'] = 'Para limitar qué nombres de usuario no se pueden aplicar, solo escriba en este campo y sepárelo con coma. Para prohibir los nombres de usuario, que terminan en gmail.com y yahoo.com solo escriba: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Tu nombre de usuario está prohibido por lo que no lo puede reservar.';
$string['beforebookedtext'] = 'Antes de reservar';
$string['beforebookedtext_help'] = 'Deje esto en blanco para usar el texto predeterminado del sitio. Puede usar cualquiera de los siguientes marcadores de posición en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - Correo electrónico del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor; ejemplo: {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con el id de usuario</li>
<li>{qr_username} - Insertar código QR con el nombre de usuario</li>
<li>{times} - Tiempos de sesión</li>
<li>{shorturl} - Opción de url corta</li>
</ul>';
$string['beforecompletedtext'] = 'Después de reservado';
$string['booked'] = 'Reservado';
$string['bookedtext'] = 'Confirmación de la reserva';
$string['bookedusers'] = 'Usuarios que reservaron';
$string['booking'] = 'Reservas';
$string['booking:addeditownoption'] = 'Añada una nueva opción y edite las propias opciones.';
$string['booking:addinstance'] = 'Añadir nueva reserva';
$string['booking:choose'] = 'Reservar';
$string['booking:comment'] = 'Añadir comentarios';
$string['booking:deleteresponses'] = 'Eliminar respuestas';
$string['booking:downloadresponses'] = 'Descargar respuestas';
$string['booking:managecomments'] = 'Administrar comentarios';
$string['booking:rate'] = 'Valorar las opciones de reserva elegidas';
$string['booking:readallinstitutionusers'] = 'Mostrar todos los usuarios';
$string['booking:readresponses'] = 'Leer respuestas';
$string['booking:sendpollurl'] = 'Enviar url de encuesta';
$string['booking:subscribeusers'] = 'Hacer reservas para otros usuarios';
$string['booking:updatebooking'] = 'Gestionar opciones de reserva';
$string['bookingattachment'] = 'Archivo adjunto';
$string['bookingcategory'] = 'Categoría';
$string['bookingclose'] = 'Hasta';
$string['bookingdeleted'] = 'Su reserva fue cancelada';
$string['bookingduration'] = 'Duración';
$string['bookingfull'] = 'No hay lugares disponibles';
$string['bookingfulldidntregister'] = '¡La opción está llena, así que no transferí todos los usuarios!';
$string['bookingmanagererror'] = 'El nombre de usuario introducido no es válido. O no existe o hay más de un usuario con este nombre de usuario (por ejemplo: si tiene activada la autenticación local y mnet)';
$string['bookingmeanwhilefull'] = 'Mientras tanto, alguien ocupó el último lugar disponible';
$string['bookingname'] = 'Nombre de reserva';
$string['bookingopen'] = 'Abierto';
$string['bookingoption_created'] = 'Opción de reserva creada';
$string['bookingoption_deleted'] = 'Opción de reserva borrada';
$string['bookingoption_updated'] = 'Opción de reserva actualizada';
$string['bookingoptionsmenu'] = 'Opciones de reserva';
$string['bookingorganizatorname'] = 'Nombre del organizador';
$string['bookingpolicy'] = 'Política de reservas';
$string['bookingpollurl'] = 'URL de encuesta';
$string['bookingpollurlteachers'] = 'URL de encuesta de profesores';
$string['bookingsaved'] = 'Su reserva fur guardada exitosamente. Usted puede ahora proceder a reservar otros cursos.';
$string['bookingtext'] = 'Texto de reserva';
$string['booknow'] = 'Reservar ahora';
$string['bookotherusers'] = 'Reservar otros usuarios';
$string['btnbooknowname'] = 'Nombre del botón "Reservar ahora"';
$string['btncacname'] = 'Nombre del botón "Confirmar la finalización de la actividad"';
$string['btncancelname'] = 'Nombre del botón "Cancelar Reserva"';
$string['cancancelbook'] = '¿Permitir al usuario cancelar o hacer su reserva cuando se inicia?';
$string['cancel'] = 'Cancelar';
$string['cancelbooking'] = 'Cancelar reserva';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryname'] = 'Nombre de la Categoría';
$string['choosecourse'] = 'Elija un curso';
$string['closed'] = 'Reservas cerradas';
$string['comments'] = 'Comentarios';
$string['completed'] = 'Completado';
$string['completionmodule'] = 'Actividad completada';
$string['confirmationmessage'] = 'Tu Reserva ha sido registrada

Estado de la reserva: {$a->status}
Participante:   {$a->participant}
Curso:   {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos tus cursos reservados haz clic en el siguiente enlace: {$a->bookinglink}
El curso asociado se puede encontrar aquí: {$a->courselink}';
$string['confirmationmessagesettings'] = 'Confirmación de ajustes de correo';
$string['confirmationmessagewaitinglist'] = 'Hola {$a->name}, Su solicitud de reserva ha sido registrada. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados, elija el enlace siguiente: {$a->link}';
$string['confirmationsubject'] = 'Confirmación de reserva para {$a->bookingname}';
$string['confirmationsubjectbookingmanager'] = 'Nueva reserva para {$a->bookingname} por {$a->name}';
$string['confirmationsubjectwaitinglist'] = 'Estatus de reserva para {$a->bookingname}';
$string['confirmationsubjectwaitinglistmanager'] = 'Status de reserva para {$a->bookingname}';
$string['confirmbookingoffollowing'] = 'Por favor confirme la reserva para el siguiente curso';
$string['confirmdeletebookingoption'] = '¿Realmente desea eliminar esta opción de reserva?';
$string['coursedate'] = 'Fecha';
$string['courseendtime'] = 'Hora de finalización del curso';
$string['coursestarttime'] = 'Hora de inicio del curso';
$string['createdby'] = 'Módulo de reservas hecho por edulabs.org';
$string['customfielddesc'] = 'Después de añadir un campo personalizado, puede definir el valor para el campo en la configuración de la opción de reserva. El valor se mostrará en la descripción de la opción de reserva.';
$string['customlabels'] = 'Etiquetas personalizadas';
$string['datenotset'] = 'Fecha no establecida';
$string['daystonotify'] = 'Cantidad de días antes del evento para notificar a los participantes';
$string['daystonotify2'] = 'Segunda notificación antes del inicio del evento para avisar a los participantes.';
$string['defaultbookingoption'] = 'Opciones por defecto para reservas';
$string['deletebooking'] = '¿Realmente desea des-inscribirse en el curso siguiente? <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Eliminar esta opción de reserva';
$string['deletecategory'] = 'Borrar';
$string['deletedbookingmessage'] = 'Reserva eliminada para el curso siguiente: {$a->bookingname} Usuario: {$a->name} Liga: {$a->link};';
$string['deletedbookingsubject'] = 'Reserva eliminada: {$a->bookingname} por {$a->name}';
$string['deletedbookingusermessage'] = 'Hola {$ a-> participant},

Su reserva para {$ a-> title} ({$ a-> startdate} {$ a-> starttime}) ha sido cancelada.';
$string['deletedbookingusersubject'] = 'Reserva para {$ a-> title} cancelada';
$string['deletedtext'] = 'Mensaje para reserva cancelada';
$string['deleterule'] = 'Borrar';
$string['deleteuserfrombooking'] = '¿Realmente desea eliminar los usuarios de la reserva?';
$string['donotselectcourse'] = 'No seleccionó curso';
$string['download'] = 'Descargar';
$string['downloadallresponses'] = 'Descargar todas las respuestas para todas las opciones de reservas';
$string['downloadusersforthisoptionods'] = 'Descargar usuarios como archivo .ODS';
$string['downloadusersforthisoptionxls'] = 'Descargar usuarios como archivo .XLS';
$string['duplicatebooking'] = 'Duplicar esta opción de reserva';
$string['editcategory'] = 'Editar';
$string['editrule'] = 'Editar';
$string['edittag'] = 'Editar';
$string['editteachers'] = 'Editar';
$string['editteacherslink'] = 'Editar Docentes';
$string['endtimenotset'] = 'Fecha final no configurada';
$string['error:failedtosendconfirmation'] = 'El usuario siguiente no recibió un correo de confirmación de Reserva. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Liga: {$a->link}';
$string['eventbooking_cancelled'] = 'Reserva cancelada';
$string['eventbookingoption_booked'] = 'Opción de reserva elegida';
$string['eventduration'] = 'Duración del evento';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['fillinatleastoneoption'] = 'Usted necesita proporcionar al menos dos posibles respuestas.';
$string['full'] = 'LLeno';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de participantes';
$string['mailconfirmationsent'] = 'Pronto recibirá un correo de confirmación';
$string['managebooking'] = 'Gestionar';
$string['maxoverbooking'] = 'Número máximo de lugares en lista de espera';
$string['maxparticipantsnumber'] = 'Número máximo de participantes';
$string['messagesend'] = 'Su mensaje ha sido enviado correctamente.';
$string['messagesubject'] = 'Asunto';
$string['modulename'] = 'Reserva';
$string['modulenameplural'] = 'Reservas';
$string['mustchooseone'] = 'Usted debe elegir una opción antes de guardar. Nada se guardó.';
$string['mustfilloutuserinfobeforebooking'] = 'Antes de proceder al formato para reserva, por favor llene algunos datos personales';
$string['nobookingselected'] = 'No se seleccionó opción de reserva';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden introducir datos';
$string['noresultsviewable'] = 'Los resultados no están visibles actualmente.';
$string['norighttobook'] = 'No es posible reservar para su rol de usuario. Por favor, contacte con el administrador del sitio para que le proporcione los permisos apropiados o entre al sitio.';
$string['notbooked'] = 'Aún no reservado';
$string['notopenyet'] = 'Lo sentimos, esta actividad no estará disponible hasta después de {$a}';
$string['onwaitinglist'] = 'Usted está en la lista de espera';
$string['pluginadministration'] = 'Administración de reservas';
$string['pluginname'] = 'Reserva';
$string['removeresponses'] = 'Quitar todas las respuestas';
$string['responses'] = 'Respuestas';
$string['responsesto'] = 'Respuestas a {$a}';
$string['select'] = 'Selección';
$string['sendconfirmmail'] = 'Mandar correo de confirmación';
$string['sendconfirmmailtobookingmanger'] = 'Mandar correo de confirmación al gestor de reservas';
$string['showallbookings'] = 'Mostrar vista general de reservas para todas las reservas';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['startendtimeknown'] = 'Las horas de principio y fin del curso son conocidas';
$string['starttimenotset'] = 'No se configuró fecha de inicio';
$string['statuschangebookedmessage'] = 'Hola {$a->name}, Su estatus de reserva ha cambiado. Usted está ahora registrado en {$a->bookingname}. Estatus de reserva: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados pulse el enlace siguiente: {$a->link}';
$string['statuschangebookedsubject'] = 'Estatus de reserva cambiado para {$a->bookingname}';
$string['submitandaddnew'] = 'Guardar y añadir nuevo';
$string['subscribetocourse'] = 'Inscribir usuarios al curso';
$string['subscribeuser'] = '¿Realmente quiere inscribir a los usuarios en el curso siguiente?';
$string['taken'] = 'Tomado';
$string['timerestrict'] = 'Restringir respuestas a este lapso de tiempo';
$string['unlimited'] = 'Ilimitado';
$string['updatebooking'] = 'Editar esta opción de reserva';
$string['userdownload'] = 'Descargar usuarios';
$string['usernameofbookingmanager'] = 'Username del gestpr de reservas';
$string['viewallresponses'] = 'Gestionar {$a} respuestas';
$string['waitinglisttaken'] = 'En la lista de espera';
$string['waitinglistusers'] = 'Usuarios en lista de espera';
$string['waitingplacesavailable'] = 'Plazas disponibles en lista de espera';
$string['waitspaceavailable'] = 'Plazas en lista de espera disponibles';
$string['withselected'] = 'Con usuarios seleccionados:';
$string['yourselection'] = 'Su selección';
