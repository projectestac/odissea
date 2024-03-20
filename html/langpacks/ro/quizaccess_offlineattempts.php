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
 * Strings for component 'quizaccess_offlineattempts', language 'ro', version '4.1'.
 *
 * @package     quizaccess_offlineattempts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permiteți încercarea offline a testului utilizând aplicația mobilă';
$string['allowofflineattempts_help'] = 'Dacă este activat, un utilizator de aplicație mobilă poate descărca testul și-l poate îparcurge offline.

Notă: nu este posibil ca un test să fie încercat offline dacă are o limită de timp, dacă necesită o adresă de rețea sau folosește orice comportament de întrebare, altul decât feedback-ul amânat (cu sau fără CBM) sau folosește navigarea secvențială.';
$string['confirmdatasaved'] = 'Confirm că nu am activități pe care nu le-am salvat pe dispozitive mobile.';
$string['mobileapp'] = 'Aplicație mobilă';
$string['offlineattemptserror'] = 'Nu este posibil ca un test să fie parcurs offline dacă are o limită de timp sau necesită o adresă de rețea, dacă folosește orice comportament de întrebare, altul decât feedback-ul amânat (cu sau fără CBM) sau folosește navigarea secvențială.';
$string['offlinedatamessage'] = 'Ați efectuat această activitate pe un dispozitiv mobil. Datele au fost salvate pe acest site în urmă cu {$a}.';
$string['pleaseconfirm'] = 'Vă rugăm să bifați și să confirmați că nu aveți activități nesalvate.';
$string['pluginname'] = 'Regula de acces la încercări offline';
$string['privacy:metadata'] = 'Pluginul pentru regulă de acces la teste de încercări offline nu stochează date personale.';
