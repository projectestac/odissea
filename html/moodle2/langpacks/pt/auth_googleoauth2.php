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
 * Strings for component 'auth_googleoauth2', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_googleoauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid_key'] = 'Chave do aplicativo Dropbox';
$string['auth_dropboxclientsecret_key'] = 'Segredo do aplicativo Dropbox';
$string['auth_facebookclientid_key'] = 'ID do aplicativo do Facebook';
$string['auth_facebookclientsecret_key'] = 'Segredo do aplicativo do Facebook';
$string['auth_githubclientid_key'] = 'ID de cliente Github';
$string['auth_githubclientsecret_key'] = 'Segredo de cliente Github';
$string['auth_googleclientid_key'] = 'ID de cliente Google';
$string['auth_googleclientsecret_key'] = 'Segredo de cliente Google';
$string['auth_googleipinfodbkey_key'] = 'Chave IPinfoDB';
$string['auth_googleoauth2description'] = 'Permitir que um utizador se ligue ao site com um fornecedor de autenticação externa: Google/Facebook/Windows Live .
A primeira vez que o utilizador se ligar ao fornecedor de autenticação, uma nova conta é criada.
<b>Deve</b> desmarcar a opção Prevenir criação de conta (configuração de administrador: authpreventaccountcreation ) ao autenticar.';
$string['auth_googlesettings'] = 'Configurações';
$string['auth_googleuserprefix'] = 'O nome de utilizador criado iniciará com este prefixo. Num site Moodle comum não precisa de mudar esta configuração.';
$string['auth_googleuserprefix_key'] = 'Prefixo do nome de utilizador';
$string['auth_sign-in_with'] = 'Entrar com {$a->providername}';
$string['couldnotauthenticate'] = 'A autenticação falhou - por favor tente entrar novamente.';
$string['couldnotauthenticateuserlogin'] = 'Erro no método de autenticação.<br/>
Por favor, tente entrar novamente com o seu nome de utilizador e senha.<br/>
<br/>
<a href="{$a->loginpage}">Tentar novamente</a>.<br/>
<a href="{$a->forgotpass}">Esqueceu-se da senha</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'O fornecedor de autenticação enviou um erro de comunicação. Por favor tente entrar novamente.';
$string['emailaddressmustbeverified'] = 'O seu endereço de e-mail não foi verificado pelo método de autenticação selecionado. Provavelmente esqueceu-se de clicar no link "verificar o endereço de e-mail" que o Google ou o Facebook enviou ao registar-se.';
$string['faileduserdetails'] = 'O site ligou-se com sucesso ao fornecedor selecionado mas não conseguiu recuperar os seus dados de utilizador. Se estiver a usar o Google, verifique se o administrador do site ativou Google+API na consola de desenvolvimento do Google. É a razão mais comum para este erro.';
$string['moreproviderlink'] = 'Entrar com outro serviço.';
$string['noaccountyet'] = 'Ainda não tem permissão para usar o site. Entre em contacto com o administrador para ativar a sua conta.';
$string['oauth2displaybuttons'] = 'Mostrar botões na página de login';
$string['othermoodle'] = 'Outra autenticação Moodle';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Entrar com {$a}';
$string['stattitle'] = 'Relatório estatístico dos {$a->periodindays} dias (desde da instalação do plugin/atualização)';
$string['supportmaintenance'] = 'Para apoiar a manutenção deste módulo, for favor, aceda à <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2">página de módulos do Moodle.org</a> e clique em "Adicionar aos meus favoritos". Muito obrigado!';
$string['unknownfirstname'] = 'Nome desconhecido';
$string['unknownlastname'] = 'Apelido desconhecido';
