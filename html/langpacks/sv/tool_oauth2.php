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
 * Strings for component 'tool_oauth2', language 'sv', version '3.8'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Den här åtgärden kommer att bevilja permanent API-åtkomst till Moodle för det autentiserade kontot. Detta är avsett att användas som ett systemkonto för hantering av filer som ägs av Moodle.';
$string['authconnected'] = 'Systemkontot är nu anslutet för offline-åtkomst';
$string['authnotconnected'] = 'Systemkontot anslöts inte för offline-åtkomst';
$string['configured'] = 'Konfigurerad';
$string['configuredstatus'] = 'Konfigurerad';
$string['connectsystemaccount'] = 'Koppla till ett systemkonto';
$string['createfromtemplate'] = 'Skapa OAuth 2-tjänst från mall';
$string['createfromtemplatedesc'] = 'Välj en av OAuth 2-tjänstmallarna nedan om du vill skapa en OAuth-tjänst med en giltig konfiguration för en av de kända tjänstetyperna. Detta kommer att skapa OAuth 2-tjänsten med alla de korrekta slutpunkter och parametrar som krävs för autentisering, men du måste fortfarande ange klient-ID och hemlighet för den nya tjänsten innan den kan användas.';
$string['createnewendpoint'] = 'Skapa ny slutpunkt  för utfärdare ”{$a}”';
$string['createnewfacebookissuer'] = 'Ny Facebook-tjänst';
$string['createnewgoogleissuer'] = 'Ny Google-tjänst';
$string['createnewissuer'] = 'Ny anpassad tjänst';
$string['createnewmicrosoftissuer'] = 'Ny Microsoft-tjänst';
$string['createnewnextcloudissuer'] = 'Ny Nextcloud-tjänst';
$string['createnewuserfieldmapping'] = 'Ny användarfältsmappning för utfärdare ”{$a}”';
$string['deleteconfirm'] = 'Är du säker på att du vill ta bort identitetsutfärdaren ”{$a}”? Alla pluginmoduler som är beroende av denna utfärdare kommer att sluta fungera.';
$string['deleteendpointconfirm'] = 'Är du säker på att du vill ta bort slutpunkten ”{$a->endpoint}” för utfärdaren ”{$a->issuer}”? Alla pluginmoduler som är beroende av denna slutpunkt kommer att sluta fungera.';
$string['deleteuserfieldmappingconfirm'] = 'Är du säker på att du vill ta bort användarfältsmappningen för utfärdaren ”{$a}”?';
$string['discovered'] = 'Tjänsteidentifiering lyckades';
$string['discovered_help'] = 'Identifiering innebär att OAuth 2-slutpunkterna kunde fastställas automatiskt från bas-URL:en för OAuth-tjänsten. Inte alla tjänster är skyldiga att "identifieras". Om de inte är det måste slutpunkter och användarmappning konfigureras manuellt.';
$string['discoverystatus'] = 'Identifiering';
$string['editendpoint'] = 'Redigera slutpunkt: {$a->endpoint} för utfärdaren {$a->issuer}';
$string['editendpoints'] = 'Konfigurera slutpunkter';
$string['editissuer'] = 'Redigera identitetsutfärdare: {$a}';
$string['edituserfieldmapping'] = 'Redigera användarfältsmappning för utfärdare {$a}';
$string['edituserfieldmappings'] = 'Konfigurera användarfältsmappning';
$string['endpointdeleted'] = 'Slutpunkt borttagen';
$string['endpointname'] = 'Namn';
$string['endpointname_help'] = 'Nyckel som används för att söka efter denna slutpunkt. Måste sluta med ”_endpoint”.';
$string['endpointsforissuer'] = 'Slutpunkter för utfärdaren: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL för denna slutpunkt. Måste använda HTTPS://';
$string['issueralloweddomains'] = 'Inloggningsdomäner';
$string['issueralloweddomains_help'] = 'Om inställningen är gjord är den här inställningen en kommaavgränsad lista över domäner som inloggningar kommer att begränsas till när du använder den här leverantören.';
$string['issuerbaseurl'] = 'Bas-URL för tjänsten';
$string['issuerbaseurl_help'] = 'Bas-URL för identitetstjänsten.';
$string['issuerclientid'] = 'Klient-ID';
$string['issuerclientid_help'] = 'OAuth klient-ID för utfärdaren.';
$string['issuerclientsecret'] = 'Klienthemlighet';
$string['issuerclientsecret_help'] = 'OAuth-klient hemligeten för utfärdaren.';
$string['issuerdeleted'] = 'Identitetsutfärdare borttagen';
$string['issuerdisabled'] = 'Identitetsutfärdare inaktiverad';
$string['issuerenabled'] = 'Identitetsutfärdare aktiverad';
$string['issuerimage'] = 'URL till logotyp';
$string['issuerimage_help'] = 'Bild-URL som används för att visa en logotyp för utfärdaren. Kan visas på inloggningssidan.';
$string['issuerloginparams'] = 'Ytterligare parametrar inkluderade i inloggningsbegäran.';
$string['issuerloginparams_help'] = 'Vissa system kräver ytterligare parametrar för en inloggningsbegäran för att kunna läsa användarens grundprofil.';
$string['issuerloginparamsoffline'] = 'Ytterligare parametrar inkluderade i inloggningsbegäran för off-line åtkomst.';
$string['issuerloginparamsoffline_help'] = 'Varje OAuth-system kräver olika sätt att begära offlineåtkomst. T.ex. kräver Google de extra parametrarna: "access_type=offline&prompt=consent". Dessa parametrar ska anges som URL-parametrar.';
$string['issuerloginscopes'] = 'Scope som ingår i en inloggningsbegäran.';
$string['issuerloginscopes_help'] = 'Vissa system kräver ytterligare scope för en inloggningsbegäran för att kunna läsa användarens grundprofil. Standardomfattningarna för ett OpenID Connect-kompatibelt system är "openid profile email".';
$string['issuerloginscopesoffline'] = 'Scope som ingår i en inloggningsbegäran för off-line tillgång.';
$string['issuerloginscopesoffline_help'] = 'Varje OAuth-system kräver olika sätt att begära offlineåtkomst. T.ex. kräver Microsoft ett ytterligare scope ”offline_access”.';
$string['issuername'] = 'Namn';
$string['issuername_help'] = 'Namnet för identitetsutfärdaren. Kan visas på inloggningssidan.';
$string['issuerrequireconfirmation'] = 'Kräv e-postverifiering';
$string['issuerrequireconfirmation_help'] = 'Kräv att alla användare verifierar sin e-postadress innan de kan logga in med OAuth. Detta gäller för nyskapade konton som en del av inloggningsprocessen, eller när ett befintligt Moodle-konto är anslutet till en OAuth-inloggning via matchande e-postadresser.';
$string['issuers'] = 'Utfärdare';
$string['issuersetup'] = 'Detaljerade instruktioner för konfigurering av de vanligaste OAuth 2-tjänsterna.';
$string['issuersetuptype'] = 'Detaljerade instruktioner hur man ställer in {$a} OAuth 2-leverantören';
$string['issuershowonloginpage'] = 'Visa på inloggningssidan';
$string['issuershowonloginpage_help'] = 'Om pluginmodulen för OAuth 2-autentisering är aktiverad kommer denna inloggningsutfärdare visas på inloggningssidan och göra det möjligt för användare att logga in med konton hos denna utfärdare.';
$string['loginissuer'] = 'Tillåt inloggning';
$string['notconfigured'] = 'Inte konfigurerad';
$string['notdiscovered'] = 'Tjänsteidentifiering misslyckades';
$string['notloginissuer'] = 'Tillåt inte inloggning';
$string['pluginname'] = 'OAuth 2-tjänster';
$string['privacy:metadata'] = 'Pluginmodulen OAuth 2-tjänster lagrar ingen personlig information.';
$string['savechanges'] = 'Spara ändringar';
$string['serviceshelp'] = 'Instruktioner för konfigurering av tjänsteleverantör.';
$string['systemaccountconnected'] = 'Systemkonto kopplat';
$string['systemaccountconnected_help'] = 'Systemkonton används för att tillhandahålla avancerad funktionalitet för pluginmoduler. De krävs inte endast för inloggningsfunktionalitet, men andra pluginmoduler som använder OAuth-tjänsten kan erbjuda en reducerad uppsättning funktioner om systemkontot inte har anslutits. Till exempel kan inte databaser stödja "kontrollerade länkar" utan ett systemkonto för att utföra filåtgärder.';
$string['systemaccountnotconnected'] = 'Systemkonto inte kopplat';
$string['systemauthstatus'] = 'Systemkonto kopplat';
$string['usebasicauth'] = 'Autentisera tokenbegäran via HTTP-rubriker';
$string['usebasicauth_help'] = 'Utnyttja HTTP Basic-autentiseringsschemat när klient-ID och lösenord skickas med en begäran om uppdateringstoken. Rekommenderas av OAuth 2-standarden, men kanske inte är tillgängligt för vissa utfärdare.';
$string['userfieldexternalfield'] = 'Externt fältnamn';
$string['userfieldexternalfield_error'] = 'Detta fält kan inte innehålla HTML';
$string['userfieldexternalfield_help'] = 'Fältnamn för fält tillhandahållet av det externa OAuth-systemet.';
$string['userfieldinternalfield'] = 'Internt fältnamn';
$string['userfieldinternalfield_help'] = 'Namn på det användarfält i Moodle som ska mappas från det externa fältet.';
$string['userfieldmappingdeleted'] = 'Användarfältsmappning borttagen';
$string['userfieldmappingsforissuer'] = 'Användarfältsmappningar för utfärdaren: {$a}';
