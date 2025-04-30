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
 * Strings for component 'payment', language 'de', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Archiviert';
$string['accountconfignote'] = 'Zahlungsgateways für dieses Konto werden getrennt konfiguriert';
$string['accountdeleteconfirm'] = 'Wenn dieses Konto vorherige Zahlungen aufweist, wird es archiviert. Andernfalls wird die Konfiguration gelöscht. Möchten Sie wirklich fortfahren?';
$string['accountidnumber'] = 'ID-Nummer';
$string['accountidnumber_help'] = 'Die ID-Nummer wird nur verwendet, wenn das Konto mit externen Systemen abgeglichen und nirgends auf der Website angezeigt wird. Wenn das Konto einen offiziellen Codenamen hat, kann es eingegeben werden, andernfalls kann das Feld leer gelassen werden.';
$string['accountname'] = 'Kontoname';
$string['accountname_help'] = 'Wie wird dieses Konto für Trainer/innen oder Manager/innen identifiziert, die Zahlungen einrichten (z.B. im Plugin für die Kursanmeldung).';
$string['accountnotavailable'] = 'Nicht verfügbar';
$string['createaccount'] = 'Zahlungskonto anlegen';
$string['deleteorarchive'] = 'Löschen oder archivieren';
$string['editpaymentaccount'] = 'Zahlungskonto bearbeiten';
$string['eventaccountcreated'] = 'Zahlungskonto angelegt';
$string['eventaccountdeleted'] = 'Zahlungskonto gelöscht';
$string['eventaccountupdated'] = 'Zahlungskonto aktualisiert';
$string['feeincludesurcharge'] = '{$a->fee} (enthält {$a->surcharge}% Aufschlag für die Nutzung der Zahlungsart)';
$string['gatewaycannotbeenabled'] = 'Das Zahlungsgateway kann nicht aktiviert werden, weil die Konfiguration unvollständig ist.';
$string['gatewaydisabled'] = 'Deaktiviert';
$string['gatewayenabled'] = 'Aktiviert';
$string['gatewaynotfound'] = 'Gateway nicht gefunden';
$string['gotomanageplugins'] = 'Aktivieren und deaktivieren Sie Zahlungsgateways und legen Sie die Aufschläge über {$a} fest.';
$string['gotopaymentaccounts'] = 'Sie können mehrere Zahlungskonten mit einem dieser Zahlungsgateways auf der Seite {$a} erstellen';
$string['hidearchived'] = 'Archivierte verbergen';
$string['noaccountsavilable'] = 'Keine Zahlungskonten verfügbar';
$string['nocurrencysupported'] = 'Es werden keine Zahlungen in einer beliebigen Währung unterstützt. Bitte stellen Sie sicher, dass mindestens ein Zahlungsgateway aktiviert ist.';
$string['nogateway'] = 'Es gibt kein Zahlungsgateway, das Sie verwenden könnten';
$string['nogatewayselected'] = 'Sie müssen zuerst ein Zahlungsgateway auswählen.';
$string['paymentaccount'] = 'Zahlungskonto';
$string['paymentaccounts'] = 'Zahlungskonten';
$string['paymentaccountsexplained'] = 'Erstellen Sie ein oder mehrere Zahlungskonten für diese Website. Jedes Konto enthält eine Konfiguration für verfügbare Zahlungsgateways. Die Person, die Zahlungen auf der Website konfiguriert (z.B. eine Zahlung für die Kursanmeldung), kann aus den verfügbaren Konten auswählen.';
$string['payments'] = 'Zahlungen';
$string['privacy:metadata:database:payments'] = 'Infos zu den Zahlungen';
$string['privacy:metadata:database:payments:amount'] = 'Zahlungsbetrag';
$string['privacy:metadata:database:payments:currency'] = 'Zahlungswährung';
$string['privacy:metadata:database:payments:gateway'] = 'Zahlungsgateway, das zur Zahlung verwendet wurde';
$string['privacy:metadata:database:payments:timecreated'] = 'Zeitpunkt, zu dem die Zahlung vorgenommen wurde';
$string['privacy:metadata:database:payments:timemodified'] = 'Zeitpunkt, zu dem die Zahlungsdaten geändert wurden';
$string['privacy:metadata:database:payments:userid'] = 'Person, die die Zahlung vorgenommen hat';
$string['restoreaccount'] = 'Wiederherstellen';
$string['selectpaymenttype'] = 'Zahlungsart wählen';
$string['showarchived'] = 'Archivierte anzeigen';
$string['supportedcurrencies'] = 'Unterstützte Währungen';
$string['surcharge'] = 'Aufschlag (Prozent)';
$string['surcharge_desc'] = 'Der Aufschlag wird von Nutzer/innen erhoben, die zur Zahlung dieses Zahlungsgateway verwenden.';
