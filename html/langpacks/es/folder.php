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
 * Strings for component 'folder', language 'es', version '4.1'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['contentheader'] = 'Contenido';
$string['display'] = 'Mostrar contenido de la carpeta';
$string['display_help'] = 'Si elige mostrar los contenidos de la carpeta en la página del curso no aparecerá el enlace a una página separada. La descripción solo se muestra si se elige \'Mostrar descripción en página de curso. Tenga en cuenta que las acciones de visualización de los usuarios no se pueden registrar en este caso.';
$string['displayinline'] = 'Mostrar en la página del curso';
$string['displaypage'] = 'Mostrar en una página diferente';
$string['dnduploadmakefolder'] = 'Descomprimir archivo y crear carpeta';
$string['downloadfolder'] = 'Descargar carpeta';
$string['eventallfilesdownloaded'] = 'Directorio descargado en formato Zip';
$string['eventfolderupdated'] = 'Carpeta actualizada';
$string['folder:addinstance'] = 'Añadir una nueva carpeta';
$string['folder:managefiles'] = 'Gestionar archivos en el recurso carpeta';
$string['folder:view'] = 'Ver el contenido de la carpeta';
$string['foldercontent'] = 'Archivos y subcarpetas';
$string['forcedownload'] = 'Forzar descarga de archivos';
$string['forcedownload_help'] = 'Si ciertos archivos, como imágenes o archivos HTML, deben mostrarse en el navegador en lugar de descargarse. Tenga en cuenta que, por razones de seguridad, la configuración solo debe estar desmarcada si todos los usuarios con la capacidad de administrar archivos en la carpeta son usuarios de confianza.';
$string['indicator:cognitivedepth'] = 'Carpeta cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso Carpeta.';
$string['indicator:cognitivedepthdef'] = 'Directorio cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje de participación cognitiva ofrecida por los recursos de Carpeta durante este intervalo de análisis (Niveles = Sin vista, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Carpeta social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso Carpeta.';
$string['indicator:socialbreadthdef'] = 'Directorio social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por los recursos de Carpeta durante este intervalo de análisis (Niveles = Sin participación, Participante solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Tamaño máximo de descarga del directorio (MB)';
$string['maxsizetodownload_help'] = 'El tamaño máximo del directorio para su descarga. Si está establecido a cero, el tamaño del directorio es ilimitado.';
$string['modulename'] = 'Carpeta';
$string['modulename_help'] = 'El recurso Carpeta permite al profesor mostrar un grupo de archivos relacionados dentro de una única carpeta. Se puede subir un archivo comprimido (zip) que se descomprimirá (unzip) posteriormente para mostrar su contenido, o bien, se puede crear una carpeta vacía y subir los archivos dentro de ella.

Una carpeta se puede usar para:

* Agrupar una serie de documentos sobre un tema, por ejemplo, un conjunto de exámenes de otros años en formato pdf, o una colección de archivos para crear un proyecto concreto por parte de los estudiantes.
* Crear un espacio de subida de archivos compartido entre los profesores del curso (se debería ocultar la carpeta a los alumnos para que lo vean solo los profesores)';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Carpetas';
$string['newfoldercontent'] = 'Nuevo directorio de contenido';
$string['noautocompletioninline'] = 'La finalización automática de la visualización de la actividad no se puede seleccionar junto con la opción "Mostrar en la página del curso"';
$string['page-mod-folder-view'] = 'Página principal de la carpeta';
$string['page-mod-folder-x'] = 'Cualquier página de la carpeta';
$string['pluginadministration'] = 'Administración de carpeta';
$string['pluginname'] = 'Carpeta';
$string['privacy:metadata'] = 'El complemento de recursos de carpeta no almacena ningún dato personal.';
$string['search:activity'] = 'Carpeta';
$string['showdownloadfolder'] = 'Mostrar opción de descargar carpeta';
$string['showdownloadfolder_help'] = 'Si se establece como \'sí\' se mostrará un botón que permitirá descargar los contenidos de la carpeta como un fichero zip.';
$string['showexpanded'] = 'Mostrar subcarpetas expandidas';
$string['showexpanded_help'] = 'Si se establece como \'sí\' se mostrarán las subcarpetas expandidas por defecto. Si no, las subcarpetas se mostrarán colapsadas.';
