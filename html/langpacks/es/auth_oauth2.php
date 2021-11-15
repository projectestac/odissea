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
 * Strings for component 'auth_oauth2', language 'es', version '3.11'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Ya existe un usuario en este sitio con ese nombre de usuario. Si esta es su cuenta inicie sesión utilizando su nombre de usuario y contraseña y añádalo como un inicio de sesión enlazado a través de su página de preferencias.';
$string['alreadylinked'] = 'Esta cuanta externa ya está enlazada con una cuenta en este sitio';
$string['auth_oauth2description'] = 'Autenticación basada en estándares OAuth 2';
$string['auth_oauth2settings'] = 'Ajustes de autenticación OAuth 2.';
$string['confirmaccountemail'] = 'Hola, {$a->fullname}:

Se ha solicitado una nueva cuenta en \'{$a->sitename}\'
utilizando su dirección de correo electrónico.

Para confirmar su nueva cuenta, vaya a esta dirección web:

{$a->link}

En la mayoría de los programas de correo, esto debería aparecer como un enlace azul.
en el que puede hacer clic. Si eso no funciona,
corte y pegue la dirección en la barra de navegación
en la parte superior de la ventana de su navegador web.

Si necesita ayuda, póngase en contacto con el administrador del sitio,
{$a->admin}

Si usted no hizo esto, alguien más podría estar intentando poner en peligro su cuenta.
Póngase en contacto con el administrador del sitio de inmediato.';
$string['confirmaccountemailsubject'] = '{$a}: confirmación de cuenta';
$string['confirmationinvalid'] = 'El enlace de confirmación no es válido o ha caducado. Vuelva a iniciar el proceso de inicio de sesión para generar un nuevo correo electrónico de confirmación.';
$string['confirmationpending'] = 'Esta cuenta está pendiente de confirmación por correo electrónico.';
$string['confirmlinkedloginemail'] = 'Hola, {$a->fullname}:

Se ha realizado una solicitud para vincular el inicio de sesión de {$a->issuername}
{$a->linkedemail} a su cuenta en \'{$ a-> sitename}\'
utilizando su dirección de correo electrónico.

Para confirmar esta solicitud y vincular estos inicios de sesión, vaya a esta dirección web:

{$a->link}

En la mayoría de los programas de correo, esto debería aparecer como un enlace azul.
en el que puede hacer clic. Si eso no funciona,
corte y pegue la dirección en la barra de navegación
en la parte superior de la ventana de su navegador web.

Si necesita ayuda, póngase en contacto con el administrador del sitio,
{$a->admin}

Si usted no hizo esto, alguien más podría estar intentando poner en peligro su cuenta.
Póngase en contacto con el administrador del sitio de inmediato.';
$string['confirmlinkedloginemailsubject'] = '{$a}: confirmación de inicio de sesión vinculado';
$string['createaccountswarning'] = 'Este complemento de autenticación permite a los usuarios crear cuentas en su sitio. Es posible que desee habilitar la configuración "authpreventaccountcreation" si utiliza este complemento.';
$string['createnewlinkedlogin'] = 'Vincular una nueva cuenta ({$a})';
$string['emailconfirmlink'] = 'Vincular sus cuentas';
$string['emailconfirmlinksent'] = '<p>Se encontró una cuenta existente con esta dirección de correo electrónico, pero aún no está vinculada.</p>
    <p>Las cuentas deben estar vinculadas antes de que pueda iniciar sesión.</p>
    <p>Debería haberse enviado un correo electrónico a su dirección en <b>{$a}</b>.</p>
    <p>Contiene instrucciones sencillas para vincular sus cuentas.</p>
    <p>Si tiene alguna dificultad, póngase en contacto con el administrador del sitio.</p>';
$string['emailpasswordchangeinfo'] = 'Hola, {$a->firstname}:

Alguien (probablemente usted) ha solicitado una nueva contraseña para su cuenta en \'{$a->sitename}\'.

Sin embargo, su contraseña no se puede restablecer porque está utilizando su cuenta en otro sitio para iniciar sesión.

Inicie sesión como antes, utilizando el enlace de la página de inicio de sesión.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Información sobre cambiar la contraseña';
$string['info'] = 'Cuenta externa';
$string['issuer'] = 'Servicio OAuth 2';
$string['issuernologin'] = 'El emisor no puede utilizarse para iniciar sesión';
$string['linkedlogins'] = 'Inicios de sesión vinculados';
$string['linkedloginshelp'] = 'Ayuda con inicios de sesión vinculados';
$string['loginerror_authenticationfailed'] = 'El proceso de autenticación falló.';
$string['loginerror_cannotcreateaccounts'] = 'No se pudo encontrar una cuenta con su dirección de correo electrónico.';
$string['loginerror_invaliddomain'] = 'La dirección de correo electrónico no se permite en este sitio.';
$string['loginerror_nouserinfo'] = 'No se devolvió información de usuario. Es posible que el servicio OAuth 2 esté configurado incorrectamente.';
$string['loginerror_userincomplete'] = 'La información de usuario devuelta no contenía nombre de usuario ni dirección de correo electrónico. Es posible que el servicio OAuth 2 esté configurado incorrectamente.';
$string['noissuersavailable'] = 'Ninguno de los servicios de OAuth2 configurados le permite vincular cuentas de inicio de sesión';
$string['notenabled'] = 'Lo sentimos, el plugin de autenticación OAuth 2 no está habilitado';
$string['notloggedindebug'] = 'El intento de inicio de sesión falló. Motivo: {$a}';
$string['notwhileloggedinas'] = 'Los inicios de sesión vinculados no puede gestionarse mientras haya iniciado sesión como otro usuario.';
$string['oauth2:managelinkedlogins'] = 'Administrar sus propias cuentas de inicio de sesión vinculadas';
$string['plugindescription'] = 'Este complemento de autenticación muestra una lista de los proveedores de identidad configurados en la página de inicio de sesión. La selección de un proveedor de identidad permite a los usuarios iniciar sesión con sus credenciales de un proveedor OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autenticación OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Este complemento está conectado al subsistema de autenticación.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'El token de confirmación.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'La marca de tiempo que indica cuando caduca el token de confirmación.';
$string['privacy:metadata:auth_oauth2:email'] = 'El correo electrónico externo que se asigna a esta cuenta.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'El ID del emisor de OAuth 2 para este inicio de sesión OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Cuentas OAuth 2 vinculadas a una cuenta de usuario de Moodle.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'La marca de tiempo que indica cuando se vinculó la cuenta de usuario al inicio de sesión OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'La marca de tiempo que indica cuando se modificó este registro.';
$string['privacy:metadata:auth_oauth2:userid'] = 'El ID de la cuenta de usuario a la que está vinculado el inicio de sesión OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'El ID del usuario que modificó esta cuenta.';
$string['privacy:metadata:auth_oauth2:username'] = 'El nombre de usuario externo que se asigna a esta cuenta';
