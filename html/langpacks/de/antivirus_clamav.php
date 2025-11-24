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
 * Strings for component 'antivirus_clamav', language 'de', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Derzeit liegt ein Problem beim AntiVirus-Scannen vor. Ihre Datei {$a->item} wurde nicht hochgeladen. Versuchen Sie es später nochmal.';
$string['clamfailed'] = 'ClamAV wurde nicht vollständig ausgeführt. Die Fehlermeldung lautet: {$a}. Die Ausgabe von ClamAV ist:';
$string['clamfailureonupload'] = 'Bei einem ClamAV-Fehler';
$string['configclamactlikevirus'] = 'Dateien wie Viren behandeln';
$string['configclamdonothing'] = 'Dateien als in Ordnung behandeln';
$string['configclamfailureonupload'] = 'Wenn "Dateien als OK behandeln" ausgewählt ist, werden die Dateien in das Zielverzeichnis verschoben. Wenn "Hochladen ablehnen, erneut versuchen" ausgewählt ist, werden Nutzer/innen aufgefordert, es später nochmal zu versuchen.
<br />Wenn "Dateien wie Viren behandeln" ausgewählt ist, werden Dateien in den Quarantänebereich verschoben oder gelöscht.
<br />Warnung: Wenn mit dieser Option aus irgendeinem Grund clam nicht ausgeführt werden kann (z.B. aufgrund eines ungültigen pathtoclam), werden ALLE hochgeladenen Dateien in den angegebenen Quarantänebereich verschoben oder gelöscht.';
$string['configclamtryagain'] = 'Hochladen abgelehnt. Versuchen Sie es nochmal.';
$string['errorcantopensocket'] = 'Die Verbindung zum Unix Domain Socket führte zu einem Fehler: {$a}';
$string['errorclamavnoresponse'] = 'ClamAV reagiert nicht. Prüfen Sie den Ausführungsstatus des Deamons.';
$string['errornounixsocketssupported'] = 'Die Verbindung über Unix Domain Sockets wird auf diesem System nicht unterstützt. Verwenden Sie stattdessen die Option \'Befehlszeile\'.';
$string['invalidpathtoclam'] = 'Der Pfad zu ClamAV \'{$a}\' ist ungültig.';
$string['pathtoclam'] = 'Befehlszeile';
$string['pathtoclamdesc'] = 'Wenn die Ausführungsmethode als \'Befehlszeile\' gesetzt ist, geben Sie hier den Pfad zu ClamAV ein. Unter Linux wird dies /usr/bin/clamscan oder /usr/bin/clamdscan sein.';
$string['pathtounixsocket'] = 'Unix Domain Socket';
$string['pathtounixsocketdesc'] = 'Wenn die Ausführungsmethode als \'Unix Domain Socket\' gesetzt ist, geben Sie hier den Pfad zum ClamAV Unix Socket ein. Auf Debian Linux ist dies /var/run/clamav/clamd.ctl. Stellen Sie sicher, dass der ClamAV-Daemon über Lesezugriff auf hochgeladene Dateien verfügt. Am einfachsten ist es, den Nutzer \'clamav\' zur Webservergruppe (\'www-data\' im Debian Linux) hinzuzufügen.';
$string['pluginname'] = 'ClamAV Antivirus';
$string['privacy:metadata'] = 'Das Plugin \'ClamAV Antivirus\' speichert keine personenbezogenen Daten.';
$string['quarantinedir'] = 'Quarantäne-Verzeichnis';
$string['runningmethod'] = 'Ausführungsmethode';
$string['runningmethodcommandline'] = 'Befehlszeile';
$string['runningmethoddesc'] = 'Methode zum Ausführen von ClamAV. Die Befehlszeile wird üblicherweise verwendet, aber auf Unix-Systemen könnte eine bessere Leistung durch die Verwendung von System-Sockets erreicht werden.';
$string['runningmethodtcpsocket'] = 'TCP Socket';
$string['runningmethodunixsocket'] = 'Unix Domain Socket';
$string['tcpsockethost'] = 'TCP Socket Hostname';
$string['tcpsockethostdesc'] = 'Domainname des ClamAV-Servers';
$string['tcpsocketport'] = 'TCP Socket Port';
$string['tcpsocketportdesc'] = 'Port, der für die Verbindung mit dem ClamAV-Server verwendet werden soll';
$string['tries'] = 'Scanversuche';
$string['tries_desc'] = 'Anzahl der Versuche, die ClamAV unternimmt, wenn während des Scanvorgangs ein Fehler auftritt.';
$string['tries_notice'] = 'ClamAV Scan wurde {$a->tries}-mal versucht.
{$a->notice}';
$string['unknownerror'] = 'Ein unbekannter Fehler ist bei ClamAV aufgetreten.';
