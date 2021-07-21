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
 * Strings for component 'attendance', language 'it', version '3.11'.
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
$string['addedrecip'] = 'Aggiunti {$a} nuovo destinatario';
$string['addedrecips'] = 'Aggiunti {$a} nuovi destinatari';
$string['addmultiplesessions'] = 'Aggiungi più lezioni';
$string['addsession'] = 'Aggiungi lezione';
$string['adduser'] = 'Aggiungi utente';
$string['addwarning'] = 'Aggiungi avviso';
$string['all'] = 'Tutte';
$string['allcourses'] = 'Tutti i corsi';
$string['allpast'] = 'Tutte registrate';
$string['allsessions'] = 'Tutte le lezioni';
$string['allsessionstotals'] = 'Totale lezioni selezionate';
$string['attendance:addinstance'] = 'Aggiungere attività Presenze';
$string['attendance:canbelisted'] = 'Essere elencato';
$string['attendance:changeattendances'] = 'Modificare presenze';
$string['attendance:changepreferences'] = 'Modificare preferenze';
$string['attendance:export'] = 'Esportare report';
$string['attendance:manageattendances'] = 'Gestire presenze';
$string['attendance:managetemporaryusers'] = 'Gestire utenti temporanei';
$string['attendance:takeattendances'] = 'Rilevare presenze';
$string['attendance:view'] = 'Visualizzare presenze';
$string['attendance:viewreports'] = 'Visualizzazione Report';
$string['attendance:viewsummaryreports'] = 'Visualizza i report di riepilogo del corso';
$string['attendance:warningemails'] = 'Può essere sottoscritto a e-mail con utenti assenti';
$string['attendance_already_submitted'] = 'Non puoi registrare una presenza che è già stata registrata.';
$string['attendance_no_status'] = 'Non era disponibile uno stato valido: potresti essere in ritardo per registrare la partecipazione.';
$string['attendancedata'] = 'Dati presenze';
$string['attendancefile'] = 'File presenze (formato CSV)';
$string['attendancefile_help'] = 'Il file deve essere in formato CSV con una riga di intestazione e campi per identificare l\'utente e l\'orario di registrazione delle presenza. Es. (email,scantime) o (username,time)';
$string['attendanceforthecourse'] = 'Presenze al corso';
$string['attendancegrade'] = 'Valutazione presenza';
$string['attendancenotset'] = 'Devi registrare lo stato della tua presenza';
$string['attendancenotstarted'] = 'La registrazione delle Presenze per questo corso non è ancora iniziata';
$string['attendancepercent'] = 'Percentuale di presenze';
$string['attendancereport'] = 'Report delle presenze';
$string['attendanceslogged'] = 'Presenze registrate';
$string['attendancestaken'] = 'Presenze prese';
$string['attendancesuccess'] = 'Le presenze sono state registrate';
$string['attendanceupdated'] = 'Le presenze sono state aggiornate';
$string['attforblockdirstillexists'] = 'la vecchia directory mod / attforblock esiste ancora: è necessario eliminare questa directory sul server prima di eseguire l\'aggiornamento.';
$string['attrecords'] = 'Registro presenze';
$string['autoassignstatus'] = 'Seleziona automaticamente lo stato più alto disponibile';
$string['autoassignstatus_help'] = 'Selezionando l\'opzione, agli studenti verrà automaticamente assegnato il voto più alto disponibile.';
$string['automark'] = 'Registrazione automatica';
$string['automark_help'] = 'Permette di registrare le presenze in automatico.
Se impostato a "Sì", gli studenti verranno registrati in base al loro primo accesso al corso.
Se impostato a "Imposta non registrato al termine della lezione", tutti gli studenti che non avranno registrato la propria presenza saranno segnati come non registrati.';
$string['automarkall'] = 'Sì';
$string['automarkclose'] = 'Imposta non registrato al termine della lezione';
$string['automarktask'] = 'Controlla le lezioni che richiedono la registrazione automatica';
$string['autorecorded'] = 'sistema registrato automaticamente';
$string['averageattendance'] = 'Presenza media';
$string['averageattendancegraded'] = 'Presenza media';
$string['backtoparticipants'] = 'Torna alla lista dei partecipanti';
$string['below'] = 'Sotto {$a}%';
$string['calclose'] = 'Chiudi';
$string['calendarevent'] = 'Crea un evento di calendario per la lezione';
$string['calendarevent_help'] = 'Se abilitato, verrà creato un evento di calendario per questa lezione.
Se disabilitato, tutti gli eventi di calendario esistenti per questa lezione verranno eliminati.';
$string['caleventcreated'] = 'Evento di calendario per la lezione creato correttamente';
$string['caleventdeleted'] = 'Evento di calendario per la lezione eliminato correttamente';
$string['calmonths'] = 'Gennaio,Febbraio,Marzo,Aprile,Maggio,Giugno,Luglio,Agosto,Settembre,Ottobre,Novembre,Dicembre';
$string['calshow'] = 'Scegli data';
$string['caltoday'] = 'Oggi';
$string['calweekdays'] = 'Do,Lu,Ma,Me,Gi,Ve,Sa';
$string['cannottakeforgroup'] = 'Non puoi registrare le presenze per il gruppo "{$a}"';
$string['cantaddstatus'] = 'È necessario impostare un acronimo e una descrizione quando si aggiunge un nuovo stato.';
$string['categoryreport'] = 'Report categoria corso';
$string['changeattendance'] = 'Modifica presenze';
$string['changeduration'] = 'Modifica durata';
$string['changesession'] = 'Cambia lezione';
$string['checkweekdays'] = 'Seleziona i giorni della settimana in cui, nell\'arco di tempo selezionato, si svolgeranno le lezioni';
$string['closed'] = 'Questa sessione non è attualmente disponibile per la registrazione';
$string['column'] = 'colonna';
$string['columnmap'] = 'Associazione colonne';
$string['columnmap_help'] = 'Per ogni campo presentato, seleziona la relativa colonna del file CSV.';
$string['columns'] = 'colonne';
$string['commonsession'] = 'Comune';
$string['commonsessions'] = 'Comuni';
$string['confirm'] = 'Conferma';
$string['confirmcolumnmappings'] = 'Conferma mappatura colonna';
$string['confirmdeletehiddensessions'] = 'Confermi l\'eliminazione di {$a->count} sessioni programmate prima della data di inizio del corso ({$a->date})?';
$string['confirmdeleteuser'] = 'Confermi l\'eliminazione dell\'utente \'{$a->fullname}\' ({$a->email})?<br/>Tutti i relativi dati nel registro presenze saranno definitivamente eliminati.';
$string['copyfrom'] = 'Copia registro presenze da';
$string['countofselected'] = 'Numero selezionati';
$string['course'] = 'Corso';
$string['coursemessage'] = 'Messaggio agli iscritti al corso';
$string['courseshortname'] = 'Nome abbreviato del corso';
$string['coursesummary'] = 'Rapporto di sintesi del corso';
$string['createmultiplesessions'] = 'Crea più lezioni';
$string['createmultiplesessions_help'] = 'Questa funzione consente la creazione di più lezioni con un solo semplice passo.
Le lezioni iniziano dalla data della lezione base e continuano fino alla data "ripeti fino a".

