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
 * Strings for component 'qcreate', language 'en', version '4.1'.
 *
 * @package     qcreate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Activity is closed.';
$string['activitygrade'] = 'You have been awarded a total grade of {$a->grade} / {$a->outof} for this activity.';
$string['activityname'] = 'Activity name';
$string['activityopen'] = 'Activity is open.';
$string['addminimumquestionshdr'] = 'Required Number of Questions of Type (optional)';
$string['addmorerequireds'] = 'Add more required question types';
$string['allandother'] = 'To allow all question types, check \'{$a}\' and don\'t check anything else.';
$string['allowall'] = 'Allow all question types';
$string['allowedqtypes'] = 'Graded Question Types';
$string['allowedqtypes_help'] = 'Here you specify the type of questions that are allowed. If you select \'Allow all question types\', then students can make any type of question up to the total specified in \'Total Questions Graded\'.';
$string['allquestions'] = '0 - (All questions)';
$string['alreadydone'] = 'You\'ve done {$a} questions of this type.';
$string['alreadydoneextra'] = 'You\'ve done {$a} extra questions of this type.';
$string['alreadydoneextraone'] = 'You\'ve done one extra question of this type.';
$string['alreadydoneone'] = 'You\'ve done one question of this type.';
$string['and'] = '{$a} AND';
$string['andmorenewquestions'] = 'and {$a} more new question(s).';
$string['attemptqcreatenow'] = 'Attempt question creation now';
$string['automaticgrade'] = 'You have been awarded an automatic grade of {$a->grade} / {$a->outof} for these questions, since you have done {$a->done} of {$a->required} required questions.';
$string['availability'] = 'Availability';
$string['betterthangrade'] = 'Questions with <strong>manual</strong> grade equal or better than';
$string['clickhere'] = 'Click here to create a question of \'{$a}\' type.';
$string['clickhereanother'] = 'Click here to create another question of \'{$a}\' type.';
$string['close'] = 'Close activity';
$string['closebeforeopen'] = 'Could not update the question creation activity. You have specified a close date before the open date.';
$string['closeon'] = 'Close on';
$string['comma'] = '{$a},';
$string['comment'] = 'Comment';
$string['completionquestions'] = 'Student must create:';
$string['completionquestions_help'] = 'If enabled, this activity is considered complete when the student has created that number of questions (graded or not).';
$string['completionquestionsdesc'] = 'Student must create at least {$a} question/questions';
$string['completionquestionsgroup'] = 'Require questions';
$string['confirmdeletequestion'] = 'Are you sure you want to delete this question?';
$string['createdquestions'] = 'Created questions';
$string['creating'] = 'Creating Questions';
$string['deletegrades'] = 'Delete questions created and manual grades';
$string['donequestionno'] = 'You\'ve completed {$a->done} of {$a->no} questions of type \'{$a->qtypestring}\'. These are listed below.';
$string['eventeditpageviewed'] = 'Question creation edit page viewed';
$string['eventoverviewviewed'] = 'Question creation overview viewed';
$string['eventquestiongraded'] = 'Question graded';
$string['eventquestionregraded'] = 'Question regraded';
$string['exportgood'] = 'Export good questions';
$string['exportgoodquestions'] = 'Export Questions Which Have Been Graded Above a Selected Grade';
$string['exportnaming'] = 'Prefix Exported Question Names With';
$string['exportquestions'] = 'Export questions to file';
$string['exportselection'] = 'Export only these questions';
$string['extraqdone'] = 'You\'ve done one extra question.';
$string['extraqgraded'] = 'One question of any of the types below will be graded';
$string['extraqsdone'] = 'You\'ve done {$a->extraquestionsdone} extra questions.';
$string['extraqsgraded'] = '{$a->extrarequired} questions of any of the types below will be graded';
$string['finalgrade'] = 'Final grade for {$a}';
$string['fullstop'] = '{$a}.';
$string['grade'] = 'Grade';
$string['grade_help'] = 'This is the total grade for the activity that is reported to the gradebook. It is possible to set \'No grade\' so that the the activity is not graded.';
$string['gradeallautomatic'] = 'Grades are completely automatic, no manual grading.';
$string['gradeallmanual'] = 'Grading is completely manual, no automatic grading.';
$string['gradeavailablehtml'] = '{$a->username} has graded your created question
\'<i>{$a->questionname}</i>\' for \'<i>{$a->qcreate}</i>\'<br /><br />
You can see it on the <a href="{$a->url}">activity page</a>.';
$string['gradeavailablesmall'] = '{$a->username} has graded your created question for {$a->qcreate}';
$string['gradeavailabletext'] = '{$a->username} has graded your created question \'{$a->questionname}\' for \'{$a->qcreate}\'

