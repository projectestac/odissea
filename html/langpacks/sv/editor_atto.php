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
 * Strings for component 'editor_atto', language 'sv', version '4.4'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Kan inte kontakta servern. Om du klickar Spara/Skicka nu riskerar du att förlora de ändringar du gjort.';
$string['autosavefrequency'] = 'Autospar-frekvens';
$string['autosavefrequency_desc'] = 'Det här är antalet sekunder mellan försöken att spara automatiskt. Atto sparar automatiskt texten i redigeraren enligt den här inställningen, så att texten kan återställas automatiskt när samma användare återgår till samma formulär.';
$string['autosaves'] = 'Autospar-information';
$string['autosavesucceeded'] = 'Utkast sparat.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Raden \'{$a}\' har ett felaktigt format.';
$string['errorgroupisusedtwice'] = 'Gruppen \'{$a}\' har definierats dubbelt; gruppnamn måste vara unika.';
$string['errornopluginsorgroupsfound'] = 'Hittade inga pluginmoduler eller grupper. Vänligen lägg till några.';
$string['errorpluginisusedtwice'] = 'Pluginmodulen \'{$a}\' används dubbelt. Pluginmoduler kan enbart definieras en gång.';
$string['errorpluginnotfound'] = 'Pluginmodulen \'{$a}\' kan inte användas. Den verkar inte vara installerad.';
$string['errortextrecovery'] = 'Dessvärre kunde inte utkastet återställas.';
$string['infostatus'] = 'Information';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Atto HTML-redigerare';
$string['privacy:metadata:database:atto_autosave'] = 'Automatiskt sparade utkast.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Texten som sparades.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Tid då innehållet ändrades.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID för användaren som sparade informationen.';
$string['recover'] = 'Återställ';
$string['richtexteditor'] = 'RTF-redigerare';
$string['settings'] = 'Inställningar för Atto-verktygsrad';
$string['subplugintype_atto'] = 'Atto-plugin';
$string['subplugintype_atto_plural'] = 'Atto-plugins';
$string['taskautosavecleanup'] = 'Städa upp gamla utkast som sparats automatiskt';
$string['textrecovered'] = 'Ett utkast av denna text återställdes automatiskt.';
$string['toolbarconfig'] = 'Inställningar för verktygsfält';
$string['toolbarconfig_desc'] = 'Listan över plugins och ordningen de visas i kan konfigureras här. Konfigurationen består av grupper (en per rad) följt av den ordnade listan över plugins för den gruppen. Gruppen är separerad från plugins med ett likhetstecken och plugins separeras med kommatecken. Gruppnamnen måste vara unika och ange vad knapparna har gemensamt. Knapp- och gruppnamn bör inte upprepas och får endast innehålla alfanumeriska tecken.';
$string['warningstatus'] = 'Varning';
