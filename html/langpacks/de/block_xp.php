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
 * Strings for component 'block_xp', language 'de', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['activityoresourceis'] = 'Die Aktivität oder das Material ist {$a}';
$string['addacondition'] = 'Eine Bedingung hinzufügen';
$string['addarule'] = 'Eine Regel hinzufügen';
$string['addinstructions'] = 'Fügen Sie weitere Informationen hinzu';
$string['additionalresources'] = 'Weitere Ressourcen';
$string['addlevel'] = 'Level hinzufügen';
$string['addoninstallationerror'] = 'Beim Add-on (local_xp) wurde ein Problem festgestellt, denn es scheint nicht richtig installiert zu sein. Ein Administrator sollte die Installation abschließen.';
$string['addonnotactivated'] = 'Das Plugin ist nicht aktiv.';
$string['addrulesformhelp'] = 'Die letzte Spalte definiert die Menge an Erfahrungspunkte, wenn die Kriterien erfüllt sind.';
$string['admindefaultrulesintro'] = 'Die folgenden Regeln werden in Kursen, in denen der Block hinzugefügt wird, als Standard verwendet.';
$string['admindefaultsettingsintro'] = 'Die folgenden Einstellungen werden als Standard verwendet, wenn der Block neu in einen Kurs eingefügt wird. Einige Einstellungen können gesperrt werden, in diesem Fall wird ihr Wert in allen Instanzen des Plugins strikt durchgesetzt.';
$string['admindefaultvisualsintro'] = 'Das folgende wird als Standard genutzt, wenn der Block neu in einen Kurs eingefügt wird.';
$string['adminscanearnxp'] = 'Administrator/innen können Punkte sammeln';
$string['adminscanearnxp_desc'] = 'Standardmäßig können Administrator/innen keine Punkte sammeln, da sie die Berechtigung _block/xp:earnxp_ haben. Diese Berechtigung erlaubt es ihnen überall in allen Kontexten Punkte zu sammeln. Sie können diese Einstellung verwenden, um auch Administrator/innen Punkte sammeln zu lassen.';
$string['anonymity'] = 'Anonymität';
$string['anonymity_help'] = 'Diese Einstellung gibt an, ob Teilnehmer/innen die Namen und Avatare anderer Teilnehmer/innen sehen können.';
$string['apply'] = 'Anwenden';
$string['awardaxpwhen'] = '<strong>{$a}</strong> Erfahrungspunkte werden verdient wenn:';
$string['badgeaward'] = 'Badge verleihen';
$string['badgeawarddesc'] = 'Ein Badge, der verliehen wird, wenn die Nutzer/innen dieses Level erreichen.';
$string['basepoints'] = 'Basispunkte';
$string['basepointslineardesc'] = 'Der Mindestpunktezuwachs zwischen jedem Level.';
$string['basepointsrelativedesc'] = 'Die Anzahl an Punkten, mit denen gestartet wird.';
$string['basexp'] = 'Basis des Algorithmus';
$string['blockappearance'] = 'Block-Darstellung';
$string['blockappearancemovedtopluginsettings'] = 'Der Block Darstellungseinstellungen wurde in die Plugineinstellungen verschoben.';
$string['cachedef_filters'] = 'Level Filter';
$string['cachedef_ruleevent_eventslist'] = 'Liste einiger Ereignisse';
$string['cannotbesetindefaults'] = 'Dies kann nicht in den Standardeinstellungen festgelegt werden.';
$string['cannotearnpoints'] = 'Kann keine Punkte sammeln.';
$string['cannotshowblockconfig'] = 'Normalerweise würden hier die Einstellungen angezeigt, aber Ihr Block konnte nicht gefunden werden. Um das Aussehen des Blocks zu ändern, gehen Sie zurück [here] ({$ a}) (oder wo Sie den Block eingefügt haben), aktivieren den Bearbeitungsmodus und folgen der "Konfigurieren" -Option im Dropdown-Menü des Blocks. Wenn Sie den Block nicht finden können, fügen Sie ihn erneut zu Ihrem Kurs hinzu.';
$string['cannotshowblockconfigsys'] = 'Normalerweise würden hier die Einstellungen angezeigt, aber Ihr Block konnte nicht gefunden werden. Er fehlt möglicherweise auf der [front page] ({$ a-> fp}) und dem [default dashboard] ({$ a-> mysys}) Ihrer Benutzer oder wird auf beiden angezeigt. Um die Einstellungen von hier aus zu bearbeiten, stellen Sie sicher, dass er nur in einem von beiden erscheint.';
$string['changelevelformhelp'] = 'Wenn Sie die Anzahl der Level ändern, werden die individuellen Levelabzeichen vorübergehend deaktiviert, um Level ohne Abzeichen zu verhindern. Wenn Sie die Levelanzahl ändern,  gehen Sie zu der Seite "Visuals" , um wieder die benutzerdefinierten Abzeichen zu aktivieren, sobald Sie dieses Formular gespeichert haben.';
$string['cheatguard'] = 'Schutz gegen Betrug';
$string['clicktoselectcm'] = 'Klicken Sie, um eine Aktivität oder ein Material auszuwählen';
$string['cmselector'] = 'Kursmodul-Auswahl';
$string['coefxp'] = 'Koeffizient des Algorithmus';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Kompatibilitätsüberprüfung';
$string['configblockrankingsnapshot'] = 'Bestenlisten-Schnappschuss anzeigen';
$string['configblockrankingsnapshot_help'] = 'Der Bestenlisten-Snapshot zeigt den Rang der Person an. Dabei wird versucht, die beiden Personen anzuzeigen, die die Person umgeben. Für diese Funktion muss die Bestenliste aktiviert sein und die Ränge müssen angezeigt werden.';
$string['configdescription'] = 'Beschreibung';
$string['configdescription_help'] = 'Kurze Einführungsnachricht, die im Block angezeigt wird. Die Teilnehmer/innen können die Nachricht zu verwerfen, in diesem Fall sehen sie sie nicht mehr.';
$string['configheader'] = 'Einstellungen';
$string['configrecentactivity'] = 'Neue Belohnungen anzeigen';
$string['configrecentactivity_help'] = 'Wenn diese Option aktiviert wurde, zeigt der Block eine kurze Liste der letzten Aktivitäten, bei denen die Teilnehmer/innen mit Punkten belohnt wurden.';
$string['configtitle'] = 'Titel';
$string['configtitle_help'] = 'Titel des Blocks';
$string['congratulationsyouleveledup'] = 'Herzlichen Glückwunsch!';
$string['coolthanks'] = 'Cool, Danke!';
$string['courselog'] = 'Kurslog';
$string['coursereport'] = 'Kursbericht';
$string['courserules'] = 'Kursregeln';
$string['courseselectedcolon'] = 'Ausgewählter Kurs:';
$string['coursesettings'] = 'Kurseinstellungen';
$string['coursevisuals'] = 'Levelabzeichen des Kurses';
$string['currencysign'] = 'Punkte Symbol';
$string['currencysign_help'] = 'Mit dieser Einstellung können Sie die Bezeichnung der Punkte ändern. Die Bezeichnung wird neben der Anzahl der gesammelten Punkte angezeigt.

