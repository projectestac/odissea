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

require_once("$CFG->dirroot/user/lib.php");


if (!function_exists('user_remove_user_device')) {
    /**
     * Remove a user device from the Moodle database (for PUSH notifications usually).
     *
     * @param string $uuid The device UUID.
     * @param string $appid The app id. If empty all the devices matching the UUID for the user will be removed.
     * @return bool true if removed, false if the device didn't exists in the database
     * @since Moodle 2.9
     */
    function user_remove_user_device($uuid, $appid = "") {
        global $DB, $USER;

        $conditions = array('uuid' => $uuid, 'userid' => $USER->id);
        if (!empty($appid)) {
            $conditions['appid'] = $appid;
        }

        if (!$DB->count_records('user_devices', $conditions)) {
            return false;
        }

        $DB->delete_records('user_devices', $conditions);

        return true;
    }
}

require_once($CFG->dirroot . '/mod/chat/lib.php');
require_once($CFG->dirroot . '/mod/choice/lib.php');

if (!function_exists('chat_get_latest_messages')) {

    /**
     * Return a list of the latest messages in the given chat session.
     *
     * @param  stdClass $chatuser     chat user session data
     * @param  int      $chatlasttime last time messages were retrieved
     * @return array    list of messages
     * @since  Moodle 3.0
     */
    function chat_get_latest_messages($chatuser, $chatlasttime) {
        global $DB;

        $params = array('groupid' => $chatuser->groupid, 'chatid' => $chatuser->chatid, 'lasttime' => $chatlasttime);

        $groupselect = $chatuser->groupid ? " AND (groupid=" . $chatuser->groupid . " OR groupid=0) " : "";

        return $DB->get_records_select('chat_messages_current', 'chatid = :chatid AND timestamp > :lasttime ' . $groupselect,
                                        $params, 'timestamp ASC');
    }
}

if (!function_exists('choice_get_my_response')) {
    /**
     * Return my responses on a specific choice.
     * @param object $choice
     * @return array
     */
    function choice_get_my_response($choice) {
        global $DB, $USER;
        return $DB->get_records('choice_answers', array('choiceid' => $choice->id, 'userid' => $USER->id));
    }
}

if (!function_exists('choice_get_all_responses')) {
    /**
     * Get all the responses on a given choice.
     *
     * @param stdClass $choice Choice record
     * @return array of choice answers records
     * @since  Moodle 3.0
     */
    function choice_get_all_responses($choice) {
        global $DB;
        return $DB->get_records('choice_answers', array('choiceid' => $choice->id));
    }
}

if (!function_exists('choice_can_view_results')) {
    /**
     * Return true if we are allowd to see choice results as student
     * @param object $choice Choice
     * @param rows|null $current my choice responses
     * @param bool|null $choiceopen choice open
     * @return bool True if we can see results, false if not.
     */
    function choice_can_view_results($choice, $current = null, $choiceopen = null) {

        if (is_null($choiceopen)) {
            $timenow = time();
            if ($choice->timeclose != 0 && $timenow > $choice->timeclose) {
                $choiceopen = false;
            } else {
                $choiceopen = true;
            }
        }
        if (is_null($current)) {
            $current = choice_get_my_response($choice);
        }

        if ($choice->showresults == CHOICE_SHOWRESULTS_ALWAYS or
           ($choice->showresults == CHOICE_SHOWRESULTS_AFTER_ANSWER and !empty($current)) or
           ($choice->showresults == CHOICE_SHOWRESULTS_AFTER_CLOSE and !$choiceopen)) {
            return true;
        }
        return false;
    }
}

require_once($CFG->libdir . '/externallib.php');
if (!class_exists("external_util")) {

    /**
     * Utility functions for the external API.
     *
     * @package    core_webservice
     * @copyright  2015 Juan Leyva
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     * @since Moodle 3.0
     */
    class external_util extends external_api{

        /**
         * Validate a list of courses, returning the complete course objects for valid courses.
         *
         * @param  array $courseids A list of course ids
         * @return array            An array of courses and the validation warnings
         */
        public static function validate_courses($courseids, $notused = array()) {
            // Delete duplicates.
            $courseids = array_unique($courseids);
            $courses = array();
            $warnings = array();

            foreach ($courseids as $cid) {
                // Check the user can function in this context.
                try {
                    $context = context_course::instance($cid);
                    self::validate_context($context);
                    $courses[$cid] = get_course($cid);
                } catch (Exception $e) {
                    $warnings[] = array(
                        'item' => 'course',
                        'itemid' => $cid,
                        'warningcode' => '1',
                        'message' => 'No access rights in course context'
                    );
                }
            }

            return array($courses, $warnings);
        }

    }
}

if (!function_exists('external_format_string')) {
    /**
     * Format the string to be returned properly as requested by the either the web service server,
     * either by an internally call.
     * The caller can change the format (raw) with the external_settings singleton
     * All web service servers must set this singleton when parsing the $_GET and $_POST.
     *
     * @param string $str The string to be filtered. Should be plain text, expect
     * possibly for multilang tags.
     * @param boolean $striplinks To strip any link in the result text. Moodle 1.8 default changed from false to true! MDL-8713
     * @param int $contextid The id of the context for the string (affects filters).
     * @param array $options options array/object or courseid
     * @return string text
     * @since Moodle 3.0
     */
    function external_format_string($str, $contextid, $striplinks = true, $options = array()) {

        // Get settings (singleton).
        $settings = external_settings::get_instance();
        if (empty($contextid)) {
            throw new coding_exception('contextid is required');
        }

        if (!$settings->get_raw()) {
            $context = context::instance_by_id($contextid);
            $options['context'] = $context;
            $options['filter'] = $settings->get_filter();
            $str = format_string($str, $striplinks, $options);
        }

        return $str;
    }
}

require_once($CFG->dirroot . '/mod/lti/locallib.php');

if (!function_exists('lti_get_launch_data')) {
    /**
     * Return the launch data required for opening the external tool.
     *
     * @param  stdClass $instance the external tool activity settings
     * @return array the endpoint URL and parameters (including the signature)
     * @since  Moodle 3.0
     */
    function lti_get_launch_data($instance) {
        global $PAGE, $CFG;

        if (empty($instance->typeid)) {
            $tool = lti_get_tool_by_url_match($instance->toolurl, $instance->course);
            if ($tool) {
                $typeid = $tool->id;
            } else {
                $typeid = null;
            }
        } else {
            $typeid = $instance->typeid;
            $tool = lti_get_type($typeid);
        }

        if ($typeid) {
            $typeconfig = lti_get_type_config($typeid);
        } else {
            // There is no admin configuration for this tool. Use configuration in the lti instance record plus some defaults.
            $typeconfig = (array)$instance;

            $typeconfig['sendname'] = $instance->instructorchoicesendname;
            $typeconfig['sendemailaddr'] = $instance->instructorchoicesendemailaddr;
            $typeconfig['customparameters'] = $instance->instructorcustomparameters;
            $typeconfig['acceptgrades'] = $instance->instructorchoiceacceptgrades;
            $typeconfig['allowroster'] = $instance->instructorchoiceallowroster;
            $typeconfig['forcessl'] = '0';
        }

        // Default the organizationid if not specified.
        if (empty($typeconfig['organizationid'])) {
            $urlparts = parse_url($CFG->wwwroot);

            $typeconfig['organizationid'] = $urlparts['host'];
        }

        if (isset($tool->toolproxyid)) {
            $toolproxy = lti_get_tool_proxy($tool->toolproxyid);
            $key = $toolproxy->guid;
            $secret = $toolproxy->secret;
        } else {
            $toolproxy = null;
            if (!empty($instance->resourcekey)) {
                $key = $instance->resourcekey;
            } else if (!empty($typeconfig['resourcekey'])) {
                $key = $typeconfig['resourcekey'];
            } else {
                $key = '';
            }
            if (!empty($instance->password)) {
                $secret = $instance->password;
            } else if (!empty($typeconfig['password'])) {
                $secret = $typeconfig['password'];
            } else {
                $secret = '';
            }
        }

        $endpoint = !empty($instance->toolurl) ? $instance->toolurl : $typeconfig['toolurl'];
        $endpoint = trim($endpoint);

        // If the current request is using SSL and a secure tool URL is specified, use it.
        if (lti_request_is_using_ssl() && !empty($instance->securetoolurl)) {
            $endpoint = trim($instance->securetoolurl);
        }

        // If SSL is forced, use the secure tool url if specified. Otherwise, make sure https is on the normal launch URL.
        if (isset($typeconfig['forcessl']) && ($typeconfig['forcessl'] == '1')) {
            if (!empty($instance->securetoolurl)) {
                $endpoint = trim($instance->securetoolurl);
            }

            $endpoint = lti_ensure_url_is_https($endpoint);
        } else {
            if (!strstr($endpoint, '://')) {
                $endpoint = 'http://' . $endpoint;
            }
        }

        $orgid = $typeconfig['organizationid'];

        $course = $PAGE->course;
        $islti2 = isset($tool->toolproxyid);
        $allparams = lti_build_request($instance, $typeconfig, $course, $typeid, $islti2);
        if ($islti2) {
            $requestparams = lti_build_request_lti2($tool, $allparams);
        } else {
            $requestparams = $allparams;
        }
        $requestparams = array_merge($requestparams, lti_build_standard_request($instance, $orgid, $islti2));
        $customstr = '';
        if (isset($typeconfig['customparameters'])) {
            $customstr = $typeconfig['customparameters'];
        }
        $requestparams = array_merge($requestparams, lti_build_custom_parameters($toolproxy, $tool, $instance, $allparams, $customstr,
            $instance->instructorcustomparameters, $islti2));

        $launchcontainer = lti_get_launch_container($instance, $typeconfig);
        $returnurlparams = array('course' => $course->id,
                                 'launch_container' => $launchcontainer,
                                 'instanceid' => $instance->id,
                                 'sesskey' => sesskey());

        // Add the return URL. We send the launch container along to help us avoid frames-within-frames when the user returns.
        $url = new \moodle_url('/mod/lti/return.php', $returnurlparams);
        $returnurl = $url->out(false);

        if (isset($typeconfig['forcessl']) && ($typeconfig['forcessl'] == '1')) {
            $returnurl = lti_ensure_url_is_https($returnurl);
        }

        $target = '';
        switch($launchcontainer) {
            case LTI_LAUNCH_CONTAINER_EMBED:
            case LTI_LAUNCH_CONTAINER_EMBED_NO_BLOCKS:
                $target = 'iframe';
                break;
            case LTI_LAUNCH_CONTAINER_REPLACE_MOODLE_WINDOW:
                $target = 'frame';
                break;
            case LTI_LAUNCH_CONTAINER_WINDOW:
                $target = 'window';
                break;
        }
        if (!empty($target)) {
            $requestparams['launch_presentation_document_target'] = $target;
        }

        $requestparams['launch_presentation_return_url'] = $returnurl;

        // Allow request params to be updated by sub-plugins.
        $plugins = core_component::get_plugin_list('ltisource');
        foreach (array_keys($plugins) as $plugin) {
            $pluginparams = component_callback('ltisource_'.$plugin, 'before_launch',
                array($instance, $endpoint, $requestparams), array());

            if (!empty($pluginparams) && is_array($pluginparams)) {
                $requestparams = array_merge($requestparams, $pluginparams);
            }
        }

        if (!empty($key) && !empty($secret)) {
            $parms = lti_sign_parameters($requestparams, $endpoint, "POST", $key, $secret);

            $endpointurl = new \moodle_url($endpoint);
            $endpointparams = $endpointurl->params();

            // Strip querystring params in endpoint url from $parms to avoid duplication.
            if (!empty($endpointparams) && !empty($parms)) {
                foreach (array_keys($endpointparams) as $paramname) {
                    if (isset($parms[$paramname])) {
                        unset($parms[$paramname]);
                    }
                }
            }

        } else {
            // If no key and secret, do the launch unsigned.
            $returnurlparams['unsigned'] = '1';
            $parms = $requestparams;
        }

        return array($endpoint, $parms);
    }
}

