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
 * Strings for component 'qtype_numerical', language 'lt', version '4.5'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Priimtina paklaida';
$string['addmoreanswerblanks'] = 'Dar {no} tuščių atsakymų ruošiniai';
$string['addmoreunitblanks'] = 'Dar {no} tuščių vienetų ruošinių';
$string['answercolon'] = 'Atsakymas:';
$string['answererror'] = 'Paklaida';
$string['answermustbenumberorstar'] = 'Atsakymas turi būti skaičius, pavyzdžiui, -1,234 arba 3e8, arba \'*\'.';
$string['answerno'] = 'Atsakymas {$a}';
$string['decfractionofquestiongrade'] = 'kaip klausimo vertės dalis (0–1) atimta iš atsakymo vertės';
$string['decfractionofresponsegrade'] = 'kaip atsakymo vertės dalis (0–1) atimta iš atsakymo vertės';
$string['decimalformat'] = 'dešimtainis';
$string['editableunittext'] = 'teksto įvesties elementas';
$string['errornomultiplier'] = 'Turite nurodyti šio vieneto daugiklį.';
$string['errorrepeatedunit'] = 'Negali būti du vienetai tokiu pačiu pavadinimu.';
$string['geometric'] = 'Geometrinis';
$string['invalidnumber'] = 'Turite įvesti teisingą skaičių.';
$string['invalidnumbernounit'] = 'Turite įvesti teisingą skaičių. Atsakyme nenurodykite vieneto.';
$string['invalidnumericanswer'] = 'Vienas iš Jūsų įvestų atsakymų nėra tinkamas skaičius.';
$string['invalidnumerictolerance'] = 'Vienas iš įvestų nuokrypių, kuriuos įvedėte nėra tinkamas skaičius.';
$string['leftexample'] = 'KAIRĖJE kaip $1,00';
$string['manynumerical'] = 'Vienetai neprivalomi. Jei vienetai nurodyti - konvertuojama į Vienetai 1.';
$string['multiplier'] = 'daugiklis';
$string['nominal'] = 'Nominalas';
$string['noneditableunittext'] = 'NEREDAGUOJAMAS vieneto Nr. 1 tekstas';
$string['nonvalidcharactersinnumber'] = 'Skaičiuje yra NELEISTINŲ simbolių';
$string['notenoughanswers'] = 'Turite įvesti bent vieną atsakymą.';
$string['nounitdisplay'] = 'Nėra vienetų vertinimų';
$string['numericalmultiplier'] = 'Daugiklis';
$string['numericalmultiplier_help'] = 'Daugiklis yra koeficientas, iš kurio padauginamas teisingas skaitinis atsakymas. Pirmo vieneto (vieneto Nr. 1) numatytasis daugiklis yra 1. Taigi jei teisingas skaitinis atsakymas yra 5 500 ir 1 modulyje vienetą W nustote kaip daugiklį, kurio numatytoji reikšmė 1, teisingas atsakymas yra 5 500 W. Jei pridedate kW, kurio daugiklis 0,001, teisingas atsakymas bus 5,5 kW. Tai reiškia, kad atsakymai 5 500 W ir 5,5 kW bus pažymėti kaip teisingi. Atkreipkite dėmesį, kad priimta klaida taip pat dauginama, taigi leidžiama klaida 100 W taps klaida 0,1 kW.';
$string['oneunitshown'] = 'Vienetai 1 bus automatiškai rodomas prie atsakymo.';
$string['onlynumerical'] = 'Vienetai nenaudojami. Vertinamos TIK SKAITINĖS reikšmės.';
$string['pleaseenterananswer'] = 'Prašom įvesti atsakymą.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Įveskite atsakymą nenaudodami tūkstančių atskyrimo ženklo ({$a}).';
$string['pluginname'] = 'Skaitinis';
$string['pluginname_help'] = 'Iš besimokančiojo pusės, skaitmeninis atsakymas atrodo lygiai taip pat, kaip ir trumpo atsakymo klausimas. Skirtumas yra tas, kad skaitmeniniam atsakymui yra leidžiama turėti priėmimo klaidą. Tai leidžia fiksuotai reikšmių sričiai būti kaip vienu atsakymų. Pavyzdžiui, jei atsakymas yra 10 su priimama klaida 2, tai bet kuris skaičius tarp 8 ir 12 yra priimtinas kaip teisingas.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Įtraukiamas skaitinis klausimas';
$string['pluginnameediting'] = 'Redaguojamas skaitinis klausimas';
$string['pluginnamesummary'] = 'Galima pateikti skaitinį atsakymą (galimi vienetai), kuris vertinamas lyginant su įvairiais modelio atsakymais, galimos leistinos paklaidos.';
$string['privacy:metadata'] = 'Skaitinio klausimo tipo papildinys leidžia klausimų autoriams nustatyti numatytąsias parinktis kaip naudotojo nuostatas.';
$string['privacy:preference:defaultmark'] = 'Numatytasis nurodyto klausimo įvertinimas.';
$string['privacy:preference:multichoicedisplay'] = 'Nesvarbu, ar vienetai rodomi kaip teksto įvesties elementas, kelių pasirinkimų pasirinkimas ar iškrentantis meniu.';
$string['privacy:preference:penalty'] = 'Bauda už kiekvieną neteisingą bandymą, kai klausimai vykdomi naudojant „Interaktyvus su keliais bandymais“ arba „Adaptyvusis režimas“ elgseną.';
$string['privacy:preference:unitgradingtypes'] = 'Ar vieneto nuobauda taikoma kaip atsakymo balo dalis (0–1), ar klausimo balas.';
$string['privacy:preference:unitpenalty'] = 'Kokia atsakymo balo arba klausimo balo dalis (0–1) turėtų būti taikoma?';
$string['privacy:preference:unitrole'] = 'Nesvarbu, ar vienetas yra būtinas, neprivalomas, ar jo nesitikima.';
$string['privacy:preference:unitsleft'] = 'Ar vienetas rodomas kairėje (pvz., $, £), ar dešinėje (pvz., kg, km, cm).';
$string['relative'] = 'Reliatyvus';
$string['rightexample'] = 'dešinėje, pavyzdžiui, 1,00 cm arba 1,00 km.';
$string['selectunit'] = 'Pasirinkite vienetus.';
$string['selectunits'] = 'Pasirinkite vienetus';
$string['studentunitanswer'] = 'VIENETŲ ATSAKYMAS įvedamas kaip';
$string['tolerancetype'] = 'Nuokrypio tipas';
$string['unit'] = 'Vienetai';
$string['unitappliedpenalty'] = 'Į šiuos balus įtrauktos baudos už {$a} blogus vienetus.';
$string['unitchoice'] = 'keli pasirinkimai';
$string['unitedit'] = 'Redaguoti vienetus';
$string['unitgraded'] = 'Bus įvertinti SKAITINIS ATSAKYMAS ir VIENETO ATSAKYMAS';
$string['unithandling'] = 'Vienetų valdymas';
$string['unitincorrect'] = 'Nepateikėte teisingo vieneto.';
$string['unitmandatory'] = 'Privaloma';
$string['unitmandatory_help'] = '* Atsakymas bus vertinamas pagal įrašytą vienetą.

