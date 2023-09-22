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
 * Strings for component 'resource', language 'es', version '4.1'.
 *
 * @package     resource
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Haga clic en {$a} para descargar el archivo.';
$string['clicktoopen2'] = 'Haga clic en {$a} para ver el archivo.';
$string['configdisplayoptions'] = 'Puede seleccionar cualquiera de las opciones disponibles (los ajustes existentes no se modificarán). Mantenga pulsada la tecla CTRL para seleccionar varios campos simultáneamente.';
$string['configframesize'] = 'Cuando se muestra una página web o un archivo cargado dentro de un marco (frame), este valor es el tamaño en píxeles del marco superior (que contiene la navegación).';
$string['configparametersettings'] = 'Configura el valor por defecto del panel de ajustes de parámetros en el formulario cuando se agregan nuevos recursos. Tras esta primera vez, se convierte en una preferencia del usuario individual.';
$string['configpopup'] = 'Cuando se agrega un recurso que puede mostrarse en un ventana emergente ("popup"), ¿esta opción se debe activar por defecto?';
$string['configpopupdirectories'] = 'Las ventanas "popup", ¿deben por defecto mostrar los enlaces del directorio?';
$string['configpopupheight'] = '¿Qué altura deben tener por defecto las ventanas "popup"?';
$string['configpopuplocation'] = 'Las ventanas "popup", ¿deben por defecto mostrar la barra de ubicación?';
$string['configpopupmenubar'] = 'Las ventanas "popup", ¿deben por defecto mostrar la barra de menú?';
$string['configpopupresizable'] = 'Las ventanas "popup", ¿deben por defecto ser redimensionables?';
$string['configpopupscrollbars'] = 'Las ventanas "popup", ¿deben por defecto mostrar las barras de desplazamiento?';
$string['configpopupstatus'] = 'Las ventanas "popup", ¿deben por defecto mostrar la barra de estado?';
$string['configpopuptoolbar'] = 'Las ventanas "popup", ¿deben por defecto mostrar la barra de herramientas?';
$string['configpopupwidth'] = '¿Qué ancho deben tener por defecto las ventanas "popup"?';
$string['contentheader'] = 'Contenido';
$string['displayoptions'] = 'Opciones para mostrar disponibles';
$string['displayselect'] = 'Mostrar';
$string['displayselect_help'] = 'Este ajuste, junto con el tipo de archivo, y siempre que el navegador permita incrustar código, determina cómo se muestra el archivo.
Las opciones pueden incluir:

* Automático - Se selecciona de forma automática la mejor opción para visualizar el archivo
* Incrustar - el fichero se muestra dentro de la página debajo de la barra de navegación junto con la descripción y cualquier otro bloque
* Forzar descarga - Se le pregunta al usuario si desea descargar el fichero
* Abrir - Sólo se muestra la dirección en la ventana del navegador
* En ventana emergente - La URL se muestra en una ventana nueva del navegador sin menús y sin barra de direcciones';
$string['displayselect_link'] = 'mod/file/mod';
$string['displayselectexplain'] = 'Elegir tipo (desafortunadamente no todos los tipos funcionan en todos los archivos).';
$string['dnduploadresource'] = 'Crear recurso archivo';
$string['encryptedcode'] = 'Código encriptado';
$string['filenotfound'] = 'Lo sentimos, el archivo no se ha encontrado.';
$string['filterfiles'] = 'Utilice filtros del contenido del archivo';
$string['filterfilesexplain'] = 'Seleccione el tipo de archivo que contiene el filtro. Esto puede causar problemas en algunos applets de Flash y Java. Por favor, asegúrese de que todos los archivos de texto están en UTF-8.';
$string['filtername'] = 'Auto-enlace de nombres de recursos';
$string['forcedownload'] = 'Forzar descarga';
$string['framesize'] = 'Altura del marco';
$string['indicator:cognitivedepth'] = 'Archivo cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso Archivo.';
$string['indicator:cognitivedepthdef'] = 'Archivo cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por los recursos de Archivo durante este intervalo de análisis (Niveles = Sin vista, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Archivo social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso Archivo.';
$string['indicator:socialbreadthdef'] = 'Archivo social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por los recursos de Archivo durante este intervalo de análisis (Niveles = Sin participación, Participante solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['legacyfiles'] = 'Migración de archivo antiguo de curso';
$string['legacyfilesactive'] = 'Activo';
$string['legacyfilesdone'] = 'Terminado';
$string['modifieddate'] = 'Actualizado  {$a}';
$string['modulename'] = 'Archivo';
$string['modulename_help'] = 'El módulo "Archivo" permite a los profesores proveer un archivo como un recurso del curso. Cuando sea posible, el archivo se mostrará dentro de la interfaz del curso; si no es el caso, se le preguntará a los estudiantes si quieren descargarlo. El recurso Archivo puede incluir archivos de soporte, por ejemplo, una página HTML puede tener incrustadas imágenes.

