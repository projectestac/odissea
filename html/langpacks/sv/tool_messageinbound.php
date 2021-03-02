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
 * Strings for component 'tool_messageinbound', language 'sv', version '3.8'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Klassnamn';
$string['component'] = 'Komponent';
$string['configmessageinboundhost'] = 'Adressen till servern som Moodle ska ansluta till för att kontrollera e-post. Om du vill ange en icke-standardport använder du [server]:[port], till exempel: <code>mail.example.com:993</code>. Om en port inte anges kommer standardporten för e-postservern användas.';
$string['defaultexpiration'] = 'Standardgiltighetsperiod för adress';
$string['defaultexpiration_help'] = 'När en e-postadress genereras av hanteraren kan den ställas in att automatiskt upphöra att gälla efter en tidsperiod så att den inte längre kan användas. Det är lämpligt att ställa in en tidsperiod för giltigheten.';
$string['description'] = 'Beskrivning';
$string['domain'] = 'E-postdomän';
$string['edit'] = 'Redigera';
$string['edithandler'] = 'Redigera inställningar för {$a}-hanteraren';
$string['editinghandler'] = 'Redigerar {$a}';
$string['enabled'] = 'Aktiverad';
$string['fixedenabled_help'] = 'Du kan inte ändra tillståndet för den här hanteraren. Detta kan bero på att hanteraren krävs av andra hanterare.';
$string['fixedvalidateaddress'] = 'Validera avsändare';
$string['fixedvalidateaddress_help'] = 'Du kan inte ändra adressverifieringen för den här hanteraren. Detta kan bero på att hanteraren kräver en särskild inställning.';
$string['handlerdisabled'] = 'Den e-posthanterare du försökte kontakta har inaktiverats. Det går för tillfället inte att bearbeta meddelanden.';
$string['incomingmailconfiguration'] = 'Konfiguration av inkommande E-post';
$string['incomingmailserversettings'] = 'Inställningar för inkommande E-post server';
$string['incomingmailserversettings_desc'] = 'Moodle kan ansluta till korrekt konfigurerade IMAP-servrar. Du kan ange vilka inställningar som ska användas för att ansluta till din IMAP-server här.';
$string['invalid_recipient_handler'] = 'Om ett giltigt meddelande tas emot men det inte går att autentisera avsändaren lagras meddelandet på e-postservern och användaren kontaktas med hjälp av e-postadressen i sin användarprofil. Användaren ges chansen att svara för att bekräfta äktheten i det ursprungliga meddelandet.

Den här hanteraren behandlar dessa svar.

Det är inte möjligt att inaktivera avsändarverifiering av den här hanteraren eftersom användaren kan svara från en felaktig e-postadress om deras e-postklientkonfiguration är felaktig.';
$string['invalid_recipient_handler_name'] = 'Ogiltig avsändare-hanterare';
$string['invalidrecipientdescription'] = 'Meddelandet "{$a->subject}" kunde inte autentiseras, eftersom det skickades från en annan e-postadress än i din användarprofil. För att meddelandet ska autentiseras måste du svara på det här meddelandet.';
$string['invalidrecipientdescriptionhtml'] = 'Meddelandet "{$a->subject}" kunde inte autentiseras, eftersom det skickades från en annan e-postadress än i din användarprofil. För att meddelandet ska autentiseras måste du svara på det här meddelandet.';
$string['invalidrecipientfinal'] = 'Meddelandet "{$a->subject}" kunde inte autentiseras. Vänligen kontrollera att du skickar meddelandet från samma adress som i din användarprofil.';
$string['mailbox'] = 'Namn på brevlåda';
$string['mailboxconfiguration'] = 'Brevlådekonfiguration';
$string['mailboxdescription'] = '[brevlåda]+underadress@[domän]';
$string['mailsettings'] = 'E-postinställningar';
$string['message_handlers'] = 'Meddelandehanterare';
$string['messageinbound'] = 'Inkommande meddelande';
$string['messageinboundenabled'] = 'Aktivera bearbetning av inkommande E-post';
$string['messageinboundenabled_desc'] = 'Bearbetning av inkommande e-post måste aktiveras för att meddelanden ska kunna skickas med korrekt information.';
$string['messageinboundgeneralconfiguration'] = 'Generella inställningar';
$string['messageinboundgeneralconfiguration_desc'] = 'Bearbetning av Inkommande meddelande gör att kan du ta emot och bearbeta e-post i Moodle. Detta används t.ex. för att skicka e-postsvar till foruminlägg eller lägga till filer i en användares privata filer.';
$string['messageinboundhost'] = 'Server för inkommande E-post';
$string['messageinboundhostpass'] = 'Lösenord';
$string['messageinboundhostpass_desc'] = 'Detta är det lösenord din tjänsteleverantör gett dig för att du ska kunna logga in på ditt E-postkonto.';
$string['messageinboundhostssl'] = 'Använd SSL';
$string['messageinboundhostssl_desc'] = 'Vissa e-postservrar stöder ytterligare en säkerhetsnivå genom att kryptera kommunikationen mellan Moodle och din server. Vi rekommenderar att du använder SSL-krypteringen om din server stöder det.';
$string['messageinboundhosttype'] = 'Servertyp';
$string['messageinboundhostuser'] = 'Användarnamn';
$string['messageinboundhostuser_desc'] = 'Detta är det användarnamn din tjänsteleverantör gett dig för att du ska kunna logga in på ditt E-postkonto.';
$string['messageinboundmailboxconfiguration_desc'] = 'När meddelanden skickas matchar de formatet address+data@example.com. För att på ett tillförlitligt sätt generera adresser från Moodle, ange den adress som du normalt skulle använda före @-tecknet, och domänen efter @-tecknet separat. Exempelvis skulle e-postlådans namn i exemplet vara "adress", och domänen E-post skulle vara "example.com". Du bör använda ett dedikerat e-postkonto för detta ändamål.';
$string['messageprocessingerror'] = 'Du skickade nyligen ett e-postmeddelande "{$a->subject}", men tyvärr gick det inte att bearbeta.

