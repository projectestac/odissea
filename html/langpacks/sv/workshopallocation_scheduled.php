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
 * Strings for component 'workshopallocation_scheduled', language 'sv', version '4.1'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Bakgrundsbearbetning av schemalagd fördelning';
$string['currentstatus'] = 'Nuvarande status';
$string['currentstatusexecution'] = 'Status';
$string['currentstatusexecution1'] = 'Utförd {$a->datetime}';
$string['currentstatusexecution2'] = 'Utförs igen {$a->datetime}';
$string['currentstatusexecution3'] = 'Kommer att utföras {$a->datetime}';
$string['currentstatusexecution4'] = 'Väntar på att utföras';
$string['currentstatusnext'] = 'Nästa körning';
$string['currentstatusnext_help'] = 'I vissa fall schemaläggs fördelningen automatiskt igen även om den redan har utförts. Detta kan till exempel inträffa om tidsfristen för inlämningar har förlängts.';
$string['currentstatusreset'] = 'Återställ';
$string['currentstatusreset_help'] = 'Om du sparar formuläret med den här kryssrutan markerad kommer det att resultera i att nuvarande status återställs. All information om den tidigare körningen kommer att tas bort så att fördelningen kan utföras igen (om aktiverad ovan).';
$string['currentstatusresetinfo'] = 'Kryssa i rutan och spara formuläret för att nollställa körningsresultatet';
$string['currentstatusresult'] = 'Senaste körningsresultat';
$string['enablescheduled'] = 'Aktivera schemalagd fördelning';
$string['enablescheduledinfo'] = 'Fördela automatiskt inlämningar i slutet av inlämningsfasen';
$string['pluginname'] = 'Schemalagd fördelning';
$string['privacy:metadata'] = 'Pluginmodulen Schemalagd fördelning lagrar ingen personlig information. Faktiska personuppgifter om vem som bedömer vem lagras av själva workshopmodulen och bifogas exporterade bedömningar.';
$string['randomallocationsettings'] = 'Fördelningsinställningar';
$string['randomallocationsettings_help'] = 'Parametrar för metoden för slumpmässig fördelning definieras här. De kommer att användas av pluginmodulen Slumpmässig fördelning för den faktiska tilldelningen av inlämningar.';
$string['resultdisabled'] = 'Schemalagd fördelning inaktiverad';
$string['resultenabled'] = 'Schemalagd fördelning aktiverad';
$string['resultexecuted'] = 'Lyckades';
$string['resultfailed'] = 'Kunde inte fördela inlämningar automatiskt';
$string['resultfailedconfig'] = 'Schemalagd fördelning felkonfigurerad';
$string['resultfaileddeadline'] = 'Det finns inget slutdatum för inlämningar angivet för Workshopen';
$string['resultfailedphase'] = 'Workshopen är inte i inlämningsfasen';
$string['resultvoid'] = 'Inga inlämningar fördelades';
$string['resultvoiddeadline'] = 'Inte efter inlämningens slutdatum ännu';
$string['resultvoidexecuted'] = 'Fördelningen har redan genomförts';
$string['scheduledallocationsettings'] = 'Inställningar för schemalagd fördelning';
$string['scheduledallocationsettings_help'] = 'Om den är aktiverad kommer den schemalagda fördelningsmetoden automatiskt att fördela inlämningar för bedömningen i slutet av inlämningsfasen. Slutet av fasen kan definieras i workshopen under "Slutdatum för bedömningar".

Internt utförs slumpallokeringsmetoden med parametrarna som är fördefinierade i det här formuläret. Det innebär att den schemalagda allokeringen fungerar som om läraren utförde den slumpmässiga fördelningen själv i slutet av inlämningsfasen med hjälp av fördelningsinställningarna nedan.

Observera att den schemalagda allokeringen *inte* utförs om du manuellt byter fas i workshopen till bedömningsfasen innan slutdatum för inlämningen. Du måste i så fall själv fördela inlämningarna. Den schemalagda fördelningsmetoden är särskilt användbar när den används tillsammans med funktionen för automatiska fasbyten.';
$string['setup'] = 'Konfigurera schemalagd fördelning';
