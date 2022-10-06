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
 * Strings for component 'tool_messageinbound', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nome da classe';
$string['component'] = 'Componente';
$string['configmessageinboundhost'] = 'O endereço do servidor em que o Moodle deve verificar o correio eletrónico. Para especificar uma porta não predefinida, pode usar a sintaxe [server]:[port], como por exemplo \'mail.example.com:993\'. Se deixar o campo vazio, o Moodle usará a porta predefinida para o tipo de servidor de e-mail que especificou.';
$string['defaultexpiration'] = 'Período de validade do endereço predefinido';
$string['defaultexpiration_help'] = 'Quando um endereço de e-mail é gerado pelo handler, pode ser definido para expirar automaticamente após um período de tempo e, por isso, já não pode ser usado novamente. É aconselhável definir um período de validade.';
$string['description'] = 'Descrição';
$string['domain'] = 'Domínio do e-mail';
$string['edit'] = 'Editar';
$string['edithandler'] = 'Editar configurações para o handler de {$a}';
$string['editinghandler'] = 'A editar {$a}';
$string['enabled'] = 'Ativado';
$string['fixedenabled_help'] = 'Não é possível alterar o estado deste handler. Isto pode dever-se ao facto do handler ser requerido por outros handlers.';
$string['fixedvalidateaddress'] = 'Validar endereço de remetente';
$string['fixedvalidateaddress_help'] = 'Não é possível alterar o endereço de validação deste handler. Isto pode dever-se ao facto do handler requerer uma configuração específica.';
$string['handlerdisabled'] = 'O handler de e-mail que tentou contactar foi desativado. Não é possível processar a mensagem neste momento.';
$string['incomingmailconfiguration'] = 'Configuração de entrada de e-mails';
$string['incomingmailserversettings'] = 'Configurações do servidor de entrada de e-mails';
$string['incomingmailserversettings_desc'] = 'O Moodle é capaz de ligar a servidores IMAP devidamente configurados. Pode especificar aqui as definições usadas para ligar ao seu servidor IMAP.';
$string['invalidrecipientdescription'] = 'A mensagem "{$a->subject}" não pôde ser autenticada, pois foi enviada a partir de um endereço de e-mail diferente do que consta no seu perfil do utilizador.';
$string['invalidrecipientdescriptionhtml'] = 'A mensagem "{$a->subject}" não pôde ser autenticada, pois foi enviada a partir de um endereço de e-mail diferente do que consta do seu perfil do utilizador. Para que a mensagem seja autenticada, deverá responder a esta mensagem.';
$string['invalidrecipientfinal'] = 'A mensagem "{$a->subject}" não pôde ser autenticada. Verifique se está a enviar a mensagem a partir do mesmo endereço de e-mail que consta no seu perfil do utilizador.';
$string['invalid_recipient_handler'] = 'Se uma mensagem válida é recebida mas o remetente não pode ser autenticado, a mensagem é armazenada no servidor de e-mail e o utilizador é contactado usando o endereço de e-mail que consta no seu perfil do utilizador. O utilizador terá assim oportunidade de responder para confirmar a autenticidade da mensagem original.

Este handler processa essas respostas.

