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
 * Strings for component 'attendance', language 'it', version '4.1'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = 'Assente';
$string['Eacronym'] = 'G';
$string['Efull'] = 'Giustificato';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'In ritardo';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Presente';
$string['absenteereport'] = 'Report assenze';
$string['acronym'] = 'Acronimo';
$string['add'] = 'Aggiungi';
$string['addedrecip'] = 'Aggiunto {$a} nuovo destinatario';
$string['addedrecips'] = 'Aggiunti {$a} nuovi destinatari';
$string['addmultiplesessions'] = 'Sessioni multiple';
$string['addsession'] = 'Aggiungi sessione';
$string['adduser'] = 'Aggiungi utente';
$string['addwarning'] = 'Aggiungi avviso';
$string['all'] = 'Tutte';
$string['allcourses'] = 'Tutti i corsi';
$string['allowupdatestatus'] = 'Gli studenti possono aggiornare la propria presenza';
$string['allowupdatestatus_desc'] = 'Gli studenti saranno autorizzati ad aggiornare la propria presenza in sessioni dove hanno già registrato la presenza in autonomia.';
$string['allowupdatestatus_help'] = 'Gli studenti saranno autorizzati ad aggiornare la propria presenza in sessioni dove hanno già registrato la presenza in autonomia.';
$string['allpast'] = 'Tutte registrate';
$string['allsessions'] = 'Tutte le sessioni';
$string['allsessionstotals'] = 'Totale delle sessioni selezionate';
$string['attendance:addinstance'] = 'Aggiungere attività Presenze';
$string['attendance:canbelisted'] = 'Essere elencato';
$string['attendance:changeattendances'] = 'Modificare presenze';
$string['attendance:changepreferences'] = 'Modificare preferenze';
$string['attendance:export'] = 'Esportare report';
$string['attendance:import'] = 'Importa sessioni da file (csv)';
$string['attendance:manageattendances'] = 'Gestire presenze';
$string['attendance:managetemporaryusers'] = 'Gestire utenti temporanei';
$string['attendance:manualautomark'] = 'Consentire processo di registrazione manuale';
$string['attendance:takeattendances'] = 'Rilevare presenze';
$string['attendance:view'] = 'Visualizzare presenze';
$string['attendance:viewreports'] = 'Visualizzare report';
$string['attendance:viewsummaryreports'] = 'Visualizzare report di riepilogo del corso';
$string['attendance:warningemails'] = 'Essere sottoscritto a e-mail con utenti assenti';
$string['attendance_already_submitted'] = 'La tua presenza è già stata registrata.';
$string['attendance_no_status'] = 'Non era disponibile uno stato valido: potresti essere in ritardo per registrare la partecipazione.';
$string['attendancedata'] = 'Dati presenze';
$string['attendancefile'] = 'File presenze (formato CSV)';
$string['attendancefile_help'] = 'Il file deve essere in formato CSV con una riga di intestazione e campi per identificare l\'utente e l\'orario di registrazione delle presenza. Es. (email,scantime) o (username,time)';
$string['attendancegrade'] = 'Valutazione presenza';
$string['attendancenotset'] = 'Devi registrare lo stato della tua presenza';
$string['attendancenotstarted'] = 'La registrazione delle Presenze per questo corso non è ancora iniziata';
$string['attendancepercent'] = 'Percentuale di presenze';
$string['attendancereport'] = 'Report delle presenze';
$string['attendanceslogged'] = 'Presenze registrate';
$string['attendancestaken'] = 'Presenze registrate';
$string['attendancesuccess'] = 'Le presenze sono state registrate';
$string['attendanceupdated'] = 'Le presenze sono state aggiornate';
$string['attendanceuserreport'] = 'Report delle presenze';
$string['attforblockdirstillexists'] = 'la vecchia directory mod / attforblock esiste ancora: è necessario eliminare questa directory sul server prima di eseguire l\'aggiornamento.';
$string['attrecords'] = 'Registro presenze';
$string['autoassignstatus'] = 'Seleziona automaticamente lo stato più alto disponibile';
$string['autoassignstatus_help'] = 'Selezionando l\'opzione, agli studenti verrà automaticamente assegnata la valutazione più alta disponibile.';
$string['automark'] = 'Registrazione automatica';
$string['automark_help'] = 'Consente di registrare in automatico le presenze.
Se impostato a "Sì", gli studenti verranno registrati in base al loro primo accesso al corso.
Se impostato a "Imposta non registrato al termine della sessioni", tutti gli studenti che non avranno registrato la propria presenza saranno segnati come non registrati.';
$string['automarkall'] = 'Sì';
$string['automarkclose'] = 'Imposta non registrato al termine della sessione';
$string['automarkingcomplete'] = 'Registrazione automatica completata';
$string['automarkingnotavailableyet'] = 'La sessione è impostata per utilizzare la registrazione automatica delle presenze alla fine della sessione ma la sessione non è ancora terminata.';
$string['automarkingnotenabled'] = 'In questa sessione la registrazione automatica delle presenze non è abilitata';
$string['automarktask'] = 'Controlla le sessioni che richiedono la registrazione automatica';
$string['automarkuseempty'] = 'Gestione della disponibilità degli stati per la registrazione automatica';
$string['automarkuseempty_desc'] = 'Se selezionato, gli stati che hanno il campo "Disponibilità agli" impostato a vuoto o non impostato saranno disponibili durante la registrazione automatica';
$string['autorecorded'] = 'registrato automaticamente dal sistema';
$string['availability'] = 'Disponibilità auto registrazione';
$string['availability_help'] = 'Limita la disponibilità di questo stato.<br>Nel caso in cui si selezioni "Per un tempo limitato", andrà anche indicato il numero di minuti durante i quali lo stato sarà disponibile dopo l\'inizio della sessione. L\'impostazione ha effetto quando gli studenti sono autorizzati a registrare la propria presenza.';
$string['availabilityalways'] = 'Sempre';
$string['availabilitylimitedtime'] = 'Per un tempo limitato';
$string['availabilityno'] = 'No';
$string['availablebeforesession'] = 'Disponibile prima dell\'inizio della sessione';
$string['availablebeforesession_help'] = 'Lo stato che potrà essere scelto prima dell’inizio della sessione quando gli studenti sono autorizzati a registrare la propria presenza.';
$string['averageattendance'] = 'Presenza media';
$string['averageattendancegraded'] = 'Presenza media';
$string['backtoparticipants'] = 'Torna alla lista dei partecipanti';
$string['below'] = 'Sotto {$a}%';
$string['calclose'] = 'Chiudi';
$string['calendarevent'] = 'Crea un evento di calendario per la sessione';
$string['calendarevent_help'] = 'Se abilitato, verrà creato un evento di calendario per questa sessione.
Se disabilitato, tutti gli eventi di calendario esistenti per questa sessione verranno eliminati.';
$string['caleventcreated'] = 'Evento di calendario per la sessione creato correttamente';
$string['caleventdeleted'] = 'Evento di calendario per la sessione eliminato correttamente';
$string['calmonths'] = 'Gennaio,Febbraio,Marzo,Aprile,Maggio,Giugno,Luglio,Agosto,Settembre,Ottobre,Novembre,Dicembre';
$string['calshow'] = 'Seleziona data';
$string['calweekdays'] = 'Do,Lu,Ma,Me,Gi,Ve,Sa';
$string['cannottakeforgroup'] = 'Non è possibile registrare le presenze del gruppo "{$a}"';
$string['cannottakethisgroup'] = 'Non appartieni al gruppo del corso al quale si riferisce la presenza a questa sessione. La presenza non è stata registrata.';
$string['cantaddstatus'] = 'Quando si aggiunge un nuovo stato, è necessario impostare un acronimo e una descrizione .';
$string['canthidestatus'] = 'Non è possibile nascondere questo stato poiché è già utilizzato da questa attivata Presenze';
$string['categoryreport'] = 'Report categoria corso';
$string['changeattendance'] = 'Modifica presenze';
$string['changeduration'] = 'Modifica durata';
$string['changesession'] = 'Cambia sessione';
$string['checkweekdays'] = 'Seleziona i giorni della settimana nei quali, nell\'arco di tempo selezionato, si svolgeranno le sessioni';
$string['closed'] = 'Questa sessione non è al momento disponibile per la registrazione';
$string['column'] = 'colonna';
$string['columnmap'] = 'Mappatura colonne';
$string['columnmap_help'] = 'Per ogni campo elencato, selezionare la relativa colonna del file CSV.';
$string['columns'] = 'colonne';
$string['commonsession'] = 'Tutti gli studenti';
$string['commonsessions'] = 'Tutti gli studenti';
$string['confirm'] = 'Conferma';
$string['confirmcolumnmappings'] = 'Conferma mappatura colonne';
$string['confirmdeletehiddensessions'] = 'Confermi l\'eliminazione di {$a->count} sessioni programmate prima della data di inizio del corso ({$a->date})?';
$string['confirmdeleteuser'] = 'Confermi l\'eliminazione dell\'utente \'{$a->fullname}\' ({$a->email})?<br/>Tutti i relativi dati nel registro presenze saranno definitivamente eliminati.';
$string['copyfrom'] = 'Copia registro presenze da';
$string['countofselected'] = 'Numero selezionati';
$string['course'] = 'Corso';
$string['coursemessage'] = 'Messaggio agli iscritti al corso';
$string['courseshortname'] = 'Titolo abbreviato del corso';
$string['coursesummary'] = 'Report di sintesi del corso';
$string['createmultiplesessions'] = 'Crea sessioni multiple';
$string['createmultiplesessions_help'] = 'Questa funzione consente la creazione di più sessioni con un solo passo.
Le sessioni inizieranno dalla data della sessione base e continueranno fino alla data "ripeti fino al".

