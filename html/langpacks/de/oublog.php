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
 * Strings for component 'oublog', language 'de', version '4.1'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Entschuldigung: Sie haben keinen Zugriff, um diese Seite zu sehen.';
$string['activeblogs'] = 'Aktiv';
$string['addcomment'] = 'Kommentar hinzufügen';
$string['addlink'] = 'Link hinzufügen';
$string['addpost'] = 'Beitrag hinzufügen';
$string['allowcomments'] = 'Kommentare erlauben';
$string['allowcomments_help'] = '‘Ja, von angemeldeten Benutzern’; erlaubt Kommentare von Benutzern, die Zugriff auf den Blog haben.

\'Ja, von allen\'; erlaubt Kommentare von Benutzern und der Öffenntlichkeit. Sie erhalten E-Mails, um Kommentare von nicht angemeldeten Benutzern zu genehmigen oder abzulehnen.

\'Nein\'; verhindert alle diesen Beitrag zu kommentieren.';
$string['allowcommentsmax'] = 'Kommentare erlauben, wenn beim Beitrag gewählt';
$string['allowimport'] = 'Beitragimport erlauben';
$string['allowimport_help'] = 'Anderen Teilnehmer/innen erlauben, Seiten von anderen Blogs, die sie selbst betreiben, hinzuzufügen.';
$string['allowimport_invalid'] = 'Beiträge können nur hinzugefügt werden, wenn die Aktivität im individuellen Modus eingestellt ist.';
$string['alpha'] = 'A bis Z';
$string['atom'] = 'Atom';
$string['atomfeed'] = 'Atom Feed';
$string['attachments'] = 'Anhänge';
$string['attachments_help'] = 'Sie dürfen Dateien an den Beitrag anhängen, wenn Sie möchten. Angehängte Bilder werden am Ende des Beitrags angezeigt.';
$string['blogfeed'] = 'Blog Feeds';
$string['bloginfo'] = 'Bloginformation';
$string['blogname'] = 'Name';
$string['blogoptions'] = 'Blogotionen';
$string['blogsummary'] = 'Beschreibung';
$string['cancel'] = 'Abbrechen';
$string['comment'] = 'Kommentar hinzufügen';
$string['commentalert'] = 'Kommentar melden';
$string['commentdated'] = 'Datum gesetzt';
$string['commentonby'] = 'Kommentar zu <u>{$a->title}</u> von <u>{$a->author}</u>';
$string['commentonbyusers'] = 'Kommentar <u>{$a->commenttitle}</u> zu Post <u>{$a->posttitle}</u> <br> von <u>{$a->author}</u>';
$string['commentposts'] = 'Meist kommentierte Beiträge';
$string['commentposts_info_alltime'] = 'Beiträge mit den meisten Kommentaren';
$string['commentposts_info_thismonth'] = 'Beiträge mit den meisten Kommentaren im letzten Monat';
$string['commentposts_info_thisyear'] = 'Beiträge mit den meisten Kommentaren im letzten Jahr';
$string['comments'] = 'Kommentare';
$string['commentsby'] = 'Kommentare von {$a}';
$string['commentsfeed'] = 'Nur Kommentare';
$string['commentsnotallowed'] = 'Kommentare sind nicht erlaubt';
$string['completioncomments'] = 'Benutzer muss Kommentare zu den Blog-Beiträgen abgeben:';
$string['completioncommentsgroup'] = 'Kommentare sind notwendig';
$string['completioncommentsgroup_help'] = 'Wenn Sie diese Option aktivieren, wird der Blog als vollständig für Studenten markiert, wenn sie die angegebene Anzahl der Kommentare hinterlassen haben.';
$string['completionposts'] = 'Benutzer müssen Blogeinträge erstellen:';
$string['completionpostsgroup'] = 'Beiträge sind notwendig';
$string['completionpostsgroup_help'] = 'Wenn Sie diese Option aktivieren, wird der Blog als vollständig für Studenten markiert, wenn sie die angegebene Anzahl der Beiträge erstellt haben.';
$string['computingguide'] = 'Anleitung für OU Blogs';
$string['computingguideurl'] = 'URL zur Anleitung';
$string['computingguideurlexplained'] = 'Geben Sie die URL für die OU Blogs Computing Leitfaden';
$string['configmaxattachments'] = 'Standardmäßig erlaubte maximale Anzahl von Anhängen pro Blogbeitrag.';
$string['configmaxbytes'] = 'maximale Standard-Größe für alle Blog-Anhänge auf der Seite. (vorbehaltlich Kurs-Limits und anderer lokaler Einstellungen)';
$string['confirmdeletecomment'] = 'Möchten Sie den Kommentar wirklich löschen?';
$string['confirmdeletelink'] = 'Möchten Sie den Link wirklich löschen?';
$string['confirmdeletepost'] = 'Sind Sie sich sicher, dass Sie den Beitrag löschen wollen?';
$string['contribution'] = 'Beteiligung';
$string['contribution_all'] = 'Beteiligung - Gesamt';
$string['contribution_from'] = 'Beteiligung - Von {$a}';
$string['contribution_fromto'] = 'Beteiligung - Von {$a->start} Bis {$a->end}';
$string['contribution_to'] = 'Beteiligung - Bis {$a}';
$string['copytoself'] = 'Eine Kopie an mich selbst schicken';
$string['couldnotaddcomment'] = 'Kommentar konnte nicht hinzugefügt werden';
$string['couldnotaddlink'] = 'Link konnte nicht hinzugefügt werden';
$string['defaultpersonalblogname'] = '{$a->name} ist {$a->displayname}';
$string['delete'] = 'Löschen';
$string['deleteandemail'] = 'Löschen und E-Mail';
$string['deletedblogpost'] = 'Beitrag ohne Titel';
$string['deletedby'] = 'Gelöscht von {$a->fullname}, {$a->timedeleted}';
$string['deleteemailpostbutton'] = 'Löschen und E-Mail';
$string['deleteemailpostdescription'] = 'Wählen zum Löschen des Beitrags oder Löschen und Senden einer angepassten E-Mailnachricht';
$string['deleteglobalblog'] = 'Sie können keinen Globalen Blog löschen';
$string['details'] = 'Details';
$string['discovery'] = '{$a} Benutzung';
$string['displayname'] = 'Alternativer Aktivitätsname (nichts eintragen benutzt den Standard)';
$string['displayname_default'] = 'Blog';
$string['displayperiod_help'] = '<p>Per Vorgabe werden alle Einträge gewählt.</p>
<p>Sie können alle Einträge \'Von\' einem Datum bis zum heutigen wählen</p>
<p>Sie können alle Einträge zwischen \'Von\' einem Datum und \'Bis\' zu einem Datum wählen</p>
<p>Oder Sie wählen vom ersten Eintrag \'Bis\' zu einem Datum</p>';
$string['displayversion'] = 'OU Blog Version: <strong>{$a}</strong>';
$string['downloadas'] = 'Daten herunterladen als';
$string['edit'] = 'Bearbeiten';
$string['editlink'] = 'Link bearbeiten';
$string['editonsummary'] = 'Bearbeitet {$a->editdate}';
$string['editpost'] = 'Eintrag aktualisieren';
$string['editsummary'] = 'Bearbeitet von {$a->editby}, {$a->editdate}';
$string['emailcontenthtml'] = 'Dies ist eine Benachrichtigung, um Sie darüber in Kenntnis zu setzen, dass Ihr {$a->activityname} - Beitrag, mit den folgenden Details, von \'{$a->firstname} {$a->lastname}\' gelöscht wurde:<br />
<br />
Betreff: {$a->subject}<br />
{$a->activityname}: {$a->blog}<br />
Kurs: {$a->course}<br />
<br />
<a href={$a->deleteurl} title="view deleted post">Zum gelöschten Beitrag</a>';
$string['emailerror'] = 'Fehler beim Senden der E-Mail';
$string['emailmessage'] = 'Nachricht';
$string['end'] = 'Bis';
$string['error_alreadyapproved'] = 'Kommentar bereits genehmigt oder abgelehnt';
$string['error_grouppubliccomments'] = 'Sie können keine öffentlichen Kommentare erlauben, wenn der Blog im Gruppen-Modus ist';
$string['error_moderatednotallowed'] = 'Moderierte Kommentare sind nicht mehr auf diesem Blog oder Blog-Beitrag erlaubet';
$string['error_noconfirm'] = 'Geben Sie den fett gedruckten Text oben in dieses Feld ein, genau wie angegeben.';
$string['error_toomanycomments'] = 'Sie haben zu viele Blog-Kommentare in der letzten Stunde von dieser Internet-Adresse abgegeben. Bitte warten Sie eine Weile, dann versuchen Sie es erneut.';
$string['error_unspecified'] = 'Das System kann diese Anfrage nicht abschließen, weil ein Fehler aufgetreten ist ({$a})';
$string['error_wrongkey'] = 'Kommentarschlüssel ist nicht korrekt';
$string['event:commentapproved'] = 'Kommentar genehmigt';
$string['event:commentcreated'] = 'Kommentar erstellt';
$string['event:commentdeleted'] = 'Kommentar gelöscht';
$string['event:participationviewed'] = 'Beteiligungsansicht';
$string['event:postcreated'] = 'Beitrag erstellt';
$string['event:postdeleted'] = 'Beitrag gelöscht';
$string['event:postimported'] = 'Beitrag importiert';
$string['event:postupdated'] = 'Beitrag aktualisiert';
$string['event:postviewed'] = 'Beitrag angeguckt';
$string['event:siteentriesviewed'] = 'Seiteneinträge angeguckt';
$string['exportedpost'] = 'Exportierter Beitrag';
$string['exportpostscomments'] = 'alle aktuell sichtbaren Beiträge und ihre Kommentare.';
$string['exportuntitledpost'] = 'Beitrag ohne Titel';
$string['externaldashboardadd'] = 'Blog zum Dashboard hinzufügen';
$string['externaldashboardremove'] = 'Blog vom Dashboard entfernen';
$string['extra_emails'] = 'E-Mailadresse anderer Empfänger';
$string['extra_emails_help'] = 'Geben Sie eine oder mehrere E-Mailadresse(n), getrennt durch Leerzeichen oder Semikolons, an.';
$string['extranavolderposts'] = 'Ältere Beiträge: {$a->from}-{$a->to}';
$string['extranavtag'] = 'Tag: {$a}';
$string['feedhelp'] = 'Feeds';
$string['feedhelp_help'] = 'Wenn Sie Feeds verwenden, können Sie Atom- oder RSS-Links hinzufügen, um sich über diesen Blog auf dem Laufenden zu halten. Die meisten Feed-Reader unterstützen Atom- und RSS-Feeds.

