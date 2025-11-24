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
 * Strings for component 'qtype_numerical', language 'ro', version '4.5'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Eroare acceptată';
$string['addmoreanswerblanks'] = 'Spații libere pentru alte {no} opțiuni';
$string['addmoreunitblanks'] = 'Blank-uri pentru încă {no} unități';
$string['answercolon'] = 'Răspuns:';
$string['answererror'] = 'Eroare';
$string['answermustbenumberorstar'] = 'Răspunsul trebuie să fie un număr, de exemplu -1.234 sau 3e8 sau „*”.';
$string['answerno'] = 'Răspuns {$a}';
$string['decfractionofquestiongrade'] = 'ca fracție (0-1) din nota întrebării';
$string['decfractionofresponsegrade'] = 'ca o fracție (0-1) din punctajul răspunsului';
$string['decimalformat'] = 'zecimale';
$string['editableunittext'] = 'elementul de introducere a textului';
$string['errornomultiplier'] = 'Trebuie să specificaţi un multiplu pentru această unitate.';
$string['errorrepeatedunit'] = 'Nu sunt admise două unităţi cu acelaşi nume.';
$string['geometric'] = 'Geometric';
$string['invalidnumber'] = 'Trebuie să inserați un număr valid.';
$string['invalidnumbernounit'] = 'Trebuie să inserați un număr valid. Nu includeți o unitate în răspunsul dvs.';
$string['invalidnumericanswer'] = 'Unul dintre răspunsuril nu a fost un număr valid.';
$string['invalidnumerictolerance'] = 'Una dintre toleranțele pe care le-ați introdus nu a fost un număr valid.';
$string['leftexample'] = 'în stânga, de exemplu $1,00 sau £1,00';
$string['manynumerical'] = 'Unitățile sunt opționale. Dacă este introdusă o unitate, aceasta este utilizată pentru a converti răspunsul la Unitatea 1 înainte de notare.';
$string['multiplier'] = 'Multiplicator';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Text nemodificabil al unității nr. 1';
$string['nonvalidcharactersinnumber'] = 'Nu sunt caractere valide în număr';
$string['notenoughanswers'] = 'Trebuie să furnizaţi cel puţin un răspuns.';
$string['nounitdisplay'] = 'Notare fără unitate';
$string['numericalmultiplier'] = 'Multiplicator';
$string['numericalmultiplier_help'] = 'Multiplicatorul este factorul prin care răspunsul numeric corect va fi multiplicat.

Prima unitate (Unitatea 1) are un multiplicator implicit de 1. Astfel, dacă răspunsul numeric corect este 5500 și setați W ca unitate la Unitatea 1 care are 1 ca multiplicator implicit, răspunsul corect este 5500 W.

Dacă adăugați unitatea kW cu un multiplicator de 0,001, acest lucru va adăuga un răspuns corect de 5,5 kW. Aceasta înseamnă că răspunsurile 5500W sau 5,5kW ar fi marcate corect.

