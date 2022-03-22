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
 * Strings for component 'adaptivequiz', language 'es', version '3.11'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Reporte de intentos';
$string['adaptivequiz:addinstance'] = 'Añadir un nuevo cuestionario adaptativo';
$string['adaptivequiz:attempt'] = 'Complete el cuestionario adaptativo';
$string['adaptivequiz:reviewattempts'] = 'Revise los envíos del cuestionario adaptativo';
$string['adaptivequiz:viewreport'] = 'Ver los reportes del cuestionario adaptativo';
$string['adaptivequizname'] = 'Nombre';
$string['adaptivequizname_help'] = 'Introduzca el nombre del cuestionario adaptativo';
$string['all_attempts_deleted'] = 'Todos los intentos del cuestionario adaptativo han sido borrados';
$string['all_grades_removed'] = 'Todos las calificaciones de cuestionarios adaptativos han sido borradas';
$string['answer'] = 'Respuesta';
$string['answerdistgraph_numrightwrong'] = 'Número incorrecto (-)  /   Número correcto (+)';
$string['answerdistgraph_questiondifficulty'] = 'Nivel de pregunta';
$string['answerdistgraph_title'] = 'Distribución de respuesta para  {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Respuestas';
$string['attempt_questiondetails'] = 'Detalles de la pregunta';
$string['attempt_state'] = 'Estado del intento';
$string['attempt_summary'] = 'Resumen del intento';
$string['attempt_user'] = 'Usuario/a';
$string['attemptclosed'] = 'Los intentos han sido cerrados manualmente.';
$string['attemptclosedstatus'] = 'Cerrados manualmente por {$a->current_user_name} (user-id: {$a->current_user_id}) en {$a->now}.';
$string['attemptdeleted'] = 'Intento eliminado para {$a->name} submitted on {$a->timecompleted}';
$string['attemptfeedback'] = 'Retroalimentación del intento';
$string['attemptfeedback_help'] = 'La retroalimentación del intento se muestra al usuario una vez finalizado el intento';
$string['attemptfinishedtimestamp'] = 'Hora de finalización del intento';
$string['attemptfirst'] = 'Primer intento';
$string['attemptlast'] = 'Último intento';
$string['attemptquestion_ability'] = 'Medida de capacidad';
$string['attemptquestion_abilitylogits'] = 'Capacidad medida (logits)';
$string['attemptquestion_difficulty'] = 'Dificultad de la pregunta (logits)';
$string['attemptquestion_diffsum'] = 'Suma de dificultad';
$string['attemptquestion_error'] = 'Error estándar (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Nivel de pregunta';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Correcto/Incorrecto';
$string['attemptquestion_stderr'] = 'Error estándar (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptsallowed_help'] = 'Número de veces que un estudiante puede intentar esta actividad';
$string['attemptstarttime'] = 'Hora de inicio del intento';
$string['attemptstate'] = 'Estado del intento';
$string['attemptstopcriteria'] = 'Razón para detener el intento';
$string['attempttotaltime'] = 'Tiempo total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Regresar a todas las preguntas';
$string['backtomainreport'] = 'Volver a los informes principales';
$string['backtoviewattemptreport'] = 'Regresar a ver el reporte de intentos';
$string['backtoviewreport'] = 'Volver a los informes principales';
$string['bestscore'] = 'Mejor puntuación';
$string['bestscorestderror'] = 'Error estándar';
$string['browsersecurity'] = 'Seguridad del navegador';
$string['browsersecurity_help'] = 'Si se selecciona "Ventana emergente de pantalla completa con algo de seguridad de JavaScript", la prueba solo comenzará si el estudiante tiene un navegador web habilitado para JavaScript, la prueba aparece en una ventana emergente de pantalla completa que cubre todas las demás ventanas y no tiene navegación, los controles y los estudiantes no pueden, en la medida de lo posible, utilizar funciones como copiar y pegar';
$string['calcerrorwithinlimits'] = 'El error estándar calculado de {$a->calerror} está dentro de los límites marcados por la actividad {$a->definederror}';
$string['closeattempt'] = 'Cerrar intento';
$string['confirmcloseattempt'] = '¿Estás seguro de que deseas cerrar este intento de {$a->name}?';
$string['confirmcloseattemptscore'] = 'Se respondieron {$a->num_questions} preguntas y la puntuación hasta ahora es {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Este intento se inició el {$a->started} y se actualizó por última vez el {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando la eliminación del intento de {$ a-> name} enviado el {$ a-> timecompleted}';
$string['deleteattemp'] = 'Eliminar intento';
$string['discrimination_display_name'] = 'Discriminación';
$string['downloadcsv'] = 'Descargar CSV';
$string['enterrequiredpassword'] = 'Ingrese la contraseña requerida';
$string['errorattemptstate'] = 'Hubo un error al determinar el estado del intento';
$string['errorclosingattempt'] = 'No se encontró un registro del intento';
$string['errorclosingattempt_alreadycomplete'] = 'El intento ya ha sido finalizado; no puede ser cerrado manualmente.';
$string['errordeletingattempt'] = 'No se encontró un registro del intento!';
$string['errorfetchingquest'] = 'No se pudieron localizar preguntas para el nivel {$a->level}';
$string['errorlastattpquest'] = 'Error en la comprobación del valor de la respuesta para la última pregunta intentada';
$string['errornumattpzero'] = 'Error con el número de preguntas intentadas ya que es igual a cero, pero el usuario envió una respuesta a la pregunta anterior';
$string['errorsumrightwrong'] = 'La suma de las respuestas correctas e incorrectas no equivale al número total de preguntas intentadas';
$string['formelementdecimal'] = 'Ingrese un número decimal. Máximo 10 dígitos de longitud total y con hasta 5 dígitos a la derecha del punto decimal.';
$string['formelementempty'] = 'Ingrese un entero positivo entre 1 y 999';
$string['formelementnegative'] = 'Ingrese un número positivo entre 1 y 999';
$string['formelementnumeric'] = 'Ingrese un valor numérico entre 1 y 999';
$string['formlowlevelgreaterthan'] = 'El nivel más bajo debe ser inferior al nivel más alto';
$string['formminquestgreaterthan'] = 'El número mínimo de preguntas debe ser inferior al número máximo de preguntas';
$string['formquestionpool'] = 'Seleccione, al menos, una categoría de pregunta';
$string['formstartleveloutofbounds'] = 'El nivel de inicio debe ser un número entre el nivel más bajo y el más alto';
$string['formstderror'] = 'Debe introducir un porcentaje menor que 50 y mayor o igual que 0';
$string['functiondisabledbysecuremode'] = 'Esa funcionalidad está actualmente deshabilitada';
$string['gradehighest'] = 'Calificación más alta';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Cuando se permiten múltiples intentos, para calcular la nota final del cuestionario están disponibles los siguientes métodos:

* Nota más alta de todos los intentos
* Primer intento (el resto de intentos se ignoran)
* Último intento (el resto de intentos se ignoran)';
$string['graphlegend_error'] = 'Error estándar';
$string['graphlegend_target'] = 'Nivel objetivo';
$string['highestlevel'] = 'Nivel más alto de dificultad';
$string['highestlevel_help'] = 'El nivel más alto de dificultad que pueden tener las preguntas seleccionadas para esta tarea. Durante un intento la actividad no sobrepasará este nivel de dificultad';
$string['highlevelusers'] = 'Usuarios por encima del nivel de pregunta';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Informe de intentos individuales de usuario para {$a}';
$string['leveloutofbounds'] = 'El nivel solicitado {$a->level} está fuera de los límites para el intento';
$string['lowestlevel'] = 'Nivel más bajo de dificultad';
$string['lowestlevel_help'] = 'El nivel más alto de dificultad que pueden tener las preguntas seleccionadas para esta tarea. Durante un intento la actividad no bajará este nivel de dificultad';
$string['lowlevelusers'] = 'Usuarios por debajo del nivel de pregunta';
$string['maximumquestions'] = 'Número máximo de preguntas';
$string['maximumquestions_help'] = 'El número máximo de preguntas que el estudiante puede intentar';
$string['maxquestattempted'] = 'Número máximo de preguntas intentadas';
$string['midlevelusers'] = 'Usuarios cerca del nivel de pregunta';
$string['minimumquestions'] = 'Número mínimo de preguntas';
$string['minimumquestions_help'] = 'El número mínimo de preguntas que el estudiante puede intentar';
$string['missingtagprefix'] = 'Falta el prefijo de etiqueta';
$string['modulename'] = 'Cuestionario adaptado';
$string['modulenameplural'] = 'Cuestionario adaptado';
$string['na'] = 'n/a';
$string['name'] = 'Nombre';
$string['noattemptrecords'] = 'Sin registro de intentos para este estudiante';
$string['noattemptsallowed'] = 'No se permiten más intentos en esta actividad';
$string['nonewmodules'] = 'No se encontraron instancias de Cuestionario adaptado';
$string['nopermission'] = 'No tiene permiso para ver este recurso';
$string['notinprogress'] = 'Este intento no está en curso.';
$string['notyourattempt'] = 'Este no es su intento en la actividad';
$string['numofattemptshdr'] = 'Número de intentos';
$string['numright'] = 'Número correcto';
$string['numwrong'] = 'Número incorrecto';
$string['percent_correct_display_name'] = '% Correctas';
$string['pluginadministration'] = 'Cuestionario adaptado';
$string['pluginname'] = 'Cuestionario adaptado';
$string['question_report'] = 'Análisis de pregunta';
$string['questionanalysisbtn'] = 'Análisis de pregunta';
$string['questionnumber'] = 'Pregunta #';
$string['questionpool'] = 'Banco de preguntas';
$string['questionpool_help'] = 'Seleccione la(s) categoría(s) de pregunta de donde se obtendrán las preguntas para la actividad durante un intento.';
$string['questions_report'] = 'Informe de preguntas';
$string['questionsattempted'] = 'Suma de preguntas intentadas';
$string['recentactquestionsattempted'] = 'Preguntas intentadas: {$a}';
$string['recentattemptstate'] = 'Estado del intento:';
$string['recentcomplete'] = 'Completado';
$string['recentinprogress'] = 'En progreso';
$string['requirepassword'] = 'Contraseña requerida';
$string['requirepassword_help'] = 'Se requiere que los estudiantes introduzcan una contraseña antes de empezar su intento';
$string['requirepasswordmessage'] = 'Para intentar este cuestionario tienes que conocer la contraseña del cuestionario';
$string['resetadaptivequizsall'] = 'Borrar todos los intentos de Cuestionario adaptado';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisar intento';
$string['reviewattemptreport'] = 'Revisando el intento por {$a->fullname} enviado en {$a->finished}';
$string['score'] = 'Puntuación';
$string['scoring_table'] = 'Tabla de puntuaciones';
$string['standarderror'] = 'Error estándar para parar';
$string['standarderror_help'] = 'Cuando el error en la medida de la destreza del usuario se encuentra por debajo de esta cantidad, el cuestionario se detendrá. Ajuste este valor del 5% por defecto para requerir más o menos precisión en la medida de destreza';
$string['standarderrorhdr'] = 'Error estándar';
$string['startattemptbtn'] = 'Comenzar intento';
$string['startinglevel'] = 'Nivel inicial de dificultad';
$string['startinglevel_help'] = 'Cuando el estudiante inicia un intento, la actividad seleccionará al azar una pregunta que coincida con el nivel de dificultad';
$string['statistic'] = 'Estadística';
$string['stopingconditionshdr'] = 'Condiciones de parada';
$string['submitanswer'] = 'Enviar respuesta';
$string['times_used_display_name'] = 'Veces usado';
$string['unknownuser'] = 'Usuario desconocido';
$string['updateattempterror'] = 'Error al intentar actualizar el registro de intentos';
$string['user'] = 'Usuario';
$string['value'] = 'Valor';
$string['viewreportbtn'] = 'Ver informe';
$string['wrongpassword'] = 'Contraseña es incorrecta';
