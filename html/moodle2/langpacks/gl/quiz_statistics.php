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
 * Strings for component 'quiz_statistics', language 'gl', branch 'MOODLE_28_STABLE'
 *
 * @package   quiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Resposta actual';
$string['allattempts'] = 'todos os intentos';
$string['allattemptsavg'] = 'Cualificación media de todos os intentos';
$string['allattemptscount'] = 'Número total de intentos completos cualificados';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variante {$a->variant}';
$string['analysisofresponses'] = 'Análise das respostas';
$string['analysisofresponsesfor'] = 'Análise das respostas para {$a}.';
$string['analysisvariant'] = '"{$a->name}" variante {$a->variant}';
$string['attempts'] = 'Intento';
$string['attemptsall'] = 'todos os intentos';
$string['attemptsfirst'] = 'primeiro intento';
$string['backtoquizreport'] = 'Volver á páxina principal do informe de estatísticas.';
$string['calculatefrom'] = 'Calcular as estatísticas de';
$string['calculatingallstats'] = 'Calculando as estatísticas para as probas, preguntas e análise de datos de respostas';
$string['cic'] = 'Coeficiente de consistencia interna (para {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Cantidade';
$string['counttryno'] = 'Número de intentos {$a}';
$string['coursename'] = 'Nome do curso';
$string['detailedanalysis'] = 'Análise máis detallada das respostas a esta pregunta';
$string['detailedanalysisforvariant'] = 'Análise máis detallada das respostas á variante {$a} desta pregunta';
$string['discrimination_index'] = 'Índice de discriminación';
$string['discriminative_efficiency'] = 'Eficiencia discriminatoria';
$string['downloadeverything'] = 'Descargar o informe completo como {$a->formatsmenu} {$a->downloadbutton}';
$string['duration'] = 'Aberto para';
$string['effective_weight'] = 'Ponderación efectiva';
$string['errordeleting'] = 'Produciuse un erro ao borrar {$a} rexistros antigos.';
$string['errormedian'] = 'Produciuse un erro ao obter a media';
$string['errorpowerquestions'] = 'Produciuse un erro ao obter os datos para calcular a varianza para a cualificación de preguntas';
$string['errorpowers'] = 'Produciuse un erro ao opbter os datos para calcular a varianza para a cualificación de probas';
$string['errorrandom'] = 'Produciuse un erro ao obter os datos do sub elemento';
$string['errorratio'] = 'Taxa de erro (para {$a})';
$string['errorstatisticsquestions'] = 'Produciuse un erro ao obter os datos para calcular estatísticas para a cualificación de preguntas';
$string['facility'] = 'Índice de facilidade';
$string['firstattempts'] = 'primeiros intentos';
$string['firstattemptsavg'] = 'Cualificación media dos primeiros intentos';
$string['firstattemptscount'] = 'Número de primeiros intentos completos cualificados';
$string['frequency'] = 'Frecuencia';
$string['highestattempts'] = 'intento con máxima calificación';
$string['highestattemptsavg'] = 'Cualificación media dos intentos con mellores cualificacións';
$string['intended_weight'] = 'Ponderación desexada';
$string['kurtosis'] = 'Curtose da distribución de puntuacións (para {$a})';
$string['lastattempts'] = 'último intento';
$string['lastattemptsavg'] = 'Cualificación media dos últimos intentos';
$string['lastcalculated'] = 'O último cálculo foi vai  {$a->lastcalculated} e desde aquela fixeronse {$a->count} intentos.';
$string['maximumfacility'] = 'Facilidade máxima';
$string['median'] = 'Mediana de cualificación (de {$a})';
$string['medianfacility'] = 'Facilidade media';
$string['minimumfacility'] = 'Facilidade mínima';
$string['modelresponse'] = 'Resposta modelo';
$string['nameforvariant'] = 'Variante {$a->variant} de {$a->name}';
$string['negcovar'] = 'Covarianza negativa desta cualificación coa cualificación total do intento';
$string['negcovar_help'] = 'A cualificación da pregunta para este conxunto de intentos varía en forma inversa á cualificación media. Isto significa que a cualificación xeral tende a estar por baixo da media cando a cualificación para esta pregunta está por riba da media e viceversa.

A nosa ecuación para a ponderación efectiva da pregunta non pode calcularse neste caso. Os cálculos para a ponderación efectiva da pregunta para as outras preguntas desta proba son a ponderación efectiva da pregunta se as preguntas resaltadas cunha covarianza negativa teñen unha cualificación máxima de cero.

Se edita unha proba e ponlle a esta(s) pregunta(s) con covarianza negativa unha cualificación máxima de cero, entón  a ponderación efectiva destas preguntas será cero e a ponderación efectiva real da pregunta será como se calcule agora.';
$string['nostudentsingroup'] = 'Aínda non hai alumnos neste grupo';
$string['optiongrade'] = 'Crédito parcial';
$string['partofquestion'] = 'Parte da pregunta';
$string['pluginname'] = 'Estatísticas';
$string['position'] = 'Posición';
$string['positions'] = 'Posición(s)';
$string['questioninformation'] = 'Información da pregunta';
$string['questionname'] = 'Nome da pregunta';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'Estatísticas da pregunta';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Tipo de pregunta';
$string['quizinformation'] = 'Información da proba';
$string['quizname'] = 'Nome da proba';
$string['quizoverallstatistics'] = 'Estatísticas xerais da proba';
$string['quizstructureanalysis'] = 'Análise da estrutura da proba';
$string['random_guess_score'] = 'Cualificación estimada ao chou';
$string['recalculatenow'] = 'Recalcular agora';
$string['reportsettings'] = 'Configuracións de cálculos estatdísticos';
$string['response'] = 'Resposta';
$string['skewness'] = 'Asimetría da distribución de puntuacións (para {$a})';
$string['slotstructureanalysis'] = 'Análise estrutural para a pregunta número {$a}';
$string['standarddeviation'] = 'Desviación tipo (para {$a})';
$string['standarddeviationq'] = 'Desviación tipo';
$string['standarderror'] = 'Erro estándar (para {$a})';
$string['statistics'] = 'Estatísticas';
$string['statistics:componentname'] = 'Informe estatístico da proba';
$string['statisticsreport'] = 'Informe estatístico';
$string['statisticsreportgraph'] = 'Estatísticas para posicións de pregunta';
$string['statistics:view'] = 'Ver informe estatístico';
$string['statsfor'] = 'Estatísticas da proba (para {$a})';
$string['variant'] = 'Variante';
$string['whichtries'] = 'Analizar respostas para';