// In Moodle 3.0, lti_view function is renamed to lti_launch_tool and a new lti_view function is created.
// In here we'll rename this new lti_view function to mod_lti_view to prevent problems with the existing one.

/**
 * Mark the activity completed (if required) and trigger the course_module_viewed event.
 *
 * @param  stdClass $lti        lti object
 * @param  stdClass $course     course object
 * @param  stdClass $cm         course module object
 * @param  stdClass $context    context object
 * @since Moodle 3.0
 */
function mod_lti_view($lti, $course, $cm, $context) {

    // Trigger course_module_viewed event.
    $params = array(
        'context' => $context,
        'objectid' => $lti->id
    );

    $event = \mod_lti\event\course_module_viewed::create($params);
    $event->add_record_snapshot('course_modules', $cm);
    $event->add_record_snapshot('course', $course);
    $event->add_record_snapshot('lti', $lti);
    $event->trigger();

    // Completion.
    $completion = new completion_info($course);
    $completion->set_module_viewed($cm);
}

require_once($CFG->dirroot . '/mod/survey/lib.php');

if (!function_exists('survey_view')) {

    /**
     * Mark the activity completed (if required) and trigger the course_module_viewed event.
     *
     * @param  stdClass $survey     survey object
     * @param  stdClass $course     course object
     * @param  stdClass $cm         course module object
     * @param  stdClass $context    context object
     * @param  string $viewed       which page viewed
     * @since Moodle 3.0
     */
    function survey_view($survey, $course, $cm, $context, $viewed) {

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $survey->id,
            'courseid' => $course->id,
            'other' => array('viewed' => $viewed)
        );

        $event = \mod_survey\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('survey', $survey);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);
    }
}


if (!function_exists('survey_order_questions')) {

    /**
     * Helper function for ordering a set of questions by the given ids.
     *
     * @param  array $questions     array of questions objects
     * @param  array $questionorder array of questions ids indicating the correct order
     * @return array                list of questions ordered
     * @since Moodle 3.0
     */
    function survey_order_questions($questions, $questionorder) {

        $finalquestions = array();
        foreach ($questionorder as $qid) {
            $finalquestions[] = $questions[$qid];
        }
        return $finalquestions;
    }
}


if (!function_exists('survey_translate_question')) {

    /**
     * Translate the question texts and options.
     *
     * @param  stdClass $question question object
     * @return stdClass question object with all the text fields translated
     * @since Moodle 3.0
     */
    function survey_translate_question($question) {

        if ($question->text) {
            $question->text = get_string($question->text, "survey");
        }

        if ($question->shorttext) {
            $question->shorttext = get_string($question->shorttext, "survey");
        }

        if ($question->intro) {
            $question->intro = get_string($question->intro, "survey");
        }

        if ($question->options) {
            $question->options = get_string($question->options, "survey");
        }
        return $question;
    }
}

if (!function_exists('survey_get_questions')) {

    /**
     * Returns the questions for a survey (ordered).
     *
     * @param  stdClass $survey survey object
     * @return array list of questions ordered
     * @since Moodle 3.0
     * @throws  moodle_exception
     */
    function survey_get_questions($survey) {
        global $DB;

        $questionids = explode(',', $survey->questions);
        if (! $questions = $DB->get_records_list("survey_questions", "id", $questionids)) {
            throw new moodle_exception('cannotfindquestion', 'survey');
        }

        return survey_order_questions($questions, $questionids);
    }
}

if (!function_exists('survey_get_subquestions')) {

    /**
     * Returns subquestions for a given question (ordered).
     *
     * @param  stdClass $question questin object
     * @return array list of subquestions ordered
     * @since Moodle 3.0
     */
    function survey_get_subquestions($question) {
        global $DB;

        $questionids = explode(',', $question->multi);
        $questions = $DB->get_records_list("survey_questions", "id", $questionids);

        return survey_order_questions($questions, $questionids);
    }
}

if (!function_exists('survey_save_answers')) {

    /**
     * Save the answer for the given survey
     *
     * @param  stdClass $survey   a survey object
     * @param  array $answersrawdata the answers to be saved
     * @param  stdClass $course   a course object (required for trigger the submitted event)
     * @param  stdClass $context  a context object (required for trigger the submitted event)
     * @since Moodle 3.0
     */
    function survey_save_answers($survey, $answersrawdata, $course, $context) {
        global $DB, $USER;

        $answers = array();

        // Sort through the data and arrange it.
        // This is necessary because some of the questions may have two answers, eg Question 1 -> 1 and P1.
        foreach ($answersrawdata as $key => $val) {
            if ($key <> "userid" && $key <> "id") {
                if (substr($key, 0, 1) == "q") {
                    $key = clean_param(substr($key, 1), PARAM_ALPHANUM);   // Keep everything but the 'q', number or P number.
                }
                if (substr($key, 0, 1) == "P") {
                    $realkey = (int) substr($key, 1);
                    $answers[$realkey][1] = $val;
                } else {
                    $answers[$key][0] = $val;
                }
            }
        }

        // Now store the data.
        $timenow = time();
        $answerstoinsert = array();
        foreach ($answers as $key => $val) {
            if ($key != 'sesskey') {
                $newdata = new stdClass();
                $newdata->time = $timenow;
                $newdata->userid = $USER->id;
                $newdata->survey = $survey->id;
                $newdata->question = $key;
                if (!empty($val[0])) {
                    $newdata->answer1 = $val[0];
                } else {
                    $newdata->answer1 = "";
                }
                if (!empty($val[1])) {
                    $newdata->answer2 = $val[1];
                } else {
                    $newdata->answer2 = "";
                }

                $answerstoinsert[] = $newdata;
            }
        }

        if (!empty($answerstoinsert)) {
            $DB->insert_records("survey_answers", $answerstoinsert);
        }

        $params = array(
            'context' => $context,
            'courseid' => $course->id,
            'other' => array('surveyid' => $survey->id)
        );
        $event = \mod_survey\event\response_submitted::create($params);
        $event->trigger();
    }
}

require_once($CFG->dirroot . '/enrol/self/locallib.php');
if (!function_exists('enrol_self_check_group_enrolment_key')) {
    /**
     * Check if the given password match a group enrolment key in the specified course.
     *
     * @param  int $courseid            course id
     * @param  string $enrolpassword    enrolment password
     * @return bool                     True if match
     * @since  Moodle 3.0
     */
    function enrol_self_check_group_enrolment_key($courseid, $enrolpassword) {
        global $DB;

        $found = false;
        $groups = $DB->get_records('groups', array('courseid' => $courseid), 'id ASC', 'id, enrolmentkey');

        foreach ($groups as $group) {
            if (empty($group->enrolmentkey)) {
                continue;
            }
            if ($group->enrolmentkey === $enrolpassword) {
                $found = true;
                break;
            }
        }
        return $found;
    }
}

require_once($CFG->libdir . '/enrollib.php');

function enrol_guest_get_enrol_info($enrolinstance) {
    $enrolplugin = enrol_get_plugin('guest');

    $instanceinfo = new stdClass();
    $instanceinfo->id = $enrolinstance->id;
    $instanceinfo->courseid = $enrolinstance->courseid;
    $instanceinfo->type = $enrolplugin->get_name();
    $instanceinfo->name = $enrolplugin->get_instance_name($enrolinstance);
    $instanceinfo->status = $enrolinstance->status == ENROL_INSTANCE_ENABLED;
    // Specifics enrolment method parameters.
    $instanceinfo->requiredparam = new stdClass();
    $instanceinfo->requiredparam->passwordrequired = !empty($enrolinstance->password);

    // If the plugin is enabled, return the URL for obtaining more information.
    if ($instanceinfo->status) {
        $instanceinfo->wsfunction = 'enrol_guest_get_instance_info';
    }
    return $instanceinfo;
}

require_once($CFG->dirroot . '/mod/scorm/lib.php');
require_once($CFG->dirroot . '/mod/scorm/locallib.php');

if (!function_exists('scorm_get_availability_status')) {

    /**
     * Check if a SCORM is available for the current user.
     *
     * @param  stdClass  $scorm            SCORM record
     * @param  boolean $checkviewreportcap Check the scorm:viewreport cap
     * @param  stdClass  $context          Module context, required if $checkviewreportcap is set to true
     * @return array                       status (available or not and possible warnings)
     * @since  Moodle 3.0
     */
    function scorm_get_availability_status($scorm, $checkviewreportcap = false, $context = null) {
        $open = true;
        $closed = false;
        $warnings = array();

        $timenow = time();
        if (!empty($scorm->timeopen) and $scorm->timeopen > $timenow) {
            $open = false;
        }
        if (!empty($scorm->timeclose) and $timenow > $scorm->timeclose) {
            $closed = true;
        }

        if (!$open or $closed) {
            if ($checkviewreportcap and !empty($context) and has_capability('mod/scorm:viewreport', $context)) {
                return array(true, $warnings);
            }

            if (!$open) {
                $warnings['notopenyet'] = userdate($scorm->timeopen);
            }
            if ($closed) {
                $warnings['expired'] = userdate($scorm->timeclose);
            }
            return array(false, $warnings);
        }

        // Scorm is available.
        return array(true, $warnings);
    }
}

