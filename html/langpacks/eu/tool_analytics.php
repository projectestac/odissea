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
 * Strings for component 'tool_analytics', language 'eu', version '3.8'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Zehaztasuna';
$string['actionexecutedgroupedusefulness'] = 'Taldekako ekintzak';
$string['actions'] = 'Ekintzak';
$string['actionsexecutedbyusers'] = 'Erabiltzaileek exekutatutako ekintzak';
$string['actionsexecutedbyusersfor'] = 'Erabiltzaileek "{$a}" ereduarentzat exekutatutako ekintzak';
$string['allpredictions'] = 'Aurreikuspen guztiak';
$string['alltimesplittingmethods'] = 'Analisi-tarte guztiak';
$string['analysingsitedata'] = 'Gunea analizatzen';
$string['analysis'] = 'Analisia';
$string['analyticmodels'] = 'Eredu analitikoak';
$string['bettercli'] = 'Ereduak ebaluatu eta aurreikuspenak sortzeak prozesatze handia suposa lezake. Ekintza hauek komando-lerrotik exekutatzea gomendatzen da.';
$string['cantguessenddate'] = 'Ezin da iragarri amaiera-data';
$string['cantguessstartdate'] = 'Ezin da iragarri hasiera-data';
$string['classdoesnotexist'] = '{$a} klasea ez da existitzen';
$string['clearmodelpredictions'] = 'Ziur zaude "{$a}" aurreikuspen guztiak ezabatu nahi dituzula?';
$string['clearpredictions'] = 'Garbitu aurreikuspenak';
$string['clienablemodel'] = 'Eredu bat gaitu dezakezu analisi-tarte bat bere IDaren bitartez aukeratuta. Kontuan izan beranduago ere gaitu dezakezuela web interfazetik (aukeratu \'bat ere ez\' irteteko).';
$string['clievaluationandpredictions'] = 'Programatutako ataza gaitutako ereduetan arakatu eta aurreikuspenak lortzen ditu. Web interfaze bidezko ereduen ebaluazioa desgaituta dago. Prozesu hauek web interfazetik eskuz exekutatzea gaitu dezakezu analitiken ezarpenetan <a href="{$a}">\'onlycli\'</a> aukera desgaituta.';
$string['clievaluationandpredictionsnoadmin'] = 'Programatutako ataza gaitutako ereduetan arakatu eta aurreikuspenak lortzen ditu. Web interfaze bidezko ereduen ebaluazioa desgaituta dago. Guneko kudeatzaileak gaitu dezake aukera hau.';
$string['component'] = 'Osagarria';
$string['componentcore'] = 'Sistema';
$string['componentselect'] = 'Aukeratu \'{$a}\' osagaiak eskainitako eredu guztiak';
$string['componentselectnone'] = 'Bat ere ez aukeratu';
$string['contexts'] = 'Testuinguruak';
$string['contexts_help'] = 'Eredua testuinguru-multzo honetara mugatuko da. Testuingururik ez bada aukeratzen ez da testuinguru murrizketarik aplikatuko.';
$string['createmodel'] = 'Sortu eredua';
$string['currenttimesplitting'] = 'Oraingo analisi-tartea';
$string['delete'] = 'Ezabatu';
$string['deletemodelconfirmation'] = 'Ziur zaude "{$a}" ezabatu nahi duzula? Aldaketa honek ez du atzera bueltarik.';
$string['disabled'] = 'Desgaituta';
$string['editmodel'] = 'Editatu "{$a}" eredua';
$string['edittrainedwarning'] = 'Eredu hau dagoeneko trebatua izan da. Kontuan izan bere adierazleak edo analisi-tarteak aldatuta aurretiko aurreikuspenak ezabatuko direla eta aurreikuspen berriak sortzen hasiko direla.';
$string['enabled'] = 'Gaituta';
$string['errorcantenablenotimesplitting'] = 'Analisi-tarte bat aukeratu behar duzu eredua gaitu aurretik.';
$string['errornoenabledandtrainedmodels'] = 'Ez dago aurreikuspenak egiteko gaituta edota trebatuta dagoen eredurik.';
$string['errornoenabledmodels'] = 'Ez dago trebatzeko gaituta dagoen eredurik.';
$string['errornoexport'] = 'Trebatutako ereduak soilik esportatu daitezke';
$string['errornostaticevaluated'] = 'Usteetan oinarritutako ereduak ezin dira ebaluatu. Zehaztutako irizpideen arabera beti %100 zuzenak dira.';
$string['errornostaticlog'] = 'Usteetan oinarritutako ereduak ezin dira ebaluatu ez dagoelako errendimendu erregistrorik.';
$string['erroronlycli'] = 'Exekuzioa soilik komando lerrotik dago baimenduta';
$string['errortrainingdataexport'] = 'Eredua trebatzearen datuak ezin dira esportatu';
$string['evaluate'] = 'Ebaluatu';
$string['evaluatemodel'] = 'Ebaluatu eredua';
$string['evaluationinbatches'] = 'Gunearen edukiak kalkulatu eta sortatan gordetzen dira. Ebaluatze-prozesua edozein unetan geratu daiteke. Exekutatzen den hurrengo aldian geratu zen lekutik jarraituko du.';
$string['evaluationmode'] = 'Ebaluazio-modua';
$string['evaluationmode_help'] = 'Bi ebaluazio-modu daude:

