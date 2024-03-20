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
 * Strings for component 'lti', language 'it', version '4.1'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Accetta';
$string['accept_grades'] = 'Accetta valutazioni dal tool';
$string['accept_grades_admin'] = 'Accetta valutazioni dal tool';
$string['accept_grades_admin_help'] = 'Stabilisce se il tool provider può aggiungere, aggiornare, leggere ed eliminare le valutazioni abbinate alle istanze di questo tool.

Alcuni tool provider supportano l\'invio delle valutazioni verso Moodle, in funzione della attività svolte nel tool, fornendo una esperienza più integrata.';
$string['accept_grades_help'] = 'Stabilisce se il tool provider può aggiungere, aggiornare, leggere ed eliminare le valutazioni abbinate a questa istanza di tool esterno.

Alcuni tool provider supportano l\'invio delle valutazioni verso Moodle, in funzione della attività svolte nel tool, fornendo una esperienza più integrata.

Da notare che l\'impostazione potrebbe essere modificata dalla configurazione del tool.';
$string['accepted'] = 'Accettati';
$string['action'] = 'Azione';
$string['activate'] = 'Abilita';
$string['activatetoadddescription'] = 'Devi abilitare questo tool prima di poter aggiungere una descrizione';
$string['active'] = 'Attivi';
$string['activity'] = 'Attivtà';
$string['add_ltiadv'] = 'Aggiungi LTI Advantage';
$string['add_ltilegacy'] = 'Aggiungi LTI (versione obsoleta)';
$string['addnewapp'] = 'Abilita applicazioni esterna';
$string['addserver'] = 'Aggiungi nuovo server affidabile';
$string['addtype'] = 'Aggiungi tool preconfigurato';
$string['allow'] = 'Consenti';
$string['allowsetting'] = 'Consenti al tool di memorizzare 8K di impostazioni in Moodle';
$string['always'] = 'Sempre';
$string['autoaddtype'] = 'Aggiungi tool';
$string['automatic'] = 'Automatico, in funzione dell\'URL del tool';
$string['baseurl'] = 'URL base/Tool registration name';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Stringa base LTI OAuth';
$string['basiclti_endpoint'] = 'Endpoint di lancio LTI';
$string['basiclti_in_new_window'] = 'L\'attività è stata aperta in una nuova finestra';
$string['basiclti_in_new_window_open'] = 'Apri in una nuova finestra';
$string['basiclti_parameters'] = 'Parametri di lancio LTI';
$string['basicltiactivities'] = 'Attività LTI';
$string['basicltifieldset'] = 'Esempio personalizzato di campi';
$string['basicltiintro'] = 'Descrizione';
$string['basicltiname'] = 'Nome attività';
$string['basicltisettings'] = 'Impostazioni di base Learning Tool Interoperability (LTI)';
$string['cachedef_keyset'] = 'Informazioni sui set di chiavi dei tool';
$string['cancel'] = 'Annulla';
$string['cancelled'] = 'Annullato';
$string['cannot_delete'] = 'Non dovresti eliminare la configurazione di questo tool.';
$string['cannot_edit'] = 'Non dovresti modificare la configurazione di questo tool.';
$string['capabilities'] = 'Funzionalità';
$string['capabilities_help'] = 'Selezionare le funzionalità che si desidera offrire al tool provider. È possibile selezionare più di una funzionalità.';
$string['capabilitiesrequired'] = 'Per essere attivato il tool deve accedere ali seguenti dati:';
$string['cleanaccesstokens'] = 'Rimozione token scaduti dei tool esterni';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Click per continuare</a>';
$string['clientidadmin'] = 'ID del client';
$string['clientidadmin_help'] = 'L\'ID client è un valore univoco utilizzato per identificare un tool. Viene creato automaticamente per ogni tool che utilizza il profilo di sicurezza JWT introdotto in LTI 1.3 e deve far parte dei dettagli passati al fornitore del tool in modo che possa configurare la propria connessione.';
$string['comment'] = 'Comment';
$string['configpassword'] = 'Password di default del tool remoto';
$string['configpreferheight'] = 'Altezza preferita di default';
$string['configpreferwidget'] = 'Imposta widget come lancio di default';
$string['configpreferwidth'] = 'Larghezza preferita di default';
$string['configresourceurl'] = 'Risorsa URL di default';
$string['configtoolurl'] = 'URL di default del tool remoto';
$string['configtypes'] = 'Abilita applicazioni LTI';
$string['configured'] = 'Configurati';
$string['confirmtoolactivation'] = 'Sei sicuro di attivare questo tool?';
$string['contentitem'] = 'Messaggio Content-Item';
$string['contentitem_deeplinking'] = 'Supporta il deep linking (Content-Item Message)';
$string['contentitem_deeplinking_help'] = 'Consente di rendere disponibile l\'impostazione \'Seleziona contenuto\' quando si aggiunge un tool esterno.';
$string['contentitem_help'] = 'Consente di rendere disponibile l\'impostazione \'Seleziona contenuto\' quando si aggiunge un tool esterno.';
$string['contentitem_multiple_description'] = 'I seguenti elementi saranno aggiunti al corso:';
$string['contentitem_multiple_graded'] = 'Attività valutata  (voto massimo: {$a})';
$string['course_tool_types'] = 'Tool del corso';
$string['courseactivitiesorresources'] = 'Attività e risorse del cofso';
$string['courseid'] = 'Codice identificativo del corso';
$string['courseinformation'] = 'Informazioni sul corso';
$string['courselink'] = 'Vai al corso';
$string['coursemisconf'] = 'Il corso è mal configurato';
$string['createdon'] = 'Data di creazione';
$string['curllibrarymissing'] = 'Per usare il Tool esterno deve essere installata la libreria PHP Curl';
$string['custom'] = 'Parametri personalizzati';
$string['custom_config'] = 'Utilizzo del tool personalizzato di configurazione';
$string['custom_help'] = 'I parametri personalizzati sono impostazioni usate dal provider del tool. Ad esempio, è possibile usare un parametro personalizzato per visualizzare una specifica risorsa dal provider. I parametri devono essere inseriti uno per linea con il formato "nome=valore", ad esempio "capitolo=3".

