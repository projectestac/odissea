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
 * Strings for component 'qtype_ddmarker', language 'ro', version '4.1'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Spații libere pentru alți {no} marcatori';
$string['alttext'] = 'Text alternativ';
$string['answer'] = 'Răspuns';
$string['bgimage'] = 'Imagine de fundal';
$string['clearwrongparts'] = 'Mutați marcatorii plasați incorect înapoi la poziția inițială implicită de sub imagine';
$string['coords'] = 'Coordonate';
$string['correctansweris'] = 'Răspunsul corect este: {$a}';
$string['draggableimage'] = 'Imagine de poziționare';
$string['draggableitem'] = 'Element glisabil';
$string['draggableitemheader'] = 'Element glisabil {$a}';
$string['draggableitemtype'] = 'Tip';
$string['draggableword'] = 'Text de poziționat';
$string['dropbackground'] = 'Imagine de fundal pentru glisarea marcatorilor';
$string['dropzone'] = 'Zonă de plasare elemente {$a}';
$string['dropzoneheader'] = 'Zone de plasare elemente';
$string['dropzones'] = 'Zone de plasare elemente';
$string['dropzones_help'] = 'Zonele delimitate pot fi definite prin coordonate sau glisate în poziția din previzualizarea de mai sus.

Selectând mai întâi o formă (cerc, dreptunghi sau poligon) se va adăuga o nouă formă de zonă de picătură în partea stângă sus a previzualizării. Poate fi util să minimizați secțiunea Marcatori, astfel încât să puteți vedea previzualizarea în timp ce editați zonele delimitate.

Editarea unei forme începe cu un clic pe forma din previzualizare pentru a afișa mânerele de editare. Puteți muta forma folosind mânerul central sau puteți ajusta dimensiunile formei cu mânerele vertexului.

Doar pentru poligoane, ținând apăsat butonul de control (butonul de comandă de pe un Mac) în timp ce faceți clic pe un mâner de vârf, se va adăuga un nou vârf în poligon. Vă rugăm să păstrați o formă de poligon cât mai simplă posibil, fără a traversa liniile.

Pentru informații, cele trei forme folosesc coordonatele în acest fel:

* Cerc: centru_x, centru_y; raza <br /> de exemplu: <code> 80, 100; 50 </code>
* Dreptunghi: top_left_x, top_left_y; lățime, înălțime <br /> de exemplu: <code> 20, 60; 80, 40 </code>
* Poligon: x1, y1; x2, y2; ...; xn, yn <br /> de exemplu: <code> 20, 60; 100, 60; 20, 100 </code>

