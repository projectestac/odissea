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
 * Strings for component 'payment', language 'nl', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Gearchiveerd';
$string['accountconfignote'] = 'Betalingsgateways voor dit account worden afzonderlijk geconfigureerd';
$string['accountdeleteconfirm'] = 'Als dit account eerdere betalingen heeft, wordt het gearchiveerd, anders worden de configuratiegegevens permanent verwijderd. Weet je zeker dat je door wilt gaan?';
$string['accountidnumber'] = 'ID-nummer';
$string['accountidnumber_help'] = 'Het ID-nummer wordt alleen gebruikt bij het matchen van het account met externe systemen en wordt nergens op de site weergegeven. Als het account een officiële codenaam heeft, mag deze worden ingevoerd, anders kan het veld leeg worden gelaten.';
$string['accountname'] = 'Gebruikersnaam';
$string['accountname_help'] = 'Hoe dit account wordt geïdentificeerd voor docenten of managers die betalingen hebben ingesteld (bijvoorbeeld in de plug-in voor cursusinschrijving).';
$string['accountnotavailable'] = 'Niet beschikbaar';
$string['createaccount'] = 'Maak een betaalrekening aan';
$string['deleteorarchive'] = 'Verwijderen of archiveren';
$string['editpaymentaccount'] = 'Betaalrekening bewerken';
$string['eventaccountcreated'] = 'Betaalrekening aangemaakt';
$string['eventaccountdeleted'] = 'Betaalrekening verwijderd';
$string['eventaccountupdated'] = 'Betaalrekening bijgewerkt';
$string['feeincludesurcharge'] = '{$a->fee}  (inclusief {$a->surcharge}% toeslag voor het gebruik van dit betalingstype)';
$string['gatewaycannotbeenabled'] = 'De betalingsgateway kan niet worden ingeschakeld omdat de configuratie onvolledig is.';
$string['gatewaydisabled'] = 'Uitgeschakeld';
$string['gatewayenabled'] = 'Ingeschakeld';
$string['gatewaynotfound'] = 'Gateway niet gevonden';
$string['gotomanageplugins'] = 'Schakel betalingsgateways in en uit en stel toeslagen in via {$a}.';
$string['gotopaymentaccounts'] = 'U kunt meerdere betalingsaccounts maken met behulp van een van deze gateways op de pagina {$a}';
$string['hidearchived'] = 'Gearchiveerd verbergen';
$string['noaccountsavilable'] = 'Er zijn geen betaalrekeningen beschikbaar.';
$string['nocurrencysupported'] = 'Er wordt geen betaling in welke valuta dan ook ondersteund. Zorg ervoor dat ten minste één betalings-gateway is ingeschakeld.';
$string['nogateway'] = 'Er is geen betalings-gateway die kan worden gebruikt.';
$string['nogatewayselected'] = 'Je moet eerst een betalings-gateway selecteren.';
$string['paymentaccount'] = 'Betaalrekening';
$string['paymentaccounts'] = 'Betaalrekeningen';
$string['paymentaccountsexplained'] = 'Maak een of meerdere betaalrekeningen aan voor deze site. Elk account bevat configuratie voor beschikbare betalingsgateways. De persoon die betalingen op de site configureert (bijvoorbeeld betaling voor de cursusinschrijving), kan kiezen uit de beschikbare accounts.';
$string['payments'] = 'Betalingen';
$string['privacy:metadata:database:payments'] = 'Informatie over de betalingen.';
$string['privacy:metadata:database:payments:amount'] = 'Het bedrag voor de betaling.';
$string['privacy:metadata:database:payments:currency'] = 'De valuta van de betaling.';
$string['privacy:metadata:database:payments:gateway'] = 'De betalings-gateway die wordt gebruikt voor de betaling.';
$string['privacy:metadata:database:payments:timecreated'] = 'Het tijdstip waarop de betaling is verricht.';
$string['privacy:metadata:database:payments:timemodified'] = 'Het tijdstip waarop het betalingsrecord voor het laatst is bijgewerkt.';
$string['privacy:metadata:database:payments:userid'] = 'De gebruiker die de betaling heeft uitgevoerd.';
$string['restoreaccount'] = 'Herstellen';
$string['selectpaymenttype'] = 'Selecteer betalingstype';
$string['showarchived'] = 'Gearchiveerd weergeven';
$string['supportedcurrencies'] = 'Ondersteunde valuta';
$string['surcharge'] = 'Toeslag (percentage)';
$string['surcharge_desc'] = 'De toeslag is een extra percentage dat in rekening wordt gebracht aan gebruikers die ervoor kiezen om te betalen via deze betalingsgateway.';
