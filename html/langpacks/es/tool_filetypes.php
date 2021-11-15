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
 * Strings for component 'tool_filetypes', language 'es', version '3.11'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Añadir un nuevo tipo de archivo';
$string['corestring'] = 'Cadena de idioma alternativa';
$string['corestring_help'] = 'Esta configuración puede ser utilizada para seleccionar una cadena de idioma diferente desde el fichero idioma principal mimetypes.php. Generalmente debe ser dejado en blanco. Para tipos personalizados, utilice el campo descripción.';
$string['defaulticon'] = 'Icono predeterminado para el tipo MIME';
$string['defaulticon_help'] = 'Si hay varias extensiones de archivo con el mismo tipo MIME, seleccione esta opción para una de las extensiones para que su icono se utilice al determinar un icono del tipo MIME.';
$string['delete_confirmation'] = '¿Está completamente seguro de que desea eliminar <strong>.{$a}</strong>?';
$string['deletea'] = 'Borrar {$a}';
$string['deletefiletypes'] = 'Eliminar un tipo de archivo';
$string['description'] = 'Descripción personalizada';
$string['description_help'] = 'Descripción simple del tipo de archivo, p. ej. \'Libro electrónico Kindle\'. Si su sitio admite varios idiomas y utiliza el filtro de varios idiomas, puede introducir etiquetas de varios idiomas en este campo para proporcionar una descripción en diferentes idiomas.';
$string['descriptiontype'] = 'Tipo de descripción';
$string['descriptiontype_custom'] = 'Descripción personalizada especificada en este formulario';
$string['descriptiontype_default'] = 'Por defecto (tipo MIME o la cadena de idioma correspondiente si está disponible)';
$string['descriptiontype_help'] = 'Existen tres formas posibles de indicar una descripción.

* El comportamiento por defecto utiliza el tipo MIME. Si existe una cadena de idioma en mimetypes.php correspondiente a ese tipo MIME, será utilizada; si no existe, se mostrará a los usuariosel propio tipo MIME.
* Puedes especificar una descripción personalizada en este formulario.
* Puedes especificar el nombre de una cadena de idioma en mimetypes.php para ser utilizada en vez del tipo MIME.';
$string['descriptiontype_lang'] = 'Cadena de idioma alternativa (desde mimetypes.php)';
$string['displaydescription'] = 'Descripción';
$string['editfiletypes'] = 'Editar un tipo de fichero existente';
$string['emptylist'] = 'No hay tipos de archivo definidos.';
$string['error_addentry'] = 'La extensión del tipo de archivo, descripción, tipo MIME, y un icono no deben contener saltos de línea ni caracteres de punto y coma.';
$string['error_defaulticon'] = 'Otra extensión de archivo con el mismo tipo MIME ya está marcada como el icono por defecto.';
$string['error_extension'] = 'La extensión del fichero <strong>{$a}</strong> ya existe o es inválida. Las extensiones de ficheros deben ser únicas y no deben contener caracteres especiales.';
$string['error_notfound'] = 'El tipo de fichero con extensión {$a} no puede ser hallado.';
$string['extension'] = 'Extensión';
$string['extension_help'] = 'Nombre de la extensión del fichero sin el punto, p. ej. \'mobi\'';
$string['groups'] = 'Tipos de grupos';
$string['groups_help'] = 'Listado opcional de los grupos de tipos de archivos a los que este tipo pertenece. Estos son categorías genéricas como \'documento\' o \'imagen\'.';
$string['icon'] = 'Icono del fichero';
$string['icon_help'] = 'Nombre de archivo de icono.

La lista de iconos se coge del directorio /pix/f dentro de su instalación de Moodle. Puede añadir iconos personalizados a este directorio si es necesario.';
$string['mimetype'] = 'tipo MIME';
$string['mimetype_help'] = 'Tipo MIME asociado a este tipo de archivo, p. ej.  \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Tipos de archivo';
$string['privacy:metadata'] = 'El complemento de tipos de archivo no almacena ningún dato personal.';
$string['revert'] = 'Restaurar {$a} a los ajustes por defecto de Moodle';
$string['revert_confirmation'] = '¿Está seguro de que quiere restaurar <strong>.{$a}</strong> a los ajustes por defecto de Moodle, descartando sus cambios?';
$string['revertfiletype'] = 'Restaura un tipo de fichero';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizado';
$string['source_deleted'] = 'Borrado';
$string['source_modified'] = 'Modificado';
$string['source_standard'] = 'Estándar';
