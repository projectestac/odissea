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
 * Strings for component 'gradereport_grader', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   gradereport_grader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxchoosescale'] = 'Auswählen';
$string['ajaxclicktoclose'] = 'Klicken Sie in dieses Feld, um es zu entfernen';
$string['ajaxerror'] = 'Fehler';
$string['ajaxfailedupdate'] = 'Aktualisierung [1] nach [2] nicht möglich';
$string['ajaxfieldchanged'] = 'Das von Ihnen aktuell bearbeitete Feld hat sich geändert. Möchten Sie den aktualisierten Wert benutzen?';
$string['eventgradereportviewed'] = 'Bewerterübersicht angezeigt';
$string['grader:manage'] = 'Bewerterübersicht verwalten';
$string['grader:view'] = 'Bewerterübersicht anzeigen';
$string['overriddengrade'] = 'Überschriebene Bewertung';
$string['pluginname'] = 'Bewerterübersicht';
$string['preferences'] = 'Einstellungen für die Bewerterübersicht';
$string['privacy:metadata:preference:grade_report_aggregationposition'] = 'Werden Kategorien und das Kursgesamtergebnis in den Bewertungstabellen am Anfang oder am Ende angezeigt.';
$string['privacy:metadata:preference:grade_report_averagesdecimalpoints'] = 'Zahl der angezeigten Nachkommastellen';
$string['privacy:metadata:preference:grade_report_averagesdisplaytype'] = 'Ob der Durchschnitt (Mittel) als realer Wert, Prozentwert oder Note angezeigt wird, oder ob der Wert von der Bewertungskategorie oder dem Bewertungsitem abgeleitet wird.';
$string['privacy:metadata:preference:grade_report_enableajax'] = 'Ob ein Layer mit AJAX-Funktionen über den Bewertungsbericht gelegt wird um Bearbeitungen zu vereinfachen und beschleunigen';
$string['privacy:metadata:preference:grade_report_grader_collapsed_categories'] = 'Liste der Bewertungskategorien zum Einklappen';
$string['privacy:metadata:preference:grade_report_meanselection'] = 'Ob Zellen ohne Bewertungen in die Berechnung des Durchschnitts (Mittel) für jede Kategorie oder jedes Bewertungsitem einbezogen wird.';
$string['privacy:metadata:preference:grade_report_quickgrading'] = 'Ob eine Texteingabe-Box für jede Bewertung angezeigt wird, um eine große Anzahl von Nutzern einfach zu bewerten.';
$string['privacy:metadata:preference:grade_report_rangesdecimalpoints'] = 'Anzahl der Dezimalzahlen für jede Range oder ob die Einstellung der Kategorie oder des Bewertungsitems genutzt wird (Vererbung)';
$string['privacy:metadata:preference:grade_report_rangesdisplaytype'] = 'Ob der Bereich als reale Bewertung, Prozenzahl oder Note genutzt wird oder ob der Wert, der für die Kategorie oder das Bewertungsitem gesetzt wurde, angezeigt wird (Vererbung)';
$string['privacy:metadata:preference:grade_report_showactivityicons'] = 'Hier wird festelegt, ob die Aktivitäts-Icons neben den Aktivitätsnamen angezeigt werden sollen.';
$string['privacy:metadata:preference:grade_report_showanalysisicon'] = 'Ob das Icon zur Bewertungsanalyse automatisch angezeigt werden soll. Wenn das Aktivitätsplugin die Funktion unterstützt führt der Link zu einer Unterseite, die das Zustandekommen der Bewertung genauer darstellt.';
$string['privacy:metadata:preference:grade_report_showaverages'] = 'Ob eine zusätzliche Zeile mi tdem Durchschnitt (Mittel) für jede Kategorie und jedes Bewertungsitem angezeigt wid.';
$string['privacy:metadata:preference:grade_report_showcalculations'] = 'Ob ein Rechner-Icon für jedes Bewertungsitem und jede Kategorie mit einem Hinweis im Editiermodus, ob der Wert kalkuliert wurde, angezeigt wird.';
$string['privacy:metadata:preference:grade_report_showeyecons'] = 'Ob ein Icon zum Anzeigen/Verbergen für jede Bewertung für Teilnehmer angezeigt wird.';
$string['privacy:metadata:preference:grade_report_showlocks'] = 'Ob eine Icon zum Sperren/Entsperren für jede Bewertung angezeigt wird. Die Funktion ermöglicht es eine Aktualisierung der Bewertung aus der Aktivität zuzulassen  oder zu unterbinden.';
$string['privacy:metadata:preference:grade_report_shownumberofgrades'] = 'Ob in Klammern nach jedem Durchschnittswert die Anzahl der der Berechnung zugrundeliegenden Bewertungen angezeigt wird.';
$string['privacy:metadata:preference:grade_report_showonlyactiveenrol'] = 'Ob nur die aktiven eingeschrieben oder auch die gesperrten Nutzer mit ihren Bewertungen angezeigt werden.';
$string['privacy:metadata:preference:grade_report_showquickfeedback'] = 'Ob  ein Feld für denr Feedbacktext für jede Bewertung mit gepunkteter Umrandung abgezeigt. Dies ermöglicht direkt in der Tabelle Text einzugeben';
$string['privacy:metadata:preference:grade_report_showranges'] = 'Ob eine zusätzlicher Zeile mit dem Bereich für jede Kategorie und jedes Bewertungsitem angezeigt wird';
$string['privacy:metadata:preference:grade_report_showuserimage'] = 'Hier wird festgelegt, ob das Profilbild des Nutzers neben seinem Namen angezeigt werden soll.';
$string['privacy:metadata:preference:grade_report_studentsperpage'] = 'Anzahl der Teilnehmenden auf jeder Seite der Bewerterübersicht';
$string['privacy:request:preference:grade_report_grader_collapsed_categories'] = 'Im \'{$a->name}\'-Kurs sind einige Bewertungskategorien eingeklappt';
$string['summarygrader'] = 'Tabelle mit den Teilnehmernamen in der ersten Spalte und bewertbaren Aktivitäten, gruppiert nach Kurs und Kategorie.';
$string['useractivityfeedback'] = '{$a} Feedback';
$string['useractivitygrade'] = '{$a} Bewertung';
