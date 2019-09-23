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
 * Strings for component 'analytics', language 'gl', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analizábel {$a->analysableid} non usado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analizábel {$a->analysableid} non é válido para este destino: {$a->result}';
$string['analysisinprogress'] = 'Aínda está a ser analizado por unha execución previa';
$string['analytics'] = 'Analítica';
$string['analyticslogstore'] = 'Almacén de rexistros utilizada para a análise';
$string['analyticslogstore_help'] = 'O almacén de rexistros que utilizará a API de análise para ler a actividade dos usuarios';
$string['analyticssettings'] = 'Axustes do analítica';
$string['coursetoolong'] = 'O curso é longo de máis';
$string['defaultpredictionsprocessor'] = 'Procesador de predicións predeterminado';
$string['defaultpredictoroption'] = 'Procesador predeterminado ({$a})';
$string['disabledmodel'] = 'Modelo desactivado';
$string['enabledtimesplittings'] = 'Métodos para dividir o tempo';
$string['erroralreadypredict'] = 'O ficheiro {$ a} xa foi usado para xerar predicións.';
$string['errorcannotreaddataset'] = 'Non é posíbel ler o ficheiro de conxunto de datos {$a}';
$string['errorcannotwritedataset'] = 'Non é posíbel escribir no ficheiro de conxunto de datos {$a}';
$string['errorendbeforestart'] = 'A data de finalización ({$a}) é anterior á data de inicio do curso.';
$string['errorinvalidindicator'] = 'Indicador non válido de {$a}';
$string['errorinvalidtimesplitting'] = 'División de tempo incorrecta; asegúrese de engadir o nome de clase completamente cualificado.';
$string['errornoindicators'] = 'Este modelo non ten ningún indicador.';
$string['errornopredictresults'] = 'Non se devolveu ningún resultado do procesador de predicións. Verifique os contidos do directorio de saída para obter máis información.';
$string['errornoroles'] = 'Non se definiron os roles do alumno ou do profesor. Defínaos na páxina de axustes da análise.';
$string['errornotarget'] = 'Este modelo non ten ningún destino.';
$string['errornotimesplittings'] = 'Este modelo non ten ningún método de división de tempo.';
$string['errorpredictioncontextnotavailable'] = 'Este contexto de predición xa non está dispoñíbel.';
$string['errorpredictionformat'] = 'Formato de cálculos de predición trabucado';
$string['errorpredictionnotfound'] = 'Non se atopou a predición';
$string['errorpredictionsprocessor'] = 'Produciuse un erro do procesador de predicións: {$a}';
$string['errorpredictwrongformat'] = 'Non é posíbel descodificar a devolución do procesador de predicións: «{$a}»';
$string['errorprocessornotready'] = 'O procesador de predicións seleccionado non está preparado: {$a}';
$string['errorsamplenotavailable'] = 'A mostra predita xa non está dispoñíbel';
$string['errorunexistingmodel'] = 'Modelo inexistente {$a}';
$string['errorunexistingtimesplitting'] = 'O método de división de tempo seleccionado non está dispoñíbel.';
$string['errorunknownaction'] = 'Acción descoñecida';
$string['eventinsightsviewed'] = 'Ideas (predicións) vistas';
$string['eventpredictionactionstarted'] = 'Comezou o proceso de predición';
$string['fixedack'] = 'Recoñecido';
$string['insightinfomessage'] = 'O sistema xerou algunhas ideas para vostede: {$a}';
$string['insightinfomessagehtml'] = 'O sistema xerou algunhas ideas para vostede: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Nova idea para «{$a->contextname}»: {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Non é posíbel analizar usando o método {$a} de dividir o tempo.';
$string['invalidtimesplitting'] = 'O modelo co ID {$a} necesita un método de división de tempo antes de que se poida empregar para adestrar.';
$string['modeloutputdir'] = 'Directorio de saída de modelos';
$string['modeloutputdirinfo'] = 'Directorio onde os procesadores de predición almacenan toda a información de avaliación. Útil para depurar e investigar.';
$string['modeltimelimit'] = 'Límite de tempo de análise por modelo';
$string['modeltimelimitinfo'] = 'Este axuste limita o tempo que cada modelo inviste analizando os contidos do sitio.';
$string['nocourses'] = 'Non hai cursos para analizar';
$string['nodata'] = 'Non hai datos para analizar';
$string['noevaluationbasedassumptions'] = 'Non é posíbel avaliar modelos baseados en suposicións.';
$string['noinsights'] = 'Non se informou ningunha idea';
$string['noinsightsmodel'] = 'Este modelo non xerou ningunha idea';
$string['nonewdata'] = 'Non hai novos datos dispoñíbeis';
$string['nonewranges'] = 'Aínda non hai novas predicións';
$string['nonewtimeranges'] = 'Non hai intervalos de tempo novos; nada para predicir.';
$string['nopredictionsyet'] = 'Aínda non hai predicións dispoñíbeis';
$string['noranges'] = 'Aínda non hai predicións';
$string['notrainingbasedassumptions'] = 'Os modelos baseados en supostos non precisan de adestramento';
$string['notuseful'] = 'Non é útil';
$string['novaliddata'] = 'Non hai datos dispoñíbeis';
$string['novalidsamples'] = 'Non hai mostras dispoñíbeis';
$string['onlycli'] = 'A análise procesa a execución só mediante a liña de ordes';
$string['onlycliinfo'] = 'Os procesos de análise como a avaliación de modelos, a formación de algoritmos de aprendizaxe de máquinas ou a obtención de predicións poden levar algún tempo, funcionarán como tarefas cron e poden ser forzados a través da liña de ordes. Desactive esta opción se quere que os xestores de sitios poidan executar estes procesos manualmente a través da interface web';
$string['predictionsprocessor'] = 'Procesador de predicións';
$string['predictionsprocessor_help'] = 'Un procesador de predicións é a infraestrutura de aprendizaxe automático que procesa os conxuntos de datos xerados polo cálculo dos indicadores e os obxectivos dos modelos. Todos os algoritmos e predicións adestrados eliminaranse se cambia a outro procesador de predicións.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Cálculos do indicador';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'O contexto';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Hora de fin do cálculo';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'A clase da calculadora de indicadores';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'O ID da mostra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'A táboa de orixe da mostra';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Hora de inicio do cálculo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Cando se realizou a predición';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'O valor calculado';
$string['privacy:metadata:analytics:predictionactions'] = 'Accións de predición';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'O nome da acción';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'O ID de predición';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Cando se realizou a acción de predición';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'O usuario que fixo a acción';
$string['privacy:metadata:analytics:predictions'] = 'Prediccións';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos do indicador';
$string['privacy:metadata:analytics:predictions:contextid'] = 'O contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'O ID do modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'A predición';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'A puntuación da predición';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'O índice do método de división de tempo';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'O ID da mostra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Cando se realizou a predición';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Hora de fin dos cálculos';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Hora de inicio dos cálculos';
$string['processingsitecontents'] = 'Procesando os contidos do sitio';
$string['successfullyanalysed'] = 'Analizado satisfactoriamente';
$string['timesplittingmethod'] = 'Método para dividir o tempo';
$string['timesplittingmethod_help'] = 'O método de dividir o tempo divide a duración do curso en partes; o motor de predicións executarase ao final destas partes. Recoméndase que active só os métodos de división de tempo que pode estar interesado en usar. O proceso de avaliación fará unha iteración a través de todos os métodos activados para dividir o tempo, de xeito que canto máis tempo estea activado para dividir, máis lento será o proceso de avaliación.';
$string['viewprediction'] = 'Ver os detalles da predición';
