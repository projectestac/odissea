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
 * Strings for component 'activequiz', language 'en', version '3.11'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Add an instance of activequiz';
$string['activequiz:attempt'] = 'Attempt an active quiz';
$string['activequiz:control'] = 'Control an active quiz. (Usually for instructors only)';
$string['activequiz:editquestions'] = 'Edit questions for an active quiz.';
$string['activequiz:seeresponses'] = 'View other student responses to grade them';
$string['activequiz:viewownattempts'] = 'Allows students to see their own attempts at a quiz';
$string['activequizintro'] = 'Introduction';
$string['activequizsettings'] = 'General Active quiz settings';
$string['activitygrades'] = 'Activity grades:';
$string['addquestion'] = 'Add question';
$string['addtoquiz'] = 'Add';
$string['anonymousresponses'] = 'Anonymize student responses';
$string['anonymousresponses_help'] = 'Anonymize student responses for the instructor\'s view so that if their screen is being shown, student\'s names or group names will not be shown';
$string['anonymoususer'] = 'Anonymous user';
$string['assessed'] = 'Assessed';
$string['assessed_help'] = 'Check this box to make your quiz assessed';
$string['attempt_grade'] = 'Attempt grade';
$string['attemptno'] = 'Attempt Number';
$string['attempts'] = 'Attempts';
$string['attemptstarted'] = 'An attempt has already been started by you, please click below to continue to your open attempt';
$string['attemptstartedalready'] = 'An attempt has already been started by one of your group members';
$string['attemptview'] = 'View attempt';
$string['cantaddquestiontwice'] = 'You can not add the same question more than once to a quiz';
$string['cantinitattempts'] = 'Can\'t initialize attempts for you';
$string['closesession'] = 'Close session';
$string['closingsession'] = 'Closing session...';
$string['countdatasetlabel'] = 'Number of Answers';
$string['defaultquestiontime'] = 'Default question time';
$string['defaultquestiontime_help'] = 'The default time to display each question.<br />
This can be overriden by individual questions.';
$string['edit'] = 'Edit quiz';
$string['editpage_opensession_error'] = 'You cannot edit a quiz question or layout while a session is open.';
$string['enabledquestiontypes'] = 'Enable question types';
$string['enabledquestiontypes_info'] = 'Question types that are enabled for use within instances of the active quiz activity.';
$string['endquestion'] = 'End question';
$string['errorregrade'] = 'Sorry, there was an error in trying to re-grade all of the quizzes';
$string['eventattemptstarted'] = 'Attempt started';
$string['eventattemptviewed'] = 'Attempt viewed';
$string['eventquestionanswered'] = 'Question answered for attempt';
$string['eventquestionmanuallygraded'] = 'Question manually graded';
$string['feedbackintro'] = 'Feedback for your question.  Please wait for the instructor to start the next question';
$string['firstsession'] = 'First session';
$string['fullanonymize'] = 'Fully anonymize student responses';
$string['fullanonymize_help'] = 'Fully anonymize student responses.  Please note, that if you select this option, this session\'s responses will not be graded and applied to students.';
$string['gatheringresults'] = 'Gathering results...';
$string['gotosession'] = 'Go to session in progress';
$string['grademethod'] = 'Session grading method';
$string['grademethod_help'] = 'This is the method that is used when grading.  This method is for figuring out the grading with multiple sessions in the same activequiz';
$string['gradesettings'] = 'Grade settings';
$string['groupattendance'] = 'Allow group attendance';
$string['groupattendance_help'] = 'If this box is enabled, the student taking the quiz can select which students in their group that are in attendance.';
$string['grouping'] = 'Grouping';
$string['grouping_help'] = 'Select the grouping that you\'d like to use for grouping students';
$string['groupmembership'] = 'Group membership';
$string['groupworksettings'] = 'Group settings';
$string['hide_correct_answer'] = 'Hide correct answer';
$string['hidenotresponded'] = 'Hide not responded';
$string['hidestudentresponses'] = 'Hide responses';
$string['highestsessiongrade'] = 'Highest session grade';
$string['indvquestiontime'] = 'Question Time';
$string['indvquestiontime_help'] = 'Question time in seconds.';
$string['instructorquizinst'] = '<p>Please wait on this page until students have connected.  Once <b>start quiz</b> is clicked, the quiz will start the first question</p>
    <p>