Selectarea unui text marcator va adăuga textul respectiv la forma din previzualizare.';
$string['followingarewrong'] = 'Următorii marcatori au fost plasați în zona greșită: {$a}.';
$string['followingarewrongandhighlighted'] = 'Următorii marcatori au fost amplasați incorect: {$a}. Marcatorii evidențiați sunt acum afișați cu destinațiile de plasare corecte. <br /> Faceți clic pe marcator pentru a evidenția zona permisă.';
$string['formerror_dragrequired'] = 'Trebuie să adaugi cel puțin un marcator la această întrebare.';
$string['formerror_droprequired'] = 'Trebui să definești cel puțin o drop zonepentru această întrebare.';
$string['formerror_nobgimage'] = 'Trebuie să selectați o imagine pe care să o utilizați ca fundal pentru zona delimitată.';
$string['formerror_noitemselected'] = 'Ați specificat o Zonă de plasare elemente, dar nu ați ales un marcator care trebuie să fie poziționat în acea zonă.';
$string['formerror_nosemicolons'] = 'Nu există punct și virgulă în șirul de coordonate. Coordonatele dvs. pentru o {$a->shape} ar trebui exprimate ca - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Numai etichetele „{$a}” sunt permise în etichetă pentru un marcator.';
$string['formerror_onlyusewholepositivenumbers'] = 'Vă rugăm să utilizați numai numere întregi pozitive pentru a specifica coordonatele x, y și / sau lățimea și înălțimea formelor. Coordonatele pentru o {$a->shape} ar trebui exprimate ca - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Pentru o formă de poligon trebuie să specificați cel puțin 3 puncte. Coordonatele pentru o {$a->shape} ar trebui exprimate ca - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Ați introdus aceleași coordonate de două ori. Fiecare punct trebuie să fie unic. Coordonatele pentru o {$a->shape} ar trebui exprimate ca - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'The shape you have defined goes out of the bounds of the background image.';
$string['formerror_toomanysemicolons'] = 'Există prea multe părți separate de punct și virgulă la coordonatele pe care le-ați specificat. Coordonatele pentru o {$a->shape} ar trebui exprimate ca - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'The width and height that you have specified are unrecognisable. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Coordonatele x, y pe care le-ați specificat sunt de nerecunoscut. Coordonatele dvs. pentru {$a->shape} ar trebui exprimate ca - {$a->coordsstring}.';
$string['infinite'] = 'Infinit';
$string['marker'] = 'Marcator';
$string['marker_n'] = 'Marcator {no}';
$string['markers'] = 'Marcatori';
$string['nolabel'] = 'Fără text de etichetă';
$string['noofdrags'] = 'Număr';
$string['pleasedragatleastonemarker'] = 'Răspunsul tău nu este complet; trebuie să plasezi cel puțin un marcator pe imagine.';
$string['pluginname'] = 'Prinde și plasează elemente de tip marcatori';
$string['pluginname_help'] = 'Întrebarea Prinde și plasează elemente de tip marcatori necesită ca respondentul să gliseze etichete text și să le fixeze în zonele delimitate definite pe o imagine de fundal.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Adăugare întrebare Prinde și plasează elemente de tip marcatori';
$string['pluginnameediting'] = 'Editare întrebare Prinde și plasează elemente de tip marcatori';
$string['pluginnamesummary'] = 'Marcatori sunt glisați și plasați pe o imagine de fundal.

Notă: Acest tip de întrebare nu este accesibil utilizatorilor cu deficiențe de vedere.';
$string['previewareaheader'] = 'Previzualizare';
$string['previewareamessage'] = 'Selectați un fișier imagine de fundal, introduceți etichete de text pentru marcatori și definiți zonele de plasare elemente pe imaginea de fundal în care trebuie să fie plasate.';
$string['privacy:metadata'] = 'Tipul de întrebare Prinde și plasează elemente de tip marcatori nu stochează date personale.';
$string['privacy:preference:defaultmark'] = 'Punctajul implicit setat pentru o întrebare curentă.';
$string['privacy:preference:penalty'] = 'Penalizarea pentru fiecare încercare incorectă atunci când întrebările sunt rulate folosind comportamentul „Interactiv cu încercări multiple” sau „Modul adaptiv”.';
$string['privacy:preference:shuffleanswers'] = 'Dacă întrebările trebuie să fie amestecate în mod automat.';
$string['refresh'] = 'Actualizare previzualizare';
$string['shape'] = 'Formă';
$string['shape_circle'] = 'Cerc';
$string['shape_circle_coords'] = 'x, y; r (unde x, y sunt coordonatele centrului cercului și r este raza)';
$string['shape_circle_lowercase'] = 'cerc';
$string['shape_polygon'] = 'Poligon';
$string['shape_polygon_coords'] = 'x1, y1; x2, y2; x3, y3; x4, y4 ... (unde x1, y1 sunt coordonatele primului vârf, x2, y2 sunt coordonatele celui de-al doilea. Nu este nevoie să fie  repetate coordonatele pentru primul vârf care închide poligonul.)';
$string['shape_polygon_lowercase'] = 'poligon';
$string['shape_rectangle'] = 'Dreptunghi';
$string['shape_rectangle_coords'] = 'x, y; w, h (unde x, y sunt coordonatele colțului din stânga sus al dreptunghiului și w și h sunt lățimea și înălțimea dreptunghiului)';
$string['shape_rectangle_lowercase'] = 'dreptunghi';
$string['showmisplaced'] = 'Evidențiați zonele care nu au indicat corect marcatorul';
$string['shuffleimages'] = 'Amestecați elementele de poziționare de fiecare dată când se afișează întrebarea';
$string['stateincorrectlyplaced'] = 'Indicați care marcatori sunt plasați incorect';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona delimitată {$a}';
$string['ytop'] = 'Sus';
