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
 * Strings for component 'tiny_filterws', language 'en', version '4.5'.
 *
 * @package     tiny_filterws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfilterws'] = 'Add WebService filter tag';
$string['apply'] = 'Apply';
$string['filteruseragent'] = 'Filter by User Agent';
$string['filteruseragent_help'] = 'If a value is provided, the selected content will only be displayed if the User Agent contains this value. The value will be converted to a regular expression.';
$string['insert'] = 'Insert';
$string['insertfilterws'] = 'Insert Web Service filter';
$string['origin'] = 'Origin';
$string['origin_help'] = 'Web: Only display in browser.<br>Web Service: Only display in a Web Service client, like the Moodle app.<br>Any: Display for all origins.';
$string['originany'] = 'Any';
$string['originweb'] = 'Web';
$string['originws'] = 'Web Service';
$string['pluginname'] = 'WebService Filter for TinyMCE';
$string['predefined'] = 'Predefined filters';
$string['predefined_desc'] = 'List of predefined filters that all users will be able to use when using the TinyMCE editor.

Enter each filter on a new line with format: name to display, origin (web, ws or any) and User Agent (optional), separated by pipe characters. For example:
<pre>
    Moodle App|ws|MoodleMobile
</pre>';
$string['privacy:metadata'] = 'The tiny_filterws plugin does not store any personal data.';
$string['settings'] = 'WebService Filter settings';
