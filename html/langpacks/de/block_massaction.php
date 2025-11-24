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
 * Strings for component 'block_massaction', language 'de', version '4.5'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'Änderungsbenachrichtigung senden';
$string['action_delete'] = 'Löschen';
$string['action_duplicate'] = 'Duplizieren';
$string['action_duplicatetocourse'] = 'Duplizieren in anderen Kurs';
$string['action_duplicatetosection'] = 'Nach Abschnitt duplizieren';
$string['action_hide'] = 'Verbergen';
$string['action_hidedescription'] = 'Beschreibung im Kurs verbergen';
$string['action_makeavailable'] = 'Verfügbar machen';
$string['action_moveleft'] = 'Nach links verschieben';
$string['action_moveright'] = 'Nach rechts verschieben';
$string['action_movetosection'] = 'In Abschnitt verschieben';
$string['action_show'] = 'Anzeigen';
$string['action_showdescription'] = 'Beschreibung im Kurs anzeigen';
$string['actionexecuted'] = 'Die angeforderte Stapeloperation wurde ausgeführt.';
$string['applicablecourseformats'] = 'Verwendbare Kursformate';
$string['applicablecourseformats_description'] = 'Der Block Stapeloperationen steht nur für die ausgewählten Kursformate zur Verfügung.<br />Die vorausgewählten Kursformate sind diejenigen, die offiziell vom Plugin-Maintainer unterstützt werden. Aktivieren des Blocks Stapeloperationen für weitere Kursformate geschieht auf eigene Gefahr.';
$string['backgroundtaskinformation'] = 'Die von Ihnen gewünschte Aktion wird aus Performancegründen im Hintergrund ausgeführt. Sie können in der Zwischenzeit weiterarbeiten.';
$string['blockname'] = 'Stapeloperationen';
$string['blocktitle'] = 'Stapeloperationen';
$string['bulkeditingdisabled'] = 'Um diesen Block zu verwenden, müssen Sie den Massenbearbeitungsmodus aktivieren.';
$string['choosecoursetoduplicateto'] = 'Wählen Sie den Kurs, in den die ausgewählten Aktivitäten dupliziert werden sollen.';
$string['choosesectiontoduplicateto'] = 'Wählen Sie den Abschnitt, in den die ausgewählten Aktivitäten dupliziert werden sollen.';
$string['choosetargetcourse'] = 'Wählen Sie den Zielkurs';
$string['choosetargetsection'] = 'Wählen Sie den Zielabschnitt';
$string['confirmcourseselect'] = 'Kurs wählen';
$string['confirmsectionselect'] = 'Abschnitt wählen';
$string['deletecheck'] = 'Löschen mehrerer Aktivitäten bestätigen';
$string['deletecheckconfirm'] = 'Möchten Sie die folgenden Aktivitäten wirklich löschen?';
$string['deselectall'] = 'Alles abwählen';
$string['duplicatefailed'] = 'Konnte Aktivität id {$a} nicht duplizieren';
$string['duplicatemaxactivities'] = 'Maximale Anzahl von Aktivitäten zum Duplizieren';
$string['duplicatemaxactivities_description'] = 'Die maximale Anzahl an Aktivitäten, die im Stapeloperationen-Block direkt ohne Hintergrund-Task dupliziert werden. Wenn auf "0" gesetzt, wird der Duplizierungsvorgang immer als Hintergrund-Task ausgeführt.';
$string['enablebulkediting'] = 'Massenbearbeitungsmodus aktivieren';
$string['event:course_modules_duplicated'] = 'Aktivität wurden dupliziert';
$string['event:course_modules_duplicated_failed'] = 'Aktivität konnten nicht dupliziert werden';
$string['event:duplicated_completed_list'] = 'Abgeschlossen {$a->list}.';
$string['event:duplicated_description'] = 'cmid von \'{$a->src}\' zu \'{$a->dst}\'';
$string['event:duplicated_failed_description'] = 'Duplizieren der Aktivität fehlgeschlagen: {$a->cmid} error: {$a->error}';
$string['event:duplicated_failed_list'] = 'Fehlgeschlagen {$a->list}.';
$string['event:duplicated_summary'] = 'Die Duplizierung der Aktivität ist abgeschlossen. Zusammenfassung: {$a->countcomplete} Abgeschlossen, {$a->countfailed} Gescheitert.';
$string['invalidaction'] = 'Unbekannte Aktion: {$a}';
$string['invalidcourseid'] = 'Ungültige Kurs-ID';
$string['invalidcoursemodule'] = 'Ungültiges Kursmodul';
$string['invalidmoduleid'] = 'Ungültige Modul-ID: {$a}';
$string['jsonerror'] = 'Programmierfehler: Ungültiges JSON-format.';
$string['keepsectionnum'] = 'Ursprünglichen Abschnitt beibehalten';
$string['limittoenrolled'] = 'Liste der Zielkurse auf Kurse beschränken, in denen eine Person eingeschrieben ist';
$string['limittoenrolled_description'] = 'Wenn diese Option aktiviert ist, wird das Kursauswahlelement des Features "In anderen Kurs duplizieren" auf Kurse beschränkt, in denen die jeweilige Person eingeschrieben ist. Es wird empfohlen, diese Option vor allem für große Instanzen mit vielen Kursen zu aktivieren, um Performance-Probleme und Timeouts zu vermeiden. Das Deaktivieren geschieht auf eigene Gefahr.';
$string['massaction:activityshowhide'] = 'Alle Aktivitäten ein-/ausblenden';
$string['massaction:addinstance'] = 'Stapeloperationen-Block hinzufügen';
$string['massaction:delete'] = 'Alle Aktivitäten löschen';
$string['massaction:descriptionshowhide'] = 'Alle Beschreibungen ein-/ausblenden';
$string['massaction:duplicate'] = 'Alle Aktivitäten duplizieren';
$string['massaction:duplicatetocourse'] = 'Alle Aktivitäten in einen anderen Kurs kopieren';
$string['massaction:indent'] = 'Alle Aktivitäten einrücken';
$string['massaction:movetosection'] = 'Alle Aktivitäten in einen anderen Abschnitt verschieben';
$string['massaction:sendcontentchangednotifications'] = 'Änderungsbenachrichtigungen senden';
$string['massaction:use'] = 'Benutzung des Stapeloperationen-Blocks';
$string['modulename'] = 'Aktivitätsname';
$string['moduletype'] = 'Aktivitätstyp';
$string['multipleinstances'] = 'Von diesem Block dürfen nicht mehrere Instanzen auf derselben Seite aktiv sein. Entfernen Sie bitte alle zusätzlichen Instanzen.';
$string['newsection'] = 'Neuer Abschnitt';
$string['noaction'] = 'Keine Aktion ausgewählt';
$string['noactionsavailable'] = 'Sie haben kein Recht, Aktivitäten durchzuführen, die von diesem Block bereitgestellt werden.';
$string['nocaptobackup'] = 'Sie haben keine ausreichenden Rechte, um in diesem Kurs eine Sicherung durchzuführen.';
$string['nocaptorestore'] = 'Sie haben keine ausreichenden Rechte, um in diesem Kurs eine Wiederherstellung durchzuführen.';
$string['noitemselected'] = 'Bitte wählen Sie mindestens eine Aktivität aus, auf die die gewählte Aktion angewendet werden soll';
$string['nomovingtargetselected'] = 'Bitte wählen Sie einen Zielabschnitt';
$string['notargetcourseidspecified'] = 'Es wurde keine Kurs-ID angegeben.';
$string['pluginname'] = 'Stapeloperationen';
$string['privacy:metadata'] = 'Dieser Block ermöglicht es lediglich, Standardaktionen für mehrere Aktivitäten gleichzeitig durchzuführen. Von diesem Block werden keinerlei Daten gespeichert.';
$string['sectionnotexist'] = 'Zielabschnitt existiert nicht';
$string['sectionrestricted'] = 'Quellenbereich ist eingeschränkt';
$string['sectionselect'] = 'Abschnittsauswahl';
$string['sectionselect_help'] = 'Sie können nur Abschnitte auswählen, die Aktivitäten enthalten.
Im Kachel- und Ein-Themen-Format können Sie außerdem nur die Abschnitte auswählen, die aktuell zu sehen sind.';
$string['selectall'] = 'Alles auswählen';
$string['selectallinsection'] = 'Alles in Abschnitt auswählen';
$string['sourcecourseidlost'] = 'Die Kurs-ID des Quellkurses konnte nicht gefunden werden.';
$string['unusable'] = 'Stapeloperationen stehen in diesem Kursformat oder diesem Design nicht zur Verfügung';
$string['usage'] = 'Nutzung des Stapeloperationen-Blocks';
$string['usage_help'] = '<p>Dieser Block ermöglicht es Trainer/innen, Aktionen für mehrere Aktivitäten im Bearbeitungsmodus durchzuführen statt sie einzeln auf jede Aktivität anzuwenden.</p>
<p>Um diesen Block zu verwenden, muss im Browser Javascript aktiviert sein und sich der Kurs im Bearbeitungsmodus befinden. Aktuell unterstützte Kursformate sind Wochenformat, Themenformat, Einklappbare Abschnitte, Ein-Themen-Format und Kachelformat.</p>
<p>Unterstützte Aktionen sind Löschen, Einrücken (Verschieben nach links/rechts), Verbergen/Anzeigen und Verschieben in andere Abschnitte.
Um Aktivitäten auszuwählen, setzen Sie einfach den Haken in der Checkbox links neben der jeweiligen Aktivität. Alternativ können Sie alle Aktivitäten im Kurs oder eines Abschnitts über die Links im Stapeloperationen-Block aus- bzw. abwählen.</p>
<p>Um dann eine Aktion darauf anzuwenden, klicken Sie einfach auf die jeweilige Aktion im Stapeloperationen-Block.</p>';
$string['withselected'] = 'Mit ausgewählten Aktivitäten';
