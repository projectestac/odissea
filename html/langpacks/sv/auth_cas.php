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
 * Strings for component 'auth_cas', language 'sv', version '3.11'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Val angående autentisering';
$string['accesCAS'] = 'CAS-användare';
$string['accesNOCAS'] = 'andra användare';
$string['auth_cas_auth_logo'] = 'Lopgotyp för autentiseringsmetod';
$string['auth_cas_auth_logo_description'] = 'Ange en logotyp för CAS-autentiseringsmetoden som känns bekant för dina användare.';
$string['auth_cas_auth_name'] = 'Namn';
$string['auth_cas_auth_name_description'] = 'Ange ett namn för CAS-autentiseringsmetoden som känns bekant för dina användare.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Skapa användare externt';
$string['auth_cas_baseuri'] = 'Serverns URI (ingenting om det inte är en baseURI)<br />IF t.ex. CAS-servern svarar mot
värd.domän.se/CAS/ THEN <br />cas_baseuri=CAS/';
$string['auth_cas_baseuri_key'] = 'Bas-URI';
$string['auth_cas_broken_password'] = 'Du kan inte fortsätta utan att ändra ditt lösenord. Dock finns ingen sida tillgänglig för att kunna ändra det. Vänligen kontakta administratören.';
$string['auth_cas_cantconnect'] = 'LDAP-delen av CAS-modulen kan inte åstadkomma en anslutning till servern:{$a}';
$string['auth_cas_casversion'] = 'CAS-protokollversion';
$string['auth_cas_certificate_check'] = 'Ställ om det här om du vill validera certifikatet för servern';
$string['auth_cas_certificate_check_key'] = 'Validering av server';
$string['auth_cas_certificate_path'] = 'Sökväg till CA kedjefilen (PEM-format) för att validera certifikatet för servern';
$string['auth_cas_certificate_path_empty'] = 'Om du vill aktivera validering av certifikatet för servern så måste du ange en sökväg för certifikatet';
$string['auth_cas_certificate_path_key'] = 'Sökväg för certifikatet';
$string['auth_cas_changepasswordurl'] = 'URL till sida för att ändra lösenord';
$string['auth_cas_create_user'] = 'Aktivera detta om du vill lägga till CAS-autentiserade användare i Moodle-databasen. Om inte kan bara användare som redan finns i Moodle-databasen logga in.';
$string['auth_cas_create_user_key'] = 'Skapa användare';
$string['auth_cas_curl_ssl_version'] = 'SSL-versionen (2 eller 3) som ska användas. Som standard kommer PHP försöka avgöra detta själv, även om det i vissa fall måste ställas in manuellt.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Standard';
$string['auth_cas_curl_ssl_version_key'] = 'cURL SSL-Version';
$string['auth_cas_enabled'] = 'Aktivera detta om Du vill använda autentisering med CAS.';
$string['auth_cas_hostname'] = 'Värdnamn för CAS-server<br />t.ex. värd.domän.se';
$string['auth_cas_hostname_key'] = 'Värdnamn';
$string['auth_cas_invalidcaslogin'] = 'Din inloggning misslyckades tyvärr - dina rättigheter kunde inte bekräftas';
$string['auth_cas_language'] = 'Välj språk för autentiseringssidor';
$string['auth_cas_language_key'] = 'Språk';
$string['auth_cas_logincas'] = 'Åtkomst via säker anslutning';
$string['auth_cas_logout_return_url'] = 'Ange URL:en som CAS-användare ska omdirigeras till efter utloggningen.<br />Om den lämnas tom kommer användarna att omdirigeras till Moodles standardplats för omdirigering.';
$string['auth_cas_logout_return_url_key'] = 'Alternativ omdirigerings-URL vid utloggning';
$string['auth_cas_logoutcas'] = 'Välj \'ja\' om du vill logga ut från CAS när du loggar ut från Moodle.';
$string['auth_cas_logoutcas_key'] = 'Utloggningsalternativ';
$string['auth_cas_multiauth'] = 'Ändra detta till \'Ja\' om Du vill använda multi-autentisering (CAS eller annan autentisering).';
$string['auth_cas_multiauth_key'] = 'Multi-autentisering';
$string['auth_cas_port'] = 'CAS-serverns port';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Välj \'Ja\' om du använder CAS i proxyläge';
$string['auth_cas_proxycas_key'] = 'Proxy-mode';
$string['auth_cas_server_settings'] = 'Konfiguration av CAS-server';
$string['auth_cas_text'] = 'Säker uppkoppling';
$string['auth_cas_use_cas'] = 'Använd CAS';
$string['auth_cas_version'] = 'CAS-protokollversion att använda';
$string['auth_casdescription'] = 'Den här metoden använder en CAS-server (Central Authentication Service) för att autentisera användare i en Single Sign On environment (SSO). Du kan också använda enkel LDAP autentisering. Om ett visst givet annvändarnamn och lösenord är giltigt enligt CAS så lägger Moodle in en ny användare i sin databas, och hämtar användarens egenskaper (attribut) från LDAP om så krävs. Vid nästföljande inloggningar så kontrolleras bara användarnamnet och lösenordet.';
$string['auth_casnotinstalled'] = 'Det går inte att använda autentisering med  CAS. PHP modulen för LDAP är inte installerad.';
$string['noldapserver'] = 'Ingen LDAP-server har konfigurerats för CAS. Synkroniseringen har inaktiverats.';
$string['pluginname'] = 'CAS-server (SSO)';
$string['privacy:metadata'] = 'Pluginmodulen CAS-server (SSO) autentisering lagrar ingen personinformation.';
$string['synctask'] = 'Synkronisera CAS-användare';
