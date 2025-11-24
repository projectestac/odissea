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
 * Strings for component 'tool_analytics', language 'pt', version '4.5'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisão';
$string['actionexecutedgroupedusefulness'] = 'Ações agrupadas';
$string['actions'] = 'Açoes';
$string['actionsexecutedbyusers'] = 'Ações executadas pelos utilizadores';
$string['actionsexecutedbyusersfor'] = 'Ações executadas pelos utilizadores para o modelo "{$a}"';
$string['allpredictions'] = 'Todas as previsões';
$string['alltimesplittingmethods'] = 'Todos os intervalos de análise';
$string['analysingsitedata'] = 'A analisar o site';
$string['analysis'] = 'Análises';
$string['analyticmodels'] = 'Modelos de análise';
$string['bettercli'] = 'Avaliar modelos e gerar previsões pode envolver um processamento intenso. Recomenda-se que execute estas ações a partir da linha de comando.';
$string['cantguessenddate'] = 'Não é possível prever a data de fim';
$string['cantguessstartdate'] = 'Não é possível determinar a data de início';
$string['classdoesnotexist'] = 'A classe \'{$a}\' não existe';
$string['clearmodelpredictions'] = 'Tem a certeza de que pretende limpar todas as previsões para "{$a}"?';
$string['clearpredictions'] = 'Limpar previsões';
$string['clienablemodel'] = 'Pode ativar o modelo selecionando um intervalo de análise através do ID. Tenha em atenção que também pode ativá-lo mais tarde usando a interface da web (\'Nenhum\' para sair).';
$string['clievaluationandpredictions'] = 'Uma tarefa agendada interage através dos modelos ativos e obtém previsões. A avaliação de modelos através da interface web está desativada. Pode permitir que estes processos sejam executados manualmente através da interface web desativando a configuração da análise \'<a href="{$a}">Execução dos processos de análise apenas por linha de comando</a>\'.';
$string['clievaluationandpredictionsnoadmin'] = 'Uma tarefa agendada interage através de modelos ativos e obtém previsões. A avaliação de modelos através da interface web está desativada. Pode ser ativada por um administrador do site.';
$string['component'] = 'Componente';
$string['componentcore'] = 'Core';
$string['componentselect'] = 'Selecionar todos os modelos fornecidos pela componente \'{$a}\'';
$string['componentselectnone'] = 'Desselecionar todos';
$string['contexts'] = 'Contextos';
$string['contexts_help'] = 'O modelo será limitado a este conjunto de contextos. Nenhuma restrição de contexto será aplicada se nenhum contexto for selecionado.';
$string['createmodel'] = 'Criar modelo';
$string['currenttimesplitting'] = 'Intervalo de análise atual';
$string['delete'] = 'Apagar';
$string['deletemodelconfirmation'] = 'Tem a certeza de que pretende apagar "{$a}"? Estas alterações não poderão ser revertidas.';
$string['disabled'] = 'Desativado';
$string['editmodel'] = 'Editar modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo já foi treinado. Tenha em atenção que alterar os indicadores ou o intervalo de análise eliminará as previsões anteriores e irá a gerar novas previsões.';
$string['enabled'] = 'Ativado';
$string['errorcantenablenotimesplitting'] = 'Tem de selecionar um intervalo de análise antes de ativar o modelo.';
$string['errornoenabledandtrainedmodels'] = 'Não existem modelos ativos e treinados para prever.';
$string['errornoenabledmodels'] = 'Não existem modelos ativos para treinar.';
$string['errornoexport'] = 'Apenas os modelos já treinados podem ser exportados';
$string['errornostaticevaluated'] = 'Modelos baseados em suposições não podem ser avaliados. Eles são sempre 100% corretos de acordo com a forma como foram definidos.';
$string['errornostaticlog'] = 'Os modelos baseados em suposições não podem ser avaliados porque não há registo de desempenho.';
$string['erroronlycli'] = 'Execução apenas permitida via linha de comando';
$string['errortrainingdataexport'] = 'Os dados do modelo de treino não podem ser exportados';
$string['evaluate'] = 'Avaliação';
$string['evaluatemodel'] = 'Modelo de avaliação';
$string['evaluationinbatches'] = 'O conteúdo do site é calculado e armazenado em lotes. O processo de avaliação pode ser interrompido a qualquer momento. Na próxima vez que for executado, continuará a partir do ponto em que foi interrompido.';
$string['evaluationmode'] = 'Modo experimental';
$string['evaluationmode_help'] = 'Existem dois modos de avaliação:

* Modelo experimentado - Os dados do site são usados como dados de teste para avaliar a precisão do modelo.
* Configuração - Os dados do site são divididos em dados de treino e de teste, para treinar e testar a precisão da configuração do modelo.

