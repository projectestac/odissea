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
 * Strings for component 'tool_langimport', language 'sv', version '3.11'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Det går inte att ansluta till nedladdningsservern. Det är inte möjligt att installera eller uppdatera språkpaketen automatiskt. Ladda ner lämplig ZIP-fil(er) från <a href="{$a->src}">{$a->src}</a> och packa upp dem manuellt till din datakatalog <code>{$a->dest}</code>';
$string['install'] = 'Installera valda språkpaket';
$string['installedlangs'] = 'Installerade språkpaket';
$string['installfailed'] = 'Installationen av språkpaket misslyckades!';
$string['installfinished'] = 'Språkpaketen installerades.';
$string['installpending'] = 'Följande språkpaket installeras snart: {$a}';
$string['installscheduled'] = 'Språkpaket som schemalagts för att installeras.';
$string['langimport'] = 'Hantera språkpaket';
$string['langimportdisabled'] = 'Språkimportfunktionen har inaktiverats. Du måste uppdatera dina språkpaket manuellt på filsystemnivå. Glöm inte att rensa strängcachen efter att du gjort uppdateringen.';
$string['langpackinstalled'] = 'Spåkpaket \'{$a}\' installerades';
$string['langpackinstalledevent'] = 'Språkpaket installerat';
$string['langpacknotremoved'] = 'Ett fel har uppstått; språkpaketet \'{$a}\' inte är helt avinstallerat. Vänligen kontrollera filbehörigheterna.';
$string['langpackremoved'] = 'Språkpaket \'{$a}\' avinstallerades';
$string['langpackremovedevent'] = 'Språkpaket avinstallerat';
$string['langpackupdated'] = 'Uppdateringen av språkpaket \'{$a}\' lyckades';
$string['langpackupdatedevent'] = 'Språkpaketet uppdaterades';
$string['langpackupdateskipped'] = 'Uppdateringen av språkpaketet \'{$a}\' hoppades över';
$string['langpackuptodate'] = 'Språkpaket \'{$a}\' är aktuellt';
$string['langunsupported'] = '<p>Din server verkar inte helt stödja följande språk:</p><ul>{$a->missinglocales}</ul><p> I stället kommer den globala lokaliseringen ({$a->globallocale}) att användas för att formatera vissa strängar som datum eller siffror.</p>';
$string['langupdatecomplete'] = 'Uppdateringen av språkpaket har slutförts';
$string['missingcfglangotherroot'] = 'Saknat konfigurationsvärde $CFG->langotherroot';
$string['missinglangparent'] = 'Saknat föräldraspråk  <em>{$a->parent}</em> av <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Det engelska språkpaketet kan inte avinstalleras.';
$string['nolangupdateneeded'] = 'Alla dina språkpaket är aktuella. De behöver inte uppdateras.';
$string['pluginname'] = 'Språkpaket';
$string['privacy:metadata'] = 'Språkpaket pluginen lagrar inte några personuppgifter.';
$string['purgestringcaches'] = 'Töm strängcache';
$string['search'] = 'Sök bland tillgängliga språkpaket';
$string['selectlangs'] = 'Välj språk att avinstallera';
$string['uninstall'] = 'Avinstallera valda språkpaket';
$string['uninstallconfirm'] = 'Du håller på att fullständigt avinstallera dessa språkpaket: <strong>{$a}</strong>. Är du säker?';
$string['updatelangs'] = 'Uppdatera språkpaket';
$string['updatelangsnote'] = 'Att uppdatera alla installerade språkpaket genom att klicka på knappen kan ta lång tid och leda till timeout. Vi rekommenderar i stället att du använder den schemalagda aktiviteten \'{$a->taskname}\' (som körs som standard varje dag).';
