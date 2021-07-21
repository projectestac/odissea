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
 * Strings for component 'mnet', language 'sv', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (själv-signerad)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (signerad)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP okrypterad';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (själv-signerad)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (signerad)';
$string['aboutyourhost'] = 'Om din server';
$string['accesslevel'] = 'Behörighetsnivå';
$string['addhost'] = 'Lägg till värd';
$string['addnewhost'] = 'Lägg till en ny värd';
$string['addtoacl'] = 'Lägg till i åtkomstkontroll';
$string['allhosts'] = 'Alla värdar';
$string['allhosts_no_options'] = 'Det finns inga tillgängliga alternativ när man visar ett flertal värdar';
$string['allow'] = 'Tillåt';
$string['applicationtype'] = 'Typ av applikation';
$string['authfail_nosessionexists'] = 'Auktorisation misslyckades: mnet-sessionen  finns inte.';
$string['authfail_sessiontimedout'] = 'Auktorisation misslyckades: tiden för mnet-sessionen har gått ut.';
$string['authfail_usermismatch'] = 'Auktorisation misslyckades: användaren matchar inte.';
$string['authmnetdisabled'] = 'Plugin-modulen MNet autentisering är <strong>inaktiverad</strong>.';
$string['badcert'] = 'Det här är inte ett giltigt certifikat';
$string['certdetails'] = 'Detaljer om Cert';
$string['configmnet'] = 'Mnet tillåter kommunikation med andra servrar och tjänster för denna server.';
$string['couldnotgetcert'] = 'Det gick inte att hitta något certifikat på <br />{$a}<br />Värden kan vara onåbar eller felaktigt konfigurerad.';
$string['couldnotmatchcert'] = 'Det här matchar inte det certifikat som f.n. är publicerat av webbservern.';
$string['courses'] = 'Kurser';
$string['courseson'] = 'Kurser på';
$string['current_transport'] = 'Aktuell transport';
$string['currentkey'] = 'Nuvarande publik nyckel';
$string['databaseerror'] = 'Det gick inte att skriva detaljer till databasen';
$string['deleteaserver'] = 'Tar bort en server';
$string['deletedhostinfo'] = 'Denna värd har tagits bort. Om du vill återställa den, ställ den borttagna statusen tillbaka till "Nej".';
$string['deletedhosts'] = 'Borttagna värdar: {$a}';
$string['deletehost'] = 'Ta bort värd';
$string['deletekeycheck'] = 'Är du helt säker på att du vill ta bort den här nyckeln?';
$string['deleteoutoftime'] = 'Tiden för Ditt 60-sekunders fönster för att ta bort den här nyckeln har gått ut. Vänligen börja om igen.';
$string['deleteuserrecord'] = 'SSO ACL: ta bort post för användare \'{$a->user}\' från {$a->host}.';
$string['deletewrongkeyvalue'] = 'Det har uppstått ett fel. Om Du inte höll på att försöka ta bort Din servers SSL-nyckel så är det möjligt att Du har blivit utsatt för en illasinnad attack. Ingen åtgärd har vidtagits.';
$string['deny'] = 'Avslå';
$string['description'] = 'Beskrivning';
$string['duplicate_usernames'] = 'Vi misslyckades med att skapa ett index över kolumnerna "mnethostid" och "username" i Din användartabell.<br />Detta kan inträffa när Du har <a href="{$a}" target="_blank">dubbletter av användarnamn i Din användartabell</a>.<br />Din uppgradering bör ändå fullföljas  framgångsrikt. Klicka på länken ovan så kommer instruktioner om hur Du åtgärdar detta problem att visas i ett nytt fönster. Du kan ta itu med det i slutet av uppgraderingen.<br />';
$string['enabled_for_all'] = '(Den här tjänsten har aktiverats för alla värdar)';
$string['enterausername'] = 'Vänligen mata in ett användarnamn, eller en lista över användarnamn separerade med komman.';
$string['error7020'] = 'Det här felet uppstår normalt sett om fjärrplatsen har skapat en post åt dig med fel wwwroot, till exempel https://yoursite.com i stället för https://www.yoursite.com. Kontakta administratören av fjärrwebbplatsen med din wwwroot (enligt vad som anges i config.php) och be dem att uppdatera posten för din värd.';
$string['error7022'] = 'Meddelandet du skickade till fjärrplatsen krypterades korrekt, men signerades inte. Detta är mycket oväntat; du bör förmodligen lämna in en felrapport om detta inträffar (med så mycket information som möjligt om programversionerna i fråga, etc).';
$string['error7023'] = 'Fjärrwebbplatsen har försökt att avläsa ditt krypterade meddelande med alla de nycklar som den har registrerat angående din webbplats. Ingen av nycklarna har fungerat. Du kanske kan ordna till detta genom att manuellt redigera nycklarna hos fjärrwebbplatsen. Det är osannolikt att detta ska hända om det inte är så att du inte har kommunicerat med webbplatsen på några månader.';
$string['error7024'] = 'Du skickar ett okrypterat meddelande till fjärrplatsen, men fjärrplatsen accepterar inte okrypterad kommunikation från din webbplats. Detta är mycket oväntat; du bör förmodligen lämna in en felrapport om detta inträffar (med så mycket information som möjligt om programversionerna i fråga, etc).';
$string['error7026'] = 'Den nyckel som du har signerat ditt meddelande med skiljer sig ifrån den nyckel som fjärrvärden har registrerat på en fil för din server. Dessutom så har fjärvärden försökt att hämta din aktuella nyckel men misslyckats med detta. Vänligen skriv in nyckeln manuellt hos fjärrvärden och försök igen.';
$string['error709'] = 'Fjärrwebbplatsen har misslyckats med att få en SSL-nyckel från dig.';
$string['eventaccesscontrolcreated'] = 'Åtkomstkontroll skapad';
$string['eventaccesscontrolupdated'] = 'Åtkomstkontroll uppdaterad';
$string['expired'] = 'Giltighetstiden för den här nyckeln gick ut';
$string['expires'] = 'Giltig t.o.m.';
$string['expireyourkey'] = 'Ta bort den här nyckeln';
$string['expireyourkeyexplain'] = 'Moodle roterar dina nycklar automatiskt var 28:e dag (som förvald standardinställning) men du har alternativet att <em>manuellt</em> låta tiden för den här nyckeln löpa ut. En ersättande nyckel kommer omedelbart att skapas.<br />Om du tar bort den här nyckeln så blir det omöjligt för andra instanser av Moodle att kommunicera med dig fram till dess du manuellt kontaktar varje administratör och ger dem tillgång till din nya nyckel.';
$string['exportfields'] = 'Fält att exportera';
$string['failedaclwrite'] = 'Det gick inte att skriva till MNet:s åtkomstkontroll-lista för användaren \'{$a}\'.';
$string['findlogin'] = 'Sök login';
$string['forbidden-function'] = 'Den funktionen har inte aktiverats för RPC.';
$string['forbidden-transport'] = 'Den transportmetod som Du försöker använda är inte tillåten.';
$string['forcesavechanges'] = 'Forcera spara';
$string['helpnetworksettings'] = 'Konfigurera MNET kommunikation';
$string['hidelocal'] = 'Dölj lokala användare';
$string['hideremote'] = 'Dölj fjärranvändare';
$string['host'] = 'värd';
$string['hostcoursenotfound'] = 'Det gick inte att hitta värd eller kurs';
$string['hostdeleted'] = 'Värden har tagits bort';
$string['hostexists'] = 'Det finns redan en post för den där värden med det värdnamnet (det kan tas bort)<a href= "{$a}"> Klicka här </a> för att redigera den posten.';
$string['hostlist'] = 'Lista över nätverkande värdar';
$string['hostname'] = 'Värdnamn';
$string['hostnamehelp'] = 'Det fullt kvalificerade domännamnet för fjärrvärden. t.ex. www.exempel.se';
$string['hostnotconfiguredforsso'] = 'Den här servern är inte konfigurerad för fjärr-inloggning.';
$string['hostsettings'] = 'Värdinställningar';
$string['http_self_signed_help'] = 'Tillåt anslutningar genom att använda ett självsignerat DIY SSL-certifikat på fjärrvärden.';
$string['http_verified_help'] = 'Tillåt anslutningar som använder ett verifierat SSL-certifikat i PHP på fjärrservern, men över http (inte https).';
$string['https_self_signed_help'] = 'Tillåt anslutningar som använder ett själv-signerat DIY SSL i PHP hos fjärrvärden via http.';
$string['https_verified_help'] = 'Tillåt anslutningar som använder ett verifierat SSL-certifikat på fjärrservern.';
$string['id'] = 'ID';
$string['idhelp'] = 'Det här värdet är tilldelat automatiskt och det går inte att ändra.';
$string['importfields'] = 'Fält att importera';
$string['inspect'] = 'Inspektera';
$string['installnosuchfunction'] = 'Kodningsfel! Någonting försöker att installera en mnet xmlrpc funktion ({$a->method}) från en fil ({$a->file}) och den går inte att hitta!';
$string['installnosuchmethod'] = 'Kodningsfel! Någonting försöker att installera en mnet xmlrpc funktion ({$a->method}) på en klass ({$a->class}) och den går inte att hitta!';
$string['installreflectionclasserror'] = 'Kodningsfel! MNet introspektion misslyckades för metoden \'{$a->method}\' i klassen \'{$a->class}\'. Det ursprungliga felmeddelandet, om det är till hjälp, är: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Kodningsfel! MNet introspektion misslyckades för metoden \'{$a->method}\' i filen \'{$a->file}\'. Det ursprungliga felmeddelandet, om det är till hjälp, är: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Ogiltig parameter för tillgänglighet';
$string['invalidactionparam'] = 'Ogiltig parameter för åtgärd';
$string['invalidhost'] = 'Du måste ange en giltig identifierare för värd.';
$string['invalidpubkey'] = 'Nyckeln är inte en giltig SSL-nyckel. ({$a})';
$string['invalidurl'] = 'Ogiltig parameter för URL';
$string['ipaddress'] = 'IP-adress';
$string['is_in_range'] = 'IP-adressen <code>{$a}</code> representerar en giltig och betrodd värd.';
$string['ispublished'] = '{$a} har aktiverat den här tjänsten för dig.';
$string['issubscribed'] = ' {$a} prenumererar på den här tjänsten hos Din värd.';
$string['keydeleted'] = 'Din nyckel har framgångsrikt tagits bort och ersatts.';
$string['keymismatch'] = 'Den publika nyckel som Du innehar skiljer sig från den publika nyckel som den f.n. publicerar. Den aktuella publicerade nyckeln är:';
$string['last_connect_time'] = 'Senast tidpunkt för anslutning';
$string['last_connect_time_help'] = 'Det senaste tillfället som Du kontaktade den här värden.';
$string['last_transport_help'] = 'Den transport som Du använde för den senaste anslutningen till den här värden.';
$string['leavedefault'] = 'Använd de förvalda standardinställningarna istället';
$string['listservices'] = 'Lista tjänster';
$string['loginlinkmnetuser'] = '<br />Om du är fjärranvändare av ett nätverk för Moodle och kan <a href="{$a}">bekräfta din e-postadress här</a> så kan du bli omdirigerad inloggningssidan.';
$string['logs'] = 'Loggar';
$string['managemnetpeers'] = 'Administrera jämbördiga (peers)';
$string['method'] = 'Metod';
$string['methodhelp'] = 'Metodhjälp för {$a}';
$string['methodsavailableonhost'] = 'Metoder som är tillgängliga på {$a}';
$string['methodsavailableonhostinservice'] = 'Metoder som är tillgängliga för {$a->service} på {$a->host}';
$string['methodsignature'] = 'Metodsignatur för {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Konkatenera (upp til) 3 strängar och returnera resultatet.';
$string['mnet_session_prohibited'] = 'Användare från din hemserver har f.n. inte behörighet att navigera vidare till {$a}.';
$string['mnetdisabled'] = 'MNet är <strong>inaktiverad</strong>.';
$string['mnetidprovider'] = 'Leverantör av ID för MNet';
$string['mnetidproviderdesc'] = 'Du kan använda den här funktionen för att hämta en länk som du kan logga in med om du kan ange rätt e-postadress som matchar det användarnamn som du tidigare försökte logga in med.';
$string['mnetidprovidermsg'] = 'Du bör kunna logga in hos din {$a} leverantör.';
$string['mnetidprovidernotfound'] = 'Tyvärr, men ingen ytterligare information kunde hittas.';
$string['mnetpeers'] = '\'Peers\' jämbördiga partners';
$string['mnetservices'] = 'Tjänster';
$string['mnetsettings'] = 'MNET inställningar';
$string['moodle_home_help'] = 'Sökvägen till förstasidan för MNet-applikationen hos fjärrvärden, t.ex. /moodle/.';
$string['name'] = 'Namn';
$string['net'] = 'Nätverkande';
$string['networksettings'] = 'Inställningar för nätverkande';
$string['never'] = 'Aldrig';
$string['noaclentries'] = 'Inga tillägg till listan över kontroll av SSO-tillgänglighet.';
$string['noaddressforhost'] = 'Det gick tyvärr inte att tolka värdnamnet ({$a})';
$string['nocurl'] = 'PHP cURL-biblioteket är inte installerat';
$string['nolocaluser'] = 'Det finns ingen lokal post för fjärranvändaren och det gick inte att skapa någon eftersom den här värden inte skapar användare automatiskt. Vänligen kontakta din administratör!';
$string['nomodifyacl'] = 'Du har inte behörighet att modifiera listan för kontroll av MNET-tillgänglighet.';
$string['nonmatchingcert'] = 'Ämnet för certifikatet: <br /><em>{$a->subject}</em><br /> matchar inte värden som det kom från:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Det uppstod ett problem i samband med att den publika nyckeln skulle hämtas.<br />Det kan hända att värden inte tillåter MNET eller nyckeln är ogiltig.';
$string['nosite'] = 'Det gick inte att hitta en kurs på webbplatsnivå';
$string['nosuchfile'] = 'Filen/funktionen {$a} finns inte.';
$string['nosuchfunction'] = 'Det gick inte att lokalisera funktionen eller också var funktionen blockerad för RPC.';
$string['nosuchmodule'] = 'Funktionen var feladresserad och det gick inte att lokalisera den. Vänligen använd formatet mod/modulename/lib/functionname';
$string['nosuchpublickey'] = 'Det gick inte att få tillgång till en publik nyckel för verifiering av signatur.';
$string['nosuchservice'] = 'Tjansten RPC körs inte på den här värden.';
$string['nosuchtransport'] = 'Det finns inga transporter med det ID:t';
$string['notBASE64'] = 'Den här strängen är inte i base64 format. Den kan inte vara en giltig nyckel.';
$string['notPEM'] = 'Den här nyckeln är inte i PEM-format. Den kommer inte att fungera.';
$string['not_in_range'] = 'IP-adressen <code>{$a}</code> representerar inte en giltig och betrodd värd.';
$string['notenoughidpinfo'] = 'Din leverantör av identiteter ger dig tyvärr inte tillräckligt med information för att skapa eller uppdatera ditt konto lokalt.';
$string['notinxmlrpcserver'] = 'Försök att få tillgång till fjärrklienten för MNet, inte under körning av XMLRPC server.';
$string['notmoodleapplication'] = 'OBS! Detta är inte en Moodle-applikation så en del av metoderna för inspektion kanske inte kommer att fungera som de ska.';
$string['notpermittedtojump'] = 'Du har inte behörighet att inleda en fjärrsession från den här Moodle-servern.';
$string['notpermittedtojumpas'] = 'Du kan inte starta en fjärrsession medan du är inloggad som en annan användare.';
$string['notpermittedtoland'] = 'Du har inte behörighet att inleda en fjärrsession.';
$string['off'] = 'Av';
$string['on'] = 'På';
$string['options'] = 'Alternativ';
$string['peerprofilefielddesc'] = 'Här kan du åsidosätta de globala inställningarna angående vilka profilfält som ska sändas och importeras när nya användare ska skapas.';
$string['permittedtransports'] = 'Tillåtna transporter';
$string['phperror'] = 'Ett internt PHP-fel förhindrade Din förfrågan från att fullföljas.';
$string['position'] = 'Position';
$string['postrequired'] = 'Funktionen \'ta bort\' kräver en POST-förfrågan.';
$string['privacy:metadata'] = 'Pluginmodulen MNet lagrar ingen personlig information.';
$string['profileexportfields'] = 'Fält att sända';
$string['profilefielddesc'] = 'Här kan du konfigurera listan över profilfält som skickas och tas emot via MNet när användarkonton skapas eller uppdateras. Du kan också åsidosätta detta för varje MNet-klient individuellt. Observera att följande fält alltid skickas och inte är valfria: {$a}';
$string['profilefields'] = 'Profilfält';
$string['profileimportfields'] = 'Fält att importera';
$string['promiscuous'] = 'Promiskuös';
$string['publickey'] = 'Publik nyckel';
$string['publickey_help'] = 'Den publika nyckeln hämtas automatiskt från fjärrservern.';
$string['publickeyrequired'] = 'Du behöver tillhandahålla en publik nyckel.';
$string['publish'] = 'Publicera';
$string['reallydeleteserver'] = 'Är du säker på att du vill ta bort servern?';
$string['receivedwarnings'] = 'De följande varningarna mottogs';
$string['recordnoexists'] = 'Posten existerar inte';
$string['reenableserver'] = 'Nej - välj det här alternativet för att återaktivera den här servern.';
$string['registerallhosts'] = 'Registrera alla värdar (promiskuöst läge)';
$string['registerallhostsexplain'] = 'Du kan välja att registrera alla värdar som försöker att ansluta sig till dig automatiskt. Det innebär att för vilken MNet-sajt som än ansluter till dig och efterfrågar din publika nyckel kommer en post att visas i din lista över värdar. <br />Du har alternativet här nedan att konfigurera tjänster för \'Alla värdar\' och genom att aktivera några tjänster där kommer du att kunna tillhandahålla tjänster till vilken Moodle-server som helst utan restriktioner.';
$string['registerhostsoff'] = 'Registrering av alla värdar är f n <b>av</b>';
$string['registerhostson'] = 'Registrering av alla värdar är f n <b>på</b>';
$string['remotecourses'] = 'Fjärrkurser';
$string['remotehost'] = 'Fjärrvärd';
$string['remotehosts'] = 'Fjärrvärdar';
$string['remoteuser'] = 'Extern {$a->remotetype}-användare';
$string['remoteuserinfo'] = 'Profil hämtad från <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Nätverkande kräver ett tillägg (extension) för OpenSSL.';
$string['restore'] = 'Återställ';
$string['returnvalue'] = 'Returvärde';
$string['reviewhostdetails'] = 'Granska serverdetaljer';
$string['reviewhostservices'] = 'Granska tjänster hos värd';
$string['selectaccesslevel'] = 'Vänligen välj en åtkomstnivå i listan.';
$string['selectahost'] = 'Vänligen välj en fjärrvärd för Moodle.';
$string['service'] = 'Namn på tjänst';
$string['serviceid'] = 'ID för tjänst';
$string['servicesavailableonhost'] = 'Tjänster som är tillgängliga på {$a}';
$string['serviceswepublish'] = 'Tjänster som vi publicerar till {$a}';
$string['serviceswesubscribeto'] = 'Tjänster hos {$a} som vi abonnerar på.';
$string['settings'] = 'Inställningar';
$string['showlocal'] = 'Visa lokala användare';
$string['showremote'] = 'Visa fjärranvändare';
$string['ssl_acl_allow'] = 'SSO ACL: Tillåt användare \'{$a->user}\' från \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Avvisa användare \'{$a->user}\' från \'{$a-host}\'';
$string['sslverification'] = 'SSL-verifiering';
$string['sslverification_help'] = 'Med det här alternativet kan du konfigurera säkerhetsnivån när du ansluter till en server med HTTPS.

