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
 * Strings for component 'tool_task', language 'pt', version '3.8'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Voltar para as tarefas agendadas';
$string['blocking'] = 'Bloqueio';
$string['cannotfindthepathtothecli'] = 'Não foi possível encontrar o executável CLI do PHP e por isso a execução da tarefa foi cancelada. Defina a configuração \'Caminho para o CLI do PHP\' em Administração do Site / Servidor / Caminhos do sistema.';
$string['clearfaildelay_confirm'] = 'Tem a certeza de que pretende limpar o atraso de falha para a tarefa \'{$a}\'? Depois de limpar o atraso, a tarefa será executada de acordo com a sua programação normal.';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Core (Base)';
$string['default'] = 'Configurações predefinidas';
$string['disabled'] = 'Desativada';
$string['disabled_help'] = 'As tarefas agendadas mas desativadas não são executadas a partir do cron, no entanto, estas podem continuar a ser executadas manualmente através da ferramenta CLI.';
$string['edittaskschedule'] = 'Editar agendamento de tarefa: {$a}';
$string['enablerunnow'] = 'Permitir \'Executar agora\' para tarefas agendadas';
$string['enablerunnow_desc'] = 'Permite que os administradores executem imediatamente uma tarefa agendada, em vez de esperar que ela seja executada conforme o programado. Este recurso requer que o \'Caminho para o CLI do PHP\' (pathtophp) seja definido nos caminhos do sistema. A tarefa é executada no servidor web, por isso pode querer desativar este recurso para evitar potenciais problemas de desempenho.';
$string['faildelay'] = 'Execução adiada';
$string['lastruntime'] = 'Última execução';
$string['nextruntime'] = 'Próxima execução';
$string['plugindisabled'] = 'Módulo desativado';
$string['pluginname'] = 'Configuração da tarefa agendada';
$string['privacy:metadata'] = 'O módulo Configuração da tarefa agendada não armazena dados pessoais.';
$string['resettasktodefaults'] = 'Restaurar agendamento de tarefa para as configurações predefinidas';
$string['resettasktodefaults_help'] = 'Se ativar esta opção, irá descartar quaisquer alterações locais e reverter o agendamento desta tarefa para as configurações predefinidas.';
$string['runnow'] = 'Executar agora';
$string['runnow_confirm'] = 'Tem a certeza de que pretende executar agora a tarefa \'{$a}\'? A tarefa será executada no servidor Web e pode levar algum tempo até estar concluída.';
$string['runpattern'] = 'Executar ascendente';
$string['scheduledtaskchangesdisabled'] = 'As alterações à lista de tarefas agendadas foram impedidas na configuração do Moodle';
$string['scheduledtasks'] = 'Tarefas agendadas';
$string['taskdisabled'] = 'Tarefa desativada';
$string['tasklogs'] = 'Registos da tarefa';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Campo “Dia” para agendamento de tarefa. O campo usa o mesmo formato que o cron Unix. Alguns exemplos:

* <strong>*</strong> - Todos os dias
* <strong>*/2</strong> - No segundo dia de todos os meses
* <strong>1</strong> - No primeiro dia de todos os meses
* <strong>1,15</strong> - No 1º e 15º dia de todos os meses';
$string['taskscheduledayofweek'] = 'Dia da semana';
$string['taskscheduledayofweek_help'] = 'Campo “Dia da semana” para agendamento de tarefa. O campo usa o mesmo formato que o cron Unix. Alguns exemplos:

* <strong>*</strong> - Todos os dias da semana
* <strong>0</strong> - Todos os domingos
* <strong>6</strong> - Todos os sábados
* <strong>1,5</strong> - Todas as segundas e sextas-feiras';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo “Hora” para agendamento de tarefa. O campo usa o mesmo formato que o cron unix. Alguns exemplos:

* <strong>*</strong> - A todas as horas
* <strong>*/2</strong> - A cada 2 horas
* <strong>2-10</strong> - A todas as horas das 2:00 às 10:00 (inclusive)
* <strong>2,6,9</strong> - Às 2:00, 6:00 e 9:00 horas';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo “Minuto” para agendamento de tarefa. O campo usa o mesmo formato que o cron Unix. Alguns exemplos:

* <strong>*</strong> - A todos os minutos
* <strong>*/5</strong> - A cada 5 minutos
* <strong>2-10</strong> - A todos os minutos entre os 2 e os 10 minutos após a hora (inclusive)
* <strong>2,6,9</strong> - Aos 2, 6 e 9 minutos após a hora';
$string['taskschedulemonth'] = 'Mês';
$string['taskschedulemonth_help'] = 'Campo “Mês” para agendamento de tarefa. O campo usa o mesmo formato que o cron Unix. Alguns exemplos:

* <strong>*</strong> - Todos os meses
* <strong>*/2</strong> - Todos os segundos meses
* <strong>1</strong> - Todos os meses de janeiro
* <strong>1,5</strong> - Todos os meses de janeiro e maio';
$string['viewlogs'] = 'Ver registos de {$a}';
