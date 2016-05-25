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
 * Strings for component 'tool_monitor', language 'pt', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Adicionar uma nova regra';
$string['allevents'] = 'Todos os eventos';
$string['allmodules'] = 'Todas as instâncias';
$string['area'] = 'Área';
$string['areatomonitor'] = 'Área a monitorizar';
$string['cachedef_eventsubscriptions'] = 'Isto armazena a lista de subscrição de eventos para disciplinas individuais';
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
$string['enablehelp_help'] = 'A monitorização de eventos tem de estar ativa para que possa criar e subscrever regras. Note que ativar a monitorização de eventos pode afetar o desempenho do site.';
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
$string['frequency_help'] = 'O número de eventos dentro de um determinado período de tempo necessário para uma mensagem de notificação a ser enviada.';
$string['inminutes'] = 'em minutos';
$string['invalidmodule'] = 'Módulo inválido';
$string['manage'] = 'Gerir';
$string['managerules'] = 'Regras de monitorização de eventos';
$string['manageruleslink'] = 'Pode gerir as regras da página \'{$a}\'.';
$string['managesubscriptions'] = 'Monitorização de eventos';
$string['managesubscriptionslink'] = 'Pode subscrever as regras da página {$a}.';
$string['messageprovider:notification'] = 'Notificações de subscrições de regras';
$string['messagetemplate'] = 'Mensagem de notificação';
$string['messagetemplate_help'] = 'Uma mensagem de notificação é enviada aos subscritores assim que o limite de notificação tenha sido atingido. A notificação pode incluir qualquer um, ou todos, os seguintes espaços reservados:
<br /><br />
* Hiperligação para a localização do evento {link}<br />
* Hiperligação para a área de monitorização {modulelink}<br />
* Nome da regra {rulename}<br />
* Descrição {description}<br />
* Evento {eventname}';
$string['moduleinstance'] = 'Instância';
$string['monitordisabled'] = 'A monitorização de eventos está atualmente desativada.';
$string['monitorenabled'] = 'A monitorização de eventos está atualmente ativada.';
$string['monitor:managerules'] = 'Gerir regras de monitorização de eventos';
$string['monitor:managetool'] = 'Ativar/desativar monitorização de eventos';
$string['monitor:subscribe'] = 'Subscrever regras de monitorização de eventos';
$string['nopermission'] = 'Sem permissão';
$string['norules'] = 'Não existem regras de monitorização de eventos.';
$string['pluginname'] = 'Monitor de eventos';
$string['processevents'] = 'Eventos de processo';
$string['ruleareyousure'] = 'Tem a certeza que pretende apagar a regra "{$a}"?';
$string['ruleareyousureextra'] = 'Número de subscrições para esta regra que também podem ser apagadas: {$a}';
$string['rulecopysuccess'] = 'Regra duplicada com sucesso';
$string['ruledeletesuccess'] = 'Regra apagada com sucesso';
$string['rulehelp'] = 'Detalhes da regra';
$string['rulehelp_help'] = 'Esta regra deteta quando o evento \'{$a->eventname}\' em \'{$a->eventcomponent}\' foi desencadeado {$a->frequency} vez(es) em {$a->minutes} minuto(s).';
$string['rulename'] = 'Nome da regra';
$string['rulenopermissions'] = 'Não tem permissões para "{$a} uma regra"';
$string['rulescansubscribe'] = 'Regras que pode subscrever';
$string['selectacourse'] = 'Selecione um contexto:';
$string['selectcourse'] = 'Aceda a este relatório ao nível da disciplina para obter uma lista de possíveis módulos';
$string['subareyousure'] = 'Tem a certeza de que pretende excluir a subscrição para a regra "{$a}"?';
$string['subcreatesuccess'] = 'Subscrição criada com sucesso';
$string['subdeletesuccess'] = 'Subscrição removida com sucesso';
$string['subhelp'] = 'Detalhes da subscrição';
$string['subhelp_help'] = 'Esta subscrição deteta quando o evento \'{$a->eventname}\' foi desencadeado em \'{$a->moduleinstance}\' {$a->frequency}  vez(es) em {$a->minutes} minuto(s).';
$string['subscribeto'] = 'Subscrever a regra "{$a}"';
$string['taskcleanevents'] = 'Remove todos os eventos desnecessários do monitor de eventos';
$string['unsubscribe'] = 'Cancelar subscrição';
