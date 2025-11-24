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
 * Strings for component 'webservice', language 'sv', version '4.5'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Åtkomstkontrollfel';
$string['actwebserviceshhdr'] = 'Aktiva webbtjänstprotokoll';
$string['addaservice'] = 'Spara';
$string['addcapabilitytousers'] = 'Kontrollera funktionsbehörigheter';
$string['addcapabilitytousersdescription'] = 'Användare bör ha två funktionsbehörigheter - <code>webservice:createtoken</code> och en behörighet som matchar protokollet som används, till exempel <code>webservice/rest:use</code> eller <code>webservice/soap:use</code>. För att åstadkomma detta, skapa en roll för webbtjänster med den lämpliga funktionsbehörigheten tillåten och tilldela den till webbtjänst-användaren som en systemroll.';
$string['addexternalservice'] = 'Lägg till extern tjänst';
$string['addfunction'] = 'Lägg till funktion';
$string['addfunctionhelp'] = 'Välj funktion som skall läggas till tjänsten.';
$string['addfunctions'] = 'Lägg till funktioner';
$string['addfunctionsdescription'] = 'Välj nödvändiga funktioner för den nyligen skapade tjänsten.';
$string['addrequiredcapability'] = 'Tilldela/ta bort nödvändig funktionsbehörighet';
$string['addservice'] = 'Lägg till ny tjänst: {$a->name} (ID: {$a->id})';
$string['addservicefunction'] = 'Lägg till funktioner till tjänsten "{$a}"';
$string['allusers'] = 'Alla användare';
$string['apiexplorer'] = 'API-utforskare';
$string['apiexplorernotavalaible'] = 'API-utforskaren är inte tillgänglig ännu.';
$string['arguments'] = 'Argument';
$string['authmethod'] = 'Autentiseringsmetod';
$string['callablefromajax'] = 'Anropsbar från AJAX';
$string['cannotcreatetoken'] = 'Ingen behörighet att skapa webbtjänst-token för tjänsten {$a}.';
$string['cannotgetcoursecontents'] = 'Kan inte hämta kursinnehåll';
$string['checkusercapability'] = 'Kontrollera funktionsbehörighet för användare';
$string['checkusercapabilitydescription'] = 'Användaren bör ha lämpliga funktionsbehörigheter för de protokoll som används, till exempel <code>webservice/rest:use</code> eller <code>webservice/soap:use</code>. För att uppnå detta, skapa en roll för webbtjänster och tillåt lämpliga funktionsbehörigheter enligt ovan. Tilldela användaren av webbtjänsterna denna roll som en systemroll.';
$string['configwebserviceplugins'] = 'Av säkerhetsskäl bör endast protokoll som används vara aktiverade.';
$string['context'] = 'Sammanhang';
$string['createservicedescription'] = 'En tjänst är en uppsättning webbtjänstfunktioner. Du kommer tillåta användaren att komma åt en ny tjänst. På sidan <strong>Extern tjänst</strong>,  <b>markera</b> alternativen <em>\'Aktiverad\'</em> och <em>\'Endast behöriga användare\'</em>. Välj: <em>\'Ingen funktionsbehörighet krävs\'</em>.';
$string['createserviceforusersdescription'] = 'En tjänst är en uppsättning webbtjänstfunktioner. Du kommer tillåta användare att komma åt en ny tjänst. På sidan <strong>Extern tjänst</strong>, <b>markera</b> alternativet <em>\'Aktiverad\'</em> samt <b>avmarkera</b> <em>\'Endast behöriga användare\'</em>. Välj: <em>\'Ingen funktionsbehörighet krävs\'</em>.';
$string['createtoken'] = 'Skapa token';
$string['createtokenforuser'] = 'Skapa en token för en användare';
$string['createtokenforuserdescription'] = 'Skapa en token för webbtjänstanvändaren.';
$string['createuser'] = 'Skapa en specifik användare';
$string['createuserdescription'] = 'En webbtjänstanvändare som representerar det system som styr Moodle krävs.';
$string['criteriaerror'] = 'Saknad behörighet för att söka på ett kriterium.';
$string['default'] = 'Standard "{$a}"';
$string['deleteaservice'] = 'Ta bort tjänst';
$string['deleteservice'] = 'Ta bort tjänsten: {$a->name} (ID: {$a->id})';
$string['deleteserviceconfirm'] = 'Vid borttagning av en tjänst kommer även de token som är relaterade till tjänsten att tas bort. Vill du verkligen ta bort tjänsten <b>"{$a}"</b>?';
$string['deletetoken'] = 'Ta bort token';
$string['deletetokenconfirm'] = 'Vill du verkligen ta bort detta webbtjänsttoken för <strong>{$a->user}</strong> för tjänsten <strong>{$a->service}?</strong>';
$string['deprecated'] = 'Används ej längre';
$string['disabledwarning'] = 'Alla webbtjänstprotokoll är inaktiverade. "Aktivera webbtjänster"-inställningen finns under <em>Hantera webbplats->Avancerade egenskaper</em>.';
$string['doc'] = 'Dokumentation';
$string['docaccessrefused'] = 'Du får inte se dokumentationen för denna token';
$string['downloadfiles'] = 'Kan ladda ner filer';
$string['downloadfiles_help'] = 'Om aktiverat kan alla användare ladda ned filer med deras säkerhetsnycklar. De är begränsade till att ladda ned de filer på webbplatsen som de har behörighet till.';
$string['editaservice'] = 'Redigera tjänst';
$string['editexternalservice'] = 'Redigera extern tjänst';
$string['editservice'] = 'Redigera tjänsten: {$a->name} (ID: {$a->id})';
$string['enabled'] = 'Aktiverad';
$string['enabledocumentation'] = 'Aktivera utvecklardokumentation';
$string['enabledocumentationdescription'] = 'Detaljerad dokumentation för webbtjänster är tillgänglig för aktiverade protokoll.';
$string['enableprotocols'] = 'Aktivera protokoll';
$string['enableprotocolsdescription'] = 'Åtminstone ett protokoll bör vara aktiverat. Av säkerhetsskäl bör endast protokoll som skall användas aktiveras.';
$string['enablews'] = 'Aktivera webbtjänster';
$string['enablewsdescription'] = 'Webbtjänster måste aktiveras under <em>Hantera webbplats &#10132; Avancerade egenskaper</em>.';
$string['entertoken'] = 'Ange en säkerhetsnyckel/token:';
$string['error'] = 'Fel: {$a}';
$string['errorcatcontextnotvalid'] = 'Du kan inte exekvera funktioner i kategorikontextet (kategori-id: {$a->catid}). Felmeddelande: {$a->message}.';
$string['errorcodes'] = 'Felmeddelande';
$string['errorcoursecontextnotvalid'] = 'Du kan inte exekvera funktioner i kurskontextet (kurs-id: {$a->courseid}). Felmeddelande: {$a->message}.';
$string['errorinvalidparam'] = 'Parametern "{$a}" är ogiltig.';
$string['errornotemptydefaultparamarray'] = 'Parametern för webbtjänstbeskrivningen med namnet {$a} är en enkel parameter eller en matrisparameter. Standardvärdet kan bara vara tom matris. Kontrollera beskrivningen av webbtjänsten.';
$string['erroroptionalparamarray'] = 'Parametern för webbtjänstbeskrivning med namnet {$a} är en sammansatt parameter. Den kan inte ställas in som <code>VALUE_OPTIONAL</code>. Kontrollera beskrivningen av webbtjänsten.';
$string['eventwebservicefunctioncalled'] = 'Webbtjänstfunktion anropad';
$string['eventwebserviceloginfailed'] = 'Webbtjänstinloggning misslyckades';
$string['eventwebserviceservicecreated'] = 'Webbtjänst skapad';
$string['eventwebserviceservicedeleted'] = 'Webbtjänst borttagen';
$string['eventwebserviceserviceupdated'] = 'Webbtjänst uppdaterad';
$string['eventwebserviceserviceuseradded'] = 'Webbtjänstanvändare tillagd';
$string['eventwebserviceserviceuserremoved'] = 'Webbtjänstanvändare borttagen';
$string['eventwebservicetokencreated'] = 'Webbtjänsttoken skapat';
$string['eventwebservicetokensent'] = 'Webbtjänsttoken skickat';
$string['execute'] = 'Utför';
$string['executewarnign'] = 'VARNING: Om du klickar på <em>Utför</em> kommer databasen modifieras och dessa ändringar går inte att ångra!';
$string['externalservice'] = 'Extern tjänst';
$string['externalservicefunctions'] = 'Externa tjänstefunktioner';
$string['externalservices'] = 'Externa tjänster';
$string['externalserviceusers'] = 'Externa tjänsteanvändare';
$string['failedtolog'] = 'Misslyckades att logga';
$string['filenameexist'] = 'Filnamnet finns redan: {$a}';
$string['forbiddenwsuser'] = 'Kan inte skapa token för obekräftad, borttagen, avstängd eller gästanvändare.';
$string['function'] = 'Funktion';
$string['functions'] = 'Funktioner';
$string['generalstructure'] = 'Generell struktur';
$string['information'] = 'Information';
$string['installexistingserviceshortnameerror'] = 'Det finns redan en webbtjänst med kortnamnet "{$a}". Kan inte installera/uppdatera en annan webbtjänst med detta kortnamn.';
$string['installserviceshortnameerror'] = 'Kodningsfel: webbtjänstens kortnamn "{$a}" får endast innehålla alfanumeriska tecken (bokstäver och siffror), understreck (_), bindestreck (-) eller punkt (.)';
$string['invalidextparam'] = 'Ogiltig extern API-parameter: {$a}';
$string['invalidextresponse'] = 'Ogiltigt externt API-svar: {$a}';
$string['invalidiptoken'] = 'Ogiltigt token - din IP stöds inte';
$string['invalidtimedtoken'] = 'Ogiltigt token - det har förfallit';
$string['invalidtoken'] = 'Ogiltigt token - token hittades inte';
$string['iprestriction'] = 'IP-begränsning';
$string['iprestriction_help'] = 'Användaren måste anropa webbtjänsten från någon av de angivna IP-adresserna (separerade med komma).';
$string['key'] = 'Nyckel';
$string['keyshelp'] = 'Nycklarna används för att ge åtkomst till ditt Moodlekonto från externa applikationer.';
$string['loginrequired'] = 'Begränsat till inloggade användare.';
$string['manageprotocols'] = 'Hantera protokoll';
$string['managetokens'] = 'Hantera token';
$string['missingcaps'] = 'Saknade funktionsbehörigheter';
$string['missingcaps_help'] = 'Lista med för tjänsten nödvändiga funktionsbehörigheter som den valda användaren för närvarande inte har. Vissa funktioner kanske inte är tillgängliga utan dessa behörigheter.';
$string['missingpassword'] = 'Lösenord saknas';
$string['missingrequiredcapability'] = 'Funktionsbehörigheten {$a} krävs.';
$string['missingusername'] = 'Användarnamn saknas';
$string['missingversionfile'] = 'Programmeringsfel: Filen <code>version.php</code> saknas för {$a}-komponenten.';
$string['nameexists'] = 'Detta namn används redan av en annan tjänst.';
$string['nocapabilitytouseparameter'] = 'Användaren har inte den funktionsbehörighet som krävs för att använda parametern {$a}';
$string['nofunctions'] = 'Denna tjänst exponerar inga funktioner.';
$string['norequiredcapability'] = 'Ingen funktionsbehörighet krävs';
$string['notoken'] = 'Tokenlistan är tom';
$string['onesystemcontrolling'] = 'Tillåt ett externt system att interagera med Moodle';
$string['onesystemcontrollingdescription'] = 'Följande steg hjälper dig att ställa in Moodle-webbtjänsterna så att ett externt system kan interagera med Moodle. Detta inkluderar att ställa in en token-autentiseringsmetod (säkerhetsnyckel).';
$string['onlyseecreatedtokens'] = 'Du kan bara visa tokens som du har skapat.';
$string['operation'] = 'Operation';
$string['optional'] = 'Valfritt';
$string['passwordisexpired'] = 'Lösenordet har gått ut.';
$string['phpparam'] = 'XML-RPC (PHP struktur)';
$string['phpresponse'] = 'XML-RPC (PHP struktur)';
$string['postrestparam'] = 'PHP-kod för REST (POST-begäran)';
$string['potusers'] = 'Inte auktoriserade användare';
$string['potusersmatching'] = 'Icke auktoriserade användare som matchar';
$string['print'] = 'Skriv ut allt';
$string['protocol'] = 'Protokoll';
$string['removefunction'] = 'Ta bort';
$string['removefunctionconfirm'] = 'Vill du verkligen ta bort funktionen "{$a->function}" från tjänsten "{$a->service}"?';
$string['requireauthentication'] = 'Denna metod kräver autentisering med xxx behörighet.';
$string['required'] = 'Obligatorisk';
$string['requiredcapability'] = 'Funktionsbehörighet som krävs';
$string['requiredcapability_help'] = 'Om specificerad kan endast användare med den angivna funktionsbehörigheten använda tjänsten.';
$string['requiredcaps'] = 'Nödvändiga funktionsbehörigheter';
$string['resettokencomplete'] = 'Det valda tokenet återställdes';
$string['resettokenconfirm'] = 'Vill du verkligen återställa den här webbtjänstnyckeln för <strong>{$a->user}</strong> för tjänsten <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Vill du verkligen återställa den här nyckeln? Alla sparade länkar som innehåller den gamla nyckeln kommer inte längre fungera.';
$string['response'] = 'Svar';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Ett återställt konto behöver återställa lösenordet innan ett token kan erhållas.';
$string['restparam'] = 'REST (POST parametrar)';
$string['restrictedusers'] = 'Endast behöriga användare';
$string['restrictedusers_help'] = 'Den här inställningen avgör om alla användare med rättighet att skapa token för webbtjänster kan generera ett token för den här tjänsten via sidan för säkerhetsnycklar, eller om endast behöriga användare kan göra det.';
$string['securitykey'] = 'Säkerhetsnyckel (token)';
$string['securitykeys'] = 'Säkerhetsnycklar';
$string['selectauthorisedusers'] = 'Välj behöriga användare';
$string['selectedcapability'] = 'Vald';
$string['selectedcapabilitydoesntexit'] = 'Den för närvarande inställda förmåga som krävs ({$a}) existerar inte längre. Var god ändra den och spara ändringarna.';
$string['selectservice'] = 'Välj en tjänst';
$string['selectspecificuser'] = 'Välj en specifik användare';
$string['selectspecificuserdescription'] = 'Lägg till webbtjänstanvändaren som en behörig användare.';
$string['service'] = 'Tjänst';
$string['servicehelpexplanation'] = 'En tjänst är en uppsättning funktioner. En tjänst kan nås av alla användare eller bara specificerade användare.';
$string['servicename'] = 'Tjänstens namn';
$string['servicenotavailable'] = 'Webbtjänst är inte tillgänglig (den finns inte eller är inaktiverad)';
$string['servicerequireslogin'] = 'Webbtjänst ej tillgänglig. (Sessionen har loggats ut eller har förfallit).';
$string['servicesbuiltin'] = 'Inbyggda tjänster';
$string['servicescustom'] = 'Anpassade tjänster';
$string['serviceusers'] = 'Behöriga användare';
$string['serviceusersettings'] = 'Användarinställningar';
$string['serviceusersmatching'] = 'Behöriga användare som matchar';
$string['serviceuserssettings'] = 'Ändra inställningar för behöriga användare';
$string['shortnametaken'] = 'Kortnamnet används redan av en annan tjänst ({$a})';
$string['simpleauthlog'] = 'Enkel autentiseringsinloggning';
$string['step'] = 'Steg';
$string['supplyinfo'] = 'Mer detaljer';
$string['testauserwithtestclientdescription'] = 'Simulera extern åtkomst till tjänsten med hjälp av webbtjänsttestklienten. Innan du gör det loggar du in som en användare med funktionsbehörigheten <code>moodle/webservice:createtoken</code> och hämtar säkerhetsnyckeln (token) via användarens inställningssida. Du kommer att använda detta token i testklienten. I testklienten väljer du också ett protokoll med tokenautentisering. <strong>VARNING: Funktionerna du testar kommer att utföras för den här användaren, så var försiktig med vad du väljer att testa!</strong>';
$string['testclient'] = 'Testklient för webbtjänst';
$string['testclientdescription'] = '* Webbtjänsttestklienten <strong>exekverar</strong> funktionerna <strong>På RIKTIGT</strong>. Testa inte funktioner som du inte känner till. <br/>* Alla befintliga webbtjänstfunktioner har ännu inte implementerats i testklienten.<br/> * För att kontrollera att en användare inte kan komma åt vissa funktioner kan du testa vissa funktioner som du inte tillät.<br/> * Om du vill se tydligare felmeddelanden anger du felsökningsläget till <strong>{$a->mode}</strong> till {$a->atag}.';
$string['testwithtestclient'] = 'Testa tjänsten';
$string['testwithtestclientdescription'] = 'Simulera extern åtkomst till tjänsten med hjälp av webbtjänsttestklienten. Använd ett aktiverat protokoll med tokenautentisering. <strong>VARNING: Funktionerna som du testar kommer att utföras, så var försiktig med vad du väljer att testa!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Token autentisering';
$string['tokencreatedbyadmin'] = 'Kan endast återställas av Administratören (*)';
$string['tokencreator'] = 'Skapare';
$string['tokenfilter'] = 'Tokenfilter';
$string['tokenfilterreset'] = 'Visa alla token';
$string['tokenfiltersubmit'] = 'Visa endast matchande token';
$string['unknownoptionkey'] = 'Okänd nyckel för alternativ ({$a})';
$string['unnamedstringparam'] = 'Namnlös strängparameter';
$string['updateusersettings'] = 'Uppdatera';
$string['uploadfiles'] = 'Kan ladda upp filer';
$string['uploadfiles_help'] = 'Om det här alternativet är aktiverat kan alla användare ladda upp filer med sina säkerhetsnycklar till sitt eget privata filområde eller ett utkastfilområde. Alla användarfilkvoter gäller.';
$string['userasclients'] = 'Användare som klienter med token';
$string['userasclientsdescription'] = 'Följande steg hjälper dig att konfigurera Moodle-webbtjänsten för användare i egenskap av klienter. De här stegen hjälper också till att konfigurera den rekommenderade token-autentiseringsmetoden (säkerhetsnyckel). I det här användningsfallet genererar användaren sin säkerhetsnyckel via inställningarna i sin profil.';
$string['usermissingcaps'] = 'Saknade funktionsbehörigheter: {$a}';
$string['usernameorid'] = 'Användarnamn / Användar-ID';
$string['usernameorid_help'] = 'Ange användarnamn eller ID.';
$string['usernotallowed'] = 'Användaren är inte behörig till den här tjänsten. Du behöver tilldela behörighet till användaren på {$a}s administration av behöriga användare.';
$string['userservices'] = 'Användartjänster: {$a}';
$string['usersettingssaved'] = 'Inställningar sparade';
$string['validuntil'] = 'Giltig till';
$string['validuntil_help'] = 'Om angivet kommer den här tjänsten inaktiveras för den här användaren efter detta datum.';
$string['webservice'] = 'Webbtjänst';
$string['webservices'] = 'Webbtjänster';
$string['webservicesoverview'] = 'Översikt';
$string['webservicetokens'] = 'Webbtjänsttoken';
$string['wrongusernamepassword'] = 'Fel användarnamn eller lösenord';
$string['wsaccessuserdeleted'] = 'Nekad webbtjänståtkomst för borttaget användarnamn {$a}';
$string['wsaccessuserexpired'] = 'Nekad webbtjänståtkomst för användare med förfallet lösenord: {$a}';
$string['wsaccessusernologin'] = 'Nekad webbtjänståtkomst för användare som använt inloggningsmetoden "Ingen inloggning": {$a}';
$string['wsaccessusersuspended'] = 'Nekad webbtjänståtkomst för avstängd användare: {$a}';
$string['wsaccessuserunconfirmed'] = 'Nekad webbtjänståtkomst för obekräftad användare: {$a}';
$string['wsclientdoc'] = 'Dokumentation för webbtjänstklienter i Moodle';
$string['wsdocapi'] = 'API-dokumentation';
$string['wsdocumentation'] = 'Webbtjänstdokumentation';
$string['wsdocumentationdisable'] = 'Webbtjänstdokumentation är inaktiverad.';
$string['wsdocumentationintro'] = 'Innan du skapar en klient är det rekommenderat att du först läser igenom <em>"{$a->doclink}"</em>.';
$string['wsdocumentationlogin'] = 'eller ange webbtjänstanvändarnamn och -lösenord:';
$string['wspassword'] = 'Webbtjänstlösenord';
$string['wsusername'] = 'Webbtjänstanvändarnamn';
