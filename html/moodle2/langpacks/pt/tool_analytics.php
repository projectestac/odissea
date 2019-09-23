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
 * Strings for component 'tool_analytics', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisão';
$string['allpredictions'] = 'Todas as previsões';
$string['analysingsitedata'] = 'A analisar o site';
$string['analyticmodels'] = 'Modelos de análise';
$string['bettercli'] = 'Avaliar modelos e gerar previsões pode envolver um processamento intenso. É recomendável executar essas ações a partir da linha de comando.';
$string['cantguessenddate'] = 'Não é possível prever a data de fim';
$string['cantguessstartdate'] = 'Não é possível determinar a data de inicio';
$string['clearmodelpredictions'] = 'Tem a certeza de que pretende limpar todas as previsões para "{$a}"?';
$string['clearpredictions'] = 'Limpar previsões';
$string['clienablemodel'] = 'Pode ativar o modelo selecionando um método de divisão de tempo através do ID. Tenha em atenção que também pode ativá-lo depois usando a interface da web (\'Nenhum\' para sair).';
$string['clievaluationandpredictions'] = 'Uma tarefa agendada interage através de modelos ativos e obtém previsões. A avaliação de modelos através da interface web está desativada. Pode permitir que estes processos sejam executados manualmente através da interface Web desativando a <a href="{$a}">\'onlycli\'</a> a configuração da análise.';
$string['clievaluationandpredictionsnoadmin'] = 'Uma tarefa agendada interage através de modelos ativos e obtém previsões. A avaliação de modelos através da interface web está desativada. Pode ser ativada por um administrador do site.';
$string['disabled'] = 'Desativado';
$string['editmodel'] = 'Editar modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo já foi treinado. Tenha em atenção que alterar os indicadores ou o método de divisão de tempo eliminará as previsões anteriores e irá a gerar novas previsões.';
$string['enabled'] = 'Ativado';
$string['errorcantenablenotimesplitting'] = 'Tem de selecionar um método de divisão de tempo antes de ativar o modelo.';
$string['errornoenabledandtrainedmodels'] = 'Não existem modelos ativos e treinados para prever.';
$string['errornoenabledmodels'] = 'Não existem modelos ativos para treinar.';
$string['errornoexport'] = 'Apenas os modelos já treinados podem ser exportados';
$string['errornostaticedit'] = 'Modelos baseados em suposições não podem ser editados.';
$string['errornostaticevaluated'] = 'Modelos baseados em suposições não podem ser avaliados. Eles são sempre 100% corretos de acordo com a forma como foram definidos.';
$string['errornostaticlog'] = 'Os modelos baseados em suposições não podem ser avaliados porque não há registo de desempenho.';
$string['erroronlycli'] = 'Execução apenas permitida via linha de comando';
$string['errortrainingdataexport'] = 'Os dados do modelo de treino não podem ser exportados';
$string['evaluate'] = 'Avaliação';
$string['evaluatemodel'] = 'Modelo de avaliação';
$string['evaluationinbatches'] = 'O conteúdo do site é calculado e armazenado em lotes. O processo de avaliação pode ser interrompido a qualquer momento. Na próxima vez que for executado, continuará a partir do ponto em que foi interrompido.';
$string['export'] = 'Exportar';
$string['exporttrainingdata'] = 'Exportar dados do treino';
$string['extrainfo'] = 'Informação';
$string['generalerror'] = 'Erro na avaliação. Código de estado {$a}';
$string['getpredictions'] = 'Obter previsões';
$string['getpredictionsresults'] = 'Resultados ao usar \'{$a->name}\' como divisão da duração da disciplina';
$string['getpredictionsresultscli'] = 'Resultados ao usar \'{$a->name}\' (id: {$a->id}) como divisão da duração da disciplina';
$string['goodmodel'] = 'Este é um bom modelo para obter previsões. Ative-o para começar a obter previsões.';
$string['indicators'] = 'Indicadores';
$string['info'] = 'Informação';
$string['insights'] = 'Percepções';
$string['invalidanalysables'] = 'Elementos inválidos';
$string['invalidanalysablesinfo'] = 'Esta página mostra elementos analisáveis que não podem ser usados por este modelo de previsão. Os elementos listados não podem ser usados para treinar o modelo de previsão nem o modelo de previsão pode obter previsões para eles.';
$string['invalidanalysablestable'] = 'Tabela de elementos analisáveis inválidos do site';
$string['invalidprediction'] = 'Inválido para obter previsões';
$string['invalidtraining'] = 'Inválido para treinar o modelo';
$string['loginfo'] = 'Informações extras do registo';
$string['modelid'] = 'ID do modelo';
$string['modelinvalidanalysables'] = 'Elementos analisáveis inválidos para o modelo "{$a}"';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'Divisão de tempo';
$string['nextpage'] = 'Página seguinte';
$string['nodatatoevaluate'] = 'Não existem dados para avaliar o modelo';
$string['nodatatopredict'] = 'Não existem novos elementos sem previsões';
$string['nodatatotrain'] = 'Não existem dados novos que possam ser usados para treinar';
$string['noinvalidanalysables'] = 'Este site não contém qualquer elemento analisável inválido.';
$string['notdefined'] = 'Ainda não definido';
$string['pluginname'] = 'Modelos de análise';
$string['predictionprocessfinished'] = 'Processo de obtenção de previsões finalizado';
$string['predictionresults'] = 'Resultados da previsão';
$string['predictmodels'] = 'Modelos de previsão';
$string['predictorresultsin'] = 'As previsões registaram informações na diretoria {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata'] = 'O módulo Modelos analíticos não armazena dados pessoais.';
$string['sameenddate'] = 'A data de fim atual é aceitável';
$string['samestartdate'] = 'A data de início atual é aceitável';
$string['target'] = 'Alvo';
$string['timesplittingnotdefined'] = 'Divisão de tempo não está definida';
$string['timesplittingnotdefined_help'] = 'Selecione um método de divisão de tempo antes de ativar o modelo.';
$string['trainandpredictmodel'] = 'A experimentar o modelo e a calcular previsões';
$string['trainingprocessfinished'] = 'Processo de treino finalizado';
$string['trainingresults'] = 'Resultados do treino';
$string['trainmodels'] = 'Modelos de treino';
$string['viewlog'] = 'Registo';
$string['weeksenddateautomaticallyset'] = 'Data de fim definida automaticamente com base na data de início e no número de seções';
$string['weeksenddatedefault'] = 'Data de fim calculada automaticamente a partir da data de início da disciplina.';
