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
 * Strings for component 'auth_emailadmin', language 'it', version '4.1'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Gentile amministratore Moodle,

TI è stata sottoposta una richiesta di apertura di un account dal sito \'{$a->sitename}\' con i seguenti dati:

Esempio di campo utente specifico:
utente -> cognome: {$a->lastname}

Tutti i campi personalizzati:
All custom fields:
{$a->customfields}

Tutti i campi utente + campi personalizzati:
{$a->userdata}

Per confermare il nuovo account, vai a questo indirizzo web:

{$a-> link}

Nella maggior parte dei programmi di posta elettronica, questo dovrebbe apparire come un link blu su cui puoi semplicemente fare clic. Se non dovesse funzionare, effettua un taglia e incolla nella riga dell\'indirizzo nella del browser web.

Puoi anche confermare gli account da Moodle andando su
Amministrazione del sito -> Utenti';
$string['auth_emailadminconfirmationsubject'] = '{$a}: conferma account';
$string['auth_emailadminconfirmsent'] = '<P>
Il tuo account è stato registrato ed è in attesa di conferma da parte dell\'amministratore. Riceverai una conferma o sarai contattato per ulteriori chiarimenti. </p>';
$string['auth_emailadmindescription'] = '<p> La creazione di account via e-mail con conferma dell\'amministratore consente all\'utente di creare il proprio account tramite un pulsante "Crea nuovo account", disponibile nella pagina di autenticazione. Gli amministratori del sito riceveranno un\'e-mail contenente un collegamento sicuro a una pagina dove potranno confermare l\'account. Le autenticazioni successivi verificheranno solo il nome utente e la password rispetto ai valori memorizzati nel database di Moodle. </p> <p> Nota: oltre ad abilitare il plug-in, è necessario selezionare l\'auto-registrazione basata su e-mail con conferma dell\'amministratore anche menu a discesa nella pagina "Gestione autenticazione". </p>';
$string['auth_emailadminnoadmin'] = 'In base alla strategia di notifica non è stato trovato nessun amministratore. Controllare la configurazione di auth_emailadmin.';
$string['auth_emailadminnoemail'] = 'Il tentativo di inviarti una mail non è andato a buon fine.';
$string['auth_emailadminnotif_failed'] = 'Non è stato possibile inviare la notifica di registrazione a:';
$string['auth_emailadminnotif_strategy'] = 'Imposta la strategia di invio delle le notifiche di registrazione. Le opzioni disponibili sono l\'amministratore primario, tutti gli amministratori oppure un amministratore specifico.';
$string['auth_emailadminnotif_strategy_all'] = 'Tutti gli amministratori';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Tutti gli amministratori e gli utenti con privilegi di aggiornamento degli utenti';
$string['auth_emailadminnotif_strategy_first'] = 'Amministratore primario';
$string['auth_emailadminnotif_strategy_key'] = 'Strategia di notifica:';
$string['auth_emailadminrecaptcha'] = 'Aggiunge alla pagina di registrazione un elemento di conferma visivo / audio  per gli utenti che si creano un account in autonomia. La funzionalità proteggerà il sito dagli spammer contribuendo al tempo stesso ad una causa utile. Consultare http://www.google.com/recaptcha/learnmore per maggiori dettagli. <br /> <em> È richiesta l\'estensione PHP cURL. </em>';
$string['auth_emailadminrecaptcha_key'] = 'Abilita reCAPTCHA';
$string['auth_emailadminsettings'] = 'Impostazioni';
$string['auth_emailadminuserconfirmation'] = 'Gentile {$ a-> nome},

Benvenuto su (La mia organizzazione)! Il tuo account è stato approvato. Se non l\'hai già fatto, ti preghiamo di comunicarci come hai scoperto (La mia organizzazione).

Per gli account degli studenti, comunicaci il progetto a cui desideri partecipare e creeremo il tuo account insegnante. Le informazioni per la creazione di account degli studenti sono disponibili all\'indirizzo http://www.my.org/student-accounts <a href=http://www.my.org/student-accounts> qui </a>.

Il nome deve essere il "nome" degli studenti e la "prima iniziale del cognome". Il cognome degli studenti sarà il nome della scuola. Le password devono contenere almeno 8 caratteri.

Siamo lieti che tu ti sia unito a noi e speriamo di vedere te e i tuoi studenti partecipare ad alcuni dei nostri progetti. Ora sei membro di una comunità in rapida crescita di educatori e studenti che utilizzano (La mia organizzazione) per condividere progetti, lavoro e conoscenze. Se hai bisogno di aiuto, non esitare a scriverci a myorg@gmail.com <a href=mailto:myorg@gmail.com> qui </a>. Cercheremo di rispondere a qualsiasi domanda, commento o dubbio riguardante (La mia organizzazione) con risorse, servizi e strumenti di Google. Consulta le nostre pagine Web all\'indirizzo http://www.my.org <a href=http://www.my.org/> qui </a>

* * *

Che cos\'è (La mia organizzazione)?

(La mia organizzazione) è un ambiente collaborativo di facile utilizzo basato su Internet che consente agli educatori di sviluppare e gestire progetti curricolari basati sul Web, condividere informazioni e lavorare insieme a livello internazionale. (La mia organizzazione) fornisce una varietà di strumenti e gadget di Google tra cui messaggistica integrata, conferenze e calendari, per supportare la collaborazione tra insegnanti e studenti all\'interno di (La mia organizzazione).

(La mia organizzazione) accoglie con favore i tuoi progetti e non vede l\'ora di condividere una ricca varietà di progetti e attività con gli studenti partecipanti. Quando accedi, viene visualizzato un elenco di categorie popolari. Fai clic su una delle categorie per sfogliare i progetti in essa specificati. Mentre li sfogli, questi progetti (fai clic sui titoli) potrebbero aiutarti a generare un\'idea o due, da utilizzare nello sviluppo di un tuo progetto in (La mia organizzazione) oppure potrebbero aiutarti a identificare i progetti in cui potresti voler collaborare con altri insegnanti e i loro studenti.

* * *

Poiché (La mia organizzazione) è un progetto guidato e gestito  da  volontari, vorremmo che tu considerassi la creazione di un progetto per  (La mia organizzazione) o del volontariato per aiutare in uno di questi. Se decidi di voler creare un progetto o fare volontariato per aiutare o supportare altri progetti, ti preghiamo di inviarci un\'e-mail all\'indirizzo myorg@gmail.com <a href=mailto:myorg@gmail.com> qui </a>. I leader e i volontari (della mia organizzazione) sono qui per supportare le tue esigenze.

Ricorda, il supporto online per tutti i partecipanti di (La mia organizzazione) è fornito da volontari di (La mia organizzazione). Per favore, prendi ciò che impari da noi e aiuta anche altri insegnanti a imparare! Non vediamo l\'ora di lavorare con te e vedere i tuoi nuovi progetti!


Grazie,

Il mio nome, direttore


-
(La mia organizzazione) Team
<a href=http://www.my.org/> http://www.my.org </a>
<a href=mailto:myorg@gmail.com> myorg@gmail.com </a>
<a href=tel:123%20555%205555> 123 555 5555 </a>';
$string['pluginname'] = 'Creazione di account via e-mail con conferma dell\'amministratore';
