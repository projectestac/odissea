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
 * Strings for component 'tool_messageinbound', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Name der Class';
$string['component'] = 'Komponente';
$string['configmessageinboundhost'] = 'Die Adresse des Servers, von dem E-Mails abgeholt werden sollen. Um einen Nicht-Standard-Port zu verwenden erfolgt die Eingabe wie folgt [server]:[port], z.B. mail.example.com:587. Wenn Sie das Feld leer lassen, wird der für den Server-Typ festgelegten Standard-Port verwendet.';
$string['defaultexpiration'] = 'Ablaufzeitraum für Standardadresse';
$string['defaultexpiration_help'] = 'Wenn eine E-Mail-Adresse vom Prozess erzeugt wird, kann eine Gültigkeitsdauer festgelegt werden. Nach Ablauf dieses Zeitraums ist die Nutzung nicht mehr möglich. Diese Einstellung wird empfohlen.';
$string['description'] = 'Beschreibung';
$string['domain'] = 'E-Mail-Domain';
$string['edit'] = 'Bearbeiten';
$string['edithandler'] = 'Einstellungen für den {$a}-Prozess';
$string['editinghandler'] = '{$a} wird bearbeitet';
$string['enabled'] = 'Aktiviert';
$string['fixedenabled_help'] = 'Sie können den Status dieses Prozesses nicht ändern. Ursache kann sein, dass er an anderer Stelle verwandt wird.';
$string['fixedvalidateaddress'] = 'Absenderadresse prüfen';
$string['fixedvalidateaddress_help'] = 'Sie können die Adressprüfung für diesen Prozess nicht ändern. Dies kann daher kommen, weil eine spezifische Einstellung erforderlich ist.';
$string['handlerdisabled'] = 'Der E-Mail-Prozess, den Sie aufgerufen haben, wurde deaktiviert. Ihre Mitteilung konnte daher nicht verarbeitet werden.';
$string['incomingmailconfiguration'] = 'Eingehende E-Mails';
$string['incomingmailserversettings'] = 'Einstellungen für den eingehenden E-Mail-Server';
$string['incomingmailserversettings_desc'] = 'Moodle ist in der Lage entsprechend konfigurierte IMAP-Server aufzurufen. Hier können Sie die dafür erforderlichen Einstellungen vornehmen.';
$string['invalidrecipientdescription'] = 'Die Mitteilung \'{$a->subject}\' konnte nicht authentifiziert werden. Sie wurde von einer anderen E-Mail-Adresse versandt als in Ihrem Profil hinterlegt. Um Ihre Mitteilung authentifizieren zu können, müssen Sie auf diese Mitteilung antworten.';
$string['invalidrecipientdescriptionhtml'] = 'Die Mitteilung \'{$a->subject}\' konnte nicht authentifiziert werden. Sie wurde von einer anderen E-Mail-Adresse versandt als in Ihrem Profil hinterlegt. Um Ihre Mitteilung authentifizieren zu können, müssen Sie auf diese Mitteilung antworten.';
$string['invalidrecipientfinal'] = 'Die Mitteilung \'{$a->subject}\' konnte nicht authentifiziert werden. Sie wurde von einer anderen E-Mail-Adresse versandt als in Ihrem Profil hinterlegt.';
$string['invalid_recipient_handler'] = 'Wenn eine Mitteilung empfangen wird, der Sender aber nicht identifiziert werden kann, verbleibt die Mitteilung auf dem E-Mail-Server. Der Nutzer wird anhand der E-Mail-Adresse im Nutzerprofil benachrichtigt. Er wird damit aufgefordert, die Authentizität der E-Mail zu bestätigen.

Diese Funktion verarbeitet solche Antworten.

Es ist nicht möglich, die Absender-Prüfung abzuschalten, da es möglich ist, dass der Nutzer mit einer falschen E-Mail-Absenderadresse antwortet, weil sein Mail-Client falsch eingerichtet ist.';
$string['invalid_recipient_handler_name'] = 'Ungültige Senderverarbeitung';
$string['mailbox'] = 'Name des E-Mail-Kontos';
$string['mailboxconfiguration'] = 'Einstellungen des E-Mail-Kontos';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'E-Mail-Einstellungen';
$string['message_handlers'] = 'Mitteilungsverwaltung';
$string['messageinbound'] = 'Eintreffende Mitteilungen';
$string['messageinboundenabled'] = 'Mailverfahren für eintreffende Mitteilungen';
$string['messageinboundenabled_desc'] = 'Die Mailverwaltung für eintreffende Mitteilungen muss aktiviert werden, damit entsprechende Kennzeichnungen beim Versand der vorausgehenden Mitteilungen erstellt werden können.';
$string['messageinboundgeneralconfiguration'] = 'Allgemeines';
$string['messageinboundgeneralconfiguration_desc'] = 'Moodle kann eingehende E-Mail-Mitteilungen verarbeiten. So können Antworten auf Forumsbeiträge per E-Mail vorgenommen werden oder Dateien in die persönliche Dateiablage eines Nutzers geschickt werden.';
$string['messageinboundhost'] = 'Eingehender E-Mail-Server';
$string['messageinboundhostpass'] = 'Kennwort';
$string['messageinboundhostpass_desc'] = 'Dieses Passwort haben Sie für den Login zu dem E-Mail-Postfach hinterlegt.';
$string['messageinboundhostssl'] = 'SSL verwenden';
$string['messageinboundhostssl_desc'] = 'Einige E-Mail-Server unterstützen die Verschlüsselung der Kommunikation zwischen Moodle und dem Server. Wir empfehlen die Nutzung der SSL Verschlüsselung wenn dies auf Ihrem Server unterstützt wird.';
$string['messageinboundhosttype'] = 'Servertyp';
$string['messageinboundhostuser'] = 'Nutzername';
$string['messageinboundhostuser_desc'] = 'Diesen Nutzernamen haben Sie für den Login zu dem E-Mail-Postfach hinterlegt.';
$string['messageinboundmailboxconfiguration_desc'] = 'Wenn Mitteilungen versandt werden, nutzen Sie das Format address+data@example.com. Um zuverlässige E-Mail-Adressen zu erzeugen legen Sie die Adressen, die Sie vor und nach dem @-Zeichen verwenden, getrennt an.  Der Mailboxname in dem Beispiel oben wäre \'address\' und die E-Mail-Domain lautet \'example.com\'. Verwenden Sie für diesen Zweck eine gesonderte E-Mail-Adresse.';
$string['messageprocessingerror'] = 'Sie haben vor kurzem Eine E-Mail mit dem Betreff  "{$a->subject}" versandt. Diese konnte nicht zugestellt werden.

