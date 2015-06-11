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
 * Strings for component 'tool_installaddon', language 'de', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Bestätigung';
$string['acknowledgementmust'] = 'Sie müssen dies bestätigen.';
$string['acknowledgementtext'] = 'Ich habe verstanden, dass ich dafür verantwortlich bin, eine vollständige Sicherung der Website zu erstellen, bevor Plugins installiert  werden. Plugin (besonders wenn Sie aus inoffiziellen Quellen stammen) könnten Programmcode enthalten, der die Website unbrauchbar macht, Datenprobleme schafft oder zu Datenverlust führt.';
$string['featuredisabled'] = 'Der Plugin-Installer ist deaktiviert.';
$string['installaddon'] = 'Plugin installieren';
$string['installaddons'] = 'Plugin installieren';
$string['installexception'] = 'Oops ... bei der Installation des Plugins ist ein Fehler aufgetreten. Aktivieren Sie das Debugging, um weitere Details zu diesem Problem zu erfahren.';
$string['installfromrepo'] = 'Plugin aus der Plugin-Datenbank installieren';
$string['installfromrepo_help'] = 'Sie werden mit der Plugin-Datenbank von Moodle verbunden, um ein Plugin zu suchen und zu installieren. Beachten Sie, dass der vollständige Name der Website, die URL und die Version Ihrer Moodle-Instanz übertragen wird.';
$string['installfromzip'] = 'Plugin aus der ZIP-Datei installieren';
$string['installfromzipfile'] = 'ZIP-Datei';
$string['installfromzipfile_help'] = 'Das Plugin-ZIP-Paket muss genau ein Verzeichnis enthalten, das zum Namen des Plugins passt. Das ZIP-Paket wird an einem dem Plugintyp entsprechenden Ort entpackt. Wenn das Paket aus der Plugin-Datenbank von Moodle heruntergeladen wurde, hat es genau diese Struktur.';
$string['installfromzip_help'] = 'Alternativ zum Download aus der Plugin-Datenbank von Moodle kann auch ein ZIP-Paket hochgeladen werden. Das ZIP-Paket muss die gleiche Struktur aufweisen wie ein Paket aus der Plugin-Datenbank.';
$string['installfromziprootdir'] = 'Hauptverzeichnis umbenennen';
$string['installfromziprootdir_help'] = 'Einige ZIP-Pakete, z.B. wenn sie aus Github erzeugt wurden, können einen falschen Namen für das Hauptverzeichnis enthalten. Wenn dies der Fall ist, geben Sie hier den richtigen Namen ein.';
$string['installfromzipsubmit'] = 'Plugin aus einer ZIP-Datei installieren';
$string['installfromziptype'] = 'Plugin-Typ';
$string['installfromziptype_help'] = 'Wählen Sie den richtigen Plugintyp aus, den Sie gerade installieren. Warnung: Der Installationsprozess wird scheitern, wenn Sie einen falschen Typ ausgewählen.';
$string['permcheck'] = 'Stellen Sie sicher, dass für das Verzeichnis des Plugin-Typs auf dem Webserver Schreibrechte bestehen.';
$string['permcheckerror'] = 'Fehler beim Prüfen der Schreibberechtigung';
$string['permcheckprogress'] = 'Schreibberechtigung wird geprüft ...';
$string['permcheckresultno'] = 'Das Plugin-Verzeichnis <em>{$a->path}</em> ist schreibgeschützt.';
$string['permcheckresultyes'] = 'Das Plugin-Verzeichnis <em>{$a->path}</em> ist beschreibbar.';
$string['pluginname'] = 'Plugin Installer';
$string['remoterequestalreadyinstalled'] = 'Das Plugin {$a->name} ({$a->component}) ({$a->version}) soll aus der Plugin-Datenbank von Moodle installiert werden. Dieses Plugin ist <strong>bereits installiert</strong>.';
$string['remoterequestconfirm'] = 'Das Plugin {$a->name} ({$a->component}) ({$a->version}) soll aus der Plugin-Datenbank von Moodle installiert werden. Wenn Sie fortsetzen, wird das ZIP-Paket heruntergeladen und geprüft. Es erfolgt aber noch keine Installation.';
$string['remoterequestinvalid'] = 'Ein Plugin soll aus der Plugin-Datenbank von Moodle installiert werden. Die Anfrage ist ungültig, eine Installation ist nicht möglich.';
$string['remoterequestpermcheck'] = 'Das Plugin {$a->name} ({$a->component}) ({$a->version}) soll aus der Plugin-Datenbank von Moodle installiert werden. Das Verzeichnis für diesen Plugin-Typ <strong>{$a->typepath}</strong> ist auf dem Server <strong>schreibgeschützt</strong>. Sie müssen für dieses Verzeichnis zunächst Schreibrechte vergeben und dann die Prüfung zu wiederholen.';
$string['remoterequestpluginfoexception'] = 'Oops ... Beim Versuch Informationen zum Plugin {$a->name} {$a->component} ({$a->version}) abzurufen, ist ein Fehler aufgetreten. Das Plugin kann nicht installiert werden. Aktivieren Sie den Debug-Modus, um weitere Details zu erfahren.';
$string['validation'] = 'Plugin-Prüfung';
$string['validationmsg_componentmatch'] = 'Vollständiger Plugin-Name';
$string['validationmsg_componentmismatchname'] = 'Plugin-Name ist falsch';
$string['validationmsg_componentmismatchname_help'] = 'Einige ZIP-Pakete, z.B. wenn sie aus Github erzeugt wurden, können einen falschen Namen für das Hauptverzeichnis enthalten. Sie müssen diesen Namen so anpassen, dass er mit dem Namen des Plugins übereinstimmt.';
$string['validationmsg_componentmismatchname_info'] = 'Das Plugin hat den Namen \'{$a}. Dies passt aber nicht zum Namen des Hauptverzeichnisses.';
$string['validationmsg_componentmismatchtype'] = 'Plugin-Typ ist falsch';
$string['validationmsg_componentmismatchtype_info'] = 'Sie haben den Typ \'{$a->expected}\' gewählt. Das Plugin definiert seinen Typ jedoch als \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Entpackte Datei nicht gefunden';
$string['validationmsg_filesnumber'] = 'Zu wenige Dateien im Paket gefunden';
$string['validationmsg_filestatus'] = 'Mehrere Dateien konnten nicht entgepackt werden';
$string['validationmsg_filestatus_info'] = 'Der Versuch, die Datei {$a->file} zu entpacken, führte zu folgendem Fehler \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Spachdatei gefunden';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Fehler';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Warnung';
$string['validationmsg_maturity'] = 'Entwicklungsstand';
$string['validationmsg_maturity_help'] = 'Das Plugin kann seinen Entwicklungsstand angeben. Wenn der Entwickler als Entwicklungsstand des Plugin als \'stabil\' definiert, wird MATURITY_STABLE angezeigt. Alle anderen Entwicklungsstände (wie alpha oder beta) werden als unstable bestätigt und ein Warnhinweis wird angezeigt.';
$string['validationmsg_missingexpectedlangenfile'] = 'Name der englischen Sprachdatei ist falsch';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Für den angegebenen Plugin-Typ fehlt eine englische Sprachdatei {$a}.';
$string['validationmsg_missinglangenfile'] = 'Keine englische Sprachdatei gefunden';
$string['validationmsg_missinglangenfolder'] = 'Englischer Sprachdateiordner fehlt';
$string['validationmsg_missingversion'] = 'Das Plugin zeigt keine Version.';
$string['validationmsg_missingversionphp'] = 'Die Datei version.php wurde nicht gefunden';
$string['validationmsg_multiplelangenfiles'] = 'Es wurden mehrere englische Sprachdateien gefunden';
$string['validationmsg_onedir'] = 'Ungültige Struktur im ZIP-Paket';
$string['validationmsg_onedir_help'] = 'Das ZIP-Paket darf nur das Hauptverzeichnis mit dem Plugin-Code enthalten. Der Name des Hauptverzeichnisses muss dem Namen des Plugins entsprechen.';
$string['validationmsg_pathwritable'] = 'Prüfung des Schreibzugriffs';
$string['validationmsg_pluginversion'] = 'Plugin-Version';
$string['validationmsg_release'] = 'Plugin-Release';
$string['validationmsg_requiresmoodle'] = 'Erforderliche Moodle-Version';
$string['validationmsg_rootdir'] = 'Plugin-Name';
$string['validationmsg_rootdir_help'] = 'Die Bezeichnung des Hauptverzeichnisses im ZIP-Paket bildet den Plugin-Namen bei der Installation. Wenn der Name falsch ist, müssen Sie den Namen des Hauptverzeichnisses vor der Installation im ZIP-Paket ändern.';
$string['validationmsg_rootdirinvalid'] = 'Falscher Plugin-Name';
$string['validationmsg_rootdirinvalid_help'] = 'Der Name des Hauptverzeichnisses im ZIP-Paket verletzt die formale Syntax-Festlegung. Einige ZIP-Pakete, z.B. wenn sie aus Github erzeugt wurden, können einen falschen Namen für das Hauptverzeichnis enthalten. Sie müssen den Namen so anpassen, dass er mit dem Plugin-Namen übereinstimmt.';
$string['validationmsg_targetexists'] = 'Der Zielort existiert bereits';
$string['validationmsg_targetexists_help'] = 'Das Verzeichnis, in dem das Plugin installiert werden soll, darf noch nicht existieren.';
$string['validationmsg_unknowntype'] = 'Unbekannter Plugin-Typ';
$string['validationresult0'] = 'Prüfung fehlgeschlagen!';
$string['validationresult0_help'] = 'Bei der Plugin-Installation sind Probleme aufgetreten. Das Protokoll enthält die Details.';
$string['validationresult1'] = 'Prüfung erfolgreich';
$string['validationresult1_help'] = 'Das Plugin wurde geprüft und es wurden keine Probleme gefunden.';
$string['validationresult2_help'] = 'Keine Probleme festgestellt. Sie können mit der Plugin-Installation weitermachen. Schauen Sie für weitere Details und Warnhinweise in die Logdaten';
$string['validationresultinfo'] = 'Info';
$string['validationresultmsg'] = 'Mitteilung';
$string['validationresultstatus'] = 'Status';
