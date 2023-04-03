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
 * Strings for component 'adaptivequiz', language 'en', version '3.11'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Estimated ability';
$string['abilityestimated_help'] = 'The estimated ability of a test-taker aligns with the question difficulty at which the test-taker has a 50% probability of answering the question correctly. To identify the performance level, match the ability value with the questions level range (see the range after the \'/\' symbol).';
$string['activityreports'] = 'Attempts report';
$string['adaptivequiz:addinstance'] = 'Add a new adaptive quiz';
$string['adaptivequiz:attempt'] = 'Attempt adaptive quiz';
$string['adaptivequiz:reviewattempts'] = 'Review adaptive quiz submissions';
$string['adaptivequiz:viewreport'] = 'View adaptive quiz reports';
$string['adaptivequizname'] = 'Name';
$string['adaptivequizname_help'] = 'Enter the name of the Adaptive Quiz instance';
$string['all_attempts_deleted'] = 'All Adaptive Quiz attempts were deleted';
$string['all_grades_removed'] = 'All Adaptive Quiz grades were removed';
$string['answer'] = 'Answer';
$string['answerdistgraph_numrightwrong'] = 'Num wrong (-)  /  Num right (+)';
$string['answerdistgraph_questiondifficulty'] = 'Question level';
$string['answerdistgraph_right'] = 'Right';
$string['answerdistgraph_title'] = 'Answer distribution for {$a->firstname} {$a->lastname}';
$string['answerdistgraph_wrong'] = 'Wrong';
$string['answers_display_name'] = 'Answers';
$string['attempt_questiondetails'] = 'Question Details';
$string['attempt_state'] = 'Attempt state';
$string['attempt_summary'] = 'Attempt Summary';
$string['attempt_user'] = 'User';
$string['attemptclosed'] = 'The attempt has been manually closed.';
$string['attemptclosedstatus'] = 'Manually closed by {$a->current_user_name} (user-id: {$a->current_user_id}) on {$a->now}.';
$string['attemptdeleted'] = 'Attempt deleted for {$a->name} submitted on {$a->timecompleted}';
$string['attemptfeedback'] = 'Attempt feedback';
$string['attemptfeedback_help'] = 'The attempt feedback is displayed to the user once the attempt is finished';
$string['attemptfeedbackdefaulttext'] = 'You\'ve finished the attempt, thank you for taking the quiz!';
$string['attemptfinishedtimestamp'] = 'Attempt finish time';
$string['attemptfirst'] = 'First attempt';
$string['attemptlast'] = 'Last attempt';
$string['attemptnofirstquestion'] = 'Sorry, but couldn\'t define the first question to start the attempt, the quiz is possibly misconfigured.';
$string['attemptquestion_ability'] = 'Ability Measure';
$string['attemptquestion_abilitylogits'] = 'Measured Ability (logits)';
$string['attemptquestion_difficulty'] = 'Question Difficulty (logits)';
$string['attemptquestion_diffsum'] = 'Difficulty Sum';
$string['attemptquestion_error'] = 'Standard Error (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Question Level';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Right/Wrong';
$string['attemptquestion_stderr'] = 'Standard Error (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Questions progress: {$a}';
$string['attemptquestionsprogress_help'] = 'The maximum number of questions displayed here is not necessarily the number of questions you have to take during the quiz. It is the MAXIMUM POSSIBLE number of questions you might take, the quiz may finish earlier if the ability measure is sufficiently defined.';
$string['attemptsallowed'] = 'Attempts allowed';
$string['attemptsallowed_help'] = 'The number of times a student may attempt this activity';
$string['attemptstarttime'] = 'Attempt start time';
$string['attemptstate'] = 'State of attempt';
$string['attemptstopcriteria'] = 'Reason for stopping attempt';
$string['attemptsusernoprevious'] = 'You haven\'t attempted this quiz yet.';
$string['attemptsuserprevious'] = 'Your previous attempts';
$string['attempttotaltime'] = 'Total time (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Back to all questions';
$string['bestscore'] = 'Best Score';
$string['bestscorestderror'] = 'Standard Error';
$string['browsersecurity'] = 'Browser security';
$string['browsersecurity_help'] = 'If "Full screen pop-up with some JavaScript security" is selected the quiz will only start if the student has a JavaScript-enabled web-browser, the quiz appears in a full screen popup window that covers all the other windows and has no navigation controls and students are prevented, as far as is possible, from using facilities like copy and paste';
$string['calcerrorwithinlimits'] = 'Calculated standard error of {$a->calerror} is within the limits imposed by the activity {$a->definederror}';
$string['closeattempt'] = 'Close attempt';
$string['completionattemptcompletedcminfo'] = 'Complete an attempt';
$string['completionattemptcompletedform'] = 'Student must have al least one completed attempt on this activity';
$string['confirmcloseattempt'] = 'Are you sure that you wish to close and finalize this attempt of {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} questions were answered and the score so far is {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'This attempt was started on {$a->started} and last updated on {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirming the deletion of attempt from {$a->name} submitted on {$a->timecompleted}';
$string['deleteattemp'] = 'Delete attempt';
$string['discrimination_display_name'] = 'Discrimination';
$string['downloadcsv'] = 'Download CSV';
$string['enterrequiredpassword'] = 'Enter required password';
$string['errorattemptstate'] = 'There was an error in determining the state of the attempt';
$string['errorclosingattempt_alreadycomplete'] = 'This attempt is already complete, it cannot be manually closed.';
$string['errorfetchingquest'] = 'Unable to fetch a question for level {$a->level}';
$string['errorlastattpquest'] = 'Error checking the response value for the last attempted question';
$string['errornumattpzero'] = 'Error with number of questions attempted equals zero, but user submitted an answer to previous question';
$string['errorsumrightwrong'] = 'Sum of correct and incorrect answers does not equal the total number of questions attempted';
$string['eventattemptcompleted'] = 'Attempt completed';
$string['formelementdecimal'] = 'Input a decimal number.  Maximum 10 digits long and maximum 5 digits to the right of the decimal point';
$string['formelementempty'] = 'Input a positive integer from 1 to 999';
$string['formelementnegative'] = 'Input a positive number from 1 to 999';
$string['formelementnumeric'] = 'Input a numeric value from 1 to 999';
$string['formlowlevelgreaterthan'] = 'Lowest level must be less than highest level';
$string['formminquestgreaterthan'] = 'Minimum number of questions must be less than maximum number of questions';
$string['formquestionpool'] = 'Select at least one question category';
$string['formstartleveloutofbounds'] = 'The starting level must be a number that is inbetween the lowest and highest level';
$string['formstderror'] = 'Must enter a percent less than 50 and greater than or equal to 0';
$string['functiondisabledbysecuremode'] = 'That functionality is currently disabled';
$string['gradehighest'] = 'Highest grade';
$string['grademethod'] = 'Grading method';
$string['grademethod_help'] = 'When multiple attempts are allowed, the following methods are available for calculating the final quiz grade:

* Highest grade of all attempts
* First attempt (all other attempts are ignored)
* Last attempt (all other attempts are ignored)';
$string['graphlegend_error'] = 'Standard Error';
$string['graphlegend_target'] = 'Target Level';
$string['highestlevel'] = 'Highest level of difficulty';
$string['highestlevel_help'] = 'The highest or most difficult level the assessment can select questions from.  During an attempt the activity will not go beyond this level of difficulty';
$string['highlevelusers'] = 'Users above the question-level';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Individual user attempts report for {$a}';
$string['leveloutofbounds'] = 'Requested level {$a->level} out of bounds for the attempt';
$string['lowestlevel'] = 'Lowest level of difficulty';
$string['lowestlevel_help'] = 'The lowest or least difficult level the assessment can select questions from.  During an attempt the activity will not go beyond this level of difficulty';
$string['lowlevelusers'] = 'Users below the question-level';
$string['maximumquestions'] = 'Maximum number of questions';
$string['maximumquestions_help'] = 'The maximum number of questions the student can attempt';
$string['maxquestattempted'] = 'Maximum number of questions attempted';
$string['midlevelusers'] = 'Users near the question-level';
$string['minimumquestions'] = 'Minimum number of questions';
$string['minimumquestions_help'] = 'The minimum number of questions the student must attempt';
$string['missingtagprefix'] = 'Missing tag prefix';
$string['modformshowattemptprogress'] = 'Show quiz progress to students';
$string['modformshowattemptprogress_help'] = 'When selected, during attempt, a student will see a progress bar depicting how many questions are answered out of the maximum number.';
$string['modulename'] = 'Adaptive Quiz';
$string['modulename_help'] = 'The Adaptive Quiz activity enables a teacher to create quizes that efficiently measure the takers\' abilities. Adaptive quizes are comprised  of questions selected from the question bank that are tagged with a score of their difficulty. The questions are chosen to match the estimated ability level of the  current test-taker. If the test-taker succeeds on a question, a more challenging question is presented next. If the test-taker answers a question incorrectly, a less-challenging question is presented next. This technique will develop into a sequence of questions converging on the test-taker\'s effective ability level. The quiz stops when the test-taker\'s ability is determined to the required accuracy.

This activity is best suited to determining an ability measure along a unidimensional scale. While the scale can be very broad, the questions must all provide a measure of ability or aptitude on the same scale. In a placement test for example, questions low on the scale that novices are able to answer correctly should also be answerable by experts, while questions higher on the scale should only be answerable by experts or a lucky guess. Questions that do not discriminate between takers of different abilities on will make the test ineffective and may provide inconclusive results.

Questions used in the Adaptive Quiz must

 * be automatically scored as correct/incorrect
 * be tagged with their difficulty using \'adpq_\' followed by a positive integer that is within the range for the quiz

The Adaptive Quiz can be configured to

 * define the range of question-difficulties/user-abilities to be measured. 1-10, 1-16, and 1-100 are examples of valid ranges.
 * define the precision required before the quiz is stopped. Often an error of 5% in the ability measure is an appropriate stopping rule
 * require a minimum number of questions to be answered
 * require a maximum number of questions that can be answered

This description and the testing process in this activity are based on <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Adaptive Quiz';
$string['na'] = 'n/a';
$string['name'] = 'Name';
$string['noattemptsallowed'] = 'No more attempts allowed at this activity';
$string['nonewmodules'] = 'No Adaptive Quiz instances found';
$string['nopermission'] = 'You don\\t have permission to view this resource';
$string['notinprogress'] = 'This attempt is not in progress.';
$string['notyourattempt'] = 'This is not your attempt at the activity';
$string['numofattemptshdr'] = 'Number of attempts';
$string['numright'] = 'Num right';
$string['numwrong'] = 'Num wrong';
$string['percent_correct_display_name'] = '% Correct';
$string['pluginadministration'] = 'Adaptive Quiz';
$string['pluginname'] = 'Adaptive Quiz';
$string['question_report'] = 'Question Analysis';
$string['questionanalysisbtn'] = 'Question Analysis';
$string['questionnumber'] = 'Question #';
$string['questionpool'] = 'Question pool';
$string['questionpool_help'] = 'Select the question category(ies) where the activity will pull questions from during an attempt.';
$string['questions_report'] = 'Questions Report';
$string['questionsattempted'] = 'Sum of questions attempted';
$string['questionspoolerrornovalidstartingquestions'] = 'The selected questions categories do not contain questions which are properly tagged to match the selected starting level of difficulty.';
$string['recentactquestionsattempted'] = 'Questions attempted: {$a}';
$string['recentattemptstate'] = 'State of attempt:';
$string['recentcomplete'] = 'Completed';
$string['recentinprogress'] = 'In progress';
$string['reportattemptanswerdistributiontab'] = 'Answer Distribution';
$string['reportattemptanswerdistributiontabletitle'] = 'Table View of Answer Distribution';
$string['reportattemptgraphtab'] = 'Attempt Graph';
$string['reportattemptgraphtabletitle'] = 'Table View of Attempt Graph';
$string['reportattemptquestionsdetailstab'] = 'Questions Details';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - reviewing attempt by {$a->fullname} submitted on {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'all users who ever made attempts';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsenrolledwithattempts'] = 'participants who made attempts';
$string['reportattemptsenrolledwithnoattempts'] = 'participants without attempts made';
$string['reportattemptsfilterformheader'] = 'Filtering';
$string['reportattemptsfilterformsubmit'] = 'Filter';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Include users with inactive enrolments';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Whether include users with suspended enrolments.';
$string['reportattemptsfilterusers'] = 'Show';
$string['reportattemptsnotenrolled'] = 'not enrolled users who made attempts';
$string['reportattemptspersistentfilter'] = 'Persistent filter';
$string['reportattemptspersistentfilter_help'] = 'When checked, the filter settings below will be stored when submitted, and then applied each time you visit the report page.';
$string['reportattemptsprefsformheader'] = 'Report Preferences';
$string['reportattemptsprefsformsubmit'] = 'Apply';
$string['reportattemptsresetfilter'] = 'Reset filter';
$string['reportattemptsshowinitialbars'] = 'Show initials bar';
$string['reportattemptsummarytab'] = 'Attempt Summary';
$string['reportattemptsusersperpage'] = 'Number of users displayed:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - individual user attempts report for {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - questions report';
$string['reportuserattemptstitleshort'] = '{$a}\'s attempts';
$string['requirepassword'] = 'Required password';
$string['requirepassword_help'] = 'Students are required to enter a password before beginning their attempt';
$string['requirepasswordmessage'] = 'To attempt this quiz you need to know the quiz password';
$string['resetadaptivequizsall'] = 'Delete all Adaptive Quiz attempts';
$string['result'] = 'Result';
$string['reviewattempt'] = 'Review attempt';
$string['reviewattemptreport'] = 'Reviewing attempt by {$a->fullname} submitted on {$a->finished}';
$string['score'] = 'Score';
$string['showabilitymeasure'] = 'Show ability measure to students';
$string['showabilitymeasure_help'] = 'Sometimes it may be useful to reveal ability estimations to students after taking an adaptive quiz. With this setting enabled a student may see ability estimation in the attempts summary and right after finishing an attempt as well.';
$string['standarderror'] = 'Standard Error to stop';
$string['standarderror_help'] = 'When the amount of error in the measure of the user\'s ability drops below this amount, the quiz will stop. Tune this value from the default of 5% to require more or less precision in the ability measure';
$string['standarderrorhdr'] = 'Standard error';
$string['startattemptbtn'] = 'Start attempt';
$string['startinglevel'] = 'Starting level of difficulty';
$string['startinglevel_help'] = 'The the student begins an attempt, the activity will randomly select a question matching the level of difficulty';
$string['statistic'] = 'Statistic';
$string['stopingconditionshdr'] = 'Stopping conditions';
$string['submitanswer'] = 'Submit answer';
$string['times_used_display_name'] = 'Times Used';
$string['updateattempterror'] = 'Error trying to update attempt record';
$string['user'] = 'User';
$string['value'] = 'Value';
$string['wrongpassword'] = 'Password is incorrect';
