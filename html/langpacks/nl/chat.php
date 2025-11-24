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
 * Strings for component 'chat', language 'nl', version '4.5'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Chatsessie op komst';
$string['ajax'] = 'Versie met Ajax';
$string['autoscroll'] = 'Automatisch rollen';
$string['beep'] = 'Piep';
$string['bubble'] = 'Tekstballonnetje';
$string['cantlogin'] = 'Kon niet in de chatroom!';
$string['chat:addinstance'] = 'Voeg een nieuwe chat toe';
$string['chat:chat'] = 'Gebruik chat';
$string['chat:deletelog'] = 'Verwijder chat logs';
$string['chat:exportparticipatedsession'] = 'Exporteer je chatdeelname';
$string['chat:exportsession'] = 'Exporteer een chatsessie';
$string['chat:readlog'] = 'Bekijk chat logs';
$string['chat:talk'] = 'Praat in een chat';
$string['chat:view'] = 'Bekijk chat-activiteit';
$string['chatintro'] = 'Inleidende tekst';
$string['chatname'] = 'Naam van deze chatroom';
$string['chatreport'] = 'Chat-sessies';
$string['chattime'] = 'Volgende chattijd';
$string['compact'] = 'Compact';
$string['composemessage'] = 'Maak een bericht';
$string['configmethod'] = 'De AJAX chatmethode geeft een AJAX gebaseerde chatinterface die regelmatig de server contacteert voor updates. De gewone chatmethode laat de clients regelmatig contact maken met de server voor updates. Deze methode vraagt geen configuratie en werkt op alle servers, maar kan een zware belasting op de server veroorzaken wanneer er veel chatters tegelijk online zijn. Om een serverdaemon te kunnen gebruiken heb je shell-toegang tot Unix nodig, maar je krijgt er een snelle, schaalbare chatomgeving mee.';
$string['confignormalupdatemode'] = 'Chatrooms worden normaal gezien heel eficient geupdatet met de <em>Keep-Alive</em> functie van het HTTP 1.1 protocol, maar het geeft een grote belasting voor de server. Een meer geavanceerde methode is gebruik te maken van <em>Stream</em> om de updates tot bij de gebruikers te krijgen. Het gebruik van <em>Stream</em> geeft betere resultaten (gelijkwaardig met de chatd methode), maar het is mogelijk dat je server dat niet ondersteunt.';
$string['configoldping'] = 'Na hoeveel tijd zonder activiteit wil je een gebruiker als weg uit de chat beschouwen (in seconden)? Dit is slechts een maximale limiet. Verbroken verbindingen worden gewoonlijk heel vlug gedetecteerd. Kleinere waarden zullen je server zwaarder belasten. Als je de normale methode gebruikt, zet deze instelling dan <strong>nooit</strong> lager dan 2* chat_refresh_room';
$string['configrefreshroom'] = 'Hoe vaak moet de chatroom ververst worden? (in seconden). Als je deze waarde laag instelt kan de chatroom sneller lijken te werken, maar het kan ook, als veel mensen aan het chatten zijn, een hogere belasting op de webserver veroorzaken. Als je <em>Stream updates</em> gebruikt, dan kun je een hoger verversingsfrequentie instellen - probeer met 2.';
$string['configrefreshuserlist'] = 'Hoe vaak moet de lijst met gebruikers ververst worden? (in seconden)';
$string['configserverhost'] = 'De naam van de computer waarop de serverdaemon geïnstalleerd is';
$string['configserverip'] = 'Het IP-adres dat hoort bij bovenstaande computernaam';
$string['configservermax'] = 'Maximale aantal toegelaten clients';
$string['configserverport'] = 'Poort die de server moet gebruiken voor de daemon';
$string['coursetheme'] = 'Cursusthema';
$string['crontask'] = 'Achtergrondverwerking voor chatmodule';
$string['currentchats'] = 'Actieve chatsessies';
$string['currentusers'] = 'Huidige gebruikers';
$string['deletesession'] = 'Verwijder de sessie';
$string['deletesessionsure'] = 'Ben je er zeker van dat je deze sessie wil verwijderen?';
$string['donotusechattime'] = 'Publiceer geen chattijden';
$string['enterchat'] = 'Ga naar de chat';
$string['entermessage'] = 'Geef je bericht';
$string['errornousers'] = 'Kon geen gebruikers vinden!';
$string['eventmessagesent'] = 'Bericht verzonden';
$string['eventsessionsviewed'] = 'Sessies bekeken';
$string['explaingeneralconfig'] = 'Deze instellingen worden <strong>altijd</strong> gebruikt';
$string['explainmethoddaemon'] = 'Deze instellingen worden alleen gebruikt als je de "Chat server daemon" gekozen hebt bij Chat methode (chat_method).';
$string['explainmethodnormal'] = 'Deze instellingen worden alleen gebruikt als je "Normaal" gekozen hebt bij chat methode (chat_method).';
$string['generalconfig'] = 'Algemene instellingen';
$string['idle'] = 'Wachtend';
$string['indicator:cognitivedepth'] = 'Chat cognitief';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de door de leerling bereikte cognitieve diepte in een Chat activiteit.';
$string['indicator:cognitivedepthdef'] = 'Chat cognitief';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid van de Chat-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen weergave, Bekijken, Verzenden, Feedback bekijken, Reageren op feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Chat sociaal';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de door de leerling behaalde sociale breedte in een Chat activiteit.';
$string['indicator:socialbreadthdef'] = 'Chat sociaal';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de sociale betrokkenheid van de Chat-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen deelname, Alleen deelnemer, Deelnemer met anderen)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Inputvenster';
$string['invalidid'] = 'Kon chatroom niet vinden!';
$string['list_all_sessions'] = 'Toon alle sessies.';
$string['list_complete_sessions'] = 'Toon alleen volledige sessies.';
$string['listing_all_sessions'] = 'Alle sessies tonen.';
$string['messagebeepseveryone'] = '{$a} piept iedereen!';
$string['messagebeepsyou'] = '{$a} heeft je net gepiept!';
$string['messageenter'] = '{$a} is net deze chat binnen gekomen';
$string['messageexit'] = '{$a} heeft deze chat verlaten';
$string['messages'] = 'Berichten';
$string['messageyoubeep'] = 'Je biepte {$a}';
$string['method'] = 'Chat methode';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'Normaal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Met de chatmodule kunnen deelnemers een real-time synchrone discussie hebben.

