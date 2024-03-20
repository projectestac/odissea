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
 * Strings for component 'cachestore_mongodb', language 'ro', version '4.1'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Baza de date';
$string['database_help'] = 'Denumirea bazei de date folosite.';
$string['extendedmode'] = 'Utilizează cheile extinse';
$string['extendedmode_help'] = 'Dacă este activată, seturile de taste complete vor fi utilizate atunci când lucrați cu pluginul. Aceasta nu este încă utilizată intern, dar vă va permite să căutați cu ușurință și să investigați manual pluginul MongoDB dacă alegeți acest lucru. Dacă activați această opțiune, se va adăuga o mică cheltuială, așa că ar trebui să se facă numai dacă aveți nevoie.';
$string['password'] = 'Parolă';
$string['password_help'] = 'Parola utilizatorului folosită pentru conectare.';
$string['pleaseupgrademongo'] = 'Folosiți o versiune veche a extensiei PHP Mongo (<1.3). Suportul pentru versiunile vechi ale extensiei Mongo va fi renunțat în viitor. Vă rugăm să luați în considerare actualizarea.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'Pluginul MongoDB pentru stocarea cache-ului stochează datele pe scurt, ca parte a funcționalității sale de cache. Aceste date sunt stocate pe un server MongoDB unde datele sunt eliminate în mod regulat.';
$string['privacy:metadata:mongodb:data'] = 'Diferitele date stocate în cache';
$string['replicaset'] = 'Set replica';
$string['replicaset_help'] = 'Numele setului de replici la care să vă conectați. Dacă acest lucru este dat, masterul va fi determinat folosind comanda bazei de date ismaster de pe semințe, astfel încât driverul se poate conecta la un server care nici măcar nu a fost listat.';
$string['server'] = 'Server';
$string['server_help'] = 'Acesta este șirul de conexiune pentru serverul pe care doriți să îl utilizați. Mai multe servere pot fi specificate folosind o listă separată prin virgule.';
$string['testserver'] = 'Server test';
$string['testserver_desc'] = 'Șirul de conexiune pentru un server de utilizat pentru testare. Dacă a fost specificat un server de testare, atunci performanța MongoDB poate fi testată folosind pagina de performanță cache din blocul de administrare.
De exemplu: mongodb: //127.0.0.1: 27017';
$string['username'] = 'Nume de utilizator';
$string['username_help'] = 'Nume de utilizator folosit pentru conectare.';
$string['usesafe'] = 'Folosiți în condiții de siguranță';
$string['usesafe_help'] = 'Dacă este activată, opțiunea usesafe va fi utilizată în timpul operațiilor de inserare, preluare și eliminare. Dacă ați specificat un set de replici, acesta va fi forțat oricum.';
$string['usesafevalue'] = 'Utilizează o valoare sigură';
$string['usesafevalue_help'] = 'Puteți alege să furnizați o valoare specifică pentru utilizare sigură. Aceasta va determina numărul de servere pe care operațiunile trebuie să fie finalizate înainte ca acestea să fie considerate a fi finalizate.';
