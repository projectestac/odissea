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
 * Strings for component 'analytics', language 'pt', version '4.1'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analisável \'{$a->analysableid}\' não usado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analisável \'{$a->analysableid}\' não é válido para este objetivo: {$a->result}';
$string['analysisinprogress'] = 'Ainda está a ser analisado por uma execução anterior';
$string['analytics'] = 'Analítica';
$string['analyticsdisabled'] = 'A Analítica está desativada. Pode ser ativada em "Administração do Site / Funcionalidades avançadas".';
$string['analyticslogstore'] = 'Registos armazenados a usar na análise';
$string['analyticslogstore_help'] = 'Os registos que serão utilizados pela API analítica para ler a atividade dos utilizadores.';
$string['analyticssettings'] = 'Configurações da análise';
$string['analyticssiteinfo'] = 'Informação do site';
$string['calclifetime'] = 'Manter cálculos analíticos por';
$string['configlcalclifetime'] = 'Especifica por quanto tempo pretende manter os dados de cálculo - não apagará as previsões, mas apaga os dados usados para gerar as previsões. É preferível usar aqui a opção predefinida, uma vez que mantém o uso do espaço do disco sob controlo. No entanto, se estiver a usar tabelas de cálculo para outros fins, pode querer aumentar este valor.';
$string['defaultpredictionsprocessor'] = 'Processador de previsões predefinido';
$string['defaultpredictoroption'] = 'Processador predefinido ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervalos de análise predefinidos para avaliação do modelo';
$string['defaulttimesplittingmethods_help'] = 'O intervalo de análise define quando o sistema calculará as previsões e as partes dos registos de atividade que serão consideradas para essas previsões. O processo de avaliação do modelo irá repetir-se ao longo destes intervalos de análise a menos que seja indicado um intervalo de análise específico.';
$string['disabledmodel'] = 'Modelo desativado';
$string['erroralreadypredict'] = 'O ficheiro \'{$a}\' já foi usado para gerar previsões.';
$string['errorcannotreaddataset'] = 'Não é possível ler o ficheiro dos dados {$a}.';
$string['errorcannotusetimesplitting'] = 'O intervalo de análise indicado não pode ser usado neste modelo.';
$string['errorcannotwritedataset'] = 'Não é possível escrever no ficheiro dos dados {$a}.';
$string['errorexportmodelresult'] = 'O modelo de aprendizagem de máquina não pode ser exportado.';
$string['errorimport'] = 'Erro ao importar o ficheiro JSON fornecido.';
$string['errorimportmissingclasses'] = 'Os seguintes componentes de análise não estão disponíveis neste site: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'O modelo fornecido requer que os seguintes módulos estejam instalados: {$a}. Tenha em atenção que as versões não precisam necessariamente corresponder às versões instaladas no seu site. Na maioria dos casos é suficiente instalar a mesma versão ou uma versão mais recente do módulo.';
$string['errorimportversionmismatches'] = 'A versão dos seguintes componentes difere da versão instalada neste site: {$a}. Pode usar a opção "Ignorar versões incompatíveis" para ignorar estas diferenças.';
$string['errorinvalidcontexts'] = 'Alguns dos contextos selecionados não podem ser usados nesta meta.';
$string['errorinvalidindicator'] = 'Indicador inválido {$a}';
$string['errorinvalidtarget'] = 'Meta {$a} inválida';
$string['errorinvalidtimesplitting'] = 'Intervalo de análise inválido; assegure-se que adiciona o nome completo da classe.';
$string['errornocontextrestrictions'] = 'A meta selecionada não suporta restrições de contexto';
$string['errornoexportconfig'] = 'Ocorreu um erro ao exportar a configuração do modelo.';
$string['errornoexportconfigrequirements'] = 'Apenas os modelos não estáticos com intervalo de análise podem ser exportados.';
$string['errornoindicators'] = 'Este modelo não possui indicadores.';
$string['errornopredictresults'] = 'Sem resultados devolvidos pelo processador de previsões. Confirme a diretoria de saída dos conteúdos para mais informações.';
$string['errornoroles'] = 'Os papéis de alunos ou professores não foram definidos. Defina-os na página de configurações da análise.';
$string['errornotarget'] = 'Este modelo não possui nenhum alvo.';
$string['errornotimesplittings'] = 'Este modelo não tem nenhum intervalo de análise.';
$string['errorpredictioncontextnotavailable'] = 'Este contexto de previsão já não está disponível.';
$string['errorpredictionformat'] = 'Formato incorreto de cálculos de previsão';
$string['errorpredictionnotfound'] = 'Previsão não encontrada';
$string['errorpredictionsprocessor'] = 'Erro no processador de previsões: {$a}';
$string['errorpredictwrongformat'] = 'O retorno do processador de previsões não pode ser descodificado: "{$a}"';
$string['errorprocessornotready'] = 'O processador de previsões selecionado não está preparado: {$a}';
$string['errorsamplenotavailable'] = 'O exemplo de previsão já não está disponível.';
$string['errorunexistingmodel'] = 'Modelo não existente {$a}';
$string['errorunexistingtimesplitting'] = 'O intervalo de análise selecionado não está disponível.';
$string['errorunknownaction'] = 'Ação desconhecida';
$string['eventinsightsviewed'] = 'Perceções visualizadas';
$string['eventpredictionactionstarted'] = 'Começou o processo de previsão';
$string['fixedack'] = 'Aceite';
$string['incorrectlyflagged'] = 'Marcado incorretamente';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'O sistema gerou uma previsão para si.';
$string['insightinfomessageplain'] = 'O sistema gerou uma previsão para si: {$a}';
$string['insightmessagesubject'] = 'Nova apreciação para "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Não pode ser analisado utilizando o intervalo de análise {$a}';
$string['invalidtimesplitting'] = 'O modelo com o ID {$a} precisa de um intervalo de análise antes de poder ser utilizado.';
$string['levelinstitution'] = 'Nível de escolaridade';
$string['levelinstitutionisced0'] = 'Pré-primária';
$string['levelinstitutionisced1'] = 'Primeiro ciclo';
$string['levelinstitutionisced2'] = 'Segundo e terceiro ciclo';
$string['levelinstitutionisced3'] = 'Secundário';
$string['levelinstitutionisced4'] = 'Ensino pós-secundário não superior (pode incluir trabalho comunitário ou voluntariado/ONG)';
$string['levelinstitutionisced5'] = 'Ensino superior de ciclo curto (pode incluir trabalho comunitário ou voluntariado/ONG)';
$string['levelinstitutionisced6'] = 'Bacharelato ou equivalente';
$string['levelinstitutionisced7'] = 'Mestrado ou equivalente';
$string['levelinstitutionisced8'] = 'Doutoramento ou equivalente';
$string['modeinstruction'] = 'Tipos de ensino';
$string['modeinstructionblendedhybrid'] = 'Combinada ou Mista';
$string['modeinstructionfacetoface'] = 'Presencial';
$string['modeinstructionfullyonline'] = 'E-Learning';
$string['modeloutputdir'] = 'Diretoria dos modelos';
$string['modeloutputdirinfo'] = 'Diretoria onde o processador de previsões guarda toda a informação da avaliação. Útil para análise e pesquisa.';
$string['modeloutputdirwithdefaultinfo'] = 'Diretoria onde os processadores de previsões guardam todas as informações de avaliação. Útil para análise e pesquisa. Se estiver em branco, \'{$a}\' será usada como predefinição.';
$string['modeltimelimit'] = 'Duração máxima de análise por modelo';
$string['modeltimelimitinfo'] = 'Esta configuração limita o tempo que cada modelo gasta a analisaro o conteúdo do site.';
$string['neutral'] = 'Neutro';
$string['neverdelete'] = 'Nunca apagar cálculos';
$string['nocourses'] = 'Nenhuma disciplina para analisar';
$string['nodata'] = 'Sem dados para analisar';
$string['noevaluationbasedassumptions'] = 'Modelos baseados em hipóteses não podem ser avaliados.';
$string['noinsights'] = 'Sem perceções reportadas';
$string['noinsightsmodel'] = 'Este modelo não gera perceções';
$string['nonewdata'] = 'Nenhum dado novo disponível. O modelo será analisado após o próximo intervalo de análise.';
$string['nonewranges'] = 'Ainda não existem novas previsões. O modelo será analisado após o próximo intervalo de análise.';
$string['nopredictionsyet'] = 'Sem previsões disponíveis';
$string['noranges'] = 'Ainda não há previsões';
$string['notapplicable'] = 'Não aplicável';
$string['notrainingbasedassumptions'] = 'Modelos baseados em suposições não precisam de treino';
$string['notuseful'] = 'Não é útil';
$string['novaliddata'] = 'Não existem dados válidos disponíveis';
$string['novalidsamples'] = 'Nenhuma amostra válida disponível';
$string['onlycli'] = 'Execução dos processos de análise apenas por linha de comando';
$string['onlycliinfo'] = 'Processos analíticos, tais como, avaliar modelos, algoritmos de aprendizagem de máquina de treino ou obter previsões, podem levar algum tempo. Serão executados como as tarefas do cron e podem ser forçados através da linha de comando. Desative esta configuração se pretender que os gestores do seu site possam executar estes processos manualmente através da interface web.';
$string['percentonline'] = 'B-Learning';
$string['percentonline_help'] = 'Se a instituição oferece cursos combinados ou mistos, que percentagem do trabalho do aluno é realizada online no Moodle? Use um valor numérico de 0 a 100.';
$string['predictionsprocessor'] = 'Processador de previsões';
$string['predictionsprocessor_help'] = 'O processador de previsões é uma estrutura de suporte à aprendizagem que processa os dados gerados pelo cálculo de indicadores e metas de cada modelo. Cada modelo pode usar um processador diferente. O que for especificado aqui será o predefinido.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Modelos analíticos';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'O utilizador que modificou o modelo';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'O registo usado para modelos analíticos';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'O utilizador que modificou o registo';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Cálculos dos indicadores';
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
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos dos indicadores';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'O ID do modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'A previsão';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'A pontuação de previsão';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'O índice do intervalo de análise';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'O ID de amostra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quando a previsão foi realizada';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Fim de cálculos';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Início de cálculos';
$string['processingsitecontents'] = 'A processar o conteúdo do site';
$string['successfullyanalysed'] = 'Analisada com sucesso';
$string['timesplittingmethod'] = 'Intervalo de análise';
$string['timesplittingmethod_help'] = 'O intervalo de análise define quando o sistema calculará as previsões e as partes dos registos de atividade que serão consideradas para essas previsões. A duração da disciplina pode ser dividida em partes e gerar uma previsão no final de cada uma parte.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Tipo de instituição';
$string['typeinstitutionacademic'] = 'Academia';
$string['typeinstitutionngo'] = 'Organização Não Governamental (ONG)';
$string['typeinstitutiontraining'] = 'Formação empresarial';
$string['useful'] = 'Útil';
$string['viewdetails'] = 'Ver detalhes';
$string['viewinsight'] = 'Ver perceção';
$string['viewinsightdetails'] = 'Ver detalhes da perceção';
$string['viewprediction'] = 'Detalhes da previsão';
$string['washelpful'] = 'Esta informação foi útil?';
