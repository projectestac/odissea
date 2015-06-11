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
 * Strings for component 'tool_task', language 'pt', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Bloqueio';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Core';
$string['default'] = 'Predefinida';
$string['disabled'] = 'Desativada';
$string['disabled_help'] = 'Tarefas agendadas desativadas não são executadas a partir do cron, no entanto, estas podem continuar a ser executadas manualmente através da ferramenta CLI.';
$string['edittaskschedule'] = 'Editar agendamento de tarefa: {$a}';
$string['faildelay'] = 'Falha da tarefa em atraso';
$string['lastruntime'] = 'Última execução';
$string['nextruntime'] = 'Próxima execução';
$string['plugindisabled'] = 'Plugin desativado';
$string['pluginname'] = 'Configuração da tarefa agendada';
$string['resettasktodefaults'] = 'Restaurar agendamento de tarefa para as configurações predefinidas';
$string['resettasktodefaults_help'] = 'Isto irá descartar quaisquer alterações locais e reverter o agendamento desta tarefa para as configurações predefinidas.';
$string['scheduledtaskchangesdisabled'] = 'As alterações à lista de tarefas agendadas foram impedidas na configuração do Moodle';
$string['scheduledtasks'] = 'Tarefas agendadas';
$string['taskdisabled'] = 'Tarefa desativada';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Campo “dia do mês” para agendamento de tarefa. O campo usa o mesmo formato que unix cron. Alguns exemplos:<br/><ul><li><strong>*</strong> Todos os dias</li><li><strong>*/2</strong> Todos os 2ºs dias</li><li><strong>1</strong> O primeiro dia de todos os meses</li><li><strong>1,15</strong> O 1º e 15º dias de todos os meses</li></ul>';
$string['taskscheduledayofweek'] = 'Dia da semana';
$string['taskscheduledayofweek_help'] = 'Campo “dia da semana” para agendamento de tarefa. O campo usa o mesmo formato que unix cron. Alguns exemplos:<br/><ul><li><strong>*</strong> Todos os dias </li><li><strong>0</strong> Todos os domingos</li><li><strong>6</strong> Todos os sábados</li><li><strong>1,5</strong> Todas as segundas e sextas-feiras</li></ul>';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo “hora” para agendamento de tarefa. O campo usa o mesmo formato que unix cron. Alguns exemplos: <br/><ul><li><strong>*</strong> A todas as horas</li><li><strong>*/2</strong> A cada 2 horas</li><li><strong>2-10</strong> A todas as horas das 2:00 às 10:00 (inclusive)</li><li><strong>2,6,9</strong>Às 2:00, 6:00 and 9:00</li></ul>';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo “minuto” para agendamento de tarefa. O campo usa o mesmo formato que unix cron. Alguns exemplos: <br/><ul><li><strong>*</strong> A todos os minutos</li><li><strong>*/5</strong> A cada 5 minutos</li><li><strong>2-10</strong> A todos os minutos entre os 2 e os 10 após a hora (inclusive)</li><li><strong>2,6,9</strong>Aos 2, 6 e 9 minutos após a hora</li></ul>';
$string['taskschedulemonth'] = 'Mês';
$string['taskschedulemonth_help'] = 'Campo “mês” para agendamento de tarefa. O campo usa o mesmo formato que unix cron. Alguns exemplos:<br/><ul><li><strong>*</strong> Todos os meses</li><li><strong>*/2</strong> Todos os segundos meses</li><li><strong>1</strong> Todos os meses de janeiro</li><li><strong>1,5</strong> Todos os meses de janeiro  e maio</li></ul>';
