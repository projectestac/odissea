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
 * Strings for component 'auth_shibboleth', language 'gl', version '4.5'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logo do método de autenticación';
$string['auth_shib_auth_logo_description'] = 'Forneza un logo para o método de autenticación Shibboleth que sexa familiar para os usuarios. Podería ser o logo da súa federación Shibboleth, por exemplo, <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou semellante.';
$string['auth_shib_auth_method'] = 'Nome do método de autenticación';
$string['auth_shib_auth_method_description'] = 'Forneza un nome para o método de autenticación Shibboleth que sexa familiar para os usuarios. Podería ser o nome da súa federación Shibboleth, por exemplo, <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou semellante.';
$string['auth_shib_changepasswordurl'] = 'URL de cambio de contrasinal';
$string['auth_shib_contact_administrator'] = 'No caso de non estar asociado con estas organizacións e necesite acceso a un curso neste servidor, contacte co <a href="mailto:{$a}">Administrador do Moodle</a>';
$string['auth_shib_convert_data'] = 'API de modificación de datos';
$string['auth_shib_convert_data_description'] = 'Pode usar esta API para modificar máis adiante os datos fornecidos por Shibboleth. Lea o ficheiro <a href="{$a}">README</a> para ver instrucións adicionais.';
$string['auth_shib_convert_data_warning'] = 'Non existe o ficheiro ou non é lexíbel polo proceso do servidor.';
$string['auth_shib_idp_list'] = 'Provedores de identidade';
$string['auth_shib_idp_list_description'] = 'Fornecer unha lista de entityIDs de provedores de identidade para permitir que o usuario escolla na páxina de acceso. <br/>Cada liña debe ser unha tupla separada por comas para as entityID dos IdP (véxase o ficheiro de metadatos Shibboleth) e o Nome dos IdP como deberá figurar na lista despregábel.<br/>Como un terceiro parámetro opcional pode engadir a localización dun lanzador de sesión de Shibboleth que empregarase no caso de que a súa instalación de Moodle sexa parte duna configuración de federación múltiple.';
$string['auth_shib_instructions'] = 'Empregue o <a href="{$a}">acceso Shibboleth</a> para acceder mediante Shibboleth se a súa institución o admite. En caso contrario, empregue o formulario de entrada normal que se amosa aquí.';
$string['auth_shib_instructions_help'] = 'Aquí debería fornecerlle aos usuarios instrucións personalizadas para explicar Shibboleth. Amosarase na sección de instrucións da páxina de acceso. As instrucións deben incluír unha ligazón a «<b>{$a}</b>» para que só teñan que premer nel cando queiran acceder.';
$string['auth_shib_instructions_key'] = 'Instrucións de acceso';
$string['auth_shib_integrated_wayf'] = 'Servizo Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Se marca esta opción, Moodle empregará o seu propio servizo WAYF no canto do configurado para Shibboleth. Moodle presentará unha lista despregábel na páxina de acceso alternativa na que o usuario ten que seleccionar o seu provedor de identidade.';
$string['auth_shib_logout_return_url'] = 'URL alternativo de saída da conta';
$string['auth_shib_logout_return_url_description'] = 'Fornece o URL ao que serán redireccionados os usuarios de Shibboleth após sair da conta.<br />Se se deixa baleiro, o usuario será redireccionado á localización á que redirecciona Moodle aos usuarios.';
$string['auth_shib_logout_url'] = 'URL do manexador de saída do Provedor de Servizos Shibboleth';
$string['auth_shib_logout_url_description'] = 'Fornece o URL do manexador do Provedor de servizos Shibboleth. Normalmente é <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Se quere empregar o servizo integrado WAYF, debe fornecer unha lista con valores separados por comas das entityIDs provedoras de identidades, os seus nomes e, opcionalmente, un lanzador de sesión.';
$string['auth_shib_only'] = 'Só Shibboleth';
$string['auth_shib_only_description'] = 'Marque esta opción se quere forzar a autenticación Shibboleth';
$string['auth_shib_username_description'] = 'Nome da variábel de contorno do servidor Shibboleth que empregar como nome de usuario en Moodle';
$string['auth_shibboleth_errormsg'] = 'Seleccione a organización a que pertence.';
$string['auth_shibboleth_login'] = 'Acceso Shibboleth';
$string['auth_shibboleth_login_long'] = 'Acceso a Moodle a través de Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Acceso manual';
$string['auth_shibboleth_select_member'] = 'Son membro de ...';
$string['auth_shibboleth_select_organization'] = 'Para autenticarse por medio de Shibboleth, seleccione a súa organización na lista despregábel:';
$string['auth_shibbolethdescription'] = 'Con este método créanse e autentifícanse os usuarios mediante Shibboleth. Para obter detalles de configuración, consulte <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'O engadido de autenticación Shibboleth non almacena ningún dato persoal.';
$string['shib_invalid_account_error'] = 'Semella que vostede está autenticado por Shibboleth, mais Moodle non ten unha conta válida para o seu nome de usuario. É probábel que non exista a súa conta ou que teña sido suspendida.';
$string['shib_no_attributes_error'] = 'Semella que vostede foi autenticado por Shibboleth, mais Moodle non recibiu ningún atributo de usuario. Comprobe que o seu provedor de identidade envía os atributos necesarios ({$a}) ao provedor de servizos no que está a executarse Moodle, ou informe ao webmaster deste servidor.';
$string['shib_not_all_attributes_error'] = 'Moodle precisa de certos atributos Shibboleth que non están presentes no seu caso. Os atributos son: {$a}<br />Contacte co webmaster deste servidor ou co seu provedor de identidade.';
$string['shib_not_set_up_error'] = 'Semella que a autenticación Shibboleth non é correcta xa que nesta páxina non están presentes as variábeis de contorno Shibboleth. Consulte o ficheiro <a href="{$a}">README</a> se precisa máis instrucións sobre como definir a autenticación Shibboleth, ou contacte co webmaster desta instalación de Moodle.';
