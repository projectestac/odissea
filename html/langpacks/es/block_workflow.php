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
 * Strings for component 'block_workflow', language 'es', version '4.1'.
 *
 * @package     block_workflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetasktitle'] = 'Tarea actualmente activa';
$string['addanotherworkflow'] = 'Agregar otro flujo de trabajo';
$string['addaworkflow'] = 'Agregar un flujo de trabajo';
$string['addemail'] = 'Agregar plantilla de correo electrónico';
$string['addroletostep'] = 'Agregar rol al paso';
$string['addstep'] = 'Agregar un paso adicional a este flujo de trabajo';
$string['addstepafter'] = 'Añadir un paso después de este punto';
$string['addtask'] = 'Añadir tarea';
$string['any'] = 'Ningún';
$string['appliesto'] = 'Applies to';
$string['atendfinishworkflow'] = 'terminar el flujo de trabajo';
$string['atendgobackatworkflowcreate'] = 'No se puede especificar una configuración atendgobacktostep en la creación del flujo de trabajo ya que no existen pasos para hacer referencia';
$string['atendgobacktostep'] = 'Al finalizar del paso {$a}';
$string['atendgobacktostepinfo'] = 'Después del paso {$a->stepcount}, regrese al paso número {$a->atendgobacktostep}';
$string['atendgobacktostepno'] = 'volver al paso {$a->stepno} ({$a->name})';
$string['atendstop'] = 'Después del paso {$a->stepcount}, este flujo de trabajo finalizará.';
$string['automaticallyfinish'] = 'Terminar automáticamente';
$string['cannotdeleteworkflowinuseby'] = 'No se puede eliminar, este flujo de trabajo se usa en {$a} lugares.';
$string['cannotremoveemailinuse'] = 'No se puede eliminar la plantilla de correo electrónico: esta plantilla está actualmente en uso';
$string['cannotremoveonlystep'] = 'No se puede eliminar el paso. Este es el único flujo de trabajo en el paso.';
$string['cannotremovestepsinuse'] = 'No se puede eliminar el paso. Este paso está actualmente activo en {$a} flujos de trabajo';
$string['cannotremoveworkflowinuse'] = 'No se puede eliminar el flujo de trabajo: este flujo de trabajo está actualmente en uso';
$string['cannotstepflowinuse'] = 'No se puede eliminar el paso; este paso está actualmente en uso.';
$string['clone'] = 'Clonar';
$string['clonedname'] = '{$a} (clonado)';
$string['clonedshortname'] = '{$a}_clonado';
$string['cloneworkflow'] = 'Clonar flujo de trabajo';
$string['cloneworkflowinstructions'] = 'Instrucciones de flujo de trabajo de clonación';
$string['cloneworkflowname'] = 'Clonar flujo de trabajo \'{$a}\'';
$string['commentlabel'] = 'Actualizar comentario de flujo de trabajo';
$string['comments'] = 'Comentarios';
$string['confirm'] = 'Confirmar';
$string['confirmemaildeletetitle'] = '¿Borrar la plantilla de email \'{$a}\'?';
$string['confirmfinishstep'] = '¿Está seguro de que desea marcar este paso ({$a}) como completo?';
$string['confirmjumptostep'] = '¿Está seguro de que desea saltar al paso {$a->stepno} ({$a->stepname})?';
$string['confirmstepdeletetitle'] = '¿Borrar el paso \'{$a}\'?';
$string['confirmworkflowdeletetitle'] = '¿Eliminar el flujo de trabajo \'{$a}\'?';
$string['contexthasactiveworkflow'] = 'Este contexto ya tiene un flujo de trabajo activo.';
$string['coursestartdate'] = 'fecha de comienzo del curso';
$string['coursestudentclose'] = 'el curso no está disponible para estudiantes';
$string['coursestudentopen'] = 'el curso está disponible para estudiantes';
$string['coursetutorclose'] = 'el curso no está disponible para tutores';
$string['coursetutoropen'] = 'el curso está disponible para tutores';
$string['create'] = 'Crear';
$string['createemail'] = 'Crear nueva plantilla de correo';
$string['createstep'] = 'Crear paso';
$string['createstepinstructions'] = 'Algunas instrucciones sobre cómo crear un paso';
$string['createstepname'] = 'Crear un nuevo paso para el flujo de trabajo \'{$a}\'';
$string['createtask'] = 'Creando nueva tarea para el paso {$a}';
$string['createtemplate'] = 'Crear template';
$string['createworkflow'] = 'Crear nuevo flujo de trabajo';
$string['crontaskautostepfinisher'] = 'Terminador de pasos de flujo de trabajo';
$string['crontaskextranotify'] = 'Notificación adicional del paso del flujo de trabajo';
$string['currentlyinuseby'] = 'Este flujo de trabajo está actualmente en uso por';
$string['dayafter'] = '{$a} día después';
$string['dayas'] = 'el mismo dia que';
$string['daybefore'] = '{$a} día antes';
$string['days'] = 'Días';
$string['daysafter'] = '{$a} días después';
$string['daysbefore'] = '{$a} días antes';
$string['defaultonactivescript'] = '# Puede colocar un conjunto de acciones para completar al marcar este paso como activo aquí';
$string['defaultoncompletescript'] = '# Puede colocar un conjunto de acciones para completar al marcar este paso como terminado aquí';
$string['defaultonextranotifyscript'] = '# Puede colocar un conjunto de acciones para marcar este paso enviar notificación';
$string['defaultstepdescription'] = 'Una descripción para este paso debe ir aquí';
$string['defaultstepinstructions'] = 'Hacer x, luego y, luego z.';
$string['defaultstepname'] = 'Primer paso';
$string['defaultworkflowdescription'] = 'Una descripción para este flujo de trabajo';
$string['delete'] = 'Borrar';
$string['deleteemail'] = 'Borrar email';
$string['deleteemailcheck'] = '¿Está absolutamente seguro de que desea eliminar por completo la plantilla de correo electrónico \'{$a}\'?';
$string['deletestep'] = 'Borrar paso';
$string['deletestepcheck'] = '¿Está absolutamente seguro de que desea eliminar por completo el paso \'{$a}\'?';
$string['deletetask'] = 'Borrar tarea';
$string['deletetaskcheck'] = '¿Está seguro de que desea eliminar la tarea \'{$a->taskname}\' del paso \'{$a->stepname}\'?';
$string['deletetasktitle'] = 'Eliminar la tarea \'{$a->taskname}\' para la confirmación del paso \'{$a->stepname}\'';
$string['deletetemplate'] = 'Borrar plantilla';
$string['deleteworkflow'] = 'Eliminar flujo de trabajo';
$string['deleteworkflowcheck'] = '¿Está absolutamente seguro de que desea eliminar por completo el flujo de trabajo {$a}?';
$string['description'] = 'Descripción';
$string['disabled'] = 'Desactivado';
$string['disableworkflow'] = 'Deshabilitar flujo de trabajo';
$string['doerstitle'] = 'Roles';
$string['doertitle'] = 'Roles responsables de este paso';
$string['donotautomaticallyfinish'] = 'No terminar automáticamente';
$string['donotnotify'] = 'No enviar notificación adicional';
$string['edit'] = 'Editar';
$string['editcomments'] = 'Modificar comentarios';
$string['editemail'] = 'Editar plantilla de email \'{$a}';
$string['editingcommentfor'] = 'Editando comentario para \'{$a->stepname}\' en {$a->contextname}';
$string['editstep'] = 'Editar paso';
$string['editstepinstructions'] = 'Algunas instrucciones sobre para qué sirve esta página y una introducción general a la página. Mencione los scripts, pero sus archivos de ayuda deberían brindar más información sobre cómo funcionan.';
$string['editstepname'] = 'Editando paso \'{$a}';
$string['editsteps'] = 'Editar pasos para el flujo de trabajo \'{$a}\'';
$string['edittask'] = 'Editar tarea';
$string['edittemplate'] = 'Editar plantilla';
$string['edittemplateinstructions'] = 'Algunas instrucciones sobre cómo crear una plantilla de correo electrónico';
$string['editworkflow'] = 'Flujo de trabajo de edición \'{$a}\'';
$string['editworkflowinstructions'] = 'Editar instrucciones de flujo de trabajo';
$string['emaildescription'] = 'Las plantillas de correo electrónico pueden ser utilizadas por varios scripts en un paso de flujo de trabajo';
$string['emailfrom'] = '{$a} sistema de flujo de trabajo';
$string['emaillist'] = 'Plantillas de email';
$string['emailmessage'] = 'Mensaje';
$string['emailmessage_help'] = 'Los siguientes marcadores de posición se pueden utilizar en la línea de asunto y el mensaje:

* %%workflowname%%: el nombre del flujo de trabajo.
* %%stepname%% - el nombre del paso actual.
* %%contextname%%: el nombre del elemento al que se aplica el flujo de trabajo, por ejemplo, el sitio web o el nombre del cuestionario.
* %%contexturl%%: enlace al elemento al que se aplica el flujo de trabajo.
* %%coursename%%: el nombre del sitio web en el que se encuentra el elemento (solo realmente útil para flujos de trabajo de actividades)
* %%coursestartdate%% - la fecha de inicio del curso.
* %%courseenddate%%: la fecha en que finaliza el curso.
* %%activityopendate%%: para actividades con una fecha abierta (p. ej., Cuestionario) en esa fecha.
* %%activityclosedate%%: para actividades con una fecha de cierre (p. ej., Cuestionario) en esa fecha.
* %%usernames%%: los nombres de todas las personas a las que se enviará este correo electrónico, como una lista separada por comas.
* %%currentusername%%: el nombre de la persona cuya acción activó el correo electrónico actual. Esto solo funcionará para los correos electrónicos de tarea finalizada, no para uno enviado según un cronograma.

Los siguientes tokens solo se pueden usar en el cuerpo del mensaje:

* %%instructions%%: las instrucciones de este paso del flujo de trabajo.
* %%tareas%%: la lista de casillas de tareas pendientes, formateada como una lista de viñetas.
* %%comment%% - el comentario del flujo de trabajo. Normalmente el comentario de la tarea actual, pero a veces el comentario de la tarea anterior, cuando tiene más sentido.';
$string['emailsettings'] = 'Configuración de la plantilla de correo electrónico';
$string['emailsubject'] = 'Asunto';
$string['emailtemplateexists'] = 'La plantilla de correo electrónico \'{$a}\' que se intentó importar ya existe. Se conserva la plantilla existente.';
$string['emptyfield'] = 'El campo obligatorio está vacío: {$a}';
$string['enabled'] = 'Activado';
$string['enabledworkflow'] = 'Activado';
$string['enableworkflow'] = 'Habilitar flujo de trabajo';
$string['eventstepaborted'] = 'Paso abortado';
$string['eventstepactivated'] = 'Paso activado';
$string['eventstepcompleted'] = 'Paso completado';
$string['eventstepextranotification'] = 'Notificación de paso adicional procesada';
$string['eventtodotriggered'] = 'Todo activado';
$string['export'] = 'Exportar';
$string['exportworkflow'] = 'Exportación de flujo de trabajo';
$string['finish'] = 'Terminar';
$string['finishstep'] = 'terminar el paso';
$string['finishstepautomatically'] = 'El sistema de flujo de trabajo finalizó automáticamente este paso en {$a}.';
$string['finishstepfor'] = 'Finalice el paso \'{$a->stepname}\' en {$a->contextname}';
$string['finishstepinstructions'] = 'Está a punto de marcar este paso como completo y pasar al siguiente paso en el flujo de trabajo. A continuación se muestra un resumen del paso; es posible que desee actualizar el comentario a continuación.';
$string['format_html'] = 'html';
$string['format_plain'] = 'plano';
$string['format_unknown'] = 'desconocido';
$string['general'] = 'General';
$string['hidetask'] = 'Deshabilitar tarea';
$string['importfile'] = 'Fichero';
$string['importsuccess'] = 'La importación fue exitosa. Se le redirigirá a la página de edición de flujo de trabajo en breve';
$string['importworkflow'] = 'Importación de flujo de trabajo';
$string['instructions'] = 'Instrucciones';
$string['inuseby'] = 'Actualmente está en uso en {$a} ubicaciones.';
$string['invalidactivitysettingcolumn'] = 'La columna especificada ({$a}) no existe.';
$string['invalidappliestomodule'] = 'Se especificó un valor de applyto no válido';
$string['invalidappliestotable'] = 'No se encontró la tabla de la base de datos para {$a}. Puede que no sea posible usar este comando para este tipo de flujo de trabajo';
$string['invalidbody'] = 'Se especificó un cuerpo no válido';
$string['invalidcapability'] = 'Se ha especificado una capacidad no válida';
$string['invalidclearmustendcommand'] = 'No debe haber nada después de la palabra \'clear\'.';
$string['invalidcommand'] = 'Se especificó un comando no válido en el script. El comando utilizado fue {$a}';
$string['invalidemailemail'] = 'Se especificó un correo electrónico no válido. El correo electrónico especificado fue \'{$a}\'';
$string['invalidemailshortname'] = 'Se ha indicado un nombre corto incorrecto ({$a})';
$string['invalidfield'] = 'Se especificó un campo no válido en los datos. El campo era \'{$a}\'';
$string['invalidformat'] = 'Se ha utilizado un formato no válido: {$a}';
$string['invalidid'] = 'Se especificó una identificación no válida';
$string['invalidinstructions'] = 'Se especificaron instrucciones de paso no válidas';
$string['invalidmissingvalue'] = 'Comando no válido, falta el valor.';
$string['invalidname'] = 'Se especificó un nombre no válido';
$string['invalidobsoletesetting'] = 'Se especificó un valor obsoleto no válido. Los ajustes válidos son 0 o 1';
$string['invalidpermission'] = 'Permiso especificado no válido. Los permisos válidos son heredar, permitir, prevenir o prohibir.';
$string['invalidrole'] = 'Se especificó un rol no válido ({$a}) mientras se procesaba el script.';
$string['invalidscript'] = 'El script que especificó no es válido. {$a}';
$string['invalidshortname'] = 'Se especificó un nombre corto no válido';
$string['invalidstate'] = 'Estado No válido';
$string['invalidstep'] = 'Paso especificado no válido.';
$string['invalidstepid'] = 'Invalid step id specified.';
$string['invalidstepno'] = 'Número de paso especificado no válido.';
$string['invalidsubject'] = 'Se especificó un asunto no válido';
$string['invalidsyntaxmissingto'] = 'Sintaxis de comando no válida: falta el componente';
$string['invalidsyntaxmissingx'] = 'Sintaxis de comando no válida: falta \'{$a}\'.';
$string['invalidtarget'] = 'Objetivo de actividad no válido';
$string['invalidtodo'] = 'Todo especificado no válido';
$string['invalidvisibilitysetting'] = 'Se especificó una opción de visibilidad no válida. Las opciones válidas son visibles y ocultas. Ha especificado {$a}.';
$string['invalidwordnotclearorset'] = 'Esperado \'clear\' o \'set\'.';
$string['invalidworkflow'] = 'Se especificó un flujo de trabajo no válido.';
$string['invalidworkflowid'] = 'Se especificó un flujo de trabajo no válido';
$string['invalidworkflowname'] = 'Se especificó un nombre de flujo de trabajo no válido';
$string['invalidworkflowstepno'] = 'El número de paso especificado no se pudo encontrar en este flujo de trabajo';
$string['jumpstep'] = 'Saltar al paso';
$string['jumptostep'] = 'Saltar al paso';
$string['jumptostepcheck'] = '¿Está seguro de que desea saltar del paso \'{$a->fromstep}\' al paso \'{$a->tostep}\' para el flujo de trabajo en {$a->workflowon}?';
$string['jumptostepcommentaddition'] = '¿Está seguro de que desea saltar del paso \'{$a->fromstep}\' al paso \'{$a->tostep}\' para el flujo de trabajo en {$a->workflowon}?';
$string['jumptostepon'] = 'Saltar al paso \'{$a->stepname}\' en {$a->contextname}';
$string['jumptosteptitle'] = 'Saltar al paso \'{$a->tostep}\' para la confirmación \'{$a->workflowon}\'';
$string['lastmodified'] = 'Última modificación';
$string['managedescription'] = 'En esta página puede crear flujos de trabajo de edición final y las plantillas de correo electrónico que utilizan.';
$string['manageemails'] = 'Administrar plantillas de correo electrónico';
$string['manageworkflows'] = 'Administrar flujos de trabajo';
$string['messageprovider:notification'] = 'Alertas y notificaciones de flujo de trabajo';
$string['missingfield'] = 'El campo obligatorio se ha perdido: {$a}';
$string['movedown'] = 'Mover hacia abajo';
$string['moveup'] = 'Mover hacia arriba';
$string['name'] = 'Nombre';
$string['nameinuse'] = 'El nombre especificado ya está en uso. Los nombres deben ser únicos';
$string['nameshortname'] = '{$a->name} ({$a->shortname})';
$string['noactiveworkflow'] = 'There is currently no active workflow.';
$string['nocomment'] = 'Aún no hay comentarios...';
$string['nocomments'] = 'Aún no se han realizado comentarios sobre este paso';
$string['nomorestepsleft'] = 'No se especificaron roles';
$string['norolesspecified'] = 'No se especificaron roles';
$string['nosuchrole'] = 'El rol {$a} no existe';
$string['notacourse'] = 'Esto no es un curso.';
$string['notallowedtodothisstep'] = 'No tiene permiso para realizar cambios en este paso en este momento.';
$string['notanactivity'] = 'El comando {$a} solo se puede usar con una actividad';
$string['notaworkflow'] = 'Este no es un archivo válido de un flujo de trabajo';
$string['notcontrollablegradeitem'] = 'El comando {$a} solo se puede usar con una actividad en la que la visibilidad del elemento de calificación NO está controlada por la actividad.';
$string['notcurrentlyinuse'] = 'Actualmente no está en uso.';
$string['notgradesupported'] = 'El comando {$a} solo se puede usar con una actividad que admita calificaciones';
$string['notificationdate'] = 'Fecha de notificación';
$string['notuniquestep'] = 'El paso {$a} no es único';
$string['notutfencoding'] = 'Este archivo no está codificado en UTF-8';
$string['noworkflow'] = 'Actualmente no hay ningún flujo de trabajo asignado para esta página';
$string['noworkflows'] = 'Actualmente no hay flujos de trabajo disponible';
$string['obsoleteworkflow'] = 'Obsoleto';
$string['onactivescript'] = 'Activación en el paso';
$string['oncompletescript'] = 'Al completar el paso';
$string['onextranotifyscript'] = 'Notificar mientras el paso está activo';
$string['overview'] = 'Descripción general';
$string['overviewtitle'] = 'Descripción general del flujo de trabajo {$a->workflowname} en {$a->contexttitle}';
$string['percentcomplete'] = '{$a}% completado';
$string['pluginname'] = 'Flujos de trabajo';
$string['privacy:metadata'] = 'El bloque Calendario solo muestra los datos del calendario existente.';
$string['privacy:metadata:block_workflow_state_changes'] = 'Cambios en los estados.';
$string['privacy:metadata:block_workflow_state_changes:newstate'] = 'El estado al que cambió este paso.';
$string['privacy:metadata:block_workflow_state_changes:userid'] = 'El usuario que causó el cambio de estado.';
$string['privacy:metadata:block_workflow_todo_done'] = 'Cambios en cada paso del flujo de trabajo.';
$string['privacy:metadata:block_workflow_todo_done:steptodoid'] = 'El paso de todo que el usuario cambió';
$string['privacy:metadata:block_workflow_todo_done:userid'] = 'El usuario que causó el cambio de estado';
$string['privacy_somebodyelse'] = 'Alguien más';
$string['privacy_you'] = 'Tu';
$string['quizclosedate'] = 'the quiz close date';
$string['quizopendate'] = 'la fecha de cierre del cuestionario';
$string['remove'] = 'Eliminar';
$string['removerolefromstep'] = 'Eliminar rol del paso';
$string['removestep'] = 'Eliminar paso';
$string['removetask'] = 'Eliminar paso';
$string['removeworkflow'] = 'Eliminar flujo de trabajo';
$string['removeworkflowcheck'] = '¿Está seguro de que desea eliminar el flujo de trabajo \'{$and->workflowname}\' de {$a->contexttitle}? ¡Esta acción elimina todos los datos asociados y no se puede revertir!';
$string['removeworkflowfromcontext'] = '¿Eliminar el flujo de trabajo \'{$and->workflowname}\' de {$a->contexttitle}?';
$string['roles'] = 'roles';
$string['shortname'] = 'Nombre Corto';
$string['shortnameinuse'] = 'El nombre corto especificado ya está en uso. Los nombres cortos deben ser únicos';
$string['shortnametaken'] = 'Este nombre corto ya está en uso por otro flujo de trabajo ({$a})';
$string['shortnametakenemail'] = 'Este nombre corto ya está en uso por otra plantilla de correo electrónico ({$a})';
$string['shownamesx'] = 'Mostrar nombres ({$a})';
$string['showpeoplecandotask'] = 'Personas que pueden hacer esta tarea.';
$string['showtask'] = 'Habilitar tarea';
$string['state'] = 'Estado';
$string['state_aborted'] = 'Abortado';
$string['state_active'] = 'Activo';
$string['state_completed'] = 'Completo';
$string['state_history'] = 'Historial';
$string['state_history_aborted'] = 'Abortado';
$string['state_history_active'] = 'Activado';
$string['state_history_completed'] = 'Completado';
$string['state_history_detail'] = '{$a->newstate} by {$a->user} at {$a->time}.';
$string['state_notstarted'] = 'No comenzado';
$string['status'] = 'Estado actual';
$string['step'] = 'Paso';
$string['stepactivation'] = 'Paso de activación';
$string['stepactivation_help'] = 'Paso de activación';
$string['stepactivation_link'] = 'block/workflow';
$string['stepcompletion'] = 'Finalización del paso';
$string['stepcompletion_help'] = 'Finalización del paso';
$string['stepcompletion_link'] = 'block/workflow';
$string['stepextranotify'] = 'Notificación de paso extra';
$string['stepextranotify_help'] = 'Configure la notificación por correo electrónico para que se envíe automáticamente a los destinatarios elegidos en la fecha de notificación seleccionada.';
$string['stepextranotify_link'] = 'block/workflow';
$string['stepfinishconfirmation'] = 'El paso se completó con éxito. Ha completado todo el trabajo requerido en esta etapa';
$string['stepinstructions'] = 'Instrucciones';
$string['stepname'] = 'Nombre del paso';
$string['stepno'] = 'Paso nº';
$string['stepnotexist'] = 'El paso a seguir al final no existe en los datos importados: {$a}';
$string['steps'] = 'Pasos';
$string['stepsettings'] = 'Configuración de pasos';
$string['task'] = 'Tarea';
$string['taskcomplete'] = 'Tarea completada';
$string['tasknotspecified'] = 'No se especificó ninguna tarea';
$string['thisworkflowappliesto'] = 'Este flujo de trabajo se aplica a';
$string['tobecompletedby'] = 'Para ser completado por';
$string['todocannotchangestepid'] = 'No es posible cambiar el stepid para una tarea pendiente existente';
$string['tododone'] = '{$a} marcado como completado';
$string['todolisttitle'] = 'Tarea para completar';
$string['todotask'] = 'Tarea';
$string['todotitle'] = 'Elementos a completar para este paso';
$string['todoundone'] = '{$a} marcado como incompleto';
$string['updatecomment'] = 'Actualizar comentario';
$string['vieweditemail'] = 'Ver/Editar correo electrónico';
$string['vieweditworkflow'] = 'Ver/Editar flujo de trabajo';
$string['workflow'] = 'flujo de trabajo';
$string['workflow:addinstance'] = 'Agregar un nuevo bloque de flujo de trabajo';
$string['workflow:dostep'] = 'Permiso para realizar un paso';
$string['workflow:editdefinitions'] = 'Permiso para editar los detalles del flujo de trabajo';
$string['workflow:manage'] = 'Permiso para gestionar flujos de trabajo';
$string['workflow:view'] = 'Permiso para ver la información del flujo de trabajo';
$string['workflowactive'] = 'Este flujo de trabajo está habilitado actualmente (<a href="{$a}" title="Deshabilitar este flujo de trabajo">deshabilitarlo</a>).';
$string['workflowalreadyassigned'] = 'Ya se ha asignado un flujo de trabajo a este contexto. Solo se puede asignar un flujo de trabajo a cualquier contexto a la vez.';
$string['workflowalreadyset'] = 'Ya se ha establecido un flujo de trabajo para este paso. Los pasos no se pueden reasignar a un flujo de trabajo diferente';
$string['workflowimport'] = 'Importación de flujo de trabajo';
$string['workflowinformation'] = 'Información del flujo de trabajo';
$string['workflowlist'] = 'Flujos de trabajo';
$string['workflownotassigned'] = 'El flujo de trabajo \'{$a->workflowname}\' no está asignado al contexto especificado';
$string['workflownotassignedtocontext'] = 'El flujo de trabajo \'{$a->workflowname}\' no está asignado a {$a->contexttitle}';
$string['workflowobsolete'] = 'Este flujo de trabajo está actualmente marcado como deshabilitado (<a href="{$a}" title="Volver a habilitar este flujo de trabajo">habilitarlo</a>).';
$string['workflowoverview'] = 'Descripción general del flujo de trabajo';
$string['workflowsettings'] = 'Configuración del flujo de trabajo';
$string['workflowstatus'] = 'Estado del flujo de trabajo';
$string['workflowsteps'] = 'Pasos del flujo de trabajo';
$string['workflowusage'] = 'Uso del flujo de trabajo';
$string['xmlloadfailed'] = 'Error al cargar XML con los siguientes problemas:';
$string['youandanyother'] = 'Tu o cualquier otro';
$string['youor'] = 'o,';
