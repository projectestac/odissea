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
 * Strings for component 'tool_mobile', language 'sv', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb-felsökning är aktiverad. Den bör inaktiveras i inställningarna för plugin-modulerna för extern databasautentisering eller kursregistreringen via extern databas.';
$string['androidappid'] = 'Unik identifierare för Android-app';
$string['androidappid_desc'] = 'Denna inställning kan lämnas tom såvida du inte använder en anpassad Android-app.';
$string['apppolicy'] = 'URL till App-policy';
$string['apppolicy_help'] = 'Webbadressen till en policy för appanvändare som anges på sidan Om i appen. Om fältet lämnas tomt kommer URL:en för webbplatspolicyn att användas i stället.';
$string['apprequired'] = 'Denna funktionalitet är bara tillgänglig via Moodle mobile eller skrivbordsappen.';
$string['autologinkeygenerationlockout'] = 'Generering av automatisk inloggningsnyckel är blockerad. Du måste vänta 6 minuter mellan förfrågningarna.';
$string['autologinnotallowedtoadmins'] = 'Autoinloggning är inte tillåtet för webbplatsadministratörer.';
$string['cachedef_plugininfo'] = 'Denna lagrar listan med plugin-moduler som har tillägg för mobil.';
$string['cachedef_subscriptiondata'] = 'Denna lagrar information om prenumerationen på mobilappen.';
$string['clickheretolaunchtheapp'] = 'Klicka här om appen inte öppnas automatiskt.';
$string['configmobilecssurl'] = 'En CSS-fil för att anpassa gränssnittet i mobilappen.';
$string['customlangstrings'] = 'Anpassade språksträngar';
$string['customlangstrings_desc'] = 'Ord och fraser som visas i appen kan skräddarsys här. Ange varje anpassad språksträng på en ny rad med format: <code>strängidentifierare, anpassad språksträng</code> och <code>språkkod</code>, avgränsade med pipe-tecken (|).

Exempel:
<pre>
mm.user.student|Elev|sv
mm.user.student|Student|en
</pre>
En fullständig lista över strängidentifierare, se dokumentationen.';
$string['custommenuitems'] = 'Anpassade menyalternativ';
$string['custommenuitems_desc'] = 'Ytterligare objekt kan läggas till i appens huvudmeny genom att ange dem här. Ange varje anpassat menyalternativ på en ny rad i formatet: <code>artikeltext, länk-URL, länk-öppningsmetod</code> och <code>språkkod</code> (valfritt, för visning av objektet endast för användare av det angivna språket), åtskilda av pipe-tecken (|).

