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
 * Strings for component 'tool_task', language 'ca', version '3.11'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'Tan aviat com sigui possible';
$string['blocking'] = 'Bloquejant';
$string['component'] = 'Component';
$string['corecomponent'] = 'Nucli';
$string['default'] = 'Defecte';
$string['disabled'] = 'Inhabilitat';
$string['disabled_help'] = 'Les tasques programades inhabilitades no s\'executen des de cron, tot i així, encara es poden executar manualment a través de l\'eina CLI.';
$string['edittaskschedule'] = 'Edita la programació de la tasca: {$a}';
$string['faildelay'] = 'Retard si falla';
$string['lastruntime'] = 'Darrera execució';
$string['nextruntime'] = 'Propera execució';
$string['plugindisabled'] = 'S\'ha inhabilitat el connector';
$string['pluginname'] = 'Configuració de les tasques programades';
$string['resettasktodefaults'] = 'Reinicia la tasca programada als valors predeterminats';
$string['resettasktodefaults_help'] = 'Això descartarà qualsevol canvi local i revertirà la programació d\'aquesta tasca a la seva configuració original.';
$string['scheduledtaskchangesdisabled'] = 'Les modificacions de la llista de tasques programades s\'han bloquejat a la configuració de Moodle';
$string['scheduledtasks'] = 'Tasques programades';
$string['taskdisabled'] = 'S\'ha inhabilitat la tasca';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Camp dia del mes per la tasca programada. El camp fa servir el mateix format que el cron de Unix. Alguns exemples:<br/><ul><li><strong>*</strong> Cada dia</li><li><strong>*/2</strong> Cada 2 dies</li><li><strong>1</strong> El dia 1 de cada mes</li><li><strong>1,15</strong> El dia 1 i 15 de cada mes</li></ul>';
$string['taskscheduledayofweek'] = 'Dia de la setmana';
$string['taskscheduledayofweek_help'] = 'Camp dia de la setmana per la tasca programada. El camp fa servir el mateix format que el cron de Unix. Alguns exemples:<br/><ul><li><strong>*</strong> Cada dia</li><li><strong>0</strong> Cada diumenge</li><li><strong>6</strong> Cada dissabte</li><li><strong>1,5</strong> Cada dilluns i divendres</li></ul>';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Camp hora per la tasca programada. El camp fa servir el mateix format que el cron de Unix. Alguns exemples:<br/><ul><li><strong>*</strong> Cada hora</li><li><strong>*/2</strong> Cada 2 hores</li><li><strong>2-10</strong> Cada hora des de les 2 a les 10 del matí (incloses)</li><li><strong>2,6,9</strong> A les 2, 6 i 9 del matí</li></ul>';
$string['taskscheduleminute'] = 'Minut';
$string['taskscheduleminute_help'] = 'Camp minut per la tasca programada. El camp fa servir el mateix format que el cron de Unix. Alguns exemples:<br/><ul><li><strong>*</strong> Cada minut</li><li><strong>*/5</strong> Cada 5 minuts</li><li><strong>2-10</strong> Cada minut entre el minut 2 i  el minut 10 de cada hora (inclossos)</li><li><strong>2,6,9</strong> Minuts 2, 6 i 9 de cada hora</li></ul>';
$string['taskschedulemonth'] = 'Mes';
$string['taskschedulemonth_help'] = 'Camp mes per la tasca programada. El camp fa servir el mateix format que el cron de Unix. Alguns exemples:<br/><ul><li><strong>*</strong> Cada mes</li><li><strong>*/2</strong> Cada 2 mesos</li><li><strong>1</strong> Cada gener</li><li><strong>1,5</strong> Cada gener i maig</li></ul>';
