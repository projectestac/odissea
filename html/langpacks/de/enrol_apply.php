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
 * Strings for component 'enrol_apply', language 'de', version '4.5'.
 *
 * @package     enrol_apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'Ihre Kursanmeldung wurde abgelehnt.';
$string['applicationconfirmednotification'] = 'Ihre Kursanmeldung wurde bestätigt.';
$string['applicationdeferrednotification'] = 'Ihre Kursanmeldung wurde zurückgestellt (Sie sind zur Zeit auf der Warteliste).';
$string['apply:config'] = 'Einschreibungsinstanzen anlegen';
$string['apply:manage'] = 'Nutzereinschreibungen verwalten';
$string['apply:manageapplications'] = 'Einschreibungsanfragen verwalten';
$string['apply:unenrol'] = 'Nutzer/innen aus dem Kurs entfernen';
$string['apply:unenrolself'] = 'Sich selbst aus dem Kurs abmelden';
$string['applycomment'] = 'Anmerkung';
$string['applydate'] = 'Einschreibungsdatum';
$string['applymanage'] = 'Einschreibungsanträge verwalten';
$string['applyuser'] = 'Vorname / Nachname';
$string['applyusermail'] = 'E-Mail';
$string['btncancel'] = 'Einschreibungsanfragen ablehnen';
$string['btnconfirm'] = 'Einschreibungsanfragen bestätigen';
$string['btnwait'] = 'Einschreibungsanfragen zurückstellen';
$string['cancelmail_heading'] = 'E-Mail für Ablehnung der Einschreibung';
$string['cancelmailcontent'] = 'E-Mail für Ablehung der Einschreibung (Inhalt)';
$string['cancelmailcontent_desc'] = 'Verwenden Sie die spezielle Platzhalter für die E-Mail, um sie mit Daten aus Moodle zu versehen.<br>{firstname}: Vorname der Person; {lastname}: Nachname der Person; {username}: Anmeldename der Person; {content}: Kursname';
$string['cancelmailsubject'] = 'E-Mail-Betreff für Verwerfen der Einschreibung';
$string['cantenrol'] = 'Einschreibung ist deaktiviert oder inaktiv';
$string['comment'] = 'Anmerkung';
$string['confirmenrol'] = 'Einschreibeanfragen bearbeiten';
$string['confirmmail_heading'] = 'E-Mail für Bestätigung der Einschreibung';
$string['confirmmailcontent'] = 'E-Mail für Bestätigung der Einschreibung (Inhalt)';
$string['confirmmailcontent_desc'] = 'Verwenden Sie die spezielle Platzhalter für die E-Mail, um sie mit Daten aus Moodle zu versehen.<br>{firstname}: Vorname der Person; {lastname}: Nachname der Person; {username}: Anmeldename der Person; {content}: Kursname';
$string['confirmmailsubject'] = 'E-Mail-Betreff für Bestätigung der Einschreibung';
$string['confirmusers'] = 'Einschreibung bestätigen';
$string['confirmusers_desc'] = 'Nutzer/innen in grau markierten Zeilen sind auf der Warteliste.';
$string['coursename'] = 'Kurs';
$string['custom_label'] = 'Nutzerdefinierte Beschriftung';
$string['defaultperiod'] = 'Standard Einschreibedauer';
$string['defaultperiod_desc'] = 'Standardmäßige Dauer der gültigen Einschreibung. Wenn auf 0 gesetzt, ist die Einschreibung unbefristet gültig.';
$string['defaultperiod_help'] = 'Standardmäßige Dauer der gültigen Einschreibung, beginnend mit dem Zeitpunkt, an dem die Person sich selbst einschreibt. Wenn deaktiviert, ist die Einschreibung unbefristet gültig.';
$string['editdescription'] = 'Beschreibung anpassen';
$string['enrolname'] = 'Bestätigung der Kurseinschreibung';
$string['enrolperiod'] = 'Dauer der Einschreibung';
$string['enrolperiod_desc'] = 'Standardmäßige Dauer der gültigen Einschreibung. Wenn auf 0 gesetzt, ist die Einschreibung unbefristet gültig.';
$string['enrolperiod_help'] = 'Dauer der gültigen Einschreibung, beginnend mit dem Zeitpunkt, an dem die Person sich selbst einschreibt. Wenn deaktiviert, ist die Einschreibung unbefristet gültig.';
$string['enrolusers'] = 'Nutzer/innen manuell einschreiben';
$string['expiredaction'] = 'Aktion bei Ablauf der Einschreibung';
$string['expiredaction_help'] = 'Wählen Sie die Aktion, die ausgeführt werden soll, wenn die Nutzereinschreibung abläuft.  Beachten Sie bitte, dass einige Nutzerdaten und Einstellungen beim Abmelden vom Kurs gelöscht werden.';
$string['expiry_heading'] = 'Ablauf-Einstellungen';
$string['expirymessageenrolledbody'] = 'Hallo {$a->user},

Dies ist eine Benachrichtigung, dass Ihre Einschreibung in den Kurs \'{$a->course}\' am {$a->timeend} ablaufen wird.

