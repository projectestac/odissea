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
 * Strings for component 'logstore_database', language 'it', version '4.1'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Dimensione buffer';
$string['buffersize_help'] = 'Per ottimizzare le prestazioni, è possibile impostare il numero di linee di log da inserire in batch con una singola transazione.';
$string['conectexception'] = 'Non è possibile connettersi al database';
$string['create'] = 'Crea';
$string['databasecollation'] = 'Collation database';
$string['databasehandlesoptions'] = 'Opzioni handle database';
$string['databasehandlesoptions_help'] = 'Gli handle del database remoto gestiscono le proprie opzioni.';
$string['databasepersist'] = 'Connessione database persistente';
$string['databaseschema'] = 'Schema database';
$string['databasesettings'] = 'Impostazioni database';
$string['databasesettings_help'] = 'Impostazioni per la connessione al database esterno di log:';
$string['databasetable'] = 'Tabella database';
$string['databasetable_help'] = 'Il nome della tabella dove memorizzare i dati di log. La tabella deve avere una struttura identica a quella della tabella del plugin di log standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtraggio log';
$string['filters_help'] = 'Il filtraggio consente di escludere alcuni tipi di azioni dal log.';
$string['includeactions'] = 'Includi azioni dei seguenti tipi';
$string['includelevels'] = 'Includi azioni con i seguenti livelli formativi';
$string['jsonformat'] = 'Formato JSON';
$string['logguests'] = 'Registra nel log le azioni degli ospiti';
$string['other'] = 'Altro';
$string['participating'] = 'Partecipazione';
$string['pluginname'] = 'Log database esterno';
$string['pluginname_desc'] = 'Plugin che memorizza i dati di log in una tabella di un database esterno.';
$string['privacy:metadata:log'] = 'Raccolta di eventi passati.';
$string['privacy:metadata:log:anonymous'] = 'Scelta di contrassegnare l\'evento come anonimo.';
$string['privacy:metadata:log:eventname'] = 'Nome dell\'evento';
$string['privacy:metadata:log:ip'] = 'Indirizzo IP usato per l\'evento.';
$string['privacy:metadata:log:origin'] = 'Origine dell\'evento.';
$string['privacy:metadata:log:other'] = 'Informazioni aggiuntive sull\'evento.';
$string['privacy:metadata:log:relateduserid'] = 'ID di un utente correlato all\'evento.';
$string['privacy:metadata:log:timecreated'] = 'Data e ora di accadimento dell\'evento.';
$string['privacy:metadata:log:userid'] = 'ID dell\'utente che ha generato l\'evento.';
$string['read'] = 'Visualizza';
$string['tablenotfound'] = 'La tabella specificata non è stata trovata';
$string['teaching'] = 'Insegnamento';
$string['testingsettings'] = 'Test delle impostazioni del database in corso...';
$string['testsettings'] = 'Test della connessione';
$string['update'] = 'Aggiorna';
