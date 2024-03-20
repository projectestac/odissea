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
 * Strings for component 'enrol_lti', language 'it', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Aggiungi contenuto';
$string['adddeployment:deploymentid'] = 'ID distribuzione';
$string['adddeployment:deploymentid_help'] = 'A ogni distribuzione del tool (questo sito) in una piattaforma verrà assegnato un ID distribuzione univoco per la registrazione. L\'ID della distribuzione deve essere registrato con il tool (questo sito) prima che siano consentiti i lanci dalla rispettiva distribuzione del tool.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID distribuzione non valido. L\'ID distribuzione esiste già per questa registrazione dell\'app.';
$string['adddeployment:name'] = 'Nome distribuzione';
$string['addtocourse'] = 'Aggiungi al corso';
$string['addtogradebook'] = 'Aggiungi al registro delle valutazioni';
$string['allowframeembedding'] = 'Nota: si raccomanda l\'abilitazione di \'Consenti l\'embed in frame\', in questo modo il tool sarà visualizzato in un frame invece che in una nuova finestra.';
$string['authltimustbeenabled'] = 'Nota: questo plugin richiede l\'abilitazione del plugin di autenticazione LTI.';
$string['cartridgeurl'] = 'URL cartridge';
$string['copiedtoclipboard'] = '{$a} è stato copiato nella clipboard';
$string['copytoclipboard'] = 'Copia nella clipboard';
$string['couldnotestablishproxy'] = 'Non è stato possibile stabilire un proxy con il consumer.';
$string['customproperties'] = 'Proprietà personalizzate';
$string['deeplinkingurl'] = 'URL di deep linking';
$string['deletedactivity'] = 'Attività eliminata';
$string['deletedactivityalt'] = 'L\'attività condivisa da questa istanza è stata eliminata';
$string['deletedactivitydescription'] = 'L\'attività condivisa da questa istanza è stata eliminata. È possibile selezionare un\'altra attività da condividere oppure è possibile semplicemente eliminare l\'istanza. L\'eliminazione dell\'istanza eliminerà le iscrizioni utente associate.';
$string['deploymentadd'] = 'Aggiungi rilascio';
$string['deploymentaddnotice'] = 'Il rilascio è stato aggiunto';
$string['deploymentdelete'] = 'Elimina distribuzione';
$string['deploymentdeleteconfirm'] = 'Avviso: l\'eliminazione di una distribuzione comporterà la perdita dell\'accesso per tutti gli utenti che seguono i collegamenti alle risorse legati a questa distribuzione del tool nella piattaforma. Anche i servizi di sincronizzazione di membri e voti verranno rimossi per queste risorse. Sei sicuro di voler eliminare l\'ID di distribuzione \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Il rilascio è stato eliminato';
$string['deploymentid'] = 'ID del rialscio';
$string['deployments'] = 'Rilasci';
$string['deploymentsinfo'] = 'Un ID di distribuzione viene generato dalla piattaforma quando il tool viene reso disponibile in un contesto. Ciò può avvenire al momento dell\'iscrizione, o successivamente, quando lo strumento viene messo a disposizione di un determinato corso o categoria. L\'ID di distribuzione deve essere iseriti qui prima che siano consentiti lanci dalla distribuzione del tool.';
$string['details'] = 'Dettagli';
$string['editplatformdetails'] = 'Modifica dettagli della piatatforma';
$string['endpointltiversionnotice'] = 'Gli endpoint del tool riportati di seguito sono solo per l\'impostazione manuale di LTI 1.3. Per le versioni precedenti (1.1/2.0), i dettagli per i consumer sono disponibili nella pagina "Pubblica come tool LTI", accessibile tramite la navigazione del corso.';
$string['enrolenddate'] = 'Data di fine';
$string['enrolenddate_help'] = 'Gli utenti potranno accedere fino alla data impostata';
$string['enrolenddateerror'] = 'La data di fine iscrizione non può essere antecedente alla data di inizio';
$string['enrolisdisabled'] = 'Il plugin \'Pubblicazione come tool LTI\' è disabilitato.';
$string['enrolltiversionincorrect'] = 'La risorsa non è configurata per l\'uso su LTI legacy (versioni 1.1/2.0). Si prega di contattare l\'amministratore di questo strumento.';
$string['enrolmentfinished'] = 'L\'iscrizione è chiusa.';
$string['enrolmentnotstarted'] = 'L\'iscrizione non è ancora cominciata.';
$string['enrolperiod'] = 'Durata dell\'iscrizione';
$string['enrolperiod_help'] = 'Durata dell\'iscrizione, con inizio all\'atto della prima iscrizione dell\'utente proveniente dal sistema remoto. Se l\'impostazione è disabilitata, la durata dell\'iscrizione non avrà limite.';
$string['enrolstartdate'] = 'Data di inizio';
$string['enrolstartdate_help'] = 'Gli utenti potranno accedere dopo la data impostata';
$string['failedrequest'] = 'Richiesta non andata a buon fine. Motivo: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Per accedere al tool per favore utilizza il link sottostante.';
$string['gradesync'] = 'Sincronizzazione valutazioni';
$string['gradesync_help'] = 'Consente di inviare le valutazioni dal tool al sistema remot (LTI consumer)';
$string['incorrecttoken'] = 'Il token non era corretto. Per favore verifica l\'URL e riprova oppure contatta l\'amministratore del tool.';
$string['invalidexpiredregistrationurl'] = 'URL di registrazione non valido o scaduto. Controllare l\'URL e riprovare.';
$string['invalidrequest'] = 'Richiesta non valida';
$string['invalidtoolconsumer'] = 'Consumer del tool non valido';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Dettagli di lancio';
$string['launchdetails_help'] = 'Per configurare il tool è necessario un URL cartridge (detto anche URL di configurazione) e un secret.';
$string['launchurl'] = 'URL di lancio';
$string['loginurl'] = 'URL di avvio login';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Dettagli di lancio';
$string['lti13launchdetails_help'] = 'L\'URL di lancio e le proprietà personalizzate sono necessarie solo quando si configura manualmente un link a una risorsa nella piattaforma. Ove possibile, i docenti dovrebbero privilegiare il processo di selezione dei contenuti (deep linking) per la creazione dei link alle risorse.';
$string['lti:config'] = 'Configurare istanze \'Pubblicazione come tool LTI\'';
$string['lti:unenrol'] = 'Disiscrivere gli utenti dal corso';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Si è verificato un problema nel recupero della configurazione OpenID dalla piattaforma. Il risultato non era un JSON valido. Il problema può essere causato anche dalla configurazione degli host bloccati. Assicurarsi che il sito sia configurato per connettersi al dominio della piattaforma e riprovare utilizzando un nuovo URL di registrazione.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Dati di lancio o configurazione del tool non validi. L\'installazione client non è stata trovata (ID dell\'installazione client: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'I dati di lancio non sono validi. La risorsa \'{$a}\' non è disponibile o non esiste.';
$string['ltiadvlauncherror:invalidregistration'] = 'I dati di lancio o la configurazione del tool non sono validi. Non è stato possibile trovare una registrazione della piattaforma: (issuer: {$a->platform}, client ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Dati di lancio non validi. Il campo di richiesta personalizzata \'id\' è necessario per lanciare un\'attività o una risorsa su LTI Advantage.';
$string['ltilegacy'] = 'LTI obsoleto (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'LTI 1,1 e 2.0 sono obsoleti. Il contenuto deve essere condiviso tramite LTI Advantage.';
$string['ltiversion'] = 'Versione LTI';
$string['ltiversion_help'] = 'La versione LTI che verrà utilizzata per accedere ai contenuti pubblicati.

