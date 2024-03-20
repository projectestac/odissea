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
 * Strings for component 'report_performance', language 'it', version '4.1'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Backup automatico';
$string['check_backup_comment_disable'] = 'Le prestazioni possono ridursi durante lo svolgimento del backup. Il backup automatico dovrebbe essere schedulato nei periodi di minore utilizzo.';
$string['check_backup_comment_enable'] = 'Le prestazioni possono ridursi durante lo svolgimento del backup. Il backup automatico dovrebbe essere schedulato nei periodi di minore utilizzo.';
$string['check_backup_details'] = 'Il backup automatico creerà automaticamente gli archivi di tutti i corsi presenti nel sistema, avviandosi all\'orario impostato.
<p>Il processo richiede molte risorse, le prestazioni potranno ridursi durante lo svolgimento del backup</p>';
$string['check_cachejs_comment_disable'] = 'Se abilitata, la velocità di caricamento delle pagine migliora';
$string['check_cachejs_comment_enable'] = 'Se disabilitata, la velocità di caricamento delle pagine potrebbe ridursi';
$string['check_cachejs_details'] = 'Il caching e la compressione javascript migliorano notevolmente la velocità di caricamento delle pagine. Si raccomanda di abilitare l\'impostazione in tutti i siti di produzione.';
$string['check_dbschema_errors'] = 'Lo schema del database non è allineato.';
$string['check_dbschema_name'] = 'Controllo dello schema database';
$string['check_dbschema_ok'] = 'Lo schema del database è corretto.';
$string['check_debugmsg_comment_developer'] = 'Dando all\'impostazione un valore diverso da SVILUPPATORE, le prestazioni possono migliorare leggermente.';
$string['check_debugmsg_comment_nodeveloper'] = 'Con l\'impostazione valorizzata a SVILUPPATORE  le prestazioni possono ridursi leggermente.';
$string['check_debugmsg_details'] = 'A meno che il sito sia di sviluppo, è difficile che ci siano vantaggi a mantenere il livello di debug a SVILUPPATORE.<p>Qualora necessario per individuare un problema, si raccomanda fortemente di riportare il livello di debug  a NESSUNO subito dopo l\'individuazione dell\'errore. I messaggi di debug non solo riducono le prestazioni ma possono suggerire informazioni sulla configurazione del sito ad un hacker.</p>';
$string['check_enablestats_comment_disable'] = 'Le prestazioni possono ridursi durante l\'elaborazione delle statistiche. I parametri di elaborazione delle statistiche devono essere impostati con attenzione.';
$string['check_enablestats_comment_enable'] = 'Le prestazioni possono ridursi durante l\'elaborazione delle statistiche. I parametri di elaborazione delle statistiche devono essere impostati con attenzione.';
$string['check_enablestats_details'] = 'L\'elaborazione delle statistiche sono lanciate dal cron e raccolgono i dati dai log. La durata dell\'elaborazione dipende dal traffico generato nel sito e durante l\'elaborazione saranno utilizzate più risorse con possibile  riduzione delle prestazioni.';
$string['check_themedesignermode_comment_disable'] = 'Se abilitata, le immagini e i fogli di stile non saranno inserirti in carche, con un notevole degrado delle prestazioni.';
$string['check_themedesignermode_comment_enable'] = 'Se disabilitata, le immagini e i fogli di stile saranno inserirti in carche, con un notevole miglioramento delle prestazioni.';
$string['check_themedesignermode_details'] = 'È una delle più frequenti cause di rallentamenti di siti Moodle.<p>Con la modalità theme designer abilitata, in media è necessario un tempo di CPU doppio rispetto a quanto necessario quando la modalità è disabilitata.</p>';
$string['comments'] = 'Commenti';
$string['disabled'] = 'Disabilitato';
$string['edit'] = 'Modifica';
$string['enabled'] = 'Abilitato';
$string['issue'] = 'Impostazione';
$string['morehelp'] = 'aiuto ulteriore';
$string['performance:view'] = 'Visualizzare report delle prestazioni';
$string['performancereportdesc'] = 'Elenco delle impostazioni che possono influenzare le prestazioni del sito {$a}';
$string['pluginname'] = 'Prestazioni';
$string['privacy:metadata'] = 'Il plugin \'Prestazioni\' non memorizza dati personali.';
$string['value'] = 'Valore';