* <strong>Ripeti di</strong>: Seleziona i giorni della settimana in cui la classe si riunisce (per esempio, Lunedì/Mercoledì/Venerdì).
* <strong>Ripeti ogni</strong>: Questa opzione consente di stabilire la frequenza. Se la classe si riunisce ogni settimana, selezionare 1; se si riunisce in ogni altra settimana, scegliere 2; ogni terza settimana, sceglere 3, etc.
* <strong>Ripeti fino a</strong>: Seleziona l\'ultimo giorno della classe (l\'ultimo giorno in cui si desidera registrare le presenze).';
$string['createonesession'] = 'Crea una sessione per il corso';
$string['csvdelimiter'] = 'Delimitatore di campo CSV';
$string['currentlyselectedusers'] = 'Utenti attualmente selezionati';
$string['customexportfields'] = 'Esporta i campi personalizzati dell\'utente';
$string['customexportfields_help'] = 'Campi personalizzati dell\'utente da includere nell\'esportazione delle presenze.';
$string['customfields'] = 'Campi personalizzati della sessione';
$string['date'] = 'Data';
$string['days'] = 'Giorni';
$string['defaultdisplaymode'] = 'Visualizzazione di default';
$string['defaults'] = 'Default';
$string['defaultsessionsettings'] = 'Impostazioni di default della sessioni';
$string['defaultsessionsettings_help'] = 'Queste impostazioni definiscono il default di tutte le nuove sessioni';
$string['defaultsettings'] = 'Impostazioni di default delle presenze';
$string['defaultsettings_help'] = 'Queste impostazioni definiscono il default di tutte le nuove registrazioni di presenze';
$string['defaultstatus'] = 'Gruppo di stati di default';
$string['defaultsubnet'] = 'Indirizzo di rete predefinito';
$string['defaultsubnet_help'] = 'La registrazione delle presenze può essere limitata a determinate sottoreti specificando un elenco separato da virgole di indirizzi IP parziali o completi. Questo è il valore di default utilizzato durante la creazione di nuove sessioni.';
$string['defaultview'] = 'Visualizzazione di default all\'accesso';
$string['defaultview_desc'] = 'Questa è la visualizzazione di default visualizzata ai docenti al primo accesso';
$string['defaultwarnings'] = 'Avvisi di default';
$string['defaultwarningsettings'] = 'Impostazioni di default dell\'avviso';
$string['defaultwarningsettings_help'] = 'Queste impostazioni definiscono i valori di default di tutti i nuovi avvisi';
$string['delete'] = 'Elimina';
$string['deletecheckfull'] = 'Sei sicuro di eliminare {$a}, inclusi tutti i dati utente?';
$string['deletedgroup'] = 'Il gruppo associato alla sessione è stato eliminato';
$string['deletehiddensessions'] = 'Elimina tutte le sessioni nascoste';
$string['deletelogs'] = 'Elimina i dati delle presenze';
$string['deleteselected'] = 'Elimina i selezionati';
$string['deletesession'] = 'Elimina lezione';
$string['deletesessions'] = 'Elimina tutte le lezioni';
$string['deleteuser'] = 'Elimina utente';
$string['deletewarningconfirm'] = 'Sei sicuro di eliminare questo avviso?';
$string['deletingsession'] = 'Eliminazione sessioni del corso';
$string['deletingstatus'] = 'Eliminazione stati del corso';
$string['description'] = 'Descrizione';
$string['display'] = 'Visualizza';
$string['displaymode'] = 'Modalità visualizzazione';
$string['donotusepaging'] = 'Non utilizzare la paginazione';
$string['downloadexcel'] = 'Download in formato Excel';
$string['downloadooo'] = 'Download in formato OpenOffice';
$string['downloadtext'] = 'Download in formato testo';
$string['duration'] = 'Durata';
$string['editsession'] = 'Modifica sessione';
$string['edituser'] = 'Modifica utente';
$string['emailcontent'] = 'Contenuto email';
$string['emailcontent_default'] = 'Gentile %userfirstname%,
La tua presenza a %coursename% %attendancename% è scesa sotto il %warningpercent% ed è attualmente %percent% - speriamo vada tutto bene!

