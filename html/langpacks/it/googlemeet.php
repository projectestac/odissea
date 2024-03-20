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
 * Strings for component 'googlemeet', language 'it', version '4.1'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['at'] = 'alle';
$string['calendareventname'] = '{$a} è pianificato per';
$string['checkweekdays'] = 'Seleziona i giorni della settimana che cadono all\'interno dell\'intervallo di date selezionato.';
$string['creatoremail'] = 'Email dell\'organizzatore';
$string['creatoremail_error'] = 'Inserire un indirizzo email valido';
$string['creatoremail_help'] = 'Email dell\'organizzatore dell\'evento';
$string['date'] = 'Data';
$string['duration'] = 'Durata';
$string['earlierto'] = 'La data dell\'evento non può essere antecedente alla data di inizio del corso ({$a}).';
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
$string['eventdetails'] = 'Dettagli dell\'evento';
$string['from'] = 'Da';
$string['googlemeet:addinstance'] = 'Aggiungi una stanza Google Meet™ for Moodle';
$string['googlemeet:editrecording'] = 'Edita le registrazioni';
$string['googlemeet:removerecording'] = 'Rimuovi le registrazioni';
$string['googlemeet:syncgoogledrive'] = 'Sincronizza con Google Drive';
$string['googlemeet:view'] = 'Guarda il contenuto di Google Meet™ for Moodle';
$string['hide'] = 'Nascondi';
$string['invalideventenddate'] = 'Questa data non può essere precedente alla data dell\'evento';
$string['invalideventendtime'] = 'L\'ora di fine deve essere successiva a quella di inizio';
$string['invalidissuerid'] = 'Il servizio OAuth selezionato nelle impostazioni di "Google Meet™ for Moodle" non è supportato da Google';
$string['invalidstoredurl'] = 'Non è possibile visualizzare questa risorsa. l\'URL di Google Meet non è valido.';
$string['isnotcreatoremail'] = 'Accedi con l\'account dell\'organizzatore o modifica l\'email dell\'organizzatore nelle impostazioni per sincronizzare le registrazioni.';
$string['issuerid'] = 'Servizio OAuth';
$string['issuerid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-Client-ID-and-Client-Secret" target="_blank">Come configurare un servizio OAuth</a>';
$string['jstableinfo'] = 'Mostra da {start} a {end} di {rows} registrazioni';
$string['jstableinfofiltered'] = 'Mostra da {start} a {end} di {rows} registrazioni (filtrate di {rowsTotal} registrazioni)';
$string['jstableloading'] = 'Caricamento...';
$string['jstablenorows'] = 'Nessuna registrazione trovata';
$string['jstableperpage'] = '{select} registrazioni per pagina';
$string['jstablesearch'] = 'Ricerca...';
$string['lastsync'] = 'Ultima sincronizzazione:';
$string['loading'] = 'Caricamento';
$string['loggedinaccount'] = 'Account Google in uso';
$string['logintoaccount'] = 'Accedi al tuo account Google';
$string['logintoyourgoogleaccount'] = 'Accedi al tuo account Google in modo che l\'URL del Google Meet possa essere creato automaticamente';
$string['logout'] = 'Logout';
$string['manage'] = 'Gestione';
$string['messageprovider:notification'] = 'Promemoria per inizio dell\'evento Google Meet';
$string['minutesbefore'] = 'Minuti prima';
$string['minutesbefore_help'] = 'Numero di minuti prima dell\'inizio dell\'evento per l\'invio della notifica';
$string['modulename'] = 'Google Meet™ per Moodle';
$string['modulename_help'] = 'Il modulo Google Meet™ for Moodle consente al docente di creare una stanza di Google Meet come risorsa del corso e, a seguito della videoconferenza, di rendere disponibili agli studenti le registrazioni salvate in Google Drive.
<p>©2018 Google LLC All rights reserved.<br/>
Google Meet and the Google Meet logo are registered trademarks of Google LLC.</p>';
$string['modulenameplural'] = 'Istanze di Google Meet™ for Moodle';
$string['multieventdateexpanded'] = 'Ricorrenza della data dell\'evento estesa';
$string['multieventdateexpanded_desc'] = 'Visualizza le impostazioni "Ricorrenza della data dell\'evento" in modalità estesa come impostazione predefinita durante la creazione di una nuova Stanza.';
$string['name'] = 'Nome';
$string['never'] = 'Mai';
$string['notification'] = 'Notifiche';
$string['notificationexpanded'] = 'Notifiche estese';
$string['notify'] = 'Invia una notifica allo studente';
$string['notify_help'] = 'Se selezionata, una notifica sulla data di inizio dell\'evento verrà inviata ai partecipanti';
$string['notifycationexpanded_desc'] = 'Visualizza le impostazioni "Notifiche" in modalità estesa come impostazione predefinita durante la creazione di una nuova Stanza.';
$string['notifytask'] = 'Attività di notifica Google Meet™ for Moodle';
$string['or'] = 'o';
$string['pluginadministration'] = 'Amministrazione di Google Meet™ for Moodle';
$string['pluginname'] = 'Google Meet™ per Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Registrazione delle notifiche spedite agli utenti sull\'inizio degli eventi. Questi dati sono temporanei e vengono eliminati dopo la data di inizio dell\'evento.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'ID dell\'evento';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Il timestamp che indica quando l\'utente ha ricevuto una notifica';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'Lo user ID';
$string['recording'] = 'Registrazione';
$string['recordings'] = 'Registrazioni';
$string['recordingswiththename'] = 'Registrazioni con nome';
$string['recurrenceeventdate'] = 'Ricorrenza';
$string['recurrenceeventdate_help'] = 'La funzionalità permette la creazione di occorrenza multiple della data dell\'evento.
<br>* <strong>Ripeti il</strong>: Seleziona i giorni della settimana nei quali si terrà la videoconferenza (per esempio, Lunedì / Mercoledì / Venerdì).
<br>* <strong>Ripeti ogni</strong>: Con questa opzione imposta la frequenza. Se la videoconferenza si tiene ogni settimana, seleziona 1; per una videoconferenza ogni due settimane, seleziona 2; ogni 3 settimane, selezione 3, ecc.
<br>* <strong>Ripeti fino a</strong>: Indica l\'ultimo giorno della videoconferenza (il giorno finale che vuoi indicare come ultima data della ricorrenza dell\'evento).';
$string['repeatasfollows'] = 'Ripeti la data dell\'evento indicato come segue';
$string['repeatevery'] = 'Ripeti ogni';
$string['repeaton'] = 'Ripeti il';
$string['repeatuntil'] = 'Ripeti fino a';
$string['roomcreator'] = 'Organizzatore:';
$string['roomname'] = 'Nome della stanza';
$string['roomurl'] = 'Url della stanza';
$string['roomurl_caution'] = '<strong>Attenzione!</strong> Se l\'URL della stanza o la email dell\'organizzatore vengono modificate, le registrazioni sincronizzate potrebbero essere rimosse nella prossima sincronizzazione.';
$string['roomurl_desc'] = 'L\'URL della stanza verrà generato automaticamente';
$string['roomurlexpanded'] = 'Url della stanza esteso';
$string['roomurlexpanded_desc'] = 'Visualizza le impostazioni "Url della stanza" in modalità estesa come impostazione predefinita durante la creazione di una nuova Stanza.';
$string['servicenotenabled'] = 'Accesso non configurato. Assicurato che i servizi \'Google Drive API\' e \'Google Calendar API\' siano abilitati.';
$string['sessionexpired'] = 'Il sessione del tuo account Google è scaduta durante l\'elaborazione, per favore autenticati di nuovo.';
$string['show'] = 'Visualizza';
$string['sync_info'] = 'Aspettare almeno 10 minuti affinché il file della registrazione venga generato e salvato nella cartella "Il mio Drive > Meet Recordings" dell\'organizzatore.
<p></p>
Per rimuovere una registrazione dapprima cancella il file da Google Drive e successivamente utilizza il pulsante di sincronizzazione qui sopra.
<p></p>
Per registrare una videoconferenza assicurati di:
<ul>
    <li>non aver superato la tua personale quota di spazio disponibile in Drive,</li>
    <li>la tua organizzazione non ha superato la sua quota di spazio disponibile in Drive.</li>
</ul>
Se hai spazio nel tuo Drive, ma la tua organizzazione non ha più spazio, non puoi registrare la videoconferenza.
<p></p>
Per maggiori informazioni puoi leggere questo articolo del Help Center:
<br>
<a href="https://notifications.google.com/g/p/APNL1TjJltVk6EcLPyFTJ8V_9ty1FeTAD0XSSJVLiaWPezIaQKfIPd1kGURFUMVV3I5yHgVZoOgxkl4gySV-4SCf2pZ27Vk8Iy9DnHSQBqtK51uG3Gyz" target="_blank" rel="nofollow noopener">https://support.google.com/meet/answer/9308681</a>';
$string['sync_notloggedin'] = 'Accedi al tuo account Google per sincronizzare le registrazioni di Google Meet con Moodle';
$string['syncwithgoogledrive'] = 'Sincronizza con Google Drive';
$string['thereisnorecordingtoshow'] = 'Non sono presenti registrazioni da visualizzare';
$string['timeahead'] = 'Non è possibile creare ricorrenze multiple di eventi con date che vanno oltre un anno, aggiustare le date di inizio e di fine';
$string['to'] = 'a';
$string['today'] = 'Oggi';
$string['upcomingevents'] = 'Prossimi eventi';
$string['url_failed'] = 'È necessario un URL valido di Google Meet';
$string['url_help'] = 'Es. https://meet.google.com/aaa-aaaa-aaa';
$string['visible'] = 'Visibile';
$string['week'] = 'Settimana/e';
