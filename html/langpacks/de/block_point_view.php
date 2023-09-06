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
 * Strings for component 'block_point_view', language 'de', version '4.1'.
 *
 * @package     block_point_view
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpix'] = 'Standardeinstellung';
$string['blacktrack'] = 'Schwarzer Schwierigkeitsgrad';
$string['blockdisabled'] = '<h3 class="text-danger">Der Block ist deaktiviert</h3>';
$string['bluetrack'] = 'Blauer Schwierigkeitsgrad';
$string['contentinputlabel'] = 'Blockinhalt';
$string['contentinputlabel_help'] = 'Hier kann der Text im Block angepasst werden. Ist das Feld leer, ist der Block für Teilnehmer/innen nicht sichtbar.';
$string['customemoji'] = 'Nutzerdefiniertes Emoji';
$string['customemoji_help'] = 'Nutzerdefinierte Emojis für die Reaktionen können hier eingefügt werden. <h5 class="text-danger">Wichtig:</h5>Benennen sie die Dateien für die Bilder der Emoji <b><code>[emoji_name].png</code></b> wie folgend: <code>easy.png</code>, <code>better.png</code> und <code>hard.png</code>. Es werden ausserdem Emojis <b><code>group_[emojis_initials].png</code></b> für die Anzeige der bereits abgegeben Reaktionen benötigt. Zum Beispiel: <code>group_EB.png</code>. Vergessen sie nicht ein Emoji <b><code>group_.png</code></b> für Nicht-Gewählt hochzuladen. Die empfohlene Grösse für die Bilder der Emojis für die Reaktion ist 200x200 und 400x200 für die Emojis der bereits abgegebenen Reaktionen.<br/><br/> 11 notwendige Dateien: <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code>, <code>group_.png</code>, <code>group_E.png</code>, <code>group_B.png</code>, <code>group_H.png</code>, <code>group_EB.png</code>, <code>group_EH.png</code>, <code>group_BH.png</code> and <code>group_EBH.png</code>';
$string['custompix'] = 'Nutzerdefiniert:';
$string['defaultpix'] = 'Voreinstellung:';
$string['defaulttextbetter'] = 'Es wird besser!';
$string['defaulttextcontent'] = 'Dieses Plugin ermöglicht es Reaktionen und Schwierigkeitsgrade für Aktivitäten einzufügen.<br/><br/>Dieses Plugin wurde entwickelt von <a href="mailto:q.fombaron@outlook.fr?subject=%22Point%20of%20view%22%20Moodle%20plugin%20-%20Feedback">Quentin Fombaron</a>.<br /><br />Sie können diesen Text im Einstellungsmenü des Blockes bearbeiten oder löschen.<br /><br />';
$string['defaulttexteasy'] = 'Einfach!';
$string['defaulttexthard'] = 'Echt schwierig...';
$string['delete_custom_pix'] = 'Nutzerdefinierte Emoji löschen';
$string['deleteemojiconfirmation'] = 'Möchten Sie wirklich die nutzerdefinierte Emoji für diesen Block löschen?
Damit werden die gespeicherten Emoji und Dateien unten gelöscht. Diese Aktion kann nicht rückgängig gemacht werden.';
$string['disable_type'] = 'Alle <b>{$a}</b> deaktivieren';
$string['disableall'] = 'Alle in <b>{$a}</b> deaktivieren';
$string['emojidesc'] = 'Emoji Bezeichnung';
$string['emojidesc_help'] = 'Individueller Text, der oberhalb der Emoji angezeigt wird';
$string['emojitouse'] = 'Ausgewählte Emoji';
$string['emojitouse_help'] = 'Wählen Sie die Emoji, welche im Kurs für Reaktionen angezeigt werden <br>  Sie können eigene Emoji hinzufügen, wählen sie dazu "Benutzerdefinierte Emoji".';
$string['enable_disable_section'] = 'Alle in diesem Abschnitt aktivieren/deaktivieren';
$string['enable_disable_section_help'] = 'Reaktionen für alle Aktivitäten in diesem Themenabschnitt aktivieren oder deaktivieren.';
$string['enable_disable_type'] = 'Alle von diesem Typ aktivieren/deaktivieren';
$string['enable_disable_type_help'] = 'Aktivieren oder deaktivieren Sie die Emoji für alle Aktivitäten von diesem Typ im Kurs.';
$string['enable_type'] = 'Alle <b>{$a}</b> aktivieren';
$string['enableall'] = 'Alle in <b>{$a}</b> aktivieren';
$string['enablecustompix'] = 'Nutzerdefinierte Emoji für die Reaktionen nutzen';
$string['enabledifficulties'] = '<b>Schwierigkeitsgrade</b> aktivieren';
$string['enableforfuturemodules'] = 'Aktivieren für neue Aktivitäten';
$string['enableforfuturemodules_help'] = 'Bei neuen Aktivitäten werden die Emoji automatisch aktiviert';
$string['enablepoint_views'] = '<b>Reaktionen</b> aktivieren';
$string['errorfilemanager'] = '<b>Fehler</b>: Der Name von <b>{$a}.png</b> entspricht nicht den Vorgaben.';
$string['errorfilemanagerempty'] = 'Laden Sie bitte mindestens eine Datei hoch.';
$string['greentrack'] = 'Grüner Schwierigkeitsgrad';
$string['header_activities'] = 'Einstellungen für Reaktionen und Schwierigkeitsgrade';
$string['header_images'] = 'Einstellungen Emojis';
$string['module'] = 'Themenabschnitte';
$string['noactivity'] = 'Keine Aktivitäten';
$string['nonetrack'] = 'Kein Schwierigkeitsgrad';
$string['pluginname'] = 'Point of view';
$string['point_view:access_overview'] = 'Details anzeigen';
$string['point_view:addinstance'] = 'Neuen "Point of View"-Block hinzufügen';
$string['point_view:myaddinstance'] = 'Neuen "Point of View"-Block im Dashboard hinzufügen';
$string['privacy:metadata:activity_votes_database:cmid'] = 'Aktivitäts-ID';
$string['privacy:metadata:activity_votes_database:courseid'] = 'Kurs-ID';
$string['privacy:metadata:activity_votes_database:userid'] = 'Nutzer-ID';
$string['privacy:metadata:activity_votes_database:vote'] = 'Wahl: 1 (Einfach!), 2 (Es wird besser!), 3 (Echt schwierig...)';
$string['privacy:metadata:block_point_view'] = 'Der "Point of View"-Block speichert die Antworten der Teilnehmer/innen für jede einzelne Aktivität.';
$string['reactions'] = 'Reaktionen';
$string['reactionsdetails'] = 'Details Reaktionen';
$string['reactionsresetsuccessfully'] = 'Die Reaktionen wurden erfolgreich zurückgesetzt.';
$string['reactionsunavailable'] = 'Sie können keine Reaktionen in diesem Themenabschnitt hinzufügen oder entfernen.';
$string['redtrack'] = 'Roter Schwierigskeitsgrad';
$string['resetcoursereactions'] = 'Reaktionen im Kurs <b>{$a}</b> zurücksetzen';
$string['resetreactions'] = 'Reaktionen zurücksetzen';
$string['resetreactions_help'] = 'Alle Reaktionen der Teilnehmer/innen im Kurs zurücksetzen (löschen).';
$string['resetreactionsconfirmation'] = 'Möchten Sie wirklich alle Reaktionen im Kurs <b>{$a}</b> zurücksetzen (löschen)? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['showotherreactions'] = 'Die Reaktionen von anderen Teilnehmer/innen anzeigen';
$string['showotherreactions_help'] = 'Erlauben, dass Teilnehmer/innen die Anzahl an abgegebenen Reaktionen sehen können.';
$string['totalreactions'] = 'Summe an Reaktionen: {$a}';