Per ottenere il massimo da questo corso devi migliorare la tua presenza. Per favore contattaci se è necessario ulteriore supporto.';
$string['emailcontent_help'] = 'All\'interno degli avvisi inviati agli studenti, è possibile utilizzare i seguenti segnaposto:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Oggetto email';
$string['emailsubject_default'] = 'Avviso sulla presenza';
$string['emailsubject_help'] = 'L\'oggetto utilizzato nella mail di avviso inviata allo studente.';
$string['emailuser'] = 'Invia email agli utenti';
$string['emailuser_help'] = 'Se selezionato, un avviso verrà inviato allo studente.';
$string['emptyacronym'] = 'Gli acronimi vuoti non sono consentiti. Il record non è stato aggiornato.';
$string['emptydescription'] = 'Le descrizioni vuote non sono consentite. Il record non è stato aggiornato.';
$string['enablecalendar'] = 'Crea eventi nel calendario';
$string['enablecalendar_desc'] = 'Consente di creare un evento nel calendario per ogni sessione. Dopo la modifica di questa impostazione lanciare il reset del report del calendario.';
$string['enablewarnings'] = 'Abilita avvisi';
$string['enablewarnings_desc'] = 'Consente di impostare gli avvisi delle presenze e inviare email di notifica agli utenti se la percentuale presenza scende sotto una soglia definita.<br/><strong>ATTENZIONE: Questa è una nuova funzionalità e non è stata verificata completamente. Usatela con consapevolezza e fornite dei riscontri nel forum di Moodle se funziona correttamente.</strong>';
$string['encoding'] = 'Codifica';
$string['encoding_help'] = 'Fa riferimento al tipo di codice a barre utilizzato dal tesserino identificativo degli studenti.
Tipiche tipologie di codici a barre sono Code-39, Code-128 e UPC-A.';
$string['endofperiod'] = 'Fine del periodo';
$string['endtime'] = 'Orario di fine sessione';
$string['enrolmentend'] = 'L\'iscrizione dell\'utente termina il {$a}';
$string['enrolmentstart'] = 'L\'iscrizione dell\'utente inizia il {$a}';
$string['enrolmentsuspended'] = 'Iscrizione sospesa';
$string['enterpassword'] = 'Inserire la password';
$string['error:coursehasnoattendance'] = 'Il corso con il titolo abbreviato {$a} non ha attività di registrazione presenze.';
$string['error:coursenotfound'] = 'Un corso con il titolo abbreviato {$a} non può essere trovato.';
$string['error:qrcode'] = 'Per utilizzare il QR Code si deve permettere agli studenti di registrare la propria presenza! Ignorato.';
$string['error:sessioncourseinvalid'] = 'Una sessione del corso non è valida. Sessione saltata.';
$string['error:sessiondateinvalid'] = 'Una data del corso non è valida. Data saltata.';
$string['error:sessionendinvalid'] = 'Un orario di fine della sessione non è valido. Orario saltato.';
$string['error:sessionstartinvalid'] = 'Un orario di inizio della sessione non è valido. Orario saltato.';
$string['error:statusnotfound'] = 'Non è stato possibile trovare il valore dello stato {$a->status} per l\'utente {$a->extuser}.';
$string['error:timenotreadable'] = 'L\'utente {$a} ha un orario di registrazione che non può essere convertito con strtotime: {$a->scantime}';
$string['error:userduplicate'] = 'L\'importazione dell\'utente {$a} è duplicata. Per favore inserire solo un record per ciascun utente.';
$string['error:usernotfound'] = 'Non è stato possibile trovare un utente con il campo {$a->userfield} impostato a {$a->extuser}';
$string['errorgroupsnotselected'] = 'Seleziona uno o più gruppi';
$string['errorinaddingsession'] = 'Si è verificato un errore durante l\'inserimento della sessione';
$string['erroringeneratingsessions'] = 'Si è verificato un errore durante la creazione delle sessioni';
$string['eventdurationupdated'] = 'Aggiornamento durata della sessione';
$string['eventreportviewed'] = 'Visualizzazione report delle presenze';
$string['eventscreated'] = 'Creazione eventi di calendario';
$string['eventsdeleted'] = 'Eliminazione eventi di calendario';
$string['eventsessionadded'] = 'Inserimento sessione';
$string['eventsessiondeleted'] = 'Eliminazione sessione';
$string['eventsessionipshared'] = 'Conflitto di IP nell\'auto registrazione della presenza';
$string['eventsessionsimported'] = 'Importazione sessione';
$string['eventsessionupdated'] = 'Aggiornamento sessione';
$string['eventstatusadded'] = 'Inserimento stato';
$string['eventstatusupdated'] = 'Aggiornamento sato';
$string['eventstudentattendancesessionsupdated'] = 'Aggiornamento report della sessione';
$string['eventstudentattendancesessionsviewed'] = 'Visualizzazione report della sessione';
$string['eventtaken'] = 'Registrazione presenza';
$string['eventtakenbystudent'] = 'Registrazione presenza da parte dello studente';
$string['export'] = 'Esporta';
$string['extrarestrictions'] = 'Restrizioni aggiuntive';
$string['formattexttype'] = 'Formattazione';
$string['from'] = 'da:';
$string['gradebookexplanation'] = 'Valutazione nel registro valutatore';
$string['gradebookexplanation_help'] = 'Il modulo Presenza visualizza la valutazione delle presenze basata sul punteggio ottenuto fino ad adesso e il punteggio che avresti ottenuto fino ad adesso; non include le sessioni che si svolgeranno in futuro. In Valutazioni, la valutazione delle presenze è basata sulla tua attuale percentuale delle presenze e sul punteggio che puoi ottenere nell\'intera durata del corso. Per tale motivo, la valutazione delle presenze visualizzata nel modulo Presenza e in Valutazioni potrebbero non avere lo stesso punteggio, ma hanno la stessa percentuale.

