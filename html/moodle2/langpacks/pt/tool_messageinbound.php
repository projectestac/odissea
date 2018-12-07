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
 * Strings for component 'tool_messageinbound', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nome da classe';
$string['component'] = 'Componente';
$string['configmessageinboundhost'] = 'O endereço em que o Moodle deve verificar o servidor de mail. Para especificar uma porta não-predefinida, pode usar [server]:[port], como por exemplo o formato mail.example.com:587. Se deixar isto em branco, o Moodle vai usar a porta predefinida para o tipo de servidor de mail que especificou.';
$string['defaultexpiration'] = 'Endereço predefinido de período de validade';
$string['defaultexpiration_help'] = 'Quando um endereço de email é gerado pelo handler, pode ser definido para expirar automaticamente após um período de tempo e, por isso, já não pode ser usado. É aconselhável definir um período de validade.';
$string['description'] = 'Descrição';
$string['domain'] = 'Domínio de Email';
$string['edit'] = 'Editar';
$string['edithandler'] = 'Editar configurações para o handler de {$a}';
$string['editinghandler'] = 'A editar {$a}';
$string['enabled'] = 'Ativado';
$string['fixedenabled_help'] = 'Não é possível alterar o estado deste handler. Isto pode dever-se ao facto do handler ser requerido por outros handlers.';
$string['fixedvalidateaddress'] = 'Validar endereço de remetente';
$string['fixedvalidateaddress_help'] = 'Não é possível alterar o endereço de validação deste handler. Isto pode dever-se ao facto do handler requerer uma configuração específica.';
$string['handlerdisabled'] = 'O handler de email que tentou contactar foi desativado. Não é possível processar a mensagem neste momento.';
$string['incomingmailconfiguration'] = 'Configuração de entrada de e-mails';
$string['incomingmailserversettings'] = 'Definições do servidor de entrada de e-mails';
$string['incomingmailserversettings_desc'] = 'O Moodle é capaz de ligar a servidores IMAP devidamente configurados. Pode especificar aqui as definições usadas para ligar o seu servidor IMAP.';
$string['invalidrecipientdescription'] = 'A mensagem "{$a->subject}" não pôde ser autenticada, pois foi enviada a partir de um endereço de email diferente do que consta no seu perfil de utilizador.';
$string['invalidrecipientdescriptionhtml'] = 'A mensagem "{$a->subject}" não pôde ser autenticada, pois foi enviada a partir de um endereço de email diferente do que consta do seu perfil de utilizador. Para que a mensagem seja autenticada, deverá responder a esta mensagem.';
$string['invalidrecipientfinal'] = 'A mensagem "{$a->subject}" não pôde ser autenticada. Verifique se está a enviar a mensagem a partir do mesmo endereço de email que consta no seu perfil de utilizador.';
$string['invalid_recipient_handler'] = 'Se uma mensagem válida é recebida mas o remetente não pode ser autenticado, a mensagem é armazenada no servidor de email e o utilizador é contactado usando o endereço de email que consta no seu perfil de utilizador. O utilizador terá assim oportunidade de responder para confirmar a autenticidade da mensagem original.

Este handler processa essas respostas.

Não é possível desativar a verificação do remetente deste handler porque o utilizador pode responder a partir de um endereço de email incorreto se a configuração do seu cliente de email estiver incorreta.';
$string['invalid_recipient_handler_name'] = 'Recipiente de handler inválido';
$string['mailbox'] = 'Nome da caixa de correio';
$string['mailboxconfiguration'] = 'Configuração da caixa de correio';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Configurações de email';
$string['message_handlers'] = 'Handlers de Mensagem';
$string['messageinbound'] = 'Mensagem Inbound';
$string['messageinboundenabled'] = 'Ativar o processo de entrada de email';
$string['messageinboundenabled_desc'] = 'O processo de entrada de email tem de ser ativado por forma a que as mensagens sejam enviadas com a informação adequada.';
$string['messageinboundgeneralconfiguration'] = 'Configuração geral';
$string['messageinboundgeneralconfiguration_desc'] = 'O processamento de entrada de mensagens permite-lhe receber e processar e-mails dentro do Moodle. Isto pode ser aplicado em vários casos, nomeadamente para enviar respostas a tópicos de fórum por e-mail ou adicionar ficheiros aos ficheiros privados do utilizador.';
$string['messageinboundhost'] = 'Servidor de entrada de email';
$string['messageinboundhostpass'] = 'Senha';
$string['messageinboundhostpass_desc'] = 'Esta é a senha que o seu fornecedor de serviços terá fornecido para se autenticar na sua conta de e-mail.';
$string['messageinboundhostssl'] = 'Usar SSL';
$string['messageinboundhostssl_desc'] = 'Alguns servidores de mail suportam um nível adicional de segurança ao encriptar a comunicação entre o Moodle e o seu servidor. Se for esse o caso do seu servidor, recomendamos a utilização desta encriptação SSL.';
$string['messageinboundhosttype'] = 'Tipo de servidor';
$string['messageinboundhostuser'] = 'Nome de utilizador';
$string['messageinboundhostuser_desc'] = 'Este é o nome de utilizador que o seu fornecedor de serviços terá fornecido para se autenticar na sua conta de e-mail.';
$string['messageinboundmailboxconfiguration_desc'] = 'Quando as mensagens são enviadas, elas encaixam-se no formato \'address+data@example.com\'. Para gerar de forma confiável endereços a partir do Moodle, por favor especifique separadamente o endereço que normalmente usaria antes do sinal \'@\', e o domínio depois do sinal \'@\'. Por exemplo, o nome da caixa de correio no exemplo seria "address", e o domínio de email seria "example.com". Deverá usar uma conta de email dedicada para este propósito.';
$string['messageprocessingerror'] = 'Enviou recentemente um email com o assunto "{$a->subject}", mas infelizmente este não pôde ser processado.

