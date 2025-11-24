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
 * Strings for component 'logstore_database', language 'ro', version '4.5'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Dimensiunea memoriei tampon';
$string['buffersize_help'] = 'Numărul de intrări jurnal inserate într-o operație de bază de date, care îmbunătățește performanța.';
$string['conectexception'] = 'Nu se poate conecta la baza de date';
$string['create'] = 'Creează';
$string['databasecollation'] = 'Colație bază de date';
$string['databasehandlesoptions'] = 'Opțiuni de gestionare a bazei de date';
$string['databasehandlesoptions_help'] = 'Baza de date la distanță gestionează propriile sale opțiuni.';
$string['databasepersist'] = 'Conexiuni de baze de date persistente';
$string['databaseschema'] = 'Schema bazei de date';
$string['databasesettings'] = 'Setări bază de date';
$string['databasesettings_help'] = 'Detalii conexiune a bazei de date pentru jurnalul extern: {$a}';
$string['databasetable'] = 'Tabel bază de date';
$string['databasetable_help'] = 'Numele tabelului unde vor fi memorate autentificările. Acest tabel trebuie să aibă o structură identică cu cel folosit de logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtrare de jurnale';
$string['filters_help'] = 'Activați filtrele care exclud înregistrarea unor acțiuni.';
$string['includeactions'] = 'Include acțiuni de acest fel';
$string['includelevels'] = 'Includeți activitățile cu aceste niveluri educaționale';
$string['jsonformat'] = 'Format JSON';
$string['jsonformat_desc'] = 'Utilizați formatul JSON standard în locul datelor serializate PHP în câmpul „alte” al bazei de date.';
$string['logguests'] = 'Înregistrați acțiunile oaspeților';
$string['other'] = 'Altele';
$string['participating'] = 'Participante';
$string['pluginname'] = 'Jurnalul bazei de date externe';
$string['pluginname_desc'] = 'Un plugin jurnal care stochează intrările jurnalului într-o tabelă de baze de date externe.';
$string['privacy:metadata:log'] = 'O colecție de evenimente din trecut';
$string['privacy:metadata:log:anonymous'] = 'Dacă evenimentul a fost semnalat ca anonim';
$string['privacy:metadata:log:eventname'] = 'Numele evenimentului';
$string['privacy:metadata:log:ip'] = 'Adresa IP utilizată în momentul evenimentului';
$string['privacy:metadata:log:origin'] = 'Originea evenimentului';
$string['privacy:metadata:log:other'] = 'Informații suplimentare despre eveniment';
$string['privacy:metadata:log:realuserid'] = 'ID-ul utilizatorului real din spatele evenimentului, atunci când mascați un utilizator.';
$string['privacy:metadata:log:relateduserid'] = 'ID-ul unui utilizator legat de acest eveniment';
$string['privacy:metadata:log:timecreated'] = 'Ora când a avut loc evenimentul';
$string['privacy:metadata:log:userid'] = 'Identificatorul utilizatorului care a declanșat acest eveniment';
$string['read'] = 'Citite';
$string['tablenotfound'] = 'Tabelul specificat nu a fost găsit';
$string['teaching'] = 'Predare';
$string['testingsettings'] = 'Se testează setările bazei de date...';
$string['testsettings'] = 'Testarea conexiunii';
$string['update'] = 'Actualizare';
