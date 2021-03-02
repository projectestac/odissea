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
 * Strings for component 'tool_task', language 'sv', version '3.8'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Tillbaka till schemalagda aktiviteter';
$string['blocking'] = 'Blockerande';
$string['cannotfindthepathtothecli'] = 'Det går inte att hitta sökvägen till PHP CLI-programfilen. Körningen av aktiviteten har avbrutits. Ange sökvägen i \'Path to PHP CLI\' i Administration av webbplats / Server / Systemsökvägar.';
$string['clearfaildelay_confirm'] = 'Vill du ta bort felfördröjningen för aktiviteten \'{$a}\'? Efter att ha tagit bort fördröjningen kommer aktiviteten att köras enligt sitt normala schema.';
$string['component'] = 'Komponent';
$string['corecomponent'] = 'System';
$string['default'] = 'Standard';
$string['disabled'] = 'Inaktiverad';
$string['disabled_help'] = 'Inaktiverade schemalagda aktiviteter körs inte av cron, men de kan fortfarande köras manuellt via CLI-verktyget.';
$string['edittaskschedule'] = 'Redigera schemalagd aktivitet: {$a}';
$string['enablerunnow'] = 'Tillåt "Kör nu" för schemalagda aktiviteter';
$string['enablerunnow_desc'] = 'Tillåter administratörer att köra en enskild schemalagd aktivitet omedelbart i stället för att vänta på att den ska köras som planerat. Funktionen kräver \'Path to PHP CLI\' (pathtophp) är inställd i System-sökvägar. Aktiviteten körs på webbservern, så du kanske vill inaktivera den här funktionen för att undvika eventuella prestandaproblem.';
$string['faildelay'] = 'Felfördröjning';
$string['lastruntime'] = 'Senaste körning';
$string['nextruntime'] = 'Nästa körning';
$string['plugindisabled'] = 'Plugin-modul inaktiverad';
$string['pluginname'] = 'Schemalagd aktivitet';
$string['privacy:metadata'] = 'Plugin-modulen Schemalagd sktivitet lagrar ingen användarinformation';
$string['resettasktodefaults'] = 'Återställ till standardinställningar';
$string['resettasktodefaults_help'] = 'Detta kommer att åsidosätta eventuella ändringar och återställa schemat för denna aktivitet till ursprungsinställningarna.';
$string['runnow'] = 'Kör nu';
$string['runnow_confirm'] = 'Vill du köra aktiviteten \'{$a}\' nu? Den kommer att köras på webbservern och kan ta lite tid att slutföra.';
$string['runpattern'] = 'Kör mönster';
$string['scheduledtaskchangesdisabled'] = 'Ändringar i listan över schemalagda aktiviteter har förhindrats i Moodle-konfigurationen';
$string['scheduledtasks'] = 'Schemalagda aktiviteter';
$string['taskdisabled'] = 'Aktivitet inaktiverad';
$string['tasklogs'] = 'Logg';
$string['taskscheduleday'] = 'Dag';
$string['taskscheduleday_help'] = 'Fältet för dagen i månaden för aktivitetsschemat. Fältet använder samma format som Unix Cron. Några exempel är:

* <strong>*</strong> Varje dag
* <strong>*/2</strong> Var 2:a dag
* <strong>1</strong> Den förste i varje månad
* <strong>1, 15</strong> Den förste och femtonde varje månad';
$string['taskscheduledayofweek'] = 'Dag i veckan';
$string['taskscheduledayofweek_help'] = 'Fältet för dag i veckan för aktivitetsschemat. Fältet använder samma format som Unix Cron. Några exempel är:

* <strong>*</strong> Varje dag
* <strong>0</strong> Varje söndag
* <strong>6</strong> Varje lördag
* <strong>1, 5</strong> Varje måndag och fredag';
$string['taskschedulehour'] = 'Timme';
$string['taskschedulehour_help'] = 'Timfält för aktivitetsschema. Fältet använder samma format som Unix Cron. Några exempel är:

* <strong>*</strong> Varje timme
* <strong>*/2</strong> Var 2:a timme
* <strong>2-10</strong> Varje timme från 02:00 till och med 10:00
* <strong>2, 6, 9</strong> 02:00, 06:00 och 09:00';
$string['taskscheduleminute'] = 'Minut';
$string['taskscheduleminute_help'] = 'Minutfält för aktivitetsschema. Fältet använder samma format som Unix Cron. Några exempel är:

* <strong>*</strong> Varje minut
* <strong>*/5</strong> Var 5:e minut
* <strong>2-10</strong> Varje minut mellan 2 och 10 förbi timmen (inclusive)
* <strong>2, 6, 9</strong> 2, 6 och 9 minuter förbi timmen';
$string['taskschedulemonth'] = 'Månad';
$string['taskschedulemonth_help'] = 'Fältet för månaden för aktivitetsschemat. Fältet använder samma format som Unix Cron. Några exempel är:

* <strong>*</strong> Varje månad
* <strong>*/2</strong> Var annan månad
* <strong>1</strong> Varje januari
* <strong>1,5</strong> Varje januari och maj';
$string['viewlogs'] = 'Visa loggar för {$a}';
