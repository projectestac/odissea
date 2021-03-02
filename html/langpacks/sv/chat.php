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
 * Strings for component 'chat', language 'sv', version '3.8'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Du har kommande chattsessioner';
$string['ajax'] = 'Version som använder Ajax';
$string['autoscroll'] = 'Automatisk rullning';
$string['beep'] = 'Pipsignal';
$string['bubble'] = 'Bubbla';
$string['cantlogin'] = 'Det gick inte att logga in i denna chatt!';
$string['chat:addinstance'] = 'Ny chatt';
$string['chat:chat'] = 'Gå till en chatt';
$string['chat:deletelog'] = 'Ta bort chattloggar';
$string['chat:exportparticipatedsession'] = 'Exportera den chattsession du var med i';
$string['chat:exportsession'] = 'Exportera valfri chatssession';
$string['chat:readlog'] = 'Visa chattloggar';
$string['chat:talk'] = 'Delta i en chatt';
$string['chat:view'] = 'Visa chattaktivitet';
$string['chatintro'] = 'Beskrivning';
$string['chatname'] = 'Namnet på det här chattrummet';
$string['chatreport'] = 'Chattsessioner';
$string['chattime'] = 'Nästa chatt-tid';
$string['compact'] = 'Fäll ihop';
$string['composemessage'] = 'Skriv ett meddelande';
$string['configmethod'] = 'Den metod för chat som erbjuder ett ajax-baserat gränssnitt kontaktar regelbundet servern för uppdateringar. Den normala metoden för chat innebär att klienterna regelbundet måste kontakta servern för uppdateringar. Det kräver ingen konfiguration och fungerar överallt men en mängd chattare samtidigt kan skapa en stor arbetsbelastning för servern. Att använda en server demon kräver "shell"-tillgång till UNIX men det resulterar i en snabb, skalbar miljö för chat.';
$string['confignormalupdatemode'] = 'Chattar uppdaterad normalt effektivt med hjälp av <em>Keep-Alive</em> metoden för HTTP 1.1, men detta är fortfarande ganska belastande för servern. En mer avancerad metod är att använda <em>Strömma</em> för att skicka uppdateringar till användarna. Med <em>Strömma</em> skalar servern mycket bättre (liknande som <em>chatd</em>-metoden) men detta kanske inte stöds av din server.';
$string['configoldping'] = 'Vad är den maximala tid som får gå innan vi upptäcker att en användare är frånkopplad (i sekunder)? Värdet är bara en övre gräns eftersom frånkopplingar vanligtvis upptäcks mycket snabbt. Lägre värden kommer att vara mer belastande för din server. Om du använder den normala metoden <strong>ange aldrig</strong> ett värde lägre än värdet enligt formeln <code>2 * Värdet för \'Uppdatera\' nedan</code>.';
$string['configrefreshroom'] = 'Hur ofta ska själva chattrummet uppdateras? (i sekunder).  Om detta ställs lågt kommer chattrummet uppdateras snabbare, men det kan medföra en högre belastning på din webbserver när många människor chattar. Om du använder <em>Strömma</em> kan du välja högre uppdateringsfrekvenser -- prova med 2.';
$string['configrefreshuserlist'] = 'Hur ofta ska användarlistan uppdateras? (i sekunder)';
$string['configserverhost'] = 'Värdnamnet på datorn där serverdemonen finns.';
$string['configserverip'] = 'Den numeriska IP-adress som stämmer överens med värdnamnet ovan';
$string['configservermax'] = 'Det maximala antalet tillåtna klienter';
$string['configserverport'] = 'Port att använda för demonen på servern';
$string['coursetheme'] = 'Kurstema';
$string['crontask'] = 'Bakgrundsbearbetning för chattmodulen';
$string['currentchats'] = 'Aktiva chattsessioner';
$string['currentusers'] = 'Nuvarande användare';
$string['deletesession'] = 'Ta bort denna session';
$string['deletesessionsure'] = 'Är du säker på att du vill ta bort denna session?';
$string['donotusechattime'] = 'Visa inte några chattider';
$string['enterchat'] = 'Klicka här för att ansluta till chatten';
$string['entermessage'] = 'Skriv ditt meddelande';
$string['errornousers'] = 'Hittade inga användare!';
$string['eventmessagesent'] = 'Meddelande skickat';
$string['eventsessionsviewed'] = 'Visade sessioner';
$string['explaingeneralconfig'] = 'De här inställningarna används <strong>alltid</strong>';
$string['explainmethoddaemon'] = 'Dessa inställningar har bara en effekt om \'Serverdaemon för chatt\' väljs som chattmetod.';
$string['explainmethodnormal'] = 'Dessa inställningar har bara en effekt om \'Normal\' väljs som chattmetod.';
$string['generalconfig'] = 'Allmänna inställningar';
$string['idle'] = 'Inaktiv';
$string['indicator:cognitivedepth'] = 'Chat kognitivt';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baserad på det kognitiva djup som nåtts av en student i en Chatt-aktivitet.';
$string['indicator:cognitivedepthdef'] = 'Chatt kognitivt';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemanget som erbjuds av Chatt-aktiviteterna under detta analysintervall (Nivåer = Ingen visning, Visa, Inskickning, Visa återkoppling, Kommentera återkoppling)';
$string['indicator:socialbreadth'] = 'Chatt social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en Chattaktivitet.';
$string['indicator:socialbreadthdef'] = 'Chatt social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Chattaktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt, Deltagaren tillsammans med andra)';
$string['inputarea'] = 'Inmatningsområde';
$string['invalidid'] = 'Det gick inte att hitta det chat-rummet!';
$string['list_all_sessions'] = 'Lista alla sessioner';
$string['list_complete_sessions'] = 'Lista bara slutförda sessioner';
$string['listing_all_sessions'] = 'Listar alla sessioner';
$string['messagebeepseveryone'] = '{$a} skickar en pipsignal till alla!';
$string['messagebeepsyou'] = '{$a} har just skickat en pipsignal till dig';
$string['messageenter'] = '{$a} har just anslutit till denna chatt';
$string['messageexit'] = '{$a} har lämnat chatten';
$string['messages'] = 'Meddelanden';
$string['messageyoubeep'] = 'Du signalerade till {$a}';
$string['method'] = 'Chattmetod';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Serverdaemon för chatt';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Aktivitetsmodulen direktsamtal tillåter deltagare att ha textbaserade synkrona diskussioner i realtid.

