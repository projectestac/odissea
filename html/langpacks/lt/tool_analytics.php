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
 * Strings for component 'tool_analytics', language 'lt', version '4.5'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Tikslumas';
$string['actionexecutedgroupedusefulness'] = 'Sugrupuoti veiksmai';
$string['actions'] = 'Veiksmai';
$string['actionsexecutedbyusers'] = 'Naudotojų atlikti veiksmai';
$string['actionsexecutedbyusersfor'] = '„{$a}“ modelio naudotojų atlikti veiksmai';
$string['allpredictions'] = 'Visos prognozės';
$string['alltimesplittingmethods'] = 'Visi analizės intervalai';
$string['analysingsitedata'] = 'Svetainės analizė';
$string['analysis'] = 'Analizės';
$string['analyticmodels'] = 'Analitikos modeliai';
$string['bettercli'] = 'Modelių įvertinimas ir prognozių generavimas gali būti sudėtingas apdorojimas. Šiuos veiksmus rekomenduojama atlikti iš komandinės eilutės.';
$string['cantguessenddate'] = 'Negalima atspėti pabaigos datos';
$string['cantguessstartdate'] = 'Negalima atspėti pradžios datos';
$string['classdoesnotexist'] = 'Klasė {$a} neegzistuoja';
$string['clearmodelpredictions'] = 'Ar tikrai norite išvalyti visus „{$a}“ numatymus?';
$string['clearpredictions'] = 'Išvalyti prognozes';
$string['clienablemodel'] = 'Modelių įvertinimas ir prognozių generavimas gali būti sudėtingas apdorojimas. Šiuos veiksmus rekomenduojama atlikti iš komandinės eilutės.';
$string['clievaluationandpredictions'] = 'Suplanuota užduotis kartojama per įgalintus modelius ir gauna prognozes. Modelių vertinimas per žiniatinklio sąsają išjungtas. Galite leisti šiuos procesus vykdyti rankiniu būdu naudodami žiniatinklio sąsają, išjungę <a href="{$a}">„onlycli“</a> analizės nustatymą.';
$string['clievaluationandpredictionsnoadmin'] = 'Suplanuota užduotis kartojama per įgalintus modelius ir gauna prognozes. Modelių vertinimas naudojant interneto sąsają išjungtas. Jį gali įjungti svetainės administratorius.';
$string['component'] = 'Komponentas';
$string['componentcore'] = 'Branduolys';
$string['componentselect'] = 'Pasirinkti visus modelius, pateiktus iš komponento „{$a}“';
$string['componentselectnone'] = 'Nebežymėti visko';
$string['contexts'] = 'Kontekstai';
$string['contexts_help'] = 'Modelis bus taikomas tik šiam kontekstų rinkiniui. Jokie konteksto apribojimai nebus taikomi, jei nepasirinksite kontekstų.';
$string['createmodel'] = 'Kurti modelį';
$string['currenttimesplitting'] = 'Dabartinis analizės intervalas';
$string['delete'] = 'Naikinti';
$string['deletemodelconfirmation'] = 'Ar tikrai norite ištrinti „{$a}“? Šių pakeitimų grąžinti negalima.';
$string['disabled'] = 'Išjungta';
$string['editmodel'] = 'Redaguoti "{$a}" modelį';
$string['edittrainedwarning'] = 'Šis modelis jau buvo ištreniruotas. Atminkite, kad pakeitus jo rodiklius arba analizės intervalą, ankstesnės prognozės bus ištrintos ir bus pradėtos generuoti naujos prognozės.';
$string['enabled'] = 'Įjungta';
$string['errorcantenablenotimesplitting'] = 'Prieš įjungdami modelį, turite pasirinkti analizės intervalą';
$string['errornoenabledandtrainedmodels'] = 'Nėra įjungtų ir treniruotų modelių, kuriuos būtų galima numatyti.';
$string['errornoenabledmodels'] = 'Nėra įgalintų modelių, kuriuos būtų galima treniruoti.';
$string['errornoexport'] = 'Galima eksportuoti tik treniruotus modelius';
$string['errornostaticevaluated'] = 'Prielaidomis pagrįsti modeliai negali būti įvertinti. Jie visada yra 100% teisingi, atsižvelgiant į tai, kaip jie buvo apibrėžti.';
$string['errornostaticlog'] = 'Prielaidomis pagrįsti modeliai negali būti įvertinti, nes nėra našumo žurnalo.';
$string['erroronlycli'] = 'Vykdymas leidžiamas tik per komandinę eilutę';
$string['errortrainingdataexport'] = 'Nepavyko eksportuoti modelio treniravimo duomenų';
$string['evaluate'] = 'Įvertinti';
$string['evaluatemodel'] = 'Įvertinti modelį';
$string['evaluationinbatches'] = 'Svetainės turinys apskaičiuojamas ir saugomas partijomis. Vertinimo procesas gali būti bet kada sustabdytas. Kitą kartą paleidus, jis tęsis nuo tos vietos, kai buvo sustabdytas.';
$string['evaluationmode'] = 'Vertinimo režimas';
$string['evaluationmode_help'] = 'Yra du vertinimo režimai:

* Treniruotas modelis – svetainės duomenys naudojami kaip testavimo duomenys, siekiant įvertinti treniruoto modelio tikslumą.
* Konfigūracija – Svetainės duomenys padalijami į treniravimo ir testavimo duomenis, kad būtų galima treniruoti ir patikrinti modelio konfigūracijos tikslumą.

Treniruotas modelis pasiekiamas tik tuo atveju, jei treniruotas modelis buvo importuotas į svetainę ir dar nebuvo iš naujo treniruotas naudojant svetainės duomenis.';
$string['evaluationmodecolconfiguration'] = 'Konfigūracija';
$string['evaluationmodecoltrainedmodel'] = 'Ištreniruotas modelis';
$string['evaluationmodeconfiguration'] = 'Įvertiti modelio konfigūraciją';
$string['evaluationmodeinfo'] = 'Šis modelis buvo importuotas į svetainę. Galite įvertinti modelio našumą arba galite įvertinti modelio konfigūracijos našumą naudodami svetainės duomenis.';
$string['evaluationmodetrainedmodel'] = 'Įvertinti ištreniruotą modelį';
$string['executescheduledanalysis'] = 'Atlikti suplanuotą analizę';
$string['export'] = 'Eksportuoti';
$string['exportincludeweights'] = 'Įtraukti treniruoto modelio svorius';
$string['exportmodel'] = 'Eksportuoti konfigūraciją';
$string['exporttrainingdata'] = 'Eksportuoti treniruočių duomenis';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Vertinimo klaida. Būsenos kodas {$a}';
$string['goodmodel'] = 'Tai geras modelis prognozėms gauti. Įjunkite jį, kad pradėtumėte gauti prognozes.';
$string['ignoreversionmismatches'] = 'Ignoruoti versijų neatitikimus';
$string['ignoreversionmismatchescheckbox'] = 'Nepaisti šios svetainės versijos ir pradinės svetainės versijos skirtumų.';
$string['importedsuccessfully'] = 'Modelis sėkmingai importuotas.';
$string['importmodel'] = 'Importuoti modelį';
$string['indicators'] = 'Rodikliai';
$string['indicators_help'] = 'Rodikliai yra tai, kas, jūsų manymu, leis tiksliai numatyti tikslą.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Rodiklių skaičius: {$a}';
$string['info'] = 'Info';
$string['insights'] = 'Įžvalgos';
$string['insightsreport'] = 'Įžvalgų ataskaita';
$string['invalidanalysables'] = 'Netinkami svetainės elementai';
$string['invalidanalysablesinfo'] = 'Šiame puslapyje pateikiami analizuojami elementai, kurių negali naudoti šis prognozavimo modelis. Išvardyti elementai negali būti naudojami prognozavimo modeliui mokyti, taip pat prognozavimo modelis negali gauti jų prognozių.';
$string['invalidanalysablestable'] = 'Netinkama svetainės analizuojamų elementų lentelė';
$string['invalidcurrenttimesplitting'] = 'Dabartinis analizės intervalas netinkamas šio modelio tikslui. Pasirinkite kitą intervalą.';
$string['invalidindicatorsremoved'] = 'Pridėtas naujas modelis. Rodikliai, kurie neveikia su pasirinktu tikslu, buvo automatiškai pašalinti.';
$string['invalidprediction'] = 'Netinkama norint gauti prognozes';
$string['invalidtimesplitting'] = 'Pasirinktas analizės intervalas netinkamas pasirinktam tikslui.';
$string['invalidtimesplittinginmodels'] = 'Kai kurių modelių naudojamas analizės intervalas yra neteisingas. Pasirinkite kitą intervalą šiems modeliams: {$a}';
$string['invalidtraining'] = 'Netinkamas modeliui treniruoti';
$string['loginfo'] = 'Užregistruoti papildomą info';
$string['missingmoodleversion'] = 'Importuotas failas neapibrėžia versijos numerio';
$string['modelid'] = 'Modelio ID';
$string['modelinvalidanalysables'] = 'Netinkami modelio „{$a}“ analizuojami elementai';
$string['modelname'] = 'Modelio vardas';
$string['modelresults'] = '{$a} rezultatai';
$string['modeltimesplitting'] = 'Analizės intervalas';
$string['newmodel'] = 'Naujas modelis';
$string['nextpage'] = 'Kitas puslapis';
$string['noactionsfound'] = 'Naudotojai neatliko jokių veiksmų sugeneruotomis įžvalgomis.';
$string['nodatatoevaluate'] = 'Nėra duomenų, leidžiančių įvertinti modelį';
$string['nodatatopredict'] = 'Nėra naujų elementų, dėl kurių būtų galima prognozuoti.';
$string['nodatatotrain'] = 'Naujų duomenų, kuriuos būtų galima panaudoti treniruotėms, nėra.';
$string['noinvalidanalysables'] = 'Šioje svetainėje nėra netinkamo analizuojamo elemento.';
$string['notdefined'] = 'Dar neapibrėžta';
$string['pluginname'] = 'Analitikos modeliai';
$string['predictionprocessfinished'] = 'Prognozavimo procesas baigtas';
$string['predictionresults'] = 'Prognozavimo rezultatai';
$string['predictmodels'] = 'Prognozuoti modelius';
$string['predictorresultsin'] = 'Numatytojas registravo informaciją {$a} kataloge';
$string['previouspage'] = 'Ankstesnis puslapis';
$string['privacy:metadata'] = 'Analitikos modelių papildinys nesaugo jokių asmeninių duomenų.';
$string['restoredefault'] = 'Atkurti numatytuosius modelius';
$string['restoredefaultempty'] = 'Pasirinkite modelius, kuriuos norite atkurti.';
$string['restoredefaultinfo'] = 'Šių numatytųjų modelių nėra arba jie pasikeitė nuo įdiegimo. Galite atkurti pasirinktus numatytuosius modelius.';
$string['restoredefaultnone'] = 'Sukurti visi numatytieji modeliai, kuriuos teikia pagrindiniai ir įdiegti papildiniai. Naujų modelių nerasta; nėra ką atkurti.';
$string['restoredefaultsome'] = 'Sėkmingai atkurtas (-i) {$a->count} naujas (-i) modelis (-ai).';
$string['restoredefaultsubmit'] = 'Atkurti pasirinktą';
$string['sameenddate'] = 'Dabartinė pabaigos data yra gera';
$string['samestartdate'] = 'Dabartinė pradžios data yra gera';
$string['scheduledanalysisresults'] = 'Rezultatai naudojant {$a->name} analizės intervalą';
$string['scheduledanalysisresultscli'] = 'Rezultatai naudojant {$a->name} (id: {$a->id}) analizės intervalą';
$string['selecttimesplittingforevaluation'] = 'Pasirinkite analizės intervalą, kurį norite naudoti modelio konfigūracijai įvertinti.';
$string['target'] = 'Tikslas';
$string['target_help'] = 'Tikslas yra tai, ką modelis prognozuoja.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Analizės intervalas nėra apibrėžtas.';
$string['timesplittingnotdefined_help'] = 'Prieš įjungdami modelį, turite pasirinkti analizės intervalą.';
$string['trainandpredictmodel'] = 'Treniruočių modelis ir prognozių skaičiavimas';
$string['trainingprocessfinished'] = 'Treniruotės procesas baigtas';
$string['trainingresults'] = 'Treniruočių rezultatai';
$string['trainmodels'] = 'Treniruoti modelius';
$string['versionnotsame'] = 'Importuotas failas buvo iš kitos versijos ({$a->importedversion}) nei dabartinė ({$a->version})';
$string['viewlog'] = 'Vertinimo žurnalas';
$string['weeksenddateautomaticallyset'] = 'Pabaigos data nustatoma automatiškai, atsižvelgiant į pradžios datą ir skyrių skaičių';
$string['weeksenddatedefault'] = 'Pabaigos data automatiškai skaičiuojama nuo kurso pradžios datos.';