Se non diversamente indicato dal provider, non modificare il campo.';
$string['custominstr'] = 'Parametri personalizzati';
$string['debuglaunch'] = 'Opzioni di debug';
$string['debuglaunchoff'] = 'Lancio normale';
$string['debuglaunchon'] = 'Lancio di debug';
$string['default'] = 'Default';
$string['default_launch_container'] = 'Contenitore di lancio di default';
$string['default_launch_container_help'] = 'Il contenitore di lancio influenza la visualizzazione del tool lanciato dal corso. Alcuni contenitori di lancio lasciano più libero il tool mentre altri forniscono una esperienza dell\'utente più integrata con Moodle

* ** Default** - Usa il contenitore di lancio impostato nella configurazione del tool.
* **incorpora** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente analogamente ad altri tipi di attività.
* **Incorpora, senza blocchi** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente, ma con i soli controlli di navigazione sulla parte superiore della pagina.
* **Nuova finestra** - Il tool viene aperto in una nuova finestra che occuperà tutto lo spazio disponibile. In funzione del tipo di browser, la nuova finestra può essere una finestra popup oppure un tab di una finestra già esistente. È possibile che il browser impedisca l\'apertura di nuove finestre.';
$string['delegate'] = 'Delega al docente';
$string['delegate_tool'] = 'Come specificato nella definizione di Deep Linking o Delega al docente';
$string['delete'] = 'Elimina';
$string['delete_confirmation'] = 'Sei sicuro di eliminare questo tool preconfigurato?';
$string['deletetype'] = 'Elimina tool preconfigurato';
$string['display_description'] = 'Visualizza l\' introduzione dell\'attività all\'atto del lancio';
$string['display_description_help'] = 'Consente la visualizzazione dell\'introduzione alll\'attività sopra il contenuto del tool provider.

Visualizzare l\'introduzione è opzionale ma può essere utile per fornire ulteriori istruzione a colui che lancia il tool.

L\'introduzione non viene mai visualizzata quando si lancia il tool in una nuova finestra.';
$string['display_name'] = 'Visualizza il nome dell\'attività lanciata';
$string['display_name_help'] = 'Consente la visualizzazione del nome dell\'attività sopra il contenuto del tool provider.

Poiché è possibile che il tool provider visualizzi già il nome dell\'attività, con questa impostazione si può evitare di visualizzarlo due volte.

Il nome non viene visualizzato quando il lancio del tool avviene in una nuva finestra.';
$string['domain_mismatch'] = 'L\'URL del dominio del tool non corrisponde a quello configurato.';
$string['donot'] = 'Non inviare';
$string['donotaccept'] = 'Non accettare';
$string['donotallow'] = 'Non consentire';
$string['duplicateregurl'] = 'L\'URL di registrazione è già stata utilizzata';
$string['dynreg_update_btn_new'] = 'Registra come nuovo tool esterno';
$string['dynreg_update_btn_update'] = 'Aggiorna';
$string['dynreg_update_name'] = 'Nome del tool';
$string['dynreg_update_notools'] = 'Nessun tool presente nel contesto.';
$string['dynreg_update_text'] = 'Esistono tool esistenti collegati al dominio di registrazione. Desideri aggiornare tool esterno già installato o creare un nuovo tool esterno?';
$string['dynreg_update_url'] = 'URL base';
$string['dynreg_update_version'] = 'Versione LTI';
$string['dynreg_update_warn_dupdomain'] = 'Non è consigliabile avere più tool esterni nello stesso dominio.';
$string['editdescription'] = 'Fai click qui per impostare una descrizione del tool';
$string['edittype'] = 'Modifica tool preconfigurato';
$string['embed'] = 'Incorpora';
$string['embed_no_blocks'] = 'incorporato, senza blocchi';
$string['enableemailnotification'] = 'Invia notifiche per email';
$string['enableemailnotification_help'] = 'Consente di inviare email di notifica agli studenti quando la loro consegna del tool sarà stata valutata.';
$string['enterkeyandsecret'] = 'Inserisci la consumer key e lo shared secret';
$string['enterkeyandsecret_help'] = 'Se hai ricevuto un consumer key o un shared secret, inseriscili qui.';
$string['errorbadurl'] = 'L\'URL non è un URL di tool o cartridge valido.';
$string['errorincorrectconsumerkey'] = 'La chiave consumer è errata.';
$string['errorinvaliddata'] = 'Dati non validi: {$a}';
$string['errorinvalidmediatype'] = 'Tipo di media non valido: {$a}';
$string['errorinvalidresponseformat'] = 'Il formato della risposta Content-Item non è valido.';
$string['errormisconfig'] = 'Il tool è mal configurato. Per favore chiedi al tuo amministratore Moodle di sistemare la configurazione del tool.';
$string['errortooltypenotfound'] = 'Tipo di tool LTI non tovato.';
$string['existing_window'] = 'Finestra esistente';
$string['extensions'] = 'Servizi di estensione LTI';
$string['external_tool_type'] = 'Tool preconfigurato';
$string['external_tool_type_help'] = '* **Automatico, in funzione dell\'URL del tool** - Verrà scelta automaticamente la configurazione più appropriata. Nel caso in cui venga riconosciuto l\'URL del tool, sarà necessario inserire manualmente i dettagli della configurazione.
* **Uno specifico tool preconfigurato** - Verrà utilizzata la configurazione del tool per comunicare con il tool provider esterno. Qualora l\'URL di lancio non appartenga al tool provider, verrà visualizzato un avvertimento. In alcuni casi non è necessario impostare un URL del tool
* **Configurazione personalizzata** - Devono essere inseriti manualmente consumer key e shared secret, ottenibili dal fornitore del tool. Non tutti i tool richiedono consumer key e shared secret, nel qual caso è possibile non compilare i relativi campi.

