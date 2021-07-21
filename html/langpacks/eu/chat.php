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
 * Strings for component 'chat', language 'eu', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Laster txat-saioak dituzu';
$string['ajax'] = 'AJAX erabiltzen duen bertsioa';
$string['autoscroll'] = 'Korritze automatikoa';
$string['beep'] = 'Abisua';
$string['bubble'] = 'Burbuila';
$string['cantlogin'] = 'Ezin da sartu txat-gelan!!!';
$string['chat:addinstance'] = 'Gehitu txat-gela berria';
$string['chat:chat'] = 'Sartu txat-gelara';
$string['chat:deletelog'] = 'Ezabatu txataren agerraldiak';
$string['chat:exportparticipatedsession'] = 'Esportatu zeuk parte hartutako txat-saioak';
$string['chat:exportsession'] = 'Esportatu edozein txat-saio';
$string['chat:readlog'] = 'Ikusi txataren agerraldiak';
$string['chat:talk'] = 'Txatean hitz egin';
$string['chat:view'] = 'Ikusi txateko aktibitatea';
$string['chatintro'] = 'Deskribapena';
$string['chatname'] = 'Txat-gela honen izena';
$string['chatreport'] = 'Txat-saioetako txostenak';
$string['chattime'] = 'Hurrengo txat-saioaren ordua';
$string['compact'] = 'Trinkoa';
$string['composemessage'] = 'Idatzi mezua';
$string['configmethod'] = 'AJAX bidezko txat-metodoak AJAX bidezko txat-interfazea ematen du, zerbitzariarekin datuak freskatzeko aldiro konektatzen dena. Txataren ohiko metodoa erabilita erabiltzaileek aldiro konektatzen dute zerbitzariarekin datuak freskatzeko. Ez du konfiguraziorik behar eta edonon funtzionatzen du, baina zerbitzaria gainkarga dezake erabiltzaile asko aldi berean txateatzen ari badira. Zerbitzariko \'daemon\'a erabiltzeak Unixerako shell sarbidea eskatzen du, baina txat-giro arinago eta lorgarriagoa ematen du.';
$string['confignormalupdatemode'] = 'Txat-gelaren eguneraketak normalean HTTP 1.1ren <em>Keep-Alive</em> ezaugarri efizientea erabilita zerbitzatzen dira baina hala izanda ere zerbitzariarentzat nahikoa astuna da lan hau. Erabiltzaileei eguneraketak bidaltzeko metodo aurreratuagoa da <em>Stream</em> estrategia erabiltzea. <em>Stream</em> erabilita eskalamendu hobea lortzen da (chatd metodoaren antzekoa da) baina agian zure zerbitzariak ez du onartuko aukera hau.';
$string['configoldping'] = 'Jarduerarik gabe zenbat denbora (segundoetan) igarota pentsatu behar da erabiltzaileak utzi egin duela?';
$string['configrefreshroom'] = 'Zenbat segundoero freskatu behar da txataren orria? Balio baxuak elkarrizketa arinagoa ahalbidetuko du, baina zerbitzariarentzat karga handia izan daiteke gelan lagun asko dagoenean. <em>Stream</em> eguneratzeak erabiltzen ari bazara freskatze-maiztasun handiagoak jarri ditzakezu -- 2 jartzen saiatu zaitez.';
$string['configrefreshuserlist'] = 'Zenbat segundoero eguneratu behar da txatean dauden erabiltzaileen zerrenda?';
$string['configserverhost'] = 'Zerbitzariaren \'daemon\'a (egikaritza prozesu independentea) dagoen ordenagailuaren \'Hostame\'a (etxekoaren izena)';
$string['configserverip'] = '\'hostame\'aren (etxekoaren izena) baliokidea den IP zenbakizko helbidea';
$string['configservermax'] = 'Gehinenezko erabiltzaile kopurua';
$string['configserverport'] = 'Zerbitzariaren \'daemon\'ak erabiltzen duen portua';
$string['coursetheme'] = 'Ikastaroaren azala';
$string['crontask'] = 'Txat-moduluaren atzeko planoko prozesatzea';
$string['currentchats'] = 'Txat-txostenak martxan jarri';
$string['currentusers'] = 'Oraingo erabiltzaileak';
$string['deletesession'] = 'Ezabatu txosten hau';
$string['deletesessionsure'] = 'Ziur zaude txosten hau ezabatu nahi duzula?';
$string['donotusechattime'] = 'Ez argitaratu txat-saioetarako orduak';
$string['enterchat'] = 'Egin klik hemen txat-gelara sartzeko';
$string['entermessage'] = 'Idatzi zure mezua';
$string['errornousers'] = 'Ezin topatu erabiltzailerik!';
$string['eventmessagesent'] = 'Mezua bidali da';
$string['eventsessionsviewed'] = 'Saioak ikusi dira';
$string['explaingeneralconfig'] = 'Ezarpen hauek <strong>beti</strong> daude indarrean';
$string['explainmethoddaemon'] = 'Egokitzapen hauek soilik dute eragina \'Daemon txat zerbitzaria\' txat-metodoa aukeratu baduzu.';
$string['explainmethodnormal'] = 'Egokitzapen hauek soilik dute eragina txat-metodo \'Arrunta\' aukeratu baduzu.';
$string['generalconfig'] = 'Ezarpen orokorrak';
$string['idle'] = 'Abian jarri gabe';
$string['indicator:cognitivedepth'] = 'Gaitasun kognitiboa txatetan';
$string['indicator:cognitivedepth_help'] = 'Adierazle hau ikasleak Txat motako jardueretan lortutako sakonera kognitiboan oinarrituta dago.';
$string['indicator:cognitivedepthdef'] = 'Gaitasun kognitiboa txatetan';
$string['indicator:cognitivedepthdef_help'] = 'Partaide honek Txat jarduerak eskaintzen duen gaitasun kognitiboaren ehuneko hau lortu du analisi-tarte honetan (Mailak = Ikusi gabe, Ikusi da, Bidali da, Feedbacka ikusi da, Feedbackari iruzkina egin da)';
$string['indicator:socialbreadth'] = 'Gaitasun soziala txatetan';
$string['indicator:socialbreadth_help'] = 'Helburu hau ikasleak Txat motako jardueretan lortutako zabalera sozialean oinarrituta dago.';
$string['indicator:socialbreadthdef'] = 'Gaitasun soziala txatetan';
$string['indicator:socialbreadthdef_help'] = 'Partaide honek Txat jarduerak eskaintzen duen gaitasun sozialaren ehuneko hau lortu du analisi-tarte honetan (Mailak = Parte-hartzerik ez, bakarkako parte-hartzea, parte-hartzea besteekin)';
$string['inputarea'] = 'Sarrera-gunea';
$string['invalidid'] = 'Ezin da aurkitu txat-gela hori!';
$string['list_all_sessions'] = 'Saio guztien zerrenda.';
$string['list_complete_sessions'] = 'Saio osatu berrien zerrenda.';
$string['listing_all_sessions'] = 'Saio guztiak zerrendatzen.';
$string['messagebeepseveryone'] = '{$a}(e)k dio: Aizue! Hemen nago!';
$string['messagebeepsyou'] = '{$a}(e)k dio: Aizu! Hemen nago!';
$string['messageenter'] = '{$a} oraintxe sartu da gelan';
$string['messageexit'] = '{$a} irten egin da gelatik';
$string['messages'] = 'Mezuak';
$string['messageyoubeep'] = 'Zure soinua: {$a}';
$string['method'] = 'Txat metodoa';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Txat zerbitzariaren \'daemon\'a';
$string['methodnormal'] = 'Arrunta';
$string['modulename'] = 'Txat-gela';
$string['modulename_help'] = 'Txat moduluak parte hartzaileak testu bidez denbora errealean eztabaida sinkronoak egitea ahalbidetzen du.

