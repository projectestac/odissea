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
 * Strings for component 'qtype_ddmarker', language 'gl', version '4.1'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Espazos en branco para {no} marcadores máis';
$string['alttext'] = 'Texto alternativo';
$string['answer'] = 'Resposta';
$string['bgimage'] = 'Imaxe de fondo';
$string['clearwrongparts'] = 'Move os marcadores colocados de xeito incorrecto de volta á posición predeterminada de inicio debaixo da imaxe';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'A resposta correcta é: {$a}';
$string['draggableimage'] = 'Imaxe arrastrábel';
$string['draggableitem'] = 'Elemento arrastrábel';
$string['draggableitemheader'] = 'Elemento arrastrábel {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastrábel';
$string['dropbackground'] = 'Imaxe de fondo cara a onde arrastrar os marcadores';
$string['dropzone'] = 'Zona de solta {$a}';
$string['dropzoneheader'] = 'Zonas de solta';
$string['dropzones'] = 'Zonas de solta';
$string['dropzones_help'] = 'As zonas de solta pódense definir por coordenadas ou arrastralas ata a súa posición na vista previa anterior.

Primeiro seleccionando unha forma (círculo, rectángulo ou polígono) engadiráselle unha nova zona de solta na parte superior esquerda da vista previa. Pode ser útil minimizar a sección de Marcadores para que poida ver a vista previa mentres editas as zonas de solta.

A edición dunha forma comeza cun clic sobre a forma na vista previa para amosar os tiradores de edición. Pode mover a forma usando o tirador central ou axustar a forma cos tiradores do vértice.

Só para polígonos, mantendo a tecla de control (tecla Command nun Mac) ao premer nun tirador de vértices engadirá un vértice novo ao polígono. Manteña unha forma de polígono o máis sinxela posíbel, sen cruzar liñas.

Para a súa información, as tres formas usan coordenadas do seguinte xeito:

* Círculo: centro_x, centro_y; raio<br>por exemplo: <code>80, 100; 50</code>
* Rectángulo: superior_esquerdo_x, superior_esquerdo_y; largo, alto<br>por exemplo: <code>20, 60; 80, 40</code>
* Polígono: x1, y1; x2, y2; ...; xn, yn<br>por exemplo: <code>20, 60; 100, 60; 20, 100</code>

Ao seleccionar un texto de marcador engadirase texto á forma na vista previa.';
$string['followingarewrong'] = 'Engadíronse os seguintes marcadores na área incorrecta: {$a}.';
$string['followingarewrongandhighlighted'] = 'Os seguintes marcadores foron colocados incorrectamente: {$a}. Os marcadores destacados amósanse agora coas colocacións correctas.<br /> Prema no marcador para resaltar a área permitida.';
$string['formerror_nobgimage'] = 'Debe seleccionar unha imaxe para usar como fondo para a área de arrastrar e soltar.';
$string['formerror_noitemselected'] = 'Especificou unha zona de solta mais non seleccionou un marcador que se debe arrastrar á zona.';
$string['formerror_nosemicolons'] = 'Non hai punto e coma na cadea de coordenadas. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Só se permiten etiquetas «{$a}» na etiqueta dun marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Use só números enteiros positivos para especificar coordenadas x,y e/ou largo e alto das formas. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para unha forma de polígono debe especificar polo menos 3 puntos. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Introduciu dúas coordenadas dúas veces. Cada punto debe ser único. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'A forma que definiu sae dos límites da imaxe de fondo.';
$string['formerror_toomanysemicolons'] = 'Hai demasiadas partes separadas por punto e coma para as coordenadas que especificou. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'O largo e o alto que especificou son irrecoñecíbeis. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'As coordenadas x,y que especificou son irrecoñecíbeis. As súas coordenadas para un {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['infinite'] = 'Infinito';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'Sen etiqueta de texto';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'A súa resposta non está completa; ten que colocar polo menos un marcador na imaxe.';
$string['pluginname'] = 'Arrastrar e soltar marcadores';
$string['pluginname_help'] = 'Os marcadores de arrastrar e soltar requiren que o que responde arrastre etiquetas de texto sobre as zonas de solta definidas nunha imaxe de fondo.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Engadindo arrastrar e soltar marcadores';
$string['pluginnameediting'] = 'Editando arrastrar e soltar marcadores';
$string['pluginnamesummary'] = 'Arrástranse os marcadores e déixanse caer nunha imaxe de fondo.

Nota: Este tipo de pregunta non é accesíbel para usuarios con deficiencias visuais.';
$string['previewareaheader'] = 'Vista previa';
$string['previewareamessage'] = 'Seleccione un ficheiro de imaxe de fondo, introduza etiquetas de texto para marcadores e defina as zonas de solta na imaxe de fondo sobre a que se deben soltar.';
$string['privacy:metadata'] = 'O engadido de preguntas de arrastrar e soltar marcadores non almacena ningún dato persoal.';
$string['refresh'] = 'Actualizar a vista previa';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Círculo';
$string['shape_circle_coords'] = 'x,y;r (onde x,y son as coordenadas do centro do círculo e r é o raio)';
$string['shape_circle_lowercase'] = 'círculo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (onde x1,y1 son as coordenadas do primeiro vértice, x2,y2 son as coordenadas do segundo etc. Non hai necesidade de repetir as coordenadas para o primeiro vértice para pechar o polígono).';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Rectángulo';
$string['shape_rectangle_coords'] = 'x,y;w,h (onde x,y son as coordenadas do canto superior esquerdo do rectángulo e w e h son o largo e alto do rectángulo)';
$string['shape_rectangle_lowercase'] = 'rectángulo';
$string['showmisplaced'] = 'Destacar as zonas de solta onde non se teñan soltado o marcador correcto';
$string['shuffleimages'] = 'Arrastre elementos ao chou cada vez que se intente facer unha pregunta';
$string['stateincorrectlyplaced'] = 'Amosar que marcadores están incorrectamente colocados';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona de solta {$a}';
$string['ytop'] = 'Arriba';
