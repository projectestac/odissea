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
 * Strings for component 'forumng', language 'de', version '4.1'.
 *
 * @package     forumng
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Neue Diskussion starten';
$string['advancedsearch'] = 'Erweiterte Suche';
$string['afterenddate'] = 'Sie können alle Beiträge in diesem Forum lesen, aber Sie können keine Beiträge erstellen. Dieses Forum wurde geschlossen am {$a}.';
$string['afterenddatecapable'] = 'Teilnehmer/innen können Beiträge in diesem Forum lesen, aber selber keine eigene Beiträge erstellen ab {$a}. Sie dürfen aber trotzdem weitere Beiträge erstellen.';
$string['alert_condition1'] = 'Der Beitrag ist beleidigend.';
$string['alert_condition2'] = 'Der Beitrag ist belästigend.';
$string['alert_condition3'] = 'Der Beitrag enthält obszöne Inhalte wie etwa Pornografie.';
$string['alert_condition4'] = 'Der Beitrag ist beleidigend oder diffamierend.';
$string['alert_condition5'] = 'Der Beitrag verstößt gegen Urheberrecht';
$string['alert_condition6'] = 'Der Beitrag verstößt gegen Regeln.';
$string['alert_conditionmore'] = 'Weitere Informationen (optional)';
$string['alert_emailappendix'] = 'Sie erhalten diese E-Mail, weil Ihre E-Mail-Adresse in ForumNG für die Berichterstattung inakzeptabeler E-Mails angemeldet ist.';
$string['alert_emailpreface'] = 'Ein Forumsbeitrag wurde gemeldet von {$a->fullname} ({$a->username}, {$a->email}): {$a->url}';
$string['alert_emailsubject'] = 'Benachrichtigung F{$a->postid}: {$a->coursename} {$a->forumname}';
$string['alert_feedback'] = 'Ihr Bericht wurde erfolgreich gesendet. Ein Support-Mitarbeiter wird
dieses Problem untersuchen.';
$string['alert_info'] = 'Das \'Berichten\'-Feature sendet den Beitrag zur Untersuchung, an einen Support-Mitarbeiter. <strong>Bitte benutzen Sie dieses Feature nur wenn der Beitrag regelwidrig ist</strong>.';
$string['alert_intro'] = 'Sie können den Link zur Benachrichtigung verwenden, um Moderator/innen dieses Forums auf einen Beitrag aufmerksam zu machen.';
$string['alert_link'] = 'Benachrichtigung';
$string['alert_linktitle'] = 'Beitrag als inakzeptabel melden';
$string['alert_notcurrentpost'] = 'Dieser Beitrag wurde bereits gelöscht.';
$string['alert_note'] = 'Bitte beachten Sie: Diese E-Mail wurde auch an {$a} gesendet.';
$string['alert_pagename'] = 'Einen Beitrag als nicht akzeptabel melden';
$string['alert_reasons'] = 'Gründe für den Bericht';
$string['alert_reporterdetail'] = '{$a->fullname} ({$a->username}, {$a->email}, {$a->ip})';
$string['alert_reporterinfo'] = '<strong>Details</strong>:';
$string['alert_submit'] = 'Bericht senden';
$string['alert_turnedoff'] = 'Die Mitteilungsfunktion ist nicht verfügbar.';
$string['allowsubscribe'] = 'Abonnieren erlauben';
$string['allsubscribe'] = 'Alle Foren abonnieren';
$string['allunsubscribe'] = 'Alle Foren abbestellen';
$string['alt_discussion_deleted'] = 'Gelöschte Diskussion';
$string['alt_discussion_locked'] = 'Die Diskussion ist nur zum Lesen.';
$string['alt_discussion_moderator'] = 'Die Diskussion wird moderiert.';
$string['alt_discussion_sticky'] = 'Diese Diskussion wird immer am Anfang der Liste angezeigt';
$string['alt_discussion_timeout'] = 'Nicht für Benutzer/innen sichtbar (Zeitlimit)';
$string['anonymousmoderator'] = 'Anonymer Moderator';
$string['archive_errorgrouping'] = 'Das Forum, das alte Diskussionen enthält, hat eine andere Gruppeneinstellungen. Aktualisieren Sie das Forum und ändern Sie die Optionen <strong>Alte Diskussionen entfernen</strong>.';
$string['archive_errortargetforum'] = 'Das Forum, das für alte Diskussionen benutzt wurde, existiert nicht mehr. Aktualisieren Sie das Forum und ändern Sie die Optionen <strong>Alte Diskussionen entfernen</strong>.';
$string['asmoderator'] = 'Schreiben als?';
$string['asmoderator_anon'] = 'Selbstidentifizierung als Moderator (Name ist für Teilnehmer/innen nicht sichtbar)';
$string['asmoderator_help'] = 'Diese Option erlaubt es ausgesuchten Nutzer/innen, sich als Moderator auszuweisen oder als Moderator mit einem für Teilnehmer/innen unsichtbaren Profil zu schreiben.';
$string['asmoderator_post'] = 'Standardbeitrag';
$string['asmoderator_self'] = 'Selbstidentifizierung als Moderator';
$string['atom'] = 'Atom';
$string['attachment'] = 'Anhang';
$string['attachmentmaxbytes'] = 'Maximale Größe von Anhängen';
$string['attachmentmaxbytes_help'] = 'Dies ist die maximale <i>gesamte</i> Größe für alle Anlagen in einem Beitrag.';
$string['attachmentnum'] = 'Anhang {$a}';
$string['attachments'] = 'Anhänge';
$string['author'] = 'Autor/in: &lsquo;{$a}&rsquo;';
$string['authorname'] = 'Autor/in';
$string['authorname_help'] = 'Sie können einen Namen (Jane), einen Nachnamen (Brown), den vollständigen Namen (jane brown) oder auch den ersten Teil von jedem dieser Namen (Ja, bro, Jane B) eintippen. Suchbegriffe sind unabhängig von der Groß-/Kleinschreibung.

Sie können auch einen Benutzernamen eingeben (jb001).