Wenn der Blog Kommentare erlaubt, gibt es Feeds für \'nur Kommentare\'.';
$string['feeds'] = 'Feeds';
$string['feedsnotenabled'] = 'Feeds sind nicht aktiviert';
$string['foruser'] = 'für {$a}';
$string['globalblogmissing'] = 'Der gobale Blog fehlt';
$string['globalusageexclude'] = 'Von globalen Nutzungsstatistiken ausschließen';
$string['gradesupdated'] = 'Bewertungen wurden aktualisiert';
$string['grading'] = 'Bewertung';
$string['grading_help'] = 'Wenn Sie diese Option auswählen, wird eine Bewertung dieses Blogs zum Kurs-Bewertungsbuch hinzugefügt und automatisch errechnet.
Wenn Sie diesen Blog manuell oder gar nicht bewerten möchten, lassen Sie diese Option aus.';
$string['group'] = 'Gruppe';
$string['guestblog'] = 'Wenn Sie einen Account auf diesem System haben, <a href=\'{$a}\'>melden Sie sich an</a>, um vollen Zugriff zu erhalten.';
$string['import'] = 'Beiträge importieren';
$string['import_step0_inst'] = 'Wählen Sie eine Aktivität aus, um Beiträge zu importieren von:';
$string['import_step0_nonefound'] = 'Sie haben keinen Zugriff auf Aktivitäten, von denen Beiträge importiert werden könnten.';
$string['import_step0_numposts'] = '({$a} Posts)';
$string['import_step1_all'] = 'Alles auswählen';
$string['import_step1_from'] = 'Importieren von:';
$string['import_step1_include_label'] = 'Beiträge importieren - {$a}';
$string['import_step1_inst'] = 'Wählen Sie zu importierende Beiträge';
$string['import_step1_none'] = 'Nichts auswählen';
$string['import_step1_removetag'] = 'Tag-Filter entfernen - {$a}';
$string['import_step1_submit'] = 'Beiträge importieren';
$string['import_step1_table_tags'] = 'Schlagworte';
$string['import_step1_table_title'] = 'Titel';
$string['import_step2_inst'] = 'Zu importierende Beiträge:';
$string['import_step2_none'] = 'Keine Beiträge zum Import ausgewählt';
$string['import_step2_prog'] = 'Import wird verarbeitet';
$string['import_step2_total'] = '{$a} Beiträge wurden importiert';
$string['includepost'] = 'Beitrag hinzufügen';
$string['individualblogs'] = 'Individuelle Blogs';
$string['individualblogs_help'] = '<p> <strong>Nein (Blog zusammen oder in Gruppe):</strong> <em>einzelne Blogs werden nicht verwendet</em> - es wurden keine einzelnen Blogs festgelegt, jeder ist Teil einer größeren Gemeinschaft (je nach "Gruppen-Modus"-Einstellung). </p><p> <strong>Separate einzelne Blogs :</strong> <em>einzelne Blogs werden privat genutzt</em> - Individuelle Benutzer können nur Beiträge erstellen und ihre eigene Blogs sehen, es sei denn, sie haben die Berechtigung ("viewindividual"), um andere einzelne Blogs zu sehen.
</p><p> <strong>Sichtbare einzelne Blogs:</strong> <em>Einzelne Blogs werden öffentlich verwendet</em> - einzelne Benutzer können nur Beiträge in ihren eigenen Blogs erstellen, aber sie können andere einzelne Blog-Beiträge sehen.</p>';
$string['invalidblog'] = 'Ungültige Blog-ID';
$string['invalidblogdetails'] = 'Keine Details zum Beitrag \'{$a}\' gefunden';
$string['invalidblogtags'] = 'Ungültige Blog-Tags';
$string['invalidcomment'] = 'Ungültige Kommentar-ID';
$string['invalidedit'] = 'Ungültige Bearbeitungs-ID';
$string['invalidformat'] = 'Das Format muss Atom oder RSS sein';
$string['invalidlink'] = 'Ungültige Link-ID';
$string['invalidpost'] = 'Ungültige Beitrags-ID';
$string['invalidpostid'] = 'Ungültige Beitrags-ID';
$string['invalidvisbilitylevel'] = 'Ungültige Sichtbarkeitsstufe {$a}';
$string['invalidvisibility'] = 'Ungültige Sichtbarkeitsstufe';
$string['lastcomment'] = '(Aktuellster Beitrag von {$a->fullname}, {$a->timeposted})';
$string['links'] = 'Verwandte Links';
$string['logincomments'] = 'Ja, nur von angemeldeten Personen';
$string['maxattachments'] = 'Maximale Anzahl an Dateianhängen';
$string['maxattachments_help'] = 'Diese Einstellung gibt die maximale Anzahl von Dateien vor, die zu einem Blog-Beitrag angehängt werden können.';
$string['maxattachmentsize'] = 'maximale Größe eines Anhangs';
$string['maxattachmentsize_help'] = 'Diese Einstellung gibt die maximale Größe einer Datei vor, die an einem Blog-Beitrag angehängt werden kann.';
$string['maxvisibility'] = 'Sichtbarkeit';
$string['maxvisibility_help'] = '<p><em>In einem persönlichen Blog:</em><strong>Sichtbar nur für den Blog-Eigentümer (privat)</strong> - niemand* sonst kann diesen Beitrag sehen.</p>
<p><em>In einem Kurs-Blog:</em><strong>Sichtbar für Teilnehmer/innen in diesem Kurs</strong> - um den Beitrag zu sehen, müssen Sie Zugriff auf den Blog haben, in der Regel, indem Sie im Kurs, der den Blog enthält, eingeschrieben sind.</p>

