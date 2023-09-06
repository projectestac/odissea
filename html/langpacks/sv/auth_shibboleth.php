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
 * Strings for component 'auth_shibboleth', language 'sv', version '4.1'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logotyp';
$string['auth_shib_auth_logo_description'] = 'Ange en logotyp för Shibboleth-autentiseringsmetoden som är bekant för dina användare. Detta kan vara logotypen för din Shibboleth-federation, t.ex. <tt>SWITCHaai Login</tt> eller <tt>InCommon Login</tt> eller liknande.';
$string['auth_shib_auth_method'] = 'Namn på autentiseringsmetod';
$string['auth_shib_auth_method_description'] = 'Ange ent namn för Shibboleth-autentiseringsmetoden som är bekant för dina användare. Detta kan vara logotypen för din Shibboleth-federation, t.ex. <tt>SWITCHaai Login</tt> eller <tt>InCommon Login</tt> eller liknande.';
$string['auth_shib_changepasswordurl'] = 'URL till sida för ändring av lösenord';
$string['auth_shib_contact_administrator'] = 'Om du inte är associerad med de angivna organisationerna och behöver åtkomst till en kurs på den här servern kontaktar du <a href="mailto:{$a}">Administratören</a>.';
$string['auth_shib_convert_data'] = 'API för modifiering av data';
$string['auth_shib_convert_data_description'] = 'Du kan använda det här API:et för att ytterligare ändra data från Shibboleth. Se <a href="{$a}">README</a> för ytterligare instruktioner.';
$string['auth_shib_convert_data_filepath_warning'] = 'Du kan inte använda en fil som finns i datarotkatalogen på den här webbplatsen ($CFG->datarot) som dataändrings-API.';
$string['auth_shib_convert_data_warning'] = 'Filen finns inte eller så kan den inte läsas av webbserver-processen.';
$string['auth_shib_idp_list'] = 'Identitetsleverantörer';
$string['auth_shib_idp_list_description'] = 'Ange en lista över entitets-ID:n för identitetsleverantörer så att användaren kan välja mellan dem på inloggningssidan.<br />På varje rad måste det finnas en kommaavgränsad tupel för entityID för IdP (se metadatafilen Shibboleth) och Namn på IdP så som det ska visas i listrutan.<br />I en valfri tredje parameter kan du lägga till platsen för en Shibboleth-sessionsinitiator som ska användas om din Moodle-installation är en del av en multifederationskonfiguration.';
$string['auth_shib_instructions'] = 'Använd <a href="{$a}">Shibboleth-inloggning</a> för att få åtkomst via Shibboleth, förutsatt att din institution stödjer det.<br />Använd annars inloggningsformuläret nedan.';
$string['auth_shib_instructions_help'] = 'Här bör du ange anpassade instruktioner för dina användare för att förklara Shibboleth. De kommer att visas på inloggningssidan i avsnittet instruktioner. Instruktionerna måste innehålla en länk till "<b>{$a}</b>" som användarna klickar på när de vill logga in.';
$string['auth_shib_instructions_key'] = 'Inloggningsinstruktioner';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF-tjänst';
$string['auth_shib_integrated_wayf_description'] = 'Om du aktiverar detta kommer Moodle att använda sin egen WAYF-tjänst i stället för den som konfigurerats för Shibboleth. Moodle kommer att visa en listruta på denna alternativa inloggningssida där användaren måste välja sin Identitetsleverantör.';
$string['auth_shib_logout_return_url'] = 'Alternativ omdirigerings-URL vid utloggning';
$string['auth_shib_logout_return_url_description'] = 'Ange URL:en som Shibboleth-användare ska omdirigeras till efter utloggning.<br />Om den lämnas tom kommer användarna att omdirigeras till den plats som moodle normalt omdirigerar användare till';
$string['auth_shib_logout_url'] = 'URL för Shibboleth-tjänsteleverantörens utloggningshanterare';
$string['auth_shib_logout_url_description'] = 'Ange URL:en till utloggningshanteraren för Shibboleth-tjänsten. Vanligtvis är detta <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Om du vill använda den integrerade WAYF-tjänsten så måste du tillhandahålla en kommaseparerad lista över Identity Provider entityIDs, deras namn och alternativt en initierare för sessioner.';
$string['auth_shib_only'] = 'Endast Shibboleth';
$string['auth_shib_only_description'] = 'Markera det här alternativet om du vill aktivera Shibboleth-autentisering.';
$string['auth_shib_username_description'] = 'Namnet på den webbserver miljövariabel för Shibboleth som ska användas som användarnamn för Moodle.';
$string['auth_shibboleth_errormsg'] = 'Vänligen markera vilken organisation du tillhör!';
$string['auth_shibboleth_login'] = 'Shibboleth-inloggning';
$string['auth_shibboleth_login_long'] = 'Logga in till Moodle med Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Manuell inloggning';
$string['auth_shibboleth_select_member'] = 'Jag är medlem av...';
$string['auth_shibboleth_select_organization'] = 'För autentisering via Shibboleth, vänligen välj din organisation i listrutan:';
$string['auth_shibbolethdescription'] = 'Med den här metoden skapas och autentiseras användare med hjälp av Shibboleth. För att läsa mer om hur du konfigurerar detta, se <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Pluginmodulen Shibboleth-autentisering lagrar ingen personinformation.';
$string['shib_invalid_account_error'] = 'Du verkar vara Shibboleth-autentiserad men Moodle har inget giltigt konto för ditt användarnamn. Ditt konto kanske inte finns eller så kan det ha stängts av.';
$string['shib_no_attributes_error'] = 'Du verkar vara autenticerad via Shibboleth men Moodle fick inga data om egenskaper för användare: Vänligen kontrollera att den som tillhandahåller din identitet vidarebefordrar de nödvändiga egenskaperna ({$a}) till den som står för de tjänster (Services) som Moodle körs på eller informera webmaster på den här servern.';
$string['shib_not_all_attributes_error'] = 'Moodle behöver vissa Shibboleth-egenskaper som inte får att påträffa för Din Del. Egenskaperna är:{$a}<br /> Vänligen kontakta webmaster på den här servern eller den som tillhandahåller de tjänster som Moodle körs på.';
$string['shib_not_set_up_error'] = 'Autentisering via Shibboleth verkar inte att fungera  korrekt. Vänligen konsultera <a href="README.txt">README</a> för vidare instruktioner om hur man sätter upp autentisering via Shibboleth.';
