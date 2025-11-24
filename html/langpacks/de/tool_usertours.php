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
 * Strings for component 'tool_usertours', language 'de', version '4.5'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Oberhalb';
$string['actions'] = 'Aktionen';
$string['appliesto'] = 'Gilt für';
$string['backdrop'] = 'Mit Hervorhebung anzeigen';
$string['backdrop_help'] = 'Sie können den Teil der Seite hervorheben, auf den Sie gerade verweisen.

Hinweis: Hervorhebungen sind manchmal nicht kompatibel mit bestimmten Teilen der Seite, z.B. mit der Navigationsleiste.';
$string['below'] = 'Unterhalb';
$string['block'] = 'Block';
$string['block_named'] = 'Block \'{$a}\'';
$string['cachedef_stepdata'] = 'Schritte der geführten Tour';
$string['cachedef_tourdata'] = 'Liste der Informationen in aktivierten Nutzertouren, die auf jeder Seite abgerufen werden.';
$string['confirmstepremovalquestion'] = 'Möchten Sie diesen Schritt wirklich entfernen?';
$string['confirmstepremovaltitle'] = 'Schritt entfernen';
$string['confirmtourremovalquestion'] = 'Möchten Sie diese Nutzertour wirklich entfernen?';
$string['confirmtourremovaltitle'] = 'Tour entfernen';
$string['content'] = 'Inhalt';
$string['content_heading'] = 'Inhalt';
$string['content_help'] = 'Der Inhalt, der den Schritt beschreibt, kann als einfacher Text hinzugefügt werden. Falls gewünscht, können auch Multilang-Tags enthalten sein (Filter \'Mehrsprachiger Inhalt\').';
$string['content_type'] = 'Inhaltstyp';
$string['content_type_help'] = '* Manuell - Inhalt wird in Texteditor eingegeben
* Sprachtext-ID - die Sprachtext-ID kann im Format identifier,component (ohne Leerzeichen nach dem Komma) eingegeben werden.';
$string['content_type_langstring'] = 'Text-ID';
$string['content_type_manual'] = 'Manuell';
$string['cssselector'] = 'CSS-Selector';
$string['defaultvalue'] = 'Standard ({$a})';
$string['delay'] = 'Wartezeit vor dem Schritt';
$string['delay_help'] = 'Sie können optional eine Wartezeit einfügen, bevor der Schritt angezeigt wird.

Die Wartezeit wird in Millisekunden angegeben.';
$string['description'] = 'Beschreibung';
$string['description_help'] = 'Die Beschreibung einer Tour kann als einfacher Text hinzugefügt werden. Falls gewünscht, können auch Multilang-Tags enthalten sein (Filter \'Mehrsprachiger Inhalt\').

Alternativ kann eine Sprachtext-ID im Format identifier,component (ohne Klammern oder Leerzeichen nach dem Komma) eingegeben werden.';
$string['displaystepnumbers'] = 'Schrittnummern anzeigen';
$string['displaystepnumbers_help'] = 'Die Option legt fest, ob die Anzahl der verbleibenden Schritte innerhalb der Tour angezeigt wird, z.B. 1/4, 2/4 usw.';
$string['done'] = 'Erledigt';
$string['duplicatetour'] = 'Tour duplizieren';
$string['duplicatetour_name'] = '{$a} (Kopie)';
$string['editstep'] = 'Bearbeiten von \'{$a}\'';
$string['enabled'] = 'Aktiviert';
$string['endonesteptour'] = 'Alles klar!';
$string['endtour'] = 'Tour beenden';
$string['endtourlabel'] = 'Text für Schaltfäche "Tour beenden"';
$string['endtourlabel_help'] = 'Sie können optional einen nutzerdefinierten Text für die Schaltfläche "Tour beenden" angeben. Der Standardtext ist "Alles klar!" für einstufige und "Tour beenden" für mehrstufige Touren.