Wenn Sie dieses Feld leer lassen, werden Beiträge von allen Autor/innen einbezogen.';
$string['autolockedmessage'] = 'Die Diskussion wurde automatisch geschlossen, da das maximale Zeitlimit überschritten wurde.';
$string['automaticallylock'] = 'Automatisch sperren';
$string['averagerating'] = 'durchschnittliche Bewertung: {$a->avg} (from {$a->num})';
$string['badbrowser'] = '<h3>Reduzierte Forumsfunktionen</h3> <p>Sie verwenden {$a}. Wenn Sie eine bessere Ansicht dieser Foren wünschen,
installieren Sie eine neuere Version von <a href=\'http://www.microsoft.com/windows/internet-explorer/\'>Internet Explorer</a>
oder <a href=\'http://www.mozilla.com/firefox/\'>Firefox</a>.</p>';
$string['beforeenddate'] = 'Dieses Forum wird geschlossen am {$a}.';
$string['beforeenddatecapable'] = 'Dieses Forum wird für neue Teilnehmerbeiträge geschlossen am {$a}.';
$string['beforestartdate'] = 'Sie können Beiträge in diesem Forum lesen, aber Sie dürfen keine Beiträge erstellen. Dieses Forum wird geöffnet am {$a}.';
$string['beforestartdatecapable'] = 'Teilnehmer/innen können Beiträge in diesem Forum lesen, aber selber keine eigenen Beiträge erstellen bis {$a}. Sie dürfen aber trotzdem auch vorher weitere Beiträge erstellen.';
$string['canpostanon'] = 'Anonyme Moderatorbeiträge erlauben';
$string['canpostanon_help'] = 'Erlaubt Nutzern das anonyme Erstellen von Beiträgen, durch Ausblenden ihres Namens.';
$string['choosefile'] = '1. Datei auswählen';
$string['clearflag'] = 'Fahne entfernen';
$string['clicktoadd'] = '2. Eintragen';
$string['collapseall'] = 'Alle Beiträge einklappen';
$string['completiondiscussions'] = 'Nutzer/in muss eine Diskussion erstellen:';
$string['completiondiscussionsgroup'] = 'Diskussionen erforderlich';
$string['completiondiscussionsgroup_help'] = 'Diese Option legt fest, dass das Forum für Teilnehmer/innen als abgeschlossen markiert wird, sobald diese die notwendige Anzahl neuer Diskussionen erstellt haben (und eventuell weitere Bedingungen erfüllt sind).';
$string['completionposts'] = 'Nutzer/in muss Diskussionen oder Antworten verfassen:';
$string['completionpostsgroup'] = 'Beiträge erforderlich';
$string['completionpostsgroup_help'] = 'Diese Option legt fest, dass das Forum für Teilnehmer/innen als abgeschlossen markiert wird, sobald diese die notwendige Anzahl neuer Diskussionen bzw. Antworten erstellt haben (und eventuell weitere Bedingungen erfüllt sind).';
$string['completionreplies'] = 'Nutzer/in muss Antworten verfassen:';
$string['completionrepliesgroup'] = 'Antworten erforderlich';
$string['completionrepliesgroup_help'] = 'Diese Option legt fest, dass das Forum für Teilnehmer/innen als abgeschlossen markiert wird, sobald diese die notwendige Anzahl von Antworten zu bestehenden Diskussionen erstellt haben (und eventuell weitere Bedingungen erfüllt sind).';
$string['configattachmentmaxbytes'] = 'Maximale Standardgröße für alle Forenanhänge auf der Website (abhängig von Grenzen und anderen lokalen Einstellungen)';
$string['configdiscussionsperpage'] = 'Maximale Anzahl von Diskussionen in einem Forum pro Seite';
$string['configdonotmailafter'] = 'Um zu verhindern, dass es zu einer E-Mail-Flut kommt, wenn der Cron-Job des Servers für eine Zeit nicht läuft, versendet das Forum keine E-Mails, die älter sind als die angegebenen Stunden.';
$string['configemailafter'] = 'E-Mail-Nachricht an abonnierte Nutzer/innen mit einer Verzögerung nach der Erstellung des Beitrags.';
$string['configenableadvanced'] = 'Diese Option aktiviert erweiterte Funktionen (Forum freigeben, Forum teilen oder gemeinsames Forum), die eventuell für viele Installationen nicht nötig sind.';
$string['configenablerssfeeds'] = 'Diese Option legt fest, ob RSS-Feeds für alle
Foren aktiviert sind. Sie müssen noch, um Feeds zu aktivieren, diese manuell in den Einstellungen für jedes Forum aktivieren (oder unten).';
$string['configfeeditems'] = 'Anzahl der letzten Nachrichten, die in einem Feed enthalten sind.';
$string['configfeedtype'] = 'Wählen Sie die Information, die in allen Foren-RSS-Feeds enthalten sein muss.';
$string['confighousekeepingstarthour'] = 'Archivierungsaufgaben, wie z.B. das Löschen von alten Diskussionen wird ab dieser Zeit jeden Tag beginnen.';
$string['confighousekeepingstophour'] = 'Archivierungsaufgaben werden in dieser Stunde angehalten.';
$string['configpermanentdeletion'] = 'nach diesem Zeitraum, werden gelöschte Beiträge und alte Versionen der
bearbeiteten Beiträge aus der Datenbank gelöscht.';
$string['configreadafterdays'] = 'Nach dieser Anzahl von Tagen wird davon ausgegangen haben alle Benutzern die Beiträge gelesen.';
$string['configreplytouser'] = 'Wenn ein Forumbeitrag verschickt wird, sollte dieser die E-MAil-Adresse des Benutzers enthalten, so dass der Empfänger persönlich antworten kann, anstatt über das Forum zu antworten. Auch wenn \'ja\' gesetzt ist, können benutzer/innen in ihrem Profil wählen, ob ihre E-Mail Adresse geheim bleiben soll.';
$string['configreportunacceptable'] = 'Diese E-Mail-Adresse ist für die Berichterstattung anstößiger Beiträge von
ForumNG auf Site-Ebene. Wenn diese E-Mail leer bleibt, wird die Berichtsfunktion deaktiviert (Es sei denn, die Berichtsfunktion auf der Forum-Ebene wurde aktiviert).';
$string['configshowidnumber'] = 'Fügen Sie ID-Nummern in Berichte, die zum Forum gehören, die von den Prüfern gesehen werden kann [aber nicht von normalen Studenten]';
$string['configshowusername'] = 'Fügen Sie Benutzernamen in Berichte, die zum Forum gehören, die von den Prüfern gesehen werden kann [aber nicht von normalen Studenten]';
$string['configsubscription'] = 'E-Mail Abonnement-Optionen für alle Foren über die Website kontrollieren.';
$string['configtrackreadposts'] = 'Auf \'ja\' stellen, wenn Sie möchten, das jeder Benutzer nachvollziehen kann, ob er einen Beitrag gelesen oder nicht gelesen hat.';
$string['configusebcc'] = 'Lassen Sie diesen Wert bei 0, um Moodle Standard Mail Handling zu verwenden (sicher).
Setzen Sie eine Zahl (z.B. 50), um Forum E-Mails mithilfe der BCC zu gruppieren, so dass Moodle nur eine einzige E-Mail sendet und Ihr Mail-Server versendet die E-Mail an viele Teilnehmer/innen weiter.
Dies kann die Leistung von E-Mail des Forum-cronjobs verbessern, aber einige Funktionen vom Standard-Moodle-E-Mail-System sind nicht enthalten.';
$string['confirmbulkunsubscribe'] = 'Sind Sie sicher, dass Sie die Benutzer/innen in der Liste abmelden möchten? (Dies kann nicht rückgängig gemacht werden).';
$string['confirmdelete'] = 'Sind Sie sicher, dass Sie diesen Beitrag löschen möchten?';
$string['confirmdelete_notdiscussion'] = 'Das Löschen dieses Beitrags wird die Diskussion nicht löschen.
Wenn Sie die Diskussion löschen möchten, verwenden Sie die Steuerelemente im unteren Bereich der Diskussionsseite.';
$string['confirmdeletediscuss'] = 'Diskussion löschen';
$string['confirmdeletedraft'] = 'Sind Sie sicher, dass Sie diesen Beitragsentwurf löschen möchten (Siehe unten)?';
$string['confirmselection'] = 'bestätigen Sie die Auswahl';
$string['confirmundelete'] = 'Sind Sie sicher, dass Sie diesen Beitrag wiederherstellen möchten?';
$string['convert_hide'] = 'Erstellte Foren verborgen lassen';
$string['convert_info'] = 'Der Umwandlungsprozess kann auf einem oder mehreren Foren alten Stils arbeiten; im Moment werden
nur \'allgemeine\' Foren unterstüzt, und nicht andere Forenarten. Verwenden Sie die Strg-Taste,
um mehrere Foren aus der Liste auszuwählen, falls erforderlich.';
$string['convert_newforum'] = 'neues Forum';
$string['convert_nodata'] = 'Benutzerdaten nicht einbeziehen (Beiträge, Abos, etc.)';
$string['convert_noforums'] = 'Es gibt keine alten Foren in diesem Kurs zu konvertieren.';
$string['convert_noneselected'] = 'Keine Foren für die Konvertierung ausgewählt! Bitte wählen Sie eine oder mehrere
Foren.';
$string['convert_process_assignments'] = 'Rollenzuweisungen aktualisieren...';
$string['convert_process_complete'] = 'Konvertierung beendet in {$a->seconds}en (view {$a->link}).';
$string['convert_process_dashboard'] = 'Favoriten konvertieren...';
$string['convert_process_dashboard_done'] = 'erfolgreich (OK {$a->yay}, fehlgeschlagen {$a->nay}).';
$string['convert_process_discussions'] = 'Diskussionen konvertieren...';
$string['convert_process_init'] = 'Forum-Struktur erstellen...';
$string['convert_process_overrides'] = 'Rollenänderung aktualisieren ...';
$string['convert_process_search'] = 'Regenerieren der gesuchten Daten ...';
$string['convert_process_show'] = 'Forum sichtbar machen...';
$string['convert_process_state_done'] = 'erfolgreich.';
$string['convert_process_subscriptions_initial'] = 'ursprüngliche Abonnements konvertieren...';
$string['convert_process_subscriptions_normal'] = 'normale Abonnements konvertieren...';
$string['convert_process_update_subscriptions'] = 'konvertieren in Abonnements-Gruppe ...';
$string['convert_title'] = 'Foren konvertieren';
$string['convert_warning'] = '<p>Wenn Sie auf Konvertieren klicken, werden die ausgewählten Foren umgewandelt.
Dies umfasst alle Beiträge und Diskussioen, und kann einige Zeit dauern.
Die Foren sind nicht verfügbar während der Konvertierung.</p><ul>
<li>Alte Foren, die schon konvertiert wurden, sind unsichtbar sobald der Konvertierungsprozess startet.
Dadurch wird sichergestellt, dass keine neuen Nachrichten gepostet werden und durch die Umwandlung verloren gehen.</li>
<li>Neu erstellte Foren werden zunächst verborgen und erscheinen erst wieder, wenn der Unmwandlungsprozess abgeschlossen ist.</li></ul>';
$string['copytoself'] = 'Senden Sie eine Kopie an sich selbst';
$string['createdbymoderator'] = 'Dieser Beitrag stammt von Moderator {$a}, dessen Name für Teilnehmer/innen nicht sichtbar ist.';
$string['crondebug'] = 'Cron debug output';
$string['crondebugdesc'] = 'NUR FÜR TESTZWECKE -- Tick to include debugging output in the cron logs';
$string['currentpost'] = 'Aktuelle Version des Beitrags';
$string['date_asc'] = 'ältester zuerst';
$string['date_desc'] = 'neuester zuerst';
$string['daterangefrom'] = 'Datum Bereich von';
$string['daterangefrom_help'] = 'Verwenden Sie die Daten, um Ihre Suche nur um die Beträge im angegebenen Zeitraum einzuschränken.

