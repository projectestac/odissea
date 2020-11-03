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
 * Strings for component 'analytics', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analizable {$a->analysableid} no usado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analizable {$a->analysableid} no es válido para este destino: {$a->result}';
$string['analysisinprogress'] = 'Todavía está siendo analizado por una ejecución previa';
$string['analytics'] = 'Analítica';
$string['analyticslogstore'] = 'Almacén de bitácora usado para analítica';
$string['analyticslogstore_help'] = 'El almacén de bitácora que será usado para la API de analítica para leer la actividad de los usuarios';
$string['analyticssettings'] = 'Configuraciones de Analítica';
$string['analyticssiteinfo'] = 'Información del sitio';
$string['defaultpredictionsprocessor'] = 'Procesador de predicciones por defecto';
$string['defaultpredictoroption'] = 'Procesador por defecto ({$a})';
$string['disabledmodel'] = 'Modelo deshabilitado';
$string['erroralreadypredict'] = 'El archivo {$a} ya ha sido usado para generar predicciones.';
$string['errorcannotreaddataset'] = 'El archivo de datos {$a} no puede leerse';
$string['errorcannotwritedataset'] = 'El archivo de datos {$a} no puede escribirse';
$string['errorexportmodelresult'] = 'El modelo de aprendizaje de máquina no puede ser exportado.';
$string['errorimport'] = 'Error al importar el archivo JSON proporcionado.';
$string['errorimportmissingclasses'] = 'Los siguientes componentes analíticos no están disponibles en este sitio: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'El modelo proporcionado necesita que sean instalados los siguientes plugins: {$a}. Tenga en cuenta que las versiones no necesitan forzosamente coincidir con las versiones instaladas en su sitio. Instalar la misma versión o una versión más nueva del plugin debería de ser suficiente en la mayoría de los casos.';
$string['errorimportversionmismatches'] = 'La versión de los siguientes componentes difiere de la versión instalada en este sitio: {$a}. Puede usar la opción "Ignorar discrepancias de versiones" para ignorar estas diferencias.';
$string['errorinvalidindicator'] = 'Indicador {$a} inválido';
$string['errorinvalidtarget'] = 'Objetivo {$a} inválido';
$string['errorinvalidtimesplitting'] = 'División del tiempo inválida; por favor asegúrese de que añadió el nombre de clase completamente calificado.';
$string['errornoexportconfig'] = 'Hubo un  problema al exportar la configuración del modelo.';
$string['errornoindicators'] = 'Este modelo no tiene ningun indicador.';
$string['errornopredictresults'] = 'No se obtuvieron resultados del procesador de predicciones. Revise los contenidos del directorio de salida para más información.';
$string['errornoroles'] = 'No se han definido roles de estudiante o profesor. Defínalos en la página de configuraciones de analítica.';
$string['errornotarget'] = 'Este modelo no tiene ningún destino.';
$string['errornotimesplittings'] = 'Este modelo no tiene ningún método de división del tiempo.';
$string['errorpredictioncontextnotavailable'] = 'Este contexto de predicción ya no está disponible.';
$string['errorpredictionformat'] = 'Formato de cálculos de predicción equivocado';
$string['errorpredictionnotfound'] = 'Predicción no encontrada';
$string['errorpredictionsprocessor'] = 'Error de procesador de predicciones: {$a}';
$string['errorpredictwrongformat'] = 'El resultado del procesador de predicciones no pudo ser decodificado: "{$a}"';
$string['errorprocessornotready'] = 'El procesador de predicciones seleccionado no está listo: {$a}';
$string['errorsamplenotavailable'] = 'La muestra predecida ya no está disponible';
$string['errorunexistingmodel'] = 'Modelo inexistente {$a}';
$string['errorunexistingtimesplitting'] = 'El método de división del tiempo seleccionado no está disponible.';
$string['errorunknownaction'] = 'Acción desconocida';
$string['eventinsightsviewed'] = 'Intuiciones (predicciones) vistas';
$string['eventpredictionactionstarted'] = 'Proceso de predicción iniciado';
$string['fixedack'] = 'Admitido';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'El sistema generó una predicción para usted.';
$string['insightinfomessageplain'] = 'El sistema generó algunas ideas para usted: {$a}';
$string['insightmessagesubject'] = 'Nueva predicción para "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'No puede ser analizado usando el método  {$a} para división del tiempo.';
$string['invalidtimesplitting'] = 'El modelo con ID {$a} necesita un método de división del tiempo antes de que pueda ser usado para entrenar.';
$string['levelinstitution'] = 'Nivel educativo';
$string['levelinstitutionisced0'] = 'Educación infantil temprana (\'menos que primaria\' para logro educativo)';
$string['levelinstitutionisced1'] = 'Educación primaria';
$string['levelinstitutionisced2'] = 'Educación secundaria';
$string['levelinstitutionisced3'] = 'Educación de bachillerato';
$string['levelinstitutionisced4'] = 'Educación post-bachillerato no universitaria (puede incluir entrenamiento corporativo o comunitario/ONGs)';
$string['levelinstitutionisced5'] = 'Educación post-bachillerato de ciclo corto  (puede incluir entrenamiento corporativo o comunitario/ONGs)';
$string['levelinstitutionisced6'] = 'Licenciatura o nivel equivalente';
$string['levelinstitutionisced7'] = 'Maestría o nivel equivalente';
$string['levelinstitutionisced8'] = 'Doctorado o nivel equivalente';
$string['modeinstruction'] = 'Modos de instrucción';
$string['modeinstructionblendedhybrid'] = 'Mezclado o híbrido';
$string['modeinstructionfacetoface'] = 'Cara a Cara';
$string['modeinstructionfullyonline'] = 'Completamente en línea';
$string['modeloutputdir'] = 'Directorio de salida del modelo';
$string['modeloutputdirinfo'] = 'Directorio en donde los procesadores de predicción guardan toda la información de la evaluación. Útil para depuración y desarrollo.';
$string['modeltimelimit'] = 'Límite de tiempo de análisis por modelo';
$string['modeltimelimitinfo'] = 'Esta configuración limita el tiempo que cada modelo gasta analizando los contenidos del sitio.';
$string['nocourses'] = 'Sin cursos para analizar';
$string['nodata'] = 'Sin datos para analizar';
$string['noevaluationbasedassumptions'] = 'Los modelos baados en suposiciones no pueden ser evaluados.';
$string['noinsights'] = 'Sin intuiciones reportadas';
$string['noinsightsmodel'] = 'Este modelo no genera intuiciones';
$string['nonewdata'] = 'Sin nuevos datos disponibles';
$string['nonewranges'] = 'Todavía sin nuevas predicciones';
$string['nopredictionsyet'] = 'Todavía sin predicciones disponibles';
$string['noranges'] = 'Todavía sin predicciones';
$string['notrainingbasedassumptions'] = 'Los modelos basados en suposiciones no necesitan entrenamiento';
$string['notuseful'] = 'No útil';
$string['novaliddata'] = 'Sin datos válidos disponibles';
$string['novalidsamples'] = 'Sin muestras válidas disponibles';
$string['onlycli'] = 'Ejecución de los procesos de Analítica solamente vía línea de comando';
$string['onlycliinfo'] = 'Los procesos de Analítica, al igual que los modelos evaluativos, los algoritmos para entrenar aprendizaje de máquinas, o la obtención de predicciones, pueden tomar algun tiempo. Se ejecutarán como tareas del cron y pueden ser forzados mediante la línea de comandos. Deshabilite esta configuración si quiere que los administradores del sitio puedan ejecutar estos procesos manualmente mediante la interfaz web';
$string['percentonline'] = 'Porcentaje en línea';
$string['percentonline_help'] = 'Si su institución ofrece cursos mezclados o híbridos, ¿qué porcentaje del trabajo del estudiante es realizado en línea en Moodle? Introduzca un número entre 0 y 100.';
$string['predictionsprocessor'] = 'Procesador de predicciones';
$string['predictionsprocessor_help'] = 'Un procesador de predicción es el \'backend\' de aprendizaje de la máquina que procesa los conjuntos de datos generados por indicadores y objetivos de los modelos de cálculo. Todas las predicciones y algoritmos entrenados serán eliminados si usted cambia a otro procesador de predicciones.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Cálculos del indicador';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'El contexto';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Tiempo de fin del cálculo';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'La clase del calculador indicador';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'El ID de la muestra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'La tabla de origen de la muestra';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Tiempo de inicio del cálculo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Cuando fue realizada la predicción';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'El valor calculado';
$string['privacy:metadata:analytics:predictionactions'] = 'Acciones de predicción';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'El nombre de la acción';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'El ID de la predicción';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Cuando la predicción fue realizada';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'El usuario que ha realizado la acción';
$string['privacy:metadata:analytics:predictions'] = 'Predicciones';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos del indicador';
$string['privacy:metadata:analytics:predictions:contextid'] = 'El contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'El ID del modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'La predicción';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'La puntuación de la predicción';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'El índice del método para dividir el tiempo';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'El ID de la muestra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Cuando la predicción fue hecha';
$string['privacy:metadata:analytics:predictions:timeend'] = 'La hora de terminación de los cálculos';
$string['privacy:metadata:analytics:predictions:timestart'] = 'La hora de inicio de los cálculos';
$string['processingsitecontents'] = 'Procesando contenidos del sitio';
$string['successfullyanalysed'] = 'Analizado exitosamente';
$string['timesplittingmethod'] = 'Método para división del tiempo';
$string['timesplittingmethod_help'] = 'El método para dividir el tiempo divide la duración del curso en partes; el motor de predicciones se ejecutará al final de estas partes. Se recomienda que solamente habilite los métodos para dividir el tiempo que usted podría estar interesado en usar. El proceso de evaluación hará iteraciones a todos los métodos de división del tiempo habilitados, por lo que cuantos más métodos estén habilitados para dividir el tiempo, más lento será el proceso de evaluación.';
$string['typeinstitution'] = 'Tipo de institución';
$string['typeinstitutionacademic'] = 'Académica';
$string['typeinstitutionngo'] = 'Organización No Gubernamental (ONG)';
$string['typeinstitutiontraining'] = 'Entrenamiento corporativo';
$string['viewdetails'] = 'Ver detalles';
$string['viewinsight'] = 'Ver predicción';
$string['viewinsightdetails'] = 'Ver detalles de predicción';
$string['viewprediction'] = 'Ver detalles de predicción';
