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
 * Strings for component 'tool_behat', language 'de', version '4.1'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Dieses Administrationstool unterstützt Entwickler und Softwaretestautoren bei der Erstellung und Ausführung von .feature-Dateien, die neue Moodle-Funktionalitäten beschreiben. Die einzelnen Schritte zur Verwendung von .feature Dateien sind unten aufgeführt.';
$string['allavailablesteps'] = 'Alle verfügbaren Schrittdefinitionen';
$string['errorbehatcommand'] = 'Fehler beim Ausführen des behat-CLI-Kommandos. Versuchen Sie {$a} --help" manuell von der CLI Konsole auszuführen, um mehr über das Problem herauszufinden.';
$string['errorcomposer'] = 'Composer-Abhängigkeiten sind nicht installiert';
$string['errordataroot'] = '$CFG->behat_dataroot ist nicht gesetzt oder ungültig.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix und $CFG->behat_wwwroot müssen in der config.php definiert werden.';
$string['erroruniqueconfig'] = 'Die Werte $CFG->behat_dataroot, $CFG->behat_prefix und $CFG->behat_wwwroot müssen sich von den Werten $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot und $CFG->phpunit_prefix  unterscheiden.<br/>
Oder, wenn $CFG->behat_prefix gleich ist, müssen sich $CFG->behat_dbname oder $CFG->behat_dbhost von $CFG->phpunit_dbname und $CFG->phpunit_dbhost unterscheiden, außerdem von $CFG->dbname und $CFG->dbhost.';
$string['fieldvalueargument'] = 'Argumente für Feldwert';
$string['fieldvalueargument_help'] = 'Dieses Argument sollte durch einen Feldwert ergänzt werden. Es gibt viele Feldtypen, darunter einfache Kontrollkästchen, Auswahl- oder Textbereiche oder komplexe Optionen wie Datumsauswahl. Weitere Infos zu den Feldwerten finden Sie in der Entwicklerdokumentation <a href="https://moodledev.io/general/development/tools/behat" target="_blank" > Acceptance_testing </a>.';
$string['giveninfo'] = 'Vorgefunden (given). Prozesse zum Anlegen der Umgebung.';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Lesen {$a} Information für Installation und Testdurchlauf';
$string['newstepsinfo'] = 'Lesen Sie die Infos {$a}, um neue Schrittdefinitionen hinzuzufügen.';
$string['newtestsinfo'] = 'Lesen {$a} von Informationen zum Schreiben neuer Softwaretests.';
$string['nostepsdefinitions'] = 'Es gibt keine Schrittdefinition, die zu diesem Filter passt.';
$string['pluginname'] = 'Akzeptanztest';
$string['privacy:metadata'] = 'Das Behat-Akzeptanztest-Plugin speichert keine personenbezogenen Daten';
$string['stepsdefinitionscomponent'] = 'Bereich';
$string['stepsdefinitionscontains'] = 'Enthält';
$string['stepsdefinitionsfilters'] = 'Definition der Schritte';
$string['stepsdefinitionstype'] = 'Type';
$string['theninfo'] = 'Dann. Prüfung, damit die Ergebnisse der Erwartung entsprechen';
$string['unknownexceptioninfo'] = 'Es gab ein Problem mit <a href="https://de.wikipedia.org/wiki/Selenium" target="_blank">Selenium</a> oder mit Ihrem Browser. Versuchen Sie Selenium, auf die letzte Version zu aktualisieren. Fehler:';
$string['viewsteps'] = 'Filter';
$string['warndirrootconfigfound'] = 'Eine Konfigurationsdatei wurde gefunden {$a}. Diese Datei wird nicht automatisch aktualisiert und könnte ungültig werden. Wir empfehlen, diese Datei zu entfernen.';
$string['wheninfo'] = 'Wenn. Aktion, die einen Event auslöst.';
$string['wrongbehatsetup'] = 'Mit dem Behat Setup ist ein Problem aufgetreten. Die Definitionsschritte können nicht aufgelistet werden: <b>{$a->errormsg}</b><br/><br/>Prüfen Sie bitte:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix und $CFG->behat_wwwroot, die in der  config.php  angelegt sein müssen und deren Werte sich von den Werten für $CFG->dataroot, $CFG->prefix und $CFG->wwwroot unterscheiden müssen.</li>
<li>Sie starten "{$a->behatinit}" aus Ihrem Moodle-Root-Verzeichnis.</li>
<li>Abhängigkeiten sind installiert in vendor/ und die {$a->behatcommand} Datei ist auf dem Server ausführbar.</li></ul>';
