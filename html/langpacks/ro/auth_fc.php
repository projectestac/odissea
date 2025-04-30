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
 * Strings for component 'auth_fc', language 'ro', version '4.4'.
 *
 * @package     auth_fc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_fcchangepasswordurl'] = 'URL schimbare parolă';
$string['auth_fcconnfail'] = 'Eroare conexiune - număr eroare: {$a->no}, string eroare: {$a->str}';
$string['auth_fccreators'] = 'Lista de grupuri ai căror membri au permisiunea de a crea cursuri noi. Separaţi mai multe grupuri prin ‘;’. Numele trebuie scrise exact ca pe serverul FirstClass. Sistemul este case-sensitive.';
$string['auth_fccreators_key'] = 'Creatori';
$string['auth_fcdescription'] = 'Această metodă foloseşte un server FirstClass pentru a verifica dacă numele de utilizator şi parola introduse sunt valide.';
$string['auth_fcfppport'] = 'Port server (3333 este cel mai comun)';
$string['auth_fcfppport_key'] = 'Port';
$string['auth_fchost'] = 'Adresa de server FirstClass. Folosiţi IP-ul sau numele de DNS.';
$string['auth_fchost_key'] = 'Gazdă';
$string['auth_fcpasswd'] = 'Parola pentru contul de mai sus.';
$string['auth_fcpasswd_key'] = 'Parolă';
$string['auth_fcuserid'] = 'ID User pentru contul FirstClass cu set de privilegii \'Subadministrator\'.';
$string['auth_fcuserid_key'] = 'ID utilizator';
$string['pluginname'] = 'Server FirstClass';
