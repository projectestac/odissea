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
 * Strings for component 'qtype_calculatedmulti', language 'pt', version '4.1'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Opções de escolha';
$string['answeroptions_help'] = 'A fórmula da opção sugerida é ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Escolha múltipla com variáveis';
$string['pluginname_help'] = 'As perguntas de escolha múltipla com variáveis são idênticas às de escolha múltipla, mas quer a pergunta quer as opções de resposta podem ser definidas com fórmulas e variáveis que são substituídas por valores a cada nova tentativa de resposta ao teste. Por exemplo, na pergunta "Qual a área do retângulo com o comprimento {l} e largura {w}?" uma das opções de escolha é {={l}*{w}} (onde * é o símbolo de multiplicação).';
$string['pluginname_link'] = 'pergunta/tipo/calculadamulti';
$string['pluginnameadding'] = 'A adicionar pergunta de Escolha múltipla com variáveis';
$string['pluginnameediting'] = 'A editar pergunta de escolha múltipla com variáveis';
$string['pluginnamesummary'] = 'As perguntas de escolha múltipla com variáveis são idênticas às de escolha múltipla, mas as opções de resposta podem incluir fórmulas cujas variáveis são substituídas aleatoriamente por valores de um conjunto de dados a cada nova tentativa.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Escolha múltipla com variáveis não armazena quaisquer dados pessoais.';
