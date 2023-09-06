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
 * Strings for component 'auth_db', language 'it', version '4.1'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Non è possibile collegarsi al database esterno.';
$string['auth_dbcannotreadtable'] = 'Non è possibile leggere la tabella esterna.';
$string['auth_dbcantconnect'] = 'Connessione non possibile al database specificato per l\'autenticazione ...';
$string['auth_dbchangepasswordurl_key'] = 'URL per cambiare password';
$string['auth_dbcolumnlist'] = 'La tabella esterna contiene le seguenti colonne:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Attiva il debug della connessione ADOdb al database esterno - da attivare quando si devono risolvere problemi di connessione durante i login. Da non attivare nei siti in produzione.';
$string['auth_dbdeleteuser'] = 'Eliminato l\' utente {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Errore nella cancellazione dell\'utente {$a}';
$string['auth_dbdescription'] = 'Questo metodo usa una tabella di un database esterno per controllare se lo username e la password inseriti siano validi.  Se l\'utente è nuovo, allora anche le informazioni degli altri campi saranno copiate in Moodle.';
$string['auth_dbextencoding'] = 'Codifica database esterno';
$string['auth_dbextencodinghelp'] = 'Codifica utilizzata nel database esterno';
$string['auth_dbextrafields'] = 'La compilazione di questi campi è facoltativa. È possibile decidere di mappare i campi del profilo utente di Moodle con <b>i corrispondenti campi provenienti dal database esterno</b>.<p>Se non si mappano i campi, saranno usati i valori di default.</p><p>Se i campi mappati sono liberi, gli utenti potranno modificarli accedendo al proprio profilo.</p>';
$string['auth_dbfieldpass'] = 'Nome del campo che contiene le password';
$string['auth_dbfieldpass_key'] = 'Campo password';
$string['auth_dbfielduser'] = 'Nome del campo che contiene gli username. Deve essere un campo di tipo varchar.';
$string['auth_dbfielduser_key'] = 'Campo username';
$string['auth_dbhost'] = 'Il computer che ospita il database server. Utilizzare un system DSN se si usa ODBC. Utilizzare un DSN Entry PDO se si usa PDO.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Inserito l\'utente {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Si è verificato un errore durante l\'inserimento dell\'utente {$a->username} - un utente con lo stesso username è già stato creato con il plugin \'{$a->auth}\'';
$string['auth_dbinsertusererror'] = 'Errore nell\'inserimento dell\'utente {$a}';
$string['auth_dbname'] = 'Nome del database. Lasciare vuoto se si usa un DSN ODBC. Lasciare vuoto se il DNS PDO contiene il nome dal database.';
$string['auth_dbname_key'] = 'Nome DB';
$string['auth_dbnoexttable'] = 'La tabella esterna non è stata specificata.';
$string['auth_dbnouserfield'] = 'Il campo esterno dell\'utente non è stato specificato.';
$string['auth_dbpass'] = 'Password corrispondente al suddetto username';
$string['auth_dbpass_key'] = 'Password';
$string['auth_dbpasstype'] = '<p>Il formato utilizzato dal campo password.</p> <p>Utilizzare \'Interno\' se si desidera lasciare al database esterno la gestione di username ed email ma delegare a Moodle la gestione delle password. Se si sceglie \'Interno\', è obbligatorio indicare un campo email del database esterno che contenga indirizzi email. Inoltre è necessario abilitare l\'elaborazione pianificata \\auth_db\\task\\sync_users scheduled affinché Moodle possa inviare tramite email una password provvisoria a ciascun nuovo utente.</p>';
$string['auth_dbpasstype_key'] = 'Formato password';
$string['auth_dbreviveduser'] = 'Ripristinato l\' utente {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Errore nel ripristino dell\'utente {$a}';
$string['auth_dbsaltedcrypt'] = 'Crittografia stringa con hash unidirezionale';
$string['auth_dbsetupsql'] = 'Comando SQL per setup';
$string['auth_dbsetupsqlhelp'] = 'Comando SQL per setup speciali del database, utile ad esempio per definire la\'encoding della trasmissione dati - Esempio per MySQL e PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Sospeso l\'utente {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Errore nella sospensione dell\'utente {$a}';
$string['auth_dbsybasequoting'] = 'Usare apostrofi sybase';
$string['auth_dbsybasequotinghelp'] = 'Utilizza l\'apostrofo singolo in stile Sybase come carattere di escape. È un requisito per Oracle, MS SQL e alcuni altri database. Da non usare per MySQL!';
$string['auth_dbsyncuserstask'] = 'Sincronizzazione utenti';
$string['auth_dbtable'] = 'Nome della tabella nel database';
$string['auth_dbtable_key'] = 'Tabella';
$string['auth_dbtableempty'] = 'La tabella esterna è vuota';
$string['auth_dbtype'] = 'Il tipo di database (dettagli su <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a>)';
$string['auth_dbtype_key'] = 'Database';
$string['auth_dbupdateerror'] = 'Si è verificato un errore durante l\'aggiornamento del database esterno.';
$string['auth_dbupdateusers'] = 'Aggiorna utenti';
$string['auth_dbupdateusers_description'] = 'Oltre alla creazione dei nuovi utenti, verranno anche aggiornati gli utenti già esistenti.';
$string['auth_dbupdatinguser'] = 'Modifica utente {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Username con diritti di lettura nel database';
$string['auth_dbuser_key'] = 'Utente DB';
$string['auth_dbuserstoadd'] = 'Records di utente da aggiungere: {$a}';
$string['auth_dbuserstoremove'] = 'Records di utente da cancellare: {$a}';
$string['pluginname'] = 'Database esterno';
$string['privacy:metadata'] = 'Il plugin di autenticazione "Database esterno" non memorizza dati personali.';
