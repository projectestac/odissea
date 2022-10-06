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
 * Strings for component 'completion', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Alcanzando calificación';
$string['activities'] = 'Actividades';
$string['activitiescompleted'] = 'Actividades finalizadas';
$string['activitiescompletednote'] = 'Nota: La finalización de actividades debe establecerse para que una actividad aparezca en la lista de abajo';
$string['activitieslabel'] = 'Actividades / recursos';
$string['activityaggregation'] = 'Condición requerida';
$string['activityaggregation_all'] = 'TODAS las actividades seleccionadas para finalizar';
$string['activityaggregation_any'] = 'CUALQUIERA actividad seleccionada para finalizar';
$string['activitycompletion'] = 'Finalización de actividad';
$string['activitycompletionupdated'] = 'Cambios guardados';
$string['affectedactivities'] = 'Los cambios afectarán a las siguientes <b>{$a}</b> actividades o recursos:';
$string['aggregationmethod'] = 'Método de agregación';
$string['all'] = 'Todos';
$string['any'] = 'Cualquiera';
$string['approval'] = 'Aprobación';
$string['areyousureoverridecompletion'] = '¿Está seguro de querer anular el estado actual de finalización de esta actividad para este usuario y marcarlo como "{$a}"?';
$string['badautocompletion'] = 'Cuando selecciona finalización automática, debe también activar al menos un requisito (vid. más abajo)';
$string['bulkactivitycompletion'] = 'Editar en masa la finalización de actividad';
$string['bulkactivitydetail'] = 'Seleccione las actividades que desea editar en masa.';
$string['bulkcompletiontracking'] = 'Seguimiento de la finalización';
$string['bulkcompletiontracking_help'] = '<strong>Ninguna:</strong> No indicar finalización de actividad

<strong>Manual:</strong> El estudiante puede marcar manualmente la actividad como completada

<strong>Con condición(es):</strong> Mostrar actividad como completada cuando se cumplan las condiciones';
$string['checkactivity'] = 'Casilla de selección para actividad / recurso: {$a}';
$string['checkall'] = 'Activar o desactivar todas las actividades y recursos';
$string['checkallsection'] = 'Activar o desactivar todas las actividades y recursos en la sección siguiente: {$a}';
$string['completed'] = 'Finalizado';
$string['completedunlocked'] = 'Opciones de finalización desbloqueadas';
$string['completedunlockedtext'] = 'Cuando guarda los cambios, se borrará el estado de finalización de todos los estudiantes. Si cambia de parecer sobre este asunto, no guarde el formulario.';
$string['completedwarning'] = 'Opciones de finalización bloqueadas';
$string['completedwarningtext'] = 'Uno o más estudiantes ({$a}) ya ha(n) marcado esta actividad como finalizada. Cambiar las opciones de finalización borrará su estado de finalización y puede ocasionar confusión. Por tanto, estas opciones han sido bloqueadas y no se deberían desbloquear salvo que fuera absolutamente necesario.';
$string['completion'] = 'Rastreo de finalización';
$string['completionactivitydefault'] = 'Utilizar actividad por defecto';
$string['completion-alt-auto-enabled'] = 'El sistema marca este ítem como finalizado de acuerdo con las condiciones {$a}';
$string['completion-alt-auto-fail'] = 'Finalizado {$a} (no ha alcanzado la calificación de aprobado)';
$string['completion-alt-auto-n'] = 'Sin finalizar: {$a}';
$string['completion-alt-auto-n-override'] = 'No completado: {$a->modname} (configurado por {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Finalizado: {$a} (ha alcanzado la calificación de aprobado)';
$string['completion-alt-auto-y'] = 'Finalizado: {$a}';
$string['completion-alt-auto-y-override'] = 'Completado: {$a->modname} (configurado por {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Los estudiantes pueden marcar manualmente este ítem como finalizado: {$a}';
$string['completion-alt-manual-n'] = 'No finalizado; {$a}. Seleccione para marcar como finalizado';
$string['completion-alt-manual-n-override'] = 'No completado: {$a->modname} (configurado por {$a->overrideuser}). Seleccionar para marcarlo como completado.';
$string['completion-alt-manual-y'] = 'Finalizado; {$a} seleccione para marcar como no finalizado';
$string['completion-alt-manual-y-override'] = 'Completado: {$a->modname} (configurado por {$a->overrideuser}). Seleccionar para marcarlo como no completado.';
$string['completion_automatic'] = 'Mostrar la actividad como completada cuando se cumplan las condiciones';
$string['completiondefault'] = 'Seguimiento de finalización por defecto';
$string['completiondisabled'] = 'Desactivado, no se muestra en los ajustes de la actividad';
$string['completionduration'] = 'Matriculación';
$string['completionenabled'] = 'Activado, control por medio de los ajustes de finalización y de actividad';
$string['completionexpected'] = 'Se espera finalizar en';
$string['completionexpecteddesc'] = 'Finalización esperada en {$a}';
$string['completionexpectedfor'] = '{$a->instancename} debería ser completado';
$string['completionexpected_help'] = 'Esta opción especifica la fecha en que se espera que la actividad esté finalizada.';
$string['completion-fail'] = 'Finalizado (no ha alcanzado la calificación de aprobado)';
$string['completion_help'] = 'Si se activa esta opción, se rastrea el grado de finalización de cualquier actividad, bien manual, bien automáticamente, basándose en determinadas condiciones. Si se desea, se pueden fijar múltiples condiciones. Si se hace así, la actividad únicamente se considerará completa si se cumplen TODAS las condiciones.

