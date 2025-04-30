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
 * Strings for component 'block_dedication', language 'eu', version '4.4'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Ikastaroaren izena';
$string['admin_filter_courseid_help'] = 'Iragazi txostena ikastaroaren izenaren arabera';
$string['admin_filter_form'] = 'Ikastaroaren dedikazioaren ezarpenak';
$string['admin_filter_form_help'] = 'Denbora-estimazioa Saioa eta Saioaren iraupen kontzeptuak erregistro-sarreretara aplikatuz egiten da.

<strong>Klik:</strong> Erabiltzaile batek Moodleko orri batean sartzen denean erregistro bat gordetzen da.

<strong>Saioa:</strong> Bi klik kontsekutibo edo gehiagoko multzoa, non kliken arteko denbora tarteak ez duen aurrez definituriko gehieneko denbora tartea gainditzen.

<strong>Saioaren iraupena:</strong> saio bateko lehen eta azken klikaren arteko denbora tartea.

<strong>Dedikatutako denbora:</strong> erabiltzaile baten saioen iraupenen batura.';
$string['admin_filter_form_text'] = 'Aukeratu epearen datak eta saio bereko kliken arteko gehieneko denbora.';
$string['admin_filter_maxtime'] = 'Epearen amaiera';
$string['admin_filter_maxtime_help'] = 'Soilik hartu kontuan data honetara arteko erregistroak';
$string['admin_filter_mintime'] = 'Epearen hasiera';
$string['admin_filter_mintime_help'] = 'Soilik hartu kontuan data honetatik aurrerako erregistroak';
$string['admin_filter_submit'] = 'Kalkulatu';
$string['allloglifetime'] = 'Mantendu saioaren historia tarte honetan:';
$string['averagetimespent'] = '<strong>Ikastaroan batez beste dedikatutako denbora:</strong> {$a}';
$string['cleanuptask'] = 'Saioaren historia garbitze ataza';
$string['collect_dedication'] = 'Bildu datuak dedikazio blokerako';
$string['configallloglifetime'] = 'Ezarpen honek saioaren iraupenaren gaineko informazioa gorde beharreko tartea zehazten du. Epe hau baino zaharragoak diren saioak automatikoki ezabatuko dira.';
$string['connectionratiorow'] = 'Konexioak eguneko';
$string['dedication:addinstance'] = 'Baimendu dedikazio blokea gehitzea';
$string['dedication:myaddinstance'] = 'Baimendu dedikazio blokea aginte-panelaren orrian gehitzea';
$string['dedication:viewreports'] = 'Baimendu dedikazio txostenak ikustea';
$string['dedicationall'] = 'Ikastaroko kide guztien dedikazioa. Klik egin izenean kide horren ikastaroko dedikazioaren xehetasunak ikusteko.';
$string['dedicationrow'] = 'Ikastaroan dedikatutako denbora';
$string['enrolmententity'] = 'Matrikulazioa';
$string['enrolmentmethod'] = 'Matrikulazio-metodoa';
$string['entity_dedication'] = 'Dedikazioa';
$string['excludesessionslessthan'] = 'Alde batera utzi {$a} baino saio laburragoak';
$string['group'] = 'Taldea';
$string['groupentity'] = 'Taldea';
$string['ignore_sessions_limit'] = 'Ez egin jaramonik saioaren mugari';
$string['ignore_sessions_limit_desc'] = 'Saio laburrak kentzen ditu, balio hau (minututan) baino laburragoak diren saioak ez dira kontuan hartuko dedikazio txostenean.';
$string['lastupdated'] = 'Azken eguneratzea: {$a}';
$string['period'] = '<em>{$a->mintime}</em> eta <em>{$a->maxtime}</em> arteko tartea';
$string['perioddiff'] = '<strong>Igarotako denbora:</strong> {$a}';
$string['pluginname'] = 'Dedikazioa';
$string['privacy:metadata'] = 'Dedikazio blokea pluginak erabiltzailek ikastaroetan dedikatutako denbora gordetzen du.';
$string['privacy:metadata:block_dedication:courseid'] = 'Erabiltzaile-dedikazioaren ikastaroaren IDa.';
$string['privacy:metadata:block_dedication:timespent'] = 'Ikastaroan dedikatutako denbora.';
$string['privacy:metadata:block_dedication:timestart'] = 'Datuak biltzen hasteko unea.';
$string['privacy:metadata:block_dedication:userid'] = 'Erabiltzaile-dedikazioaren erabiltzailearen IDa.';
$string['report_dedication'] = 'Dedikazio tresnaren txostena';
$string['report_timespent'] = 'Dedikatutako denboraren Txostena';
$string['session_limit'] = 'Saioaren muga';
$string['session_limit_desc'] = 'Saioaren muga txosten-orriko iragazkietarako';
$string['sessionduration'] = 'Saioaren iraupena';
$string['sessiondurationsum'] = 'Saioaren iraupena (batura)';
$string['sessionstart'] = 'Saioaren hasiera';
$string['showestimatedtime'] = 'Erakutsi erabiltzaileei dedikatutako denboraren estimazioa';
$string['showestimatedtime_help'] = 'Ezarpen honek erabiltzaileei euren dedikatutako denboraren estimazioa blokean ikustea baimentzen du.';
$string['timespent_estimation'] = 'Ikastaroan zuk dedikatutako denboraren estimazioa:';
$string['timespentincourse'] = 'Ikastaroan dedikatutako denbora';
$string['timespentreport'] = 'Txosten osoa';
$string['timespenttasknotrunning'] = 'Dedikatutako denbora kalkulatzeko ataza oraindik ez da exekutatu.';
$string['totaltimespent'] = '<strong>Ikastaroan guztira dedikatutako denbora:</strong> {$a}';
$string['user_dedication_datasource'] = 'Erabiltzaileen dedikazioa';
$string['userdedication'] = '<em>{$a}</em>(r)en ikastaroko dedikazioren zehaztasunak.';
$string['viewsessiondurationreport'] = 'Ikusi saioaren iraupenaren txostena';