Felinformation visas nedan.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Du skickade nyligen ett e-postmeddelande "{$a->subject}" men tyvärr gick det inte att bearbeta.</p>
<p>Felinformation visas nedan.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'E-postmeddelandet "{$a->subject}" kunde inte bearbetas. Felet är: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'E-postmeddelandet "{$a->subject}" kunde inte bearbetas. Kontakta administratören för ytterligare information.';
$string['messageprocessingsuccess'] = '{$a->plain}

Om du inte vill fortsätta få dessa notiser kan du ändra dina personliga meddelandeinställningar genom att gå till  {$a->messagepreferencesurl} i din webbläsare.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Om du inte vill fortsätta få dessa notiser kan du <a href="{$a->messagepreferencesurl}">ändra dina personliga meddelandeinställningar</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Meddelande för att bekräfta att ett inkommande meddelande kom från dig';
$string['messageprovider:messageprocessingerror'] = 'Varning när ett inkommande meddelande inte kunnat bearbetas.';
$string['messageprovider:messageprocessingsuccess'] = 'Bekräftelse att ett meddelande har bearbetats framgångsrikt.';
$string['name'] = 'Namn';
$string['noencryption'] = 'Av - ingen kryptering';
$string['noexpiry'] = 'Förfaller ej';
$string['oldmessagenotfound'] = 'Du försökte att manuellt autentisera ett meddelande, men det gick inte att hitta meddelandet. Det kan bero på att det redan har bearbetats, eller att meddelandet har upphört att gälla.';
$string['oneday'] = 'En dag';
$string['onehour'] = 'En timme';
$string['oneweek'] = 'En vecka';
$string['oneyear'] = 'Ett år';
$string['pluginname'] = 'Inkommande meddelanden';
$string['privacy:metadata:coreuserkey'] = 'Användarens nycklar för att validera det mottagna meddelandet';
$string['privacy:metadata:messagelist'] = 'En lista över meddelandeidentifierare som inte kunde valideras och kräver ytterligare kontroll';
$string['privacy:metadata:messagelist:address'] = 'Adressen dit meddelandet skickades';
$string['privacy:metadata:messagelist:messageid'] = 'Meddelande-ID';
$string['privacy:metadata:messagelist:timecreated'] = 'Tidpunkten då posten skapades';
$string['privacy:metadata:messagelist:userid'] = 'ID för användaren som behöver godkänna meddelandet';
$string['replysubjectprefix'] = 'Sv:';
$string['requirevalidation'] = 'Validera avsändaradress';
$string['ssl'] = 'SSL (automatisk SSL-version)';
$string['sslv2'] = 'SSLv2 (SSL Version 2)';
$string['sslv3'] = 'SSLv3 (SSL Version 3)';
$string['taskcleanup'] = 'Städa upp overifierad inkommande e-post';
$string['taskpickup'] = 'Hämta inkommande E-post';
$string['tls'] = 'TLS (TLS; initierad via handskakning på protocol-nivå över en okrypterad kanal; REKOMMENDERAT sätt att etablera säker anslutning)';
$string['tlsv1'] = 'TLSv1 (direkt anslutning mot TLS-server version 1.x)';
$string['validateaddress'] = 'Validera avsändarens adress';
$string['validateaddress_help'] = 'När ett meddelande tas emot från en användare försöker Moodle validera meddelandet genom att jämföra avsändarens e-postadress med e-postadressen i deras användarprofil.

Om avsändaren inte matchar skickas ett meddelande till avsändaren med en begäran om att bekräfta att de verkligen skickade meddelandet.

Om den här inställningen är inaktiverad kontrolleras inte avsändaradressen.';
