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
 * Strings for component 'fileconverter_unoconv', language 'nl', version '4.1'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Pad naar unoconv document converter';
$string['pathtounoconv_help'] = 'Pad naar unoconv documentconverter. Dit is een uitvoerbaar programma dat het mogelijk maakt om documenten te converteren die ondersteund worden door LibreOffice. Dit is optioneel, maar indien ingesteld zal Moodle die gebruiken om automatisch documenten van het ene formaat in het andere te converteren. Het zal gebruikt worden om een groter aantal ingevoerde bestandsformaten te ondersteunen om in een opdracht PDF te annoteren.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'De Unoconv documentconvertieplugin bewaart geen persoonlijke gegevens.';
$string['test_unoconv'] = 'Test pad naar  unoconv';
$string['test_unoconvdoesnotexist'] = 'Het pad naar unoconv verwijst niet naar het unoconv programma. Kijk je padinstellingen na.';
$string['test_unoconvdownload'] = 'Download het geconverteerde pdf testbestand.';
$string['test_unoconvempty'] = 'Het unoconv pad is niet ingesteld. Kijk de instellingen van het pad na.';
$string['test_unoconvisdir'] = 'Het unoconv pad verwijst naar een map. Geef ook de naam van het unoconv programma in het opgegeven pad.';
$string['test_unoconvnotestfile'] = 'Het testdocument om te converteren naar PDF ontbreekt.';
$string['test_unoconvnotexecutable'] = 'Het unoconv pad verwijst naar een bestand dat niet uitvoerbaar is';
$string['test_unoconvok'] = 'Het unoconv pad is juist geconfigureerd.';
$string['test_unoconvversionnotsupported'] = 'De unoconv versie die je hebt geïnstalleerd wordt niet ondersteund. De beoordelingsfunctie vereist versie 0.7 of hoger.';
