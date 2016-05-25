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
 * External functions and service definitions.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(

    'local_mobile_core_course_get_course_module' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_course_get_course_module',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Return information about a course module',
        'type'        => 'read'
    ),

    'local_mobile_core_course_get_course_module_by_instance' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_course_get_course_module_by_instance',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Return information about a given module name and instance id',
        'type'        => 'read'
    ),

    'local_mobile_core_course_search_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_course_search_courses',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Search courses by (name, module, block, tag)',
        'type'          => 'read',
        'capabilities'  => '',
    ),

    'local_mobile_enrol_self_enrol_user' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'enrol_self_enrol_user',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Self enrol the current user in the given course.',
        'type'        => 'write'
    ),

    'local_mobile_core_user_remove_user_device' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_user_remove_user_device',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Remove user devices.',
        'type'          => 'write',
    ),
    'local_mobile_gradereport_user_get_grades_table' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'gradereport_user_get_grades_table',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Get the user/s report grades table for a course',
        'type'        => 'read',
        'capabilities'=> '',
    ),
    'local_mobile_core_message_search_contacts' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_message_search_contacts',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Search for contacts',
        'type'        => 'read',
        'capabilities'=> '',
    ),
    'local_mobile_core_message_get_blocked_users' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_message_get_blocked_users',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Retrieve a list of users blocked',
        'type'          => 'read',
        'capabilities'  => '',
    ),
    'local_mobile_core_group_get_course_user_groups' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_group_get_course_user_groups',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Returns all groups in specified course for the specified user.',
        'type'        => 'read',
        'capabilities'=> 'moodle/course:managegroups',
    ),

    'local_mobile_core_completion_update_activity_completion_status_manually' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_completion_update_activity_completion_status_manually',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Update completion status for the current user in an activity, only for activities with manual tracking.',
        'type'        => 'write',
    ),

    'local_mobile_core_completion_get_activities_completion_status' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_completion_get_activities_completion_status',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Return the activities completion status for a user in a course.',
        'type'          => 'read',
        'capabilities'  => '',
    ),

    'local_mobile_core_completion_get_course_completion_status' => array(
        'classname'    => 'local_mobile_external',
        'methodname'   => 'core_completion_get_course_completion_status',
        'classpath'    => 'local/mobile/externallib.php',
        'description'  => 'Returns course completion status.',
        'type'         => 'read',
        'capabilities' => 'report/completion:view',
    ),

    'local_mobile_core_rating_get_item_ratings' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_rating_get_item_ratings',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Retrieve all the ratings for an item.',
        'type'          => 'read',
        'capabilities'  => 'moodle/rating:view'
    ),

    'local_mobile_core_comment_get_comments' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_comment_get_comments',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Returns comments.',
        'type'          => 'read',
        'capabilities'  => 'moodle/comment:view',
    ),

    'local_mobile_core_notes_get_course_notes' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_notes_get_course_notes',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Returns all notes in specified course (or site) for the specified user.',
        'type'          => 'read',
        'capabilities'  => 'moodle/notes:view',
    ),

    'local_mobile_core_course_view_course' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_course_view_course',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Log that the course was viewed',
        'type'        => 'write'
    ),

    'local_mobile_core_user_view_user_list' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_user_view_user_list',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulates the web-interface view of user/index.php (triggering events).',
        'type'          => 'write',
        'capabilities'  => 'moodle/course:viewparticipants',
    ),

    'local_mobile_core_user_view_user_profile' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_user_view_user_profile',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulates the web-interface view of user/view.php and user/profile.php (triggering events).',
        'type'          => 'write',
        'capabilities'  => 'moodle/user:viewdetails',
    ),

    'local_mobile_gradereport_user_view_grade_report' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'gradereport_user_view_grade_report',
        'classpath' => 'local/mobile/externallib.php',
        'description' => 'Trigger the report view event',
        'type' => 'write',
        'capabilities' => 'gradereport/user:view'
    ),

    'local_mobile_mod_forum_view_forum' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_forum_view_forum',
        'classpath' => 'local/mobile/externallib.php',
        'description' => 'Simulate the view.php web interface page: trigger events, completion, etc...',
        'type' => 'write',
        'capabilities' => 'mod/forum:viewdiscussion'
    ),

    'local_mobile_mod_forum_view_forum_discussion' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_forum_view_forum_discussion',
        'classpath' => 'local/mobile/externallib.php',
        'description' => 'Simulate the forum/discuss.php web interface page: trigger events, completion, etc...',
        'type' => 'write',
        'capabilities' => 'mod/forum:viewdiscussion'
    ),

    'local_mobile_core_message_mark_message_read' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_message_mark_message_read',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Mark a single message as read, trigger message_viewed event.',
        'type'          => 'write',
        'capabilities'  => '',
    ),

    'local_mobile_core_notes_view_notes' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_notes_view_notes',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulates the web interface view of notes/index.php: trigger events.',
        'type'          => 'write',
        'capabilities'  => 'moodle/notes:view',
    ),

    'local_mobile_mod_resource_view_resource' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_resource_view_resource',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface page: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => 'mod/resource:view'
    ),

    'local_mobile_mod_url_view_url' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_url_view_url',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface page: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => 'mod/url:view'
    ),

    'local_mobile_mod_page_view_page' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_page_view_page',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface page: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => 'mod/page:view'
    ),

    'local_mobile_mod_assign_view_grading_table' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_assign_view_grading_table',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface page: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => 'mmod/assign:view, mod/assign:viewgrades'
    ),

    'local_mobile_mod_folder_view_folder' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_folder_view_folder',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface folder: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => 'mod/folder:view'
    ),

    'local_mobile_mod_chat_get_chats_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_chat_get_chats_by_courses',
        'description'   => 'Retrieve chat activities by courses.',
        'type'          => 'read',
        'capabilities'  => 'mod/chat:chat'
    ),

    'local_mobile_mod_chat_login_user' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_chat_login_user',
        'description'   => 'Log a user into a chat room in the given chat.',
        'type'          => 'write',
        'capabilities'  => 'mod/chat:chat'
    ),

    'local_mobile_mod_chat_get_chat_users' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_chat_get_chat_users',
        'description'   => 'Get the list of users in the given chat session.',
        'type'          => 'read',
        'capabilities'  => 'mod/chat:chat'
    ),

    'local_mobile_mod_chat_send_chat_message' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_chat_send_chat_message',
        'description'   => 'Send a message on the given chat session.',
        'type'          => 'write',
        'capabilities'  => 'mod/chat:chat'
    ),

    'local_mobile_mod_chat_get_chat_latest_messages' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_chat_get_chat_latest_messages',
        'description'   => 'Get the latest messages from the given chat session.',
        'type'          => 'read',
        'capabilities'  => 'mod/chat:chat'
    ),

    'local_mobile_mod_chat_view_chat' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_chat_view_chat',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface folder: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => 'mod/chat:chat'
    ),

    'local_mobile_mod_choice_view_choice' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_choice_view_choice',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Simulate the view.php web interface folder: trigger events, completion, etc...',
        'type'          => 'write',
        'capabilities'  => ''
    ),

    'local_mobile_mod_choice_get_choice_results' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_choice_get_choice_results',
        'description'   => 'Retrieve users results for a specific choice.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_mod_choice_get_choice_options' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_choice_get_choice_options',
        'description'   => 'Retrieve options for a specific choice.',
        'type'          => 'read',
        'capabilities'  => 'mod/choice:choose'
    ),

    'local_mobile_mod_choice_submit_choice_response' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_choice_submit_choice_response',
        'description'   => 'Submit responses to a specific choice item.',
        'type'          => 'write',
        'capabilities'  => 'mod/choice:choose'
    ),

    'local_mobile_mod_choice_get_choices_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_choice_get_choices_by_courses',
        'description'   => 'Retrieve choice activities by courses.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_mod_forum_add_discussion' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_forum_add_discussion',
        'description'   => 'Add a new discussion into an existing forum.',
        'type'          => 'write',
        'capabilities'  => 'mod/forum:startdiscussion'
    ),

    'local_mobile_mod_forum_add_discussion_post' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_forum_add_discussion_post',
        'description'   => 'Create new posts into an existing discussion.',
        'type'          => 'write',
        'capabilities'  => 'mod/forum:replypost'
    ),

    'local_mobile_mod_forum_get_forums_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_forum_get_forums_by_courses',
        'description'   => 'Returns a list of forum instances in a provided set of courses, if
            no courses are provided then all the forum instances the user has access to will be
            returned.',
        'type'          => 'read',
        'capabilities'  => 'mod/forum:viewdiscussion'
    ),

    'local_mobile_core_group_get_activity_groupmode' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_group_get_activity_groupmode',
        'description'   => 'Returns effective groupmode used in a given activity.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_core_group_get_activity_allowed_groups' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'core_group_get_activity_allowed_groups',
        'description'   => 'Gets a list of groups that the user is allowed to access within the specified activity.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_mod_lti_get_tool_launch_data' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_lti_get_tool_launch_data',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Return the launch data for a given external tool.',
        'type'          => 'read',
        'capabilities'  => 'mod/lti:view'
    ),

    'local_mobile_mod_lti_get_ltis_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_lti_get_ltis_by_courses',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Returns a list of external tool instances in a provided set of courses, if
                            no courses are provided then all the external tool instances the user has access to will be returned.',
        'type'          => 'read',
        'capabilities'  => 'mod/lti:view'
    ),

    'local_mobile_mod_lti_view_lti' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_lti_view_lti',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Trigger the course module viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/lti:view'
    ),

    'local_mobile_core_completion_mark_course_self_completed' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_completion_mark_course_self_completed',
        'description' => 'Update the course completion status for the current user (if course self-completion is enabled).',
        'type'        => 'write',
    ),

    'local_mobile_mod_choice_delete_choice_responses' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'mod_choice_delete_choice_responses',
        'description' => 'Delete the given submitted responses in a choice',
        'type'        => 'write',
        'capabilities'  => 'mod/choice:choose'
    ),

    'local_mobile_mod_scorm_view_scorm' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_scorm_view_scorm',
        'description'   => 'Trigger the course module viewed event.',
        'type'          => 'write',
        'capabilities'  => ''
    ),

    'local_mobile_mod_scorm_get_scorm_attempt_count' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_scorm_get_scorm_attempt_count',
        'description'   => 'Return the number of attempts done by a user in the given SCORM.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_mod_scorm_get_scorm_scoes' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_scorm_get_scorm_scoes',
        'description' => 'Returns a list containing all the scoes data related to the given scorm id',
        'type' => 'read',
        'capabilities' => ''
    ),

    'local_mobile_mod_scorm_get_scorm_user_data' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_scorm_get_scorm_user_data',
        'description' => 'Retrieves user tracking and SCO data and default SCORM values',
        'type' => 'read',
        'capabilities' => ''
    ),

    'local_mobile_mod_scorm_insert_scorm_tracks' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_scorm_insert_scorm_tracks',
        'description' => 'Saves a scorm tracking record.
                          It will overwrite any existing tracking data for this attempt.
                          Validation should be performed before running the function to ensure the user will not lose any existing
                          attempt data.',
        'type' => 'write',
        'capabilities' => 'mod/scorm:savetrack'
    ),

    'local_mobile_mod_scorm_get_scorm_sco_tracks' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_scorm_get_scorm_sco_tracks',
        'description' => 'Retrieves SCO tracking data for the given user id and attempt number',
        'type' => 'read',
        'capabilities' => ''
    ),

    'local_mobile_mod_scorm_get_scorms_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_scorm_get_scorms_by_courses',
        'description'   => 'Returns a list of scorm instances in a provided set of courses, if
                            no courses are provided then all the scorm instances the user has access to will be returned.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_mod_survey_get_questions' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_survey_get_questions',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Get the complete list of questions for the survey, including subquestions.',
        'type'          => 'read',
        'capabilities'  => 'mod/survey:participate'
    ),

    'local_mobile_mod_survey_get_surveys_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_survey_get_surveys_by_courses',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Returns a list of survey instances in a provided set of courses,
                            if no courses are provided then all the survey instances the user has access to will be returned.',
        'type'          => 'read',
        'capabilities'  => ''
    ),

    'local_mobile_mod_survey_submit_answers' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_survey_submit_answers',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Submit the answers for a given survey.',
        'type'          => 'write',
        'capabilities'  => 'mod/survey:participate'
    ),

    'local_mobile_mod_survey_view_survey' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_survey_view_survey',
        'classpath'     => 'local/mobile/externallib.php',
        'description'   => 'Trigger the course module viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/survey:participate'
    ),

    'local_mobile_core_enrol_get_course_enrolment_methods' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_enrol_get_course_enrolment_methods',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Get the list of course enrolment methods',
        'type'        => 'read',
    ),

    'local_mobile_enrol_guest_get_instance_info' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'enrol_guest_get_instance_info',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Return guest enrolment instance information.',
        'type'        => 'read'
    ),

    'local_mobile_mod_forum_can_add_discussion' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_forum_can_add_discussion',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Check if the current user can add discussions in the given forum (and optionally for the given group).',
        'type' => 'read'
    ),

    'local_mobile_mod_glossary_get_glossaries_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_glossaries_by_courses',
        'description'   => 'Retrieve a list of glossaries from several courses.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_view_glossary' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_view_glossary',
        'description'   => 'Notify the glossary as being viewed.',
        'type'          => 'write',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_view_entry' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_view_entry',
        'description'   => 'Notify a glossary entry as being viewed.',
        'type'          => 'write',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_letter' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_letter',
        'description'   => 'Browse entries by letter.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_date' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_date',
        'description'   => 'Browse entries by date.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_categories' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_categories',
        'description'   => 'Get the categories.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_category' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_category',
        'description'   => 'Browse entries by category.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_authors' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_authors',
        'description'   => 'Get the authors.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_author' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_author',
        'description'   => 'Browse entries by author.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_author_id' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_author_id',
        'description'   => 'Browse entries by author ID.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_search' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_search',
        'description'   => 'Browse entries by search query.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_term' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_term',
        'description'   => 'Browse entries by term (concept or alias).',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_to_approve' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_to_approve',
        'description'   => 'Browse entries to be approved.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:approve'
    ),

    'local_mobile_mod_glossary_get_entry_by_id' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entry_by_id',
        'description'   => 'Get an entry by ID',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_wiki_get_wikis_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_wikis_by_courses',
        'description'   => 'Returns a list of wiki instances in a provided set of courses, if ' .
                           'no courses are provided then all the wiki instances the user has access to will be returned.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_view_wiki' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_view_wiki',
        'description'   => 'Trigger the course module viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_view_page' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_view_page',
        'description'   => 'Trigger the page viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_get_subwikis' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_subwikis',
        'description'   => 'Returns the list of subwikis the user can see in a specific wiki.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),
    'local_mobile_mod_wiki_get_subwiki_pages' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_subwiki_pages',
        'description'   => 'Returns the list of pages for a specific subwiki.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_get_page_contents' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_page_contents',
        'description'   => 'Returns the contents of a page.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_get_subwiki_files' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_subwiki_files',
        'description'   => 'Returns the list of files for a specific subwiki.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_quiz_get_quizzes_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_quizzes_by_courses',
        'description'   => 'Returns a list of quizzes in a provided list of courses,
                            if no list is provided all quizzes that the user can view will be returned.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_view_quiz' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_view_quiz',
        'description'   => 'Trigger the course module viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_get_user_attempts' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_user_attempts',
        'description'   => 'Return a list of attempts for the given quiz and user.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_get_user_best_grade' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_user_best_grade',
        'description'   => 'Get the best current grade for the given user on a quiz.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_get_combined_review_options' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_combined_review_options',
        'description'   => 'Combines the review options from a number of different quiz attempts.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_start_attempt' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_start_attempt',
        'description'   => 'Starts a new attempt at a quiz.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_get_attempt_data' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_attempt_data',
        'description'   => 'Returns information for the given attempt page for a quiz attempt in progress.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_get_attempt_summary' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_attempt_summary',
        'description'   => 'Returns a summary of a quiz attempt before it is submitted.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_save_attempt' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_save_attempt',
        'description'   => 'Processes save requests during the quiz.
                            This function is intended for the quiz auto-save feature.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_process_attempt' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_process_attempt',
        'description'   => 'Process responses during an attempt at a quiz and also deals with attempts finishing.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_get_attempt_review' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_attempt_review',
        'description'   => 'Returns review information for the given finished attempt, can be used by users or teachers.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:reviewmyattempts',
    ),

    'local_mobile_mod_quiz_view_attempt' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_view_attempt',
        'description'   => 'Trigger the attempt viewed event.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_view_attempt_summary' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_view_attempt_summary',
        'description'   => 'Trigger the attempt summary viewed event.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:attempt',
    ),

    'local_mobile_mod_quiz_view_attempt_review' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_view_attempt_review',
        'description'   => 'Trigger the attempt reviewed event.',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:reviewmyattempts',
    ),

    'local_mobile_mod_quiz_get_quiz_feedback_for_grade' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_quiz_feedback_for_grade',
        'description'   => 'Get the feedback text that should be show to a student who got the given grade in the given quiz.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_get_quiz_access_information' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_quiz_access_information',
        'description'   => 'Return access information for a given quiz.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_get_attempt_access_information' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_attempt_access_information',
        'description'   => 'Return access information for a given attempt in a quiz.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

    'local_mobile_mod_quiz_get_quiz_required_qtypes' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_quiz_get_quiz_required_qtypes',
        'description'   => 'Return the potential question types that would be required for a given quiz.',
        'type'          => 'read',
        'capabilities'  => 'mod/quiz:view',
    ),

);

