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
 * Strings for component 'activequiz', language 'es', version '3.11'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Añadir una instancia de cuestionario activo.';
$string['activequiz:attempt'] = 'Intentar un cuestionario activo';
$string['activequiz:control'] = 'Controlar un cuestionario activo. (Normalmente sólo para profesores)';
$string['activequiz:editquestions'] = 'Editar preguntas para un cuestionario activo.';
$string['activequiz:seeresponses'] = 'Ver respuestas de otros estudiantes para evaluarlas';
$string['activequiz:viewownattempts'] = 'Permitir a los alumnos ver sus propios intentos en un cuestionario';
$string['activequizintro'] = 'Introducción';
$string['activequizsettings'] = 'Configuración general de cuestionario Activo';
$string['activitygrades'] = 'Evaluaciones de actividad:';
$string['addquestion'] = 'Añadir pregunta';
$string['addtoquiz'] = 'Añadir';
$string['anonymousresponses'] = 'Anonimizar las respuestas del estudiante';
$string['anonymousresponses_help'] = 'Anonimizar las respuestas del estudiante para la vista del instructor, así si la pantalla es mostrada, el nombre de los estudiantes o el nombre de los grupos no será mostrado.';
$string['anonymoususer'] = 'Usuario anónimo';
$string['assessed'] = 'Evaluado';
$string['assessed_help'] = 'Marque esta casilla para hacer su cuestionario evaluable';
$string['attempt_grade'] = 'Evaluar intento';
$string['attemptno'] = 'Número de intento';
$string['attempts'] = 'Intentos';
$string['attemptstarted'] = 'Ya se ha iniciado un intento por su parte, por favor pulse abajo para continuar a su intento en curso';
$string['attemptstartedalready'] = 'Ya se ha iniciado un intento por alguno de los miembros de su grupo';
$string['attemptview'] = 'Ver intento';
$string['cantaddquestiontwice'] = 'No puede añadir la misma pregunta más de una vez a un cuestionario';
$string['cantinitattempts'] = 'No ha podido inicializar intentos para usted';
$string['closesession'] = 'Cerrar sesión';
$string['closingsession'] = 'Cerrando sesión...';
$string['countdatasetlabel'] = 'Número de respuestas';
$string['defaultquestiontime'] = 'Tiempo por defecto de pregunta';
$string['defaultquestiontime_help'] = 'El tiempo por defecto para visualizar cada pregunta.<br />
Éste puede ser modificado por preguntas individuales.';
$string['edit'] = 'Editar cuestionario';
$string['editpage_opensession_error'] = 'No se puede editar una pregunta o plantilla de cuestionario mientras una sesión esté abierta.';
$string['enabledquestiontypes'] = 'Habilitar tipos de pregunta';
$string['enabledquestiontypes_info'] = 'Tipos de pregunta habilitados para su uso dentro de elementos del examen activo';
$string['endquestion'] = 'Finalizar pregunta';
$string['errorregrade'] = 'Lo siento, hubo un error al intentar evaluar de nuevo todos los exámenes';
$string['eventattemptstarted'] = 'Intento comenzado';
$string['eventattemptviewed'] = 'Intento visualizado';
$string['eventquestionanswered'] = 'Pregunta respondida en intento';
$string['eventquestionmanuallygraded'] = 'Pregunta puntuada manualmente';
$string['feedbackintro'] = 'Retroalimentación para su pregunta. Por favor espere a que el profesor inicie la siguiente pregunta';
$string['firstsession'] = 'Primera sesión';
$string['fullanonymize'] = 'Anonimizar totalmente las respuestas de los estudiantes';
$string['fullanonymize_help'] = 'Anonimizar totalmente las respuestas de los estudiantes. Por favor tenga en cuenta, que si selecciona esta opción, esta sesión de respuestas no será calificada y aplicada a los estudiantes.';
$string['gatheringresults'] = 'Buscando resultados...';
$string['gotosession'] = 'Ir a la sesión en curso';
$string['grademethod'] = 'Método de evaluación de la sesión';
$string['grademethod_help'] = 'Este es el método que se utiliza cuando se evalua. Este método es para comprender la evaluación con múltiples sesiones en el mismo cuestionario activo';
$string['gradesettings'] = 'Configuración de Evaluación';
$string['groupattendance'] = 'Permitir asistencia en grupo';
$string['groupattendance_help'] = 'Si esta casilla está habilitada, el estudiante que realice el cuestionario podrá seleccionar que estudiantes en su grupo están en la asistencia.';
$string['grouping'] = 'Agrupando';
$string['grouping_help'] = 'Seleccione el agrupamiento que desea utilizar para agrupar estudiantes';
$string['groupmembership'] = 'Pertenencia a grupo';
$string['groupworksettings'] = 'Configuración de grupo';
$string['hide_correct_answer'] = 'Ocultar respuesta correcta';
$string['hidenotresponded'] = 'Ocultar no respondidas';
$string['hidestudentresponses'] = 'Ocultas respuestas';
$string['highestsessiongrade'] = 'Mayor puntuación de la sesión';
$string['indvquestiontime'] = 'Tiempo de pregunta';
$string['indvquestiontime_help'] = 'Tiempo de pregunta en segundos.';
$string['instructorquizinst'] = '<p>Por favor espere en esta página hasta que los estudiantes estén conectados.  Un vez presione en <b>comenzar cuestionario</b>, el cuestionario comenzará con la primera pregunta</p>
    <p>
