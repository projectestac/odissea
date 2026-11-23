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
 * Strings for component 'journal', language 'eu', version '4.5'.
 *
 * @package     journal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Sarbide ukatua';
$string['allentries'] = 'Sarrera guztiak';
$string['alwaysopen'] = 'Beti zabalik';
$string['blankentry'] = 'Sarrera hutsik';
$string['calendarclose'] = '{$a}(r)en itxiera-data';
$string['calendaropen'] = '{$a}(r)en hasiera-data';
$string['changessaved'] = 'Aldaketak gordeta';
$string['closebeforeopen'] = 'Itxiera-data hasiera-data baino beranduagokoa izan behar da.';
$string['completiondetail:completion_create_entry'] = 'Sortu egunkari-sarrera bat';
$string['couldnotupdatejournal'] = 'Ezin izan da zure egunkaria eguneratu';
$string['countnotinsertjournalentry'] = 'Ezin izan da egunkari-sarrera berria txertatu';
$string['crontask'] = 'Egunkaria moduluaren atzeko planoko prozesamendua';
$string['dateasc'] = 'Dataren arabera gorantz';
$string['datedesc'] = 'Dataren arabera beherantz';
$string['daysavailable'] = 'Zenbat egunetan eskuragarri';
$string['deadline'] = 'Zenbat egunetan zabalik';
$string['defaultgrade'] = 'Sarreren kalifikazio lehenetsia';
$string['defaultgrade_help'] = 'Egunkari-sarrera berrien lehenetsitako gehieneko kalifikazioa.
* Idatzi **100** (ala edozein zenbaki positibo) kalifikazioaren puntuazio lehenetsia zehazteko.
* Idatzi **0** modu lehenetsian "Puntuaziorik ez" zehazteko (erabilgarria jarduera formatiboentzako).';
$string['deleteentry'] = 'Ezabatu sarrera';
$string['deleteentryconfirm'] = 'Ezabatu {$a}(r)en sarrera? Bere feedbacka eta kalifikazioa ere ezabatuko dira. Ekintza honek ez du atzera bueltarik.';
$string['editingended'] = 'Editatzeko epea amaitu da';
$string['editingends'] = 'Editatzeko epea amaituko da';
$string['entries'] = 'Sarrerak';
$string['entry'] = 'Sarrera';
$string['entrydeleted'] = '{$a}(r)en sarrera ezabatua izan da.';
$string['entryxofy'] = '{$a->index}. sarrera guztirako {$a->count}(e)tatik';
$string['evententriesviewed'] = 'Egunkari-sarrerak ikusi dira';
$string['evententrycreated'] = 'Egunkari-sarrera sortu da';
$string['evententrydeleted'] = 'Egunkari-sarrera ezabatuta';
$string['evententryupdated'] = 'Egunkari-sarrera eguneratu da';
$string['eventfeedbackupdated'] = 'Egunkari-feedbacka eguneratu da';
$string['eventjournalcreated'] = 'Egunkaria sortu da';
$string['eventjournaldeleted'] = 'Egunkaria ezabatu da';
$string['eventjournalviewed'] = 'Egunkaria ikusi da';
$string['failedupdate'] = '{$a} erabiltzailearentzako egunkari-feedbacka eguneratzeak huts egin du';
$string['feedback'] = 'Feedbacka';
$string['feedbackupdated'] = 'Feedbacka eguneratu da {$a} sarreratan';
$string['feedbackupdatedforuser'] = 'Feedbacka eguneratuta {$a} erabiltzailearentzat';
$string['firstnameasc'] = 'Izenaren arabera gorantz';
$string['firstnamedesc'] = 'Izenaren arabera beherantz';
$string['grade'] = 'Kalifikazioa';
$string['gradedby'] = 'Kalifikatzailea';
$string['gradeingradebook'] = 'Oraingo kalifikazioa kalifikazio-liburuan';
$string['gradeonebyone'] = 'Kalifikatu banan banan';
$string['incorrectcmid'] = 'Ikastaro-moduluaren IDa baliogabea da';
$string['incorrectcourseid'] = 'Ikastaroaren IDa baliogabea da';
$string['incorrectcoursesectionid'] = 'Aukeratutako ikastaro-atala baliogabea da';
$string['incorrectjournalentry'] = 'Aukeratutako egunkari-sarrera baliogabea da';
$string['incorrectjournalid'] = 'Aukeratutako egunkariaren IDa baliogabea da';
$string['incorrectuserid'] = 'Aukeratutako erabiltzailearen IDa baliogabea da';
$string['journal:addentries'] = 'Gehitu egunkari-sarrerak';
$string['journal:addinstance'] = 'Gehitu egunkari berri bat';
$string['journal:deleteentries'] = 'Ezabatu egunkari-sarrerak';
$string['journal:manageentries'] = 'Kudeatu egunkari-sarrerak';
$string['journalclosed'] = 'Egunkari hau ez dago editatzeko irekita.';
$string['journalmail'] = 'Kaixo, {$a->student}