* <strong>Ripeti di</strong>: Seleziona i giorni della settimana in cui la tua classe si riunisce (per esempio, Lunedì/Mercoledì/Venerdì).
* <strong>Ripeti ogni</strong>: Questa opzione consente di stabilire la frequenza. Se la tua classe si riunisce ogni settimana, seleziona 1; se si riunisce in ogni altra settimana, scegli 2; ogni terza settimana, scegli 3, etc.
* <strong>Ripeti fino a</strong>: Seleziona l\'ultimo giorno della classe (l\'ultimo giorno in cui vuoi registrare le presenze).';
$string['createonesession'] = 'Crea una lezione per il corso';
$string['csvdelimiter'] = 'Delimitatore di campo CSV';
$string['currentlyselectedusers'] = 'Utenti attualmente selezionati';
$string['customexportfields'] = 'Esporta i campi personalizzati dell\'utente';
$string['customexportfields_help'] = 'Campi personalizzati dell\'utente da includere nell\'esportazione delle presenze.';
$string['date'] = 'Data';
$string['days'] = 'Giorni';
$string['defaultdisplaymode'] = 'Modo di visualizzaione di default';
$string['defaults'] = 'Valori di default';
$string['defaultsessionsettings'] = 'Impostazioni di default della lezione';
$string['defaultsessionsettings_help'] = 'Queste impostazioni definiscono le impostazioni di default di tutte le nuove lezioni';
$string['defaultsettings'] = 'Impostazioni di presenza predefinite';
$string['defaultsettings_help'] = 'Queste impostazioni definiscono le impostazioni predefinite per tutte le nuove presenze';
$string['defaultstatus'] = 'Gruppo di stati di default';
$string['defaultsubnet'] = 'Indirizzo di rete predefinito';
$string['defaultsubnet_help'] = 'La registrazione delle presenze può essere limitata a determinate sottoreti specificando un elenco separato da virgole di indirizzi IP parziali o completi. Questo è il valore di default utilizzato durante la creazione di nuove lezioni.';
$string['defaultview'] = 'Visualizzazione di default all\'accesso';
$string['defaultview_desc'] = 'Questa è la visualizzazione di default visualizzata ai docenti al primo accesso';
$string['defaultwarnings'] = 'Avvisi di default';
$string['defaultwarningsettings'] = 'Impostazioni di default dell\'avviso';
$string['defaultwarningsettings_help'] = 'Queste impostazioni definiscono i valori di default di tutti i nuovi avvisi';
$string['delete'] = 'Elimina';
$string['deletecheckfull'] = 'Sei assolutamente sicuro di voler cancellare completamente {$a}, inclusi tutti i dati utente?';
$string['deletedgroup'] = 'Il gruppo associato alla lezione è stato eliminato';
$string['deletehiddensessions'] = 'Elimina tutte le lezioni nascoste';
$string['deletelogs'] = 'Elimina il contenuto del registro presenze';
$string['deleteselected'] = 'Elimina selezionati';
$string['deletesession'] = 'Elimina lezione';
$string['deletesessions'] = 'Elimina tutte le lezioni';
$string['deleteuser'] = 'Elimina utente';
$string['deletewarningconfirm'] = 'Sei sicuro di voler cancellare questo avviso?';
$string['deletingsession'] = 'Eliminazione lezioni del corso';
$string['deletingstatus'] = 'Eliminazione stati del corso';
$string['description'] = 'Descrizione';
$string['display'] = 'Visualizza';
$string['displaymode'] = 'Modalità visualizzazione';
$string['donotusepaging'] = 'Non usare la paginazione';
$string['downloadexcel'] = 'Download in formato Excel';
$string['downloadooo'] = 'Download in formato OpenOffice';
$string['downloadtext'] = 'Download in formato testo';
$string['duration'] = 'Durata';
$string['editsession'] = 'Modifica lezione';
$string['edituser'] = 'Modifica utente';
$string['emailcontent'] = 'Contenuto email';
$string['emailcontent_default'] = 'Ciao %userfirstname%,
La tua presenza a %coursename% %attendancename% è scesa sotto il %warningpercent% ed è attualmente %percent% - speriamo vada tutto bene!

