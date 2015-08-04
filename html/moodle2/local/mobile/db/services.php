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

    'local_mobile_core_completion_mark_course_self_completed' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_completion_mark_course_self_completed',
        'description' => 'Update the course completion status for the current user (if course self-completion is enabled).',
        'type'        => 'write',
    ),

);

$services = array(
   'Moodle Mobile additional features service'  => array(
        'functions' => array (
            'core_webservice_get_site_info',
            'core_enrol_get_users_courses',
            'core_notes_create_notes',
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
            'core_grades_get_grades',
            'message_airnotifier_is_system_configured',
            'message_airnotifier_are_notification_preferences_configured',
            'mod_forum_get_forums_by_courses',
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
            'local_mobile_core_completion_mark_course_self_completed',
        ),
        'enabled' => 0,
        'restrictedusers' => 0,
        'shortname' => 'local_mobile',
        'downloadfiles' => 1,
        'uploadfiles' => 1
    ),
);