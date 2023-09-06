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
 * Strings for component 'editor_atto', language 'nl', version '4.1'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Kon geen verbinding maken met de server. Als je deze pagina nu instuurt, dan kunnen je gegevens verloren gaan.';
$string['autosavefrequency'] = 'Frequentie automatisch bewaren';
$string['autosavefrequency_desc'] = 'Dit is het aantal seconden tussen automatisch bewaren. Atto zal de tekst in de editor automatisch bewaren volgens deze instelling, zodat tekst automatisch kan teruggezet worden wanneer de gebruiker terugkeert naar dit formulier.';
$string['autosaves'] = 'Autobewaar-informatie van de editor';
$string['autosavesucceeded'] = 'Concept bewaard.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Lijn \'{$a}\' heeft niet de juiste opmaak.';
$string['errorgroupisusedtwice'] = 'De groep \'{$a}\' is twee keer gedefiniëerd; groepnamen moeten uniek zijn.';
$string['errornopluginsorgroupsfound'] = 'Geen plugins of groepen gevonden; voeg groepen en plugins toe.';
$string['errorpluginisusedtwice'] = 'Plugin \'{$a}\' is twee keer gebruikt; plugins kunnen slechts één keer gedefiniëerd worden.';
$string['errorpluginnotfound'] = 'Plugin \'{$a}\' kan niet gebruikt worden; die plugin is blijkbaar niet geïnstalleerd.';
$string['errortextrecovery'] = 'De bewaarde conceptversie kon niet teruggezet worden.';
$string['infostatus'] = 'Informatie';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Atto HTML-editor';
$string['privacy:metadata:database:atto_autosave'] = 'Automatisch bewaard concept van de tekst-editor.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'De bewaarde tekst.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Het tijdstip waarop de inhoud is bewerkt.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'De ID van de gebruiker van wie de gegevens bewaard zijn.';
$string['recover'] = 'Herstellen';
$string['richtexteditor'] = 'Tekstverwerker';
$string['settings'] = 'Atto werkbalkinstellingen';
$string['subplugintype_atto'] = 'Atto plugin';
$string['subplugintype_atto_plural'] = 'Atto plugins';
$string['taskautosavecleanup'] = 'Verwijder verlopen automatisch bewaard concept';
$string['textrecovered'] = 'Een conceptversie van deze tekst werd automatisch teruggezet.';
$string['toolbarconfig'] = 'Werkbalkinstellingen';
$string['toolbarconfig_desc'] = 'De lijst van plugins en de volgorde waarin ze worden weergegeven kan hier worden geconfigureerd. De configuratie bestaat uit groepen (een per regel), gevolgd door de geordende lijst van plugins voor die groep. De groepsnaam wordt gescheiden van de plugins met een gelijkheidsteken en de plugins worden met komma\'s gescheiden. De groepsnaam moet uniek zijn en moeten aangeven wat de knoppen met elkaar gemeen hebben. Knop- en groepsnamen mogen niet worden herhaald en mogen alleen alfanumerieke tekens bevatten.';
$string['warningstatus'] = 'Waarschuwing';
