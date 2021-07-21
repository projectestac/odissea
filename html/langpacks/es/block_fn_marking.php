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
 * Strings for component 'block_fn_marking', language 'es', version '3.11'.
 *
 * @package     block_fn_marking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptoverride'] = 'Aceptar anulación';
$string['aggregatetype'] = 'Tipo de agregado';
$string['allactivitytypes'] = 'Todos los tipos de actividad';
$string['allcategories'] = 'Todas las categorías';
$string['allcourseswithblock'] = 'Todos los cursos con bloque';
$string['allgroups'] = 'Todos los grupos';
$string['allparticipants'] = 'Todos los participantes';
$string['assign'] = 'Tarea';
$string['atmaxresubmission'] = 'Reenvío máximo';
$string['blockinfo'] = 'Información de bloque';
$string['blocksettings'] = 'Configuración de un bloque FN Marking';
$string['blocktitle'] = 'Administrador de Marcado';
$string['cfgdisplaytitle'] = 'Mostrar título';
$string['checkagain'] = 'Revisar otra vez';
$string['close'] = 'Cerrar';
$string['config_days'] = 'Establecer el número de estudiantes no conectados en x días';
$string['config_days_help'] = '<p>Este ajuste permite configurar </p>
<p>el número de días que el alumno no ha iniciado sesión en el curso.</p>';
$string['config_percent'] = 'Establecer el porcentaje de calificaciones';
$string['config_percent_help'] = '<p>Este ajuste permite configurar </p>
<p>el porcentaje de calificaciones y después de establecer el porcentaje verá el número de calificaciones del estudiante por debajo de x porciento.</p>';
$string['config_sectiontitles'] = 'Titulos de sección';
$string['config_sectiontitles_help'] = '<p>en blanco=curso predeterminado.</p>';
$string['config_showgradeslink'] = 'Mostrar enlace de calificación';
$string['config_showgradeslink_help'] = '<p>Este ajuste permite mostrar </p>
<p>u ocultar el enlace de calificación en el bloque.</p>';
$string['config_showmarked'] = 'Mostrar las actividades marcadas';
$string['config_showmarked_help'] = '<p>Esta opción permite mostrar </p>
<p>u ocultar las actividades marcadas en el bloque.</p>';
$string['config_shownotloggedinuser'] = 'Mostrar usuario no conectado';
$string['config_shownotloggedinuser_help'] = '<p>Este ajuste permite mostrar </p>
<p>u ocultar el número de alumnos que no se han conectado en la semana anterior. </p>';
$string['config_showreportlink'] = 'Mostrar el enlace del informe';
$string['config_showreportlink_help'] = '<p>Este ajuste permite mostrar </p>
<p>u ocultar el enlace del informe en el bloque.</p>';
$string['config_showsaved'] = 'Mostrar las actividades preliminares';
$string['config_showsaved_help'] = '<p>Esta opción permite mostrar </p>
<p>u ocultar las actividades preliminares del estudiante en el bloque.</p>';
$string['config_showstudentmarkslessthanfiftypercent'] = 'Mostrar los estudiantes con calificaciones inferiores a 50%';
$string['config_showstudentmarkslessthanfiftypercent_help'] = '<p>Este ajuste permite mostrar </p>
<p>u ocultar el número de estudiantes con calificaciones inferiores a 50%.</p>';
$string['config_showstudentnotsubmittedassignment'] = 'Mostrar al alumno la tarea no enviada';
$string['config_showstudentnotsubmittedassignment_help'] = '<p>Este ajuste permite mostrar </p>
<p>u ocultar el número de estudiantes con tarea no enviada la semana pasada.</p>';
$string['config_showunmarked'] = 'Mostrar actividades sin marcar';
$string['config_showunmarked_help'] = '<p>Esta opción permite mostrar </p>
<p>u ocultar las actividades no marcadas en el bloque. </p>';
$string['config_title'] = 'Título de la instancia';
$string['config_title_help'] = '<p>Este ajuste permite cambiar el título del bloque. </p>
<p>Si el encabezado del bloque está oculto, el título no aparecerá.</p>';
$string['config_unsubmitted'] = 'Mostrar actividades no entregadas';
$string['config_unsubmitted_help'] = '<p>Este ajuste permite mostrar </p>
<p>u ocultar las actividades no enviadas en el bloque.</p>';
$string['coursecategories'] = 'Categorías de cursos';
$string['coursecategoriesincluded'] = 'Categorías de cursos incluidas';
$string['descconfig'] = '<p> Active esta opción para ocultar todos los bloques al ver la interfaz del administrador de marcado y proporcionar un aspecto menos desordenado. Tenga en cuenta que antes de activar esta opción, tendrá que agregar este código a <b><em> yourmoodlesite/theme/base/config.php</em>. </b></p>
<p> </p>
<pre><code style="font-size:12px; color: # FF7600;">
// Ocultar columnas de bloque izquierda y derecha al ver el Administrador de marcado
\'markingmanager\' => array (
       \'file\' => \'general.php\',
       \'regions\' => array (),
       \'options\' => array (\'noblocks\' => true),
),
</code></pre>
Después de agregar el código anterior, su archivo debe verse como la imagen <a href="http://moodlefn.com/docs/marking_manager_no_blocks.png"> mostrada aquí </a>.';
$string['displaytitle'] = 'Actividades enviadas';
$string['editortoggle'] = 'Cambio de editor en línea';
$string['experimental'] = 'Experimental';
$string['fn_marking:addinstance'] = 'Añadir instancia';
$string['fn_marking:myaddinstance'] = 'Agregar un nuevo bloque de Administrador de Marcado al Panel de Control';
$string['fn_marking:viewblock'] = 'Ver el bloque';
$string['fn_marking:viewreadonly'] = 'Ver sólo lectura';
$string['forum'] = 'Foro';
$string['grade'] = '<b>Calificación:</b>';
$string['gradeoverridedetected'] = 'Se ha detectado anulación de calificación';
$string['gradeslink'] = 'Calificaciones';
$string['gradingstudentprogress'] = 'Mostrando {$a->index} de {$a->count}';
$string['headertitle'] = 'Administrador de Marcado';
$string['help'] = 'Ayuda';
$string['hideonlineeditor'] = 'Ocultar editor en línea';
$string['include_orphaned'] = 'Incluir actividades huérfanas';
$string['includecourses'] = 'Cursos a incluir';
$string['keepseparate'] = 'Mantenga separadas las tareas preliminares';
$string['labelnoblocks'] = 'Ocultar todos los bloques';
$string['lastrefreshtime'] = 'Última actualización: hace {$a}';
$string['lastrefreshupdating'] = 'Última actualización: Actualizando';
$string['listcourseszeroungraded'] = 'Lista de cursos con cero actividades sin calificar';
$string['manualgrading'] = 'Calificación manual';
$string['marked'] = 'Calificado';
$string['markinmanagerscoursecats'] = 'Administrador de Marcado - Categorías de Curso';
$string['markinmanagerscoursecatsdesc'] = 'Seleccionadas las categorías de cursos que serán procesadas por el Administrador de Marcado en la página principal de Moodle y en el panel de control.';
$string['moodledefaultview'] = 'Vista predeterminada de Moodle';
$string['moodlegradebook'] = 'Abrir el Libro de calificaciones de Moodle';
$string['morethan10'] = 'Hay más de 10 cursos con trabajo sin calificar.';
$string['name'] = 'Nombre';
$string['nograde'] = 'No calificado';
$string['notloggedin'] = 'no han iniciado sesión por al menos';
$string['notsubmittedany'] = 'no han enviado ninguna actividad en';
$string['opengradereport'] = 'Abrir el reporte de calificación';
$string['overallfailinggrade'] = 'Tienen una calificación total menor que';
$string['pagelayout'] = 'Diseño de página';
$string['pageload'] = 'Carga de página';
$string['pluginname'] = 'Administrador de Marcado';
$string['pluginnametext'] = 'Nombre de plug-in';
$string['plugintitle'] = 'Administrador de Marcado';
$string['posts'] = 'Mensajes';
$string['progressreport'] = 'Informe de progreso';
$string['quiz'] = 'Examen';
$string['rating'] = 'Clasificación';
$string['refreshmodecourse'] = 'Bloquear modo de actualización - Curso';
$string['refreshmodefrontpage'] = 'Modo de refresco de bloque - Página principal';
$string['removeoverride'] = 'Eliminar anulación';
$string['replies'] = 'Respuestas';
$string['reportslink'] = 'Informes';
$string['save'] = 'Grabar';
$string['saved'] = 'Borrador';
$string['scale'] = 'Escala';
$string['sectiontitles'] = 'Títulos de sección';
$string['selectcategories'] = 'Seleccione las categorías';
$string['selectedcourses'] = 'Cursos seleccionados (abajo)';
$string['setblocktitle'] = 'Establecer el título del bloque';
$string['setnumberofdays'] = 'Establecer el número de días';
$string['setpercentmarks'] = 'Establecer el porcentaje de calificaciones';
$string['show'] = 'Mostrar';
$string['showgradeslink'] = 'Informe de progreso';
$string['showmarked'] = 'Actividades calificadas';
$string['shownotloggedinuser'] = 'Mostrar usuario no conectado';
$string['showonlineeditor'] = 'Mostrar el editor en línea';
$string['showreportslink'] = 'Lista de alumnos';
$string['showsaved'] = 'Mostrar las actividades preliminares';
$string['showstudentmarkslessthanfiftypercent'] = 'Mostrar el número de calificaciones de los alumnos por debajo del 50%';
$string['showstudentnotsubmittedassignment'] = 'Mostrar el número de estudiantes que no han enviado la tarea';
$string['showtopmessage'] = 'Mostrar mensaje encima de la interfaz';
$string['showunmarked'] = 'Requiere calificación';
$string['showunsubmitted'] = 'Actividades no enviadas';
$string['simplegradebook'] = 'Informe de Progreso';
$string['sort'] = 'Ordenar';
$string['student'] = 'Alumno';
$string['student_have_posted'] = 'Los siguientes alumnos han publicado en este foro:';
$string['studentlist'] = 'Lista de Alumnos';
$string['studentssubmission'] = 'Envío del alumno';
$string['successful'] = 'Exitoso';
$string['teachersfeedback'] = 'Comentarios del Profesor';
$string['title:failingwithgradelessthanxpercent'] = 'Los siguientes alumnos tienen una calificación general menor que';
$string['title:markslessthanxpercent'] = 'Los siguientes alumnos no han enviado ninguna actividad en';
$string['title:notlogin'] = 'Los siguientes estudiantes no se han conectado en';
$string['title:notsubmittedanyactivity'] = 'Los siguientes alumnos no han enviado ninguna actividad en';
$string['title:saved'] = 'Los siguientes estudiantes tienen actividades en borrador';
$string['topmessage'] = 'Mensaje para mostrar';
$string['ttmarking'] = 'Interfaz de Calificación';
$string['type'] = 'Tipo';
$string['unmarked'] = 'Requiere Calificación';
$string['unsubmitted'] = 'No enviado';
$string['updatecache'] = 'Actualizar Caché';
$string['updatecachewarning'] = '¿Desea actualizar el bloque de Administrador de Calificaciones?';
$string['version'] = 'Versión';
$string['view'] = 'Visualizar';
$string['visitpluginhome'] = 'Visite la página principal del plugin';
$string['whocanrate'] = 'Quién puede calificar';