* Trebatutako eredua - Guneko datuak erabiltzen dira probetarako datu gisa trebatutako ereduaren zehaztasuna neurtzeko.
* Konfiguratutakoa - Guneko datuak trebakuntzarako eta probetarako datuetan banatzen dira, ereduaren konfigurazioaren trebakuntza eta proben zehaztasuna neurtzeko.

Trebatutako eredua soilik dago eskuragarri gunera lehendik trebatutako eredua inportatu bada eta oraindik guneko datuak erabilita berriz trebatu ez bada.';
$string['evaluationmodecolconfiguration'] = 'Konfiguratutakoa';
$string['evaluationmodecoltrainedmodel'] = 'Trebatutako eredua';
$string['evaluationmodeconfiguration'] = 'Ebaluatu ereduaren konfigurazioa';
$string['evaluationmodeinfo'] = 'Eredu hau gunera inportatu da. Ereduaren errendimendua ebaluatu dezakezu, edo ereduaren konfigurazioaren errendimendua guneko datuak erabilita ebaluatu dezakezu.';
$string['evaluationmodetrainedmodel'] = 'Ebaluatu trebatutako eredua';
$string['executescheduledanalysis'] = 'Exekutatu programatutako analisia';
$string['export'] = 'Esportatu';
$string['exportincludeweights'] = 'Prestatutako ereduaren pisuak barne ditu';
$string['exportmodel'] = 'Esportatu konfigurazioa';
$string['exporttrainingdata'] = 'Esportatu trebatze-datuak';
$string['extrainfo'] = 'Informazioa';
$string['generalerror'] = 'Ebaluatze errorea. Egoeraren kodea {$a}';
$string['getpredictions'] = 'Eskuratu aurreikuspenak';
$string['goodmodel'] = 'Aurreikuspenak lortzeko eredu ona da hau. Gaitu ezazu aurreikuspenak lortzen hasteko.';
$string['ignoreversionmismatches'] = 'Ez hartu kontuan bertsio-ezberdintasunak';
$string['ignoreversionmismatchescheckbox'] = 'Ez hartu kontuan gune honen eta jatorrizko gunearen bertsioen arteko ezberdintasunak.';
$string['importedsuccessfully'] = 'Eredua ondo inportatu da.';
$string['importmodel'] = 'Inportatu eredua';
$string['indicators'] = 'Adierazleak';
$string['indicators_help'] = 'Adierazleek zure ustez helburuetako aurreikuspen zehatzera eramango dutenak dira.';
$string['indicatorsnum'] = 'Adierazle kopurua: {$a}';
$string['info'] = 'Informazioa';
$string['insights'] = 'Pertzepzioak';
$string['insightsreport'] = 'Pertzepzioen txostena';
$string['invalidanalysables'] = 'Guneko elementu baliogabeak';
$string['invalidanalysablesinfo'] = 'Orri honek zerrendatzen du gune honetan analizatu daitezkeen baina aurreikuspen-eredu honetan erabili ezin daitezkeen elementuak. Zerrendako elementuak ezin dira eredua trebatzeko erabili, ezta eredua bertatik aurreikuspenak lortu ere.';
$string['invalidanalysablestable'] = 'Gunean analizatu daitezkeen elementu baliogabeen taula';
$string['invalidcurrenttimesplitting'] = 'Oraingo analisi-tartea ez da baliagarria eredu honen helbururako. Aukeratu ezazu mesedez beste tarte bat.';
$string['invalidindicatorsremoved'] = 'Eredu berri bat gehitu da. Aukeratutako helburuarekin funtzionatzen ez duten adierazleak automatikoki kendu dira.';
$string['invalidprediction'] = 'Ez du aurreikuspenak lortzeko balio';
$string['invalidtimesplitting'] = 'Aukeratutako analisi-tartea ez da baliagarria aukeratutako helbururako.';
$string['invalidtimesplittinginmodels'] = 'Ereduetako batzuk erabiltzen duten analisi-tartea baliogabea da. Aukeratu ezazu mesedez beste tarte bat hurrengo ereduetarako: {$a}';
$string['invalidtraining'] = 'Ez du eredua trebatzeko balio';
$string['loginfo'] = 'Informazio gehigarriaren erregistroa';
$string['missingmoodleversion'] = 'Inportatutako fitxategiak ez du bertsio-zenbakirik zehazten';
$string['modelid'] = 'Ereduaren IDa';
$string['modelinvalidanalysables'] = '"{$a}" ereduarentzat analizatu daitezkeen elementu baliogabeak';
$string['modelname'] = 'Ereduaren izena';
$string['modelresults'] = '{$a} emaitza';
$string['modeltimesplitting'] = 'Analisi-tartea';
$string['newmodel'] = 'Eredu berria';
$string['nextpage'] = 'Hurrengo orria';
$string['noactionsfound'] = 'Erabiltzaileek ez dute ekintzarik exekutatu sortutako pertzepzioetan.';
$string['nodatatoevaluate'] = 'Ez dago eredua ebaluatzeko daturik';
$string['nodatatopredict'] = 'Ez dago aurreikuspenak lortzeko elementu berririk.';
$string['nodatatotrain'] = 'Ez dago trebatzean erabiltzeko moduko datu berririk.';
$string['noinvalidanalysables'] = 'Gune honek ez du analiza daitekeen elementu baliogaberik.';
$string['notdefined'] = 'Oraindik zehaztu gabe';
$string['pluginname'] = 'Analisi-ereduak';
$string['predictionprocessfinished'] = 'Aurreikuspen-prozesua amaitu da';
$string['predictionresults'] = 'Aurreikuspenaren emaitzak';
$string['predictmodels'] = 'Aurreikuspen-ereduak';
$string['predictorresultsin'] = 'Aurreikuspen-prozesuak informazioa {$a} direktorioan erregistratu du';
$string['previouspage'] = 'Aurreko orria';
$string['privacy:metadata'] = 'Analisi-ereduak pluginak ez du datu pertsonalik biltzen.';
$string['restoredefault'] = 'Berrezarri eredu lehenetsiak';
$string['restoredefaultempty'] = 'Aukeratu mesedez berrezarri beharreko ereduak.';
$string['restoredefaultinfo'] = 'Lehenetsitako eredu hauek falta dira edo instalatu zirenetik aldatu dira.';
$string['restoredefaultnone'] = 'Sistemarekin batera eskainitako eredu lehenetsi guztiak eta instalatutako pluginak sortu dira. Ez da eredu berririk aurkitu; ez dago berreskuratzeko ezer.';
$string['restoredefaultsome'] = '{$a->count} eredu berri ondo berriz sortu dira.';
$string['restoredefaultsubmit'] = 'Berrezarri aukeratutakoak';
$string['sameenddate'] = 'Oraingo amaiera-data egokia da';
$string['samestartdate'] = 'Oraingo hasiera-data egokia da';
$string['scheduledanalysisresults'] = '{$a->name} analisi-tartea erabilita lortutako emaitzak';
$string['scheduledanalysisresultscli'] = '{$a->name} (IDa: {$a->id}) analisi-tartea erabilita lortutako emaitzak';
$string['selecttimesplittingforevaluation'] = 'Aukeratu ereduaren konfigurazioa ebaluatzeko erabili nahi duzun analisi-tartea.';
$string['target'] = 'Helburua';
$string['target_help'] = 'Helburua ereduak aurreikusiko duena da.';
$string['timesplittingnotdefined'] = 'Ez da analisi-tartea zehaztu.';
$string['timesplittingnotdefined_help'] = 'Eredua gaitu baino lehen analisi-tarte bat aukeratu behar duzu.';
$string['trainandpredictmodel'] = 'Ereduak trebatu eta aurreikuspenak kalkulatu';
$string['trainingprocessfinished'] = 'Trebatze-prozesua amaitu da';
$string['trainingresults'] = 'Trebatzearen emaitzak';
$string['trainmodels'] = 'Ereduak trebatu';
$string['versionnotsame'] = 'Inportatutako fitxategia oraingo bertsioa ({$a->version}) ez den beste bertsio batekoa da({$a->importedversion})';
$string['viewlog'] = 'Ebaluazio-erregistroa';
$string['weeksenddateautomaticallyset'] = 'Amaiera-data automatikoki kalkulatzen da hasiera-data eta atal kopuruan oinarrituz';
$string['weeksenddatedefault'] = 'Amaiera-data automatikoki kalkulatu da ikastaroaren hasiera-datatik.';
