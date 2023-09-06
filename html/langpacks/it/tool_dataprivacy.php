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
 * Strings for component 'tool_dataprivacy', language 'it', version '4.1'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Attività e risorse';
$string['addcategory'] = 'Aggiungi categoria';
$string['addnewdefaults'] = 'Aggiungi un nuovo modulo di default';
$string['addpurpose'] = 'Aggiungi finalità';
$string['addroleoverride'] = 'Aggiungi eccezione sul ruolo';
$string['approve'] = 'Approva';
$string['approvedrequestsubmitted'] = 'La richiesta è stata inviata e sarà elaborata appena possibile.';
$string['approverequest'] = 'Approva richiesta';
$string['automaticdatadeletionapproval'] = 'Approvazione della richiesta di eliminazione automatica dei dati';
$string['automaticdatadeletionapproval_desc'] = 'Se abilitato, le richieste di eliminazione dei dati vengono approvate automaticamente.<br/>Tenere presente che l\'approvazione automatica si applicherà solo alle nuove richieste di eliminazione dei dati con questa impostazione abilitata. Le richieste di eliminazione dei dati esistenti in attesa di approvazione dovranno comunque essere approvate manualmente dal responsabile della privacy.';
$string['automaticdataexportapproval'] = 'Approvazione automatica della richiesta di esportazione dei dati';
$string['automaticdataexportapproval_desc'] = 'Se abilitato, le richieste di esportazione dei dati vengono approvate automaticamente.<br/>Tenere presente che l\'approvazione automatica si applicherà solo alle nuove richieste di esportazione dei dati con questa impostazione abilitata. Le richieste di esportazione dei dati esistenti in attesa di approvazione dovranno comunque essere approvate manualmente dal responsabile della privacy.';
$string['automaticdeletionrequests'] = 'Crea richieste di eliminazione automatica dei dati';
$string['automaticdeletionrequests_desc'] = 'Se abilitato, verrà creata automaticamente una richiesta di eliminazione dei dati per tutti gli account utente eliminati manualmente.';
$string['bulkapproverequests'] = 'Approva richieste';
$string['bulkdenyrequests'] = 'Rifiuta richieste';
$string['cachedef_contextlevel'] = 'Finalità e categoria dei livelli di contesto';
$string['cachedef_purpose'] = 'Finalità dei dati';
$string['cachedef_purpose_overrides'] = 'Eccezioni nelle finalità presenti nello strumento di Privacy dei dati';
$string['cancelrequest'] = 'Annulla richiesta';
$string['cancelrequestconfirmation'] = 'Sei sicuro di eliminare questa richiesta di dati?';
$string['cannotreset'] = 'Non è stato possibile resettare questa richiesta di dati. È possibile resettare solo richieste rifiutate.';
$string['categories'] = 'Categorie';
$string['categorieslist'] = 'Elenco delle categorie di dati';
$string['category'] = 'Categoria';
$string['category_help'] = 'Una categoria nel registro dei dati descrive una tipologia di dati. È possibile aggiungere una nuova categoria, oppure se è stato sezionato \'Eredita\', sarà applicata la categoria di dati del contesto superiore. I contesti disponibili (dal più basso al più alto) sono: Blocchi > Moduli di attività > Corsi > Categorie di corsi > Sito.';
$string['categorycreated'] = 'Categoria creata';
$string['categorydefault'] = 'Categoria di default';
$string['categorydefault_help'] = 'La categoria di default è la categoria di dati che sarà applicata a qualsiasi nuova istanza. Se è stato sezionato "Eredita", sarà applicata la categoria di dati del contesto superiore, I contesti disponibili (dal più basso al più alto) sono: Blocchi > Moduli di attività > Corsi > Categorie di corsi > Utenti > Sito.';
$string['categoryupdated'] = 'Categoria aggiornata';
$string['close'] = 'Chiudi';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = 'Vuoi approvare questa richiesta di dati?';
$string['confirmbulkapproval'] = 'Vuoi approvare in blocco tutte le richieste selezionate?';
$string['confirmbulkdenial'] = 'Vuoi rifiutare in blocco tutte le richieste selezionate?';
$string['confirmcompletion'] = 'Vuoi contrassegnare come completata questa richiesta dell\'utente?';
$string['confirmcontextdeletion'] = 'Vuoi confermare l\'eliminazione dei contesti sezionati? I dati utente saranno eliminati anche dagli eventuali sotto contesti.';
$string['confirmdenial'] = 'Vuoi rifiutare la richiesta di dati?';
$string['confirmrequestresubmit'] = 'Sei sicuro di annullare la richiesta di dati {$a->type} di {$a->username} e inviarla di nuovo?';
$string['contactdataprotectionofficer'] = 'Contatta il responsabile della privacy';
$string['contactdataprotectionofficer_desc'] = 'Se abilitato, gli utenti potranno contattare il responsabile della privacy ed effettuare una richiesta di dati tramite un link nella pagina del proprio profilo.';
$string['contactdpoviaprivacypolicy'] = 'Si prega di contattare il responsabile della privacy come descritto nell\'informativa sulla privacy.';
$string['contextlevelname10'] = 'Sito';
$string['contextlevelname30'] = 'Utenti';
$string['contextlevelname40'] = 'Categorie del corso';
$string['contextlevelname50'] = 'Corsi';
$string['contextlevelname70'] = 'Moduli di attività';
$string['contextlevelname80'] = 'Blocchi';
$string['contextpurposecategorysaved'] = 'Finalità e categoria salvati';
$string['createcategory'] = 'Crea categoria di dati';
$string['createdeletedatarequest'] = 'Crea richiesta di eliminazione dati';
$string['createnewdatarequest'] = 'Crea una nuova richiesta di dati';
$string['createpurpose'] = 'Crea finalità dei dati';
$string['creationauto'] = 'Automaticamente';
$string['creationmanual'] = 'Manualmente';
$string['datadeletion'] = 'Eliminazione dati';
$string['datadeletionpagehelp'] = 'I dati per i quali è scaduto il periodo di conservazione sono elencati qui. Si prega di rivedere e confermare l\'eliminazione dei dati, che verrà quindi eseguita dall\'elaborazione pianificata \'Elimina contesti scaduti\'.';
$string['dataprivacy:downloadallrequests'] = 'Scaricare esportazioni di dati di chiunque';
$string['dataprivacy:downloadownrequest'] = 'Scaricare proprie esportazione di dati';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Richiedere eliminazione di dati per i minori';
$string['dataprivacy:makedatarequestsforchildren'] = 'Effettuare richieste di dati per minori';
$string['dataprivacy:managedataregistry'] = 'Gestire registro dei dati';
$string['dataprivacy:managedatarequests'] = 'Gestire richieste di dati';
$string['dataprivacy:requestdelete'] = 'Richiedere eliminazione dei propri dati';
$string['dataprivacy:requestdeleteforotheruser'] = 'Richiedere eliminazione dei dati per conto di un altro utente';
$string['dataregistry'] = 'Registro dei dati';
$string['dataregistryinfo'] = 'Il registro dei dati consente di creare categorie (tipologie di dati) e finalità (i motivi del trattamento dei dati) per qualsiasi contesto del sito, dagli utenti e i corsi fino alle attività ed i blocchi. Per ciascuna finalità è possibile impostare un tempo di conservazione dei dati. Una volta trascorso il tempo di conservazione, i dati saranno posti in attesa della conferma di eliminazione da parte di un amministratore.';
$string['datarequestcreatedforuser'] = 'È stata creata una richiesta di dati da parte di {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Creata automaticamente da una elaborazione pianificata (eliminazione utente eliminato in precedenza)';
$string['datarequestcreatedupondelete'] = 'Creato automaticamente dopo l\'eliminazione dell\'utente';
$string['datarequestemailsubject'] = 'Richiesta di dati: {$a}';
$string['datarequests'] = 'Richieste di dati';
$string['dataretentionexplanation'] = 'Il riepilogo visualizza le categorie le finalità di default relative alla conservazione dei dati degli utenti. Da notare che alcune aree del sistema possono avere categorie e finalità più specifiche di quelle elencate.';
$string['dataretentionsummary'] = 'Riepilogo della conservazione dei dati';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'Data della richiesta';
$string['daterequesteddetail'] = 'Data della richiesta:';
$string['defaultexpired'] = 'Dati per tutti gli utente';
$string['defaultexpiredexcept'] = 'Dati per tutti gli utente, ad eccezione di coloro che possiedono almeno uno dei seguenti ruoli: <br> {$a->unexpired}';
$string['defaultsinfo'] = 'Le finalità e le categorie di default sono applicate a tutte le nuove ed esistenti istanze dove un valore non è impostato.';
$string['defaultssaved'] = 'Default salvati';
$string['defaultswarninginfo'] = 'Attenzione: la modifica di questi default può influenzare il periodo di conservazione di istanze preesistenti.';
$string['defaultunexpired'] = 'Solo i dati degli utenti che hanno uno dei seguenti ruoli: <br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Solo i dati degli utenti che hanno uno dei seguenti ruoli: <br>
{$a->expired}
A meno che abbiamo anche uno dei seguenti ruoli:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Elimina categoria';
$string['deletecategorytext'] = 'Sei sicuro di eliminare la categoria \'{$a}\'?';
$string['deletedefaults'] = 'Elimina default: {$a}';
$string['deletedefaultsconfirmation'] = 'Sei sicuro di eliminare la categoria e la finalità di default di {$a} moduli?';
$string['deleteexistingdeleteduserstask'] = 'Creazione richieste di eliminazione dati per utenti eliminati preesistenti';
$string['deleteexpiredcontextstask'] = 'Eliminazione contesti scaduti';
$string['deleteexpireddatarequeststask'] = 'Elimina i file di esportazione delle richieste di dati scaduti';
$string['deletemyaccount'] = 'Elimina il mio account';
$string['deletepurpose'] = 'Elimina finalità';
$string['deletepurposetext'] = 'Sei sicuro di eliminare la finalità \'{$a}\'?';
$string['deny'] = 'Rifiuta';
$string['denyrequest'] = 'Rifiuta richiesta';
$string['deprecated'] = 'Deprecato';
$string['deprecatedexplanation'] = 'Il plugin utilizza una vecchia versione di una delle interfacce della privacy e deve essere aggiornato.';
$string['download'] = 'Scarica';
$string['downloadexpireduser'] = 'Il tempo per il download è scaduto. Per esportare i dati personali devi inviare una nuova richiesta';
$string['dporolemapping'] = 'Mappatura ruolo del responsabile della privacy';
$string['dporolemapping_desc'] = 'Il responsabile della privacy gestisce le richieste di dati. Affinché un ruolo possa comparire nella mappatura del responsabile della privacy, il ruolo deve possedere Il privilegio tool/dataprivacy:managedatarequests';
$string['duplicaterole'] = 'Il ruolo è già stato impostato';
$string['editcategories'] = 'Modifica categorie';
$string['editcategory'] = 'Modifica categoria';
$string['editdefaults'] = 'Modifica default: {$a}';
$string['editmoduledefaults'] = 'Modifica il modulo di default';
$string['editpurpose'] = 'Modifica finalità';
$string['editpurposes'] = 'Modifica finalità';
$string['effectiveretentionperiodcourse'] = '{$a} (dopo la data di fine corso)';
$string['effectiveretentionperioduser'] = '{$a} (dalla data dell\'ultima autenticazione dell\'utente)';
$string['emailsalutation'] = 'Gentile {$a},';
$string['errorcannotrequestdeleteforother'] = 'Non sei autorizzato a richiedere l\'eliminazione dei dati di questo utente.';
$string['errorcannotrequestdeleteforself'] = 'Non sei autorizzato a richiedere l\'eliminazione dei tuoi dati.';
$string['errorcannotrequestexportforself'] = 'Non hai l\'autorizzazione per creare una richiesta di esportazione per te stesso.';
$string['errorcontactdpodisabled'] = 'L\'opzione per contattare il responsabile della privacy è disabilitata.';
$string['errorcontexthasunexpiredchildren'] = 'Il contesto "{$a}" ha dei sotto-contesti che non sono ancora scaduti. Nessun contesto è stato contrassegnato per l\'eliminazione.';
$string['errorinvalidrequestcomments'] = 'Il campo commenti può contenere solo testo semplice.';
$string['errorinvalidrequestcreationmethod'] = 'Il metodo di creazione della richiesta non è valido!';
$string['errorinvalidrequeststatus'] = 'Stato della richiesta non valido!';
$string['errorinvalidrequesttype'] = 'Tipo di richiesta non valido!';
$string['errornocapabilitytorequestforothers'] = 'L\'utente {$a->requestedby} non ha il privilegio di richiedere di dati nelle veci dell\'utente {$a->userid}';
$string['errornoexpiredcontexts'] = 'Non sono presenti contesti scaduti da elaborare';
$string['errorrequestalreadyexists'] = 'Hai già effettuato una richiesta.';
$string['errorrequestnotfound'] = 'La richiesta non è stata trovata';
$string['errorrequestnotwaitingforapproval'] = 'La richiesta non è in attesa di approvazione. Può non essere ancora pronta oppure è stata già elaborata.';
$string['errorsendingmessagetodpo'] = 'Si è verificato un errore durante l\'invio del messaggio ad {$a}.';
$string['exceptionnotificationbody'] = '<p>Si è verificata un\'eccezione chiamando <b>{$a->fullmethodname}</b>.<br>Il plugin <b>{$a->component}</b> non ha completato l\'elaborazione dei dati. Di seguito sono riportate informazioni utili per lo sviluppatore del pluign:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Si è verificata un\'eccezione durante l\'elaborazione dei dati della privacy';
$string['expandplugin'] = 'Espandi e contrai plugin.';
$string['expandplugintype'] = 'Espandere e contrarre il tipo di plugin.';
$string['expiredretentionperiodtask'] = 'Periodo di conservazione scaduto';
$string['expiredrolewithretention'] = '{$a->retention} (Scaduto)';
$string['expiry'] = 'Scadenza';
$string['explanationtitle'] = 'Icone usate in questa pagina e loro significato';
$string['external'] = 'Aggiuntivo';
$string['externalexplanation'] = 'Plugin aggiuntivo installato';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Corso della pagina home del sito';
$string['gdpr_art_6_1_a_description'] = 'L’interessato ha espresso il consenso al trattamento dei propri dati personali per una o più specifiche finalità';
$string['gdpr_art_6_1_a_name'] = 'Consenso (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Il trattamento è necessario all’esecuzione di un contratto di cui l’interessato è parte o all’esecuzione di misure precontrattuali adottate su richiesta dello stesso';
$string['gdpr_art_6_1_b_name'] = 'Contratto (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Il trattamento è necessario per adempiere un obbligo legale al quale è soggetto il titolare del trattamento';
$string['gdpr_art_6_1_c_name'] = 'Obbligo legale (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Il trattamento è necessario per tutelare un interesse vitale dell’interessato o di un’altra persona fisica';
$string['gdpr_art_6_1_d_name'] = 'Interessi vitali (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Il trattamento è necessario per l’esecuzione di un compito di interesse pubblico o connesso all’esercizio di pubblici poteri di cui è investito il titolare del trattamento';
$string['gdpr_art_6_1_e_name'] = 'Compito di interesse pubblico (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Il trattamento è necessario per il perseguimento del legittimo interesse del titolare del trattamento o di terzi, a condizione che non prevalgano gli interessi o i diritti e le libertà fondamentali dell’interessato che richiedono la protezione dei dati personali, in particolare se l’interessato è un minore';
$string['gdpr_art_6_1_f_name'] = 'Legittimo interesse (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'l’interessato ha prestato il proprio consenso esplicito al trattamento di tali dati personali per una o più finalità specifiche, salvo nei casi in cui il diritto dell’Unione o degli Stati membri dispone che l’interessato non possa revocare il divieto di cui al paragrafo 1, Articolo 9 del GDPR.';
$string['gdpr_art_9_2_a_name'] = 'Consenso esplicito (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Il trattamento è necessario per assolvere gli obblighi ed esercitare i diritti specifici del titolare del trattamento o dell’interessato in materia di diritto del lavoro e della sicurezza sociale e protezione sociale, nella misura in cui sia autorizzato dal diritto dell’Unione o degli Stati membri o da un contratto collettivo ai sensi del diritto degli Stati membri, in presenza di garanzie appropriate per i diritti fondamentali e gli interessi dell’interessato;';
$string['gdpr_art_9_2_b_name'] = 'Diritto del lavoro, della sicurezza sociale e protezione sociale (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Il trattamento è necessario per tutelare un interesse vitale dell’interessato o di un’altra persona fisica qualora l’interessato si trovi nell’incapacità fisica o giuridica di prestare il proprio consenso.';
$string['gdpr_art_9_2_c_name'] = 'Protezione di interessi vitali (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Il trattamento è effettuato, nell’ambito delle sue legittime attività e con adeguate garanzie, da una fondazione, associazione o altro organismo senza scopo di lucro che persegua finalità politiche, filosofiche, religiose o sindacali, a condizione che il trattamento riguardi unicamente i membri, gli ex membri o le persone che hanno regolari contatti con la fondazione, l’associazione o l’organismo a motivo delle sue finalità e che i dati personali non siano comunicati all’esterno senza il consenso dell’interessato';
$string['gdpr_art_9_2_d_name'] = 'Legittime attività di una fondazione, associazione o altro organismo senza scopo di lucro (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Il trattamento riguarda dati personali resi manifestamente pubblici dall’interessato';
$string['gdpr_art_9_2_e_name'] = 'Dati personali resi pubblici dall’interessato (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Il trattamento è necessario per accertare, esercitare o difendere un diritto in sede giudiziaria o ogniqualvolta le autorità giurisdizionali esercitino le loro funzioni giurisdizionali';
$string['gdpr_art_9_2_f_name'] = 'Azioni legali e attività giurisdizionali (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Il trattamento è necessario per motivi di interesse pubblico rilevante sulla base del diritto dell’Unione o degli Stati membri, che deve essere proporzionato alla finalità perseguita, rispettare l’essenza del diritto alla protezione dei dati e prevedere misure appropriate e specifiche per tutelare i diritti fondamentali e gli interessi dell’interessato';
$string['gdpr_art_9_2_g_name'] = 'Interesse pubblico rilevante (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Il trattamento è necessario per finalità di medicina preventiva o di medicina del lavoro, valutazione della capacità lavorativa del dipendente, diagnosi, assistenza o terapia sanitaria o sociale ovvero gestione dei sistemi e servizi sanitari o sociali sulla base del diritto dell’Unione o degli Stati membri o conformemente al contratto con un professionista della sanità, fatte salve le condizioni e le garanzie di cui al paragrafo 3, Articolo 9 del GDPR';
$string['gdpr_art_9_2_h_name'] = 'Finalità mediche (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Il trattamento è necessario per motivi di interesse pubblico nel settore della sanità pubblica, quali la protezione da gravi minacce per la salute a carattere transfrontaliero o la garanzia di parametri elevati di qualità e sicurezza dell’assistenza sanitaria e dei medicinali e dei dispositivi medici, sulla base del diritto dell’Unione o degli Stati membri che prevede misure appropriate e specifiche per tutelare i diritti e le libertà dell’interessato, in particolare il segreto professionale';
$string['gdpr_art_9_2_i_name'] = 'Sanità pubblica (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Il trattamento è necessario a fini di archiviazione nel pubblico interesse, di ricerca scientifica o storica o a fini statistici in conformità dell’articolo 89, paragrafo 1, sulla base del diritto dell’Unione o nazionale, che è proporzionato alla finalità perseguita, rispetta l’essenza del diritto alla protezione dei dati e prevede misure appropriate e specifiche per tutelare i diritti fondamentali e gli interessi dell’interessato';
$string['gdpr_art_9_2_j_name'] = 'Archiviazione nel pubblico interesse, ricerca scientifica o storica o a fini statistici (GDPR Art. 9.2(j))';
$string['hide'] = 'Contrai tutto';
$string['httpwarning'] = 'I dati scaricati da questo sito non sono crittografati. Per favore contatta l\'amministratore di sistema per richiedere l\'installazione di un certificato SSL.';
$string['inherit'] = 'Eredita';
$string['lawfulbases'] = 'Base giuridica del trattamento';
$string['lawfulbases_help'] = 'Selezionare almeno un\'opzione che specifichi la base giuridica del trattamento dei dati personali. Per maggiori informazioni: <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Contrassegna come completata';
$string['markedcomplete'] = 'la richiesta è stata contrassegnata come completata dal responsabile del trattamento dei dati.';
$string['message'] = 'Messaggio';
$string['messagelabel'] = 'Messaggio:';
$string['messageprovider:contactdataprotectionofficer'] = 'Richieste di dati';
$string['messageprovider:datarequestprocessingresults'] = 'Risultati delle richieste di dati';
$string['messageprovider:notifyexceptions'] = 'Notifiche di eccezioni relative alle richieste di dati';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Le mie richieste di dati';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} figlio';
$string['newrequest'] = 'Nuova richiesta';
$string['noactivitiestoload'] = 'Non ci sono attività';
$string['noassignedroles'] = 'Non ci sono ruoli assegnato in questo contesto';
$string['noblockstoload'] = 'Non ci sono blocchi';
$string['nocategories'] = 'Non sono presenti categorie';
$string['nocoursestoload'] = 'Non ci sono attività';
$string['nodatarequests'] = 'Non sono presenti richieste di dati';
$string['nodatarequestsmatchingfilter'] = 'Il filtro impostato non ha trovato richieste di dati';
$string['noexpiredcontexts'] = 'In questo contesto non sono presenti dati per i quali è scaduto il tempo di conservazione.';
$string['nopersonaldatarequests'] = 'Non hai effettuato richieste di dati';
$string['nopurposes'] = 'Non sono presenti finalità';
$string['nosubjectaccessrequests'] = 'Non sono presenti richieste di dati che richiedono azioni';
$string['nosystemdefaults'] = 'Le categorie e le finalità del sito non sono state impostate.';
$string['notset'] = 'Non impostato (utilizza default)';
$string['notyetexpired'] = '{$a} (non scaduto)';
$string['overrideinstances'] = 'Reimposta istanze con valori personalizzati';
$string['pluginname'] = 'Privacy dei dati';
$string['pluginname_help'] = 'Plugin privacy dei dati';
$string['pluginregistry'] = 'Registro privacy dei plugin';
$string['pluginregistrytitle'] = 'Registro della conformità alla privacy dei plugin';
$string['privacy'] = 'Privacy';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Filtro applicato alla pagina delle richieste di dati.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Numero di richiesta di dati che l\'utente desidera visualizzare sulla pagina.';
$string['privacy:metadata:purpose'] = 'Informazioni dalle finalità dei dati create per questo sito.';
$string['privacy:metadata:purpose:usermodified'] = 'ID dell\'utente che ha modificato la finalità';
$string['privacy:metadata:request'] = 'Informazioni su richieste di dai personali (con oggetto accesso e richieste di eliminazione) effettuate nel sito';
$string['privacy:metadata:request:comments'] = 'I commenti dell\'utente a corredo della richiesta';
$string['privacy:metadata:request:dpocomment'] = 'I commenti del responsabile del trattamento dei dati del sito al riguardo della richiesta.';
$string['privacy:metadata:request:requestedby'] = 'l\'ID dell\'utente che ha effettuato la richiesta nel casio sia stata effettuata in vece di un altro utente.';
$string['privacy:metadata:request:timecreated'] = 'La data e l\'ora in cui l\'utente ha effettuato la richiesta.';
$string['privacy:metadata:request:userid'] = 'L\'ID dell\'utente al quale la richiesta si riferisce';
$string['privacyofficeronly'] = 'Possono accedere a questo contenuto solamente gli utenti con  il ruolo di responsabile del trattamento dei dati  ({$a})';
$string['privacyrequestexpiry'] = 'Scadenza delle richeste di dati';
$string['privacyrequestexpiry_desc'] = 'Il tempo trascorso il quale saranno eliminato i download di file contenenti le richieste di dati';
$string['protected'] = 'Dati protetti';
$string['protectedlabel'] = 'La conservazione di questi dati ha precedenza legale rispetto al diritto all\'oblio dell\'utente. I dati protetti verranno eliminati solo allo scadere del tempo di conservazione.';
$string['purpose'] = 'Finalità';
$string['purpose_help'] = 'La finalità definisce le ragione per cui si trattano i dati. È possibile aggiungere una nuova finalità, oppure se è stato impostato \'Eredita\', verrà applicata la finalità del contesto superiore. I contesti sono (dal più basso al più alto): Blocchi > Moduli di attività > Corsi > Categorie di corso > Utente > Sito.';
$string['purposecreated'] = 'Finalità creata';
$string['purposedefault'] = 'Finalità di default';
$string['purposedefault_help'] = 'La finalità di default è la finalità assegnata alle nuove istanze. Impostando "Eredita", sarà assegnata la finalità del contesto superiore. I contesti sono (dal più basso al più alto): Blocchi > Moduli di attività > Corsi > Categorie di corso > Utente > Sito.';
$string['purposeoverview'] = 'La finalità definisce l\'uso dei dati e la politica di conservazione. Nella finalità è anche descritto  criteri di memorizzazione e mantenimento.';
$string['purposes'] = 'Finalità';
$string['purposeslist'] = 'Elenco delle finalità';
$string['purposeupdated'] = 'Finalità aggiornata';
$string['replyto'] = 'Rispondi a';
$string['requestactions'] = 'Azioni';
$string['requestapproved'] = 'La richiesta è stata approvata';
$string['requestby'] = 'Richiesto da';
$string['requestbydetail'] = 'Richiesto da:';
$string['requestcomments'] = 'Commenti';
$string['requestcomments_help'] = 'Se lo desideri puoi aggiungere ulteriori informazioni a corredo della richiesta.';
$string['requestcreation'] = 'Creazione';
$string['requestdenied'] = 'La richiesta è stata respinta';
$string['requestemailintro'] = 'È stata ricevuta una richiesta di dati:';
$string['requestfor'] = 'Utente';
$string['requestmarkedcomplete'] = 'La richiesta è stata soddisfatta';
$string['requestorigin'] = 'Sito';
$string['requestsapproved'] = 'Le richieste sono state approvate';
$string['requestsdenied'] = 'Le richieste sono state respinte';
$string['requeststatus'] = 'Stato';
$string['requestsubmitted'] = 'La richiesta è stata inviata al responsabile del trattamento dei dati del sito';
$string['requesttype'] = 'Tipo';
$string['requesttype_help'] = 'Inserisci per quale motivo desideri contattare il responsabile del trattamento dei dati del sito';
$string['requesttypedelete'] = 'Eliminazione dati personali';
$string['requesttypedeleteshort'] = 'Eliminazione';
$string['requesttypeexport'] = 'Esportazione dati personali';
$string['requesttypeexportshort'] = 'Esportazione';
$string['requesttypeothers'] = 'Richiesta generica';
$string['requesttypeothersshort'] = 'Messaggio';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Considera attivi i corsi privi di data di fine';
$string['requireallenddatesforuserdeletion_desc'] = 'Per calcolare la scadenza di un account utente, vengono tenuti in considerazioni diversi aspetti:

* la data di ultimo accesso viene confrontata con il periodo di conservazione dei dati
* la presenza di iscrizioni attive nei corsi

Durante la verifica delle iscrizioni attive, se il corso non ha una data di fine allora entra in gioco questa impostazione: nel caso in cui il corso non abbia data di fine e l\'impostazione sia attiva, l\'account dell\'utente iscritto al corso non potrà essere eliminato.';
$string['requiresattention'] = 'Richiedono attenzione.';
$string['requiresattentionexplanation'] = 'Plugin che non supporta le API privacy di Moodle. Qualora il pluign dovesse memorizzare dati personali, non sarà possibile esportarli o eliminarli attraverso il sistema di privacy di Moodle.';
$string['resubmitrequest'] = 'Invia di nuovo la richiesta {$a->type} dell\'utente {$a->username}';
$string['resubmitrequestasnew'] = 'Invia di nuovo la richiesta';
$string['resubmittedrequest'] = 'La richiesta già esistente {$a->type} dell\'utente {$a->username} è stata annullata e inviata di nuovo';
$string['resultdeleted'] = 'Hai richiesto l\'eliminazione del tuo account e dei tuoi dati personali presenti su {$a}. La richiesta è stata elaborata quindi non potrai più autenticarti.';
$string['resultdownloadready'] = 'La richiesta dei tuoi dati presenti su {$a} è stata elaborata e puoi scaricare i dati cliccando sul collegamento sottostante.';
$string['retentionperiod'] = 'Tempo di conservazione';
$string['retentionperiod_help'] = 'Il tempo di conservazione definisce il periodo di tempo durante il quale saranno conservati di dati. Una volta trascorso il tempo di conservazione, i dati saranno posti in attesa della conferma di eliminazione da parte di un amministratore.';
$string['retentionperiodnotdefined'] = 'Il tempo di conservazione non è stato impostato';
$string['retentionperiodzero'] = 'Nessun tempo di conservazione';
$string['reviewdata'] = 'Rivedi i dati';
$string['role'] = 'Ruolo';
$string['role_help'] = 'Ruolo al quale applicare l\'eccezione';
$string['roleoverride'] = 'Eccezione sul ruolo';
$string['roleoverrideoverview'] = 'È possibile impostare un tempo di conservazione diverso per ruoli specifici. I dati di un utente scadranno solo quando tutti i ruoli a lui assegnati saranno scaduti.';
$string['roleoverrides'] = 'Eccezioni sul ruolo';
$string['selectbulkaction'] = 'Per favore seleziona un\'azione in massa.';
$string['selectdatarequests'] = 'Per favore seleziona le richieste di dati.';
$string['selectuserdatarequest'] = 'Seleziona la richiesta di dati {$a->requesttype} dell\'utente {$a->username}.';
$string['send'] = 'Invia';
$string['sensitivedatareasons'] = 'Motivo del trattamento di dati personali sensibili';
$string['sensitivedatareasons_help'] = 'Selezionare una o più motivazioni per le quali è possibile derogare dal divieto di trattamento di dati personali sensibili relativamente a questa finalità. Per maggiori informazioni: <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Imposta default';
$string['showdataretentionsummary'] = 'Visualizza riepilogo della conservazione dei dati';
$string['showdataretentionsummary_desc'] = 'Nel piè di pagina sarà visualizzato un collegamento al riepilogo della conservazione dei dati.';
$string['statusapproved'] = 'Approvata';
$string['statusawaitingapproval'] = 'In attesa di approvazione';
$string['statuscancelled'] = 'Annullata';
$string['statuscomplete'] = 'Completata';
$string['statusdeleted'] = 'Eliminata';
$string['statusdetail'] = 'Stato:';
$string['statusexpired'] = 'Scaduta';
$string['statuspending'] = 'In attesa';
$string['statusprocessing'] = 'In elaborazione';
$string['statusready'] = 'Pronto per lo scaricamento';
$string['statusrejected'] = 'Respinta';
$string['subjectscope'] = 'Oggetto della finalità';
$string['subjectscope_help'] = 'L\'oggetto della finalità elenca i ruoli che possono essere assegnati nel contesto';
$string['summary'] = 'Riepilogo della configurazione del registro';
$string['systemconfignotsetwarning'] = 'Non è stata definita una finalità del sito e una categoria.  In assenza di queste configurazioni, quando saranno elaborate le richieste di eliminazione saranno eliminati tutti i dati.';
$string['tobedeleted'] = 'Dati da eliminare';
$string['unexpiredrolewithretention'] = '{$a->retention} (Non scaduto)';
$string['user'] = 'Utente';
$string['userlistexplanation'] = 'Il plugin ha il provider di base ma per supportare correttamente le funzionalità di privacy deve  implementare anche il provider userlist.';
$string['userlistnoncompliant'] = 'Il provider userlist è mancante';
$string['viewrequest'] = 'Visualizza la richiesta';
$string['visible'] = 'Espandi tutto';
