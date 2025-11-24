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
 * Strings for component 'cachestore_mongodb', language 'lt', version '4.5'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Duomenų bazė';
$string['database_help'] = 'Duomenų bazės, kuria reikia naudotis, pavadinimas.';
$string['extendedmode'] = 'Naudoti išplėstinius raktus';
$string['extendedmode_help'] = 'Jei įjungta, dirbant su papildiniu bus naudojami visi raktų rinkiniai. Tai dar nenaudojama viduje, bet leis jums lengvai ieškoti ir ištirti MongoDB papildinį rankiniu būdu, jei pasirinksite. Įjungus šią funkciją, bus šiek tiek papildomų išlaidų, todėl tai turėtų būti daroma tik tada, kai to reikia.';
$string['password'] = 'Slaptažodis';
$string['password_help'] = 'Prisijungimui naudojamo naudotojo slaptažodis.';
$string['pleaseupgrademongo'] = 'Naudojate seną PHP Mongo plėtinio versiją (< 1.3). Ateityje nebebus palaikomos senos Mongo plėtinio versijos. Apsvarstykite galimybę atnaujinti.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = '„MongoDB“ talpyklos papildinys trumpai saugo duomenis kaip talpyklos funkcijos dalį. Šie duomenys saugomi MongoDB serveryje, kur duomenys reguliariai šalinami.';
$string['privacy:metadata:mongodb:data'] = 'Įvairūs duomenys, saugomi talpykloje';
$string['replicaset'] = 'Replikų rinkinys';
$string['replicaset_help'] = 'Replikų rinkinio, prie kurio reikia prisijungti, pavadinimas. Jei tai bus suteikta, pagrindinis bus nustatytas naudojant ismaster duomenų bazės komandą seeduose, todėl tvarkyklė gali prisijungti prie serverio, kuris net nebuvo įtrauktas į sąrašą.';
$string['server'] = 'Serveris';
$string['server_help'] = 'Tai serverio, kurį norite naudoti, ryšio eilutė. Keli serveriai gali būti nurodyti naudojant kableliais atskirtą sąrašą.';
$string['testserver'] = 'Testuoti serverį';
$string['testserver_desc'] = 'Ryšio eilutė, skirta serveriui naudoti bandymams. Jei buvo nurodytas bandomasis serveris, MongoDB našumą galima išbandyti naudojant administravimo bloko talpyklos našumo puslapį.
Pavyzdžiui: mongodb://127.0.0.1:27017';
$string['username'] = 'Naudotojo vardas';
$string['username_help'] = 'Naudotojo vardas, naudojamas užmezgant ryšį.';
$string['usesafe'] = 'Naudoti saugiai';
$string['usesafe_help'] = 'Jei įjungta, „usesafe“ parinktis bus naudojama atliekant įterpimo, gavimo ir pašalinimo operacijas. Jei nurodėte kopijų rinkinį, jis vis tiek bus įjungtas.';
$string['usesafevalue'] = 'Naudoti saugią vertę';
$string['usesafevalue_help'] = 'Galite pasirinkti pateikti konkrečią vertę saugiam naudojimui. Tai nustatys serverių, kuriuose operacijos turi būti baigtos, kol bus laikomos baigtomis, skaičių.';