{$a->teacher}(e)k  \'{$a->journal}\' egunkariko zure sarrera bati buruzko feedbacka eman dizu.

Ikastaroa: {$a->course_name}
Egunkaria: {$a->journal}
Data: {$a->date}

Feedbackaren edukia hemen ikusi dezakezu:
    {$a->url}';
$string['journalmailhtml'] = '<p>Kaixo, {$a->student}</p>
<p>{$a->teacher}(e)k zure sarrera bati buruzko feedbacka eman dizu \'<strong>{$a->journal}</strong>\' egunkarian.</p>
<p>
    <strong>Ikastaroa:</strong> {$a->course_name}<br />
    <strong>Egunkaria:</strong> {$a->journal}<br />
    <strong>Data:</strong> {$a->date}
</p>
<p>Feedbackaren edukia <a href="{$a->url}">hemen</a> ikusi dezakezu.</p>';
$string['journalname'] = 'Egunkariaren izena';
$string['journalquestion'] = 'Egunkariaren galdera';
$string['lastedited'] = 'Azkenengoz editatua';
$string['lastnameasc'] = 'Abizenaren arabera gorantz';
$string['lastnamedesc'] = 'Abizenaren arabera beherantz';
$string['mailbody'] = '{$a->username}(e)k \'{$a->journalname}\' egunkariko sarrera eguneratu du.

Sarrera hemen ikusi dezakezu:
    {$a->url}';
$string['mailbodyhtml'] = '{$a->username}(e)k \'<i>{$a->journalname}</i>\' egunkariko sarrera eguneratu du.<br /><br />
Sarrera <a href="{$a->url}">hemen</a> ikusi dezakezu.';
$string['mailsubject'] = 'Egunkariaren feedbacka';
$string['maxbelowminwords'] = 'Gehieneko hitz kopurua gutxienez gutxieneko hitz kopuruaren berdina izan behar da.';
$string['maxwords'] = 'Gehieneko hitz kopurua';
$string['maxwords_help'] = 'Hitz kopuru honetatik gorako sarrerak ezin dira gorde. Txinera eta japonierako sarreretan, karaktereen ordez hitzak zenbatzen dira. 0 jarriz gero ez da mugarik zehazten.';
$string['messageprovider:journal_feedback'] = 'Egunkariaren irakaslearen feedbacka';
$string['messageprovider:reminder'] = 'Egunkaria itxi aurretiko jakinarazpena';
$string['messageprovider:submission'] = 'Egunkari-sarrera sortuta ala eguneratuta';
$string['minwords'] = 'Gutxieneko hitz kopurua';
$string['minwords_help'] = 'Hitz kopuru honetatik beherako sarrerak ezin dira gorde. Txinera eta japonierako sarreretan, karaktereen ordez hitzak zenbatzen dira. 0 jarriz gero ez da mugarik zehazten.';
$string['modulename'] = 'Egunkaria';
$string['modulename_help'] = '#### Funtzio nagusiak
* Ikasleen online testuzko sarrerak biltzen ditu feedbacka eman edota kalifikatuak izan daitezen
* Sarrerak pribatuak dira ikasle eta irakasleen artean (ikasle batek ezin du beste ikasleen sarrerarik ikusi)
* Irakasleek testu bidezko feedbacka eman eta sarrerak kalifikatu ahal dituzte
* Eskuragarritasun ezarpen bat dauka bidalketa epea zehaztu ahal izateko
* Irakasleei partaide guztien ala talde bateko kideen sarrera guztiak orri bakarrean erakusten dizkio berrikusketa eraginkorra izan dadin