Wenn Sie keine Daten spezifizieren, werden Beiträge von jedem Zeitpunkt in den Ergebnissen enthalten sein.';
$string['daterangemismatch'] = 'Das "Bis" Datum ist vor dem "Von" Datum.';
$string['daterangeto'] = 'Datumsbereich';
$string['delete'] = '<span class=\'accesshide\'> Beitrag {$a}</span> Löschen';
$string['deleteandemail'] = 'Löschen und benachrichtigen des Autors';
$string['deleteattachments'] = 'Lösche bestehende Anhänge';
$string['deletedbyauthor'] = 'Dieser Beitrag wurde vom Verfasser gelöscht am {$a}.';
$string['deletedbymoderator'] = 'Dieser Beitrag wurde von einem Moderator gelöscht am {$a}.';
$string['deletedbyuser'] = 'Dieser Beitrag wurde gelöscht von {$a->user} am {$a->date}.';
$string['deletedforumpost'] = 'Ihre Nachricht wurde gelöscht';
$string['deletedpost'] = 'gelöschter Beitrag.';
$string['deletedraft'] = 'Beitragsentwurf löschen';
$string['deleteemailpostbutton'] = 'Löschen und E-Mail';
$string['deletepermanently'] = 'dauerhaft löschen';
$string['deletepost'] = 'Beitrag löschen: {$a}';
$string['deletepostbutton'] = 'löschen';
$string['digestmailheader'] = 'Ihre tägliche Zusammenfassung der {$a->sitename}-Foren. Wenn Sie Ihre E-Mail-Einstellungen ändern möchten, gehen Sie zur Seite: {$a->userprefs}.';
$string['digestmailprefs'] = 'Ihr Benutzerprofil';
$string['digestmailsubject'] = '{$a}: Forenbeiträge';
$string['directlink'] = 'Permalink<span class=\'accesshide\'> zum Beitrag {$a}</span>';
$string['directlinktitle'] = 'Direkter Link zu diesem Beitrag';
$string['disallowsubscribe'] = 'Abonnements sind nicht zulässig';
$string['discussion'] = 'Diskussion';
$string['discussionoptions'] = 'Diskussionsoptionen';
$string['discussions'] = 'Diskussionen';
$string['discussionsperpage'] = 'Diskussionen pro Seite';
$string['discussionsunread'] = 'Diskussionen (ungelesen)';
$string['discussiontags'] = 'Diskussionsschlagworte';
$string['discussiontags_help'] = 'Um Schlagworte zur Diskussion hinzuzufügen, geben Sie diese kommagetrennt ein.';
$string['displayperiod'] = 'Zeitraum';
$string['displayperiod_help'] = 'Sie können diese Diskussion vor Studenten verbergen, bis zu oder ab einem bestimmten Datum.

Während die Diskussion verborgen ist, können die Studenten diese überhaupt nicht sehen. Moderatoren können in der Liste die vorborgene Diskussion mit einem Uhr-Symbol sehen';
$string['displayversion'] = 'ForumNG Version: <strong>{$a}</strong>';
$string['donotmailafter'] = 'Keine E-Mail senden nach (Stunden)';
$string['draft'] = 'Entwurf';
$string['draft_cannotreply'] = '<p>Es ist derzeit nicht möglich, eine Antwort auf den Beitrag, auf den sich ihr Entwurf bezieht, hinzuzufügen.
{$a}</p><p>Sie können die X-Taste neben diesem Entwurf auf der Haupt-Foren-Seite verwenden, um den vollständigen Text des Entwurfs zu sehen.</p>';
$string['draft_inreplyto'] = '(beantworten {$a})';
$string['draft_mismatch'] = 'Fehler beim Zugriff auf den Beitragsentwurf.';
$string['draft_newdiscussion'] = '(neue Diskussion)';
$string['draft_noedit'] = 'Die Entwurf Funktion kann nicht verwendet werden, wenn die Beiträge bearbeitet werden.';
$string['draftexists'] = 'Ein Entwurf dieses Beitrags ({$a}) wurde gespeichert. Wenn der Beitrag noch nicht fertig ist, können Sie diesen als Entwurf auf der Hauptseite dieses Forums abrufen.';
$string['drafts'] = 'nicht fertiggestellte Entwürfe';
$string['drafts_help'] = 'Wenn Sie einen Beitrag als Entwurf speichern, erscheint dieser in der Liste.  Klicken Sie auf den
Entwurf zum Bearbeiten.

Wenn Sie den Entwurf löschen möchten, klicken Sie auf das Löschen-Symbol daneben. Ein Dialog zum Bestätigen erscheint.