Per ottenere il massimo da questo corso devi migliorare la tua presenza. Per favore contattaci se è necessario ulteriore supporto.';
$string['emailcontent_help'] = 'Quando un avviso è inviato a uno studente, utilizza questo contenuto per l\'email.
Possono essere utilizzati questi codici:
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
$string['emailsubject_help'] = 'Quando un avviso è inviato a uno studente, utilizza questo oggetto per l\'email.';
$string['emailuser'] = 'Manda email agli utenti';
$string['emailuser_help'] = 'Se selezionato, un avviso verrà inviato allo studente.';
$string['emptyacronym'] = 'Gli acronimi vuoti non sono consentiti. Il record non è stato aggiornato.';
$string['emptydescription'] = 'Le descrizioni vuote non sono consentite. Il record non è stato aggiornato.';
$string['enablecalendar'] = 'Crea eventi nel calendario';
$string['enablecalendar_desc'] = 'Se abilitato, un evento di calendario sarà creato per ogni lezione. Dopo la modifica di questa impostazione dovresti eseguire il report Ripristina calendario.';
$string['enablewarnings'] = 'Abilita avvisi';
$string['enablewarnings_desc'] = 'Questo permette di definire degli avvisi per le presenze e inviare email di notifica agli utenti quando la presenza scende sotto una soglia definita.<br/><strong>ATTENZIONE: Questa è una nuova funzionalità e non è stata verificata intensamente. Usatela con consapevolezza e fornite dei riscontri nel forum di Moodle se funziona correttamente.</strong>';
$string['encoding'] = 'Codifica';
$string['encoding_help'] = 'Fa riferimento al tipo di codice a barre utilizzato dal tesserino identificativo degli studenti.
Tipiche tipologia di codifiche dei codici a barre sono Code-39, Code-128 e UPC-A.';
$string['endofperiod'] = 'Fine del periodo';
$string['endtime'] = 'Orario di fine lezione';
$string['enrolmentend'] = 'Iscritto fino a {$a}';
$string['enrolmentstart'] = 'Iscritto da {$a}';
$string['enrolmentsuspended'] = 'Iscrizione sospesa';
$string['enterpassword'] = 'Inserisci la password';
$string['error:coursehasnoattendance'] = 'Il corso con il titolo abbreviato {$a} non ha attività di presenza.';
$string['error:coursenotfound'] = 'Un corso con il titolo abbreviato {$a} non può essere trovato.';
$string['error:qrcode'] = 'Per utilizzare il QR Code si deve permettere agli studenti di registrare la propria presenza! Ignorato.';
$string['error:sessioncourseinvalid'] = 'Corso della lezione non valido! Ignorato.';
$string['error:sessiondateinvalid'] = 'Data della lezione non valida! Ignorato.';
$string['error:sessionendinvalid'] = 'Orario di fine della lezione non valido! Ignorato.';
$string['error:sessionstartinvalid'] = 'Orario di inizio della lezione non valido! Ignorato.';
$string['error:statusnotfound'] = 'Utente: {$a->extuser} ha un valore di stato che non può essere trovato: {$a->status}';
$string['error:timenotreadable'] = 'Utente: {$a->extuser} ha un orario di registrazione che non può essere convertito con strtotime: {$a->scantime}';
$string['error:userduplicate'] = 'L\'utente {$a} è stato trovato duplicato nell\'importazione. Per favore inserisci solo un elemento per utente.';
$string['error:usernotfound'] = 'Un utente con il campo {$a->userfield} impostato a {$a->extuser} non può essere trovato';
$string['errorgroupsnotselected'] = 'Seleziona uno o più gruppi';
$string['errorinaddingsession'] = 'Si è verificato un errore durante l\'inserimento della lezione';
$string['erroringeneratingsessions'] = 'Si è verificato un errore durante la creazione delle lezioni';
$string['eventdurationupdated'] = 'Aggiornata durata della lezione';
$string['eventreportviewed'] = 'Visualizzato report delle presenze';
$string['eventscreated'] = 'Creati eventi di calendario';
$string['eventsdeleted'] = 'Eliminati eventi di calendario';
$string['eventsessionadded'] = 'Lezione aggiunta';
$string['eventsessiondeleted'] = 'Lezione eliminata';
$string['eventsessionipshared'] = 'Conflitto di IP nella registrazione della presenza';
$string['eventsessionsimported'] = 'Lezioni importate';
$string['eventsessionupdated'] = 'Lezione aggiornata';
$string['eventstatusadded'] = 'Aggiunto stato';
$string['eventstatusupdated'] = 'Aggiornato stato';
$string['eventstudentattendancesessionsupdated'] = 'Report delle lezione aggiornato';
$string['eventstudentattendancesessionsviewed'] = 'Report della lezione visualizzato';
$string['eventtaken'] = 'Registrata presenza';
$string['eventtakenbystudent'] = 'Registrata presenza dallo studente';
$string['export'] = 'Esporta';
$string['extrarestrictions'] = 'Restrizioni aggiuntive';
$string['formattexttype'] = 'Formattazione';
$string['from'] = 'da:';
$string['gradebookexplanation'] = 'Valutazione nel registro valutatore';
$string['gradebookexplanation_help'] = 'Il modulo Presenze mostra la valutazione delle presenze basata sul punteggio ottenuto fino ad adesso e il punteggio che avresti ottenuto fino ad adesso; non include le lezioni che si svolgeranno in futuro. In Valutazioni, la valutazione delle presenze è basata sulla tua attuale percentuale delle presenze e sul punteggio che puoi ottenere nell\'intera durata del corso. Per tale motivo, la valutazione delle presenze visualizzata nel modulo Presenze e in Valutazioni potrebbero non avere lo stesso punteggio, ma hanno la stessa percentuale.

