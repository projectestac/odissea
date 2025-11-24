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
 * Strings for component 'enrol_manual', language 'lt', version '4.5'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Išplėstinė';
$string['alterstatus'] = 'Keisti būseną';
$string['altertimeend'] = 'Keisti pabaigos laiką';
$string['altertimestart'] = 'Keisti pradžios laiką';
$string['assignrole'] = 'Priskirti vaidmenį';
$string['assignroles'] = 'Priskirti vaidmenį';
$string['browsecohorts'] = 'Naršyti junginius';
$string['browseusers'] = 'Naršyti naudotojus';
$string['confirmbulkdeleteenrolment'] = 'Ar jūs įsitikinęs, kad norite panaikinti šias naudotojo registracijas?';
$string['defaultperiod'] = 'Numatytasis registracijos laikotarpis';
$string['defaultperiod_desc'] = 'Numatytoji trukmė, kiek galioja registracija. Jei nustatytas nulis, registracijos trukmė pagal numatytuosius nustatymus bus neribota.';
$string['defaultperiod_help'] = 'Numatytas laiko tarpas kada registracija yra galiojanti, pradedant nuo tada kai naudotojas prisiregistravo. Jei išjungta, tai registracijos trukmė neapibrėžta.';
$string['defaultstart'] = 'Numatyta registracijos pradžia';
$string['deleteselectedusers'] = 'Panaikinti pasirinktas naudotojų registracijas';
$string['editselectedusers'] = 'Redaguoti pasirinktų naudotojų registracijas';
$string['enrolledincourserole'] = 'Įregistruotas {$a->course} kaip {$a->role}';
$string['enrolusers'] = 'Įregistruoti naudotojus';
$string['enroluserscohorts'] = 'Įregistruoti pasirinktus naudotojus ir junginius';
$string['expiredaction'] = 'Registracijos pabaigos veiksmas';
$string['expiredaction_help'] = 'Pasirinkite veiksmą, kuris bus atliekamas pasibaigus naudotojo registracijai. Atkreipkite dėmesį, išregistruojant kai kurie naudotojo duomenys ir nustatymai kurse yra išvalomi.';
$string['expirymessageenrolledbody'] = 'Gerbiama (-s) {$a->user},

Tai yra pranešimas, kad Jūsų registracijos į kursą "{$a->course}" terminas baigiasi {$a>timeend}.

Jei Jums reikia pagalbos, prašome susisiekti su {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Registracijos galiojimo pranešimas';
$string['expirymessageenrollerbody'] = 'Registracija į kursą "{$a->course}" baigs galioti per artimiausius {$a->threshold} šiems naudotojams:

{$a->users}

Norėdami pratęsti jų registraciją, eikite {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Registracijos baigimosi pranešimas';
$string['managemanualenrolements'] = 'Tvarkyti rankines registracijas';
$string['manual:config'] = 'Konfigūruoti rankinio įregistravimo egzempliorius';
$string['manual:enrol'] = 'Įregistruoti naudotojus';
$string['manual:manage'] = 'Valdyti naudotojų registraciją';
$string['manual:unenrol'] = 'Išregistruoti naudotojus iš kursų';
$string['manual:unenrolself'] = 'Išsiregistruoti iš kursų';
$string['manualpluginnotinstalled'] = 'Papildinys "Žinynas" dar nebuvo  įdiegtas';
$string['messageprovider:expiry_notification'] = 'Informacijos apie rankinę registraciją galiojimo pranešimai';
$string['now'] = 'Dabar';
$string['pluginname'] = 'Rankinė registracija';
$string['pluginname_desc'] = 'Rankinės registracijos papildinys leidžia naudotojus įregistruoti rankiniu būdu per saitą kursų administravimo parametruose pagal naudotojui taikomas teises, pvz., dėstytojo. Įprastai papildinys turi būti įjungtas, nes to reikalauja kai kurie kiti registracijos papildiniai, pvz., įsiregistravimo.';
$string['privacy:metadata'] = 'Rankinės registracijos papildinys nesaugo jokių asmeninių duomenų.';
$string['selectcohorts'] = 'Pasirinkti junginius';
$string['selection'] = 'Pasirinkimas';
$string['selectusers'] = 'Pasirinkti naudotoją';
$string['sendexpirynotificationstask'] = 'Neautomatinio registravimo siuntimo pranešimų apie galiojimo pabaigą užduotis';
$string['status'] = 'Įjungti rankinę registraciją';
$string['status_desc'] = 'Leisti pasiekti kursus viduje įregistruotiems naudotojams. Šis parametras turi būti įjungtas daugeliu atvejų.';
$string['status_help'] = 'Šis parametras nustato, ar naudotojus galima įregistruoti rankiniu būdu naudojant saitą kursų administravimo parametruose pagal naudotojui taikomas teises, pvz., dėstytojo.';
$string['statusdisabled'] = 'Išjungta';
$string['statusenabled'] = 'Įjungta';
$string['syncenrolmentstask'] = 'Sinchronizuoti rankinio įregistravimo užduotį';
$string['unenrol'] = 'Išregistruoti naudotoją';
$string['unenrolselectedusers'] = 'Išregistruoti pasirinktus naudotojus';
$string['unenrolselfconfirm'] = 'Ar tikrai norite išsiregistruoti iš kursų {$a}?';
$string['unenroluser'] = 'Ar tikrai nori išregistruoti "{$a->user}"  iš paskaitos "{$a->course}"?';
$string['unenrolusers'] = 'Išregistruoti naudotojus';
$string['wscannotenrol'] = 'Papildinio pavyzdys negali rankiniu būdu registruoti naudotojo paskaitoje ID = {$a->courseid}';
$string['wsnoinstance'] = 'Neautomatinis registracijos papildinio pavyzdys neegzistuoja arba yra išjungtas šiam kursui (ID = {$a->courseid})';
$string['wsusercannotassign'] = 'Neturite leidimo priskirti šio vaidmens ({$a->roleid}) šiam naudotojui ({$a->userid}) šiame kurse ({$a->courseid}).';