<p><strong>Sichtbar für alle, die in dem System angemeldet sind</strong> - jeder, der angemeldet ist, kann den Beitrag sehen, auch wenn sie nicht in einem bestimmten Kurs eingeschrieben sind.</p>
<p><strong>Sichtbar für jedermann in der Welt</strong> - jeder Internet-Nutzer kann diese Beitrag sehen, wenn sie die  Blog-Adresse kennen.</p>

<p>Diese Option gibt es im ganzen Blog sowie in einzelnen Beiträgen. Wenn die Option im gesamten Blog gesetzt wird, gilt dies als Maximum. Zum Beispiel, wenn der ganze Blog auf die erste Ebene eingestellt ist, können Sie die Ebene eines einzelnen Beitrags überhaupt nicht ändern.</p>';
$string['maybehiddenposts'] = 'Dieser Blog enthält möglicherweise Beiträge, die nur für angemeldete Benutzer sichtbar sind, oder wo nur angemeldete Benutzer kommentieren können. Wenn Sie einen Account im System haben, bitte <a href=\'{$a}\'>melden Sie sich für den vollen Blog-Zugriff an</a>.';
$string['message'] = 'Beitrag';
$string['moderated_addedcomment'] = 'Vielen Dank für das Hinzufügen Ihres Kommentars, der erfolgreich empfangen wurde. Ihr Kommentar wird erst angezeigt, wenn dieser vom Autor dieses Beitrags genehmigt wurde.';
$string['moderated_approve'] = 'Diesen Kommentar zulassen';
$string['moderated_authorname'] = 'Ihr Name';
$string['moderated_awaiting'] = 'Kommentare erfordern Genehmigung';
$string['moderated_awaitingnote'] = 'Diese Kommentare sind nicht für andere Benutzer sichtbar, bis Sie dies genehmigen. Beachten Sie, dass das System die Identität der Kommentatoren nicht kennt und Anmerkungen können Links enthalten, die, wenn ihnen gefolgt wird, die ernsthaft <strong>Ihren Rechner beschädigen können</strong>. Wenn Sie im Zweifel sind, lehnen Sie bitte die Kommentare ab, <strong>ohne die Links zu besuchen.</strong>';
$string['moderated_confirm'] = 'Bestätigung';
$string['moderated_confirminfo'] = 'Bitte geben Sie unten <strong>ja</strong> ein, um zu bestätigen, dass Sie eine Person sind.';
$string['moderated_confirmvalue'] = 'Ja';
$string['moderated_emailhtml'] = '<p>(Dies ist eine automatisch generierte E-Mail. Bitte antworten Sie nicht darauf.)</p>
<p>Jemand hat einen Kommentar zu Ihrem Blog-Eintrag hinzugefügt: {$a->postlink}</p>
<p>Sie müssen<strong>den Kommentar genehmigen,</strong> bevor dieser in der Öffentlichkeit erscheint.</p>
<p>Das System kennt die Identität der Kommentatoren nicht und Anmerkungen können Links enthalten, die, wenn ihnen gefolgt wird, sie ernsthaft <strong>Ihren Rechner beschädigen können</strong>.
Wenn Sie im Zweifel sind, lehnen bitte Sie die Kommentare ab, <strong>ohne die Links zu besuchen.</strong></p>
<p>Wenn Sie den Kommentar genehmigen, übernehmen Sie die Verantwortung für die Veröffentlichung. Stellen Sie sicher, das der Kommentar nichts enthält, was gegen die Regeln verstößt.</p>
<hr/>
<p>Name: {$a->commenter}</p>
<hr/>
<h3>{$a->commenttitle}</h3>
{$a->comment}
<hr/>
<ul class=\'oublog-approvereject\'>
<li><a href=\'{$a->approvelink}\'>{$a->approvetext}</a></li>
<li><a href=\'{$a->rejectlink}\'>{$a->rejecttext}</a></li>
</ul>
<p>
Sie können diese E-Mail auch ignorieren. Der Kommentar wird nach 30 Tagen automatisch abgelehnt.
</p>
<p>
Wenn Sie zu viele dieser E-Mails empfangen, sollten Sie das Kommentieren für eingeloggte Benutzer einschränken.
</p>
<ul class=\'oublog-restrict\'>
<li><a href=\'{$a->restrictpostlink}\'>{$a->restrictposttext}</a></li>
<li> <a href=\'{$a->restrictbloglink}\'>{$a->restrictblogtext}</a></li>
</ul>';
$string['moderated_emailsubject'] = 'Kommentar erfordert die Genehmigung in: {$a->blog} ({$a->commenter})';
$string['moderated_emailtext'] = 'Dies ist eine automatisch generierte E-Mail. Bitte antworten Sie nicht darauf.

