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
 * Strings for component 'book', language 'de', version '4.5'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Kapitel hinzufügen';
$string['addafterchapter'] = 'Neues Kapitel nach \'{$a->title}\' hinzufügen';
$string['book:addinstance'] = 'Neues Buch hinzufügen';
$string['book:edit'] = 'Kapitel bearbeiten';
$string['book:read'] = 'Buch anzeigen';
$string['book:viewhiddenchapters'] = 'Verborgene Kapitel anzeigen';
$string['chapterandsubchaptersdeleted'] = 'Kapitel "{$a->title}" und seine {$a->subchapters} Unterkapitel wurden gelöscht';
$string['chapterdeleted'] = 'Kapitel "{$a->title}" wurde gelöscht';
$string['chapters'] = 'Kapitel';
$string['chaptertitle'] = 'Überschrift';
$string['confchapterdelete'] = 'Wollen Sie dieses Kapitel wirklich löschen?';
$string['confchapterdeleteall'] = 'Wollen Sie dieses Kapitel zusammen mit allen Unterkapiteln wirklich löschen?';
$string['content'] = 'Inhalte';
$string['customtitles'] = 'Eigene Überschriften';
$string['customtitles_help'] = 'Normalerweise werden die Kapitelüberschriften im Inhaltsverzeichnis genauso angezeigt wie oben auf der Buchseite.

Wenn diese Option aktiviert ist, werden die Kapitelüberschriften ausschließlich im Inhaltsverzeichnis benutzt. Die Buchseiten können dann eigene (eventuell auch längere) Kapitelüberschriften bekommen.';
$string['deletechapter'] = 'Kapitel "{$a}" löschen';
$string['editchapter'] = 'Kapitel "{$a}" bearbeiten';
$string['editingchapter'] = 'Kapitel bearbeiten';
$string['errorchapter'] = 'Fehler beim Lesen des Kapitels';
$string['eventchaptercreated'] = 'Kapitel angelegt';
$string['eventchapterdeleted'] = 'Kapitel gelöscht';
$string['eventchapterupdated'] = 'Kapitel aktualisiert';
$string['eventchapterviewed'] = 'Kapitel angezeigt';
$string['hidechapter'] = 'Kapitel "{$a}" verbergen';
$string['indicator:cognitivedepth'] = 'Buch kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person bei einem Buch erreicht hat.';
$string['indicator:cognitivedepthdef'] = 'Buch kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Buchaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Buch sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person bei einem Buch erreicht hat.';
$string['indicator:socialbreadthdef'] = 'Buch sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die Buchaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Buch';
$string['modulename_help'] = 'Statt endlos durch lange Texte am Bildschirm zu scrollen, teilen Sie Ihre Lerninhalte auf kurze Seiten innerhalb eines Buchs in einem buchähnlichen Format mit Kapiteln und Unterkapiteln auf.

Ergänzen Sie die Texte mit Grafiken, Bildern oder multimedialen Elementen, um den Inhalt ansprechend zu gestalten. Inhalte können in Abschnitte unterteilt werden.

Ein Buch kann verwendet werden

* Um Lesematerial für individuelle Studienmodule anzuzeigen
* Als Abteilungshandbuch für Mitarbeiter/innen
* Als Schaukasten für Portfolios von studentischen Arbeiten';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Bücher';
$string['movechapterdown'] = 'Kapitel "{$a}"nach unten verschieben';
$string['movechapterup'] = 'Kapitel "{$a}" nach oben verschieben';
$string['navexit'] = 'Buch schließen';
$string['navimages'] = 'Navigationsicons';
$string['navnext'] = 'Weiter';
$string['navnexttitle'] = 'Nächster Titel: {$a}';
$string['navoptions'] = 'Optionen für Navigationslinks';
$string['navoptions_desc'] = 'Optionen zur Navigationsanzeige auf den Buchseiten';
$string['navprev'] = 'Zurück';
$string['navprevtitle'] = 'Vorheriger Titel: {$a}';
$string['navstyle'] = 'Stil der Navigation';
$string['navstyle_help'] = '* Bilder - Icons zur Navigation verwenden
* Text - Kapitelüberschriften zur Navigation verwenden';
$string['navtext'] = 'Text';
$string['navtoc'] = 'Nur Inhaltsverzeichnis';
$string['nocontent'] = 'In diesem Buch wurde bisher kein Inhalt eingefügt';
$string['numbering'] = 'Kapitelgliederung';
$string['numbering0'] = 'Keine';
$string['numbering1'] = 'Zahlen';
$string['numbering2'] = 'Punkte';
$string['numbering3'] = 'Eingerückt';
$string['numbering_help'] = 'Überschriften der Kapitel und Unterkapitel können im Buch automatisch gegliedert werden.
* Keine - Kapitel und Unterkapitel werden nicht automatisch nummeriert. Hiermit sind eigene Formate möglich, z.B. mit Buchstaben und Ziffern (A, A.1, A.2, B, B.1,...)
* Zahlen - Kapitel und Unterkapitel werden nummeriert (1, 1.1, 1.2, 2, 2.1,...)
* Punkte - Unterkapitel werden eingerückt und mit Punkten markiert
* Eingerückt - Unterkapitel werden eingerückt';
$string['numberingoptions'] = 'Optionen zur Kapitelgliederung';
$string['numberingoptions_desc'] = 'Wählen Sie die Kapitelgliederungen aus, die in den Bucheinstellungen verfügbar sein sollen';
$string['page-mod-book-x'] = 'Jede Seite des Moduls \'Buch\'';
$string['pluginadministration'] = 'Buch-Administration';
$string['pluginname'] = 'Buch';
$string['previouschapter'] = 'Vorheriges Kapitel';
$string['privacy:metadata'] = 'Das Plugin \'Buch\' speichert keine personenbezogenen Daten.';
$string['removeallbooktags'] = 'Alle Buch-Tags';
$string['search:activity'] = 'Buch - Beschreibung';
$string['search:chapter'] = 'Buch - Kapitel';
$string['showchapter'] = 'Kapitel "{$a}" anzeigen';
$string['subchapter'] = 'Unterkapitel';
$string['subchapternotice'] = '(Nur verfügbar, sobald das erste Kapitel angelegt ist)';
$string['subplugintype_booktool'] = 'Buchaktivität';
$string['subplugintype_booktool_plural'] = 'Buchaktivität';
$string['tagarea_book_chapters'] = 'Buchkapitel';
$string['tagsdeleted'] = 'Die Buch-Tags wurden entfernt.';
$string['toc'] = 'Inhaltsverzeichnis';
$string['top'] = 'Anfang';
