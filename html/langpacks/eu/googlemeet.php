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
 * Strings for component 'googlemeet', language 'eu', version '4.1'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkweekdays'] = 'Aukeratu data-tartearen barruko asteko egunak.';
$string['date'] = 'Data';
$string['duration'] = 'Iraupena';
$string['earlierto'] = 'Ekitaldiaren data ezin da ikastaroaren hasiera-data baino lehenagokoa izan ({$a}).';
$string['emailcontent'] = 'E-mailaren edukia';
$string['emailcontent_default'] = '<p>Kaixo %userfirstname%,</p>
<p>Jakinarazpen honen bitartez %coursename% ikastaroan Google Meet ekitaldi bat izango dela gogorarazten dizugu</p>
<p><b>%googlemeetname%</b></p>
<p>Noiz: %eventdate% %duration% %timezone%</p>
<p>Sarbiderako esteka: %url%</p>';
$string['emailcontent_help'] = 'Ikasleei jakinarazpen bat bidaltzen zaienean, edukia eremu honetatik hartzen da. Hurrengo hitz-gakoak erabili daitezke:
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Sartu bilera-gelan';
$string['eventdate'] = 'Ekitaldiaren data';
$string['from'] = 'noiztik';
$string['googlemeet:addinstance'] = 'Gehitu Moodlerako Google Meet™ berri bat';
$string['googlemeet:editrecording'] = 'Editatu grabazioak';
$string['googlemeet:removerecording'] = 'Ezabatu grabazioak';
$string['googlemeet:syncgoogledrive'] = 'Sinkronizatu Google Drive-kin';
$string['googlemeet:view'] = 'Ikusi Moodlerako Google Meet™-aren edukia';
$string['hide'] = 'Ezkutatu';
$string['invalideventenddate'] = 'Data hau ezin da "Ekitaldiaren data" baino lehenagokoa izan';
$string['invalideventendtime'] = 'Amaiera-data ezin da hasiera-data baino lehenagokoa izan';
$string['invalidstoredurl'] = 'Ezin da baliabide hau erakutsi, Google Meet-eko URLa ez da baliozkoa.';
$string['jstableinfo'] = '{rows} grabazioen {start}(e)tik {end}(e)ra erakusten ari dira';
$string['jstableinfofiltered'] = '{rows} grabazioen {start}(e)tik {end}(e)ra erakusten ari dira (guztirako {rowsTotal} grabazioetatik iragazita)';
$string['jstableloading'] = 'Kargatzen...';
$string['jstablenorows'] = 'Ez da grabaziorik aurkitu';
$string['jstableperpage'] = '{select} grabazio orriko';
$string['jstablesearch'] = 'Bilatu...';
$string['lastsync'] = 'Azken sinkronizazioa:';
$string['loading'] = 'Kargatzen';
$string['messageprovider:notification'] = 'Google Meet ekitaldi-hasieraren ohartarazpena';
$string['minutesbefore'] = 'Zenbat minutu lehenago';
$string['minutesbefore_help'] = 'Ekitaldia hasi baino zenbat minutu lehenago bidali beharko den jakinarazpena.';
$string['modulename'] = 'Google Meet™ Moodlerako';
$string['modulename_help'] = 'Moodlerako Google Meet™ moduluak irakasleei Google Meet bilera-gelak ikastaroko baliabide gisa sortzea eta bileraren ondoren Google Driven gordetako grabazioak ikasleei eskuragarri jartzea ahalbidetzen die..
<p>©2018 Google LLC All rights reserved.<br/>
Google Meet and the Google Meet logo are registered trademarks of Google LLC.</p>';
$string['modulenameplural'] = 'Moodlerako Google Meet™ instantziak';
$string['multieventdateexpanded'] = 'Ekitaldi-data errepikakorra zabalduta';
$string['multieventdateexpanded_desc'] = 'Erakutsi "Ekitaldi-data errepikakorra" ezarpena zabalduta modu lehenetsian bilera-gela berria sortzerakoan.';
$string['name'] = 'Izena';
$string['never'] = 'Inoiz ez';
$string['notification'] = 'Jakinarazpena';
$string['notificationexpanded'] = 'Jakinarazpena zabalduta';
$string['notify'] = 'Bidali jakinarazpena ikasleei';
$string['notify_help'] = 'Markatuz gero, ikasleei ekitaldiaren hasiera-dataren hasierari buruzko jakinarazpena bidaliko zaie.';
$string['notifycationexpanded_desc'] = 'Erakutsi zabalduta "Jakinarazpena" ezarpena modu lehenetsian bilera-gela berri bat sortzerakoan.';
$string['notifytask'] = 'Moodlerako Google Meet™-erako jakinarazpen-ataza';
$string['or'] = 'edo';
$string['play'] = 'Erreproduzitu';
$string['pluginadministration'] = 'Moodlerako Google Meet™-en kudeaketa';
$string['pluginname'] = 'Google Meet™ Moodlerako';
$string['privacy:metadata:googlemeet_notify_done'] = 'Ekitaldiaren hasierari buruz ikasleei bidalitako jakinarazpenak gordetzen ditu. Data hau behin-behinekoa da eta ekitaldi-hasieraren ondoren ezabatzen da.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'Ekitaldiaren IDa';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Erabiltzaileak jakinarazpena jaso zueneko unea';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'Erabiltzailearen IDa';
$string['recording'] = 'Grabazioa';
$string['recordings'] = 'Grabazioak';
$string['recordingswiththename'] = 'Izenarekin bat egiten duten grabazioak:';
$string['recurrenceeventdate'] = 'Ekitaldi-data errepikakorra';
$string['recurrenceeventdate_help'] = 'Funtzio honek ekitaldiaren saio errepikakorrak sortzea ahalbidetzen du.
<br>* <strong>Errepikatze-egunak</strong>: Aukeratu zure klasea elkartuko den asteko egunak (esaterako Astelehena / Asteazkena / Ostirala).
<br>* <strong>Errepikatze-maiztasuna</strong>: Hemen maiztasuna zehaztu dezakezu. Zure klasea astero elkartzen bada 1 aukeratu ezazu, bi astean behin elkartzen bada 2, 3 astean behin elkartzen bada 3...
<br>* <strong>Errepikatze-amaiera</strong>: Aukeratu saio errepikakorraren azken eguna (saio errepikakorra emango den azken aldia).';
$string['repeatasfollows'] = 'Errepikatu ekitaldiaren datak hurrengo balioen arabera';
$string['repeatevery'] = 'Errepikatze-maiztasuna';
$string['repeaton'] = 'Errepikatze-egunak';
$string['repeatuntil'] = 'Errepikatze-amaiera';
$string['roomcreator'] = 'Bilera-gelaren sortzailea:';
$string['roomname'] = 'Bilera-gelaren izena';
$string['roomurl'] = 'Bilera-gelaren URLa';
$string['roomurlexpanded'] = 'Bilera-gelaren URLa zabalduta';
$string['roomurlexpanded_desc'] = 'Erakutsi "Bilera-gelaren URLa" zbaalduta modu lehenetsian bilera-gela berria sortzerakoan.';
$string['show'] = 'Erakutsi';
$string['strftimedm'] = '%a. %d %b.';
$string['strftimedmy'] = '%a. %d %b. %Y';
$string['strftimedmyhm'] = '%a. %d %b. %Y %H:%M';
$string['strftimehm'] = '%H:%M';
$string['syncwithgoogledrive'] = 'Sinkronizatu Google Drive-kin';
$string['thereisnorecordingtoshow'] = 'Ez dago grabaziorik erakusteko.';
$string['timeahead'] = 'Ezin da sortu urte bat baino gehiagoko saio errepikakorrak, egokitu itzazu hasiera eta amaiera-datak.';
$string['timedate'] = '%d/%m/%Y %H:%M';
$string['to'] = 'noiz arte';
$string['today'] = 'Gaur';
$string['upcomingevents'] = 'Datozen ekitaldiak';
$string['url_failed'] = 'Google Meet URL baliagarri bat behar da';
$string['visible'] = 'Ikusgai';
$string['week'] = 'Aste';
