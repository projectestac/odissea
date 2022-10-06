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
 * Strings for component 'tool_usertours', language 'de', version '3.8'.
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

Hinweis: Hervorhebungen sind nicht kompatibel mit manchen Teilen der Seite, z.B. mit der Navigationsleiste.';
$string['below'] = 'Unterhalb';
$string['block'] = 'Block';
$string['block_named'] = 'Block \'{$a}\'';
$string['cachedef_stepdata'] = 'Schritte der geführten Tour';
$string['cachedef_tourdata'] = 'Die Liste von aktivierten Informationen für die geführte Tour wird auf jeder Seite gesammelt.';
$string['confirmstepremovalquestion'] = 'Möchten Sie diesen Schritt wirklich entfernen?';
$string['confirmstepremovaltitle'] = 'Entfernen von Schritten bestätigen';
$string['confirmtourremovalquestion'] = 'Möchten Sie wirklich diese geführte Tour entfernen?';
$string['confirmtourremovaltitle'] = 'Entfernen einer Tour bestätigen';
$string['content'] = 'Inhalt';
$string['content_heading'] = 'Inhalt';
$string['content_help'] = 'Der Inhalt, der den Schritt beschreibt, kann als Klartext hinzugefügt werden und falls erforderlich auch Multilang-Tags einschließen (für die Verwendung mit dem Filter \'Mehrsprachiger Inhalt\').

Alternativ kann eine Text-ID in die Formatkennung eingegeben werden  (ohne Klammern oder Leerzeichen nach dem Komma).';
$string['cssselector'] = 'CSS-Selector';
$string['defaultvalue'] = 'Standard ({$a})';
$string['delay'] = 'Wartezeit vor dem Schritt';
$string['delay_help'] = 'Sie können optional eine Wartezeit einfügen, bevor der Schritt angezeigt wird.

Die Wartezeit wird in Millisekunden angegeben.';
$string['description'] = 'Beschreibung';
$string['done'] = 'Erledigt';
$string['duplicatetour'] = 'Tour kopieren';
$string['duplicatetour_name'] = '{$a} (kopieren)';
$string['editstep'] = '\'{$a}\' bearbeiten';
$string['enabled'] = 'Aktiviert';
$string['endtour'] = 'Tour-Ende';
$string['event_step_shown'] = 'Schritt angezeigt';
$string['event_tour_ended'] = 'Tour beendet';
$string['event_tour_reset'] = 'Tour zurückgesetzt';
$string['event_tour_started'] = 'Tour begonnen';
$string['exporttour'] = 'Tour exportieren';
$string['filter_category'] = 'Kategorie';
$string['filter_category_help'] = 'Tour in Kursen dieser Kategorie anzeigen.';
$string['filter_course'] = 'Kurse';
$string['filter_course_help'] = 'Tour in diesem Kurs anzeigen.';
$string['filter_courseformat'] = 'Kursformat';
$string['filter_courseformat_help'] = 'Tour in Kursen mit diesem Kursformat anzeigen.';
$string['filter_header'] = 'Tour-Filter';
$string['filter_help'] = 'Wählen Sie die Bedingungen, unter denen die Tour angezeigt wird. Alle Filter müssen passen, damit die Tour für Nutzer/innen angezeigt wird.';
$string['filter_role'] = 'Rolle';
$string['filter_role_help'] = 'Eine Tour kann auf Nutzer/innen mit bestimmten Rollen in dem Kontext beschränkt sein, in dem die Tour angezeigt wird. Das Beschränken einer Dashboard-Tour auf Nutzer/innen mit der Rolle "Student" funktioniert besipielsweise nicht, wenn die Nutzer/innen die Rolle "Student" nur in einem Kurs haben (was normalerweise der Fall ist). Eine Dashboard-Tour kann nur auf Nutzer/innen mit einer globalen Rolle beschränkt werden.';
$string['filter_theme'] = 'Design';
$string['filter_theme_help'] = 'Tour anzeigen, wenn eines der ausgewählte Designs verwendet wird.';
$string['importtour'] = 'Tour importieren';
$string['left'] = 'Links';
$string['modifyshippedtourwarning'] = 'Diese geführte Tour wird mit Moodle ausgeliefert. Alle Veränderungen, die Sie in dieser Tour vornehmen, werden beim nächsten Update der Website überschrieben.';
$string['movestepdown'] = 'Schritt nach unten bewegen';
$string['movestepup'] = 'Schritt nach oben bewegen';
$string['movetourdown'] = 'Tour nach unten bewegen';
$string['movetourup'] = 'Tour nach oben bewegen';
$string['name'] = 'Name';
$string['newstep'] = 'Neuer Schritt';
$string['newtour'] = 'Neue Tour anlegen';
$string['next'] = 'Nächstes';
$string['options_heading'] = 'Optionen';
$string['orphan'] = 'Anzeigen, wenn Ziel nicht gefunden';
$string['orphan_help'] = 'Schritt anzeigen, wenn das Ziel auf der Seite nicht gefunden werden kann.';
$string['pathmatch'] = 'Auf URL-Übereinstimmung anwenden';
$string['pathmatch_help'] = 'Touren werden auf jeder Seite angezeigt, deren URL diesem Wert entspricht.

