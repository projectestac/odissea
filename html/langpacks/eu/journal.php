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
$string['alwaysopen'] = 'Beti zabalik';
$string['blankentry'] = 'Sarrera hutsik';
$string['completiondetail:completion_create_entry'] = 'Sortu egunkari-sarrera bat';
$string['couldnotupdatejournal'] = 'Ezin izan da zure egunkaria eguneratu';
$string['countnotinsertjournalentry'] = 'Ezin izan da egunkari-sarrera berria txertatu';
$string['crontask'] = 'Egunkaria moduluaren atzeko planoko prozesamendua';
$string['dateasc'] = 'Dataren arabera Gorantz';
$string['datedesc'] = 'Dataren arabera Beherantz';
$string['daysavailable'] = 'Zenbat egunetan eskuragarri';
$string['deadline'] = 'Zenbat egunetan zabalik';
$string['defaultgrade'] = 'Sarreren kalifikazio lehenetsia';
$string['defaultgrade_help'] = 'Egunkari-sarrera berrien lehenetsitako gehieneko kalifikazioa.
* Idatzi **100** (ala edozein zenbaki positibo) kalifikazioaren puntuazio lehenetsia zehazteko.
* Idatzi **0** modu lehenetsian "Puntuaziorik ez" zehazteko (erabilgarria jarduera formatiboentzako).';
$string['editingended'] = 'Editatzeko epea amaitu da';
$string['editingends'] = 'Editatzeko epea amaituko da';
$string['entries'] = 'Sarrerak';
$string['entry'] = 'Sarrera';
$string['evententriesviewed'] = 'Egunkari-sarrerak ikusi dira';
$string['evententrycreated'] = 'Egunkari-sarrera sortu da';
$string['evententryupdated'] = 'Egunkari-sarrera eguneratu da';
$string['eventfeedbackupdated'] = 'Egunkari-feedbacka eguneratu da';
$string['eventjournalcreated'] = 'Egunkaria sortu da';
$string['eventjournaldeleted'] = 'Egunkaria ezabatu da';
$string['eventjournalviewed'] = 'Egunkaria ikusi da';
$string['failedupdate'] = '{$a} erabiltzailearentzako egunkari-feedbacka eguneratzeak huts egin du';
$string['feedbackupdated'] = 'Feedbacka eguneratu da {$a} sarreratan';
$string['feedbackupdatedforuser'] = 'Feedbacka eguneratuta {$a} erabiltzailearentzat';
$string['firstnameasc'] = 'Izenaren arabera Gorantz';
$string['firstnamedesc'] = 'Izenaren arabera Beherantz';
$string['gradeingradebook'] = 'Oraingo kalifikazioa kalifikazio-liburuan';
$string['incorrectcmid'] = 'Ikastaro-moduluaren IDa baliogabea da';
$string['incorrectcourseid'] = 'Ikastaroaren IDa baliogabea da';
$string['incorrectcoursesectionid'] = 'Aukeratutako ikastaro-atala baliogabea da';
$string['incorrectjournalentry'] = 'Aukeratutako egunkari-sarrera baliogabea da';
$string['incorrectjournalid'] = 'Aukeratutako egunkariaren IDa baliogabea da';
$string['incorrectuserid'] = 'Aukeratutako erabiltzailearen IDa baliogabea da';
$string['journal:addentries'] = 'Gehitu egunkari-sarrerak';
$string['journal:addinstance'] = 'Gehitu egunkari berri bat';
$string['journal:manageentries'] = 'Kudeatu egunkari-sarrerak';
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
$string['lastnameasc'] = 'Abizenaren arabera Gorantz';
$string['lastnamedesc'] = 'Abizenaren arabera Beherantz';
$string['mailbody'] = '{$a->username}(e)k \'{$a->journalname}\' egunkariko sarrera eguneratu du.

Sarrera hemen ikusi dezakezu:
    {$a->url}';
