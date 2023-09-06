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
 * Strings for component 'enrol_paypal', language 'de', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rolle zuordnen';
$string['businessemail'] = 'Geschäftliche E-Mail-Adresse für PayPal';
$string['businessemail_desc'] = 'E-Mail-Adresse für Ihr geschäftliches PayPal-Konto';
$string['cost'] = 'Teilnahmegebühr';
$string['costerror'] = 'Die Teilnahmegebühr muss eine Zahl sein.';
$string['costorkey'] = 'Wählen Sie eines der folgenden Kurs-Anmeldeverfahren.';
$string['currency'] = 'Währung';
$string['defaultrole'] = 'Rolle im Kurs';
$string['defaultrole_desc'] = 'Wählen Sie die Rolle aus, die bei der PayPal-Einschreibung zugewiesen werden soll';
$string['enrolenddate'] = 'Einschreibungsende';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen nur bis zu diesem Zeitpunkt eingeschrieben werden.';
$string['enrolenddaterror'] = 'Das Einschreibungsende muss nach dem Einschreibungsbeginn liegen.';
$string['enrolperiod'] = 'Teilnahmedauer';
$string['enrolperiod_desc'] = 'Vorgabe zur Teilnahmedauer (in Sekunden). Falls dieser Wert auf Null gesetzt ist, ist die Teilnahmedauer unbegrenzt.';
$string['enrolperiod_help'] = 'Teilnahmedauer (in Sekunden), beginnend mit dem Einschreibezeitpunkt. Falls dieser Wert auf Null gesetzt ist, ist die Teilnahmedauer unbegrenzt.';
$string['enrolstartdate'] = 'Einschreibungsbeginn';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen ab diesem Zeitpunkt eingeschrieben werden.';
$string['errdisabled'] = 'Die Einschreibemethode \'PayPal\' ist deaktiviert und kann keine Zahlungsnachrichten verarbeiten.';
$string['erripninvalid'] = 'Die sofortige Zahlung wurde von PayPal nicht bestätigt.';
$string['errpaypalconnect'] = 'Eine Verbindung zu {$a->url} konnte nicht hergestellt werden, um die Nachricht zur sofortigen Zahlung zu überprüfen: {$a->result}';
$string['expiredaction'] = 'Aktion bei Ablauf der Kurseinschreibung';
$string['expiredaction_help'] = 'Wählen Sie die Aktionen, die beim Ablauf der Kurseinschreibung ausgeführt werden sollen. Beim Austragen des Nutzers aus dem Kurs werden einige Nutzerdaten und Einstellungen entfernt.';
$string['mailadmins'] = 'Admin benachrichtigen';
$string['mailstudents'] = 'Teilnehmer/innen benachrichtigen';
$string['mailteachers'] = 'Trainer/innen benachrichtigen';
$string['messageprovider:paypal_enrolment'] = 'Systemnachricht zu Einschreibung über Paypal';
$string['nocost'] = 'Für diesen Kurs wurde keine Einschreibegebühr  festgelegt!';
$string['paypal:config'] = 'Einschreibung \'PayPal\' konfigurieren';
$string['paypal:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['paypal:unenrol'] = 'Nutzer/innen aus dem Kurs abmelden';
$string['paypal:unenrolself'] = 'Selbst aus dem Kurs abmelden';
$string['paypalaccepted'] = 'PayPal-Zahlungen möglich';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Das Plugin \'PayPal\' erlaubt es, kostenpflichtige Kurse zu entwickeln. Wenn die Kosten für einen Kurs bei Null liegen, wird keine Zahlungsaufforderung für die Kurseinschreibung gezeigt. Es gibt die Möglichkeit, Kosten für alle Kurse der Website vorzugeben und dann individuell in jeder Kurseinstellung anzupassen. Die Kurseinstellung überschreibt die globale Vorgabe.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Information über die Paypal Transaktion für Paypal-Einschreibungen';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'E-Mail-Adresse oder Paypal-Account-ID des Zahlungsempfängers';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID des Kurses für den die Zahlung erfolgt';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID der Einschreibeinstanz im Kurs';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Vollständiger Name des Kurses für den eine Zahlung zur Einschreibung erfolgte';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Eine Notiz, die der/die zahlende Teilnehmer/in während des Zahlungsvorgang auf der Paypal-Seite hinterlegt hat';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Vollständiger Name des Käufers';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Im Falle einer Erstattung, Stornierung, oder einer widerrufenen Stornierung ist dies die Transaktion der Original-Transaktion.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Status der Zahlung';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Enthält die Information mit welchem Zahlungsverfahren die Zahlung erfolgte';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Grund, warum die Zahlung noch nicht abgeschlossen ist (falls dies der Fall ist)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Grund warum Status erstattet, Wiederrufen, Wiederruf_abgebrochen oder verweigert ist (falls dies einer der Stati ist).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Primäre E-Mail-Adresse des Zahlungsempfängers';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Eindeutige Paypal Account-ID des Zahlungsempfängers';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Enthaltener Steueranteil in Zahlung';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Zeitpunkt an der Moodle über Zahlung von Paypal informiert wurde';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Die ursprüngliche Transaktionsidentifikationsnummer des Händlers zur die Zahlung des Käufers, für den der Fall registriert wurde';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID des Nutzers, der Kurs gebucht hat';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Das Paypal-Einschreibungsplugin überträgt Nutzerdaten an Paypal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adresse des Kurskäufers';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Stadt des kaufenden Nutzers';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Land des kaufenden Nutzers';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Semikolongetrennte Liste mit der ID des Nutzers (Käufer), ID des Kurses, ID der Einschreibeinstanz';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'E-Mail-Adresse des kaufenden Nutzers';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Vorname des kaufenden Nutzers';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Nachname des kaufenden Nutzers';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Vollständiger Name des Käufers';
$string['processexpirationstask'] = 'Paypal-Einschreibung: Erinnerung für Einschreibungsablauf';
$string['sendpaymentbutton'] = 'Zahlung über PayPal';
$string['status'] = 'PayPal-Einschreibung erlauben';
$string['status_desc'] = 'Nutzer/innen erlauben, PayPal zur Kurseinschreibung zu benutzen';
$string['transactions'] = 'Paypal-Transaktion';
$string['unenrolselfconfirm'] = 'Möchten Sie sich wirklich selbst aus dem Kurs \'{$a}\' abmelden?';
