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
 * Strings for component 'sms', language 'lt', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Veiksmai';
$string['countrycode'] = 'Numatytasis šalies kodas';
$string['countrycode_help'] = 'Šalies kodas, pridedamas prie telefono numerių, jei naudotojai neįveda savo šalies kodo. Įveskite numerį be pradinio simbolio „+“.';
$string['createnewgateway'] = 'Sukurti naują SMS sąsają';
$string['delete_sms_gateway'] = 'Ištrinti SMS sąsają';
$string['delete_sms_gateway_confirmation'] = 'Taip ištrinsite {$a->gateway} SMS tinklų sąsają.';
$string['edit_sms_gateway'] = 'Redaguoti {$a->gateway} SMS sąsają';
$string['gateway'] = 'Sąsaja';
$string['gateway_name'] = 'Sąsajos pavadinimas';
$string['manage_sms_gateways'] = 'Valdyti SMS sąsajas';
$string['phonenumbernotvalid'] = 'Neatpažįstamas telefono numerio formatas: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Saugo SMS žinutes';
$string['privacy:metadata:sms_messages:content'] = 'Pranešimo tekstas';
$string['privacy:metadata:sms_messages:id'] = 'Pranešimo ID';
$string['privacy:metadata:sms_messages:recipient'] = 'Telefono numeris, į kurį buvo išsiųsta žinutė';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Naudotojas, kuriam buvo išsiųstas pranešimas, jei žinomas';
$string['privacy:metadata:sms_messages:status'] = 'Pranešimo būsena';
$string['privacy:metadata:sms_messages:timecreated'] = 'Pranešimo sukūrimo laikas';
$string['privacy:sms:sensitive_not_shown'] = 'Šio pranešimo turinys nebuvo išsaugotas, nes buvo pažymėta, kad jame yra neskelbtino turinio.';
$string['select_sms_gateways'] = 'SMS tinklų sąsajos teikėjas';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Negalima ištrinti {$a->gateway} SMS tinklų sąsajos. Tinklų sąsaja yra naudojama arba yra duomenų bazės problema. Patikrinkite, ar tinklų sąsaja yra aktyvi, arba kreipkitės pagalbos į duomenų bazės administratorių.';
$string['sms_gateway_deleted'] = '{$a->gateway} SMS tinklų sąsaja ištrinta';
$string['sms_gateway_disable_failed'] = 'Nepavyksta išjungti SMS tinklų sąsajos. Tinklų sąsaja yra naudojama arba yra duomenų bazės problema. Patikrinkite, ar tinklų sąsaja yra aktyvi, arba kreipkitės pagalbos į duomenų bazės administratorių.';
$string['sms_gateways'] = 'SMS tinklų sąsajos';
$string['sms_gateways_info'] = 'Sukurkite ir tvarkykite SMS tinklo sąsajas, kad galėtumėte siųsti SMS žinutes iš savo svetainės.';
$string['status:gateway_failed'] = 'Tinklų sąsajai nepavyko išsiųsti pranešimo';
$string['status:gateway_not_available'] = 'Tinklų sąsaja nėra prieinama pranešimui siųsti';
$string['status:gateway_queued'] = 'Pranešimas yra įtrauktas į eilę, kurią turi išsiųsti tinklų sąsaja';
$string['status:gateway_rejected'] = 'Tinklų sąsaja atmetė pranešimą';
$string['status:gateway_sent'] = 'Tinklų sąsaja išsiuntė pranešimą';
$string['status:message_over_size'] = 'Pranešimas yra per didelis, kad jį išsiųstų tinklų sąsaja';
$string['status:unknown'] = 'Nepavyksta nustatyti pranešimo būsenos';
