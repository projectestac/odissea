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
 * Strings for component 'auth', language 'it', version '4.1'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugin di autenticazione disponibili';
$string['allowaccountssameemail'] = 'Consenti utenti con email duplicate';
$string['allowaccountssameemail_desc'] = 'Più utenti potranno usare lo stesso indirizzo email. Tale configurazione può comportare problemi di sicurezza o di privacy, ad esempio nel caso di email relative al cambio della password.';
$string['alternatelogin'] = 'Specificando un URL come Pagina di login sostitutiva, Moodle la utilizzerà al posto della pagina di login standard. La Pagina di login sostitutiva deve contenere un form con la "action property" impostata a <strong>\'{$a}\'</strong> e deve contenere i campi <strong>username</strong> e <strong>password</strong>.<br/> Fai attenzione a non inserire URL errati  perché ti chiuderai  fuori dal sito. <br/>
Non compilare questo campo se preferisci utilizzare la pagina di login standard.';
$string['alternateloginurl'] = 'URL pagina di login sostitutiva';
$string['auth_changepasswordhelp'] = 'Aiuto cambiamento password';
$string['auth_changepasswordhelp_expl'] = 'Visualizza come recuperare la propria  {$a} password a coloro  che l\'hanno dimenticata. L\'aiuto verrà  visualizzato da solo o in sostituzione dell <strong>Pagina cambiamento password</strong> del sistema di cambiamento password interno di Moodle.';
$string['auth_changepasswordurl'] = 'Pagina cambiamento password';
$string['auth_changepasswordurl_expl'] = 'Indicare l\'URL in cui indirizzare gli utenti che hanno perso la loro {$a} password. Impostare <strong>Utilizza la pagina standard per il cambio della password</strong> a <strong>No</strong>';
$string['auth_changingemailaddress'] = 'Hai richiesto il cambio di indirizzo email da {$a->oldemail} a {$a->newemail}. Per motivi di sicurezza ti stiamo inviando un messaggio al nuovo indirizzo per avere conferma che ti appartenga realmente. Il tuo indirizzo email sarà aggiornato appena cliccherai sul link presente nel messaggio.';
$string['auth_common_settings'] = 'Impostazioni tipiche';
$string['auth_data_mapping'] = 'Mappatura dei dati';
$string['auth_fieldlock'] = 'Campi bloccati nel profilo utente';
$string['auth_fieldlock_expl'] = '<p>Blocco del campo: gli utenti non potranno modificare il campo. L\'impostazione è utile se si mappano i campi del profilo utente da una fonte di autenticazione esterna.</p>';
$string['auth_fieldlockfield'] = 'Blocco del campo ({$a})';
$string['auth_fieldlocks'] = 'Campi bloccati nel profilo utente';
$string['auth_fieldlocks_help'] = '<p>È possibile bloccare uno o più campi del profilo utente. La funzione può risultare particolarmente utile in quei siti dove i dati dei profili utente sono gestiti a mano dagli amministratori, i quali possono modificare i record degli utenti oppure caricarli utilizzando la funzione \'Importa utenti\'.</p><p>Se si bloccano campi che Moodle considera obbligatori, accertarsi di fornire tali dati durante la creazione di account, altrimenti gli account incompleti non saranno utilizzabili.</p><p>Per evitare questo problema, è possibile utilizzare l\'opzione \'Libero se vuoto\'.</p>';
$string['auth_fieldmapping'] = 'Mappatura dati ({$a})';
$string['auth_invalidnewemailkey'] = 'Errore: se stai cercando di confermare un cambio di indirizzo email, puoi aver fatto un errore nel copiare il link che ti abbiamo inviato per email. Prova ancora, copiando correttamente l\'indirizzo.';
$string['auth_multiplehosts'] = 'Possono essere elencati più macchine remote (es. host1.com;host2.com;host3.com)';
$string['auth_notconfigured'] = 'Il metodo di autenticazione {$a} non è configurato.';
$string['auth_outofnewemailupdateattempts'] = 'Hai superato i tentativi permessi per modificare l\'indirizzo email. La richiesta di modifica è stata annullata.';
$string['auth_passwordisexpired'] = 'La password è scaduta. Si prega di cambiarla adesso.';
$string['auth_passwordwillexpire'] = 'La password scadrà tra {$a} giorni. Vuoi cambiarla adesso?';
$string['auth_remove_delete'] = 'Cancella interna';
$string['auth_remove_keep'] = 'Mantieni interna';
$string['auth_remove_suspend'] = 'Sospendi interna';
$string['auth_remove_user'] = 'Imposta cosa fare con gli account di utenti interni durante la sincronizzazione in massa quando gli utenti non sono più presenti nella fonte esterna. Solo gli utenti sospesi saranno riattivati automaticamente qualora fossero nuovamente presenti nella fonte esterna.';
$string['auth_remove_user_key'] = 'Utente esterno rimosso';
$string['auth_sync_script'] = 'Sincronizzazione account utenti';
$string['auth_sync_suspended'] = 'Consente di sincronizzare lo stato di sospensione degli utenti locali tramite l\'attributo di sospensione.';
$string['auth_sync_suspended_key'] = 'Sincronizza localmente la sospensione dell\'utente';
$string['auth_updatelocal'] = 'Aggiornamento dati locali';
$string['auth_updatelocal_expl'] = '<p><b>Aggiornameno dati locali:</b> Il campo sarà aggiornato con i dati provenienti dall\'autenticazione esterna tutte le volte che l\'utente si autenticherà o verrà effettuata una sincronizzazione degli utenti. Si consiglia di bloccare I campi locali impostati per essere aggiornati.</p>';
$string['auth_updatelocalfield'] = 'Aggiornamento dati locali ({$a})';
$string['auth_updateremote'] = 'Aggiornamento dati esterni';
$string['auth_updateremote_expl'] = '<p><b>Aggiornamento dati esterni:</b> Il campo presenti nell\'autenticazione esterna sarà  aggiornato se i dati locali dell\'utente saranno modificati. In questo caso i campi del profilo utente non devono essere bloccati affinché sia possibile la modifica.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Nota:</b> Aggiornando i dati esterni LDAP è richiesta l\'impostazione di binddn e di bindpw a un utente di bind con privilegi di modifica per tutti i dati degli utenti. Questo attualmente non preserva gli attributi multivalore, e rimuoverà  i valori aggiuntivi durante l\'aggiornamento.</p>';
$string['auth_updateremotefield'] = 'Aggiornamento dati esterni ({$a})';
$string['auth_user_create'] = 'Creazione utenti';
$string['auth_user_creation'] = 'I nuovi utenti (anonimi) possono iscriversi alla sorgente di autenticazione esterna e confermare tramite email. Se abiliti questo, ricorda anche di configurare le opzioni specifiche del modulo per la creazione degli utenti';
$string['auth_usernameexists'] = 'Il nome utente scelto è già  utilizzato. Sceglierne uno nuovo.';
$string['auth_usernotexist'] = 'Non può essere modificato l\'utente non esistente: {$a}';
$string['authenticationoptions'] = 'Opzioni di autenticazione';
$string['authinstructions'] = 'In questo campo è possibile inserire istruzioni per il login specifiche per i vostri utenti. Lasciando vuoto il campo verranno visualizzate le istruzioni di default.';
$string['authloginviaemail'] = 'Consenti autenticazione usando l\'email';
$string['authloginviaemail_desc'] = 'Gli utenti potranno autenticarsi usando sia lo username sia l\'indirizzo email (se univoco).';
$string['auto_add_remote_users'] = 'Aggiungi automaticamente gli utenti remoti';
$string['cannotmapfield'] = 'Non è possibile mappare Il campo "{$a->fieldname}" poiché è troppo lungo il suo nome abbreviato "{$a->shortname}". Per poterlo mappare, è necessario ridurre la lunghezza a {$a->charlimit} caratteri. <a href="{$a->link}">Modifica i campi del profilo utente.</a>';
$string['changepassword'] = 'Cambia URL delle password';
$string['changepasswordhelp'] = 'L\'URL della pagina dove recuperare la propria password che sarà inviata via email. Da notare che l\'impostazione sarà priva di effetto se viene impostato un URL di password dimenticata nelle impostazioni comuni dell\'autenticazione.';
$string['chooseauthmethod'] = 'Metodo di autenticazione';
$string['chooseauthmethod_help'] = 'Consente la scelta del  metodo di autenticazione associato all\'utente. È necessario scegliere solamente plugin di autenticazione abilitati, altrimenti l\'utente non sarà in grado di autenticarsi. Per impedire l\'autenticazione, scegliere "Account disabilitato".';
$string['createpassword'] = 'Genera la password e informa l\'utente';
$string['createpasswordifneeded'] = 'Genera le password se necessario e inviale per email';
$string['emailchangecancel'] = 'Annulla cambio email';
$string['emailchangepending'] = 'Cambio email in corso. Clicca sul link presente nel messaggio che ti è stato inviato a {$a->preference_newemail}.';
$string['emailnowexists'] = 'L\'indirizzo email che hai cercato di assegnare al tuo profilo è stato, nel frattempo, assegnato a qualcun altro, dal momento della tua richiesta. La richiesta di modifica email è stata quindi annullata, ma puoi provare ancora con un indirizzo email differente.';
$string['emailupdate'] = 'Modifica indirizzo email';
$string['emailupdatemessage'] = 'Gentile {$a->fullname},

