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
 * Strings for component 'assign', language 'es', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:submissionsdue'] = 'Cierre:';
$string['activitydate:submissionsopen'] = 'Apertura:';
$string['activitydate:submissionsopened'] = 'Apertura:';
$string['activityoverview'] = 'Hay tareas que requieren atención';
$string['addattempt'] = 'Permitir otro intento';
$string['addnewattempt'] = 'Añadir una nueva entrega';
$string['addnewattempt_help'] = 'Se creará una nueva entrega en blanco para poder trabajar.';
$string['addnewattemptfromprevious'] = 'Añadir un nuevo intento basado en el envío anterior';
$string['addnewattemptfromprevious_help'] = 'Se copiará el contenido de la entrega anterior a una nueva para poder trabajar a partir de ella.';
$string['addnewgroupoverride'] = 'Añadir excepción de grupo';
$string['addnewuseroverride'] = 'Añadir excepción de usuario';
$string['addsubmission'] = 'Agregar entrega';
$string['addsubmission_help'] = 'Todavía no has realizado una entrega.';
$string['allocatedmarker'] = 'Evaluador asignado';
$string['allocatedmarker_help'] = 'Evaluador asignado a esta entrega.';
$string['allowsubmissions'] = 'Permitir al usurio continuar haciendo entregas a esta tarea';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles de la tarea y el formulario de entregas estarán disponibles en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permitir entregas desde';
$string['allowsubmissionsfromdate_help'] = 'Si está habilitado, los estudiantes no podrán hacer entregas antes de esta fecha. Si está deshabilitado, los estudiantes podrán comenzar las entregas de inmediato.';
$string['allowsubmissionsfromdatesummary'] = 'Esta tarea aceptará entregas desde el <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permitir cambios en la entrega';
$string['alwaysshowdescription'] = 'Mostrar siempre la descripción';
$string['alwaysshowdescription_help'] = 'Si está deshabilitada, la descripción de la tarea anterior solo será visible para los estudiantes en la fecha "Permitir envíos desde".';
$string['applytoteam'] = 'Aplicar las mismas calificaciones y comentarios al grupo completo';
$string['assign:addinstance'] = 'Añadir una nueva tarea';
$string['assign:editothersubmission'] = 'Editar la entrega de otro estudiante';
$string['assign:exportownsubmission'] = 'Exportar entrega propia';
$string['assign:grade'] = 'Calificar tarea';
$string['assign:grantextension'] = 'Ampliar plazo';
$string['assign:manageallocations'] = 'Gestionar evaluadores asignados a entregas';
$string['assign:managegrades'] = 'Revisión y publicación de calificaciones';
$string['assign:manageoverrides'] = 'Administrar las excepciones en tareas';
$string['assign:receivegradernotifications'] = 'Recibir notificaciones de envíos del calificador';
$string['assign:releasegrades'] = 'Publicación de calificaciones';
$string['assign:revealidentities'] = 'Mostrar las identidades de los estudiantes';
$string['assign:reviewgrades'] = 'Revisión de calificaciones';
$string['assign:showhiddengrader'] = 'Ver la identidad de un evaluador oculto';
$string['assign:submit'] = 'Enviar tarea';
$string['assign:view'] = 'Ver tarea';
$string['assign:viewblinddetails'] = 'Ver identidad de estudiantes cuando se habiliten envíos anónimos';
$string['assign:viewgrades'] = 'Ver calificaciones';
$string['assign:viewownsubmissionsummary'] = 'Ver resumen de envíos propios';
$string['assignfeedback'] = 'Extensión de retroalimentación';
$string['assignfeedbackpluginname'] = 'Extensión de retroalimentación';
$string['assignmentisdue'] = 'Tarea pendiente';
$string['assignmentmail'] = '{$a->grader} ha hecho un comentario de  retroalimentación en su entrega de la tarea {$a->assignment}.

Puede verla adjunta a su entrega en

   {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} ha hecho un comentario de  retroalimentación en su entrega de la tarea
\'<i>{$a->assignment}</i>\'.</p>
<p>Puede verla adjunta a su entrega en  <a href="{$a->url}">entrega de tarea</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} ha hecho un comentario de  retroalimentación en su entrega de la tarea {$a->assignment}.

Puede verla adjunta a su entrega';
$string['assignmentname'] = 'Nombre de la tarea';
$string['assignmentplugins'] = 'Extensiones de tarea';
$string['assignmentsperpage'] = 'Tareas por página';
$string['assignsubmission'] = 'Extensión de entregas';
$string['assignsubmissionpluginname'] = 'Extensión de entregas';
$string['attemptheading'] = 'Intento {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Intentos previos';
$string['attemptnumber'] = 'Número del intento';
$string['attemptreopenmethod'] = 'Intentos adicionales';
$string['attemptreopenmethod_help'] = 'Esta configuración determina si un alumno puede realizar intentos adicionales en la tarea. Para cada intento, la calificación y los comentarios se guardan y pueden ser vistos por el profesor y el alumno. Las opciones disponibles son:

* Nunca: solo es posible un intento.
* Manualmente: un profesor puede permitir intentos adicionales.
* Automáticamente hasta aprobar: se permiten intentos adicionales automáticamente hasta que el alumno alcance la calificación para aprobar establecida en el libro de calificaciones para esta tarea.';
$string['attemptreopenmethod_manual'] = 'Manual';
$string['attemptreopenmethod_none'] = 'Nunca';
$string['attemptreopenmethod_untilpass'] = 'Automática hasta aprobar';
$string['attemptsettings'] = 'Configuración de intentos';
$string['availability'] = 'Disponibilidad';
$string['backtoassignment'] = 'Volver a la tarea';
$string['batchoperationconfirmaddattempt'] = '¿Permitir otro intento para las entregas seleccionadas?';
$string['batchoperationconfirmdownloadselected'] = '¿Descargar los envíos seleccionados?';
$string['batchoperationconfirmgrantextension'] = '¿Ampliar el plazo a todas las seleccionadas?';
$string['batchoperationconfirmlock'] = '¿Bloquear todas las entregas seleccionadas?';
$string['batchoperationconfirmremovesubmission'] = '¿Eliminar las entregas seleccionadas?';
$string['batchoperationconfirmreverttodraft'] = 'Revertir las entregas seleccionadas a borrador?';
$string['batchoperationconfirmsetmarkingallocation'] = '¿Establecer asignación de evaluadores para todas las entregas seleccionadas?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = '¿Establecer estado del workflow (flujo de trabajo) de calificaciones para todas las entregas seleccionadas?';
$string['batchoperationconfirmunlock'] = '¿Desbloquear todas las entregas seleccionadas?';
$string['batchoperationlock'] = 'bloquear entregas';
$string['batchoperationreverttodraft'] = 'revertir entregas a borrador';
$string['batchoperationsdescription'] = 'Con las seleccionadas...';
$string['batchoperationunlock'] = 'desbloquear entregas';
$string['batchsetallocatedmarker'] = 'Establecer evaluador asignado para {$a} usuario(s) seleccionado(s)';
$string['batchsetmarkingworkflowstateforusers'] = 'Establecer estado del workflow (flujo de trabajo) de calificaciones para {$a} usuario(s) seleccionado(s)';
$string['blindmarking'] = 'Envíos anónimos';
$string['blindmarking_help'] = 'Los envíos anónimos ocultan la identidad de los estudiantes de los marcadores. La configuración de envío anónimo se bloqueará una vez que se haya realizado un envío o calificación en relación con esta tarea.';
$string['blindmarkingenabledwarning'] = 'Los envíos anónimos están habilitados para esta actividad. Las calificaciones no se agregarán al libro de calificaciones hasta que se revelen las identidades de los estudiantes a través del menú de acciones de calificación.';
$string['cachedef_overrides'] = 'Información de anulación de usuarios y grupos';
$string['calendardue'] = 'Vencimiento de {$a}';
$string['calendargradingdue'] = '{$a} se debe calificar';
$string['changefilters'] = 'Cambiar filtros';
$string['changeuser'] = 'Cambiar usuario';
$string['choosegradingaction'] = 'Acción sobre las calificaciones';
$string['choosemarker'] = 'Seleccione...';
$string['chooseoperation'] = 'Elija operación';
$string['clickexpandreviewpanel'] = 'Hacer click para expandir el panel de revisión';
$string['collapsegradepanel'] = 'Contraer el panel de calificación';
$string['collapsereviewpanel'] = 'Contraer el panel de revisión';
$string['comment'] = 'Comentario';
$string['completiondetail:submit'] = 'Hacer un envío';
$string['completionsubmit'] = 'El estudiante debe entregar esta actividad para completarla';
$string['configshowrecentsubmissions'] = 'Todos pueden ver las notificaciones de las entregas en los informes de actividad reciente.';
$string['confirmbatchgradingoperation'] = '¿Está seguro que quiere {$a->operation} a  {$a->count} estudiantes?';
$string['confirmsubmission'] = '¿Está seguro que quiere enviar su trabajo para que sea evaluado? Una vez enviado ya no podrá realizar modificaciones.';
$string['confirmsubmissionheading'] = 'Confirmar envío';
$string['conversionexception'] = 'No se pudo convertir tarea. La excepción fue: {$a}';
$string['couldnotconvertgrade'] = 'No se pudo convertir la calificación de la tarea del usuario {$a}.';
$string['couldnotconvertsubmission'] = 'No se pudo convertir la calificación de la entrega a la tarea del usuario {$a}.';
$string['couldnotcreatecoursemodule'] = 'No se puede crear módulo de curso';
$string['couldnotcreatenewassignmentinstance'] = 'No se pudo crear nueva instancia tarea.';
$string['couldnotfindassignmenttoupgrade'] = 'No se pudo encontrar instancias de tarea anteriores para actualizar.';
$string['crontask'] = 'Procesamiento en segundo plano para módulo Tarea';
$string['currentassigngrade'] = 'Calificación actual en tarea';
$string['currentattempt'] = 'Este es el intento {$a}.';
$string['currentattemptof'] = 'Este es el intento {$a->attemptnumber} ( {$a->maxattempts} intentos permitidos ).';
$string['currentgrade'] = 'Calificación actual en el libro de calificaciones';
$string['cutoffdate'] = 'Fecha límite';
$string['cutoffdate_help'] = 'Si se activa la opción, no se aceptarán entregas de tareas después de esta fecha sin una ampliación.';
$string['cutoffdatecolon'] = 'Fecha límite: {$a}';
$string['cutoffdatefromdatevalidation'] = 'La fecha límite no puede ser anterior a la fecha de \'Permitir envíos a partir de\'.';
$string['cutoffdatevalidation'] = 'La fecha límite no puede ser anterior a la fecha de entrega.';
$string['defaultlayout'] = 'Restaurar la disposición original';
$string['defaultsettings'] = 'Parámetros por defecto de la tareas';
$string['defaultsettings_help'] = 'Estos parámetros definen los valores por defecto para todas las nuevas tareas.';
$string['defaultteam'] = 'Grupo predeterminado';
$string['deleteallsubmissions'] = 'Borrar todas las entregas';
$string['description'] = 'Descripción';
$string['disabled'] = 'Desactivado';
$string['downloadall'] = 'Descargar todas las entregas';
$string['downloadasfolders'] = 'Descargar envíos en carpetas';
$string['downloadasfolders_help'] = 'Los envíos de tareas se pueden descargar en carpetas. Luego, cada envío se coloca en una carpeta separada, con la estructura de carpetas que se mantiene para las subcarpetas y no se cambia el nombre de los archivos.';
$string['downloadselectedsubmissions'] = 'Descargar los envíos seleccionados';
$string['duedate'] = 'Fecha de entrega';
$string['duedate_help'] = 'Esta es la fecha cuando se debería de entregar la tarea. Los envíos seguirán siendo permitidos aún después de esta fecha de entrega, pero cualquier envío mandado después de esta fecha será marcado como \'retrasado\'. Configure una fecha límite  para evitar envíos después de una cierta fecha.';
$string['duedatecolon'] = 'Fecha de vencimiento: {$a}';
$string['duedateno'] = 'No hay fecha de entrega';
$string['duedatereached'] = 'La fecha de vencimiento de esta tarea ya ha pasado';
$string['duedatevalidation'] = 'La fecha de vencimiento no puede ser anterior a la fecha permitida para las entregas.';
$string['duplicateoverride'] = 'Anular el duplicado';
$string['editaction'] = 'Acciones...';
$string['editattemptfeedback'] = 'Edite la calificación y la retroalimentación para el intento número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Está editando la retroalimentación para un intento anterior. Este es el intento {$a->attemptnumber} de {$a->totalattempts}.';
$string['editingstatus'] = 'Edición de estado';
$string['editonline'] = 'Editar online';
$string['editoverride'] = 'Editar excepción';
$string['editsubmission'] = 'Editar entrega';
$string['editsubmission_help'] = 'Aún puede realizar cambios en su envío.';
$string['editsubmissionother'] = 'Editar entrega para {$a}';
$string['enabled'] = 'Habilitado';
$string['errornosubmissions'] = 'No hay entregas que descargar';
$string['errorquickgradingvsadvancedgrading'] = 'No se guardaron las calificaciones porque esta tarea usa actualmente la calificación avanzada';
$string['errorrecordmodified'] = 'Las calificaciones no se guardaron porque alguien acaba de modificar uno o más registros, antes de que usted terminara de cargar la página';
$string['eventallsubmissionsdownloaded'] = 'Todos los envíos se están descargando.';
$string['eventassessablesubmitted'] = 'Se ha enviado una entrega';
$string['eventbatchsetmarkerallocationviewed'] = 'Asignación de marcador de conjunto de lote vista';
$string['eventbatchsetworkflowstateviewed'] = 'Estado del Flujograma de configuración masiva vista.';
$string['eventextensiongranted'] = 'Se ha entregado una extensión.';
$string['eventfeedbackupdated'] = 'Retroalimentación actualizada';
$string['eventfeedbackviewed'] = 'Retroalimentación vista';
$string['eventgradingformviewed'] = 'Formulario de calificaciones visto';
$string['eventgradingtableviewed'] = 'Visualización de las Calificaciones';
$string['eventidentitiesrevealed'] = 'Se han revelado las identidades.';
$string['eventmarkerupdated'] = 'El evaluador asignado ha sido actualizado';
$string['eventoverridecreated'] = 'Anulación de tarea creada';
$string['eventoverridedeleted'] = 'Anulación de tarea eliminada';
$string['eventoverrideupdated'] = 'Anulación de tarea  actualizada';
$string['eventremovesubmissionformviewed'] = 'Borrar la confirmación de envío visualizada.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Página de confirmación de revelación de identidades vista';
$string['eventstatementaccepted'] = 'El usuario ha aceptado la declaración del envío.';
$string['eventsubmissionconfirmationformviewed'] = 'Formulario de confirmación de entrega visto.';
$string['eventsubmissioncreated'] = 'Entrega creada.';
$string['eventsubmissionduplicated'] = 'El usuario ha duplicado su envío.';
$string['eventsubmissionformviewed'] = 'Formulario de entrega visto.';
$string['eventsubmissiongraded'] = 'Se ha calificado el envío.';
$string['eventsubmissionlocked'] = 'Los envíos han sido bloqueados para un usuario.';
$string['eventsubmissionstatusupdated'] = 'El estado de la entrega se ha actualizado.';
$string['eventsubmissionstatusviewed'] = 'Se ha visualizado el estado de la entrega.';
$string['eventsubmissionunlocked'] = 'Las entregas se han desbloqueado para un usuario.';
$string['eventsubmissionupdated'] = 'Envío actualizado.';
$string['eventsubmissionviewed'] = 'Envío visto.';
$string['eventworkflowstateupdated'] = 'El estado del flujo de trabajo ha sido actualizado.';
$string['expandreviewpanel'] = 'Expandir panel de revisión';
$string['extensionduedate'] = 'Ampliar plazo';
$string['extensionnotafterduedate'] = 'La fecha de ampliación de plazo debe ser posterior a la de entrega de la tarea';
$string['extensionnotafterfromdate'] = 'El plazo extra debe ser posterior a la fecha permitida para el envío';
$string['feedback'] = 'Comentario';
$string['feedbackavailableanonhtml'] = 'Tiene un nuevo comentario en su entrega para la tarea \'<i>{$a->assignment}</i>\'<br /><br />
Puede verla junto a su <a href="{$a->url}">entrega de la tarea</a>.';
$string['feedbackavailableanonsmall'] = 'Nuevo comentario para la tarea {$a->assignment}';
$string['feedbackavailableanontext'] = 'Tiene un nuevo comentario en su entrega de la tarea \'{$a->assignment}\'

