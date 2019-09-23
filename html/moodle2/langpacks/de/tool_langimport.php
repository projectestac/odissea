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
 * Strings for component 'tool_langimport', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Eine Verbindung zum Download-Server konnte nicht hergestellt werden. Deswegen ist es nicht möglich, die Sprachpakete automatisch zu installieren oder zu aktualisieren. Laden Sie die entsprechende ZIP-Datei von <a href="{$a->src}">{$a->src}</a> herunter und entpacken Sie sie manuell in Ihr Datenverzeichnis <code>{$a->dest}</code>.';
$string['install'] = 'Ausgewähltes Sprachpaket installieren';
$string['installedlangs'] = 'Installierte Sprachpakete';
$string['langimport'] = 'Sprachpakete verwalten';
$string['langimportdisabled'] = 'Der Import von Sprachpaketen wurde deaktiviert. Sie müssen die Sprachpakete manuell auf dem Server aktualisieren. Abschließend müssen Sie den Sprachcache löschen.';
$string['langpackinstalled'] = 'Das Sprachpaket ‘{$a}\' wurde erfolgreich installiert.';
$string['langpackinstalledevent'] = 'Sprachpaket installiert';
$string['langpacknotremoved'] = 'Fehler: Das Sprachpaket \'{$a}\' wurde nicht vollständig deinstalliert. Prüfen Sie die Dateirechte.';
$string['langpackremoved'] = 'Das Sprachpaket ‘{$a}\' wurde deinstalliert.';
$string['langpackremovedevent'] = 'Sprachpaket deinstalliert';
$string['langpackupdated'] = 'Das Sprachpaket ‘{$a}\' wurde erfolgreich aktualisiert.';
$string['langpackupdatedevent'] = 'Sprachpaket aktualisiert';
$string['langpackupdateskipped'] = 'Das Sprachpaket ‘{$a}\' wurde übersprungen.';
$string['langpackuptodate'] = 'Das Sprachpaket ‘{$a}\' ist aktuell.';
$string['langupdatecomplete'] = 'Die Aktualisierung der Sprachpakete ist abgeschlossen.';
$string['missingcfglangotherroot'] = 'Fehlende Einstellung $CFG->langotherroot';
$string['missinglangparent'] = 'Das Sprachpaket \'{$a->parent}\' fehlt für \'{$a->lang}\'.';
$string['noenglishuninstall'] = 'Das englische Sprachpaket kann nicht deinstalliert werden.';
$string['nolangupdateneeded'] = 'Alle Sprachpakete sind aktuell.';
$string['pluginname'] = 'Sprachpakete';
$string['privacy:metadata'] = 'Das Plugin \'Sprachpakete\' speichert keine personenbezogenen Daten.';
$string['purgestringcaches'] = 'Sprachcache löschen';
$string['selectlangs'] = 'Wählen Sie ein Sprachpaket, das deinstalliert werden soll.';
$string['uninstall'] = 'Ausgewähltes Sprachpaket deinstallieren';
$string['uninstallconfirm'] = 'Möchten Sie die Sprachpakete \'{$a}\' wirklich deinstallieren?';
$string['updatelangs'] = 'Sprachpakete aktualisieren';
