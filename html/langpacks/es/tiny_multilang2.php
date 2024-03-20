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
 * Strings for component 'tiny_multilang2', language 'es', version '4.1'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['highlight'] = 'Destacar los delimitadores';
$string['highlight_desc'] = 'Destacar visualmente los delimitadores del contenido multi-idioma (esto es, {mlang XX} y {mlang}) en el editor WYSIWYG';
$string['highlightcss'] = 'CSS para los delimitadores';
$string['highlightcss_desc'] = 'CSS usado para destacar los delimitadores del contenido multi-idioma.

Si desea mostrar el idioma para los bloque multi-idioma, puede usar algo como lo siguiente (este ejemplo es para el idioma Euskera, seguramente los colores no son los mejores posibles):

<pre>
.multilang-begin:lang(eu):before {
    content: "eu";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['multilang2:desc'] = 'Ayuda a añadir contenido multi-idioma (necesita tener habilitado el filtro de Contenido Multi-Idioma (v2))';
$string['multilang2:language'] = 'Idioma';
$string['multilang2:other'] = 'otro';
$string['multilang2:viewlanguagemenu'] = 'Ver el menú desplegable de idiomas en el editor TinyMCE';
$string['pluginname'] = 'Contenido Multi-Idioma (v2)';
$string['privacy:metadata'] = 'El plugin Tiny Contenido Multi-Idioma (v2) no guarda datos personales.';
$string['requiremultilang2'] = 'Requerir el filtro de Contenido Multi-Idioma (v2)';
$string['requiremultilang2_desc'] = 'Si se habilita, el menú desplegable de selección de idiomas solo es visible cuando esté habilitado el filtro de Contenido Multi-Idioma (v2).';
$string['showalllangs'] = 'Mostrar todos los idiomas';
$string['showalllangs_desc'] = 'Si se habilita, el menú desplegable de selección de idiomas contendrá todos los idiomas soportados por Moodle. En caso contrario, sólo se mostrarán los idiomas instalados y habilitados.';