hai richiesto la modifica dell\'indirizzo email del tuo account sul sito {$a->site}. Per confermare la richiesta, apri il link seguente con il browser:

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'L\'indirizzo email dell\'utente <em>{$a->fullname}</em> è stato modificato in <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Conferma del cambio di email su {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'La password può contenere un massimo di {$a} caratteri identici consecutivi.';
$string['errorminpassworddigits'] = 'La password deve contenere almeno {$a} numeri.';
$string['errorminpasswordlength'] = 'La password deve essere lunga almeno {$a} caratteri.';
$string['errorminpasswordlower'] = 'La password deve contenere almeno {$a} lettere minuscole.';
$string['errorminpasswordnonalphanum'] = 'La password deve contenere almeno i seguenti caratteri speciali: {$a} (ad esempio *,-, oppure #).';
$string['errorminpasswordupper'] = 'La password deve contenere almeno {$a} lettere maiuscole.';
$string['errorpasswordreused'] = 'Questa password è già stata utilizzata e non può essere riutilizzata.';
$string['errorpasswordupdate'] = 'Si è verificato un errore durante l\'aggiornamento della password, la password non è stata modificata';
$string['eventuserloggedin'] = 'Autenticazione utente';
$string['eventuserloggedinas'] = 'Autenticazione utente come altro utente';
$string['eventuserloginfailed'] = 'Autenticazione utente errata';
$string['forcechangepassword'] = 'Cambiamento della password';
$string['forcechangepassword_help'] = 'Obbliga gli utenti a cambiare la password al prossimo accesso a Moodle.';
$string['forcechangepasswordfirst_help'] = 'Obbliga gli utenti a cambiare la password al primo accesso a Moodle.';
$string['forgottenpassword'] = 'È possibile inserire un URL che sarà usato come pagina di recupero delle password. L\'impostazione è particolarmente utile per quei siti dove le password sono gestite esternamente a Moodle. Non inserendo un URL sarà usata la pagina di default per il recupero delle password.';
$string['forgottenpasswordurl'] = 'URL pagina recupero password';
$string['getrecaptchaapi'] = 'Per utilizzare reCAPTCHA devi prima ottenere una chiave API su <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Pulsante login ospite';
$string['incorrectpleasetryagain'] = 'Sbagliato. Prova ancora.';
$string['infilefield'] = 'Il campo è presente nel file';
$string['informminpassworddigits'] = 'contenere almeno {$a} numero(i)';
$string['informminpasswordlength'] = 'almeno {$a} caratteri';
$string['informminpasswordlower'] = 'contenere almeno {$a} lettera(e) minuscola(e)';
$string['informminpasswordnonalphanum'] = 'almeno i seguenti caratteri speciali: {$a} (ad esempio *,-, oppure #).';
$string['informminpasswordreuselimit'] = 'Le password possono essere riutilizzate dopo {$a} modifiche';
$string['informminpasswordupper'] = 'contenere almeno {$a} lettera(e) maiuscola(e)';
$string['informpasswordpolicy'] = 'La password deve essere lunga {$a}';
$string['instructions'] = 'Istruzioni';
$string['internal'] = 'Interna';
$string['limitconcurrentlogins'] = 'Limita autenticazioni contemporanee';
$string['limitconcurrentlogins_desc'] = 'Limita il numero di sessioni browser contemporanee apribili da ciascun utente. Se un utente supera il limite, la sessione più vecchia sarà eliminata automaticamente. Da tenere presente che l\'utente può perdere eventuale lavoro non salvato. L\'impostazione non è compatibile con plugin di autenticazione con single sign on (SSO).';
$string['locked'] = 'Bloccato';
$string['md5'] = 'Hash MD5';
$string['nopasswordchange'] = 'La password non può essere modificata';
$string['nopasswordchangeforced'] = 'Non puoi proseguire senza modificare la tua password, ma non c\'è una pagina per cambiarla. Contatta il tuo amministratore Moodle.';
$string['noprofileedit'] = 'I profili non possono essere modificati';
$string['ntlmsso_attempting'] = 'Esecuzione Single Sign On via NTLM ...';
$string['ntlmsso_failed'] = 'Auto-login fallito. Prova com la pagina di login standard...';
$string['ntlmsso_isdisabled'] = 'L\'SSO via NTLM non è abilitato';
$string['passwordhandling'] = 'Gestione del campo password';
$string['plaintext'] = 'Testo semplice';
$string['pluginnotenabled'] = 'Il plugin \'{$a}\' per l\'autenticazione non è abilitato.';
$string['pluginnotinstalled'] = 'Il plugin \'{$a}\' per l\'autenticazione non è installato.';
$string['potentialidps'] = 'Autenticati su:';
$string['privacy:metadata:userpref:createpassword'] = 'Indica che deve essere generata una password per l\'utente.';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indica se l\'utente deve modificare la propria password non appena effettua il login.';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Numero di login errati dell\'utente';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Numero di login errati dell\'utente dall\'ultimo login effettuato con successo.';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Data dell\'ultimo tentativo di login errato.';
$string['privacy:metadata:userpref:loginlockout'] = 'Se l\'account dell\'utente è bloccato a causa dei login errati, e la data in cui l\'account è stato bloccato.';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indica che l\'account dell\'utente non può essere soggetto a bloccaggio.';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Se bloccato, il codice segreto che l\'utente deve usare per sbloccare il proprio account.';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'Il CAPTCHA è un sistema per prevenire abusi da parte di sistemi automatici. per verificare che sei un persona reale, segui le istruzioni. Possono essere essere visualizzati una casella di spunta, immagini con parole da inserire, oppure una serie di immagini sa selezionare.

