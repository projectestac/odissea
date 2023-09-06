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
 * Strings for component 'assignsubmission_mahara', language 'de', version '4.1'.
 *
 * @package     assignsubmission_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Mahara-Funktionen, die in Mahara-Portfolio-Aufgabenabgaben-Plugin verwendet werden.<br />Die Veröffentlichung dieses Dienstes auf einer Moodle-Seite hat keine Auswirkung. Abonnieren Sie diesen Dienst, wenn Sie Zuweisungen mit {$a} verwenden möchten.<br />';
$string['assign_submission_mahara_name'] = 'Aufgabenabgaben-Mahara-Dienste';
$string['collectionsby'] = 'Sammlungen von {$a}';
$string['defaultlockpages'] = 'Standard "{$a}"';
$string['defaultlockpages_help'] = 'Standardeinstellung, die für die Einstellung "{$a}" in neuen Mahara-Aufgaben verwendet wird.';
$string['defaulton'] = 'Standardmäßig aktiviert';
$string['defaulton_help'] = 'Wenn dies Option aktiviert ist, wird diese Abgabemethode standardmäßig für alle neuen Abgaben aktiviert.';
$string['defaultsite'] = 'Standard "{$a}"';
$string['defaultsite_help'] = 'Standardeinstellung, die für die Einstellung "{$a}" in neuen Mahara-Aufgaben verwendet wird.';
$string['emptysubmission'] = 'Sie haben keine Seite zur Einreichung ausgewählt.';
$string['enabled'] = 'Mahara Portfolio';
$string['enabled_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen Mahara-Seiten zur Bewertung in Moodle einreichen. Die Mahara-Seite muss bereits für die Mnet-Vernetzung mit dieser Moodle-Seite konfiguriert sein.';
$string['errorinvalidhost'] = 'Ungültige Host-ID gewählt';
$string['errorinvalidstatus'] = 'Entwickler-Fehler: Ungültiger Abgabestatus an  assign_submission_mahara::set_mahara_submission_status() gesendet';
$string['errormnetrequest'] = 'Der Versuch, eine Mnet-Anfrage zu senden, führte zu einem Fehler: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'Die ausgewählte Mahara-Seite oder -Sammlung konnte nicht übermittelt werden, bitte wählen Sie eine andere.';
$string['eventassessableuploaded'] = 'Eine Seite oder Sammlung wurde eingereicht.';
$string['lockpages'] = 'Eingereichte Seiten sperren';
$string['lockpages_help'] = 'Wenn "Ja, Seite sperren" ausgewählt ist, werden eingereichte Seiten und Sammlungen für die Bearbeitung in Mahara gesperrt und bleiben es auch nach der Bewertung. Bei "Ja, aber nach der Bewertung entsperren" wird die Sperre nach Erhalt der Bewertung aufgehoben.';
$string['mahara'] = 'Mahara Portfolio';
$string['nomaharahostsfound'] = 'Keine Mahara-Hosts gefunden';
$string['noneselected'] = 'Nichts ausgewählt';
$string['noviewscreated'] = 'Sie haben keine verfügbare Mahara-Seite oder Sammlung. Bitte <a target="_blank" href="{$a->jumpurl}">klicken Sie hier</a>, um "{$a->name}" zu besuchen und einen neue zu erstellen.';
$string['option_collections'] = 'Sammlungen';
$string['option_views'] = 'Seiten';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (Seiten ID: {$a->viewid})';
$string['outputforlognew'] = 'Neue {$a} Abgabe.';
$string['pluginname'] = 'Mahara Portfolio';
$string['previousattemptsnotvisible'] = 'Vorherige Versuche der Mahara-Einreichung sind nicht sichtbar';
$string['privacy:metadata:assignment'] = 'Die ID der Aufgabe';
$string['privacy:metadata:assignsubmission_mahara'] = 'Speichert Informationen über Mahara-Seiten oder -Sammlungen, die';
$string['privacy:metadata:iscollection'] = 'Ist diese Abgabe eine Seite oder Sammlung';
$string['privacy:metadata:submission'] = 'Die ID der Abgabe';
$string['privacy:metadata:viewid'] = 'Die ID der Mahara-Seite oder -Sammlung';
$string['privacy:metadata:viewstatus'] = 'Der Status der Mahara-Seite oder -Sammlung';
$string['privacy:metadata:viewtitle'] = 'Der Titel der Mahara-Seite oder -Sammlung';
$string['privacy:metadata:viewurl'] = 'Die URL der Mahara-Seite oder -Sammlung';
$string['privacy:path'] = 'Mahara-Seiten und -Sammlungen';
$string['selectmaharaview'] = 'Wählen Sie eine Ihrer Seiten oder Sammlungen aus der Liste, oder <a target="_blank" href="{$a->jumpurl}">klicken Sie hier</a> um "{$a->name}" zu besuchen und neue zu erstellen.';
$string['site'] = 'Mahara-Instanz';
$string['site_help'] = 'Hiermit stellen Sie die Mahara-Instanz ein, von der Seiten eingereicht werden sollen.';
$string['viewsby'] = 'Seiten von {$a}';
$string['yeskeeplocked'] = 'Ja, Seite sperren';
$string['yesunlock'] = 'Ja, aber nach der Bewertung entsperren';
