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
 * Strings for component 'tool_installaddon', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Bestätigung';
$string['acknowledgementtext'] = 'Ich habe verstanden, dass ich dafür verantwortlich bin, eine vollständige Sicherung der Website zu erstellen, bevor Plugins installiert  werden. Plugin (besonders wenn Sie aus inoffiziellen Quellen stammen) könnten Programmcode enthalten, der die Website unbrauchbar macht, Datenprobleme schafft oder zu Datenverlust führt.';
$string['featuredisabled'] = 'Der Plugin-Installer ist deaktiviert.';
$string['installaddon'] = 'Plugin installieren';
$string['installaddons'] = 'Plugin installieren';
$string['installfromrepo'] = 'Plugin aus der Plugin-Datenbank installieren';
$string['installfromrepo_help'] = 'Sie werden mit der Plugin-Datenbank von Moodle verbunden, um ein Plugin zu suchen und zu installieren. Beachten Sie, dass der vollständige Name der Website, die URL und die Version Ihrer Moodle-Instanz übertragen wird.';
$string['installfromzip'] = 'Plugin aus einer ZIP-Datei installieren';
$string['installfromzipfile'] = 'ZIP-Datei';
$string['installfromzipfile_help'] = 'Das Plugin-Installationspaket muss genau ein Verzeichnis enthalten, das zum Plugin-Namen passt. Das Paket wird an einem dem Plugin-Typ entsprechenden Ort entpackt. Falls das Paket aus der Plugin-Datenbank von Moodle heruntergeladen wurde, ist die Struktur in Ordnung.';
$string['installfromzip_help'] = 'Alternativ zum Download aus der Plugin-Datenbank von Moodle kann auch ein ZIP-Paket hochgeladen werden. Das ZIP-Paket muss die gleiche Struktur aufweisen wie ein Paket aus der Plugin-Datenbank.';
$string['installfromzipinvalid'] = 'Das Plugin-Installationspaket muss genau ein Verzeichnis enthalten, das zum Plugin-Namen passt. Die Datei ist kein Plugin-Installationspaket.';
$string['installfromziprootdir'] = 'Hauptverzeichnis umbenennen';
$string['installfromziprootdir_help'] = 'Einige ZIP-Pakete, z.B. wenn sie aus Github erzeugt wurden, können einen falschen Namen für das Hauptverzeichnis enthalten. Wenn dies der Fall ist, geben Sie hier den richtigen Namen ein.';
$string['installfromzipsubmit'] = 'Plugin installieren';
$string['installfromziptype'] = 'Plugin-Typ';
$string['installfromziptype_help'] = 'Bei Plugins mit korrekten Komponentennamen erkennt das Installationsprogramm den Plugin-Typ automatisch. Wenn die automatische Erkénnung fehlschlägt, müssen Sie manuell eingreifen. Bei falscher Angabe des Plugin-Typs wird der Installationsprozess scheitern.';
$string['permcheck'] = 'Stellen Sie sicher, dass für das Verzeichnis des Plugin-Typs auf dem Webserver Schreibrechte bestehen.';
$string['permcheckerror'] = 'Fehler beim Prüfen der Schreibberechtigung';
$string['permcheckprogress'] = 'Schreibberechtigung wird geprüft ...';
$string['permcheckrepeat'] = 'Erneut prüfen';
$string['permcheckresultno'] = 'Das Plugin-Verzeichnis <em>{$a->path}</em> ist schreibgeschützt.';
$string['permcheckresultyes'] = 'Das Plugin-Verzeichnis <em>{$a->path}</em> ist beschreibbar.';
$string['pluginname'] = 'Plugin Installer';
$string['privacy:metadata'] = 'Das Plugin \'Installer\' speichert keine personenbezogenen Daten.';
$string['remoterequestalreadyinstalled'] = 'Das Plugin {$a->name} ({$a->component}) ({$a->version}) soll aus der Plugin-Datenbank von Moodle installiert werden. Dieses Plugin ist <strong>bereits installiert</strong>.';
$string['remoterequestconfirm'] = 'Das Plugin {$a->name} ({$a->component}) ({$a->version}) soll aus der Plugin-Datenbank von Moodle installiert werden. Wenn Sie fortsetzen, wird das ZIP-Paket heruntergeladen und geprüft. Es erfolgt aber noch keine Installation.';
$string['remoterequestinvalid'] = 'Ein Plugin soll aus der Plugin-Datenbank von Moodle installiert werden. Die Anfrage ist ungültig, eine Installation ist nicht möglich.';
$string['remoterequestnoninstallable'] = 'Das Plugin {$a->name} ({$a->component}) version {$a->version} kann aus der Plugin-Datenbank von Moodle aktualisiert werden. Allerdings ist die Plugin-Überprüfung fehlgeschlagen (Fehlercode: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Das Plugin {$a->name} ({$a->component}) ({$a->version}) soll aus der Plugin-Datenbank von Moodle installiert werden. Das Verzeichnis für diesen Plugin-Typ <strong>{$a->typepath}</strong> ist auf dem Server <strong>schreibgeschützt</strong>. Sie müssen für dieses Verzeichnis zunächst Schreibrechte vergeben und dann die Prüfung zu wiederholen.';
$string['remoterequestpluginfoexception'] = 'Oops ... Beim Versuch Informationen zum Plugin {$a->name} {$a->component} ({$a->version}) abzurufen, ist ein Fehler aufgetreten. Das Plugin kann nicht installiert werden. Aktivieren Sie den Debug-Modus, um weitere Details zu erfahren.';
$string['typedetectionfailed'] = 'Der Plugin-Typ konnte nicht automatisch festgestellt werden. Wählen Sie den richtigen Plugin-Typ manuell.';
$string['typedetectionmismatch'] = 'Der ausgewählte Plugin-Typ passt nicht zu den Angaben des Plugins: {$a}';
