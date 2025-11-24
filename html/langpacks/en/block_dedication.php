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
 * Strings for component 'block_dedication', language 'en', version '4.5'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Course name';
$string['admin_filter_courseid_help'] = 'Filter the report by the course name';
$string['admin_filter_form'] = 'Course dedication configuration';
$string['admin_filter_form_help'] = 'Time is estimated based in the concepts of Session and Session duration applied to log entries.

<strong>Click:</strong> Every time that a user access to a page in Moodle a log entry is stored.

<strong>Session:</strong> set of two or more consecutive clicks in which the elapsed time
between every pair of consecutive clicks does not overcome an established maximum time.

<strong>Session duration:</strong> elapsed time between the first and the last click of the session.

<strong>Dedication time:</strong> the sum of all session duration for a user.';
$string['admin_filter_form_text'] = 'Select the range of dates and the maximum time between clicks of the same session.';
$string['admin_filter_maxtime'] = 'End of the period';
$string['admin_filter_maxtime_help'] = 'Consider only log entries ending before this date';
$string['admin_filter_mintime'] = 'Start of the period';
$string['admin_filter_mintime_help'] = 'Consider only log entries after this date';
$string['admin_filter_submit'] = 'Calculate';
$string['allloglifetime'] = 'Keep session history for';
$string['averagetimespent'] = '<strong>Average time spent in course:</strong> {$a}';
$string['cleanuptask'] = 'Session history cleanup task';
$string['collect_dedication'] = 'Collect data for block dedication';
$string['configallloglifetime'] = 'This specifies the length of time you want to keep data about session duration. Sessions that are older than this age are automatically deleted.';
$string['connectionratiorow'] = 'Connections per day';
$string['dedication:addinstance'] = 'Allow to add dedication block';
$string['dedication:myaddinstance'] = 'Allow to add dedication block to dashboard page';
$string['dedication:viewreports'] = 'Allow to view dedication reports';
$string['dedicationall'] = 'All course members dedication. Click on any name to see a detailed course dedication for it.';
$string['dedicationrow'] = 'Time spent in course';
$string['enrolmententity'] = 'Enrolment';
$string['enrolmentmethod'] = 'Enrolment method';
$string['entity_dedication'] = 'Dedication';
$string['excludesessionslessthan'] = 'Excludes sessions less than {$a}';
$string['group'] = 'Group';
$string['groupentity'] = 'Group';
$string['ignore_sessions_limit'] = 'Ignore session limit';
$string['ignore_sessions_limit_desc'] = 'Removes shorter sessions, anything less than this value (in mins) will be ignored in the dedication report';
$string['lastupdated'] = 'Last updated: {$a}';
$string['period'] = 'Period since <em>{$a->mintime}</em> to <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Elapsed time:</strong>  {$a}';
$string['pluginname'] = 'Dedication';
$string['privacy:metadata'] = 'The block_dedication plugin stores times users have dedicated to courses.';
$string['privacy:metadata:block_dedication:courseid'] = 'Course id for the user dedication';
$string['privacy:metadata:block_dedication:timespent'] = 'Time spent on the course';
$string['privacy:metadata:block_dedication:timestart'] = 'The start time of the data collected';
$string['privacy:metadata:block_dedication:userid'] = 'User id of the user dedication';
$string['report_dedication'] = 'Tool Dedication Report';
$string['report_timespent'] = 'Report Timespent';
$string['session_limit'] = 'Session limit';
$string['session_limit_desc'] = 'Session limit for the report page filters';
$string['sessionduration'] = 'Session duration';
$string['sessiondurationsum'] = 'Session duration (sum)';
$string['sessionstart'] = 'Session start';
$string['showestimatedtime'] = 'Show estimated time spent to users';
$string['showestimatedtime_help'] = 'This setting allows users to see their estimated time spent in the block.';
$string['timespent_estimation'] = 'Your estimated time spent in course is:';
$string['timespentincourse'] = 'Time spent in course';
$string['timespentreport'] = 'Full report';
$string['timespenttasknotrunning'] = 'Time spent calculation task has not run yet.';
$string['totaltimespent'] = '<strong>Total of all time spent in course:</strong> {$a}';
$string['user_dedication_datasource'] = 'User dedication';
$string['userdedication'] = 'Detailed course dedication of <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'View session duration report';
