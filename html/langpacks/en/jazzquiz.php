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
 * Strings for component 'jazzquiz', language 'en', version '3.11'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} responded';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} voted';
$string['a_responses'] = '{$a} responses';
$string['a_students_answered'] = '<b>{$a}</b> students answered at least one question.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> students joined the quiz.';
$string['add'] = 'Add';
$string['add_question'] = 'Add question';
$string['add_to_quiz'] = 'Add to quiz';
$string['allow_guests'] = 'Allow guests';
$string['anonymous'] = 'Anonymous';
$string['anonymous_answers'] = 'Anonymous answers (Attendance can be seen)';
$string['anonymous_answers_info'] = 'Answers are anonymized in this session. Your attendance is still recorded.';
$string['answer'] = 'Answer';
$string['attempt_started'] = 'An attempt has already been started by you, please click below to continue to your open attempt';
$string['attempts'] = 'Attempts';
$string['attendance'] = 'Attendance';
$string['attendance_list'] = 'Attendance list';
$string['click_to_show_original_results'] = 'Click to show original results';
$string['click_to_show_vote_results'] = 'Click to show vote results';
$string['closing_session'] = 'Closing session...';
$string['create_new_question'] = 'Create new question';
$string['default_question_time'] = 'Default question time';
$string['default_question_time_help'] = 'The default time to display each question.<br>This can be overridden by individual questions.';
$string['delete_question'] = 'Delete question {$a}';
$string['download_attendance_list'] = 'Download attendance list';
$string['download_report'] = 'Download report';
$string['download_responses'] = 'Download responses';
$string['edit'] = 'Edit';
$string['edit_page_open_session_error'] = 'You cannot edit the quiz while a session is open.';
$string['edit_question'] = 'Edit question';
$string['end'] = 'End';
$string['error_getting_current_results'] = 'There was an error getting current results.';
$string['error_getting_vote_results'] = 'There was an error getting the vote results.';
$string['error_saving_vote'] = 'There was an error saving your vote.';
$string['error_starting_vote'] = 'There was an error starting the vote.';
$string['error_with_request'] = 'There was an error with the request.';
$string['event_attempt_started'] = 'Attempt started';
$string['event_question_answered'] = 'Question answered for attempt';
$string['exit'] = 'Exit';
$string['failed_to_end_question'] = 'Failed to end the question.';
$string['fullscreen'] = 'Fullscreen';
$string['fully_anonymous'] = 'Fully anonymous';
$string['fully_anonymous_info'] = 'Both answers and attendance are fully anonymized in this session.';
$string['goto_session'] = 'Go to session in progress';
$string['improvise'] = 'Improvise';
$string['instructions_for_instructor'] = '<h3>Please make sure to read the instructions:</h3>
    <p>There are hotkeys available, which can be used when an input field is not focused.</p>
    <table>
        <tr>
               <th>Control</th>
               <th>Hotkey</th>
               <th>Description</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Re-poll
            </td>
            <td>r</td>
            <td>
                Allows the instructor to re-poll the question that was just asked.
                This is the same as starting a question from the <i class="fa fa-bars"></i> Jump dropdown list.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Vote
            </td>
            <td>v</td>
            <td>
                 Let the students vote on their answers.
                 The instructor can click on an answer to toggle whether it should be included in the vote or not.
                 Clicking on the bar of the answer will start a merge from that answer.
                 Note that this bar will consume the bar you click on next.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvise
            </td>
            <td>i</td>
            <td>
                Shows a list of questions made for improvising. Write the question on the blackboard and ask for input with these questions.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Jump
            </td>
            <td>j</td>
            <td>
                Shows a list of all the questions planned for the quiz.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Next
            </td>
            <td>n</td>
            <td>
                Continue on to the next question in the list of planned questions.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> End
            </td>
            <td>e</td>
            <td>
                End the current question.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Fullscreen
            </td>
            <td>f</td>
            <td>
                Show the results in fullscreen. The answers will not appear during a question, so you can keep this up throughout the session.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Answer
            </td>
            <td>a</td>
            <td>
                Gives the instructor a view of the question with the correct response selected.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Responses
            </td>
            <td>t (toggle)</td>
            <td>
                Hide or show the students\' answers.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Quit
            </td>
            <td></td>
            <td>
                Exit the current quiz session.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Please wait for the instructor to start the quiz.</p>';
