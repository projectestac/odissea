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
 * Strings for component 'booking', language 'it', version '3.11'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompletionsuccess'] = 'Tutti gli utenti selezionati sono stati contrassegnati per il completamento dell\'attività';
$string['addcategory'] = 'Modifica categorie';
$string['addeditbooking'] = 'Modifica prenotazione';
$string['addmorebookings'] = 'Aggiungi ulteriori prenotazioni';
$string['addnewbookingoption'] = 'Aggiungi ulteriori possibilità di prenotazione';
$string['addnewcategory'] = 'Aggiungi categoria';
$string['addnewinstitution'] = 'Aggiungi un\'organizzazione';
$string['addnewtagtemplate'] = 'Aggiungi un modello di tag';
$string['address'] = 'Indirizzo';
$string['addteachers'] = 'Aggiungi docenti';
$string['addtocalendar'] = 'Aggiungi al calendario';
$string['addtogroup'] = 'Iscrivi automaticamente gli utenti nel gruppo';
$string['addtogroup_help'] = 'Iscrivi automaticamente gli utenti nel gruppo - il gruppo verrà creato automaticamente con il nome "Nome prenotazione - Nome opzione"';
$string['addusertogroup'] = 'Aggiungi utente al gruppo:';
$string['advancedoptions'] = 'Opzioni avanzate';
$string['aftercompletedtext'] = 'Dopo il completamento dell\'attività';
$string['aftercompletedtext_help'] = 'Lascia questo spazio vuoto per utilizzare il testo predefinito del sito. È possibile utilizzare uno qualsiasi dei seguenti segnaposto nel testo:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['agreetobookingpolicy'] = 'Ho letto e accetto le seguenti condizioni di prenotazione';
$string['allbookingoptions'] = 'Scarica gli utenti per tutte le opzioni di prenotazione';
$string['allchangessave'] = 'Tutte le modifiche sono state salvate.';
$string['allcomments'] = 'Tutti possono commentare';
$string['allmailssend'] = 'Tutte le e-mail per gli utenti sono state inviate!';
$string['allowdelete'] = 'Consentire agli utenti di cancellare la loro prenotazione da soli';
$string['allowupdate'] = 'Consentire che la prenotazione possa essere aggiornata';
$string['allratings'] = 'Ognuno può votare';
$string['allusersbooked'] = 'Tutti i {$a} utenti selezionati sono stati assegnati con successo a questa opzione di prenotazione.';
$string['answer'] = 'Risposta';
$string['answered'] = 'Risposto';
$string['associatedcourse'] = 'Corso associato';
$string['attachedfiles'] = 'File allegati';
$string['attachical'] = 'Allegare singolo evento ical per prenotazione';
$string['attachicaldesc'] = 'Le notifiche e-mail includeranno un evento ical allegato, se abilitato. L\'ical includerà solo un\'ora di inizio e un\'ora di fine definite nelle impostazioni dell\'opzione di prenotazione o l\'ora di inizio della prima sessione fino all\'ora di fine dell\'ultima sessione';
$string['attachicalsess'] = 'Allegare tutte le date di sessione come eventi ical';
$string['attachicalsessdesc'] = 'Le notifiche e-mail includeranno tutte le date di sessione definite per un\'opzione di prenotazione come allegato ical.';
$string['autoenrol'] = 'Iscrizione automatica degli utenti';
$string['autoenrol_help'] = 'Se selezionato, gli utenti saranno iscritti al corso pertinente non appena effettueranno la prenotazione e disiscritti da quel corso non appena la prenotazione verrà cancellata.';
$string['availability'] = 'Ancora disponibile';
$string['available'] = 'Posti disponibili';
$string['backtoresponses'] = '<< Torna alle risposte';
$string['banusernames'] = 'Username vietati';
$string['banusernames_help'] = 'Per individuare quali nomi utente non hanno il diritto di prenotare, basta scriverli in questo campo e separarli con la virgola. Per vietare i nomi utente, che finiscono con gmail.com e yahoo.com basta scrivere: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Il tuo nome utente è vietato, quindi non puoi prenotare.';
$string['beforebookedtext'] = 'Prima di aver prenotato';
$string['beforebookedtext_help'] = 'Lascia questo spazio vuoto per utilizzare il testo predefinito del sito. Puoi utilizzare uno qualsiasi dei seguenti segnaposto nel testo:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['beforecompletedtext'] = 'Dopo aver prenotato';
$string['beforecompletedtext_help'] = 'Lascia questo spazio vuoto per utilizzare il testo predefinito del sito. Puoi utilizzare uno qualsiasi dei seguenti segnaposto nel testo:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['booked'] = 'Prenotato';
$string['bookedpast'] = 'Prenotato (corso terminato)';
$string['bookedtext'] = 'Conferma della prenotazione';
$string['bookedtext_help'] = 'Lascia questo spazio vuoto per utilizzare il testo predefinito del sito. Puoi utilizzare uno qualsiasi dei seguenti segnaposto nel testo:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['bookedusers'] = 'Utenti prenotati';
$string['booking'] = 'Prenotazione';
$string['booking:addeditownoption'] = 'Aggiungere una nuova opzione e modifica le tue opzioni.';
$string['booking:addinstance'] = 'Aggiungere nuova prenotazione';
$string['booking:choose'] = 'Prenota';
$string['booking:comment'] = 'Aggiungere commenti';
$string['booking:communicate'] = 'Comunicare';
$string['booking:deleteresponses'] = 'Eliminare risposte';
$string['booking:downloadresponses'] = 'Scaricare le risposte';
$string['booking:managecomments'] = 'Gestistire i commenti';
$string['booking:rate'] = 'Valutare le possibilità di prenotazione selezionate';
$string['booking:readallinstitutionusers'] = 'Visualizzare tutti gli utenti';
$string['booking:readresponses'] = 'Leggere le risposte';
$string['booking:sendpollurl'] = 'Inviare URL del sondaggio';
$string['booking:sendpollurltoteachers'] = 'Inviare URL del sondaggio ai docenti';
$string['booking:subscribeusers'] = 'Prenotare per altri utenti';
$string['booking:updatebooking'] = 'Gestire le opzioni della prenotazione';
$string['booking:viewallratings'] = 'Visualizzare tutte le valutazioni grezze fornite dai singoli';
$string['booking:viewanyrating'] = 'Visualizzare le valutazioni totali ricevute da chiunque';
$string['booking:viewrating'] = 'Visualizzare il punteggio totale che hai ricevuto';
$string['bookingattachment'] = 'Allegato';
$string['bookingcategory'] = 'Categoria';
$string['bookingclose'] = 'Fino a';
$string['bookingdeleted'] = 'La tua prenotazione è stata cancellata';
$string['bookingduration'] = 'Durata';
$string['bookingfull'] = 'Non ci sono posti disponibili';
$string['bookingfulldidntregister'] = 'La data è completa, quindi non sono stati trasferiti tutti gli utenti!';
$string['bookingmanagererror'] = 'Il nome utente inserito non è valido. O non esiste o ci sono più utenti con questo nome utente (esempio: se hai mnet e autenticazione locale abilitata)';
$string['bookingmeanwhilefull'] = 'Nel frattempo qualcuno ha prenotato già l\'ultimo posto';
$string['bookingname'] = 'Nome prenotazione';
$string['bookingopen'] = 'Aperto';
$string['bookingoption_created'] = 'Possibilità di prenotazione creata';
$string['bookingoption_deleted'] = 'Possibilità di prenotazione cancellata';
$string['bookingoption_updated'] = 'Possibilità di prenotazione aggiornata';
$string['bookingoptionsmenu'] = 'Possibilità di prenotazione';
$string['bookingoptiontext'] = 'Il testo della possibilità di prenotazione dipende dallo stato della prenotazione';
$string['bookingorganizatorname'] = 'Nome organizzatore';
$string['bookingpoints'] = 'Punti corso';
$string['bookingpolicy'] = 'Politica di prenotazione';
$string['bookingpollurl'] = 'URL del sondaggio';
$string['bookingpollurlteachers'] = 'URL del sondaggio docenti';
$string['bookingsaved'] = 'La tua prenotazione è stata salvata con successo. Ora puoi procedere per prenotare altri corsi.';
$string['bookingtags'] = 'Etichette';
$string['bookingtext'] = 'Testo prenotazione';
$string['booknow'] = 'Prenota adesso';
$string['bookotherusers'] = 'Prenota per altri utenti';
$string['booktootherbooking'] = 'Prenota gli utenti ad altre possibilità di prenotazione';
$string['btnbooknowname'] = 'Nome del pulsante "Prenota ora"';
$string['btncacname'] = 'Nome del pulsante "Conferma completamento attività"';
$string['btncancelname'] = 'Nome del pulsante "Cancella prenotazione"';
$string['cancancelbook'] = 'Consentire all\'utente di cancellare o prenotare la propria prenotazione quando viene avviata?';
$string['cancel'] = 'Annulla';
$string['cancelbooking'] = 'Annulla prenotazione';
$string['cannotremovesubscriber'] = 'Devi rimuovere il completamento dell\'attività prima di annullare la prenotazione. La prenotazione non è stata cancellata!';
$string['categories'] = 'Categorie';
$string['category'] = 'Categoria';
$string['categoryname'] = 'Nome categoria';
$string['cfgsignin'] = 'Configurazione del foglio presenza';
$string['cfgsignin_desc'] = 'Configura le impostazioni del foglio presenza';
$string['choosecourse'] = 'Scegli un corso';
$string['choosepdftitle'] = 'Seleziona un titolo per il foglio presenze';
$string['closed'] = 'Prenotazione chiusa';
$string['comments'] = 'Commenti';
$string['completed'] = 'Completato';
$string['completedcomments'] = 'Solo con il completamento attività';
$string['completedratings'] = 'Solo con il completamento attività';
$string['completionmodule'] = 'Attività completata';
$string['completionmodule_help'] = 'Eliminare tutti gli utenti che hanno completato questa attività. Gli utenti saranno cancellati con un clic del pulsante nella pagina del report!';
$string['conectedbooking'] = 'Prenotazione collegata';
$string['conectedbooking_help'] = 'Istanza di prenotazione idonea per il trasferimento degli utenti prenotati. È possibile definire da quale possibilità di prenotazione all\'interno dell\'istanza di prenotazione selezionata e quanti utenti saranno accettati.';
$string['confirmationmessage'] = 'La tua prenotazione è stata registrata