Alternativ kann eine Sprachtext-ID im Format identifier,component (ohne Klammern und ohne Leerzeichen nach dem Komma) eingegeben werden.';
$string['event_step_shown'] = 'Schritt angezeigt';
$string['event_tour_ended'] = 'Tour beendet';
$string['event_tour_reset'] = 'Tour zurückgesetzt';
$string['event_tour_started'] = 'Tour begonnen';
$string['exporttour'] = 'Tour exportieren';
$string['filter_accessdate'] = 'Zugriffsdatum';
$string['filter_accessdate_enabled'] = 'Filter für das Zugriffsdatum aktivieren';
$string['filter_accessdate_enabled_help'] = 'Tour anzeigen nur für neue Nutzer/innen oder für Nutzer/innen, die kürzlich auf die Website zugegriffen haben.';
$string['filter_category'] = 'Kategorie';
$string['filter_category_help'] = 'Tour in Kursen dieser Kategorie anzeigen.';
$string['filter_course'] = 'Kurse';
$string['filter_course_help'] = 'Tour in diesem Kurs anzeigen.';
$string['filter_courseformat'] = 'Kursformat';
$string['filter_courseformat_help'] = 'Tour in Kursen mit diesem Kursformat anzeigen.';
$string['filter_cssselector'] = 'CSS-Selector';
$string['filter_cssselector_help'] = 'Tour nur anzeigen, wenn der angegebene CSS-Selektor auf der Seite gefunden wird.';
$string['filter_date_account_creation'] = 'Erstellungsdatum innerhalb von';
$string['filter_date_first_login'] = 'Datum des erster Zugriffs innerhalb von';
$string['filter_date_last_login'] = 'Datum des letztes Zugriffs innerhalb von';
$string['filter_header'] = 'Tour-Filter';
$string['filter_help'] = 'Wählen Sie die Bedingungen, unter denen die Tour angezeigt wird. Alle Filter müssen passen, damit die Tour für Nutzer/innen zu sehen ist.';
$string['filter_role'] = 'Rolle';
$string['filter_role_help'] = 'Eine Tour kann auf Nutzer/innen mit bestimmten Rollen in einem Kontext beschränkt sein, in dem die Tour angezeigt wird.

Eine Dashboard-Tour lässt sich aber nicht auf Nutzer/innen mit der Rolle "Teilnehmer/in" beschränken, wenn sie die Rolle "Teilnehmer/in" nur in einem Kurs haben (was normalerweise der Fall ist). Eine Dashboard-Tour kann nur auf Nutzer/innen mit einer globalen Rolle beschränkt werden.';
$string['filter_theme'] = 'Design';
$string['filter_theme_help'] = 'Tour anzeigen, wenn eines der ausgewählten Designs verwendet wird.';
$string['importtour'] = 'Tour importieren';
$string['invalid_lang_id'] = 'Falsche Sprachtext-ID';
$string['left'] = 'Links';
$string['modifyshippedtourwarning'] = 'Diese Nutzertour wurde mit Moodle ausgeliefert. Alle Veränderungen, die Sie in dieser Tour vornehmen, werden bei der nächsten Aktualisierung der Website überschrieben.';
$string['moodle_language_identifier'] = 'Sprachtext-ID';
$string['movestepdown'] = 'Schritt nach unten bewegen';
$string['movestepup'] = 'Schritt nach oben bewegen';
$string['movetourdown'] = 'Tour nach unten bewegen';
$string['movetourup'] = 'Tour nach oben bewegen';
$string['name'] = 'Name';
$string['name_help'] = 'Der Name einer Tour kann bei Bedarf als einfacher Text hinzugefügt werden. Falls gewünscht, können auch Multilang-Tags enthalten sein (Filter \'Mehrsprachiger Inhalt\').

