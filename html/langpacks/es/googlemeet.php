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
 * Strings for component 'googlemeet', language 'es', version '3.11'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clave de API';
$string['checkweekdays'] = 'Seleccionar los días de la semana dentro del rango de fecha seleccionado.';
$string['clientid'] = 'ID de cliente de OAuth 2.0';
$string['clientid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-the-API-key-and-OAuth-client-ID" target="_blank">Cómo crear la Clave de API y el ID de cliente de OAuth 2.0</a>';
$string['date'] = 'Fecha';
$string['duration'] = 'Duración';
$string['earlierto'] = 'La fecha del evento no puede ser antes que la fecha de inicio del curso ({$a}).';
$string['emailcontent'] = 'Contenido del email';
$string['emailcontent_default'] = '<p>Hola %userfirstname%,</p>
<p>Este es un recordatorio de que habrá un evento de Google Meet en %coursename%</p>
<p><b>%googlemeetname%</b></p>
<p>Cuando: %eventdate% %duration% %timezone%</p>
<p>Enlace de acceso: %url%</p>';
$string['emailcontent_help'] = 'Cuando se envía una notificación a un estudiante, se toma el contenido del Email de este campo. Se pueden usar los siguientes comodines:
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Entrar a la sala';
$string['eventdate'] = 'Fecha del evento';
$string['from'] = 'de';
$string['generateurlroom'] = 'Generar URL de Sala';
$string['googlemeet:addinstance'] = 'Añadir un nuevo Google Meet™ para Moodle';
$string['googlemeet:editrecording'] = 'Editar grabaciones';
$string['googlemeet:removerecording'] = 'Quitar grabaciones';
$string['googlemeet:syncgoogledrive'] = 'Sincronizar con Google Drive';
$string['googlemeet:view'] = 'Ver contenido de Google Meet™ para Moodle';
$string['hide'] = 'Ocultar';
$string['invalideventenddate'] = 'La fecha no puede ser anterior a la "Fecha del evento"';
$string['invalideventendtime'] = 'La fecha de fin debe ser posterior a la fecha de inicio';
$string['invalidstoredurl'] = 'No se puede mostrar este recurso, la URL de Google Meet es inválida.';
$string['jstableinfo'] = 'Mostrando de {start} a {end} de {rows} grabaciones';
$string['jstableinfofiltered'] = 'Mostrando de {principio} a {fin} de {filas} grabaciones (filtradas de {rowsTotal} grabaciones)';
$string['jstableloading'] = 'Cargando...';
$string['jstablenorows'] = 'No se encontraron grabaciones';
$string['jstableperpage'] = '{seleccionar} grabaciones por página';
$string['jstablesearch'] = 'Buscar...';
$string['lastsync'] = 'Última sincronización:';
$string['loading'] = 'Cargando';
$string['messageprovider:notification'] = 'Recordatorio de inicio de evento Google Meet';
$string['minutesbefore'] = 'Minutos antes';
$string['minutesbefore_help'] = 'Número de minutos antes del inicio del evento antes de enviar la notificación.';
$string['modulename'] = 'Google Meet™ para Moodle';
$string['modulename_help'] = 'El módulo Google Meet™ para Moodle permite a un profesor crear una sala de Google Meet como recurso del curso y, después de la reunión, hace disponibles a los estudiantes las grabaciones, guardadas en Google Drive.
<p>©2018 Google LLC Todos los derechos reservados.<br/>
Google Meet y el logo de Google Meet son marcas registradas de Google LLC.</p>';
$string['modulenameplural'] = 'Google Meet™ para instancias Moodle';
$string['multieventdateexpanded'] = 'Fecha de repetición del evento expandida';
$string['multieventdateexpanded_desc'] = 'Mostrar las configuraciones de "Repetición de la fecha del evento" como expandidas de forma predeterminada al crear una Sala nueva.';
$string['name'] = 'Nombre';
$string['never'] = 'Nunca';
$string['notfoundrecordingname'] = 'No se encontraron grabaciones con el nombre';
$string['notfoundrecordingsfolder'] = 'La carpeta "Meet Recordings" no fue encontrada en Google Drive.';
$string['notification'] = 'Notificación';
$string['notificationexpanded'] = 'Notificación expandida';
$string['notify'] = 'Enviar notificación al estudiante';
$string['notify_help'] = 'Si se activa, se enviará una notificación al estudiante acerca de la fecha de inicio del evento.';
$string['notifycationexpanded_desc'] = 'Mostrar las configuraciones de "Notificación" como expandidas de forma predeterminada al crear una Sala nueva.';
$string['notifytask'] = 'Trabajo de notificación de Google Meet™ for Moodle';
$string['notpossiblesync'] = 'No es posible sincronizar con una cuenta diferente de la usada para crear la sala.';
$string['or'] = 'o';
$string['play'] = 'Reproducir';
$string['pluginadministration'] = 'Administración de Google Meet™ para Moodle';
$string['pluginname'] = 'Google Meet™ para Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Guarda notificaciones enviadas a usuarios acerca del inicio de eventos. Estos datos son temporales  y son eliminados después de la fecha de inicio del evento.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'ID del evento';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'El sello de tiempo que indica cuando el usuario recibió una notificación';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'ID del usuario';
$string['recording'] = 'Grabación';
$string['recordings'] = 'Grabaciones';
$string['recordingswiththename'] = 'Grabaciones con el nombre:';
$string['recurrenceeventdate'] = 'Fecha de repetición del evento';
$string['recurrenceeventdate_help'] = 'Esta función hace posible la creación de múltiples repeticiones de la fecha del evento.
<br>* <strong>Repetir en</strong>: Seleccionar los días de la semana en que tu clase se reunirá (por ejemplo, Lunes / Miércoles / Viernes).
<br>* <strong>Repetir cada</strong>: permite ajustar la frecuencia. Si tu clase se va a reunir cada semana, selecciona 1; si se va a reunir cada dos semanas, selecciona 2; cada 3 semanas, selecciona 3, etc.
<br>* <strong>Repetir hasta</strong>: selecciona el último dia de reunión (el último día que deseas repetir la fecha del evento).';
$string['repeatasfollows'] = 'Repetir la fecha del evento de arriba como sigue';
$string['repeatevery'] = 'Repetir cada';
$string['repeaton'] = 'Repetir en';
$string['repeatuntil'] = 'Repetir hasta';
$string['requirednamefield'] = 'Escribir el nombre de la sala para crearla automáticamente.';
$string['roomcreator'] = 'Creador de la sala:';
$string['roomname'] = 'Nombre de la sala';
$string['roomurl'] = 'URL de la sala';
$string['roomurlexpanded'] = 'URL expandida de la sala';
$string['roomurlexpanded_desc'] = 'Mostrar configuraciones de "URL de sala" como expandidas de forma predeterminada al crear una nueva Sala.';
$string['show'] = 'Mostrar';
$string['strftimedm'] = '%a. %d %b.';
$string['strftimedmy'] = '%a. %d %b. %Y';
$string['strftimedmyhm'] = '%a. %d %b. %Y %H:%M';
$string['strftimehm'] = '%H:%M';
$string['syncwithgoogledrive'] = 'Sincronizar con Google Drive';
$string['thereisnorecordingtoshow'] = 'No hay grabaciones para mostrar.';
$string['timeahead'] = 'No es posible crear repeticiones múltiples de la fecha del evento que excedan un año, ajuste las fechas de inicio y fin.';
$string['timedate'] = '%d/%m/%Y %H:%M';
$string['to'] = 'a';
$string['today'] = 'Hoy';
$string['upcomingevents'] = 'Próximos eventos';
$string['url_failed'] = 'Se necesita una URL de Google Meet válida';
$string['visible'] = 'Visible';
$string['week'] = 'Semana(s)';
