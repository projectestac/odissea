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
 * Strings for component 'calendar', language 'de', version '3.8'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Aktivitätstermin';
$string['addevent'] = 'Termine hinzufügen';
$string['advancedoptions'] = 'Erweiterte Optionen';
$string['allday'] = 'ganztägig';
$string['annually'] = 'Jährlich';
$string['calendar'] = 'Kalender';
$string['calendarheading'] = '{$a} Kalender';
$string['calendarpreferences'] = 'Kalendereinstellungen';
$string['calendartypes'] = 'Kalendertypen';
$string['calendarurl'] = 'Kalender-URL: {$a}';
$string['category'] = 'Kursbereich';
$string['categoryevent'] = 'Kursbereichstermin';
$string['categoryevents'] = 'Kursbereichstermine';
$string['clickhide'] = 'Zum Verbergen klicken';
$string['clickshow'] = 'Zum Anzeigen klicken';
$string['colactions'] = 'Aktionen';
$string['colcalendar'] = 'Kalender';
$string['collastupdated'] = 'Zuletzt aktualisiert';
$string['colpoll'] = 'Aktualisieren';
$string['commontasks'] = 'Optionen';
$string['confirmeventdelete'] = 'Möchten Sie den Termin \'{$a}\' wirklich löschen?';
$string['confirmeventseriesdelete'] = 'Der Termin \'{$a->name}\' ist Teil der Serie. Wollen Sie nur diesen Termin entfernen oder alle {$a->count} Termine dieser Serie?';
$string['course'] = 'Kurs';
$string['coursecalendar'] = '{$a} Kalender';
$string['courseevent'] = 'Kurstermin';
$string['courseevents'] = 'Kurstermine';
$string['courses'] = 'Kurse';
$string['customexport'] = 'Eigener Bereich ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Täglich';
$string['day'] = 'Tag';
$string['dayeventsmany'] = '{$a->num} Termine, {$a->day}';
$string['dayeventsnone'] = 'Keine Termine, {$a}';
$string['dayeventsone'] = '1 Termin, {$a}';
$string['daynext'] = 'Nächster Tag';
$string['dayprev'] = 'Vorheriger Tag';
$string['dayviewfor'] = 'Tagesansicht für:';
$string['dayviewtitle'] = 'Tagesansicht: {$a}';
$string['daywithnoevents'] = 'Heute keine Termine';
$string['default'] = 'Grundeinstellung';
$string['deleteallevents'] = 'Alle Termine entfernen';
$string['deleteevent'] = 'Termin löschen';
$string['deleteevents'] = 'Termine löschen';
$string['deleteoneevent'] = 'Diesen Termin löschen';
$string['detailedmonthviewfor'] = 'Monatsansicht für:';
$string['detailedmonthviewtitle'] = 'Detaillierte Monatsansicht: {$a}';
$string['durationminutes'] = 'Dauer in Minuten';
$string['durationnone'] = 'Ohne Zeitangabe';
$string['durationuntil'] = 'Bis';
$string['editevent'] = 'Termin bearbeiten';
$string['erroraddingevent'] = 'Hinzufügen des Termins fehlgeschlagen';
$string['errorbadsubscription'] = 'Kein Kalenderabonnement gefunden';
$string['errorbeforecoursestart'] = 'Der angegebene Termin liegt vor dem Kursbeginn.';
$string['errorcannotimport'] = 'Aktuell können Sie kein Kalenderabonnement einrichten.';
$string['errorhasuntilandcount'] = 'Entweder UNTIL oder COUNT sollte in der Wiederholungsregel verwendet werden, aber nicht beides auf einmal.';
$string['errorinvalidbydayprefix'] = 'Ganzzahlige Werte vor BYDAY-Regeln können nur für Wiederholungsregeln MONTHLY oder YEARLY verwendet werden.';
$string['errorinvalidbydaysuffix'] = 'Gültige Werte für den Wochentag in der BYDAY-Regel sind MO, TU, WE, TH, FR, SA und SU.';
$string['errorinvalidbyhour'] = 'Gültige Werte für die Regel BYHOUR sind 0 bis 23.';
$string['errorinvalidbyminute'] = 'Gültige Werte für die Regel BYMINUTE sind 0 bis 59.';
$string['errorinvalidbymonth'] = 'Gültige Werte für die Regel BYMONTH sind 1 bis 12.';
$string['errorinvalidbymonthday'] = 'Gültige Werte für die Regel BYMONTHDAY sind 1 bis 31 oder -31 bis -1.';
$string['errorinvalidbysecond'] = 'Gültige Werte für die Regel BYSECOND sind 0 bis 59.';
$string['errorinvalidbysetpos'] = 'Gültige Werte für die Regel BYSETPOS sind 1 bis 366 oder -366 bis -1.';
$string['errorinvalidbyweekno'] = 'Gültige Werte für die Regel BYWEEKNO sind 1 bis 53 oder -53 bis -1';
$string['errorinvalidbyyearday'] = 'Gültige Werte für die Regel BYYEARDAY sind 1 bis 366 oder -366 bis -1.';
$string['errorinvaliddate'] = 'Ungültiges Datum';
$string['errorinvalidicalurl'] = 'Ungültige iCal-URL';
$string['errorinvalidinterval'] = 'Der Wert für die Regel INTERVAL muss eine positive Ganzzahl sein.';
$string['errorinvalidminutes'] = 'Geben Sie die Dauer in Minuten an (1...999).';
$string['errorinvalidrepeats'] = 'Geben Sie die Anzahl der Termine an (1...99).';
$string['errormustbeusedwithotherbyrule'] = 'Die Regel BYSETPOS kann nur im Zusammenhang mit einem anderen Regelteil BYxxx verwendet werden.';
$string['errornodescription'] = 'Beschreibung notwendig';
$string['errornoeventname'] = 'Eine Bezeichnung für den Termin ist erforderlich.';
$string['errornonyearlyfreqwithbyweekno'] = 'Die Regel BYWEEKNO ist nur gültig bei Regeln für YEARLY.';
$string['errorrequiredurlorfile'] = 'Für den Kalenderimport ist eine URL oder eine Datei notwendig.';
$string['errorrrule'] = 'Die Wiederholungsregel scheint falsch zu sein.';
$string['errorrruleday'] = 'Die Wiederholungsregeln hat einen ungültigen Parameter \'Tag\'.';
$string['errorrrulefreq'] = 'Die Wiederholungsregeln hat einen ungültigen Parameter \'Wiederholung\'.';
$string['eventcalendareventcreated'] = 'Kalendereintrag angelegt';
$string['eventcalendareventdeleted'] = 'Termin gelöscht';
$string['eventcalendareventupdated'] = 'Termin aktualisiert';
$string['eventdate'] = 'Datum';
$string['eventdescription'] = 'Beschreibung';
$string['eventduration'] = 'Dauer';
$string['eventendtime'] = 'Endzeit';
$string['eventendtimewrapped'] = '{$a} (Ende)';
$string['eventinstanttime'] = 'Zeit';
$string['eventkind'] = 'Art des Termins';
$string['eventname'] = 'Titel';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'Keine Termine vorhanden';
$string['eventrepeat'] = 'Wiederholungen';
$string['events'] = 'Events';
$string['eventsall'] = 'Alle Termine';
$string['eventsdeleted'] = 'Termine gelöscht';
$string['eventsfor'] = 'Termine am {$a}';
$string['eventsimported'] = 'Termine importiert: {$a}';
$string['eventskey'] = 'Termine';
$string['eventsource'] = 'Terminquelle';
$string['eventspersonal'] = 'Meine persönlichen Termine';
$string['eventsrelatedtocategories'] = 'Termine bezogen auf Kursbereiche';
$string['eventsrelatedtocourses'] = 'Kursbezogene Termine';
$string['eventsrelatedtogroups'] = 'Gruppenbezogene Termine';
$string['eventsskipped'] = 'Termine übersprungen: {$a}';
$string['eventstarttime'] = 'Anfangszeit';
$string['eventstoexport'] = 'Zu exportierende Termine';
$string['eventsubscriptioncreated'] = 'Kalenderabonnement angelegt';
$string['eventsubscriptiondeleted'] = 'Kalenderabonnement gelöscht';
$string['eventsubscriptioneditwarning'] = 'Dieser Termin ist Teil eines Abonnements. Alle Änderungen, die Sie an diesem Termin vornehmen, gehen verloren, wenn das Abonnement gelöscht wird.';
$string['eventsubscriptionupdated'] = 'Kalenderabonnement aktualisiert';
$string['eventsupdated'] = 'Termine aktualisiert: {$a}';
$string['eventtime'] = 'Zeit';
$string['eventtype'] = 'Typ des Termins';
$string['eventtypecategory'] = 'Kursbereich';
$string['eventtypecourse'] = 'Kurs';
$string['eventtypeglobal'] = 'Website';
$string['eventtypegroup'] = 'Gruppe';
$string['eventtypemodule'] = 'Aktivitäten';
$string['eventtypesite'] = 'Website';
$string['eventtypeuser'] = 'Nutzer';
$string['eventview'] = 'Termindetails';
$string['expired'] = 'Abgelaufen';
$string['explain_site_timeformat'] = 'Wählen Sie, ob Zeitangaben im Format mit 12 oder 24 Stunden angezeigt werden sollen. Andernfalls wird das Format aus der gewählten Spracheinstellung verwendet. Die Einstellung gilt für die gesamte Website, kann aber im Nutzerprofil überschrieben werden.';
$string['export'] = 'Export';
$string['exportbutton'] = 'Export';
$string['exportcalendar'] = 'Kalender exportieren';
$string['exporthelp'] = 'Wie abonniere ich diesen Kalender in einer Kalenderanwendung (Google/Outlook/Sonstige)?';
$string['forcecalendartype'] = 'Kalender vorgeben';
$string['fri'] = 'Fr';
$string['friday'] = 'Freitag';
$string['generateurlbutton'] = 'Kalender-URL abfragen';
$string['global'] = 'Global';
$string['globalevent'] = 'Website-Termin';
$string['globalevents'] = 'Website-Termine';
$string['gotoactivity'] = 'Zur Aktivität gehen';
$string['gotocalendar'] = 'Zum Kalender';
$string['group'] = 'Gruppe';
$string['groupevent'] = 'Gruppentermin';
$string['groupevents'] = 'Gruppentermine';
$string['hideeventtype'] = '{$a}-Termine verbergen';
$string['hourly'] = 'Stündlich';
$string['importcalendar'] = 'Kalender importieren';
$string['importcalendarfrom'] = 'Import von';
$string['importcalendarheading'] = 'Kalender importieren';
$string['importfromfile'] = 'Kalenderdatei (.ics)';
$string['importfrominstructions'] = 'Geben Sie die URL zu einem externen Kalender an oder laden Sie eine Datei hoch.';
$string['importfromurl'] = 'Kalender-URL';
$string['invalideventtype'] = 'Der ausgewählte Ereignistyp ist ungültig.';
$string['invalidtimedurationminutes'] = 'Die angegebene Dauer in Minuten ist ungültig. Geben Sie eine Zahl größer als 0 ein oder wählen Sie \'Ohne Zeitangabe\'.';
$string['invalidtimedurationuntil'] = 'Der angegebene Wert für Datum und Zeit von \'Dauer bis\' liegt vor der Startzeit des Termins. Korrigieren Sie diese Einstellung.';
$string['iwanttoexport'] = 'Export';
$string['less'] = 'Weniger';
$string['managesubscriptions'] = 'Abonnements verwalten';
$string['manyevents'] = '{$a} Termine';
$string['mon'] = 'Mo';
$string['monday'] = 'Montag';
$string['monthly'] = 'Monatlich';
$string['monthlyview'] = 'Monatsansicht';
$string['monthnext'] = 'Nächster Monat';
$string['monthprev'] = 'Vorheriger Monat';
$string['monththis'] = 'Dieser Monat';
$string['more'] = 'Mehr';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Nie';
$string['newevent'] = 'Neuer Termin';
$string['nocalendarsubscriptions'] = 'Sie haben kein Kalenderabonnement.';
$string['notitle'] = 'Ohne Namen';
$string['noupcomingevents'] = 'Keine weiteren Termine';
$string['oneevent'] = '1 Termin';
$string['pollinterval'] = 'Aktualisierungsintervall';
$string['pollinterval_help'] = 'Wie oft möchten Sie den Kalender für neue Termine aktualisieren?';
$string['pref_lookahead'] = 'Terminvorschau';
$string['pref_lookahead_help'] = 'Diese Einstellung legt die (maximale) Anzahl von Tagen fest, die ein Termin im voraus in der Vorschau angezeigt wird. Spätere Termine werden noch nicht angezeigt.

