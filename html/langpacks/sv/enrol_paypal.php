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
 * Strings for component 'enrol_paypal', language 'sv', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Tilldela roll';
$string['businessemail'] = 'PayPal för företag e-post';
$string['businessemail_desc'] = 'E-postadressen till ditt PayPal för företag-konto.';
$string['cost'] = 'Registreringsavgift';
$string['costerror'] = 'Anmälningsavgiften är inte numerisk';
$string['costorkey'] = 'Välj ett av de följande sätten att registrera sig.';
$string['currency'] = 'Valuta';
$string['defaultrole'] = 'Standardroll';
$string['defaultrole_desc'] = 'Välj standardrollen som ska tilldelas vid registrering.';
$string['enrolenddate'] = 'Slutdatum';
$string['enrolenddate_help'] = 'Om det här alternativet är aktiverat kan användarna bara registreras fram till detta datum.';
$string['enrolenddaterror'] = 'Slutdatum för registrering kan inte infalla tidigare än startdatum';
$string['enrolperiod'] = 'Registreringens varaktighet';
$string['enrolperiod_desc'] = 'Standarvaraktighet för registreringens giltighet. 0 = obegränsad.';
$string['enrolperiod_help'] = 'Den tid som registreringen är giltig, från och med det ögonblick som användaren registreras. Om den är inaktiverad är registreringstiden obegränsad.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Om det här alternativet är aktiverat kan användarna bara registreras från och med det här datumet.';
$string['errdisabled'] = 'Pluginmodulen PayPal-registrering är inaktiverad och hanterar inte betalningsmeddelanden.';
$string['erripninvalid'] = 'Snabbbetalningsmeddelande har inte verifierats av PayPal.';
$string['errpaypalconnect'] = 'Det gick inte att ansluta till {$a->url} för att verifiera snabbbetalningsmeddelandet: {$a->result}';
$string['expiredaction'] = 'Åtgärd vid förfallen registrering';
$string['expiredaction_help'] = 'Välj den åtgärd som ska utföras då registreringen förfaller. Vänligen tänk på att viss användardata och vissa inställningar tas bort från kursen vid avregistreringen.';
$string['mailadmins'] = 'Meddela administratören';
$string['mailstudents'] = 'Meddela studenter';
$string['mailteachers'] = 'Meddela lärare';
$string['messageprovider:paypal_enrolment'] = 'PayPal registreringsmeddelanden';
$string['nocost'] = 'Det finns ingen kostnad i samband med att du anmäler dig till den här kursen!';
$string['paypal:config'] = 'Konfigurera instanser för PayPal-registreringar';
$string['paypal:manage'] = 'Hantera registrerade användare';
$string['paypal:unenrol'] = 'Avregistrera användare från kurs';
$string['paypal:unenrolself'] = 'Avrigistrera dig själv från kurs';
$string['paypalaccepted'] = 'Betalningar via Paypal accepterade';
$string['pluginname'] = 'Kursregistrering via PayPal';
$string['pluginname_desc'] = 'Med PayPal-modulen kan du konfigurera betalda kurser. Om kostnaden för en kurs är noll ombeds studenterna inte att betala vid registreringen. Det finns en webbplatsövergripande kostnad som du anger här som standard för hela webbplatsen och sedan en kursinställning som du kan ställa in för varje enskild kurs. Kurskostnaden åsidosätter den övergripande kostnaden.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Information om PayPal-transaktioner för PayPal registreringar.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Betalningsmottagarens PayPal eller konto-ID (det vill säga handlaren).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID för kursen som erbjuds.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID:t för inskrivningsinstansen i kursen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Det fullständiga namnet på kursen och att dess registrering har sålts.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'En anteckning som angavs av köparen i PayPal fältet för betalningsanteckning på webbplatsen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Fullständigt namn på köparen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Vid återbetalning, återföring eller annullerad återföring skulle detta vara transaktions-ID för den ursprungliga transaktionen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Status för betalningen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Gäller om betalningen finansierades med en eCheck (echeck) eller finansierades med PayPal saldo, kreditkort eller direkt överföring (direkt).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Anledningen till att betalningsstatus väntar (om så är fallet).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Anledningen till att betalningsstatusen återförs, återbetalas, avbruten_återbetalning eller nekas (om statusen är en av dem).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Betalningsmottagarens primära e-postadress (det vill säga handlaren).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Unikt PayPal konto-ID för betalningsmottagaren (dvs. handlaren).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Skattebelopp som debiteras vid betalning.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Tidpunkten för då Moodle meddelas av PayPal om betalningen.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Handlarens ursprungliga transaktionsidentifieringsnummer för betalningen från köparen, mot vilket ärendet registrerades';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID:t för den användare som köpte kursregistreringen.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Pluginmodulen PayPal-registrering överför användardata från Moodle till PayPals webbplats.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adress till den användare som köper kursen.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Staden för användaren som köper kursen.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Landet för användaren som köper kursen.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'En bindestrecksavgränsad sträng som innehåller ID för användaren (köparen), ID för kursen och ID för registreringsinstansen.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'E-post till användaren som köper kursen.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Förnamn på användaren som köper kursen.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Efternamn för användaren som köper kursen.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Köparens fullständiga namn.';
$string['processexpirationstask'] = 'Skicka meddelande om förfallna PayPal-registreringar.';
$string['sendpaymentbutton'] = 'Betala med PayPal';
$string['status'] = 'Tillåt registrering via PayPal';
$string['status_desc'] = 'Tillåter som standard användare att registrera sig till en kurs via PayPal.';
$string['transactions'] = 'PayPal-transaktioner';
$string['unenrolselfconfirm'] = 'Vill du verkligen koppla bort dig från "{$a}"?';
