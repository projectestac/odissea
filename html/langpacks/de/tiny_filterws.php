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
 * Strings for component 'tiny_filterws', language 'de', version '4.1'.
 *
 * @package     tiny_filterws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfilterws'] = 'Tag für Webservice-Filter hinzufügen';
$string['apply'] = 'Anwenden';
$string['filteruseragent'] = 'Filtern nach User-Agent';
$string['filteruseragent_help'] = 'Wenn ein Wert angegeben ist, werden die ausgewählten Inhalte nur angezeigt, wenn der User-Agent diesen Wert enthält. Der Wert wird in einen regulären Ausdruck umgewandelt.';
$string['insert'] = 'Einfügen';
$string['insertfilterws'] = 'Webservice-Filter hinzufügen';
$string['origin'] = 'Ursprung';
$string['origin_help'] = 'Web: Nur im Browser anzeigen.<br>Webservice: Nur in Webservice anzeigen, z.B. in der Moodle-App.<br>Beliebig: Für jeden Ursprung anzeigen.';
$string['originany'] = 'Alle';
$string['originweb'] = 'Web';
$string['originws'] = 'Webservice';
$string['pluginname'] = 'Webservice-Filter für TinyMCE';
$string['predefined'] = 'Vordefinierte Filter';
$string['predefined_desc'] = 'Liste der vordefinierten Filter, die alle Nutzer/innen verwenden können, wenn sie den TinyMCE-Editor benutzen.

Geben Sie jeden Filter in einer neuen Zeile mit folgendem Format ein: anzuzeigender Name, Ursprung (Web, ws oder beliebig) und User-Agent (optional), getrennt durch senkrechte Striche. Zum Beispiel:
<pre>
     Moodle-App|ws|MoodleMobile
</pre>';
$string['privacy:metadata'] = 'Das Plugin tiny_filterws speichert keine personenbezogenen Daten.';
$string['settings'] = 'Einstellungen für Webservice-Filter';
