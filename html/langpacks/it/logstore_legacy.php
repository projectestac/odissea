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
 * Strings for component 'logstore_legacy', language 'it', version '4.1'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Registrazione evento legacy nel log';
$string['loglegacy'] = 'Registra nel log legacy';
$string['loglegacy_help'] = 'Il plugin memorizza i dati di log nella tabella legacy (mdl_log). Questa funzionalità è stata rimpiazzata da nuovi plugin di logging più efficienti e più ricchi di funzioni. Il plugin Log legacy dovrebbe essere usato solamente in presenza di report che effettuano query sulla vecchia tabella di log. La scrittura sul Log legacy aumenta il carico, si raccomanda di disabilitare plugin legacy se non strettamente necessario.';
$string['pluginname'] = 'Log legacy';
$string['pluginname_desc'] = 'Plugin che memorizza i dati di log nella tabella legacy di log';
$string['privacy:metadata:log'] = 'Raccolta di eventi passati.';
$string['privacy:metadata:log:action'] = 'Descrizione dell\'azione.';
$string['privacy:metadata:log:info'] = 'Informazioni aggiuntive';
$string['privacy:metadata:log:ip'] = 'Indirizzo IP usato per l\'evento.';
$string['privacy:metadata:log:time'] = 'Data e ora di svolgimento dell\'azione.';
$string['privacy:metadata:log:url'] = 'URL relativo all\'evento.';
$string['privacy:metadata:log:userid'] = 'ID dell\'utente che ha svolto l\'azione.';
$string['taskcleanup'] = 'Pulizia tabella log legacy';