### Modifica dei tool preconfigurati

Accanto al menu a discesa Tipo di tool esterno sono disponibili tre icone:

* **Aggiungi** - Consente la creazione di una configurazione di tool a livello di corso. Qualsiasi istanza di tool esterno nello stesso corso potrà usare questa configurazione.
* **Modifica** - Consente la scelta di una configurazione di tool a livello di corso e di modificarla.
* **Elimina** - Elimina una configurazione di tool a livello di corso';
$string['external_tool_types'] = 'Tool preconfigurati';
$string['failedtoconnect'] = 'Moodle non è riuscito a comunicare con il sistema "{$a}"';
$string['failedtocreatetooltype'] = 'Non è stato possibile creare un nuovo tool. Controllare l\'URL prima di riprovare.';
$string['failedtodeletetoolproxy'] = 'Non è stato possibile eliminare la registrazione del tool. Per provare ad eliminarla manualmente,  visita l\'URL "Gestione registrazione tool esterni".';
$string['filter_basiclti_configlink'] = 'Configura i tuoi siti preferiti e le relative password';
$string['filter_basiclti_password'] = 'La password è obbligatoria';
$string['filterconfig'] = 'Gestione LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilizza una configurazione esistente per l\'istanza mal configurata';
$string['fixnew'] = 'Nuova configurazione';
$string['fixnewconf'] = 'Crea una nuova configurazione per l\'istanza mal configurata';
$string['fixold'] = 'Usa esistente';
$string['force_ssl'] = 'SSL obbligatorio';
$string['force_ssl_help'] = 'I lanci di questo tool provider saranno obbligati ad usare SSL.

Inoltre, SSL sarà utilizzato anche per richieste web service provenienti dal tool provider.

Per usare questa opzione, accertatevi che sia Moodle sia il tool provider supportino SSL.';
$string['forced_help'] = 'L\'impostazione è stata forzato in un corso o in una configurazione a livello di siti. Non puoi modificarla da questa interfaccia.';
$string['generaltool'] = 'Tool generale';
$string['global_tool_types'] = 'Tool preconfigurati';
$string['grading'] = 'Instradamento valutazioni';
$string['icon_url'] = 'URL dell\'icona';
$string['icon_url_help'] = 'L\'URL dell\'icona consente di visualizzare nella pagina home del corso l\'icona specifica del tool al posto dell\'icona LTI default';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI cognitivo';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente svolgendo attività LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dalle attività LTI (Livelli: Nessuna visualizzazione, Visualizzazione, Invio, Visualizzazione feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI sociale';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente svolgendo attività LTI.';
$string['indicator:socialbreadthdef'] = 'LTI sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dall\'attività LTI (Livelli: Nessuna partecipazione, Partecipazione da solo, Partecipazione con altri)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'URL di login iniziale';
$string['initiatelogin_help'] = 'L\'URL del tool a cui devono essere inviate le richieste per l\'inizio di un login. È necessario disporre dell\'URL prima che messaggio possa essere inviato correttamente al tool un messaggio.';
$string['invalidid'] = 'L\'ID LTI era errata';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Tipo di chiave pubblica';
$string['keytype_help'] = 'Il metodo di autenticazione utilizzato per validare il tool.';
$string['keytype_keyset'] = 'URL del set di chiavi';
$string['keytype_rsa'] = 'Chiave RSA';
$string['launch_in_moodle'] = 'Lancia il tool in Moodle';
$string['launch_in_popup'] = 'Lancia il tool in una finestra pop-up';
$string['launch_url'] = 'URL tool';
$string['launch_url_help'] = 'L\'URL del tool specifica l\'indirizzo web del tool esterno e può contenere informazioni aggiuntive come la risorsa da visualizzare.
Se non sei certo su cosa inserire per l\'URL del tool, verifica le informazioni con il tool provider.

È possibile inserire un URL cartridge se disponibile, in modo da compilare i campi restanti in modo automatico.

Se è stato selezionato un tipo di tool specifico, può non essere necessario inserire l\'URL del tool, ad esempio quando l\'URl del tool è utilizzata per accedere al sistema del tool provider invece che ad una specifica risorsa.';
$string['launchinpopup'] = 'Contenitore di lancio';
$string['launchinpopup_help'] = 'Il contenitore di lancio influenza la visualizzazione del tool lanciato dal corso. Alcuni contenitori di lancio lasciano più libero il tool mentre altri forniscono una esperienza dell\'utente più integrata con Moodle

