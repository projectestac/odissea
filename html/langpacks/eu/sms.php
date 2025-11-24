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
 * Strings for component 'sms', language 'eu', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ekintzak';
$string['countrycode'] = 'Lehenetsitako herrialde-kodea';
$string['countrycode_help'] = 'Erabiltzaileak herrialde-kodea zehazten ez badu gehituko den herrialde-kodea. Idatzi zenbakia hasierako "+" sinboloa alde batera utzita.';
$string['createnewgateway'] = 'Sortu SMS atari berri bat';
$string['delete_sms_gateway'] = 'Ezabatu SMS ataria';
$string['delete_sms_gateway_confirmation'] = 'Ekintza honek {$a->gateway} SMS ataria ezabatuko du.';
$string['edit_sms_gateway'] = 'Editatu {$a->gateway} SMS ataria';
$string['gateway'] = 'Ataria';
$string['gateway_name'] = 'Atariaren izena';
$string['manage_sms_gateways'] = 'Kudeatu SMS atariak';
$string['phonenumbernotvalid'] = 'Telefono zenbakiaren formatua ez da ezagutzen: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'SMS bidez bidalitako mezuak gordetzen ditu';
$string['privacy:metadata:sms_messages:content'] = 'Mezuaren testua';
$string['privacy:metadata:sms_messages:id'] = 'Mezuaren IDa';
$string['privacy:metadata:sms_messages:recipient'] = 'Mezua bidali zeneko telefono-zenbakia';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Mezua bidali zeneko erabiltzailea, ezaguna bada';
$string['privacy:metadata:sms_messages:status'] = 'Mezuaren egoera';
$string['privacy:metadata:sms_messages:timecreated'] = 'Mezua sortu zeneko unea';
$string['privacy:sms:sensitive_not_shown'] = 'Mezu honen edukia ez da gorde eduki sentikorra izateagatik markatua izan zelako.';
$string['select_sms_gateways'] = 'SMS atariaren hornitzailea';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Ezin da {$a->gateway} SMS ataria ezabatu. Ataria erabiltzen ari da edo datu-baseko arazo bat dago. Egiaztatu ezazu ataria aktibo dagoen edo jarri harremanetan datu-baseko kudeatzailearekin.';
$string['sms_gateway_deleted'] = '{$a->gateway} SMS ataria ezabatu da';
$string['sms_gateway_disable_failed'] = 'Ezin da SMS ataria desgaitu. Ataria erabiltzen ari da edo datu-baseko arazo bat dago. Egiaztatu ezazu ataria aktibo dagoen edo jarri harremanetan datu-baseko kudeatzailearekin.';
$string['sms_gateways'] = 'SMS atariak';
$string['sms_gateways_info'] = 'Sortu eta kudeatu SMS atariak zure gunetik SMS mezuak bidali ahal izateko.';
$string['status:gateway_failed'] = 'Atariak mezua bidaltzean huts egin du';
$string['status:gateway_not_available'] = 'Ataria ez dago mezua bidaltzeko eskuragarri';
$string['status:gateway_queued'] = 'Mezua atariak bidaltzeko ilaratuta dago';
$string['status:gateway_rejected'] = 'Atariak mezua baztertu du';
$string['status:gateway_sent'] = 'Atariak mezua bidali du';
$string['status:message_over_size'] = 'Mezua atariak bidaltzeko luzeegia da';
$string['status:unknown'] = 'Ezin izan da mezuaren egoera zehaztu';