Una marca al lado del nombre de la actividad enla página del curso indica cuándo la actividad está completa.';
$string['completionicons'] = 'Casillas para marcar el grado de finalización';
$string['completionicons_help'] = 'Una marca junto al nombre de la actividad puede utilizarse para indicar que una actividad se completó.

Si se muestra una casilla con el borde punteado, la marca aparecerá automáticamente cuando se haya completado la actividad de acuerdo con las condiciones establecidas por el profesor.

Si se muestra una casilla con el borde sólido, entonces será posible hacer clic sobre ella cuando piense que ha finalizado la actividad. (Si se vuelve a hacer clic sobre ella, la marca desaparece en caso de que haya cambiado de opinión). Esto es una acción opcional que se utiliza para llevar un seguimiento personal del progreso a través del curso.';
$string['completion_manual'] = 'Los estudiantes pueden marcar manualmente la actividad como completada';
$string['completionmenuitem'] = 'Finalización';
$string['completion-n'] = 'No finalizado';
$string['completion_none'] = 'No indicar finalización de la actividad';
$string['completionnotenabled'] = 'Completar curso no está habilitada';
$string['completionnotenabledforcourse'] = 'Completar curso no está habilitada';
$string['completionnotenabledforsite'] = 'Completar curso no está habilitada';
$string['completion-n-override'] = 'No completado (configurado por {$a})';
$string['completionondate'] = 'Fecha';
$string['completionondatevalue'] = 'Los usuarios permanecerán matriculados hasta';
$string['completion-pass'] = 'Finalizado (ha alcanzado la califiación de aprobado)';
$string['completionsettingslocked'] = 'Ajustes de finalización bloqueados';
$string['completionupdated'] = 'Se actualizó finalización para actividad <b>{$a}</b>';
$string['completionusegrade'] = 'Requerir calificación';
$string['completionusegrade_desc'] = 'El estudiante debe recibir una calificación para finalizar esta actividad';
$string['completionusegrade_help'] = 'Si se activa, la actividad se considera finalizada cuando un estudiante recibe una calificación. Los iconos Aprobar y Suspender se muestran si se ha establecido una calificación de aprobado para la actividad.';
$string['completionview'] = 'Requerir ver';
$string['completionview_desc'] = 'El estudiante debe ver esta actividad para finalizarla';
$string['completion-y'] = 'Finalizado';
$string['completion-y-override'] = 'Completado (configurado por {$a})';
$string['configcompletiondefault'] = 'Configuración predeterminada para el seguimiento de la finalización cuando se crean nuevas actividades.';
$string['configenablecompletion'] = 'Cuando se habilita, le permite activar las características de seguimiento de la finalización (seguimiento del  progreso) a nivel del curso.';
$string['confirmselfcompletion'] = 'Confirmar completar automáticamente';
$string['courseaggregation'] = 'Condición requerida';
$string['courseaggregation_all'] = 'TODOS los cursos seleccionados para finalizarlos';
$string['courseaggregation_any'] = 'CUALQUIER curso seleccionado para finalizar';
$string['coursealreadycompleted'] = 'Usted ya ha finalizado este curso';
$string['coursecomplete'] = 'Curso finalizado';
$string['coursecompleted'] = 'Curso finalizado';
$string['coursecompletion'] = 'Finalización del curso';
$string['coursecompletioncondition'] = 'Condición: {$a}';
$string['coursegrade'] = 'Calificación del curso';
$string['coursesavailable'] = 'Cursos disponibles';
$string['coursesavailableexplaination'] = 'Nota: Los criterios del grado de finalización del curso deben ajustarse para que el curso aparezca en esta lista';
$string['criteria'] = 'Criterios';
$string['criteriagroup'] = 'Grupo de criterios';
$string['criteriarequiredall'] = 'Son necesarios todos los criterios que aparecen más abajo';
$string['criteriarequiredany'] = 'Es necesario cualquiera de los criterios que aparecen más abajo';
$string['csvdownload'] = 'Descargar en formato de hoja de cálculo (UTF-8.csv)';
$string['datepassed'] = 'Fecha pasada';
$string['days'] = 'Días';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['defaultcompletion'] = 'Finalización de actividad por defecto';
$string['defaultcompletionupdated'] = 'Cambios guardados';
$string['deletecompletiondata'] = 'Borrar datos de finalización';
$string['dependencies'] = 'Dependencias';
$string['dependenciescompleted'] = 'Dependencias finalizadas';
$string['editcoursecompletionsettings'] = 'Editar ajustes de grado de finalización del curso';
$string['enablecompletion'] = 'Habilitar rastreo del grado de finalización';
$string['enablecompletion_help'] = 'Una vez activada, la configuración de seguimiento de finalización se muestran en la página de seguimiento de finalización, y en la configuración de la actividad.';
$string['enrolmentduration'] = 'Periodo de tiempo de la matrícula';
$string['enrolmentdurationlength'] = 'El usuario debe permanecer matriculado por';
$string['err_noactivities'] = 'No está habilitada la información sobre la finalización de ninguna actividad. Puede activar la información sobre la finalización de una actividad editando su  parámetros de configuración.';
$string['err_nocourses'] = 'La finalización del curso no está habilitada para ningún otro curso, por lo que no se puede mostrar ninguno. Puede activar la finalización de curso mediante los parámetros de configuración del curso.';
$string['err_nograde'] = 'En este curso no se ha establecido una calificación para pasar el curso. Para activar este tipo de criterio, debe crear una calificación para pasar el curso.';
$string['err_noroles'] = 'No hay roles con la capacidad \'moodle/course:markcomplete\' en este curso.';
$string['err_nousers'] = 'No hay estudiantes ni grupos en este curso para los que se muestre la información sobre finalización. (Por defecto, la información sobre finalización se muestra solo para estudiantes, por lo que si no hay estudiantes verá este error. Los administradores pueden modificar esta opción mediante las pantallas de administración)';
$string['err_settingslocked'] = 'Uno o más estudiantes han finalizado ya  un criterio, por lo que los parámetros han sido bloqueados. Desbloquer los parámetros de los criterios de finalización borrará cualquier dato de usuario lo que podría causar confusión.';
$string['err_system'] = 'Se ha producido un error interno en el sistema de finalización. (Los administradores del sistema pueden habilitar la información de seguimiento para ver más detalles)';
$string['eventcoursecompleted'] = 'Curso finalizado';
$string['eventcoursecompletionupdated'] = 'Finalización de curso actualizado';
$string['eventcoursemodulecompletionupdated'] = 'Finalización de actividad de curso actualizada';
$string['eventdefaultcompletionupdated'] = 'Valor por defecto para finalización de actividad de curso actualizado';
$string['excelcsvdownload'] = 'Descargar en formato compatible con Excel (.csv)';
$string['fraction'] = 'Fracción';
$string['graderequired'] = 'Calificación de curso requerida';
$string['gradexrequired'] = '{$a} requerido';
$string['hiddenrules'] = 'Algunas configuraciones específicas para <b>{$a}</b> se han ocultado. Para verlas cancele la selección de otras actividades';
$string['inprogress'] = 'En curso';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Finalización manual por otros';
$string['manualcompletionbynote'] = 'Nota: La capacidad moodle/courrse:markcomplete debe estar permitida para que un rol aparezca en la lista.';
$string['manualselfcompletion'] = 'Autocompletar manualmente';
$string['manualselfcompletionnote'] = 'Nota: El bloque Autocompletar debería añadirse al curso si autocompletar manualmente está habilitado.';
$string['markcomplete'] = 'Marcar completo';
$string['markedcompleteby'] = 'Marcado completo por {$a}';
$string['markingyourselfcomplete'] = 'Marcado propio completado';
$string['modifybulkactions'] = 'Modifique las acciones que desea editar en masa';
$string['moredetails'] = 'Más detalles';
$string['nocriteriaset'] = 'No hay criterios establecidos para la terminación de este curso';
$string['nogradeitem'] = 'Requerir calificación no puede habilitarse para <b>{$a}</b> porque la actividad no está calificada.';
$string['notcompleted'] = 'No finalizado';
$string['notenroled'] = 'Usted no está matriculado en este curso';
$string['nottracked'] = 'En este momento no se le está realizando un seguimiento en la finalización de este curso';
$string['notyetstarted'] = 'Aún no comenzado';
$string['overallaggregation'] = 'Requisitos de finalización';
$string['overallaggregation_all'] = 'El curso está finalizado cuando TODAS las condiciones se han cumplido';
$string['overallaggregation_any'] = 'El curso está finalizado cuando ALGUNA de las condiciones se ha cumplido';
$string['pending'] = 'Pendiente';
$string['periodpostenrolment'] = 'Periodo después de la matriculación';
$string['privacy:metadata:completionstate'] = 'Si la actividad ha sido completada.';
$string['privacy:metadata:course'] = 'Un identificador del curso';
$string['privacy:metadata:coursecompletedsummary'] = 'Almacena  información acerca de usuarios que han completado los criterios de un curso';
$string['privacy:metadata:coursemoduleid'] = 'ID de la actividad';
$string['privacy:metadata:coursemodulesummary'] = 'Almacena datos de finalización de actividad para un usuario';
$string['privacy:metadata:coursesummary'] = 'Almacena los datos de finalización del curso para un usuario.';
$string['privacy:metadata:gradefinal'] = 'Calificación final recibida por la finalización del curso';
$string['privacy:metadata:overrideby'] = 'ID del usuario que anuló la finalización de la actividad.';
$string['privacy:metadata:reaggregate'] = 'Si la finalización del curso fue totalizada de nuevo.';
$string['privacy:metadata:timecompleted'] = 'La hora en la cual fue completado el curso.';
$string['privacy:metadata:timeenrolled'] = 'La hora en la cual el usuario fue inscrito en el curso';
$string['privacy:metadata:timemodified'] = 'La hora en la cual la finalización de la actividad fue modificada';
$string['privacy:metadata:timestarted'] = 'La hora en la cual el curso fue iniciado.';
$string['privacy:metadata:unenroled'] = 'Si el usuario ha sido desmatriculado (dado de baja) del curso';
$string['privacy:metadata:userid'] = 'ID de usuario de la persona con datos de finalización de actividad y de curso';
$string['privacy:metadata:viewed'] = 'Si la actividad fue vista';
$string['progress'] = 'Progreso del estudiante';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progreso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconocimiento de aprendizaje previo';
$string['remainingenroledfortime'] = 'Permanecer matriculado durante un periodo de tiempo especificado';
$string['remainingenroleduntildate'] = 'Permanecer matriculado hasta una fecha especificada';
$string['reportpage'] = 'Mostrando usuarios {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Criterios necesarios';
$string['resetactivities'] = 'Borrar todas las actividades y recursos seleccionados';
$string['restoringcompletiondata'] = 'Escribiendo datos de grado de finalización';
$string['roleaggregation'] = 'Condiciones requeridas';
$string['roleaggregation_all'] = 'TODOS los roles seleccionados a marcar cuando se cumple la condición';
$string['roleaggregation_any'] = 'ALGUNO de los roles seleccionados a marcar cuando se cumple la condición';
$string['roleidnotfound'] = 'El Rol ID {$a} no ha sido encontrado';
$string['saved'] = 'Guardado';
$string['seedetails'] = 'Ver detalles';
$string['select'] = 'Seleccionar';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Completar automáticamente';
$string['showinguser'] = 'Mostrando usuario';
$string['unenrolingfromcourse'] = 'Dando de baja del curso';
$string['unenrolment'] = 'Dar de baja';
$string['unit'] = 'Unidad';
$string['unlockcompletion'] = 'Desbloquear opciones de grado de finalización';
$string['unlockcompletiondelete'] = 'Desbloquear opciones de grado de finalización y eliminar los datos de grado de finalización del usuario';
$string['updateactivities'] = 'Actualizar estado de finalización de actividades seleccionadas';
$string['usealternateselector'] = 'Usar el selector de curso alternativo';
$string['usernotenroled'] = 'El usuario no está matriculado en este curso';
$string['viewcoursereport'] = 'Ver informe del curso';
$string['viewingactivity'] = 'Viendo {$a}';
$string['withconditions'] = 'Con condiciones';
$string['writingcompletiondata'] = 'Escribiendo los datos del grado de finalización';
$string['xdays'] = '{$a} días';
$string['yourprogress'] = 'Su progreso';
