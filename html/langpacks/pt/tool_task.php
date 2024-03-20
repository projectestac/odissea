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
 * Strings for component 'tool_task', language 'pt', version '4.1'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'A fila de tarefas ad hoc está vazia.';
$string['adhocqueueold'] = 'A tarefa mais antiga tem {$a->age} o que é superior a {$a->max}';
$string['adhocqueuesize'] = 'Existem {$a} tarefas na fila de espera da tarefa ad hoc';
$string['adhoctaskid'] = 'ID da tarefa ad hoc: {$a}';
$string['adhoctasks'] = 'Tarefas ad hoc';
$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Voltar para as tarefas agendadas';
$string['blocking'] = 'Bloqueio';
$string['cannotfindthepathtothecli'] = 'Não foi possível encontrar o executável CLI do PHP e, por isso, a execução da tarefa foi cancelada. Defina a configuração \'Caminho para o CLI do PHP\' em Administração do Site / Servidor / Caminhos do sistema.';
$string['checkadhocqueue'] = 'Fila de tarefas ad hoc';
$string['checkcronrunning'] = 'Execução do cron';
$string['checkmaxfaildelay'] = 'Atraso máximo das falhas das tarefas';
$string['classname'] = 'Nome da classe';
$string['clearfaildelay_confirm'] = 'Tem a certeza de que pretende limpar o atraso de falha para a tarefa \'{$a}\'? Depois de limpar o atraso, a tarefa será executada de acordo com a sua programação normal.';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Core (Base)';
$string['crondisabled'] = 'O cron está desativado. Nenhuma nova tarefa será iniciada. O sistema não funcionará corretamente até que seja ativado novamente.';
$string['cronok'] = 'O script \'cron.php\' é executado frequentemente';
$string['default'] = 'Configurações predefinidas';
$string['defaultx'] = 'Predefinição: {$a}';
$string['disabled'] = 'Desativada';
$string['disabled_help'] = 'As tarefas agendadas mas desativadas não são executadas a partir do cron, no entanto, estas podem continuar a ser executadas manualmente através da ferramenta CLI.';
$string['edittaskschedule'] = 'Editar agendamento da tarefa: {$a}';
$string['enablerunnow'] = 'Permitir \'Executar agora\' para tarefas agendadas';
$string['enablerunnow_desc'] = 'Permite que os administradores executem imediatamente uma tarefa agendada, em vez de esperar que ela seja executada conforme o programado. Este recurso requer que o \'Caminho para a CLI do PHP\' (pathtophp) seja definido nos caminhos do sistema. A tarefa é executada no servidor web, no entanto, pode querer desativar esta funcionalidade para evitar potenciais problemas de desempenho.';
$string['faildelay'] = 'Execução adiada';
$string['fromcomponent'] = 'Componente: {$a}';
$string['hostname'] = 'Nome do servidor';
$string['lastcronstart'] = 'A última execução do cron foi há {$a}.';
$string['lastruntime'] = 'Última execução';
$string['lastupdated'] = 'Última atualização: {$a}.';
$string['nextruntime'] = 'Próxima execução';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Módulo desativado';
$string['pluginname'] = 'Configuração da tarefa agendada';
$string['privacy:metadata'] = 'O módulo Configuração da tarefa agendada não armazena dados pessoais.';
$string['resettasktodefaults'] = 'Restaurar agendamento de tarefa para as configurações predefinidas';
$string['resettasktodefaults_help'] = 'Se ativar esta opção, irá descartar quaisquer alterações locais e reverter o agendamento desta tarefa para as configurações predefinidas.';
$string['runagain'] = 'Executar novamente';
$string['runningtasks'] = 'Tarefas em execução';
$string['runnow'] = 'Executar agora';
$string['runnow_confirm'] = 'Tem a certeza de que pretende executar agora a tarefa \'{$a}\'? A tarefa será executada no servidor web e pode levar algum tempo até estar concluída.';
$string['runpattern'] = 'Executar ascendente';
$string['scheduled'] = 'Agendada';
$string['scheduledtaskchangesdisabled'] = 'As alterações à lista de tarefas agendadas foram impedidas na configuração do Moodle';
$string['scheduledtasks'] = 'Tarefas agendadas';
$string['started'] = 'Iniciada';
$string['taskdisabled'] = 'Tarefa desativada';
$string['taskfailures'] = 'Existe(m) {$a} tarefa(s) com falha';
$string['tasklogs'] = 'Registos das tarefa';
$string['tasknofailures'] = 'Não existem tarefas com falhas.';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Campo “Dia” para agendamento de tarefa. O campo usa o mesmo formato que o cron Unix. Alguns exemplos:

* <strong>*</strong> - Todos os dias
* <strong>*/2</strong> - No segundo dia de todos os meses
* <strong>1</strong> - No primeiro dia de todos os meses
* <strong>1,15</strong> - No 1.º e 15.º dia de todos os meses';
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
