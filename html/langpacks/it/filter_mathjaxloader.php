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
 * Strings for component 'filter_mathjaxloader', language 'it', version '4.1'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitatori equazione aggiuntivi';
$string['additionaldelimiters_help'] = 'Il filtro MathJax analizza il testo delle equazioni contenute all\'interno dei delimitatori.

È possibile impostare l\'elenco dei delimitatori riconosciuti (ad esempio  AsciiMath utilizza `). I delimitatori possono essere composti da più caratteri ed è possibile separare delimitatori diversi con le virgole.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL MathJax';
$string['httpsurl_help'] = 'L\'URL della libreria MathJax.';
$string['localinstall'] = 'Installazione MathJax locale';
$string['localinstall_help'] = 'La configurazione di default prevede l\'uso della versione CDN MathJAX, tuttavia MathJAX può anche essere installato localmente.

L\'installazione locale può essere utile ad esempio per limitare l\'utilizzo di banda o per ovviare a restrizioni dovute a proxy.

Per utilizzare un\'installazione locale di MathJAX è necessario scaricare l\'omonima libreria da http://www.mathjax.org/ ed installarla sul web server. Dopodiché sarà possibile modificare le impostazioni http o https del filtro MathJax per raggiungere l\'installazione MathJax locale.';
$string['mathjaxsettings'] = 'Configurazione MathJax';
$string['mathjaxsettings_desc'] = 'La configurazione di default di MathJax è adatta alla maggioranza dei casi, tuttavia MathJax è altamente configurabile ed è possibile configurare qualsiasi opzione standard di MathJax.';
$string['privacy:metadata'] = 'Il plugin "MathJax" non memorizza dati personali.';
$string['texfiltercompatibility'] = 'Compatibilità filtro TeX';
$string['texfiltercompatibility_help'] = 'Il filtro MathJax può essere utilizzato in sostituzione del filtro TeX.

Per supportare tutti i delimitatori supportati da TeX, il filtro MathJax sarà configurato per visualizzare le equazioni "inline" con  TeX.';