Alternativ kann eine Sprachstring-ID im Format identifier,component (ohne Klammern und ohne Leerzeichen nach dem Komma) eingegeben werden.';
$string['newstep'] = 'Neuer Schritt';
$string['newtour'] = 'Neue Tour anlegen';
$string['next'] = 'Nächste';
$string['nextstep'] = 'Weiter';
$string['nextstep_sequence'] = 'Weiter ({$a->position}/{$a->total})';
$string['options_heading'] = 'Optionen';
$string['orphan'] = 'Anzeigen, wenn Ziel nicht gefunden';
$string['orphan_help'] = 'Schritt anzeigen, wenn das Ziel auf der Seite nicht gefunden werden kann.';
$string['pathmatch'] = 'Anwenden auf passende URLs';
$string['pathmatch_help'] = 'Touren werden auf jeder Seite angezeigt, deren URL diesem Wert entspricht.

Sie können das % -Zeichen als Wildcard benutzen.
Beispiele:

* /my/% - für das Dashboard
* /course/view.php?id=2 - für einen spezifischen Kurs
* /mod/forum/view.php% - für die Diskussionsliste des Forums
* /user/profile.php% - für die Nutzerprofilseite

Wenn Sie eine Tour auf der Startseite anzeigen lassen möchten, können Sie den Wert "FRONTPAGE" verwenden.';
$string['pausetour'] = 'Pause';
$string['placement'] = 'Platzierung';
$string['placement_help'] = 'Ein Schritt kann oben, unten, links oder rechts des Ziels platziert werden. Oben oder unten wird empfohlen, da dies besser für mobile Endgeräte passt.

Wenn der Schritt nicht auf eine bestimmte Seite an der angegebenen Stelle passt, wird er automatisch an anderer Stelle platziert.';
$string['pluginname'] = 'Geführte Touren';
$string['privacy:metadata:preference:completed'] = 'Zeitpunkt, an dem eine Person eine Tour zuletzt abgeschlossen hat.';
$string['privacy:metadata:preference:requested'] = 'Zeitpunkt, zu dem eine Person  eine Tour zuletzt manuell angefordert hat.';
$string['privacy:request:preference:completed'] = 'Sie haben die Tour \'{$a->name}\' zuletzt am {$a->time} als abgeschlossen markiert.';
$string['privacy:request:preference:requested'] = 'Sie haben die Tour \'{$a->name}\' zuletzt am {$a->time} angefordert.';
$string['reflex'] = 'Bei Klick fortfahren';
$string['reflex_help'] = 'Der nächste Schritt wird ausgeführt, wenn auf das Ziel geklickt wird.';
$string['resettouronpage'] = 'Tour erneut starten';
$string['resumetour'] = 'Fortsetzen';
$string['right'] = 'Rechts';
$string['select_block'] = 'Wählen Sie einen Block aus';
$string['selector_defaulttitle'] = 'Geben Sie einen beschreibenden Titel an';
$string['selectordisplayname'] = 'CSS-Selektor passend zu \'{$a}\'';
$string['selecttype'] = 'Schritttyp auswählen';
$string['sharedtourslink'] = 'Tour-Repository';
$string['showtoureachtime'] = 'jedes Mal, wenn ein Filter damit übereinstimmt';
$string['showtouruntilcomplete'] = 'bis es geschlossen wird';
$string['showtourwhen'] = 'Tour anzeigen';
$string['skip'] = 'Überspringen';
$string['skip_tour'] = 'Tour abbrechen';
$string['target'] = 'Ziel';
$string['target_block'] = 'Block';
$string['target_heading'] = 'Schrittziel';
$string['target_selector'] = 'Auswahl';
$string['target_selector_targetvalue'] = 'CSS-Selektoren';
$string['target_selector_targetvalue_help'] = 'Ein CSS-Selektor kann verwendet werden, um beliebige Elemente auf der Seite zu erreichen. Der entsprechende Selektor kann sehr einfach mit den Entwicklertools im Webbrowser gefunden werden.';
$string['target_unattached'] = 'In der Seitenmitte anzeigen';
$string['targettype'] = 'Zieltyp';
$string['targettype_help'] = 'Jeder Schritt ist mit einem Teil der Seite verbunden - dem Ziel. Zieltypen sind:

