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
 * Strings for component 'cachestore_file', language 'ro', version '4.1'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Directorul memoriei temporare curățat în mod asincron';
$string['asyncpurge_help'] = 'Dacă este activat, noul director este creat cu revizuirea cache, iar directorul vechi va fi șters asincron printr-o sarcină programată.';
$string['autocreate'] = 'Creare automată director';
$string['autocreate_help'] = 'Dacă este activat, directorul specificat în cale va fi creat în mod automat, dacă nu există deja.';
$string['lockwait'] = 'Timp maxim de blocare';
$string['lockwait_help'] = 'Perioada maximă de timp în secunde pentru a aștepta o blocare exclusivă înainte de a citi sau scrie o cheie de cache. Aceasta este folosită numai pentru definițiile cache pentru care este necesară blocarea pentru citire sau scriere.';
$string['path'] = 'Calea cache';
$string['path_help'] = 'Directorul care ar trebui utilizat pentru a stoca fișiere pentru acest depozit cache. Dacă este lăsat necompletat (implicit), un director va fi creat automat în directorul moodledata. Aceasta poate fi utilizată pentru a îndrepta un depozit de fișiere către un director pe o unitate mai performantă (cum ar fi una în memorie).';
$string['pluginname'] = 'Fișier cache';
$string['prescan'] = 'Director Prescan';
$string['prescan_help'] = 'Dacă este activat, directorul este scanat atunci când cache-ul este utilizat pentru prima dată și solicitările de fișiere sunt mai întâi verificate în raport cu datele de scanare. Acest lucru vă poate ajuta dacă aveți un sistem de fișiere lent și constatați că operațiile de fișiere vă provoacă un gât de sticlă.';
$string['privacy:metadata'] = 'Plugin-ul cache cache fișier stochează date pentru scurt timp ca parte a funcționalității sale de cache, dar aceste date sunt șterse în mod regulat.';
$string['singledirectory'] = 'Magazin cu un singur director';
$string['singledirectory_help'] = 'Dacă este activat fișierele (elementele stocate în cache) vor fi stocate într-un singur director, mai degrabă decât să fie împărțite în mai multe directoare.

Activarea acestui lucru va accelera interacțiunile fișierelor, dar implică riscul crescut de a atinge limitările sistemului de fișiere.

Este recomandabil să activați acest lucru numai dacă următoarele sunt adevărate:

* Dacă știți că numărul de articole din cache va fi suficient de mic încât să nu provoace probleme cu sistemul de fișiere cu care rulați.
* Datele stocate în cache nu sunt costisitoare de generat. Dacă rămâne în continuare cu opțiunea implicită, poate fi totuși opțiunea mai bună, deoarece reduce șansele de probleme.';
$string['task_asyncpurge'] = 'Ștergeți asincron fișierele din stocul de directoare vechi de revizuire a memoriei cache';