Puede verlo junto a su envio de la tarea

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} ha aportado alguna retroalimentación en su entrega de la tarea \'<i>{$a->assignment}</i>\'<br /><br /> Puede verla añadida <a href="{$a->url}">a su entrega</a>.';
$string['feedbackavailablesmall'] = '{$a->username} ha hecho un comentario en la tarea {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} ha hecho un comentario de  retroalimentación en su entrega de la tarea {$a->assignment}.

Puede verla adjunta a su entrega en

   {$a->url}';
$string['feedbackplugin'] = 'Extensión de retroalimentacion';
$string['feedbackpluginforgradebook'] = 'Extensión de retroalimentación que sube los comentarios al libro de calificaciones';
$string['feedbackpluginforgradebook_help'] = 'Solo una extensión de retroalimentación de la tarea puede introducir los comentarios en el libro de calificaciones.';
$string['feedbackplugins'] = 'Extensiones de retroalimentacion';
$string['feedbacksettings'] = 'Ajustes de la retroalimentación';
$string['feedbacktypes'] = 'Tipos de retroalimentación';
$string['filesubmissions'] = 'Ficheros de entrega';
$string['filter'] = 'Filtro';
$string['filterdraft'] = 'Borrador';
$string['filtergrantedextension'] = 'Plazo ampliado';
$string['filternone'] = 'Sin filtro';
$string['filternotsubmitted'] = 'No enviado';
$string['filterrequiregrading'] = 'Requiere calificación';
$string['filtersubmitted'] = 'Enviada';
$string['fixrescalednullgrades'] = 'Esta tarea contiene algunas calificaciones erróneas. Usted puede <a href="{$a->link}">corregir automáticamente estas calificaciones</a>. Esto podría afectar los totales del curso.';
$string['fixrescalednullgradesconfirm'] = '¿ Está seguro de querer corregir calificaciones erróneas ? Todas las calificaciones afectadas serán eliminadas. Esto podría afectar los totales del curso.';
$string['fixrescalednullgradesdone'] = 'Calificaciones corregidas.';
$string['gradeabovemaximum'] = 'La calificación debe ser menor o igual que {$a}';
$string['gradebelowzero'] = 'La calificación deve ser igual o menos que {$a}';
$string['gradecanbechanged'] = 'La calificación puede ser cambiada';
$string['gradechangessaveddetail'] = 'Los cambios a la calificación y a la retroalimentación fueron guardados';
$string['graded'] = 'Calificado';
$string['gradedby'] = 'Calificado por';
$string['gradedfollowupsubmit'] = 'Calificado - envío de seguimiento recibido';
$string['gradedon'] = 'Calificado sobre';
$string['gradeitem:submissions'] = 'Entregas';
$string['gradelocked'] = 'Esta calificación está bloqueada o ha sido modificada en el libro de calificaciones';
$string['gradeoutof'] = 'Calificación sobre {$a}';
$string['gradeoutofhelp'] = 'Revisar';
$string['gradeoutofhelp_help'] = 'Introduzca aquí la calificación para las entregas del estudiante. Puede utilizar decimales.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} ha actualizado la entrega de su tarea a
<i>\'{$a->assignment}\'</i><br /><br />
Está <a href="{$a->url}">disponible en el sitio web</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} ha actualizado su entrega a la tarea  {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} ha actualizado la entrega de su tarea
a \'{$a->assignment}\' en {$a->timeupdated}

