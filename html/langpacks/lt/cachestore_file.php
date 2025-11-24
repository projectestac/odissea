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
 * Strings for component 'cachestore_file', language 'lt', version '4.5'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Asinchroniškai išvalyti katalogą';
$string['asyncpurge_help'] = 'Jei įjungta, naujas katalogas sukuriamas su talpyklos peržiūra, o senasis katalogas bus ištrintas asinchroniškai atliekant suplanuotą užduotį.';
$string['autocreate'] = 'Automatiškai sukurti katalogą';
$string['autocreate_help'] = 'Jei įjungta, kelyje nurodytas katalogas bus automatiškai sukurtas, jei jo dar nėra.';
$string['lockwait'] = 'Maksimalus užrakto laukimo laikas';
$string['lockwait_help'] = 'Maksimalus laikas sekundėmis, per kurį reikia laukti išskirtinio užrakto prieš nuskaitant ar rašant talpyklos raktą. Tai naudojama tik talpyklos apibrėžimams, kuriems reikalingas skaitymo arba rašymo užraktas.';
$string['path'] = 'Talpyklos kelias';
$string['path_help'] = 'Katalogas, kuris turėtų būti naudojamas šios talpyklos saugyklos failams saugoti. Jei paliksite tuščią (numatytasis), katalogas bus automatiškai sukurtas moodledata kataloge. Tai gali būti naudojama norint nukreipti failų saugyklą į geriau veikiančio disko (pvz., atminties) katalogą.';
$string['pluginname'] = 'Failų talpykla';
$string['prescan'] = 'Išankstinio nuskaitymo katalogas';
$string['prescan_help'] = 'Jei įjungta, katalogas nuskaitomas pirmą kartą panaudojus talpyklą, o failų užklausos pirmą kartą tikrinamos pagal nuskaitymo duomenis. Tai gali padėti, jei turite lėtą failų sistemą ir pastebite, kad failų operacijos sukelia kliūtis.';
$string['privacy:metadata'] = 'Failų talpyklos cachestore papildinys trumpai saugo duomenis kaip talpyklos funkcijos dalį, tačiau šie duomenys reguliariai išvalomi.';
$string['singledirectory'] = 'Vieno katalogo saugykla';
$string['singledirectory_help'] = 'Jei įgalinta, failai (talpyklos elementai) bus saugomi viename kataloge, o ne skaidomi į kelis katalogus.

Įjungus tai, pagreitės failų sąveika, tačiau dėl to padidės failų sistemos apribojimų rizika.

Patartina tai įjungti tik tada, jei:

* Žinote, kad talpykloje esančių elementų skaičius bus pakankamai mažas, kad tai nesukels problemų failų sistemoje, kurią naudojate.
* Talpykloje saugomų duomenų generavimas nėra brangus. Jei vis tiek laikomasi numatytosios reikšmės, tai gali būti geresnis pasirinkimas, nes tai sumažina problemų tikimybę.';
$string['task_asyncpurge'] = 'Asinchroniškai išvalyti failą, kuriame saugomi seni talpyklos versijų katalogai';
