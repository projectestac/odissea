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
 * Strings for component 'repository', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   repository
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Dateiauswahl';
$string['activaterep'] = 'Aktivierte Repositories';
$string['activerepository'] = 'Verfügbare Repository-Plugins';
$string['activitybackup'] = 'Aktivitätssicherung';
$string['add'] = 'Hinzufügen';
$string['addfile'] = 'Datei hinzufügen';
$string['addfiletext'] = 'Datei hinzufügen';
$string['addplugin'] = 'Repository-Plugin hinzufügen';
$string['allowexternallinks'] = 'Externe Links erlauben';
$string['areacategoryintro'] = 'Kategorieeinleitung';
$string['areacourseintro'] = 'Kurseinleitung';
$string['areacourseoverviewfiles'] = 'Kursbild';
$string['areamainfile'] = 'Hauptdatei';
$string['arearoot'] = 'System';
$string['areauserbackup'] = 'Nutzersicherung';
$string['areauserdraft'] = 'Entwürfe';
$string['areauserpersonal'] = 'Meine Dateien';
$string['areauserprofile'] = 'Profile';
$string['attachedfiles'] = 'Anhängende Dateien';
$string['attachment'] = 'Anhang';
$string['author'] = 'Autor/in';
$string['automatedbackup'] = 'Automatisierte Sicherungen';
$string['back'] = 'Zurück';
$string['backtodraftfiles'] = 'Zurück zum Dateimanager für Entwürfe';
$string['cachecleared'] = 'Cache-Dateien gelöscht';
$string['cacheexpire'] = 'Cache ungültig';
$string['cannotaccessparentwin'] = 'Wenn HTTPS benutzt wird, kann das Repository nicht automatisch aktualisiert werden. Gehen Sie zurück in die Dateiauswahl und wählen Sie das Repository erneut aus.';
$string['cannotdelete'] = 'Datei kann nicht gelöscht werden';
$string['cannotdownload'] = 'Datei kann nicht herunter geladen werden';
$string['cannotdownloaddir'] = 'Verzeichnis kann nicht herunter geladen werden';
$string['cannotinitplugin'] = 'Aufruf plugin_init fehlgeschlagen';
$string['choosealink'] = 'Link wählen...';
$string['chooselicense'] = 'Lizenz';
$string['cleancache'] = 'Cache-Dateien löschen';
$string['close'] = 'Schließen';
$string['commonrepositorysettings'] = 'Einstellungen';
$string['configallowexternallinks'] = 'Diese Option erlaubt allen Nutzer/innen zu entscheiden, ob externe Medien als Kopie in das Moodle kopiert werden sollen oder nicht. Wenn die Option ausgeschaltet ist, werden Medien immer in das Moodle hinein kopiert, was für die Datenintegrität und Sicherheit am besten wäre. Wenn die Option eingeschaltet ist, dann dürfen die Nutzer/innen beim Einfügen von Medien selber wählen.';
$string['configcacheexpire'] = 'Zeitdauer in der Dateilisten aus externen Repositories im lokalen Cache zwischen gespeichert werden (in Sekunden).';
$string['configgetfiletimeout'] = 'Timeout (in Sekunden) für den Download einer externen Datei nach Moodle';
$string['configsaved'] = 'Einstellungen gespeichert';
$string['configsyncfiletimeout'] = 'Timeout (in Sekunden) für die Synchronisation der Größe einer externen Datei';
$string['configsyncimagetimeout'] = 'Timeout (in Sekunden) für den Download des Dateibildes während der Synchronisation';
$string['confirmdelete'] = 'Möchten Sie das Repository \'{$a}\' wirklich löschen? Wenn Sie \'Fortsetzen und Download\' wählen, werden alle extern verknüpften Dateien heruntergeladen und in Moodle gespeichert. Dieser Prozesss kann sehr viel Zeit dauern.';
$string['confirmdeletefile'] = 'Möchten Sie diese Datei wirklich löschen?';
$string['confirmdeletefilewithhref'] = 'Sind Sie sicher, dass Sie diese Datei löschen wollen? Zu dieser Datei gibt es {$a} Aliase/Verknüpfungen. Wenn Sie den Vorgang fortsetzen, werden die Aliase in Kopien umgewandelt.';
$string['confirmdeletefolder'] = 'Sind Sie sicher, dass Sie dieses Verzeichnis löschen wollen? Alle Dateien und Unterverzeichnisse werden damit gelöscht.';
$string['confirmremove'] = 'Möchten Sie das Repository-Plugin \'{$a}\' wirklich mit allen Einstellungen und <strong>allen Instanzen</strong> entfernen? Wenn Sie Option \'Fortsetzen und Download\' wählen, werden alle extern verknüpften Dateien heruntergeladen und in Moodle gespeichert. Dieser Prozess kann sehr lange dauern.';
$string['confirmrenamefile'] = 'Sind Sie sicher, dass Sie diese Datei umbenennen oder verschieben wollen? Zu dieser Datei gibt es {$a} Aliase/Verknüpfungen. Wenn Sie den Vorgang fortsetzen, werden die Aliase in Kopien umgewandelt.';
$string['confirmrenamefolder'] = 'Sind Sie sicher, dass Sie dieses Verzeichnis umbenennen oder verschieben wollen? Alle Aliase/Verknüpfungen werden in Kopien umgewandelt.';
$string['continueuninstall'] = 'Weiter';
$string['continueuninstallanddownload'] = 'Weiter und herunterladen';
$string['copying'] = 'Kopiere';
$string['coursebackup'] = 'Kurssicherungen';
$string['create'] = 'Erstellen';
$string['createfolder'] = 'Verzeichnis anlegen';
$string['createfolderfail'] = 'Fehler beim Anlegen des Verzeichnisses';
$string['createfoldersuccess'] = 'Verzeichnis erfolgreich angelegt';
$string['createinstance'] = 'Repository-Instanz erstellen';
$string['createrepository'] = 'Repository-Instanz erstellen';
$string['createxxinstance'] = '{$a}-Instanz erstellen';
$string['date'] = 'Datum';
$string['datecreated'] = 'Angelegt';
$string['deleted'] = 'Repository-Instanz gelöscht';
$string['deleterepository'] = 'Repository-Instanz löschen';
$string['detailview'] = 'Details anzeigen';
$string['dimensions'] = 'Größe';
$string['disabled'] = 'Deaktiviert';
$string['displayasdetails'] = 'Ansicht der Dateidetails';
$string['displayasicons'] = 'Ansicht der Dateisymbole';
$string['displayastree'] = 'Ansicht der Verzeichnisstruktur';
$string['displaydetails'] = 'Verzeichnis mit Dateidetails anzeigen';
$string['displayicons'] = 'Verzeichnis mit Dateisymbolen anzeigen';
$string['displaytree'] = 'Verzeichnis hierarchisch anzeigen';
$string['download'] = 'Download';
$string['downloadallfiles'] = 'Alle Dateien herunterladen';
$string['downloadfolder'] = 'Alles herunterladen';
$string['downloadsucc'] = 'Download erfolgreich!';
$string['draftareanofiles'] = 'Kein Download möglich, da keine Dateien verbunden sind';
$string['editrepositoryinstance'] = 'Repository-Instanz ändern';
$string['emptylist'] = 'Leere Liste';
$string['emptytype'] = 'Repository-Instanz kann nicht erstellt werden - kein Name angegeben';
$string['enablecourseinstances'] = 'Nutzer/innen dürfen eine Repository-Instanz im Kurs anlegen';
$string['enableuserinstances'] = 'Nutzer/innen  dürfen eine eigene Repository-Instanz anlegen';
$string['enter'] = 'Eingabe';
$string['entername'] = 'Verzeichnisnamen angeben';
$string['enternewname'] = 'Neuen Dateinamen angeben';
$string['error'] = 'Fehler aufgetreten!';
$string['errordoublereference'] = 'Das Überschreiben des Dateinamens durch einen Shortcut/Alias ist nicht möglich, da für die Datei bereits Shortcuts existieren.';
$string['errornotyourfile'] = 'Sie dürfen keine Datei auswählen, die nicht von Ihnen hinzugefügt wurde';
$string['errorpostmaxsize'] = 'Die ausgewählte Datei könnte größer sein als der Server zulässt.';
$string['erroruniquename'] = 'Der Name des Repository muss eindeutig sein';
$string['errorwhilecommunicatingwith'] = 'Fehler bei der Kommunikation mit dem Repository \'{$a}\'';
$string['errorwhiledownload'] = 'Beim Download der Datei {$a} trat ein Fehler auf';
$string['existingrepository'] = 'Dieses Repository existiert bereits';
$string['federatedsearch'] = 'Zusammenhängende Suche';
$string['fileexists'] = 'Der Dateiname ist bereits vorhanden. Verwenden Sie bitte einen anderen Namen';
$string['fileexistsdialog_editor'] = 'Eine Datei mit diesem Namen wurde bereits an den Text angehängt, den Sie gerade bearbeiten';
$string['fileexistsdialog_filemanager'] = 'Eine Datei mit diesem Namen wurde bereits an den Text angehängt';
$string['fileexistsdialogheader'] = 'Datei bereits vorhanden';
$string['filename'] = 'Dateiname';
$string['filenotnull'] = 'Sie müssen eine Datei zum Hochladen auswählen';
$string['filepicker'] = 'Dateiauswahl';
$string['filesaved'] = 'Datei gespeichert!';
$string['filesizenull'] = 'Dateigröße kann nicht bestimmt werden';
$string['folderexists'] = 'Der Verzeichnisname wird bereits verwendet. Bitte verwenden Sie einen anderen Namen.';
$string['foldernotfound'] = 'Verzeichnis nicht gefunden';
$string['folderrecurse'] = 'Ein Verzeichnis kann nicht in ein eigenes Unterverzeichnis verschoben werden';
$string['getfile'] = 'Datei auswählen';
$string['getfiletimeout'] = 'Timeout Download';
$string['help'] = 'Hilfe';
$string['iconview'] = 'Symbolansicht';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'Instanz';
$string['instancedeleted'] = 'Instanz gelöscht';
$string['instances'] = 'Repository-Instanzen';
$string['instancesforcourses'] = '{$a} kursweit offene Instanzen';
$string['instancesforsite'] = '{$a} website-weit offene Instanzen';
$string['instancesforusers'] = '{$a} persönliche Nutzerinstanzen';
$string['invalidfiletype'] = 'Dateityp {$a} wird nicht akzeptiert';
$string['invalidjson'] = 'Ungültiger JSON-Text';
$string['invalidparams'] = 'Ungültige Parameter';
$string['invalidplugin'] = 'Ungültiges Repository-Plugin {$a}';
$string['invalidrepositoryid'] = 'Ungültige Repository-ID';
$string['isactive'] = 'Aktiv?';
$string['keyword'] = 'Tag';
$string['lastmodified'] = 'Zuletzt geändert';
$string['license'] = 'Lizenz';
$string['linkexternal'] = 'Extern verlinken';
$string['listview'] = 'Listenansicht';
$string['loading'] = 'Wird geladen...';
$string['login'] = 'Mit Ihrem Nutzerkonto anmelden';
$string['logintoaccount'] = 'Anmeldung zu Ihrem Nutzerkonto {$a}';
$string['logout'] = 'Abmelden';
$string['lostsource'] = 'Fehler. Quelle nicht gefunden. {$a}';
$string['makefilecontrolledlink'] = 'Zugriffsgesteuerten Link anlegen';
$string['makefileinternal'] = 'Kopie der Datei anlegen';
$string['makefilelink'] = 'Direkt zur Datei verlinken';
$string['makefilereference'] = 'Alias/Verknüpfung zur Datei anlegen';
$string['manage'] = 'Übersicht';
$string['manageinstances'] = 'Instanzen verwalten';
$string['manageurl'] = 'Verwalten';
$string['manageuserrepository'] = 'Eigenes Repository verwalten';
$string['missingsourcekey'] = 'Der Quellschlüssel fehlt. Dieser Schlüssel muss auch bereitgestellt werden, um die Datei abzurufen.';
$string['moving'] = 'Verschieben';
$string['name'] = 'Name';
$string['newfolder'] = 'Neues Verzeichnis';
$string['newfoldername'] = 'Neuer Verzeichnisname';
$string['noenter'] = 'Nichts eingegeben';
$string['nofilesattached'] = 'Keine Datei';
$string['nofilesavailable'] = 'Keine Dateien vorhanden';
$string['nomorefiles'] = 'Keine weiteren Anhänge erlaubt';
$string['nopathselected'] = 'Kein Zielpfad ausgewählt (doppelklicken Sie einen Verzeichniszweig)';
$string['nopermissiontoaccess'] = 'Kein Zugriffsrecht für dieses Repository';
$string['norepositoriesavailable'] = 'Sie können hier zur Zeit keine Dateien hochladen.';
$string['norepositoriesexternalavailable'] = 'Keine Ihrer aktuellen Dateiverrwaltungen kann externe Dateien liefern';
$string['noresult'] = 'Keine Suchergebnisse';
$string['notyourinstances'] = 'Sie können Repository-Instanzen anderer Nutzer/innen nicht einsehen oder ändern.';
$string['off'] = 'Aktiviert (nicht verfügbar)';
$string['on'] = 'Aktiviert';
$string['openpicker'] = 'Datei wählen ...';
$string['operation'] = 'Vorgang';
$string['original'] = 'Original';
$string['overwrite'] = 'Überschreiben';
$string['overwriteall'] = 'Alle überschreiben';
$string['path'] = 'Pfad';
$string['plugin'] = 'Repository-Plugins';
$string['pluginerror'] = 'Fehler im Repository-Plugin';
$string['pluginname'] = 'Name des Plugins';
$string['pluginnamehelp'] = 'Wenn Sie dieses Feld leer lassen, wird der Standardname aus dem Sprachpaket benutzt.';
$string['popup'] = 'Zum Einloggen klicken Sie auf den Login-Button';
$string['popupblockeddownload'] = 'Das Download-Fenster ist blockiert. Bitte erlauben Sie Popup-Fenster in Ihrem Browser und versuchen es noch einmal.';
$string['preview'] = 'Vorschau';
$string['privacy:metadata:repository'] = 'Die Repository-Komponente speichert die Repository-Typen im Core-System.';
$string['privacy:metadata:repository_instances'] = 'Das Repository-Plugin speichert nutzereigene Repository-Instanzen im Core-System.';
$string['privacy:metadata:repository_instances:name'] = 'Individuell vergebene Bezeichnung der Repository-Instanz';
$string['privacy:metadata:repository_instances:password'] = 'Optionales Paswort für die Repository Instanz';
$string['privacy:metadata:repository_instances:timecreated'] = 'Datum/Zeitpunkt, an dem die Repository-Instanz erstellt wurde';
$string['privacy:metadata:repository_instances:timemodified'] = 'Datum/Zeit der Änderung der Repository-Instanz';
$string['privacy:metadata:repository_instances:typeid'] = 'ID-Typ der Repository-Instanz';
$string['privacy:metadata:repository_instances:userid'] = 'ID des Nutzers der Repository-Instanz';
$string['privacy:metadata:repository_instances:username'] = 'Optionaler Nutzername für die Repository-Instanz';
$string['privatefilesof'] = '{$a} Meine Dateien';
$string['readonlyinstance'] = 'Sie können keinen schreibgeschützten Eintrag bearbeiten oder löschen';
$string['referencesexist'] = '{$a} Aliase/Verknüpfungen zu dieser Datei';
$string['referenceslist'] = 'Aliase/Verknüpfungen';
$string['refresh'] = 'Neu laden';
$string['refreshnonjsfilepicker'] = 'Bitte schließen Sie das Fenster und laden Sie die Dateiauswahl ohne JavaScript';
$string['removed'] = 'Repository entfernt';
$string['renameall'] = 'Alle umbenennen';
$string['renameto'] = 'Nach \'{$a}\' umbenennen';
$string['repositories'] = 'Repositories';
$string['repository'] = 'Repository';
$string['repositorycourse'] = 'Kurs-Repositories';
$string['repositoryerror'] = 'Fehler aus einem verbundenen Repository: {$a}';
$string['repositoryicon'] = 'Repository-Symbol';
$string['save'] = 'Speichern';
$string['saveas'] = 'Speichern unter';
$string['saved'] = 'Gespeichert';
$string['saving'] = 'Wird gespeichert ...';
$string['search'] = 'Suchen';
$string['searching'] = 'Suche in';
$string['searchrepo'] = 'Repository durchsuchen';
$string['sectionbackup'] = 'Abschnittssicherung';
$string['select'] = 'Wählen Sie';
$string['setmainfile'] = 'Hauptdatei setzen';
$string['setmainfile_help'] = 'Falls mehrere Dateien im Verzeichnis liegen, ist die Hauptdatei diejenige Datei, die angezeigt wird. Die übrigen Dateien (z.B. Bilder oder Videos) können in die Hauptdatei eingebettet sein. In der Dateiverwaltung wird der Dateiname der Hauptdatei in fetter Schrift dargestellt.';
$string['settings'] = 'Einstellungen';
$string['setupdefaultplugins'] = 'Einrichten der standardmäßigen Repository-Plugins';
$string['siteinstances'] = 'Repository-Instanzen der Website';
$string['size'] = 'Größe';
$string['sourcekeymismatch'] = 'Die Quell-URL passt nicht zum angegebenen Quellschlüssel.';
$string['submit'] = 'Übertragen';
$string['sync'] = 'Syncronisieren';
$string['syncfiletimeout'] = 'Timeout Sync Dateigröße';
$string['syncimagetimeout'] = 'Timeout Sync Dateibild';
$string['thumbview'] = 'Ansicht mit Vorschaubildern';
$string['title'] = 'Datei auswählen...';
$string['type'] = 'Typ';
$string['typenotvisible'] = 'Typ nicht sichtbar';
$string['undisclosedreference'] = '(verborgen)';
$string['undisclosedsource'] = '(verborgen)';
$string['unknownoriginal'] = 'Unbekannt';
$string['unknownsource'] = 'Unbekannte Quelle';
$string['unzipped'] = 'Erfolgreich entpackt';
$string['upload'] = 'Datei hochladen';
$string['uploading'] = 'Wird hochgeladen...';
$string['uploadsucc'] = 'Datei wurde erfolgreich hochgeladen';
$string['uselatestfile'] = 'Letzte Datei benutzen';
$string['usenonjsfilemanager'] = 'Dateiverwaltung in neuem Fenster öffnen';
$string['usenonjsfilepicker'] = 'Dateiauswahl im neuen Fenster verwenden';
$string['usercontextrepositorydisabled'] = 'Sie können dieses Repository nicht auf Nutzerebene bearbeiten';
$string['wrongcontext'] = 'Sie können auf diesen Kontext nicht zugreifen';
$string['xhtmlerror'] = 'Sie benutzen einen XHTML strict header, aber mindestens eine YUI-Komponente arbeitet nicht in diesem Modus. Bitte schalten Sie den Modus aus.';
$string['ziped'] = 'Verzeichnis erfolgreich komprimiert';
