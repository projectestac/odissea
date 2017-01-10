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

/**
 * External functions backported.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once("$CFG->libdir/externallib.php");
require_once("$CFG->dirroot/local/mobile/futurelib.php");

class local_mobile_external extends external_api {

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     */
    public static function get_plugin_settings_parameters() {
        return new external_function_parameters(
            array()
        );
    }

    /**
     * Get all the plugin settings.
     * PLEASE DO NOT DELETE THIS FUNCTION.
     * The Mobile app relies in this function to detect if the site is using the local_mobile plugin.
     *
     * @return array of settings
     */
    public static function get_plugin_settings() {

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();
        $settings = array();

        $pluginsettings = get_config('local_mobile');
        foreach ($pluginsettings as $key => $val) {
            $settings[] = array(
                'name' => $key,
                'value' => $val,
            );
        }

        $results = array(
            'settings' => $settings,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     */
    public static function get_plugin_settings_returns() {
        return new external_single_structure(
            array(
                'settings' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_NOTAGS, 'setting name'),
                            'value' => new external_value(PARAM_RAW, 'setting value'),
                        )
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_quizzes_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quizzes_by_courses_parameters() {
        return local_mobile_mod_quiz_external::get_quizzes_by_courses_parameters();
    }
    /**
     * Returns a list of quizzes in a provided list of courses,
     * if no list is provided all quizzes that the user can view will be returned.
     *
     * @param array $courseids Array of course ids
     * @return array of quizzes details
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quizzes_by_courses($courseids = array()) {
        global $USER, $DB;
        $warnings = array();
        $returnedquizzes = array();
        $params = array(
            'courseids' => $courseids,
        );
        $params = self::validate_parameters(self::mod_quiz_get_quizzes_by_courses_parameters(), $params);
        $mycourses = array();
        if (empty($params['courseids'])) {
            $mycourses = enrol_get_my_courses();
            $params['courseids'] = array_keys($mycourses);
        }
        // Ensure there are courseids to loop through.
        if (!empty($params['courseids'])) {
            list($courses, $warnings) = external_util::validate_courses($params['courseids'], $mycourses);
            // Get the quizzes in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $quizzes = get_all_instances_in_courses("quiz", $courses);
            foreach ($quizzes as $quiz) {
                $context = context_module::instance($quiz->coursemodule);
                // Update quiz with override information.
                $quiz = quiz_update_effective_access($quiz, $USER->id);
                // Entry to return.
                $quizdetails = array();
                // First, we return information that any user can see in the web interface.
                $quizdetails['id'] = $quiz->id;
                $quizdetails['coursemodule']      = $quiz->coursemodule;
                $quizdetails['course']            = $quiz->course;
                $quizdetails['name']              = external_format_string($quiz->name, $context->id);
                if (has_capability('mod/quiz:view', $context)) {
                    // Format intro.
                    list($quizdetails['intro'], $quizdetails['introformat']) = external_format_text($quiz->intro,
                                                                    $quiz->introformat, $context->id, 'mod_quiz', 'intro', null);
                    $viewablefields = array('timeopen', 'timeclose', 'grademethod', 'section', 'visible', 'groupmode',
                                            'groupingid');
                    $timenow = time();
                    $quizobj = quiz::create($quiz->id, $USER->id);
                    $accessmanager = new quiz_access_manager($quizobj, $timenow, has_capability('mod/quiz:ignoretimelimits',
                                                                $context, null, false));
                    // Fields the user could see if have access to the quiz.
                    if (!$accessmanager->prevent_access()) {
                        // Some times this function returns just empty.
                        $hasfeedback = quiz_has_feedback($quiz);
                        $quizdetails['hasfeedback'] = (!empty($hasfeedback)) ? 1 : 0;
                        $quizdetails['hasquestions'] = (int) $quizobj->has_questions();
                        $quizdetails['autosaveperiod'] = get_config('quiz', 'autosaveperiod');
                        $additionalfields = array('timelimit', 'attempts', 'attemptonlast', 'grademethod', 'decimalpoints',
                                                    'questiondecimalpoints', 'reviewattempt', 'reviewcorrectness', 'reviewmarks',
                                                    'reviewspecificfeedback', 'reviewgeneralfeedback', 'reviewrightanswer',
                                                    'reviewoverallfeedback', 'questionsperpage', 'navmethod', 'sumgrades', 'grade',
                                                    'browsersecurity', 'delay1', 'delay2', 'showuserpicture', 'showblocks',
                                                    'completionattemptsexhausted', 'completionpass', 'overduehandling',
                                                    'graceperiod', 'preferredbehaviour', 'canredoquestions');
                        $viewablefields = array_merge($viewablefields, $additionalfields);
                    }
                    // Fields only for managers.
                    if (has_capability('moodle/course:manageactivities', $context)) {
                        $additionalfields = array('shuffleanswers', 'timecreated', 'timemodified', 'password', 'subnet');
                        $viewablefields = array_merge($viewablefields, $additionalfields);
                    }
                    foreach ($viewablefields as $field) {
                        $quizdetails[$field] = $quiz->{$field};
                    }
                    // Return the password hashed with SHA1 for non-managers.
                    if (!empty($quiz->password) and empty($quizdetails['password'])) {
                        $quizdetails['password'] = sha1($quiz->password);
                    }
                    // Check for allow offline attempts.
                    $quizdetails['allowofflineattempts'] = 0;
                    $dbman = $DB->get_manager();
                    $attemptstable = new xmldb_table('quizaccess_offlineattempts');
                    if ($dbman->table_exists($attemptstable)) {
                        $conditions = array('quizid' => $quiz->id);
                        if ($DB->get_field('quizaccess_offlineattempts', 'allowofflineattempts', $conditions)) {
                            $quizdetails['allowofflineattempts'] = 1;
                        }
                    }
                }
                $returnedquizzes[] = $quizdetails;
            }
        }
        $result = array();
        $result['quizzes'] = $returnedquizzes;
        $result['warnings'] = $warnings;
        return $result;
    }
    /**
     * Describes the get_quizzes_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quizzes_by_courses_returns() {
        return new external_single_structure(
            array(
                'quizzes' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Standard Moodle primary key.'),
                            'course' => new external_value(PARAM_INT, 'Foreign key reference to the course this quiz is part of.'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module id.'),
                            'name' => new external_value(PARAM_RAW, 'Quiz name.'),
                            'intro' => new external_value(PARAM_RAW, 'Quiz introduction text.', VALUE_OPTIONAL),
                            'introformat' => new external_format_value('intro', VALUE_OPTIONAL),
                            'timeopen' => new external_value(PARAM_INT, 'The time when this quiz opens. (0 = no restriction.)',
                                                                VALUE_OPTIONAL),
                            'timeclose' => new external_value(PARAM_INT, 'The time when this quiz closes. (0 = no restriction.)',
                                                                VALUE_OPTIONAL),
                            'timelimit' => new external_value(PARAM_INT, 'The time limit for quiz attempts, in seconds.',
                                                                VALUE_OPTIONAL),
                            'overduehandling' => new external_value(PARAM_ALPHA, 'The method used to handle overdue attempts.
                                                                    \'autosubmit\', \'graceperiod\' or \'autoabandon\'.',
                                                                    VALUE_OPTIONAL),
                            'graceperiod' => new external_value(PARAM_INT, 'The amount of time (in seconds) after the time limit
                                                                runs out during which attempts can still be submitted,
                                                                if overduehandling is set to allow it.', VALUE_OPTIONAL),
                            'preferredbehaviour' => new external_value(PARAM_ALPHANUMEXT, 'The behaviour to ask questions to use.',
                                                                        VALUE_OPTIONAL),
                            'canredoquestions' => new external_value(PARAM_INT, 'Allows students to redo any completed question
                                                                        within a quiz attempt.', VALUE_OPTIONAL),
                            'attempts' => new external_value(PARAM_INT, 'The maximum number of attempts a student is allowed.',
                                                                VALUE_OPTIONAL),
                            'attemptonlast' => new external_value(PARAM_INT, 'Whether subsequent attempts start from the answer
                                                                    to the previous attempt (1) or start blank (0).',
                                                                    VALUE_OPTIONAL),
                            'grademethod' => new external_value(PARAM_INT, 'One of the values QUIZ_GRADEHIGHEST, QUIZ_GRADEAVERAGE,
                                                                    QUIZ_ATTEMPTFIRST or QUIZ_ATTEMPTLAST.', VALUE_OPTIONAL),
                            'decimalpoints' => new external_value(PARAM_INT, 'Number of decimal points to use when displaying
                                                                    grades.', VALUE_OPTIONAL),
                            'questiondecimalpoints' => new external_value(PARAM_INT, 'Number of decimal points to use when
                                                                            displaying question grades.
                                                                            (-1 means use decimalpoints.)', VALUE_OPTIONAL),
                            'reviewattempt' => new external_value(PARAM_INT, 'Whether users are allowed to review their quiz
                                                                    attempts at various times. This is a bit field, decoded by the
                                                                    mod_quiz_display_options class. It is formed by ORing together
                                                                    the constants defined there.', VALUE_OPTIONAL),
                            'reviewcorrectness' => new external_value(PARAM_INT, 'Whether users are allowed to review their quiz
                                                                        attempts at various times.
                                                                        A bit field, like reviewattempt.', VALUE_OPTIONAL),
                            'reviewmarks' => new external_value(PARAM_INT, 'Whether users are allowed to review their quiz attempts
                                                                at various times. A bit field, like reviewattempt.',
                                                                VALUE_OPTIONAL),
                            'reviewspecificfeedback' => new external_value(PARAM_INT, 'Whether users are allowed to review their
                                                                            quiz attempts at various times. A bit field, like
                                                                            reviewattempt.', VALUE_OPTIONAL),
                            'reviewgeneralfeedback' => new external_value(PARAM_INT, 'Whether users are allowed to review their
                                                                            quiz attempts at various times. A bit field, like
                                                                            reviewattempt.', VALUE_OPTIONAL),
                            'reviewrightanswer' => new external_value(PARAM_INT, 'Whether users are allowed to review their quiz
                                                                        attempts at various times. A bit field, like
                                                                        reviewattempt.', VALUE_OPTIONAL),
                            'reviewoverallfeedback' => new external_value(PARAM_INT, 'Whether users are allowed to review their quiz
                                                                            attempts at various times. A bit field, like
                                                                            reviewattempt.', VALUE_OPTIONAL),
                            'questionsperpage' => new external_value(PARAM_INT, 'How often to insert a page break when editing
                                                                        the quiz, or when shuffling the question order.',
                                                                        VALUE_OPTIONAL),
                            'navmethod' => new external_value(PARAM_ALPHA, 'Any constraints on how the user is allowed to navigate
                                                                around the quiz. Currently recognised values are
                                                                \'free\' and \'seq\'.', VALUE_OPTIONAL),
                            'shuffleanswers' => new external_value(PARAM_INT, 'Whether the parts of the question should be shuffled,
                                                                    in those question types that support it.', VALUE_OPTIONAL),
                            'sumgrades' => new external_value(PARAM_FLOAT, 'The total of all the question instance maxmarks.',
                                                                VALUE_OPTIONAL),
                            'grade' => new external_value(PARAM_FLOAT, 'The total that the quiz overall grade is scaled to be
                                                            out of.', VALUE_OPTIONAL),
                            'timecreated' => new external_value(PARAM_INT, 'The time when the quiz was added to the course.',
                                                                VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_INT, 'Last modified time.',
                                                                    VALUE_OPTIONAL),
                            'password' => new external_value(PARAM_RAW, 'A password that the student must enter before starting or
                                                                continuing a quiz attempt.', VALUE_OPTIONAL),
                            'subnet' => new external_value(PARAM_RAW, 'Used to restrict the IP addresses from which this quiz can
                                                            be attempted. The format is as requried by the address_in_subnet
                                                            function.', VALUE_OPTIONAL),
                            'browsersecurity' => new external_value(PARAM_ALPHANUMEXT, 'Restriciton on the browser the student must
                                                                    use. E.g. \'securewindow\'.', VALUE_OPTIONAL),
                            'delay1' => new external_value(PARAM_INT, 'Delay that must be left between the first and second attempt,
                                                            in seconds.', VALUE_OPTIONAL),
                            'delay2' => new external_value(PARAM_INT, 'Delay that must be left between the second and subsequent
                                                            attempt, in seconds.', VALUE_OPTIONAL),
                            'showuserpicture' => new external_value(PARAM_INT, 'Option to show the user\'s picture during the
                                                                    attempt and on the review page.', VALUE_OPTIONAL),
                            'showblocks' => new external_value(PARAM_INT, 'Whether blocks should be shown on the attempt.php and
                                                                review.php pages.', VALUE_OPTIONAL),
                            'completionattemptsexhausted' => new external_value(PARAM_INT, 'Mark quiz complete when the student has
                                                                                exhausted the maximum number of attempts',
                                                                                VALUE_OPTIONAL),
                            'completionpass' => new external_value(PARAM_INT, 'Whether to require passing grade', VALUE_OPTIONAL),
                            'allowofflineattempts' => new external_value(PARAM_INT, 'Whether to allow the quiz to be attempted
                                                                            offline in the mobile app', VALUE_OPTIONAL),
                            'autosaveperiod' => new external_value(PARAM_INT, 'Auto-save delay', VALUE_OPTIONAL),
                            'hasfeedback' => new external_value(PARAM_INT, 'Whether the quiz has any non-blank feedback text',
                                                                VALUE_OPTIONAL),
                            'hasquestions' => new external_value(PARAM_INT, 'Whether the quiz has questions', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'Course section id', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_INT, 'Module visibility', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'Group mode', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'Grouping id', VALUE_OPTIONAL),
                        )
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_attempt_data.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_data_parameters() {
        return local_mobile_mod_quiz_external::get_attempt_data_parameters();
    }
    /**
     * Returns information for the given attempt page for a quiz attempt in progress.
     *
     * @param int $attemptid attempt id
     * @param int $page page number
     * @param array $preflightdata preflight required data (like passwords)
     * @return array of warnings and the attempt data, next page, message and questions
     * @since Moodle 3.1
     * @throws moodle_quiz_exceptions
     */
    public static function mod_quiz_get_attempt_data($attemptid, $page, $preflightdata = array()) {
        $result = local_mobile_mod_quiz_external::get_attempt_data($attemptid, $page, $preflightdata);
        $attemptobj = quiz_attempt::create($attemptid);

        $result['questions'] = local_mobile_mod_quiz_external::get_attempt_questions_data($attemptobj, false, $page);
        return $result;
    }
    /**
     * Describes the get_attempt_data return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_data_returns() {
        return new external_single_structure(
            array(
                'attempt' => local_mobile_mod_quiz_external::attempt_structure(),
                'messages' => new external_multiple_structure(
                    new external_value(PARAM_TEXT, 'access message'),
                    'access messages, will only be returned for users with mod/quiz:preview capability,
                    for other users this method will throw an exception if there are messages'),
                'nextpage' => new external_value(PARAM_INT, 'next page number'),
                'questions' => new external_multiple_structure(local_mobile_mod_quiz_external::question_structure()),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for start_attempt.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_start_attempt_parameters() {
        return local_mobile_mod_quiz_external::start_attempt_parameters();
    }
    /**
     * Starts a new attempt at a quiz.
     *
     * @param int $quizid quiz instance id
     * @param array $preflightdata preflight required data (like passwords)
     * @param bool $forcenew Whether to force a new attempt or not.
     * @return array of warnings and the attempt basic data
     * @since Moodle 3.1
     * @throws moodle_quiz_exception
     */
    public static function mod_quiz_start_attempt($quizid, $preflightdata = array(), $forcenew = false) {
        global $DB;
        $result = local_mobile_mod_quiz_external::start_attempt($quizid, $preflightdata, $forcenew);
        local_mobile_mod_quiz_external::set_offline_time($result['attempt']->id, time());
        return $result;
    }
    /**
     * Describes the start_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_start_attempt_returns() {
        return local_mobile_mod_quiz_external::start_attempt_returns();
    }

    /**
     * Describes the parameters for save_attempt.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_save_attempt_parameters() {
        return local_mobile_mod_quiz_external::save_attempt_parameters();
    }
    /**
     * Processes save requests during the quiz. This function is intended for the quiz auto-save feature.
     *
     * @param int $attemptid attempt id
     * @param array $data the data to be saved
     * @param  array $preflightdata preflight required data (like passwords)
     * @return array of warnings and execution result
     * @since Moodle 3.1
     */
    public static function mod_quiz_save_attempt($attemptid, $data, $preflightdata = array()) {
        global $DB;
        $result = local_mobile_mod_quiz_external::save_attempt($attemptid, $data, $preflightdata);
        local_mobile_mod_quiz_external::set_offline_time($attemptid, time());
        return $result;
    }
    /**
     * Describes the save_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_save_attempt_returns() {
        return local_mobile_mod_quiz_external::save_attempt_returns();
    }

    /**
     * Describes the parameters for process_attempt.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_process_attempt_parameters() {
        return local_mobile_mod_quiz_external::process_attempt_parameters();
    }
    /**
     * Process responses during an attempt at a quiz and also deals with attempts finishing.
     *
     * @param int $attemptid attempt id
     * @param array $data the data to be saved
     * @param bool $finishattempt whether to finish or not the attempt
     * @param bool $timeup whether the WS was called by a timer when the time is up
     * @param array $preflightdata preflight required data (like passwords)
     * @return array of warnings and the attempt state after the processing
     * @since Moodle 3.1
     */
    public static function mod_quiz_process_attempt($attemptid, $data, $finishattempt = false, $timeup = false, $preflightdata = array()) {
        global $DB;
        $result = local_mobile_mod_quiz_external::process_attempt($attemptid, $data, $finishattempt, $timeup, $preflightdata);
        local_mobile_mod_quiz_external::set_offline_time($attemptid, time());
        return $result;
    }
    /**
     * Describes the process_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_process_attempt_returns() {
        return local_mobile_mod_quiz_external::process_attempt_returns();
    }

    /**
     * Describes the parameters for view_assign.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.2
     */
    public static function mod_assign_view_assign_parameters() {
        return new external_function_parameters (
            array(
                'assignid' => new external_value(PARAM_INT, 'assign instance id'),
            )
        );
    }

    /**
     * Update the module completion status.
     *
     * @param int $assignid assign instance id
     * @return array of warnings and status result
     * @since Moodle 3.2
     */
    public static function mod_assign_view_assign($assignid) {
        $warnings = array();
        $params = array(
            'assignid' => $assignid,
        );
        $params = self::validate_parameters(self::mod_assign_view_assign_parameters(), $params);

        // Request and permission validation.
        $assign = $DB->get_record('assign', array('id' => $assignid), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($assign, 'assign');

        $context = context_module::instance($cm->id);
        // Please, note that is not required to check mod/assign:view because is done by validate_context->require_login.
        self::validate_context($context);

        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_assign_view_assign return value.
     *
     * @return external_single_structure
     * @since Moodle 3.2
     */
    public static function mod_assign_view_assign_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.2
     */
    public static function core_course_get_user_navigation_options_parameters() {
        return new external_function_parameters(
            array(
                'courseids' => new external_multiple_structure(new external_value(PARAM_INT, 'Course id.')),
            )
        );
    }

    /**
     * Return a list of navigation options in a set of courses that are avaialable or not for the current user.
     *
     * @param array $courseids a list of course ids
     * @return array of warnings and the options availability
     * @since Moodle 3.2
     * @throws moodle_exception
     */
    public static function core_course_get_user_navigation_options($courseids) {
        global $CFG;
        require_once($CFG->dirroot . '/course/lib.php');

        // Parameter validation.
        $params = self::validate_parameters(self::core_course_get_user_navigation_options_parameters(), array('courseids' => $courseids));
        $courseoptions = array();

        list($courses, $warnings) = external_util::validate_courses($params['courseids'], array(), true);

        if (!empty($courses)) {
            foreach ($courses as $course) {
                // Fix the context for the frontpage.
                if ($course->id == SITEID) {
                    $course->context = context_system::instance();
                }
                $course->context = context_course::instance($course->id);
                $navoptions = course_get_user_navigation_options($course->context, $course);
                $options = array();
                foreach ($navoptions as $name => $available) {
                    $options[] = array(
                        'name' => $name,
                        'available' => $available,
                    );
                }

                $courseoptions[] = array(
                    'id' => $course->id,
                    'options' => $options
                );
            }
        }

        $result = array(
            'courses' => $courseoptions,
            'warnings' => $warnings
        );
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.2
     */
    public static function core_course_get_user_navigation_options_returns() {
        return new external_single_structure(
            array(
                'courses' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Course id'),
                            'options' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'name' => new external_value(PARAM_ALPHANUMEXT, 'Option name'),
                                        'available' => new external_value(PARAM_BOOL, 'Whether the option is available or not'),
                                    )
                                )
                            )
                        )
                    ), 'List of courses'
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.2
     */
    public static function core_course_get_user_administration_options_parameters() {
        return new external_function_parameters(
            array(
                'courseids' => new external_multiple_structure(new external_value(PARAM_INT, 'Course id.')),
            )
        );
    }

    /**
     * Return a list of administration options in a set of courses that are available or not for the current user.
     *
     * @param array $courseids a list of course ids
     * @return array of warnings and the options availability
     * @since Moodle 3.2
     * @throws moodle_exception
     */
    public static function core_course_get_user_administration_options($courseids) {
        global $CFG;
        require_once($CFG->dirroot . '/course/lib.php');

        // Parameter validation.
        $params = self::validate_parameters(self::core_course_get_user_administration_options_parameters(), array('courseids' => $courseids));
        $courseoptions = array();

        list($courses, $warnings) = external_util::validate_courses($params['courseids'], array(), true);

        if (!empty($courses)) {
            foreach ($courses as $course) {
                $course->context = context_course::instance($course->id);
                $adminoptions = course_get_user_administration_options($course, $course->context);
                $options = array();
                foreach ($adminoptions as $name => $available) {
                    $options[] = array(
                        'name' => $name,
                        'available' => $available,
                    );
                }

                $courseoptions[] = array(
                    'id' => $course->id,
                    'options' => $options
                );
            }
        }

        $result = array(
            'courses' => $courseoptions,
            'warnings' => $warnings
        );
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.2
     */
    public static function core_course_get_user_administration_options_returns() {
        return self::core_course_get_user_navigation_options_returns();
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.2
     */
    public static function core_user_update_picture_parameters() {
        return new external_function_parameters(
            array(
                'draftitemid' => new external_value(PARAM_INT, 'Id of the user draft file to use as image'),
                'delete' => new external_value(PARAM_BOOL, 'If we should delete the user picture', VALUE_DEFAULT, false),
                'userid' => new external_value(PARAM_INT, 'Id of the user, 0 for current user', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Update or delete the user picture in the site
     *
     * @param  int  $draftitemid id of the user draft file to use as image
     * @param  bool $delete      if we should delete the user picture
     * @param  int $userid       id of the user, 0 for current user
     * @return array warnings and success status
     * @since Moodle 3.2
     * @throws moodle_exception
     */
    public static function core_user_update_picture($draftitemid, $delete = false, $userid = 0) {
        global $CFG, $USER, $PAGE;

        $params = self::validate_parameters(
            self::core_user_update_picture_parameters(),
            array(
                'draftitemid' => $draftitemid,
                'delete' => $delete,
                'userid' => $userid
            )
        );

        $context = context_system::instance();
        self::validate_context($context);

        if (!empty($CFG->disableuserimages)) {
            throw new moodle_exception('userimagesdisabled', 'admin');
        }

        if (empty($params['userid']) or $params['userid'] == $USER->id) {
            $user = $USER;
            require_capability('moodle/user:editownprofile', $context);
        } else {
            $user = core_user::get_user($params['userid'], '*', MUST_EXIST);
            core_user::require_active_user($user);
            $personalcontext = context_user::instance($user->id);

            require_capability('moodle/user:editprofile', $personalcontext);
            if (is_siteadmin($user) and !is_siteadmin($USER)) {  // Only admins may edit other admins.
                throw new moodle_exception('useradmineditadmin');
            }
        }

        // Load the appropriate auth plugin.
        $userauth = get_auth_plugin($user->auth);
        if (is_mnet_remote_user($user) or !$userauth->can_edit_profile() or $userauth->edit_profile_url()) {
            throw new moodle_exception('noprofileedit', 'auth');
        }

        $filemanageroptions = array('maxbytes' => $CFG->maxbytes, 'subdirs' => 0, 'maxfiles' => 1, 'accepted_types' => 'web_image');
        $user->deletepicture = $params['delete'];
        $user->imagefile = $params['draftitemid'];
        $success = local_mobile_core_user_update_picture($user, $filemanageroptions);

        $result = array(
            'success' => $success,
            'warnings' => array(),
        );
        if ($success) {
            $userpicture = new user_picture(core_user::get_user($user->id));
            $userpicture->size = 1; // Size f1.
            $result['profileimageurl'] = $userpicture->get_url($PAGE)->out(false);
        }
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.2
     */
    public static function core_user_update_picture_returns() {
        return new external_single_structure(
            array(
                'success' => new external_value(PARAM_BOOL, 'True if the image was updated, false otherwise.'),
                'profileimageurl' => new external_value(PARAM_URL, 'New profile user image url', VALUE_OPTIONAL),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of get_config() parameters.
     *
     * @return external_function_parameters
     * @since  Moodle 3.2
     */
    public static function tool_mobile_get_config_parameters() {
        return new external_function_parameters(
            array(
                'section' => new external_value(PARAM_ALPHANUMEXT, 'Settings section name.', VALUE_DEFAULT, ''),
            )
        );
    }

    /**
     * Returns a list of site settings, filtering by section.
     *
     * @param string $section settings section name
     * @return array with the settings and warnings
     * @since  Moodle 3.2
     */
    public static function tool_mobile_get_config($section = '') {
        global $CFG, $SITE;

        $params = self::validate_parameters(self::tool_mobile_get_config_parameters(), array('section' => $section));

        $section = $params['section'];

        $settings = new stdClass;
        $context = context_system::instance();
        $isadmin = has_capability('moodle/site:config', $context);

        if (empty($section) or $section == 'frontpagesettings') {
            require_once($CFG->dirroot . '/course/format/lib.php');
            // First settings that anyone can deduce.
            $settings->fullname = $SITE->fullname;
            $settings->shortname = $SITE->shortname;
            $settings->summary = $SITE->summary;
            $settings->frontpage = $CFG->frontpage;
            $settings->frontpageloggedin = $CFG->frontpageloggedin;
            $settings->maxcategorydepth = $CFG->maxcategorydepth;
            $settings->frontpagecourselimit = $CFG->frontpagecourselimit;
            $settings->numsections = course_get_format($SITE)->get_course()->numsections;
            $settings->newsitems = $SITE->newsitems;
            $settings->commentsperpage = $CFG->commentsperpage;

            // Now, admin settings.
            if ($isadmin) {
                $settings->defaultfrontpageroleid = $CFG->defaultfrontpageroleid;
            }
        }

        if (empty($section) or $section == 'sitepolicies') {
            $settings->disableuserimages = $CFG->disableuserimages;
        }

        if (empty($section) or $section == 'gradessettings') {
            require_once($CFG->dirroot . '/user/lib.php');
            $settings->mygradesurl = user_mygrades_url()->out(false);
        }

        $result['settings'] = array();
        foreach ($settings as $name => $value) {
            $result['settings'][] = array(
                'name' => $name,
                'value' => $value,
            );
        }

        $result['warnings'] = array();
        return $result;
    }

    /**
     * Returns description of tool_mobile_get_config() result value.
     *
     * @return external_description
     * @since  Moodle 3.2
     */
    public static function tool_mobile_get_config_returns() {
        return new external_single_structure(
            array(
                'settings' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_RAW, 'The name of the setting'),
                            'value' => new external_value(PARAM_RAW, 'The value of the setting'),
                        )
                    ),
                    'Settings'
                ),
                'warnings' => new external_warnings(),
            )
        );
    }
}