Per esempio, se hai ottenuto fino ad adesso un punteggio di 8 su 10 (80% di presenze) e la presenza per l\'intero corso vale 50 punti, il modulo Presenza mostrerà 8/10 e Valutazioni mostrerà 40/50. Non hai ancora ottenuto 40 punti ma 40 è il valore del punteggio equivalente all\'80%. Il valore del punteggio ottenuto nel modulo Presenza non può mai diminuire; nelle Valutazioni, invece, il valore visualizzato per le presenze può aumentare o diminuire a seconda delle tue presenze future, in quanto è basato sulle presenze nell\'intero corso.';
$string['graded'] = 'Sessioni valutate';
$string['gridcolumns'] = 'Colonne a griglia';
$string['group'] = 'Gruppo';
$string['groups'] = 'Gruppi';
$string['groupsession'] = 'Gruppi di studenti';
$string['groupsessionsby'] = 'Sessioni di gruppo per';
$string['hiddensessions'] = 'Sessioni nascoste';
$string['hiddensessions_help'] = 'Le sessioni sono nascoste se riportano una data antecedente alla data di inizio del corso.

E\' possibile utilizzare questa funzionalità per nascondere le sessioni più vecchie invece di eliminarle. Nel Registro delle valutazioni verranno visualizzate soltanto le sessioni visibili.';
$string['hiddensessionsdeleted'] = 'Tutte le sessioni nascoste sono state eliminate';
$string['hideextrauserdetails'] = 'Nascondi dettali utente aggiuntivi';
$string['hidensessiondetails'] = 'Nascondi dettagli sesssione';
$string['identifyby'] = 'Identifica lo studente per';
$string['import'] = 'Importa';
$string['importfile'] = 'Importa file';
$string['importfile_help'] = 'Importa file';
$string['importsessions'] = 'Importa sessioni';
$string['importstatus'] = 'Campo stato';
$string['importstatus_help'] = 'Consente di includere lo stato nell\'importazione. Es. valori come P, L o A.';
$string['includeabsentee'] = 'Includi la sessione nel calcolo del report delle assenze';
$string['includeabsentee_help'] = 'Consente di inserire la sessione nel calcolo del report delle assenze.';
$string['includeall'] = 'Seleziona tutte le sessioni';
$string['includedescription'] = 'Includi descrizione della sessione';
$string['includenottaken'] = 'Includi le sessioni non ancora registrate';
$string['includeqrcode'] = 'Includi QR Code';
$string['includeremarks'] = 'Includi note';
$string['incorrectpassword'] = 'Hai inserito una password errata e la tua presenza non è stata registrata. Per favore inserisci una password corretta.';
$string['incorrectpasswordshort'] = 'Password errrata, presenza non registrata';
$string['indetail'] = 'Dettagli...';
$string['indicator:cognitivedepth'] = 'Presenze cognitivo';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente in un\'attività Presenze.';
$string['indicator:cognitivedepthdef'] = 'Presenze cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dalle attività Presenze (Livelli: Nessuna visualizzazione, Visualizzazione)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Presenze sociale';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente in un\'attività Presenze.';
$string['indicator:socialbreadthdef'] = 'Presenze sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dall\\\'attività Presenze (Livelli: Nessuna partecipazione, Partecipazione da solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Devi selezionare un\'azione';
$string['invalidemails'] = 'Devi specificare gli indirizzi degli account utente esistenti, non è possibile trovare: {$a}';
$string['invalidimportfile'] = 'Il formato del file non è valido';
$string['invalidsessionenddate'] = 'La data non può essere antecedente alla data della sessione';
$string['invalidsessionendtime'] = 'L\'orario di fine della sessione deve essere successiva all\'inizio';
$string['invalidstatus'] = 'È stato selezionato uno stato non valido, per favore riprova';
$string['iptimemissing'] = 'I minuti di rilascio non sono validi';
$string['jumpto'] = 'Vai a';
$string['keepsearching'] = 'Continua a cercare';
$string['marksessionimportcsvhelp'] = 'Questa pagina permette di caricare un file CSV contenente l\'identificativo utente e lo stato, che può essere sia l\'acronimo dello stato che l\'orario in cui la presenza è stata registrata. Se viene inserito un orario, allora si proverà ad assegnare lo stato con valore maggiore disponibile per quel momento.';
$string['maxpossible'] = 'Massimo possibile';
$string['maxpossible_help'] = 'Visualizza il punteggio che ogni utente più raggiungere nel caso dovesse ottenere il punteggio massimo nelle sessioni non ancora svolta:
    <ul>
    <li><strong>Punteggio</strong>: massimo punteggio che ogni utente può ottenere in tutte le sessioni.</li>
    <li><strong>Percentuale</strong>: massima percentuale che ogni utente più ottenere in tutte le sessoni.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Percentuale massima possibile';
$string['maxpossiblepoints'] = 'Punteggio massimo possibile';
$string['maxwarn'] = 'Massimo numero di email di avviso';
$string['maxwarn_help'] = 'Il numero massimo di volte che un avviso deve essere inviato (è inviato solo un avviso per sessione).';
$string['mergeuser'] = 'Unisci utente';
$string['messagedselecteduserfailed'] = 'Non è stato possibile inviare messaggi ad uno o più utenti. Per favore abilitare il debug e effettuare le verifiche del caso.';
$string['mobilesessionfrom'] = 'Visualizza sessioni precedenti all\'ultima';
$string['mobilesessionfrom_help'] = 'Consente di ridurre l\'elenco delle sessioni durante la registrazione tramite app. Saranno visualizzate solo le sessioni a partire da questa data.';
$string['mobilesessionto'] = 'Visualizza sessioni future';
$string['mobilesessionto_help'] = 'Consente di ridurre l\'elenco delle sessioni future visualizzate.';
$string['mobilesettings'] = 'Impostazioni della App mobile';
$string['mobilesettings_help'] = 'Impostazioni che controllano il comportamento nella Moodle mobile app';
$string['modulename'] = 'Presenze';
$string['modulename_help'] = 'Il modulo Presenza consente al docente di registrare le presenze degli studenti alle sessioni. Gli studenti potranno visualizzare lo stato delle loro presenze.

