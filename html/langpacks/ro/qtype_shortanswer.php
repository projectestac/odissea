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
 * Strings for component 'qtype_shortanswer', language 'ro', version '4.4'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Spațiu gol pentru {no} Mai Multe Răspunsuri';
$string['answer'] = 'Răspuns: {$a}';
$string['answermustbegiven'] = 'Dacă răspunsul la întrebare se notează sau necesită feedback trebuie să introduceţi un răspuns';
$string['answerno'] = 'Răspuns {$a}';
$string['caseno'] = 'Da';
$string['casesensitive'] = 'Majusculă';
$string['caseyes'] = 'Da, majusculele și minusculele trebuie să corespundă';
$string['correctansweris'] = 'Răspunsul corect este: {$a}';
$string['correctanswers'] = 'Răspunsuri corecte';
$string['filloutoneanswer'] = 'Trebuie să furnizaţi cel puţin un răspuns posibil. Răspunsurile necompletate nu vor fi utilizate. \'*\' poate fi utilizat ca wildcard pentru toate caracterele. Primul răspuns găsit care corespunde va fi utilizat pentru determinarea notei sau a feedback-ului.';
$string['notenoughanswers'] = 'Acest tip de întrebare necesită cel puțin {$a} răspunsuri';
$string['pleaseenterananswer'] = 'Vă rugăm să inserați un răspuns';
$string['pluginname'] = 'Răspuns scurt';
$string['pluginname_help'] = 'Ca răspuns la o întrebare (care poate include o imagine), respondentul tastează un cuvânt sau o frază scurtă. Pot exista mai multe răspunsuri corecte posibile, fiecare având o notă diferită. Dacă este selectată opțiunea „Sensibil la majuscule”, atunci puteți avea scoruri diferite pentru „Cuvânt” sau „cuvânt”.';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Se adaugă o întrebare cu răspuns scurt';
$string['pluginnameediting'] = 'Se editează o întrebare cu răspuns scurt';
$string['pluginnamesummary'] = 'Permite un răspuns de unul sau câteva cuvinte care este notat prin comparație cu diverse modele de  răspunsuri, care pot conține metacaractere.';
$string['privacy:metadata'] = 'Pluginul tip întrebare cu răspuns scurt permite autorilor de întrebări să seteze opțiuni implicite ca preferințe ale utilizatorului.';
$string['privacy:preference:defaultmark'] = 'Punctajul implict setat pentru o întrebare curentă.';
$string['privacy:preference:penalty'] = 'Penalizare pentru fiecare încercare incorectă atunci când întrebările sunt rulate folosind comportamentul „Interactiv cu încercări multiple” sau „Modul adaptiv”.';
$string['privacy:preference:usecase'] = 'Dacă răspunsul ar trebui să conțină majuscule și minuscule.';
