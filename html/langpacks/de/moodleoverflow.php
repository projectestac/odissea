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
 * Strings for component 'moodleoverflow', language 'de', version '3.11'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Neues Thema hinzufügen';
$string['addanewreply'] = 'Neue Antwort hinzufügen';
$string['allowanonymous'] = 'Anonyme Foren erlauben';
$string['allowanonymous_desc'] = 'Trainer/innen erlauben, Moodleoverflow-Foren als teilweise oder vollständig anonyme Foren einzustellen';
$string['allowcoursereputation'] = 'Reputation innerhalb eines Kurses addieren.';
$string['allowdisablerating'] = 'Trainer/innen erlauben, die Reputation und Bewertungen zu deaktivieren';
$string['allownegativereputation'] = 'Negative Reputation erlauben?';
$string['allownegativereputation_help'] = 'Wenn ja, kann die Reputation der Nutzer/innen innerhalb eines Kurses oder Moduls negativ sein. Wenn nein, kann die Reputation nicht unter Null sinken.';
$string['allowrating'] = 'Bewertungen von Beiträgen erlauben?';
$string['allowrating_help'] = 'Wenn ja, können Nutzer/innen die Beiträge positiv oder negativ bewerten, um Leser/innen eine Idee zu geben, wie hilfreich der Beitrag für andere Personen ist. Wenn nein, werden Bewertungen deaktiviert.';
$string['allowratingchange'] = 'Bewertungsänderungen erlauben';
$string['allowreputation'] = 'Reputation erlauben?';
$string['allowreputation_help'] = 'Wenn ja, können Nutzer/innen Reputation gewinnen oder verlieren je nachdem wie andere  Nutzer/innen ihre Beiträge bewerten. Wenn nein wird die Nutzerreputation deaktiviert.';
$string['allsubscribe'] = 'Alle Foren abonnieren';
$string['allunsubscribe'] = 'Alle Foren abbestellen';
$string['anonym_you'] = 'Anonym (Du)';
$string['anonymous'] = 'Anonym';
$string['anonymous:everything'] = 'Fragen und Antworten (unwiderruflich!)';
$string['anonymous:only_questions'] = 'Nur Fragen (unwiderruflich!)';
$string['anonymous_help'] = 'Der Nutzername wird in allen Fragen (und Antworten) verborgen.<br>WARNUNG: Sobald die Fragen (und Antworten) anonymisiert sind, kann dies nicht wieder rückgängig gemacht werden.<br>Die Einstellung kann nur auf einen höheren Grad der Anonymität geändert werden.';
$string['answer'] = '{$a} Antwort';
$string['answerer'] = 'Antwortende Person #{$a}';
$string['answers'] = '{$a} Antworten';
$string['areaattachment'] = 'Anhänge';
$string['areapost'] = 'Beiträge';
$string['attachment'] = 'Anhang';
$string['attachment_help'] = 'Sie dürfen eine oder mehrere Dateien an einen Beitrag anhängen. Ein angehängtes Bild wird am Ende des Beitrags angezeigt.';
$string['attachments'] = 'Anhänge';
$string['bestanswer'] = 'Dies wurde als beste Antwort ausgewählt.';
$string['bynameondate'] = 'von {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'von {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'Das neue Thema konnte nicht erstellt werden.';
$string['cannotdeletepost'] = 'Sie können diesen Beitrag nicht löschen!';
$string['cannotfindparentpost'] = 'Der erste Beitrag in diesem Thema {$a} konnte nicht gefunden werden';
$string['cannotreply'] = 'Sie können nicht auf diesen Beitrag antworten.';
$string['cannottrack'] = 'Das Tracking des Forums konnte nicht beendet werden.';
$string['cannotunsubscribe'] = 'Sie konnten nicht aus dem Forum abgemeldet werden.';
$string['cannotupdatepost'] = 'Sie können den Beitrag nicht aktualisieren.';
$string['cleanreadtime'] = '\'Gelesen\' zu diesen Zeitpunkt markieren';
$string['clicktosubscribe'] = 'Sie haben dieses Thema nicht abonniert. Klicken Sie, um es zu abonnieren.';
$string['clicktounsubscribe'] = 'Sie haben dieses Thema abonniert. Klicken Sie, um es abzubestellen.';
$string['configallowcoursereputation'] = 'Soll die Reputation von allen Instanzen in dem aktuellen Kurs addiert werden?';
$string['configallowdisablerating'] = 'Setzen Sie es auf \'Ja\', wenn Sie Trainer/innen erlauben möchten, Bewertungen und Reputationen zu deaktivieren.';
$string['configallowratingchange'] = 'Darf die Bewertung geändert werden?';
$string['configcleanreadtime'] = 'Ältere Beiträge werden täglich zu dieser Zeit (Stunde) als \'gelesen\' markiert.';
$string['configforcedreadtracking'] = 'Erlaubt, dass Foren die Einstellung setzen, dass der "Gelesen"-Status angezeigt werden muss. Dies kann die Perfomance für einige Nutzer/innen reduzieren, insbesondere in Kursen mit vielen Foren und Beiträgen. Wenn diese Einstellung deaktiviert wird, werden alle bisherigen Einstellungen in Foren, die vorher auf "Verpflichtend" standen als optional angesehen.';
$string['configmanydiscussions'] = 'Anzahl von Themen pro Seite';
$string['configmaxattachments'] = 'Voreinstellung für die Anzahl von Anhängen, die pro Beitrag in einem Forum erlaubt sind';
$string['configmaxbytes'] = 'Voreinstellung für die Dateigröße von Anhängen in Foren auf dieser Website (je nach Kurs oder durch andere lokale Einstellungen weiter eingeschränkt)';
$string['configmaxeditingtime'] = 'Die Voreinstellung für den Zeitraum, während welchem ein Beitrag editiert werden darf, beträgt 3600 Sekunden (= eine Stunde)';
$string['configmaxmailingtime'] = 'Anzahl der Stunden, nach deinen eine neue Nachricht nicht mehr per Mail an die Nutzer/innen versendet wird. Dies verhindert Probleme, wenn der Cron Job für eine längere Zeit nicht gelaufen ist.';
$string['configoldpostdays'] = 'Anzahl der Tage, nach denen eine neue Nachricht automatisch als gelesen gilt.';
$string['configpreferteachersmark'] = 'Die von dem Kursverantwortlichen als Lösung markierte Antwort wird gegenüber der vom Fragesteller als hilfreich markierten Antwort priorisiert.';
$string['configreputationnotnegative'] = 'Verhindert, dass die Reputation von Nutzer/innen negativ sein kann.';
$string['configtrackingtype'] = 'Voreinstellung für die Markierung gelesen/ungelesen.';
$string['configtrackmoodleoverflow'] = 'Wenn dieses Option aktiviert ist, steht die Markierung gelesen/ungelesen für alle zur Verfügung.';
$string['configvotescaledownvote'] = 'Höhe der Reputation, die eine negative Bewertung für einen Beitrag gibt.';
$string['configvotescalehelpful'] = 'Höhe der Reputation, die eine Bewertung als "hilfreich" für einen Beitrag gibt.';
$string['configvotescalesolved'] = 'Höhe der Reputation, die eine Bewertung als Lösung für einen Beitrag gibt.';
$string['configvotescaleupvote'] = 'Höhe der Reputation, die eine positive Bewertung für einen Beitrag gibt.';
$string['configvotescalevote'] = 'Die Höhe der Reputation, die es beim Bewerten gibt.';
$string['confirmsubscribe'] = 'Möchten Sie wirklich das Forum \'{$a}\' abonnieren?';
$string['confirmsubscribediscussion'] = 'Möchten Sie wirklich das Thema \'{$a->discussion}\' im Forum \'{$a->moodleoverflow}\' abonnieren?';
$string['confirmunsubscribe'] = 'Möchten Sie wirklich das Forum \'{$a}\' abbestellen?';
$string['confirmunsubscribediscussion'] = 'Möchten Sie wirklich das Thema \'{$a->discussion}\' im Forum \'{$a->moodleoverflow}\' abbestellen?';
$string['couldnotadd'] = 'Der Beitrag wurde wegen eines Fehlers nicht hinzugefügt.';
$string['couldnotdeletereplies'] = 'Der Beitrag darf nicht gelöscht werden, weil es dazu bereits Antworten gibt.';
$string['couldnotupdate'] = 'Der Beitrag wurde wegen eines Fehlers nicht aktualisiert.';
$string['coursewidereputation'] = 'Soll die Reputation über die verschiedenen Module hinweg berechnet werden?';
$string['coursewidereputation_help'] = 'Wenn ja, wird die Reputation der Nutzer/innen von allen Moodleoverflow Modulen in diesem Kurs summiert.';
$string['crontask'] = 'Moodleoverflow Cronjob';
$string['delete'] = 'Löschen';
$string['deletesure'] = 'Möchten Sie diesen Beitrag wirklich löschen?';
$string['deletesureplural'] = 'Möchten Sie diesen Beitrag und alle Antworten wirklich löschen? ({$a} Beiträge)';
$string['desc:anonymous'] = 'Namen werden nicht angezeigt.';
$string['desc:only_questions'] = 'Der Name der fragenden Person wird in Fragen und Kommentaren nicht angezeigt.';
$string['disallowsubscribe'] = 'Das Forum kann nicht abonniert werden';
$string['discussionlocked'] = 'Dieses Thema wurde gesperrt, daher können Sie nicht mehr darauf antworten.';
$string['discussionname'] = 'Thema';
$string['discussionnownotsubscribed'] = '{$a->name} wird nicht über neue Beiträge in \'{$a->discussion}\' von \'{$a->moodleoverflow}\' informiert';
$string['discussionnowsubscribed'] = '{$a->name} wird über neue Beiträge in \'{$a->discussion}\' von \'{$a->moodleoverflow}\' informiert';
$string['discussions'] = 'Themen';
$string['discussionsubscription'] = 'Abonnieren des Themas';
$string['discussionsubscription_help'] = 'Wenn Sie ein Thema abonnieren, werden Sie Benachrichtigungen erhalten, wenn neue Beiträge dem Thema hinzugefügt werden.';
$string['downvote'] = 'Negative Bewertung';
$string['downvotenotchangeable'] = 'Negative Bewertung (nicht veränderbar)';
$string['edit'] = 'Bearbeiten';
$string['editedby'] = 'Geändert von {$a->name} - Originaleintrag {$a->date}';
$string['editedpostupdated'] = '{$a}s Beitrag wurde aktualisiert';
$string['erroremptymessage'] = 'Die Mitteilung darf nicht leer sein.';
$string['erroremptysubject'] = 'Der Betreff darf nicht leer sein.';
$string['errorwhiledelete'] = 'Beim Löschen des Beitrags ist ein Fehler aufgetreten.';
$string['eventdiscussioncreated'] = 'Thema wurde erstellt';
$string['eventdiscussiondeleted'] = 'Thema wurde gelöscht';
$string['eventdiscussionsubscriptioncreated'] = 'Thema wurde abonniert';
$string['eventdiscussionsubscriptiondeleted'] = 'Thema wurde abbestellt';
$string['eventdiscussionviewed'] = 'Thema wurde angeschaut';
$string['eventpostcreated'] = 'Beitrag wurde erstellt';
$string['eventpostdeleted'] = 'Beitrag wurde gelöscht';
$string['eventpostupdated'] = 'Beitrag wurde aktualisiert';
$string['eventratingcreated'] = 'Bewertung wurde erstellt';
$string['eventratingdeleted'] = 'Bewertung wurde gelöscht';
$string['eventratingupdated'] = 'Bewertung wurde aktualisiert';
$string['eventreadtrackingdisabled'] = 'Markierung gelesen/ungelesen wurde deaktiviert';
$string['eventreadtrackingenabled'] = 'Markierung gelesen/ungelesen wurde aktiviert';
$string['eventsubscriptioncreated'] = 'Abonnement wurde erstellt';
$string['eventsubscriptiondeleted'] = 'Abonnement wurde gelöscht';
$string['everyonecannowchoose'] = 'Alle dürfen jetzt entscheiden, ob sie das Forum abonnieren';
$string['everyoneisnowsubscribed'] = 'Alle haben jetzt dieses Forum abonniert';
$string['everyoneissubscribed'] = 'Alle haben dieses Forum abonniert';
$string['forcedreadtracking'] = 'Erlaubt, dass die Markierung gelesen/ungelesen verpflichtend ist';
$string['generalmoodleoverflows'] = 'Foren in diesem Kurs';
$string['gotoindex'] = 'Einstellungen verwalten';
$string['grademaxgradeerror'] = 'Maximale Bewertung muss eine positive Ganzzahl sein, die nicht 0 ist.';
$string['gradesreport'] = 'Bewertungsbericht';
$string['gradesupdated'] = 'Bewertung aktualisiert';
$string['headerdiscussion'] = 'Thema';
$string['headerlastpost'] = 'Letzter Beitrag';
$string['headerreplies'] = 'Antworten';
$string['headerstartedby'] = 'Begonnen von';
$string['headerstatus'] = 'Status';
$string['headerunread'] = 'Ungelesen';
$string['headervotes'] = 'Bewertungen';
$string['helpfulanswer'] = 'Der Fragesteller hat diese Antwort als beste Antwort ausgewählt.';
$string['hiddenmoodleoverflowpost'] = 'Verborgener Forum Beitrag';
$string['invaliddiscussionid'] = 'Falsche Themen-ID';
$string['invalidforcesubscribe'] = 'Falscher Modus beim Abonnement';
$string['invalidmoodleoverflowid'] = 'Falsche Foren-ID';
$string['invalidparentpostid'] = 'Vorgänger Beitrags-ID war ungültig.';
$string['invalidpostid'] = 'Ungültige Beitrags-ID {$a}';
$string['invalidratingid'] = 'Die abgegebene Bewertung ist weder positiv noch negativ.';
$string['mailindexlink'] = 'Änderung Ihrer Forum Einstellungen: {$a}';
$string['manydiscussions'] = 'Themen pro Seite';
$string['markallread'] = 'Alle Beiträge in diesem Forum als gelesen markieren';
$string['markdiscussionreadsuccessful'] = 'Dieses Thema wurde als gelesen markiert.';
$string['markhelpful'] = 'Als hilfreich markieren';
$string['markmoodleoverflowreadsuccessful'] = 'Alle Beiträge wurden als gelesen markiert.';
$string['marknothelpful'] = 'Nicht mehr als hilfreich markieren';
$string['marknotsolved'] = 'Nicht mehr als Lösung markieren';
$string['markread'] = 'Als gelesen markieren';
$string['markreadfailed'] = 'Ein Beitrag in diesem Thema konnte nicht als gelesen markiert werden.';
$string['marksolved'] = 'Als Lösung markieren';
$string['markunread'] = 'Als ungelesen markieren';
$string['maxattachments'] = 'Maximale Anzahl der Anhänge';
$string['maxattachments_help'] = 'Diese Einstellung legt fest, wie viele Anhänge maximal pro Beitrag in diesem Forum erlaubt sind.';
$string['maxattachmentsize'] = 'Maximale Dateigröße';
$string['maxattachmentsize_help'] = 'Diese Einstellung legt fest, welche maximale Dateigröße pro Anhang in diesem Forum erlaubt ist.';
$string['maxeditingtime'] = 'Zeitraum, während dem ein eigener Beitrag bearbeitet werden kann (in Sekunden)';
$string['maxmailingtime'] = 'Anzahl von Stunden, nach denen neue Beiträge nicht mehr per Mail versendet werden.';
$string['message'] = 'Mitteilung';
$string['messageprovider:posts'] = 'Benachrichtigung neuer Beiträge';
$string['modulename'] = 'Moodleoverflow';
$string['modulename_help'] = 'Das Moodleoverflow-Modul ermöglicht es Teilnehmer/innen eine Frage-Antwort Forum Struktur zu nutzen. Die Beiträge im Forum werden nicht chronologisch angezeigt, sondern nach ihrer Bewertung geordnet.';
$string['modulenameplural'] = 'Moodleoverflows';
$string['moodleoverflow'] = 'Moodleoverflow';
$string['moodleoverflow:addinstance'] = 'Neue Moodleoverflow Instanz hinzufügen';
$string['moodleoverflow:allowforcesubscribe'] = 'Verpflichtende Abonnements erlauben';
$string['moodleoverflow:createattachment'] = 'Anhänge hinzufügen';
$string['moodleoverflow:deleteanypost'] = 'Alle Beiträge löschen';
$string['moodleoverflow:deleteownpost'] = 'Eigene Beiträge löschen';
$string['moodleoverflow:editanypost'] = 'Alle Beiträge bearbeiten';
$string['moodleoverflow:managesubscriptions'] = 'Abonnent/innen verwalten';
$string['moodleoverflow:marksolved'] = 'Einen Beitrag als Lösung markieren';
$string['moodleoverflow:ratehelpful'] = 'Einen Beitrag als hilfreich markieren';
$string['moodleoverflow:ratepost'] = 'Einen Beitrag bewerten';
$string['moodleoverflow:replypost'] = 'Auf Beiträge antworten';
$string['moodleoverflow:startdiscussion'] = 'Neues Thema beginnen';
$string['moodleoverflow:view'] = 'Themenliste sehen';
$string['moodleoverflow:viewanyrating'] = 'Bewertungen sehen';
$string['moodleoverflow:viewdiscussion'] = 'Themen sehen';
$string['moodleoverflowauthorhidden'] = 'Autor/in (verborgen)';
$string['moodleoverflowbodyhidden'] = 'Sie können diesen Beitrag nicht ansehen. Entweder haben Sie selbst in dieser Diskussion noch nichts geschrieben oder die Bearbeitungszeit für den Beitrag läuft noch.';
$string['moodleoverflowfieldset'] = 'Benutzerdefiniertes Beispielfeld';
$string['moodleoverflowname'] = 'Moodleoverflow Name';
$string['moodleoverflows'] = 'Moodleoverflows';
$string['moodleoverflowsubjecthidden'] = 'Betreff (verborgen)';
$string['nodiscussions'] = 'Keine Themen im Forum';
$string['nodownvote'] = 'Keine negativen Bewertungen';
$string['noguestpost'] = 'Gäste dürfen keine Forumsbeiträge schreiben.';
$string['noguesttracking'] = 'Gäste dürfen keine Einstellungen vornehmen.';
$string['noonecansubscribenow'] = 'Abonnements sind jetzt nicht erlaubt';
$string['nopermissiontosubscribe'] = 'Sie haben nicht das Recht, die Liste der Abonnenten im Forum anzuzeigen.';
$string['nopostmoodleoverflow'] = 'Sie dürfen in diesem Forum keine Beiträge schreiben.';
$string['noratemoodleoverflow'] = 'Sie dürfen in diesem Forum keine Beiträge bewerten.';
$string['noratingchangeallowed'] = 'Sie dürfen ihre Bewertungen nicht ändern.';
$string['notexists'] = 'Diskussion existiert nicht mehr';
$string['notpartofdiscussion'] = 'Dieser Beitrag ist nicht Teil einer Diskussion!';
$string['notrackmoodleoverflow'] = 'Ungelesene Beiträge nicht markieren';
$string['notstartuser'] = 'Nur Benutzer, die ein Thema gestartet haben, dürfen einen Beitrag als hilfreich markieren.';
$string['notteacher'] = 'Nur Kursverantwortliche dürfen dies tun.';
$string['noupvote'] = 'Keine positive Bewertung';
$string['noviewdiscussionspermission'] = 'Sie dürfen die Themen in diesem Forum nicht sehen';
$string['nowallsubscribed'] = 'Sie haben alle Foren von {$a} abonniert';
$string['nowallunsubscribed'] = 'Sie haben kein Forum von {$a} abonniert';
$string['nownotsubscribed'] = '{$a->name} wird künftig bei neuen Nachrichten in \'{$a->moodleoverflow}\' NICHT benachrichtigt.';
$string['nownottracking'] = '{$a->name} will \'{$a->moodleoverflow}\' nicht weiter verfolgen.';
$string['nowsubscribed'] = '{$a->name} wird künftig bei neuen Nachrichten in \'{$a->moodleoverflow}\' benachrichtigt.';
$string['nowtracking'] = '{$a->name} verfolgt nun das \'{$a->moodleoverflow}\'.';
$string['oldpostdays'] = '\'Gelesen\' nach x Tagen';
$string['parent'] = 'Ursprungsbeitrag';
$string['permalink'] = 'Permalink';
$string['pluginadministration'] = 'Moodleoverflow-Administration';
$string['pluginname'] = 'Moodleoverflow';
$string['postaddedsuccess'] = 'Der Beitrag wurde erfolgreich eingefügt.';
$string['postaddedtimeleft'] = 'Sofern Sie noch etwas korrigieren möchten, haben Sie dafür {$a} Zeit. Danach wird keine Änderung mehr angenommen.';
$string['postbyuser'] = '{$a->post} von {$a->user}';
$string['postincontext'] = 'Beitrag im Forum zeigen';
$string['postmailinfolink'] = 'Dies ist die Kopie einer Mitteilung, die in dem Kurs {$a->coursename} eingetragen wurde.

Um darauf zu antworten, folgen Sie bitte diesem Link: {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postnotexist'] = 'Der angeforderte Beitrag existiert nicht';
$string['posts'] = 'Beiträge';
$string['posttomoodleoverflow'] = 'Beitrag absenden';
$string['postupdated'] = 'Der Beitrag wurde aktualisiert';
$string['preferteachersmark'] = 'Sollen die Markierungen von Kursverantwortlichen bevorzugt werden?';
$string['privacy:anonym_discussion_name'] = 'Anonymisierter Themenname';
$string['privacy:anonym_post_message'] = 'Der Inhalt wurde gelöscht.';
$string['privacy:anonym_user_name'] = 'Anonym';
$string['privacy:discussionsubscriptionpreference'] = 'Sie haben die folgende Abonnementeinstellung für das Forum ausgewählt: "{$a->preference}"';
$string['privacy:grade'] = 'Deine Bewertung für dieses Moodleoverflow-Forum.';
$string['privacy:metadata:core_files'] = 'Moodleoverflow speichert Dateien, die vom Nutzer als Teil eines Beitrags hochgeladen wurden.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Informationen über individuell abonnierte Themen (ein Nutzender hat ein Thema abonniert, oder ein Thema, das andernfalls abonniert wäre, deabonniert).';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'Die ID des Themas, das abonniert / deabonniert wurde.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'Der Zeitpunkt, an dem abonniert wurde.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'Die ID des Nutzenden, der die Abonnement-Einstellungen geändert hat.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Informationen über Themen (welche Themen hat ein Nutzer gestartet).';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'Der Name des Themas.';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'Die Zeit, wann ein Thema das letzte Mal bearbeitet wurde (z.B. durch Posten eines Beitrages).';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'Die ID des Nutzenden, der das Thema gestartet hat';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'Die ID des Nutzenden, der das Thema bearbeitet hat.';
$string['privacy:metadata:moodleoverflow_grades'] = 'Informationen über die Bewertung, die die Person für ihre Beiträge in einem Forum erhalten hat.';
$string['privacy:metadata:moodleoverflow_grades:grade'] = 'Bewertung, die eine Person erhalten hat.';
$string['privacy:metadata:moodleoverflow_grades:moodleoverflowid'] = 'Die ID des Moodleoverflow-Forums, für welches sie die Bewertung bekommen hat.';
$string['privacy:metadata:moodleoverflow_grades:userid'] = 'Die ID der Person, die die Bewertung erhalten hat.';
$string['privacy:metadata:moodleoverflow_posts'] = 'Informationen über Forenbeiträge (Daten von Beiträgen, die ein Nutzer verfasst hat).';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'Der Zeitpunkt, an dem der Beitrag erstellt wurde.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'Die ID des Themas, zu dem dieser Beitrag verfasst wurde.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'Der Text des Beitrags.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'Der Zeitpunkt, an dem der Beitrag zuletzt bearbeitet wurde.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'Die ID des Beitrags, auf den sich dieser Beitrag bezieht.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'Die ID des Nutzenden, der diesen Beitrag erstellt hat.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Informationen über Beitragsbewertungen (wann und wie ein Nutzer einen Beitrag bewertet hat).';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'Die ID des Themas, zu dem der bewertete Beitrag gehört.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'Der Zeitpunkt, an dem die Bewertung abgegeben wurde.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'Der Zeitpunkt, an dem die Bewertung das letzte Mal geändert wurde.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'Die ID des Moodleoverflow-Forums, das den Beitrag beinhaltet.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'Die ID des Beitrags, der bewertet wurde.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'Die abgegebene Bewertung. 0 = neutral, 1 = negativ, 2 = positiv, 3 = hilfreich, 4 = Lösung';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'Die ID des Nutzenden, der die Bewertung abgegeben hat.';
$string['privacy:metadata:moodleoverflow_read'] = 'Informationen über den Lesestatus von Beiträgen (wann Beiträge von einem Nutzer gelesen wurden).';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'Die ID des Themas, zu dem der gelesene Beitrag gehört.';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'Der Zeitpunkt, wann der Beitrag das erste Mal vom Nutzenden gelesen wurde.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'Der Zeitpunkt, wann der Beitrag das letzte Mal vom Nutzenden gelesen wurde.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'Die ID des Beitrags, der gelesen wurde.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'Die ID des Nutzenden, der den Beitrag gelesen hat.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Informationen über Forenabonnements (welche Foren ein Nutzer abonniert hat).';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'Die ID des Moodleoverflow-Forum, das der Nutzende abonniert hat.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'Die ID vom Nutzenden, der das Forum abonniert hat.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Information über die Lesemarkierung von Foren (welche Foren vom Nutzer nicht verfolgt werden).';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'Die ID des Moodleoverflow-Forums, das vom Nutzer nicht verfolgt wird.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'Die ID des Nutzers, der das Forum nicht verfolgt.';
$string['privacy:postwasread'] = 'Der Beitrag wurde erstmals am {$a->firstread} und zuletzt am  {$a->lastread} gelesen.';
$string['privacy:readtrackingdisabled'] = 'Sie haben sich entschieden, nicht verfolgen zu lassen, welche Beiträge sie in diesem Forum gelesen haben.';
$string['privacy:subscribedtoforum'] = 'Sie haben dieses Forum abonniert.';
$string['questioner'] = 'Fragende Person';
$string['rateownpost'] = 'Sie können Ihren eigenen Beitrag nicht bewerten.';
$string['ratingfailed'] = 'Bewertung fehlgeschlagen. Bitte versuchen Sie es erneut.';
$string['ratingheading'] = 'Bewertung und Reputation';
$string['ratingpreference'] = 'Zuerst anzeigen';
$string['ratingpreference_help'] = 'Antworten können als hilfreich und als Lösung markiert werden. Diese Option legt fest, welche der Markierungen als erste Antwort in der Diskussion angezeigt wird. Es gibt 2 Möglichkeiten:

* Hilfreich - Der vom Fragesteller als hilfreich markierter Beitrag  wird ganz oben angezeigt
* Lösung - Der vom Kursverantwortlichen als Lösung markierter Beitrag  wird ganz oben angezeigt';
$string['ratingtoold'] = 'Bewertungen können nur innerhalb von 30 Minuten nach der ersten Bewertung verändert werden.';
$string['re'] = 'Re:';
$string['reply'] = 'Kommentieren';
$string['replyfirst'] = 'Antworten';
$string['reputation'] = 'Reputation';
$string['reputationnotnegative'] = 'Nur positive Reputation?';
$string['scalefactor'] = 'Skalierungsfaktor';
$string['scalefactor_help'] = 'Die Nutzerbewertung wird durch den Skalierungsfaktor geteilt, um die Note jeder Person zu erhalten. Ist die resultierende Bewertung größer als die Höchstbewertung, wird der Wert auf die angegebene Höchstbewertung begrenzt.';
$string['scalefactorerror'] = 'Skalierungsfaktor';
$string['smallmessage'] = '{$a->user} schrieb in {$a->moodleoverflowname}';
$string['solvedanswer'] = 'Dieser Beitrag wurde als Lösung markiert.';
$string['starterrating'] = 'Hilfreich';
$string['subject'] = 'Betreff';
$string['subscribe'] = 'Ich möchte das Forum abonnieren';
$string['subscribed'] = 'Abonniert';
$string['subscribeenrolledonly'] = 'Nur eingeschriebene Nutzer/innen dürfen Forumsbeiträge per E-Mail abonnieren.';
$string['subscribestart'] = 'Beiträge per E-Mail an mich senden';
$string['subscribestop'] = 'Keine Beiträge als E-Mail an mich senden';
$string['subscriptionauto'] = 'Automatisch';
$string['subscriptiondisabled'] = 'Deaktiviert';
$string['subscriptionforced'] = 'Verpflichtend';
$string['subscriptionmode'] = 'Abonnement';
$string['subscriptionmode_help'] = 'Wenn ein Benutzer ein Forum abonniert, erhält er neue Beitrage als E-Mail. Es gibt 4 Abonnement Modi:

* Optionales Abonnement - Benutzer können auswählen, ob sie ein Forum abonnieren möchten
* Verpflichtendes Abonnement - Jeder abonniert das Forum und man kann es nicht abbestellen
* Automatisches Abonnement - Jeder abonniert zu Beginn das Forum und kann es zu jeder Zeit abbestellen
* Deaktiviertes Abonnement - Abonnements sind nicht erlaubt

Anmerkung: Änderungen an dem Modus werden nur Benutzer betreffen, die in der Zukunft in einen Kurs eingeschrieben werden und nicht existierende Benutzer.';
$string['subscriptionoptional'] = 'Optionales Abonnement';
$string['subscriptiontrackingheader'] = 'Abonnements und Markierungen';
$string['taskcleanreadrecords'] = 'Moodleoverflow Cronjob für das Aufräumen von alten Lesemarkierungen';
$string['tasksendmails'] = 'Moodleoverflow Cronjob für das Senden von E-Mails';
$string['taskupdategrades'] = 'Moodleoverflow-Task, die die Bewertungen zu aktualisiert';
$string['teacherrating'] = 'Lösung';
$string['tracking'] = 'Markieren?';
$string['trackingoff'] = 'Aus';
$string['trackingon'] = 'An';
$string['trackingoptional'] = 'Optional';
$string['trackingtype'] = 'Lesemarkierung';
$string['trackingtype_help'] = 'Wenn diese Option aktiviert ist, sehen Teilnehmer/innen gelesene und ungelesene Beiträge unterschiedlich markiert im Forum.

Es stehen drei Optionen zur Verfügung:

* Optional - Die Markierung ist ein- und ausschaltbar
* An  - Die Markierung ist immer an
* Aus - Die Markierung ist immer aus';
$string['trackmoodleoverflow'] = 'Ungelesene Beiträge markieren';
$string['unknownerror'] = 'Dies hätte nicht passieren sollen.';
$string['unreadposts'] = 'Ungelesene Beiträge';
$string['unreadpostsnumber'] = '{$a} ungelesene Beiträge';
$string['unreadpostsone'] = '1 ungelesener Beitrag';
$string['unsubscribe'] = 'Ich möchte das Forum abbestellen';
$string['unsubscribediscussion'] = 'Ich möchte das Thema abbestellen';
$string['unsubscribediscussionlink'] = 'Ich möchte dieses Thema abbestellen: {$a}';
$string['unsubscribelink'] = 'Ich möchte dieses Forum abbestellen: {$a}';
$string['updategrades'] = 'Aktualisiere Bewertungen';
$string['upvote'] = 'Positive Bewertung';
$string['upvotenotchangeable'] = 'Positive Bewertung (nicht veränderbar)';
$string['votescaledownvote'] = 'Reputation: Negative Bewertung';
$string['votescalehelpful'] = 'Reputation: Hilfreich';
$string['votescalesolved'] = 'Reputation: Lösung';
$string['votescaleupvote'] = 'Reputation: Positive Bewertung';
$string['votescalevote'] = 'Reputation: Bewertung.';
$string['yournewtopic'] = 'Neues Thema';
$string['yourreply'] = 'Antwort';
