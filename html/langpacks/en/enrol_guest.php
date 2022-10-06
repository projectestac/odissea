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
 * Strings for component 'enrol_guest', language 'en', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_guest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowguests'] = 'This course allows guest users to enter';
$string['guestaccess_withoutpassword'] = 'Guest access';
$string['guestaccess_withpassword'] = 'Guest access requires password';
$string['guest:config'] = 'Configure guest access instances';
$string['password'] = 'Password';
$string['password_help'] = 'A password allows guest access to the course to be restricted to only those who know the password. Guests will be required to supply the password each time they access the course.';
$string['passwordinvalid'] = 'Incorrect access password, please try again';
$string['passwordinvalidhint'] = 'That access password was incorrect, please try again<br />
(Here\'s a hint - it starts with \'{$a}\')';
$string['pluginname'] = 'Guest access';
$string['pluginname_desc'] = 'Guest access plugin is only granting temporary access to courses, it is not actually enrolling users.';
$string['privacy:metadata'] = 'The Guest access enrolment plugin does not store any personal data.';
$string['requirepassword'] = 'Require guest access password';
$string['requirepassword_desc'] = 'Require access password in new courses and prevent removing of access password from existing courses.';
$string['showhint'] = 'Show hint';
$string['showhint_desc'] = 'Show first letter of the guest access password.';
$string['status'] = 'Allow guest access';
$string['status_desc'] = 'Allow temporary guest access by default.';
$string['status_help'] = 'This setting determines whether a user can access the course as a guest, without being required to enrol.';
$string['status_link'] = 'enrol/guest';
$string['usepasswordpolicy'] = 'Use password policy';
$string['usepasswordpolicy_desc'] = 'Use standard password policy for guest access passwords.';