Sie können das % -Zeichen als Wildcard benutzen.
Beispiele dafür sind:

* /my/% - für das Dashboard
* /course/view.php?id=2 - für einen spezifischen Kurs
* /mod/forum/view.php% - für die Diskussionsliste des Forums
* /user/profile.php% - für die Nutzerprofilseite

Wenn Sie eine Tour auf der Startseite anzeigen lassen möchten, können Sie den Wert "FRONTPAGE" verwenden.';
$string['pausetour'] = 'Pause';
$string['placement'] = 'Platzierung';
$string['placement_help'] = 'Ein Schritt kann oben, unten, links oder rechts des Ziels platziert werden. Oben oder unten wird empfohlen, da dies besser für mobile Geräte passt.

Wenn der Schritt nicht auf eine bestimmte Seite an der angegebenen Stelle passt, wird er automatisch an anderer Stelle platziert.';
$string['pluginname'] = 'Geführte Touren';
$string['privacy:metadata:preference:completed'] = 'Zeitpunkt, an dem eine Person die Nutzer-Tour zuletzt abgeschlossen hat.';
$string['privacy:metadata:preference:requested'] = 'Zeitpunkt, zu dem eine Person die Nutzer-Tour zuletzt manuell angefordert hat.';
$string['privacy:request:preference:completed'] = 'Sie haben die Nutzer-Tour \'{$a->name}\' zuletzt am {$a->time} als abgeschlossen markiert.';
$string['privacy:request:preference:requested'] = 'Sie haben die Nutzer-Tour \'{$a->name}\' zuletzt am {$a->time} angefordert.';
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
$string['skip'] = 'Überspringen';
$string['target'] = 'Ziel';
$string['target_block'] = 'Block';
$string['target_heading'] = 'Schrittziel';
$string['target_selector'] = 'Auswahl';
$string['target_selector_targetvalue'] = 'CSS-Selektoren';
$string['target_selector_targetvalue_help'] = 'Ein CSS-Selektor kann verwendet werden, um jedes beliebige Element auf der Seite zu erreichen. Der entsprechende Selektor kann mit den Entwickler-Tools für Ihren Webbrowser gefunden werden.';
$string['target_unattached'] = 'In der Seitenmitte anzeigen';
$string['targettype'] = 'Zieltyp';
$string['targettype_help'] = 'Jeder Schritt ist mit einem Teil der Seite verbunden - dem Ziel. Zieltypen sind:

* Block - Anzeige eines Schritts neben einem spezifischen Block
* CSS-Selektor - Definierung eines Zielbereichs über CSS
* Anzeige in der Seitenmitte - für einen Schritt, der nicht mit einem spezifischen Teil der Seite verbunden ist';
$string['title'] = 'Titel';
$string['title_help'] = 'Der Titel eines Schrittes kann als Klartext hinzugefügt werden, der in Multilang-Tags eingeschlossen ist (für die Verwendung mit dem mehrsprachigen Inhaltsfilter), falls erforderlich.

