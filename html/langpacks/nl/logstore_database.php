<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'logstore_database', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Buffergrootte';
$string['buffersize_help'] = 'Aantal log-items die in één keer in de databank gezet worden om de performantie te verbeteren.';
$string['conectexception'] = 'Kan niet verbinden met databank';
$string['create'] = 'Maak';
$string['databasecollation'] = 'Databankcollatie';
$string['databasehandlesoptions'] = 'Databank behandelt opties';
$string['databasehandlesoptions_help'] = 'Behandelt de externe databank zijn eigen opties.';
$string['databasepersist'] = 'Persistente databankverbindingen';
$string['databaseschema'] = 'Databankschema';
$string['databasesettings'] = 'Databankinstellingen';
$string['databasesettings_help'] = 'Connectiedetails voor de externe log databank: {$a}';
$string['databasetable'] = 'Databanktabel';
$string['databasetable_help'] = 'Naam van de tabel waarin de logs bewaard worden. Deze tabel zou een identieke structuur moeten hebben als degene die gebruikt wordt door logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filter logs';
$string['filters_help'] = 'Schakel filters in die er voor zorgen dat sommige acties niet gelogd worden.';
$string['includeactions'] = 'Acties van volgende typen mee opnemen.';
$string['includelevels'] = 'Acties van volgende opleidingsniveau\'s mee opnemen';
$string['jsonformat'] = 'JSON-formaat';
$string['jsonformat_desc'] = 'Gebruik standaard JSON-indeling in plaats van PHP-geserialiseerde gegevens in het veld \'Andere\' database.';
$string['logguests'] = 'Log gast acties';
$string['other'] = 'Andere';
$string['participating'] = 'Deelname';
$string['pluginname'] = 'Externe databank log';
$string['pluginname_desc'] = 'Een log-plugin die logs in een externe databanktabel bewaardt';
$string['privacy:metadata:log'] = 'Een verzameling van vorige evenementen';
$string['privacy:metadata:log:anonymous'] = 'Of het evenement als anoniem is gemarkeerd';
$string['privacy:metadata:log:eventname'] = 'De naam van het evenement';
$string['privacy:metadata:log:ip'] = 'Het IP-adres dat werd gebruikt op het moment van het evenement';
$string['privacy:metadata:log:origin'] = 'De oorsprong van het evenement';
$string['privacy:metadata:log:other'] = 'Aanvullende informatie over het evenement';
$string['privacy:metadata:log:realuserid'] = 'De ID van de echte gebruiker achter de gebeurtenis, wanneer hij een gebruiker masquerade.';
$string['privacy:metadata:log:relateduserid'] = 'De ID van een gebruiker met betrekking tot deze gebeurtenis';
$string['privacy:metadata:log:timecreated'] = 'Het tijdstip waarop de gebeurtenis plaatsvond';
$string['privacy:metadata:log:userid'] = 'De ID van de gebruiker die deze gebeurtenis heeft geactiveerd';
$string['read'] = 'Lees';
$string['tablenotfound'] = 'De opgegeven tabel is niet gevonden';
$string['teaching'] = 'Les geven';
$string['testingsettings'] = 'Databank instellingen controleren...';
$string['testsettings'] = 'Test verbinding';
$string['update'] = 'Aanpassen';
