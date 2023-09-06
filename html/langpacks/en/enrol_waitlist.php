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
 * Strings for component 'enrol_waitlist', language 'en', version '4.1'.
 *
 * @package     enrol_waitlist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmation'] = 'If you proceed you will be enrolled to this course.<br><br>Are you absolutely sure you want to do this?';
$string['confirmation_cancel'] = 'Cancel';
$string['confirmation_no'] = 'No';
$string['confirmation_yes'] = 'Yes';
$string['confirmationfull'] = '<strong>This course is presently booked.</strong> If you proceed you will be placed on a waiting list and will be enrolled automatically and informed by email in case enough spaces becomes available.<br>';
$string['continue'] = 'continue';
$string['customwelcomemessage'] = 'Custom welcome message';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during waitlist enrolment';
$string['disable'] = 'You can not enrol yourself in this course.';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can enrol themselves until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolme'] = 'Enrol me';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid (in seconds). If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user enrols themselves. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can enrol themselves from this date onward only.';
$string['enrolusers'] = 'Enrol users';
$string['faculty'] = 'Faculty';
$string['groupkey'] = 'Use group enrolment keys';
$string['groupkey_desc'] = 'Use group enrolment keys by default.';
$string['groupkey_help'] = 'In addition to restricting access to the course to only those who know the key, use of a group enrolment key means users are automatically added to the group when they enrol in the course.

To use a group enrolment key, an enrolment key must be specified in the course settings as well as the group enrolment key in the group settings.';
$string['lineconfirm'] = '<br>Are you absolutely sure you want to do this?';
$string['lineinfo'] = '<br>Number of persons waiting in front of you:';
$string['longtimenosee'] = 'Unenrol inactive after';
$string['longtimenosee_help'] = 'If users haven\'t accessed a course for a long time, then they are automatically unenrolled. This parameter specifies that time limit.';
$string['manage::assign'] = 'Assign';
$string['manage::define'] = 'Define';
$string['maxenrolled'] = 'Max enrolled users';
$string['maxenrolled_help'] = 'Specifies the maximum number of users that can waitlist enrol. 0 means no limit.';
$string['maxenrolledreached'] = 'Maximum number of users allowed to waitlist-enrol was already reached.';
$string['nocursefields'] = 'No fields';
$string['password'] = 'Enrolment key';
$string['password_help'] = 'An enrolment key enables access to the course to be restricted to only those who know the key.

If the field is left blank, any user may enrol in the course.

If an enrolment key is specified, any user attempting to enrol in the course will be required to supply the key. Note that a user only needs to supply the enrolment key ONCE, when they enrol in the course.';
$string['passwordinvalid'] = 'Incorrect enrolment key, please try again';
$string['passwordinvalidhint'] = 'That enrolment key was incorrect, please try again<br />
(Here\'s a hint - it starts with \'{$a}\')';
$string['pluginname'] = 'Waitlist enrolment';
$string['pluginname_desc'] = 'The waitlist enrolment plugin allows users to choose which courses they want to participate in. The courses may be protected by an enrolment key. Internally the enrolment is done via the manual enrolment plugin which has to be enabled in the same course.';
$string['privacy:metadata:user_enrol_waitlist'] = 'Stores user metadata in userid field';
$string['privacy:metadata:user_enrol_waitlist:userid'] = 'Stores user metadata in userid field';
$string['profilecreatefield'] = 'Create a new waitlist fieled';
$string['profiledescription2'] = 'Description2 of the field';
$string['profilefield'] = 'Field';
$string['requirepassword'] = 'Require enrolment key';
$string['requirepassword_desc'] = 'Require enrolment key in new courses and prevent removing of enrolment key from existing courses.';
$string['role'] = 'Assign role';
$string['sendcoursewelcomemessage'] = 'Send course welcome message';
$string['sendcoursewelcomemessage_help'] = 'If enabled, users receive a welcome message via email when they waitlist-enrol in a course.';
$string['showhint'] = 'Show hint';
$string['showhint_desc'] = 'Show first letter of the guest access key.';
$string['status'] = 'Allow waitlist enrolments';
$string['status_desc'] = 'Allow users to waitlist enrol into course by default.';
$string['status_help'] = 'This setting determines whether a user can enrol (and also unenrol if they have the appropriate permission) themselves from the course.';
$string['task:update_enrolments'] = 'Update waitlist-enrolments';
$string['unenrolwaitlistconfirm'] = 'Do you really want to unenrol "{$a}"?';
$string['usepasswordpolicy'] = 'Use password policy';
$string['usepasswordpolicy_desc'] = 'Use standard password policy for enrolment keys.';
$string['users_on_waitlist'] = 'Users on waitlist';
$string['waitlist:config'] = 'Configure waitlist enrol instances';
$string['waitlist:manage'] = 'Manage enrolled users';
$string['waitlist:unenrol'] = 'Unenrol users from course';
$string['waitlist:unenrolself'] = 'Unenrol self from the course';
$string['waitlist:unenrolwaitlist'] = 'Unenrol waitlist from the course';
$string['waitlisted_users'] = 'Waitlisted users';
$string['waitlistinfo'] = '<b>This course is presently booked</b>. <br/><br/>Thank you for your application request. You have been placed on a waiting list and will be informed via email in case a space becomes available.';
$string['welcometocourse'] = 'Welcome to {$a}';
$string['welcometocoursetext'] = '<p>Welcome to {$a->coursename}!</p>


<p>Start date: {$a->startdate}</p>

<p>Course description: </p>

	<p>{$a->summary}</p>';
