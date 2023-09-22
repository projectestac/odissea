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
 * Strings for component 'attendanceregister', language 'es', version '4.1'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = '¿Está seguro que desea eliminar esta sesión fuera de línea?';
$string['attendanceregister:addinstance'] = 'Añadir nuevo registro de asistencia';
$string['attendanceregister:addotherofflinesess'] = 'Puede añadir Sesiones fuera de línea en el registro de otras personas';
$string['attendanceregister:addownofflinesess'] = 'Puede agregar sesiones fuera de línea en su propio registro';
$string['attendanceregister:deleteotherofflinesess'] = 'Puede borrar sesiones fuera de línea en el registro de otras personas';
$string['attendanceregister:deleteownofflinesess'] = 'Puede borrar sesiones fuera de línea de su propio registro';
$string['attendanceregister:recalcsessions'] = 'Puede forzar el recálculo de las sesiones del Registro de Asistencia.';
$string['attendanceregister:tracked'] = 'Está monitorizado por el Registro de Asistencia';
$string['attendanceregister:viewotherregisters'] = 'Puede ver los Registros de Asistencia de otras personas';
$string['attendanceregister:viewownregister'] = 'Puede ver sus propios registros de asistencia.';
$string['back_to_normal'] = 'Volver a la versión normal';
$string['back_to_tracked_user_list'] = 'Volver a la lista de usuarios monitorizados';
$string['click_for_detail'] = 'haga click para detalles';
$string['comments'] = 'Comentarios';
$string['completiondurationgroup'] = 'Tiempo monitorizado total';
$string['completiontotalduration'] = 'Tiempo requerido [minutos]';
$string['count'] = '#';
$string['crontask'] = 'Volver a calcular las sesiones del registro de asistencia';
$string['dayscertificable'] = 'Días atrás';
$string['dayscertificable_exceeded'] = 'No debe ser más de {$a} días.';
$string['dayscertificable_help'] = 'Limita la antigüedad de las sesiones sin conexión. <br/>
Un estudiante no puede grabar una sesión fuera de línea mayor a este número de días.';
$string['duration'] = 'Duración';
$string['duration_hh_mm'] = '{$a->hours} h, {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';
$string['enable_offline_sessions_certification'] = 'Activar Sesiones Offline';
$string['end'] = 'Fin';
$string['first_calc_at_next_cron_run'] = 'Cualquier sesión pasada se mostrará en la próxima ejecución de Cron.';
$string['force_recalc_all_session'] = 'Recalcular todas las Sessiones en línea';
$string['force_recalc_all_session_help'] = 'Elimine y vuelva a calcular todas las sesiones en línea de todos los usuarios monitorizados. <br />¡Normalmente usted <b> no necesita hacerlo </b>! <br />Las nuevas sesiones se calculan automáticamente en segundo plano (después de algún retraso). <br />Esta operación puede ser útil <b> solamente </b>:<ul><li> Después de cambiar el rol de un usuario que actuó anteriormente en cualquiera de los cursos seguidos con un rol diferente(es decir, cambiar de Profesor a Estudiante, cuando se realiza un seguimiento de Estudiante y no de Profesor). </li><li> Después de modificar la configuración de Registro que afecta el cálculo de Sesiones(es decir, <i> Modo de seguimiento de asistencia </i>, <i> Tiempo de espera de sesión en línea </i>) </li></ul>¡Usted <b> no necesita volver a calcular cuando inscriba nuevos usuarios </b>! <br /> <br />El recálculo puede ejecutarse inmediatamente o programarse para su ejecución por el siguiente cron. La ejecución programada podría ser más eficiente para cursos muy concurridos.';
$string['force_recalc_all_session_now'] = 'Recalcular Sesiones, ahora';
$string['force_recalc_user_session'] = 'Recalcular Sesiones en línea de este Usuario';
$string['force_recalc_user_session_help'] = 'Eliminar y volver a calcular todas las sesiones en línea de este usuario. <br />
Normalmente usted <b> no necesita hacerlo </b>! <br />
Las nuevas sesiones se calculan automáticamente en segundo plano (después de algún retraso). <br />
Esta operación puede ser útil <b> solamente </b>:
<ul>
<li> Después de cambiar el rol del usuario, el / ella actuó previamente en cualquiera de los cursos seguidos con un rol diferente
(es decir, cambiar de profesor a Estudiante, cuando se realiza un seguimiento de Estudiante y no de Profesor). </li>
<li> Después de modificar la configuración de Registro que afecta el cálculo de Sesiones
(es decir, <i> Modo de seguimiento de asistencia </i>, <i> Tiempo de espera de sesión en línea </i>) </li>
</ul>';
$string['fullname'] = 'Nombre';
$string['grandtotal_time'] = 'Tiempo total';
$string['insert_new_offline_session'] = 'Insertar una nueva sesión de trabajo fuera de línea';
$string['insert_new_offline_session_for_another_user'] = 'Inserte una nueva sesión de trabajo sin conexión para {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Último Registro de Finalización de Sesión en línea (excl. Sesión actual)';
$string['last_session_logout'] = 'Final de la Última Sesión';
$string['last_site_access'] = 'Última actividad en el Sitio';
$string['last_site_login'] = 'Último inicio de sesión en el Sitio';
$string['login_must_be_before_logout'] = '¡Inicio después del fin!';
$string['logout_is_future'] = 'No debería estar en el futuro';
$string['mandatory_offline_sessions_comments'] = 'Comentarios obligatorios';
$string['mandatoryofflinespecifycourse'] = 'Selección obligatoria del Curso';
$string['mandatoryofflinespecifycourse_help'] = 'La especificación de un curso en sesiones fuera de línea será obligatoria';
$string['maynotaddselfcertforother'] = 'No puede agregar sesiones fuera de línea para otros usuarios.';
$string['mod_attendance_recalculation'] = 'Módulo recalcular registro para actualizaciones de sesiones';
$string['modulename'] = 'Registro de Asistencia (Attendance Register)';
$string['modulename_help'] = 'El Registro de Asistencia calcula el tiempo que los usuarios emplean trabajando en cursos en línea.<br /> Opcionalmente permite además considerar actividades fuera de línea.<br /> Dependiendo del modo de asistencia, el registro puede supervisar actividades en un solo curso, en todos los cursos de la misma categoría, o en todos los cursos "meta ligados" al curso en donde está el registro.<br /> Las sesiones en línea son calculadas mediante las bitácoras de entradas registradas por Moodle.<br /> <b>Las sesiones nuevas se añaden con cierto retraso por el programa CRON, después que el usuario sale del sitio.</b>';
$string['modulenameplural'] = 'Registros de asistencia';
$string['myattendanceregisteraggregates'] = 'Valores agregados registrados de Mi asistencia';
$string['myattendanceregistersessions'] = 'Sesiones registradas de Mi asistencia';
$string['never'] = '(nunca)';
$string['no_refcourse'] = '(Curso no especificado)';
$string['no_session'] = 'Sin Sesión';
$string['no_session_for_this_user'] = '- Aún no hay sesión para este usuario, todavía -';
$string['no_tracked_user'] = '- ningún usuario seguido/supervisado por el registro de asistencia';
$string['not_specified'] = '(no especificado)';
$string['offline'] = 'Fuera de línea';
$string['offline_refcourse_duration'] = 'Tiempo fuera de línea, Curso:';
$string['offline_session_comments'] = 'Comentarios';
$string['offline_session_comments_help'] = 'Describe el tópico/tema de la sesión de trabajo fuera de línea';
$string['offline_session_deleted'] = 'Sesión Fuera de línea borrada';
$string['offline_session_end'] = 'Fin';
$string['offline_session_ref_course'] = 'Curso de Referencia';
$string['offline_session_ref_course_help'] = 'Seleccione el curso para el que se hizo este trabajo fuera de línea o el curso que cubre el tema de trabajo';
$string['offline_session_saved'] = 'Nueva sesión fuera de línea grabada';
$string['offline_session_start'] = 'Empezar';
$string['offline_session_start_help'] = 'Elegir las fechas de principio y fin  &amp; Hora de la sesión de trabajo fuera de línea que desea anotar.<br /> TLa sesión fuera de línea no puede traslaparse con ninguna sesión previamente grabada, ni en línea ni fuera de línea, ni con la sesión en línea actual.';
$string['offline_sessions_certification'] = 'Sesiones de trabajo fuera de línea';
$string['offline_sessions_certification_help'] = 'Les permite a los usuarios insertar sesiones de trabajo fuera de línea.<br /> Esto es una forma de <i>Auto-Certificación</i> del trabajo realizado.<br /> Esto puede ser útil si la "burocracia" requiere que se mantengan registros de todas las actividades de los estudiantes.<br /> Solamente los usuarios reales pueden añadir sesiones fuera de línea: <i>Los que se identificaron como...</i> administradores ¡no pueden hacerlo!';
$string['offline_sessions_total_duration'] = 'Tiempo total fuera de línea';
$string['offlinecomments'] = 'Comentarios del Usuario';
$string['offlinecomments_help'] = 'Habilitar añadir comentarios textuales a las sesiones fuera de línea';
$string['offlinespecifycourse'] = 'Especificar curso en sesiones fuera de línea';
$string['offlinespecifycourse_help'] = 'Permitirle al usario seleccionar el curso al que la sesión fuera de línea está relacionado.<br /> Esto solamente tiene sentido si el Registro supervisa más de un curso (por ejemplo: El modo de asistencia es  "Categoría" or "Meta-ligado")';
$string['online'] = 'En línea';
$string['online_offline'] = 'En Línea/Fuera de línea';
$string['online_session_updated'] = 'Sesiones en línea actualizadas';
$string['online_session_updated_report'] = '{$a->fullname} Sesiones en línea actualizadas: {$a->numnewsessions} nueva(s) encontrada(s)';
$string['online_sessions_total_duration'] = 'Duración total de sesiones en línea';
$string['onlyrealusercanaddofflinesessions'] = 'Solamente los usuarios reales pueden añadir una sesión fuera de línea';
$string['onlyrealusercandeleteofflinesessions'] = 'Solamente los usuarios reales pueden borrar una sesión fuera de línea';
$string['overlaps_current_session'] = 'Se sobrepone con la sesión en línea actual (desde la entrada actual)';
$string['overlaps_old_sessions'] = 'Se sobrepone con otra sesión, sea en línea o fuera de línea';
$string['participants_attendance_report_viewed'] = 'Informe de asistencia de participantes visto';
$string['pluginadministration'] = 'Administración del registro de asistencia';
$string['pluginname'] = 'Registro de asistencia';
$string['prev_site_login'] = 'Inicio de sesión anterior en el Sitio';
$string['privacy:metadata:attendanceregister_aggregate'] = 'Guarda registros de sesiones agregadas por usuario';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'La duración de la sesión';
$string['privacy:metadata:attendanceregister_aggregate:grandtotal'] = 'Gran total de tiempo';
$string['privacy:metadata:attendanceregister_aggregate:lastsessionlogout'] = 'Última salida de sesión en línea del usuario, tomada de la salida de attendanceregister_session';
$string['privacy:metadata:attendanceregister_aggregate:onlinesess'] = 'Si es que la sesión es en línea o fuera de línea';
$string['privacy:metadata:attendanceregister_aggregate:refcourse'] = 'El curso al cual se refiere una sesión fuera de línea';
$string['privacy:metadata:attendanceregister_aggregate:total'] = 'Total de tiempo de sesión';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'La userid';
$string['privacy:metadata:attendanceregister_lock'] = 'Bloquea el registro de asistencia del usuario durante el re-cálculo';
$string['privacy:metadata:attendanceregister_lock:userid'] = 'Para poder calcular el registro del usuario, almacenamos el userid de la sesión. Este dato es temporal y es eliminado después que sea completado el re-cálculo de la sesión';
$string['privacy:metadata:attendanceregister_session'] = 'Guarda registro de las sesiones del usuario';
$string['privacy:metadata:attendanceregister_session:addedbyuserid'] = 'Si la sesión fuera de línea es insertada por otro usuario, esta es la userid relacionada';
$string['privacy:metadata:attendanceregister_session:comments'] = 'Comentarios a sesiones fuera de línea';
$string['privacy:metadata:attendanceregister_session:duration'] = 'La duración de la sesión';
$string['privacy:metadata:attendanceregister_session:login'] = 'El sello de tiempo del ingreso';
$string['privacy:metadata:attendanceregister_session:logout'] = 'El sello de tiempo de la salida';
$string['privacy:metadata:attendanceregister_session:onlinesess'] = 'Si es que la sesión es en línea o fuera de línea';
$string['privacy:metadata:attendanceregister_session:refcourse'] = 'El curso al cual se refiere una sesión fuera de línea';
$string['privacy:metadata:attendanceregister_session:userid'] = 'La userid';
$string['recalc_already_pending'] = '(Ya estaba pendiente de ejecutarse en el cron siguiente)';
$string['recalc_complete'] = 'Re-cálculo de sesiones completado';
$string['recalc_scheduled'] = 'El re-cálculo de la sesión ha sido agendado. Se ejecutará en el siguiente trabajo de Cron';
$string['recalc_scheduled_on_next_cron'] = 'El re-cálculo de la sesión ha sido agendado para realizarse en el siguiente trabajo de Cron';
$string['ref_course'] = 'Curso de Referencia';
$string['registername'] = 'nombre del registro de asistencia';
$string['registertype'] = 'Modo de seguimiento de asistencia';
$string['registertype_help'] = 'El Modo de Seguimiento de Asistencia determina cursos monitorizados por el registro (p.ej., donde la actividad de los usuarios está monitorizada)_
* _Únicamente este curso_: Sólo en el curso donde está el módulo de asistencia.
* _Todos los cursos de la misma categoría_: Se monitorizará la actividad de todos los cursos de la misma categoría en la que está el curso que tiene el módulo.
* _Todos los cursos enlazados mediante metaenlace de curso_: Se monitorizará la actividad en este curso y en todos los cursos enlazados mediante metaenlace de curso.';
$string['schedule_reclalc_all_session'] = 'Agendar Re-cálculo de Sesiones';
$string['select_a_course'] = '- Seleccione un Curso -';
$string['select_a_course_if_any'] = '- Seleccione un curso, si acaso -';
$string['session_added_by_another_user'] = 'Añadido por: {$a}';
$string['sessions_grandtotal_duration'] = 'Grán total de tiempo';
$string['sessiontimeout'] = 'Tiempo-fuera de sesión en línea';
$string['sessiontimeout_help'] = 'Tiempo-fuera de sesión se emplea para estimar la duración de la sesión en línea.<br /> La sesión en línea seá al menos <b>la mitad</b> de lo que dure el tiempo-fuera.<br /> Observe que si el tiempo-fuera dura mucho tiempo, el registro tiende a sobre-estimar la duración de las sesiones en línea.<br /> si dura muy poco, las sesiones reales se cortarán en muchas sesiones más cortas.<br /> <h3>Explicación completa</h3> Las sesiones de trabajo en línea son <b>estimadas</b> revisando las bitácoras del usuario en los cursos supervisados (vea <i>Modo de seguimiento de asistencia</i>).<br / > Si un período de tiempo transcurrido fue más corto que el que contó el tiempo fuer entre dos entradas en la bitácora, el registro interpreta que el usuario estuvo trabajando en línea de forma contínua (por ejemplo: la sesión continúa).<br /> Si un período de tiempo transcurrido fue más largo que el que contó el tiempo-fuera entre dos entradas en la bitácora, el registro interpreta que el usuario dejó de trabajar en línea (por ejemplo: la sesión terminó) I <b>la mitad</b> del tiempo transcurrido con el tiempo-fuera (por ejemplo: la sesión terminó) y regresó a trabajar para la siguiente entrada al sitio en la bitácora (empezó una sesión nueva)';
$string['show_my_sessions'] = 'Mostrar mis sesiones';
$string['show_printable'] = 'Mostrar versión imprimible';
$string['standardlog_disabled'] = 'La Bitácora Estándar de Moodle etá deshabilitada. Todas las sesiones nuevas de usuarios no son monitoreadas';
$string['standardlog_readonly'] = 'La Bitácora Estándar de Moodle es solo-lectura. Todas las sesiones nuevas de usuario no son monitoreadas';
$string['start'] = 'Principio';
$string['total_time_offline'] = 'Tiempo total fuera de línea';
$string['total_time_online'] = 'Tiempo total en línea';
$string['tracked_courses'] = 'Cursos supervisados/seguidos';
$string['tracked_users'] = 'Usuarios supervisados/seguidos';
$string['type_category'] = 'Todos los cursos en la misma categoría';
$string['type_course'] = 'Únicamente este curso';
$string['type_meta'] = 'Todos los cursos ligados por meta liga a curso';
$string['unknown'] = '(desconocido)';
$string['unreasoneable_session'] = '¿Estás seguro? ¡Es más de {$a} horas!';
$string['updating_online_sessions_of'] = 'Actualizando sesiones en línea de {$a}';
$string['user_attendance_addoffline'] = 'Añadir una entrada en asistencia de usuario fuera-de-línea';
$string['user_attendance_deloffline'] = 'Eliminar una entrada de usuario en asistencia fuera-de-línea';
$string['user_attendance_details_viewed'] = 'Detalles de asistencia de usuario vistos';
$string['user_sessions_summary'] = 'Resumen de sesiones del usuario';
