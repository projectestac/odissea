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
 * Infected file report
 *
 * @package    report_infectedfiles
 * @author     Nathan Nguyen <nathannguyen@catalyst-au.net>
 * @copyright  Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// XTEC ************ AFEGIT - Allow access only to xtecadmin user (report_infectedfiles)
// 2021.07.14 @aginard
if (get_protected_agora()) {
// ************ FI

$ADMIN->add('reports', new admin_externalpage('reportinfectedfiles',
    get_string('infectedfiles', 'report_infectedfiles'),
    "$CFG->wwwroot/report/infectedfiles/index.php"));

$settings = null;

// XTEC ************ AFEGIT - Allow access only to xtecadmin user (report_infectedfiles)
// 2021.07.14 @aginard
}
// ************ FI
