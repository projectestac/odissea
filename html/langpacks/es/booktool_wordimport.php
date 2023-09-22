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
 * Strings for component 'booktool_wordimport', language 'es', version '4.1'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'No se pudo abrir el archivo temporal <b>{$a}</b>';
$string['embeddedimageswarning'] = 'Advertencia: Para que las imágenes incrustadas se manejen adecuadamente, este archivo se debe abrir con Word 2020 o Word 365.';
$string['encodedimageswarning'] = 'Advertencia: este archivos contiene imágenes codificadas. Consulte <a href="http://www.moodle2word.net/mod/page/view.php?id=143"> para obtener más información sobre cómo volver a convertirlas en imágenes incrustadas</a>.';
$string['exportbook'] = 'Exportar libro a Microsoft Word';
$string['exportchapter'] = 'Exportar este capítulo a Microsoft Word';
$string['exportformat'] = 'Formato de exportación.';
$string['exportformat_desc'] = 'Formato de exportación.';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Elija formato compatible con Word 2020/365 si tiene acceso a Word 2019, Word 2020 o Word 365. En caso contrario, elija Word 2010, que requiere una plantilla externa de Word para poder convertir imágenes a un formato adecuado. Vea <a href="http://www.moodle2word.net/mod/page/view.php?id=143">Más información sobre cómo convertirlas de nuevo a imágenes incrustadas</a>.';
$string['heading1stylelevel'] = 'Nivel de encabezado del elemento para stilo Heading 1 (Encabezado 1)';
$string['heading1stylelevel_desc'] = 'Nivel de encabezado HTML de elemento donde debería mapearse el estilo Word "Heading 1 (Encabezado 1)"';
$string['importchapters'] = 'Importar desde Microsoft Word';
$string['insertionpoint'] = 'Insertar antes del capítulo actual';
$string['insertionpoint_help'] = 'Insertar contenido antes del capítulo actual, manteniendo todo el contenido existente';
$string['nochapters'] = 'No se encontraron capítulos de libro, así que no se puede exportar a Microsoft Word.';
$string['pluginname'] = 'Importación/exportación de archivo Microsoft Word (Libro)';
$string['privacy:metadata'] = 'La herramienta de importar/exportar archivos de Microsoft Word no almacena datos personales.';
$string['replacebook'] = 'Reemplazar libro';
$string['replacebook_help'] = 'Borrar el contenido actual del libro antes de importar';
$string['replacechapter'] = 'Reemplazar el capítulo actual';
$string['replacechapter_help'] = 'Reemplazar el capítulo actual con el primer capítulo del archivo, pero mantener otros capítulos';
$string['settings'] = 'Ajustes de importación/exportación de archivo Microsoft Word (Libro)';
$string['splitonsubheadings'] = 'Crear subcarpetas basadas en subencabezados';
$string['splitonsubheadings_help'] = 'Los subcapítulos se crearán con los estilos "Encabezado 2/Heading 2"';
$string['stylesheetunavailable'] = 'Hoja de estilo XSLT <b>{$a}</b> no disponible';
$string['transformationfailed'] = 'Falló la transformación XSLT';
$string['wordfile'] = 'Archivo Microsoft Word';
$string['wordfile_help'] = 'Archivo de subida <i>.docx</i> guardado desde Microsoft Word o LibreOffice';
$string['wordimport:export'] = 'Exportar archivo Microsoft Word';
$string['wordimport:import'] = 'Importar archivo Microsoft Word';
$string['xsltunavailable'] = 'Necesita tener instalada la biblioteca XSLT en PHP para guardar este archivo Word';