Eventuell können nicht alle Termine in diesem Zeitfenster angezeigt werden, wenn es mehr als die \'Höchstzahl bevorstehender Termine\' sind.';
$string['pref_maxevents'] = 'Höchstzahl bevorstehender Termine';
$string['pref_maxevents_help'] = 'Diese Einstellung setzt die  Höchstzahl bevorstehender Termine, die angezeigt werden. Wenn Sie hier eine große Zahl wählen, ist es möglich, dass die Anzeige der bevorstehenden Termine viel Platz auf der Webseite verbraucht.
';
$string['pref_persistflt'] = 'Filtereinstellungen merken';
$string['pref_persistflt_help'] = 'Wenn diese Option aktiviert ist, werden die letzten Filtereinstellungen gespeichert und automatisch wiederhergestellt, wenn Sie sich einloggen.';
$string['pref_startwday'] = 'Wochenbeginn';
$string['pref_startwday_help'] = 'Kalenderwochen werden mit dem hier ausgewählten Wochenbeginn angezeigt';
$string['pref_timeformat'] = 'Zeitanzeigeformat';
$string['pref_timeformat_help'] = 'Sie können auswählen, ob die Zeiten im Format mit 12 oder 24 Stunden angezeigt werden. Wenn Sie das \'Standardformat\' wählen, wird das Format automatisch aus den gewählten Spracheinstellungen verwendet.';
$string['preferences'] = 'Einstellungen';
$string['preferences_available'] = 'Persönliche Einstellungen';
$string['preferredcalendar'] = 'Bevorzugter Kalender';
$string['privacy:metadata:calendar:event'] = 'Der Kalender kann Nutzertermine im Core-System speichern.';
$string['privacy:metadata:calendar:event:description'] = 'Beschreibung des Kalendereintrags';
$string['privacy:metadata:calendar:event:eventtype'] = 'Terminart des Kalendereintrags';
$string['privacy:metadata:calendar:event:name'] = 'Name des Kalendereintrags';
$string['privacy:metadata:calendar:event:timeduration'] = 'Dauer des Kalendereintrags';
$string['privacy:metadata:calendar:event:timestart'] = 'Startzeitpunkt des Kalendereintrags';
$string['privacy:metadata:calendar:event_subscriptions'] = 'Der Kalender speichert im Core-System die Registrierungen für Kalendereinträge von Nutzern';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'Eventtyp der Kalenderregistrierung';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'Name der Kalenderregistrierung';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'URL der Kalenderregistrierung';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'Konfiguration zur Anzeige des Kalendertyps durch Nutzer';
$string['recentupcoming'] = 'Vergangene und nachfolgende 60 Tage';
$string['repeatedevents'] = 'Sich wiederholende Termine';
$string['repeateditall'] = 'Änderungen für alle {$a} Termine der Reihe übernehmen';
$string['repeateditthis'] = 'Veränderungen nur an diesem einen Termin vornehmen';
$string['repeatevent'] = 'Termin wiederholen';
$string['repeatnone'] = 'Keine Wiederholungen';
$string['repeatweeksl'] = 'Wöchentliche Wiederholung, automatische Erstellung';
$string['repeatweeksr'] = 'Termine';
$string['sat'] = 'Sa';
$string['saturday'] = 'Samstag';
$string['showeventtype'] = '{$a}-Termine anzeigen';
$string['shown'] = 'angezeigt';
$string['site'] = 'Website';
$string['siteevent'] = 'Website-Termin';
$string['siteevents'] = 'Website-Termine';
$string['spanningevents'] = 'Folgetermine';
$string['subscriptionname'] = 'Kalendername';
$string['subscriptionremoved'] = 'Kalenderabonnement \'{$a}\' entfernt';
$string['subscriptions'] = 'Abonnements';
$string['subscriptionsource'] = 'Terminquelle: {$a}';
$string['subscriptionupdated'] = 'Kalenderabonnement \'{$a}\' aktualisiert';
$string['sun'] = 'So';
$string['sunday'] = 'Sonntag';
$string['thu'] = 'Do';
$string['thursday'] = 'Donnerstag';
$string['timeformat_12'] = '12-Stunden-Anzeige';
$string['timeformat_24'] = '24-Stunden-Anzeige';
$string['timeperiod'] = 'Zeitdauer';
$string['today'] = 'Heute';
$string['todayplustitle'] = 'Heute {$a}';
$string['tomorrow'] = 'Morgen';
$string['tt_deleteevent'] = 'Termin löschen';
$string['tt_editevent'] = 'Termin bearbeiten';
$string['tue'] = 'Di';
$string['tuesday'] = 'Dienstag';
$string['typecategory'] = 'Kursbereichstermin';
$string['typeclose'] = 'Termin beenden';
$string['typecourse'] = 'Kurstermin';
$string['typedue'] = 'Fälliger Termin';
$string['typegradingdue'] = 'Fälliger Bewertungstermin';
$string['typegroup'] = 'Gruppentermin';
$string['typeopen'] = 'Termin öffnen';
$string['typesite'] = 'Website-Termin';
$string['typeuser'] = 'Nutzertermin';
$string['upcomingevents'] = 'Aktuelle Termine';
$string['upcomingeventsfor'] = 'Termine für:';
$string['urlforical'] = 'URL des iCal-Exports für ein Kalender-Abo';
$string['user'] = 'Nutzer/in';
$string['userevent'] = 'Nutzertermin';
$string['userevents'] = 'Nutzertermine';
$string['viewupcomingactivitiesdue'] = 'Anstehende Aktivitäten anzeigen';
$string['wed'] = 'Mi';
$string['wednesday'] = 'Mittwoch';
$string['weekly'] = 'Wöchentlich';
$string['weeknext'] = 'Nächste Woche';
$string['weekthis'] = 'Diese Woche';
$string['when'] = 'Wann';
$string['whendate'] = 'Wann: {$a}';
$string['yesterday'] = 'Gestern';
$string['youcandeleteallrepeats'] = 'Dieser Termin ist Teil einer ganzen Reihe von Terminen. Sie können diesen einzelnen Termin oder alle {$a} Termine dieser Reihe auf einmal löschen.';
