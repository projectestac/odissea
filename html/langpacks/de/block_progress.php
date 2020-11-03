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
 * Strings for component 'block_progress', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   block_progress
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_completion'] = 'Aktivitätsabschluss';
$string['addallcurrentitems'] = 'Alle Aktivitäten/Dateien hinzufügen';
$string['answered'] = 'beantwortet';
$string['aspirelist'] = 'Aspire Resourcenliste';
$string['assessed'] = 'bewertet';
$string['assign'] = 'Aufgabe';
$string['assignment'] = 'Aufgabe';
$string['attempted'] = 'begonnen';
$string['attempted_colour'] = '#73A839';
$string['attempted_colour_descr'] = 'HTML Farbcode für die Elemente, die versucht wurden';
$string['attempted_colour_title'] = 'Farbe für Versuche';
$string['awarded'] = 'erhalten';
$string['bigbluebuttonbn'] = 'Big Blue Button';
$string['book'] = 'Buch';
$string['cachedef_cachedlogs'] = 'Fortschrittsbalken Log-Abfragen Caching';
$string['certificate'] = 'Zertifikat';
$string['chat'] = 'Chat';
$string['choice'] = 'Abstimmung';
$string['completed'] = 'beendet';
$string['config_default_title'] = 'Fortschrittsbalken (alt)';
$string['config_group'] = 'Nur sichtbar für Gruppe';
$string['config_header_action'] = 'Aktion';
$string['config_header_expected'] = 'Erwartet bis';
$string['config_header_icon'] = 'Symbol';
$string['config_header_locked'] = 'Gesperrt bis zum Termin';
$string['config_header_monitored'] = 'Überwacht';
$string['config_header_showsubmitted'] = 'Zeige \'eingereicht\' vor der Aktion';
$string['config_icons'] = 'Symbole benutzen';
$string['config_longbars'] = 'Darstellung von langen Fortschrittsbalken';
$string['config_now'] = 'Anzeiger';
$string['config_orderby'] = 'Balkenelemente anordnen nach';
$string['config_orderby_course_order'] = 'Anordnung im Kurs';
$string['config_orderby_due_time'] = '"Fällig bis"-Datum';
$string['config_percentage'] = 'Prozentsatz für Teilnehmer/innen anzeigen';
$string['config_scroll'] = 'Scrollen';
$string['config_squeeze'] = 'Quetschen';
$string['config_title'] = 'Alternativer Titel';
$string['config_warning_loglifetime'] = 'Warnung: Logs werden nach {$a} Tag(en) gelöscht. Aktionen, die darauf beruhen, dass Aktivitäten / Materialien angeschaut wurden, sind davon betroffen.';
$string['config_warning_logstores'] = 'Warnung: Logging ist deaktiviert. Dadurch werden Aktionen, die darauf beruhen, dass Aktivitäten / Materialien angeschaut wurden nicht überprüft.';
$string['config_wrap'] = 'Umbrechen';
$string['coursenametoshow'] = 'Kursname, der auf dem Dashboard angezeigt wird';
$string['cross'] = 'Kreuzchen';
$string['data'] = 'Datenbank';
$string['defaultlongbars'] = 'Standarddarstellung für lange Fortschrittsbalken';
$string['dmelearn'] = 'Digital Media e-Learning';
$string['equella'] = 'Equella';
$string['feedback'] = 'Feedback';
$string['finished'] = 'beendet';
$string['flashcardtrainer'] = 'Lernkartei';
$string['folder'] = 'Ordner';
$string['forum'] = 'Forum';
$string['fullname'] = 'Vollständiger Kursname';
$string['futureNotAttempted_colour'] = '#025187';
$string['futurenotattempted_colour_descr'] = 'HTML Farbcode für zukünftige Elemente, bei denen noch kein Versuch unternommen wurde';
$string['futurenotattempted_colour_title'] = 'Farbe für künftige, noch nicht versuchte Elemente';
$string['geogebra'] = 'Geogebra';
$string['glossary'] = 'Glossar';
$string['graded'] = 'bewertet';
$string['hotpot'] = 'Hotpot';
$string['how_group_works'] = 'Wie sichtbare Gruppen funktionieren';
$string['how_group_works_help'] = '<p>Wenn Sie eine Gruppe auswählen, wird das die Sichtbarkeit des Blocks so einschränken, dass nur diese Gruppe den Block sehen kann</p>';
$string['how_longbars_works'] = 'Wie sollen lange Fortschrittsbalken dargestellt werden?';
$string['how_longbars_works_help'] = '<p>Wenn der Fortschrittsbalken eine bestimmte Länge überschreitet, kann dieser in einer der folgenden Weisen dargestellt werden.</p>
<ul>
    <li>Alle Elemente werden in einem Balken angezeigt und zurecht gequetscht</li>
    <li>Seitwärtiges Scrollen, um überhängende Elemente anzuzeigen</li>
    <li>Umbrechen, um alle Elemente in mehreren Zeilen darzustellen</li>
