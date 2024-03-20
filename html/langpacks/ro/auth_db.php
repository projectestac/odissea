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
 * Strings for component 'auth_db', language 'ro', version '4.1'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Nu se poate conecta la baza de date externă.';
$string['auth_dbcannotreadtable'] = 'Nu se poate citi tabelul extern.';
$string['auth_dbcantconnect'] = 'Nu se poate conecta la baza de date specificată...';
$string['auth_dbchangepasswordurl_key'] = 'URL schimbare parolă';
$string['auth_dbcolumnlist'] = 'Tabelul extern conține următoarele coloane: <br /> {$a}';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Depanați conexiunea ADOdb la baza de date externă - utilizați atunci când obțineți pagina goală în timpul conectării. Nu este potrivit pentru șantierele de producție.';
$string['auth_dbdeleteuser'] = 'Utilizator eliminat {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Eroare la eliminarea utilizatorului {$a}';
$string['auth_dbdescription'] = 'Această metodă folosește un tabel din baza de date externă pentru a verifica dacă un anumit nume de utilizator și o parolă sunt valide. În cazul în care contul este unul nou, informațiile din alte domenii pot fi copiate, de asemenea, în Moodle.';
$string['auth_dbextencoding'] = 'Codare db externă';
$string['auth_dbextencodinghelp'] = 'Codare folosită în baza de date externă';
$string['auth_dbextrafields'] = 'Aceste câmpuri sunt opționale. Puteți să completați unele câmpuri de utilizator Moodle cu informații din <b>câmpurile bazei de date externe</b> pe care le specificați aici. <p>Dacă lăsați necompletat, vor fi folosite  datele implicite.</p><p>În oricare caz, utilizatorul va putea să editeze toate aceste câmpuri după autentificare.</p>';
$string['auth_dbfieldpass'] = 'Numele câmpului care conține parole';
$string['auth_dbfieldpass_key'] = 'Câmp parolă';
$string['auth_dbfielduser'] = 'Numele câmpului care conține nume de utilizator. Acest câmp trebuie să fie un tip de date varchar.';
$string['auth_dbfielduser_key'] = 'Câmp nume de utilizator';
$string['auth_dbhost'] = 'Computerul pe care se află serverul cu baza de date. Folosiți un sistem DSN entry, dacă se utilizează ODBC.';
$string['auth_dbhost_key'] = 'Gazdă';
$string['auth_dbinsertuser'] = 'ID {$a->id} al utilizatorului inserat {$a->name}';
$string['auth_dbinsertuserduplicate'] = 'Eroare la înscrierea utilizatoruluui {$a->username} - utilizatorul cu acest nume  a fost deja creat prin plugin-ul \'{$a->auth}\'';
$string['auth_dbinsertusererror'] = 'Eroare la inserarea utilizatorului {$a}';
$string['auth_dbname'] = 'Denumirea bazei de date. Lăsați necompletat dacă folosiți un ODBC DSN.';
$string['auth_dbname_key'] = 'Nume DB';
$string['auth_dbnoexttable'] = 'Tabelul extern nu este specificat.';
$string['auth_dbnouserfield'] = 'Câmpul utilizatorului extern nu este specificat.';
$string['auth_dbpass'] = 'Parola corespunde numelui de utilizator de mai sus';
$string['auth_dbpass_key'] = 'Parolă';
$string['auth_dbpasstype'] = '<p>Specificați formatul pe care îl folosește câmpul de parolă.</p> <p>Utilizați „intern” dacă doriți ca baza de date externă să gestioneze numele de utilizator și adresele de e-mail, dar Moodle să gestioneze parolele. Dacă utilizați „intern”, trebuie să furnizați un câmp de adresă de e-mail populat în baza de date externă și trebuie să activați sarcina programată \\auth_db\\task\\sync_users. Moodle va trimite un e-mail utilizatorilor noi cu o parolă temporară.</p>';
$string['auth_dbpasstype_key'] = 'Format parolă';
$string['auth_dbreviveduser'] = 'ID de utilizator reutilizat {$a->name} {$a->id}';
$string['auth_dbrevivedusererror'] = 'Eroare la reutilizarea utilizatorului {$a}';
$string['auth_dbsaltedcrypt'] = 'Criptați un hash de șir într-un singur sens';
$string['auth_dbsetupsql'] = 'Comandă pentru setarea SQL';
$string['auth_dbsetupsqlhelp'] = 'Comandă SQL pentru configurare excepțională a bazei de date, de multe ori folosită pentru configurarea comunicării codate - exemplu pentru MySQL și PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Utilizator suspendat {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Eroare la suspendarea utilizatorului {$a}';
$string['auth_dbsybasequoting'] = 'Utilizați citate sybase';
$string['auth_dbsybasequotinghelp'] = 'Scăparea citatului unic în stil Sybase - necesară pentru Oracle, MS SQL și alte baze de date. Nu utilizați pentru MySQL!';
$string['auth_dbsyncuserstask'] = 'Sincronizarea sarcinii utilizatorilor';
$string['auth_dbtable'] = 'Numele tabelului în baza de date';
$string['auth_dbtable_key'] = 'Tabel';
$string['auth_dbtableempty'] = 'Tabelul extern este gol.';
$string['auth_dbtype'] = 'Tipul bazei de date (pentru detalii, consultați documentația <a href="http://adodb.org/dokuwiki/doku.php" target="_blank"> ADOdb - Database Abstraction Layer for PHP </a>).';
$string['auth_dbtype_key'] = 'Bază de date';
$string['auth_dbupdateerror'] = 'Eroare la actualizarea bazei de date externe.';
$string['auth_dbupdateusers'] = 'Actualizați utilizatorii';
$string['auth_dbupdateusers_description'] = 'Pe lângă introducerea de noi utilizatori, actualizați utilizatorii existenți.';
$string['auth_dbupdatinguser'] = 'ID {$a->id} actualizat al utilizatorului {$a->name}';
$string['auth_dbuser'] = 'Utilizator cu acces la citirea bazei de date';
$string['auth_dbuser_key'] = 'Utilizator DB';
$string['auth_dbuserstoadd'] = 'Postările utilizatorului pentru a fi adăugate: {$a}';
$string['auth_dbuserstoremove'] = 'Postările utilizatorului pentru a fi șterse: {$a}';
$string['pluginname'] = 'Bază de date externă';
$string['privacy:metadata'] = 'Pluginul de autentificare a bazei de date externe nu stochează date personale.';
