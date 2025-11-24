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
 * Strings for component 'enrol_database', language 'de', version '4.5'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Datenbankeinschreibung konfigurieren';
$string['database:unenrol'] = 'Gesperrte Nutzer/innen abmelden';
$string['dbencoding'] = 'Datenbankkodierung';
$string['dbhost'] = 'Datenbankserver';
$string['dbhost_desc'] = 'IP-Adresse oder URL des Datenbankservers eintragen. Verwenden Sie bei ODBC einen DSN-Namen. Bei PDO benutzen Sie bitte einen PDO DSN.';
$string['dbname'] = 'Datenbankname';
$string['dbname_desc'] = 'Lassen Sie das Feld leer, wenn Sie als Datenbank-Host einen DSN-Namen verwenden.';
$string['dbpass'] = 'Datenbankkennwort';
$string['dbsetupsql'] = 'Datenbanksetup';
$string['dbsetupsql_desc'] = 'SQL Kommando für speziellen Datenbank Setup. Dies wird häufig verwendet um Encoding festzulegen:Beispiel für - example for MySQL und PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Sybase Quotes verwenden';
$string['dbsybasequoting_desc'] = 'Sybase verwendet einfache Anführungsstriche - erforderlich für Oracle, MS SQL und einige andere Datenbanken. Nicht für MySQL verwenden !';
$string['dbtype'] = 'Datenbanktreiber';
$string['dbtype_desc'] = 'ADOdb Datenbanktreibername, Typ der externen Datenbankengine';
$string['dbuser'] = 'Datenbanknutzer';
$string['debugdb'] = 'Debug ADOdb';
$string['debugdb_desc'] = 'Debug ADOdb Verbindung zu externer Datenbank - kann ausgeführt werden wenn bei Login leere Seite erscheint. Nicht für produktive Seiten!';
$string['defaultcategory'] = 'Standard-Kursbereich';
$string['defaultcategory_desc'] = 'Dieser Kursbereich für automatisch angelegte Kurse wird benutzt, falls keine Kursbereichs-ID festgelegt wurde.';
$string['defaultrole'] = 'Rolle im Kurs';
$string['defaultrole_desc'] = 'Die Standardrolle wird zugewiesen, falls keine andere Rolle in der externen Tabelle festgelegt wurde.';
$string['ignorehiddencourses'] = 'Verborgene Kurse ignorieren';
$string['ignorehiddencourses_desc'] = 'Wenn diese Option aktiviert ist, werden Nutzer/innen nicht in Kurse eingeschrieben, die für sie nicht freigegeben sind.';
$string['localcategoryfield'] = 'Lokales Kategoriefeld';
$string['localcoursefield'] = 'Lokaler Kurs';
$string['localrolefield'] = 'Lokale Rolle';
$string['localuserfield'] = 'Lokales Nutzerfeld';
$string['newcoursecategory'] = 'Kursbereich des neuen Kurses';
$string['newcourseenddate'] = 'Feld für Enddatum in neuem Kurs';
$string['newcourseenddate_desc'] = 'Geben Sie ein Datum im Format jjjj-mm-tt oder als Unix-Zeit an. Llassen Sie das Feld leer, damit das Kursenddatum entsprechend der konfigurierten Kursdauer berechnet wird.';
$string['newcoursefullname'] = 'Vollstandiger Kursname des neuen Kurses';
$string['newcourseidnumber'] = 'ID-Nummer des neuen Kurses';
$string['newcourseshortname'] = 'Kurzer Kursname des neuen Kurses';
$string['newcoursestartdate'] = 'Feld für Startdatum in neuem Kurs';
$string['newcoursestartdate_desc'] = 'Geben Sie ein Datum im Format jjjj-mm-tt oder als Unix-Zeit an. Lassen Sie das Feld leer, damit das aktuelle Datum als Kursstartdatum festgelegt wird.';
$string['newcoursetable'] = 'Externe neue Kurstabelle';
$string['newcoursetable_desc'] = 'Name der Tabelle mit der Liste der Kurse, die automatisch erstellt werden sollen. Leer bedeutet: es werden keine neuen Kurse angelegt.';
$string['pluginname'] = 'Externe Datenbank';
$string['pluginname_desc'] = 'Sie können eine externe Datenbank (nahe jeden Typs) zur Kontrolle der Einschreibungen verwenden. Diese muss zumindest ein Feld für eien Kurs-ID und die User-ID enthalten. Diese werden mit den Inhalten in der Moodle-Datenbank abgeglichen.';
$string['privacy:metadata'] = 'Die Einschreibemethode \'Externe-Datenbank\' speichert keine personenbezogenen Daten.';
$string['remotecoursefield'] = 'Kursfeld (Remote)';
$string['remotecoursefield_desc'] = 'Der Feldname in der Remotetabelle, das für Einträge in der Kurstabelle zugeordnet wird.';
$string['remoteenroltable'] = 'Externe Nutzertabelle';
$string['remoteenroltable_desc'] = 'Geben Sieden Namen derTabelel an, die die Nutzereinschreibungen enthält. Leer bedeutet, dass keine Nutzer zugeordnet werden.';
$string['remoteotheruserfield'] = 'Entferntes Feld für \'andere Nutzer/in\'.';
$string['remoteotheruserfield_desc'] = 'Name des Feldes in der entfernten Tabelle, um die Einschreibungen "Andere Nutzer/in" zu verwenden.';
$string['remoterolefield'] = 'Rollenfeld (Remote)';
$string['remoterolefield_desc'] = 'Der Feldname in der Remotetabelle, das für Einträge in der Rollentabelle zugeordnet wird.';
$string['remoteuserfield'] = 'Nutzerfeld (Remote)';
$string['remoteuserfield_desc'] = 'Der Feldname in der Remotetabelle, das für Einträge in der Nutzertabelle zugeordnet wird.';
$string['settingsheaderdb'] = 'Externe Datenbankverbindung';
$string['settingsheaderlocal'] = 'Lokale Feldzuordnung';
$string['settingsheadernewcourses'] = 'Erstellen eines neuen Kurses';
$string['settingsheaderremote'] = 'Einschreibesynchronisation (Remote)';
$string['syncenrolmentstask'] = 'Synchronisierung von Einschreibungen über externe Datenbanken';
$string['templatecourse'] = 'Vorlage für neue Kurse';
$string['templatecourse_desc'] = 'Optional: Automatisch angelegte Kurse können ihre Einstellungen aus einem Vorlagenkurs beziehen. Tragen Sie hier den Kursnamen des Vorlagenkurses ein. ';
