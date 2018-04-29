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
 * Strings for component 'calendar', language 'de', branch 'MOODLE_32_STABLE'
 *
 * @package   calendar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addevent'] = 'Termine hinzufügen';
$string['advancedoptions'] = 'Weiterte Optionen';
$string['allday'] = 'ganztägig';
$string['annually'] = 'Jährlich';
$string['calendar'] = 'Kalender';
$string['calendarheading'] = '{$a} Kalender';
$string['calendarpreferences'] = 'Kalendereinstellungen';
$string['calendartypes'] = 'Kalendertypen';
$string['calendarurl'] = 'Kalender-URL: {$a}';
$string['clickhide'] = 'Zum Verbergen klicken';
$string['clickshow'] = 'Zum Anzeigen klicken';
$string['colactions'] = 'Aktionen';
$string['colcalendar'] = 'Kalender';
$string['collastupdated'] = 'Zuletzt aktualisiert';
$string['colpoll'] = 'Aktualisieren';
$string['commontasks'] = 'Optionen';
$string['confirmeventdelete'] = 'Möchten Sie den Termin \'{$a}\' wirklich löschen?';
$string['course'] = 'Kurs';
$string['courseevent'] = 'Kurstermin';
$string['courseevents'] = 'Kurstermine';
$string['courses'] = 'Kurse';
$string['customexport'] = 'Eigener Bereich ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Täglich';
$string['dayviewfor'] = 'Tagesansicht für:';
$string['dayviewtitle'] = 'Tagesansicht: {$a}';
$string['daywithnoevents'] = 'Heute keine Termine';
$string['default'] = 'Grundeinstellung';
$string['deleteevent'] = 'Termin löschen';
$string['deleteevents'] = 'Termine löschen';
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
$string['errorinvalidbydayprefix'] = 'Ganzzahlige Werte vor BYDAY-Regeln können nur für MONTHLY oder YEARLY RRULE verwendet werden.';
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
$string['errorrrule'] = 'Die Regel scheint falsch zu sein.';
$string['errorrruleday'] = 'Die Regel hat einen ungültigen Parameter \'Tag\'.';
$string['errorrrulefreq'] = 'Die Regel hat einen ungültigen Parameter \'Wiederholung\'.';
$string['eventcalendareventcreated'] = 'Kalendereintrag angelegt';
$string['eventcalendareventdeleted'] = 'Termin gelöscht';
$string['eventcalendareventupdated'] = 'Termin aktualisiert';
$string['eventdate'] = 'Datum';
$string['eventdescription'] = 'Beschreibung';
$string['eventduration'] = 'Dauer';
$string['eventendtime'] = 'Endzeit';
$string['eventinstanttime'] = 'Zeit';
$string['eventkind'] = 'Art des Termins';
$string['eventname'] = 'Titel';
$string['eventnone'] = 'Keine Termine vorhanden';
$string['eventrepeat'] = 'Wiederholungen';
$string['eventsall'] = 'Alle Termine';
$string['eventsdeleted'] = 'Termine gelöscht';
$string['eventsfor'] = '{$a} Termine';
$string['eventsimported'] = 'Termine importiert: {$a}';
$string['eventskey'] = 'Termine';
$string['eventspersonal'] = 'Meine persönlichen Termine';
$string['eventsrelatedtocourses'] = 'Kursbezogene Termine';
$string['eventsrelatedtogroups'] = 'Gruppenbezogene Termine';
$string['eventstarttime'] = 'Anfangszeit';
$string['eventstoexport'] = 'Zu exportierende Termine';
$string['eventsubscriptioncreated'] = 'Kalenderabonnement angelegt';
$string['eventsubscriptiondeleted'] = 'Kalenderabonnement gelöscht';
$string['eventsubscriptionupdated'] = 'Kalenderabonnement aktualisiert';
$string['eventsupdated'] = 'Termine aktualisiert: {$a}';
$string['eventtime'] = 'Zeit';
$string['eventview'] = 'Details zu den Terminen';
$string['expired'] = 'Abgelaufen';
$string['explain_site_timeformat'] = 'Wählen Sie, ob Zeitangaben im Format mit 12 oder 24 Stunden angezeigt werden sollen. Standardmäßig wird das Format aus der gewählten Spracheinstellung verwendet. Die Einstellung gilt für die gesamte Website, kann aber im Nutzerprofil überschrieben werden.';
$string['export'] = 'Export';
$string['exportbutton'] = 'Export';
$string['exportcalendar'] = 'Kalender exportieren';
$string['for'] = 'für';
$string['forcecalendartype'] = 'Kalender vorgeben';
$string['fri'] = 'Fr';
$string['friday'] = 'Freitag';
$string['generateurlbutton'] = 'Kalender-URL abfragen';
$string['global'] = 'Global';
$string['globalevent'] = 'Website-Termin';
$string['globalevents'] = 'Website-Termine';
$string['gotocalendar'] = 'Zum Kalender';
$string['group'] = 'Gruppe';
$string['groupevent'] = 'Gruppentermin';
$string['groupevents'] = 'Gruppentermine';
$string['hidecourseevents'] = 'Kurstermine verbergen';
$string['hideglobalevents'] = 'Website-Termine verbergen';
$string['hidegroupsevents'] = 'Gruppentermine';
$string['hideuserevents'] = 'Nutzertermine verbergen';
$string['hourly'] = 'Stündlich';
$string['ical'] = 'iCal';
$string['importcalendar'] = 'Kalender importieren';
$string['importcalendarfrom'] = 'Import von';
$string['importcalendarheading'] = 'Kalender importieren';
$string['importfromfile'] = 'Kalenderdatei (.ics)';
$string['importfrominstructions'] = 'Geben Sie die URL zu einem externen Kalender an oder laden Sie eine Datei hoch.';
$string['importfromurl'] = 'Kalender URL';
$string['invalidtimedurationminutes'] = 'Die angegebene Dauer in Minuten ist ungültig. Geben Sie eine Zahl größer als 0 ein oder wählen Sie \'Ohne Zeitangabe\'.';
$string['invalidtimedurationuntil'] = 'Der angegebene Wert für Datum und Zeit von \'Dauer bis\' liegt vor der Startzeit des Termins. Korrigieren Sie diese Einstellung.';
$string['iwanttoexport'] = 'Export';
$string['managesubscriptions'] = 'Abonnements verwalten';
$string['manyevents'] = '{$a} Termine';
$string['mon'] = 'Mo';
$string['monday'] = 'Montag';
$string['monthly'] = 'Monatlich';
$string['monthlyview'] = 'Monatsansicht';
$string['monthnext'] = 'Nächster Monat';
$string['monththis'] = 'Dieser Monat';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Nie';
$string['newevent'] = 'Neuer Termin';
$string['nocalendarsubscriptions'] = 'Sie haben kein Kalenderabonnement.';
$string['notitle'] = 'Ohne Namen';
$string['noupcomingevents'] = 'Keine weiteren Termine';
$string['oneevent'] = '1 Termin';
$string['pollinterval'] = 'Aktualisierungsintervall';
$string['pollinterval_help'] = 'Wie oft möchten Sie den Kalender für neue Termine aktualisieren?';
$string['preferences'] = 'Einstellungen';
$string['preferences_available'] = 'Persönliche Einstellungen';
$string['preferredcalendar'] = 'Bevorzugter Kalender';
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
$string['quickdownloadcalendar'] = 'Schneller Download / Kalender-Abo';
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
$string['showcourseevents'] = 'Kurstermine anzeigen';
$string['showglobalevents'] = 'Website-Termine anzeigen';
$string['showgroupsevents'] = 'Gruppentermine';
$string['shown'] = 'angezeigt';
$string['showuserevents'] = 'Nutzertermine anzeigen';
$string['siteevents'] = 'Website-Termine';
$string['spanningevents'] = 'Folgetermine';
$string['subscriptionname'] = 'Kalendername';
$string['subscriptionremoved'] = 'Kalenderabonnement \'{$a}\' entfernt';
$string['subscriptions'] = 'Abonnements';
$string['subscriptionupdated'] = 'Kalenderabonnement \'{$a}\' aktualisiert';
$string['subsource'] = 'Terminquelle: {$a->name}';
$string['sun'] = 'So';
$string['sunday'] = 'Sonntag';
$string['thu'] = 'Do';
$string['thursday'] = 'Donnerstag';
$string['timeformat_12'] = '12-Stunden-Anzeige';
$string['timeformat_24'] = '24-Stunden-Anzeige';
$string['timeperiod'] = 'Zeitdauer';
$string['today'] = 'Heute';
$string['tomorrow'] = 'Morgen';
$string['tt_deleteevent'] = 'Termin löschen';
$string['tt_editevent'] = 'Termin bearbeiten';
$string['tt_hidecourse'] = 'Kurstermine sind angezeigt (klicken Sie, um sie zu verbergen).';
$string['tt_hideglobal'] = 'Website-Termine werden angezeigt (klicken Sie, um sie zu verbergen).';
$string['tt_hidegroups'] = 'Gruppentermine werden angezeigt (klicken Sie hier, um sie zu verbergen).';
$string['tt_hideuser'] = 'Nutzertermine werden angezeigt (klicken Sie hier, um sie zu verbergen).';
$string['tt_showcourse'] = 'Kurstermine sind verborgen (klicken Sie, um sie anzuzeigen).';
$string['tt_showglobal'] = 'Website-Termine sind verborgen (klicken Sie, um sie anzuzeigen).';
$string['tt_showgroups'] = 'Gruppentermine sind verborgen (klicken Sie, um sie anzuzeigen).';
$string['tt_showuser'] = 'Nutzertermine sind verborgen (klicken Sie, um sie anzuzeigen).';
$string['tue'] = 'Di';
$string['tuesday'] = 'Dienstag';
$string['typecourse'] = 'Kurstermin';
$string['typegroup'] = 'Gruppentermin';
$string['typesite'] = 'Website-Termin';
$string['typeuser'] = 'Nutzertermin';
$string['upcomingevents'] = 'Aktuelle Termine';
$string['upcomingeventsfor'] = 'Termine für:';
$string['urlforical'] = 'URL des iCal-Exports für ein Kalender-Abo';
$string['user'] = 'Nutzer/in';
$string['userevent'] = 'Nutzertermin';
$string['userevents'] = 'Nutzertermine';
$string['wed'] = 'Mi';
$string['wednesday'] = 'Mittwoch';
$string['weekly'] = 'Wöchentlich';
$string['weeknext'] = 'Nächste Woche';
$string['weekthis'] = 'Diese Woche';
$string['yesterday'] = 'Gestern';
$string['youcandeleteallrepeats'] = 'Dieser Termin ist Teil einer ganzen Reihe von Terminen. Sie können diesen einzelnen Termin oder alle {$a} Termine dieser Reihe auf einmal löschen.';
