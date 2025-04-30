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
 * Strings for component 'dbtransfer', language 'ro', version '4.4'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Se verifică structura tabelului sursă';
$string['copyingtable'] = 'Se copiază tabelul {$a}';
$string['copyingtables'] = 'Se copiază conţinutul tabelului';
$string['creatingtargettables'] = 'Se creează tabelele în baza de date ţintă';
$string['dbexport'] = 'Export bază de date';
$string['dbtransfer'] = 'Transfer bază de date';
$string['differenttableexception'] = 'Structura tabelului {$a} este neconformă.';
$string['done'] = 'Realizat';
$string['exportschemaexception'] = 'Structura curentă a bazei de date nu este conformă cu toate fişierele de instalare.xml. <br /> {$a}';
$string['importschemaexception'] = 'Structura curentă a bazei de date nu este conformă cu toate fişierele de instalare .xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'Versiunea actuală {$a->currentver} nu se potrivește cu versiunea exportată {$a->schemaver}.';
$string['malformedxmlexception'] = 'S-a găsit XML incorect, nu se poate continua.';
$string['tablex'] = 'Tabel {$a}:';
$string['unknowntableexception'] = 'S-a găsit tabelul necunoscut {$a} în fişierul de export.';
