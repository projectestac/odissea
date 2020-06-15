<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'analytics', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analiza daitekeena ({$a->analysableid}) erabili gabe: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analiza daitekeena ({$a->analysableid}) ez da baliagarria helburu honetarako: {$a->result}';
$string['analysisinprogress'] = 'Oraindik aurreragoko exekuzio baten analisia egiten ari da';
$string['analytics'] = 'Analitikak';
$string['analyticslogstore'] = 'Analitiketarako erabilitako erregistroen biltegia';
$string['analyticslogstore_help'] = 'Analitiken APIak erabiltzaileen aktibitatea irakurtzeko erabiliko den agerraldi-biltegia';
$string['analyticssettings'] = 'Analitiken ezarpenak';
$string['coursetoolong'] = 'Ikastaroa luzeegia da';
$string['defaultpredictionsprocessor'] = 'Lehenetsitako aurreikuspen-prozesatzailea';
$string['defaultpredictoroption'] = 'Lehenetsitako prozesadorea ({$a})';
$string['disabledmodel'] = 'Desgaitutako eredua';
$string['enabledtimesplittings'] = 'Denbora banatzeko metodoak';
$string['erroralreadypredict'] = '{$a} fitxategia dagoeneko erabili da aurreikuspenak sortzeko.';
$string['errorcannotreaddataset'] = '{$a} datu-multzoaren fitxategia ezin da irakurri';
$string['errorcannotwritedataset'] = '{$a} datu-multzoaren fitxategia ezin da idatzi';
$string['errorendbeforestart'] = 'Amaiera-data ({$a}) ikastaroaren hasiera-data baino lehenagokoa da.';
$string['errorinvalidindicator'] = '{$a} adierazle baliogabea';
$string['errorinvalidtimesplitting'] = 'Denbora-banatze baliogabea; mesedez ziurtatu klasearen izen osoa gehitzen duzula.';
$string['errornoindicators'] = 'Eredu honek ez du adierazlerik.';
$string['errornopredictresults'] = 'Aurreikuspen-prozesatzaileak ez du emaitzarik lortu. Ikusi irteera-direktorioaren edukiak informazio gehiago eskuratzeko.';
$string['errornoroles'] = 'Ikasle edo irakasle rolak definitu gabe daude. Definitu itzazu analitiken ezarpenen orrian.';
$string['errornotarget'] = 'Eredu honek ez du helbururik.';
$string['errornotimesplittings'] = 'Eredu honek ez du denboraren zatiketa-metodorik.';
$string['errorpredictioncontextnotavailable'] = 'Aurreikuspenen testuingurua dagoeneko ez dago eskuragarri';
$string['errorpredictionformat'] = 'Aurreikuspen-kalkuluen formatu baliogabea';
$string['errorpredictionnotfound'] = 'Ez da aurreikuspena aurkitu';
$string['errorpredictionsprocessor'] = 'Aurreikuspen-prozesatzailearen errorea: {$a}';
$string['errorpredictwrongformat'] = 'Aurreikuspen-prozesatzaileak itzulitakoa ezin da deskodetu: "{$a}"';
$string['errorprocessornotready'] = 'Aukeratutako aurreikuspen-prozesatzailea ez dago oraindik prest: {$a}';
$string['errorsamplenotavailable'] = 'Aurreikusitako lagina dagoeneko ez dago eskuragarri';
$string['errorunexistingmodel'] = 'Existitzen ez den modeloa: {$a}';
$string['errorunexistingtimesplitting'] = 'Aukeratutako denboraren zatiketa-metodoa ez dago eskuragarri.';
$string['errorunknownaction'] = 'Ekintza ezezaguna';
$string['eventinsightsviewed'] = 'Pertzepzioak ikusi dira';
$string['eventpredictionactionstarted'] = 'Aurreikuspen-prozesua hasi da';
$string['fixedack'] = 'Onartua';
$string['insightinfomessage'] = 'Sistemak zuretzako pertzepzio batzuk sortu ditu: {$a}';
$string['insightinfomessagehtml'] = 'Sistemak zuretzako pertzepzio batzuk sortu ditu: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Pertzepzio berria "{$a->contextname}"-(e)rako: {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Ezin izan da analizatu {$a} denboraren zatiketa-metodoa erabilita.';
$string['invalidtimesplitting'] = '{$a} IDa duen ereduak denboraren zatiketa-metodo bat behar du trebatzeko erabilia izan baino lehen.';
$string['modeloutputdir'] = 'Modeloaren irteera-direktorioa';
$string['modeloutputdirinfo'] = 'Aurreikuspen-prozesatzaileek ebaluazio informazio guztia gordetzeko erabiliko duten direktorioa. Arazketarako eta ikerketarako baliagarria.';
$string['modeltimelimit'] = 'Analizatzeko denbora-muga modeloko';
$string['modeltimelimitinfo'] = 'Ezarpen honek modelo bakoitzak guneko edukiak analizatzen ematen duen denbora mugatzen du.';
$string['nocourses'] = 'Ez dago analizatzeko ikastarorik';
$string['nodata'] = 'Ez dago analizatzeko daturik';
$string['noevaluationbasedassumptions'] = 'Usteetan oinarritutako modeloak ezin dira ebaluatu.';
$string['noinsights'] = 'Ez da pertzepziorik aurkeztu';
$string['noinsightsmodel'] = 'Eredu honek ez du pertzepziorik sortzen';
$string['nonewdata'] = 'Ez dago datu berririk eskuragarri';
$string['nonewranges'] = 'Ez dago aurreikuspen berririk oraindik';
$string['nonewtimeranges'] = 'Ez dago denbora-tarterik; ez dago ezer aurreikusteko.';
$string['nopredictionsyet'] = 'Oraindik ez dago aurreikuspenik eskura';
$string['noranges'] = 'Ez dago aurreikuspenik oraindik';
$string['notrainingbasedassumptions'] = 'Usteetan oinarritutako modeloek ez dute trebakuntzarik behar';
$string['notuseful'] = 'Ez da erabilgarria';
$string['novaliddata'] = 'Ez dago datu baliagarririk eskura';
$string['novalidsamples'] = 'Ez dago lagin baliagarririk eskura';
$string['onlycli'] = 'Analitika-prozesuen exekuzioa soilik komando lerroaren bitartez';
$string['onlycliinfo'] = 'Ereduak ebaluatu, ikaste automatikoko algoritmoak trebatzea edo predikzioak lortzea bezalako analitiken prozesuek denbora eraman dezakete, cron zeregin gisa exekutatuko dira eta komando lerrotik behartu daitezke. Desgaitu ezarpen hau zure guneko kudeatzaileek prozesu hauek web bidezko interfazearen bidez exekutatzea ahalbidetu nahi baduzu.';
$string['predictionsprocessor'] = 'Aurreikuspen-prozesatzailea';
$string['predictionsprocessor_help'] = 'Aurreikuspen-prozesatzaile bat ikaste automatikoaren backend-a da, eta ereduen adierazleak eta helburuak sortutako datu-multzoak prozesatzen ditu. Eredu bakoitzak prozesatzaile ezberdina erabili dezake. Hemen zehaztutakoa lehenetsitako prozesatzailea izango da.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Adierazleen kalkuluak';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Testuingurua';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Kalkuluaren amaiera-data';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Indikatzaile-kalkulatzailearen mota';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Laginaren IDa';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Laginaren jatorrizko taula';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Kalkuluaren hasiera-data';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Aurreikuspena egin zeneko unea';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Kalkulatutako balioa';
$string['privacy:metadata:analytics:predictionactions'] = 'Aurreikuspenaren ekintzak';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Ekintzaren izena';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Aurreikuspenaren IDa';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Aurreikuspenaren ekintza egin zeneko unea';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Ekintza egin zuen erabiltzailea';
$string['privacy:metadata:analytics:predictions'] = 'Aurreikuspenak';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Adierazleen kalkuluak';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Testuingurua';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Ereduaren IDa';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Aurreikuspena';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Aurreikuspenaren emaitza';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Denboraren zatiketa-metodoaren indizea';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Laginaren IDa';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Aurreikuspena egin zeneko unea';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Kalkuluen amaiera-data';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Kalkuluen hasiera-data';
$string['processingsitecontents'] = 'Guneko edukiak prozesatzen';
$string['successfullyanalysed'] = 'Ondo analizatu da';
$string['timesplittingmethod'] = 'Denboraren zatiketa-metodoa';
$string['timesplittingmethod_help'] = 'Denbora-banatze metodoek ikastaroak zatitan banatzen dituzte; aurreikuspenen motorra zati bakoitza bukatzean jarriko da martxan. Soilik erabili nahi dituzun denbora-banatze metodoak gaitzea gomendatzen da. Ebaluazio prozesuak gaitutako denbora-tarte metodo guztiak erabiliko ditu, eta beraz denbora-banatze metodo gehiago erabiltzeak ebaluazio-prozesua moteltzea ekarriko du.';
$string['viewprediction'] = 'Ikusi aurreikuspenaren xehetasunak';
