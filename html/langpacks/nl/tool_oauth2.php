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
 * Strings for component 'tool_oauth2', language 'nl', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Ik begrijp dat het uitschakelen van e-mailverificatie een beveiligingsprobleem kan zijn.';
$string['acceptrisk_help'] = 'Als je e-mailverificatie uitschakelt, kan een gebruiker zich mogelijk als een andere gebruiker verifiëren.';
$string['authconfirm'] = 'Deze actie geeft een permanente API-toegang tot Moodle voor de geauthenticeerde account. Dit is bedoeld om gebruikt te worden als een systeemaccount voor het beheren van bestanden waarvan Moodle eigenaar is.';
$string['authconnected'] = 'De systeemaccount is nu verbonden voor offline toegang';
$string['authnotconnected'] = 'De systeemaccount is niet verbonden voor offline toegang';
$string['clever_service'] = 'Slim';
$string['configured'] = 'Geconfigureerd';
$string['configuredstatus'] = 'Geconfigureerd';
$string['connectsystemaccount'] = 'Verbind met een systeemaccount';
$string['createfromtemplate'] = 'Maak een OAuth 2 service van een sjabloon';
$string['createfromtemplatedesc'] = 'Kies één van de OAuth 2 service sjablonen hieronder om een OAuth service aan te maken met een geldige configuratie aan te maken voor één van de bekende service types. Dit zal een OAuth 2 service maken, met alle juiste eindpunten en parameters die nodig zijn voor authenticatie, maar je zult nog steeds de client ID en geheim moeten ingeven voor deze nieuwe service voor deze gebruikt kan worden.';
$string['createnewendpoint'] = 'Maak een nieuw eindpunt voor uitgever "{$a}"';
$string['createnewfacebookissuer'] = 'Maak een nieuwe Facebook service';
$string['createnewgoogleissuer'] = 'Maak een nieuwe Google service';
$string['createnewissuer'] = 'Maak een nieuwe aangepaste service';
$string['createnewmicrosoftissuer'] = 'Maak een nieuwe Microsoft service';
$string['createnewnextcloudissuer'] = 'Maak een nieuwe Nextcloud-service';
$string['createnewservice'] = 'Nieuwe dienst aanmaken:';
$string['createnewuserfieldmapping'] = 'Maak een nieuwe koppeling voor gebruikersvelden voor uitgever "{$a}"';
$string['custom_service'] = 'Op maat';
$string['deleteconfirm'] = 'Weet je zeker dat je identiteitsuitgever "{$a}" wil verwijderen? Alle plugins die daarop steunen zullen niet meer werken.';
$string['deleteendpointconfirm'] = 'Weet je zeker dat je eindpunt "{$a->endpoint}" voor uitgever "{$a->issuer}" wil verwijderen? Alle plugins dit eindpunt nodig hebben zullen stoppen met werken.';
$string['deleteuserfieldmappingconfirm'] = 'Weet je zeker dat je de koppeling naar gebruikersvelden voor uitgever "{$a}" wil verwijderen?';
$string['discovered'] = 'Service opzoeken gelukt';
$string['discovered_help'] = 'Opzoeken betekent dat de OAuth 2  eindpunten automatisch bepaald kunnen worden vanuit de basis-URL van de OAuth-service. Niet alle services vereisen om "opgezocht" te worden, maar als ze dat niet zijn, dan moeten de eindpunten en de koppeling naar gebruikersinformatie manueel ingegeven worden.';
$string['discoverystatus'] = 'Opzoeken';
$string['editendpoint'] = 'Bewerk eindpunt: {$a->endpoint} voor uitgever {$a->issuer}';
$string['editendpoints'] = 'Configureer eindpunten';
$string['editissuer'] = 'Bewerk identiteitsuitgever: {$a}';
$string['edituserfieldmapping'] = 'Bewerk koppeling gebruikersvelden voor uitgever {$a}';
$string['edituserfieldmappings'] = 'Configureer koppeling gebruikersvelden';
$string['endpointdeleted'] = 'Eindpunt verwijderd';
$string['endpointname'] = 'Naam';
$string['endpointname_help'] = 'Sleutel, gebruikt om te zoeken naar dit eindpunt. Moet eindigen op "_endpoint".';
$string['endpointsforissuer'] = 'Eindpunten voor uitgever: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL voor dit eindpunt. Moet https://-protocol gebruiken.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Logindomeinen';
$string['issueralloweddomains_help'] = 'Indien ingesteld dan is deze instelling een komma gescheiden lijst met domeinen waartoe aanmelden beperkt is bij het gebruik van deze provider.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'Service basis-URL';
$string['issuerbaseurl_help'] = 'Basis-URL gebruikt voor toegang tot de service';
$string['issuerclientid'] = 'Client ID';
$string['issuerclientid_help'] = 'De OAuth client ID voor deze uitgever.';
$string['issuerclientsecret'] = 'Client geheim';
$string['issuerclientsecret_help'] = 'Het OAuth client geheim voor deze uitgever.';
$string['issuerdeleted'] = 'Identiteitsuitgever verwijderd';
$string['issuerdisabled'] = 'Identiteitsuitgever uitgeschakeld';
$string['issuerenabled'] = 'Identiteitsuitgever ingeschakeld';
$string['issuerimage'] = 'Logo URL';
$string['issuerimage_help'] = 'Een afbeeldings-URL die gebruikt wordt om een logo voor deze uitgever te tonen. Kan getoond worden op de login-pagina.';
$string['issuerloginpagename'] = 'Getoonde naam op de login-pagina';
$string['issuerloginpagename_help'] = 'Als je hier een naam geeft, zal die gebruikt worden op de login-pagina in plaats van de service-naam.';
$string['issuerloginparams'] = 'Bijkomende parameters in een login-aanvraag.';
$string['issuerloginparams_help'] = 'Sommige systemen vereisen bijkomende parameters voor een login-aanvraag om het basisprofiel van de gebruiker te lezen.';
$string['issuerloginparamsoffline'] = 'Bijkomende parameters die opgenomen worden in een login-aanvraag voor offline toegang.';
$string['issuerloginparamsoffline_help'] = 'Elk OAuth-systeem bepaalt een andere manier om offline toegang te vragen. Google bijvoorbeeld eist volgende parameters: "access_type=offline&prompt=consent". Deze parameters moeten in URL query parameter formaat zijn.';
$string['issuerloginscopes'] = 'Scopes, inbegrepen in een login-aanvraag.';
$string['issuerloginscopes_help'] = 'Sommige systemen vereisten bijkomende scopes voor een login-aanvraag om het basisprofiel van gebruikers te kunnen lezen. De standaard scopes voor een OpenID Connect compliant systeem zijn "openid profile email".';
$string['issuerloginscopesoffline'] = 'Scopes, inbegrepen in een login-aanvraag voor offline toegang.';
$string['issuerloginscopesoffline_help'] = 'Elk OAuth-systeem vraagt een verschillende manier om offline toegang te vragen. Microsoft bijvoorbeeld vraagt een bijkomende scope "offline_access".';
$string['issuername'] = 'Naam';
$string['issuername_help'] = 'Naam vand e identiteitsuitgever. Kan getoond worden op de loginpagina.';
$string['issuerrequireconfirmation'] = 'Vereis e-mailverificatie';
$string['issuerrequireconfirmation_help'] = 'Vereis dat alle gebruikers hun e-mailadres verifiëren voor ze kunnen aanmelden met OAuth. Dit geldt voor alle nieuwe accounts als deel van het login-proces of wanneer een bestaande Moodle-account verbonden wordt aan een OAuth login via een overeenkomstig e-mailadres.';
$string['issuers'] = 'Uitgevers';
$string['issuersetup'] = 'Gedetailleerde instructies bij het configureren van de gewone OAuth 2 services.';
$string['issuersetuptype'] = 'Gedetailleerde instructies bij het configureren van de {$a} OAuth 2 services.';
$string['issuershowonloginpage'] = 'Toon op loginpagina';
$string['issuershowonloginpage_help'] = 'Als de OAuth 2 Authenticatieplugin ingeschakeld is, dan zal deze login-uitgever opgelijst worden op de login-pagina zodat gebruikers met de account van deze uitgever kunnen aanmelden.';
$string['issuersservicesallow'] = 'Services toestaan';
$string['issuersservicesnotallow'] = 'Services niet toestaan';
$string['issuerusedforinternal'] = 'Interne services';
$string['issuerusedforlogin'] = 'Login';
$string['issuerusein'] = 'Deze service zal gebruikt worden';
$string['issuerusein_help'] = 'OAuth 2 services kunnen voor interne services gebruikt worden, op de login-pagina of beide als nodig.';
$string['issueruseineverywhere'] = 'Login-pagina en interne services';
$string['issueruseininternalonly'] = 'Enkel interne services';
$string['issueruseinloginonly'] = 'Enkel login-pagina';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Toon login-pagina als';
$string['loginissuer'] = 'Login toestaan';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Niet geconfigureerd';
$string['notdiscovered'] = 'Service opzoeken niet gelukt';
$string['notloginissuer'] = 'Login niet toestaan';
$string['pluginname'] = 'OAuth2 services';
$string['privacy:metadata'] = 'De OAuth2 services-plugin bewaart geen persoonlijke gegevens.';
$string['savechanges'] = 'Bewaar wijzigingen';
$string['serviceshelp'] = 'Instructies voor het instellen van een service provider.';
$string['systemaccountconnected'] = 'Systeemaccount verbonden';
$string['systemaccountconnected_help'] = 'Systeemaccounts worden gebruikt om geavanceerde functionaliteit te geven aan plugins. Ze zijn niet vereist voor de login-functionaliteit, maar ander plugins die gebruik maken van de OAuth service kunnen een beperkte set mogelijkheden geven als de systeemaccount niet geconnecteerd is. Bijvoorbeeld opslagruimten kunnen geen "gecontroleerde links" ondersteunen zonder systeemaccount die deze bestandsbewerkingen kan doen.';
$string['systemaccountnotconnected'] = 'Systeemaccount niet verbonden';
$string['systemauthstatus'] = 'Systeemaccount verbonden';
$string['usebasicauth'] = 'Authenticeer token-aanvragen via HTTP-headers';
$string['usebasicauth_help'] = 'Gebruik het HTTP basis authenticatieschema wanneer je client ID en wachtwoord verstuurd met een aanvraag voor een nieuw token. Aanbevolen bij de OAuth2-standaard, maar is voor sommige authenticatieproviders niet beschikbaar.';
$string['userfieldexternalfield'] = 'Externe veldnaam';
$string['userfieldexternalfield_error'] = 'Dit veld kan geen HTML bevatten.';
$string['userfieldexternalfield_help'] = 'Naam van het veld dat door het externe OAuthsysteem voorzien wordt.';
$string['userfieldinternalfield'] = 'Interne veldnaam';
$string['userfieldinternalfield_help'] = 'Naam van het Moodle gebruikersveld dat moet gekoppeld worden aan het externe veld.';
$string['userfieldmappingdeleted'] = 'Koppeling gebruikersvelden verwijderd';
$string['userfieldmappingsforissuer'] = 'Koppeling gebruikersvelden voor uitgever: {$a}';