Está disponible aquí:

{$a->url}';
$string['gradestudent'] = 'Calificación del estudiante: (id={$a->id}, fnombre completo={$a->fullname}).';
$string['gradeuser'] = 'Calificar {$a}';
$string['grading'] = 'Calificando';
$string['gradingchangessaved'] = 'Los cambios en la calificación se han guardado';
$string['gradingduedate'] = 'Recordarme calificar en';
$string['gradingduedate_help'] = 'Fecha prevista en que todas las tareas quedarán entregadas. Se utilizará como fecha de revisión de tareas en el tablero de profesores.';
$string['gradingdueduedatevalidation'] = 'La fecha recordarme calificar en no puede ser anterior a la fecha de entrega';
$string['gradingduefromdatevalidation'] = 'La fecha recordarme calificar en no puede ser anterior a la de permitir entregas desde';
$string['gradingmethodpreview'] = 'Criterio de calificación';
$string['gradingoptions'] = 'Opciones';
$string['gradingstatus'] = 'Estado de la calificación';
$string['gradingstudent'] = 'Calificando estudiante';
$string['gradingsummary'] = 'Sumario de calificaciones';
$string['grantextension'] = 'Ampliar plazo';
$string['grantextensionforusers'] = 'Ampliar plazo para {$a} estudiantes';
$string['groupoverrides'] = 'Excepciones de grupo';
$string['groupoverridesdeleted'] = 'Excepción de grupo eliminada';
$string['groupsnone'] = 'No hay grupos a los que pueda acceder.';
$string['groupsubmissionsettings'] = 'Configuración de entrega por grupo';
$string['hiddenuser'] = 'Participante';
$string['hidegrader'] = 'Ocultar la identidad del evaluador a los estudiantes';
$string['hidegrader_help'] = 'Si está habilitado, la identidad de cualquier usuario que califique una entrega de la tarea no es mostrada, por lo que los estudiantes no pueden ver quien puntúa su trabajo,

Observe que este ajuste no tiene efecto en la caja de comentarios en la página de calificación.';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['inactiveoverridehelp'] = '* Esta anulación está inactiva porque el acceso del usuario a la actividad está restringido. Esto puede ser debido a asignaciones de grupo o de rol, otras restricciones de acceso, o porque la actividad esté oculta.';
$string['indicator:cognitivedepth'] = 'Tarea cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador se basa en la profundidad cognitiva alcanzada por el alumno en una actividad de asignación.';
$string['indicator:cognitivedepthdef'] = 'Tarea cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Tarea durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver realimentación, Comentar en realimentación, Reenviar después de ver realimentación)';
$string['indicator:socialbreadth'] = 'Tarea social';
$string['indicator:socialbreadth_help'] = 'Este indicador se basa en la amplitud social alcanzada por el alumno en una actividad de asignación.';
$string['indicator:socialbreadthdef'] = 'Tarea social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Tarea durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['instructionfiles'] = 'Archivos de instrucciones';
$string['introattachments'] = 'Archivos adicionales';
$string['introattachments_help'] = 'Pueden añadirse archivos adicionales para ser utilizados en la tarea, por ejemplo, como plantilla de respuesta. Los enlaces para descargar estos archivos se muestran debajo de la descripción de la tarea.';
$string['invalidfloatforgrade'] = 'La calificación proporcionada podría no entenderse: {$a}';
$string['invalidgradeforscale'] = 'La calificación proporcionada no era válida para la escala definida';
$string['invalidoverrideid'] = 'Id de excepción inválido';
$string['lastmodifiedgrade'] = 'Última modificación (calificación)';
$string['lastmodifiedsubmission'] = 'Última modificación (entrega)';
$string['latesubmissions'] = 'Entrega fuera de plazo';
$string['latesubmissionsaccepted'] = 'Permitido hasta {$a}';
$string['loading'] = 'Cargando...';
$string['locksubmissionforstudent'] = 'Evita nuevas entregas del estudiante: (id={$a->id}, nombre={$a->fullname}).';
$string['locksubmissions'] = 'Bloquear entregas';
$string['manageassignfeedbackplugins'] = 'Gestionar extensiones de retroalimentación de tareas';
$string['manageassignsubmissionplugins'] = 'Gestionar extensiones de entrega en tareas';
$string['marker'] = 'Evaluador';
$string['markerfilter'] = 'Filtro por evaluador';
$string['markerfilternomarker'] = 'Sin evaluador';
$string['markingallocation'] = 'Usar asignación de evaluadores';
$string['markingallocation_help'] = 'Si está habilitado junto con el flujo de trabajo de calificaciones, permite que los evaluadores sean asignados a alumnos individuales.';
$string['markingworkflow'] = 'Usar workflow (flujo de trabajo) de calificaciones';
$string['markingworkflow_help'] = 'Si se habilita, las calificaciones pasan por una serie de etapas en un flujo de trabajo antes de ser publicadas para los estudiantes. Esto permite calificar en sucesivas rondas y que todas las calificaciones se entreguen a todos los alumnos al mismo tiempo.';
$string['markingworkflowstate'] = 'Estado del workflow (flujo de trabajo) de calificaciones';
$string['markingworkflowstate_help'] = 'Posibles estados del flujo de trabajo de calificaciones (puede no tenerlos todos, dependiendo de sus permisos):

