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
 * Strings for component 'qtype_calculated', language 'lt', version '4.5'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Įtraukti elementą';
$string['addmoreanswerblanks'] = 'Įtraukti kitą tuščią atsakymo ruošinį.';
$string['addsets'] = 'Įtraukti rinkinį (-ius)';
$string['answerdisplay'] = 'Atsakymo rodymas';
$string['answerformula'] = 'Atsakymo {$a} formulė';
$string['answerhdr'] = 'Atsakymas';
$string['answerstoleranceparam'] = 'Leistinų atsakymo nuokrypių parametrai';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Bet kokia reikšmė';
$string['atleastoneanswer'] = 'Turite pateikti bent vieną atsakymą.';
$string['atleastonerealdataset'] = 'Klausimo tekste turi būti bent vienas tikras duomenų rinkinys';
$string['atleastonewildcard'] = 'Atsakymo formulėje arba klausimo tekste turi būti bent vienas pakaitos simbolis';
$string['calcdistribution'] = 'Paskirstymas';
$string['calclength'] = 'Dešimtainės skiltys';
$string['calcmax'] = 'Daugiausia';
$string['calcmin'] = 'Mažiausia';
$string['choosedatasetproperties'] = 'Pasirinkti pakaitos simbolių duomenų rinkinio ypatybes';
$string['choosedatasetproperties_help'] = 'Duomenų rinkinys yra reikšmių, įterpiamų vietoj pakaitos simbolio, rinkinys. Galima sukurti asmeninį duomenų rinkinį, skirtą konkrečiam klausimui, arba bendrai naudojamą duomenų rinkinį, skirtą ir kitiems tos kategorijos apskaičiavimo klausimams.';
$string['correctanswerformula'] = 'Teisingo atsakymo formulė';
$string['correctanswershows'] = 'Teisingas atsakymas rodo';
$string['correctanswershowsformat'] = 'Formatas';
$string['correctfeedback'] = 'Už kiekvieną teisingą atsakymą';
$string['dataitemdefined'] = 'galima su jau sugeneruotomis skaitinėmis reikšmėmis ({$a})';
$string['datasetrole'] = 'Pakaitos simboliai <strong>{x..}</strong> bus pakeisti skaitinėmis reikšmėmis iš atitinkamo duomenų rinkinio';
$string['decimals'] = 'su {$a}';
$string['deleteitem'] = 'Naikinti elementą';
$string['deletelastitem'] = 'Naikinti paskutinį elementą';
$string['distributionoption'] = 'Pasirinkti paskirstymo parinktį';
$string['editdatasets'] = 'Redaguoti pakaitos simbolių duomenų rinkinius';
$string['editdatasets_help'] = 'Pakaitos simbolių reikšmės gali būti kuriamos į kiekvieną pakaitos simbolio lauką įvedant skaičių ir spustelint įtraukimo mygtuką. Jei norite automatiškai sugeneruoti 10 ar daugiau reikšmių, prieš spausdami įtraukimo mygtuką pasirinkite, kiek reikšmių norėsite sukurti. Vienodas paskirstymas reiškia, kad bet kuri ribų neviršijanti reikšmė turėtų būti sugeneruota tiek pat kartų kiek kitos. „Loguniform“ paskirstymas reiškia, kad labiau tikėtinos reikšmės, artimesnės žemesnei ribai.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'bus naudojamas jau esamas bendrai naudojamas duomenų rinkinys';
$string['existingcategory2'] = 'failas iš jau esamo failų rinkinio, kuriuos jau naudoja kiti šios kategorijos klausimai';
$string['existingcategory3'] = 'saitas iš jau esamo saitų rinkinio, kuriuos jau naudoja kiti šios kategorijos klausimai';
$string['forceregeneration'] = 'reikalauti pakartotinai generuoti';
$string['forceregenerationall'] = 'priverstinis pakartotinis visų pakaitos simbolių regeneravimas';
$string['forceregenerationshared'] = 'priverstinis pakartotinis ne bendrai naudojamų pakaitos simbolių regeneravimas';
$string['functiontakesatleasttwo'] = 'Funkcija {$a} turi turėti bent du argumentus';
$string['functiontakesnoargs'] = 'Funkcija {$a} nepriima jokių argumentų';
$string['functiontakesonearg'] = 'Funkcija {$a} turi turėti tik vieną argumentą';
$string['functiontakesoneortwoargs'] = 'Funkcija {$a} turi turėti vieną arba du argumentus';
$string['functiontakestwoargs'] = 'Funkcija {$a} turi turėti du argumentus';
$string['generatevalue'] = 'Generuoti naują reikšmę tarp';
$string['getnextnow'] = 'Gauti naują „Įtrauktiną elementą“ dabar';
$string['hexanotallowed'] = 'Duomenų rinkinio <strong>{$a->name}</strong> šešioliktainio formato reikšmė $a->neleidžiama';
$string['illegalformulasyntax'] = 'Draudžiama formulės sintaksė prasideda su \'{$a}';
$string['incorrectfeedback'] = 'Už kiekvieną neteisingą atsakymą';
$string['itemno'] = 'Elementas {$a}';
$string['itemscount'] = 'Elementų<br />skaičius';
$string['itemtoadd'] = 'Įtrauktinas elementas';
$string['keptcategory1'] = 'bus naudojamas tas pats bendrai naudojamas duomenų rinkinys kaip ir anksčiau';
$string['keptcategory2'] = 'failas iš tos pačios pakartotinai naudojamo failų rinkinio kategorijos kaip anksčiau';
$string['keptcategory3'] = 'saitas iš tos pačios pakartotinai naudojamo saitų rinkinio kategorijos kaip anksčiau';
$string['keptlocal1'] = 'bus naudojami tas pats privatus duomenų rinkinys kaip ir anksčiau';
$string['keptlocal2'] = 'failas iš to paties klausimo privataus failų rinkinio kaip anksčiau';
$string['keptlocal3'] = 'saitas iš tos pačios klausimų privataus saitų rinkinio kategorijos kaip anksčiau';
$string['lengthoption'] = 'Pasirinkite ilgio parinktį';
$string['loguniform'] = 'Prisijungimo forma';
$string['loguniformbit'] = 'skaitmenys iš prisijungimo formos paskirstymo';
$string['makecopynextpage'] = 'Kitas puslapis (naujas klausimas)';
$string['mandatoryhdr'] = 'Privalomi pakaitos simboliai yra atsakymuose';
$string['max'] = 'Didžiausias';
$string['min'] = 'Mažiausias';
$string['minmax'] = 'Reikšmių intervalas';
$string['missingformula'] = 'Trūksta formulės';
$string['missingname'] = 'Trūksta klausimo pavadinimo';
$string['missingquestiontext'] = 'Trūksta klausimo teksto';
$string['mustenteraformulaorstar'] = 'Turite įvesti formulę arba \'*';
$string['newcategory1'] = 'bus naudojamas naujas bendrai naudojamas duomenų rinkinys';
$string['newcategory2'] = 'failas iš jau naujo failų rinkinio, kurį gali naudoti kiti šios kategorijos klausimai';
$string['newcategory3'] = 'saitas iš jau naujo saitų rinkinio, kurį gali naudoti kiti šios kategorijos klausimai';
$string['newlocal1'] = 'bus naudojamas naujas privatus duomenų rinkinys';
$string['newlocal2'] = 'failas iš naujo failų rinkinio, kurį naudos tik šis klausimas';
$string['newlocal3'] = 'saitas iš naujo saitų rinkinio, kurį naudos tik šis klausimas';
$string['newsetwildcardvalues'] = 'naujas pakaitos simbolio (-ių) reikšmių rinkinys (-iai)';
$string['nextitemtoadd'] = 'Kitas „Įtrauktinas elementas“';
$string['nextpage'] = 'Kitas puslapis';
$string['nocoherencequestionsdatyasetcategory'] = 'Klausimo, kurio ID {$a->qid}, kategorijos ID {$a->qcat} nesutampa su bendrai naudojamo pakaitos simbolio {$a->name} kategorijos ID {$a->sharedcat}. Redaguokite klausimą.';
$string['nocommaallowed'] = ', negalima naudoti, naudoti. kaip 0.013 arba 1.3e-2';
$string['nodataset'] = 'nieko – tai nėra pakaitos simbolis';
$string['nosharedwildcard'] = 'Šioje kategorijoje nėra bendrai naudojamų pakaitos simbolių';
$string['notvalidnumber'] = 'Pakaitos simbolio reikšmė nėra leistinas skaičius';
$string['oneanswertrueansweroutsidelimits'] = 'Bent vienas teisingas atsakymas nepatenka į teisingų reikšmių ribas.<br />Modifikuokite atsakymo leistinų nuokrypių parametrus, kurie prieinami kaip Išplėstiniai parametrai.';
$string['param'] = 'Parametras {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Už kiekvieną iš dalies teisingą atsakymą';
$string['pluginname'] = 'Skaičiavimo';
$string['pluginname_help'] = 'Apskaičiuoti klausimai įgalina sukurti individualius numeravimo klausimus su pakaita laužtiniuose skliaustuose kas yra pakaitalas individualioms reikšmėms kai yra vykdoma apklausa. Pvz.: "Koks yra stačiakampio plotas kai ilgis {l} ir plotis {w}?" būtų teisingas atsakymas formulė "{l} * {w} (kur * yra daugyba).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Įtraukiamas Skaičiavimo klausimas';
$string['pluginnameediting'] = 'Redaguoti suskaičiuojamą klausimą';
$string['pluginnamesummary'] = 'Apskaičiuoti klausimai yra kaip sunumeruoti klausimai, bet su numeriais parinktais atsitiktinai iš aibės kada buvo daroma apklausa.';
$string['possiblehdr'] = 'Galimi pakaitos simboliai yra tik klausimo tekste';
$string['privacy:metadata'] = 'Skaičiavimo klausimo tipo papildinys nesaugo jokių asmeninių duomenų.';
$string['questiondatasets'] = 'Klausimo duomenų rinkiniai';
$string['questiondatasets_help'] = 'Klausimo pakaitos simbolių duomenų rinkiniai, kurie bus naudojami atskiruose klausimuose';
$string['questionstoredname'] = 'Išsaugotas klausimo pavadinimas';
$string['replacewithrandom'] = 'Pakeisti atsitiktine reikšme';
$string['reuseifpossible'] = 'jei galima, pakartotinai naudoti ankstesnę reikšmę';
$string['setno'] = 'Rinkinys {$a}';
$string['setwildcardvalues'] = 'pakaitos simbolio (-ių) reikšmių rinkinys (-iai)';
$string['sharedwildcard'] = 'Bendrai naudojamas pakaitos simbolis <strong>{$a}</strong>';
$string['sharedwildcardname'] = 'Bendrai naudojamas pakaitos simbolis';
$string['sharedwildcards'] = 'Bendrai naudojami pakaitos simboliai';
$string['showitems'] = 'Rodyti';
$string['significantfigures'] = 'su {$a}';
$string['significantfiguresformat'] = 'reikšminiai skaitmenys';
$string['synchronize'] = 'Sinchronizuoti duomenis iš bendrinamų duomenų rinkinių su kitais testo klausimais';
$string['synchronizeno'] = 'Nesinchronizuoti';
$string['synchronizeyes'] = 'Sinchronizuoti';
$string['synchronizeyesdisplay'] = 'Sinchronizuoti ir rodyti bendrinamų duomenų rinkinių pavadinimą kaip klausimo pavadinimo priešvardį';
$string['tolerance'] = 'Leistinas nuokrypis ±';
$string['tolerancetype'] = 'Tipas';
$string['trueanswerinsidelimits'] = 'Teisingas atsakymas: {$a->correct} patenka į teisingų reikšmių ribas {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">KLAIDA Teisingas atsakymas: {$a->correct} nepatenka į teisingų reikšmių ribas {$a->true}</span>';
$string['uniform'] = 'Vienodas';
$string['uniformbit'] = 'skaitmenys iš vienodo paskirstymo';
$string['unsupportedformulafunction'] = 'Funkcija {$a} nepalaikoma';
$string['updatecategory'] = 'Atnaujinti kategoriją';
$string['updatedatasetparam'] = 'Atnaujinti duomenų rinkinio parametrus';
$string['updatetolerancesparam'] = 'Atnaujinti šio atsakymo leistino nuokrypio parametrus';
$string['updatewildcardvalues'] = 'Atnaujinti pakaitos simbolio (-ių) reikšmes';
$string['useadvance'] = 'Naudoti išplėstinės informacijos mygtuką klaidoms peržiūrėti';
$string['usedinquestion'] = 'Naudojama klausime';
$string['wildcard'] = 'Pakaitos simbolis <strong>{$a}</strong>';
$string['wildcardparam'] = 'Pakaitos simbolio parametrai, naudoti reikšmėms generuoti';
$string['wildcardrole'] = 'Pakaitos simboliai <strong>{x..}</strong> bus pakeisti skaitinėmis reikšmėmis iš sugeneruotų reikšmių';
$string['wildcards'] = 'Pakaitos simboliai {a}...{z}';
$string['wildcardvalues'] = 'Pakaitos simbolio (-ių) reikšmės';
$string['wildcardvaluesgenerated'] = 'Pakaitos simbolio (-ių) reikšmės sugeneruotos';
$string['youmustaddatleastoneitem'] = 'Turite įtraukti bent vieną duomenų rinkinio elementą, kad galėtumėte įrašyti šį klausimą.';
$string['youmustaddatleastonevalue'] = 'Turite įtraukti bent vieną pakaitos simbolio (-ių) rinkinio elementą, kad galėtumėte įrašyti šį klausimą.';
$string['zerosignificantfiguresnotallowed'] = 'Teisingas atsakymas negali turėti nulį ženklų po kablelio!';
