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
 * Strings for component 'jazzquiz', language 'es', version '4.5'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} han respondido';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} han votado';
$string['a_responses'] = '{$a} respuestas';
$string['a_students_answered'] = '<b>{$a}</b> estudiantes han respondido al menos una pregunta.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> estudiantes se han unido al cuestionario.';
$string['add'] = 'Añadir';
$string['add_question'] = 'Añadir pregunta';
$string['add_to_quiz'] = 'Añadir al cuestionario';
$string['allow_guests'] = 'Permitir invitadas/os';
$string['anonymous'] = 'Anónimo';
$string['anonymous_answers'] = 'Respuestas anónimas (asistencia visible)';
$string['anonymous_answers_info'] = 'Las respuestas están anonimizadas en esta sesión. Tu asistencia sí será registrada.';
$string['answer'] = 'Respuesta';
$string['ask_teacher'] = 'Si tienes dudas, pregunta a tu profesor/a.';
$string['attempt_started'] = 'Ya has empezado una sesión, por favor haz clic más abajo para continuar a tu intento abierto';
$string['attempts'] = 'Intentos';
$string['attendance'] = 'Asistencia';
$string['attendance_list'] = 'Lista de asistencia';
$string['click_to_show_original_results'] = 'Haz clic para ver los resultados originales';
$string['click_to_show_vote_results'] = 'Haz clic para mostrar los resultados de la votación';
$string['closing_session'] = 'Cerrando sesión...';
$string['create_new_question'] = 'Crear pregunta nueva';
$string['default_question_time'] = 'Tiempo por defecto para la pregunta';
$string['default_question_time_help'] = 'El tiempo por defecto durante el que se mostrará cada pregunta. <br>Esto puedeo sobreescribirse individualmente para cada pregunta.';
$string['delete_question'] = 'Eliminar pregunta {$a}';
$string['delete_report'] = 'Eliminar informe';
$string['download_attendance_list'] = 'Descargar lista de asistencia';
$string['download_report'] = 'Descargar informe';
$string['download_responses'] = 'Descargar respuestas';
$string['edit'] = 'Editar';
$string['edit_page_open_session_error'] = 'No puedes editar el cuestionario mientras hay una sesión abierta.';
$string['edit_question'] = 'Editar pregunta';
$string['end'] = 'Terminar';
$string['error_getting_current_results'] = 'Ha ocurrido un error al obtener los resultados actuales.';
$string['error_getting_vote_results'] = 'Ha ocurrido un error al obtener los resultados de la votación.';
$string['error_saving_vote'] = 'Ha ocurrido un error al guardar tu voto.';
$string['error_starting_vote'] = 'Ha ocurrido un error al iniciar la votación.';
$string['error_with_request'] = 'Ha ocurrido un error con la solicitud.';
$string['event_attempt_started'] = 'Intento iniciado';
$string['event_question_answered'] = 'Pregunta respondida en este intento';
$string['exit'] = 'Salir';
$string['failed_to_end_question'] = 'No se finalizó la pregunta.';
$string['fullscreen'] = 'Pantalla completa';
$string['fully_anonymous'] = 'Totalmente anónimo';
$string['fully_anonymous_info'] = 'Tanto las respuestas como la asistencia son totalmente anónimas en esta sesión.';
$string['goto_session'] = 'Ir a la sesión en curso';
$string['guest_login'] = 'No tienes una matrícula activa en este curso, y no hay ningún cuestionario abierto para visitantes en este momento.';
$string['improvise'] = 'Improvisar';
$string['instructions_for_instructor'] = '<h3>Por favor asegúrate de leer las instrucciones:</h3>
    <p>Hay atajos de teclado disponibles, que pueden usarse cuando no hay un campo seleccionado.</p>
    <table>
        <tr>
               <th>Control</th>
               <th>Tecla</th>
               <th>Descripción</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Re-preguntar
            </td>
            <td>r</td>
            <td>
                Permite al profesorado volver a realizar el cuestionario recién preguntado.
                Es lo mismo que iniciar una pregunta desde la lista desplegable  <i class="fa fa-bars"></i> Saltar.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Votar
            </td>
            <td>v</td>
            <td>
                 Permite a estudiantes votar por las respuestas.
                 La persona docente puede hacer clic en una respuesta para alternar si debería o no incluirse en la votación.
                 Hacer clic en la barra de respuestas iniciará una combinación desde esa respuesta.
                 Ten en cuenta que esa barra consumirá la barra en la que hagas clic a continuación.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvisar
            </td>
            <td>i</td>
            <td>
                Muestra una lista de preguntas realizadas para improvisar. Escribe la pregunta en la pizarra y solicita aportaciones con estas preguntas.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Saltar
            </td>
            <td>j</td>
            <td>
                Muestra una lista de todas las preguntas planeadas para el cuestionario.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Siguiente
            </td>
            <td>n</td>
            <td>
                Continúa a la siguiente pregunta en la lista de preguntas planeadas.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-random"></i> Aleatorio
            </td>
            <td>m</td>
            <td>
                Inicia una pregunta aleatoriamente de la lista de preguntas planeadas.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Terminar
            </td>
            <td>e</td>
            <td>
                Terminar la pregunta en curso.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Pantalla completa
            </td>
            <td>f</td>
            <td>
                Muestra los resultados en pantalla completa. Las respuestas no aparecerán durante la pregunta, así que puedes dejar esta opción activa durante toda la sesión.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respuesta
            </td>
            <td>a</td>
            <td>
                Ofrece a la persona docente una vista de la pregunta con la respuesta correcta seleccionada.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respuestas
            </td>
            <td>t (toggle/alternar)</td>
            <td>
                Ocultar o mostrar respuestas de estudiantes.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Salir
            </td>
            <td></td>
            <td>
                Salir de la sesión actual.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Espera a que se inicie el cuestionario, por favor.</p>';
