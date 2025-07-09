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
 * Strings for component 'qtype_ddmarker', language 'ca', version '4.4'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Blancs per a {no} més marcadors';
$string['alttext'] = 'Text alternatiu';
$string['answer'] = 'Resposta';
$string['bgimage'] = 'Imatge de fons';
$string['clearwrongparts'] = 'Mou els marcadors col·locats de forma incorrecta a la seva posició inicial, a sota de la imatge';
$string['coords'] = 'Coordenades';
$string['correctansweris'] = 'La resposta correcta és: {$a}';
$string['draggableimage'] = 'Imatge arrossegable';
$string['draggableitem'] = 'Element arrossegable';
$string['draggableitemheader'] = 'Element arrossegable {$a}';
$string['draggableitemtype'] = 'Text';
$string['draggableword'] = 'Text arrossegable';
$string['dropbackground'] = 'Imatge de fons per arrossegar-hi marcadors';
$string['dropzone'] = 'Zona de destí {$a}';
$string['dropzoneheader'] = 'Zones de destí';
$string['dropzones'] = 'Zones de col·locació';
$string['dropzones_help'] = 'Les zones de col·locació es defineixen teclejant les coordenades.  A mesura queescriviu, la vista prèvia del damunt s\'actualitza immediatament, per tal que pugueu posicionar les coses per prova i error.

* Cercle: centre_x, centre_y; radi<br>per exemple: <code>80, 100; 50</code>
* Polígon: x1, y1; x2, y2; ...; xn, yn<br>per exemple: <code>20, 60; 100, 60; 20, 100</code>
* Rectangle: esquerra, superior; amplada, alçada<br>per exemple: <code> 20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Els marcadors següents s\'han col·locat al lloc incorrecte: {$a}.';
$string['followingarewrongandhighlighted'] = 'Els marcadros següents estan mal col·locats:  {$a}. El(s) marcador(s) destacats es mostren al lloc correcte .<br /> Feu clic al marcador per destacar l\'àrea permesa.';
$string['formerror_dragrequired'] = 'Heu d\'afegir almenys un marcador a aquesta pregunta.';
$string['formerror_droprequired'] = 'Heu de definir almenys una zona d\'arrossegament per a aquesta pregunta.';
$string['formerror_nobgimage'] = 'Heu de triar una imatge de fons per fer servir a l\'àrea d\'arrossegar.';
$string['formerror_noitemselected'] = 'Heu especificat una zona de col·locació però no heu triat el marcador que s\'ha d\'arrossegar a la zona.';
$string['formerror_nosemicolons'] = 'No hi ha cap punt i coma a la cadena de coordenades. Les coordenades per al {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Sols les etiquetes «{$a}» estan permeses a l\'etiqueta d\'un marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Utilitzeu només nombres enters positius per especificar les coordenades x,y, i/o l\'amplària i l\'alçària de les formes. Les vostres coordenades per a {$a->shape} haurien expressar-se com a: {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Per fer una forma poligonal heu d\'especificar almenys 3 punts. Les coordenades per al {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Heu introduït les mateixes coordenades dues vegades. Cada punt ha de ser únic. Les vostres coordenades per a {$a->shape} s\'haurien d\'expressar com a: {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'La forma que heu definit ultrapassa els límits de la imatge del fons.';
$string['formerror_toomanysemicolons'] = 'Hi ha massa parts separades per punt i coma a les coordenades que heu especificat. Les vostres coordenades per a  {$a->shape} haurien expressar-se com - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'L\'amplada i l\'alçada que heu especificat no es poden reconèixer. Les vostres coordenades per a  {$a->shape} haurien expressar-se com - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Les coordenades x,y que heu especificat no es poden reconèixer. Les vostres coordenades per a  {$a->shape} haurien expressar-se com - {$a->coordsstring}.';
$string['infinite'] = 'Infinit';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadors';
$string['nolabel'] = 'No hi ha text a l\'etiqueta';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'La vostra resposta és incompleta; heu de posar com a mínim un marcador a la imatge.';
$string['pluginname'] = 'Arrossegar i deixar anar marcadors';
$string['pluginname_help'] = 'Arrossegar i deixar anar marcadors demana que qui respon arrossegui etiquetes de text i les deixi anar dins de zones de col·locació definides sobre una imatge de fons.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'S\'està afegint una pregunta d\'arrossegar i deixar anar marcadors';
$string['pluginnameediting'] = 'S\'està editant una pregunta d\'arrossegar i deixar anar marcadors';
$string['pluginnamesummary'] = 'Permet definir marcadors que s\'hauran d\'arrossegar i deixar anar sobre una imatge de fons.';
$string['previewareaheader'] = 'Previsualitza';
$string['previewareamessage'] = 'Seleccioneu una imatge de fons, afegiu text a les etiquetes per als marcadors i definiu les zones de destí sobre la imatge de fons on s\'hauran d\'arrossegar.';
$string['refresh'] = 'Refresca la previsualització';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Cercle';
$string['shape_circle_coords'] = 'x,y;r (on «x,y» són les coordenades del centre del cercle i «r» és el radi)';
$string['shape_circle_lowercase'] = 'cercle';
$string['shape_polygon'] = 'Polígon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (on «x1, y1» són les coordenades del primer vèrtex, «x2, y2» són les coordenades del segon etc. No cal repetir les coordenades del primer vèrtex per tancar el polígon).';
$string['shape_polygon_lowercase'] = 'polígon';
$string['shape_rectangle'] = 'Rectangle';
$string['shape_rectangle_coords'] = 'x,y;w,h (on «x,y» són les coordenades del cantó superior esquerra del rectangle i «w» i «h» són l\'amplada i l\'alçada del rectangle)';
$string['shape_rectangle_lowercase'] = 'rectangle';
$string['showmisplaced'] = 'Destaca les zones de destí que no tenen el marcador correcte.';
$string['shuffleimages'] = 'Barreja els elements que s\'hauran d\'arrossegar cada vegada que es faci un intent nou.';
$string['stateincorrectlyplaced'] = 'Manté els marcadors que s\'han col·locat de forma incorrecta';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona de destí {$a}';
$string['ytop'] = 'A dalt';