* Block - Anzeige eines Schritts neben einem spezifischen Block
* CSS-Selektor - Definierung eines Zielbereichs über CSS
* Anzeige in der Seitenmitte - für einen Schritt, der nicht mit einem spezifischen Teil der Seite verbunden ist';
$string['title'] = 'Titel';
$string['title_help'] = 'Der Titel eines Schrittes kann als einfacher Text hinzugefügt werden. Falls gewünscht, können auch Multilang-Tags enthalten sein (Filter \'Mehrsprachiger Inhalt\').

Alternativ kann eine Sprachtext-ID im Format identifier,component eingegeben werden (ohne Klammern oder Leerzeichen nach dem Komma).';
$string['tour1_content_addingblocks'] = 'Denken Sie bei der Verwendung von Blöcken daran, dass Blöcke in der Moodle-App nicht angezeigt werden. Ihre Website sollte auch ohne Blöcke problemlos funktionieren.';
$string['tour1_content_blockregion'] = 'Es gibt weiterhin einen Blockbereich. Wir empfehlen, die Navigations- und Einstellungsblöcke zu entfernen, weil deren Funktionalität an anderer Stelle im Design Boost zu finden ist.';
$string['tour1_content_customisation'] = 'Um das Erscheinungsbild Ihrer Website und der Startseite anzupassen, verwenden Sie bitte den Schalter rechts oben im Kopfbereich. Versuchen Sie jetzt, das Bearbeiten einzuschalten.';
$string['tour1_content_end'] = 'Dies ist das Ende Ihrer Nutzertour. Sie wird nicht nochmal angezeigt, außer Sie klicken auf den Link in der Fußzeile. Als Administrator/in können Sie solche Touren auch selbst erstellen.';
$string['tour1_content_navigation'] = 'Die Hauptnavigation findet nun über diese Navigationsleiste statt. Die Inhalte aktualisieren sich abhängig davon, an welcher Stelle Sie auf der Website sind. Nutzen Sie die Taste oben links, um die Navigationsleiste ein- oder auszublenden.';
$string['tour1_content_welcome'] = 'Willkommen beim Design \'Boost\'. Falls Sie bereits eine frühere Version verwendet haben, werden Sie möglicherweise Dinge finden, die jetzt ein bisschen anders aussehen.';
$string['tour1_title_addingblocks'] = 'Blöcke hinzufügen';
$string['tour1_title_blockregion'] = 'Blockbereich';
$string['tour1_title_customisation'] = 'Anpassungen';
$string['tour1_title_end'] = 'Ende der Tour';
$string['tour1_title_navigation'] = 'Navigation';
$string['tour1_title_welcome'] = 'Willkommen';
$string['tour2_content_addblock'] = 'Wenn Sie das Bearbeiten einschalten, können Sie Blöcke hinzufügen. Aber denken Sie gut über deren Notwendigkeit nach. Blöcke werden in der mobilen Moodle-App nicht angezeigt, weswegen Ihre Kurse auch ohne Blöcke gut funktionieren sollten.';
$string['tour2_content_addingblocks'] = 'Sie können mit Hilfe dieser Taste neue Blöcke auf dieser Seite hinzufügen. Aber denken Sie gut über deren Notwendigkeit nach. Blöcke werden in der mobilen Moodle-App nicht angezeigt, weswegen Ihre Kurse auch ohne Blöcke gut funktionieren sollten.';
$string['tour2_content_customisation'] = 'Um die Kurseinstellungen zu bearbeiten, nutzen Sie das Menü "Einstellungen" in der Kopfzeile. Sie finden außerdem ein ähnliches Einstellungsmenü auf der Startseite jeder Kursaktivität. Versuchen Sie nun, das Bearbeiten einzuschalten.';
$string['tour2_content_end'] = 'Dies war eine Nutzer-Tour. Sie wird nicht wieder angezeigt, außer Sie setzen sie zurück, indem Sie auf den Link in der Fußzeile klicken. Als Administrator/in können Sie solche Touren auch selbst erstellen.';
$string['tour2_content_navigation'] = 'Die Navigation findet nun über diese Navigationsleiste statt. Nutzen Sie die Taste links oben, um die Navigationsleiste ein- oder auszublenden. Sie enthält Links zu Abschnitten Ihres Kurses.';
$string['tour2_content_opendrawer'] = 'Versuchen Sie jetzt, die Navigationsleiste zu öffnen.';
$string['tour2_content_participants'] = 'An dieser Stelle zeigen Sie die Teilnehmer/innen an. Hier können Sie auch Teilnehmer/innen hinzufügen oder entfernen.';
$string['tour2_content_welcome'] = 'Willkommen beim Design \'Boost\'. Falls Sie bereits eine frühere Version verwendet haben, werden Sie hier auf der Kursseite möglicherweise Dinge finden, die jetzt ein bisschen anders aussehen.';
$string['tour2_title_addblock'] = 'Block hinzufügen';
$string['tour2_title_addingblocks'] = 'Blöcke hinzufügen ...';
$string['tour2_title_customisation'] = 'Anpassungen';
$string['tour2_title_end'] = 'Ende der Tour';
$string['tour2_title_navigation'] = 'Navigation';
$string['tour2_title_opendrawer'] = 'Navigationsleiste öffnen';
$string['tour2_title_participants'] = 'Kursteilnehmer/innen';
$string['tour2_title_welcome'] = 'Willkommen';
$string['tour3_content_dashboard'] = 'Ihr neues Dashboard bietet zahlreiche Funktionen, mit denen Sie ganz einfach auf die für Sie wichtigen Infos zugreifen können.';
$string['tour3_content_displayoptions'] = 'Die Kurse können nach Kursnamen, kurzen Kursnamen oder dem letzten Zugriff sortiert werden.

