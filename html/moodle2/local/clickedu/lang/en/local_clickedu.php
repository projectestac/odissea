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

$string['pluginname'] = 'Clickedu';

// Capabilities
$string['clickedu:syncusers'] = 'Sync users from Clickedu';
$string['clickedu:synccourses'] = 'Sync courses from Clickedu';
$string['clickedu:synccontents'] = 'Sync contents from Clickedu';

// Events
$string['eventcontentssynced'] = 'Contents synced';
$string['eventcoursessynced'] = 'Courses synced';
$string['eventinvalidresponsereceived'] = 'Invalid response received';
$string['eventuserauthenticated'] = 'User authenticated';
$string['eventuserssynced'] = 'Users synced';

// Authentication
$string['authentication'] = 'Clickedu authentication';
$string['authenticationdesc'] = 'Please enter your username and password from Clickedu';
$string['noauthorization'] = '
For security reasons, to accept the synchronization you need to access
<a href="{$a}" target="_blank">Clickedu</a> from your computer and
grant access permissions under the icon "External links" (on the top
right corner). Then, the status of the authorization will change from
"pending" to "accepted" and, the next time you log in using the Moodle
platform, your data will be loaded.';

// Errors
$string['connectionerror'] = 'Could not connect to Clickedu web service.';
$string['invalidresponse'] = 'Invalid response received from Clickedu: {$a}';
$string['errorresponse'] = 'Error received from Clickedu: {$a}';
$string['notconfigured'] = 'Clickedu plugin is not configured.';
$string['coursenotfound'] = 'Course with idnumber "{$a}" not found.';
$string['gradeitemnotfound'] = 'Grade item with id "{$a}" not found.';

// Settings
$string['configwebserviceurl'] = 'Web service URL';
$string['configwebserviceurldesc'] = 'URL of the Clickedu web service.';
$string['configsyncusers'] = 'User synchronization';
$string['configsyncusersdesc'] = 'Allow synchronization of users from Clickedu.';
$string['configsynccourses'] = 'Course synchronization';
$string['configsynccoursesdesc'] = 'Allow synchronization of courses from Clickedu.';
$string['configsynccontents'] = 'Contents synchronization';
$string['configsynccontentsdesc'] = 'Allow synchronization of contents from Clickedu.';
$string['configmoodlews'] = 'Grades web service';
$string['configmoodlewsdesc'] = 'Enable Moodle web service for syncing grades with Clickedu.';
$string['configmoodlewstoken'] = 'Grades web service and SSO token';
$string['configmoodlewstokendesc'] = 'Token used for the grades web service and SSO access.';
$string['configcoursecat'] = 'Course category';
$string['configcoursecatdesc'] = 'Category where new courses will be created.';
$string['configteacherrole'] = 'Teacher role';
$string['configteacherroledesc'] = 'Role to assign to teachers.';
$string['configstudentrole'] = 'Student role';
$string['configstudentroledesc'] = 'Role to assign to students.';

// Sync users
$string['extendedusernamecharsrequired'] = 'You need to enable the setting {$a}.';
$string['newusersemail'] = 'Hi {$a->firstname},

{$a->users} new users have been created at \'{$a->sitename}\'.  Their
username and temporary passwords are attached in a CSV called
{$a->attachname}.

Cheers from the \'{$a->sitename}\' administrator,
{$a->signoff}';
$string['newuserscreated'] = '{$a} new users have been created.';
$string['newusers'] = '
There are {$a} new users in Clickedu. A Moodle account will be created
for each user with the same username they have in Clickedu, and a
temporary password that they will have to change at the first
login. The list of userames and passwords will be sent to you by
email.';
$string['nonewusers'] = 'There are no new users in Clickedu.';
$string['syncingusers'] = 'Syncing users';
$string['syncusers'] = 'Sync users';

// Sync courses
$string['synccourses'] = 'Sync courses';
$string['nocourses'] = 'There are no courses in Clickedu.';
$string['courses'] = '
There are {$a} courses in Clickedu. Missing courses will be created
and the enrolments of the existing courses will be updated.';
$string['coursecreate'] = 'To be created';
$string['courseupdate'] = 'To be updated';
$string['coursenochanges'] = 'No changes';
$string['syncingcourses'] = 'Syncing courses';
$string['coursessynced'] = 'Courses synced.';

// Sync contnets
$string['synccontents'] = 'Sync contents';
$string['synccontentsnotice'] = '
The contents of this course will be updated with the contents in
Clickedu. Changes made in resources imported from Clickedu will be
lost. Activities and resources added manually to the course will be
preserved.
';
$string['nocontents'] = 'There are no contents in Clickedu for this course.';
$string['contentssynced'] = 'Contents synced.';
$string['syncingcontents'] = 'Syncing contents';
