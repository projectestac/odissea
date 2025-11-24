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
 * Strings for component 'sms', language 'pt', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['countrycode'] = 'Código do país predefinido';
$string['countrycode_help'] = 'O código do país será adicionado aos números de telefone se os utilizadores não indicarem o seu código do país. Indique o número sem o símbolo \'+\' inicial.';
$string['createnewgateway'] = 'Criar novo gateway de SMS';
$string['delete_sms_gateway'] = 'Apagar gateway de SMS';
$string['delete_sms_gateway_confirmation'] = 'Irá apagar o gateway de SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Editar gateway de SMS {$a->gateway}';
$string['gateway'] = 'Gateway';
$string['gateway_name'] = 'Nome do gateway';
$string['manage_sms_gateways'] = 'Gerir gateways de SMS';
$string['phonenumbernotvalid'] = 'Formato do número de telemóvel não reconhecido: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Armazena mensagens enviadas via SMS';
$string['privacy:metadata:sms_messages:content'] = 'O texto da mensagem';
$string['privacy:metadata:sms_messages:id'] = 'O ID da mensagem';
$string['privacy:metadata:sms_messages:recipient'] = 'O número de telemóvel para o qual a mensagem foi enviada';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'O utilizador para quem a mensagem foi enviada, se conhecido';
$string['privacy:metadata:sms_messages:status'] = 'O estado da mensagem';
$string['privacy:metadata:sms_messages:timecreated'] = 'A data/hora a que a mensagem foi criada';
$string['privacy:sms:sensitive_not_shown'] = 'O conteúdo desta mensagem não foi armazenado porque foi marcado como contendo conteúdo sensível.';
$string['select_sms_gateways'] = 'Fornecedor de gateway de SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Não é possível apagar o gateway de SMS. O gateway está em utilização ou existe um problema na base de dados. Verifique se o gateway está ativo ou contacte o administrador da base de dados para obter ajuda.';
$string['sms_gateway_deleted'] = 'Gateway de SMS {$a->gateway} apagado';
$string['sms_gateway_disable_failed'] = 'Não é possível desativar o gateway de SMS. O gateway está em utilização ou existe um problema na base de dados. Verifique se o gateway está ativo ou contacte o administrador da base de dados para obter ajuda.';
$string['sms_gateways'] = 'Gateways de SMS';
$string['sms_gateways_info'] = 'Criar e gerir gateways de SMS para enviar mensagens SMS a partir do seu site.';
$string['status:gateway_failed'] = 'O gateway não conseguiu enviar a mensagem';
$string['status:gateway_not_available'] = 'O gateway não está disponível para enviar a mensagem';
$string['status:gateway_queued'] = 'A mensagem está em fila de espera para ser enviada pelo gateway';
$string['status:gateway_rejected'] = 'O gateway rejeitou a mensagem';
$string['status:gateway_sent'] = 'A mensagem foi enviada pelo gateway';
$string['status:message_over_size'] = 'A mensagem é demasiado grande para ser enviada pelo gateway';
$string['status:unknown'] = 'Não é possível determinar o estado da mensagem';
