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
        public static function validate_courses($courseids) {
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