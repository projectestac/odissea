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
$string['allowusermailcharset'] = 'Zeichensatz für E-Mails wählbar';
$string['configallowattachments'] = 'Diese Option legt fest, ob Dateianhänge bei E-Mail-Mitteilungen verschiedener Aktivitäten (z.B. Auszeichnungen) mit versandt werden.';
$string['configallowusermailcharset'] = 'Diese Option legt fest, dass Nutzer/innen den E-Mail-Zeichensatz in ihren Mitteilungseinstellungen selber festlegen dürfen.';
$string['configemailonlyfromnoreplyaddress'] = 'Diese Option legt fest, dass alle E-Mails mit dem Nicht-Antworten-Absender versandt werden. Auf diese Weise können auch Spam-Filter von externen E-Mail-Servern zufrieden gestellt werden, die andernfalls die E-Mails von Moodle zurückweisen würden.';
$string['configmailnewline'] = 'Zeichen für Zeilenschaltung in E-Mails. CRLF ist gemäß RFC 822bis notwendig. Einige Mailserver wandeln LF automatisch in CRLF um, andere konvertieren CRLF falsch in CRCRLF und wieder andere weisen Mails mit reinem LF zurück (z.B. qmail). Probieren Sie unterschiedliche Einstellungen aus, falls Probleme mit dem Mailversand auftreten oder doppelte Zeilenschaltungen angezeigt werden.';
$string['confignoreplyaddress'] = 'Moodle versendet E-Mails im Auftrage von seinen Nutzer/innen, z.B. aus Foren. Tragen Sie in dieses Feld eine gültige E-Mail-Adresse ein, die als Absender beim Versand genutzt werden soll, wenn die E-Mail-Adresse des Absenders nicht für Rückantworten genutzt werden kann.';
$string['configsitemailcharset'] = 'Diese Option legt fest, dass alle E-Mails aus dieser Website mit dem standardmäßigen Zeichensatz versendet werden.';
$string['configsmtpauthtype'] = 'Diese Option legt den Authentifizierungstyp für den SMTP-Server fest.';
$string['configsmtphosts'] = 'Tragen Sie einen oder mehrere lokale SMTP-Server mit vollem Namen ein, die für den E-Mail-Versand benutzt werden sollen (z.B. \'mailserver.de\' oder \'eins.mailserver.de;zwei.mailserver.de\').  Die E-Mail-Adresse sollte auf die Domain des Moodle-Systems ausgestellt sein.
Falls Ihr Server einen Nicht-Standard-Port benutzt (also nicht Port 25), verwenden Sie zur Eingabe die Syntax [server]:[port] (z.B. mailserver.de:587). Wenn das Feld frei bleibt, wird die Standardmethode von PHP zum Senden von E-Mails verwendet. Das führt sehr häufig zur Nichtzustellung von E-Mails, da diese nicht autorisiert sind.';
$string['configsmtpmaxbulk'] = 'Maximale Anzahl von Nachrichten pro SMTP-Session. Die Gruppierung von Mitteilungen sollte den Versand von E-mails beschleunigen. Mit Werten kleiner als 2 wird für jede E-Mail eine neue SMTP-Session gestartet.';
$string['configsmtpsecure'] = 'Wenn der SMTP-Server eine sichere Verbindung verlangt, geben Sie hier das richtige Protokoll an.';
$string['configsmtpuser'] = 'Sofern Sie einen SMTP-Server angegeben haben und der Server Zugangsdaten erfordert, dann geben Sie hier Anmeldenamen und Kennwort an.';
$string['email'] = 'E-Mail-Mitteilung senden an';
$string['emailonlyfromnoreplyaddress'] = 'E-Mails mit Nicht-Antworten-Adresse versenden?';
$string['ifemailleftempty'] = 'Leer lassen, um Mail an die Adresse {$a} senden zu lassen.';
$string['mailnewline'] = 'Festlegung für Zeilenschaltung in E-Mails';
$string['none'] = 'Keine';
$string['noreplyaddress'] = 'Nicht-Antworten-Adresse';
$string['pluginname'] = 'E-Mail';
$string['sitemailcharset'] = 'E-Mail-Zeichensatz';
$string['smtpauthtype'] = 'SMTP Authentifizierungstyp';
$string['smtphosts'] = 'SMTP-Server';
$string['smtpmaxbulk'] = 'SMTP-Massenversand';
$string['smtppass'] = 'SMTP-Kennwort';
$string['smtpsecure'] = 'SMTP-Sicherheit';
$string['smtpuser'] = 'SMTP-Anmeldename';
