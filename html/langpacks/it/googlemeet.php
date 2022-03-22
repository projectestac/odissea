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
 * Strings for component 'googlemeet', language 'it', version '3.11'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkweekdays'] = 'Seleziona i giorni della settimana che cadono all\'interno dell\'intervallo di date selezionato.';
$string['clientid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-the-API-key-and-OAuth-client-ID" target="_blank">Come creare una API key ed un OAuth client ID</a>';
$string['date'] = 'Data';
$string['duration'] = 'Durata';
$string['earlierto'] = 'La data dell\'evento non può essere Antecedente della data di inizio del corso ({$a}).';
$string['emailcontent'] = 'Contenuto email';
$string['emailcontent_default'] = '<p>Gentile %userfirstname%,</p>
<p>Questo promemoria è per ricordarti che ci sarà una riunione con Google Meet in %coursename%</p>
<p><b>%googlemeetname%</b></p>
<p>Quando: %eventdate% %duration% %timezone%</p>
<p>Link di accesso: %url%</p>';
$string['emailcontent_help'] = 'Quando una notifica viene inviata al partecipante, il contenuto dell\'email sarà preso da questi campi. Possono essere usati i seguenti segnaposto.
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Entra nella stanza';
$string['eventdate'] = 'Data dell\'evento';
$string['from'] = 'Da';
$string['generateurlroom'] = 'Genera un URL per la stanza';
$string['googlemeet:addinstance'] = 'Aggiungi una stanza Google Meet™ for Moodle';
$string['googlemeet:editrecording'] = 'Edita le registrazioni';
$string['googlemeet:removerecording'] = 'Rimuovi le registrazioni';
$string['googlemeet:syncgoogledrive'] = 'Sincronizza con Google Drive';
$string['googlemeet:view'] = 'Guarda il contenuto di Google Meet™ for Moodle';
$string['hide'] = 'Nascondi';
$string['invalideventenddate'] = 'Questa data non può essere precedente alla data dell\'evento';
$string['invalideventendtime'] = 'L\'ora di fine deve essere successiva a quella di inizio';
$string['invalidstoredurl'] = 'Non è possibile visualizzare questa risorsa. l\'URL di Google Meet non è valido.';
$string['jstableinfo'] = 'Mostra da {start} a {end} di {rows} registrazioni';
$string['jstableinfofiltered'] = 'Mostra da {start} a {end} di {rows} registrazioni (filtrate di {rowsTotal} registrazioni)';
$string['jstableloading'] = 'Caricamento...';
$string['jstablenorows'] = 'Nessuna registrazione trovata';
$string['jstableperpage'] = '{select} registrazioni per pagina';
$string['jstablesearch'] = 'Ricerca...';
$string['lastsync'] = 'Ultima sincronizzazione:';
$string['loading'] = 'Caricamento';
$string['messageprovider:notification'] = 'Promemoria per inizio dell\'evento Google Meet';
$string['minutesbefore'] = 'Minuti prima';
$string['minutesbefore_help'] = 'Numero di minuti prima dell\'inizio dell\'evento per l\'invio della notifica';
$string['modulename'] = 'Google Meet™ per Moodle';
$string['multieventdateexpanded'] = 'Ricorrenza della data dell\'evento estesa';
$string['name'] = 'Nome';
$string['never'] = 'Mai';
$string['notfoundrecordingname'] = 'Nessuna registrazione con questo nome';
$string['notification'] = 'Notifiche';
$string['notificationexpanded'] = 'Notifiche estese';
$string['notify'] = 'Invia una notifica allo studente';
$string['notify_help'] = 'Se selezionata, una notifica sulla data di inizio dell\'evento verrà inviata ai partecipanti';
