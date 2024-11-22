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
 * Strings for component 'auth_db', language 'de', version '4.1'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Die Verbindung zur externen Datenbank kann nicht hergestellt werden.';
$string['auth_dbcannotreadtable'] = 'Die externe Tabelle kann nicht gelesen werden.';
$string['auth_dbcantconnect'] = 'Die Verbindung zur externen Datenbank kann nicht hergestellt werden.';
$string['auth_dbchangepasswordurl_key'] = 'URL zur Kennwortänderung';
$string['auth_dbcolumnlist'] = 'Die externe Tabelle enthält die folgenden Spalten:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Ein Debug der ADOdb Verbindung zur externen Datenbank sollte ausgeführt werden, wenn beim Login eine leere Seite erscheint. Die Funktion sollte nicht auf Produktivinstallationen eingesetzt werden.';
$string['auth_dbdeleteuser'] = 'Gelöschtes Nutzerkonto {$a->name} ID {$a->id}';
$string['auth_dbdeleteusererror'] = 'Fehler beim Löschen von Nutzer/in {$a}';
$string['auth_dbdescription'] = 'Diese Methode benutzt eine externe Datenbank-Tabelle, um die Gültigkeit von angegebenem Anmeldenamen und Kennwort zu überprüfen. Wenn der Zugang neu ist, werden die Informationen der übrigen Felder ebenso zu Moodle hinüberkopiert.';
$string['auth_dbextencoding'] = 'Externe DB-Codierung';
$string['auth_dbextencodinghelp'] = 'Die externe Datenbank verwendet eine Codierung.';
$string['auth_dbextrafields'] = '<p>Diese Felder sind optional. Sie können Nutzerprofilfelder mit Informationen aus der <b>externen Datenbank</b> belegen, wobei Sie hierfür eine Zuordnung angeben müssen.</p>
<p>Wenn Sie ein Feld leer lassen, wird der Standardwert eingetragen.</p>
<p>Wenn ein Feld nicht gesperrt ist, dürfen die Nutzer/innen das Feld nach der Anmeldung selber ausfüllen, den Inhalt ändern oder auch löschen.</p>';
$string['auth_dbfieldpass'] = 'Name des Feldes, das das Kennwort enthält';
$string['auth_dbfieldpass_key'] = 'Kennwortfeld';
$string['auth_dbfielduser'] = 'Name des Feldes, das den Nutzernamen enthält. Dieses Feld muss den Datentyp varchar haben.';
$string['auth_dbfielduser_key'] = 'Nutzernamenfeld';
$string['auth_dbhost'] = 'Server mit der Datenbank. Verwenden Sie einen DNS-Systemeintrag, wenn ODBC verwendet wird. Benutzen Sie einen PDO DNS Eintrag, wenn PDO verwendet wird.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Eingefügte Nutzer/in {$a->name} ID {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Fehler beim Anlegen des Nutzers {$a->username}. Ein Nutzer mit diesem Nutzernamen wurde bereits mit der Authentifizierung über \'{$a->auth}\' angelegt.';
$string['auth_dbinsertusererror'] = 'Fehler beim Einfügen von Nutzer/in {$a}';
$string['auth_dbname'] = 'Name der Datenbank. Lassen Sie das Feld leer, falls ODBC DSN verwendet wird oder der PDO DNS bereits den Datenbanknamen enthält.';
$string['auth_dbname_key'] = 'Datenbankname';
$string['auth_dbnoexttable'] = 'Externe Tabelle ist nicht spezifiziert.';
$string['auth_dbnouserfield'] = 'Externes Nutzer-Datenfeld  ist nicht spezifiziert.';
$string['auth_dbpass'] = 'Kennwort, das zum Nutzernamen gehört';
$string['auth_dbpass_key'] = 'Kennwort';
$string['auth_dbpasstype'] = '<p>Geben Sie das Format an, das im Kennwortfeld verwendet wird.</p>
<p>Verwenden Sie \'intern\', wenn die externe Datenbank Anmeldenamen und E-Mail-Adressen verwalten soll, aber Moodle für die Kennwörter zuständig ist. In diesem Fall müssen Sie die E-Mail-Adresse in der externen Datenbank angeben und die geplante Task \\auth_db\\task\\sync_users aktivieren. Moodle sendet dann an neue Nutzer/innen automatisch eine E-Mail mit einem temporären Kennwort.</p>';
$string['auth_dbpasstype_key'] = 'Kennwortformat';
$string['auth_dbreviveduser'] = 'Entsperrte Nutzer/in {$a->name} ID {$a->id}';
$string['auth_dbrevivedusererror'] = 'Fehler beim Entsperren von Nutzer/in {$a}';
$string['auth_dbsaltedcrypt'] = 'Einweg-Text-Hashing verschlüsseln';
$string['auth_dbsetupsql'] = 'SQL setup Kommando';
$string['auth_dbsetupsqlhelp'] = 'SQL Befehl für spezielles Datenbanksetup bei Kommunikationscodierung - Beispiel für MySQL und PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Gesperrte Nutzer/in {$a->name} ID {$a->id}';
$string['auth_dbsuspendusererror'] = 'Fehler beim Sperren von Nutzer/in {$a}';
$string['auth_dbsybasequoting'] = 'Sybase Anführungszeichen verwenden';
$string['auth_dbsybasequotinghelp'] = 'Sybase Stil mit einfachen Anführungszeichen - für Oracle, MS SQL und einige andere Datenbanken, nicht jedoch für MySQL verwnden!';
$string['auth_dbsyncuserstask'] = 'Task zur Nutzersynchronisierung';
$string['auth_dbtable'] = 'Name der Datenbank-Tabelle';
$string['auth_dbtable_key'] = 'Tabelle';
$string['auth_dbtableempty'] = 'Externe Tabelle ist leer.';
$string['auth_dbtype'] = 'Datenbanktyp (siehe <a href="http://adodb.org/dokuwiki/doku.php">ADOdb Database Abstraction Layer for PHP</a> mit weiteren Details)';
$string['auth_dbtype_key'] = 'Datenbank';
$string['auth_dbupdateerror'] = 'Fehler beim Aktualisieren der externen Datenbank';
$string['auth_dbupdateusers'] = 'Nutzer/innen aktualisieren';
$string['auth_dbupdateusers_description'] = 'Neue Nutzer/innen hinzufügen, existierende Nutzer/innen aktualisieren';
$string['auth_dbupdatinguser'] = 'Aktualisierte Nutzer/in {$a->name} ID {$a->id}';
$string['auth_dbuser'] = 'Nutzername mit Schreibzugriff auf die Datenbank';
$string['auth_dbuser_key'] = 'Datenbanknutzer';
$string['auth_dbuserstoadd'] = 'Nutzereinträge zum Hinzufügen: {$a}';
$string['auth_dbuserstoremove'] = 'Nutzereinträge zum Entfernen: {$a}';
$string['pluginname'] = 'Externe Datenbank';
$string['privacy:metadata'] = 'Das Plugin \'Authentifizierung Externe Datenbank\' speichert keine personenbezogenen Daten.';
