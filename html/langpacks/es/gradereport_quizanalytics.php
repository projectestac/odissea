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
 * Strings for component 'gradereport_quizanalytics', language 'es', version '3.11'.
 *
 * @package     gradereport_quizanalytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuaracyrate'] = 'Tasa de precisión :';
$string['action'] = 'Acción';
$string['allusersdes'] = 'Esta sección informa sobre los casos incorrectos y no intentados, las categorías que resultaron ser más difíciles para todos los usuarios que hicieron el cuestionario.';
$string['apiversion'] = 'Introduzca la versión de la API';
$string['apiversiondes'] = 'Por favor introduzca su versión de la API.';
$string['attemptssnapshotdes'] = 'Esta sección es como un resumen, que muestra los datos clave de todos sus intentos anteriores.';
$string['attemptsummarydes'] = 'Este gráfico representa cómo te fue en tu intento.';
$string['avgscore'] = 'Puntuación media';
$string['bestscore'] = 'Mejor puntuación';
$string['correct'] = 'Correcto';
$string['cutoffdes'] = 'Porcentaje de corte (%) para el cuestionario. Esto se usará para el gráfico de análisis predictivo.';
$string['cutoffscore'] = 'Puntuación de corte';
$string['enterfbappid'] = 'Introduzca su ID de FaceBook App';
$string['fbappiddes'] = 'Por favor introduzca una ID de FaceBook App válida que será utilizada para compartir imágenes de gráficas.';
$string['fbsharetitle'] = 'Añadir un título';
$string['fbsharetitledefault'] = 'Hice una prueba en Dualcube y así es como se ve el gráfico de mi prueba.';
$string['fbsharetitledes'] = 'Por favor añada el texto que desea mostrar como título para las publicaciones compartidas en Facebook.';
$string['gradeanalysisdes'] = 'Número de usuarios en cada grupo de porcentaje (porcentaje de puntuación).';
$string['gradeboundary'] = 'Nota Límite';
$string['gradeboundarydes'] = 'Las notas límite son rangos establecidos por el administrador que se mostrarán en el gráfico de estadísticas de notas.';
$string['hardcatalluser'] = 'Categorías difíciles (todos los usuarios)%';
$string['hardcatlogginuser'] = 'Categorías difíciles (usuarios conectados)%';
$string['hardestquesdes'] = '* Intentos totales  = Número total de intentos.
    * Intentos fallidos = Total de intentos incorrectos + número de casos no intentados.
Este gráfico representa la dureza de las preguntas dependiendo de cuántas veces se intentó el cuestionario y las veces que esa pregunta en particular no se ha intentado o se ha contestado incorrectamente. Al hacer clic en las barras dedicadas a cada pregunta, se mostrará la pregunta  junto con la explicación y la respuesta correcta.';
$string['hardestquestion'] = 'Preguntas más difíciles';
$string['hardness'] = 'Dificultad (%)';
$string['impandpredicanalysis'] = 'Curva de mejora y análisis predictivo';
$string['incorrect'] = 'Incorrecto';
$string['lastattemptsummary'] = 'Resumen de intentos';
$string['lastattemptsummarydes'] = 'Este gráfico muestra cómo te fue en tu último intento.';
$string['loggedinuserdes'] = 'Observa las categorías que no te han ido bien.';
$string['lowestscore'] = 'Nota más baja';
$string['mixchartdes'] = 'Este gráfico muestra cómo has mejorado a lo largo de todos tus intentos y el bloque oscuro representa el número de intentos promedio necesarios para obtener la nota de corte fijada (por el administrador del sitio). El eje x (Horizontal) representa el número de intentos.';
$string['noofattempts'] = 'Número de intentos';
$string['noofpartialcorrect'] = 'Número de respuestas parcialmente correctas';
$string['noofquestionattempt'] = 'Número de preguntas intentadas';
$string['noofquestionunattempt'] = 'Número de preguntas no intentadas';
$string['noofrightans'] = 'Número de respuestas correctas';
$string['noofstudents'] = 'Número de estudiantes';
$string['noquizfound'] = '¡No se ha encontrado el cuestionario!';
$string['notgraded'] = 'No calificado todavia';
$string['partialcorrect'] = 'Parcialmente correcta';
$string['peerscores'] = 'Puntuación de los compañeros/as';
$string['pluginname'] = 'Quiz Analytics';
$string['quesanalysis'] = 'Análisis de las preguntas';
$string['quesananalysisdes'] = 'Las curvas aquí muestran cómo les fue a los usuarios en cada pregunta. Al hacer clic en los círculos dedicados a cada pregunta, se mostrará la pregunta junto con la explicación y la respuesta correcta.';
$string['questionpercatdes'] = 'Este gráfico indica el número de preguntas de cada categoría en el cuestionario.';
$string['questionspercategory'] = 'Preguntas por categoria';
$string['quizanalytics:view'] = 'Ver el informe de Quiz Analytics';
$string['quizname'] = 'Nombre del cuestionario';
$string['score'] = 'Puntuación';
$string['setcutoff'] = 'Nota de corte';
$string['setglobal'] = 'Establecer globalmente';
$string['setglobaldes'] = 'Nota límite para todos los cuestionarios. Cuando se marca reescribe las configuraciones de límites de calificación individuales para cada cuestionario.';
$string['tab1'] = 'Resumen de intentos';
$string['tab2'] = 'Mi progreso y predicciones';
$string['tab2subtab11'] = 'Curva de mejora';
$string['tab2subtab12'] = 'Resultado de mis compañeros';
$string['tab2subtab2'] = 'Pregunta más difícil';
$string['tab2subtab3'] = 'Vista de intentos';
$string['tab3'] = 'Análisis de las categorias de preguntas';
$string['tab3subtab1'] = 'Preguntas por categoria';
$string['tab3subtab2'] = 'Categorías difíciles (todos los usuarios)%';
$string['tab3subtab3'] = 'Categorías difíciles para mi';
$string['tab4'] = 'Estadística de Notas y Preguntas';
$string['tab4subtab1'] = 'Notas por porcentaje (todos los usuarios)';
$string['timechartdes'] = 'Este gráfico muestra que puntuación han tenido tus compañeros en comparación contigo.';
$string['timetaken'] = 'Vista de intentos (tiempo tardado:';
$string['totalquizattempt'] = 'Intentos totales';
$string['unattempted'] = 'No intentado';
$string['userscore'] = 'Puntuación del usuario';
$string['viewanalytics'] = 'Ver Análisis';
$string['wrongandunattemptd'] = 'Intentos fallidos';