* Ingen: ingen säkerhetsnivå
* Verifiera endast värd: validerar domänen för SSL-certifikatet
* Verifiera värd och utfärdare (rekommenderas): validerar domänen och utfärdaren av SSL-certifikatet';
$string['ssoaccesscontrol'] = 'SSO-åtkomst kontroll';
$string['ssoacldescr'] = 'Använd den här sidan för att medge/avslå tillgång för specifika användare från fjärrvärdar i MNet. Det här är funktionellt när Du erbjuder SSO-tjänster till fjärranvändare. För att kontrollera Dina <em>lokala</em> användares kapacitet att navigera vidare till andra värdar i MNet så kan Du använda systemet för roller till att medge dem kapaciteten  <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'För att Du ska kunna använda denna  funktionalitet så måste Du aktivera nätverk för Moodle plus att plugin-programmet för autentisering via ett nätverk för Moodle ska vara aktiverat.';
$string['strict'] = 'Strikt';
$string['subscribe'] = 'Prenumerera';
$string['system'] = 'System';
$string['testclient'] = 'Testklient för MNet';
$string['testtrustedhosts'] = 'Testa en adress';
$string['testtrustedhostsexplain'] = 'Mata in en IP-adress för att kontrollera om det är en betrodd värd.';
$string['theypublish'] = 'De publicerar';
$string['theysubscribe'] = 'De prenumererar';
$string['transport_help'] = 'De här alternativen är reciproka (ömsesidiga) så Du kan bara tvinga en fjärrvärd att använda ett signerat SSL-certifikat om Din egen server också har ett signerat SSL-certifikat';
$string['trustedhosts'] = 'XML-RPC värdar';
$string['trustedhostsexplain'] = '<p>Systemet för betrodda värdar gör det möjligt för specifika datorer att köra anrop via XML-RPC till valfri del av Moodle-API:t. Detta är tillgängligt för skript för att kontrollera Moodles beteende och kan vara ett mycket farligt alternativ att aktivera. Om du är osäker, håll det inaktiverat.</p>
<p><strong>Det här behövs inte för <em>någon</em> standard MNet-funktion!</strong> Slå bara på den om du vet vad du gör.</p>
<p>För att aktivera det anger du en lista över IP-adresser eller nätverk - en på varje rad. Några exempel:</p>
Din lokala värd:<br />127.0.0.1<br />Din lokal värd (med ett nätverksblock):<br />127.0.0.1/32<br />Endast värd med IP-adress 192.168.0.7:<br />192.168.0.7/32<br />En värd med en IP-adress mellan 192.168.0.1 och 192.168.0.255:<br />192.168.0.0/24<br />En godtycklig värd:<br />192.168.0.0/0<br />Det sista exemplet är <strong>inte</strong> en rekommenderad konfiguration.';
$string['turnitoff'] = 'Inaktivera';
$string['turniton'] = 'Aktivera det';
$string['type'] = 'Typ';
$string['unknown'] = 'Okänd';
$string['unknownerror'] = 'Ett okänt fel uppstod under förhandlingarna.';
$string['usercannotchangepassword'] = 'Du kan inte ändra Ditt lösenord här eftersom Du är en fjärranvändare.';
$string['userchangepasswordlink'] = '<br /> Du kanske kan ändra ditt lösenord hos din<a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> tillhandahållare.';
$string['usernotfullysetup'] = 'Ditt användarkonto är inte komplett. Du behöver gå<a href="{$a}"> tillbaka till din leverantör</a> och försäkra dig om att din profil är komplett där. Du kanske måste logga ut och in igen för att det här ska fungera.';
$string['usersareonline'] = 'Varning! {$a} användare från den servern är just nu inloggade på din webbplats.';
$string['validated_by'] = 'Den är validerad via nätverket:  <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Verifiera värd och klient';
$string['verifyhostonly'] = 'Verifiera endast värd';
$string['verifysignature-error'] = 'Verifikationen av signaturen misslyckades.  Det uppstod ett fel.';
$string['verifysignature-invalid'] = 'Verifikationen av signaturen misslyckades. Det verkat som den här nyttolasten inte hade signerats av dig.';
$string['version'] = 'Version';
$string['warning'] = 'Varning';
$string['wrong-ip'] = 'Din IP-adress matchar inte den adress som vi har i våra register.';
$string['xmlrpc-missing'] = 'Du måste ha XML-RPC installerad i din instans av PHP för att kunna använda den här egenskapen.';
$string['yourhost'] = 'Din server';
$string['yourpeers'] = 'Dina klienter';