Observe que los estudiantes necesitan tener el software apropiado en sus dispositivos para poder abrir los archivos.

Un archivo puede utilizarse para:

* Compartir presentaciones utilizadas en clase.
* Incluir una mini-web como recurso del curso.
* Proveer a los estudiantes de borradores de archivos para que los editen y los envíen en sus tareas.';
$string['modulename_link'] = 'mod/resource/view';
$string['modulenameplural'] = 'Archivos';
$string['notmigrated'] = 'Este tipo de recurso heredado ({$a}) no ha sido trasladado aún.';
$string['optionsheader'] = 'Mostrar opciones';
$string['page-mod-resource-x'] = 'Cualquier página del módulo Archivo';
$string['pluginadministration'] = 'Administración del módulo archivo';
$string['pluginname'] = 'Recurso';
$string['popupheight'] = 'Altura (en píxels) de la ventana emergente';
$string['popupheightexplain'] = 'Especifica la altura por defecto de las ventanas emergentes.';
$string['popupresource'] = 'Este recurso debe aparecer en una ventana emergente';
$string['popupresourcelink'] = 'Si no, haga clic aquí: {$a}';
$string['popupwidth'] = 'Anchura (en píxels) de la ventana emergente';
$string['popupwidthexplain'] = 'Especifica la anchura por defecto de las ventanas emergentes.';
$string['printintro'] = 'Mostrar descripción del recurso';
$string['printintroexplain'] = '¿Mostrar la descripción del recurso debajo del contenido? Algunos tipos de visualización pueden no mostrar la descripción incluso aunque esté activada esa opción.';
$string['privacy:metadata'] = 'El complemento de recurso de archivo no almacena ningún dato personal.';
$string['resource:addinstance'] = 'Añadir un nuevo recurso';
$string['resource:exportresource'] = 'Exportar recurso';
$string['resource:view'] = 'Ver recurso';
$string['resourcecontent'] = 'Archivos y subcarpetas';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['search:activity'] = 'Archivo';
$string['selectmainfile'] = 'Por favor, seleccione el archivo principal haciendo clic en el icono junto a su nombre.';
$string['showdate'] = 'Mostrar la fecha de subida/modificación';
$string['showdate_desc'] = '¿Mostrar la fecha de subida/modificación en la página del curso?';
$string['showdate_help'] = 'Muestra la fecha de subida/modificación junto al enlace al archivo. Si hay varios archivos en el recurso, se muestra la fecha de subida/modificación del archivo principal.';
$string['showsize'] = 'Mostrar tamaño';
$string['showsize_desc'] = '¿Mostrar el tamaño del archio en la página del curso?';
$string['showsize_help'] = 'Muestra el tamaño del archivo, en el formato \'3 1 MB \', junto con el enlace al archivo.';
$string['showtype'] = 'Mostrar tipo';
$string['showtype_desc'] = '¿Mostrar tipo de archivo (ej. \'Documento de Texto\') en la página del curso?';
$string['showtype_help'] = 'Muestra el tipo de documento, tal que \'Documento de texto\',  al lado del enlace al archivo.

Si hay varios archivos en el recurso, se muestra el tipo del archivo inicial.
Si el tipo de archivo es desconocido para el sistema, no se muestra.';
$string['uploadeddate'] = 'Subido {$a}';