* Bus taikoma vieneto bauda, jei vieneto laukas bus paliktas tuščias';
$string['unitnotselected'] = 'Turite pasirinkti vienetus.';
$string['unitonerequired'] = 'Turite įvesti bent vieną vienetą';
$string['unitoptional'] = 'Pasirinktiniai vienetai';
$string['unitoptional_help'] = '* Jei vieneto laukas nėra tuščias, atsakymas bus vertinamas pagal šį vienetą. * Jei vienetas blogai įrašytas arba nežinomas, atsakymas bus laikomas netinkamu.';
$string['unitpenalty'] = 'Vieneto bauda';
$string['unitpenalty_help'] = 'Bauda taikoma, jei * kaip vieneto atsakymas nurodomas neapibrėžtas vieneto pavadinimas arba * vieneto pavadinimas įvedamas vietoj skaitinio atsakymo';
$string['unitposition'] = 'Vieneto padėtis';
$string['units'] = 'Vienetai';
$string['unitselect'] = 'iškrentantis meniu';
$string['unitx'] = 'Vienetas {no}';
$string['xmustbenumeric'] = '{$a} turi būti skaičius.';
$string['xmustnotbenumeric'] = '{$a} negali būti skaičius.';
$string['youmustenteramultiplierhere'] = 'Jūs čia turite įvesti daugiklį.';
