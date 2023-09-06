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
 * Strings for component 'tool_messageinbound', language 'it', version '4.1'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nome classe';
$string['component'] = 'Componente';
$string['configmessageinboundhost'] = 'L\'indirizzo del server dove Moodle controllerà la presenza di email in entrata. Per indicare porte non standard è possibile usare la sintassi [server]:[port], ad esempio "mail.example.com:993". Se il campo è vuoto Moodle userà la porta standard in accordo al mail server specificato.';
$string['defaultexpiration'] = 'Periodo di default di scadenza dell\'indirizzo';
$string['defaultexpiration_help'] = 'Quando un gestore genera un indirizzo email, è possibile cionfigfurare il periodo trascorso il quale l\'indirizzo scadrà e non sarà più valido. Si raccomanda di impostare il periodo di scadenza.';
$string['description'] = 'Descrizione';
$string['domain'] = 'Dominio email';
$string['edit'] = 'Modifica';
$string['edithandler'] = 'Modifica impostazioni per il gestore {$a}';
$string['editinghandler'] = 'Modifica di {$a}';
$string['enabled'] = 'Abilitato';
$string['fixedenabled_help'] = 'Non è possibile modificare lo stato di questo gestore. È possibile che il gestore sia utilizzato da altri gestori.';
$string['fixedvalidateaddress'] = 'Verifica indirizzo del mittente';
$string['fixedvalidateaddress_help'] = 'Non è possibile modificare la verifica del mittente di questo gestore. È possibile che il gestore richieda questa specifica impostazione.';
$string['handlerdisabled'] = 'Il gestore email che hai tentato di contattare è stato disabilitato. Non è possibile elaborare il messaggio.';
$string['incomingmailconfiguration'] = 'Configurazione email in entrata';
$string['incomingmailserversettings'] = 'Impostazioni server email in entrata';
$string['incomingmailserversettings_desc'] = 'Moodle può collegarsi ad un server IMAP correttamente configurato. Le impostazioni del server IMAP possono essere specificate sotto.';
$string['invalid_recipient_handler'] = 'Se viene ricevuto un messaggio valido senza poter autenticare il mittente, il messaggio viene conservato nel server di mail e l\'utente contattato tramite l\'indirizzo email presente nel suo profilo. L\'utente avrà la possibilità di di rispondere confermando l\'autenticità del proprio messaggio.  Le risposte sono elaborate da questo gestore.

Non è possibile disabilitare  la verifica del mittente di questo gestore poiché l\'utente potrebbe rispondere da un indirizzo email diverso in base alla configurazione del client di posta utilizzato.';
$string['invalid_recipient_handler_name'] = 'Mittente non valido';
$string['invalidrecipientdescription'] = 'Non è stato possibile verificare il messaggio "{$a->subject}" poiché l\'indirizzo del mittente è diverso da quello presente nel tuo profilo. Per verificare il tuo messaggio devi rispondere a questo messaggio.';
$string['invalidrecipientdescriptionhtml'] = 'Non è stato possibile verificare il messaggio "{$a->subject}" poiché l\'indirizzo del mittente è diverso da quello presente nel tuo profilo. Per verificare il tuo messaggio devi rispondere a questo messaggio.';
$string['invalidrecipientfinal'] = 'Non è stato possibile autenticare il messaggio "{$a->subject}". Per favore controlla che stai inviando messaggi dalla stessa email presente nel tuo profilo.';
$string['mailbox'] = 'Nome casella email';
$string['mailboxconfiguration'] = 'Configurazione casella email';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Impostazioni email';
$string['message_handlers'] = 'Gestori messaggi';
$string['messageinbound'] = 'Messaggi in arrivo';
$string['messageinboundenabled'] = 'Abilita elaborazione email in entrata';
$string['messageinboundenabled_desc'] = 'Affinché i messaggi vengano inviati con le appropriate informazioni, deve essere abilitata l\'elaborazione email in entrata.';
$string['messageinboundgeneralconfiguration'] = 'Configurazione generale';
$string['messageinboundgeneralconfiguration_desc'] = 'L\'elaborazione dei messaggi in arrivo consente di ricevere ed elaborare email all\'interno di Moodle.Tale funzionalità può essere usata ad esempio per intervenire nei forum per email o aggiungere file nei File personali.';
$string['messageinboundhost'] = 'Server email in entrata';
$string['messageinboundhostpass'] = 'Password';
$string['messageinboundhostpass_desc'] = 'La password per autenticarsi sul proprio servizio email';
$string['messageinboundhostssl'] = 'Utilizza SSL';
$string['messageinboundhostssl_desc'] = 'Alcuni mail server utilizzano livelli di sicurezza ulteriori crittografando la comunicazione con Moodle. Si raccomanda di utilizzare la crittografia SSL.';
$string['messageinboundhosttype'] = 'Tipo server';
$string['messageinboundhostuser'] = 'Username';
$string['messageinboundhostuser_desc'] = 'Lo username per autenticarsi sul proprio servizio email';
$string['messageinboundmailboxconfiguration_desc'] = 'Quando i messaggi vengono inviati, viene utilizzato il formato address+data@example.com. Affinché Moodle possa generare gli indirizzi in modo affidabile, è necessario specificare separatamente il nome presente prima del carattere @ e il dominio presente dopo il carattere @. Ad esempio per configurare la casella citata in precedenza andrebbe specificato "addresss" come nome della casella email e "example.com" come domino email.';
$string['messageprocessingerror'] = 'Hai inviato un\'email che ha per oggetto "{$a->subject}", purtroppo Moodle non è riuscito ad elaborarla.

