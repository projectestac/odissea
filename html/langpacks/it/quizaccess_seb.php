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
 * Strings for component 'quizaccess_seb', language 'it', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Aggiungi un modello';
$string['allowedbrowserkeysdistinct'] = 'Le chiavi devono essere tutte diverse.';
$string['allowedbrowserkeyssyntax'] = 'Una chiave deve essere una stringa esadecimale di 64 caratteri.';
$string['cachedef_config'] = 'Cache configurazione SEB';
$string['cachedef_configkey'] = 'Cache configurazione chiavi per SEB';
$string['cachedef_quizsettings'] = 'Cache impostazioni quiz per SEB';
$string['cantdelete'] = 'Non è possibile eliminare un modello utilizzato da uno o più quiz.';
$string['cantedit'] = 'Non è possibile modificare un modello utilizzato da uno o più quiz.';
$string['checkingaccess'] = 'Verifica accesso tramite Safe Exam Browser...';
$string['clientrequiresseb'] = 'Il quiz è stato configurato per utilizzare Safe Exam Browser con la configurazione del client.';
$string['confirmtemplateremovalquestion'] = 'Sei sicuro di rimuovere questo modello?';
$string['confirmtemplateremovaltitle'] = 'Confermi la rimozione del modello?';
$string['conflictingsettings'] = 'Non sei autorizzato ad aggiornare le impostazioni esistenti di Safe Exam Browser.';
$string['content'] = 'Modello';
$string['description'] = 'Descrizione';
$string['disabledsettings'] = 'Impostazioni disabilitate.';
$string['disabledsettings_help'] = 'Non è possibile modificare le impostazioni di Safe Exam Browser se esistono tentativi del quiz,  Per riabilitare le impostazioni, devono essere prima eliminati tutti i tentativi del quiz.';
$string['downloadsebconfig'] = 'Scarica il file di configurazione di SEB';
$string['duplicatetemplate'] = 'Esiste già un modello con lo stesso nome';
$string['edittemplate'] = 'Modifica modello';
$string['enabled'] = 'Abilitato';
$string['error:ws:nokeyprovided'] = 'È necessaria almeno una chiave Safe Exam Browser';
$string['error:ws:quiznotexists'] = 'Il quiz corrispondente all\'ID del modulo del corso non è stato trovato:  {$a}';
$string['event:accessprevented'] = 'Impedimento accesso al quiz';
$string['event:templatecreated'] = 'Creazione modello SEB';
$string['event:templatedeleted'] = 'Eliminazione modello SEB';
$string['event:templatedisabled'] = 'Disabilitazione modello SEB';
$string['event:templateenabled'] = 'Abilitazione modello SEB';
$string['event:templateupdated'] = 'Aggiornamento modello SEB';
$string['exitsebbutton'] = 'Esci da Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Carica il file di configurazione di Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Si prega di caricare il file di configurazione Safe Exam Browser del quiz.';
$string['filenotpresent'] = 'Per favore carica un file di configurazione SEB.';
$string['fileparsefailed'] = 'Il file caricato non può essere salvato come un file di configurazione di SEB.';
$string['httplinkbutton'] = 'Scarica configurazione';
$string['invalid_browser_key'] = 'La chiave del browser SEB non è valida';
$string['invalid_config_key'] = 'La chiave di configurazione SEB non è valida';
$string['invalidkeys'] = 'Non è stato possibile validare le chiavi di Safe Exam Browser. Accertarsi di utilizzare Safe Exam Browser con il file di configurazione corretto.';
$string['invalidtemplate'] = 'Il modello di configurazione SEB non è valido';
$string['manage_templates'] = 'Modelli Safe Exam Browser';
$string['managetemplates'] = 'Gestione modelli';
$string['missingrequiredsettings'] = 'Le impostazioni di configurazione mancano di valori obbligatori.';
$string['name'] = 'Nome';
$string['newtemplate'] = 'Nuovo modello';
$string['noconfigfilefound'] = 'Non è stato possibile trovare il file di configurazione SEB per il quiz con cmid: {$a}';
$string['noconfigfound'] = 'Non è stato possibile trovare la configurazione di SEB per il quiz con cmid: {$a}';
$string['not_seb'] = 'Nessun Safe Exam Browser SEB è in uso.';
$string['notemplate'] = 'Nessun modello';
$string['passwordnotset'] = 'Le impostazioni correnti richiedono che i quiz che fanno uso di Safe Exam Browser abbiano una password del quiz impostata.';
$string['pluginname'] = 'Regola di accesso Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Impostazioni di Safe Exam Browser di un quiz. Includono l\'ID dell\'ultimo utente che ha creato o modificato le impostazioni.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID del quiz relativo alle impostazioni.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Data e ora Unix del momento in cui le impostazioni sono state create.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Data e ora Unix dell\'ultimo momento in cui le impostazioni sono state modificate.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID dell\'ultimo utente che ha creato o modificato le impostazioni.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Impostazioni di un modello per Safe Exam Browser. Questo include l\'ID dell\'ultimo utente che ha creato o modificato il modello.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Data e ora Unix del momento in cui il modello è stato creato.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Data e ora Unix dell\'ultimo momento in cui il modello è stato modificato.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID dell\'ultimo utente che ha creato o modificato il modello.';
$string['quizsettings'] = 'Impostazioni del quiz';
$string['restoredfrom'] = '{$a->name} (ripristinato da cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Inibisce i requisiti per visualizzare il quiz con Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Modificare impostazioni SEB dei quiz: Selezionare il file di configurazione SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Modificare impostazioni SEB dei quiz: Attivare il filtro URL';
$string['seb:manage_seb_allowcapturecamera'] = 'Modificare l\'impostazione del quiz SEB: consentire l\'accesso del browser alla fotocamera';
$string['seb:manage_seb_allowcapturemicrophone'] = 'Modificare l\'impostazione del quiz SEB: consentire l\'accesso del browser al microfono';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Modificare impostazioni SEB dei quiz: Chiavi browser consentite per svolgere l\'esame';
$string['seb:manage_seb_allowreloadinexam'] = 'Modificare impostazioni SEB dei quiz: Consentire di ricaricare le pagine';
$string['seb:manage_seb_allowspellchecking'] = 'Modificare impostazioni SEB dei quiz: Abilitare controllo ortografico';
$string['seb:manage_seb_allowuserquitseb'] = 'Modificare impostazioni SEB dei quiz: Consentire uscita';
$string['seb:manage_seb_enableaudiocontrol'] = 'Modificare impostazioni SEB dei quiz: Abilitare controlli audio';
$string['seb:manage_seb_expressionsallowed'] = 'Modificare impostazioni SEB dei quiz: Consentire espressioni semplificate';
$string['seb:manage_seb_expressionsblocked'] = 'Modificare impostazioni SEB dei quiz: Bloccare espressioni semplificate';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modificare impostazioni SEB dei quiz: Filtrare contenuti incorporati';
$string['seb:manage_seb_linkquitseb'] = 'Modificare impostazioni SEB dei quiz: Link di uscita';
$string['seb:manage_seb_muteonstartup'] = 'Modificare impostazioni SEB dei quiz: Togliere l\'audio all\'avvio';
$string['seb:manage_seb_quitpassword'] = 'Modificare impostazioni SEB dei quiz: Password di uscita';
$string['seb:manage_seb_regexallowed'] = 'Modificare impostazioni SEB dei quiz: Consentire espressioni regolari';
$string['seb:manage_seb_regexblocked'] = 'Modificare impostazioni SEB dei quiz: Bloccare espressioni regolari';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Modificare impostazioni SEB dei quiz: Rendere obbligatorio Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modificare impostazioni SEB dei quiz: Visualizzare disposizione tastiera.';
$string['seb:manage_seb_showreloadbutton'] = 'Modificare impostazioni SEB dei quiz: Visualizzare pulsante ricarica pagina';
$string['seb:manage_seb_showsebdownloadlink'] = 'Modificare impostazioni SEB dei quiz: Visualizza collegamento per scaricare';
$string['seb:manage_seb_showsebtaskbar'] = 'Modificare impostazioni SEB dei quiz: Visualizzare barra delle attività';
$string['seb:manage_seb_showtime'] = 'Modificare impostazioni SEB dei quiz: Visualizzare orario';
$string['seb:manage_seb_showwificontrol'] = 'Modificare impostazioni SEB dei quiz: Visualizzare controlli Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Modificare impostazioni SEB dei quiz: Selezionare modello SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Modificare impostazioni SEB dei quiz: Confermare uscita';
$string['seb:managetemplates'] = 'Gestione modelli di configurazione Safe Exam Browser';
$string['seb_activateurlfiltering'] = 'Abilita filtro URL';
$string['seb_activateurlfiltering_help'] = 'Gli URL saranno filtrati quando verranno caricate le pagine web. L\'insieme dei filtri deve essere definito sotto.';
$string['seb_allowcapturecamera'] = 'Consenti al browser di accedere alla telecamera';
$string['seb_allowcapturecamera_help'] = 'Se abilitata, agli utenti verrà chiesto di concedere l\'accesso alla telecamera per SEB prima dell\'inizio della sessione d\'esame. Su macOS 12/iOS 15 o versioni successive, disabilitando questa impostazione, le applicazioni web non potranno in alcun caso accedere alla fotocamera, ovvero la registrazione video tramite WebRTC non sarà possibile.';
$string['seb_allowcapturemicrophone'] = 'Consenti al browser di accedere al microfono';
$string['seb_allowcapturemicrophone_help'] = 'Se abilitata, agli utenti verrà chiesto di concedere l\'accesso al microfono per SEB prima dell\'inizio della sessione d\'esame. Su macOS 12/iOS 15 o versioni successive, disabilitando questa impostazione, le applicazioni web non potranno in alcun caso accedere al microfono, ovvero la registrazione audio tramite WebRTC non sarà possibile.';
$string['seb_allowedbrowserexamkeys'] = 'Chiavi browser consentite di svolgere l\'esame';
$string['seb_allowedbrowserexamkeys_help'] = 'È possibile inserire le Chiavi browser consentite per svolgere l\'esame per le versioni di Safe Exam Browser che consentono l\'accesso al quiz. Se non verranno inserite chiavi, Moodle non controllerà chiavi degli esami.';
$string['seb_allowreloadinexam'] = 'Abilita ricaricamento durante gli esami';
$string['seb_allowreloadinexam_help'] = 'Gli studenti potranno ricaricare la pagina (il pulsante ricarica nella barra delle attivitài di SEB, nella barra degli strumenti del browser, nel menu slide laterale di iOS, nelle scorciatoie da tastiera F5/cmd+R). La cache offline può non funzionare quando l\'utente proverà a ricaricare la pagina in assenza di connessione internet.';
$string['seb_allowspellchecking'] = 'Abilita controllo ortografico';
$string['seb_allowspellchecking_help'] = 'Abilita il controllo ortografico nel browser SEB.';
$string['seb_allowuserquitseb'] = 'Abilita uscita da SEB';
$string['seb_allowuserquitseb_help'] = 'Gli utenti potranno uscire da SEB con il pulsante "Quit" presente nella barra di SEB, premendo i tasti CTRL+Q oppure cliccando il pulsante di chiusura della finestra del browser.';
$string['seb_enableaudiocontrol'] = 'Abilita i controlli audio';
$string['seb_enableaudiocontrol_help'] = 'Consente di visualizzare l\'icona dei controlli audio nella barra delle attiivtà di SEB.';
$string['seb_expressionsallowed'] = 'Espressioni consentite';
$string['seb_expressionsallowed_help'] = 'Un campo di testo contiene le espressioni per filtrare gli URL consentiti. È possibile usare caratteri jolly come \'\\*\'. Espressioni di esempio: \'example.com\' o \'example.com/stuff/\\*\'. \'example.com\' renderà validi \'example.com\', \'www.example.com\' e \'www.mail.example.com\'. \'example.com/stuff/\\*\' renderà valide tutte le richieste per ogni sottodominio di \'example.com\' che abbiano \'stuff\' come primo segmento del percorso.';
$string['seb_expressionsblocked'] = 'Espressioni bloccate';
$string['seb_expressionsblocked_help'] = 'Un campo di testo contiene le espressioni per filtrare gli URL bloccati. È possibile usare caratteri jolly come \'\\*\'. Espressioni di esempio: \'example.com\' o \'example.com/stuff/\\*\'. \'example.com\' bloccherà \'example.com\', \'www.example.com\' e \'www.mail.example.com\'. \'example.com/stuff/\\*\' bloccherà tutte le richieste per ogni sottodominio di \'example.com\' che abbiano \'stuff\' come primo segmento del percorso.';
$string['seb_filterembeddedcontent'] = 'Filtra anche i contenuti incorporati';
$string['seb_filterembeddedcontent_help'] = 'Consente di filtrare tutti i contenuti incorporati usando il set di filtri.';
$string['seb_help'] = 'Configura il quiz per l\'utilizzo di Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Visualizza il pulsante Esci da Safe Exam Browser, impostato con il seguente link di uscita';
$string['seb_linkquitseb_help'] = 'In questo campo è possibile inserire il collegamento per uscire da SEB. Viene utilizzato sul pulsante "Esci da Safe Exam Browser" nella pagina visualizzata dopo l\'invio del quiz. Facendo clic sul pulsante o sul collegamento posizionato dove si desidera inserirlo, è possibile uscire da SEB senza dover inserire una password di uscita. Per un sito HTTPS, il collegamento per uscire deve iniziare con https://. Se non viene inserito nssun collegamento, il pulsante "Esci da Safe Exam Browser" non viene visualizzato e non è impostato alcun collegamento per uscire da SEB.';
$string['seb_managetemplates'] = 'Gestione modelli Safe Exam Browser';
$string['seb_muteonstartup'] = 'Togli audio all\'avvio';
$string['seb_muteonstartup_help'] = 'L\'audio sarà tolto all\'avvio di SEB';
$string['seb_quitpassword'] = 'Password di uscita';
$string['seb_quitpassword_help'] = 'La password verrà richiesta quando si tenta di uscire da SEB tramite il ulsante "Esci", CTRL+Q oppure il pulsante di chiusura della finestra browser. In assenza di password di uscita, SEB chiederà all\'utente solamente una conferma.';
$string['seb_regexallowed'] = 'Espressioni regolari consentite';
$string['seb_regexallowed_help'] = 'Un campo di testo contenente il filtro delle URL consentite, redatto in formato espressione regolare (Regex).';
$string['seb_regexblocked'] = 'Espressioni regolari bloccate';
$string['seb_regexblocked_help'] = 'Un campo di testo contenente il filtro delle URL bloccate, redatto in formato espressione regolare (Regex).';
$string['seb_requiresafeexambrowser'] = 'Obbligatorio l\'utilizzo di Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Il quiz potrà essere svolto solamente utilizzando Safe Exam Browser. Impostazioni disponibili:

*No
<br/>Non è obbligatorio l\'utilizzo di Safe Exam Browser.
* Si - Con un modello esistente
<br/>Consente di utilizzare un modello di configurazione di Safe Exam Browser. I modelli sono gestiti in amministrazione del sito. Eventuali modifiche manuali annullano le impostazioni del modello.
* Si - Con configurazione manuale
<br/>La configurazione di Safe Exam Browser sarà manuale senza utilizzare modelli.
* Si - Con configurazione personale
<br/>Consente di caricare una configurazione personale di Safe Exam Browser. Saranno disabilitate tutte le impostazioni manuali e le impostazioni dei modelli.
* Si - Con la configurazione client di SEB
<br/>La configurazione di Safe Exam Browser non avverrà tramite Moodle. Il quiz potrà essere svolto con qualsiasi configurazione di SEB.';
$string['seb_showkeyboardlayout'] = 'Visualizza disposizione della tastiera';
$string['seb_showkeyboardlayout_help'] = 'Consente di visualizzare la disposizione della tastiera nella barra delle attività di SEB. Consente di cambiare la disposizione d tastiere in funzione di quelle rese disponibili dal sistema operativo.';
$string['seb_showreloadbutton'] = 'Visualizza pulsante per ricaricare la pagina';
$string['seb_showreloadbutton_help'] = 'Consente di visualizzare il pulsante per ricaricare la pagina nella barra delle attività di SEB.';
$string['seb_showsebdownloadlink'] = 'Visualizza pulsante per scaricare Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Consente di visualizzare il pulsante per scaricare Safe Exam Browser nella pagina dove si avvia il quiz.';
$string['seb_showsebtaskbar'] = 'Visualizza barra delle attività di SEB';
$string['seb_showsebtaskbar_help'] = 'Consente di visualizzare la barra delle attività sul parte inferiore della finestra SEB. La barra delle attività è necessaria per visualizzare alcuni elementi come i controlli Wi-Fi, il pulsante per ricaricare la pagina e la disposizione della tastiera.';
$string['seb_showtime'] = 'Visualizza orario';
$string['seb_showtime_help'] = 'Consente di visualizzare l\'orario nella barra delle attività di SEB.';
$string['seb_showwificontrol'] = 'Visualizza controlli Wi-Fi';
$string['seb_showwificontrol_help'] = 'Consente di visualizzare i controlli Wi-Fi nella barra delle attività di SEB. I controlli consentono di ricollegarsi ad una rete Wi-Fi alla quale si erano già collegati.';
$string['seb_templateid'] = 'Modello di configurazione Safe Exam Browser';
$string['seb_templateid_help'] = 'Consente di utilizzare le impostazioni contenute nel modello durante lo svolgimento del quiz tramite Safe Exam Browser. È possibile modificare le impostazioni del modello con impostazioni manuali.';
$string['seb_use_client'] = 'Si - Con la configurazione client di SEB';
$string['seb_use_manually'] = 'Si - Con configurazione manuale';
$string['seb_use_template'] = 'Si - Con un modello esistente';
$string['seb_use_upload'] = 'Si - Con configurazione personale';
$string['seb_userconfirmquit'] = 'Chiedi all\'utente di confermare l\'uscita';
$string['seb_userconfirmquit_help'] = 'Gli utenti dovranno confermare di voler uscire da SEB.';
$string['sebdownloadbutton'] = 'Scarica Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Si è verificato un errore durante la validazione delle chiavi SEB.';
$string['seblinkbutton'] = 'Avvia Safe Exam Browser';
$string['sebrequired'] = 'Il quiz è configurato per essere avviato solamente utilizzando Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Auto-configura SEB';
$string['setting:autoreconfigureseb_desc'] = 'Gli utenti che accedono al quiz con Safe Exam Browser saranno obbligati a riconfigurare SEB.';
$string['setting:displayblocksbeforestart'] = 'Visualizza i blocchi prima di avviare il quiz';
$string['setting:displayblocksbeforestart_desc'] = 'Consente di visualizzare i blocchi prima di avviare il quiz.';
$string['setting:displayblockswhenfinished'] = 'Visualizza i blocchi al termine del quiz';
$string['setting:displayblockswhenfinished_desc'] = 'Consente di visualizzare i blocchi dopo aver terminato il quiz.';
$string['setting:downloadlink'] = 'Collegamento per scaricare Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'L\'URL per scaricare Safe Exam Browser';
$string['setting:quizpasswordrequired'] = 'Obbligatoria password del quiz';
$string['setting:quizpasswordrequired_desc'] = 'Tutti i quiz che richiedono l\'utilizzo di Safe Exam Browser dovranno avere una password.';
$string['setting:showhttplink'] = 'Visualizza collegamento http://';
$string['setting:showseblink'] = 'Visualizza collegamento seb://';
$string['setting:showseblinks'] = 'Visualizza collegamento alla configurazione Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Consente di visualizzare un collegamento alla configurazione di Safe Exam Browser quando viene bloccato l\'accesso al quiz. Da notare che i collegamenti seb:// non funzionano su tutti i browser.';
$string['setting:supportedversions'] = 'Attenzione: per utilizzare la funzionalità della chiave di configurazione sono necessarie le seguenti versioni minime di Safe Exam Browser: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Non è possibile modificare le impostazioni di Safe Exam Browser perché è presente almeno un tentativo del quiz.';
$string['unknown_reason'] = 'Motivo sconosciuto';
$string['used'] = 'In uso';