if (!function_exists('scorm_require_available')) {
    /**
     * Requires a SCORM package to be available for the current user.
     *
     * @param  stdClass  $scorm            SCORM record
     * @param  boolean $checkviewreportcap Check the scorm:viewreport cap
     * @param  stdClass  $context          Module context, required if $checkviewreportcap is set to true
     * @throws moodle_exception
     * @since  Moodle 3.0
     */
    function scorm_require_available($scorm, $checkviewreportcap = false, $context = null) {

        list($available, $warnings) = scorm_get_availability_status($scorm, $checkviewreportcap, $context);

        if (!$available) {
            $reason = current(array_keys($warnings));
            throw new moodle_exception($reason, 'scorm', '', $warnings[$reason]);
        }
    }
}

require_once("$CFG->dirroot/mod/glossary/lib.php");

if (!file_exists("$CFG->dirroot/mod/glossary/classes/entry_query_builder.php")) {
    /**
     * Entry query builder class.
     *
     * The purpose of this class is to avoid duplicating SQL statements to fetch entries
     * which are very similar with each other. This builder is not meant to be smart, it
     * will not out rule any previously set condition, or join, etc...
     *
     * You should be using this builder just like you would be creating your SQL query. Only
     * some methods are shorthands to avoid logic duplication and common mistakes.
     *
     * @package    mod_glossary
     * @copyright  2015 Frédéric Massart - FMCorz.net
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     * @since      Moodle 3.1
     */
    class mod_glossary_entry_query_builder {

        /** Alias for table glossary_alias. */
        const ALIAS_ALIAS = 'ga';
        /** Alias for table glossary_categories. */
        const ALIAS_CATEGORIES = 'gc';
        /** Alias for table glossary_entries_categories. */
        const ALIAS_ENTRIES_CATEGORIES = 'gec';
        /** Alias for table glossary_entries. */
        const ALIAS_ENTRIES = 'ge';
        /** Alias for table user. */
        const ALIAS_USER = 'u';

        /** Include none of the entries to approve. */
        const NON_APPROVED_NONE = 'na_none';
        /** Including all the entries. */
        const NON_APPROVED_ALL = 'na_all';
        /** Including only the entries to be approved. */
        const NON_APPROVED_ONLY = 'na_only';
        /** Including my entries to be approved. */
        const NON_APPROVED_SELF = 'na_self';

        /** @var array Raw SQL statements representing the fields to select. */
        protected $fields = array();
        /** @var array Raw SQL statements representing the JOINs to make. */
        protected $joins = array();
        /** @var string Raw SQL statement representing the FROM clause. */
        protected $from;
        /** @var object The glossary we are fetching from. */
        protected $glossary;
        /** @var int The number of records to fetch from. */
        protected $limitfrom = 0;
        /** @var int The number of records to fetch. */
        protected $limitnum = 0;
        /** @var array List of SQL parameters. */
        protected $params = array();
        /** @var array Raw SQL statements representing the ORDER clause. */
        protected $order = array();
        /** @var array Raw SQL statements representing the WHERE clause. */
        protected $where = array();

        /**
         * Constructor.
         *
         * @param object $glossary The glossary.
         */
        public function __construct($glossary = null) {
            $this->from = sprintf('FROM {glossary_entries} %s', self::ALIAS_ENTRIES);
            if (!empty($glossary)) {
                $this->glossary = $glossary;
                $this->where[] = sprintf('(%s.glossaryid = :gid OR %s.sourceglossaryid = :gid2)',
                    self::ALIAS_ENTRIES, self::ALIAS_ENTRIES);
                $this->params['gid'] = $glossary->id;
                $this->params['gid2'] = $glossary->id;
            }
        }

        /**
         * Add a field to select.
         *
         * @param string $field The field, or *.
         * @param string $table The table name, without the prefix 'glossary_'.
         * @param string $alias An alias for the field.
         */
        public function add_field($field, $table, $alias = null) {
            $field = self::resolve_field($field, $table);
            if (!empty($alias)) {
                $field .= ' AS ' . $alias;
            }
            $this->fields[] = $field;
        }

        /**
         * Adds the user fields.
         *
         * @return void
         */
        public function add_user_fields() {
            $this->fields[] = user_picture::fields('u', null, 'userdataid', 'userdata');
        }

        /**
         * Internal method to build the query.
         *
         * @param bool $count Query to count?
         * @return string The SQL statement.
         */
        protected function build_query($count = false) {
            $sql = 'SELECT ';

            if ($count) {
                $sql .= 'COUNT(\'x\') ';
            } else {
                $sql .= implode(', ', $this->fields) . ' ';
            }

            $sql .= $this->from . ' ';
            $sql .= implode(' ', $this->joins) . ' ';

            if (!empty($this->where)) {
                $sql .= 'WHERE (' . implode(') AND (', $this->where) . ') ';
            }

            if (!$count && !empty($this->order)) {
                $sql .= 'ORDER BY ' . implode(', ', $this->order);
            }

            return $sql;
        }

        /**
         * Count the records.
         *
         * @return int The number of records.
         */
        public function count_records() {
            global $DB;
            return $DB->count_records_sql($this->build_query(true), $this->params);
        }

        /**
         * Filter a field using a letter.
         *
         * @param string $letter     The letter.
         * @param string $finalfield The SQL statement representing the field.
         */
        protected function filter_by_letter($letter, $finalfield) {
            global $DB;

            $letter = core_text::strtoupper($letter);
            $len = core_text::strlen($letter);
            $sql = $DB->sql_substr(sprintf('upper(%s)', $finalfield), 1, $len);

            $this->where[] = "$sql = :letter";
            $this->params['letter'] = $letter;
        }

        /**
         * Filter a field by special characters.
         *
         * @param string $finalfield The SQL statement representing the field.
         */
        protected function filter_by_non_letter($finalfield) {
            global $DB;

            $alphabet = explode(',', get_string('alphabet', 'langconfig'));
            list($nia, $aparams) = $DB->get_in_or_equal($alphabet, SQL_PARAMS_NAMED, 'nonletter', false);

            $sql = $DB->sql_substr(sprintf('upper(%s)', $finalfield), 1, 1);

            $this->where[] = "$sql $nia";
            $this->params = array_merge($this->params, $aparams);
        }

        /**
         * Filter the author by letter.
         *
         * @param string  $letter         The letter.
         * @param bool    $firstnamefirst Whether or not the firstname is first in the author's name.
         */
        public function filter_by_author_letter($letter, $firstnamefirst = false) {
            $field = self::get_fullname_field($firstnamefirst);
            $this->filter_by_letter($letter, $field);
        }

        /**
         * Filter the author by special characters.
         *
         * @param bool $firstnamefirst Whether or not the firstname is first in the author's name.
         */
        public function filter_by_author_non_letter($firstnamefirst = false) {
            $field = self::get_fullname_field($firstnamefirst);
            $this->filter_by_non_letter($field);
        }

        /**
         * Filter the concept by letter.
         *
         * @param string  $letter         The letter.
         */
        public function filter_by_concept_letter($letter) {
            $this->filter_by_letter($letter, self::resolve_field('concept', 'entries'));
        }

        /**
         * Filter the concept by special characters.
         *
         * @return void
         */
        public function filter_by_concept_non_letter() {
            $this->filter_by_non_letter(self::resolve_field('concept', 'entries'));
        }

        /**
         * Filter non approved entries.
         *
         * @param string $constant One of the NON_APPROVED_* constants.
         * @param int    $userid   The user ID when relevant, otherwise current user.
         */
        public function filter_by_non_approved($constant, $userid = null) {
            global $USER;
            if (!$userid) {
                $userid = $USER->id;
            }

            if ($constant === self::NON_APPROVED_ALL) {
                // Nothing to do.

            } else if ($constant === self::NON_APPROVED_SELF) {
                $this->where[] = sprintf('%s != 0 OR %s = :toapproveuserid',
                    self::resolve_field('approved', 'entries'), self::resolve_field('userid', 'entries'));
                $this->params['toapproveuserid'] = $USER->id;

            } else if ($constant === self::NON_APPROVED_NONE) {
                $this->where[] = sprintf('%s != 0', self::resolve_field('approved', 'entries'));

            } else if ($constant === self::NON_APPROVED_ONLY) {
                $this->where[] = sprintf('%s = 0', self::resolve_field('approved', 'entries'));

            } else {
                throw new coding_exception('Invalid constant');
            }
        }

        /**
         * Filter by concept or alias.
         *
         * This requires the alias table to be joined in the query. See {@link self::join_alias()}.
         *
         * @param string $term What the concept or aliases should be.
         */
        public function filter_by_term($term) {
            $this->where[] = sprintf("(%s = :filterterma OR %s = :filtertermb)",
                self::resolve_field('concept', 'entries'),
                self::resolve_field('alias', 'alias'));
            $this->params['filterterma'] = $term;
            $this->params['filtertermb'] = $term;
        }

        /**
         * Convenience method to get get the SQL statement for the full name.
         *
         * @param bool $firstnamefirst Whether or not the firstname is first in the author's name.
         * @return string The SQL statement.
         */
        public static function get_fullname_field($firstnamefirst = false) {
            global $DB;
            if ($firstnamefirst) {
                return $DB->sql_fullname(self::resolve_field('firstname', 'user'), self::resolve_field('lastname', 'user'));
            }
            return $DB->sql_fullname(self::resolve_field('lastname', 'user'), self::resolve_field('firstname', 'user'));
        }

        /**
         * Get the records.
         *
         * @return array
         */
        public function get_records() {
            global $DB;
            return $DB->get_records_sql($this->build_query(), $this->params, $this->limitfrom, $this->limitnum);
        }

        /**
         * Get the recordset.
         *
         * @return moodle_recordset
         */
        public function get_recordset() {
            global $DB;
            return $DB->get_recordset_sql($this->build_query(), $this->params, $this->limitfrom, $this->limitnum);
        }

        /**
         * Retrieve a user object from a record.
         *
         * This comes handy when {@link self::add_user_fields} was used.
         *
         * @param stdClass $record The record.
         * @return stdClass A user object.
         */
        public static function get_user_from_record($record) {
            return user_picture::unalias($record, null, 'userdataid', 'userdata');
        }

        /**
         * Join the alias table.
         *
         * Note that this may cause the same entry to be returned more than once. You might want
         * to add a distinct on the entry id.
         *
         * @return void
         */
        public function join_alias() {
            $this->joins[] = sprintf('LEFT JOIN {glossary_alias} %s ON %s = %s',
                self::ALIAS_ALIAS, self::resolve_field('id', 'entries'), self::resolve_field('entryid', 'alias'));
        }

        /**
         * Join on the category tables.
         *
         * Depending on the category passed the joins will be different. This is due to the display
         * logic that assumes that when displaying all categories the non categorised entries should
         * not be returned, etc...
         *
         * @param int $categoryid The category ID, or GLOSSARY_SHOW_* constant.
         */
        public function join_category($categoryid) {

            if ($categoryid === GLOSSARY_SHOW_ALL_CATEGORIES) {
                $this->joins[] = sprintf('JOIN {glossary_entries_categories} %s ON %s = %s',
                    self::ALIAS_ENTRIES_CATEGORIES, self::resolve_field('id', 'entries'),
                    self::resolve_field('entryid', 'entries_categories'));

                $this->joins[] = sprintf('JOIN {glossary_categories} %s ON %s = %s',
                    self::ALIAS_CATEGORIES, self::resolve_field('id', 'categories'),
                    self::resolve_field('categoryid', 'entries_categories'));

            } else if ($categoryid === GLOSSARY_SHOW_NOT_CATEGORISED) {
                $this->joins[] = sprintf('LEFT JOIN {glossary_entries_categories} %s ON %s = %s',
                    self::ALIAS_ENTRIES_CATEGORIES, self::resolve_field('id', 'entries'),
                    self::resolve_field('entryid', 'entries_categories'));

            } else {
                $this->joins[] = sprintf('JOIN {glossary_entries_categories} %s ON %s = %s AND %s = :joincategoryid',
                    self::ALIAS_ENTRIES_CATEGORIES, self::resolve_field('id', 'entries'),
                    self::resolve_field('entryid', 'entries_categories'),
                    self::resolve_field('categoryid', 'entries_categories'));
                $this->params['joincategoryid'] = $categoryid;

            }
        }

        /**
         * Join the user table.
         *
         * @param bool $strict When strict uses a JOIN rather than a LEFT JOIN.
         */
        public function join_user($strict = false) {
            $join = $strict ? 'JOIN' : 'LEFT JOIN';
            $this->joins[] = sprintf("$join {user} %s ON %s = %s",
                self::ALIAS_USER, self::resolve_field('id', 'user'), self::resolve_field('userid', 'entries'));
        }

        /**
         * Limit the number of records to fetch.
         * @param int $from Fetch from.
         * @param int $num  Number to fetch.
         */
        public function limit($from, $num) {
            $this->limitfrom = $from;
            $this->limitnum = $num;
        }

        /**
         * Normalise a direction.
         *
         * This ensures that the value is either ASC or DESC.
         *
         * @param string $direction The desired direction.
         * @return string ASC or DESC.
         */
        protected function normalize_direction($direction) {
            $direction = core_text::strtoupper($direction);
            if ($direction == 'DESC') {
                return 'DESC';
            }
            return 'ASC';
        }

        /**
         * Order by a field.
         *
         * @param string $field The field, or *.
         * @param string $table The table name, without the prefix 'glossary_'.
         * @param string $direction ASC, or DESC.
         */
        public function order_by($field, $table, $direction = '') {
            $direction = self::normalize_direction($direction);
            $this->order[] = self::resolve_field($field, $table) . ' ' . $direction;
        }

        /**
         * Order by author name.
         *
         * @param bool   $firstnamefirst Whether or not the firstname is first in the author's name.
         * @param string $direction ASC, or DESC.
         */
        public function order_by_author($firstnamefirst = false, $direction = '') {
            $field = self::get_fullname_field($firstnamefirst);
            $direction = self::normalize_direction($direction);
            $this->order[] = $field . ' ' . $direction;
        }

        /**
         * Convenience method to transform a field into SQL statement.
         *
         * @param string $field The field, or *.
         * @param string $table The table name, without the prefix 'glossary_'.
         * @return string SQL statement.
         */
        protected static function resolve_field($field, $table) {
            $prefix = constant(__CLASS__ . '::ALIAS_' . core_text::strtoupper($table));
            return sprintf('%s.%s', $prefix, $field);
        }

        /**
         * Simple where conditions.
         *
         * @param string $field The field, or *.
         * @param string $table The table name, without the prefix 'glossary_'.
         * @param mixed $value The value to be equal to.
         */
        public function where($field, $table, $value) {
            static $i = 0;
            $sql = self::resolve_field($field, $table) . ' ';

            if ($value === null) {
                $sql .= 'IS NULL';

            } else {
                $param = 'where' . $i++;
                $sql .= " = :$param";
                $this->params[$param] = $value;
            }

            $this->where[] = $sql;
        }

    }
}

