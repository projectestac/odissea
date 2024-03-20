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
 * Strings for component 'filter_mathjaxloader', language 'ro', version '4.1'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitatori de ecuații suplimentare';
$string['additionaldelimiters_help'] = 'Filtrul MathJax analizează textul pentru ecuațiile conținute în caractere delimitatoare.

Lista cu caracterele delimitator recunoscute poate fi adăugată aici (de exemplu, AsciiMath folosește `). Delimitatorii pot conține mai multe caractere și mai mulți delimitatori pot fi separați cu virgule.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL MathJax';
$string['httpsurl_help'] = 'URL complet către biblioteca MathJax.';
$string['localinstall'] = 'Instalare Local MathJax';
$string['localinstall_help'] = 'Configurația implicită MathJax utilizează versiunea CDN a MathJax, dar MathJax poate fi instalat local, dacă este necesar.

Acest lucru poate fi util pentru a economisi lățimea de bandă sau din cauza restricțiilor locale de proxy.

Pentru a utiliza o instalare locală a MathJax, descărcați mai întâi biblioteca completă MathJax de pe https://www.mathjax.org/. Apoi instalați-l pe un server web. Actualizați în cele din urmă setările filtrului MathJax httpurl și / sau httpsurl pentru a indica adresa URL locală MathJax.js.';
$string['mathjaxsettings'] = 'Configurare MathJax';
$string['mathjaxsettings_desc'] = 'Configurația implicită MathJax ar trebui să fie adecvată pentru majoritatea utilizatorilor, dar MathJax este extrem de configurabil și oricare dintre opțiunile standard de configurare MathJax pot fi adăugate aici.';
$string['privacy:metadata'] = 'Plugin-ul MathJax nu stochează date personale.';
$string['texfiltercompatibility'] = 'Compatibilitate TeX filter';
$string['texfiltercompatibility_help'] = 'Filtrul MathJax poate fi utilizat ca înlocuitor pentru filtrul de notație TeX.

Pentru a accepta toți delimitatorii acceptați de filtrul de notație TeX, MathJax va fi configurat pentru a afișa toate ecuațiile „în linie” cu textul.';
