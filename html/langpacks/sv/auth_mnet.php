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
 * Strings for component 'auth_mnet', language 'sv', version '3.8'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'När detta är inställt till \'Ja\' så kommer en post för lokal användare att skapas automatiskt när en fjärranvändare loggar in för första gången.';
$string['auth_mnet_roamin'] = 'Den här värdens användare kan navigera vidare till din webbplats.';
$string['auth_mnet_roamout'] = 'Dina användare kan navigera vidare till de här värdarna.';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Timeout räknat i sekunder för autentisering via XMLRPC-transporten.';
$string['auth_mnetdescription'] = 'Användare autenticeras i enlighet med det nät av tillförlitlighet som har definierats i dina inställningar för nätverk för Moodle.';
$string['auto_add_remote_users'] = 'Lägg till fjärranvändare automatiskt';
$string['crontask'] = 'Bakgrundsbearbetning av MNET-autentisering';
$string['pluginname'] = 'MNet-autentisering';
$string['privacy:metadata:external:mahara'] = 'Denna pluginmodul kan skicka data externt till en länkad Mahara-applikation.';
$string['privacy:metadata:external:moodle'] = 'Denna pluginmodul kan skicka data externt till en länkad Moodleapplikation.';
$string['privacy:metadata:mnet_external:address'] = 'Användarens adress';
$string['privacy:metadata:mnet_external:aim'] = 'Användarens AIM-id';
$string['privacy:metadata:mnet_external:alternatename'] = 'Alternativnamn för användare';
$string['privacy:metadata:mnet_external:city'] = 'Användarort';
$string['privacy:metadata:mnet_external:country'] = 'Användarland';
$string['privacy:metadata:mnet_external:currentlogin'] = 'Nuvarande användarlogin';
$string['privacy:metadata:mnet_external:department'] = 'Användarens avdelning';
$string['privacy:metadata:mnet_external:description'] = 'Generell användarinformation';
$string['privacy:metadata:mnet_external:email'] = 'Användarens e-post';
$string['privacy:metadata:mnet_external:firstname'] = 'Användarens förnamn';
$string['privacy:metadata:mnet_external:icq'] = 'Användarens ICQ-nummer.';
$string['privacy:metadata:mnet_external:id'] = 'Användar-ID';
$string['privacy:metadata:mnet_external:imagealt'] = 'Alternativ text för användarens bild.';
$string['privacy:metadata:mnet_external:institution'] = 'Institutionen hos vilken användaren är medlem.';
$string['privacy:metadata:mnet_external:lastaccess'] = 'Tidpunkten för senaste inloggningen';
$string['privacy:metadata:mnet_external:lastlogin'] = 'Den här användarens senaste inloggning.';
$string['privacy:metadata:mnet_external:lastname'] = 'Användarens efternamn.';
$string['privacy:metadata:mnet_external:maildigest'] = 'En inställning avseende e-postsammandrag för denna användare.';
$string['privacy:metadata:mnet_external:middlename'] = 'Användarens mellannamn';
$string['privacy:metadata:mnet_external:msn'] = 'Användarens MSN-id';
$string['privacy:metadata:mnet_external:phone1'] = 'Användarens telefonnummer';
$string['privacy:metadata:mnet_external:phone2'] = 'Ett ytterligare telefonnummer till användaren';
$string['privacy:metadata:mnet_external:policyagreed'] = 'En flagga för att avgöra om användaren har godkänt webbplatspolicyn.';
$string['privacy:metadata:mnet_external:skype'] = 'Användarens Skype-ID';
$string['privacy:metadata:mnet_external:timezone'] = 'Användarens tidszon';
$string['privacy:metadata:mnet_external:username'] = 'Användarnamn som är relaterat till användaren.';
$string['privacy:metadata:mnet_external:yahoo'] = 'Användarens Yahoo-id';
$string['privacy:metadata:mnet_log:action'] = 'Åtgärd utförd av användaren';
$string['privacy:metadata:mnet_log:cmid'] = 'Kursmodulens ID';
$string['privacy:metadata:mnet_log:info'] = 'Ytterligare information om åtgärden.';
$string['privacy:metadata:mnet_log:time'] = 'Tidpunkt då åtgärden inträffade.';
$string['privacy:metadata:mnet_session:token'] = 'Unik sessionsidentifierare';
$string['privacy:metadata:mnet_session:username'] = 'Användarnamn för användaren som hoppar till fjärrsystemet.';
$string['rpc_negotiation_timeout'] = 'Tiden för RPC-förhandling har gått ut';
$string['sso_idp_description'] = 'Publicera den här tjänsten så att dina användare ska kunna gå vidare till {$a}-webbplatsen utan att behöva logga in där. <ul><li><em>Beroende</em>: Du måste också <strong>prenumerera</strong> på SSO-tjänsten (Tjänstprovidern) på {$a}.</li></ul> <br />Prenumerera på den här tjänsten för att tillåta autentiserade användare från {$a} att komma åt din webbplats utan att behöva logga in igen. <ul><li><em>Beroende</em>: Du måste <strong>publicera</strong> SSO-tjänsten (Tjänstprovidern) till {$a}.</li></ul> <br />';
$string['sso_idp_name'] = 'SSO (Identitetsleverantör)';
$string['sso_mnet_login_refused'] = 'Användarnamn {$a->user} har inte tillstånd att logga in från {$a->host}.';
$string['sso_sp_description'] = 'Publicera den här tjänsten för att tillåta att användare från {$a} ska kunna komma åt din webbplats utan att behöva logga in. <ul><li><em>Beroende</em>: Du måste också <strong>prenumerera</strong> på SSO-tjänsten (Tjänstprovidern) på {$a}.</li></ul> <br />Prenumerera på den här tjänsten för att tillåta att dina användare går vidare {$a}-webbplatsen utan att behöva logga in igen. <ul><li><em>Beroende</em>: Du måste <strong>publicera</strong> SSO-tjänsten (Tjänstprovidern) till {$a}.</li></ul> <br />';
$string['sso_sp_name'] = 'SSO (Tjänsteleverantör)';
$string['unknownhost'] = 'Okänd värd';
