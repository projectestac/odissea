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
 * Strings for component 'gradereport_gradedist', language 'de', version '4.5'.
 *
 * @package     gradereport_gradedist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a'] = '(absolut)';
$string['absolut'] = 'Absolut';
$string['actcoverage'] = 'Durch aktuelle Notenstufen nicht erfasste Bewertungen:';
$string['actualcolumns'] = 'aktuelle Notenstufen';
$string['actualgrade'] = 'Note (aktuell)';
$string['boundaryerror'] = 'Die Eingabe für neue Notenstufen enthält ungültige Werte. Es müssen alle Notenstufen ausgefüllt sein.';
$string['category'] = 'Notenkategorie';
$string['changeletters'] = 'Notenstufen ändern';
$string['chart'] = 'Diagramm';
$string['columns'] = 'Balken';
$string['confirm'] = 'Notenstufen wirklich ändern';
$string['confirmationtableviewed'] = 'Bestätigungstabelle angezeigt';
$string['confirmationtableviewed_description'] = 'Der Benutzer mit id {$a->userid} überprüfte die neuen Notenstufen.';
$string['contextbuttontitle'] = 'Diagramm Kontextmenü';
$string['coursesum'] = 'Summe für den Kurs';
$string['coverage'] = 'Die neue Notenverteilung erfasst nicht alle Bewertungen!';
$string['coverage_export'] = 'Durch Notenstufen nicht erfasste Bewertungen:';
$string['csv'] = 'csv';
$string['decimals'] = 'Sie können als untere Grenze nur Zahlen von 0 bis 100 eingeben. Dabei sind bis zu zwei Dezimalstellen erlaubt.';
$string['description'] = 'Beschriftung';
$string['download'] = 'Herunterladen';
$string['downloadjpeg'] = 'JPEG-Bild';
$string['downloadpdf'] = 'PDF-Dokument';
$string['downloadpng'] = 'PNG-Bild';
$string['downloadsvg'] = 'SVG Vektorgraphik downloaden';
$string['export'] = 'Information herunterladen als';
$string['exportasimage'] = 'Diagramm herunterladen als';
$string['gradeboundary'] = 'Untere Grenze in %';
$string['gradeboundary_help'] = 'Mindestprozentwert der erreichbaren Punkte, ab dem eine Bewertung einer bestimmten Notenstufe zugeordnet wird.';
$string['gradeboundary_new'] = 'Neue untere Grenze in %';
$string['gradeboundary_new_help'] = 'Unter "Neue untere Grenze in %" wird die Auswirkung dieser auf die Notenverteilung angezeigt. Nur die Eingabe von Dezimalzahlen mit bis zu 2 Nachkommastellen im Bereich 0-100 ist möglich.';
$string['gradedist:edit'] = 'Notenverteilung bearbeiten';
$string['gradedist:view'] = 'Notenverteilung anzeigen';
$string['gradedistdownloaded'] = 'Aktuelle Notenverteilung heruntergeladen';
$string['gradedistdownloaded_description'] = 'Der Benutzer mit id {$a->userid} exportierte die aktuelle Notenverteilung.';
$string['gradedistviewed'] = 'Notenverteilung angezeigt';
$string['gradedistviewed_description'] = 'Der Benutzer mit id {$a->userid} besuchte die Notenverteilung.';
$string['gradeitem'] = 'Bewertungsspalte';
$string['gradeletter'] = 'Notenstufen';
$string['highchartsmissing'] = 'Zur Anzeige des Diagramms downloaden Sie die Version 4.x der Highcharts Library von <a href="http://code.highcharts.com/">http://code.highcharts.com/</a>. Kopieren Sie die beiden Dateien, das Modul highcharts.src.js und das Modul exporting.src.js, bzw. alternativ falls bevorzugt deren minimierte Version highcharts.js und exporting.js, zusammen in das Verzeichnis moodleroot/grade/report/gradedist/js.';
$string['interval'] = 'Sie können als untere Grenze nur Werte zwischen 0-100 eingeben.';
$string['labelgroup'] = 'Ansicht auf Gruppe fokusieren';
$string['labelgrouping'] = 'Ansicht auf Gruppierung fokusieren';
$string['newcolumns'] = 'neue Notenstufen';
$string['newcoverage'] = 'Durch neue Notenstufen nicht erfasste Bewertungen:';
$string['newgrade'] = 'Note (neue)';
$string['newletterssubmitted'] = 'Neue Notenstufen gespeichert';
$string['newletterssubmitted_description'] = 'Der Benutzer mit id {$a->userid} speicherte die neuen Notenstufen.';
$string['nogroupingentry'] = 'Keine Gruppierung';
$string['notification'] = 'Hinweis: Die Notenstufen werden für alle Spalten Ihres Kurses übernommen und können nur für den gesamten Kurs gesetzt werden.';
$string['ods'] = 'ods';
$string['p'] = '(%)';
$string['percent'] = 'Prozent';
$string['pluginname'] = 'Notenverteilung';
$string['pluginname_help'] = 'Mit Hilfe der Notenverteilung können Sie sich über eine Bewertungsspalte die Verteilung der Notenstufen anhand der aktuellen unteren Grenzen anzeigen lassen. Sie können neue untere Grenzen festlegen und erkennen auf einen Blick die möglichen Auswirkungen Ihrer Änderung auf die Verteilung. Sind Sie mit den neuen unteren Grenzen zufrieden, können Sie die aktuellen Notenstufen des Kurses mit diesen neuen unteren Grenzen überschreiben.
Hinweis: Die Notenstufen werden für alle Spalten Ihres Kurses übernommen und können nur für den gesamten Kurs gesetzt werden.';
$string['points'] = 'Punkte ({$a})';
$string['predecessor'] = 'Jede Notenstufe muss eine niedrigere untere Grenze haben als die nächsthöhere Notenstufe.';
$string['printchart'] = 'Diagramm drucken';
$string['privacy:null_reason'] = 'Dieses Plugin speichert keine personenbezogenen Daten. Es bietet eine Schnittstelle an, von der aus eine visuelle Repräsentation der Notenverteilung in einem Kurs eingesehen werden kann. Existierende Daten können exportiert werden.';
$string['saved'] = 'Die Notenstufen wurden erfolgreich geändert.';
$string['showgradeitem'] = 'Auswahl Bewertungsspalte';
$string['showgradeitem_description'] = 'Zeige Bewertungsaspekte mit folgenden Bewertungsanzeige-Typen als Auswahlmöglichkeit unter Bewertungsspalte an.';
$string['showgradeitemtype'] = 'Bewertungsaspekt-Typ anzeigen';
$string['showgradeitemtype_help'] = 'Der Typ von Bewertungsaspekten wie "Test" oder "Aufgabe" werden angezeigt.';
$string['sum'] = 'Summe';
$string['xlsx'] = 'xlsx';
