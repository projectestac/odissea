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
 * Strings for component 'qtype_ddmarker', language 'es', version '3.11'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Espacios en blanco para {no} marcadores más';
$string['alttext'] = 'Texto alternativo';
$string['answer'] = 'Respuesta';
$string['bgimage'] = 'Imagen de fondo';
$string['clearwrongparts'] = 'Devolver marcadores situados incorrectamente a la posición inicial por defecto debajo de la imagen';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['draggableimage'] = 'Imagen arrastrable';
$string['draggableitem'] = 'Elemento arrastrable';
$string['draggableitemheader'] = 'Elemento arrastrable {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastrable';
$string['dropbackground'] = 'Imagen de fondo para arrastrar marcadores dentro de este';
$string['dropzone'] = 'Zona para soltar {$a}';
$string['dropzoneheader'] = 'Zonas para soltar';
$string['dropzones'] = 'Zonas para soltar';
$string['dropzones_help'] = 'Las zonas para soltar se pueden definir por coordenadas o arrastrar a su posición en la vista previa de arriba.

Primero, seleccionar una forma (círculo, rectángulo o polígono) agregará una nueva forma de zona para soltar en la parte superior izquierda de la vista previa. Puede resultar útil minimizar la sección Marcadores para que pueda ver la vista previa mientras edita las Zonas para soltar.

La edición de una forma comienza con un clic en la forma en la vista previa para mostrar los controladores de edición. Puede mover la forma con el controlador central o ajustar las dimensiones de la forma con los controladores de vértice.

Solo para polígonos, mantener presionado el botón de control (botón de comando en un Mac) mientras hace clic en un controlador de vértice agregará un nuevo vértice al polígono. Mantenga una forma de polígono lo más simple posible, sin cruzar líneas.

Para obtener información, las tres formas usan coordenadas de esta manera:

* Círculo: centre_x, centre_y; radio <br /> por ejemplo: <code> 80, 100; 50 </code>
* Rectángulo: top_left_x, top_left_y; ancho, alto <br /> por ejemplo: <code> 20, 60; 80, 40 </code>
* Polígono: x1, y1; x2, y2; ...; xn, yn <br /> por ejemplo: <code> 20, 60; 100, 60; 20, 100 </code>

Seleccionar un texto de marcador agregará ese texto a la forma en la vista previa.';
$string['followingarewrong'] = 'Los siguientes marcadores han sido situados en el área equivocada: {$a}.';
$string['followingarewrongandhighlighted'] = 'Los siguientes marcadores fueron situados incorrectamente: {$a}. Los marcadores resaltados son mostrados ahora en los lugares correctos.<br />  Pulse en el marcador para resaltar el área permitida.';
$string['formerror_nobgimage'] = 'Debe seleccionar una imagen para ser utilizada como fondo para la zona de arrastrar y soltar.';
$string['formerror_noitemselected'] = 'Usted ha especificado una zona para soltar pero no ha elegido un marcador que deba ser arrastrado a la zona.';
$string['formerror_nosemicolons'] = 'No hay puntos y comas en su cadena de coordenadas. Sus coordenadas para un {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Sólo "{$a}" marcas son permitidas en la etiqueta para un marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Por favor, use solo números enteros positivos para especificar las coordenadas x,y y/o la anchura y la altura de las formas. Sus coordenadas para {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para un polígono usted necesita especificar al menos 3 puntos. Sus coordenadas para {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Ha incluido las mismas coordenadas dos veces.Cada punto debe ser único. Sus coordenadas para {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'La forma que ha definido se sale de los límites de la imagen de fondo.';
$string['formerror_toomanysemicolons'] = 'Hay demasiadas partes separadas con puntos y coma para las coordenadas que ha especificado. Sus coordenadas para {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'La anchura y la altura que ha especificado no son reconocibles. Sus coordenadas para {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Las coordenadas x,y que ha especificado no son reconocibles. Sus coordenadas para {$a->shape} deben ser expresadas como - {$a->coordsstring}.';
$string['infinite'] = 'Infinito';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'Sin texto de etiqueta';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'Su respuesta no es completa; debe situar al menos un marcador en la imagen.';
$string['pluginname'] = 'Arrastrar y soltar marcadores';
$string['pluginname_help'] = 'Arrastrar y soltar marcadores requiere que el usuario arrastre etiquetas de texto y las suelte dentro de zonas de descarga definidas sobre de una imagen de fondo.';
$string['pluginnameadding'] = 'Añadiendo arrastrar y soltar marcadores';
$string['pluginnameediting'] = 'Editando arrastrar y soltar marcadores';
$string['pluginnamesummary'] = 'Los marcadores se arrastran y sueltan sobre una imagen de fondo.

Nota: Este tipo de pregunta no es accesible para usuarios con problemas de visión.';
$string['previewareaheader'] = 'Previsualizar';
$string['previewareamessage'] = 'Elija un archivo de imagen de fondo, escriba etiquetas de texto para los marcadores y defina las zonas para soltar sobre la imagen de fondo en donde deberán arrastrarse.';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta arrastrar y soltar sobre texto permite a los autores de preguntas definir opciones por defecto como preferencias de usuario.';
$string['privacy:preference:defaultmark'] = 'La puntuación por defecto para una pregunta dada.';
$string['privacy:preference:penalty'] = 'La penalización para cada intento incorrecto cuando la pregunta se usa con los comportamientos \'Interactivo con varios intentos\' o \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Si las respuestas deben ser barajadas automáticamente.';
$string['refresh'] = 'Refrescar previsualización';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Círculo';
$string['shape_circle_coords'] = 'x,y;r (donde x,y son las coordenadas del centro del círculo y r es el radio)';
$string['shape_circle_lowercase'] = 'círculo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (donde x1, y1 son las coordenadas del primer vértice, x2, y2 son las coordenadas del segundo, etc. No es necesario repetir las coordenadas del primer vértice para cerrar el polígono)';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Rectángulo';
$string['shape_rectangle_coords'] = 'x,y;w,h (donde x,y son las coordenadas de la esquina superior izquierda del rectángulo y w y h son la anchura y la altura del rectángulo)';
$string['shape_rectangle_lowercase'] = 'rectángulo';
$string['showmisplaced'] = 'Resaltar las zonas para soltar que no tienen el marcador correcto sobre ellas';
$string['shuffleimages'] = 'Barajar items en cada intento';
$string['stateincorrectlyplaced'] = 'Indicar qué marcadores están situados incorrectamente';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona para soltar {$a}';
$string['ytop'] = 'Arriba';
