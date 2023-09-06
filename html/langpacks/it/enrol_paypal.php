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
 * Strings for component 'enrol_paypal', language 'it', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Assegna ruolo';
$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'L\'indirizzo email del tuo account PayPal';
$string['cost'] = 'Costo di iscrizione';
$string['costerror'] = 'Il costo di iscrizione non è un numero';
$string['costorkey'] = 'Scegliere uno dei seguenti metodi di registrazione';
$string['currency'] = 'Valuta';
$string['defaultrole'] = 'Ruolo di default';
$string['defaultrole_desc'] = 'Il ruolo di default da assegnare a coloro che si iscrivono tramite PayPal';
$string['enrolenddate'] = 'Data di fine';
$string['enrolenddate_help'] = 'Gli utenti potranno essere iscritti solo entro la data impostata.';
$string['enrolenddaterror'] = 'La data di fine iscrizione non può essere precedente alla data di inizio';
$string['enrolperiod'] = 'Durata dell\'iscrizione';
$string['enrolperiod_desc'] = 'La durata di default dell\'iscrizione. Impostarla a zero per una durata di default dell\'iscrizione senza limite.';
$string['enrolperiod_help'] = 'La durata di default dell\'iscrizione, a partire dalla data di iscrizione dell\'utente. Disabilitare l\'impostazione per una durata di default dell\'iscrizione senza limite.';
$string['enrolstartdate'] = 'Data di inizio';
$string['enrolstartdate_help'] = 'Consente l\'iscrizione degli utenti solo a partire dalla data impostata.';
$string['errdisabled'] = 'Il plugin di iscrizione PayPal è disabilitato e non può gestire le notifiche di pagamento.';
$string['erripninvalid'] = 'La notifica di pagamento istantaneo non è stata verificata da PayPal';
$string['errpaypalconnect'] = 'Non è stato possibile collegarsi a {$a->url} per verificare la notifica di pagamento istantaneo: {$a->result}';
$string['expiredaction'] = 'Azione alla scadenza dell\'iscrizione';
$string['expiredaction_help'] = 'L\'azione da compiere quando scade l\'iscrizione di un partecipante. Da notare che alcuni dati verranno eliminati per effetto della disiscrizione.';
$string['mailadmins'] = 'Informa gli amministratori';
$string['mailstudents'] = 'Informa gli studenti';
$string['mailteachers'] = 'Informa i docenti';
$string['messageprovider:paypal_enrolment'] = 'Messaggi di iscrizione PaPal';
$string['nocost'] = 'Questo corso non ha costo di iscrizione!';
$string['paypal:config'] = 'Configurare istanze plugin di iscrizione PayPal';
$string['paypal:manage'] = 'Gestire utenti iscritti';
$string['paypal:unenrol'] = 'Disiscrivere utenti dal corso';
$string['paypal:unenrolself'] = 'Disiscriversi dal corso';
$string['paypalaccepted'] = 'Pagamenti Paypal accettati';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Il plugin di iscrizione PayPal consente impostare iscrizioni a pagamento. Se il costo di iscrizione è pari a zero, non sarà necessario pagare per iscriversi. È anche possibile impostare un costo a livello di sito che sarà usato come default per i corsi, nei quali sarà comunque possibile impostare costi differenti.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informazioni sulle transazioni PayPal relative alle iscrizioni PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Indirizzo email o ID dell\'account PayPal del destinatario del pagamento (ovvero il negoziante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID del corso acquistato.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID dell\'istanza di iscrizione nel corso.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Titolo del corso la cui iscrizione è stata acquistata.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Nota inserita dall\'acquirente nel campo \'Note\' presente sul sito PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nome e cognome dell\'acquirente.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'ID della transazione originale in caso di rimborso, storno, o annullamento storno.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Stato del pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Memorizza il metodo di pagamento:  eCheck, credito PayPal, carta di credito o trasferimento istantaneo.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Motivo per cui lo stato del pagamento è In attesa di verifica.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Motivo per cui lo stato del pagamento è Annullato, Rimborsato, Cancellato anullamento o Rifiutato.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Indirizzo email principale del destinatario del pagamento (ovvero il commerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID univoco dell\'account PayPal del destinatario del pagamento (ovvero il commerciante)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Ammontare delle tasse sul pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Data e ora in cui è stata ricevuta la notifica del pagamento da parte di PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Codice identificativo della transazione originale del commerciante relativa al pagamento dell\'acquirente e verso cui è stato aperto un caso.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID dell\'utente che ha acquistato l\'iscrizione.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Il plugin iscrizione \'PayPal\' invia dati utente da Moodle al sito web di PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Indirizzo dell\'utente che ha acquistato l\'iscrizione.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Città dell\'utente che ha acquistato l\'iscrizione.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Nazione dell\'utente che ha acquistato l\'iscrizione.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Stringa contenente ID dell\'utente (acquirente), ID del corso e ID dell\'istanza di iscrizione, separati da trattini.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Email dell\'acquirente.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Nome dell\'acquirente.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Cognome dell\'acquirente.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nome e cognome dell\'acquirente.';
$string['processexpirationstask'] = 'Invio notifiche scadenza delle iscrizioni PayPal';
$string['sendpaymentbutton'] = 'Invia pagamento tramite Paypal';
$string['status'] = 'Consenti iscrizioni PayPal';
$string['status_desc'] = 'Gli utenti potranno iscriversi ai corsi usando di default PayPal.';
$string['transactions'] = 'Transazione PayPal';
$string['unenrolselfconfirm'] = 'Sei sicuro di disiscriverti dal corso "{$a}"?';