Se non è chiaro cosa contengano le immagini, chiedi un altro CAPTCHA oppure chiedi un CAPTCHA audio.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Domanda di sicurezza';
$string['selfregistration'] = 'Auto creazione account';
$string['selfregistration_help'] = 'Impostando un plugin per l\'auto creazione di account, come ad esempio il plugin per la creazione di account via email, qualsiasi visitatore del sito potrà crearsi un account. Tale funzione espone il sito al rischio che spammer possano creare account per inviare post indesiderati attraverso forum, blog od altre funzioni. Per evitare questo rischio è bene disabilitare l\' Auto creazione di account  oppure limitarla attraverso l\'impostazione <em>Domini di posta autorizzati</em> oppure ancora attivando il reCAPTCHA.';
$string['settingmigrationmismatch'] = 'È stato riscontrato un valore discordante durante la correzione dei nomi delle impostazioni del plugin. Il plugin di autenticazione \'{$a->plugin}\' aveva l\'impostazione \'{$a->setting}\' configurata a to \'{$a->legacy}\' con il nome obsoleto ed a \'{$a->current}\'  con il nome attuale. È stato considerato valido il valore \'{$a->current}\', si consiglia tuttavia di controllare e verificare la correttezza della scelta';
$string['sha1'] = 'Hash SHA-1';
$string['showguestlogin'] = 'È possibile visualizzare o nascondere  il pulsante \'login come ospite\' nella pagina di login standard';
$string['stdchangepassword'] = 'Utilizza la pagina standard per il cambiamento della password';
$string['stdchangepassword_expl'] = 'Se il sistema di autenticazione esterna consente il cambiamento delle password attraverso Moodle, impostare a Si. Questa impostazione esclude l\'URL per cambiare la password.';
$string['stdchangepassword_explldap'] = 'Nota: Qualora il server fosse remoto, si raccomanda di utilizzare LDAP su una connessione criptata con SSL (ldaps://) .';
$string['suspended'] = 'Account sospeso';
$string['suspended_help'] = 'Gli account sospesi non possono autenticarsi, non possono usare i web service e non ricevono messaggi.';
$string['testsettings'] = 'Test impostazioni';
$string['testsettingsheading'] = 'Test impostazioni di autenticazione - {$a}';
$string['unlocked'] = 'Libero';
$string['unlockedifempty'] = 'Libero se vuoto';
$string['update_never'] = 'Mai';
$string['update_oncreate'] = 'Solo al primo accesso';
$string['update_onlogin'] = 'Ad ogni accesso';
$string['update_onupdate'] = 'In caso di modifica';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate()non supporta il tipo di utente selezionato: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_activate()ancora non supporta il tipo di utente selezionato';
$string['username'] = 'Username';
$string['username_help'] = 'Attenzione: alcuni plugin di autenticazione non consentono la modifica dello username.';