if (!function_exists('glossary_view')) {
    /**
     * Notify that the glossary was viewed.
     *
     * This will trigger relevant events and activity completion.
     *
     * @param stdClass $glossary The glossary object.
     * @param stdClass $course   The course object.
     * @param stdClass $cm       The course module object.
     * @param stdClass $context  The context object.
     * @param string   $mode     The mode in which the glossary was viewed.
     * @since Moodle 3.1
     */
    function glossary_view($glossary, $course, $cm, $context, $mode) {

        // Completion trigger.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        // Trigger the course module viewed event.
        $event = \mod_glossary\event\course_module_viewed::create(array(
            'objectid' => $glossary->id,
            'context' => $context,
            'other' => array('mode' => $mode)
        ));
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('glossary', $glossary);
        $event->trigger();
    }
}

if (!function_exists('glossary_entry_view')) {
    /**
     * Notify that a glossary entry was viewed.
     *
     * This will trigger relevant events.
     *
     * @param stdClass $entry    The entry object.
     * @param stdClass $context  The context object.
     * @since Moodle 3.1
     */
    function glossary_entry_view($entry, $context) {

        // Trigger the entry viewed event.
        $event = \mod_glossary\event\entry_viewed::create(array(
            'objectid' => $entry->id,
            'context' => $context
        ));
        $event->add_record_snapshot('glossary_entries', $entry);
        $event->trigger();

    }
}

