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
 * Strings for component 'availability_completion', language 'sv', version '3.8'.
 *
 * @package     availability_completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Kräv att studenter slutför eller inte slutför en annan aktivitet';
$string['error_selectcmid'] = 'Du måste välja en aktivitet för slutförandevillkoret.';
$string['error_selectcmidpassfail'] = 'Du måste välja en aktivitet där slutförandevillkoret "Kräv betyg" är aktiverat.';
$string['label_cm'] = 'Aktivitet eller resurs';
$string['label_completion'] = 'Nödvändig slutförandestatus';
$string['missing'] = '(aktivitet saknas)';
$string['option_complete'] = 'måste vara slutförd';
$string['option_fail'] = 'måste vara slutförd men <strong>underkänd</strong>';
$string['option_incomplete'] = 'behöver ej vara slutförd';
$string['option_pass'] = 'måste vara slutförd och godkänd';
$string['pluginname'] = 'Begränsning via aktivitetsslutförande';
$string['privacy:metadata'] = 'Pluginmodulen Begränsning via aktivitetsslutförande lagrar ingen personlig information.';
$string['requires_complete'] = 'Aktiviteten <strong>{$a}</strong> är slutförd';
$string['requires_complete_fail'] = 'Aktiviteten <strong>{$a}</strong> är slutförd men underkänd';
$string['requires_complete_pass'] = 'Aktiviteten <strong>{$a}</strong> är slutförd och godkänd';
$string['requires_incomplete'] = 'Aktiviteten <strong>{$a}</strong> är ofullständig';
$string['requires_not_complete_fail'] = 'Aktiviteten <strong>{$a}</strong> är ej slutförd och underkänd';
$string['requires_not_complete_pass'] = 'Aktiviteten <strong>{$a}</strong> är ej slutförd och ej godkänd';
$string['title'] = 'Aktivitetsslutförande';
