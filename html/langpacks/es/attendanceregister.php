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
 * Strings for component 'attendanceregister', language 'es', version '3.11'.
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
$string['never'] = '(nunca)';
$string['no_refcourse'] = '(Curso no especificado)';
$string['no_session'] = 'Sin Sesión';
$string['not_specified'] = '(no especificado)';
$string['offline'] = 'Fuera de línea';
$string['offline_session_comments'] = 'Comentarios';
$string['offline_session_deleted'] = 'Sesión Fuera de línea borrada';
$string['offline_session_end'] = 'Fin';
$string['offlinecomments'] = 'Comentarios del Usuario';
$string['online'] = 'En línea';
$string['online_offline'] = 'En Línea/Fuera de línea';
$string['prev_site_login'] = 'Inicio de sesión anterior en el Sitio';
$string['select_a_course'] = '- Seleccione un Curso -';
$string['session_added_by_another_user'] = 'Añadido por: {$a}';
$string['unreasoneable_session'] = '¿Estás seguro? ¡Es más de {$a} horas!';
