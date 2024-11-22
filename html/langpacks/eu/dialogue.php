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
 * Strings for component 'dialogue', language 'eu', version '4.1'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ekintzak';
$string['ago'] = 'pasa dira';
$string['attachment'] = 'Eranskina';
$string['attachments'] = 'Eranskinak';
$string['bulkopener'] = 'Multzoka hasteko';
$string['bulkopenrule'] = 'Multzoka hasteko erregela';
$string['bulkopenrulenotifymessage'] = '<strong>Oharra:</strong><br/>Multzoka hasteko erregela erabiliz gero, elkarrizketak ez dira berehala hasten, baizik eta sistemaren cron-a egikaritzen denean, hots, 30 minutuan behin normalean.';
$string['bulkopenrules'] = 'Multzoka hasteko erregelak';
$string['cachedef_params'] = 'Parametroak - erabiltzailearen interfazea';
$string['cachedef_participants'] = 'Partaideen IDak (oinarrizko informazioa)';
$string['cachedef_unreadcounts'] = 'Erabiltzaileek elkarrizketeta irakurri gabeko mezuen zenbaketan';
$string['cachedef_userdetails'] = 'Erabiltzaileen zehaztapen-laburbilduma, matrikulatutako erabiltzaile guztiak';
$string['cannotclosedraftconversation'] = 'Ezin duzu itxi oraindik hasi ez den elkarrizketa';
$string['cannotdeleteopenconversation'] = 'Ezin duzu itxi irekita dagoen elkarrizketa';
$string['closeconversation'] = 'Itxi elkarrizketa';
$string['closed'] = 'Itxita';
$string['completed'] = 'Osatuta';
$string['configmaxattachments'] = 'Mezu batean gehi daitekeen gehieneko eranskin-kopuru lehenetsia.';
$string['configmaxbytes'] = 'Guneko elkarrizketa guztietarako gehieneko tamaina lehenetsia (ikastaroen mugen eta ezarpen lokalen menpekoa)';
$string['configtrackunread'] = 'Egin irakurri gabeko mezuen jarraipena ikastaroko orri nagusian';
$string['configviewconversationsbyrole'] = 'Esperimentala: Ikusi elkarrizketak baimenen arabera. Jarri ordenan elkarrizketak egilearen baimenaren arabera zerrendatuz.';
$string['configviewstudentconversations'] = 'Esperimentala: ikasleen zerrenda parte hartzen ari direneko elkarrizketekin';
$string['conversation'] = 'Elkarrizketa';
$string['conversationcloseconfirm'] = 'Ziur zaude {$a} elkarrizketa itxi nahi duzula?';
$string['conversationclosed'] = '{$a} elkarrizketa itxi da';
$string['conversationdeleteconfirm'] = 'Ziur zaude {$a} elkarrizketa ezabatu nahi duzula? Geroago ezingo duzu desegin.';
$string['conversationdeleted'] = '{$a} elkarrizketa ezabatu da';
$string['conversationdiscarded'] = 'Elkarrizketa baztertu da';
$string['conversationlistdisplayheader'] = '{$a->show} {$a->state} elkarrizketak {$a->groupname} erakusten';
$string['conversationopened'] = 'Elkarrizketa hasi da';
$string['conversationopenedcron'] = 'Elkarrizketak automatikoki hasiko dira';
$string['conversationopenedwith'] = 'Erabiltzaile honekin elkarrizketa <strong>1</strong> hasi da:';
$string['conversations'] = 'Elkarrizketak';
$string['conversationsopenedwith'] = 'Erabiltzaile hauekin <strong>{$a}</strong> elkarrizketa hasi dira:';
$string['cutoffdate'] = 'Amaiera-data';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = 'egun';
$string['days'] = 'egun';
$string['deleteallconversations'] = 'Ezabatu elkarrizketa guztiak';
$string['deletealldrafts'] = 'Ezabatu zirriborro guztiak';
$string['deleteallrules'] = 'Ezabatu hasteko erregela guztiak';
$string['deleteconversation'] = 'Ezabatu elkarrizketa';
$string['deletereply'] = 'Ezabatu erantzuna';
$string['dialogue:addinstance'] = 'Gehitu elkarrizketa';
$string['dialogue:bulkopenrulecreate'] = 'Sortu multzoka hasteko erregela';
$string['dialogue:bulkopenruleeditany'] = 'Honek erabiltzaileak edozein erregela editatzea ahalbidetzen du, kudeatzaileentzat bereziki erabilgarria dena.';
$string['dialogue:close'] = 'Itxi elkarrizketa';
$string['dialogue:closeany'] = 'Itxi edozein';
$string['dialogue:delete'] = 'Ezabatu norberarena';
$string['dialogue:deleteany'] = 'Ezabatu edozein';
$string['dialogue:open'] = 'Zabaldu elkarrizketa';
$string['dialogue:receive'] = 'Jaso. Zein izan daitekeen jasotzailea elkarrizketa zabaldutakoan.';
$string['dialogue:reply'] = 'Erantzun';
$string['dialogue:replyany'] = 'Erantzun edozeini';
$string['dialogue:viewany'] = 'Ikusi guztiak';
$string['dialogue:viewbyrole'] = 'Ikusi elkarrizketak baimenen arabera zerrendatuta - Esperimentala';
$string['dialoguecron'] = 'Elkarrizketaren cron-a';
$string['dialogueintro'] = 'Elkarrizketaren aurkezpena';
$string['dialoguename'] = 'Elkarrizketaren izenburua';
$string['displaybystudent'] = 'Erakutsi ikasleen arabera ordenatuta';
$string['displayconversationsheading'] = '{$a} elkarrizketa erakusten';
$string['displaying'] = 'Erakusten';
$string['draft'] = 'Zirriborroa';
$string['draftconversation'] = 'Elkarrizketa-zirriborroa';
$string['draftconversationtrashed'] = 'Elkarrizketa-zirriborroa ezabatu da';
$string['draftlistdisplayheader'] = 'Nire zirriborroak erakusten';
$string['draftreply'] = 'Erantzun zirriborroari';
$string['draftreplytrashed'] = 'Zirriborroaren erantzuna ezabatu da';
$string['drafts'] = 'Zirriborroak';
$string['errorcutoffdateinpast'] = 'Amaiera-data ezin da iragana izan';
$string['erroremptymessage'] = 'Errorea: mezua hutsik.';
$string['erroremptysubject'] = 'Gaia ezin da hutsik egon';
$string['errornoparticipant'] = 'Elkarrizketa norbaitekin hasi behar duzu...';
$string['eventconversationclosed'] = 'Elkarrizketa itxi da';
$string['eventconversationcreated'] = 'Elkarrizketa sortu da';
$string['eventconversationdeleted'] = 'Elkarrizketa ezabatu da';
$string['eventconversationviewed'] = 'Elkarrizketa ikusi da';
$string['eventreplycreated'] = 'Erantzuna sortu da';
$string['everybody'] = 'Guztiak';
$string['everyone'] = 'Edonor';
$string['everyones'] = 'edonoren';
$string['firstname'] = 'Izena';
$string['fullname'] = 'Izen osoa';
$string['groupmodenotifymessage'] = 'Jarduera hau talde moduan dabil. Horrek bi gauza hauetan eragina izango du: elkarrizketa norekin hasi ahal izango duzun eta zer elkarrizketa erakutsiko zaizkizun.';
$string['hasnotrun'] = 'Oraindik ez da abiarazi';
$string['hour'] = 'ordua';
$string['hours'] = 'orduak';
$string['includefuturemembers'] = 'Hartu kontuan litezkeen partaideak';
$string['incompleteconversation'] = 'Elkarrizketa honetako jasotzailea aukeratu behar duzu, mesedez saiatu zaitez berriro.';
$string['ingroup'] = '{$a} taldean';
$string['justmy'] = 'nirea';
$string['lastname'] = 'Deitura';
$string['lastranon'] = 'Azkeneko aldiz abiarazia';
$string['latest'] = 'Azkena';
$string['listpaginationheader'] = '{$a->total}(e)tatik {$a->start}-{$a->end}';
$string['matchingpeople'] = 'Dagozkion pertsonak ({$a})';
$string['maxattachments'] = 'Gehieneko eranskin-kopurua';
$string['maxattachments_help'] = 'Ezarpen honek zehazten du mezu batean erants daitekeen gehieneko fitxategi-kopurua.';
$string['maxattachmentsize'] = 'Eranskinen gehieneko tamaina';
$string['maxattachmentsize_help'] = 'Ezarpen honek zehazten du mezu baten erants daitezkeen fitxategien gehieneko tamaina.';
$string['message'] = 'Mezua';
$string['messageapibasicmessage'] = '<p>{$a->userfrom}(e)k mezu berri bat gehitu du parte hartzen ari zaren elkarrizketa batean gai honekin: <i>{$a->subject}</i>
<br/><br/><a href="{$a->url}">Ikusi Moodlen.</a></p>';
$string['messageapismallmessage'] = '{$a}(e)k mezu berri bat gehitu du parte hartzen ari zaren elkarrizketa batean';
$string['messageprovider:post'] = 'Elkarrizketaren jakinarazpenak';
$string['messages'] = 'mezuak';
$string['mine'] = 'Nirea';
$string['minute'] = 'minutu';
$string['minutes'] = 'minutu';
$string['modulename'] = 'Elkarrizketa';
$string['modulename_help'] = 'Elkarrizketek ikasle edo irakasleei ahalbidetzen diete beste pertsona batekin norabide bikoitzeko elkarrizketak hasten. Ikastaroko jarduera hauek erabilgarriak izan daitezke irakasleak ikasleei feedback pribatua emateko lekua nahi duenean. Adibidez, ikasle bat foro batean parte hartzean akats gramatikala egin badu eta irakasleak lotsatu gabe jakinarazi nahi badio, elkarrizketa leku hobezina da. Elkarrizketa-jarduera orientatzaileak erakunde bateko ikasleekin harremanetan jartzeko modu bikaina ere bada. Jarduera osoa kautoturik egiten da eta helbide elektronikoa ez da derrigorrez eskatzen.';
$string['modulenameplural'] = 'Elkarrizketak';
$string['month'] = 'hilabete';
$string['months'] = 'hilabete';
$string['nobulkrulesfound'] = 'Ez da multzoko baimenik aurkitu!';
$string['noconversationsfound'] = 'Ez da aurkezpenik aurkitu!';
$string['nodraftsfound'] = 'Ez da zirriborrorik aurkitu!';
$string['nomatchingpeople'] = 'Inor ez dator bat honekin: \'{$a}\'';
$string['nopermissiontoclose'] = 'Ez duzu elkarrizketa hau ixteko baimenik!';
$string['nopermissiontodelete'] = 'Ez duzu ezabatzeko baimenik!';
$string['nosubject'] = '[gairik ez]';
$string['numberattachments'] = '{$a} eranskin';
$string['numberunread'] = '{$a} irakurri gabe';
$string['oldest'] = 'Zaharrena';
$string['onlydraftscanbetrashed'] = 'Bakarrik zirriborroak bota daitezke zakarrontzira';
$string['open'] = 'Zabaldu';
$string['openedbyfullyear'] = '<small></small> <strong>{$a->fullname}</strong>(e)k irekia <small>data honetan: </small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small></small> <strong>{$a->fullname}</strong>(e)k irekia <small>data honetan:</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small></small> <strong>{$a->fullname}</strong>(e)k irekia <small>ordu honetan: </small> {$a->time} <small>(duela {$a->timepast})</small>';
$string['openwith'] = 'Ireki honekin';
$string['participants'] = 'partaideak';
$string['people'] = 'Jendea';
$string['pluginadministration'] = 'Elkarrizketa-kudeaketa';
$string['pluginname'] = 'Elkarrizketa';
$string['privacy:metadata:authorid'] = 'Elkarrizketaren egilearen erabiltzaile-IDa';
$string['privacy:metadata:body'] = 'Elkarrizketaren testua';
$string['privacy:metadata:conversationid'] = 'Elkarrizketaren IDa';
$string['privacy:metadata:conversationindex'] = 'Elkarrizketaren indizea';
$string['privacy:metadata:dialogue_messages'] = 'Elkarrizketaren mezuak';
$string['privacy:metadata:dialogue_participants'] = 'Elkarrizketaren parte hartzaileak';
$string['privacy:metadata:dialogueflags'] = 'Elkarrizketaren markak';
$string['privacy:metadata:dialogueid'] = 'Elkarrizketaren IDa';
$string['privacy:metadata:flag'] = 'Marka';
$string['privacy:metadata:messageid'] = 'Mezuaren IDa';
$string['privacy:metadata:state'] = 'Egoera';
$string['privacy:metadata:timecreated'] = 'Sorrera unea';
$string['privacy:metadata:timemodified'] = 'Aldatze unea';
$string['privacy:metadata:userid'] = 'Erabiltzailearen IDa';
$string['repliedby'] = '<strong>{$a->fullname}</strong>(e)k <small>erantzun du</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong>(e)k <small>erantzun du data honetan: </small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong>(e)k <small>erantzun du data honetan</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong>(e)k erantzun du <small>ordu honetan </small> {$a->time} <small>(duela {$a->timepast})</small>';
$string['reply'] = 'Erantzun';
$string['replydeleteconfirm'] = 'Ziur zaude erantzun hau ezabatu nahi duzula?';
$string['replydeleted'] = 'Erantzuna ezabatu da';
$string['replysent'] = 'Zure erantzuna bidali da';
$string['runsuntil'] = 'Honaino martxan';
$string['savedraft'] = 'Gorde zirriborroa';
$string['search:activity'] = 'Elkarrizketa - jardueraren informazioa';
$string['search:conversations'] = 'Elkarrizketa - elkarrizketa eta mezuaren informazioa';
$string['searchpotentials'] = 'Bilatu hautagaiak...';
$string['second'] = 'segundo';
$string['seconds'] = 'segundo';
$string['send'] = 'Bidali';
$string['senton'] = '<small><strong>Noiz bidalia: </strong></small>';
$string['sortedby'] = 'Honen arabera ordenatuta: {$a}';
$string['studenttostudent'] = 'Ikasleak ikasleari';
$string['subject'] = 'Gaia';
$string['teachertostudent'] = 'Irakasleak ikasleari';
$string['trashdraft'] = 'Ezabatu zirriborroa';
$string['unread'] = 'Irakurri gabea';
$string['unreadmessages'] = 'Irakurri gabeko mezuak';
$string['unreadmessagesnumber'] = '{$a} mezu irakurri gabe';
$string['unreadmessagesone'] = 'Mezu 1 irakurri gabe';
$string['usecoursegroups'] = 'Erabili ikastaroko taldeak';
$string['usecoursegroups_help'] = 'Ikastaroan taldeak definitu badira elkarrizketa norekin ireki ahal izango den zehazteko murriztapena gehituko da. Elkarrizketak taldekideen artean bakarrik ireki daitezke, "Talde guztietara sarbidea" ezarpena gaitu ez bada.';
$string['usesearch'] = 'Erabili bilaketa elkarrizketa hasteko jendea aurkitzeko';
$string['viewconversations'] = 'Ikusi elkarrizketak';
$string['viewconversationsbyrole'] = 'Ikusi elkarrizketak baimenaren arabera';
$string['week'] = 'aste';
$string['weeks'] = 'aste';
$string['year'] = 'urte';
$string['years'] = 'urte';
