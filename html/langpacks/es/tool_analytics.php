<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_analytics', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['allpredictions'] = 'Todas las predicciones';
$string['analysingsitedata'] = 'Analizando el sitio';
$string['analyticmodels'] = 'Modelos analíticos';
$string['bettercli'] = 'Evaluar modelos y generar predicciones puede involucrar mucho procesamiento. Se recomienda que ejecute estas acciones desde la interfaz de línea de comando.';
$string['cantguessenddate'] = 'No puede adivinarse la fecha de terminación';
$string['cantguessstartdate'] = 'No puede adivinarse la fecha de inicio';
$string['clearmodelpredictions'] = '¿Está seguro de querer eliminar todas las predicciones de "{$a}"?';
$string['clearpredictions'] = 'Borrar predicciones';
$string['clienablemodel'] = 'Puede habilitar el modelo al seleccionar un método para dividir el tiempo por su ID. Tenga en cuenta que también puede habilitarlo más tarde al usar la intefaz web (\'ninguno\' para salir).';
$string['clievaluationandpredictions'] = 'Una tarea programada del cron iteractua con los modelos habilitados y obtiene predicciones. La evaluación de modelos vía interfaz web está deshabilitada. Usted puede permitir que estos procesos sean ejecutados manualmente mediante la interfaz web al deshabilitar la configuración de Analítica <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Una tarea programada iteractua con los modelos habilitados y obtiene predicciones. La evaluación de modelos vía interfaz web está deshabilitada. Puede ser habilitada por un administrador del sitio.';
$string['createmodel'] = 'Crear modelo';
$string['delete'] = 'Eliminar';
$string['disabled'] = 'Deshabilitado';
$string['editmodel'] = 'Editar modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo ya ha sido entrenado. Tenga en cuenta que si cambia sus indicadores o su método para dividir el tiempo eliminará sus predicciones anteriores y comenzará a generar nuevas predicciones.';
$string['enabled'] = 'Habilitado';
$string['errorcantenablenotimesplitting'] = 'Usted necesita seleccionar un método de división del tiempo antes de habilitar el modelo';
$string['errornoenabledandtrainedmodels'] = 'No hay modelos habilitados y entrenados para predecir.';
$string['errornoenabledmodels'] = 'No hay modelos habilitados para entrenar.';
$string['errornoexport'] = 'Solamente pueden exportarse modelos entrenados';
$string['errornostaticevaluated'] = 'Los modelos basados en suposiciones no pueden ser evaluados. Son siempre 100% correctos de acuerdo a como fueron definidos.';
$string['errornostaticlog'] = 'Los modelos basados en suposiciones no pueden ser evaluados porque no hay bitácora de desempeño.';
$string['erroronlycli'] = 'La ejecución solamente está permitida vía línea de comando';
$string['errortrainingdataexport'] = 'Los datos de entrenamiento del modelo no pudieron exportarse';
$string['evaluate'] = 'Evaluar';
$string['evaluatemodel'] = 'Evaluar modelo';
$string['evaluationinbatches'] = 'Los contenidos del sitio son calculados y almacenados en lotes. El proceso de evaluación puede ser detenido en cualquier momento. La siguiente vez que se ejecute, continuará a partir del punto donde se detuvo.';
$string['export'] = 'Exportar';
$string['exporttrainingdata'] = 'Exportar datos de entrenamiento';
$string['extrainfo'] = 'Información';
$string['generalerror'] = 'Error de evaluación. Código de estado {$a}';
$string['getpredictions'] = 'Obtener predicciones';
$string['goodmodel'] = 'Este es un buen modelo a usar para obtener predicciones. Habilítelo para comenzar a obtener predicciones.';
$string['importmodel'] = 'Importar modelo';
$string['indicators'] = 'Indicadores';
$string['info'] = 'Información';
$string['insights'] = 'Intuiciones (predicciones)';
$string['invalidanalysables'] = 'Elementos del sitio inválidos';
$string['invalidanalysablesinfo'] = 'Esta página lista los elementos analizables del sitio que no pueden ser usados por este modelo de predicción. Los elementos listados no pueden ser usados ni para entrenar el modelo de predicción ni tampoco para que el modelo de predicción pueda obtener predicciones para ellos.';
$string['invalidanalysablestable'] = 'Tabla inválida de elementos analizables del sitio';
$string['invalidprediction'] = 'Inválido para obtener predicciones';
$string['invalidtraining'] = 'Inválido para entrenar el modelo';
$string['loginfo'] = 'Bitácora de información extra';
$string['modelid'] = 'ID del modelo';
$string['modelinvalidanalysables'] = 'Elemento analizable inválido para el modelo "{$a}"';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'División del tiempo';
$string['nextpage'] = 'Página siguiente';
$string['nodatatoevaluate'] = 'No hay datos para evaluar el modelo';
$string['nodatatopredict'] = 'No hay elementos para los cuales obtener predicción';
$string['nodatatotrain'] = 'No hay datos nuevos que puedan usarse para entrenamiento';
$string['notdefined'] = 'Todavía no definido';
$string['pluginname'] = 'Modelos analíticos';
$string['predictionprocessfinished'] = 'Proceso de predicción finalizado';
$string['predictionresults'] = 'Resultados de predicción';
$string['predictmodels'] = 'Modelos de predicción';
$string['predictorresultsin'] = 'El predictor guardó la bitácora información en el directorio {$a}';
$string['previouspage'] = 'Página anterior';
$string['sameenddate'] = 'La fecha de terminación actual es buena';
$string['samestartdate'] = 'La fecha de inicio actual es buena';
$string['scheduledanalysisresults'] = 'Resultados usando {$a->name} para división de la duración del tiempo';
$string['scheduledanalysisresultscli'] = 'Resultados usando la división de tiempo del curso {$a->name} (id: {$a->id})';
$string['target'] = 'Objetivo';
$string['timesplittingnotdefined'] = 'La división del tiempo no está definida.';
$string['timesplittingnotdefined_help'] = 'Necesita seleccionar un método de división del tiempo antes de habilitar este modelo.';
$string['trainandpredictmodel'] = 'Entrenando modelo y calculando predicciones';
$string['trainingprocessfinished'] = 'Proceso de entrenamiento terminado';
$string['trainingresults'] = 'Resultados del entrenamiento';
$string['trainmodels'] = 'Entrenar modelos';
$string['viewlog'] = 'Bitácora';
$string['weeksenddateautomaticallyset'] = 'Fecha de terminación calculada automáticamente basada en la fecha de inicio y el número de secciones';
$string['weeksenddatedefault'] = 'Fecha de terminación calculada automáticamente a partir de la fecha de inicio del curso.';