Stato della prenotazione: {$a->status}
Partecipante:   {$a->participant}
Corso:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Per vedere tutti i tuoi corsi prenotati clicca sul seguente link: {$a->bookinglink}
Il corso associato può esssere trovsto qu: {$a->courselink}


Grazie';
$string['confirmationmessagesettings'] = 'Impostazione e-mail di conferma';
$string['confirmationmessagewaitinglist'] = 'Buongiorno  {$a->participant},

La tua prenotazione è stata registrata

Stato della prenotazione:{$a->status}
Participante: {$a->participant}
Corso:  {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Per vedere tutti i tuoi corsi prenotati clicca sul seguente link: {$a->bookinglink}

Grazie';
$string['confirmationsubject'] = 'Conferma di prenotazione di  {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nuova prenotazione per {$a->title} da parte di {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Stato prenotazione per {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Stato prenotazione per {$a->title}';
$string['confirmbookingoffollowing'] = 'Si prega di confermare la prenotazione del seguente corso';
$string['confirmdeletebookingoption'] = 'Vuoi veramente cancellare questa possibilità di prenotazione?';
$string['confirmpresence'] = 'Conferma la presenza';
$string['copyonlythisbookingurl'] = 'Copia questo URL di prenotazione';
$string['copypollurl'] = 'Copia URL sondaggio';
$string['copytoclipboard'] = 'Copia negli appunti: Ctrl+C, Enter';
$string['coursedate'] = 'Data';
$string['courseendtime'] = 'Orario di fine corso';
$string['coursestarttime'] = 'Orario di inizio corso';
$string['createdby'] = 'Modulo di prenotazione creato da edulabs.org';
$string['csvfile'] = 'File CSV';
$string['csvfile_help'] = 'Il file CSV deve contenere solo una colonna denominata Organizzazione.';
$string['customfield'] = 'Campo personalizzato da impostare nelle impostazioni della possibilità di prenotazione. Sarà quindi mostrato nella panoramica delle opzioni di prenotazione.';
$string['customfieldconfigure'] = 'Campi personalizzati possibilità di prenotazione';
$string['customfielddef'] = 'Campi personalizzati possibilità di prenotazione';
$string['customfielddesc'] = 'Dopo aver aggiunto un campo personalizzato, è possibile definire il valore per il campo nelle impostazioni della possibilità di prenotazione. Il valore verrà mostrato nella descrizione della possibilità di prenotazione.';
$string['customfieldtype'] = 'Tipo di campo';
$string['customlabels'] = 'Etichette personalizzate';
$string['dateerror'] = 'Data errata nella riga {$a}:';
$string['datenotset'] = 'Data non impostata';
$string['dateparseformat'] = 'Formato di analisi della data';
$string['dateparseformat_help'] = 'Per favore, usa il formato della data come specificato nel file CSV. Aiutati con <a href="http://php.net/manual/en/function.date.php"> questa </a> risorsa per le opzioni.';
$string['days'] = '{$a} giorni';
$string['daystonotify'] = 'Numero di giorni prima dell\'evento dal quale iniziare ad inviare promemoria ai partecipanti';
$string['daystonotify2'] = 'Secondo promemoria da notificare ai partecipanti prima dell\'evento';
$string['daystonotify_help'] = 'Funzionerà solo se sono impostati la data di inizio e di fine dell\'opzione! Impostare 0 per disabilitare questa funzionalità.';
$string['defaultbookingoption'] = 'Possibilità di prenotazione di default';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['delcustfield'] = 'Elimina questo campo e tutte le impostazioni di campo associate nelle possibilità di prenotazione';
$string['deletebooking'] = 'Vuoi veramente annullare l\'iscrizione al corso successivo? <br /> <br /> <b> {$ a} </ b>';
$string['deletebookingoption'] = 'Cancella questa possibilità di prenotazione';
$string['deletecategory'] = 'Cancella';
$string['deletedbookingmessage'] = 'Prenotazione per il seguente corso cancellato: {$a->titolo}

Utente: {$a->participant}
Titolo: {$a->title}
Data:  {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Corso: {$a->courselink}
Link di prenotazione:  {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Prenotazione cancellata: {$a->title} da {$a->participant}';
$string['deletedbookingusermessage'] = 'Buongiorno {$a->participant},

La tua prenotazione per {$a->title} ({$a->startdate} {$a->starttime}) è stata cancellata.';
$string['deletedbookingusersubject'] = 'Prenotazione per {$a->title} cancellata';
$string['deletedrule'] = 'Regola cancellata';
$string['deletedtext'] = 'Messaggio di prenotazione cancellata';
$string['deletedtext_help'] = 'Lascia questo spazio vuoto per utilizzare il testo predefinito del sito. Puoi utilizzare uno qualsiasi dei seguenti segnaposto nel testo:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['deleteresponsesactivitycompletion'] = 'Eliminare tutti gli utenti con attività completata: {$a}';
$string['deleterule'] = 'Cancellare';
$string['deletesubcategory'] = 'Per favore, prima cancella tutte le sottocategorie di questa categoria!';
$string['deleteuserfrombooking'] = 'Vuoi veramente cancellare gli utenti dalla prenotazione?';
$string['delnotification'] = 'Hai eliminato {$a->del} di {$a->all} utenti. Gli utenti che hanno completato l\'attività non possono essere cancellati!';
$string['delnotificationactivitycompletion'] = 'You deleted {$a->del} of {$a->all} users. Gli utenti che hanno completato l\'attività non possono essere cancellati!';
$string['disablebookingusers'] = 'Disattiva la prenotazione degli utenti: nascondi il pulsante Prenota ora.';
$string['donotselectcourse'] = 'Nessun corso selezionato';
$string['download'] = 'Scarica';
$string['downloadallresponses'] = 'Scaricare tutte le risposte per tutte le possibilità di prenotazione';
$string['downloadusersforthisoptionods'] = 'Scaricare gli utenti come .ods';
$string['downloadusersforthisoptionxls'] = 'Scaricare gli utenti come .xls';
$string['duplicatebooking'] = 'Duplicare questa possibilità di prenotazione';
$string['editcategory'] = 'Modifica';
$string['editingoptiondate'] = 'Stai attualmente modificando questa sessione';
$string['editinstitutions'] = 'Modifica organizzazioni';
$string['editotherbooking'] = 'Altre regole di prenotazione';
$string['editrule'] = 'Modifica';
$string['edittag'] = 'Modifica';
$string['editteachers'] = 'Modifica';
$string['editteacherslink'] = 'Modifica docenti';
$string['enablecompletion'] = 'Abilita completamento manuale attività nelle risposte alle possibilità di prenotazione';
$string['enablecompletiongroup'] = 'Completamento manuale dell\'attività';
$string['enablepresence'] = 'Abilita presenza';
$string['endtimenotset'] = 'Data di fine non impostata';
$string['enrolledcomments'] = 'Solo iscritti';
$string['enrolledinoptions'] = 'già prenotato nelle possibilità di prenotazione:';
$string['enrolledratings'] = 'Solo iscritti';
$string['entervalidurl'] = 'Per favore inserisci un URL valido.';
$string['error:failedtosendconfirmation'] = 'Il seguente utente non ha ricevuto una mail di conferma

Stato della prenotazione: {$a->status}
Partecipante:  {$a->participant}
Corso:  {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Corso associato: {$a->courselink}';
$string['errorpagination'] = 'Per favore inserisci un numero maggiore di 0';
$string['eventbooking_cancelled'] = 'Prenotazione cancellata';
$string['eventbookingoption_booked'] = 'Possibilità di prenotazione prenotata';
$string['eventduration'] = 'Durata evento';
$string['eventpoints'] = 'Punti';
$string['eventreport_viewed'] = 'Visualizzato report';
$string['eventteacher_added'] = 'Aggiunto docente';
$string['eventteacher_removed'] = 'Rimosso docente';
$string['eventtype'] = 'Tipo di evento';
$string['eventuserprofilefields_updated'] = 'Aggiornato profilo utente';
$string['excelfile'] = 'File CSV con il completamento attività';
$string['existingsubscribers'] = 'Abbonati esistenti';
$string['expired'] = 'L\'attività si è chiusa il {$a} e non è più disponibile';
$string['fields'] = 'Campi da visualizzare in diversi contesti';
$string['fillinatleastoneoption'] = 'È necessario fornire almeno due possibili risposte.';
$string['forcourse'] = 'per corso';
$string['full'] = 'Completo';
$string['fullname'] = 'Nome e cognome';
