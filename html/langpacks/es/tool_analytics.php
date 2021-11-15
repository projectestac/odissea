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
 * Strings for component 'tool_analytics', language 'es', version '3.11'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['actionexecutedgroupedusefulness'] = 'Acciones agrupadas';
$string['actions'] = 'Acciones';
$string['actionsexecutedbyusers'] = 'Acciones ejecutadas por usuarios';
$string['actionsexecutedbyusersfor'] = 'Acciones ejecutadas por usuarios para el modelo "{$a}"';
$string['allpredictions'] = 'Todas las predicciones';
$string['alltimesplittingmethods'] = 'Todos los intervalos de análisis';
$string['analysingsitedata'] = 'Analizando el sitio';
$string['analysis'] = 'Análisis';
$string['analyticmodels'] = 'Modelos analíticos';
$string['bettercli'] = 'Evaluar modelos y generar predicciones puede involucrar mucho procesamiento. Se recomienda que ejecute estas acciones desde la interfaz de línea de comando.';
$string['cantguessenddate'] = 'No puede adivinarse la fecha de terminación';
$string['cantguessstartdate'] = 'No puede adivinarse la fecha de inicio';
$string['classdoesnotexist'] = 'La clase {$a} no existe';
$string['clearmodelpredictions'] = '¿Está seguro de querer eliminar todas las predicciones de "{$a}"?';
$string['clearpredictions'] = 'Borrar predicciones';
$string['clienablemodel'] = 'Puede habilitar el modelo al seleccionar un método para dividir el tiempo por su ID. Tenga en cuenta que también puede habilitarlo más tarde al usar la intefaz web (\'ninguno\' para salir).';
$string['clievaluationandpredictions'] = 'Una tarea programada del cron iteractua con los modelos habilitados y obtiene predicciones. La evaluación de modelos vía interfaz web está deshabilitada. Usted puede permitir que estos procesos sean ejecutados manualmente mediante la interfaz web al deshabilitar la configuración de Analítica <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Una tarea programada iteractua con los modelos habilitados y obtiene predicciones. La evaluación de modelos vía interfaz web está deshabilitada. Puede ser habilitada por un administrador del sitio.';
$string['component'] = 'Componente';
$string['componentcore'] = 'Núcleo';
$string['componentselect'] = 'Seleccione todos los modelos proporcionados por el componente \'{$a}\'';
$string['componentselectnone'] = 'Deselecciona todo';
$string['contexts'] = 'Contextos';
$string['contexts_help'] = 'El modelo se limitará a este conjunto de contextos. No se aplicarán restricciones de contexto si no se seleccionan contextos.';
$string['createmodel'] = 'Crear modelo';
$string['currenttimesplitting'] = 'Intervalo de análisis actual';
$string['delete'] = 'Eliminar';
$string['deletemodelconfirmation'] = '¿Seguro que quieres eliminar "{$a}"? Estos cambios no se pueden revertir.';
$string['disabled'] = 'Deshabilitado';
$string['editmodel'] = 'Editar modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo ya ha sido entrenado. Tenga en cuenta que si cambia sus indicadores o su método para dividir el tiempo eliminará sus predicciones anteriores y comenzará a generar nuevas predicciones.';
$string['enabled'] = 'Habilitado';
$string['errorcantenablenotimesplitting'] = 'Tiene que seleccionar un intervalo de análisis antes de habilitar el modelo';
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
$string['evaluationmode'] = 'Modo evaluación';
$string['evaluationmode_help'] = 'Hay dos modos de evaluación:

* Modelo entrenado: los datos del sitio se utilizan como datos de prueba para evaluar la precisión del modelo entrenado.
* Configuración: los datos del sitio se dividen en datos de entrenamiento y prueba, tanto para entrenar como para probar la precisión de la configuración del modelo.

