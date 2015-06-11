<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_mathjaxloader', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitadors d\'equació addicionals';
$string['additionaldelimiters_help'] = 'El filtre MathJax analitza el text en cerca d\'equacions contingudes entre caràcters delimitadors.

Aquí podeu modificar la llista de caràcters delimitadors reconeguts (per exemple AsciiMath utilitza `). Els delimitadors poden contenir múltiples caràcters i diversos delimitadors es poden separar per comes.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL HTTPS de MathJax';
$string['httpsurl_help'] = 'URL complet de la llibreria MathJax. S\'utilitza quan la pàgina es carrega mitjançant https (connexió segura).';
$string['httpurl'] = 'URL HTTP de MathJax';
$string['httpurl_help'] = 'URL complet de la llibreria MathJax. S\'utilitza quan la pàgina es carrega mitjançant http.';
$string['localinstall'] = 'Instal·lació local de MathJax';
$string['localinstall_help'] = 'La configuració per defecte de MathJax utilitza la versió CDN de MathJax, però MathJax es pot instal·lar localment si cal.

Això pot ser útil per a estalviar ample de banda o per restriccions d\'un proxy local.

Per a utilitzar una instal·lació local de MathJax, baixeu primer la biblioteca MathJax completa des de http://www.mathjax.org/. Després instal·leu-la en un servidor web. Finalment, actualitzeu els paràmetres httpurl i/o httpsurl del filtre MathJax per a apuntar a l\'URL local de MathJax.js';
$string['mathjaxsettings'] = 'Configuració de MathJax';
$string['mathjaxsettings_desc'] = 'La configuració per defecte de MathJax, hauria de resultar apropiada per a la majoria d\'usuaris, però MathJax és altament configurable i qualsevol de les opcions estàndard de configuració de MathJax es pot afegir aquí.';
$string['texfiltercompatibility'] = 'Compatibilitat del filtre TeX';
$string['texfiltercompatibility_help'] = 'El filtre MathJax es pot utilitzar com a substitut del filtre TeX.

A fi de permetre l\'ús de tots els delimitadors utilitzats peel filtre TeX, MathJax es configurarà per a mostrar totes les equacions inserides en el text.';
