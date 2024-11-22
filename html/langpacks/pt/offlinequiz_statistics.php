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
 * Strings for component 'offlinequiz_statistics', language 'pt', version '4.1'.
 *
 * @package     offlinequiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Resposta atual';
$string['allattempts'] = 'todas as tentativas';
$string['allattemptsavg'] = 'Média';
$string['allattemptscount'] = 'Total de resultados totalmente avaliados';
$string['allgroups'] = 'Todos grupos';
$string['analysisofresponses'] = 'Análise das respostas';
$string['analysisofresponsesfor'] = 'Análise das respostas para {$a}.';
$string['attempts'] = 'Tentativas';
$string['attemptsall'] = 'todas as tentativas';
$string['attemptsfirst'] = 'primeira tentativa';
$string['backtoquestionsandanswers'] = 'Voltar à página principal do relatório das estatísticas.';
$string['bestgrade'] = 'Nota mais alta';
$string['calculatefrom'] = 'Calcular estatísticas de';
$string['cic'] = 'Coeficiente de consistência interna';
$string['completestatsfilename'] = 'estatisticastotais';
$string['correct'] = 'Resposta correta';
$string['count'] = 'Contagem';
$string['coursename'] = 'Nome da disciplina';
$string['detailedanalysis'] = 'Análise mais detalhada das respostas a esta pergunta';
$string['differentquestions'] = 'Os grupos do Teste Offline têm diferentes conjuntos de perguntas.';
$string['differentsumgrades'] = 'Os grupos deste Teste Offline têm diferentes totais de notas ({$a}). Por isso, a nota média, a mediana e o desvio padrão não podem ser calculados.';
$string['discrimination_index'] = 'Índice de Discriminação';
$string['discriminative_efficiency'] = 'Eficiência discriminativa';
$string['downloadeverything'] = 'Formato do relatório completo';
$string['duration'] = 'Aberto até';
$string['effective_weight'] = 'Peso efetivo';
$string['errordeleting'] = 'Erro ao apagar {$a} registos antigos.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'A pergunta ({$a}) aparece mais do que uma vez no teste, com diferentes pesos e em diferentes posições. De momento, isto não é suportado pelo relatório das estatísticas e pode tornar as estatísticas da pergunta não confiáveis.';
$string['errormedian'] = 'Erro ao obter a mediana';
$string['errorpowerquestions'] = 'Ocorreu um erro ao obter os dados para o cálculo da variância das notas das perguntas';
$string['errorpowers'] = 'Ocorreu um erro ao obter os dados para o cálculo da variância das notas do Teste Offline';
$string['errorrandom'] = 'Erro ao obter os dados do sub-item';
$string['errorratio'] = 'Taxa de erro';
$string['errorstatisticsquestions'] = 'Ocorreu um erro ao obter os dados para cálculo das estatísticas das notas da pergunta';
$string['facility'] = 'Índice de facilidade';
$string['firstattempts'] = 'primeiras tentativas';
$string['firstattemptsavg'] = 'Nota média das primeiras tentativas';
$string['firstattemptscount'] = 'Número de primeiras tentativas avaliadas';
$string['frequency'] = 'Frequência';
$string['intended_weight'] = 'Peso previsto';
$string['kurtosis'] = 'Pontuação distribuição kurtosis';
$string['lastcalculated'] = 'Último cálculo há {$a->lastcalculated} atrás e desde então ocorreram {$a->count} tentativas ';
$string['maxgrade'] = 'Nota máxima';
$string['median'] = 'Mediana';
$string['modelresponse'] = 'Resposta modelo';
$string['negcovar'] = 'Co-variância negativa da nota com a nota da tentativa total';
$string['negcovar_help'] = 'A nota desta pergunta para este conjunto de tentativas de respostas ao Teste Offline varia de maneira oposta à nota geral da tentativa. Isto significa que a nota geral da tentativa tende a ficar abaixo da média quando a nota para esta pergunta está acima da média ou vice-versa.

A equação de cálculo do peso efetivo da pergunta não pode ser obtida neste caso. Os cálculos para o peso efetivo da pergunta para outras perguntas neste Teste Offline são o peso efetivo da pergunta para estas perguntas se as perguntas destacadas com uma co-variância negativa tiverem uma nota máxima de zero.

Se editar um Teste Offline e atribuir uma nota máxima de zero a estas perguntas uma co-variância negativa, o peso efetivo da pergunta destas perguntas será zero e o peso real efetivo da pergunta de outras perguntas será igual ao calculado agora.';
$string['nostudentsingroup'] = 'Grupo ainda sem alunos';
$string['offlinequizinformation'] = 'Informação do Teste Offline';
$string['offlinequizname'] = 'Nome do Teste Offline';
$string['offlinequizoverallstatistics'] = 'Visão global das estatísticas do Teste Offline';
$string['offlinequizstructureanalysis'] = 'Análise da estrutura do Teste Offline';
$string['optiongrade'] = 'Créditos';
$string['partially'] = 'Parcialmente correta';
$string['partofquestion'] = '#Resposta';
$string['pluginname'] = 'Estatísticas do Teste Offline';
$string['position'] = 'Posição';
$string['positions'] = 'Posições';
$string['preferencespage'] = 'Preferências para esta página apenas';
$string['preferencessave'] = 'Guardar preferências';
$string['privacy:metadata'] = 'Este módulo não armazena quaisquer dados pessoais.';
$string['questionandanswerstats'] = 'Perguntas + Respostas';
$string['questionandanswerstatsheader'] = 'Análise das perguntas e respostas';
$string['questioninformation'] = 'Informação da pergunta';
$string['questionname'] = 'Nome da pergunta';
$string['questionnumber'] = '#P';
$string['questionstatistics'] = 'Estatísticas da pergunta';
$string['questionstats'] = 'Análise da Pergunta';
$string['questionstatsfilename'] = 'estatisticaspergunta';
$string['questionstatsheader'] = 'Análise das perguntas';
$string['questiontype'] = 'Tipo de pergunta';
$string['random_guess_score'] = 'Palpite aleatório';
$string['recalculatenow'] = 'Recalcular agora';
$string['remarks'] = 'OBS';
$string['response'] = 'Resposta';
$string['skewness'] = 'Pontuação distribuição assimetria';
$string['standarddeviation'] = 'Desvio padrão';
$string['standarddeviationq'] = 'Desvio padrão';
$string['standarderror'] = 'Erro padrão';
$string['statistics'] = 'Estatísticas';
$string['statistics:componentname'] = 'Relatório das estatísticas do Teste Offline';
$string['statistics:view'] = 'Ver relatório das estatísticas';
$string['statisticsforgroup'] = 'Grupo';
$string['statisticshelp'] = 'Ajuda sobre estatísticas do Teste Offline';
$string['statisticsreport'] = 'Relatório das estatísticas';
$string['statisticsreportgraph'] = 'Estatísticas das posições da pergunta';
$string['statsfor'] = 'Estatísticas do Teste Offline ({$a})';
$string['statsoverview'] = 'Visão global';
$string['statsoverviewheader'] = 'Informação do teste';
$string['worstgrade'] = 'Nota mais baixa';
$string['wrong'] = 'Resposta incorreta';