Per esempio, se hai ottenuto fino ad adesso un punteggio di 8 su 10 (80% di presenze) e la presenza per l\'intero corso vale 50 punti, il modulo Presenze mostrerà 8/10 e Valutazioni mostrerà 40/50. Non hai ancora ottenuto 40 punti ma 40 è il valore del punteggio equivalente all\'80%. Il valore del punteggio ottenuto nel modulo Presenze non può mai diminuire; nelle Valutazioni, invece, il valore visualizzato per le presenze può aumentare o diminuire a seconda delle tue presenze future, in quanto è basato sulle presenze nell\'intero corso.';
$string['graded'] = 'Lezioni valutate';
$string['gridcolumns'] = 'Colonne griglia';
$string['group'] = 'Gruppo';
$string['groups'] = 'Gruppi';
$string['groupsession'] = 'Gruppi di studenti';
$string['groupsessionsby'] = 'Lezioni di gruppo per';
$string['hiddensessions'] = 'Lezioni nascoste';
$string['hiddensessions_help'] = 'Le lezioni sono nascoste se riportano una data antecedente alla data di inizio del corso.

E\' possibile utilizzare questa funzionalità per nascondere le lezioni più vecchie invece di eliminarle. Nel Registro valutatore verranno visualizzate soltanto le lezioni visibili.';
$string['hiddensessionsdeleted'] = 'Tutte le lezioni nascoste sono state eliminate';
$string['hideextrauserdetails'] = 'Nascondi dettali utente aggiuntivi';
$string['hidensessiondetails'] = 'Nascondi dettagli lezione';
$string['identifyby'] = 'Identifica lo studente per';
$string['import'] = 'Importa';
$string['importfile'] = 'File di importazione';
$string['importfile_help'] = 'File di importazione';
$string['importsessions'] = 'Importa Lezioni';
$string['importstatus'] = 'Campo Stato';
$string['importstatus_help'] = 'Questo permette di includere lo stato nell\'importazione. Es. valori come P, L o A.';
$string['includeabsentee'] = 'Includi lezioni nel calcolo del report delle assenze';
$string['includeabsentee_help'] = 'Se selezionato questa lezione sarà inclusa nel calcolo del report delle assenze.';
$string['includeall'] = 'Seleziona tutte le lezioni';
$string['includedescription'] = 'Includi descrizione lezione';
$string['includenottaken'] = 'Includi le lezioni non ancora registrate';
$string['includeqrcode'] = 'Includi QR Code';
$string['includeremarks'] = 'Includi note';
$string['incorrectpassword'] = 'Hai inserito una password sbagliata e la tua presenza non è stata registrata. Per favore inserisci una password corretta.';
$string['incorrectpasswordshort'] = 'Password sbagliata, presenza non registrata';
$string['indetail'] = 'Dettagli...';
$string['invalidaction'] = 'Devi selezionare un\'azione';
$string['invalidemails'] = 'Devi specificare gli indirizzi degli account utente esistenti, non è possibile trovare: {$a}';
$string['invalidimportfile'] = 'Formato del file non valido';
$string['invalidsessionenddate'] = 'La fine della lezione non può essere antecedente l\'inizio della stessa lezione';
$string['invalidsessionendtime'] = 'La fine della lezione deve essere successiva all\'inizio della lezione';
$string['invalidstatus'] = 'Hai selezionato uno stato non valido, prova ancora';
$string['iptimemissing'] = 'Minuti di rilascio dell\'IP non validi';
$string['jumpto'] = 'Vai a';
$string['keepsearching'] = 'Continua a cercare';
$string['marksessionimportcsvhelp'] = 'Questa pagina ti permette di caricare un file CSV contenente l\'identificativo utente e lo stato, che può essere sia l\'acronimo dello stato che l\'orario in cui la presenza è stata presa. Se è inserito un orario, allora si proverà ad assegnare lo stato con valore maggiore disponibile in quel momento.';
$string['maxpossible'] = 'Massimo possibile';
$string['maxpossible_help'] = 'Visualizza il punteggio che ogni utente più raggiungere nel caso dovesse ottenere il punteggio massimo in ogni lezione non ancora svolta:
    <ul>
    <li><strong>Punteggio</strong>: massimo punteggio che ogni utente può ottenere in tutte le lezioni.</li>
    <li><strong>Percentuale</strong>: massima percentuale che ogni utente più ottenere in tutte le lezioni.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Percentuale massima possibile';
