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
 * Strings for component 'tool_langimport', language 'de', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Eine Verbindung zum Download-Server konnte nicht hergestellt werden. Deswegen ist es nicht möglich, die Sprachpakete automatisch zu installieren oder zu aktualisieren. Laden Sie die entsprechende ZIP-Datei von <a href="{$a->src}">{$a->src}</a> herunter und entpacken Sie sie manuell in Ihr Datenverzeichnis <code>{$a->dest}</code>.';
$string['install'] = 'Ausgewählte Sprachpakete installieren';
$string['installedlangs'] = 'Installierte Sprachpakete';
$string['installfailed'] = 'Die Installation von Sprachpaketen ist fehlgeschlagen!';
$string['installfinished'] = 'Die Installation von Sprachpaketen ist abgeschlossen.';
$string['installpending'] = 'Die folgenden Sprachpakete sind zur Installation vorgemerkt: {$a}';
$string['installscheduled'] = 'Vorgemerkte Sprachpakete';
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
$string['langunsupported'] = '<p>Dieser Server scheint die folgenden Sprachen nicht vollständig zu unterstützen:</p><ul>{$a->missinglocales}</ul><p><p>Deswegen wird das Gebietsschema ({$a->globallocale}) verwendet, um bestimmte Zeichenketten wie Datum oder Zahlen zu formatieren.</p>';
$string['langupdatecomplete'] = 'Die Aktualisierung der Sprachpakete ist abgeschlossen.';
$string['missingcfglangotherroot'] = 'Fehlende Einstellung $CFG->langotherroot';
$string['missinglangparent'] = 'Das Sprachpaket \'{$a->parent}\' fehlt für \'{$a->lang}\'.';
$string['noenglishuninstall'] = 'Das englische Sprachpaket kann nicht deinstalliert werden.';
$string['noenglishuninstalltitle'] = 'Kann nicht deinstalliert werden';
$string['nolangupdateneeded'] = 'Alle installierten Sprachpakete sind aktuell.';
$string['pluginname'] = 'Sprachpakete';
$string['privacy:metadata'] = 'Das Plugin \'Sprachpakete\' speichert keine personenbezogenen Daten.';
$string['purgestringcaches'] = 'Sprachcache löschen';
$string['search'] = 'Verfügbare Sprachpakete suchen';
$string['selectlangs'] = 'Wählen Sie ein Sprachpaket, das deinstalliert werden soll.';
$string['uninstall'] = 'Ausgewählte Sprachpakete deinstallieren';
$string['uninstallconfirm'] = 'Möchten Sie die Sprachpakete wirklich deinstallieren?<br><strong>\'{$a}\'</strong>';
$string['updatelangs'] = 'Installierte Sprachpakete aktualisieren';
$string['updatelangsnote'] = 'Das Aktualisieren aller installierten Sprachpakete kann sehr lange dauern und zu Zeitüberschreitungen führen. Es wird empfohlen, nicht das sofortige Aktualisieren durch Drücken der Taste anzustoßen, sondern stattdessen die geplante Task \'{$a->taskname}\' abzuwarten, die standardmäßig einmal am Tag ausgeführt wird.';
