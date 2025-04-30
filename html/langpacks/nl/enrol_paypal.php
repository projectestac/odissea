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
 * Strings for component 'enrol_paypal', language 'nl', version '4.4'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Wijs rol toe';
$string['businessemail'] = 'PayPal e-mail van onderneming';
$string['businessemail_desc'] = 'E-mail adres van de PayPal-account van je onderneming';
$string['cost'] = 'Aanmeldingsprijs';
$string['costerror'] = 'De aanmeldingsprijs is niet numeriek';
$string['costorkey'] = 'Kies één van volgende aanmeldingswijzes';
$string['currency'] = 'Munteenheid';
$string['defaultrole'] = 'Standaard roltoewijzing';
$string['defaultrole_desc'] = 'Kies een rol die gebruikers krijgen wanneer zij via PayPal aanmelden';
$string['enrolenddate'] = 'Einddatum';
$string['enrolenddate_help'] = 'Indien ingeschakeld, kunnen gebruikers enkel tot deze datum worden aangemeld.';
$string['enrolenddaterror'] = 'De einddatum van aanmelding kan niet voorafgaan aan de startdatum.';
$string['enrolperiod'] = 'Aanmeldingsduur';
$string['enrolperiod_desc'] = 'Standaard tijdsduur waarin de aanmelding geldig is. Indien ingesteld op nul, wordt de duur van de aanmelding standaard onbeperkt.';
$string['enrolperiod_help'] = 'Tijdsduur dat de aanmelding geldig is, beginnend van het ogenblik dat de gebruiker aangemeld is. Indien uitgeschakeld zal de aanmeldingsperiode onbeperkt zijn.';
$string['enrolstartdate'] = 'Start datum';
$string['enrolstartdate_help'] = 'Indien ingeschakeld zullen gebruikers pasvanaf deze datum kunnen aangemeld worden.';
$string['errdisabled'] = 'De PayPal aanmeldingsplugin bewaart geen persoonlijke gegevens.';
$string['erripninvalid'] = 'Onmiddellijke betalingsnotificatie is niet geverifieerd door PayPal.';
$string['errpaypalconnect'] = 'Kon niet vebinden met {$a->url} om te betalingsmelding te verifiëren: {$a->result}';
$string['expiredaction'] = 'Actie bij verlopen van de aanmelding';
$string['expiredaction_help'] = 'Kies een actie die moet gebeuren wanneer de aanmelding van een gebruiker verloopt. Merk op dat sommige gebruikersgegevens en instellingen worden verwijderd tijdens het afmelden uit een cursus.';
$string['mailadmins'] = 'Waarschuw beheerder';
$string['mailstudents'] = 'Waarschuw leerlingen';
$string['mailteachers'] = 'Waarschuw leraren';
$string['messageprovider:paypal_enrolment'] = 'Aanmeldingsberichten PayPal';
$string['nocost'] = 'Er zijn geen kosten verbonden aan lidmaatschap in deze cursus!';
$string['paypal:config'] = 'Configureer PayPal aanmelding';
$string['paypal:manage'] = 'Beheer aangemelde gebruikers';
$string['paypal:unenrol'] = 'Gebruikers van deze cursus afmelden';
$string['paypal:unenrolself'] = 'Zelf van deze cursus afmelden';
$string['paypalaccepted'] = 'Paypal-betalingen aanvaard';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Met de PayPalmodule kun je betaalde cursussen opzetten. Als de prijs voor een cursus nul is, dan worden leerlingen niet gevraagd om te betalen voor de cursus. Er is een site-brede prijs die je kunt instellen als standaardprijs voor de hele site en dan een aparte prijs per cursus. De cursusprijs overschrijft de site prijs.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informatie over de PayPal-transacties voor PayPal-inschrijvingen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'E-mailadres of PayPal-account-ID van de betalingsontvanger (dat wil zeggen, de verkoper).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'De ID van de cursus die wordt verkocht.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'De ID van de registratie-instantie in de cursus.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'De volledige naam van de cursus dat de inschrijving is verkocht.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Een opmerking die door de koper is ingevoerd in het veld PayPal-betaalscherm voor betalingen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Volledige naam van de koper.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'In het geval van teruggave, terugname of geannuleerde omkering, zou dit de transactie-ID van de oorspronkelijke transactie zijn.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'De status van de betaling.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Geeft aan of de betaling werd gefinancierd met een eCheck (echeck) of werd gefinancierd met PayPal-saldo, creditcard of directe overschrijving (instant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'De reden waarom de betalingsstatus in behandeling is (als dat zo is).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'De reden waarom de betaalstatus is Omgekeerd, Terugbetaald, Geannuleerd of Geweigerd (als de status een van deze is).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Primair e-mailadres van de betalingsontvanger (dat wil zeggen, de verkoper).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Unieke PayPal-account-ID van de betalingsontvanger (d.w.z. de verkoper).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Bedrag van belasting over de betaling.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'De tijd dat Moodle door PayPal op de hoogte wordt gesteld van de betaling.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Het originele transactie-identificatienummer van de handelaar voor de betaling van de koper, waartegen de zaak werd geregistreerd';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'De ID van de gebruiker die de cursus heeft gekocht.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'De PayPal-inschrijvingsplug-in verzendt gebruikersgegevens van Moodle naar de PayPal-website.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adres van de gebruiker die de cursus koopt.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Stad van de gebruiker die de cursus koopt.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Land van de gebruiker die de cursus koopt.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Een tekenreeks met scheidingstekenreeks die ID van de gebruiker (de koper), ID van de cursus, ID van de registratie-instantie bevat.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'E-mailadres van de gebruiker die de cursus koopt.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Voornaam van de gebruiker die de cursus koopt.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Achternaam van de gebruiker die de cursus koopt.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Volledige naam van de koper.';
$string['processexpirationstask'] = 'PayPal-inschrijving verstuurt taak voor verloopstappen';
$string['sendpaymentbutton'] = 'Stuur betaling via Paypal';
$string['status'] = 'PayPal aanmeldigen toestaan';
$string['status_desc'] = 'Laat gebruikers toe om standaard PayPal te gebruiken om lid te worden van een cursus.';
$string['transactions'] = 'Paypal transacties';
$string['unenrolselfconfirm'] = 'Wil je echt jezelf afmelden van cursus "{$a}"?';
