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
 * Strings for component 'logstore_legacy', language 'ro', version '4.1'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Eveniment vechi înregistrat';
$string['loglegacy'] = 'Înregistrați date vechi';
$string['loglegacy_help'] = 'Acest plugin înregistrează datele jurnalului în tabelul jurnal vechi (mdl_log). Această funcționalitate a fost înlocuită de pluginuri de înregistrare mai noi, mai bogate și mai eficiente, deci ar trebui să rulați acest plugin numai dacă aveți rapoarte personalizate vechi care interogă direct vechiul tabel de jurnal. Scrierea în jurnalele vechi va crește încărcarea, de aceea este recomandat să dezactivați acest plugin din motive de performanță atunci când nu este necesar.';
$string['pluginname'] = 'Jurnal format mai vechi';
$string['pluginname_desc'] = 'Un plugin jurnal care stochează intrările jurnalului în tabelul de jurnal vechi.';
$string['privacy:metadata:log'] = 'O colecție de evenimente din trecut';
$string['privacy:metadata:log:action'] = 'O descriere a acțiunii';
$string['privacy:metadata:log:info'] = 'Informatii suplimentare';
$string['privacy:metadata:log:ip'] = 'Adresa IP utilizată în momentul evenimentului';
$string['privacy:metadata:log:time'] = 'Momentul în care a avut loc acțiunea';
$string['privacy:metadata:log:url'] = 'Adresa URL legată de eveniment';
$string['privacy:metadata:log:userid'] = 'ID-ul utilizatorului care a efectuat acțiunea';
$string['taskcleanup'] = 'Curățarea vechiului tabel de jurnal';
