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
 * Strings for component 'availability_grade', language 'sv', version '4.4'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Cachelagrade betygsobjekt för utvärdering av villkorad tillgänglighet';
$string['cachedef_scores'] = 'Användares cachelagrade betygsobjekt för utvärdering av villkorad tillgänglighet';
$string['description'] = 'Kräv att studenter uppnår ett viss betyg.';
$string['error_backwardrange'] = 'När du anger ett betygsintervall måste det lägsta värdet vara mindre än det högsta';
$string['error_invalidnumber'] = 'Betygsintervall måste anges med giltiga procentenheter';
$string['error_selectgradeid'] = 'Du måste välja ett betygsobjekt för betygsvillkoret.';
$string['label_max'] = 'Maximal betygsprocent (exklusiv)';
$string['label_min'] = 'Minsta betygsprocent (inklusiv)';
$string['missing'] = '(aktivitet saknas)';
$string['option_max'] = 'måste vara <';
$string['option_min'] = 'måste vara ≥';
$string['pluginname'] = 'Begränsning via betyg';
$string['privacy:metadata'] = 'Pluginmodulen Begränsning via betyg lagrar ingen personinformation.';
$string['requires_any'] = 'Du har betyg i <strong>{$a}</strong>';
$string['requires_max'] = 'Du uppnår lägre än en viss poäng i <strong>{$a}</strong>';
$string['requires_min'] = 'Du uppnår högre än en viss poäng i <strong>{$a}</strong>';
$string['requires_notany'] = 'Du saknar betyg i <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Du får inte vissa poäng i <strong>{$a}</strong>';
$string['requires_range'] = 'Du uppnår en poäng inom ett visst intervall i <strong>{$a}</strong>';
$string['title'] = 'Betyg';
