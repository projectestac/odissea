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
 * Strings for component 'tool_monitor', language 'pt', version '4.1'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Adicionar uma nova regra';
$string['allevents'] = 'Todos os eventos';
$string['allmodules'] = 'Todas as instâncias';
$string['area'] = 'Área';
$string['areatomonitor'] = 'Área a monitorizar';
$string['cachedef_eventsubscriptions'] = 'Armazena a lista de subscrição de eventos para cada disciplina';
$string['contactadmin'] = 'Contacte o administrador para ativar esta funcionalidade.';
$string['core'] = 'Core';
$string['currentsubscriptions'] = 'As suas subscrições atuais';
$string['defaultmessagetemplate'] = 'Nome da regra: {rulename}<br />Descrição: {description}<br />Nome do evento: {eventname}';
$string['deleterule'] = 'Apagar regra';
$string['deletesubscription'] = 'Apagar subscrições';
$string['description'] = 'Descrição:';
$string['disablefieldswarning'] = 'Alguns campos não podem ser editados uma vez que esta regra já tem subscrições.';
$string['duplicaterule'] = 'Duplicar regra';
$string['editrule'] = 'Editar regra';
$string['enablehelp'] = 'Ativar/desativar monitorização de eventos';
$string['enablehelp_help'] = 'A monitorização de eventos tem de estar ativa para que possa criar e subscrever regras. Tenha em atenção que ativar a monitorização de eventos pode afetar o desempenho do site.';
$string['errorincorrectevent'] = 'Por favor, selecione um evento relacionado com o módulo selecionado';
$string['event'] = 'Evento';
$string['eventnotfound'] = 'Evento não encontrado';
$string['eventrulecreated'] = 'Regra criada';
$string['eventruledeleted'] = 'Regra apagada';
$string['eventruleupdated'] = 'Regra atualizada';
$string['eventsubcreated'] = 'Subscrição criada';
$string['eventsubcriteriamet'] = 'Critérios de subscrição reunidos';
$string['eventsubdeleted'] = 'Subscrição apagada';
$string['freqdesc'] = '{$a->freq} vez(es) em {$a->mins} minuto(s)';
$string['frequency'] = 'Limite de notificação';
$string['frequency_help'] = 'O número necessário de eventos de um determinado período de tempo para que seja enviada uma mensagem de notificação.';
$string['inminutes'] = 'em minutos';
$string['invalidmodule'] = 'Módulo inválido';
$string['manage'] = 'Gerir';
$string['managerules'] = 'Regras de monitorização de eventos';
$string['manageruleslink'] = 'Pode gerir as regras da página \'{$a}\'.';
$string['managesubscriptions'] = 'Monitorização de eventos';
$string['managesubscriptionslink'] = 'Pode subscrever as regras da página {$a}.';
$string['messageprovider:notification'] = 'Notificações de subscrições de regras';
$string['messagetemplate'] = 'Mensagem de notificação';
$string['messagetemplate_help'] = 'Uma mensagem de notificação é enviada aos subscritores assim que o limite de notificação seja atingido. A notificação pode incluir qualquer um, ou todos, os seguintes espaços reservados:

