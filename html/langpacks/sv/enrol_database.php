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
 * Strings for component 'enrol_database', language 'sv', version '4.5'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Konfigurera Databasregistreringsinstanser';
$string['database:unenrol'] = 'Avregistrera avstängda användare';
$string['dbencoding'] = 'Databaskodning';
$string['dbhost'] = 'Databasserver';
$string['dbhost_desc'] = 'Ange serverns IP-adress eller namn. Använd ett system-DSN om ODBC används. Använd ett PDO DSN om PDO används.';
$string['dbname'] = 'Databasens namn';
$string['dbname_desc'] = 'Lämna fältet tomt om du använder ett DSN-namn för databasservern.';
$string['dbpass'] = 'Lösenord för databas';
$string['dbsetupsql'] = 'Databasens initierings SQL-kommando';
$string['dbsetupsql_desc'] = 'SQL-kommando för anpassad databaskonfiguration. Detta används ofta för att ange databaskodningen som används i kommunikationen. För PostgreSQL: <code>SET NAMES \'utf8\'</code>';
$string['dbsybasequoting'] = 'Använd sybase-citationstecken';
$string['dbsybasequoting_desc'] = 'Sybase-stil enkelcitat escape - behövs för Oracle, MS SQL och några andra databaser. Använd inte för MySQL!';
$string['dbtype'] = 'Databasdrivrutin';
$string['dbtype_desc'] = 'Namn och typ av ADOdb-databasdrivrutin.';
$string['dbuser'] = 'Databasanvändare';
$string['debugdb'] = 'Debugga ADOdb';
$string['debugdb_desc'] = 'Felsök ADOdb-anslutning till extern databas - använd när du får en tom sida under inloggningen. Ej lämplig för produktionsanläggningar!';
$string['defaultcategory'] = 'Standardkategori för ny kurs';
$string['defaultcategory_desc'] = 'Förinställd kategori för automatiskt skapade kurser. Används om ingen ny kategori anges eller om den saknas.';
$string['defaultrole'] = 'Standardroll';
$string['defaultrole_desc'] = 'Den roll som tilldelas om ingen roll specificerats i den externa tabellen.';
$string['ignorehiddencourses'] = 'Ignorera dolda kurser';
$string['ignorehiddencourses_desc'] = 'Om aktiverat kommer användare inte att registreras på kurser som är inställda för att vara otillgängliga för deltagare.';
$string['localcategoryfield'] = 'Lokalt kategorifält';
$string['localcoursefield'] = 'Lokalt kursfält';
$string['localrolefield'] = 'Lokalt rollfält';
$string['localuserfield'] = 'Lokalt användarfält';
$string['newcoursecategory'] = 'Kategorifält för ny kurs';
$string['newcoursefullname'] = 'Kursnamnsfält för ny kurs';
$string['newcourseidnumber'] = 'Kurs-ID fält för ny kurs';
$string['newcourseshortname'] = 'Kortnamnsfält för ny kurs';
$string['newcoursetable'] = 'Extern kurstabell för ny kurs';
$string['newcoursetable_desc'] = 'Ange om namnet på tabellen som innehåller listan över kurser som ska skapas automatiskt. Ett tomt fält innebär att inga kurser skapas.';
$string['pluginname'] = 'Extern databas';
$string['pluginname_desc'] = 'Du kan använda en extern databas (av nästan alla slag) för att kontrollera dina kursregistreringar. Det antas att din externa databas innehåller minst ett fält som innehåller ett kurs-ID, och ett fält som innehåller ett användar-ID. Dessa jämförs mot fält som du väljer i de lokala kurs- och användartabellerna.';
$string['privacy:metadata'] = 'Pluginmodulen för Extern databaskursregistrering lagrar ingen personinformation.';
$string['remotecoursefield'] = 'Externt kursfält';
$string['remotecoursefield_desc'] = 'Namnet på fältet i fjärrtabellen som vi använder för att matcha poster i kurstabellen.';
$string['remoteenroltable'] = 'Extern kursregistreringstabell';
$string['remoteenroltable_desc'] = 'Ange namnet på tabellen som innehåller en lista över användar-kursregistreringar. Ett tomt fält betyder ingen synkronisering av användarregistrering.';
$string['remoteotheruserfield'] = 'Övrigt externt användarfält';
$string['remoteotheruserfield_desc'] = 'Namnet på fältet i fjärrtabellen som vi använder för att flagga rolltilldelningar för "Annan användare".';
$string['remoterolefield'] = 'Externt rollfält';
$string['remoterolefield_desc'] = 'Namnet på fältet i fjärrtabellen som vi använder för att matcha poster i rolltabellen.';
$string['remoteuserfield'] = 'Externt användarfält';
$string['remoteuserfield_desc'] = 'Namnet på fältet i fjärrtabellen som vi använder för att matcha poster i användartabellen.';
$string['settingsheaderdb'] = 'Extern databasanslutning';
$string['settingsheaderlocal'] = 'Lokal fältmappning';
$string['settingsheadernewcourses'] = 'Skapande av nya kurser';
$string['settingsheaderremote'] = 'Extern synkronisering av kursregistreringar';
$string['syncenrolmentstask'] = 'Synkronisera kursregistreringar via extern databas';
$string['templatecourse'] = 'Mall för ny kurs';
$string['templatecourse_desc'] = 'Valfritt: Automatiskt skapade kurser kan kopiera sina inställningar från en mallkurs. Ange mallkursens kortnamn här.';