$string['instructor_sessions_going'] = 'Ya hay una sesión en curso. Por favor, haz clic en el botón de abajo para ir a la sesión';
$string['invalid_question_time'] = 'El tiempo para la pregunta debe ser un número entero igual o superior a 0';
$string['jazzquiz:addinstance'] = 'Añadir una instancia de JazzQuiz';
$string['jazzquiz:attempt'] = 'Hacer un intento de JazzQuiz';
$string['jazzquiz:control'] = 'Controlar un JazzQuiz. (Normalmente solo para docentes)';
$string['jazzquiz:editquestions'] = 'Editar preguntas de un JazzQuiz.';
$string['jazzquiz:seeresponses'] = 'Ver otras respuestas de estudiantes para calificarlas';
$string['jazzquizsettings'] = 'Ajustes generales de JazzQuiz';
$string['join_quiz'] = 'Unirse al cuestionario';
$string['join_quiz_instructions'] = 'Haz clic abajo para unirte al cuestionario';
$string['jump'] = 'Saltar';
$string['loading'] = 'Cargando...';
$string['modulename'] = 'JazzQuiz';
$string['modulename_help'] = '<p>
    La actividad JazzQuiz permite a docentes crear y administrar cuestionarios en tiempo real. Todos los tipos de preguntas pueden utilizarse en los cuestionarios de JazzQuiz.
</p>
<p>
    La persona docente tiene la habilidad de Saltar a diferentes preguntas durante una sesión en curso.
    Las respuestas se muestran en directo en un gráfico de barras, optimizado para proyectores. También está disponble en modo pantalla completa.
    Se puede establecer un tiempo límite para que la pregunta se termine automáticamente, o la persona docente puede terminar la pregunta manualmente y continuar a la siguiente..
