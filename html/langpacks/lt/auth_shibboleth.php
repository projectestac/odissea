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
 * Strings for component 'auth_shibboleth', language 'lt', version '4.5'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Autentifikavimo metodo logotipas';
$string['auth_shib_auth_logo_description'] = 'Pateikite naudotojams žinomą Shibboleth autentifikavimo metodo logotipą. Tai gali būti jūsų Shibboleth federacijos logotipas, pvz. <tt>SWITCHaai Login</tt> arba <tt>InCommon Login</tt> ar panašiai.';
$string['auth_shib_auth_method'] = 'Autentifikavimo metodo pavadinimas';
$string['auth_shib_auth_method_description'] = 'Pateikite naudotojams pažįstamą „Shibboleth“ autentifikavimo metodo pavadinimą. Tai gali būti jūsų „Shibboleth“ ryšio pavadinimas, pvz., <tt>„SWITCHaai“ prisijungimas</tt>, <tt>„InCommon“ prisijungimas</tt> ar panašiai.';
$string['auth_shib_changepasswordurl'] = 'Slaptažodžio keitimo URL';
$string['auth_shib_contact_administrator'] = 'Jei nesate susijęs su nurodytomis organizacijomis ir jums reikia prieigos prie kurso šiame serveryje, susisiekite su <a href="mailto:{$a}">Moodle administratoriumi</a>.';
$string['auth_shib_convert_data'] = 'Duomenų modifikavimo API';
$string['auth_shib_convert_data_description'] = 'Galite naudoti šį API norėdami toliau keisti Shibboleth pateiktus duomenis. Jei reikia daugiau instrukcijų, skaitykite <a href="{$a}">README</a>.';
$string['auth_shib_convert_data_filepath_warning'] = 'Negalite naudoti failo, esančio dabartiniame svetainės duomenų kataloge ($CFG->dataroot), kaip duomenų modifikavimo API.';
$string['auth_shib_convert_data_warning'] = 'Šio failo nėra arba jo negali nuskaityti žiniatinklio serverio procesas!';
$string['auth_shib_idp_list'] = 'Tapatybės teikėjai';
$string['auth_shib_idp_list_description'] = 'Pateikite tapatybės teikėjo subjektų ID sąrašą, kad naudotojas galėtų iš jo pasirinkti prisijungimo puslapyje.<br />Kiekvienoje eilutė turi būti „IdP“ tapatybės ID kableliais atskirtas kortežas (žr. „Shibboleth“ metaduomenų failą) ir „IdP“ pavadinimas, nes jis bus rodomas išplečiamajame sąraše.<br />Kaip pasirinktinį trečią parametrą galite įtraukti „Shibboleth“ seanso iniciatoriaus vietą, kuri bus naudojama, jei jūsų „Moodle“ įdiegtis priklauso kelių ryšių sąrankai.';
$string['auth_shib_instructions'] = 'Naudokite <a href="{$a}">Shibboleth prisijungimo vardą</a>, kad gautumėte prieigą per Shibboleth, jei jūsų institucija tai palaiko. Kitu atveju naudokite įprastą prisijungimo formą, parodytą čia.';
$string['auth_shib_instructions_help'] = 'Čia turite pateikti pasirinktines instrukcijas, jūsų naudotojams paaiškindami, kas yra „Shibboleth“. Jos bus rodomos prisijungimo puslapio instrukcijų dalyje. Instrukcijose turi būti saitas su „<b>{$a}</b>“, kurį naudotojai spustelės norėdami prisijungti.';
$string['auth_shib_instructions_key'] = 'Prisijungimo instrukcijos';
$string['auth_shib_integrated_wayf'] = '„Moodle“ WAYF paslauga';
$string['auth_shib_integrated_wayf_description'] = 'Jei tai įjungsite, Moodle naudos savo WAYF paslaugą, o ne sukonfigūruotą Shibboleth. Moodle šiame alternatyviame prisijungimo puslapyje parodys išskleidžiamąjį sąrašą, kuriame naudotojas turi pasirinkti savo tapatybės teikėją.';
$string['auth_shib_logout_return_url'] = 'Alternatyvus atsijungimo URL';
$string['auth_shib_logout_return_url_description'] = 'Pateikite URL, į kurį bus nukreipti „Shibboleth“ naudotojai, kai atsijungs.<br />Jei jis liks tuščias, naudotojai bus nukreipti į vietą, į kurią juos nukreips „Moodle“.';
$string['auth_shib_logout_url'] = '„Shibboleth“ paslaugų teikėjo atsijungimo apdorojimo programos URL';
$string['auth_shib_logout_url_description'] = 'Pateikite „Shibboleth“ paslaugų teikėjo atsijungimo apdorojimo programos URL. Tai paprastai yra <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Jei norite naudoti integruotą WAYF paslaugą, turite pateikti kableliais atskirtų paslaugų teikėjų subjektų ID sąrašą, jų vardus ir pasirinktinai – seanso iniciatorių.';
$string['auth_shib_only'] = 'Tik „Shibboleth“';
$string['auth_shib_only_description'] = 'Pažymėkite šią parinktį, jei bus taikomas „Shibboleth“ autentifikavimas';
$string['auth_shib_username_description'] = 'Pavadinimas žiniatinklio serverio „Shibboleth“ aplinkos kintamojo, kuris bus naudojamas kaip „Moodle“ naudotojo vardas';
$string['auth_shibboleth_errormsg'] = 'Pasirinkite organizaciją, kuriai priklausote.';
$string['auth_shibboleth_login'] = '„Shibboleth“ prisijungimas';
$string['auth_shibboleth_login_long'] = 'Prisijungti prie „Moodle“ naudojant „Shibboleth“';
$string['auth_shibboleth_manual_login'] = 'Prisijungimas rankiniu būdu';
$string['auth_shibboleth_select_member'] = 'Priklausau...';
$string['auth_shibboleth_select_organization'] = 'Norėdami autentifikuoti per Shibboleth, išskleidžiamajame meniu pasirinkite savo organizaciją:';
$string['auth_shibbolethdescription'] = 'Naudojant šį metodą naudotojai sukuriami ir autentifikuojami naudojant Shibboleth. Išsamią sąrankos informaciją rasite <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = '„Shibboleth“';
$string['privacy:metadata'] = '„Shibboleth“ autentifikavimo papildinys nesaugo jokių asmeninių duomenų.';
$string['shib_invalid_account_error'] = 'Atrodo, kad esate patvirtintas „Shibboleth“, bet „Moodle“ neturi galiojančios paskyros jūsų naudotojo vardui. Jūsų paskyros gali nebūti arba ji gali būti laikinai sustabdyta.';
$string['shib_no_attributes_error'] = 'Atrodo, kad esate autentifikuoti „Shibboleth“, bet „Moodle“ negavo jokių naudotojo atributų. Užtikrinkite, kad jūsų tapatybės teikėjas išleistų reikiamus atributus ({$a}), skirtus paslaugų teikėjui, kuris vykdo „Moodle“, arba informuokite šio serverio žiniatinklio administratorių.';
$string['shib_not_all_attributes_error'] = '„Moodle“ reikalingi tam tikri „Shibboleth“ atributai, kurių jūsų atveju nėra. Šie atributai yra: {$a}<br />Kreipkitės į šio serverio žiniatinklio administratorių ar savo tapatybės teikėją.';
$string['shib_not_set_up_error'] = 'Atrodo, kad Shibboleth autentifikavimas nustatytas netinkamai, nes šiame puslapyje nėra Shibboleth aplinkos kintamųjų. Daugiau instrukcijų, kaip nustatyti Shibboleth autentifikavimą, rasite <a href="{$a}">README</a> arba susisiekite su šio Moodle  administratoriumi.';
