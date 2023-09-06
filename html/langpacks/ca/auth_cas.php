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
 * Strings for component 'auth_cas', language 'ca', version '4.1'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Opció d\'autenticació';
$string['auth_cas_auth_user_create'] = 'Crea usuaris externament';
$string['auth_cas_baseuri'] = 'URI del servidor (en blanc si no té baseUri)<br />Per exemple, si el servidor CAS respon a l\'adreça ordinador.domini.cat/CAS/ llavors <br />auth_cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URI base';
$string['auth_cas_broken_password'] = 'No podeu continuar sense canviar la contrasenya, però no està disponible cap pàgina on pugueu canviar-la. Contacteu amb l\'administració del vostre Moodle.';
$string['auth_cas_cantconnect'] = 'La part LDAP del mòdul CAS no es pot connectar amb el servidor: {$a}';
$string['auth_cas_casversion'] = 'Versió del protocol CAS';
$string['auth_cas_certificate_check'] = 'Seleccioneu «Si» si voleu validar el certificat del servidor';
$string['auth_cas_certificate_check_key'] = 'Validació del servidor';
$string['auth_cas_certificate_path'] = 'Camí al fitxer cadena CA (en format PEM) per validar el certificat del servidor';
$string['auth_cas_certificate_path_empty'] = 'Si habiliteu la validació del servidor, us caldrà especificar el camí del certificat';
$string['auth_cas_certificate_path_key'] = 'Camí del certificat';
$string['auth_cas_changepasswordurl'] = 'URL de canvi de contrasenya';
$string['auth_cas_create_user'] = 'Activeu aquesta opció si voleu inserir usuaris autenticats per CAS a la base de dades de Moodle. Si no, només els usuaris que ja existeixin a la base de dades de Moodle podran iniciar sessió.';
$string['auth_cas_create_user_key'] = 'Crea usuari';
$string['auth_cas_curl_ssl_version'] = 'La versió (2 o 3) de SSL a utilitzar. Per defecte PHP tracta de determinar aquest paràmetre ell mateix, tot i que de vegades caldrà configurar-lo de forma manual.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Per defecte';
$string['auth_cas_curl_ssl_version_key'] = 'Versió SSL de cURL';
$string['auth_cas_enabled'] = 'Activeu aquesta opció si voleu utilitzar autenticació CAS.';
$string['auth_cas_hostname'] = 'Nom del servidor CAS <br />P. ex. ordinador.domini.cat';
$string['auth_cas_hostname_key'] = 'Nom del servidor';
$string['auth_cas_invalidcaslogin'] = 'L\'inici de sessió ha fallat. Potser no esteu autoritzat.';
$string['auth_cas_language'] = 'Seleccioneu l\'idioma per a les pàgines d\'autenticació';
$string['auth_cas_language_key'] = 'Idioma';
$string['auth_cas_logincas'] = 'Accés a la connexió segura';
$string['auth_cas_logout_return_url'] = 'Proporcioneu l\'URL on es redirigiran els usuaris de CAS després de tancar la sessió. <br /> Si es deixa buit, l\'usuari serà redirigit a la ubicació que tingui Moodle per defecte';
$string['auth_cas_logout_return_url_key'] = 'URL alternatiu per a la sortida de sessió';
$string['auth_cas_logoutcas'] = 'Seleccioneu «Si» si voleu desconnectar-vos de CAS quan sortiu de Moodle';
$string['auth_cas_logoutcas_key'] = 'Opció de sortida de CAS';
$string['auth_cas_multiauth'] = 'Seleccioneu «Si» si voleu tenir diversos mètodes d\'autenticació (CAS + altres)';
$string['auth_cas_multiauth_key'] = 'Autenticació múltiple';
$string['auth_cas_port'] = 'Port del servidor CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Seleccioneu «Si» per utilitzar CAS en mode servidor intermediari';
$string['auth_cas_proxycas_key'] = 'Mode proxy';
$string['auth_cas_server_settings'] = 'Configuració del servidor CAS';
$string['auth_cas_text'] = 'Connexió segura';
$string['auth_cas_use_cas'] = 'Utilitza CAS';
$string['auth_cas_version'] = 'Versió del protocol CAS a emprar';
$string['auth_casdescription'] = 'Aquest mètode utilitza un servidor CAS (Central Authentication Service, Servei Central d\'Autenticació) per autenticar els usuaris en un entorn Single Sign On (SSO, inscripció única). També podeu fer servir una autenticació LDAP. Si el nom d\'usuari i la contrasenya són vàlids d\'acord amb el CAS, Moodle crea un usuari nou a la seva base de dades i, si escau, agafa els atributs del LDAP. Als inicis de sessió posteriors només es verifiquen el nom d\'usuari i la contrasenya.';
$string['auth_casnotinstalled'] = 'No es pot utilitzar l\'autenticació CAS. El mòdul PHP LDAP no està instal·lat.';
$string['noldapserver'] = 'No hi ha cap servidor LDAP configurat per CAS! Sincronització inhabilitada.';
$string['pluginname'] = 'Servidor CAS (SSO)';
$string['synctask'] = 'Tasca de sincronització dels usuaris CAS';
