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
 * Strings for component 'tool_mobile', language 'it', version '3.11'.
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
$string['autologinkeygenerationlockout'] = 'La generazione della chiave di accesso automatico è stata bloccata. È necessario attendere 6 minuti prima di effettuare una nuova richiesta.';
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
$string['disabledfeatures_desc'] = 'E\' possibile selezionare le funzionalità da disabilitare nell\'app per dispositivi mobili. Da tenere presente che alcune delle funzioni elencate potrebbero essere già state disattivate tramite altre impostazioni a livello di sito. Per visualizzare le modifiche, effettuare il log out e accedere di nuovo all\'app.';
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
$string['insecurealgorithmwarning'] = 'E\' possibile che il certificato HTTPS del sito utilizzi un algoritmo di firma non sicuro (SHA-1). Per favore prova ad aggiornare il certificato.';
$string['invalidcertificatechainwarning'] = 'E\' possibile che il certificato HTTPS del sito utilizzi un <i>certifcate chain</i> non valido.';
$string['invalidcertificateexpiredatewarning'] = 'E\' possibile che il certificato HTTPS del sito sia scaduto.';
$string['invalidcertificatestartdatewarning'] = 'E\' possibile che il certificato HTTPS del sito non sia ancora valido (data di inizio validità nel futuro).';
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
$string['notificationsignorednotifications'] = 'Notifiche non inviate';
$string['notificationsnewdevices'] = 'Nuovi dispositivi';
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
$string['qrcodetype'] = 'Accesso QR code';
$string['qrcodetypelogin'] = 'QR code con login automatico';
$string['qrcodetypeurl'] = 'QR code con URL del sito';
$string['remoteaddons'] = 'Componenti remoti aggiuntivi';
$string['scanqrcode'] = 'Scansione QR code';
$string['selfsignedoruntrustedcertificatewarning'] = 'Il certificato HTTPS risulta auto firmato oppure non attendibile. L\'app mobile funziona solo con siti attendibili.';
$string['setuplink'] = 'Pagina di scaricamento app';
$string['setuplink_desc'] = 'URL della pagina contenente i link per scaricare l\'app mobile dall\'App Store e Google Play.';
$string['smartappbanners'] = 'App Banner';
$string['subscription'] = 'Sottoscrizione';
$string['subscriptioncreated'] = 'Data di inizio';
$string['subscriptionexpiration'] = 'Data di scadenza';
$string['subscriptionfeatures'] = 'Caratteristiche della sottoscrizione';
$string['typeoflogin'] = 'Tipo di autenticazione';
$string['typeoflogin_desc'] = 'Se un sito utilizza un\'autenticazione SSO, selezionare finestra browser o browser incorporato. Un browser incorporato fornisce un\'esperienza utente migliore sebbene non funzioni con tutti i tipi di plugin SSO.';
$string['viewqrcode'] = 'Visualizza codice QR';