Wenn Sie Hilfe benötigen, kontaktieren Sie bitte  {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Benachrichtigung über den Ablauf der Einschreibung';
$string['expirymessageenrollerbody'] = 'Die Einschreibung in den Kurs \'{$a->course}\' wird in den nächsten {$a->threshold} für die folgenden Nutzer/innen ablaufen:

    {$a->users}

Um ihre Einschreibung zu verlängern, gehen Sie zu {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Benachrichtigung über den Ablauf der Einschreibung';
$string['expirynotifyall'] = 'Trainer/innen und eingeschriebene Nutzer/innen';
$string['expirynotifyenroller'] = 'Nur Trainer/innen';
$string['group'] = 'Gruppenzuweisung';
$string['group_help'] = 'Sie können keine oder mehrere Gruppen zuweisen';
$string['mailtoteacher_suject'] = 'Neue Einschreibungsanfrage';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer/innen';
$string['maxenrolled_help'] = 'Legt die maximale Anzahl von Nutzer/innen fest, die sich selbst einschreiben können. 0 bedeutet keine Obergrenze.';
$string['maxenrolled_tip_1'] = 'aus';
$string['maxenrolled_tip_2'] = 'Plätze sind bereits belegt.';
$string['maxenrolledreached_left'] = 'Maximale Anzahl an zugelassenen Nutzer/innen';
$string['maxenrolledreached_right'] = 'wurde bereits erreicht.';
$string['messageprovider:application'] = 'Benachrichtigungen für Kurseinschreibungen';
$string['messageprovider:cancelation'] = 'Benachrichtigung über die Stornierung der Anmeldung zu einem Kurs';
$string['messageprovider:confirmation'] = 'Benachrichtigung über die Bestätigung der Anmeldung zu einem Kurs';
$string['messageprovider:expiry_notification'] = 'Benachrichtigungen zum Ablaufdatum der Anmeldung anwenden';
$string['messageprovider:waitinglist'] = 'Benachrichtigung über die Zurückstellung von Anträgen zur Einschreibung in einen Kurs';
$string['newapplicationnotification'] = 'Es liegt ein neuer Antrag zur Einschreibung in einen Kurs vor, der noch geprüft werden muss.';
$string['newenrols'] = 'Neue Kurseinschreibungs-Anfrage erlauben';
$string['notification'] = '<b>Einschreibungsantrag wurde erfolgreich gesendet.</b>. <br/><br/>Sie werden per E-Mail informiert, sobald Ihre Einschreibung bestätigt wurde.';
$string['notify_desc'] = 'Festlegen, wer über neue Einschreibungsanträge benachrichtigt wird.';
$string['notify_heading'] = 'Benachrichtigungseinstellungen';
$string['notifycoursebased'] = 'Benachrichtigung über neue Einschreibungsanträge (instanzbasiert, z.B. Kurstrainer/innen)';
$string['notifycoursebased_desc'] = 'Standard für neue Instanzen: Alle benachrichtigen, die über die Berechtigung "Einschreibungen verwalten" für den entsprechenden Kurs verfügen (z.B. Trainer/innen und Manager/innen)';
$string['notifyglobal'] = 'Benachrichtigung über neue Einschreibungen (global, z.B. globale Manager/innen und Administrator/innen)';
$string['notifyglobal_desc'] = 'Festlegen, wer über neue Einschreibungsanträge für einen Kurs benachrichtigt wird.';
$string['opt_commentaryzone'] = 'Kommentarfeld';
$string['opt_commentaryzone_help'] = 'Ja -> Kommentarfeld im Einschreibungsantrag aktivieren';
$string['pluginname'] = 'Bestätigung der Kurseinschreibung';
$string['pluginname_desc'] = 'Mit diesem Plugin können Nutzer/innen die Einschreibung in einen Kurs beantragen. Die Trainer/innen des Kurses müssen die Einschreibung bestätigen.';
$string['privacy:metadata'] = 'Das Plugin zur Bestätigung der Kurseinschreibung speichert keine personenbezogenen Daten.';
$string['sendexpirynotificationstask'] = 'Task "Einschreibungsanfrage, Ablaufbenachrichtigung senden"';
$string['show_extra_user_profile'] = 'Zusätzliche Nutzerprofilfelder auf dem Einschreibungsbildschirm anzeigen';
$string['show_standard_user_profile'] = 'Standardmäßige Nutzerprofilfelder auf dem Einschreibungsbildschirm anzeigen';
$string['status'] = 'Bestätigung der Kurseinschreibung erlauben';
$string['status_desc'] = 'Kurszugriff für intern eingeschriebene Nutzer/innen erlauben.';
$string['submitted_info'] = 'Anmeldeinformation';
$string['user_profile'] = 'Nutzerprofil';
$string['waitmail_heading'] = 'E-Mail für Benachrichtigung über das Setzen auf Warteliste';
$string['waitmailcontent'] = 'E-Mail Inhalt für Benachrichtigung über das Setzen auf Warteliste';
$string['waitmailcontent_desc'] = 'Verwenden Sie die spezielle Platzhalter für die E-Mail, um sie mit Daten aus Moodle zu versehen.<br>{firstname}: Vorname der Person; {lastname}: Nachname der Person; {username}: Anmeldename der Person; {content}: Kursname';
$string['waitmailsubject'] = 'E-Mail-Betreff für Benachrichtigung über das Setzen auf Warteliste';
