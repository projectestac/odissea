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
 * Strings for component 'qbehaviour_deferredcbm', language 'ro', version '4.1'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precizie';
$string['accuracyandbonus'] = 'Precizie + Bonus';
$string['assumingcertainty'] = 'Nu ai selectat o certitudine. Presupunând: {$a}.';
$string['averagecbmmark'] = 'Punctaj mediu CBM';
$string['basemark'] = 'Notă de bază {$a}';
$string['breakdownbycertainty'] = 'Defalcare per certitudine';
$string['cbmbonus'] = 'Bonus CBM';
$string['cbmgradeexplanation'] = 'Pentru CBM, nota de mai sus este afișată în raport cu maximul pentru toate cele corecte la C=1.';
$string['cbmgrades'] = 'Note CBM';
$string['cbmgrades_help'] = 'Cu Marcarea bazată pe certitudine (CBM), obținerea corectă a fiecărei întrebări cu C=1 (certitudine scăzută) oferă o notă de 100%. Notele pot fi de până la 300% dacă fiecare întrebare este corectă cu C=3 (certitudine ridicată). Concepțiile greșite (răspunsuri greșite cu încredere) scad notele mult mai mult decât răspunsurile greșite despre care se recunoaște a fi incerte. Acest lucru poate duce chiar la note generale negative.

** Acuratețea ** este% certitudinea corectă ignorând, dar ponderată pentru nota maximă a fiecărei întrebări. Distingerea cu succes a răspunsurilor din ce în ce mai fiabile oferă o notă mai bună decât selectarea aceleiași certitudini pentru fiecare întrebare. Acest lucru se reflectă în ** Bonusul CBM **. ** Acuratețe ** + ** Bonus CBM ** este o măsură mai bună a cunoștințelor decât ** Acuratețe **. Concepțiile greșite pot duce la un bonus negativ, un avertisment pentru a privi cu atenție ceea ce este și nu se știe.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'Punctaj CBM {$a}';
$string['certainty'] = 'Certitudine';
$string['certainty-1'] = 'Nicio idee';
$string['certainty1'] = 'C=1 (Nesigur: <67%)';
$string['certainty2'] = 'C=2 (Mid: >67%)';
$string['certainty3'] = 'C=3 (Sigur: >80%)';
$string['certainty_help'] = 'Marcarea bazată pe certitudine necesită să indicați cât de sigur credeți că este răspunsul dvs.
Nivelurile disponibile sunt:

Nivelul de certitudine | C=1 (Nu sunt sigur) | C=2 (mijloc) | C=3 (destul de sigur)
----------------------------------- | -------- | ---------- | -----------
Marcați dacă este corect |     1    |        2     |       3
Marcați dacă este greșit  |     0    |       -2     |      -6
Probabilitatea corectă     | <67% | 67-80% | > 80%

Cele mai bune note se obțin recunoscând incertitudinea. De exemplu, dacă credeți că există mai mult de 1 din 3 șanse de a greși, ar trebui să introduceți C=1 și să evitați riscul unui semn negativ.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Nicio idee';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Nicio idee';
$string['foransweredquestions'] = 'Rezultate doar pentru {$a} întrebările la care s-a răspuns';
$string['forentirequiz'] = 'Rezultate pentru tot chestionarul ({$a} questions)';
$string['howcertainareyou'] = 'Certitudine{$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Răspunsuri: {$a->responses}. Precizie: {$a->fraction}. (Gama optimă {$a->idealrangelow} la {$a->idealrangehigh}). Ați fost {$a->judgement} folosind acest nivel de certitudine.';
$string['noquestions'] = 'Nu sunt răspunsuri';
$string['overconfident'] = 'prea încrezător';
$string['pluginname'] = 'Feedback întârziat cu CBM';
$string['privacy:metadata'] = 'Feedback-ul
 cu pluginul CBM privind comportamentul întrebărilor nu stochează date personale.';
$string['slightlyoverconfident'] = 'puțin prea încrezător';
$string['slightlyunderconfident'] = 'puțin lipsit de încredere';
$string['underconfident'] = 'lipsit de încredere';
$string['weightx'] = 'Pondere {$a}';
