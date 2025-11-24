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
 * Strings for component 'block', language 'de', version '4.5'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Block {$a} hinzufügen';
$string['anypagematchingtheabove'] = 'Jede zur obigen passende Seite';
$string['appearsinsubcontexts'] = 'Erscheint in Subkontexten';
$string['assignrolesinblock'] = 'Rollen für \'{$a}\' zuweisen';
$string['blocksdrawertoggle'] = 'Blockleiste verbergen/anzeigen';
$string['blocksettings'] = 'Blockeinstellungen';
$string['bracketfirst'] = '{$a} (erstes)';
$string['bracketlast'] = '{$a} (letztes)';
$string['configureblock'] = '\'{$a}\' konfigurieren';
$string['contexts'] = 'Seitenkontext';
$string['contexts_help'] = 'Kontexte sind spezifische Typen von Seiten, auf denen der Block angezeigt werden kann. Sie können den Block z.B. auf allen Forenseiten eines Kurses anzeigen lassen. Fügen Sie dazu den Block im Kurs ein, so dass er auf allen Unterseiten erscheint. Wählen Sie anschließend in einem Kursforum als Blockeinstellung, dass die Anzeige auf Forenseiten beschränkt wird.';
$string['createdat'] = 'Normale Blockplatzierung';
$string['createdat_help'] = 'Der Ursprungsort, an dem der Block erstellt wurde. Die Blockeinstellungen erlauben, den Block an anderer Stelle anzeigen zu lassen, als am Ursprungsort. Ein Block, der auf der Kursseite angezeigt wird, kann auch in Aktivitäten des Kurses gezeigt werden. Ein Block, der auf der Startseite angezeigt wird, kann überall im System gezeigt werden.';
$string['defaultregion'] = 'Standardbereich';
$string['defaultregion_help'] = 'Im Design kann festgelegt sein, dass Blöcke in bestimmten Bereichen angezeigt werden. Diese Option legt fest, an welcher Stelle der Block erscheint. Der Bereich kann für Unterseiten überschrieben werden.';
$string['defaultweight'] = 'Standardgewichtung';
$string['defaultweight_help'] = 'Die Gewichtung legt fest, wo der Block üblicherweise in einem Bereich erscheint (z.B. als erster oder als letzter Block). Die Reihenfolge der Blöcke ergibt sich aus allen Gewichtungen in einem Bereich, wobei aber z.B. nur ein Block an erster Stelle stehen kann. Der Wert kann für Unterseiten überschrieben werden.';
$string['deleteblock'] = '\'{$a}\' löschen';
$string['deleteblockcheck'] = 'Hiermit wird der Block \'{$a}\' gelöscht.';
$string['deleteblockinprogress'] = 'Der Block {$a} wird gerade entfernt.';
$string['deleteblockwarning'] = '<p>Sie löschen einen Block, der an anderen Stellen angezeigt wird.</p><p>Originalblockpositionen: {$a->location}<br />Anzeige nach Seitentypen: {$a->pagetype}</p><p>Wollen Sie wirklich fortsetzen?</p>';
$string['deletecheck'] = '\'{$a}\' löschen?';
$string['deletecheck_modal'] = 'Block löschen?';
$string['hideblock'] = '\'{$a}\' verbergen';
$string['hidepanel'] = 'Steuerung verbergen';
$string['moveblock'] = '\'{$a}\' bewegen';
$string['moveblockafter'] = 'Block hinter Block {$a} bewegen';
$string['moveblockbefore'] = 'Block vor {$a}-Block bewegen';
$string['moveblockinregion'] = 'Block in den Bereich {$a} bewegen';
$string['movingthisblockcancel'] = 'Block bewegen ({$a})';
$string['myblocks'] = 'Meine Blöcke';
$string['onthispage'] = 'Blockplatzierung auf dieser Seite';
$string['pagetypes'] = 'Seitentypen';
$string['pagetypewarning'] = 'Der zuvor angegebene Seitentyp kann nicht mehr ausgewählt werden. Wählen Sie den Typ, der am besten passt.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Aufzeichnung, wann ein Nutzer einen Block in das Dock verschob';
$string['privacy:metadata:userpref:hiddenblock'] = 'Aufzeichnung, wann ein Nutzer einen Block auf-/zugeklappt hat';
$string['privacy:request:blockisdocked'] = 'Weist darauf hin, ob ein Block angedockt wurde';
$string['privacy:request:blockishidden'] = 'Weist darauf hin, ob ein Block auf-/zugeklappt ist';
$string['region'] = 'Bereich';
$string['restrictpagetypes'] = 'Auf diesen Seiten anzeigen';
$string['showblock'] = '\'{$a}\' anzeigen';
$string['showoncontextandsubs'] = 'Auf \'{$a}\' und Unterseiten anzeigen';
$string['showoncontextonly'] = 'Nur auf \'{$a}\' anzeigen';
$string['showonentiresite'] = 'Überall auf der Website anzeigen';
$string['showonfrontpageandsubs'] = 'Auf der Startseite und allen Unterseiten der Startseite anzeigen';
$string['showonfrontpageonly'] = 'Nur auf der Startseite anzeigen';
$string['subpages'] = 'Seiten auswählen';
$string['thisspecificpage'] = 'Spezielle Seite';
$string['visible'] = 'Sichtbar';
$string['weight'] = 'Gewichtung';
$string['wherethisblockappears'] = 'Blockplatzierung';
