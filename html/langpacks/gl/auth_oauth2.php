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
 * Strings for component 'auth_oauth2', language 'gl', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Xa existe un usuario neste sitio con este nome de usuario. Se esta é a súa conta, inicie sesión introducindo o seu nome de usuario e contrasinal e engádao como un acceso ligado a través da súa páxina de preferencias.';
$string['alreadylinked'] = 'Esta conta externa xa está ligada a unha conta neste sitio';
$string['auth_oauth2description'] = 'Autenticación baseada en estándares OAuth 2';
$string['auth_oauth2settings'] = 'Axustes de autenticación OAuth 2.';
$string['confirmaccountemail'] = 'Ola, {$a->fullname},

Alguén solicitou unha nova conta en «{$a->sitename}»
co seu enderezo de correo electrónico.

Para confirmar o rexistro visite este enderezo web:

{$a->link}

En moitos programas de correo poderá premer na ligazón anterior mais, se non é posible,
copie e pegue o enderezo na barra do explorador.

Para calquera información contacte co administrador do sitio,
{$a->admin}';
$string['confirmaccountemailsubject'] = 'Confirmación da conta: {$a}';
$string['confirmationinvalid'] = 'A ligazón de confirmación non é válida ou caducou. Inicie o proceso de acceso para xerar un novo correo de confirmación.';
$string['confirmationpending'] = 'Esta conta está pendente de confirmación por correo.';
$string['confirmlinkedloginemail'] = 'Ola, {$a->fullname},

Alguen realizou unha solicitude para ligar o acceso de {$a->issuername} {$a->linkedemail} na súa conta en «{$a->sitename}»
usando o seu enderezo de correo.

Para confirmar esta solicitude e ligar estes accesos, diríxase a este enderezo web:

{$a->link}

En moitos programas de correo poderá premer na ligazón anterior mais, se non é posible,
copie e pegue o enderezo na barra do explorador.

Para calquera información contacte co administrador do sitio,
{$a->admin}';
$string['confirmlinkedloginemailsubject'] = 'Confirmación de acceso ligada: {$a}';
$string['createaccountswarning'] = 'Este engadido de autenticación permite aos usuarios crear contas no seu sitio. Pode querer activar a configuración «authpreventaccountcreation» se usa este engadido.';
$string['createnewlinkedlogin'] = 'Ligar unha nova conta ({$a})';
$string['emailconfirmlink'] = 'Ligaras súas contas';
$string['emailconfirmlinksent'] = '<p>Atopouse unha conta existente con este enderezo de correo mais aínda non está ligadaa.</p>
   <p>As contas deben ser ligadas antes de que Vostede poida acceder.</p>
   <p>Debería terse enviado un correo ao seu enderezo en<b>{$a}</b></p>
   <p>Contén instrucións sinxelas para ligar as súas contas.</p>
   <p>Se Vostede segue a ter dificultades, contacte co administrador do sitio.</p>';
$string['emailpasswordchangeinfo'] = 'Ola {$a->firstname},

Alguén (probabelmente vostede) solicitou un novo contrasinal para a súa conta en «{$a->sitename}».

Non obstante o seu contrasinal non se pode restablecer porque está a usar a súa conta noutro sitio para iniciar sesión.

Inicia sesión como antes, usando a ligazón na páxina de acceso.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: información sobre o cambio de contrasinal';
$string['info'] = 'Conta externa';
$string['issuer'] = 'Servizo OAuth 2';
$string['issuernologin'] = 'O emisor non pode ser usado para acceder';
$string['linkedlogins'] = 'Accesos ligados';
$string['linkedloginshelp'] = 'Axuda cos accesos ligados';
$string['loginerror_authenticationfailed'] = 'Fallou o proceso de autenticación.';
$string['loginerror_cannotcreateaccounts'] = 'Non foi posíbel atopar unha conta co enderezo de correo.';
$string['loginerror_invaliddomain'] = 'Non se permite o enderezo de correo neste sitio.';
$string['loginerror_nouserinfo'] = 'Non se devolveu ningunha información do usuario. É probábel que o servizo OAuth 2 estea configurado incorrectamente.';
$string['loginerror_userincomplete'] = 'A información do usuario devolta non contén un nome de usuario e enderezo de correo. É probábel que o servizo OAuth 2 estea configurado incorrectamente.';
$string['noissuersavailable'] = 'Ningún dos servizos configurados de OAuth2 permítelle ligar as contas de acceso';
$string['notenabled'] = 'O engadido de autenticación OAuth 2 non está activado';
$string['notloggedindebug'] = 'Fallou o intento de acceso. Razón: {$a}';
$string['notwhileloggedinas'] = 'Os accesos ligados non se poden administrar ao acceder coma outro usuario.';
$string['oauth2:managelinkedlogins'] = 'Administrar contas propias de acceso ligadas';
$string['plugindescription'] = 'Este engadido de autenticación amosa unha lista dos provedores de identidade configurados na páxina de acceso. A selección dun provedor de identidade permite aos usuarios acceder coas súas credenciais desde un provedor OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autenticación OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Este engadido está conectado ao subsistema do autenticación.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'A marca de confirmación.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'A marca de tempo cando caduca a marca de confirmación.';
$string['privacy:metadata:auth_oauth2:email'] = 'O correo externo que se asigna a esta conta.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'O ID do emisor de OAuth 2 para este acceso OAunth 2.';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'As contas OAuth 2 ligadas a unha conta de usuario Moodle.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'A marca de tempo cando a conta de usuario foi ligada ao acceso OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'A marca de tempo cando este rexistro foi modificado.';
$string['privacy:metadata:auth_oauth2:userid'] = 'O ID da conta de usuario ao que está ligado o acceso OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'O ID do usuario que modificou esta conta.';
$string['privacy:metadata:auth_oauth2:username'] = 'O nome de usuario externo que se asigna a esta conta.';