De chat kan een eenmalige activiteit zijn of kan bijvoorbeeld herhaald worden dezelfde tijd elke week. Chatsessies worden bewaard en kunnen voor iedereen beschikbaar gemaakt worden of beperkt worden tot gebruikers die het recht hebben om logs van chatsessies te zien.

Chats zijn heel geschikt wanneer de chatters elkaar niet geregeld ontmoeten, bijvoorbeeld

* ontmoetingen van leerlingen die deelnemen aan online cursussen om hen de mogelijkheid te geven ervaringen met anderen te delen die dezelfde cursus volgen maar op een andere locatie
* een leerling die tijdelijk niet aanwezig kan zijn kan chatten met zijn leraar over in te halen werk
* leerlingen die op stage zijn kunnen hun ervaringen delen met elkaar en met hun leraar
* jonger kinderen kunnen thuis gecontroleerd chatten als introductie in de wereld van sociaal netwerken
* een vraag/antwoordsessie met een uitgenodigde spreker op een andere locatie
* sessies om leerlingen voor te bereiden op testen waar de leraar of medeleerlingen elkaar voorbeeldvragen stellen';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Berichten nooit verwijderen';
$string['nextchattime'] = 'Volgend chat-moment:';
$string['no_complete_sessions_found'] = 'Geen volledige sessies gevonden.';
$string['nochat'] = 'Geen chatruimte gevonden';
$string['noguests'] = 'De chatruimte is niet toegankelijk voor gastgebruikers';
$string['nomessages'] = 'Nog geen berichten';
$string['nopermissiontoseethechatlog'] = 'Je hebt het recht  niet om de chat-logs te zien';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Steam';
$string['noscheduledsession'] = 'Geen sessie gepland';
$string['notallowenter'] = 'Je hebt het recht niet de chatroom binnen te gaan.';
$string['notlogged'] = 'Niet ingelogd';
$string['oldping'] = 'Timeout verbinding verbroken';
$string['page-mod-chat-x'] = 'Chatmodulepagina';
$string['pastchats'] = 'Voorbije chatsessies';
$string['pastsessions'] = 'Afgelopen sessies';
$string['pluginadministration'] = 'Chat beheer';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Huidige chat-sessie. Deze gegevens zijn tijdelijk en worden verwijderd nadat de chat-sessie verwijderd is';
$string['privacy:metadata:chat_users'] = 'Houdt bij welke gebruikers zich in welke chat-rooms bevinden';
$string['privacy:metadata:chat_users:firstping'] = 'Tijdstip van eerste toegang tot een chat-room';
$string['privacy:metadata:chat_users:ip'] = 'Gebruikers-IP';
$string['privacy:metadata:chat_users:lang'] = 'Gebruikerstaal';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Tijdstip van laatste bericht in deze chat-room';
$string['privacy:metadata:chat_users:lastping'] = 'Tijdstip van laatste toegang tot de chat-room';
$string['privacy:metadata:chat_users:userid'] = 'De gebruikers-ID';
$string['privacy:metadata:chat_users:version'] = 'Hoe de gebruiker toegang kreeg tot de chat (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Een record van de berichten tijdens een chat-sessie';
$string['privacy:metadata:messages:issystem'] = 'Of het bericht een systeem-gegenereerd bericht is';
$string['privacy:metadata:messages:message'] = 'Het bericht';
$string['privacy:metadata:messages:timestamp'] = 'Het tijdstip waarop het bericht werd verzonden.';
$string['privacy:metadata:messages:userid'] = 'De gebruikersID van de auteur van het bericht';
$string['refreshroom'] = 'Ververs chatroom';
$string['refreshuserlist'] = 'Ververs gebruikerslijst';
$string['removemessages'] = 'Alle berichten';
$string['repeatdaily'] = 'Elke dag om dezelfde tijd';
$string['repeatnone'] = 'Geen herhalingen - alleen publiceren op de aangegeven tijd';
$string['repeattimes'] = 'Herhaal/publiceer  chatsessiemomenten';
$string['repeatweekly'] = 'Elke week om dezelfde tijd';
$string['saidto'] = 'zei tegen';
$string['savemessages'] = 'Bewaar voorbije chatsessies';
$string['search:activity'] = 'Chat - activiteitsinformatie';
$string['seesession'] = 'Bekijk deze sessie';
$string['send'] = 'Stuur';
$string['sending'] = 'Versturen';
$string['serverhost'] = 'Servernaam';
$string['serverip'] = 'Server IP';
$string['servermax'] = 'Maximale aantal gebruikers';
$string['serverport'] = 'Serverpoort';
$string['sessions'] = 'Chatsessies';
$string['sessionstartsin'] = 'De volgende chat-sessie begint binnen {$a}.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Iedereen kan voorbije chatsessies bekijken';
$string['studentseereports_help'] = 'Indien ingesteld op nee, dan kunnen enkel de gebruikers met de mogelijkheid mod/chat:readlog de chat-logs zien';
$string['talk'] = 'Spreek';
$string['updatemethod'] = 'Update methode';
$string['updaterate'] = 'Updatesnelheid:';
$string['userlist'] = 'Gebruikerslijst';
$string['usingchat'] = 'Gebruik chat';
$string['usingchat_help'] = '<p>De chatmodule kent mogelijkheden die het chatten een beetje prettiger kunnen doen verlopen.</p>

