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
 * Strings for component 'qbehaviour_adaptive', language 'sv', version '4.1'.
 *
 * @package     qbehaviour_adaptive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = 'Inlämningen var ogiltig och har åsidosatts utan påföljd.';
$string['gradingdetails'] = 'Betyg för den här inlämningen:  {$a->raw}/{$a->max}.';
$string['gradingdetailsadjustment'] = 'Räknar med tidigare försök, vilket ger <strong>{$a->cur}/{$a->max}.</strong>';
$string['gradingdetailspenalty'] = 'Det här inlämnade testet innehåller ett poängavdrag på {$a}.';
$string['gradingdetailspenaltytotal'] = 'Totalt straff hittills: $a}.';
$string['gradingdetailswithadjustment'] = 'Betyg för den här inlämningen: {$a->raw}/{$a->max}. Medräkning av tidigare försök, ger <strong>{$a->cur}/{$a->max}.</strong>';
$string['gradingdetailswithadjustmentpenalty'] = 'Betyg för den här inlämningen: {$a->raw}/{$a->max}. Medräkning av tidigare försök, ger <strong>{$a->cur}/{$a->max}.</strong> Denna inlämning gav ett straff på {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Betyg för den här inlämningen/ {$a->max}. Medräkning av tidigare försök, ger <strong>{$a->cur}/{$a->max}.</strong> Denna inlämning gavs ett straff på {$a->penalty}. Totalt straff hittills: {$a->totalpenalty}.';
$string['gradingdetailswithpenalty'] = 'Betyg för den här inlämningen: {$a->raw}/{$a->max}. Denna inlämning ledde till ett avdrag på {$a->penalty}.';
$string['gradingdetailswithtotalpenalty'] = 'Betyg för den här inlämningen: {$a->raw}/{$a->max}. Denna inlämning ledde till ett avdrag på {$a->penalty}. Totalt avdrag hittills: {$a->totalpenalty}.';
$string['notcomplete'] = 'Ofullständig';
$string['pluginname'] = 'Adaptivt läge';
$string['privacy:metadata'] = 'Pluginmodulen Adaptivt läge-frågebeteende lagrar ingen personinformation.';
