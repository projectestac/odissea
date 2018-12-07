<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dataprivacy', language 'it', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Attività e risorse';
$string['addcategory'] = 'Aggiungi categoria';
$string['addpurpose'] = 'Aggiungi finalità';
$string['approve'] = 'Approva';
$string['approverequest'] = 'Approva richiesta';
$string['cachedef_contextlevel'] = 'Categoria e finalità a livello di contesto';
$string['cachedef_purpose'] = 'Finalità dei dati';
$string['cancelrequest'] = 'Annulla richiesta';
$string['cancelrequestconfirmation'] = 'Sei sicuro di eliminare questa richiesta di dati?';
$string['categories'] = 'Categorie';
$string['categorieslist'] = 'Elenco delle categorie di dati';
$string['category'] = 'Categoria';
$string['categorycreated'] = 'Categoria creata';
$string['categoryupdated'] = 'Categoria aggiornata';
$string['close'] = 'Chiudi';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = 'Sei sicuro di approvare la richiesta di dati?';
$string['confirmcontextdeletion'] = 'Sei sicuro di confermare l\'eliminazione dei contesti sezionati? I dati utente saranno eliminati anche  dagli eventuali sotto contesti.';
$string['confirmdenial'] = 'Sei sicuro di respingere la richiesta di dati?';
$string['contactdataprotectionofficer'] = 'Contatta il Data Protection Officer';
$string['contactdataprotectionofficer_desc'] = 'L\'impostazione rende disponibile un collegamento per contattare il Data Protection Officer. Il collegamento sarà visualizzato nella pagina del profilo e nella pagina delle politiche di privacy. Il collegamento porterà ad una maschera di inserimento dei dati dove l\'utente potrà inviare richieste al Data Protection Officer.';
$string['contactdpoviaprivacypolicy'] = 'Per favore contatta il Data Protection Officer come indicato nelle Politiche di privacy';
$string['contextlevelname10'] = 'Sito';
$string['contextlevelname30'] = 'Utenti';
$string['contextlevelname40'] = 'Categorie di corso';
$string['contextlevelname50'] = 'Corsi';
$string['contextlevelname70'] = 'Moduli di attività';
$string['contextlevelname80'] = 'Blocchi';
$string['contextpurposecategorysaved'] = 'Finalità e categoria salvati';
$string['createcategory'] = 'Crea categorie di dati';
$string['createpurpose'] = 'Aggiungi finalità dei dati';
$string['datadeletion'] = 'Eliminazione dati';
$string['datadeletionpagehelp'] = 'Nella pagina sono elencati i contesti che hanno oltrepassato il tempo di conservazione e per i quali è necessario confermare l\'eliminazione dei dati utente. Una volta selezionati i contesti da eliminare, i dati utente relativi ai contati saranno eliminati alla prima esecuzione utile dell\'elaborazione pianificata "Eliminazione contesti scaduti".';
$string['dataprivacy:makedatarequestsforchildren'] = 'Esegui richiesta di dati per minori';
$string['dataprivacy:managedataregistry'] = 'Gestione conservazione dei dati';
$string['dataprivacy:managedatarequests'] = 'Gestione richieste dati';
$string['dataregistry'] = 'Conservazione dei dati';
$string['datarequestemailsubject'] = 'Richiesta di dati: {$a}';
$string['datarequests'] = 'Richieste di dati';
$string['daterequested'] = 'Data della richiesta';
$string['daterequesteddetail'] = 'Date delle richieste:';
$string['defaultsinfo'] = 'Le finalità e la categorie di default saranno applicati alle nuove istanze.';
$string['defaultssaved'] = 'Default salvati';
$string['deletecategory'] = 'Elimina categoria "{$a}"';
$string['deletecategorytext'] = 'Sei sicuro di eliminare la categoria "{$a}"?';
$string['deleteexpiredcontextstask'] = 'Eliminazione contesti scaduti';
$string['deletepurpose'] = 'Elimina finalità "{$a}"';
$string['deletepurposetext'] = 'Sei sicuro di eliminare la finalità "{$a}"?';
$string['deny'] = 'Respingi';
$string['denyrequest'] = 'Respingi richiesta';
$string['download'] = 'Scarica';
$string['dporolemapping'] = 'Mappatura ruolo Data Protection Officer';
$string['dporolemapping_desc'] = 'Seleziona uno o più ruoli da mappare sul ruolo di Data Protection Officer. Gli utenti che avranno questi ruoli potranno gestire le richieste di dati. I ruoli selezionati devono anche avere il privilegio \'tool/dataprivacy:managedatarequests\'.';
$string['editcategories'] = 'Modifica categorie';
$string['editcategory'] = 'Modifica categoria';
$string['editpurpose'] = 'Modifica finalità';
$string['editpurposes'] = 'Modifica finalità';
$string['effectiveretentionperiodcourse'] = '{$a} (dopo la data di fine corso)';
$string['effectiveretentionperioduser'] = '{$a} (dalla data dell\'ultima autenticazione dell\'utente)';
$string['emailsalutation'] = 'Gentile {$a},';
$string['errorcontexthasunexpiredchildren'] = 'Il contesto "{$a}" ha sotto-contesti che non sono scaduti. nessun contesto è stato contrassegnato per l\'eliminazione.';
$string['errorinvalidrequeststatus'] = 'Stato della richiesta non valido';
$string['errorinvalidrequesttype'] = 'Tipo di richiesta non valido';
$string['errornoexpiredcontexts'] = 'Non sono presenti contesti scaduti da elaborare';
$string['errorrequestalreadyexists'] = 'Hai già effettuato una richiesta.';
$string['errorrequestnotfound'] = 'Richiesta non trovata';
$string['errorrequestnotwaitingforapproval'] = 'La richiesta non è in attesa di approvazione. Può non essere ancora pronta oppure è stata già elaborata.';
$string['errorsendingmessagetodpo'] = 'Si è verificato un errore durante l\'invio del messaggio ad {$a}.';
$string['expandplugin'] = 'Espandi e contrai plugin.';
$string['expandplugintype'] = 'Espandi e contrai tipi di plugin.';
$string['expiredretentionperiodtask'] = 'Tempo di conservazione dopo la scadenza';
$string['expiry'] = 'Scadenza';
$string['explanationtitle'] = 'Significato delle icone presenti nella pagina';
$string['external'] = 'Aggiuntivo';
$string['externalexplanation'] = 'Plugin aggiuntivo installato';
$string['frontpagecourse'] = 'Corso home page';
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
$string['lawfulbases'] = 'Liceità del trattamento';
$string['lawfulbases_help'] = 'Sezionare almeno un\'opzione che attesti la liceità del trattamento dei dati personali. Per maggiori informazioni: <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['message'] = 'Messaggio';
$string['messagelabel'] = 'Messaggio:';
$string['messageprovider:contactdataprotectionofficer'] = 'Richiesta di dati';
$string['messageprovider:datarequestprocessingresults'] = 'Risultato dell\'elaborazione della richiesta di dati';
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
$string['noexpiredcontexts'] = 'In questo livello non sono presenti contesti scaduti che richiedono conferma di eliminazione.';
$string['nopersonaldatarequests'] = 'Non hai effettuato richieste di dati';
$string['nopurposes'] = 'Non sono presenti finalità';
$string['nosubjectaccessrequests'] = 'Non sono presenti richieste di dati che richiedono azioni';
$string['nosystemdefaults'] = 'La finalità del sito e la categoria non sono state impostate.';
$string['notset'] = 'Non impostato (utilizza default)';
$string['pluginname'] = 'Privacy dei dati';
$string['pluginname_help'] = 'Plugin privacy dei dati';
$string['pluginregistry'] = 'Registro privacy dei plugin';
$string['pluginregistrytitle'] = 'Registro della conformità alla privacy dei plugin';
$string['privacy'] = 'Privacy';
$string['privacy:metadata:request'] = 'Informazioni su richieste di dai personali (con oggetto accesso e richieste di eliminazione) effettuate nel sito';
$string['privacy:metadata:request:comments'] = 'I commenti dell\'utente a corredo della richiesta';
$string['privacy:metadata:request:dpocomment'] = 'I commenti del Data Protection Officer del sito circa la  richiesta';
$string['privacy:metadata:request:requestedby'] = 'l\'ID dell\'utente che ha effettuato la richiesta nel casio sia stata effettuata in vece di un altro utente.';
$string['privacy:metadata:request:timecreated'] = 'La data e l\'ora in cui l\'utente ha effettuato la richiesta.';
$string['privacy:metadata:request:userid'] = 'L\'ID dell\'utente al quale la richiesta si riferisce';
$string['protected'] = 'Dati protetti';
$string['protectedlabel'] = 'La conservazione di questi dati ha precedenza legale rispetto al diritto all\'oblio dell\'utente. I dati protetti verranno eliminati solo allo scadere del tempo di conservazione.';
$string['purpose'] = 'Finalità';
$string['purposecreated'] = 'Finalità creata';
$string['purposes'] = 'Finalità';
$string['purposeslist'] = 'Elenco delle finalità';
$string['purposeupdated'] = 'Finalità aggiornata';
$string['replyto'] = 'Rispondi a';
$string['requestactions'] = 'Azioni';
$string['requestby'] = 'Richiesto da';
$string['requestcomments'] = 'Commenti';
$string['requestcomments_help'] = 'Se lo desideri puoi aggiungere ulteriori informazioni a corredo della richiesta';
$string['requestemailintro'] = 'E\' stata ricevuta una richiesta di dati:';
$string['requestfor'] = 'Richiesta di';
$string['requeststatus'] = 'Stato';
$string['requestsubmitted'] = 'La richiesta è stata inviata al Data Protection Officer del sito';
$string['requesttype'] = 'Tipo';
$string['requesttypedelete'] = 'Eliminazione dati personali';
$string['requesttypedeleteshort'] = 'Elimina';
$string['requesttypeexport'] = 'Esportazione dati personali';
$string['requesttypeexportshort'] = 'Esporta';
$string['requesttype_help'] = 'Inserisci per quale motivo desideri contattare il Data Protection Officer del sito';
$string['requesttypeothers'] = 'Richiesta generica';
$string['requesttypeothersshort'] = 'Altro';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requiresattention'] = 'Richiedono attenzione.';
$string['requiresattentionexplanation'] = 'Plugin che non supporta le API privacy di Moodle. Qualora il pluign dovesse memorizzare dati personali, non sarà possibile esportarli o eliminarli attraverso il sistema di privacy di Moodle.';
$string['resultdeleted'] = 'Hai richiesto l\'eliminazione del tuo account e dei tuoi dati personali presenti su {$a}. La richiesta è stata elaborata quindi non potrai più autenticarti.';
$string['resultdownloadready'] = 'La richiesta della copia dei tuoi dati presenti su {$a} è stata elaborata e puoi scaricare i dati cliccando sul collegamento sottostante.';
$string['retentionperiod'] = 'Tempo di conservazione';
$string['retentionperiodnotdefined'] = 'Il tempo di conservazione non è stato impostato';
$string['retentionperiodzero'] = 'Nessun tempo di conservazione';
$string['reviewdata'] = 'Rivedi i dati';
$string['send'] = 'Invia';
$string['sensitivedatareasons'] = 'Motivo del trattamento di dati personali sensibili';
$string['sensitivedatareasons_help'] = 'Selezionare una o più motivazioni per le quali è possibile derogare dal divieto di trattamento di dati personali sensibili relativamente a questa finalità. Per maggiori informazioni: <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Imposta default';
$string['statusapproved'] = 'Approvata';
$string['statusawaitingapproval'] = 'In attesa di approvazione';
$string['statuscancelled'] = 'Annullata';
$string['statuscomplete'] = 'Completata';
$string['statusdetail'] = 'Stato:';
$string['statuspending'] = 'In attesa';
$string['statuspreprocessing'] = 'Pre-elaborazione';
$string['statusprocessing'] = 'In elaborazione';
$string['statusrejected'] = 'Respinta';
$string['subjectscope'] = 'Oggetto dello finalità';
$string['user'] = 'Utente';
$string['viewrequest'] = 'Visualizza la richiesta';
$string['visible'] = 'Espandi tutto';
