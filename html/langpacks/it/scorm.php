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
 * Strings for component 'scorm', language 'it', version '4.1'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Attivazione';
$string['activityloading'] = 'L\'attività partirà in';
$string['activityoverview'] = 'Ci sono pacchetti SCORM che richiedono la tua attenzione';
$string['activitypleasewait'] = 'Caricamento attività in corso...';
$string['adminsettings'] = 'Impostazioni amministrative';
$string['advanced'] = 'Parametri';
$string['aicchacpkeepsessiondata'] = 'Dati sessione AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'La durata del mantenimento, espressa in giorni, dei dati delle sessioni esterne AICC HACP. (un valore elevato riempirà la tabella di dati ma può essere utile per eseguire attività si debug)';
$string['aicchacptimeout'] = 'Timeout AICC HACP';
$string['aicchacptimeout_desc'] = 'La durata in minuti in cui una sessione AICC HACP può rimanere aperta';
$string['aiccuserid'] = 'Passa ad AICC gli user id numerici';
$string['aiccuserid_desc'] = 'Lo standard AICC rispetto a Moodle è molto restrittivo sugli username, consentendo solo l\'uso di caratteri alfanumerici del segno meno (-) e del segno di sottolineatura (_). Punti, spazi e il simbolo @ non sono consentiti. Questa impostazione consente di passare al pacchetto AICC il codice identificativo dell\'utente al posto dello username.';
$string['aliasonly'] = 'Aggiornamento autorizzati a cambiare ruolo';
$string['allowapidebug'] = 'Attiva l\'API di debug e tracking (Imposta la capture mask con apidebugmasjk)';
$string['allowtypeaicchacp'] = 'Abilita AICC HACP esterna';
$string['allowtypeaicchacp_desc'] = 'Abilita la comunicazione   AICC HACP esterna senza necessità di autenticazioni per richieste post provenienti dal pacchetto AICC esterno';
$string['allowtypeexternal'] = 'Abilita i pacchetti di tipo esterno';
$string['allowtypeexternalaicc'] = 'Abilita URL AICC diretta';
$string['allowtypeexternalaicc_desc'] = 'Consente di usare url dirette a pacchetti AICC';
$string['allowtypelocalsync'] = 'Abilita i pacchetti di tipo download';
$string['apidebugmask'] = 'API debug capture mask - utilizza una regex su <username>:<activityname> ad esempio admin:.* eseguirà il debug solo per gli admin.';
$string['areacontent'] = 'File del contenuto';
$string['areapackage'] = 'File del pacchetto';
$string['asset'] = 'Asset';
$string['assetlaunched'] = 'Asset - Visualizzato';
$string['attempt'] = 'Tentativo';
$string['attempt1'] = '1 tentativo';
$string['attempts'] = 'Tentativi';
$string['attemptsmanagement'] = 'Gestione tentativi';
$string['attemptstatusall'] = 'Dashboard e pagina di ingresso';
$string['attemptstatusentry'] = 'Solo pagina di ingresso';
$string['attemptstatusmy'] = 'Solo Dashboard';
$string['attemptsx'] = '{$a} tentativi';
$string['attr_error'] = 'Valore non valido per l\'attributo ({$a->attr}) nel tag {$a->tag}.';
$string['autocommit'] = 'Auto-commit';
$string['autocommit_help'] = 'Consente di salvare automaticamente i dati SCORM nel database. L\'impostazione è utile per quei pacchetti SCORM che non salvano i dati con regolarità.';
$string['autocommitdesc'] = 'Salva automaticamente i dati SCORM se il pacchetto SCORM omette di farlo';
$string['autocontinue'] = 'Continuazione automatica';
$string['autocontinue_help'] = 'La continuazione automatica consente il lancio automatico di  learning object successivi senza usare il tasto Continua';
$string['autocontinuedesc'] = 'Imposta il lancio automatico di learning object successivi. Se non abilitato, dovrà essere utilizzato il pulsante Continua.';
$string['averageattempt'] = 'Media tentativi';
$string['badarchive'] = 'Devi fornire un file zip valido';
$string['badimsmanifestlocation'] = 'È stato trovato il file  imsmanifest.xml ma non si trova nella radice del file zip. Per favore impacchettare nuovamente l\'oggetto SCORM.';
$string['badmanifest'] = 'Il manifest contiene alcuni errori: controlla l\'elenco';
$string['browse'] = 'Anteprima';
$string['browsed'] = 'Visitato';
$string['browsemode'] = 'Modalità anteprima';
$string['browserepository'] = 'Visita repository';
$string['calculatedweight'] = 'Peso calcolato';
$string['calendarend'] = '{$a} chiude';
$string['calendarstart'] = '{$a} apre';
$string['cannotaccess'] = 'Non è possibile chiamare lo script in quel modo';
$string['cannotfindsco'] = 'SCO non trovato';
$string['chooseapacket'] = 'Scegli o aggiorna un pacchetto';
$string['closebeforeopen'] = 'Hai specificato una data di chiusura successiva alla data di apertura.';
$string['collapsetocwinsize'] = 'Riduci TOC se la dimensione della finestra è minore di';
$string['collapsetocwinsizedesc'] = 'Consente di impostare la dimensione minima della finestra sotto la quale ridurre il TOC.';
$string['compatibilitysettings'] = 'Impostazioni di compatibilità';
$string['completed'] = 'Completato';
$string['completiondetail:allscos'] = 'Svolgere tutte le parti dell’attività';
$string['completiondetail:completionscore'] = 'Ottenere un punteggio pari a {$a} o superiore';
$string['completiondetail:completionstatuscompleted'] = 'Completare l\'attività';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Completare e superare l\'attività';
$string['completiondetail:completionstatuspassed'] = 'Superare l\'attività';
$string['completionscorerequired'] = 'Punteggio minimo richiesto';
$string['completionscorerequired_help'] = 'Un utente, oltre a soddisfare eventuali altri criteri di completamento, dovrà raggiungere il punteggio impostato per completare l\'attività SCORM.';
$string['completionscorerequireddesc'] = 'Per completare l\'attività è necessario n punteggio minimo di {$a}';
$string['completionstatus_completed'] = 'Completed';
$string['completionstatus_passed'] = 'Passed';
$string['completionstatusallscos'] = 'Tutti gli SCO devono riportare lo stato';
$string['completionstatusallscos_help'] = 'Alcuni pacchetti SCORM sono composti da più SCO. Abilitando questa impostazione tutti gli SCO dovranno riportare lo stato prescelto affinché l\'attiivtà possa risultare completata.';
$string['completionstatusrequired'] = 'Stato richiesto';
$string['completionstatusrequired_help'] = 'Affinché l\'attività SCORM venga contrassegnata come completata, oltre a soddisfare gli eventuali altri criteri di completamento, lo studente dovrà ottenere almeno uno degli stati richiesti.';
$string['completionstatusrequireddesc'] = 'Lo studente dovrà ottenere almeno uno dei seguenti stati: {$a}';
$string['confirmloosetracks'] = 'ATTENZIONE: Il pacchetto sembra cambiato o modificato. Se la struttura del pacchetto è cambiata, alcuni tracciamenti degli utenti potrebbero andare persi durante il processo di aggiornamento.';
$string['contents'] = 'Contenuti';
$string['coursepacket'] = 'Pacchetto del corso';
$string['coursestruct'] = 'Struttura del corso';
$string['crontask'] = 'Elaborazione in background: SCORM';
$string['currentwindow'] = 'Stessa finestra';
$string['datadir'] = 'Errore filesystem: non è possibile creare la cartella dei dati del corso';
$string['defaultdisplaysettings'] = 'Impostazioni di visualizzazione di default';
$string['defaultgradesettings'] = 'Impostazioni di valutazione di default';
$string['defaultothersettings'] = 'Altre impostazioni di default';
$string['deleteallattempts'] = 'Elimina tutti i tentativi SCORM';
$string['deleteattemptcheck'] = 'Sei sicuro di voler eliminare questi tentativi?';
$string['deleteselected'] = 'Elimina tentativi selezionati';
$string['deleteuserattemptcheck'] = 'Sei proprio sicuro di voler eliminare tutti i tuoi tentativi?';
$string['details'] = 'Dettagli tracciamento';
$string['directories'] = 'Visualizza collegamenti';
$string['disabled'] = 'Disabilitato';
$string['display'] = 'Visualizzazione pacchetto';
$string['displayactivityname'] = 'Visualizza nome dell\'attività';
$string['displayactivityname_help'] = 'Consente di visualizzare il nome dell\'attività sopra lo SCORM player.';
$string['displayattemptstatus'] = 'Visualizza  lo stato dei tentativi';
$string['displayattemptstatus_help'] = 'Consente di visualizzare un riepilogo dello stato dei tentativi nel blocco Panoramica corsi nella Dashboard e/o nella pagina con la struttura del pacchetto del modulo SCORM.';
$string['displayattemptstatusdesc'] = 'Imposta la visualizzazione del riepilogo dei tentativi dell\'utente nella Dashboard all\'interno del blocco Panoramica corsi e/o nella pagina di ingresso dell\'attività SCORM.';
$string['displaycoursestructure'] = 'Visualizza la struttura del corso nella pagina di ingresso';
$string['displaycoursestructure_help'] = 'Visualizza la struttura del corso nella pagina di riepilogo SCORM.';
$string['displaycoursestructuredesc'] = 'Imposta la visualizzazione della struttura del corso nella pagina di ingresso';
$string['displaydesc'] = 'Imposta la visualizzazione di un pacchetto SCORM in una nuova finestra';
$string['displaysettings'] = 'Impostazioni di visualizzazione';
$string['dnduploadscorm'] = 'Aggiungi un pacchetto SCORM';
$string['domxml'] = 'Libreria esterna DOMXML';
$string['element'] = 'Elemento';
$string['enter'] = 'Entra';
$string['entercourse'] = 'Entra nel corso';
$string['errorlogs'] = 'Log degli errori';
$string['eventattemptdeleted'] = 'Eliminazione tentativo';
$string['eventinteractionsviewed'] = 'Visualizzazione interazione';
$string['eventreportviewed'] = 'Visualizzazione report';
$string['eventscolaunched'] = 'Lancio SCO';
$string['eventscorerawsubmitted'] = 'Invio punteggio SCORM grezzo';
$string['eventstatussubmitted'] = 'Invio stato SCORM';
$string['eventtracksviewed'] = 'Visualizzazione tracciamento';
$string['eventuserreportviewed'] = 'Visualizzazione report utente';
$string['everyday'] = 'Ogni giorno';
$string['everytime'] = 'Ogni volta che è usato';
$string['exceededmaxattempts'] = 'Hai raggiunto il massimo numero di tentativi consentito.';
$string['exit'] = 'Esci dal corso';
$string['exitactivity'] = 'Esci dall\'attività';
$string['expired'] = 'Spiacente, questa attività è stata chiusa il {$a} e non è più disponibile';
$string['external'] = 'Aggiornamento pacchetti esterni';
$string['failed'] = 'Fallito';
$string['finishscorm'] = 'Se hai terminato di visualizzare questa risorsa, {$a}';
$string['finishscormlinkname'] = 'fai click qui per tornare alla pagina del corso';
$string['firstaccess'] = 'Primo accesso';
$string['firstattempt'] = 'Primo tentativo';
$string['floating'] = 'Fluttuante';
$string['forceattemptalways'] = 'Sempre';
$string['forceattemptoncomplete'] = 'Se il tentativo precedente è completed, passed o failed';
$string['forcecompleted'] = 'Forza completamento';
$string['forcecompleted_help'] = 'Forzare il completamento assicura che lo stato del tentativo sia "completato". L\'impostazione ha senso solo per i pacchetti SCORM 1.2.';
$string['forcecompleteddesc'] = 'Imposta il valore di default per l\'opzione Forza completamento';
$string['forcejavascript'] = 'Obbliga gli utenti ad abilitare JavaScript';
$string['forcejavascript_desc'] = 'Impedisce l\'accesso ad oggetti SCORM quando il borwser dell\'utente non supporta javascript oppure non lo ha abilitato. Se l\'impostazione è disbailitata, l\'utente può vedere l\'oggetto SCORM ma la comunicazione dei dati di fruizione sarà perduta.';
$string['forcejavascriptmessage'] = 'Per visualizzare questo oggetto è necessario JavaScript, per favore abilita JavaScript nel tuo browser e riprova';
$string['forcenewattempts'] = 'Forza un nuovo tentativo';
$string['forcenewattempts_help'] = 'Sono disponibili 3 opzioni:

* No - Se il tentativo precedente è \'completed\', \'passed\' o \'failed\', allo studente verrà fornita l\'opzione per entrare in modalità revisione o iniziare un nuovo tentativo.
* Quando il precedente tentativo è \'completed\', \'passed\' o \'failed \'- Questo si basa sul\'impostazione del pacchetto SCORM che imposta lo stato di  \'completed\', \'passed\' o \'failed\'.
* Sempre - Ogni rientro all\'attività SCORM genererà un nuovo tentativo e lo studente non tornerà allo stesso punto in cui era nel suo tentativo precedente.';
$string['found'] = 'Manifest trovato';
$string['frameheight'] = 'L\'altezza del frame o della finestra';
$string['framewidth'] = 'La larghezza del frame o della finestra';
$string['fromleft'] = 'Da sinistra';
$string['fromtop'] = 'Da sopra';
$string['fullscreen'] = 'Schermo intero';
$string['general'] = 'Dati generali';
$string['gradeaverage'] = 'Media dei voti';
$string['gradeforattempt'] = 'Valutazione del tentativo';
$string['gradehighest'] = 'Voto migliore';
$string['grademethod'] = 'Metodo di valutazione';
$string['grademethod_help'] = 'Il metodo di valutazione definisce come valutare uno specifico tentativo.