$string['maxpossiblepoints'] = 'Punteggio massimo possibile';
$string['maxwarn'] = 'Massimo numero di email di avviso';
$string['maxwarn_help'] = 'Il numero massimo di volte che un avviso deve essere inviato (è inviato solo un avviso per lezione).';
$string['mergeuser'] = 'Unisci utente';
$string['mobilesessionfrom'] = 'Visualizza lezioni antecedenti all\'ultima';
$string['mobilesessionfrom_help'] = 'Permette di restringere la lista di lezioni durante la registrazione tramite app. Sono visualizzate solo le lezioni a partire da questa data.';
$string['mobilesessionto'] = 'Visualizza lezioni future';
$string['mobilesessionto_help'] = 'Permette di restringere la lista di lezioni a solo un piccolo numero di lezioni future.';
$string['mobilesettings'] = 'Impostazioni della App mobile';
$string['mobilesettings_help'] = 'Queste impostazioni controllano il comportamento nella Moodle mobile app';
$string['modulename'] = 'Presenze';
$string['modulename_help'] = 'Il modulo Presenze consente al docente di registrare le presenze durante la lezione agli studenti di visualizzare lo stato delle loro presenze.

Il docente può creare più lezione in una volta e può registrare lo stato della presenza come "Presente", "Assente", "In ritardo" o "Giustificato" oppure modificare gli stati per adattarli alle sue esigenze.

I report sono disponibili per l\'intera classe o per i singoli studenti.';
$string['modulenameplural'] = 'Presenze';
$string['months'] = 'Mesi';
$string['moreattendance'] = 'Presenze correttamente registrate in questa pagina';
$string['moveleft'] = 'Sposta a sinistra';
$string['moveright'] = 'Sposta a destra';
$string['multisessionexpanded'] = 'Lezioni multiple espanso';
$string['multisessionexpanded_desc'] = 'Visualizza la sezione "Lezioni multiple" già espansa nella creazione di nuove lezioni.';
$string['mustselectusers'] = 'Devi selezionare gli utenti da esportare';
$string['newdate'] = 'Nuova data';
$string['newduration'] = 'Nuova durata';
$string['newstatusset'] = 'Nuovo gruppo di stati';
$string['noabsentstatusset'] = 'Il gruppo di stati in uso non ha uno stato da usare quando non registrato.';
$string['noattendanceusers'] = 'Non è possibile esportare alcun dato perché non ci sono studenti iscritti al corso.';
$string['noattforuser'] = 'Non ci sono presenze registrate per questo utente';
$string['noautomark'] = 'Disabilitato';
$string['nocapabilitytotakethisattendance'] = 'Hai provato a modificare la presenza di una lezione con cmid {$a} che non hai il permesso di modificare.';
$string['nodescription'] = 'Lezione normale di classe';
$string['noeventstoreset'] = 'Non ci sono eventi di calendario che richiedono un aggiornamento';
$string['nogroups'] = 'Non puoi aggiungere lezioni di gruppo poiché nel corso non ci sono gruppi.';
$string['noguest'] = 'Gli ospiti non possono visualizzare le presenze';
$string['noofdaysabsent'] = 'Giorni di assenza';
$string['noofdaysexcused'] = 'Giorni giustificati';
$string['noofdayslate'] = 'Ritardi';
$string['noofdayspresent'] = 'Giorni di presenza';
$string['nosessiondayselected'] = 'Non è stato selezionato il giorno della lezione';
$string['nosessionexists'] = 'Non esistono lezioni per questo corso';
$string['nosessionsselected'] = 'Nessuna lezione selezionata';
$string['notfound'] = 'Per poter utilizzare questo blocco è necessario aggiungere al corso almeno un\'attività Presenze.';
$string['notifytask'] = 'Invio avvisi agli utenti';
$string['notmember'] = 'non&nbsp;membro';
$string['notset'] = 'non impostato';
$string['noupgradefromthisversion'] = 'Il modulo Presenze non può aggiornarsi dalla versione di attfroblock cha hai installato. Per favore elimina attforblock o aggiornalo all\'ultima versione prima di installare questa versione del modulo Presenze.';
$string['numsessions'] = 'Numero di lezioni';
$string['olddate'] = 'Data precedente';
$string['onlyselectedusers'] = 'Esporta utenti specifici';
$string['overallsessions'] = 'Su tutte le lezioni';
$string['overallsessions_help'] = 'Visualizza le statistiche di tutte le lezioni, incluse quelle che non si sono svolte (passate e future):
    <ul>
    <li><strong>Lezioni</strong>: numero totale delle lezioni.</li>
    <li><strong>Punteggio</strong>: punteggio assegnato nelle lezioni svolte.</li>
    <li><strong>Percentuale</strong>: percentuale dei punteggi assegnati su il massimo possibile punteggio per tutte le lezioni.</li>
    </ul>';
$string['oversessionstaken'] = 'Statistiche lezioni';
$string['oversessionstaken_help'] = 'Visualizza le statistiche per lezioni in cui è stata presa la presenza:
    <ul>
    <li><strong>Lezioni</strong>: numero totale delle lezioni svolte.</li>
    <li><strong>Punteggio</strong>: punteggio assegnato nelle lezioni svolte.</li>
    <li><strong>Percentuale</strong>: percentuale dei punteggi assegnati su il massimo possibile punteggio per le lezioni svolte.</li>
    </ul>';
