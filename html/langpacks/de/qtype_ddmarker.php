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
 * Strings for component 'qtype_ddmarker', language 'de', version '4.4'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['dropzones_help'] = 'Drop-Zonen können durch Koordinaten definiert oder in die obige Vorschau gezogen werden.

Wenn Sie zunächst eine Form auswählen (Kreis, Rechteck oder Polygon), wird oben links in der Vorschau eine neue Drop-Zone-Form hinzugefügt. Es kann nützlich sein, den Bereich Markierungen zu minimieren, damit Sie die Vorschau sehen können, während Sie die Drop-Zonen bearbeiten.

Das Bearbeiten einer Form beginnt mit einem Klick auf die Form in der Vorschau, um die Bearbeitungsziehpunkte anzuzeigen. Sie können die Form verschieben oder die Abmessungen der Form mit den Stützpunkten anpassen.

Nur für Polygone: wenn Sie die Taste Ctrl (bzw. Cmd auf einem Mac) gedrückt halten, während Sie auf einen Stützpunkt klicken, wird dem Polygon ein neuer Stützpunkt hinzugefügt. Halten Sie ein Polygon so einfach wie möglich, ohne dass sich Linien kreuzen.

Die drei Formen verwenden die Koordinaten auf folgende Weise:

* Kreis: centre_x, centre_y; Radius<br />z.B.: <code>80, 100; 50 </code>
* Rechteck: top_left_x, top_left_y; Breite, Höhe <br />z.B.: <code>20, 60; 80, 40 </code>
* Polygon: x1, y1; x2, y2; ... xn, yn <br />z.B.: <code>20, 60; 100, 60; 20, 100</code>

Wenn Sie einen Markierungstext wählen, wird dieser Text der Form in der Vorschau hinzugefügt.';
$string['followingarewrong'] = 'Die Markierungensind in den falschen Bereich gesetzt: {$a}.';
$string['followingarewrongandhighlighted'] = 'Falsch platzierte Markierungen: {$a}. Hervorgehobene Markierungen werden jetzt an den richtigen Stellen angezeigt. Klicken Sie auf die Markierung, um den erlaubten Bereich hervorzuheben.';
$string['formerror_dragrequired'] = 'Sie müssen mindestens eine Markierung für diese Frage definieren.';
$string['formerror_droprequired'] = 'Sie müssen mindestens einen Ablagebereich für diese Frage definieren.';
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
$string['pluginname_help'] = '"Drag-and-drop- Markierungen" benötigen Platzhalter, um Textbausteine in die vorgesehenen Anlegebereiche auf dem Hintergrundbild verschieben zu können.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Füge "Drag-and-drop- Markierungen" hinzu';
$string['pluginnameediting'] = 'Bearbeite "Drag-and-drop- Markierungen"';
$string['pluginnamesummary'] = 'Markierungen werden per Drag-and-drop auf ein Hintergrundbild gezogen.

Hinweis: Dieser Fragetyp ist für sehbehinderte Nutzer/innen nicht barrierefrei.';
$string['previewareaheader'] = 'Vorschau';
$string['previewareamessage'] = 'Wählen Sie ein Hintergrundbild, geben Sie Texte für die Markierungen ein und legen Sie die Ablagebereiche auf dem Hintergrundbild fest, auf welche die Markierungen gezogen werden müssen.';
$string['privacy:metadata'] = 'Das Plugin "Drag-and-Drop Markierungen Frageformat" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:penalty'] = 'Abzug für jeden falschen Versuch, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:shuffleanswers'] = 'Gibt an, ob die Antworten automatisch gemischt werden sollen.';
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
$string['shuffleimages'] = 'Verschiebbare Elemente bei jedem Versuch zufällig anordnen';
$string['stateincorrectlyplaced'] = 'Zeige, welche Markierungen falsch plaziert wurden.';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Dropzone {$a}';
$string['ytop'] = 'Oben';
