<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'assignfeedback_editpdf', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Agregar a la lista';
$string['annotationcolour'] = 'Color de la anotación';
$string['black'] = 'Negro';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'No se puede abrir el archivo PDF. El archivo puede estar dañado o en un formato no compatible.';
$string['clear'] = 'Borrar';
$string['colourpicker'] = 'Selector de color';
$string['command'] = 'Comando:';
$string['comment'] = 'Comentarios';
$string['commentcolour'] = 'Color del comentario';
$string['commentcontextmenu'] = 'Menú contextual del comentario';
$string['commentindex'] = 'Índice de comentarios';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'No se pudo guardar la página {$a}';
$string['currentstamp'] = 'Sello';
$string['default'] = 'Habilitado por defecto';
$string['default_help'] = 'Si se activa la opcion, este método de retroalimentación estará habilitado por omisión para todas las tareas nuevas.';
$string['deleteannotation'] = 'Eliminar anotación';
$string['deletecomment'] = 'Eliminar comentario';
$string['deletefeedback'] = 'Borrar retroalimentación del PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Descargar retroalimentación PDF';
$string['draftchangessaved'] = 'Borrador de anotaciones guardado';
$string['drag'] = 'Arrastrar';
$string['editpdf'] = 'Anotación PDF';
$string['editpdf_help'] = 'Editar el PDF enviado por el alumno escribiendo anotaciones, dibujos o sellos directamente desde el navegador obteniendo como resultado otro PDF modificado descargable.';
$string['enabled'] = 'Anotación PDF';
$string['enabled_help'] = 'Si está activado, el profesor podrá crear archivos PDF con anotaciones cuando realice las correcciones. El profesor podrá añadir comentarios, dibujos y sellos directamente sobre el trabajo de los estudiantes. La anotación se realiza en el navegador y no se requiere ningún software adicional.';
$string['errorgenerateimage'] = 'Error generando imagen con ghostscript, información del error: {$a}';
$string['errorpdfpage'] = 'Se ha producido un error generando esta página.';
$string['expcolcomments'] = 'Expandir/colapsar todos los comentarios';
$string['filter'] = 'Filtrar comentarios...';
$string['generatefeedback'] = 'Generar retroalimentación PDF';
$string['generatingpdf'] = 'Generando archivo PDF...';
$string['gotopage'] = 'Ir a la página';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagen ghostscript de prueba';
$string['highlight'] = 'Destacar';
$string['jsrequired'] = 'Para realizar anotaciones en documentos PDF se requiere Javascript. Por favor, active el Javascript en su navegador para poder utilizar esta funcionalidad.';
$string['launcheditor'] = 'Lanzar el editor PDF';
$string['line'] = 'Línea';
$string['loadingeditor'] = 'Cargando el editor PDF';
$string['navigatenext'] = 'Página siguiente';
$string['navigateprevious'] = 'Página anterior';
$string['output'] = 'Salida:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Página {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['partialwarning'] = 'Algunos archivos en este envío sólo pueden ser accedidos en forma directa.';
$string['pathtogspathdesc'] = 'Por favor tenga en cuenta que la anotación de PDF requiere que la ruta de ghostscript sea especificada en {$a}.';
$string['pen'] = 'Pluma';
$string['pluginname'] = 'Anotación PDF';
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
$string['searchcomments'] = 'Buscar comentarios';
$string['select'] = 'Seleccionar';
$string['stamp'] = 'Sello';
$string['stamppicker'] = 'Selector de sello';
$string['stamps'] = 'Sellos';
$string['stampsdesc'] = 'Los sellos deben ser ficheros de imágenes (tamaño recomendado: 40x40). Estas imágenes pueden ser usadas con la herramienta de estampación para las anotaciones de PDF.';
$string['test_doesnotexist'] = 'El PATH de ghostscript apunta a un fichero inexistente';
$string['test_empty'] = 'La ruta ghostscript está vacía - por favor, introduzca la ruta correcta';
$string['testgs'] = 'Prueba del PATH de ghostscript';
$string['test_isdir'] = 'El PATH de ghostscript apunta a un directorio, por favor, incluya el programa de ghostscript en el PATH que especifique';
$string['test_notestfile'] = 'Falta test de PDF';
$string['test_notexecutable'] = 'Ghostscript apunta a un fichero no ejecutable';
$string['test_ok'] = 'La ruta de ghostscript parece estar correcta - por favor compruebe que pueda ver la imagen a continuación';
$string['tool'] = 'Herramienta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver PDF con anotaciones...';
$string['white'] = 'Blanco';
$string['yellow'] = 'Amarillo';
