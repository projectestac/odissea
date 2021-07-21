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
 * Strings for component 'book', language 'es', version '3.11'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Añadir un nuevo Capítulo';
$string['addafterchapter'] = 'Añadir un nuevo capítulo después de "{$a->title}"';
$string['book:addinstance'] = 'Añadir un nuevo libro';
$string['book:edit'] = 'Editar capítulos de libro';
$string['book:read'] = 'Ver libro';
$string['book:viewhiddenchapters'] = 'Ver capítulos de libro oculto';
$string['chapterandsubchaptersdeleted'] = 'El capítulo "{$a->title}" y sus {$a->subchapters} subcapítulos han sido borrados';
$string['chapterdeleted'] = 'El capítulo "{$a->title}" ha sido borrado';
$string['chapters'] = 'Capítulos';
$string['chaptertitle'] = 'Título del Capítulo';
$string['confchapterdelete'] = '¿Realmente quiere eliminar este Capítulo?';
$string['confchapterdeleteall'] = '¿Está seguro que quiere eliminar este capítulo y todos sus subcapítulos?';
$string['content'] = 'Contenido';
$string['customtitles'] = 'Títulos personalizados';
$string['customtitles_help'] = 'Los títulos de los capítulos se muestran automáticamente sólo en la tabla de contenido y como una cabecera encima del contenido.

Si se marca la opción "Títulos personalizados", el título del capítulo no se muestra como una cabecera encima del contenido. Se puede introducir un título diferente (puede que incluso más largo que el del capítulo) como parte del contenido.';
$string['deletechapter'] = 'Borrar capítulo "{$a}"';
$string['editchapter'] = 'Editar capítulo "{$a}"';
$string['editingchapter'] = 'Edición de capítulo';
$string['errorchapter'] = 'Error al leer el capítulo del libro.';
$string['eventchaptercreated'] = 'Capítulo creado';
$string['eventchapterdeleted'] = 'Capítulo eliminado';
$string['eventchapterupdated'] = 'Capítulo actualizado';
$string['eventchapterviewed'] = 'Capítulo visto';
$string['hidechapter'] = 'Ocultar capítulo "{$a}"';
$string['indicator:cognitivedepth'] = 'Libro cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso Libro.';
$string['indicator:cognitivedepthdef'] = 'Libro cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje de compromiso cognitivo ofrecido por las actividades de Libro durante este intervalo de análisis (Niveles = Sin ver, Ver)';
$string['indicator:socialbreadth'] = 'Libro social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso Libro.';
$string['indicator:socialbreadthdef'] = 'Libro social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Libro durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['modulename'] = 'Libro';
$string['modulename_help'] = 'El módulo libro permite crear material de estudio de múltiples páginas en formato libro, con capítulos y subcapítulos. El libro puede incluir contenido multimedia así como texto y es útil para mostrar grandes volúmenes de información repartido en secciones.

Un libro puede usarse

* Para mostrar material de lectura de los módulos individuales de estudio
* Como un manual para el personal del departamento
* Como un portafolio de trabajos de los estudiantes';
$string['modulenameplural'] = 'Libros';
$string['movechapterdown'] = 'Mover capítulo "{$a}" para abajo';
$string['movechapterup'] = 'Mover capítulo "{$a}" para arriba';
$string['navexit'] = 'Salir del libro';
$string['navimages'] = 'Imágenes';
$string['navnext'] = 'Siguiente';
$string['navnexttitle'] = 'Siguiente: {$a}';
$string['navoptions'] = 'Opciones disponibles para links de navegación';
$string['navoptions_desc'] = 'Opciones para mostrar la navegación en las páginas del libro';
$string['navprev'] = 'Anterior';
$string['navprevtitle'] = 'Anterior: {$a}';
$string['navstyle'] = 'Diseño de navegación';
$string['navstyle_help'] = '*Imágenes- Los iconos se utilizan para la navegación
*Texto- Los títulos de capítulos se usan para la navegación';
$string['navtext'] = 'Texto';
$string['navtoc'] = 'Solo tabla de contenidos';
$string['nocontent'] = 'Aún no se ha añadido contenido a este libro.';
$string['numbering'] = 'Numeración del capítulo';
$string['numbering0'] = 'Nada';
$string['numbering1'] = 'Númerica';
$string['numbering2'] = 'Viñetas';
$string['numbering3'] = 'Sangrado';
$string['numbering_help'] = '* Ninguno - los títulos de capítulos y subcapítulos no tienen formato
* Números - los capítulos y subcapítulos son numerados (1, 1.1, 1.2, 2, ...)
* Viñetas - los subcapítulos son indentados y son mostrados con viñetas
* Sangría - los subcapítulos son indentados';
$string['numberingoptions'] = 'Opciones de formato de capítulos disponibles';
$string['numberingoptions_desc'] = 'Seleccionar opciones de numeración que estaran disponibles al crear nuevos libros.';
$string['page-mod-book-x'] = 'Cualquier página del módulo Libro';
$string['pluginadministration'] = 'Administración del Libro';
$string['pluginname'] = 'Libro';
$string['previouschapter'] = 'Capítulo anterior';
$string['privacy:metadata'] = 'El módulo de actividad Libro no guarda información personal.';
$string['removeallbooktags'] = 'Eliminar todas las marcas del libro';
$string['search:activity'] = 'Libro - Información del recurso';
$string['search:chapter'] = 'Libro - capítulos';
$string['showchapter'] = 'Mostrar capítulo "{$a}"';
$string['subchapter'] = 'Subcapítulo';
$string['subchapternotice'] = '(Disponible una vez que el primer capítulo se haya creado)';
$string['subplugintype_booktool'] = 'Herramienta Libro';
$string['subplugintype_booktool_plural'] = 'Herramientas Libro';
$string['tagarea_book_chapters'] = 'Capítulos del libro';
$string['tagsdeleted'] = 'Las marcas del libro han sido eliminadas';
$string['toc'] = 'Tabla de contenidos';
$string['top'] = 'arriba';