</p>';
$string['modulenameplural'] = 'JazzQuizzes';
$string['multichoice_options'] = 'Opciones de respuesta múltiple';
$string['next'] = 'Siguiente';
$string['no_attempts_found'] = 'No se han encontrado intentos.';
$string['no_guests'] = 'Es posible que la persona docente no haya iniciado una sesión para este cuestionario, y que puedas hacer un intento más adelante. También es posible que tengas que entrar como estudiante y matricularte en el curso para poder participar.';
$string['no_session'] = 'No hay ninguna sesión abierta';
$string['no_sessions_exist'] = 'No existen sesiones aún.';
$string['no_students_have_joined'] = 'No se han unido estudiantes aún.';
$string['no_time_limit'] = 'No hay límite de tiempo';
$string['no_time_limit_help'] = 'Selecciona este campo para no tener un temporizador en esta pregunta. <p>La persona docente será requerida en ese caso a hacer clic en el botón de finalizar pregunta para finalizar la pregunta</p>';
$string['nonanonymous_session'] = 'Sesión no anónima';
$string['nonanonymous_session_info'] = 'Esta sesión no es anónima. Tanto tu asistencia como tu participación quedarán registradas.';
$string['one_student_has_joined'] = 'Se ha unido 1 estudiante.';
$string['pluginadministration'] = 'Administración de JazzQuiz';
$string['pluginname'] = 'JazzQuiz';
$string['privacy:metadata:core_question'] = 'La actividad JazzQuiz almacena información sobre el uso de preguntas en el subsistema core_question';
$string['privacy:metadata:jazzquiz_attempts'] = 'Detalles acerca del intento de cuestionario para una sesión JazzQuiz.';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Si la última pregunta realizada se ha respondido o no.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'La hora a la que se terminó la última pregunta en el intento';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'La hora a la que se modificó la última pregunta en el intento';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'La hora a la que se inició la última pregunta en el intento.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'El usuario que realizó el intento.';
$string['question'] = 'Pregunta';
$string['question_move_down'] = 'Mover pregunta {$a} abajo';
$string['question_move_up'] = 'Mover pregunta {$a} arriba';
$string['question_time'] = 'Tiempo de la pregunta';
$string['question_time_help'] = 'Tiempo de la pregunta en segundos.';
$string['question_will_end_in_x_seconds'] = 'La pregunta se terminará en {$a} segundos';
$string['question_will_start_in_x_seconds'] = 'La pregunta empezará en {$a} segundos';
$string['question_will_start_now'] = 'La pregunta empezará ahora';
$string['questions'] = 'Preguntas';
$string['quit'] = 'Salir';
$string['quiz_not_running'] = '<p>Espera a que la persona docente inicie el cuestionario.</p><p>Utiliza el botón Recargar para comprobar si ha empezado.</p>';
$string['random'] = 'Aleatorio';
$string['repoll'] = 'Re-preguntar';
$string['reports'] = 'Informes';
$string['responses'] = 'Respuestas';
$string['review'] = 'Revisar';
$string['save_question'] = 'Guardar pregunta';
$string['select_session'] = 'Selecciona sesión para revisar:';
$string['session'] = 'Sesión';
$string['session_closed'] = 'La sesión está cerrada ahora';
$string['session_name'] = 'Nombre de la sesión';
$string['session_name_required'] = 'El nombre de la sesión es necesario';
$string['short_answer'] = 'Respuesta corta';
$string['short_math_answer'] = 'Respuesta matemática corta';
$string['showing_original_results'] = 'Mostrando resultados originales';
$string['showing_vote_results'] = 'Mostrando resultados de la votación';
$string['start_session'] = 'Iniciar sesión';
$string['startquiz'] = 'Iniciar cuestionario';
$string['student'] = 'Estudiante';
$string['teacher_start_instructions'] = '<p>Inicia el cuestionario para estudiantes.</p><p>Define un nombre de sesión abajo para que resulte más fácil localizar los resultados más adelante.</p>';
$string['unable_to_create_session'] = 'No se ha podido generar la sesión';
$string['view'] = 'Ver';
$string['vote'] = 'Votar';
$string['wait_for_instructor'] = 'Por favor, espera a que se inicie la siguiente pregunta.';
$string['wait_for_question_time'] = 'Espera al tiempo de la pregunta';
$string['wait_for_question_time_help'] = 'El tiempo a esperar para que empiece una pregunta.';
$string['wait_for_students'] = 'Esperando a que se conecten estudiantes';
$string['x_seconds_left'] = '{$a} segundos restantes';
$string['x_students_have_joined'] = '{$a} estudiantes se han unido.';
$string['you_already_voted'] = 'Perdona, pero ya has votado.';
