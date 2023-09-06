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
 * Strings for component 'workshopallocation_scheduled', language 'eu', version '4.1'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Esleipen programatuaren atzeko planoko prozesatzea';
$string['currentstatus'] = 'Oraingo egoera';
$string['currentstatusexecution'] = 'Egoera';
$string['currentstatusexecution1'] = 'Exekuzio denbora: {$a->datetime}';
$string['currentstatusexecution2'] = 'Berriz exekutatzeko data: {$a->datetime}';
$string['currentstatusexecution3'] = 'Exekutatzeko data: {$a->datetime}';
$string['currentstatusexecution4'] = 'Exekuzioaren zain';
$string['currentstatusnext'] = 'Hurrengo exekuzioa';
$string['currentstatusnext_help'] = 'Batzuetan esleipena automatikoki berriz exekutatzeko programatzen da aurretik exekutatu bada ere. Hau bidalketak egiteko epea luzatu izanagatik gertatu daiteke, adibidez.';
$string['currentstatusreset'] = 'Berrabiarazi';
$string['currentstatusreset_help'] = 'Aukera hau markaturik formulario gordez gero oraingo egoera berrabiaraziko da. Aurreko exekuzioaren inguruko informazio guztia ezabatuko da esleipena berriz exekutatzeko (goian gaituz gero).';
$string['currentstatusresetinfo'] = 'Markatu eta formularioa gorde laukitxoa exekuzioaren emaitza berrabiarazteko.';
$string['currentstatusresult'] = 'Duela gutxiko exekuzioaren emaitza';
$string['enablescheduled'] = 'Gaitu esleipen programatua.';
$string['enablescheduledinfo'] = 'Programatu bidalketen esleipena bidalketa-fasea amaitzean automatikoki egiteko';
$string['pluginname'] = 'Esleipen programatua';
$string['privacy:metadata'] = 'Esleipen programatua pluginak ez du datu pertsonalik biltzen. Ebaluatuko duen pertsonaren datuak Tailerra moduluak berak gordetzen du eta horiek dira ebaluaziorako xehetasunak esportatzeko oinarria.';
$string['randomallocationsettings'] = 'Esleipenaren ezarpenak';
$string['randomallocationsettings_help'] = 'Hemen ausazko esleipenerako parametroak aukeratzen dira. Ausazko esleipenerako gehigarriak parametro hauek oraingo bidalketen esleipenerako erabiliko ditu.';
$string['resultdisabled'] = 'Esleipen programatua desgaituta';
$string['resultenabled'] = 'Esleipen programatua gaituta';
$string['resultexecuted'] = 'Ondo';
$string['resultfailed'] = 'Ezin izan dira bidalketak automatikoki esleitu';
$string['resultfailedconfig'] = 'Esleipen programatua gaizki konfiguraturik dago';
$string['resultfaileddeadline'] = 'Tailerrak ez du bidalketetarako amaiera-datarik zehaztuta.';
$string['resultfailedphase'] = 'Tailerra ez dago bidalketa-fasean';
$string['resultvoid'] = 'Ez dago esleitutako bidalketarik';
$string['resultvoiddeadline'] = 'Ez da bidalketa-faseko epea oraindik amaitu.';
$string['resultvoidexecuted'] = 'Esleipena exekutatu da jada.';
$string['scheduledallocationsettings'] = 'Esleipen programatuaren ezarpenak';
$string['scheduledallocationsettings_help'] = 'Esleipen programatua gaituz gero honek bidalketa-fasea amaitzean bidalketak ebaluatzeko automatikoki esleituko ditu. Fasearen amaiera tailerraren ezarpenen "Bidalketetarako amaiera-data" atalean zehaztu daiteke.

Barrutik, ausazko esleipena formulario honetan zehaztutako parametroak erabilita exekutatzen da. Honek esan nahi du, beraz, esleipen programatuak irakasleak bidalketa fasea amaitzean ausazko esleipena beheko ezarpenak erabiliz egingo balu bezala funtzionatzen duela.

Kontuan izan esleipen programatua *ez* dela exekutatzen irakasleak eskuz tailerraren fasea bidalketetarako amaiera-data baino lehen ebaluazio-fasera aldatzen badu. Kasu horretan irakasleak esleipena bere kabuz egin beharko du. Esleipen programatua bereziki erabilgarria da fasea automatikoki aldatzeko funtzioarekin batera erabiltzen denean.';
$string['setup'] = 'Prestatu esleipen programatua';
