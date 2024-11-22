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
 * Strings for component 'tool_task', language 'ca', version '4.1'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'La cua de tasques ad hoc està buida';
$string['adhocqueuesize'] = 'La cua de tasques ad hoc té {$a} tasques';
$string['adhoctaskid'] = 'Identificador de la tasca ad hoc: {$a}';
$string['adhoctasks'] = 'Tasques ad hoc';
$string['asap'] = 'Tan aviat com sigui possible';
$string['backtoscheduledtasks'] = 'Torna a les tasques programades';
$string['blocking'] = 'Bloquejant';
$string['cannotfindthepathtothecli'] = 'No s\'ha pogut trobar el camí a l\'executable PHP CLI, de manera que s\'ha interromput l\'execució de la tasca. Definiu el paràmetre «Camí al PHP CLI» a Administració del lloc / Servidor / Camins del sistema.';
$string['checkadhocqueue'] = 'Cua de tasques ad hoc';
$string['checkcronrunning'] = 'Cron en execució';
$string['checkmaxfaildelay'] = 'Retard de fallada màxim de les tasques';
$string['classname'] = 'Nom de la classe';
$string['clearfaildelay_confirm'] = 'Esteu segur que voleu netejar el retard de fallada per a la tasca «{$a}»? Després de netejar el retard, la tasca s\'executarà d\'acord amb el seu calendari normal.';
$string['component'] = 'Component';
$string['corecomponent'] = 'Nucli';
$string['crondisabled'] = 'El cron està desactivat. No s\'iniciaran tasques noves. El sistema no funcionarà correctament fins que no s\'habiliti de nou.';
$string['cronok'] = 'El cron s\'està executant amb freqüència';
$string['default'] = 'Defecte';
$string['defaultx'] = 'Per defecte: {$a}';
$string['disabled'] = 'Inhabilitat';
$string['disabled_help'] = 'Les tasques programades desactivades no s\'executen des del cron, però encara es poden executar manualment a través de l\'eina CLI.';
$string['edittaskschedule'] = 'Edita la programació de la tasca: {$a}';
$string['enablerunnow'] = 'Permet «Executa ara» per a les tasques programades';
$string['enablerunnow_desc'] = 'Permet als administradors executar tasques programades individuals immediatament, en lloc d\'esperar que s\'executi com a programada. La característica requereix que «Camí al PHP CLI» (pathtophp) s\'estableixi als camins del sistema. La tasca s\'executa al servidor web, de manera que és possible que vulgueu desactivar aquesta característica per evitar possibles problemes de rendiment.';
$string['faildelay'] = 'Retard de fallada';
$string['fromcomponent'] = 'Des del component: {$a}';
$string['hostname'] = 'Amfitrió';
$string['lastcronstart'] = 'Temps des de l\'última execució del cron: {$a}';
$string['lastruntime'] = 'Darrera execució';
$string['lastupdated'] = 'Darrera actualització {$a}.';
$string['nextruntime'] = 'Següent execució';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Connector desactivat';
$string['pluginname'] = 'Configuració de les tasques programades';
$string['privacy:metadata'] = 'El connector de configuració de tasques programades no emmagatzema cap dada personal.';
$string['resettasktodefaults'] = 'Restableix la programació de tasques als valors per defecte';
$string['resettasktodefaults_help'] = 'Això descartarà qualsevol canvi local i revertirà la planificació d\'aquesta tasca a la seva configuració original.';
$string['runagain'] = 'Executa de nou';
$string['runningtasks'] = 'Tasques en execució';
$string['runnow'] = 'Executa ara';
$string['runnow_confirm'] = 'Segur que voleu executar aquesta tasca «{$a}» ara? La tasca s\'executarà al servidor web i pot trigar una estona a completar-se.';
$string['runpattern'] = 'Executa el patró';
$string['scheduled'] = 'Programada';
$string['scheduledtaskchangesdisabled'] = 'Les modificacions a la llista de tasques programades s\'han bloquejat a la configuració del Moodle';
$string['scheduledtasks'] = 'Tasques programades';
$string['started'] = 'Iniciada';
$string['taskdisabled'] = 'Tasca desactivada';
$string['taskfailures'] = '{$a} tasques fallades';
$string['tasklogs'] = 'Registres de la tasca';
$string['tasknofailures'] = 'No hi ha cap tasca que falli';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Camp del dia del mes de la tasca programada. El camp utilitza el mateix format que el cron de unix. Alguns exemples són:

* <strong>*</strong> Cada dia
* <strong>*/2</strong> Cada dos dies
* <strong>1</strong> El primer de cada mes
* <strong>1, 15</strong> El primer i el quinze de cada mes';
$string['taskscheduledayofweek'] = 'Dia de la setmana';
$string['taskscheduledayofweek_help'] = 'Camp del dia de la setmana de la tasca programada. El camp utilitza el mateix format que el cron de unix. Alguns exemples són:

* <strong>*</strong> Cada dia
* <strong>0</strong> Cada diumenge
* <strong>6</strong> Cada dissabte
* <strong>1, 5</strong> Cada dilluns i divendres';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Camp de l\'hora de la tasca programada. El camp utilitza el mateix format que unix cron. Alguns exemples són:

* <strong>*</strong> Cada hora
* <strong>*/2</strong> Cada dues hores
* <strong>2-10</strong> Cada hora des de les 2 del matí fins a les 10 del matí (inclosa)
* <strong>2, 6, 9</strong> 2am, 6am i 9am';
$string['taskscheduleminute'] = 'Minut';
$string['taskscheduleminute_help'] = 'Camp del minut de la tasca programada. El camp utilitza el mateix format que unix cron. Alguns exemples són:

* <strong>*</strong> Cada minut
* <strong>*/5</strong> Cada cinc minuts
* <strong>2-10</strong> Cada minut entre els 2 i els 10 (inclòs)
* <strong>2, 6, 9</strong> En els minuts 2, 6 i 9';
$string['taskschedulemonth'] = 'Mes';
$string['taskschedulemonth_help'] = 'Camp del mes de la tasca programada. El camp utilitza el mateix format que unix cron. Alguns exemples són:

* <strong>*</strong> Cada mes
* <strong>*/2</strong> Cada segon mes
* <strong>1</strong> Cada gener
* <strong>1, 5</strong> Cada gener i maig';
$string['viewlogs'] = 'Mostra els registres de {$a}';
