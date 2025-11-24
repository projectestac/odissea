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
 * Strings for component 'condition', language 'lt', version '4.5'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Įtraukite {no} veiklos sąlygas į formą';
$string['addgrades'] = 'Įtraukite {no} įverčio sąlygas į formą';
$string['adduserfields'] = 'Įtraukti {no} vartotojo lauko sąlygas į formą';
$string['availabilityconditions'] = 'Apriboti prieigą';
$string['availablefrom'] = 'Leisti prieigą nuo';
$string['availableuntil'] = 'Leisti prieigą iki';
$string['badavailabledates'] = 'Klaidingos datos. Jei nustatote abi datas, data Leisti prieigą nuo turi būti ankstesnė nei data Leisti prieigą iki.';
$string['badgradelimits'] = 'Jeigu jūs nustatysite abu, viršutinį ir apatinį vertinimo limitus, viršutinis limitas privalo būti didesnis už apatinį limitą.';
$string['completion_complete'] = 'turi būti pažymėta kaip užbaigta';
$string['completion_fail'] = 'turi būti užbaigta su neišlaikytų kursų įverčiu';
$string['completion_incomplete'] = 'negali būti pažymėta kaip užbaigta';
$string['completion_pass'] = 'turi būti užbaigta su išlaikytų kursų įverčiu';
$string['completioncondition'] = 'Veiklos užbaigimo sąlyga';
$string['completioncondition_help'] = 'Šiuo parametru nustatomos bet kokios veiklos užbaigimo sąlygos, kurias reikia išpildyti, kad būtų galima pasiekti veiklą. Atminkite, kad užbaigimo sekimą reikia nustatyti prieš nustatant veiklos užbaigimo sąlygas. Jei reikia, galite nustatyti kelių veiklų užbaigimo sąlygas. Jei nustatėte kelias užbaigimo sąlygas, prieiga prie veiklos bus leidžiama tik išpildžius jas VISAS.';
$string['configenableavailability'] = 'Jei įjungta, galima nustatyti sąlygas (pagrįstas data, įverčiu arba užbaigimu), kurios valdys veiklos pasiekiamumą.';
$string['contains'] = 'turi';
$string['doesnotcontain'] = 'neturi';
$string['enableavailability'] = 'Įjungti sąlyginę prieigą';
$string['endswith'] = 'baigiasi';
$string['grade_atleast'] = 'turi būti bent';
$string['grade_upto'] = 'ir mažiau nei';
$string['gradecondition'] = 'Įverčio sąlyga';
$string['gradecondition_help'] = 'Šis parametras nustato bet kokias įverčio sąlygas, kurias reikia išpildyti, kad būtų galima pasiekti veiklą. Jei reikia galima nustatyti kelias įverčių sąlygas. Jei pasirenkamos kelios įverčių sąlygos, veiklą bus galima pasiekti tik išpildžius jas VISAS.';
$string['gradeconditionsection'] = 'Įvertinimo sąlyga';
$string['gradeitembutnolimits'] = 'Jūs privalote įvesti viršutinį ar apatinį limitą, arba abu.';
$string['gradelimitsbutnoitem'] = 'Jūs privalote pasirinkti įvertinimo elementą.';
$string['gradesmustbenumeric'] = 'Mažiausias ir didžiausias įvertinimai turi būti skaitiniai (arba tušti).';
$string['isempty'] = 'yra tuščias';
$string['isequalto'] = 'yra lygus';
$string['isnotempty'] = 'nėra tuščias';
$string['none'] = '(nėra)';
$string['notavailableyet'] = 'Dar negalima';
$string['requires_completion_0'] = 'Negalima, jei veikla <strong>{$a}</strong> nėra nebaigta.';
$string['requires_completion_1'] = 'Neprieinama kol užduotis <strong>{$a}</strong> nėra atlikta.';
$string['requires_completion_2'] = 'Neprieinama kol užduotis <strong>{$a}</strong> nėra atlikta ir teigiamai įvertinta.';
$string['requires_completion_3'] = 'Negalima, jei veikla <strong>{$a}</strong> nėra užbaigta ir neišlaikyta.';
$string['requires_date'] = 'Galima nuo {$a}.';
$string['requires_date_before'] = 'Galima iki {$a}.';
$string['requires_date_both'] = 'Galima nuo {$a->from} iki {$a->until}.';
$string['requires_date_both_single_day'] = 'Pasiekiamas {$a}.';
$string['requires_grade_any'] = 'Neprieinama kol užduotis <strong>{$a}</strong> nėra teigiamai įvertinta.';
$string['requires_grade_max'] = 'Negalima, jei negavote atitinkamo balo už <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Neprieinama kol užduotis <strong>{$a}</strong> nėra teigiamai įvertinta.';
$string['requires_grade_range'] = 'Negalima, jei negavote tam tikro balo už <strong>{$a}</strong>.';
$string['showavailability_show'] = 'Rodyti papilkintą veiklą ir apribojimo informaciją';
$string['startswith'] = 'prasideda';
$string['userfield'] = 'Vartotojo laukas';
$string['userfield_help'] = 'Jūs galite apriboti prieigą, remiantis bet kuriuo vartotojo profilio lauku.';