Alternativ kann eine Text-ID in die Formatkennung eingegeben werden (ohne Klammern oder Leerzeichen nach dem Komma).';
$string['tour1_content_addingblocks'] = 'Seien Sie zurückhaltend bei der Verwendung von Blöcken. Blöcke werden in der Moodle-App nicht angezeigt, daher sollten Sie darauf achten, dass Ihre Website auch ohne Blöcke problemlos funktioniert.';
$string['tour1_content_blockregion'] = 'Es gibt weiterhin einen Blockbereich. Wir empfehlen, die Navigations- und Einstellungsblöcke zu entfernen, weil deren Funktionalität an anderer Stelle im Boost Theme zu finden ist.';
$string['tour1_content_customisation'] = 'Verwenden Sie das Einstellungsmenü am Rand dieser Kopfzeile, um Ihre Website anzupassen. Versuchen Sie, "Bearbeiten einschalten" jetzt zu aktivieren.';
$string['tour1_content_end'] = 'Dies war eine Nutzer-Tour. Sie wird nicht wieder angezeigt, es sei denn Sie setzen sie zurück, indem Sie auf den Link in der Fußzeile klicken. Als Admin können Sie zudem solche Touren selbst erstellen.';
$string['tour1_content_navigation'] = 'Die Hauptnavigation findet nun über diese Navigationsleiste statt. Die Inhalte aktualisieren sich abhängig davon, an welcher Stelle Sie auf der Website sind. Nutzen Sie den Button in der oberen linken Ecke, um die Navigationsleiste ein- oder auszublenden.';
$string['tour1_content_welcome'] = 'Willkommen zum Design "Boost" für Moodle. Falls Sie Moodle bereits vorher verwendet haben, werden Sie möglicherweise Dinge finden, die jetzt ein bisschen anders aussehen.';
$string['tour1_title_addingblocks'] = 'Blöcke hinzufügen';
$string['tour1_title_blockregion'] = 'Blockbereich';
$string['tour1_title_customisation'] = 'Anpassungen';
$string['tour1_title_end'] = 'Ende der Tour';
$string['tour1_title_navigation'] = 'Navigation';
$string['tour1_title_welcome'] = 'Willkommen';
$string['tour2_content_addblock'] = 'Wenn Sie "Bearbeiten einschalten" aktivieren, können Sie Blöcke aus der Navigationsleiste hinzufügen. Seien Sie beim Hinzufügen von Blöcken jedoch zurückhaltend. Blöcke werden in der mobilen Moodle-App nicht angezeigt, daher sollten Sie im Sinne der Benutzerfreundlichkeit darauf achten, dass Ihre Kurse auch ohne Blöcke gut funktionieren.';
$string['tour2_content_addingblocks'] = 'Sie können mit Hilfe dieses Buttons auf dieser Seite neue Blöcke hinzufügen. Bedenken Sie jedoch das Einfügen von Blöcken sorgfältig. Blöcke werden in der mobilen Moodle App nicht angezeigt. Sie sollten sicherstellen, dass Ihre Kurse auch ohne Blöcke funktionieren.';
$string['tour2_content_customisation'] = 'Um Kurseinstellungen zu bearbeiten, nutzen Sie das Menü "Einstellungen" am Rand dieser Kopfzeile. Sie finden ein ähnliches Einstellungsmenü zudem auf der Startseite jeder Kursaktivität. Versuchen Sie nun "Bearbeiten einschalten" zu aktivieren.';
$string['tour2_content_end'] = 'Dies war eine Nutzer-Tour. Sie wird nicht wieder angezeigt, es sei denn, Sie setzen die Tour zurück, indem Sie auf den Link in der Fußzeile klicken. Der Administrator der Seite kann zudem weitere Touren erstellen, falls notwendig.';
$string['tour2_content_navigation'] = 'Die Navigation findet nun über diese Navigationsleiste statt. Nutzen Sie den Button in der linken oberen Ecke, um die Navigationsleiste ein- oder auszublenden. Sie enthält Links zu Abschnitten Ihrer Kurse.';
$string['tour2_content_opendrawer'] = 'Versuchen Sie jetzt, den Navigationsbereich zu öffnen.';
$string['tour2_content_participants'] = 'Zeigen Sie hier die Teilnehmer/innen an. An dieser Stelle werden auch die Teilnehmer/innen hinzugefügt oder entfernt.';
$string['tour2_content_welcome'] = 'Willkommen zum Design Boost in Moodle. Wenn Sie Moodle bereits verwendet haben, könnten einige Dinge auf der Kursseite ein bisschen anders aussehen.';
$string['tour2_title_addblock'] = 'Block hinzufügen';
$string['tour2_title_addingblocks'] = 'Blöcke hinzufügen ...';
$string['tour2_title_customisation'] = 'Anpassungen';
$string['tour2_title_end'] = 'Ende der Tour';
$string['tour2_title_navigation'] = 'Navigation';
$string['tour2_title_opendrawer'] = 'Navigation öffnen';
$string['tour2_title_participants'] = 'Kursteilnehmer/innen';
$string['tour2_title_welcome'] = 'Willkommen';
$string['tour3_content_dashboard'] = 'Ihr neues Dashboard bietet viele Funktionen, mit denen Sie einfach auf die für Sie wichtigsten Infos zugreifen können.';
$string['tour3_content_displayoptions'] = 'Die Kurse können nach Kursnamen oder dem letzten Zugriffszeitpunkt sortiert werden.

Sie können außerdem auswählen, ob die Kurse in einer Liste mit zusammenfassenden Infos oder in der Standardansicht "Karte" angezeigt werden.';
$string['tour3_content_overview'] = 'Der Block \'Kursübersicht\' zeigt alle Kurse, bei denen Sie eingeschrieben sind.

