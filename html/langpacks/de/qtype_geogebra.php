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
 * Strings for component 'qtype_geogebra', language 'de', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Fügen Sie Einschränkungen (Bedingungen) zu Variablen hinzu.';
$string['addmorevarblanks'] = 'Leerzeichen für {no} weitere(n) Variable(n)';
$string['answerinvalid'] = 'Die Antwort-Zeichenkette in der Antwort ist ungültig. Dies sollte nicht passieren.';
$string['answermissing'] = 'Die Antwort in der Rückgabe fehlt. Wahrscheinlich ist JavaScript im Browser nicht eingeschaltet oder ein unbekannter Fehler ist aufgetreten';
$string['answervar'] = 'Variablen für die automatische Bewertung';
$string['answervar_help'] = 'Für die automatische Benotung: Ein Name eines Parameters (boolean) in GeoGebra, der wahr ist, wenn der Schüler die Frage (teilweise) gelöst hat. Summiert alle Bewertungen für alle booleschen Variablen. Die Frage ist richtig, wenn irgendeine Kombination 100 % übersteigt, aber es sollte mindestens eine Kombination geben, die sich auf genau 100 % aufsummiert. Für die manuelle Bewertung leer lassen.';
$string['applet_advanced_settings'] = 'Erweiterte Einstellungen...';
$string['constraints'] = 'Einschränkungen (Bedingungen)';
$string['constraints_help'] = 'Gibt es Einschränkungen für Variablen, wie z. B. a < b, die nicht mit den Schieberegleroptionen deklariert werden konnten? Durch Komma getrennt. Unterstützte Relationen sind: <, <=, >, >=. Wenn Sie eine Gleichheit benötigen, müssen Sie die gleiche Variable beim Erstellen des GeoGebra Arbeitsblattes verwenden. Dynamische Bereiche, d.h. die Verwendung von Variablen für Schieberegler min/max werden nicht unterstützt.';
$string['constraintswrongortoohard'] = '{$a->inequalities} sind falsch oder zu schwer zu erfüllen, wir haben es mittels Brute-Force {$a->tries} mal in {$a->time} Sekunden versucht. Vielleicht werden wir in Zukunft eine bessere Methode verwenden...';
$string['dragndrop'] = 'Ziehen Sie eine GeoGebra-Datei an eine beliebige Stelle des GeoGebra Applet-Bereichs und legen Sie sie dort ab';
$string['enable_label_drags'] = 'Aktivieren des Verschiebens von Beschriftungen';
$string['enable_right_click'] = 'Aktivieren von Rechtsklick und Tastaturbearbeitung';
$string['enable_shift_drag_zoom'] = 'Shift-Drag & Zoom aktivieren';
$string['feedback'] = 'Rückmeldung, wenn die Variable wahr ist';
$string['feedback_help'] = 'Die Rückmeldung wird automatisch aus der Beschriftung der Variablen in der GeoGebra-Datei übernommen.';
$string['forcedimensions'] = 'Applet-Dimensionen erzwingen';
$string['forcedimensions_help'] = 'Standardmäßig wird das GeoGebra-Applet automatisch in das Testlayout skaliert. Wenn Sie diese Option aktivieren, können Sie die Breite und Höhe des Plugins manuell angeben und die automatische Skalierung deaktivieren.';
$string['forcedimensionsenable'] = 'Breite und Höhe manuell angeben';
$string['geogebraapplet'] = 'GeoGebra Applet';
$string['getvars'] = 'Variablen holen, die vom Applet randomisiert werden können';
$string['ggbfilemissing'] = 'Die base64-Zeichenfolge in der Antwort fehlt. Wahrscheinlich ist JavaScript im Browser nicht eingeschaltet oder ein unbekannter Fehler ist aufgetreten';
$string['ggbturl'] = 'URL oder ID des GeoGebra Arbeitsblatts (aus Geogebra Materials)';
$string['ggbturl_help'] = 'Sie können entweder die Share-Schaltfläche in GeoGebra verwenden und den Link kopieren und einfügen oder das GeoGebra Repository verwenden. Das Applet und die Parameter werden in der Datenbank gespeichert. Das Applet wird nur auf Anfrage aus GeoGebra neu geladen. Das einfache Bereitstellen der ID oder des Freigabeschlüssels des Applets wird ebenfalls unterstützt.';
$string['ggbxmlmissing'] = 'Der XML-String in der Antwort fehlt. Wahrscheinlich ist JavaScript im Browser nicht eingeschaltet oder ein unbekannter Fehler ist aufgetreten';
$string['height'] = 'Höhe';
$string['height_help'] = 'Standardmäßig wird das GeoGebra-Applet automatisch skaliert, um es an das Testlayout anzupassen. Wenn dies aus irgendwelchen Gründen nicht Ihren Anforderungen entspricht, können Sie Breite und Höhe manuell angeben. Wenn die Werte zu hoch sind, sehen Teilnehmer/innen auf kleinen Bildschirmen eine Bildlaufleiste, um das Applet vollständig anzuzeigen.';
$string['heightnotzero'] = 'Sie müssen einen Wert größer als Null für die Höhe angeben.';
$string['invalidinequality'] = '{$a} ist ungültig';
$string['isexercise'] = 'Verwenden Sie GeoGebra-Übung zur Überprüfung der Frage';
$string['isexercise_help'] = 'Das Applet enthält benutzerdefinierte Werkzeuge, die für die automatische Überprüfung der Übung verwendet werden können.\\nBitte beachten: Alle nachfolgenden Antworten sind in diesem Fall nicht anwendbar!';
$string['israndomized'] = 'Gibt es irgendwelche Variablen, die randomisiert werden sollten?';
$string['loadapplet'] = 'Applet (erneut) laden und anzeigen';
$string['loadapplet_help'] = '(Neu-)Laden des Applets aus GeoGebra und Speichern der neuen Version aus GeoGebra in der Datenbank.';
$string['mineqmax'] = 'Min und Max für die Randomisierung sind für die Variable {$a} nicht richtig angegeben, entweder haben Sie die Min und Max des Schiebers nicht angegeben oder das Element ist gar kein Schieberegler. Sie müssen dies wahrscheinlich in Ihrer GeoGebra-Datei korrigieren.';
$string['minplusstepgtmax'] = 'Das Minimum der Variable {$a} ist größer als das Maximum, Sie müssen dies wahrscheinlich in Ihrer GeoGebra-Datei korrigieren.';
$string['noappletloaded'] = 'Kein Applet geladen! Prüfen Sie, ob die URL korrekt ist und ob Sie ein Applet sehen, nachdem Sie einen Link gewählt oder das Applet (erneut) geladen haben';
$string['nofractionsumeq1'] = 'Mindestens eine Bewertungskombination muss 100 % ergeben';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Fragen, bei denen der Schüler die Frage mit Hilfe von GeoGebra lösen kann';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'Hinzufügen einer GeoGebra-Frage';
$string['pluginnameediting'] = 'Bearbeiten einer GeoGebra-Frage';
$string['pluginnamesummary'] = 'Eine Version von berechneten Fragen, die GeoGebra verwendet, um die Frage anzuzeigen und die Antwort zu überprüfen, wenn das Quiz durchgeführt wird.';
$string['privacy:metadata'] = 'Das Plugin Geogebra-Fragetyp speichert keine personenbezogene Daten.';
$string['randomizedbutnovars'] = 'Sie haben ausgewählt, dass die Frage randomisiert werden soll, aber Sie haben keine gültigen Variablen angegeben, die randomisiert werden sollen.';
$string['randomizedvar'] = 'Zu randomisierende Variablen';
$string['randomizedvar_help'] = 'Variablen, die randomisiert werden sollen (kommagetrennt). Verwenden Sie die Schieberegler-Optionen in GeoGebra, um Min, Max und Inkrement zu deklarieren. Diese Variablen können auch im Fragentext verwendet werden, indem sie mit geschweiften Klammern umschlossen werden, z. B: {a}';
$string['show_algebra_input'] = 'Eingabeleiste anzeigen';
$string['show_menu_bar'] = 'Menü anzeigen';
$string['show_reset_icon'] = 'Symbol zum Zurücksetzen der Konstruktion anzeigen';
$string['show_tool_bar'] = 'Symbolleiste anzeigen';
$string['stepzero'] = 'Inkrement ist 0 für die Variable {$a}; entweder haben Sie das Inkrement des Schiebereglers nicht angegeben oder das Element ist gar kein Schieberegler. Wahrscheinlich müssen Sie dies in Ihrer GeoGebra-Datei korrigieren.';
$string['useafile'] = '... oder eine ggb-Datei verwenden';
$string['valuecheckedfor'] = 'Boolesches Objekt in GeoGebra, das zur Überprüfung der Korrektheit verwendet wird.';
$string['variablenamewrong'] = 'Eine Variable mit diesem Namen konnte in der GeoGebra-Datei nicht gefunden werden.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variablen';
$string['width'] = 'Breite';
$string['width_help'] = 'Standardmäßig wird das GeoGebra-Applet automatisch skaliert, um es an das Testlayout anzupassen. Wenn dies aus irgendwelchen Gründen nicht Ihren Anforderungen entspricht, können Sie Breite und Höhe manuell angeben. Wenn die Werte zu hoch sind, sehen Teilnehmer/innen auf kleinen Bildschirmen eine Bildlaufleiste, um das Applet vollständig anzuzeigen.';
$string['widthnotzero'] = 'Sie müssen einen Wert größer als Null für die Breite angeben.';
$string['willbereadfromfile'] = 'Wird aus GeoGebra gelesen... (siehe Hilfe-Schaltfläche)';
