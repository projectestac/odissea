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
 * Strings for component 'antivirus_clamav', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV ha incontrato problemi durante l\'elaborazione. Messaggio d\'errore: {$a}. Di seguito l\'output di Clam:';
$string['clamfailureonupload'] = 'In caso di errore di ClamAV';
$string['configclamactlikevirus'] = 'Considera infetto il file';
$string['configclamdonothing'] = 'Considera non infetto il file';
$string['configclamfailureonupload'] = 'E\' possibile definire il comportamento quando Clam è impostato per controllare i file caricati ma non fosse configurato correttamente oppure non dovesse funzionare. Selezionando "Considera infetto il file", i file saranno spostati nella cartella di quarantena o eliminati. Selezionando "Considera non infetto il file", i file saranno salvati normalmente. In entrambi i casi gli amministratori saranno avvertiti del problema incontrato da Clam. ATTENZIONE: se hai selezionato "Considera infetto il file" e Clam non dovesse funzionare (di solito perché è errato il percorso dell\'eseguibile), TUTTI i file caricati saranno spostati nella cartella di quarantena oppure eliminati.';
$string['errorcantopensocket'] = 'La connessione al domain socket Unix ha provocato un errore: {$a}';
$string['errorclamavnoresponse'] = 'ClamAV non risponde: verificare lo stato del demone.';
$string['errornounixsocketssupported'] = 'Il trasporto domain socket Unix non è supportato su questo sistema. Per favore utilizza l\'opzione Linea di comando.';
$string['invalidpathtoclam'] = 'Il percorso di ClamAV, {$a}, non è corretto.';
$string['pathtoclam'] = 'Linea di comando';
$string['pathtoclamdesc'] = 'Per il metodo di elaborazione "Linea di comando" deve essere configurato il percorso di ClamAV. Su sistemi Linux il percorso è di solito /usr/bin/clamscan oppure /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Domain socket Unix';
$string['pathtounixsocketdesc'] = 'Per il metdo di elaborazione "Domain socket Unix" deve essere configurato il percorso del socket unix di ClamAV. Su sistemi Linux Debian il percorso è /var/run/clamav/clamd.ctl. Accertarsi che il demone calamav abbia i privilegi di lettura sui file caricati: per accertarsene il metodo più semplice è quello di aggiungere l\'utente \'clamav\' al gruppo degli utenti del web server (\'www-data\' sui sistemi Linux Debian).';
$string['pluginname'] = 'Antvirus ClamAV';
$string['privacy:metadata'] = 'Il plugin "ClamAV Antivirus" non memorizza dati personali.';
$string['quarantinedir'] = 'Cartella di quarantena';
$string['runningmethod'] = 'Metodo di elaborazione';
$string['runningmethodcommandline'] = 'Linea di comando';
$string['runningmethoddesc'] = 'Il metodo di elaborazione per ClamAV. La linea di comando è il default, tuttavia sui sistemi Unix è possibile ottenere prestazioni migliori utilizzando il domain socket Unix.';
$string['runningmethodunixsocket'] = 'Domain socket Unix';
$string['unknownerror'] = 'Clam ha segnalato un errore sconosciuto.';