Sie können außerdem auswählen, ob die Kurse in einer Liste mit zusammenfassenden Infos oder in der Standardansicht "Karte" angezeigt werden.';
$string['tour3_content_overview'] = 'Der Block \'Kursübersicht\' zeigt alle Kurse, in denen Sie eingeschrieben sind.

Sie können Kurse anzeigen, die aktuell in Bearbeitung sind, die in der Vergangenheit oder in der Zukunft liegen oder die Sie als Favoriten markiert haben.';
$string['tour3_content_recentcourses'] = 'Der Block \'Zuletzt besuchte Kurse\' zeigt die zuletzt aufgerufenen Kurse, so dass Sie diese sofort wieder öffnen können.';
$string['tour3_content_starring'] = 'Sie können einen Kurs markieren, um ihn besonders hervorzuheben oder einen Kurs als nicht mehr wichtig auszublenden.

Diese Aktionen wirken sich nur auf Ihre persönliche Ansicht aus.

Sie können auch auswählen, ob die Kurse in einer Liste, mit einer zusammenfassenden Info oder in der Standardansicht "Karte" angezeigt werden.';
$string['tour3_content_timeline'] = 'Der Block \'Zeitleiste\' zeigt Ihre wichtigen bevorstehenden Termine.

Sie können Aktivitäten in der nächsten Woche, im nächsten Monat oder weiter in der Zukunft anzeigen.

