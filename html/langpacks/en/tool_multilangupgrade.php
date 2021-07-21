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
 * Strings for component 'tool_multilangupgrade', language 'en', version '3.11'.
 *
 * @package     tool_multilangupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['multilangupgradeinfo'] = '<p>The multilang filter syntax was changed in 1.8 and so the &lt;lang&gt; tag is not supported any more.</p>
<p>Example: &lt;span lang="en" class="multilang"&gt;Hello!&lt;/span&gt;&lt;span lang="es" class="multilang"&gt;Hola!&lt;/span&gt;</p>
<p>Do you want to upgrade the syntax in all existing texts now?</p>';
$string['pluginname'] = 'Multilang upgrade';
$string['privacy:metadata'] = 'The Multilang upgrade plugin does not store any personal data.';
