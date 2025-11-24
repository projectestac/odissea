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
 * Strings for component 'sms', language 'nl', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acties';
$string['countrycode'] = 'Standaard landcode';
$string['countrycode_help'] = 'De landcode om aan telefoonnummers toe te voegen als gebruikers hun eigen landcode niet invullen. Geeft het nummer zonder het +-symbool';
$string['createnewgateway'] = 'Maak een nieuwe SMS-gateway';
$string['delete_sms_gateway'] = 'Verwijder SMS-gateway';
$string['delete_sms_gateway_confirmation'] = 'Dit zal {$a->gateway} SMS-gateway verwijderen';
$string['edit_sms_gateway'] = 'Bewerk{$a->gateway} SMS-gateway';
$string['gateway'] = 'Gateway';
$string['gateway_name'] = 'Naam gateway';
$string['manage_sms_gateways'] = 'Beheer SMS gateways';
$string['phonenumbernotvalid'] = 'Formaat van telefoonnummer niet herkend: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Bewaar door SMS verstuurde berichten';
$string['privacy:metadata:sms_messages:content'] = 'De berichttekst';
$string['privacy:metadata:sms_messages:id'] = 'De ID van het bericht';
$string['privacy:metadata:sms_messages:recipient'] = 'Het telefoonnummer waarnaar de SMS gestuurd werd';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'De gebruiker waarnaar de SMS gestuurd werd, indien bekend';
$string['privacy:metadata:sms_messages:status'] = 'De status van het bericht';
$string['privacy:metadata:sms_messages:timecreated'] = 'Het tijdstip waarop het bericht gemaakt werd';
$string['privacy:sms:sensitive_not_shown'] = 'De inhoud van dit bericht werd niet bewaard omdat het gemarkeerd werd als vertrouwelijk';
$string['select_sms_gateways'] = 'SMS gateway provider';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Kan de {$a->gateway} SMS-gateway niet verwijderen. De gateway is in gebruik of er is een databankprobleem. Controleer of de gateway actief is of neem contact op met je databankbeheerder voor hulp.';
$string['sms_gateway_deleted'] = '{$a->gateway} SMS-gateway is verwijderd';
$string['sms_gateway_disable_failed'] = 'Kan de {$a->gateway} SMS-gateway niet uitschakelen. De gateway is in gebruik of er is een databankprobleem. Controleer of de gateway actief is of neem contact op met je databankbeheerder voor hulp.';
$string['sms_gateways'] = 'SMS-gateways';
$string['sms_gateways_info'] = 'Maak en beheer SMS-gateways om SMS-berichten te sturen vanaf je site.';
$string['status:gateway_failed'] = 'De gateway kon het bericht niet versturen';
$string['status:gateway_not_available'] = 'De gateway is niet beschikbaar om dit bericht te versturen';
$string['status:gateway_queued'] = 'Het bericht staat in de wachtrij om door de gateway verstuurd te worden';
$string['status:gateway_rejected'] = 'De gateway heeft dit bericht geweigerd';
$string['status:gateway_sent'] = 'Het bericht is verstuurd door de gateway';
$string['status:message_over_size'] = 'Het bericht is te groot om door de gateway verstuurd te worden';
$string['status:unknown'] = 'Kon de status van het bericht niet bepalen';
