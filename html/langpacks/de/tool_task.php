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
 * Strings for component 'tool_task', language 'de', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad-hoc';
$string['adhocempty'] = 'Die Warteschlange für Ad-hoc-Tasks ist leer.';
$string['adhocqueueold'] = 'Die älteste unverarbeitete Task ist {$a->age}, was mehr ist als {$a->max}';
$string['adhocqueuesize'] = 'Die Warteschlange für Ad-hoc-Tasks hat {$a} Tasks.';
$string['adhoctaskid'] = 'Ad-hoc-Task-ID: {$a}';
$string['adhoctaskrun'] = 'Ad-hoc-Taskausführung initiiert';
$string['adhoctasks'] = 'Ad-hoc-Tasks';
$string['adhoctasksdue'] = 'Ad-hoc-Tasks sind fällig';
$string['adhoctasksfailed'] = 'Ad-hoc-Tasks sind fehlgeschlagen';
$string['adhoctasksfuture'] = 'Zukünftige Ad-hoc-Tasks';
$string['adhoctasksrunning'] = 'Ad-hoc-Tasks werden ausgeführt';
$string['asap'] = '<abbr title="So schnell wie möglich">Schnell</abbr>';
$string['backtoadhoctasks'] = 'Zurück zu den Ad-hoc-Tasks';
$string['backtoscheduledtasks'] = 'Zurück zu den geplanten Vorgängen';
$string['blocking'] = 'Blockierend';
$string['cannotfindthepathtothecli'] = 'Der Pfad zum Ausführen von PHP CLI wurde auf dem Server nicht gefunden. Die Ausführung wurde daher abgebrochen. Tragen Sie den richtigen Pfad unter "Pfad für PHP CLI" ein unter Website Administration - Server - Systempfade';
$string['checkadhocqueue'] = 'Warteschlange für Ad-hoc-Tasks';
$string['checkcronrunning'] = 'Cron wird ausgeführt';
$string['checklongrunningtaskcount'] = 'Lange laufende Tasks: {$a}';
$string['checklongrunningtasks'] = 'Lang laufende Tasks';
$string['checkmaxfaildelay'] = 'Maximale Fehlerverzögerung für Tasks';
$string['classname'] = 'Class-Name';
$string['clearfaildelay_confirm'] = 'Möchten Sie die Fehlerverzögerung für den Vorgang \'{$a}\' wirklich löschen? Nach dem Löschen wird der Vorgang gemäß seinem normalen Zeitplan ausgeführt.';
$string['component'] = 'Komponente';
$string['corecomponent'] = 'Kern';
$string['crondisabled'] = 'Der Cron ist deaktiviert. Es werden keine neuen Tanks gestartet. Das System funktioniert erst ordnungsgemäß, wenn dies wieder aktiviert wird.';
$string['cronok'] = 'Der Cron läuft regelmäßig.';
$string['default'] = 'Standard';
$string['defaultx'] = 'Standard: {$a}';
$string['disabled'] = 'Deaktiviert';
$string['disabled_help'] = 'Deaktivierte geplante Tasks werden vom Cron nicht ausgeführt, können aber manuell über die Kommandozeile gestartet werden.';
$string['edittaskschedule'] = 'Geplanten Vorgang bearbeiten: {$a}';
$string['enablerunnow'] = '\'Sofort ausführen\' von geplanten Vorgängen erlauben';
$string['enablerunnow_desc'] = 'Diese Option ermöglicht es Administrator/innen, einen einzelnen geplanten Vorgang sofort auszuführen, ohne auf den planmäßigen Termin zu warten. Dafür muss "Pfad zu PHP CLI" in Systempfade eingestellt sein. Ein solcher Vorgang läuft auf dem Webserver, so dass diese Option deaktiviert sein könnte, um Leistungseinbrüche zu vermeiden.';
$string['faildelay'] = 'Fehlerverzögerung';
$string['failed'] = 'Fehlgeschlagen';
$string['fromcomponent'] = 'Von der Komponente: {$a}';
$string['hostname'] = 'Host-Name';
$string['lastcronstart'] = 'Zeit seit dem letzen Cron-Aufruf: {$a}';
$string['lastruntime'] = 'Letzte Ausführung';
$string['lastupdated'] = 'Zuletzt aktualisiert {$a}.';
$string['nextruntime'] = 'Nächste Ausführung';
$string['noclassname'] = 'Klassenname nicht angegeben';
$string['notasks'] = 'Keine Task zum Ausführen';
$string['payload'] = 'Nutzlast';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin deaktiviert';
$string['pluginname'] = 'Einstellungen für geplante Tasks';
$string['privacy:metadata'] = 'Das Plugin zur Konfiguration geplanter Vorgänge speichert keine personenbezogenen Daten.';
$string['resettasktodefaults'] = 'Zeitplan dieses Vorgangs auf Standardwerte zurücksetzen';
$string['resettasktodefaults_help'] = 'Damit werden alle lokalen Änderungen rückgängig gemacht und die Originaleinstellungen für den Vorgang wieder hergestellt.';
$string['run_adhoctasks'] = 'Ad-hoc-Tasks ausführen';
$string['runadhoc'] = 'Ad-hoc-Tasks jetzt ausführen?';
$string['runadhoc_confirm'] = 'Die Tasks werden auf dem Webserver ausgeführt und könnten einige Zeit brauchen, bis sie fertig sind.';
$string['runadhoctask'] = '\'{$a->task}\' Task-ID {$a->taskid} ausführen';
$string['runadhoctasks'] = 'Alle \'{$a}\' Tasks ausführen';
$string['runadhoctasksfailed'] = 'Fehlgeschlagene \'{$a}\' Tasks ausführen';
$string['runagain'] = 'Noch einmal';
$string['runclassname'] = 'Alle ausführen';
$string['runclassnamefailedonly'] = 'Alle ausführen ist fehlgeschlagen';
$string['runningalltasks'] = 'Alle Tasks werden ausgeführt';
$string['runningfailedtasks'] = 'Fehlgeschlagene Tasks';
$string['runningtasks'] = 'Gerade laufende Tasks';
$string['runnow'] = 'Sofort ausführen';
$string['runnow_confirm'] = 'Möchten Sie den Vorgang \'{$a}\' wirklich sofort ausführen? Der Vorgang läuft auf dem Webserver und könnte eventuell lange dauern, um fertig zu werden.';
$string['runpattern'] = 'Ausführungsmuster';
$string['scheduled'] = 'Geplant';
$string['scheduledtaskchangesdisabled'] = 'Änderungen in der Liste der geplanten Vorgänge sind nicht erlaubt.';
$string['scheduledtasks'] = 'Geplante Tasks';
$string['showall'] = 'Alle anzeigen';
$string['showfailedonly'] = 'Nur fehlgeschlagene anzeigen';
$string['showsummary'] = 'Zusammenfassung der Ad-hoc-Tasks anzeigen';
$string['slowtask'] = 'Die Task ist länger als {$a} gelaufen';
$string['started'] = 'Gestartet';
$string['taskage'] = 'Laufzeit';
$string['taskdetails'] = 'Tasks, die länger laufen als {$a->time} (max {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Vorgang deaktiviert';
$string['taskfailures'] = '{$a} Task(s) schlagen fehl';
$string['taskid'] = 'Task-ID';
$string['tasklogs'] = 'Task-Logdaten';
$string['tasknofailures'] = 'Keine Task ist fehlgeschlagen.';
$string['taskrunningtime'] = 'Die Task ist {$a} gelaufen';
$string['taskscheduleday'] = 'Tag';
$string['taskscheduleday_help'] = 'Zeitplanung: Tag des Monats. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:

* <strong>*</strong> Jeden Tag
* <strong>*/2</strong> Jeden zweiten Tag
* <strong>1</strong> Am ersten Tag in jedem Monat
* <strong>1,15</strong> Am ersten und am 15. Tag in jedem Monat';
$string['taskscheduledayofweek'] = 'Wochentag';
$string['taskscheduledayofweek_help'] = 'Zeitplanung: Wochentag. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:

* <strong>*</strong> Jeden Tag
* <strong>0</strong> Jeden Sonntag
* <strong>6</strong> Jeden Samstag
* <strong>1,5</strong> Jeden Montag und Freitag';
$string['taskschedulehour'] = 'Stunde';
$string['taskschedulehour_help'] = 'Zeitplanung: Stunde. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:

* <strong>*</strong> Jede Stunde
* <strong>*/2</strong> Alle zwei Stunden
* <strong>2-10</strong> Jede Stunde zwischen 2:00 Uhr und 10:00 Uhr (inclusive)
* <strong>2,6,9</strong> 2:00 Uhr, 6:00 Uhr und 9:00 Uhr';
$string['taskscheduleminute'] = 'Minute';
$string['taskscheduleminute_help'] = 'Zeitplanung: Minute. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:

* <strong>*</strong> Jede Minute
* <strong>*/5</strong> Alle 5 Minuten
* <strong>2-10</strong> Jede Minute zwischen der 2. und 10. Minute einer jeden Stunde  (inclusive)
* <strong>2,6,9</strong> Jede 2., 6, und 9, Minute einer jeden Stunde';
$string['taskschedulemonth'] = 'Monat';
$string['taskschedulemonth_help'] = 'Zeitplanung: Monat. Das Feld verwendet das gleiche Format wie der Unix Cron. Einige Beispiele:

* <strong>*</strong> Jeden Monat
* <strong>*/2</strong> Jeden zweiten Monat
* <strong>1</strong> Jeden Januar
* <strong>1,5</strong> Jeden Januar und Mai';
$string['viewlogs'] = 'Logdaten für  {$a} anzeigen';
