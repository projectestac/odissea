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
 * Strings for component 'enrol_apply', language 'it', version '4.1'.
 *
 * @package     enrol_apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'La tua richiesta di iscrizione al corso è rifiutata.';
$string['applicationconfirmednotification'] = 'La tua richiesta di iscrizione al corso è confermata.';
$string['applicationdeferrednotification'] = 'La tua richiesta di iscrizione al corso è messa in attesa (sei nella lista di attesa).';
$string['apply:config'] = 'Configurare istanze plugin Iscrizioni con approvazione';
$string['apply:manage'] = 'Gestire iscrizioni degli utenti';
$string['apply:manageapplications'] = 'Gestire le richieste di iscrizione';
$string['apply:unenrol'] = 'Disiscrivere utenti dal corso';
$string['apply:unenrolself'] = 'Disiscriversi dal corso';
$string['applycomment'] = 'Commenta';
$string['applydate'] = 'Data di iscrizione';
$string['applymanage'] = 'Gestisci richieste di iscrizione';
$string['applyuser'] = 'Nome / Cognome';
$string['applyusermail'] = 'Email';
$string['btncancel'] = 'Rifiuta';
$string['btnconfirm'] = 'Conferma';
$string['btnwait'] = 'Metti in attesa';
$string['cancelmail_desc'] = '';
$string['cancelmail_heading'] = 'Email di rifiuto';
$string['cancelmailcontent'] = 'Contenuto mail di rifiuto';
$string['cancelmailcontent_desc'] = 'Per favore usa gli appositi segnaposto che verranno sostituiti nel contenuto della mail.<br>{firstname}: Nome dell\'utente; {content}: Nome del corso; {lastname}: Cognome dell\'utente; {username}: username dell\'utente.';
$string['cancelmailsubject'] = 'Oggetto mail di rifiuto';
$string['cancelmailsubject_desc'] = '';
$string['cantenrol'] = 'L\'iscrizione è disabilitata oppure non è attiva';
$string['comment'] = 'Commento';
$string['confirmenrol'] = 'Gestisci richieste';
$string['confirmmail_desc'] = '';
$string['confirmmail_heading'] = 'Email di conferma';
$string['confirmmailcontent'] = 'Contenuto mail di conferma';
$string['confirmmailcontent_desc'] = 'Per favore usa gli appositi segnaposto che verranno sostituiti nel contenuto della mail.<br>{firstname}: Nome dell\'utente; {content}: Nome del corso; {lastname}: Cognome dell\'utente; {username}: username dell\'utente.';
$string['confirmmailsubject'] = 'Oggetto mail di conferma';
$string['confirmmailsubject_desc'] = '';
$string['confirmusers'] = 'Conferma dell\'iscrizione';
$string['confirmusers_desc'] = 'Gli utenti nelle righe grigie sono nella lista di attesa.';
$string['coursename'] = 'Corso';
$string['custom_label'] = 'Etichetta personalizzata';
$string['defaultperiod'] = 'Durata di default dell\'iscrizione';
$string['defaultperiod_desc'] = 'Durata di default durante la quale l\'iscrizione rimarrà valida. Se impostata a zero, la durata dell\'iscrizione sarà illimitata.';
$string['defaultperiod_help'] = 'Durata di default durante la quale l\'iscrizione rimane valida, a partire dalla data di iscrizione dell\'utente. Se impostata a zero, la durata dell\'iscrizione sarà illimitata.';
$string['editdescription'] = 'Descrizione area di testo';
$string['enrolname'] = 'Iscrizione con approvazione';
$string['enrolusers'] = 'Iscrivi utenti';
$string['expiredaction'] = 'Azione alla scadenza dell\'iscrizione';
$string['expiredaction_help'] = 'Seleziona l\'azione da eseguire alla scadenza dell\'iscrizione. Prestare attenzione al fatto che al momento della disiscrizione dal corso alcuni dati ed impostazioni dell\'utente  andranno persi.';
$string['expiry_heading'] = 'Impostazioni scadenza';
$string['mailtoteacher_suject'] = 'Nuova richiesta di iscrizione!';
$string['maxenrolled'] = 'Numero massimo di iscrizioni';
$string['maxenrolled_help'] = 'Specifica il numero massimo di utenti che possono effettuare l\'iscrizione. 0 significa nessun limite.';
$string['maxenrolled_tip_1'] = 'di';
$string['maxenrolled_tip_2'] = 'posti già prenotati.';
$string['maxenrolledreached_left'] = 'Il numero massimo di iscrizioni permesse';
$string['maxenrolledreached_right'] = 'è stato raggiunto.';
$string['messageprovider:application'] = 'Notifiche delle richieste di iscrizione al corso';
$string['messageprovider:cancelation'] = 'Notifiche di rifiuto della richiesta di iscrizione al corso';
$string['messageprovider:confirmation'] = 'Notifiche di conferma della richiesta di iscrizione al corso';
$string['messageprovider:waitinglist'] = 'Notifiche di messa in attesa della richiesta di iscrizione al corso';
$string['newapplicationnotification'] = 'C\'è una nuova richiesta di iscrizione al corso in attesa di verifica.';
$string['newenrols'] = 'Consenti nuove richieste di iscrizione al corso';
$string['notification'] = '<b>Richiesta di iscrizione al corso correttamente inviata</b>. <br/><br/>Verrai informato via email appena la tua richiesta di iscrizione sarà confermata.';
$string['notify_desc'] = 'Imposta chi riceverà le notifiche delle nuove richieste di iscrizione.';
$string['notify_heading'] = 'Impostazioni di notifica';
$string['notifycoursebased'] = 'Notifiche di nuove richieste di iscrizione (per le singole istanze, esempio: i docenti del corso)';
$string['notifycoursebased_desc'] = 'Default per nuove istanze: Notificare a tutti quelli che hanno l\'\\autorizzazione \'Gestire richieste di iscrizione\' nel contesto del corso (per esempio docenti ed amministratori)';
$string['notifyglobal'] = 'Notifica di nuove richieste di iscrizione (globale, esempio: i responsabili globali e gli amministratori)';
$string['notifyglobal_desc'] = 'Imposta chi riceverà le notifiche delle nuove richieste di iscrizioni per tutti i corsi.';
$string['pluginname'] = 'Iscrizione con approvazione';
$string['pluginname_desc'] = 'Il plugin consente agli utenti di richiedere l\'iscrizione ad un corso. L\'accesso al corso sarà consentito solo dopo che un docente o un manager del sito avrà approvato la richiesta.';
$string['privacy:metadata'] = 'Il plugin Iscrizione con approvazione non memorizza dati personali.';
$string['show_extra_user_profile'] = 'Visualizza ulteriori campi del profilo utente, oltre a quelli standard, nella schermata di iscrizione';
$string['show_standard_user_profile'] = 'Visualizza i campi standard del profilo utente nella schermata di iscrizione';
$string['status'] = 'Consenti Iscrizioni con approvazione';
$string['status_desc'] = 'Permette l\'accesso al corso agli utenti iscritti internamente.';
$string['submitted_info'] = 'Informazioni di iscrizione';
$string['user_profile'] = 'Profilo utente';
$string['waitmail_desc'] = '';
$string['waitmail_heading'] = 'Email della lista di attesa';
$string['waitmailcontent'] = 'Contenuto mail della lista di attesa';
$string['waitmailcontent_desc'] = 'Per favore usa gli appositi segnaposto che verranno sostituiti nel contenuto della mail.<br>{firstname}: Nome dell\'utente; {content}: Nome del corso; {lastname}: Cognome dell\'utente; {username}: username dell\'utente.';
$string['waitmailsubject'] = 'Oggetto mail della lista di attesa';
$string['waitmailsubject_desc'] = '';
