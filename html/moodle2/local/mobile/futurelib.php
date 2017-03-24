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
 * Backported functions that in a future exists.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
require_once("$CFG->dirroot/mod/quiz/locallib.php");

class local_mobile_mod_quiz_external extends mod_quiz_external {

    /**
     * Public accessor.
     *
     * @param  array $params Array of parameters including the attemptid and preflight data
     * @param  bool $checkaccessrules whether to check the quiz access rules or not
     * @param  bool $failifoverdue whether to return error if the attempt is overdue
     * @return  array containing the attempt object and access messages
     */
    public static function validate_attempt($params, $checkaccessrules = true, $failifoverdue = true) {
        return parent::validate_attempt($params, $checkaccessrules, $failifoverdue);
    }

    /**
     * Describes a single attempt structure.
     *
     * @return external_single_structure the attempt structure
     */
    public static function attempt_structure() {
        return new external_single_structure(
            array(
                'id' => new external_value(PARAM_INT, 'Attempt id.', VALUE_OPTIONAL),
                'quiz' => new external_value(PARAM_INT, 'Foreign key reference to the quiz that was attempted.',
                                                VALUE_OPTIONAL),
                'userid' => new external_value(PARAM_INT, 'Foreign key reference to the user whose attempt this is.',
                                                VALUE_OPTIONAL),
                'attempt' => new external_value(PARAM_INT, 'Sequentially numbers this students attempts at this quiz.',
                                                VALUE_OPTIONAL),
                'uniqueid' => new external_value(PARAM_INT, 'Foreign key reference to the question_usage that holds the
                                                    details of the the question_attempts that make up this quiz
                                                    attempt.', VALUE_OPTIONAL),
                'layout' => new external_value(PARAM_RAW, 'Attempt layout.', VALUE_OPTIONAL),
                'currentpage' => new external_value(PARAM_INT, 'Attempt current page.', VALUE_OPTIONAL),
                'preview' => new external_value(PARAM_INT, 'Whether is a preview attempt or not.', VALUE_OPTIONAL),
                'state' => new external_value(PARAM_ALPHA, 'The current state of the attempts. \'inprogress\',
                                                \'overdue\', \'finished\' or \'abandoned\'.', VALUE_OPTIONAL),
                'timestart' => new external_value(PARAM_INT, 'Time when the attempt was started.', VALUE_OPTIONAL),
                'timefinish' => new external_value(PARAM_INT, 'Time when the attempt was submitted.
                                                    0 if the attempt has not been submitted yet.', VALUE_OPTIONAL),
                'timemodified' => new external_value(PARAM_INT, 'Last modified time.', VALUE_OPTIONAL),
                'timecheckstate' => new external_value(PARAM_INT, 'Next time quiz cron should check attempt for
                                                        state changes.  NULL means never check.', VALUE_OPTIONAL),
                'sumgrades' => new external_value(PARAM_FLOAT, 'Total marks for this attempt.', VALUE_OPTIONAL),
            )
        );
    }

    /**
     * Describes a single question structure.
     *
     * @return external_single_structure the question structure
     * @since  Moodle 3.1
     */
    public static function question_structure() {
        return new external_single_structure(
            array(
                'slot' => new external_value(PARAM_INT, 'slot number'),
                'type' => new external_value(PARAM_ALPHANUMEXT, 'question type, i.e: multichoice'),
                'page' => new external_value(PARAM_INT, 'page of the quiz this question appears on'),
                'html' => new external_value(PARAM_RAW, 'the question rendered'),
                'sequencecheck' => new external_value(PARAM_INT, 'the number of real steps in this attempt'),
                'lastactiontime' => new external_value(PARAM_INT, 'the timestamp of the most recent step in this question attempt'),
                'hasautosavedstep' => new external_value(PARAM_BOOL, 'whether this question attempt has autosaved data'),
                'flagged' => new external_value(PARAM_BOOL, 'whether the question is flagged or not'),
                'number' => new external_value(PARAM_INT, 'question ordering number in the quiz', VALUE_OPTIONAL),
                'state' => new external_value(PARAM_ALPHA, 'the state where the question is in', VALUE_OPTIONAL),
                'status' => new external_value(PARAM_RAW, 'current formatted state of the question', VALUE_OPTIONAL),
                'mark' => new external_value(PARAM_RAW, 'the mark awarded', VALUE_OPTIONAL),
                'maxmark' => new external_value(PARAM_FLOAT, 'the maximum mark possible for this question attempt', VALUE_OPTIONAL),
            )
        );
    }
    /**
     * Return questions information for a given attempt.
     *
     * @param  quiz_attempt  $attemptobj  the quiz attempt object
     * @param  bool  $review  whether if we are in review mode or not
     * @param  mixed  $page  string 'all' or integer page number
     * @return array array of questions including data
     */
    public static function get_attempt_questions_data(quiz_attempt $attemptobj, $review, $page = 'all') {
        global $PAGE;
        $questions = array();
        $contextid = $attemptobj->get_quizobj()->get_context()->id;
        $displayoptions = $attemptobj->get_display_options($review);
        $renderer = $PAGE->get_renderer('mod_quiz');
        foreach ($attemptobj->get_slots($page) as $slot) {
            $question = array(
                'slot' => $slot,
                'type' => $attemptobj->get_question_type_name($slot),
                'page' => $attemptobj->get_question_page($slot),
                'flagged' => $attemptobj->is_question_flagged($slot),
                'html' => $attemptobj->render_question($slot, $review, $renderer) . $PAGE->requires->get_end_code(),
                'sequencecheck' => $attemptobj->get_question_attempt($slot)->get_sequence_check_count(),
                'lastactiontime' => $attemptobj->get_question_attempt($slot)->get_last_step()->get_timecreated(),
                'hasautosavedstep' => $attemptobj->get_question_attempt($slot)->has_autosaved_step()
            );
            if ($attemptobj->is_real_question($slot)) {
                $question['number'] = $attemptobj->get_question_number($slot);
                $question['state'] = (string) $attemptobj->get_question_state($slot);
                $question['status'] = $attemptobj->get_question_status($slot, $displayoptions->correctness);
            }
            if ($displayoptions->marks >= question_display_options::MAX_ONLY) {
                $question['maxmark'] = $attemptobj->get_question_attempt($slot)->get_max_mark();
            }
            if ($displayoptions->marks >= question_display_options::MARK_AND_MAX) {
                $question['mark'] = $attemptobj->get_question_mark($slot);
            }
            $questions[] = $question;
        }
        return $questions;
    }

    public static function set_offline_time($attemptid, $time) {
        global $DB;

        if (WS_SERVER) {
            $dbman = $DB->get_manager();
            $attemptstable = new xmldb_table('quizaccess_offlineattempts_a');
            if ($dbman->table_exists($attemptstable)) {
                if ($attempt = $DB->get_record('quizaccess_offlineattempts_a', array('attemptid' => $attemptid))) {
                    $attempt->timemodifiedoffline = $time;
                    $DB->update_record('quizaccess_offlineattempts_a', $attempt);
                } else {
                    $attempt = new stdClass;
                    $attempt->attemptid = $attemptid;
                    $attempt->timemodifiedoffline = $time;
                    $DB->insert_record('quizaccess_offlineattempts_a', $attempt);
                }
            }
        }
    }
}

require_once("$CFG->dirroot/course/lib.php");

if (!function_exists('course_get_user_navigation_options')) {
    /**
     * Return an object with the list of navigation options in a course that are avaialable or not for the current user.
     * This function also handles the frontpage course.
     *
     * @param  stdClass $context context object (it can be a course context or the system context for frontpage settings)
     * @param  stdClass $course  the course where the settings are being rendered
     * @return stdClass          the navigation options in a course and their availability status
     * @since  Moodle 3.2
     */
    function course_get_user_navigation_options($context, $course = null) {
        global $CFG;

        $isloggedin = isloggedin();
        $isguestuser = isguestuser();
        $isfrontpage = $context->contextlevel == CONTEXT_SYSTEM;

        if ($isfrontpage) {
            $sitecontext = $context;
        } else {
            $sitecontext = context_system::instance();
        }

        $options = new stdClass;
        $options->blogs = !empty($CFG->enableblogs) &&
                            ($CFG->bloglevel == BLOG_GLOBAL_LEVEL ||
                            ($CFG->bloglevel == BLOG_SITE_LEVEL and ($isloggedin and !$isguestuser)))
                            && has_capability('moodle/blog:view', $sitecontext);

        $options->notes = !empty($CFG->enablenotes) && has_any_capability(array('moodle/notes:manage', 'moodle/notes:view'), $context);

        // Frontpage settings?
        if ($isfrontpage) {
            if ($course->id == SITEID) {
                $options->participants = has_capability('moodle/site:viewparticipants', $sitecontext);
            } else {
                $options->participants = has_capability('moodle/course:viewparticipants', context_course::instance($course->id));
            }

            $options->badges = !empty($CFG->enablebadges) && has_capability('moodle/badges:viewbadges', $sitecontext);
            $options->tags = !empty($CFG->usetags) && $isloggedin;
            $options->search = !empty($CFG->enableglobalsearch) && has_capability('moodle/search:query', $sitecontext);
            $options->calendar = $isloggedin;
        } else {
            $options->participants = has_capability('moodle/course:viewparticipants', $context);
            $options->badges = !empty($CFG->enablebadges) && !empty($CFG->badges_allowcoursebadges) &&
                                has_capability('moodle/badges:viewbadges', $context);
            // Add view grade report is permitted.
            $grades = false;

            if (has_capability('moodle/grade:viewall', $context)) {
                $grades = true;
            } else if (!empty($course->showgrades)) {
                $reports = core_component::get_plugin_list('gradereport');
                if (is_array($reports) && count($reports) > 0) {  // Get all installed reports.
                    arsort($reports);   // User is last, we want to test it first.
                    foreach ($reports as $plugin => $plugindir) {
                        if (has_capability('gradereport/'.$plugin.':view', $context)) {
                            // Stop when the first visible plugin is found.
                            $grades = true;
                            break;
                        }
                    }
                }
            }
            $options->grades = $grades;
        }

        if (\core_competency\api::is_enabled()) {
            $capabilities = array('moodle/competency:coursecompetencyview', 'moodle/competency:coursecompetencymanage');
            $options->competencies = has_any_capability($capabilities, $context);
        }
        return $options;
    }
}

if (!function_exists('course_get_user_administration_options')) {
    /**
     * Return an object with the list of administration options in a course that are available or not for the current user.
     * This function also handles the frontpage settings.
     *
     * @param  stdClass $course  course object (for frontpage it should be a clone of $SITE)
     * @param  stdClass $context context object (course context)
     * @return stdClass          the administration options in a course and their availability status
     * @since  Moodle 3.2
     */
    function course_get_user_administration_options($course, $context) {
        global $CFG;
        $isfrontpage = $course->id == SITEID;

        $options = new stdClass;
        $options->update = has_capability('moodle/course:update', $context);
        $options->filters = has_capability('moodle/filter:manage', $context) &&
                            count(filter_get_available_in_context($context)) > 0;
        $options->reports = has_capability('moodle/site:viewreports', $context);
        $options->backup = has_capability('moodle/backup:backupcourse', $context);
        $options->restore = has_capability('moodle/restore:restorecourse', $context);
        $options->files = $course->legacyfiles == 2 and has_capability('moodle/course:managefiles', $context);

        if (!$isfrontpage) {
            $options->tags = has_capability('moodle/course:tag', $context);
            $options->gradebook = has_capability('moodle/grade:manage', $context);
            $options->outcomes = !empty($CFG->enableoutcomes) && has_capability('moodle/course:update', $context);
            $options->badges = !empty($CFG->enablebadges);
            $options->import = has_capability('moodle/restore:restoretargetimport', $context);
            $options->publish = has_capability('moodle/course:publish', $context);
            $options->reset = has_capability('moodle/course:reset', $context);
            $options->roles = has_capability('moodle/role:switchroles', $context);
        } else {
            // Set default options to false.
            $listofoptions = array('tags', 'gradebook', 'outcomes', 'badges', 'import', 'publish', 'reset', 'roles', 'grades');

            foreach ($listofoptions as $option) {
                $options->$option = false;
            }
        }

        return $options;
    }
}

require_once("$CFG->dirroot/user/lib.php");

/**
 * Updates the provided users profile picture based upon the expected fields returned from the edit or edit_advanced forms.
 *
 * @param stdClass $usernew An object that contains some information about the user being updated
 * @param array $filemanageroptions
 * @return bool True if the user was updated, false if it stayed the same.
 */
function local_mobile_core_user_update_picture(stdClass $usernew, $filemanageroptions = array()) {
    global $CFG, $DB;
    require_once("$CFG->libdir/gdlib.php");

    $context = context_user::instance($usernew->id, MUST_EXIST);
    $user = core_user::get_user($usernew->id, 'id, picture', MUST_EXIST);

    $newpicture = $user->picture;
    // Get file_storage to process files.
    $fs = get_file_storage();
    if (!empty($usernew->deletepicture)) {
        // The user has chosen to delete the selected users picture.
        $fs->delete_area_files($context->id, 'user', 'icon'); // Drop all images in area.
        $newpicture = 0;

    } else {
        // Save newly uploaded file, this will avoid context mismatch for newly created users.
        file_save_draft_area_files($usernew->imagefile, $context->id, 'user', 'newicon', 0, $filemanageroptions);
        if (($iconfiles = $fs->get_area_files($context->id, 'user', 'newicon')) && count($iconfiles) == 2) {
            // Get file which was uploaded in draft area.
            foreach ($iconfiles as $file) {
                if (!$file->is_directory()) {
                    break;
                }
            }
            // Copy file to temporary location and the send it for processing icon.
            if ($iconfile = $file->copy_content_to_temp()) {
                // There is a new image that has been uploaded.
                // Process the new image and set the user to make use of it.
                // NOTE: Uploaded images always take over Gravatar.
                $newpicture = (int)process_new_icon($context, 'user', 'icon', 0, $iconfile);
                // Delete temporary file.
                @unlink($iconfile);
                // Remove uploaded file.
                $fs->delete_area_files($context->id, 'user', 'newicon');
            } else {
                // Something went wrong while creating temp file.
                // Remove uploaded file.
                $fs->delete_area_files($context->id, 'user', 'newicon');
                return false;
            }
        }
    }

    if ($newpicture != $user->picture) {
        $DB->set_field('user', 'picture', $newpicture, array('id' => $user->id));
        return true;
    } else {
        return false;
    }
}

if (!class_exists('external_files')) {
    require_once("$CFG->libdir/externallib.php");

    /**
     * External structure representing a set of files.
     *
     * @package    core_webservice
     * @copyright  2016 Juan Leyva
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     * @since      Moodle 3.2
     */
    class external_files extends external_multiple_structure {

        /**
         * Constructor
         * @param string $desc Description for the multiple structure.
         * @param int $required The type of value (VALUE_REQUIRED OR VALUE_OPTIONAL).
         */
        public function __construct($desc = 'List of files.', $required = VALUE_REQUIRED) {

            parent::__construct(
                new external_single_structure(
                    array(
                        'filename' => new external_value(PARAM_FILE, 'File name.', VALUE_OPTIONAL),
                        'filepath' => new external_value(PARAM_PATH, 'File path.', VALUE_OPTIONAL),
                        'filesize' => new external_value(PARAM_INT, 'File size.', VALUE_OPTIONAL),
                        'fileurl' => new external_value(PARAM_URL, 'Downloadable file url.', VALUE_OPTIONAL),
                        'timemodified' => new external_value(PARAM_INT, 'Time modified.', VALUE_OPTIONAL),
                        'mimetype' => new external_value(PARAM_RAW, 'File mime type.', VALUE_OPTIONAL),
                    ),
                    'File.'
                ),
                $desc,
                $required
            );
        }

        /**
         * Return the properties ready to be used by an exporter.
         *
         * @return array properties
         * @since  Moodle 3.3
         */
        public static function get_properties_for_exporter() {
            return [
                'filename' => array(
                    'type' => PARAM_FILE,
                    'description' => 'File name.',
                    'optional' => true,
                    'null' => NULL_NOT_ALLOWED,
                ),
                'filepath' => array(
                    'type' => PARAM_PATH,
                    'description' => 'File path.',
                    'optional' => true,
                    'null' => NULL_NOT_ALLOWED,
                ),
                'filesize' => array(
                    'type' => PARAM_INT,
                    'description' => 'File size.',
                    'optional' => true,
                    'null' => NULL_NOT_ALLOWED,
                ),
                'fileurl' => array(
                    'type' => PARAM_URL,
                    'description' => 'Downloadable file url.',
                    'optional' => true,
                    'null' => NULL_NOT_ALLOWED,
                ),
                'timemodified' => array(
                    'type' => PARAM_INT,
                    'description' => 'Time modified.',
                    'optional' => true,
                    'null' => NULL_NOT_ALLOWED,
                ),
                'mimetype' => array(
                    'type' => PARAM_RAW,
                    'description' => 'File mime type.',
                    'optional' => true,
                    'null' => NULL_NOT_ALLOWED,
                ),
            ];
        }
    }

}

/**
 * Returns all area files (optionally limited by itemid).
 *
 * @param int $contextid context ID
 * @param string $component component
 * @param string $filearea file area
 * @param int $itemid item ID or all files if not specified
 * @param bool $useitemidinurl wether to use the item id in the file URL (modules intro don't use it)
 * @return array of files, compatible with the external_files structure.
 * @since Moodle 3.2
 */
function local_mobile_get_area_files($contextid, $component, $filearea, $itemid = false, $useitemidinurl = true) {
    $files = array();
    $fs = get_file_storage();

    if ($areafiles = $fs->get_area_files($contextid, $component, $filearea, $itemid, 'itemid, filepath, filename', false)) {
        foreach ($areafiles as $areafile) {
            $file = array();
            $file['filename'] = $areafile->get_filename();
            $file['filepath'] = $areafile->get_filepath();
            $file['mimetype'] = $areafile->get_mimetype();
            $file['filesize'] = $areafile->get_filesize();
            $file['timemodified'] = $areafile->get_timemodified();
            $fileitemid = $useitemidinurl ? $areafile->get_itemid() : null;
            $file['fileurl'] = moodle_url::make_webservice_pluginfile_url($contextid, $component, $filearea,
                                $fileitemid, $areafile->get_filepath(), $areafile->get_filename())->out(false);
            $files[] = $file;
        }
    }
    return $files;
}