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
 * Strings for component 'contentbank', language 'de', version '3.11'.
 *
 * @package     contentbank
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['author'] = 'Autor/in';
$string['close'] = 'Schließen';
$string['contentbank'] = 'Inhaltsspeicher';
$string['contentbankpreferences'] = 'Einstellungen zum Inhaltsspeicher';
$string['contentdeleted'] = 'Der Inhalt wurde gelöscht.';
$string['contentname'] = 'Dateiname';
$string['contentnotdeleted'] = 'Beim Versuch, den Inhalt zu löschen, ist ein Fehler aufgetreten.';
$string['contentnotrenamed'] = 'Beim Versuch, den Inhalt umzubenennen, ist ein Fehler aufgetreten.';
$string['contentrenamed'] = 'Der Inhalt wurde umbenannt.';
$string['contentsmoved'] = 'Der Inhalt der Inhaltspeichers wurde nach {$a} verschoben.';
$string['contenttypenoaccess'] = 'Sie können diese {$a}-Instanz nicht anzeigen.';
$string['contenttypenoedit'] = 'Sie können diesen Inhalt nicht bearbeiten.';
$string['contentvisibilitychanged'] = 'Der Inhalt wurde \'{$a}\' gesetzt.';
$string['contentvisibilitynotset'] = 'Ein Fehler ist aufgetreten, während eine Änderung der Inhaltssichtbarkeit versucht wurde.';
$string['contextnotallowed'] = 'Sie konnen in diesem Kontext nicht auf den Inhaltsspeicher zugreifen.';
$string['deletecontent'] = 'Inhalt löschen';
$string['deletecontentconfirm'] = 'Möchten Sie den Inhalt <em>\'{$a->name}\'</em> und alle zugehörigen Dateien wirklich löschen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['deletecontentconfirmlinked'] = 'Der Inhalt wird nur aus dem Inhaltsspeicher gelöscht. Alle Orte, die derzeit darauf verlinken, werden automatisch aktualisiert, um stattdessen eine Kopie des Inhalts zu verwenden.';
$string['displaydetails'] = 'Inhaltsspeicher mit Dateidetails anzeigen';
$string['displayicons'] = 'Inhaltsspeicher mit Symbolen anzeigen';
$string['emptynamenotallowed'] = 'Der Name darf nicht leer sein.';
$string['errordeletingcontentfromcategory'] = 'Fehler beim Löschen von Inhalt aus der Kategorie {$a}.';
$string['errornofile'] = 'Zum Erstellen von Inhalten wird eine kompatible Datei benötigt.';
$string['eventcontentcreated'] = 'Inhalt angelegt';
$string['eventcontentdeleted'] = 'Inhalt gelöscht';
$string['eventcontentreplaced'] = 'Inhalt durch Datei ersetzt';
$string['eventcontentupdated'] = 'Inhalt aktualisiert';
$string['eventcontentuploaded'] = 'Inhalt hochgeladen';
$string['eventcontentviewed'] = 'Inhalt angezeigt';
$string['file'] = 'Inhalt hochladen';
$string['file_help'] = 'Dateien können zur Verwendung in Kursen im Inhaltsspeicher gespeichert werden. Es dürfen nur Dateien hochgeladen werden, deren Inhaltstypen auf der Website aktiviert sind.';
$string['itemsfound'] = '{$a} Elemente gefunden';
$string['lastmodified'] = 'Zuletzt geändert';
$string['name'] = 'Inhalt';
$string['nocontentavailable'] = 'Kein Inhalt verfügbar';
$string['nocontenttypes'] = 'Keine Inhaltstypen verfügbar';
$string['nopermissiontodelete'] = 'Sie haben keine Berechtigung zum Löschen von Inhalten.';
$string['nopermissiontomanage'] = 'Sie haben nicht das Recht, Inhalte zu verwalten';
$string['notavailable'] = 'Dieser Inhalt ist nicht verfügbar.';
$string['notvalidpackage'] = 'Diese Datei ist nicht gültig.';
$string['privacy:metadata:content:contenttype'] = 'Das Inhaltstyp-Plugin für Inhalte im Inhaltsspeicher.';
$string['privacy:metadata:content:name'] = 'Name des Inhalts im Inhaltsspeicher';
$string['privacy:metadata:content:timecreated'] = 'Zeit, zu der der Inhalt angelegt wurde';
$string['privacy:metadata:content:timemodified'] = 'Zeit, zu der der Inhalt geändert wurde';
$string['privacy:metadata:content:usercreated'] = 'Person, die den Inhalt angelegt hat';
$string['privacy:metadata:content:usermodified'] = 'Person, die als letzte den Inhalt geändert hat';
$string['privacy:metadata:contentbankcontent'] = 'Speichert den Inhalt des Inhaltsspeichers.';
$string['privacy:metadata:userid'] = 'ID der Person, die Inhalt im Inhaltsspeicher angelegt oder geändert hat';
$string['privacy:request:preference:set'] = 'Der Wert der Einstellung \'{$a->name}\' war \'{$a->value}\'';
$string['public'] = 'öffentlich';
$string['rename'] = 'Umbenennen';
$string['renamecontent'] = 'Inhalt umbenennen';
$string['replacecontent'] = 'Durch Datei ersetzen';
$string['searchcontentbankbyname'] = 'Inhalte nach Namen suchen';
$string['size'] = 'Größe';
$string['timecreated'] = 'Erstellungsdatum';
$string['type'] = 'Art';
$string['unlisted'] = 'verborgen';
$string['unsupported'] = 'Dieser Inhaltstyp wird nicht unterstützt.';
$string['upload'] = 'Hochladen';
$string['uses'] = 'Orte verlinkt';
$string['visibilitychoicepublic'] = 'Öffentlich';
$string['visibilitychoiceunlisted'] = 'Verborgen';
$string['visibilitypref'] = 'Standardmäßige Inhaltssichtbarkeit';
$string['visibilitypref_help'] = 'Inhalte, die Sie im Inhaltsspeicher erstellen, wird standardmäßig diese Inhaltssichtbarkeit verwenden.';
$string['visibilitysetpublic'] = 'Öffentlich machen';
$string['visibilitysetunlisted'] = 'Verbergen';
$string['visibilitytitleunlisted'] = '{$a} (Verborgen)';