* Hiperligação para a localização do evento {link}
* Hiperligação para a área monitorizada {modulelink}
* Nome da regra {rulename}
* Descrição {description}
* Evento {eventname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Instância';
$string['monitor:managerules'] = 'Gerir regras de monitorização de eventos';
$string['monitor:managetool'] = 'Ativar/desativar monitorização de eventos';
$string['monitor:subscribe'] = 'Subscrever regras de monitorização de eventos';
$string['monitordisabled'] = 'A monitorização de eventos está atualmente desativada.';
$string['monitorenabled'] = 'A monitorização de eventos está atualmente ativada.';
$string['norules'] = 'Não existem regras de monitorização de eventos.';
$string['pluginname'] = 'Monitor de eventos';
$string['privacy:createdrules'] = 'Regras de monitorização de eventos que criei';
$string['privacy:metadata:description'] = 'Descrição da regra';
$string['privacy:metadata:eventname'] = 'Nome completo do evento';
$string['privacy:metadata:frequency'] = 'Frequência de notificações';
$string['privacy:metadata:historysummary'] = 'Armazena o histórico de notificações do envio de mensagens';
$string['privacy:metadata:inactivedate'] = 'Período de tempo, em dias, depois do qual uma subscrição inativa será removida completamente';
$string['privacy:metadata:lastnotificationsent'] = 'Último envio da notificação para esta subscrição';
$string['privacy:metadata:messagesummary'] = 'Notificações foram enviadas para o sistema de mensagens.';
$string['privacy:metadata:name'] = 'Nome da regra';
$string['privacy:metadata:plugin'] = 'Nome Frankenstlye do módulo';
$string['privacy:metadata:rulessummary'] = 'Armazena regras de monitorização';
$string['privacy:metadata:subscriptionssummary'] = 'Armazenamento de subscrição de utilizadores para várias regras';
$string['privacy:metadata:template'] = 'Modelo de mensagem';
$string['privacy:metadata:timecreatedrule'] = 'Quando esta regra foi criada';
$string['privacy:metadata:timecreatedsub'] = 'Quando esta subscrição foi criada';
$string['privacy:metadata:timemodifiedrule'] = 'Quando esta regra foi modificada';
$string['privacy:metadata:timesent'] = 'Quando a mensagem foi enviada';
$string['privacy:metadata:timewindow'] = 'Tempo da janela em segundos';
$string['privacy:metadata:userid'] = 'O ID do utilizador que criou a regra';
$string['privacy:metadata:useridhistory'] = 'O ID do utilizador para quem esta notificação foi enviada';
$string['privacy:metadata:useridsub'] = 'O ID do subscritor.';
$string['privacy:subscriptions'] = 'A minha monitorização de eventos de subscrição';
$string['processevents'] = 'Eventos de processo';
$string['ruleareyousure'] = 'Tem a certeza de que pretende apagar a regra "{$a}"?';
$string['ruleareyousureextra'] = 'Número de subscrições para esta regra que também podem ser apagadas: {$a}';
$string['rulecopysuccess'] = 'Regra duplicada com sucesso';
$string['ruledeletesuccess'] = 'Regra apagada com sucesso';
$string['rulehelp'] = 'Detalhes da regra';
$string['rulehelp_help'] = 'Esta regra deteta quando o evento \'{$a->eventname}\' em \'{$a->eventcomponent}\' foi desencadeado {$a->frequency} vez(es) em {$a->minutes} minuto(s).';
$string['rulename'] = 'Nome da regra';
$string['rulenopermission'] = 'Não tem permissão para subscrever qualquer evento.';
$string['rulenopermissions'] = 'Não tem permissões para "{$a} uma regra"';
$string['rulescansubscribe'] = 'Regras que pode subscrever';
$string['selectacourse'] = 'Selecione um contexto:';
$string['selectcourse'] = 'Aceda a este relatório ao nível da disciplina para obter uma lista de possíveis módulos';
$string['subareyousure'] = 'Tem a certeza de que pretende excluir a subscrição para a regra "{$a}"?';
$string['subcreatesuccess'] = 'Subscrição criada com sucesso';
$string['subdeletesuccess'] = 'Subscrição removida com sucesso';
$string['subhelp'] = 'Detalhes da subscrição';
$string['subhelp_help'] = 'Esta subscrição deteta quando o evento \'{$a->eventname}\' foi desencadeado em \'{$a->moduleinstance}\' {$a->frequency}  vez(es) por {$a->minutes} minuto(s).';
$string['subscribeto'] = 'Subscrever a regra "{$a}"';
$string['taskchecksubscriptions'] = 'Ativação/desativação de regras inválidas de subscrições';
$string['taskcleanevents'] = 'Remoção de eventos do monitor de eventos';
$string['unsubscribe'] = 'Cancelar subscrição';
