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
 * Strings for component 'block_gismo', language 'es', version '3.11'.
 *
 * @package     block_gismo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = 'Acerca de Gismo';
$string['about_gismo'] = 'Acerca de Gismo';
$string['accesses'] = 'Accesos';
$string['accesses_tooltip'] = 'accesos';
$string['actions_on'] = 'Acciones sobre';
$string['activities'] = 'Actividades';
$string['assignments'] = 'Asignaciones';
$string['assignments22'] = 'Asignaciones 2.2';
$string['assignments22_chart_title'] = 'Actividades:  resumen de asignaciones 2.2';
$string['assignments_chart_title'] = 'Actividades: asignaciones resumen';
$string['authors'] = 'Autores';
$string['cancel'] = 'Cancelar';
$string['chats'] = 'Chats';
$string['chats_chart_title'] = 'Actividades: resumen de chats';
$string['chats_over_time'] = 'Chats en el tiempo';
$string['chats_over_time_chart_title'] = 'Actividades: contribuciones a charlas con el tiempo';
$string['chats_ud_chart_title'] = 'Actividades: detalles del estudiante sobre los chats';
$string['close'] = 'Cerrar';
$string['completion'] = 'Finalización';
$string['completion_assignment22_chart_title'] = 'Finalización asignaciones 2.2';
$string['completion_assignment22_menu'] = 'Asignaciones 2.2';
$string['completion_assignment_chart_title'] = 'Finalización asignaciones';
$string['completion_assignment_menu'] = 'Asignaciones';
$string['completion_chat_chart_title'] = 'Finalización chats';
$string['completion_chat_menu'] = 'Chats';
$string['completion_completed_on_tooltip'] = 'Completado en';
$string['completion_completed_on_tooltip_months'] = '[\'Ene\',\'Feb\',\'Mar\',\'Abr\',\'May\',\'Jun\',\'Jul\',\'Ago\',\'Sep\',\'Oct\',\'Nov\',\'Dic\']';
$string['completion_forum_chart_title'] = 'Foros finalizados';
$string['completion_forum_menu'] = 'Foros';
$string['completion_quiz_chart_title'] = 'Cuestionarios finalizados';
$string['completion_quiz_menu'] = 'Cuestionarios';
$string['completion_resource_chart_title'] = 'Recursos finalizados';
$string['completion_resource_menu'] = 'Recursos';
$string['completion_wiki_chart_title'] = 'Wikis finalizadas';
$string['completion_wiki_menu'] = 'Wikis';
$string['confirm_exiting'] = '¿Realmente desea salir de Gismo?';
$string['contact_us'] = 'Por favor no dude en ponerse en contacto con los autores para preguntas o para reportar fallos en las direcciones siguientes:';
$string['date'] = 'Fecha';
$string['debug_mode'] = 'Modo de Depuración';
$string['debug_mode_false'] = 'Desactivado';
$string['debug_mode_true'] = 'Activado';
$string['debug_modedesc'] = 'Si se establece en "true", se mostrarán los mensajes de depuración durante el proceso de exportación de datos Gismo.';
$string['detail_resources'] = 'Detalles sobre los recursos';
$string['detail_show'] = 'Ver detalles';
$string['details'] = 'Detalles';
$string['err_access_denied'] = 'Usted No está autorizado para realizar esta acción.';
$string['err_authentication'] = 'Usted no se ha autentificado. Es posible que la sesión moodle ha expirado.<br /><br /><a href="">Iniciar Sesión</a>';
$string['err_block_instance_id_not_set'] = '¡No se ha establecido Id para la instancia Bloque!';
$string['err_cannot_extract_data'] = '¡No se pueden extraer los datos desde el servidor!';
$string['err_course_not_set'] = '¡No se ha establecido Id para el Curso!';
$string['err_missing_course_students'] = '¡No se pueden extraer los estudiantes del curso!';
$string['err_missing_data'] = '¡No se puede continuar con el análisis porque no existen datos!';
$string['err_missing_parameters'] = '¡Falta uno o más parámetros requeridos!';
$string['err_no_data'] = 'Sin datos';
$string['err_srv_data_not_set'] = '¡Falta uno o más parámetros requeridos!';
$string['err_unknown'] = '¡Error desconocido!';
$string['exit'] = 'Salir';
$string['export_chart_as_image'] = 'Exportar gráficos como imagen';
$string['export_data_hours_from_last_run'] = 'Retrasar (horas) antes de la ejecución del siguiente proceso de exportación de datos';
$string['export_data_hours_from_last_rundesc'] = 'El proceso de exportación de datos Gismo se puede volver a ejecutar sólo después de X horas, asignar un tiempo demasiado bajo de este parámetro puede crear problemas de rendimiento. <br /> Por favor, no lo cambie si usted no sabe lo que está haciendo.';
$string['export_data_limit_records'] = 'Límite de registros en consultas SQL';
$string['export_data_limit_recordsdesc'] = 'Limite el número de registros seleccionados para cada consulta durante la exportación de datos (en GISMOdata_manager.php).
<br /> Por favor, no lo cambie si usted no sabe lo que está haciendo.';
$string['export_data_run_inf'] = 'Ejecutar la exportación de datos Gismo de';
$string['export_data_run_infdesc'] = 'Ejecutar la exportación de datos Gismo sólo desde este momento. <br /> Este valor debe ser menor que export_data_run_sup.';
$string['export_data_run_sup'] = 'Ejecutar exportación de datos Gismo hasta';
$string['export_data_run_supdesc'] = 'No ejecute la exportación de datos gismo después de esta hora. <br /> Este ajuste debe ser más alto que export_data_run_inf.';
$string['export_data_task'] = 'GISMO tarea de exportación de datos';
$string['exportalllogs'] = 'Exportar todos los registros';
$string['exportcourselogs'] = 'Exportar sólo los cursos con bloque gismo';
$string['exportlogs'] = 'Exportación de registros';
$string['exportlogs_missing'] = 'Parámetro exportlogs no se encuentra';
$string['exportlogs_missingcourselogs'] = 'Entrar ejecuta el proceso de análisis en horas fijas, por lo general en la noche. Sus datos del curso estarán disponibles dentro de 24 horas';
$string['exportlogsdesc'] = 'Exportar todos los registros: esta opción crea registros Gismo de todos los cursos en la plataforma moodle, esto crea una gran cantidad de registros en las tablas de la base de datos gismo, pero los datos están disponibles inmediatamente cuando se coloca el bloque Gismo en un curso <br /> sólo exportar los cursos con bloque gismo: Exportar sólo los cursos que tienen un bloque gismo, si selecciona esta opción los datos Gismo del curso estarán disponibles pasadas varias horas después de colocar el bloque Gismo en un curso.';
$string['file'] = 'Fichero';
$string['forums'] = 'Foro';
$string['forums_chart_title'] = 'Actividades: Resumen Foro';
$string['forums_over_time'] = 'Foros en el tiempo';
$string['forums_over_time_chart_title'] = 'Actividades: contribuciones a foros a través del tiempo';
$string['forums_ud_chart_title'] = 'Actividades: detalles de los estudiantes en los foros';
$string['from'] = 'De';
$string['gismo'] = 'Gismo';
$string['gismo:addinstance'] = 'Añadir un nuevo bloque gismo';
$string['gismo:trackteacher'] = 'Gismo Profesor';
$string['gismo:trackuser'] = 'Gismo Estudiante';
$string['gismo:view'] = 'GISMO - Autorización fallida';
$string['gismo_help'] = '<p> Gismo funciona en aquellos cursos que cumplan los siguientes requisitos: </ p> <ul> <li> hay al menos un estudiante inscrito al curso </ li> <li> hay al menos una instancia de una de los siguientes módulos: <ul> <li> Recursos </ li> <li> Asignaciones</ li> <li> Cuestionarios </ li> </ ul> </ li> </ ul>';
$string['gismo_report_launch'] = 'Herramienta de informes';
$string['gismo_version'] = 'Versión';
$string['gismo_version_value'] = '3.3';
$string['help'] = 'Ayuda';
$string['help_docs'] = 'Breve resumen';
$string['hide_menu'] = 'Ocultar menu';
$string['home'] = 'Inicio Gismo';
$string['homepage_chart_activities_assignments_overview'] = 'Actividades: resumen asignaciones';
$string['homepage_chart_resources_access_overview'] = 'Recursos: resumen accesos';
$string['homepage_chart_resources_students_overview'] = 'Recursos: resumen estudiantes';
$string['homepage_chart_students_access_overview'] = 'Estudiantes: resumen accesos';
$string['homepage_chart_students_access_overview_on_resources'] = 'Estudiantes: resumen de acceso a los recursos';
$string['homepage_chart_students_accesses_by_students'] = 'Estudiantes: acceso por estudiante';
$string['homepage_charts_preview_title'] = 'Vista previa de gráficos';
$string['homepage_processing_data'] = 'Procesando datos';
$string['homepage_processing_data_wait'] = 'Procesando datos, ¡por favor espere!';
$string['homepage_text'] = 'GISMO es una herramienta gráfica interactiva para monitorización y seguimiento de los estudiantes que extrae datos de seguimiento del Sistema de Gestión de Cursos Moodle. Genera representaciones gráficas útiles que pueden ser exploradas por los instructores del curso y los estudiantes para obtener una visión general de las actividades de aprendizaje. <br />
Por favor seleccione uno de los menús en la parte superior de esta página para empezar a utilizar GISMO. <br />
Si usted quiere ver el tutorial por favor haga clic en el menú "Ayuda"> "Tutorial".';
$string['homepage_title'] = 'Bienvenido a GISMO';
$string['info_text'] = '<p>Para personalizar el gráfico puede seleccionar/deseleccionar elementos desde los menús habilitados.</p>";
        message += "<p>Instrucciones</p>";
        message += "<ul style=\'list-style-position: inside;\'>";
        message += "<li>Checkbox Principal: seleccionar/deseleccionar todos los elementos de la lista.</li>";
        message += "<li>Elemento Click: seleccionar/deseleccionar los elementos marcados.</li>";
        message += "<li>Elemento Alt+Click: seleccionar solamente los elementos marcados </li>";
        message += "<li><img src=\'images/eye.png\'> Mostrar detalles del elemento</li>";
        message += "</ul>';
