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
 * Strings for component 'tool_mobile', language 'it', version '4.1'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Il debugging ADOdb è abilitato. Può essere disabilitato nelle impostazioni del plugin di autenticazione o di iscrizione Database esterno.';
$string['androidappid'] = 'Identificativo univoco app Android';
$string['androidappid_desc'] = 'L\'impostazione deve essere lasciata al suo default a meno che non si utilizzi una app Android propria.';
$string['apppolicy'] = 'URL della policy dell\'app';
$string['apppolicy_help'] = 'L\'URL della policy per gli utenti dell\'app, elencata nella pagina Informazioni nell\'app. Lasciando il campo vuoto, verrà utilizzato l\'URL della policy del sito.';
$string['apprequired'] = 'La funzionalità è disponibile solamente quando si accede a Moodle via app desktop o mobile.';
$string['autologinkeygenerationlockout'] = 'La generazione della chiave di login automatico è stata bloccata. È necessario attendere {$a} minuti prima di effettuare una nuova richiesta.';
$string['autologinmintimebetweenreq'] = 'Intervallo di tempo minimo tra richieste di login automatico';
$string['autologinmintimebetweenreq_desc'] = 'Imposta l\'intervallo di di tempo minimo tra richieste di login automatico proveninenti dall\'app. Impostare ad un valore basso se agli utenti dell\'app viene richiesto frequentemente di inserire le propri credenziali per visualizzare contenuto incorporato.';
$string['autologinnotallowedtoadmins'] = 'Gli amministratori del sito non posso autenticarsi automaticamente.';
$string['cachedef_plugininfo'] = 'Elenco dei plugin con funzionalità aggiuntive mobile';
$string['cachedef_subscriptiondata'] = 'Informazioni sulla sottoscrizione della Moodle App';
$string['clickheretolaunchtheapp'] = 'Clicca qui se l\'app non si apre automaticamente.';
$string['configmobilecssurl'] = 'Un file CSS per personalizzare l\'interfaccia della tua app mobille.';
$string['customlangstrings'] = 'Stringhe di lingua personalizzate';
$string['customlangstrings_desc'] = 'Le parole e le frasi visualizzate nell\'app possono essere personalizzate. Digitare le stringhe di lingua che si desidera personalizzare ciascuna su una riga secondo il seguente formato: "identificativo della stringa,stringa personalizzata,codice lingua". Gli elementi devono essere separati dal carattere \'|\' (pipe). Esempio:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>';
$string['custommenuitems'] = 'Voci di menù personalizzate';
$string['custommenuitems_desc'] = 'È possibile definire ulteriori elementi da aggiungere al menu principale dell\'app. Digitare le voci di menu che si desidera aggiungere ciascuna su una nuova riga secondo il seguente formato:" testo dell\'elemento, URL del link, metodo di apertura del link, codice della lingua (facoltativo, per far visualizzare l\'elemento solo agli utenti della lingua specificata)". Gli elementi devono essere separati dal carattere \'|\' (pipe).

