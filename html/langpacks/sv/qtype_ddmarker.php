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
 * Strings for component 'qtype_ddmarker', language 'sv', version '3.11'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Blank för {no} fler markörer';
$string['alttext'] = 'Alternativ text';
$string['answer'] = 'Svar';
$string['bgimage'] = 'Bakgrundsbild';
$string['clearwrongparts'] = 'Flytta felaktigt placerade markörer till ursprungsläget nedanför bilden.';
$string['coords'] = 'Koordinater';
$string['correctansweris'] = 'Det rätta svaret är: {$a}';
$string['draggableimage'] = 'Släpbar bild';
$string['draggableitem'] = 'Släpbart föremål';
$string['draggableitemheader'] = 'Släpbart föremål {$a}';
$string['draggableitemtype'] = 'Typ';
$string['draggableword'] = 'Släpbar text';
$string['dropbackground'] = 'Bakgrundsbild att släppa markörer på';
$string['dropzone'] = 'Släppområde {$a}';
$string['dropzoneheader'] = 'Släppzoner';
$string['dropzones'] = 'Släppzoner';
$string['dropzones_help'] = 'Släppzoner kan definieras av koordinater, eller dras på plats i förhandsgranskningen ovan.

Genom att först välja en form (cirkel, rektangel eller polygon) kommer detta göra att en ny släppzons-form läggs till upp till vänster i förhandsvisningen. Det kan vara praktiskt att minimera avsnittet Markörer så att du kan se förhandsgranskningen medan du redigerar släpp-zonerna.

Att redigera en form börjar med ett klick på formen i förhandsgranskningen för att visa redigeringshandtagen. Du kan flytta formen med hjälp av mitthandtaget, eller justera formens mått med vertexhandtagen.

Endast för polygoner; att hålla kontrollknappen (kommandoknappen på en Mac) medan du klickar på ett vertexhandtag kommer att lägga till ett nytt vertex till polygonen. Vänligen polygon-formen så enkel som möjligt, utan att korsa linjerna.

För information; de tre formerna använder koordinater på följande sätt:

* Cirkel: centre_x, centre_y; radie<br />till exempel: <code>80, 100;50</code>
* Rektangel: top_left_x, top_left_y; bredd, höjd<br />till exempel: <code>20, 60;80, 40</code>
* Polygon: x1, y1; x2, y2; ...; xn, yn<br />till exempel: <code>20, 60;100, 60;20, 100</code>

Om du markerar en Marker-text kommer den texten att läggas till i formen i förhandsgranskningen.';
$string['followingarewrong'] = 'Följande markörer är felplacerade: {$a}.';
$string['followingarewrongandhighlighted'] = 'Följande markörer placerades felaktigt : {$a}. Markerad(e) markör(er) visas nu med rätt placering(ar).<br /> Klicka på markören för att markera det tillåtna området.';
$string['formerror_nobgimage'] = 'Du måste välja en bild att använda som bakgrund för dra- och släppområdet.';
$string['formerror_noitemselected'] = 'Du har angivit en släppzon men inte valt den markör som måste dras till zonen.';
$string['formerror_nosemicolons'] = 'Det saknas semikolon i din koordinatsträng. Koordinaterna för en {$a->shape} ska yttryckas som  - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Endast "{$a}"-etiketter är tillåtna för en marköretikett.';
$string['formerror_onlyusewholepositivenumbers'] = 'Vänligen använd endast positiva heltal för att ange x, y koordinater och/ eller bredd och höjd av former. Koordinaterna för en {$a->shape} ska uttryckas som - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'För en polygon-form måste du specificera minst 3 punkter. Varje punkt måste vara unik.  Koordinaterna för en {$a->shape} ska uttryckas som - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Du har angivit samma koordinater dubbelt. Varje punkt måste vara unik. Koordinaterna för en {$a->shape} ska uttryckas som - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Formen du definierat sträcker sig utanför området som utgörs av bakgrundsbilden.';
$string['formerror_toomanysemicolons'] = 'Det är för många semikolonseparerade delar bland koordinaterna du angivit. Koordinaterna för en {$a->shape} ska uttryckas som - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Den angivna bredden och höjden går inte att känna igen. Koordinaterna för en {$a->shape} ska uttryckas som - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'De x,y-koordinater du angivit går inte att känna igen. Koordinaterna för en {$a->shape} ska uttryckas som - {$a->coordsstring}.';
$string['infinite'] = 'oändligt';
$string['marker'] = 'Markör';
$string['marker_n'] = 'Markör {no}';
$string['markers'] = 'Markörer';
$string['nolabel'] = 'Etiketten saknar text';
$string['noofdrags'] = 'Nummer';
$string['pleasedragatleastonemarker'] = 'Ditt svar är inte fullständigt; du måste placera minst en markör på bilden.';
$string['pluginname'] = 'Dra och släpp markörer';
$string['pluginname_help'] = 'Dra och släpp markörer kräver att användaren drar textetiketter och släpper dem i definierade zoner på bakgrundsbilden.';
$string['pluginnameadding'] = 'Lägger till dra och släpp-markörer';
$string['pluginnameediting'] = 'Redigerar dra och släpp-markörer';
$string['pluginnamesummary'] = 'Markörer dras och släpps på bakgrundsbilden. Observera: Denna frågetyp är inte tillgänglig för användare med synnedsättning.';
$string['previewareaheader'] = 'Förhandsgranska';
$string['previewareamessage'] = 'Välj en fil med bakgrundsbilden, ange textetiketter som markörer och definiera släppzoner i vilka markörerna ska släppas.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Dra och släpp markör gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:shuffleanswers'] = 'Om svaren ska blandas automatiskt.';
$string['refresh'] = 'Uppdatera förhandsgranskning';
$string['shape'] = 'Form';
$string['shape_circle'] = 'Cirkel';
$string['shape_circle_coords'] = 'x,y;r (där x,y är koordinaterna för cirkelns centrum och r är dess radie)';
$string['shape_circle_lowercase'] = 'cirkel';
$string['shape_polygon'] = 'Polygon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (där x1, y1 är koordinaterna för första punkten, x2, y2 är koordinaterna för den andra osv. Koordinaterna för den första punkten behöver inte anges på nytt för att sluta formen.)';
$string['shape_polygon_lowercase'] = 'polygon';
$string['shape_rectangle'] = 'Rektangel';
$string['shape_rectangle_coords'] = 'x,y;w,h (där x,y koordinaterna för det övre vänstra hörnet och w och h är bredden och höjden på rektangeln)';
$string['shape_rectangle_lowercase'] = 'rektangel';
$string['showmisplaced'] = 'Markera släppzoner där fel markör släppts i dem';
$string['shuffleimages'] = 'Blanda föremålen som ska släppas inför varje nytt försök';
$string['stateincorrectlyplaced'] = 'Ange vilka markörer som placerats fel';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Släppzon {$a}';
$string['ytop'] = 'Överst';