Metoder för att öppna länkar är: <code>app</code> (för länkning till en aktivitet som stöds av appen), <code>inappbrowser</code> (för att öppna en länk i en webbläsare utan att lämna appen), <code>browser</code> (för att öppna länken i enhetens standardwebbläsare utanför appen) och <code>embedded</code> (för visning av länken i en iframe i en ny sida i appen).

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
$string['filetypeexclusionlist'] = 'Exkluderade filtyper';
$string['filetypeexclusionlist_desc'] = 'Markera alla filtyper som inte är avsedda för användning på en mobil enhet. Sådana filer kommer att listas i kursen. Om en användare sedan försöker öppna dem kommer en varning visas som ger råd om att filtypen inte är avsedd för användning på en mobil enhet. Användaren kan sedan avbryta eller ignorera varningen och öppna filen ändå.';
$string['filetypeexclusionlistplaceholder'] = 'Exkluderade filtyper (mobil)';
$string['forcedurlscheme'] = 'Om du vill tillåta att endast din egenanpassade app ska öppnas via ett webbläsarfönster, ange då dess URL-schema här. Om du vill tillåta endast den officiella appen, ange då standardvärdet. Lämna fältet tomt om du vill tillåta alla typer.';
$string['forcedurlscheme_key'] = 'URL-schema';
$string['forcelogout'] = 'Tvinga utloggning';
$string['forcelogout_desc'] = 'Om aktiverat ersätts appalternativet \'Ändra webbplats\' med \'Logga ut\'. Detta resulterar i att användaren loggas ut helt. De måste sedan ange sitt lösenord igen nästa gång de vill komma åt webbplatsen.';
$string['getmoodleonyourmobile'] = 'Hämta mobilappen';
$string['h5poffline'] = 'Visa H5P-innehåll offline';
$string['httpsrequired'] = 'HTTPS krävs';
$string['insecurealgorithmwarning'] = 'Det verkar som att HTTPS-certifikatet använder en osäker algoritm för signering (SHA-1). Försök att uppdatera certifikatet.';
$string['invalidcertificatechainwarning'] = 'Det verkar som att certifikatkedjan är ogiltig. Det här certifikatet kan fungera för en webbläsare men inte för en mobilapp.';
$string['invalidcertificateexpiredatewarning'] = 'Det verkar som att HTTPS-certifikatet har förfallit.';
$string['invalidcertificatestartdatewarning'] = 'Det verkar som att HTTPS-certifikatet för webbplatsen inte börjat gälla ännu (med ett startdatum i framtiden).';
$string['invalidprivatetoken'] = 'Ogiltigt privat token. Token får inte vara tomma eller skickas via GET-parameter.';
$string['invaliduserquotawarning'] = 'Användarkvoten (userquota) är inställd på ett ogiltigt nummer. Den ska vara inställd på ett giltigt tal (ett heltalsvärde) i Säkerhetsinställningarna för webbplatsen.';
$string['iosappid'] = 'Unik identifierare för iOS-app';
$string['iosappid_desc'] = 'Denna inställning kan lämnas tom såvida du inte använder en anpassad iOS-app.';
$string['launchviasiteinbrowser'] = 'Starta via webbplats i standardwebbläsaren';
$string['loginintheapp'] = 'Via appen';
$string['logininthebrowser'] = 'Via ett webbläsarfönster (gäller för SSO-plugins)';
$string['loginintheembeddedbrowser'] = 'Via en inbäddad webbläsare (gäller för SSO-plugin)';
$string['logoutconfirmation'] = 'Vill du logga ut från mobilappen på dina mobila enheter? Genom att logga ut måste du sedan ange ditt användarnamn och lösenord på nytt i mobilappen på alla enheter där du har appen installerad.';
$string['mainmenu'] = 'Huvudmeny';
$string['managefiletypes'] = 'Hantera filtyper';
$string['minimumversion'] = 'Om en appversion har specificerats (3.8.0 eller högre) uppmanas alla användare som använder en äldre appversion att uppgradera sin app innan de får åtkomst till webbplatsen.';
$string['minimumversion_key'] = 'Lägsta appversion som krävs';
$string['mobileapp'] = 'Mobilapp';
$string['mobileappconnected'] = 'Kopplat till mobilapp';
$string['mobileappearance'] = 'Mobilvy';
$string['mobileappenabled'] = 'Denna sajt är åtkomlig via mobilappen. <br /><a href="{$a}">Ladda ned appen här.</a>';
$string['mobileappsubscription'] = 'Apprenumeration';
$string['mobileauthentication'] = 'Mobil autentisering';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobilfunktioner';
$string['mobilenotificationsdisabledwarning'] = 'Mobilnotifieringar är inte påslagna. De borde aktiveras i Inställningar för notifieringar.';
$string['mobilesettings'] = 'Mobilinställningar';
$string['moodleappsportalfeatureswarning'] = 'Observera att vissa funktioner kan begränsas beroende på din Moodle-apprenumeration. För mer information, gå till <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notifications'] = 'Notiser';
$string['notificationsactivedevices'] = 'Aktiva enheter';
$string['notificationscurrentactivedevices'] = 'Enheter som tar emot notiser denna månad';
$string['notificationsignorednotifications'] = 'Ej skickade notiser';
$string['notificationslimitreached'] = 'Gränsen för aktiva användarenheter per månad har överskridits. Meddelanden för vissa användare kommer inte att skickas. Du rekommenderas att uppgradera din prenumeration i <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notificationsmissingwarning'] = 'Det gick inte att hämta statistik över notiser skickade till appen. Detta beror troligtvis på att notiser till mobilappen inte aktiverats på webbplatsen. Du kan aktivera dem under <em>Hantera webbplats &#10132; Meddelanden &#10132; Mobil</em>.';
$string['notificationsnewdevices'] = 'Nya enheter';
$string['notificationsseemore'] = 'OBS! Statistik över Moodle-appanvändning beräknas inte i realtid. För att få tillgång till mer detaljerad statistik, inklusive data från tidigare månader, vänligen logga in på <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notificationssentnotifications'] = 'Skickade notiser';
$string['oauth2identityproviders'] = 'OAuth 2 identity providers';
$string['offlineuse'] = 'Offline-användning';
$string['openusingembeddedbrowser'] = 'Öppna med inbäddad webbläsare';
$string['pluginname'] = 'Moodle-app verktyg';
$string['pluginnotenabledorconfigured'] = 'Pluginmodulen inte aktiverad eller konfigurerad';
$string['privacy:metadata:core_userkey'] = 'Användarens nycklar som använts för att skapa nyckel för automatisk inloggning för den aktuella användaren.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Datum för den senaste begäran om nyckel för automatisk inloggning. Mellan varje begäran krävs att det gått 6 minuter.';
$string['qrcodedisabled'] = 'Inloggning med QR-kod inaktiverad';
$string['qrcodeformobileappaccess'] = 'QR-kod för inloggning med mobilapp';
$string['qrcodeformobileapploginabout'] = 'Skanna QR-koden med din mobilapp och du loggas in automatiskt. QR-koden slutar fungera om {$a} minuter.';
$string['qrcodeformobileappurlabout'] = 'Skanna QR-koden med din mobilapp för att fylla i sidans URL i appen.';
$string['qrcodetype'] = 'Inloggning med QR-kod';
$string['qrcodetype_desc'] = 'En QR-kod kan tillhandahållas för mobila app-användare att skanna. Detta kan användas för att fylla i webbplatsens URL, eller där webbplatsen är säkrad med hjälp av HTTPS, för att automatiskt logga in användaren utan att behöva ange sitt användarnamn och lösenord.';
$string['qrcodetypelogin'] = 'QR-kod med automatisk inloggning';
$string['qrcodetypeurl'] = 'QR-kod med webbplats-URL';
$string['qrsiteadminsnotallowed'] = 'Av säkerhetsskäl är inloggning via QR-kod inte tillåtet för webbplatsadministratörer eller om du är inloggad som en annan användare.';
$string['readingthisemailgettheapp'] = 'Läser du detta i ett e-postmeddelande? <a href="{$a}">Ladda ned mobilappen för att få notifieringar i din mobila enhet</a>.';
$string['remoteaddons'] = 'Fjärrtillägg';
$string['responsivemainmenuitems'] = 'Responsiva menyobjekt';
$string['scanqrcode'] = 'Skanna QR-kod';
$string['selfsignedoruntrustedcertificatewarning'] = 'Det verkar som om HTTPS-certifikatet är självsignerat eller inte betrott. Mobilappen fungerar bara med betrodda webbplatser. Använd valfritt online SSL-kontrollverktyg för att diagnostisera problemet. Om det indikerar att certifikatet är OK kan du ignorera den här varningen.';
$string['setuplink'] = 'Nedladdningssida för app';
$string['setuplink_desc'] = 'URL till sida med alternativ för att ladda ner mobilappen från <em>App Store</em> och <em>Google Play</em>. Länken till nedladdningssidan för appen visas i sidfoten och i användarens profil. Lämna tom om du inte vill att länken ska visas.';
$string['smartappbanners'] = 'App-banderoller';
$string['subscription'] = 'Prenumeration';
$string['subscriptioncreated'] = 'Startdatum';
$string['subscriptionerrorrequest'] = 'Det uppstod ett oväntat fel när du försökte hämta information om din Moodle-appprenumeration.';
$string['subscriptionexpiration'] = 'Förfallodatum';
$string['subscriptionfeaturenotapplied'] = 'Den här funktionen är konfigurerad på din webbplats men ingår inte i din prenumeration. Inställningen kommer alltså inte att ha någon effekt.';
$string['subscriptionfeatures'] = 'Prenumerationsinnehåll';
$string['subscriptionlimitsurpassed'] = 'Gränsen för prenumerationen har överskridits';
$string['subscriptionregister'] = 'För information om de olika prenumerationsalternativen och för att få tillgång till Moodle-statistik över appanvändning, gå till <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['subscriptionsseemore'] = 'OBS! Informationen som visas uppdateras inte i realtid. Du kan behöva logga ut och logga in igen för att se uppdateringar. För information om hur du uppgraderar ditt appplan, vänligen logga in på <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['switchaccount'] = 'Växla konto';
$string['typeoflogin'] = 'Inloggningstyp';
$string['typeoflogin_desc'] = 'Om webbplatsen använder en SSO-autentiseringsmetod, välj då via ett webbläsarfönster eller via en inbäddad webbläsare. En inbäddad webbläsare ger en bättre användarupplevelse, fast detta fungerar inte med alla SSO-plugins.';
$string['viewqrcode'] = 'Visa QR-kod';