You can see it on the activity page:

    {$a->url}';
$string['gradecomment'] = 'Comment for question \'{$a->qname}\' created by {$a->user}';
$string['graded'] = 'Graded';
$string['grademixed'] = 'Grading is {$a->automatic}%% automatic, {$a->manual}%% manual.';
$string['gradequestions'] = 'Grade questions';
$string['graderatio'] = 'Ratio of Automatic / Manual Grading';
$string['graderatio_help'] = 'Here you specify how the total Grade will be divided: the percentage for the Automatic grade is on the left, and the Manual grade is on the right. The automatic grade is the grade \'given\' by the system for simply making a question.';
$string['graderatiois'] = 'Ratio of Automatic / Manual Grading: {$a}';
$string['graderatiooptions'] = '{$a->automatic} / {$a->manual}';
$string['gradesdeleted'] = 'Questions and manual grades removed';
$string['grading'] = 'Grading';
$string['indicator:cognitivedepth'] = 'Question creation cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in a Question creation activity.';
$string['indicator:socialbreadth'] = 'Question creation social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in a Question creation activity.';
$string['intro'] = 'Introduction';
$string['invalidqcreatezid'] = 'Invalid question creation ID';
$string['manualgrade'] = 'A teacher has awarded you a grade of {$a->grade} / {$a->outof} for the questions you have done.';
$string['marked'] = 'Marked';
$string['messageprovider:gradernotification'] = 'Created question notification';
$string['messageprovider:studentnotification'] = 'Graded question notification';
$string['minimumquestions'] = 'Minimum Questions';
$string['minimumquestions_help'] = 'In this menu you can specify how many questions of a specific type students should create.';
$string['modulename'] = 'Question Creation';
$string['modulename_help'] = 'The question creation activity enables a teacher to ask students to create questions, number of required quesions, avaiblable question types and number of required questions for each question type can be specified.';
$string['modulename_link'] = 'mod/qcreate/view';
$string['modulenameplural'] = 'Question Creations';
$string['needsgrading'] = 'Needs grading';
$string['needsregrading'] = 'Needs regrading';
$string['needtoallowatleastoneqtype'] = 'You need to allow at least one question type';
$string['needtoallowqtype'] = 'You need to allow question type \'{$a}\' if you want to require a minimum no of questions of this type need to be created.';
$string['newquestions'] = 'New questions created';
$string['noofquestionstotal'] = 'Total Questions Graded';
$string['noofquestionstotal_help'] = 'This is the total number of questions that students must create. This number must be equal to or greater than the minimum number of questions required';
$string['noquestions'] = 'No questions have been created.';
$string['noquestionsabove'] = 'There are no questions with a manual grade set above {$a->betterthan} in category \'{$a->categoryname}\'.';
$string['notgraded'] = 'Not graded yet';
$string['nothingtosave'] = 'Nothing to save';
$string['notifications'] = 'Notifications';
$string['nousers'] = 'No users enrolled in this course / in this group.';
$string['open'] = 'Open activity';
$string['open_help'] = 'You can specify times when the question creation activity is accessible for people to make questions. Before the opening time, and after the closing time, students will be unable to create questions.';
$string['openafterclose'] = 'Could not update the question creation activity. You have specified an open date after the close date.';
$string['openclosedatesupdated'] = 'Question creation activity open and close dates updated';
$string['openmustbemorethanclose'] = 'Time to open activity must be before time to close activity';
$string['openon'] = 'Open on';
$string['overview'] = 'Overview';
$string['pagesize'] = 'Number of questions to show per page';
$string['pluginadministration'] = 'Question creation Administration';
$string['pluginname'] = 'Question creation';
$string['preview'] = 'Preview';
$string['previewquestion'] = 'Preview question';
$string['qcreate'] = 'qcreate';
$string['qcreate:addinstance'] = 'Add a question creation instance';
$string['qcreate:grade'] = 'Grade question';
$string['qcreate:receivegradernotifications'] = 'Receive grader notifications';
$string['qcreate:receivestudentnotifications'] = 'Receive student notifications';
$string['qcreate:submit'] = 'Submit question';
$string['qcreate:view'] = 'View question creation activity';
$string['qcreatecloses'] = 'Question creation activity closes';
$string['qcreateeventcloses'] = '{$a} closes';
$string['qcreateeventopens'] = '{$a} opens';
$string['qcreateopens'] = 'Question creation activity opens';
$string['qsgraded'] = '{$a} question(s) of any of these types will be graded :';
$string['qtype'] = 'Question Type';
$string['qtype_help'] = 'In this menu you can specify what type of question students should create.';
$string['questiongrade'] = 'Grade for question \'{$a->qname}\' created by {$a->user}';
$string['questions'] = 'question(s) to complete this activity';
$string['questionscreated'] = '{$a} question(s) created';
$string['questiontogradehtml'] = '{$a->username} has created a new question <i>\'{$a->questionname}\'</i>
for <i>\'{$a->qcreate}\'  at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['questiontogradesmall'] = '{$a->username} has created a new question for {$a->qcreate}.';
$string['questiontogradetext'] = '{$a->username} has created a new question \'{$a->questionname}\'
for \'{$a->qcreate}\' at {$a->timeupdated}

