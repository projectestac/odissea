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
 * Strings for component 'fileconverter_unoconv', language 'sv', version '4.1'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Sökväg till unoconv dokumentkonverterare';
$string['pathtounoconv_help'] = 'Sökväg till unoconv-dokumentkonverterare. Detta är en körbar fil som kan konvertera mellan dokumentformat som stöds av LibreOffice. Detta är valfritt, men om det anges kommer Moodle att använda det för att automatiskt konvertera mellan dokumentformat. Detta används för att erbjuda ett bredare stöd för indatafiler för inlämningsuppgiften Kommentera PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Pluginmodulen Unoconv dokumentkonverterare lagrar inga personuppgifter.';
$string['test_unoconv'] = 'Testa unoconv-sökväg';
$string['test_unoconvdoesnotexist'] = 'Sökvägen för unoconv pekar inte på unoconv-programmet. Vänligen kontrollera inställningarna för sökvägen.';
$string['test_unoconvdownload'] = 'Ladda ned den konverterade PDF-testfilen.';
$string['test_unoconvempty'] = 'Sökvägen till unoconv har inte angivits. Vänligen kontrollera inställningarna för sökvägen.';
$string['test_unoconvisdir'] = 'Sökvägen för unoconv pekar på en katalog. Vänligen inkludera unoconv-programmet i sökvägen du anger.';
$string['test_unoconvnotestfile'] = 'Dokumentet som ska konverteras till PDF saknas.';
$string['test_unoconvnotexecutable'] = 'Sökvägen för unoconv pekar på en icke-körbar fil.';
$string['test_unoconvok'] = 'Sökvägen för unoconv är korrekt inställd.';
$string['test_unoconvversionnotsupported'] = 'Unoconv-versionen som är installerad stöds inte.';
