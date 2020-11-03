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
 * Strings for component 'chat', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Es gibt einen angekündigten Chat.';
$string['ajax'] = 'Version mit Ajax';
$string['autoscroll'] = 'Automatisch scrollen';
$string['beep'] = 'Beep';
$string['bubble'] = 'Bubble';
$string['cantlogin'] = 'Anmeldung im Chat fehlgeschlagen!!';
$string['chat:addinstance'] = 'Neuen Chat hinzufügen';
$string['chat:chat'] = 'Chat betreten';
$string['chat:deletelog'] = 'Chat-Logdaten löschen';
$string['chat:exportparticipatedsession'] = 'Chat-Sitzung mit eigener Teilnahme exportieren';
$string['chat:exportsession'] = 'Alle Chat-Sitzungen exportieren';
$string['chatintro'] = 'Beschreibung';
$string['chatname'] = 'Name des Chats';
$string['chat:readlog'] = 'Chat-Logdaten anzeigen';
$string['chatreport'] = 'Chat-Protokolle';
$string['chat:talk'] = 'Im Chat sprechen';
$string['chattime'] = 'Nächster Chat';
$string['chat:view'] = 'Chataktivität anzeigen';
$string['compact'] = 'Kompakt';
$string['composemessage'] = 'Mitteilung schreiben';
$string['configmethod'] = 'Die Chat-Methode AJAX bietet eine AJAX-basierte Chat-Oberfläche, die den Server regelmäßig kontaktiert, um Aktualisierungen zu erhalten. Bei der Chat-Methode Normal wenden sich Clients regelmäßig an den Server, um Aktualisierungen zu erhalten. Es erfordert keine Konfiguration und funktioniert überall, kann jedoch eine große Belastung des Servers verursachen, wenn viele Nutzer/innen chatten. Die Verwendung eines Server-Daemons erfordert Shell-Zugriff auf Unix, führt jedoch zu einer schnell skalierbaren Chat-Umgebung.';
$string['confignormalupdatemode'] = 'Chat-Aktualisierungen arbeiten normalerweise mit dem Modus <em>KeepAlive</em> von HTTP 1.1, was aber den Server sehr stark beansprucht. Eine andere Variante nutzt den Modus <em>Stream</em> zur Aktualisierung der Anzeige. <em>Stream</em> arbeitet wesentlich besser (ähnlich wie chatd), aber eventuell unterstützt Ihr Server diese Methode nicht.';
$string['configoldping'] = 'Nach welcher Zeit (in Sekunden) kann jemand aus der Nutzerliste gelöscht werden, wenn die Kommunikation abgebrochen scheint? Dieser Wert legt die maximale Zeit dafür fest, denn normalerweise werden Kommunikationsabbrüche schnell erkannt. Zu kleine Werte führen zu einer sehr hohen Serverbelastung! Setzen Sie den Wert für den "Standard-Chat"  <strong>niemals</strong> kleiner als 2 * chat_refresh_room!!';
$string['configrefreshroom'] = 'Nach welcher Zeit (in Sekunden) soll der Chat aktualisiert werden? Ein niedriger Wert lässt den Chat schneller erscheinen, führt aber bei hohen Nutzerzahlen zu einer wesentlich höheren Serverbelastung. Falls Sie den Modus <em>Stream</em> verwenden, können Sie kleinere Werte wählen (probieren Sie es mit 2 Sekunden).';
$string['configrefreshuserlist'] = 'Nach welcher Zeit (in Sekunden) soll die Nutzerliste aktualisiert werden?';
$string['configserverhost'] = 'Hostname des Chat-Servers';
$string['configserverip'] = 'IP-Adresse des Chat-Servers';
$string['configservermax'] = 'Maximal erlaubte Nutzerzahl im Chat';
$string['configserverport'] = 'Server-Port des Chat-Servers';
$string['coursetheme'] = 'Kursdesign';
$string['crontask'] = 'Hintergrundprozess für das Chatmodul';
$string['currentchats'] = 'Aktive Chat-Sitzungen';
$string['currentusers'] = 'Aktuelle Nutzer/innen';
$string['deletesession'] = 'Diese Sitzung löschen';
$string['deletesessionsure'] = 'Möchten Sie diese Sitzung wirklich löschen?';
$string['donotusechattime'] = 'Keinen Termin anzeigen';
$string['enterchat'] = 'Chat betreten';
$string['entermessage'] = 'Mitteilung schreiben';
$string['errornousers'] = 'Niemanden gefunden!';
$string['eventmessagesent'] = 'Mitteilung  gesendet';
$string['eventsessionsviewed'] = 'Sitzungen angezeigt';
$string['explaingeneralconfig'] = 'Diese Einstellungen werden <strong>immer</strong> benutzt';
$string['explainmethoddaemon'] = 'Diese Einstellungen wirken sich nur aus, wenn "Chat-Server-Daemon" als Chat-Methode ausgewählt ist.';
$string['explainmethodnormal'] = 'Diese Einstellungen wirken sich nur aus, wenn Normal als Chat-Methode ausgewählt ist.';
$string['generalconfig'] = 'Allgemeines';
$string['idle'] = 'Leerlauf';
$string['indicator:cognitivedepth'] = 'Chat kognitiv';
$string['indicator:cognitivedepthdef'] = 'Chat kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Chat-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren).';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer Chat-Aktivität erreicht hat.';
$string['indicator:socialbreadth'] = 'Chat sozial';
$string['indicator:socialbreadthdef'] = 'Chat sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die Chat-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer Chat-Aktivität erreicht hat.';
$string['inputarea'] = 'Eingabefeld';
$string['invalidid'] = 'Chat-Raum wurde nicht gefunden!';
$string['list_all_sessions'] = 'Alle Sitzungen auflisten';
$string['list_complete_sessions'] = 'Beendete Sitzungen auflisten';
$string['listing_all_sessions'] = 'Alle Sitzungen werden aufgelistet';
$string['messagebeepseveryone'] = '{$a} piepst jeden an!';
$string['messagebeepsyou'] = '{$a} hat Sie angepiepst!';
$string['messageenter'] = '{$a} hat den Chat betreten';
$string['messageexit'] = '{$a} hat den Chat verlassen';
$string['messages'] = 'Mitteilungen';
$string['messageyoubeep'] = 'Sie haben {$a} angepiepst';
$string['method'] = 'Chat-Methode';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Chat-Server-Daemon';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Die Chat-Aktivität ermöglicht eine textbasierte synchrone Diskussion.

