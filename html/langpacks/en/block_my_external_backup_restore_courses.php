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
 * Strings for component 'block_my_external_backup_restore_courses', language 'en', version '4.4'.
 *
 * @package     block_my_external_backup_restore_courses
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['NA'] = 'N/A';
$string['cantrestorecourseincategorycontext'] = 'User "{$a->username}" can\'t restore course in category "{$a->internalcategoryname}" because hasn\'t capability moodle/course:create.\\n The course will be restored in category "{$a->defaultcategoryname}".';
$string['cantrestorecourseindefaultcategorycontext'] = 'User "{$a->username}" can\'t restore course in default category "{$a->defaultcategoryname}" because hasn\'t capability moodle/course:create.';
$string['categorytable'] = 'Database table name where category informations are stored';
$string['categorytable_categoryfield'] = 'Unique database table field that represent category same for current and foreign moodle implied';
$string['categorytable_categoryfield_desc'] = 'Unique database table field that represent category same for current and foreign moodle implied';
$string['categorytable_desc'] = 'Database table name where category informations are stored';
$string['categorytable_foreignkey'] = 'Database table foreign key for category id';
$string['categorytable_foreignkey_desc'] = 'Database table foreign key for category id';
$string['choose_to_restore'] = 'Select for restore';
$string['defaultcategory'] = 'Category id where restoring courses by default';
$string['defaultcategory_desc'] = 'Category id where restoring courses by default';
$string['error_mail_main_message'] = 'Errors occured while restoring course "{$a->externalcoursename}" from moodle platform {$a->externalmoodle} to moodle platform {$a->localmoodle}.\\nSee details below.\\n';
$string['error_mail_subject'] = '[Moodle course restore] : error while restoring an external course';
$string['error_mail_task_error_message'] = '{$a->message}.\\n';
$string['error_mail_task_error_message_courseid'] = 'internal courseid {$a->courseid} : {$a->message}.\\n';
$string['error_msg_admin'] = 'error for course with external id  {$externalcourseid} and internal id {$courseid}, from {$externalmoodleurl} , for username {$username} :\\n{$message}';
$string['executiontime'] = 'Estimated execution time';
$string['external_moodle'] = 'external moodle list to connect to';
$string['external_moodleDesc'] = 'a formatted list of external moodle as moodle_url1,token_compte_webservice_moodle_externe1;moodle_url2,token_compte_webservice_moodle_externe2;...';
$string['externalmoodlecourselist'] = 'External moodles course list';
$string['externalmoodlehelpsection'] = 'In the folling table :<ul><li> check to select the remote courses that you want to restore on the current plate-forme</li><li>Next click on "Send" button</ul>
Courses are then scheduled to be restored.<br><br>
You can consult the state of your scheduled for restoration courses (scheduled date, resotoration completed, ...).<br>
A message notification will be send once your course will be restored.';
$string['includeexternalurlinmail'] = 'Include external platform url in notification mail';
$string['includeexternalurlinmail_desc'] = 'Include external platform url in notification mail';
$string['invalidusername'] = 'You have no account on this platform';
$string['keepcategory'] = 'Keep original category';
$string['limitend'] = 'Ending execution time';
$string['limitend_desc'] = 'Ending execution time';
$string['limitstart'] = 'Starting execution time';
$string['limitstart_desc'] = 'Starting execution time';
$string['mailexternalmoodleinfo'] = '{$a->externalmoodlesitename} ({$a->externalmoodleurl})';
$string['maillocalmoodleinfo'] = '{$a->site} ({$a->siteurl})';
$string['messageprovider:restorationfailed'] = 'Notify that an external course as failed to restore';
$string['messageprovider:restorationsuccess'] = 'Notify that an external course is successfully restored';
$string['misconfigured_plugin'] = 'Misconfigured plugin';
$string['my_external_backup_restore_courses:addinstance'] = 'add instance of retrieve backup restore courses from external moodle';
$string['my_external_backup_restore_courses:can_retrieve_courses'] = 'Retrieve external backup files';
$string['my_external_backup_restore_courses:can_see_backup_courses'] = 'View backup courses';
$string['my_external_backup_restore_courses:myaddinstance'] = 'add instance of retrieve backup courses from external moodle to Dashboard';
$string['my_external_backup_restore_courses:view'] = 'See \'Restore courses from remote Moodles\' block';
$string['my_external_backup_restore_courses_task'] = 'Restore course from remote Moodles task';
$string['nextruntime'] = 'Performed the';
$string['noexternalmoodleconnected'] = 'No external moodle connected';
$string['notexistinginternalcategory'] = 'User "{$a->username}" can\'t restore course in category "{$a->internalcategoryname}" because the given internal category does not exists anymore\\n. The course will be restored in category "{$a->defaultcategoryname}".';
$string['pluginname'] = 'Restore courses from remote Moodles';
$string['restore'] = 'Restore a course';
$string['restorecourseinoriginalcategory'] = 'Restore course in its category if possible';
$string['restorecourseinoriginalcategory_desc'] = 'Restore course in its category if possible. This requires the local course_category_types plugins (course categories system information synchronization).';
$string['restorecourses'] = 'Restore courses';
$string['roles_included_in_external_courses_search'] = 'Roles in course to add to the external course search';
$string['roles_included_in_external_courses_search_Desc'] = 'Roles in course to add to the external course search while searching into user fields : shortnames delimited by simple quote `\' and  separated by ,';
$string['status_-1'] = 'Error';
$string['status_0'] = 'Scheduled';
$string['status_1'] = 'In progess';
$string['status_2'] = 'Performed';
$string['success_mail_main_message'] = 'course restoration "{$a->externalcoursename}" from moodle platform {$a->externalmoodle} to moodle platform {$a->localmoodle} completed successfully.';
$string['success_mail_subject'] = '[Moodle course restore] : an external course successfully restore';
$string['timelimitedmod'] = 'Execution beetween two time mod';
$string['timelimitedmod_desc'] = 'Execution beetween two time mod means that associated task that import and restore courses from external moodle will not work after before and after define time limits';
$string['warningstoowner'] = 'Show warnings to restored course owner';
$string['warningstoowner_desc'] = 'Show warnings to restored course owner';
