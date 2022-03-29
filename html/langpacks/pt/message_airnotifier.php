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
 * Strings for component 'message_airnotifier', language 'pt', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Gerir dispositivos';
$string['airnotifieraccesskey'] = 'Chave de acesso do Airnotifier';
$string['airnotifierappname'] = 'Nome da aplicação Airnotifier';
$string['airnotifierfielderror'] = 'Remova todos os espaços vazios ou caracteres desnecessários do seguinte campo: {$a}';
$string['airnotifiermobileappname'] = 'Nome da Aplicação móvel';
$string['airnotifierport'] = 'Porta para Airnotifier';
$string['airnotifierurl'] = 'URL para Airnotifier';
$string['checkconfiguration'] = 'Verificar e testar a configuração da notificação push';
$string['configairnotifieraccesskey'] = 'A chave de acesso para usar na ligação ao servidor Airnotifier. Pode obter uma chave de acesso se clicar em "Solicitar chave de acesso" abaixo (apenas sites registados) ou criar uma conta no <a href="https://apps.moodle.com">Portal da Aplicação Moodle</a>.';
$string['configairnotifierappname'] = 'O identificador do nome da aplicação em Airnotifier';
$string['configairnotifiermobileappname'] = 'O identificador exclusivo da Aplicação móvel (geralmente algo como com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'A porta a usar ao ligar ao servidor Nome da aplicação Airnotifier.';
$string['configairnotifierurl'] = 'O URL do servidor a ligar para enviar notificações push.';
$string['configured'] = 'Configurado';
$string['deletecheckdevicename'] = 'Elimine o seu dispositivo: {$a->name}';
$string['deletedevice'] = 'Excluir o dispositivo. Tenha em atenção que uma aplicação pode registar o dispositivo novamente. Se o dispositivo continuar a aparecer, desative-o.';
$string['devicetoken'] = 'Token de Dispositivo';
$string['enableprocessor'] = 'Ativar notificações da Aplicação Móvel';
$string['errorretrievingkey'] = 'Ocorreu um erro durante a recuperação da chave de acesso. O seu site deve estar registado para usar este serviço. Se já está registado, tente atualizar os  seus dados de registo. Como alternativa, pode obter uma chave de acesso se criar uma conta no <a href="https://apps.moodle.com">Portal das Aplicações móveis Moodle</a>.';
$string['keyretrievedsuccessfully'] = 'Chave recuperada com sucesso. Para aceder às estatísticas de uso da aplicação Moodle, crie uma conta no <a href="https://apps.moodle.com">Portal das Aplicações móveis Moodle </a>.';
$string['messageprovidersempty'] = 'Não existem notificações móveis ativadas nas predefinições das notificações.';
$string['messageproviderslow'] = 'Apenas algumas notificações móveis estão ativadas predefinições das notificações.';
$string['moodleappsportallimitswarning'] = 'Tenha em atenção que o número de dispositivos de utilizador que podem receber notificações depende da sua assinatura da Aplicação Moodle. Para mais detalhes, visite o <a href="{$a}" target="_blank">Portal das Aplicações móveis Moodle</a>.';
$string['nodevices'] = 'Nenhum dispositivo registado. Os dispositivos aparecerão automaticamente assim que instalar a Aplicação móvel Moodle e adicionar este site';
$string['nopermissiontomanagedevices'] = 'Não tem permissão para gerir dispositivos.';
$string['notconfigured'] = 'O servidor Airnotifier não foi configurado e, por isso, as mensagens não podem ser enviadas';
$string['notificationsserverconfiguration'] = 'Configuração do servidor de notificações (Airnotifier)';
$string['pluginname'] = 'Mobile';
$string['privacy:appiddescription'] = 'Isto é um identificador da aplicação a ser utilizada.';
$string['privacy:enableddescription'] = 'Se este dispositivo está ativado para airnotifier.';
$string['privacy:metadata:date'] = 'A data em que a mensagem foi enviada.';
$string['privacy:metadata:enabled'] = 'Se o airnotifier do dispositivo está ativo.';
$string['privacy:metadata:externalpurpose'] = 'Esta informação é enviada para um site externo para ser finalmente enviada para o dispositivo móvel do utilizador.';
$string['privacy:metadata:fullmessage'] = 'A mensagem inteira.';
$string['privacy:metadata:notification'] = 'Se esta mensagem é uma notificação';
$string['privacy:metadata:smallmessage'] = 'A secção da mensagem';
$string['privacy:metadata:subject'] = 'A linha de assunto da mensagem';
$string['privacy:metadata:tableexplanation'] = 'Informação Airnotifier  do dispositivo é armazena aqui.';
$string['privacy:metadata:userdeviceid'] = 'O ID ligado ao dispositivo móvel do utilizador';
$string['privacy:metadata:userfromfullname'] = 'O nome completo do utilizador que enviou a mensagem.';
$string['privacy:metadata:userfromid'] = 'O ID do utilizador autor da mensagem.';
$string['privacy:metadata:userid'] = '.O ID do utilizador que enviou a mensagem';
$string['privacy:metadata:username'] = 'O nome de utilizador do utilizador.';
$string['privacy:metadata:usersubsystem'] = 'O módulo está ligado ao subsistema do utilizador.';
$string['privacy:subcontext'] = 'Mensagem Airnotifier';
$string['requestaccesskey'] = 'Solicitar chave de acesso';
$string['sendtest'] = 'Enviar notificação push de teste para os meus dispositivos';
$string['sendtestconfirmation'] = 'Uma notificação push de teste será enviada para os dispositivos que usa para ligar-se a este site. Certifique-se de que os seus dispositivos estão ligados à Internet e que a Aplicação móvel não está em execução (as notificações push só são exibidas quando recebidas em segundo plano).';
$string['serverconnectivityerror'] = 'Este site não é capaz de se ligar ao servidor de notificações {$a}';
$string['showhide'] = 'Ativar/desativar o dispositivo.';
$string['sitemustberegistered'] = 'Para utilizar a instância pública Airnotifier deve registar o seu site junto do Moodle. Como alternativa, pode obter uma chave de acesso se criar uma conta no <a href="https://apps.moodle.com">Portal das Aplicações móveis Moodle</a>.';
$string['unknowndevice'] = 'Dispositivo desconhecido';
$string['userdevices'] = 'Dispositivos de utilizador';
