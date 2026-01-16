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
 * Strings for component 'journal', language 'de', version '4.5'.
 *
 * @package     journal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Kein Zugriff';
$string['alwaysopen'] = 'Immer verfügbar';
$string['blankentry'] = 'Leerer Eintrag';
$string['completiondetail:completion_create_entry'] = 'Einen Eintrag im Journal erstellen';
$string['couldnotupdatejournal'] = 'Das Journal konnte nicht aktualisiert werden.';
$string['countnotinsertjournalentry'] = 'Der neue Journaleintrag konnte nicht eingefügt werden.';
$string['crontask'] = 'Hintergrundverarbeitung für Journal';
$string['dateasc'] = 'Datum aufsteigend';
$string['datedesc'] = 'Datum absteigend';
$string['daysavailable'] = 'Tage verfügbar';
$string['deadline'] = 'Tage offen';
$string['defaultgrade'] = 'Standard für die maximale Bewertung';
$string['defaultgrade_help'] = 'Die standardmäßige maximale Bewertung für neue Journaleinträge
* Geben Sie **100** (oder eine beliebige andere positive Zahl) ein, um standardmäßig die Punktebewertung zu aktivieren
* Geben Sie **0** ein, um die Bewertung standardmäßig zu deaktivieren';
$string['editingended'] = 'Bearbeitungszeitraum ist abgelaufen';
$string['editingends'] = 'Bearbeitungszeitraum läuft ab';
$string['entries'] = 'Einträge';
$string['entry'] = 'Eintrag';
$string['evententriesviewed'] = 'Journaleinträge angezeigt';
$string['evententrycreated'] = 'Journaleintrag erstellt';
$string['evententryupdated'] = 'Journaleintrag aktualisiert';
$string['eventfeedbackupdated'] = 'Feedback für Journal aktualisiert';
$string['eventjournalcreated'] = 'Journal erstellt';
$string['eventjournaldeleted'] = 'Journal gelöscht';
$string['eventjournalviewed'] = 'Journal angezeigt';
$string['failedupdate'] = 'Fehler beim Aktualisieren des Journalfeedbacks für {$a}';
$string['feedbackupdated'] = 'Feedback für {$a} Einträge aktualisiert';
$string['feedbackupdatedforuser'] = 'Feedback für {$a} aktualisiert';
$string['firstnameasc'] = 'Vorname aufsteigend';
$string['firstnamedesc'] = 'Vorname absteigend';
$string['gradeingradebook'] = 'Aktuelle Bewertung in der Bewertungsübersicht';
$string['incorrectcmid'] = 'Die Modul-ID ist ungültig.';
$string['incorrectcourseid'] = 'Die Kurs-ID ist ungültig.';
$string['incorrectcoursesectionid'] = 'Der ausgewählte Kursabschnitt ist ungültig.';
$string['incorrectjournalentry'] = 'Der ausgewählte Journaleintrag ist ungültig.';
$string['incorrectjournalid'] = 'Die ausgewählte Journal-ID ist ungültig.';
$string['incorrectuserid'] = 'Die ausgewählte Nutzer-ID ist ungültig.';
$string['journal:addentries'] = 'Journaleinträge hinzufügen';
$string['journal:addinstance'] = 'Journal hinzufügen';
$string['journal:manageentries'] = 'Journaleinträge verwalten';
$string['journalmail'] = 'Hallo {$a->student},

{$a->teacher} hat ein Feedback zu Ihrem Eintrag im Journal \'{$a->journal}\' abgegeben.

Kurs: {$a->course_name}
Journal: {$a->journal}
Datum: {$a->date}

Sie können das Feedback als Anhang zu Ihrem Journaleintrag anzeigen:
    {$a->url}';
$string['journalmailhtml'] = '<p>Hallo {$a->student},</p>
<p>{$a->teacher} hat ein Feedback zu Ihrem Eintrag im Journal  \'<strong>{$a->journal}</strong>\' abgegeben.</p>
<p>
    <strong>Kurs:</strong> {$a->course_name}<br />
    <strong>Journal:</strong> {$a->journal}<br />
    <strong>Datum:</strong> {$a->date}
</p>
<p>Sie können das Feedback <a href="{$a->url}">als Anhang zu Ihrem Journaleintrag</a> anzeigen.</p>';
$string['journalname'] = 'Name des Journals';
$string['journalquestion'] = 'Beschreibung';
$string['lastnameasc'] = 'Nachname aufsteigend';
$string['lastnamedesc'] = 'Nachname absteigend';
$string['mailbody'] = '{$a->username} hat den Journaleintrag für \'{$a->journalname}\' aktualisiert

Sie können den Eintrag hier anzeigen:
    {$a->url}';