Il docente può creare più sessioni in una volta e può registrare lo stato della presenza come "Presente", "Assente", "In ritardo" o "Giustificato" oppure modificare gli stati per adattarli alle proprie esigenze.

I report sono disponibili per l\'intera classe o per i singoli studenti.';
$string['modulenameplural'] = 'Presenze';
$string['months'] = 'Mesi';
$string['moreattendance'] = 'La presenza è stata correttamente registrata in questa pagina';
$string['moveleft'] = 'Sposta a sinistra';
$string['moveright'] = 'Sposta a destra';
$string['multisessionexpanded'] = 'Sessioni multiple espanse';
$string['multisessionexpanded_desc'] = 'Visualizza di default la sezione "Sessioni multiple" già espansa durante la creazione di nuove sessioni.';
$string['mustselectusers'] = 'Devi selezionare gli utenti da esportare';
$string['name'] = 'Nome';
$string['newdate'] = 'Nuova data';
$string['newduration'] = 'Nuova durata';
$string['newstatusset'] = 'Nuovo gruppo di stati';
$string['noabsentstatusset'] = 'Il gruppo di stati in uso non ha uno stato da utilizzare in assenza di registarzione.';
$string['noattendanceusers'] = 'Non è possibile esportare alcun dato perché non ci sono studenti iscritti al corso.';
$string['noattforuser'] = 'Non ci sono presenze registrate per questo utente';
$string['noautomark'] = 'Disabilitato';
$string['nocapabilitytotakethisattendance'] = 'Hai tentato di modificare la presenza della sessione con cmid {$a} ma non sei autorizzato a modificrla.';
$string['nodescription'] = 'Sessione normale di classe';
$string['noeventstoreset'] = 'Non ci sono eventi di calendario che richiedono un aggiornamento';
$string['nogroups'] = 'L\'attività è stata impostata per utilizzare i gruppi, ma non esistono gruppi nel corso.';
$string['noguest'] = 'Gli ospiti non possono visualizzare le presenze';
$string['noofdaysabsent'] = 'Giorni di assenza';
$string['noofdaysexcused'] = 'Giorni giustificati';
$string['noofdayslate'] = 'Ritardi';
$string['noofdayspresent'] = 'Giorni di presenza';
$string['nosessiondayselected'] = 'Non è stato selezionato il giorno della sessione';
$string['nosessionexists'] = 'Non esistono sessioni in questo corso';
$string['nosessionsselected'] = 'Nessuna sessione selezionata';
$string['notfound'] = 'Per poter utilizzare questo blocco è necessario aggiungere al corso almeno un\'attività Presenze.';
$string['notifytask'] = 'Invio avvisi agli utenti';
$string['notmember'] = 'non&nbsp;membro';
$string['notset'] = 'non impostato';
$string['noupgradefromthisversion'] = 'Il modulo Presenze non può aggiornarsi dalla versione di attfroblock installata. Per favore eliminare attforblock o aggiornalo all\'ultima versione prima di installare questa versione del modulo Presenze.';
$string['numsessions'] = 'Numero di sessioni';
$string['numsessionstaken'] = 'Numero di sessioni presenziate';
$string['olddate'] = 'Data precedente';
$string['onactivitycompletion'] = 'Al completamento dell\'attività';
$string['onlyselectedusers'] = 'Esporta utenti specifici';
$string['overallsessions'] = 'Su tutte le sessioni';
$string['overallsessions_help'] = 'Visualizza le statistiche di tutte le sessioni, incluse quelle che non si sono svolte (passate e future):
    <ul>
    <li><strong>Lezioni</strong>: numero totale delle sessioni.</li>
    <li><strong>Punteggio</strong>: punteggio assegnato nelle sessioni svolte.</li>
    <li><strong>Percentuale</strong>: percentuale dei punteggi assegnati su il massimo possibile punteggio per tutte le sessioni.</li>
    </ul>';
$string['oversessionstaken'] = 'Statistiche sessioni';
$string['oversessionstaken_help'] = 'Visualizza le statistiche per sessioni in cui è stata presa la presenza:
    <ul>
    <li><strong>Lezioni</strong>: numero totale delle sessioni svolte.</li>
    <li><strong>Punteggio</strong>: punteggio assegnato nelle sessioni svolte.</li>
    <li><strong>Percentuale</strong>: percentuale dei punteggi assegnati su il massimo possibile punteggio per le sessioni svolte.</li>
    </ul>';