* ** Default** - Usa il contenitore di lancio impostato nella configurazione del tool.
* **incorpora** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente analogamente ad altri tipi di attività.
* **Incorpora, senza blocchi** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente, ma con i soli controlli di navigazione sulla parte superiore della pagina.
* **Nuova finestra** - Il tool viene aperto in una nuova finestra che occuperà tutto lo spazio disponibile. In funzione del tipo di browser, la nuova finestra può essere una finestra popup oppure un tab di una finestra già esistente. È possibile che il browser impedisca l\'apertura di nuove finestre.';
$string['launchoptions'] = 'Opzioni di lancio';
$string['leaveblank'] = 'Lascia vuoto se non ti servono';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Aggiungere configurazioni Tool esterno a livello di corso';
$string['lti:addinstance'] = 'Aggiungere attività Tool esterno';
$string['lti:addmanualinstance'] = 'Aggiungi un tool configurato manualmente';
$string['lti:addpreconfiguredinstance'] = 'un tool preconfigurato';
$string['lti:admin'] = 'Diventa amministratore al lancio del tool';
$string['lti:grade'] = 'Visualizzare valutazioni riportate da Tool esterni';
$string['lti:manage'] = 'Diventare docente al lancio del tool esterno';
$string['lti:requesttooladd'] = 'Richiedere una configurazione tool per tutto il sito';
$string['lti:view'] = 'Lanciare attività Tool esterno';
$string['lti_administration'] = 'Modifica tool preconfigurato';
$string['lti_errormsg'] = 'Il tool ha restituito il messaggio di errore seguente: "{$a}"';
$string['lti_launch_error'] = 'Si è verificato un errore durante il lancio del tool esterno.';
$string['lti_launch_error_tool_request'] = '<p>
Per inviare all\'amministratore una richiesta di completamento di una configurazione di un tool, fai click su  <a href="{$a->admin_request_url}" target="_top">here</a>. </p>
Aiuto per questola stringa contiene un segnaposto';
$string['lti_launch_error_unsigned_help'] = '<p>L\'errore può essere causato dalla mancanza di consumer key e/o shared secret per l\'accesso al tool provider.
</p>
<p>Se disponi di consumer key e shared secret, puoi inserirli nella configurazione del tool esterno (accertati che le opzioni avanzate siano visibili)<br />
In alternativa, puoi creare una configurazione di  tool provider a livello di corso <a href="{$a->course_tool_editor}">here</a>.</p>';
$string['lti_tool_request_added'] = 'La richiesta di configurare il tool è stata inviata correttamente. Contatta l\'amministratore per completare la configurazione.';
$string['lti_tool_request_existing'] = 'È già stata inviata una configurazione per il dominio del tool.';
$string['ltisettings'] = 'Impostazioni LTI';
$string['ltiunknownserviceapicall'] = 'Chiamata servizio API LTI sconosciuta';
$string['ltiversion'] = 'Versione LTI';
$string['ltiversion_help'] = 'La versione LTI utilizzata per firmare messaggi e richieste di servizio: LTI 1.0/1.1 e LTI 2.0 utilizzano il profilo di sicurezza OAuth 1.0A; LTI 1.3.0 utilizza JWT.';
$string['main_admin'] = 'Help generale';
$string['main_admin_help'] = 'I tool esterni consentono di interagire con risorse formative ospitate in altri siti. Tramite uno speciale protocollo di lancio, il tool remoto può accedere ad alcune informazioni relative all\'utente, come ad esempio il nome dell\'istituzione, l\'id del corso, l\'id dell\'utente ed altre informazioni come il nome dell\'utente e l\'email.

I tool elencati nella pagina sono divisi in tre categorie:

* **Attivi** - Questi tool provider sono stati approvati e configurati da un amministratore e  possono essere utilizzati nei corsi. Se viene inserito un consumer key e un shared secret, allora verrà stabilita una relazione di fiducia tra questo sito e il tool esterno attraverso un canale di comunicazione sicuro.
* ** In attesa ** - Questi tool provider sono stati importati tramite pacchetto ma non sono stati ancora configurati da una amministratore. I docenti possono usare i tool in attesa solo se hanno un consumer key ed un shared secret oppure se questi parametri non sono necessari.
* ** Rifiutati ** - Questi tool provider sono stati contrassegnati per indicare che l\'amministratore non ha intenzione di renderli disponibili.  I docenti possono usare i tool rifiutati solo se hanno un consumer key ed un shared secret oppure se questi parametri non sono necessari.';
$string['manage_external_tools'] = 'Gestione tool';
$string['manage_tool_proxies'] = 'Gestione registrazione tool esterni';
$string['manage_tools'] = 'Gestione tool preconfigurati';
$string['manuallyaddtype'] = 'In alternativa puoi <a href="{$a}">configurare il tool manualmente</a>.';
$string['miscellaneous'] = 'Varie';
$string['misconfiguredtools'] = 'Sono state rilevate istanze del tool mal configurate';
$string['missingparameterserror'] = 'La pagina è mal configurata: "{$a}"';
$string['module_class_type'] = 'Tipo di modulo Moodle';
$string['modulename'] = 'Tool esterno';
$string['modulename_help'] = 'Il modulo di attività tool esterno consente agli studenti di interagire con risorse formative ed attività presenti su altri siti web. Ad esempio, un tool esterno può fornire l\'accesso a nuovi tipi di attività o materiali resi disponibili da un editore.

Per creare un\'attività tool esterno, è necessario un tool provider che supporti LTI (Learning Tools Interoperability).
Un docente può creare una attività tool esterno oppure può utilizzare tool esterni configurati dall\'amministratore del sito.

I tool esterni si differenziano da una risorsa di tipo URL per diversi aspetti:

* I tool esterni possono conoscere il contesto, ossia possono avere accesso alle informazioni dell\'utente che li ha lanciati, come l\'istituzione di appartenenza, il corso, il nome, eccetera.
* I tool esterni possono leggere, aggiornare ed eliminare le valutazioni associate alla istanza dell\'attività.
* Le configurazioni di I tool esterni creano una relazione di trust tra Moodle e il tool provider, assicurando un canale di comunicazione sicuro.';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Tool Esterni';
$string['modulenamepluralformatted'] = 'Tool esterni';
$string['name'] = 'Nome';
$string['never'] = 'Mai';
$string['new_window'] = 'Nuova finestra';
$string['no_lti_configured'] = 'Non ci sono  tool esterni attivi e configurati.';
$string['no_lti_pending'] = 'Non ci sono  tool esterni in attesa.';
$string['no_lti_rejected'] = 'Non ci sono  tool esterni rifiutati.';
$string['no_lti_tools'] = 'Non sono presenti configurazioni di tool esterni';
$string['no_tp_accepted'] = 'Non sono presenti registrazioni accettate di tool esterni';
$string['no_tp_cancelled'] = 'Non sono presenti registrazioni eliminate di tool esterni';
$string['no_tp_configured'] = 'Non ci sono  tool esterni non registrati.';
$string['no_tp_pending'] = 'Non sono presenti registrazioni in attesa di tool esterni.';
$string['no_tp_rejected'] = 'Non sono presenti registrazioni rifiutate di tool esterni.';
$string['noattempts'] = 'Non ci sono tentativi effettuati in questa istanza di tool';
$string['noltis'] = 'Non ci sono istanze di tool esterni';
$string['noprofileservice'] = 'Non è stato trovato il Profile service';
$string['noservers'] = 'Non sono stati trovati server';
$string['notypes'] = 'Non ci sono tool LTI configurati in Moodle. Fai click sul link soprastante per aggiungerli.';
$string['noviewusers'] = 'Non sono stati trovati utenti con il privilegio di usare questo tool';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 richiede un file openssl.cnf valido, configurato e disponibile nel server web. Si prega di contattare l\'amministratore del sito per configurare e abilitare openssl.';
$string['optionalsettings'] = 'Impostazioni opzionali';
$string['organization'] = 'Dettagli dell\'organizzazione';
$string['organizationdescr'] = 'Descrizione dell\'organizzazione';
$string['organizationid_default'] = 'ID di default dell\'organizzazione';
$string['organizationid_default_help'] = 'Il valore predefinito da utilizzare per l\'ID organizzazione. L\'ID sito identifica questa installazione di Moodle.';
$string['organizationidguid'] = 'ID dell\'organizzazione';
$string['organizationidguid_help'] = 'Un identificatore univoco di questa istanza Moodle, passato al tool come GUID dell\'istanza della piattaforma.

Lasciando vuoto il campo, verrà utilizzato il valore predefinito.';
$string['organizationurl'] = 'URL dell\'organizzazione';
$string['organizationurl_help'] = 'l\'URL di questa istanza Moodle.

Se l\'icona';
$string['pagesize'] = 'Invii visualizzati per pagina';
$string['parameter'] = 'Parametri tool';
$string['parameter_help'] = 'I parametri tool sono impostazioni obbligatorie da passare al tool provider nel tool proxy accettato.';
$string['password'] = 'Shared Secret';
$string['password_admin'] = 'Shared Secret';
$string['password_admin_help'] = 'Lo shared secret è come una password utilizzata per validare l\'accesso al tool. In genere viene fornita dal tool providere assieme al consumer key.

I tool che non richiedono una comunicazione sicura da Moodle e che non forniscono servizi addizionali (ad esempio, comunicare il punteggio) possono funzionare senza shared secret.';
$string['password_help'] = 'Per i tool preconfigurati, non è necessario inserire lo shared secret poiché sarà fornito come parte del processo di configurazione.

Il campo dovrebbe essere compilato quando si crea un link ad un tool provider non ancora configurato.
Se il tool provider deve essere utilizzato in questo corso più di una volta, può essere una buona idea aggiungere una configurazione di tool a livello di corso.

Lo shared secret è simile ad una password per autenticarsi ed accedere al tool, in genere viene fornita dal tool provider assieme al consumer key.

