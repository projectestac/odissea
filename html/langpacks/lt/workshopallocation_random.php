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
 * Strings for component 'workshopallocation_random', language 'lt', version '4.5'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Įtraukti savęs įvertinimus';
$string['allocationaddeddetail'] = 'Naujas atliktinas įvertinimas: <strong>{$a->reviewername}</strong> yra <strong>{$a->authorname}</strong> recenzentas';
$string['allocationdeallocategraded'] = 'Nepavyko panaikinti jau įvertinto įvertinimo priskyrimo: recenzentas <strong>{$a->reviewername}</strong>, pateikimo autorius <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Pakartotinai naudojamas įvertinimas: <strong>{$a->reviewername}</strong> laikomas kaip <strong>{$a->authorname}</strong> recenzentas';
$string['allocationsettings'] = 'Priskyrimo parametrai';
$string['assessmentdeleteddetail'] = 'Įvertinimo priskyrimas atšauktas: <strong>{$a->reviewername}</strong> nebėra <strong>{$a->authorname}</strong> recenzentas*';
$string['assesswosubmission'] = 'Dalyviai gali vertinti nieko nepateikę';
$string['confignumofreviews'] = 'Numatytasis atsitiktine tvarka priskirtinų pateikimų skaičius';
$string['excludesamegroup'] = 'Uždrausti kolegų iš tos pačios grupės recenzijas';
$string['noallocationtoadd'] = 'Nėra įtrauktinų priskyrimų';
$string['nogroupusers'] = '<p>Įspėjimas: jei seminaras veikia „matomų grupių“ arba „atskirų grupių“ režimu, naudotojai PRIVALO būti bent vienos grupės nariai, kad šis įrankis priskirtų jiems kolegų įvertinimus. Grupėje nesantiems naudotojams vis tiek gali būti teikiami nauji savęs įvertinimai arba pašalinami esami įvertinimai.</p> <p>Šie naudotojai šiuo metu nėra grupėje: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Naikinamas {$a} įvertinimų priskyrimas';
$string['numofrandomlyallocatedsubmissions'] = 'Atsitiktiniu būdų priskiriami (-a) {$a} pateikimai (-ų)';
$string['numofreviews'] = 'Recenzijų skaičius';
$string['numofselfallocatedsubmissions'] = 'Save priskiria {$a} pateikimai (-ų)';
$string['numperauthor'] = 'kiekvieno pateikimo';
$string['numperreviewer'] = 'kiekvieno recenzento';
$string['pluginname'] = 'Atsitiktinis priskyrimas';
$string['privacy:metadata'] = 'Atsitiktinio paskirstymo papildinys nesaugo jokių asmeninių duomenų. Faktinius asmens duomenis apie tai, kas ką vertins, saugo pats Seminaro modulis ir jie sudaro pagrindą vertinimų detalėms eksportuoti.';
$string['randomallocationdone'] = 'Atliktas atsitiktinis priskyrimas';
$string['removecurrentallocations'] = 'Pašalinti esamus priskyrimus';
$string['resultnomorepeers'] = 'Nebėra galimų partnerių';
$string['resultnomorepeersingroup'] = 'Nebėra galimų partnerių šioje grupėje';
$string['resultnotenoughpeers'] = 'Nepakanka galimų partnerių';
$string['resultnumperauthor'] = 'Bandoma perskirstyti {$a} peržiūras autorių';
$string['resultnumperreviewer'] = 'Vienam recenzentui bandoma skirti {$a} atsiliepimą (-us).';
$string['stats'] = 'Esamo priskyrimo statistika';