Os detalhes do erro encontram-se indicados abaixo.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Enviou recentemente um email com o assunto "{$a->subject}", mas infelizmente este não pôde ser processado.</p>
<p>Os detalhes do erro encontram-se indicados abaixo.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'O email "{$a->subject}" não pôde ser processado. O erro surge tal como descrito: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'O email "{$a->subject}" não pôde ser processado. Contacte o administrador do site para mais informação.';
$string['messageprocessingsuccess'] = '{$a->plain}

Se não pretende receber mais notificações, pode editar as suas preferências pessoais de mensagem ao aceder a {$a->messagepreferencesurl} no seu navegador.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>If you do not wish to receive these notifications in the future, you can <a href="{$a->messagepreferencesurl}">edit your personal messaging preferences</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Mensagem para confirmar que uma mensagem de entrada veio de si';
$string['messageprovider:messageprocessingerror'] = 'Aviso quando uma mensagem de entrada não pôde ser processada';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmação de que a mensagem foi processada com sucesso';
$string['name'] = 'Nome';
$string['noencryption'] = 'Desligado - Sem encriptação';
$string['noexpiry'] = 'Sem período de validade';
$string['oldmessagenotfound'] = 'Tentou autenticar uma mensagem manualmente, mas a mensagem não foi encontrada - ou já foi processada ou a mensagem expirou.';
$string['oneday'] = 'Um dia';
$string['onehour'] = 'Uma hora';
$string['oneweek'] = 'Uma semana';
$string['oneyear'] = 'Um ano';
$string['pluginname'] = 'Configuração de mensagem de entrada';
$string['privacy:metadata:coreuserkey'] = 'Chaves de utilizador para validar email recebido';
$string['privacy:metadata:messagelist'] = 'Um lista de identificadores de mensagem que falharam na validação e exigem autorização';
$string['privacy:metadata:messagelist:address'] = 'O endereço para o qual foi enviado o email';
$string['privacy:metadata:messagelist:messageid'] = 'O ID da mensagem';
$string['privacy:metadata:messagelist:timecreated'] = 'A hora em que o registo foi feito';
$string['privacy:metadata:messagelist:userid'] = 'O ID do utilizador que precisa de aprovar a mensagem';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validar endereço do remetente';
$string['ssl'] = 'SSL (Autodetetar versão de SSL)';
$string['sslv2'] = 'SSLv2 (Forçar Versão 2 de SSL)';
$string['sslv3'] = 'SSLv3 (Forçar Versão 3 de SSL)';
$string['taskcleanup'] = 'Limpeza de e-mails recebidos não-verificados';
$string['taskpickup'] = 'Captação de e-mails recebidos';
$string['tls'] = 'TLS (TLS; iniciado através do nível de protocolo de negociação sobre canal não encriptado; forma recomendada de iniciar a conexão segura)';
$string['tlsv1'] = 'LSv1 (TLS versão direta 1.x ligação ao servidor)';
$string['validateaddress'] = 'Validar endereço de e-mail do remetente';
$string['validateaddress_help'] = 'Quando uma mensagem é recebida de um utilizador, o Moodle tenta validar a mensagem através da comparação do endereço de e-mail do remetente com o endereço de e-mail no seu perfil de utilizador.

Se o remetente não corresponder, então é enviada ao utilizador uma notificação para confirmar que realmente enviou o e-mail.

Se esta configuração estiver desativada, então o endereço de e-mail do remetente não é verificado de todo.';
