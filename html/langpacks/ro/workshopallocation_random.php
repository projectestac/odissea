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
 * Strings for component 'workshopallocation_random', language 'ro', version '4.5'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Adăugați autoevaluări';
$string['allocationaddeddetail'] = 'Nouă evaluare care trebuie făcută: <strong> {$a->reviewername} </strong> este examinatorul <strong> {$a->authorname} </strong>';
$string['allocationdeallocategraded'] = 'Imposibil de alocat o evaluare deja notată: recenzent <strong> {$a->reviewername} </strong>, autorul trimiterii <strong> {$a->authorname} </strong>';
$string['allocationreuseddetail'] = 'Evaluare reutilizată: <strong> {$a->reviewername} </strong> păstrat ca recenzent al <strong> {$a->authorname} </strong>';
$string['allocationsettings'] = 'Setări de alocare';
$string['assessmentdeleteddetail'] = 'Evaluare repartizată: <strong> {$a->reviewername} </strong> nu mai este examinatorul <strong> {$a->authorname} </strong>';
$string['assesswosubmission'] = 'Participanții pot evalua fără a fi trimis nimic';
$string['confignumofreviews'] = 'Numărul implicit de trimiteri care urmează să fie alocat aleatoriu';
$string['excludesamegroup'] = 'Preveniți recenziile de la colegi din același grup';
$string['noallocationtoadd'] = 'Nu există alocări de adăugat';
$string['nogroupusers'] = '<p> Avertisment: Dacă atelierul este în modul „grupuri vizibile” sau „grupuri separate”, atunci utilizatorii TREBUIE să facă parte din cel puțin un grup pentru a li se aloca evaluări inter pares prin acest instrument. Utilizatorilor care nu sunt grupați li se pot primi noi autoevaluări sau li se pot elimina evaluările existente. </p>
<p> În prezent, acești utilizatori nu fac parte dintr-un grup: {$a} </p>';
$string['numofdeallocatedassessment'] = 'Dezalocarea a {$a} evaluări';
$string['numofrandomlyallocatedsubmissions'] = 'Atribuirea aleatorie a {$a} alocări';
$string['numofreviews'] = 'Număr de recenzii';
$string['numofselfallocatedsubmissions'] = 'Auto-alocare {$a} răspunsuri';
$string['numperauthor'] = 'pe propunere';
$string['numperreviewer'] = 'pe referent';
$string['pluginname'] = 'Alocare aleatorie';
$string['privacy:metadata'] = 'Pluginul de alocare aleatorie nu stochează date personale. Datele personale reale despre cine urmează să evalueze pe cine sunt stocate chiar de modulul Workshop și constituie baza pentru exportul detaliilor evaluărilor.';
$string['randomallocationdone'] = 'Alocare aleatorie realizată';
$string['removecurrentallocations'] = 'Elimină alocările curente';
$string['resultnomorepeers'] = 'Nu mai există colegi disponibili';
$string['resultnomorepeersingroup'] = 'Nu mai există colegii disponibili în acest grup separat';
$string['resultnotenoughpeers'] = 'Nu există suficienți colegi disponibili';
$string['resultnumperauthor'] = 'Se încearcă alocarea {$a} recenzie(i) per autor';
$string['resultnumperreviewer'] = 'Se încearcă alocarea {$a} recenzie(i) per referent';
$string['stats'] = 'Statisticile curente de alocare';