Die Gründe hierfür stehen hier unten.

{$a->error}';
$string['messageprocessingerrorhtml'] = '{$a->error}<p>Sie haben vor kurzem eine E-Mail mit dem Betreff "{$a->subject}" versandt.  Diese konnte nicht zugestellt werden.</p>
<p>Die Gründe dafür stehen hier unten.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Die E-Mail \'{$a->subject}\' konnte nicht verarbeitet werden. Folgender Fehler ist aufgetreten: \'{$a->message}\'.';
$string['messageprocessingfailedunknown'] = 'Die E-Mail \'{$a->subject}\' konnte nicht verarbeitet werden. Für weitere Informationen wenden Sie sich an eine/n Administrator/in.';
$string['messageprocessingsuccess'] = '{$a->plain}

Wenn Sie künftig diese Benachrichtigungen nicht erhalten wollen, können Sie die Einstellungen für persönliche Benachrichtigungen anpassen. Öffnen Sie den folgenden Link {$a->messagepreferencesurl} in Ihrem Browser.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Wenn Sie künftig diese Benachrichtigungen nicht erhalten wollen, können Sie die Einstellungen für persönliche Benachrichtigungen anpassen. Öffnen Sie diesen  <a href="{$a->messagepreferencesurl}">Link </a> in Ihrem Browser</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Einholen einer Bestätigung, dass eine eingehende Mitteilung von Ihnen stammt';
$string['messageprovider:messageprocessingerror'] = 'Warnung, wenn eine eingehende Mitteilung nicht verarbeitet werden konnte';
$string['messageprovider:messageprocessingsuccess'] = 'Bestätigung, dass eine eingehende Mitteilung erfolgreich verarbeitet wurde';
$string['name'] = 'Name';
$string['noencryption'] = 'Aus - keine Verschlüsselung';
$string['noexpiry'] = 'Kein Ablauf';
$string['oldmessagenotfound'] = 'Sie haben versucht, eine Benachrichtung manuell zu bestätigen.. Die Benachrichtigung konnte jedoch nicht gefunden werden. Das kann passieren wenn die Nachricht bereits bestätigt wurde oder der zulässige Zeitraum abgelaufen ist.';
$string['oneday'] = 'Ein Tag';
$string['onehour'] = 'Eine Stunde';
$string['oneweek'] = 'Eine Woche';
$string['oneyear'] = 'Ein Jahr';
$string['pluginname'] = 'Einstellungen für eintreffende Mitteilungen';
$string['privacy:metadata:coreuserkey'] = 'Nutzerschlüssel zur Prüfung der empfangenen E-Mail';
$string['privacy:metadata:messagelist'] = 'Liste von Mittteilungs-Identifiern mit fehlender Prüfung erfordern weitere Autorisierung';
$string['privacy:metadata:messagelist:address'] = 'Adresse, an die die E-Mail gesendet wurde';
$string['privacy:metadata:messagelist:messageid'] = 'Mitteilungs-ID';
$string['privacy:metadata:messagelist:timecreated'] = 'Zeitpunkt, zu dem die Aufzeichnung erfolgte';
$string['privacy:metadata:messagelist:userid'] = 'ID des Nutzers, der Mitteilung bestätigen muss';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Absenderadresse überprüfen';
$string['ssl'] = 'SSL (Auto-detect SSL version)';
$string['sslv2'] = 'SSLv2 (Force SSL Version 2)';
$string['sslv3'] = 'SSLv3 (Force SSL Version 3)';
$string['taskcleanup'] = 'Nicht geprüfte E-Mail-Eingänge entfernen';
$string['taskpickup'] = 'Eingehende E-Mail-Abholung';
$string['tls'] = 'TLS (TLS; started via protocol-level negotiation over unencrypted channel; RECOMMENDED way of initiating secure connection)';
$string['tlsv1'] = 'TLSv1 (direkte Verbindung zur TLS-Server-Version 1.x)';
$string['validateaddress'] = 'E-Mail-Adresse des Absenders überprüfen';
$string['validateaddress_help'] = 'Wenn eine Mitteilung von einem Nutzer empfangen wird, versucht Moodle die Nachricht anhand der E-Mail-Adresse im Profil diesem Nutzer zuzuordnen.

Wenn der Absender nicht passend ist, erhält der Nutzer eine Nachricht, um zu prüfen, ob die Nachricht tatsächlich von ihm versandt wurde.

Wenn die Einstellung deaktiviert ist, wird die E-Mail-Adresse des Absenders nicht geprüft.';
