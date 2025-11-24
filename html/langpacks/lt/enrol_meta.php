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
 * Strings for component 'enrol_meta', language 'lt', version '4.5'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Pridėti į grupę';
$string['coursesort'] = 'Šaltinio kursų sąrašo eiliškumas';
$string['coursesort_help'] = 'Susiejant pradinį kursą su tiksliniu kursu, kaip reikėtų rikiuoti pradinius kursus?';
$string['creategroup'] = 'Kurti naują grupę';
$string['defaultgroupnametext'] = '{$a->name} kursas {$a->increment}';
$string['enrolmetasynctask'] = 'Meta įregistravimo sinchronizavimo užduotis';
$string['linkedcourse'] = 'Susieti kursai';
$string['meta:config'] = 'Konfigūruoti įregistravimo į metakursus egzempliorius';
$string['meta:selectaslinked'] = 'Pasirinkti kursus kaip susietus metasaitais';
$string['meta:unenrol'] = 'Išregistruoti sulaikytus naudotojus';
$string['nosyncroleids'] = 'Vaidmenys, kurie nėra sinchronizuoti';
$string['nosyncroleids_desc'] = 'Pažymėkite visus vaidmenis, kurie neturėtų būti sinchronizuojami tarp pradinio ir tikslinio kurso.';
$string['pluginname'] = 'Kursų metasaitas';
$string['pluginname_desc'] = 'Kurso metasaitas sinchronizuoja įrašus ir vaidmenis iš pradinio kurso į tikslinį kursą.';
$string['privacy:metadata:core_group'] = 'Kurso metasaito įregistravimo papildinys gali sukurti naują grupę arba naudoti esamą grupę, kad įtrauktų dalyvius iš pradinio kurso.';
$string['samemetacourse'] = 'Negalima įtraukti meta nuorodos Į tą patį kursą.';
$string['syncall'] = 'Sinchronizuoti visus registruotus naudotojus';
$string['syncall_desc'] = 'Jei ši funkcija įjungta, sinchronizuojami visi užsiregistravę naudotojai iš pradinio kurso, net jei jie neturi jokio vaidmens tame kurse. Priešingu atveju į tikslinį kursą įtraukiami tik tie naudotojai, kurie turi bent vieną vaidmenį.';
$string['unknownmetacourse'] = 'Nežinomas meta kurso trumpasis pavadinimas';
$string['wscannotcreategroup'] = 'Nėra leidimo kurti grupę susietame kurse, kurio ID = {$a}.';
$string['wsinvalidcourse'] = 'Kurso ID = {$a} neegzistuoja arba neturite leidimo pridėti kurso meta nuorodos.';
$string['wsinvalidmetacourse'] = 'Meta kurso ID = {$a} neegzistuoja arba jūs neturite leidimo pridėti registracijos egzempliorių.';
$string['wsnoinstancesspecified'] = 'Jokių atvejų nenurodyta';
