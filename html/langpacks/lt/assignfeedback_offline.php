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
 * Strings for component 'assignfeedback_offline', language 'lt', version '4.5'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Patvirtinti įvertinimų įkėlimą';
$string['default'] = 'Įjungtas pagal nutylėjimą';
$string['default_help'] = 'Jei nustatyta, įvertinimas neprisijungus naudojant darbalapius pagal numatytuosius nustatymus bus įgalintas visoms naujoms užduotims.';
$string['downloadgrades'] = 'Parsisiųsti vertinimų darbalapį';
$string['enabled'] = 'Vertinimas neprisijungus';
$string['enabled_help'] = 'Jei įjungta, dėstytojas, vertindamas užduotis, galės atsisiųsti ir įkelti darbalapį su besimokančiojo įvertinimais.';
$string['feedbackupdate'] = 'Nustatyti „{$a->student}“ lauką „{$a->field}“ į „{$a->text}“';
$string['gradelockedingradebook'] = 'Įvertinimas buvo užrakintas įvertinimų knygelėje {$a}';
$string['graderecentlymodified'] = 'Įvertinimas Moodle buvo pakeistas ne seniau nei {$a} įvertinimo darbalapyje';
$string['gradesfile'] = 'Vertinimų darbalapis (csv formatas)';
$string['gradesfile_help'] = 'Vertinimo darbalapis su pakeistais įvertinimais. Šis failas turi būti CSV failas su UTF-8 koduote, atsisiųstas iš užduoties, su besimokančiojo įvertinimo ir identifikatoriaus stulpeliais.';
$string['gradeupdate'] = 'Nustatyti įvertinimą {$a->student} į {$a->grade}';
$string['ignoremodified'] = 'Leisti atnaujinti įrašus, kurie buvo ansčiau modifikuoti Moodle negu skaičiuoklėje.';
$string['ignoremodified_help'] = 'Kai įvertinimo darbalapis atsisiunčiamas iš Moodle, jame yra kiekvieno įverčio paskutinio modifikavimo data. Jei kuris nors iš įverčių atnaujinamas Moodle po šio darbalapio atsisiuntimo, pagal numatytuosius nustatymus Moodle atsisakys perrašyti šią atnaujintą informaciją importuojant įverčius. Pasirinkus šią parinktį, Moodle išjungs šį saugos patikrinimą ir gali būti, kad keli vertintojai perrašys vienas kito įverčius.';
$string['importgrades'] = 'Patvirtinti pakeitimus vertinimų darbalapyje';
$string['invalidgradeimport'] = 'MOODLE negali perskaityti įkeliamo failo. Patikrinkite, ar failo formatas tikrai yra kableliais atskirtos reikšmės (.csv)  ir bandykite dar kartą.';
$string['nochanges'] = 'Įkeltame faile nėra atnaujintų įvertinimų';
$string['offlinegradingworksheet'] = 'Įvertinimai';
$string['pluginname'] = 'Vertinimas neprisijungus';
$string['privacy:nullproviderreason'] = 'Šis papildinys neturi duomenų bazės, kurioje būtų saugoma naudotojo informacija. Ji naudoja tik API mod_assign, kad padėtų rodyti vertinimo sąsają.';
$string['processgrades'] = 'Įkelti įvertinimus';
$string['skiprecord'] = 'Praleisti įrašą';
$string['updatedgrades'] = 'Atnaujinti <strong>{$a->gradeupdatescount}</strong> įvertinimai ir <strong>{$a->feedbackupdatescount}</strong> atsiliepimai.';
$string['updaterecord'] = 'Atnaujinti įrašą';
$string['uploadgrades'] = 'Įkelti įvertinimų failą';
