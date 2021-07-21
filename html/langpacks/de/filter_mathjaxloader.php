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
 * Strings for component 'filter_mathjaxloader', language 'de', version '3.11'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Weitere Gleichungsbegrenzer';
$string['additionaldelimiters_help'] = 'Der MathJax-Filter durchsucht den Text nach Gleichungen, die innerhalb von Begrenzungszeichen stehen.

Die Liste der erlaubten Begrenzungszeichen kann hier eingefügt werden (beispielsweise verwendet AsciiMath `). Begrenzer können aus mehreren Zeichen bestehen, mehrere Einträge werden durch Kommas getrennt.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL';
$string['httpsurl_help'] = 'Vollständige URL zur MathJax Bibliothek';
$string['localinstall'] = 'Lokale MathJax Installation';
$string['localinstall_help'] = 'Die MathJax-Konfiguration verwendet die CDN Version von MathJax. MathJax kann jedoch auch lokal installiert werden.

Sinnvoll ist dies, um Bandbreite einzusparen oder um Proxy bedingte Beschränkungen zu umgehen.

Um MathJax lokal zu installieren, laden Sie die Bibliothek von https://www.mathjax.org herunter und installieren Sie sie auf einem Webserver. Ändern Sie danach die Filter-Einstellungen httpurl und/oder httpsurl, um auf die lokale Version zu verweisen.';
$string['mathjaxsettings'] = 'MathJax Konfiguration';
$string['mathjaxsettings_desc'] = 'Die voreingestellte MathJax Konfiguration ist in den meisten Fällen passend, aber MathJax ist in hohem Maße konfigurierbar. Alle Standardoptionen können hier hinzugefügt werden.';
$string['privacy:metadata'] = 'Das MathJax-Plugin speichert keine personenbezogenen Daten.';
$string['texfiltercompatibility'] = 'TeX-Filter Kompatibilität';
$string['texfiltercompatibility_help'] = 'Der MathJax-Filter kann als Ersatz des TeX-Filters verwendet werden.

Um alle Begrenzerzeichen des TeX-Filters zu nutzen, wird MathJax so konfiguriert, dass alle Gleichungen \'inline\' im Text angezeigt werden.';