if (!function_exists('glossary_get_entries_by_letter')) {
    /**
     * Returns the entries of a glossary by letter.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  string $letter The letter, or ALL, or SPECIAL.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_letter($glossary, $context, $letter, $from, $limit, $options = array()) {

        $qb = new mod_glossary_entry_query_builder($glossary);
        if ($letter != 'ALL' && $letter != 'SPECIAL' && core_text::strlen($letter)) {
            $qb->filter_by_concept_letter($letter);
        }
        if ($letter == 'SPECIAL') {
            $qb->filter_by_concept_non_letter();
        }

        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ALL);
        } else {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_SELF);
        }

        $qb->add_field('*', 'entries');
        $qb->join_user();
        $qb->add_user_fields();
        $qb->order_by('concept', 'entries');
        $qb->order_by('id', 'entries', 'ASC'); // Sort on ID to avoid random ordering when entries share an ordering value.
        $qb->limit($from, $limit);

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entries_by_date')) {
    /**
     * Returns the entries of a glossary by date.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  string $order The mode of ordering: CREATION or UPDATE.
     * @param  string $sort The direction of the ordering: ASC or DESC.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_date($glossary, $context, $order, $sort, $from, $limit, $options = array()) {

        $qb = new mod_glossary_entry_query_builder($glossary);
        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ALL);
        } else {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_SELF);
        }

        $qb->add_field('*', 'entries');
        $qb->join_user();
        $qb->add_user_fields();
        $qb->limit($from, $limit);

        if ($order == 'CREATION') {
            $qb->order_by('timecreated', 'entries', $sort);
        } else {
            $qb->order_by('timemodified', 'entries', $sort);
        }
        $qb->order_by('id', 'entries', $sort); // Sort on ID to avoid random ordering when entries share an ordering value.

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entries_by_category')) {
    /**
     * Returns the entries of a glossary by category.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  int $categoryid The category ID, or GLOSSARY_SHOW_* constant.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_category($glossary, $context, $categoryid, $from, $limit, $options = array()) {

        $qb = new mod_glossary_entry_query_builder($glossary);
        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ALL);
        } else {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_SELF);
        }

        $qb->join_category($categoryid);
        $qb->join_user();

        // The first field must be the relationship ID when viewing all categories.
        if ($categoryid === GLOSSARY_SHOW_ALL_CATEGORIES) {
            $qb->add_field('id', 'entries_categories', 'cid');
        }

        $qb->add_field('*', 'entries');
        $qb->add_field('categoryid', 'entries_categories');
        $qb->add_user_fields();

        if ($categoryid === GLOSSARY_SHOW_ALL_CATEGORIES) {
            $qb->add_field('name', 'categories', 'categoryname');
            $qb->order_by('name', 'categories');

        } else if ($categoryid === GLOSSARY_SHOW_NOT_CATEGORISED) {
            $qb->where('categoryid', 'entries_categories', null);
        }

        // Sort on additional fields to avoid random ordering when entries share an ordering value.
        $qb->order_by('concept', 'entries');
        $qb->order_by('id', 'entries', 'ASC');
        $qb->limit($from, $limit);

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entries_by_author')) {
    /**
     * Returns the entries of a glossary by author.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  string $letter The letter
     * @param  string $field The field to search: FIRSTNAME or LASTNAME.
     * @param  string $sort The sorting: ASC or DESC.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_author($glossary, $context, $letter, $field, $sort, $from, $limit, $options = array()) {

        $firstnamefirst = $field === 'FIRSTNAME';
        $qb = new mod_glossary_entry_query_builder($glossary);
        if ($letter != 'ALL' && $letter != 'SPECIAL' && core_text::strlen($letter)) {
            $qb->filter_by_author_letter($letter, $firstnamefirst);
        }
        if ($letter == 'SPECIAL') {
            $qb->filter_by_author_non_letter($firstnamefirst);
        }

        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ALL);
        } else {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_SELF);
        }

        $qb->add_field('*', 'entries');
        $qb->join_user(true);
        $qb->add_user_fields();
        $qb->order_by_author($firstnamefirst, $sort);
        $qb->order_by('concept', 'entries');
        $qb->order_by('id', 'entries', 'ASC'); // Sort on ID to avoid random ordering when entries share an ordering value.
        $qb->limit($from, $limit);

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entries_by_author_id')) {
    /**
     * Returns the entries of a glossary by category.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  int $authorid The author ID.
     * @param  string $order The mode of ordering: CONCEPT, CREATION or UPDATE.
     * @param  string $sort The direction of the ordering: ASC or DESC.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_author_id($glossary, $context, $authorid, $order, $sort, $from, $limit, $options = array()) {

        $qb = new mod_glossary_entry_query_builder($glossary);
        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ALL);
        } else {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_SELF);
        }

        $qb->add_field('*', 'entries');
        $qb->join_user(true);
        $qb->add_user_fields();
        $qb->where('id', 'user', $authorid);

        if ($order == 'CREATION') {
            $qb->order_by('timecreated', 'entries', $sort);
        } else if ($order == 'UPDATE') {
            $qb->order_by('timemodified', 'entries', $sort);
        } else {
            $qb->order_by('concept', 'entries', $sort);
        }
        $qb->order_by('id', 'entries', $sort); // Sort on ID to avoid random ordering when entries share an ordering value.

        $qb->limit($from, $limit);

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_authors')) {
    /**
     * Returns the authors in a glossary
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  int $limit Number of records to fetch.
     * @param  int $from Fetch records from.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes self even if all of their entries require approval.
     *                          When true, also includes authors only having entries pending approval.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_authors($glossary, $context, $limit, $from, $options = array()) {
        global $DB, $USER;

        $params = array();
        $userfields = user_picture::fields('u', null);

        $approvedsql = '(ge.approved <> 0 OR ge.userid = :myid)';
        $params['myid'] = $USER->id;
        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $approvedsql = '1 = 1';
        }

        $sqlselectcount = "SELECT COUNT(DISTINCT(u.id))";
        $sqlselect = "SELECT DISTINCT(u.id) AS userId, $userfields";
        $sql = "  FROM {user} u
                  JOIN {glossary_entries} ge
                    ON ge.userid = u.id
                   AND (ge.glossaryid = :gid1 OR ge.sourceglossaryid = :gid2)
                   AND $approvedsql";
        $ordersql = " ORDER BY u.lastname, u.firstname";

        $params['gid1'] = $glossary->id;
        $params['gid2'] = $glossary->id;

        $count = $DB->count_records_sql($sqlselectcount . $sql, $params);
        $users = $DB->get_recordset_sql($sqlselect . $sql . $ordersql, $params, $from, $limit);

        return array($users, $count);
    }
}

if (!function_exists('glossary_get_categories')) {
    /**
     * Returns the categories of a glossary.
     *
     * @param  object $glossary The glossary.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_categories($glossary, $from, $limit) {
        global $DB;

        $count = $DB->count_records('glossary_categories', array('glossaryid' => $glossary->id));
        $categories = $DB->get_recordset('glossary_categories', array('glossaryid' => $glossary->id), 'name ASC', '*', $from, $limit);

        return array($categories, $count);
    }
}

if (!function_exists('glossary_get_search_terms_sql')) {
    /**
     * Get the SQL where clause for searching terms.
     *
     * Note that this does not handle invalid or too short terms.
     *
     * @param array   $terms      Array of terms.
     * @param bool    $fullsearch Whether or not full search should be enabled.
     * @return array The first element being the where clause, the second array of parameters.
     * @since Moodle 3.1
     */
    function glossary_get_search_terms_sql(array $terms, $fullsearch = true) {
        global $DB;
        static $i = 0;

        if ($DB->sql_regex_supported()) {
            $regexp = $DB->sql_regex(true);
            $notregexp = $DB->sql_regex(false);
        }

        $params = array();
        $conditions = array();

        foreach ($terms as $searchterm) {
            $i++;

            $not = false; // Initially we aren't going to perform NOT LIKE searches, only MSSQL and Oracle
                          // will use it to simulate the "-" operator with LIKE clause.

            if (empty($fullsearch)) {
                // With fullsearch disabled, look only within concepts and aliases.
                $concat = $DB->sql_concat('ge.concept', "' '", "COALESCE(al.alias, :emptychar{$i})");
            } else {
                // With fullsearch enabled, look also within definitions.
                $concat = $DB->sql_concat('ge.concept', "' '", 'ge.definition', "' '", "COALESCE(al.alias, :emptychar{$i})");
            }
            $params['emptychar' . $i] = '';

            // Under Oracle and MSSQL, trim the + and - operators and perform simpler LIKE (or NOT LIKE) queries.
            if (!$DB->sql_regex_supported()) {
                if (substr($searchterm, 0, 1) === '-') {
                    $not = true;
                }
                $searchterm = trim($searchterm, '+-');
            }

            if (substr($searchterm, 0, 1) === '+') {
                $searchterm = trim($searchterm, '+-');
                $conditions[] = "$concat $regexp :searchterm{$i}";
                $params['searchterm' . $i] = '(^|[^a-zA-Z0-9])' . preg_quote($searchterm, '|') . '([^a-zA-Z0-9]|$)';

            } else if (substr($searchterm, 0, 1) === "-") {
                $searchterm = trim($searchterm, '+-');
                $conditions[] = "$concat $notregexp :searchterm{$i}";
                $params['searchterm' . $i] = '(^|[^a-zA-Z0-9])' . preg_quote($searchterm, '|') . '([^a-zA-Z0-9]|$)';

            } else {
                $conditions[] = $DB->sql_like($concat, ":searchterm{$i}", false, true, $not);
                $params['searchterm' . $i] = '%' . $DB->sql_like_escape($searchterm) . '%';
            }
        }

        // When there are no conditions we add a negative one to ensure that we don't return anything.
        if (empty($conditions)) {
            $conditions[] = '1 = 2';
        }

        $where = implode(' AND ', $conditions);
        return array($where, $params);
    }
}

if (!function_exists('glossary_get_entries_by_search')) {

    /**
     * Returns the entries of a glossary by search.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  string $query The search query.
     * @param  bool $fullsearch Whether or not full search is required.
     * @param  string $order The mode of ordering: CONCEPT, CREATION or UPDATE.
     * @param  string $sort The direction of the ordering: ASC or DESC.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_search($glossary, $context, $query, $fullsearch, $order, $sort, $from, $limit,
                                            $options = array()) {
        global $DB, $USER;

        // Remove too little terms.
        $terms = explode(' ', $query);
        foreach ($terms as $key => $term) {
            if (strlen(trim($term, '+-')) < 2) {
                unset($terms[$key]);
            }
        }

        list($searchcond, $params) = glossary_get_search_terms_sql($terms, $fullsearch);

        $userfields = user_picture::fields('u', null, 'userdataid', 'userdata');

        // Need one inner view here to avoid distinct + text.
        $sqlwrapheader = 'SELECT ge.*, ge.concept AS glossarypivot, ' . $userfields . '
                            FROM {glossary_entries} ge
                            LEFT JOIN {user} u ON u.id = ge.userid
                            JOIN ( ';
        $sqlwrapfooter = ' ) gei ON (ge.id = gei.id)';
        $sqlselect  = "SELECT DISTINCT ge.id";
        $sqlfrom    = "FROM {glossary_entries} ge
                       LEFT JOIN {glossary_alias} al ON al.entryid = ge.id";

        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $approvedsql = '';
        } else {
            $approvedsql = 'AND (ge.approved <> 0 OR ge.userid = :myid)';
            $params['myid'] = $USER->id;
        }

        if ($order == 'CREATION') {
            $sqlorderby = "ORDER BY ge.timecreated $sort";
        } else if ($order == 'UPDATE') {
            $sqlorderby = "ORDER BY ge.timemodified $sort";
        } else {
            $sqlorderby = "ORDER BY ge.concept $sort";
        }
        $sqlorderby .= " , ge.id ASC"; // Sort on ID to avoid random ordering when entries share an ordering value.

        $sqlwhere = "WHERE ($searchcond) $approvedsql";

        // Fetching the entries.
        $count = $DB->count_records_sql("SELECT COUNT(DISTINCT(ge.id)) $sqlfrom $sqlwhere", $params);

        $query = "$sqlwrapheader $sqlselect $sqlfrom $sqlwhere $sqlwrapfooter $sqlorderby";
        $entries = $DB->get_recordset_sql($query, $params, $from, $limit);

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entries_by_term')) {
    /**
     * Returns the entries of a glossary by term.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  string $term The term we are searching for, a concept or alias.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @param  array $options Accepts:
     *                        - (bool) includenotapproved. When false, includes the non-approved entries created by
     *                          the current user. When true, also includes the ones that the user has the permission to approve.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_by_term($glossary, $context, $term, $from, $limit, $options = array()) {

        // Build the query.
        $qb = new mod_glossary_entry_query_builder($glossary);
        if (!empty($options['includenotapproved']) && has_capability('mod/glossary:approve', $context)) {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ALL);
        } else {
            $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_SELF);
        }

        $qb->add_field('*', 'entries');
        $qb->join_alias();
        $qb->join_user();
        $qb->add_user_fields();
        $qb->filter_by_term($term);

        $qb->order_by('concept', 'entries');
        $qb->order_by('id', 'entries');     // Sort on ID to avoid random ordering when entries share an ordering value.
        $qb->limit($from, $limit);

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entries_to_approve')) {
    /**
     * Returns the entries to be approved.
     *
     * @param  object $glossary The glossary.
     * @param  context $context The context of the glossary.
     * @param  string $letter The letter, or ALL, or SPECIAL.
     * @param  string $order The mode of ordering: CONCEPT, CREATION or UPDATE.
     * @param  string $sort The direction of the ordering: ASC or DESC.
     * @param  int $from Fetch records from.
     * @param  int $limit Number of records to fetch.
     * @return array The first element being the recordset, the second the number of entries.
     * @since Moodle 3.1
     */
    function glossary_get_entries_to_approve($glossary, $context, $letter, $order, $sort, $from, $limit) {

        $qb = new mod_glossary_entry_query_builder($glossary);
        if ($letter != 'ALL' && $letter != 'SPECIAL' && core_text::strlen($letter)) {
            $qb->filter_by_concept_letter($letter);
        }
        if ($letter == 'SPECIAL') {
            $qb->filter_by_concept_non_letter();
        }

        $qb->add_field('*', 'entries');
        $qb->join_user();
        $qb->add_user_fields();
        $qb->filter_by_non_approved(mod_glossary_entry_query_builder::NON_APPROVED_ONLY);
        if ($order == 'CREATION') {
            $qb->order_by('timecreated', 'entries', $sort);
        } else if ($order == 'UPDATE') {
            $qb->order_by('timemodified', 'entries', $sort);
        } else {
            $qb->order_by('concept', 'entries', $sort);
        }
        $qb->order_by('id', 'entries', $sort); // Sort on ID to avoid random ordering when entries share an ordering value.
        $qb->limit($from, $limit);

        // Fetching the entries.
        $count = $qb->count_records();
        $entries = $qb->get_records();

        return array($entries, $count);
    }
}

