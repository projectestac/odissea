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
 * Strings for component 'auth_shibboleth', language 'es', version '3.11'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logotipo del método de autenticación';
$string['auth_shib_auth_logo_description'] = 'Proporcione un logotipo para el método de autenticación de Shibboleth que sea familiar para sus usuarios. Podría ser el logotipo de su federación Shibboleth, p. ej. <tt>Inicio de sesión SWITCHaai</tt> o<tt>Inicio de sesión InCommon</tt> o algo similar.';
$string['auth_shib_auth_method'] = 'Nombre del método de autenticación';
$string['auth_shib_auth_method_description'] = 'Proporcione un nombre para el método de identificación Shibboleth que sea familiar a los usuarios.Podría ser el nombre de su federación Shibboleth, por ejemplo, <tt>SWITCHaai Login</tt> o <tt>InCommon Login</tt> o similar.';
$string['auth_shib_changepasswordurl'] = 'URL para cambio de contraseña';
$string['auth_shib_contact_administrator'] = 'En caso de que no esté asociado con estas organizaciones y necesite acceso a un curso en este servidor, por favor contacte con el <a href="mailto:{$a}">Administrador</a>.';
$string['auth_shib_convert_data'] = 'API de modificación de datos';
$string['auth_shib_convert_data_description'] = 'Puede utilizar esta API para modificar aún más los datos proporcionados por Shibboleth. Lea el <a href="{$a}">README</a> para obtener más instrucciones.';
$string['auth_shib_convert_data_filepath_warning'] = 'No puede utilizar un archivo que se encuentra dentro del directorio de datos del sitio actual ($CFG->dataroot) como API de modificación de datos.';
$string['auth_shib_convert_data_warning'] = 'El archivo no existe o no es legible por el proceso del servidor.';
$string['auth_shib_idp_list'] = 'Proveedores de Identidad';
$string['auth_shib_idp_list_description'] = 'Proporcionar una lista de entityIDs de proveedores de identidad para permitir que el usuario elija elegir en la página de inicio de sesión. <br/> Cada línea debe ser una tupla separada por comas para las EntityID de los IdP  (véase el archivo de metadatos Shibboleth) y el Name de los IdP como deberá figurar en la lista desplegable.<br/>Como un tercer parámetro opcional puede añadir la ubicación de un iniciador de sesión de Shibboleth que se utilizará en caso de que su instalación de Moodle sea parte de una configuración de federación múltiple.';
$string['auth_shib_instructions'] = 'Utilice el <a href="{$a}">inicio de sesión de Shibboleth</a> para obtener acceso a través de Shibboleth, si su institución lo admite. De lo contrario, utilice el formulario de inicio de sesión normal que se muestra aquí.';
$string['auth_shib_instructions_help'] = 'Aquí debería proporcionar a sus usuarios instrucciones personalizadas para explicar Shibboleth. Deberían aparecer en la sección de instrucciones de la página de acceso, e incluir un enlace a "<b>{$a}</b>", de modo que los usuarios de Shibboleth pudieran acceder con facilidad. Si lo deja en blanco, se utilizarán las instrucciones estándar (no las específicas de Shibboleth)';
$string['auth_shib_instructions_key'] = 'Instrucciones de inicio de sesión';
$string['auth_shib_integrated_wayf'] = 'Servicio Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Si habilita esto, Moodle usará su propio servicio WAYF en lugar del configurado para Shibboleth. Moodle mostrará una lista desplegable en esta página de inicio de sesión alternativa donde el usuario debe seleccionar su proveedor de identidad.';
$string['auth_shib_logout_return_url'] = 'URL alternativa de cierre de sesión';
$string['auth_shib_logout_return_url_description'] = 'Proporciona la URL a la que los usuarios Shibboleth se redireccionarán después de la salida de la sesión. <br/> Si se deja vacío, el usuario será redirigido a la ubicación a la que Moodle redirecciona a los usuarios.';
$string['auth_shib_logout_url'] = 'URL del manejador de salida del Proveedor de Servicios Shibboleth';
$string['auth_shib_logout_url_description'] = 'Proporciona la URL del gestor de salida del Proveedor de Servicio Shibboleth. Normalmente es <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Si desea usar el servicio integrado WAYF, debe proporcionar una lista con valores separados por comas de las entityIDs proveedoras de identidades, sus nombres y, opcionalmente, un iniciador de sesión.';
$string['auth_shib_only'] = 'Sólo Shibboleth';
$string['auth_shib_only_description'] = 'Marque esta opción si desea forzar la identificación Shibboleth';
$string['auth_shib_username_description'] = 'Nombre de la variable contextual del servidor Shibboleth que se utilizará como nombre de usuario en Moodle';
$string['auth_shibboleth_errormsg'] = 'Por favor, seleccione la organización a la que pertenece.';
$string['auth_shibboleth_login'] = 'Inicio de sesión Shibboleth';
$string['auth_shibboleth_login_long'] = 'Acceso a Moodle vía Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Inicio de sesión manual';
$string['auth_shibboleth_select_member'] = 'Soy un miembro de...';
$string['auth_shibboleth_select_organization'] = 'Para iniciar sesión a través de Shibboleth, por favor seleccione su organización de la lista desplegable:';
$string['auth_shibbolethdescription'] = 'Con este método, los usuarios se crean y autentican mediante Shibboleth. Para obtener detalles sobre la configuración, consulte el <a href="{$a}">README de Shibboleth</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'El complemento de autenticación Shibboleth no almacena ningún dato personal.';
$string['shib_invalid_account_error'] = 'Usted parece estar autenticado por Shibboleth, pero Moodle no tiene una cuenta válida para su nombre de usuario. Puede ser que no exista su cuenta o que haya sido suspendida.';
$string['shib_no_attributes_error'] = 'Usted parece haber sido Identifado por Shibboleth, pero Moodle no ha recibido ningún atributo de usuario. Por favor, compruebe que su proveedor de identidad envía los atributos necesarios ({$a}) al Proveedor de Servidios en el que Moodle se está ejecutando, o informe al webmaster de este servidor.';
$string['shib_not_all_attributes_error'] = 'Moodle necesita ciertos atributos Shibboleth que no están presentes en su caso. Los atributos son: {$a}<br />Por favor, contacte con el webmaster de este servidor o con su proveedor de identidad.';
$string['shib_not_set_up_error'] = 'La autenticación de Shibboleth no parece estar configurada correctamente porque no hay variables de entorno de Shibboleth presentes para esta página. Consulte el <a href="{$a}">README</a> para obtener más instrucciones sobre cómo configurar la autenticación de Shibboleth o póngase en contacto con el webmaster de esta instalación de Moodle.';
