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
 * Strings for component 'block_dedication', language 'pt', version '3.11'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Dedicação';
$string['access_info'] = 'Apenas para professores';
$string['connectionratiorow'] = 'Ligações por dia';
$string['dedication:addinstance'] = 'Permitir adicionar bloco de Dedicação à disciplina';
$string['dedication:use'] = 'Permissão para utilizar Dedicação à disciplina';
$string['dedication_estimation'] = 'O seu tempo de dedicação estimado é de';
$string['dedicationall'] = 'Tempo de dedicação de todos os participantes da disciplina. Clique num nome para ver o respetivo tempo de dedicação em detalhe.';
$string['dedicationgroup'] = 'Tempo de dedicação dos membros do grupo \'<em>{$a}</em>\'. Clique num nome para ver o respetivo tempo de dedicação em detalhe.';
$string['dedicationrow'] = 'Dedicação à disciplina';
$string['form'] = 'Configuração da Dedicação à disciplina';
$string['form_help'] = 'O tempo é calculado com base nos conceitos de sessão e duração da sessão aplicados a entradas no registo.

<strong>Clique:</strong> Cada vez que um utilizadior acede a uma página no Moodle é adicionada uma entrada no registo.

<strong>Sessão:</strong> Conjunto de dois ou mais cliques consecutivos nos quais o tempo decorrido entre cada par de cliques consecutivos não é maior que o tempo máximo estabelecido.

<strong>Duração da sessão:</strong> Tempo decorrido entre o primeiro e o último clique da sessão.

<strong>Tempo de dedicação:</strong> A soma de todas as \'Duração da sessão\' de um utilizador.';
$string['form_text'] = 'Selecione o intervalo de datas e o tempo máximo entre os cliques da mesma sessão.';
$string['limit'] = 'Tempo limite entre cliques (em minutos)';
$string['limit_help'] = 'O intervalo de tempo entre cliques define se dois cliques fazem parte, ou não, da mesma sessão';
$string['maxtime'] = 'Fim do período';
$string['maxtime_help'] = 'Considerar apenas as entradas no registo que terminam antes desta data';
$string['meandedication'] = '<strong>Média:</strong> {$a}';
$string['mintime'] = 'Início do período';
$string['mintime_help'] = 'Considerar apenas as entradas no registo depois desta data';
$string['pagetitle'] = '{$a}: dedicação à disciplina';
$string['period'] = 'Período entre <em>{$a->mintime}</em> e <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tempo decorrido:</strong> {$a}';
$string['perioddiffrow'] = 'Tempo decorrido';
$string['pluginname'] = 'Dedicação à disciplina';
$string['sessionduration'] = 'Duração';
$string['sessionstart'] = 'Início da sessão';
$string['show_dedication'] = 'Mostrar tempo de dedicação aos alunos';
$string['show_dedication_help'] = 'Por predefinição o tempo de dedicação só pode ser visto pelos professores. Esta configuração permite que os alunos vejam o seu tempo de dedicação no bloco.';
$string['sincerow'] = 'Desde';
$string['submit'] = 'Calcular';
$string['torow'] = 'Até';
$string['totaldedication'] = '<strong>Total:</strong> {$a}';
$string['userdedication'] = 'Dedicação à disciplina detalhada de <b>{$a}</b>';
