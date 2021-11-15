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
 * Strings for component 'filter_mathjaxloader', language 'es', version '3.11'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Separadores de ecuación adicionales';
$string['additionaldelimiters_help'] = 'El filtro MathJax analiza el texto para hallar ecuaciones entre los caracteres separadores.
La lista de caracteres separadores puede ser añadida aquí (por ejemplo, AsciiMath usa `). Los separadores pueden contener múltiples caracteres, y múltiples separadores serán separados con comas.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL de MathJax';
$string['httpsurl_help'] = 'URL completa de la biblioteca MathJax.';
$string['localinstall'] = 'Instalación local de MathJax';
$string['localinstall_help'] = 'La configuración por defecto de Mathax usa la versión CDN de Mathjax, pero MathJax se puede instalar localmente si es necesario.

Esto puede ser útil para ahorrar ancho de banda o por restricciones de un proxy local.

Para instalar MathJax localmente, primero debe descargar la biblioteca completa de MathJax de http://www.mathjax.org/. Después instálelo en un servidor web. Por último, actualice la configuración de filtros MathJax httpurl y/o httpsurl para indicar el URL del MathJax.js local.';
$string['mathjaxsettings'] = 'Configuración MathJax';
$string['mathjaxsettings_desc'] = 'La configuración de MathJax por defecto debería ser apropiada para cualquier usuario, pero MathJax admite muchas configuraciones y cualquier opción de la configuración de MathJax estándar puede añadirse aquí.';
$string['privacy:metadata'] = 'El complemento Mathjax no almacena ningún dato personal.';
$string['texfiltercompatibility'] = 'Compatibilidad del filtro TeX';
$string['texfiltercompatibility_help'] = 'El filtro MathJax puede usarse como un sustituto del filtro de notación de TeX.

Para soportar todos los separadores soportados por el filtro de notación de TeX, MathJax será configurado para mostrar todas las ecuaciones alineadas con el texto.';