Sie können auch überfällige Elemente anzeigen.';
$string['tour3_title_dashboard'] = 'Mein Dashboard';
$string['tour3_title_displayoptions'] = 'Anzeigeoptionen';
$string['tour3_title_overview'] = 'Kursübersicht';
$string['tour3_title_recentcourses'] = 'Zuletzt besuchte Kurse';
$string['tour3_title_starring'] = 'Kurse markieren und verbergen';
$string['tour3_title_timeline'] = 'Block \'Zeitleiste\'';
$string['tour4_content_groupconvo'] = 'Wenn Sie in einer Gruppe mit aktivierten Gruppenmitteilungen sind, wird hier die Gruppenkommunikation angezeigt.

Die Gruppenkommunikation in einem Kurs ermöglicht es Ihnen, mit den anderen Gruppenmitgliedern zu interagieren.';
$string['tour4_content_icon'] = 'Mit diesem Symbol können Sie von überall auf Ihre Mitteilungen zugreifen.

Wenn Sie ungelesene Mitteilungen haben, wird hier die Anzahl der ungelesenen Mitteilungen angezeigt.

Klicken Sie auf das Symbol, um den Mitteilungsbereich zu öffnen und die Tour fortzusetzen.';
$string['tour4_content_messaging'] = 'Neue Mitteilungsfunktionen erlauben Gruppenmitteilungen innerhalb eines Kurses und eine bessere Kontrolle, wer Ihnen Mitteilungen senden darf.';
$string['tour4_content_settings'] = 'Über das Zahnradsymbol kommen Sie direkt zu Ihren Mitteilungseinstellungen. Mit einer neuen Datenschutzeinstellung können Sie festlegen, wer Ihnen Mitteilungen senden kann.';
$string['tour4_content_starred'] = 'Sie können bestimmte Konversationen markieren, um sie leichter zu finden.';
$string['tour4_title_groupconvo'] = 'Gruppenmitteilungen';
$string['tour4_title_icon'] = 'Mitteilungen';
$string['tour4_title_messaging'] = 'Neu: Verbesserte Nutzeroberfläche';
$string['tour4_title_settings'] = 'Mitteilungseinstellungen';
$string['tour4_title_starred'] = 'Favoriten';
$string['tour_activityinfo_activity_student_content'] = 'Auf der Aktivitätsseite werden die Aktivitätsdaten sowie die erforderlichen Schritte zum Abschließen der Aktivität angezeigt.';
$string['tour_activityinfo_activity_student_title'] = 'Neu: Aktivitätsinfo';
$string['tour_activityinfo_activity_teacher_content'] = 'Aktivitätsdaten und Abschlussbedingungen werden jetzt für Teilnehmer/innen auf jeder Aktivitätsseite (und optional auf der Kursseite) angezeigt.

