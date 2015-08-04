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
require_once("$CFG->dirroot/message/lib.php");
require_once("$CFG->libdir/completionlib.php");
require_once("$CFG->dirroot/comment/lib.php");
require_once("$CFG->dirroot/rating/lib.php");
require_once("$CFG->dirroot/notes/lib.php");

class local_mobile_external extends external_api {

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_user_remove_user_device_parameters() {
        return new external_function_parameters(
            array(
                'uuid'  => new external_value(PARAM_RAW, 'the device UUID'),
                'appid' => new external_value(PARAM_NOTAGS,
                                                'the app id, if empty devices matching the UUID for the user will be removed',
                                                VALUE_DEFAULT, ''),
            )
        );
    }

    /**
     * Remove a user device from the Moodle database (for PUSH notifications usually).
     *
     * @param string $uuid The device UUID.
     * @param string $appid The app id, opitonal parameter. If empty all the devices fmatching the UUID or the user will be removed.
     * @return array List of possible warnings and removal status.
     * @since Moodle 2.9
     */
    public static function core_user_remove_user_device($uuid, $appid = "") {
        global $CFG;
        require_once($CFG->dirroot . "/user/lib.php");

        $params = self::validate_parameters(self::core_user_remove_user_device_parameters(), array('uuid' => $uuid, 'appid' => $appid));

        $context = context_system::instance();
        self::validate_context($context);

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();

        $removed = user_remove_user_device($params['uuid'], $params['appid']);

        if (!$removed) {
            $warnings[] = array(
                'item' => $params['uuid'],
                'warningcode' => 'devicedoesnotexist',
                'message' => 'The device doesn\'t exists in the database'
            );
        }

        $result = array(
            'removed' => $removed,
            'warnings' => $warnings
        );

        return $result;
    }

    /**
     * Returns description of method result value.
     *
     * @return external_multiple_structure
     * @since Moodle 2.9
     */
    public static function core_user_remove_user_device_returns() {
        return new external_single_structure(
            array(
                'removed' => new external_value(PARAM_BOOL, 'True if removed, false if not removed because it didn\'t exists'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_grades_table.
     *
     * @return external_external_function_parameters
     * @since Moodle 2.8
     */
    public static function gradereport_user_get_grades_table_parameters() {
        return new external_function_parameters (
            array(
                'courseid' => new external_value(PARAM_INT, 'Course Id', VALUE_REQUIRED),
                'userid'   => new external_value(PARAM_INT, 'Return grades only for this user (optional)', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Returns a list of grades tables for users in a course.
     *
     * @param int $courseid Course Id
     * @param int $userid   Only this user (optional)
     *
     * @return array the grades tables
     * @since Moodle 2.8
     */
    public static function gradereport_user_get_grades_table($courseid, $userid = 0) {
        global $CFG, $USER;

        require_once($CFG->dirroot . '/group/lib.php');
        require_once($CFG->libdir  . '/gradelib.php');
        require_once($CFG->dirroot . '/grade/lib.php');
        require_once($CFG->dirroot . '/grade/report/user/lib.php');

        $warnings = array();

        // Validate the parameter.
        $params = self::validate_parameters(self::gradereport_user_get_grades_table_parameters(),
            array(
                'courseid' => $courseid,
                'userid' => $userid)
            );

        // Compact/extract functions are not recommended.
        $courseid = $params['courseid'];
        $userid   = $params['userid'];

        // Function get_course internally throws an exception if the course doesn't exist.
        $course = get_course($courseid);

        $context = context_course::instance($courseid);
        self::validate_context($context);

        // Specific capabilities.
        require_capability('gradereport/user:view', $context);

        $user = null;

        if (empty($userid)) {
            require_capability('moodle/grade:viewall', $context);
        } else {
            $user = core_user::get_user($userid, '*', MUST_EXIST);
        }

        $access = false;

        if (has_capability('moodle/grade:viewall', $context)) {
            // Can view all course grades.
            $access = true;
        } else if ($userid == $USER->id and has_capability('moodle/grade:view', $context) and $course->showgrades) {
            // View own grades.
            $access = true;
        } else if (has_capability('moodle/grade:viewall', context_user::instance($userid)) and $course->showgrades) {
            // Can view grades of this user, parent most probably.
            $access = true;
        }

        if (!$access) {
            throw new moodle_exception('nopermissiontoviewgrades', 'error',  $CFG->wwwroot.  '/course/view.php?id=' . $courseid);
        }

        $gpr = new grade_plugin_return(
            array(
                'type' => 'report',
                'plugin' => 'user',
                'courseid' => $courseid,
                'userid' => $userid)
            );

        $tables = array();

        // Just one user.
        if ($user) {
            $report = new grade_report_user($courseid, $gpr, $context, $userid);
            $report->fill_table();

            // Notice that we use array_filter for deleting empty elements in the array.
            // Those elements are items or category not visible by the user.
            $tables[] = array(
                'courseid'      => $courseid,
                'userid'        => $user->id,
                'userfullname'  => fullname($user),
                'maxdepth'      => $report->maxdepth,
                'tabledata'     => $report->tabledata
            );

        } else {
            $defaultgradeshowactiveenrol = !empty($CFG->grade_report_showonlyactiveenrol);
            $showonlyactiveenrol = get_user_preferences('grade_report_showonlyactiveenrol', $defaultgradeshowactiveenrol);
            $showonlyactiveenrol = $showonlyactiveenrol || !has_capability('moodle/course:viewsuspendedusers', $context);

            $gui = new graded_users_iterator($course);
            $gui->require_active_enrolment($showonlyactiveenrol);
            $gui->init();

            while ($userdata = $gui->next_user()) {
                $currentuser = $userdata->user;
                $report = new grade_report_user($courseid, $gpr, $context, $currentuser->id);
                $report->fill_table();

                // Notice that we use array_filter for deleting empty elements in the array.
                // Those elements are items or category not visible by the user.
                $tables[] = array(
                    'courseid'      => $courseid,
                    'userid'        => $currentuser->id,
                    'userfullname'  => fullname($currentuser),
                    'maxdepth'      => $report->maxdepth,
                    'tabledata'     => $report->tabledata
                );
            }
            $gui->close();
        }

        $result = array();
        $result['tables'] = $tables;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Creates a table column structure
     *
     * @return array
     * @since  Moodle 2.8
     */
    private static function grades_table_column() {
        return array (
            'class'   => new external_value(PARAM_RAW, 'class'),
            'content' => new external_value(PARAM_RAW, 'cell content'),
            'headers' => new external_value(PARAM_RAW, 'headers')
        );
    }

    /**
     * Describes tget_grades_table return value.
     *
     * @return external_single_structure
     * @since Moodle 2.8
     */
    public static function gradereport_user_get_grades_table_returns() {
        return new external_single_structure(
            array(
                'tables' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'courseid' => new external_value(PARAM_INT, 'course id'),
                            'userid'   => new external_value(PARAM_INT, 'user id'),
                            'userfullname' => new external_value(PARAM_TEXT, 'user fullname'),
                            'maxdepth'   => new external_value(PARAM_INT, 'table max depth (needed for printing it)'),
                            'tabledata' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'itemname' => new external_single_structure(
                                            array (
                                                'class' => new external_value(PARAM_RAW, 'file name'),
                                                'colspan' => new external_value(PARAM_INT, 'mime type'),
                                                'content'  => new external_value(PARAM_RAW, ''),
                                                'celltype'  => new external_value(PARAM_RAW, ''),
                                                'id'  => new external_value(PARAM_ALPHANUMEXT, '')
                                            ), 'The item returned data', VALUE_OPTIONAL
                                        ),
                                        'leader' => new external_single_structure(
                                            array (
                                                'class' => new external_value(PARAM_RAW, 'file name'),
                                                'rowspan' => new external_value(PARAM_INT, 'mime type')
                                            ), 'The item returned data', VALUE_OPTIONAL
                                        ),
                                        'weight' => new external_single_structure(
                                            self::grades_table_column(), 'weight column', VALUE_OPTIONAL
                                        ),
                                        'grade' => new external_single_structure(
                                            self::grades_table_column(), 'grade column', VALUE_OPTIONAL
                                        ),
                                        'range' => new external_single_structure(
                                            self::grades_table_column(), 'range column', VALUE_OPTIONAL
                                        ),
                                        'percentage' => new external_single_structure(
                                            self::grades_table_column(), 'percentage column', VALUE_OPTIONAL
                                        ),
                                        'lettergrade' => new external_single_structure(
                                            self::grades_table_column(), 'lettergrade column', VALUE_OPTIONAL
                                        ),
                                        'rank' => new external_single_structure(
                                            self::grades_table_column(), 'rank column', VALUE_OPTIONAL
                                        ),
                                        'average' => new external_single_structure(
                                            self::grades_table_column(), 'average column', VALUE_OPTIONAL
                                        ),
                                        'feedback' => new external_single_structure(
                                            self::grades_table_column(), 'feedback column', VALUE_OPTIONAL
                                        ),
                                        'contributiontocoursetotal' => new external_single_structure(
                                            self::grades_table_column(), 'contributiontocoursetotal column', VALUE_OPTIONAL
                                        ),
                                    ), 'table'
                                )
                            )
                        )
                    )
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Search contacts parameters description.
     *
     * @return external_function_parameters
     * @since 2.5
     */
    public static function core_message_search_contacts_parameters() {
        return new external_function_parameters(
            array(
                'searchtext' => new external_value(PARAM_CLEAN, 'String the user\'s fullname has to match to be found'),
                'onlymycourses' => new external_value(PARAM_BOOL, 'Limit search to the user\'s courses',
                    VALUE_DEFAULT, false)
            )
        );
    }

    /**
     * Search contacts.
     *
     * @param string $searchtext query string.
     * @param bool $onlymycourses limit the search to the user's courses only.
     * @return external_description
     * @since 2.5
     */
    public static function core_message_search_contacts($searchtext, $onlymycourses = false) {
        global $CFG, $USER;
        require_once($CFG->libdir . '/enrollib.php');
        require_once($CFG->dirroot . "/local/mobile/locallib.php");
        require_once($CFG->dirroot . "/user/lib.php");

        $params = array('searchtext' => $searchtext, 'onlymycourses' => $onlymycourses);
        $params = self::validate_parameters(self::core_message_search_contacts_parameters(), $params);
        // Extra validation, we do not allow empty queries.
        if ($params['searchtext'] === '') {
            throw new moodle_exception('querystringcannotbeempty');
        }
        $courseids = array();
        if ($params['onlymycourses']) {
            $mycourses = enrol_get_my_courses(array('id'));
            foreach ($mycourses as $mycourse) {
                $courseids[] = $mycourse->id;
            }
        } else {
            $courseids[] = SITEID;
        }
        // Retrieving the users matching the query.
        $users = message_search_users($courseids, $params['searchtext']);

        $results = array();
        foreach ($users as $user) {
            $results[$user->id] = $user;
        }
        // Reorganising information.
        foreach ($results as &$user) {
            $newuser = array(
                'id' => $user->id,
                'fullname' => fullname($user)
            );
            // Avoid undefined property notice as phone not specified.
            $user->phone1 = null;
            $user->phone2 = null;
            // Try to get the user picture, but sometimes this method can return null.
            $userdetails = user_get_user_details($user, null, array('profileimageurl', 'profileimageurlsmall'));
            if (!empty($userdetails)) {
                $newuser['profileimageurl'] = $userdetails['profileimageurl'];
                $newuser['profileimageurlsmall'] = $userdetails['profileimageurlsmall'];
            }
            $user = $newuser;
        }
        return $results;
    }
    /**
     * Search contacts return description.
     *
     * @return external_description
     * @since 2.5
     */
    public static function core_message_search_contacts_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, 'User ID'),
                    'fullname' => new external_value(PARAM_NOTAGS, 'User full name'),
                    'profileimageurl' => new external_value(PARAM_URL, 'User picture URL', VALUE_OPTIONAL),
                    'profileimageurlsmall' => new external_value(PARAM_URL, 'Small user picture URL', VALUE_OPTIONAL)
                )
            ),
            'List of contacts'
        );
    }


    /**
     * Get blocked users parameters description.
     *
     * @return external_function_parameters
     * @since 2.9
     */
    public static function core_message_get_blocked_users_parameters() {
        return new external_function_parameters(
            array(
                'userid' => new external_value(PARAM_INT,
                                'the user whose blocked users we want to retrieve',
                                VALUE_REQUIRED),
            )
        );
    }

    /**
     * Retrieve a list of users blocked
     *
     * @param  int $userid the user whose blocked users we want to retrieve
     * @return external_description
     * @since 2.9
     */
    public static function core_message_get_blocked_users($userid) {
        global $CFG, $USER;
        require_once($CFG->dirroot . "/message/lib.php");

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();

        // Validate params.
        $params = array(
            'userid' => $userid
        );
        $params = self::validate_parameters(self::core_message_get_blocked_users_parameters(), $params);
        $userid = $params['userid'];

        // Validate context.
        $context = context_system::instance();
        self::validate_context($context);

        // Check if private messaging between users is allowed.
        if (empty($CFG->messaging)) {
            throw new moodle_exception('disabled', 'message');
        }

        $user = core_user::get_user($userid, 'id', MUST_EXIST);

        // Check if we have permissions for retrieve the information.
        if ($userid != $USER->id and !has_capability('moodle/site:readallmessages', $context)) {
            throw new moodle_exception('accessdenied', 'admin');
        }

        // Now, we can get safely all the blocked users.
        $users = message_get_blocked_users($user);

        $blockedusers = array();
        foreach ($users as $user) {
            $newuser = array(
                'id' => $user->id,
                'fullname' => fullname($user),
            );
            $newuser['profileimageurl'] = moodle_url::make_pluginfile_url(
                context_user::instance($user->id)->id, 'user', 'icon', null, '/', 'f1')->out(false);

            $blockedusers[] = $newuser;
        }

        $results = array(
            'users' => $blockedusers,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Get blocked users return description.
     *
     * @return external_single_structure
     * @since 2.9
     */
    public static function core_message_get_blocked_users_returns() {
        return new external_single_structure(
            array(
                'users' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'User ID'),
                            'fullname' => new external_value(PARAM_NOTAGS, 'User full name'),
                            'profileimageurl' => new external_value(PARAM_URL, 'User picture URL', VALUE_OPTIONAL)
                        )
                    ),
                    'List of blocked users'
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_group_get_course_user_groups_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'id of course'),
                'userid' => new external_value(PARAM_INT, 'id of user')
            )
        );
    }

