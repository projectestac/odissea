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
 * Strings for component 'tool_oauth2', language 'it', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Sono consapevole che disabilitare la verifica email rappresenta un problema di sicurezza.';
$string['acceptrisk_help'] = 'Disattivare la verifica dell\'e-mail può consentire a un utente di autenticarsi come un altro utente.';
$string['authconfirm'] = 'L\'azione garantirà all\'account autenticato un accesso permanente a Moodle via API. L\'uso deve essere inteso come account di sistema per la gestione di file il cui proprietario è Moodle.';
$string['authconnected'] = 'L\'account di sistema è ora collegato per l\'accesso offline.';
$string['authnotconnected'] = 'L\'account di sistema non è stato collegato per l\'accesso offline.';
$string['configured'] = 'Configurato';
$string['configuredstatus'] = 'Configurato';
$string['connectsystemaccount'] = 'Collega ad un account di sistema';
$string['createfromtemplate'] = 'Crea un servizio OAuth 2 da un modello';
$string['createfromtemplatedesc'] = 'Nell\'elenco sottostante è possibile selezionare un modello di servizio OAuth 2 con configurazione valida per i tipi di servizio conosciuti. Tramite la selezione del modello sarà creato un servizio OAuth 2 con i corretti endpoint e con i parametri necessari all\'autenticazione, tuttavia prima di utilizzare il servizio sarà comunque necessario inserire il client ID ed il client secret.';
$string['createnewendpoint'] = 'Crea endpoint per l\'issuer "{$a}"';
$string['createnewfacebookissuer'] = 'Crea servizio Facebook';
$string['createnewgoogleissuer'] = 'Crea servizio Google';
$string['createnewissuer'] = 'Crea servizio personalizzato';
$string['createnewmicrosoftissuer'] = 'Crea servizio Microsoft';
$string['createnewnextcloudissuer'] = 'Crea servizio Nextcloud';
$string['createnewservice'] = 'Crea nuovo servizio:';
$string['createnewuserfieldmapping'] = 'Crea mappatura di campo per l\'issuer "{$a}"';
$string['custom_service'] = 'Personalizzato';
$string['deleteconfirm'] = 'Sei sicuro di eliminare l\'identity issuer "{$a}"? Tutti i plugin che utilizzano questo issuer smetteranno di funzionare.';
$string['deleteendpointconfirm'] = 'Sei sicuro di eliminare l\'endpoint "{$a->endpoint}" dell\'issuer "{$a->issuer}"? Tutti i plugin che utilizzano questo endpoint smetteranno di funzionare.';
$string['deleteuserfieldmappingconfirm'] = 'Sei sicuro di eliminare la mappatura di campo dell\'issuer "{$a}"?';
$string['discovered'] = 'L\'individuazione del servizio è andata a buon fine.';
$string['discovered_help'] = 'L\'individuazione significa che gli endpoint OAuth 2 possono essere trovati automaticamente a partire dall\'URL base del servizio OAuth. Non tutti i servizi richiedono di essere "individuati", in assenza tuttavia gli endpoint e la mappatura dei dati utenti dovrà essere inserita manualmente.';
$string['discoverystatus'] = 'Individuazione';
$string['editendpoint'] = 'Modifica endpoint: {$a->endpoint} dell\'issuer {$a->issuer}';
$string['editendpoints'] = 'Configura endpoint';
$string['editissuer'] = 'Modifica identity issuer: {$a}';
$string['edituserfieldmapping'] = 'Modifica mappatura dei campi dell\'issuer {$a}';
$string['edituserfieldmappings'] = 'Configurazione mappatura dei campi utente';
$string['endpointdeleted'] = 'L\'endpoint è stato eliminato';
$string['endpointname'] = 'Nome';
$string['endpointname_help'] = 'Chiave da utilizzare per la ricerca dell\'endpoint. Deve avere il suffisso "_endpoint".';
$string['endpointsforissuer'] = 'Endpoint dell\'issuer {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'L\'URL dell\'endpoint. È obbligatorio l\'utilizzo del protocollo https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Domini di autenticazione';
$string['issueralloweddomains_help'] = 'Un elenco separato da virgola contenete i domini dai quali consentire l\'autenticazione.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'URL base del del servizio';
$string['issuerbaseurl_help'] = 'URL base da utilizzare per accedere del servizio.';
$string['issuerclientid'] = 'Client ID';
$string['issuerclientid_help'] = 'Il client ID OAuth dell\'issuer.';
$string['issuerclientsecret'] = 'Client secret';
$string['issuerclientsecret_help'] = 'Il secret OAuth dell\'issuer.';
$string['issuerdeleted'] = 'L\'identity issuer è stato eliminato';
$string['issuerdisabled'] = 'L\'identity issuer è stato disabilitato';
$string['issuerenabled'] = 'L\'identity issuer è stato abilitato';
$string['issuerimage'] = 'URL del logo';
$string['issuerimage_help'] = 'URL dell\'immagine contenete il logo dell\'issuer. Potrà essere visualizzata nella pagina di autenticazione.';
$string['issuerloginpagename'] = 'Nome visualizzato nella pagina di autenticazione';
$string['issuerloginpagename_help'] = 'Nella pagina di autenticazione sarà visualizzato il nome qui impostato al posto del nome servizio';
$string['issuerloginparams'] = 'Parametri aggiuntivi da includere in una richiesta di autenticazione.';
$string['issuerloginparams_help'] = 'Alcuni sistemi richiedono parametri aggiuntivi per poter leggere il profilo di base di un utente.';
$string['issuerloginparamsoffline'] = 'Parametri aggiuntivi da includere in una richiesta di autenticazione offline.';
$string['issuerloginparamsoffline_help'] = 'Ciascun sistema Oauth supporta metodi diversi per l\'accesso offline. Ad esempio, Google richiede i seguenti parametri:  "access_type=offline&prompt=consent". Tali parametri devono essere nel formato URL query.';
$string['issuerloginscopes'] = 'Ambiti inclusi in una richiesta di autenticazione.';
$string['issuerloginscopes_help'] = 'Per una richiesta di autenticazione, alcuni account di sistema richiedono ambiti aggiuntivi per poter leggere il profilo base di un utente. Gli ambiti standard per un sistema conforme ad OpenID Connect sono "openid profile email".';
$string['issuerloginscopesoffline'] = 'Ambiti inclusi in una richiesta di autenticazione per l\'accesso offline.';
$string['issuerloginscopesoffline_help'] = 'Ciascun sistema Oauth supporta metodi diversi per l\'accesso offline. Ad esempio, Microsoft richiede un\'ambito aggiuntivo per "offline_access".';
$string['issuername'] = 'Nome';
$string['issuername_help'] = 'Nome dell\'identity issuer. Potrà essere visualizzato nella pagina di autenticazione.';
$string['issuerrequireconfirmation'] = 'Richiedi verifica email';
$string['issuerrequireconfirmation_help'] = 'Gli utenti dovranno verificare la propria email prima di potersi autenticare con OAuth, La verifica sarà richiesta sia quando si crea un nuovo account, sia quando si collega un account esistente con una account OAuth con mail corrispondente.';
$string['issuers'] = 'Issuer';
$string['issuersetup'] = 'Istruzioni dettagliate per configurare i servizi comuni Oauth 2';
$string['issuersetuptype'] = 'Istruzioni dettagliate per configurare il formitore Oauth 2 {$a}';
$string['issuershowonloginpage'] = 'Visualizza nella pagina di autenticazione';
$string['issuershowonloginpage_help'] = 'Se è abilitato il plugin di autenticazione OAuth2, l\'identity issuer sarà elencato nella pagina di autenticazione e gli  utenti potranno autenticarsi con l\'account dell\'issuer.';
$string['issuersservicesallow'] = 'Consenti il servizio';
$string['issuersservicesnotallow'] = 'Non consentire il servizio';
$string['issuerusedforinternal'] = 'Servizi interni';
$string['issuerusedforlogin'] = 'Autenticazione';
$string['issuerusein'] = 'Utilizzo del servizio';
$string['issuerusein_help'] = 'I servizi OAuth2 possono essere utilizzati per servizi interni, nella pagina di autenticazione, oppure in entrambi i casi.';
$string['issueruseineverywhere'] = 'Pagina di autenticazione e servizi interni';
$string['issueruseininternalonly'] = 'Solo servizi interni';
$string['issueruseinloginonly'] = 'Solo pagina di autenticazione';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Visualizza nella pagina di autenticazione come';
$string['loginissuer'] = 'Autenticazione consentita';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Non configurato';
$string['notdiscovered'] = 'L\'individuazione del servizio non è andata a buon fine.';
$string['notloginissuer'] = 'Autenticazione non consentita';
$string['pluginname'] = 'Servizi OAuth 2';
$string['privacy:metadata'] = 'Il plugin "Servizi OAuth 2" non memorizza dati personali.';
$string['savechanges'] = 'Salva modifiche';
$string['serviceshelp'] = 'Istruzioni per l\'impostazione del service provider';
$string['systemaccountconnected'] = 'Account di sistema collegato';
$string['systemaccountconnected_help'] = 'Gli account di sistema sono utilizzati per fornire funzionalità avanzate ai plugin e sono necessari per i plugin di autenticazione. Da notare che altri plugin che utilizzino i servizi Oauth possono presentare un numero di funzionalità ridotte se non è collegato un account di sistema. Ad esempio i repository non potranno sfruttare la funzionalità "collegamenti sotto controllo" in assenza di un account di sistema.';
$string['systemaccountnotconnected'] = 'Account di sistema non collegato';
$string['systemauthstatus'] = 'Collegato ad un account di sistema';
$string['usebasicauth'] = 'Autentica richieste di token tramite header HTTP';
$string['usebasicauth_help'] = 'Quando si inviano richieste di rinnovo del token, sarà utilizzato lo schema HTTP Basic authentication. Lo standard Oauth2 raccomanda questo schema ma alcuni issuer non lo supportano.';
$string['userfieldexternalfield'] = 'Nome del campo esterno';
$string['userfieldexternalfield_error'] = 'Questo campo non può contenere HTML.';
$string['userfieldexternalfield_help'] = 'Nome del campo fornito dal sistema esterno Oauth';
$string['userfieldinternalfield'] = 'Nome dal campo interno';
$string['userfieldinternalfield_help'] = 'Nome del campo Moodle dove mappare il campo esterno';
$string['userfieldmappingdeleted'] = 'La mappatura del campo utente è stata eliminata';
$string['userfieldmappingsforissuer'] = 'Mappature dei campi dell\'issuer {$a}';