Di seguito i dettagli sull\'errore.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Hai inviato un\'email che ha per oggetto "{$a->subject}", purtroppo Moodle non è riuscito ad elaborarla.</p>
<p>Di seguito i dettagli sull\'errore.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Non è stato possibile elaborare l\'email "{$a->subject}". L\'errore è il seguente: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'Non è stato possibile elaborare l\'email "{$a->subject}". Per maggiori informazioni contattare l\'amministratore del sito.';
$string['messageprocessingsuccess'] = '{$a->plain}

Se non desideri ricevere queste notifiche, puoi modificare le preferenze della messaggistica aprendo {$a->messagepreferencesurl} con il browser.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Se non desideri ricevere queste notifiche, puoi modificare le preferenze della messaggistica aprendo {$a->messagepreferencesurl} con il browser.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Messaggi di conferma del mittente dei messaggi in ingresso';
$string['messageprovider:messageprocessingerror'] = 'Notifiche sulla mancata elaborazione di messaggi in arrivo';
$string['messageprovider:messageprocessingsuccess'] = 'Conferme della corretta elaborazione dei messaggi';
$string['name'] = 'Nome';
$string['noencryption'] = 'Off - Senza crittografia';
$string['noexpiry'] = 'Senza scadenza';
$string['oldmessagenotfound'] = 'Hai tentato di verificare manualmente un messaggio ma il messaggio non è stato trovato. È possibile che sia già stato elaborato o che sia scaduto.';
$string['oneday'] = 'Un giorno';
$string['onehour'] = 'Un\'ora';
$string['oneweek'] = 'Una settimana';
$string['oneyear'] = 'Un anno';
$string['pluginname'] = 'Configurazione messaggi in arrivo';
$string['privacy:metadata:coreuserkey'] = 'Chiave dell\'utente per certificare l\'email ricevuta.';
$string['privacy:metadata:messagelist'] = 'Elenco degli identificativi dei messaggi che hanno fallito la certificazione e necessitano di ulteriori autorizzazioni.';
$string['privacy:metadata:messagelist:address'] = 'Indirizzo a cui è stata inviata l\'email.';
$string['privacy:metadata:messagelist:messageid'] = 'ID del messaggio.';
$string['privacy:metadata:messagelist:timecreated'] = 'Orario di creazione del record.';
$string['privacy:metadata:messagelist:userid'] = 'ID dell\'utente che deve approvare il messaggio.';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Verifica indirizzo del mittente';
$string['ssl'] = 'SSL (Auto-detect versione SSL)';
$string['sslv2'] = 'SSLv2 (Forza SSL Versione 2)';
$string['sslv3'] = 'SSLv3 (Forza SSL Versione 3)';
$string['taskcleanup'] = 'Pulizia email in entrata non verificate';
$string['taskpickup'] = 'Prelievo email in arrivo';
$string['tls'] = 'TLS (TLS; avviato tramite negoziazione protocol-level su canale in chiaro; modalità CONSIGLIATA per avviare una connessione sicura.)';
$string['tlsv1'] = 'TLSv1 (connessione diretta TLS versione 1.x al server)';
$string['validateaddress'] = 'Verifica indirizzo del mittente';
$string['validateaddress_help'] = 'Quando Moodle riceverà un\'email da parte di un utente, validerà il messaggio verificando la corrispondenza dell\'email del mittente con quella presente nel profilo utente.

In mancanza di corrispondenza, Moodle invierà un\'email all\'utente chiedendogli di confermare se è stato lui ad inviare l\'email.

Se l\'impostazione è disabilitata, gli indirizzi email dei mittenti non saranno verificati.';