#### Erabiltzeko moduak
* Idatzizko gogoeta laburrak ala ikaste-egunkariak esleitzea
* Etengabeko feedbacka eman eta ikasleen lana iterazio bidezko hobekuntzarako erabiltzea
* Ikasleak ikasgaiak laburtu ala irakurketak euren hitzen adieraztera bultzatzea
* Ikasleen aurrerapenaren jarraipena testuetan oinarritutako zeregin sinpleen bitartez egitea
* Irakasle eta ikasleen arteko ebaluazio formatiborako komunikazio pribatua erraztea';
$string['modulename_link'] = 'mod/journal/view';
$string['modulename_summary'] = 'Ikasleen online testu pribatuak biltzen ditu feedbacka eman edota kalifikatuak izan daitezen, eskuragarritasun-epe bat zehaztuta, eta fitxategi-igoerarik gabe.';
$string['modulenameplural'] = 'Egunkariak';
$string['needsgrading'] = 'Kalifikazioa behar du';
$string['needsgradingcount'] = 'Kalifikazioa behar du ({$a})';
$string['needsregrade'] = 'Sarrera aldatu da feedbacka gorde zen azken alditik.';
$string['negativewords'] = 'Hitz kopurua ezin da negatiboa izan.';
$string['newjournalentries'] = 'Egunkari-sarrera berriak';
$string['nextentry'] = 'Hurrengo sarrera';
$string['nodatachanged'] = 'Ez da daturik aldatu.';
$string['nodeadline'] = 'Betik zabalik';
$string['noentriesmanagers'] = 'Ez dago irakaslerik';
$string['noentriesneedgrading'] = 'Ez dago kalifikazioa behar duen sarrerarik.';
$string['noentry'] = 'Sarrerarik ez';
$string['nograde'] = 'Kalifikaziorik ez';
$string['noratinggiven'] = 'Ez da kalifikaziorik eman';
$string['notifystudents'] = 'Jakinarazi ikasleak';
$string['notifystudents_default'] = 'Jakinarazi ikasleak modu lehenetsian';
$string['notifystudents_default_help'] = 'Egunkari-jarduera berrietarako ezarpen lehenetsia.';
$string['notifystudents_help'] = 'Gaituz gero, ikasleek Moodleko mezularitza sistemaren bitartez jakinarazpen bat jasoko dute irakasle batek egunkari-sarrera baten gainean feedbacka ematen duenean.';
$string['notifyteachers'] = 'Jakinarazi irakasleak';
$string['notifyteachers_default'] = 'Jakinarazi irakasleak modu lehenetsian';
$string['notifyteachers_default_help'] = 'Egunkari-jarduera berrietarako ezarpen lehenetsia.';
$string['notifyteachers_help'] = 'Irakasleek Moodleko mezularitza sistemaren bitartez jakinarazpenak noiz jasoko duten zehazten du.