<p>Controls:</p>
    <ul>
        <li>
            Re-poll question
            <ul>
                <li>
                    Allows the instructor to re-poll the current or previous question (available during review of a question).
                </li>
            </ul>
        </li>
        <li>
            Next question
            <ul>
                <li>
                    Continue on to the next question (available during review of a question).
                </li>
            </ul>
        </li>
        <li>
            End question
            <ul>
                <li>
                    End the current question. Also allows the instructor to end a timed question early (available while a question is running). <i>If the question has no time limit, the instructor will be required to click <b>end question.</b></i>
                </li>
            </ul>
        </li>
        <li>
            Go to question
            <ul>
                <li>
                    Open a dialog box to direct all users to a specific question in the quiz (available during review of a question).
                </li>
            </ul>
        </li>
        <li>
            Close session
            <ul>
                <li>
                    Closes the current session, as well as all attempts for the students. This will automatically grade all attempts (available at any time).
                </li>
            </ul>
        </li>
        <li>
            Reload results
            <ul>
                <li>
                    Reload the student responses in the information box. Allows the instructor to see how many students or groups have responded and how many have yet to respond (available during review of a question).
                </li>
            </ul>
        </li>
        <li>
            Hide/Show Not Responded
            <ul>
                <li>
                    Hide or show the information box that displays how many students or groups have responded and which students or groups have yet to respond (available when question is polling).
                </li>
            </ul>
        </li>
        <li>
            Show correct answer
            <ul>
                <li>
                    Gives the instructor a view of the question with the correct response selected (available during review of a question). This will not show the correct response for manually graded question types, such as essays or drawing questions.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = 'There is a session already in progress.  Please click the button below to go to the session';
