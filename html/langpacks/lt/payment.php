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
 * Strings for component 'payment', language 'lt', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Suarchyvuota';
$string['accountconfignote'] = 'Šios paskyros mokėjimo būdai bus sukonfigūruoti atskirai';
$string['accountdeleteconfirm'] = 'Jei šioje paskyroje yra ankstesnių mokėjimų, ji bus archyvuojama, priešingu atveju jos konfigūracijos duomenys bus visam laikui ištrinti. Ar tikrai norite tęsti?';
$string['accountidnumber'] = 'ID numeris';
$string['accountidnumber_help'] = 'ID numeris naudojamas tik suderinant paskyrą su išorinėmis sistemomis ir niekur svetainėje nerodomas. Jei paskyra turi oficialų kodinį pavadinimą, jį galima įvesti, kitu atveju laukelis gali būti paliktas tuščias.';
$string['accountname'] = 'Paskyros pavadinimas';
$string['accountname_help'] = 'Kaip ši paskyra bus identifikuojama dėstytojams ar tvarkytojams, kurie nustato mokėjimus (pavyzdžiui, kurso registracijos papildinyje).';
$string['accountnotavailable'] = 'Nepasiekiamas';
$string['createaccount'] = 'Sukurti mokėjimo sąskaitą';
$string['deleteorarchive'] = 'Ištrinti arba archyvuoti';
$string['editpaymentaccount'] = 'Redaguoti mokėjimo sąskaitą';
$string['eventaccountcreated'] = 'Mokėjimo sąskaita sukurta';
$string['eventaccountdeleted'] = 'Mokėjimo sąskaita ištrinta';
$string['eventaccountupdated'] = 'Mokėjimo sąskaita atnaujinta';
$string['feeincludesurcharge'] = '{$a->fee} (įskaitant {$a->surcharge} % papildomą mokestį už šio mokėjimo tipo naudojimą)';
$string['gatewaycannotbeenabled'] = 'Mokėjimo būdo įjungti negalima, nes konfigūracija neužbaigta.';
$string['gatewaydisabled'] = 'Išjungtas';
$string['gatewayenabled'] = 'Įjungtas';
$string['gatewaynotfound'] = 'Mokėjimo būdas nerastas';
$string['gotomanageplugins'] = 'Įgalinkite ir išjunkite mokėjimo būdus ir nustatykite papildomus mokesčius naudodami {$a}.';
$string['gotopaymentaccounts'] = 'Galite sukurti kelias mokėjimo paskyras naudodami bet kurį iš šių būdų puslapyje {$a}';
$string['hidearchived'] = 'Slėpti archyvą';
$string['noaccountsavilable'] = 'Nėra jokių mokėjimo paskyrų.';
$string['nocurrencysupported'] = 'Mokėjimas jokia valiuta nepalaikomas. Įsitikinkite, kad įjungtas bent vienas mokėjimo būdas.';
$string['nogateway'] = 'Nėra mokėjimo būdo, kuriuo būtų galima naudotis.';
$string['nogatewayselected'] = 'Pirmiausia turite pasirinkti mokėjimo būdą.';
$string['paymentaccount'] = 'Mokėjimo sąskaita';
$string['paymentaccounts'] = 'Mokėjimo sąskaitos';
$string['paymentaccountsexplained'] = 'Sukurkite vieną ar kelias mokėjimo paskyras šioje svetainėje. Kiekvienoje paskyroje yra galimų mokėjimo būdų konfigūracija. Asmuo, kuris svetainėje konfigūruoja mokėjimus (pavyzdžiui, mokėjimą už registraciją į kursą), galės rinktis iš turimų paskyrų.';
$string['payments'] = 'Mokėjimai';
$string['privacy:metadata:database:payments'] = 'Informacija apie mokėjimus.';
$string['privacy:metadata:database:payments:amount'] = 'Mokėjimo suma.';
$string['privacy:metadata:database:payments:currency'] = 'Mokėjimo valiuta.';
$string['privacy:metadata:database:payments:gateway'] = 'Mokėjimo būdas, naudojamas mokėjimui.';
$string['privacy:metadata:database:payments:timecreated'] = 'Laikas, kada buvo atliktas mokėjimas.';
$string['privacy:metadata:database:payments:timemodified'] = 'Laikas, kada paskutinį kartą buvo atnaujintas mokėjimo įrašas.';
$string['privacy:metadata:database:payments:userid'] = 'Mokėjimą atlikęs naudotojas.';
$string['restoreaccount'] = 'Atkurti';
$string['selectpaymenttype'] = 'Pasirinkti mokėjimo tipą';
$string['showarchived'] = 'Rodyti archyvą';
$string['supportedcurrencies'] = 'Palaikomos valiutos';
$string['surcharge'] = 'Priemoka (procentais)';
$string['surcharge_desc'] = 'Priemoka yra papildoma procentinė dalis, taikoma naudotojams, kurie pasirenka mokėti naudodamiesi šiuo mokėjimo būdu.';
