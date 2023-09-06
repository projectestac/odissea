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
 * Strings for component 'tool_monitor', language 'de', version '4.1'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Neue Regel hinzufügen';
$string['allevents'] = 'Alle Events';
$string['allmodules'] = 'Alle Instanzen';
$string['area'] = 'Bereich';
$string['areatomonitor'] = 'Zu überwachender Bereich';
$string['cachedef_eventsubscriptions'] = 'Speichert die Event-Benachrichtigungen für einzelne Kurse';
$string['contactadmin'] = 'Zur Aktivierung nehmen Sie bitte Kontakt mit dem/der Administrator/in auf.';
$string['core'] = 'Kern';
$string['currentsubscriptions'] = 'Ihre aktuellen Abonnements';
$string['defaultmessagetemplate'] = 'Name der Regel: {rulename}<br />Beschreibung: {description}<br />Eventname: {eventname}';
$string['deleterule'] = 'Regel löschen';
$string['deletesubscription'] = 'Abonnement löschen';
$string['description'] = 'Beschreibung';
$string['disablefieldswarning'] = 'Einge Felder können nicht bearbeitet werden, da diese Regel bereits Abonnenten hat.';
$string['duplicaterule'] = 'Regel duplizieren';
$string['editrule'] = 'Regel bearbeiten';
$string['enablehelp'] = 'Event-Beobachtung de-/aktivieren';
$string['enablehelp_help'] = 'Die Event-Beobachtung muss zunächst aktiviert werden, um Regeln zu erstellen und dann abonnieren zu können.';
$string['errorincorrectevent'] = 'Wählen Sie einen Event, der dem gewählten Plugin zugeordnet ist.';
$string['event'] = 'Event';
$string['eventnotfound'] = 'Event nicht gefunden';
$string['eventrulecreated'] = 'Regel angelegt';
$string['eventruledeleted'] = 'Regel gelöscht';
$string['eventruleupdated'] = 'Regel aktualisiert';
$string['eventsubcreated'] = 'Abonnement angelegt';
$string['eventsubcriteriamet'] = 'Abonnementkritierien sind erfüllt.';
$string['eventsubdeleted'] = 'Abonnement gelöscht';
$string['freqdesc'] = '{$a->freq} mal in {$a->mins} Minute(n)';
$string['frequency'] = 'Meldeschwelle';
$string['frequency_help'] = 'Die Anzahl der Ereignisse innerhalb eines definierten Zeitraums, die den Versand einer Benachrichtigung auslöst.';
$string['inminutes'] = 'in Minuten';
$string['invalidmodule'] = 'Ungültiges Modul';
$string['manage'] = 'Verwalten';
$string['managerules'] = 'Event-Beobachtung';
$string['manageruleslink'] = 'Sie können Events der {$a} Seite verwalten.';
$string['managesubscriptions'] = 'Event-Beobachtung';
$string['managesubscriptionslink'] = 'Sie können sich über Ereignisse der Seite {$a} benachrichtigen lassen.';
$string['messageprovider:notification'] = 'Systemnachrichten über Regel-Abonnements';
$string['messagetemplate'] = 'Benachrichtigungen';
$string['messagetemplate_help'] = 'Eine Benachrichtigung wird dem Empfänger zugesandt, wenn die Meldeschwelle erreicht wurde. Sie kann einen oder mehrere Platzhalter enthalten:

* Link zur Seite des Ereignisses {link}<br />
* Link zum beobachteten Bereich {modulelink}<br />
* Name der Regel {rulename}<br />
* Beschreibung {description}<br />
* Event/Ereignis {eventname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Instanz';
$string['monitor:managerules'] = 'Regeln zur Event-Beobachtung verwalten';
$string['monitor:managetool'] = 'Event-Beobachtung  de-/aktivieren';
$string['monitor:subscribe'] = 'Benachrichtung für Event-Ereignisse abonnieren';
$string['monitordisabled'] = 'Die Beobachtung von Events ist zur Zeit deaktiviert.';
$string['monitorenabled'] = 'Die Beobachtung von Events ist jetzt aktiviert.';
$string['norules'] = 'Es gibt zur Zeit keine Event-Benachrichtungsregeln';
$string['pluginname'] = 'Event-Beobachtung';
$string['privacy:createdrules'] = 'Regel für Ereignisbeobachtung, die ich erstellte';
$string['privacy:metadata:description'] = 'Beschreibung der Regel';
$string['privacy:metadata:eventname'] = 'Vollständig qualifizierter Name des Events';
$string['privacy:metadata:frequency'] = 'Häufigkeit der Systemnachrichten';
$string['privacy:metadata:historysummary'] = 'Speichert den Verlauf der gesendeten Benachrichtigungen';
$string['privacy:metadata:inactivedate'] = 'Zeitraum (in Tagen) nachdem ein inaktiver Account gelöscht wird (Selbstregistrierung ohne Bestätigung)';
$string['privacy:metadata:lastnotificationsent'] = 'Wann zuletzt eine Benachrichtigung für Registrierung versandt wurde';
$string['privacy:metadata:messagesummary'] = 'Mitteilungen wurden über das Mitteilungssystem gesendet.';
$string['privacy:metadata:name'] = 'Name der Regel';
$string['privacy:metadata:plugin'] = 'Frankenstyle-Name des Plugins (eindeutige Bezeichnung)';
$string['privacy:metadata:rulessummary'] = 'Speichert Regeln zur Beobachtung';
$string['privacy:metadata:subscriptionssummary'] = 'Speichert Nutzerzuordnung in verschiedene Regeln';
$string['privacy:metadata:template'] = 'Nachrichten-Template';
$string['privacy:metadata:timecreatedrule'] = 'Wann die Regel erstellt wurde';
$string['privacy:metadata:timecreatedsub'] = 'Wann das Abonnement erstellt wurde';
$string['privacy:metadata:timemodifiedrule'] = 'Wann Regel zuletzt verändert wurde';
$string['privacy:metadata:timesent'] = 'Zeitpunkt des Nachrichtenversands';
$string['privacy:metadata:timewindow'] = 'Zeitfenster in Sekunden';
$string['privacy:metadata:userid'] = 'ID des Nutzers, der die Regel erstellt hat';
$string['privacy:metadata:useridhistory'] = 'ID des Nutzers, dem die Benachrichtigung gesendet wurde';
$string['privacy:metadata:useridsub'] = 'ID des Abonnenten';
$string['privacy:subscriptions'] = 'Meine Ereignis-Abonnement';
$string['processevents'] = 'Events abfragen';
$string['ruleareyousure'] = 'Wollen Sie die Regel "{$a}" wirklich löschen?';
$string['ruleareyousureextra'] = 'Es gibt {$a} Abonnements für diese Regel. Diese werden/wird ebenfalls gelöscht.';
$string['rulecopysuccess'] = 'Regel erfolgreich dupliziert';
$string['ruledeletesuccess'] = 'Regel erfolgreich gelöscht';
$string['rulehelp'] = 'Regeldetails';
$string['rulehelp_help'] = 'Diese Regel kontrolliert, ob ein Event \'{$a->eventname}\' in \'{$a->eventcomponent}\'  {$a->frequency} fach innerhalb von {$a->minutes} Minute(n) sich ereignet hat.';
$string['rulename'] = 'Regelname';
$string['rulenopermission'] = 'Sie haben keine Berechtigung, um Ereignisse zu abonnieren.';
$string['rulenopermissions'] = 'Sie haben nicht die Berechtigung  "{$a} eine Regel"';
$string['rulescansubscribe'] = 'Regeln, die Sie abonnieren können';
$string['selectacourse'] = 'Kurs auswählen';
$string['selectcourse'] = 'Mit diesem Bericht erhalten Sie Informationen über verfügbare Module auf Kursebene.';
$string['subareyousure'] = 'Wollen Sie das Abonnement für die Regel "{$a}" wirklich löschen?';
$string['subcreatesuccess'] = 'Abonnement erfolgreich eingerichtet';
$string['subdeletesuccess'] = 'Abonnement erfolgreich abgeschaltet';
$string['subhelp'] = 'Abonnementdetails';
$string['subhelp_help'] = 'Dieses Abonnement überprüdt, ob das Ereignis \'{$a->eventname}\' in \'{$a->moduleinstance}\'  {$a->frequency} fach innerhalb von {$a->minutes} Minute(n) eingetreten ist.';
$string['subscribeto'] = 'Abonnement für Regel "{$a}"';
$string['taskchecksubscriptions'] = 'Ungültige Rollenzuweisungen aktivieren/deaktivieren';
$string['taskcleanevents'] = 'Event-Monitor-Einträge löschen';
$string['unsubscribe'] = 'Abmelden';