Für Aktivitäten, bei denen Teilnehmer/innen eine Aktivität manuell als abgeschlossen markieren müssen, wird auf der Aktivitätsseite eine Schaltfläche "Als erledigt markieren" angezeigt.';
$string['tour_activityinfo_activity_teacher_title'] = 'Neu: Aktivitätsinfo';
$string['tour_activityinfo_course_student_content'] = 'Aktivitätsdaten und die erforderlichen Schritte zum Abschließen der Aktivität werden auf der Kursseite angezeigt.';
$string['tour_activityinfo_course_student_title'] = 'Neu: Aktivitätsinfo';
$string['tour_activityinfo_course_teacher_content'] = 'Mit den neuen Kurseinstellungen "Abschlussbedingungen anzeigen" und "Aktivitätsdaten anzeigen" können Sie wählen, ob die Bedingungen für den Abschluss von Aktivitäten (falls eingestellt) und/oder Termine für die Teilnehmer/innen auf der Kursseite angezeigt werden sollen.';
$string['tour_activityinfo_course_teacher_title'] = 'Neu: Aktivitätsinfo';
$string['tour_final_step_content'] = 'Dies ist das Ende Ihrer Nutzertour. Sie wird nicht wieder angezeigt, außer Sie setzen sie zurück, indem Sie auf den Link in der Fußzeile klicken.';
$string['tour_final_step_title'] = 'Ende der Tour';
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div>Spalten anordnen und anzuzeigende Spalten auswählen. Verwenden Sie diesen Kurzbefehl im Bearbeitungsmodus, um häufige Tasks anzuzeigen und Bewertungselemente zu bearbeiten';
$string['tour_gradebook_action_title'] = 'Schnelle Links zu Aktivitäten';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div>Teilnehmer/innen nach den Initialen von Vor- oder Nachnamen filtern';
$string['tour_gradebook_filter_title'] = 'Nach Name filtern';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Suchbox zum schnellen Finden bestimmter Teilnehmer/innen verwenden';
$string['tour_gradebook_search_title'] = 'Teilnehmer/innen einfach finden';
$string['tour_gradebook_tour_description'] = 'Such- und Navigationsoptionen in der Bewertungsübersicht für Bewerter/innen';
$string['tour_gradebook_tour_name'] = 'Bewertungsübersicht für Bewerter/innen';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Veröffentlichen Sie hier wichtige Ankündigungen.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Möchten Sie allen etwas mitteilen?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Fügen Sie neue Inhalte hinzu oder bearbeiten Sie vorhandene Inhalte.';
$string['tour_navigation_course_edit_teacher_title'] = 'Bearbeitungsmodus einschalten';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Navigieren Sie durch die Aktivitäten und verfolgen Sie Ihren Fortschritt.';
$string['tour_navigation_course_index_student_title'] = 'Finden Sie sich zurecht';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Ziehen Sie Aktivitäten per Drag&drop, um Kursinhalte neu anzuordnen.';
$string['tour_navigation_course_index_teacher_title'] = 'Kursindex';
$string['tour_navigation_course_student_tour_des'] = 'Navigieren durch Aktivitäten in einem Kurs';
$string['tour_navigation_course_student_tour_name'] = 'Kursindex';
$string['tour_navigation_course_teacher_tour_des'] = 'Bearbeitungsmodus, Drag&drop von Aktivitäten und Veröffentlichen von Ankündigungen in einem Kurs';
$string['tour_navigation_course_teacher_tour_name'] = 'Kursbearbeitung';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Diese Seitenleiste kann weitere Funktionen enthalten.';
$string['tour_navigation_dashboard_title'] = 'Zum Erkunden ausklappen';
$string['tour_navigation_dashboard_tour_des'] = 'Wo können Blöcke gefunden werden?';
$string['tour_navigation_dashboard_tour_name'] = 'Blockleiste';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>In diesem Menü können Sie Kurse hinzufügen, kopieren, löschen und verbergen.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Verstanden';
$string['tour_navigation_mycourses_title'] = 'Kurse und Kursbereiche';
$string['tour_navigation_mycourses_tour_des'] = 'Optionen für die Kursverwaltung im Dashboard';
$string['tour_navigation_mycourses_tour_name'] = 'Kursverwaltung';
$string['tour_resetforall'] = 'Der Status der Tour wurde zurückgesetzt. Die Tour wird allen Nutzer/innen erneut gezeigt.';
$string['tourconfig'] = 'Konfigurationsdatei der Tour';
$string['tourisenabled'] = 'Geführte Tour aktiv';
$string['tourlist_explanation'] = 'Sie können beliebig viele Touren anlegen und sie in verschiedenen Bereichen von Moodle aktivieren. Für jede Seite kann es aber nur eine Tour geben.';
$string['tours'] = 'Touren';
$string['usertours'] = 'Nutzertouren';
$string['usertours:managetours'] = 'Nutzertouren anlegen, bearbeiten und entfernen';
$string['viewtour_edit'] = 'Sie können die <a href="{$a->editlink}">Tour bearbeiten</a> und für alle Nutzer/innen die <a href="{$a->resetlink}">Tour erneut anzeigen</a>.';
$string['viewtour_info'] = 'Die Tour heißt \'{$a->tourname}\' und gilt für den Pfad \'{$a->path}\'.';
