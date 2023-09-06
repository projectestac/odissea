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
 * Strings for component 'logstore_legacy', language 'nl', version '4.1'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Verouderde gebeurtenis gelogged.';
$string['loglegacy'] = 'Log oude data';
$string['loglegacy_help'] = 'Deze plugin bewaart de log data in de oude logtabel (mdl_log). Deze functionaliteit is vervangen door nieuwe, rijkere en meer efficiënte logging-plugins.  Je hebt deze plugin dus alleen nodig als je oude aangepaste rapporten hebt die rechtstreeks de oude log-tabel bevragen. Het schrijven van deze verouderde logs zal de belasting verhogen. Het wordt dus aangeraden om deze plugin uitgeschakeld te laten voor een betere performantie als je hem niet nodig hebt';
$string['pluginname'] = 'Oude logs';
$string['pluginname_desc'] = 'Een plugin die de logs bewaart in de oude logtable';
$string['privacy:metadata:log'] = 'Een verzameling van vorige evenementen';
$string['privacy:metadata:log:action'] = 'Een beschrijving van de actie';
$string['privacy:metadata:log:info'] = 'Extra informatie';
$string['privacy:metadata:log:ip'] = 'Het IP-adres dat werd gebruikt op het moment van het evenement';
$string['privacy:metadata:log:time'] = 'Het tijdstip waarop de actie plaatsvond';
$string['privacy:metadata:log:url'] = 'De URL, gerelateerd aan de gebeurtenis';
$string['privacy:metadata:log:userid'] = 'De ID van die gebruiker die de actie uitvoerde';
$string['taskcleanup'] = 'Opschonen oude logtabel';
