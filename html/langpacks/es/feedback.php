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
 * Strings for component 'feedback', language 'es', version '3.11'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Añadir pregunta';
$string['add_pagebreak'] = 'Añadir salto de página';
$string['adjustment'] = 'Ajuste';
$string['after_submit'] = 'Después del envío';
$string['allowfullanonymous'] = 'Permitir anonimato completo';
$string['analysis'] = 'Análisis';
$string['anonymous'] = 'Anónima';
$string['anonymous_edit'] = 'Registrar nombres de usuario';
$string['anonymous_entries'] = 'Entradas anónimas ({$a})';
$string['anonymous_user'] = 'Usuario anónimo';
$string['answerquestions'] = 'Responder a las preguntas';
$string['append_new_items'] = 'Agregar ítems nuevos';
$string['autonumbering'] = 'Auto numerar preguntas';
$string['autonumbering_help'] = 'Activa o desactiva la numeración automática para cada pregunta';
$string['average'] = 'Promedio';
$string['bold'] = 'Negrita';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cannotaccess'] = 'Sólo puedes acceder a este feedback desde un curso';
$string['cannotsavetempl'] = 'No se permite guardar plantillas';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'No se ha ajustado el Captcha.';
$string['check'] = 'Elección múltiple (varias respuestas)';
$string['check_values'] = 'Respuestas posibles';
$string['checkbox'] = 'Elección múltiple (se permiten varias respuestas - casillas de verificación)';
$string['choosefile'] = 'Seleccione un archivo';
$string['chosen_feedback_response'] = 'Retroalimentación de la respuesta elegida';
$string['closebeforeopen'] = 'Has indicado una fecha de fin anterior a la fecha de inicio.';
$string['complete_the_form'] = 'Responda a las preguntas';
$string['completed'] = 'Completada';
$string['completed_feedbacks'] = 'Respuestas enviadas';
$string['completedon'] = 'Completada en {$a}';
$string['completiondetail:submit'] = 'Enviar retroalimentación';
$string['completionsubmit'] = 'Ver como "completado" si se envía la encuesta';
$string['configallowfullanonymous'] = 'Si se establece a "sí", los usuarios pueden pueden completar una encuesta en la página principal sin necesidad de que inicien sesión.';
$string['confirmdeleteentry'] = '¿Está seguro que quiere borrar esta entrada?';
$string['confirmdeleteitem'] = '¿Está seguro que quiere borrar este elemento?';
$string['confirmdeletetemplate'] = '¿Está seguro que quiere utilizar esta plantilla?';
$string['confirmusetemplate'] = '¿Está seguro de que desea usar esta plantilla?';
$string['continue_the_form'] = 'Continúe contestando las preguntas';
$string['count_of_nums'] = 'Conteo de números';
$string['courseid'] = 'ID del curso';
$string['creating_templates'] = 'Guardar estas preguntas como plantilla nueva';
$string['delete_entry'] = 'Borrar entrada';
$string['delete_item'] = 'Borrar pregunta';
$string['delete_old_items'] = 'Borrar ítems antiguos';
$string['delete_pagebreak'] = 'Borrar salto de página';
$string['delete_template'] = 'Borrar plantilla';
$string['delete_templates'] = 'Borrar plantilla...';
$string['depending'] = 'Dependencias';
$string['depending_help'] = 'Ítems (preguntas de la encuesta) dependientes le permiten ver los elementos que dependen de los valores de otros elementos <br />
<strong> Un ejemplo de cómo crearlos: </strong> <br />
<li> En primer lugar cree el ítem (la pregunta) de cuyo valor dependerán otros ítems. </li>
<li> A continuación añada un salto de página. </li>
<li> Seguidamente añada los ítems que dependen del valor del ítem anterior. <br />En el formulario de creación del ítem seleccione el elemento de la lista "Depende del ítem" y ponga el valor correspondiente en el campo "Depende del valor".  </li> </ul>
<strong> La estructura tendrá el siguiente aspecto:</strong>
<ol>
<li>Ítem 1-Pregunta: ¿Tiene usted coche? R: sí / no </li>
<li>Salto de página </li>
<li>Ítem 2-Pregunta: ¿Qué color tiene su coche?<br /> (este ítem depende del ítem 1 con valor = sí) </li>
<li>Ítem 3-Pregunta: ¿Por qué no tener un coche? <br /> (este ítem depende del ítem 1 con  valor = no) </li>
<li> ...otros elementos </li>
</ol>';
$string['dependitem'] = 'Elemento del que depende';
$string['dependvalue'] = 'Valor del que depende';
$string['description'] = 'Descripción';
$string['do_not_analyse_empty_submits'] = 'No analizar envíos vacíos';
$string['downloadresponseas'] = 'Descargar todas las respuestas como:';
$string['drop_feedback'] = 'Eliminar de este curso';
$string['dropdown'] = 'Opción múltiple - una respuesta permitida (lista desplegable)';
$string['dropdown_values'] = 'Valores de la lista desplegable';
$string['dropdownlist'] = 'Opción múltiple - una respuesta (lista desplegable)';
$string['dropdownrated'] = 'Lista desplegable (clasificada)';
$string['edit_item'] = 'Editar pregunta';
$string['edit_items'] = 'Editar preguntas';
$string['email_notification'] = 'Activar notificaciones de las entregas';
$string['email_notification_help'] = 'Si está habilitado, los profesores recibirán notificaciones al enviarse las respuestas de la encuesta.';
$string['emailteachermail'] = '{$a->username} ha cumplimentado y enviado la encuesta: \'{$a->feedback}\'

