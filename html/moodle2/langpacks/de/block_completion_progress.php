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
 * Strings for component 'block_completion_progress', language 'de', branch 'MOODLE_34_STABLE'
 *
 * @package   block_completion_progress
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'HTML-Farbcode für Elemente, die abgeschlossen sind';
$string['completed_colour_title'] = 'Abschlussfarbe';
$string['completion_not_enabled'] = 'Abschlussverfolgung ist für diese Website nicht aktiviert.';
$string['completion_not_enabled_course'] = 'Abschlussverfolgung ist in diesem Kurs nicht aktiviert.';
$string['completion_progress:addinstance'] = 'Neuen Block \'Fortschrittsbalken\' hinzufügen';
$string['completion_progress:myaddinstance'] = 'Neuen Block \'Fortschrittsbalken\' zum Dashboard hinzufügen';
$string['completion_progress:overview'] = 'Übersicht zum Bearbeitungsfortschritt für alle Kursteilnehmer/innen anzeigen';
$string['completion_progress:showbar'] = 'Balken im Block \'Fortschrittsbalken\' anzeigen';
$string['config_activitiesincluded'] = 'Aktivitäten enthalten';
$string['config_activitycompletion'] = 'Alle abgeschlossenen Aktivitäten';
$string['config_default_title'] = 'Fortschrittsbalken';
$string['config_group'] = 'Nur für Gruppe sichtbar';
$string['config_header_monitored'] = 'Überwacht';
$string['config_icons'] = 'Icons im Balken nutzen';
$string['config_longbars'] = 'Anzeige langer Balken';
$string['config_orderby'] = 'Balken anordnen nach';
$string['config_orderby_course_order'] = 'Anordnung im Kurs';
$string['config_orderby_due_time'] = 'Zeit mit \'{$a}\' Datum';
$string['config_percentage'] = 'Prozente für Teilnehmer/innen anzeigen';
$string['config_scroll'] = 'Scrollen';
$string['config_selectactivities'] = 'Aktivitäten auswählen';
$string['config_selectedactivities'] = 'Ausgewählte Aktivitäten';
$string['config_squeeze'] = 'Squeeze';
$string['config_title'] = 'Alternativer Titel';
$string['config_wrap'] = 'Umbruch';
$string['coursenametoshow'] = 'Kursname im Dashboard';
$string['defaultlongbars'] = 'Standardmäßige Darstellung für lange Balken';
$string['fullname'] = 'Vollständiger Kursname';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'HTML-Farbcode für demnächst fällige Elemente, die noch nicht abgeschlossen sind';
$string['futureNotCompleted_colour_title'] = 'Farbe für zukünftig und nicht abgeschlossen';
$string['how_activitiesincluded_works'] = 'Wie Einfügen von Aktivitäten funktioniert';
$string['how_activitiesincluded_works_help'] = '<p>Standardmäßig werden alle Aktivitäten mit Aktivitätsabschluss in den Balken angezeigt.</p><p>Aktivitäten können auch manuell ausgewählt werden.</p>';
$string['how_group_works'] = 'Wie sichtbare Gruppen funktionieren';
$string['how_group_works_help'] = '<p>Wenn Sie eine Gruppe auswählen, wird die Anzeige dieses Blocks auf diese Gruppe beschränkt.</p>';
$string['how_longbars_works'] = 'Anzeige langer Balken';
$string['how_longbars_works_help'] = '<p>Wenn Balken eine bestimmte Länge überschreiten, können sie auf eine der folgenden Arten dargestellt werden.</P><ul>
<li>In eine horizontale Leiste gedrückt</li>
<li>Seitliches Blättern, um überlaufende Balkensegmente anzuzeigen</li>
<li>Zeilenumbruch innerhalb des Balkens</li></ul>
<p>Beachten Sie, dass bei dieser Anzeige der \'Fortschrittsbalken\' nicht angezeigt wird.</P>';
$string['how_ordering_works'] = 'Wie das Ordnen funktioniert';
$string['how_ordering_works_help'] = '<p>Es gibt zwei Möglichkeiten, Aktivitäten im Block \'Fortschrittsbalken\' anzuordnen.</p>
<ul><li><em>Datum der erwarteten Fertigstellung</em> (Standard) <br/>Die erwarteten Fertigstellungstermine der Aktivitäten / Ressourcen werden verwendet, um die Elemente des Balkens anzuordnen. Wenn Aktivitäten / Ressourcen keinen erwarteten Abschluss haben, wird stattdessen die Reihenfolge im Kurs verwendet.</li><li><em>Reihenfolge im Kurs</em><br/>Aktivitäten / Ressourcen werden in derselben Reihenfolge dargestellt wie auf der Kursseite. Wenn diese Option verwendet wird, werden erwartete Fertigstellungstermine ignoriert. Wenn diese Option verwendet wird, wird die "Fortschritts-Anzeige" nicht angezeigt. </Li></ul>';
$string['how_selectactivities_works'] = 'Wie das Einbeziehen von Aktivitäten funktioniert';
$string['how_selectactivities_works_help'] = '<p>Um die Aktivitäten, die in die Leiste aufgenommen werden sollen, manuell auszuwählen, stellen Sie sicher, dass die Option "eingefügte Aktivitäten" auf "ausgewählte Aktivitäten" gesetzt ist.</p><p>Es können nur Aktivitäten mit aktiviertem Aktivitätsabschluss eingefügt werden.<p>Halten Sie die STRG-Taste gedrückt, um mehrere Aktivitäten auszuwählen. </p>';
$string['lastonline'] = 'Zuletzt im Kurs';
$string['mouse_over_prompt'] = 'Mehr Infos anzeigen, wenn die Maus über den Balken ist oder einzelne Blöcke angeklickt werden';
$string['no_activities_config_message'] = 'Es gibt keine Aktivitäten oder Ressourcen mit Aktivitätsabschluss? Aktivieren Sie den Aktivitätsabschluss für Aktivitäten und Ressourcen, konfigurieren Sie anschließend diesen Block.';
$string['no_activities_message'] = 'Es werden keine Aktivitäten oder Ressourcen beobachtet? Stellen Sie dies in den Einstellungen ein.';
$string['no_blocks'] = 'Es ist kein Block \'Fortschrittsbalken\' für Ihre Kurse aktiviert.';
$string['no_courses'] = 'Sie sind in keine Kurse eingeschrieben. Es wird nur der Bearbeitungsfortschritt von Kursen angezeigt, in die Sie eingeschrieben sind.';
$string['not_all_expected_set'] = 'Nicht alle beendeten Aktivitäten haben ein \'{$a}\' Datum gesetzt.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'HTML-Farbcode für die aktuelle Elemente, die noch nicht abgeschlossen sind.';
$string['notCompleted_colour_title'] = 'Farbe für nicht-abgeschlossen';
$string['no_visible_activities_message'] = 'Keine der überwachten Aktivitäten ist derzeit sichtbar.';
$string['now_indicator'] = 'Fortschritt';
$string['overview'] = 'Überblick Teilnehmer/innen';
$string['pluginname'] = 'Fortschrittsbalken';
$string['progress'] = 'Fortschritt';
$string['progressbar'] = 'Fortschrittsbalken';
$string['shortname'] = 'Kurzer Kursname';
$string['showallinfo'] = 'Alle Infos anzeigen';
$string['showinactive'] = 'Inaktive Teilnehmer/innen in der Übersicht anzeigen';
$string['submitted'] = 'Eingereicht';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'HTML-Farbcode für Elemente, die eingereicht, aber noch nicht abgeschlossen sind.';
$string['submittednotcomplete_colour_title'] = 'Farbe für eingereicht und noch nicht abgeschlossen';
$string['time_expected'] = 'Erwartet';
$string['why_set_the_title'] = 'Warum Sie den Block Beispiel-Titel setzten sollten.';
$string['why_set_the_title_help'] = '<p>Es können mehrere Instanzen des Blocks \'Fortschrittsbalken\' vorhanden sein. So können Sie verschiedene solcher Blöcke verwenden, um unterschiedliche Kombinationen von Aktivitäten oder Ressourcen darzustellen. Wenn Sie z.B. in einem Block den Fortschritt von Tests beobachten, können Sie einen anderen für die Nutzung von Foren verwenden. Deswegen kann der Standardtitel Standardtitel mit einem passenden Blocktitel überschrieben werden. </p>';
$string['why_show_precentage'] = 'Warum Sie den Bearbeitungsfortschritt in Prozenten anzeigen sollten?';
$string['why_show_precentage_help'] = '<p>Es ist möglich, den Teilnehmer/innen einen Gesamtprozentsatz des Fortschritts anzuzeigen.</p><p>Dieser wird berechnet als die Anzahl der durchgeführten Aktivitäten, geteilt durch die Gesamtzahl der Aktivitäten in dem Balken.</p><p> Der Fortschrittsprozentsatz wird angezeigt, bis die Teilnehemnden mit der Maus über ein Element in dem Balken fahren.</p>';
$string['why_use_icons'] = 'Warum Sie Icons nutzen sollten?';
$string['why_use_icons_help'] = '<p>Vielleicht möchten Sie Tick- und Cross-Icons für den Fortschrittsbalken hinzufügen, um diesen Block für Teilnehmer/innen mit Farbblindheit visuell zugänglich zu machen. </p> <p>Es kann auch die Bedeutung des Blocks klarer machen, wenn Sie glauben, Farben sind nicht intuitiv, weder aus kulturellen noch aus persönlichen Gründen. </p>';
$string['wrapafter'] = 'Beim Umbruch auf Zeilen beschränken mit';