$string['pageof'] = 'Pagina {$a->page} di {$a->numpages}';
$string['participant'] = 'Partecipante';
$string['password'] = 'Password';
$string['passwordgrp'] = 'Password studente';
$string['passwordgrp_help'] = 'Se impostata, gli studenti dovranno inserire una password per poter registrare la propria presenza alla sessione. Se il campo non è compilato, non sarà richiesta nessuna password.';
$string['passwordheader'] = 'Utilizzare la password elencata sotto per registrare la propria presenza';
$string['passwordrequired'] = 'Devi inserire la password della sessione prima di poter registrare la tua presenza.';
$string['percentage'] = 'Percentuale';
$string['percentageallsessions'] = 'Percentuale su tutte le sessioni';
$string['percentagesessionscompleted'] = 'Percentuale sulle sessioni già registrate';
$string['pluginadministration'] = 'Amministrazione Presenze';
$string['pluginname'] = 'Presenze';
$string['points'] = 'Punteggio';
$string['pointsallsessions'] = 'Punteggio su tutte le sessioni';
$string['pointssessionscompleted'] = 'Punteggio sulle sessione già registrate';
$string['preferences_desc'] = 'Le correzioni ai gruppi di stati avranno effetto sulle sessioni esistenti e potrebbero influire sulle valutazioni.';
$string['preventsharederror'] = 'La registrazione della presenza è stata disabilitata perché questo dispositivo è già stato usato per registrare la presenza di un altro utente.';
$string['preventsharedip'] = 'Impedisci agli studenti di utilizzare un indirizzo IP condiviso.';
$string['preventsharedip_help'] = 'Impedisci agli studenti di utilizzare lo stesso dispositivo (identificato mediante indirizzo IP) per registrare la presenza di altri studenti.';
$string['preventsharediptime'] = 'Tempo per consentire il riutilizzo dell\'indirizzo IP (minuti)';
$string['preventsharediptime_help'] = 'Consenti di riutilizzare l\'indirizzo IP per la registrazione della presenza dopo che questo tempo è trascorso.';
$string['preview'] = 'Anteprima file';
$string['previewhtml'] = 'Anteprima in formato HTML';
$string['priorto'] = 'La data della sessione è antecedente alla data di inizio del corso ({$a}) quindi le nuove sessioni programmate prima di questa data saranno nascoste  e quindi non accessibili. Nelle impostazioni del corso è possibile cambiare la data di inizio del corso in ogni momento in modo da avere avere accesso alle lezioni nascoste.<br><br>Per favore cambiare la data della lezione o cliccare ancora il pulsante "Aggiungi" per confermare.';
$string['privacy:metadata:attendancelog'] = 'Log delle registrazioni delle presenze dell\'utente.';
$string['privacy:metadata:attendancesessions'] = 'Sessioni dove è stata registrata la presenza.';
$string['privacy:metadata:attendancewarningdone'] = 'log degli avvisi inviati agli utenti in base alle informazioni di presenza.';
$string['privacy:metadata:duration'] = 'Durata della sessione in secondi.';
$string['privacy:metadata:groupid'] = 'ID del gruppo associato alla sessione.';
$string['privacy:metadata:ipaddress'] = 'Indirizzo IP da cui è stata registrata la presenza.';
$string['privacy:metadata:lasttaken'] = 'Orario di registrazione della presenza.';
$string['privacy:metadata:lasttakenby'] = 'ID dell\'ultimo utente che ha registrato la propria presenza';
$string['privacy:metadata:notifyid'] = 'ID della sessione a cui l\'avviso è associato.';
$string['privacy:metadata:remarks'] = 'Commenti sulla presenza di un utente.';
$string['privacy:metadata:sessdate'] = 'Orario di inizio di una sessione .';
$string['privacy:metadata:sessionid'] = 'ID della sessione.';
$string['privacy:metadata:statusid'] = 'ID dello stato della presenza dello studente.';
$string['privacy:metadata:statusset'] = 'Gruppo di stati a cui appartiene l\'ID di stato.';
$string['privacy:metadata:studentid'] = 'ID dello studente a cui è stata registrata la presenza.';
$string['privacy:metadata:takenby'] = 'ID dell\'utente che ha registrato la presenza dello studente.';
$string['privacy:metadata:timemodified'] = 'Orario di ultima modifica della sessione';
$string['privacy:metadata:timesent'] = 'Orario di invio dell\'avviso';
$string['privacy:metadata:timetaken'] = 'Orario di registrazione della presenza dello studente';
$string['privacy:metadata:userid'] = 'ID dell\'utente a cui inviare l\'avviso.';
$string['processingfile'] = 'Elaborazione file';
$string['qr_cookie_error'] = 'La sessione QR è scaduta.';
$string['qr_pass_wrong'] = 'La password QR è errata o scaduta.';
$string['qrcode'] = 'QR Code';
$string['qrcodeandpasswordheader'] = 'Inquadrare il codice QR sottostante o utilizzare la password fornita per registrare la propria presenza';
$string['qrcodeheader'] = 'Inquadrare il codice QR sottostante per registrare la propria presenza';
$string['qrcodevalidafter'] = 'secondi';
$string['qrcodevalidbefore'] = 'Validità del codice QR:';
$string['randompassword'] = 'Password casuale';
$string['remark'] = 'Nota per: {$a}';
$string['remarks'] = 'Note';
$string['repeatasfollows'] = 'Ripeti la sessione come impostato di seguito';
$string['repeatevery'] = 'Ripeti ogni';
$string['repeaton'] = 'Ripeti il';
$string['repeatuntil'] = 'Ripeti fino al';
$string['report'] = 'Report';
$string['reportsessiondate'] = 'Data della sezione';
$string['reportsessionduration'] = 'Durata della sezione';
$string['reportsessionlasttaken'] = 'Orario di ultima frequenza della sessione (docente)';
$string['required'] = 'Obbligatorio*';
$string['requiredentries'] = 'Gli elementi temporanei sovrascriveranno le presenze dell\'utente';
$string['requiredentry'] = 'Guida di aiuto per l\'unione degli utenti temporanei';
$string['requiredentry_help'] = '<p align="center"><b>Presenze</b></p>
<p align="left"><strong>Unione utenti</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Utente Moodle</th>
<th>Utente temporaneo</th>
<th>Azione</th>
</tr>
<tr>
<td>Dati di presenza</td>
<td>Dati di presenza</td>
<td>L\'utente temporaneo sovrascriverà l\'utente Moodle</td>
</tr>
<tr>
<td>Nessun dato di presenza</td>
<td>Dati di presenza</td>
<td>La presenza dell\'utente temporanea verranno trasferite all\'utente Moodle</td>
</tr>
<tr>
<td>Dati di presenza</td>
<td>Nessun dato di presenza</td>
<td>L\'utente temporaneo verrà cancellato</td>
</tr>
<tr>
<td>Nessun dato di presenza</td>
<td>Nessun dato di presenza</td>
<td>L\'utente temporaneo verrà cancellato</td>
</tr>
</table>

