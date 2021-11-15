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
 * Strings for component 'quiz_statistics', language 'es', version '3.11'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Respuesta real';
$string['allattempts'] = 'todos los intentos';
$string['allattemptsavg'] = 'Promedio de todos los intentos';
$string['allattemptscount'] = 'Número total de intentos completados';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variante {$a->variant}';
$string['analysisofresponses'] = 'Análisis de las respuestas';
$string['analysisofresponsesfor'] = 'Análisis de respuestas para {$a}';
$string['analysisvariant'] = '"{$a->name}" variante {$a->variant}';
$string['attempts'] = 'Intentos';
$string['attemptsall'] = 'Todos los intentos';
$string['attemptsfirst'] = 'Primer intento';
$string['backtoquizreport'] = 'Volver a la página principal del informe de estadísticas.';
$string['calculatefrom'] = 'Calcular estadísticas de';
$string['calculatingallstats'] = 'Calculando estadísticas para preguntas y cuestionario y analizando datos de respuestas';
$string['cic'] = 'Coeficiente de consistentia interna (para {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Número';
$string['counttryno'] = 'Recuento de intentos {$a}';
$string['coursename'] = 'Nombre del curso';
$string['detailedanalysis'] = 'Análisis más detallado de las respuestas a esta pregunta';
$string['detailedanalysisforvariant'] = 'Análisis más detallado para las respuestas a la variante {$a} de esta pregunta';
$string['discrimination_index'] = 'Índice de discriminación';
$string['discriminative_efficiency'] = 'Eficiencia discriminativa';
$string['downloadeverything'] = 'Descargar informe completo como';
$string['duration'] = 'Abierto por';
$string['effective_weight'] = 'Peso efectivo';
$string['errordeleting'] = 'Error al eliminar {$a} registros antiguos.';
$string['errormedian'] = 'Error al buscar la mediana';
$string['errorpowerquestions'] = 'Error al recuperar datos para calcular la varianza de las calificaciones de la pregunta';
$string['errorpowers'] = 'Error al recuperar datos para calcular la varianza de las calificaciones del cuestionario';
$string['errorrandom'] = 'Error al obtener los datos del sub item';
$string['errorratio'] = 'Ratio de error (para {$a})';
$string['errorstatisticsquestions'] = 'Error al buscar los datos de calificaciones de la pregunta para calcular las estadísticas ';
$string['facility'] = 'Índice de facilidad';
$string['firstattempts'] = 'primeros intentos';
$string['firstattemptsavg'] = 'Promedio de los primeros intentos';
$string['firstattemptscount'] = 'Número de primeros intentos completos calificados';
$string['frequency'] = 'Frecuencia';
$string['highestattempts'] = 'intentos con mejores calificaciones';
$string['highestattemptsavg'] = 'Calificación media de los mejores intentos';
$string['intended_weight'] = 'Ponderación deseada';
$string['kurtosis'] = 'Curtosis de la distribución de puntuaciones (para {$a})';
$string['lastattempts'] = 'último intento';
$string['lastattemptsavg'] = 'Calificación media de los últimos intentos';
$string['lastcalculated'] = 'Último cálculo realizado hace {$a->lastcalculated}. Se han realizado {$a->count} desde entonces.';
$string['maximumfacility'] = 'Facilidad máxima';
$string['median'] = 'Mediana (de {$a})';
$string['medianfacility'] = 'Facilidad media';
$string['minimumfacility'] = 'Facilidad mínima';
$string['modelresponse'] = 'Respuesta modelo';
$string['nameforvariant'] = 'Variante {$a->variant} de {$a->name}';
$string['negcovar'] = 'Covarianza negativa de la calificación con la calificación de los intentos totales';
$string['negcovar_help'] = 'La calificación de la pregunta para este conjunto de intentos varía de forma inversa a la calificación promedio. Esto significa que la calificación general tiende a estar debajo del promedio cuando la calificación de esta pregunta está sobre el promedio y viceversa.

Nuestra ecuación para la ponderación efectiva de la pregunta no puede calcularse en este caso. Los cálculos para la ponderación efectiva de preguntas para el resto de preguntas de este cuestionario son la ponderación de la pregunta si a las preguntas resaltadas que tienen una covarianza negativa se les diera una calificación máxima de cero.

Si edita un cuestionario y les pone a estas preguntas con covarianza negativa una calificación máxima de cero, entonces  la ponderación efectiva de estas preguntas será cero y la ponderación efectiva real de las otras preguntas será como se está calculando ahora.';
$string['nogradedattempts'] = 'No se han hecho intentos de resolver este cuestionario; o bien, todos los intentos tienen preguntas que necesitan calificación manual.';
$string['nostudentsingroup'] = 'Aún no hay estudiantes en este grupo';
$string['optiongrade'] = 'Crédito parcial';
$string['partofquestion'] = 'Parte de la pregunta';
$string['pluginname'] = 'Estadísticas';
$string['position'] = 'Posición';
$string['positions'] = 'Posición(es)';
$string['privacy:metadata'] = 'Aunque el plugin de Estadísticas del Cuestionario tiene tablas de la base de datos, los datos son datos agregados y no describen a un individuo único.';
$string['questioninformation'] = 'Información sobre la pregunta';
$string['questionname'] = 'Nombre de la pregunta';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'Estadísticas de la pregunta';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Tipo de pregunta';
$string['quizinformation'] = 'Información sobre el cuestionario';
$string['quizname'] = 'Nombre del cuestionario';
$string['quizoverallstatistics'] = 'Estadísticas globales del cuestionario';
$string['quizstatisticscleanuptask'] = 'Limpiar registros de caché de estadísticas de cuestionarios antiguos';
$string['quizstructureanalysis'] = 'Análisis de la estructura del cuestionario';
$string['random_guess_score'] = 'Calificación aleatoria estimada';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Rango de estadísticas para estas preguntas';
$string['recalculatenow'] = 'Volver a calcular';
$string['reportsettings'] = 'Configuración del cálculo de estadísticas';
$string['response'] = 'Respuesta';
$string['skewness'] = 'Asimetría de la distribución de puntuaciones (para {$a})';
$string['slotstructureanalysis'] = 'Análisis estructural para la pregunta número {$a}';
$string['standarddeviation'] = 'Desviación estándar (para {$a})';
$string['standarddeviationq'] = 'Desviación estándar';
$string['standarderror'] = 'Error estándar (para {$a})';
$string['statistics'] = 'Estadísticas';
$string['statistics:view'] = 'Ver informe de estadísticas';
$string['statisticsreport'] = 'Informe estadístico';
$string['statisticsreportgraph'] = 'Estadísticas de las pregunta';
$string['statsfor'] = 'Estadísticas del cuestionario (para {$a})';
$string['variant'] = 'Variante';
$string['viewanalysis'] = 'Ver detalles';
$string['whichtries'] = 'Analizar respuestas para';
