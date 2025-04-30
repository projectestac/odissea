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
 * Strings for component 'enrol_metabulk', language 'en', version '4.4'.
 *
 * @package     enrol_metabulk
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Add to group';
$string['coursesort'] = 'Sort course list';
$string['coursesort_help'] = 'This determines whether the list of courses that can be linked are sorted by sort order (i.e. the order set in Site administration > Courses > Manage courses and categories) or alphabetically by course setting.';
$string['creategroup'] = 'Create new group';
$string['defaultgroupnametext'] = '{$a->name} {$a->increment}';
$string['linkbulk'] = 'Link';
$string['linkcourses'] = 'Link courses';
$string['linked'] = 'Linked courses:';
$string['manage'] = 'Manage';
$string['metabulk:config'] = 'Configure bulk meta enrol instances';
$string['metabulk:selectaslinked'] = 'Select course as meta linked';
$string['metabulk:unenrol'] = 'Unenrol suspended users';
$string['next'] = 'Next';
$string['nosyncroleids'] = 'Roles that are not synchronised';
$string['nosyncroleids_desc'] = 'By default all course level role assignments are synchronised from parent to child courses. Roles that are selected here will not be included in the synchronisation process. The roles available for synchronisation will be updated in the next cron execution.';
$string['numberofcourses'] = '{$a} Courses';
$string['pluginname'] = 'Bulk meta course link';
$string['pluginname_desc'] = 'Bulk course meta link enrolment plugin synchronises enrolments and roles in two different courses.';
$string['syncall'] = 'Synchronise all enrolled users';
$string['syncall_desc'] = 'If enabled all enrolled users are synchronised even if they have no role in parent course, if disabled only users that have at least one synchronised role are enrolled in child course.';
$string['unlinkbulk'] = 'Unlink';
$string['unlinked'] = 'Unlinked courses:';
