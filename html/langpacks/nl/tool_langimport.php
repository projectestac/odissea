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
 * Strings for component 'tool_langimport', language 'nl', version '3.8'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Kon niet verbinden met de downloadserver. Het is niet mogelijk om de taalpakketten te installeren of updaten. Download de juiste zip-bestanden van<a href="{$a->src}">{$a->src}</a> en unzip ze manueel in je datamap  <code>{$a->dest}</code>';
$string['install'] = 'Installeer geselecteerde taalpakket(ten)';
$string['installedlangs'] = 'Geïnstalleerde taalpakketten';
$string['langimport'] = 'Taalpakkettenbeheer';
$string['langimportdisabled'] = 'De interface voor het importeren van taalpakketten is uitgeschakeld. Je moet je taalpakketten manueel updaten via het bestandssysteem. Vergeet niet de taalcache leeg te maken nadat je dit gedaan hebt.';
$string['langpackinstalled'] = 'Taalpakket {$a} is geïnstalleerd';
$string['langpackinstalledevent'] = 'Taalpakket geïnstalleerd';
$string['langpacknotremoved'] = 'Er is een fout opgetreken: taalpakket \'{$a}\' is niet volledig verwijderd. Controleer de rechten op de bestanden.';
$string['langpackremoved'] = 'Taalpakket \'{$a}\' verwijderd';
$string['langpackremovedevent'] = 'Taalpakket verwijderd';
$string['langpackupdated'] = 'Taalpakket \'{$a}\' aangepast';
$string['langpackupdatedevent'] = 'Taalpakket bijgewerkt';
$string['langpackupdateskipped'] = 'De update van taalpakket \'{$a}\' is overgeslagen.';
$string['langpackuptodate'] = 'Taalpakket \'{$a}\' is up-to-date';
$string['langunsupported'] = '<p>Je server lijkt de volgende talen niet volledig te ondersteunen: </p><ul>{$a->missinglocales}</ul><p> In plaats daarvan zal de globale locale ({$a->globallocale})  worden gebruikt om bepaalde tekenreeksen, zoals datums of nummers, te formatteren. </p>';
$string['langupdatecomplete'] = 'Taalpakket update voltooid';
$string['missingcfglangotherroot'] = 'Er ontbreekt een configuratiewaarde $CFG->langotherroot';
$string['missinglangparent'] = 'Ontbrekende parent language <em>{$a->parent}</em> voor <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Het Engels taalpakket kan niet verwijderd worden.';
$string['nolangupdateneeded'] = 'Al je geïnstalleerde taalpakketten zijn up-to-date. Er is geen update nodig.';
$string['pluginname'] = 'Pakketten';
$string['privacy:metadata'] = 'De taalpakket-plugin bewaart geen persoonlijke gegevens.';
$string['purgestringcaches'] = 'Taalcache leegmaken';
$string['selectlangs'] = 'Selecteer te verwijderen taalpakketten';
$string['uninstall'] = 'Verwijder geselecteerde taalpakketten';
$string['uninstallconfirm'] = 'Je gaat zodadelijk taalpakketten verwijderen:<strong>{$a}</strong>.  Verder gaan?';
$string['updatelangs'] = 'Update alle geïnstalleerde taalpakketten';