Wählen Sie aus den bereitgestellten Bezeichnungen oder laden Sie Ihre eigene hoch.';
$string['currencysignxp'] = 'XP (Erfahrungspunkte)';
$string['customizelevels'] = 'Level anpassen';
$string['dangerzone'] = 'Gefahrenzone';
$string['defaultlevels'] = 'Standardlevel';
$string['defaultrules'] = 'Standardregeln';
$string['defaultrulesformhelp'] = 'Dies sind die voreingestellten Regeln des Plugins. Sie vergeben automatisch Erfahrungspunkte und ignorieren redundante Events. Individuell festgelegte Regeln überschreiben diese Voreinstellungen.';
$string['defaultsettings'] = 'Standardeinstellungen';
$string['defaultvisuals'] = 'Standarddarstellung';
$string['deletecondition'] = 'Bedingung löschen';
$string['deleterule'] = 'Regel löschen';
$string['description'] = 'Beschreibung';
$string['difference'] = 'Diff.';
$string['difficulty'] = 'Punkte-Berechnungsmethode';
$string['difficultyflat'] = 'Gleich';
$string['difficultyflatdesc'] = 'Alle Level benötigen die gleiche Anzahl an Punkten, um erreicht zu werden.';
$string['difficultylinear'] = 'Zuwachs';
$string['difficultylineardesc'] = 'Level benötigen zunehmend mehr Punkte, um erreicht zu werden.';
$string['difficultylinearincrdesc'] = 'Die Anzahl an Punkten, die für den fortschreitenden Schwierigkeitsgrad verwendet wird.';
$string['difficultypointincrease'] = 'Punktezuwachs';
$string['difficultyrelative'] = 'Schneeballeffekt';
$string['difficultyrelativedesc'] = 'Level werden exponentiell schwieriger zu erreichen';
$string['difficultyrelativeincrdesc'] = 'Der Prozentsatz des Punktezuwachses vom vorhergehenden Level.';
$string['discoverlevelupplus'] = 'Level Up XP+ entdecken';
$string['dismissnotice'] = 'Nachricht schließen';
$string['displayeveryone'] = 'Alle anzeigen';
$string['displaynneighbours'] = '{$a} Nachbarn anzeigen';
$string['displayoneneigbour'] = 'Einen Nachbarn anzeigen';
$string['displayparticipantsidentity'] = 'Identität der Teilnehmer anzeigen';
$string['displayrank'] = 'Rang anzeigen';
$string['displayrelativerank'] = 'Relativen Rang anzeigen';
$string['documentation'] = 'Dokumentation';
$string['drops'] = 'Drops';
$string['drops_help'] = 'In Computerspielen können einige Charaktere Gegenstände oder Erfahrungspunkte fallen lassen, die die Spieler dann einsammeln können. Diese Gegenstände und Erfahrungspunkte werden als Drops bezeichnet.

Drops in Level Up sind Shortcodes (z.B.`[xpdrop abcdef]`), die Trainer/innen im Kurs platzieren können. Wenn diese von einer Person gefunden werden, werden sie automatisch _eingesammelt_ und die Punkte zu den bereits gesammelten Erfahrungspunkten dazugezählt.

Derzeit sind Drops unsichtbar für die Nutzer/innen. Die Punkte werden automatisch erhöht, wenn ein Drop gefunden wurde.

Drops können verwendet werden, um Punkte zu vergeben, wenn ein bestimmter Inhalt von den Teilnehmer/innen aufgerufen wurde. Einige Ideen für die Platzierung von Drops:

- Im Feedback von Tests, wenn alle Punkte erreicht wurden
- In schwierigem Inhalt, um die Auseinandersetzung damit zu belohnen
- In einer interessanten Forumsdiskussion
- In einer schwer erreichbaren Seite einer Lektion

