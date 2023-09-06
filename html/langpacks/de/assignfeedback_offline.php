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
 * Strings for component 'assignfeedback_offline', language 'de', version '4.1'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Bewertungsimport bestätigen';
$string['default'] = 'Bereits aktiviert';
$string['default_help'] = 'Diese Option legt fest, ob die Offline-Bewertung in allen neuen Aufgaben aktiviert wird.';
$string['downloadgrades'] = 'Bewertungstabelle herunterladen';
$string['enabled'] = 'Offline-Bewertungstabelle';
$string['enabled_help'] = 'Wenn diese Option aktiviert wird, können Trainer/innen eine Bewertungstabelle herunterladen, alle Bewertungen für die Teilnehmer/innen offline ausfüllen und später die Bewertungstabelle wieder hochladen.';
$string['feedbackupdate'] = 'Feld \'{$a->field}\' für \'{$a->student}\' auf \'{$a->text}\' setzen';
$string['gradelockedingradebook'] = 'Die Bewertungen wurden gesperrt für {$a}';
$string['graderecentlymodified'] = 'Die Bewertung wurde von der Bewertungstabelle abweichend nachträglich geändert für {$a}';
$string['gradesfile'] = 'Bewertungstabelle (im Format .csv)';
$string['gradesfile_help'] = 'Bewertungstabelle mit geänderten Bewertungen.
Diese Datei muss eine speziell zu dieser Aufgabe heruntergeladene Datei sein, die Spalten zu Bewertung und alle Kennungen enthält. Die Datei muss im Format .csv und der Codierung utf-8 abgespeichert sein.';
$string['gradeupdate'] = 'Bewertung für \'{$a->student}\' auf {$a->grade} setzen';
$string['ignoremodified'] = 'Update von Datensätzen zulassen, die seit dem letzten Upload angepasst wurden.';
$string['ignoremodified_help'] = 'Wenn der Bewertungsbogen heruntergeladen wird, enthält er den letzten Stand der Bewertungen aus Moodle. Danach können in Moodle direkt Bewertungen vorgenommen worden sein.  Wenn nun derBewertungsbogen mit Bewertungen wieder hochgeladen wird, sind  die in der Zwischenzeit in Moodle vorgenommenen Bewetrungen normalerweise  gegen Veränderungen durch Upload gesperrt. Durch diese Funktion können Sie ein Überschreiben durch die Daten im Bewertungsbogen zulassen.';
$string['importgrades'] = 'Änderungen in der Bewertungstabelle bestätigen';
$string['invalidgradeimport'] = 'Die hochgeladene Bewertungstabelle konnte nicht gelesen werden. Stellen Sie sicher, dass die Tabelle im Format .csv gespeichert ist und versuchen Sie es noch einmal.';
$string['nochanges'] = 'Keine Änderungen in der hochgeladenen Bewertungstabelle gefunden';
$string['offlinegradingworksheet'] = 'Bewertungen';
$string['pluginname'] = 'Offline-Bewertungstabelle';
$string['privacy:nullproviderreason'] = 'Dieses Plugin verfügt über keine Datenbank zur Speicherung von Nutzerdaten. Es ist eine API in mood_assign zur Unterstützung bei der Bewertungsanzeige';
$string['processgrades'] = 'Bewertungen importieren';
$string['skiprecord'] = 'Datensatz überspringen';
$string['updatedgrades'] = '<strong>{$a->gradeupdatescount}</strong> Bewertungen und <strong>{$a->feedbackupdatescount}</strong> Feedbacks aktualisiert.';
$string['updaterecord'] = 'Datensatz aktualisieren';
$string['uploadgrades'] = 'Bewertungstabelle hochladen';
