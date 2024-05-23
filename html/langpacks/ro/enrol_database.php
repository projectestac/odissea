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
 * Strings for component 'enrol_database', language 'ro', version '4.1'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Configurează sesiunea de înscrieri a bazei de date';
$string['database:unenrol'] = 'Retrage utilizatorii suspendați';
$string['dbencoding'] = 'Codificarea bazei de date';
$string['dbhost'] = 'Gazda bazei de date';
$string['dbhost_desc'] = 'Tastați adresa IP a serverului bazei de date sau numele gazdei. Folosiți numele unui sistem DSN, dacă utilizați ODBC. Folosiți PDO DSN, dacă operați PDO.';
$string['dbname'] = 'Numele bazei de date';
$string['dbname_desc'] = 'Nu completați, dacă utilizați numele unui DSN în gazda bazei de date.';
$string['dbpass'] = 'Parola bazei de date';
$string['dbsetupsql'] = 'Comanda de configurare a bazei de date';
$string['dbsetupsql_desc'] = 'Comandă SQL pentru configurarea bazei de date speciale, utilizată adesea pentru configurarea codificării comunicațiilor - de exemplu, pentru MySQL și PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Folosiți citatele sybase';
$string['dbsybasequoting_desc'] = 'Evitarea citatului unic în stil Sybase - necesară pentru Oracle, MS SQL și alte baze de date. Nu utilizați pentru MySQL!';
$string['dbtype'] = 'Driver bază de date';
$string['dbtype_desc'] = 'Numele driver-ului ADOdb al bazei de date, tipul motorului bazei de date externe.';
$string['dbuser'] = 'Utilizator bază de date';
$string['debugdb'] = 'Depanare ADOdb';
$string['debugdb_desc'] = 'Depanați conexiunea ADOdb la baza de date externă - utilizați, atunci când obțineți o pagină goală în timpul conectării. Nu este potrivit pentru site-urile de producție!';
$string['defaultcategory'] = 'Categorie implicită de cursuri noi';
$string['defaultcategory_desc'] = 'Categorie implicită pentru cursurile create automat. Este folosită, atunci când nu a fost specificat sau găsit ID-ul niciunei categorii noi.';
$string['defaultrole'] = 'Rol implicit';
$string['defaultrole_desc'] = 'Rolul atribuit în mod implicit, dacă în tabelul extern nu este specificată altă poziție.';
$string['ignorehiddencourses'] = 'Ignoră cursurile ascunse';
$string['ignorehiddencourses_desc'] = 'Dacă este activat, utilizatorii nu vor fi înscriși la acele cursuri setate să nu fie disponibile pentru aceștia.';
$string['localcategoryfield'] = 'Câmpul categoriei locale';
$string['localcoursefield'] = 'Câmpul cursului local';
$string['localrolefield'] = 'Câmpul rol local';
$string['localuserfield'] = 'Câmpul utilizatorului local';
$string['newcoursecategory'] = 'Câmpul categoriei de cursuri noi';
$string['newcoursefullname'] = 'Câmpul denumirii complete a cursului nou';
$string['newcourseidnumber'] = 'Câmpul numărului de ID al cursului nou';
$string['newcourseshortname'] = 'Câmpul denumirii prescurtate a cursului nou';
$string['newcoursetable'] = 'Tabel cursuri noi la distanță';
$string['newcoursetable_desc'] = 'Specificați numele tabelului care conține lista cursurilor care ar trebui create automat. Dacă nu este completat, înseamnă că nu sunt create cursuri.';
$string['pluginname'] = 'Bază de date externă';
$string['pluginname_desc'] = 'Puteți utiliza o bază de date externă (de aproape orice fel), pentru a vă controla înscrierile. Se presupune că baza de date externă conține cel puțin un câmp care conține un ID de curs și un câmp care conține un ID de utilizator. Acestea sunt comparate cu câmpurile pe care le alegeți în cursul local și în tabelele utilizatorilor.';
$string['privacy:metadata'] = 'Plugin-ul Înscriere în baza de date externă nu memorează date personale.';
$string['remotecoursefield'] = 'Câmp curs la distanță';
$string['remotecoursefield_desc'] = 'Numele câmpului din tabelul la distanță pe care îl folosim, pentru a corespunde cu intrările din tabelul cursului.';
$string['remoteenroltable'] = 'Tabel de înscriere a utilizatorului de la distanță';
$string['remoteenroltable_desc'] = 'Specificați numele tabelului care conține lista înscrierilor utilizatorilor. Dacă nu este completat, înseamnă că înscrierea utilizatorului nu se sincronizează.';
$string['remoteotheruserfield'] = 'Câmpul altui utilizator de la distanță';
$string['remoteotheruserfield_desc'] = 'Numele câmpului din tabelul la distanță pe care îl folosim, pentru a semnaliza atribuirile de rol pentru „Alt utilizator”.';
$string['remoterolefield'] = 'Câmp rol la distanță';
$string['remoterolefield_desc'] = 'Numele câmpului din tabelul la distanță pe care îl folosim, pentru a corespunde intrărilor din tabelul de roluri.';
$string['remoteuserfield'] = 'Câmp utilizator la distanță';
$string['remoteuserfield_desc'] = 'Numele câmpului din tabelul la distanță pe care îl folosim, pentru a corespunde intrărilor din tabelul utilizatorului.';
$string['settingsheaderdb'] = 'Conectarea la baza de date externă';
$string['settingsheaderlocal'] = 'Cartografierea câmpului local';
$string['settingsheadernewcourses'] = 'Generarea unui curs nou';
$string['settingsheaderremote'] = 'Sincronizarea înscrierilor la distanță';
$string['syncenrolmentstask'] = 'Sincronizați sarcina de înscrieri din baza de date externă';
$string['templatecourse'] = 'Șablon curs nou';
$string['templatecourse_desc'] = 'Opțional: cursurile create automat își pot copia setările dintr-un curs șablon. Tastați aici denumirea scurtă a cursului șablon.';