* No calificada - El evaluador aún no ha comenzado a calificar
* En proceso de calificación - El evaluador ha comenzado, pero aún no ha terminado de calificar
* Calificación terminada - El evaluador ha terminado de calificar, pero puede volver a comprobar o corregir
* En revisión - El profesor encargado está comprobando la calidad de la calificación
* Lista para publicar - El profesor encargado está conforme con la calificación, pero esperando antes de dar acceso a los estudiantes
* Publicada - el estudiante puede acceder a la calificación/retroalimentación';
$string['markingworkflowstateinmarking'] = 'En proceso de calificación';
$string['markingworkflowstateinreview'] = 'En revisión';
$string['markingworkflowstatenotmarked'] = 'No calificada';
$string['markingworkflowstatereadyforrelease'] = 'Lista para publicar';
$string['markingworkflowstatereadyforreview'] = 'Calificación terminada';
$string['markingworkflowstatereleased'] = 'Publicada';
$string['maxattempts'] = 'Número máximo de intentos';
$string['maxattempts_help'] = 'El número máximo de intentos de envío que puede realizar un estudiante. Una vez que se haya alcanzado este número, el envío ya no se podrá volver a abrir.';
$string['maxgrade'] = 'Calificación máxima';
$string['maxperpage'] = 'Máximo número de entregas por página';
$string['maxperpage_help'] = 'El número máximo de tareas que un calificador puede mostrar en la página de calificación de tareas. Esta configuración es útil para evitar tiempos de espera para cursos con una gran cantidad de participantes.';
$string['messageprovider:assign_notification'] = 'Notificaciones de tareas';
$string['modulename'] = 'Tarea';
$string['modulename_help'] = 'El módulo de Tareas permite a un profesor evaluar el aprendizaje de los alumnos mediante la creación de una tarea a realizar que luego revisará, valorará, calificará y a la que podrá dar retroalimentación.

Los alumnos pueden presentar cualquier contenido digital, como documentos de texto, hojas de cálculo, imágenes, audio y vídeos entre otros. Alternativamente, o como complemento, la tarea puede requerir que los estudiantes escriban texto directamente en un campo utilizando el editor de texto.
Una tarea también puede ser utilizada para recordar a los estudiantes tareas del "mundo real" que necesitan realizar y que no requieren la entrega de ningún tipo de contenido digital. Por ejemplo, presentaciones orales, prácticas de laboratorio, etc.

Para tareas en grupo, el modulo tiene la capacidad de aceptar tareas de uno de los miembros del grupo y que está quede vinculada al resto.

