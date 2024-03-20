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
 * Strings for component 'auth_oauth2', language 'pt', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Já existe neste site um utilizador com este nome de utilizador. Se esta for a sua conta, autentique-se com o seu nome de utilizador e senha e adicione-o como um acesso vinculado na sua página de preferências.';
$string['alreadylinked'] = 'Essa conta externa já está vinculada a uma conta neste site';
$string['auth_oauth2description'] = 'Autenticação baseada nos padrões OAuth 2';
$string['auth_oauth2settings'] = 'Configurações da autenticação OAuth 2';
$string['confirmaccountemail'] = 'Caro(a) {$a->fullname},

Foi solicitada uma nova conta na plataforma de e-learning \'{$a->sitename}\' usando o seu endereço de e-mail.

Para confirmar a sua nova conta, aceda a este endereço:

{$a->link}

Se o endereço acima não for apresentado como uma hiperligação em que basta clicar, copie o endereço e cole na linha de endereço do seu navegador web.

Se precisar de ajuda, contacte o administrador do site,
{$a->admin}

Se não fez este pedido, outra pessoa pode estar a tentar aceder à sua conta.
Contacte imediatamente o administrador do site.';
$string['confirmaccountemailsubject'] = '{$a}: confirmação da conta';
$string['confirmationinvalid'] = 'A hiperligação de confirmação é inválida ou expirou. Inicie novamente o processo de autenticação para gerar um novo e-mail de confirmação.';
$string['confirmationpending'] = 'Esta conta está pendente da confirmação do e-mail.';
$string['confirmlinkedloginemail'] = 'Caro(a) {$a->fullname},

Foi feita uma solicitação para vincular a autenticação via {$a->issuername} com o e-mail {$a->linkedemail} à sua conta na plataforma de e-learning \'{$a->sitename}\'.

Para confirmar este pedido e vincular estas autenticações, aceda a este endereço:

{$a->link}

Se o endereço acima não for apresentado como uma hiperligação em que basta clicar, copie o endereço e cole na linha de endereço do seu navegador web.

Se precisar de ajuda, contacte o administrador do site,
{$a->admin}

Se não fez este pedido, outra pessoa pode estar a tentar aceder à sua conta.
Contacte imediatamente o administrador do site.';
$string['confirmlinkedloginemailsubject'] = '{$a}: confirmação da vinculação de autenticação';
$string['createaccountswarning'] = 'Este módulo de autenticação permite aos utilizadores criarem contas no seu site. Se pretende usar esta funcionalidade, é importante ativar a configuração "authpreventaccountcreation".';
$string['createnewlinkedlogin'] = 'Vincular uma nova conta ({$a})';
$string['emailconfirmlink'] = 'Vincular as suas contas';
$string['emailconfirmlinksent'] = '<p>Foi encontrada uma conta existente com este endereço de e-mail mas ainda não está vinculada.</p>
<p>As contas têm de ser vinculadas antes que possa autenticar-se.</p>
<p>Foi enviada uma mensagem para o seu endereço de e-mail <b>{$a}</b>.</p>
<p>Contém instruções fáceis para vincular as suas contas.</p>
<p>Se tiver alguma dificuldade, contacte o administrador do site.</p>';
$string['emailpasswordchangeinfo'] = 'Olá {$a->firstname},

Solicitou uma nova senha para a sua conta em \'{$a->sitename}\'.

No entanto, a sua senha não pode ser redefinida porque está a usar a sua conta noutro site para se autenticar.

Por favor, autentique-se usando a hiperligação na página de autenticação.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Informação para alteração de senha';
$string['info'] = 'Conta externa';
$string['issuer'] = 'Serviço OAuth 2';
$string['issuernologin'] = 'Este provedor não pode ser utilizado para iniciar sessão';
$string['key'] = 'Chave';
$string['linkedlogins'] = 'Autenticações vinculadas';
$string['linkedloginshelp'] = 'Ajuda sobre Autenticações vinculadas';
$string['loggedin'] = 'Utilizador autenticado com sucesso através do fornecedor.';
$string['loginerror_authenticationfailed'] = 'O processo de autenticação falhou.';
$string['loginerror_cannotcreateaccounts'] = 'Não foi possível encontrar uma conta com o seu endereço de e-mail.';
$string['loginerror_invaliddomain'] = 'Não é permitido o uso de endereço de e-mail neste site.';
$string['loginerror_nouserinfo'] = 'Nenhuma informação de utilizador foi devolvida. O serviço OAuth 2 pode estar configurado incorretamente.';
$string['loginerror_userincomplete'] = 'As informações do utilizador devolvidas não continham um nome de utilizador e um endereço de e-mail. O serviço OAuth 2 pode estar configurado incorretamente.';
$string['noconfiguredidps'] = 'Não existem fornecedores OAuth 2 configurados.';
$string['noissuersavailable'] = 'Nenhum dos serviços OAuth 2 configurados permite que vincule contas de autenticação.';
$string['notenabled'] = 'O módulo de autenticação OAuth 2 não está ativado';
$string['notloggedindebug'] = 'A tentativa de autenticação falhou. Motivo: {$a}';
$string['notwhileloggedinas'] = 'As autenticações vinculadas não podem ser geridas enquanto estiver na sessão como outro utilizador.';
$string['oauth2:managelinkedlogins'] = 'Gerir contas de autenticação vinculadas';
$string['plugindescription'] = 'Este módulo de autenticação mostra uma lista dos provedores de identidade, previamente configurados, na página de autenticação. A seleção de um provedor de identidade permite que os utilizadores se autentiquem com as suas credenciais de um provedor OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autenticação OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'O módulo está ligado ao subsistema de autenticação.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'O token de confirmação.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'A hora exata de quando o token de confirmação expira.';
$string['privacy:metadata:auth_oauth2:email'] = 'O e-mail externo que mapeia para esta conta.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'O identificador do emissor OAuth 2 para esta autenticação OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Contas OAuth 2 ligadas a contas de utilizador Moodle.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Data e hora exata de quando a conta de utilizador foi ligada à autenticação OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'A data exata de quando este registo foi modificado.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID da conta de utilizador à qual a autenticação OAuth 2 está ligada.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID do utilizador que modificou esta conta.';
$string['privacy:metadata:auth_oauth2:username'] = 'O nome de utilizador externo que mapeia para esta conta.';
$string['testidplogin'] = 'Testar autenticação com:';
$string['userinfo'] = 'Dados do utilizador obtidos do fornecedor:';
$string['value'] = 'Valor';
