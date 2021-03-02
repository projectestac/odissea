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
 * Strings for component 'tool_mobile', language 'sv', version '3.8'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb-felsökning är aktiverad. Den bör inaktiveras i inställningarna för plugin-modulerna för extern databasautentisering eller kursregistreringen via extern databas.';
$string['androidappid'] = 'Android-appens unika identifierare';
$string['androidappid_desc'] = 'Denna inställning kan lämnas tom såvida du inte använder en anpassad Android-app.';
$string['apppolicy'] = 'URL till App-policy';
$string['apppolicy_help'] = 'Webbadressen till en policy för appanvändare som anges på sidan Om i appen. Om fältet lämnas tomt kommer URL:en för webbplatspolicyn att användas i stället.';
$string['apprequired'] = 'Denna funktionalitet är bara tillgänglig via Moodle mobile eller skrivbordsappen.';
$string['autologinkeygenerationlockout'] = 'Generering av automatisk inloggningsnyckel är blockerad. Du måste vänta 6 minuter mellan förfrågningarna.';
$string['autologinnotallowedtoadmins'] = 'Autoinloggning är inte tillåtet för webbplatsadministratörer.';
$string['cachedef_plugininfo'] = 'Denna lagrar listan med plugin-moduler som har tillägg för mobil.';
$string['clickheretolaunchtheapp'] = 'Klicka här om appen inte öppnas automatiskt.';
$string['configmobilecssurl'] = 'En CSS-fil för att anpassa ditt mobil app-gränssnitt.';
$string['customlangstrings'] = 'Anpassade språksträngar';
$string['customlangstrings_desc'] = 'Ord och fraser som visas i appen kan skräddarsys här. Ange varje anpassad språksträng på en ny rad med format: strängidentifierare, anpassad språksträng och språkkod, avgränsade med pipe-tecken. Till exempel:
<pre>
mm.user.student|Elev|sv
mm.user.student|Student|en
</pre>
En fullständig lista över strängidentifierare, se dokumentationen.';
$string['custommenuitems'] = 'Anpassade menyalternativ';
$string['custommenuitems_desc'] = 'Ytterligare objekt kan läggas till i appens huvudmeny genom att ange dem här. Ange varje anpassat menyalternativ på en ny rad med format: artikeltext, länk-URL, länk-öppningsmetod och språkkod (valfritt, för visning av objektet endast för användare av det angivna språket), åtskilda av pipe-tecken.

Metoder för att öppna länkar är: app (för länkning till en aktivitet som stöds av appen), inappbrowser (för att öppna en länk i en webbläsare utan att lämna appen), browser (för att öppna länken i enhetens standardwebbläsare utanför appen) och embedded (för visning av länken i en iframe i en ny sida i appen).

När ett objekt saknar en översättning för ett visst språk kommer det att använda andra språk som alternativ om inte "_only" är tillagt till språkkoden.

