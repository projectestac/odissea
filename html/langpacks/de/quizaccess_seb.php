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
 * Strings for component 'quizaccess_seb', language 'de', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Neues Template hinzufügen';
$string['allowedbrowserkeysdistinct'] = 'Die Keys müssen alle unterschiedlich sein.';
$string['allowedbrowserkeyssyntax'] = 'Ein Key sollte eine 64-stellige Hex-Zeichenfolge sein.';
$string['cachedef_config'] = 'SEB-Konfiguration-Cache';
$string['cachedef_configkey'] = 'SEB Config Key-Cache';
$string['cachedef_quizsettings'] = 'SEB Test-Einstellungen-Cache';
$string['cantdelete'] = 'Das Template kann nicht gelöscht werden, da es für ein oder mehrere Tests verwendet wurde.';
$string['cantedit'] = 'Das Template kann nicht bearbeitet werden, da es für ein oder mehrere Tests verwendet wurde.';
$string['checkingaccess'] = 'Zugriff zum Safe-Exam-Browser prüfen ...';
$string['clientrequiresseb'] = 'Dieser Test wurde für Nutzung des Safe-Exam-Browsers mit Konfigurationsdatei konfiguriert.';
$string['confirmtemplateremovalquestion'] = 'Möchten Sie dieses Template wirklich löschen?';
$string['confirmtemplateremovaltitle'] = 'Löschen des Templates bestätigen?';
$string['conflictingsettings'] = 'Sie haben nicht das Recht, die vorhandenen Safe-Exam-Browser-Einstellungen zu verändern.';
$string['content'] = 'Template';
$string['description'] = 'Beschreibung';
$string['disabledsettings'] = 'Deaktivierte Einstellungen';
$string['disabledsettings_help'] = 'Die Safe-Exam-Browser-Einstellungen können nicht verändert werden, wenn es bereits Testversuche gibt. Um die Einstellungen ändern zu können, müssen zuerst alle Testversuche gelöscht werden.';
$string['downloadsebconfig'] = 'SEB-Konfiguration herunterladen';
$string['duplicatetemplate'] = 'Es gibt bereits ein Template mit dem gleichen Namen.';
$string['edittemplate'] = 'Template bearbeiten';
$string['enabled'] = 'Aktiviert';
$string['error:ws:nokeyprovided'] = 'Mindestens ein Safe-Exam-Browser-Key muss bereitgestellt werden.';
$string['error:ws:quiznotexists'] = 'Kein passender Test mit der ID {$a} gefunden';
$string['event:accessprevented'] = 'Zugriff zum Test wurde verwehrt';
$string['event:templatecreated'] = 'SEB-Template wurde erstellt';
$string['event:templatedeleted'] = 'SEB-Template wurde gelöscht';
$string['event:templatedisabled'] = 'SEB-Template wurde deaktiviert';
$string['event:templateenabled'] = 'SEB-Template wurde aktiviert';
$string['event:templateupdated'] = 'SEB Template wurde aktualisiert';
$string['exitsebbutton'] = 'Safe-Exam-Browser beenden';
$string['filemanager_sebconfigfile'] = 'Safe Exam Browser-Konfiguration hochladen';
$string['filemanager_sebconfigfile_help'] = 'Laden Sie bitte Ihre eigene Safe-Exam-Browser-Konfiguration für diesen Test hoch.';
$string['filenotpresent'] = 'Laden Sie bitte eine Safe-Exam-Browser-Konfiguration hoch.';
$string['fileparsefailed'] = 'Die hochgeladene Datei konnte nicht als SEB-Konfiguration gespeichert werden.';
$string['httplinkbutton'] = 'Konfiguration herunterladen';
$string['invalid_browser_key'] = 'Ungültiger SEB Browser Key';
$string['invalid_config_key'] = 'Ungültiger SEB Config Key';
$string['invalidkeys'] = 'Die Safe-Exam-Browser-Keys konnten nicht validiert werden. Prüfen Sie, dass Sie den Safe-Exam-Browser mit der richtigen Konfigurationsdatei verwenden.';
$string['invalidtemplate'] = 'Ungültiges SEB Config Template';
$string['manage_templates'] = 'Safe-Exam-Browser-Templates';
$string['managetemplates'] = 'Templates verwalten';
$string['missingrequiredsettings'] = 'In den Konfigurationseinstellungen sind nicht alle erforderlichen Optionen gesetzt.';
$string['name'] = 'Name';
$string['newtemplate'] = 'Neues Template';
$string['noconfigfilefound'] = 'Keine hochgeladene SEB-Konfigurationsdatei konnte für den Test mit der cmid: {$a} gefunden werden.';
$string['noconfigfound'] = 'Keine SEB-Konfiguration konnte für den Test mit der cmid: {$a} gefunden werden.';
$string['not_seb'] = 'Es wird kein Safe-Exam-Browser verwendet.';
$string['notemplate'] = 'Kein Template';
$string['passwordnotset'] = 'Die aktuellen Einstellungen erfordern, dass für Tests mit dem Safe Exam Browser ein Test-Kennwort festgelegt wird.';
$string['pluginname'] = 'Zugriffsregeln für den Safe-Exam-Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe-Exam-Browser-EInstellungen für einen Test. Dies beinhaltet auch die ID der Person, die die Einstellungen erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID des Tests, für den die Einstellungen existieren.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Zeitpunkt, zu dem die Einstellungen erstellt wurden.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Zeitpunkt, zu dem die Einstellungen zuletzt geändert wurden.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID der Person, die die Einstellungen erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe-Exam-Browser-Template. Dies beinhaltet auch die ID der Person, die das Template erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Zeitpunkt, zu dem das Template erstellt wurden.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Zeitpunkt, zu dem das Template zuletzt geändert wurden.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID der Person, die das Template erstellt oder zuletzt geändert hat.';
$string['quizsettings'] = 'Test-Einstellungen';
$string['restoredfrom'] = '{$a->name} (wiederhergestellt via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Anforderung übergehen, einen Test im Safe-Exam-Browser anzuzeigen.';
$string['seb:manage_filemanager_sebconfigfile'] = 'SEB-Einstellung: SEB-Konfigurationsdatei auswählen';
$string['seb:manage_seb_activateurlfiltering'] = 'SEB-Einstellung: URL-Filter aktivieren';
$string['seb:manage_seb_allowcapturecamera'] = 'SEB-Test-Einstellungen ändern: Browserzugriff auf die Kamera erlauben';
$string['seb:manage_seb_allowcapturemicrophone'] = 'SEB-Test-Einstellungen ändern: Browserzugriff auf Mikrofon erlauben';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'SEB-Einstellung: Erlaubte Browser-Exam-Schlüssel eingeben';
$string['seb:manage_seb_allowreloadinexam'] = 'SEB-Einstellung: Neuladen der Prüfung erlauben';
$string['seb:manage_seb_allowspellchecking'] = 'SEB-Einstellung: Rechtschreibprüfung aktivieren';
$string['seb:manage_seb_allowuserquitseb'] = 'SEB-Einstellung: Beenden von SEB erlauben';
$string['seb:manage_seb_enableaudiocontrol'] = 'SEB-Einstellung: Audio-Steuerung anzeigen';
$string['seb:manage_seb_expressionsallowed'] = 'SEB-Einstellung: Erlaubte Ausdrücke';
$string['seb:manage_seb_expressionsblocked'] = 'SEB-Einstellung: Blockierte Ausdrücke';
$string['seb:manage_seb_filterembeddedcontent'] = 'SEB-Einstellung: Eingebetteten Inhalt filtern';
$string['seb:manage_seb_linkquitseb'] = 'SEB-Einstellung: Link zum Beenden';
$string['seb:manage_seb_muteonstartup'] = 'SEB-Einstellung: Stummschaltung beim Start';
$string['seb:manage_seb_quitpassword'] = 'SEB-Einstellung: Kennwort zum Beenden';
$string['seb:manage_seb_regexallowed'] = 'SEB-Einstellung: Regex-Ausdrücke erlaubt';
$string['seb:manage_seb_regexblocked'] = 'SEB-Einstellung: Regex-Ausdrücke blockiert';
$string['seb:manage_seb_requiresafeexambrowser'] = 'SEB-Einstellung: Safe-Exam-Browser notwendig machen';
$string['seb:manage_seb_showkeyboardlayout'] = 'SEB-Einstellung: Tastaturbelegung anzeigen';
$string['seb:manage_seb_showreloadbutton'] = 'SEB-Einstellung: Taste "Neuladen" anzeigen';
$string['seb:manage_seb_showsebdownloadlink'] = 'SEB-Einstellung: Taste "Download" anzeigen';
$string['seb:manage_seb_showsebtaskbar'] = 'SEB-Einstellung: Taskleiste anzeigen';
$string['seb:manage_seb_showtime'] = 'SEB-Einstellung: Zeit anzeigen';
$string['seb:manage_seb_showwificontrol'] = 'SEB-Einstellung: WLAN-Steuerung anzeigen';
$string['seb:manage_seb_templateid'] = 'SEB-Einstellung: SEB-Template auswählen';
$string['seb:manage_seb_userconfirmquit'] = 'SEB-Einstellung: Beenden muss bestätigt werden';
$string['seb:managetemplates'] = 'SEB-Konfiguration-Templates verwalten';
$string['seb_activateurlfiltering'] = 'URL-Filter erlauben';
$string['seb_activateurlfiltering_help'] = 'Mit dieser Option werden URLs beim Laden von Webseiten gefiltert. Das Filter-Set muss hier unten definiert werden.';
$string['seb_allowcapturecamera'] = 'Browserzugriff auf die Kamera zulassen';
$string['seb_allowcapturecamera_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer/innen vor Beginn der Prüfungssitzung aufgefordert, SEB Zugriff auf die Kamera zu gewähren. Unter macOS 12/iOS 15 oder höher verhindert das Deaktivieren dieser Einstellung in jedem Fall den Zugriff von Webanwendungen auf die Kamera. Videoaufzeichnungen über WebRTC sind dann nicht mehr möglich.';
$string['seb_allowcapturemicrophone'] = 'Browserzugriff auf das Mikrofon zulassen';
$string['seb_allowcapturemicrophone_help'] = 'Wenn diese Option aktiviert ist, werden Benutzer vor Beginn der Prüfungssitzung aufgefordert, SEB Zugriff auf das Mikrofon zu gewähren. Unter macOS 12/iOS 15 oder höher verhindert das Deaktivieren dieser Einstellung in jedem Fall den Zugriff von Webanwendungen auf das Mikrofon. Audioaufnahmen über WebRTC sind dann nicht mehr möglich.';
$string['seb_allowedbrowserexamkeys'] = 'Erlaubte Safe-Exam-Browser-Keys';
$string['seb_allowedbrowserexamkeys_help'] = 'In diesem Feld können Sie die erlaubten Safe-Exam-Browser-Keys für verschiedene Versionen des Safe-Exam-Browser angeben, die auf diesen Test zugreifen dürfen. Wenn keine Schlüssel angegeben werden, werden für diesen Test keine Safe-Browser-Exam-Keys geprüft.';
$string['seb_allowreloadinexam'] = 'Neuladen bei Prüfung erlauben';
$string['seb_allowreloadinexam_help'] = 'Mit dieser Option wird das Neuladen einer Webseite erlaubt (Taste "Neuladen" in der SEB-Taskleiste, Browser-Toolbar, iOS-Slider-Menü, Tastatur-Kurzbefehl F5, Cmd-R). Das Offline-Caching könnte ausfallen, wenn eine Seite ohne Internetverbindung neu geladen werden soll.';
$string['seb_allowspellchecking'] = 'Rechtschreibprüfung erlauben';
$string['seb_allowspellchecking_help'] = 'Mit dieser Option wird die Rechtschreibprüfung im SEB-Browser erlaubt.';
$string['seb_allowuserquitseb'] = 'Beenden von SEB erlauben';
$string['seb_allowuserquitseb_help'] = 'Mit dieser Option wird das Beenden des Safe-Exam-Browser erlaubt. (Taste "Beenden" in der SEB-Taskleiste, Strg-Q, Cmd-Q oder Fenster-Schließen-Taste).';
$string['seb_enableaudiocontrol'] = 'Audio-Steuerung erlauben';
$string['seb_enableaudiocontrol_help'] = 'Mit dieser Option wird die Audio-Steuerung in der SEB-Taskleiste angezeigt.';
$string['seb_expressionsallowed'] = 'Erlaubte Ausdrücke';
$string['seb_expressionsallowed_help'] = 'Ein Textfeld, das die Filterausdrücke für erlaubte URLs enthält. Die Verwendung des Wildcard-Characters \'\\*\' ist möglich. Beispiele für Ausdrücke: \'example.com\' oder \'example.com/stuff/\\*\'. \'example.com\' passt zu \'example.com\', \'www.example.com\' und \'www.mail.example.com\'. \'example.com/stuff/\\*\' passt zu allen Anfragen an eine beliebige Unterdomäne von  \'example.com\', die \'stuff\' als erstes Segment des Pfades haben.';
$string['seb_expressionsblocked'] = 'Blockierte Ausdrücke';
$string['seb_expressionsblocked_help'] = 'Ein Textfeld, das die Filterausdrücke für blockierte URLs enthält. Die Verwendung des Wildcard-Characters \'\\*\' ist möglich. Beispiele für Ausdrücke: \'example.com\' oder \'example.com/stuff/\\*\'. \'example.com\' passt zu \'example.com\', \'www.example.com\' und \'www.mail.example.com\'. \'example.com/stuff/\\*\' passt zu allen Anfragen an eine beliebige Unterdomäne von  \'example.com\', die \'stuff\' als erstes Segment des Pfades haben.';
$string['seb_filterembeddedcontent'] = 'Eingebetteten Inhalt ebenfalls filtern';
$string['seb_filterembeddedcontent_help'] = 'Wenn die Option aktiviert ist, werden auch alle eingebetteten Ressourcen über die Filter gefiltert.';
$string['seb_help'] = 'Einen Test zur Verwendung des Safe Exam Browser einrichten.';
$string['seb_linkquitseb'] = '"Safe Exam Browser beenden"-Button anzeigen, konfiguriert mit diesem Link zum Beenden';
$string['seb_linkquitseb_help'] = 'In diesem Feld können Sie den Link zum Beenden von SEB angeben. Dieser Link wird für die Taste "Safe-Exam-Browser beenden" verwendet, nachdem ein Test abgeschlossen und abgesendet wurde. Mit dem Link kann SEB ohne die Eingabe eines Kennworts abgeschlossen werden. Bei einer HTTPS-Website muss der Link mit https:// beginnen. Wenn kein Link zum Beenden angegeben ist, wird keine Taste "Safe Exam Browser beenden" angezeigt und kein Link zum Beenden festgelegt.';
$string['seb_managetemplates'] = 'Safe Exam Browser Templates verwalten';
$string['seb_muteonstartup'] = 'Stummschaltung beim Start';
$string['seb_muteonstartup_help'] = 'Wenn die Option aktiviert wird, ist das Audio beim Starten des SEB zunächst stummgeschaltet.';
$string['seb_quitpassword'] = 'Beenden/Entsperren-Kennwort';
$string['seb_quitpassword_help'] = 'Dieses Kennwort wird abgefragt, wenn SEB mittels Fenster-Schließen-Taste, Beenden-Taste oder Strg-Q (Cmd-Q), beenden wollen. Wenn kein Beenden/Entsperren-Kennwort gesetzt ist, fragt SEB nur "Sind Sie sicher, dass Sie SEB beenden wollen?".';
$string['seb_regexallowed'] = 'Erlaubte Regex';
$string['seb_regexallowed_help'] = 'Ein Textfeld, das die Filterausdrücke für erlaubte URLs in einem Format mit regulärem Ausdruck (Regex) enthält.';
$string['seb_regexblocked'] = 'Blockierte Regex';
$string['seb_regexblocked_help'] = 'Ein Textfeld, das die Filterausdrücke für blockierte URLs in einem Format mit regulärem Ausdruck (Regex) enthält.';
$string['seb_requiresafeexambrowser'] = 'Nutzung des Safe Exam Browsers erforderlich';
$string['seb_requiresafeexambrowser_help'] = 'Wenn die Option aktiviert ist, können Teilnehmer/innen den Test nur mit dem Safe Exam Browser durchführen.
Die verfügbaren Optionen sind:

* Nein
<br/>Der Safe Exam Browser ist nicht erforderlich, um den Test zu versuchen.
* Ja – Bestehendes Template verwenden
<br/>Zur Konfiguration des Safe Exam Browser wird ein Template verwendet. Die Templates werden vom Moodle-Administrator verwaltet. Ihre manuellen Einstellungen überschreiben die Einstellungen im Template.
* Ja – Manuell konfigurieren
<br/>Zur Konfiguration des Safe Exam Browser wird kein Template verwendet. Sie können den Safe Exam Browser manuell konfigurieren.
* Ja – Meine eigene Konfiguration hochladen
<br/>Sie können Ihre eigene Konfigurationsdatei für den Safe Exam Browser hochladen. Alle manuellen Einstellungen und die Verwendung von Templates werden deaktiviert.
* Ja – SEB-Client-Konfiguration verwenden
<br/>Es gibt keine Konfiguration des Safe Exam Browser auf der Moodle-Seite. Der Test kann mit jeder Konfiguration des Safe Exam Browser durchgeführt werden.';
$string['seb_showkeyboardlayout'] = 'Auswahl Tastaturbelegung anzeigen';
$string['seb_showkeyboardlayout_help'] = 'Wenn die Option aktiviert ist, wird die aktuelle Tastaturbelegung in der SEB-Taskleiste angezeigt. Dies erlaubt es Ihnen, zu anderen Tastenbelegungen zu wechseln, die im Betriebssystem aktiviert wurden.';
$string['seb_showreloadbutton'] = 'Neuladen-Taste anzeigen';
$string['seb_showreloadbutton_help'] = 'Wenn die Option aktiviert ist, erscheint eine Neuladen-Taste in der SEB-Taskleiste. Diese Taste ermöglicht es, die aktuelle Webseite neu zu laden.';
$string['seb_showsebdownloadlink'] = 'Safe Exam Browser Download-Button anzeigen';
$string['seb_showsebdownloadlink_help'] = 'Wenn die Option aktiviert ist, wird ein Safe Exam Browser Download-Button auf der Startseite des Tests angezeigt.';
$string['seb_showsebtaskbar'] = 'SEB-Taskleiste anzeigen';
$string['seb_showsebtaskbar_help'] = 'Wenn die Option aktiviert ist, wird eine Taskleiste unten im SEB-Browserfenster dargestellt. Diese Taskleiste ist notwendig, um die WLAN-Auswahl, die Neuladen-Taste, die Uhrzeit oder die Tastaturbelegung anzuzeigen.';
$string['seb_showtime'] = 'Uhrzeit anzeigen';
$string['seb_showtime_help'] = 'Wenn die Option aktiviert ist, wird die aktuelle Uhrzeit in der SEB-Taskleiste angezeigt.';
$string['seb_showwificontrol'] = 'WLAN-Auswahl anzeigen';
$string['seb_showwificontrol_help'] = 'Wenn die Option aktiviert ist, erscheint eine Taste zur WLAN-Auswahl in der SEB-Taskleiste. Die Taste erlaubt es, sich mit WLAN-Netzwerken zu verbinden, mit denen zuvor eine Verbindung bestand.';
$string['seb_templateid'] = 'Safe Exam Browser Konfiguration-Template';
$string['seb_templateid_help'] = 'Die Einstellungen im gewählten Konfiguration-Template werden für die Konfiguration des Safe Exam Browser bei der Durchführung des Quiz verwendet. Sie können die Einstellungen im Template mit Ihren manuellen Einstellungen überschreiben.';
$string['seb_use_client'] = 'Ja – SEB-Client-Konfiguration verwenden';
$string['seb_use_manually'] = 'Ja – Manuell konfigurieren';
$string['seb_use_template'] = 'Ja – Bestehendes Template verwenden';
$string['seb_use_upload'] = 'Ja – Meine eigene Konfiguration hochladen';
$string['seb_userconfirmquit'] = 'Nutzer/in muss das Beenden bestätigen';
$string['seb_userconfirmquit_help'] = 'Wenn die Option aktiviert ist, müssen Teilnehmer/innen das Beenden des SEB bestätigen, wenn ein Link zum Beenden erkannt wird.';
$string['sebdownloadbutton'] = 'Safe Exam Browser downloaden';
$string['sebkeysvalidationfailed'] = 'Fehler bei der Überprüfung der SEB-Schlüssel';
$string['seblinkbutton'] = 'Safe Exam Browser starten';
$string['sebrequired'] = 'Für diesen Test wurde festgelegt, dass er ausschließlich im Safe Exam Browser durchgeführt werden kann.';
$string['setting:autoreconfigureseb'] = 'Automatische Konfiguration von SEB';
$string['setting:autoreconfigureseb_desc'] = 'Wenn die Option aktiviert ist, wird bei Nutzer/innen, die mit dem Safe Exam Browser zum Test navigieren, der Safe Exam Browser automatisch neu konfiguriert.';
$string['setting:displayblocksbeforestart'] = 'Blöcke anzeigen, bevor ein Test gestartet wird';
$string['setting:displayblocksbeforestart_desc'] = 'Wenn die Option aktiviert ist, werden Blöcke angezeigt, bevor ein Test gestartet wird.';
$string['setting:displayblockswhenfinished'] = 'Blöcke anzeigen, nachdem ein Test beendet wurde';
$string['setting:displayblockswhenfinished_desc'] = 'Wenn die Option aktiviert ist, werden Blöcke angezeigt, nachdem eine Person ihren Testversuch beendet hat.';
$string['setting:downloadlink'] = 'Safe Exam Browser Download-Link';
$string['setting:downloadlink_desc'] = 'URL um das Safe Exam Browser-Programm herunterzuladen.';
$string['setting:quizpasswordrequired'] = 'Test-Kennwort erforderlich';
$string['setting:quizpasswordrequired_desc'] = 'Wenn die Option aktiviert ist, müssen alle Tests, die den Safe Exam Browser erfordern, ein gesetztes Test-Kennwort haben.';
$string['setting:showhttplink'] = 'http:// Link anzeigen';
$string['setting:showseblink'] = 'seb:// Link anzeigen';
$string['setting:showseblinks'] = 'Safe Exam Browser-Konfigurations-Links anzeigen';
$string['setting:showseblinks_desc'] = 'Entscheiden Sie, ob Links für Nutzer/innen angezeigt werden sollen, um auf die SEB-Konfigurationsdatei zuzugreifen, wenn der Zugriff auf den Test verhindert wird. Beachten Sie, dass seb://-Links möglicherweise nicht für jeden Browser funktionieren.';
$string['setting:supportedversions'] = 'Beachten Sie bitte, dass folgende Client-Versionen des Safe-Exam-Browsers mindestens erforderlich sind, um die Config-Key-Option zu nutzen: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Da es mindestens einen Testversuch gibt, können die Einstellungen des Safe Exam Browser nicht mehr aktualisiert werden.';
$string['unknown_reason'] = 'Unbekannte Ursache';
$string['used'] = 'In Verwendung';
