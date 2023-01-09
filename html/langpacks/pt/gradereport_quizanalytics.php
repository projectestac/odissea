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
 * Strings for component 'gradereport_quizanalytics', language 'pt', version '3.11'.
 *
 * @package     gradereport_quizanalytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuaracyrate'] = 'Taxa de precisão:';
$string['action'] = 'Ação';
$string['allusersdes'] = 'Esta secção reporta, com base em casos de erro ou ausência de resposta, as categorias que se revelaram como as mais desafiantes para todos os utilizadores que responderam ao teste.';
$string['apiversion'] = 'Indique a versão da API';
$string['apiversiondes'] = 'Por favor, indique a versão da sua API';
$string['attemptssnapshotdes'] = 'Esta secção é como uma recapitulação, mostra os números-chave de toda a sua tentativa anterior.';
$string['attemptsummarydes'] = 'Este gráfico ilustra o seu desempenho na sua tentativa.';
$string['avgscore'] = 'Pontuação média';
$string['bestscore'] = 'Melhor pontuação';
$string['correct'] = 'Correta';
$string['cutoffdes'] = 'Definir a percentagem da pontuação limite (%) para todo o teste. Será usada para o gráfico de análise previsional.';
$string['cutoffscore'] = 'Pontuação limite';
$string['enterfbappid'] = 'Indique o ID da App Facebook';
$string['fbappiddes'] = 'Por favor, indique um ID válido da APP Facebook para poder partilhar imagens dos gráficos.';
$string['fbsharetitle'] = 'Adicionar título';
$string['fbsharetitledefault'] = 'Eu fiz um teste e aqui está como parece o gráfico do resultado do meu teste.';
$string['fbsharetitledes'] = 'Adicione o texto que pretende mostrar como título das publicações partilhadas no Facebook.';
$string['gradeanalysisdes'] = 'Número de utilizadores em cada grupo de percentagem (percentagem de pontuação).';
$string['gradeboundary'] = 'Limites de classificação';
$string['gradeboundarydes'] = 'Os limites de classificação são intervalos definidos pelo administrador que serão mostrados no gráfico das estatísticas das pontuações.';
$string['hardcatalluser'] = 'Categorias difíceis (todos os utilizadores)%';
$string['hardcatlogginuser'] = 'Categorias difíceis (utilizadores autenticados)%';
$string['hardestquesdes'] = '* Total de tentativas = Número total de tentativas do teste.
* Tentativas mal sucedidas = Total de tentativas com erro + não respondidas.
Este gráfico representa a dificuldade das perguntas, dependendo de quantas vezes o teste foi tentado e o número de vezes que uma pergunta em particular é deixada sem resposta ou é respondida incorretamente. Ao clicar nas barras de cada pergunta será mostrada a pergunta em si, juntamente com a explicação, e a resposta correta.';
$string['hardestquestion'] = 'Perguntas mais difíceis';
$string['hardness'] = 'Dificuldade (%)';
$string['impandpredicanalysis'] = 'Curva de progresso e Análise previsional';
$string['incorrect'] = 'Incorreta';
$string['lastattemptsummary'] = 'Resumo da tentativa';
$string['lastattemptsummarydes'] = 'Este gráfico mostra o seu desempenho na última tentativa.';
$string['loggedinuserdes'] = 'Vamos dar uma vista de olhos nas categorias em que não se saiu tão bem.';
$string['lowestscore'] = 'Pontuação mais baixa';
$string['mixchartdes'] = 'Este gráfico mostra como progrediu em todas as suas tentativas e o bloco escuro representa o número médio de tentativas necessárias para atingir a pontuação definida como limite (pelo administrador do site). O eixo X (horizontal) representa o número de tentativas.';
$string['noofattempts'] = 'Número de tentativas';
$string['noofpartialcorrect'] = 'Número de respostas parcialmente corretas';
$string['noofquestionattempt'] = 'Número de perguntas respondidas';
$string['noofquestionunattempt'] = 'Número de perguntas não respondidas';
$string['noofrightans'] = 'Número de respostas corretas';
$string['noofstudents'] = 'Número de alunos';
$string['noquizfound'] = 'Nenhum teste encontrado!';
$string['notgraded'] = 'Ainda não avaliado';
$string['partialcorrect'] = 'Parcialmente correta';
$string['peerscores'] = 'Pontuação dos pares';
$string['pluginname'] = 'Análise dos teste';
$string['quesanalysis'] = 'Análise da pergunta';
$string['quesananalysisdes'] = 'As curvas aqui apresentadas descrevem o desempenho dos utilizadores em cada pergunta. Ao clicar no círculo dedicado a cada pergunta, irá ver a pergunta, assim como, a explicação e a resposta correta.';
$string['questionpercatdes'] = 'O gráfico mostra o número de perguntas de cada categoria presentes no teste.';
$string['questionspercategory'] = 'Perguntas por categoria';
$string['quizanalytics:view'] = 'Ver relatório Análises dos testes';
$string['quizname'] = 'Nome do teste';
$string['score'] = 'Pontuação';
$string['setcutoff'] = 'Definir limite';
$string['setglobal'] = 'Definir globalmente';
$string['setglobaldes'] = 'Definir limites de classificação para todos os testes. Se ativar esta opção, as configurações do limite de classificação serão substituídas em cada teste.';
$string['tab1'] = 'Resumo da tentativa';
$string['tab2'] = 'Meu progresso e previsões';
$string['tab2subtab11'] = 'Curva de melhoramento';
$string['tab2subtab12'] = 'Desempenho dos outros';
$string['tab2subtab2'] = 'Pergunta mais difícil';
$string['tab2subtab3'] = 'Instantâneo da tentativa';
$string['tab3'] = 'Análise das categorias de perguntas';
$string['tab3subtab1'] = 'Perguntas por categoria';
$string['tab3subtab2'] = 'Categorias desafiantes (todos)';
$string['tab3subtab3'] = 'Categorias desafiantes (eu)';
$string['tab4'] = 'Estatística de Pontuações & Perguntas';
$string['tab4subtab1'] = 'Pontuações por percentagem (todos os utilizadores)';
$string['timechartdes'] = 'Este gráfico mostra como os seus pares pontuaram em comparação consigo.';
$string['timetaken'] = 'Resumo das tentativas (tempo gasto):';
$string['totalquizattempt'] = 'Total de tentativas';
$string['unattempted'] = 'Sem tentativa';
$string['userscore'] = 'Pontuação do utilizador';
$string['viewanalytics'] = 'Ver a análise';
$string['wrongandunattemptd'] = 'Tentativas sem sucesso';
