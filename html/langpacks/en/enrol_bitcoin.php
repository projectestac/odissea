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
 * Strings for component 'enrol_bitcoin', language 'en', version '4.5'.
 *
 * @package     enrol_bitcoin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['BTC'] = 'Bitcoin';
$string['EEK'] = 'Estonian Kroon';
$string['JEP'] = 'Jersey Pound';
$string['MTL'] = 'Maltese Lira';
$string['TMM'] = 'Turkmenistan Manat';
$string['XAG'] = 'Ounces of Silver';
$string['XAU'] = 'Ounces of Gold';
$string['XDR'] = 'IMF Special Drawing Rights';
$string['ZMW'] = 'Zambian Kwacha';
$string['apikey'] = 'Bitcoin API key';
$string['apisecret'] = 'Bitcoin API secret key';
$string['assignrole'] = 'Assign role';
$string['bitcoin:config'] = 'Configure Bitcoin enrol instances';
$string['bitcoin:manage'] = 'Manage enrolled users';
$string['bitcoin:unenrol'] = 'Unenrol users from course';
$string['bitcoin:unenrolself'] = 'Unenrol self from the course';
$string['checkproductionmode'] = 'Check for production mode';
$string['clientid'] = 'Bitcoin Client ID';
$string['clientsecret'] = 'Bitcoin Client secret';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Bitcoin enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['pluginname'] = 'Bitcoin';
$string['pluginname_desc'] = 'The Bitcoin module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['redirecturi'] = 'Bitcoin redirect/callback URL';
$string['status'] = 'Allow Bitcoin enrolments';
$string['status_desc'] = 'Allow users to use Bitcoin to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
