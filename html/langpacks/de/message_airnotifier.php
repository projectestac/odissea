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
 * Strings for component 'message_airnotifier', language 'de', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Endgeräte verwalten';
$string['airnotifieraccesskey'] = 'Airnotifier-Zugangsschlüssel';
$string['airnotifierappname'] = 'Airnotifier-Name der App';
$string['airnotifierfielderror'] = 'Entfernen Sie bitte alle Leerzeichen oder unnötigen Zeichen aus dem folgenden Feld: {$a}';
$string['airnotifiermobileappname'] = 'Name der mobilen App';
$string['airnotifierport'] = 'Airnotifier-Port';
$string['airnotifierurl'] = 'Airnotifier-Server';
$string['checkconfiguration'] = 'Konfiguration für die Push-Mitteilungen prüfen';
$string['configairnotifieraccesskey'] = 'Zugriffsschlüssel für die Verbindung zum Airnotifier-Server. Sie erhalten einen Zugriffsschlüssel, wenn Sie unten auf den Link "Zugriffsschlüssel anfordern" klicken (nur für registrierte Websites) oder indem Sie ein Konto im <a href="https://apps.moodle.com">Moodle Apps Portal</a> erstellen.';
$string['configairnotifierappname'] = 'Die mobile App identifiziert sich mit diesem Name beim Airnotifier-Server.';
$string['configairnotifiermobileappname'] = 'Die mobile App hat eine eindeutige ID, z.B. com.moodle.moodlemobile';
$string['configairnotifierport'] = 'Port für die Verbindung zum Airnotifier-Server';
$string['configairnotifierurl'] = 'Die Server-URL, zu der eine Verbindung zum Senden von Push-Mitteilungen hergestellt werden soll.';
$string['configured'] = 'Konfiguriert';
$string['deletecheckdevicename'] = 'Ihr Endgerät \'{$a->name}\' löschen';
$string['deletedevice'] = 'Endgerät löschen. Beachten Sie, dass eine App das Endgerät erneut registrieren kann. Wenn das Endgerät sich erneut verbindet, dann deaktivieren Sie es.';
$string['devicetoken'] = 'Geräte-Token';
$string['enableprocessor'] = 'Mobile Systemnachrichten aktivieren';
$string['errorretrievingkey'] = 'Beim Abrufen des Zugriffsschlüssels ist ein Fehler aufgetreten. Ihre Website muss registriert sein, um diesen Service nutzen zu können. Wenn Ihre Website bereits registriert ist, aktualisieren Sie bitte Ihre Registrierung. Alternativ erhalten Sie einen Zugriffsschlüssel, indem Sie ein Konto im <a href="https://apps.moodle.com">Moodle Apps Portal</a> erstellen.';
$string['keyretrievedsuccessfully'] = 'Der Zugriffsschlüssel wurde erfolgreich abgerufen. Um auf die Nutzungsstatistiken für Moodle-Apps zuzugreifen, erstellen Sie ein Konto im <a href="https://apps.moodle.com">Moodle Apps-Portal</a>.';
$string['messageprovidersempty'] = 'In den standardmäßigen Einstellungen für die Push-Mitteilungen keine mobilen Benachrichtigungen aktiviert.';
$string['messageproviderslow'] = 'In den standardmäßigen Einstellungen für die Push-Mitteilungen sind nur sehr wenige mobile Benachrichtigungen aktiviert.';
$string['moodleappsportallimitswarning'] = 'Beachten Sie bitte, dass die Anzahl der Endgeräte, die Push-Mitteilungen empfangen dürfen, von Ihrem Moodle-App-Abonnement abhängt. Weitere Informationen finden Sie im <a href="{$a}" target="_blank">Moodle Apps-Portal</a>.';
$string['nodevices'] = 'Keine registrierten Endgeräte. Die Endgeräte werden automatisch registriert, wenn Sie die mobile App installieren und diese Website aufrufen.';
$string['nopermissiontomanagedevices'] = 'Sie haben keine Rechte, um die Endgeräte zu verwalten.';
$string['notconfigured'] = 'Der Airnotifier-Server ist nicht konfiguriert, so dass keine Push-Mitteilungen gesendet werden können.';
$string['notificationsserverconfiguration'] = 'Airnotifier-Konfiguration';
$string['pluginname'] = 'Mobile';
$string['privacy:appiddescription'] = 'Dies ist ein Identifier für die genutzte Anwendung.';
$string['privacy:enableddescription'] = 'Wenn dieses Endgerät für den Airnotifier aktiviert ist.';
$string['privacy:metadata:date'] = 'Datum, an dem die Nachricht gesendet wurde.';
$string['privacy:metadata:enabled'] = 'Ob das Airnotifier-Gerät aktiv ist.';
$string['privacy:metadata:externalpurpose'] = 'Diese Information wird an die externe Website gesendet und dann unmittelbar an das mobile Endgerät weitergeleitet.';
$string['privacy:metadata:fullmessage'] = 'Die gesamte Nachricht.';
$string['privacy:metadata:notification'] = 'Wenn die Mitteilung eine Benachrichtigung ist.';
$string['privacy:metadata:smallmessage'] = 'Ein Teil der Nachricht.';
$string['privacy:metadata:subject'] = 'Betreff der Mitteilung';
$string['privacy:metadata:tableexplanation'] = 'Die Airnotifier Geräteinformation wird hier gespeichert.';
$string['privacy:metadata:userdeviceid'] = 'Die ID zur Verlinkung auf das mobile Endgerät';
$string['privacy:metadata:userfromfullname'] = 'Vollständiger Name der Person, die die Nachricht gesendet hat.';
$string['privacy:metadata:userfromid'] = 'Nutzer-ID der Person, die die Nachricht gesendet hat.';
$string['privacy:metadata:userid'] = 'ID  der Person, die die Nachricht gesendet hat.';
$string['privacy:metadata:username'] = 'Nutzername der Person.';
$string['privacy:metadata:usersubsystem'] = 'Das Plugin ist mit dem Nutzer-Subsystem verbunden.';
$string['privacy:subcontext'] = 'Airnotifier-Mitteilungen';
$string['requestaccesskey'] = 'Zugangsschlüssel abrufen';
$string['sendtest'] = 'Push-Mitteilung an meine mobilen Endgeräte senden';
$string['sendtestconfirmation'] = 'Eine Push-Mitteilung wird an die mobilen Endgeräte gesendet, mit denen Sie eine Verbindung zu dieser Website hergestellt haben. Stellen Sie sicher, dass Ihre Endgeräte mit dem Internet verbunden sind und die mobile App nicht geöffnet ist. Push-Mitteilungen werden nämlich nur angezeigt, wenn sie im Hintergrund empfangen werden.';
$string['serverconnectivityerror'] = 'Diese Website kann keine Verbindung zum Benachrichtigungsserver {$a} herstellen.';
$string['showhide'] = 'Endgerät aktivieren / deaktivieren';
$string['sitemustberegistered'] = 'Um die öffentliche Airnotifier-Instanz verwenden zu können, muss Ihre Website registriert sein. Alternativ erhalten Sie einen Zugriffsschlüssel, indem Sie ein Konto im <a href="https://apps.moodle.com">Moodle Apps Portal</a> erstellen.';
$string['unknowndevice'] = 'Unbekanntes Gerät';
$string['userdevices'] = 'Mobile Endgeräte';
