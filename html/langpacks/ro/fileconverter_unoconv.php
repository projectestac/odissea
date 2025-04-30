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
 * Strings for component 'fileconverter_unoconv', language 'ro', version '4.4'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Calea către convertorul de documente unoconv';
$string['pathtounoconv_help'] = 'Calea către convertorul de documente unoconv. Acesta este un executabil care este capabil să convertească între formatele de documente acceptate de LibreOffice. Acest lucru este opțional, dar dacă este specificat, Moodle îl va folosi pentru a converti automat între formate de documente. Aceasta este utilizată pentru a accepta o gamă mai largă de fișiere de intrare pentru caracteristica de adnotare a atribuirii PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Plugin-ul pentru convertorul de documente Unoconv nu stochează date personale.';
$string['test_unoconv'] = 'Cale test unoconv';
$string['test_unoconvdoesnotexist'] = 'Calea unoconv nu indică programul unoconv. Vă rugăm să examinați setările pentru această cale.';
$string['test_unoconvdownload'] = 'Descărcați fișierul test pdf convertit.';
$string['test_unoconvempty'] = 'Calea unoconv nu este setată. Vă rugăm să revedeți setările căii.';
$string['test_unoconvisdir'] = 'Calea unoconv indică spre spre un folder, vă rugăm să includeți programul unoconv în calea specificată';
$string['test_unoconvnotestfile'] = 'Documentul de testare care urmează să fie convertit în PDF lipsește.';
$string['test_unoconvnotexecutable'] = 'Calea unoconv indică un fișier care nu este executabil';
$string['test_unoconvok'] = 'Calea unoconv pare a fi configurată corespunzător.';
$string['test_unoconvversionnotsupported'] = 'Versiunea de unoconv pe care ați instalat-o nu este acceptată.';
