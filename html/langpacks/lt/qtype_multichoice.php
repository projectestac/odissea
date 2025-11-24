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
 * Strings for component 'qtype_multichoice', language 'lt', version '4.5'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Vienas arba keli atsakymai';
$string['answerhowmany_desc'] = 'Nurodoma ar numatyta parinktis turėtų būti vienas atsakymas (t. y. akutės mygtukai) ar keli atsakymai (t. y. žymimieji langeliai).';
$string['answernumbering'] = 'Pasirinkimų numeracija';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'Numatytasis numeravimo stilius';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Be numeravimo';
$string['answersingleno'] = 'Leidžiami keli atsakymai';
$string['answersingleyes'] = 'Tik vienas atsakymas';
$string['choiceno'] = 'Pasirinkimas {$a}';
$string['choices'] = 'Galimi pasirinkimai';
$string['clearchoice'] = 'Valyti mano pasirinkimą';
$string['clozeaid'] = 'Įveskite trūkstamą žodį';
$string['correctansweris'] = 'Teisingas atsakymas yra: {$a}';
$string['correctanswersare'] = 'Teisingas atsakymas yra: {$a}';
$string['correctfeedback'] = 'Už kiekvieną teisingą atsakymą';
$string['deletedchoice'] = 'Pasirinkimas buvo ištrintas po to kai bandymas buvo pradėtas.';
$string['errfractionsaddwrong'] = 'Jūsų pasirinkti teigiami įvertinimai nesudaro 100 %<br />Jie sudaro {$a}%';
$string['errfractionsnomax'] = 'Vienas iš pasirinkimų turi sudaryti 100 %, tik taip<br /> galima gauti visą šio klausimo įvertį.';
$string['errgradesetanswerblank'] = 'Įvertinimas nustatytas, bet atsakymas tuščias';
$string['feedback'] = 'Atsiliepimas';
$string['fillouttwochoices'] = 'Turite užpildyti mažiausiai du pasirinkimus. Tušti pasirinkimai nebus naudojami.';
$string['fractionsaddwrong'] = 'Jūsų pasirinkti teigiami įvertinimai nesudaro 100 %<br />Jie sudaro iki {$a} %<br />Ar norite grįžti ir pašalinti šią problemą?';
$string['fractionsnomax'] = 'Vienas iš pasirinkimų turėtų būti 100 %, kad būtų <br />įmanoma gauti visą šio klausimo įvertį.<br />Ar norite grįžti ir pašalinti šią problemą?';
$string['incorrectfeedback'] = 'Už kiekvieną neteisingą atsakymą';
$string['notenoughanswers'] = 'Šio tipo klausimui reikia bent {$a} pasirinkimų';
$string['overallcorrectfeedback'] = 'Atsiliepimas apie kiekvieną teisingą atsakymą';
$string['overallfeedback'] = 'Bendras atsiliepimas';
$string['overallincorrectfeedback'] = 'Atsiliepimas apie kiekvieną neteisingą atsakymą';
$string['overallpartiallycorrectfeedback'] = 'Atsiliepimas apie kiekvieną iš dalies teisingą atsakymą';
$string['partiallycorrectfeedback'] = 'Už kiekvieną iš dalies teisingą atsakymą';
$string['pleaseselectananswer'] = 'Pasirinkite atsakymą.';
$string['pleaseselectatleastoneanswer'] = 'Pasirinkite bent vieną atsakymą.';
$string['pluginname'] = 'Keli pasirinkimai';
$string['pluginname_help'] = 'Atsakydamas į klausimą (kuriame gali būti paveikslėlis), atsakantysis renkasi iš kelių atsakymų. Yra du tipai klausimų su keliais pasirinkimais - vieno atsakymo ir kelių atsakymų.';
$string['pluginname_link'] = 'question/type/multichoice';
$string['pluginnameadding'] = 'Įtraukiamas kelių pasirinkimų klausimas';
$string['pluginnameediting'] = 'Redaguoti kelių pasirinkimų klausimą';
$string['pluginnamesummary'] = 'Leidžia pasirinkti vieną ar kelis atsakymus iš iš anksto nustatytų atsakymo variantų.';
$string['privacy:metadata'] = 'Kelių pasirinkimų klausimo tipo papildinys leidžia klausimų autoriams nustatyti numatytąsias parinktis kaip naudotojo nuostatas.';
$string['privacy:preference:answernumbering'] = 'Kokį numeravimo stilių naudoti („1, 2, 3, ...“, „a, b, c, ...“ ar kt.).';
$string['privacy:preference:defaultmark'] = 'Numatytasis nurodyto klausimo įvertinimas.';
$string['privacy:preference:penalty'] = 'Bauda už kiekvieną neteisingą bandymą, kai klausimai vykdomi naudojant „Interaktyvus su keliais bandymais“ arba „Adaptyvusis režimas“ elgseną.';
$string['privacy:preference:showstandardinstruction'] = 'Ar rodomos standartinės instrukcijos.';
$string['privacy:preference:shuffleanswers'] = 'Ar atsakymai turi būti automatiškai maišomi.';
$string['privacy:preference:single'] = 'Nesvarbu, ar atsakymas yra vienas su parinkties akute, ar keli su žymimaisiais langeliais.';
$string['regradeissuenumchoiceschanged'] = 'Pasikeitė klausimo pasirinkimų skaičius.';
$string['selectmulti'] = 'Pasirinkite vieną ar daugiau:';
$string['selectone'] = 'Pasirinkite vieną:';
$string['showstandardinstruction'] = 'Rodyti pasirinkimų instrukcijas';
$string['showstandardinstruction_desc'] = 'Ar prieš atsakymus su keliais pasirinkimais rodyti instrukcijas „Pasirinkti vieną:“ ar „Pasirinkti vieną ar daugiau:“.';
$string['showstandardinstruction_help'] = 'Ar prieš atsakymus su keliais pasirinkimais rodyti instrukcijas „Pasirinkti vieną:“ ar „Pasirinkti vieną ar daugiau:“. Jei išjungta, galite įtraukti instrukcijas į klausimo tekstą.';
$string['shuffleanswers'] = 'Maišyti pasirinkimus?';
$string['shuffleanswers_desc'] = 'Parinktis nurodo ar pagal nutylėjimą turėtų būti atsitiktinai maišomi atsakymo pasirinkimai kiekvienam bandymui.';
$string['shuffleanswers_help'] = 'Jei įjungta maišymo funkcija, atsakymų tvarka per kiekvieną bandymą sumaišoma atsitiktine tvarka. Taip pat turi būti įjungtas testo parametras „Maišyti klausimuose“.';
$string['singleanswer'] = 'Pasirinkite vieną atsakymą.';
$string['toomanyselected'] = 'Pasirinkote per daug atsakymų.';
