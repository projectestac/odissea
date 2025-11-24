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
 * Strings for component 'gradingform_rubric', language 'lt', version '4.5'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Pridėti kriterijų';
$string['additionalfeedback'] = 'Papildomas atsiliepimas';
$string['alwaysshowdefinition'] = 'Leisti naudotojams peržiūrėti rubriką (kitu atveju rubrika bus matoma tik po vertinimo)';
$string['backtoediting'] = 'Grįžti į redagavimą';
$string['confirmdeletecriterion'] = 'Ar jūs įsitikinęs kad norite pašalinti šį kriterijų?';
$string['confirmdeletelevel'] = 'Ar jūs įsitikinęs kad norite pašalinti šį lygi?';
$string['criterion'] = 'Kriterijus {$a}';
$string['criterionaddlevel'] = 'Pridėti lygį';
$string['criteriondelete'] = 'Pašalinti kriterijų';
$string['criterionduplicate'] = 'Dubliuoti kriterijų';
$string['criterionempty'] = 'Spustelėkite kriterijaus redagavimui';
$string['criterionmovedown'] = 'Perkelti žemyn';
$string['criterionmoveup'] = 'Perkelti aukštyn';
$string['criterionremark'] = 'Pažymėti kriterijų {$a->description}: {$a->remark}';
$string['definerubric'] = 'Apibrėžti rubriką';
$string['description'] = 'Aprašymas';
$string['enableremarks'] = 'Leisti vertintojui pridėti teksto pastabas kiekvienam kriterijui';
$string['err_mintwolevels'] = 'Kiekvienas kriterijus turi turėti bent du lygius';
$string['err_nocriteria'] = 'Rubrika turi turėti bent vieną kriterijų';
$string['err_nodefinition'] = 'Lygio apibrėžimas negali būti tuščias';
$string['err_nodescription'] = 'Kriterijaus apibrėžimas negali būti tuščias';
$string['err_novariations'] = 'Kriterijaus lygiai negali būti vertinami tuo pačiu taškų skaičiumi';
$string['err_scoreformat'] = 'Taškų skaičius kiekvienam lygiui turi būti sveikasis skaičius';
$string['err_totalscore'] = 'Didžiausias galimas balų skaičius, kai vertinama pagal rubriką, turi būti didesnis už 0';
$string['gradingof'] = '{$a} vertinimas';
$string['level'] = 'Lygio {$a->definition}, {$a->score} taškai.';
$string['leveldefinition'] = 'Lygio {$a} apibrėžimas';
$string['leveldelete'] = 'Pašalinti lygį {$a}';
$string['levelempty'] = 'Spustelėkite lygio redagavimui';
$string['levelsgroup'] = 'Lygių grupė';
$string['lockzeropoints'] = 'Apskaičiuoti įvertinimą, kurio minimalus balas yra minimalus pasiekiamas rubrikos balas';
$string['lockzeropoints_help'] = 'Šis nustatymas taikomas tik tuo atveju, jei kiekvieno kriterijaus minimalaus balų skaičiaus suma yra didesnė nei 0. Jei pažymėta, minimalus veiklos balas bus minimalus pasiekiamas rubrikos balas. Jei nepažymėsite, minimalus galimas rubrikos balas bus susietas su minimaliu veiklos įvertinimu (kuris yra 0, nebent naudojama skalė).';
$string['name'] = 'Pavadinimas';
$string['needregrademessage'] = 'Rubrikos aprašymas buvo pakeistas po to kai besimokantysis buvo įvertintas. Besimokantysis negali matyti šios rubrikos tol, kol nepažymėsite jos ir neatnaujinsite įvertinimo.';
$string['notset'] = 'Nenustatyta';
$string['pluginname'] = 'Rubrika';
$string['pointsvalue'] = '{$a} balai (-ų)';
$string['previewrubric'] = 'Peržiūrėti rubriką';
$string['privacy:metadata:criterionid'] = 'Konkretaus vertinamo kriterijaus identifikatorius.';
$string['privacy:metadata:fillingssummary'] = 'Saugo informaciją apie naudotojo įvertinimą, sukurtą pagal rubriką.';
$string['privacy:metadata:instanceid'] = 'Identifikatorius, susijęs su veiklos įvertinimu.';
$string['privacy:metadata:levelid'] = 'Rubrikoje gautas lygis.';
$string['privacy:metadata:remark'] = 'Pastabos, susijusios su kriterijumi rubrikos vertinime.';
$string['regrademessage1'] = 'Jūs žadate išsaugoti pakeitimus į rubriką, kuri jau buvo naudojama įvertinimui. Prašau nurodyti ar reikia jau esančius įvertinimus atnaujinti. jei nustatysite tai, rubrika bus slepiama nuo besimokančiųjų tol, kol jie bus įvertinti iš naujo.';
$string['regrademessage5'] = 'Jūs ketinate išsaugoti reikšmingus pokyčius rubrikoje, kuri jau yra naudojama vertinimui. Įvertinimų knygos reikšmė nepakis, bet rubrika bus paslėpta nuo besimokančiųjų kol jie bus įvertinti iš naujo.';
$string['regradeoption0'] = 'Nežymėti vertinimui iš naujo';
$string['regradeoption1'] = 'Žymėti vertinimui iš naujo';
$string['restoredfromdraft'] = 'Pastaba: Paskutinis bandymas įvertinti šį asmenį nebuvo tinkamai išsaugotas, todėl vertinimo juodraštis buvo atkurtas. Jei jūs norite atšaukti šios pakeitimus spauskite „Atšaukti“ mygtuką žemiau.';
$string['rubric'] = 'Rubrika';
$string['rubricmapping'] = 'Balas į įvertinimų atvaizdavimo taisykles';
$string['rubricmappingexplained'] = 'Mažiausias galimas šios rubrikos balas yra <b>{$a->minscore} balai (-ų)</b>. Jis bus konvertuojamas į minimalų veiklos įvertinimą (kuris yra 0, nebent naudojama skalė). Didžiausias <b>{$a->maxscore} balų</b> rezultatas bus konvertuotas į maksimalų įvertinimą. Tarpiniai balai bus atitinkamai konvertuojami.

