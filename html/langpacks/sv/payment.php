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
 * Strings for component 'payment', language 'sv', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arkiverad';
$string['accountconfignote'] = 'Betaltjänst för det här kontot kommer att konfigureras separat';
$string['accountdeleteconfirm'] = 'Om det här kontot har tidigare inbetalningar arkiveras kontot. I annat fall kommer dess konfigurationsdata att tas bort permanent. Är du säker på att du vill fortsätta?';
$string['accountidnumber'] = 'ID-nummer';
$string['accountidnumber_help'] = 'ID-numret används endast när kontot matchas mot externa system och visas inte någonstans på webbplatsen. Om kontot har ett officiellt kodnamn kan det anges, annars kan fältet lämnas tomt.';
$string['accountname'] = 'Kontonamn';
$string['accountname_help'] = 'Hur detta konto kommer att identifieras för lärare eller chefer som konfigurerar betalningar (till exempel i pluginmodulen för kursregistrering)';
$string['accountnotavailable'] = 'Ej tillgängligt';
$string['createaccount'] = 'Skapa konto för betalningar';
$string['deleteorarchive'] = 'Ta bort eller arkivera';
$string['editpaymentaccount'] = 'Redigera betalkonto';
$string['eventaccountcreated'] = 'Betalkonto skapat';
$string['eventaccountdeleted'] = 'Betalkonto borttaget';
$string['eventaccountupdated'] = 'Betalkonto uppdaterat';
$string['feeincludesurcharge'] = '{$a->fee} (inkluderar en avgift på {$a->surcharge}% för denna betalmetod)';
$string['gatewaycannotbeenabled'] = 'Det går inte att aktivera betaltjänsten eftersom konfigurationen av den inte är klar.';
$string['gatewaydisabled'] = 'Inaktiverad';
$string['gatewayenabled'] = 'Aktiverad';
$string['gatewaynotfound'] = 'Betaltjänst kunde inte hittas';
$string['gotomanageplugins'] = 'Aktivera eller inaktivera betaltjänster och ställ in avgifter via {$a}.';
$string['gotopaymentaccounts'] = 'Du kan skapa flera konton genom att använda valfri betaltjänst på sidan {$a}.';
$string['hidearchived'] = 'Dölj arkiverade';
$string['noaccountsavilable'] = 'Det finns inga betalkonton.';
$string['nocurrencysupported'] = 'Inga betalningar och valuta stöds. Vänligen kontrollera att minst en betaltjänst är aktiverad.';
$string['nogateway'] = 'Det finns ingen betaltjänst som kan användas.';
$string['nogatewayselected'] = 'Du måste först välja en betaltjänst.';
$string['paymentaccount'] = 'Betalkonto';
$string['paymentaccounts'] = 'Betalkonton';
$string['paymentaccountsexplained'] = 'Skapa ett eller flera betalkonton för den här webbplatsen. Varje konto inkluderar konfiguration av tillgängliga betaltjänster. Den person som konfigurerar betalningar på webbplatsen (till exempel betalning vid kursregistreringar) kommer att kunna välja från de tillgängliga kontona.';
$string['payments'] = 'Betalningar';
$string['privacy:metadata:database:payments'] = 'Information om inbetalningarna.';
$string['privacy:metadata:database:payments:amount'] = 'Inbetalt belopp';
$string['privacy:metadata:database:payments:currency'] = 'Valuta';
$string['privacy:metadata:database:payments:gateway'] = 'Betaltjänst som användes vid inbetalning.';
$string['privacy:metadata:database:payments:timecreated'] = 'Tidpunkt för inbetalning.';
$string['privacy:metadata:database:payments:timemodified'] = 'Tidpunkt för senaste uppdateringen av inbetalningsinformationen.';
$string['privacy:metadata:database:payments:userid'] = 'Användare som gjorde inbetalningen.';
$string['restoreaccount'] = 'Återställ';
$string['selectpaymenttype'] = 'Välj betalmetod';
$string['showarchived'] = 'Visa arkiverade';
$string['supportedcurrencies'] = 'Valutor som stöds';
$string['surcharge'] = 'Avgift (i %)';
$string['surcharge_desc'] = 'Tilläggsavgiften är en extra procentsats som debiteras användare som väljer att betala med hjälp av denna betaltjänst.';
