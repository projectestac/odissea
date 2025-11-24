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
 * Strings for component 'tool_behat', language 'lt', version '4.5'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Šis administravimo įrankis padeda kūrėjams ir testų autoriams kurti .feature failus, apibūdinančius Moodle funkcijas, ir juos paleisti automatiškai. Toliau pateikiami žingsnių apibrėžimai, kuriuos galima naudoti .feature failuose.';
$string['allavailablesteps'] = 'Visi galimi žingsnių apibrėžimai';
$string['errorbehatcommand'] = 'Klaida vykdant behat CLI komandą. Pabandykite rankiniu būdu paleisti „{$a} --help“ iš CLI, kad sužinotumėte daugiau apie problemą.';
$string['errorcomposer'] = '„Composer“ priklausomybės neįdiegtos.';
$string['errordataroot'] = '$CFG->behat_dataroot nenustatytas arba neteisingas.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix ir $CFG->behat_wwwroot reikia nustatyti config.php.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix ir $CFG->behat_wwwroot reikšmės turi skirtis nuo $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot ir $CFG- >phpunit_prefix reikšmės.<br/>Arba, jei $CFG->behat_prefix yra toks pats, $CFG->behat_dbname arba $CFG->behat_dbhost turi skirtis nuo $CFG->phpunit_dbname ir $CFG->phpunit_dbhost ir $ CFG->dbname ir $CFG->dbhost.';
$string['fieldvalueargument'] = 'Lauko vertės argumentai';
$string['fieldvalueargument_help'] = 'Šis argumentas turėtų būti užbaigtas lauko reikšme. Yra daug laukų tipų, įskaitant paprastus, pvz., žymimuosius laukelius, pasirinkimus arba teksto sritis, arba sudėtingus, pvz., datos parinkiklius. Jei reikia išsamios informacijos apie numatomas lauko vertes, žr. dev dokumentaciją <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a>.';
$string['giveninfo'] = 'Duota. Aplinkos nustatymo procesai';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Skaitykite {$a}, kad gautumėte informacijos apie diegimą ir testavimų vykdymą';
$string['newstepsinfo'] = 'Skaitykite {$a}, kad gautumėte informacijos apie tai, kaip pridėti naujų žingsnių apibrėžimų';
$string['newtestsinfo'] = 'Skaitykite {$a}, kad gautumėte informacijos apie tai, kaip rašyti naujus testavimus';
$string['nostepsdefinitions'] = 'Nėra šį filtrą atitinkančių žingsnių apibrėžimų';
$string['pluginname'] = 'Priėmimo bandymas';
$string['privacy:metadata'] = 'Priėmimo bandymo papildinys nesaugo jokių asmens duomenų.';
$string['stepsdefinitionscomponent'] = 'Plotas';
$string['stepsdefinitionscontains'] = 'Sudėtyje yra';
$string['stepsdefinitionsfilters'] = 'Žingsnių apibrėžimai';
$string['stepsdefinitionstype'] = 'Tipas';
$string['theninfo'] = 'Tada. Patikrinimai, siekiant užtikrinti, kad rezultatai būtų tokie, kokių tikimasi';
$string['unknownexceptioninfo'] = 'Kilo problemų dėl "Selenium" arba jūsų naršyklės. Įsitikinkite, kad naudojate naujausią "Selenium" versiją. Klaida:';
$string['viewsteps'] = 'Filtras';
$string['warndirrootconfigfound'] = 'Konfigūracijos failas rastas adresu {$a}. Šis failas nėra automatiškai atnaujinamas ir gali pasenti. Rekomenduojame pašalinti šį failą.';
$string['wheninfo'] = 'Kada. Veiksmas, kuris provokuoja įvykį';
$string['wrongbehatsetup'] = 'Kažkas negerai su veikimo nustatymo sąranka, todėl veiksmų apibrėžimai negali būti pateikiami sąraše: <b>{$a->errormsg}</b><br/><br/>Patikrinkite:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix ir $CFG->behat_wwwroot yra nustatyti config.php su skirtingomis reikšmėmis nei $CFG->dataroot, $CFG->prefix ir $CFG->wwwroot.</ li>
<li>Paleidote „{$a->behatinit}“ iš savo Moodle šakninio katalogo.</li>
<li>Priklausomybės įdiegtos tiekėjo/, o failas {$a->behatcommand} turi vykdymo leidimus.</li></ul>';
