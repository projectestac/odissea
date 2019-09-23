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
 * Strings for component 'antivirus_clamav', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'ClamAV wurde nicht vollständig ausgeführt. Die Fehlermeldung lautet: {$a}. Die Ausgabe von ClamAV ist:';
$string['clamfailureonupload'] = 'Bei einem ClamAV-Fehler';
$string['configclamactlikevirus'] = 'Dateien wie Viren behandeln';
$string['configclamdonothing'] = 'Dateien als in Ordnung behandeln';
$string['configclamfailureonupload'] = '<p>Was soll mit hochgeladenen Dateien passieren, wenn ClamAV falsch konfiguriert ist oder wegen eines Fehler nicht richtig funktioniert?</p>
<p>Wenn Dateien \'wie Viren\' behandelt werden sollen, werden sie gelöscht oder in den Quarantänebereich verschoben. Wenn die Dateien \'als in Ordnung\' behandelt werden sollen, werden sie an der vorgesehenen Stelle gespeichert. Bei einem Fehler wird der Administrator über das Problem informiert.</p>
<p>Falls Sie die Einstellung \'Dateien wie Viren behandeln\' wählen und gleichzeitig ClamAV nicht richtig ausgeführt wird, können keine Dateien mehr hochgeladen werden. Dies passiert z.B. bei einer ungültigen Pfadangabe zu ClamAV. Seien Sie mit dieser Einstellung vorsichtig.</p>';
$string['errorcantopensocket'] = 'Die Verbindung zum Unix Domain Socket führte zu einem Fehler: {$a}';
$string['errorclamavnoresponse'] = 'ClamAV reagiert nicht. Prüfen Sie den Ausführungsstatus des Deamons.';
$string['errornounixsocketssupported'] = 'Die Verbindung über Unix Domain Sockets wird auf diesem System nicht unterstützt. Verwenden Sie stattdessen die Option \'Befehlszeile\'.';
$string['invalidpathtoclam'] = 'Der Pfad zu ClamAV \'{$a}\' ist ungültig.';
$string['pathtoclam'] = 'Befehlszeile';
$string['pathtoclamdesc'] = 'Wenn die Ausführungsmethode als \'Befehlszeile\' gesetzt ist, geben Sie hier den Pfad zu ClamAV ein. Unter Linux wird dies /usr/bin/clamscan oder /usr/bin/clamdscan sein.';
$string['pathtounixsocket'] = 'Unix Domain Socket';
$string['pathtounixsocketdesc'] = 'Wenn die Ausführungsmethode als \'Unix Domain Socket\' gesetzt ist, geben Sie hier den Pfad zum ClamAV Unix Socket ein. Auf Debian Linux ist dies /var/run/clamav/clamd.ctl. Stellen Sie sicher, dass der ClamAV-Daemon über Lesezugriff auf hochgeladene Dateien verfügt. Am einfachsten ist es, den Benutzer \'clamav\' zur Webservergruppe ( \'www-data\' im Debian Linux) hinzuzufügen.';
$string['pluginname'] = 'ClamAV Antivirus';
$string['privacy:metadata'] = 'Das Plugin \'ClamAV Antivirus\' speichert keine personenbezogenen Daten.';
$string['quarantinedir'] = 'Quarantäne Verzeichnis';
$string['runningmethod'] = 'Ausführungsmethode';
$string['runningmethodcommandline'] = 'Befehlszeile';
$string['runningmethoddesc'] = 'Methode zum Ausführen von ClamAV. Die Befehlszeile wird standardmäßig verwendet, aber auf Unix-Systemen könnte eine bessere Leistung durch die Verwendung von System-Sockets erreicht werden.';
$string['runningmethodunixsocket'] = 'Unix Domain Socket';
$string['unknownerror'] = 'Ein unbekannter Fehler ist bei ClamAV aufgetreten.';
