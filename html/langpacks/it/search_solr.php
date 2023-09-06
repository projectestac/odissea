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
 * Strings for component 'search_solr', language 'it', version '4.1'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Il server Solr specificato non esiste oppure non esiste l\'indice';
$string['connectionsettings'] = 'Impostazioni di connessione';
$string['errorcreatingschema'] = 'Si è verificato un errore durante la creazione dello schema Solr: {$a}';
$string['errorsolr'] = 'Il motore di ricerca Solr ha riportato un errore: {$a}';
$string['errorvalidatingschema'] = 'Si è verificato un errore nello schema Solr: il campo {$a->fieldname} non esiste. Per favore  <a href="{$a->setupurl}">segui questo link</a> per impostare i campi richiesti.';
$string['extensionerror'] = 'L\'estensione PHP Apache Solr non è installata. Per favore approfondisci nella documentazione.';
$string['fileindexing'] = 'Abilita indicizzazione file';
$string['fileindexing_help'] = 'Se l\'installazione di Solr lo supporta, Moodle potrà inviare file da indicizzare.<br/>Sarà necessario indicizzare nuovamente l\'intero sito per includere file già esistenti.';
$string['fileindexsettings'] = 'Impostazione indicizzazione file';
$string['maxindexfilekb'] = 'Dimensione massima dei file da indicizzare (kB)';
$string['maxindexfilekb_help'] = 'L\'indicizzazione salterà i file di dimensioni maggiori di quella impostata. Un valore pari a zero consentirà l\'indicizzazione di file di qualsiasi dimensione.';
$string['minimumsolr4'] = 'Moodle richiede come minimo la versione 4.0 di Solr';
$string['missingconfig'] = 'Il server Apache Solr non risulta configurato in Moodle.';
$string['multivaluedfield'] = 'Il campo "{$a}" ha restituito un array invece di uno scalare. Devi eliminare l\'attuale indice, crearlo di nuovo e lanciare setup_schema.php prima di indicizzare i dati con Solr.';
$string['nodatafromserver'] = 'Nessun dato dal server';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Il plugin invia dati esternamente a un motore di ricerca Solr collegato. Non memorizza dati localmente.';
$string['privacy:metadata:data'] = 'Dati personali passati tramite il sottosistema di ricerca.';
$string['schemafieldautocreated'] = 'Il campo "{$a}" è già esistente nello schema Solr. Probabilmente non è stato eseguito questo script prima di indicizzare i dati e i campi sono stati creati automaticamente da Solr. Per favore elimina l\'indice esistente, creane uno nuovo ed esegui nuovamente setup_schema.php prima di indicizzare i dati in Solr.';
$string['schemasetupfromsolr5'] = 'La versione del server Solr è inferiore alla 5.0. Lo script può impostare lo schema solo se la versione di Solr è 5.0 o superiore. Devi impostare i campi nello schema manualmente in accordo a \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Query di ricerca';
$string['searchinfo_help'] = 'Il campo da cercare può essere specificato inserendo il prefisso title:\', \'content:\', \'name:\', oppure \'intro:\' nella query di ricerca. Ad esempio, la ricerca  \'title:news\' ritornerà risultati con la parola \'news\' nel titolo.

Gli operatori booleani (\'AND\', \'OR\', \'NOT\') possono essere utilizzati per combinare o escludere parole chiave.

I caratteri Jolly  (\'*\' oppure \'?\' ) possono essere utilizzati per rappresentare caratteri nelle query di ricerca.';
$string['setupok'] = 'Lo schema è pronto all\'uso.';
$string['solrauthpassword'] = 'Password per l\'autenticazione HTTP';
$string['solrauthuser'] = 'Username per l\'autenticazione HTTP';
$string['solrhttpconnectionport'] = 'Porta';
$string['solrhttpconnectiontimeout'] = 'Timeout';
$string['solrhttpconnectiontimeout_desc'] = 'Il timeout di connessione è il tempo massimo (espresso in secondi) consentito per il trasferimento dei dati via HTTP.';
$string['solrindexname'] = 'Nome dell\'indice';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Il motore Solr non è il motore di ricerca configurato';
$string['solrsecuremode'] = 'Modalità sicura';
$string['solrserverhostname'] = 'Nome host';
$string['solrserverhostname_desc'] = 'Il nome del dominio del server Solr.';
$string['solrsetting'] = 'Impostazioni Solr';
$string['solrsslcainfo'] = 'Nome dei certificati SSL CA';
$string['solrsslcainfo_desc'] = 'Il nome del file contenente uno o più certificati CA';
$string['solrsslcapath'] = 'Percorso dei certificati SSL CA';
$string['solrsslcapath_desc'] = 'Percorso della cartella contenente i certificati CA per la verifica del peer';
$string['solrsslcert'] = 'Certificato SSL';
$string['solrsslcert_desc'] = 'Il nome del file contenente un certificato formattato PEM';
$string['solrsslkey'] = 'Chiave SSL';
$string['solrsslkey_desc'] = 'Il nome del file contenente una chiave formattata PEM';
$string['solrsslkeypassword'] = 'Password chiave SSL';
$string['solrsslkeypassword_desc'] = 'La password della chiave privata formattata PEM';