<dl>
<dt><b>Smiley\'s</b></dt>
<dd>Alle smiley-gezichten (emoticons) die je ook elders in Moodle kunt typen kunnen ook hier ingetoetst worden.
 Ze zullen op de juiste manier getoond worden. Bijvoorbeeld, :-) = <img alt src="pix/s/smiley.gif">  </dd>

<dt><b>Links</b></dt>
<dd>Internetaddressen worden automatisch in links veranderd.</dd>

<dt><b>\'Emoting\'</b></dt>
<dd>Je kunt een regel beginnen met "/me" of ":" om te \'emoten\'. Als je naam bijvoorbeeld Kim is en je typt ":lacht!" of "/me lacht!"
dan zal iedereen "Kim lacht!" zien</dd>

<dt><b>Beep</b></dt>
<dd>Je kunt een geluid naar andere mensen sturen door op de &quot;Beep&quot; -link naast hun naam te klikken. Een handige manier om in
 één keer alle mensen in de chat te roepen is door "Beep all" te typen.</dd>

<dt><b>HTML</b></dt>
<dd>Als je een beetje kennis hebt van HTML-code, dan kun je die in je tekst gebruiken om dingen als afbeeldingen
 te laten, geluiden af te spelen en de tekstkleur en -grootte te veranderen .</dd>

</dl>';
$string['viewreport'] = 'Voorbije chatsessies';