It is available here:

    {$a->url}';
$string['requiredanyplural'] = '{$a->no} questions of any question type are required';
$string['requiredanysingular'] = 'A question of any question type is required';
$string['requiredplural'] = '{$a->no} questions of \'{$a->qtypestring}\' question type are required';
$string['requiredquestions'] = 'Required Questions to Create:';
$string['requiredsingular'] = 'A question of \'{$a->qtypestring}\' question type is required';
$string['saveallfeedback'] = 'Save all my feedback';
$string['saveallfeedbackandgrades'] = 'Save all grades & feedback';
$string['search:activity'] = 'Question creation activities';
$string['selectone'] = 'Select One...';
$string['sendgradernotifications'] = 'Notify graders';
$string['sendgradernotifications_help'] = 'If enabled, graders (usually teachers) receive a message whenever a student create a new question. Message methods are configurable.';
$string['sendstudentnotifications'] = 'Notify students';
$string['sendstudentnotifications_help'] = 'If enabled, students receive a message when one of their questions is graded.';
$string['show'] = 'Show';
$string['showgraded'] = 'questions that don\'t need grading';
$string['showneedsregrade'] = 'questions that need regrading';
$string['showungraded'] = 'questions that need grading';
$string['specifictext'] = 'Specific text';
$string['studentaccessaddonly'] = 'create only';
$string['studentaccessedit'] = 'preview, view / save as new and edit / delete';
$string['studentaccessheader'] = 'Student question access';
$string['studentaccesspreview'] = 'preview';
$string['studentaccesssaveasnew'] = 'preview and view / save as new';
$string['studentqaccess'] = 'To own questions';
$string['studentqaccess_help'] = 'Use this menu to define what access rights students have over the questions they create.';
$string['studentshavedone'] = 'Students have created {$a} question(s).';
$string['synchronizeqaccesstask'] = 'Synchronize students questions access capabilities';
$string['timeclose'] = 'Activity closes on {$a->timeclose}';
$string['timeclosed'] = 'Activity closed on {$a}.';
$string['timecreated'] = 'Time question created';
$string['timenolimit'] = 'No time limits set.';
$string['timeopen'] = 'Activity opens on {$a->timeopen}';
$string['timeopenclose'] = 'Activity is open from {$a->timeopen} to {$a->timeclose}';
$string['timeopened'] = 'Activity opened on {$a}.';
$string['timewillclose'] = 'Activity will close on {$a}.';
$string['timewillopen'] = 'Activity will open on {$a}.';
$string['timing'] = 'Activity timing';
$string['todoquestionno'] = 'You\'ve still to do {$a->stillrequiredno} question(s) of type \'{$a->qtypestring}\'.';
$string['totalgrade'] = 'Total grade';
$string['totalgradeis'] = 'Total grade: {$a}';
$string['totalrequiredislessthansumoftotalsforeachqtype'] = 'Total required is less than the sum of the totals graded for each question type.<br />It must be equal or more!';
$string['updategradestask'] = 'Update question creation activity grades';
$string['username'] = 'User name of creator of question';
$string['viewgrading'] = 'Grade questions';
$string['youhavedone'] = 'You have created {$a} question(s).';
$string['youvesetmorethanonemin'] = 'You\'ve set more than one minimum number of questions for question type \'{$a}\'!';
