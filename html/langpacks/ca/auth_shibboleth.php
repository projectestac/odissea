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
 * Strings for component 'auth_shibboleth', language 'ca', version '4.1'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = 'Nom del mètode d\'autenticació';
$string['auth_shib_auth_method_description'] = 'Proporciona una paraula per a la identificació Shibboleth que sigui familiar per als vostres usuaris. Aquesta pot ser el nom de la vostra federació Shibboleth, com ara <tt>SWITHCHaai Login</tt> o <tt>InCommon Login</tt> o semblant.';
$string['auth_shib_changepasswordurl'] = 'URL de canvi de contrasenya';
$string['auth_shib_contact_administrator'] = 'En cas que no estigueu associat amb les organitzacions donades i us calgui accés al curs en aquest servidor, contacteu amb l\'<a href="mailto:{$a}">Administrador de Moodle</a>.';
$string['auth_shib_convert_data'] = 'API de modificació de dades';
$string['auth_shib_convert_data_description'] = 'Podeu utilitzar aquesta API per introduir modificacions en les dades que proporcioni Shibboleth. Teniu instruccions al fitxer <a href="../auth/shibboleth/README.txt" target="_blank">README</a>.';
$string['auth_shib_convert_data_filepath_warning'] = 'No podeu utilitzar un fitxer que es trobi dins del directori de dades del lloc actual ($CFG->dataroot) com a API de modificació de dades.';
$string['auth_shib_convert_data_warning'] = 'El fitxer no existeix o el procés del servidor web no el pot llegir.';
$string['auth_shib_idp_list'] = 'Proveïdors d\'identitat ';
$string['auth_shib_idp_list_description'] = 'Proporciona una llista de proveïdors d\'identitat de noms d\'usuari d\'entre els quals es permet que l\'usuari triï a la pàgina d\'inici. <br>A cada línia cal que hi hagi una tupla separada per comes de l\'ID del proveïdor (vegeu el fitxer de metadades de Shibboleth) i del nom del proveïdor així com s\'haurà de mostrar a la llista desplegable de sota. </br>
Un tercer paràmetre opcional que podeu afegir és la vostra ubicació en la sessió Shibboleth, que pot ser utilitzada en cas que la instal·lació de Moodle sigui part d\'una configuració multifederació.';
$string['auth_shib_instructions'] = 'Utilitzeu l\'<a href="{$a}">inici de sessió Shibboleth</a> per accedir mitjançant Shibboleth, si la vostra institució ho permet. Si no, utilitzeu el formulari d\'inici de sessió normal.';
$string['auth_shib_instructions_help'] = 'Aquí podeu proporcionar instruccions per explicar Shibboleth als vostres usuaris. Es visualitzaran en la secció d\'instruccions de la pàgina d\'inici de sessió. Les instruccions han d\'incloure un enllaç a «<b>{$a}</b>» on els usuaris faran clic quan vulguin iniciar la sessió.';
$string['auth_shib_instructions_key'] = 'Instruccions per a l\'inici de sessió';
$string['auth_shib_integrated_wayf'] = 'Servei Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Si ho habiliteu, Moodle utilitzarà el seu propi servei WAYF en lloc del que proporciona Shibboleth. Moodle mostrarà una llista desplegable en aquesta pàgina alternativa d\'inici de sessió on l\'usuari haurà de seleccionar el seu proveïdor d\'identitats.';
$string['auth_shib_logout_return_url'] = 'Desconnexió alternativa i retorn a l\'URL';
$string['auth_shib_logout_return_url_description'] = 'Proporciona l\'URL on els usuaris Shibboleth seran redirigits després de tancar la sessió.</br> Si ho deixeu buit, els usuaris seran redirigits a la localització on Moodle redirigeix els usuaris.';
$string['auth_shib_logout_url'] = 'Proveïdor de servei Shibboleth del gestor de desconnexió d\'URL';
$string['auth_shib_logout_url_description'] = 'Proporciona l\'URL per al gestor de desconnexió del proveïdor de servei Shibboleth. Aquest és normalment <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Si voleu utilitzar el servei integrat WAYF, heu de proporcionar una llista separada per comes d\'entityIDs dels proveïdors d\'identitats, els seus noms i, opcionalment, un iniciador de sessió.';
$string['auth_shib_only'] = 'Només Shibboleth';
$string['auth_shib_only_description'] = 'Activeu aquesta opció si cal imposar l\'autenticació via Shibboleth';
$string['auth_shib_username_description'] = 'Nom de la variable d\'entorn del servidor Shibboleth que s\'utilitzarà com a nom d\'usuari a Moodle';
$string['auth_shibboleth_errormsg'] = 'Seleccioneu l\'organització de la qual sou membre';
$string['auth_shibboleth_login'] = 'Inici de sessió Shibboleth';
$string['auth_shibboleth_login_long'] = 'Inici de sessió a Moodle a través de Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Inici de sessió manual';
$string['auth_shibboleth_select_member'] = 'Sóc membre de:';
$string['auth_shibboleth_select_organization'] = 'Per a l\'autenticació a través de Shibboleth, seleccioneu la vostra organització en la llista desplegable:';
$string['auth_shibbolethdescription'] = 'Amb l\'ús d\'aquest mètode es creen i s\'autentiquen usuaris utilitzant <a href="http://shibboleth.internet2.edu/">Shibboleth</a>.<br />Assegureu-vos de llegir les instruccions del fitxer <a href="../auth/shibboleth/README.txt">README</a> per conèixer com es configura Moodle amb Shibboleth.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'El connector d\'autenticació Shibboleth no emmagatzema cap dada personal.';
$string['shib_invalid_account_error'] = 'Sembla que esteu autenticat amb Shibboleth, però Moodle no us té registrat amb aquest nom d\'usuari. Potser el vostre compte no existeix o ha estat suspès.';
$string['shib_no_attributes_error'] = 'Sembla que us heu autenticat via Shibboleth, però Moodle no ha rebut els vostres atributs d\'usuari. Comproveu que el vostre proveïdor d\'identitat ha alliberat els atributs ({$a}) necessaris al proveïdor de servei en el qual s\'està executant Moodle, o informeu l\'administrador d\'aquest servidor.';
$string['shib_not_all_attributes_error'] = 'Moodle necessita certs atributs de Shibboleth que en el vostre cas no són presents. Els atributs són: {$a}<br />Contacteu amb l\'administrador d\'aquest servidor o amb el vostre proveïdor d\'identitat.';
$string['shib_not_set_up_error'] = 'Sembla que l\'autenticació via Shibboleth no ha estat correctament configurada, perquè no hi ha variables d\'entorn de Shibboleth presents per a aquesta pàgina. Consulteu les instruccions de configuració al fitxer <a href="README.txt">README</a> o contacteu amb l\'administrador d\'aquest Moodle.';