Direktsamtal kan vara en engångsaktivitet eller så kan den repeteras samma tid varje dag eller vecka. Direktsamtalen sparas och kan göras tillgängliga för alla att se eller begränsade till användare med förmågan att se loggar för direktsamtal.

Direktsamtal är speciellt användbart när gruppen som samtalar inte har möjlighet att ses fysiskt, som t.ex.

* Regelbundna möten med elever som deltar i nätbaserade kurser för att möjliggöra dem att dela erfarenheter med andra inom samma kurs men på en annan plats
* En elev som är tillfälligt förhindrad att närvara personligen kan direktsamtala med sin lärare för att komma ifatt med sitt arbete
* Elever som är ute på yrkespraktik samlas för att diskutera sina erfarenheter med varandra och sin lärare
* Yngre barn som använder direktsamtal i hemmet under kvällarna som en kontrollerad introduktion till socialt nätverkande
* En frågor-och-svar-session med en inbjuden talare på en annan plats
* Sessioner för att hjälpa eleverna att förbereda sig på prov där läraren, eller andra elever, kan ställa exempelfrågor';
$string['modulenameplural'] = 'Chattar';
$string['neverdeletemessages'] = 'Ta aldrig bort meddelanden';
$string['nextsession'] = 'Nästa schemalagda session';
$string['no_complete_sessions_found'] = 'Hittade inga slutförda sessioner.';
$string['nochat'] = 'Det gick inte att hitta någon chat';
$string['noguests'] = 'Chatten är inte öppen för gäster';
$string['nomessages'] = 'Inga meddelanden än';
$string['nopermissiontoseethechatlog'] = 'Du har inte tillstånd att se loggarna för chattar.';
$string['normalkeepalive'] = 'Keep-Alive';
$string['normalstream'] = 'Strömma';
$string['noscheduledsession'] = 'Ingen schemalagd session';
$string['notallowenter'] = 'Du har inte tillstånd att gå in i chat-rummet';
$string['notlogged'] = 'Du är inte inloggad!';
$string['oldping'] = 'Frånkopplingstimeout';
$string['page-mod-chat-x'] = 'Valfri sida i chattmodulen';
$string['pastchats'] = 'Tidigare chattsessioner';
$string['pluginadministration'] = 'Hantera chattar';
$string['pluginname'] = 'Chatt';
$string['privacy:metadata:chat_messages_current'] = 'Nuvarande chatsession. Denna data är tillfällig och tas bort när chattsessionen tas bort.';
$string['privacy:metadata:chat_users:ip'] = 'Användar-IP';
$string['privacy:metadata:chat_users:lang'] = 'Användarspråk';
$string['privacy:metadata:chat_users:userid'] = 'Användar-ID';
$string['privacy:metadata:messages:message'] = 'Meddelandet';
$string['refreshroom'] = 'Uppdatera';
$string['refreshuserlist'] = 'Uppdatera användarlista';
$string['removemessages'] = 'Ta bort alla meddelanden';
$string['repeatdaily'] = 'Vid samma tid varje dag';
$string['repeatnone'] = 'Inga upprepade visningar - visa bara den specificerade tiden';
$string['repeattimes'] = 'Upprepa/publicera sessionstider';
$string['repeatweekly'] = 'Vid samma tid varje vecka';
$string['saidto'] = 'sade till';
$string['savemessages'] = 'Spara tidigare sessioner';
$string['search:activity'] = 'Chatt - aktivitetsinformation';
$string['seesession'] = 'Se den här sessionen';
$string['send'] = 'Skicka';
$string['sending'] = 'Skickar';
$string['serverhost'] = 'Servernamn';
$string['serverip'] = 'Serveradress';
$string['servermax'] = 'Max antal användare';
$string['serverport'] = 'Serverport';
$string['sessions'] = 'Chattsessioner';
$string['sessionstart'] = 'Nästa chattsession startar {$a->date} (om {$a->fromnow})';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Alla kan se de sessioner som har varit';
$string['studentseereports_help'] = 'Om detta är inställt till Nej kommer endast användare som har funktionsbehörigheten <code>mod/chat:readlog</code> kunna se chattloggarna.';
$string['talk'] = 'Tala';
$string['updatemethod'] = 'Uppdateringsmetod';
$string['updaterate'] = 'Uppdateringsfrekvens:';
$string['userlist'] = 'Användarlista';
$string['usingchat'] = 'Använder chat';
$string['usingchat_help'] = '<p>Modulen för chat innehåller några funktioner som ska göra det trevligare
att chatta.</p>
<dl>
	<dt><b>Smilies</b></dt>
		<dd>Alla "smilies (emoticons) som du kan skriva in på andra ställen
		i Moodle kan du även skriva in här och de kommer att visas på
		ett korrekt sätt. T ex  :-) = <img src="pix/s/smiley.gif" alt="smiley" /></dd>
	<dt><b>Länkar</b></dt>
		<dd>Internetadresser omvandlas automatiskt till länkar.</dd>
	<dt><b>Att uttrycka känslor</b></dt>
		<dd>Du kan inleda en rad med "/me" eller ":" för att uttrycka känslor.
		Om du, till exempel, heter Lasse och skriver in ":skrattar"
		eller "/me skrattar!"  så kommer alla att se "Lasse skrattar!"</dd>
	<dt><b>Pipsignaler</b></dt>
		<dd>Du kan skicka ett ljud till andra genom att klicka på "pip"-länken bredvid deras namn.
		Du kan också skicka en signal till alla samtidigt genom att skriva "beep all".</dd>
	<dt><b>HTML</b></dt>
		<dd>Om du kan lite HTML-kod så kan du använda det i din text för att lägga in bilder,
		spela upp ljud eller skapa text med olika färger och storlekar.</dd>
</dl>';
$string['viewreport'] = 'Visa de senaste chat-sessionerna';
