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
 * Strings for component 'booking', language 'it', version '4.5'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutmodaloptiondateform'] = 'Crea date personalizzate
(ad es. per eventi bloccati o per singole date diverse dalla serie di date)';
$string['accept'] = 'Accetta';
$string['accessdenied'] = 'Accesso negato';
$string['actionoperator'] = 'Azione';
$string['actionoperator:adddate'] = 'Aggiungi data';
$string['actionoperator:set'] = 'Sostituire';
$string['actionoperator:subtract'] = 'Sottrarre';
$string['actions'] = 'Azioni';
$string['activatemails'] = 'Attiva email (conferme, notifiche e altro)';
$string['active'] = 'Attiva';
$string['activebookingoptions'] = 'Opzioni di prenotazione attive';
$string['activitycompletionsuccess'] = 'Tutti gli utenti selezionati sono stati contrassegnati per il completamento dell\'attività';
$string['activitycompletiontext'] = 'Messaggio da inviare all\'utente al termine dell\'opzione di prenotazione';
$string['activitycompletiontextmessage'] = 'Hai completato la seguente opzione di prenotazione:
{$a->bookingdetails}
Vai al corso: {$a->courselink}
Vedi tutte le opzioni di prenotazione: {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Opzione di prenotazione completata';
$string['addastemplate'] = 'Aggiungi come modello';
$string['addbookingcampaign'] = 'Aggiungi campagna';
$string['addbookingrule'] = 'Aggiungi regola';
$string['addcategory'] = 'Modifica categorie';
$string['addcomment'] = 'Aggiungi un commento...';
$string['addcustomfieldorcomment'] = 'Aggiungere un commento o un campo personalizzato';
$string['adddatebutton'] = 'Aggiungi data';
$string['addedrecords'] = '{$a} record aggiunti';
$string['addholiday'] = 'Aggiungi festività';
$string['additionalpricecategories'] = 'Aggiungi o modifica le categorie di prezzo';
$string['addmorebookings'] = 'Aggiungi ulteriori prenotazioni';
$string['addnewcategory'] = 'Aggiungi una nuova categoria';
$string['addnewreporttemplate'] = 'Aggiungi un nuovo modello di report';
$string['addnewtagtemplate'] = 'Aggiungi un modello di tag';
$string['addoptiondate'] = 'Aggiungi data';
$string['addoptiondateseries'] = 'Creare serie di date';
$string['addpricecategory'] = 'Aggiungi categoria di prezzo';
$string['addpricecategoryinfo'] = 'È possibile aggiungere un\'altra categoria di prezzo';
$string['address'] = 'Indirizzo';
$string['addsemester'] = 'Aggiungi semestre';
$string['addtocalendar'] = 'Aggiungi al calendario del corso';
$string['addtocalendardesc'] = 'Gli eventi del calendario del corso sono visibili a TUTTI gli utenti all\'interno di un corso. Se non vuoi che vengano creati affatto,
puoi disattivare questa impostazione e bloccarla per impostazione predefinita. Non preoccuparti: gli eventi del calendario utente per le opzioni prenotate verranno comunque creati.';
$string['addtogroup'] = 'Iscrivi automaticamente gli utenti nel gruppo';
$string['addtogroup_help'] = 'Iscrizione automatica degli utenti al gruppo collegato alle impostazioni dell\'opzione di prenotazione. Il gruppo verrà creato automaticamente con il nome: Nome prenotazione - Nome opzione';
$string['addusertogroup'] = 'Aggiungi utente al gruppo:';
$string['adminparameter_desc'] = 'Utilizzare i parametri impostati nelle impostazioni dell\'amministratore.';
$string['adminparametervalue'] = 'Parametro amministratore';
$string['advancedoptions'] = 'Opzioni avanzate';
$string['aftercompletedtext'] = 'Dopo il completamento dell\'attività';
$string['aftercompletedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Riepilogo dettagliato dell\'opzione di prenotazione (incl. sessioni e link all\'opzione di prenotazione)</li>
<li>{gotobookingoption} - Link per l\'opzione di prenotazione</li>
<li>{status} - Stato della prenotazione</li>
<li>{participant}</li>
<li>{email} - Emai dell\'utente</li>
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
<li>{teacher} - Nome del primo insegnante</li>
<li>{teacher} - Lista di tutti gli insegnanti </li>
<li>{teacherN} - Nome dello specifico insegnante, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Inserisci il codice QR con l\'ID utente</li>
<li>{qr_username} - Inserisci il codice QR con l\'ID utente</li>
<li>{dates} - Orari delle sessioni</li>
<li>{shorturl} - URL abbreviato dell\'opzione di prenotazione</li>
<li>{usercalendarurl} - Link per iscriversi al calendario utente (eventi personali)</li>
<li>{coursecalendarurl} - Link per iscriversi al calendario dei corsi (eventi del corso)</li>
</ul>';
$string['aftersubmitaction'] = 'Dopo aver salvato...';
$string['age'] = 'Età';
$string['alertrecalculate'] = '<b>Attenzione!</b> Tutti i prezzi verranno ricalcolati e tutti i vecchi prezzi verranno sovrascritti.';
$string['allbookingoptions'] = 'Tutte le opzioni di prenotazione';
$string['allchangessaved'] = 'Tutte le modifiche sono state salvate.';
$string['allcohortsmustbefound'] = 'L\'utente deve essere membro di tutte le coorti';
$string['allcomments'] = 'Tutti possono commentare';
$string['allcoursesmustbefound'] = 'L\'utente deve essere iscritto a tutti i corsi';
$string['allmailssend'] = 'Tutte le e-mail agli utenti sono state inviate!';
$string['allmoodleusers'] = 'Tutti gli utenti di questo sito';
$string['alloptionsinreport'] = 'Un rapporto per un\'attività di prenotazione <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['alloptionsinreportdesc'] = 'Il report di un\'opzione di prenotazione includerà tutte le prenotazioni di tutte le opzioni di prenotazione all\'interno di questa istanza.';
$string['allowbookingafterstart'] = 'Consentire la prenotazione dopo l\'inizio del corso';
$string['allowoverbooking'] = 'Consentire l\'overbooking';
$string['allowoverbookingheader'] = 'Overbooking delle opzioni di prenotazione <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['allowoverbookingheader_desc'] = 'Consentire agli amministratori e agli utenti autorizzati di prenotare in eccesso le opzioni di prenotazione.
  (Attenzione: Questo può portare a comportamenti inaspettati. Attivate questa opzione solo se ne avete veramente bisogno)';
$string['allowupdate'] = 'Consenti l\'aggiornamento della prenotazione';
$string['allowupdatedays'] = 'Giorni prima della data di riferimento';
$string['allratings'] = 'Ognuno può votare';
$string['allteachers'] = 'Tutti gli insegnanti';
$string['allusersbooked'] = 'Tutti i {$a} utenti selezionati sono stati assegnati con successo a questa opzione di prenotazione.';
$string['alreadybooked'] = 'Già prenotato';
$string['alreadyonlist'] = 'Riceverai una notifica';
$string['alreadypassed'] = 'Gia passato';
$string['always'] = 'Sempre';
$string['andotherfield'] = 'AND campo aggiuntivo';
$string['annotation'] = 'Annotazione interna';
$string['answer'] = 'Risposta';
$string['answered'] = 'Risposto';
$string['answerscount'] = 'Numero di prenotazioni';
$string['appearancesettings'] = 'Aspetto <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['appearancesettings_desc'] = 'Configurare l\'aspetto del plugin di prenotazione.';
$string['apply'] = 'Applicare';
$string['applybookingrules'] = 'Applicare le regole di prenotazione';
$string['applyunitfactor'] = 'Applicare il fattore unitario';
$string['applyunitfactor_desc'] = 'Se questa impostazione è attiva, per calcolare il numero di unità didattiche verrà utilizzata la durata dell\'unità didattica (ad esempio 45 minuti) impostata in precedenza
 per calcolare il numero di unità didattiche. Questo numero verrà utilizzato come fattore per la formula del prezzo.
 Esempio: Un\'opzione di prenotazione ha una serie di date come “Lun, 15:00 - 16:30”. La durata è di 2 unità didattiche (45 minuti ciascuna).
 Quindi alla formula del prezzo verrà applicato un fattore di unità pari a 2. (Il fattore unità sarà applicato solo se è presente una formula di prezzo).';
$string['areyousure:book'] = 'Fare nuovamente clic per confermare la prenotazione';
$string['areyousure:cancel'] = 'Fare nuovamente clic per confermare la cancellazione';
$string['asglobaltemplate'] = 'Use as global template';
$string['assesstimefinish'] = 'Fine del periodo di valutazione';
$string['assesstimestart'] = 'Inizio del periodo di valutazione';
$string['assignteachers'] = 'Assegnare i docenti:';
$string['associatedcourse'] = 'Corso associato';
$string['astemplate'] = 'Usa come modello in questo corso';
$string['attachedfiles'] = 'File allegati';
$string['attachicalfile'] = 'Allegare il file iCal';
$string['attachicalfile_desc'] = 'Allegare alle e-mail i file iCal contenenti le date dell\'opzione di prenotazione.';
$string['attachment'] = 'Allegati';
$string['autcrheader'] = '[DEPRECATO] Creazione automatica di opzioni di prenotazione';
$string['autcrwhatitis'] = 'Se questa opzione è attivata, viene creata automaticamente una nuova opzione di prenotazione e viene assegnato un utente come responsabile della prenotazione/insegnante. Gli utenti vengono selezionati in base al valore di un campo del profilo utente personalizzato.';
$string['autoenrol'] = 'Iscrizione automatica degli utenti';
$string['autoenrol_help'] = 'Se selezionati, gli utenti verranno iscritti al corso in questione non appena effettuano la prenotazione e annullati dall\'iscrizione a quel corso non appena la prenotazione viene annullata.';
$string['automaticcoursecreation'] = 'Creazione automatica di corsi Moodle <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['availability'] = 'Disponibilità';
$string['availabilityconditions'] = 'Condizioni di disponibilità';
$string['availabilityconditionsheader'] = '<i class="fa fa-fw fa-key" aria-hidden="true"></i>&nbsp;Condizioni di disponibilità';
$string['availabilityinfotextsheading'] = 'Testi informativi sulla disponibilità per la prenotazione dei posti e la lista d\'attesa <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['available'] = 'Posti disponibili';
$string['availableplaces'] = 'Posti disponibili: {$a->available} of {$a->maxanswers}';
$string['availplacesfull'] = 'Completo';
$string['back'] = 'Indietro';
$string['backtoresponses'] = '&lt;&lt; Torna alle risposte';
$string['badge:exp'] = '<span class="badge bg-danger text-light"><i class="fa fa-flask" aria-hidden="true"></i> Sperimentale</span>';
$string['banusernames'] = 'Username vietati';
$string['banusernames_help'] = 'Per individuare quali nomi utente non hanno il diritto di prenotare, basta scriverli in questo campo e separarli con la virgola. Per vietare i nomi utente, che finiscono con gmail.com e yahoo.com basta scrivere: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Il tuo nome utente è vietato, quindi non puoi prenotare.';
$string['beforebookedtext'] = 'Prima di aver prenotato';
$string['beforebookedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Riepilogo dettagliato dell\'opzione di prenotazione (incl. sessioni e link all\'opzione di prenotazione)</li>
<li>{gotobookingoption} - Link per l\'opzione di prenotazione</li>
<li>{status} - Stato della prenotazione</li>
<li>{participant}</li>
<li>{email} - Emai dell\'utente</li>
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
<li>{teacher} - Nome del primo insegnante</li>
<li>{teacher} - Lista di tutti gli insegnanti </li>
<li>{teacherN} - Nome dello specifico insegnante, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Inserisci il codice QR con l\'ID utente</li>
<li>{qr_username} - Inserisci il codice QR con l\'ID utente</li>
<li>{dates} - Orari delle sessioni</li>
<li>{shorturl} - URL abbreviato dell\'opzione di prenotazione</li>
<li>{usercalendarurl} - Link per iscriversi al calendario utente (eventi personali)</li>
<li>{coursecalendarurl} - Link per iscriversi al calendario dei corsi (eventi del corso)</li>
</ul>';
$string['beforecompletedtext'] = 'Dopo aver prenotato';
$string['beforecompletedtext_help'] = 'Lascia vuoto questo campo per utilizzare il testo predefinito del sito. Puoi utilizzare uno dei seguenti segnaposto nel testo:
<ul>
<li>{bookingdetails} - Riepilogo dettagliato dell\'opzione di prenotazione (incl. sessioni e link all\'opzione di prenotazione)</li>
<li>{gotobookingoption} - Link per l\'opzione di prenotazione</li>
<li>{status} - Stato della prenotazione</li>
<li>{participant}</li>
<li>{email} - Emai dell\'utente</li>
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
<li>{teacher} - Nome del primo insegnante</li>
<li>{teacher} - Lista di tutti gli insegnanti </li>
<li>{teacherN} - Nome dello specifico insegnante, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Inserisci il codice QR con l\'ID utente</li>
<li>{qr_username} - Inserisci il codice QR con l\'ID utente</li>
<li>{dates} - Orari delle sessioni</li>
<li>{shorturl} - URL abbreviato dell\'opzione di prenotazione</li>
<li>{usercalendarurl} - Link per iscriversi al calendario utente (eventi personali)</li>
<li>{coursecalendarurl} - Link per iscriversi al calendario dei corsi (eventi del corso)</li>
</ul>';
$string['biggerthan'] = 'è più grande di (numero)';
$string['billboardtext'] = 'Testo da visualizzare al posto del testo dell\'avviso di blocco';
$string['blockabove'] = 'Blocco superiore';
$string['blockalways'] = 'Blocco indipendentemente dai posti';
$string['blockbelow'] = 'Blocco sottostante';
$string['blockinglabel'] = 'Messaggio durante il blocco';
$string['blockinglabel_help'] = 'Immettere il messaggio che deve essere visualizzato quando la prenotazione è bloccata.
Se si desidera localizzare questo messaggio, è possibile utilizzare
<a href="https://docs.moodle.org/403/en/Multi-language_content_filter" target="_blank">language filters</a>.';
$string['blockoperator'] = 'Operatore';
$string['blockoperator_help'] = '<b>Block above</b>... Le prenotazioni online saranno bloccate una volta raggiunta la percentuale di prenotazioni. La prenotazione sarà possibile solo per un cassiere o un amministratore.<br>
<b>Block below</b>... Le prenotazioni online saranno bloccate fino al raggiungimento della percentuale di prenotazioni. Prima di ciò, la prenotazione è possibile solo per il cassiere o l\'amministratore.';
$string['boactioncancelbookingdesc'] = 'Utilizzato per le opzioni che possono essere acquistate più volte';
$string['boactioncancelbookingvalue'] = 'Attivare la cancellazione immediata';
$string['boactionname'] = 'Nome dell\'azione';
$string['boactions'] = 'Azioni dopo la prenotazione <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span> <span class="badge bg-danger text-light"><i class="fa fa-flask" aria-hidden="true"></i> Experimental</span>';
$string['boactions_desc'] = 'Le azioni di prenotazione dopo la prenotazione sono ancora una funzione sperimentale. Potete provarle se volete.
Ma non usatele ancora in un ambiente produttivo!';
$string['boactionselectuserprofilefield'] = 'Scegliere il campo del profilo';
$string['boactionuserprofilefieldvalue'] = 'Valore';
$string['bocondallowedtobookininstance'] = 'Prenotazione senza capacità';
$string['bocondallowedtobookininstanceanyways'] = 'Consentire la prenotazione senza la capacità \'mod/booking:choose\'';
$string['bocondallowedtobookininstanceavailable'] = 'Prenota';
$string['bocondallowedtobookininstancefullavailable'] = 'La prenotazione è possibile';
$string['bocondallowedtobookininstancefullnotavailable'] = 'Nessun diritto di prenotazione su questa istanza di prenotazione';
$string['bocondallowedtobookininstancenotavailable'] = 'Nessun diritto di prenotazione';
$string['bocondalreadybooked'] = 'alreadybooked: È già prenotato da questo utente';
$string['bocondalreadybookedavailable'] = 'Non ancora prenotato';
$string['bocondalreadybookedfullavailable'] = 'L\'utente non ha ancora prenotato';
$string['bocondalreadybookedfullnotavailable'] = 'Prenotato';
$string['bocondalreadybookednotavailable'] = 'Prenotato';
$string['bocondalreadyreserved'] = 'alreadyreserved: È già stato aggiunto al carrello da questo utente';
$string['bocondalreadyreservedavailable'] = 'Non ancora aggiunto al carrello';
$string['bocondalreadyreservedfullavailable'] = 'Non ancora aggiunto al carrello';
$string['bocondalreadyreservedfullnotavailable'] = 'Aggiunto al carrello';
$string['bocondalreadyreservednotavailable'] = 'Aggiunto al carrello';
$string['bocondaskforconfirmation'] = 'askforconfirmation: Conferma manuale della prenotazione';
$string['bocondaskforconfirmationavailable'] = 'Prenota';
$string['bocondaskforconfirmationfullavailable'] = 'La prenotazione è possibile';
$string['bocondaskforconfirmationfullnotavailable'] = 'Prenota - in lista d\'attesa';
$string['bocondaskforconfirmationnotavailable'] = 'Prenota - in lista d\'attesa';
$string['bocondbookingclosingtimefullnotavailable'] = 'Non può più essere prenotato (terminato il {$a}).';
$string['bocondbookingclosingtimenotavailable'] = 'Non può più essere prenotato (terminato il {$a}).';
$string['bocondbookingopeningtimefullnotavailable'] = 'Può essere prenotato da {$a}.';
$string['bocondbookingopeningtimenotavailable'] = 'Può essere prenotato da {$a}.';
$string['bocondbookingpolicy'] = 'Politica di prenotazione';
$string['bocondbookingtime'] = 'Prenotabile solo entro un certo periodo di tempo';
$string['bocondbookingtimeavailable'] = 'Entro i normali tempi di prenotazione.';
$string['bocondbookingtimenotavailable'] = 'Non entro i normali tempi di prenotazione.';
$string['bocondbookitbutton'] = 'bookitbutton: Show the normal booking button.';
$string['bocondcapbookingchooseavailable'] = 'bookitbutton: Mostra il normale pulsante di prenotazione.';
$string['bocondcapbookingchoosefullavailable'] = 'Diritto di prenotazione su questa istanza di prenotazione';
$string['bocondcapbookingchoosefullnotavailable'] = 'Nessun diritto di prenotazione su questa istanza di prenotazione';
$string['bocondcapbookingchoosenotavailable'] = 'Non c\'è diritto di prenotazione';
$string['bocondcustomform'] = 'Compilare il modulo';
$string['bocondcustomformavailable'] = 'Prenota';
$string['bocondcustomformdeleteinfoscheckboxuser'] = 'Casella di controllo per eliminare le risposte';
$string['bocondcustomformdeleteinfoscheckboxusertext'] = 'Desiderate che le informazioni fornite qui vengano cancellate dopo la conclusione dell\'evento?';
$string['bocondcustomformfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondcustomformfullnotavailable'] = 'Non è possibile effettuare la prenotazione';
$string['bocondcustomformfullybooked'] = 'L\'opzione “{$a}” è già al completo.';
$string['bocondcustomformlabel'] = 'Etichetta';
$string['bocondcustomformmailerror'] = 'L\'indirizzo e-mail non è valido.';
$string['bocondcustomformnotavailable'] = 'Prenota';
$string['bocondcustomformnotempty'] = 'Non deve essere vuoto';
$string['bocondcustomformnumberserror'] = 'Inserire un numero di giorni valido.';
$string['bocondcustomformrestrict'] = 'Il modulo deve essere compilato prima della prenotazione';
$string['bocondcustomformstillavailable'] = 'ancora disponibile';
$string['bocondcustomformurlerror'] = 'L\'URL non è valido o non inizia con http o https.';
$string['bocondcustomformvalue'] = 'Valore';
$string['bocondcustomformvalue_help'] = 'Quando si seleziona un menu a tendina, inserire un valore per riga. I valori e i valori visualizzati possono essere inseriti separatamente, ad esempio “1 => Il mio primo valore => numero_di_disponibilità” ecc.';
$string['bocondcustomuserprofilefieldavailable'] = 'Prenota';
$string['bocondcustomuserprofilefieldconnectsecondfield'] = 'Connettersi con altri campi del profilo';
$string['bocondcustomuserprofilefieldfield'] = 'Campo del profilo';
$string['bocondcustomuserprofilefieldfield2'] = 'Secondo campo del profilo';
$string['bocondcustomuserprofilefieldfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondcustomuserprofilefieldfullnotavailable'] = 'Solo gli utenti con il campo del profilo utente personalizzato {$a->profilefield} possono prenotare.
 <br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondcustomuserprofilefieldnotavailable'] = 'Non è consentito prenotare';
$string['bocondcustomuserprofilefieldoperator'] = 'Operatore';
$string['bocondcustomuserprofilefieldoperator2'] = 'Operatore (2° campo)';
$string['bocondcustomuserprofilefieldvalue'] = 'Valore';
$string['bocondcustomuserprofilefieldvalue2'] = 'Valore (2° campo)';
$string['bocondenrolledincohorts'] = 'L\'utente è iscritto a una determinata coorte/i';
$string['bocondenrolledincohortsavailable'] = 'Prenota';
$string['bocondenrolledincohortsfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondenrolledincohortsfullnotavailable'] = 'Solo gli utenti iscritti ad almeno una delle seguenti coorti possono prenotare: {$a}
  <br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondenrolledincohortsfullnotavailableand'] = 'Solo gli utenti iscritti a tutte le seguenti coorti possono prenotare: {$a}
<br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondenrolledincohortsnotavailable'] = 'Prenotazione non consentita perché non si è iscritti ad almeno una delle seguenti coorti: {$a}';
$string['bocondenrolledincohortsnotavailableand'] = 'Prenotazione non consentita perché non si è iscritti a tutte le seguenti coorti: {$a}';
$string['bocondenrolledincohortswarning'] = 'Nel sistema è presente un numero molto elevato di coorti. Non tutte saranno disponibili qui. Se questo è un problema per voi, vi preghiamo di contattare <a mailto="info@wunderyte.at">Wunderbyte</a>';
$string['bocondenrolledincourse'] = 'L\'utente è iscritto a un determinato corso (o corsi)';
$string['bocondenrolledincourseavailable'] = 'Prenota';
$string['bocondenrolledincoursefullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondenrolledincoursefullnotavailable'] = 'Solo gli utenti iscritti ad almeno uno dei seguenti corsi possono prenotare: {$a}
 <br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondenrolledincoursefullnotavailableand'] = 'Solo gli utenti iscritti a tutti i seguenti corsi possono prenotare: {$a}
 <br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondenrolledincoursenotavailable'] = 'Prenotazione non consentita perché non si è iscritti ad almeno uno dei seguenti corsi: {$a}';
$string['bocondenrolledincoursenotavailableand'] = 'Prenotazione non consentita perché non si è iscritti a tutti i seguenti corsi: {$a}';
$string['bocondfullybooked'] = 'Al completo';
$string['bocondfullybookedavailable'] = 'Prenota';
$string['bocondfullybookedfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondfullybookedfullnotavailable'] = 'Al completo';
$string['bocondfullybookednotavailable'] = 'Al completo';
$string['bocondfullybookedoverride'] = 'fullybookedoverride: Può essere overbooking da parte del personale';
$string['bocondfullybookedoverrideavailable'] = 'Prenota';
$string['bocondfullybookedoverridefullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondfullybookedoverridefullnotavailable'] = 'Al completo - ma avete comunque il diritto di prenotare un utente.';
$string['bocondfullybookedoverridenotavailable'] = 'Al completo';
$string['bocondisbookable'] = 'isbookable: La prenotazione è consentita';
$string['bocondisbookableavailable'] = 'Prenota';
$string['bocondisbookablefullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondisbookablefullnotavailable'] = 'La prenotazione è vietata per questa opzione di prenotazione.
 <br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondisbookablenotavailable'] = 'Non è consentito prenotare';
$string['bocondiscancelled'] = 'iscancelled: Opzione di prenotazione annullata';
$string['bocondiscancelledavailable'] = 'Prenota';
$string['bocondiscancelledfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondiscancelledfullnotavailable'] = 'Cancellato';
$string['bocondiscancellednotavailable'] = 'Cancellato';
$string['bocondisloggedin'] = 'isloggedin: L\'utente è connesso';
$string['bocondisloggedinavailable'] = 'Prenota';
$string['bocondisloggedinfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondisloggedinfullnotavailable'] = 'L\'utente non è connesso.';
$string['bocondisloggedinnotavailable'] = 'Effettuare il login per prenotare questa opzione.';
$string['bocondisloggedinprice'] = 'isloggedinprice: Mostra tutti i prezzi quando non si è connessi.';
$string['bocondmaxnumberofbookings'] = 'numero_massimo_di_prenotazioni: Numero massimo di prenotazioni per utente raggiunto';
$string['bocondmaxnumberofbookingsavailable'] = 'Prenota';
$string['bocondmaxnumberofbookingsfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondmaxnumberofbookingsfullnotavailable'] = 'L\'utente ha raggiunto il numero massimo di prenotazioni';
$string['bocondmaxnumberofbookingsnotavailable'] = 'Numero massimo di prenotazioni raggiunto';
$string['bocondnotifymelist'] = 'Elenco delle notifiche';
$string['bocondonnotifylistavailable'] = 'Prenota';
$string['bocondonnotifylistfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondonnotifylistfullnotavailable'] = 'L\'utente ha raggiunto il numero massimo di prenotazioni';
$string['bocondonnotifylistnotavailable'] = 'Numero massimo di prenotazioni raggiunto';
$string['bocondonwaitinglist'] = 'in lista d\'attesa: L\'utente è in lista d\'attesa';
$string['bocondonwaitinglistavailable'] = 'Prenota';
$string['bocondonwaitinglistfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondonwaitinglistfullnotavailable'] = 'L\'utente è in lista d\'attesa';
$string['bocondonwaitinglistnotavailable'] = 'Siete in lista d\'attesa';
$string['bocondoptionhasstarted'] = 'È già iniziato';
$string['bocondoptionhasstartedavailable'] = 'Prenota';
$string['bocondoptionhasstartedfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondoptionhasstartedfullnotavailable'] = 'Già iniziato - la prenotazione per gli utenti non è più possibile';
$string['bocondoptionhasstartednotavailable'] = 'Già iniziato - la prenotazione non è più possibile';
$string['bocondpreviouslybooked'] = 'L\'utente ha prenotato in precedenza una determinata opzione';
$string['bocondpreviouslybookedavailable'] = 'Prenota';
$string['bocondpreviouslybookedfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondpreviouslybookedfullnotavailable'] = 'Solo gli utenti che hanno prenotato in precedenza <a href="{$a}">questa opzione</a> sono autorizzati a prenotare.
<br>Ma avete comunque il diritto di prenotare un utente.';
$string['bocondpreviouslybookednotavailable'] = 'Solo gli utenti che hanno prenotato in precedenza <a href="{$a}"> questa opzione</a> sono autorizzati a prenotare.';
$string['bocondpreviouslybookedoptionid'] = 'Solo gli utenti che hanno prenotato in precedenza';
$string['bocondpreviouslybookedrestrict'] = 'Deve essere già prenotato';
$string['bocondpriceisset'] = 'priceisset: il prezzo è impostato';
$string['bocondpriceissetavailable'] = 'Prenota';
$string['bocondpriceissetfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondpriceissetfullnotavailable'] = 'Viene fissato un prezzo e richiesto il pagamento';
$string['bocondpriceissetnotavailable'] = 'È necessario pagare';
$string['bocondselectusers'] = 'Solo gli utenti selezionati possono prenotare';
$string['bocondselectusersavailable'] = 'Prenota';
$string['bocondselectusersfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondselectusersfullnotavailable'] = 'Solo i seguenti utenti possono prenotare:<br>{$a}';
$string['bocondselectusersnotavailable'] = 'Prenotazione non consentita';
$string['bocondselectusersrestrict'] = 'Solo uno specifico utente (o utenti) è autorizzato a prenotare';
$string['bocondselectusersuserids'] = 'Utente(i) autorizzato(i) a prenotare';
$string['bocondsubbooking'] = 'Esistono le sottoprenotazioni';
$string['bocondsubbookingavailable'] = 'Prenota';
$string['bocondsubbookingblocks'] = 'La sottoprenotazione blocca questa opzione di prenotazione';
$string['bocondsubbookingblocksavailable'] = 'Prenota';
$string['bocondsubbookingblocksfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondsubbookingblocksfullnotavailable'] = 'La sottoprenotazione blocca questa opzione di prenotazione.';
$string['bocondsubbookingblocksnotavailable'] = 'Non è possibile prenotare.';
$string['bocondsubbookingfullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondsubbookingfullnotavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondsubbookingnotavailable'] = 'Prenota';
$string['bocondsubisbookableavailable'] = 'Prenota';
$string['bocondsubisbookablefullavailable'] = 'È possibile effettuare la prenotazione';
$string['bocondsubisbookablefullnotavailable'] = 'La prenotazione non è possibile per questa sottoprenotazione, poiché l\'opzione corrispondente non è stata prenotata.';
$string['bocondsubisbookablenotavailable'] = 'Prenota prima l\'opzione';
$string['boconduserprofilefield1default'] = 'Il campo del profilo utente ha un determinato valore';
$string['boconduserprofilefield1defaultrestrict'] = 'Un campo del profilo utente scelto deve avere un determinato valore';
$string['boconduserprofilefield2custom'] = 'Il campo del profilo utente personalizzato ha un determinato valore';
$string['boconduserprofilefield2customrestrict'] = 'Un campo del profilo utente personalizzato deve avere un determinato valore';
$string['boconduserprofilefieldavailable'] = 'Prenota';
$string['boconduserprofilefieldfield'] = 'Campo del profilo';
$string['boconduserprofilefieldfullavailable'] = 'La prenotazione è possibile';
$string['boconduserprofilefieldfullnotavailable'] = 'Solo gli utenti con il campo del profilo utente {$a->profilefield} impostato sul valore {$a->value} sono autorizzati a prenotare.
<br>Ma avete comunque il diritto di prenotare un utente.';
$string['boconduserprofilefieldnotavailable'] = 'Non è consentito prenotare';
$string['boconduserprofilefieldoperator'] = 'Operatore';
$string['boconduserprofilefieldvalue'] = 'Valore';
$string['bonumberofdays'] = 'Numero di giorni';
$string['bookanyoneswitchoff'] = '<i class="fa fa-user-times" aria-hidden="true"></i> Non consentire la prenotazione di utenti che non sono iscritti (raccomandato)';
$string['bookanyoneswitchon'] = '<i class="fa fa-user-plus" aria-hidden="true"></i> Consentire la prenotazione di utenti che non sono registrati';
$string['bookanyonewarning'] = 'Attenzione: Ora è possibile prenotare tutti gli utenti che si desidera. Utilizzate questa impostazione solo se sapete cosa state facendo.
 Prenotare utenti che non sono iscritti al corso potrebbe causare problemi.';
$string['booked'] = 'Prenotato';
$string['bookedpast'] = 'Prenotato (corso terminato)';
$string['bookedteachersshowemails'] = 'Mostrare gli indirizzi e-mail degli insegnanti agli utenti prenotati';
$string['bookedteachersshowemails_desc'] = 'Se si attiva questa impostazione, gli utenti prenotati potranno vedere
l\'indirizzo e-mail dell\'insegnante.';
$string['bookedtext'] = 'Conferma della prenotazione';
$string['bookedtextmessage'] = 'La tua prenotazione è stata registrata:

{$a->bookingdetails}
<p>##########################################</p>
Stato della prenotazione: {$a->status}
Partecipante:   {$a->participant}

Per visualizzare tutti i corsi prenotati clicca sul seguente link: {$a->bookinglink}
Il corso associato può essere trovato qui: {$a->courselink}';
$string['bookedtextsubject'] = 'Conferma della prenotazione per {$a->title}';
$string['bookedtextsubjectbookingmanager'] = 'Nuova prenotazione per {$a->title} di {$a->participant}';
$string['bookedusers'] = 'Utenti prenotati';
$string['bookelectivesbtn'] = 'Prenota corsi opzionali selezionati';
$string['booking'] = 'Prenotazione';
$string['booking:addeditownoption'] = 'Aggiungere una nuova opzione e modifica le tue opzioni.';
$string['booking:addinstance'] = 'Aggiungere nuova prenotazione';
$string['booking:bookanyone'] = 'Autorizzato a prenotare chiunque';
$string['booking:bookforothers'] = 'Prenota per altri';
$string['booking:canoverbook'] = 'Ha il permesso di andare in overbooking';
$string['booking:canreviewsubstitutions'] = 'Permesso di rivedere le sostituzioni dei docenti (casella di controllo)';
$string['booking:canseeinvisibleoptions'] = 'Visualizza le opzioni invisibili.';
$string['booking:cansendmessages'] = 'Inviare messaggi';
$string['booking:changelockedcustomfields'] = 'Modificare i campi delle opzioni di prenotazione personalizzate bloccate.';
$string['booking:choose'] = 'Prenota';
$string['booking:comment'] = 'Aggiungere commenti';
$string['booking:communicate'] = 'Può comunicare';
$string['booking:conditionforms'] = 'Inviare moduli di condizioni come la politica di prenotazione o le sottoprenotazioni';
$string['booking:deleteresponses'] = 'Elimina le risposte';
$string['booking:downloadresponses'] = 'Scaricare le risposte';
$string['booking:editbookingrules'] = 'Modifica delle regole (Pro)';
$string['booking:editoptionformconfig'] = 'Modifica del modulo di configurazione delle opzioni';
$string['booking:editteacherdescription'] = 'Modifica la descrizione del docente';
$string['booking:expertoptionform'] = 'Modulo opzione esperto';
$string['booking:limitededitownoption'] = 'Meno di addeditownoption, permette solo azioni molto limitate';
$string['booking:managebookedusers'] = 'Gestire le prenotazioni degli utenti (risposte alle prenotazioni)';
$string['booking:managecomments'] = 'Gestistire i commenti';
$string['booking:manageoptiondates'] = 'Gestire le date delle opzioni';
$string['booking:manageoptiontemplates'] = 'Gestisci modelli di opzioni';
$string['booking:overrideboconditions'] = 'L\'utente può prenotare anche quando le condizioni restituiscono un risultato falso.';
$string['booking:rate'] = 'Valuta le opzioni di prenotazione scelte';
$string['booking:readallinstitutionusers'] = 'Visualizzare tutti gli utenti';
$string['booking:readresponses'] = 'Leggere le risposte';
$string['booking:reducedoptionform1'] = '1. Modulo di opzione ridotto per categoria di corso';
$string['booking:reducedoptionform2'] = '2. Modulo di opzione ridotto per categoria di corso';
$string['booking:reducedoptionform3'] = '3. Modulo di opzione ridotta per la categoria di corso';
$string['booking:reducedoptionform4'] = '4. Modulo di opzione ridotto per categoria di corso';
$string['booking:reducedoptionform5'] = '5. Modulo di opzione ridotta per categoria di corso';
$string['booking:seepersonalteacherinformation'] = 'Vedi informazioni personali sul docente';
$string['booking:semesters'] = 'Prenotazione: Semestri';
$string['booking:sendpollurl'] = 'Inviare URL del sondaggio';
$string['booking:sendpollurltoteachers'] = 'Inviare URL del sondaggio ai docenti';
$string['booking:subscribeusers'] = 'Prenotare per altri utenti';
$string['booking:updatebooking'] = 'Gestire le opzioni della prenotazione';
$string['booking:view'] = 'Visualizza le istanze di prenotazione';
$string['booking:viewallratings'] = 'Visualizzare tutte le valutazioni grezze fornite dai singoli';
$string['booking:viewanyrating'] = 'Visualizzare le valutazioni totali ricevute da chiunque';
$string['booking:viewrating'] = 'Visualizzare il punteggio totale che hai ricevuto';
$string['booking:viewreports'] = 'Consentire l\'accesso per la visualizzazione dei report';
$string['bookingaction'] = 'Azione';
$string['bookingactionadd'] = 'Aggiungi azione';
$string['bookingactionsheader'] = 'Azioni dopo la prenotazione [SPERIMENTALE]';
$string['bookingafteractionsfailed'] = 'Azioni dopo la prenotazione non riuscita';
$string['bookingandcancelling'] = 'Prenotazione e cancellazione';
$string['bookinganswercancelled'] = 'Opzione di prenotazione annullata per/da un utente';
$string['bookinganswerwaitingforconfirmation'] = 'Ricevuta la pre-registrazione per l\'opzione di prenotazione';
$string['bookinganswerwaitingforconfirmationdesc'] = 'Utente con id {$a->relateduserid}  si è registrato per l\'opzione di prenotazione con l\'id {$a->objectid}.';
$string['bookingattachment'] = 'Allegato';
$string['bookingcampaign'] = 'Campagna';
$string['bookingcampaigns'] = 'Prenotazione: Campagne (PRO)';
$string['bookingcampaignssubtitle'] = 'Le campagne permettono di scontare i prezzi delle opzioni di prenotazione selezionate
 per un determinato periodo di tempo e di aumentare il limite di prenotazioni per quel periodo. Affinché le campagne funzionino, il Moodle cron job deve essere eseguito regolarmente. <br>
Le campagne che si sovrappongono si sommano. Due campagne abbinate al 50% di prezzo si tradurranno in un prezzo del 25%.';
$string['bookingcampaignswithbadge'] = 'Prenotazione: Campagne <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['bookingcategory'] = 'Categoria';
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
$string['bookingchangedtextmessage'] = 'La prenotazione "{$a->title}" è cambiata.

Ecco cosa c\'è di nuovo:
{changes}

Per visualizzare le modifiche e tutti i corsi prenotati, cliccare sul seguente link {$a->bookinglink}';
$string['bookingchangedtextsubject'] = 'Notifica di cambiamento per {$a->title}';
$string['bookingclosingtime'] = 'Prenotabile fino a';
$string['bookingcondition'] = 'Condizione';
$string['bookingdate'] = 'Data di prenotazione';
$string['bookingdefaulttemplate'] = 'Scegliere il modello...';
$string['bookingdeleted'] = 'La tua prenotazione è stata cancellata';
$string['bookingdetails'] = 'Dettagli della prenotazione';
$string['bookingduration'] = 'Durata';
$string['bookingfailed'] = 'Prenotazione fallita';
$string['bookingfull'] = 'Non ci sono posti disponibili';
$string['bookingfulldidntregister'] = 'La data è completa, quindi non sono stati trasferiti tutti gli utenti!';
$string['bookingidfilter'] = 'Istanza di prenotazione';
$string['bookingimages'] = 'Caricare le immagini di intestazione per le opzioni di prenotazione: devono avere lo stesso nome esatto del valore del campo personalizzato selezionato in ciascuna opzione di prenotazione.';
$string['bookingimagescustomfield'] = 'Campo personalizzato dell\'opzione di prenotazione da abbinare alle immagini dell\'intestazione con';
$string['bookinginstance'] = 'Istanza di prenotazione';
$string['bookinginstancetemplatename'] = 'Booking instance template name';
$string['bookinginstancetemplatessettings'] = 'Modelli di istanze di prenotazione';
$string['bookinginstanceupdated'] = 'Prenotazione: Modelli di istanza';
$string['bookingmanagererror'] = 'Il nome utente inserito non è valido. O non esiste o ci sono più utenti con questo nome utente (esempio: se hai mnet e autenticazione locale abilitata)';
$string['bookingmeanwhilefull'] = 'Nel frattempo qualcuno ha prenotato già l\'ultimo posto';
$string['bookingname'] = 'Nome prenotazione';
$string['bookingnotopenyet'] = 'Il tuo evento inizia tra {$a} minuti. Il link che hai utilizzato ti reindirizzerà se fai nuovamente clic su di esso entro 15 minuti prima.';
$string['bookingopen'] = 'Aperto';
$string['bookingopeningtime'] = 'Da';
$string['bookingoptioncalendarentry'] = 'Impostazioni predefinite per le opzioni di prenotazione';
$string['bookingoptiondefaults'] = 'Impostazioni predefinite per le opzioni di prenotazione';
$string['bookingoptiondefaultsdesc'] = 'Consente di impostare le impostazioni predefinite per la creazione di opzioni di prenotazione e bloccarle se necessario.';
$string['bookingoptionimage'] = 'Carica un\'immagine';
$string['bookingoptionname'] = 'Nome dell\'opzione di prenotazione';
$string['bookingoptionprice'] = 'Prezzo';
$string['bookingoptionsfromtemplatemenu'] = 'Nuova opzione di prenotazione dal modello';
$string['bookingoptionsmenu'] = 'Possibilità di prenotazione';
$string['bookingoptiontitle'] = 'Titolo dell\'opzione di prenotazione';
$string['bookingorganizatorname'] = 'Nome organizzatore';
$string['bookingpassed'] = 'Il tuo evento è terminato.';
$string['bookingplacesenoughmessage'] = 'Ancora abbastanza posti disponibili per la prenotazione.';
$string['bookingplacesfullmessage'] = 'Non ci sono più posti disponibili.';
$string['bookingplacesinfotexts'] = 'Mostra i testi delle informazioni sulla disponibilità per la prenotazione dei posti';
$string['bookingplaceslowmessage'] = 'Sono rimasti solo pochi posti di prenotazione';
$string['bookingplaceslowpercentage'] = 'Percentuale di prenotazione posti messaggio basso';
$string['bookingplaceslowpercentagedesc'] = 'Se i posti di prenotazione disponibili raggiungono o scendono al di sotto di questa percentuale, verrà mostrato un messaggio di posti di prenotazione bassi.';
$string['bookingpoints'] = 'Punti corso';
$string['bookingpolicy'] = 'Politica di prenotazione';
$string['bookingpollurl'] = 'URL del sondaggio';
$string['bookingpollurlteachers'] = 'URL del sondaggio docenti';
$string['bookingpricecategory'] = 'Categoria di prezzo';
$string['bookingpricesettings'] = 'Impostazioni del prezzo';
$string['bookingpricesettings_desc'] = 'Consente di personalizzare i prezzi delle prenotazioni.';
$string['bookingrule'] = 'Regola';
$string['bookingruleaction'] = 'Azione della regola';
$string['bookingrulecondition'] = 'Condizioni della regola';
$string['bookingrules'] = 'Prenotazione: Definire regole globali (PRO)';
$string['bookingsaved'] = 'La tua prenotazione è stata salvata con successo. Ora puoi procedere per prenotare altri corsi.';
$string['bookingsettings'] = 'Prenotazione: Impostazioni principali';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Testo della prenotazione';
$string['booknow'] = 'Prenota adesso';
$string['bookotherusers'] = 'Prenota per altri utenti';
$string['bookotheruserslimit'] = 'Numero massimo di utenti che un docente assegnato all\'opzione può prenotare';
$string['booktootherbooking'] = 'Prenota utenti ad altra prenotazione';
$string['bookuserswithoutcompletedactivity'] = 'Prenota utenti senza attività completata';
$string['bstcourse'] = 'Corso';
$string['bstcoursestarttime'] = 'Data / Ora';
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
$string['cachedef_bookingoptions'] = 'Opzioni di prenotazione (cache)';
$string['cachedef_bookingoptionsanswers'] = 'Risposte alle opzioni di prenotazione (cache)';
$string['cachedef_bookingoptionsettings'] = 'Impostazioni delle opzioni di prenotazione (cache)';
$string['cachedef_bookingoptionstable'] = 'Tabelle di opzioni di prenotazione con query sql con hash (cache)';
$string['cachedef_cachedbookinginstances'] = 'Istanze di prenotazioni (cache)';
$string['cachedef_cachedpricecategories'] = 'Categorie di prezzi di prenotazione (cache)';
$string['cachedef_cachedprices'] = 'Prezzi delle prenotazioni (cache)';
$string['cachedef_cachedsemesters'] = 'Semestri (cache)';
$string['caladdascourseevent'] = 'Aggiungi al calendario (visibile solo ai partecipanti al corso)';
$string['caladdassiteevent'] = 'Aggiungi al calendario (visibile a tutti gli utenti)';
$string['caldonotadd'] = 'Non aggiungere al calendario del corso';
$string['caleventtype'] = 'Visibilità degli eventi del calendario';
$string['cancancelbookdays'] = 'Non consente agli utenti di annullare la prenotazione n giorni prima dell\'inizio. Meno significa che gli utenti possono ancora annullare n giorni DOPO l\'inizio del corso.';
$string['cancancelbookdaysno'] = 'Non limitare';
$string['cancel'] = 'Annulla';
$string['cancelallusers'] = 'Non consente agli utenti di cancellare la prenotazione n giorni prima dell\'inizio. Meno significa che gli utenti possono ancora cancellare n giorni DOPO l\'inizio del corso.';
$string['cancelbooking'] = 'Annulla la prenotazione';
$string['canceloption'] = 'Annullare l\'opzione di prenotazione';
$string['canceloption_desc'] = 'Annullare un\'opzione di prenotazione significa che non è più prenotabile, ma viene ancora visualizzata nell\'elenco.';
$string['cancelreason'] = 'Motivo dell\'annullamento di questa opzione di prenotazione';
$string['cancelthisbookingoption'] = 'Cancellare questa opzione di prenotazione';
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
$string['changesemester'] = 'Cambia semestre';
$string['changesemester:warning'] = '<strong>Attenzione: </strong> Facendo clic su "Salva modifiche", tutte le date saranno eliminate e sostituite con quelle del semestre scelto.';
$string['choose...'] = 'Seleziona..';
$string['choosepdftitle'] = 'Seleziona un titolo per il foglio presenze';
$string['chooseperiod'] = 'Selezionare il periodo di tempo';
$string['chooseperiod_help'] = 'Selezionare un periodo di tempo entro il quale creare la serie di date.';
$string['choosesemester'] = 'Selezionare il semestre';
$string['choosesemester_help'] = 'Selezionare il semestre per il quale creare le ferie.';
$string['closed'] = 'Prenotazione chiusa';
$string['comments'] = 'Commenti';
$string['completed'] = 'Completato';
$string['completedcomments'] = 'Solo con il completamento attività';
$string['completedratings'] = 'Solo con il completamento attività';
$string['completionmodule'] = 'Al completamento dell\'attività del corso selezionata, abilita l\'eliminazione in blocco delle prenotazioni degli utenti';
$string['completionmodule_help'] = 'Visualizza il pulsante di eliminazione in blocco per prenotare le risposte, se è stato completato un altro modulo del corso. Le prenotazioni degli utenti verranno cancellate con un clic di un pulsante nella pagina del report! Solo le attività con completamento abilitato possono essere selezionate dall\'elenco';
$string['confirmactivtyfrom'] = 'Conferma l\'attività degli utenti da';
$string['confirmationmessagesettings'] = 'Impostazione e-mail di conferma';
$string['confirmbookingoffollowing'] = 'Si prega di confermare la prenotazione del seguente corso';
$string['confirmcanceloption'] = 'Conferma annullamento della prenotazione scelta';
$string['confirmcanceloptiontitle'] = 'Modifica lo stato della prenotazione scelta';
$string['confirmdeletebookingoption'] = 'Vuoi veramente cancellare questa possibilità di prenotazione?';
$string['confirmoptioncompletion'] = 'Conferma (annulla) lo stato di completamento';
$string['confirmpresence'] = 'Conferma la presenza';
$string['confirmusers'] = 'Conferma l\'attività degli utenti';
$string['confirmuserswith'] = 'Conferma gli utenti che hanno completato l\'attività o hanno ricevuto il badge';
$string['contains'] = 'contiene (text)';
$string['containsnot'] = 'non contiene (text)';
$string['copy'] = '- Copia';
$string['copyonlythisbookingurl'] = 'Copia questo URL di prenotazione';
$string['copypollurl'] = 'Copia URL sondaggio';
$string['copytoclipboard'] = 'Copia negli appunti: Ctrl+C, Enter';
$string['copytotemplate'] = 'Salva l\'opzione di prenotazione come modello';
$string['copytotemplatesucesfull'] = 'L\'opzione di prenotazione è stata salvata correttamente come modello.';
$string['coursedate'] = 'Data';
$string['courseendtime'] = 'Orario di fine corso';
$string['coursepageshortinfo'] = 'Se vuoi prenotarti per questo corso, clicca su "Visualizza opzioni disponibili", scegli un\'opzione di prenotazione e poi clicca su "Prenota ora".';
$string['coursepageshortinfolbl'] = 'Informazioni brevi';
$string['coursepageshortinfolbl_help'] = 'Scegli un breve testo informativo da mostrare nella pagina del corso.';
$string['coursestarttime'] = 'Orario di inizio corso';
$string['courseurl'] = 'URL del corso';
$string['createnewbookingoption'] = 'Nuova opzione di prenotazione';
$string['createnewbookingoptionfromtemplate'] = 'Aggiungi una nuova opzione di prenotazione dal modello';
$string['csvfile'] = 'File CSV';
$string['customdatesbtn'] = '<i class="fa fa-plus-square"></i> Date personalizzate...';
$string['customdownloadreport'] = 'Download del report';
$string['customfield'] = 'Campo personalizzato da impostare nelle impostazioni dell\'opzione di prenotazione. Verrà quindi mostrato nella panoramica delle opzioni di prenotazione.';
$string['customfieldconfigure'] = 'Prenotazione: Campi personalizzati per le opzioni di prenotazione';
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
$string['customfields'] = 'Campi personalizzati';
$string['customfieldtype'] = 'Tipo di campo';
$string['customfieldvalue'] = 'Valore';
$string['customfieldvalue_help'] = 'Puoi inserire qualsiasi valore desideri (testo, numero o HTML).<br>
                                     Se hai utilizzato uno dei nomi di campo speciali
                                     <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                    </ul> quindi inserisci il link completo alla sessione della riunione che inizia con https:// o http://';
$string['customprofilefield'] = 'Campo profilo personalizzato da verificare';
$string['customprofilefieldvalue'] = 'Valore del campo del profilo personalizzato da verificare';
$string['customreporttemplate'] = 'Modello di rapporto personalizzato';
$string['customreporttemplates'] = 'Modelli di report personalizzati';
$string['dateandtime'] = 'Data e ora';
$string['dateerror'] = 'Data errata nella riga {$a}:';
$string['datenotset'] = 'Data non impostata';
$string['dateparseformat'] = 'Formato di analisi della data';
$string['dateparseformat_help'] = 'Per favore, usa il formato della data come specificato nel file CSV. Aiutati con <a href="http://php.net/manual/en/function.date.php"> questa </a> risorsa per le opzioni.';
$string['dates'] = 'Date';
$string['dayofweektime'] = 'Giorno e ora';
$string['days'] = '{$a} giorni';
$string['daystonotify'] = 'Numero di giorni prima dell\'inizio dell\'evento per avvisare i partecipanti';
$string['daystonotify2'] = 'Seconda notifica prima dell\'inizio dell\'evento per avvisare i partecipanti.';
$string['daystonotify_help'] = 'Funzionerà solo se sono impostati la data di inizio e di fine dell\'opzione! Impostare 0 per disabilitare questa funzionalità.';
$string['daystonotifysession'] = 'Numero di giorni prima dell\'inizio della sessione per avvisare i partecipanti';
$string['daystonotifysession_help'] = 'Immettere 0 per disattivare la notifica e-mail per questa sessione.';
$string['daystonotifyteachers'] = 'Numero di giorni prima dell\'inizio dell\'evento per avvisare gli insegnanti (PRO)';
$string['defaultbookingoption'] = 'Possibilità di prenotazione di default';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultpricecategoryname'] = 'Nome predefinito della categoria di prezzo';
$string['defaultpriceformula'] = 'Formula del prezzo';
$string['defaultpriceformuladesc'] = 'L\'oggetto JSON consente di configurare il calcolo automatico del prezzo con un\'opzione di prenotazione.';
$string['defaulttemplate'] = 'Modello predefinito';
$string['defaulttemplatedesc'] = 'Modello di opzione di prenotazione predefinito durante la creazione di una nuova opzione di prenotazione.';
$string['defaultvalue'] = 'Valore predefinito del prezzo';
$string['defaultvalue_help'] = 'Inserire un valore predefinito per ogni prezzo di questa categoria. Naturalmente, questo valore può essere sovrascritto in seguito.';
$string['delcustfield'] = 'Elimina questo campo e tutte le impostazioni di campo associate nelle possibilità di prenotazione';
$string['deletebooking'] = 'Vuoi davvero cancellarti dal seguente corso? <br /><br /> <b>{$a} </b>';
$string['deletebookingrule'] = 'Eliminare la regola';
$string['deletecategory'] = 'Cancella';
$string['deletecustomfield'] = 'Eliminare il campo personalizzato?';
$string['deletecustomfield_help'] = 'Attenzione: l\'impostazione di questa casella di controllo eliminerà il campo personalizzato associato durante il salvataggio.';
$string['deletedbookingusermessage'] = 'Gentile {$a->participant}.

La tua prenotazione per {$a->title} ({$a->startdate} {$a->starttime}) è stata cancellata.';
$string['deletedbookingusersubject'] = 'Prenotazione per {$a->title} cancellata';
$string['deletedrule'] = 'Regola cancellata';
$string['deletedtext'] = 'Messaggio di prenotazione annullata (inserire 0 per disattivare)';
$string['deletedtextmessage'] = 'L\'opzione di prenotazione è stata eliminata:{$a->title}

Utente: {$a->participant}
Titolo: {$a->title}
Data: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Corso: {$a->courselink}
Link alla prenotazione: {$a->bookinglink}';
$string['deletedtextsubject'] = 'Prenotazione cancellata: {$a->title} by {$a->participant}';
$string['deletedusers'] = 'Utenti cancellati';
$string['deleteholiday'] = 'Cancellare le vacanze';
$string['deleteoptiondate'] = 'Rimuovere la data';
$string['deleteresponsesactivitycompletion'] = 'Eliminare tutti gli utenti con attività completata: {$a}';
$string['deleterule'] = 'Cancellare';
$string['deletesemester'] = 'Cancellare il semestre';
$string['deletesubcategory'] = 'Per favore, prima cancella tutte le sottocategorie di questa categoria!';
$string['deletethisbookingoption'] = 'Cancellare questa opzione di prenotazione';
$string['deleteuserfrombooking'] = 'Vuoi veramente cancellare gli utenti dalla prenotazione?';
$string['delnotification'] = 'Hai eliminato {$a->del} di {$a->all} utenti. Gli utenti che hanno completato l\'attività non possono essere cancellati!';
$string['delnotificationactivitycompletion'] = 'Hai eliminato {$a->del} su {$a->all} utenti. Gli utenti che hanno completato l\'attività non possono essere eliminati.';
$string['description'] = 'Descrizione';
$string['disablebookingusers'] = 'Disattiva la prenotazione degli utenti: nascondi il pulsante Prenota ora.';
$string['disablepricecategory'] = 'Disattivare la categoria di prezzo';
$string['disablepricecategory_help'] = 'Quando si disattiva una categoria di prezzo, non sarà più possibile utilizzarla.';
$string['dontaddpersonalevents'] = 'Non aggiungere eventi del calendario personale';
$string['dontaddpersonaleventsdesc'] = 'Per ogni opzione prenotata e per tutte le sue sessioni, vengono creati eventi personali nel calendario di moodle. Sopprimendoli si migliorano le prestazioni per i siti a carico elevato.';
$string['download'] = 'Scarica';
$string['downloadallresponses'] = 'Scaricare tutte le risposte per tutte le possibilità di prenotazione';
$string['downloadusersforthisoptionods'] = 'Scaricare gli utenti come .ods';
$string['downloadusersforthisoptionxls'] = 'Scaricare gli utenti come .xls';
$string['duplicatename'] = 'Questo nome dell\'opzione di prenotazione esiste già. Per favore, scegline un altro.';
$string['duplicationrestore'] = 'Duplicazione, backup e ripristino';
$string['duplicationrestoredesc'] = 'Qui è possibile impostare le informazioni che si desidera includere durante la duplicazione o il backup/ripristino delle istanze di prenotazione.';
$string['duplicationrestoreentities'] = 'Includere le entità';
$string['duplicationrestoreprices'] = 'Includere i prezzi';
$string['duplicationrestoreteachers'] = 'Includere gli insegnanti';
$string['duration:minutes'] = 'Durata (minuti)';
$string['duration:units'] = 'Unità ({$a} min)';
$string['editbookingoption'] = 'Modifica dell\'opzione di prenotazione';
$string['editcategory'] = 'Modifica';
$string['editingoptiondate'] = 'Stai attualmente modificando questa sessione';
$string['editinstitutions'] = 'Modifica organizzazioni';
$string['editotherbooking'] = 'Altre regole di prenotazione';
$string['editrule'] = 'Modifica';
$string['edittag'] = 'Modifica';
$string['editteachers'] = 'Modifica';
$string['editteacherslink'] = 'Modifica docenti';
$string['educationalunitinminutes'] = 'Durata di un\'unità didattica (minuti)';
$string['educationalunitinminutes_desc'] = 'Inserire la durata di un\'unità didattica in minuti. Verrà utilizzata per calcolare le unità didattiche eseguite.';
$string['enable'] = 'Abilita';
$string['enablecompletion'] = 'Conteggio delle prenotazioni';
$string['enablecompletiongroup'] = 'Richiesta delle prenotazioni';
$string['endtimenotset'] = 'Data di fine non impostata';
$string['enrolledcomments'] = 'Solo iscritti';
$string['enrolledinoptions'] = 'già prenotato nelle opzioni di prenotazione:';
$string['enrolledratings'] = 'Solo iscritti';
$string['enrolmentstatus'] = 'Iscrivere gli utenti all\'ora di inizio del corso (Default: Not checked &rarr; enrol them immediately.)';
$string['enrolmentstatus_help'] = 'Avviso: Affinché l\'iscrizione automatica funzioni, è necessario modificare l\'impostazione dell\'istanza di prenotazione
 "Iscrizione automatica degli utenti" a "Sì".';
$string['entervalidurl'] = 'Per favore inserisci un URL valido.';
$string['equals'] = 'ha esattamente questo valore (testo o numero)';
$string['equalsnot'] = 'non ha esattamente questo valore (testo o numero)';
$string['error:choosevalue'] = 'Qui è necessario scegliere un valore.';
$string['error:coursecategoryvaluemissing'] = 'È necessario scegliere un valore in questo punto, poiché è necessario come categoria del corso
 per il corso Moodle creato automaticamente.';
$string['error:entervalue'] = 'Qui è necessario inserire un valore.';
$string['error:failedtosendconfirmation'] = 'Il seguente utente non ha ricevuto una mail di conferma

Stato della prenotazione: {$a->status}
Partecipante:  {$a->participant}
Opzione prenotazione::  {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Corso associato: {$a->courselink}';
$string['error:identifierexists'] = 'Scegliere un altro identificatore. Questo esiste già.';
$string['error:invalidcmid'] = 'Il rapporto non può essere aperto perché non è stato fornito un ID modulo corso (cmid) valido. Deve essere il cmid di un\'istanza di prenotazione!';
$string['error:missingteacherid'] = 'Errore: Il rapporto non può essere caricato perché manca il teacherid.';
$string['error:mustnotbeempty'] = 'Non deve essere vuoto.';
$string['error:nofieldchosen'] = 'È necessario scegliere un campo.';
$string['error:reasonfornoteacher'] = 'Indicare il motivo per cui non erano presenti insegnanti in questa data.';
$string['error:reasonforsubstituteteacher'] = 'Indicare il motivo della supplenza.';
$string['error:reasontoolong'] = 'Il motivo è troppo lungo, inserire un testo più breve.';
$string['error:wrongteacherid'] = 'Errore: Non è stato possibile trovare un utente per il "teacherid" fornito.';
$string['errorduplicatepricecategoryidentifier'] = 'Gli identificatori delle categorie di prezzo devono essere unici.';
$string['errorduplicatepricecategoryname'] = 'I nomi delle categorie di prezzo devono essere unici.';
$string['errorduplicatesemesteridentifier'] = 'Gli identificatori dei semestri devono essere unici.';
$string['errorduplicatesemestername'] = 'I nomi dei semestri devono essere unici.';
$string['erroremptycustomfieldname'] = 'Il nome del campo personalizzato non può essere vuoto.';
$string['erroremptycustomfieldvalue'] = 'Il valore del campo personalizzato non può essere vuoto.';
$string['erroremptypricecategoryidentifier'] = 'L\'identificatore della categoria di prezzo non può essere vuoto.';
$string['erroremptypricecategoryname'] = 'Il nome della categoria di prezzo non può essere vuoto.';
$string['erroremptysemesteridentifier'] = 'È necessario un identificatore di semestre!';
$string['erroremptysemestername'] = 'Il nome del semestre non può essere vuoto';
$string['errorholidayend'] = 'La vacanza non può terminare prima della data di inizio.';
$string['errorholidaystart'] = 'Le vacanze non possono iniziare dopo la data di scadenza.';
$string['erroroptiondateend'] = 'La data di fine deve essere successiva alla data di inizio.';
$string['erroroptiondatestart'] = 'La data di inizio deve essere precedente alla data di fine.';
$string['errorpagination'] = 'Per favore inserisci un numero maggiore di 0';
$string['errorsemesterend'] = 'La fine del semestre deve essere successiva all\'inizio del semestre.';
$string['errorsemesterstart'] = 'L\'inizio del semestre deve avvenire prima della fine del semestre.';
$string['errortoomanydecimals'] = 'Sono ammessi solo 2 decimali.';
$string['eventalreadyover'] = 'Questo evento è già finito.';
$string['eventduration'] = 'Durata evento';
$string['eventpoints'] = 'Punti';
$string['eventtype'] = 'Tipo di evento';
$string['eventtype_help'] = 'Puoi inserire il tipo di evento manualmente o scegliere da un elenco di tipi di eventi precedenti.
                              Puoi scegliere un solo tipo di evento. Una volta salvato, il tipo di evento verrà aggiunto all\'elenco.';
$string['excelfile'] = 'File CSV con il completamento attività';
$string['existingsubscribers'] = 'Iscritti esistenti';
$string['expired'] = 'Spiacenti, questa attività è stata chiusa il {$a} e non è più disponibile';
$string['fillinatleastoneoption'] = 'È necessario fornire almeno due possibili risposte.';
$string['filterbtn'] = 'Filtro';
$string['filterenddate'] = 'Fino a';
$string['filterstartdate'] = 'Da';
$string['forcourse'] = 'per corso';
$string['friday'] = 'Venerdì';
$string['full'] = 'Completo';
$string['fullname'] = 'Nome e cognome';
$string['fullybooked'] = 'Al completo';
$string['generaterecnum'] = 'Genera numeri';
$string['generaterecnumareyousure'] = 'Questo genererà nuovi numeri ed eliminerà definitivamente quello vecchi!';
$string['generaterecnumnotification'] = 'Sono stati generati nuovi numeri.';
$string['globalactivitycompletiontext'] = 'Messaggio da inviare all\'utente al termine dell\'opzione di prenotazione (modello globale)';
$string['globalbookedtext'] = 'Conferma prenotazione (modello globale)';
$string['globalbookingchangedtext'] = 'Messaggio da inviare quando cambia un\'opzione di prenotazione (verrà inviato solo agli utenti che hanno già prenotato). Usa il segnaposto {changes} per mostrare le modifiche. Immettere 0 per disattivare le notifiche di modifica. (Modello globale)';
$string['globalcurrency'] = 'Valuta';
$string['globalcurrencydesc'] = 'Scegliere la valuta per i prezzi delle opzioni di prenotazione';
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
$string['gotobooking'] = '&lt;&lt; Prenotazioni';
$string['gotobookingoption'] = 'Vai all\'opzione di prenotazione';
$string['gotomanageresponses'] = '&lt;&lt; Gestire le risposte';
$string['groupdeleted'] = 'Questa istanza di prenotazione crea automaticamente i gruppi nel corso di destinazione. Ma il gruppo è stato eliminato manualmente nel corso di destinazione. Attiva la seguente casella di controllo per ricreare il gruppo';
$string['groupexists'] = 'Il gruppo esiste già nel corso target, scegli un altro nome per l\'opzione di prenotazione';
$string['groupname'] = 'Nome del gruppo';
$string['hidedescription'] = 'Nascondi descrizione';
$string['hidelistoncoursepage'] = 'Nascondere l\'elenco nella pagina del corso (impostazione predefinita)';
$string['holiday'] = 'Vacanze';
$string['holidayend'] = 'Fine';
$string['holidayendactive'] = 'La fine non è lo stesso giorno';
$string['holidayname'] = 'Nome della vacanza (facoltativo)';
$string['holidays'] = 'Vacanze';
$string['holidaystart'] = 'Vacanze (inizio)';
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
$string['importcsvbookingoption'] = 'Importa CSV con opzioni di prenotazione';
$string['importcsvtitle'] = 'Importa CSV';
$string['importexcelbutton'] = 'Completamento dell\'attività di importazione';
$string['importexceltitle'] = 'Completamento dell\'attività di importazione';
$string['importfinished'] = 'Importazione terminata!';
$string['importinfo'] = 'Informazioni sull\'importazione: puoi utilizzare le seguenti colonne nel caricamento csv (spiegazione tra parentesi)';
$string['inarray'] = 'l\'utente ha uno dei seguenti valori separati da virgola';
$string['includeteachers'] = 'Includere gli insegnanti nel foglio presenza';
$string['info:teachersforoptiondates'] = 'Vai a <a href="{$a}" target="_self">teaching journal</a>, per gestire gli insegnanti per date specifiche.';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>Hai già prenotato questa opzione.</i></div>';
$string['infonobookingoption'] = 'Per aggiungere un\'opzione di prenotazione, utilizza il blocco delle impostazioni o l\'icona delle impostazioni nella parte superiore della pagina';
$string['infotext:prolicensenecessary'] = 'Per utilizzare questa funzione è necessaria una licenza Booking PRO.
<a href="https://wunderbyte.at/en/contact" target="_blank"> Contattate Wunderbyte</a> se volete acquistare una licenza PRO.';
$string['infowaitinglist'] = '<div class="infowaitinglist"><i>Sei in lista d\'attesa per questa opzione</i></div>';
$string['instancesuccessfullysaved'] = 'Questa istanza di prenotazione è stata salvata correttamente come modello.';
$string['instancetemplate'] = 'Modello di istanza';
$string['institution'] = 'Istituzione';
$string['institution_help'] = 'Puoi inserire il nome dell\'istituto manualmente o scegliere da un elenco di istituti precedenti.
                                     Puoi scegliere un solo istituto. Una volta salvato, l\'istituto verrà aggiunto all\'elenco.';
$string['institutions'] = 'Istituzioni';
$string['invisibleoption'] = 'Opzione di prenotazione invisibile';
$string['invisibleoption:notallowed'] = 'Non è possibile visualizzare questa opzione di prenotazione.';
$string['isempty'] = 'il campo è vuoto';
$string['isnotempty'] = 'il campo non è vuoto';
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
$string['licensekey'] = 'Chiave di licenza PRO';
$string['licensekeycfg'] = 'Attiva la versione PRO';
$string['licensekeycfgdesc'] = 'Con una licenza PRO puoi creare tutti i modelli di prenotazione che desideri e utilizzare funzionalità PRO come modelli di posta globali, testi informativi sulla lista d\'attesa o notifiche degli insegnanti.';
$string['licensekeydesc'] = 'Carica una chiave di licenza valida per attivare la versione PRO.';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limita il numero di partecipanti';
$string['limitanswers_help'] = 'Se modifichi questa opzione e hai prenotato delle persone, puoi rimuoverle senza preavviso!';
$string['linkgotobookingoption'] = 'Vai all\'opzione prenotata: {$a}</a>';
$string['linknotavailableyet'] = 'Il link per accedere al meeting è disponibile solo 15 minuti prima dell\'inizio fino al termine della sessione.';
$string['linknotvalid'] = 'Questo link o riunione non è accessibile.
Se si tratta di una riunione prenotata, si prega di ricontrollare poco prima dell\'inizio. Sembra che tu non sia prenotato per questa riunione';
$string['linktoteachersinstancereport'] = '<p><a href="{$a}" target="_self">&gt;&gt; Vai al rapporto degli insegnanti per la prenotazione</a></p>';
$string['location'] = 'Luogo';
$string['location_help'] = 'Puoi inserire il nome della posizione manualmente o scegliere da un elenco di posizioni precedenti.
                                     Puoi scegliere una sola località. Dopo aver salvato, la posizione verrà aggiunta all\'elenco.';
$string['lowerthan'] = 'è inferiore a (numero)';
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
$string['manageresponses'] = 'Gestire le risposte';
$string['maxoverbooking'] = 'Massimo numero di posti in lista d\'attesa';
$string['maxparticipantsnumber'] = 'Massimo numero di partecipanti';
$string['maxperuser'] = 'Numero massimo di prenotazioni correnti per utente';
$string['maxperuser_help'] = 'Il numero massimo di prenotazioni che un singolo utente può effettuare in questa attività contemporaneamente. Dopo che l\'ora di fine di un evento è trascorsa, non viene più conteggiata in questo limite.';
$string['maxperuserwarning'] = 'Attualmente hai utilizzato {$a->count} su {$a->limit} prenotazioni massime disponibili ({$a->eventtype}) per il tuo account utente';
$string['messageprovider:bookingconfirmation'] = 'Conferme di prenotazione';
$string['messagesend'] = 'Il tuo messaggio è stato inviato.';
$string['messagesubject'] = 'Soggetto';
$string['messagetext'] = 'Messaggio';
$string['minanswers'] = 'Numero minimo di partecipanti';
$string['minutes'] = '{$a} minuti';
$string['missinghours'] = 'Ore mancanti';
$string['modaloptiondateformtitle'] = 'Date personalizzate';
$string['modulename'] = 'Prenotazione';
$string['modulenameplural'] = 'Prenotazioni';
$string['monday'] = 'Lunedì';
$string['moveoptionto'] = 'Sposta l\'opzione di prenotazione su un\'altra istanza di prenotazione';
$string['multiselect'] = 'Selezione multipla';
$string['mustchooseone'] = 'Devi scegliere un\'opzione prima di salvare. Niente è stato salvato.';
$string['mustfilloutuserinfobeforebooking'] = 'Prima di procedere con il modulo di prenotazione, si prega di compilare alcune informazioni personali di prenotazione';
$string['mybookingsbooking'] = 'Prenotazione (Corso)';
$string['mybookingsoption'] = 'Opzione';
$string['newcourse'] = 'Nuovo corso';
$string['newcoursecategorycfield'] = 'Campo personalizzato dell\'opzione di prenotazione da utilizzare come categoria del corso';
$string['newcoursecategorycfielddesc'] = 'Scegliere un campo personalizzato per l\'opzione di prenotazione che verrà utilizzato come categoria di corso per i corsi creati automaticamente.
 corsi creati automaticamente, utilizzando la voce a discesa "Nuovo corso" nel modulo per la creazione di nuove opzioni di prenotazione.';
$string['newoptiondate'] = 'Creare una nuova sessione...';
$string['newtemplatesaved'] = 'Il nuovo modello per l\'opzione di prenotazione è stato salvato.';
$string['next'] = 'Prossimo';
$string['no'] = 'No';
$string['nobookingpossible'] = 'Nessuna prenotazione possibile.';
$string['nobookingselected'] = 'Nessuna opzione di prenotazione selezionata';
$string['nocancelreason'] = 'È necessario fornire una motivazione per la cancellazione di questa opzione di prenotazione';
$string['nocfnameselected'] = 'Niente è stato selezionato. Digita un nuovo nome o selezionane uno dall\'elenco.';
$string['nocomments'] = 'Commento disabilitato';
$string['nocourse'] = 'Nessun corso selezionato per questa opzione di prenotazione';
$string['nofieldchosen'] = 'Nessun campo scelto';
$string['nogrouporcohortselected'] = 'Devi selezionare almeno un gruppo o un gruppo globale.';
$string['noguestchoose'] = 'Spiacenti, gli ospiti non possono inserire dati';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">Non hai il permesso di accedere a questa pagina.</div>';
$string['nopricecategoriesyet'] = 'Non sono ancora state create categorie di prezzo.';
$string['nopricecategoryselected'] = 'Inserire il nome di una nuova categoria di prezzo';
$string['nopriceformulaset'] = 'Nessuna formula impostata nella pagina di impostazione. <a href="{$a->url}" target="_blank">Set it here.</a>';
$string['noratings'] = 'Valutazioni disabilitate';
$string['noresultsviewable'] = 'I risultati non sono attualmente visualizzabili.';
$string['norighttobook'] = 'La prenotazione non è possibile per il tuo ruolo utente. Si prega di contattare l\'amministratore del sito per darvi i diritti appropriati o per registrarvi/accedere.';
$string['nosubscribers'] = 'Non sono stati assegnati docenti!';
$string['notallbooked'] = 'Non è stato possibile prenotare i seguenti utenti a causa del raggiungimento del numero massimo di prenotazioni per utente o per mancanza di posti disponibili per l\'opzione di prenotazione: {$a}';
$string['notbooked'] = 'Non ancora prenotato';
$string['notconectedbooking'] = 'Non connesso';
$string['noteacherfound'] = 'L\'utente specificato come docente on line {$a} non esiste sulla piattaforma.';
$string['noteacherset'] = 'Nessun insegnante';
$string['notemplate'] = 'Non utilizzare come modello';
$string['notes'] = 'Note di prenotazione';
$string['notificationlist'] = 'Elenco delle notifiche';
$string['notificationlistdesc'] = 'Quando non c\'è più posto disponibile, gli utenti possono comunque registrarsi per essere avvisati quando c\'è un posto libero.';
$string['notificationtext'] = 'Messaggio di notifica';
$string['notifyemail'] = 'Notifica al partecipante prima dell\'inizio';
$string['notifyemailmessage'] = 'Your booking will start soon:

Stato della prenotazione: {$a->status}
Partecipante {$a->participant}
Opzione di prenotazione: {$a->title}
Data: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Per visualizzare tutti i corsi prenotati, cliccare sul seguente link: {$a->bookinglink}
Il corso associato è disponibile qui: {$a->courselink}';
$string['notifyemailsubject'] = 'La vostra prenotazione inizierà presto';
$string['notifyemailteachers'] = 'Notifica all\'insegnante prima dell\'inizio (PRO)';
$string['notifyemailteachersmessage'] = 'La prenotazione inizierà presto:

{$a->bookingdetails}

Avete <b>{$a->numberparticipants} partecipanti prenotati</b> and <b>{$a->numberwaitinglist} persone in lista d\'attesa</b>.

Per visualizzare tutti i corsi prenotati, cliccare sul seguente link: {$a->bookinglink}
Il corso associato è disponibile qui: {$a->courselink}';
$string['notifyemailteacherssubject'] = 'La vostra prenotazione inizierà presto';
$string['notifyme'] = 'Notifica quando disponibile';
$string['notinarray'] = 'l\'utente non ha nessuno di questi valori separati da virgola';
$string['notopenyet'] = 'Spiacenti, questa attività non è disponibile fino a {$a}';
$string['notstarted'] = 'Non ancora iniziato';
$string['nouserfound'] = 'Nessun utente trovato:';
$string['nousers'] = 'Nessun utente!';
$string['numberrows'] = 'Numero di righe';
$string['numberrowsdesc'] = 'Numera ogni riga del foglio di accesso. Il numero verrà visualizzato a sinistra del nome nella stessa colonna';
$string['numgenerator'] = 'Abilitare la generazione del numero di record?';
$string['numrec'] = 'Numero di record';
$string['onlyusersfrominstitution'] = 'È possibile aggiungere solo utenti di questa istituzione: {$a}';
$string['onwaitinglist'] = 'Sei in lista d\'attesa';
$string['optionannotation'] = 'Annotazione interna';
$string['optionannotation_help'] = 'Aggiungete osservazioni interne, annotazioni o qualsiasi altra cosa vogliate. Verrà visualizzato solo in questo modulo e in nessun altro.';
$string['optionbookablebody'] = '{$a->title} è di nuovo disponibile. <a href="{$a->url}">Clicca qui</a> per andare direttamente lì.<br><br>';
$string['optionbookabletitle'] = '{$a->title} è di nuovo disponibile';
$string['optiondate'] = 'Data';
$string['optiondateend'] = 'Fine';
$string['optiondates'] = 'Sessione di date multiple';
$string['optiondatesmanager'] = 'Gestire le date delle opzioni';
$string['optiondatesmessage'] = 'Sessione {$a->number}: {$a->date} <br> Da: {$a->starttime} <br> A: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Session time was deleted.';
$string['optiondatessuccessfullysaved'] = 'Il tempo della sessione è stato salvato.';
$string['optiondatestart'] = 'Inizio';
$string['optiondatesteachersreport'] = 'Relazione sull\'insegnamento / Sostituzione degli insegnanti';
$string['optiondatesteachersreport_desc'] = 'Questo rapporto fornisce una panoramica di quale insegnante era presente in quale data specifica.<br>
Per impostazione predefinita, ogni data viene compilata con il docente dell\'opzione. È possibile sovrascrivere date specifiche con insegnanti sostitutivi.';
$string['optiondatestime'] = 'Tempo di sessione';
$string['optionformconfig'] = 'Prenotazione: Configurare il modulo delle opzioni di prenotazione';
$string['optionformconfig:nobooking'] = 'È necessario creare almeno un\'istanza di prenotazione prima di poter utilizzare questo modulo!';
$string['optionformconfigsaved'] = 'Configurazione del modulo dell\'opzione di prenotazione salvata.';
$string['optionformconfigsubtitle'] = '<p>Disattivate le funzioni non necessarie per rendere più chiaro il modulo di prenotazione per gli amministratori.</p>
<p><strong>FATE ATTENZIONE:</strong> Disattivate i campi solo se siete completamente sicuri di non averne bisogno! </p>';
$string['optionid'] = 'ID opzione';
$string['optionidentifier'] = 'Identificatore univoco';
$string['optionidentifier_help'] = 'Aggiungere un identificatore unico per questa opzione di prenotazione.';
$string['optioninvisible'] = 'Nascondere agli utenti normali (visibile solo agli utenti autorizzati)';
$string['optionmenu'] = 'Questa opzione di prenotazione';
$string['optionsfields'] = 'Campi nella pagina di riepilogo delle opzioni di prenotazione';
$string['optiontemplate'] = 'Modello di opzione';
$string['optiontemplatename'] = 'Nome modello opzione';
$string['optiontemplatessettings'] = 'Modelli di opzioni di prenotazione';
$string['optionvisibility'] = 'Visibilità';
$string['optionvisibility_help'] = 'Qui si può scegliere se l\'opzione deve essere visibile a tutti o se deve essere nascosta agli utenti normali e visibile solo agli utenti autorizzati.';
$string['optionvisible'] = 'Visibile a tutti (impostazione predefinita)';
$string['organizatorname'] = 'Nome dell\'organizzatore';
$string['organizatorname_help'] = 'Puoi inserire il nome dell\'organizzatore manualmente o scegliere da un elenco di organizzatori precedenti.
                                     Puoi scegliere un solo organizzatore. Una volta salvato, l\'organizzatore verrà aggiunto all\'elenco.';
$string['otherbookingaddrule'] = 'Aggiungi nuova regola';
$string['otherbookinglimit'] = 'Limite';
$string['otherbookinglimit_help'] = 'Quanti utenti accetti dall\'opzione. Se 0, puoi accettare utenti illimitati.';
$string['otherbookingnumber'] = 'Numero di utenti';
$string['otherbookingoptions'] = 'Accettare da';
$string['otherbookingsuccessfullysaved'] = 'Regola salvata!';
$string['overridecondition'] = 'Condizione';
$string['overrideconditioncheckbox'] = 'Ha una relazione con altre condizioni';
$string['overrideoperator'] = 'Operatore';
$string['overrideoperator:and'] = 'E';
$string['overrideoperator:or'] = 'O';
$string['paginationnum'] = 'N. di record - impaginazione';
$string['pdflandscape'] = 'Orizzontale';
$string['pdfportrait'] = 'Verticale';
$string['pluginadministration'] = 'Amministrazione delle prenotazioni';
$string['pluginname'] = 'Prenotazione';
$string['pollurl'] = 'URL del sondaggio';
$string['pollurlteachers'] = 'URL sondaggio insegnanti';
$string['pollurlteacherstext'] = 'Messaggio per l\'URL del sondaggio inviato agli insegnanti';
$string['pollurlteacherstextmessage'] = 'Si prega di rispondere al sondaggio:
URL sondaggio: <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Si prega di rispondere al sondaggio';
$string['pollurltext'] = 'Messaggio per l\'invio dell\'URL del sondaggio agli utenti prenotati';
$string['pollurltextmessage'] = 'Si prega di rispondere al sondaggio:

URL del sondaggio: <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Si prega di rispondere al sondaggio';
$string['populatefromtemplate'] = 'Popola dal modello';
$string['potentialsubscribers'] = 'Potenziali abbonati';
$string['presence'] = 'Presenza';
$string['previous'] = 'Precedente';
$string['price'] = 'Prezzo';
$string['pricecategories'] = 'Prenotazione: Categorie di prezzo';
$string['pricecategoriessaved'] = 'Le categorie di prezzo sono state salvate';
$string['pricecategoriessubtitle'] = '<p>Qui è possibile definire diverse categorie di prezzo, ad es.
    categorie di prezzo speciali per studenti, dipendenti o esterni.
    <b>Fate attenzione:</b> Una volta aggiunta una categoria, non è possibile eliminarla.
    È possibile solo disattivarla o rinominarla.</p>';
$string['pricecategory'] = 'Categoria di prezzo';
$string['pricecategoryfield'] = 'Campo del profilo utente per la categoria di prezzo';
$string['pricecategoryfielddesc'] = 'Scegliere il campo del profilo utente, che memorizza l\'identificativo della categoria di prezzo per ogni utente.';
$string['pricecategoryidentifier'] = 'Identificatore della categoria di prezzo';
$string['pricecategoryidentifier_help'] = 'Inserire un breve testo per identificare la categoria, ad esempio "stud" o "acad".';
$string['pricecategoryname'] = 'Nome della categoria di prezzo';
$string['pricecategoryname_help'] = 'Inserire il nome completo della categoria di prezzo da visualizzare nelle opzioni di prenotazione, ad esempio "Prezzo studente".';
$string['pricecatsortorder'] = 'Ordine (numero)';
$string['pricecatsortorder_help'] = 'Inserire un numero intero. "1" significa che la categoria di prezzo verrà visualizzata al primo posto, "2" al secondo posto, ecc.';
$string['pricecurrency'] = 'Valuta';
$string['priceformulaadd'] = 'Valore assoluto';
$string['priceformulaadd_help'] = 'Valore aggiuntivo da <strong>aggiungere</strong> al risultato.';
$string['priceformulaisactive'] = 'Al momento del salvataggio, calcolare i prezzi con la formula del prezzo (questo sovrascriverà i prezzi correnti).';
$string['priceformulamultiply'] = 'Fattore manuale';
$string['priceformulamultiply_help'] = 'Valore aggiuntivo con cui <strong>moltiplicare</strong> il risultato.';
$string['priceformulaoff'] = 'Impedire il ricalcolo dei prezzi';
$string['priceformulaoff_help'] = 'Attivare questa opzione per evitare che la funzione "Calcola tutti i prezzi dall\'istanza con formula" ricalcoli i prezzi per questa opzione di prenotazione.
 con formula" ricalcoli i prezzi per questa opzione di prenotazione.';
$string['problemsofcohortorgroupbooking'] = '<br><p>Non tutti gli utenti possono essere prenotati con la prenotazione di gruppo globale:</p> <ul>
<li>Gli utenti di {$a->notenrolledusers} non sono iscritti al corso</li>
<li>{$a->notsubscribedusers} utenti non hanno prenotato per altri motivi</li>
</ul>';
$string['progressbars'] = 'Barre di avanzamento del tempo trascorso (PRO)';
$string['progressbars_desc'] = 'Ottenere una rappresentazione visiva del tempo già trascorso per un\'opzione di prenotazione.';
$string['progressbarscollapsible'] = 'Rendere le barre di avanzamento collassabili';
$string['proversiononly'] = 'Per utilizzare questa funzione, effettuare l\'aggiornamento a Booking PRO.';
$string['question'] = 'Domanda';
$string['ratings'] = 'Valutazioni delle opzioni di prenotazione';
$string['ratingsuccessful'] = 'Le valutazioni sono state aggiornate con successo';
$string['reason'] = 'Motivo';
$string['recalculateall'] = 'Calcolare tutti i prezzi';
$string['recalculateprices'] = 'Calcolare tutti i prezzi dall\'istanza con la formula';
$string['recreategroup'] = 'Ricrea il gruppo nel corso di destinazione e iscrivi gli utenti nel gruppo';
$string['recurringheader'] = 'Opzioni ricorrenti';
$string['removeafterminutes'] = 'Rimuovi il completamento dell\'attività dopo N minuti';
$string['removeresponses'] = 'Rimuovi tutte le risposte';
$string['removeuseronunenrol'] = 'Rimuovere l\'utente dalla prenotazione al momento della disiscrizione dal corso associato?';
$string['reoccurringdatestring'] = 'Giorno della settimana, ora di inizio e fine (giorno, HH:MM - HH:MM)';
$string['reoccurringdatestring_help'] = 'Immettere un testo nel seguente formato:
    "Giorno, HH:MM - HH:MM", ad esempio "Lunedì, 10:00 - 11:00" o "Domenica 09:00-10:00" o "blocco" per gli eventi bloccati.';
$string['reoccurringdatestringerror'] = 'Immettere un testo nel seguente formato:
    Giorno, HH:MM - HH:MM o "blocco" per gli eventi bloccati.';
$string['repeatthisbooking'] = 'Ripetere questa opzione';
$string['reportfields'] = 'Campi delle risposte scaricabili (csv, xls-Download)';
$string['reportremindersubject'] = 'Promemoria: Il corso prenotato';
$string['reservedusers'] = 'Utenti con prenotazioni a breve termine';
$string['reset'] = 'Ripristina';
$string['responses'] = 'Risposte';
$string['responsesfields'] = 'Campi nella pagina di gestione delle risposte';
$string['responsesto'] = 'Risposte a {$a}';
$string['restrictanswerperiodclosing'] = 'L\'opzione di prenotazione è disponibile fino a una certa data';
$string['restrictanswerperiodopening'] = 'L\'opzione di prenotazione è disponibile solo dopo una certa data.';
$string['resultofcohortorgroupbooking'] = '<p>Questo è il risultato della tua prenotazione di coorte:</p>
<ul>
<li>{$a->sumcohortmembers} utenti trovati nelle coorti selezionate</li>
<li>{$a->sumgroupmembers} utenti trovati nei gruppi selezionati</li>
<li><b>{$a->subscribedusers} utenti dove hanno prenotato per questa opzione</b></li>
</ul>';
$string['rootcategory'] = 'Radice';
$string['roundpricesafterformula'] = 'Prezzi arrotondati (formula dei prezzi)';
$string['roundpricesafterformula_desc'] = '';
$string['saturday'] = 'Sabato';
$string['saveinstanceastemplate'] = 'Aggiungi un\'istanza di prenotazione al modello';
$string['savenewtagtemplate'] = 'Salva';
$string['scgfbookgroupscohorts'] = 'Prenota coorte/i o gruppo/i';
$string['scgfcohortheader'] = 'Iscrizione a coorte';
$string['scgfgroupheader'] = 'Iscrizione a gruppo';
$string['scgfselectcohorts'] = 'Seleziona la/e coorte';
$string['scgfselectgroups'] = 'Seleziona gruppo/i';
$string['search'] = 'Ricerca...';
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
$string['semester'] = 'Semestre';
$string['semesterend'] = 'Ultimo giorno del semestre';
$string['semesterend_help'] = 'Il giorno della fine del semestre';
$string['semesteridentifier'] = 'Identificatore';
$string['semesteridentifier_help'] = 'Testo breve per identificare il semestre, ad esempio "ws22".';
$string['semestername'] = 'Nome';
$string['semestername_help'] = 'Inserire il nome completo del semestre, ad esempio "Semestre invernale 2021/22".';
$string['semesters'] = 'Semestri';
$string['semesterssaved'] = 'I semestri sono stati salvati';
$string['semesterssubtitle'] = 'Qui è possibile aggiungere, modificare o eliminare <strong>semestri e vacanze</strong>.
Dopo il salvataggio, le voci saranno ordinate in base al loro <strong>start date in descending order</strong>';
$string['semesterstart'] = 'Primo giorno del semestre';
$string['semesterstart_help'] = 'Il giorno dell\'inizio del semestre.';
$string['sendmailtobooker'] = 'Pagina "prenota altri utenti": invia un messaggio di posta all\'utente che prenota invece agli utenti che hanno prenotato';
$string['sendmailtobooker_help'] = 'Attiva questa opzione per inviare mail di conferma della prenotazione all\'utente che prenota altri utenti invece che agli utenti che sono stati aggiunti a un\'opzione di prenotazione. Questo è rilevante solo per le prenotazioni effettuate nella pagina "prenota altri utenti".';
$string['sendpollurltoteachers'] = 'Invia URL sondaggio';
$string['sendreminderemail'] = 'Invia e-mail di promemoria';
$string['sendreminderemailsuccess'] = 'L\'e-mail di notifica è stata inviata!';
$string['sessionnotifications'] = 'Notifiche via e-mail per ogni sessione';
$string['sessionremindermailmessage'] = '<p>Tenete presente che: Siete prenotati per la sessione successiva:</p>
<p>{$a->optiontimes}</p>
<p>##########################################</p>
<p>{$a->sessiondescription}</p>
<p>##########################################</p>
<p>Stato della prenotazione: {$a->status}</p>
<p>Partecipante: {$a->participant}</p>';
$string['sessionremindermailsubject'] = 'Promemoria: hai una sessione imminente';
$string['sessions'] = 'Sessione/i';
$string['showcoursenameandbutton'] = 'Mostra il nome del corso, le informazioni brevi e un pulsante che reindirizza alle opzioni di prenotazione disponibili';
$string['showcustomfields'] = 'Campi delle opzioni di prenotazione personalizzate';
$string['showcustomfields_desc'] = 'Seleziona i campi delle opzioni di prenotazione personalizzate da mostrare nel foglio presenza';
$string['showdates'] = 'Visualizza le date';
$string['showdescription'] = 'Visualizza la descrizione';
$string['showinapi'] = 'Visualizza nelle API?';
$string['showlistoncoursepage'] = 'Mostra l\'elenco nella pagina del corso';
$string['showmybookingsonly'] = 'Le mie prenotazioni';
$string['showprogressbars'] = 'Mostra le barre di avanzamento del tempo trascorso';
$string['showviews'] = 'Visualizzazioni da elencare nella panoramica delle opzioni di prenotazione';
$string['signature'] = 'Firma';
$string['signinadddatemanually'] = 'Aggiungere manualmente la data';
$string['signinaddemptyrows'] = 'Aggiungi righe vuote';
$string['signincustfields'] = 'Campi personalizzati del profilo';
$string['signincustfields_desc'] = 'Seleziona i campi personalizzati del profilo da visualizzare nel foglio firme';
$string['signinextracols'] = 'Colonna aggiuntiva';
$string['signinextracols_desc'] = 'Puoi stampare fino a 3 colonne aggiuntive sul foglio firme. Inserisci il titolo della colonna o lascialo vuoto per non aggiungere colonne aggiuntive';
$string['signinextrasessioncols'] = 'Aggiungi colonne supplementari per le date';
$string['signinhidedate'] = 'Nascondi la data';
$string['signinlogo'] = 'Logo da visualizzare sul foglio firme';
$string['signinlogofooter'] = 'Logo nel piè di pagina da visualizzare sul foglio firme';
$string['signinlogoheader'] = 'Logo nell\'intestazione da visualizzare sul foglio firme';
$string['signinonesession'] = 'Visualizza la data o le date nell\'intestazione';
$string['signinsheetaddress'] = 'Indirizzo:';
$string['signinsheetdate'] = 'Data(e):';
$string['signinsheetdatetofillin'] = 'Data:';
$string['signinsheetfields'] = 'Campi del foglio firme (PDF)';
$string['signinsheetlocation'] = 'Luogo:';
$string['spaceleft'] = 'spazio disponibile';
$string['spacesleft'] = 'spazi disponibili';
$string['starttimenotset'] = 'Data di inizio non impostata';
$string['status'] = 'Stato';
$string['statuschangetext'] = 'Messaggio di modifica dello stato';
$string['statuschangetextmessage'] = 'Gentile {$a->participant},

Lo stato della prenotazione è cambiato.

Stato della prenotazione: {$a->status}

Partecipante:   {$a->participant}
Opzione di prenotazione: {$a->title}
Data: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}

Andare all\'opzione di prenotazione: {$a->gotobookingoption}';
$string['statuschangetextsubject'] = 'Lo stato della prenotazione è cambiato per {$a->title}';
$string['studentbooked'] = 'Utenti che hanno prenotato';
$string['studentdeleted'] = 'Utenti già cancellati';
$string['studentnotificationlist'] = 'Utenti nell\'elenco di notifica';
$string['studentwaitinglist'] = 'Utenti in lista d\'attesa';
$string['submitandgoback'] = 'Salva e torna indietro';
$string['subscribersto'] = 'Docenti di \'{$a}\'';
$string['subscribetocourse'] = 'Iscrivi gli utenti al corso';
$string['subscribeuser'] = 'Vuoi iscrivere gli utenti al seguente corso?';
$string['substitutions'] = 'Sostituzione/i';
$string['successfulcalculation'] = 'Calcolo del prezzo riuscito!';
$string['successfulldeleted'] = 'La categoria è stata eliminata.';
$string['sucesfullcompleted'] = 'L\'attività è stata completata correttamente dagli utenti.';
$string['sucesfullytransfered'] = 'Gli utenti sono stati trasferiti correttamente.';
$string['sunday'] = 'Domenica';
$string['tagdeleted'] = 'Il modello di tag è stato eliminato.';
$string['tagsuccessfullysaved'] = 'Il tag è stato salvato.';
$string['tagtag'] = 'Tag';
$string['tagtemplates'] = 'Modelli di tag';
$string['tagtext'] = 'Testo';
$string['taken'] = 'Occupato';
$string['teacher'] = 'Insegnante';
$string['teacherroleid'] = 'Iscrivi il docente al corso con quel ruolo';
$string['teachers'] = 'Docenti';
$string['teachersforoption'] = 'Insegnanti';
$string['teachingreportforinstance'] = 'Rapporto di sintesi sull\'insegnamento per';
$string['teachingreportfortrainer'] = 'Relazione sulle unità didattiche svolte per il formatore';
$string['templatedeleted'] = 'Il modello è stato eliminato.';
$string['templatefile'] = 'File modello';
$string['templatesuccessfullysaved'] = 'Il modello è stato salvato.';
$string['terminated'] = 'Terminato';
$string['textfield'] = 'Inserimento di testo a riga singola';
$string['thisinstance'] = 'Questa istanza di prenotazione';
$string['thursday'] = 'Giovedì';
$string['timecreated'] = 'Orario di creazione';
$string['timerestrict'] = 'Limita la risposta a questo periodo di tempo: questa impostazione è obsoleta e verrà rimossa. Utilizza le impostazioni "Limita accesso" per rendere disponibile l\'attività di prenotazione per un determinato periodo';
$string['titleprefix'] = 'Prefisso';
$string['titleprefix_help'] = 'Aggiungere un prefisso che verrà visualizzato prima del titolo dell\'opzione, ad esempio "BB42".';
$string['to'] = 'a';
$string['toomuchusersbooked'] = 'Il numero massimo di utenti che puoi prenotare è: {$a}';
$string['topic'] = 'Argomento';
$string['transefusers'] = 'Trasferisci utenti';
$string['transfer'] = 'Trasferisci';
$string['transferheading'] = 'Trasferisci gli utenti selezionati all\'opzione di prenotazione selezionata';
$string['transferhelp'] = 'Trasferisci gli utenti che non hanno completato l\'attività dall\'opzione selezionata a {$a}.';
$string['transferoptionsuccess'] = 'L\'opzione di prenotazione e gli utenti sono stati trasferiti correttamente.';
$string['transferproblem'] = 'Quanto segue non può essere trasferito a causa della limitazione dell\'opzione di prenotazione o della limitazione dell\'utente: {$a}';
$string['transfersuccess'] = 'Gli utenti sono stati trasferiti correttamente alla nuova opzione di prenotazione';
$string['tuesday'] = 'Martedì';
$string['undocancelreason'] = 'Volete davvero annullare la cancellazione di questa opzione di prenotazione?';
$string['undocancelthisbookingoption'] = 'Annulla la cancellazione di questa opzione di prenotazione';
$string['units'] = 'Unità';
$string['unlimitedplaces'] = 'Illimitato';
$string['updatebooking'] = 'Modifica questa opzione di prenotazione';
$string['uploadheaderimages'] = 'Immagini di intestazione per le opzioni di prenotazione';
$string['usedinbooking'] = 'Non puoi eliminare questa categoria, perché la stai utilizzando nella prenotazione.';
$string['usedinbookinginstances'] = 'Il modello viene utilizzato nelle seguenti istanze di prenotazione';
$string['usenotificationlist'] = 'Utilizzare l\'elenco delle notifiche';
$string['useraffectedbyevent'] = 'Utente interessato dall\'evento';
$string['usercalendarentry'] = 'Sei prenotato per <a href="{$a}">this session</a>.';
$string['userdownload'] = 'Scarica utenti';
$string['usergavereason'] = '{$a} ha fornito il seguente motivo per la cancellazione:';
$string['userid'] = 'ID utente';
$string['userinfofieldoff'] = 'Nessun campo del profilo utente selezionato';
$string['userleave'] = 'L\'utente ha cancellato la propria prenotazione (inserire 0 per disattivare)';
$string['userleavemessage'] = 'Salve {$a->participant},

Sei stato cancellato da {$a->title}.';
$string['userleavesubject'] = 'Avete annullato la vostra iscrizione a {$a->title}';
$string['usernameofbookingmanager'] = 'Scegli un responsabile delle prenotazioni';
$string['usernameofbookingmanager_help'] = 'Username dell\'utente che verrà visualizzato nel campo "Da" delle notifiche di conferma. Se l\'opzione "Invia e-mail di conferma al gestore della prenotazione" è abilitata, è l\'utente che riceve una copia delle notifiche di conferma.';
$string['usersonlist'] = 'Utente in elenco';
$string['userssuccessfullenrolled'] = 'Tutti gli utenti sono stati iscritti.';
$string['userssuccessfullybooked'] = 'Tutti gli utenti sono stati prenotati nell\'altra opzione di prenotazione.';
$string['userssuccessfullygetnewpresencestatus'] = 'Tutti gli utenti hanno un nuovo stato di presenza.';
$string['userssucesfullygetnewpresencestatus'] = 'Stato di presenza per utenti selezionati aggiornato correttamente';
$string['userwhotriggeredevent'] = 'Utente che ha attivato l\'evento';
$string['viewallresponses'] = 'Gestisci {$a} risposte';
$string['waitinglist'] = 'Lista d\'attesa';
$string['waitinglistenoughmessage'] = 'Ancora abbastanza posti in lista d\'attesa disponibili.';
$string['waitinglistfullmessage'] = 'Nessun posto disponibile in lista d\'attesa.';
$string['waitinglistinfotexts'] = 'Mostra i testi delle informazioni sulla disponibilità per la lista d\'attesa';
$string['waitinglistlowmessage'] = 'Sono rimasti solo pochi posti in lista d\'attesa.';
$string['waitinglistlowpercentage'] = 'Percentuale di messaggi in lista d\'attesa in esaurimento';
$string['waitinglistlowpercentagedesc'] = 'Se i posti disponibili in lista d\'attesa raggiungono o scendono al di sotto di questa percentuale verrà visualizzato un messaggio di lista d\'attesa in esaurimento.';
$string['waitinglisttaken'] = 'In lista d\'attesa';
$string['waitinglistusers'] = 'Utenti in lista d\'attesa';
$string['waitingplacesavailable'] = 'Posti in lista d\'attesa disponibili: {$a->overbookingavailable} of {$a->maxoverbooking}';
$string['waitingtext'] = 'Conferma lista d\'attesa';
$string['waitingtextmessage'] = 'Ora siete in lista d\'attesa per:

{$a->bookingdetails}
<p>##########################################</p>
Stato della prenotazione: {$a->status}
Partecipante:   {$a->participant}

Per visualizzare tutti i corsi prenotati, cliccare sul seguente link: {$a->bookinglink}
Il corso associato è disponibile qui: {$a->courselink}';
$string['waitingtextsubject'] = 'Lo stato della prenotazione per {$a->title} è cambiato';
$string['waitingtextsubjectbookingmanager'] = 'Lo stato della prenotazione per {$a->title} è cambiato';
$string['waitspaceavailable'] = 'Posti in lista d\'attesa disponibili';
$string['wednesday'] = 'Mercoledì';
$string['week'] = 'Settimana';
$string['whichview'] = 'Visualizzazione predefinita per le opzioni di prenotazione';
$string['whichviewerror'] = 'Devi includere la visualizzazione predefinita in: Visualizzazioni da mostrare nella panoramica delle opzioni di prenotazione';
$string['withselected'] = 'Con utenti selezionati:';
$string['wrongdataallfields'] = 'Per favore, compila tutti i campi!';
$string['yes'] = 'Sì';
$string['yourselection'] = 'Your selection';
