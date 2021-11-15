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
 * Strings for component 'fileconverter_unoconv', language 'es', version '3.11'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Ruta del conversor de documentos unoconv';
$string['pathtounoconv_help'] = 'Ruta al conversor de documentos unoconv. Se trata de un ejecutable capaz de convertir entre diferentes formatos de documento soportados por LibreOffice. Es opcional, pero si se especifica, Moode lo utilizará de forma automática para convertir entre diferentes formatos de documento. Se utiliza para dar soporte a un rango más amplio de formatos de ficheros para mejorar la característica de anotación PDF en tareas.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'El complemento de conversor de documentos Unoconv no almacena ningún dato personal.';
$string['test_unoconv'] = 'Probar la ruta de unoconv';
$string['test_unoconvdoesnotexist'] = 'La ruta de unoconv no se corresponde con un programa unoconv. Por favor revise los ajustes de ruta.';
$string['test_unoconvdownload'] = 'Descargar el fichero de prueba pdf convertido.';
$string['test_unoconvempty'] = 'La ruta de unoconv no está establecida. Por favor revise los ajustes de ruta.';
$string['test_unoconvisdir'] = 'La ruta de unoconv hace referencia a una carpeta, por favor incluya el programa unoconv en la ruta que ha especificado';
$string['test_unoconvnotestfile'] = 'No se encuentra el documento de prueba para convertirlo a PDF.';
$string['test_unoconvnotexecutable'] = 'La ruta de unoconv hace referencia a un fichero que no es ejecutable';
$string['test_unoconvok'] = 'Parece que la ruta de unoconv está correctamente configurada.';
$string['test_unoconvversionnotsupported'] = 'La versión de unoconv que ha instalado no está soportada.';
