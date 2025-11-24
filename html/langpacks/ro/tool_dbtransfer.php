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
 * Strings for component 'tool_dbtransfer', language 'ro', version '4.5'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Drivere de baze de date disponibile pentru migrare';
$string['cliheading'] = 'Migrarea bazei de date - asigurați-vă că nimeni nu accesează serverul în timpul migrării!';
$string['climigrationnotice'] = 'Migrarea bazei de date este în curs, așteptați până când migrarea se finalizează și administratorul serverului actualizează configurația și șterge fișierul $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Conversia acțiunilor de afișare a jurnalului';
$string['dbexport'] = 'Export bază de date';
$string['dbtransfer'] = 'Transfer bază de date';
$string['enablemaintenance'] = 'Activați modul de întreținere';
$string['enablemaintenance_help'] = 'Această opțiune activează modul de întreținere în timpul și după migrarea bazei de date, împiedică accesul tuturor utilizatorilor până la finalizarea migrării. Vă rugăm să rețineți că administratorul trebuie să șteargă manual fișierul $CFG->dataroot/climaintenance.html după actualizarea setărilor config.php pentru a relua funcționarea normală.';
$string['exportdata'] = 'Exportă date';
$string['notargetconectexception'] = 'Nu se poate conecta baza de date țintă, îmi pare rău.';
$string['options'] = 'Opțiuni';
$string['pluginname'] = 'Transfer de baze de date';
$string['privacy:metadata'] = 'Pluginul pentru transferul bazei de date nu stochează date personale.';
$string['targetdatabase'] = 'Baza de date țintă';
$string['targetdatabasenotempty'] = 'Baza de date țintă nu trebuie să conțină niciun tabel cu prefixul dat!';
$string['transferdata'] = 'Transfer de date';
$string['transferdbintro'] = 'Acest script va transfera întregul conținut al acestei baze de date pe un alt server de baze de date. Este adesea folosit pentru migrarea datelor către tipuri diferite de baze de date.';
$string['transferdbtoserver'] = 'Transferați această bază de date Moodle pe alt server';
$string['transferringdbto'] = 'Transferarea acestei baze de date {$a->dbtypefrom} în baza de date {$a->dbtype} „{$a->dbname}” din „{$a->dbhost}”';