I tool che non richiedono una comunicazione sicura da Moodle e non forniscono servizi addizionali (come le votazioni ottenute) potrebbero non richiedere uno shared secret.';
$string['pending'] = 'In attesa';
$string['pluginadministration'] = 'Gestione tool esterni';
$string['pluginname'] = 'Tool esterno';
$string['preferheight'] = 'Altezza preferita';
$string['preferwidget'] = 'Preferire lancio widget';
$string['preferwidth'] = 'Larghezza preferita';
$string['press_to_submit'] = 'Premi per lanciare l\'attività';
$string['privacy'] = 'Privacy';
$string['privacy:metadata:coursefullname'] = 'Titolo del corso da cui l\'utente accede a LTI Consumer.';
$string['privacy:metadata:courseid'] = 'ID del corso da cui l\'utente accede a LTI Consumer.';
$string['privacy:metadata:courseidnumber'] = 'Codice identificativo del corso da cui l\'utente accede a LTI Consumer.';
$string['privacy:metadata:courseshortname'] = 'Titolo abbreviato del corso da cui l\'utente accede a LTI Consumer.';
$string['privacy:metadata:createdby'] = 'Utente che ha creato il record.';
$string['privacy:metadata:email'] = 'Indirizzo email dell\'utente che accede a LTI Consumer.';
$string['privacy:metadata:externalpurpose'] = 'LTI Consumer fornisce le informazioni e il contesto dell\'utente al Provider del tool LTI.';
$string['privacy:metadata:firstname'] = 'Nome proprio dell\'utente che accede a LTI Consumer';
$string['privacy:metadata:fullname'] = 'Nome completo dell\'utente che accede a LTI Consumer';
$string['privacy:metadata:lastname'] = 'Cognome dell\'utente che accede a LTI Consumer';
$string['privacy:metadata:lti_submission'] = 'Consegna LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Data e ora della consegna';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Data e ora di modifica della consegna';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Valutazione dell\'utente in percentuale';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Valutazione originaria dell\'utente';
$string['privacy:metadata:lti_submission:userid'] = 'ID dell\'utente che ha effettuato la consegna dell\'attività LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxy LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nome del proxy LTI';
$string['privacy:metadata:lti_types'] = 'Tipi LTI';
$string['privacy:metadata:lti_types:name'] = 'Nome del tipo LTI';
$string['privacy:metadata:role'] = 'Ruolo all\'interno del corso dell\'utente che accede a LTI Consumer';
$string['privacy:metadata:timecreated'] = 'Data e ora di creazione del record';
$string['privacy:metadata:timemodified'] = 'Data e ora di modifica del record';
$string['privacy:metadata:userid'] = 'ID dell\'utente che accede a LTI Consumer';
$string['privacy:metadata:useridnumber'] = 'Codice identificativo dell\'utente che accede a LTI Consumer';
$string['privacy:metadata:username'] = 'Username dell\'utente che accede a LTI Consumer';
$string['publickey'] = 'Chiave pubblica';
$string['publickey_help'] = 'La chiave pubblica (in formato PEM) fornita dal tool per verificare le firme dei messaggi in arrivo e le richieste di servizio.';
$string['publickeyset'] = 'Set di chiavi pubbliche';
$string['publickeyset_help'] = 'Keyset pubblico da cui questo sito recupererà la chiave pubblica del tool per verificare le firme dei messaggi in arrivo e le richieste di servizio.';
$string['quickgrade'] = 'Consenti valutazione rapida';
$string['quickgrade_help'] = 'Consente la valutazione di più tool nella stessa pagina. È possibile aggiungere valutazioni e commenti e poi fare click su "Salva tutti i miei feedback" per salvare tutte le modifiche apportate nella pagina.';
$string['redirect'] = 'Tra pochi secondi verrai reindirizzato, in caso contrario premi il pulsante.';
$string['redirectionuris'] = 'URI di reindirizzamento';
$string['redirectionuris_help'] = 'Elenco di URI (una per linea) che il tool utilizzerà per gestire richeste di autorizzazione. Deve essere configurata almeno una prima che sia possibile inviare messaggi al tool.';
$string['register'] = 'Regsitra';
$string['register_warning'] = 'La visualizzazione della pagina di registrazione sta impiegando troppo tempo. Se non dovesse comparire, verificare di aver inserto l\'URL corretto nelle impostazioni di configurazione. Se il sito è configurato in https, accertarsi che il tool da configurare supporti https e che l\'URL utilizzata riporti https.';
$string['registertype'] = 'Aggiungi registrazione tool esterno';
$string['registration_options'] = 'Opzioni di registrazione';
$string['registrationname'] = 'Nome tool provider';
$string['registrationname_help'] = 'Il nome del tool provider da registare';
$string['registrationurl'] = 'URL di registrazione';
$string['registrationurl_help'] = 'L\'URL di registrazione viene resa disponibile dal tool provider ed è la locazione dove indirizzare le richieste di iscrizione.';
$string['reject'] = 'Rifiuta';
$string['rejected'] = 'Rifiutati';
$string['resource'] = 'Risorsa';
$string['resourcekey'] = 'Consumer Key';
$string['resourcekey_admin'] = 'Consumer Key';
$string['resourcekey_admin_help'] = 'Il consumer key può essere considerato uno username da utilizzare per autenticare l\'accesso al tool.
Può essere usato dal tool provider per identificate univocamente il sito Moodle di provenienza delle chiamate.

Il consumer key viene fornito dal tool provider. Ciascun tool provider fornisce il consumer key in base a propri criteri, quindi è molto probabile che per ottenerlo sia necessario rivolgersi al tool provider stesso.

I tool che non richiedono una canale di comunicazione sicuro da Moodle e che non forniscono servizi aggiuntivi (ad esempio, comunicare le valutazioni) possono funzionare anche senza consumer key.';
$string['resourcekey_help'] = 'Per i tool preconfigurati, non è necessario inserire un consumer key in quanto già fornita durante il processo di configurazione.

Il campo va compilato solo se si crea un collegamento al tool provider che non sia già stato configurato.
Se il tool provider deve essere utilizzato più di una volta nello stesso corso, è consigliabile creare un configurazione di too a livello di corso.

Il consumer key può essere considerato uno username da utilizzare per autenticare l\'accesso al tool.
Può essere usato dal tool provider per identificate univocamente il sito Moodle di provenienza delle chiamate.

Il consumer key viene fornito dal tool provider. Ciascun tool provider fornisce il consumer key in base a propri criteri, quindi è molto probabile che per ottenerlo sia necessario rivolgersi al tool provider stesso.