[Weitere Informationen (Englisch)](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Drops sind Shortcodes, die im Kurs platziert werden können und Punkte vergeben, wenn sie von einer Person gefunden werden.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Achtung!** Sie verändern nicht die aktiven Einstellungen, sondern die Standardeinstellungen. Da Level Up auf der gesamten Seite verwendet wird, haben Ihre Änderungen Auswirkungen auf alle Level Up Blöcke. Ändern Sie die [Einstellungen des einzelnen Blocks]({$a->url}) oder klicken Sie auf Einstellungen im jeweiligen Level Up Block.';
$string['editinstructions'] = 'Informationen bearbeiten';
$string['enablecheatguard'] = 'Schummelwächter aktivieren';
$string['enablecheatguard_help'] = 'Der Schummelwächter (Cheat Guard) ist ein einfacher Mechanismus, der verhindert, dass Teilnehmer/innen das System mit simplen Techniken missbrauchen, z.B. indem sie Seiten endlos auffrischen oder Aktionen ständig wiederholen.

[Weitere Infos](https://levelup.plus/docs/article/level-up-cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Infoseite aktivieren';
$string['enableinfos_help'] = 'Wenn die Einstellung \'Nein\' gewählt ist, können Teilnehmer/innen die Info-Seite nicht sehen.';
$string['enableladder'] = 'Bestenliste aktivieren';
$string['enableladder_help'] = 'Wenn die Einstellung \'Nein\' gewählt wird, können Teilnehmer/innen die Bestenliste nicht sehen.';
$string['enablelevelupnotif'] = 'Mitteilung für Levelsteigerung aktivieren';
$string['enablelevelupnotif_help'] = 'Wenn die Einstellung \'Ja\' gewählt wird, wird den Teilnehmer/innen ein Pop-up-Fenster angezeigt wenn sie ein neues Level erreicht haben.';
$string['enablelogging'] = 'Logging aktivieren';
$string['enablexpgain'] = 'Punktezuwachs aktivieren';
$string['enablexpgain_help'] = 'Wenn die Einstellung \'Nein\' gewählt wird, erwirbt in diesem Kurs niemand Erfahrungspunkte. Dies kann sinnvoll sein, wenn die erreichten Erfahrungspunkte eingefroren oder erst zu einem späteren Zeitpunkt aktiviert werden sollen.

_Hinweis_: Mithilfe der Berechtigung \'block/xp:earnxp\' kann dies u. U. genauer gesteuert werden.';
$string['entersearchterm'] = 'Suchbegriff eingeben';
$string['errorcontextcoursemismatchforwholesite'] = 'Die URL dieser <em> Level Up XP </em> Seite stimmt nicht mit der aktuellen Plugin-Konfiguration überein. Dort wird <em> Level up XP </em> als "Für die gesamte Seite" deklariert. Auf dieser Seite wurde jedoch erwartet, dass "Pro Kurs" verwendet wird. Bitte <a href="{$a-> nexturl} "> hier klicken </a>, um zur rechten Seite zu navigieren. Suchen Sie nach der Administratoreinstellung \'block_xp_context\', wenn Sie Ihre Konfiguration ändern möchten.';
$string['errorcontextcoursemismatchpercourse'] = 'Die URL dieser <em> Level Up XP </em> Seite stimmt nicht mit der aktuellen Plugin-Konfiguration überein. Dort wird <em> Level up XP </em> als "Pro Kurs" deklariert. Auf dieser Seite wird jedoch erwartet, dass "Für die gesamte Seite" verwendet wird. Es stammt höchstwahrscheinlich aus einem <em> Block </em>, der in einer anderen Konfiguration zum Dashboard oder zur Startseite hinzugefügt wurde. Sie sollten den Block entfernen und nur innerhalb einzelner Kurse verwenden.';
$string['errorformvalues'] = 'Prüfen Sie bitte die Formulareinträge.';
$string['errorlevelsincorrect'] = 'Die minimale Anzahl der Level ist 2.';
$string['errornotalllevelsbadgesprovided'] = 'Nicht für alle Level wurden Abzeichen bereitgestellt. Fehlend: {$a}';
$string['errorunknownevent'] = 'Fehler: unbekanntes Ereignis';
$string['errorunknownmodule'] = 'Fehler: unbekanntes Modul';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Der erforderlichen Punkte sind niedriger oder gleich zum vorherigen Level.';
$string['event_user_leveledup'] = 'Nutzer/in hat das nächste Level erreicht';
$string['eventis'] = 'Das Ereignis ist {$a}';
$string['eventname'] = 'Eventbezeichnung';
$string['eventproperty'] = 'Eventeigenschaft';
$string['eventsrules'] = 'Eventregeln';
$string['eventsrules_help'] = 'Dieses Plugin nutzt Ereignisse, um den von Teilnehmer/innen ausgeführten Aktionen Punkte zuzuweisen.
Sie können über die Eingabemaske eigene Regeln hinzufügen und die Standardregeln ändern.

Wir empfehlen, im Protokoll des Plugins zu überprüfen, welche Ereignisse ausgelöst werden, wenn Teilnehmer/innen Aktionen im Kurs ausführen.

Zusätzliche Infos finden Sie hier:
- [Wie werden Erfahrungspunkte berechnet?](https://levelup.plus/docs/article/how-are-experience-points-calculated?ref=blockxp_help)
- [Fehlerbehebung](https://levelup.plus/docs/article/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Interaktion beobachten und Punkte vergeben.';
$string['eventtime'] = 'Eventzeitpunkt';
$string['filterbyuser'] = 'Filter nach Person';
$string['filtermodules'] = 'Filter Module';
$string['for1day'] = 'Für einen Tag';
$string['for1month'] = 'Für einen Monat';
$string['for1week'] = 'Für eine Woche';
$string['for3days'] = 'Für 3 Tage';
$string['forever'] = 'Immer';
$string['forthewholesite'] = 'Für die gesamte Website';
$string['give'] = 'geben';
$string['gotofullladder'] = 'Zur vollständigen Bestenliste';
$string['graderules'] = 'Bewertungsregeln';
$string['graderules_help'] = 'Teilnehmer/innen sammeln so viele Punkte, wie sie bei der Bewertung erhalten haben. Bei einer Bewertung von 5/10 Punkten und einer Bewertung von 5/100 Punkten sammen sie jeweils 5 Punkte.
Wenn sich die Bewertung öfter ändert, wird die Bewertung mit den meisten Punkten für die Punktevergabe verwendet.
Gesammelte Punkte werden nie reduziert und negative Bewertungen werden ignoriert.

Beispiel: Alice gibt eine Aufgabe ab und bekommt eine Bewertung von 40/100. Alice sammelt 40 Erfahungspunkte mit ihrer Bewertung.
Alice gibt einen weiteren Versuch bei der Aufgabe ab, dieser wird aber nur mit 25/100 bewertet. Die gesammelten Erfahrungspunkte ändern sich nicht.
Beim letzten Versuch erhält Alice eine Bewertung 60/100. Sie sammelt damit weitere 20 Erfahrungspunkte damit erhöhen sich die gesammelten Punkte für diese Aufgabe auf insgesamt 60.

[Weitere Informationen unter _Level Up XP_ Dokumentation (Englisch)](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'Bewertungsregeln erlauben es Teilnehmer/innen, Punkte gleich den erhaltenen Bewertungen zu sammeln.';
$string['grid'] = 'Raster';
$string['hasbadgeaward'] = 'Zu verleihender Badge vorhanden';
$string['hasdescription'] = 'Beschreibung vorhanden';
$string['hasname'] = 'Name vorhanden';
$string['hasnobadgeaward'] = 'Kein Badge, das verliehen wird';
$string['hasnodescription'] = 'Keine Beschreibung';
$string['hasnoname'] = 'Kein Name';
$string['hasnopopupmessage'] = 'Keine PopUp Nachricht';
$string['haspopupmessage'] = 'PupUp Nachricht vorhanden';
$string['hideparticipantsidentity'] = 'Identität der Teilnehmer/innen verbergen';
$string['hiderank'] = 'Rang verbergen';
$string['importpoints'] = 'Punkte importieren';
$string['importpoints_help'] = 'Der Import kann verwendet werden, um die Punkte von Teilnehmer/innen zu _erhöhen_ oder mit dem vorgegebenen Wert zu _überschreiben_.

_Hinweis:_ Der Import verwendet _ein anderes_ Format als der exportierte Bericht. Das erforderliche Format wird in der [Dokumentation](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help) beschrieben, wo Sie auch ein [Beispieldokument](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) herunterladen können.';
$string['importpointsintro'] = 'Punkte von einem CSV-Dokument importieren und optional eine Nachricht an die Empfänger/innen senden.';
$string['incourses'] = 'In Kursen';
$string['ineffective'] = 'Ineffektiv';
$string['infos'] = 'Information';
$string['installed'] = 'Installiert';
$string['instructions'] = 'Weitere Informationen';
$string['invalidxp'] = 'Ungültiger Punkte-Wert';
$string['keeplogs'] = 'Logdaten behalten';
$string['ladder'] = 'Bestenliste';
$string['ladderadditionalcols'] = 'Zusätzliche Spalten';
$string['ladderadditionalcols_help'] = 'Diese Einstellung bestimmt, welche zusätzlichen Spalten auf der Bestenliste angezeigt werden. Drücken Sie beim Klicken die STRG- oder CMD-Taste, um mehr als eine Spalte auszuwählen oder eine ausgewählte Spalte abzuwählen.';
$string['ladderempty'] = 'Die Bestenliste ist im Moment leer. Versuchen Sie es später noch einmal!';
$string['learnmore'] = 'Mehr erfahren';
$string['level'] = 'Level';
$string['levelbadges'] = 'Levelabzeichen';
$string['levelbadges_help'] = 'Bilder hochladen, um das Erscheinungsbild der einzelnen Level zu ersetzen.

Die Bilder müssen mit [level].[Dateinamenerweiterung] benannt werden. z.B. 1.png, 2.jpg, etc.

Wir empfehlen Bilder in der Größe von 100x100 Pixel und folgende Grafikformate: GIF, JPEG, PNG und SVG.';
$string['levelbadgesformhelp'] = 'Benennen Sie die Dateien [level].[file extension], z.B.: 1.png, 2.jpg, etc... Die empfohlene Bildgröße beträgt 100x100.';
$string['levelcount'] = 'Levelstufen';
$string['leveldesc'] = 'Levelbeschreibung';
$string['leveldesc_help'] = 'Neben dem Level wird eine kurze Beschreibung dessen angezeigt. Sie können das Level auch auf spielerische Weise beschreiben, um den Teilnehmenden Anweisungen zu geben, wie sie darauf hinarbeiten können, das Level freizuschalten. (z. B. Nur die tapfersten Seelen sind dafür bekannt, dieses Level zu erreichen) usw. .';
$string['leveldescriptiondesc'] = 'Eine kurze Beschreibung des Levels. Diese wird auf der Informationsseite angezeigt.';
$string['levelname'] = 'Level-Name';
$string['levelname_help'] = 'Ein Kurzname, der anstelle der Standardeinstellung _Level #1_, _Level #2_, etc. an einigen Stellen angezeigt wird. Wir empfehlen bei der Vergabe von Kurznamen, dies für alle Level zu tun, nicht nur für einige!';
$string['levelpointslength'] = 'Länge';
$string['levelpointsstart'] = 'Start';
$string['levels'] = 'Level';
$string['levelsappearance'] = 'Level Darstellung';
$string['levelssaved'] = 'Die Level wurden gespeichert.';
$string['levelswillbereset'] = 'Achtung! Beim Speichern dieses Formulars werden alle Level für jeden neu berechnet.';
$string['levelup'] = 'Level Up!';
$string['levelupoptionsunavailableforlevelone'] = 'Einstellungen zum Erreichen des Levels stehen für das erste Level nicht zur Verfügung.';
$string['levelupplus'] = 'Level up XP+';
$string['levelx'] = 'Level #{$a}';
$string['likenotice'] = '<strong>Gefällt Ihnen das Plugin?</strong> Dann nehmen Sie sich bitte einen Moment Zeit, um <a href="{$a->moodleorg}" target="_blank">es zu Ihren Favoriten</a> auf Moodle.org hinzuzufügen und es <a href="{$a->github}" target="_blank">auf GitHub mit einem Stern zu versehen</a>.';
$string['limitparticipants'] = 'Teilnehmer beschränken';
$string['limitparticipants_help'] = 'Diese Einstellung steuert, wer in der Rangliste angezeigt wird. Nachbarn sind die Teilnehmer/innen, die über und unter dem aktuellen Nutzer eingestuft sind. Die Einstellung \'Zeige zwei Nachbarn\' zeigt beispielsweise nur die beiden Teilnehmer/innen direkt über und unter der aktuellen Person in der Rangliste an.';
$string['list'] = 'Liste';
$string['logging'] = 'Log-Einträge';
$string['manually'] = 'Manuell';
$string['maxactionspertime'] = 'Max. Aktionen im Zeitrahmen';
$string['maxactionspertime_help'] = 'Die maximale Anzahl von Aktionen, die während des Zeitrahmens für Punkte gegeben werden. Jede nachfolgende Aktion wird ignoriert. Dies ist ausgeschaltet, wenn dieser Wert leer oder gleich Null ist.';
$string['maxlevelexcl'] = 'max. Level!';
$string['menu'] = 'Menü';
$string['missing'] = 'Fehlend';
$string['movecondition'] = 'Bedingung verschieben';
$string['moverule'] = 'Regel verschieben';
$string['name'] = 'Name';
$string['navbardisplay'] = 'In Navigationsleiste anzeigen';
$string['navbardisplay_desc'] = 'Wenn aktiviert, wird das Level der Teilnehmer/innen in der Navigationsleiste oben angezeigt. Wenn Level Up! pro Kurs verwendet wird, wird das Level nur im Kurs angezeigt. Bitte beachten Sie, dass diese Funktion vom Theme abhängt und nicht mit allen Drittanbieter-Themes kompatibel ist.
 [Weitere Informationen](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navdrops'] = 'Drops';
$string['naveventrules'] = 'Eventregeln';
$string['navgraderules'] = 'Bewertungsregeln';
$string['navimport'] = 'Import';
$string['navinfos'] = 'Info';
$string['navladder'] = 'Bestenliste';
$string['navlevels'] = 'Level';
$string['navlevelssetup'] = 'Einstellungen';
$string['navlog'] = 'Log';
$string['navpoints'] = 'Punkte';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Bericht';
$string['navrules'] = 'Regeln';
$string['navsettings'] = 'Einstellungen';
$string['navvisuals'] = 'Darstellung';
$string['nextlevelin'] = 'nächster Level in';
$string['nodescription'] = 'Keine Beschreibung';
$string['noissuesidentified'] = 'Keine Probleme gefunden';
$string['nologsrecordedyet'] = 'Es wurden bisher noch keine Logdaten aufgezeichnet.';
$string['noname'] = 'Kein Name';
$string['notecompatibilityissues'] = 'Bitte beachten Sie die Kompatibilitätsprobleme:';
$string['notesomesettingslocked'] = 'Beachten Sie, dass manche Einstellungen nicht bearbeitet werden können, wenn sie von einem Administrator gesperrt wurden.';
$string['numberoflevels'] = 'Anzahl der Level';
$string['occasionally'] = 'Manchmal';
$string['outofsync'] = 'Versionsunterschiede';
$string['outofsyncexcessive'] = 'Große Versionsunterschiede';
$string['outofsyncexcessiveinfo'] = 'XP+ ist wesentlich älter als XP, was zu unerwarteten Problemen führen kann. Um eine Fehlfunktion zu vermeiden, könnte sich XP+ automatisch deaktivieren.';
$string['outofsyncinfo'] = 'Die XP Plugins haben unterschiedliche Versionen, was zu unerwarteten Problemen führen kann.';
$string['participant'] = 'Teilnehmer/in';
$string['participants'] = 'Teilnehmer/innen';
$string['participatetolevelup'] = 'Beteiligen Sie sich am Kurs, um Erfahrungspunkte zu sammeln und Ihr Level zu verbessern!';
$string['perpagecolon'] = 'Pro Seite:';
$string['pickaconditiontype'] = 'Wählen Sie eine Bedingungsart';
$string['pluginavailabilityxpdesc'] = 'Mit diesem Plugin können Trainer/innen den Zugriff auf Aktivitäten basierend auf dem jeweiligen Level einschränken.';
$string['pluginenrolxpdesc'] = 'Dieses Plugin ermöglicht die automatische Einschreibung in Kurse basierend auf dem erreichen Level in einem anderen Kurs.';
$string['pluginname'] = 'Level Up XP';
$string['pluginshortcodesdesc'] = 'Mit diesem Plugin können Trainer/innen ihr Material anpassen, indem sie XP-bezogene Elemente (Punkte, Level, Bestenliste usw.) in den Kurs aufnehmen und Inhalte basierend auf dem Level verbergen oder anzeigen.';
$string['pluginsoutofsync'] = '__Die Plugins sind nicht synchronisiert__

Das bedeutet, dass Sie _Level Up XP_ upgegradet haben aber nicht _Level Up XP+_. Obwohl wir unser Bestes tun, um Probleme zu vermeiden, könnten einige Funktionen nicht mehr richtig funktionieren, auch in _Level Up XP_ selbst nicht. Wir empfehlen Ihnen, ein Upgrade _Level Up XP+_ auf die neueste Version zu aktualisieren. [Read more]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Diese Version von {$a->name} ({$a->component}) könnte nicht mit Moodle {$a->version} kompatibel sein.';
$string['pointsintimelinker'] = 'pro';
$string['pointsperlevel'] = 'Punkte pro Level';
$string['pointsrequired'] = 'Erforderliche Punkte';
$string['popupnotificationmessage'] = 'PopUp Nachricht';
$string['popupnotificationmessagedesc'] = 'Optionale Nachricht, die im PopUp angezeigt wird und den Teilnehmer/innen zum Erreichen des Levels gratuliert.';
$string['potentialmoodleincompatibility'] = 'Potenzielle Moodle Inkompatibilität';
$string['privacy:metadata:log'] = 'Speichert ein Ereignisprotokoll';
$string['privacy:metadata:log:eventname'] = 'Name des Ereignisses';
$string['privacy:metadata:log:time'] = 'Das Datum, an dem es stattfindet';
$string['privacy:metadata:log:userid'] = 'Person, die die Punkte gewonnen hat';
$string['privacy:metadata:log:xp'] = 'Punkte, die für das Ereignis vergeben wurden';
$string['privacy:metadata:prefintro'] = 'Speichert, ob die Person die Kurzbeschreibung ausgeblendet hat';
$string['privacy:metadata:prefladderpagesize'] = 'Die von der Person bevorzugte Anzeigengröße der Bestenliste';
$string['privacy:metadata:preflevelup'] = 'Speichert, ob die Person die Level Up-Benachrichtigung sehen soll';
$string['privacy:metadata:prefnotices'] = 'Speichert, ob eine Person die Support-Meldung geschlossen hat';
$string['privacy:metadata:prefseenpromo'] = 'Speichert, wann die Person die Promo-Seite angesehen hat';
$string['privacy:metadata:xp'] = 'Speichert Punkte und Level der Nutzer/innen';
$string['privacy:metadata:xp:lvl'] = 'Level der Person';
$string['privacy:metadata:xp:userid'] = 'Person';
$string['privacy:metadata:xp:xp'] = 'Punkte der Person';
$string['privacy:path:addon'] = 'Add-on';
$string['privacy:path:level'] = 'Level';
$string['privacy:path:logs'] = 'Logs';
$string['progress'] = 'Fortschritt';
$string['progressbar'] = 'Fortschrittsbalken';
$string['promocheatguard'] = 'Dieser Schummelwächter (Cheat Guard) ist nicht dafür ausgelegt, lange Zeiträume abzudecken. Erwägen Sie ein Upgrade auf <em>Level Up XP+</em>, um größere Zeiträume und andere Funktionen freizuschalten. <a href="{$a->url}">Erfahren Sie hier mehr</a>.';
$string['promocontactintro'] = 'Kontaktieren Sie uns für weitere Informationen. Wir beißen nicht und wir antworten schnell!';
$string['promocontactus'] = 'In Kontakt kommen';
$string['promoemailusat'] = 'Schreiben Sie uns eine E-Mail an _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = 'Aua! Wir konnten die Nachricht nicht versenden... bitte senden Sie uns eine E-Mail direkt an: {$a}. Danke!';
$string['promogetnow'] = 'Holen Sie sich XP+!';
$string['promoifpreferemailusat'] = 'Psst!, Wenn Sie es vorziehen, können Sie uns direkt eine E-Mail an _{$a}_ senden.';
$string['promointro'] = 'Werden Sie zum Spielleiter und entfesseln Sie das volle Potenzial von Level Up. Schalten Sie zusätzliche Funktionen mit Level Up XP+ frei!';
$string['promointroinstalled'] = 'Das Add-on _Level Up XP+_ ist auf Ihrem System installiert und alle Funktionen sind aktiviert.';
$string['promorulesdidyouknow'] = 'Wussten Sie, dass Teilnehmer/innen mit <em>Level Up XP+</em> Erfahrungspunkte für <em>Kurse abschließen</em> und <em>Aktivitäten abschließen</em> sammeln, oder sogar entsprechend ihrer <em>Bewertung</em> erhalten können? <a href="{$a->url}">Hier erfahren Sie mehr!</a>.';
$string['promoyourmessagewassent'] = 'Danke, Ihre Nachricht wurde versendet. Wir antworten Ihnen in Kürze.';
$string['property:action'] = 'Ereignis-Aktion';
$string['property:component'] = 'Ereignis-Komponente';
$string['property:crud'] = 'CRUD-Eigenschaft';
$string['property:eventname'] = 'Ereignis-Name';
$string['property:target'] = 'Ereignis-Aufgabe';
$string['questreleasenotice'] = '🎉Wir freuen uns, das **neue Gamification-Plugin Level Up Quest** anzukündigen 🥳. Verwandeln Sie Ihren Kurs in **aufregende Abenteuer**, voll mit **Motivationsstrategien** und **Feierlichkeiten** 🤯! Besuchen Sie die [Quest\'s Webseite]({$a->questurl}) und unsere [Infoseite]({$a->questblogurl}) dazu. 👈';
$string['quickeditpoints'] = 'Schnellbearbeitung von Punkten';
$string['rank'] = 'Rang';
$string['ranking'] = 'Einstufung';
$string['ranking_help'] = 'Der Rang ist die absolute Position einer Person in der Bestenliste. Der relative Rang ist der Unterschied in Punkten zwischen der Person und ihren Nachbarn.';
$string['reallydeleteuserstate'] = 'Das Löschen einer Person ist nur hilfreich, um sie aus der Bestenliste zu entfernen. Für alle anderen Gründe sollten Sie stattdessen die Punkte auf 0 zu setzen. Beachten Sie, dass Nutzer/innen unabhängig von der Löschung zukünftig weiter Erfahrungspunkte sammeln können.

Wenn Sie _Level Up XP_ für die gesamte Website verwenden, werden gelöschte Nutzer/innen aus dem Bericht entfernt und Sie können ihnen keine Punkte neu zuweisen. Wenn Sie jedoch _Level Up XP_ pro Kurs verwenden, werden die Teilnehmer/innen möglicherweise weiterhin im Bericht angezeigt, wenn sie für den Kurs eingeschrieben sind.

Möchten Sie die Punkte dieser Person wirklich löschen?';
$string['reallydeleteuserstateandlogs'] = 'Das Löschen einer Person entfernt diese aus der Bestenliste und alle zugehörigen Protokolle.

Durch das Entfernen von Protokollen kann eine Person erneut Punkte für frühere Aktionen sammeln. Wenn Sie nur die Punkte zurücksetzen möchten, sollten Sie stattdessen die Punkte auf 0 zu setzen. Beachten Sie, dass das Löschen einer Person nicht ihre Möglichkeit beeinträchtigt, in Zukunft Punkte zu sammeln.

Wichtig: Wenn Sie _Level Up XP_ für die gesamte Website verwenden, wird eine Person durch das Löschen aus dem Bericht verschwinden und Sie können keine Punkte neu zuweisen. Wenn Sie jedoch _Level Up XP_ pro Kurs verwenden, kann die Person trotzdem im Bericht erscheinen, wenn sie für den Kurs eingeschrieben ist.

Möchten Sie die Punkte und Protokolle dieser Person wirklich löschen?';
$string['reallyresetallcoursestodefaults'] = 'Wirklich alle Kursregeln auf die Standardwerte zurücksetzen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['reallyresetcourselevelstodefaults'] = 'Möchten Sie die Kurslevel wirklich zu den Standardleveln zurücksetzen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['reallyresetcourserulestodefaults'] = 'Die Kursregeln wirklich auf die Standardwerte zurücksetzen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['reallyresetcoursevisualstodefaults'] = 'Möchten Sie die Darstellung der Level wirklich zur Standarddarstellung zurücksetzen? Diese Aktion kann nicht rückängig gemacht werden.';
$string['reallyresetdata'] = 'Möchten Sie wirklich alle Level und die Punkte für alle Personen in diesem Kurs zurücksetzen?';
$string['reallyresetgroupdata'] = 'Möchten Sie wirklich alle Level und die Punkte für alle Personen in dieser Gruppe zurücksetzen?';
$string['reallyreverttopluginsdefaults'] = 'Wollen Sie die Standardregeln wirklich auf die vom Plugin vorgeschlagenen Standards zurücksetzen? Diese Aktion ist nicht umkehrbar.';
$string['recentrewards'] = 'Neue Belohnungen';
$string['recommended'] = 'Empfehlung';
$string['recommendedplugins'] = 'Empfohlene Plugins';
$string['releasenotes'] = 'Release Hinweise';
$string['remaining'] = 'verbleibend';
$string['removefilter'] = 'Filter entfernen';
$string['reportisempty'] = 'Der Bericht enthält keine Daten. Die Teilnehmer/innen müssen erst Erfahrungspunkte sammeln.';
$string['reportisemptyenrolstudents'] = 'Der Bericht enthält keine Daten. Wurden in diesen Kurs bereits Teilnehmer/innen eingeschrieben?';
$string['requires'] = 'Benötigt';
$string['resetallcoursestodefaults'] = 'Alle Kurse auf Standardwerte zurücksetzen';
$string['resetallcoursestodefaultsintro'] = 'Klicken Sie auf die Schaltfläche unten, um alle Kurse auf die Standardwerte zurückzusetzen.';
$string['resetcoursedata'] = 'Kursdaten zurücksetzen';
$string['resetcourserulestodefaults'] = 'Kursregeln auf Standardwerte zurücksetzen';
$string['resetgroupdata'] = 'Gruppendaten zurücksetzen';
$string['resetlevelstodefaults'] = 'Level zu Standardlevel zurücksetzen';
$string['resetvisualstodefaults'] = 'Darstellung zur Standarddarstellung zurücksetzen';
$string['resultsfilteredforn'] = 'Ergebnisse gefiltert nach {$a}.';
$string['reverttopluginsdefaults'] = 'Zurück zu den Standardeinstellungen des Plugins';
$string['reverttopluginsdefaultsintro'] = 'Benutzen Sie die Taste, wenn Sie auf die Standardeinstellungen des Plugins zurücksetzen wollen. Die Regeln in bestehenden Kursen sind davon nicht betroffen.';
$string['reward'] = 'Belohnung';
$string['rule'] = 'Regel';
$string['rule:contains'] = 'enthält';
$string['rule:eq'] = 'ist gleich';
$string['rule:eqs'] = 'ist genau gleich';
$string['rule:gt'] = 'ist größer als';
$string['rule:gte'] = 'ist größer oder gleich';
$string['rule:lt'] = 'ist kleiner als';
$string['rule:lte'] = 'ist kleiner oder gleich';
$string['rule:regex'] = 'entspricht dem Regex';
$string['rulecm'] = 'Aktivität oder Material';
$string['rulecm_help'] = 'Diese Bedingung ist erfüllt, wenn das Ereignis in der angegebenen Akktivität oder im Material auftritt.';
$string['rulecmdesc'] = 'Die Aktivität oder das Material ist \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'Die Aktivität oder das Material ist: \'{$a->contextname}\' in \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Diese Bedingung erfordert, dass die Aktion in einer bestimmten Aktivität oder Ressource stattfindet.';
$string['ruleevent'] = 'Konkretes Ereignis';
$string['ruleeventdesc'] = 'Das Ereignis ist \'{$a->eventname}\'';
$string['ruleeventinfo'] = 'Wählen Sie die Aktion aus, die Nutzer/innen aus einer Liste von Ereignissen ausführen müssen.';
$string['ruleproperty'] = 'Ereignis-Eigenschaft';
$string['rulepropertydesc'] = 'Die Eigenschaft \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Diese Bedingung ist für Power-User mit einem technischen Verständnis der Ereignisse und ihrer Eigenschaften.';
$string['ruleset'] = 'Menge an Bedingungen';
$string['ruleset:all'] = 'ALLE Bedingungen sind erfüllt';
$string['ruleset:any'] = 'Mindestens EINE Bedingung ist erfüllt';
$string['ruleset:none'] = 'KEINE der Bedingungen ist erfüllt';
$string['rulesetinfo'] = 'Kombinieren Sie mehrere Bedingungen zu einer.';
$string['rulesformhelp'] = '<p>Dieses Plugin greift auf Events zurück, um den Teilnehmer/innen aufgrund ihrer Aktivitäten Erfahrungspunkte zuzuweisen. Im untenstehenden Formular sehen Sie voreingestellte Regeln und können eigene Regeln definieren. </p>
<p>Prüfen Sie die Plugin <a href="{$a->log}">Logdaten</a>, um festzustellen welche Events erfasst werden, wenn Aktivitäten für den Kurs festgelegt werden. Lesen Sie mehr über Events: <a href="{$a->list}">Liste aller Events</a>, <a href="{$a->doc}">Entwicklerdokumentation</a>.</p>
<p>Hinweis: Das Plugin ignoriert immer:
<ul>
<li>Aktionen, die Administrator/innen, Gäste oder nicht-eingeloggte Nutzer/innen ausführen.</li>
<li>Aktionen von Nutzer/innen, die nicht über die Berechtigung <em>block/xp:earnxp</em> verfügen.</li>
<li>In kurzen Zeitabständen wiederholte Aktionen, um Manipulationen zu verhindern.</li>
<li>und Events, die nicht mit aktiver Teilnahme in Verbindung stehen (the events of educational level not equal to <em>Participating</em>).</li>
</ul>
</p>';
$string['searchandselectcourse'] = 'Suchen und wählen Sie einen Kurs';
$string['searchandselectmodule'] = 'Suchen und wählen Sie eine Aktivität oder ein Material';
$string['send'] = 'Senden';
$string['setpoints'] = 'Punkte vergeben';
$string['shortcode:xpbadge'] = 'Die Auszeichnung entspricht dem aktuellen Nutzerlevel.';
$string['shortcode:xpiflevel'] = 'Inhalt anzeigen, wenn das Level der aktuellen Person passt.';
$string['shortcode:xpiflevel_help'] = 'Beziehen Sie sich auf die folgenden Beispiele, um den Shortcode zu formatieren. Wenn eine Stufe exakt definiert ist, wird der Inhalt unabhängig von den anderen Regeln angezeigt.
Damit der Inhalt angezeigt wird, müssen die Regeln _greater_ und _less than_ logisch übereinstimmen. Ansonsten kann es dazu kommen, dass der Inhalt nie angezeigt wird!
Beachten Sie, dass Trainer/innen oder andere Personen mit Bearbeitungsfunktionen immer alle Informationen einsehen können.

`` `
[xpiflevel 1 3 5]
  Anzeige, wenn die Stufe der Person genau 1, 3 oder 5 beträgt.
[/ xpiflevel]

[xpiflevel> 3]
    Anzeige, wenn die Stufe der Person größer als 3 ist.
[/ xpiflevel]

[xpiflevel> = 3]
    Anzeige, wenn die Stufe der Person größer oder gleich 3 ist.
[/ xpiflevel]

[xpiflevel> = 10 <20 30]
    Anzeige, wenn die Stufe der Person größer oder gleich 10 ist UND kleiner als 20 ODER ist genau gleich 30 ist.
[/ xpiflevel]

[xpiflevel <= 10> = 20]
    Wird nie angezeigt, da der Level der Person niemals kleiner oder gleich 10 UND mehr oder gleich 20 sein kann.
[/ xpiflevel]
`` `

Beachten Sie, dass die Shortcodes KEINE Verschachtelung erlauben.';
$string['shortcode:xpladder'] = 'Teil der Bestenliste anzeigen';
$string['shortcode:xpladder_help'] = 'Standardmäßig wird ein Teil der Bestenliste rund um die aktuelle Person angezeigt

`` `
[xpladder]
`` `

Um statt der Nachbarn der aktuellen Teilnehmerin / des aktuellen Teilnehmers die besten 10 anzuzeigen, setzen Sie den Parameter „top“. Sie können optional die Anzahl der anzuzeigenden Teilnehmer/innen festlegen, z.B. „top=20“.

`` `
[xpladder top]
[xpladder top = 15]
`` `

Ein Link zur vollständigen Bestenliste wird automatisch unter der Tabelle angezeigt. Wenn Sie einen solchen Link nicht anzeigen möchten, fügen Sie das Argument "hidelink" hinzu.

`` `
[xpladder hidelink]
`` `

Standardmäßig ist der Bereich inaktiv, der den Fortschrittsbalken enthält. Wenn eine solche Spalte als zusätzliche Spalte für die Bestenliste ausgewählt wurde, können Sie den Balken mit dem Argument "withprogress" anzeigen.

`` `
[xpladder withprogress]
`` `

Beachten Sie bei der Verwendung von Gruppen im Kurs, dass die Darstellung, für welche Gruppe die Rangliste angezeigt werden soll, nach dem Prinzip “best guess” erfolgt.';
$string['shortcode:xplevelname'] = 'Levelnamen anzeigen';
$string['shortcode:xplevelname_help'] = 'In der Standardeinstellung zeigt der Tag den Namen der aktuellen Stufe einer Person.
Alternativ können Sie hier das Argument ’level’ verwenden um den Stufennamen anzuzeigen.

```
[xplevelname]
[xplevelname level=5]
```

Wenn das Argument `level` angegeben ist, ohne das die Stufe existiert, wird nichts angezeigt.';
$string['shortcode:xppoints'] = 'Anzahl von Punkten anzeigen, formatiert als Erfahrungspunkte';
$string['shortcode:xppoints_help'] = 'Standardmäßig wird die Anzahl der Punkte der aktuellen Person angezeigt. Sie können einen Wert definieren, der diesen Wert überschreibt.

Die Darstellung der Punkte hängt davon ab, ob ein zufälliger Wert oder die aktuellen Punkte angezeigt werden. Die Option `plain` kann verwendet werden, um zur Standarddarstellung zurückzukehren.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'Der Fortschrittsbalken der Person zeigt auf den nächsten Level.';
$string['somefeaturesrequireotherplugins'] = 'Für einige Funktionen müssen zusätzliche Plugins installiert werden.';
$string['someoneelse'] = 'Jemand anderes';
$string['somethinghappened'] = 'Etwas ist passiert';
$string['taskcollectionloggerpurge'] = 'Sammelprotokolle löschen';
$string['taskusagereport'] = 'Nutzungsbericht';
$string['thankyou'] = 'Vielen Dank!';
$string['timebetweensameactions'] = 'Erforderlicher Zeitabstand zwischen identischen Aktionen';
$string['timebetweensameactions_help'] = 'Die Mindestdauer, die zwischen zwei gleichen Aktionen liegen muss. Eine Aktion gilt als identisch wenn sie im gleichen Objekt und Kontext erfolgt. Beispiel: Das Lesen eines Forenbeitrags ist identisch mit dem wiederholten Lesen des gleichen Forenbeitrags. Wenn dieser Wert leer oder gleich Null ist, gilt er nicht.';
$string['timeformaxactions'] = 'Zeitrahmen für max. Aktionen';
$string['timeformaxactions_help'] = 'Zeitrahmen (in Sekunden) in den ein/e Nutzer/in eine bestimmte Anzahl von Aktionen nicht überschreiten darf';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'now';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}w';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Gesamt';
$string['unknownbadgea'] = 'Unbekannter Badge ({$a})';
$string['unknowneventa'] = 'Unbekanntes Ereignis ({$a})';
$string['unlockfeaturewithxpplus'] = 'Schalten Sie dieses Feature mit XP+ frei. <a href="{$a}">Weitere Informationen</a>';
$string['updateandpreview'] = 'Aktualisieren und Vorschau';
$string['upgradingplugins'] = 'Die Plugins aktualisieren';
$string['urlaccessdeprecated'] = 'Zugriff über diese URL ist abgelaufen, bitte aktualisieren Sie Ihre Links.';
$string['usagereport'] = 'Nutzungsbericht teilen';
$string['usagereport_desc'] = 'Geben Sie regelmäßig anonyme Nutzungsinformationen an die Plugin-Entwickler weiter. Diese Informationen helfen dabei, die Verwendung des Plugins zu verstehen, und beeinflussen seine Entwicklung. Die geteilten Informationen enthalten grundlegende Informationen über die Moodle-Website (URL, Version) und Nutzungsinformationen über das Plugin (Anzahl der Nutzer/innen, die Punkte sammeln, Übersicht der Einstellungen, verwendete Regeln, ...).';
$string['usealgo'] = 'Algorithmus benutzen';
$string['usecustomlevelbadges'] = 'Eigene Levelauszeichnungen benutzen';
$string['usecustomlevelbadges_help'] = 'Wenn \'Ja\' eingstellt wird, muß für jedes Level ein Bild hinterlegt werden.';
$string['usingalgo'] = 'Algorithmus verwenden';
$string['value'] = 'Wert';
$string['valuessaved'] = 'Die Werte wurden erfolgreich gespeichert.';
$string['viewas'] = 'Anzeigen als';
$string['viewlogs'] = 'Protokolle anzeigen';
$string['viewtheladder'] = 'Bestenliste anzeigen';
$string['visualsintro'] = 'Darstellung der Level und Bezeichnung der Punkte anpassen';
$string['wewillreplyat'] = 'Wir wiederholen um: _{$a}_.';
$string['when'] = 'Wann';
$string['wherearexpused'] = 'Wo werden die Punkte benutzt?';
$string['wherearexpused_desc'] = 'Bei Einstellung \'In Kursen\' gelten die gewonnenen Punkte nur für den Kurs, in dem der Block eingefügt wurde. Bei Einstellung \'Für die ganze Website\', steigt eine Person schneller im Rang auf als pro Kurs, da alle Erfahrung innerhalb der gesamten Website verwendet wird.';
$string['whoops'] = 'Hoppla!';
$string['xp'] = 'Erfahrungspunkte';
$string['xp:addinstance'] = 'Neuen Block \'XP\' hinzufügen';
$string['xp:earnxp'] = 'Punkte verdienen';
$string['xp:manage'] = 'Verwalten Sie alle Erfahrungspunkt-Aspekte';
$string['xp:myaddinstance'] = 'Block meinem Dashboard hinzufügen';
$string['xp:view'] = 'Block und seine verwandten Seiten anzeigen';
$string['xp:viewlogs'] = 'Logdaten anzeigen';
$string['xp:viewreport'] = 'Bericht anzeigen';
$string['xpgaindisabled'] = 'Punkte-Zuwachs deaktivieren';
$string['xpplusrequired'] = 'XP+ benötigt';
$string['xprequired'] = 'Punkte notwendig';
$string['xptogo'] = '[[{$a}]] zum nächsten Level';
$string['youleveledupexcl'] = 'Sie sind ein Level aufgestiegen!';
$string['youreachedlevel'] = 'Sie haben folgendes Level erreicht:';
$string['youreachedlevela'] = 'Sie haben Level {$a} erreicht!';
$string['yourmessage'] = 'Ihre Nachricht';
$string['yourownrules'] = 'Ihre eigenen Regeln';
