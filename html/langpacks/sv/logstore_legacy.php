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
 * Strings for component 'logstore_legacy', language 'sv', version '4.5'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Äldre händelsetyp loggad';
$string['loglegacy'] = 'Data för logghändelse (äldre format)';
$string['loglegacy_help'] = 'Denna plugin registrerar loggdata i den äldre loggtabellen (mdl_log). Denna funktionalitet har ersatts av nyare, rikare och effektivare loggning, så du bör bara köra denna plugin om du har gamla anpassade rapporter som direkt frågar efter den gamla loggtabellen. Skrivning till de äldre loggarna kommer att öka belastningen, så det rekommenderas att du inaktiverar denna plugin av prestandaskäl om den inte behövs.';
$string['pluginname'] = 'Äldre logg';
$string['pluginname_desc'] = 'En loggnings-plugin som lagrar loggposter i den ädre loggtabellen.';
$string['privacy:metadata:log'] = 'En samling tidigare händelser';
$string['privacy:metadata:log:action'] = 'En beskrivning av åtgärden';
$string['privacy:metadata:log:info'] = 'Ytterligare information';
$string['privacy:metadata:log:ip'] = 'IP-adressen som användes vid tidpunkten för händelsen';
$string['privacy:metadata:log:time'] = 'Tidpunkten då åtgärden genomfördes';
$string['privacy:metadata:log:url'] = 'URL som är relaterad till händelsen';
$string['privacy:metadata:log:userid'] = 'ID för användaren som utförde åtgärden';
$string['taskcleanup'] = 'Städa upp loggtabell i gamla formatet';
