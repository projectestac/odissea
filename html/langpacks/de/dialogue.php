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
 * Strings for component 'dialogue', language 'de', version '4.1'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['ago'] = 'vorher';
$string['attachment'] = 'Anhang';
$string['attachments'] = 'Anhänge';
$string['bulkopener'] = 'Mehrfacheröffnung';
$string['bulkopenrule'] = 'Regel für Mehrfacheröffnung';
$string['bulkopenrulenotifymessage'] = '<strong>Hinweis:</strong><br/>Wenn eine Regel für Mehrfacheröffnung angewendet wird, werden die neuen Konversationen im Hintergrund bereitgestellt; dies kann bis zu 30 Minuten beanspruchen.';
$string['bulkopenrules'] = 'Regeln für Mehrfacheröffnung';
$string['cachedef_params'] = 'Parameter - Nutzeroberfläche';
$string['cachedef_participants'] = 'IDs der Teilnehmer/innen (Grundinformationen)';
$string['cachedef_unreadcounts'] = 'Anzahl ungelesene Mitteilungen einer Person in Konversationen';
$string['cachedef_userdetails'] = 'Nutzerdetails (Kurs), alle eingeschriebenen Nutzer/innen';
$string['cannotclosedraftconversation'] = 'Eine Konversation, die nicht gestartet wurde, kann nicht abgeschlossen werden!';
$string['cannotdeleteopenconversation'] = 'Eine laufende Konversation kann nicht gelöscht werden.';
$string['closeconversation'] = 'Konversation abschließen';
$string['closed'] = 'Abgeschlossen';
$string['completed'] = 'Fertiggestellt';
$string['configmaxattachments'] = 'Standardmäßige Maximalzahl erlaubter Anhänge';
$string['configmaxbytes'] = 'Standardmäßige Maximalzahl für Anhänge bei Konversationen auf dieser Website (abhängig von Kursbeschränkungen und weiteren lokalen Einstellungen)';
$string['configtrackunread'] = 'Ungelesene Nachrichten auf der Kurshauptseite anzeigen';
$string['configviewconversationsbyrole'] = 'Experimentell: Zeige Konversationen nach ihrer Rolle, sortiere die Liste der Konversationen nach der Rolle des Autors';
$string['configviewstudentconversations'] = 'Experimentell: Teilnehmerliste mit Konversationen, an denen die Personen beteiligt sind';
$string['conversation'] = 'Konversation';
$string['conversationcloseconfirm'] = 'Möchten Sie wirklich die Konversation {$a} abschließen?';
$string['conversationclosed'] = 'Konversation {$a} wurde abgeschlossen';
$string['conversationdeleteconfirm'] = 'Möchten Sie wirklich die Konversation {$a} löschen? Dieser Vorgang kann nicht rückgängig gemacht werden!';
$string['conversationdeleted'] = 'Konversation {$a} wurde gelöscht';
$string['conversationdiscarded'] = 'Konversation wurde verworfen';
$string['conversationlistdisplayheader'] = 'Anzeige {$a->show} {$a->state} Konversationen {$a->groupname}';
$string['conversationopened'] = 'Konversation wurde eröffnet';
$string['conversationopenedcron'] = 'Konversationen werden automatisch eröffnet';
$string['conversationopenedwith'] = '<strong>1</strong> Konversation eröffnet mit:';
$string['conversations'] = 'Konversationen';
$string['conversationsopenedwith'] = '<strong>{$a}</strong> Konversationen eröffnet mit:';
$string['cutoffdate'] = 'Neue Teilnehmer/innen aufnehmen bis';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = 'Tag';
$string['days'] = 'Tage';
$string['deleteallconversations'] = 'Alle Konversationen löschen';
$string['deletealldrafts'] = 'Alle Entwürfe löschen';
$string['deleteallrules'] = 'Alle Regeln für Mehrfacheröffnung löschen';
$string['deleteconversation'] = 'Konversation löschen';
$string['deletereply'] = 'Antwort löschen';
$string['dialogue:addinstance'] = 'Eine Konversation hinzufügen';
$string['dialogue:bulkopenrulecreate'] = 'Eine Regel für Mehrfacheröffnung erstellen';
$string['dialogue:bulkopenruleeditany'] = 'Gestattet die Bearbeitung einer beliebigen Regel, nützlich für Administrator/innen etc.';
$string['dialogue:close'] = 'Eine Konversation schließen';
$string['dialogue:closeany'] = 'Schließe alle';
$string['dialogue:delete'] = 'Lösche eigene';
$string['dialogue:deleteany'] = 'Lösche alle';
$string['dialogue:open'] = 'Öffne eine beliebige Konversation';
$string['dialogue:receive'] = 'Empfangen, wer kann der/die Empfänger/in sein, wenn eine Konversation geöffnet wird.';
$string['dialogue:reply'] = 'Antworten';
$string['dialogue:replyany'] = 'Allen antworten';
$string['dialogue:viewany'] = 'Alle anzeigen';
$string['dialogue:viewbyrole'] = 'Liste der Konversationen nach Rolle anzeigen (experimentell)';
$string['dialoguecron'] = 'Cron für Dialog';
$string['dialogueintro'] = 'Dialog Einleitung';
$string['dialoguename'] = 'Dialog Name';
$string['displaybystudent'] = 'Anzeige nach Teilnehmer/in';
$string['displayconversationsheading'] = 'Anzeige {$a} Konversationen';
$string['displaying'] = 'Anzeige';
$string['draft'] = 'Entwurf';
$string['draftconversation'] = 'Entwurf einer Konversation';
$string['draftconversationtrashed'] = 'Entwurf der Konversation gelöscht';
$string['draftlistdisplayheader'] = 'Anzeige meiner Entwürfe';
$string['draftreply'] = 'Entwurf einer Antwort';
$string['draftreplytrashed'] = 'Entwurf der Antwort gelöscht';
$string['drafts'] = 'Entwürfe';
$string['errorcutoffdateinpast'] = 'Enddatum zur automatischen Aufnahme neuer Teilnehmer/innen darf nicht in der Vergangenheit liegen.';
$string['erroremptymessage'] = 'Nachricht darf nicht leer sein';
$string['erroremptysubject'] = 'Betreff darf nicht leer sein.';
$string['errornoparticipant'] = 'Sie müssen den Dialog mit jemandem eröffnen...';
$string['eventconversationclosed'] = 'Konversation abgeschlossen';
$string['eventconversationcreated'] = 'Konversation erstellt';
$string['eventconversationdeleted'] = 'Konversation gelöscht';
$string['eventconversationviewed'] = 'Konversation angezeigt';
$string['eventreplycreated'] = 'Antwort erstellt';
$string['everybody'] = 'Alle (offen für alle)';
$string['everyone'] = 'Jeder/r';
$string['everyones'] = 'jeder';
$string['firstname'] = 'Vorname';
$string['fullname'] = 'Vollständ. Name';
$string['groupmodenotifymessage'] = 'Diese Aktivität wird im Gruppenmodus ausgeführt. Dies bestimmt, mit wem eine Konversation begonnen werden kann und welche Konversationen angezeigt werden.';
$string['hasnotrun'] = 'Wurde noch nicht ausgeführt';
$string['hour'] = 'Stunde';
$string['hours'] = 'Stunden';
$string['includefuturemembers'] = 'Zukünftige Mitglieder mit einschließen';
$string['ingroup'] = 'in der Gruppe {$a}';
$string['justmy'] = 'nur meine';
$string['lastname'] = 'Nachname';
$string['lastranon'] = 'Zuletzt ausgeführt am';
$string['latest'] = 'Neuste';
$string['listpaginationheader'] = '{$a->start}-{$a->end} von {$a->total}';
$string['matchingpeople'] = 'Zutreffende Personen ({$a})';
$string['maxattachments'] = 'Maximale Anzahl der Anhänge';
$string['maxattachments_help'] = 'Diese Einstellung legt die maximale Anzahl von Dateien fest, die an eine einzelne Nachricht eines Dialogs angehängt werden können.';
$string['maxattachmentsize'] = 'Maximale Größe der Anhänge';
$string['maxattachmentsize_help'] = 'Diese Einstellung legt die maximale Größe einer Datei fest, die an eine einzelne Nachricht eines Dialogs angehängt werden kann.';
$string['message'] = 'Nachricht';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} hat eine neue Nachricht in einer Konversation, an der Sie teilnehmen, geschickt mit dem Betreff: <i>{$a->subject}</i><br/><br/><a href="{$a->url}">In Moodle anzeigen</a></p>';
$string['messageapismallmessage'] = '{$a} hat eine neue Nachricht in einer Konversation geschickt, an der Sie teilnehmen.';
$string['messageprovider:post'] = 'Dialog Benachrichtigungen';
$string['messages'] = 'Meldungen';
$string['mine'] = 'Meine';
$string['minute'] = 'Minute';
$string['minutes'] = 'Minuten';
$string['modulename'] = 'Dialog';
$string['modulename_help'] = 'Ein Dialog ermöglicht Teilnehmer/innen oder Trainer/innen, einen 1:1-Dialog mit einer anderen Person zu beginnen. Diese Aktivität ist z.B. nützlich, wenn ein/e Trainer/in einer/em Teilnehmer/in persönliches Feedback zu einer online-Aktivität geben möchte. Wenn sich beispielsweise ein/e Teilnehmer/in in einem fremdsprachigen Forum beteiligt und einen grammatikalischen Fehler macht, auf den der/die Trainer/in den/die Teilnehmer/in hinweisen möchte, ist ein Dialog die perfekte Weise dazu. Ein Dialog ist auch eine sinnvolle Art für Begleitpersonen, um sich mit Teilnehmer/innen auszutauschen und die Nachrichten an einem Ort aufzuzeichnen. Funktioniert auch ohne E-Mail';
$string['modulenameplural'] = 'Dialoge';
$string['month'] = 'Monat';
$string['months'] = 'Monate';
$string['nobulkrulesfound'] = 'Keine Regeln für Mehrfacheröffnung gefunden!';
$string['noconversationsfound'] = 'Keine Konversationen gefunden!';
$string['nodraftsfound'] = 'Keine Entwürfe gefunden!';
$string['nomatchingpeople'] = 'Keine übereinstimmenden Personen \'{$a}\'';
$string['nopermissiontoclose'] = 'Sie haben keine Berechtigung, diese Konversation abzuschließen!';
$string['nopermissiontodelete'] = 'Sie haben keine Berechtigung zum Löschen!';
$string['nosubject'] = '[kein Betreff]';
$string['numberattachments'] = '{$a} Anhänge';
$string['numberunread'] = '{$a} ungelesen';
$string['oldest'] = 'Älteste';
$string['onlydraftscanbetrashed'] = 'Nur Entwürfe können in den Papierkorb gelegt werden';
$string['open'] = 'Offen';
$string['openedbyfullyear'] = '<small>Eröffnet von</small> <strong>{$a->fullname}</strong> <small>am</small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Eröffnet von</small> <strong>{$a->fullname}</strong> <small>am</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Eröffnet von</small> <strong>{$a->fullname}</strong> <small>um</small> {$a->time} <small>(vor {$a->timepast})</small>';
$string['openwith'] = 'Eröffnen mit';
$string['participants'] = 'Teilnehmer/innen';
$string['people'] = 'Personen';
$string['pluginadministration'] = 'Dialog-Administration';
$string['pluginname'] = 'Dialog';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>antwortete</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>antwortete am</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>antwortete am</small> {$a->dateshort} um <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>antwortete um</small> {$a->time} <small>(vor {$a->timepast})</small>';
$string['reply'] = 'Antwort';
$string['replydeleteconfirm'] = 'Wollen Sie diese Antwort wirklich löschen?';
$string['replydeleted'] = 'Antwort wurde gelöscht';
$string['replysent'] = 'Ihre Antwort wurde abgeschickt';
$string['runsuntil'] = 'Wird ausgeführt bis';
$string['savedraft'] = 'Entwurf speichern';
$string['searchpotentials'] = 'Suche mögliche Konversationspartner...';
$string['second'] = 'Sekunde';
$string['seconds'] = 'Sekunden';
$string['send'] = 'Abschicken';
$string['senton'] = '<small><strong>Abgeschickt am: </strong></small>';
$string['sortedby'] = 'Sortiert nach: {$a}';
$string['studenttostudent'] = 'Teilnehmer/in zu Teilnehmer/in';
$string['subject'] = 'Betreff';
$string['teachertostudent'] = 'Trainer/in zu Teilnehmer/in';
$string['trashdraft'] = 'Entwurf in Papierkorb legen';
$string['unread'] = 'Ungelesen';
$string['unreadmessages'] = 'Ungelesene Nachrichten';
$string['unreadmessagesnumber'] = '{$a} ungelesene Nachrichten';
$string['unreadmessagesone'] = '1 ungelesene Nachricht';
$string['usecoursegroups'] = 'Gruppenmodus aktivieren';
$string['usecoursegroups_help'] = 'Sind im Kurs Gruppen definiert, wird die Auswahl von Dialogpartner/innen weiter eingeschränkt. Dialoge können nur zwischen Mitgliedern derselben Gruppe eröffnet werden. Ausnahme: Die Teilnehmer/in bzw. Trainer/in, welche den Dialog eröffnet, besitzt das Recht "Auf alle Gruppen zugreifen". (Access all groups).';
$string['usesearch'] = 'Verwende die Suche, um Personen für einen Dialog zu finden';
$string['viewconversations'] = 'Konversationen anzeigen';
$string['viewconversationsbyrole'] = 'Konversationen nach Rolle anzeigen';
$string['week'] = 'Woche';
$string['weeks'] = 'Wochen';
$string['year'] = 'Jahr';
$string['years'] = 'Jahre';
