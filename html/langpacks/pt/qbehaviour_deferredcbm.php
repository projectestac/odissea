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
 * Strings for component 'qbehaviour_deferredcbm', language 'pt', version '3.8'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisão';
$string['accuracyandbonus'] = 'Precisão + Bónus';
$string['assumingcertainty'] = 'Não selecionou um grau de certeza. Grau assumido: {$a}.';
$string['averagecbmmark'] = 'Nota média ABGC';
$string['basemark'] = 'Nota base {$a}';
$string['breakdownbycertainty'] = 'Decompor por grau de certeza';
$string['cbmbonus'] = 'Bónus ABGC (Avaliação com Base no Grau de Certeza)';
$string['cbmgradeexplanation'] = 'Para avaliação com base no grau de certeza, a nota acima é mostrada em função do valor máximo para C=1 (totalmente correto).';
$string['cbmgrades'] = 'Notas ABGC';
$string['cbmgrades_help'] = 'Na Avaliação com Base no Grau de Certeza (ABCG) ter todas as questões corretas com C=1 (grau de certeza baixo) equivale a uma pontuação de 100%. As notas podem ser tão altas quanto 300%, se todas as questões estiverem corretas com C=3 (grau de certeza alto). Equívocos (ou seja, respostas erradas dadas com um grau de certeza alto) diminuem muito mais as notas do que quando se reconhece que as respostas erradas foram dadas com um grau de certeza baixo. Isto poderá até resultar em notas globais negativas.

**Precisão** é a % da resposta correta ignorando a certeza, mas ponderada para a nota máxima de cada pergunta. Distinguir com sucesso respostas mais e menos confiáveis dá uma nota melhor do que selecionar a mesma certeza para cada pergunta. Isso é refletido no **Bónus ABGC**.
**Precisão** + **Bónus ABGC** é uma medida de conhecimento melhor que **Precisão**. Equívocos podem levar a um bónus negativo, um aviso para analisar cuidadosamente o que é e o que não é conhecido.';
$string['cbmmark'] = 'Nota da ABGC {$a}';
$string['certainty'] = 'Certeza';
$string['certainty-1'] = 'Não faço ideia';
$string['certainty1'] = 'C=1 (Grau de certeza Baixo: <67%)';
$string['certainty2'] = 'C=2 (Grau de certeza Médio: >67%)';
$string['certainty3'] = 'C=3 (Grau de certeza Alto: >80%)';
$string['certainty_help'] = 'A Avaliação com Base no Grau de Certeza (ABGC) requer que indique o quão certa acha que a sua resposta está. Os níveis disponíveis são:

Grau de certeza | C=1 (Baixo) | C=2 (Médio) | C=3 (Alto)
------------------- | ------------ | --------- | ----------------
Nota se correto |     1     |       2      |     3
Nota se errado  |     0     |       -2     |    -6
Probabilidade    | <67% | 67-80% | >80%

As respostas sem certeza obterão melhores notas se for reconhecido um grau de certeza baixo. Por exemplo, se houver mais do que 1 em 3 hipóteses da resposta estar errada, deverá ser indicado C=1 e evitar o risco de ter uma nota negativa.';
$string['certaintyshort-1'] = 'Não faço ideia';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Não faço ideia';
$string['foransweredquestions'] = 'Resultados de apenas {$a} perguntas respondidas';
$string['forentirequiz'] = 'Resultados de todo o teste ({$a} perguntas)';
$string['howcertainareyou'] = 'Grau de certeza{$a->help}: {$a->choices}';
$string['judgementok'] = 'Ok';
$string['judgementsummary'] = 'Respostas: {$a->responses}. Precisão: {$a->fraction}. (Intervalo ideal {$a->idealrangelow} para {$a->idealrangehigh}). Usou este grau de certeza: {$a->judgement}';
$string['noquestions'] = 'Sem respostas';
$string['overconfident'] = 'excesso de confiança';
$string['pluginname'] = 'Feedback diferido com ABGC';
$string['privacy:metadata'] = 'O módulo Comportamento das perguntas Feedback diferido com ABGC não armazena dados pessoais.';
$string['slightlyoverconfident'] = 'um pouco de confiança a mais';
$string['slightlyunderconfident'] = 'um pouco de confiança a menos';
$string['underconfident'] = 'sub-confiante';
$string['weightx'] = 'Peso {$a}';