In manchen Fällen ist es nicht möglich, den Entwurf fortzusetzen (zum Beispiel, wenn sich der Entwurf in der Antwort auf eine
Diskussion bezieht, die inzwischen gelöscht wurde. In dieser Situation kann man den Inhalt des Entwurfs abrufen, indem man auf das Löschen-Symbol klickt.';
$string['edit'] = '<span class=\'accesshide\'> Beitrag {$a}</span> Bearbeiten';
$string['edit_locked'] = 'Diese Diskussion ist derzeit gesperrt.';
$string['edit_nopermission'] = 'Sie sind nicht berechtigt diese Art von Beiträgen zu bearbeiten.';
$string['edit_notcurrentpost'] = 'Sie können keine gelöschten Beiträge bearbeiten';
$string['edit_notdeleted'] = 'Sie können keinen Beitrag wiederherstellen, der nicht gelöscht wurde.';
$string['edit_notlocked'] = 'Diese Diskussion ist derzeit nicht gesperrt.';
$string['edit_notyours'] = 'Sie können die Beiträge von anderen nicht bearbeiten.';
$string['edit_readonly'] = 'Dieses Forum ist zur Zeit schreibgeschützt. Die Beiträge können nicht editiert werden.';
$string['edit_rootpost'] = 'Diese Aktion kann nicht auf einen Beitrag, der eine Diskussion beginnt, angewendet werden.';
$string['edit_timeout'] = 'Sie sind nicht mehr berechtigt, diesen Beitrag zu bearbeiten; die zulässige Zeit zur Bearbeitung ist abgelaufen.';
$string['edit_wronggroup'] = 'Sie können keine Änderungen an Beiträgen außerhalb Ihrer Gruppe vornehmen.';
$string['editbyother'] = 'Bearbeitet von {$a->name} am {$a->date}';
$string['editbyself'] = 'Bearbeitet vom Autor am {$a}';
$string['editdiscussionoptions'] = 'Diskussionsoptionen bearbeiten: {$a}';
$string['editedforumpost'] = 'Ihr Beitrag wurde bearbeitet';
$string['editlimited'] = 'Warnung: Sie müssen alle Änderungen an diesem Beitrag speichern, vor {$a}. Nach
diesr Zeit können Sie den Beitrag nicht mehr bearbeiten.';
$string['editpost'] = 'Beitrag Bearbeiten: {$a}';
$string['emailafter'] = 'Mitteilung mit Verzögerung senden';
$string['emailauthor'] = 'Autor/in';
$string['emailauthor_help'] = 'Senden Sie eine E-Mail an den Autor des Beiträge, um ihm mitzuteilen, dass Sie seinen Beitrag bearbeitet haben.';
$string['emailcontenthtml'] = 'Dies ist eine Meldung für Sie um Ihnen mitzuteilen, dass Ihr Forenbeitrag mit den
folgenden Details von \'{$a->firstname} {$a->lastname}\' gelöscht wurde:<br />
<br />
Betreff: {$a->subject}<br />
Forum: {$a->forum}<br />
Kurs: {$a->course}<br/>
<br/>
<a href="{$a->deleteurl}" title="view deleted post">Diskussion anzeigen</a>';
$string['emailcontentplain'] = 'Dies ist eine Meldung für Sie um Ihnen mitzuteilen, dass Ihr Forum Post mit den
folgenden Details gelöscht wurde von \'{$a->firstname} {$a->lastname}\':

Betreff: {$a->subject}
Forum: {$a->forum}
Kurs: {$a->course}

Um die Diskussion zu sehen, besuchen Sie diesen Link: {$a->deleteurl}';
$string['emaileditedcontenthtml'] = 'Wir informieren Sie, dass Ihr Forumsbeitrag von \'{$a->editinguser}\' bearbeitet wurde.<br />
<br />
Diskussion: {$a->subject}<br />
Forum: {$a->forum}<br />
Modul: {$a->course}<br/>
<br/>
<a href="{$a->editurl}" title="zeigt gelöschte Beiträge">zeigt die Diskussion</a>';
$string['emailerror'] = 'Es gab einen Fehler beim Senden der E-Mail';
$string['emailmessage'] = 'Nachricht';
$string['enableadvanced'] = 'Erweiterte Funktionen aktivieren';
$string['enablelimit'] = 'Maximale Anzahl der Beiträge';
$string['enablelimit_help'] = 'Diese Option beschränkt Diskussionen und Antworten, die von Studenten erstellt wurden
(insbesondere alle Benutzer/innen, ohne die <tt>mod/forumng:ignorethrottling</tt> Fähigkeit).';
$string['enableratings'] = 'Beiträge erlauben, bewertet zu werden';
$string['enableratings_help'] = 'Wenn diese Option aktiviert ist, können Forenbeiträge eine Bewertung erhalten unter zur hilfenahme einer numerischen oder vordefinierten Moodle-Skala.
Ein oder mehrere Benutzer/innen können einen Beitrag bewerten und die angezeigte Bewertung ist der Mittelwert dieser Bewertungen.';
$string['enabletagging'] = 'Aktiviert Markierung für Diskussion';
$string['error_cannotchangediscussionsubscription'] = 'Sie sind nicht berechtigt, diese Diskussion zu abonnieren oder abzubestellen.';
$string['error_cannotchangegroupsubscription'] = 'Sie sind nicht berechtigt, diese Gruppe zu abonnieren oder abzubestellen.';
$string['error_cannotchangesubscription'] = 'Sie sind nicht berechtigt, dieses Forum zu abonnieren oder abzubestellen.';
$string['error_cannotmanagediscussion'] = 'Sie haben keine Berechtigung, diese Diskussion zu verwalten.';
$string['error_cannotmarkread'] = 'Sie sind nicht berechtigt, Diskussionen in diesem Forum als gelesen zu markieren.';
$string['error_cannotsubscribetogroup'] = 'Sie sind nicht berechtigt, diese Gruppe zu abonnieren oder abzubestellen.';
$string['error_cannotunsubscribefromgroup'] = 'Sie sind nicht berechtigt, von dieser ausgewählten Gruppe zu abonnieren oder abzubestellen.';
$string['error_cannotviewdiscussion'] = 'Sie haben keine Berechtigung, diese Diskussion zu sehen.';
$string['error_draftnotfound'] = 'Der Entwurf kann nicht gefunden werden. Der Entwurf wurde entweder gelöscht oder veröffentlicht.';
$string['error_duplicate'] = 'Sie haben bereits einen Beitrag mit der bisherigen Form erstellt.';
$string['error_exception'] = 'Ein Forum-Fehler ist aufgetreten. Bitte versuchen Sie es später erneut, oder versuchen Sie etwas
anderes.<div class=\'forumng-errormessage\'>Fehlermeldung: {$a}</div>';
$string['error_feedlogin'] = 'Fehler bei der Benutzeranmeldung';
$string['error_fileexception'] = 'Ein Verarbeitungsfehler einer Datei ist aufgetreten.
Dies ist wahrscheinlich durch Probleme des Systems verursacht werden. Sie können es später noch einmal versuchen.';
$string['error_forwardemail'] = 'Es gab einen Fehler beim Senden der E-Mail an <strong>{$a}</strong>. Die E-Mail
konnte nicht gesendet werden.';
$string['error_identityinsubject_discussion'] = 'Sie haben die Betreffzeile auf Ihre Anmeldedaten gesetzt. (Dies kann automatisch von Ihrem Browser oder Passwort-Manager durchgeführt worden sein.) Um fortzufahren, ändern Sie den Betrefftext.';
$string['error_identityinsubject_reply'] = 'Sie haben die Betreffzeile auf Ihre Anmeldedaten gesetzt. (Dies kann automatisch durch Ihren Browser oder Passwort-Manager geschehen sein.) Um fortzufahren, löschen oder ändern Sie den Betrefftext.';
$string['error_invalidsubscriptionrequest'] = 'Ihr Abonnement Anfrage ist ungültig.';
$string['error_makebig'] = 'Der Kurs hat nur {$a->users} Benutzer/innen';
$string['error_markreadparams'] = 'Parameter sind nicht korrekt: erfordert entweder id oder d.';
$string['error_nopermission'] = 'Sie sind nicht berechtigt, diese Anfrage durchzuführen.';
$string['error_nosharedforum'] = 'das Forum <strong>{$a->name}</strong>: konnte nicht als gemeinsames
Forum wiederhergestellt werden; ID number {$a->idnumber} wurde nicht gefunden. Widerhergestelltes Forum ist ein unabhängiges Forum.';
$string['error_notwhensharing'] = 'Diese Option ist nicht verfügbar, wenn Sie das Forum freigeben möchten.';
$string['error_portfoliosave'] = 'Es gab einen Fehler beim Speichern dieser Daten.';
$string['error_ratingrequired'] = 'Das Benoten wurde gewählt, basierend auf den Bewertungen, aber die Bewertungen sind nicht aktiv';
$string['error_ratingthreshold'] = 'Bewertung muss eine positive Zahl sein.';
$string['error_sendalert'] = 'Es gab einen Fehler beim Senden Ihres Berichtes an {$a}.
Bericht konnte nicht gesendet werden.';
$string['error_sharingidnumbernotfound'] = 'Bei Verwendung eines gemeinsamen Forums, müssen Sie eine ID-Nummer eingeben, die für dieses Forum vergeben wurde.';
$string['error_sharinginuse'] = 'Sie können die Freigabe für dieses Forum nicht abschalten, da andere Foren dieses bereits teilen. Wenn nötig, löschen Sie die anderen Foren.';
$string['error_sharingrequiresidnumber'] = 'Wenn Sie das Forum für die gemeinsame Nutzung freigeben möchten, müssen Sie eine ID-Nummer eingeben, die nur einmal im System vorkommt.';
$string['error_subscribeparams'] = 'Parameter sind nicht korrekt: erfordert entweder id oder Kurs oder d.';
$string['error_system'] = 'Ein Systemfehler ist aufgetreten: {$a}';
$string['error_unknownsort'] = 'unbekannte Sortieroption.';
$string['errorfindinglastpost'] = 'Fehler bei der Neuberechnung des letzten Beitrags (Datenbank inkonsistent?)';
$string['errorinvalidforum'] = 'Das Ziel-Forum für die Archivierung alter Diskussionen existiert nicht mehr.
Bitte wählen Sie eine anderes Forum.';
$string['event:discussioncreated'] = 'Diskussion hinzufügen';
$string['event:discussiondeleted'] = 'Diskussion löschen';
$string['event:discussionlocked'] = 'Diskussion sperren';
$string['event:discussionmerged'] = 'Diskussion zusammenführen';
$string['event:discussionpermdeleted'] = 'Diskussion dauerhaft löschen';
$string['event:discussionundeleted'] = 'Löschen der Diskussion rückgängig machen';
$string['event:discussionunlocked'] = 'Diskussion entsperren';
$string['event:discussionviewed'] = 'Diskussion anzeigen';
$string['event:mailsent'] = 'Mail erfolgreich versendet';
$string['event:postcreated'] = 'Antwort hinzufügen';
$string['event:postdeleted'] = 'Beitrag löschen';
$string['event:postreported'] = 'Beitrag melden';
$string['event:postsplit'] = 'Beitrag aufteilen';
$string['event:postundeleted'] = 'Löschen des Beitrags rückgängig machen';
$string['event:postupdated'] = 'Beitrag bearbeiten';
$string['event:savefailed'] = 'Beitrag konnte nicht gespeichert werden';
$string['event:subscriptioncreated'] = 'Abonnement erstellt';
$string['event:subscriptiondeleted'] = 'Abonnement entfernt';
$string['existingattachments'] = 'bestehende Anhänge';
$string['expand'] = '<span class=\'accesshide\'> Beitrag {$a}</span> Aufklappen';
$string['expand_text'] = 'Beitrag aufklappen';
$string['expandall'] = 'Alle Beiträge expandieren';
$string['exportedtitle'] = 'Forum Diskussion &lsquo;{$a->subject}&rsquo; exportiert am {$a->date}';
$string['exportword'] = 'Export nach Word';
$string['externaldashboardadd'] = 'Forum zum Dashboard hinzufügen';
$string['externaldashboardremove'] = 'Forum vom Dashboard entfernen';
$string['extra_emails'] = 'E-Mail-Adresse weiterer Empfänger';
$string['extra_emails_help'] = 'Geben eine oder mehr E-Mailadressen, getrennt mit Leerzeichen oder Semikolon, ein.';
$string['feed_nopermission'] = 'Sie haben keine Berechtigung, um dieses Feed zu betreten.';
$string['feed_notavailable'] = 'Dieses Feed ist nicht verfügbar.';
$string['feeditems'] = 'Neue Einträge in den Feeds';
$string['feeditems_help'] = 'Die Anzahl der Elemente in der Atom/RSS-Feeds enthalten sind. Wenn diese Anzahl niedrig eingestellt ist, können Benutzer/innen, die
die Feeds nicht häufig nachsehen, einige Nachrichten verpassen.';
$string['feeds'] = 'Feeds';
$string['feedtype'] = 'Feed-Inhalte';
$string['feedtype_all_posts'] = 'enthält alle Beiträge';
$string['feedtype_discussions'] = 'enthält nur Diskussionen';
$string['feedtype_help'] = 'Wenn diese Option aktiviert ist, können Benutzer/innen das Forum mithilfe eines Atom- oder RSS-Feed-Lesers abonnieren.
Sie können die Feeds so einstellen, dass sie nur die Top-Level Diskussionen und keine Antworten, oder alle Beiträge enthalten.';
$string['feedtype_none'] = 'Feed deaktiviert';
$string['filterdiscussions'] = 'Diskussion mit Schlagworten anzeigen';
$string['flaggeddiscussions'] = 'markierte Diskussionen';
$string['flaggeddiscussions_help'] = 'Markierte Diskussionen erscheinen in dieser Liste. Um zu einer markierten Diskussion zu springen, klicken Sie auf den Beitrag.

Um die Markierung (Fahne) aus einer Diskussion zu entfernen, klicken Sie auf das Flaggen-Symbol (hier oder in dem Beitrag).';
$string['flaggeddiscussionslink'] = '{$a} markierte Diskussion';
$string['flaggedposts'] = 'Markierte Beiträge';
$string['flaggedposts_help'] = 'markierte Beiträge erscheinen in dieser Liste. Um zu einem markierten Beitrag zu springen,
klicken Sie auf den Beitrag.

Um die Markierung (Fahne) aus einem Beitrag zu entfernen, klicken Sie auf das Flaggen-Symbol (hier oder in dem Beitrag).';
$string['flaggedpostslink'] = '{$a} markierte Beiträge';
$string['flagoff'] = 'Nicht markiert';
$string['flagon'] = 'Sie haben diesen Beitrag markiert';
$string['flagpost'] = 'Beitrag markieren';
$string['forbidattachments'] = 'Anhang nicht zulässig';
$string['forcesubscribe'] = 'Alle zwingen zu abonnieren (und Abonnenten zu bleiben)';
$string['forum'] = 'Forum';
$string['forumdescription'] = 'Beschreibung des Forums (wird neben den Links zu diesem Forum angezeigt, wenn die Option unten aktiviert ist)';
$string['forumintro'] = 'Einführung in das Forum (siehe oben in der Diskussionsliste)';
$string['forumname'] = 'Forenname';
$string['forumng:addinstance'] = 'Ein neues ForumNG hinzufügen';
$string['forumng:addtag'] = 'Nutzern gestatten, Diskussionen zu markieren';
$string['forumng:copydiscussion'] = 'Diskussion kopieren';
$string['forumng:createattachment'] = 'Anhänge erstellen';
$string['forumng:deleteanypost'] = 'Jeden Beitrag löschen';
$string['forumng:editanypost'] = 'Jeden Beitrag bearbeiten';
$string['forumng:forwardposts'] = 'Vorwärts Beiträge';
$string['forumng:grade'] = 'Beiträge benoten';
$string['forumng:ignorepostlimits'] = 'Beiträgelimit ignorieren';
$string['forumng:mailnow'] = 'E-Mail senden vor Ende der Bearbeitungszeit';
$string['forumng:managediscussions'] = 'Diskussionsoptionen verwalten';
$string['forumng:managesubscriptions'] = 'Abonnements verwalten';
$string['forumng:movediscussions'] = 'Diskussionen verschieben';
$string['forumng:postanon'] = 'Als anonyme/r Moderator/in posten';
$string['forumng:postasmoderator'] = 'Sich als Moderator im Beitrag zu erkennen geben';
$string['forumng:rate'] = 'Beiträge bewerten';
$string['forumng:replypost'] = 'Beitrag beantworten';
$string['forumng:setimportant'] = 'Beiträge als wichtig markieren';
$string['forumng:splitdiscussions'] = 'Diskussionen trennen';
$string['forumng:startdiscussion'] = 'Neue Diskussion starten';
$string['forumng:view'] = 'Forum anzeigen';
$string['forumng:viewallposts'] = 'verborgene und gelöschte Beiträge anzeigen';
$string['forumng:viewallratings'] = 'Alle Originaleinstellungen von Einzelpersonen anzeigen';
$string['forumng:viewanyrating'] = 'Alle Bewertungen anzeigen';
$string['forumng:viewdiscussion'] = 'Diskussionen anzeigen';
$string['forumng:viewrating'] = 'Bewertungen der eigenen Beiträge anzeigen';
$string['forumng:viewreadinfo'] = 'Anzeigen, wer den Beitrag gelesen hat';
$string['forumng:viewsubscribers'] = 'Abonnenten anzeigen';
$string['forumngcrontaskdaily'] = 'ForumNG tägliche Wartungsarbeiten';
$string['forumngcrontaskdigest'] = 'ForumNG E-mail Verarbeitung';
$string['forumngcrontaskemails'] = 'ForumNG E-mail Sendeauftrag';
$string['forumngdiscusstagfilter'] = 'Zeige Forumsdiskussionen nach Markierung';
$string['forumngdiscusstagfilter_help'] = 'Wählen Sie ein Markierungskriteriu,m um Forumsdiskussionen danach zu filtern/anzuzeigen';
$string['forumngratingsobsolete'] = 'ForumNG Einstellungen (veraltet)';
$string['forums'] = 'Foren';
$string['forumsubscription'] = 'Forum-Abonnement';
$string['forumtype'] = 'Forentyp';
$string['forumtype_help'] = 'Verschiedene Arten von Foren sind für bestimmte Zwecke oder
Lehrmethoden zur Verfügung. Das Standard Forum eignet sich für den normalen Gebrauch.';
$string['forumtype_link'] = 'mod/forumng/forumtypes';
$string['from'] = 'von: {$a}';
$string['grade'] = 'Bewertung';
$string['grading'] = 'Note';
$string['grading_average'] = 'Durchschnitt der Bewertungen';
$string['grading_count'] = 'Anzahl der Bewertungen';
$string['grading_help'] = 'Wenn Sie diese Option auswählen, wird eine Note für dieses Forum zu den Bewertungen im Kurs hinzugefügt und automatisch berechnet.

Die verschiedenen Möglichkeiten der Bewertung sind weitestgehend selbsterklärend; jeweils die Note
jedes Studenten wird auf der Grundlage aller Bewertungen für alle Beiträge, die die Studenten gemacht haben, berechnet. Noten sind beschränkt auf die Bewertungsskala.';
$string['grading_max'] = 'höchste Bewertung';
$string['grading_min'] = 'niedrigste Bewertung';
$string['grading_none'] = 'Keine Bewertung';
$string['grading_sum'] = 'Summer der Bewertungen';
$string['gradingscale'] = 'Bewertungsskala';
$string['group'] = 'Gruppe';
$string['hasunreadposts'] = '(Ungelesene Beiträge)';
$string['hidelater'] = 'Diese Anweisungen nicht mehr anzeigen';
$string['history'] = 'Historie';
$string['historypage'] = 'Historie: {$a}';
$string['housekeepingstarthour'] = 'Beginn der Archivierung';
$string['housekeepingstophour'] = 'Ende der Archivierung';
$string['important'] = 'wichtiger Beitrag';
$string['inappropriatedateortime'] = 'Das "Von" Datum darf nicht in der Zukunft liegen.';
$string['includepost'] = 'Beitrag einbeziehen';
$string['initialsubscribe'] = 'Automatisches abonnieren';
$string['inreplyto'] = 'Antwort auf';
$string['invalidalert'] = 'Sie müssen den Grund für die Meldung dieses Beitrags angeben.';
$string['invalidalertcheckbox'] = 'Sie müssen mindestens eines der Felder ankreuzen.';
$string['invalidemail'] = 'Diese E-Mail-Adresse ist nicht gültig. Bitte geben Sie eine einzelne E-Mail-Adresse ein.';
$string['invalidemails'] = 'Diese E-Mail-Adresse ist nicht gültig. Bitte geben Sie eine oder mehrere E-Mail-
Adressen durch Leerzeichen oder Semikolon getrennt ein.';
$string['invalidforum'] = 'Dieses Forum ist nicht mehr vorhanden';
$string['js_clicktoclearrating'] = 'Klicken Sie, um Ihre Bewertung zu entfernen.';
$string['js_clicktosetrating'] = 'Klicken Sie, um diesen Beitrag # Sterne zu geben.';
$string['js_clicktosetrating1'] = 'Klicken Sie, um diesen Beitrag 1 Stern zu geben.';
$string['js_nopublicrating'] = 'Noch nicht bewertet.';
$string['js_nouserrating'] = 'Nicht von Ihnen bewertet.';
$string['js_nratings'] = '(# Bewertungen)';
$string['js_nratings1'] = '(1 Bewertung)';
$string['js_outof'] = '(von #.)';
$string['js_publicrating'] = 'Durchschnittliche Bewertung: #.';
$string['js_userrating'] = 'Ihre Bewertung: #.';
$string['jserr_alter'] = 'Es gab einen Fehler bei Änderung des Beitrages.

Diese Seite neu laden und erneut versuchen.';
$string['jserr_attachments'] = 'Es gab einen Fehler beim Laden des Anhänge-Editors.

Diese Seite neu laden und erneut versuchen.';
$string['jserr_load'] = 'Es gab einen Fehler beim Laden des Beitrages.

Diese Seite neu laden und erneut versuchen.';
$string['jserr_save'] = 'Es gab einen Fehler beim Speichern des Beitrages.

Kopieren Sie den Text in ein anderes Programm, um sicherzustellen, dass Sie diesen nicht verlieren, dann laden Sie diese Seite neu und versuchen Sie es bitte erneut.';
$string['jumpnext'] = 'Weiter ungelesen';
$string['jumpparent'] = 'Eltern';
$string['jumpprevious'] = 'Zurück ungelesen';
$string['jumppreviousboth'] = 'Zurück';
$string['jumpto'] = 'Gehe zu:';
$string['lastpost'] = 'Letzter Beitrag';
$string['limitposts'] = 'Maximale Anzahl der Beiträge';
$string['lockedtitle'] = 'Diese Diskussion ist jetzt geschlossen';
$string['mailnow'] = 'Bald versenden';
$string['mailnow_help'] = 'Senden Sie Ihre Post an Abonnenten schneller per E-Mail.

Sofern Sie diese Option wählen, wartet das System für einige Zeit vor dem Senden, so dass all Ihre Änderungen in der E-Mail eingeschlossen werden können.';
$string['managepostalerts'] = 'Angezeigte Beitragsmitteilungen verwalten';
$string['markdiscussionread'] = 'Alle gelesene Beiträge in dieser Diskussion markieren.';
$string['markpostread'] = 'Beitrag als gelesen markieren';
$string['message'] = 'Nachricht';
$string['moderator'] = 'Moderator/in';
$string['modulename'] = 'ForumNG';
$string['modulename_help'] = 'ForumNG ist eine Alternative für das Standard-Moodle-Forum mit ähnlichen Funktionen und eine dynamischere Benutzeroberfläche. NG steht für \'Next Generation\'.';
$string['modulenameplural'] = 'ForumNGs';
$string['move_nogroups'] = 'Sie haben keinen Zugang zu allen Gruppen in der ausgewählten Ziel-Forum.';
$string['move_notselected'] = 'Sie müssen ein bestimmtes Forum aus der Dropdown-Menü auswählen, bevor Sie auf Verschieben klicken.';
$string['newdiscussion'] = 'Neue Diskussion';
$string['nextresults'] = 'Weitere Ergebnisse';
$string['nodiscussions'] = 'Es gibt noch keine Diskussionen in diesem Forum.';
$string['noguestsubscribe'] = 'Entschuldigung, Gäste können sich nicht anmelden um Forenbeiträge per E-Mail zu erhalten.';
$string['noratings'] = 'Keine Bewertungen';
$string['nosearchcriteria'] = 'Keine Suchkriterien. Bitte nutzen Sie eine oder mehrere der nachstehenden Kriterien.';
$string['nosubscribers'] = 'Es gibt noch keine Abonnenten für dieses Forum.';
$string['nosubscribersgroup'] = 'Niemand in der Gruppe hat diesen Forum abonniert.';
$string['notext'] = '(Kein Text)';
$string['nothingfound'] = 'Keine passenden Ergebnisse gefunden. Versuchen Sie es mit einer anderen Abfrage.';
$string['nothingtodisplay'] = '<h3>Nichts zum Anzeigen</h3>';
$string['numberofdiscussion'] = '{$a} Diskussion';
$string['numberofdiscussions'] = '{$a} Diskussionen';
$string['numeric_asc'] = 'niedrigster zuerst';
$string['numeric_desc'] = 'höchster zuerst';
$string['numposts'] = '{$a} Beitrag(e)';
$string['offerconvert'] = 'Wenn Sie ein neues ForumNG erstellen, das eine Kopie eines alten Forums ist, verwenden Sie nicht dieses Formular.
stattdessen, <a href=\'{$a}\'>Konvertieren Sie Ihr Forum</a>.';
$string['olderversions'] = 'Ältere Versionen (neueste zuerst)';
$string['onemonth'] = '1 Monat';
$string['optionalsubject'] = 'Betreff ändern (optional)';
$string['partialsubscribed'] = 'Teilweise';
$string['pastediscussion'] = 'Diskussion einfügen';
$string['pastediscussion_cancel'] = 'Einfügen abbrechen';
$string['pastediscussions'] = 'Diskussionen einfügen';
$string['perforumoption'] = 'separat für jedes Forum konfiguriert';
$string['permanentdeletion'] = 'ungenutzte Daten löschen nach';
$string['permanentdeletion_never'] = 'Nie (ungenutzte Daten nie löschen)';
$string['permanentdeletion_soon'] = 'Löschen so bald wie möglich';
$string['pluginadministration'] = 'ForumNG Administration';
$string['pluginname'] = 'ForumNG';
$string['post'] = 'Beitrag';
$string['postby'] = '(von {$a})';
$string['postdiscussion'] = 'Diskussion veröffentlichen';
$string['postedasmoderator'] = 'Gepostet als Moderator/in';
$string['postedasmoderator_help'] = 'Beiträge suchen, die von einem Moderator erstellt wurden.';
$string['postinfo_deleted'] = 'wurde gelöscht';
$string['postinfo_short'] = 'zusammengefasst';
$string['postinfo_unread'] = 'ungelesen';
$string['postingfrom'] = 'Beiträge erstellen erlauben von';
$string['postinguntil'] = 'Beiträge erstellen erlauben bis';
$string['postmailinfo'] = 'Dies ist eine Kopie einer neuen Nachricht auf {$a} website.

Um Ihre Antwort über die Website hinzuzufügen, klicken Sie auf diesen Link:';
$string['postnum'] = 'Beitrag {$a->num}';
$string['postnumreply'] = 'Beitrag {$a->num}{$a->info} in Antwort auf {$a->parent}';
$string['postreply'] = 'Antwort';
$string['posts'] = 'Beiträge';
$string['postsper'] = 'Beiträge per';
$string['previousresults'] = 'Zurück zu den Ergebnissen {$a}';
$string['quotaleft_plural'] = 'Sie dürfen nur <strong>{$a->posts}</strong> weitere Beiträge in der
aktuellen {$a->period}.';
$string['quotaleft_singular'] = 'Sie dürfen nur <strong>{$a->posts}</strong> weiteren Beitrag in der
aktuellen {$a->period}.';
$string['rate'] = 'bewerten';
$string['rate_nopermission'] = 'Sie haben keine Berechtigung, diesen Beitrag zu bewerten ({$a}).';
$string['ratingfrom'] = 'Beiträge bewerten von';
$string['ratings'] = 'Bewertungen';
$string['ratingthreshold'] = 'erforderliche Bewertungen';
$string['ratingthreshold_help'] = 'Wenn Sie diese Option auf 3 setzen, wird die Bewertung für einen Beitrag nicht angezeigt,
bis mindestens 3 Nutzer diesen Beitrag bewertet haben.

Dies kann helfen, die Wirkung einer einzigen Bewertung im Durchschnitt zu reduzieren.';
$string['ratingtime'] = 'Beschränken Sie die Bewertung der Beiträge mit Terminen in diesem Bereich:';
$string['ratinguntil'] = 'Beiträge bewerten bis';
$string['re'] = 'Re: {$a}';
$string['readafterdays'] = 'Lesen Sie nach Tagen';
$string['readdata'] = 'Daten lesen';
$string['remove'] = 'Entfernen';
$string['removefiltering'] = 'Anzeigen von Diskussionen mit Markierung \'{$a}\\';
$string['removeolddiscussions'] = 'Alte Diskussionen entfernen';
$string['removeolddiscussions_help'] = 'Das System kann automatisch Diskussionen entfernen, wenn diese keine neue Antwort für eine bestimmte Zeitdauer enthalten.';
$string['removeolddiscussionsafter'] = 'Alte Diskussionen entfernen nach';
$string['removeolddiscussionsdefault'] = 'Nie entfernen';
$string['replies'] = 'Antworten';
$string['reply'] = 'Antwort<span class=\'accesshide\'> auf Beitrag {$a}</span>';
$string['reply_missing'] = 'Sie können nicht antworten, weil das System den Beitrag nicht finden konnte.';
$string['reply_nopermission'] = 'Sie sind nicht berechtigt zu antworten.';
$string['reply_notcurrentpost'] = 'Sie können nicht auf gelöschte Beiträge antworten .';
$string['reply_postquota'] = 'Sie können im Moment nicht auf Beiträge antworten, weil Sie die maximale Anzahl von Beiträgen erreicht haben.';
$string['reply_readonly'] = 'Dieses Forum ist zur Zeit schreibgeschützt. Neue Antworten können nicht hinzugefügt werden.';
$string['reply_typelimit'] = 'Aufgrund der Art dieses Forums, sind Sie derzeit nicht berechtigt, auf diesen Beitrag zu antworten.';
$string['reply_wronggroup'] = 'Sie können nicht auf Beiträge in dieser Diskussion antworten, weil Sie nicht in
die richtige Gruppe sind.';
$string['replytopost'] = 'Antwort auf den Beitrag: {$a}';
$string['replytouser'] = 'E-Mail Adresse in der Antwort verwenden';
$string['reportingemail'] = 'E-Mail Adresse für die Berichterstattung anstößiger Beiträge';
$string['reportingemail_help'] = 'Wenn diese E-Mail-Adresse angegeben wird, erscheint ein Link "Bericht".
neben jedem Beitrag. Benutzer können auf den Link klicken, um anstößige Beiträge zu melden. Die Informationen werden an diese Adresse geschickt.

Wenn diese E-Mail leer bleibt, wird die Funktion"Bericht" nicht angezeigt (es sei denn, es wurde eine Meldeadresse auf Betriebsebene angegeben).

Mehrere E-Mail-Adressen können hinzugefügt werden, sofern sie durch ein semi-colon getrennt sind.';
$string['reportunacceptable'] = 'E-Mail Adresse für die Berichterstattung anstößiger Beiträge';
$string['saveallratings'] = 'Alle Bewertungen speichern';
$string['savedposts_all'] = '{$a}';
$string['savedposts_all_tag'] = 'Foren-Diskussion';
$string['savedposts_one'] = '{$a->name}: {$a->subject}';
$string['savedposts_one_tag'] = 'Foren-Beitrag';
$string['savedposts_original'] = 'ursprüngliche Diskussion';
$string['savedposts_selected'] = '{$a} (ausgewählte Beiträge)';
$string['savedposts_selected_tag'] = 'Foren-Beiträge';
$string['savedraft'] = 'Als Entwurf speichern';
$string['savedtoportfolio'] = 'Die ausgewählten Informationen wurde gespeichert.';
$string['savefailnetwork'] = '<p>Unglücklicherweise können Ihre Änderungen zu diesem Zeitpunkt nicht gespeichert werden. Dies liegt an einem
Netzwerkfehler; die Website ist vorübergehend nicht verfügbar oder Sie wurden abgemeldet. </p><p><p>Speichern wurde deaktiviert
auf dieser Seite. Um alle Änderungen beizubehalten, müssen Sie den Inhalt des Beitrags kopieren, diese Seite erneut aufrufen und dann Ihre Änderungen einfügen.</p>';
$string['savefailtitle'] = 'Beitrag sichern fehlgeschlagen';
$string['savetoportfolio'] = 'Speichern in MyStuff';
$string['search:activity'] = 'ForumNG - Aktivitätsinformationen';
$string['search:post'] = 'ForumNG - Beiträge';
$string['search_update_count'] = '{$a} Foren zu verarbeiten.';
$string['searchallforums'] = 'In allen Foren suchen';
$string['searchresults'] = 'Suchergebnisse: <strong>{$a}</strong>';
$string['searchthisforum'] = 'In diesem Forum suchen';
$string['searchthisforum_help'] = 'Geben Sie Ihren Suchbegriff ein und drücken Sie die Eingabetaste oder klicken Sie auf die Schaltfläche.

Um nach exakten Begriffen zu suchen, verwenden Sie Anführungszeichen.

Um ein Wort auszuschließen, fügen Sie einen Bindestrich unmittelbar vor dem Wort ein.

Beispiel: der Suchbegriff <tt>picasso -sculpture "early works"</tt> liefert Ergebnisse für ‘picasso’ oder der Ausdruck ‘early works’, schließt aber Elemente aus, die ‘sculpture’ enthalten.

Um nach Autor oder Datum zu suchen, verwenden Sie die Erweiterte Suche. Greifen Sie direkt darauf zu, indem Sie keinen Suchebegriff eingeben.';
$string['searchthisforumlink'] = 'In diesem Forum suchen';
$string['searchthisforumlink_help'] = 'Geben Sie Ihren Suchbegriff ein und drücken Sie die Eingabetaste oder klicken Sie auf die Schaltfläche.

Für genauere Suche, verwenden Sie Anführungszeichen.

Um ein Wort auszuschliessen, fügen Sie unmittelbar einen Bindestrich vor dem Wort ein.

Beispiel: Suchbegriff <tt>picasso -sculpture &quot;early works&quot;</tt> als Suchergebnisse werden &lsquo;picasso&rsquo; or the phrase &lsquo;early works&rsquo; ausgegeben aber Elemente, die &lsquo;sculpture&rsquo enthalten, werden ausgeschlossen;.

Um nach Autor oder Datum zu suchen, Klicken Sie &lsquo;Mehr Optionen&rsquo;.';
$string['searchtime'] = 'Suchzeit: {$a} s';
$string['selectdiscintro'] = 'Aktivieren Sie das Kontrollkästchen neben jeder Diskussion, die Sie einbeziehen möchten. Wenn Sie fertig sind,
scrollen Sie nach unten und klicken Sie auf  &lsquo;Auswahl bestätigen &lsquo;.';
$string['selectedposts'] = 'Ausgewählte Beiträge';
$string['selectintro'] = 'Aktivieren Sie das Kontrollkästchen neben jedem Beitrag, den Sie aufnehmen möchten. Wenn Sie fertig sind,
scrollen Sie nach unten und klicken Sie auf  &lsquo;Auswahl bestätigen &lsquo;.';
$string['selectlabel'] = 'Beitrag wählen {$a}';
$string['selectorall'] = 'Möchten Sie die ganze Diskussion einbeziehen, oder nur ausgewählte Beiträge?';
$string['selectoralldisc'] = 'Alle Diskussionen gezeigt';
$string['selectordiscall'] = 'Möchten Sie alle Diskussionen einbeziehen, die auf dieser Seite aufgelistet sind, oder nur ausgewählte Diskussionen ?';
$string['selectorselectdisc'] = 'Diskussion wählen';
$string['selectorselecteddisc'] = 'Ausgewählte Diskussionen';
$string['sendanddelete'] = 'senden und löschen';
$string['set'] = 'Setzen';
$string['setflag'] = 'Diesen Beitrag markieren';
$string['setforumtags'] = 'Markierungen für das Forum setzen';
$string['setimportant'] = 'Beiträge als wichtig markieren';
$string['settag_label'] = 'Festlegen';
$string['settags'] = 'Diskussionsmarkierungen setzen';
$string['settags_help'] = 'Geben Sie forumweit \'Set\'-Tags (Komma-getrennt) zur Verwendung in Diskussionen an';
$string['shared'] = 'Erlauben, das Forum geteilt werden kann';
$string['shared_help'] = 'Aktivieren Sie dieses Kästchen, und legen Sie die ID-Nummer im Feld unten fest, um zu ermöglichen, dass dieses Forum
geteilt werden kann.

Dieses Forum wird zum ursprünglichen Forum. Sie können dann ein oder mehrere Exemplare dieses Forums
durch die Wahl <strong>Verwendung eines bestehenden gemeinsamen Forums</strong>, und die gleiche ID-Nummer vergeben beim Erstellen jedes Exemplars.';
$string['sharedinfo'] = 'Dies ist ein gemeinsames Forum. Die Zugangseinstellungen sind hier nicht freigegeben, und
gelten nur für Studierende, die auf das gemeinsame Forum von diesem besonderen Kurs zugreifen. Wenn Sie
weitere Einstellungen für das Forum bearbeiten möchten, klicken Sie auf <a href=\'{$a}\'>bearbeiten Sie die Original-Foreneinstellungen</a>.';
$string['sharedviewinfoclone'] = '<strong>Dies ist ein gemeinsames Forum</strong>. Das
<a href=\'{$a->url}\'>ursprüngliche Forum</a> ist in {$a->shortname}.';
$string['sharedviewinfolist'] = 'Es ist in dieser Liste enthalten: {$a}.';
$string['sharedviewinfonone'] = 'Es ist derzeit nicht in einem anderen Kurs enthalten.';
$string['sharedviewinfooriginal'] = '<strong>Dieses Forum wird gemeinsam genutzt</strong> unter dem Namen
<strong>{$a}</strong> für den Einsatz in anderen Kursen.';
$string['sharing'] = 'Forum freigeben';
$string['show_all'] = 'Alle anzeigen';
$string['showidnumber'] = 'ID-Nummern anzeigen';
$string['showusername'] = 'Benutzernamen anzeigen';
$string['skipstickydiscussions'] = 'Überspringen von umfangreichen Diskussionen';
$string['skiptofirstunread'] = 'Zum ersten ungelesenen Beitrag';
$string['sortby'] = 'Sortiert nach {$a}';
$string['sorted'] = 'sortiert {$a}';
$string['split'] = '<span class=\'accesshide\'> Beitrag {$a}</span> Trennen';
$string['splitinfo'] = 'Das Trennen dieses Beitrages wird diesen entfernen, und all seine Antworten, aus der aktuellen Dikussion.
Eine neue Diskussion wird erstellt (siehe unten).';
$string['splitpost'] = 'Beitrag trennen: {$a}';
$string['splitpostbutton'] = 'Beitrag als neue Diskussion trennen';
$string['standardratings'] = 'Bewertungen (Standard)';
$string['startdiscussion_groupaccess'] = 'Sie haben keine Berechtigung, um eine neue Diskussion in dieser Gruppe zu starten.';
$string['startdiscussion_nopermission'] = 'Sie haben keine Berechtigung, um eine neue Diskussion hier zu starten.';
$string['startdiscussion_postquota'] = 'Sie können im Moment keine neue Diskussion starten, weil Sie die maximale Anzahl an Beiträge erreicht haben.';
$string['startedby'] = 'Begonnen von';
$string['sticky'] = 'Angeheftete Diskussion?';
$string['sticky_help'] = 'Diese Option kann die Diskussion ganz oben in der Liste platzieren, auch wenn neure Diskussionen erstellt worden sind.

Angeheftete Diskussionen werden mit einem Pfeil-nach-oben-Symbol in der Diskussionsliste angezeigt. Sie können mehr als eine Angeheftete Diskussion haben.';
$string['sticky_no'] = 'Diskussion wird normal sortiert';
$string['sticky_yes'] = 'Diskussion immer am Anfang der Liste';
$string['studyadvice_noquestions'] = 'Niemand hat bisher eine Diskussion in diesem Studienberatungs-
Forum gestartet.';
$string['studyadvice_noyourquestions'] = 'Sie haben noch keine Diskussionen in diesem Studienberatungs-
Forum gestartet.';
$string['subject'] = 'Thema';
$string['subscribe'] = 'Dieses Forum abonnieren';
$string['subscribe_already'] = 'Sie haben bereits abonniert.';
$string['subscribe_already_group'] = 'Sie sind bereits bei dieser Gruppe angemeldet.';
$string['subscribe_confirm'] = 'Sie haben abonniert.';
$string['subscribe_confirm_group'] = 'Sie sind in der Gruppe angemeldet.';
$string['subscribed'] = 'abonniert';
$string['subscribeddiscussionall'] = 'Alle';
$string['subscribediscussion'] = 'Diskussion verfolgen';
$string['subscribedthisgroup'] = 'Diese Gruppe';
$string['subscribegroup'] = 'Abonnieren Sie das Forum dieser Gruppe';
$string['subscribelong'] = 'das ganze Forum abonnieren';
$string['subscribers'] = 'Abonnements';
$string['subscribers_nopermission'] = 'Sie haben keine Berechtigung, um die Teilnehmer/innen-Liste anzusehen.';
$string['subscribeshort'] = 'Forum abonnieren';
$string['subscribestart'] = 'Senden Sie mir E-Mail der Beiträge zu diesem Forum';
$string['subscribestate_discussionsubscribed'] = 'Sie erhalten Nachrichten aus dieser Diskussion per E-Mail an {$a}.';
$string['subscribestate_discussionunsubscribed'] = 'Sie erhalten zur Zeit keine Nachrichten per E-Mail von dieser Diskussion.
Wenn Sie Nachrichten erhalten möchten, klicken Sie auf &lsquo;Dikussion abonnieren&rsquo;.';
$string['subscribestate_forced'] = '(Dieses Forum ermöglicht es Ihnen nicht, sich abzumelden.)';
$string['subscribestate_groups_partiallysubscribed'] = 'Sie erhalten Nachrichten von einigen Gruppen aus diesem Forum per E-Mail: {$a}.';
$string['subscribestate_info'] = 'Deine E-Mail-Einstellungen {$a}:';
$string['subscribestate_no_access'] = 'Sie haben keinen Zugang per E-Mail zu diesem Forum .';
$string['subscribestate_not_permitted'] = 'Dieses Forum erlaubt keine E-Mail-Abonnement.';
$string['subscribestate_partiallysubscribed'] = 'Sie erhalten Nachrichten von einigen Diskussionen aus
diesem Forum per E-Mail: {$a}.';
$string['subscribestate_partiallysubscribed_thisgroup'] = 'Sie erhalten Nachrichten von einigen
Diskussionen aus dieser Gruppe per E-Mail: {$a}.';
$string['subscribestate_subscribed'] = 'Sie erhalten Nachrichten von diesem Forum per E-Mail: {$a}.';
$string['subscribestate_subscribed_notinallgroup'] = 'Klicken Sie &lsquo;Abmelden&rsquo; um sich abzumelden aus dem Forum.';
$string['subscribestate_subscribed_thisgroup'] = 'Sie erhalten Nachrichten aus dieser Gruppe per E-Mail: {$a}.';
$string['subscribestate_unsubscribed'] = 'Sie erhalten derzeit keine Nachrichten aus diesem Forum per
E-Mail. Wenn Sie möchten, klicken Sie auf "Forum abonnieren".';
$string['subscribestate_unsubscribed_thisgroup'] = 'Sie erhalten zur Zeit keine Nachrichten per E-Mail von diesem Forum. Wenn Sie Nachrichten erhalten möchten, klicken Sie auf &lsquo;Diese Gruppe abonnieren&rsquo;.';
$string['subscribestop'] = 'Ich möchte keine E-Mail Kopien der Beiträge zu diesem Forum';
$string['subscription'] = 'E-Mail-Abonnement';
$string['subscription_forced'] = 'Alle werden abonniert';
$string['subscription_help'] = 'Sie können jeden zwingen zu abonnieren. Oder setzen Sie alle als Abonnenten. Der Unterschied ist, dass im letzeren Fall die Benutzer/innen sich abmelden können.

Diese Optionen umfassen alle Benutzer/innen (Studierende und Mitarbeiter/innen), die im Kurs eingeschrieben sind. Benutzer/innen, die nicht zu diesem Kurs gehören (so wie Administratoren) können optional als Abonnenten bleiben.';
$string['subscription_initially_subscribed'] = 'Jeder ist zu Anfang Abonnent';
$string['subscription_not_permitted'] = 'Abonnieren ist nicht zulässig';
$string['subscription_permitted'] = 'Jeder kann wählen, ob er abonniert werden kann';
$string['subscriptions'] = 'Abonnents';
$string['switchto_simple_link'] = 'zur einfachen Ansicht wechseln.';
$string['switchto_simple_text'] = 'Die Standardansicht des Forums funktioniert nicht immer gut mit
der Hilfe-Funktion. Wir bieten auch eine einfachere Ansicht, die noch alle Funktionen enthält.';
$string['switchto_standard_link'] = 'zur Standardansicht wechseln.';
$string['switchto_standard_text'] = 'Sie verwenden die einfache Ansicht für dieses Forum, die mit der Hilfe-Funktion besser funktioniert.';
$string['tagarea_forumng'] = 'ForumNG Aktivität';
$string['tagarea_forumng_discussions'] = 'ForumNG Diskussionen';
$string['tagarea_groups'] = 'ForumNG Aktivitätsgruppen';
$string['tagcollection_forumng_discussions'] = 'ForumNG Diskussionen';
$string['tagcollection_forumng_group_set'] = 'ForumNG Aktivitätsgruppen';
$string['tagcollection_forumng_set'] = 'ForumNG Aktivität';
$string['tagging'] = 'Markieren';
$string['tagging_help'] = 'Aktivieren Sie Tags in diesem Forum und lassen Sie forumsweit die die Nutzung von Tags zu.';
$string['teacher_grades_students'] = 'Lehrer bewerten Studenten';
$string['text_asc'] = 'A-Z';
$string['text_desc'] = 'Z-A';
$string['timeend'] = 'Anzeigen bis';
$string['timestart'] = 'Anzeigen von';
$string['to'] = 'bis: {$a}';
$string['tooltip_show_features'] = 'andere Optionen anzeigen';
$string['trackreadposts'] = 'Verfolge ungelesenen Beiträge';
$string['undelete'] = 'Widerherstellen';
$string['undeletepost'] = 'Beitrag wiederherstellen: {$a}';
$string['undeletepostbutton'] = 'Beitrag wiederherstellen';
$string['unread'] = 'ungelesen';
$string['unsubscribe'] = 'Aus diesem Forum abmelden';
$string['unsubscribe_already'] = 'Sie sind bereits abgemeldet.';
$string['unsubscribe_already_group'] = 'Sie sind bereits aus dieser Gruppe abgemeldet.';
$string['unsubscribe_confirm'] = 'Sie wurden abgemeldet.';
$string['unsubscribe_confirm_group'] = 'Sie haben die Gruppe abbestellt.';
$string['unsubscribe_nopermission'] = 'Sie haben keine Berechtigung andere Benutzer/innen abzumelden.';
$string['unsubscribeall'] = 'Aus allen Foren abmelden';
$string['unsubscribediscussion'] = 'Diskussion nicht mehr verfolgen';
$string['unsubscribegroup'] = 'vom Forum dieser Gruppe abmelden';
$string['unsubscribegroup_partial'] = 'Aus Diskussionen in dieser Gruppe abmelden';
$string['unsubscribelong'] = 'Aus dem Forum abmelden';
$string['unsubscribeselected'] = 'Ausgewählte Benutzer/innen abmelden';
$string['unsubscribeshort'] = 'Abbestellen';
$string['usebcc'] = 'E-Mails mit BCC versenden';
$string['useshared'] = 'bestehendes Forum klonen';
$string['useshared_help'] = 'Wenn Sie ein bestehendes Forum klonen, verwenden Sie diese Checkbox
und geben Sie die ID-Nummer des ursprügnlichen Forums ein.';
$string['viewsubscribers'] = 'Abonnenten anzeigen';
$string['withremoveddiscussions'] = 'Diskussionen verschieben';
$string['withremoveddiscussions_help'] = 'Sie haben zwei Möglichkeiten für den Umgang mit gelöschten Diskussionen:
<ul><li>Löschen Sie sie dauerhaft; im Gegensatz zu der Standard-Löschfunktion, können diese nicht wiederhergestellt werden.
Diese Option könnte verwendet werden, um Speicherplatz in der Datenbank zu sparen.</li>
<li>Verschieben Sie sie in ein anderes Forum; zum Beispiel ein &lsquo;Archiv-Forum&rsquo;.
Sie können jedes Forum im gleichen Kurs wählen.</li></ul>';
$string['words'] = 'Suche';
$string['words_help'] = 'Geben Sie Ihren Suchbegriff ein und drücken Sie die Eingabetaste oder klicken Sie auf die Schaltfläche.

Um ein Wort auszuschliessen, fügen Sie unmittelbar einen Bindestrich vor dem Wort ein.

Beispiel: Suchbegriff <tt>picasso -sculpture &quot;early works&quot;</tt> als Suchergebnisse werden &lsquo;picasso&rsquo; or the phrase &lsquo;early works&rsquo; ausgegeben aber Elemente, die &lsquo;sculpture&rsquo enthalten, werden ausgeschlossen;.

Um nach Autor oder Datum zu suchen, Klicken Sie &lsquo;Mehr Optionen&rsquo;.

Wenn Sie dieses Feld leer lassen, werden alle Beiträge, die den Autor und / oder Datum Kriterien entsprechen zurückgegeben, unabhängig von ihrem Inhalt.';
$string['yourrating'] = 'Ihre Bewertung:';
