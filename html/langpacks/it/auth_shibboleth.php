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
 * Strings for component 'auth_shibboleth', language 'it', version '4.1'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logo associato al metodo di autenticazione';
$string['auth_shib_auth_logo_description'] = 'Per facilitare gli utenti, è possibile associare un logo al metodo di  autenticazione Shibboleth, come ad esempio  <tt>SWITCHaai Login</tt> or <tt>InCommon Login</tt>.';
$string['auth_shib_auth_method'] = 'Nome del metodo di autenticazione';
$string['auth_shib_auth_method_description'] = 'Inserite un nome familiare ai vostri utenti per identificare il metodo di autenticazione Shibboleth. Un nome adatto potrebbe essere il nome della vostra federazione Shibboleth, ad esempio <tt>SWITCHaai Login</tt> oppure <tt>InCommon Login</tt>.';
$string['auth_shib_changepasswordurl'] = 'URL per cambiare password';
$string['auth_shib_contact_administrator'] = 'Qualora tu non appartenga alle organizzazioni fornite e hai bisogno di accedere ai corsi presenti su questo server, per favore contatta <a href="mailto:{$a}">l\'Amministratore Moodle</a>.';
$string['auth_shib_convert_data'] = 'API per la modifica dei dati';
$string['auth_shib_convert_data_description'] = 'È possibile utilizzare queste API per modificare ulteriormente i dati forniti da Shibboleth. Per maggiori informazioni: <a href="{$a}">README</a>';
$string['auth_shib_convert_data_filepath_warning'] = 'Non è possibile utilizzare un file che si trova all\'interno della cartella dei dati del sito  ($CFG->dataroot) come API di modifica dei dati.';
$string['auth_shib_convert_data_warning'] = 'Il file non esiste o non è leggibile dal processo del webserver!';
$string['auth_shib_idp_list'] = 'Identity provider';
$string['auth_shib_idp_list_description'] = 'Inserite un elenco di Identity Provider entityID tra cui l\'utente potrà scegliere nella pagina di login.<br />Su ogni riga dovrà essere presente una coppia separata da virgole composta da entityID dell\'IdP (verifica il medatadata file di Shibboleth) e dal Nome dell\'IdP (il nome comparirà nel menù a discesa).<br />È possibile aggiungere un terzo parametro opzionale dove specificare la posizione del session initiator di Shibboleth utile nel caso in cui l\'installazione di Moodle faccia parte di una multi fedrazione.';
$string['auth_shib_instructions'] = 'Utilizzare <a href="{$a}">Shibboleth login</a> per avere accesso tramite Shibboleth, se l\'organizzazione lo supporta<br />Altrimenti, utilizzare il modulo di login standard visualizzato.';
$string['auth_shib_instructions_help'] = 'È possibile fornire  agli utenti istruzioni riguardanti Shibboleth, che verranno visualizzate nella pagina di login nella sezione delle istruzioni.
È opportuno includere un collegamento a "<b>{$a}</b>"  in modo che gli utenti Shibboleth possano autenticarsi con maggiore facilità.';
$string['auth_shib_instructions_key'] = 'Istruzioni per il login';
$string['auth_shib_integrated_wayf'] = 'Servizio Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'È possibile consentire a Moodle di usare i propri servizi WAYF al posto di quelli configurati per Shibboleth. In questo caso Moodle visualizzerà un menù a discesa dove l\'utente potrà scegliere il proprio Identity Provider.';
$string['auth_shib_logout_return_url'] = 'Logout return URL alternativa';
$string['auth_shib_logout_return_url_description'] = 'Inserite l\'URL dove gli utenti Shibboleth saranno indirizzati dopo il logout.<br />Se l\'URL non viene inserita, allora gli utenti saranno indirizzati alla URL dove Moodle indirizza gli utenti.';
$string['auth_shib_logout_url'] = 'Shibboleth Service Provider logout handler URL';
$string['auth_shib_logout_url_description'] = 'Inserite l\'URL del logout handler del Service Provider Shibboleth. In genere l\'URL è <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Se vuoi usare il servizio integrato WAYF, devi fornire una lista di elementi separati da virgola comprendenti Identity Provider entityIDs, i loro nomi e eventualmente un iniziatore di sessione.';
$string['auth_shib_only'] = 'Solo Shibboleth';
$string['auth_shib_only_description'] = 'Selezionate questa opzione se desiderate forzare l\'autenticazione Shibboleth.';
$string['auth_shib_username_description'] = 'Nome';
$string['auth_shibboleth_errormsg'] = 'Seleziona l\'organizzazione di cui sei membro!';
$string['auth_shibboleth_login'] = 'Login Shibboleth';
$string['auth_shibboleth_login_long'] = 'Login a Moodle via Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Login manuale';
$string['auth_shibboleth_select_member'] = 'Sono un membro di ...';
$string['auth_shibboleth_select_organization'] = 'Per l\'autenticazione via Shibboleth, seleziona l\'organizzazione di appartenenza dal menu a discesa:';
$string['auth_shibbolethdescription'] = 'Utilizzando questo metodo gli utenti vengono creati e autenticati utilizzando Shibboleth. Per i dettagli sulla impostazione: <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Il plugin di autenticazione "Shibboleth" non memorizza dati personali.';
$string['shib_invalid_account_error'] = 'Sembra che tu sia autenticato tramite Shibboleth ma Moodle non ha account validi corrispondenti al tuo username. Il tuo account potrebbe non esistere o essere stato sospeso.';
$string['shib_no_attributes_error'] = 'Si è verificato un problema durante il passaggio delle informazioni del tuo utente verso Moodle tramite Shibboleth ({$a}). Prova a effettuare il logout dal tuo Identity Provider, svuotare la cache o cambiare browser, quindi esegui nuovamente il login. Se il problema persiste, contatta l’amministratore del server.';
$string['shib_not_all_attributes_error'] = 'Moodle richiede alcuni attributi Shibboleth che nel tuo caso, non sono presenti. Gli attributi sono: {$a}<br />Per favore controlla il webmaster di questo server o dell\'Identity Provider.';
$string['shib_not_set_up_error'] = 'L\'autenticazione Shibboleth non sembra essere stata impostata correttamente perché nessuna variabile Shibboleth è presente nella pagina. Si prega di consultare il file a href="{$a}">README</a> per ulteriori istruzioni sulla configurazione della autenticazione Shibboleth oppure contattare il webmaster di questa installazione di Moodle.';
