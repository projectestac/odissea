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
 * Strings for component 'offlinequiz_statistics', language 'es', version '4.4'.
 *
 * @package     offlinequiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Respuesta actual';
$string['allattempts'] = 'Todos los intentos';
$string['allattemptsavg'] = 'Calificación media de todos los resultados';
$string['allattemptscount'] = 'Número total de resultados calificados completos';
$string['allgroups'] = 'Todos los grupos';
$string['analysisofresponses'] = 'Análisis de respuestas';
$string['analysisofresponsesfor'] = 'Análisis de respuestas para {$a}';
$string['attempts'] = 'Intentos';
$string['attemptsall'] = 'Todos los intentos';
$string['attemptsfirst'] = 'Primer intento';
$string['backtoquestionsandanswers'] = 'Volver a la página principal de estadísticas.';
$string['bestgrade'] = 'Calificación mas alta obtenida';
$string['calculatefrom'] = 'Calcular estadísticas desde';
$string['cic'] = 'Coeficiente de congruencia interna';
$string['completestatsfilename'] = 'completestats';
$string['correct'] = 'Respondido correctamente';
$string['count'] = 'Cuenta';
$string['coursename'] = 'Nombre de curso';
$string['detailedanalysis'] = 'Análisis más detallado de las respuestas para esta pregunta';
$string['differentquestions'] = 'Sus grupos de cuestionarios offline contienen diferentes conjuntos de preguntas.';
$string['differentsumgrades'] = 'Sus grupos de cuestionarios offline tienen diferentes sumas de calificaciones ({$a}). Por tanto, la media, la mediana y la desviación estándar no pueden ser calculadas.';
$string['discrimination_index'] = 'Índice de discriminación';
$string['discriminative_efficiency'] = 'Eficiencia de discriminación';
$string['downloadeverything'] = 'Descargar reporte completo como';
$string['duration'] = 'Abierto durante';
$string['effective_weight'] = 'Peso efectivo';
$string['errordeleting'] = 'Error al borrar {$a} antiguos registros.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'La pregunta ({$a}) aparece más de una vez con pesos diferentes en distintas posiciones del cuestionario. Esto habitualmente no está soportado por el informe de estadísticas y puede hacer que las estadísticas de esta pregunta no sean fiables.';
$string['errormedian'] = 'Error consiguiendo mediana';
$string['errorpowerquestions'] = 'Error al conseguir datos para calcular varianza de calificaciones de preguntas';
$string['errorpowers'] = 'Error al conseguir datos para calcular varianza de calificaciones de cuestionarios offline.';
$string['errorrandom'] = 'Error consiguiendo datos de sub elementos';
$string['errorratio'] = 'Ratio de error';
$string['errorstatisticsquestions'] = 'Error al conseguir datos para calcular estadísticas para calificaciones de preguntas';
$string['facility'] = 'Índice de dificultad';
$string['firstattempts'] = 'primeros intentos';
$string['firstattemptsavg'] = 'Nota media de los primeros intentos';
$string['firstattemptscount'] = 'Número de primeros intentos totalmente evaluados';
$string['frequency'] = 'Frecuencia';
$string['intended_weight'] = 'Peso pretendido';
$string['kurtosis'] = 'Puntuar curtosis de distribución';
$string['lastcalculated'] = 'Último cálculo hace {$a->lastcalculated}. Ha habido {$a->count} intentos desde entonces.';
$string['maxgrade'] = 'Máxima calificación posible';
$string['median'] = 'Mediana de calificación';
$string['modelresponse'] = 'Modelo de respuesta';
$string['negcovar'] = 'Covarianza negativa de calificación con evaluación total del intento';
$string['negcovar_help'] = 'La calificación de esta pregunta para este conjunto de intentos del cuestionario offline varía de forma opuesta a la calificación general del intento. Esto significa que la calificación general del intento tiende a estar bajo la media mientras que la calificación de esta pregunta está por encima de la media y viceversa.

Nuestra ecuación para peso efectivo de la pregunta no se puede calcular en este caso. Los cálculos para peso efectivo de pregunta para otras preguntas de este cuestionario offline tienen el peso efectivo de pregunta de estas preguntas si las preguntas resaltadas con una covarianza negativa tienen una calificación máxima de cero.

Si usted edita un cuestionario offline y le da a esta(s) pregunta(s) con covarianza negativa una calificación máxima de cero, entonces el peso efectivo de la pregunta de estas preguntas será cero y el peso efectivo real de la pregunta de otras preguntas se calculará ahora.';
$string['nostudentsingroup'] = 'Aún no hay estudiantes en este grupo';
$string['offlinequizinformation'] = 'Información de cuestionario offline';
$string['offlinequizname'] = 'Nombre del cuestionario offline';
$string['offlinequizoverallstatistics'] = 'Estadísticas generales de cuestionario offline';
$string['offlinequizstructureanalysis'] = 'Análisis de estructura del cuestionario offline';
$string['optiongrade'] = 'Crédito parcial';
$string['partially'] = 'Respondido de forma parcialmente correcta';
$string['partofquestion'] = 'Número de respuesta';
$string['pluginname'] = 'Estadísticas de cuestionarios offline';
$string['position'] = 'Posición';
$string['positions'] = 'Posiciones';
$string['preferencespage'] = 'Preferencias sólo para esta página';
$string['preferencessave'] = 'Guardar preferencias';
$string['privacy:metadata'] = 'Este plugin no almacena ningún dato de usuario.';
$string['questionandanswerstats'] = 'Preguntas + Respuestas';
$string['questionandanswerstatsheader'] = 'Análisis de preguntas y respuestas';
$string['questioninformation'] = 'Información de la pregunta';
$string['questionname'] = 'Nombre de pregunta';
$string['questionnumber'] = 'Nº Preg.';
$string['questionstatistics'] = 'Estadísticas de pregunta';
$string['questionstats'] = 'Análisis de las preguntas';
$string['questionstatsfilename'] = 'questionstats';
$string['questionstatsheader'] = 'Análisis de preguntas';
$string['questiontype'] = 'Tipo de pregunta';
$string['random_guess_score'] = 'Puntuación de aciertos aleatorios';
$string['recalculatenow'] = 'Recalcular ahora';
$string['remarks'] = 'Nota';
$string['response'] = 'Respuesta';
$string['skewness'] = 'Skewness de distribución de puntuación';
$string['standarddeviation'] = 'Desviación estándar';
$string['standarddeviationq'] = 'Desviación estándar';
$string['standarderror'] = 'Error estándar';
$string['statistics'] = 'Estadísticas';
$string['statistics:componentname'] = 'Informe de estadísticas de cuestionario offline';
$string['statistics:view'] = 'Ver informe de estadísticas';
$string['statisticsforgroup'] = 'Grupo';
$string['statisticshelp'] = 'Ayuda para estadísticas de cuestionario offline';
$string['statisticsreport'] = 'Informe de estadísticas';
$string['statisticsreportgraph'] = 'Estadísticas para posiciones de preguntas';
$string['statsfor'] = 'Estadísticas de cuestionario offline (para {$a})';
$string['statsoverview'] = 'Resumen';
$string['statsoverviewheader'] = 'Información del cuestionario';
$string['worstgrade'] = 'Calificación más baja obtenida';
$string['wrong'] = 'Contestadas equivocadamente';
