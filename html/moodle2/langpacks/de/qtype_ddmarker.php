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
 * Strings for component 'qtype_ddmarker', language 'de', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Leerfelder für {no} weitere Markierungen';
$string['alttext'] = 'Alternativer Text';
$string['answer'] = 'Antwort';
$string['bgimage'] = 'Hintergrundbild';
$string['clearwrongparts'] = 'Bewege falsch gesetzte Markierungen zu ihrem Ausgangsplatz unter dem Bild';
$string['coords'] = 'Koordinaten';
$string['correctansweris'] = 'Die richtige Antwort ist: {$a}';
$string['draggableimage'] = 'Verschiebbares Bild';
$string['draggableitem'] = 'Verschiebbares Element';
$string['draggableitemheader'] = 'Verschiebbares Element {$a}';
$string['draggableitemtype'] = 'Typ';
$string['draggableword'] = 'Verschiebbarer Text';
$string['dropbackground'] = 'Hintergrundbild, auf das die Markierungen gezogen werden';
$string['dropzone'] = 'Dropzone {$a}';
$string['dropzoneheader'] = 'Dropzonen';
$string['dropzones'] = 'Dropzonen';
$string['dropzones_help'] = 'Die Ablegebereiche werden definiert, indem Sie Koordinaten eingeben. Die Vorschau wird ständig aktualisiert während Sie tippen, so dass Sie die Ablegebereiche gegebenenfalls auch durch systematisches Ausprobieren definieren können.

* Kreis: mittelpunkt_x, mittelpunkt_y; radius<br>Beispiel: <code>80, 100; 50</code>
* Polygon: x1, y1; x2, y2; ...; xn, yn<br>Beispiel: <code>20, 60; 100, 60; 20, 100</code>
* Rechteck: links, oben; breite, höhe<br>Beispiel: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Die folgenden Markierungen wurden in den falschen Bereich gesetzt: {$a}.';
$string['followingarewrongandhighlighted'] = 'Die folgenden Markierungen wurden falsch gesetzt: {$a}. Hervorgehobene Markierungen werden nun an den richtigen Platzierungen gezeigt. <br />Klicken Sie auf die Markierung, um den erlaubten Bereich zu sehen.';
$string['formerror_nobgimage'] = 'Sie müssen ein Hintergrundbild für die "Drag-and-drop"-Fläche wählen.';
$string['formerror_noitemselected'] = 'Sie haben einen Ablegebereich festgelegt, aber keine Markierung ausgewählt, welche in den Bereich gezogen werden soll.';
$string['formerror_nosemicolons'] = 'Ihre Koordinaten-Zeichenkette enthält keine \';\'. Ihre Koordinaten für ein(en) {$a->shape} müssen als {$a->coordsstring} ausgedrückt werden.';
$string['formerror_onlysometagsallowed'] = 'Nur \'{$a}\' Tags sind in der Beschreibung für eine Markierung erlaubt.';
$string['formerror_onlyusewholepositivenumbers'] = 'Verwenden Sie ausschließlich positive ganze Zahlen, um x,y Koordinaten bzw. um Höhe und Breite zu beschreiben. Die Parameter für ein(en) {$a->shape} müssen in der Form \'{$a->coordstring}\' eingegeben werden.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Für ein Polygon müssen sie mindestens drei Punkte angeben. Ihre Koordinaten für ein(en) {$a->shape} müssen als {$a->coordstring} ausgedrückt werden';
$string['formerror_repeatedpoint'] = 'Sie haben einen Punkt zweimal angegeben. Entfernen Sie die Dopplung. Die Parameter für ein(en) {$a->shape} müssen in der Form \'{$a->coordstring}\' eingegeben werden.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Der angegebenen Umriss liegt nicht auf dem Hintergrundbild.';
$string['formerror_toomanysemicolons'] = 'Ihre Zeichenkette enthält zu viele Strichpunkte. Die Parameter für ein(en) {$a->shape} müssen in der Form \'{$a->coordstring}\' eingegeben werden.';
$string['formerror_unrecognisedwidthheightpart'] = 'Breite und Höhe werden nicht erkannt. Die Parameter für ein(en) {$a->shape} müssen in der Form \'{$a->coordstring}\' eingegeben werden.';
$string['formerror_unrecognisedxypart'] = 'Die angegebenen x,y Koordinaten können nicht erkannt werden. Ihre Koordinaten für ein(en) {$a->shape} müssen als {$a->coordstring} ausgedrückt werden';
$string['infinite'] = 'Unendlich';
$string['marker'] = 'Markierung';
$string['marker_n'] = 'Markierung {no}';
$string['markers'] = 'Markierungen';
$string['nolabel'] = 'Kein Beschriftungstext';
$string['noofdrags'] = 'Anzahl';
$string['pleasedragatleastonemarker'] = 'Die Antwort ist nicht vollständig. Sie müssen mindestens eine Markierung auf das Bild setzen.';
$string['pluginname'] = 'Drag-and-drop-Markierungen';
$string['pluginnameadding'] = 'Füge "Drag-and-drop- Markierungen" hinzu';
$string['pluginnameediting'] = 'Bearbeite "Drag-and-drop- Markierungen"';
$string['pluginname_help'] = '"Drag-and-drop- Markierungen" benötigen Platzhalter, um Textbausteine in die vorgesehenen Anlegebereiche auf dem Hintergrundbild verschieben zu können.';
$string['pluginnamesummary'] = 'Markierungen werden per Drag-and-drop auf ein Hintergrundbild gezogen.';
$string['previewareaheader'] = 'Vorschau';
$string['previewareamessage'] = 'Wählen Sie ein Hintergrundbild, geben Sie Beschriftungstexte für die Markierungen ein und legen Sie die Ablagebereiche auf dem Hintergrundbild fest, auf welche die Markierungen gezogen werden müssen.';
$string['privacy:metadata'] = 'Das Drag-and-Drop Markierungen Frageformat Plugin speichert keine persönlichen Daten.';
$string['refresh'] = 'Vorschau erneuern';
$string['shape'] = 'Umriss';
$string['shape_circle'] = 'Kreis';
$string['shape_circle_coords'] = 'x,y;r - In dieser Liste sind x,y die Koordinaten der Kreismitte und r der Kreisradius.';
$string['shape_circle_lowercase'] = 'circle';
$string['shape_polygon'] = 'Polygon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4;... - In dieser Liste sind x1,y1 die Koordinaten für den ersten Punkt des Polygons, x2,y2 die Koordinaten für den zweiten Punkt, usw. Die Koordinaten für den ersten Punkt müssen nicht wiederholt werden, um das Polygon zu schließen.';
$string['shape_polygon_lowercase'] = 'polygon';
$string['shape_rectangle'] = 'Rechteck';
$string['shape_rectangle_coords'] = 'x,y;b,h - In dieser Liste sind x,y die Koordinaten der linken oberen Ecke des Rechtecks und b und h dessen Breite und Höhe.';
$string['shape_rectangle_lowercase'] = 'rectangle';
$string['showmisplaced'] = 'Kennzeichnen Sie die Ablegebereiche auf welche nicht die richtige Markierung gelegt wurde.';
$string['shuffleimages'] = 'Ziehbare Objekte bei jedem Versuch zufällig anordnen';
$string['stateincorrectlyplaced'] = 'Zeige, welche Markierungen falsch plaziert wurden.';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Dropzone {$a}';
$string['ytop'] = 'Oben';
