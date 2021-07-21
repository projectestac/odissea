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
 * Strings for component 'auth_emailadmin', language 'pt', version '3.11'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Caro Administrador do Moodle,

Foi solicitada uma nova conta de utilizador em \'{$a->sitename}\' com os seguintes dados:

Qualquer exemplo específico de campo do utilizador:
user->lastname: {$a->lastname}

Todos os campos personalizados:
{$a->customfields}

Todos os campos do utilizador + campos personalizados:
{$a->userdata}

Para confirmar a nova conta, aceda ao seguinte endereço:

{$a->link}

Se o endereço acima não for apresentado como uma hiperligação em que basta clicar, então copie o endereço e cole na linha de endereço do seu navegador de internet.

Também pode confirmar contas no Moodle, acedendo a Administração do Site -> Utilizadores';
$string['auth_emailadminconfirmationsubject'] = '{$a}: confirmação de conta';
$string['auth_emailadminconfirmsent'] = '<p>
A sua conta foi registada e aguarda confirmação pelo administrador. Deverá receber uma confirmação ou ser contactado para mais esclarecimentos.</p>';
$string['auth_emailadmindescription'] = '<p>O autorregisto por e-mail com confirmação pelo administrador permite que o utilizador crie sua própria conta através do botão \'Criar nova conta\' na página de autenticação. Os administradores do site recebem um e-mail contendo uma hiperligação segura para uma página na qual podem confirmar a conta. Autenticações futuras apenas verificarão o nome de utilizador e a senha em relação aos valores armazenados na base de dados Moodle. </p> <p> Nota: Além de ativar o módulo autorregisto por e-mail com confirmação pelo administrador também deve ser ativado o autorregisto na página "Gerir autenticação". </p>';
$string['auth_emailadminnoadmin'] = 'Não foi encontrado nenhum administrador que cumpra a estratégia de notificação. Por favor, verifique a configuração auth_emailadmin.';
$string['auth_emailadminnoemail'] = 'Ocorreu um erro ao tentar lhe enviar um e-mail!';
$string['auth_emailadminnotif_failed'] = 'Não foi possível enviar a notificação de autorregisto para:';
$string['auth_emailadminnotif_strategy'] = 'Define a estratégia para enviar as notificações de autorregistos. As opções disponíveis são "Primeiro" administrador, "Todos" os administradores ou um administrador específico.';
$string['auth_emailadminnotif_strategy_all'] = 'Todos os administradores';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Todos os administradores e utilizadores com permissão para atualizar utilizadores';
$string['auth_emailadminnotif_strategy_first'] = 'Primeiro administrador';
$string['auth_emailadminnotif_strategy_key'] = 'Estratégia da notificação:';
$string['auth_emailadminrecaptcha'] = 'Adiciona um elemento visual/áudio no formulário de confirmação da página de inscrição de utilizadores com autorregisto por e-mail. Serve para proteger o site contra spammers e contribui para uma causa que vale a pena. Consulte a página http://www.google.com/recaptcha/learnmore para mais detalhes.<br /><em>É necessária a extensão cURL do PHP.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Ativar a utilização de reCAPTCHA';
$string['auth_emailadminsettings'] = 'Configurações';
$string['pluginname'] = 'Autorregisto por e-mail com confirmação pelo administrador';