Puede verla aquí

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} ha cumplimentado y enviado la encuesta: <i>\'{$a->feedback}\'</i></p>
<p>Está disponible <a href="{$a->url}">aquí</a>.</p>';
$string['entries_saved'] = 'Sus respuestas han sido guardadas. Gracias.';
$string['eventresponsedeleted'] = 'Respuesta eliminada';
$string['eventresponsesubmitted'] = 'Respuesta enviada';
$string['export_questions'] = 'Exportar preguntas';
$string['export_to_excel'] = 'Exportar a Excel';
$string['feedback:addinstance'] = 'Añadir una nueva encuesta';
$string['feedback:complete'] = 'Cumplimente la encuesta';
$string['feedback:createprivatetemplate'] = 'Crear plantilla privada';
$string['feedback:createpublictemplate'] = 'Crear plantilla pública';
$string['feedback:deletesubmissions'] = 'Eliminar envíos completados';
$string['feedback:deletetemplate'] = 'Borrar plantilla';
$string['feedback:edititems'] = 'Editar ítems';
$string['feedback:mapcourse'] = 'Asignar cursos a encuestas globales';
$string['feedback:receivemail'] = 'Recibir notificación por correo electrónico';
$string['feedback:view'] = 'Ver una encuesta';
$string['feedback:viewanalysepage'] = 'Ver página de análisis después del envío';
$string['feedback:viewreports'] = 'Ver informes';
$string['feedback_is_not_for_anonymous'] = 'La encuesta no es anónima';
$string['feedback_is_not_open'] = 'La encuesta no está disponible';
$string['feedbackclose'] = 'Permitir respuestas hasta';
$string['feedbackcompleted'] = '{$a->username} ha completado {$a->feedbackname}';
$string['feedbackopen'] = 'Permitir respuestas de';
$string['file'] = 'Archivo';
$string['filter_by_course'] = 'Filtrar por curso';
$string['handling_error'] = 'Error en la ejecución del módulo Encuesta';
$string['hide_no_select_option'] = 'Ocultar la opción "No seleccionada"';
$string['horizontal'] = 'Horizontal';
$string['import_questions'] = 'Importar preguntas';
$string['import_successfully'] = 'Importación exitosa';
$string['importfromthisfile'] = 'Importar de este archivo';
$string['includeuserinrecipientslist'] = 'Incluir {$a} en la lista de destinatarios';
$string['indicator:cognitivedepth'] = 'Retroalimentación cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Retroalimentación.';
$string['indicator:cognitivedepthdef'] = 'Retroalimentación cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Encuesta durante este intervalo de análisis (Niveles = Sin vista, Ver, Enviar)';
$string['indicator:socialbreadth'] = 'Retroalimentación social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Retroalimentación.';
$string['indicator:socialbreadthdef'] = 'Retroalimentación social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Encuesta durante este intervalo de análisis (Niveles = Sin vista, Ver, Enviar)';
$string['info'] = 'Información';
$string['infotype'] = 'Tipo de información';
$string['insufficient_responses'] = 'Respuestas insuficientes';
$string['insufficient_responses_for_this_group'] = 'Este grupo no tiene suficientes respuestas';
$string['insufficient_responses_help'] = 'Para mantener la encuesta anónima debe haber un mínimo de 2 respuestas.';
$string['item_label'] = 'Etiqueta';
$string['item_name'] = 'Pregunta';
$string['label'] = 'Etiqueta';
$string['labelcontents'] = 'Contenidos';
$string['mapcourse'] = 'Asignar encuesta a cursos';
$string['mapcourse_help'] = 'Por defecto, los formularios de encuesta creados en su página de inicio están disponibles en todo el sitio y aparecerá en todos los cursos utilizando el bloque de encuestas. Puede forzar que el formulario de encuestas se visualice haciendo que sea un bloque fijo o puede limitar los cursos en los que se mostrará el formulario de encuesta mediante su asignación a cursos específicos.';
$string['mapcourseinfo'] = 'Esta encuesta está disponible en todos los cursos que usan el bloque Encuesta. Sin embargo, usted puede  limitar los cursos en los que aparece. Busque el curso y asígnelo a esta encuesta.';
$string['mapcoursenone'] = 'No hay cursos asignados. La encuesta está disponible en todos los cursos';
$string['mapcourses'] = 'Asignar encuesta a cursos';
$string['mappedcourses'] = 'Cursos asignados';
$string['mappingchanged'] = 'El mapeo del curso ha cambiado';
$string['maximal'] = 'Máximo';
$string['messageprovider:message'] = 'Recordatorio de encuesta';
$string['messageprovider:submission'] = 'Notificaciones de encuesta';
$string['minimal'] = 'Mínimo';
$string['mode'] = 'Modo';
$string['modulename'] = 'Encuesta';
$string['modulename_help'] = 'El módulo de actividad Encuesta permite que un profesor pueda crear una encuesta personalizada para obtener la opinión de los participantes utilizando una variedad de tipos de pregunta, como  opción múltiple, sí/no o texto.

