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
 * Strings for component 'studentquiz', language 'es', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_comment'] = 'Añadir comentario';
$string['approve'] = 'Aprobar';
$string['approve_toggle'] = 'Des/Aprobar';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprobado';
$string['approveselectedscheck'] = '¿Está seguro de querer des/aprobar las preguntas siguientes?<br /><br />{$a}';
$string['average_column_name'] = 'Promedio';
$string['comment_column_name'] = 'Comentarios';
$string['comment_help'] = 'Escribir un comentario';
$string['comment_help_help'] = 'Escribir un comentario a la pregunta';
$string['createnewquestion'] = 'Crear pregunta nueva';
$string['createnewquestionfirst'] = 'Crear primera pregunta';
$string['difficulty_all_column_name'] = 'Dificultad de Comunidad';
$string['difficulty_level_column_name'] = 'Dificultad';
$string['emailcommentaddedbody'] = 'Estimado/a  {$a->recepientname},

Su pregunta \'{$a->questionname}\' en la actividad ExamenEstudiante (StudentQuiz) \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido comentada por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario es: \'{$a->commenttext}\'

Puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Su pregunta \'{$a->questionname}\' ha sido comentada por  {$a->username}.';
$string['emailcommentaddedsubject'] = 'Pregunta ha sido comentada: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Estimado/a {$a->recepientname},

El comentario con fecha \'{$a->commenttime}\' a su pregunta \'{$a->questionname}\' en la actividad ExamenEstudiante (StudentQuiz) \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido eliminado por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario era: \'{$a->commenttext}\'

Puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'El comentario a su pregunta \'{$a->questionname}\' ha sido eliminado por {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Comentario ha sido eliminado a la pregunta: {$a->questionname}';
$string['emailminecommentdeletedbody'] = 'Estimado/a {$a->recepientname},

Su comentario con fecha \'{$a->commenttime}\' a la pregunta \'{$a->questionname}\' en la actividad ExamenEstudiante (StudentQuiz) \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido eliminado por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario era: \'{$a->commenttext}\'

