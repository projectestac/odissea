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
 * Strings for component 'filter_mathjaxloader', language 'gl', branch 'MOODLE_36_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitadores de ecuación adicionais';
$string['additionaldelimiters_help'] = 'O filtro MathJax analiza o texto para ecuacións contidas entre os caracteres delimitadores.

Aquí pódese engadir a lista de caracteres delimitadores recoñecidos (por exemplo, AsciiMath usa `). Os delimitadores poden conter múltiples caracteres e múltiples delimitadores poden ser separados por comas.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL de MathJax';
$string['httpsurl_help'] = 'URL completo á biblioteca MathJax.';
$string['localinstall'] = 'Instalación local de MathJax';
$string['localinstall_help'] = 'A configuración predeterminada de MathJax usa a versión CDN de MathJax, pero MathJax pódese instalar localmente se é necesario.

Isto pode ser útil para aforrar no largo de banda ou por restricións de proxy local.

Para usar unha instalación local de MathJax, primeiro descargue a biblioteca MathJax completa desde http://www.mathjax.org/. Logo instáleo nun servidor web. Finalmente, actualice as opcións de filtro MathJax httpurl e/ou httpsurl para apuntar o URL MathJax.js local.';
$string['mathjaxsettings'] = 'Configuración de MathJax';
$string['mathjaxsettings_desc'] = 'A configuración predeterminada de MathJax debería ser axeitada para a maioría dos usuarios, pero MathJax é altamente configurábel e aquí pode engadirse algunha das opcións de configuración MathJax.';
$string['privacy:metadata'] = 'O engadido MathJax non almacena ningún dato persoal.';
$string['texfiltercompatibility'] = 'Compatibilidade co filtro TeX';
$string['texfiltercompatibility_help'] = 'O filtro MathJax pode usarse como un substituto para o filtro de notación TeX.

Para admitir todos os delimitadores compatíbeis co filtro de notación TeX, MathJax configurarase para amosar todas as ecuacións en liña» co texto.';