$services = array(
   'Moodle Mobile additional features service'  => array(
        'functions' => array (
            'local_mobile_core_course_search_courses',
            'local_mobile_enrol_self_enrol_user',
            'core_webservice_get_site_info',
            'core_enrol_get_users_courses',
            'core_notes_create_notes',
            'core_notes_delete_notes',
            'core_message_send_instant_messages',
            'core_enrol_get_enrolled_users',
            'core_user_get_course_user_profiles',
            'moodle_enrol_get_users_courses',
            'moodle_enrol_get_enrolled_users',
            'moodle_user_get_users_by_id',
            'moodle_webservice_get_siteinfo',
            'moodle_notes_create_notes',
            'moodle_user_get_course_participants_by_id',
            'moodle_user_get_users_by_courseid',
            'moodle_message_send_instantmessages',
            'core_course_get_contents',
            'core_get_component_strings',
            'core_message_get_messages',
            'core_calendar_get_calendar_events',
            'core_user_add_user_device',
            'core_user_get_users_by_field',
            'core_grades_get_grades',
            'message_airnotifier_is_system_configured',
            'message_airnotifier_are_notification_preferences_configured',
            'mod_forum_get_forum_discussions_paginated',
            'mod_forum_get_forum_discussion_posts',
            'core_files_get_files',
            'core_message_get_messages',
            'core_message_create_contacts',
            'core_message_delete_contacts',
            'core_message_block_contacts',
            'core_message_unblock_contacts',
            'core_message_get_contacts',
            'core_message_search_contacts',
            'local_mobile_core_message_search_contacts',
            'local_mobile_gradereport_user_get_grades_table',
            'local_mobile_core_message_get_blocked_users',
            'local_mobile_core_group_get_course_user_groups',
            'local_mobile_core_user_remove_user_device',
            'mod_assign_get_assignments',
            'mod_assign_get_submissions',
            'mod_assign_save_submission',
            'mod_assign_submit_for_grading',
            'local_mobile_core_completion_update_activity_completion_status_manually',
            'local_mobile_core_completion_get_course_completion_status',
            'local_mobile_core_completion_get_activities_completion_status',
            'local_mobile_core_comment_get_comments',
            'local_mobile_core_notes_get_course_notes',
            'local_mobile_core_rating_get_item_ratings',
            'local_mobile_core_course_view_course',
            'local_mobile_core_user_view_user_list',
            'local_mobile_core_user_view_user_profile',
            'local_mobile_gradereport_user_view_grade_report',
            'local_mobile_core_message_mark_message_read',
            'local_mobile_core_notes_view_notes',
            'local_mobile_mod_forum_view_forum',
            'local_mobile_mod_forum_view_forum_discussion',
            'local_mobile_mod_resource_view_resource',
            'local_mobile_mod_url_view_url',
            'local_mobile_mod_page_view_page',
            'local_mobile_mod_assign_view_grading_table',
            'local_mobile_mod_folder_view_folder',
            'local_mobile_mod_chat_login_user',
            'local_mobile_mod_chat_get_chat_users',
            'local_mobile_mod_chat_send_chat_message',
            'local_mobile_mod_chat_get_chat_latest_messages',
            'local_mobile_mod_chat_get_chats_by_courses',
            'local_mobile_mod_chat_view_chat',
            'local_mobile_mod_choice_view_choice',
            'local_mobile_mod_choice_get_choice_results',
            'local_mobile_mod_choice_get_choice_options',
            'local_mobile_mod_choice_submit_choice_response',
            'local_mobile_mod_choice_get_choices_by_courses',
            'local_mobile_mod_forum_add_discussion',
            'local_mobile_mod_forum_add_discussion_post',
            'local_mobile_mod_forum_get_forums_by_courses',
            'local_mobile_core_group_get_activity_groupmode',
            'local_mobile_core_group_get_activity_allowed_groups',
            'local_mobile_mod_lti_get_tool_launch_data',
            'local_mobile_mod_lti_get_ltis_by_courses',
            'local_mobile_mod_lti_view_lti',
            'local_mobile_core_completion_mark_course_self_completed',
            'local_mobile_mod_choice_delete_choice_responses',
            'local_mobile_mod_scorm_get_scorm_attempt_count',
            'local_mobile_mod_scorm_get_scorm_sco_tracks',
            'local_mobile_mod_scorm_get_scorm_scoes',
            'local_mobile_mod_scorm_get_scorm_user_data',
            'local_mobile_mod_scorm_get_scorms_by_courses',
            'local_mobile_mod_scorm_insert_scorm_tracks',
            'local_mobile_mod_scorm_view_scorm',
            'local_mobile_mod_survey_get_questions',
            'local_mobile_mod_survey_get_surveys_by_courses',
            'local_mobile_mod_survey_submit_answers',
            'local_mobile_mod_survey_view_survey',
            'local_mobile_core_enrol_get_course_enrolment_methods',
            'local_mobile_enrol_guest_get_instance_info',
            'local_mobile_mod_forum_can_add_discussion',
            'local_mobile_core_course_get_course_module',
            'local_mobile_core_course_get_course_module_by_instance',
            'local_mobile_mod_glossary_get_glossaries_by_courses',
            'local_mobile_mod_glossary_view_glossary',
            'local_mobile_mod_glossary_view_entry',
            'local_mobile_mod_glossary_get_entries_by_letter',
            'local_mobile_mod_glossary_get_entries_by_date',
            'local_mobile_mod_glossary_get_categories',
            'local_mobile_mod_glossary_get_entries_by_category',
            'local_mobile_mod_glossary_get_authors',
            'local_mobile_mod_glossary_get_entries_by_author',
            'local_mobile_mod_glossary_get_entries_by_author_id',
            'local_mobile_mod_glossary_get_entries_by_search',
            'local_mobile_mod_glossary_get_entries_by_term',
            'local_mobile_mod_glossary_get_entries_to_approve',
            'local_mobile_mod_glossary_get_entry_by_id',
            'local_mobile_mod_quiz_get_quizzes_by_courses',
            'local_mobile_mod_quiz_view_quiz',
            'local_mobile_mod_quiz_get_user_attempts',
            'local_mobile_mod_quiz_get_user_best_grade',
            'local_mobile_mod_quiz_get_combined_review_options',
            'local_mobile_mod_quiz_start_attempt',
            'local_mobile_mod_quiz_get_attempt_data',
            'local_mobile_mod_quiz_get_attempt_summary',
            'local_mobile_mod_quiz_save_attempt',
            'local_mobile_mod_quiz_process_attempt',
            'local_mobile_mod_quiz_get_attempt_review',
            'local_mobile_mod_quiz_view_attempt',
            'local_mobile_mod_quiz_view_attempt_summary',
            'local_mobile_mod_quiz_view_attempt_review',
            'local_mobile_mod_quiz_get_quiz_feedback_for_grade',
            'local_mobile_mod_quiz_get_quiz_access_information',
            'local_mobile_mod_quiz_get_attempt_access_information',
            'local_mobile_mod_quiz_get_quiz_required_qtypes',
            'local_mobile_mod_wiki_get_wikis_by_courses',
            'local_mobile_mod_wiki_view_wiki',
            'local_mobile_mod_wiki_view_page',
            'local_mobile_mod_wiki_get_subwikis',
            'local_mobile_mod_wiki_get_subwiki_pages',
            'local_mobile_mod_wiki_get_page_contents',
            'local_mobile_mod_wiki_get_subwiki_files',
        ),
        'enabled' => 0,
        'restrictedusers' => 0,
        'shortname' => 'local_mobile',
        'downloadfiles' => 1,
        'uploadfiles' => 1
    ),
);