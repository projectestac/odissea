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
 * Strings for component 'sms', language 'ro', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acțiuni';
$string['countrycode'] = 'Cod de țară implicit';
$string['countrycode_help'] = 'Codul de țară va fi adăugat la numerele de telefon, dacă utilizatorii nu introduc codul țării lor. Introduceți numărul fără simbolul „+”.';
$string['createnewgateway'] = 'Creează SMS gateway nou';
$string['delete_sms_gateway'] = 'Șterge SMS gateway';
$string['delete_sms_gateway_confirmation'] = 'Această acțiune va șterge {$a->gateway} gateway SMS.';
$string['edit_sms_gateway'] = 'Editare {$a->gateway} SMS gateway';
$string['gateway'] = 'Gateway';
$string['gateway_name'] = 'Denumire gateway';
$string['manage_sms_gateways'] = 'Administrare gateways SMS';
$string['phonenumbernotvalid'] = 'Formatul numărului de telefon nu este recunoscut: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Stochează mesaje trimise prin SMS';
$string['privacy:metadata:sms_messages:content'] = 'Textul mesajului';
$string['privacy:metadata:sms_messages:id'] = 'ID-ul mesajului';
$string['privacy:metadata:sms_messages:recipient'] = 'Numărul de telefon la care a fost trimis mesajul';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Utilizatorul căruia i-a fost trimis mesajul, dacă este cunoscut';
$string['privacy:metadata:sms_messages:status'] = 'Status mesaj';
$string['privacy:metadata:sms_messages:timecreated'] = 'Data și ora când a fost creat mesajul';
$string['privacy:sms:sensitive_not_shown'] = 'Conținutul acestui mesaj nu a fost stocat, deoarece a fost marcat ca având conținut sensibil.';
$string['select_sms_gateways'] = 'SMS gateway provider';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Nu se poate șterge gateway-ul SMS {$a->gateway}. Gateway-ul fie este în uz, fie există o problemă cu baza de date. Verificați dacă gateway-ul este activ sau contactați administratorul bazei de date pentru ajutor.';
$string['sms_gateway_deleted'] = '{$a->gateway} SMS gateway șters';
$string['sms_gateway_disable_failed'] = 'Nu se poate dezactiva SMS gateway. Gateway-ul fie este în uz, fie există o problemă cu baza de date. Verificați dacă gateway-ul este activ sau contactați administratorul bazei de date pentru ajutor.';
$string['sms_gateways'] = 'SMS gateways';
$string['sms_gateways_info'] = 'Creați și administrați gateway-uri SMS pentru a trimite mesaje SMS din site-ul dumneavoastră.';
$string['status:gateway_failed'] = 'Gateway-ul nu a reușit să trimită mesajul';
$string['status:gateway_not_available'] = 'Gateway-ul nu este disponibil pentru a trimite mesajul';
$string['status:gateway_queued'] = 'Acest mesaj este pus în coadă la așteptare pentru a fi trimis de gateway.';
$string['status:gateway_rejected'] = 'Gateway-ul a respins mesajul.';
$string['status:gateway_sent'] = 'Mesajul a fost trimis de gateway.';
$string['status:message_over_size'] = 'Mesajul este prea mare pentru a fi trimis de către gateway';
$string['status:unknown'] = 'Nu s-a putut determina status-ul mesajului';