    /**
     * Get all groups in the specified course for the specified user
     *
     * @param int $courseid id of course
     * @param int $userid id of user
     * @return array of group objects (id, name ...)
     * @since Moodle 2.9
     */
    public static function core_group_get_course_user_groups($courseid, $userid) {
        global $USER;

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();

        $params = array(
            'courseid' => $courseid,
            'userid' => $userid
        );
        $params = self::validate_parameters(self::core_group_get_course_user_groups_parameters(), $params);
        $courseid = $params['courseid'];
        $userid = $params['userid'];

        // Validate course and user. get_course throws an exception if the course does not exists.
        $course = get_course($courseid);
        $user = core_user::get_user($userid, 'id', MUST_EXIST);

        // Security checks.
        $context = context_course::instance($courseid);
        self::validate_context($context);

         // Check if we have permissions for retrieve the information.
        if ($userid != $USER->id) {
            if (!has_capability('moodle/course:managegroups', $context)) {
                throw new moodle_exception('accessdenied', 'admin');
            }
            // Validate if the user is enrolled in the course.
            if (!is_enrolled($context, $userid)) {
                // We return a warning because the function does not fail for not enrolled users.
                $warning['item'] = 'course';
                $warning['itemid'] = $courseid;
                $warning['warningcode'] = '1';
                $warning['message'] = "User $userid is not enrolled in course $courseid";
                $warnings[] = $warning;
            }
        }

        $usergroups = array();
        if (empty($warnings)) {
            $groups = groups_get_all_groups($courseid, $userid, 0, 'g.id, g.name, g.description, g.descriptionformat');

            foreach ($groups as $group) {
                list($group->description, $group->descriptionformat) =
                    external_format_text($group->description, $group->descriptionformat,
                            $context->id, 'group', 'description', $group->id);
                $usergroups[] = (array)$group;
            }
        }

        $results = array(
            'groups' => $usergroups,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_group_get_course_user_groups_returns() {
        return new external_single_structure(
            array(
                'groups' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'group record id'),
                            'name' => new external_value(PARAM_TEXT, 'multilang compatible name, course unique'),
                            'description' => new external_value(PARAM_RAW, 'group description text'),
                            'descriptionformat' => new external_format_value('description')
                        )
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }


    /**
     * Describes the parameters for update_activity_completion_status_manually.
     *
     * @return external_external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_completion_update_activity_completion_status_manually_parameters() {
        return new external_function_parameters (
            array(
                'cmid' => new external_value(PARAM_INT, 'course module id'),
                'completed' => new external_value(PARAM_BOOL, 'activity completed or not'),
            )
        );
    }

    /**
     * Update completion status for the current user in an activity, only for activities with manual tracking.
     * @param  int $cmid      Course module id
     * @param  bool $completed Activity completed or not
     * @return array            Result and possible warnings
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_completion_update_activity_completion_status_manually($cmid,  $completed) {

        // Validate and normalize parameters.
        $params = self::validate_parameters(self::core_completion_update_activity_completion_status_manually_parameters(),
            array('cmid' => $cmid, 'completed' => $completed));
        $cmid = $params['cmid'];
        $completed = $params['completed'];

        $warnings = array();

        $context = context_module::instance($cmid);
        self::validate_context($context);

        list($course, $cm) = get_course_and_cm_from_cmid($cmid);

        // Set up completion object and check it is enabled.
        $completion = new completion_info($course);
        if (!$completion->is_enabled()) {
            throw new moodle_exception('completionnotenabled', 'completion');
        }

        // Check completion state is manual.
        if ($cm->completion != COMPLETION_TRACKING_MANUAL) {
            throw new moodle_exception('cannotmanualctrack', 'error');
        }

        $targetstate = ($completed) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
        $completion->update_state($cm, $targetstate);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the core_completion_update_activity_completion_status_manually return value.
     *
     * @return external_single_structure
     * @since Moodle 2.9
     */
    public static function core_completion_update_activity_completion_status_manually_returns() {

        return new external_single_structure(
            array(
                'status'    => new external_value(PARAM_BOOL, 'status, true if success'),
                'warnings'  => new external_warnings(),
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_completion_get_activities_completion_status_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'userid'   => new external_value(PARAM_INT, 'User ID'),
            )
        );
    }

    /**
     * Get Activities completion status
     *
     * @param int $courseid ID of the Course
     * @param int $userid ID of the User
     * @return array of activities progress and warnings
     * @throws moodle_exception
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_completion_get_activities_completion_status($courseid, $userid) {
        global $CFG, $USER;
        require_once($CFG->libdir . '/grouplib.php');

        $warnings = array();
        $arrayparams = array(
            'courseid' => $courseid,
            'userid'   => $userid,
        );

        $params = self::validate_parameters(self::core_completion_get_activities_completion_status_parameters(), $arrayparams);

        $course = get_course($params['courseid']);
        $user = core_user::get_user($params['userid'], 'id', MUST_EXIST);

        $context = context_course::instance($course->id);
        self::validate_context($context);

        // Check that current user have permissions to see this user's activities.
        if ($user->id != $USER->id) {
            require_capability('report/progress:view', $context);
            if (!groups_user_groups_visible($course, $user->id)) {
                // We are not in the same group!
                throw new moodle_exception('accessdenied', 'admin');
            }
        }

        $completion = new completion_info($course);
        $activities = $completion->get_activities();
        $progresses = $completion->get_progress_all();
        $userprogress = $progresses[$user->id];

        $results = array();
        foreach ($activities as $activity) {

            // Check if current user has visibility on this activity.
            if (!$activity->uservisible) {
                continue;
            }

            // Get progress information and state.
            if (array_key_exists($activity->id, $userprogress->progress)) {
                $thisprogress  = $userprogress->progress[$activity->id];
                $state         = $thisprogress->completionstate;
                $timecompleted = $thisprogress->timemodified;
            } else {
                $state = COMPLETION_INCOMPLETE;
                $timecompleted = 0;
            }

            $results[] = array(
                       'cmid'          => $activity->id,
                       'modname'       => $activity->modname,
                       'instance'      => $activity->instance,
                       'state'         => $state,
                       'timecompleted' => $timecompleted,
                       'tracking'      => $activity->completion
            );
        }

        $results = array(
            'statuses' => $results,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_completion_get_activities_completion_status_returns() {
        return new external_single_structure(
            array(
                'statuses' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'cmid'          => new external_value(PARAM_INT, 'comment ID'),
                            'modname'       => new external_value(PARAM_PLUGIN, 'activity module name'),
                            'instance'      => new external_value(PARAM_INT, 'instance ID'),
                            'state'         => new external_value(PARAM_INT, 'completion state value:
                                                                    0 means incomplete, 1 complete,
                                                                    2 complete pass, 3 complete fail'),
                            'timecompleted' => new external_value(PARAM_INT, 'timestamp for completed activity'),
                            'tracking'      => new external_value(PARAM_INT, 'type of tracking:
                                                                    0 means none, 1 manual, 2 automatic'),
                        ), 'Activity'
                    ), 'List of activities status'
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_completion_get_course_completion_status_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'userid'   => new external_value(PARAM_INT, 'User ID'),
            )
        );
    }
    /**
     * Get Course completion status
     *
     * @param int $courseid ID of the Course
     * @param int $userid ID of the User
     * @return array of course completion status and warnings
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_completion_get_course_completion_status($courseid, $userid) {
        global $CFG, $USER;
        require_once($CFG->libdir . '/grouplib.php');

        $warnings = array();
        $arrayparams = array(
            'courseid' => $courseid,
            'userid'   => $userid,
        );
        $params = self::validate_parameters(self::core_completion_get_course_completion_status_parameters(), $arrayparams);

        $course = get_course($params['courseid']);
        $user = core_user::get_user($params['userid'], 'id', MUST_EXIST);
        $context = context_course::instance($course->id);
        self::validate_context($context);

        // Can current user see user's course completion status?
        // This check verifies if completion is enabled because $course is mandatory.
        if (!completion_can_view_data($user->id, $course)) {
            throw new moodle_exception('cannotviewreport');
        }

        // The previous function doesn't check groups.
        if ($user->id != $USER->id) {
            if (!groups_user_groups_visible($course, $user->id)) {
                // We are not in the same group!
                throw new moodle_exception('accessdenied', 'admin');
            }
        }

        $info = new completion_info($course);

        // Check this user is enroled.
        if (!$info->is_tracked_user($user->id)) {
            if ($USER->id == $user->id) {
                throw new moodle_exception('notenroled', 'completion');
            } else {
                throw new moodle_exception('usernotenroled', 'completion');
            }
        }

        $completions = $info->get_completions($user->id);
        if (empty($completions)) {
            throw new moodle_exception('err_nocriteria', 'completion');
        }

        // Load course completion.
        $completionparams = array(
            'userid' => $user->id,
            'course' => $course->id,
        );
        $ccompletion = new completion_completion($completionparams);

        $completionrows = array();
        // Loop through course criteria.
        foreach ($completions as $completion) {
            $criteria = $completion->get_criteria();

            $completionrow = array();
            $completionrow['type'] = $criteria->criteriatype;
            $completionrow['title'] = $criteria->get_title();
            $completionrow['status'] = $completion->get_status();
            $completionrow['complete'] = $completion->is_complete();
            $completionrow['timecompleted'] = $completion->timecompleted;
            $completionrow['details'] = $criteria->get_details($completion);
            $completionrows[] = $completionrow;
        }

        $result = array(
                  'completed'   => $info->is_course_complete($user->id),
                  'aggregation' => $info->get_aggregation_method(),
                  'completions' => $completionrows
        );

        $results = array(
            'completionstatus' => $result,
            'warnings' => $warnings
        );
        return $results;

    }
    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_completion_get_course_completion_status_returns() {
        return new external_single_structure(
            array(
                'completionstatus' => new external_single_structure(
                    array(
                        'completed'     => new external_value(PARAM_BOOL, 'true if the course is complete, false otherwise'),
                        'aggregation'   => new external_value(PARAM_INT, 'aggregation method 1 means all, 2 means any'),
                        'completions'   => new external_multiple_structure(
                            new external_single_structure(
                            array(
                                 'type'          => new external_value(PARAM_INT,   'Completion criteria type'),
                                 'title'         => new external_value(PARAM_TEXT,  'Completion criteria Title'),
                                 'status'        => new external_value(PARAM_NOTAGS, 'Completion status (Yes/No) a % or number'),
                                 'complete'      => new external_value(PARAM_BOOL,   'Completion status (true/false)'),
                                 'timecompleted' => new external_value(PARAM_INT,   'Timestamp for criteria completetion'),
                                 'details' => new external_single_structure(
                                     array(
                                         'type' => new external_value(PARAM_TEXT, 'Type description'),
                                         'criteria' => new external_value(PARAM_RAW, 'Criteria description'),
                                         'requirement' => new external_value(PARAM_TEXT, 'Requirement description'),
                                         'status' => new external_value(PARAM_TEXT, 'Status description'),
                                         ), 'details'),
                                 ), 'Completions'
                            ), ''
                         )
                    ), 'Course status'
                ),
                'warnings' => new external_warnings()
            ), 'Course completion status'
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_comment_get_comments_parameters() {

        return new external_function_parameters(
            array(
                'contextlevel' => new external_value(PARAM_ALPHA, 'contextlevel system, course, user...'),
                'instanceid'   => new external_value(PARAM_INT, 'the Instance id of item associated with the context level'),
                'component'    => new external_value(PARAM_COMPONENT, 'component'),
                'itemid'       => new external_value(PARAM_INT, 'associated id'),
                'area'         => new external_value(PARAM_AREA, 'string comment area', VALUE_DEFAULT, ''),
                'page'         => new external_value(PARAM_INT, 'page number (0 based)', VALUE_DEFAULT, 0),
            )
        );
    }

    /**
     * Return a list of comments
     *
     * @param string $contextlevel ('system, course, user', etc..)
     * @param int $instanceid
     * @param string $component the name of the component
     * @param int $itemid the item id
     * @param string $area comment area
     * @param int $page page number
     * @return array of comments and warnings
     * @since Moodle 2.9
     */
    public static function core_comment_get_comments($contextlevel, $instanceid, $component, $itemid, $area = '', $page = 0) {

        $warnings = array();
        $arrayparams = array(
            'contextlevel' => $contextlevel,
            'instanceid'   => $instanceid,
            'component'    => $component,
            'itemid'       => $itemid,
            'area'         => $area,
            'page'         => $page
        );
        $params = self::validate_parameters(self::core_comment_get_comments_parameters(), $arrayparams);

        $context = self::get_context_from_params($params);
        self::validate_context($context);

        require_capability('moodle/comment:view', $context);

        $args = new stdClass;
        $args->context   = $context;
        $args->area      = $params['area'];
        $args->itemid    = $params['itemid'];
        $args->component = $params['component'];

        $commentobject = new comment($args);
        $comments = $commentobject->get_comments($params['page']);

        // False means no permissions to see comments.
        if ($comments === false) {
            throw new moodle_exception('nopermissions', 'error', '', 'view comments');
        }

        foreach ($comments as $key => $comment) {

                list($comments[$key]->content, $comments[$key]->format) = external_format_text($comment->content,
                                                                                                 $comment->format,
                                                                                                 $context->id,
                                                                                                 $params['component'],
                                                                                                 '',
                                                                                                 0);
        }

        $results = array(
            'comments' => $comments,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_comment_get_comments_returns() {
        return new external_single_structure(
            array(
                'comments' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id'             => new external_value(PARAM_INT,  'Comment ID'),
                            'content'        => new external_value(PARAM_RAW,  'The content text formated'),
                            'format'         => new external_format_value('content'),
                            'timecreated'    => new external_value(PARAM_INT,  'Time created (timestamp)'),
                            'strftimeformat' => new external_value(PARAM_NOTAGS, 'Time format'),
                            'profileurl'     => new external_value(PARAM_URL,  'URL profile'),
                            'fullname'       => new external_value(PARAM_NOTAGS, 'fullname'),
                            'time'           => new external_value(PARAM_NOTAGS, 'Time in human format'),
                            'avatar'         => new external_value(PARAM_RAW,  'HTML user picture'),
                            'userid'         => new external_value(PARAM_INT,  'User ID'),
                            'delete'         => new external_value(PARAM_BOOL, 'Permission to delete=true/false', VALUE_OPTIONAL)
                        ), 'comment'
                    ), 'List of comments'
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of get_item_ratings parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_rating_get_item_ratings_parameters() {
        return new external_function_parameters (
            array(
                'contextlevel'  => new external_value(PARAM_ALPHA, 'context level: course, module, user, etc...'),
                'instanceid'    => new external_value(PARAM_INT, 'the instance id of item associated with the context level'),
                'component'     => new external_value(PARAM_COMPONENT, 'component'),
                'ratingarea'    => new external_value(PARAM_AREA, 'rating area'),
                'itemid'        => new external_value(PARAM_INT, 'associated id'),
                'scaleid'       => new external_value(PARAM_INT, 'scale id'),
                'sort'          => new external_value(PARAM_ALPHA, 'sort order (firstname, rating or timemodified)')
            )
        );
    }

    /**
     * Retrieve a list of ratings for a given item (forum post etc)
     *
     * @param string $contextlevel course, module, user...
     * @param int $instanceid the instance if for the context element
     * @param string $component the name of the component
     * @param string $ratingarea rating area
     * @param int $itemid the item id
     * @param int $scaleid the scale id
     * @param string $sort sql order (firstname, rating or timemodified)
     * @return array Result and possible warnings
     * @throws moodle_exception
     * @since Moodle 2.9
     */
    public static function core_rating_get_item_ratings($contextlevel, $instanceid, $component, $ratingarea, $itemid, $scaleid, $sort) {
        global $USER;

        $warnings = array();

        $arrayparams = array(
            'contextlevel' => $contextlevel,
            'instanceid'   => $instanceid,
            'component'    => $component,
            'ratingarea'   => $ratingarea,
            'itemid'       => $itemid,
            'scaleid'      => $scaleid,
            'sort'         => $sort
        );

        // Validate and normalize parameters.
        $params = self::validate_parameters(self::core_rating_get_item_ratings_parameters(), $arrayparams);

        $context = self::get_context_from_params($params);
        self::validate_context($context);

        // Minimal capability required.
        if (!has_capability('moodle/rating:view', $context)) {
            throw new moodle_exception('noviewrate', 'rating');
        }

        list($context, $course, $cm) = get_context_info_array($context->id);

        // Can we see all ratings?
        $canviewallratings = has_capability('moodle/rating:viewall', $context);

        // Create the Sql sort order string.
        switch ($params['sort']) {
            case 'firstname':
                $sqlsort = "u.firstname ASC";
                break;
            case 'rating':
                $sqlsort = "r.rating ASC";
                break;
            default:
                $sqlsort = "r.timemodified ASC";
        }

        $ratingoptions = new stdClass;
        $ratingoptions->context = $context;
        $ratingoptions->component = $params['component'];
        $ratingoptions->ratingarea = $params['ratingarea'];
        $ratingoptions->itemid = $params['itemid'];
        $ratingoptions->sort = $sqlsort;

        $rm = new rating_manager();
        $ratings = $rm->get_all_ratings_for_item($ratingoptions);
        $scalemenu = make_grades_menu($params['scaleid']);

        // If the scale was changed after ratings were submitted some ratings may have a value above the current maximum.
        // We can't just do count($scalemenu) - 1 as custom scales start at index 1, not 0.
        $maxrating = max(array_keys($scalemenu));

        $results = array();

        foreach ($ratings as $rating) {
            if ($canviewallratings || $USER->id == $rating->userid) {
                if ($rating->rating > $maxrating) {
                    $rating->rating = $maxrating;
                }
                $usercontext = context_user::instance($rating->userid);
                $profileimageurl = moodle_url::make_webservice_pluginfile_url($usercontext->id, 'user', 'icon', null, '/', 'f1');

                $result = array();
                $result['id'] = $rating->id;
                $result['userid'] = $rating->userid;
                $result['userpictureurl'] = $profileimageurl->out(false);
                $result['userfullname'] = fullname($rating);
                $result['rating'] = $scalemenu[$rating->rating];
                $result['timemodified'] = $rating->timemodified;
                $results[] = $result;
            }
        }

        return array(
            'ratings' => $results,
            'warnings' => $warnings
        );
    }

    /**
     * Returns description of core_rating_get_item_ratings result values.
     *
     * @return external_single_structure
     * @since Moodle 2.9
     */
    public static function core_rating_get_item_ratings_returns() {

        return new external_single_structure(
            array(
                'ratings'    => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id'              => new external_value(PARAM_INT,  'rating id'),
                            'userid'          => new external_value(PARAM_INT,  'user id'),
                            'userpictureurl'  => new external_value(PARAM_URL,  'URL user picture'),
                            'userfullname'    => new external_value(PARAM_NOTAGS, 'user fullname'),
                            'rating'          => new external_value(PARAM_NOTAGS, 'rating on scale'),
                            'timemodified'    => new external_value(PARAM_INT,  'time modified (timestamp)')
                        ), 'Rating'
                    ), 'list of ratings'
                ),
                'warnings'  => new external_warnings(),
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_notes_get_course_notes_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'course id, 0 for SITE'),
                'userid'   => new external_value(PARAM_INT, 'user id', VALUE_OPTIONAL),
            )
        );
    }

    /**
     * Create a notes list
     *
     * @param int $courseid ID of the Course
     * @param stdClass $context context object
     * @param int $userid ID of the User
     * @param int $state
     * @param int $author
     * @return array of notes
     * @since Moodle 2.9
     */
    protected static function create_note_list($courseid, $context, $userid, $state, $author = 0) {
        $results = array();
        $notes = note_list($courseid, $userid, $state, $author);
        foreach ($notes as $key => $note) {
            $note = (array)$note;
            list($note['content'], $note['format']) = external_format_text($note['content'],
                                                                           $note['format'],
                                                                           $context->id,
                                                                           '',
                                                                           '',
                                                                           0);
            $results[$key] = $note;
        }
        return $results;
    }

    /**
     * Get a list of course notes
     *
     * @param int $courseid ID of the Course
     * @param int $userid ID of the User
     * @return array of site, course and personal notes and warnings
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_notes_get_course_notes($courseid, $userid = 0) {
        global $CFG, $USER;

        if (empty($CFG->enablenotes)) {
            throw new moodle_exception('notesdisabled', 'notes');
        }

        $warnings = array();
        $arrayparams = array(
            'courseid' => $courseid,
            'userid'   => $userid,
        );
        $params = self::validate_parameters(self::core_notes_get_course_notes_parameters(), $arrayparams);

        if (empty($params['courseid'])) {
            $params['courseid'] = SITEID;
        }
        $user = null;
        if (!empty($params['userid'])) {
            $user = core_user::get_user($params['userid'], 'id', MUST_EXIST);
        }

        $course = get_course($params['courseid']);

        if ($course->id == SITEID) {
            $context = context_system::instance();
        } else {
            $context = context_course::instance($course->id);
        }
        self::validate_context($context);

        $sitenotes = array();
        $coursenotes = array();
        $personalnotes = array();

        if ($course->id != SITEID) {

            require_capability('moodle/notes:view', $context);
            $sitenotes = self::create_note_list($course->id, $context, $params['userid'], NOTES_STATE_SITE);
            $coursenotes = self::create_note_list($course->id, $context, $params['userid'], NOTES_STATE_PUBLIC);
            $personalnotes = self::create_note_list($course->id, $context, $params['userid'], NOTES_STATE_DRAFT,
                                                        $USER->id);
        } else {
            if (has_capability('moodle/notes:view', $context)) {
                $sitenotes = self::create_note_list(0, $context, $params['userid'], NOTES_STATE_SITE);
            }
            // It returns notes only for a specific user!
            if (!empty($user)) {
                $usercourses = enrol_get_users_courses($user->id, true);
                foreach ($usercourses as $c) {
                    // All notes at course level, only if we have capability on every course.
                    if (has_capability('moodle/notes:view', context_course::instance($c->id))) {
                        $coursenotes += self::create_note_list($c->id, $context, $params['userid'], NOTES_STATE_PUBLIC);
                    }
                }
            }
        }

        $results = array(
            'sitenotes'     => $sitenotes,
            'coursenotes'   => $coursenotes,
            'personalnotes' => $personalnotes,
            'warnings'      => $warnings
        );
        return $results;

    }

    /**
     * Returns array of note structure
     *
     * @return external_description
     * @since Moodle 2.9
     */
    protected static function get_note_structure() {
        return array(
                     'id'           => new external_value(PARAM_INT, 'id of this note'),
                     'courseid'     => new external_value(PARAM_INT, 'id of the course'),
                     'userid'       => new external_value(PARAM_INT, 'user id'),
                     'content'      => new external_value(PARAM_RAW, 'the content text formated'),
                     'format'       => new external_format_value('content'),
                     'created'      => new external_value(PARAM_INT, 'time created (timestamp)'),
                     'lastmodified' => new external_value(PARAM_INT, 'time of last modification (timestamp)'),
                     'usermodified' => new external_value(PARAM_INT, 'user id of the creator of this note'),
                     'publishstate' => new external_value(PARAM_ALPHA, "state of the note (i.e. draft, public, site) ")
        );
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_notes_get_course_notes_returns() {
        return new external_single_structure(
            array(
                  'sitenotes' => new external_multiple_structure(
                      new external_single_structure(
                          self::get_note_structure() , ''
                      ), 'site notes', VALUE_OPTIONAL
                   ),
                   'coursenotes' => new external_multiple_structure(
                      new external_single_structure(
                          self::get_note_structure() , ''
                      ), 'couse notes', VALUE_OPTIONAL
                   ),
                   'personalnotes' => new external_multiple_structure(
                      new external_single_structure(
                          self::get_note_structure() , ''
                      ), 'personal notes', VALUE_OPTIONAL
                   ),
                 'warnings' => new external_warnings()
            ), 'notes'
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_course_view_course_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'id of the course'),
                'sectionnumber' => new external_value(PARAM_INT, 'section number', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Simulate the view.php web interface page, logging events, completion, etc...
     *
     * @param int $courseid id of course
     * @param int $sectionnumber sectionnumber (0, 1, 2...)
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_course_view_course($courseid, $sectionnumber = 0) {
        global $CFG;
        require_once($CFG->dirroot . "/course/lib.php");

        $params = self::validate_parameters(self::core_course_view_course_parameters(),
                                            array(
                                                'courseid' => $courseid,
                                                'sectionnumber' => $sectionnumber
                                            ));

        $warnings = array();

        $course = get_course($params['courseid']);
        $context = context_course::instance($course->id);
        self::validate_context($context);

        if (!empty($params['sectionnumber'])) {

            // Get section details and check it exists.
            $modinfo = get_fast_modinfo($course);
            $coursesection = $modinfo->get_section_info($params['sectionnumber'], MUST_EXIST);

            // Check user is allowed to see it.
            if (!$coursesection->uservisible) {
                require_capability('moodle/course:viewhiddensections', $context);
            }
        }

        $eventdata = array('context' => $context);

        if (!empty($sectionnumber)) {
            $eventdata['other']['coursesectionnumber'] = $params['sectionnumber'];
        }

        $event = \core\event\course_viewed::create($eventdata);
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_course_view_course_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

        /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_user_view_user_list_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'id of the course, 0 for site')
            )
        );
    }

    /**
     * Simulate the /user/index.php web interface page triggering events
     *
     * @param int $courseid id of course
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_user_view_user_list($courseid) {
        global $CFG;
        require_once($CFG->dirroot . "/user/lib.php");

        $params = self::validate_parameters(self::core_user_view_user_list_parameters(),
                                            array(
                                                'courseid' => $courseid
                                            ));

        $warnings = array();

        if (empty($params['courseid'])) {
            $params['courseid'] = SITEID;
        }

        $course = get_course($params['courseid']);

        if ($course->id == SITEID) {
            $context = context_system::instance();
        } else {
            $context = context_course::instance($course->id);
        }
        self::validate_context($context);

        if ($course->id == SITEID) {
            require_capability('moodle/site:viewparticipants', $context);
        } else {
            require_capability('moodle/course:viewparticipants', $context);
        }

        $event = \core\event\user_list_viewed::create(array(
            'objectid' => $course->id,
            'courseid' => $course->id,
            'context' => $context,
            'other' => array(
                'courseshortname' => $course->shortname,
                'coursefullname' => $course->fullname
            )
        ));
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_user_view_user_list_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_user_view_user_profile_parameters() {
        return new external_function_parameters(
            array(
                'userid' => new external_value(PARAM_INT, 'id of the user, 0 for current user', VALUE_REQUIRED),
                'courseid' => new external_value(PARAM_INT, 'id of the course, default site course', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Simulate the /user/index.php and /user/profile.php web interface page triggering events
     *
     * @param int $userid id of user
     * @param int $courseid id of course
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_user_view_user_profile($userid, $courseid = 0) {
        global $CFG, $USER;
        require_once($CFG->dirroot . "/user/profile/lib.php");

        $params = self::validate_parameters(self::core_user_view_user_profile_parameters(),
                                            array(
                                                'userid' => $userid,
                                                'courseid' => $courseid
                                            ));

        $warnings = array();

        if (empty($params['userid'])) {
            $params['userid'] = $USER->id;
        }

        if (empty($params['courseid'])) {
            $params['courseid'] = SITEID;
        }

        $course = get_course($params['courseid']);
        $user = core_user::get_user($params['userid'], '*', MUST_EXIST);

        if ($user->deleted) {
            throw new moodle_exception('userdeleted');
        }
        if (isguestuser($user)) {
            // Can not view profile of guest - thre is nothing to see there.
            throw new moodle_exception('invaliduserid');
        }

        if ($course->id == SITEID) {
            $coursecontext = context_system::instance();;
        } else {
            $coursecontext = context_course::instance($course->id);
        }
        self::validate_context($coursecontext);

        $currentuser = $USER->id == $user->id;
        $usercontext = context_user::instance($user->id);

        if (!$currentuser and
                !has_capability('moodle/user:viewdetails', $coursecontext) and
                !has_capability('moodle/user:viewdetails', $usercontext)) {
            throw new moodle_exception('cannotviewprofile');
        }

        // Case like user/profile.php.
        if ($course->id == SITEID) {
            $eventdata = array(
                'objectid' => $user->id,
                'relateduserid' => $user->id,
                'context' => $usercontext
            );

            if (!empty($course)) {
                $eventdata['courseid'] = $course->id;
                $eventdata['other'] = array(
                    'courseid' => $course->id,
                    'courseshortname' => $course->shortname,
                    'coursefullname' => $course->fullname
                );
            }

            $event = \core\event\user_profile_viewed::create($eventdata);
            $event->add_record_snapshot('user', $user);
            $event->trigger();
        } else {
            // Case like user/view.php.
            if (!$currentuser and !is_enrolled($coursecontext, $user->id)) {
                throw new moodle_exception('notenrolledprofile');
            }

            $eventdata = array(
                'objectid' => $user->id,
                'relateduserid' => $user->id,
                'context' => $coursecontext
            );

            if (!empty($course)) {
                $eventdata['courseid'] = $course->id;
                $eventdata['other'] = array(
                    'courseid' => $course->id,
                    'courseshortname' => $course->shortname,
                    'coursefullname' => $course->fullname
                );
            }

            $event = \core\event\user_profile_viewed::create($eventdata);
            $event->add_record_snapshot('user', $user);
            $event->trigger();
        }

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_user_view_user_profile_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function mod_forum_view_forum_parameters() {
        return new external_function_parameters(
            array(
                'forumid' => new external_value(PARAM_INT, 'forum instance id')
            )
        );
    }

    /**
     * Simulate the forum/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $forumid the forum instance id
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function mod_forum_view_forum($forumid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/forum/lib.php");

        $params = self::validate_parameters(self::mod_forum_view_forum_parameters(),
                                            array(
                                                'forumid' => $forumid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $forum = $DB->get_record('forum', array('id' => $params['forumid']), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($forum, 'forum');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $forum->id
        );

        $event = \mod_forum\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('forum', $forum);
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function mod_forum_view_forum_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function mod_forum_view_forum_discussion_parameters() {
        return new external_function_parameters(
            array(
                'discussionid' => new external_value(PARAM_INT, 'discussion id')
            )
        );
    }

    /**
     * Simulate the forum/discuss.php web interface page: trigger events
     *
     * @param int $discussionid the discussion id
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function mod_forum_view_forum_discussion($discussionid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/forum/lib.php");

        $params = self::validate_parameters(self::mod_forum_view_forum_discussion_parameters(),
                                            array(
                                                'discussionid' => $discussionid
                                            ));
        $warnings = array();

        $discussion = $DB->get_record('forum_discussions', array('id' => $params['discussionid']), '*', MUST_EXIST);
        $forum = $DB->get_record('forum', array('id' => $discussion->forum), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($forum, 'forum');

        // Validate the module context. It checks everything that affects the module visibility (including groupings, etc..).
        $modcontext = context_module::instance($cm->id);
        self::validate_context($modcontext);

        // Call the forum/lib API.
        $params = array(
            'context' => $modcontext,
            'objectid' => $discussion->id,
        );

        $event = \mod_forum\event\discussion_viewed::create($params);
        $event->add_record_snapshot('forum_discussions', $discussion);
        $event->add_record_snapshot('forum', $forum);
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function mod_forum_view_forum_discussion_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function gradereport_user_view_grade_report_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'id of the course'),
                'userid' => new external_value(PARAM_INT, 'id of the user, 0 means current user', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Trigger the user report events, do the same that the web interface view of the report
     *
     * @param int $courseid id of course
     * @param int $userid id of the user the report belongs to
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function gradereport_user_view_grade_report($courseid, $userid = 0) {
        global $CFG, $USER;
        require_once($CFG->dirroot . "/grade/lib.php");
        require_once($CFG->dirroot . "/grade/report/user/lib.php");

        $params = self::validate_parameters(self::gradereport_user_view_grade_report_parameters(),
                                            array(
                                                'courseid' => $courseid,
                                                'userid' => $userid
                                            ));

        $warnings = array();

        $course = get_course($params['courseid']);

        $context = context_course::instance($course->id);
        self::validate_context($context);

        $userid = $params['userid'];
        if (empty($userid)) {
            $userid = $USER->id;
        } else {
            $user = core_user::get_user($userid, '*', MUST_EXIST);
            if ($user->deleted) {
                throw new moodle_exception('userdeleted');
            }
            if (isguestuser($user)) {
                // Can not view profile of guest - thre is nothing to see there.
                throw new moodle_exception('invaliduserid');
            }
        }

        $access = false;

        if (has_capability('moodle/grade:viewall', $context)) {
            // Can view all course grades (any user).
            $access = true;
        } else if ($userid == $USER->id and has_capability('moodle/grade:view', $context) and $course->showgrades) {
            // View own grades.
            $access = true;
        }

        if (!$access) {
            throw new moodle_exception('nopermissiontoviewgrades', 'error');
        }

        $event = \gradereport_user\event\grade_report_viewed::create(
            array(
                'context' => $context,
                'courseid' => $course->id,
                'relateduserid' => $userid,
            )
        );
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function gradereport_user_view_grade_report_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since 2.9
     */
    public static function core_message_mark_message_read_parameters() {
        return new external_function_parameters(
            array(
                'messageid' => new external_value(PARAM_INT, 'id of the message (in the message table)'),
                'timeread' => new external_value(PARAM_INT, 'timestamp for when the message should be marked read')
            )
        );
    }

    /**
     * Mark a single message as read, trigger message_viewed event
     *
     * @param  int $messageid id of the message (in the message table)
     * @param  int $timeread timestamp for when the message should be marked read
     * @return external_description
     * @throws invalid_parameter_exception
     * @throws moodle_exception
     * @since 2.9
     */
    public static function core_message_mark_message_read($messageid, $timeread) {
        global $CFG, $DB, $USER;
        require_once($CFG->dirroot . "/message/lib.php");

        // Check if private messaging between users is allowed.
        if (empty($CFG->messaging)) {
            throw new moodle_exception('disabled', 'message');
        }

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();

        // Validate params.
        $params = array(
            'messageid' => $messageid,
            'timeread' => $timeread
        );
        $params = self::validate_parameters(self::core_message_mark_message_read_parameters(), $params);

        // Validate context.
        $context = context_system::instance();
        self::validate_context($context);

        $message = $DB->get_record('message', array('id' => $params['messageid']), '*', MUST_EXIST);

        if ($message->useridto != $USER->id) {
            throw new invalid_parameter_exception('Invalid messageid, you don\'t have permissions to mark this message as read');
        }

        $messageid = message_mark_message_read($message, $params['timeread']);

        $results = array(
            'messageid' => $messageid,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since 2.9
     */
    public static function core_message_mark_message_read_returns() {
        return new external_single_structure(
            array(
                'messageid' => new external_value(PARAM_INT, 'the id of the message in the message_read table'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.9
     */
    public static function core_notes_view_notes_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'course id, 0 for notes at system level'),
                'userid' => new external_value(PARAM_INT, 'user id, 0 means view all the user notes', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Simulates the web interface view of notes/index.php: trigger events
     *
     * @param int $courseid id of the course
     * @param int $userid id of the user
     * @return array of warnings and status result
     * @since Moodle 2.9
     * @throws moodle_exception
     */
    public static function core_notes_view_notes($courseid, $userid = 0) {
        global $CFG;
        require_once($CFG->dirroot . "/notes/lib.php");

        if (empty($CFG->enablenotes)) {
            throw new moodle_exception('notesdisabled', 'notes');
        }

        $warnings = array();
        $arrayparams = array(
            'courseid' => $courseid,
            'userid' => $userid
        );
        $params = self::validate_parameters(self::core_notes_view_notes_parameters(), $arrayparams);

        if (empty($params['courseid'])) {
            $params['courseid'] = SITEID;
        }

        $course = get_course($params['courseid']);

        if ($course->id == SITEID) {
            $context = context_system::instance();
        } else {
            $context = context_course::instance($course->id);
        }

        // First of all, validate the context before do further permission checks.
        self::validate_context($context);
        require_capability('moodle/notes:view', $context);

        if (!empty($params['userid'])) {
            $user = core_user::get_user($params['userid'], 'id, deleted', MUST_EXIST);

            if ($user->deleted) {
                throw new moodle_exception('userdeleted');
            }

            if (isguestuser($user)) {
                throw new moodle_exception('invaliduserid');
            }

            if ($course->id != SITEID and !is_enrolled($context, $user, '', true)) {
                throw new moodle_exception('notenrolledprofile');
            }
        }

        $event = \core\event\notes_viewed::create(array(
            'relateduserid' => $params['userid'],
            'context' => $context
        ));
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;

    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.9
     */
    public static function core_notes_view_notes_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_resource_view_resource_parameters() {
        return new external_function_parameters(
            array(
                'resourceid' => new external_value(PARAM_INT, 'resource instance id')
            )
        );
    }

    /**
     * Simulate the resource/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $resourceid the resource instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_resource_view_resource($resourceid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/resource/lib.php");

        $params = self::validate_parameters(self::mod_resource_view_resource_parameters(),
                                            array(
                                                'resourceid' => $resourceid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $resource = $DB->get_record('resource', array('id' => $params['resourceid']), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($resource, 'resource');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/resource:view', $context);

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $resource->id
        );

        $event = \mod_resource\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('resource', $resource);
        $event->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_resource_view_resource_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_url_view_url_parameters() {
        return new external_function_parameters(
            array(
                'urlid' => new external_value(PARAM_INT, 'url instance id')
            )
        );
    }

    /**
     * Simulate the url/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $urlid the url instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_url_view_url($urlid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/url/lib.php");

        $params = self::validate_parameters(self::mod_url_view_url_parameters(),
                                            array(
                                                'urlid' => $urlid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $url = $DB->get_record('url', array('id' => $params['urlid']), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($url, 'url');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/url:view', $context);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $url->id
        );

        $event = \mod_url\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('url', $url);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_url_view_url_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_page_view_page_parameters() {
        return new external_function_parameters(
            array(
                'pageid' => new external_value(PARAM_INT, 'page instance id')
            )
        );
    }

    /**
     * Simulate the page/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $pageid the page instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_page_view_page($pageid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/page/lib.php");

        $params = self::validate_parameters(self::mod_page_view_page_parameters(),
                                            array(
                                                'pageid' => $pageid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $page = $DB->get_record('page', array('id' => $params['pageid']), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($page, 'page');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/page:view', $context);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $page->id
        );

        $event = \mod_page\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('page', $page);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_page_view_page_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_assign_view_grading_table_parameters() {
        return new external_function_parameters(
            array(
                'assignid' => new external_value(PARAM_INT, 'assign instance id')
            )
        );
    }

    /**
     * Simulate the web interface grading table view.
     *
     * @param int $assignid the assign instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_assign_view_grading_table($assignid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/assign/locallib.php");

        $params = self::validate_parameters(self::mod_assign_view_grading_table_parameters(),
                                            array(
                                                'assignid' => $assignid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $assign = $DB->get_record('assign', array('id' => $params['assignid']), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($assign, 'assign');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/assign:view', $context);

        $assign = new assign($context, null, null);
        $assign->require_view_grades();
        \mod_assign\event\grading_table_viewed::create_from_assign($assign)->trigger();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_assign_view_grading_table_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_folder_view_folder_parameters() {
        return new external_function_parameters(
            array(
                'folderid' => new external_value(PARAM_INT, 'folder instance id')
            )
        );
    }

    /**
     * Simulate the folder/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $folderid the folder instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_folder_view_folder($folderid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/folder/lib.php");

        $params = self::validate_parameters(self::mod_folder_view_folder_parameters(),
                                            array(
                                                'folderid' => $folderid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $folder = $DB->get_record('folder', array('id' => $params['folderid']), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($folder, 'folder');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/folder:view', $context);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $folder->id
        );

        $event = \mod_folder\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('folder', $folder);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_folder_view_folder_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_chat_login_user_parameters() {
        return new external_function_parameters(
            array(
                'chatid' => new external_value(PARAM_INT, 'chat instance id'),
                'groupid' => new external_value(PARAM_INT, 'group id, 0 means that the function will determine the user group',
                                                VALUE_DEFAULT, 0),
            )
        );
    }

    /**
     * Log the current user into a chat room in the given chat.
     *
     * @param int $chatid the chat instance id
     * @param int $groupid the user group id
     * @return array of warnings and the chat unique session id
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_chat_login_user($chatid, $groupid = 0) {
        global $DB;

        $params = self::validate_parameters(self::mod_chat_login_user_parameters(),
                                            array(
                                                'chatid' => $chatid,
                                                'groupid' => $groupid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $chat = $DB->get_record('chat', array('id' => $params['chatid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($chat, 'chat');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/chat:chat', $context);

        if (!empty($params['groupid'])) {
            $groupid = $params['groupid'];
            // Determine is the group is visible to user.
            if (!groups_group_visible($groupid, $course, $cm)) {
                throw new moodle_exception('notingroup');
            }
        } else {
            // Check to see if groups are being used here.
            if ($groupmode = groups_get_activity_groupmode($cm)) {
                $groupid = groups_get_activity_group($cm);
            } else {
                $groupid = 0;
            }
        }

        // Get the unique chat session id.
        // Since we are going to use the chat via Web Service requests we set the ajax version (since it's the most similar).
        if (!$chatsid = chat_login_user($chat->id, 'ajax', $groupid, $course)) {
            throw moodle_exception('cantlogin', 'chat');
        }

        $result = array();
        $result['chatsid'] = $chatsid;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_chat_login_user_returns() {
        return new external_single_structure(
            array(
                'chatsid' => new external_value(PARAM_ALPHANUMEXT, 'unique chat session id'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chat_users_parameters() {
        return new external_function_parameters(
            array(
                'chatsid' => new external_value(PARAM_ALPHANUMEXT, 'chat session id (obtained via mod_chat_login_user)')
            )
        );
    }

    /**
     * Get the list of users in the given chat session.
     *
     * @param int $chatsid the chat instance id
     * @return array of warnings and the user lists
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_chat_get_chat_users($chatsid) {
        global $DB;

        $params = self::validate_parameters(self::mod_chat_get_chat_users_parameters(),
                                            array(
                                                'chatsid' => $chatsid
                                            ));
        $warnings = array();

        // Request and permission validation.
        if (!$chatuser = $DB->get_record('chat_users', array('sid' => $params['chatsid']))) {
            throw new moodle_exception('notlogged', 'chat');
        }
        $chat = $DB->get_record('chat', array('id' => $chatuser->chatid), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($chat, 'chat');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/chat:chat', $context);

        // First, delete old users from the chats.
        chat_delete_old_users();

        $users = chat_get_users($chatuser->chatid, $chatuser->groupid, $cm->groupingid);
        $returnedusers = array();

        foreach ($users as $user) {
            $usercontext = context_user::instance($user->id, IGNORE_MISSING);
            $profileimageurl = '';

            if ($usercontext) {
                $profileimageurl = moodle_url::make_pluginfile_url(
                                    $usercontext->id, 'user', 'icon', null, '/', 'f1')->out(false);
            }

            $returnedusers[] = array(
                'id' => $user->id,
                'fullname' => fullname($user),
                'profileimageurl' => $profileimageurl
            );
        }

        $result = array();
        $result['users'] = $returnedusers;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chat_users_returns() {
        return new external_single_structure(
            array(
                'users' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'user id'),
                            'fullname' => new external_value(PARAM_NOTAGS, 'user full name'),
                            'profileimageurl' => new external_value(PARAM_URL, 'user picture URL'),
                        )
                    ),
                    'list of users'
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_chat_send_chat_message_parameters() {
        return new external_function_parameters(
            array(
                'chatsid' => new external_value(PARAM_ALPHANUMEXT, 'chat session id (obtained via mod_chat_login_user)'),
                'messagetext' => new external_value(PARAM_RAW, 'the message text'),
                'beepid' => new external_value(PARAM_RAW, 'the beep id', VALUE_DEFAULT, ''),

            )
        );
    }

    /**
     * Send a message on the given chat session.
     *
     * @param int $chatsid the chat instance id
     * @param string $messagetext the message text
     * @param string $beepid the beep message id
     * @return array of warnings and the new message id (0 if the message was empty)
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_chat_send_chat_message($chatsid, $messagetext, $beepid = '') {
        global $DB;

        $params = self::validate_parameters(self::mod_chat_send_chat_message_parameters(),
                                            array(
                                                'chatsid' => $chatsid,
                                                'messagetext' => $messagetext,
                                                'beepid' => $beepid
                                            ));
        $warnings = array();

        // Request and permission validation.
        if (!$chatuser = $DB->get_record('chat_users', array('sid' => $params['chatsid']))) {
            throw new moodle_exception('notlogged', 'chat');
        }
        $chat = $DB->get_record('chat', array('id' => $chatuser->chatid), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($chat, 'chat');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/chat:chat', $context);

        $chatmessage = clean_text($params['messagetext'], FORMAT_MOODLE);

        if (!empty($params['beepid'])) {
            $chatmessage = 'beep ' . $params['beepid'];
        }

        if (!empty($chatmessage)) {
            // Send the message.
            $messageid = chat_send_chatmessage($chatuser, $chatmessage, 0, $cm);
            // Update ping time.
            $chatuser->lastmessageping = time() - 2;
            $DB->update_record('chat_users', $chatuser);
        } else {
            $messageid = 0;
        }

        $result = array();
        $result['messageid'] = $messageid;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_chat_send_chat_message_returns() {
        return new external_single_structure(
            array(
                'messageid' => new external_value(PARAM_INT, 'message sent id'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chat_latest_messages_parameters() {
        return new external_function_parameters(
            array(
                'chatsid' => new external_value(PARAM_ALPHANUMEXT, 'chat session id (obtained via mod_chat_login_user)'),
                'chatlasttime' => new external_value(PARAM_INT, 'last time messages were retrieved', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Get the latest messages from the given chat session.
     *
     * @param int $chatsid the chat instance id
     * @param int $chatlasttime last time messages were retrieved
     * @return array of warnings and the new message id (0 if the message was empty)
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_chat_get_chat_latest_messages($chatsid, $chatlasttime = 0) {
        global $DB, $CFG;

        $params = self::validate_parameters(self::mod_chat_get_chat_latest_messages_parameters(),
                                            array(
                                                'chatsid' => $chatsid,
                                                'chatlasttime' => $chatlasttime
                                            ));
        $warnings = array();

        // Request and permission validation.
        if (!$chatuser = $DB->get_record('chat_users', array('sid' => $params['chatsid']))) {
            throw new moodle_exception('notlogged', 'chat');
        }
        $chat = $DB->get_record('chat', array('id' => $chatuser->chatid), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($chat, 'chat');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/chat:chat', $context);

        $chatlasttime = $params['chatlasttime'];
        if ((time() - $chatlasttime) > $CFG->chat_old_ping) {
            chat_delete_old_users();
        }

        // Set default chat last time (to not retrieve all the conversations).
        if ($chatlasttime == 0) {
            $chatlasttime = time() - $CFG->chat_old_ping;
        }

        if ($latestmessage = chat_get_latest_message($chatuser->chatid, $chatuser->groupid)) {
            $chatnewlasttime = $latestmessage->timestamp;
        } else {
            $chatnewlasttime = 0;
        }

        $messages = chat_get_latest_messages($chatuser, $chatlasttime);
        $returnedmessages = array();

        foreach ($messages as $message) {

            // FORMAT_MOODLE is mandatory in the chat plugin.
            list($messageformatted, $format) = external_format_text($message->message, FORMAT_MOODLE, $context->id, 'mod_chat',
                                                                    '', 0);

            $returnedmessages[] = array(
                'id' => $message->id,
                'userid' => $message->userid,
                'system' => (bool) $message->system,
                'message' => $messageformatted,
                'timestamp' => $message->timestamp,
            );
        }

        // Update our status since we are active in the chat.
        $DB->set_field('chat_users', 'lastping', time(), array('id' => $chatuser->id));

        $result = array();
        $result['messages'] = $returnedmessages;
        $result['chatnewlasttime'] = $chatnewlasttime;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chat_latest_messages_returns() {
        return new external_single_structure(
            array(
                'messages' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'message id'),
                            'userid' => new external_value(PARAM_INT, 'user id'),
                            'system' => new external_value(PARAM_BOOL, 'true if is a system message (like user joined)'),
                            'message' => new external_value(PARAM_RAW, 'message text'),
                            'timestamp' => new external_value(PARAM_INT, 'timestamp for the message'),
                        )
                    ),
                    'list of users'
                ),
                'chatnewlasttime' => new external_value(PARAM_INT, 'new last time'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_chat_view_chat_parameters() {
        return new external_function_parameters(
            array(
                'chatid' => new external_value(PARAM_INT, 'chat instance id')
            )
        );
    }

    /**
     * Simulate the chat/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $chatid the chat instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_chat_view_chat($chatid) {
        global $DB, $CFG;

        $params = self::validate_parameters(self::mod_chat_view_chat_parameters(),
                                            array(
                                                'chatid' => $chatid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $chat = $DB->get_record('chat', array('id' => $params['chatid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($chat, 'chat');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/chat:chat', $context);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $chat->id
        );

        $event = \mod_chat\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('chat', $chat);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_chat_view_chat_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for get_chats_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chats_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'),
                    'Array of course ids', VALUE_DEFAULT, array()
                ),
            )
        );
    }
    /**
     * Returns a list of chats in a provided list of courses,
     * if no list is provided all chats that the user can view will be returned.
     *
     * @param array $courseids the course ids
     * @return array of chats details
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chats_by_courses($courseids = array()) {
        global $CFG;
        $params = self::validate_parameters(self::mod_chat_get_chats_by_courses_parameters(), array('courseids' => $courseids));
        $warnings = array();
        if (!empty($params['courseids'])) {
            $courses = array();
            $courseids = $params['courseids'];
        } else {
            $courses = enrol_get_my_courses();
            $courseids = array_keys($courses);
        }
        // Array to store the chats to return.
        $arrchats = array();
        // Ensure there are courseids to loop through.
        if (!empty($courseids)) {
            // Array of the courses we are going to retrieve the chats from.
            $arraycourses = array();
            // Go through the courseids.
            foreach ($courseids as $cid) {
                // Check the user can function in this context.
                try {
                    $context = context_course::instance($cid);
                    self::validate_context($context);
                    // Check if this course was already loaded (by enrol_get_my_courses).
                    if (!isset($courses[$cid])) {
                        $courses[$cid] = get_course($cid);
                    }
                    $arraycourses[$cid] = $courses[$cid];
                } catch (Exception $e) {
                    $warnings[] = array(
                        'item' => 'course',
                        'itemid' => $cid,
                        'warningcode' => '1',
                        'message' => 'No access rights in course context '.$e->getMessage()
                    );
                }
            }
            // Get the chats in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $chats = get_all_instances_in_courses("chat", $arraycourses);
            foreach ($chats as $chat) {
                $chatcontext = context_module::instance($chat->coursemodule);
                // Entry to return.
                $chatdetails = array();
                // First, we return information that any user can see in the web interface.
                $chatdetails['id'] = $chat->id;
                $chatdetails['coursemodule']      = $chat->coursemodule;
                $chatdetails['course']            = $chat->course;
                $chatdetails['name']              = $chat->name;
                // Format intro.
                list($chatdetails['intro'], $chatdetails['introformat']) =
                    external_format_text($chat->intro, $chat->introformat,
                                            $chatcontext->id, 'mod_chat', 'intro', null);

                if (has_capability('mod/chat:chat', $chatcontext)) {
                    $chatdetails['chatmethod']    = $CFG->chat_method;
                    $chatdetails['keepdays']      = $chat->keepdays;
                    $chatdetails['studentlogs']   = $chat->studentlogs;
                    $chatdetails['chattime']      = $chat->chattime;
                    $chatdetails['schedule']      = $chat->schedule;
                }

                if (has_capability('moodle/course:manageactivities', $chatcontext)) {
                    $chatdetails['timemodified']  = $chat->timemodified;
                    $chatdetails['section']       = $chat->section;
                    $chatdetails['visible']       = $chat->visible;
                    $chatdetails['groupmode']     = $chat->groupmode;
                    $chatdetails['groupingid']    = $chat->groupingid;
                }
                $arrchats[] = $chatdetails;
            }
        }
        $result = array();
        $result['chats'] = $arrchats;
        $result['warnings'] = $warnings;
        return $result;
    }
    /**
     * Describes the get_chats_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_chat_get_chats_by_courses_returns() {
        return new external_single_structure(
            array(
                'chats' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Chat id'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module id'),
                            'course' => new external_value(PARAM_TEXT, 'Course id'),
                            'name' => new external_value(PARAM_TEXT, 'Chat name'),
                            'intro' => new external_value(PARAM_RAW, 'The Chat intro'),
                            'introformat' => new external_format_value('intro'),
                            'chatmethod' => new external_value(PARAM_ALPHA, 'chat method (sockets, daemon)', VALUE_OPTIONAL),
                            'keepdays' => new external_value(PARAM_INT, 'keep days', VALUE_OPTIONAL),
                            'studentlogs' => new external_value(PARAM_INT, 'student logs visible to everyone', VALUE_OPTIONAL),
                            'chattime' => new external_value(PARAM_RAW, 'chat time', VALUE_OPTIONAL),
                            'schedule' => new external_value(PARAM_INT, 'schedule type', VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_RAW, 'time of last modification', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'course section id', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_BOOL, 'visible', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'group mode', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'group id', VALUE_OPTIONAL),
                        ), 'Chats'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_choice_view_choice_parameters() {
        return new external_function_parameters(
            array(
                'choiceid' => new external_value(PARAM_INT, 'choice instance id')
            )
        );
    }

    /**
     * Simulate the choice/view.php web interface page: trigger events, completion, etc...
     *
     * @param int $choiceid the choice instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_choice_view_choice($choiceid) {
        global $CFG;

        $params = self::validate_parameters(self::mod_choice_view_choice_parameters(),
                                            array(
                                                'choiceid' => $choiceid
                                            ));
        $warnings = array();

        // Request and permission validation.
        if (!$choice = choice_get_choice($params['choiceid'])) {
            throw new moodle_exception("invalidcoursemodule", "error");
        }
        list($course, $cm) = get_course_and_cm_from_instance($choice, 'choice');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $choice->id
        );

        $event = \mod_choice\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('choice', $choice);
        $event->trigger();

        // Completion.
        $completion = new completion_info($course);
        $completion->set_module_viewed($cm);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_choice_view_choice_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for mod_choice_get_choices_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choice_results_parameters() {
        return new external_function_parameters (array('choiceid' => new external_value(PARAM_INT, 'choice instance id')));
    }
    /**
     * Returns user's results for a specific choice
     * and a list of those users that did not answered yet.
     *
     * @param int $choiceid the choice instance id
     * @return array of responses details
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choice_results($choiceid) {
        global $USER;

        $params = self::validate_parameters(self::mod_choice_get_choice_results_parameters(), array('choiceid' => $choiceid));

        if (!$choice = choice_get_choice($params['choiceid'])) {
            throw new moodle_exception("invalidcoursemodule", "error");
        }
        list($course, $cm) = get_course_and_cm_from_instance($choice, 'choice');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $groupmode = groups_get_activity_groupmode($cm);
        // Check if we have to include responses from inactive users.
        $onlyactive = $choice->includeinactive ? false : true;
        $users = choice_get_response_data($choice, $cm, $groupmode, $onlyactive);
        // Show those who haven't answered the question.
        if (!empty($choice->showunanswered)) {
            $choice->option[0] = get_string('notanswered', 'choice');
            $choice->maxanswers[0] = 0;
        }
        $results = prepare_choice_show_results($choice, $course, $cm, $users);

        $options = array();
        foreach ($results->options as $optionid => $option) {

            $userresponses = array();
            $numberofuser = 0;
            $percentageamount = 0;
            if (property_exists($option, 'user') and
                (has_capability('mod/choice:readresponses', $context) or choice_can_see_results($choice))) {
                $numberofuser = count($option->user);
                $percentageamount = ((float)$numberofuser / (float)$results->numberofuser) * 100.0;
                if ($choice->publish) {
                    foreach ($option->user as $userresponse) {
                        $response = array();
                        $response['userid'] = $userresponse->id;
                        $response['fullname'] = fullname($userresponse);
                        $usercontext = context_user::instance($userresponse->id, IGNORE_MISSING);
                        if ($usercontext) {
                            $profileimageurl = moodle_url::make_webservice_pluginfile_url($usercontext->id, 'user', 'icon', null,
                                                                                         '/', 'f1')->out(false);
                        } else {
                            $profileimageurl = '';
                        }
                        $response['profileimageurl'] = $profileimageurl;
                        // Add optional properties.
                        foreach (array('answerid', 'timemodified') as $field) {
                            if (property_exists($userresponse, 'answerid')) {
                                $response[$field] = $userresponse->$field;
                            }
                        }
                        $userresponses[] = $response;
                    }
                }
            }

            $options[] = array('id'               => $optionid,
                               'text'             => format_string($option->text),
                               'maxanswer'        => $option->maxanswer,
                               'userresponses'    => $userresponses,
                               'numberofuser'     => $numberofuser,
                               'percentageamount' => $percentageamount
                              );
        }
        $warnings = array();
        return array('options' => $options,
                     'warnings' => $warnings
                    );
    }

    /**
     * Describes the mod_choice_get_choice_results return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choice_results_returns() {
        return new external_single_structure(
            array(
                'options' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'choice instance id'),
                            'text' => new external_value(PARAM_RAW, 'text of the choice'),
                            'maxanswer' => new external_value(PARAM_INT, 'maximum number of answers'),
                            'userresponses' => new external_multiple_structure(
                                 new external_single_structure(
                                     array(
                                        'userid' => new external_value(PARAM_INT, 'user id'),
                                        'fullname' => new external_value(PARAM_NOTAGS, 'user full name'),
                                        'profileimageurl' => new external_value(PARAM_URL, 'profile user image url'),
                                        'answerid' => new external_value(PARAM_INT, 'answer id', VALUE_OPTIONAL),
                                        'timemodified' => new external_value(PARAM_INT, 'time of modification', VALUE_OPTIONAL),
                                     ), 'User responses'
                                 )
                            ),
                            'numberofuser' => new external_value(PARAM_INT, 'number of users answers'),
                            'percentageamount' => new external_value(PARAM_FLOAT, 'percentage of users answers')
                        ), 'Options'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

        /**
     * Describes the parameters for mod_choice_get_choice_options.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choice_options_parameters() {
        return new external_function_parameters (array('choiceid' => new external_value(PARAM_INT, 'choice instance id')));
    }

    /**
     * Returns options for a specific choice
     *
     * @param int $choiceid the choice instance id
     * @return array of options details
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choice_options($choiceid) {
        global $USER;
        $warnings = array();
        $params = self::validate_parameters(self::mod_choice_get_choice_options_parameters(), array('choiceid' => $choiceid));

        if (!$choice = choice_get_choice($params['choiceid'])) {
            throw new moodle_exception("invalidcoursemodule", "error");
        }
        list($course, $cm) = get_course_and_cm_from_instance($choice, 'choice');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/choice:choose', $context);

        $groupmode = groups_get_activity_groupmode($cm);
        $onlyactive = $choice->includeinactive ? false : true;
        $allresponses = choice_get_response_data($choice, $cm, $groupmode, $onlyactive);

        $timenow = time();
        $choiceopen = true;
        $showpreview = false;

        if ($choice->timeclose != 0) {
            if ($choice->timeopen > $timenow) {
                $choiceopen = false;
                $warnings[1] = get_string("notopenyet", "choice", userdate($choice->timeopen));
                if ($choice->showpreview) {
                    $warnings[2] = get_string('previewonly', 'choice', userdate($choice->timeopen));
                    $showpreview = true;
                }
            }
            if ($timenow > $choice->timeclose) {
                $choiceopen = false;
                $warnings[3] = get_string("expired", "choice", userdate($choice->timeclose));
            }
        }
        $optionsarray = array();

        if ($choiceopen or $showpreview) {

            $options = choice_prepare_options($choice, $USER, $cm, $allresponses);

            foreach ($options['options'] as $option) {
                $optionarr = array();
                $optionarr['id']            = $option->attributes->value;
                $optionarr['text']          = $option->text;
                $optionarr['maxanswers']    = $option->maxanswers;
                $optionarr['displaylayout'] = $option->displaylayout;
                $optionarr['countanswers']  = $option->countanswers;
                foreach (array('checked', 'disabled') as $field) {
                    if (property_exists($option->attributes, $field) and $option->attributes->$field == 1) {
                        $optionarr[$field] = 1;
                    } else {
                        $optionarr[$field] = 0;
                    }
                }
                // When showpreview is active, we show options as disabled.
                if ($showpreview or ($optionarr['checked'] == 1 and !$choice->allowupdate)) {
                    $optionarr['disabled'] = 1;
                }
                $optionsarray[] = $optionarr;
            }
        }
        foreach ($warnings as $key => $message) {
                    $warnings[$key] = array(
                        'item' => 'choice',
                        'itemid' => $cm->id,
                        'warningcode' => $key,
                        'message' => $message
                    );
        }
        return array(
                     'options' => $optionsarray,
                     'warnings' => $warnings
        );
    }

    /**
     * Describes the mod_choice_get_choice_results return value.
     *
     * @return external_multiple_structure
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choice_options_returns() {
        return new external_single_structure(
            array(
                'options' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'option id'),
                            'text' => new external_value(PARAM_TEXT, 'text of the choice'),
                            'maxanswers' => new external_value(PARAM_INT, 'maximum number of answers'),
                            'displaylayout' => new external_value(PARAM_BOOL, 'true for orizontal, otherwise vertical'),
                            'countanswers' => new external_value(PARAM_INT, 'number of answers'),
                            'checked' => new external_value(PARAM_BOOL, 'we already answered'),
                            'disabled' => new external_value(PARAM_BOOL, 'option disabled'),
                            )
                    ), 'Options'
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for submit_choice_response.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_choice_submit_choice_response_parameters() {
        return new external_function_parameters (
                       array(
                           'choiceid' => new external_value(PARAM_INT, 'choice instance id'),
                           'responses' => new external_multiple_structure(
                               new external_value(PARAM_INT, 'answer id'),
                               'Array of response ids'
                           ),
                       )
                   );
    }

    /**
     * Submit choice responses
     *
     * @param int $choiceid the choice instance id
     * @param array $responses ids
     * @return array $answers ids
     * @since Moodle 3.0
     */
    public static function mod_choice_submit_choice_response($choiceid, $responses) {
        global $USER;

        $warnings = array();
        $params = self::validate_parameters(self::mod_choice_submit_choice_response_parameters(), array(
                                                                                         'choiceid' => $choiceid,
                                                                                         'responses' => $responses
                                                                                        ));
        if (!$choice = choice_get_choice($params['choiceid'])) {
            throw new moodle_exception("invalidcoursemodule", "error");
        }
        list($course, $cm) = get_course_and_cm_from_instance($choice, 'choice');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/choice:choose', $context);

        $timenow = time();
        if ($choice->timeclose != 0) {
            if ($choice->timeopen > $timenow) {
                throw new moodle_exception("notopenyet", "choice", '', userdate($choice->timeopen));
            } else if ($timenow > $choice->timeclose) {
                throw new moodle_exception("expired", "choice", '', userdate($choice->timeclose));
            }
        }
        if (!choice_get_my_choice_response($choice) or $choice->allowupdate) {
            // When a single response is given, we convert the array to a simple variable
            // in order to avoid choice_user_submit_response to check with allowmultiple even
            // for a single response.
            if (count($params['responses']) == 1) {
                $params['responses'] = reset($params['responses']);
            }
            choice_user_submit_response($params['responses'], $choice, $USER->id, $course, $cm);
        } else {
            throw new moodle_exception('missingrequiredcapability', 'webservice', '', 'allowupdate');
        }
        $answers = choice_get_my_choice_response($choice);

        return array(
                     'answers' => $answers,
                     'warnings' => $warnings
               );
    }

    /**
     * Describes the submit_choice_response return value.
     *
     * @return external_multiple_structure
     * @since Moodle 3.0
     */
    public static function mod_choice_submit_choice_response_returns() {
        return new external_single_structure(
            array(
                'answers' => new external_multiple_structure(
                     new external_single_structure(
                         array(
                             'id'           => new external_value(PARAM_INT, 'answer id'),
                             'choiceid'     => new external_value(PARAM_INT, 'choiceid'),
                             'userid'       => new external_value(PARAM_INT, 'user id'),
                             'optionid'     => new external_value(PARAM_INT, 'optionid'),
                             'timemodified' => new external_value(PARAM_INT, 'time of last modification')
                         ), 'Answers'
                     )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

        /**
     * Describes the parameters for mod_choice_get_choices_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choices_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'),
                    'Array of course ids', VALUE_DEFAULT, array()
                ),
            )
        );
    }

    /**
     * Returns a list of choices in a provided list of courses,
     * if no list is provided all choices that the user can view will be returned.
     *
     * @param array $courseids the course ids
     * @return array of choices details
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choices_by_courses($courseids = array()) {
        global $CFG;
        $params = self::validate_parameters(self::mod_choice_get_choices_by_courses_parameters(), array('courseids' => $courseids));
        $warnings = array();
        if (!empty($params['courseids'])) {
            $courses = array();
            $courseids = $params['courseids'];
        } else {
            $courses = enrol_get_my_courses();
            $courseids = array_keys($courses);
        }
        // Array to store the choices to return.
        $arrchoices = array();
        // Ensure there are courseids to loop through.
        if (!empty($courseids)) {
            // Array of the courses we are going to retrieve the choices from.
            $arraycourses = array();
            // Go through the courseids.
            foreach ($courseids as $cid) {
                // Check the user can function in this context.
                try {
                    $context = context_course::instance($cid);
                    self::validate_context($context);
                    // Check if this course was already loaded (by enrol_get_my_courses).
                    if (!isset($courses[$cid])) {
                        $courses[$cid] = get_course($cid);
                    }
                    $arraycourses[$cid] = $courses[$cid];
                } catch (Exception $e) {
                    $warnings[] = array(
                        'item' => 'course',
                        'itemid' => $cid,
                        'warningcode' => '1',
                        'message' => 'No access rights in course context '.$e->getMessage()
                    );
                }
            }
            // Get the choices in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $choices = get_all_instances_in_courses("choice", $arraycourses);
            foreach ($choices as $choice) {

                $choicecontext = context_module::instance($choice->coursemodule);
                // Entry to return.
                $choicedetails = array();
                // First, we return information that any user can see in the web interface.
                $choicedetails['id'] = $choice->id;
                $choicedetails['coursemodule'] = $choice->coursemodule;
                $choicedetails['course'] = $choice->course;
                $choicedetails['name']  = $choice->name;
                // Format intro.
                list($choicedetails['intro'], $choicedetails['introformat']) =
                    external_format_text($choice->intro, $choice->introformat,
                                            $choicecontext->id, 'mod_choice', 'intro', null);
                if (has_capability('mod/choice:choose', $choicecontext)) {
                    $choicedetails['publish']  = $choice->publish;
                    $choicedetails['showresults']  = $choice->showresults;
                    $choicedetails['showpreview']  = $choice->showpreview;
                }
                    $choicedetails['timeopen']  = $choice->timeopen;
                    $choicedetails['timeclose']  = $choice->timeclose;
                    $choicedetails['display']  = $choice->display;
                    $choicedetails['allowupdate']  = $choice->allowupdate;
                    $choicedetails['allowmultiple']  = $choice->allowmultiple;
                    $choicedetails['limitanswers']  = $choice->limitanswers;
                    $choicedetails['showunanswered']  = $choice->showunanswered;
                    $choicedetails['includeinactive']  = $choice->includeinactive;

                if (has_capability('moodle/course:manageactivities', $choicecontext)) {
                    $choicedetails['timemodified']  = $choice->timemodified;
                    $choicedetails['completionsubmit']  = $choice->completionsubmit;
                    $choicedetails['section']  = $choice->section;
                    $choicedetails['visible']  = $choice->visible;
                    $choicedetails['groupmode']  = $choice->groupmode;
                    $choicedetails['groupingid']  = $choice->groupingid;
                }
                $arrchoices[] = $choicedetails;
            }
        }
        $result = array();
        $result['choices'] = $arrchoices;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_choice_get_choices_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_choice_get_choices_by_courses_returns() {
        return new external_single_structure(
            array(
                'choices' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'choice instance id'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module id'),
                            'course' => new external_value(PARAM_TEXT, 'Course id'),
                            'name' => new external_value(PARAM_TEXT, 'Choice name'),
                            'intro' => new external_value(PARAM_RAW, 'The Choice intro'),
                            'introformat' => new external_format_value('intro'),
                            'publish' => new external_value(PARAM_BOOL, 'Is puplished', VALUE_OPTIONAL),
                            'showresults' => new external_value(PARAM_INT, '0 never, 1 after answer, 2 after close, 3 always',
                                                                VALUE_OPTIONAL),
                            'display' => new external_value(PARAM_BOOL, 'display (vertical, orizontal)', VALUE_OPTIONAL),
                            'allowupdate' => new external_value(PARAM_BOOL, 'allow update', VALUE_OPTIONAL),
                            'allowmultiple' => new external_value(PARAM_BOOL, 'allow multiple choices', VALUE_OPTIONAL),
                            'showunanswered' => new external_value(PARAM_BOOL, 'show users who not unswered yet', VALUE_OPTIONAL),
                            'includeinactive' => new external_value(PARAM_BOOL, 'include inactive users', VALUE_OPTIONAL),
                            'limitanswers' => new external_value(PARAM_BOOL, 'limit unswers', VALUE_OPTIONAL),
                            'timeopen' => new external_value(PARAM_RAW, 'date/time of opening validity', VALUE_OPTIONAL),
                            'timeclose' => new external_value(PARAM_RAW, 'date/time of closing validity', VALUE_OPTIONAL),
                            'showpreview' => new external_value(PARAM_BOOL, 'show preview before timeopen', VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_RAW, 'time of last modification', VALUE_OPTIONAL),
                            'completionsubmit' => new external_value(PARAM_BOOL, 'completion submit', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'course section id', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_BOOL, 'visible', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'group mode', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'group id', VALUE_OPTIONAL),
                        ), 'Choices'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for mark_course_self_completed.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function core_completion_mark_course_self_completed_parameters() {
        return new external_function_parameters (
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID')
            )
        );
    }

    /**
     * Update the course completion status for the current user (if course self-completion is enabled).
     *
     * @param  int $courseid    Course id
     * @return array            Result and possible warnings
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function core_completion_mark_course_self_completed($courseid) {
        global $USER, $CFG;
        require_once("$CFG->libdir/completionlib.php");

        $warnings = array();
        $params = self::validate_parameters(self::core_completion_mark_course_self_completed_parameters(),
                                            array('courseid' => $courseid));

        $course = get_course($params['courseid']);
        $context = context_course::instance($course->id);
        self::validate_context($context);

        // Set up completion object and check it is enabled.
        $completion = new completion_info($course);
        if (!$completion->is_enabled()) {
            throw new moodle_exception('completionnotenabled', 'completion');
        }

        if (!$completion->is_tracked_user($USER->id)) {
            throw new moodle_exception('nottracked', 'completion');
        }

        $completion = $completion->get_completion($USER->id, COMPLETION_CRITERIA_TYPE_SELF);

        // Self completion criteria not enabled.
        if (!$completion) {
            throw new moodle_exception('noselfcompletioncriteria', 'completion');
        }

        // Check if the user has already marked himself as complete.
        if ($completion->is_complete()) {
            throw new moodle_exception('useralreadymarkedcomplete', 'completion');
        }

        // Mark the course complete.
        $completion->mark_complete();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mark_course_self_completed return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function core_completion_mark_course_self_completed_returns() {

        return new external_single_structure(
            array(
                'status'    => new external_value(PARAM_BOOL, 'status, true if success'),
                'warnings'  => new external_warnings(),
            )
        );
    }

}