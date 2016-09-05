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
 * Strings for component 'message_email', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowattachments'] = 'Anhänge erlauben';
$string['allowusermailcharset'] = 'E-Mail-Zeichensatz wählbar';
$string['configallowattachments'] = 'Diese Option legt fest, ob E-Mail-Mitteilungen auch mit Anhängen versandt werden (z.B. mit Auszeichnungen).';
$string['configallowusermailcharset'] = 'Diese Option legt fest, ob Nutzer/innen den E-Mail-Zeichensatz in ihren persönlichen Einstellungen selber festlegen können.';
$string['configemailonlyfromnoreplyaddress'] = 'Diese Option legt fest, dass alle E-Mails mit dem Nicht-Antworten-Absender versandt werden. Auf diese Weise können AntiSpoofing-Filter von externen E-Mail-Servern zufrieden gestellt werden, die andernfalls die E-Mails von Moodle zurückweisen würden.';
$string['configmailnewline'] = 'Zeichen für die Zeilenschaltung in E-Mails. Gemäß RFC 822bis ist CRLF notwendig. Leider wandeln einige E-Mail-Server automatisch LF in CRLF um, andere konvertieren CRLF falsch in CRCRLF und wieder andere weisen E-Mails mit reinem LF zurück (z.B. qmail). Probieren Sie unterschiedliche Einstellungen aus, falls Probleme mit dem E-Mail-Versand auftreten oder doppelte Zeilenschaltungen vorkommen.';
$string['confignoreplyaddress'] = 'E-Mails werden manchmal auf Veranlassung einer Person versandt, z.B. bei Forumsbeiträgen. Tragen Sie in dieses Feld eine gültige E-Mail-Adresse ein, die als Absender genutzt wird, wenn niemand die persönliche E-Mail-Adresse des Absenders sehen oder für Rückantworten nicht benutzen soll.';
$string['configsitemailcharset'] = 'Diese Option legt fest, ob alle E-Mails mit dem standardmäßigen Zeichensatz versandt werden.';
$string['configsmtpauthtype'] = 'Diese Option legt die Art der Authentifizierung für den SMTP-Server fest.';
$string['configsmtphosts'] = '<p>Tragen Sie einen oder mehrere lokale SMTP-Server ein, die für den E-Mail-Versand benutzt werden sollen (z.B. \'mail.server.de\' oder \'mail1.server.de;mail2.server.de\').</p>
<p>Falls Ihr Server einen Nicht-Standard-Port benutzt (also nicht Port 25), geben Sie Server und Port in der Syntax [server]:[port] an (z.B. mail.server.de:587).  Für sichere Verbindungen, normalerweise über Port 465 (SSL) oder 587 (TLS), wählen Sie auch das Sicherheitsprotokoll aus.</p
<p>Wenn das Feld frei bleibt, wird für den E-Mail-Versand die Standardmethode von PHP verwendet. Dies führt sehr häufig zur Nichtzustellung von E-Mails, da diese nicht autorisiert sind.</p>';
$string['configsmtpmaxbulk'] = 'Maximale Anzahl von Nachrichten pro SMTP-Session. Die Gruppierung von Nachrichten sollte den Versand von E-Mails beschleunigen. Mit Werten kleiner als 2 wird für jede E-Mail eine neue SMTP-Session gestartet.';
$string['configsmtpsecure'] = 'Wenn der SMTP-Server eine sichere Verbindung verlangt, geben Sie hier das richtige Sicherheitsprotokoll an.';
$string['configsmtpuser'] = 'Wenn Sie einen SMTP-Server angegeben haben und der Server Zugangsdaten erfordert, dann tragen Sie hier Anmeldenamen und Kennwort ein.';
$string['email'] = 'E-Mail-Mitteilung senden an';
$string['emailonlyfromnoreplyaddress'] = 'E-Mails immer mit der Nicht-Antworten-Adresse versenden?';
$string['ifemailleftempty'] = 'Leer lassen, um E-Mails an die Adresse {$a} senden zu lassen.';
$string['mailnewline'] = 'Zeichen für die Zeilenschaltung';
$string['none'] = 'Keine';
$string['noreplyaddress'] = 'Nicht-Antworten-Adresse';
$string['pluginname'] = 'E-Mail';
$string['sitemailcharset'] = 'E-Mail-Zeichensatz';
$string['smtpauthtype'] = 'SMTP-Authentifizierung';
$string['smtphosts'] = 'SMTP-Server';
$string['smtpmaxbulk'] = 'Limit für SMTP-Session';
$string['smtppass'] = 'SMTP-Kennwort';
$string['smtpsecure'] = 'SMTP-Sicherheit';
$string['smtpuser'] = 'SMTP-Anmeldename';
