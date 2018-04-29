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
 * Strings for component 'tool_task', language 'de', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Blockierung';
$string['component'] = 'Komponente';
$string['corecomponent'] = 'Kern';
$string['default'] = 'Standard';
$string['disabled'] = 'Deaktiviert';
$string['disabled_help'] = 'Deaktivitierte regelmäßigen Tasks werden vom Cronjob nicht ausgeführt, können aber manuell über das CLI Tool gestartet werden.';
$string['edittaskschedule'] = 'Geplanten Vorgang bearbeiten: {$a}';
$string['faildelay'] = 'Fehlerverzögerung';
$string['lastruntime'] = 'Letzte Ausführung';
$string['nextruntime'] = 'Nächste Ausführung';
$string['plugindisabled'] = 'Plugin deaktiviert';
$string['pluginname'] = 'Einstellungen für regelmäßige Tasks';
$string['resettasktodefaults'] = 'Geplante Vorgänge auf Standard zurücksetzen';
$string['resettasktodefaults_help'] = 'Damit werden alle lokalen Änderungen rückgängig gemacht und die Originaleinstellungen für die Aufgabe wieder hergestellt.';
$string['scheduledtaskchangesdisabled'] = 'Änderungen in der Liste der regelmäßigen Tasks sind nicht erlaubt.';
$string['scheduledtasks'] = 'Regelmäßige Tasks';
$string['taskdisabled'] = 'Aufgabe deaktiviert';
$string['taskscheduleday'] = 'Tag';
$string['taskscheduleday_help'] = 'Feld der Aufgabenverwaltung: Tag des Monats. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:
<br/><ul><li><strong>*</strong> Jeden Tag</li><li><strong>*/2</strong>Jeden zweiten Tag</li><li><strong>1</strong> Der erste Tag jeden Monats</li><li><strong>1,15</strong> Am ersten und 15. Tag jeden Monats</li></ul>';
$string['taskscheduledayofweek'] = 'Wochentag';
$string['taskscheduledayofweek_help'] = 'Feld der Wochentagverwaltung. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele: <br/><ul><li><strong>*</strong> Jeden Tag</li><li><strong>0</strong> Jeden Sonntag</li><li><strong>6</strong> Jeden Samstag</li><li><strong>1,5</strong> Jeden Montag und jeden Freitag</li></ul>';
$string['taskschedulehour'] = 'Stunde';
$string['taskschedulehour_help'] = 'Feld der Stundenverwaltung. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele: <br/><ul><li><strong>*</strong> Jede Stunde</li><li><strong>*/2</strong> Alle zwei Stunden</li><li><strong>2-10</strong> Jede Stunde zwischen  2am bisl 10am (inkl.)</li><li><strong>2,6,9</strong> um 2am, 6am und 9am</li></ul>';
$string['taskscheduleminute'] = 'Minute';
$string['taskscheduleminute_help'] = 'Feld der Minutenverwaltung. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:
<br/><ul><li><strong>*</strong> Jede Minute</li><li><strong>*/5</strong> Alle 5 Minuten</li><li><strong>2-10</strong> Jede Minute zwischen 2 und 10 Minuten nach der vollen Stunde (inkl)</li><li><strong>2,6,9</strong> um 2, 6 und 9 Minuten nach jeder vollen Stunde</li></ul>';
$string['taskschedulemonth'] = 'Monat';
$string['taskschedulemonth_help'] = 'Feld der Monatsverwaltung. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:
<br/><ul><li><strong>*</strong> Jeden Monat</li><li><strong>*/2</strong> Jeden zweiten Monat</li><li><strong>1</strong> Jeden  Januar</li><li><strong>1,5</strong> Jeden Januar und Mai</li></ul>';
