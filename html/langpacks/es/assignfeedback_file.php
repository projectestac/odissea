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
 * Strings for component 'assignfeedback_file', language 'es', version '3.11'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = '¿Subir uno o más ficheros de retroalimentación para todos los usuarios seleccionados?';
$string['batchuploadfiles'] = 'Subir ficheros de retroalimentación para varios usuarios';
$string['batchuploadfilesforusers'] = 'Mandar ficheros de retroalimentación a {$a} usuarios seleccionados.';
$string['configmaxbytes'] = 'Tamaño máximo de fichero';
$string['confirmuploadzip'] = 'Confirmar subida zip';
$string['countfiles'] = '{$a} ficheros';
$string['default'] = 'Habilitado por defecto';
$string['default_help'] = 'Si se activa la opción, este método de retroalimentación será habilitado por defecto para todos las asignaciones nuevas.';
$string['enabled'] = 'Fichero retroalimentación';
$string['enabled_help'] = 'Si está habilitado, el profesor podrá subir ficheros con retroalimentación cuando esté evaluando las tareas. Estos archivos pueden ser, sin estar limitados a estos ejemplos, los propios envíos de los estudiantes con marcas, documentos con comentarios o archivos de audio.';
$string['feedbackfileadded'] = 'Nuevo archivo de retroalimentación "{$a->filename}" para estudiante "{$a->student}"';
$string['feedbackfileupdated'] = 'Archivo de retroalimentación modificado "{$a->filename}" para estudiante "{$a->student}"';
$string['feedbackzip'] = 'Archivo ZIP con archivos de retroalimentación';
$string['feedbackzip_help'] = 'Un archivo ZIP que contiene una lista de archivos de retroalimentación para uno o más estudiantes. Los archivos de retroalimentación serán asignados a los estudiantes basándose en el ID del participante que debería ser la segunda parte de cada nombre de archivo inmediatamente después del nombre completo de los usuarios. Esta convención para los nombres se emplea al descargar las entregas, de tal forma que se puede usar la opción "Descargar todas las entregas", realizar las correcciones a algunos archivos y después comprimir de nuevo los archivos y subirlos mediante esta opción. Los archivos que no tengan cambios serán ignorados.';
$string['file'] = 'Archivos de retroalimentación';
$string['filesadded'] = 'Archivos de retroalimentación añadidos: {$a}';
$string['filesupdated'] = 'Archivos de retroalimentación actualizados: {$a}';
$string['importfeedbackfiles'] = 'Importar archivo(s) de retroalimentación';
$string['maxbytes'] = 'Tamaño máximo de archivo';
$string['maxfiles'] = 'Número máximo de archivos subidos';
$string['maximumsize'] = 'Tamaño máximo de archivo';
$string['moreusers'] = '{$a} más...';
$string['nochanges'] = 'Sin cambios';
$string['pluginname'] = 'Archivo de retroalimentación';
$string['privacy:metadata:filepurpose'] = 'Archivos de retroalimentación del profesor para el estudiante.';
$string['privacy:path'] = 'Archivos de retroalimentación';
$string['selectedusers'] = 'Usuarios seleccionados';
$string['uploadfiles'] = 'Mandar archivos de retroalimentación';
$string['uploadzip'] = 'Subir múltiples archivos de retroalimentación en un ZIP';
$string['uploadzipsummary'] = 'Archivos de retroalimentación importados desde un ZIP';
$string['userswithnewfeedback'] = 'Usuarios con retroalimentaciones actualizadas: {$a}';
