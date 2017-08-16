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
 * Strings for component 'tool_task', language 'it', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Blocco';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Core';
$string['default'] = 'Default';
$string['disabled'] = 'Disabilitato';
$string['disabled_help'] = 'Le elaborazioni pianificate disabilitate che non  saranno elaborate dal cron possono essere lanciate manualmente via CLI.';
$string['edittaskschedule'] = 'Modifica elaborazione pianificata:  {$a}';
$string['faildelay'] = 'Ritardo in caso di errore';
$string['lastruntime'] = 'Ultima elaborazione';
$string['nextruntime'] = 'Prossima elaborazione';
$string['plugindisabled'] = 'Plugin disabilitato';
$string['pluginname'] = 'Configurazione elaborazioni pianificate';
$string['resettasktodefaults'] = 'Ripristina la pianificazione di default';
$string['resettasktodefaults_help'] = 'La pianificazione personalizzata sarà eliminata e verrà ripristinata la pianificazione di default';
$string['scheduledtaskchangesdisabled'] = 'La modifica delle elaborazioni pianificate è disabilitata';
$string['scheduledtasks'] = 'Elaborazioni pianificate';
$string['taskdisabled'] = 'Elaborazione disabilitata';
$string['taskscheduleday'] = 'Giorno';
$string['taskscheduleday_help'] = 'Il giorno del mese nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi: <br/><ul><li><strong>*</strong> Ogni giorno</li><li><strong>*/2</strong> Ogni secondo giorno</li><li><strong>1</strong> Il primo giorno di ogni mese</li><li><strong>1,15</strong> Il primo ed il quindicesimo giorno di ogni mese</li></ul>';
$string['taskscheduledayofweek'] = 'Giorno della settimana';
$string['taskscheduledayofweek_help'] = 'Il giorno della settimana nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:<br/><ul><li><strong>*</strong> Ogni giorno</li><li><strong>0</strong> Ogni domenica</li><li><strong>6</strong> Ogni sabato</li><li><strong>1,5</strong> Ogni lunedì e venerdì</li></ul>';
$string['taskschedulehour'] = 'Ora';
$string['taskschedulehour_help'] = 'L\'ora alla quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi: :<br/><ul><li><strong>*</strong> Ogni ora</li><li><strong>*/2</strong> Ogni 2 ore</li><li><strong>2-10</strong> Ogni ora dalle 2 alle 10 di mattina (incluse))</li><li><strong>2,6,9</strong> Alle 2, alle 5 e alle 9 di matitna</li></ul>';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Il minuto al quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:<br/><ul><li><strong>*</strong> Ogni minuto</li><li><strong>*/5</strong> Ogni 5 minuti</li><li><strong>2-10</strong> Ogni minuto tra 2 e 10  (inclusi)</li><li><strong>2,6,9</strong> Ai minuti 2 6 e 9</li></ul>';
$string['taskschedulemonth'] = 'Mese';
$string['taskschedulemonth_help'] = 'Il mese nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi: <br/><ul><li><strong>*</strong> Ogni mese</li><li><strong>*/2</strong> Ogni secondo mese</li><li><strong>1</strong> Ogni anno a gennaio</li><li><strong>1,5</strong> Ogni anno a gennaio e maggio</li></ul>';
