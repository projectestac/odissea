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
 * Strings for component 'qtype_ddmarker', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Gehitu {no} zuriune markatzaile gehiagorako';
$string['alttext'] = 'Aukerako testua';
$string['answer'] = 'Erantzuna';
$string['bgimage'] = 'Atzeko planoko irudia';
$string['clearwrongparts'] = 'Mugitu modu ezegokian kokatutako markatzaileak irudiaren azpiko lehenetsitako hasiera puntura.';
$string['coords'] = 'Koordenatuak';
$string['correctansweris'] = 'Erantzun zuzena ondokoa da: {$a}';
$string['draggableimage'] = 'Eramateko irudia';
$string['draggableitem'] = 'Eramateko elementua';
$string['draggableitemheader'] = 'Eramateko elementua {$a}';
$string['draggableitemtype'] = 'Mota';
$string['draggableword'] = 'Eramateko testua';
$string['dropbackground'] = 'Atzeko planoko irudia, bertara markatzaileak eramateko';
$string['dropzone'] = 'Eramateko tokia {$a}';
$string['dropzoneheader'] = 'Eramateko tokiak';
$string['dropzones'] = 'Eramateko tokiak';
$string['dropzones_help'] = 'Eramateko tokiak koordenatuak idatzita edo goiko aurrebistan euren kokapenera eramanda zehaztu daitezke.

Lehen aldiz forma bat (zirkulua, laukizuzena edo poligonoa) aukeratzen denean aurrebistaren goiko ezkerraldean eramateko toki berri bat gehituko da. Markatzaileen atala tolestea lagungarria izan daiteke eramateko tokiak editatu bitartean aurrebista ikusi ahal izateko.

Forma bat editatzeko aurrena aurrebistan forma horretan klik egin ezazu edizio-kontrolak erakusteko. Forma mugitu dezakezu erdiko kontrola erabilita, edo formaren neurriak egokitu ertzetako kontrolak erabilita.

Poligonoak direnean, CTRL botoian sakatuta mantenduz (komando botoia Mac batean bada) ertzetako kontrolean klik eginda poligonoari ertz berri bat gehituko zaio. Saiatu zaitez poligonoaren forma ahal bezain sinplea mantentzen, gurutzatzen diren lerrorik gabe.

Hauek dira hiru formen koordenatuak definitzean erabiltzen den notazioa:

* Zirkulua: zentroa_x, zentroa_y; erradioa<br />adibidez: <code>80,100;50</code>
* Laukizuzena: goi_ezker_x, goi_ezker_y; zabalera, altuera<br />adibidez: <code>20,60;80,40</code>
* Poligonoa: x1,y1; x2,y2; ...; xn, yn<br />adibidez: <code>20,60;100,60;20,100</code>

Markatzailearen testu bat aukeratzeak testu hori aurrebistako formara gehituko da.';
$string['followingarewrong'] = 'Ondoko markatzaileak okerreko tokian jarri dira: {$a}.';
$string['followingarewrongandhighlighted'] = 'Hurrengo markatzaileak modu ezegokian kokatu dira: {$a}. Nabarmendutako markatzaileak orain kokapen egokietan erakusten dira.<br /> Egin klik markatzailean baimendutako eremua nabarmentzeko.';
$string['formerror_nobgimage'] = 'Irudi bat aukeratu behar duzu atzeko planoan hartu eta eramateko tokiak zehazteko.';
$string['formerror_noitemselected'] = 'Eramateko toki bat zehaztu duzu baina ez duzu zehaztu bertara eraman behar den markatzailea zein den.';
$string['formerror_nosemicolons'] = 'Ez dago puntu eta komarik zure koordenatuen katean. {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Soilik "{$a}" etiketak baimentzen dira markatzailearen etiketan.';
$string['formerror_onlyusewholepositivenumbers'] = 'Mesedez erabili soilik zenbaki oso positiboak formen x,y koordenatuak edota zabalera eta altuera zehazteko. {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Poligono bat zehazteko gutxienez 3 puntu zehaztu behar dituzu. {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Koordenatu berdinak birritan sartu dituzu. Puntuak ezin dira errepikatu . {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Zehaztu duzun forma atzeko planoko irudiaren mugetatik kanpora ateratzen da.';
$string['formerror_toomanysemicolons'] = 'Puntu eta komaz banaturiko atal gehiegi daude zehaztu dituzun koordenatuetan. {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Zehaztu dituzun zabalera eta altuera ezezagunak dira. {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Zehaztu dituzun x eta y koordenatuak ezezagunak dira. {$a->shape} batentzat koordenatuak horrela adierazi beharko lirateke: {$a->coordsstring}.';
$string['infinite'] = 'Mugagabea';
$string['marker'] = 'Markatzailea';
$string['marker_n'] = 'Markatzailea {no}';
$string['markers'] = 'Markatzaileak';
$string['nolabel'] = 'Ez dago testurik etiketan';
$string['noofdrags'] = 'Kopurua';
$string['pleasedragatleastonemarker'] = 'Zure erantzuna osatu gabe dago; gutxienez markatzaile bat eraman behar duzu irudira.';
$string['pluginname'] = 'Hartu eta eraman markatzaileak';
$string['pluginnameadding'] = 'Hartu eta eraman markatzaileak motako galdera gehitzen';
$string['pluginnameediting'] = 'Hartu eta eraman markatzaileak motako galdera editatzen';
$string['pluginname_help'] = 'Hartu eta eraman markatzaileak motako galderek ikasleei testu-etiketak hartu eta atzeko planoko irudi batean zehaztutako eramateko tokietara eramatea eskatzen diete.';
$string['pluginnamesummary'] = 'Markatzaileak hartu eta eraman dira atzeko planoko irudira.';
$string['previewareaheader'] = 'Aurrebista';
$string['previewareamessage'] = 'Aukeratu atzeko planoko irudia, zehaztu markatzaileen testu-etiketak eta zehaztu testu-etiketa hauek irudiaren gainean kokatzeko eramateko tokiak.';
$string['privacy:metadata'] = 'Hartu eta eraman markatzaileak galdera-mota pluginak ez du datu pertsonalik biltzen.';
$string['refresh'] = 'Freskatu aurrebista';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Zirkulua';
$string['shape_circle_coords'] = 'x,y;r (non x,y zirkuluaren zentroaren koordenatuak diren eta r erradioa den)';
$string['shape_circle_lowercase'] = 'zirkulua';
$string['shape_polygon'] = 'Poligonoa';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (non x1,y1 lehen ertzaren koordenatuak diren, x2,y2 bigarren ertzarenak, etab. Ez dago lehen ertzaren puntua errepikatu beharrik poligonoa ixteko.)';
$string['shape_polygon_lowercase'] = 'poligonoa';
$string['shape_rectangle'] = 'Laukizuzena';
$string['shape_rectangle_coords'] = 'x,y;w,h (non x,y goiko ezkerreko ertzaren koordenatuak diren eta w eta h laukizuzenaren zabalera eta altuera diren)';
$string['shape_rectangle_lowercase'] = 'laukizuzena';
$string['showmisplaced'] = 'Nabarmendu eramateko tokiak bertara markatzaile egokiak eraman ez badira';
$string['shuffleimages'] = 'Nahastu eramateko elementuak galderari erantzuten zaion bakoitzean';
$string['stateincorrectlyplaced'] = 'Adierazi zeintzuk diren modu ezegokian kokatutako markatzaileak';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Eramateko tokia {$a}';
$string['ytop'] = 'Goian';