Durante el proceso de revisión los profesores pueden dejar comentarios y subir archivos, tales como trabajos calificados, documentos con observaciones escritas. Las tareas  pueden ser calificadas usando una escala numérica o una escala personalizada; o usando métodos de calificación complejos como rúbricas. Las calificaciones finales se actualizan automáticamente en el módulo de calificaciones.';
$string['modulenameplural'] = 'Tareas';
$string['moreusers'] = '{$a} más...';
$string['multipleteams'] = 'Miembro de más de un grupo.';
$string['multipleteams_desc'] = 'Esta tarea requiere entrega por grupos. Usted es miembro de más de un grupo. Para poder realizar entregas debe ser miembro solamente de un grupo. Por favor, contacte con su profesor para que modifique su pertenencia a grupos.';
$string['multipleteamsgrader'] = 'Miembro de más de un grupo, por lo que no puede añadir entregas.';
$string['mysubmission'] = 'Mi entrega:';
$string['newsubmissions'] = 'Tareas enviadas';
$string['nextuser'] = 'Siguiente usuario';
$string['noattempt'] = 'No entregado';
$string['noclose'] = 'Sin fecha de cierre';
$string['nofiles'] = 'Sin archivos';
$string['nofilters'] = 'Sin filtros';
$string['nograde'] = 'Sin calificación';
$string['nolatesubmissions'] = 'No se aceptan entregas fuera de plazo.';
$string['nomoresubmissionsaccepted'] = 'Permitido solo para miembros que han recibido una extensión';
$string['none'] = 'Ninguna';
$string['noonlinesubmissions'] = 'Esta tarea no requiere que usted envíe nada de forma online';
$string['noopen'] = 'Sin fecha de apertura';
$string['nooverridedata'] = 'Al menos uno de los ajustes de la tarea debe ser distinto del predeterminado.';
$string['nosavebutnext'] = 'Siguiente';
$string['nosubmission'] = 'No se ha enviado nada en esta tarea';
$string['nosubmissionsacceptedafter'] = 'No se aceptan entregas después de';
$string['noteam'] = 'No perteneces a ningún grupo.';
$string['noteam_desc'] = 'Esta tarea requiere entrega por grupos. Usted no es miempro de ningún grupo, así que no puede realizar entregas. Por favor, contacte con su profesor para que le agregue a un grupo.';
$string['noteamgrader'] = 'No perteneces a ningún grupo, por lo que no es posible realizar entregas.';
$string['notgraded'] = 'Sin calificar';
$string['notgradedyet'] = 'No calificado aún';
$string['notifications'] = 'Avisos';
$string['notsubmittedyet'] = 'Aún no ha enviado esta tarea';
$string['nousers'] = 'Sin usuarios';
$string['nousersselected'] = 'Sin usuarios seleccionados';
$string['numberofdraftsubmissions'] = 'Borradores';
$string['numberofparticipants'] = 'Participantes';
$string['numberofsubmissionsneedgrading'] = 'Pendientes por calificar';
$string['numberofsubmittedassignments'] = 'Enviados';
$string['numberofteams'] = 'Grupos';
$string['offline'] = 'No se requieren entregas online';
$string['open'] = 'Abrir';
$string['outlinegrade'] = 'Calificar: {$a}';
$string['outof'] = '{$a->current} de {$a->total}';
$string['overdue'] = 'La Tarea está retrasada por: {$a}';
$string['override'] = 'Excepción';
$string['overridedeletegroupsure'] = '¿Está seguro de que quiere eliminar la excepción para el grupo {$a}?';
$string['overridedeleteusersure'] = '¿Está seguro de que quiere eliminar la excepción para el usuario {$a}?';
$string['overridegroup'] = 'Grupo al que se aplica la excepción';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Excepciones';
$string['overrideuser'] = 'Usuario al que se aplica la excepción';
$string['overrideusereventname'] = '{$a->assign} - Excepción';
$string['page-mod-assign-view'] = 'Página principal del módulo tareas y entregas';
$string['page-mod-assign-x'] = 'Cualquier página del módulo tarea';
$string['paramtimeremaining'] = '{$a} restante';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administración de tareas';
$string['pluginname'] = 'Tarea';
$string['preventsubmissionnotingroup'] = 'Se requiere formar parte de un grupo para realizar la entrega';
$string['preventsubmissionnotingroup_help'] = 'Si se activa, usuarios que no sean miembros de un grupo, no podrán realizar entregas.';
$string['preventsubmissions'] = 'Evita que los usuarios realicen más entregas en esta tarea.';
$string['preventsubmissionsshort'] = 'Evitar cambios en la entrega';
$string['previous'] = 'Anterior';
$string['previoususer'] = 'Usuario anterior';
$string['privacy:attemptpath'] = 'intento {$a}';
$string['privacy:blindmarkingidentifier'] = 'El identificador usado para calificar a ciegas';
$string['privacy:gradepath'] = 'calificación';
$string['privacy:metadata:assigndownloadasfolders'] = 'Una preferencia del usuario, para que los envíos múltiples sean descargados a carpetas o no';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Datos de realimentación para la Tarea';
$string['privacy:metadata:assignfilter'] = 'Opciones de filtro como por ejemplo \'Enviado\', No enviado\', \'Necesita calificarse\' y \'Extensión otorgada\'';
$string['privacy:metadata:assigngrades'] = 'Almacena calificaciones de usuarios para la tarea';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtrar el resumen de tarea  por el evaluador asignado.';
$string['privacy:metadata:assignmentid'] = 'ID de la tarea';
$string['privacy:metadata:assignmessageexplanation'] = 'Los mensajes son enviados a estudiantes mediante el sistema de mensajería.';
$string['privacy:metadata:assignoverrides'] = 'Almacena información de anulación para la tarea';
$string['privacy:metadata:assignperpage'] = 'Número de tareas a mostrar por página.';
$string['privacy:metadata:assignquickgrading'] = 'Una preferencia sobre si se usa o no la calificación rápida.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Almacena información de envío del usuario';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Datos del envío para la tarea.';
$string['privacy:metadata:assignuserflags'] = 'Almacena meta datos del usuario como por ejemplo fechas de extensión';
$string['privacy:metadata:assignusermapping'] = 'El mapeo para calificación a ciegas';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtrar por las diferentes etapas del flujograma.';
$string['privacy:metadata:grade'] = 'La calificación numérica para este envío de tarea. Puede estar determinada por Escalas/Métodos avanzados para calificar, etc, pero siempre se convertirá de vuelta a un número de punto flotante.';
$string['privacy:metadata:grader'] = 'La ID del usuario del evaluador.';
$string['privacy:metadata:groupid'] = 'Identificador del grupo al que pertenece el usuario.';
$string['privacy:metadata:latest'] = 'Simplifica enormemente las consultas que esperan saber información acerca de solamente los últimos intentos.';
$string['privacy:metadata:mailed'] = '¿Ya se le ha enviado correo a este usuario?';
$string['privacy:metadata:timecreated'] = 'Hora de creación';
$string['privacy:metadata:userid'] = 'Identificador del usuario.';
$string['privacy:studentpath'] = 'studentsubmissions';
$string['privacy:submissionpath'] = 'envío';
$string['quickgrading'] = 'Calificación rápida';
$string['quickgrading_help'] = 'Calificación rápida le permite asignar calificaciones (y resultados) directamente en la tabla de entregas. Calificación rápida no es compatible con la calificación avanzada y no se recomienda cuando hay múltiples marcadores.';
$string['quickgradingchangessaved'] = 'Se guardaron los cambios de las calificaciones';
$string['quickgradingresult'] = 'Calificación rápida';
$string['recordid'] = 'Identificador';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} después del inicio del curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes del inicio del curso';
$string['relativedatessubmissiontimeleft'] = 'Calculado para cada estudiante';
$string['removeallgroupoverrides'] = 'Eliminar todas las excepciones de grupo';
$string['removealluseroverrides'] = 'Eliminar todas las excepciones de usuario';
$string['removesubmission'] = 'Borrar entrega';
$string['removesubmissionconfirm'] = '¿Está seguro de que quiere borrar la información de la entrega?';
$string['removesubmissionconfirmforstudent'] = '¿Está seguro de que quiere borrar la información de la entrega de estudiante {$a}?';
$string['removesubmissionforstudent'] = 'Borrar entrega para el estudiante: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Reabrir hasta que la opción de aprobar es incompatible con las presentaciones anónimas, porque las calificaciones no se publican en el libro de calificaciones hasta que se revelan las identidades de los estudiantes.';
$string['requireallteammemberssubmit'] = 'Se requiere que todos los miembros del grupo entreguen';
$string['requireallteammemberssubmit_help'] = 'Si está activado, todos los miembros del grupo de estudiantes deben entregar la tarea para que la presentación de la misma se considere como realizada. Si está desactivado, la presentación de la tarea se considerará como entregada para todos los miembros del equipo desde el momento en que cualquiera de sus integrantes lo haga.';
$string['requiresubmissionstatement'] = 'Es necesario que los estudiantes acepten las condiciones de entrega';
$string['requiresubmissionstatement_help'] = 'Es necesario que los estudiantes acepten las condiciones de entrega para todas las entregas de tarea de este sitio Moodle.';
$string['revealidentities'] = 'Mostrar la identidad de los estudiantes';
$string['revealidentitiesconfirm'] = '¿Está seguro que quiere revelar las identidades de los estudiantes en esta tarea? Esta operación no se puede deshacer. Una vez las identidades de los estudiantes hayan sido reveladas, las puntuaciones se publicarán en el libro de calificaciones.';
$string['reverttodefaults'] = 'Volver a los valores predeterminados de la tarea';
$string['reverttodraft'] = 'Revertir la entrega al estado de borrador';
$string['reverttodraftforstudent'] = 'Revertir la entrega a borrador para el estudiante: (id={$a->id}, nombre={$a->fullname}).';
$string['reverttodraftshort'] = 'Revertir la entrega a borrador';
$string['reviewed'] = 'Revisado';
$string['save'] = 'Guardar';
$string['saveallquickgradingchanges'] = 'Guardar los cambios realizados en la calificación rápida';
$string['saveandcontinue'] = 'Guardar y continuar';
$string['savechanges'] = 'Guardar cambios';
$string['savegradingresult'] = 'Calificar';
$string['savenext'] = 'Guardar y mostrar el siguiente';
$string['saveoverrideandstay'] = 'Guardar e introducir otra excepción';
$string['savingchanges'] = 'Guardando cambios...';
$string['scale'] = 'Escala';
$string['search:activity'] = 'Asignación - información de la actividad';
$string['selectedusers'] = 'Usuarios seleccionados';
$string['selectlink'] = 'Seleccione...';
$string['selectuser'] = 'Seleccione {$a}';
$string['sendlatenotifications'] = 'Notificar a los evaluadores las entregas fuera de plazo';
$string['sendlatenotifications_help'] = 'Si está habilitado, los evaluadores (normalmente profesores) reciben un mensaje cuando un estudiante realiza una entrega a la tarea fuera de plazo . Se pueden configurar los métodos de mensajería.';
$string['sendnotifications'] = 'Enviar aviso de entregas a los que califican';
$string['sendnotifications_help'] = 'Si está habilitado, los evaluadores (normalmente profesores) reciben un mensaje cuando un estudiante realiza una entrega antes de la fecha requerida, dentro de las fechas establecidas o fuera de plazo. Se pueden configurar los métodos de mensajería.';
$string['sendstudentnotifications'] = 'Notificar a los estudiantes';
$string['sendstudentnotifications_help'] = 'Si está habilitado, los estudiantes reciben un mensaje sobre la calificación o comentarios actualizados. Si el flujo de trabajo de calificación está habilitado en esta tarea, las notificaciones no se enviarán hasta que la calificación sea "Publicada".';
$string['sendstudentnotificationsdefault'] = 'Valor por defecto para \'Notificar a los estudiantes\'';
$string['sendstudentnotificationsdefault_help'] = 'Activar el valor predeterminado para la casilla de verificación "Notificar estudiantes" en el formulario de calificaciones.';
$string['sendsubmissionreceipts'] = 'Enviar recibo de entrega a los estudiantes';
$string['sendsubmissionreceipts_help'] = 'Esta opción habilita los recibos de entrega de los estudiantes. Los estudiantes recibirán una notificación cada vez que realicen correctamente una entrega';
$string['setmarkerallocationforlog'] = 'Establecer asignación de evaluadores: (id={$a->id}, nombre completo={$a->fullname}, evaluador={$a->marker}).';
$string['setmarkingallocation'] = 'Establecer evaluador asignado';
$string['setmarkingworkflowstate'] = 'Establecer el estado del workflow (flujo de trabajo) de calificaciones';
$string['setmarkingworkflowstateforlog'] = 'Establecer estado del workflow (flujo de trabajo) de calificaciones: (id={$a->id}, nombre completo={$a->fullname}, estado={$a->state}).';
$string['settings'] = 'Parámetros de la tarea';
$string['showrecentsubmissions'] = 'Mostrar entregas recientes';
$string['status'] = 'Estado';
$string['studentnotificationworkflowstateerror'] = 'El estado del flujo de trabajo debe estar marcado como \'Publicado\' para notificar a los estudiantes.';
$string['submission'] = 'Entrega';
$string['submissioncopiedhtml'] = '<p>Se ha realizado una copia de sus envíos previos de la tarea para \'<i>{$a->assignment}</i>\' <p> <p>Puede ver el estado de sus <a href="{$a->url}">tareas enviadas</a>. <p>';
$string['submissioncopiedsmall'] = 'Se han copiado sus envíos previos de la tarea {$a->assignment}';
$string['submissioncopiedtext'] = 'Se ha realizado una copia de sus envíos previos de la tarea
\'{$a->assignment}\'

