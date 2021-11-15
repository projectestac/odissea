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
 * Strings for component 'assignfeedback_editpdf', language 'es', version '3.11'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Agregar a la lista';
$string['annotationcolour'] = 'Color de la anotación';
$string['black'] = 'Negro';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'No se puede abrir el archivo PDF. El archivo puede estar dañado o en un formato no compatible.';
$string['clear'] = 'Limpiar';
$string['colourpicker'] = 'Selector de color';
$string['command'] = 'Comando:';
$string['comment'] = 'Comentarios';
$string['commentcolour'] = 'Color de comentario';
$string['commentcontextmenu'] = 'Menú contextual del comentario';
$string['commentindex'] = 'Índice de comentarios';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'No se ha podido guardar página {$a}';
$string['currentstamp'] = 'Sello';
$string['default'] = 'Habilitado por defecto';
$string['default_help'] = 'Si se activa la opcion, este método de retroalimentación estará habilitado por omisión para todas las tareas nuevas.';
$string['deleteannotation'] = 'Borrar anotación';
$string['deletecomment'] = 'Borrar comentario';
$string['deletefeedback'] = 'Borrar retroalimentación del PDF';
$string['downloadablefilename'] = 'retroalimentación.pdf';
$string['downloadfeedback'] = 'Descargar pdf retroalimentación';
$string['draftchangessaved'] = 'Borrador de anotaciones guardado';
$string['drag'] = 'Arrastrar';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anotar las entregas de los estudiantes directamente en el navegador y producir un PDF editado y descargable.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Si está habilitado, el profesor podrá crear ficheros PDF anotados cuando realice las correcciones. El profesor podrá añadir comentarios, dibujos y sellos directamente sobre el trabajo de los estudiantes. La anotación se realiza en el navegador y no se requiere ningún software adicional.';
$string['errorgenerateimage'] = 'Error generando imagen con ghostscript, información de depuración; {$a}';
$string['errorpdfpage'] = 'Se ha producido un error generando esta página.';
$string['expcolcomments'] = 'Expandir/colapsar todos los comentarios';
$string['filter'] = 'Filtrar comentarios...';
$string['generatefeedback'] = 'Generar PDF retroalimentación';
$string['generatingpdf'] = 'Generando el PDF...';
$string['gotopage'] = 'Ir a página';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagen ghostscript de prueba';
$string['highlight'] = 'Resaltar';
$string['jsrequired'] = 'Para realizar anotaciones en documentos PDF se requiere Javascript. Por favor, active el Javascript en su navegador para poder utilizar esta funcionalidad.';
$string['launcheditor'] = 'Arrancar editor PDF...';
$string['line'] = 'Línea';
$string['loadingeditor'] = 'Cargando editor PDF';
$string['navigatenext'] = 'Siguiente página  (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Página anterior (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = 'Resultado:';
$string['oval'] = 'Óvalo';
$string['pagenumber'] = 'Página {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['partialwarning'] = 'Algunos archivos en este envío sólo pueden ser accedidos en forma directa.';
$string['pathtogspathdesc'] = 'Por favor tenga en cuenta que la anotación de PDF requiere que la ruta de ghostscript sea especificada en {$a}.';
$string['pen'] = 'Bolígrafo';
$string['pluginname'] = 'Anotar PDF';
$string['preparesubmissionsforannotation'] = 'Preparar los envíos para la anotación';
$string['privacy:metadata:colourpurpose'] = 'Color del comentario o anotación';
$string['privacy:metadata:conversionpurpose'] = 'Los archivos son convertidos a PDFs para permitir las anotaciones.';
$string['privacy:metadata:filepurpose'] = 'Archiva una anotación PDF con retroalimentación de usuario';
$string['privacy:metadata:rawtextpurpose'] = 'Archiva texto en bruto de respuestas rápidas';
$string['privacy:metadata:tablepurpose'] = 'Archiva los comentarios de la lista indicados por el docente';
$string['privacy:metadata:userid'] = 'Identificador del usuario';
$string['privacy:path'] = 'Retroalimentación PDF';
$string['rectangle'] = 'Rectángulo';
$string['red'] = 'Rojo';
$string['result'] = 'Resultado:';
$string['rotateleft'] = 'Rotar 90 grados a la izquierda';
$string['rotateright'] = 'Rotar 90 grados a la derecha';
$string['searchcomments'] = 'Buscar comentarios';
$string['select'] = 'Seleccionar';
$string['stamp'] = 'Sello';
$string['stamppicker'] = 'Seleccionador sello';
$string['stamps'] = 'Sellos';
$string['stampsdesc'] = 'Los sellos deben ser ficheros de imágenes (tamaño recomendado: 40x40). Estas imágenes pueden ser usadas con la herramienta de estampación para las anotaciones de PDF.';
$string['test_doesnotexist'] = 'El PATH de ghostscript apunta a un fichero inexistente';
$string['test_empty'] = 'La ruta ghostscript está vacía, por favor introduzca al ruta correcta';
$string['test_isdir'] = 'El PATH de ghostscript apunta a un directorio, por favor, incluya el programa de ghostscript en el PATH que especifique';
$string['test_notestfile'] = 'El PDF de prueba falta';
$string['test_notexecutable'] = 'EL ghostscript apunta a un fichero que no es ejecutable';
$string['test_ok'] = 'La ruta ghostscript parece ser correcta, por favor compruebe que pueda ver el mensaje en la imagen abajo';
$string['testgs'] = 'Prueba del PATH de ghostscript';
$string['tool'] = 'Herramienta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver PDF anotado...';
$string['white'] = 'Blanco';
$string['yellow'] = 'Amarillo';