if (!function_exists('glossary_get_entry_by_id')) {
    /**
     * Fetch an entry.
     *
     * @param  int $id The entry ID.
     * @return object|false The entry, or false when not found.
     * @since Moodle 3.1
     */
    function glossary_get_entry_by_id($id) {

        // Build the query.
        $qb = new mod_glossary_entry_query_builder();
        $qb->add_field('*', 'entries');
        $qb->join_user();
        $qb->add_user_fields();
        $qb->where('id', 'entries', $id);

        // Fetching the entries.
        $entries = $qb->get_records();
        if (empty($entries)) {
            return false;
        }
        return array_pop($entries);
    }
}

if (!function_exists('glossary_get_visible_tabs')) {

    /**
     * Convert 'showtabs' string to array
     * @param stdClass $displayformat record from 'glossary_formats' table
     * @return array
     */
    function glossary_get_visible_tabs($displayformat) {
        if (empty($displayformat->showtabs)) {
            switch($displayformat->name) {
                case GLOSSARY_CONTINUOUS:
                    $showtabs = 'standard,category,date';
                    break;
                case GLOSSARY_DICTIONARY:
                    $showtabs = 'standard';
                    // Special code for upgraded instances that already had categories set up
                    // in this format - enable "category" tab.
                    // In new instances only 'standard' tab will be visible.
                    if ($DB->record_exists_sql("SELECT 1
                            FROM {glossary} g, {glossary_categories} gc
                            WHERE g.id = gc.glossaryid and g.displayformat = ?",
                            array(GLOSSARY_DICTIONARY))) {
                        $showtabs .= ',category';
                    }
                    break;
                case GLOSSARY_FULLWITHOUTAUTHOR:
                    $showtabs = 'standard,category,date';
                    break;
                default:
                    $showtabs = 'standard,category,date,author';
                    break;
            }
            $displayformat->showtabs = $showtabs;
        }
        $showtabs = preg_split('/,/', $displayformat->showtabs, -1, PREG_SPLIT_NO_EMPTY);
        return $showtabs;
    }
}

require_once("$CFG->dirroot/mod/wiki/lib.php");
require_once("$CFG->dirroot/mod/wiki/locallib.php");

if (!function_exists('wiki_can_create_pages')) {
    /**
     * Check if the user can create pages in a certain wiki.
     * @param context $context Wiki's context.
     * @param integer|stdClass $user A user id or object. By default (null) checks the permissions of the current user.
     * @return bool True if user can create pages, false otherwise.
     * @since Moodle 3.1
     */
    function wiki_can_create_pages($context, $user = null) {
        return has_capability('mod/wiki:createpage', $context, $user);
    }
}

if (!function_exists('wiki_view')) {
    /**
     * Mark the activity completed (if required) and trigger the course_module_viewed event.
     *
     * @param  stdClass $wiki       Wiki object.
     * @param  stdClass $course     Course object.
     * @param  stdClass $cm         Course module object.
     * @param  stdClass $context    Context object.
     * @since Moodle 3.1
     */
    function wiki_view($wiki, $course, $cm, $context) {
        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $wiki->id
        );
        $event = \mod_wiki\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('wiki', $wiki);
        $event->trigger();
        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);
    }
}

if (!function_exists('wiki_page_view')) {
    /**
     * Mark the activity completed (if required) and trigger the page_viewed event.
     *
     * @param  stdClass $wiki       Wiki object.
     * @param  stdClass $page       Page object.
     * @param  stdClass $course     Course object.
     * @param  stdClass $cm         Course module object.
     * @param  stdClass $context    Context object.
     * @param  int $uid             Optional User ID.
     * @param  array $other         Optional Other params: title, wiki ID, group ID, groupanduser, prettyview.
     * @param  stdClass $subwiki    Optional Subwiki.
     * @since Moodle 3.1
     */
    function wiki_page_view($wiki, $page, $course, $cm, $context, $uid = null, $other = null, $subwiki = null) {
        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $page->id
        );
        if ($uid != null) {
            $params['relateduserid'] = $uid;
        }
        if ($other != null) {
            $params['other'] = $other;
        }
        $event = \mod_wiki\event\page_viewed::create($params);
        $event->add_record_snapshot('wiki_pages', $page);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('wiki', $wiki);
        if ($subwiki != null) {
            $event->add_record_snapshot('wiki_subwikis', $subwiki);
        }
        $event->trigger();
        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);
    }
}

if (!function_exists('wiki_get_possible_subwiki_by_group')) {
    /**
     * Get a sub wiki instance by wiki id, group id and user id.
     * If the wiki doesn't exist in DB it will return an isntance with id -1.
     *
     * @param int $wikiid  Wiki ID.
     * @param int $groupid Group ID.
     * @param int $userid  User ID.
     * @return object      Subwiki instance.
     * @since Moodle 3.1
     */
    function wiki_get_possible_subwiki_by_group($wikiid, $groupid, $userid = 0) {
        if (!$subwiki = wiki_get_subwiki_by_group($wikiid, $groupid, $userid)) {
            $subwiki = new stdClass();
            $subwiki->id = -1;
            $subwiki->wikiid = $wikiid;
            $subwiki->groupid = $groupid;
            $subwiki->userid = $userid;
        }
        return $subwiki;
    }
}

if (!function_exists('wiki_get_visible_subwikis')) {
    /**
     * Get all the possible subwikis visible to the user in a wiki.
     * It will return all the subwikis that can be created in a wiki, even if they don't exist in DB yet.
     *
     * @param  stdClass $wiki          Wiki to get the subwikis from.
     * @param  cm_info|stdClass $cm    Optional. The course module object.
     * @param  context_module $context Optional. Context of wiki module.
     * @return array                   List of subwikis.
     * @since Moodle 3.1
     */
    function wiki_get_visible_subwikis($wiki, $cm = null, $context = null) {
        global $USER;
        $subwikis = array();
        if (empty($wiki) or !is_object($wiki)) {
            // Wiki not valid.
            return $subwikis;
        }
        if (empty($cm)) {
            $cm = get_coursemodule_from_instance('wiki', $wiki->id);
        }
        if (empty($context)) {
            $context = context_module::instance($cm->id);
        }
        if (!has_capability('mod/wiki:viewpage', $context)) {
            return $subwikis;
        }
        $manage = has_capability('mod/wiki:managewiki', $context);
        if (!$groupmode = groups_get_activity_groupmode($cm)) {
            // No groups.
            if ($wiki->wikimode == 'collaborative') {
                // Only 1 subwiki.
                $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, 0, 0);
            } else if ($wiki->wikimode == 'individual') {
                // There's 1 subwiki per user.
                if ($manage) {
                    // User can view all subwikis.
                    $users = get_enrolled_users($context);
                    foreach ($users as $user) {
                        $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, 0, $user->id);
                    }
                } else {
                    // User can only see his subwiki.
                    $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, 0, $USER->id);
                }
            }
        } else {
            if ($wiki->wikimode == 'collaborative') {
                // 1 subwiki per group.
                $aag = has_capability('moodle/site:accessallgroups', $context);
                if ($aag || $groupmode == VISIBLEGROUPS) {
                    // User can see all groups.
                    $allowedgroups = groups_get_all_groups($cm->course, 0, $cm->groupingid);
                    $allparticipants = new stdClass();
                    $allparticipants->id = 0;
                    array_unshift($allowedgroups, $allparticipants); // Add all participants.
                } else {
                    // User can only see the groups he belongs to.
                    $allowedgroups = groups_get_all_groups($cm->course, $USER->id, $cm->groupingid);
                }
                foreach ($allowedgroups as $group) {
                    $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, $group->id, 0);
                }
            } else if ($wiki->wikimode == 'individual') {
                // 1 subwiki per user and group.
                if ($manage || $groupmode == VISIBLEGROUPS) {
                    // User can view all subwikis.
                    $users = get_enrolled_users($context);
                    foreach ($users as $user) {
                        // Get all the groups this user belongs to.
                        $groups = groups_get_all_groups($cm->course, $user->id);
                        if (!empty($groups)) {
                            foreach ($groups as $group) {
                                $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, $group->id, $user->id);
                            }
                        } else {
                            // User doesn't belong to any group, add it to group 0.
                            $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, 0, $user->id);
                        }
                    }
                } else {
                    // The user can only see the subwikis of the groups he belongs.
                    $allowedgroups = groups_get_all_groups($cm->course, $USER->id, $cm->groupingid);
                    foreach ($allowedgroups as $group) {
                        $users = groups_get_members($group->id);
                        foreach ($users as $user) {
                            $subwikis[] = wiki_get_possible_subwiki_by_group($wiki->id, $group->id, $user->id);
                        }
                    }
                }
            }
        }
        return $subwikis;
    }
}

/**
 * Get pages list in wiki
 * @param int $swid sub wiki id
 * @param string $sort How to sort the pages. By default, title ASC.
 */
function local_mobile_wiki_get_page_list($swid, $sort = 'title ASC') {
    global $DB;
    $records = $DB->get_records('wiki_pages', array('subwikiid' => $swid), $sort);
    return $records;
}

function local_mobile_external_format_text($text, $textformat, $contextid, $component, $filearea, $itemid, $options = null) {
    global $CFG;
    // Get settings (singleton).
    $settings = external_settings::get_instance();
    if ($settings->get_fileurl()) {
        require_once($CFG->libdir . "/filelib.php");
        $text = file_rewrite_pluginfile_urls($text, $settings->get_file(), $contextid, $component, $filearea, $itemid);
    }
    if (!$settings->get_raw()) {
        $options = (array)$options;
        $options['filter'] = isset($options['filter']) ? $options['filter'] : $settings->get_filter();
        $options['para'] = isset($options['para']) ? $options['para'] : false;
        $options['context'] = context::instance_by_id($contextid);
        $options['allowid'] = isset($options['allowid']) ? $options['allowid'] : true;
        $text = format_text($text, $textformat, $options);
        $textformat = FORMAT_HTML; // Once converted to html (from markdown, plain... lets inform consumer this is already HTML).
    }
    return array($text, $textformat);
}


require_once("$CFG->dirroot/mod/quiz/locallib.php");

