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
 * Strings for component 'booktool_wordimport', language 'de', version '4.5'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Die temporäre Datei <b>{$a}</b> kann nicht geöffnet werden.';
$string['embeddedimageswarning'] = 'Achtung: Diese Datei muss mit Word 2020 oder Word 365 geöffnet werden, um eingebettete Bilder korrekt zu verarbeiten.';
$string['encodedimageswarning'] = 'Achtung: Diese Datei enthält verschlüsselte Bilder. Siehe <a href="http://www.moodle2word.net/mod/page/view.php?id=143">weitere Informationen zum Rückkonvertieren in eingebettete Bilder</a>.';
$string['exportbook'] = 'Buch nach Microsoft Word exportieren';
$string['exportchapter'] = 'Dieses Kapitel nach Microsoft Word exportieren';
$string['exportformat'] = 'Export-Format.';
$string['exportformat_desc'] = 'Export-Format.';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Wählen Sie Word 2020/365-kompatibles Format, wenn Sie Zugriff auf Word 2019, Word 2020 oder Word 365 haben. Andernfalls wählen Sie Word 2010, das eine externe Word-Vorlage erfordert, um Bilder in ein verwendbares Format konvertieren zu können. Weitere Informationen zum Rückkonvertieren in eingebettete Bilder finden Sie unter <a href="http://www.moodle2word.net/mod/page/view.php?id=143">Weitere Informationen zum Rückkonvertieren in eingebettete Bilder</a>.';
$string['heading1stylelevel'] = 'Überschriftenebene für "Überschrift 1"';
$string['heading1stylelevel_desc'] = 'HTML-Überschriftenebene, die der Word-Vorlage "Überschrift 1" zugeordnet werden soll.';
$string['importchapters'] = 'Aus Microsoft Word importieren';
$string['insertionpoint'] = 'Vor dem aktuellen Kapitel einfügen';
$string['insertionpoint_help'] = 'Fügt den neuen Inhalt vor dem aktuellen Kapitel ein. Alle bestehenden Inhalte bleiben unverändert.';
$string['nochapters'] = 'Keine Buchkapitel gefunden. Ein Export nach Microsoft Word ist nicht möglich.';
$string['pluginname'] = 'Import/Export Microsoft Word-Datei (Buch)';
$string['privacy:metadata'] = 'Das Plugin Import/Export Microsoft Word-Datei (Buch) speichert keine personenbezogenen Daten.';
$string['replacebook'] = 'Buch ersetzen';
$string['replacebook_help'] = 'Den aktuellen Inhalt des Buches vor dem Import löschen';
$string['replacechapter'] = 'Aktuelles Kaptiel ersetzen';
$string['replacechapter_help'] = 'Den Inhalt des aktuellen Kapitels mit dem ersten Kapitel aus der Datei ersetzen. Alle anderen Kapitel bleiben unverändert.';
$string['settings'] = 'Einstellungen Import/Export Microsoft Word-Datei (Buch)';
$string['splitonsubheadings'] = 'Unterkapitel basierend auf Unterüberschriften erzeugen';
$string['splitonsubheadings_help'] = 'Unterkaptiel werden auf der Basis der "Überschrift 2"-Vorlage erstellt';
$string['stylesheetunavailable'] = 'XSLT Stylesheet <b>{$a}</b> ist nicht verfügbar';
$string['transformationfailed'] = 'XSLT Umwandlung fehlgeschlagen';
$string['wordfile'] = 'Microsoft Word-Datei';
$string['wordfile_help'] = '<i>docx</i>-Datei hochladen, die mit Microsoft Word oder LibreOffice gespeichert wurde';
$string['wordimport:export'] = 'Microsoft Word-Datei exportieren';
$string['wordimport:import'] = 'Microsoft Word-Datei importieren';
$string['xsltunavailable'] = 'Die XSLT Bibliothek muss in PHP installiert sein, um diese Word-Datei speichern zu können.';