</p>
<p align="left"><strong>L\'utente temporaneo verrà comunque cancellato dopo l\'unione</strong></p>';
$string['requiresubnet'] = 'Richiedi indirizzi di rete';
$string['requiresubnet_help'] = 'La registrazione della presenza può essere ristretta a particolari sottoreti, specificando un elenco separato da virgole di indirizzi IP, sia completi sia parziali.';
$string['resetcaledarcreate'] = 'Gli eventi di calendario sono stati abilitati ma alcune sessioni non hanno eventi. Si desidera creare gli eventi di calendario per tutte le sessioni esistenti?';
$string['resetcaledardelete'] = 'Gli eventi di calendario sono stati disabilitati ma alcune sessioni  hanno eventi che andrebbero eliminati. Si desidera eliminare tutti questi eventi?';
$string['resetcalendar'] = 'Ripristina calendario';
$string['resetdescription'] = 'Ricordare che eliminando le presenze, queste verranno eliminate definitivamente dal database. E\' anche possibile nascondere le vecchie lezioni cambiando la data di inizio nelle impostazioni del corso.';
$string['resetstatuses'] = 'Riporta gli stati al loro default';
$string['restoredefaults'] = 'Ripristina valori predefiniti';
$string['resultsperpage'] = 'Risultati per pagina';
$string['resultsperpage_desc'] = 'Numero di studenti visualizzati per pagina';
$string['rotateqrcode'] = 'Ruota codice QR';
$string['rotateqrcode_cleartemppass_task'] = 'Elaborazione che elimina le password temporanee generate per la funzionalità di aggiornamento del QR Code.';
$string['rotateqrcodeexpirymargin'] = 'Tempo di scadenza del QR Code / Password (in secondi).';
$string['rotateqrcodeexpirymargin_desc'] = 'Dopo quanto tempo (in secondi) il QR Code / Password sarà considerato scaduto.';
$string['rotateqrcodeinterval'] = 'Intervallo di aggiornamento del QR Code / Password (in secondi).';
$string['rotateqrcodeinterval_desc'] = 'L\'intervallo di aggiornmto del QR Code/Password (in secondi).';
$string['save'] = 'Salva presenze';
$string['saveandshownext'] = 'Salva e visualizza pagina seguente';
$string['scantime'] = 'Orario di scansione';
$string['scantime_help'] = 'Consente di includere il timestamp nel file di importazione. Il timestamp sarà convertito dalla funzione PHP strtotime per poi usarlo nella registrazione della presenza dell\'utente e per assegnare lo stato corretto.';
$string['search:activity'] = 'Presenze - informazioni attività';
$string['selectactivity'] = 'Seleziona attività';
$string['session'] = 'Sessione';
$string['session_help'] = 'Sessione';
$string['sessionadded'] = 'Sessione aggiunta correttamente';
$string['sessionalreadyexists'] = 'In questa data è già presente una lezione.';
$string['sessiondate'] = 'Data';
$string['sessiondays'] = 'Giorni della sessione';
$string['sessiondeleted'] = 'Sessione eliminata correttamente';
$string['sessiondescription'] = 'Descrizione sessione';
$string['sessionduplicate'] = 'Esiste una sessione duplicata nel corso {$a->course} per l\'attività {$a->activity}, {$a->date}';
$string['sessionexist'] = 'La sessioen non è stata aggiunta poiché è già esistente.';
$string['sessiongenerated'] = 'Una sessione è stata generata correttamente';
$string['sessions'] = 'Sessioni';
$string['sessionsallcourses'] = 'Tutti i corsi';
$string['sessionsbyactivity'] = 'Istanza di attività Presenze';
$string['sessionsbycourse'] = 'Corso';
$string['sessionsbydate'] = 'Settimana';
$string['sessionscompleted'] = 'Sessioni frequenatte';
$string['sessionscurrentcourses'] = 'Corsi attuali';
$string['sessionsgenerated'] = '{$a} sessioni sono state create correttamente';
$string['sessionsids'] = 'ID delle sessioni';
$string['sessionsnotfound'] = 'Non sono presenti sessioni in questo intervallo di tempo';
$string['sessionstartdate'] = 'Data inizio della sessione';
$string['sessionstotal'] = 'Numero totale delle sessioni';
$string['sessionsupdated'] = 'Sessioni aggiornate';
$string['sessiontype'] = 'Tipo di sessione';
$string['sessiontype_help'] = 'Le sessioni possono essere di due tipi: comuni e di gruppo. La possibilità di aggiungere differenti tipi dipende dalla modalità gruppo dell\'attività.