* Inoiz ez: irakasleek ez dute jakinarazpenik jasotzen.
* Sarrera batek kalifikazioa behar duenean: irakasleek jakinarazpenak jasotzen dituzte ikasle batek sarrera bat sortzen duenean eta kalifikatua izan ondoren ikasle batek sarrera bat editatzen duenean.
* Sarrera bat gordetzen den bakoitzean: irakasleek jakinarazpenak jasotzen dituzte ikasle batek sarrera bat sortu edo editatzen duenean.';
$string['notifyteachersalways'] = 'Sarrera bat gordetzen den bakoitzean';
$string['notifyteachersneedsgrading'] = 'Sarrera batek kalifikazioa behar duenean';
$string['notifyteachersnever'] = 'Inoiz ez';
$string['notopenuntil'] = 'Egunkaria ez da zabalduko ondoko datara arte:';
$string['notstarted'] = 'Oraindik ez duzu egunkari hau hasi';
$string['nousersyet'] = 'Oraindik ez dago erabiltzailerik';
$string['numchars'] = '{$a} karaktere';
$string['overallrating'] = 'Kalifikazio orokorrak';
$string['pluginadministration'] = 'Egunkariaren kudeaketa';
$string['pluginname'] = 'Egunkaria';
$string['previousentry'] = 'Aurreko sarrera';
$string['privacy:metadata:journal_entries'] = 'Egunkariko sarreraren erregistro bat';
$string['privacy:metadata:journal_entries:entrycomment'] = 'Erabiltzaileak egunkarian jasotako iruzkina';
$string['privacy:metadata:journal_entries:modified'] = 'Egunkariko sarreren hasierako denbora';
$string['privacy:metadata:journal_entries:rating'] = 'Erabiltzaileak egunkarian jasotako sailkapena';
$string['privacy:metadata:journal_entries:teacher'] = 'Irakasleak erabiltzaileari egunkarian feedbacka eman dio';
$string['privacy:metadata:journal_entries:text'] = 'Erabiltzaileak idatzitako testua';
$string['privacy:metadata:journal_entries:userid'] = 'Erabiltzailearen IDa';
$string['rate'] = 'Kalifikazioa';
$string['remindbefore'] = 'Jakinarazi ikasleei itxiera-data baino lehen';
$string['remindbefore_help'] = 'Sarrerarik idatzi ez duten ikasleei mezu bat bidaltzen zaie egunkaria itxi baino askoz lehenago. Itxiera-data aldatzen bada, berriro gogorarazten zaie.';
$string['reminderbody'] = '{$a->course} ikastaroko "{$a->journal}" egunkaria {$a->timeclose} ixten da, eta oraindik ez duzu sarrerarik idatzi. Hemen idatzi dezakezu: {$a->url}';
$string['reminderbodyhtml'] = '<p>{$a->course} ikastaroko <a href="{$a->url}">{$a->journal} egunkaria</a> {$a->timecloseixten da, eta oraindik ez duzu sarrerarik idatzi.</p>';
$string['remindersubject'] = 'Egunkaria laster itxiko da: {$a}';
$string['remindertask'] = 'Jakinarazi ikasleei egunkarien itxiera-data baino lehen';
$string['removeentries'] = 'Ezabatu sarrera guztiak';
$string['removemessages'] = 'Ezabatu egunkari-sarrera guztiak';
$string['saveallfeedback'] = 'Gorde nire feedback guztiak';
$string['savechanges'] = 'Gorde aldaketak';
$string['savefeedback'] = 'Gorde feedbacka';
$string['savefeedbackandnext'] = 'Gorde eta erakutsi hurrengoa';
$string['search:activity'] = 'Egunkaria - jarduera-informazioa';
$string['search:entry'] = 'Egunkaria - sarrerak';
$string['showrecentactivity'] = 'Erakutsi duela gutxiko aktibitatea';
$string['started'] = 'Egunkari hau hasi duzu';
$string['startoredit'] = 'Hasi edo editatu nire egunkari-sarrera';
$string['timeclose'] = 'Egunkariaren itxiera-data';
$string['timeopen'] = 'Egunkariaren irekitze-data';
$string['timeopen_help'] = 'Zehaztuz gero, ikasleek euren sarrera irekitze- eta itxiera-daten artean baino ezin dute editatu. Kasu horretan eskuragarri dauden egun kopurua ez da erabiliko.';
$string['toofewwords'] = 'Zure sarrerak {$a->count} hitz ditu, baina gutxienez {$a->limit} behar ditu.';
$string['toomanywords'] = 'Zure sarrerak {$a->count} hitz ditu, baina gehienez {$a->limit} behar ditu.';
$string['userswhocompletedthejournal'] = 'Egunkaria osatu duten erabiltzaileak';
$string['userswhodidnotcompletedthejournal'] = 'Egunkaria osatu ez duten erabiltzaileak';
$string['viewallentries'] = 'Ikusi {$a} egunkari-sarrera';
$string['viewentries'] = 'Ikusi sarrerak';
$string['wordlimit'] = 'Hitz kopurua';
$string['wordlimitmax'] = 'Gehienez {$a}';
$string['wordlimitmin'] = 'Gutxienez {$a}';
$string['wordlimitrange'] = '{$a->min} eta {$a->max} artean';