I tool che non richiedono una canale di comunicazione sicuro da Moodle e che non forniscono servizi aggiuntivi (ad esempio, comunicare le valutazioni) possono funzionare anche senza consumer key.';
$string['resourceurl'] = 'URL risorsa';
$string['return_to_course'] = 'Fai click su <a href="{$a->link}" target="_top">here</a> per tornare al corso.';
$string['saveallfeedback'] = 'Salva tutti i miei feedback';
$string['search:activity'] = 'Tool esterno - informazioni sull\'attività';
$string['secure_icon_url'] = 'URL sicura dell\'icona';
$string['secure_icon_url_help'] = 'Simile all\'URL dell\'icona, viene utilizzato se l\'utente accede al sito tramite SSL. Lo scopo principale di questa impostazione è quello di prevenire gli avvertimenti che il browser presenta agli utenti quando la pagina è stata acceduta via SSL ma contiene anche contenuti forniti senza SSL.';
$string['secure_launch_url'] = 'URL sicura del tool';
$string['secure_launch_url_help'] = 'Simile all\'URL di lancio, viene utilizzato nel caso in cui è necessario un elevato livello di sicurezza. Moodle utilizzerà l\'URL sicuro di lancio al posto dell\'URL del tool se il sito Moodle viene acceduto via SSL oppure se ila configurazione del tool è impostata per lancio tramite SSL.

È anche possibile utilizzare un indirizzo https per l\'URL di lancio e lasciare vuoto il campo URL sicuro di lancio, forzando così il lancio via SSL.';
$string['selectcontent'] = 'Seleziona contenuto';
$string['send'] = 'Invia';
$string['services'] = 'Servizi';
$string['services_help'] = 'Seleziona i servizi che desideri offrire al tool provider. È possibile selezionare più di un servizio.';
$string['setupoptions'] = 'Opzioni setup';
$string['share_email'] = 'Rendi noto al tool l\'email di chi lo ha lanciato';
$string['share_email_admin'] = 'Rendi noto al tool l\'email di chi lo ha lanciato';
$string['share_email_admin_help'] = 'È possibile rendere noto al tool provider l\'indirizzo email dell\'utente che lo ha lanciato.
Il tool provider potrebbe avere bisogno dell\'indirizzo email di colui che lo ha lanciato per distinguere gli utenti aventi lo stesso nome, oppure per inviare email in funzione delle attività svolte dall\'utente.';
$string['share_email_help'] = 'È possibile rendere noto al tool provider l\'indirizzo email dell\'utente che lo ha lanciato.

Il tool provider può avere bisogno dell\'indirizzo email di colui che lo ha lanciato per distinguere gli utenti con lo stesso nome, oppure per inviare email in funzione delle attività svolte nel tool dall\'utente.

Da notare che questa impostazione può essere modificata dalla configurazione del tool.';
$string['share_name'] = 'Rendi noto al tool il nome di chi lo ha lanciato';
$string['share_name_admin'] = 'Rendi noto al tool il nome di chi lo ha lanciato';
$string['share_name_admin_help'] = 'È possibile rendere noto al tool provider il nome e cognome  dell\'utente che lo ha lanciato. Il tool provider potrebbe avere bisogno del nome e cognome di colui che lo ha lanciato per visualizzare informazioni utili nel tool.';
$string['share_name_help'] = 'È possibile rendere noto al tool provider il nome e cognome  dell\'utente che lo ha lanciato.

Il tool provider può avere bisogno del nome e cognome di colui che lo ha lanciato per visualizzare informazioni utili all\'interno del tool.

Da notare che questa impostazione può essere modificata dalla configurazione del tool.';
$string['share_roster'] = 'Consenti al tool di accedere all\'elenco dei partecipanti al corso';
$string['share_roster_admin'] = 'Il tool può accedere agli iscritti al corso';
$string['share_roster_admin_help'] = 'È possibile consentire al tool di conoscere l\'elenco dei partecipanti al corso da cui viene lanciato il tool stesso.';
$string['share_roster_help'] = 'È possibile consentire al tool di conoscere l\'elenco degli iscritti al corso.

Da notare che questa impostazione può essere modificata dalla configurazione del tool.';
$string['show_in_course_activity_chooser'] = 'Visualizza nel selettore attività e come tool preconfigurato';
$string['show_in_course_lti1'] = 'Utilizzo della configurazione del tool';
$string['show_in_course_lti1_help'] = 'Questo tool può essere visualizzato nel selettore attività consentendo ai docenti di aggiungerlo ai corsi. In alternativa può essere visualizzato nel menù a discesa dei tool preconfigurati quando si aggiunge un tool al corso. È disponibile un\'opzione ulteriore per consentire l\'utilizzo del tool solamente se viene inserito il corretto URL di lancio quando si aggiunge un tool esterno al corso.';
$string['show_in_course_lti2'] = 'Utilizzo della configurazione del tool';
$string['show_in_course_lti2_help'] = 'Questo tool può essere visualizzato nel selettore attività consentendo ai docenti di aggiungerlo ai corsi oppure può essere visualizzato nel menù a discesa dei tool preconfigurati quando si aggiunge un tool al corso.';
$string['show_in_course_no'] = 'Non visualizzare; da utilizzare solo se viene inserita un URL corretta del tool';
$string['show_in_course_preconfigured'] = 'Visualizza come tool preconfigurato quando si aggiunge un tool esterno';
$string['sitehost'] = 'Nome host del sito';
$string['siteid'] = 'ID del sito';
$string['size'] = 'Dimensione parametri';
$string['submission'] = 'Invii';
$string['submissions'] = 'Invii';
$string['submissionsfor'] = 'Invii per {$a}';
$string['subplugintype_ltiresource'] = 'Risorsa servizio LTI';
$string['subplugintype_ltiresource_plural'] = 'Risorse servizio LTI';
$string['subplugintype_ltiservice'] = 'Servizio LTI';
$string['subplugintype_ltiservice_plural'] = 'Servizi LTI';
$string['subplugintype_ltisource'] = 'LTI source';
$string['subplugintype_ltisource_plural'] = 'LTI source';
$string['successfullycreatedtooltype'] = 'Il tool è stato creato correttamente.';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'La configurazione del tool è stata ricavata correttamente dal contenuto selezionato.';
$string['toggle_debug_data'] = 'Dati di debug on/off';
$string['tool_config_not_found'] = 'Per questa URL non è stata trovata nessuna configurazione del tool.';
$string['tool_settings'] = 'Impostazioni tool';
$string['tooldescription'] = 'Descrizione del tool';
$string['tooldescription_help'] = 'La descrizione del tool sarà visualizzata ai docenti nell\'elenco delle attività.

