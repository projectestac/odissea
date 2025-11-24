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
 * Strings for component 'chat', language 'lt', version '4.5'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Jūs turite artėjančių pokalbių sesijų';
$string['ajax'] = 'Versija naudojant AJAX';
$string['autoscroll'] = 'Automatinė slinktis';
$string['beep'] = 'Pyptelėti';
$string['bubble'] = 'Burbulas';
$string['cantlogin'] = 'Nepavyko prisijungti prie tiesioginių pokalbių!!';
$string['chat:addinstance'] = 'Pridėti naują pokalbį';
$string['chat:chat'] = 'Prieiti prie tiesioginių pokalbių';
$string['chat:deletelog'] = 'Naikinti pokalbių žurnalus';
$string['chat:exportparticipatedsession'] = 'Eksportuoti pokalbio seansą, kuriame dalyvavote';
$string['chat:exportsession'] = 'Eksportuoti bet kurį pokalbio seansą';
$string['chat:readlog'] = 'Žiūrėti pokalbių žurnalus';
$string['chat:talk'] = 'Kalbėti tiesioginiame pokalbyje';
$string['chat:view'] = 'Peržiūrėti pokalbių veiklą';
$string['chatintro'] = 'Įžangos tekstas';
$string['chatname'] = 'Šio tiesioginio pokalbio pavadinimas';
$string['chatreport'] = 'Pokalbių seansai';
$string['chattime'] = 'Kito pokalbio data';
$string['compact'] = 'Kompaktiškas';
$string['composemessage'] = 'Rašyti žinutę';
$string['configmethod'] = '„Ajax“ pokalbių metodas suteikia galimybę naudoti „Ajax“ pagrįstą pokalbių sąsaja, kuri reguliariai susisiekia su serveriu, kad būtų atnaujinta. Naudojant įprastą pokalbių metodą, klientai reguliariai susisiekia su serveriu, kad būtų atnaujinti. Tokio metodo nereikia konfigūruoti ir jis veikia visur, bet, jei yra daug pokalbio dalyvių, jis gali smarkiai apkrauti serverį. Norint naudoti serverio tarnybą, būtina apvalkalo prieiga prie „Unix“, tačiau taip bus užtikrinta sparti keičiamo dydžio pokalbių aplinka.';
$string['confignormalupdatemode'] = 'Paprastai tiesioginių pokalbių naujinimai efektyviai teikiami naudojant HTTP 1.1 funkciją <em>„Keep-Alive“</em>, bet ji vis tiek gana smarkiai apkrauna serverį. Pažangesnis metodas teikti naudotojams naujinimus yra naudoti strategiją <em>„Stream“</em>. Naudojant <em>„Stream“</em> dydis keičiamas daug geriau (panašiai kaip naudojant metodą „chatd“), bet jūsų serveris gali šio metodo nepalaikyti.';
$string['configoldping'] = 'Kiek daugiausia laiko (sekundėmis) gali praeiti, kol nustatysime, kad naudotojas atsijungė? Tai tik viršutinė riba, nes atsijungimai dažniausiai pastebimi labai greitai. Mažesnės reikšmės pareikalaus daugiau jūsų serverio išteklių. Jei naudojate įprastą metodą, <strong>niekada</strong> nenustatykite mažesnės reikšmės nei 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Kaip dažnai (sekundėmis) turėtų būti atnaujinamas pats tiesioginis pokalbis? Nustačius mažą reikšmę atrodys, kad tiesioginis pokalbis atnaujinamas greičiau, bet tai labiau apkraus jūsų žiniatinklio serverį, jei tuo pat metu šnekėsis daug žmonių. Jei naudojate <em>„Stream“</em> naujinimus, galite pasirinkti didesnę atnaujinimo dažnumo reikšmę, pvz., 2.';
$string['configrefreshuserlist'] = 'Kaip dažnai (sekundėmis) turėtų būti atnaujinamas naudotojų sąrašas?';
$string['configserverhost'] = 'Pagrindinio kompiuterio, kuriame yra serverio tarnyba, pavadinimas';
$string['configserverip'] = 'Skaitinis IP adresas, sutampantis su aukščiau pateiktu pagrindinio kompiuterio pavadinimu';
$string['configservermax'] = 'Maksimalus leidžiamas klientų skaičius';
$string['configserverport'] = 'Prievadas, naudotinas tarnybos serveryje';
$string['coursetheme'] = 'Kurso tema';
$string['crontask'] = 'Foninis apdorojimas pokalbių moduliui';
$string['currentchats'] = 'Aktyvūs pokalbių seansai';
$string['currentusers'] = 'Dabartiniai naudotojai';
$string['deletesession'] = 'Naikinti šį seansą';
$string['deletesessionsure'] = 'Ar tikrai norite naikinti šį seansą?';
$string['donotusechattime'] = 'Nepublikuoti jokių pokalbio laikų';
$string['enterchat'] = 'Įeiti į pokalbį';
$string['entermessage'] = 'Įveskite savo žinutę';
$string['errornousers'] = 'Nepavyko rasti jokių naudotojų!';
$string['eventmessagesent'] = 'Žinutė išsiųsta';
$string['eventsessionsviewed'] = 'Sesijos peržiūrėtos';
$string['explaingeneralconfig'] = 'Šie parametrai naudojami <strong>visada</strong>';
$string['explainmethoddaemon'] = 'Šie nustatymai galioja tik tuo atveju, jei kaip pokalbio metodas pasirinktas „Pokalbių serverio tarnyba“.';
$string['explainmethodnormal'] = 'Šie nustatymai galioja tik tada, kai kaip pokalbio būdas yra pasirinktas Įprastas.';
$string['generalconfig'] = 'Bendroji konfigūracija';
$string['idle'] = 'Neaktyvumo laikas';
$string['indicator:cognitivedepth'] = 'Kognityvinis pokalbis';
$string['indicator:cognitivedepth_help'] = 'Šis rodiklis pagrįstas pažinimo gyliu, kurį besimokantysis pasiekia Pokalbių veikloje.';
$string['indicator:cognitivedepthdef'] = 'Kognityvinis pokalbis';
$string['indicator:cognitivedepthdef_help'] = 'Dalyvis per šį analizės intervalą pasiekė šį Pokalbių veiklos siūlomą pažinimo įtraukimo procentą (Lygiai = Neperžiūrėta, Peržiūrėta, Pateikta, Peržiūrėtas atsiliepimas, Pakomentuotas atsiliepimas)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Socialinis pokalbis';
$string['indicator:socialbreadth_help'] = 'Šis rodiklis pagrįstas socialiniu plotu, kurį besimokantysis pasiekė Pokalbių veikloje.';
$string['indicator:socialbreadthdef'] = 'Socialinis pokalbis';
$string['indicator:socialbreadthdef_help'] = 'Dalyvis pasiekė šį socialinio įsitraukimo procentą, kurį siūlo pokalbių veikla per šį analizės intervalą (lygiai = nedalyvauta, dalyvis vienas, dalyvis su kitais)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Įvesties sritis';
$string['invalidid'] = 'Nepavyko rasti šio tiesioginio pokalbio!';
$string['list_all_sessions'] = 'Vardyti visus seansus.';
$string['list_complete_sessions'] = 'Vardyti tik baigtus seansus.';
$string['listing_all_sessions'] = 'Vardijami visi seansai';
$string['messagebeepseveryone'] = '{$a} pyptelėjo visiems!';
$string['messagebeepsyou'] = '{$a} ką tik pyptelėjo jums!';
$string['messageenter'] = '{$a} ką tik prisijungė prie šio pokalbio';
$string['messageexit'] = '{$a} ką tik paliko šį pokalbį';
$string['messages'] = 'Žinutės';
$string['messageyoubeep'] = 'Jūs pyptelėjote {$a}';
$string['method'] = 'Pokalbio metodas';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Pokalbių serverio tarnyba';
$string['methodnormal'] = 'Įprastas';
$string['modulename'] = 'Pokalbis';
$string['modulename_help'] = 'Pokalbių modulis leidžia dalyviams realiuoju laiku bendrauti žiniatinklyje. Tau naudingas būdas geriau suprasti vienas kitą ir aptariamą temą, nes tiesioginio pokalbio režimas gerokai skiriasi nuo nevienalaikių forumų.';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Pokalbiai';
$string['neverdeletemessages'] = 'Niekada nenaikinti žinučių';
$string['nextchattime'] = 'Kito pokalbio laikas:';
$string['no_complete_sessions_found'] = 'Baigtų seansų nerasta.';
$string['nochat'] = 'Pokalbių nerasta';
$string['noguests'] = 'Pokalbis nėra atviras svečiams';
$string['nomessages'] = 'Žinučių dar nėra';
$string['nopermissiontoseethechatlog'] = 'Neturite teisės peržiūrėti pokalbių žurnalų.';
$string['normalkeepalive'] = '„KeepAlive“';
$string['normalstream'] = '„Stream“';
$string['noscheduledsession'] = 'Nėra suplanuoto seanso';
$string['notallowenter'] = 'Jums neleidžiama prisijungti prie tiesioginio pokalbio.';
$string['notlogged'] = 'Esate neprisijungę!';
$string['oldping'] = 'Atsijungimo skirtasis laikas';
$string['page-mod-chat-x'] = 'Bet kuris pokalbių puslapis';
$string['pastchats'] = 'Ankstesni pokalbių seansai';
$string['pastsessions'] = 'Praėjusios sesijos';
$string['pluginadministration'] = 'Pokalbio administravimas';
$string['pluginname'] = 'Pokalbis';
$string['privacy:metadata:chat_messages_current'] = 'Dabartinė pokalbio sesija. Duomenys yra laikini ir bus pašalinti po pokalbio sesijos ištrynimo';
$string['privacy:metadata:chat_users'] = 'Stebi, kurie naudotojai yra pokalbių kambariuose';
$string['privacy:metadata:chat_users:firstping'] = 'Pirmosios prieigos į pokalbių kambarį laikas';
$string['privacy:metadata:chat_users:ip'] = 'Naudotojo IP';
$string['privacy:metadata:chat_users:lang'] = 'Naudotojo kalba';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Paskutinės žinutės laikas šiame kambaryje';
$string['privacy:metadata:chat_users:lastping'] = 'Paskutinio pokalbio kambaryje laikas';
$string['privacy:metadata:chat_users:userid'] = 'Naudotojo ID';
$string['privacy:metadata:chat_users:version'] = 'Kaip naudotojas pasiekė pokalbį (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Pokalbio sesijos metu išsiųstų pranešimų įrašas';
$string['privacy:metadata:messages:issystem'] = 'Ar pranešimas yra sistemos sukurtas pranešimas';
$string['privacy:metadata:messages:message'] = 'Žinutė';
$string['privacy:metadata:messages:timestamp'] = 'Laikas, kai žinutė išsiųsta.';
$string['privacy:metadata:messages:userid'] = 'Žinutės autoriaus naudotojo ID';
$string['refreshroom'] = 'Atnaujinti pokalbį';
$string['refreshuserlist'] = 'Atnaujinti naudotojų sąrašą';
$string['removemessages'] = 'Visos žinutės';
$string['repeatdaily'] = 'Tuo pat metu kiekvieną dieną';
$string['repeatnone'] = 'Nesikartoti – publikuoti tik nurodytą laiką';
$string['repeattimes'] = 'Kartoti seansus';
$string['repeatweekly'] = 'Tuo pat metu kiekvieną savaitę';
$string['saidto'] = 'pasakė';
$string['savemessages'] = 'Įrašyti ankstesnius seansus';
$string['search:activity'] = 'Pokalbis- veiklos informacija';
$string['seesession'] = 'Žr. šį seansą';
$string['send'] = 'Siųsti';
$string['sending'] = 'Siunčiama';
$string['serverhost'] = 'Serverio pavadinimas';
$string['serverip'] = 'Serverio IP';
$string['servermax'] = 'Didžiausias kiekis naudotojų';
$string['serverport'] = 'Serverio prievadas';
$string['sessions'] = 'Pokalbių seansai';
$string['sessionstartsin'] = 'Kitas pokalbio seansas prasidės {$a} nuo dabar.';
$string['strftimemessage'] = '%H:%M %p';
$string['studentseereports'] = 'Visi gali peržiūrėti ankstesnius seansus';
$string['studentseereports_help'] = 'Jei nustatyta Ne, pokalbių žurnalus gali peržiūrėti tik naudotojai, turinys galimybę mod/chat:readlog';
$string['talk'] = 'Kalbėti';
$string['updatemethod'] = 'Naujinimo metodas';
$string['updaterate'] = 'Naujinimo koeficientas:';
$string['userlist'] = 'Naudotojų sąrašas';
$string['usingchat'] = 'Pokalbio naudojimas';
$string['usingchat_help'] = 'Pokalbių modulyje yra funkcijų, dėl kurių pokalbiai tampa geresni. * Šypsniukai – bet kurie šypsniukai (jaustukai), kuriuose galite įvesti kitoje „Moodle“ vietoje, gali būti įvedami čia, pvz., :-) * Saitai – žiniatinklio adresai bus automatiškai paversti saitais * Įasmeninimas –  galite pradėti eilutę nuo /me arba :, kad parodytumėte savo emocinę būklę, pavyzdžiui, jei jūsų vardas yra Kim ir jūs įvedate :juokiasi! arba /me juokiasi!, kitiems naudotojams bus rodoma Kim juokiasi! * Pyptelėjimai – galite siųsti kitiems dalyviams garsą spustelėdami šalia jų vardo esantį saitą „pyp“. Norėdami „pyptelėti“ visiems pokalbio dalyviams tuo pat metu, įveskite „pyptelėti visiems". * HTML – jei žinote HTML kodų, galite juos naudoti savo tekste, kad, pvz., įterptumėte vaizdų, leistumėte garsų ar kurtumėte kitos spalvos tekstą';
$string['viewreport'] = 'Praėjusios sesijos';
