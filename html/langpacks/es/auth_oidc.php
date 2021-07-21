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
 * Strings for component 'auth_oidc', language 'es', version '3.11'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_oidcdescription'] = 'El plugin de Conexión OpenID proporciona la funcionalidad SSO mediante proveedores de identidad configurables.';
$string['cfg_authendpoint_desc'] = 'El URI de autorización del Endpoint de su proveedor de identidad.';
$string['cfg_authendpoint_key'] = 'Autorización del Endpoint';
$string['cfg_clientid_desc'] = 'Su ID de cliente registrado en el proveedor de identidad';
$string['cfg_clientid_key'] = 'ID de cliente';
$string['cfg_clientsecret_desc'] = 'Su Secreto de Cliente registrado en el proveedor de indentidad. En algunos proveedores también se le llama contraseña.';
$string['cfg_clientsecret_key'] = 'Secreto de cliente';
$string['cfg_customicon_desc'] = 'Si desea usar su propio icono, súbalo aquí. Esto sobrescribirá cualquier icono seleccionado arriba. <br /><br /><b>Notas sobre el uso de iconos personalizados:</b><ul><li>Esta imagen <b>no</b> será redimensionada en la página de inicio, por lo que se recomienda no subir una imagen superior a 35x35 pixels.</li><li>En caso de que haya subido un icono personalizado y desea volver a utilizar los iconos predefinidos, haga clic sobre el icono personalizado subido y luego clic en "Delete" (o eliminar). A continuación clic en "OK" y guarde los cambios con el botón que está al final de esta página. El icono predefinido seleccionado volverá a aparecer en la página de acceso. </li></ul>';
$string['cfg_customicon_key'] = 'Icono personalizado';
$string['cfg_err_invalidauthendpoint'] = 'Autorización del Endpoint inválida';
$string['cfg_err_invalidclientid'] = 'ID de cliente inválido';
$string['cfg_err_invalidclientsecret'] = 'Cliente secreto inválido';
$string['cfg_err_invalidtokenendpoint'] = 'Token Endpoint inválido';
$string['cfg_icon_desc'] = 'Un icono para que aparezca al lado del nombre del proveedor en la página acceso.';
$string['cfg_icon_key'] = 'Icono';
$string['cfg_iconalt_check'] = 'Icono marca de ok';
$string['cfg_iconalt_go'] = 'Círculo verde';
$string['cfg_iconalt_group'] = 'Icono de grupo';
$string['cfg_iconalt_group2'] = 'Icono alternativo de grupo';
$string['cfg_iconalt_key'] = 'Icono de contraseña';
$string['cfg_iconalt_lock'] = 'Icono de bloquear';
$string['cfg_iconalt_locked'] = 'Icono de bloqueado';
$string['cfg_iconalt_mnet'] = 'Icono MNET';
$string['cfg_iconalt_o365'] = 'Icono Office365';
$string['cfg_iconalt_plus'] = 'Icono más';
$string['cfg_iconalt_rightarrow'] = 'Icono de flecha hacia la derecha';
$string['cfg_iconalt_stop'] = 'Círculo rojo';
$string['cfg_iconalt_user'] = 'Icono de usuario';
$string['cfg_iconalt_user2'] = 'Icono alternativo de usuario';
$string['cfg_iconalt_userlock'] = 'Icono de usuario con bloqueo';
$string['cfg_loginflow_authcode'] = 'Solicitud de Autorización';
$string['cfg_loginflow_authcode_desc'] = 'Al usar este tipo de flujo, el usuario hace clic en el nombre del proveedor de identidad (Ver "Nombre del proveedor" más arriba) en la página de acceso de Moodle y se redirige al proveedor para identificarse. Una vez conectado correctamente, el usuario es redirigido de nuevo a Moodle donde el acceso a Moodle se lleva a cabo de forma transparente. Esta es la forma más normalizada y segura para el registro de usuario.';
$string['cfg_loginflow_key'] = 'Flujo de Identificación';
$string['cfg_loginflow_rocreds'] = 'Autenticación con Usuario/Contraseña';
$string['cfg_loginflow_rocreds_desc'] = 'Al usar este tipo de flujo, el usuario introduce su nombre de usuario y contraseña en el formulario de acceso de Moodle, tal como lo haría con un acceso manual. Sus credenciales se envían al proveedor de identidad para obtener la autenticación. Este flujo es el más transparente para el usuario ya que no tienen interacción directa con el proveedor de identidad. Tenga en cuenta que no todos los proveedores de identidad apoyan este flujo.';
$string['cfg_opname_desc'] = 'Esta es una etiqueta para que el usuario final identifique el tipo de credenciales que debe utilizar para el acceso. Esta etiqueta se utiliza para identificar al proveedor.';
$string['cfg_opname_key'] = 'Nombre del proveedor';
$string['cfg_redirecturi_desc'] = 'Esta es la URI para registrar como "Redirección URI"<br />Su proveedor de identidad para la Conexión OpenID debe pedirle esto al registrarse Moodle como cliente.';
$string['cfg_redirecturi_key'] = 'Redirección URI';
$string['cfg_tokenendpoint_desc'] = 'La URI del token endpoint de su proveedor de identidad.';
$string['cfg_tokenendpoint_key'] = 'Token Endpoint';
$string['errorauthdisconnectemptypassword'] = 'La contraseña (password) no puede estar vacía';
$string['errorauthdisconnectemptyusername'] = 'El nombre de usuario (username) no puede estar vacío';
$string['errorauthdisconnectifmanual'] = 'Si se utiliza el método de acceso manual, introducir las credenciales abajo.';
$string['errorauthdisconnectinvalidmethod'] = 'El método de acceso recibido es inválido.';
$string['errorauthdisconnectnewmethod'] = 'Utilice un método de acceso';
$string['errorauthdisconnectusernameexists'] = 'Ese nombre de usuario (username) ya se encuentra en uso. Por favor, elija uno diferente.';
$string['errorauthinvalididtoken'] = 'El id_token recibido es inválido.';
$string['errorauthnoauthcode'] = 'No se ha recibido el código de autenticación (Auth code).';
$string['errorauthnocreds'] = 'Por favor, configure las credenciales de cliente de la Conexión OpenID.';
$string['errorauthnoendpoints'] = 'Por favor, configure los endpoints del servidor de Conexión OpenID.';
$string['errorauthnohttpclient'] = 'Por favor, configure un cliente HTTP.';
$string['errorauthnoidtoken'] = 'El id_token de la Conexión OpenID no se ha recibido.';
$string['errorauthunknownstate'] = 'Estado desconocido (Unknown state).';
$string['errorauthuseralreadyconnected'] = 'Usted ya está conectado con un usuario diferente con Conexión OpenID.';
$string['errorauthuserconnectedtodifferent'] = 'El usuario con Conexión OpenID autenticado ya se encuentra conectado a una cuenta de usuario de Moodle.';
$string['errorbadloginflow'] = 'El flujo de identificación especificado es inválido. Nota: Si usted está recibiendo este mensaje tras una instalación o actualización reciente, por favor borre la caché de Moodle.';
$string['errorjwtbadpayload'] = 'No se pudo leer "JWT payload".';
$string['errorjwtcouldnotreadheader'] = 'No se pudo leer "JWT header"';
$string['errorjwtempty'] = 'El JWT recibido está vacío o sin cadena.';
$string['errorjwtinvalidheader'] = '"JWT header" es inválido';
$string['errorjwtmalformed'] = 'JWT recibido con formato incorrecto.';
$string['errorjwtunsupportedalg'] = '"JWS Alg" o "JWE" no soportados';
$string['errornodisconnectionauthmethod'] = 'No se puede desconectar porque no hay otro plugin de autenticación habilitado (ya sea un método de identificación previo o la identificación manual).';
$string['erroroidcclientinsecuretokenendpoint'] = 'El token endpoint debe usar SSL/TLS para esto.';
$string['erroroidcclientinvalidendpoint'] = 'El Endpoint URI recibido es inválido.';
$string['erroroidcclientnoauthendpoint'] = 'Ninguna autorización de endpoint establecida. Por favor ajuste con $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Por favor, establezca las credenciales del cliente con "setcreds"';
$string['erroroidcclientnotokenendpoint'] = 'Ningún token endpoint establecido. Por favor ajuste con $this->setendpoints';
$string['erroroidcnotenabled'] = 'El plugin de autenticación "Conexión OpenID" no está habilitado.';
$string['errorucpinvalidaction'] = 'Inválida acción recibida.';
$string['eventuserauthed'] = 'Usuario autorizado con la Conexión OpenID';
$string['eventuserconnected'] = 'Usuario conectado con la Conexión OpenID';
$string['eventusercreated'] = 'Usuario creado con la Conexión OpenID';
$string['eventuserdisconnected'] = 'Usuario desconectado de la Conexión OpenID';
$string['eventuserloggedin'] = 'Usuario identificado con la Conexión OpenID';
$string['oidc:manageconnection'] = 'Administrar la Conexión OpenID';
$string['oidc:manageconnectionconnect'] = 'Permitir conexión OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Permitir desconexión OpenID';
$string['pluginname'] = 'Conexión OpenID';
$string['ucp_disconnect_details'] = 'Esto detendrá su identificación mediante la {$a}. Tendrá que crear un nombre de usuario y contraseña para acceder al campus.';
$string['ucp_disconnect_title'] = 'Detener la {$a}';
$string['ucp_general_intro'] = 'Aquí puede manejar su {$a}. Si está activada, podrá utilizar su cuenta de {$a} para iniciar sesión en el campus en lugar de un nombre de usuario y contraseña independiente. Una vez conectado, ya no tendrá que recordar un nombre de usuario y contraseña sólo para el campus, ya que la identificación estará a cargo de la {$a}';
$string['ucp_login_start'] = 'Comenzar a usar la {$a} para iniciar sesión en el campus';
$string['ucp_login_start_desc'] = 'Esto permite cambiar el método de identificación y usar la {$a} para iniciar sesión en el campus. Una vez activada, se identificará con sus credenciales de la {$a}. Su actual nombre de usuario y contraseña del campus dejarán de funcionar. Puede desconectar este método en cualquier momento y regresar a la identificación manual.';
$string['ucp_login_status'] = 'La {$a} está:';
$string['ucp_login_stop'] = 'Dejar de usar {$a} para iniciar sesión en Moodle';
$string['ucp_login_stop_desc'] = 'En este momento está usando {$a} para iniciar sesión en el campus. Al hacer clic en "Dejar de usar la {$a} para iniciar sesión" desconectará su cuenta de {$a} del campus y no podrá iniciar sesión en el sistema con la {$ a}. Se le pedirá que cree un nombre de usuario y contraseña y, a partir de ese momento, se conectará al campus directamente.';
$string['ucp_o365accountconnected'] = 'Esta cuenta de Office 365 ya está conectada con otra cuenta de Moodle.';
$string['ucp_status_disabled'] = 'Desactivado';
$string['ucp_status_enabled'] = 'Activado';
$string['ucp_title'] = '{$a} Gestión';
