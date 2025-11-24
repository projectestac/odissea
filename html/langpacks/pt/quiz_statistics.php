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
 * Strings for component 'quiz_statistics', language 'pt', version '4.5'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Resposta atual';
$string['allattempts'] = 'todas as tentativas';
$string['allattemptsavg'] = 'Nota média de todas as tentativas';
$string['allattemptscount'] = 'Número de tentativas terminadas e avaliadas';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variante {$a->variant}';
$string['analysisofresponses'] = 'Análise de respostas';
$string['analysisofresponsesfor'] = 'Análise de respostas para {$a}';
$string['analysisvariant'] = '"{$a->name}" variante {$a->variant}';
$string['attempts'] = 'Tentativas';
$string['attemptsall'] = 'todas as tentativas';
$string['attemptsfirst'] = 'primeira tentativa';
$string['backtoquizreport'] = 'Voltar à página principal do relatório de estatísticas.';
$string['calculatefrom'] = 'Calcular estatísticas a partir de';
$string['calculatingallstats'] = 'A calcular estatísticas para o teste, perguntas e análise de dados de resposta';
$string['cic'] = 'Coeficiente de consistência interna (para {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Contagem';
$string['counttryno'] = 'Contagem de tentativas {$a}';
$string['coursename'] = 'Nome da disciplina';
$string['detailedanalysis'] = 'Análise mais detalhada das respostas a esta pergunta';
$string['detailedanalysisforvariant'] = 'Análises mais detalhadas das respostas à variante {$a} desta questão';
$string['discrimination_index'] = 'Índice de Discriminação';
$string['discriminative_efficiency'] = 'Eficiência discriminante';
$string['downloadeverything'] = 'Descarregar relatórios completos como';
$string['duration'] = 'Aberto para';
$string['effective_weight'] = 'Peso efetivo';
$string['errordeleting'] = 'Erro ao apagar registos antigos {$a}';
$string['errormedian'] = 'Ocorreu um erro ao calcular a mediana';
$string['errorpowerquestions'] = 'Ocorreu um erro ao tentar obter os dados para calcular a variância das notas da pergunta';
$string['errorpowers'] = 'Ocorreu um erro ao tentar obter os dados para calcular a variância das notas do teste';
$string['errorrandom'] = 'Ocorreu um erro ao obter dados dos sub itens';
$string['errorratio'] = 'Ocorreu um erro no rácio (em {$a})';
$string['errorstatisticsquestions'] = 'Ocorreu um erro ao tentar obter os dados para calcular as estatísticas das notas da pergunta';
$string['facility'] = 'Índice de Facilidade';
$string['firstattempts'] = 'primeiras tentativas';
$string['firstattemptsavg'] = 'Nota média das primeiras tentativas';
$string['firstattemptscount'] = 'Número de primeiras tentativas terminadas e avaliadas';
$string['frequency'] = 'Frequência';
$string['getstatslockprogress'] = 'A aguardar tarefa em execução. Aguarde ou tente novamente mais tarde.';
$string['getstatslocktimeout'] = 'Tempo limite de bloqueio do cálculo das estatísticas';
$string['getstatslocktimeoutdesc'] = 'Quantos segundos deve esperar antes de bloquear quando tenta realizar cálculo das estatísticas de um teste. Esta configuração existe principalmente para ensaios, não a modifique a menos que saiba o que está a fazer.';
$string['highestattempts'] = 'nota mais alta';
$string['highestattemptsavg'] = 'nota média das notas mais altas';
$string['intended_weight'] = 'Peso pretendido';
$string['kurtosis'] = 'Kurtosis da distribuição da pontuação (para {$a})';
$string['lastattempts'] = 'última tentativa';
$string['lastattemptsavg'] = 'nota média das últimas tentativas';
$string['lastcalculated'] = 'Foram realizadas {$a->count} tentativas desde o último cálculo há {$a->lastcalculated}.';
$string['maximumfacility'] = 'Facilidade máxima';
$string['median'] = 'Mediana da Nota (para {$a})';
$string['medianfacility'] = 'Facilidade média';
$string['minimumfacility'] = 'Facilidade mínima';
$string['modelresponse'] = 'Modelo de resposta';
$string['nameforvariant'] = 'Variante {$a->variant} de {$a->name}';
$string['negcovar'] = 'Covariância negativa da nota com a nota total da tentativa';
$string['negcovar_help'] = 'A nota desta pergunta para este conjunto de tentativas no teste varia de forma oposta à nota global da tentativa. Isto significa que a nota global da tentativa tende a estar abaixo da média quando a nota para esta pergunta está acima da média e vice-versa.

A nossa equação para o peso efetivo da pergunta não pode ser calculada neste caso. Os cálculos do peso efetivo para as outras perguntas deste teste são o peso efetivo para estas perguntas se for atribuído uma nota máxima de zero às perguntas assinaladas com covariância negativa.

Se editar um teste e atribuir a estas perguntas com covariância negativa a nota máxima de zero, o peso efetivo destas perguntas será zero e o peso real efetivo das outras perguntas será como o calculado agora.';
$string['nogradedattempts'] = 'Não existem tentativas de resposta a este teste, ou em todas as tentativas existem perguntas que precisam de avaliação manual.';
$string['nostats'] = 'Não foi possível concluir o cálculo das estatísticas. Pode haver um cálculo de longa duração em execução. Por favor, tente novamente mais tarde.';
$string['nostudentsingroup'] = 'Ainda não existem alunos neste grupo';
$string['optiongrade'] = 'Crédito parcial';
$string['partofquestion'] = 'Parte da pergunta';
$string['pluginname'] = 'Estatísticas';
$string['position'] = 'Posição';
$string['positions'] = 'Posição(ões)';
$string['privacy:metadata'] = 'Apesar do módulo Estatísticas do teste ter tabelas na base de dados, os dados são dados agregados e não descrevem um individuo único.';
$string['questioninformation'] = 'Informação da pergunta';
$string['questionname'] = 'Nome da pergunta';
$string['questionnumber'] = 'P#';
$string['questionstatistics'] = 'Estatísticas da pergunta';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Tipo de pergunta';
$string['quizinformation'] = 'Informação do teste';
$string['quizname'] = 'Nome do teste';
$string['quizoverallstatistics'] = 'Estatísticas globais do teste';
$string['quizstructureanalysis'] = 'Análise da estrutura do teste';
$string['random_guess_score'] = 'Pontuação de resposta aleatória';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Intervalo de estatísticas para estas perguntas';
$string['recalculatenow'] = 'Reavaliar agora';
$string['recalculatetask'] = 'Recalcular as estatísticas da pergunta';
$string['reportsettings'] = 'Configurações de cálculo das estatísticas';
$string['response'] = 'Resposta';
$string['skewness'] = 'Skewness da distribuição da pontuação (para {$a})';
$string['slotstructureanalysis'] = 'Análise estrutural para a questão número {$a}';
$string['standarddeviation'] = 'Desvio Padrão (para {$a})';
$string['standarddeviationq'] = 'Desvio Padrão';
$string['standarderror'] = 'Erro padrão (para {$a})';
$string['statistics'] = 'Estatísticas';
$string['statistics:view'] = 'Ver relatório de estatísticas';
$string['statisticsreport'] = 'Relatório de estatísticas';
$string['statisticsreportgraph'] = 'Estatística para as posições da pergunta';
$string['statsfor'] = 'Estatísticas do teste (para {$a})';
$string['variant'] = 'Variante';
$string['viewanalysis'] = 'Ver detalhes';
$string['whichtries'] = 'Analisar as respostas para';
