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
 * Strings for component 'assignsubmission_onlinetext', language 'sv', version '3.11'.
 *
 * @package     assignsubmission_onlinetext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowonlinetextsubmissions'] = 'Aktiverat';
$string['default'] = 'Aktiverat som förval';
$string['default_help'] = 'Om valt kommer denna inlämningsmetod vara aktiverad som förval för alla nya uppgifter.';
$string['enabled'] = 'Online text';
$string['enabled_help'] = 'Om aktiverad kan studenter skriva fritext i samband med uppgiftsinlämnade';
$string['eventassessableuploaded'] = 'En onlinetext har laddats upp.';
$string['nosubmission'] = 'Inget har lämnats in för denna uppgift';
$string['numwords'] = '({$a} ord)';
$string['numwordsforlog'] = 'Antalet ord i inlämningen: {$a}';
$string['onlinetext'] = 'Online text';
$string['onlinetextfilename'] = 'onlinetext.html';
$string['onlinetextsubmission'] = 'Tillåt online textinlämning';
$string['pluginname'] = 'Online textinlämningar';
$string['privacy:metadata:assignmentid'] = 'Uppgifts-ID';
$string['privacy:metadata:filepurpose'] = 'Filer som är inbäddade i textinlämningen.';
$string['privacy:metadata:submissionpurpose'] = 'Inlämnings-ID:t som länkar till inlämningar för användaren.';
$string['privacy:metadata:tablepurpose'] = 'Lagrar textinlämningen för varje försök.';
$string['privacy:metadata:textpurpose'] = 'Texten som har lämnats in i detta försök för denna uppgift.';
$string['privacy:path'] = 'Inlämningstext';
$string['wordlimit'] = 'Max antal ord';
$string['wordlimit_help'] = 'Om Online text är aktiverat, är detta maxantalet ord som varje student kan lämna in.';
$string['wordlimitexceeded'] = 'Max antal ord i denna inlämningsuppgift är {$a->limit} och du försöker lämna in {$a->count} ord. Vänligen granska din inlämningsuppgift och försök igen.';
