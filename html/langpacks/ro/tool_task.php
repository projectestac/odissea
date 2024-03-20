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
 * Strings for component 'tool_task', language 'ro', version '4.1'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'Coada de cereri ad hoc este goală';
$string['adhocqueueold'] = 'Cea mai veche sarcină este {$a->age}, care depășește {$a->max}';
$string['adhocqueuesize'] = 'Coada de activități ad hoc are {$a} sarcini';
$string['adhoctaskid'] = 'Codul sarcinii ad hoc: {$a}';
$string['adhoctasks'] = 'Sarcini ad hoc';
$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Înapoi la sarcinile programate';
$string['blocking'] = 'Blocare';
$string['cannotfindthepathtothecli'] = 'Nu se poate găsi calea către executabilul CLI PHP, deci executarea sarcinii a fost întreruptă. Setați setarea „Calea către PHP CLI” în Administrarea site-ului / Server / Căi sistem.';
$string['checkadhocqueue'] = 'Coadă de sarcini ad hoc';
$string['checkcronrunning'] = 'Cronul rulează';
$string['checkmaxfaildelay'] = 'Sarcini maxim întârziere de eșec';
$string['classname'] = 'Numele clasei';
$string['clearfaildelay_confirm'] = 'Sigur doriți să ștergeți întârzierea de eșec pentru sarcina „{$a}”? După eliminarea întârzierii, sarcina va rula conform programului său normal.';
$string['component'] = 'Componentă';
$string['corecomponent'] = 'Miez';
$string['crondisabled'] = 'Cron este dezactivat. Nu vor fi demarate sarcini noi. Sistemul nu va funcționa corect până nu este activat din nou.';
$string['cronok'] = 'Cron rulează frecvent';
$string['default'] = 'Implicit';
$string['defaultx'] = 'Implicit: {$a}';
$string['disabled'] = 'Dezactivat';
$string['disabled_help'] = 'Sarcinile programate dezactivate nu sunt executate de la cron, însă pot fi executate în continuare manual prin instrumentul CLI.';
$string['edittaskschedule'] = 'Editați programul sarcinilor: {$a}';
$string['enablerunnow'] = 'Permiteți „Rulați acum” pentru sarcinile programate';
$string['enablerunnow_desc'] = 'Permite administratorilor să ruleze imediat o singură sarcină programată, mai degrabă decât să aștepte ca aceasta să ruleze conform programării. Funcția necesită setarea „Path to PHP CLI” (pathtophp) în căile de sistem. Sarcina rulează pe serverul web, deci este posibil să doriți să dezactivați această caracteristică pentru a evita potențiale probleme de performanță.';
$string['faildelay'] = 'Întârziere în caz de nereușită';
$string['fromcomponent'] = 'Din componenta: {$a}';
$string['hostname'] = 'Nume gazdă';
$string['lastcronstart'] = 'Data ultimei rulări a cron-ului';
$string['lastruntime'] = 'Ultima rulare';
$string['lastupdated'] = 'Ultima actualizare {$a}.';
$string['nextruntime'] = 'Următoarea rulare';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin dezactivat';
$string['pluginname'] = 'Configurarea sarcinii programate';
$string['privacy:metadata'] = 'Pluginul de configurare a sarcinilor programate nu stochează date personale.';
$string['resettasktodefaults'] = 'Resetați programul de sarcini la valorile implicite';
$string['resettasktodefaults_help'] = 'Aceasta va renunța la orice modificare locală și va reveni la programarea acestei sarcini la setările sale inițiale.';
$string['runagain'] = 'Rulează din nou';
$string['runningtasks'] = 'Sarcini care rulează acum';
$string['runnow'] = 'Se rulează acum';
$string['runnow_confirm'] = 'Sigur doriți să rulați această sarcină „{$a}” acum? Sarcina va rula pe serverul web și poate dura ceva timp.';
$string['runpattern'] = 'Executare model';
$string['scheduled'] = 'Programat';
$string['scheduledtaskchangesdisabled'] = 'Modificarea listei de sarcini CRON programate au fost împiedicate în configurația Moodle';
$string['scheduledtasks'] = 'Sarcini CRON programate';
$string['started'] = 'Început';
$string['taskdisabled'] = 'Sarcina dezactivată';
$string['taskfailures'] = '{$a} sarcină (i) eșuată (e)';
$string['tasklogs'] = 'Jurnalele de activități';
$string['tasknofailures'] = 'Nu există sarcini care eșuează';
$string['taskscheduleday'] = 'Zi';
$string['taskscheduleday_help'] = 'Câmpul din ziua lunii pentru programarea sarcinilor. Câmpul utilizează același format ca unix cron. Câteva exemple sunt:

* <strong> * </strong> În fiecare zi
* <strong> * / 2 </strong> în fiecare a doua zi
* <strong> 1 </strong> Prima din fiecare lună
* <strong> 1, 15 </strong> Prima și a cincisprezecea din fiecare lună';
$string['taskscheduledayofweek'] = 'Zi a săptămânii';
$string['taskscheduledayofweek_help'] = 'Câmpul din ziua săptămânii pentru programul de sarcini. Câmpul utilizează același format ca unix cron. Câteva exemple sunt:

* <strong> * </strong> În fiecare zi
* <strong> 0 </strong> în fiecare duminică
* <strong> 6 </strong> în fiecare sâmbătă
* <strong> 1, 5 </strong> în fiecare luni și vineri';
$string['taskschedulehour'] = 'Oră';
$string['taskschedulehour_help'] = 'Câmpul orar pentru programarea sarcinilor. Câmpul utilizează același format ca unix cron. Câteva exemple sunt:

* <strong> * </strong> În fiecare oră
* <strong> * / 2 </strong> La fiecare 2 ore
* <strong> 2-10 </strong> în fiecare oră, de la 2:00 până la 10:00 (inclusiv)
* <strong> 2, 6, 9 </strong> 2am, 6am și 9am';
$string['taskscheduleminute'] = 'Minut';
$string['taskscheduleminute_help'] = 'Câmp de minute pentru programarea sarcinilor. Câmpul utilizează același format ca unix cron. Câteva exemple sunt:

* <strong> * </strong> În fiecare minut
* <strong> * / 5 </strong> La fiecare 5 minute
* <strong> 2-10 </strong> în fiecare minut între 2 și 10 după oră (inclusiv)
* <strong> 2, 6, 9 </strong> 2, 6 și 9 minute după oră';
$string['taskschedulemonth'] = 'Lună';
$string['taskschedulemonth_help'] = 'Câmp lunar pentru programarea sarcinilor. Câmpul utilizează același format ca unix cron. Câteva exemple sunt:

* <strong> * </strong> În fiecare lună
* <strong> * / 2 </strong> în fiecare a doua lună
* <strong> 1 </strong> în fiecare ianuarie
* <strong> 1, 5 </strong> în fiecare ianuarie și mai';
$string['viewlogs'] = 'Vizualizați jurnalele pentru {$a}';
