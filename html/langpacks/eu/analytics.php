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
 * Strings for component 'analytics', language 'eu', version '4.5'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analiza daitekeena ({$a->analysableid}) erabili gabe: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analiza daitekeena ({$a->analysableid}) ez da baliagarria helburu honetarako: {$a->result}';
$string['analysisinprogress'] = 'Oraindik aurreragoko exekuzio baten analisia egiten ari da';
$string['analytics'] = 'Analitikak';
$string['analyticsdisabled'] = 'Analitikak desgaituta daude. "Gunearen Kudeaketa > Funtzio aurreratuak" atalean gaitu ditzakezu.';
$string['analyticslogstore'] = 'Analitiketarako erabilitako agerraldi-biltegia';
$string['analyticslogstore_help'] = 'Analitiken APIak erabiltzaileen aktibitatea irakurtzeko erabiliko den agerraldi-biltegia.';
$string['analyticssettings'] = 'Analitiken ezarpenak';
$string['analyticssiteinfo'] = 'Gune-informazioa';
$string['calclifetime'] = 'Mantendu analitiken kalkuluak epe honetan:';
$string['configlcalclifetime'] = 'Ezarpen honek kalkuluen datuak mantendu beharreko epea zehazten du - honek ez ditu aurreikuspenak ezabatuko, aurreikuspenak sortzeko erabilitako datuak baizik. Hemen lehenetsitako aukera erabiltzea gomendatzen da disko-erabilera kontrolpean mantentzen duelako, baina kalkuluen taulak beste erabilera batzuetarako ere erabiltzen ari bazara agian balio hau handitzea nahiko duzu.';
$string['defaultpredictionsprocessor'] = 'Lehenetsitako aurreikuspen-prozesatzailea';
$string['defaultpredictoroption'] = 'Lehenetsitako prozesatzailea ({$a})';
$string['defaulttimesplittingmethods'] = 'Ereduen ebaluazioen analisi-tarte lehenetsiak';
$string['defaulttimesplittingmethods_help'] = 'Analisi-tarteak zehazten du sistemak aurreikuspenak noiz kalkulatuko dituen eta zein izango den aurreikuspen horiek egiteko erabiliko diren jarduera-erregistroen zatia. Ereduaren ebaluazio-prozesuak analisi-tarte hauen arabera jokatuko du analisi-tarte bereizia zehazten ez bada.';
$string['disabledmodel'] = 'Desgaitutako eredua';
$string['erroralreadypredict'] = '{$a} fitxategia dagoeneko erabili da aurreikuspenak sortzeko.';
$string['errorcannotreaddataset'] = '{$a} datu-multzoaren fitxategia ezin da irakurri.';
$string['errorcannotusetimesplitting'] = 'Eredu honetan ezin da emandako analisi-tartea erabili.';
$string['errorcannotwritedataset'] = '{$a} datu-multzoaren fitxategia ezin da idatzi.';
$string['errorexportmodelresult'] = 'Ikaste automatikoaren eredua ezin da esportatu.';
$string['errorimport'] = 'Errorea gertatu da JSON fitxategia inportatzerakoan.';
$string['errorimportmissingclasses'] = 'Analitiken hurrengo osagaiak ez daude eskuragarri gune honetan: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Emandako ereduak hurrengo pluginak instalatzea behar du: {$a}. Kontuan izan bertsioek ez dutela zertan zure sisteman instalatutako bertsioarekin bat etorri behar. Pluginaren bertsio bera edo berriagoa instalatzeak normalean ez luke arazorik eman beharko.';
$string['errorimportversionmismatches'] = 'Hurrengo osagaien bertsioak ez datoz bat gune honetan instalatutakoekin: {$a}. \'Ez hartu kontuan bertsio-ezberdintasunak\' aukera erabili dezakezu ezberdintasun hauei ez ikusiarena egiteko.';
$string['errorinvalidcontexts'] = 'Aukeratutako testuinguruetako batzuk ezin dira helburu honetan erabili.';
$string['errorinvalidindicator'] = '{$a} adierazle baliogabea';
$string['errorinvalidtarget'] = '{$a} helburu baliogabea';
$string['errorinvalidtimesplitting'] = 'Analisi-tarte baliogabea; mesedez ziurtatu klasearen izen osoa gehitzen duzula.';
$string['errornocontextrestrictions'] = 'Aukeratutako helburuak ez du testuinguruetako murrizketarik onartzen';
$string['errornoexportconfig'] = 'Arazo bat egon da ereduaren ezarpenak esportatzerakoan.';
$string['errornoexportconfigrequirements'] = 'Soilik estatikoak ez diren eta analisi-tarteak dituzten ereduak esporta daitezke.';
$string['errornoindicators'] = 'Eredu honek ez du adierazlerik.';
$string['errornopredictresults'] = 'Aurreikuspen-prozesatzaileak ez du emaitzarik lortu. Ikusi irteera-direktorioaren edukiak informazio gehiago eskuratzeko.';
$string['errornoroles'] = 'Ikasle edo irakasle rolak definitu gabe daude. Definitu itzazu analitiken ezarpenen orrian.';
$string['errornotarget'] = 'Eredu honek ez du helbururik.';
$string['errornotimesplittings'] = 'Eredu honek ez dauka analisi-tarterik.';
$string['errorpredictioncontextnotavailable'] = 'Aurreikuspenen testuingurua dagoeneko ez dago eskuragarri.';
$string['errorpredictionformat'] = 'Aurreikuspen-kalkuluen formatu baliogabea';
$string['errorpredictionnotfound'] = 'Ez da aurreikuspena aurkitu';
$string['errorpredictionsprocessor'] = 'Aurreikuspen-prozesatzailearen errorea: {$a}';
$string['errorpredictwrongformat'] = 'Aurreikuspen-prozesatzaileak itzulitakoa ezin da deskodetu: "{$a}"';
$string['errorprocessornotready'] = 'Aukeratutako aurreikuspen-prozesatzailea ez dago oraindik prest: {$a}';
$string['errorsamplenotavailable'] = 'Aurreikusitako lagina dagoeneko ez dago eskuragarri.';
$string['errorunexistingmodel'] = 'Existitzen ez den modeloa: {$a}';
$string['errorunexistingtimesplitting'] = 'Aukeratutako analisi-tartea ez dago eskuragarri.';
$string['errorunknownaction'] = 'Ekintza ezezaguna';
$string['eventinsightsviewed'] = 'Pertzepzioak ikusi dira';
$string['eventpredictionactionstarted'] = 'Aurreikuspen-prozesua hasi da';
$string['fixedack'] = 'Onartu';
$string['incorrectlyflagged'] = 'Modu okerrean markatuta';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Sistemak zuretzako pertzepzio bat sortu du';
$string['insightinfomessageplain'] = 'Sistemak zuretzako pertzepzio bat sortu du: {$a}';
$string['insightmessagesubject'] = '"{$a}"(r)entzako pertzepzio berria';
$string['invalidanalysablefortimesplitting'] = 'Ezin izan da aztertu {$a} analisi-tartea erabiliz.';
$string['invalidtimesplitting'] = '{$a} IDa duen ereduak analisi-tarte bat behar du trebatzeko erabilia izan baino lehen.';
$string['levelinstitution'] = 'Heziketa maila';
$string['levelinstitutionisced0'] = 'Haur Hezkuntza (lehen hezkuntzan baino maila baxuagoa)';
$string['levelinstitutionisced1'] = 'Lehen Hezkuntza';
$string['levelinstitutionisced2'] = 'Derrigorrezko Bigarren Hezkuntza';
$string['levelinstitutionisced3'] = 'Batxilergoa';
$string['levelinstitutionisced4'] = 'Erdi mailako Ziklo Formatiboa';
$string['levelinstitutionisced5'] = 'Goi mailako Ziklo Formatiboa';
$string['levelinstitutionisced6'] = 'Gradua edo baliokidea';
$string['levelinstitutionisced7'] = 'Masterra edo baliokidea';
$string['levelinstitutionisced8'] = 'Doktoretza edo baliokidea';
$string['modeinstruction'] = 'Entrenatze moduak';
$string['modeinstructionblendedhybrid'] = 'Hibridoa (blended learning)';
$string['modeinstructionfacetoface'] = 'Aurrez aurrekoa';
$string['modeinstructionfullyonline'] = 'Guztiz online';
$string['modeloutputdir'] = 'Modeloaren irteera-direktorioa';
$string['modeloutputdirwithdefaultinfo'] = 'Aurreikuspen-prozesatzaileak egindako ebaluazio guztien informazioa gordeko duen direktorioa. Arazketa eta ikerketarako baliagarria. Hutsik utziz gero, {$a} erabiliko da modu lehenetsian.';
$string['modeltimelimit'] = 'Analizatzeko denbora-muga modeloko';
$string['modeltimelimitinfo'] = 'Ezarpen honek modelo bakoitzak guneko edukiak analizatzen ematen duen denbora mugatzen du.';
$string['neutral'] = 'Neutrala';
$string['neverdelete'] = 'Ez ezabatu kalkuluak inoiz';
$string['nocourses'] = 'Ez dago analizatzeko ikastarorik';
$string['nodata'] = 'Ez dago analizatzeko daturik';
$string['noevaluationbasedassumptions'] = 'Usteetan oinarritutako modeloak ezin dira ebaluatu.';
$string['noinsights'] = 'Ez da pertzepziorik aurkeztu';
$string['noinsightsmodel'] = 'Eredu honek ez du pertzepziorik sortzen';
$string['nonewdata'] = 'Ez dago datu berririk eskuragarri. Eredua hurrengo analisi-tartearen ondoren zehaztuko dira.';
$string['nonewranges'] = 'Ez dago aurreikuspen berririk oraindik. Eredua hurrengo analisi-tartearen ondoren zehaztuko dira.';
$string['nopredictionsyet'] = 'Oraindik ez dago aurreikuspenik eskura';
$string['noranges'] = 'Ez dago aurreikuspenik oraindik';
$string['notapplicable'] = 'Aplikaezina';
$string['notrainingbasedassumptions'] = 'Usteetan oinarritutako modeloek ez dute trebakuntzarik behar';
$string['notuseful'] = 'Ez da erabilgarria';
$string['novaliddata'] = 'Ez dago datu baliagarririk eskura';
$string['novalidsamples'] = 'Ez dago lagin baliagarririk eskura';
$string['onlycli'] = 'Analitika-prozesuen exekuzioa soilik komando lerroaren bitartez';
$string['onlycliinfo'] = 'Ereduak ebaluatu, ikaste automatikoko algoritmoak trebatzea edo predikzioak lortzea bezalako analitiken prozesuek denbora eraman dezakete. Cron ataza gisa exekutatzen dira eta komando lerrotik behartu daitezke. Desgaituz gero, analitiken prozesu hauek web bidezko interfazearen bidez eskuz exekutatu daitezke.';
$string['percentonline'] = 'Online ehunekoa';
$string['percentonline_help'] = 'Zure erakundeak ikastaro hibridoak (blended learning) eskaintzen baditu, ikasleen lanaren zer ehuneko bideratzen da online Moodlen? Idatzi 0tik 100era bitarteko zenbaki bat.';
$string['predictionsprocessor'] = 'Aurreikuspen-prozesatzailea';
$string['predictionsprocessor_help'] = 'Aurreikuspen-prozesatzaile bat ikaste automatikoaren backend-a da, eta ereduen adierazleak eta helburuak sortutako datu-multzoak prozesatzen ditu. Eredu bakoitzak prozesatzaile ezberdina erabili dezake. Hemen zehaztutakoa lehenetsitako prozesatzailea izango da.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Eredu analitikoak';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Eredua aldatu zueneko erabiltzailea';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Eredu analitikoetarako erabilitako erregistroa';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Erregistroa aldatu zueneko erabiltzailea';
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
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Analisi-tartearen indizea';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Laginaren IDa';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Aurreikuspena egin zeneko unea';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Kalkuluen amaiera-data';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Kalkuluen hasiera-data';
$string['processingsitecontents'] = 'Guneko edukiak prozesatzen';
$string['successfullyanalysed'] = 'Ondo analizatu da';
$string['timesplittingmethod'] = 'Analisi-tartea';
$string['timesplittingmethod_help'] = 'Analisi-tarteak sistemak aurreikuspenak noiz kalkulatuko dituen eta horietarako erabiliko dituen erregistroen zatia zehazten ditu. Esaterako, ikastaroaren iraupena zatika dezakezu eta zati bakoitzaren amaieran aurreikuspen bat sortu.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Erakunde mota';
$string['typeinstitutionacademic'] = 'Akademikoa';
$string['typeinstitutionngo'] = 'Gobernuz kanpoko erakundea (GKE)';
$string['typeinstitutiontraining'] = 'Lanbide Heziketa';
$string['useful'] = 'Erabilgarria';
$string['viewdetails'] = 'Ikusi xehetasunak';
$string['viewinsight'] = 'Ikusi pertzepzioa';
$string['viewinsightdetails'] = 'Ikusi pertzepzioaren xehetasunak';
$string['viewprediction'] = 'Ikusi aurreikuspenaren xehetasunak';
$string['washelpful'] = 'Hau lagungarria izan zaizu?';
