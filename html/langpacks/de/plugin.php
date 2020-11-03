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
 * Strings for component 'plugin', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktivitäten';
$string['availability'] = 'Zustand';
$string['cancelinstallall'] = 'Neue Installationen abbrechen';
$string['cancelinstallhead'] = 'Installation von Plugins abbrechen';
$string['cancelinstallinfo'] = 'Folgende Plugins sind nicht vollständig installiert, so dass deren Installation kann abgebrochen werden kann. Zum Abbrechen muss das jeweilige Plugin-Verzeichnis vom Server entfernt werden. Stellen Sie sicher, dass Sie nicht versehentlich Dinge löschen, die Sie noch brauchen könnten (z.B. eigene Codeanpassungen).';
$string['cancelinstallinfodir'] = 'Verzeichnis löschen: {$a}';
$string['cancelinstallone'] = 'Installation abbrechen';
$string['cancelupgradeall'] = 'Aktualisierungen abbrechen ({$a})';
$string['cancelupgradehead'] = 'Vorherige Version der Plugins wiederherstellen';
$string['cancelupgradeone'] = 'Aktualisierung abbrechen';
$string['checkforupdates'] = 'Aktualisierungen suchen';
$string['checkforupdateslast'] = 'Letzte Suche: {$a}';
$string['dependencyavailable'] = 'Verfügbar';
$string['dependencyfails'] = 'Fehler';
$string['dependencyinstall'] = 'Installieren';
$string['dependencyinstallhead'] = 'Fehlende Abhängigkeiten werden installiert';
$string['dependencyinstallmissing'] = 'Fehlende Abhängigkeiten installieren ({$a})';
$string['dependencymissing'] = 'Fehlend';
$string['dependencyunavailable'] = 'Nicht verfügbar';
$string['dependencyupload'] = 'Hochladen';
$string['dependencyuploadmissing'] = 'ZIP-Dateien hochladen';
$string['detectedmisplacedplugin'] = 'Das Plugin \'{$a->component}\' wurde am falschen Ort installiert \'{$a->current}\'. Die Installation sollte hier erfolgen: \'{$a->expected}\'';
$string['displayname'] = 'Pluginname';
$string['err_response_curl'] = 'Unerwarteter Fehler: verfügbare Aktualisierung konnte nicht geladen werden.';
$string['err_response_format_version'] = 'Unerwartete Fehler: prüfen Sie die verfügbaren Aktualisierungen erneut.';
$string['err_response_http_code'] = 'Unerwarteter Fehler: verfügbare Aktualisierung konnte nicht geladen werden.';
$string['filterall'] = 'Alle zeigen';
$string['filtercontribonly'] = 'Nur zusätzliche Plugins zeigen';
$string['filterupdatesonly'] = 'Nur Aktualisierbare zeigen';
$string['isenabled'] = 'Aktiviert?';
$string['misdepinfoplugin'] = 'Plugin-Info';
$string['misdepinfoversion'] = 'Versionsinfo';
$string['misdepsavail'] = 'Verfügbare fehlende Abhängigkeiten';
$string['misdepsunavail'] = 'Nichtverfügbare fehlende Abhängigkeiten';
$string['misdepsunavaillist'] = 'Keine Version gefunden, um die notwendigen Abhängigkeiten zu erfüllen ({$a})';
$string['misdepsunknownlist'] = 'Nicht im Plugin-Verzeichnis: <strong>{$a}</strong>';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Kein solches Plugin installiert';
$string['notdownloadable'] = 'Paket kann nicht geladen werden';
$string['notdownloadable_help'] = 'Die Aktualisierung kann nicht automatisch heruntergeladen werden. Bitte beachten Sie die Dokumentation.';
$string['notes'] = 'Hinweise';
$string['notwritable'] = 'Plugin-Verzeichnis schreibgeschützt';
$string['notwritable_help'] = 'Das Plugin-Verzeichnis ist für den Webserver-Prozess schreibgeschützt. Der Webserver-Prozess muss einen Schreibzugriff auf das Plugin-Verzeichnis und dessen Inhalte haben. Der Schreibzugriff auf das Verzeichnis des jeweiligen Plugin-Typs kann ebenfalls erforderlich sein.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Alle Plugins';
$string['overviewext'] = 'Zusätzliche Plugins';
$string['overviewupdatable'] = 'Verfügbare Aktualisierungen';
$string['packagesdebug'] = 'Debug-Meldungen aktiviert';
$string['packagesdownloading'] = 'Herunterladen {$a}';
$string['packagesextracting'] = 'Entpacken {$a}';
$string['packagesvalidating'] = 'Überprüfen {$a}';
$string['packagesvalidatingfailed'] = 'Installation wegen einer fehlerhaften Überprüfung abgebrochen';
$string['packagesvalidatingok'] = 'Die Überprüfung ist abgeschlossen. Die Installation kann fortgesetzt werden.';
$string['plugincheckall'] = 'Alle Plugins';
$string['plugincheckattention'] = 'Plugins, die Aufmerksamkeit fordern';
$string['pluginchecknone'] = 'Keine Mitteilung zu den Plugins';
$string['pluginchecknotice'] = 'Es könnte sein, dass einige Plugins Ihre Aufmerksamkeit fordern. Markiert sind neue Plugins, aktualisierbare Plugins und fehlende Plugins. Die aktualisierbaren und fehlenden Versionen sollten Sie laden, bevor Sie die Aktualisierung von Moodle fortsetzen.';
$string['plugindisable'] = 'Deaktivieren';
$string['plugindisabled'] = 'Deaktiviert';
$string['pluginenable'] = 'Aktivieren';
$string['pluginenabled'] = 'Aktiviert';
$string['release'] = 'Release';
$string['requiredby'] = 'Notwendig für: {$a}';
$string['requires'] = 'Erfordert';
$string['rootdir'] = 'Verzeichnis';
$string['settings'] = 'Einstellungen';
$string['source'] = 'Quelle';
$string['sourceext'] = 'Add-on';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Status';
$string['status_delete'] = 'Wird gelöscht';
$string['status_downgrade'] = 'Höhere Version ist bereits installiert!';
$string['status_missing'] = 'Quelle fehlt';
$string['status_new'] = 'Wird installiert';
$string['status_nodb'] = 'Keine Datenbank';
$string['status_upgrade'] = 'Wird aktualisiert';
$string['status_uptodate'] = 'Ist installiert';
$string['supportedconversions'] = 'Unterstützte Dokumentkonverter';
$string['supportedmoodleversions'] = 'Unterstützte Moodle-Versionen';
$string['systemname'] = 'Identifizierung';
$string['type_antivirus'] = 'Antivirus Plugin';
$string['type_antivirus_plural'] = 'Antivirus Plugins';
$string['type_auth'] = 'Plugin zur Authentifizierung
';
$string['type_auth_plural'] = 'Plugins zur Authentifizierung';
$string['type_availability'] = 'Voraussetzungen';
$string['type_availability_plural'] = 'Voraussetzungen';
$string['type_block'] = 'Block';
$string['type_block_plural'] = 'Blöcke';
$string['type_cachelock'] = 'Verfahren der Cache-Sperre';
$string['type_cachelock_plural'] = 'Verfahren der Cache-Sperren';
$string['type_cachestore'] = 'Cache-Speicher';
$string['type_cachestore_plural'] = 'Cache-Speicher';
$string['type_calendartype'] = 'Kalendertyp';
$string['type_calendartype_plural'] = 'Kalendertypen';
$string['type_coursereport'] = 'Kursbericht';
$string['type_coursereport_plural'] = 'Kursberichte';
$string['type_customfield'] = 'Kursfeld';
$string['type_customfield_plural'] = 'Kursfelder';
$string['type_dataformat'] = 'Datenformat';
$string['type_dataformat_plural'] = 'Datenformate';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editoren';
$string['type_enrol'] = 'Einschreibemethode';
$string['type_enrol_plural'] = 'Einschreibemethoden';
$string['type_fileconverter'] = 'Dokumentkonverter';
$string['type_fileconvertermanage'] = 'Dokumentkonverter verwalten';
$string['type_fileconverter_plural'] = 'Dokumentkonverter';
$string['type_filter'] = 'Filter';
$string['type_filter_plural'] = 'Filter';
$string['type_format'] = 'Kursformat';
$string['type_format_plural'] = 'Kursformate';
$string['type_gradeexport'] = 'Methode zum Bewertungsexport';
$string['type_gradeexport_plural'] = 'Methoden zum Bewertungsexport';
$string['type_gradeimport'] = 'Methode zum Bewertungsimport';
$string['type_gradeimport_plural'] = 'Methoden zum Bewertungsimport';
$string['type_gradereport'] = 'Bewertungsbericht';
$string['type_gradereport_plural'] = 'Bewertungsberichte';
$string['type_gradingform'] = 'Fortgeschrittene Bewertungsmethode';
$string['type_gradingform_plural'] = 'Fortgeschrittene Bewertungsmethoden';
$string['type_local'] = 'Lokales Plugin';
$string['type_local_plural'] = 'Lokale Plugins';
$string['type_media'] = 'MediaPlayer';
$string['type_media_plural'] = 'MediaPlayer';
$string['type_message'] = 'Mitteilungsplugin';
$string['type_message_plural'] = 'Mitteilungsplugins';
$string['type_mlbackend'] = 'Maschinelles Lernen Backend';
$string['type_mlbackend_plural'] = 'Maschinelles Lernen Backends';
$string['type_mnetservice'] = 'MNet Service';
$string['type_mnetservice_plural'] = 'MNet Services';
$string['type_mod'] = 'Aktivitäten';
$string['type_mod_plural'] = 'Aktivitäten';
$string['type_plagiarism'] = 'Plugin zur Plagiatsuche';
$string['type_plagiarism_plural'] = 'Plugins zur Plagiatsuche';
$string['type_portfolio'] = 'Portfolio';
$string['type_portfolio_plural'] = 'Portfolios';
$string['type_profilefield'] = 'Profilfeldtyp';
$string['type_profilefield_plural'] = 'Profilfeldtypen';
$string['type_qbehaviour'] = 'Frageverhalten';
$string['type_qbehaviour_plural'] = 'Frageverhalten';
$string['type_qformat'] = 'Format zum Fragenimport/-export';
$string['type_qformat_plural'] = 'Formate zum Fragenimport/-export';
$string['type_qtype'] = 'Fragetyp';
$string['type_qtype_plural'] = 'Fragetypen';
$string['type_report'] = 'Websitebericht';
$string['type_report_plural'] = 'Berichte';
$string['type_repository'] = 'Repository';
$string['type_repository_plural'] = 'Repositories';
$string['type_search'] = 'Suchmaschine';
$string['type_search_plural'] = 'Suchmaschinen';
$string['type_theme'] = 'Design';
$string['type_theme_plural'] = 'Designs';
$string['type_tool'] = 'Dienstprogramm';
$string['type_tool_plural'] = 'Dienstprogramme';
$string['type_webservice'] = 'Webservice Protokoll';
$string['type_webservice_plural'] = 'Webservice Protokolle';
$string['uninstall'] = 'Deinstallieren';
$string['uninstallconfirm'] = 'Möchten Sie das Plugin \'{$a->name}\' wirklich löschen? Gleichzeitig werden alle mit dem Plugin verbundenen Daten aus der Datenbank gelöscht, die Konfiguration, alle Logdaten und Nutzerdaten. Diese Daten gehen verloren und können nicht wiederhergestellt werden.';
$string['uninstalldelete'] = 'Alle mit dem Plugin \'{$a->name}\' verbundenen Daten wurden aus der Datenbank gelöscht. Um zu verhindern, dass sich das Plugin selber neu installiert, muss das Verzeichnis \'{$a->rootdir}\' manuell entfernt werden. Wegen fehlender Rechte kann Moodle das Verzeichnis nicht selber löschen.';
$string['uninstalldeleteconfirm'] = 'Alle mit dem Plugin \'{$a->name}\' verbundenen Daten wurden aus der Datenbank gelöscht. Um zu verhindern, dass sich das Plugin selber neu installiert, muss das Verzeichnis \'{$a->rootdir}\' entfernt werden. Soll das Verzeichnis wirklich gelöscht werden?';
$string['uninstalldeleteconfirmexternal'] = 'Die derzeitige Plugin-Version wurde wahrscheinlich über das Verwaltungsystem \'{$a}\' bezogen und eventuell lokal im Code angepasst. Wenn Sie das Plugin löschen, könnten wichtige Anpassungen verloren gehen. Soll das Verzeichnis wirklich entfernt werden?';
$string['uninstallextraconfirmblock'] = 'Von diesem Block gibt es {$a->instances} Instanzen';
$string['uninstallextraconfirmenrol'] = 'Es gibt {$a->enrolments} Nutzereinschreibungen.';
$string['uninstallextraconfirmmod'] = 'Von diesem Modul gibt es {$a->instances} Instanzen in  {$a->courses} Kursen';
$string['uninstalling'] = '{$a->name} wird deinstalliert';
$string['updateavailable'] = 'Eine neue Version {$a} ist verfügbar!';
$string['updateavailable_moreinfo'] = 'Weitere Informationen';
$string['updateavailable_release'] = 'Version: {$a}';
$string['updatepluginconfirm'] = 'Plugin-Aktualisierung bestätigen';
$string['updatepluginconfirmexternal'] = 'Die derzeitige Version des Plugins wurde wahrscheinlich über das Verwaltungssystem {$a} bezogen. Wenn Sie diese Aktualisierung installieren, können Sie das Verwaltungssystem für das Plugin nicht mehr verwenden. Soll dieses Update wirklich installiert werden?';
$string['updatepluginconfirminfo'] = 'Möchten Sie wirklich eine neue Version des Plugins <strong>{$a->name}</strong> installieren. Die Dateien für die Version {$a->version} werden heruntergeladen, entpackt und anschließend installiert.
<br /><a href="{$a->url}">{$a->url}</a>';
$string['updatepluginconfirmwarning'] = 'Vor der Aktualisierung wird keine automatische Datenbanksicherung durchgeführt. Der neue Code könnte die Datenbank beschädigen. Seien Sie also vorsichtig!';
$string['validationmsg_componentmatch'] = 'Vollständiger Plugin-Name';
$string['validationmsg_componentmismatchname'] = 'Plugin-Name ist falsch';
$string['validationmsg_componentmismatchname_help'] = 'Einige ZIP-Pakete, z.B. wenn sie aus Github erzeugt wurden, können einen falschen Namen für das Hauptverzeichnis enthalten. Sie müssen diesen Namen so anpassen, dass er mit dem Namen des Plugins übereinstimmt.';
$string['validationmsg_componentmismatchname_info'] = 'Das Plugin hat den Namen \'{$a}. Dies passt aber nicht zum Namen des Hauptverzeichnisses.';
$string['validationmsg_componentmismatchtype'] = 'Plugin-Typ ist falsch';
$string['validationmsg_componentmismatchtype_info'] = 'Der erwartete Plugin-Typ ist \'{$a->expected}\', aber das Plugin definiert seinen Typ als \'{$a->found}\'.';
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
$string['validationmsg_missingcomponent'] = 'Das Plugin zeigt keinen Modulnamen an.';
$string['validationmsg_missingcomponent_help'] = 'Alle Plugins müssen ihren vollständigen Modulnamen bereitstellen, u.z. über den Parameter \'$plugin->component\' in der Datei version.php.';
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
$string['validationmsg_pluginversiontoolow'] = 'Eine höhere Version dieses Plugins ist bereits installiert.';
$string['validationmsg_release'] = 'Plugin-Release';
$string['validationmsg_requiresmoodle'] = 'Erforderliche Moodle-Version';
$string['validationmsg_rootdir'] = 'Plugin-Name';
$string['validationmsg_rootdir_help'] = 'Die Bezeichnung des Hauptverzeichnisses im ZIP-Paket bildet den Plugin-Namen bei der Installation. Wenn der Name falsch ist, müssen Sie den Namen des Hauptverzeichnisses vor der Installation im ZIP-Paket ändern.';
$string['validationmsg_rootdirinvalid'] = 'Falscher Plugin-Name';
$string['validationmsg_rootdirinvalid_help'] = 'Der Name des Hauptverzeichnisses im ZIP-Paket verletzt die formale Syntax-Festlegung. Einige ZIP-Pakete, z.B. wenn sie aus Github erzeugt wurden, können einen falschen Namen für das Hauptverzeichnis enthalten. Sie müssen den Namen so anpassen, dass er mit dem Plugin-Namen übereinstimmt.';
$string['validationmsg_targetexists'] = 'Das Zielobjekt existiert bereits und wird entfernt';
$string['validationmsg_targetexists_help'] = 'Das Plugin-Verzeichnis existiert bereits und wird überschrieben mit dem Inhalt des neuen Installationspakets.';
$string['validationmsg_targetnotdir'] = 'Das Zielobjekt ist mit einer Datei belegt';
$string['validationmsg_unknowntype'] = 'Unbekannter Plugin-Typ';
$string['validationmsg_versionphpsyntax'] = 'Nicht-unterstütze Syntax in der Datei version.php gefunden';
$string['version'] = 'Version';
$string['versiondb'] = 'Aktuelle Version';
$string['versiondisk'] = 'Neue Version';