* Nella modalità "Senza gruppi" è possibile aggiungere solo sessioni comuni.
* Nella modalità "Gruppi visibili" è possibile aggiungere sessioni di gruppo o lezioni comuni.
* Nella modalità "Gruppi separati" è possibile aggiungere soltanto sessioni di gruppo.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionunknowngroup'] = 'Una sessione utilizza un gruppo sconosciuto: {$a}';
$string['sessionupdated'] = 'Sessione aggiornata correttamente';
$string['set_by_student'] = 'Autoregistrato';
$string['setallstatuses'] = 'Imposta lo stato per tutti gli utenti';
$string['setallstatusesto'] = 'Imposta lo stato per tutti gli utenti a «{$a}»';
$string['setperiod'] = 'Tempo (in minuti) per il rilascio dell\'IP';
$string['settings'] = 'Impostazioni';
$string['setunmarked'] = 'Imposta automaticamente come non registrato';
$string['setunmarked_help'] = 'Se abilitato per la sessione, sarà impostato questo stato quando uno studente non ha registrato la propria presenza.';
$string['showdefaults'] = 'Visualizza i default';
$string['showduration'] = 'Visualizza durata';
$string['showextrauserdetails'] = 'Visualizza ulteriori dettagli dell\'utente';
$string['showqrcode'] = 'Visualizza il QR Code';
$string['showsessiondescriptiononreport'] = 'Visualizza la descrizione della sessione nel report';
$string['showsessiondescriptiononreport_desc'] = 'Visualizza la descrizione della sessione nell\'elenco dei report delle presenze';
$string['showsessiondetails'] = 'Visualizza dettagli della sessione';
$string['somedisabledstatus'] = '(Alcune opzioni sono state rimosse dopo l\'inizio della sessione)';
$string['sortedgrid'] = 'Tabella';
$string['sortedlist'] = 'Elenco';
$string['startofperiod'] = 'A partire da';
$string['starttime'] = 'Orario di inizio';
$string['status'] = 'Stato';
$string['statusall'] = 'tutti';
$string['statusdeleted'] = 'Stato eliminato';
$string['statuses'] = 'Stati';
$string['statusset'] = 'Gruppo di stati {$a}';
$string['statussetsettings'] = 'Gruppi di stati';
$string['statustotalcount'] = 'Stati {$a} - Numero totale';
$string['statustotalcountcurrentweek'] = 'Stati {$a} - Numero totale della settimana corrente';
$string['statustotalcountpreviousweek'] = 'Stati {$a} - Numero totale della settimana precedente';
$string['statusunselected'] = 'non selezionato';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID studente';
$string['studentmarked'] = 'La tua presenza a questa sessione è stata registrata.';
$string['studentmarking'] = 'Registrazione studente';
$string['studentpassword'] = 'Password studente';
$string['studentrecordingexpanded'] = 'Registrazione studente espansa';
$string['studentrecordingexpanded_desc'] = 'Visualizza la sezione "Registrazione studente" già espansa nella creazione di nuove sessioni.';
$string['studentscanmark'] = 'Consenti agli studenti di registrare la loro presenza';
$string['studentscanmark_desc'] = 'Se selezionato, i docenti potranno consentire agli studenti di registrare la propria presenza.';
$string['studentscanmark_help'] = 'Se selezionato, gli studenti potranno modificare lo stato della loro presenza alla sessione.';
$string['studentscanmarksessiontime'] = 'Registrazione della presenza durante le sessioni';
$string['studentscanmarksessiontime_desc'] = 'Se selezionato, gli studenti potranno registrare la propria presenza soltanto durante le sessioni.';
$string['studentscanmarksessiontimeend'] = 'Fine della sessione (minuti)';
$string['studentscanmarksessiontimeend_desc'] = 'Se la sessione non ha un orario di fine, consente di impostare per quanti minuti lasciare disponibile la registrazione della presenza alla sessione.';
$string['studentsearlyopentime'] = 'Apri registrazioni in anticipo';
$string['studentsearlyopentime_help'] = 'I docenti possono consentire la registrazione della presenza in anticipo rispetto all’inizio della sessione.';
$string['submit'] = 'Registra';
$string['submitattendance'] = 'Registra presenza';
$string['submitpassword'] = 'Invia password';
$string['subnet'] = 'Sottorete';
$string['subnetactivitylevel'] = 'Consenti configurazione sottorete a livello di attività';
$string['subnetactivitylevel_desc'] = 'Se abilitato, i docenti potranno sovrascrivere l\'impostazione della sottorete a livello di attività al momento della creazione. In caso contrario,  sarà utilizzato il default previsto per la creazione delle sessioni.';
$string['subnetwrong'] = 'La presenza potrà essere registrata solamente da specifici luoghi e questo computer non è nella lista dei luoghi abilitati.';
$string['summary'] = 'Riepilogo';
$string['tablerenamefailed'] = 'Non è andata a bon fine la rinomina della vecchia tabella attforblock in attendance';
$string['tactions'] = 'Azione';
$string['takeattendance'] = 'Registra presenza';
$string['takensessions'] = 'Sessioni frequentate';
$string['tcreated'] = 'Creato';
$string['tempaddform'] = 'Aggiungi utente temporaneo';
$string['tempexists'] = 'Esiste già un utente temporaneo con questo indirizzo e-mail';
$string['temptable'] = 'Elenco degli utenti temporanei';
$string['tempuser'] = 'Utente temporaneo';
$string['tempusermerge'] = 'Unisci utente temporaneo';
$string['tempusers'] = 'Utenti temporanei';
$string['tempusersedit'] = 'Modifica utente temporaneo';
$string['tempuserslist'] = 'Utenti temporanei';
$string['thirdpartyemails'] = 'Notifica gli altri utenti';
$string['thirdpartyemails_help'] = 'Lista degli altri utenti ai quali verrò inviata la notifica. (richiede l\'autorizzazione mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Avviso sulla presenza';
$string['thirdpartyemailtext'] = 'La presenza di {$a->firstname} {$a->lastname} in {$a->coursename} {$a->aname} è minore di {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Stai ricevendo questa comunicazione perché il docente di questo corso ha aggiunto la tua email nella lista dei destinatari';
$string['thiscourse'] = 'Questo corso';
$string['time'] = 'Orario';
$string['timeahead'] = 'Non è possibile creare sessioni multiple che oltrepassano l\'anno. Per favore correggere le date di inizio e di fine.';
$string['timemodified'] = 'Orario di modifica';
$string['timetaken'] = 'Orario di registrazione della presenza';
$string['to'] = 'a:';
$string['todate'] = 'fino a';
$string['totalnumsessions'] = 'Numero totale delle sessioni';
$string['triggered'] = 'Prima notifica';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Nome e cognome';
$string['ungraded'] = 'Sessioni non valutate';
$string['unknowngroup'] = 'Gruppo sconosciuto';
$string['unknownstatus'] = 'ID sconosciuto dello stato: {$a}';
$string['update'] = 'Aggiorna';
$string['updateattendance'] = 'Aggiorna presenza';
$string['uploadattendance'] = 'Importa presenze da CSV';
$string['usedefaultsubnet'] = 'Utilizza i valori di default';
$string['usemessageform'] = 'o utilizza i campi sottostanti per invaire un messaggio agli studenti selezionati';
$string['userexistingstatus'] = 'La tua presenza è già stata registrata come <strong>{$a}</strong>. In caso di necessità, cambiare lo stato tramite il modulo sottostante.';
$string['userexists'] = 'Esiste già un utente con questo indirizzo e-mail';
$string['userid'] = 'ID utente';
$string['userimportfield'] = 'Campo utente esterno';
$string['userimportfield_help'] = 'Campo nel file CSV contenente l\'identificativo dell\'utente';
$string['userimportto'] = 'Campo utente Moodle';
$string['userimportto_help'] = 'Campo Moodle da mapapre ai dati nel file CSV';
$string['users'] = 'Utenti da esportare';
$string['usersessiongrade'] = 'Valutazione della sessione dell\'utente';
$string['usersessionremarks'] = 'Commenti alla sessione dell\'utente';
$string['usersessiontaken'] = 'Presenza dell\'utente alla sessione';
$string['userstatus'] = 'Stato della sessione dell\'utente';
$string['usestatusset'] = 'Utilizza il gruppo di stati';
$string['variable'] = 'variabile';
$string['variablesupdated'] = 'Variabili aggiornate correttamente';
$string['versionforprinting'] = 'versione stampabile';
$string['viewmode'] = 'Modalità visualizzazione';
$string['warnafter'] = 'Numero di sessioni frequentate prima dell\'avviso';
$string['warnafter_help'] = 'Gli avvisi saranno attivati solo se all\'utente è stata registrata la presenza per almeno questo numero di sessioni.';
$string['warningdeleted'] = 'Avvertimento cancellato';
$string['warningdesc'] = 'Questi avvisi saranno aggiunti automaticamente alle nuove attività di presenza. Se è attivo più di un avviso allo stesso momento, sarà inviato solamente l\'avviso con soglia di attenzione più bassa.';
$string['warningdesc_course'] = 'Le soglie di avviso si basano sul report delle assenze e consentono agli studenti o ad altri utenti di essere avvertiti. Se è attivo più di un avviso allo stesso momento, sarà inviato solamente l\'avviso con soglia di attenzione più bassa.';
$string['warningfailed'] = 'Non è possibile creare un nuovo avviso che usa la stessa percentuale e numero di sessioni di uno già esistente.';
$string['warningpercent'] = 'Avvisa se la percentuale scende sotto la soglia';
$string['warningpercent_help'] = 'L\'avviso sarà inviato se la percentuale complessiva scenderà sotto la soglia impostata.';
$string['warnings'] = 'Gruppo di avvisi';
$string['warningthreshold'] = 'Soglia di avviso';
$string['warningupdated'] = 'Avvisi aggiornati';
$string['week'] = 'Settimana(e)';
$string['weekcommencing'] = 'Inizio della settimana';
$string['weeks'] = 'Settimane';
$string['youcantdo'] = 'Non puoi fare nulla';
