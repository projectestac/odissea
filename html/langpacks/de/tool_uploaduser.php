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
 * Strings for component 'tool_uploaduser', language 'de', version '4.4'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Löschen erlauben';
$string['allowrenames'] = 'Umbenennen erlauben';
$string['allowsuspends'] = 'Nutzersperrung und -aktivierung erlauben';
$string['assignedsysrole'] = 'Zugewiesene Systemrolle \'{$a}\'';
$string['clidefault'] = 'Standard:';
$string['clierrorargument'] = 'Wert für Argument --{$a->name} ist ungültig. Zulässige Werte: {$a->values}';
$string['clifile'] = 'Der Pfad zur CSV-Datei mit den Nutzerdaten ist erforderlich.';
$string['clifilenotreadable'] = 'Die Datei {$a} existiert nicht oder ist nicht lesbar';
$string['clihelp'] = 'Diese Hilfe ausgeben.';
$string['climissingargument'] = 'Argument --{$a} ist erforderlich';
$string['clititle'] = 'Command line Nutzerupload-Tool.';
$string['clivalidationerror'] = 'Validierungsfehler:';
$string['csvdelimiter'] = 'CSV-Trennzeichen';
$string['defaultvalues'] = 'Standardwerte';
$string['deleteerrors'] = 'Fehler löschen';
$string['duplicateemail'] = 'Mehrere Nutzer/innen haben die E-Mail-Adresse {$a}.';
$string['encoding'] = 'Encoding';
$string['errormnetadd'] = 'Remote-Nutzer/innen können nicht hinzugefügt werden';
$string['errorprefix'] = 'Fehler:';
$string['errors'] = 'Fehler';
$string['examplecsv'] = 'Beispiel-Textdatei';
$string['examplecsv_help'] = 'Um die Beispiel-Textdatei zu verwenden, laden Sie sie herunter und öffnen Sie sie dann mit einem Text- oder Tabellenkalkulationsprogramm. Lassen Sie die erste Zeile unverändert, bearbeiten Sie dann die folgenden Zeilen (Datensätze) und fügen Sie Ihre Nutzerdaten hinzu, indem Sie bei Bedarf weitere Zeilen hinzufügen. Speichern Sie die Datei im CSV-Format und laden Sie sie hoch.

Die Beispiel-Textdatei kann auch zum Testen verwendet werden, da Sie eine Vorschau der Nutzerdaten erhalten und die Aktion abbrechen können, bevor Nutzerkonten erstellt werden.';
$string['infoprefix'] = 'Info:';
$string['invalidtheme'] = 'Das Design "{$a}" ist nicht installiert und wird ignoriert.';
$string['invalidupdatetype'] = 'Diese Option kann mit dem ausgesuchten \'Upload Typ\' nicht ausgewählt werden.';
$string['invaliduserdata'] = 'Für den Nutzer {$a} wurden ungültige Daten entdeckt und automatisch bereinigt.';
$string['invaliduserdatavalues'] = 'Ungültige Daten ({$a->values}) für Nutzer/in \'{$a->username}\' festgestellt. Diese Daten wurden automatisch bereinigt oder gelöscht.';
$string['linex'] = 'Zeile {$a}';
$string['matchemail'] = 'Übereinstimmung bzgl. der E-Mail-Adresse';
$string['nochanges'] = 'Keine Änderungen';
$string['notheme'] = 'Für diese Person ist kein Design definiert.';
$string['pluginname'] = 'Nutzerupload';
$string['privacy:metadata'] = 'Das Plugin \'Nutzer-Upload\' speichert keine personenbezogenen Daten.';
$string['renameerrors'] = 'Fehler beim Umbenennen';
$string['requiredtemplate'] = 'Erforderlich. Geben Sie hier die Vorlagestruktur ein (%l = Nachname, %f = Vorname, %u = Anmeldename). In der Hilfedatei finden Sie weitere Details und Beispiele.';
$string['rowpreviewnum'] = 'Vorschau für Zeilen';
$string['unassignedsysrole'] = 'Nicht zugewiesene Systemrolle \'{$a}\'';
$string['uploadpicture_baduserfield'] = 'Die gewählte Nutzermerkmal ist ungültig. Versuchen Sie es noch einmal.';
$string['uploadpicture_cannotmovezip'] = 'Die ZIP-Datei kann nicht in das temporäre Verzeichnis verschoben werden.';
$string['uploadpicture_cannotprocessdir'] = 'Die entzippten Dateien können nicht verarbeitet werden.';
$string['uploadpicture_cannotsave'] = 'Das Nutzerbild für {$a} kann nicht gespeichert werden. Prüfen Sie die ursprüngliche Bilddatei.';
$string['uploadpicture_cannotunzip'] = 'Die Bilddateien können nicht entpackt werden.';
$string['uploadpicture_invalidfilename'] = 'Die Bilddatei {$a} enthält ungültige Zeichen im Namen und wird nicht benutzt.';
$string['uploadpicture_overwrite'] = 'Vorhandene Nutzerbilder überschreiben?';
$string['uploadpicture_userfield'] = 'Nutzermerkmal für die Zuordnung der Nutzerbilder:';
$string['uploadpicture_usernotfound'] = 'Nutzer/in mit \'{$a->userfield}\'-Wert von \'{$a->uservalue}\' existiert nicht. Wird übersprungen.';
$string['uploadpicture_userskipped'] = 'Nutzerbild {$a} exitiert bereits und wird nicht überschrieben.';
$string['uploadpicture_userupdated'] = 'Nutzerbild {$a} aktualisiert';
$string['uploadpictures'] = 'Nutzerbilder hochladen';
$string['uploadpictures_help'] = 'Nutzerbilder können als ZIP-Paket mit mehreren Bilddateien hochgeladen werden. Moodle ordnet die enthaltenen Dateien den Nutzerkonten als Portrait zu, wenn die Bilddateien geeignet benannt sind. Wenn Sie als Nutzerattribut den Nutzernamen gewählt haben, wird die Bilddatei nutzer1234.jpg für das Nutzerkonto nutzer1234 verwendet. Zulässige Bilddateitypen sind gif, jpg und png.';
$string['uploaduser:uploaduserpictures'] = 'Nutzerbilder hochladen';
$string['uploadusers'] = 'Nutzerliste hochladen';
$string['uploadusers_help'] = 'Nutzer/innen können über eine Textdatei angelegt (und optional in Kurse und globale Gruppen eingeschrieben) werden. Die Textdatei sollte folgendes Format haben:

* Jede Zeile enthält genau einen Datensatz
* Jeder Datensatz enthält eine Serie von Daten, getrennt durch das gewählte Trennzeichen
* Die erste Zeile enthält eine Liste der Feldnamen und definiert die Struktur der übrigen Datensätze
* Die Feldnamen müssen in der englischen Bezeichnung angegeben sein
* Notwendige Feldnamen sind username, password, firstname, lastname, email
* Optionale Feldnamen sind course1, course2, ..., cohort1, cohort2, ...';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Vorschau Nutzer-Upload';
$string['uploadusersresult'] = 'Ergebnisse Nutzer-Upload';
$string['useraccountupdated'] = 'Nutzer/in aktualisiert';
$string['useraccountuptodate'] = 'Nutzer/in aktuell';
$string['userdeleted'] = 'Nutzer/in gelöscht';
$string['userrenamed'] = 'Nutzer/in umbenannt';
$string['userscreated'] = 'Nutzer/innen angelegt';
$string['usersdeleted'] = 'Nutzer/innen gelöscht';
$string['usersrenamed'] = 'Nutzer/innen umbenannt';
$string['usersskipped'] = 'Nutzer/innen übersprungen';
$string['usersupdated'] = 'Nutzer/innen aktualisiert';
$string['usersweakpassword'] = 'Nutzer/innen mit schwachem Kennwort';
$string['userthemesnotallowed'] = 'Nutzerdesigns sind nicht aktiviert, so dass alle in der Datei enthaltenen Designs ignoriert werden.';
$string['uubulk'] = 'Für Sammelaktion auswählen';
$string['uubulkall'] = 'Alle Nutzer/innen';
$string['uubulknew'] = 'Neue Nutzer/innen';
$string['uubulkupdated'] = 'Aktualisierte Nutzer/innen';
$string['uucsvline'] = 'CSV-Zeile';
$string['uulegacy1role'] = '(Original student) typeN=1';
$string['uulegacy2role'] = '(Original teacher) typeN=2';
$string['uulegacy3role'] = '(Original non-editing teacher) typeN=3';
$string['uunoemailduplicates'] = 'Doppelte E-Mail-Adressen verhindern';
$string['uuoptype'] = 'Upload Typ';
$string['uuoptype_addinc'] = 'Alle hinzufügen, bei Bedarf einen Zähler beim Anmeldenamen anhängen';
$string['uuoptype_addnew'] = 'Neue hinzufügen, vorhandene überspringen';
$string['uuoptype_addupdate'] = 'Neue hinzufügen, vorhandene aktualisieren';
$string['uuoptype_update'] = 'Nur vorhandene aktualisieren';
$string['uupasswordcron'] = 'Erstellt in Cron';
$string['uupasswordnew'] = 'Neues Kennwort';
$string['uupasswordold'] = 'Existierendes Kennwort';
$string['uustandardusernames'] = 'Anmeldenamen standardisieren';
$string['uuupdateall'] = 'Mit Datei- und Standardwerten überschreiben';
$string['uuupdatefromfile'] = 'Mit Dateiwerten überschreiben';
$string['uuupdatemissing'] = 'Fehlendes aus Datei- und Standardwerten übernehmen';
$string['uuupdatetype'] = 'Vorhandene Nutzerdetails';
$string['uuusernametemplate'] = 'Vorlage für Anmeldenamen';
$string['warningprefix'] = 'Warnung:';