$string['mailbodyhtml'] = '{$a->username} hat den Journaleintrag für \'<i>{$a->journalname}</i>\' aktualisiert. <br><br>
Sie können den <a href="{$a->url}">Eintrag hier anzeigen</a>.';
$string['mailsubject'] = 'Feedback zum Journal';
$string['messageprovider:journal_feedback'] = 'Feedback zum Journal vom Trainer/von der Trainerin';
$string['messageprovider:submission'] = 'Journaleintrag erstellt oder verändert';
$string['modulename'] = 'Journal';
$string['modulename_help'] = '<p>Die Aktivität Journal ermöglicht es, von Teilnehmer/innen eine Rückmeldung zu einem bestimmten Thema zu erhalten, die ausschließlich die schreibende Person selbst und die Trainer/innen lesen können.</p><p>Anwendungsbeispiele sind u.a.<ul><li>Tagebücher zum Projektverlauf</li><li>Rechenschaftsberichte</li></ul></p>';
$string['modulename_link'] = 'mod/journal/view';
$string['modulenameplural'] = 'Journale';
$string['needsregrade'] = 'Eintrag wurde verändert, seit dem das letzte Feedback gespeichert wurde.';
$string['newjournalentries'] = 'Neue Journaleinträge';
$string['nodatachanged'] = 'Keine Daten geändert';
$string['nodeadline'] = 'Immer offen';
$string['noentriesmanagers'] = 'Keine Trainer/in eingeschrieben';
$string['noentry'] = 'Kein Eintrag';
$string['noratinggiven'] = 'Keine Bewertung abgegeben';
$string['notifystudents'] = 'Teilnehmer/innen benachrichtigen';
$string['notifystudents_default'] = 'Teilnehmer/innen standardmäßig benachrichtigen';
$string['notifystudents_default_help'] = 'Standard-Einstellung für neue Journal-Aktivitäten';
$string['notifystudents_help'] = 'Falls aktiviert, erhalten die Teilnehmer/innen eine Benachrichtigung über die Moodle-Nachrichtenfunktion wenn ein/e Trainer/in ein Feedback zu einem Journaleintrag abgibt.';
$string['notifyteachers'] = 'Trainer/innen benachrichtigen';
$string['notifyteachers_default'] = 'Trainer/innen standardmäßig benachrichtigen';
$string['notifyteachers_default_help'] = 'Standard-Einstellung für neue Journal-Aktivitäten';
$string['notifyteachers_help'] = 'Falls aktiviert, erhalten die Trainer/innen eine Benachrichtigung über die Moodle-Nachrichtenfunktion wenn ein/e Teilnehmer/in einen Journaleintrag anlegt oder aktualisiert.';
$string['notopenuntil'] = 'Das Journal ist verfügbar ab';
$string['notstarted'] = 'Sie haben mit dem Journal noch nicht begonnen';
$string['numchars'] = '{$a} Zeichen';
$string['overallrating'] = 'Gesamtbewertung';
$string['pluginadministration'] = 'Journal-Administration';
$string['pluginname'] = 'Journal';
$string['privacy:metadata:journal_entries'] = 'Datensatz zum Journaleintrag';
$string['privacy:metadata:journal_entries:entrycomment'] = 'Empfangener Kommentar von Nutzer/in zum Journal';
$string['privacy:metadata:journal_entries:modified'] = 'Startzeit der Journaleinträge';
$string['privacy:metadata:journal_entries:rating'] = 'Empfangene Wertung von Nutzer/in zum Journal';
$string['privacy:metadata:journal_entries:teacher'] = 'Trainer/in hat ein Feedback für Nutzer/in zum Journal gegeben';
$string['privacy:metadata:journal_entries:text'] = 'Text von Nutzer/in geschrieben';
$string['privacy:metadata:journal_entries:userid'] = 'Nutzer-ID';
$string['rate'] = 'Bewertung';
$string['removeentries'] = 'Alle Einträge löschen';
$string['removemessages'] = 'Alle Journaleinträge löschen';
$string['saveallfeedback'] = 'Mein Feedback speichern';
$string['savefeedback'] = 'Feedback speichern';
$string['search:activity'] = 'Journal - Aktivitätsinfo';
$string['search:entry'] = 'Journal - Einträge';
$string['showoverview'] = 'Journalübersicht im \'Dashboard\' anzeigen';
$string['showrecentactivity'] = 'Aktuelle Aktivitäten anzeigen';
$string['startoredit'] = 'Journaleintrag bearbeiten';
$string['userswhocompletedthejournal'] = 'Nutzer/innen, die das Journal abgeschlossen haben';
$string['userswhodidnotcompletedthejournal'] = 'Nutzer/innen, die das Journal nicht abgeschlossen haben';
$string['viewallentries'] = '{$a} Journaleinträge anzeigen';
$string['viewentries'] = 'Journaleinträge anzeigen';
