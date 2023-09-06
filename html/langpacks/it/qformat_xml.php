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
 * Strings for component 'qformat_xml', language 'it', version '4.1'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'File XML non valido - attesa una stringa (usa CDATA?)';
$string['pluginname'] = 'Formato Moodle XML';
$string['pluginname_help'] = 'È il formato di Moodle per l\'importazione ed esportazione delle domande dei quiz.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'Il plugin \'Formato Moodle XML\' non memorizza dati personali.';
$string['truefalseimporterror'] = '<b>Attenzione</b>: non è stato possibile importare correttamente la domanda Vero/Falso \'{$a->questiontext}\' . Non è chiaro se l risposta esatta è Vero oppure Falso. La domanda è stata importata assumendo che la risposta sia \'{$a->answer}\'. Se la risposta scelta non è quella esatta è necessario modificare la domanda.';
$string['unsupportedexport'] = 'Il tipo di domanda {$a} non è supportato dall\'export XML';
$string['xmlimportnoname'] = 'Nel file XML manca il nome della domanda';
$string['xmlimportnoquestion'] = 'Nel file XML manca il testo della domanda';
$string['xmltypeunsupported'] = 'Il tipo di domanda {$a} non è supportato dall\'importazione in formato XML';
