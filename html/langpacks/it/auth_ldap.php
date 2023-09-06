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
 * Strings for component 'auth_ldap', language 'it', version '4.1'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'L\'account in Active Directory non è stato creato. Controllare di avere tutti i requisiti per poterlo fare (connessione LDAPS, utente bind con privilegi adeguati, eccetera)';
$string['auth_ldap_attrcreators'] = 'Elenco di gruppi o contesti i cui membri sono autorizzati a creare attributi. Separa gruppi diversi con\';\'. Ad esempio \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Creatori di attributi';
$string['auth_ldap_auth_user_create_key'] = 'Creare utenti esternamente';
$string['auth_ldap_bind_dn'] = 'È possibile utilizzare un utente Bind per cercare gli utenti. Ad esempio \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Distinguished name';
$string['auth_ldap_bind_pw'] = 'Password dell\'utente Bind.';
$string['auth_ldap_bind_pw_key'] = 'Password';
$string['auth_ldap_bind_settings'] = 'Impostazioni Bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL cambio password';
$string['auth_ldap_contexts'] = 'L\'elenco dei contesti dove sono presenti gli utenti. Separare  contesti diversi con \';\'. Ad esempio: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contesti';
$string['auth_ldap_create_context'] = 'Abilitando la creazione degli utenti con conferma via e-mail, è possibile impostare il contesto dove  gli utenti verranno creati. Questo contesto deve essere diverso da quello di altri utenti per prevenire problemi di sicurezza. Non è necessario aggiungere questo contesto alla variabile ldap_context, Moodle cercherà  gli utenti di questo contesto automaticamente.
.<br /><b>Nota</b> Affinché la creazione utenti possa funzionare, è necessario modificare la funzione auth_user_create() nel file auth/ldap/lib.php.';
$string['auth_ldap_create_context_key'] = 'Contesto per i nuovi utenti';
$string['auth_ldap_create_error'] = 'Si è verificato un errore durante la creazione dell\'utente in LDAP.';
$string['auth_ldap_expiration_desc'] = 'Selezionare \'{$a->no}\' per disabilitare il controllo delle password scadute oppure  \'{$a->ldapserver}\' per ottenere la data di scadenza delle password dal server LDAP';
$string['auth_ldap_expiration_key'] = 'Scadenza';
$string['auth_ldap_expiration_warning_desc'] = 'Numero di giorni che precedono l\'invio dell\'avviso di password in scadenza.';
$string['auth_ldap_expiration_warning_key'] = 'Avviso di scadenza';
$string['auth_ldap_expireattr_desc'] = 'Opzionale: modifica l\'attributo ldap che definisce la data di scadenza delle password.';
$string['auth_ldap_expireattr_key'] = 'Attributo per la scadenza';
$string['auth_ldap_graceattr_desc'] = 'Opzionale: esclude l\'attributo gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Attributo Grace login';
$string['auth_ldap_gracelogins_desc'] = 'Abilita il supporto del gracelogin di LDAP. Alla scadenza della password, l\'utente potrà autenticarsi finché il contatore gracelogin non sarà a 0. Abilitando questa impostazione, se la password è scaduta, verrà visualizzato il messaggio di grace login.';
$string['auth_ldap_gracelogins_key'] = 'Grace login';
$string['auth_ldap_groupecreators'] = 'Elenco dei gruppi o dei contesti i cui membri sono autorizzati a creare gruppi. Separare i gruppi multipli con \';\'. Ad esempio \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Creatori di gruppi';
$string['auth_ldap_host_url'] = 'URL del server LDAP, ad esempio \'ldap://ldap.myorg.com/\' oppure \'ldaps://ldap.myorg.com/\'. Per impostare più server per il supporto al failover, separare gli URL con \';\'.';
$string['auth_ldap_host_url_key'] = 'URL dell\'host';
$string['auth_ldap_ldap_encoding'] = 'La codifica usata dal server LDAP, di solito utf-8. Selezionando LDAP v2, MS AD utilizzerà la propria codifica, come cp1252 o cp125.';
$string['auth_ldap_ldap_encoding_key'] = 'Codifica LDAP';
$string['auth_ldap_login_settings'] = 'Impostazioni login';
$string['auth_ldap_memberattribute'] = 'Opzionale: modifica l\'attributo user member nel caso gli utenti appartengano ad un gruppo. Di solito \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Modifica la gestione dei valori dell\'attributo member';
$string['auth_ldap_memberattribute_isdn_key'] = 'L\'attributo member usa "dn"';
$string['auth_ldap_memberattribute_key'] = 'Attributo member';
$string['auth_ldap_no_mbstring'] = 'Per creare utenti in Active Directory  è necessaria l\'estensione mbstring';
$string['auth_ldap_noconnect'] = 'Il modulo LDAP non può collegarsi al server: {$a}';
$string['auth_ldap_noconnect_all'] = 'Il modulo LDAP non può collegarsi a nessun server: {$a}';
$string['auth_ldap_noextension'] = 'Il modulo PHP LDAP non sembra essere disponibile. Per usare l\'autenticazione LDAP assicurarsi che sia installato ed abilitato.';
$string['auth_ldap_objectclass'] = 'Opzionale: l\'objectClass da utilizzare per la ricerca degli utenti. Di solito non è necessario modificare questa impostazione.';
$string['auth_ldap_objectclass_key'] = 'Object class';
$string['auth_ldap_opt_deref'] = 'Imposta il modo con cui vengono trattati gli alias durante una ricerca. Selezionare uno dei seguenti valori:<br/>
"No" (LDAP_DEREF_NEVER) <br/>
"Si" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dereference aliases';
$string['auth_ldap_passtype'] = 'Specificare il formato delle password nuove o modificate nel server LDAP.';
$string['auth_ldap_passtype_key'] = 'Formato password';
$string['auth_ldap_passwdexpire_settings'] = 'Impostazione scadenza password LDAP';
$string['auth_ldap_preventpassindb'] = 'Selezionare Si per evitare il salvataggio delle password nel database di Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Evita il caching delle password';
$string['auth_ldap_rolecontext'] = 'Contesto {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Contesto LDAP utilizzato per selezionare la mappatura di <i>{$a->localname}</i>. Separare più gruppi con \';\', ad esempio: "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with -ruolo-gruppi,o=myorg".';
$string['auth_ldap_search_sub'] = 'Cerca gli utenti anche nei sotto-contesti.';
$string['auth_ldap_search_sub_key'] = 'Cerca nei sotto-contesti';
$string['auth_ldap_server_settings'] = 'Impostazioni server LDAP';
$string['auth_ldap_suspended_attribute'] = 'Opzionale: l\'attributo, se fornito, può essere utilizzato per abilitare o sospendere gli account locali.';
$string['auth_ldap_suspended_attribute_key'] = 'Attributo di sospensione';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() non supporta il tipo utente selezionato: {$a}"';
$string['auth_ldap_update_userinfo'] = 'I campi del profilo utente (nome, cognome, indirizzo...) saranno aggiornati da LDAP a Moodle. Impostare la mappatura dei dati secondo necessità.';
$string['auth_ldap_user_attribute'] = 'Opzionale: sovrascrive l\'attributo usato per cercare gli utenti. Di solito \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Attributo utente';
$string['auth_ldap_user_exists'] = 'Lo username LDAP è già esistente.';
$string['auth_ldap_user_settings'] = 'Impostazioni ricerca utente';
$string['auth_ldap_user_type'] = 'La modalità con la quale sono memorizzati gli utenti in LDAP. Questa impostazione determina anche il funzionamento della scadenza della password, del grace login e della creazione dell\'utente.';
$string['auth_ldap_user_type_key'] = 'Tipo utente';
$string['auth_ldap_usertypeundefined'] = 'config.user_type non definito o la funzione ldap_expirationtime2unix non supporta il tipo selezionato.';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type non definito o la funzione ldap_unix2expirationtime non supporta il tipo selezionato.';
$string['auth_ldap_version'] = 'La versione del protocollo utilizzata dal server LDAP.';
$string['auth_ldap_version_key'] = 'Versione';
$string['auth_ldapdescription'] = 'Il plugin consente la confiugrazione dell\'autenticazione tramite un server LDAP esterno. Autenticandosi la prima volta in Moodle con credenziali LDAP valide, verrà anche creato un utente nel database. Il plugin può leggere gli attributi dell\'utente da LDAP e mappare i campi in Moodle. Durante le successive autenticazioni verranno solamente verificati username e password.';
$string['auth_ldapextrafields'] = 'i campi seguenti sono opzionali. È possibile scegliere di mappare alcuni campi del profilo utente in Moodle utilizzando i dati provenienti dai <b>campi LDAP</b>. <p>Lasciando i campi vuoti, non verranno mappati dati da LDAP e verranno utilizzati i dati di default di Moodle.</p><p>In entrambi i casi,gli utenti potranno modificare questi campi dopo essersi autenticati.</p>';
$string['auth_ldapnotinstalled'] = 'Non è possibile usare l\'autenticazione LDAP. Il modulo PHP LDAP non è installato.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Impostare a SI per provare il Single Sign On con il dominio NTLM. Nota:  sono necessarie impostazioni aggiuntive sul webserver, per maggiori informazioni: <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Abilita';
$string['auth_ntlmsso_ie_fastpath'] = 'Imposta a Si per abilitare NTLM SSO fast path. (Evita alcuni passaggi se il browser client è Internet Explorer)';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Prova NTLM con qualsiasi browser';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE fast path?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Si, prova NTLM anche con gli altri browser';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Si, gli altri browser useranno il login standard';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Non è stato possibile estrarre lo username dall\'header REMOTE_USER. Verifica la correttezza del formato.';
$string['auth_ntlmsso_missing_username'] = 'Nel formato dello username remote devi specificare almeno %username%';
$string['auth_ntlmsso_remoteuserformat'] = 'Scegliendo \'NTLM\' come "Tipo di autenticazione\', è possibile specificare il formato dello username remoto. Lasciando il formato vuoto, verrà usato il formato DOMAIN\\username. È possibile usare il segnaposto <b>%domain%</b> per specificare dove appare il  dominio e il segnaposto obbligatorio <b>%username%</b> per specificare dove compare lo username.<br /><br />Alcuni formati di uso frequente:
<tt>%domain%%username%</tt> (MS Windows default), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> e <tt>%username%</tt> (in assenza di parte relativa al dominio).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Formato username remoto';
$string['auth_ntlmsso_subnet'] = 'L\'impostazione consente l\'SSO solo dai client appartenenti ad una subnet. Formato: xxx.xxx.xxx.xxx/bitmask. È possibile impostare più subnet separandole con \',\' (virgola).';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['auth_ntlmsso_type'] = 'Il metodo di autenticazione configurato nel web server per autenticare gli utenti (se sei in dubbio scegli NTLM)';
$string['auth_ntlmsso_type_key'] = 'Tipo di autenticazione';
$string['cannotmaprole'] = 'Non è possibile mappare Il ruolo  "{$a->rolename}" poiché il suo nome abbreviato "{$a->shortname}" è troppo lungo oppure contiene trattini. Per poterlo mappare, è necessario ridurre la lunghezza a {$a->charlimit} caratteri e/o rimuovere i tratini. <a href="{$a->link}">Modifica il ruolo.</a>';
$string['connectingldap'] = 'Connessione al server LDAP...';
$string['connectingldapsuccess'] = 'La connessione al server LDAP è avvenuta correttamente';
$string['creatingtemptable'] = 'Creazione tabella temporanea {$a}';
$string['diag_contextnotfound'] = 'Il contesto {$a} non esiste oppure il bind DN non può leggerlo';
$string['diag_emptycontext'] = 'È stato trovato un contesto vuoto.';
$string['diag_genericerror'] = 'Si è verificato l\'errore LDAP {$a->code} durante la lettura di {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Il bind DN non riesce a leggere Il gruppo {$a->group} relativo al ruolo {$a->localname}.';
$string['diag_toooldversion'] = 'È improbabile che un server LDAP moderno possa usare il protocollo LDAPv2. Impostazioni non corrette possono corrompere i valori dei campi. Per favore verificare con l\'amministratore LDAP.';
$string['didntfindexpiretime'] = 'password_expire() non ha trovato la data di scadenza.';
$string['didntgetusersfromldap'] = 'LDAP non ha restituito nessun acccount -- un errore ? --';
$string['gotcountrecordsfromldap'] = 'LDAP ha restituito {$a} record';
$string['invalidusererrors'] = 'Attenzione: la creazione di {$a} account utente è stata saltata';
$string['invaliduserexception'] = 'Errore: non è possibile creare l\'account utente. Dettagli e motivazioni:
{$a}
L\'utente è stato saltato.';
$string['ldapnotconfigured'] = 'L\'URL dell\'host LDAP non è configurata';
$string['morethanoneuser'] = 'LDAP ha restituito più account dello stesso utente. Verrà usato il primo.';
$string['needbcmath'] = 'Per verificare le password scadute su Active Directory occorre l\'estensione BCMath';
$string['needmbstring'] = 'Per cambiare password in Active Directory occorre l\'estensione mbstring.';
$string['nodnforusername'] = 'Si è verificato un errore in user_update_password(). Nessun DN per: {$a->username}';
$string['noemail'] = 'Il tentativo di inviarti un\'email non è riuscito.';
$string['notcalledfromserver'] = 'Non dovrebbe essere chiamato dal server web!';
$string['noupdatestobedone'] = 'Nessun aggiornamento da effettuare';
$string['nouserentriestoremove'] = 'Nessun account utente da rimuovere';
$string['nouserentriestorevive'] = 'Nessun account utente da riattiavre';
$string['nouserstobeadded'] = 'Nessun dato utente da aggiungere';
$string['ntlmsso_attempting'] = 'Esecuzione di Single Sign On via NTLM ...';
$string['ntlmsso_failed'] = 'Auto-login fallito. Provare la normale pagina di login ...';
$string['ntlmsso_isdisabled'] = 'Il SSO via NTLM non è abilitato';
$string['ntlmsso_unknowntype'] = 'Tipo di ntlmsso sconosciuto!';
$string['pagedresultsnotsupp'] = 'I paged result LDAP non sono supportati (manca il supporto PHP oppure hai configurato Moodle per usare il protocollo LDAP versione 2 oppure Moodle non può contatare il server LDAP per verificare il supporto ai paged result)';
$string['pagesize'] = 'Accertati che il valore impostato sia minore della dimensione del result set (il numero massimo di record forniti con una singola query) del tuo serevr LDAP';
$string['pagesize_key'] = 'Dimensione pagina';
$string['pluginname'] = 'Server LDAP';
$string['pluginnotenabled'] = 'Plugin non abilitato!';
$string['privacy:metadata'] = 'Il plugin di autenticazione "Server LDAP" non memorizza dati personali.';
$string['renamingnotallowed'] = 'In LDAP non è consentito di rinominare gli utenti';
$string['rootdseerror'] = 'Si è verificato un errore durante la query del rootDSE in Active Directory';
$string['start_tls'] = 'Utilizza la porta LDAP standard 389 con crittografia TLS';
$string['start_tls_key'] = 'Usa TLS';
$string['syncroles'] = 'Sincronizzazione ruoli di sistema da LDAP';
$string['synctask'] = 'Sincronizzazione utenti LDAP';
$string['systemrolemapping'] = 'Mappatura ruoli di sistema';
$string['updatepasserror'] = 'Errore in user_update_password(). Error code: {$a->errno}; Error string: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Si è verificato un errore in user_update_password() durante la lettura della data di scadenza della password. Codice errore: {$a->errno}; messagio di errore: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Errore in user_update_password() durante la modifica della data di scadenza e/o gracelogin. Error code: {$a->errno}; Error string: {$a->errstring}';
$string['updateremfail'] = 'Errore durante l\'aggiornamento del record LDAP. Error code: {$a->errno}; Error string: {$a->errstring}<br/>Key ({$a->key}) - valore moodle precedente: \'{$a->ouvalue}\' nuovo valore: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Errore durante l\'aggiornamento LDAP con il campo ambiguo {$a->key}; valore moodle precedente: \'{$a->ouvalue}\' nuovo valore: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'L\'utente non è stato trovato durante l\'aggiornamento dei dati esterni. Dettagli: search base: \'{$a->userdn}\'; search filter: \'(objectClass=*)\'; search attributes: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() non supporta il tipo di utente scelto: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() non supporta il tipo di utente scelto: {$a}';
$string['useracctctrlerror'] = 'Errore durante la ricezione di userAccountControl per{$a}';
$string['userentriestoadd'] = 'Account da aggiungere: {$a}';
$string['userentriestoremove'] = 'Account da rimuovere: {$a}';
$string['userentriestorevive'] = 'Account da riattivare: {$a}';
$string['userentriestoupdate'] = 'Account da aggiornare: {$a}';
$string['usernotfound'] = 'Account non trovato in LDAP';