$string['info_title'] = 'GISMO - Listas';
$string['intro_information_about_gismo'] = 'Información sobre esta publicación a continuación:';
$string['items'] = 'ELEMENTOS';
$string['list'] = 'lista';
$string['manualexportpassword'] = 'Exportación manual de contraseña';
$string['manualexportpassworddesc'] = 'Esto significa que la secuencia de comandos en export_data.php no se puede ejecutar desde un navegador web sin necesidad de suministrar la contraseña utilizando el siguiente formulario de URL: <br /> <br /> http://sitio.ejemplo.com/blocks/gismo/lib/gismo /server_side/export_data.php? password = algo <br /> <br /> Si esto se deja en blanco, no se requiere contraseña';
$string['manualexportpassworderror'] = 'GISMO exportación manual de contraseña errónea o no encontrada';
$string['menu_hide'] = 'Ocultar menú';
$string['menu_show'] = 'Mostrar menú';
$string['no_chart_at_the_moment'] = '¡No hay ningún gráfico por el momento!';
$string['nr_submissions'] = 'Número de entregas';
$string['option_axes_label_max_length'] = 'Longitud máxima etiqueta ejes (caracteres)';
$string['option_axes_label_max_offset'] = 'Desplazamiento máximo etiqueta ejes (caracteres)';
$string['option_base_color'] = 'Color base';
$string['option_blue'] = 'Azul';
$string['option_chart_settings'] = 'Gráfico: Ajustes';
$string['option_general_settings'] = 'Ajustes generales';
$string['option_green'] = 'Verde';
$string['option_include_hidden_items'] = 'Incluir elementos ocultos';
$string['option_intro'] = 'Esta sección le permiten personalizar las opciones específicas de las aplicaciones';
$string['option_number_of_colors'] = 'Número de colores (Matriz gráfica)';
$string['option_other_settings'] = 'Otros ajustes';
$string['option_red'] = 'Rojo';
$string['option_window_resize_delay_seconds'] = 'Retardo cambio de tamaño de la ventana (segundos)';
$string['options'] = 'Opciones';
$string['page_title'] = 'Gismo -';
$string['pluginname'] = 'Gismo';
$string['print'] = 'Imprimir';
$string['processing_wait'] = 'Procesando datos, ¡Por favor espere!';
$string['quizzes'] = 'Cuestionarios';
$string['quizzes_chart_title'] = 'Actividades: Resumen cuestionarios';
$string['release_date'] = 'Fecha de lanzamiento';
$string['release_date_value'] = '15-12-2014';
$string['resources'] = 'Recursos';
$string['resources_access_detail_chart_title'] = 'Recursos: detalles de los estudiantes en recursos';
$string['resources_access_overview'] = 'Resumen de accesos';
$string['resources_access_overview_chart_title'] = 'Recursos: Resumen de accesos';
$string['resources_students_overview'] = 'Resumen de estudiantes';
$string['resources_students_overview_chart_title'] = 'Recursos: Resumen de estudiantes';
$string['save'] = 'Guardar';
$string['show'] = 'Mostrar';
$string['show_details'] = 'Mostrar detalles';
$string['show_menu'] = 'Mostrar Menú';
$string['student_accesses'] = 'Accesos por estudiantes';
$string['student_accesses_chart_title'] = 'Estudiantes: Acceso por estudiantes';
$string['student_accesses_overview'] = 'Resumen accesos';
$string['student_accesses_overview_chart_title'] = 'Estudiantes: resumen accesos';
$string['student_reporting'] = 'Informes de estudiantes';
$string['student_reporting_desc'] = 'Si los estudiantes estan habilitados podrán ver sus registros';
$string['student_reporting_disabled'] = 'Desactivado';
$string['student_reporting_enabled'] = 'Activado';
$string['student_resources_details_chart_title'] = 'Estudiantes: detalles de los estudiantes en los recursos';
$string['student_resources_overview'] = 'Resumen accesos a los recursos';
$string['student_resources_overview_chart_title'] = 'Estudiantes: resumen accesos a los recursos';
$string['students'] = 'Estudiantes';
$string['teachers'] = 'Profesores';
$string['timeline'] = 'Linea de tiempo';
$string['to'] = 'Para';
$string['tutorial'] = 'Tutorial';
$string['users'] = 'usuarios';
$string['welcome'] = 'Bienvenido a GISMO v. 3.3';
$string['wikis'] = 'Wikis';
$string['wikis_chart_title'] = 'Actividades: resumen wikis';
$string['wikis_over_time'] = 'Wikis en el tiempo';
$string['wikis_over_time_chart_title'] = 'Actividades: Contribuidores a las wikis en el tiempo';
$string['wikis_ud_chart_title'] = 'Actividades: detalles de estudiantes en las wikis';