Sie können Kurse anzeigen, die aktuell in Bearbeitung sind, die in der Vergangenheit oder in der Zukunft liegen oder die Sie als Favoriten markiert haben.';
$string['tour3_content_recentcourses'] = 'Der Block \'Zuletzt besuchte Kurse\' zeigt die zuletzt aufgerufenen Kurse, so dass Sie diese direkt wieder öffnen können.';
$string['tour3_content_starring'] = 'Sie können wählen, ob Sie einen Kurs markieren möchten, um ihn hervorzuheben oder ihn als nicht mehr wichtigen Kurs auszublenden.

Diese Aktionen wirken sich nur auf Ihre Ansicht aus.

Sie können auch auswählen, ob die Kurse in einer Liste, mit einer zusammenfassenden Info oder in der Standardansicht "Karte" angezeigt werden.';
$string['tour3_content_timeline'] = 'Der Block \'Zeitleiste\' zeigt Ihre wichtigen bevorstehenden Termine.

Sie können Aktivitäten in der nächsten Woche, im nächsten Monat oder weiter in der Zukunft anzeigen.

Sie können auch überfällige Elemente anzeigen.';
$string['tour3_title_dashboard'] = 'Ihr Dashboard';
$string['tour3_title_displayoptions'] = 'Anzeigeoptionen';
$string['tour3_title_overview'] = 'Kursübersicht';
$string['tour3_title_recentcourses'] = 'Zuletzt besuchte Kurse';
$string['tour3_title_starring'] = 'Kurse markieren und verbergen';
$string['tour3_title_timeline'] = 'Block \'Zeitleiste\'';
$string['tour4_content_groupconvo'] = 'Wenn Sie in einer Gruppe mit aktivierten Gruppenmitteilungen sind, wird hier die Gruppenkommunikation angezeigt.

Die Gruppenkommunikation in einem Kurs ermöglicht es Ihnen, mit den anderen Gruppenmitgliedern zu interagieren.';
$string['tour4_content_icon'] = 'Mit diesem Symbol können Sie von jeder Seite aus auf Ihre Mitteilungen zugreifen.

Wenn Sie ungelesene Mitteilungen haben, wird hier auch die Anzahl der ungelesenen Mitteilungen angezeigt.

Wenn Sie auf die Sprechblase klicken, werden Ihre Mitteilungen angezeigt. Die Mitteilungen sind sortiert nach "Favoriten", "Gruppe" und "Persönlich".';
$string['tour4_content_messaging'] = 'Zu den neuen Messaging-Funktionen gehören die Möglichkeit für Gruppenmitteilungen innerhalb eines Kurses und eine bessere Kontrolle darüber, wer Ihnen Mitteilungen senden darf.';
$string['tour4_content_settings'] = 'Über das Zahnradsymbol können Sie direkt auf Ihre Mitteilungseinstellungen zugreifen. Mit einer neuen Datenschutzeinstellung können Sie einschränken, wer Ihnen Mitteilungen senden kann.';
$string['tour4_content_starred'] = 'Sie können bestimmte Konversationen markieren, um sie leichter zu finden.';
$string['tour4_title_groupconvo'] = 'Gruppenmitteilungen';
$string['tour4_title_icon'] = 'Mitteilungen';
$string['tour4_title_messaging'] = 'Mitteilungen: Verbesserte Nutzeroberfläche';
$string['tour4_title_settings'] = 'Mitteilungseinstellungen';
$string['tour4_title_starred'] = 'Favoriten';
$string['tour_final_step_content'] = 'Sie sind am Ende Ihrer Nutzertour angekommen. Die Tour wird nur einmal angezeigt, es sei denn, Sie starten die Tour über den Link in der Fußzeile der Seite erneut.';
$string['tour_final_step_title'] = 'Ende der Tour';
$string['tour_resetforall'] = 'Der Status der Tour wurde zurückgesetzt. Die Tour wird allen Nutzer/innen erneut gezeigt.';
$string['tourconfig'] = 'Konfigurationsdatei der Tour';
$string['tourisenabled'] = 'Geführte Tour aktiv';
$string['tourlist_explanation'] = 'Sie können beliebig viele Touren anlegen und sie in verschiedenen Bereichen von Moodle aktivieren. Für jede Seite kann es aber nur eine Tour geben.';
$string['tours'] = 'Touren';
$string['usertours'] = 'Geführte Touren';
$string['usertours:managetours'] = 'Geführte Touren anlegen, bearbeiten und entfernen';
$string['viewtour_edit'] = 'Sie können die <a href="{$a->editlink}">Tour bearbeiten</a> und für alle Nutzer/innen die <a href="{$a->resetlink}">Tour erneut anzeigen</a>.';
$string['viewtour_info'] = 'Die Tour heißt \'{$a->tourname}\' und gilt für den Pfad \'{$a->path}\'.';
