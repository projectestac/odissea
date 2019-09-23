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
 * Strings for component 'analytics', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analisável \'{$a->analysableid}\' não usado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analisável \'{$a->analysableid}\' não é válido para este objetivo: {$a->result}';
$string['analysisinprogress'] = 'Ainda está a ser analisado por uma execução anterior';
$string['analytics'] = 'Analítica';
$string['analyticslogstore'] = 'Registos armazenados a usar na análise';
$string['analyticslogstore_help'] = 'Os registos que serão utilizados pela API analítica para ler a atividade dos utilizadores';
$string['analyticssettings'] = 'Configurações da análise';
$string['coursetoolong'] = 'A disciplina é muito grande';
$string['defaultpredictionsprocessor'] = 'Processador de previsões predefinido';
$string['defaultpredictoroption'] = 'Processador predefinido ({$a})';
$string['disabledmodel'] = 'Modelo desativado';
$string['enabledtimesplittings'] = 'Métodos de divisão do tempo';
$string['erroralreadypredict'] = 'O ficheiro \'{$a}\' já foi usado para gerar previsões.';
$string['errorcannotreaddataset'] = 'Não é possível ler o ficheiro dos dados {$a}';
$string['errorcannotwritedataset'] = 'Não é possível escrever no ficheiro dos dados {$a}';
$string['errorendbeforestart'] = 'A data de fim ({$a}) é anterior à data de início da disciplina.';
$string['errorinvalidindicator'] = 'Indicador inválido {$a}';
$string['errorinvalidtimesplitting'] = 'Divisão de tempo inválida; assegure-se que adiciona o nome completo da classe.';
$string['errornoindicators'] = 'Este modelo não possui indicadores.';
$string['errornopredictresults'] = 'Sem resultados devolvidos pelo processador de previsões. Confirme a diretoria de saída dos conteúdos para mais informações.';
$string['errornoroles'] = 'Os papéis de alunos ou professores não foram definidos. Defina-os na página de configurações da análise.';
$string['errornotarget'] = 'Este modelo não possui nenhum alvo.';
$string['errornotimesplittings'] = 'Este modelo não tem nenhum método de divisão do tempo.';
$string['errorpredictioncontextnotavailable'] = 'Esse contexto de previsão já não está disponível.';
$string['errorpredictionformat'] = 'Formato incorreto de cálculos de previsão';
$string['errorpredictionnotfound'] = 'Previsão não encontrada';
$string['errorpredictionsprocessor'] = 'Erro no processador de previsões: {$a}';
$string['errorpredictwrongformat'] = 'O retorno do processador de previsões não pode ser descodificado: "{$a}"';
$string['errorprocessornotready'] = 'O processador de previsões selecionado não está preparado: {$a}';
$string['errorsamplenotavailable'] = 'O exemplo de previsão já não está disponível';
$string['errorunexistingmodel'] = 'Modelo não existente {$a}';
$string['errorunexistingtimesplitting'] = 'O método de divisão de tempo selecionado não está disponível.';
$string['errorunknownaction'] = 'Ação desconhecida';
$string['eventinsightsviewed'] = 'Percepções visualizadas';
$string['eventpredictionactionstarted'] = 'Começou o processo de previsão';
$string['fixedack'] = 'Confirmado';
$string['insightinfomessage'] = 'O sistema gerou algumas previsões para si: {$a}';
$string['insightinfomessagehtml'] = 'O sistema gerou algumas previsões para si: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Novas apreciações para "{$a->contextname}": {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Não pode ser analisado utilizando o método de divisão de tempo {$a}';
$string['invalidtimesplitting'] = 'O modelo com o ID {$a} precisa de um método de divisão de tempo configurado antes de poder ser utilizado.';
$string['modeloutputdir'] = 'Diretoria dos modelos';
$string['modeloutputdirinfo'] = 'Diretoria onde o processador de previsões guarda toda a informação da avaliação. Útil para análise e pesquisa.';
$string['modeltimelimit'] = 'Duração máxima de análise por modelo';
$string['modeltimelimitinfo'] = 'Esta configuração limita o tempo que cada modelo gasta a analisaro o conteúdo do site.';
$string['nocourses'] = 'Nenhuma disciplina para analisar';
$string['nodata'] = 'Sem dados para analisar';
$string['noevaluationbasedassumptions'] = 'Modelos baseados em hipóteses não podem ser avaliados.';
$string['noinsights'] = 'Sem percepções reportadas';
$string['noinsightsmodel'] = 'Este modelo não gera percepções';
$string['nonewdata'] = 'Nenhum dado novo disponível';
$string['nonewranges'] = 'Ainda não há novas previsões';
$string['nonewtimeranges'] = 'Não existe um novo intervalo de tempo, nada para prever.';
$string['nopredictionsyet'] = 'Sem previsões disponíveis';
$string['noranges'] = 'Ainda não há previsões';
$string['notrainingbasedassumptions'] = 'Modelos baseados em suposições não precisam de treino';
$string['notuseful'] = 'Não útil';
$string['novaliddata'] = 'Não existem dados válidos disponíveis';
$string['novalidsamples'] = 'Nenhuma amostra válida disponível';
$string['onlycli'] = 'Execução dos processos de análise apenas por linha de comando';
$string['onlycliinfo'] = 'Processos analíticos, tais como avaliar modelos, algoritmos de aprendizagem de máquinas de treino ou obter previsões podem levar algum tempo. Serão executados como as tarefas do cron e podem ser forçados através da linha de comando. Desative esta configuração se pretender que os gestores do site possam executar estes processos manualmente através da interface web.';
$string['predictionsprocessor'] = 'Processador de previsões';
$string['predictionsprocessor_help'] = 'O processador de previsões é uma estrutura de suporte à aprendizagem que processa os dados gerados pelo cálculo de indicadores e metas de cada modelo. Cada modelo pode usar um processador diferente. O que for especificado aqui será o predefinido.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Cálculos de indicadores';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Contexto';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Hora de fim de cálculo';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'A classe do indicador de cálculos';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'O ID da amostra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'A tabela original da amostra';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Hora de início de cálculo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Quando a previsão foi realizada';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'O valor calculado';
$string['privacy:metadata:analytics:predictionactions'] = 'Ações de previsão';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'O nome da ação';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'O ID da previsão';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Quando a ação de previsão foi realizada';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'O utilizador que realizou a ação';
$string['privacy:metadata:analytics:predictions'] = 'Previsões';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos de indicadores';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'O ID do modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'A previsão';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'A pontuação de previsão';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'O índice do modelo de divisão de tempo';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'O ID de amostra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quando a previsão foi realizada';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Fim de cálculos';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Início de cálculos';
$string['processingsitecontents'] = 'A processar o conteúdo do site';
$string['successfullyanalysed'] = 'Analisada com sucesso';
$string['timesplittingmethod'] = 'Método de divisão de tempo';
$string['timesplittingmethod_help'] = 'O método de divisão de tempo divide a duração da disciplina em partes; o mecanismo de previsão será executado no final de cada parte. É recomendado que ative apenas o método de divisão de tempo que poderá ter interesse em usar. O processo de avaliação irá interagir através de todos os métodos de divisão de tempo ativos, por isso, quanto mais modelos de divisão de tempo estiverem ativos, mais lento será o processo de avaliação.';
$string['viewprediction'] = 'Detalhes da previsão';