$string['mailbodyhtml'] = '{$a->username}(e)k \'<i>{$a->journalname}</i>\' egunkariko sarrera eguneratu du.<br /><br />
Sarrera <a href="{$a->url}">hemen</a> ikusi dezakezu.';
$string['mailsubject'] = 'Egunkariaren feedbacka';
$string['messageprovider:journal_feedback'] = 'Egunkariaren irakaslearen feedbacka';
$string['messageprovider:submission'] = 'Egunkari-sarrera sortuta ala eguneratuta';
$string['modulename'] = 'Egunkaria';
$string['modulename_help'] = 'Egunkariak irakasleak ikasleengandik gai jakin bati buruzko feedbacka lortzea ahalbidetzen du';
$string['modulename_link'] = 'mod/journal/view';
$string['modulenameplural'] = 'Egunkariak';
$string['needsregrade'] = 'Sarrera aldatu da feedbacka gorde zen azken alditik.';
$string['newjournalentries'] = 'Egunkari-sarrera berriak';
$string['nodatachanged'] = 'Ez da daturik aldatu.';
$string['nodeadline'] = 'Betik zabalik';
$string['noentriesmanagers'] = 'Ez dago irakaslerik';
$string['noentry'] = 'Sarrerarik ez';
$string['noratinggiven'] = 'Ez da kalifikaziorik eman';
$string['notifystudents'] = 'Jakinarazi ikasleak';
$string['notifystudents_default'] = 'Jakinarazi ikasleak modu lehenetsian';
$string['notifystudents_default_help'] = 'Egunkari-jarduera berrietarako ezarpen lehenetsia.';
$string['notifystudents_help'] = 'Gaituz gero, ikasleek Moodleko mezularitza sistemaren bitartez jakinarazpen bat jasoko dute irakasle batek egunkari-sarrera baten gainean feedbacka ematen duenean.';
$string['notifyteachers'] = 'Jakinarazi irakasleak';
$string['notifyteachers_default'] = 'Jakinarazi irakasleak modu lehenetsian';
$string['notifyteachers_default_help'] = 'Egunkari-jarduera berrietarako ezarpen lehenetsia.';
$string['notifyteachers_help'] = 'Gaituz gero, irakasleek Moodleko mezularitza sistemaren bitartez jakinarazpen bat jasoko dute ikasle batek egunkari-sarrera bat sortu ala eguneratzen duenean.';
$string['notopenuntil'] = 'Egunkaria ez da zabalduko ondoko datara arte:';
$string['notstarted'] = 'Oraindik ez duzu egunkari hau hasi';
$string['numchars'] = '{$a} karaktere';
$string['overallrating'] = 'Kalifikazio orokorrak';
$string['pluginadministration'] = 'Egunkariaren kudeaketa';
$string['pluginname'] = 'Egunkaria';
$string['privacy:metadata:journal_entries'] = 'Egunkariko sarreraren erregistro bat';
$string['privacy:metadata:journal_entries:entrycomment'] = 'Erabiltzaileak egunkarian jasotako iruzkina';
$string['privacy:metadata:journal_entries:modified'] = 'Egunkariko sarreren hasierako denbora';
$string['privacy:metadata:journal_entries:rating'] = 'Erabiltzaileak egunkarian jasotako sailkapena';
$string['privacy:metadata:journal_entries:teacher'] = 'Irakasleak erabiltzaileari egunkarian feedbacka eman dio';
$string['privacy:metadata:journal_entries:text'] = 'Erabiltzaileak idatzitako testua';
$string['privacy:metadata:journal_entries:userid'] = 'Erabiltzailearen IDa';
$string['rate'] = 'Kalifikazioa';
$string['removeentries'] = 'Ezabatu sarrera guztiak';
$string['removemessages'] = 'Ezabatu egunkari-sarrera guztiak';
$string['saveallfeedback'] = 'Gorde nire feedback guztiak';
$string['savefeedback'] = 'Gorde feedbacka';
$string['search:activity'] = 'Egunkaria - jarduera-informazioa';
$string['search:entry'] = 'Egunkaria - sarrerak';
$string['showoverview'] = 'Erakutsi egunkarien ikuspegi orokorra aginte-panelean';
$string['showrecentactivity'] = 'Erakutsi duela gutxiko aktibitatea';
$string['startoredit'] = 'Hasi edo editatu nire egunkari-sarrera';
$string['userswhocompletedthejournal'] = 'Egunkaria osatu duten erabiltzaileak';
$string['userswhodidnotcompletedthejournal'] = 'Egunkaria osatu ez duten erabiltzaileak';
$string['viewallentries'] = 'Ikusi {$a} egunkari-sarrera';
$string['viewentries'] = 'Ikusi sarrerak';
