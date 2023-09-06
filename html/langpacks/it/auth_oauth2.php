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
 * Strings for component 'auth_oauth2', language 'it', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Un utente con questo username è già esistente. Se è un tuo account, accedi digitando i tuoi username e password e aggiungilo come autenticazione collegata nella pagina delle preferenze.';
$string['alreadylinked'] = 'L\'account esterno è già collegato ad un account del sito';
$string['auth_oauth2description'] = 'Autenticazione basata sullo standard OAuth 2';
$string['auth_oauth2settings'] = 'Impostazioni autenticazione OAuth 2';
$string['confirmaccountemail'] = 'Gentile {$a->fullname},

è stata richiesta la creazione di un nuovo account su \'{$a->sitename}\' che utilizza il tuo indirizzo di posta elettronica.

Per confermare l\'account, devi cliccare sul link seguente:

{$a->link}

Nella maggior parte dei programmi di posta il link apparirà colorato di blu ed è sufficiente cliccarlo. Se il link non dovesse essere attivo, copia e incolla il link nella barra dell\'indirizzo del browser e premi il tasto invio.

Se hai bisogno di aiuto contatta l\'amministratore del sito,
{$a->admin}';
$string['confirmaccountemailsubject'] = '{$a}: conferma account';
$string['confirmationinvalid'] = 'Il link di conferma è scaduto o non è valido. Per generare una nuova email di conferma devi ricominciare daccapo il processo di autenticazione.';
$string['confirmationpending'] = 'Account in attesa di conferma email';
$string['confirmlinkedloginemail'] = 'Gentile {$a->fullname},

è stato richiesto di collegare l\'autenticazione di \'{$a->issuername}\' {$a->linkedemail} con il tuo account su {$a->sitename}\' utilizzando il tuo indirizzo di posta elettronica.

Per confermare la richiesta e collegare le autenticazioni, devi cliccare sul link seguente:

{$a->link}

Nella maggior parte dei programmi di posta il link apparirà colorato di blu ed è sufficiente cliccarlo. Se il link non dovesse essere attivo, copia e incolla il link nella barra dell\'indirizzo del browser e premi il tasto invio.

Se hai bisogno di aiuto contatta l\'amministratore del sito,
{$a->admin}

Se non hai richiesto tu il collegamento, allora è possibile che qualcuno stia tentando di compromettere il tuo account. Per favore contatta subito l\'amministratore del sito.';
$string['confirmlinkedloginemailsubject'] = '{$a}: Conferma collegamento autenticazioni';
$string['createaccountswarning'] = 'Plugin di autenticazione che consente di creare account sul sito. È possibile abilitare l\'impostazione "Evita la creazione di account all\'atto dell\'autenticazione" quando si utilizza il plugin';
$string['createnewlinkedlogin'] = 'Collega un nuovo account ({$a})';
$string['emailconfirmlink'] = 'Collega i tuoi account';
$string['emailconfirmlinksent'] = '<p>È stato trovato un account con questo indirizzo email che non è stato ancora collegato.</p>
   <p>Gli account devono essere collegati prima che tu possa autenticarti.</p>
   <p>Una mail dovrebbe essere stata spedita al tuo indirizzo <b>{$a}</b>.</p>
   <p>Contiene istruzioni per collegare i tuoi account.</p>
   <p>Se incontri difficoltà, contatta l\'amministratore del sito.</p>';
$string['emailpasswordchangeinfo'] = 'Gentile {$a->firstname},

è stata richiesta una nuova password per l\'account \'{$a->username}\' su \'{$a->sitename}\'.

Purtroppo la password non può essere reimpostata perché per autenticati utilizzi un account di un altro sito.

Per favore autenticati come in precedenza utilizzando il collegamento presente nella pagina di autenticazione.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Informazioni sul cambio password';
$string['info'] = 'Account esterno';
$string['issuer'] = 'Servizio OAuth 2';
$string['issuernologin'] = 'Questo issuer non può essere utilizzato per autenticarsi.';
$string['key'] = 'Chiave';
$string['linkedlogins'] = 'Autenticazioni collegate';
$string['linkedloginshelp'] = 'Aiuto su Autenticazioni collegate';
$string['loggedin'] = 'Utente autenticato correttamente col provider.';
$string['loginerror_authenticationfailed'] = 'Il processo di autenticazione non è andato a buon fine.';
$string['loginerror_cannotcreateaccounts'] = 'Non è stato possibile individuare un account con il tuo indirizzo email';
$string['loginerror_invaliddomain'] = 'L\'indirizzo email non è autorizzato.';
$string['loginerror_nouserinfo'] = 'Non sono state ricevute informazioni sull\'utente. Probabilmente il servizio OAuth2 non è configurato correttamente.';
$string['loginerror_userincomplete'] = 'Non sono stati ricevuti lo username e l\'email dell\'utente. Probabilmente il servizio OAuth2 non è configurato correttamente.';
$string['noconfiguredidps'] = 'Non ci sono provider Oauth2 configurati.';
$string['noissuersavailable'] = 'Nessun servizio OAuth 2 tra quelli configurati consente di collegare account per l\'autenticazione.';
$string['notenabled'] = 'Siamo spiacenti, il plugin di autenticazione OAuth 2 non è abilitato';
$string['notloggedindebug'] = 'L\'autenticazione non è andata a buon fine. Motivo: {$a}';
$string['notwhileloggedinas'] = 'Non è possibile gestire autenticazioni collegate quando si è collegati come altro utente.';
$string['oauth2:managelinkedlogins'] = 'Gestire proprie autenticazioni collegate';
$string['plugindescription'] = 'Il plugin di autenticazione visualizza nella pagina di login un elenco di identity provider. L\'utente potrà selezionare l\'identity provider opportuno per autenticarsi con le proprie credenziali OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autenticazione OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Il plugin è collegato al sottosistema di autenticazione.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Token di conferma';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Marca temporale che indica la scadenza del token di conferma.';
$string['privacy:metadata:auth_oauth2:email'] = 'Email esterna che rimanda all\'account.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID OAuth 2 fornito per l\'autenticazione.';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Account OAuth 2 collegati all\'account Moodle dell\'utente.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Marca temporale che indica quando l\'account dell\'utente è stato collegato al login OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Marca temporale che indica quando è stato modificato il record.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID dell\'account utente a cui è collegato il login OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID dell\'utente che ha modificato l\'account';
$string['privacy:metadata:auth_oauth2:username'] = 'Username esterno che rimanda all\'account.';
$string['testidplogin'] = 'Test autenticazione con:';
$string['userinfo'] = 'Dati utenti provenienti dal provider';
$string['value'] = 'Valore';
