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
 * Strings for component 'enrol_self', language 'lt', version '4.5'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Įregistravimas yra išjungtas arba neaktyvus';
$string['canntenrolearly'] = 'Dar negalite įsiregistruoti; registracija prasideda {$a}.';
$string['canntenrollate'] = 'Daugiau nebegalite registruotis, nes registracija baigėsi {$a}.';
$string['cohortnonmemberinfo'] = 'Tik junginio \'{$a}\' nariai gali savarankiškai įsiregistruoti';
$string['cohortonly'] = 'Tik junginio nariai';
$string['cohortonly_help'] = 'Savarankiška registracija galima tik nurodyto junginio nariams. Pastaba: šio nustatymo keitimas neturi įtakos esamoms registracijoms.';
$string['confirmbulkdeleteenrolment'] = 'Ar tikrai norite ištrinti šias naudotojų registracijas?';
$string['customwelcomemessage'] = 'Pasirinktinis pasveikinimo pranešimas';
$string['customwelcomemessage_help'] = 'Priimtini formatai: paprastas tekstas arba Moodle-automatinis formatas. Taip pat priimami HTML žymos ir multi-lang žymos, ir šie pamainymai:
<ul>
<li>Kurso pavadinimas {$a->coursename}</li>
<li>Nuoroda į naudotojo profilio puslapį {$a->profileurl}</li>
<li>Naudotojo el. paštas{$a->email}</li>
<li>Naudotojo vardas ir pavardė {$a->fullname}</li>
<li>Naudotojo vardas {$a->firstname}</li>
<li>Naudotojo pavardė {$a->lastname}</li>
<li>Naudotojo vaidmuo kurse {$a->courserole}</li>
</ul>';
$string['defaultrole'] = 'Numatytasis vaidmens priskyrimas';
$string['defaultrole_desc'] = 'Pasirinkti vaidmenį, kurį reikia priskirti naudotojams įsiregistruojant';
$string['deleteselectedusers'] = 'Ištrinti pasirinktas naudotojų registracijas';
$string['editselectedusers'] = 'Redaguoti pasirinktas naudotojų registracijas';
$string['enrolenddate'] = 'Pabaigos data';
$string['enrolenddate_help'] = 'Jei įjungta, naudotojai gali save registruoti tik iki šios datos.';
$string['enrolenddaterror'] = 'Registracijos pabaigos data negali būti ankstesnė nei pradžios data';
$string['enrolme'] = 'Įregistruoti mane';
$string['enrolperiod'] = 'Registracijos laikotarpis';
$string['enrolperiod_desc'] = 'Numatytoji trukmė, kiek galioja registracija. Jei nustatytas nulis, registracijos trukmė pagal numatytuosius nustatymus bus neribota.';
$string['enrolperiod_help'] = 'Laikas iki kada registracija yra įgalinta, pradedant nuo tada kai naudotojai save priregistravo.Jei išjungta, tai registracijos trukmė neapibrėžta.';
$string['enrolstartdate'] = 'Pradžios data';
$string['enrolstartdate_help'] = 'Jei įjungta, naudotojai gali registruoti save  tik nuo šios dienos.';
$string['expiredaction'] = 'Įregistravimo galiojimo veiksmai';
$string['expiredaction_help'] = 'Pasirinkite veiksmą, kurį norite atlikti, kai baigiasi naudotojo registracijos galiojimo laikas. Atminkite, kad kai kurie naudotojo duomenys ir nustatymai pašalinami iš kurso išregistruojant iš kurso.';
$string['expiryinactivemessageenrolledbody'] = 'Sveiki, {$a->user},

Jūsų registracija kurse {$a->course} baigiasi {$a->timeend}, nes per paskutines {$a->inactivetime} dienas jame nesilankėte.

