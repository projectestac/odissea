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
 * Strings for component 'auth_db', language 'sv', version '3.8'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Kan inte ansluta till extern databas';
$string['auth_dbcannotreadtable'] = 'Kan inte läsa extern tabell.';
$string['auth_dbcantconnect'] = 'Det gick inte att ansluta till den angivna databasen för autentisering.';
$string['auth_dbchangepasswordurl_key'] = 'URL till sida för att ändra lösenord';
$string['auth_dbcolumnlist'] = 'Extern tabell innehåller följande kolumner:<be />{$a}';
$string['auth_dbdebugauthdb'] = 'Felsök ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Felsök anslutningen för ADOdb till den externa databasen - använd den när Du får en tom sida under inloggning. Detta rekommenderas inte för verksamhetskritiska  webbplatser.';
$string['auth_dbdeleteuser'] = 'Tog bort användare {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Fel vid borttagande av användare {$a}';
$string['auth_dbdescription'] = 'Denna metod använder en extern databastabell för att kontrollera huruvida ett givet användarnamn och lösenord är giltigt. Om kontot är nytt kan även information från andra fält kopieras till Moodle.';
$string['auth_dbextencoding'] = 'Teckenuppsättning för extern  db';
$string['auth_dbextencodinghelp'] = 'Den teckenuppsättning som används i den externa databasen';
$string['auth_dbextrafields'] = 'Detta fält är valfritt. Du kan välja att på förhand fylla i några användarfält för Moodle med information från <b>externa databasfält</b> som du kan specificera här. <p>Om du lämnar dessa fält tomma, så kommer standardvärden att användas.</p><p>I vilket fall som helst, kommer användaren kunna redigera alla dessa fält efter det att de loggat in.</p>';
$string['auth_dbfieldpass'] = 'Namn på det fält som innehåller lösenord';
$string['auth_dbfieldpass_key'] = 'Fält för lösenord';
$string['auth_dbfielduser'] = 'Namn på det fält som innehåller användarnamn. Måste vara av typen <code>varchar</code>.';
$string['auth_dbfielduser_key'] = 'Fält för användarnamn';
$string['auth_dbhost'] = 'Datorn som innehåller databasservern. Använd en system-DSN definition om du använder ODBC. Använd en PDO DSN-definition om du använder PDO.';
$string['auth_dbhost_key'] = 'Värd';
$string['auth_dbinsertuser'] = 'Infogade användare {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Ett fel inträffade när användaren {$a->username} skulle infogas. En användare med det här användarnamnet har redan skapat via \'{$a->auth}\'-pluginmodulen.';
$string['auth_dbinsertusererror'] = 'Fel vid infogande av användare {$a}';
$string['auth_dbname'] = 'Namn på själva databasen. Lämna tomt om du använder ODBC DSN. Lämna tomt om din PDO DSN redan innehåller databasens namn.';
$string['auth_dbname_key'] = 'Databasnamn';
$string['auth_dbnoexttable'] = 'Extern tabell ej specificerad.';
$string['auth_dbnouserfield'] = 'Externt användarfält ej specificerat.';
$string['auth_dbpass'] = 'Lösenord som matchar ovanstående användarnamn';
$string['auth_dbpass_key'] = 'Lösenord';
$string['auth_dbpasstype'] = '<p>Ange formatet som lösenordsfältet använder.</p> <p>Använd \'internt\' om du vill att den externa databasen ska hantera användarnamn och e-postadresser, men att Moodle ska hantera lösenord. Om du använder \'internt\' <i>måste</i> ett ifyllt e-postadressfält i den externa databasen anges och du måste köra både admin/cron.php och auth/db/cli/sync_users.php regelbundet. Moodle skickar ett e-postmeddelande till nya användare med ett tillfälligt lösenord.</p>';
$string['auth_dbpasstype_key'] = 'Format på lösenord';
$string['auth_dbreviveduser'] = 'Återställde användare {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Fel vid återställning av användare {$a}';
$string['auth_dbsaltedcrypt'] = 'Kryptera enkelriktad stränghashing';
$string['auth_dbsetupsql'] = 'Kommando för att installera SQL';
$string['auth_dbsetupsqlhelp'] = 'SQL kommando för specialinstallation av databas, ofta använd för att installera teckenuppsättning för kommunikation - t.ex. för MySQL och PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Stängde av användare {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Fel vid avstängning av användare {$a}';
$string['auth_dbsybasequoting'] = 'Använd apostrofer av typ sybase';
$string['auth_dbsybasequotinghelp'] = 'Den stil med enkla apostrofer för \'escaping\' som Sybase använder - den behövs för Oracle, MS SQL och en del andra databaser. Använd inte detta i MySQL!';
$string['auth_dbsyncuserstask'] = 'Synkronisera användare';
$string['auth_dbtable'] = 'Namn på tabellen i databasen';
$string['auth_dbtable_key'] = 'Tabell';
$string['auth_dbtableempty'] = 'Extern tabell är tom.';
$string['auth_dbtype'] = 'Databastypen (se dokumentation <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer för PHP</a> för detaljer).';
$string['auth_dbtype_key'] = 'Databas';
$string['auth_dbupdateerror'] = 'Fel vid uppdatering av extern databas';
$string['auth_dbupdateusers'] = 'Uppdatera användare';
$string['auth_dbupdateusers_description'] = 'Infoga nya och uppdatera befintliga användare.';
$string['auth_dbupdatinguser'] = 'Uppdaterar användare {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Användarnamn med läsbehörighet till databasen';
$string['auth_dbuser_key'] = 'DB-användare';
$string['auth_dbuserstoadd'] = 'Inmatningar från användare som ska läggas till: {$a}';
$string['auth_dbuserstoremove'] = 'Inmatningar från användare som ska tas bort:: {$a}';
$string['pluginname'] = 'Extern databas';
$string['privacy:metadata'] = 'Pluginmodulen Extern autentisering lagrar ingen personlig information.';
