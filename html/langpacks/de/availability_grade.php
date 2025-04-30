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
 * Strings for component 'availability_grade', language 'de', version '4.4'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Bewertungselement, das zur Zugriffsprüfung verwendet wird';
$string['cachedef_scores'] = 'Nutzerbewertung, die zur Zugriffsprüfung verwendet wird';
$string['description'] = 'Zugriff über die erreichte Bewertung steuern';
$string['error_backwardrange'] = 'Wenn ein Bewertungsbereich angegeben wird, muss der Mindestwert niedriger sein als der Höchstwert.';
$string['error_invalidnumber'] = 'Der Bewertungsbereich darf sich nur innerhalb des zulässigen Wertebereichs bewegen.';
$string['error_selectgradeid'] = 'Sie müssen eine Bewertung auswählen.';
$string['label_max'] = 'Höchstbewertung in Prozent (exklusive)';
$string['label_min'] = 'Mindestbewertung in Prozent (inklusive)';
$string['missing'] = '(Fehlende Aktivität)';
$string['option_max'] = 'muss < sein';
$string['option_min'] = 'muss ≥ sein';
$string['pluginname'] = 'Voraussetzung: Bewertung';
$string['privacy:metadata'] = 'Das Plugin \'Voraussetzung: Bewertung\' speichert keine personenbezogenen Daten.';
$string['requires_any'] = 'Sie haben eine Bewertung in <strong>{$a}</strong>';
$string['requires_max'] = 'Sie haben weniger als die erforderliche Punktzahl in <strong>{$a}</strong> erhalten.';
$string['requires_min'] = 'Sie haben mehr als die erforderliche Punktzahl in <strong>{$a}</strong> erhalten,';
$string['requires_notany'] = 'Sie haben keine Bewertung in <strong>{$a}</strong> erhalten.';
$string['requires_notgeneral'] = 'Sie haben keine Punktzahl in <strong>{$a}</strong> erhalten.';
$string['requires_range'] = 'Sie haben Punkte im erforderlichen Bereich in <strong>{$a}</strong> erhalten.';
$string['title'] = 'Bewertung';