Puede revisar esta pregunta en: : {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Su comentario a la pregunta  \'{$a->questionname}\' ha sido eliminado por  {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Comentario ha sido eliminado a la pregunta: {$a->questionname}';
$string['filter'] = 'Filtro';
$string['filter_ishigher'] = 'Es superior';
$string['filter_islower'] = 'Es inferior';
$string['filter_label_approved'] = 'Preguntas aprobadas';
$string['filter_label_comment'] = 'Comentarios';
$string['filter_label_createdate'] = 'Creación';
$string['filter_label_difficulty_level'] = 'Dificultad';
$string['filter_label_fast_filters'] = 'Filtro rápido para preguntas';
$string['filter_label_myattempts'] = 'Mis intentos';
$string['filter_label_mydifficulty'] = 'Mi dificultad';
$string['filter_label_mylastattempt'] = 'Mí último intento';
$string['filter_label_myrate'] = 'Mi Valoración';
$string['filter_label_onlyapproved'] = 'Aprobadas';
$string['filter_label_onlyapproved_help'] = 'Preguntas aprobadas por su profesor';
$string['filter_label_onlydifficult'] = 'Dificultad para todos';
$string['filter_label_onlydifficult_help'] = 'Pregunta con una dificultad promedio de más de {$a}%';
$string['filter_label_onlydifficultforme'] = 'Dificultad para mí';
$string['filter_label_onlydifficultforme_help'] = 'Pregunta con mi dificultad de más de {$a}%';
$string['filter_label_onlygood'] = 'Bien';
$string['filter_label_onlygood_help'] = 'Pregunta con una valoración promedio de al menos {$a} estrellas';
$string['filter_label_onlymine'] = 'Mía';
$string['filter_label_onlymine_help'] = 'Preguntas que usted creó.';
$string['filter_label_onlynew'] = 'No contestada';
$string['filter_label_onlynew_help'] = 'Preguntas que usted nunca ha contestado antes';
$string['filter_label_question'] = 'Título de pregunta';
$string['filter_label_questiontext'] = 'Contenido de pregunta';
$string['filter_label_rates'] = 'Valoración';
$string['filter_label_show_mine'] = 'Mis preguntas';
$string['filter_label_tags'] = 'Marca';
$string['finish_button'] = 'Terminar';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['latest_column_name'] = 'Más reciente';
$string['messageprovider:commentadded'] = 'Notificación de pregunta añadida';
$string['messageprovider:commentdeleted'] = 'Notificación de eliminación de comentario';
$string['messageprovider:minecommentdeleted'] = 'Notificación de eliminación de mi comentario';
$string['mine_column_name'] = 'Mía';
$string['modulename'] = 'ExamenEstudiante (StudentQuiz)';
$string['modulename_help'] = 'La actividad ExamenEstudiante (StudentQuiz) le permite a los estudiantes añadir preguntas para la multitud. En la vista general del ExamenEstudiante, los estudiantes pueden filtrar preguntas. También pueden usar las preguntas filtradas en la multitud para practicar. El profesor tiene la opción de anonimizar la columna de \'creado por\'.<br><br>La actividad de ExamenEstudiante le otorga a los estudiantes puntos para motivarlos a que añadan preguntas y a que practiquen. Los puntos están listados en una tabla de ranking.';
$string['modulenameplural'] = 'ExámenesEstudiante (StudentQuizzes)';
$string['myattempts_column_name'] = 'Mis Intentos';
$string['mydifficulty_column_name'] = 'Mi Dificultad';
$string['mylastattempt_column_name'] = 'Mi Último Intento';
$string['myrate_column_name'] = 'Mi Valoración';
$string['nav_export'] = 'Exportar';
$string['nav_import'] = 'Importar';
$string['needtoallowatleastoneqtype'] = 'Necesita permitir al menos un tipo de pregunta';
$string['next_button'] = 'Siguiente';
$string['no_comment'] = 'no disponible';
$string['no_comments'] = 'Sin comentarios';
$string['no_difficulty_level'] = 'no disponible';
$string['no_myattempts'] = 'no disponible';
$string['no_mylastattempt'] = 'no disponible';
$string['no_questions_add'] = 'No hay preguntas en este ExamenEstudiante (StudentQuiz). Siéntase con libertad de añadir algunas preguntas.';
$string['no_questions_filter'] = 'Ninguna de las preguntas coincidió con su criterio de filtro. Reinicie el filtro para ver todo.';
$string['no_questions_selected_message'] = 'Por favor seleccione al menos un tipo de pregunta para comenzar el examen.';
$string['no_rates'] = 'no disponible';
$string['no_tags'] = 'no disponible';
$string['not_approved'] = '✗';
$string['number_column_name'] = 'Número';
$string['pagesize'] = 'Tamaño de página:';
$string['please_enrole_message'] = 'Por favor inscríbase en este curso para ver su progreso personal';
$string['pluginadministration'] = 'Administración de ExamenEstudiante (StudentQuiz)';
$string['pluginname'] = 'ExamenEstudiante (StudentQuiz)';
$string['previous_button'] = 'Anterior';
$string['privacy:metadata:studentquiz_attempt'] = 'Representa un intento de usuario para contestar un conjunto de preguntas.';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID de la categoría.';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID del uso de pregunta.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID del StudentQuiz.';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID del usuario.';
$string['privacy:metadata:studentquiz_comment'] = 'Almacena comentarios para preguntas.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Comentario de la pregunta.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Hora de creación del comentario.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID de la pregunta.';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID del usuario.';
$string['privacy:metadata:studentquiz_progress'] = 'Almacena información del progreso del estudiante con esta pregunta.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Número de intentos para contestar esta pregunta.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Número de respuestas correctas.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: la última respuesta fue incorrecta o indefinida, 1: la última respuesta fue correcta.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID de la pregunta.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID del StudentQuiz.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID del usuario.';
$string['privacy:metadata:studentquiz_rate'] = 'Almacena valoraciones para preguntas.';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID de la pregunta.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Valoración para la pregunta.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID del usuario.';
$string['progress_bar_caption'] = 'Su progreso en la actividad ExamenEstudiante (StudentQuiz)';
$string['questionsinuse'] = '(* Las preguntas marcadas con un asterisco ya están en uso en algunos exámenes.)';
$string['ranking_block_title'] = 'Ranking';
$string['rate_all_column_name'] = 'Valoración de Comunidad';
$string['rate_column_name'] = 'Valoración';
$string['rate_error'] = 'Por favor valore';
$string['rate_help'] = 'Valore esta pregunta';
$string['rate_help_help'] = 'Valore esta pregunta. \\n 1 estrella es muy mala y 5 estrellas es muy buena';
$string['rate_points'] = 'Puntos';
$string['rate_title'] = 'Valorar';
$string['ratingbar_title'] = 'Barra de valoración';
$string['reportquiz_admin_title'] = 'Estadísticas del estudiante';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Promedio de comunidad de últimas respuestas correctas';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Promedio de comunidad de últimas respuestas incorrectas';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Porcentaje de comunidad de respuestas correctas';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Suma de respuestas correctas / suma de todas las respuestas.';
$string['reportquiz_stats_all_progress'] = 'Promedio del Progreso de la Comunidad';
$string['reportquiz_stats_all_progress_help'] = 'Promedio del Progreso de la Comunidad basado en todos los miembros de la comunidad.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Promedio de la comunidad de respuestas correctas';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Promedio de la comunidad de respuestas incorrectas';
$string['reportquiz_stats_all_questions_answered'] = 'Promedio de la comunidad de todas las respuestas';
$string['reportquiz_stats_all_questions_answered_help'] = 'Número promedio de respuestas dadas por todos los miembros de la comunidad.';
$string['reportquiz_stats_all_questions_approved'] = 'Número de preguntas aprobadas';
$string['reportquiz_stats_all_questions_approved_help'] = 'Los profesores pueden aprobar las preguntas para verificar que sean correctas. Este es el número de todas las preguntas aprobadas dentro de este ExamenEstudiante (StudentQuiz).';
$string['reportquiz_stats_all_questions_created'] = 'Número de preguntas en este ExamenEstudiante (StudentQuiz)';
$string['reportquiz_stats_all_questions_created_help'] = 'Número de preguntas creadas por la comunidad';
$string['reportquiz_stats_all_rates_average'] = 'Valoración promedio de todas las preguntas';
$string['reportquiz_stats_all_rates_average_help'] = 'La valoración de cada pregunta es el promedio de estrellas que recibió de la comunidad. Ejemplo: La comunidad creó 4 preguntas. Si la pregunta A fue valorada con 3 estrellas por la comunidad, pregunta B = 4 estrellas, pregunta C = 2 estrellas y pregunta D = 5 estrellas, entonces la  valoración promedio de todas las preguntas es 3.5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Número de sus últimas respuestas correctas';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Número de sus últimas respuestas incorrectas';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Porcentaje de sus respuestas correctas';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Porcentaje de todas sus respuestas correctas del conjunto de todas sus respuestas dadas en este ExamenEstudiante (StudentQuiz). Las parcialmente correctas cuentan como respuestas incorrectas.';
$string['reportquiz_stats_own_progress'] = 'Progreso Personal';
$string['reportquiz_stats_own_progress_help'] = 'Porcentaje de sus últimas respuestas correctas del conjunto de todas sus preguntas dentro de este ExamenEstudiante (StudentQuiz). Las respuestas parcialmente correctas cuentan como respuestas incorrectas.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total de sus respuestas correctas';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total de sus respuestas incorrectas';
$string['reportquiz_stats_own_questions_answered'] = 'Total de todas sus respuestas';
$string['reportquiz_stats_own_questions_answered_help'] = 'Número de todas sus respuestas dadas dentro de este ExamenEstudiante (StudentQuiz).';
$string['reportquiz_stats_own_questions_approved'] = 'Número de sus preguntas aprobadas';
$string['reportquiz_stats_own_questions_approved_help'] = 'Los profesores pueden aprobar manualmente las preguntas para verificar que sean correctas. Este es el número de sus preguntas aprobadas dentro de este ExamenEstudiante (StudentQuiz).';
$string['reportquiz_stats_own_questions_created'] = 'Número de preguntas a las que ha contribuido';
$string['reportquiz_stats_own_questions_created_help'] = 'Número de preguntas a las que ha contribuido a este ExamenEstudiante (StudentQuiz).';
$string['reportquiz_stats_own_rates_average'] = 'Su promedio de valoración recibido';
$string['reportquiz_stats_own_rates_average_help'] = 'La valoración de cada pregunta es el promedio de estrellas que recibió de la comunidad. Ejemplo: Usted creó las preguntas A y B. Si su pregunta A fue valorada con 3 estrellas por la comunidad y su pregunta B fue valorada con 4 estrellas, entonces recibió una valoración promedio de 3.5.';
$string['reportquiz_stats_title'] = 'Estadísticas';
$string['reportquiz_total_attempt'] = 'Veces que los usuarios ejecutaron el examen';
$string['reportquiz_total_obtained_marks'] = 'Calificación Total';
$string['reportquiz_total_questions_answered'] = 'Total de respuestas';
$string['reportquiz_total_questions_right'] = 'Total de respuestas correctas';
$string['reportquiz_total_questions_wrong'] = 'Respuestas incorrectas';
$string['reportquiz_total_users'] = 'Número de participantes';
$string['reportrank_table_column_approvedquestions'] = 'Puntos por preguntas aprobadas';
$string['reportrank_table_column_communitystatus'] = 'Estadísticas de la Comunidad';
$string['reportrank_table_column_correctanswers'] = 'Respuestas correctas';
$string['reportrank_table_column_countquestions'] = 'Puntos por preguntas creadas';
$string['reportrank_table_column_description'] = 'Descripción';
$string['reportrank_table_column_factor'] = 'Factor';
$string['reportrank_table_column_fullname'] = 'Nombre completo';
$string['reportrank_table_column_incorrectanswers'] = 'Respuestas Incorrectas';
$string['reportrank_table_column_lastcorrectanswers'] = 'Puntos por últimos intentos correctos';
$string['reportrank_table_column_lastincorrectanswers'] = 'Puntos por últimos intentos incorrectos';
$string['reportrank_table_column_points'] = 'Puntos';
$string['reportrank_table_column_progress'] = 'Progreso personal';
$string['reportrank_table_column_quantifier_name'] = 'Nombre';
$string['reportrank_table_column_rank'] = 'Ranking';
$string['reportrank_table_column_summeanrates'] = 'Puntos por estrellas recibidas';
$string['reportrank_table_column_total_points'] = 'Puntos Totales';
$string['reportrank_table_column_value'] = 'Valor';
$string['reportrank_table_column_yourstatus'] = 'Estadísticas Personales';
$string['reportrank_table_quantifier_caption'] = 'Cómo se calculan sus puntos';
$string['reportrank_table_title'] = 'Ranking de estudiantes - 10 Primeros';
$string['reportrank_table_title_for_manager'] = 'Ranking de estudiantes';
$string['reportrank_title'] = 'Ranking';
$string['review_button'] = 'Revisar';
$string['settings_allowallqtypes'] = 'Permitir todos los tipos de preguntas';
$string['settings_allowedqtypes'] = 'Tipos de preguntas permitidas';
$string['settings_allowedqtypes_help'] = 'Aquí especifica el tipo de preguntas que están permitidas';
$string['settings_anonymous'] = 'Anonimizador de estudiantes';
$string['settings_anonymous_help'] = 'Los estudiantes no pueden ver los nombres de otros.';
$string['settings_anonymous_label'] = 'Hacer anónimos a los estudiantes';
$string['settings_approvedquantifier'] = 'Factor de pregunta aprobada';
$string['settings_approvedquantifier_help'] = 'Puntos para cada pregunta aprobada';
$string['settings_approvedquantifier_label'] = 'Puntos para cada pregunta aprobada';
$string['settings_lastcorrectanswerquantifier'] = 'Factor de última respuesta correcta';
$string['settings_lastcorrectanswerquantifier_help'] = 'Puntos por cada respuesta correcta en el último intento';
$string['settings_lastcorrectanswerquantifier_label'] = 'Puntos por últimas respuestas correctas';
$string['settings_lastincorrectanswerquantifier'] = 'Factor de última respuesta incorrecta';
$string['settings_lastincorrectanswerquantifier_help'] = 'Puntos para cada respuesta incorrecta o parcialmente incorrecta en el último intento';
$string['settings_lastincorrectanswerquantifier_label'] = 'Puntos para últimas respuestas incorrectas';
$string['settings_questionquantifier'] = 'Factor de pregunta creada';
$string['settings_questionquantifier_help'] = 'Puntos para cada pregunta creada';
$string['settings_questionquantifier_label'] = 'Puntos para cada pregunta creada';
$string['settings_ratequantifier'] = 'Factor de valoración';
$string['settings_ratequantifier_help'] = 'Puntos por cada estrella recibida.';
$string['settings_ratequantifier_label'] = 'Multiplicador para el promedio de estrellas recibidas para una pregunta';
$string['settings_removeqbehavior'] = 'Quitar plugin de comportamiento de pregunta ExamenEstudiante (StudentQuiz)';
$string['settings_removeqbehavior_help'] = 'Esta información debería de aparecer solamente una vez durante la actualización. Nosotros le informamos de que hemos detectado que su plugin de comportamiento de pregunta ExamenEstudiante (StudentQuiz) está instalado. Este plugin ya no es necesario, por lo que trataremos de eliminarlo automáticamente. Si todavía ve esta configuración, por favor desinstale manualmente el plugin de comportamiento de pregunta ExamenEstudiante (StudentQuiz) <a href="{$a}">aquí</a>.';
$string['settings_removeqbehavior_label'] = 'Quitar plugin de comportamiento de pregunta ExamenEstudiante (StudentQuiz)';
$string['show_less'] = 'Mostrar menos';
$string['show_more'] = 'Mostrar más';
$string['slot_of_slot'] = 'Pregunta {$a->slot} de {$a->slots} en este lote';
$string['start_quiz_button'] = 'Iniciar Examen';
$string['statistic_block_approvals'] = 'Preguntas aprobadas';
$string['statistic_block_created'] = 'Preguntas creadas';
$string['statistic_block_progress_available'] = 'Preguntas disponibles';
$string['statistic_block_progress_last_attempt_correct'] = 'Correctas último intento';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Incorrectas último intento';
$string['statistic_block_progress_never'] = 'Preguntas nunca contestadas';
$string['statistic_block_title'] = 'Mi Progreso';
$string['studentquiz'] = 'examenestudiante (studentquiz)';
$string['studentquiz:addinstance'] = 'Añadir nueva instancia para ExamenEstudiante (StudentQuiz)';
$string['studentquiz:emailnotifyapproved'] = 'Notificación de aprobación de pregunta';
$string['studentquiz:emailnotifychanged'] = 'Notificación de cambio de pregunta';
$string['studentquiz:emailnotifycommentadded'] = 'Notificación de adición de comentario';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notificación de eliminación de comentario';
$string['studentquiz:manage'] = 'Moderar preguntas en ExamenEstudiante (StudentQuiz)';
$string['studentquiz:previewothers'] = 'Previsualizar preguntas de otros en ExamenEstudiante (StudentQuiz)';
$string['studentquiz:submit'] = 'Enviar preguntas en ExamenEstudiante (StudentQuiz)';
$string['studentquiz:unhideanonymous'] = 'Puede ver nombres reales aun y cuando el anonimizador esté activo';
$string['studentquiz:view'] = 'Ver preguntas en ExamenEstudiante (StudentQuiz)';
$string['studentquizname'] = 'Nombre del ExamenEstudiante (StudentQuiz)';
$string['studentquizname_help'] = 'Nombre de este ExamenEstudiante (StudentQuiz)';
$string['tags'] = 'Marcas';
$string['unapprove'] = 'Desaprobar';