Jei vertinimui naudojama skalė, rezultatas bus suapvalintas ir konvertuojamas į skalės elementus, tarsi jie būtų sveikieji nuoseklūs skaičiai.

Šis įvertinimo skaičiavimas gali būti pakeistas redaguojant formą ir pažymint langelį „Apskaičiuoti įvertį turint mažiausią minimalų įmanomą rubrikos balą“.';
$string['rubricnotcompleted'] = 'Prašau pasirinkti ką nors kiekvienam kriterijui';
$string['rubricoptions'] = 'Rubrikos nustatymai';
$string['rubricstatus'] = 'Dabartinės rubrikos statusas';
$string['save'] = 'Išsaugoti';
$string['saverubric'] = 'Išsaugoti rubriką ir parengti ją';
$string['saverubricdraft'] = 'Išsaugoti kaip juodraštį';
$string['scoreinputforlevel'] = 'Balų skaičius įvestas lygiui {$a}';
$string['scorepostfix'] = '{$a} balai (-ų)';
$string['showdescriptionstudent'] = 'Rodyti rubrikos aprašymą tiems, kurie yra vertinami';
$string['showdescriptionteacher'] = 'Rodyti rubrikos aprašymą per įvertinimą';
$string['showremarksstudent'] = 'Rodyti pastabas tiems kurie yra vertinami';
$string['showscorestudent'] = 'Rodyti taškus kiekvienam lygiui tiems kurie yra vertinami';
$string['showscoreteacher'] = 'Rodyti taškus kiekvienam lygiui per vertinimą';
$string['sortlevelsasc'] = 'Rūšiavimo tvarka lygiams:';
$string['sortlevelsasc0'] = 'Mažėjimo tvarka pagal taškus';
$string['sortlevelsasc1'] = 'Didėjimo tvarka pagal taškus';
$string['zerolevelsabsent'] = 'Įspėjimas: Minimalus galimas įvertis šiai rubrikai nėra 0; tai gali duoti nenumatytą įvertinimą šiam moduliui. Norėdami to išvengti, kiekvienam kriterijui reikia pridėti lygį su 0 taškų. <br>
Šis įspėjimas gali būti ignoruojamas, jei įvertinimui yra naudojama skalė ir rubrikoje minimalaus lygio taškai atitinka minimalią skalės taškus.';
