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
 * Strings for component 'autoattendmod', language 'en', version '3.11'.
 *
 * @package     autoattendmod
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoattendmod:addinstance'] = 'Add a new auto attendance module';
$string['autoattendmod:receivemail'] = 'Receive email notification';
$string['autoattendmod:view'] = 'View module';
$string['autoattendmod:viewreports'] = 'View reports';
$string['autoattendmod_options'] = 'Options of Auto Attendance module';
$string['backup_block'] = 'When this course is backupped, attendance data is backedupped that Autoattendance block maneged.';
$string['backup_block_help'] = 'In this version, Autoattendance block manages attendance data. Even if you delete a autoattendmod, attendamce data of the course remains on the database.';
$string['backup_block_title'] = 'Backup of Attendance Data';
$string['description'] = 'Description';
$string['email_allrep'] = 'Send all reports to teachers by e-mail';
$string['email_allrep_help'] = 'If e-mail is enable and you check on this, all days attendances reports are sent by e-mail. And you check off this, only one attendance report is sent';
$string['email_allrep_title'] = 'Send all Reports';
$string['email_enable'] = 'Enable e-mail notification of attenance data to Teachers';
$string['email_enable_help'] = 'If you check on this, when a session ended, attendance data is sent to teachers using e-mail. However, you must add "Teacher" to the autoattendmod:receivemail capability.';
$string['email_enable_title'] = 'Notification Result to Teachers';
$string['email_key'] = 'Enable e-mail notification of attendance keyword to Teachers';
$string['email_key_help'] = 'If you check on this, when a session started, attendance keyword is sent to teachers using e-mail. However, you must add "Teacher" to the autoattendmod:receivemail capability.';
$string['email_key_title'] = 'Notification Keyword to Teachers';
$string['email_user'] = 'Enable e-mail notification of attendance to Students';
$string['email_user_help'] = 'If you check on this, when attendance of student changes, notification is sent to student using e-mail. However, you must add "Student" to the autoattendmod:receivemail capability.';
$string['email_user_title'] = 'Notification to Students';
$string['excelver_disp'] = 'Use old Excel (Excel2007) format when downloading';
$string['excelver_disp_help'] = 'If you fail to download Excel Report, please check this.';
$string['excelver_title'] = 'Use old Excel2007';
$string['feedback_disp'] = 'Display Feedback link';
$string['feedback_disp_help'] = 'If you check off this, links to the Feedback are not displayed';
$string['feedback_title'] = 'Feedback Link';
$string['firstinstallblock'] = 'Please install the Auto Attendance Block first.';
$string['firstinstanceblock'] = 'Please create an instance of Auto Attendance Block first in this course.';
$string['misconfigured'] = 'Course is misconfigured';
$string['modidincorrect'] = 'Course Module ID was incorrect';
$string['modincorrect'] = 'Course module is incorrect<br />It is possible that Auto Attenndance Block is not installed';
$string['modulename'] = 'Auto Attendance';
$string['modulename_help'] = 'You can add only one module AutoAttendance per course. If you remove this module it don\'t affect on attendances! <br />
You can use this module only together with block AutoAttendance. Please add an autoattendand block before adding this module.<br />
This module need for semi-automatic attendance and include grades of attendances to main course\'s grades.';
$string['modulenameplural'] = 'Autoattend';
$string['modulenamesimple'] = 'Autoattend';
$string['name'] = 'Name';
$string['onlyonemodule'] = 'Only one Auto Attendance Module instance can be created per one course.';
$string['permit_homeroom'] = 'Permit access from Homeroom Module';
$string['permit_homeroom_help'] = 'If you check off this, Homeroom module does not access this autoattend module/block';
$string['permit_homeroom_title'] = 'For Homeroom Module';
$string['pluginadministration'] = 'Auto Attendance Module Admin';
$string['pluginname'] = 'Auto Attendance Module';
$string['session_num'] = 'The number of sessions';
$string['summertime_disp'] = 'Summer Time can be set at sessions.';
$string['summertime_disp_help'] = 'You can set Summer Time st some sessions.';
$string['summertime_title'] = 'Use Summer Time';
$string['use_item'] = 'use {$a}';
$string['username_manage'] = 'Management of Username';
$string['username_manage_help'] = 'You can select displied name pattern in this module.';
