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
 * Strings for component 'tool_dbtransfer', language 'sv', version '3.11'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Databasdrivrutiner tillgängliga för migrering.';
$string['cliheading'] = 'Databasmigrering - säkerställ att ingen loggar in på servern under migreringen!';
$string['climigrationnotice'] = 'Databasmigrering pågår - vänta tills migreringen har slutförts och serveradministratören uppdaterar konfigurationen och tar bort <code>$CFG->dataroot/climaintenance.html</code>-filen.';
$string['convertinglogdisplay'] = 'Konverterar loggvisningsåtgärder';
$string['dbexport'] = 'Databasexport';
$string['dbtransfer'] = 'Databasmigrering';
$string['enablemaintenance'] = 'Aktivera underhållsläge';
$string['enablemaintenance_help'] = 'Det här alternativet aktiverar underhållsläget under och efter databasmigreringen. Det förhindrar åtkomst för alla användare tills migreringen är klar. Observera att administratören måste ta bort $CFG->datarot/climaintenance.html-filen manuellt efter uppdateringen av inställningarna i <code>config.php</code> för att återgå till normal drift.';
$string['exportdata'] = 'Exportera data';
$string['notargetconectexception'] = 'Det går tyvärr inte att ansluta måldatabasen.';
$string['options'] = 'Alternativ';
$string['pluginname'] = 'Databasöverföring';
$string['privacy:metadata'] = 'Pluginmodulen Databasöverföring lagrar inga personuppgifter.';
$string['targetdatabase'] = 'Måldatabas';
$string['targetdatabasenotempty'] = 'Måldatabasen får inte innehålla några tabeller med angivet prefix!';
$string['transferdata'] = 'Överför data';
$string['transferdbintro'] = 'Det här skriptet överför hela innehållet i databasen till en annan databasserver. Det används ofta för migrering av data mellan olika databastyper.';
$string['transferdbtoserver'] = 'Överför den här Moodle-databasen till en annan server';
$string['transferringdbto'] = 'Överför databasen {$a->dbtypefrom} till {$a->dbtype}-databasen "{$a->dbname}" på {$a->dbhost}"';