Rețineți că eroarea acceptată este, de asemenea, înmulțită, astfel încât o eroare permisă de 100W ar deveni o eroare de 0,1kW.';
$string['oneunitshown'] = 'Unitatea 1 este afișată automat lângă caseta de răspuns.';
$string['onlynumerical'] = 'Unitățile nu sunt utilizate deloc. Doar valoarea numerică este notată.';
$string['pleaseenterananswer'] = 'Vă rugăm să inserați un răspuns';
$string['pleaseenteranswerwithoutthousandssep'] = 'Vă rugăm să introduceți răspunsul fără a utiliza separatorul de mii ({$a}).';
$string['pluginname'] = 'Numeric';
$string['pluginname_help'] = 'Din perspectiva cursanților, o întrebare numerică arată exact ca o întrebare cu răspuns scurt. Diferența este că răspunsurile numerice au voie să aibă o eroare acceptată. Aceasta permite evaluarea unui interval fix de răspunsuri ca răspuns unic. De exemplu, dacă răspunsul este 10 cu o eroare acceptată de 2, atunci orice număr între 8 și 12 va fi acceptat drept corect.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Se adaugă o întrebare numerică';
$string['pluginnameediting'] = 'Se editează o întrebare numerică';
$string['pluginnamesummary'] = 'Permite un răspuns numeric, posibil cu unități, care este notat prin compararea cu diferite răspunsuri model, posibil cu toleranțe.';
$string['privacy:metadata'] = 'Tipul de întrebare numerică nu stochează date personale.';
$string['privacy:preference:defaultmark'] = 'Punctaj implicit setat pentru o întrebare curentă.';
$string['privacy:preference:multichoicedisplay'] = 'Indiferent dacă unitățile sunt afișate ca element de introducere a textului, selecție cu opțiuni multiple sau un meniu derulant.';
$string['privacy:preference:penalty'] = 'Penalizare pentru fiecare încercare incorectă atunci când întrebările sunt rulate folosind comportamentul „Interactiv cu încercări multiple” sau „Modul adaptiv”.';
$string['privacy:preference:unitgradingtypes'] = 'Dacă penalizarea unitară se aplică ca o fracțiune (0-1) din nota de răspuns sau din nota de întrebare.';
$string['privacy:preference:unitpenalty'] = 'Ce fracțiune (0-1) din nota la răspuns sau nota la întrebare ar trebui să se aplice?';
$string['privacy:preference:unitrole'] = 'Dacă unitatea este esențială, opțională sau neașteptată.';
$string['privacy:preference:unitsleft'] = 'Dacă unitatea se afișează în stânga (de exemplu, $, £) sau în dreapta (de exemplu, kg, km, cm).';
$string['relative'] = 'Relativ';
$string['rightexample'] = 'în dreapta, de exemplu 1.00cm sau 1.00km';
$string['selectunit'] = 'Selectați o unitate';
$string['selectunits'] = 'Selectați unități';
$string['studentunitanswer'] = 'Unitățile sunt introduse folosind';
$string['tolerancetype'] = 'Tipul de toleranță';
$string['unit'] = 'Unitate';
$string['unitappliedpenalty'] = 'Aceste mărci includ o penalizare de {$a} pentru unitatea defectuoasă.';
$string['unitchoice'] = 'o selecție cu opțiuni multiple';
$string['unitedit'] = 'Editați unitatea';
$string['unitgraded'] = 'Unitatea trebuie dată și va fi notată.';
$string['unithandling'] = 'Manipularea unității';
$string['unitincorrect'] = 'Nu ai dat unitatea corectă.';
$string['unitmandatory'] = 'Obligatoriu';
$string['unitmandatory_help'] = '* Răspunsul va fi notat folosind unitatea scrisă.

* Penalitatea de unitate va fi aplicată dacă câmpul de unitate este gol';
$string['unitnotselected'] = 'Trebuie să selectați o unitate.';
$string['unitonerequired'] = 'Trebuie să selectați cel puțin o unitate.';
$string['unitoptional'] = 'Unitate opțională';
$string['unitoptional_help'] = '* Dacă câmpul unității nu este gol, răspunsul va fi gradat folosind această unitate.

* Dacă unitatea este greșit scrisă sau necunoscută, răspunsul va fi considerat ca nevalid.';
$string['unitpenalty'] = 'Pedeapsa de unitate';
$string['unitpenalty_help'] = 'Pedeapsa se aplică dacă

* numele greșit al unității este introdus în intrarea unității sau
* o unitate este introdusă în caseta de introducere a valorii';
$string['unitposition'] = 'Poziție unități';
$string['units'] = 'Unități';
$string['unitselect'] = 'un meniu derulant';
$string['unitx'] = 'Unitate {no}';
$string['xmustbenumeric'] = '{$a} trebuie să fie un număr.';
$string['xmustnotbenumeric'] = '{$a} nu poate fi un număr.';
$string['youmustenteramultiplierhere'] = 'Aici trebuie să completaţi un multiplicator.';
