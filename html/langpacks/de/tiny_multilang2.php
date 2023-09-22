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
 * Strings for component 'tiny_multilang2', language 'de', version '4.1'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fallbackspantag'] = '&lt;span&gt;-Tags unterstützen';
$string['fallbackspantag_desc'] = 'Zusätzlich zur {mlang}-Syntax sind die herkömmlichen &lt;span class="multilang"&gt;-Tags weiterhin erlaubt.';
$string['helplinktext'] = 'Multi-Language-Content (v2)';
$string['highlight'] = 'Trennzeichen hervorheben';
$string['highlight_desc'] = 'Die Trennzeichen für sprachabhängige Inhalte sollen im Editor hervorgehoben werden (z.B. {mlang XX} und {mlang}).';
$string['highlightcss'] = 'CSS für Sprach-Tag';
$string['highlightcss_desc'] = 'CSS zum Hervorheben der Trennzeichen für die sprachabhängigen Inhalte.

Wenn Sie die Sprache anzeigen möchten, die in einem sprachabhängigen Block verwendet wird, kann folgendes CSS verwendet werden. Dieses Beispiel ist für Deutsch. Die Farben sind eventuell nicht optimal gewählt.

<pre>
.multilang-begin:lang(de):before {
    content: "de";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['multilang2:desc'] = 'Unterstützung zum Hinzufügen von sprachabhängigen Inhalten. Der Filter "Multi-Language-Content (v2)" muss aktiviert sein.';
$string['multilang2:language'] = 'Sprache';
$string['multilang2:other'] = 'Andere';
$string['multilang2:viewlanguagemenu'] = 'Sprachen als Dropdown-Menü im Editor anzeigen';
$string['pluginname'] = 'Multi-Language-Content (v2)';
$string['privacy:metadata'] = 'Das Plugin "Multi-Language-Content (v2)" speichert keine personenbezogenen Daten.';
$string['requiremultilang2'] = 'Filter "Multi-Language-Content (v2)" notwendig';
$string['requiremultilang2_desc'] = 'Wenn diese Option aktiviert ist, wird das Sprachenmenü im Editor nur dann angezeigt, wenn der Filter Multi-Language-Content (v2) aktiv ist.';
$string['settings'] = 'Einstellungen Multi-Language-Content (v2)';
$string['showalllangs'] = 'Alle Sprachen anzeigen';
$string['showalllangs_desc'] = 'Wenn diese Option aktiviert ist, werden im Editor alle Sprachen angezeigt, die von Moodle unterstützt werden. Andernfalls werden nur die installierten und aktiven Sprachen angezeigt.';
