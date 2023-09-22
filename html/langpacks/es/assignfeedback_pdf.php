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
 * Strings for component 'assignfeedback_pdf', language 'es', version '4.1'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addquicklist'] = 'Añadir un comentario a Quicklist';
$string['allowpdffeedback'] = 'Habilitado';
$string['annotatesubmission'] = 'Hacer anotaciones al envío';
$string['annotationhelp'] = 'Ayuda sobre anotaciones';
$string['annotationhelp_text'] = '<table> <thead><tr><th>Control</th><th>Atajo de Teclado</th><th>Descripción</th></tr></thead> <tr><td>{$a->save}</td><td> </td><td>Cierre anotación sin generar una respuesta en PDF (tenga en cuenta que todas las anotaciones son guardadas inmediatamente al guardarse</td></tr> <tr><td>{$a->generate}</td><td> </td><td>Generar un PDF con anotaciones para que el estudiante lo descargue</td></tr> <tr><td>Encontrar comentarios</td><td> </td><td>Saltar directamente al comentario previamente introducido (en este envío) y resaltarlo.</td></tr> <tr><td>Mostrar anterior</td><td> </td><td>Mostrar comentarios para este estudiante de otra tarea en este curso (en un marco lateral)</td></tr> <tr><td><-- Prev</td><td>p</td><td>Ver la página anterior</td></tr> <tr><td>Siguiente --></td><td>n</td><td>Ver la página siguiente</td></tr> <tr><td>Color del fondo</td><td>[ and ]</td><td>Cambiar el color del relleno para la caja del comentario (también disponible al hacer click derecho sobre un comentario)</td></tr> <tr><td>Color de línea</td><td>{ and }</td><td>Cambiar el color para las anotaciones</td></tr> <tr><td>Elegir sello (estampado)</td><td> </td><td>Elegir el sello (estampado) a emplar para a herramienta de sellado (se pueden añadir nuevos sellos en la carpeta \'pix/stamps\' del servidor)</td></tr> <tr><td>{$a->comment}</td><td>c</td><td>Haga click sobre la página para añadir una caja de comentario, escriba el comentario, después vuelva a hace click sobre la página para guardarlo. Haga click sobre un comentario para editarlo, arrástrelo para moverlo. Haga click derecho para cambiarle el color, guardarlo en la listarápida o para borrarlo (o elimine el texto para eliminarlo).</td></tr> <tr><td>{$a->line}</td><td>l</td><td>Click + drag (or click, move, click) to draw a line on the page</td></tr> <tr><td>{$a->rectangle}</td><td>r</td><td>Click + drag (or click, move, click) to draw a rectangle on the page</td></tr> <tr><td>{$a->oval}</td><td>o</td><td>Click + drag (or click, move, click) to draw an oval on the page</td></tr> <tr><td>{$a->freehand}</td><td>f</td><td>Click + drag to draw freehand lines on the page</td></tr> <tr><td>{$a->highlight}</td><td>h</td><td>Click + drag (or click, move, click) to draw a semi-transparent highlight across the existing page content</td></tr> <tr><td>{$a->stamp}</td><td>s</td><td>Click to insert the selected stamp at the default size. Click + drag to insert at a different size</td></tr> <tr><td>{$a->erase}</td><td>e</td><td>Haga click dentro o sobre una anotación (que NO es un comentario) para eliminarlo</td></tr> <tr><td>Listarápida</td><td> </td><td>Click derecho en la página para insertar un comentario que estaba previamente guardado en la \'listarápida\'. Use la \'x\' para eliminar items no deseados en la lista rápida.</td></tr> </table>';
$string['backtocommentlist'] = 'Volver a la lista de comentarios';
$string['badaction'] = 'Accción inválida \'{$a}\'';
$string['badannotationid'] = 'La ID de anotación es para un envío o página diferente';
$string['badcommentid'] = 'La ID del comentario es  para un envío o página diferente';
$string['badcoordinate'] = 'Numero non de coordinadas en línea - deberían ser 2 coordinadas por punto';
$string['badpath'] = 'La ruta es incorrecta';
$string['badtype'] = 'Tipo inválido {$a}';
$string['cancel'] = 'Cancelar';
$string['clearimagecache'] = 'Limpiar caché de imagen de página';
$string['colourblack'] = 'Negro';
$string['colourblue'] = 'Azul';
$string['colourclear'] = 'Limpiar';
$string['colourgreen'] = 'Verde';
$string['colourred'] = 'Rojo';
$string['colourwhite'] = 'Blanco';
$string['colouryellow'] = 'Amarillo';
$string['comment'] = 'Comentario';
$string['commentcolour'] = '[,] - color de fondo del comentario';
$string['commenticon'] = 'c - añadir comentarios\\n Mantener presionada Ctrl para dibujar una línea';
$string['deletecomment'] = 'Eliminar comentario';
$string['deleteresponse'] = 'Eliminar respuesta';
$string['deleteresponseconfirm'] = '¿Estás seguro que deseas borrar la respuesta de {$a->username} en la tarea \'{$a->assignmentname}\'?';
$string['downloadoriginal'] = 'Descargar archivo PDF original del envío';
$string['downloadresponse'] = 'Descargar respuesta';
$string['draftsaved'] = 'Borrador guardado';
$string['emptyquicklist'] = 'Sin elementos en Quicklist';
$string['emptyquicklist_instructions'] = 'Botón derecho en un comentario para copiarlo en Quicklist';
$string['emptysubmission'] = 'Envío vacío';
$string['enabled'] = 'PDF de retroalimentación';
$string['enabled_help'] = 'Esto permite  hacer anotaciones en línea a los PDFs (enviados mediante el tipo de envío de PDFs) y permite regresarles el trabajo con anotaciones a los estudiantes.';
$string['eraseicon'] = 'e - eliminar lineas y formas';
$string['errorgenerateimage'] = 'No se puede generar la imagen - detalles: {$a}';
$string['errormessage'] = 'Menaje de error:';
$string['errornosubmission'] = 'Intentando crear imagen para un envío que no existe';
$string['errornosubmission2'] = 'No se ha podido encontrar el archivo PDF del envío';
$string['errortempfolder'] = 'No se ha podido crear un directorio temporal';
$string['findcomments'] = 'Buscar comentarios';
$string['findcommentsempty'] = 'Sin comentarios';
$string['freehandicon'] = 'f - líneas a mano libre';
$string['generateresponse'] = 'Generar archivo de respuesta';
$string['gspath'] = 'Ruta de Ghostscript';
$string['highlighticon'] = 'h - resaltar texto';
$string['imagefor'] = 'Ficheros de imágenes para {$a}';
$string['jsrequired'] = 'JavaScript debe estar activado en su navegador para que funcione la anotación de PDF';
$string['keyboardnext'] = 'n - página siguiente';
$string['keyboardprev'] = 'p - página anterior';
$string['linecolour'] = '{,} - color de línea';
$string['lineicon'] = 'l - líneas';
$string['missingannotationdata'] = 'Faltan datos de anotación';
$string['missingcommentdata'] = 'Faltan datos de comentario';
$string['missingquicklistdata'] = 'Faltan datos de lista rápida';
$string['next'] = 'Siguiente';
$string['nocomments'] = 'Sin comentarios';
$string['nogroup'] = 'Sin grupo';
$string['okagain'] = 'Pulse OK para intentarlo de nuevo';
$string['openlinknewwindow'] = 'Abrir enlaces en una nueva ventana';
$string['opennewwindow'] = 'Abrir esta página en una nueva ventana';
$string['ovalicon'] = 'o - óvalos';
$string['pagenumber'] = 'Número de página';
$string['pagenumbertoobig'] = 'El número de página solicitada es mayor al número total de páginas ({$a->pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = 'La petición del número de página es muy pequeña (<1)';
$string['pdf'] = 'PDF de retroalimentación';
$string['pluginname'] = 'PDF de retroalimentación';
$string['previous'] = 'Anterior';
$string['previousnone'] = 'Ninguno';
$string['quicklist'] = 'Listarápida de Comentarios';
$string['rectangleicon'] = 'r - rectángulos';
$string['resend'] = 'Reenviar';
$string['responsefor'] = 'Archivo de respuesta para {$a}';
$string['responseok'] = 'Archivo de respuesta generado';
$string['responseproblem'] = 'Hubo un problema al generar el archivo de respuesta';
$string['savedraft'] = 'Guardar anotaciones en borrador';
$string['servercommfailed'] = 'Comunicación fallida con el servidor - ¿Desea reenviar el mensaje?';
$string['showpreviousassignment'] = 'Mostrar envío previo';
$string['stamp'] = 'Elegir estampa (sello)';
$string['stampicon'] = 's - sello (estampado)';
$string['test_doesnotexist'] = 'La ruta a Ghostscript apunta hacia un archivo inexistente';
$string['test_empty'] = 'La ruta a Ghostscript está vacía - por favor escriba la rura correcta';
$string['test_isdir'] = 'La ruta a Ghostscript apunta hacia una carpeta; por favor incluya el programa ghostscript en la ruta que especifique';
$string['test_notestfile'] = 'Falta el PDF de prueba';
$string['test_notexecutable'] = 'La ruta a Ghostscript apunta hacia un archivo que no es ejecutable';
$string['test_ok'] = 'La ruta a Ghostscript parece estar OK - por favor revise que pueda ver el mensaje dentro de la imagen inferior';
$string['testgs'] = 'Probar ruta a Ghostscript';
$string['viewresponse'] = 'Ver respuesta en línea';
