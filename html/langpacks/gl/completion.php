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
 * Strings for component 'completion', language 'gl', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Acadando a cualificación';
$string['activities'] = 'Actividades';
$string['activitiescompleted'] = 'Actividades completadas';
$string['activitiescompletednote'] = 'Nota: O completado da actividade debe configurarse para que na lista de enriba apareza unha actividade.';
$string['activitieslabel'] = 'Actividades / recursos';
$string['activityaggregation'] = 'Condición requirida';
$string['activityaggregation_all'] = 'TODAS as actividades seleccionadas para seren completadas';
$string['activityaggregation_any'] = 'CALQUERA actividade seleccionada para seren completada';
$string['activitycompletion'] = 'Completado da actividade';
$string['activitycompletionupdated'] = 'Cambios gardados';
$string['activitygradenotrequired'] = 'Non é obrigatoria a cualificación';
$string['affectedactivities'] = 'Os cambios afectarán as seguintes <b>{$a}</b> actividades ou recursos:';
$string['aggregationmethod'] = 'Método de agregación';
$string['all'] = 'Todos';
$string['any'] = 'Calquera';
$string['approval'] = 'Aprobación';
$string['areyousureoverridecompletion'] = 'Confirma que quere anular o estado de completado actual desta actividade para este usuario e marcalo como «{$a}»?';
$string['badautocompletion'] = 'Cando selecciona o completado automático, debe activar tamén polo menos un requisito (vid. máis abaixo)';
$string['badcompletiongradeitemnumber'] = 'Non é posíbel activar a cualificación obrigatoria para <b>{$a}</b> por mor de que a cualificación non está activada.';
$string['bulkactivitycompletion'] = 'Edición masiva de completado da actividade';
$string['bulkactivitydetail'] = 'Seleccione as actividades que quere editar de xeito masivo.';
$string['bulkcompletiontracking'] = 'Seguimento de completado';
$string['bulkcompletiontracking_help'] = '<strong>Ningunha:</strong> Non indicar o completado da actividade

<strong>Manual:</strong> O alumno pode marcar manualmente a actividade como completada

<strong>Con condición(s):</strong> Amosar a actividade como completada cando se cumpran as condicións';
$string['checkactivity'] = 'Caixa de selección para actividade / recurso: {$a}';
$string['checkall'] = 'Marcar ou desmarcar todas as actividades e recursos';
$string['checkallsection'] = 'Marcar ou desmarcar todas as actividades e recursos na sección seguinte: {$a}';
$string['completed'] = 'Completado';
$string['completedunlocked'] = 'Opcións de completado desbloqueadas';
$string['completedunlockedtext'] = 'Cando garda os cambios, borrase o estado de completado de todos os alumnos. Se cambia de parecer sobre isto, non garde o formulario.';
$string['completedwarning'] = 'Opcións de completado bloqueadas';
$string['completedwarningtext'] = 'Un ou máis alumnos ({$a}) xa marcaron esta actividade como completada. Cambiar as opcións de completado borrará o seu estado de completado e pode causar confusión. Polo tanto, estas opcións foron bloqueadas e non se deberían desbloquear agás que for absolutamente necesario.';
$string['completion'] = 'Seguimento de completado';
$string['completionactivitydefault'] = 'Usar os valores  predeterminados de actividade';
$string['completion-alt-auto-enabled'] = 'O sistema marca este elemento como completado conforme coas condicións: {$a}';
$string['completion-alt-auto-fail'] = 'Completado {$a} (non acadou a cualificación de aprobado)';
$string['completion-alt-auto-n'] = 'Sen completar: {$a}';
$string['completion-alt-auto-n-override'] = 'Sen completar: {$a->modname} (estabelecido por {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Completado {$a} (acadou a cualificación de aprobado)';
$string['completion-alt-auto-y'] = 'Completado: {$a}';
$string['completion-alt-auto-y-override'] = 'Completado: {$a->modname} (estabelecido por {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Os alumnos poden marcar manualmente este elemento como completado: {$a}';
$string['completion-alt-manual-n'] = 'Sen completar: {$a}. Seleccione para marcar como completado.';
$string['completion-alt-manual-n-override'] = 'Sen completar: {$a->modname} (estabelecido por {$a->overrideuser}). Seleccione para marcar como completo.';
$string['completion-alt-manual-y'] = 'Completado: {$a}. Seleccione para marcar como sen completar.';
$string['completion-alt-manual-y-override'] = 'Completado: {$a->modname} (estabelecido por {$a->overrideuser}). Seleccione para marcar como sen completar.';
$string['completion_automatic'] = 'Amosar a actividade como completada cando se cumpran as condicións';
$string['completiondefault'] = 'Seguimento predeterminado o completado';
$string['completiondisabled'] = 'Desactivado, non se amosa na configuración da actividade';
$string['completionduration'] = 'Matriculación';
$string['completionenabled'] = 'Activado, control por medio da configuración de completado e de actividade';
$string['completionexpected'] = 'Agardase completala en';
$string['completionexpecteddesc'] = 'Completado agardado en {$a}';
$string['completionexpectedfor'] = '{$a->instancename} debería estar completada';
$string['completionexpected_help'] = 'Este axuste especifica a data na que agarda que a actividade estea completada.';
$string['completion-fail'] = 'Completado (non acadou a cualificación de aprobado)';
$string['completion_help'] = 'Se está activada esta opción, faise un seguimento do grao de completado de calquera actividade, ben manual, ben automaticamente, baseándose en determinadas condicións. Pódense fixar múltiples condicións. De ser así, a actividade unicamente se considerará completada cando se cumpran TODAS as condicións.