È utile per descrivere il tool e le sue funzionalità, assieme ad altre informazioni utili al docente.';
$string['tooldetailsaccesstokenurl'] = 'URL del token di accesso';
$string['tooldetailsauthrequesturl'] = 'URL della richiesta di autenticazione';
$string['tooldetailsclientid'] = 'ID Client';
$string['tooldetailsdeploymentid'] = 'ID deployment';
$string['tooldetailsmailtosubject'] = 'Configurazione tool LTI';
$string['tooldetailsmodalemail'] = 'Email';
$string['tooldetailsmodallink'] = 'Visualizza dettagli della configurazione';
$string['tooldetailsmodaltitle'] = 'Dettagli della configurazione del tool';
$string['tooldetailsplatformid'] = 'ID Piattaforma';
$string['tooldetailspublickeyseturl'] = 'URL del et di chiavi pubbliche';
$string['toolisbeingused'] = 'Questo tool è stato utilizzato {$a} volte';
$string['toolisnotbeingused'] = 'Questo tool non è stato utilizzato';
$string['toolproxy'] = 'Registrazioni tool esterno';
$string['toolproxy_help'] = 'Le registrazioni di tool esterni consentono agli amministratori di configurare tool esterni tramite un tool proxy di un tool provider che supporti LTI 2.0. Per registrare un tool l\'unico parametro necessario è l\'URL fornioa dal tool provider. Le funzionalità ed i servizi offerti dal tool provider possono essere selezionati durante la configurazione di una nuova registrazione.

Le registrazioni dei tool sono suddivisi in quattro categorie:

* **Configurati** - Le registrazioni dei tool sono state impostate ma il processo di registrazione non è stato avviato.
* ** In attesa ** - I processi di registrazione dei tool sono stati avviati ma non sono terminati. Aprire e salvare le impostazioni per spostarle nella categoria \'Configurati\'.
* **Accettati ** - le registrazioni dei tool sono state approvate: le risorse specificate nel tool proxy appariranno nella pagina del tool esterno con uno stato iniziale di \' In attesa\'.
* ** Rifiutati ** - Le registrazioni sono state rifiutate. Aprire e salvare le impostazioni per spostarle nella categoria \'Configurati\', al fine di avviare di nuovo il processo di registrazione.';
$string['toolproxyregistration'] = 'Registrazione tool esterno';
$string['toolregistration'] = 'Registrazione tool esterno';
$string['toolsetup'] = 'Configurazione tool esterno';
$string['tooltypeadded'] = 'Il tool preconfigurato è stato aggiunto';
$string['tooltypedeleted'] = 'Il tool preconfigurato è stato eliminato';
$string['tooltypenotdeleted'] = 'Non è stato possibile eliminare il tool preconfigurato';
$string['tooltypes'] = 'Tool';
$string['tooltypeupdated'] = 'Il tool preconfigurato è stato aggiornato';
$string['toolurl'] = 'URL tool';
$string['toolurl_contentitemselectionrequest'] = 'URL della selezione del contenuto';
$string['toolurl_contentitemselectionrequest_help'] = 'L\'URL di selezione del contenuto verrà utilizzato per avviare la pagina di selezione del contenuto del fornitore dello strumento. Lasciando il campo vuoto,, verrà utilizzato l\'URL dello strumento';
$string['toolurl_help'] = 'L\'URL del tool viene utilizzata per far corrispondere  l\'URL del tool con la relativa configurazione. Il prefisso http(s) sull\'URL è facoltativo.

Inoltre, l\'URL di base viene utilizzata come URL del tool se non è stata definita una URL del tool nell\'istanza del tool esterno.

Ad esempio, un URL di base come *tool.com* corrisponde a:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

Un URL di base come *www.tool.com/quizzes* corrisponde a:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

Un URL di base come *quiz.tool.com* corrisponde a:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Se due configurazioni di tool si riferiscono ad uno stesso dominio, verrà utilizzata la corrispondenza più rilevante.

È anche possibile inserire un URL cartridge e i dettagli del tool saranno compilati automaticamente.';
$string['toolurlplaceholder'] = 'URL del tool';
$string['typename'] = 'Nome del tool';
$string['typename_help'] = 'Il nome del tool consente di identificare il provider del tool in Moodle. Il nome sarà visibile ai docenti quando aggiungono i tool nei corsi.';
$string['types'] = 'Tipi';
$string['unabletocreatetooltype'] = 'Non è possibile creare il tool';
$string['unabletofindtooltype'] = 'Non è possibile trovare un tool per';
$string['unknownstate'] = 'Stato sconosciuto';
$string['update'] = 'Aggiorna';
$string['useraccountinformation'] = 'Informazioni sull\'account dell\'utente';
$string['userpersonalinformation'] = 'Informazioni personali dell\'utente';
$string['using_tool_cartridge'] = 'Utilizzo del cartrdige tool';
$string['using_tool_configuration'] = 'Configurazione del tool in uso:';
$string['validurl'] = 'Un URL valido deve cominciare con http(s)://';
$string['viewsubmissions'] = 'Visualizza lo schermata con gli invii e le valutazioni';