<p>Controles:</p>
    <ul>
        <li>
            Reenviar pregunta
            <ul>
                <li>
                    Permite al instructor reenviar la pregunta actual o la anterior (disponible durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Próxima pregunta
            <ul>
                <li>
                    Avanza hacia la siguiente pregunta (disponible durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Finalizar pregunta
            <ul>
                <li>
                    Finaliza la pregunta actual. También le permite al instructor finalizar antes de tiempo una pregunta con límite de tiempo (disponible mientras una pregunta está en curso). <i>Si la pregunta no tuviera límite de tiempo, se requerirá que el instructor presione <b>finalizar pregunta.</b></i>
                </li>
            </ul>
        </li>
        <li>
            Ir a la pregunta
            <ul>
                <li>
                    Abre un cuadro de diálogo que dirige a todos los usuarios a una pregunta específica en el cuestionario (disponible durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Cerrar sesión
            <ul>
                <li>
                    Cierra la sesión actual, al igual que todos los intentos para los estudiantes. Esto automáticamente calificará todos los intentos (disponible en cualquier momento).
                </li>
            </ul>
        </li>
        <li>
            Recargar resultados
            <ul>
                <li>
                    Actualiza las respuestas de los estudiantes en el cuadro de información. Permite al instructor ver cuántos estudiantes o grupos han respondido, y cuántos aún no han respondido (disponible durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Ocultar/Mostrar las no respondidas
            <ul>
                <li>
                    Oculta o muestra el cuadro de información que presenta cuántos estudiantes o grupos han respondido, y cuáles estudiantes o grupos aún no han respondido (available when question is polling).
                </li>
            </ul>
        </li>
        <li>
            Mostrar la respuesta correcta
            <ul>
                <li>
                    Da al instructor una vista de la pregunta con la respuesta correcta seleccionada (disponible durante la revisión de una pregunta). Esta no mostrará la respuesta correcta a preguntas calificadas manualmente, como ensayos o preguntas que requieren dibujar.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = 'Ya existe una sesión en progreso. Por favor haz clic en el botón inferior para ir a la sesión.';
$string['invalid_indvquestiontime'] = 'El tiempo para la pregrunta debe ser un entero de 0 o superior.';
$string['invalid_numberoftries'] = 'El número de intentos debe ser un entero de 1 o superior.';
$string['invalid_points'] = 'Se requiere la puntuación y debe ser un número mayor que 0';
$string['invalidattemptaccess'] = 'No tienes el permiso para acceder a este intento.';
$string['invalidgroupid'] = 'Se requiere un ID de grupo válido para los estudiantes';
$string['invalidquestionattempt'] = 'Pregunta no válida ($a->questionname) siendo añadida a intento de cuestionario.';
$string['isanonymous'] = 'Todas las respuestas a este cuestionario activo son anónimas';
$string['joinquiz'] = 'Unirse a Cuestionario';
$string['joinquizinstructions'] = 'Pulse debajo para unirse al cuestionario';
$string['jumptoquesetioninstructions'] = 'Seleccione una pregunta a la que desea ir:';
$string['jumptoquestion'] = 'Ir a la pregunta';
$string['lastsession'] = 'Última sesión';
$string['loading'] = 'Inicializando cuestionario';
$string['manualcomment'] = 'Comentario manual';
$string['manualcomment_help'] = 'El comentario que los instructores pueden agregar cuando califican un intento';
$string['marks'] = 'Calificaciones';
$string['marks_help'] = 'La calificación numérica para cada pregunta y el puntaje global del intento';
$string['modulename'] = 'Cuestionario activo';
$string['modulename_help'] = '<p>La actividad Cuestionario activo permite a un instructor crear y administrar cuestionarios en tiempo real. Todos los tipos de preguntas regulares del cuestionario se pueden utilizar en el cuestionario activo.</p> <p>El cuestionario activo permite la participación individual o en grupo. La asistencia en grupo es posible, por lo que los puntos otorgados durante el examen activo sólo se aplicarán a los participantes que asistieron a la sesión. Las preguntas se pueden configurar para permitir múltiples intentos. Se puede establecer un límite de tiempo para finalizar automáticamente la pregunta, o el instructor puede finalizar manualmente la pregunta y pasar a la siguiente. El instructor también tiene la capacidad de saltar a diferentes preguntas mientras ejecuta la sesión. Los instructores pueden monitorear la participación en grupo o individual, las respuestas en tiempo real de los participantes y la pregunta que se está encuestando. </p> <p>Cada intento de prueba se califica automáticamente como una prueba regular (con la excepción de las preguntas de ensayo y PoodLLL) y la calificación se registra en el libro de calificaciones. La calificación para la participación en el grupo se puede hacer automáticamente transfiriendo la calificación del encuestado único a los otros miembros del grupo. </p> <p>El instructor tiene opciones para mostrar pistas, dar retroalimentación y mostrar las respuestas correctas a los estudiantes al completar el cuestionario.</p> <p>Los cuestionarios activos pueden ser utilizados como un vehículo para impartir el aprendizaje en equipo dentro de Moodle.</p>.';
$string['modulenameplural'] = 'Cuestionarios activos';
$string['nextquestion'] = 'Siguiente pregunta';
$string['no_questions'] = 'No se han agregado preguntas a este cuestionario.';
$string['nochangegroups'] = 'No puedes cambiar grupos después de crear las sesiones o no existen grupos definidos para este curso.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'No hay retroalimentación para esta pregunta.';
$string['nosession'] = 'No hay sesión abierta';
$string['notime'] = 'Sin límite de tiempo';
$string['notime_help'] = 'Marca este campo si no desea tener temporizador en esta pregunta. <p> El profesor tendrá entonces que pinchar en el botón de fin de la pregunta para que la pregunta finalice. </p>';
$string['notresponded'] = 'Número de intentos no respondidos';
$string['notries'] = 'No tienes intentos restantes para esta pregunta';
$string['numberoftries'] = 'Número de intentos';
$string['numberoftries_help'] = 'Número de intentos del usuario para intentar la pregunta. Los estudiantes seguirán estando sujetos al límite de tiempo de la pregunta';
$string['overallgrade'] = 'Media de calificación: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Porcentaje total de respuestas';
$string['pluginadministration'] = 'Activar la administración del cuestionario';
$string['pluginname'] = 'Cuestionario activo';
$string['points'] = 'Puntos de pregunta';
$string['points_help'] = 'El número de puntos que desea que otorgue esta pregunta';
$string['qdeleteerror'] = 'No se ha podido borrar la pregunta';
$string['qdeletesucess'] = 'Pregunta borrada correctamente';
$string['qmoveerror'] = 'No se ha podido mover la pregunta';
$string['qmovesuccess'] = 'Pregunta movida correctamente';
$string['question'] = 'Pregunta';
$string['questiondelete'] = 'Borrar pregunta {$a}';
$string['questionedit'] = 'Editar preguntar';
$string['questionfinished'] = 'Pregunta terminada, esperando resultados';
$string['questionlist'] = 'Lista de preguntas';
$string['questionmovedown'] = 'Mover la pregunta {$a} abajo';
$string['questionmoveup'] = 'Mover la pregunta {$a} arriba';
$string['quiznotrunning'] = 'El cuestionario no ha empezado aún - espera para que el profesor lo inicie. Usa el botón de recargar para recargar esta página y comprobarlo de nuevo.';
$string['regradeallgrades'] = 'Recalificar todas las calificaciones';
$string['reload_results'] = 'Recargar Resultados';
$string['repollquestion'] = 'Reenviar pregunta';
$string['response_attempt_controls'] = 'Editar/Ver Intento';
$string['responses'] = 'Ver respuestas';
$string['reviewafter'] = 'Después de que la sesión sea cerrada';
$string['reviewoptionsettings'] = 'Opciones de revisión';
$string['savequestion'] = 'Guardar pregunta';
$string['scale'] = 'Calificación máxima';
$string['scale_help'] = 'Este valor (un entero), recalculará los puntos recibidos en el cuestionario a este valor.';
$string['select_group'] = 'Seleccione su grupo';
$string['selectsession'] = 'Seleccione la sesión a visualizar:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Media de la sesión';
$string['sessionclosed'] = 'La sesión ahora está cerrada';
$string['sessionname'] = 'Nombre de la sesión';
$string['sessionname_required'] = 'El nombre de la sesión es obligatorio';
$string['sessionnametext'] = '<span style="font-weight: bold">Sesión: </span>';
$string['show_correct_answer'] = 'Mostrar la respuesta correcta';
$string['showhistoryduringquiz'] = 'Mostrar historial de la respuesta';
$string['showhistoryduringquiz_help'] = 'Muestra el historial de respuestas del estudiante/grupo para esta pregunta mientras revisa las respuestas a una pregunta durante una prueba';
$string['shownotresponded'] = 'Mostrar las no respondidas';
$string['showstudentresponses'] = 'Mostrar respuestas';
$string['start_session'] = 'Comenzar Sesión';
$string['startedon'] = 'Comenzó en';
$string['startquiz'] = 'Comenzar cuestionario';
$string['studentquizinst'] = '<p>Por favor espere al profesor para comenzar el cuestionario. Una vez comience verá un contador de tiempo junto a la primera pregunta.</p>';
$string['successregrade'] = 'Cuestionario recalificado con éxito';
$string['teacherjoinquizinstruct'] = 'Usar si desea realizar un intento de prueba usted mismo<br />(será necesario comenzar el cuestionario en una ventana nueva)';
$string['teacherstartinstruct'] = 'Usar para empezar una prueba para que los estudiantes la realicen.<br />Usar el cuadro de texto para definir un nombre para esta sesión (para ayudar a ver los resultados en una fecha posterior).';
$string['theattempt'] = 'El intento';
$string['theattempt_help'] = 'Si el estudiante puede revisar el intento.';
$string['timecompleted'] = 'Tiempo completado';
$string['timemodified'] = 'Tiempo modificado';
$string['timertext'] = 'Tu cuestionario finalizará y se auto-guardará en:';
$string['trycount'] = 'Le quedan {$a->tries} intentos.';
$string['unabletocreate_session'] = 'No se pudo crear la sesión';
$string['view'] = 'Ver cuestionario';
$string['viewstats'] = 'Ver estadísticas del cuestionario';
$string['waitforquestion'] = 'Esperando al cuestionario para ser enviado en:';
$string['waitforquestiontime'] = 'Esperar al turno de preguntas';
$string['waitforquestiontime_help'] = 'El tiempo para esperar a que la pregunta empiece o avance en el tiempo.';
$string['waitforrevewingend'] = 'El profesor está actualmente revisando la pregunta anterior. Por favor espera que empiece la siguiente pregunta';
$string['waitstudent'] = 'Esperando a los estudiantes para conectar';
$string['workedingroups'] = 'Se trabajará en grupos.';
$string['workedingroups_help'] = 'Seleccione esta opción para indicar que los estudiantes trabajarán en grupos. Debe estar seguro de seleccionar un grupo de abajo';