Sono disponibili quattro metodi di valutazione:

* Learning object - Il numero di Learning object completati/superati.
* Voto migliore - Il voto più alto ottenuto nei Learning object superati
* Media dei voti - La media di tutti i voti
* Somma dei voti - La somma di tutti i voti';
$string['grademethoddesc'] = 'Imposta la modalità di calcolo della valutazione per un singolo tentativo';
$string['gradereported'] = 'Voto ottenuto';
$string['gradescoes'] = 'Learning object';
$string['gradesettings'] = 'Impostazioni di valutazione';
$string['gradesum'] = 'Somma dei voti';
$string['height'] = 'Altezza';
$string['hidden'] = 'Nascosta';
$string['hidebrowse'] = 'Nascondi l\'opzione Anteprima';
$string['hidebrowse_help'] = 'La modalità anteprima consente la visualizzazione dell\'attività prima di effettuare il tentativo vero e proprio. Se la modalità anteprima è disabilitata il pulsante Anteprima non sarà visibile.';
$string['hidebrowsedesc'] = 'La modalità anteprima consente allo studente la visione dell\'attività prima di effettuare un tentativo';
$string['hideexit'] = 'Nascondere il link (Esci dal corso)';
$string['hidereview'] = 'Nascondere il pulsante Rivedi';
$string['hidetoc'] = 'Visualizza nel player la struttura del corso';
$string['hidetoc_help'] = 'La modalità di visualizzazione della struttura del corso (TOC) nel player SCORM.';
$string['hidetocdesc'] = 'La modalità di visualizzazione della struttura del corso (TOC) nel player SCORM.';
$string['highestattempt'] = 'Tentativo migliore';
$string['identifier'] = 'Identificativo domanda';
$string['incomplete'] = 'Incompleto';
$string['indicator:cognitivedepth'] = 'SCORM cognitivo';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente svolgendo attività SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dalle attività SCORM (Livelli: Nessuna visualizzazione, Visualizzazione, Invio, Visualizzazione feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM sociale';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente svolgendo attività SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dall\'attività SCORM (Livelli: Nessuna partecipazione, Partecipazione da solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Info';
$string['interactions'] = 'Interazioni';
$string['invalidactivity'] = 'L\'attività SCORM è errata';
$string['invalidhacpsession'] = 'La sessione HACP non è valida';
$string['invalidmanifestname'] = 'È possibile selezionare solamente file imsmanifest.xml oppure .zip';
$string['invalidmanifestresource'] = 'ATTENZIONE: le seguenti risorse sono presenti nel manifest ma non è stato possibile trovarle:';
$string['invalidstatus'] = 'Stato non valido';
$string['invalidurl'] = 'La URL specificata non è valida';
$string['invalidurlhttpcheck'] = 'È stato specificato un URL non valido: Messaggio di debug: <pre> {$a->cmsg} </pre>';
$string['last'] = 'Accesso più recente il';
$string['lastaccess'] = 'Accesso più recente';
$string['lastattempt'] = 'Ultimo tentativo completato';
$string['lastattemptlock'] = 'Blocca dopo l\'ultimo tentativo';
$string['lastattemptlock_help'] = 'Gli studenti non potranno più lanciare il player SCORM se avranno esaurito tutti i tentativi a loro disposizione.';
$string['lastattemptlockdesc'] = 'Impedisce i lancio del player SCORM dopo l\'esaurimento di tutti i tentativi disponibili.';
$string['location'] = 'Visualizza la barra dell\'indirizzo';
$string['masteryoverride'] = 'Il mastery score sovrascrive lo stato';
$string['masteryoverride_help'] = 'Abitando l\'impostazione ed in presenza di mastery score, alla chiamata di LMSFinish con l\'impostazione di un punteggio grezzo, lo stato verrà ricalcolato utilizzando il punteggio grezzo ed il mastery score. Qualsiasi stato comunicato dal pacchetto SCORM (incluso "incompleto") sarà sovrascritto.';
$string['masteryoverridedesc'] = 'Il default per l\'impostazione di sovrascrittura del mastery score';
$string['max'] = 'Punteggio massimo';
$string['maximumattempts'] = 'Numero massimo di tentativi';
$string['maximumattempts_help'] = 'Imposta il numero massimo di tentativi consentiti. Funziona solamente per pacchetti SCORM 1.2 e AICC.';
$string['maximumattemptsdesc'] = 'Imposta il valore di default per il numero massimo di tentativi';
$string['maximumgradedesc'] = 'Imposta il valore di default per il punteggio massimo dell\'attività';
$string['menubar'] = 'Visualizza la barra dei menu';
$string['min'] = 'Punteggio minimo';
$string['missing_attribute'] = 'Attributo mancante {$a->attr} nel tag {$a->tag}';
$string['missing_tag'] = 'Tag mancante {$a->tag}';
$string['missingparam'] = 'Un parametro obbligatorio è mancante o errato';
$string['mode'] = 'Modalità';
$string['modulename'] = 'Pacchetto SCORM';
$string['modulename_help'] = 'Un oggetto SCORM è un insieme di file impacchettati secondo uno standard riconosciuto per la realizzazione di learning object. Il modulo di attività SCORM consente l\'utilizzo di pacchetti in formato .zip basati sugli standard SCORM e AICC.

In genere il contenuto di un pacchetto viene visualizzato su diverse pagine, con la possibilità di navigarle. È possibile impostare il pacchetto per visualizzare il contenuto in finestre pop up, con l\'indice dei contenuti, con i pulsanti di navigazione, eccetera. Gli oggetti SCORM possono anche presentare delle domande i cui risultati saranno memorizzati nel registro valutatore.

È possibile usare attività SCORM per:

* Presentare contenuti multimediali ed animazioni
* Valutare le attività degli studenti';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'Pacchetti SCORM';
$string['myaiccsessions'] = 'Le mie sessioni AICC';
$string['myattempts'] = 'I miei tentativi';
$string['nav'] = 'Visualizza navigazione';
$string['nav_help'] = 'L\'impostazione visualizza o nasconde i pulsanti di navigazione e la loro posizione.

Sono disponibili 3 opzioni:

* No: non visualizzare i pulsanti di navigazione
* Sotto il contenuto - Visualizza i pulsanti di navigazione sotto il contenuto del pacchetto SCORM
* Fluttuante - I pulsanti di navigazione vengono visualizzati fluttuanti con la posizione da destra e dall\'alto definita dal pacchetto.';
$string['navdesc'] = 'Specifica se visualizzare o nascondere i pulsanti di navigazione e la loro posizione.';
$string['navigation'] = 'Navigazione';
$string['navpositionleft'] = 'Posizione da sinistra dei pulsanti di navigazione, in pixel';
$string['navpositiontop'] = 'Posizione dall\'alto dei pulsanti di navigazione, in pixel';
$string['networkdropped'] = 'Il player SCORM ha rilevato che la tua connessione internet è poco affidabile oppure si è interrotta. Se prosegui nell\'attività SCORM, è possibile che i dati di tracciamento non vengano salvati.<br />
È preferibile uscire subito dall\'attività e accedervi nuovamente usando una connessione internet affidabile.';
$string['newattempt'] = 'Avvia un nuovo tentativo';
$string['next'] = 'Continua';
$string['no_attributes'] = 'Il tag {$a->tag} deve avere degli attributi';
$string['no_children'] = 'Il tag {$a->tag} deve avere dei figli';
$string['noactivity'] = 'Nessun report';
$string['noattemptsallowed'] = 'Numero di tentativi consentito';
$string['noattemptsmade'] = 'Numero di tentativi che hai effettuato';
$string['nolimit'] = 'Senza limite';
$string['nomanifest'] = 'Il pacchetto è errato - manca il file  imsmanifest.xml o la struttura AICC.';
$string['noprerequisites'] = 'Spiacente, non hai soddisfatto i  prerequisiti necessari per accedere all\'attività.';
$string['noreports'] = 'Non ci sono report da visualizzare';
$string['normal'] = 'Normale';
$string['noscriptnoscorm'] = 'Il browser utilizzato non supporta javascript o ha il supporto javascript disabilitato. Questo pacchetto SCORM potrebbe non funzionare o non salvare correttamente i dati.';
$string['not_corr_type'] = 'Tipo sbagliato per il tag {$a->tag}';
$string['notattempted'] = 'Non tentato';
$string['notopenyet'] = 'Spiacente, questa attività non è disponibile fino al {$a}';
$string['objectives'] = 'Obiettivi';
$string['openafterclose'] = 'Hai specificato una data di apertura successiva alla data di chiusura';
$string['optallstudents'] = 'tutti gli utenti';
$string['optattemptsonly'] = 'solo utenti con tentativi';
$string['options'] = 'Opzioni (in alcuni browser non consentite)';
$string['optionsadv'] = 'Opzioni (Avanzate)';
$string['optionsadv_desc'] = 'Imposta la larghezza e l\'altezza come opzioni avanzate.';
$string['optnoattemptsonly'] = 'solo utenti senza tentativi';
$string['organization'] = 'Organizzazione';
$string['organizations'] = 'Organizzazioni';
$string['othersettings'] = 'Impostazioni addizionali';
$string['package'] = 'File del pacchetto';
$string['package_help'] = 'Il pacchetto è un file con estensione zip (o pif) che contiene la definizione di un corso in formato SCORM/AICC.';
$string['packagedir'] = 'Errore filesystem: non è possibile creare la cartella del pacchetto';
$string['packagefile'] = 'Non è stato specificato nessun pacchetto/manifest';
$string['packagehdr'] = 'Pacchetto';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Consente l\'inserimento di un URL per lo SCORM anziché  scegliere un pacchetto con il file picker.';
$string['page-mod-scorm-x'] = 'Qualsiasi pagina con modulo SCORM';
$string['pagesize'] = 'Dimensione pagina';
$string['passed'] = 'Superato';
$string['php5'] = 'PHP5 (libreria DOMXML nativa)';
$string['pluginadministration'] = 'Amministrazione pacchetto SCORM';
$string['pluginname'] = 'Pacchetto SCORM';
$string['popup'] = 'Nuova finestra';
$string['popuplaunched'] = 'Il pacchetto SCORM è stato lanciato in una finestra popup. Se hai terminato la visualizzazione del pacchetto, fai click qui per ritornare alla pagina home del corso.';
$string['popupmenu'] = 'In un menu a discesa';
$string['popupopen'] = 'Apri il pacchetto in una nuova finestra';
$string['popupsblocked'] = 'Le finestre popup sembrano bloccate, impedendo di eseguire il modulo SCORM. Per favore prima di riprovare verifica le impostazioni del browser.';
$string['position_error'] = 'Il tag {$a->tag} non può essere figlio del tag {$a->parent}';
$string['preferencespage'] = 'Preferenze per questa pagina';
$string['preferencesuser'] = 'Preferenze per questo report';
$string['prev'] = 'Precedente';
$string['privacy:metadata:aicc:data'] = 'Dati personali passati attraverso il sottosistema AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Il plugin invia dati esternamente tramite l\'AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Stato della lezione da tracciare.';
$string['privacy:metadata:aicc_session:scormmode'] = 'Modalità dell\'elemento da tracciare.';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Stato dell\'elemento da tracciare.';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Orario della sessione da tracciare.';
$string['privacy:metadata:aicc_session:timecreated'] = 'Orario di creazione dell\'elemento tracciato.';
$string['privacy:metadata:attempt'] = 'Numero del tentativo.';
$string['privacy:metadata:scoes_track:element'] = 'Nome dell\'elemento da tracciare.';
$string['privacy:metadata:scoes_track:value'] = 'Valore dell\'elemento dato.';
$string['privacy:metadata:scorm_aicc_session'] = 'Informazioni sulla sessione tramite AICC HACP.';
$string['privacy:metadata:scorm_scoes_track'] = 'Dati tracciati degli SCO appartenenti all\'attività.';
$string['privacy:metadata:timemodified'] = 'Ora dell\'ultima modifica apportata all\'elemento tracciato.';
$string['privacy:metadata:userid'] = 'ID dell\'utente che ha avuto accesso all\'attività SCORM.';
$string['protectpackagedownloads'] = 'Evita il download del pacchetto';
$string['protectpackagedownloads_desc'] = 'Consente lo scaricamento dei pacchetti SCORM solo a coloro che hanno il privilegio course:manageactivities. Se l\'impostazione è disabilitata, i pacchetti SCORM potranno essere scaricati, ad esempio da dispositivi mobili.';
$string['raw'] = 'Punteggio grezzo';
$string['regular'] = 'Manifest corretto';
$string['report'] = 'Report';
$string['reportcountallattempts'] = '{$a->nbattempts} tentativi per {$a->nbusers} utenti su {$a->nbresults} risultati';
$string['reportcountattempts'] = '{$a->nbresults} risultati ({$a->nbusers} utenti)';
$string['reports'] = 'Report';
$string['repositorynotsupported'] = 'Questo repository non supporta il link a file imsmanifest.xml.';
$string['response'] = 'Risposta';
$string['result'] = 'Risultato';
$string['results'] = 'Risultati';
$string['review'] = 'Rivedi';
$string['reviewmode'] = 'Modalità revisione';
$string['rightanswer'] = 'Risposta corretta';
$string['scoes'] = 'Learning Object';
$string['score'] = 'Punteggio';
$string['scorm:addinstance'] = 'Aggiungere pacchetto SCORM';
$string['scorm:deleteownresponses'] = 'Eliminare propri tentativi';
$string['scorm:deleteresponses'] = 'Eliminare tentativi SCORM';
$string['scorm:savetrack'] = 'Essere tracciato';
$string['scorm:skipview'] = 'Saltare pagina introduttiva';
$string['scorm:viewreport'] = 'Visualizzare report';
$string['scorm:viewscores'] = 'Visualizzare punteggi';
$string['scormclose'] = 'Al';
$string['scormcourse'] = 'Corso';
$string['scormloggingoff'] = 'API Logging: Off';
$string['scormloggingon'] = 'API Logging: On';
$string['scormopen'] = 'Dal';
$string['scormresponsedeleted'] = 'I tentativi degli utenti sono stati eliminati';
$string['scormstandard'] = 'Modalità SCORM standard';
$string['scormstandarddesc'] = 'Se disabilitato, Moodle consentirà ai pacchetti SCORM 1.2 di memorizzare più di quanto consentito dalle specifiche e utilizzerà le impostazioni del formato del nome completo di Moodle viene trasferito il nome utente al pacchetto SCORM.';
$string['scormtype'] = 'Tipo';
$string['scormtype_help'] = 'L\'impostazione stabilisce come sarà incluso il pacchetto nel corso. Sono disponibili 4 opzioni:

* Pacchetto caricato - Consente la scelta di un pacchetto SCORM tramite file picker
* Manifest SCORM esterno - Consente l\'inserimento di un URL per il file imsmanifest.xml. Nota: se l\'URL appartiene ad un dominio diverso rispetto a questo sito, è preferibile usare "Pacchetto da scaricare", altrimenti le valutazioni non saranno salvate.
* Pacchetto da scaricare - Consente l\'inserimento dell\'URL  del pacchetto che sarà scaricato,  decompresso localmente ed anche aggiornato in presenza di aggiornamenti del pacchetto
* URL AICC esterna - l\'URL di lancio per una attività AICC. Attorno all\'URL verrà costruito uno pseudo package';
$string['scrollbars'] = 'Consenti lo scorrimento della finestra';
$string['search:activity'] = 'Pacchetto SCORM - informazioni sull\'attività';
$string['selectall'] = 'Seleziona tutto';
$string['selectnone'] = 'Deseleziona tutto';
$string['show'] = 'Visualizza';
$string['sided'] = 'Lateralmente';
$string['skipview'] = 'Gli studenti saltano la pagina con la struttura del pacchetto';
$string['skipview_help'] = 'L\'impostazione determina se saltare la pagina con la struttura del pacchetto SCORM. Se il pacchetto contiene un solo learning object, la pagina con la struttura può essere saltata sempre.';
$string['skipviewdesc'] = 'Imposta il valore di default per saltare o meno la pagina con la struttura del pacchetto';
$string['slashargs'] = 'ATTENZIONE: l\'opzione slash argument non è abilitata, alcune funzioni potrebbero non comportarsi correttamente.';
$string['stagesize'] = 'Dimensione Frame/Finestra';
$string['stagesize_help'] = 'Queste due impostazioni determinano la dimensione della finestra di visualizzazione del Learning Object.';
$string['started'] = 'Iniziato il';
$string['status'] = 'Stato';
$string['statusbar'] = 'Visualizza la barra di stato';
$string['student_response'] = 'Risposta';
$string['subplugintype_scormreport'] = 'Report';
$string['subplugintype_scormreport_plural'] = 'Report';
$string['suspended'] = 'Sospeso';
$string['syntax'] = 'Errore di sintassi';
$string['tag_error'] = 'Tag sconosciuto ({$a->tag}) con questo valore: {$a->value}';
$string['time'] = 'Tempo';
$string['title'] = 'Titolo';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Il tag {$a->tag} ha troppi attributi';
$string['too_many_children'] = 'Il tag {$a->tag} ha troppi figli';
$string['toolbar'] = 'Visualizza la barra degli strumenti';
$string['totaltime'] = 'Tempo';
$string['trackcorrectcount'] = 'Numero risultati corretti';
$string['trackcorrectcount_help'] = 'Numero di risultati corretti per la domanda';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'L\'identificativo della domanda impostato dal pacchetto SCORM. Le specifiche SCORM non consentono di ricavare il testo della domanda.';
$string['trackingloose'] = 'ATTENZIONE: I dati di tracciamento esistenti saranno eliminati!';
$string['tracklatency'] = 'Latenza';
$string['tracklatency_help'] = 'Il tempo intercorso tra il momento in cui l\'interazione è stata resa disponibile allo studente ed il momento in cui lo studente ha dato la prima risposta';
$string['trackpattern'] = 'Modello';
$string['trackpattern_help'] = 'Come dovrebbe essere la risposta corretta. Non visualizza la risposta agli studenti.';
$string['trackresponse'] = 'Risposta';
$string['trackresponse_help'] = 'La risposta data dallo studente';
$string['trackresult'] = 'Risultato';
$string['trackresult_help'] = 'Visualizza la correttezza delle risposte date dallo studente.';
$string['trackscoremax'] = 'Punteggio massimo';
$string['trackscoremax_help'] = 'Valore massimo nell\'intervallo per il punteggio grezzo';
$string['trackscoremin'] = 'Punteggio minimo';
$string['trackscoremin_help'] = 'Valore minimo nell\'intervallo per il punteggio grezzo';
$string['trackscoreraw'] = 'Punteggio grezzo';
$string['trackscoreraw_help'] = 'Numero che aiuta a valutare la prestazione dello studente relativo all\'intervallo determinato dai valori minimo e massimo.';
$string['tracksuspenddata'] = 'Dati per sospensione';
$string['tracksuspenddata_help'] = 'Fornisce uno spazio per memorizzare e recuperare dati tra le diverse sessioni dello studente';
$string['tracktime'] = 'Tempo';
$string['tracktime_help'] = 'Orario di inizio del tentativo';
$string['tracktype'] = 'Tipo';
$string['tracktype_help'] = 'Il tipo di domanda, ad esempio "choice" o "shortanswer"';
$string['trackweight'] = 'Peso';
$string['trackweight_help'] = 'Peso assegnato all\'elemento';
$string['type'] = 'Tipo';
$string['typeaiccurl'] = 'URL AICC esterna';
$string['typeexternal'] = 'Manifest SCORM esterno';
$string['typelocal'] = 'Pacchetto caricato';
$string['typelocalsync'] = 'Pacchetto da scaricare';
$string['undercontent'] = 'Sotto il contenuto';
$string['unziperror'] = 'Errore durante la decompressione del pacchetto';
$string['updatefreq'] = 'Frequenza auto-aggiornamento';
$string['updatefreq_error'] = 'È possibile impostare la frequenza di auto aggiornamento solamente per pacchetti esterni';
$string['updatefreq_help'] = 'Consente di scaricare ed aggiornare automaticamente il pacchetto esterno.';
$string['updatefreqdesc'] = 'Imposta il valore di default per la frequenza di auto-aggiornamento';
$string['validateascorm'] = 'Valida un pacchetto';
$string['validation'] = 'Risultati della validazione';
$string['validationtype'] = 'L\'impostazione determina la libreria DOMXML usata per validare il manifest SCORM. Se non lo sai lascia l\'impostazione al suo default.';
$string['value'] = 'Valore';
$string['versionwarning'] = 'La versione del manifest è precedente alla 1.3, avviso rilevato al tag {$a->tag}';
$string['viewallreports'] = 'Visualizza lo stato dei {$a} tentativi';
$string['viewalluserreports'] = 'Visualizza il report per {$a} utenti';
$string['whatgrade'] = 'Valutazione tentativi';
$string['whatgrade_help'] = 'Se sono consentiti più tentativi, con questa impostazione è possibile stabilire cosa memorizzare nel registro valutatore: il voto più alto, la media, il primo o l\'ultimo tentativo. L\'opzione Ultimo tentativo non comprende i tentativi con lo stato "failed"

Gestione di tentativi multipli

* Per avviare un nuovo tentativo è necessario spuntare la relativa casella sopra il pulsante Entra nella pagina con la struttura del corso. Accertarsi di consentire l\'accesso a questa pagina se si desidera consentire più tentativi.
* Alcuni pacchetti SCORM gestiscono bene i nuovi tentativi mentre altri no. Nel secondo caso se il pacchetto SCORM non ha la logica interna per evitare la sovra scrittura dei tentativi precedenti, si può verificare una perdita dei dati del tentativo quando lo studente entra nuovamente nello stesso tentativo, anche se il tentativo risulta "completato" o "superato".
* Le impostazioni "Forza completamento", "Forza un nuovo tentativo" e "Blocca dopo l\'ultimo tentativo" permettono di gestire al meglio i tentativi multipli.';
$string['whatgradedesc'] = 'Imposta la valutazione da memorizzare nel registro valutatore in presenza di più tentativi completati: tentativo migliore, primo o ultimo tentativo, media dei tentativi.';
$string['width'] = 'Larghezza';
$string['window'] = 'Finestra';
$string['youmustselectastatus'] = 'Devi selezionare uno stato';
