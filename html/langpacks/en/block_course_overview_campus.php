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
 * Strings for component 'block_course_overview_campus', language 'en', version '4.5'.
 *
 * @package     block_course_overview_campus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academicyear_desc'] = 'Academic year (Calendar year is not divided)';
$string['activityoverview'] = 'You have {$a}s that need attention';
$string['all'] = 'All';
$string['appearancesettingheading'] = 'Appearance';
$string['blocktitle'] = 'Block title';
$string['blocktitle_desc'] = 'This display name is shown as the title of the block';
$string['blocktitledefault'] = 'Course overview';
$string['category'] = 'Parent category';
$string['categorycoursefilter'] = 'Activate parent category filter';
$string['categorycoursefilter_desc'] = 'Allow users to filter courses by parent category';
$string['categorycoursefilterdisplayname'] = 'Display name for parent category filter';
$string['categorycoursefilterdisplayname_desc'] = 'This display name is shown above the parent category filter<br /><em>This setting is only processed when the parent category filter is activated</em>';
$string['categorycoursefiltersettingheading'] = 'Parent category filter: Filter activation';
$string['course_overview_campus:addinstance'] = 'Add a new course overview campus block';
$string['course_overview_campus:myaddinstance'] = 'Add a new course overview campus block to Dashboard';
$string['defaultterm'] = 'Use default term';
$string['defaultterm_desc'] = 'If the user has not previously selected a term for filtering terms, a term is chosen for him. The first choice is the current term. If the user is not enrolled on any courses in the current term, the most recent previous term is chosen.<br /><em>This setting is only processed when the term filter is activated</em>';
$string['enablehidecourses'] = 'Enable course hiding';
$string['enablehidecourses_desc'] = 'Enable course hiding, which lets users hide courses from the course overview list';
$string['firstrowcoursename'] = 'First row: Course name style';
$string['firstrowcoursename_desc'] = 'Show the course\'s full name or the course\'s short name in the first row of the course overview list entry';
$string['hiddencourses'] = 'hidden courses';
$string['hidecourse'] = 'Hide course in course overview list';
$string['hidecoursessettingheading'] = 'Hide courses';
$string['listentriessettingheading'] = 'Course overview list: Entries';
$string['managehiddencourses'] = 'Manage hidden courses';
$string['mergehomonymouscategories'] = 'Merge homonymous parent categories';
$string['mergehomonymouscategories_desc'] = 'If there are multiple courses with different parent categories, but with the same parent category name, the parent category filter will be filled with multiple categories with the same name by default. This can be confusing to the user. If you want to merge all homonymous parent categories into one filter entry when using the parent category filter, activate this setting<br /><em>This setting is only processed when the parent category filter is activated</em>';
$string['mergehomonymouscategoriessettingheading'] = 'Parent category filter: Merge homonymous parent categories';
$string['nocourses'] = 'Currently, you are not enrolled in any courses';
$string['noteacher'] = 'No teacher enrolled';
$string['noteachertext'] = 'No teacher enrolled text';
$string['noteachertext_desc'] = 'This text is displayed instead of the teachers\' names if there is no teacher enrolled in the course. If you don\'t want a placeholder text to appear, just delete this text here<br /><em>This setting is only processed when show teacher name is activated</em>';
$string['ordersettingheading'] = 'Course overview list: Order';
$string['other'] = 'Other';
$string['pluginname'] = 'Course overview on campus';
$string['prioritizemyteachedcourses'] = 'Prioritize courses in which I teach';
$string['prioritizemyteachedcourses_desc'] = 'Courses in which the user has a teacher role are listed first in course overview list';
$string['privacy:metadata:preference:hidecourse'] = 'The show/hide status of a course in the course overview list.';
$string['privacy:metadata:preference:local_boostcoc-activefilters'] = 'The list of currently active filters to be used in the companion plugin \'Boost course overview campus\'.';
$string['privacy:metadata:preference:local_boostcoc-notshowncourses'] = 'The list of currently not shown courses to be used in the companion plugin \'Boost course overview campus\'.';
$string['privacy:metadata:preference:selectedcategory'] = 'The current selection of the parent category filter.';
$string['privacy:metadata:preference:selectedteacher'] = 'The current selection of the teacher filter.';
$string['privacy:metadata:preference:selectedterm'] = 'The current selection of the term filter.';
$string['privacy:metadata:preference:selectedtoplevelcategory'] = 'The current selection of the top level category filter.';
$string['privacy:request:preference:hidecourse'] = 'The show/hide status of the course {$a->item} in the course overview list is: {$a->value}.';
$string['privacy:request:preference:local_boostcoc-activefilters'] = 'The list of currently active filters to be used in the companion plugin \'Boost course overview campus\' is: {$a->value}.';
$string['privacy:request:preference:local_boostcoc-notshowncourses'] = 'The list of currently not shown courses to be used in the companion plugin \'Boost course overview campus\' is: {$a->value}.';
$string['privacy:request:preference:selectedcategory'] = 'The current selection of the parent category filter is: {$a->value}.';
$string['privacy:request:preference:selectedteacher'] = 'The current selection of the teacher filter is: {$a->value}.';
$string['privacy:request:preference:selectedterm'] = 'The current selection of the term filter is: {$a->value}.';
$string['privacy:request:preference:selectedtoplevelcategory'] = 'The current selection of the top level category filter is: {$a->value}.';
$string['secondrowhideonphones'] = 'Second row: Hide on phones';
$string['secondrowhideonphones_desc'] = 'Hide the second row on mobile phones to save space';
$string['secondrowshowcategoryname'] = 'Second row: Show parent category name';
$string['secondrowshowcategoryname_desc'] = 'Show the course\'s parent category name in a second row of the course overview list entry';
$string['secondrowshowshortname'] = 'Second row: Show short name';
$string['secondrowshowshortname_desc'] = 'Show the course\'s short name in a second row of the course overview list entry';
$string['secondrowshowteachername'] = 'Second row: Show teacher name';
$string['secondrowshowteachername_desc'] = 'Show the teacher\'s name(s) in a second row of the course overview list entry. If there is more then one teacher, the names will be sorted first by the <a href="/admin/roles/manage.php">global order of roles</a> and second by the teachers\' last names';
$string['secondrowshowteachernamestyle'] = 'Second row: Style of teacher name';
$string['secondrowshowteachernamestyle_desc'] = 'Define how the teacher\'s name should be displayed in the second row of the course overview list entry<br /><em>This setting is only processed when show teacher name is activated</em>';
$string['secondrowshowtermname'] = 'Second row: Show term name';
$string['secondrowshowtermname_desc'] = 'Show the course\'s term name in a second row of the course overview list entry';
$string['secondrowshowtoplevelcategoryname'] = 'Second row: Show top level category name';
$string['secondrowshowtoplevelcategoryname_desc'] = 'Show the course\'s top level category name in a second row of the course overview list entry';
$string['semester_desc'] = 'Semester (Calendar year is divided into two terms)';
$string['settingspage_categoryfilter'] = 'Parent category filter';
$string['settingspage_courseoverviewlist'] = 'Course overview list';
$string['settingspage_general'] = 'General';
$string['settingspage_hidecourses'] = 'Hide courses';
$string['settingspage_teacherfilter'] = 'Teacher filter';
$string['settingspage_teacherroles'] = 'Teacher roles';
$string['settingspage_termfilter'] = 'Term filter';
$string['settingspage_toplevelcategoryfilter'] = 'Top level category filter';
$string['showcourse'] = 'Show course';
$string['stopmanaginghiddencourses'] = 'Stop managing hidden courses';
$string['submitfilter'] = 'Filter my courses!';
$string['teachercoursefilter'] = 'Activate teacher filter';
$string['teachercoursefilter_desc'] = 'Allow users to filter courses by teacher';
$string['teachercoursefilterdisplayname'] = 'Display name for teacher filter';
$string['teachercoursefilterdisplayname_desc'] = 'This display name is shown above the teacher filter<br /><em>This setting is only processed when the teacher filter is activated</em>';
$string['teachercoursefiltersettingheading'] = 'Teacher filter: Filter activation';
$string['teachernamestylefirstname'] = 'Firstname';
$string['teachernamestylefullname'] = 'Firstname Lastname';
$string['teachernamestylefullnamedisplay'] = 'Teacher name style according to Moodle core setting "fullnamedisplay</em>" (Currently set to "{$a}")';
$string['teachernamestylelastname'] = 'Lastname';
$string['teacherroles'] = 'Teacher roles';
$string['teacherroles_desc'] = 'Define which roles are handled as teacher roles by this plugin<br /><em>This setting is only processed when show teacher name is activated or when the teacher filter is activated or when the priorization of courses in which I teach is activated</em>';
$string['teacherroleshidesuspended'] = 'Hide suspended teachers';
$string['teacherroleshidesuspended_desc'] = 'When looking for teachers with the specified teacher roles, do not only check if a teacher has one of the given roles in a course, but also check if his enrolment into the course is active (i.e. the teacher\'s enrolment in the course is not suspended + the current date is within the start and end dates of the teacher\'s enrolment + the enrolment method of the teacher\'s enrolment is enabled in the course). Teachers whose enrolment in a course is not active will not be considered as teacher for this course.<br /><em>This setting is only processed when show teacher name is activated or when the teacher filter is activated.</em><br /><em>Warning: If you enable this setting, the load on the database to create the list of courses will slightly increase due to the necessary additional checks. Thus, enable this setting only if you need to.</em>';
$string['teacherrolesparent'] = 'Include parent context teacher roles';
$string['teacherrolesparent_desc'] = 'When looking for teachers with the specified teacher roles, include teachers who have their role assigned in parent contexts (course category or system level)<br /><em>This setting is only processed when show teacher name is activated or when the teacher filter is activated.</em><br /><em>Warning: If you set this to "No" or "Depending on the user\'s moodle/course:reviewotherusers capability", the "Prioritize courses in which I teach" function will also be influenced and will not priorize courses where the user has his teacher role assigned in parent contexts.</em>';
$string['teacherrolesparentcapability'] = 'Depending on the user\'s moodle/course:reviewotherusers capability';
$string['teacherrolessettingheading'] = 'Teacher roles';
$string['term'] = 'Term';
$string['term1'] = 'Term 1';
$string['term1name'] = 'Term 1 name';
$string['term1name_desc'] = 'Descriptive name for term 1, please rename it according to your campus terminology (or leave it empty if you want to use only year numbes in Academic year mode)<br /><em>This setting is only processed when the term filter is activated</em>';
$string['term1startday'] = 'Term 1 start day';
$string['term1startday_desc'] = 'Day and month when term 1 starts<br /><em>This setting is only processed when the term filter is activated</em>';
$string['term2'] = 'Term 2';
$string['term2name'] = 'Term 2 name';
$string['term2name_desc'] = 'Descriptive name for term 2, please rename it according to your campus terminology<br /><em>This setting is only processed when the term filter is activated and when term mode is set to "Semester", "Tertial" or "Trimester"</em>';
$string['term2startday'] = 'Term 2 start day';
$string['term2startday_desc'] = 'Day and month when term 2 starts<br /><em>This setting is only processed when the term filter is activated and when term mode is set to "Semester", "Tertial" or "Trimester"</em>';
$string['term3'] = 'Term 3';
$string['term3name'] = 'Term 3 name';
$string['term3name_desc'] = 'Descriptive name for term 3, please rename it according to your campus terminology<br /><em>This setting is only processed when the term filter is activated and when term mode is set to "Tertial" or "Trimester"</em>';
$string['term3startday'] = 'Term 3 start day';
$string['term3startday_desc'] = 'Day and month when term 3 starts<br /><em>This setting is only processed when the term filter is activated and when term mode is set to "Tertial" or "Trimester"</em>';
$string['term4'] = 'Term 4';
$string['term4name'] = 'Term 4 name';
$string['term4name_desc'] = 'Descriptive name for term 4, please rename it according to your campus terminology<br /><em>This setting is only processed when the term filter is activated and when term mode is set to "Trimester"</em>';
$string['term4startday'] = 'Term 4 start day';
$string['term4startday_desc'] = 'Day and month when term 4 starts<br /><em>This setting is only processed when the term filter is activated and when term mode is set to "Trimester"</em>';
$string['termbehavioursettingheading'] = 'Term filter: Term behaviour';
$string['termcoursefilter'] = 'Activate term filter';
$string['termcoursefilter_desc'] = 'Allow users to filter courses by term';
$string['termcoursefilterdisplayname'] = 'Display name for term filter';
$string['termcoursefilterdisplayname_desc'] = 'This display name is shown above the term filter<br /><em>This setting is only processed when the term filter is activated</em>';
$string['termcoursefiltersettingheading'] = 'Term filter: Filter activation';
$string['termmode'] = 'Term mode';
$string['termmode_desc'] = 'Set the term mode for the term filter<br /><em>This setting is only processed when the term filter is activated</em>';
$string['termnamesettingheading'] = 'Term filter: Term names';
$string['termsettingerror'] = 'The configured term dates don\'t make sense. Please verify that term 2 starts after term 1 and so on. Term filter will not be available to users until you fix this.';
$string['termsettingheading'] = 'Term filter: Term definition';
$string['termyearpos'] = 'Term name year position';
$string['termyearpos_desc'] = 'Define if the term\'s year should be added as suffix or prefix to the term name<br /><em>This setting is only processed when the term filter is activated</em>';
$string['termyearposprefixnospace_desc'] = 'Year is added as prefix to the term name without space (Example: "2013S")';
$string['termyearposprefixspace_desc'] = 'Year is added as prefix to the term name with space (Example: "2013 Summer term")';
$string['termyearpossuffixnospace_desc'] = 'Year is added as suffix to the term name without space (Example: "S2013")';
$string['termyearpossuffixspace_desc'] = 'Year is added as suffix to the term name with space (Example: "Summer term 2013")';
$string['termyearseparation'] = 'Term name second year separation';
$string['termyearseparation_desc'] = 'If the timespan of the term includes New Year\'s day, define how this second year should be separated from the first one<br /><em>This setting is only processed when the term filter is activated</em>';
$string['termyearseparationhyphen_desc'] = 'Separate with a hyphen (Example: "2013-2014")';
$string['termyearseparationnosecondyear_desc'] = 'Don\'t add the second year (Example: "2013")';
$string['termyearseparationslash_desc'] = 'Separate with a slash (Example: "2013/2014")';
$string['termyearseparationunderscore_desc'] = 'Separate with a underscore (Example: "2013_2014")';
$string['tertial_desc'] = 'Tertial (Calendar year is divided into three terms)';
$string['timelesscourses'] = 'Timeless courses';
$string['timelesscourses_desc'] = 'Enable support for timeless courses in the term filter. Timeless courses seem to be not associated to a specific term<br /><em>This setting is only processed when the term filter is activated</em>';
$string['timelesscoursesname'] = 'Display name for timeless courses';
$string['timelesscoursesname_desc'] = 'This display name is shown in the term filter for courses which are timeless<br /><em>This setting is only processed when the term filter is activated and when timeless courses are activated</em>';
$string['timelesscoursessettingheading'] = 'Term filter: Timeless courses';
$string['timelesscoursesthreshold'] = 'Timeless courses threshold';
$string['timelesscoursesthreshold_desc'] = 'Define courses with a start year before (and not equal to) this year as timeless courses<br /><em>This setting is only processed when the term filter is activated and when timeless courses are activated</em>';
$string['toplevelcategory'] = 'Top level category';
$string['toplevelcategorycoursefilter'] = 'Activate top level category filter';
$string['toplevelcategorycoursefilter_desc'] = 'Allow users to filter courses by top level category';
$string['toplevelcategorycoursefilterdisplayname'] = 'Display name for top level category filter';
$string['toplevelcategorycoursefilterdisplayname_desc'] = 'This display name is shown above the top level category filter<br /><em>This setting is only processed when the top level category filter is activated</em>';
$string['toplevelcategorycoursefiltersettingheading'] = 'Top level category filter: Filter activation';
$string['trimester_desc'] = 'Trimester (Calendar year is divided into four terms)';
$string['youhave'] = 'You have';
