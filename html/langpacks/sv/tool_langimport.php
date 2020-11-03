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
 * Strings for component 'tool_langimport', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Det går inte att ansluta till hämtningsservern. Det är inte möjligt att installera eller uppdatera språkpaketen automatiskt. Ladda ner lämplig ZIP-fil(er) från <a href="{$a->src}">{$a->src}</a> och packa upp dem manuellt till din datakatalog <code>{$a->dest}</code>';
$string['install'] = 'Installera det valda språkpaketet';
$string['installedlangs'] = 'Installerade språkpaket';
$string['langimport'] = 'Verktyg för att importera språk';
$string['langimportdisabled'] = 'Språkimportfunktionen har avaktiverats. Du måste uppdatera dina språkpaket manuellt på filsystemnivå. Glöm inte att rensa cache för strängar efter att du gjort uppdateringen.';
$string['langpackinstalled'] = 'Spåkpaketet {$a} installerades framgångsrikt';
$string['langpackinstalledevent'] = 'Språkpaket installerat';
$string['langpacknotremoved'] = 'Ett fel har uppstått; språkpaketet {$a} inte är helt avinstallerat. Vänligen kontrollera filbehörigheterna.';
$string['langpackremoved'] = 'Avinstallationen av språkpaket är avslutad';
$string['langpackremovedevent'] = 'Språkpaket avinstallerat';
$string['langpackupdated'] = 'Uppdateringen av språkpaket \'{$a}\' lyckades';
$string['langpackupdatedevent'] = 'Språkpaketet uppdaterades';
$string['langpackupdateskipped'] = 'Uppdateringen av {$a} språkpaketet hoppades över';
$string['langpackuptodate'] = 'Språkpaket {$a} är aktuellt';
$string['langunsupported'] = '<p>Din server verkar inte helt stödja följande språk:</p><ul>{$a->missinglocales}</ul><p> I stället kommer den globala lokaliseringen ({$a->globallocale}) att användas för att formatera vissa strängar som datum eller siffror.</p>';
$string['langupdatecomplete'] = 'Uppdateringen av språkpaket har fullföljts';
$string['missingcfglangotherroot'] = 'Saknat konfigurationsvärde $CFG->langotherroot';
$string['missinglangparent'] = 'Saknat föräldraspråk  <em>{$a->parent}</em> av <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Det engelska språkpaketet kan inte avinstalleras.';
$string['nolangupdateneeded'] = 'Alla Dina språkpaket är av senaste version, Du behöver inte uppdatera dem.';
$string['pluginname'] = 'Språkpaket';
$string['privacy:metadata'] = 'Språkpaket pluginen lagrar inte några personuppgifter.';
$string['purgestringcaches'] = 'Rensa sträng cache';
$string['selectlangs'] = 'Välj språk att avinstallera';
$string['uninstall'] = 'Avinstallera det valda språkpaketet';
$string['uninstallconfirm'] = 'Du håller på att fullständigt avinstallera språkpaketet {$a}, är Du säker?';
$string['updatelangs'] = 'Uppdatera alla installerade språkpaket';