$string['pageof'] = 'Pagina {$a->page} di {$a->numpages}';
$string['participant'] = 'Partecipante';
$string['password'] = 'Password';
$string['passwordgrp'] = 'Password studente';
$string['passwordgrp_help'] = 'Se impostata gli studenti dovranno inserire questa password per poter registrare la propria presenza per la lezione. Se vuoto, nessuna password è richiesta.';
$string['passwordrequired'] = 'Devi inserire la password della lezione prima di poter registrare la tua presenza.';
$string['percentage'] = 'Percentuale';
$string['percentageallsessions'] = 'Percentuale su tutte le lezioni';
$string['percentagesessionscompleted'] = 'Percentuale sulle lezioni già registrate';
$string['pluginadministration'] = 'Amministrazione presenze';
$string['pluginname'] = 'Presenze';
$string['points'] = 'Punteggio';
$string['pointsallsessions'] = 'Punteggio su tutte le lezioni';
$string['pointssessionscompleted'] = 'Punteggio sulle lezioni già registrate';
$string['preferences_desc'] = 'Le correzioni ai gruppi di stati avranno effetto sulle lezioni esistenti e potrebbero influire sulle valutazioni.';
$string['preventsharederror'] = 'La registrazione della presenza è stata disabilitata perché questo dispositivo è già stato usato per registrare la presenza di un altro utente.';
$string['preventsharedip'] = 'Impedisci agli studenti di utilizzare un indirizzo IP condiviso.';
$string['preventsharedip_help'] = 'Impedisci agli studenti di utilizzare lo stesso dispositivo (identificato mediante indirizzo IP) per registrare la presenza di altri studenti.';
$string['preventsharediptime'] = 'Tempo per permettere il riutilizzo dell\'indirizzo IP (minuti)';
$string['preventsharediptime_help'] = 'Permetti di riutilizzare l\'indirizzo IP per la registrazione della presenza dopo che questo tempo è trascorso.';
$string['preview'] = 'Anteprima file';
$string['previewhtml'] = 'Anteprima in formato HTML';
$string['priorto'] = 'La data della lezione è antecedente alla data di inizio del corso ({$a}) quindi le nuove lezioni programmate prima di questa data saranno nascoste (non accessibili). Puoi cambiare la data di inizio del corso in ogni momento (nelle impostazioni del corso) in modo da avere avere accesso alle lezioni nascoste.<br><br>Per favore cambia la data della lezione o clicca ancora il pulsante "Aggiungi" per confermare.';
$string['processingfile'] = 'Elaborazione file';
$string['qr_cookie_error'] = 'La sessione QR è scaduta.';
$string['qr_pass_wrong'] = 'La password QR è sbagliata o scaduta.';
$string['qrcode'] = 'QR Code';
$string['randompassword'] = 'Password casuale';
$string['remark'] = 'Nota per: {a}';
$string['remarks'] = 'Note';
$string['repeatasfollows'] = 'Ripeti la lezione come impostato di seguito';
$string['repeatevery'] = 'Ripeti ogni';
$string['repeaton'] = 'Ripeti di';
$string['repeatuntil'] = 'Ripeti fino al';
$string['report'] = 'Report';
$string['required'] = 'Obbligatorio*';
$string['requiredentries'] = 'Gli elementi temporanei sovrascriveranno le presenze dell\'utente';
$string['requiredentry'] = 'Guida di aiuto per l\'unione degli utenti temporanei';
$string['requiredentry_help'] = '<p align="center"><b>Presenza</b></p>
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
$string['requiresubnet'] = 'Richiedi indirizzo di rete';
$string['requiresubnet_help'] = 'La registrazione della presenza può essere ristretta a particolari sottoreti, specificando un elenco separato da virgole di indirizzi IP completi o parziali.';
$string['resetcaledarcreate'] = 'Gli eventi di calendario sono stati abilitati ma delle lezioni non hanno eventi. Vuoi creare gli eventi di calendario per tutte le lezioni esistenti?';
$string['resetcaledardelete'] = 'Gli eventi di calendario sono stati disabilitati ma delle lezioni hanno eventi che andrebbero eliminati. Vuoi cancellare tutti questi eventi?';
$string['resetcalendar'] = 'Ripristina calendario';
$string['resetdescription'] = 'Ricorda che eliminando le presenze queste verranno eliminate definitivamente dal database. E\' anche possibile nascondere le vecchie lezioni cambiando la data di inizio nelle impostazioni del corso!';
$string['resetstatuses'] = 'Riporta gli stati al loro default';
$string['restoredefaults'] = 'Ripristina valori predefiniti';
$string['resultsperpage'] = 'Risultati per pagina';
$string['resultsperpage_desc'] = 'Numero di studenti visualizzati per pagina';
$string['rotateqrcode'] = 'Aggiorna QR Code';
$string['rotateqrcode_cleartemppass_task'] = 'Elaborazione che elimina le password temporanee generate per la funzionalità di aggiornamento del QR Code.';
$string['rotateqrcodeexpirymargin'] = 'Tempo di scadenza del QR Code / Password (in secondi).';
$string['rotateqrcodeexpirymargin_desc'] = 'Dopo quanto tempo (in secondi) il QR Code / Password sarà considerato scaduto.';
$string['rotateqrcodeinterval'] = 'Intervallo di aggiornamento del QR Code / Password (in secondi).';
$string['rotateqrcodeinterval_desc'] = 'Ogni quanto aggiornare il QR Code / Password (in secondi).';
$string['save'] = 'Salva';
$string['scantime'] = 'Orario di scansione';
$string['scantime_help'] = 'Questo permette di includere il timestamp nel file di importazione. Si cercherà di convertire questo timestamp con la funzione PHP strtotime per poi usarlo nella registrazione della presenza dell\'utente e per assegnare lo stato corretto.';
$string['search:activity'] = 'Presenze - informazioni attività';
$string['session'] = 'Lezione';
$string['session_help'] = 'Lezione';
$string['sessionadded'] = 'Lezione aggiunta con successo';
$string['sessionalreadyexists'] = 'E\' già presente una lezione in questa data';
$string['sessiondate'] = 'Data lezione';
$string['sessiondays'] = 'Giorni di lezione';
$string['sessiondeleted'] = 'Lezione eliminata correttamente';
$string['sessionduplicate'] = 'Esiste una lezione duplicata nel corso {$a->course} per l\'attività {$a->activity}';
$string['sessionexist'] = 'La lezione non è stata inserita (è già esistente)!';
$string['sessiongenerated'] = 'Una lezione è stata generata correttamente';
$string['sessions'] = 'Lezioni';
$string['sessionsallcourses'] = 'Tutti i corsi';
$string['sessionsbyactivity'] = 'Istanza di attività Presenze';
$string['sessionsbycourse'] = 'Corso';
$string['sessionsbydate'] = 'Settimana';
$string['sessionscompleted'] = 'Lezioni completate';
$string['sessionscurrentcourses'] = 'Corsi attuali';
$string['sessionsgenerated'] = 'Lezione/i creata/e correttamente';
$string['sessionsids'] = 'ID delle lezioni';
$string['sessionsnotfound'] = 'Non sono presenti lezioni in questo intervallo di tempo';
$string['sessionstartdate'] = 'Data inizio della lezione';
$string['sessionstotal'] = 'Numero totale delle lezioni';
$string['sessionsupdated'] = 'Lezioni aggiornate';
$string['sessiontype'] = 'Tipo di lezione';
$string['sessiontype_help'] = 'Le lezioni possono essere di due tipi: comuni e di gruppo. La possibilità di aggiungere differenti tipi dipende dalla modalità gruppo dell\'attività.

