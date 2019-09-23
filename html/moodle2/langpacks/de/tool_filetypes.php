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
 * Strings for component 'tool_filetypes', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Dateityp hinzufügen';
$string['corestring'] = 'Alternativer Text';
$string['corestring_help'] = 'Diese Option kann verwendet werden, um einen von den Einträgen in mimetypes.php abweichenden Text festzulegen.  Standardmäßig sollte die Option leer bleiben. Für benutzerdefinierte Typen verwenden Sie das Feld \'Beschreibung\'.';
$string['defaulticon'] = 'Standardmäßiges Icon für MIME-Typ';
$string['defaulticon_help'] = 'Falls es mehrere Dateiendungen für den gleichen MIME-Type gibt, wählen Sie in dieser Option aus, welches Icon für diesen MIME-Typ verwendet werden soll.';
$string['deletea'] = 'Löschen {$a}';
$string['delete_confirmation'] = 'Möchten Sie wirklich \'.{$a}\' löschen?';
$string['deletefiletypes'] = 'Dateityp löschen';
$string['description'] = 'Angepasste Beschreibung';
$string['description_help'] = 'Einfache Beschreibung für den Dateityp, z.B. \'Kindle ebook\'. Falls Ihre Website mehrere Sprachen unterstützt und der Multilanguage-Filter aktiviert ist, können Sie mit Multilanguage-Tags die Beschreibung auch in verschiedenen Sprachen anbieten.';
$string['descriptiontype'] = 'Beschreibungstyp';
$string['descriptiontype_custom'] = 'Angepasste Beschreibung, wie in diesem Formular angegeben';
$string['descriptiontype_default'] = 'Standard (MIME-Type oder Texteintrag, falls vorhanden)';
$string['descriptiontype_help'] = 'Es gibt drei Möglichkeiten, um eine Beschreibung anzugeben.

* Standardmäßig wird der MIME-Typ verwendet. Wenn es einen Texteintrag in mimetypes.php für diesen MIME-Typ gibt, wird der Name angezeigt, andernfalls der MIME-Typ.
* Sie können eine angepasste Beschreibung in diesem Formular angeben.
* Sie können den Namen des Texteintrags aus mimetypes.php angeben, um ihn statt des MIME-Typs zu verwenden.';
$string['descriptiontype_lang'] = 'Alternativer Texteintrag (in mimetypes.php)';
$string['displaydescription'] = 'Beschreibung';
$string['editfiletypes'] = 'Vorhandenen Dateityp bearbeiten';
$string['emptylist'] = 'Keine Dateitypen festgelegt';
$string['error_addentry'] = 'Dateiendung, Beschreibung, MIME-Type und Icon dürfen keinen Zeilenumbruch oder Semikolon enthalten.';
$string['error_defaulticon'] = 'Eine andere Dateiendung mit dem gleichen MIME-Type ist bereits als Standard gekennzeichnet.';
$string['error_extension'] = 'Die Dateiendung \'{$a}\' existiert bereits oder ist ungültig. Dateiendungen müssen eindeutig sein und dürfen keine Sonderzeichen enthalten.';
$string['error_notfound'] = 'Der Dateityp mit der Endung \'{$a}\' kann nicht gefunden werden.';
$string['extension'] = 'Dateiendung';
$string['extension_help'] = 'Die Dateiendung wird ohne Punkt angegeben, z.B. \'mobi\'.';
$string['groups'] = 'Typgruppen';
$string['groups_help'] = 'Optionale Liste von Typgruppen, zu denen dieser Dateityp gehört. Dies sind allgemeine Kategorien wie z.B. \'document\' oder \'image\'.';
$string['icon'] = 'Dateisymbol';
$string['icon_help'] = 'Icon-Dateiname

Die Liste der Icons wird aus dem Verzeichnis /pix/f genommen. Sie können weitere Icons in diesem Verzeichnis hinzufügen, falls dies notwendig ist.';
$string['mimetype'] = 'MIME-Typ';
$string['mimetype_help'] = 'MIME-Type, der diesem Dateityp zugeordnet ist, z.B. \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Dateitypen';
$string['privacy:metadata'] = 'Das Plugin \'Dateitypen\' speichert keine personenbezogenen Daten.';
$string['revert'] = '{$a} auf Standard zurücksetzen';
$string['revert_confirmation'] = 'Möchten Sie wirklich \'.{$a}\' auf den Standard zurücksetzen und die Änderungen verwerfen?';
$string['revertfiletype'] = 'Dateityp wiederherstellen';
$string['source'] = 'Typ';
$string['source_custom'] = 'Angepasst';
$string['source_deleted'] = 'Gelöscht';
$string['source_modified'] = 'Geändert';
$string['source_standard'] = 'Standard';
