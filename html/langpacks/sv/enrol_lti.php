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
 * Strings for component 'enrol_lti', language 'sv', version '4.4'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Lägg till innehåll';
$string['adddeployment:deploymentid'] = 'Distributions-ID';
$string['adddeployment:deploymentid_help'] = 'Varje distribution av verktyget (den här webbplatsen) i en plattform tilldelas ett distributions-ID som är unikt för registreringen. Distributions-ID:t måste registreras med verktyget (den här webbplatsen) innan användning från respektive verktygs distribution tillåts.';
$string['adddeployment:invaliddeploymentiderror'] = 'Ogiltigt distributions-ID. ID:t används redan för denna registrering.';
$string['adddeployment:name'] = 'Distributionsnamn';
$string['addtocourse'] = 'Lägg till i kurs';
$string['addtogradebook'] = 'Lägg till i betygsbok';
$string['allowframeembedding'] = 'OBS! Det är rekommenderat att webbplatsinställningen \'Tillåt inbäddning i ramar\' är aktiverad, så att verktyg visas i en ram i stället för i ett nytt fönster.';
$string['authltimustbeenabled'] = 'OBS! Den här pluginmodulen kräver att även pluginmodulen för LTI-autentisering också är aktiverad.';
$string['cartridgeurl'] = 'Cartridge-URL';
$string['copiedtoclipboard'] = '{$a} kopierat till urklipp';
$string['copytoclipboard'] = 'Kopiera till urklipp';
$string['couldnotestablishproxy'] = 'Kunde inte etablera proxy mot konsument.';
$string['customproperties'] = 'Anpassade egenskaper';
$string['deeplinkingurl'] = 'Djuplänknings-URL';
$string['deletedactivity'] = 'Borttagen aktivitet';
$string['deletedactivityalt'] = 'Aktiviteten som delas av denna instans har tagits bort';
$string['deletedactivitydescription'] = 'Aktiviteten som delas av den här instansen har tagits bort. Du kan välja en annan aktivitet att dela genom att redigera instansen eller, om den inte längre behövs, helt enkelt ta bort instansen. Om du tar bort instansen tas alla associerade användarregistreringar bort.';
$string['deploymentadd'] = 'Lägg till en distribution';
$string['deploymentaddnotice'] = 'Distribution tillagd';
$string['deploymentdelete'] = 'Ta bort distribution';
$string['deploymentdeleteconfirm'] = '<strong>Varning!</strong> Om du tar bort en distribution förlorar du åtkomst för alla användare som följer resurslänkar som är knutna till den här verktygsdistributionen på plattformen. Synkroniseringstjänster för medlemmar och betyg tas också bort för dessa resurser. Vill du ta bort deploymentid <strong>\'{$a}\'</strong>?';
$string['deploymentdeletenotice'] = 'Distribution borttagen';
$string['deploymentid'] = 'Distribution-ID';
$string['deployments'] = 'Distributioner';
$string['deploymentsinfo'] = 'Ett distributions-ID genereras av plattformen när verktyget görs tillgängligt i ett sammanhang. Detta kan inträffa vid tidpunkten för registreringen, eller kan inträffa senare, när verktyget görs tillgängligt för en viss kurs eller kategori. Distributions-ID:t måste anges här innan verktygsdistributionen kan användas.';
$string['details'] = 'Detaljer';
$string['editplatformdetails'] = 'Redigera plattformsdetaljer';
$string['endpointltiversionnotice'] = 'Verktygsslutpunkterna nedan är endast för manuell LTI 1.3-installation. För tidigare versioner (1.1/2.0) finns information för konsumenter på sidan "Publicerad som LTI-verktyg" som är tillgänglig via kursnavigering.';
$string['enrolenddate'] = 'Slutdatum';
$string['enrolenddate_help'] = 'Om det här alternativet är aktiverat kan användarna bara registrera sig fram till detta datum.';
$string['enrolenddateerror'] = 'Sista datum för registrering kan inte infalla innan startdatum';
$string['enrolisdisabled'] = 'Pluginmodulen \'Publicera som LTI-verktyg\' är inaktiverad.';
$string['enrolmentfinished'] = 'Registreringen avslutad.';
$string['enrolmentnotstarted'] = 'Registreringen har inte börjat.';
$string['enrolperiod'] = 'Registreringens varaktighet';
$string['enrolperiod_help'] = 'Den tid som registreringen är giltig, från och med det ögonblick som användaren registrerar sig från fjärrsystemet. Om inaktiverat är registreringstiden obegränsad.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Om det här datumet är aktiverat kan användarna endast komma åt från och med det här datumet.';
$string['existingregistrationerror'] = 'Det finns redan en registrering gjord för denna utfärdare och klient-ID.';
$string['failedrequest'] = 'Misslyckad begäran. Orsak: {$a->reason}';
$string['frameembeddingnotenabled'] = 'För att använda verktyget, klicka på nedanstående länk.';
$string['gradesync'] = 'Betygssynkronisering';
$string['gradesync_help'] = 'Om betyg från verktyget skickas till fjärrsystemet (LTI-konsument).';
$string['incorrecttoken'] = 'Felaktigt token. Kontrollera URL:en och försök igen, eller kontakta administratören för det här verktyget.';
$string['invalidexpiredregistrationurl'] = 'Ogiltig eller förfallen registrerings-URL. Generera en ny registrerings-URL och försök igen.';
$string['invalidrequest'] = 'Ogiltig begäran';
$string['invalidtoolconsumer'] = 'Ogiltig verktygskonsument.';
$string['jwksurl'] = 'JWKS URL';
$string['launchdetails'] = 'Uppstartsdetaljer';
$string['launchdetails_help'] = 'En konfigurations-URL (även kallad <em>cartridge-URL</em>) plus hemlighet eller en start-URL krävs för att konfigurera verktyget.';
$string['launchurl'] = 'Uppstarts-URL';
$string['loginurl'] = 'Initiera inloggnings-URL';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Startdetaljer';
$string['lti13launchdetails_help'] = 'Start-URL:en och anpassade egenskaper krävs bara när du konfigurerar en resurslänk manuellt i plattformen. Om möjligt bör lärarna främja processen för innehållsval (djuplänkning) för att skapa resurslänkar.';
$string['lti:config'] = 'Konfigurera instanser av \'Publicera som LTI-verktyg\'';
$string['lti:unenrol'] = 'Avregistrera användare från kursen';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Ett problem uppstod när OpenID-konfigurationen hämtades från plattformen. Resultatet var ogiltig JSON. Detta kan också orsakas av konfiguration av blockerade värdar. Kontrollera att webbplatsen är konfigurerad för att ansluta till plattformsdomänen och försök igen med en ny registreringsadress.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Ogiltig startdata eller verktygskonfiguration. Det gick inte att hitta distributionen (deployment_id: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Ogiltiga startdata. Resursen {$a} är inte tillgänglig eller finns inte.';
$string['ltiadvlauncherror:invalidregistration'] = 'Ogiltig startdata eller verktygskonfiguration. Det gick inte att hitta en plattformsregistrering (utfärdare: {$a->platform}, klient-ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Ogiltiga startdata. Det anpassade anspråksfältet "id" krävs för att starta en aktivitet eller resurs över LTI Advantage.';
$string['ltilegacy'] = 'Äldre LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Äldre LTI-verktyg (1.1/2.0) är utfasade. Innehåll delas numera med hjälp av LTI Advantage.';
$string['ltiversion'] = 'LTI-version';
$string['ltiversion_help'] = 'Den version av LTI som kommer att användas för att komma åt det publicerade innehållet.

LTI Advantage gör det möjligt att publiceras innehåll på förregistrerade plattformar utan att behöva göra ändringar på plattformen när nytt innehåll publiceras. Säkerhetskontraktet är mellan plattformen och verktyget.

Äldre versioner (1.1 och 2.0) kräver att en ny verktygsregistrering skapas för konsumenten för varje del av nypublicerat innehåll eftersom varje del av publicerat innehåll har sitt eget säkerhetsavtal med konsumentwebbplatsen och sålunda måste ställas in från fall till fall.';
$string['managedeployments'] = 'Hantera distributioner';
$string['maxenrolled'] = 'Maximalt antal registrerade användare';
$string['maxenrolled_help'] = 'Det maximala antalet fjärranvändare som kan komma åt verktyget. Om inställt på noll är antalet registrerade användare obegränsat.';
$string['maxenrolledreached'] = 'Det maximala antalet fjärranvändare som tillåts ha åtkomst till verktyget har uppnåtts.';
$string['membersync'] = 'Användarsynkronisering';
$string['membersync_help'] = 'Om en schemalagd aktivitet synkroniserar registrerade användare i fjärrsystemet med registreringar i den här kursen och skapar ett konto för varje fjärranvändare efter behov och registrerar eller avregistrerar dem efter behov.

Om det är inställt på nej skapas ett konto för dem när en fjärranvändare kommer åt verktyget och de registreras automatiskt.';
$string['membersyncmode'] = 'Synkroniseringsläge för användare';
$string['membersyncmode_help'] = 'Om fjärranvändare ska registreras och/eller avregistreras från den här kursen.';
$string['membersyncmodeenrolandunenrol'] = 'Registrera nya och avregistrera saknade användare';
$string['membersyncmodeenrolnew'] = 'Registrera nya användare';
$string['membersyncmodeunenrolmissing'] = 'Avregistrera saknade användare';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Inga verktygsdistributioner hittades';
$string['nopublishedcontent'] = 'Inga resurser eller aktiviteter har ännu publicerats.';
$string['noregisteredplatforms'] = 'Inga registrerade plattformar';
$string['notoolsprovided'] = 'Inga verktyg tillhandahölls';
$string['opensslconfiginvalid'] = 'LTI 1.3 kräver att en giltig openssl.cnf är konfigurerad och tillgänglig på din webbserver. Kontakta webbplatsadministratören för att konfigurera och aktivera openssl för den här webbplatsen.';
$string['opentool'] = 'Öppna verktyg';
$string['platformdetails'] = 'Plattformsdetaljer';
$string['platformdetailsinfo'] = 'När verktyget har ställts in på plattformen måste detaljer från plattformen registreras här för att slutföra registreringen.
<ul>
<li>För dynamiska registreringar kommer denna information att ha ställts in automatiskt och inga ytterligare ändringar krävs.</li>
<li>För manuella registreringar måste denna information kopieras manuellt från plattformen.</li>
</ul>';
$string['pluginname'] = 'Publicera som LTI-verktyg';
$string['pluginname_desc'] = 'Pluginmodulen \'Publicera som LTI-verktyg\', tillsammans med LTI-autentiseringsmodulen gör det möjligt för fjärranvändare att komma åt valda kurser och aktiviteter. Med andra ord fungerar Moodle som en LTI-verktygsleverantör.';
$string['privacy:metadata:enrol_lti_users'] = 'Listan med användare som registrerats via en LTI-leverantör.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Tidpunkten då användaren senast loggade in på kursen';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Det senaste betyg som noterats för användaren';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Tidpunkt då användaren registrerades';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID för användaren';
$string['provisioningmode'] = 'Etableringsläge';
$string['provisioningmode_help'] = 'Den här inställningen avgör hur konton hanteras vid första uppstarten. Flera lägen stöds:
<ul>
<li>Endast nya konton (automatiskt). Konton skapas automatiskt för användare som startar från plattformen. Detta är standard för studentuppstarter.</li>
<li>Befintliga och nya konton (prompt). Användaren får välja vad han eller hon ska göra. De kan välja att länka ett befintligt konto eller skapa ett nytt konto åt dem. Detta är det mest flexibla alternativet och standard för läraruppstarter.</li>
<li>Endast befintliga konton (fråga). Användaren kommer att bli ombedd att länka ett befintligt konto och kan inte komma åt verktygsresurserna utan att göra det.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Etableringsläge för studentnuppstart';
$string['provisioningmodeteacherlaunch'] = 'Etableringsläge för läraruppstart';
$string['publishedcontent'] = 'Publicerat innehåll';
$string['publishedcontent_help'] = 'En publicerad resurs eller aktivitet kan användas i registrerade plattformar via flödet för innehållsval (djuplänkning). Dessutom kan en resurslänk skapas manuellt på plattformen med hjälp av start-URL:en och de anpassade egenskaper som tillhandahålls.';
$string['registeredplatforms'] = 'Registrerade plattformar';
$string['registeredplatformsltiversionnotice'] = 'Plattformarna nedan är registrerade för LTI 1.3-kommunikation. För tidigare versioner krävs inte konsumentregistrering.';
$string['registerplatform:accesstokenurl'] = 'URL för åtkomsttoken';
$string['registerplatform:accesstokenurl_help'] = 'Url:en som begäranden om åtkomsttoken skickas till av verktyget. Kommer att tillhandahållas av plattformen.';
$string['registerplatform:authrequesturl'] = 'URL för autentiseringsbegäran';
$string['registerplatform:authrequesturl_help'] = 'Den URL som OpenID Connect-autentiseringsbegäranden skickas till av verktyget. Kommer att tillhandahållas av plattformen.';
$string['registerplatform:clientid'] = 'Klient-ID';
$string['registerplatform:clientid_help'] = 'En sträng som används för att identifiera verktygsregistreringen på plattformen. Kommer att tillhandahållas av plattformen.';
$string['registerplatform:duplicateregistrationerror'] = 'Ogiltigt klient-ID. Det här klient-ID:t är redan registrerat för det angivna plattforms-ID:t.';
$string['registerplatform:invalidurlerror'] = 'Ogiltig URL. Har du glömt http:// eller https://?';
$string['registerplatform:jwksurl'] = 'URL till publik nyckeluppsättning';
$string['registerplatform:jwksurl_help'] = 'Den offentliga nyckeluppsättningen eller JWKS-URL:en som används för att hämta plattformens offentliga nyckel. Kommer att tillhandahållas av plattformen.';
$string['registerplatform:name'] = 'Plattformsnamn';
$string['registerplatform:name_help'] = 'Ett kort namn som beskriver plattformen. Detta kan ändras när som helst.';
$string['registerplatform:platformid'] = 'Plattforms-ID (utfärdare)';
$string['registerplatform:platformid_help'] = 'URL:en som identifierar utbildningsplattformen från tredje part. Kommer att tillhandahållas av plattformen.';
$string['registerplatformadd'] = 'Registrera plattform';
$string['registerplatformaddnotice'] = 'Plattformsregistrering tillagd';
$string['registerplatformdelete'] = 'Ta bort plattformsregistrering';
$string['registerplatformdeleteconfirm'] = 'Vill du ta bort registreringen för plattformen {$a}? Detta tar också bort alla verktygsdistributioner som lagras mot den här registreringen.';
$string['registerplatformdeletenotice'] = 'Plattformsregistrering borttagen';
$string['registerplatformedit'] = 'Redigera registrering';
$string['registerplatformeditnotice'] = 'Plattformsregistrering uppdaterad';
$string['registration'] = 'Publicerad verktygsregistrering';
$string['registrationdeeplinklabel'] = 'Lägg till innehåll från {$a}';
$string['registrationdynamic'] = 'Dynamisk registrering';
$string['registrationmanual'] = 'Manuell registrering';
$string['registrationresourcelinklabel'] = 'Starta innehåll från {$a}';
$string['registrationstatus'] = 'Status';
$string['registrationstatusactive'] = 'Aktiv';
$string['registrationstatuspending'] = 'Väntande';
$string['registrationurl'] = 'Registrerings-URL';
$string['registrationurl_help'] = 'Om en registreringsadress (även kallad proxy-URL) används, konfigureras verktyget automatiskt.';
$string['registrationurlinfomessage'] = 'Om plattformen stöder dynamisk registrering använder du registreringsadressen nedan. Mer information om dynamisk registrering finns i dokumentationen <a href="{$a}">Publicera som LTI-verktyg</a>.';
$string['remotesystem'] = 'Fjärrsystem';
$string['requirecompletion'] = 'Kräv kurs- eller aktivitetsslutförande före betygssynkronisering';
$string['returnurlnotset'] = 'Retur-URL:en har inte angetts.';
$string['roleinstructor'] = 'Roll för lärare';
$string['roleinstructor_help'] = 'Rollen som tilldelas i verktyget till fjärrläraren.';
$string['rolelearner'] = 'Roll för elev';
$string['rolelearner_help'] = 'Rollen som tilldelas i verktyget till fjärrstudenten.';
$string['secret'] = 'Hemlighet';
$string['secret_help'] = 'En teckensträng som delas med fjärrsystemet (LTI-konsument) för att ge åtkomst till verktyget.';
$string['sharedexternaltools'] = 'Publicerad som LTI-verktyg';
$string['successfulregistration'] = 'Registreringen lyckades';
$string['tasksyncgrades'] = 'Synkronisering av betyg för Publicera som LTI-verktyg';
$string['tasksyncmembers'] = 'Synkronisering av användare för Publicera som LTI-verktyg';
$string['tooldetails'] = 'Detaljer';
$string['toolsprovided'] = 'Publicerade verktyg';
$string['toolsprovided_help'] = 'Ett verktyg kan delas med en annan webbplats genom att tillhandahålla antingen uppstartsinformation eller en registreringsadress.';
$string['tooltobeprovided'] = 'Verktyg som ska publiceras';
$string['toolurl'] = 'Verktygs-URL';
$string['userdefaultvalues'] = 'Standardvärden för användare';
$string['viewplatformdetails'] = 'Visa plattformsdetaljer';
$string['viewtoolendpoints'] = 'Visa verktygsslutpunkter';
