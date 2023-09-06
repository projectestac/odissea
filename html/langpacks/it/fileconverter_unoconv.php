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
 * Strings for component 'fileconverter_unoconv', language 'it', version '4.1'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Percorso del convertitore di documenti unoconv';
$string['pathtounoconv_help'] = 'Percorso dell\'eseguibile unoconv. Unoconv è in grado di convertire i file nei formati supportati da LibreOffice. Sebbene si tratti di un\'impostazione opzionale, Moodle potrà utilizzare unoconv per convertire automaticamente i formati dei documenti, consentendo di supportare nella Annotazione PDF una più ampia gamma di estensioni di file.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Il pluign "convertitore di documenti Unoconv" non memorizza dati personali.';
$string['test_unoconv'] = 'Test del percorso di unoconv';
$string['test_unoconvdoesnotexist'] = 'Il percorso di unoconv non punta all\'eseguibile unoconv. Devi verificare il percorso impostato.';
$string['test_unoconvdownload'] = 'Scarica il file pdf di test converito';
$string['test_unoconvempty'] = 'Il percorso di unoconv non è impostato. Per favore controllare le impostazioni.';
$string['test_unoconvisdir'] = 'Il percorso di unoconv punta ad un cartella, nel percorso devi includere anche il nome dell\'eseguibile';
$string['test_unoconvnotestfile'] = 'Manca Il documento di test da convertire in PDF.';
$string['test_unoconvnotexecutable'] = 'Il percorso di unoconv punta ad un file che non è eseguibile';
$string['test_unoconvok'] = 'Il percorso di unoconv è configurato correttamente.';
$string['test_unoconvversionnotsupported'] = 'La versione installata di unoconv non è supportata. La funzionalità di valutazione dei compiti richiede la versione 0.7 o superiore.';