Jemand hat einen Kommentar zu Ihrem Blog-Eintrag hinzugefügt: {$a->postlink}

Sie müssen den Kommentar genehmigen, bevor dieser in der Öffentlichkeit erscheint.

Das System kennt die Identität der Kommentatoren nicht und Anmerkungen können Links enthalten, die, wenn Sie Ihnen folgen, könnte Ihr Rechner ernsthaft beschädigt werden.
Wenn Sie im Zweifel sind, lehnen Sie bitte die Kommentare ab, ohne die Links zu besuchen.

Wenn Sie den Kommentar genehmigen, übernehmen Sie die Verantwortung für die Veröffentlichung. Stellen Sie sicher, das der Kommentar nichts enthält, was gegen die Regeln verstößt.

-----------------------------------------------------------------------
Name: {$a->commenter}
-----------------------------------------------------------------------
{$a->commenttitle}
{$a->comment}
-----------------------------------------------------------------------

* {$a->approvetext}:
  {$a->approvelink}

* {$a->rejecttext}:
  {$a->rejectlink}

Sie können diese E-Mail auch ignorieren. Der Kommentar wird nach 30 Tagen automatisch abgelehnt.

Wenn Sie zu viele dieser E-Mails empfangen, können Sie das Kommentieren für eingeloggte Benutzer einschränken.