LTI Advantage consente di pubblicare contenuti su piattaforme pre-registrate senza la necessità di apportare modifiche alla piattaforma ogni volta che vengono pubblicati nuovi contenuti. la relazione di fiducia è tra la piattaforma e lo strumento.

Le versioni precedenti (1.1 e 2.0) richiedono la creazione di una nuova registrazione dello strumento sul cosumer per ogni nuovo contenuto pubblicato, poiché ogni contenuto pubblicato ha una propria relazione di fiducia con il sito del consumer e deve essere impostato caso per caso.';
$string['managedeployments'] = 'Gestione rilasci';
$string['maxenrolled'] = 'Massimo numero di utenti';
$string['maxenrolled_help'] = 'Il numero massimo di utenti remoti che possono accedere al tool. Impostare a zero per nessun limite.';
$string['maxenrolledreached'] = 'È stato raggiunto il numero massimo di utenti che possono accedere al tool.';
$string['membersync'] = 'Sincronizzazione utenti';
$string['membersync_help'] = 'Tramite una elaboraione pianificata, consente la sincronizzazione degli utenti iscritti nel sistema remoto con le iscrizioni di questo corso, creando un account per ogni utente remoto, se necessario, e iscrivendoli o disiscrivendoli secondo necessità.

Se è impostato su no, nel momento in cui un utente remoto accede allo strumento, gli verrà creato un account e verrà iscritto automaticamente.';
$string['membersyncmode'] = 'Modalità sincronizzazione utenti';
$string['membersyncmode_help'] = 'Stabilisce se l\'utente remoto deve essere iscritto/disiscritto dal corso';
$string['membersyncmodeenrolandunenrol'] = 'Iscrivi i nuovi utenti e disiscrivi gli utenti mancanti';
$string['membersyncmodeenrolnew'] = 'Iscrivi i nuovi utenti';
$string['membersyncmodeunenrolmissing'] = 'Disiscrivi gli utenti mancanti';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Non sono stati trovati rilasci del tool';
$string['nopublishedcontent'] = 'Non sono ancora state pubblicate risorse o attività';
$string['noregisteredplatforms'] = 'Non ci sono registrazioni di piattaforme';
$string['notoolsprovided'] = 'Nessun tool fornito';
$string['opensslconfiginvalid'] = 'LTI 1.3 richiede che openssl.cnf sia configurato e disponibile per il server web. Contattare l\'amministratore del sito per configurare e abilitare openssl su questo sito.';
$string['opentool'] = 'Apri tool';
$string['platformdetails'] = 'Dettagli della piattaforma';
$string['platformdetailsinfo'] = 'Una volta che il tool sarà stato configurato nella piattaforma, i dettagli della piattaforma devono essere inseriti qui per completare la registrazione.
<ul>
<li>Per le registrazioni dinamiche, queste informazioni saranno impostate automaticamente e non sono necessarie ulteriori modifiche.</li>
<li>Per le registrazioni manuali, queste informazioni devono essere copiate manualmente dalla piattaforma.</li>
</ul>';
$string['pluginname'] = 'Pubblicazione come tool LTI';
$string['pluginname_desc'] = 'Il di iscrizione \'Pubblicazione come tool LTI\', assieme al plugin di autenticazione LTI, consente l\'ascesso a specifici corsi ed attività da parte di utenti remoti, rendendo Moodle un LTI provider.';
$string['privacy:metadata:enrol_lti_users'] = 'Elenco degli utenti iscritti via provider LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Data di accesso più recente dell\'utente al corso';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Valutazione più recente ricevuta dall\'utente.';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Orario di iscrizione';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID dell\'utente';
$string['provisioningmode'] = 'Modalità di provisioning';
$string['provisioningmode_help'] = 'Questa impostazione determina la modalità di gestione degli account al primo lancio. Sono supportate diverse modalità:
<ul>
<li>Solo nuovi account (automatico). Gli account verranno creati automaticamente per gli utenti che si avviano dalla piattaforma. Questa è l\'impostazione predefinita per i lanci degli studenti.</li>
<li>Account esistenti e nuovi (con richiesta). All\'utente verrà data una scelta su cosa fare. Possono decidere di collegare un account esistente o creare un nuovo account. Questa è l\'opzione più flessibile e l\'impostazione predefinita per i lanci dei docenti.</li>
<li>Solo account esistenti (con richiesta). All\'utente verrà chiesto di collegare un account esistente e non potrà accedere alle risorse dello strumento senza farlo.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Modalità di provisioning al primo lancio dello studente';
$string['provisioningmodeteacherlaunch'] = 'Modalità di provisioning al primo lancio del docente';
$string['publishedcontent'] = 'Contenuto pubblicato';
$string['publishedcontent_help'] = 'Una risorsa o un\'attività pubblicata può essere utilizzata nelle piattaforme registrate tramite il flusso di selezione dei contenuti (deep linking). Inoltre, è possibile creare manualmente un collegamento alla risorsa nella piattaforma utilizzando l\'URL di lancio e le proprietà personalizzate fornite.';
$string['registeredplatforms'] = 'Piattaforme registrate';
$string['registeredplatformsltiversionnotice'] = 'Le piattaforme elencate di seguito sono registrate per la comunicazione LTI 1.3. Per le versioni precedenti, la registrazione del consumer non è richiesta.';
$string['registerplatform:accesstokenurl'] = 'URL del token di accesso';
$string['registerplatform:accesstokenurl_help'] = 'L\'URL dove il tool invierà le richieste di token di accesso. Verrà fornito dalla piattaforma.';
$string['registerplatform:authrequesturl'] = 'URL della richiesta di autenticazione';
$string['registerplatform:authrequesturl_help'] = 'L\'URL dove il tool invierà le richieste di autenticazione OpenID Connect. Verrà fornito dalla piattaforma.';
$string['registerplatform:clientid'] = 'ID del client';
$string['registerplatform:clientid_help'] = 'Una stringa utilizzata per identificare la registrazione del tool sulla piattaforma. Verrà fornito dalla piattaforma.';
$string['registerplatform:invalidurlerror'] = 'URL non valida. È stati incluso http:// o https://?';
$string['registerplatform:jwksurl'] = 'URL del set di chiavi pubbliche';
$string['registerplatform:jwksurl_help'] = 'Il keyset pubblico o l\'URL JWKS, utilizzato per ottenere la chiave pubblica della piattaforma. Sarà fornito dalla piattaforma.';
$string['registerplatform:name'] = 'Nome della piattaforma';
$string['registerplatform:name_help'] = 'Un nome abbreviato che descrive la piattaforma. Può essere modificato in qualsiasi momento.';
$string['registerplatform:platformid'] = 'ID della piattaforma (issuer)';
$string['registerplatform:platformid_help'] = 'L\'URL che identifica la piattaforma di apprendimento di terze parti. Sarà fornito dalla piattaforma.';
$string['registerplatformadd'] = 'Registra una piattaforma';
$string['registerplatformaddnotice'] = 'La registrazione della piattaforma è stata aggiunta';
$string['registerplatformdelete'] = 'Elimina registrazione della piattaforma';
$string['registerplatformdeleteconfirm'] = 'Sei sicuro di eliminare la registrazione della piattaforma \'{$a}\'? L\'azione rimuoverà tutti i rilasci del tool di questa registrazione.';
$string['registerplatformdeletenotice'] = 'La registrazione della piattaforma è stata eliminata';
$string['registerplatformedit'] = 'Modifica registarzione';
$string['registerplatformeditnotice'] = 'La registrazione della piattaforma è stata aggiornata';
$string['registration'] = 'Registrazione pubblicata del tool';
$string['registrationdeeplinklabel'] = 'Aggiungi contenuto da {$a}';
$string['registrationdynamic'] = 'Registrazione dinamica';
$string['registrationmanual'] = 'Registrazione manuale';
$string['registrationresourcelinklabel'] = 'Lancia contenuto da {$a}';
$string['registrationstatus'] = 'Stato';
$string['registrationstatusactive'] = 'Attivo';
$string['registrationstatuspending'] = 'In attesa';
$string['registrationurl'] = 'URL di registrazione';
$string['registrationurl_help'] = 'Utilizzando un URL di registrazione (anche detta Proxy URL), il tool sarà configurato automaticamente.';
$string['registrationurlinfomessage'] = 'Se la piattaforma supporta la registrazione dinamica, utilizzare l\'URL di registrazione riportato di seguito. Per ulteriori informazioni sulla registrazione dinamica, vedere la documentazione su <a href="{$a}">Pubblica come strumento LTI</a>.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Richiedi il completamento del corso o dell\'attività prima di sincronizzare la valutazione';
$string['returnurlnotset'] = 'L\'URL di ritorno non è stata impostata.';
$string['roleinstructor'] = 'Ruolo del docente';
$string['roleinstructor_help'] = 'Il ruolo assegnato dal tool al docente remoto';
$string['rolelearner'] = 'Ruolo dello studente';
$string['rolelearner_help'] = 'Il ruolo assegnato dal tool allo studente remoto';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Una stringa di caratteri condivisa con il sistema remoto (LTI consumer) per consentire l\'acesso al tool.';
$string['sharedexternaltools'] = 'Pubblicati come tool LTI';
$string['successfulregistration'] = 'Registrazione avvenuta correttamente';
$string['tasksyncgrades'] = 'Pubblicazione come tool LTI sincronizzazione valutazioni';
$string['tasksyncmembers'] = 'Sincronizzazione utenti per Pubblicazione come tool LTI';
$string['tooldetails'] = 'Dettagli del tool';
$string['toolsprovided'] = 'Tool pubblicati';
$string['toolsprovided_help'] = 'Un tool può essere condiviso con altri siti fornendo i dettagli di lancio o la URL di registrazione.';
$string['tooltobeprovided'] = 'Tool da pubblicare';
$string['toolurl'] = 'URL tool';
$string['userdefaultvalues'] = 'Utilizza valori di default';
$string['viewplatformdetails'] = 'Visualizza dettagli della piatatforma';
$string['viewtoolendpoints'] = 'Visualizza endpoint del tool';
