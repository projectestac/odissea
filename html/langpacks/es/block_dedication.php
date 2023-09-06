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
 * Strings for component 'block_dedication', language 'es', version '4.1'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nombre del curso';
$string['admin_filter_courseid_help'] = 'Filtrar el informe por nombre de curso';
$string['admin_filter_form'] = 'Configuración de la dedicación al curso';
$string['admin_filter_form_text'] = 'Seleccionar el rango de fechas y el máximo de tiempo entre clics de la misma sesión.';
$string['admin_filter_maxtime'] = 'Final del período';
$string['admin_filter_maxtime_help'] = 'Considerar solamente entradas de bitácora que terminan antes de esta fecha';
$string['admin_filter_mintime'] = 'Inicio del período';
$string['admin_filter_mintime_help'] = 'Considerar solamente entradas de bitácora después  de esta fecha';
$string['admin_filter_submit'] = 'Calcular';
$string['allloglifetime'] = 'Conservar historia de sesión por';
$string['averagetimespent'] = '<strong>Tiempo promedio empleado en curso:</strong> {$a}';
$string['cleanuptask'] = 'Trabajo de limpieza de historia de sesión';
$string['collect_dedication'] = 'Recolectar datos para bloque de dedicación';
$string['configallloglifetime'] = 'Esto especifica el tiempo que quiere conservar los datos acerca de la duración de la sesión. Las sesiones que sean más antiguas que esta edad son eliminadas automáticamente.';
$string['connectionratiorow'] = 'Conexiones por día';
$string['dedication:addinstance'] = 'Permitir añadir bloque de dedicación al curso';
$string['dedication:myaddinstance'] = 'Permitir añadir bloque de dedicación ala página del Tablero';
$string['dedication:viewreports'] = 'Permitir ver informes de dedicación';
$string['dedicationall'] = 'Dedicación de todos los miembros del curso. Haz clic en el nombre de un miembro para ver su dedicación detallada.';
$string['dedicationrow'] = 'Dedicación al curso';
$string['enrolmententity'] = 'Inscripción';
$string['enrolmentmethod'] = 'Método de inscripción';
$string['entity_dedication'] = 'Dedicación al curso';
$string['excludesessionslessthan'] = 'Excluir sesiones menores de {$a}';
$string['group'] = 'Grupo';
$string['groupentity'] = 'Grupo';
$string['ignore_sessions_limit'] = 'Ignorar límite de sesión';
$string['ignore_sessions_limit_desc'] = 'Elimina sesiones breves. Cualquiera menor que este valor (en minutos) se ignorará en el informe de dedicación.';
$string['lastupdated'] = 'Última actualización: {$a}';
$string['period'] = 'Período desde <em>{$a->mintime}</em> hasta <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tiempo transcurrido:</strong>  {$a}';
$string['pluginname'] = 'Dedicación al curso';
$string['privacy:metadata'] = 'El plugin del bloque de dedicación almacena tiempos que los usuarios hayan dedicado a cursos.';
$string['privacy:metadata:block_dedication:courseid'] = 'ID del curso para la dedicación del usuario';
$string['privacy:metadata:block_dedication:timespent'] = 'Tiempo empleado en el curso';
$string['privacy:metadata:block_dedication:timestart'] = 'La hora de inicio de los datos recolectados';
$string['privacy:metadata:block_dedication:userid'] = 'ID del usuario de la dedicación del usuario';
$string['report_dedication'] = 'Reporte de Dedicación Total';
$string['report_timespent'] = 'Informe de tiempo dedicado';
$string['session_limit'] = 'Límite de sesión';
$string['session_limit_desc'] = 'Límite de sesión para los filtros de la página del reporte';
$string['sessionduration'] = 'Duración';
$string['sessiondurationsum'] = 'Duración de sesión (suma)';
$string['sessionstart'] = 'Inicio de sesión';
$string['showestimatedtime'] = 'Mostrar tiempo empleado estimado a usuarios';
$string['showestimatedtime_help'] = 'Esta configuración le permite a los usuarios ver sus tiempos estimados empleados en el bloque.';
$string['timespent_estimation'] = 'Su tiempo estimado empleado en curso es:';
$string['timespentincourse'] = 'Tiempo empleado en curso';
$string['timespentreport'] = 'Informe completo';
$string['timespenttasknotrunning'] = 'El trabajo de cálculo del tiempo empleado aun no se ha ejecutado.';
$string['totaltimespent'] = '<strong>Total de todo el tiempo empleado en el curso:</strong> {$a}';
$string['user_dedication_datasource'] = 'Dedicación de los usuarios';
$string['userdedication'] = 'Dedicación detallada de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Ver informe de duración de sesión';
