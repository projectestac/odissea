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
 * Strings for component 'tool_uploadcourse', language 'de', version '3.11'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Löschung erlauben';
$string['allowdeletes_help'] = 'Soll das Löschen-Feld akzeptiert werden oder nicht';
$string['allowrenames'] = 'Umbenennung erlauben';
$string['allowrenames_help'] = 'Soll das Umbenennen-Feld akzeptiert werden oder nicht';
$string['allowresets'] = 'Zurücksetzen erlauben';
$string['allowresets_help'] = 'Soll das Zurücksetzen-Feld akzeptiert werden oder nicht';
$string['cachedef_helper'] = 'Hilfscache';
$string['cannotdeletecoursenotexist'] = 'Nicht vorhandener Kurs kann nicht gelöscht werden.';
$string['cannotforcelang'] = 'Keine Berechtigung zur Festlegung der Kurssprache';
$string['cannotgenerateshortnameupdatemode'] = 'Eine Kurzbezeichnung konnte nicht erstellt werden als Updates zugelassen waren.';
$string['cannotreadbackupfile'] = 'Sicherungsdatei kann nicht gelesen werden.';
$string['cannotrenamecoursenotexist'] = 'Nicht vorhandener Kurs kann nicht umbenannt werden.';
$string['cannotrenameidnumberconflict'] = 'Der Kurs konnte nicht umbenannt werden. Es gibt ID-Nummern-Konflikte mit einem bestehendem Kurs.';
$string['cannotrenameshortnamealreadyinuse'] = 'Der Kurs konnte nicht umbenannt werden. Der Kurzname wird bereits genutzt.';
$string['cannotupdatefrontpage'] = 'Es ist nicht zugelassen, die Startseite zu ändern.';
$string['canonlyrenameinupdatemode'] = 'Der Kurs kann nur aktualisiert werden wenn Updates zugelassen sind.';
$string['canonlyresetcourseinupdatemode'] = 'Im Update-Modus kann der Kurs nicht zurückgesetzt werden.';
$string['couldnotresolvecatgorybyid'] = 'Die Kategorie kann anhand der ID nicht aufgelöst werden.';
$string['couldnotresolvecatgorybyidnumber'] = 'Die Kategorie kann anhand der ID-Nummer nicht aufgelöst werden.';
$string['couldnotresolvecatgorybypath'] = 'Die Kategorie kann anhand des Pfades nicht aufgelöst werden.';
$string['coursecreated'] = 'Kurs angelegt';
$string['coursedeleted'] = 'Kurs gelöscht';
$string['coursedeletionnotallowed'] = 'Löschen von Kursen ist nicht erlaubt';
$string['coursedoesnotexistandcreatenotallowed'] = 'Der Kurs ist nicht vorhanden und das Anlegen eines Kurses ist nicht erlaubt';
$string['courseexistsanduploadnotallowed'] = 'Der Kurs existiert und eine Aktualisierung ist nicht erlaubt';
$string['coursefile'] = 'Datei';
$string['coursefile_help'] = 'Die Datei muss eine csv-Datei sein';
$string['courseidnumberincremented'] = 'Kurs-ID hochgezählt: {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Kurs-Prozess';
$string['courserenamed'] = 'Kurs umbenannt';
$string['courserenamingnotallowed'] = 'Umbenennen von Kursen ist nicht erlaubt';
$string['coursereset'] = 'Kurs zurückgesetzt';
$string['courseresetnotallowed'] = 'Zurücksetzen von Kursen ist jetzt erlaubt';
$string['courserestored'] = 'Kurs wiederhergestellt';
$string['coursescreated'] = 'Kurse angelegt: {$a}';
$string['coursesdeleted'] = 'Kurse gelöscht: {$a}';
$string['courseserrors'] = 'Kurse fehlerhaft: {$a}';
$string['courseshortnamegenerated'] = 'Kursname erzeugt: {$a}';
$string['courseshortnameincremented'] = 'Kursname hochgezählt: {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Kurse insgesamt: {$a}';
$string['coursesupdated'] = 'Kurse aktualisiert: {$a}';
$string['coursetemplatename'] = 'Wiederherstellen dieses Kurses nach dem Upload';
$string['coursetemplatename_help'] = 'Geben Sie die Kurzbezeichnung eines bestehenden Kurses ein als Vorlage zur Erstellung aller Kurse.';
$string['coursetorestorefromdoesnotexist'] = 'Der zur Wiederherstellung angegebene Kurs existiert nicht.';
$string['courseupdated'] = 'Kurs aktualisiert';
$string['createall'] = 'Alle Kurse anlegen, Kurznamen bei Bedarf inkrementieren';
$string['createnew'] = 'Neue Kurse anlegen und vorhandene überspringen';
$string['createorupdate'] = 'Neue Kurse anlegen oder vorhandene aktualisieren';
$string['csvdelimiter'] = 'CSV-Trennzeichen';
$string['csvdelimiter_help'] = 'Trennzeichen, das die Datenfelder in einem Datensatz von einander abgrenzt.';
$string['csvfileerror'] = 'Fehler in der CSV-Datei. Überprüfen Sie bitte, ob die Anzahl der Überschriften und Spalten übereinstimmt und ob das Trennzeichen und die Dateikodierung korrekt sind. {$a}';
$string['csvline'] = 'Zeile';
$string['customfieldinvalid'] = 'Das benutzerdefinierte Feld \'{$a}\' ist leer oder enthält ungültige Daten';
$string['defaultvalues'] = 'Standardwerte für Kurseinstellungen';
$string['defaultvaluescustomfieldcategory'] = 'Standardmäßiger Wert für \'{$a}\'';
$string['downloadcontentnotallowed'] = 'Das Herunterladen von Kursinhalten kann nicht konfiguriert werden.';
$string['encoding'] = 'Kodierung';
$string['encoding_help'] = 'Zeichensatz (Encoding) der csv-Datei';
$string['errorcannotcreateorupdateenrolment'] = 'Die Einschreibemethode \'{$a}\' kann nicht angelegt oder aktualisiert werden.';
$string['errorcannotdeleteenrolment'] = 'Die Einschreibemethode \'{$a}\' kann nicht gelöscht werden.';
$string['errorcannotdisableenrolment'] = 'Die Einschreibemethode \'{$a}\' kann nicht deaktiviert werden-';
$string['errorwhiledeletingcourse'] = 'Fehler beim Löschen des Kurses';
$string['errorwhilerestoringcourse'] = 'Fehler beim Wiederherstellen des Kurses';
$string['generatedshortnamealreadyinuse'] = 'Der erzeugte Kursname existiert bereits';
$string['generatedshortnameinvalid'] = 'Der erzeugte Kursname ist ungültig';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'ID-Nummer existiert bereits';
$string['importoptions'] = 'Importoptionen';
$string['invalidbackupfile'] = 'Ungültige Sicherungsdatei';
$string['invalidcourseformat'] = 'Ungültiges Kursformat';
$string['invalidcsvfile'] = 'Ungültige CSV-Datei';
$string['invaliddownloadcontent'] = 'Ungültiges Herunterladen von Kursinhalten';
$string['invalidencoding'] = 'Ungültige Kodierung';
$string['invalideupdatemode'] = 'Ungültige Aktualisierung ausgewählt';
$string['invalidfullnametoolong'] = 'Das Feld \'Vollständiger Name\' ist auf {$a} Zeichen beschränkt.';
$string['invalidmode'] = 'Ungültiger Modus ausgewählt';
$string['invalidroles'] = 'Ungültige Rollennamen: {$a}';
$string['invalidshortname'] = 'Ungültiger Kursname';
$string['invalidshortnametoolong'] = 'Das Feld \'Kurzname\' ist auf {$a} Zeichen beschränkt.';
$string['invalidvisibilitymode'] = 'Ungültiger Modus für die Sichtbarkeit';
$string['missingmandatoryfields'] = 'Fehlender Wert für Pflichtfelder: {$a}';
$string['missingshortnamenotemplate'] = 'Fehlender Kursname oder nicht gesetzte Vorlage';
$string['mode'] = 'Modus beim Hochladen';
$string['mode_help'] = 'Hiermit legen Sie fest, ob Kurse erstellt und/oder aktualisiert werden';
$string['nochanges'] = 'Keine Änderung';
$string['pluginname'] = 'Kursliste hochladen';
$string['preview'] = 'Vorschau';
$string['privacy:metadata'] = 'Das Plugin \'Kurs-Upload\' speichert keine personenbezogenen Daten.';
$string['reset'] = 'Kurs nach dem Hochladen zurücksetzen';
$string['reset_help'] = 'Sollen Kurse nach dem Erstellen/Update zurückgesetzt werden?';
$string['restoreafterimport'] = 'Nach dem Import zurücksetzen';
$string['result'] = 'Ergebnis';
$string['rowpreviewnum'] = 'Vorschauzeilen';
$string['rowpreviewnum_help'] = 'Anzahl der Zeilen aus der CSV-Datei, die auf der folgenden Seite als Vorschau angezeigt werden. Diese Option dient zur Größenbegrenzung der Seite.';
$string['shortnametemplate'] = 'Vorlage zum Erzeugen eines Kursnamens';
$string['shortnametemplate_help'] = 'Die Kurzbezeichunung des Kurses wird in der Navigation verwandt. Sie können als Template-Syntax folgenden Eintrag verwenden: %f = fullname, %i = idnumber. Oder geben Sie einen Startwert an, der heraufgezählt wird.';
$string['templatefile'] = 'Aus dieser Datei nach dem Upload wiederherstellen';
$string['templatefile_help'] = 'Wählen Sie eine Datei als Vorlage zum Wiederherstellen aller Kurse.';
$string['unknownimportmode'] = 'Unbekannter Importmodus';
$string['updatemissing'] = 'Fehlende Angaben aus CSV-Daten und Standardwerten ergänzen';
$string['updatemode'] = 'Aktualisierungsmodus';
$string['updatemode_help'] = 'Wenn Sie zulassen, dass Kurse aktualisiert/upgedatet werden, müssen Sie festlegen, womit diese aktualisiert werden sollen.';
$string['updatemodedoessettonothing'] = 'Der Aktualisierungsmodus erlaubt nicht, dass etwas geändert wird';
$string['updateonly'] = 'Nur vorhandene Kurse aktualisieren';
$string['updatewithdataonly'] = 'Nur mit CSV-Daten aktualisieren';
$string['updatewithdataordefaults'] = 'Mit CSV-Daten und Standardwerten aktualisieren';
$string['uploadcourses'] = 'Kursliste hochladen';
$string['uploadcourses_help'] = 'Kurse können als Textdatei angelegt werden. Die Textdatei sollte folgendes Format haben:

* Jede Zeile enthält genau einen Datensatz
* Jeder Datensatz enthält eine Serie von Daten, getrennt durch das gewählte Trennzeichen
* Die erste Zeile enthält eine Liste der Feldnamen und definiert die Struktur der übrigen Datensätze
* Die Feldnamen müssen in der englischen Bezeichnung angegeben sein
* Notwendige Feldnamen sind: shortname, fullname, summary und category';
$string['uploadcoursespreview'] = 'Vorschau';
$string['uploadcoursesresult'] = 'Ergebnis';
