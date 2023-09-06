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
 * Strings for component 'publication', language 'it', version '4.1'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Aggiungi file';
$string['allfiles'] = 'Tutti i file';
$string['allowedfiletypes'] = 'Tipi di file accettati';
$string['allowedfiletypes_err'] = 'Hai inserito estensioni di file o separatori non validi';
$string['allowedfiletypes_help'] = 'È possibile limitare i tipi di file accettati inserendo un elenco di tipi di file separati da virgola, es. \'video/mp4, audio/mp3, image/png, image/jpeg\', o estensioni di file compreso il punto, es. \'.png, .jpg\'. Lasciando il campo vuoto saranno accettati tutti i tipi di file.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'I dettagli della consegna e l’area di consegna saranno disponibili dal <strong>{$a}</strong>.';
$string['allowsubmissionsfromdate'] = 'Dal';
$string['allowsubmissionsfromdate_import'] = 'Possibilità di approvazione da';
$string['allowsubmissionsfromdate_upload'] = 'Apertura caricamento file';
$string['allowsubmissionsfromdateh'] = 'Periodo di caricamento/approvazione';
$string['allowsubmissionsfromdateh_help'] = 'Puoi definire il periodo di tempo durante il quale gli studenti possono caricare file o dare il loro consenso per la pubblicazione dei file. Durante questo periodo gli studenti possono modificare i loro file e anche ritirare il proprio consenso per la pubblicazione.';
$string['allowsubmissionsfromdatesummary'] = 'Sarà possibile consegnare dal <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Mostra sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disattivato, la descrizione della consegna sarà visibile agli studenti solo dopo la data di apertura della consegna.';
$string['approval_timeover'] = 'Non è più possibile modificare l’approvazione.';
$string['approvalchange'] = 'Stato di approvazione modificato';
$string['approved'] = 'Approvato';
$string['approveusers'] = 'Visibile a tutti';
$string['assignment'] = 'Compito';
$string['assignment_help'] = 'Scegli il compito da cui importare i file. Al momento le consegne di gruppo non sono supportate.';
$string['assignment_notfound'] = 'Il compito da cui sono stati importati i file non è più disponibile.';
$string['assignment_notset'] = 'Non è stato selezionato nessun compito.';
$string['autoimport'] = 'Sincronizza automaticamente con il compito';
$string['autoimport_help'] = 'Se abilitato, ogni volta che un nuovo file verrà caricato nel compito indicato sarà importato automaticamente in questa cartella studenti. (Facoltativo) Gli studenti devono approvare nuovamente la pubblicazione dei nuovi file.';
$string['availability'] = 'Periodo di caricamento/approvazione';
$string['choose'] = 'Seleziona…';
$string['configautoimport'] = 'Se i file consegnati dagli studenti devono essere importati automaticamente nelle istanze di cartella studenti. Questa opzione può essere gestita separatamente per ogni istanza.';
$string['configmaxbytes'] = 'Dimensione massima di default per i file nella cartella studenti';
$string['configmaxfiles'] = 'Numero massimo di default di file per utente';
$string['configobtainstudentapproval'] = 'I file saranno visibili dopo il consenso dello studente.';
$string['configobtainteacherapproval'] = 'I file degli studenti sono visibili di default a tutti gli altri partecipanti.';
$string['configrequiremodintro'] = 'Disabilita l’opzione se non vuoi obbligare gli utenti a inserire una descrizione per ogni attività.';
$string['courseuploadlimit'] = 'Limite di caricamento del corso';
$string['currentlynotapproved'] = '* Approvazione non ancora concessa né rifiutata';
$string['cutoffdate'] = 'Data limite';
$string['cutoffdate_import'] = 'Termine per l’approvazione';
$string['cutoffdate_upload'] = 'Termine per il caricamento';
$string['cutoffdatefromdatevalidation'] = 'La data limite dev’essere successiva alla data di apertura.';
$string['cutoffdatevalidation'] = 'La data limite non può precedere la data di chiusura.';
$string['details'] = 'Dettagli';
$string['downloadall'] = 'Scarica tutti i file come ZIP';
$string['duedate'] = 'Al';
$string['duedate_help'] = 'Dopo la data di chiusura, il caricamento sarà ancora possibile, ma la consegna sarà contrassegnata come in ritardo. Per impedire il caricamento dopo una certa data imposta la data limite.';
$string['duedate_import'] = 'Termine per l’approvazione';
$string['duedate_upload'] = 'Termine per il caricamento';
$string['duedatevalidation'] = 'La data di chiusura dev’essere successiva alla data di apertura.';
$string['edit_timeover'] = 'Non è più possibile modificare i file.';
$string['edit_uploads'] = 'Carica/modifica file';
$string['emailstudentsmail'] = '{$a->username} ha modificato lo stato di approvazione di \'{$a->filename}\'
all’interno di \'{$a->publication}\' in {$a->apstatus} il {$a->dayupdated} alle {$a->timeupdated}.

