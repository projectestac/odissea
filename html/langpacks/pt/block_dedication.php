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
 * Strings for component 'block_dedication', language 'pt', version '4.5'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nome da disciplina';
$string['admin_filter_courseid_help'] = 'Filtrar o relatório pelo nome da disciplina';
$string['admin_filter_form'] = 'Configuração da dedicação à disciplina';
$string['admin_filter_form_help'] = 'O tempo é estimado com base nos conceitos de Sessão e Duração da sessão aplicados às entradas do registo de atividade.

<strong>Clique:</strong> Sempre que um utilizador acede a uma página no Moodle,  é armazenada uma entrada no registo de atividade.

<strong>Sessão:</strong> Conjunto de dois ou mais cliques consecutivos em que o tempo decorrido entre cada par de cliques consecutivos não supera um tempo máximo estabelecido.

<strong>Duração da sessão:</strong> Tempo decorrido entre o primeiro e o último clique da sessão.

<strong>Tempo de dedicação:</strong> A soma da duração de todas as sessões de um utilizador.';
$string['admin_filter_form_text'] = 'Selecione o intervalo de datas e o intervalo máximo entre cliques da mesma sessão.';
$string['admin_filter_maxtime'] = 'Fim do período';
$string['admin_filter_maxtime_help'] = 'Considerar apenas as entradas do registo que terminam antes desta data';
$string['admin_filter_mintime'] = 'Início do período';
$string['admin_filter_mintime_help'] = 'Considerar apenas as entradas do registo após esta data';
$string['admin_filter_submit'] = 'Calcular';
$string['allloglifetime'] = 'Manter o histórico da sessão durante';
$string['averagetimespent'] = '<strong>Tempo médio despendido na disciplina:</strong> {$a}';
$string['cleanuptask'] = 'Limpeza do histórico da sessão';
$string['collect_dedication'] = 'Recolher dados para o bloco Dedicação';
$string['configallloglifetime'] = 'Especifica por quanto tempo pretende manter os dados sobre a duração da sessão. As sessões mais antigas que este valor são apagadas automaticamente.';
$string['connectionratiorow'] = 'Ligações por dia';
$string['dedication:addinstance'] = 'Permitir adicionar bloco Dedicação';
$string['dedication:myaddinstance'] = 'Permitir adicionar bloco Dedicação ao Painel do utilizador';
$string['dedication:viewreports'] = 'Permitir a visualização dos relatórios da dedicação';
$string['dedicationall'] = 'Tempo de dedicação de todos os participantes da disciplina. Clique num nome para ver o respetivo tempo de dedicação em detalhe.';
$string['dedicationrow'] = 'Tempo despendido na disciplina';
$string['enrolmententity'] = 'Inscrição';
$string['enrolmentmethod'] = 'Método de inscrição';
$string['entity_dedication'] = 'Dedicação';
$string['excludesessionslessthan'] = 'Excluídas as sessões inferiores a {$a}';
$string['group'] = 'Grupo';
$string['groupentity'] = 'Grupo';
$string['ignore_sessions_limit'] = 'Ignorar limite da sessão';
$string['ignore_sessions_limit_desc'] = 'Remove as sessões mais curtas e qualquer valor menor que este (em minutos) será ignorado no relatório da dedicação.';
$string['lastupdated'] = 'Última atualização: {$a}';
$string['period'] = 'Período entre <em>{$a->mintime}</em> e <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tempo decorrido:</strong> {$a}';
$string['pluginname'] = 'Dedicação';
$string['privacy:metadata'] = 'O módulo Dedicação armazena os tempos que os utilizadores dedicaram às disciplinas.';
$string['privacy:metadata:block_dedication:courseid'] = 'ID da disciplina da dedicação do utilizador';
$string['privacy:metadata:block_dedication:timespent'] = 'Tempo despendido na disciplina';
$string['privacy:metadata:block_dedication:timestart'] = 'Início dos dados recolhidos';
$string['privacy:metadata:block_dedication:userid'] = 'ID do utilizador da dedicação do utilizador';
$string['report_dedication'] = 'Relatório da Dedicação de Ferramenta';
$string['report_timespent'] = 'Relatório do tempo despendido';
$string['session_limit'] = 'Limite da sessão';
$string['session_limit_desc'] = 'Limite de sessão para os filtros da página do relatório.';
$string['sessionduration'] = 'Duração da sessão';
$string['sessiondurationsum'] = 'Duração da sessão (Σ)';
$string['sessionstart'] = 'Início da sessão';
$string['showestimatedtime'] = 'Mostrar aos utilizadores a estimativa do tempo despendido';
$string['showestimatedtime_help'] = 'Esta configuração permite que os utilizadores vejam no bloco a estimativa do tempo despendido.';
$string['timespent_estimation'] = 'Estimativa do seu tempo despendido na disciplina:';
$string['timespentincourse'] = 'Tempo despendido na disciplina';
$string['timespentreport'] = 'Relatório completo';
$string['timespenttasknotrunning'] = 'A tarefa de cálculo do tempo despendido ainda não foi executada.';
$string['totaltimespent'] = '<strong>Total global do tempo despendido na disciplina:</strong> {$a}';
$string['user_dedication_datasource'] = 'Dedicação do utilizador';
$string['userdedication'] = 'Dedicação à disciplina detalhada de <b>{$a}</b>';
$string['viewsessiondurationreport'] = 'Ver relatório da duração da sessão';