* Nella modalità "Senza gruppi" è possibile aggiungere solo lezioni comuni.
* Nella modalità "Gruppi visibili" è possibile aggiungere lezioni di gruppo o lezioni comuni.
* Nella modalità "Gruppi separati" è possibile aggiungere soltanto lezioni di gruppo.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionunknowngroup'] = 'Una lezione utilizza un gruppo sconosciuto: {$a}';
$string['sessionupdated'] = 'Lezione aggiornata correttamente';
$string['set_by_student'] = 'Autoregistrato';
$string['setallstatuses'] = 'Imposta lo stato per tutti gli utenti';
$string['setallstatusesto'] = 'Imposta lo stato per tutti gli utenti a «{$a}»';
$string['setperiod'] = 'Tempo (in minuti) per il rilascio dell\'IP';
$string['settings'] = 'Impostazioni';
$string['setunmarked'] = 'Imposta automaticamente come non registrato';
$string['setunmarked_help'] = 'Se abilitato per la lezione, imposta questo stato quando uno studente non ha registrato la propria presenza.';
$string['showdefaults'] = 'Visualizza default';
$string['showduration'] = 'Mostra la durata';
$string['showextrauserdetails'] = 'Visualizza ulteriori dettagli dell\'utente';
$string['showqrcode'] = 'Visualizza il QR Code';
$string['showsessiondescriptiononreport'] = 'Visualizza la descrizione della lezione nel report';
$string['showsessiondescriptiononreport_desc'] = 'Visualizza la descrizione della lezione nell\'elenco dei report delle presenze';
$string['showsessiondetails'] = 'Visualizza dettagli della lezione';
$string['somedisabledstatus'] = '(Alcune opzioni sono state rimosse appena la lezione è cominciata)';
$string['sortedgrid'] = 'Tabella';
$string['sortedlist'] = 'Elenco';
$string['startofperiod'] = 'A partire da';
$string['starttime'] = 'Orario di inizio';
$string['status'] = 'Stato';
$string['statusall'] = 'tutti';
$string['statusdeleted'] = 'Stato cancellato';
$string['statuses'] = 'Stati';
$string['statusset'] = 'Gruppo di stati {$a}';
$string['statussetsettings'] = 'Gruppi di stati';
$string['statusunselected'] = 'non selezionato';
$string['strftimedm'] = '\'%d.%m';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Disponibilità agli studenti (in minuti)';
$string['studentavailability_help'] = 'Quando gli studenti possono registrare la propria presenza, il numero di minuti dopo l\'inizio della lezione in cui lo stato sarà disponibile.
<br/>Se vuoto, questo stato sarà sempre disponibile. Se impostato a 0 sarà sempre nascosto agli studenti.';
$string['studentid'] = 'ID Studente';
$string['studentmarked'] = 'La tua presenta per questa lezione è stata registrata.';
$string['studentmarking'] = 'Registrazione studente';
$string['studentpassword'] = 'Password studente';
$string['studentrecordingexpanded'] = 'Registrazione studente espansa';
$string['studentrecordingexpanded_desc'] = 'Visualizza la sezione "Registrazione studente" già espansa nella creazione di nuove lezioni.';
$string['studentscanmark'] = 'Consenti agli studenti di registrare la loro presenza';
$string['studentscanmark_desc'] = 'Se selezionato, i docenti potranno permettere agli studenti di registrare la propria presenza.';
$string['studentscanmark_help'] = 'Se selezionato, gli studenti potranno modificare lo status della loro presenza alla lezione.';
$string['studentscanmarksessiontime'] = 'Registrazione della presenza durante le lezioni';
$string['studentscanmarksessiontime_desc'] = 'Se selezionato, gli studenti potranno registrare la propria presenza soltanto durante le lezioni.';
$string['studentscanmarksessiontimeend'] = 'Fine della lezione (minuti)';
$string['studentscanmarksessiontimeend_desc'] = 'Se la lezione non ha un orario di fine, per quanti minuti lasciare disponibile la registrazione della presenza alla lezione.';
$string['submit'] = 'Registra';
$string['submitattendance'] = 'Registra presenza';
$string['submitpassword'] = 'Invia password';
$string['subnet'] = 'Sottorete';
$string['subnetactivitylevel'] = 'Permetti configurazioni sottorete a livello di attività';
$string['subnetactivitylevel_desc'] = 'Se abilitato, i docenti potranno sovrascrivere l\'impostazione della sottorete a livello di attività al momento della creazione. In caso contrario, il default sarà utilizzato nella creazione delle lezioni.';
$string['subnetwrong'] = 'La presenza potrà essere registrata solamente da specifici luoghi, e questo computer non è nella lista degli abilitati.';
$string['summary'] = 'Riepilogo';
$string['tablerenamefailed'] = 'Rinomina della vecchia tabella attforblock in attendance fallito';
$string['tactions'] = 'Azione';
$string['takeattendance'] = 'Registra presenze';
$string['takensessions'] = 'Lezioni registrate';
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
$string['thirdpartyemails_help'] = 'Lista degli altri utenti che verranno notificati. (richiede l\'autorizzazione mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Avviso sulla presenza';
$string['thirdpartyemailtext'] = 'La presenza di {$a->firstname} {$a->lastname} in {$a->coursename} {$a->aname} è minore di {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Stai ricevendo questa comunicazione perché il docente di questo corso ha aggiunto la tua email nella lista dei destinatari';
$string['thiscourse'] = 'Questo corso';
$string['time'] = 'Orario';
$string['timeahead'] = 'Lezioni multiple che eccedono l\'anno non possono essere create. Per favore correggi le date di inizio e di fine.';
$string['to'] = 'a:';
$string['todate'] = 'fino a';
$string['triggered'] = 'Notificato la prima volta';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Nome completo';
$string['ungraded'] = 'Lezioni non valutate';
$string['unknowngroup'] = 'Gruppo sconosciuto';
$string['update'] = 'Aggiorna';
$string['uploadattendance'] = 'Importa presenze da CSV';
$string['usedefaultsubnet'] = 'Usa i valori di default';
$string['usemessageform'] = 'o utilizzi i campi sottostanti per mandare un messaggio agli studenti selezionati';
$string['userexists'] = 'Esiste già un utente con questo indirizzo e-mail';
$string['userid'] = 'ID utente';
$string['userimportfield'] = 'Campo utente esterno';
$string['userimportfield_help'] = 'Campo nel file CSV che contiene l\'identificativo dell\'utente';
$string['userimportto'] = 'Campo utente Moodle';
$string['userimportto_help'] = 'Campo Moodle collegato ai dati nel file CSV';
$string['users'] = 'Utenti da esportare';
$string['usestatusset'] = 'Utilizza il gruppo di stati';
$string['variable'] = 'variabile';
$string['variablesupdated'] = 'Variabile aggiornata correttamente';
$string['versionforprinting'] = 'versione stampabile';
$string['viewmode'] = 'Modalità visualizzazione';
$string['warnafter'] = 'Numero di lezioni svolte prima dell\'avvertimento';
$string['warnafter_help'] = 'Gli avvertimenti saranno attivati solo se all\'utente è stata registrata la presenza per almeno questo numero di lezioni.';
$string['warningdeleted'] = 'Avvertimento cancellato';
$string['warningdesc'] = 'Questi avvertimenti saranno automaticamente aggiunti alle nuove attività di presenza. Se più di un avvertimento è attivato nello stesso momento, soltanto l\'avvertimento con soglia più bassa sarà inviato.';
$string['warningdesc_course'] = 'Questa soglie di avvertimento agiscono nel report delle assenze e permette agli studenti o altri utenti di essere avvertiti. Se più di un avvertimento è attivato nello stesso momento, soltanto l\'avvertimento con soglia più bassa sarà inviato.';
$string['warningfailed'] = 'Non puoi creare un nuovo avvertimento che usa la stessa percentuale e numero di lezioni di uno già esistente.';
$string['warningpercent'] = 'Avverti se la percentuale scende sotto la soglia';
$string['warningpercent_help'] = 'Un avvertimento sarà';
$string['warnings'] = 'Avvertimenti';
$string['warningthreshold'] = 'Soglia di avvertimento';
$string['warningupdated'] = 'Avvertimenti aggiornati';
$string['week'] = 'Settimana(e)';
$string['weekcommencing'] = 'Inizio della settimana';
$string['weeks'] = 'Settimane';
$string['youcantdo'] = 'Non puoi fare nulla';
