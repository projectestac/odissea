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
 * Strings for component 'sms', language 'it', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Azioni';
$string['countrycode'] = 'Prefisso nazionale di default';
$string['countrycode_help'] = 'Prefisso nazionale da aggiungere ai numeri di telefono se gli utenti non inseriscono il proprio prefisso nazionale. Inserisci il numero senza il simbolo \'+\' iniziale.';
$string['createnewgateway'] = 'Crea gateway SMS';
$string['delete_sms_gateway'] = 'Elimina gateway SMS';
$string['delete_sms_gateway_confirmation'] = 'Sarà eliminato il gateway SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Modifica SMS gateway {$a->gateway}';
$string['gateway'] = 'Gateway';
$string['gateway_name'] = 'Nome del gateway';
$string['manage_sms_gateways'] = 'Gestione gateway SMS';
$string['phonenumbernotvalid'] = 'Il formato o il numero di telefono non sono stati riconosciuti: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Memorizza i messaggi inviati tramite SMS';
$string['privacy:metadata:sms_messages:content'] = 'Messaggio di testo';
$string['privacy:metadata:sms_messages:id'] = 'ID del messaggio';
$string['privacy:metadata:sms_messages:recipient'] = 'numero di telefono a cui è stato inviato il messaggio';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'utente a cui è stato inviato il messaggio, se noto';
$string['privacy:metadata:sms_messages:status'] = 'Stato del messaggio';
$string['privacy:metadata:sms_messages:timecreated'] = 'Orario di creazione del messaggio';
$string['privacy:sms:sensitive_not_shown'] = 'il contenuto di questo messaggio non è stato memorizzato perché contrassegnato come contenente contenuto sensibile.';
$string['select_sms_gateways'] = 'Provider di gateway SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Non è possibile eliminare il gateway SMS {$a->gateway}. Il gateway è in uso o c\'è un problema con il database. Controllare se il gateway è attivo o contattare l\'amministratore del database per assistenza.';
$string['sms_gateway_deleted'] = 'Il gateway SMS {$a->gateway} è stato eliminato';
$string['sms_gateway_disable_failed'] = 'Non è possibile disabilitare il gateway SMS. Il gateway è in uso o c\'è un problema con il database. Controllare se il gateway è attivo o contattare l\'amministratore del database per assistenza.';
$string['sms_gateways'] = 'Gateway SMS';
$string['sms_gateways_info'] = 'Creazione e gestione gateway SMS per inviare messaggi SMS dal sito.';
$string['status:gateway_failed'] = 'Il gateway non è riuscito a inviare il messaggio';
$string['status:gateway_not_available'] = 'Il gateway non è disponibile per inviare il messaggio';
$string['status:gateway_queued'] = 'Il messaggio è in coda per essere inviato dal gateway';
$string['status:gateway_rejected'] = 'Il gateway ha rifiutato il messaggio';
$string['status:gateway_sent'] = 'Il gateway ha inviato il messaggio';
$string['status:message_over_size'] = 'Il messaggio è troppo grande per essere inviato dal gateway';
$string['status:unknown'] = 'Non è possibile determinare lo stato del messaggio';