Puede ver el estado de sus tareas enviadas en:

{$a->url}';
$string['submissiondrafts'] = 'Requiere que los alumnos pulsen el botón de envío';
$string['submissiondrafts_help'] = 'Si está habilitado, los estudiantes tendrán que pulsar un botón de Entrega para declarar que es su entrega definitiva. Esto permite que los estudiantes puedan tener una versión borrador de su entrega en el sistema. Si esta opción es cambiada de "No" a "Si" después de que los estudiantes hayan realizado algunas entregas, estas se considerarán como definitivas.';
$string['submissioneditable'] = 'El estudiante puede editar esta entrega';
$string['submissionempty'] = 'No se ha presentado nada.';
$string['submissionlog'] = 'Estudiante: {$a->fullname}, Estado: {$a->status}';
$string['submissionmodified'] = 'Tienes datos de envío existentes. Por favor sal de esta página e inténtalo de nuevo.';
$string['submissionmodifiedgroup'] = 'El envío ha sido modificado por alguien. Por favor sal de esta página e inténtalo de nuevo.';
$string['submissionnotcopiedinvalidstatus'] = 'El envío no se ha copiado porque ha sido editado desde que se volvió a abrir.';
$string['submissionnoteditable'] = 'El estudiante no puede editar esta entrega';
$string['submissionnotready'] = 'Esta tarea no está lista para enviar.';
$string['submissionplugins'] = 'Extensiones de entrega';
$string['submissionreceipthtml'] = '<p>Usted ha realizado una entrega en la tarea para \'<i>{$a->assignment}</i>\'. <p> <p>
Puede ver el estado de su <a href="{$a->url}">entrega</a>. <p>';
$string['submissionreceiptotherhtml'] = 'Su envío de la tarea para
\'<i>{$a->assignment}</i>\' ha sido enviado.<br /><br />
Puede comprobar el estado del <a href="{$a->url}">envío de la tarea</a>.';
$string['submissionreceiptothersmall'] = 'Su envío de la tarea {$a->assignment} ha sido entregado.';
$string['submissionreceiptothertext'] = 'Su envío de la tarea \'{$a->assignment}\' ha sido entregado.

Puede comprobar el estado del envío de su tarea:

    {$a->url}';
$string['submissionreceipts'] = 'Enviar recibo de entrega';
$string['submissionreceiptsmall'] = 'Usted ha realizado su entrega en la tarea {$a->assignment}';
$string['submissionreceipttext'] = 'Usted ha realizado una entrega en la tarea {$a->assignment}

Puede ver el estado de su entrega en