I metodi di apertura dei link sono: app (per il link a un\'attività supportata dall\'app), inappbrowser (per aprire il link in un browser senza uscire dall\'app), browser (per aprire il link nel browser predefinito del dispositivo all\'esterno dell\'app) e incorporato (per visualizzare il link in un iframe in una nuova pagina nell\'app).

Esempio:
<pre>
App help|https://domain.tld/help|inappbrowser
Le mie valutazioni|https://domain.tld/local/mygrades/index.php|embedded|it
Mis calificaciones|https://domain.tld/local/mygrades/index.php|embedded|es
</pre>';
$string['darkmode'] = 'Modalità scura';
$string['disabledfeatures'] = 'Funzionalità disabilitate';
$string['disabledfeatures_desc'] = 'È possibile selezionare le funzionalità da disabilitare nell\'app per dispositivi mobili. Da tenere presente che alcune delle funzioni elencate potrebbero essere già state disattivate tramite altre impostazioni a livello di sito. Per visualizzare le modifiche, effettuare il log out e accedere di nuovo all\'app.';
$string['displayerrorswarning'] = 'La visualizzazione dei messaggi di debug (debugdisplay) è abilitata. Andrebbe disabilitata.';
$string['downloadcourse'] = 'Scarica corso';
$string['downloadcourses'] = 'Scarica corsi';
$string['enablesmartappbanners'] = 'Abilita App banner';
$string['enablesmartappbanners_desc'] = 'Visitando il sito con un browser mobile sarà visualizzato un banner promozionale della app mobile.';
$string['filetypeexclusionlist'] = 'Elenco dei tipi di file esclusi';
$string['filetypeexclusionlist_desc'] = 'L\'elenco dei tipi di file che non si desidera gli utenti aprano nell\'app. Tali file saranno comunque elencati tramite app nella pagina dei corsi ma tentando di aprirli sarà visualizzato un avviso dove si informerà l\'utente che non è previsto l\'utilizzo di quei tipi di file nella app mobile. Gli utenti avranno la facoltà di annullare l\'apertura oppure ignorare l\'avviso e aprire comunque il file.';
$string['filetypeexclusionlistplaceholder'] = 'Elenco dei tipi di file esclusi nella app mobile';
$string['forcedurlscheme'] = 'Se si desidera consentire esclusivamente l\'apertura della propria app personalizzata da una finestra browser, è allora necessario impostare il relativo schema URL. Per utilizzare l\'app ufficiale, impostare il valore di default. Per utilizzare qualsiasi app lasciare il campo vuoto.';
$string['forcedurlscheme_key'] = 'Schema URL';
$string['forcelogout'] = 'Forza disconnessione';
$string['forcelogout_desc'] = 'Se abilitato, l\'opzione "Cambia sito" dell\'app verrà sostituita da "Esci". Di conseguenza l\'utente perderà l\'autenticazione. Per accedere nuovamente al sito l\'utente dovrà inserire la password.';
$string['getmoodleonyourmobile'] = 'Ottieni l\'app mobile';
$string['h5poffline'] = 'Visualizza contenuto H5P offline';
$string['httpsrequired'] = 'HTTPS obbligatorio';
$string['insecurealgorithmwarning'] = 'È possibile che il certificato HTTPS del sito utilizzi un algoritmo di firma non sicuro (SHA-1). Per favore prova ad aggiornare il certificato.';
$string['invalidcertificatechainwarning'] = 'È possibile che il certificato HTTPS del sito utilizzi un <i>certifcate chain</i> non valido. Anche se alcuni browser possono funzionare, l\'app non potrà collegarsi.';
$string['invalidcertificateexpiredatewarning'] = 'È possibile che il certificato HTTPS del sito sia scaduto.';
$string['invalidcertificatestartdatewarning'] = 'È possibile che il certificato HTTPS del sito non sia ancora valido (data di inizio validità nel futuro).';
$string['invalidprivatetoken'] = 'Token privato non valido. Il token non può essere nullo o passato come parametro GET.';
$string['invaliduserquotawarning'] = 'La quota utente (userquota) è impostata su un numero non valido. Deve essere impostato su un numero valido (un valore intero) nelle impostazioni di sicurezza del sito.';
$string['iosappid'] = 'Identificativo univoco dell\'app iOS';
$string['iosappid_desc'] = 'L\'impostazione deve essere lasciata al suo default a meno che non si utilizzi una app iOS propria.';
$string['loginintheapp'] = 'Via app';
$string['logininthebrowser'] = 'Via finestra browser (per plugin SSO)';
$string['loginintheembeddedbrowser'] = 'Via browser incorporato (per plugin SSO)';
$string['mainmenu'] = 'Menu principale';
$string['managefiletypes'] = 'Gestione tipi di file';
$string['minimumversion'] = 'Indicando una versione dell\'app (3.8.0 o superiore), gli utenti che utilizzano versioni più vecchie verranno invitati ad aggiornare l\'app prima di poter accedere al sito.';
$string['minimumversion_key'] = 'Versione minima dell\'app';
$string['mobileapp'] = 'App mobile';
$string['mobileappconnected'] = 'App mobile connessa';
$string['mobileappearance'] = 'Aspetto mobile';
$string['mobileappenabled'] = 'Il sito ha l\'accesso all\'app mobile abilitato. <br /> <a href="{$a}"> Scarica l\'app per dispositivi mobili</a>.';
$string['mobileappsubscription'] = 'Sottoscrizione Moodle app';
$string['mobileauthentication'] = 'Autenticazione mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funzionalità mobile';
$string['mobilenotificationsdisabledwarning'] = 'Le notifiche per dispositivi mobili non sono abilitate. Possono essere abilitate nelle impostazioni delle notifiche.';
$string['mobilesettings'] = 'Impostazioni mobile';
$string['notifications'] = 'Notifiche';
$string['notificationsactivedevices'] = 'Dispositivi attivi';
$string['notificationscurrentactivedevices'] = 'Dispositivi che hanno ricevuto notifiche durante questo mese';
$string['notificationsignorednotifications'] = 'Notifiche non inviate';
$string['notificationsmissingwarning'] = 'Non è stato possibile recuperare le statistiche delle notifiche notifiche dell\'app Moodle, probabilmente perché le notifiche mobile non sono ancora abilitate sul sito. È possibile abilitarle in Amministrazione sito del sito/Messaggistica/Mobile.';
$string['notificationsnewdevices'] = 'Nuovi dispositivi';
$string['notificationsseemore'] = 'Nota: le statistiche sull\'utilizzo dell\'app Moodle non vengono calcolate in tempo reale. Per accedere a statistiche più dettagliate, inclusi i dati dei mesi precedenti, accedere su <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notificationssentnotifications'] = 'Notifiche inviate';
$string['oauth2identityproviders'] = 'Identity provider OAuth 2';
$string['offlineuse'] = 'Uso offline';
$string['openusingembeddedbrowser'] = 'Apri utilizzando il browser incorporato';
$string['pluginname'] = 'Strumenti Moodle App';
$string['pluginnotenabledorconfigured'] = 'Il plugin non è abilitato o non è configurato';
$string['privacy:metadata:core_userkey'] = 'Le chiavi utente utilizzate per creare la chiave d\'accesso automatico.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La data della più recente richiesta della chiave d\'accesso automatico. Tra due richeste devono trascorre almeno 6 minuti.';
$string['qrcodedisabled'] = 'L\'accesso via QR code è disabilitato';
$string['qrcodeformobileappaccess'] = 'QR code per accesso mobile';
$string['qrcodeformobileapploginabout'] = 'Scansionare il codice QR con la\'app mobile per essere automaticamente autenticato. Il codice QR scadrà tra {$a}.';
$string['qrcodeformobileappurlabout'] = 'Scansionare il codice QR con la tua app mobile per inserire l\'URL del sito nell\'app.';
$string['qrcodetype'] = 'Accesso QR code';
$string['qrcodetype_desc'] = 'È possibile fornire un codice QR agli utenti dell\'app mobile. Può essere utilizzato per inserire l\'URL del sito o, se il sito è protetto tramite HTTPS, per autenticare l\'utente senza dover inserire username e password.';
$string['qrcodetypelogin'] = 'QR code con login automatico';
$string['qrcodetypeurl'] = 'QR code con URL del sito';
$string['qrkeyttl'] = 'Durata della chiave di autenticazione QR';
$string['qrkeyttl_desc'] = 'Durata della validità del codice QR per il login automatico.';
$string['qrsameipcheck'] = 'Autenticazione QR con controllo IP';
$string['qrsameipcheck_desc'] = 'Gli utenti dovranno utilizzare la stessa rete sia per generare sia per scansionare il codice QR. Disabilitare solo se gli utenti segnalano problemi con l\'autenticazione QR.';
$string['qrsiteadminsnotallowed'] = 'Per motivi di sicurezza gli amministratori del sit non possono autenticarsi con il QR code né autenticarsi come altri utenti.';
$string['readingthisemailgettheapp'] = 'Stai leggendo in un\'email? <a href="{$a}">Scarica l\'app mobile e ricevi le notifiche sul dispositivo mobile</a>.';
$string['remoteaddons'] = 'Componenti remoti aggiuntivi';
$string['responsivemainmenuitems'] = 'Elementi menu responsive';
$string['scanqrcode'] = 'Scansione QR code';
$string['selfsignedoruntrustedcertificatewarning'] = 'Il certificato HTTPS risulta self-signed oppure non attendibile. L\'app mobile funziona solo con siti attendibili. Per favore utilizzare una verifica SSL online per identificare il problema. Se la verifica SSL online accetta il certificato, è possibile ignorare questo avviso.';
$string['setuplink'] = 'Pagina di scaricamento app';
$string['setuplink_desc'] = 'URL della pagina contenente i link per scaricare l\'app mobile dall\'App Store e Google Play. Il link alla pagina di download viene visualizzato nel piè di pagina e nel profilo utente. Lasciare vuoto per per non visualizzare il link.';
$string['smartappbanners'] = 'App Banner';
$string['subscription'] = 'Sottoscrizione';
$string['subscriptioncreated'] = 'Data di inizio';
$string['subscriptionerrorrequest'] = 'Si è verificato un errore inaspettato durante il recupero delle caratteristiche della sottoscrizione dell\'app Mobile.';
$string['subscriptionexpiration'] = 'Data di scadenza';
$string['subscriptionfeaturenotapplied'] = 'Questa funzionalità è configurata ma non è inclusa nel piano Mobile app attualmente attivo. L\'impostzione non avrà effetto.';
$string['subscriptionfeatures'] = 'Caratteristiche della sottoscrizione';
$string['subscriptionlimitsurpassed'] = 'È stato superato il limite della sottoscrizione';
$string['subscriptionregister'] = 'Per i dettagli dei diversi piani dell\'app ed accedere alle statistiche di utilizzo dell\'app, vistare il <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['subscriptionsseemore'] = 'Nota: le informazioni visualizzati non sono aggiornate in tempo reale. Per visualizzare eventuali aggiornamenti può rendersi necessario uscire e rientrare nel portale. Per informazioni su come aggiornare il proprio piano app, autenticarsi su <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['switchaccount'] = 'Cambia account';
$string['typeoflogin'] = 'Tipo di autenticazione';
$string['typeoflogin_desc'] = 'Se un sito utilizza un\'autenticazione SSO, selezionare finestra browser o browser incorporato. Un browser incorporato fornisce un\'esperienza utente migliore sebbene non funzioni con tutti i tipi di plugin SSO.';
$string['viewqrcode'] = 'Visualizza codice QR';