Jei norite, kad jūsų registracija būtų aktyvi, prisijunkite prie <a href="{$a->url}">{$a->course}</a> iki {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'Jūsų registracija baigiasi: {$a->course}';
$string['expirymessageenrolledbody'] = 'Gerbiamas (-oji) {$a->user},

Tai pranešimas, kad jūsų registracija šiame kurse "{$a->course}" baigsis {$a->timeend}.

Jei Jums reikia pagalbos, prašome susisiekti su {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Savarankiškos registracijos galiojimo pranešimas';
$string['expirymessageenrollerbody'] = 'Savarankiška registracija į kursą "{$a->course}" baigs galioti per artimiausius {$a->threshold} šiems naudotojams:

{$a->users}

Norėdami pratęsti jų registraciją, eikite {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Savarankiškos registracijos galiojimo pranešimas';
$string['expirynotifyall'] = 'Registruojantis ir įregistruotas naudotojas';
$string['expirynotifyenroller'] = 'Tiktai registruojantis';
$string['groupkey'] = 'Naudoti grupinės registracijos raktus';
$string['groupkey_desc'] = 'Naudoti grupinės registracijos raktus pagal numatytuosius nustatymus.';
$string['groupkey_help'] = 'Šalia prieigos prie kursų apribojimo tik tiems, kas žino raktą, papildomai naudojamas grupinės registracijos raktas reikš, kad naudotojai bus automatiškai įtraukiami į grupę, kai įsiregistruos į kursus. Norint naudoti grupinės registracijos raktą, registracijos raktas turi būti nurodytas ir kursų, ir grupės parametruose';
$string['keyholder'] = 'Turėtumėte gauti šį įsirašymo raktą iš:';
$string['longtimenosee'] = 'Išregistruoti neaktyvius praėjus';
$string['longtimenosee_help'] = 'Naudotojai ilgą laiką neprisijungę prie kursų automatiškai išregistruojami. Šiame parametre nurodomas laiko limitas.';
$string['maxenrolled'] = 'Maks. įregistruotų naudotojų skaičius';
$string['maxenrolled_help'] = 'Nurodo maksimalų naudotojų, kurie gali įsiregistruoti, skaičių. 0 reiškia, kad apribojimų nėra';
$string['maxenrolledreached'] = 'Maksimalus naudotojų, kuriems leidžiama įsiregistruoti, skaičius jau pasiektas.';
$string['messageprovider:expiry_notification'] = 'Informacijos apie savarankišką registraciją galiojimo pranešimai';
$string['newenrols'] = 'Leisti naujas savarankiškas registracijas';
$string['newenrols_desc'] = 'Leisti naudotojams savarankiškai registruotis į naujus kursus pagal nutylėjimą.';
$string['newenrols_help'] = 'Šis parametras nustato, ar naudotojas gali registruotis į šį kursą.';
$string['nopassword'] = 'Įsirašymo raktas nereikalingas';
$string['password'] = 'Registracijos raktas';
$string['password_help'] = 'Registracijos raktas leidžia apriboti prieigą prie kursų tik tiems, kas žino raktą. Jei laukas paliekamas tuščias, į kursus gali įsiregistruoti bet kuris naudotojas. Jei nurodytas registracijos raktas, bet kurio į kursus bandančio įsiregistruoti naudotojo bus reikalaujama pateikti raktą. Atminkite, kad registracijos raktą naudotojui reikia pateikti tik VIENĄ KARTĄ – įsiregistruojant į kursus.';
$string['passwordinvalid'] = 'Klaidingas registracijos raktas, bandykite dar kartą';
$string['passwordinvalidhint'] = 'Šis registracijos raktas klaidingas, bandykite dar kartą<br />
(Užuomina – jis prasideda \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Šis registracijos raktas jau naudojamas kaip grupės registracijos raktas.';
$string['pluginname'] = 'Savarankiška registracija';
$string['pluginname_desc'] = 'Įsiregistravimo papildinys leidžia naudotojams pasirinkti, kuriuose kursuose jie nori dalyvauti. Kursai gali būti apsaugoti registracijos raktu. Viduje registracija atliekama naudojant rankinį registracijos papildinį, kuris turi būti įjungtas tuose pačiuose kursuose.';
$string['privacy:metadata'] = 'Savarankiškos registracijos papildinys nesaugo jokių asmeninių duomenų.';
$string['requirepassword'] = 'Reikalauti registracijos rakto';
$string['requirepassword_desc'] = 'Reikalauti registracijos į naujus kursus rakto ir neleisti pašalinti registracijos rakto iš esamų kursų.';
$string['role'] = 'Priskirti vaidmenį';
$string['self:config'] = 'Konfigūruoti įregistravimo egzempliorius';
$string['self:enrolself'] = 'Savarankiška registracija į kursą';
$string['self:holdkey'] = 'Rodomas kaip savarankiškos registracijos raktų turėtojas';
$string['self:manage'] = 'Valdyti įregistruotus naudotojus';
$string['self:unenrol'] = 'Išregistruoti naudotojus iš kursų';
$string['self:unenrolself'] = 'Išsiregistruoti iš kursų';
$string['sendcoursewelcomemessage'] = 'Siųsti kursų pasveikinimo pranešimą';
$string['sendcoursewelcomemessage_help'] = 'Kai naudotojai įsiregistruos į kursą, jie gaus pasveikinimo pranešimą el. paštu. Jei yra siunčiama nuo kurso kontakto (pagal nutylėjimą nuo dėstytojo) ir kurse yra daugiau nei vienas naudotojas turintis tokį vaidmenį, elektroninis laiškas bus siunčiamas nuo pirmo naudotojo priskirtu šiuo vaidmeniu.';
$string['sendexpirynotificationstask'] = 'Savarankiška registracija siunčia pranešimus apie galiojimo pabaigos užduotis';
$string['showhint'] = 'Rodyti užuominą';
$string['showhint_desc'] = 'Rodyti pirmą svečio prieigos rakto raidę.';
$string['status'] = 'Esamas savarankiškas registracijas išlaikyti aktyvias';
$string['status_desc'] = 'Įgalinti naudotojų įsiregistravimą į naujus kursus.';
$string['status_help'] = 'Jei reikšmė nustatoma į Ne, visi esami dalyviai, įregistruoti į kursą, nebeturės prieigos prie jo.';
$string['syncenrolmentstask'] = 'Sinchronizuoti savarankiškos registracijos užduotį';
$string['unenrol'] = 'Išregistruoti naudotoją';
$string['unenrolselfconfirm'] = 'Ar tikrai norite išsiregistruoti iš kursų {$a}?';
$string['unenroluser'] = 'Ar tikrai norite išregistruoti "{$a->user}" iš paskaitos "{$a->course}"?';
$string['unenrolusers'] = 'Išregistruoti naudotojus';
$string['usepasswordpolicy'] = 'Naudoti reikalavimus slaptažodžiui';
$string['usepasswordpolicy_desc'] = 'Registracijos raktams naudoti standartinius reikalavimus slaptažodžiui.';
$string['welcometocourse'] = 'Sveiki, čia {$a}';
$string['welcometocoursetext'] = 'Sveiki, čia kursas "{$a->coursename}"!

Jei dar neredagavote, turite redaguoti savo profilio puslapį, kad galėtume daugiau apie jus sužinoti:

{$a->profileurl}';