Las respuestas de la Encuesta pueden ser anónimas si así se quiere, y los resultados pueden ser mostrados a todos los participantes o bien sólo a los profesores. Cualquier Encuesta situada en la página principal del sitio podrá ser cumplimentada por usuarios no registrados.

La actividad Encuesta puede ser utilizada

* Para la evaluación del curso, ayudando a mejorar el contenido del mismo para los futuros participantes
* Para permitir que los participantes se inscriban en módulos de cursos, eventos, etc
* Para encuestar a los invitados a la hora de la elección de cursos, las políticas escolares, etc
* Para que en caso de "acoso escolar" los estudiantes pueden reportar incidentes de forma anónima';
$string['modulenameplural'] = 'Encuestas';
$string['move_item'] = 'Mover esta pregunta';
$string['multichoice'] = 'Elección múltiple';
$string['multichoice_values'] = 'Valores elección múltiple';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Elección múltiple (clasificadas)';
$string['multichoicetype'] = 'Tipo elección múltiple';
$string['multiplesubmit'] = 'Permitir múltiples envíos';
$string['multiplesubmit_help'] = 'Si se habilita en las encuestas anónimas, los usuarios pueden enviar sus opinión un número ilimitado de veces.';
$string['name'] = 'Nombre';
$string['name_required'] = 'Nombre requerido';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Siguiente página';
$string['no_handler'] = 'Ninguna acción planificada para';
$string['no_itemlabel'] = 'No etiqueta';
$string['no_itemname'] = 'Falta el nombre del ítem';
$string['no_items_available_yet'] = 'No se han planificado preguntas';
$string['no_templates_available_yet'] = 'No hay plantillas disponibles';
$string['non_anonymous'] = 'Los nombres de los usuarios se mostrarán y registrarán con las respuestas';
$string['non_anonymous_entries'] = 'Entradas no anónimas ({$a})';
$string['non_respondents_students'] = 'Estudiantes sin responder  ({$a})';
$string['not_completed_yet'] = 'Aún no se ha finalizado';
$string['not_selected'] = 'No seleccionada';
$string['not_started'] = 'Sin comenzar';
$string['numberoutofrange'] = 'Número fuera de rango';
$string['numeric'] = 'Respuesta numérica';
$string['numeric_range_from'] = 'Rango desde';
$string['numeric_range_to'] = 'Rango hasta';
$string['of'] = 'de';
$string['oldvaluespreserved'] = 'Se preservarán todas las preguntas antiguas y los valores asignados';
$string['oldvalueswillbedeleted'] = 'Se eliminarán las preguntas actuales y todas las respuestas de los usuarios.';
$string['only_one_captcha_allowed'] = 'Solo se permite un captcha por encuesta';
$string['openafterclose'] = 'Has indicado una fecha abierta después de la fecha de cierre';
$string['overview'] = 'Vista general';
$string['page'] = 'Página';
$string['page-mod-feedback-x'] = 'Cualquier página del módulo Encuesta';
$string['page_after_submit'] = 'Mensaje de finalización';
$string['pagebreak'] = 'Salto de página';
$string['pluginadministration'] = 'Administración de la encuesta';
$string['pluginname'] = 'Módulo de encuesta';
$string['position'] = 'Posición';
$string['previous_page'] = 'Página anterior';
$string['privacy:metadata:completed'] = 'Un registro de los envíos a la encuesta';
$string['privacy:metadata:completed:anonymousresponse'] = 'Si el envío será utilizado de forma anónima.';
$string['privacy:metadata:completed:timemodified'] = 'El momento en el que el envío se modificó por última vez.';
$string['privacy:metadata:completed:userid'] = 'El ID del usuario que completó la actividad de encuesta.';
$string['privacy:metadata:completedtmp'] = 'Un registro de los envíos que todavía están en progreso.';
$string['privacy:metadata:value'] = 'Un registro de la respuesta a una pregunta.';
$string['privacy:metadata:value:value'] = 'La respuesta elegida.';
$string['privacy:metadata:valuetmp'] = 'Un registro de la respuesta a una pregunta en un envío en progreso.';
$string['public'] = 'Pública';
$string['question'] = 'Pregunta';
$string['questionandsubmission'] = 'Ajustes de pregunta y envío';
$string['questions'] = 'Preguntas';
$string['questionslimited'] = 'Mostrando solo las {$a} primeras preguntas, ver las respuestas de forma individual o descargar una tabla con la información para ver todas.';
$string['radio'] = 'Opción múltiple (una respuesta)';
$string['radio_values'] = 'Valores de los botones de opción';
$string['ready_feedbacks'] = 'Encuestas preparadas';
$string['required'] = 'Obligatorio';
$string['resetting_data'] = 'Reiniciar respuestas a la encuesta';
$string['resetting_feedbacks'] = 'Reiniciando encuestas';
$string['response_nr'] = 'Respuesta número';
$string['responses'] = 'Respuestas';
$string['responsetime'] = 'Hora de respuesta';
$string['save_as_new_item'] = 'Guardar como nueva pregunta';
$string['save_as_new_template'] = 'Guardar como nueva plantilla';
$string['save_entries'] = 'Enviar sus respuestas';
$string['save_item'] = 'Guardar pregunta';
$string['saving_failed'] = 'No se pudo guardar';
$string['search:activity'] = 'Retroalimentación - información de actividad';
$string['search_course'] = 'Buscar curso';
$string['searchcourses'] = 'Buscar cursos';
$string['searchcourses_help'] = 'Buscar el código o el nombre del (los) curso(s) que desea asociar con esta encuesta.';
$string['selected_dump'] = 'Los índices seleccionados en la variable $SESSION se desecharon debajo:';
$string['send'] = 'Enviar';
$string['send_message'] = 'Enviar mensaje';
$string['show_all'] = 'Mostrar todo';
$string['show_analysepage_after_submit'] = 'Mostrar página de análisis';
$string['show_entries'] = 'Mostrar respuestas';
$string['show_entry'] = 'Mostrar respuesta';
$string['show_nonrespondents'] = 'Mostrar sin respuesta';
$string['site_after_submit'] = 'Sitio tras el envío';
$string['sort_by_course'] = 'Ordenar por curso';
$string['started'] = 'Iniciado';
$string['startedon'] = 'Empezado el {$a}';
$string['subject'] = 'Materia';
$string['switch_item_to_not_required'] = 'Establecer como no obligatorio';
$string['switch_item_to_required'] = 'Establecer como obligatorio';
$string['template'] = 'Plantilla';
$string['template_deleted'] = 'Plantilla borrada';
$string['template_saved'] = 'Plantilla guardada';
$string['templates'] = 'Plantillas';
$string['textarea'] = 'Respuesta de texto larga';
$string['textarea_height'] = 'Número de líneas';
$string['textarea_width'] = 'Anchura';
$string['textfield'] = 'Respuesta de texto corta';
$string['textfield_maxlength'] = 'Número máximo de caracteres';
$string['textfield_size'] = 'Anchura del campo de texto';
$string['there_are_no_settings_for_recaptcha'] = 'No se ha configurado el captcha';
$string['this_feedback_is_already_submitted'] = 'Usted ya ha finalizado esta actividad.';
$string['typemissing'] = 'Falta el valor "tipo"';
$string['update_item'] = 'Guardar cambios en la pregunta';
$string['url_for_continue'] = 'Enlace a la siguiente actividad';
$string['url_for_continue_help'] = 'Cuando se envía una encuesta se muestra un botón de Continuar que enlaza con la página del curso. De forma alternativa puede enlazar con la siguiente actividad si introduce aquí la URL de dicha actividad.';
$string['use_one_line_for_each_value'] = '¡Use una línea por cada respuesta!';
$string['use_this_template'] = 'Utilizar esta plantilla';
$string['using_templates'] = 'Utilizar una plantilla';
$string['vertical'] = 'Vertical';