{$a->url}';
$string['submissionsclosed'] = 'Entrega cerrada';
$string['submissionsettings'] = 'Configuración de entrega';
$string['submissionslocked'] = 'Esta tarea no acepta entregas';
$string['submissionslockedshort'] = 'No se permiten cambios en las entregas';
$string['submissionsnotgraded'] = 'Entregas no calificadas: {$a}';
$string['submissionstatement'] = 'Declaración de entrega';
$string['submissionstatement_help'] = 'Condiciones que cada estudiante debe aceptar para enviar su trabajo.';
$string['submissionstatementacceptedlog'] = 'Declaración de entrega aceptado por el usuario {$a}';
$string['submissionstatementdefault'] = 'Confirmo que este trabajo es de elaboración propia, excepto aquellas partes en las que haya reconocido la autoría de la obra o parte de ella a otras personas.';
$string['submissionstatementteamsubmission'] = 'Condiciones de entrega de grupo';
$string['submissionstatementteamsubmission_help'] = 'Condiciones que cada estudiante debe aceptar para enviar el trabajo de su grupo.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Condiciones de entrega de grupo cuando envían todos los miembros del grupo';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Condiciones que cada estudiante debe aceptar para enviar su trabajo como miembro del grupo.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Confirmo que este trabajo es de elaboración propia como miembro del grupo, excepto aquellas partes en las que haya reconocido la autoría de la obra o parte de ella a otras personas.';
$string['submissionstatementteamsubmissiondefault'] = 'Confirmo que este envío es trabajo de mi grupo, excepto aquellas partes en las que se haya reconocido la autoría de la obra o parte de ella a otras personas.';
$string['submissionstatus'] = 'Estado de la entrega';
$string['submissionstatus_'] = 'Sin entrega';
$string['submissionstatus_draft'] = 'Borrador (no enviado)';
$string['submissionstatus_marked'] = 'Calificado';
$string['submissionstatus_new'] = 'No entregado';
$string['submissionstatus_reopened'] = 'Reabierto';
$string['submissionstatus_submitted'] = 'Enviado para calificar';
$string['submissionstatusheading'] = 'Estado de la entrega';
$string['submissionsummary'] = '{$a->status}. Última modificación  {$a->timemodified}';
$string['submissionteam'] = 'Grupo';
$string['submissiontypes'] = 'Tipos de entrega';
$string['submitaction'] = 'Enviar';
$string['submitassignment'] = 'Enviar tarea';
$string['submitassignment_help'] = 'Una vez que esta tarea se haya enviado usted no podrá hacer más cambios.';
$string['submitforgrading'] = 'Enviado para calificar';
$string['submitted'] = 'Enviada';
$string['submittedearly'] = 'La tarea fue enviada {$a} antes';
$string['submittedlate'] = 'La tarea fue enviada {$a} después';
$string['submittedlateshort'] = '{$a} después';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Plugin de Retroalimentación';
$string['subplugintype_assignfeedback_plural'] = 'Plugins de Retroalimentación';
$string['subplugintype_assignsubmission'] = 'Plugin de entrega';
$string['subplugintype_assignsubmission_plural'] = 'Plugins de entrega';
$string['teamname'] = 'Equipo: {$a}';
$string['teamsubmission'] = 'Entrega por grupos';
$string['teamsubmission_help'] = 'Si está habilitado los estudiantes se dividirán en grupos en función de la configuración por defecto de los grupos o de un agrupamiento personalizado. La entrega del grupo será compartida entre los miembros del grupo y todos los miembros del grupo verán los demás cambios de la entrega.';
$string['teamsubmissiongroupingid'] = 'Agrupamiento para los grupos';
$string['teamsubmissiongroupingid_help'] = 'Este es el agrupamiento que la tarea utilizará para formar los grupos de estudiantes. Si no se establece, se utilizará la configuración por defecto de grupos.';
$string['textinstructions'] = 'Instrucciones de la tarea';
$string['timemodified'] = 'Última modificación';
$string['timeremaining'] = 'Tiempo restante';
$string['timeremainingcolon'] = 'Tiempo restante: {$a}';
$string['togglezoom'] = 'Ampliar/reducir la región';
$string['ungroupedusers'] = 'Si se activa la configuración "se requiere formar parte de un grupo para realizar la entrega" se evitará que los usuarios no asignados a los grupos realicen entregas.';
$string['ungroupedusersoptional'] = 'La opción \'Entregar en grupo\' está habilitada y algunos usuarios o no son miembros de ningún grupo o son miembros de más de un grupo. Por favor tener en cuenta que en estos casos los estudiantes entregaran sus trabajos como "Grupo Predeterminado".';
$string['unlimitedattempts'] = 'Ilimitado';
$string['unlimitedattemptsallowed'] = 'Se permiten intentos ilimitados';
$string['unlimitedpages'] = 'Ilimitado';
$string['unlocksubmissionforstudent'] = 'Permitir entregas al usuario: (id={$a->id}, nombre={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloquear entregas';
$string['unsavedchanges'] = 'Cambios sin guardar';
$string['unsavedchangesquestion'] = 'Hay cambios no guardados en las notas o en la retroalimentación. ¿Desea guardar los cambios y continuar?';
$string['updategrade'] = 'Actualizar calificación';
$string['updatetable'] = 'Guardar y actualizar tabla';
$string['upgradenotimplemented'] = 'Actualización no implementada en la extensión ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Ajustes predeterminados de tarea de usuario';
$string['userextensiondate'] = 'Plazo ampliado hasta: {$a}';
$string['usergrade'] = 'Calificación de usuario';
$string['useridlistnotcached'] = 'Los cambios de nota NO fueron guardados, pues no fue posible determinar a qué tarea pertenecían.';
$string['useroverrides'] = 'Excepciones de usuario';
$string['useroverridesdeleted'] = 'Excepciones de usuario eliminadas';
$string['usersnone'] = 'Ningún estudiante tiene acceso a esta tarea.';
$string['usersubmissioncannotberemoved'] = 'La entrega de {$a} no puede ser eliminada.';
$string['userswhoneedtosubmit'] = 'Componentes del equipo pendientes de entrega: {$a}';
$string['validmarkingworkflowstates'] = 'Estados válidos del workflow (flujo de trabajo) de calificaciones';
$string['viewadifferentattempt'] = 'Ver un intento diferente';
$string['viewbatchmarkingallocation'] = 'Ver página de asignación de evaluadores.';
$string['viewbatchsetmarkingworkflowstate'] = 'Ver página de estado de workflow (flujo de trabajo) de calificaciones.';
$string['viewfeedback'] = 'Ver retroalimentación';
$string['viewfeedbackforuser'] = 'Ver retroalimentación del usuario: {$a}';
$string['viewfull'] = 'Ver completo';
$string['viewfullgradingpage'] = 'Abrir la página completa de calificar para proporcionar retroalimentación';
$string['viewgradebook'] = 'Ver libro de calificaciones';
$string['viewgrading'] = 'Ver todos los envíos';
$string['viewgradingformforstudent'] = 'Ver página de calificaciones del estudiante: (id={$a->id}, nombre completo={$a->fullname}).';
$string['viewownsubmissionform'] = 'Ver la página propia de entregas a tareas.';
$string['viewownsubmissionstatus'] = 'Ver página de estado de las entregas propios.';
$string['viewrevealidentitiesconfirm'] = 'Ver la página de confirmación para revelar la identidad de los estudiantes.';
$string['viewsubmission'] = 'Ver entrega';
$string['viewsubmissionforuser'] = 'Ver entrega del usuario: {$a}';
$string['viewsubmissiongradingtable'] = 'Ver tabla de calificaciones de las entregas';
$string['viewsummary'] = 'Vea el resumen';
$string['workflowfilter'] = 'Filtro de workflow';
$string['xofy'] = '{$a->x} de {$a->y}';
