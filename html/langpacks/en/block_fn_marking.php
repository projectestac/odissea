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
 * Strings for component 'block_fn_marking', language 'en', version '4.4'.
 *
 * @package     block_fn_marking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptoverride'] = 'Accept override';
$string['adminfrontpage'] = 'Admin view-frontpage';
$string['aggregatetype'] = 'Aggregate type';
$string['allactivitytypes'] = 'All activity types';
$string['allcategories'] = 'All Categories';
$string['allcourses'] = 'All courses';
$string['allcourseswithblock'] = 'Only include courses that have the Marking Manager block';
$string['allgroups'] = 'All groups';
$string['allparticipants'] = 'All participants';
$string['assign'] = 'Assignment';
$string['atmaxresubmission'] = 'At max resubmission';
$string['blockinfo'] = 'Block info';
$string['blocksettings'] = 'Configuring a FN Marking block';
$string['blocksitesettings'] = 'Block site settings';
$string['blocktitle'] = 'Marking Manager';
$string['cfgdisplaytitle'] = 'Display title';
$string['checkagain'] = 'Check again';
$string['close'] = 'Close';
$string['config_days'] = 'Set the number of student not logged in x days';
$string['config_days_help'] = '<p>This setting allows to set  </p>
<p>the number of days that student have not logged in course.</p>';
$string['config_percent'] = 'Set the percent of marks';
$string['config_percent_help'] = '<p>This setting allows to set  </p>
<p>the percent of marks and after setting the percent you will see the number of student marks below x percent.</p>';
$string['config_sectiontitles'] = 'Section titles';
$string['config_sectiontitles_help'] = '<p>blank=course default.</p>';
$string['config_showgradeslink'] = 'Show grade link';
$string['config_showgradeslink_help'] = '<p>This setting allows whether to show </p>
<p> or hide the grade link in block.</p>';
$string['config_showmarked'] = 'Show marked activities';
$string['config_showmarked_help'] = '<p>This setting allows whether to show .</p>
<p> or hide the marked activities in block.</p>';
$string['config_shownotloggedinuser'] = 'Show not logged in user';
$string['config_shownotloggedinuser_help'] = '<p>This setting allows whether to show </p>
<p> or hide the number of student not loggedin in previous week.</p>';
$string['config_showreportlink'] = 'Show report link';
$string['config_showreportlink_help'] = '<p>This setting allows whether to show </p>
<p> or hide the report link in block.</p>';
$string['config_showsaved'] = 'Show draft activities';
$string['config_showsaved_help'] = '<p>This setting allows whether to show .</p>
<p> or hide the student draft activities in block.</p>';
$string['config_showstudentmarkslessthanfiftypercent'] = 'Show student marks less than 50%';
$string['config_showstudentmarkslessthanfiftypercent_help'] = '<p>This setting allows whether to show </p>
<p> or hide the number of student marks less that 50%.</p>';
$string['config_showstudentnotsubmittedassignment'] = 'Show student not submitted assignment';
$string['config_showstudentnotsubmittedassignment_help'] = '<p>This setting allows whether to show </p>
<p> or hide the number of student not submitted assignment last week .</p>';
$string['config_showunmarked'] = 'Show unmarked activities';
$string['config_showunmarked_help'] = '<p>This setting allows whether to show .</p>
<p> or hide the unmarked activities in block.</p>';
$string['config_title'] = 'Instance title';
$string['config_title_help'] = '<p>This setting allows the block title to be changed.</p>
<p>If the block header is hidden, the title will not appear.</p>';
$string['config_unsubmitted'] = 'Show unsubmitted activities';
$string['config_unsubmitted_help'] = '<p>This setting allows whether to show </p>
<p> or hide the not submitted activities in block.</p>';
$string['coursecategories'] = 'Course categories';
$string['coursecategoriesincluded'] = 'Course categories included';
$string['cron'] = 'Cron job';
$string['descconfig'] = '<p>Activate this option to hide all blocks when viewing the Marking Manager interface
and provide a less cluttered look. Note that before activating this option, you will need to add this code
to <b><em>yourmoodlesite/theme/base/config.php</em>.</b></p>
<p></p>
<pre><code style="font-size:12px; color:#FF7600;">
// Hide left and right block columns when viewing the Marking Manager
\'markingmanager\' => array(
      \'file\' => \'general.php\',
      \'regions\' => array(),
      \'options\' => array(\'noblocks\'=>true),
),
</code></pre>
After you add the above code, your file should look like the image <a href="http://moodlefn.com/docs/marking_manager_no_blocks.png">shown here</a>.';
$string['displaytitle'] = 'Activities Submitted';
$string['editortoggle'] = 'Online editor toggle';
$string['enrolledcourses'] = 'Enrolled courses';
$string['experimental'] = 'Experimental';
$string['fn_marking:addinstance'] = 'Add instance';
$string['fn_marking:myaddinstance'] = 'Add a new Marking Manager block to Dashboard';
$string['fn_marking:viewblock'] = 'View block';
$string['fn_marking:viewreadonly'] = 'View readonly';
$string['forum'] = 'Forum';
$string['grade'] = '<b>Grade: </b>';
$string['gradebook'] = 'Gradebook';
$string['gradeoverridedetected'] = 'Grade override detected';
$string['gradeslink'] = 'Grades';
$string['gradingstudentprogress'] = 'Showing {$a->index} of {$a->count}';
$string['headertitle'] = 'Marking Manager';
$string['help'] = 'Help';
$string['hideonlineeditor'] = 'Hide online editor';
$string['include_orphaned'] = 'Include orphaned activities';
$string['includecourses'] = 'Courses to include';
$string['includehiddencourses'] = 'Include hidden courses';
$string['keepseparate'] = 'Keep draft assignments separate';
$string['labelnoblocks'] = 'Hide all blocks';
$string['lastrefreshrequired'] = 'Last refresh: Update required';
$string['lastrefreshtime'] = 'Last refresh: {$a} ago';
$string['lastrefreshupdating'] = 'Last refresh: Updating';
$string['listcourseszeroungraded'] = 'List courses with zero ungraded activities';
$string['manual'] = 'Manual';
$string['manualgrading'] = 'Manual Grading';
$string['marked'] = 'Graded';
$string['markinmanagerscoursecats'] = 'Marking Manager - Course Categories';
$string['markinmanagerscoursecatsdesc'] = 'Selected the course categories that will be processed by the
Marking Manager block on the Moodle frontpage and dashboard.';
$string['moodledefaultview'] = 'Moodle default view';
$string['moodlegradebook'] = 'Open Moodle Gradebook';
$string['morethan10'] = 'There are more than 10 courses with ungraded work.';
$string['name'] = 'Name';
$string['no'] = 'No';
$string['nograde'] = 'No grade';
$string['notloggedin'] = '- no login for';
$string['notsubmittedany'] = '- no submission for';
$string['opengradereport'] = 'Open grade report';
$string['opensitesettingspage'] = 'Open site settings page';
$string['overallfailinggrade'] = '- grade less than';
$string['pagelayout'] = 'Page layout';
$string['pageload'] = 'Page load';
$string['pluginname'] = 'NED Marking Manager';
$string['pluginnametext'] = 'Plug-in name';
$string['plugintitle'] = 'Marking Manager';
$string['posts'] = 'Posts';
$string['progressreport'] = 'Progress Report';
$string['quiz'] = 'Quiz';
$string['rating'] = 'Rating';
$string['refreshmodecourse'] = 'Block refresh mode - Course';
$string['refreshmodefrontpage'] = 'Block refresh mode - Frontpage';
$string['refreshnow'] = 'Refresh now';
$string['removeoverride'] = 'Remove override';
$string['replies'] = 'Replies';
$string['reportslink'] = 'Reports';
$string['save'] = 'Save';
$string['saved'] = 'Draft';
$string['scale'] = 'Scale';
$string['sectiontitles'] = 'Section titles';
$string['selectcategories'] = 'Select categories';
$string['selectedcourses'] = 'Selected courses (below)';
$string['setblocktitle'] = 'Set block title';
$string['setnumberofdays'] = 'Set number of days';
$string['setpercentmarks'] = 'Set percent of marks';
$string['show'] = 'Show';
$string['showcourselink'] = 'Course link';
$string['showgradebook'] = 'Gradebook';
$string['showgradeslink'] = 'Progress Report';
$string['showmarked'] = 'Marked Activities';
$string['shownotloggedinuser'] = 'Show not logged in user';
$string['showonlineeditor'] = 'Show online editor';
$string['showreportslink'] = 'Student List';
$string['showsaved'] = 'Show draft activities';
$string['showstudentmarkslessthanfiftypercent'] = 'Show no of student marks less than 50 percent';
$string['showstudentnotsubmittedassignment'] = 'Show no of student not submitted assignment';
$string['showtopmessage'] = 'Show message above interface';
$string['showunmarked'] = 'Requires Grading';
$string['showunsubmitted'] = 'Unsubmitted Activities';
$string['simplegradebook'] = 'Progress Report';
$string['sort'] = 'Sort';
$string['student'] = 'Student';
$string['student_have_posted'] = 'The following students have posted to this forum:';
$string['studentlist'] = 'Student List';
$string['studentssubmission'] = 'Student\'s Submission';
$string['successful'] = 'Successful';
$string['teachersfeedback'] = 'Teacher\'s Feedback';
$string['title:failingwithgradelessthanxpercent'] = 'The following students have an overall grade less than';
$string['title:markslessthanxpercent'] = 'The Following Students Have Not Submitted Any Activities For';
$string['title:notlogin'] = 'The Following Students Have Not Logged in For';
$string['title:notsubmittedanyactivity'] = 'The Following Students Have Not Submitted Any Activities For';
$string['title:saved'] = 'The Following Students Have Draft Activities';
$string['topmessage'] = 'Message to show';
$string['ttmarking'] = 'Marking Interface';
$string['type'] = 'Type';
$string['unmarked'] = 'Requires Grading';
$string['unsubmitted'] = 'Not Submitted';
$string['updatecache'] = 'Update Cache';
$string['updatecachewarning'] = 'Would you like to refresh the Marking Manager block?';
$string['version'] = 'Version';
$string['view'] = 'View';
$string['visitpluginhome'] = 'Vist plugin home page';
$string['whocanrate'] = 'Who can rate';
$string['yes'] = 'Yes';