if (!function_exists('quiz_view')) {
    /**
     * Mark the activity completed (if required) and trigger the course_module_viewed event.
     *
     * @param  stdClass $quiz       quiz object
     * @param  stdClass $course     course object
     * @param  stdClass $cm         course module object
     * @param  stdClass $context    context object
     * @since Moodle 3.1
     */
    function quiz_view($quiz, $course, $cm, $context) {

        $params = array(
            'objectid' => $quiz->id,
            'context' => $context
        );

        $event = \mod_quiz\event\course_module_viewed::create($params);
        $event->add_record_snapshot('quiz', $quiz);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);
    }

}

if (!function_exists('quiz_validate_new_attempt')) {
    /**
     * Validate permissions for creating a new attempt and start a new preview attempt if required.
     *
     * @param  quiz $quizobj quiz object
     * @param  quiz_access_manager $accessmanager quiz access manager
     * @param  bool $forcenew whether was required to start a new preview attempt
     * @param  int $page page to jump to in the attempt
     * @param  bool $redirect whether to redirect or throw exceptions (for web or ws usage)
     * @return array an array containing the attempt information, access error messages and the page to jump to in the attempt
     * @throws moodle_quiz_exception
     * @since Moodle 3.1
     */
    function quiz_validate_new_attempt(quiz $quizobj, quiz_access_manager $accessmanager, $forcenew, $page, $redirect) {
        global $DB, $USER;
        $timenow = time();

        if ($quizobj->is_preview_user() && $forcenew) {
            $accessmanager->current_attempt_finished();
        }

        // Check capabilities.
        if (!$quizobj->is_preview_user()) {
            $quizobj->require_capability('mod/quiz:attempt');
        }

        // Check to see if a new preview was requested.
        if ($quizobj->is_preview_user() && $forcenew) {
            // To force the creation of a new preview, we mark the current attempt (if any)
            // as finished. It will then automatically be deleted below.
            $DB->set_field('quiz_attempts', 'state', quiz_attempt::FINISHED,
                    array('quiz' => $quizobj->get_quizid(), 'userid' => $USER->id));
        }

        // Look for an existing attempt.
        $attempts = quiz_get_user_attempts($quizobj->get_quizid(), $USER->id, 'all', true);
        $lastattempt = end($attempts);

        $attemptnumber = null;
        // If an in-progress attempt exists, check password then redirect to it.
        if ($lastattempt && ($lastattempt->state == quiz_attempt::IN_PROGRESS ||
                $lastattempt->state == quiz_attempt::OVERDUE)) {
            $currentattemptid = $lastattempt->id;
            $messages = $accessmanager->prevent_access();

            // If the attempt is now overdue, deal with that.
            $quizobj->create_attempt_object($lastattempt)->handle_if_time_expired($timenow, true);

            // And, if the attempt is now no longer in progress, redirect to the appropriate place.
            if ($lastattempt->state == quiz_attempt::ABANDONED || $lastattempt->state == quiz_attempt::FINISHED) {
                if ($redirect) {
                    redirect($quizobj->review_url($lastattempt->id));
                } else {
                    throw new moodle_quiz_exception($quizobj, 'attemptalreadyclosed');
                }
            }

            // If the page number was not explicitly in the URL, go to the current page.
            if ($page == -1) {
                $page = $lastattempt->currentpage;
            }

        } else {
            while ($lastattempt && $lastattempt->preview) {
                $lastattempt = array_pop($attempts);
            }

            // Get number for the next or unfinished attempt.
            if ($lastattempt) {
                $attemptnumber = $lastattempt->attempt + 1;
            } else {
                $lastattempt = false;
                $attemptnumber = 1;
            }
            $currentattemptid = null;

            $messages = $accessmanager->prevent_access() +
                $accessmanager->prevent_new_attempt(count($attempts), $lastattempt);

            if ($page == -1) {
                $page = 0;
            }
        }
        return array($currentattemptid, $attemptnumber, $lastattempt, $messages, $page);
    }

}

if (!function_exists('quiz_prepare_and_start_new_attempt')) {
    /**
     * Prepare and start a new attempt deleting the previous preview attempts.
     *
     * @param  quiz $quizobj quiz object
     * @param  int $attemptnumber the attempt number
     * @param  object $lastattempt last attempt object
     * @return object the new attempt
     * @since  Moodle 3.1
     */
    function quiz_prepare_and_start_new_attempt(quiz $quizobj, $attemptnumber, $lastattempt) {
        global $DB, $USER;

        // Delete any previous preview attempts belonging to this user.
        quiz_delete_previews($quizobj->get_quiz(), $USER->id);

        $quba = question_engine::make_questions_usage_by_activity('mod_quiz', $quizobj->get_context());
        $quba->set_preferred_behaviour($quizobj->get_quiz()->preferredbehaviour);

        // Create the new attempt and initialize the question sessions
        $timenow = time(); // Update time now, in case the server is running really slowly.
        $attempt = quiz_create_attempt($quizobj, $attemptnumber, $lastattempt, $timenow, $quizobj->is_preview_user());

        if (!($quizobj->get_quiz()->attemptonlast && $lastattempt)) {
            $attempt = quiz_start_new_attempt($quizobj, $quba, $attempt, $attemptnumber, $timenow);
        } else {
            $attempt = quiz_start_attempt_built_on_last($quba, $attempt, $lastattempt);
        }

        $transaction = $DB->start_delegated_transaction();

        $attempt = quiz_attempt_save_started($quizobj, $quba, $attempt);

        $transaction->allow_commit();

        return $attempt;
    }
}

if (!function_exists('quiz_feedback_record_for_grade')) {
    /**
     * Get the feedback object for this grade on this quiz.
     *
     * @param float $grade a grade on this quiz.
     * @param object $quiz the quiz settings.
     * @return false|stdClass the record object or false if there is not feedback for the given grade
     * @since  Moodle 3.1
     */
    function quiz_feedback_record_for_grade($grade, $quiz) {
        global $DB;

        // With CBM etc, it is possible to get -ve grades, which would then not match
        // any feedback. Therefore, we replace -ve grades with 0.
        $grade = max($grade, 0);

        $feedback = $DB->get_record_select('quiz_feedback',
                'quizid = ? AND mingrade <= ? AND ? < maxgrade', array($quiz->id, $grade, $grade));

        return $feedback;
    }
}

class local_mobile_quiz extends quiz {

    /**
     * Static function to create a new quiz object for a specific user.
     *
     * @param int $quizid the the quiz id.
     * @param int $userid the the userid.
     * @return quiz the new quiz object
     */
    public static function create($quizid, $userid = null) {
        global $DB;

        $quiz = local_mobile_quiz_access_manager::load_quiz_and_settings($quizid);
        $course = $DB->get_record('course', array('id' => $quiz->course), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('quiz', $quiz->id, $course->id, false, MUST_EXIST);

        // Update quiz with override information.
        if ($userid) {
            $quiz = quiz_update_effective_access($quiz, $userid);
        }

        return new local_mobile_quiz($quiz, $cm, $course);
    }

    /**
     * Return quiz_access_manager and instance of the quiz_access_manager class
     * for this quiz at this time.
     * @param int $timenow the current time as a unix timestamp.
     * @return quiz_access_manager and instance of the quiz_access_manager class
     *      for this quiz at this time.
     */
    public function get_access_manager($timenow) {
        if (is_null($this->accessmanager)) {
            $this->accessmanager = new local_mobile_quiz_access_manager($this, $timenow,
                    has_capability('mod/quiz:ignoretimelimits', $this->context, null, false));
        }
        return $this->accessmanager;
    }

    /**
     * Return all the question types used in this quiz.
     *
     * @param  boolean $includepotential if the quiz include random questions, setting this flag to true will make the function to
     * return all the possible question types in the random questions category
     * @return array a sorted array including the different question types
     * @since  Moodle 3.1
     */
    public function get_all_question_types_used($includepotential = false) {
        $questiontypes = array();
        // To control if we need to look in categories for questions.
        $qcategories = array();

        // We must be careful with random questions, if we find a random question we must assume that the quiz may content
        // any of the questions in the referenced category (or subcategories).
        foreach ($this->get_questions() as $questiondata) {
            if ($questiondata->qtype == 'random' and $includepotential) {
                $includesubcategories = (bool) $questiondata->questiontext;
                if (!isset($qcategories[$questiondata->category])) {
                    $qcategories[$questiondata->category] = false;
                }
                if ($includesubcategories) {
                    $qcategories[$questiondata->category] = true;
                }
            } else {
                if (!in_array($questiondata->qtype, $questiontypes)) {
                    $questiontypes[] = $questiondata->qtype;
                }
            }
        }

        if (!empty($qcategories)) {
            // We have to look for all the question types in these categories.
            $categoriestolook = array();
            foreach ($qcategories as $cat => $includesubcats) {
                if ($includesubcats) {
                    $categoriestolook = array_merge($categoriestolook, question_categorylist($cat));
                } else {
                    $categoriestolook[] = $cat;
                }
            }
            $questiontypesincategories = local_mobile_question_bank::get_all_question_types_in_categories($categoriestolook);
            $questiontypes = array_merge($questiontypes, $questiontypesincategories);
        }
        $questiontypes = array_unique($questiontypes);
        sort($questiontypes);

        return $questiontypes;
    }
}

class local_mobile_quiz_attempt extends quiz_attempt {

    /**
     * Constructor assuming we already have the necessary data loaded.
     *
     * @param object $attempt the row of the quiz_attempts table.
     * @param object $quiz the quiz object for this attempt and user.
     * @param object $cm the course_module object for this quiz.
     * @param object $course the row from the course table for the course we belong to.
     * @param bool $loadquestions (optional) if true, the default, load all the details
     *      of the state of each question. Else just set up the basic details of the attempt.
     */
    public function __construct($attempt, $quiz, $cm, $course, $loadquestions = true) {
        global $DB;

        $this->attempt = $attempt;
        $this->quizobj = new local_mobile_quiz($quiz, $cm, $course);

        if (!$loadquestions) {
            return;
        }

        $this->quba = question_engine::load_questions_usage_by_activity($this->attempt->uniqueid);

        $this->determine_layout();
        $this->number_questions();
    }

    /**
     * Static function to create a new quiz_attempt object given an attemptid.
     *
     * @param int $attemptid the attempt id.
     * @return quiz_attempt the new quiz_attempt object
     */
    public static function create($attemptid) {
        return self::create_helper(array('id' => $attemptid));
    }

