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
 * Strings for component 'tool_task', language 'it', version '4.1'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'La coda delle elaborazioni ad hoc è vuota';
$string['adhocqueueold'] = 'L\'elaborazione più vecchia è {$a->age}, che è maggiore di {$a->max}';
$string['adhocqueuesize'] = 'La coda ad hoc contiene {$a} elaborazioni.';
$string['adhoctaskid'] = 'ID elaborazione ad hoc: {$a}';
$string['adhoctasks'] = 'Elaborazione ad hoc';
$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Torna alle elaborazioni pianificate';
$string['blocking'] = 'Blocco';
$string['cannotfindthepathtothecli'] = 'Non è stato possibile trovare il percorso del CLI PHP, l\'elaborazione non è stata avviata. È possibile impostare il \'Percorso del CLI PHP\' in Amministrazione del sito / Server / Percorsi di sistema';
$string['checkadhocqueue'] = 'Coda elaborazioni ad hoc';
$string['checkcronrunning'] = 'Esecuzione del cron';
$string['checkmaxfaildelay'] = 'Ritardo massimo elaborazioni in errore';
$string['classname'] = 'Nome classe';
$string['clearfaildelay_confirm'] = 'Sei sicuro di annullare il ritardo massimo dell\'elaborazione \'{$a}\'? A seguire l\'elaborazione riprenderà la sua pianificazione.';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Core';
$string['crondisabled'] = 'Il cron è disabilitato. Non saranno avviate nuove elaborazioni pianificate e il sistema non funzionerà correttamente fin quando il cron non sarà di nuovo attivo.';
$string['cronok'] = 'Il cron gira regolarmente';
$string['default'] = 'Default';
$string['defaultx'] = 'Default: {$a}';
$string['disabled'] = 'Disabilitato';
$string['disabled_help'] = 'Le elaborazioni pianificate disabilitate che non  saranno elaborate dal cron possono essere lanciate manualmente via CLI.';
$string['edittaskschedule'] = 'Modifica elaborazione pianificata:  {$a}';
$string['enablerunnow'] = 'Abilita \'Esegui adesso\' per le elaborazioni pianificate';
$string['enablerunnow_desc'] = 'Gli amministratori potranno lanciare singole elaborazioni direttamente dall\'interfaccia senza attendere l\'elaborazione pianificata. La funzione richiede l\'impostazione del \'Percorso del CLI PHP\' nei Percorsi di sistema. Da tenere presente che l\'elaborazione girerà sul web server, quindi durante l\'elaborazione le prestazioni potrebbero degradarsi.';
$string['faildelay'] = 'Ritardo in caso di errore';
$string['fromcomponent'] = 'Dal componente: {$a}';
$string['hostname'] = 'Nome host';
$string['lastcronstart'] = 'Tempo trascorso dall\'ultima elaborazione del cron:  {$a}';
$string['lastruntime'] = 'Ultima elaborazione';
$string['lastupdated'] = 'Ultimo aggiornamento: {$a}.';
$string['nextruntime'] = 'Prossima elaborazione';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin disabilitato';
$string['pluginname'] = 'Configurazione elaborazioni pianificate';
$string['privacy:metadata'] = 'Il plugin "Elaborazioni pianificate" non memorizza dati personali.';
$string['resettasktodefaults'] = 'Ripristina la pianificazione di default';
$string['resettasktodefaults_help'] = 'La pianificazione personalizzata sarà eliminata e verrà ripristinata la pianificazione di default';
$string['runagain'] = 'Esegui di nuovo';
$string['runningtasks'] = 'Elaborazioni in corso';
$string['runnow'] = 'Esegui adesso';
$string['runnow_confirm'] = 'Sei sicuro di eseguire l\'elaborazione ‘{$a}’ adesso? L\'elaborazione sarà lanciata sul server web e richiederà del tempo per essere completata.';
$string['runpattern'] = 'Schema di esecuzione';
$string['scheduled'] = 'Pianificata';
$string['scheduledtaskchangesdisabled'] = 'La modifica delle elaborazioni pianificate è disabilitata';
$string['scheduledtasks'] = 'Elaborazioni pianificate';
$string['started'] = 'Avviata';
$string['taskdisabled'] = 'Elaborazione disabilitata';
$string['taskfailures'] = '{$a} elaborazioni in errore';
$string['tasklogs'] = 'Log delle elaborazioni';
$string['tasknofailures'] = 'Non ci sono elaborazioni in errore';
$string['taskscheduleday'] = 'Giorno';
$string['taskscheduleday_help'] = 'Il giorno del mese nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:

<strong>*</strong> Ogni giorno
<strong>*/2</strong> Ogni secondo giorno
<strong>1</strong> Il primo giorno di ogni mese
<strong>1,15</strong> Il primo ed il quindicesimo giorno di ogni mese';
$string['taskscheduledayofweek'] = 'Giorno della settimana';
$string['taskscheduledayofweek_help'] = 'Il giorno della settimana nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:

<strong>*</strong> Ogni giorno
<strong>0</strong> Ogni domenica
<strong>6</strong> Ogni sabato
<strong>1,5</strong> Ogni lunedì e venerdì';
$string['taskschedulehour'] = 'Ora';
$string['taskschedulehour_help'] = 'L\'ora alla quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:

<strong>*</strong> Ogni ora
<strong>*/2</strong> Ogni 2 ore
<strong>2-10</strong> Ogni ora dalle 2 alle 10 di mattina (incluse))
<strong>2,6,9</strong> Alle 2, alle 5 e alle 9 di mattina';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Il minuto nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:

<strong>*</strong> Ogni minuto
<strong>*/5</strong> Ogni 5 minuti
<strong>2-10</strong> Ogni minuto tra 2 e 10 (inclusi)
<strong>2,6,9</strong> Ai minuti 2 6 e 9';
$string['taskschedulemonth'] = 'Mese';
$string['taskschedulemonth_help'] = 'Il mese nel quale svolgere l\'elaborazione. Il formato da usare è lo stesso del cron Unix. Esempi:

<strong>*</strong> Ogni mese
<strong>*/2</strong> Ogni secondo mese
<strong>1</strong> Ogni anno a gennaio
<strong>1,5</strong> Ogni anno a gennaio e maggio';
$string['viewlogs'] = 'Visualizza i log di {$a}';
