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
 * Strings for component 'qtype_ddmarker', language 'nl', branch 'MOODLE_31_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Blanco voor {no} meer markeringen';
$string['alttext'] = 'Alt-tekst';
$string['answer'] = 'Antwoord';
$string['bgimage'] = 'Achtergrondafbeelding';
$string['clearwrongparts'] = 'Verplaatst fout geplaatste markeringen terug in de standaard startpositie onderaan de afbeelding.';
$string['coords'] = 'Coördinaten';
$string['correctansweris'] = 'Het juiste antwoord is: {$a}';
$string['draggableimage'] = 'Versleepbare afbeelding';
$string['draggableitem'] = 'Versleepbaar item';
$string['draggableitemheader'] = 'Versleepbaar item  {$a}';
$string['draggableitemtype'] = 'Type';
$string['draggableword'] = 'Versleepbare tekst';
$string['dropbackground'] = 'Achtergrondafbeelding om markeringen op te slepen';
$string['dropzone'] = 'Neerzetzone  {$a}';
$string['dropzoneheader'] = 'Neerzetzones';
$string['dropzones'] = 'Neerzetzones';
$string['dropzones_help'] = 'De neerzetzones worden gedefinieerd door coördinaten te typen. Terwijl je typt wordt bovenstaand voorbeeld onmiddellijk aangepast, zodat je dingen kunt positioneren door te proberen en aan te passen.

* Cirkel: centre_x, centre_y; radius<br>bijvoorbeeld: <code>80, 100; 50</code>
* Polygoon: x1, y1; x2, y2; ...; xn, yn<br>bijvoorbeeld: <code>20, 60; 100, 60; 20, 100</code>
* Rechthoek: links, boven, breedte, hoogte<br>bijvoorbeeld: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Volgende markeringen staan in de foute zone: {$a}';
$string['followingarewrongandhighlighted'] = 'Volgende markeringen zijn fout geplaatst:  {$a}. De oplichtende markeringen worden nu getoond met de juiste parameters.<br /> Klik op de markering om de toegestan zone aan te geven.';
$string['formerror_nobgimage'] = 'Je moet een afbeelding selecteren om als achtergrond te gebruiken in de zone voor slepen en neerzetten.';
$string['formerror_noitemselected'] = 'Je hebt een neerzetzone gedefinieerd maar niets gekozen dat naar die zone moet gesleept worden.';
$string['formerror_nosemicolons'] = 'Er staan geen puntkomma\'s in je coördinaten. Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Alleen "{$a}"-tags zijn toegestaan in het label voor een markering.';
$string['formerror_onlyusewholepositivenumbers'] = 'Gebruik alleen positieve getallen om x,y-coördinaten op te geven en/of breedtes en hoogtes van vormen.  Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Voor een polygoon moet je minstens 3 punten opgeven.  Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Je hebt twee keer dezelde coördinaten ingegeven. Elk punt moet uniek zijn.  Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'De gedefinieerde vorm gaat buiten de grenzen van de achtergrondafbeelding';
$string['formerror_toomanysemicolons'] = 'Er zijn teveel puntkomma gescheiden delen in de opgegeven coördintaten.  Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'De breedte en de hoogte die je hebt ingegeven zijn onherkenbaar.  Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'De x,y-coördinaten die je hebt ingegeven zijn onherkenbaar.  Je coördinaten voor een {$a->shape} moeten geschreven worden als  - {$a->coordsstring}.';
$string['infinite'] = 'Oneindig';
$string['marker'] = 'Markering';
$string['marker_n'] = 'Markering {no}';
$string['markers'] = 'Markeringen';
$string['nolabel'] = 'Geen labeltekst';
$string['noofdrags'] = 'Nummer';
$string['pleasedragatleastonemarker'] = 'Je antwoord is niet volledig; je moet minstens één markering op de afbeelding plaatsten.';
$string['pluginname'] = 'Sleep- en neerzetmarkeringen';
$string['pluginnameadding'] = 'Sleep- en neerzetmarkeringen toevoegen';
$string['pluginnameediting'] = 'Sleep- en neerzetmarkeringen bewerken';
$string['pluginname_help'] = 'Sleep- en neerzetmarkeringen verwachten van de respondent dat tekstlabels gesleept worden op neerzetzones op een achtergrondafbeelding.';
$string['pluginnamesummary'] = 'Markeringen worden gesleept en neergezet op de achtergrondafbeelding.';
$string['previewareaheader'] = 'Voorbeeld';
$string['previewareamessage'] = 'Selecteer een bestand als achtergrondafbeelding, maak tekstlabels voor markeringen en bepaal neerzetzones op de achtergrondafbeelding waar die naartoe gesleept moeten worden.';
$string['refresh'] = 'Voorbeeld verversen';
$string['shape'] = 'Vorm';
$string['shape_circle'] = 'Cirkel';
$string['shape_circle_coords'] = 'x;y;r (waarbij x,y de coördinaten zijn van het midden van de cirkel en r de radius is)';
$string['shape_circle_lowercase'] = 'cirkel';
$string['shape_polygon'] = 'Polygoon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4;... (waarbij x1,x2 de coördinaten zijn voor de eerste vertex, x2,y2 de coördinaten van de tweede enz. Je moet de coördinaten van de eerste vertex niet herhalen om de polygoon te sluiten.)';
$string['shape_polygon_lowercase'] = 'polygoon';
$string['shape_rectangle'] = 'Rechthoek';
$string['shape_rectangle_coords'] = 'x,y;w,h (waarbij x,y de coördinaten zijn van de linker bovenhoek van de rechthoek en w en h de breedte en de hoogte van de rechthoek zijn.';
$string['shape_rectangle_lowercase'] = 'rechthoek';
$string['showmisplaced'] = 'Neerzetzones oplichten waarvoor nog geen juiste markering geplaatst is.';
$string['shuffleimages'] = 'Haal de te slepen items door elkaar, telkens de vraag getoond wordt.';
$string['stateincorrectlyplaced'] = 'Geef aan welke markeringen fout geplaatst werden.';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Neerzetzone {$a}';
$string['ytop'] = 'Bovenaan';
