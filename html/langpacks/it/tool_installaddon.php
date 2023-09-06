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
 * Strings for component 'tool_installaddon', language 'it', version '4.1'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Accettazione';
$string['acknowledgementtext'] = 'Sono consapevole che è mia responsabilità disporre di backup completi del sito effettuati prima di installare plugin aggiuntivi. Accetto e comprendo che i plugin aggiuntivi (ivi inclusi quelli provenienti da siti non ufficiali) possono contenere problemi di sicurezza, rendere il sito non funzionante nonché provocare la perdita di dati o la diffusione di dati sensibili.';
$string['featuredisabled'] = 'L\'installazione di plugin è disabilitata';
$string['installaddon'] = 'Installa plugin';
$string['installaddons'] = 'Installazione plugin';
$string['installfromrepo'] = 'Installazione dal Moodle plugins directory';
$string['installfromrepo_help'] = 'Sarai reindirizzato sul Moodle plugins directory per cercare il plugin da installare. Per facilitare l\'installazione del plugin, verranno anche trasmessi Il nome del sito, l\'URL e la versione di Moodle utilizzata.';
$string['installfromzip'] = 'Installa plugin da file ZIP';
$string['installfromzip_help'] = 'Oltre alla installazione tramite Moodle plugins directory, è anche possibile installare manualmente plugin tramite caricamento di un pacchetto ZIP. Il pacchetto ZIP deve avere la stessa struttura dei pacchetti disponibili sul Moodle plugins directory.';
$string['installfromzipfile'] = 'Pacchetto ZIP';
$string['installfromzipfile_help'] = 'Il pacchetto ZIP del plugin deve contenere solo una cartella corrispondente al nome del plugin. Il pacchetto ZIP sarà estratto nella cartella di destinazione designata dal tipo di plugin. I pacchetti scaricati tramite Moodle plugins directory hanno questo formato.';
$string['installfromzipinvalid'] = 'Il pacchetto ZIP del plugin deve contenere solo una cartella corrispondente al nome del plugin. Il file caricato non è un pacchetto ZIP di un plugin valido.';
$string['installfromziprootdir'] = 'Rinomina cartella radice';
$string['installfromziprootdir_help'] = 'Alcuni pacchetti ZIP, come ad esempio i pacchetti generati da Github, possono contenere un nome errato per la cartella radice. Se necessario, tramite questo campo è possibile rinominare la cartella radice.';
$string['installfromzipsubmit'] = 'Installa plugin da file ZIP';
$string['installfromziptype'] = 'Tipo plugin';
$string['installfromziptype_help'] = 'l\'installer è in grado di rilevare automaticamente il tipo di plugin per quei plugin che dichiarano correttamente il proprio nome del componente. Se il rilevamento automatico dovesse fallire, è possibile selezionare il tipo di plugin a mano. Attenzione: selezionando un tipo di plugin errato l\'installazione non andrà a buon fine.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'È necessario accertarsi che la cartella radice del tipo di plugin sia scrivibile dal processo web server';
$string['permcheckerror'] = 'Si è verificato un errore durante il controllo dei permessi di scrittura';
$string['permcheckprogress'] = 'Verifica permessi di scrittura in corso...';
$string['permcheckrepeat'] = 'Controlla di nuovo';
$string['permcheckresultno'] = 'La cartella <em>{$a->path}</em> non è scrivibile';
$string['permcheckresultyes'] = 'La cartella <em>{$a->path}</em> del tipo di plugin scelto è scrivibile';
$string['pluginname'] = 'Installazione plugin';
$string['privacy:metadata'] = 'Il plugin "Installazione plugin" non memorizza dati personali.';
$string['remoterequestalreadyinstalled'] = 'È stato richiesto di installare il plugin {$a->name} ({$a->component}) versione {$a->version} dal Moodle plugins directory. Il plugin tuttavia risulta <strong>già installato</strong>.';
$string['remoterequestconfirm'] = 'È stato richiesto di installare il plugin {$a->name} ({$a->component}) versione {$a->version} dal Moodle plugins directory. Se si decide di proseguire, il pacchetto ZIP contenente il plugin verrà prima scaricato per essere verificato, senza essere installato.';
$string['remoterequestinvalid'] = 'È stato richiesto di installare un plugin dal Moodle plugins directory. Sfortunatamente la richiesta non è valida e il plugin non può essere installato';
$string['remoterequestnoninstallable'] = 'È stato richiesto di installare il plugin {$a->name} ({$a->component}) versione {$a->version} dal Moodle plugins directory. Sfortunatamente il controllo preliminare non è andato a buon fine (codice della motivazione: {$a->reason}).';
$string['remoterequestpermcheck'] = 'È stato richiesto di installare il plugin {$a->name} ({$a->component}) versione {$a->version} dal Moodle plugins directory. La cartella di destinazione <strong>{$a->typepath}</strong> del tipo di plugin <strong>non è scrivibile</strong>. È necessario dare al processo web server i permessi di scrittura sulla cartella, dopodiché sarà possibile premere il pulsante "continua" per ripetere i controlli.';
$string['remoterequestpluginfoexception'] = 'Oops... Si è verificato un errore durante la richiesta di informazioni sul plugin {$a->name} ({$a->component}) versione {$a->version}. L\'installazione del plugin non può proseguire. È possibile attivare la modalità debugging per individuare meglio la causa dell\'errore.';
$string['typedetectionfailed'] = 'Non è stato possibile individuare il tipo di plugin. Per favore scegli manualmente il tipo di plugin.';
$string['typedetectionmismatch'] = 'È stato selezionato un tipo di plugin che non corrisponde al tipo dichiarato dal plugin stesso: {$a}';
