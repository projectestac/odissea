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

$string['active'] = 'Attiva';
$string['activitycompletionsuccess'] = 'Tutti gli utenti selezionati sono stati contrassegnati per il completamento dell\'attività';
$string['activitycompletiontext'] = 'Messaggio da inviare all\'utente al termine dell\'opzione di prenotazione';
$string['activitycompletiontext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['activitycompletiontextmessage'] = 'Hai completato la seguente opzione di prenotazione:

{$a->bookingdetails}

Vai al corso: {$a->courselink}
Vedi tutte le opzioni di prenotazione: {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Opzione di prenotazione completata';
$string['addastemplate'] = 'Aggiungi come modello';
$string['addcategory'] = 'Modifica categorie';
$string['addcustomfield'] = 'Aggiungi campo personalizzato';
$string['addeditbooking'] = 'Modifica l\'opzione di prenotazione';
$string['addmorebookings'] = 'Aggiungi ulteriori prenotazioni';
$string['addnewbookingoption'] = 'Aggiungi una nuova opzione di prenotazione';
$string['addnewbookingoptionfromtemplate'] = 'Aggiungi una nuova opzione di prenotazione dal modello';
$string['addnewcategory'] = 'Aggiungi una nuova categoria';
$string['addnewinstitution'] = 'Aggiungi un\'organizzazione';
$string['addnewlocation'] = 'Aggiungi un nuovo luogo';
$string['addnewreporttemplate'] = 'Aggiungi un nuovo modello di report';
$string['addnewtagtemplate'] = 'Aggiungi un modello di tag';
$string['address'] = 'Indirizzo';
$string['addteachers'] = 'Aggiungi docenti';
$string['addtocalendar'] = 'Aggiungi al calendario';
$string['addtogroup'] = 'Iscrivi automaticamente gli utenti nel gruppo';
$string['addtogroup_help'] = 'Iscrivi automaticamente gli utenti nel gruppo - il gruppo verrà creato automaticamente con il nome "Nome prenotazione - Nome opzione"';
$string['addusertogroup'] = 'Aggiungi utente al gruppo:';
$string['advancedoptions'] = 'Opzioni avanzate';
$string['aftercompletedtext'] = 'Dopo il completamento dell\'attività';
$string['aftercompletedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['agreetobookingpolicy'] = 'Ho letto e accetto le seguenti condizioni di prenotazione';
$string['allbookingoptions'] = 'Scarica gli utenti per tutte le opzioni di prenotazione';
$string['allchangessave'] = 'Tutte le modifiche sono state salvate.';
$string['allcomments'] = 'Tutti possono commentare';
$string['allmailssend'] = 'Tutte le e-mail agli utenti sono state inviate!';
$string['allowdelete'] = 'Allow users to cancel their booking themselves';
$string['allowupdate'] = 'Consenti l\'aggiornamento della prenotazione';
$string['allratings'] = 'Ognuno può votare';
$string['allusersbooked'] = 'Tutti i {$a} utenti selezionati sono stati assegnati con successo a questa opzione di prenotazione.';
$string['answer'] = 'Risposta';
$string['answered'] = 'Risposto';
$string['asglobaltemplate'] = 'Use as global template';
$string['associatedcourse'] = 'Corso associato';
$string['astemplate'] = 'Usa come modello in questo corso';
$string['attachedfiles'] = 'File allegati';
$string['attachical'] = 'Allega un singolo evento iCal per prenotazione';
$string['attachicaldesc'] = 'Le notifiche e-mail includeranno un evento iCal allegato, se abilitato. L\'iCal includerà solo un\'ora di inizio e un\'ora di fine, entrambe definite
nelle impostazioni dell\'opzione di prenotazione o dall\'ora di inizio della prima sessione all\'ora di fine dell\'ultima sessione';
$string['attachicalsess'] = 'Allega tutte le date delle sessioni come eventi iCal';
$string['attachicalsessdesc'] = 'Le notifiche e-mail includeranno tutte le date delle sessioni definite per un\'opzione di prenotazione come allegato iCal.';
$string['autcrheader'] = 'Creazione automatica dell\'opzione di prenotazione';
$string['autcrwhatitis'] = 'Se questa opzione è abilitata, crea automaticamente una nuova opzione di prenotazione e le assegna un utente come gestore/insegnante di prenotazione. Gli utenti vengono selezionati in base a un valore del campo del profilo utente personalizzato.';
$string['autoenrol'] = 'Iscrizione automatica degli utenti';
$string['autoenrol_help'] = 'Se selezionati, gli utenti verranno iscritti al corso in questione non appena effettuano la prenotazione e annullati dall\'iscrizione a quel corso non appena la prenotazione viene annullata.';
$string['availability'] = 'Ancora disponibile';
$string['availabilityinfotexts_desc'] = 'Disponibile solo nella versione PRO.';
$string['availabilityinfotexts_heading'] = 'Testi informativi disponibilità per prenotazione posti e lista d\'attesa';
$string['available'] = 'Posti disponibili';
$string['availableplaces'] = 'Posti disponibili: {$a->available} of {$a->maxanswers}';
$string['backtoresponses'] = '<< Torna alle risposte';
$string['banusernames'] = 'Username vietati';
$string['banusernames_help'] = 'Per individuare quali nomi utente non hanno il diritto di prenotare, basta scriverli in questo campo e separarli con la virgola. Per vietare i nomi utente, che finiscono con gmail.com e yahoo.com basta scrivere: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Il tuo nome utente è vietato, quindi non puoi prenotare.';
$string['beforebookedtext'] = 'Prima di aver prenotato';
$string['beforebookedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['beforecompletedtext'] = 'Dopo aver prenotato';
$string['beforecompletedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['booked'] = 'Prenotato';
$string['bookedpast'] = 'Prenotato (corso terminato)';
$string['bookedtext'] = 'Conferma della prenotazione';
$string['bookedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>';
$string['bookedusers'] = 'Utenti prenotati';
$string['booking'] = 'Prenotazione';
$string['booking:addeditownoption'] = 'Aggiungere una nuova opzione e modifica le tue opzioni.';
$string['booking:addinstance'] = 'Aggiungere nuova prenotazione';
$string['booking:choose'] = 'Prenota';
$string['booking:comment'] = 'Aggiungere commenti';
$string['booking:communicate'] = 'Può comunicare';
$string['booking:deleteresponses'] = 'Elimina le risposte';
$string['booking:downloadresponses'] = 'Scaricare le risposte';
$string['booking:managecomments'] = 'Gestistire i commenti';
$string['booking:manageoptiontemplates'] = 'Gestisci modelli di opzioni';
$string['booking:rate'] = 'Valuta le opzioni di prenotazione scelte';
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
$string['bookingchangedmessage'] = 'La tua prenotazione "{$a->title}" è cambiata

Ecco le novità:
{changes}

Per visualizzare le modifiche e tutti i corsi prenotati clicca sul seguente link: {$a->bookinglink}';
$string['bookingchangedsubject'] = 'Modifica notifica per {$a->title}';
$string['bookingchangedtext'] = 'Messaggio da inviare quando cambia un\'opzione di prenotazione (verrà inviato solo agli utenti che hanno già prenotato). Usa il segnaposto {changes} per mostrare le modifiche. Immettere 0 per disattivare le notifiche di modifica.';
$string['bookingchangedtext_help'] = 'Immettere 0 per disattivare le notifiche di modifica.

Puoi utilizzare uno dei seguenti segnaposto nel testo:

<ul>
<li>{changes} - What has changed?</li>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['bookingclose'] = 'Fino a';
$string['bookingdeleted'] = 'La tua prenotazione è stata cancellata';
$string['bookingduration'] = 'Durata';
$string['bookingfull'] = 'Non ci sono posti disponibili';
$string['bookingfulldidntregister'] = 'La data è completa, quindi non sono stati trasferiti tutti gli utenti!';
$string['bookinginstancetemplatename'] = 'Booking instance template name';
$string['bookinginstancetemplatessettings'] = 'Modelli di istanze di prenotazione';
$string['bookingmanagererror'] = 'Il nome utente inserito non è valido. O non esiste o ci sono più utenti con questo nome utente (esempio: se hai mnet e autenticazione locale abilitata)';
$string['bookingmeanwhilefull'] = 'Nel frattempo qualcuno ha prenotato già l\'ultimo posto';
$string['bookingname'] = 'Nome prenotazione';
$string['bookingnotopenyet'] = 'Il tuo evento inizia tra {$a} minuti. Il link che hai utilizzato ti reindirizzerà se fai nuovamente clic su di esso entro 15 minuti prima.';
$string['bookingopen'] = 'Aperto';
$string['bookingoption_created'] = 'Possibilità di prenotazione creata';
$string['bookingoption_deleted'] = 'Possibilità di prenotazione cancellata';
$string['bookingoption_updated'] = 'Possibilità di prenotazione aggiornata';
$string['bookingoptiondate_created'] = 'Data dell\'opzione di prenotazione creata';
$string['bookingoptiondate_deleted'] = 'Data dell\'opzione di prenotazione eliminata';
$string['bookingoptiondate_updated'] = 'Data opzione prenotazione aggiornata';
$string['bookingoptionname'] = 'Nome dell\'opzione di prenotazione';
$string['bookingoptionsfromtemplatemenu'] = 'Nuova opzione di prenotazione dal modello';
$string['bookingoptionsmenu'] = 'Possibilità di prenotazione';
$string['bookingoptiontext'] = 'Il testo della possibilità di prenotazione dipende dallo stato della prenotazione';
$string['bookingoptiontitle'] = 'Titolo dell\'opzione di prenotazione';
$string['bookingorganizatorname'] = 'Nome organizzatore';
$string['bookingpassed'] = 'Il tuo evento è terminato.';
$string['bookingplacesenoughmessage'] = 'Ancora abbastanza posti disponibili per la prenotazione.';
$string['bookingplacesfullmessage'] = 'Non ci sono più posti disponibili.';
$string['bookingplacesinfotexts'] = 'Mostra i testi delle informazioni sulla disponibilità per la prenotazione dei posti';
$string['bookingplacesinfotexts_info'] = 'Mostra brevi messaggi informativi invece del numero di posti disponibili per la prenotazione.';
$string['bookingplaceslowmessage'] = 'Sono rimasti solo pochi posti di prenotazione';
$string['bookingplaceslowpercentage'] = 'Percentuale di prenotazione posti messaggio basso';
$string['bookingplaceslowpercentagedesc'] = 'Se i posti di prenotazione disponibili raggiungono o scendono al di sotto di questa percentuale, verrà mostrato un messaggio di posti di prenotazione bassi.';
$string['bookingpoints'] = 'Punti corso';
$string['bookingpolicy'] = 'Politica di prenotazione';
$string['bookingpollurl'] = 'URL del sondaggio';
$string['bookingpollurlteachers'] = 'URL del sondaggio docenti';
$string['bookingsaved'] = 'La tua prenotazione è stata salvata con successo. Ora puoi procedere per prenotare altri corsi.';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Testo della prenotazione';
$string['booknow'] = 'Prenota adesso';
$string['bookotherusers'] = 'Prenota per altri utenti';
$string['booktootherbooking'] = 'Prenota utenti ad altra prenotazione';
$string['bookuserswithoutcompletedactivity'] = 'Prenota utenti senza attività completata';
$string['bstcourse'] = 'Corso';
$string['bstcourseendtime'] = 'Tempo scaduto';
$string['bstcoursestarttime'] = 'Ora di inizio';
$string['bstinstitution'] = 'Istituzione';
$string['bstlink'] = 'Mostra';
$string['bstlocation'] = 'Luogo';
$string['bstmanageresponses'] = 'Gestisci le risposte';
$string['bstparticipants'] = 'Partecipanti';
$string['bstteacher'] = 'Insegnante(i)';
$string['bsttext'] = 'Opzioni di prenotazione';
$string['bstwaitinglist'] = 'In lista d\'attesa';
$string['btnbooknowname'] = 'Nome del pulsante "Prenota ora"';
$string['btncacname'] = 'Nome del pulsante "Conferma completamento attività"';
$string['btncancelname'] = 'Nome del pulsante "Cancella prenotazione"';
$string['btnviewavailable'] = 'Visualizza le opzioni disponibili';
$string['caladdascourseevent'] = 'Aggiungi al calendario (visibile solo ai partecipanti al corso)';
$string['caladdassiteevent'] = 'Aggiungi al calendario (visibile a tutti gli utenti)';
$string['caldonotadd'] = 'Non aggiungere al calendario';
$string['caleventtype'] = 'Visibilità degli eventi del calendario';
$string['cancancelbook'] = 'Consenti all\'utente di cancellare la prenotazione durante il periodo di prenotazione?';
$string['cancancelbookdays'] = 'Non consentire agli utenti di cancellare la loro prenotazione n giorni prima dell\'inizio';
$string['cancancelbookdaysno'] = 'Non limitare';
$string['cancel'] = 'Annulla';
$string['cancelbooking'] = 'Annulla la prenotazione';
$string['cannotremovesubscriber'] = 'Devi rimuovere il completamento dell\'attività prima di annullare la prenotazione. La prenotazione non è stata cancellata!';
$string['categories'] = 'Categorie';
$string['category'] = 'Categoria';
$string['categoryname'] = 'Nome categoria';
$string['cfgsignin'] = 'Configurazione del foglio presenza';
$string['cfgsignin_desc'] = 'Configura le impostazioni del foglio presenza';
$string['changeinfoadded'] = 'È stato aggiunto:';
$string['changeinfocfadded'] = 'È stato aggiunto un campo:';
$string['changeinfocfchanged'] = 'Un campo è cambiato:';
$string['changeinfocfdeleted'] = 'Un campo è stato cancellato:';
$string['changeinfochanged'] = 'è cambiato:';
$string['changeinfodeleted'] = 'è stato cancellato:';
$string['changeinfosessionadded'] = 'È stata aggiunta una sessione:';
$string['changeinfosessiondeleted'] = 'Una sessione è stata eliminata:';
$string['changenew'] = '[NUOVO]';
$string['changeold'] = '[ELIMINATO]';
$string['choosecourse'] = 'Scegli un corso';
$string['choosepdftitle'] = 'Seleziona un titolo per il foglio presenze';
$string['closed'] = 'Prenotazione chiusa';
$string['comments'] = 'Commenti';
$string['completed'] = 'Completato';
$string['completedcomments'] = 'Solo con il completamento attività';
$string['completedratings'] = 'Solo con il completamento attività';
$string['completionmodule'] = 'Al completamento dell\'attività del corso selezionata, abilita l\'eliminazione in blocco delle prenotazioni degli utenti';
$string['completionmodule_help'] = 'Visualizza il pulsante di eliminazione in blocco per prenotare le risposte, se è stato completato un altro modulo del corso. Le prenotazioni degli utenti verranno cancellate con un clic di un pulsante nella pagina del report! Solo le attività con completamento abilitato possono essere selezionate dall\'elenco';
$string['conectedbooking'] = 'Prenotazione collegata';
$string['conectedbooking_help'] = 'Istanza di prenotazione idonea per il trasferimento degli utenti prenotati. È possibile definire da quale possibilità di prenotazione all\'interno dell\'istanza di prenotazione selezionata e quanti utenti saranno accettati.';
$string['confirmactivtyfrom'] = 'Conferma l\'attività degli utenti da';
$string['confirmationmessage'] = 'La tua prenotazione è stata registrata

Stato della prenotazione: {$a->status}
Partecipante:   {$a->participant}
Opzione di prenotazione:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Per vedere tutti i tuoi corsi prenotati clicca sul seguente link: {$a->bookinglink}
Il corso associato può essere trovato qu: {$a->courselink}';
$string['confirmationmessagesettings'] = 'Impostazione e-mail di conferma';
$string['confirmationmessagewaitinglist'] = 'Buongiorno  {$a->participant},

La tua prenotazione è stata registrata

Stato della prenotazione:{$a->status}
Partecipante: {$a->participant}
Corso:  {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Per vedere tutti i tuoi corsi prenotati clicca sul seguente link: {$a->bookinglink}';
$string['confirmationsubject'] = 'Conferma della prenotazione di  {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nuova prenotazione per {$a->title} da parte di {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Stato della prenotazione per {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Stato della prenotazione per {$a->title}';
$string['confirmbookingoffollowing'] = 'Si prega di confermare la prenotazione del seguente corso';
$string['confirmdeletebookingoption'] = 'Vuoi veramente cancellare questa possibilità di prenotazione?';
$string['confirmoptioncompletion'] = 'Conferma (annulla) lo stato di completamento';
$string['confirmpresence'] = 'Conferma la presenza';
$string['confirmusers'] = 'Conferma l\'attività degli utenti';
$string['confirmuserswith'] = 'Conferma gli utenti che hanno completato l\'attività o hanno ricevuto il badge';
$string['copy'] = '- Copia';
$string['copyonlythisbookingurl'] = 'Copia questo URL di prenotazione';
$string['copypollurl'] = 'Copia URL sondaggio';
$string['copytoclipboard'] = 'Copia negli appunti: Ctrl+C, Enter';
$string['copytotemplate'] = 'Copia su modello';
$string['copytotemplatesucesfull'] = 'L\'opzione di prenotazione è stata copiata correttamente nel modello.';
$string['coursedate'] = 'Data';
$string['courseendtime'] = 'Orario di fine corso';
$string['coursepageshortinfo'] = 'Se vuoi prenotarti per questo corso, clicca su "Visualizza opzioni disponibili", scegli un\'opzione di prenotazione e poi clicca su "Prenota ora".';
$string['coursepageshortinfolbl'] = 'Informazioni brevi';
$string['coursepageshortinfolbl_help'] = 'Scegli un breve testo informativo da mostrare nella pagina del corso.';
$string['coursestarttime'] = 'Orario di inizio corso';
$string['courseurl'] = 'URL del corso';
$string['createdby'] = 'Modulo di prenotazione creato da Wunderbyte GmbH';
$string['csvfile'] = 'File CSV';
$string['csvfile_help'] = 'Il file CSV deve contenere solo una colonna denominata Institution.';
$string['custom_field_changed'] = 'Campo personalizzato modificato';
$string['customdownloadreport'] = 'Download del report';
$string['customfield'] = 'Campo personalizzato da impostare nelle impostazioni dell\'opzione di prenotazione. Verrà quindi mostrato nella panoramica delle opzioni di prenotazione.';
$string['customfieldconfigure'] = 'Campi delle opzioni di prenotazione personalizzate';
$string['customfielddef'] = 'Campi delle opzioni di prenotazione personalizzate';
$string['customfielddesc'] = 'Dopo aver aggiunto un campo personalizzato, puoi definire il valore per il campo nelle impostazioni dell\'opzione di prenotazione. Il valore verrà mostrato nella descrizione dell\'opzione di prenotazione';
$string['customfieldname'] = 'Nome  del campo';
$string['customfieldname_help'] = 'Puoi inserire qualsiasi nome di campo desideri. I nomi di campo speciali
                                    <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                    </ul>in combinazione con un collegamento nel campo del valore, verranno visualizzati pulsanti e collegamenti
                                    accessibili solo durante (e poco prima) le riunioni effettive.';
$string['customfieldoptions'] = 'Elenco dei possibili valori';
$string['customfieldtype'] = 'Tipo di campo';
$string['customfieldvalue'] = 'Valore';
$string['customfieldvalue_help'] = 'Puoi inserire qualsiasi valore desideri (testo, numero o HTML).<br>
                                     Se hai utilizzato uno dei nomi di campo speciali
                                     <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                    </ul> quindi inserisci il link completo alla sessione della riunione che inizia con https:// o http://';
$string['customlabels'] = 'Etichette personalizzate';
$string['customprofilefield'] = 'Campo profilo personalizzato da verificare';
$string['customprofilefieldvalue'] = 'Valore del campo del profilo personalizzato da verificare';
$string['customreporttemplate'] = 'Modello di rapporto personalizzato';
$string['customreporttemplates'] = 'Modelli di report personalizzati';
$string['dateerror'] = 'Data errata nella riga {$a}:';
$string['datenotset'] = 'Data non impostata';
$string['dateparseformat'] = 'Formato di analisi della data';
$string['dateparseformat_help'] = 'Per favore, usa il formato della data come specificato nel file CSV. Aiutati con <a href="http://php.net/manual/en/function.date.php"> questa </a> risorsa per le opzioni.';
$string['days'] = '{$a} giorni';
$string['daystonotify'] = 'Numero di giorni prima dell\'inizio dell\'evento per avvisare i partecipanti';
$string['daystonotify2'] = 'Seconda notifica prima dell\'inizio dell\'evento per avvisare i partecipanti.';
$string['daystonotify_help'] = 'Funzionerà solo se sono impostati la data di inizio e di fine dell\'opzione! Impostare 0 per disabilitare questa funzionalità.';
$string['daystonotifysession'] = 'Numero di giorni prima dell\'inizio della sessione per avvisare i partecipanti';
$string['daystonotifysession_help'] = 'Immettere 0 per disattivare la notifica e-mail per questa sessione.';
$string['daystonotifyteachers'] = 'Numero di giorni prima dell\'inizio dell\'evento per avvisare gli insegnanti (PRO)';
$string['defaultbookingoption'] = 'Possibilità di prenotazione di default';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaulttemplate'] = 'Modello predefinito';
$string['defaulttemplatedesc'] = 'Modello di opzione di prenotazione predefinito durante la creazione di una nuova opzione di prenotazione.';
$string['delcustfield'] = 'Elimina questo campo e tutte le impostazioni di campo associate nelle possibilità di prenotazione';
$string['deletebooking'] = 'Vuoi davvero cancellarti dal seguente corso? <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Elimina questa opzione di prenotazione';
$string['deletecategory'] = 'Cancella';
$string['deletecustomfield'] = 'Eliminare il campo personalizzato?';
$string['deletecustomfield_help'] = 'Attenzione: l\'impostazione di questa casella di controllo eliminerà il campo personalizzato associato durante il salvataggio.';
$string['deletedbookingmessage'] = 'L\'opzione di prenotazione è stata eliminata: {$a->titolo}

Utente: {$a->participant}
Titolo: {$a->title}
Data:  {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Corso: {$a->courselink}
Link di prenotazione:  {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Prenotazione cancellata: {$a->title} da {$a->participant}';
$string['deletedbookingusermessage'] = 'Buongiorno {$a->participant},.

La tua prenotazione per {$a->title} ({$a->startdate} {$a->starttime}) è stata cancellata.';
$string['deletedbookingusersubject'] = 'Prenotazione per {$a->title} cancellata';
$string['deletedrule'] = 'Regola cancellata';
$string['deletedtext'] = 'Messaggio di prenotazione cancellata';
$string['deletedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['deleteresponsesactivitycompletion'] = 'Eliminare tutti gli utenti con attività completata: {$a}';
$string['deleterule'] = 'Cancellare';
$string['deletesubcategory'] = 'Per favore, prima cancella tutte le sottocategorie di questa categoria!';
$string['deleteuserfrombooking'] = 'Vuoi veramente cancellare gli utenti dalla prenotazione?';
$string['delnotification'] = 'Hai eliminato {$a->del} di {$a->all} utenti. Gli utenti che hanno completato l\'attività non possono essere cancellati!';
$string['delnotificationactivitycompletion'] = 'Hai eliminato {$a->del} su {$a->all} utenti. Gli utenti che hanno completato l\'attività non possono essere eliminati.';
$string['description'] = 'Descrizione';
$string['disablebookingusers'] = 'Disattiva la prenotazione degli utenti: nascondi il pulsante Prenota ora.';
$string['donotselectcourse'] = 'Nessun corso selezionato';
$string['donotselecteventtype'] = 'Nessun tipo di evento selezionato';
$string['donotselectinstitution'] = 'Nessun organizzazione selezionata';
$string['donotselectlocation'] = 'Nessun luogo selezionato';
$string['dontuse'] = 'Non usare il modello';
$string['download'] = 'Scarica';
$string['downloadallresponses'] = 'Scaricare tutte le risposte per tutte le possibilità di prenotazione';
$string['downloadusersforthisoptionods'] = 'Scaricare gli utenti come .ods';
$string['downloadusersforthisoptionxls'] = 'Scaricare gli utenti come .xls';
$string['duplicatebooking'] = 'Duplicare questa possibilità di prenotazione';
$string['duplicatename'] = 'Questo nome dell\'opzione di prenotazione esiste già. Per favore, scegline un altro.';
$string['editcategory'] = 'Modifica';
$string['editingoptiondate'] = 'Stai attualmente modificando questa sessione';
$string['editinstitutions'] = 'Modifica organizzazioni';
$string['editotherbooking'] = 'Altre regole di prenotazione';
$string['editrule'] = 'Modifica';
$string['edittag'] = 'Modifica';
$string['editteachers'] = 'Modifica';
$string['editteacherslink'] = 'Modifica docenti';
$string['enable'] = 'Abilita';
$string['enablecompletion'] = 'Conteggio delle prenotazioni';
$string['enablecompletiongroup'] = 'Richiesta delle prenotazioni';
$string['enablepresence'] = 'Abilita presenza';
$string['endtimenotset'] = 'Data di fine non impostata';
$string['enrolledcomments'] = 'Solo iscritti';
$string['enrolledinoptions'] = 'già prenotato nelle opzioni di prenotazione:';
$string['enrolledratings'] = 'Solo iscritti';
$string['enrolmentstatus'] = 'Non iscrivere gli utenti immediatamente, ma solo all\'inizio del corso';
$string['entervalidurl'] = 'Per favore inserisci un URL valido.';
$string['error:failedtosendconfirmation'] = 'Il seguente utente non ha ricevuto una mail di conferma

Stato della prenotazione: {$a->status}
Partecipante:  {$a->participant}
Opzione prenotazione::  {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Corso associato: {$a->courselink}';
$string['erroremptycustomfieldname'] = 'Il nome del campo personalizzato non può essere vuoto.';
$string['erroremptycustomfieldvalue'] = 'Il valore del campo personalizzato non può essere vuoto.';
$string['errorpagination'] = 'Per favore inserisci un numero maggiore di 0';
$string['eventalreadyover'] = 'Questo evento è già finito.';
$string['eventbooking_cancelled'] = 'Prenotazione cancellata';
$string['eventbookingoption_booked'] = 'Opzione di prenotazione prenotata';
$string['eventbookingoption_completed'] = 'Opzione di prenotazione completata';
$string['eventduration'] = 'Durata evento';
$string['eventpoints'] = 'Punti';
$string['eventreport_viewed'] = 'Visualizzato report';
$string['eventteacher_added'] = 'Aggiunto docente';
$string['eventteacher_removed'] = 'Rimosso docente';
$string['eventtype'] = 'Tipo di evento';
$string['eventtype_help'] = 'Puoi inserire il tipo di evento manualmente o scegliere da un elenco di tipi di eventi precedenti.
                              Puoi scegliere un solo tipo di evento. Una volta salvato, il tipo di evento verrà aggiunto all\'elenco.';
$string['eventuserprofilefields_updated'] = 'Aggiornato profilo utente';
$string['excelfile'] = 'File CSV con il completamento attività';
$string['existingsubscribers'] = 'Iscritti esistenti';
$string['expired'] = 'Spiacenti, questa attività è stata chiusa il {$a} e non è più disponibile';
$string['fields'] = 'Campi da visualizzare in diversi contesti';
$string['fillinatleastoneoption'] = 'È necessario fornire almeno due possibili risposte.';
$string['forcourse'] = 'per corso';
$string['full'] = 'Completo';
$string['fullname'] = 'Nome e cognome';
$string['generatenewurl'] = 'Genera nuovo URL breve';
$string['generaterecnum'] = 'Genera numeri';
$string['generaterecnumareyousure'] = 'Questo genererà nuovi numeri ed eliminerà definitivamente quello vecchi!';
$string['generaterecnumnotification'] = 'Sono stati generati nuovi numeri.';
$string['globalactivitycompletiontext'] = 'Messaggio da inviare all\'utente al termine dell\'opzione di prenotazione (modello globale)';
$string['globalbookedtext'] = 'Conferma prenotazione (modello globale)';
$string['globalbookingchangedtext'] = 'Messaggio da inviare quando cambia un\'opzione di prenotazione (verrà inviato solo agli utenti che hanno già prenotato). Usa il segnaposto {changes} per mostrare le modifiche. Immettere 0 per disattivare le notifiche di modifica. (Modello globale)';
$string['globaldeletedtext'] = 'Messaggio di prenotazione annullata (modello globale)';
$string['globalmailtemplates'] = 'Modelli di posta globali';
$string['globalmailtemplates_desc'] = 'Disponibile solo nella versione PRO. Dopo l\'attivazione, puoi accedere alle impostazioni di un\'istanza di prenotazione e impostare l\'origine dei modelli di posta su globale.';
$string['globalnotifyemail'] = 'Notifica del partecipante prima dell\'inizio (modello globale)';
$string['globalnotifyemailteachers'] = 'Notifica all\'insegnante prima dell\'inizio (modello globale)';
$string['globalpollurlteacherstext'] = 'Messaggio per l\'URL del sondaggio inviato agli insegnanti (modello globale)';
$string['globalpollurltext'] = 'Messaggio per l\'invio dell\'URL del sondaggio agli utenti prenotati (modello globale)';
$string['globalstatuschangetext'] = 'Messaggio di modifica dello stato (modello globale)';
$string['globaluserleave'] = 'L\'utente ha cancellato la propria prenotazione (modello globale)';
$string['globalwaitingtext'] = 'Conferma lista d\'attesa (modello globale)';
$string['goenrol'] = 'Vai alla registrazione';
$string['gotobooking'] = '<< Prenotazioni';
$string['gotobookingoption'] = 'Vai all\'opzione di prenotazione';
$string['gotop'] = 'Vai in alto';
$string['groupdeleted'] = 'Questa istanza di prenotazione crea automaticamente i gruppi nel corso di destinazione. Ma il gruppo è stato eliminato manualmente nel corso di destinazione. Attiva la seguente casella di controllo per ricreare il gruppo';
$string['groupexists'] = 'Il gruppo esiste già nel corso target, scegli un altro nome per l\'opzione di prenotazione';
$string['groupname'] = 'Nome del gruppo';
$string['hidedescription'] = 'Nascondi descrizione';
$string['hidelistoncoursepage'] = 'Nascondi elenco nella pagina del corso';
$string['hours'] = '{$a} ore';
$string['howmanytimestorepeat'] = 'Quante volte ripetere?';
$string['howmanyusers'] = 'Massimo numero di utenti che un insegnante assegnato all\'opzione può prenotare';
$string['howoftentorepeat'] = 'Quante volte ripetere?';
$string['icalcancel'] = 'Includi l\'evento iCal quando la prenotazione viene annullata come evento annullato';
$string['icalcanceldesc'] = 'Quando un utente annulla una prenotazione o viene rimosso dall\'elenco degli utenti prenotati, allega un allegato iCal come evento annullato.';
$string['icalcfg'] = 'Configurazione degli allegati iCal';
$string['icalcfgdesc'] = 'Configura i file iCal.ics allegati ai messaggi di posta elettronica. Questi file consentono di aggiungere le date di prenotazione al calendario personale.';
$string['icalfieldlocation'] = 'Testo da visualizzare nella posizione del campo iCal';
$string['icalfieldlocationdesc'] = 'Scegli dall\'elenco a discesa quale testo deve essere utilizzato per la posizione del campo del calendario';
$string['import_failed'] = 'L\'importazione non è riuscita per il seguente motivo:';
$string['import_partial'] = 'L\'importazione è stata completata solo in parte. Si sono verificati problemi con le seguenti righe e non sono state importate:';
$string['importcsvbookingoption'] = 'Importa CSV con opzioni di prenotazione';
$string['importcsvtitle'] = 'Importa CSV';
$string['importexcelbutton'] = 'Completamento dell\'attività di importazione';
$string['importexceltitle'] = 'Completamento dell\'attività di importazione';
$string['importfinished'] = 'Importazione terminata!';
$string['importinfo'] = 'Informazioni sull\'importazione: puoi utilizzare le seguenti colonne nel caricamento csv (spiegazione tra parentesi)';
$string['includeteachers'] = 'Includere gli insegnanti nel foglio presenza';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>Hai già prenotato questa opzione.</i></div>';
$string['infonobookingoption'] = 'Per aggiungere un\'opzione di prenotazione, utilizza il blocco delle impostazioni o l\'icona delle impostazioni nella parte superiore della pagina';
$string['instance_not_saved_no_valid_license'] = 'Impossibile salvare l\'istanza di prenotazione come modello.
                                                   Esegui l\'upgrade alla versione PRO per salvare un numero illimitato di modelli.';
$string['instancesuccessfullysaved'] = 'Questa istanza di prenotazione è stata salvata correttamente come modello.';
$string['instancetemplate'] = 'Modello di istanza';
$string['institution'] = 'Istituzione';
$string['institution_help'] = 'Puoi inserire il nome dell\'istituto manualmente o scegliere da un elenco di istituti precedenti.
                                     Puoi scegliere un solo istituto. Una volta salvato, l\'istituto verrà aggiunto all\'elenco.';
$string['institutionname'] = 'Nome dell\'istituto';
$string['institutions'] = 'Istituzioni';
$string['lblacceptingfrom'] = 'Nome dell\'etichetta: Accetto da';
$string['lblbooking'] = 'Nome dell\'etichetta: Prenotazione';
$string['lblbooktootherbooking'] = 'Nome del pulsante: Prenota gli utenti ad un\'altra opzione di prenotazione';
$string['lblinstitution'] = 'Nome dell\'etichetta: Istituzione';
$string['lbllocation'] = 'Nome dell\'etichetta: Luogo';
$string['lblname'] = 'Nome dell\'etichetta: Nome';
$string['lblnumofusers'] = 'Nome dell\'etichetta: Numero di utenti';
$string['lblsputtname'] = 'Nome dell\'etichetta: invia l\'URL del sondaggio agli insegnanti';
$string['lblsurname'] = 'Nome dell\'etichetta: Cognome';
$string['lblteachname'] = 'Nome dell\'etichetta: Insegnanti';
$string['leftandrightdate'] = '{$a->leftdate} a {$a->righttdate}';
$string['license_activated'] = 'Versione PRO attivata con successo.<br>(Scade:';
$string['license_invalid'] = 'Chiave di licenza non valida';
$string['licensekey'] = 'Chiave di licenza PRO';
$string['licensekeycfg'] = 'Attiva la versione PRO';
$string['licensekeycfgdesc'] = 'Con una licenza PRO puoi creare tutti i modelli di prenotazione che desideri e utilizzare funzionalità PRO come modelli di posta globali, testi informativi sulla lista d\'attesa o notifiche degli insegnanti.';
$string['licensekeydesc'] = 'Carica una chiave di licenza valida per attivare la versione PRO.';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limita il numero di partecipanti';
$string['limitanswers_help'] = 'Se modifichi questa opzione e hai prenotato delle persone, puoi rimuoverle senza preavviso!';
$string['linkgotobookingoption'] = 'Vai all\'opzione prenotata: {$a}</a>';
$string['linknotavailableyet'] = 'Il link per accedere al meeting è disponibile solo 15 minuti prima dell\'inizio fino al termine della sessione.';
$string['linknotvalid'] = 'Sembra che tu non sia prenotato per questa riunione';
$string['location'] = 'Luogo';
$string['location_help'] = 'Puoi inserire il nome della posizione manualmente o scegliere da un elenco di posizioni precedenti.
                                     Puoi scegliere una sola località. Dopo aver salvato, la posizione verrà aggiunta all\'elenco.';
$string['mailconfirmationsent'] = 'Riceverai a breve una e-mail di conferma';
$string['mailtemplatesadvanced'] = 'Attiva le impostazioni avanzate per i modelli di posta elettronica';
$string['mailtemplatesglobal'] = 'Usa i modelli di posta globali dalle impostazioni del plug-in';
$string['mailtemplatesinstance'] = 'Usa modelli di posta da questa istanza di prenotazione (impostazione predefinita)';
$string['mailtemplatessource'] = 'Imposta l\'origine dei modelli di posta (PRO)';
$string['mailtemplatessource_help'] = '<b>Attenzione:</b> se scegli modelli di posta elettronica globali, la posta specifica per l\'istanza
i modelli non verranno utilizzati. Verranno invece utilizzati i modelli di posta elettronica specificati nelle impostazioni del plug-in di prenotazione. <br><br>
Assicurati che ci siano modelli di e-mail esistenti nelle impostazioni di prenotazione per ogni tipo di e-mail.';
$string['managebooking'] = 'Gestisci';
$string['managebookinginstancetemplates'] = 'Gestisci i modelli di istanza di prenotazione';
$string['managecustomreporttemplates'] = 'Gestisci modelli di report personalizzati';
$string['manageoptiontemplates'] = 'Gestisci modelli di opzioni';
$string['maxoverbooking'] = 'Massimo numero di posti in lista d\'attesa';
$string['maxparticipantsnumber'] = 'Massimo numero di partecipanti';
$string['maxperuser'] = 'Numero massimo di prenotazioni correnti per utente';
$string['maxperuser_help'] = 'Il numero massimo di prenotazioni che un singolo utente può effettuare in questa attività contemporaneamente. Dopo che l\'ora di fine di un evento è trascorsa, non viene più conteggiata in questo limite.';
$string['maxperuserwarning'] = 'Attualmente hai utilizzato {$a->count} su {$a->limit} prenotazioni massime disponibili ({$a->eventtype}) per il tuo account utente';
$string['messageprovider:bookingconfirmation'] = 'Conferme di prenotazione';
$string['messagesend'] = 'Il tuo messaggio è stato inviato.';
$string['messagesubject'] = 'Soggetto';
$string['messagetext'] = 'Messaggio';
$string['minutes'] = '{$a} minuti';
$string['modulename'] = 'Prenotazione';
$string['modulenameplural'] = 'Prenotazioni';
$string['moveoptionto'] = 'Sposta l\'opzione di prenotazione su un\'altra istanza di prenotazione';
$string['multiicalfiles'] = 'Allega un file iCal per data per la compatibilità con MS Outlook 2010';
$string['multiicalfilesdesc'] = 'Solo MS Outlook 2010 non supporta più date all\'interno di un file iCal. Le versioni precedenti e successive lo supportano (es. Outlook365). Se desideri inviare date compatibili con MS Outlook, attiva questa opzione per allegare più file iCal (uno per data/evento)';
$string['multiselect'] = 'Selezione multipla';
$string['mustchooseone'] = 'Devi scegliere un\'opzione prima di salvare. Niente è stato salvato.';
$string['mustfilloutuserinfobeforebooking'] = 'Prima di procedere con il modulo di prenotazione, si prega di compilare alcune informazioni personali di prenotazione';
$string['mybookings'] = 'Le mie prenotazioni';
$string['mybookingsbooking'] = 'Prenotazione (Corso)';
$string['mybookingsoption'] = 'Opzione';
$string['myoptions'] = 'Opzioni che gestisco';
$string['newtemplatesaved'] = 'Il nuovo modello per l\'opzione di prenotazione è stato salvato.';
$string['next'] = 'Prossimo';
$string['no'] = 'No';
$string['nobookingpossible'] = 'Nessuna prenotazione possibile.';
$string['nobookingselected'] = 'Nessuna opzione di prenotazione selezionata';
$string['nocfnameselected'] = 'Niente è stato selezionato. Digita un nuovo nome o selezionane uno dall\'elenco.';
$string['nocomments'] = 'Commento disabilitato';
$string['nocourse'] = 'Nessun corso selezionato per questa opzione di prenotazione';
$string['nodateset'] = 'Data del corso non impostata';
$string['nogrouporcohortselected'] = 'Devi selezionare almeno un gruppo o un gruppo globale.';
$string['noguestchoose'] = 'Spiacenti, gli ospiti non possono inserire dati';
$string['noratings'] = 'Valutazioni disabilitate';
$string['noresultsviewable'] = 'I risultati non sono attualmente visualizzabili.';
$string['norighttobook'] = 'La prenotazione non è possibile per il tuo ruolo utente. Si prega di contattare l\'amministratore del sito per darvi i diritti appropriati o per registrarvi/accedere.';
$string['nosubscribers'] = 'Non sono stati assegnati docenti!';
$string['notallbooked'] = 'Non è stato possibile prenotare i seguenti utenti a causa del raggiungimento del numero massimo di prenotazioni per utente o per mancanza di posti disponibili per l\'opzione di prenotazione: {$a}';
$string['notbooked'] = 'Non ancora prenotato';
$string['notconectedbooking'] = 'Non connesso';
$string['noteacherfound'] = 'L\'utente specificato come docente on line {$a} non esiste sulla piattaforma.';
$string['notemplate'] = 'Non utilizzare come modello';
$string['notes'] = 'Note di prenotazione';
$string['notificationsubject'] = 'Promemoria: hai un corso imminente';
$string['notificationtext'] = 'Messaggio di notifica';
$string['notificationtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notificationtextmessage'] = 'Il corso inizierà:

Opzione di prenotazione: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = 'Info sull\'inizio del corso!';
$string['notifyemail'] = 'Notifica al partecipante prima dell\'inizio';
$string['notifyemail_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemaildefaultmessage'] = 'La tua prenotazione inizierà a breve:

Stato della prenotazione: {$a->status}
Partecipante: {$a->participant}
Opzione di prenotazione: {$a->title}
Data: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Per visualizzare tutti i tuoi corsi prenotati clicca sul seguente link: {$a->bookinglink}
Il corso associato può essere trovato qui: {$a->courselink}';
$string['notifyemailteachers'] = 'Notifica all\'insegnante prima dell\'inizio (PRO)';
$string['notifyemailteachers_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemailteachersdefaultmessage'] = 'La tua prenotazione inizierà a breve:

{$a->bookingdetails}

Hai <b>{$a->numberparticipants} partecipanti prenotati</b> e <b>{$a->numberwaitinglist} persone in lista d\'attesa</b>.

Per visualizzare tutti i tuoi corsi prenotati clicca sul seguente link:{$a->bookinglink}
Il corso associato può essere trovato qui: {$a->courselink}';
$string['notopenyet'] = 'Spiacenti, questa attività non è disponibile fino a {$a}';
$string['notstarted'] = 'Non ancora iniziato';
$string['nouserfound'] = 'Nessun utente trovato:';
$string['nousers'] = 'Nessun utente!';
$string['numberrows'] = 'Numero di righe';
$string['numberrowsdesc'] = 'Numera ogni riga del foglio di accesso. Il numero verrà visualizzato a sinistra del nome nella stessa colonna';
$string['numgenerator'] = 'Abilitare la generazione del numero di record?';
$string['numrec'] = 'Numero di record';
$string['onlythisbookingurl'] = 'Link a questo URL di prenotazione';
$string['onwaitinglist'] = 'Sei in lista d\'attesa';
$string['option_template_not_saved_no_valid_license'] = 'Impossibile salvare il modello dell\'opzione di prenotazione come modello.
                                                   Esegui l\'upgrade alla versione PRO per salvare un numero illimitato di modelli.';
$string['optiondates'] = 'Sessione di date multiple';
$string['optiondatesmessage'] = 'Sessione {$a->number}: {$a->date} <br> Da: {$a->starttime} <br> A: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Session time was deleted.';
$string['optiondatessuccessfullysaved'] = 'Il tempo della sessione è stato salvato.';
$string['optiondatestime'] = 'Tempo di sessione';
$string['optionid'] = 'ID opzione';
$string['optionmenu'] = 'Questa opzione di prenotazione';
$string['optionsfields'] = 'Campi nella pagina di riepilogo delle opzioni di prenotazione';
$string['optiontemplate'] = 'Modello di opzione';
$string['optiontemplatename'] = 'Nome modello opzione';
$string['optiontemplatessettings'] = 'Modelli di opzioni di prenotazione';
$string['organizatorname'] = 'Nome dell\'organizzatore';
$string['organizatorname_help'] = 'Puoi inserire il nome dell\'organizzatore manualmente o scegliere da un elenco di organizzatori precedenti.
                                     Puoi scegliere un solo organizzatore. Una volta salvato, l\'organizzatore verrà aggiunto all\'elenco.';
$string['otherbookingaddrule'] = 'Aggiungi nuova regola';
$string['otherbookinglimit'] = 'Limite';
$string['otherbookinglimit_help'] = 'Quanti utenti accetti dall\'opzione. Se 0, puoi accettare utenti illimitati.';
$string['otherbookingnumber'] = 'Numero di utenti';
$string['otherbookingoptions'] = 'Accettare da';
$string['otherbookingsuccessfullysaved'] = 'Regola salvata!';
$string['paginationnum'] = 'N. di record - impaginazione';
$string['pdfdate'] = 'Data(e) di prenotazione:';
$string['pdflandscape'] = 'Orizzontale';
$string['pdflocation'] = 'Luogo:';
$string['pdfportrait'] = 'Vericale';
$string['pdfroom'] = 'Stanza:';
$string['pdfsignature'] = 'Firma';
$string['pdfstudentname'] = 'Nome dello studente';
$string['pdftodaydate'] = 'Data:';
$string['pluginadministration'] = 'Amministrazione delle prenotazioni';
$string['pluginname'] = 'Prenotazione';
$string['pollurl'] = 'URL del sondaggio';
$string['pollurl_help'] = 'Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Riepilogo dettagliato dell\'opzione di prenotazione (incl. sessioni e link all\'opzione di prenotazione)</li>
<li>{gotobookingoption} - Link all\'opzione di prenotazione</li>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - Email utente</li>
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
<li>{qr_id} - Inserisci il codice QR con l\'ID utente</li>
<li>{qr_username} -Inserisci il codice QR con il nome utente dell\'utente</li>
<li>{times} - Tempi di sessione</li>
<li>{shorturl} - URL breve dell\'opzione</li>
<li>{usercalendarurl} - Link per iscriversi al calendario utente (eventi personali)Link per iscriversi al calendario dei corsi (eventi del corso)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteachers'] = 'URL sondaggio insegnanti';
$string['pollurlteachers_help'] = 'Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{numberparticipants} - Number of participants (without waiting list)</li>
<li>{numberwaitinglist} - Number of participants on the waiting list</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteacherstext'] = 'Messaggio per l\'URL del sondaggio inviato agli insegnanti';
$string['pollurlteacherstext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Si prega di rispondere al sondaggio:
URL sondaggio: <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Si prega di rispondere al sondaggio';
$string['pollurltext'] = 'Messaggio per l\'invio dell\'URL del sondaggio agli utenti prenotati';
$string['pollurltext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurltextmessage'] = 'Si prega di rispondere al sondaggio:

URL del sondaggio: <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Si prega di rispondere al sondaggio';
$string['populatefromtemplate'] = 'Popola dal modello';
$string['potentialsubscribers'] = 'Potenziali abbonati';
$string['presence'] = 'Presenza';
$string['previous'] = 'Precedente';
$string['privacy:metadata:booking_answers'] = 'Rappresenta una prenotazione per un evento';
$string['privacy:metadata:booking_answers:bookingid'] = 'ID dell\'evento';
$string['privacy:metadata:booking_answers:notes'] = 'Note aggiuntive';
$string['privacy:metadata:booking_answers:optionid'] = 'Specifica quale versione di un evento, ad es. periodo estivo o periodo invernale';
$string['privacy:metadata:booking_answers:status'] = 'Informazioni sullo stato per questa prenotazione';
$string['privacy:metadata:booking_answers:timecreated'] = 'Indicatore orario al momento della creazione della prenotazione';
$string['privacy:metadata:booking_answers:timemodified'] = 'Indicatore orario dell\'ultima modifica della prenotazione';
$string['privacy:metadata:booking_answers:userid'] = 'Utente prenotato per questo evento';
$string['privacy:metadata:booking_answers:waitinglist'] = 'Se questo utente è in lista d\'attesa';
$string['privacy:metadata:booking_ratings'] = 'Rappresenta la tua valutazione di un evento';
$string['privacy:metadata:booking_ratings:optionid'] = 'Quale versione di un evento è stata valutata';
$string['privacy:metadata:booking_ratings:rate'] = 'Tariffa assegnata';
$string['privacy:metadata:booking_ratings:userid'] = 'Utente che ha valutato questo evento';
$string['privacy:metadata:booking_teachers'] = 'Rappresenta il docente di un evento';
$string['privacy:metadata:booking_teachers:completed'] = 'Se l\'attività è completata';
$string['privacy:metadata:booking_teachers:optionid'] = 'Quale versione di un evento viene insegnata';
$string['privacy:metadata:booking_teachers:userid'] = 'Utente che sta insegnando questo evento';
$string['problemsofcohortorgroupbooking'] = '<br><p>Non tutti gli utenti possono essere prenotati con la prenotazione di gruppo globale:</p> <ul>
<li>Gli utenti di {$a->notenrolledusers} non sono iscritti al corso</li>
<li>{$a->notsubscribedusers} utenti non hanno prenotato per altri motivi</li>
</ul>';
$string['question'] = 'Domanda';
$string['ratings'] = 'Valutazioni delle opzioni di prenotazione';
$string['ratingsuccess'] = 'Le valutazioni sono state aggiornate con successo';
$string['recreategroup'] = 'Ricrea il gruppo nel corso di destinazione e iscrivi gli utenti nel gruppo';
$string['recurringheader'] = 'Opzioni ricorrenti';
$string['removeafterminutes'] = 'Rimuovi il completamento dell\'attività dopo N minuti';
$string['removeresponses'] = 'Rimuovi tutte le risposte';
$string['removeuseronunenrol'] = 'Rimuovere l\'utente dalla prenotazione al momento della disiscrizione dal corso associato?';
$string['repeatthisbooking'] = 'Ripetere questa opzione';
$string['reportfields'] = 'Campi delle risposte scaricabili (csv, xls-Download)';
$string['reset'] = 'Ripristina';
$string['responses'] = 'Risposte';
$string['responsesfields'] = 'Campi nella pagina di gestione delle risposte';
$string['responsesto'] = 'Risposte a {$a}';
$string['resultofcohortorgroupbooking'] = '<p>Questo è il risultato della tua prenotazione di coorte:</p>
<ul>
<li>{$a->sumcohortmembers} utenti trovati nelle coorti selezionate</li>
<li>{$a->sumgroupmembers} utenti trovati nei gruppi selezionati</li>
<li><b>{$a->subscribedusers} utenti dove hanno prenotato per questa opzione</b></li>
</ul>';
$string['rootcategory'] = 'Radice';
$string['saveinstanceastemplate'] = 'Aggiungi un\'istanza di prenotazione al modello';
$string['savenewtagtemplate'] = 'Salva';
$string['scgfbookgroupscohorts'] = 'Prenota coorte/i o gruppo/i';
$string['scgfcohortheader'] = 'Iscrizione a coorte';
$string['scgfgroupheader'] = 'Iscrizione a gruppo';
$string['scgfselectcohorts'] = 'Seleziona la/e coorte';
$string['scgfselectgroups'] = 'Seleziona gruppo/i';
$string['searchdate'] = 'Data';
$string['searchname'] = 'Nome';
$string['searchsurname'] = 'Cognome';
$string['searchtag'] = 'Cerca tag';
$string['searchwaitinglist'] = 'In lista d\'attesa';
$string['select'] = 'Selezione';
$string['selectanoption'] = 'Per favore, seleziona un\'opzione di prenotazione';
$string['selectatleastoneuser'] = 'Per favore, seleziona almeno 1 utente!';
$string['selectcategory'] = 'Seleziona la categoria genitore';
$string['selectfield'] = 'Elenco a discesa';
$string['selectoptionid'] = 'Per favore, seleziona l\'opzione!';
$string['selectoptioninotherbooking'] = 'Opzione';
$string['selectpresencestatus'] = 'Scegli lo stato di presenza';
$string['sendconfirmmail'] = 'Invia e-mail di conferma';
$string['sendconfirmmailtobookingmanger'] = 'Invia e-mail di conferma al responsabile della prenotazione';
$string['sendcustommessage'] = 'Invia messaggio personalizzato';
$string['sendmailtobooker'] = 'Pagina "prenota altri utenti": invia un messaggio di posta all\'utente che prenota invece agli utenti che hanno prenotato';
$string['sendmailtobooker_help'] = 'Attiva questa opzione per inviare mail di conferma della prenotazione all\'utente che prenota altri utenti invece che agli utenti che sono stati aggiunti a un\'opzione di prenotazione. Questo è rilevante solo per le prenotazioni effettuate nella pagina "prenota altri utenti".';
$string['sendpollurltoteachers'] = 'Invia URL sondaggio';
$string['sendreminderemail'] = 'Invia e-mail di promemoria';
$string['sendreminderemailsuccess'] = 'L\'e-mail di notifica è stata inviata!';
$string['sessionremindermailmessage'] = 'Ricorda: sei prenotato per la seguente sessione:<br>
{$a->sessiondescription}<br><br>
Stato della prenotazione: {$a->status}<br>
Partecipante: {$a->participant}<br>';
$string['sessionremindermailsubject'] = 'Promemoria: hai una sessione imminente';
$string['shorturl'] = 'URL breve di questa opzione';
$string['showactive'] = 'Prenotazioni attive';
$string['showallbookings'] = 'Tutte le prenotazioni';
$string['showcoursenameandbutton'] = 'Mostra il nome del corso, le informazioni brevi e un pulsante che reindirizza alle opzioni di prenotazione disponibili';
$string['showcustomfields'] = 'Campi delle opzioni di prenotazione personalizzate';
$string['showcustomfields_desc'] = 'Seleziona i campi delle opzioni di prenotazione personalizzate da mostrare nel foglio presenza';
$string['signinlogofooter'] = 'Logo nel piè di pagina da visualizzare nel foglio di registrazione';
$string['signinlogoheader'] = 'Logo nell\'intestazione da visualizzare nel foglio di accesso';
$string['statuschangemessage'] = 'Gentile {$a->participant},

lo stato della tua prenotazione è cambiato.

Stato della prenotazione: {$a->status}

Partecipante:   {$a->participant}
Opzione della prenotazione: {$a->title}
Data: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}

Vai all\'opzione della prenotazione: {$a->gotobookingoption}';
$string['statuschangetext'] = 'Messaggio di modifica dello stato';
$string['userleavebookedmessage'] = 'Gentile {$a->participant},

sei stato cancellato da {$a->title}.';
$string['usernameofbookingmanager'] = 'Scegli un responsabile delle prenotazioni';
$string['userssuccessfullygetnewpresencestatus'] = 'Tutti gli utenti hanno un nuovo stato di presenza.';
$string['userssucesfullygetnewpresencestatus'] = 'Stato di presenza per utenti selezionati aggiornato correttamente';
$string['viewallresponses'] = 'Gestisci {$a} risposte';
$string['waitinglist'] = 'Lista d\'attesa';
$string['waitinglistenoughmessage'] = 'Ancora abbastanza posti in lista d\'attesa disponibili.';
$string['waitinglistfullmessage'] = 'Nessun posto disponibile in lista d\'attesa.';
$string['waitinglistinfotexts'] = 'Mostra i testi delle informazioni sulla disponibilità per la lista d\'attesa';
$string['waitinglistinfotexts_info'] = 'Mostra brevi messaggi informativi invece del numero di posti disponibili in lista d\'attesa.';
$string['waitinglistlowmessage'] = 'Sono rimasti solo pochi posti in lista d\'attesa.';
$string['waitinglistlowpercentage'] = 'Percentuale di messaggi in lista d\'attesa in esaurimento';
$string['waitinglistlowpercentagedesc'] = 'Se i posti disponibili in lista d\'attesa raggiungono o scendono al di sotto di questa percentuale verrà visualizzato un messaggio di lista d\'attesa in esaurimento.';
$string['waitinglisttaken'] = 'In lista d\'attesa';
$string['waitinglistusers'] = 'Utenti in lista d\'attesa';
$string['waitingplacesavailable'] = 'Posti in lista d\'attesa disponibili: {$a->overbookingavailable} of {$a->maxoverbooking}';
$string['waitingtext'] = 'Conferma lista d\'attesa';
$string['waitingtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
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
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['waitspaceavailable'] = 'Posti in lista d\'attesa disponibili';
$string['week'] = 'Settimana';
$string['whichview'] = 'Visualizzazione predefinita per le opzioni di prenotazione';
$string['whichviewerror'] = 'Devi includere la visualizzazione predefinita in: Visualizzazioni da mostrare nella panoramica delle opzioni di prenotazione';
$string['withselected'] = 'Con utenti selezionati:';
$string['wrongdataallfields'] = 'Per favore, compila tutti i campi!';
$string['yes'] = 'Sì';
$string['yourselection'] = 'Your selection';
