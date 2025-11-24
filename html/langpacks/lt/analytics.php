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
 * Strings for component 'analytics', language 'lt', version '4.5'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analizuojamas {$a->analysableid} nenaudojamas: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analizuojamasis {$a->analysableid} negalioja šiam tikslui: {$a->result}';
$string['analysisinprogress'] = 'Vis dar analizuojamas ankstesnio vykdymo metu';
$string['analytics'] = 'Analitika';
$string['analyticsdisabled'] = 'Analitika išjungta. Ją galite įjungti skiltyje „Svetainės administravimas > Išplėstinės funkcijos“.';
$string['analyticslogstore'] = 'Analizei naudojama žurnalų saugykla';
$string['analyticslogstore_help'] = 'Žurnalų saugykla, kurią naudos analizės API naudotojų veiklai nuskaityti.';
$string['analyticssettings'] = 'Analitikos nustatymai';
$string['analyticssiteinfo'] = 'Svetainės informacija';
$string['calclifetime'] = 'Išsaugoti analitikos skaičiavimus';
$string['configlcalclifetime'] = 'Tai nurodo, kiek laiko norite saugoti skaičiavimo duomenis – prognozės nebus ištrintos, o ištrinami duomenys, naudojami prognozėms generuoti. Čia geriausia naudoti numatytąją parinktį, nes taip kontroliuojamas disko naudojimas, tačiau jei skaičiavimo lenteles naudojate kitais tikslais, galbūt norėsite padidinti šią reikšmę.';
$string['defaultpredictionsprocessor'] = 'Numatytasis prognozavimo procesorius';
$string['defaultpredictoroption'] = 'Numatytasis procesorius ({$a})';
$string['defaulttimesplittingmethods'] = 'Numatytieji analizės intervalai modelio įvertinimui';
$string['defaulttimesplittingmethods_help'] = 'Analizės intervalas apibrėžia, kada sistema apskaičiuos prognozes ir veiklos žurnalų dalį, į kurią bus atsižvelgta rengiant šias prognozes. Modelio vertinimo procesas kartosis šiais analizės intervalais, nebent būtų nurodytas konkretus analizės intervalas.';
$string['disabledmodel'] = 'Modelis išjungtas';
$string['erroralreadypredict'] = 'Failas {$a} jau buvo naudojamas prognozėms generuoti.';
$string['errorcannotreaddataset'] = 'Duomenų rinkinio failo {$a} negalima nuskaityti.';
$string['errorcannotusetimesplitting'] = 'Pateiktas analizės intervalas negali būti naudojamas šiame modelyje.';
$string['errorcannotwritedataset'] = 'Negalima įrašyti duomenų rinkinio failo {$a}.';
$string['errorexportmodelresult'] = 'Mašininio mokymosi modelio eksportuoti negalima.';
$string['errorimport'] = 'Importuojant pateiktą JSON failą įvyko klaida.';
$string['errorimportmissingclasses'] = 'Šioje svetainėje šie analizės komponentai nepasiekiami: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Pateiktame modelyje reikia įdiegti šiuos papildinius: {$a}. Atminkite, kad versijos nebūtinai turi atitikti jūsų svetainėje įdiegtas versijas. Įdiegti tą pačią arba naujesnę papildinio versiją daugeliu atvejų turėtų būti gerai.';
$string['errorimportversionmismatches'] = 'Šių komponentų versija skiriasi nuo šioje svetainėje įdiegtos versijos: {$a}. Norėdami nepaisyti šių skirtumų, galite naudoti parinktį „Ignoruoti versijų neatitikimus“.';
$string['errorinvalidcontexts'] = 'Kai kurie iš pasirinktų kontekstų negali būti naudojami šiame tiksle.';
$string['errorinvalidindicator'] = 'Netinkamas {$a} indikatorius';
$string['errorinvalidtarget'] = 'Netinkamas {$a} tikslas';
$string['errorinvalidtimesplitting'] = 'Neteisingas analizės intervalas; įsitikinkite, kad įtraukėte visą klasės pavadinimą.';
$string['errornocontextrestrictions'] = 'Pasirinktas tikslas nepalaiko konteksto apribojimų';
$string['errornoexportconfig'] = 'Eksportuojant modelio konfigūraciją kilo problema.';
$string['errornoexportconfigrequirements'] = 'Galima eksportuoti tik nestatinius modelius su analizės intervalu.';
$string['errornoindicators'] = 'Šis modelis neturi jokių indikatorių.';
$string['errornopredictresults'] = 'Iš numatymo procesoriaus rezultatų nepateikta. Norėdami gauti daugiau informacijos, patikrinkite išvesties katalogo turinį.';
$string['errornoroles'] = 'Besimokančiųjų ar dėstytojų vaidmenys neapibrėžti. Apibrėžkite juos analitikos nustatymų puslapyje.';
$string['errornotarget'] = 'Šis modelis neturi jokio tikslo.';
$string['errornotimesplittings'] = 'Šis modelis neturi analizės intervalo.';
$string['errorpredictioncontextnotavailable'] = 'Prognozės kontekstas daugiau neprieinamas.';
$string['errorpredictionformat'] = 'Netinkamas prognozės skaičiavimų formatas';
$string['errorpredictionnotfound'] = 'Prognozė nerasta';
$string['errorpredictionsprocessor'] = 'Prognozės procesoriaus klaida: {$a}';
$string['errorpredictwrongformat'] = 'Numatymo procesoriaus grąžinimo negalima iššifruoti: „{$a}“';
$string['errorprocessornotready'] = 'Pasirinktas prognozavimo procesorius neparengtas: {$a}';
$string['errorsamplenotavailable'] = 'Numatytas pavyzdys nebepasiekiamas.';
$string['errorunexistingmodel'] = 'Neegzistuojantis modelis {$a}';
$string['errorunexistingtimesplitting'] = 'Pasirinktas analizės intervalas nepasiekiamas.';
$string['errorunknownaction'] = 'Nežinomas veiksmas';
$string['eventinsightsviewed'] = 'Peržiūrėtos įžvalgos';
$string['eventpredictionactionstarted'] = 'Prasidėjo prognozavimo procesas';
$string['fixedack'] = 'Sutikti';
$string['incorrectlyflagged'] = 'Neteisingai pažymėta';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Sistema sukūrė jums įžvalgą.';
$string['insightinfomessageplain'] = 'Sistema sukūrė jums įžvalgą: {$a}';
$string['insightmessagesubject'] = 'Nauja įžvalga "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Negalima analizuoti naudojant {$a} analizės intervalą.';
$string['invalidtimesplitting'] = 'Modeliui su ID {$a} reikalingas analizės intervalas, kad jį būtų galima naudoti mokymui.';
$string['levelinstitution'] = 'Išsilavinimo lygis';
$string['levelinstitutionisced0'] = 'Ankstyvasis ugdymas („mažesnis nei pradinis“, kad būtų pasiektas išsilavinimas)';
$string['levelinstitutionisced1'] = 'Pradinis ugdymas';
$string['levelinstitutionisced2'] = 'Vidurinis ugdymas';
$string['levelinstitutionisced3'] = 'Aukštesnysis vidurinis išsilavinimas';
$string['levelinstitutionisced4'] = 'Povidurinis ne aukštasis išsilavinimas (gali apimti įmonės arba bendruomenės / NVO mokymą)';
$string['levelinstitutionisced5'] = 'Trumpo ciklo aukštasis išsilavinimas (gali apimti įmonės arba bendruomenės / NVO mokymą)';
$string['levelinstitutionisced6'] = 'Bakalauro ar lygiavertis lygis';
$string['levelinstitutionisced7'] = 'Magistro ar lygiavertis lygis';
$string['levelinstitutionisced8'] = 'Doktorantūros ar lygiavertis lygis';
$string['modeinstruction'] = 'Instruktavimo būdai';
$string['modeinstructionblendedhybrid'] = 'Mišrus arba hibridinis';
$string['modeinstructionfacetoface'] = 'Akis į akį';
$string['modeinstructionfullyonline'] = 'Pilnai online';
$string['modeloutputdir'] = 'Modelių išvesties katalogas';
$string['modeloutputdirwithdefaultinfo'] = 'Katalogas, kuriame prognozavimo procesoriai saugo visą įvertinimo informaciją. Naudinga derinant ir tiriant. Jei tuščia, tada {$a} bus naudojamas kaip numatytasis.';
$string['modeltimelimit'] = 'Analizės terminas vienam modeliui';
$string['modeltimelimitinfo'] = 'Šis nustatymas riboja laiką, kurį kiekvienas modelis praleidžia analizuodamas svetainės turinį.';
$string['neutral'] = 'Neutralus';
$string['neverdelete'] = 'Niekada neištrinti skaičiavimų';
$string['nocourses'] = 'Nėra analizuojamų kursų';
$string['nodata'] = 'Nėra duomenų, reikalingų analizei';
$string['noevaluationbasedassumptions'] = 'Prielaidomis pagrįsti modeliai negali būti įvertinti.';
$string['noinsights'] = 'Jokių įžvalgų nepranešta';
$string['noinsightsmodel'] = 'Šis modelis nesukuria įžvalgų';
$string['nonewdata'] = 'Naujų duomenų nėra. Modelis bus analizuojamas po kito analizės intervalo.';
$string['nonewranges'] = 'Naujų prognozių dar nėra. Modelis bus analizuojamas po kito analizės intervalo.';
$string['nopredictionsyet'] = 'Dar nėra prognozių';
$string['noranges'] = 'Prognozės dar nėra';
$string['notapplicable'] = 'Netaikoma';
$string['notrainingbasedassumptions'] = 'Prielaidomis paremtų modelių treniravimas nereikalingas';
$string['notuseful'] = 'Nenaudingas';
$string['novaliddata'] = 'Nėra tinkamų duomenų';
$string['novalidsamples'] = 'Nėra tinkamų pavyzdžių';
$string['onlycli'] = 'Analitikos apdorojimo vykdymas tik per komandų eilutę';
$string['onlycliinfo'] = '„Analytics“ procesai, tokie kaip modelių įvertinimas, mašininio mokymosi algoritmų mokymas ar prognozių gavimas, gali užtrukti. Jie veikia kaip cron užduotys arba gali būti priverstinai per komandinę eilutę. Jei išjungta, analizės procesus galima vykdyti rankiniu būdu naudojant interneto sąsają.';
$string['percentonline'] = 'Procentai internete';
$string['percentonline_help'] = 'Jei jūsų organizacija siūlo mišrius ar hibridinius kursus, kiek procentų besimokančiųjų darbų atliekama internetu Moodle? Įveskite skaičių nuo 0 iki 100.';
$string['predictionsprocessor'] = 'Prognozės procesorius';
$string['predictionsprocessor_help'] = 'Numatymo procesorius yra mašininio mokymosi „backend“ programa, kuri apdoroja duomenų rinkinius, sugeneruotus skaičiuojant modelių rodiklius ir tikslus. Kiekvienas modelis gali naudoti skirtingą procesorių. Čia nurodyta bus numatytoji.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Analitikos modeliai';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Naudotojas, pakeitęs modelį';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Žurnalas, naudojamas analitikos modeliams';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Naudotojas, pakeitęs žurnalą';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Rodiklių skaičiavimai';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Kontekstas';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Skaičiavimo pabaigos laikas';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Rodiklio skaičiuoklės klasė';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Pavyzdžio ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Pavyzdžio kilmės lentelė';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Skaičiavimo pradžios laikas';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Kada prognozė buvo padaryta';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Apskaičiuota vertė';
$string['privacy:metadata:analytics:predictionactions'] = 'Prognozės veiksmai';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Veiksmo pavadinimas';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Prognozės ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Kai buvo atliktas prognozės veiksmas';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Naudotojas, kuris atliko veiksmą';
$string['privacy:metadata:analytics:predictions'] = 'Prognozės';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Rodiklių skaičiavimai';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Kontekstas';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Modelio ID';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Prognozė';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Prognozės balas';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Analizės intervalo indeksas';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Pavyzdžio ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Kada prognozė buvo padaryta';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Skaičiavimo laikas baigiasi';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Skaičiavimo laikas prasideda';
$string['processingsitecontents'] = 'Apdorojamas svetainės turinys';
$string['successfullyanalysed'] = 'Sėkmingai išanalizuota';
$string['timesplittingmethod'] = 'Analizės intervalas';
$string['timesplittingmethod_help'] = 'Analizės intervalas apibrėžia, kada sistema apskaičiuos prognozes ir veiklos žurnalų dalį, į kurią bus atsižvelgta rengiant šias prognozes. Pavyzdžiui, kurso trukmė gali būti suskirstyta į dalis, kiekvienos dalies pabaigoje sugeneruojant prognozę.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Institucijos tipas';
$string['typeinstitutionacademic'] = 'Akademinis';
$string['typeinstitutionngo'] = 'Nevyriausybinė organizacija (NVO)';
$string['typeinstitutiontraining'] = 'Įmonės mokymai';
$string['useful'] = 'Naudingas';
$string['viewdetails'] = 'Išsamiau';
$string['viewinsight'] = 'Žiūrėti įžvalgą';
$string['viewinsightdetails'] = 'Žiūrėti išsamią įžvalgos informaciją';
$string['viewprediction'] = 'Peržiūrėti prognozės informaciją';
$string['washelpful'] = 'Ar tai buvo naudinga?';
