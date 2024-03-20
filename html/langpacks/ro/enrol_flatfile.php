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
 * Strings for component 'enrol_flatfile', language 'ro', version '4.1'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Codificare fișier';
$string['expiredaction'] = 'Acțiune de expirare a înscrierii';
$string['expiredaction_help'] = 'Selectați acțiunea care trebuie întreprinsă la expirarea înscrierii utilizatorului. Vă rugăm să rețineți că unele date și setări ale utilizatorilor sunt eliminate din curs în timpul retragerii de la curs.';
$string['filelockedmail'] = 'Fișierul text, pe care îl utilizați pentru înscrierile bazate pe fișiere ({$a}), nu poate fi șters prin procesul cron. Acest lucru înseamnă, de obicei, că permisiunile nu sunt corecte. Vă rugăm să remediați permisiunile, astfel încât Moodle să poată șterge fișierul, altfel el ar putea fi procesat în mod repetat.';
$string['filelockedmailsubject'] = 'Eroare semnificativă: fișier de înscriere';
$string['flatfile:manage'] = 'Gestionează înscrierea manuală a utilizatorilor';
$string['flatfile:unenrol'] = 'Retrage manual utilizatorii de curs';
$string['flatfileenrolments'] = 'Înscrieri în fișier plat (CSV)';
$string['flatfilesync'] = 'Sincronizarea înscrierilor în fișier plat';
$string['location'] = 'Localizare fișier';
$string['location_desc'] = 'Specifică calea spre fișierul de înscriere. Fișierul este șters în mod automat după procesare.';
$string['mapping'] = 'Cartografierea poziției fișierului plat';
$string['messageprovider:flatfile_enrolment'] = 'Mesaje de înregistrare a fișierelor plate';
$string['notifyadmin'] = 'Notifică administratorul';
$string['notifyenrolled'] = 'Notifică utilizatorii înscriși';
$string['notifyenroller'] = 'Notifică utilizatorul responsabil pentru înscrieri';
$string['pluginname'] = 'Fișier plat (CSV)';
$string['pluginname_desc'] = 'Această metodă va verifica în mod repetat și va procesa un fișier text formatat special în locația pe care o specificați.
Fișierul este un fișier separat prin virgulă, având patru sau șase câmpuri pe linie:

    operațiune, poziție, număr ID utilizator, număr ID curs [, data de începere [, data de finalizare]]

unde:

* operațiune - adaugă | șterge
* poziție - cursant | formator | teacheredit
* număr ID utilizator - numărul de identificare din tabelul utilizatorului NB nu id
* număr ID curs - numărul de identificare din tabelul cursului NB nu id
* data de începere - data de începere (în câteva secunde începând cu o anumită dată) - opțional
* data de finalizare - data de finalizare (în câteva secunde începând cu o anumită dată) - opțional

Ar putea arăta, astfel:
<pre class="informationbox">
   adaugă, cursant, 5, CF101
   adaugă, formator, 6, CF101
   adaugă, teacheredit, 7, CF101
   șterge, cursant, 8, CF101
   șterge, cursant, 17, CF101
   șterge, cursant, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Plugin-ul de înscriere pentru fișier plat (CSV) poate stoca datele personale referitoare la înscrierile viitoare în tabelul enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Acțiunea de înscriere așteptată la data stabilită';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'ID-ul cursului la care se referă înscrierea';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID-ul poziției care urmează să fie atribuită sau neatribuită';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Ora la care se termină înscrierea';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Ora la care se modifică înscrierea';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Ora la care începe înscrierea';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID-ul utilizatorului la care se referă atribuirea poziției';