    /**
     * Used by {create()} and {create_from_usage_id()}.
     * @param array $conditions passed to $DB->get_record('quiz_attempts', $conditions).
     */
    protected static function create_helper($conditions) {
        global $DB;

        $attempt = $DB->get_record('quiz_attempts', $conditions, '*', MUST_EXIST);
        $quiz = quiz_access_manager::load_quiz_and_settings($attempt->quiz);
        $course = $DB->get_record('course', array('id' => $quiz->course), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('quiz', $quiz->id, $course->id, false, MUST_EXIST);

        // Update quiz with override information.
        $quiz = quiz_update_effective_access($quiz, $attempt->userid);
        return new local_mobile_quiz_attempt($attempt, $quiz, $cm, $course);
    }

    /**
     * Return the question type name for a given slot within the current attempt.
     *
     * @param int $slot the number used to identify this question within this attempt.
     * @return string the question type name
     * @since  Moodle 3.1
     */
    public function get_question_type_name($slot) {
        return $this->quba->get_question($slot)->get_type_name();
    }

    /**
     * Process responses during an attempt at a quiz.
     *
     * @param  int $timenow time when the processing started
     * @param  bool $finishattempt whether to finish the attempt or not
     * @param  bool $timeup true if form was submitted by timer
     * @param  int $thispage current page number
     * @return string the attempt state once the data has been processed
     * @since  Moodle 3.1
     * @throws  moodle_exception
     */
    public function process_attempt($timenow, $finishattempt, $timeup, $thispage) {
        global $DB;

        $transaction = $DB->start_delegated_transaction();

        // If there is only a very small amount of time left, there is no point trying
        // to show the student another page of the quiz. Just finish now.
        $graceperiodmin = null;
        $accessmanager = $this->get_access_manager($timenow);
        $timeclose = $accessmanager->get_end_time($this->get_attempt());

        // Don't enforce timeclose for previews.
        if ($this->is_preview()) {
            $timeclose = false;
        }
        $toolate = false;
        if ($timeclose !== false && $timenow > $timeclose - QUIZ_MIN_TIME_TO_CONTINUE) {
            $timeup = true;
            $graceperiodmin = get_config('quiz', 'graceperiodmin');
            if ($timenow > $timeclose + $graceperiodmin) {
                $toolate = true;
            }
        }

        // If time is running out, trigger the appropriate action.
        $becomingoverdue = false;
        $becomingabandoned = false;
        if ($timeup) {
            if ($this->get_quiz()->overduehandling == 'graceperiod') {
                if (is_null($graceperiodmin)) {
                    $graceperiodmin = get_config('quiz', 'graceperiodmin');
                }
                if ($timenow > $timeclose + $this->get_quiz()->graceperiod + $graceperiodmin) {
                    // Grace period has run out.
                    $finishattempt = true;
                    $becomingabandoned = true;
                } else {
                    $becomingoverdue = true;
                }
            } else {
                $finishattempt = true;
            }
        }

        // Don't log - we will end with a redirect to a page that is logged.

        if (!$finishattempt) {
            // Just process the responses for this page and go to the next page.
            if (!$toolate) {
                try {
                    $this->process_submitted_actions($timenow, $becomingoverdue);

                } catch (question_out_of_sequence_exception $e) {
                    throw new moodle_exception('submissionoutofsequencefriendlymessage', 'question',
                            $this->attempt_url(null, $thispage));

                } catch (Exception $e) {
                    // This sucks, if we display our own custom error message, there is no way
                    // to display the original stack trace.
                    $debuginfo = '';
                    if (!empty($e->debuginfo)) {
                        $debuginfo = $e->debuginfo;
                    }
                    throw new moodle_exception('errorprocessingresponses', 'question',
                            $this->attempt_url(null, $thispage), $e->getMessage(), $debuginfo);
                }

                if (!$becomingoverdue) {
                    foreach ($this->get_slots() as $slot) {
                        if (optional_param('redoslot' . $slot, false, PARAM_BOOL)) {
                            $this->process_redo_question($slot, $timenow);
                        }
                    }
                }

            } else {
                // The student is too late.
                $this->process_going_overdue($timenow, true);
            }

            $transaction->allow_commit();

            return $becomingoverdue ? self::OVERDUE : self::IN_PROGRESS;
        }

        // Update the quiz attempt record.
        try {
            if ($becomingabandoned) {
                $this->process_abandon($timenow, true);
            } else {
                $this->process_finish($timenow, !$toolate);
            }

        } catch (question_out_of_sequence_exception $e) {
            throw new moodle_exception('submissionoutofsequencefriendlymessage', 'question',
                    $this->attempt_url(null, $thispage));

        } catch (Exception $e) {
            // This sucks, if we display our own custom error message, there is no way
            // to display the original stack trace.
            $debuginfo = '';
            if (!empty($e->debuginfo)) {
                $debuginfo = $e->debuginfo;
            }
            throw new moodle_exception('errorprocessingresponses', 'question',
                    $this->attempt_url(null, $thispage), $e->getMessage(), $debuginfo);
        }

        // Send the user to the review page.
        $transaction->allow_commit();

        return $becomingabandoned ? self::ABANDONED : self::FINISHED;
    }

    /**
     * Check a page access to see if is an out of sequence access.
     *
     * @param  int $page page number
     * @return boolean false is is an out of sequence access, true otherwise.
     * @since Moodle 3.1
     */
    public function check_page_access($page) {
        global $DB;

        if ($this->get_currentpage() != $page) {
            if ($this->get_navigation_method() == QUIZ_NAVMETHOD_SEQ && $this->get_currentpage() > $page) {
                return false;
            }
        }
        return true;
    }

    /**
     * Update attempt page.
     *
     * @param  int $page page number
     * @return boolean true if everything was ok, false otherwise (out of sequence access).
     * @since Moodle 3.1
     */
    public function set_currentpage($page) {
        global $DB;

        if ($this->check_page_access($page)) {
            $DB->set_field('quiz_attempts', 'currentpage', $page, array('id' => $this->get_attemptid()));
            return true;
        }
        return false;
    }

    /**
     * Trigger the attempt_viewed event.
     *
     * @since Moodle 3.1
     */
    public function fire_attempt_viewed_event() {
        $params = array(
            'objectid' => $this->get_attemptid(),
            'relateduserid' => $this->get_userid(),
            'courseid' => $this->get_courseid(),
            'context' => context_module::instance($this->get_cmid()),
            'other' => array(
                'quizid' => $this->get_quizid()
            )
        );
        $event = \mod_quiz\event\attempt_viewed::create($params);
        $event->add_record_snapshot('quiz_attempts', $this->get_attempt());
        $event->trigger();
    }

    /**
     * Trigger the attempt_summary_viewed event.
     *
     * @since Moodle 3.1
     */
    public function fire_attempt_summary_viewed_event() {

        $params = array(
            'objectid' => $this->get_attemptid(),
            'relateduserid' => $this->get_userid(),
            'courseid' => $this->get_courseid(),
            'context' => context_module::instance($this->get_cmid()),
            'other' => array(
                'quizid' => $this->get_quizid()
            )
        );
        $event = \mod_quiz\event\attempt_summary_viewed::create($params);
        $event->add_record_snapshot('quiz_attempts', $this->get_attempt());
        $event->trigger();
    }

    /**
     * Trigger the attempt_reviewed event.
     *
     * @since Moodle 3.1
     */
    public function fire_attempt_reviewed_event() {

        $params = array(
            'objectid' => $this->get_attemptid(),
            'relateduserid' => $this->get_userid(),
            'courseid' => $this->get_courseid(),
            'context' => context_module::instance($this->get_cmid()),
            'other' => array(
                'quizid' => $this->get_quizid()
            )
        );
        $event = \mod_quiz\event\attempt_reviewed::create($params);
        $event->add_record_snapshot('quiz_attempts', $this->get_attempt());
        $event->trigger();
    }

    /**
     * Return the {@link question_state} that this question is in.
     *
     * @param int $slot the number used to identify this question within this attempt.
     * @return question_state the state this question is in.
     * @since Moodle 2.9
     */
    public function get_question_state($slot) {
        return $this->quba->get_question_state($slot);
    }

}

class local_mobile_quiz_access_manager extends quiz_access_manager {

    /**
     * Run the preflight checks using the given data in all the rules supporting them.
     *
     * @param array $data passed data for validation
     * @param array $files un-used, Moodle seems to not support it anymore
     * @param int|null $attemptid the id of the current attempt, if there is one,
     *      otherwise null.
     * @return array of errors, empty array means no erros
     * @since  Moodle 3.1
     */
    public function validate_preflight_check($data, $files, $attemptid) {
        $errors = array();
        foreach ($this->rules as $rule) {
            if ($rule->is_preflight_check_required($attemptid)) {
                $errors = $rule->validate_preflight_check($data, $files, $errors, $attemptid);
            }
        }
        return $errors;
    }
}

class local_mobile_question_bank extends question_bank {
    /**
     * Return a list of the different question types present in the given categories.
     *
     * @param  array $categories a list of category ids
     * @return array the list of question types in the categories
     * @since  Moodle 3.1
     */
    public static function get_all_question_types_in_categories($categories) {
        global $DB;

        list($categorysql, $params) = $DB->get_in_or_equal($categories);
        $sql = "SELECT DISTINCT q.qtype
                FROM {question} q
                WHERE q.category $categorysql";

        $qtypes = $DB->get_fieldset_sql($sql, $params);
        return $qtypes;
    }
}

/**
 * Check if the given user is an active user in the site.
 *
 * @param  stdClass  $user         user object
 * @param  boolean $checksuspended whether to check if the user has the account suspended
 * @param  boolean $checknologin   whether to check if the user uses the nologin auth method
 * @throws moodle_exception
 * @since  Moodle 3.0
 */
function local_mobile_require_active_user($user, $checksuspended = false, $checknologin = false) {

    if (!core_user::is_real_user($user->id)) {
        throw new moodle_exception('invaliduser', 'error');
    }

    if ($user->deleted) {
        throw new moodle_exception('userdeleted');
    }

    if (empty($user->confirmed)) {
        throw new moodle_exception('usernotconfirmed', 'moodle', '', $user->username);
    }

    if (isguestuser($user)) {
        throw new moodle_exception('guestsarenotallowed', 'error');
    }

    if ($checksuspended and $user->suspended) {
        throw new moodle_exception('suspended', 'auth');
    }

    if ($checknologin and $user->auth == 'nologin') {
        throw new moodle_exception('suspended', 'auth');
    }
}