</ul>
<p>Bitte beachten Sie im Fall \'Umbrechen\', dass der Jetzt-Anzeiger nicht dargestellt wird.</p>';
$string['how_ordering_works'] = 'Wie die Anordnung funktioniert';
$string['how_ordering_works_help'] = '<p>Es gibt zwei Möglichkeiten, wie die Elemente in dem Fortschrittsbalken angeordnet werden können</p>
<ul>
    <li><em>"Fällig bis"-Datum</em>(Standard)<br />
    Es werden die Fälligkeitsdaten zur Anordnung verwendet. Diese können entweder die Fälligkeitsdaten der Aufgaben oder Materialien sein oder manuell gesetzte Fälligkeiten.
 </li>
    <li><em>Anordnung im Kurs</em><br />
    Aktivitäten / Materialien werden in der Reihenfolge angeordnet, wie sie auf der Kursseite dargestellt werden. Zeitliche Aspekte werden in dieser Variante deaktiviert.
    </li>
</ul>';
$string['hsuforum'] = 'Erweitertes Forum';
$string['imscp'] = 'IMS Content Package';
$string['jclic'] = 'JClic';
$string['journal'] = 'Journal';
$string['lastonline'] = 'Zuletzt online';
$string['lesson'] = 'Lektion';
$string['lti'] = 'Externes Werkzeug';
$string['marked'] = 'bewertet';
$string['mouse_over_prompt'] = 'Für Informationen, mit der Maus darüber fahren oder antippen.';
$string['no_blocks'] = 'Für Ihre Kurse sind keine Fortschrittsbalken-Blöcke eingerichtet.';
$string['no_courses'] = 'Hier werden Fortschrittsbalken von Kursen, in denen Sie eingeschrieben sind, angezeigt. Sie sind aber in keinen Kurs eingeschrieben.';
$string['no_events_config_message'] = 'Keine Aktivitäten oder Materialien, deren Fortschritt überwacht werden könnte. Fügen Sie  Aktivitäten oder Materialien hinzu und konfigurieren anschließend diesen Block.';
$string['no_events_message'] = 'Die Aktivitäten oder Materialien werden nicht überwacht. Konfigurieren Sie diesen Block.';
$string['notAttempted_colour'] = '#C71C22';
$string['notattempted_colour_descr'] = 'HTML Farbcode für aktuelle Elemente, bei denen noch kein Versuch gestartet wurde';
$string['notattempted_colour_title'] = 'Farbe für \'Kein Versuch\'';
$string['no_visible_events_message'] = 'Die ausgewählten Ereignisse sind derzeit nicht sichtbar.';
$string['now_indicator'] = 'JETZT';
$string['ouwiki'] = 'OU Wiki';
$string['overview'] = 'Teilnehmerübersicht';
$string['page'] = 'Seite';
$string['panopto'] = 'Panopto Video';
$string['passed'] = 'bestanden';
$string['passedby'] = 'Fälligkeit vorüber';
$string['passedscorm'] = 'bestanden';
$string['pluginname'] = 'Fortschrittsbalken (alt)';
$string['posted_to'] = 'gesendet an';
$string['progress'] = 'Fortschritt';
$string['progress:addinstance'] = 'Neuen Block \'Fortschrittsbalken (alt)\' hinzufügen';
$string['progressbar'] = 'Fortschrittsbalken (alt)';
$string['progress:myaddinstance'] = 'Neuen Block \'Fortschrittsbalken (alt)\' im Dashboard hinzufügen';
$string['progress:overview'] = 'Kursübersicht mit Fortschrittsbalken für alle Teilnehmer/innen anzeigen';
$string['progress:showbar'] = 'Fortschrittsbalken im Block anzeigen';
$string['questionnaire'] = 'Fragebogen';
$string['quiz'] = 'Test';
$string['recordingsbn'] = 'BBB Aufnahmen';
$string['resource'] = 'Datei';
$string['responded_to'] = 'beantwortet';
$string['scorm'] = 'Lernpaket';
$string['selectitemstobeadded'] = 'Wählen Sie Aktivitäten aus';
$string['shortname'] = 'Kurzer Kursname';
$string['showallinfo'] = 'Alle Informationen anzeigen';
$string['showinactive'] = 'Inaktive Teilnehmer/innen in der Übersicht anzeigen';
$string['subcourse'] = 'Unterkurs';
$string['submitted'] = 'eingereicht';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'HTML Farbcode für die Elemente wurden übermittelt, sind aber noch nicht komplett';
$string['submittednotcomplete_colour_title'] = 'Farbe für \'eingereicht, aber nicht abgeschlossen\'';
$string['survey'] = 'Umfrage';
$string['tick'] = 'Häkchen';
$string['time_expected'] = 'Erwartet';
$string['turnitintool'] = 'Turnitin Tool';
$string['turnitintooltwo'] = 'Turnitin Tool 2';
$string['url'] = 'URL/Link';
$string['video'] = 'Video';
$string['viewed'] = 'gesehen';
$string['vpl'] = 'Virtual Programming Lab';
$string['what_actions_can_be_monitored'] = 'Welche Aktionen können überwacht werden?';
$string['what_actions_can_be_monitored_help'] = '<p>Es sind mehrere Aktionen für eine Aktivität möglich.</p>
<p>Zum Beispiel gibt es bei der Aufgaben-Aktivität folgende mögliche Aktionen:
    <ul>
        <li>eingereicht,</li>
        <li>bewertet,</li>
        <li>bestanden (siehe dazu den Hinweis zum \'Bestehen\' weiter unten),</li>
        <li>bestanden durch die Abgabefrist (siehe dazu den Hinweis zum \'Bestehen\' weiter unten) und</li>
        <li>Aktivitätsabschluss (wenn dies im Kurs eingeschaltet und für die Aktivität aktiviert).</li>
    </ul>
</p>
<h3>Bestehen</h3>
<p>Bei den Aktivitäten Aufgabe, Lektion und Test gibt es eine "Bewertung zum Bestehen".<a href="https://docs.moodle.org/30/de/Bewertungsaspekte" target="_blank">Weitere Hilfe...</a></p>';
$string['what_does_monitored_mean'] = 'Was das „Überwachen” bedeutet?';
$string['what_does_monitored_mean_help'] = '<p>Zweck dieses Blocks ist es, Lernende zu ermutigen, ihre Zeit effektiv zu nutzen. Jeder Lernende kann seine Fortschritte bei der Vollendung von Aktivitäten und dem Ansehen von Dateien überwachen.</p>
<p>Auf der Konfigurationsseite finden Sie eine Liste aller Module, die Sie erstellt haben, die durch den Fortschrittsbalken überwacht werden können. Das Modul wird nur überwacht werden und als kleiner Block in der Statusleiste erscheinen, wenn es entsprechend markiert wurde .</p>';
$string['what_expected_by_means'] = 'Was bedeutet „Erwartet bis”?';
$string['what_expected_by_means_help'] = '<p>Die „erwartet bis”-Zeit wird angezeigt, wenn die Aktivität bis zu einem bestimmten Zeitpunkt abgeschlossen (angesehen, abgegeben, Beitrag eingetragen,...) sein muss.</p>
<p>Wenn es bereits eine Abgabefrist für eine Aktivität gibt, wie z.B. ein Aufgabenabgabetermin, kann diese Frist auch im Fortschrittsbalken genutzt werden so lange „gesperrt bis zum Termin” gewählt wird.
<p>Wenn Sie zunächst eine neue Aktivität oder eine Datei wählen und die Konfigurationsseite des Fortschrittsbalkens besuchen, wird versucht, eine geeignete Zeit für den Stichtag zu schätzen.
<ul>
    <li>Für eine Aktivität mit einem existierenden Stichtag wird dieser genutzt.</li>
    <li>Wenn die Aktivität keinen Stichtag besitzt, jedoch das Kursformat genutzt wird, welches wochenbezogen ist, wird das Ende der Woche (23:59 Uhr am Sonntag) automatisch herangezogen.</li>
    <li>Für Aktivitäten, die in keinem wochenbezogenen Kursformat angelegt wurden, wird das Ende der aktuellen Woche (23:59 Uhr am Sonntag) als automatischer Termin gesetzt.</li>
</ul>
</p>
<p>Wenn ein erwarteter Termin gesetzt wurde, werden jegliche Ãnderungen an Zeiten in der überwachten Aktivität im Fortschrittsbalken keinen Einfluss mehr haben.</p>';
$string['what_locked_means'] = 'Was heißt „Gesperrt bis zum Termin”?';
$string['what_locked_means_help'] = '<p>Wenn in den Einstellungen einer Aktivität ein Stichtag gesetzt ist, wird es freigestellt, den Stichtag der Tätigkeit zu verwenden oder eine andere unabhängige Zeit für die Tätigkeit im Fortschrittsbalken anzuzeigen.</p>
<p>Um den Fortschrittsbalken bis zu dem Stichtag einer Aktivität zu sperren, muss ein Stichtag aktiviert und gesetzt sein. Wenn der Stichtag gesperrt ist, wird die Ãnderung der Frist in den Aktivitätseinstellungen automatisch die Zeit verändern, die im Fortschrittsbalken gezeigt wird.</p>
<p>Wenn eine Aktivität nicht gesperrt ist wird die Ã„nderung von Datum und Zeit in der Aktivität selbst auf die Anzeige im Fortschrittsbalken keinen Effekt haben.</p>';
$string['what_show_submitted_means'] = 'Was \'Zeige eingereicht vor der Aktion\' bedeutet.';
$string['what_show_submitted_means_help'] = 'Bei manchen Aktivitäten können Teilnehmer/innen Lösungen einreichen. Wenn diese etwas eingereicht haben, aber die abschließende Aktion, z.B. die Bewertung, noch nicht erfolgt ist, wird sich die Farbe des Balkens ändern. Dies zeigt an, dass eine Einreichung gemacht wurde.';
$string['why_display_now'] = 'Warum Sie vielleicht den „JETZT Anzeiger” verbergen/zeigen wollen?';
$string['why_display_now_help'] = '<p>Nicht alle Kurse sind dafür gedacht, Aufgabenstellungen zu bestimmten Zeitabschnitten durchzuführen. Einige Kurse können eine offene Anmeldung haben, wo sich Teilnehmer einschreiben und die Aktivitäten durchführen können, wann sie wollen.</p>
<p>Um den Fortschrittsbalken in solchen Kursen als ein Hilfsmittel zu benutzen, erstellen Sie Daten mit „erwartet bis” für Zeiten in ferner Zukunft und setzen Sie die „JETZT” Einstellung auf Nein.</p>';
$string['why_set_the_title'] = 'Warum sollten Sie einen Blocktitel vergeben?';
$string['why_set_the_title_help'] = '<p>Womöglich gibt es mehrere Instanzen des Fortschrittsbalkens. Sie können verschiedene Fortschrittsbalken zu verschiedenen Arten von Aktivitäten und Quellen zum überwachen benutzen. Zum Beispiel könnte man die Fortschritte von Aufgaben in einem Block überwachen  und Tests in einem anderen. Aus diesem Grund können Sie den Standard-Titel überschreiben und einen besser geeigneten Block Titel für jede Instanz einsetzen.</p>';
$string['why_show_precentage'] = 'Welchen Sinn macht ein prozentualer Fortschrittsbalken?';
$string['why_show_precentage_help'] = '<p>Es ist möglich, eine allgemeine Prozentsatz der Fortschritt den Studierenden aufzeigen.</p>
<p>Dies wird als die Anzahl der Elemente abgeschlossen durch die Gesamtzahl von Elementen in der Bar geteilt wird.</p>
<p>Der Fortschritt Prozentsatz scheint, bis der Schüler die Maus über ein Element in der bar.</p>';
$string['why_use_icons'] = 'Warum sollten Sie Symbole benutzen?';
$string['why_use_icons_help'] = '<p>Vielleicht möchten Sie Häkchen und Kreuz-Symbole in der Statusleiste hinzufügen, um diesen Block für farbenblinde Lernende besser visuell zugänglich zu machen.</p>
<p>Die Bedeutung des Blocks kann auch klarer werden, wenn Sie meinen, Farben seien nicht intuitiv, entweder aus kulturellen oder persönlichen Gründen.</p>';
$string['wiki'] = 'Wiki';
$string['workshop'] = 'Workshop';
$string['wrapafter'] = 'Wenn Umbruch, begrenze Zeilen auf';
