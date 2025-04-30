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
 * Strings for component 'qtype_gapselect', language 'ro', version '4.4'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Spații libere pentru alte {no} opțiuni';
$string['answer'] = 'Răspunsul';
$string['blanknumber'] = 'Necompletat {$a}';
$string['choices'] = 'Opțiuni';
$string['choicex'] = 'Opțiune [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'meniu derulant';
$string['combinedcontrolnamegapselectplural'] = 'meniuri derulante';
$string['correctansweris'] = 'Răspunsul corect este: {$a}';
$string['errorblankchoice'] = 'Vă rugăm să verificați opțiunile: Alegerea {$a} este goală.';
$string['errormissingchoice'] = 'Vă rugăm să verificați textul întrebării: {$a} nu a fost găsit în alegeri! Doar numerele cu răspunsuri specificate pot fi utilizate ca substituenți.';
$string['errornoslots'] = 'Textul întrebării trebuie să conțină substituenți precum [[1]] pentru a arăta unde se potivesc cuvintele lipsă.';
$string['errorquestiontextblank'] = 'Trebuie să introduceți un text de întrebare.';
$string['group'] = 'Grup';
$string['pleaseputananswerineachbox'] = 'Vă rugăm să completați fiecare barem';
$string['pluginname'] = 'Selectați cuvintele care lipsesc';
$string['pluginname_help'] = 'Întrebările de tipul selectare cuvinte lipsă solicită respondentului să selecteze răspunsurile corecte din meniurile derulante.
Elementele [[1]], [[2]], [[3]], ... sunt folosite ca substituenți în textul întrebării, cu răspunsurile corecte specificate ca răspunsuri de alegere, respectiv 1, 2, 3, ... . Se pot adăuga răspunsuri de alegere suplimentară (distractori) pentru a face întrebarea mai dificilă. Răspunsurile la alegere pot fi grupate pentru a limita răspunsurile disponibile în fiecare meniu derulant.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Adăugarea unei întrebări de tipul selectare cuvinte lipsă';
$string['pluginnameediting'] = 'Editarea unei întrebări de tipul selectare cuvinte lipsă';
$string['pluginnamesummary'] = 'Cuvintele lipsă din textul întrebării sunt completate cu ajutorul meniurilor derulante.';
$string['privacy:metadata'] = 'Pluginul Selectați cuvintele lipsă tip întrebare permite autorilor de întrebări să seteze opțiuni implicite ca preferințe ale utilizatorului.';
$string['privacy:preference:defaultmark'] = 'Punctajul implict setat pentru o întrebare curentă.';
$string['privacy:preference:penalty'] = 'Penalizare pentru fiecare încercare incorectă atunci când întrebările sunt rulate folosind comportamentul „Interactiv cu încercări multiple” sau „Modul adaptiv”.';
$string['privacy:preference:shuffleanswers'] = 'Dacă răspunsurile ar trebui să fie amestecate automat.';
$string['regradeissuenumchoiceschanged'] = 'Numărul alegerilor în grupul {$a} a fost schimbat.';
$string['regradeissuenumgroupsschanged'] = 'Numărul grupurilor de alegeri a fost schimbat.';
$string['shuffle'] = 'Amestecă';
$string['tagsnotallowed'] = '{$a->tag} nu este permis. (Doar {$a->allowed} sunt permise.)';
$string['tagsnotallowedatall'] = '{$a->tag} nu este permis. (Aici nu este permis cod HTML).';
