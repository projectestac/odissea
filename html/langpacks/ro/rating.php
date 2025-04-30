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
 * Strings for component 'rating', language 'ro', version '4.4'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Media aprecierilor';
$string['aggregatecount'] = 'Numărul aprecierilor';
$string['aggregatemax'] = 'Nota maximă';
$string['aggregatemin'] = 'Notă minimă';
$string['aggregatenone'] = 'Fără aprecieri';
$string['aggregatesum'] = 'Suma aprecierilor';
$string['aggregatetype'] = 'Tip de agregare';
$string['aggregatetype_help'] = 'Tipul de agregare stabilește modul în care aprecierile sunt combinate pentru a obține nota finală din catalog.

* Notă medie - Media tuturor aprecierilor
* Numărul de note - Numărul elementelor apreciate devine notă finală. Luați în considerare faptul că totalul nu poate depăși nota maximă primită pentru activitate.
* Notă maximă - Cea mai mare notă devine nota finală
* Notă minimă - Cea mai mică notă devine nota minimă
* Sumă - Toate notele sunt adunate. Luați în considerare faptul că totalul nu poate fi mai mare decât nota maximă primită pentru activitate.

Daca se selectează opțiunea "Fără aprecieri", activitatea nu va apărea în catalog.';
$string['allowratings'] = 'Permiteți ca elemetele să fie evaluate?';
$string['allratingsforitem'] = 'Toate aprecieri trimise';
$string['capabilitychecknotavailable'] = 'Verificarea capabilității nu este disponibilă până când activitatea nu este salvată';
$string['couldnotdeleteratings'] = 'Ne pare rău, nu se poate șterge deoarece a fost deja notată';
$string['norate'] = 'Nu este posibilă notarea elementelor!';
$string['noratings'] = 'Nu au fost trimise aprecieri';
$string['noviewanyrate'] = 'Puteți să vizualizați doar notele pentru temele dumneavoastră!';
$string['noviewrate'] = 'Nu aveți premisiunea să vedeți aprecierile';
$string['privacy:metadata:rating'] = 'Evaluarea introdusă de utilizator este stocată alături de o mapare a articolului care a fost evaluat.';
$string['privacy:metadata:rating:rating'] = 'Evaluarea numerică introdusă de utilizator.';
$string['privacy:metadata:rating:timecreated'] = 'Când s-a notat prima dată.';
$string['privacy:metadata:rating:timemodified'] = 'Când a fost actualizată nota ultima dată.';
$string['privacy:metadata:rating:userid'] = 'Utilizatorul care a făcut notarea.';
$string['rate'] = 'Notă';
$string['ratepermissiondenied'] = 'Nu aveți permisiunea să acordați o notă';
$string['rating'] = 'Notare';
$string['ratinginvalid'] = 'Notarea este invalidă';
$string['ratings'] = 'Aprecieri';
$string['ratingtime'] = 'Restricționați aprecierile pentru elementele cu datele din acest interval:';
$string['rolewarning'] = 'Roluri care au permisiunea de a aprecia';
$string['rolewarning_help'] = 'Rolurile cu permisiunea de a evalua sunt roluri cu capacitatea moodle/rating:rate plus orice capabilități de evaluare specifice activității. Puteți acorda mai multor roluri permisiunea de a evalua prin intermediul paginii Permisiuni.';
$string['scaleselectionrequired'] = 'La selectarea unui tip de apreciere agregat trebuie, de asemenea, să selectați utilizarea fie a unei scale fie să setați un punctaj maxim.';