El modelo entrenado solo está disponible si un modelo entrenado se ha importado al sitio y aún no se ha vuelto a entrenar con los datos del sitio.';
$string['evaluationmodecolconfiguration'] = 'Configuración';
$string['evaluationmodecoltrainedmodel'] = 'Modelo entrenado';
$string['evaluationmodeconfiguration'] = 'Evaluar la configuración del modelo';
$string['evaluationmodeinfo'] = 'Este modelo ha sido importado al sitio. Puede evaluar el rendimiento del modelo o puede evaluar el rendimiento de la configuración del modelo utilizando los datos del sitio.';
$string['evaluationmodetrainedmodel'] = 'Evaluar el modelo entrenado';
$string['executescheduledanalysis'] = 'Ejecutar análisis programado';
$string['export'] = 'Exportar';
$string['exportincludeweights'] = 'Incluir los pesos del modelo entrenado';
$string['exportmodel'] = 'Exportar configuración';
$string['exporttrainingdata'] = 'Exportar datos de entrenamiento';
$string['extrainfo'] = 'Información';
$string['generalerror'] = 'Error de evaluación. Código de estado {$a}';
$string['getpredictions'] = 'Obtener predicciones';
$string['goodmodel'] = 'Este es un buen modelo a usar para obtener predicciones. Habilítelo para comenzar a obtener predicciones.';
$string['ignoreversionmismatches'] = 'Ignorar diferencias entre versiones';
$string['ignoreversionmismatchescheckbox'] = 'Ignore las diferencias entre esta versión del sitio y la versión original del sitio.';
$string['importedsuccessfully'] = 'El modelo ha sido importado con éxito.';
$string['importmodel'] = 'Importar modelo';
$string['indicators'] = 'Indicadores';
$string['indicators_help'] = 'Los indicadores son lo que cree que conducirán a una predicción precisa del objetivo.';
$string['indicatorsnum'] = 'Número de indicadores: {$a}';
$string['info'] = 'Información';
$string['insights'] = 'Intuiciones (predicciones)';
$string['insightsreport'] = 'Informe de Insights';
$string['invalidanalysables'] = 'Elementos del sitio inválidos';
$string['invalidanalysablesinfo'] = 'Esta página lista los elementos analizables del sitio que no pueden ser usados por este modelo de predicción. Los elementos listados no pueden ser usados ni para entrenar el modelo de predicción ni tampoco para que el modelo de predicción pueda obtener predicciones para ellos.';
$string['invalidanalysablestable'] = 'Tabla inválida de elementos analizables del sitio';
$string['invalidcurrenttimesplitting'] = 'El intervalo de análisis actual no es válido para el objetivo de este modelo. Por favor seleccione un intervalo diferente.';
$string['invalidindicatorsremoved'] = 'e ha agregado un nuevo modelo. Los indicadores que no funcionan con el objetivo seleccionado se han eliminado automáticamente.';
$string['invalidprediction'] = 'Inválido para obtener predicciones';
$string['invalidtimesplitting'] = 'El intervalo de análisis seleccionado no es válido para el objetivo seleccionado.';
$string['invalidtimesplittinginmodels'] = 'El intervalo de análisis utilizado por algunos de los modelos no es válido. Seleccione un intervalo diferente para los siguientes modelos: {$a}';
$string['invalidtraining'] = 'Inválido para entrenar el modelo';
$string['loginfo'] = 'Bitácora de información extra';
$string['missingmoodleversion'] = 'El archivo importado no define un número de versión';
$string['modelid'] = 'ID del modelo';
$string['modelinvalidanalysables'] = 'Elemento analizable inválido para el modelo "{$a}"';
$string['modelname'] = 'Nombre del modelo';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'Intervalo del Análisis';
$string['newmodel'] = 'Nuevo modelo';
$string['nextpage'] = 'Página siguiente';
$string['noactionsfound'] = 'Los usuarios no han ejecutado ninguna acción en las predicciones generadas.';
$string['nodatatoevaluate'] = 'No hay datos para evaluar el modelo';
$string['nodatatopredict'] = 'No hay elementos nuevos para los cuales obtener predicción.';
$string['nodatatotrain'] = 'No hay datos nuevos que puedan usarse para entrenamiento.';
$string['noinvalidanalysables'] = 'Este sitio no contiene ningún elemento analizable inválido.';
$string['notdefined'] = 'Todavía no definido';
$string['pluginname'] = 'Modelos analíticos';
$string['predictionprocessfinished'] = 'Proceso de predicción finalizado';
$string['predictionresults'] = 'Resultados de predicción';
$string['predictmodels'] = 'Modelos de predicción';
$string['predictorresultsin'] = 'El predictor guardó la bitácora información en el directorio {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata'] = 'El complemento de modelos analíticos no almacena ningún dato personal.';
$string['restoredefault'] = 'Restaurar modelos predeterminados';
$string['restoredefaultempty'] = 'Por favor seleccione modelos para restaurar.';
$string['restoredefaultinfo'] = 'Faltan estos modelos predeterminados o han cambiado desde su instalación. Puede restaurar los modelos predeterminados seleccionados.';
$string['restoredefaultnone'] = 'Se han creado todos los modelos predeterminados proporcionados por los el núcleo y los complementos  instalados. No se encontraron nuevos modelos; no hay nada que restaurar.';
$string['restoredefaultsome'] = 'Se recrearon con éxito los nuevos modelos {$a->count}.';
$string['restoredefaultsubmit'] = 'Restaurar seleccionado';
$string['sameenddate'] = 'La fecha de terminación actual es buena';
$string['samestartdate'] = 'La fecha de inicio actual es buena';
$string['scheduledanalysisresults'] = 'Resultados usando {$a->name} para división de la duración del tiempo';
$string['scheduledanalysisresultscli'] = 'Resultados usando la división de tiempo del curso {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Seleccione el intervalo de análisis que desea usar para evaluar la configuración del modelo.';
$string['target'] = 'Objetivo';
$string['target_help'] = 'El objetivo es lo que predecirá el modelo.';
$string['timesplittingnotdefined'] = 'No se ha definido el intervalo de análisis.';
$string['timesplittingnotdefined_help'] = 'Necesita seleccionar un intervalo de análisis antes de antes de habilitar el modelo.';
$string['trainandpredictmodel'] = 'Entrenando modelo y calculando predicciones';
$string['trainingprocessfinished'] = 'Proceso de entrenamiento terminado';
$string['trainingresults'] = 'Resultados del entrenamiento';
$string['trainmodels'] = 'Entrenar modelos';
$string['versionnotsame'] = 'El archivo importado corresponde a una versión diferente  ({$a->importedversion}) que la actual ({$a->version})';
$string['viewlog'] = 'Registro de evaluación';
$string['weeksenddateautomaticallyset'] = 'Fecha de terminación calculada automáticamente basada en la fecha de inicio y el número de secciones';
$string['weeksenddatedefault'] = 'Fecha de terminación calculada automáticamente a partir de la fecha de inicio del curso.';