$string['invalid_indvquestiontime'] = 'Question time must be an integer of 0 or above';
$string['invalid_numberoftries'] = 'Number of tries must be an integer of 1 or above';
$string['invalid_points'] = 'Points are required and must be a number greater than 0';
$string['invalidattemptaccess'] = 'You do not have permission to access this attempt';
$string['invalidgroupid'] = 'A valid group id is required for students';
$string['invalidquestionattempt'] = 'Invalid Question ($a->questionname) being added to quiz attempt.';
$string['isanonymous'] = 'All responses to this active quiz are anonymous';
$string['joinquiz'] = 'Join Quiz';
$string['joinquizinstructions'] = 'Click below to join the quiz';
$string['jumptoquesetioninstructions'] = 'Select a question that you\'d like to go to:';
$string['jumptoquestion'] = 'Go to question';
$string['lastsession'] = 'Last session';
$string['loading'] = 'Initializing Quiz';
$string['manualcomment'] = 'Manual Comment';
$string['manualcomment_help'] = 'The comment that instructors can add when grading an attempt';
$string['marks'] = 'Grades';
$string['marks_help'] = 'The numerical grade for each question, and the overall atempt score';
$string['modulename'] = 'Active quiz';
$string['modulename_help'] = '<p>The Active quiz activity enables an instructor to create and administer quizzes in real-time.  All regular quiz question types can be used in the Active Quiz.</p>
<p>Active Quiz allows individual or group participation. Group attendance is possible so points given during the active quiz will only be applied to the participants that attended the session.  Questions can be set to allow multiple attempts. A time limit may be set to automatically end the question, or the instructor can manually end the question and move on to the next one.  The instructor also has the ability to jump to different questions while  running the session. Instructors can monitor group or individual participation, real-time responses of the participants and the question being polled. </p>
<p>Each quiz attempt is marked automatically like a regular quiz (with the exception of essay and PoodLL questions) and the grade is recorded in the gradebook. Grading for group participation can be done automatically by transferring the grade from the single responder to the other group members. </p>
<p>The instructor has options to show hints, give feedback and show correct answers to students upon quiz completion.</p>
<p>Active Quizzes may be used as a vehicle for delivering Team Based Learning inside Moodle.</p>';
$string['modulenameplural'] = 'Active quizzes';
$string['nextquestion'] = 'Next question';
$string['no_questions'] = 'There are no questions added to this quiz.';
$string['nochangegroups'] = 'You cannot change groups after creating sessions or there are no groupings defined for this course.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'There is no feedback for this question';
$string['nosession'] = 'There is no open session';
$string['notime'] = 'No timelimit';
$string['notime_help'] = 'Check this field to have no timer on this question. <p>The instructor will then be required to click the end question button for the question to end</p>';
$string['notresponded'] = 'Number not responded out of attempts';
$string['notries'] = 'You have no tries left for this question';
$string['numberoftries'] = 'Number of tries';
$string['numberoftries_help'] = 'Number of tries for a user to try at a question.  Students will still be bound by the question time limit';
$string['overallgrade'] = 'Overall grade: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Percentage of total answers';
$string['pluginadministration'] = 'Active quiz administration';
$string['pluginname'] = 'Active quiz';
$string['points'] = 'Question Points';
$string['points_help'] = 'The number of points you\'d like this question to be worth';
$string['qdeleteerror'] = 'Couldn\'t delete question';
$string['qdeletesucess'] = 'Successfully deleted question';
$string['qmoveerror'] = 'Couldn\'t move question';
$string['qmovesuccess'] = 'Successfully moved question';
$string['question'] = 'Question';
$string['questiondelete'] = 'Delete question {$a}';
$string['questionedit'] = 'Edit question';
$string['questionfinished'] = 'Question finished, waiting for results';
$string['questionlist'] = 'Question List';
$string['questionmovedown'] = 'Move question {$a} down';
$string['questionmoveup'] = 'Move question {$a} up';
$string['quiznotrunning'] = 'Quiz not running at the moment - wait for your teacher to start it.  Use the reload button to reload this page to check again';
$string['regradeallgrades'] = 'Regrade all grades';
$string['reload_results'] = 'Reload Results';
$string['repollquestion'] = 'Re-poll question';
$string['response_attempt_controls'] = 'Edit/View Attempt';
$string['responses'] = 'View responses';
$string['reviewafter'] = 'After the sessions are closed';
$string['reviewoptionsettings'] = 'Review options';
$string['savequestion'] = 'Save question';
$string['scale'] = 'Maximum Grade';
$string['scale_help'] = 'This value (integer) will scale whatever points that are received on the quiz to this value.';
$string['select_group'] = 'Select your group';
$string['selectsession'] = 'Select session to view:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Session average';
$string['sessionclosed'] = 'Session is now closed';
$string['sessionname'] = 'Session name';
$string['sessionname_required'] = 'The session name is required';
$string['sessionnametext'] = '<span style="font-weight: bold">Session: </span>';
$string['show_correct_answer'] = 'Show correct answer';
$string['showhistoryduringquiz'] = 'Show response history';
$string['showhistoryduringquiz_help'] = 'Show the student/group response history for this question while reviewing responses to a question during a quiz.';
$string['shownotresponded'] = 'Show not responded';
$string['showstudentresponses'] = 'Show responses';
$string['start_session'] = 'Start Session';
$string['startedon'] = 'Started on';
$string['startquiz'] = 'Start quiz';
$string['studentquizinst'] = '<p>Please wait for the instructor to start the quiz.  Once started you will see a timer counting down to the first question start</p>';
$string['successregrade'] = 'Successfully regraded quiz';
$string['teacherjoinquizinstruct'] = 'Use this if you want to try out a quiz yourself<br />(you will also need to start the quiz in a separate window)';
$string['teacherstartinstruct'] = 'Use this to start a quiz for the students to take<br />Use the textbox to define a name for this session (to help when looking through the results at a later date).';
$string['theattempt'] = 'The attempt';
$string['theattempt_help'] = 'Whether the student can review the attempt at all.';
$string['timecompleted'] = 'Time completed';
$string['timemodified'] = 'Time modified';
$string['timertext'] = 'Your question will end and auto-submit in:';
$string['trycount'] = 'You have {$a->tries} tries left.';
$string['unabletocreate_session'] = 'Unable to create sesson';
$string['view'] = 'View quiz';
$string['viewstats'] = 'View quiz stats';
$string['waitforquestion'] = 'Waiting for the question to be sent in:';
$string['waitforquestiontime'] = 'Wait for question time';
$string['waitforquestiontime_help'] = 'The time to wait for a question to start/lead in time.';
$string['waitforrevewingend'] = 'The instructor is currently reviewing the previous question.  Please wait for the next question to start';
$string['waitstudent'] = 'Waiting for students to connect';
$string['workedingroups'] = 'Will work in groups.';
$string['workedingroups_help'] = 'Check this box to indicate that students will work in groups.  Be sure to select a grouping below';
