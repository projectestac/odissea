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
 * Strings for component 'auth_cas', language 'ro', version '4.5'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Opțiune pentru autentificare';
$string['auth_cas_auth_logo'] = 'Sigla metodei de autentificare';
$string['auth_cas_auth_logo_description'] = 'Furnizați o siglă pentru metoda de autentificare CAS care este familiară utilizatorilor dvs.';
$string['auth_cas_auth_name'] = 'Numele metodei de autentificare';
$string['auth_cas_auth_name_description'] = 'Furnizați un nume pentru metoda de autentificare CAS care este familiar utilizatorilor dvs.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Creează utilizatori extern';
$string['auth_cas_baseuri'] = 'URL-ul serverului  (nothing if no baseUri)<br />De exemplu, dacă serverul CAS răspunde la host.domaine.fr/CAS/ then<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URI de bază';
$string['auth_cas_broken_password'] = 'Nu puteți continua fără a schimba parola, dar nu există nici o pagină disponibilă pentru modificarea acesteia. Vă rugăm să contactați administratorul Moodle.';
$string['auth_cas_cantconnect'] = 'Partea LDAP a modulelor CAS nu se pot conecta la server: {$a}';
$string['auth_cas_casversion'] = 'Versiune de protocol CAS';
$string['auth_cas_certificate_check'] = 'Selectați \'da\', dacă doriți să validați certificatul serverului';
$string['auth_cas_certificate_check_key'] = 'Validare server';
$string['auth_cas_certificate_path'] = 'Calea fișierului CA chain (FormatPEM ) de validare a certificatului serverului';
$string['auth_cas_certificate_path_empty'] = 'În cazul în care activați validarea serverului, trebuie să specificați o cale a certificatului';
$string['auth_cas_certificate_path_key'] = 'Calea certificatului';
$string['auth_cas_changepasswordurl'] = 'URL schimbare parolă';
$string['auth_cas_create_user'] = 'Activați dacă doriți să inserați utilizatorii autentificați-CAS în baza de date Moodle. Dacă nu, atunci doar utilizatorii care există deja în baza de date Moodle se pot loga.';
$string['auth_cas_create_user_key'] = 'Creați utilizator';
$string['auth_cas_curl_ssl_version'] = 'Versiunea SSL (2 sau 3), pentru a fi utilizată. În mod implicit PHP va încerca să stabilească acest lucru de sine stătător, cu toate că, în unele cazuri, trebuie să fie setată manual.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Implicit';
$string['auth_cas_curl_ssl_version_key'] = 'Versiune cURL SSL';
$string['auth_cas_enabled'] = 'Activați, dacă doriți să folosiți autentificarea CAS.';
$string['auth_cas_hostname'] = 'Numele gazdei serverului CAS <br />eg: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Numele gazdei';
$string['auth_cas_invalidcaslogin'] = 'Ne pare rău, autentificarea a eșuat - nu sunteți autorizat';
$string['auth_cas_language'] = 'Selectați limba pentru paginile de autentificare.';
$string['auth_cas_language_key'] = 'Limbă';
$string['auth_cas_logincas'] = 'Conexiune sigură';
$string['auth_cas_logout_return_url'] = 'Furnizați URL-ul unde utilizatorii CAS vor fi redirecționați după delogare.<br />Dacă este necompletat, utilizatorii vor fi redirecționați către locația unde moodle redirecționează utilizatorii';
$string['auth_cas_logout_return_url_key'] = 'URL alternativ de delogare';
$string['auth_cas_logoutcas'] = 'Selectați  \'da\', dacă doriți să vă deconectați de la CAS când vă deconectați de la Moodle';
$string['auth_cas_logoutcas_key'] = 'Opțiunea logout CAS';
$string['auth_cas_multiauth'] = 'Selectați \'da\', dacă doriți să aveți mai multe autentificări (CAS + altă autentificare)';
$string['auth_cas_multiauth_key'] = 'Multi-autentificare';
$string['auth_cas_port'] = 'Port al serverului CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Selectați \'da\' dacă folosiți CAS în proxy-mode';
$string['auth_cas_proxycas_key'] = 'Mod proxy';
$string['auth_cas_server_settings'] = 'Configurare server CAS';
$string['auth_cas_text'] = 'Conexiune sever';
$string['auth_cas_use_cas'] = 'Utilizator CAS';
$string['auth_cas_version'] = 'Versiunea protocolului CAS de utilizat';
$string['auth_casdescription'] = 'Această metodă folosește un server CAS (Central Authentication Service) pentru autentificarea utilizatorilor într-un Single Sign On environment (SSO). De asemenea, puteți utiliza o autentificare simple LDAP. În cazul în care numele de utilizator și parola sunt valabile în conformitate cu CAS, Moodle creează un nou utilizator în baza de date, folosind atributele de utilizator din LDAP, dacă este necesar acest lucru. Pentru logările următoare sunt verificate doar numele de utilizator și parola.';
$string['auth_casnotinstalled'] = 'Nu se poate folosi autentificarea CAS. Modulul PHP LDAP nu este instalat.';
$string['noldapserver'] = 'Nu există server LDAP configurat pentru CAS! Sincronizarea este dezactivată.';
$string['pluginname'] = 'Server CAS  (SSO)';
$string['privacy:metadata'] = 'Pluginul de autentificare server CAS (SSO) nu stochează date personale.';
$string['synctask'] = 'Sincronizarea activității utilizatorilor CAS';
