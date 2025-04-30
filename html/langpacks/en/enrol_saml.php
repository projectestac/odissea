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
 * Strings for component 'enrol_saml', language 'en', version '4.4'.
 *
 * @package     enrol_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Assignrole';
$string['created_group_info'] = 'Description for new groups';
$string['created_group_info_description'] = 'Set in this field the text that will be used for the description of new groups created by the extension';
$string['defaultperiod'] = 'Default enrolment period';
$string['defaultperiod_desc'] = 'Default length of the default enrolment period setting (in seconds).';
$string['enrolledincourserole'] = 'Enrolled in "{$a->course}" as "{$a->role}"';
$string['enrolusers'] = 'Enrol users';
$string['error_instance_creation'] = 'Exists an inactive instance of this SAML plugin for this course "{$a}", activate it instead create new one';
$string['group_prefix'] = 'Prefix for managed groups';
$string['group_prefix_description'] = 'Define a prefix if you want that the extension only manages groups that matches the prefix. Leave it blank to manage all. Multi-valued field comma separated';
$string['logfile'] = 'Log file';
$string['logfile_description'] = 'If file defined, enrollment info of courses and groups will be stored. (Use an absolute path or Moodle will save this file in the moodledata folder).';
$string['pluginname'] = 'SAML enrolments';
$string['pluginname_desc'] = 'The saml enrolments plugin allows users to be auto-enrolled in courses when login using the auth/saml plugin based on the data provided by the Identity Provider. (be sure you provide the course mapping and the role mapping on the settings of the auth/saml plugin';
$string['saml:config'] = 'Configure saml enrol instances';
$string['saml:enrol'] = 'Enrol users';
$string['saml:manage'] = 'Manage user enrolments';
$string['saml:unenrol'] = 'Unenrol users from the course';
$string['saml:unenrolself'] = 'Unenrol self from the course';
$string['status'] = 'Enable saml enrolments';
$string['status_desc'] = 'Allow course access of internally enrolled users. This should be kept enabled in most cases.';
$string['status_help'] = 'This setting determines whether users can be auto-enrolled via saml login.';
$string['statusdisabled'] = 'Disabled';
$string['statusenabled'] = 'Enabled';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['unenroluser'] = 'Do you really want to unenrol "{$a->user}" from course "{$a->course}"?';
$string['unenrolusers'] = 'Unenrol users';
$string['wscannotenrol'] = 'SAML plugin instance cannot enrol a user in the course id = {$a->courseid}';
$string['wsnoinstance'] = 'SAML enrolment plugin instance doesn\'t exist or is disabled for the course (id = {$a->courseid})';
$string['wsusercannotassign'] = 'You don\'t have the permission to assign this role ({$a->roleid}) to this user ({$a->userid}) in this course({$a->courseid}).';