Exempel:
<pre>
App help|https://someurl.xyz/help|inappbrowser
Mina betyg|https://someurl.xyz/local/mygrades/index.php|embedded|sv
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
You will only see this in English|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Mörkt läge';
$string['disabledfeatures'] = 'Inaktiverade funktioner';
$string['disabledfeatures_desc'] = 'Här väljer du de funktioner du vill inaktivera i Mobil-appen på din webbplats. Observera att vissa funktioner som anges här redan kan vara inaktiverade via andra webbplatsinställningar. Du kommer att behöva logga ut och logga in igen i appen för att se ändringarna.';
$string['displayerrorswarning'] = 'Visning av felsökningsmeddelanden (debugdisplay) är aktiverad. Den bör inaktiveras.';
$string['downloadcourse'] = 'Ladda ned kurs';
$string['downloadcourses'] = 'Ladda ned kurser';
$string['enablesmartappbanners'] = 'Aktivera banderoller i Appen';
$string['enablesmartappbanners_desc'] = 'Om aktiverad kommer en banderoll som marknadsför mobilappen att visas om webbplatsen besöks med hjälp av en mobil webbläsare.';
$string['forcedurlscheme'] = 'Om du vill tillåta att endast din egenanpassade app ska öppnas via ett webbläsarfönster, ange då dess URL-schema här. Om du vill tillåta endast den officiella appen, ange då standardvärdet. Lämna fältet tomt om du vill tillåta alla typer.';
$string['forcedurlscheme_key'] = 'URL-schema';
$string['forcelogout'] = 'Tvinga utloggning';
$string['forcelogout_desc'] = 'Om aktiverat ersätts appalternativet \'Ändra webbplats\' med \'Logga ut\'. Detta resulterar i att användaren loggas ut helt. De måste sedan ange sitt lösenord igen nästa gång de vill komma åt webbplatsen.';
$string['getmoodleonyourmobile'] = 'Hämta mobilappen';
$string['h5poffline'] = 'Visa H5P-innehåll offline';
$string['httpsrequired'] = 'HTTPS krävs';
$string['insecurealgorithmwarning'] = 'Det verkar som att HTTPS-certifikatet använder en osäker algoritm för signering (SHA-1). Försök att uppdatera certifikatet.';
$string['invalidcertificatechainwarning'] = 'Det verkar som att certifikatkedjan är ogiltig.';
$string['invalidcertificateexpiredatewarning'] = 'Det verkar som att HTTPS-certifikatet har förfallit.';
$string['invalidcertificatestartdatewarning'] = 'Det verkar som att HTTPS-certifikatet för webbplatsen inte börjat gälla ännu (med ett startdatum i framtiden).';
$string['invalidprivatetoken'] = 'Ogiltigt privat token. Token får inte vara tomma eller skickas via GET-parameter.';
$string['invaliduserquotawarning'] = 'Användarkvoten (userquota) är inställd på ett ogiltigt nummer. Den ska vara inställd på ett giltigt tal (ett heltalsvärde) i Säkerhetsinställningarna för webbplatsen.';
$string['iosappid'] = 'Unik identifierare för iOS-app';
$string['iosappid_desc'] = 'Denna inställning kan lämnas med standardinställningarna såvida du inte använder en egenanpassad iOS-app.';
$string['loginintheapp'] = 'Via appen';
$string['logininthebrowser'] = 'Via ett webbläsarfönster (gäller för SSO-plugins)';
$string['loginintheembeddedbrowser'] = 'Via en inbäddad webbläsare (gäller för SSO-plugin)';
$string['mainmenu'] = 'Huvudmeny';
$string['minimumversion'] = 'Om en appversion har specificerats (3.8.0 eller högre) uppmanas alla användare som använder en äldre appversion att uppgradera sin app innan de får åtkomst till webbplatsen.';
$string['minimumversion_key'] = 'Lägsta appversion som krävs';
$string['mobileapp'] = 'Mobilapp';
$string['mobileappconnected'] = 'Kopplat till mobilapp';
$string['mobileappearance'] = 'Mobilvy';
$string['mobileappenabled'] = 'Denna sajt är åtkomlig via mobilappen. <br /><a href="{$a}">Ladda ned appen här.</a>';
$string['mobileauthentication'] = 'Mobil autentisering';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobilfunktioner';
$string['mobilenotificationsdisabledwarning'] = 'Mobilnotifieringar är inte påslagna. De borde aktiveras i Inställningar för notifieringar.';
$string['mobilesettings'] = 'Mobilinställningar';
$string['moodleappsportalfeatureswarning'] = 'Observera att vissa funktioner kan begränsas beroende på din Moodle-apprenumeration. För mer information, gå till <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['oauth2identityproviders'] = 'OAuth 2 identity providers';
$string['offlineuse'] = 'Offline-användning';
$string['pluginname'] = 'Moodle-app verktyg';
$string['pluginnotenabledorconfigured'] = 'Pluginmodulen inte aktiverad eller konfigurerad';
$string['privacy:metadata:core_userkey'] = 'Användarens nycklar som använts för att skapa nyckel för automatisk inloggning för den aktuella användaren.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Datum för den senaste begäran om nyckel för automatisk inloggning. Mellan varje begäran krävs att det gått 6 minuter.';
$string['readingthisemailgettheapp'] = 'Läser du detta i ett e-postmeddelande? <a href="{$a}">Ladda ned mobilappen och du får notifieringar i din mobila enhet</a>.';
$string['remoteaddons'] = 'Fjärrtillägg';
$string['responsivemainmenuitems'] = 'Responsiva menyobjekt';
$string['selfsignedoruntrustedcertificatewarning'] = 'Det verkar som att HTTPS-certifikatet är självsignerat eller ej betrott. Appen fungerar bara med betrodda webbplatser.';
$string['setuplink'] = 'Nedladdningssida för app';
$string['setuplink_desc'] = 'URL till sida med alternativ för att ladda ner mobilappen från App Store och Google Play. Länken för nedladdningssidan för appen visas i sidfoten och i en användares profil. Lämna tomt om du vill att ingen länk ska visas.';
$string['smartappbanners'] = 'App-banderoller';
$string['typeoflogin'] = 'Inloggningstyp';
$string['typeoflogin_desc'] = 'Om webbplatsen använder en SSO-autentiseringsmetod, välj då via ett webbläsarfönster eller via en inbäddad webbläsare. En inbäddad webbläsare ger en bättre användarupplevelse, fast detta fungerar inte med alla SSO-plugins.';