Una marca a carón do nome da actividade na páxina do curso indica cando está completada a actividade.';
$string['completionicons'] = 'Caixas para marcar o grao de completado';
$string['completionicons_help'] = 'Pode utilizarse unha marca a carón do nome da actividade para indicar que se completou unha actividade.

Se se amosa unha caixa co bordo punteado, a marca aparecerá automaticamente cando se teña completada a actividade segundo as condiciones estabelecidas polo profesor.

Se se amosa unha caixa co bordo sólido, entón poderase premer sobre ela cando pense que completou a actividade. (Se cambia de opinión, pode volver premer nela e a marca desaparecerá).';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Os alumnos poden marcar manualmente a actividade como completada';
$string['completionmenuitem'] = 'Completado';
$string['completion-n'] = 'Sen completar';
$string['completion_none'] = 'Non indicar o completado da actividade';
$string['completionnotenabled'] = 'O completado non está activado';
$string['completionnotenabledforcourse'] = 'O completado non está activado para este curso';
$string['completionnotenabledforsite'] = 'O completado non está activado para este sitio';
$string['completion-n-override'] = 'Sen completar (estabelecido por {$a})';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'O usuario debe permanecer matriculado ata';
$string['completion-pass'] = 'Completado (acadou a cualificación de aprobado)';
$string['completionsettingslocked'] = 'Configuración de completado bloqueados';
$string['completionupdated'] = 'Actualizado o completado para a actividade <b>{$a}</b>';
$string['completionusegrade'] = 'Require cualificación';
$string['completionusegrade_desc'] = 'O alumno debe recibir unha cualificación para completar esta actividade';
$string['completionusegrade_help'] = 'Se está activada, a actividade considerase completada cando un alumno recibe unha cualificación. As iconas Aprobar e Suspender preséntanse se foi estabelecida unha cualificación de aprobado para a actividade.';
$string['completionview'] = 'Requirir ver';
$string['completionview_desc'] = 'O alumno debe ver esta actividade para completala';
$string['completion-y'] = 'Completado';
$string['completion-y-override'] = 'Completado (estabelecido por {$a})';
$string['configcompletiondefault'] = 'A configuración predeterminada para o seguimento do completado cando se crean actividades novas.';
$string['configenablecompletion'] = 'Cando se activa, volvese ás características de seguimento (progreso) do grao de completado no nivel do curso.';
$string['confirmselfcompletion'] = 'Confirmar o completado propio';
$string['courseaggregation'] = 'Condición requirida';
$string['courseaggregation_all'] = 'TODOS os cursos seleccionados para seren completados';
$string['courseaggregation_any'] = 'CALQUERA curso seleccionado para seren completado';
$string['coursealreadycompleted'] = 'Vostede xa completou este curso';
$string['coursecomplete'] = 'Completado do curso';
$string['coursecompleted'] = 'Curso completado';
$string['coursecompletion'] = 'Completado de cursos';
$string['coursecompletioncondition'] = 'Condición: {$a}';
$string['coursegrade'] = 'Cualificación do curso';
$string['coursesavailable'] = 'Cursos dispoñíbeis';
$string['coursesavailableexplaination'] = 'Nota: As condicións do grao de completado deben configurarse para que na lista de arriba apareza un curso.';
$string['criteria'] = 'Criterios';
$string['criteriagroup'] = 'Grupo de criterios';
$string['criteriarequiredall'] = 'Requírense todos os criterios que aparecen embaixo';
$string['criteriarequiredany'] = 'Requírese calquera dos criterios que aparecen embaixo';
$string['csvdownload'] = 'Descargar en formato de folla de cálculo (UTF-8 .csv)';
$string['datepassed'] = 'data do aprobado';
$string['days'] = 'Días';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['defaultcompletion'] = 'Completado predeterminado da actividade';
$string['defaultcompletionupdated'] = 'Cambios gardados';
$string['deletecompletiondata'] = 'Eliminar os datos de completado';
$string['dependencies'] = 'Dependencias';
$string['dependenciescompleted'] = 'Grao de completado doutros cursos';
$string['editcoursecompletionsettings'] = 'Editar a configuración de completado do curso';
$string['enablecompletion'] = 'Activar o seguimento do progreso (para o completado)';
$string['enablecompletion_help'] = 'Se se activa, poden estabelecerse as condicións de completado da actividade e/ou as condicións de completado do curso. Recomendase ter isto activado para que se amosen datos significativos no taboleiro da vista xeral do curso.';
$string['enrolmentduration'] = 'Duración da matriculación';
$string['enrolmentdurationlength'] = 'O usuario debe permanecer matriculado para';
$string['err_noactivities'] = 'No está activada a información sobre o completado de ningunha actividade, polo que non é posíbel presentar ningunha. Pode activar a información sobre o completado dunha actividade editando a súa configuración.';
$string['err_nocourses'] = 'O completado de curso non está activado para ningún outro curso, polo que non é posíbel presentar ningún. Pode activar o completado de cursos mediante a configuración do curso.';
$string['err_nograde'] = 'Neste curso non se estabeleceu unha cualificación de aprobado. Para activar este tipo de criterio, debe crear unha cualificación de aprobado.';
$string['err_noroles'] = 'Non hai roles coas funcionalidades «moodle/course:markcomplete» neste curso.';
$string['err_nousers'] = 'Non hai alumnos nin grupos neste curso aos que presentar a información sobre completado. (De xeito predeterminado, a información sobre completado presentase só aos alumnos, polo que se non hai alumnos verá este erro. Os administradores poden modificar esta opción mediante as pantallas de administración)';
$string['err_settingslocked'] = 'Un ou máis alumnos xa teñen completado un criterio, polo que a configuración foi bloqueada. Desbloquear a configuración dos criterios de completado eliminará calquera dato de usuario o que podería causar confusión.';
$string['err_system'] = 'Produciuse un erro interno no sistema de completado. (Os administradores do sistema poden activar a información de depuración para ver máis detalles.)';
$string['eventcoursecompleted'] = 'Curso completado';
$string['eventcoursecompletionupdated'] = 'Actualizado o curso completado';
$string['eventcoursemodulecompletionupdated'] = 'Completado de actividade de curso actualizado';
$string['eventdefaultcompletionupdated'] = 'Valor predeterminado para completado de actividade de curso actualizado';
$string['excelcsvdownload'] = 'Descargar en formato compatíbel con Excel (.csv)';
$string['fraction'] = 'Fracción';
$string['graderequired'] = 'Requírese unha cualificación';
$string['gradexrequired'] = '{$a} requirido';
$string['hiddenrules'] = 'Agacháronse algúns axustes específicos para <b>{$a}</b>. Para velos desmarque outras actividades';
$string['inprogress'] = 'En progreso';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Completado manual por';
$string['manualcompletionbynote'] = 'Nota: A funcionalidade moodle/course:markcomplete debe estar activada para que un rol apareza na lista.';
$string['manualselfcompletion'] = 'Completado propio manual';
$string['manualselfcompletionnote'] = 'Nota: O bloque de autocompletado debería seren engadido se se activa o autocompletado manual.';
$string['markcomplete'] = 'Marcar como completado';
$string['markedcompleteby'] = 'Marcado como completado por {$a}';
$string['markingyourselfcomplete'] = 'Marcado como completado por vostede';
$string['modifybulkactions'] = 'Modifique as accións que quere editar de xeito masivo';
$string['moredetails'] = 'Máis detalles';
$string['nocriteriaset'] = 'Non hai criterios estabelecidos para o completado deste curso';
$string['nogradeitem'] = 'Non se pode activar o requirimento de cualificación para <b>{$a}</b> porque a actividade non está cualificada.';
$string['notcompleted'] = 'Sen completar';
$string['notenroled'] = 'Vostede non está matriculado neste curso';
$string['nottracked'] = 'Vostede, actualmente, non está a ser supervisado sobre o seu grao de avance neste curso';
$string['notyetstarted'] = 'Aínda non comezou';
$string['overallaggregation'] = 'Requisitos do completado';
$string['overallaggregation_all'] = 'O curso está completo cando se cumpren TODAS as condicións';
$string['overallaggregation_any'] = 'O curso está completo cando se cumpre CALQUERA das condicións';
$string['pending'] = 'Pendente';
$string['periodpostenrolment'] = 'Período despois da matriculación';
$string['privacy:metadata:completionstate'] = 'Se a actividade foi completada';
$string['privacy:metadata:course'] = 'Un identificador do curso';
$string['privacy:metadata:coursecompletedsummary'] = 'Almacena información sobre usuarios que teñen criterios completados nun curso';
$string['privacy:metadata:coursemoduleid'] = 'O ID da actividade';
$string['privacy:metadata:coursemodulesummary'] = 'Almacena os datos de completado da actividade dun usuario';
$string['privacy:metadata:coursesummary'] = 'Almacena os datos de completado do curso para un usuario.';
$string['privacy:metadata:gradefinal'] = 'Cualificación final recibida polo completado do curso';
$string['privacy:metadata:overrideby'] = 'O ID de usuario da persoa que anulou o completado da actividade';
$string['privacy:metadata:reaggregate'] = 'Se o completado do curso foi reagregado.';
$string['privacy:metadata:timecompleted'] = 'O momento no que se completou o curso.';
$string['privacy:metadata:timeenrolled'] = 'O momento no que o usuario foi inscrito no curso';
$string['privacy:metadata:timemodified'] = 'O momento no que se modificou o completado da actividade';
$string['privacy:metadata:timestarted'] = 'O momento no que se iniciou o curso.';
$string['privacy:metadata:unenroled'] = 'Se o usuario foi desmatriculado do curso';
$string['privacy:metadata:userid'] = 'O ID de usuario da persoa con datos de completado da actividade e do curso';
$string['privacy:metadata:viewed'] = 'Se a actividade foi vista';
$string['progress'] = 'Progreso do alumno';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progreso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Recoñecemento de aprendizaxe previa';
$string['remainingenroledfortime'] = 'Permanecer matriculado durante un período de tempo especificado';
$string['remainingenroleduntildate'] = 'Permanecer matriculado ata unha data especificada';
$string['reportpage'] = 'Amosando os usuarios {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Criterios requiridos';
$string['resetactivities'] = 'Limpar todas as actividades e recursos marcados';
$string['restoringcompletiondata'] = 'Escribindo os datos do grao de completado';
$string['roleaggregation'] = 'Condición requirida';
$string['roleaggregation_all'] = 'TODOS os roles seleccionados marquen cando se cumpren as condicións';
$string['roleaggregation_any'] = 'CALQUERA dos roles seleccionados marquen cando se cumpren as condicións';
$string['roleidnotfound'] = 'Non se atopa a matricula co ID {$a}';
$string['saved'] = 'Gardado';
$string['seedetails'] = 'Ver detalles';
$string['select'] = 'Seleccionar';
$string['self'] = 'Propio';
$string['selfcompletion'] = 'Completado propio';
$string['showinguser'] = 'Amosando o usuario';
$string['unenrolingfromcourse'] = 'Dando de baixa do curso';
$string['unenrolment'] = 'Dar de baixa';
$string['unit'] = 'Unidade';
$string['unlockcompletion'] = 'Desbloquear as opcións do grao de completado';
$string['unlockcompletiondelete'] = 'Desbloquear as opcións de completado e eliminar os datos do grao de completado do usuario';
$string['updateactivities'] = 'Actualizar o estado de completado de actividades seleccionadas';
$string['usealternateselector'] = 'Usar o selector de curso alternativo';
$string['usernotenroled'] = 'O usuario non está matriculado neste curso';
$string['viewcoursereport'] = 'Ver o informe do curso';
$string['viewingactivity'] = 'Vendo os {$a}';
$string['withconditions'] = 'Con condicións';
$string['writingcompletiondata'] = 'Escribindo os datos do grao de completado';
$string['xdays'] = '{$a} días';
$string['yourprogress'] = 'O seu progreso';
