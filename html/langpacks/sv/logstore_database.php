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
 * Strings for component 'logstore_database', language 'sv', version '4.5'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Buffertstorlek';
$string['buffersize_help'] = 'Antal loggposter som infogas i en batchdatabasåtgärd, vilket förbättrar prestandan.';
$string['conectexception'] = 'Kan inte ansluta till databasen.';
$string['create'] = 'Skapa';
$string['databasecollation'] = 'Databassortering';
$string['databasehandlesoptions'] = 'Alternativ för databas-handles';
$string['databasehandlesoptions_help'] = 'Hanterar fjärrdatabasen sina egna alternativ?';
$string['databasepersist'] = 'Beständiga databasanslutningar';
$string['databaseschema'] = 'Databasschema';
$string['databasesettings'] = 'Databasinställningar';
$string['databasesettings_help'] = 'Anslutningsinformation för den externa loggdatabasen: {$a}';
$string['databasetable'] = 'Databastabell';
$string['databasetable_help'] = 'Namn på tabellen där loggar kommer att lagras. Den här tabellen bör ha en struktur som är identisk med den som används av logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filterloggar';
$string['filters_help'] = 'Aktivera filter som utesluter vissa åtgärder från att loggas.';
$string['includeactions'] = 'Inkludera åtgärder av dessa typer';
$string['includelevels'] = 'Inkludera åtgärder för dessa utbildningsnivåer';
$string['jsonformat'] = 'JSON-format';
$string['jsonformat_desc'] = 'Använd standardformatet JSON i stället för PHP-serialiserade data i databasfältet "övrigt".';
$string['logguests'] = 'Logga gäståtgärder';
$string['other'] = 'Övriga';
$string['participating'] = 'Deltager';
$string['pluginname'] = 'Extern databaslogg';
$string['pluginname_desc'] = 'Ett loggplugin som lagrar loggposter i en extern databastabell.';
$string['privacy:metadata:log'] = 'En samling tidigare händelser';
$string['privacy:metadata:log:anonymous'] = 'Huruvida händelsen flaggades som anonym';
$string['privacy:metadata:log:eventname'] = 'Händelsenamnet';
$string['privacy:metadata:log:ip'] = 'IP-adress som användes vid tidpunkten för händelsen';
$string['privacy:metadata:log:origin'] = 'Händelsens ursprung';
$string['privacy:metadata:log:other'] = 'Ytterligare händelseinformation';
$string['privacy:metadata:log:realuserid'] = 'ID:t för den verkliga användaren bakom händelsen när du maskerar en användare.';
$string['privacy:metadata:log:relateduserid'] = 'ID:en för en användare som är relaterad till den här händelsen';
$string['privacy:metadata:log:timecreated'] = 'Tiden då händelsen inträffade';
$string['privacy:metadata:log:userid'] = 'ID:t för den användare som utlöste den här händelsen';
$string['read'] = 'Läs';
$string['tablenotfound'] = 'Angiven tabell kunde inte hittas';
$string['teaching'] = 'Undervisning';
$string['testingsettings'] = 'Testar databasinställningar...';
$string['testsettings'] = 'Testa anslutning';
$string['update'] = 'Uppdatera';