Puoi vederlo qui:

    {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} ha modificato lo stato di approvazione di \'{$a->filename}\'
all’interno di <i>\'{$a->publication}\'</i> in <b>{$a->apstatus}</b> il {$a->dayupdated} alle {$a->timeupdated}</i><br /><br />
È <a href="{$a->url}">disponibile sul sito</a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} ha caricato \'{$a->filename}\'
all’interno di \'{$a->publication}\' il {$a->dayupdated} alle {$a->timeupdated}.

Puoi vederlo qui:

    {$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} ha caricato \'{$a->filename}\'
all’interno di <i>\'{$a->publication}\' il {$a->dayupdated} alle {$a->timeupdated}</i><br /><br />
È <a href="{$a->url}">disponibile sul sito</a>.';
$string['entiresperpage'] = 'Numero di partecipanti per pagina';
$string['eventpublicationapprovalchanged'] = 'Consenso alla pubblicazione modificato';
$string['eventpublicationduedateextended'] = 'Data di chiusura posticipata';
$string['extensionnotafterduedate'] = 'La data di proroga dev’essere successiva alla data di chiusura';
$string['extensionnotafterfromdate'] = 'La data di proroga dev’essere successiva alla data di apertura';
$string['extensionto'] = 'Proroga al';
$string['filedetails'] = 'Dettagli';
$string['filesofthesetypes'] = 'Sono accettati i seguenti tipi di file:';
$string['go'] = 'Vai';
$string['grantextension'] = 'Concedi proroga';
$string['groupapprovalmode'] = 'Modalità approvazione di gruppo';
$string['groupapprovalmode_all'] = 'Tutti i componenti del gruppo devono approvare';
$string['groupapprovalmode_help'] = 'Scegli se è necessario che tutti i membri del gruppo approvino la pubblicazione o se è sufficiente quella di un solo componente del gruppo per rendere i file visibili a tutti.';
$string['groupapprovalmode_single'] = 'Almeno un componente deve approvare';
$string['importfrom_err'] = 'Scegli un compito da cui importare i file.';
$string['maxbytes'] = 'Dimensione massima file';
$string['maxfiles'] = 'Numero massimo di file caricabili';
$string['mode'] = 'Modalità';
$string['mode_help'] = 'Scegli se vuoi che gli studenti carichino i file o se vuoi usare un compito esistente come sorgente dei file.';
$string['modeimport'] = 'Copia i file da un compito';
$string['modeupload'] = 'Gli studenti possono caricare file';
$string['modulename'] = 'Cartella studenti';
$string['modulename_help'] = 'L’attività cartella studenti può essere configurata in due modi:
* i partecipanti possono caricare file, che saranno disponibili agli altri partecipanti immediatamente o dopo l’approvazione del docente;
* i file possono essere importati da un compito preesistente. Il docente può scegliere di rendere visibili a tutti solo alcuni file, oppure può far scegliere ai partecipanti se rendere visibili a tutti i propri file.';
$string['modulenameplural'] = 'Cartelle studenti';
$string['myfiles'] = 'I miei file';
$string['mygroupfiles'] = 'I file del mio gruppo';
$string['name'] = 'Nome cartella studenti';
$string['noentries'] = 'Nessun contenuto';
$string['nofiles'] = 'Nessun file presente';
$string['nofilestozip'] = 'Non ci sono file da comprimere';
$string['nonexistentfiletypes'] = 'I seguenti tipi di file non sono stati riconosciuti: {$a}';
$string['nopublicationsincourse'] = 'Non ci sono istanze di cartella studenti in questo corso.';
$string['nothing_to_show_groups'] = 'Niente da mostrare - Non ci sono gruppi disponibili';
$string['nothing_to_show_users'] = 'Niente da mostrare - Non ci sono studenti disponibili';
$string['nothingtodisplay'] = 'Nessun contenuto presente';
$string['notice'] = 'Attenzione:';
$string['notice_groupimportrequireallapproval'] = 'Decidi se rendere i file visibili a tutti. Tutti i componenti del gruppo devono dare la loro approvazione affinché i file siano visibili.';
$string['notice_groupimportrequireoneapproval'] = 'Decidi se rendere i file visibili a tutti. È sufficiente l’approvazione di un solo componente del gruppo per rendere visibili i file. Discutine con il tuo gruppo prima di approvare!';
$string['notice_importnoapproval'] = 'I file seguenti sono visibili a tutti.';
$string['notice_importrequireapproval'] = 'Scegli se rendere i tuoi file disponibili a tutti.';
$string['notice_uploadnoapproval'] = 'I file saranno subito visibili a tutti. Il docente può nascondere in qualsiasi momento i file pubblicati.';
$string['notice_uploadrequireapproval'] = 'I file caricati saranno visibili solo dopo l’approvazione del docente.';
$string['notifications'] = 'Notifiche';
$string['notifystudents'] = 'Invia notifiche agli studenti se lo stato di approvazione cambia';
$string['notifystudents_help'] = 'Se abilitato, gli studenti ricevono una notifica se lo stato di approvazione di uno dei loro file cambia. I metodi di notifica sono configurabili.';
$string['notifyteacher'] = 'Invia ai valutatori notifiche al caricamento dei file';
$string['notifyteacher_help'] = 'Se abilitato, i valutatori (di solito i docenti) ricevono una notifica ogni volta che uno studente carica un file. I metodi di notifica sono configurabili.';
$string['obtainstudentapproval'] = 'Chiedi approvazione agli studenti';
$string['obtainstudentapproval_help'] = 'Decidi se richiedere l’approvazione degli studenti. <br><ul><li> Sì: i file saranno visibili solo dopo l’approvazione dello studente. Il docente può selezionare singoli studenti/file per cui richiedere l’approvazione.</li><li> No: il consenso dello studente non sarà richiesto via Moodle. La visibilità del file dipende solo dalla decisione del docente.</li></ul>';
$string['obtainteacherapproval'] = 'Approvazione di default';
$string['obtainteacherapproval_help'] = 'Decidi se i file saranno immediatamente visibili dopo il caricamento: <br><ul><li> sì: i file saranno subito visibili a tutti;</li><li> no: i file saranno pubblicati solo dopo l’approvazione del docente.</li></ul>';
$string['optionalsettings'] = 'Opzioni';
$string['pending'] = 'In attesa';
$string['pluginadministration'] = 'Amministrazione cartella studenti';
$string['pluginname'] = 'Cartella studenti';
$string['privacy:path:files'] = 'file';
$string['privacy:path:resources'] = 'risorse';
$string['privacy:type:import'] = 'File importato';
$string['privacy:type:onlinetext'] = 'Testo online importato';
$string['privacy:type:upload'] = 'file caricato';
$string['publication:addinstance'] = 'Aggiungi una nuova cartella studenti';
$string['publication:approve'] = 'Scegli se i file saranno visibili a tutti gli studenti';
$string['publication:grantextension'] = 'Concedi proroga';
$string['publication:receiveteachernotification'] = 'Ricevi notifiche per docenti';
$string['publication:upload'] = 'Carica file in una cartella studenti';
$string['publication:view'] = 'Vedi cartella studenti';
$string['publicfiles'] = 'File pubblicati';
$string['published_aftercheck'] = 'No, solo dopo l’approvazione di un docente';
$string['published_immediately'] = 'Sì, immediatamente, senza l’approvazione di un docente';
$string['rejected'] = 'Rifiutato';
$string['rejectusers'] = 'Nascosto a tutti';
$string['requiremodintro'] = 'Richiedi descrizione dell’attività';
$string['reset'] = 'Ripristina';
$string['reset_userdata'] = 'Tutti i dati';
$string['resetstudentapproval'] = 'Ripristina stato';
$string['save_changes'] = 'Salva modifiche';
$string['saveapproval'] = 'Salva approvazioni';
$string['savestudentapprovalwarning'] = 'Vuoi salvare queste modifiche? Non potrai più cambiare lo stato di approvazione dopo averlo impostato.';
$string['saveteacherapproval'] = 'Salva approvazioni';
$string['search:activity'] = 'Cartella studenti - informazioni attività';
$string['show_details'] = 'Mostra dettagli';
$string['status'] = 'Stato';
$string['status:approved'] = 'Approvato';
$string['status:approvednot'] = 'Rifiutato';
$string['student_approve'] = 'Approva';
$string['student_approved'] = 'Approvato';
$string['student_pending'] = 'Non visibile (non approvato)';
$string['student_reject'] = 'Rifiuta';
$string['student_rejected'] = 'Rifiutato';
$string['studentapproval'] = 'Stato';
$string['studentapproval_help'] = 'La colonna stato rappresenta la risposta degli studenti all’approvazione:

* ? - approvazione in sospeso;
* ✓ - approvazione data;
* ✖ - approvazione rifiutata.';
$string['teacher_approved'] = 'Visibile (approvato)';
$string['teacher_pending'] = 'Conferma in sospeso';
$string['teacher_rejected'] = 'rifiutato';
$string['teacherapproval'] = 'Approvazione';
$string['teacherapproval_help'] = 'Stato di approvazione della pubblicazione del file:<br /><ul><li>Scegli…: approvazione non ancora data né rifiutata, file non visibile.</li><li>Sì: approvazione data, file visibile.</li><li>No: approvazione rifiutata, file non visibile.</li></ul>';
$string['total'] = 'Totale';
$string['updatefiles'] = 'Aggiorna file';
$string['uploaded'] = 'Caricato';
$string['visibility'] = 'Visibile a tutti';
$string['visible'] = 'Visibile';
$string['visibleforstudents'] = 'Visibile a tutti';
$string['visibleforstudents_no'] = 'Questo file non è visibile agli studenti';
$string['visibleforstudents_yes'] = 'Gli studenti possono vedere questo file';
$string['withselected'] = 'Con i selezionati…';
$string['zipusers'] = 'Scarica in formato ZIP';
