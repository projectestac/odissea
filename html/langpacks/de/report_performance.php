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
 * Strings for component 'report_performance', language 'de', version '4.4'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Automatische Sicherung';
$string['check_backup_comment_disable'] = 'Die Leistung kann während des Sicherungsvorgangs beeinträchtigt sein. Wenn die Option aktiviert ist, sollten die Sicherungen in verkehrarmen Zeiten eingeplant werden.';
$string['check_backup_comment_enable'] = 'Die Leistung kann während des Sicherungsvorgangs beeinträchtigt sein. Die Sicherungen sollten in verkehrarmen Zeiten eingeplant werden.';
$string['check_backup_details'] = 'Wenn automatische Sicherungen aktiviert sind, werden zum angegebenen Zeitpunkt automatisch von allen Kursen Sicherungen angelegt. Während dieses Vorgangs werden Serverressourcen benötigt und die Leistung beeinträchtigt.';
$string['check_cachejs_comment_disable'] = 'Wenn diese Option aktiviert ist, wird die Leistung zum Laden der Seite verbessert.';
$string['check_cachejs_comment_enable'] = 'Wenn diese Option deaktiviert ist, könnte die Seite langsam laden.';
$string['check_cachejs_details'] = 'JavaScript Caching und Kompression kann die Leistung beim Laden der Seite positiv beeinflussen. Für produktive Seiten wird dies empfohlen.';
$string['check_dbschema_errors'] = 'Das Datenbankschema ist nicht korrekt.';
$string['check_dbschema_name'] = 'Datenbankschema prüfen';
$string['check_dbschema_ok'] = 'Das Datenbankschema ist korrekt.';
$string['check_debugmsg_comment_developer'] = 'Bei einem anderen Wert als DEVELOPER kann die Leistung geringfügig verbessert werden.';
$string['check_debugmsg_comment_nodeveloper'] = 'Wenn diese Option auf DEVELOPER gesetzt ist, kann die Leistung geringfügig beeinträchtigt sein.';
$string['check_debugmsg_details'] = 'Es gibt wenig Gründe, den Debug-Modus DEVELOPER zu aktivieren. Für Entwickler/innen ist dies jedoch durchaus sinnvoll.<p>Nachdem Sie eine Fehlermeldung gesehen haben, sollten Sie diese kopieren und abspeichern. Stellen Sie dann den Debug-Modus auf KEIN zurück. Die Debug-Mitteilungen werden auch von anderen Nutzer/innen gesehen. Hacker können daraus Schlüsse über die Konfiguration Ihrer Website und über Schwachstellen ziehen. Der Debug-Mitteilungen können sich auch negativ auf die Performance auswirken.</p>';
$string['check_enablestats_comment_disable'] = 'Statistische Berechnungen können die Leistung beeinflussen. Die Einstellungen sollten daher mit Vorsicht vorgenommen werden.';
$string['check_enablestats_comment_enable'] = 'Statistische Berechnungen können die Leistung beeinflussen. Die Einstellungen sollten daher mit Vorsicht vorgenommen werden.';
$string['check_enablestats_details'] = 'Die Aktivierung dieser Option führt dazu, dass bei der Abarbeitung des Cron-Jobs die Logdaten ausgewertet werden, um statistische Auswertungen zu erstellen. Je nachdem wie viel Betrieb auf Ihrer Plattform ist, kann dies einige Zeit in Anspruch nehmen.<p>Während des Prozesses werden mehr Serverressourcen in Anspruch genommen. Dies kann die Leistung beeinflussen.</p>';
$string['check_themedesignermode_comment_disable'] = 'Wenn diese Option aktiviert ist, werden Bilder und Style Sheets nicht gecacht. Das führt zu spürbaren Leistungseinbußen.';
$string['check_themedesignermode_comment_enable'] = 'Wenn diese Option aktiviert ist, werden Bilder und Style Sheets gecacht. Das führt zu spürbaren Leistungsverbesserungen.';
$string['check_themedesignermode_details'] = 'Dies ist bei langsamen Moodle-Sites oft der Fall.<p>Durchschnittlich erfordert die Aktivierung des Designer-Modus die doppelte CPU-Kraft wie der sonstige Betrieb.</p>';
$string['comments'] = 'Kommentare';
$string['disabled'] = 'Deaktiviert';
$string['edit'] = 'Bearbeiten';
$string['enabled'] = 'Aktiviert';
$string['issue'] = 'Ausgabe';
$string['morehelp'] = 'weitere Hilfe';
$string['performance:view'] = 'Performanceübersicht anzeigen';
$string['performancereportdesc'] = 'Diese Übersicht zeigt Faktoren auf, die sich auf die Performance der Website {$a} auswirken könnten.';
$string['pluginname'] = 'Performanceübersicht';
$string['privacy:metadata'] = 'Das Performance-Übersichts-Plugink speichert keine personenbezogenen Daten.';
$string['value'] = 'Wert';