Txata behin erabiltzeko aktibitatea izan daiteke edo hainbat alditan errepika daiteke (egunero ordu berean, astero,...). Txat-saioak gordeta gelditzen dira eta partaide guztiek ikusteko edo gaitasunak dituztenek soilik ikusteko moduan konfigura daiteke.

Txatak bereziki erabilgarriak dira aurrez aurreko talde-bilerak egin ezin direnean, hala nola

* On-line ikastaroetan parte hartzen duten ikasleen artean esperientziak trukatzeko, kokapen geografiko ezberdinetan daudenean.
* Aldi batez bertaratu ezin den ikasle bat irakaslearekin hitz egiteko besteen maila harrapatzeko.
* Praktiketan dauden ikasleek euren artean eta irakaslearekin euren esperientziak eztabaidatzeko.
* Gaztetxoenek etxetik txata erabiltzeko, sare sozialen mundura sarbide kontrolatu (monitorizatu) bat egiteko.
* Kokapen geografiko ezberdinean dagoen hizlari gonbidatu batekin galde-erantzun saio bat egiteko.
* Ikasleei azterketak prestatzen laguntzeko saioak egiteko, non irakasleak edo beste ikasle batzuk adibide galderak planteatuko dituzten';
$string['modulenameplural'] = 'Txat-gelak';
$string['neverdeletemessages'] = 'Ez ezabatu mezuak';
$string['nextchattime'] = 'Hurrengo txataren unea:';
$string['nextsession'] = 'Programatutako hurrengo txat-saioa';
$string['no_complete_sessions_found'] = 'Ez da aurkitu osatutako saiorik';
$string['nochat'] = 'Ez dago txatik';
$string['noguests'] = 'Txat-gela honetan ezin bisitariak sartu';
$string['nomessages'] = 'Ez dago mezurik oraindik';
$string['nopermissiontoseethechatlog'] = 'Ez duzu txat-en agerraldiak ikusteko baimenik.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Ez dago programatuta txat-saiorik';
$string['notallowenter'] = 'Zuk ez duzu txat-gela honetan sartzeko baimenik.';
$string['notlogged'] = 'Ez duzu saioa hasi!';
$string['oldping'] = 'Deskonektatzeko itxarote-epea';
$string['page-mod-chat-x'] = 'Txat moduluaren edozein orri';
$string['pastchats'] = 'Izandako txat-saioak';
$string['pluginadministration'] = 'Txat-kudeaketa';
$string['pluginname'] = 'Txat-gela';
$string['privacy:metadata:chat_messages_current'] = 'Oraingo txat-saioa. Datu hauek behin behinekoak dira eta ezabatuak izaten dira txat-saioa ezabatzen denean.';
$string['privacy:metadata:chat_users'] = 'Txat-gela bakoitzean dauden erabiltzaileen erregistroa gordetzen du';
$string['privacy:metadata:chat_users:firstping'] = 'Txat-gelarako lehen sarbidearen unea';
$string['privacy:metadata:chat_users:ip'] = 'Erabiltzailearen IPa';
$string['privacy:metadata:chat_users:lang'] = 'Erabiltzailearen hizkuntza';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Txat-gelako azken mezuaren unea';
$string['privacy:metadata:chat_users:lastping'] = 'Txat-gelarako azken sarbidearen unea';
$string['privacy:metadata:chat_users:userid'] = 'Erabiltzailearen IDa';
$string['privacy:metadata:chat_users:version'] = 'Erabiltzailea txatera sartu zen modua (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Txat-saioan zehar mezuak grabatu eta bidali dira.';
$string['privacy:metadata:messages:issystem'] = 'Ea mezua sistemak sortu ote duen.';
$string['privacy:metadata:messages:message'] = 'Mezua';
$string['privacy:metadata:messages:timestamp'] = 'Mezua bidali zeneko unea.';
$string['privacy:metadata:messages:userid'] = 'Mezua idatzi duen egilearen erabiltzaile IDa';
$string['refreshroom'] = 'Freskatu gela';
$string['refreshuserlist'] = 'Freskatu erabiltzaileen zerrenda';
$string['removemessages'] = 'Ezabatu mezu guztiak';
$string['repeatdaily'] = 'Egunero ordu berean';
$string['repeatnone'] = 'Ez errepikatu - argitaratu soilik zehaztutako ordua';
$string['repeattimes'] = 'Errepikatu/argitaratu saioen denbora';
$string['repeatweekly'] = 'Astero ordu berean';
$string['saidto'] = 'zera dio';
$string['savemessages'] = 'Gorde izan diren txat-saioak';
$string['search:activity'] = 'Txata - jardueraren informazioa';
$string['seesession'] = 'Ikusi saio honetako txostena';
$string['send'] = 'Bidali';
$string['sending'] = 'Bidaltzen';
$string['serverhost'] = 'Zerbitzariaren izena';
$string['serverip'] = 'Zerbitzariaren IPa';
$string['servermax'] = 'Gehienezko erabiltzaileak';
$string['serverport'] = 'Zerbitzariaren portua';
$string['sessions'] = 'Txat-saioetako txostenak';
$string['sessionstart'] = 'Txat-saioa {$a->date}(e)tan hasiko da, (hemendik {$a->fromnow}(e)ra)';
$string['sessionstartsin'] = 'Hurrengo txat-saioa {$a} barru hasiko da.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Denek ikus ditzakete izandako saioetako txostenak';
$string['studentseereports_help'] = 'EZ aukeratuz gero, mod/chat:readlog gaitasuna duten erabiltzaileek baino ezingo dituzte txat-agerraldiak ikusi';
$string['talk'] = 'Hitz egin';
$string['updatemethod'] = 'Eguneratu metodoa';
$string['updaterate'] = 'Eguneratu kalifikazioa:';
$string['userlist'] = 'Erabiltzaile-zerrenda';
$string['usingchat'] = 'Txata erabili';
$string['usingchat_help'] = 'Txatean ondorengo baliabideak erabil ditzakegu modu atseginean hitz egiteko.

* Aurpegierak - Aurpegiera guztiak automatikoki bihurtuko dira grafiko deskriptiboago.  Adibidez: :-)
* Estekak - Internet helbideak automatikoki bihurtuko dira esteka.
* Emozioak - Lerro bat "/me" edo ":" -rekin has dezakezu emozio bat erakusteko. Adibidez, Ana baduzu izena eta ": irribartsu dago"  idazten baduzu, denek ikusiko dute "Ana irribartsu dago"
* Beeps-ak - Beste pertsona bati txistua bidali ahal diozu izenaren ondoko "beep" estekan klik eginda. Txateko beste pertsona bati abisua emateko erabil dezakegu eta gu han gaudela ohartarazteko. Txat-saioko partaide guztiei ere egin ahal diezu beep-a "beep all" idatzita.
* HTML - Zure testuan HTML lengoaia erabil dezakezu irudiak txertatzeko, soinuak eragiteko edo testuari formatua emateko, beste aukeren artean.';
$string['viewreport'] = 'Ikusi izan diren txat-saioak';
