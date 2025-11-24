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
 * Strings for component 'auth_cas', language 'lt', version '4.5'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Autentifikavimo pasirinkimas';
$string['auth_cas_auth_logo'] = 'Autentifikavimo metodo logotipas';
$string['auth_cas_auth_logo_description'] = 'Pateikite naudotojams žinomą CAS autentifikavimo metodo logotipą.';
$string['auth_cas_auth_name'] = 'Autentifikavimo metodo pavadinimas';
$string['auth_cas_auth_name_description'] = 'Pateikite naudotojams žinomą CAS autentifikavimo metodo pavadinimą.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Kurti naudotojus išoriškai';
$string['auth_cas_baseuri'] = 'Serverio URI (nieko, jei nėra bazinio URI)<br />Pavyzdžiui, jei CAS serveris atsako į host.domaine.fr/CAS/, tada<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Bazinis URI';
$string['auth_cas_broken_password'] = 'Negalite tęsti nepakeitę slaptažodžio, tačiau nėra slaptažodžio keitimo puslapio. Susisiekite su „Moodle“ administratoriumi.';
$string['auth_cas_cantconnect'] = 'CAS modulio LDAP dalis negali prisijungti prie serverio: {$a}';
$string['auth_cas_casversion'] = 'Versija';
$string['auth_cas_certificate_check'] = 'Nustatykite „taip“, jei norite patikrinti serverio sertifikatą';
$string['auth_cas_certificate_check_key'] = 'Serverio tikrinimas';
$string['auth_cas_certificate_path'] = 'CA grandininio failo (PEM formato) kelias, skirtas serverio sertifikatui tikrinti';
$string['auth_cas_certificate_path_empty'] = 'Įjungę serverio tikrinimą turite nurodyti sertifikato kelią';
$string['auth_cas_certificate_path_key'] = 'Sertifikato kelias';
$string['auth_cas_changepasswordurl'] = 'Slaptažodžio keitimo URL';
$string['auth_cas_create_user'] = 'Įjunkite, jei norite į „Moodle“ duomenų bazę įtraukti CAS autentifikuotus naudotojus. Jei ne, tada prisijungti galės tik jau „Moodle“ duomenų bazėje esantys naudotojai.';
$string['auth_cas_create_user_key'] = 'Kurti naudotoją';
$string['auth_cas_curl_ssl_version'] = 'Naudojama SSL versija (2 arba 3). Pagal numatytuosius nustatymus PHP bandys tai nustatyti pats, nors kai kuriais atvejais tai turi būti nustatyta rankiniu būdu.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Numatytasis';
$string['auth_cas_curl_ssl_version_key'] = 'cURL SSL Versija';
$string['auth_cas_enabled'] = 'Įjunkite, jei norite naudoti CAS autentifikavimą.';
$string['auth_cas_hostname'] = 'CAS serverio pagrindinio kompiuterio vardas <br />pvz.: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Pagrindinio kompiuterio vardas';
$string['auth_cas_invalidcaslogin'] = 'Atsiprašome, bet jūsų prisijungimas nesėkmingas, nes nepavyko jūsų įgalioti';
$string['auth_cas_language'] = 'Pasirinkta kalba';
$string['auth_cas_language_key'] = 'Kalba';
$string['auth_cas_logincas'] = 'Saugaus ryšio prieiga';
$string['auth_cas_logout_return_url'] = 'Pateikite URL, į kurį bus peradresuojami CAS naudotojai kai atsijungia.<br />Jei paliksite tuščią, naudotojai bus nukreipti į vietą, į kurią Moodle nukreips naudotojus';
$string['auth_cas_logout_return_url_key'] = 'Alternatyvus atsijungimo grąžinimo URL';
$string['auth_cas_logoutcas'] = 'Nustatykite „taip“, jei atsijungę nuo „Moodle“ norite atsijungti ir nuo CAS';
$string['auth_cas_logoutcas_key'] = 'Atsijungti nuo CAS';
$string['auth_cas_multiauth'] = 'Nustatykite „taip“, jei norite naudoti kelis autentifikavimus (CAS ir kitokį autentifikavimą)';
$string['auth_cas_multiauth_key'] = 'Keli autentifikavimai';
$string['auth_cas_port'] = 'CAS serverio prievadas';
$string['auth_cas_port_key'] = 'Prievadas';
$string['auth_cas_proxycas'] = 'Nustatykite „taip“, jei CAS naudojate tarpinio serverio režimu';
$string['auth_cas_proxycas_key'] = 'Tarpinio serverio režimas';
$string['auth_cas_server_settings'] = 'CAS serverio konfigūracija';
$string['auth_cas_text'] = 'Saugus ryšys';
$string['auth_cas_use_cas'] = 'Naudoti CAS';
$string['auth_cas_version'] = 'CAS versija';
$string['auth_casdescription'] = 'Šis metodas naudoja CAS serverį („Central Authentication Service“) naudotojams autentifikuoti bendrosios autentifikacijos aplinkoje (SSO). Galite naudoti ir paprastą LDAP autentifikavimą. Jei pateiktas naudotojo vardas ir slaptažodis tinkami pagal CAS, „Moodle“ savo duomenų bazėje sukuria naują naudotojo įrašą, jei reikia, iš LDAP paimdama naudotojo atributus. Prisijungiant kitus kartus tikrinamas tik naudotojo vardas ir slaptažodis.';
$string['auth_casnotinstalled'] = 'Negalima naudoti CAS autentifikavimo. Neįdiegtas PHP LDAP modulis.';
$string['noldapserver'] = 'Joks LDAP serveris skirtas CAS nėra sukonfigūruotas! Sinchronizavimas išjungtas.';
$string['pluginname'] = 'CAS serveris (SSO)';
$string['privacy:metadata'] = 'CAS serverio (SSO) autentifikavimo papildinys nesaugo jokių asmeninių duomenų.';
$string['synctask'] = 'CAS naudotojų sinchronizavimo užduotis';
