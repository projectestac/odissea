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
 * Strings for component 'filter_mathjaxloader', language 'sv', version '3.11'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Ytterligare ekvationsavgränsare';
$string['additionaldelimiters_help'] = 'MathJax-filtret parsar text för ekvationer som finns i avgränsare.

Listan över de avgränsartecken som stöds kan läggas till här (t.ex. använder <tt>AsciiMath</tt> tecknet "`"). Avgränsare kan innehålla flera tecken och flera avgränsare kan separeras med kommatecken.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax-adress';
$string['httpsurl_help'] = 'Fullständig URL till MathJax-biblioteket.';
$string['localinstall'] = 'Lokal MathJax-installation';
$string['localinstall_help'] = 'Standardkonfigurationen MathJax använder CDN-versionen av MathJax, men MathJax kan installeras lokalt om det behövs.

Detta kan vara användbart för att spara bandbredd eller på grund av lokala proxybegränsningar.

Om du vill använda en lokal installation av MathJax laddar du först ned hela MathJax-biblioteket från https://www.mathjax.org/. Installera den sedan på en webbserver. Uppdatera slutligen MathJax-filterinställningarna <tt>httpurl</tt> och/eller <tt>httpsurl</tt> för att peka på den lokala MathJax.js URL:en.';
$string['mathjaxsettings'] = 'MathJax-konfiguration';
$string['mathjaxsettings_desc'] = 'Standardkonfigurationen MathJax bör fungera för de flesta användare, men MathJax är mycket konfigurerbar och något av de vanliga MathJax-konfigurationsalternativen kan läggas till här.';
$string['privacy:metadata'] = 'Pluginmodulen MathJax lagrar ingen personinformation.';
$string['texfiltercompatibility'] = 'Kompabilitet med TeX-filter';
$string['texfiltercompatibility_help'] = 'MathJax-filtret kan användas som ersättning för TeX-notationsfiltret.

För att stödja alla avgränsare som stöds av TeX-notationsfiltret konfigureras MathJax för att visa alla ekvationer "infogade" i texten.';
