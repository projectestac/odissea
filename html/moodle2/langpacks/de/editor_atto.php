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
 * Strings for component 'editor_atto', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Keine Serververbindung. Wenn Sie diese Seite jetzt übertragen, könnten Ihre Änderungen verloren gehen.';
$string['autosavefrequency'] = 'Frequenz der Auto-Sicherung';
$string['autosavefrequency_desc'] = 'Diese Option legt die Zeit zwischen zwei automatischen Sicherungsvorgängen fest. Atto sichert den Text im Editor automatisch, so dass der Text automatisch wiederhergestellt werden kann, wenn die selbe Person erneut das selbe Formular aufruft.';
$string['autosaves'] = 'Editor-Auto-Speichern-Information';
$string['autosavesucceeded'] = 'Entwurf gesichert.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Die Zeile \'{$a}\' ist nicht richtig formatiert.';
$string['errorgroupisusedtwice'] = 'Die Gruppe \'{$a}\' ist mehrfach definiert. Gruppennamen müssen eindeutig sein.';
$string['errornopluginsorgroupsfound'] = 'Keine Plugins oder Gruppen gefunden. Fügen Sie bitte Plugins und Gruppen hinzu.';
$string['errorpluginisusedtwice'] = 'Das Plugin \'{$a}\' ist mehrfach benutzt. Plugins dürfen nur einmal definiert sein.';
$string['errorpluginnotfound'] = 'Das Plugin \'{$a}\' kann nicht benutzt werden, weil es nicht installiert zu sein scheint.';
$string['errortextrecovery'] = 'Leider konnte die Entwurfsversion nicht wiederhergestellt werden.';
$string['infostatus'] = 'Information';
$string['pluginname'] = 'Texteditor Atto';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['privacy:metadata:database:atto_autosave'] = 'Automatisch gespeicherte Texteditor Entwürfe';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Der gespeicherte Text';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Zeitpunkt der Bearbeitung des Inhalts.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID des Nutzers, dessen Daten gespeichert wurden';
$string['recover'] = 'Wiederherstellen';
$string['settings'] = 'Einstellungen';
$string['subplugintype_atto'] = 'Atto Plugin';
$string['subplugintype_atto_plural'] = 'Atto Plugins';
$string['taskautosavecleanup'] = 'Abgelaufene automatisch gespeicherte Entwürfe aus Datenbank löschen';
$string['textrecovered'] = 'Der Entwurf dieses Textes wurde automatisch wiederhergestellt.';
$string['toolbarconfig'] = 'Menüleiste';
$string['toolbarconfig_desc'] = 'Mit dieser Option werden die Plugins und deren Reihenfolge in der Menüleiste festgelegt. Für die Konfiguration werden Gruppennamen angegeben (einer pro Zeile), jeweils gefolgt von einem Gleichheitszeichen und der kommagetrennten Liste von Plugins für diese Gruppe. Die Gruppennamen müssen eindeutig sein und sollten zeigen, was die Symbole in der jeweiligen Gruppe gemeinsam haben. Symbol- und Gruppennamen dürfen nur einmal vorkommen und nur alphanumerische Zeichen enthalten.';
$string['warningstatus'] = 'Warnung';