A opção \'modelo experimentado\' só está disponível se um modelo experimentado foi importado para o site mas ainda não foi treinado com dados do site.';
$string['evaluationmodecolconfiguration'] = 'Configuração';
$string['evaluationmodecoltrainedmodel'] = 'Modelo experimentado';
$string['evaluationmodeconfiguration'] = 'Configuração da avaliação do modelo';
$string['evaluationmodeinfo'] = 'Este modelo foi importado para este site. Pode avaliar o desempenho do modelo ou avaliar o desempenho da configuração do modelo usando dados do site.';
$string['evaluationmodetrainedmodel'] = 'Avaliar o modelo experimentado';
$string['executescheduledanalysis'] = 'Executar análises agendadas';
$string['export'] = 'Exportar';
$string['exportincludeweights'] = 'Incluir os pesos do modelo experimentado';
$string['exportmodel'] = 'Exportar configuração';
$string['exporttrainingdata'] = 'Exportar dados do treino';
$string['extrainfo'] = 'Informação';
$string['generalerror'] = 'Erro na avaliação. Código de estado {$a}';
$string['goodmodel'] = 'Este é um bom modelo para obter previsões. Ative-o para começar a obter previsões.';
$string['ignoreversionmismatches'] = 'Ignorar versões incompatíveis';
$string['ignoreversionmismatchescheckbox'] = 'Ignorar as diferenças entre esta versão e a versão original do site.';
$string['importedsuccessfully'] = 'O modelo foi importado com sucesso.';
$string['importmodel'] = 'Importar modelo';
$string['indicators'] = 'Indicadores';
$string['indicators_help'] = 'Os indicadores são o que acha que levará a uma previsão precisa do alvo.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Número de indicadores: {$a}';
$string['info'] = 'Informação';
$string['insights'] = 'Perceções';
$string['insightsreport'] = 'Relatório de perceções';
$string['invalidanalysables'] = 'Elementos inválidos';
$string['invalidanalysablesinfo'] = 'Esta página mostra elementos analisáveis que não podem ser usados por este modelo de previsão. Os elementos listados não podem ser usados para treinar o modelo de previsão nem o modelo de previsão pode obter previsões para eles.';
$string['invalidanalysablestable'] = 'Tabela de elementos analisáveis inválidos do site';
$string['invalidcurrenttimesplitting'] = 'O intervalo de análise selecionado é inválido para a meta selecionada. Por favor, selecione outro intervalo de análise.';
$string['invalidindicatorsremoved'] = 'Foi adicionado um novo modelo. Foram removidos automaticamente os indicadores que não funcionam com a meta selecionada.';
$string['invalidprediction'] = 'Inválido para obter previsões';
$string['invalidtimesplitting'] = 'O intervalo de análise selecionado é inválido para a meta selecionada.';
$string['invalidtimesplittinginmodels'] = 'O intervalo de análise usado por alguns dos modelos é inválido. Por favor, selecione outro intervalo para os seguintes modelos: {$a}';
$string['invalidtraining'] = 'Inválido para treinar o modelo';
$string['loginfo'] = 'Informações extras do registo';
$string['missingmoodleversion'] = 'O ficheiro importado não define um número de versão do Moodle';
$string['modelid'] = 'ID do modelo';
$string['modelinvalidanalysables'] = 'Elementos analisáveis inválidos para o modelo "{$a}"';
$string['modelname'] = 'Nome do modelo';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'Intervalo de análise';
$string['newmodel'] = 'Novo modelo';
$string['nextpage'] = 'Página seguinte';
$string['noactionsfound'] = 'Os utilizadores não executaram nenhuma ação nas perceções geradas.';
$string['nodatatoevaluate'] = 'Não existem dados para avaliar o modelo';
$string['nodatatopredict'] = 'Não existem novos elementos sem previsões.';
$string['nodatatotrain'] = 'Não existem dados novos que possam ser usados para treinar.';
$string['noinvalidanalysables'] = 'Este site não contém qualquer elemento analisável inválido.';
$string['notdefined'] = 'Ainda não definido';
$string['pluginname'] = 'Modelos de análise';
$string['predictionprocessfinished'] = 'Processo de obtenção de previsões finalizado';
$string['predictionresults'] = 'Resultados da previsão';
$string['predictmodels'] = 'Modelos de previsão';
$string['predictorresultsin'] = 'As previsões registaram informações na diretoria {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata'] = 'O módulo Modelos analíticos não armazena dados pessoais.';
$string['restoredefault'] = 'Restaurar modelos predefinidos';
$string['restoredefaultempty'] = 'Selecione os modelos a restaurar.';
$string['restoredefaultinfo'] = 'Estes modelos predefinidos estão em falta ou foram alterados desde a instalação. Pode restaurar os modelos predefinidos selecionados.';
$string['restoredefaultnone'] = 'Todos os modelos predefinidos fornecidos pelo core do Moodle e os módulos instalados já estão criados. Nenhum modelo novo foi encontrado, por isso, não há nada a restaurar.';
$string['restoredefaultsome'] = 'Recriados com sucesso {$a->count} novos modelos.';
$string['restoredefaultsubmit'] = 'Restaurar selecionado';
$string['sameenddate'] = 'A data de fim atual é aceitável';
$string['samestartdate'] = 'A data de início atual é aceitável';
$string['scheduledanalysisresults'] = 'Resultados ao usar \'{$a->name}\' como intervalo de análise';
$string['scheduledanalysisresultscli'] = 'Resultados ao usar \'{$a->name}\' (ID: {$a->id}) como intervalo de análise';
$string['selecttimesplittingforevaluation'] = 'Selecione o intervalo de análise que pretende usar para avaliar a configuração do modelo.';
$string['target'] = 'Alvo';
$string['target_help'] = 'A meta é o que o modelo irá prever.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'O intervalo de análise não está definido';
$string['timesplittingnotdefined_help'] = 'Selecione um intervalo de análise antes de ativar o modelo.';
$string['trainandpredictmodel'] = 'A experimentar o modelo e a calcular previsões';
$string['trainingprocessfinished'] = 'Processo de treino finalizado';
$string['trainingresults'] = 'Resultados do treino';
$string['trainmodels'] = 'Modelos de treino';
$string['versionnotsame'] = 'O ficheiro importado era de uma versão diferente ({$a->importedversion}) da atual ({$a->version})';
$string['viewlog'] = 'Registo da avaliação';
$string['weeksenddateautomaticallyset'] = 'Data de fim definida automaticamente com base na data de início e no número de seções';
$string['weeksenddatedefault'] = 'Data de fim calculada automaticamente a partir da data de início da disciplina.';