Der Chat in Moodle ist für den Einsatz mit kleinen Gruppen konzipiert. Bei großen Gruppen entsteht eine hohe Belastung auf den Webservern.

Ein Chat kann eine einmalige Aktivität sein, aber auch täglich oder wöchentlich nach Terminabsprache wiederholt werden. Chat-Sitzungen können gespeichert und veröffentlicht werden.';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nie löschen';
$string['nextsession'] = 'Nächste Sitzung';
$string['nochat'] = 'Kein Chat gefunden';
$string['no_complete_sessions_found'] = 'Keine beendete Sitzung gefunden';
$string['noguests'] = 'Der Chat ist für Gäste nicht zugänglich';
$string['nomessages'] = 'Keine Mitteilungen';
$string['nopermissiontoseethechatlog'] = 'Sie sind nicht berechtigt, die Chat-Protokolle anzusehen.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Kein Termin vorgesehen';
$string['notallowenter'] = 'Sie dürfen den Chat nicht betreten.';
$string['notlogged'] = 'Nicht angemeldet!';
$string['oldping'] = 'Timeout';
$string['page-mod-chat-x'] = 'Jede Chat-Seite';
$string['pastchats'] = 'Vorherige Chat-Sitzungen';
$string['pluginadministration'] = 'Chat-Administration';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Derzeitige Chat-Session. Temporäre Daten, die kurz nach der Session gelöscht werden.';
$string['privacy:metadata:chat_users'] = 'Zeichnet auf, welche Nutzer gerade in welchem Chat-Raum sind';
$string['privacy:metadata:chat_users:firstping'] = 'Zeitpunkt des ersten Zugriffs auf den Chatraum';
$string['privacy:metadata:chat_users:ip'] = 'Nutzer-IP';
$string['privacy:metadata:chat_users:lang'] = 'Nutzersprache';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Zeitpunkt des letzten Beitrags im Chatraum';
$string['privacy:metadata:chat_users:lastping'] = 'Zeitpunkt des letzten Zugriffs auf den Chatraum';
$string['privacy:metadata:chat_users:userid'] = 'Nutzer-ID';
$string['privacy:metadata:chat_users:version'] = 'Wie der Nutzer auf den Chatraum zugriff (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Datensatz von gesendeten Mitteilungen während einer Chat-Session';
$string['privacy:metadata:messages:issystem'] = 'Ob die Mitteilung eine systemgenerierte Mitteilung ist';
$string['privacy:metadata:messages:message'] = 'Mitteilung';
$string['privacy:metadata:messages:timestamp'] = 'Zeit, bei der die Mitteilung gesendet wurde';
$string['privacy:metadata:messages:userid'] = 'Nutzer-ID, mit der die Mitteilung verfasst wurde';
$string['refreshroom'] = 'Chat aktualisieren';
$string['refreshuserlist'] = 'Nutzerliste aktualisieren';
$string['removemessages'] = 'Alle Mitteilungen entfernen';
$string['repeatdaily'] = 'Täglich zur gleichen Zeit';
$string['repeatnone'] = 'Nur zum angegebenen Termin';
$string['repeattimes'] = 'Wiederholungen';
$string['repeatweekly'] = 'Wöchentlich zur gleichen Zeit';
$string['saidto'] = 'sagte zu';
$string['savemessages'] = 'Sitzungen speichern';
$string['search:activity'] = 'Chat - Beschreibung';
$string['seesession'] = 'Sitzung ansehen';
$string['send'] = 'Senden';
$string['sending'] = 'wird gesendet';
$string['serverhost'] = 'Servername';
$string['serverip'] = 'Server-IP';
$string['servermax'] = 'Maximale Nutzerzahl';
$string['serverport'] = 'Server-Port';
$string['sessions'] = 'Chat-Sitzungen';
$string['sessionstart'] = 'Der nächste Chat beginnt {$a->date}, (also in {$a->fromnow})';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Chat-Protokolle sichtbar für alle';
$string['studentseereports_help'] = 'Mit der Einstellung \'Nein\' dürfen ausschließlich Nutzer/innen mit dem Recht \'mod/chat:readlog\' die Chat-Protokolle sehen.';
$string['talk'] = 'Talk';
$string['updatemethod'] = 'Aktualisierungsmodus';
$string['updaterate'] = 'Aktualisierungsrate:';
$string['userlist'] = 'Teilnehmerliste';
$string['usingchat'] = 'Chat verwenden';
$string['usingchat_help'] = 'Der \'Chat\' besitzt Fähigkeiten, die das Chatten schöner machen.

* Smileys - Alle Smileys (emoticons) werden auch im Chat angezeigt  :-)
* Links - Webadressen werden automatisch in Links umgewandelt
* Personalisierung - Wenn eine Zeile mit \'/me\' oder \':\' beginnt, wird Ihr Name vorangestellt. Wenn Ihr Name beispielsweise Kim ist und Sie geben ein \':lacht!\' oder \'/me lacht!\', dann werden alle sehen "Kim lacht!"
* Beep - Signale werden an andere gesendet, wenn Sie den Link \'beep\' oben neben deren Namen anklicken. Um ein Signal an alle zu senden, tippen Sie \'beep all\' ins Chat-Fenster.
* HTML - Wenn Sie sich ein bisschen mit HTML-Code auskennen, können Sie damit Bilder in den Text einfügen, Farben ändern oder Sounds abspielen';
$string['viewreport'] = 'Chat-Protokolle anzeigen';
