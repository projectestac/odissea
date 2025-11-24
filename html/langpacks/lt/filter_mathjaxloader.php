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
 * Strings for component 'filter_mathjaxloader', language 'lt', version '4.5'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Papildomi lygčių skyrikliai';
$string['additionaldelimiters_help'] = '„MathJax“ filtras analizuoja lygčių tekstą, esantį skyriklio simboliuose.

Čia galima pridėti atpažintų skiriamųjų simbolių sąrašą (pvz., AsciiMath naudoja `). Skirstytuvuose gali būti keli simboliai, o kelis skyriklius galima atskirti kableliais.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL';
$string['httpsurl_help'] = 'Visas URL į MathJax biblioteką.';
$string['localinstall'] = 'Vietinis MathJax diegimas';
$string['localinstall_help'] = 'Numatytoji MathJax konfigūracija naudoja MathJax CDN versiją, tačiau jei reikia, MathJax galima įdiegti vietoje.

Tai gali būti naudinga taupant pralaidumą arba dėl vietinių tarpinio serverio apribojimų.

Norėdami naudoti vietinį MathJax diegimą, pirmiausia atsisiųskite visą MathJax biblioteką iš https://www.mathjax.org/. Tada įdiekite jį žiniatinklio serveryje. Galiausiai atnaujinkite MathJax filtro nustatymus httpurl ir (arba) httpsurl, kad nukreiptumėte į vietinį MathJax.js URL.';
$string['mathjaxsettings'] = 'MathJax konfigūracija';
$string['mathjaxsettings_desc'] = 'Numatytoji MathJax konfigūracija turėtų būti tinkama daugumai naudotojų, tačiau MathJax yra labai konfigūruojama ir čia galima pridėti bet kurią iš standartinių MathJax konfigūracijos parinkčių.';
$string['privacy:metadata'] = '„MathJax“ papildinys nesaugo jokių asmeninių duomenų.';
$string['texfiltercompatibility'] = 'Suderinamumas su TeX filtru';
$string['texfiltercompatibility_help'] = 'MathJax filtras gali būti naudojamas kaip TeX žymėjimo filtro pakaitalas.

Kad būtų palaikomi visi skyrikliai, kuriuos palaiko TeX žymėjimo filtras, MathJax bus sukonfigūruotas taip, kad visos lygtys būtų rodomos kartu su tekstu.';