* {$a->restrictposttext}:
  {$a->restrictpostlink}

* {$a->restrictblogtext}:
  {$a->restrictbloglink}';
$string['moderated_info'] = 'Da Sie nicht eingeloggt sind, wird Ihr Kommentar nur angezeigt werden, nachdem dieser genehmigt worden ist. Wenn Sie einen Acount im System haben, <a href=\'{$a}\'>melden Sie sich bitte für den vollen Blog-Zugriff an</a>.';
$string['moderated_postername'] = 'Verwendung des Namens <strong>{$a}</strong>';
$string['moderated_reject'] = 'Kommentar zurückweisen';
$string['moderated_rejectedon'] = 'Zurückgewiesen {$a}:';
$string['moderated_restrictblog'] = 'Beschränken Sie das Kommentieren in all Ihren Beiträgen in diesem Blog';
$string['moderated_restrictblog_info'] = 'Möchten Sie das Kommentieren in all Ihren Beiträge in diesem Blog einschränken, so dass nur Menschen, die im System eingeloggt sind, Kommentare hinzufügen können?';
$string['moderated_restrictpage'] = 'Kommentieren Einschränken';
$string['moderated_restrictpost'] = 'Kommentieren in diesem Beitrag einschränken';
$string['moderated_restrictpost_info'] = 'Möchten Sie die Kommentare in diesem Beitrag einschränken, so dass nur Menschen, die im System eingeloggt sind, Kommentare hinzufügen können?';
$string['moderated_submitted'] = 'Moderation erfordert';
$string['moderated_typicaltime'] = 'In der Vergangenheit wurde dies in der Regel in {$a} erledigt.';
$string['modulename'] = 'OU Blog';
$string['modulename_help'] = 'Das Aktivitäts-Modul Blog erlaubt die Erstellung von Blogs in einem Kurs (separat vom Standar- Moodle-Blog-System). Sie können zwischen Kurs-Blogs (alle Teilnehmer im Kurs erstellen Beiträge im gleichen Blog), Gruppen-Blogs oder Einzel-Blogs auswählen.';
$string['modulenameplural'] = 'OU Blogs';
$string['mustprovidepost'] = 'Beitrag-ID muss angegeben werden';
$string['myparticipation'] = 'Meine Mitarbeit';
$string['ncomments'] = '{$a} Kommentare';
$string['newblogposts'] = 'Neue Beiträge';
$string['newcomment'] = 'Neue Kommentare';
$string['newerposts'] = 'Neuere Beiträge &gt;';
$string['newpost'] = 'Neuer Beitrag';
$string['no'] = 'Nein';
$string['no_blogtogetheroringroups'] = 'Nein';
$string['noblogposts'] = 'Keine Beiträge';
$string['nocomments'] = 'Kommentare nicht erlaubt';
$string['noposts'] = 'Keine sichtbaren Beiträge in diesem Blog';
$string['notaddpost'] = 'Beitrag konnte nicht hinzugefügt werden';
$string['notaddpostnogroup'] = 'Beitrag kann nicht ohne Gruppe hinzugefügt werden';
$string['nousercomments'] = 'Dieser Benutzer hat keine Kommentare in diesem Blog hinzugefügt.';
$string['nouserposts'] = 'Dieser Benutzer hat keine Beiträge in diesem Blog erstellt.';
$string['npending'] = '{$a} Kommentare erfordern ein Genehmigung';
$string['npendingafter'] = ', {$a} erfordert eine Genehmigung';
$string['numposts'] = '{$a} Beiträge';
$string['olderposts'] = '&lt; Ältere Beiträge';
$string['onecomment'] = '{$a} Kommentar';
$string['onepending'] = '{$a} Kommentar erfordert ein Genehmigung';
$string['onependingafter'] = ', {$a} erfordert eine Genehmigung';
$string['onlyworkspersonal'] = 'Funktioniert nur mit persönlichen Blogs';
$string['oublog'] = 'OU Blog';
$string['oublog:addinstance'] = 'OU Blog anlegen';
$string['oublog:audit'] = 'Gelöschte und alte Versionen anzeigen';
$string['oublog:comment'] = 'Beitrag kommentieren';
$string['oublog:contributepersonal'] = 'Beiträge und Kommentare in persönlichen Blogs schreiben';
$string['oublog:exportownpost'] = 'Eigenen Beitrag exportieren';
$string['oublog:exportpost'] = 'Beitrag exportieren';
$string['oublog:exportposts'] = 'Beiträge exportieren';
$string['oublog:grade'] = 'OU Blog Beteiligung der Nutzer bewerten';
$string['oublog:managecomments'] = 'Kommentare verwalten';
$string['oublog:managelinks'] = 'Links verwalten';
$string['oublog:manageposts'] = 'Beiträge verwalten';
$string['oublog:post'] = 'Neuen Beitrag hinzufügen';
$string['oublog:view'] = 'Beiträge sehen';
$string['oublog:viewindividual'] = 'Individuelle Blogs anzeigen';
$string['oublog:viewparticipation'] = 'OU Blog Beteiligung der Nutzer sehen';
$string['oublog:viewpersonal'] = 'Beiträge in perönlichen Blogs anzeigen';
$string['oublogintro'] = 'Einführung';
$string['overviewnumentrylog'] = 'Einträge seit dem letzten Login';
$string['overviewnumentrylog1'] = 'Eintrag seit dem letzten Login';
$string['overviewnumentryvw'] = 'Einträge seit dem letzten Ansehen';
$string['overviewnumentryvw1'] = 'Eintrag seit dem letzten Ansehen';
$string['participation'] = 'Teilnahme';
$string['participationbyuser'] = 'Die Teilnahme von Benutzer';
$string['permalink'] = 'Permalink';
$string['personalblognotsetup'] = 'Persönliche Blogs sind nicht aktiviert';
$string['pluginadministration'] = 'OU Blog Administration';
$string['pluginname'] = 'OU Blog';
$string['postauthor'] = 'Beitragsautor';
$string['postdate'] = 'Beitragsdatum';
$string['postedby'] = 'von {$a}';
$string['postedbymoderated'] = 'von {$a->commenter} (genehmigt durch {$a->approver}, {$a->approvedate})';
$string['postedbymoderatedaudit'] = 'on {$a->commenter} [{$a->ip}] (genehmigt durch {$a->approver}, {$a->approvedate})';
$string['posts'] = 'Beiträge';
$string['postsby'] = 'Beiträge von {$a}';
$string['posttime'] = 'Veröffentlichungszeitpunkt';
$string['posttitle'] = 'Überschrift senden';
$string['publiccomments'] = 'Ja, von allen (auch ohne Anmeldung)';
$string['publiccomments_info'] = 'Wenn jemand einen Kommentar hinzugefügt, wenn er/sie nicht angemeldet ist, erhalten Sie eine Benachrichtigung per E-Mail und können den Kommentar für die Anzeige genehmigen oder ablehnen. Dies ist notwendig, um Spam zu verhindern.';
$string['re'] = 'Antwort: {$a}';
$string['removeblogs'] = 'Entfernen Sie alle Blog-Einträge';
$string['rss'] = 'RSS';
$string['rssfeed'] = 'RSS Feed';
$string['savegrades'] = 'Bewertungen sichern';
$string['searchblogs'] = 'Blogs durchsuchen';
$string['searchthisblog'] = 'Diesen Blog durchsuchen';
$string['separateindividual'] = 'Getrennte Personen';
$string['separateindividualblogs'] = 'Getrennte individuelle Blogs';
$string['siteentries'] = 'Beiträge der Website sehen';
$string['subscribefeed'] = 'Abonnieren Sie einen Feed (erfordert entsprechende Software), um eine Benachrichtigung zu erhalten, wenn dieser Blog aktualisiert wird.';
$string['summary'] = 'Beschreibung';
$string['tags'] = 'Schlagworte';
$string['tags_help'] = 'Schlagworte helfen, Beiträge im Blog zu kategorisieren und zu finden';
$string['tagsfield'] = 'Schlagworte (kommagetrennt)';
$string['tagupdatefailed'] = 'Schlagworte konnten nicht aktualisiert werden';
$string['title'] = 'Überschrift';
$string['unsupportedbrowser'] = '<p>Ihr Browser kann leider keine Atom-oder RSS-Feeds direkt anzeigen.</p>
<p>Feeds sind sehr nützlich in separaten Computer-Programmen oder Websites. Wenn Sie diesen Feed in einem solchen Programm verwenden möchten, kopieren und fügen Sie die Adresse aus der Adresszeile Ihres Browsers. </p>';
$string['url'] = 'Vollständige Webadresse';
$string['usergrade'] = 'Nutzerbewertung';
$string['userparticipation'] = 'Nutzermitarbeit';
$string['viewallusers'] = 'Alle Nutzer/innen sehen';
$string['viewallusersingroup'] = 'Alle Gruppenmitglieder anzeigen';
$string['viewblogdetails'] = 'Blogdetails anzeigen';
$string['viewblogposts'] = 'Zurück zum Blog';
$string['viewedit'] = 'Bearbeitung anzeigen';
$string['views'] = 'Anzahl der Besuche in diesem Blog';
$string['visibility'] = 'Wer kann das lesen?';
$string['visibility_help'] = '<p><strong>Sichtbar für Teilnehmer/innen an diesem Kurs</strong> - um den Beitrag zu sehen, müssen Sie Zugriff auf den Blog haben, in der Regel, indem Sie im Kurs, der den Blog enthält, eingeschrieben sind.</p>

<p><strong>Sichtbar für alle, die in dem System angemeldet sind</strong> - jeder, der angemeldet ist, kann den Beitrag sehen, auch wenn er/sie nicht in einem bestimmten Kurs eingeschrieben ist.</p>
<p><strong>Sichtbar für jedermann in der Welt</strong> - jeder Internet-Nutzer kann diesen Beitrag sehen, wenn sie die Blog-Adresse kennen.</p>';
$string['visibleblogusers'] = 'Sichtbar nur für Mitglieder des Blogs';
$string['visiblecourseusers'] = 'Sichtbar für Teilnehmer/innen des Kurses';
$string['visibleindividual'] = 'Sichtbare Personen';
$string['visibleindividualblogs'] = 'Sichtbare individuelle Blogs';
$string['visibleloggedinusers'] = 'Sichtbar für alle angemeldeten Personen';
$string['visiblepublic'] = 'Sichtbar für alle (auch ohne Anmeldung)';
$string['visibleyou'] = 'Sichtbar nur für Autor/in (privat)';
$string['yes'] = 'Ja';
