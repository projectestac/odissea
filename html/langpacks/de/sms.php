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
 * Strings for component 'sms', language 'de', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['countrycode'] = 'Standardmäßiger Ländercode';
$string['countrycode_help'] = 'Ländervorwahl, die zu Telefonnummern hinzugefügt wird, wenn Nutzer/innen keine eigene Ländervorwahl angeben. Geben Sie die Zahl ohne das führende "+"-Symbol ein.';
$string['createnewgateway'] = 'Neues SMS-Gateway anlegen';
$string['delete_sms_gateway'] = 'SMS-Gateway löschen';
$string['delete_sms_gateway_confirmation'] = 'Hiermit löschen Sie das SMS-Gateway {$a->gateway}.';
$string['edit_sms_gateway'] = 'SMS-Gateway {$a->gateway} bearbeiten';
$string['gateway'] = 'Gateway';
$string['gateway_name'] = 'Name des Gateway';
$string['manage_sms_gateways'] = 'SMS-Gateways verwalten';
$string['phonenumbernotvalid'] = 'Das Format der Telefonnummer wurde nicht erkannt: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Per SMS gesendete Mitteilungen speichern';
$string['privacy:metadata:sms_messages:content'] = 'Mitteilungstext';
$string['privacy:metadata:sms_messages:id'] = 'ID der Mitteilung';
$string['privacy:metadata:sms_messages:recipient'] = 'Telefonnummer, an die die Mitteilung gesendet wurde';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Person, an die die Mitteilung gesendet wurde, falls bekannt';
$string['privacy:metadata:sms_messages:status'] = 'Status der Mitteilung';
$string['privacy:metadata:sms_messages:timecreated'] = 'Zeit, zu der die Mitteilung erzeugt wurde';
$string['privacy:sms:sensitive_not_shown'] = 'Der Inhalt dieser Mitteilung wurde nicht gespeichert, da sie als vertraulich gekennzeichnet ist.';
$string['select_sms_gateways'] = 'SMS-Gateway-Anbieter';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Das SMS-Gateway {$a->gateway} kann nicht gelöscht werden. Das Gateway wird entweder verwendet oder es liegt ein Datenbankproblem vor. Überprüfen Sie, ob das Gateway aktiv ist, oder wenden Sie sich an Ihre Administrator/innen, um Hilfe zu erhalten.';
$string['sms_gateway_deleted'] = 'Das SMS-Gateway {$a->gateway} wurde gelöscht.';
$string['sms_gateway_disable_failed'] = 'Das SMS-Gateway kann nicht deaktiviert werden. Das Gateway wird entweder verwendet oder es liegt ein Datenbankproblem vor. Überprüfen Sie, ob das Gateway aktiv ist, oder wenden Sie sich an Ihre Administrator/innen, um Hilfe zu erhalten.';
$string['sms_gateways'] = 'SMS-Gateways';
$string['sms_gateways_info'] = 'SMS-Gateways anlegen und verwalten, um SMS-Mitteilungen von Ihrer Website zu senden.';
$string['status:gateway_failed'] = 'Das Gateway könnte die Mitteilung nicht senden.';
$string['status:gateway_not_available'] = 'Das Gateway ist nicht erreichbar, um die Mitteilung zu senden.';
$string['status:gateway_queued'] = 'Die Mitteilung wurde in die Warteschlange für das Gateway gesetzt.';
$string['status:gateway_rejected'] = 'Das Gateway hat die Mitteilung zurückgewiesen.';
$string['status:gateway_sent'] = 'Die Mitteilung wurde vom Gateway gesendet.';
$string['status:message_over_size'] = 'Die Mitteilung ist zu groß, um vom Gateway gesendet zu werden.';
$string['status:unknown'] = 'Der Status der Mitteilung kann nicht ermittelt werden.';
