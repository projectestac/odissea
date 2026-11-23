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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Bedingungen für die Variablen hinzufügen.';
$string['addmorevarblanks'] = 'Leerfelder für {no} zusätzliche Variablen';
$string['answerinvalid'] = 'Der Antwortstring in der Abgabe ist falsch. Das sollte nicht passieren.';
$string['answermissing'] = 'Der Antwortstring fehlt in der Abgabe. Möglicherweise ist JavaScript im Browser nicht aktiviert oder ein sonstiger unbekannter Fehler ist aufgetreten';
$string['answervar'] = 'Variablen für die automatische Bewertung';
$string['answervar_help'] = 'Für die automatische Bewertung: Der Name jenes Wahrheitswertes in GeoGebra, der wahr ist, wenn der / die Lernende die Aufgabe (teilweise) korrekt gelöst hat. Es werden alle Bewertungen aufsummiert. Die Frage gilt als korrekt beantwortet wenn irgendeine Kombination 100% übersteigt, aber es sollte mindestens eine Kombination geben die genau 100% ergibt. Leer lassen für manuelle Bewertung!';
$string['applet_advanced_settings'] = 'Erweiterte Einstellungen...';
$string['forcedimensions'] = 'Applet-Größe festlegen';
$string['forcedimensions_help'] = 'Das GeoGebra-Applet wird normalerweise in das Test-Layout skaliert. Durch Aktivieren dieser Option kann manuell eine fixe Breite und Höhe angegeben werden. Dies verhindert die automatische Skalierung.';
$string['forcedimensionsenable'] = 'Breite und Höhe manuell angeben';
$string['constraints'] = 'Bedingungen (Ungleichungen)';
$string['constraints_help'] = 'Gibt es Bedingungen (Ungleichungen), welche die Variablen erfüllen müssen, z. B. a < b, welche nicht über die Einstellungen der Schieberegler eingegeben werden konnten? Diese müssen durch ein Komma getrennt werden. Unterstützte Ungleichungen sind <, <=, >, >=. Falls sie Gleichheit benötigen müssen sie in GeoGebra die gleiche Variable verwenden. Dynamische Bereiche, wie z. B. das Verwenden von Variablen für Min/Max von Schiebereglern wird von diesem Plugin nicht unterstützt.';
$string['constraintswrongortoohard'] = '{$a->inequalities} sind ungültig oder erfordern zu viel Rechenleistung, we tried (brute force) {$a->tries} times in {$a->time} seconds. Maybe we\'ll use better math in the future...';
$string['dragndrop'] = 'GeoGebra Datei mit Hilfe von drag and drop (ziehen und ablegen) auf den GeoGebra Applet Bereich\nhinzufügen.';
$string['enable_label_drags'] = 'Ziehen von Beschriftungen aktivieren';
$string['enable_right_click'] = 'Rechtsklick und Tastatur aktivieren';
$string['enable_shift_drag_zoom'] = 'Bewegungen und Zoom mit Shift aktivieren';
$string['feedback'] = 'Feedback für diese Variable wenn diese wahr ist.';
$string['feedback_help'] = 'Als Feedback wird automatisch die Beschriftung dieser Variable in der GeoGebra-Datei verwendet.';
$string['geogebraapplet'] = 'GeoGebra Applet';
$string['getvars'] = 'Variablen die zufällig verändert werden könnten aus dem Applet laden';
$string['ggbfilemissing'] = 'Der Base64-String fehlt in der Abgabe. Möglicherweise ist JavaScript im Browser nicht aktiviert oder ein sonstiger unbekannter Fehler ist aufgetreten';
$string['ggbturl'] = 'URL oder ID des GeoGebra Worksheets';
$string['ggbturl_help'] = 'Sie können entweder den Teilen Button in GeoGebra verwenden und den Link kopieren und einfügen oder die GeoGebra Repository verwenden. Das Applet wird vollständig in der Moodle Datenbank gespeichert. Das Applet wird nur von GeoGebra neu geladen wenn Sie den Button "Applet (neu) laden und anzeigen" klicken. Wenn Sie nur die ID oder Sharing Key verwenden sollte auch das richtige Applet geladen werden können.';
$string['ggbxmlmissing'] = 'Der XML-String fehlt in der Abgabe. Möglicherweise ist JavaScript im Browser nicht aktiviert oder ein sonstiger unbekannter Fehler ist aufgetreten';
$string['height'] = 'Höhe';
$string['heightnotzero'] = 'Sie müssen einen Wert größer Null für die Höhe angeben';
$string['height_help'] = 'Das GeoGebra-Applet wird normalerweise automatisch in das Layout des Tests skaliert. Falls Sie dies nicht wünschen, können Sie die Breite und Höhe des Applets manuell festlegen. Bei zu großen Werten wird der Benutzer Scroll-Balken sehen, um auf alle Elemente des Applets zugreifen zu können.';
$string['invalidinequality'] = '{$a} ist ungültig';
$string['isexercise'] = 'Integrierte Aufgabenprüfung von GeoGebra zur Fragenüberprüfung verwenden';
$string['isexercise_help'] = 'Die Aufgabe enthält benutzerdefinierte Werkzeuge zur automatischen Überprüfung der Konstruktion.\nAchtung: in diesem Fall werden KEINE Antworten (unten) berücksichtigt!';
$string['israndomized'] = 'Gibt es Variablen, die zufällig verändert werden sollen?';
$string['loadapplet'] = 'Applet (neu) laden und anzeigen';
$string['loadapplet_help'] = 'Laden Sie das Applet von GeoGebra (neu) und speichern Sie die neue Version in der Datenbank.';
$string['mineqmax'] = 'Min und Max für die Randomisierung sind für die Variable {$a} nicht korrekt definiert. Entweder Slider min und max sind nicht korrekt angegeben oder das Objekt ist kein Slider. Sie müssen das möglicherweise in Ihrer GeoGebra-Datei korrigieren.';
$string['minplusstepgtmax'] = 'Min plus Inkrement ist größer als Max für Variable {$a}, Sie müssen das möglicherweise in Ihrer GeoGebra-Datei korrigieren.';
$string['noappletloaded'] = 'Es wurde kein Applet geladen! Überprüfen Sie ob die URL korrekt ist und ob das applet sichtbar ist nach dem Sie ein Applet gewählt oder (neu) geladen haben!';
$string['nofractionsumeq1'] = 'Mindestens eine Kombination von Bewertungen muss in Summe 100% ergeben!';
$string['pluginname_help'] = 'Fragen, welche die Teilnehmer in GeoGebra lösen können.';
$string['pluginnameadding'] = 'Eine GeoGebra basierte Frage hinzufügen';
$string['pluginnameediting'] = 'Eine GeoGebra basierte Frage bearbeiten';
$string['pluginnamesummary'] = 'Eine Version der berechneten Fragen, bei der GeoGebra für die Anzeige der Frage und Überprüfung der Antwort verwendet wird.';
$string['randomizedbutnovars'] = 'Sie haben angegeben, dass die Frage randomisiert werden soll haben aber keine oder nicht existierende Variablen angegeben.';
$string['randomizedvar'] = 'Variablen die zufällig verändert werden sollen';
$string['randomizedvar_help'] = 'Variablen die zufällig verändert werden sollen (durch Komma getrennt). Verwenden Sie die Einstellungen der Schieberegler in GeoGebra um Min, Max und Schrittweite festzulegen. Die Werte der Variablen können auch in der Frage benutzt werden, indem man sie in geschwungene Klammern setzt, z.B. {a}';
$string['show_algebra_input'] = 'Eingabezeile anzeigen';
$string['show_menu_bar'] = 'Menü anzeigen';
$string['show_reset_icon'] = 'Symbol zum Zurücksetzen der Konstruktion anzeigen';
$string['show_tool_bar'] = 'Werkzeugleiste anzeigen';
$string['stepzero'] = 'Inkrement ist 0, für Variable {$a}. Entweder das Inkrement beim  Slider ist nicht korrekt angegeben oder das Objekt ist kein Slider. Sie müssen das möglicherweise in Ihrer GeoGebra-Datei korrigieren.';
$string['useafile'] = '... oder eine ggb-Datei verwenden';
$string['valuecheckedfor'] = 'Boolesches Objekt in GeoGebra, mit dem die Aufgabe auf Korrektheit überprüft werden kann.';
$string['variablenamewrong'] = 'Es konnte keine Variable mit diesem Namen im GeoGebra applet gefunden werden.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variablen';
$string['width'] = 'Breite';
$string['widthnotzero'] = 'Sie müssen einen Wert größer Null für die Breite angeben';
$string['width_help'] = 'Das GeoGebra-Applet wird normalerweise automatisch in das Layout des Tests skaliert. Falls Sie dies nicht wünschen, können Sie die Breite und Höhe des Applets manuell festlegen. Bei zu großen Werten wird der Benutzer Scroll-Balken sehen, um auf alle Elemente des Applets zugreifen zu können.';
$string['willbereadfromfile'] = 'Wird aus GeoGebra gelesen... (siehe Hilfebutton)';
