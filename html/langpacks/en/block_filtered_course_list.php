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
 * Strings for component 'block_filtered_course_list', language 'en', version '4.1'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'A manager sees all courses';
$string['blockname'] = 'Filtered course list';
$string['catrubrictpl'] = 'Category rubric template';
$string['catseparator'] = 'Category separator';
$string['completedcourses'] = 'Completed courses';
$string['configcatrubrictpl'] = 'Use this setting to determine a pattern for displaying rubrics when filtering by category. The following replacement tokens are available: NAME, IDNUMBER, PARENT, ANCESTRY. You can truncate the output of any token by appending a character length in curly braces. (e.g. NAME{20}). An ellipsis will be added. <br /><br />Full details at <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configcatseparator'] = 'Separator string to use between category names when using category ANCESTRY in the category rubric template.';
$string['configcoursenametpl'] = 'Use this setting to determine a pattern for displaying a course name. The following replacement tokens are available: FULLNAME, SHORTNAME, IDNUMBER and CATEGORY. You can truncate the output of any token by appending a character length in curly braces. (e.g. NAME{20}). An ellipsis will be added. <br /><br />Full details at <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configexternalfilters'] = 'Use the identifier in parenthesis to reference the filter within the filter config textarea. For infromation on the configuration available for an external filter, see the plugin providing it.';
$string['configfilters'] = 'Enter one filter per line using vertical bars to separate filter elements. Filter types are: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> and <i>generic</i>. <br /><br />Full details at <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['confighideallcourseslink'] = 'Hide "All courses" link at the bottom of the block. <br>Link hiding does not affect a manager\'s view';
$string['confighidefromguests'] = 'Hide the block from guests and anonymous visitors.';
$string['confighideothercourses'] = 'Hide the "Other courses" catch-all rubric in the block.';
$string['configmanagerview'] = 'What should a manager see in the course list block? Note that managers who are not enrolled in any courses will still see the generic list.';
$string['configmaxallcourse'] = 'On a site with only one category, managers and guests will see all courses, <br />but above this number they will see a category link instead. <br />[Choose an integer between 0 and 999.]';
$string['configpersistentexpansion'] = 'Remember rubric expansion states within a browser session.';
$string['configprimarysort'] = 'Within a rubric courses will be sorted by this field. Choose "Sort order" to display courses in the same order as seen in the course management interface.';
$string['configsecondarysort'] = 'Within a rubric courses will secondarily be sorted by this field.';
$string['configtitle'] = 'Block title';
$string['coursenametpl'] = 'Course name template';
$string['courses'] = 'Courses';
$string['courseswithxenrolment'] = 'Courses with {$a} enrolments';
$string['defaultfilters'] = 'category | collapsed | 0 (top level) | 0 (all descendants)';
$string['externalfilters'] = 'External Filters';
$string['filtered_course_list:addinstance'] = 'Add a new Filtered course list block';
$string['filtered_course_list:myaddinstance'] = 'Add a new Filtered course list block to My home';
$string['filters'] = 'Filter configuration';
$string['filters_help'] = 'Enter one filter per line using vertical bars to separate filter elements. Filter types are: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> and <i>generic</i>. <br /><br />Full details at <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['hideallcourseslink'] = 'Hide "All courses" link';
$string['hidefromguests'] = 'Hide from guests';
$string['hideothercourses'] = 'Hide other courses';
$string['managerview'] = 'Manager view';
$string['maxallcourse'] = 'Max for single category';
$string['othercourses'] = 'Other courses';
$string['owncourses'] = 'A manager sees own courses';
$string['persistentexpansion'] = 'Persistent expansion';
$string['pluginname'] = 'Filtered course list';
$string['primarysort'] = 'Primary sort';
$string['primaryvector'] = 'Primary sort vector';
$string['privacy:metadata'] = 'The Filtered course list block displays information about course enrolments, but does not effect or store any data itself. All enrolments are managed by other Moodle systems.';
$string['secondarysort'] = 'Secondary sort';
$string['secondaryvector'] = 'Secondary sort vector';
$string['starredcourses'] = 'Starred Courses';
$string['top'] = 'Top';
