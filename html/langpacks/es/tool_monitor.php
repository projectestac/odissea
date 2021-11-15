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
 * Strings for component 'tool_monitor', language 'es', version '3.11'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Añadir una nueva regla';
$string['allevents'] = 'Todos los eventos';
$string['allmodules'] = 'Todas las instancias';
$string['area'] = 'Área';
$string['areatomonitor'] = 'Área para monitorizar';
$string['cachedef_eventsubscriptions'] = 'Esto almacena la lista de suscripciones a eventos para cursos individuales';
$string['contactadmin'] = 'Ponte en contacto con tu administrador para habilitarlo.';
$string['core'] = 'Core';
$string['currentsubscriptions'] = 'Sus suscripciones actuales';
$string['defaultmessagetemplate'] = 'Nombre de la regla: {rulename}<br />Descripción: {description}<br />Nombre del evento: {eventname}';
$string['deleterule'] = 'Eliminar regla';
$string['deletesubscription'] = 'Eliminar suscripción';
$string['description'] = 'Descripción:';
$string['disablefieldswarning'] = 'Algunos campos no se pueden editar ya que esta regla ya tiene suscripciones.';
$string['duplicaterule'] = 'Duplicar regla';
$string['editrule'] = 'Editar regla';
$string['enablehelp'] = 'Habilitar/deshabilitar monitorización de eventos';
$string['enablehelp_help'] = 'La monitorización de eventos debe habilitarse antes de que pueda crear suscripciones a reglas. Tenga en cuenta que habilitar la monitorización de eventos puede afectar al rendimiento de su sitio.';
$string['errorincorrectevent'] = 'Por favor seleccione un evento relacionado con el complemento seleccionado';
$string['event'] = 'Evento';
$string['eventnotfound'] = 'Evento no encontrado';
$string['eventrulecreated'] = 'Regla creada';
$string['eventruledeleted'] = 'Regla eliminada';
$string['eventruleupdated'] = 'Regla actualizada';
$string['eventsubcreated'] = 'Suscripción creada';
$string['eventsubcriteriamet'] = 'Se cumplen los criterios de suscripción';
$string['eventsubdeleted'] = 'Suscripción eliminada';
$string['freqdesc'] = '{$a->freq} veces en {$a->mins} minuto(s)';
$string['frequency'] = 'Umbral de notificación';
$string['frequency_help'] = 'El número de eventos necesarios dentro de un determinado período de tiempo para que se envíe un mensaje de notificación.';
$string['inminutes'] = 'En minutos';
$string['invalidmodule'] = 'Módulo no válido';
$string['manage'] = 'Gestionar';
$string['managerules'] = 'Reglas para monitorización de eventos';
$string['manageruleslink'] = 'Puede gestionar las reglas desde la página {$a}.';
$string['managesubscriptions'] = 'Monitorización de eventos';
$string['managesubscriptionslink'] = 'Puede suscribirse a las reglas desde la página de {$a}.';
$string['messageprovider:notification'] = 'Notificaciones de reglas de suscripción.';
$string['messagetemplate'] = 'Mensaje de notificación';
$string['messagetemplate_help'] = 'Un mensaje de notificación es enviado a los suscriptores una vez que se ha alcanzado el umbral de notificaciones. Puede incluir cualquiera o ninguno de los siguientes marcadores:

* Enlace a la localización del evento {link}
* Enlace al área monitorizada {modulelink}
* Nombre de la regla {rulename}
* Descripción {description}
* Evento {eventname}';
$string['moduleinstance'] = 'Instancia';
$string['monitor:managerules'] = 'Gestionar reglas de monitorización de eventos';
$string['monitor:managetool'] = 'Habilitad/Deshabilitar monitorización de eventos';
$string['monitor:subscribe'] = 'Suscribirse a reglas de monitorización de eventos';
$string['monitordisabled'] = 'La monitorización de eventos está actualmente deshabilitada.';
$string['monitorenabled'] = 'La monitorización de eventos está actualmente habilitada.';
$string['norules'] = 'No hay reglas para monitorizar eventos.';
$string['pluginname'] = 'Monitor de eventos';
$string['privacy:createdrules'] = 'Reglas de monitorización de eventos que yo creé';
$string['privacy:metadata:description'] = 'Descripción de la regla';
$string['privacy:metadata:eventname'] = 'Nombre completo del evento';
$string['privacy:metadata:frequency'] = 'Frecuencia de notificaciones';
$string['privacy:metadata:historysummary'] = 'Almacena el historial de los mensajes de notificación enviados';
$string['privacy:metadata:inactivedate'] = 'Período de tiempo, en días, tras el cual una suscripción inactiva será eliminada por completo';
$string['privacy:metadata:lastnotificationsent'] = 'Cuando se envío por última vez una notificación para esta suscripción.';
$string['privacy:metadata:messagesummary'] = 'Las notificaciones se envían al sistema de mensajes.';
$string['privacy:metadata:name'] = 'Nombre de la regla';
$string['privacy:metadata:plugin'] = 'Nombre Frankenstyle del complemento';
$string['privacy:metadata:rulessummary'] = 'Esto almacena reglas de monitorización.';
$string['privacy:metadata:subscriptionssummary'] = 'Almacena suscripciones de usuario a diferentes reglas';
$string['privacy:metadata:template'] = 'Plantilla de mensaje';
$string['privacy:metadata:timecreatedrule'] = 'Cuando se creó esta regla';
$string['privacy:metadata:timecreatedsub'] = 'Cuando se creó esta suscripción';
$string['privacy:metadata:timemodifiedrule'] = 'Cuando se modificó por última vez esta regla';
$string['privacy:metadata:timesent'] = 'Cuando se envió el mensaje';
$string['privacy:metadata:timewindow'] = 'Ventana de tiempo en segundos';
$string['privacy:metadata:userid'] = 'El ID del usuario que creó la regla.';
$string['privacy:metadata:useridhistory'] = 'El ID del usuario al que fue enviada esta notificación';
$string['privacy:metadata:useridsub'] = 'El ID del suscriptor.';
$string['privacy:subscriptions'] = 'Mis suscripciones al monitor de eventos';
$string['processevents'] = 'Procesar eventos';
$string['ruleareyousure'] = '¿Está seguro de que quiere eliminar la regla "{$a}"?';
$string['ruleareyousureextra'] = 'Hay {$a} suscripciones a esta regla que también se eliminarán.';
$string['rulecopysuccess'] = 'Regla duplicada con éxito';
$string['ruledeletesuccess'] = 'Regla eliminada con éxito';
$string['rulehelp'] = 'Detalles de la regla';
$string['rulehelp_help'] = 'Esta regla detecta el momento en el que el evento \'{$a->eventname}\' en \'{$a->eventcomponent}\' se produce {$a->frequency} veces en {$a->minutes} minuto(s).';
$string['rulename'] = 'Nombre de la regla';
$string['rulenopermission'] = 'No tiene permiso para suscribirse a ningún evento';
$string['rulenopermissions'] = 'No tiene permisos para "{$a} una regla"';
$string['rulescansubscribe'] = 'Reglas a las que se puede suscribir';
$string['selectacourse'] = 'Seleccione un curso';
$string['selectcourse'] = 'Visitar este informe de curso para obtener una lista de los posibles módulos';
$string['subareyousure'] = '¿Está seguro de que desea eliminar la suscripción a la regla "{$a}"?';
$string['subcreatesuccess'] = 'Suscripción creada con éxito';
$string['subdeletesuccess'] = 'Suscripción eliminada con éxito';
$string['subhelp'] = 'Detalles de la suscripción';
$string['subhelp_help'] = 'Esta suscripción detecta el momento en el que el evento \'{$a->eventname}\' se produce en \'{$a-> moduleinstance}\' {$a->frequency} veces en {$a->minutes} minuto(s).';
$string['subscribeto'] = 'Suscribirse a la regla "{$a}"';
$string['taskchecksubscriptions'] = 'Activar/desactivar las suscripciones a reglas no válidas';
$string['taskcleanevents'] = 'Limpiar eventos del monitor de eventos';
$string['unsubscribe'] = 'Cancelar suscripción';