$string['instructor_sessions_going'] = 'There is a session already in progress. Please click the button below to go to the session';
$string['invalid_question_time'] = 'Question time must be an integer of 0 or above';
$string['jazzquiz:addinstance'] = 'Add an instance of jazzquiz';
$string['jazzquiz:attempt'] = 'Attempt a JazzQuiz';
$string['jazzquiz:control'] = 'Control a JazzQuiz. (Usually for instructors only)';
$string['jazzquiz:editquestions'] = 'Edit questions for a JazzQuiz.';
$string['jazzquiz:seeresponses'] = 'View other student responses to grade them';
$string['jazzquizsettings'] = 'General JazzQuiz settings';
$string['join_quiz'] = 'Join Quiz';
$string['join_quiz_instructions'] = 'Click below to join the quiz';
$string['jump'] = 'Jump';
$string['loading'] = 'Loading...';
$string['modulename'] = 'JazzQuiz';
$string['modulename_help'] = '<p>
    The JazzQuiz activity enables an instructor to create and administer quizzes in real-time. All regular quiz question types can be used in the JazzQuiz.
</p>
<p>
    The instructor has the ability to jump to different questions while running a session.
    Responses are shown live in a bar graph, optimized for projectors. Fullscreen mode is also available.
    A time limit may be set to automatically end the question, or the instructor can manually end the question and move on to the next one.
</p>';
$string['modulenameplural'] = 'JazzQuizzes';
$string['multichoice_options'] = 'Multichoice Options';
$string['next'] = 'Next';
$string['no_attempts_found'] = 'No attempts found.';
$string['no_session'] = 'There is no open session';
$string['no_sessions_exist'] = 'No sessions exist yet.';
$string['no_students_have_joined'] = 'No students have joined.';
$string['no_time_limit'] = 'No time limit';
$string['no_time_limit_help'] = 'Check this field to have no timer on this question. <p>The instructor will then be required to click the end question button for the question to end</p>';
$string['nonanonymous_session'] = 'Non-anonymous session';
$string['nonanonymous_session_info'] = 'This is a non-anonymous session. Both your attendance and answers are recorded.';
$string['one_student_has_joined'] = '1 student has joined.';
$string['pluginadministration'] = 'JazzQuiz administration';
$string['pluginname'] = 'JazzQuiz';
$string['privacy:metadata:core_question'] = 'The JazzQuiz activity stores question usage information in the core_question subsystem.';
$string['privacy:metadata:jazzquiz_attempts'] = 'Details about the quiz attempt for a JazzQuiz session.';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Whether or not the last question that was asked has been answered.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'The time that the last question in the attempt was finished.';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'The time that the last question in the attempt was modified.';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'The time that the last question in the attempt was started.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'The user who made the attempt.';
$string['question'] = 'Question';
$string['question_move_down'] = 'Move question {$a} down';
$string['question_move_up'] = 'Move question {$a} up';
$string['question_time'] = 'Question time';
$string['question_time_help'] = 'Question time in seconds.';
$string['question_will_end_in_x_seconds'] = 'The question will end in {$a} seconds';
$string['question_will_start_in_x_seconds'] = 'The question will start in {$a} seconds';
$string['question_will_start_now'] = 'The question will start now';
$string['questions'] = 'Questions';
$string['quit'] = 'Quit';
$string['quiz_not_running'] = '<p>Wait for your teacher to start the quiz.</p><p>Use the reload button to check if it has started.</p>';
$string['repoll'] = 'Re-poll';
$string['reports'] = 'Reports';
$string['responses'] = 'Responses';
$string['review'] = 'Review';
$string['save_question'] = 'Save question';
$string['select_session'] = 'Select session to review:';
$string['session'] = 'Session';
$string['session_closed'] = 'Session is now closed';
$string['session_name'] = 'Session name';
$string['session_name_required'] = 'The session name is required';
$string['short_answer'] = 'Short answer';
$string['short_math_answer'] = 'Short math answer';
$string['showing_original_results'] = 'Showing original results';
$string['showing_vote_results'] = 'Showing vote results';
$string['start_session'] = 'Start Session';
$string['startquiz'] = 'Start quiz';
$string['student'] = 'Student';
$string['teacher_start_instructions'] = '<p>Start a quiz for the students to take.</p><p>Define a session name below to help when looking through the results at a later date.</p>';
$string['unable_to_create_session'] = 'Unable to create session';
$string['view'] = 'View';
$string['vote'] = 'Vote';
$string['wait_for_instructor'] = 'Please wait for the instructor to start the next question.';
$string['wait_for_question_time'] = 'Wait for question time';
$string['wait_for_question_time_help'] = 'The time to wait for a question to start.';
$string['wait_for_students'] = 'Waiting for students to connect';
$string['x_seconds_left'] = '{$a}s left';
$string['x_students_have_joined'] = '{$a} students have joined.';
$string['you_already_voted'] = 'Sorry, but you have already voted.';
