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
 * Strings for component 'workshopallocation_scheduled', language 'lt', version '4.5'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Fono apdorojimas suplanuotam paskirstymui';
$string['currentstatus'] = 'Dabartinis statusas';
$string['currentstatusexecution'] = 'Statusas';
$string['currentstatusexecution1'] = 'Įvykdyta {$a->datetime}';
$string['currentstatusexecution2'] = 'Laukiama įvykdymo vėl {$a->datetime}';
$string['currentstatusexecution3'] = 'Laukiamas įvykdymas {$a->datetime}';
$string['currentstatusexecution4'] = 'Laukiama vykdymo';
$string['currentstatusnext'] = 'Kitas vykdymas';
$string['currentstatusnext_help'] = 'Kai kuriais atvejais paskirstymas suplanuojamas automatiškai, net jei jis jau buvo įvykdytas. Taip gali nutikti, jei, pavyzdžiui, pratęsiamas pateikimo terminas.';
$string['currentstatusreset'] = 'Atkurti';
$string['currentstatusreset_help'] = 'Išsaugojus formą, pažymėjus šį žymimąjį laukelį, dabartinė būsena bus nustatyta iš naujo. Visa informacija apie ankstesnį vykdymą bus pašalinta, kad paskirstymas galėtų būti vykdomas dar kartą (jei įgalinta aukščiau).';
$string['currentstatusresetinfo'] = 'Pažymėkite langelį ir išsaugokite formą, kad iš naujo nustatytumėte vykdymo rezultatą';
$string['currentstatusresult'] = 'Naujausias vykdymo rezultatas';
$string['enablescheduled'] = 'Įjungti planuojamą priskyrimą';
$string['enablescheduledinfo'] = 'Pateikimo etapo pabaigoje automatiškai priskirti pateikimus';
$string['pluginname'] = 'Planuojamas priskyrimas';
$string['privacy:metadata'] = 'Suplanuoto paskirstymo papildinys nesaugo jokių asmens duomenų. Faktinius asmens duomenis apie tai, kas ką vertins, saugo pats Seminaro modulis ir jie sudaro pagrindą vertinimų detalėms eksportuoti.';
$string['randomallocationsettings'] = 'Priskyrimo nustatymai';
$string['randomallocationsettings_help'] = 'Čia apibrėžiami atsitiktinio paskirstymo metodo parametrai. Juos naudos atsitiktinio paskirstymo papildinys faktiniam pateikimų paskirstymui.';
$string['resultdisabled'] = 'Planuojamas priskyrimas išjungtas';
$string['resultenabled'] = 'Planuojamas priskyrimas įjungtas';
$string['resultexecuted'] = 'Sėkmė';
$string['resultfailed'] = 'Nepavyko automatiškai paskirstyti pateikimų';
$string['resultfailedconfig'] = 'Planuojamas priskyrimas neteisingai sukonfigūruotas';
$string['resultfaileddeadline'] = 'Seminare nenurodytas pateikimo terminas';
$string['resultfailedphase'] = 'Seminaras nėra pateikimo etape';
$string['resultvoid'] = 'Jokie pateikimai nebuvo skirti';
$string['resultvoiddeadline'] = 'Dar nepasibaigus pateikimų teikimo terminui';
$string['resultvoidexecuted'] = 'Paskirstymas jau įvykdytas';
$string['scheduledallocationsettings'] = 'Planuojamo priskyrimo parametrai';
$string['scheduledallocationsettings_help'] = 'Jei įjungta, suplanuoto paskirstymo metodas automatiškai paskirstys pateikimus vertinimui pateikimo etapo pabaigoje. Fazės pabaigą galima apibrėžti seminaro nustatyme „Pateikimų pateikimo terminas“.

Atsitiktinio paskirstymo metodas vykdomas naudojant šioje formoje iš anksto nustatytus parametrus. Tai reiškia, kad suplanuotas paskirstymas veikia taip, tarsi dėstytojas pats atliktų atsitiktinį paskirstymą pateikimo fazės pabaigoje, naudodamas toliau nurodytus paskirstymo nustatymus.

Atminkite, kad suplanuotas paskirstymas *nevykdomas*, jei rankiniu būdu perjungiate seminarą į vertinimo etapą iki pateikimo termino pabaigos. Tokiu atveju pateikimus turite skirti patys. Suplanuotas paskirstymo metodas yra ypač naudingas, kai naudojamas kartu su automatinio fazių perjungimo funkcija.';
$string['setup'] = 'Nustatyti numatytąjį priskyrimą';