Não é possível desativar a verificação do remetente deste handler porque o utilizador pode responder a partir de um endereço de e-mail incorreto se a configuração do seu cliente de e-mail estiver incorreta.';
$string['invalid_recipient_handler_name'] = 'Remetente de handler inválido';
$string['mailbox'] = 'Nome da caixa de correio';
$string['mailboxconfiguration'] = 'Configuração da caixa de correio';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Configurações do e-mail';
$string['message_handlers'] = 'Handlers de Mensagem';
$string['messageinbound'] = 'Mensagem Inbound';
$string['messageinboundenabled'] = 'Ativar o processo de entrada de e-mail';
$string['messageinboundenabled_desc'] = 'O processo de entrada de e-mail tem de ser ativado por forma a que as mensagens sejam enviadas com a informação adequada.';
$string['messageinboundgeneralconfiguration'] = 'Configuração geral';
$string['messageinboundgeneralconfiguration_desc'] = 'O processamento de entrada de mensagens permite-lhe receber e processar e-mails dentro do Moodle. Isto pode ser aplicado em vários casos, nomeadamente para enviar respostas a tópicos de fórum por e-mail ou adicionar ficheiros aos ficheiros privados do utilizador.';
$string['messageinboundhost'] = 'Servidor de entrada de e-mail';
$string['messageinboundhostpass'] = 'Senha';
$string['messageinboundhostpass_desc'] = 'Senha que o seu fornecedor de serviços terá fornecido para se autenticar na sua conta de e-mail.';
$string['messageinboundhostssl'] = 'Usar SSL';
$string['messageinboundhostssl_desc'] = 'Alguns servidores de correio eletrónico suportam um nível adicional de segurança ao encriptar a comunicação entre o Moodle e o seu servidor. Se for esse o caso do seu servidor, recomendamos a utilização desta encriptação SSL.';
$string['messageinboundhosttype'] = 'Tipo de servidor';
$string['messageinboundhostuser'] = 'Nome de utilizador';
$string['messageinboundhostuser_desc'] = 'Nome de utilizador que o seu fornecedor de serviços terá fornecido para se autenticar na sua conta de e-mail.';
$string['messageinboundmailboxconfiguration_desc'] = 'Quando as mensagens são enviadas, elas encaixam-se no formato \'address+data@example.com\'. Para gerar de forma confiável endereços a partir do Moodle, por favor, especifique separadamente o endereço que normalmente usaria antes do sinal \'@\', e o domínio depois do sinal \'@\'. Por exemplo, o nome da caixa de correio no exemplo seria "address", e o domínio de e-mail seria "example.com". Deverá usar uma conta de e-mail exclusiva para este propósito.';
$string['messageprocessingerror'] = 'Enviou recentemente um e-mail com o assunto "{$a->subject}", mas infelizmente este não pôde ser processado.

Os detalhes do erro encontram-se indicados abaixo.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Enviou recentemente um e-mail com o assunto "{$a->subject}", mas infelizmente este não pôde ser processado.</p>
<p>Os detalhes do erro encontram-se indicados abaixo.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'O e-mail "{$a->subject}" não pôde ser processado. O erro surge tal como descrito: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'O e-mail "{$a->subject}" não pôde ser processado. Contacte o administrador do site para mais informação.';
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
$string['privacy:metadata:coreuserkey'] = 'Chaves de utilizador para validar e-mail recebido';
$string['privacy:metadata:messagelist'] = 'Um lista de identificadores de mensagem que falharam na validação e exigem autorização';
$string['privacy:metadata:messagelist:address'] = 'O endereço para onde foi enviado o e-mail';
$string['privacy:metadata:messagelist:messageid'] = 'O ID da mensagem';
$string['privacy:metadata:messagelist:timecreated'] = 'A data/hora em que o registo foi feito';
$string['privacy:metadata:messagelist:userid'] = 'O ID do utilizador que precisa de aprovar a mensagem';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validar endereço do remetente';
$string['ssl'] = 'SSL (Autodetetar versão de SSL)';
$string['sslv2'] = 'SSLv2 (Forçar Versão 2 de SSL)';
$string['sslv3'] = 'SSLv3 (Forçar Versão 3 de SSL)';
$string['taskcleanup'] = 'Limpeza de e-mails recebidos não verificados';
$string['taskpickup'] = 'Captação de e-mails recebidos';
$string['tls'] = 'TLS (TLS; iniciado através do nível de protocolo de negociação em canal não encriptado; forma recomendada de iniciar a ligação segura)';
$string['tlsv1'] = 'TLSv1 (ligação direta ao servidor TLS versão 1.x)';
$string['validateaddress'] = 'Validar endereço de e-mail do remetente';
$string['validateaddress_help'] = 'Quando uma mensagem é recebida de um utilizador, o Moodle tenta validar a mensagem através da comparação do endereço de e-mail do remetente com o endereço de e-mail no seu perfil do utilizador.

Se o remetente não corresponder, é enviada ao utilizador uma notificação para confirmar que realmente enviou o e-mail.

Se esta configuração estiver desativada, o endereço de e-mail do remetente não é verificado.';
