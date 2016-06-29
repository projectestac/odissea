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
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function core_course_search_courses_parameters() {
        return new external_function_parameters(
            array(
                'criterianame'  => new external_value(PARAM_ALPHA, 'criteria name
                                                        (search, modulelist (only admins), blocklist (only admins), tagid)'),
                'criteriavalue' => new external_value(PARAM_RAW, 'criteria value'),
                'page'          => new external_value(PARAM_INT, 'page number (0 based)', VALUE_DEFAULT, 0),
                'perpage'       => new external_value(PARAM_INT, 'items per page', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Search courses following the specified criteria.
     *
     * @param string $criterianame  Criteria name (search, modulelist (only admins), blocklist (only admins), tagid)
     * @param string $criteriavalue Criteria value
     * @param int $page             Page number (for pagination)
     * @param int $perpage          Items per page
     * @return array of course objects and warnings
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function core_course_search_courses($criterianame, $criteriavalue, $page=0, $perpage=0) {
        global $CFG;
        require_once($CFG->libdir . '/coursecatlib.php');

        $warnings = array();

        $parameters = array(
            'criterianame'  => $criterianame,
            'criteriavalue' => $criteriavalue,
            'page'          => $page,
            'perpage'       => $perpage
        );
        $params = self::validate_parameters(self::core_course_search_courses_parameters(), $parameters);

        $allowedcriterianames = array('search', 'modulelist', 'blocklist', 'tagid');
        if (!in_array($params['criterianame'], $allowedcriterianames)) {
            throw new invalid_parameter_exception('Invalid value for criterianame parameter (value: '.$params['criterianame'].'),' .
                'allowed values are: '.implode(',', $allowedcriterianames));
        }

        if ($params['criterianame'] == 'modulelist' or $params['criterianame'] == 'blocklist') {
            require_capability('moodle/site:config', context_system::instance());
        }

        $paramtype = array(
            'search' => PARAM_RAW,
            'modulelist' => PARAM_PLUGIN,
            'blocklist' => PARAM_INT,
            'tagid' => PARAM_INT
        );
        $params['criteriavalue'] = clean_param($params['criteriavalue'], $paramtype[$params['criterianame']]);

        // Prepare the search API options.
        $searchcriteria = array();
        $searchcriteria[$params['criterianame']] = $params['criteriavalue'];

        $options = array();
        if ($params['perpage'] != 0) {
            $offset = $params['page'] * $params['perpage'];
            $options = array('offset' => $offset, 'limit' => $params['perpage']);
        }

        // Search the courses.
        $courses = coursecat::search_courses($searchcriteria, $options);
        $totalcount = coursecat::search_courses_count($searchcriteria);

        $finalcourses = array();
        $categoriescache = array();

        foreach ($courses as $course) {

            $coursecontext = context_course::instance($course->id);

            // Category information.
            if (!isset($categoriescache[$course->category])) {
                $categoriescache[$course->category] = coursecat::get($course->category);
            }
            $category = $categoriescache[$course->category];

            // Retrieve course overfiew used files.
            $files = array();
            foreach ($course->get_course_overviewfiles() as $file) {
                $fileurl = moodle_url::make_webservice_pluginfile_url($file->get_contextid(), $file->get_component(),
                                                                        $file->get_filearea(), null, $file->get_filepath(),
                                                                        $file->get_filename())->out(false);
                $files[] = array(
                    'filename' => $file->get_filename(),
                    'fileurl' => $fileurl,
                    'filesize' => $file->get_filesize()
                );
            }

            // Retrieve the course contacts,
            // we need here the users fullname since if we are not enrolled can be difficult to obtain them via other Web Services.
            $coursecontacts = array();
            foreach ($course->get_course_contacts() as $contact) {
                 $coursecontacts[] = array(
                    'id' => $contact['user']->id,
                    'fullname' => $contact['username']
                );
            }

            // Allowed enrolment methods (maybe we can self-enrol).
            $enroltypes = array();
            $instances = enrol_get_instances($course->id, true);
            foreach ($instances as $instance) {
                $enroltypes[] = $instance->enrol;
            }

            // Format summary.
            list($summary, $summaryformat) =
                external_format_text($course->summary, $course->summaryformat, $coursecontext->id, 'course', 'summary', null);

            $coursereturns = array();
            $coursereturns['id']                = $course->id;
            $coursereturns['fullname']          = $course->get_formatted_fullname();
            $coursereturns['shortname']         = $course->get_formatted_shortname();
            $coursereturns['categoryid']        = $course->category;
            $coursereturns['categoryname']      = $category->name;
            $coursereturns['summary']           = $summary;
            $coursereturns['summaryformat']     = $summaryformat;
            $coursereturns['overviewfiles']     = $files;
            $coursereturns['contacts']          = $coursecontacts;
            $coursereturns['enrollmentmethods'] = $enroltypes;
            $finalcourses[] = $coursereturns;
        }

        return array(
            'total' => $totalcount,
            'courses' => $finalcourses,
            'warnings' => $warnings
        );
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function core_course_search_courses_returns() {

        return new external_single_structure(
            array(
                'total' => new external_value(PARAM_INT, 'total course count'),
                'courses' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'course id'),
                            'fullname' => new external_value(PARAM_TEXT, 'course full name'),
                            'shortname' => new external_value(PARAM_TEXT, 'course short name'),
                            'categoryid' => new external_value(PARAM_INT, 'category id'),
                            'categoryname' => new external_value(PARAM_TEXT, 'category name'),
                            'summary' => new external_value(PARAM_RAW, 'summary'),
                            'summaryformat' => new external_format_value('summary'),
                            'overviewfiles' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'filename' => new external_value(PARAM_FILE, 'overview file name'),
                                        'fileurl'  => new external_value(PARAM_URL, 'overview file url'),
                                        'filesize'  => new external_value(PARAM_INT, 'overview file size'),
                                    )
                                ),
                                'additional overview files attached to this course'
                            ),
                            'contacts' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'id' => new external_value(PARAM_INT, 'contact user id'),
                                        'fullname'  => new external_value(PARAM_NOTAGS, 'contact user fullname'),
                                    )
                                ),
                                'contact users'
                            ),
                            'enrollmentmethods' => new external_multiple_structure(
                                new external_value(PARAM_PLUGIN, 'enrollment method'),
                                'enrollment methods list'
                            ),
                        )
                    ), 'course'
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
    public static function enrol_self_enrol_user_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Id of the course'),
                'password' => new external_value(PARAM_RAW, 'Enrolment key', VALUE_DEFAULT, ''),
                'instanceid' => new external_value(PARAM_INT, 'Instance id of self enrolment plugin.', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Self enrol the current user in the given course.
     *
     * @param int $courseid id of course
     * @param string $password enrolment key
     * @param int $instanceid instance id of self enrolment plugin
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function enrol_self_enrol_user($courseid, $password = '', $instanceid = 0) {
        global $CFG;

        require_once($CFG->libdir . '/enrollib.php');

        $params = self::validate_parameters(self::enrol_self_enrol_user_parameters(),
                                            array(
                                                'courseid' => $courseid,
                                                'password' => $password,
                                                'instanceid' => $instanceid
                                            ));

        $warnings = array();

        $course = get_course($params['courseid']);
        $context = context_course::instance($course->id);
        // Note that we can't use validate_context because the user is not enrolled in the course.
        require_login(null, false, null, false, true);

        if (!$course->visible and !has_capability('moodle/course:viewhiddencourses', $context)) {
            throw new moodle_exception('coursehidden');
        }

        // Retrieve the self enrolment plugin.
        $enrol = enrol_get_plugin('self');
        if (empty($enrol)) {
            throw new moodle_exception('canntenrol', 'enrol_self');
        }

        // We can expect multiple self-enrolment instances.
        $instances = array();
        $enrolinstances = enrol_get_instances($course->id, true);
        foreach ($enrolinstances as $courseenrolinstance) {
            if ($courseenrolinstance->enrol == "self") {
                // Instance specified.
                if (!empty($params['instanceid'])) {
                    if ($courseenrolinstance->id == $params['instanceid']) {
                        $instances[] = $courseenrolinstance;
                        break;
                    }
                } else {
                    $instances[] = $courseenrolinstance;
                }

            }
        }
        if (empty($instances)) {
            throw new moodle_exception('canntenrol', 'enrol_self');
        }

        // Try to enrol the user in the instance/s.
        $enrolled = false;
        foreach ($instances as $instance) {
            $enrolstatus = $enrol->can_self_enrol($instance);
            if ($enrolstatus === true) {
                if ($instance->password and $params['password'] !== $instance->password) {

                    // Check if we are using group enrolment keys.
                    if ($instance->customint1) {
                        require_once($CFG->dirroot . "/enrol/self/locallib.php");

                        if (!enrol_self_check_group_enrolment_key($course->id, $params['password'])) {
                            $warnings[] = array(
                                'item' => 'instance',
                                'itemid' => $instance->id,
                                'warningcode' => '2',
                                'message' => get_string('passwordinvalid', 'enrol_self')
                            );
                            continue;
                        }
                    } else {
                        if ($enrol->get_config('showhint')) {
                            $hint = core_text::substr($instance->password, 0, 1);
                            $warnings[] = array(
                                'item' => 'instance',
                                'itemid' => $instance->id,
                                'warningcode' => '3',
                                'message' => s(get_string('passwordinvalidhint', 'enrol_self', $hint)) // message is PARAM_TEXT.
                            );
                            continue;
                        } else {
                            $warnings[] = array(
                                'item' => 'instance',
                                'itemid' => $instance->id,
                                'warningcode' => '4',
                                'message' => get_string('passwordinvalid', 'enrol_self')
                            );
                            continue;
                        }
                    }
                }

                // Do the enrolment.
                $data = array('enrolpassword' => $params['password']);
                $enrol->enrol_self($instance, (object) $data);
                $enrolled = true;
                break;
            } else {
                $warnings[] = array(
                    'item' => 'instance',
                    'itemid' => $instance->id,
                    'warningcode' => '1',
                    'message' => $enrolstatus
                );
            }
        }

        $result = array();
        $result['status'] = $enrolled;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function enrol_self_enrol_user_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if the user is enrolled, false otherwise'),
                'warnings' => new external_warnings()
            )
        );
    }


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
            $sitenotes = self::create_note_list(0, context_system::instance(), $params['userid'], NOTES_STATE_SITE);
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
        $fullnamecap = has_capability('moodle/site:viewfullnames', $context);
        foreach ($results->options as $optionid => $option) {

            $userresponses = array();
            $numberofuser = 0;
            $percentageamount = 0;
            if (property_exists($option, 'user') and
                (has_capability('mod/choice:readresponses', $context) or choice_can_view_results($choice))) {
                $numberofuser = count($option->user);
                $percentageamount = ((float)$numberofuser / (float)$results->numberofuser) * 100.0;
                if ($choice->publish) {
                    foreach ($option->user as $userresponse) {
                        $response = array();
                        $response['userid'] = $userresponse->id;
                        $response['fullname'] = fullname($userresponse, $fullnamecap);
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
                               'text'             => format_string($option->text, true, array('context' => $context)),
                               'maxanswer'        => $option->maxanswer,
                               'userresponses'    => $userresponses,
                               'numberofuser'     => $numberofuser,
                               'percentageamount' => $percentageamount
                              );
        }

        $warnings = array();
        return array(
            'options' => $options,
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
                $optionarr['text']          = format_string($option->text, true, array('context' => $context));
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
                            'text' => new external_value(PARAM_RAW, 'text of the choice'),
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
        $params = self::validate_parameters(self::mod_choice_submit_choice_response_parameters(),
                                            array(
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
        if (!choice_get_my_response($choice) or $choice->allowupdate) {
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
        $answers = choice_get_my_response($choice);

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
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_forum_add_discussion_post_parameters() {
        return new external_function_parameters(
            array(
                'postid' => new external_value(PARAM_INT, 'the post id we are going to reply to
                                                (can be the initial discussion post'),
                'subject' => new external_value(PARAM_TEXT, 'new post subject'),
                'message' => new external_value(PARAM_RAW, 'new post message (only html format allowed)'),
                'options' => new external_multiple_structure (
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUM,
                                        'The allowed keys (value format) are:
                                        discussionsubscribe (bool); subscribe to the discussion?, default to true
                            '),
                            'value' => new external_value(PARAM_RAW, 'the value of the option,
                                                            this param is validated in the external function.'
                        )
                    )
                ), 'Options', VALUE_DEFAULT, array())
            )
        );
    }

    /**
     * Create new posts into an existing discussion.
     *
     * @param int $postid the post id we are going to reply to
     * @param string $subject new post subject
     * @param string $message new post message (only html format allowed)
     * @param array $options optional settings
     * @return array of warnings and the new post id
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_forum_add_discussion_post($postid, $subject, $message, $options = array()) {
        global $DB, $CFG, $USER;
        require_once($CFG->dirroot . "/mod/forum/lib.php");

        $params = self::validate_parameters(self::mod_forum_add_discussion_post_parameters(),
                                            array(
                                                'postid' => $postid,
                                                'subject' => $subject,
                                                'message' => $message,
                                                'options' => $options
                                            ));
        // Validate options.
        $options = array(
            'discussionsubscribe' => true
        );
        foreach ($params['options'] as $option) {
            $name = trim($option['name']);
            switch ($name) {
                case 'discussionsubscribe':
                    $value = clean_param($option['value'], PARAM_BOOL);
                    break;
                default:
                    throw new moodle_exception('errorinvalidparam', 'webservice', '', $name);
            }
            $options[$name] = $value;
        }

        $warnings = array();

        if (! $parent = forum_get_post_full($params['postid'])) {
            throw new moodle_exception('invalidparentpostid', 'forum');
        }

        if (! $discussion = $DB->get_record("forum_discussions", array("id" => $parent->discussion))) {
            throw new moodle_exception('notpartofdiscussion', 'forum');
        }

        // Request and permission validation.
        $forum = $DB->get_record('forum', array('id' => $discussion->forum), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($forum, 'forum');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        if (!forum_user_can_post($forum, $discussion, $USER, $cm, $course, $context)) {
            throw new moodle_exception('nopostforum', 'forum');
        }

        $thresholdwarning = forum_check_throttling($forum, $cm);
        forum_check_blocking_threshold($thresholdwarning);

        // Create the post.
        $post = new stdClass();
        $post->discussion = $discussion->id;
        $post->parent = $parent->id;
        $post->subject = $params['subject'];
        $post->message = $params['message'];
        $post->messageformat = FORMAT_HTML;   // Force formatting for now.
        $post->messagetrust = trusttext_trusted($context);
        $post->itemid = 0;

        if ($postid = forum_add_new_post($post, null)) {

            $post->id = $postid;

            // Trigger events and completion.
            $params = array(
                'context' => $context,
                'objectid' => $post->id,
                'other' => array(
                    'discussionid' => $discussion->id,
                    'forumid' => $forum->id,
                    'forumtype' => $forum->type,
                )
            );
            $event = \mod_forum\event\post_created::create($params);
            $event->add_record_snapshot('forum_posts', $post);
            $event->add_record_snapshot('forum_discussions', $discussion);
            $event->trigger();

            // Update completion state.
            $completion = new completion_info($course);
            if ($completion->is_enabled($cm) &&
                    ($forum->completionreplies || $forum->completionposts)) {
                $completion->update_state($cm, COMPLETION_COMPLETE);
            }

            $settings = new stdClass();
            $settings->discussionsubscribe = $options['discussionsubscribe'];
            forum_post_subscription($settings, $forum, $discussion);
        } else {
            throw new moodle_exception('couldnotadd', 'forum');
        }

        $result = array();
        $result['postid'] = $postid;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_forum_add_discussion_post_returns() {
        return new external_single_structure(
            array(
                'postid' => new external_value(PARAM_INT, 'new post id'),
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
    public static function mod_forum_add_discussion_parameters() {
        return new external_function_parameters(
            array(
                'forumid' => new external_value(PARAM_INT, 'forum instance id'),
                'subject' => new external_value(PARAM_TEXT, 'new discussion subject'),
                'message' => new external_value(PARAM_RAW, 'new discussion message (only html format allowed)'),
                'groupid' => new external_value(PARAM_INT, 'the user course group, default to 0', VALUE_DEFAULT, -1),
                'options' => new external_multiple_structure (
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUM,
                                        'The allowed keys (value format) are:
                                        discussionsubscribe (bool); subscribe to the discussion?, default to true
                            '),
                            'value' => new external_value(PARAM_RAW, 'the value of the option,
                                                            this param is validated in the external function.'
                        )
                    )
                ), 'Options', VALUE_DEFAULT, array())
            )
        );
    }

    /**
     * Add a new discussion into an existing forum.
     *
     * @param int $forumid the forum instance id
     * @param string $subject new discussion subject
     * @param string $message new discussion message (only html format allowed)
     * @param int $groupid the user course group
     * @param array $options optional settings
     * @return array of warnings and the new discussion id
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_forum_add_discussion($forumid, $subject, $message, $groupid = -1, $options = array()) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/forum/lib.php");

        $params = self::validate_parameters(self::mod_forum_add_discussion_parameters(),
                                            array(
                                                'forumid' => $forumid,
                                                'subject' => $subject,
                                                'message' => $message,
                                                'groupid' => $groupid,
                                                'options' => $options
                                            ));
        // Validate options.
        $options = array(
            'discussionsubscribe' => true
        );
        foreach ($params['options'] as $option) {
            $name = trim($option['name']);
            switch ($name) {
                case 'discussionsubscribe':
                    $value = clean_param($option['value'], PARAM_BOOL);
                    break;
                default:
                    throw new moodle_exception('errorinvalidparam', 'webservice', '', $name);
            }
            $options[$name] = $value;
        }

        $warnings = array();

        // Request and permission validation.
        $forum = $DB->get_record('forum', array('id' => $params['forumid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($forum, 'forum');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Normalize group.
        if (!groups_get_activity_groupmode($cm)) {
            // Groups not supported, force to -1.
            $groupid = -1;
        } else {
            // Check if we receive the default or and empty value for groupid,
            // in this case, get the group for the user in the activity.
            if ($groupid === -1 or empty($params['groupid'])) {
                $groupid = groups_get_activity_group($cm);
            } else {
                // Here we rely in the group passed, forum_user_can_post_discussion will validate the group.
                $groupid = $params['groupid'];
            }
        }

        if (!forum_user_can_post_discussion($forum, $groupid, -1, $cm, $context)) {
            throw new moodle_exception('cannotcreatediscussion', 'forum');
        }

        $thresholdwarning = forum_check_throttling($forum, $cm);
        forum_check_blocking_threshold($thresholdwarning);

        // Create the discussion.
        $discussion = new stdClass();
        $discussion->course = $course->id;
        $discussion->forum = $forum->id;
        $discussion->message = $params['message'];
        $discussion->messageformat = FORMAT_HTML;   // Force formatting for now.
        $discussion->messagetrust = trusttext_trusted($context);
        $discussion->itemid = 0;
        $discussion->groupid = $groupid;
        $discussion->mailnow = 0;
        $discussion->subject = $params['subject'];
        $discussion->name = $discussion->subject;
        $discussion->timestart = 0;
        $discussion->timeend = 0;

        if ($discussionid = forum_add_discussion($discussion)) {

            $discussion->id = $discussionid;

            // Trigger events and completion.

            $params = array(
                'context' => $context,
                'objectid' => $discussion->id,
                'other' => array(
                    'forumid' => $forum->id,
                )
            );
            $event = \mod_forum\event\discussion_created::create($params);
            $event->add_record_snapshot('forum_discussions', $discussion);
            $event->trigger();

            $completion = new completion_info($course);
            if ($completion->is_enabled($cm) &&
                    ($forum->completiondiscussions || $forum->completionposts)) {
                $completion->update_state($cm, COMPLETION_COMPLETE);
            }

            $settings = new stdClass();
            $settings->discussionsubscribe = $options['discussionsubscribe'];
            forum_post_subscription($settings, $forum, $discussion);
        } else {
            throw new moodle_exception('couldnotadd', 'forum');
        }

        $result = array();
        $result['discussionid'] = $discussionid;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_forum_add_discussion_returns() {
        return new external_single_structure(
            array(
                'discussionid' => new external_value(PARAM_INT, 'new discussion id'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for get_forum.
     *
     * @return external_external_function_parameters
     * @since Moodle 2.5
     */
    public static function mod_forum_get_forums_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(new external_value(PARAM_INT, 'course ID',
                        '', VALUE_REQUIRED, '', NULL_NOT_ALLOWED), 'Array of Course IDs', VALUE_DEFAULT, array()),
            )
        );
    }

    /**
     * Returns a list of forums in a provided list of courses,
     * if no list is provided all forums that the user can view
     * will be returned.
     *
     * @param array $courseids the course ids
     * @return array the forum details
     * @since Moodle 2.5
     */
    public static function mod_forum_get_forums_by_courses($courseids = array()) {
        global $CFG, $DB, $USER;

        require_once($CFG->dirroot . "/mod/forum/lib.php");

        $params = self::validate_parameters(self::mod_forum_get_forums_by_courses_parameters(), array('courseids' => $courseids));

        if (empty($params['courseids'])) {
            // Get all the courses the user can view.
            $courseids = array_keys(enrol_get_my_courses());
        } else {
            $courseids = $params['courseids'];
        }

        // Array to store the forums to return.
        $arrforums = array();

        // Ensure there are courseids to loop through.
        if (!empty($courseids)) {
            // Go through the courseids and return the forums.
            foreach ($courseids as $cid) {
                // Get the course context.
                $context = context_course::instance($cid);
                // Check the user can function in this context.
                self::validate_context($context);
                // Get the forums in this course.
                if ($forums = $DB->get_records('forum', array('course' => $cid))) {
                    // Get the modinfo for the course.
                    $modinfo = get_fast_modinfo($cid);
                    // Get the forum instances.
                    $foruminstances = $modinfo->get_instances_of('forum');
                    // Loop through the forums returned by modinfo.
                    foreach ($foruminstances as $forumid => $cm) {
                        // If it is not visible or present in the forums get_records call, continue.
                        if (!$cm->uservisible || !isset($forums[$forumid])) {
                            continue;
                        }
                        // Set the forum object.
                        $forum = $forums[$forumid];
                        // Get the module context.
                        $context = context_module::instance($cm->id);
                        // Check they have the view forum capability.
                        require_capability('mod/forum:viewdiscussion', $context);
                        // Format the intro before being returning using the format setting.
                        list($forum->intro, $forum->introformat) = external_format_text($forum->intro, $forum->introformat,
                            $context->id, 'mod_forum', 'intro', 0);
                        // Add the course module id to the object, this information is useful.
                        $forum->cmid = $cm->id;
                        $forum->cancreatediscussions = forum_user_can_post_discussion($forum, null, -1, $cm, $context);

                        // Discussions count. This function does static request cache.
                        $forum->numdiscussions = forum_count_discussions($forum, $cm, $modinfo->get_course());

                        // Add the forum to the array to return.
                        $arrforums[$forum->id] = (array) $forum;
                    }
                }
            }
        }

        return $arrforums;
    }

    /**
     * Describes the get_forum return value.
     *
     * @return external_single_structure
     * @since Moodle 2.5
     */
     public static function mod_forum_get_forums_by_courses_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, 'Forum id'),
                    'course' => new external_value(PARAM_TEXT, 'Course id'),
                    'type' => new external_value(PARAM_TEXT, 'The forum type'),
                    'name' => new external_value(PARAM_TEXT, 'Forum name'),
                    'intro' => new external_value(PARAM_RAW, 'The forum intro'),
                    'introformat' => new external_format_value('intro'),
                    'assessed' => new external_value(PARAM_INT, 'Aggregate type'),
                    'assesstimestart' => new external_value(PARAM_INT, 'Assess start time'),
                    'assesstimefinish' => new external_value(PARAM_INT, 'Assess finish time'),
                    'scale' => new external_value(PARAM_INT, 'Scale'),
                    'maxbytes' => new external_value(PARAM_INT, 'Maximum attachment size'),
                    'maxattachments' => new external_value(PARAM_INT, 'Maximum number of attachments'),
                    'forcesubscribe' => new external_value(PARAM_INT, 'Force users to subscribe'),
                    'trackingtype' => new external_value(PARAM_INT, 'Subscription mode'),
                    'rsstype' => new external_value(PARAM_INT, 'RSS feed for this activity'),
                    'rssarticles' => new external_value(PARAM_INT, 'Number of RSS recent articles'),
                    'timemodified' => new external_value(PARAM_INT, 'Time modified'),
                    'warnafter' => new external_value(PARAM_INT, 'Post threshold for warning'),
                    'blockafter' => new external_value(PARAM_INT, 'Post threshold for blocking'),
                    'blockperiod' => new external_value(PARAM_INT, 'Time period for blocking'),
                    'completiondiscussions' => new external_value(PARAM_INT, 'Student must create discussions'),
                    'completionreplies' => new external_value(PARAM_INT, 'Student must post replies'),
                    'completionposts' => new external_value(PARAM_INT, 'Student must post discussions or replies'),
                    'cmid' => new external_value(PARAM_INT, 'Course module id'),
                    'numdiscussions' => new external_value(PARAM_INT, 'Number of discussions in the forum', VALUE_OPTIONAL),
                    'cancreatediscussions' => new external_value(PARAM_BOOL, 'If the user can create discussions', VALUE_OPTIONAL),
                ), 'forum'
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function core_group_get_activity_groupmode_parameters() {
        return new external_function_parameters(
            array(
                'cmid' => new external_value(PARAM_INT, 'course module id')
            )
        );
    }

    /**
     * Returns effective groupmode used in a given activity.
     *
     * @throws moodle_exception
     * @param int $cmid course module id.
     * @return array containing the group mode and possible warnings.
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function core_group_get_activity_groupmode($cmid) {
        global $USER;

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();

        $params = array(
            'cmid' => $cmid
        );
        $params = self::validate_parameters(self::core_group_get_activity_groupmode_parameters(), $params);
        $cmid = $params['cmid'];

        $cm = get_coursemodule_from_id(null, $cmid, 0, false, MUST_EXIST);

        // Security checks.
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $groupmode = groups_get_activity_groupmode($cm);

        $results = array(
            'groupmode' => $groupmode,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value.
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function core_group_get_activity_groupmode_returns() {
        return new external_single_structure(
            array(
                'groupmode' => new external_value(PARAM_INT, 'group mode:
                                                    0 for no groups, 1 for separate groups, 2 for visible groups'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Create group return value description.
     *
     * @return external_single_structure The group description
     */
    public static function core_group_group_description() {
        return new external_single_structure(
            array(
                'id' => new external_value(PARAM_INT, 'group record id'),
                'name' => new external_value(PARAM_TEXT, 'multilang compatible name, course unique'),
                'description' => new external_value(PARAM_RAW, 'group description text'),
                'descriptionformat' => new external_format_value('description'),
                'idnumber' => new external_value(PARAM_RAW, 'id number'),
                'courseid' => new external_value(PARAM_INT, 'course id', VALUE_OPTIONAL),
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function core_group_get_activity_allowed_groups_parameters() {
        return new external_function_parameters(
            array(
                'cmid' => new external_value(PARAM_INT, 'course module id'),
                'userid' => new external_value(PARAM_INT, 'id of user, empty for current user', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Gets a list of groups that the user is allowed to access within the specified activity.
     *
     * @throws moodle_exception
     * @param int $cmid course module id
     * @param int $userid id of user.
     * @return array of group objects (id, name, description, format) and possible warnings.
     * @since Moodle 3.0
     */
    public static function core_group_get_activity_allowed_groups($cmid, $userid = 0) {
        global $USER;

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();

        $params = array(
            'cmid' => $cmid,
            'userid' => $userid
        );
        $params = self::validate_parameters(self::core_group_get_activity_allowed_groups_parameters(), $params);
        $cmid = $params['cmid'];
        $userid = $params['userid'];

        $cm = get_coursemodule_from_id(null, $cmid, 0, false, MUST_EXIST);

        // Security checks.
        $context = context_module::instance($cm->id);
        $coursecontext = context_course::instance($cm->course);
        self::validate_context($context);

        if (empty($userid)) {
            $userid = $USER->id;
        }

        $user = core_user::get_user($userid, 'id, deleted', MUST_EXIST);
        if ($user->deleted) {
            throw new moodle_exception('userdeleted');
        }
        if (isguestuser($user)) {
            throw new moodle_exception('invaliduserid');
        }

         // Check if we have permissions for retrieve the information.
        if ($user->id != $USER->id) {
            if (!has_capability('moodle/course:managegroups', $context)) {
                throw new moodle_exception('accessdenied', 'admin');
            }

            // Validate if the user is enrolled in the course.
            if (!is_enrolled($coursecontext, $user->id)) {
                // We return a warning because the function does not fail for not enrolled users.
                $warning = array();
                $warning['item'] = 'course';
                $warning['itemid'] = $cm->course;
                $warning['warningcode'] = '1';
                $warning['message'] = "User $user->id is not enrolled in course $cm->course";
                $warnings[] = $warning;
            }
        }

        $usergroups = array();
        if (empty($warnings)) {
            $groups = groups_get_activity_allowed_groups($cm, $user->id);

            foreach ($groups as $group) {
                list($group->description, $group->descriptionformat) =
                    external_format_text($group->description, $group->descriptionformat,
                            $coursecontext->id, 'group', 'description', $group->id);
                $group->courseid = $cm->course;
                $usergroups[] = $group;
            }
        }

        $results = array(
            'groups' => $usergroups,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value.
     *
     * @return external_description A single structure containing groups and possible warnings.
     * @since Moodle 3.0
     */
    public static function core_group_get_activity_allowed_groups_returns() {
        return new external_single_structure(
            array(
                'groups' => new external_multiple_structure(self::core_group_group_description()),
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
    public static function mod_lti_get_tool_launch_data_parameters() {
        return new external_function_parameters(
            array(
                'toolid' => new external_value(PARAM_INT, 'external tool instance id')
            )
        );
    }

    /**
     * Return the launch data for a given external tool.
     *
     * @param int $toolid the external tool instance id
     * @return array of warnings and launch data
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_lti_get_tool_launch_data($toolid) {
        global $DB, $CFG;
        require_once($CFG->dirroot . '/mod/lti/lib.php');

        $params = self::validate_parameters(self::mod_lti_get_tool_launch_data_parameters(),
                                            array(
                                                'toolid' => $toolid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $lti = $DB->get_record('lti', array('id' => $params['toolid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($lti, 'lti');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        require_capability('mod/lti:view', $context);

        $lti->cmid = $cm->id;
        list($endpoint, $parms) = lti_get_launch_data($lti);

        $parameters = array();
        foreach ($parms as $name => $value) {
            $parameters[] = array(
                'name' => $name,
                'value' => $value
            );
        }

        $result = array();
        $result['endpoint'] = $endpoint;
        $result['parameters'] = $parameters;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_lti_get_tool_launch_data_returns() {
        return new external_single_structure(
            array(
                'endpoint' => new external_value(PARAM_RAW, 'Endpoint URL'), // Using PARAM_RAW as is defined in the module.
                'parameters' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_NOTAGS, 'Parameter name'),
                            'value' => new external_value(PARAM_RAW, 'Parameter value')
                        )
                    )
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for get_ltis_by_courses.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_lti_get_ltis_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'), 'Array of course ids', VALUE_DEFAULT, array()
                ),
            )
        );
    }

    /**
     * Returns a list of external tools in a provided list of courses,
     * if no list is provided all external tools that the user can view will be returned.
     *
     * @param array $courseids the course ids
     * @return array the lti details
     * @since Moodle 3.0
     */
    public static function mod_lti_get_ltis_by_courses($courseids = array()) {
        global $CFG;

        $returnedltis = array();
        $warnings = array();

        $params = self::validate_parameters(self::mod_lti_get_ltis_by_courses_parameters(), array('courseids' => $courseids));

        if (empty($params['courseids'])) {
            $params['courseids'] = array_keys(enrol_get_my_courses());
        }

        // Ensure there are courseids to loop through.
        if (!empty($params['courseids'])) {

            list($courses, $warnings) = external_util::validate_courses($params['courseids']);

            // Get the ltis in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $ltis = get_all_instances_in_courses("lti", $courses);

            foreach ($ltis as $lti) {

                $context = context_module::instance($lti->coursemodule);

                // Entry to return.
                $module = array();

                // First, we return information that any user can see in (or can deduce from) the web interface.
                $module['id'] = $lti->id;
                $module['coursemodule'] = $lti->coursemodule;
                $module['course'] = $lti->course;
                $module['name']  = external_format_string($lti->name, $context->id);

                $viewablefields = [];
                if (has_capability('mod/lti:view', $context)) {
                    list($module['intro'], $module['introformat']) =
                        external_format_text($lti->intro, $lti->introformat, $context->id, 'mod_lti', 'intro', $lti->id);

                    $viewablefields = array('launchcontainer', 'showtitlelaunch', 'showdescriptionlaunch', 'icon', 'secureicon');
                }

                // Check additional permissions for returning optional private settings.
                if (has_capability('moodle/course:manageactivities', $context)) {

                    $additionalfields = array('timecreated', 'timemodified', 'typeid', 'toolurl', 'securetoolurl',
                        'instructorchoicesendname', 'instructorchoicesendemailaddr', 'instructorchoiceallowroster',
                        'instructorchoiceallowsetting', 'instructorcustomparameters', 'instructorchoiceacceptgrades', 'grade',
                        'resourcekey', 'password', 'debuglaunch', 'servicesalt', 'visible', 'groupmode', 'groupingid');
                    $viewablefields = array_merge($viewablefields, $additionalfields);

                }

                foreach ($viewablefields as $field) {
                    $module[$field] = $lti->{$field};
                }

                $returnedltis[] = $module;
            }
        }

        $result = array();
        $result['ltis'] = $returnedltis;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_ltis_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_lti_get_ltis_by_courses_returns() {

        return new external_single_structure(
            array(
                'ltis' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'External tool id'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module id'),
                            'course' => new external_value(PARAM_INT, 'Course id'),
                            'name' => new external_value(PARAM_RAW, 'LTI name'),
                            'intro' => new external_value(PARAM_RAW, 'The LTI intro', VALUE_OPTIONAL),
                            'introformat' => new external_format_value('intro', VALUE_OPTIONAL),
                            'timecreated' => new external_value(PARAM_INT, 'Time of creation', VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_INT, 'Time of last modification', VALUE_OPTIONAL),
                            'typeid' => new external_value(PARAM_INT, 'Type id', VALUE_OPTIONAL),
                            'toolurl' => new external_value(PARAM_URL, 'Tool url', VALUE_OPTIONAL),
                            'securetoolurl' => new external_value(PARAM_RAW, 'Secure tool url', VALUE_OPTIONAL),
                            'instructorchoicesendname' => new external_value(PARAM_TEXT, 'Instructor choice send name',
                                                                               VALUE_OPTIONAL),
                            'instructorchoicesendemailaddr' => new external_value(PARAM_INT, 'instructor choice send mail address',
                                                                                    VALUE_OPTIONAL),
                            'instructorchoiceallowroster' => new external_value(PARAM_INT, 'Instructor choice allow roster',
                                                                                VALUE_OPTIONAL),
                            'instructorchoiceallowsetting' => new external_value(PARAM_INT, 'Instructor choice allow setting',
                                                                                 VALUE_OPTIONAL),
                            'instructorcustomparameters' => new external_value(PARAM_RAW, 'instructor custom parameters',
                                                                                VALUE_OPTIONAL),
                            'instructorchoiceacceptgrades' => new external_value(PARAM_INT, 'instructor choice accept grades',
                                                                                    VALUE_OPTIONAL),
                            'grade' => new external_value(PARAM_INT, 'Enable grades', VALUE_OPTIONAL),
                            'launchcontainer' => new external_value(PARAM_INT, 'Launch container mode', VALUE_OPTIONAL),
                            'resourcekey' => new external_value(PARAM_RAW, 'Resource key', VALUE_OPTIONAL),
                            'password' => new external_value(PARAM_RAW, 'Shared secret', VALUE_OPTIONAL),
                            'debuglaunch' => new external_value(PARAM_INT, 'Debug launch', VALUE_OPTIONAL),
                            'showtitlelaunch' => new external_value(PARAM_INT, 'Show title launch', VALUE_OPTIONAL),
                            'showdescriptionlaunch' => new external_value(PARAM_INT, 'Show description launch', VALUE_OPTIONAL),
                            'servicesalt' => new external_value(PARAM_RAW, 'Service salt', VALUE_OPTIONAL),
                            'icon' => new external_value(PARAM_URL, 'Alternative icon URL', VALUE_OPTIONAL),
                            'secureicon' => new external_value(PARAM_URL, 'Secure icon URL', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'course section id', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_INT, 'visible', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'group mode', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'group id', VALUE_OPTIONAL),
                        ), 'Tool'
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
    public static function mod_lti_view_lti_parameters() {
        return new external_function_parameters(
            array(
                'ltiid' => new external_value(PARAM_INT, 'lti instance id')
            )
        );
    }

    /**
     * Trigger the course module viewed event and update the module completion status.
     *
     * @param int $ltiid the lti instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_lti_view_lti($ltiid) {
        global $DB;

        $params = self::validate_parameters(self::mod_lti_view_lti_parameters(),
                                            array(
                                                'ltiid' => $ltiid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $lti = $DB->get_record('lti', array('id' => $params['ltiid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($lti, 'lti');

        $context = context_module::instance($cm->id);
        self::validate_context($context);
        require_capability('mod/lti:view', $context);

        // Trigger course_module_viewed event and completion.
        mod_lti_view($lti, $course, $cm, $context);

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
    public static function mod_lti_view_lti_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
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

    /**
     * Describes the parameters for delete_choice_responses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_choice_delete_choice_responses_parameters() {
        return new external_function_parameters (
            array(
                'choiceid' => new external_value(PARAM_INT, 'choice instance id'),
                'responses' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'response id'),
                    'Array of response ids, empty for deleting all the user responses',
                    VALUE_DEFAULT,
                    array()
                ),
            )
        );
    }

    /**
     * Delete the given submitted responses in a choice
     *
     * @param int $choiceid the choice instance id
     * @param array $responses the response ids,  empty for deleting all the user responses
     * @return array status information and warnings
     * @throws moodle_exception
     * @since Moodle 3.0
     */
    public static function mod_choice_delete_choice_responses($choiceid, $responses = array()) {

        $status = false;
        $warnings = array();
        $params = self::validate_parameters(self::mod_choice_delete_choice_responses_parameters(),
                                            array(
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

        // If we have the capability, delete all the passed responses.
        if (has_capability('mod/choice:deleteresponses', $context)) {
            if (empty($params['responses'])) {
                // Get all the responses for the choice.
                $params['responses'] = array_keys(choice_get_all_responses($choice));
            }
            $status = choice_delete_responses($params['responses'], $choice, $cm, $course);
        } else if ($choice->allowupdate) {
            // Check if we can delate our own responses.
            $timenow = time();
            if ($choice->timeclose != 0) {
                if ($timenow > $choice->timeclose) {
                    throw new moodle_exception("expired", "choice", '', userdate($choice->timeclose));
                }
            }
            // Delete only our responses.
            $myresponses = array_keys(choice_get_my_response($choice));

            if (empty($params['responses'])) {
                $todelete = $myresponses;
            } else {
                $todelete = array();
                foreach ($params['responses'] as $response) {
                    if (!in_array($response, $myresponses)) {
                        $warnings[] = array(
                            'item' => 'response',
                            'itemid' => $response,
                            'warningcode' => 'nopermissions',
                            'message' => 'No permission to delete this response'
                        );
                    } else {
                        $todelete[] = $response;
                    }
                }
            }

            $status = choice_delete_responses($todelete, $choice, $cm, $course);
        } else {
            // The user requires the capability to delete responses.
            throw new required_capability_exception($context, 'mod/choice:deleteresponses', 'nopermissions', '');
        }

        return array(
            'status' => $status,
            'warnings' => $warnings
        );
    }

    /**
     * Describes the delete_choice_responses return value.
     *
     * @return external_multiple_structure
     * @since Moodle 3.0
     */
    public static function mod_choice_delete_choice_responses_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status, true if everything went right'),
                'warnings' => new external_warnings(),
            )
        );
    }


    /**
     * Describes the parameters for get_surveys_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_survey_get_surveys_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'), 'Array of course ids', VALUE_DEFAULT, array()
                ),
            )
        );
    }

    /**
     * Returns a list of surveys in a provided list of courses,
     * if no list is provided all surveys that the user can view will be returned.
     *
     * @param array $courseids the course ids
     * @return array of surveys details
     * @since Moodle 3.0
     */
    public static function mod_survey_get_surveys_by_courses($courseids = array()) {
        global $CFG, $USER, $DB;

        $returnedsurveys = array();
        $warnings = array();

        $params = self::validate_parameters(self::mod_survey_get_surveys_by_courses_parameters(), array('courseids' => $courseids));

        if (empty($params['courseids'])) {
            $params['courseids'] = array_keys(enrol_get_my_courses());
        }

        // Ensure there are courseids to loop through.
        if (!empty($params['courseids'])) {

            list($courses, $warnings) = external_util::validate_courses($params['courseids']);

            // Get the surveys in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $surveys = get_all_instances_in_courses("survey", $courses);
            foreach ($surveys as $survey) {
                $context = context_module::instance($survey->coursemodule);
                // Entry to return.
                $surveydetails = array();
                // First, we return information that any user can see in the web interface.
                $surveydetails['id'] = $survey->id;
                $surveydetails['coursemodule']      = $survey->coursemodule;
                $surveydetails['course']            = $survey->course;
                $surveydetails['name']              = external_format_string($survey->name, $context->id);

                if (has_capability('mod/survey:participate', $context)) {
                    $trimmedintro = trim($survey->intro);
                    if (empty($trimmedintro)) {
                        $tempo = $DB->get_field("survey", "intro", array("id" => $survey->template));
                        $survey->intro = get_string($tempo, "survey");
                    }

                    // Format intro.
                    list($surveydetails['intro'], $surveydetails['introformat']) =
                        external_format_text($survey->intro, $survey->introformat, $context->id, 'mod_survey', 'intro', null);

                    $surveydetails['template']  = $survey->template;
                    $surveydetails['days']      = $survey->days;
                    $surveydetails['questions'] = $survey->questions;
                    $surveydetails['surveydone'] = survey_already_done($survey->id, $USER->id) ? 1 : 0;

                }

                if (has_capability('moodle/course:manageactivities', $context)) {
                    $surveydetails['timecreated']   = $survey->timecreated;
                    $surveydetails['timemodified']  = $survey->timemodified;
                    $surveydetails['section']       = $survey->section;
                    $surveydetails['visible']       = $survey->visible;
                    $surveydetails['groupmode']     = $survey->groupmode;
                    $surveydetails['groupingid']    = $survey->groupingid;
                }
                $returnedsurveys[] = $surveydetails;
            }
        }
        $result = array();
        $result['surveys'] = $returnedsurveys;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_surveys_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_survey_get_surveys_by_courses_returns() {
        return new external_single_structure(
            array(
                'surveys' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Survey id'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module id'),
                            'course' => new external_value(PARAM_INT, 'Course id'),
                            'name' => new external_value(PARAM_RAW, 'Survey name'),
                            'intro' => new external_value(PARAM_RAW, 'The Survey intro', VALUE_OPTIONAL),
                            'introformat' => new external_format_value('intro', VALUE_OPTIONAL),
                            'template' => new external_value(PARAM_INT, 'Survey type', VALUE_OPTIONAL),
                            'days' => new external_value(PARAM_INT, 'Days', VALUE_OPTIONAL),
                            'questions' => new external_value(PARAM_RAW, 'Question ids', VALUE_OPTIONAL),
                            'surveydone' => new external_value(PARAM_INT, 'Did I finish the survey?', VALUE_OPTIONAL),
                            'timecreated' => new external_value(PARAM_INT, 'Time of creation', VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_INT, 'Time of last modification', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'Course section id', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_INT, 'Visible', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'Group mode', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'Group id', VALUE_OPTIONAL),
                        ), 'Surveys'
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
    public static function mod_survey_view_survey_parameters() {
        return new external_function_parameters(
            array(
                'surveyid' => new external_value(PARAM_INT, 'survey instance id')
            )
        );
    }

    /**
     * Trigger the course module viewed event and update the module completion status.
     *
     * @param int $surveyid the survey instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_survey_view_survey($surveyid) {
        global $DB, $USER;

        $params = self::validate_parameters(self::mod_survey_view_survey_parameters(),
                                            array(
                                                'surveyid' => $surveyid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $survey = $DB->get_record('survey', array('id' => $params['surveyid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($survey, 'survey');

        $context = context_module::instance($cm->id);
        self::validate_context($context);
        require_capability('mod/survey:participate', $context);

        $viewed = survey_already_done($survey->id, $USER->id) ? 'graph' : 'form';

        // Trigger course_module_viewed event and completion.
        survey_view($survey, $course, $cm, $context, $viewed);

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
    public static function mod_survey_view_survey_returns() {
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
    public static function mod_survey_get_questions_parameters() {
        return new external_function_parameters(
            array(
                'surveyid' => new external_value(PARAM_INT, 'survey instance id')
            )
        );
    }

    /**
     * Get the complete list of questions for the survey, including subquestions.
     *
     * @param int $surveyid the survey instance id
     * @return array of warnings and the question list
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_survey_get_questions($surveyid) {
        global $DB, $USER;

        $params = self::validate_parameters(self::mod_survey_get_questions_parameters(),
                                            array(
                                                'surveyid' => $surveyid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $survey = $DB->get_record('survey', array('id' => $params['surveyid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($survey, 'survey');

        $context = context_module::instance($cm->id);
        self::validate_context($context);
        require_capability('mod/survey:participate', $context);

        $mainquestions = survey_get_questions($survey);

        foreach ($mainquestions as $question) {
            if ($question->type >= 0) {
                // Parent is used in subquestions.
                $question->parent = 0;
                $questions[] = survey_translate_question($question);

                // Check if the question has subquestions.
                if ($question->multi) {
                    $subquestions = survey_get_subquestions($question);
                    foreach ($subquestions as $sq) {
                        $sq->parent = $question->id;
                        $questions[] = survey_translate_question($sq);
                    }
                }
            }
        }

        $result = array();
        $result['questions'] = $questions;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function mod_survey_get_questions_returns() {
        return new external_single_structure(
            array(
                'questions' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Question id'),
                            'text' => new external_value(PARAM_RAW, 'Question text'),
                            'shorttext' => new external_value(PARAM_RAW, 'Question short text'),
                            'multi' => new external_value(PARAM_RAW, 'Subquestions ids'),
                            'intro' => new external_value(PARAM_RAW, 'The question intro'),
                            'type' => new external_value(PARAM_INT, 'Question type'),
                            'options' => new external_value(PARAM_RAW, 'Question options'),
                            'parent' => new external_value(PARAM_INT, 'Parent question (for subquestions)'),
                        ), 'Questions'
                    )
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for submit_answers.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_survey_submit_answers_parameters() {
        return new external_function_parameters(
            array(
                'surveyid' => new external_value(PARAM_INT, 'Survey id'),
                'answers' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'key' => new external_value(PARAM_RAW, 'Answer key'),
                            'value' => new external_value(PARAM_RAW, 'Answer value')
                        )
                    )
                ),
            )
        );
    }

    /**
     * Submit the answers for a given survey.
     *
     * @param int $surveyid the survey instance id
     * @param array $answers the survey answers
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_survey_submit_answers($surveyid, $answers) {
        global $DB, $USER;

        $params = self::validate_parameters(self::mod_survey_submit_answers_parameters(),
                                            array(
                                                'surveyid' => $surveyid,
                                                'answers' => $answers
                                            ));
        $warnings = array();

        // Request and permission validation.
        $survey = $DB->get_record('survey', array('id' => $params['surveyid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($survey, 'survey');

        $context = context_module::instance($cm->id);
        self::validate_context($context);
        require_capability('mod/survey:participate', $context);

        if (survey_already_done($survey->id, $USER->id)) {
            throw new moodle_exception("alreadysubmitted", "survey");
        }

        // Build the answers array. Data is cleaned inside the survey_save_answers function.
        $answers = array();
        foreach ($params['answers'] as $answer) {
            $key = $answer['key'];
            $answers[$key] = $answer['value'];
        }

        survey_save_answers($survey, $answers, $course, $context);

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
    public static function mod_survey_submit_answers_returns() {
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
     * @since Moodle 3.1
     */
    public static function mod_forum_can_add_discussion_parameters() {
        return new external_function_parameters(
            array(
                'forumid' => new external_value(PARAM_INT, 'Forum instance ID'),
                'groupid' => new external_value(PARAM_INT, 'The group to check, default to active group.
                                                Use -1 to check if the user can post in all the groups.', VALUE_DEFAULT, null)
            )
        );
    }
    /**
     * Check if the current user can add discussions in the given forum (and optionally for the given group).
     *
     * @param int $forumid the forum instance id
     * @param int $groupid the group to check, default to active group. Use -1 to check if the user can post in all the groups.
     * @return array of warnings and the status (true if the user can add discussions)
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_forum_can_add_discussion($forumid, $groupid = null) {
        global $DB, $CFG;
        require_once($CFG->dirroot . "/mod/forum/lib.php");
        $params = self::validate_parameters(self::mod_forum_can_add_discussion_parameters(),
                                            array(
                                                'forumid' => $forumid,
                                                'groupid' => $groupid,
                                            ));
        $warnings = array();
        // Request and permission validation.
        $forum = $DB->get_record('forum', array('id' => $params['forumid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($forum, 'forum');
        $context = context_module::instance($cm->id);
        self::validate_context($context);
        $status = forum_user_can_post_discussion($forum, $params['groupid'], -1, $cm, $context);
        $result = array();
        $result['status'] = $status;
        $result['warnings'] = $warnings;
        return $result;
    }
    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_forum_can_add_discussion_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'True if the user can add discussions, false otherwise.'),
                'warnings' => new external_warnings()
            )
        );
    }


    /**
     * Returns description of get_instance_info() parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function enrol_guest_get_instance_info_parameters() {
        return new external_function_parameters(
                array('instanceid' => new external_value(PARAM_INT, 'Instance id of guest enrolment plugin.'))
            );
    }
    /**
     * Return guest enrolment instance information.
     *
     * @param int $instanceid instance id of guest enrolment plugin.
     * @return array warnings and instance information.
     * @since Moodle 3.1
     */
    public static function enrol_guest_get_instance_info($instanceid) {
        global $DB;
        $params = self::validate_parameters(self::enrol_guest_get_instance_info_parameters(), array('instanceid' => $instanceid));
        $warnings = array();
        // Retrieve guest enrolment plugin.
        $enrolplugin = enrol_get_plugin('guest');
        if (empty($enrolplugin)) {
            throw new moodle_exception('invaliddata', 'error');
        }
        require_login(null, false, null, false, true);
        $enrolinstance = $DB->get_record('enrol', array('id' => $params['instanceid']), '*', MUST_EXIST);
        $course = $DB->get_record('course', array('id' => $enrolinstance->courseid), '*', MUST_EXIST);
        $context = context_course::instance($course->id);
        if (!$course->visible and !has_capability('moodle/course:viewhiddencourses', $context)) {
            throw new moodle_exception('coursehidden');
        }
        $instanceinfo = enrol_guest_get_enrol_info($enrolinstance);

        // Specific instance information.
        $instanceinfo->passwordrequired = $instanceinfo->requiredparam->passwordrequired;
        unset($instanceinfo->requiredparam);
        $result = array();
        $result['instanceinfo'] = $instanceinfo;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of get_instance_info() result value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function enrol_guest_get_instance_info_returns() {
        return new external_single_structure(
            array(
                'instanceinfo' => new external_single_structure(
                    array(
                        'id' => new external_value(PARAM_INT, 'Id of course enrolment instance'),
                        'courseid' => new external_value(PARAM_INT, 'Id of course'),
                        'type' => new external_value(PARAM_PLUGIN, 'Type of enrolment plugin'),
                        'name' => new external_value(PARAM_RAW, 'Name of enrolment plugin'),
                        'status' => new external_value(PARAM_BOOL, 'Is the enrolment enabled?'),
                        'passwordrequired' => new external_value(PARAM_BOOL, 'Is a password required?'),
                    )
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Returns description of get_course_enrolment_methods() parameters
     *
     * @return external_function_parameters
     */
    public static function core_enrol_get_course_enrolment_methods_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course id')
            )
        );
    }
    /**
     * Get list of active course enrolment methods for current user.
     *
     * @param int $courseid
     * @return array of course enrolment methods
     */
    public static function core_enrol_get_course_enrolment_methods($courseid) {
        $params = self::validate_parameters(self::core_enrol_get_course_enrolment_methods_parameters(), array('courseid' => $courseid));
        $coursecontext = context_course::instance($params['courseid']);
        $categorycontext = $coursecontext->get_parent_context();
        self::validate_context($categorycontext);
        $result = array();
        $enrolinstances = enrol_get_instances($params['courseid'], true);
        foreach ($enrolinstances as $enrolinstance) {
            if ($enrolplugin = enrol_get_plugin($enrolinstance->enrol)) {
                if ($instanceinfo = $enrolplugin->get_enrol_info($enrolinstance)) {
                    $result[] = (array) $instanceinfo;
                } else if ($enrolinstance->enrol == 'guest') {
                    $result[] = (array) enrol_guest_get_enrol_info($enrolinstance);
                }
            }
        }
        return $result;
    }
    /**
     * Returns description of get_course_enrolment_methods() result value
     *
     * @return external_description
     */
    public static function core_enrol_get_course_enrolment_methods_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, 'id of course enrolment instance'),
                    'courseid' => new external_value(PARAM_INT, 'id of course'),
                    'type' => new external_value(PARAM_PLUGIN, 'type of enrolment plugin'),
                    'name' => new external_value(PARAM_RAW, 'name of enrolment plugin'),
                    'status' => new external_value(PARAM_RAW, 'status of enrolment plugin'),
                    'wsfunction' => new external_value(PARAM_ALPHANUMEXT, 'webservice function to get more information', VALUE_OPTIONAL),
                )
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_view_scorm_parameters() {
        return new external_function_parameters(
            array(
                'scormid' => new external_value(PARAM_INT, 'scorm instance id')
            )
        );
    }

    /**
     * Trigger the course module viewed event.
     *
     * @param int $scormid the scorm instance id
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function mod_scorm_view_scorm($scormid) {
        global $DB, $CFG;

        $params = self::validate_parameters(self::mod_scorm_view_scorm_parameters(),
                                            array(
                                                'scormid' => $scormid
                                            ));
        $warnings = array();

        // Request and permission validation.
        $scorm = $DB->get_record('scorm', array('id' => $params['scormid']), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($scorm, 'scorm');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Trigger course_module_viewed event.
        $params = array(
            'context' => $context,
            'objectid' => $scorm->id
        );

        $event = \mod_scorm\event\course_module_viewed::create($params);
        $event->add_record_snapshot('course_modules', $cm);
        $event->add_record_snapshot('course', $course);
        $event->add_record_snapshot('scorm', $scorm);
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
    public static function mod_scorm_view_scorm_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for mod_scorm_get_scorm_attempt_count.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_attempt_count_parameters() {
        return new external_function_parameters(
            array(
                'scormid' => new external_value(PARAM_INT, 'SCORM instance id'),
                'userid' => new external_value(PARAM_INT, 'User id'),
                'ignoremissingcompletion' => new external_value(PARAM_BOOL,
                                                'Ignores attempts that haven\'t reported a grade/completion',
                                                VALUE_DEFAULT, false),
            )
        );
    }

    /**
     * Return the number of attempts done by a user in the given SCORM.
     *
     * @param int $scormid the scorm id
     * @param int $userid the user id
     * @param bool $ignoremissingcompletion ignores attempts that haven't reported a grade/completion
     * @return array of warnings and the attempts count
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_attempt_count($scormid, $userid, $ignoremissingcompletion = false) {
        global $USER, $DB;

        $params = self::validate_parameters(self::mod_scorm_get_scorm_attempt_count_parameters(),
                                            array('scormid' => $scormid, 'userid' => $userid,
                                                'ignoremissingcompletion' => $ignoremissingcompletion));

        $attempts = array();
        $warnings = array();

        $scorm = $DB->get_record('scorm', array('id' => $params['scormid']), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('scorm', $scorm->id);

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $user = core_user::get_user($params['userid'], '*', MUST_EXIST);

        // Extra checks so only users with permissions can view other users attempts.
        if ($USER->id != $user->id) {
            require_capability('mod/scorm:viewreport', $context);
        }

        // If the SCORM is not open this function will throw exceptions.
        scorm_require_available($scorm);

        $attemptscount = scorm_get_attempt_count($user->id, $scorm, false, $params['ignoremissingcompletion']);

        $result = array();
        $result['attemptscount'] = $attemptscount;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_scorm_get_scorm_attempt_count return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_attempt_count_returns() {

        return new external_single_structure(
            array(
                'attemptscount' => new external_value(PARAM_INT, 'Attempts count'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for mod_scorm_get_scorm_scoes.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_scoes_parameters() {
        return new external_function_parameters(
            array(
                'scormid' => new external_value(PARAM_INT, 'scorm instance id'),
                'organization' => new external_value(PARAM_RAW, 'organization id', VALUE_DEFAULT, '')
            )
        );
    }

    /**
     * Returns a list containing all the scoes data related to the given scorm id
     *
     * @param int $scormid the scorm id
     * @param string $organization the organization id
     * @return array warnings and the scoes data
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_scoes($scormid, $organization = '') {
        global $DB;

        $params = self::validate_parameters(self::mod_scorm_get_scorm_scoes_parameters(),
                                            array('scormid' => $scormid, 'organization' => $organization));

        $scoes = array();
        $warnings = array();

        $scorm = $DB->get_record('scorm', array('id' => $params['scormid']), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('scorm', $scorm->id);

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Check settings / permissions to view the SCORM.
        scorm_require_available($scorm, true, $context);

        if (!$scoes = scorm_get_scoes($scorm->id, $params['organization'])) {
            // Function scorm_get_scoes return false, not an empty array.
            $scoes = array();
        }

        $result = array();
        $result['scoes'] = $scoes;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_scorm_get_scorm_scoes return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_scoes_returns() {

        return new external_single_structure(
            array(
                'scoes' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'sco id'),
                            'scorm' => new external_value(PARAM_INT, 'scorm id'),
                            'manifest' => new external_value(PARAM_NOTAGS, 'manifest id'),
                            'organization' => new external_value(PARAM_NOTAGS, 'organization id'),
                            'parent' => new external_value(PARAM_NOTAGS, 'parent'),
                            'identifier' => new external_value(PARAM_NOTAGS, 'identifier'),
                            'launch' => new external_value(PARAM_NOTAGS, 'launch file'),
                            'scormtype' => new external_value(PARAM_ALPHA, 'scorm type (asset, sco)'),
                            'title' => new external_value(PARAM_NOTAGS, 'sco title'),
                            'sortorder' => new external_value(PARAM_INT, 'sort order'),
                        ), 'SCORM SCO data'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for mod_scorm_get_scorm_user_data.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_user_data_parameters() {
        return new external_function_parameters(
            array(
                'scormid' => new external_value(PARAM_INT, 'scorm instance id'),
                'attempt' => new external_value(PARAM_INT, 'attempt number')
            )
        );
    }

    /**
     * Retrieves user tracking and SCO data and default SCORM values
     *
     * @param int $scormid the scorm id
     * @param int $attempt the attempt number
     * @return array warnings and the scoes data
     * @throws  moodle_exception
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_user_data($scormid, $attempt) {
        global $CFG, $DB;

        $params = self::validate_parameters(self::mod_scorm_get_scorm_user_data_parameters(),
                                            array('scormid' => $scormid, 'attempt' => $attempt));

        $data = array();
        $warnings = array();

        $scorm = $DB->get_record('scorm', array('id' => $params['scormid']), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('scorm', $scorm->id);

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        scorm_require_available($scorm, true, $context);

        $scorm->version = strtolower(clean_param($scorm->version, PARAM_SAFEDIR));
        if (!file_exists($CFG->dirroot.'/mod/scorm/datamodels/'.$scorm->version.'lib.php')) {
            $scorm->version = 'scorm_12';
        }
        require_once($CFG->dirroot.'/mod/scorm/datamodels/'.$scorm->version.'lib.php');
        if ($scoes = scorm_get_scoes($scorm->id)) {
            $def = new stdClass();
            $user = new stdClass();
            foreach ($scoes as $sco) {
                $def->{$sco->id} = new stdClass();
                $user->{$sco->id} = new stdClass();
                // We force mode normal, this can be override by the client at any time.
                $def->{$sco->id} = get_scorm_default($user->{$sco->id}, $scorm, $sco->id, $params['attempt'], 'normal');
                $userdata = array();
                $defaultdata = array();

                foreach ((array) $user->{$sco->id} as $key => $val) {
                    $userdata[] = array(
                        'element' => $key,
                        'value' => $val
                    );
                }
                foreach ($def->{$sco->id} as $key => $val) {
                    $defaultdata[] = array(
                        'element' => $key,
                        'value' => $val
                    );
                }

                $data[] = array(
                    'scoid' => $sco->id,
                    'userdata' => $userdata,
                    'defaultdata' => $defaultdata,
                );
            }
        }

        $result = array();
        $result['data'] = $data;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_scorm_get_scorm_user_data return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_user_data_returns() {

        return new external_single_structure(
            array(
                'data' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'scoid' => new external_value(PARAM_INT, 'sco id'),
                            'userdata' => new external_multiple_structure(
                                            new external_single_structure(
                                                array(
                                                    'element' => new external_value(PARAM_RAW, 'element name'),
                                                    'value' => new external_value(PARAM_RAW, 'element value')
                                                )
                                            )
                                          ),
                            'defaultdata' => new external_multiple_structure(
                                                new external_single_structure(
                                                    array(
                                                        'element' => new external_value(PARAM_RAW, 'element name'),
                                                        'value' => new external_value(PARAM_RAW, 'element value')
                                                    )
                                                )
                                             ),
                        ), 'SCO data'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for insert_scorm_tracks.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_insert_scorm_tracks_parameters() {
        return new external_function_parameters(
            array(
                'scoid' => new external_value(PARAM_INT, 'SCO id'),
                'attempt' => new external_value(PARAM_INT, 'attempt number'),
                'tracks' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'element' => new external_value(PARAM_RAW, 'element name'),
                            'value' => new external_value(PARAM_RAW, 'element value')
                        )
                    )
                ),
            )
        );
    }

    /**
     * Saves a SCORM tracking record.
     * It will overwrite any existing tracking data for this attempt.
     * Validation should be performed before running the function to ensure the user will not lose any existing attempt data.
     *
     * @param int $scoid the SCO id
     * @param string $attempt the attempt number
     * @param array $tracks the track records to be stored
     * @return array warnings and the scoes data
     * @throws moodle_exception
     * @since Moodle 3.0
     */
    public static function mod_scorm_insert_scorm_tracks($scoid, $attempt, $tracks) {
        global $USER, $DB;

        $params = self::validate_parameters(self::mod_scorm_insert_scorm_tracks_parameters(),
                                            array('scoid' => $scoid, 'attempt' => $attempt, 'tracks' => $tracks));

        $trackids = array();
        $warnings = array();

        $sco = scorm_get_sco($params['scoid'], SCO_ONLY);
        if (!$sco) {
            throw new moodle_exception('cannotfindsco', 'scorm');
        }

        $scorm = $DB->get_record('scorm', array('id' => $sco->scorm), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('scorm', $scorm->id);

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Check settings / permissions to view the SCORM.
        require_capability('mod/scorm:savetrack', $context);

        // Check settings / permissions to view the SCORM.
        scorm_require_available($scorm);

        foreach ($params['tracks'] as $track) {
            $element = $track['element'];
            $value = $track['value'];
            $trackid = scorm_insert_track($USER->id, $scorm->id, $sco->id, $params['attempt'], $element, $value,
                                            $scorm->forcecompleted);

            if ($trackid) {
                $trackids[] = $trackid;
            } else {
                $warnings[] = array(
                    'item' => 'scorm',
                    'itemid' => $scorm->id,
                    'warningcode' => 1,
                    'message' => 'Element: ' . $element . ' was not saved'
                );
            }
        }

        $result = array();
        $result['trackids'] = $trackids;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the insert_scorm_tracks return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_scorm_insert_scorm_tracks_returns() {

        return new external_single_structure(
            array(
                'trackids' => new external_multiple_structure(new external_value(PARAM_INT, 'track id')),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for mod_scorm_get_scorm_sco_tracks.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_sco_tracks_parameters() {
        return new external_function_parameters(
            array(
                'scoid' => new external_value(PARAM_INT, 'sco id'),
                'userid' => new external_value(PARAM_INT, 'user id'),
                'attempt' => new external_value(PARAM_INT, 'attempt number (0 for last attempt)', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Retrieves SCO tracking data for the given user id and attempt number
     *
     * @param int $scoid the sco id
     * @param int $userid the user id
     * @param int $attempt the attempt number
     * @return array warnings and the scoes data
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_sco_tracks($scoid, $userid, $attempt = 0) {
        global $USER, $DB;

        $params = self::validate_parameters(self::mod_scorm_get_scorm_sco_tracks_parameters(),
                                            array('scoid' => $scoid, 'userid' => $userid, 'attempt' => $attempt));

        $tracks = array();
        $warnings = array();

        $sco = scorm_get_sco($params['scoid'], SCO_ONLY);
        if (!$sco) {
            throw new moodle_exception('cannotfindsco', 'scorm');
        }

        $scorm = $DB->get_record('scorm', array('id' => $sco->scorm), '*', MUST_EXIST);
        $cm = get_coursemodule_from_instance('scorm', $scorm->id);

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $user = core_user::get_user($params['userid'], '*', MUST_EXIST);

        // Extra checks so only users with permissions can view other users attempts.
        if ($USER->id != $user->id) {
            require_capability('mod/scorm:viewreport', $context);
        }

        scorm_require_available($scorm, true, $context);

        if (empty($params['attempt'])) {
            $params['attempt'] = scorm_get_last_attempt($scorm->id, $user->id);
        }

        $attempted = false;
        if ($scormtracks = scorm_get_tracks($sco->id, $params['userid'], $params['attempt'])) {
            // Check if attempted.
            if ($scormtracks->status != '') {
                $attempted = true;
                foreach ($scormtracks as $element => $value) {
                    $tracks[] = array(
                        'element' => $element,
                        'value' => $value,
                    );
                }
            }
        }

        if (!$attempted) {
            $warnings[] = array(
                'item' => 'attempt',
                'itemid' => $params['attempt'],
                'warningcode' => 'notattempted',
                'message' => get_string('notattempted', 'scorm')
            );
        }

        $result = array();
        $result['data']['attempt'] = $params['attempt'];
        $result['data']['tracks'] = $tracks;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_scorm_get_scorm_sco_tracks return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorm_sco_tracks_returns() {

        return new external_single_structure(
            array(
                'data' => new external_single_structure(
                    array(
                        'attempt' => new external_value(PARAM_INT, 'Attempt number'),
                        'tracks' => new external_multiple_structure(
                            new external_single_structure(
                                array(
                                    'element' => new external_value(PARAM_RAW, 'Element name'),
                                    'value' => new external_value(PARAM_RAW, 'Element value')
                                ), 'Tracks data'
                            )
                        ),
                    ), 'SCO data'
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for mod_scorm_get_scorms_by_courses.
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorms_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'), 'Array of course ids', VALUE_DEFAULT, array()
                ),
            )
        );
    }

    /**
     * Returns a list of scorms in a provided list of courses,
     * if no list is provided all scorms that the user can view will be returned.
     *
     * @param array $courseids the course ids
     * @return array the scorm details
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorms_by_courses($courseids = array()) {
        global $CFG;

        $returnedscorms = array();
        $warnings = array();

        $params = self::validate_parameters(self::mod_scorm_get_scorms_by_courses_parameters(), array('courseids' => $courseids));

        if (empty($params['courseids'])) {
            $params['courseids'] = array_keys(enrol_get_my_courses());
        }

        // Ensure there are courseids to loop through.
        if (!empty($params['courseids'])) {

            list($courses, $warnings) = external_util::validate_courses($params['courseids']);

            // Get the scorms in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $scorms = get_all_instances_in_courses("scorm", $courses);

            $fs = get_file_storage();
            foreach ($scorms as $scorm) {

                $context = context_module::instance($scorm->coursemodule);

                // Entry to return.
                $module = array();

                // First, we return information that any user can see in (or can deduce from) the web interface.
                $module['id'] = $scorm->id;
                $module['coursemodule'] = $scorm->coursemodule;
                $module['course'] = $scorm->course;
                $module['name']  = external_format_string($scorm->name, $context->id);
                list($module['intro'], $module['introformat']) =
                    external_format_text($scorm->intro, $scorm->introformat, $context->id, 'mod_scorm', 'intro', $scorm->id);

                // Check if the SCORM open and return warnings if so.
                list($open, $openwarnings) = scorm_get_availability_status($scorm, true, $context);

                if (!$open) {
                    foreach ($openwarnings as $warningkey => $warningdata) {
                        $warnings[] = array(
                            'item' => 'scorm',
                            'itemid' => $scorm->id,
                            'warningcode' => $warningkey,
                            'message' => get_string($warningkey, 'scorm', $warningdata)
                        );
                    }
                } else {
                    $module['packagesize'] = 0;
                    // SCORM size.
                    if ($scorm->scormtype === SCORM_TYPE_LOCAL or $scorm->scormtype === SCORM_TYPE_LOCALSYNC) {
                        if ($packagefile = $fs->get_file($context->id, 'mod_scorm', 'package', 0, '/', $scorm->reference)) {
                            $module['packagesize'] = $packagefile->get_filesize();
                            // Download URL.
                            $module['packageurl'] = moodle_url::make_webservice_pluginfile_url(
                                                    $context->id, 'mod_scorm', 'package', 0, '/', $scorm->reference)->out(false);
                            // Replace by an URL that can be handle by local_mobile.
                            $module['packageurl'] = str_replace('/webservice/pluginfile.php', '/local/mobile/pluginfile.php', $module['packageurl']);
                        }
                    }

                    $module['protectpackagedownloads'] = get_config('local_mobile', 'mod_scorm_protectpackagedownloads');

                    $viewablefields = array('version', 'maxgrade', 'grademethod', 'whatgrade', 'maxattempt', 'forcecompleted',
                                            'forcenewattempt', 'lastattemptlock', 'displayattemptstatus', 'displaycoursestructure',
                                            'sha1hash', 'md5hash', 'revision', 'launch', 'skipview', 'hidebrowse', 'hidetoc', 'nav',
                                            'navpositionleft', 'navpositiontop', 'auto', 'popup', 'width', 'height', 'timeopen',
                                            'timeclose', 'displayactivityname', 'scormtype', 'reference');

                    // Check additional permissions for returning optional private settings.
                    if (has_capability('moodle/course:manageactivities', $context)) {

                        $additionalfields = array('updatefreq', 'options', 'completionstatusrequired', 'completionscorerequired',
                                                    'autocommit', 'timemodified', 'section', 'visible', 'groupmode', 'groupingid');
                        $viewablefields = array_merge($viewablefields, $additionalfields);

                    }

                    foreach ($viewablefields as $field) {
                        $module[$field] = $scorm->{$field};
                    }
                }

                $returnedscorms[] = $module;
            }
        }

        $result = array();
        $result['scorms'] = $returnedscorms;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the mod_scorm_get_scorms_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.0
     */
    public static function mod_scorm_get_scorms_by_courses_returns() {

        return new external_single_structure(
            array(
                'scorms' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'SCORM id'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module id'),
                            'course' => new external_value(PARAM_INT, 'Course id'),
                            'name' => new external_value(PARAM_RAW, 'SCORM name'),
                            'intro' => new external_value(PARAM_RAW, 'The SCORM intro'),
                            'introformat' => new external_format_value('intro'),
                            'packagesize' => new external_value(PARAM_INT, 'SCORM zip package size', VALUE_OPTIONAL),
                            'packageurl' => new external_value(PARAM_URL, 'SCORM zip package URL', VALUE_OPTIONAL),
                            'version' => new external_value(PARAM_NOTAGS, 'SCORM version (SCORM_12, SCORM_13, SCORM_AICC)',
                                                            VALUE_OPTIONAL),
                            'maxgrade' => new external_value(PARAM_INT, 'Max grade', VALUE_OPTIONAL),
                            'grademethod' => new external_value(PARAM_INT, 'Grade method', VALUE_OPTIONAL),
                            'whatgrade' => new external_value(PARAM_INT, 'What grade', VALUE_OPTIONAL),
                            'maxattempt' => new external_value(PARAM_INT, 'Maximum number of attemtps', VALUE_OPTIONAL),
                            'forcecompleted' => new external_value(PARAM_BOOL, 'Status current attempt is forced to "completed"',
                                                                    VALUE_OPTIONAL),
                            'forcenewattempt' => new external_value(PARAM_BOOL, 'Hides the "Start new attempt" checkbox',
                                                                    VALUE_OPTIONAL),
                            'lastattemptlock' => new external_value(PARAM_BOOL, 'Prevents to launch new attempts once finished',
                                                                    VALUE_OPTIONAL),
                            'displayattemptstatus' => new external_value(PARAM_INT, 'How to display attempt status',
                                                                            VALUE_OPTIONAL),
                            'displaycoursestructure' => new external_value(PARAM_BOOL, 'Display contents structure',
                                                                            VALUE_OPTIONAL),
                            'sha1hash' => new external_value(PARAM_NOTAGS, 'Package content or ext path hash', VALUE_OPTIONAL),
                            'md5hash' => new external_value(PARAM_NOTAGS, 'MD5 Hash of package file', VALUE_OPTIONAL),
                            'revision' => new external_value(PARAM_INT, 'Revison number', VALUE_OPTIONAL),
                            'launch' => new external_value(PARAM_INT, 'First content to launch', VALUE_OPTIONAL),
                            'skipview' => new external_value(PARAM_INT, 'How to skip the content structure page', VALUE_OPTIONAL),
                            'hidebrowse' => new external_value(PARAM_BOOL, 'Disable preview mode?', VALUE_OPTIONAL),
                            'hidetoc' => new external_value(PARAM_INT, 'How to display the SCORM structure in player',
                                                            VALUE_OPTIONAL),
                            'nav' => new external_value(PARAM_INT, 'Show navigation buttons', VALUE_OPTIONAL),
                            'navpositionleft' => new external_value(PARAM_INT, 'Navigation position left', VALUE_OPTIONAL),
                            'navpositiontop' => new external_value(PARAM_INT, 'Navigation position top', VALUE_OPTIONAL),
                            'auto' => new external_value(PARAM_BOOL, 'Auto continue?', VALUE_OPTIONAL),
                            'popup' => new external_value(PARAM_INT, 'Display in current or new window', VALUE_OPTIONAL),
                            'width' => new external_value(PARAM_INT, 'Frame width', VALUE_OPTIONAL),
                            'height' => new external_value(PARAM_INT, 'Frame height', VALUE_OPTIONAL),
                            'timeopen' => new external_value(PARAM_INT, 'Available from', VALUE_OPTIONAL),
                            'timeclose' => new external_value(PARAM_INT, 'Available to', VALUE_OPTIONAL),
                            'displayactivityname' => new external_value(PARAM_BOOL, 'Display the activity name above the player?',
                                                                        VALUE_OPTIONAL),
                            'scormtype' => new external_value(PARAM_ALPHA, 'SCORM type', VALUE_OPTIONAL),
                            'reference' => new external_value(PARAM_NOTAGS, 'Reference to the package', VALUE_OPTIONAL),
                            'protectpackagedownloads' => new external_value(PARAM_BOOL, 'Protect package downloads?',
                                                                            VALUE_OPTIONAL),
                            'updatefreq' => new external_value(PARAM_INT, 'Auto-update frequency for remote packages',
                                                                VALUE_OPTIONAL),
                            'options' => new external_value(PARAM_RAW, 'Additional options', VALUE_OPTIONAL),
                            'completionstatusrequired' => new external_value(PARAM_INT, 'Status passed/completed required?',
                                                                                VALUE_OPTIONAL),
                            'completionscorerequired' => new external_value(PARAM_INT, 'Minimum score required', VALUE_OPTIONAL),
                            'autocommit' => new external_value(PARAM_BOOL, 'Save track data automatically?', VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_INT, 'Time of last modification', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'Course section id', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_BOOL, 'Visible', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'Group mode', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'Group id', VALUE_OPTIONAL),
                        ), 'SCORM'
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
    public static function core_course_get_course_module_parameters() {
        return new external_function_parameters(
            array(
                'cmid' => new external_value(PARAM_INT, 'The course module id')
            )
        );
    }

    /**
     * Return information about a course module.
     *
     * @param int $cmid the course module id
     * @return array of warnings and the course module
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function core_course_get_course_module($cmid) {

        $params = self::validate_parameters(self::core_course_get_course_module_parameters(),
                                            array(
                                                'cmid' => $cmid,
                                            ));

        $warnings = array();

        $cm = get_coursemodule_from_id(null, $params['cmid'], 0, true, MUST_EXIST);
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // If the user has permissions to manage the activity, return all the information.
        if (has_capability('moodle/course:manageactivities', $context)) {
            $info = $cm;
        } else {
            // Return information is safe to show to any user.
            $info = new stdClass();
            $info->id = $cm->id;
            $info->course = $cm->course;
            $info->module = $cm->module;
            $info->modname = $cm->modname;
            $info->instance = $cm->instance;
            $info->section = $cm->section;
            $info->sectionnum = $cm->sectionnum;
            $info->groupmode = $cm->groupmode;
            $info->groupingid = $cm->groupingid;
            $info->completion = $cm->completion;
        }
        // Format name.
        $info->name = external_format_string($cm->name, $context->id);

        $result = array();
        $result['cm'] = $info;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function core_course_get_course_module_returns() {
        return new external_single_structure(
            array(
                'cm' => new external_single_structure(
                    array(
                        'id' => new external_value(PARAM_INT, 'The course module id'),
                        'course' => new external_value(PARAM_INT, 'The course id'),
                        'module' => new external_value(PARAM_INT, 'The module type id'),
                        'name' => new external_value(PARAM_RAW, 'The activity name'),
                        'modname' => new external_value(PARAM_COMPONENT, 'The module component name (forum, assign, etc..)'),
                        'instance' => new external_value(PARAM_INT, 'The activity instance id'),
                        'section' => new external_value(PARAM_INT, 'The module section id'),
                        'sectionnum' => new external_value(PARAM_INT, 'The module section number'),
                        'groupmode' => new external_value(PARAM_INT, 'Group mode'),
                        'groupingid' => new external_value(PARAM_INT, 'Grouping id'),
                        'completion' => new external_value(PARAM_INT, 'If completion is enabled'),
                        'idnumber' => new external_value(PARAM_RAW, 'Module id number', VALUE_OPTIONAL),
                        'added' => new external_value(PARAM_INT, 'Time added', VALUE_OPTIONAL),
                        'score' => new external_value(PARAM_INT, 'Score', VALUE_OPTIONAL),
                        'indent' => new external_value(PARAM_INT, 'Indentation', VALUE_OPTIONAL),
                        'visible' => new external_value(PARAM_INT, 'If visible', VALUE_OPTIONAL),
                        'visibleold' => new external_value(PARAM_INT, 'Visible old', VALUE_OPTIONAL),
                        'completiongradeitemnumber' => new external_value(PARAM_INT, 'Completion grade item', VALUE_OPTIONAL),
                        'completionview' => new external_value(PARAM_INT, 'Completion view setting', VALUE_OPTIONAL),
                        'completionexpected' => new external_value(PARAM_INT, 'Completion time expected', VALUE_OPTIONAL),
                        'showdescription' => new external_value(PARAM_INT, 'If the description is showed', VALUE_OPTIONAL),
                        'availability' => new external_value(PARAM_RAW, 'Availability settings', VALUE_OPTIONAL),
                    )
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
    public static function core_course_get_course_module_by_instance_parameters() {
        return new external_function_parameters(
            array(
                'module' => new external_value(PARAM_COMPONENT, 'The module name'),
                'instance' => new external_value(PARAM_INT, 'The module instance id')
            )
        );
    }

    /**
     * Return information about a course module.
     *
     * @param string $module the module name
     * @param int $instance the activity instance id
     * @return array of warnings and the course module
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function core_course_get_course_module_by_instance($module, $instance) {

        $params = self::validate_parameters(self::core_course_get_course_module_by_instance_parameters(),
                                            array(
                                                'module' => $module,
                                                'instance' => $instance,
                                            ));

        $warnings = array();
        $cm = get_coursemodule_from_instance($params['module'], $params['instance'], 0, false, MUST_EXIST);

        return self::core_course_get_course_module($cm->id);
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function core_course_get_course_module_by_instance_returns() {
        return self::core_course_get_course_module_returns();
    }

    /**
     * Get the browse modes from the display format.
     *
     * This returns some of the terms that can be used when reporting a glossary being viewed.
     *
     * @param  string $format The display format of the glossary.
     * @return array Containing some of all of the following: letter, cat, date, author.
     */
    protected static function mod_glossary_get_browse_modes_from_display_format($format) {
        global $DB;

        $formats = array();
        $dp = $DB->get_record('glossary_formats', array('name' => $format), '*', IGNORE_MISSING);
        if ($dp) {
            $formats = glossary_get_visible_tabs($dp);
        }

        // Always add 'letter'.
        $modes = array('letter');

        if (in_array('category', $formats)) {
            $modes[] = 'cat';
        }
        if (in_array('date', $formats)) {
            $modes[] = 'date';
        }
        if (in_array('author', $formats)) {
            $modes[] = 'author';
        }

        return $modes;
    }

    /**
     * Get the return value of an entry.
     *
     * @param bool $includecat Whether the definition should include category info.
     * @return external_definition
     */
    protected static function mod_glossary_get_entry_return_structure($includecat = false) {
        $params = array(
            'id' => new external_value(PARAM_INT, 'The entry ID'),
            'glossaryid' => new external_value(PARAM_INT, 'The glossary ID'),
            'userid' => new external_value(PARAM_INT, 'Author ID'),
            'userfullname' => new external_value(PARAM_NOTAGS, 'Author full name'),
            'userpictureurl' => new external_value(PARAM_URL, 'Author picture'),
            'concept' => new external_value(PARAM_RAW, 'The concept'),
            'definition' => new external_value(PARAM_RAW, 'The definition'),
            'definitionformat' => new external_format_value('definition'),
            'definitiontrust' => new external_value(PARAM_BOOL, 'The definition trust flag'),
            'attachment' => new external_value(PARAM_BOOL, 'Whether or not the entry has attachments'),
            'attachments' => new external_multiple_structure(
                new external_single_structure(array(
                    'filename' => new external_value(PARAM_FILE, 'File name'),
                    'mimetype' => new external_value(PARAM_RAW, 'Mime type'),
                    'fileurl'  => new external_value(PARAM_URL, 'File download URL')
                )), 'attachments', VALUE_OPTIONAL
            ),
            'timecreated' => new external_value(PARAM_INT, 'Time created'),
            'timemodified' => new external_value(PARAM_INT, 'Time modified'),
            'teacherentry' => new external_value(PARAM_BOOL, 'The entry was created by a teacher, or equivalent.'),
            'sourceglossaryid' => new external_value(PARAM_INT, 'The source glossary ID'),
            'usedynalink' => new external_value(PARAM_BOOL, 'Whether the concept should be automatically linked'),
            'casesensitive' => new external_value(PARAM_BOOL, 'When true, the matching is case sensitive'),
            'fullmatch' => new external_value(PARAM_BOOL, 'When true, the matching is done on full words only'),
            'approved' => new external_value(PARAM_BOOL, 'Whether the entry was approved'),
        );

        if ($includecat) {
            $params['categoryid'] = new external_value(PARAM_INT, 'The category ID. This may be' .
                ' \''. GLOSSARY_SHOW_NOT_CATEGORISED . '\' when the entry is not categorised', VALUE_DEFAULT,
                GLOSSARY_SHOW_NOT_CATEGORISED);
            $params['categoryname'] = new external_value(PARAM_RAW, 'The category name. May be empty when the entry is' .
                ' not categorised, or the request was limited to one category.', VALUE_DEFAULT, '');
        }

        return new external_single_structure($params);
    }

    /**
     * Fill in an entry object.
     *
     * This adds additional required fields for the external function to return.
     *
     * @param  stdClass $entry   The entry.
     * @param  context  $context The context the entry belongs to.
     * @return void
     */
    protected static function mod_glossary_fill_entry_details($entry, $context) {
        global $PAGE;
        $canviewfullnames = has_capability('moodle/site:viewfullnames', $context);

        // Format concept and definition.
        $entry->concept = external_format_string($entry->concept, $context->id);
        list($entry->definition, $entry->definitionformat) = external_format_text($entry->definition, $entry->definitionformat,
            $context->id, 'mod_glossary', 'entry', $entry->id);

        // Author details.
        $user = mod_glossary_entry_query_builder::get_user_from_record($entry);
        $userpicture = new user_picture($user);
        $userpicture->size = 1;
        $entry->userfullname = fullname($user, $canviewfullnames);
        $entry->userpictureurl = $userpicture->get_url($PAGE)->out(false);

        // Fetch attachments.
        $entry->attachment = !empty($entry->attachment) ? 1 : 0;
        $entry->attachments = array();
        if ($entry->attachment) {
            $fs = get_file_storage();
            if ($files = $fs->get_area_files($context->id, 'mod_glossary', 'attachment', $entry->id, 'filename', false)) {
                foreach ($files as $file) {
                    $filename = $file->get_filename();
                    $fileurl = moodle_url::make_webservice_pluginfile_url($context->id, 'mod_glossary', 'attachment',
                        $entry->id, '/', $filename);
                    $entry->attachments[] = array(
                        'filename' => $filename,
                        'mimetype' => $file->get_mimetype(),
                        'fileurl'  => $fileurl->out(false)
                    );
                }
            }
        }
    }

    /**
     * Validate a glossary via ID.
     *
     * @param  int $id The glossary ID.
     * @return array Contains glossary, context, course and cm.
     */
    protected static function mod_glossary_validate_glossary($id) {
        global $DB;
        $glossary = $DB->get_record('glossary', array('id' => $id), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($glossary, 'glossary');
        $context = context_module::instance($cm->id);
        self::validate_context($context);
        return array($glossary, $context, $course, $cm);
    }

    /**
     * Describes the parameters for get_glossaries_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_glossaries_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'),
                    'Array of course IDs', VALUE_DEFAULT, array()
                ),
            )
        );
    }

    /**
     * Returns a list of glossaries in a provided list of courses.
     *
     * If no list is provided all glossaries that the user can view will be returned.
     *
     * @param array $courseids the course IDs.
     * @return array of glossaries
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_glossaries_by_courses($courseids = array()) {
        $params = self::validate_parameters(self::mod_glossary_get_glossaries_by_courses_parameters(), array('courseids' => $courseids));

        $warnings = array();
        $courses = array();
        $courseids = $params['courseids'];

        if (empty($courseids)) {
            $courses = enrol_get_my_courses();
            $courseids = array_keys($courses);
        }

        // Array to store the glossaries to return.
        $glossaries = array();
        $modes = array();

        // Ensure there are courseids to loop through.
        if (!empty($courseids)) {
            list($courses, $warnings) = external_util::validate_courses($courseids);

            // Get the glossaries in these courses, this function checks users visibility permissions.
            $glossaries = get_all_instances_in_courses('glossary', $courses);
            foreach ($glossaries as $glossary) {
                $context = context_module::instance($glossary->coursemodule);
                $glossary->name = external_format_string($glossary->name, $context->id);
                list($glossary->intro, $glossary->introformat) = external_format_text($glossary->intro, $glossary->introformat,
                    $context->id, 'mod_glossary', 'intro', null);

                // Make sure we have a number of entries per page.
                if (!$glossary->entbypage) {
                    $glossary->entbypage = $CFG->glossary_entbypage;
                }

                // Add the list of browsing modes.
                if (!isset($modes[$glossary->displayformat])) {
                    $modes[$glossary->displayformat] = self::mod_glossary_get_browse_modes_from_display_format($glossary->displayformat);
                }
                $glossary->browsemodes = $modes[$glossary->displayformat];
            }
        }

        $result = array();
        $result['glossaries'] = $glossaries;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_glossaries_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_glossaries_by_courses_returns() {
        return new external_single_structure(array(
            'glossaries' => new external_multiple_structure(
                new external_single_structure(array(
                    'id' => new external_value(PARAM_INT, 'Glossary id'),
                    'coursemodule' => new external_value(PARAM_INT, 'Course module id'),
                    'course' => new external_value(PARAM_INT, 'Course id'),
                    'name' => new external_value(PARAM_RAW, 'Glossary name'),
                    'intro' => new external_value(PARAM_RAW, 'The Glossary intro'),
                    'introformat' => new external_format_value('intro'),
                    'allowduplicatedentries' => new external_value(PARAM_INT, 'If enabled, multiple entries can have the' .
                        ' same concept name'),
                    'displayformat' => new external_value(PARAM_TEXT, 'Display format type'),
                    'mainglossary' => new external_value(PARAM_INT, 'If enabled this glossary is a main glossary.'),
                    'showspecial' => new external_value(PARAM_INT, 'If enabled, participants can browse the glossary by' .
                        ' special characters, such as @ and #'),
                    'showalphabet' => new external_value(PARAM_INT, 'If enabled, participants can browse the glossary by' .
                        ' letters of the alphabet'),
                    'showall' => new external_value(PARAM_INT, 'If enabled, participants can browse all entries at once'),
                    'allowcomments' => new external_value(PARAM_INT, 'If enabled, all participants with permission to' .
                        ' create comments will be able to add comments to glossary entries'),
                    'allowprintview' => new external_value(PARAM_INT, 'If enabled, students are provided with a link to a' .
                        ' printer-friendly version of the glossary. The link is always available to teachers'),
                    'usedynalink' => new external_value(PARAM_INT, 'If site-wide glossary auto-linking has been enabled' .
                        ' by an administrator and this checkbox is ticked, the entry will be automatically linked' .
                        ' wherever the concept words and phrases appear throughout the rest of the course.'),
                    'defaultapproval' => new external_value(PARAM_INT, 'If set to no, entries require approving by a' .
                        ' teacher before they are viewable by everyone.'),
                    'approvaldisplayformat' => new external_value(PARAM_TEXT, 'When approving glossary items you may wish' .
                        ' to use a different display format'),
                    'globalglossary' => new external_value(PARAM_INT, ''),
                    'entbypage' => new external_value(PARAM_INT, 'Entries shown per page'),
                    'editalways' => new external_value(PARAM_INT, 'Always allow editing'),
                    'rsstype' => new external_value(PARAM_INT, 'To enable the RSS feed for this activity, select either' .
                        ' concepts with author or concepts without author to be included in the feed'),
                    'rssarticles' => new external_value(PARAM_INT, 'This setting specifies the number of glossary entry' .
                        ' concepts to include in the RSS feed. Between 5 and 20 generally acceptable'),
                    'assessed' => new external_value(PARAM_INT, 'Aggregate type'),
                    'assesstimestart' => new external_value(PARAM_INT, 'Restrict rating to items created after this'),
                    'assesstimefinish' => new external_value(PARAM_INT, 'Restrict rating to items created before this'),
                    'scale' => new external_value(PARAM_INT, 'Scale ID'),
                    'timecreated' => new external_value(PARAM_INT, 'Time created'),
                    'timemodified' => new external_value(PARAM_INT, 'Time modified'),
                    'completionentries' => new external_value(PARAM_INT, 'Number of entries to complete'),
                    'section' => new external_value(PARAM_INT, 'Section'),
                    'visible' => new external_value(PARAM_INT, 'Visible'),
                    'groupmode' => new external_value(PARAM_INT, 'Group mode'),
                    'groupingid' => new external_value(PARAM_INT, 'Grouping ID'),
                    'browsemodes' => new external_multiple_structure(
                        new external_value(PARAM_ALPHA, 'Modes of browsing allowed')
                    )
                ), 'Glossaries')
            ),
            'warnings' => new external_warnings())
        );
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_view_glossary_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary instance ID'),
            'mode' => new external_value(PARAM_ALPHA, 'The mode in which the glossary is viewed'),
        ));
    }

    /**
     * Notify that the course module was viewed.
     *
     * @param int $id The glossary instance ID.
     * @param string $mode The view mode.
     * @return array of warnings and status result
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_glossary_view_glossary($id, $mode) {
        $params = self::validate_parameters(self::mod_glossary_view_glossary_parameters(), array(
            'id' => $id,
            'mode' => $mode
        ));
        $id = $params['id'];
        $mode = $params['mode'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context, $course, $cm) = self::mod_glossary_validate_glossary($id);

        // Trigger module viewed event.
        glossary_view($glossary, $course, $cm, $context, $mode);

        return array(
            'status' => true,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_view_glossary_returns() {
        return new external_single_structure(array(
            'status' => new external_value(PARAM_BOOL, 'True on success'),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_view_entry_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
        ));
    }

    /**
     * Notify that the entry was viewed.
     *
     * @param int $id The entry ID.
     * @return array of warnings and status result
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_view_entry($id) {
        global $DB, $USER;

        $params = self::validate_parameters(self::mod_glossary_view_entry_parameters(), array('id' => $id));
        $id = $params['id'];
        $warnings = array();

        // Get and validate the glossary.
        $entry = $DB->get_record('glossary_entries', array('id' => $id), '*', MUST_EXIST);
        list($glossary, $context) = self::mod_glossary_validate_glossary($entry->glossaryid);

        if (empty($entry->approved) && $entry->userid != $USER->id && !has_capability('mod/glossary:approve', $context)) {
            throw new invalid_parameter_exception('invalidentry');
        }

        // Trigger view.
        glossary_entry_view($entry, $context);

        return array(
            'status' => true,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_view_entry_returns() {
        return new external_single_structure(array(
            'status' => new external_value(PARAM_BOOL, 'True on success'),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_letter_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'letter' => new external_value(PARAM_ALPHA, 'A letter, or either keywords: \'ALL\' or \'SPECIAL\'.'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries by letter.
     *
     * @param int $id The glossary ID.
     * @param string $letter A letter, or a special keyword.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entries_by_letter($id, $letter, $from, $limit, $options) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_by_letter_parameters(), array(
            'id' => $id,
            'letter' => $letter,
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $letter = $params['letter'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Validate the mode.
        $modes = self::mod_glossary_get_browse_modes_from_display_format($glossary->displayformat);
        if (!in_array('letter', $modes)) {
            throw new invalid_parameter_exception('invalidbrowsemode');
        }

        $entries = array();
        list($records, $count) = glossary_get_entries_by_letter($glossary, $context, $letter, $from, $limit, $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_letter_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_date_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'order' => new external_value(PARAM_ALPHA, 'Order the records by: \'CREATION\' or \'UPDATE\'.',
                VALUE_DEFAULT, 'UPDATE'),
            'sort' => new external_value(PARAM_ALPHA, 'The direction of the order: \'ASC\' or \'DESC\'', VALUE_DEFAULT, 'DESC'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries by date.
     *
     * @param int $id The glossary ID.
     * @param string $order The way to order the records.
     * @param string $sort The direction of the order.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entries_by_date($id, $order, $sort, $from, $limit, $options) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_by_date_parameters(), array(
            'id' => $id,
            'order' => core_text::strtoupper($order),
            'sort' => core_text::strtoupper($sort),
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $order = $params['order'];
        $sort = $params['sort'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        if (!in_array($order, array('CREATION', 'UPDATE'))) {
            throw new invalid_parameter_exception('invalidorder');
        } else if (!in_array($sort, array('ASC', 'DESC'))) {
            throw new invalid_parameter_exception('invalidsort');
        }

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Validate the mode.
        $modes = self::mod_glossary_get_browse_modes_from_display_format($glossary->displayformat);
        if (!in_array('date', $modes)) {
            throw new invalid_parameter_exception('invalidbrowsemode');
        }

        $entries = array();
        list($records, $count) = glossary_get_entries_by_date($glossary, $context, $order, $sort, $from, $limit, $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_date_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_categories_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'The glossary ID'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20)
        ));
    }

    /**
     * Get the categories of a glossary.
     *
     * @param int $id The glossary ID.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @return array Containing count, categories and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_glossary_get_categories($id, $from, $limit) {
        $params = self::validate_parameters(self::mod_glossary_get_categories_parameters(), array(
            'id' => $id,
            'from' => $from,
            'limit' => $limit
        ));
        $id = $params['id'];
        $from = $params['from'];
        $limit = $params['limit'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Fetch the categories.
        $categories = array();
        list($records, $count) = glossary_get_categories($glossary, $from, $limit);
        foreach ($records as $category) {
            $category->name = external_format_string($category->name, $context->id);
            $categories[] = $category;
        }

        return array(
            'count' => $count,
            'categories' => $categories,
            'warnings' => array(),
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_categories_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records.'),
            'categories' => new external_multiple_structure(
                new external_single_structure(array(
                    'id' => new external_value(PARAM_INT, 'The category ID'),
                    'glossaryid' => new external_value(PARAM_INT, 'The glossary ID'),
                    'name' => new external_value(PARAM_RAW, 'The name of the category'),
                    'usedynalink' => new external_value(PARAM_BOOL, 'Whether the category is automatically linked'),
                ))
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_category_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'The glossary ID.'),
            'categoryid' => new external_value(PARAM_INT, 'The category ID. Use \'' . GLOSSARY_SHOW_ALL_CATEGORIES . '\' for all' .
                ' categories, or \'' . GLOSSARY_SHOW_NOT_CATEGORISED . '\' for uncategorised entries.'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries by category.
     *
     * @param int $id The glossary ID.
     * @param int $categoryid The category ID.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entries_by_category($id, $categoryid, $from, $limit, $options) {
        global $DB;

        $params = self::validate_parameters(self::mod_glossary_get_entries_by_category_parameters(), array(
            'id' => $id,
            'categoryid' => $categoryid,
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $categoryid = $params['categoryid'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Validate the mode.
        $modes = self::mod_glossary_get_browse_modes_from_display_format($glossary->displayformat);
        if (!in_array('cat', $modes)) {
            throw new invalid_parameter_exception('invalidbrowsemode');
        }

        // Validate the category.
        if (in_array($categoryid, array(GLOSSARY_SHOW_ALL_CATEGORIES, GLOSSARY_SHOW_NOT_CATEGORISED))) {
            // All good.
        } else if (!$DB->record_exists('glossary_categories', array('id' => $categoryid, 'glossaryid' => $id))) {
            throw new invalid_parameter_exception('invalidcategory');
        }

        // Fetching the entries.
        $entries = array();
        list($records, $count) = glossary_get_entries_by_category($glossary, $context, $categoryid, $from, $limit, $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            if ($record->categoryid === null) {
                $record->categoryid = GLOSSARY_SHOW_NOT_CATEGORISED;
            }
            if (isset($record->categoryname)) {
                $record->categoryname = external_format_string($record->categoryname, $context->id);
            }
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_category_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure(true)
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_authors_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes self even if all of their entries' .
                    ' require approval. When true, also includes authors only having entries pending approval.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Get the authors of a glossary.
     *
     * @param int $id The glossary ID.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, authors and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_glossary_get_authors($id, $from, $limit, $options) {
        global $PAGE;

        $params = self::validate_parameters(self::mod_glossary_get_authors_parameters(), array(
            'id' => $id,
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Fetching the entries.
        list($users, $count) = glossary_get_authors($glossary, $context, $limit, $from, $options);

        $canviewfullnames = has_capability('moodle/site:viewfullnames', $context);
        foreach ($users as $user) {
            $userpicture = new user_picture($user);
            $userpicture->size = 1;

            $author = new stdClass();
            $author->id = $user->id;
            $author->fullname = fullname($user, $canviewfullnames);
            $author->pictureurl = $userpicture->get_url($PAGE)->out(false);
            $authors[] = $author;
        }
        $users->close();

        return array(
            'count' => $count,
            'authors' => $authors,
            'warnings' => array(),
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_authors_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records.'),
            'authors' => new external_multiple_structure(
                new external_single_structure(array(
                    'id' => new external_value(PARAM_INT, 'The user ID'),
                    'fullname' => new external_value(PARAM_NOTAGS, 'The fullname'),
                    'pictureurl' => new external_value(PARAM_URL, 'The picture URL'),
                ))
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_author_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'letter' => new external_value(PARAM_ALPHA, 'First letter of firstname or lastname, or either keywords:'
                . ' \'ALL\' or \'SPECIAL\'.'),
            'field' => new external_value(PARAM_ALPHA, 'Search and order using: \'FIRSTNAME\' or \'LASTNAME\'', VALUE_DEFAULT,
                'LASTNAME'),
            'sort' => new external_value(PARAM_ALPHA, 'The direction of the order: \'ASC\' or \'DESC\'', VALUE_DEFAULT, 'ASC'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries by author.
     *
     * @param int $id The glossary ID.
     * @param string $letter A letter, or a special keyword.
     * @param string $field The field to search from.
     * @param string $sort The direction of the order.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entries_by_author($id, $letter, $field, $sort, $from, $limit, $options) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_by_author_parameters(), array(
            'id' => $id,
            'letter' => $letter,
            'field' => core_text::strtoupper($field),
            'sort' => core_text::strtoupper($sort),
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $letter = $params['letter'];
        $field = $params['field'];
        $sort = $params['sort'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        if (!in_array($field, array('FIRSTNAME', 'LASTNAME'))) {
            throw new invalid_parameter_exception('invalidfield');
        } else if (!in_array($sort, array('ASC', 'DESC'))) {
            throw new invalid_parameter_exception('invalidsort');
        }

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Validate the mode.
        $modes = self::mod_glossary_get_browse_modes_from_display_format($glossary->displayformat);
        if (!in_array('author', $modes)) {
            throw new invalid_parameter_exception('invalidbrowsemode');
        }

        // Fetching the entries.
        $entries = array();
        list($records, $count) = glossary_get_entries_by_author($glossary, $context, $letter, $field, $sort, $from, $limit,
            $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_author_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_author_id_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'authorid' => new external_value(PARAM_INT, 'The author ID'),
            'order' => new external_value(PARAM_ALPHA, 'Order by: \'CONCEPT\', \'CREATION\' or \'UPDATE\'', VALUE_DEFAULT,
                'CONCEPT'),
            'sort' => new external_value(PARAM_ALPHA, 'The direction of the order: \'ASC\' or \'DESC\'', VALUE_DEFAULT, 'ASC'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries by author.
     *
     * @param int $id The glossary ID.
     * @param int $authorid The author ID.
     * @param string $order The way to order the results.
     * @param string $sort The direction of the order.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entries_by_author_id($id, $authorid, $order, $sort, $from, $limit, $options) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_by_author_id_parameters(), array(
            'id' => $id,
            'authorid' => $authorid,
            'order' => core_text::strtoupper($order),
            'sort' => core_text::strtoupper($sort),
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $authorid = $params['authorid'];
        $order = $params['order'];
        $sort = $params['sort'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        if (!in_array($order, array('CONCEPT', 'CREATION', 'UPDATE'))) {
            throw new invalid_parameter_exception('invalidorder');
        } else if (!in_array($sort, array('ASC', 'DESC'))) {
            throw new invalid_parameter_exception('invalidsort');
        }

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Validate the mode.
        $modes = self::mod_glossary_get_browse_modes_from_display_format($glossary->displayformat);
        if (!in_array('author', $modes)) {
            throw new invalid_parameter_exception('invalidbrowsemode');
        }

        // Fetching the entries.
        $entries = array();
        list($records, $count) = glossary_get_entries_by_author_id($glossary, $context, $authorid, $order, $sort, $from,
            $limit, $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_author_id_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_search_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'query' => new external_value(PARAM_NOTAGS, 'The query string'),
            'fullsearch' => new external_value(PARAM_BOOL, 'The query', VALUE_DEFAULT, 1),
            'order' => new external_value(PARAM_ALPHA, 'Order by: \'CONCEPT\', \'CREATION\' or \'UPDATE\'', VALUE_DEFAULT,
                'CONCEPT'),
            'sort' => new external_value(PARAM_ALPHA, 'The direction of the order: \'ASC\' or \'DESC\'', VALUE_DEFAULT, 'ASC'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries using the search.
     *
     * @param int $id The glossary ID.
     * @param string $query The search query.
     * @param bool $fullsearch Whether or not full search is required.
     * @param string $order The way to order the results.
     * @param string $sort The direction of the order.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entries_by_search($id, $query, $fullsearch, $order, $sort, $from, $limit, $options) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_by_search_parameters(), array(
            'id' => $id,
            'query' => $query,
            'fullsearch' => $fullsearch,
            'order' => core_text::strtoupper($order),
            'sort' => core_text::strtoupper($sort),
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $query = $params['query'];
        $fullsearch = $params['fullsearch'];
        $order = $params['order'];
        $sort = $params['sort'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        if (!in_array($order, array('CONCEPT', 'CREATION', 'UPDATE'))) {
            throw new invalid_parameter_exception('invalidorder');
        } else if (!in_array($sort, array('ASC', 'DESC'))) {
            throw new invalid_parameter_exception('invalidsort');
        }

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Fetching the entries.
        $entries = array();
        list($records, $count) = glossary_get_entries_by_search($glossary, $context, $query, $fullsearch, $order, $sort, $from,
            $limit, $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_search_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_term_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'term' => new external_value(PARAM_NOTAGS, 'The entry concept, or alias'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(
                'includenotapproved' => new external_value(PARAM_BOOL, 'When false, includes the non-approved entries created by' .
                    ' the user. When true, also includes the ones that the user has the permission to approve.', VALUE_DEFAULT, 0)
            ), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries using a term matching the concept or alias.
     *
     * @param int $id The glossary ID.
     * @param string $term The term.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @param array $options Array of options.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_glossary_get_entries_by_term($id, $term, $from, $limit, $options) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_by_term_parameters(), array(
            'id' => $id,
            'term' => $term,
            'from' => $from,
            'limit' => $limit,
            'options' => $options,
        ));
        $id = $params['id'];
        $term = $params['term'];
        $from = $params['from'];
        $limit = $params['limit'];
        $options = $params['options'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Fetching the entries.
        $entries = array();
        list($records, $count) = glossary_get_entries_by_term($glossary, $context, $term, $from, $limit, $options);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_by_term_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_to_approve_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
            'letter' => new external_value(PARAM_ALPHA, 'A letter, or either keywords: \'ALL\' or \'SPECIAL\'.'),
            'order' => new external_value(PARAM_ALPHA, 'Order by: \'CONCEPT\', \'CREATION\' or \'UPDATE\'', VALUE_DEFAULT,
                'CONCEPT'),
            'sort' => new external_value(PARAM_ALPHA, 'The direction of the order: \'ASC\' or \'DESC\'', VALUE_DEFAULT, 'ASC'),
            'from' => new external_value(PARAM_INT, 'Start returning records from here', VALUE_DEFAULT, 0),
            'limit' => new external_value(PARAM_INT, 'Number of records to return', VALUE_DEFAULT, 20),
            'options' => new external_single_structure(array(), 'An array of options', VALUE_DEFAULT, array())
        ));
    }

    /**
     * Browse a glossary entries using a term matching the concept or alias.
     *
     * @param int $id The glossary ID.
     * @param string $letter A letter, or a special keyword.
     * @param string $order The way to order the records.
     * @param string $sort The direction of the order.
     * @param int $from Start returning records from here.
     * @param int $limit Number of records to return.
     * @return array Containing count, entries and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_glossary_get_entries_to_approve($id, $letter, $order, $sort, $from, $limit) {
        $params = self::validate_parameters(self::mod_glossary_get_entries_to_approve_parameters(), array(
            'id' => $id,
            'letter' => $letter,
            'order' => $order,
            'sort' => $sort,
            'from' => $from,
            'limit' => $limit
        ));
        $id = $params['id'];
        $letter = $params['letter'];
        $order = $params['order'];
        $sort = $params['sort'];
        $from = $params['from'];
        $limit = $params['limit'];
        $warnings = array();

        // Get and validate the glossary.
        list($glossary, $context) = self::mod_glossary_validate_glossary($id);

        // Check the permissions.
        require_capability('mod/glossary:approve', $context);

        // Fetching the entries.
        $entries = array();
        list($records, $count) = glossary_get_entries_to_approve($glossary, $context, $letter, $order, $sort, $from, $limit);
        foreach ($records as $key => $record) {
            self::mod_glossary_fill_entry_details($record, $context);
            $entries[] = $record;
        }

        return array(
            'count' => $count,
            'entries' => $entries,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entries_to_approve_returns() {
        return new external_single_structure(array(
            'count' => new external_value(PARAM_INT, 'The total number of records matching the request.'),
            'entries' => new external_multiple_structure(
                self::mod_glossary_get_entry_return_structure()
            ),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Returns the description of the external function parameters.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entry_by_id_parameters() {
        return new external_function_parameters(array(
            'id' => new external_value(PARAM_INT, 'Glossary entry ID'),
        ));
    }

    /**
     * Get an entry.
     *
     * @param int $id The entry ID.
     * @return array Containing entry and warnings.
     * @since Moodle 3.1
     * @throws moodle_exception
     * @throws invalid_parameter_exception
     */
    public static function mod_glossary_get_entry_by_id($id) {
        global $DB, $USER;

        $params = self::validate_parameters(self::mod_glossary_get_entry_by_id_parameters(), array('id' => $id));
        $id = $params['id'];
        $warnings = array();

        // Get and validate the glossary.
        $entry = $DB->get_record('glossary_entries', array('id' => $id), '*', MUST_EXIST);
        list($glossary, $context) = self::mod_glossary_validate_glossary($entry->glossaryid);

        if (empty($entry->approved) && $entry->userid != $USER->id && !has_capability('mod/glossary:approve', $context)) {
            throw new invalid_parameter_exception('invalidentry');
        }

        $entry = glossary_get_entry_by_id($id);
        self::mod_glossary_fill_entry_details($entry, $context);

        return array(
            'entry' => $entry,
            'warnings' => $warnings
        );
    }

    /**
     * Returns the description of the external function return value.
     *
     * @return external_description
     * @since Moodle 3.1
     */
    public static function mod_glossary_get_entry_by_id_returns() {
        return new external_single_structure(array(
            'entry' => self::mod_glossary_get_entry_return_structure(),
            'warnings' => new external_warnings()
        ));
    }

    /**
     * Describes the parameters for get_wikis_by_courses.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_wikis_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'Course ID'), 'Array of course ids.', VALUE_DEFAULT, array()
                ),
            )
        );
    }

    /**
     * Returns a list of wikis in a provided list of courses,
     * if no list is provided all wikis that the user can view will be returned.
     *
     * @param array $courseids The courses IDs.
     * @return array Containing a list of warnings and a list of wikis.
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_wikis_by_courses($courseids = array()) {

        $returnedwikis = array();
        $warnings = array();

        $params = self::validate_parameters(self::mod_wiki_get_wikis_by_courses_parameters(), array('courseids' => $courseids));

        $mycourses = array();
        if (empty($params['courseids'])) {
            $mycourses = enrol_get_my_courses();
            $params['courseids'] = array_keys($mycourses);
        }

        // Ensure there are courseids to loop through.
        if (!empty($params['courseids'])) {

            list($courses, $warnings) = external_util::validate_courses($params['courseids'], $mycourses);

            // Get the wikis in this course, this function checks users visibility permissions.
            // We can avoid then additional validate_context calls.
            $wikis = get_all_instances_in_courses('wiki', $courses);

            foreach ($wikis as $wiki) {

                $context = context_module::instance($wiki->coursemodule);

                // Entry to return.
                $module = array();

                // First, we return information that any user can see in (or can deduce from) the web interface.
                $module['id'] = $wiki->id;
                $module['coursemodule'] = $wiki->coursemodule;
                $module['course'] = $wiki->course;
                $module['name']  = external_format_string($wiki->name, $context->id);

                $viewablefields = [];
                if (has_capability('mod/wiki:viewpage', $context)) {
                    list($module['intro'], $module['introformat']) =
                        external_format_text($wiki->intro, $wiki->introformat, $context->id, 'mod_wiki', 'intro', $wiki->id);

                    $viewablefields = array('firstpagetitle', 'wikimode', 'defaultformat', 'forceformat', 'editbegin', 'editend',
                                            'section', 'visible', 'groupmode', 'groupingid');
                }

                // Check additional permissions for returning optional private settings.
                if (has_capability('moodle/course:manageactivities', $context)) {
                    $additionalfields = array('timecreated', 'timemodified');
                    $viewablefields = array_merge($viewablefields, $additionalfields);
                }

                foreach ($viewablefields as $field) {
                    $module[$field] = $wiki->{$field};
                }

                // Check if user can add new pages.
                $module['cancreatepages'] = wiki_can_create_pages($context);

                $returnedwikis[] = $module;
            }
        }

        $result = array();
        $result['wikis'] = $returnedwikis;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_wikis_by_courses return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_wikis_by_courses_returns() {

        return new external_single_structure(
            array(
                'wikis' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Wiki ID.'),
                            'coursemodule' => new external_value(PARAM_INT, 'Course module ID.'),
                            'course' => new external_value(PARAM_INT, 'Course ID.'),
                            'name' => new external_value(PARAM_RAW, 'Wiki name.'),
                            'intro' => new external_value(PARAM_RAW, 'Wiki intro.', VALUE_OPTIONAL),
                            'introformat' => new external_format_value('Wiki intro format.', VALUE_OPTIONAL),
                            'timecreated' => new external_value(PARAM_INT, 'Time of creation.', VALUE_OPTIONAL),
                            'timemodified' => new external_value(PARAM_INT, 'Time of last modification.', VALUE_OPTIONAL),
                            'firstpagetitle' => new external_value(PARAM_RAW, 'First page title.', VALUE_OPTIONAL),
                            'wikimode' => new external_value(PARAM_TEXT, 'Wiki mode (individual, collaborative).', VALUE_OPTIONAL),
                            'defaultformat' => new external_value(PARAM_TEXT, 'Wiki\'s default format (html, creole, nwiki).',
                                                                            VALUE_OPTIONAL),
                            'forceformat' => new external_value(PARAM_INT, '1 if format is forced, 0 otherwise.',
                                                                            VALUE_OPTIONAL),
                            'editbegin' => new external_value(PARAM_INT, 'Edit begin.', VALUE_OPTIONAL),
                            'editend' => new external_value(PARAM_INT, 'Edit end.', VALUE_OPTIONAL),
                            'section' => new external_value(PARAM_INT, 'Course section ID.', VALUE_OPTIONAL),
                            'visible' => new external_value(PARAM_INT, '1 if visible, 0 otherwise.', VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'Group mode.', VALUE_OPTIONAL),
                            'groupingid' => new external_value(PARAM_INT, 'Group ID.', VALUE_OPTIONAL),
                            'cancreatepages' => new external_value(PARAM_BOOL, 'True if user can create pages.'),
                        ), 'Wikis'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for view_wiki.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_view_wiki_parameters() {
        return new external_function_parameters (
            array(
                'wikiid' => new external_value(PARAM_INT, 'Wiki instance ID.')
            )
        );
    }

    /**
     * Trigger the course module viewed event and update the module completion status.
     *
     * @param int $wikiid The wiki instance ID.
     * @return array of warnings and status result.
     * @since Moodle 3.1
     */
    public static function mod_wiki_view_wiki($wikiid) {

        $params = self::validate_parameters(self::mod_wiki_view_wiki_parameters(),
                                            array(
                                                'wikiid' => $wikiid
                                            ));
        $warnings = array();

        // Get wiki instance.
        if (!$wiki = wiki_get_wiki($params['wikiid'])) {
            throw new moodle_exception('incorrectwikiid', 'wiki');
        }

        // Permission validation.
        list($course, $cm) = get_course_and_cm_from_instance($wiki, 'wiki');
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Check if user can view this wiki.
        // We don't use wiki_user_can_view because it requires to have a valid subwiki for the user.
        if (!has_capability('mod/wiki:viewpage', $context)) {
            throw new moodle_exception('cannotviewpage', 'wiki');
        }

        // Trigger course_module_viewed event and completion.
        wiki_view($wiki, $course, $cm, $context);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the view_wiki return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_view_wiki_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'Status: true if success.'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for view_page.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_view_page_parameters() {
        return new external_function_parameters (
            array(
                'pageid' => new external_value(PARAM_INT, 'Wiki page ID.'),
            )
        );
    }

    /**
     * Trigger the page viewed event and update the module completion status.
     *
     * @param int $pageid The page ID.
     * @return array of warnings and status result.
     * @since Moodle 3.1
     * @throws moodle_exception if page is not valid.
     */
    public static function mod_wiki_view_page($pageid) {

        $params = self::mod_wiki_validate_parameters(self::view_page_parameters(),
                                            array(
                                                'pageid' => $pageid
                                            ));
        $warnings = array();

        // Get wiki page.
        if (!$page = wiki_get_page($params['pageid'])) {
            throw new moodle_exception('incorrectpageid', 'wiki');
        }

        // Get wiki instance.
        if (!$wiki = wiki_get_wiki_from_pageid($params['pageid'])) {
            throw new moodle_exception('incorrectwikiid', 'wiki');
        }

        // Permission validation.
        list($course, $cm) = get_course_and_cm_from_instance($wiki, 'wiki');
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Check if user can view this wiki.
        if (!$subwiki = wiki_get_subwiki($page->subwikiid)) {
            throw new moodle_exception('incorrectsubwikiid', 'wiki');
        }
        if (!wiki_user_can_view($subwiki, $wiki)) {
            throw new moodle_exception('cannotviewpage', 'wiki');
        }

        // Trigger page_viewed event and completion.
        wiki_page_view($wiki, $page, $course, $cm, $context);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the view_page return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_view_page_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'Status: true if success.'),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for get_subwikis.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwikis_parameters() {
        return new external_function_parameters (
            array(
                'wikiid' => new external_value(PARAM_INT, 'Wiki instance ID.')
            )
        );
    }

    /**
     * Returns the list of subwikis the user can see in a specific wiki.
     *
     * @param int $wikiid The wiki instance ID.
     * @return array Containing a list of warnings and a list of subwikis.
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwikis($wikiid) {
        global $USER;

        $warnings = array();

        $params = self::validate_parameters(self::mod_wiki_get_subwikis_parameters(), array('wikiid' => $wikiid));

        // Get wiki instance.
        if (!$wiki = wiki_get_wiki($params['wikiid'])) {
            throw new moodle_exception('incorrectwikiid', 'wiki');
        }

        // Validate context and capabilities.
        list($course, $cm) = get_course_and_cm_from_instance($wiki, 'wiki');
        $context = context_module::instance($cm->id);
        self::validate_context($context);
        require_capability('mod/wiki:viewpage', $context);

        $returnedsubwikis = wiki_get_visible_subwikis($wiki, $cm, $context);
        foreach ($returnedsubwikis as $subwiki) {
            $subwiki->canedit = wiki_user_can_edit($subwiki);
        }

        $result = array();
        $result['subwikis'] = $returnedsubwikis;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_subwikis return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwikis_returns() {
        return new external_single_structure(
            array(
                'subwikis' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Subwiki ID.'),
                            'wikiid' => new external_value(PARAM_INT, 'Wiki ID.'),
                            'groupid' => new external_value(PARAM_RAW, 'Group ID.'),
                            'userid' => new external_value(PARAM_INT, 'User ID.'),
                            'canedit' => new external_value(PARAM_BOOL, 'True if user can edit the subwiki.'),
                        ), 'Subwikis'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_subwiki_pages.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwiki_pages_parameters() {
        return new external_function_parameters (
            array(
                'wikiid' => new external_value(PARAM_INT, 'Wiki instance ID.'),
                'groupid' => new external_value(PARAM_INT, 'Subwiki\'s group ID, -1 means current group. It will be ignored'
                                        . ' if the wiki doesn\'t use groups.', VALUE_DEFAULT, -1),
                'userid' => new external_value(PARAM_INT, 'Subwiki\'s user ID, 0 means current user. It will be ignored'
                                        .' in collaborative wikis.', VALUE_DEFAULT, 0),
                'options' => new external_single_structure(
                            array(
                                    'sortby' => new external_value(PARAM_ALPHA,
                                            'Field to sort by (id, title, ...).', VALUE_DEFAULT, 'title'),
                                    'sortdirection' => new external_value(PARAM_ALPHA,
                                            'Sort direction: ASC or DESC.', VALUE_DEFAULT, 'ASC'),
                                    'includecontent' => new external_value(PARAM_INT,
                                            'Include each page contents or not.', VALUE_DEFAULT, 1),
                            ), 'Options', VALUE_DEFAULT, array()),
            )
        );
    }

    /**
     * Returns the list of pages from a specific subwiki.
     *
     * @param int $wikiid The wiki instance ID.
     * @param int $groupid The group ID. If not defined, use current group.
     * @param int $userid The user ID. If not defined, use current user.
     * @param array $options Several options like sort by, sort direction, ...
     * @return array Containing a list of warnings and a list of pages.
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwiki_pages($wikiid, $groupid = -1, $userid = 0, $options = array()) {
        global $USER, $DB;

        $returnedpages = array();
        $warnings = array();

        $params = self::validate_parameters(self::mod_wiki_get_subwiki_pages_parameters(),
                                            array(
                                                'wikiid' => $wikiid,
                                                'groupid' => $groupid,
                                                'userid' => $userid,
                                                'options' => $options
                                                )
            );

        // Get wiki instance.
        if (!$wiki = wiki_get_wiki($params['wikiid'])) {
            throw new moodle_exception('incorrectwikiid', 'wiki');
        }
        list($course, $cm) = get_course_and_cm_from_instance($wiki, 'wiki');
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Determine groupid and userid to use.
        list($groupid, $userid) = self::mod_wiki_determine_group_and_user($cm, $wiki, $params['groupid'], $params['userid']);

        // Get subwiki and validate it.
        $subwiki = self::mod_wiki_get_subwiki($cm, $wiki, $groupid, $userid);

        if ($subwiki->id != -1) {

            // Set sort param.
            $options = $params['options'];
            if (!empty($options['sortby'])) {
                if ($options['sortdirection'] != 'ASC' && $options['sortdirection'] != 'DESC') {
                    // Invalid sort direction. Use default.
                    $options['sortdirection'] = 'ASC';
                }
                $sort = $options['sortby'] . ' ' . $options['sortdirection'];
            }

            $pages = wiki_get_page_list($subwiki->id, $sort);
            $caneditpages = wiki_user_can_edit($subwiki);
            $firstpage = wiki_get_first_page($subwiki->id);

            foreach ($pages as $page) {
                $retpage = array(
                        'id' => $page->id,
                        'subwikiid' => $page->subwikiid,
                        'title' => external_format_string($page->title, $context->id),
                        'timecreated' => $page->timecreated,
                        'timemodified' => $page->timemodified,
                        'timerendered' => $page->timerendered,
                        'userid' => $page->userid,
                        'pageviews' => $page->pageviews,
                        'readonly' => $page->readonly,
                        'caneditpage' => $caneditpages,
                        'firstpage' => $page->id == $firstpage->id
                    );

                // Refresh page cached content if needed.
                if ($page->timerendered + WIKI_REFRESH_CACHE_TIME < time()) {
                    if ($content = wiki_refresh_cachedcontent($page)) {
                        $page = $content['page'];
                    }
                }
                list($cachedcontent, $contentformat) = external_format_text(
                            $page->cachedcontent, FORMAT_HTML, $context->id, 'mod_wiki', 'attachments', $subwiki->id);

                if ($options['includecontent']) {
                    // Return the page content.
                    $retpage['cachedcontent'] = $cachedcontent;
                    $retpage['contentformat'] = $contentformat;
                } else {
                    // Return the size of the content.
                    if (function_exists('mb_strlen') && ((int)ini_get('mbstring.func_overload') & 2)) {
                        $retpage['contentsize'] = mb_strlen($cachedcontent, '8bit');
                    } else {
                        $retpage['contentsize'] = strlen($cachedcontent);
                    }
                }

                $returnedpages[] = $retpage;
            }
        }

        $result = array();
        $result['pages'] = $returnedpages;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_subwiki_pages return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwiki_pages_returns() {

        return new external_single_structure(
            array(
                'pages' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Page ID.'),
                            'subwikiid' => new external_value(PARAM_INT, 'Page\'s subwiki ID.'),
                            'title' => new external_value(PARAM_RAW, 'Page title.'),
                            'timecreated' => new external_value(PARAM_INT, 'Time of creation.'),
                            'timemodified' => new external_value(PARAM_INT, 'Time of last modification.'),
                            'timerendered' => new external_value(PARAM_INT, 'Time of last renderization.'),
                            'userid' => new external_value(PARAM_INT, 'ID of the user that last modified the page.'),
                            'pageviews' => new external_value(PARAM_INT, 'Number of times the page has been viewed.'),
                            'readonly' => new external_value(PARAM_INT, '1 if readonly, 0 otherwise.'),
                            'caneditpage' => new external_value(PARAM_BOOL, 'True if user can edit the page.'),
                            'firstpage' => new external_value(PARAM_BOOL, 'True if it\'s the first page.'),
                            'cachedcontent' => new external_value(PARAM_RAW, 'Page contents.', VALUE_OPTIONAL),
                            'contentformat' => new external_format_value('cachedcontent', VALUE_OPTIONAL),
                            'contentsize' => new external_value(PARAM_INT, 'Size of page contents in bytes (doesn\'t include'.
                                                                            ' size of attached files).', VALUE_OPTIONAL),
                        ), 'Pages'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_page_contents.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_page_contents_parameters() {
        return new external_function_parameters (
            array(
                'pageid' => new external_value(PARAM_INT, 'Page ID.')
            )
        );
    }

    /**
     * Get a page contents.
     *
     * @param int $pageid The page ID.
     * @return array of warnings and page data.
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_page_contents($pageid) {

        $params = self::validate_parameters(self::mod_wiki_get_page_contents_parameters(),
                                            array(
                                                'pageid' => $pageid
                                            )
            );
        $warnings = array();

        // Get wiki page.
        if (!$page = wiki_get_page($params['pageid'])) {
            throw new moodle_exception('incorrectpageid', 'wiki');
        }

        // Get wiki instance.
        if (!$wiki = wiki_get_wiki_from_pageid($params['pageid'])) {
            throw new moodle_exception('incorrectwikiid', 'wiki');
        }

        // Permission validation.
        $cm = get_coursemodule_from_instance('wiki', $wiki->id, $wiki->course);
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Check if user can view this wiki.
        if (!$subwiki = wiki_get_subwiki($page->subwikiid)) {
            throw new moodle_exception('incorrectsubwikiid', 'wiki');
        }
        if (!wiki_user_can_view($subwiki, $wiki)) {
            throw new moodle_exception('cannotviewpage', 'wiki');
        }

        $returnedpage = array();
        $returnedpage['id'] = $page->id;
        $returnedpage['wikiid'] = $wiki->id;
        $returnedpage['subwikiid'] = $page->subwikiid;
        $returnedpage['groupid'] = $subwiki->groupid;
        $returnedpage['userid'] = $subwiki->userid;
        $returnedpage['title'] = $page->title;

        // Refresh page cached content if needed.
        if ($page->timerendered + WIKI_REFRESH_CACHE_TIME < time()) {
            if ($content = wiki_refresh_cachedcontent($page)) {
                $page = $content['page'];
            }
        }

        list($returnedpage['cachedcontent'], $returnedpage['contentformat']) = local_mobile_external_format_text(
                            $page->cachedcontent, FORMAT_HTML, $context->id, 'mod_wiki', 'attachments', $subwiki->id);
        $returnedpage['caneditpage'] = wiki_user_can_edit($subwiki);

        $result = array();
        $result['page'] = $returnedpage;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_page_contents return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_page_contents_returns() {
        return new external_single_structure(
            array(
                'page' => new external_single_structure(
                    array(
                        'id' => new external_value(PARAM_INT, 'Page ID.'),
                        'wikiid' => new external_value(PARAM_INT, 'Page\'s wiki ID.'),
                        'subwikiid' => new external_value(PARAM_INT, 'Page\'s subwiki ID.'),
                        'groupid' => new external_value(PARAM_INT, 'Page\'s group ID.'),
                        'userid' => new external_value(PARAM_INT, 'Page\'s user ID.'),
                        'title' => new external_value(PARAM_RAW, 'Page title.'),
                        'cachedcontent' => new external_value(PARAM_RAW, 'Page contents.'),
                        'contentformat' => new external_format_value('cachedcontent', VALUE_OPTIONAL),
                        'caneditpage' => new external_value(PARAM_BOOL, 'True if user can edit the page.')
                    ), 'Page'
                ),
                'warnings' => new external_warnings()
            )
        );
    }

    /**
     * Describes the parameters for get_subwiki_files.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwiki_files_parameters() {
        return new external_function_parameters (
            array(
                'wikiid' => new external_value(PARAM_INT, 'Wiki instance ID.'),
                'groupid' => new external_value(PARAM_INT, 'Subwiki\'s group ID, -1 means current group. It will be ignored'
                                        . ' if the wiki doesn\'t use groups.', VALUE_DEFAULT, -1),
                'userid' => new external_value(PARAM_INT, 'Subwiki\'s user ID, 0 means current user. It will be ignored'
                                        .' in collaborative wikis.', VALUE_DEFAULT, 0)
            )
        );
    }

    /**
     * Returns the list of files from a specific subwiki.
     *
     * @param int $wikiid The wiki instance ID.
     * @param int $groupid The group ID. If not defined, use current group.
     * @param int $userid The user ID. If not defined, use current user.
     * @return array Containing a list of warnings and a list of files.
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_wiki_get_subwiki_files($wikiid, $groupid = -1, $userid = 0) {

        $returnedfiles = array();
        $warnings = array();

        $params = self::validate_parameters(self::mod_wiki_get_subwiki_files_parameters(),
                                            array(
                                                'wikiid' => $wikiid,
                                                'groupid' => $groupid,
                                                'userid' => $userid
                                                )
            );

        // Get wiki instance.
        if (!$wiki = wiki_get_wiki($params['wikiid'])) {
            throw new moodle_exception('incorrectwikiid', 'wiki');
        }
        list($course, $cm) = get_course_and_cm_from_instance($wiki, 'wiki');
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Determine groupid and userid to use.
        list($groupid, $userid) = self::mod_wiki_determine_group_and_user($cm, $wiki, $params['groupid'], $params['userid']);

        // Get subwiki and validate it.
        $subwiki = self::mod_wiki_get_subwiki($cm, $wiki, $groupid, $userid, 'cannotviewfiles');

        // Get subwiki based on group and user.
        if ($subwiki->id != -1) {
            // The subwiki exists, let's get the files.
            $fs = get_file_storage();
            if ($files = $fs->get_area_files($context->id, 'mod_wiki', 'attachments', $subwiki->id, 'filename', false)) {
                foreach ($files as $file) {
                    $filename = $file->get_filename();
                    $fileurl = moodle_url::make_webservice_pluginfile_url(
                                    $context->id, 'mod_wiki', 'attachments', $subwiki->id, '/', $filename);

                    $returnedfiles[] = array(
                        'filename' => $filename,
                        'mimetype' => $file->get_mimetype(),
                        'fileurl'  => $fileurl->out(false),
                        'filepath' => $file->get_filepath(),
                        'filesize' => $file->get_filesize(),
                        'timemodified' => $file->get_timemodified()
                    );
                }
            }
        }

        $result = array();
        $result['files'] = $returnedfiles;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_subwiki_pages return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_wiki_get_subwiki_files_returns() {

        return new external_single_structure(
            array(
                'files' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'filename' => new external_value(PARAM_FILE, 'File name.'),
                            'filepath' => new external_value(PARAM_PATH, 'File path.'),
                            'filesize' => new external_value(PARAM_INT, 'File size.'),
                            'fileurl' => new external_value(PARAM_URL, 'Downloadable file url.'),
                            'timemodified' => new external_value(PARAM_INT, 'Time modified.'),
                            'mimetype' => new external_value(PARAM_RAW, 'File mime type.'),
                        ), 'Files'
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Utility function for determining the groupid and userid to use.
     *
     * @param stdClass $cm The course module.
     * @param stdClass $wiki The wiki.
     * @param int $groupid Group ID.
     * @param int $userid User ID.
     * @return array Array containing the courseid and userid.
     * @since  Moodle 3.1
     */
    protected static function mod_wiki_determine_group_and_user($cm, $wiki, $groupid, $userid) {
        global $USER;

        $groupmode = groups_get_activity_groupmode($cm);
        if ($groupmode == NOGROUPS) {
            $groupid = 0;
        } else if ($groupid == -1) {
            // Use current group.
            $groupid = groups_get_activity_group($cm);
            $groupid = !empty($groupid) ? $groupid : 0;
        }

        // Determine user.
        if ($wiki->wikimode == 'collaborative') {
            // Collaborative wikis don't use userid in subwikis.
            $userid = 0;
        } else if (empty($userid)) {
            // Use current user.
            $userid = $USER->id;
        }

        return array($groupid, $userid);
    }

    /**
     * Utility function for getting a subwiki by group and user, validating that the user can view it.
     * If the subwiki doesn't exists in DB yet it'll have id -1.
     *
     * @param stdClass $cm The course module.
     * @param stdClass $wiki The wiki.
     * @param int $groupid Group ID. 0 means the subwiki doesn't use groups.
     * @param int $userid User ID. 0 means the subwiki doesn't use users.
     * @param string $error Error to show if the user cannot view the subwiki. By default, 'cannotviewpage'.
     * @param string $errormodule Module to get the error message from. By default, 'wiki'.
     * @return stdClass Subwiki. If it doesn't exists in DB yet it'll have id -1.
     * @since  Moodle 3.1
     * @throws moodle_exception
     */
    protected static function mod_wiki_get_subwiki($cm, $wiki, $groupid, $userid, $error = 'cannotviewpage', $errormodule = 'wiki') {
        global $USER, $DB;

        // Get subwiki based on group and user.
        if (!$subwiki = wiki_get_subwiki_by_group($cm->instance, $groupid, $userid)) {

            // The subwiki doesn't exist.
            // Validate if user is valid.
            if ($userid != 0) {
                $user = core_user::get_user($userid, '*', MUST_EXIST);
                local_mobile_require_active_user($user);
            }

            // Validate that groupid is valid.
            if ($groupid != 0 && !groups_group_exists($groupid)) {
                throw new moodle_exception('cannotfindgroup', 'error');
            }

            // Valid data but subwiki not found. We'll simulate a subwiki object to check if the user would be able to see it
            // if it existed. If he's able to see it then we'll return an empty array because the subwiki has no pages.
            $subwiki = new stdClass();
            $subwiki->id = -1;
            $subwiki->wikiid = $wiki->id;
            $subwiki->userid = $userid;
            $subwiki->groupid = $groupid;
        }

        // Check that the user can view the subwiki. This function checks capabilities.
        if (!wiki_user_can_view($subwiki, $wiki)) {
            throw new moodle_exception($error, $errormodule);
        }

        return $subwiki;
    }

    /**
     * Describes the parameters for get_quizzes_by_courses.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quizzes_by_courses_parameters() {
        return new external_function_parameters (
            array(
                'courseids' => new external_multiple_structure(
                    new external_value(PARAM_INT, 'course id'), 'Array of course ids', VALUE_DEFAULT, array()
                ),
            )
        );
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
                    $quizobj = local_mobile_quiz::create($quiz->id, $USER->id);
                    $accessmanager = new local_mobile_quiz_access_manager($quizobj, $timenow, has_capability('mod/quiz:ignoretimelimits',
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
     * Utility function for validating a quiz.
     *
     * @param int $quizid quiz instance id
     * @return array array containing the quiz, course, context and course module objects
     * @since  Moodle 3.1
     */
    protected static function validate_quiz($quizid) {
        global $DB;

        // Request and permission validation.
        $quiz = $DB->get_record('quiz', array('id' => $quizid), '*', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($quiz, 'quiz');

        $context = context_module::instance($cm->id);
        self::validate_context($context);

        return array($quiz, $course, $cm, $context);
    }

    /**
     * Describes the parameters for view_quiz.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_quiz_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
            )
        );
    }

    /**
     * Trigger the course module viewed event and update the module completion status.
     *
     * @param int $quizid quiz instance id
     * @return array of warnings and status result
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_quiz_view_quiz($quizid) {
        global $DB;

        $params = self::validate_parameters(self::mod_quiz_view_quiz_parameters(), array('quizid' => $quizid));
        $warnings = array();

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        // Trigger course_module_viewed event and completion.
        quiz_view($quiz, $course, $cm, $context);

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the view_quiz return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_quiz_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_user_attempts.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_user_attempts_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
                'userid' => new external_value(PARAM_INT, 'user id, empty for current user', VALUE_DEFAULT, 0),
                'status' => new external_value(PARAM_ALPHA, 'quiz status: all, finished or unfinished', VALUE_DEFAULT, 'finished'),
                'includepreviews' => new external_value(PARAM_BOOL, 'whether to include previews or not', VALUE_DEFAULT, false),

            )
        );
    }

    /**
     * Return a list of attempts for the given quiz and user.
     *
     * @param int $quizid quiz instance id
     * @param int $userid user id
     * @param string $status quiz status: all, finished or unfinished
     * @param bool $includepreviews whether to include previews or not
     * @return array of warnings and the list of attempts
     * @since Moodle 3.1
     * @throws invalid_parameter_exception
     */
    public static function mod_quiz_get_user_attempts($quizid, $userid = 0, $status = 'finished', $includepreviews = false) {
        global $DB, $USER;

        $warnings = array();

        $params = array(
            'quizid' => $quizid,
            'userid' => $userid,
            'status' => $status,
            'includepreviews' => $includepreviews,
        );
        $params = self::validate_parameters(self::mod_quiz_get_user_attempts_parameters(), $params);

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        if (!in_array($params['status'], array('all', 'finished', 'unfinished'))) {
            throw new invalid_parameter_exception('Invalid status value');
        }

        // Default value for userid.
        if (empty($params['userid'])) {
            $params['userid'] = $USER->id;
        }

        $user = core_user::get_user($params['userid'], '*', MUST_EXIST);
        local_mobile_require_active_user($user);

        // Extra checks so only users with permissions can view other users attempts.
        if ($USER->id != $user->id) {
            require_capability('mod/quiz:viewreports', $context);
        }

        $attempts = quiz_get_user_attempts($quiz->id, $user->id, $params['status'], $params['includepreviews']);
        foreach ($attempts as $attempt) {
            $attempt = local_mobile_mod_quiz_add_timemodifiedoffline($attempt);
        }

        $result = array();
        $result['attempts'] = $attempts;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes a single attempt structure.
     *
     * @return external_single_structure the attempt structure
     */
    private static function attempt_structure() {
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
                'timemodifiedoffline' => new external_value(PARAM_INT, 'Last modified time via webservices.', VALUE_OPTIONAL),
                'timecheckstate' => new external_value(PARAM_INT, 'Next time quiz cron should check attempt for
                                                        state changes.  NULL means never check.', VALUE_OPTIONAL),
                'sumgrades' => new external_value(PARAM_FLOAT, 'Total marks for this attempt.', VALUE_OPTIONAL),
            )
        );
    }

    /**
     * Describes the get_user_attempts return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_user_attempts_returns() {
        return new external_single_structure(
            array(
                'attempts' => new external_multiple_structure(self::attempt_structure()),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_user_best_grade.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_user_best_grade_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
                'userid' => new external_value(PARAM_INT, 'user id', VALUE_DEFAULT, 0),
            )
        );
    }

    /**
     * Get the best current grade for the given user on a quiz.
     *
     * @param int $quizid quiz instance id
     * @param int $userid user id
     * @return array of warnings and the grade information
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_user_best_grade($quizid, $userid = 0) {
        global $DB, $USER;

        $warnings = array();

        $params = array(
            'quizid' => $quizid,
            'userid' => $userid,
        );
        $params = self::validate_parameters(self::mod_quiz_get_user_best_grade_parameters(), $params);

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        // Default value for userid.
        if (empty($params['userid'])) {
            $params['userid'] = $USER->id;
        }

        $user = core_user::get_user($params['userid'], '*', MUST_EXIST);
        local_mobile_require_active_user($user);

        // Extra checks so only users with permissions can view other users attempts.
        if ($USER->id != $user->id) {
            require_capability('mod/quiz:viewreports', $context);
        }

        $result = array();
        $grade = quiz_get_best_grade($quiz, $user->id);

        if ($grade === null) {
            $result['hasgrade'] = false;
        } else {
            $result['hasgrade'] = true;
            $result['grade'] = $grade;
        }
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_user_best_grade return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_user_best_grade_returns() {
        return new external_single_structure(
            array(
                'hasgrade' => new external_value(PARAM_BOOL, 'Whether the user has a grade on the given quiz.'),
                'grade' => new external_value(PARAM_FLOAT, 'The grade (only if the user has a grade).', VALUE_OPTIONAL),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_combined_review_options.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_combined_review_options_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
                'userid' => new external_value(PARAM_INT, 'user id (empty for current user)', VALUE_DEFAULT, 0),

            )
        );
    }

    /**
     * Combines the review options from a number of different quiz attempts.
     *
     * @param int $quizid quiz instance id
     * @param int $userid user id (empty for current user)
     * @return array of warnings and the review options
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_combined_review_options($quizid, $userid = 0) {
        global $DB, $USER;

        $warnings = array();

        $params = array(
            'quizid' => $quizid,
            'userid' => $userid,
        );
        $params = self::validate_parameters(self::mod_quiz_get_combined_review_options_parameters(), $params);

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        // Default value for userid.
        if (empty($params['userid'])) {
            $params['userid'] = $USER->id;
        }

        $user = core_user::get_user($params['userid'], '*', MUST_EXIST);
        local_mobile_require_active_user($user);

        // Extra checks so only users with permissions can view other users attempts.
        if ($USER->id != $user->id) {
            require_capability('mod/quiz:viewreports', $context);
        }

        $attempts = quiz_get_user_attempts($quiz->id, $user->id, 'all', true);

        $result = array();
        $result['someoptions'] = [];
        $result['alloptions'] = [];

        list($someoptions, $alloptions) = quiz_get_combined_reviewoptions($quiz, $attempts);

        foreach (array('someoptions', 'alloptions') as $typeofoption) {
            foreach ($$typeofoption as $key => $value) {
                $result[$typeofoption][] = array(
                    "name" => $key,
                    "value" => (!empty($value)) ? $value : 0
                );
            }
        }

        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_combined_review_options return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_combined_review_options_returns() {
        return new external_single_structure(
            array(
                'someoptions' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'option name'),
                            'value' => new external_value(PARAM_INT, 'option value'),
                        )
                    )
                ),
                'alloptions' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'option name'),
                            'value' => new external_value(PARAM_INT, 'option value'),
                        )
                    )
                ),
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
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
                'preflightdata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ), 'Preflight required data (like passwords)', VALUE_DEFAULT, array()
                ),
                'forcenew' => new external_value(PARAM_BOOL, 'Whether to force a new attempt or not.', VALUE_DEFAULT, false),

            )
        );
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
        global $DB, $USER;

        $warnings = array();
        $attempt = array();

        $params = array(
            'quizid' => $quizid,
            'preflightdata' => $preflightdata,
            'forcenew' => $forcenew,
        );
        $params = self::validate_parameters(self::mod_quiz_start_attempt_parameters(), $params);
        $forcenew = $params['forcenew'];

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        $quizobj = local_mobile_quiz::create($cm->instance, $USER->id);

        // Check questions.
        if (!$quizobj->has_questions()) {
            throw new moodle_quiz_exception($quizobj, 'noquestionsfound');
        }

        // Create an object to manage all the other (non-roles) access rules.
        $timenow = time();
        $accessmanager = $quizobj->get_access_manager($timenow);

        // Validate permissions for creating a new attempt and start a new preview attempt if required.
        list($currentattemptid, $attemptnumber, $lastattempt, $messages, $page) =
            quiz_validate_new_attempt($quizobj, $accessmanager, $forcenew, -1, false);

        // Check access.
        if (!$quizobj->is_preview_user() && $messages) {
            // Create warnings with the exact messages.
            foreach ($messages as $message) {
                $warnings[] = array(
                    'item' => 'quiz',
                    'itemid' => $quiz->id,
                    'warningcode' => '1',
                    'message' => clean_text($message, PARAM_TEXT)
                );
            }
        } else {
            if ($accessmanager->is_preflight_check_required($currentattemptid)) {
                // Need to do some checks before allowing the user to continue.

                $provideddata = array();
                foreach ($params['preflightdata'] as $data) {
                    $provideddata[$data['name']] = $data['value'];
                }

                $errors = $accessmanager->validate_preflight_check($provideddata, [], $currentattemptid);

                if (!empty($errors)) {
                    throw new moodle_quiz_exception($quizobj, array_shift($errors));
                }

                // Pre-flight check passed.
                $accessmanager->notify_preflight_check_passed($currentattemptid);
            }

            if ($currentattemptid) {
                if ($lastattempt->state == quiz_attempt::OVERDUE) {
                    throw new moodle_quiz_exception($quizobj, 'stateoverdue');
                } else {
                    throw new moodle_quiz_exception($quizobj, 'attemptstillinprogress');
                }
            }
            $attempt = quiz_prepare_and_start_new_attempt($quizobj, $attemptnumber, $lastattempt);
            // Update the timemodifiedoffline field.
            $timenow = time();
            $attemptobj = new local_mobile_quiz_attempt($attempt, $quiz, $cm, $course);
            $attemptobj->set_offline_modified_time($timenow);
        }

        $result = array();
        $result['attempt'] = local_mobile_mod_quiz_add_timemodifiedoffline($attempt);
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the start_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_start_attempt_returns() {
        return new external_single_structure(
            array(
                'attempt' => self::attempt_structure(),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Utility function for validating a given attempt
     *
     * @param  array $params array of parameters including the attemptid and preflight data
     * @param  bool $checkaccessrules whether to check the quiz access rules or not
     * @param  bool $failifoverdue whether to return error if the attempt is overdue
     * @return  array containing the attempt object and access messages
     * @throws moodle_quiz_exception
     * @since  Moodle 3.1
     */
    protected static function mod_quiz_validate_attempt($params, $checkaccessrules = true, $failifoverdue = true) {
        global $USER;

        $attemptobj = local_mobile_quiz_attempt::create($params['attemptid']);

        $context = context_module::instance($attemptobj->get_cm()->id);
        self::validate_context($context);

        // Check that this attempt belongs to this user.
        if ($attemptobj->get_userid() != $USER->id) {
            throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'notyourattempt');
        }

        // General capabilities check.
        $ispreviewuser = $attemptobj->is_preview_user();
        if (!$ispreviewuser) {
            $attemptobj->require_capability('mod/quiz:attempt');
        }

        // Check the access rules.
        $accessmanager = $attemptobj->get_access_manager(time());
        $messages = array();
        if ($checkaccessrules) {
            // If the attempt is now overdue, or abandoned, deal with that.
            $attemptobj->handle_if_time_expired(time(), true);

            $messages = $accessmanager->prevent_access();
            if (!$ispreviewuser && $messages) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'attempterror');
            }
        }

        // Attempt closed?.
        if ($attemptobj->is_finished()) {
            throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'attemptalreadyclosed');
        } else if ($failifoverdue && $attemptobj->get_state() == quiz_attempt::OVERDUE) {
            throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'stateoverdue');
        }

        // User submitted data (like the quiz password).
        if ($accessmanager->is_preflight_check_required($attemptobj->get_attemptid())) {
            $provideddata = array();
            foreach ($params['preflightdata'] as $data) {
                $provideddata[$data['name']] = $data['value'];
            }

            $errors = $accessmanager->validate_preflight_check($provideddata, [], $params['attemptid']);
            if (!empty($errors)) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), array_shift($errors));
            }
            // Pre-flight check passed.
            $accessmanager->notify_preflight_check_passed($params['attemptid']);
        }

        if (isset($params['page'])) {
            // Check if the page is out of range.
            if ($params['page'] != $attemptobj->force_page_number_into_range($params['page'])) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'Invalid page number');
            }

            // Prevent out of sequence access.
            if (!$attemptobj->check_page_access($params['page'])) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'Out of sequence access');
            }

            // Check slots.
            $slots = $attemptobj->get_slots($params['page']);

            if (empty($slots)) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'noquestionsfound');
            }
        }

        return array($attemptobj, $messages);
    }

    /**
     * Describes a single question structure.
     *
     * @return external_single_structure the question structure
     * @since  Moodle 3.1
     */
    private static function question_structure() {
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
    private static function get_attempt_questions_data(quiz_attempt $attemptobj, $review, $page = 'all') {
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

    /**
     * Describes the parameters for get_attempt_data.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_data_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
                'page' => new external_value(PARAM_INT, 'page number'),
                'preflightdata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ), 'Preflight required data (like passwords)', VALUE_DEFAULT, array()
                )
            )
        );
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

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
            'page' => $page,
            'preflightdata' => $preflightdata,
        );
        $params = self::validate_parameters(self::mod_quiz_get_attempt_data_parameters(), $params);

        list($attemptobj, $messages) = self::mod_quiz_validate_attempt($params);

        if ($attemptobj->is_last_page($params['page'])) {
            $nextpage = -1;
        } else {
            $nextpage = $params['page'] + 1;
        }

        $result = array();
        $result['attempt'] = local_mobile_mod_quiz_add_timemodifiedoffline($attemptobj->get_attempt());
        $result['messages'] = $messages;
        $result['nextpage'] = $nextpage;
        $result['warnings'] = $warnings;
        $result['questions'] = self::get_attempt_questions_data($attemptobj, false, $params['page']);

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
                'attempt' => self::attempt_structure(),
                'messages' => new external_multiple_structure(
                    new external_value(PARAM_TEXT, 'access message'),
                    'access messages, will only be returned for users with mod/quiz:preview capability,
                    for other users this method will throw an exception if there are messages'),
                'nextpage' => new external_value(PARAM_INT, 'next page number'),
                'questions' => new external_multiple_structure(self::question_structure()),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_attempt_summary.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_summary_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
                'preflightdata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ), 'Preflight required data (like passwords)', VALUE_DEFAULT, array()
                )
            )
        );
    }

    /**
     * Returns a summary of a quiz attempt before it is submitted.
     *
     * @param int $attemptid attempt id
     * @param int $preflightdata preflight required data (like passwords)
     * @return array of warnings and the attempt summary data for each question
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_summary($attemptid, $preflightdata = array()) {

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
            'preflightdata' => $preflightdata,
        );
        $params = self::validate_parameters(self::mod_quiz_get_attempt_summary_parameters(), $params);

        list($attemptobj, $messages) = self::mod_quiz_validate_attempt($params, true, false);

        $result = array();
        $result['warnings'] = $warnings;
        $result['questions'] = self::get_attempt_questions_data($attemptobj, false, 'all');

        return $result;
    }

    /**
     * Describes the get_attempt_summary return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_summary_returns() {
        return new external_single_structure(
            array(
                'questions' => new external_multiple_structure(self::question_structure()),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for save_attempt.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_save_attempt_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
                'data' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_RAW, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ), 'the data to be saved'
                ),
                'preflightdata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ), 'Preflight required data (like passwords)', VALUE_DEFAULT, array()
                )
            )
        );
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

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
            'data' => $data,
            'preflightdata' => $preflightdata,
        );
        $params = self::validate_parameters(self::mod_quiz_save_attempt_parameters(), $params);

        // Add a page, required by validate_attempt.
        list($attemptobj, $messages) = self::mod_quiz_validate_attempt($params);

        $transaction = $DB->start_delegated_transaction();
        // Create the $_POST object required by the question engine.
        $_POST = array();
        foreach ($data as $element) {
            $_POST[$element['name']] = $element['value'];
        }
        $timenow = time();
        $attemptobj->process_auto_save($timenow);
        // Update the timemodifiedoffline field.
        $attemptobj->set_offline_modified_time($timenow);
        $transaction->allow_commit();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the save_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_save_attempt_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for process_attempt.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_process_attempt_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
                'data' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_RAW, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ),
                    'the data to be saved', VALUE_DEFAULT, array()
                ),
                'finishattempt' => new external_value(PARAM_BOOL, 'whether to finish or not the attempt', VALUE_DEFAULT, false),
                'timeup' => new external_value(PARAM_BOOL, 'whether the WS was called by a timer when the time is up',
                                                VALUE_DEFAULT, false),
                'preflightdata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'data name'),
                            'value' => new external_value(PARAM_RAW, 'data value'),
                        )
                    ), 'Preflight required data (like passwords)', VALUE_DEFAULT, array()
                )
            )
        );
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

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
            'data' => $data,
            'finishattempt' => $finishattempt,
            'timeup' => $timeup,
            'preflightdata' => $preflightdata,
        );
        $params = self::validate_parameters(self::mod_quiz_process_attempt_parameters(), $params);

        // Do not check access manager rules.
        list($attemptobj, $messages) = self::mod_quiz_validate_attempt($params, false);

        // Create the $_POST object required by the question engine.
        $_POST = array();
        foreach ($params['data'] as $element) {
            $_POST[$element['name']] = $element['value'];
        }
        $timenow = time();
        $finishattempt = $params['finishattempt'];
        $timeup = $params['timeup'];

        $result = array();
        $result['state'] = $attemptobj->process_attempt($timenow, $finishattempt, $timeup, 0);
        // Update the timemodifiedoffline field.
        $attemptobj->set_offline_modified_time($timenow);

        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the process_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_process_attempt_returns() {
        return new external_single_structure(
            array(
                'state' => new external_value(PARAM_ALPHANUMEXT, 'state: the new attempt state:
                                                                    inprogress, finished, overdue, abandoned'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Validate an attempt finished for review. The attempt would be reviewed by a user or a teacher.
     *
     * @param  array $params Array of parameters including the attemptid
     * @return  array containing the attempt object and display options
     * @since  Moodle 3.1
     * @throws  moodle_exception
     * @throws  moodle_quiz_exception
     */
    protected static function mod_quiz_validate_attempt_review($params) {

        $attemptobj = local_mobile_quiz_attempt::create($params['attemptid']);
        $attemptobj->check_review_capability();

        $displayoptions = $attemptobj->get_display_options(true);
        if ($attemptobj->is_own_attempt()) {
            if (!$attemptobj->is_finished()) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'attemptclosed');
            } else if (!$displayoptions->attempt) {
                throw new moodle_exception($attemptobj->cannot_review_message());
            }
        } else if (!$attemptobj->is_review_allowed()) {
            throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'noreviewattempt');
        }
        return array($attemptobj, $displayoptions);
    }

    /**
     * Describes the parameters for get_attempt_review.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_review_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
                'page' => new external_value(PARAM_INT, 'page number, empty for all the questions in all the pages',
                                                VALUE_DEFAULT, -1),
            )
        );
    }

    /**
     * Returns review information for the given finished attempt, can be used by users or teachers.
     *
     * @param int $attemptid attempt id
     * @param int $page page number, empty for all the questions in all the pages
     * @return array of warnings and the attempt data, feedback and questions
     * @since Moodle 3.1
     * @throws  moodle_exception
     * @throws  moodle_quiz_exception
     */
    public static function mod_quiz_get_attempt_review($attemptid, $page = -1) {
        global $PAGE;

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
            'page' => $page,
        );
        $params = self::validate_parameters(self::mod_quiz_get_attempt_review_parameters(), $params);

        list($attemptobj, $displayoptions) = self::mod_quiz_validate_attempt_review($params);

        if ($params['page'] !== -1) {
            $page = $attemptobj->force_page_number_into_range($params['page']);
        } else {
            $page = 'all';
        }

        // Prepare the output.
        $result = array();
        $result['attempt'] = local_mobile_mod_quiz_add_timemodifiedoffline($attemptobj->get_attempt());
        $result['questions'] = self::get_attempt_questions_data($attemptobj, true, $page, true);

        $result['additionaldata'] = array();
        // Summary data (from behaviours).
        $summarydata = $attemptobj->get_additional_summary_data($displayoptions);
        foreach ($summarydata as $key => $data) {
            // This text does not need formatting (no need for external_format_[string|text]).
            $result['additionaldata'][] = array(
                'id' => $key,
                'title' => $data['title'], $attemptobj->get_quizobj()->get_context()->id,
                'content' => $data['content'],
            );
        }

        // Feedback if there is any, and the user is allowed to see it now.
        $grade = quiz_rescale_grade($attemptobj->get_attempt()->sumgrades, $attemptobj->get_quiz(), false);

        $feedback = $attemptobj->get_overall_feedback($grade);
        if ($displayoptions->overallfeedback && $feedback) {
            $result['additionaldata'][] = array(
                'id' => 'feedback',
                'title' => get_string('feedback', 'quiz'),
                'content' => $feedback,
            );
        }

        $result['grade'] = $grade;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_attempt_review return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_review_returns() {
        return new external_single_structure(
            array(
                'grade' => new external_value(PARAM_RAW, 'grade for the quiz (or empty or "notyetgraded")'),
                'attempt' => self::attempt_structure(),
                'additionaldata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_ALPHANUMEXT, 'id of the data'),
                            'title' => new external_value(PARAM_TEXT, 'data title'),
                            'content' => new external_value(PARAM_RAW, 'data content'),
                        )
                    )
                ),
                'questions' => new external_multiple_structure(self::question_structure()),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for view_attempt.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
                'page' => new external_value(PARAM_INT, 'page number'),
            )
        );
    }

    /**
     * Trigger the attempt viewed event.
     *
     * @param int $attemptid attempt id
     * @param int $page page number
     * @return array of warnings and status result
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt($attemptid, $page) {

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
            'page' => $page,
        );
        $params = self::validate_parameters(self::mod_quiz_view_attempt_parameters(), $params);
        list($attemptobj, $messages) = self::mod_quiz_validate_attempt($params);

        // Log action.
        $attemptobj->fire_attempt_viewed_event();

        // Update attempt page, throwing an exception if $page is not valid.
        if (!$attemptobj->set_currentpage($params['page'])) {
            throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'Out of sequence access');
        }

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the view_attempt return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for view_attempt_summary.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_summary_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
            )
        );
    }

    /**
     * Trigger the attempt summary viewed event.
     *
     * @param int $attemptid attempt id
     * @return array of warnings and status result
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_summary($attemptid) {

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
        );
        $params = self::validate_parameters(self::mod_quiz_view_attempt_summary_parameters(), $params);
        list($attemptobj, $messages) = self::mod_quiz_validate_attempt($params);

        // Log action.
        $attemptobj->fire_attempt_summary_viewed_event();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the view_attempt_summary return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_summary_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for view_attempt_review.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_review_parameters() {
        return new external_function_parameters (
            array(
                'attemptid' => new external_value(PARAM_INT, 'attempt id'),
            )
        );
    }

    /**
     * Trigger the attempt reviewed event.
     *
     * @param int $attemptid attempt id
     * @return array of warnings and status result
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_review($attemptid) {

        $warnings = array();

        $params = array(
            'attemptid' => $attemptid,
        );
        $params = self::validate_parameters(self::mod_quiz_view_attempt_review_parameters(), $params);
        list($attemptobj, $displayoptions) = self::mod_quiz_validate_attempt_review($params);

        // Log action.
        $attemptobj->fire_attempt_reviewed_event();

        $result = array();
        $result['status'] = true;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the view_attempt_review return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_view_attempt_review_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_BOOL, 'status: true if success'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for view_quiz.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quiz_feedback_for_grade_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
                'grade' => new external_value(PARAM_FLOAT, 'the grade to check'),
            )
        );
    }

    /**
     * Get the feedback text that should be show to a student who got the given grade in the given quiz.
     *
     * @param int $quizid quiz instance id
     * @param float $grade the grade to check
     * @return array of warnings and status result
     * @since Moodle 3.1
     * @throws moodle_exception
     */
    public static function mod_quiz_get_quiz_feedback_for_grade($quizid, $grade) {
        global $DB;

        $params = array(
            'quizid' => $quizid,
            'grade' => $grade,
        );
        $params = self::validate_parameters(self::mod_quiz_get_quiz_feedback_for_grade_parameters(), $params);
        $warnings = array();

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        $result = array();
        $result['feedbacktext'] = '';
        $result['feedbacktextformat'] = FORMAT_MOODLE;

        $feedback = quiz_feedback_record_for_grade($params['grade'], $quiz);
        if (!empty($feedback->feedbacktext)) {
            list($text, $format) = external_format_text($feedback->feedbacktext, $feedback->feedbacktextformat, $context->id,
                                                        'mod_quiz', 'feedback', $feedback->id);
            $result['feedbacktext'] = $text;
            $result['feedbacktextformat'] = $format;
        }

        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_quiz_feedback_for_grade return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quiz_feedback_for_grade_returns() {
        return new external_single_structure(
            array(
                'feedbacktext' => new external_value(PARAM_RAW, 'the comment that corresponds to this grade (empty for none)'),
                'feedbacktextformat' => new external_format_value('feedbacktext', VALUE_OPTIONAL),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_quiz_access_information.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quiz_access_information_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id')
            )
        );
    }

    /**
     * Return access information for a given quiz.
     *
     * @param int $quizid quiz instance id
     * @return array of warnings and the access information
     * @since Moodle 3.1
     * @throws  moodle_quiz_exception
     */
    public static function mod_quiz_get_quiz_access_information($quizid) {
        global $DB, $USER;

        $warnings = array();

        $params = array(
            'quizid' => $quizid
        );
        $params = self::validate_parameters(self::mod_quiz_get_quiz_access_information_parameters(), $params);

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        $result = array();
        // Capabilities first.
        $result['canattempt'] = has_capability('mod/quiz:attempt', $context);;
        $result['canmanage'] = has_capability('mod/quiz:manage', $context);;
        $result['canpreview'] = has_capability('mod/quiz:preview', $context);;
        $result['canreviewmyattempts'] = has_capability('mod/quiz:reviewmyattempts', $context);;
        $result['canviewreports'] = has_capability('mod/quiz:viewreports', $context);;

        // Access manager now.
        $quizobj = local_mobile_quiz::create($cm->instance, $USER->id);
        $ignoretimelimits = has_capability('mod/quiz:ignoretimelimits', $context, null, false);
        $timenow = time();
        $accessmanager = new local_mobile_quiz_access_manager($quizobj, $timenow, $ignoretimelimits);

        $result['accessrules'] = $accessmanager->describe_rules();
        $result['activerulenames'] = $accessmanager->get_active_rule_names();
        $result['preventaccessreasons'] = $accessmanager->prevent_access();

        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_quiz_access_information return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quiz_access_information_returns() {
        return new external_single_structure(
            array(
                'canattempt' => new external_value(PARAM_BOOL, 'Whether the user can do the quiz or not.'),
                'canmanage' => new external_value(PARAM_BOOL, 'Whether the user can edit the quiz settings or not.'),
                'canpreview' => new external_value(PARAM_BOOL, 'Whether the user can preview the quiz or not.'),
                'canreviewmyattempts' => new external_value(PARAM_BOOL, 'Whether the users can review their previous attempts
                                                                or not.'),
                'canviewreports' => new external_value(PARAM_BOOL, 'Whether the user can view the quiz reports or not.'),
                'accessrules' => new external_multiple_structure(
                                    new external_value(PARAM_TEXT, 'rule description'), 'list of rules'),
                'activerulenames' => new external_multiple_structure(
                                    new external_value(PARAM_PLUGIN, 'rule plugin names'), 'list of active rules'),
                'preventaccessreasons' => new external_multiple_structure(
                                            new external_value(PARAM_TEXT, 'access restriction description'), 'list of reasons'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_attempt_access_information.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_access_information_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id'),
                'attemptid' => new external_value(PARAM_INT, 'attempt id, 0 for the user last attempt if exists', VALUE_DEFAULT, 0),
            )
        );
    }

    /**
     * Return access information for a given attempt in a quiz.
     *
     * @param int $quizid quiz instance id
     * @param int $attemptid attempt id, 0 for the user last attempt if exists
     * @return array of warnings and the access information
     * @since Moodle 3.1
     * @throws  moodle_quiz_exception
     */
    public static function mod_quiz_get_attempt_access_information($quizid, $attemptid = 0) {
        global $DB, $USER;

        $warnings = array();

        $params = array(
            'quizid' => $quizid,
            'attemptid' => $attemptid,
        );
        $params = self::validate_parameters(self::mod_quiz_get_attempt_access_information_parameters(), $params);

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        $attempttocheck = 0;
        if (!empty($params['attemptid'])) {
            $attemptobj = local_mobile_quiz_attempt::create($params['attemptid']);
            if ($attemptobj->get_userid() != $USER->id) {
                throw new moodle_quiz_exception($attemptobj->get_quizobj(), 'notyourattempt');
            }
            $attempttocheck = $attemptobj->get_attempt();
        }

        // Access manager now.
        $quizobj = local_mobile_quiz::create($cm->instance, $USER->id);
        $ignoretimelimits = has_capability('mod/quiz:ignoretimelimits', $context, null, false);
        $timenow = time();
        $accessmanager = new local_mobile_quiz_access_manager($quizobj, $timenow, $ignoretimelimits);

        $attempts = quiz_get_user_attempts($quiz->id, $USER->id, 'finished', true);
        $lastfinishedattempt = end($attempts);
        if ($unfinishedattempt = quiz_get_user_attempt_unfinished($quiz->id, $USER->id)) {
            $attempts[] = $unfinishedattempt;

            // Check if the attempt is now overdue. In that case the state will change.
            $quizobj->create_attempt_object($unfinishedattempt)->handle_if_time_expired(time(), false);

            if ($unfinishedattempt->state != quiz_attempt::IN_PROGRESS and $unfinishedattempt->state != quiz_attempt::OVERDUE) {
                $lastfinishedattempt = $unfinishedattempt;
            }
        }
        $numattempts = count($attempts);

        if (!$attempttocheck) {
            $attempttocheck = $unfinishedattempt ? $unfinishedattempt : $lastfinishedattempt;
        }

        $result = array();
        $result['isfinished'] = $accessmanager->is_finished($numattempts, $lastfinishedattempt);
        $result['preventnewattemptreasons'] = $accessmanager->prevent_new_attempt($numattempts, $lastfinishedattempt);

        if ($attempttocheck) {
            $endtime = $accessmanager->get_end_time($attempttocheck);
            $result['endtime'] = ($endtime === false) ? 0 : $endtime;
            $attemptid = $unfinishedattempt ? $unfinishedattempt->id : null;
            $result['ispreflightcheckrequired'] = $accessmanager->is_preflight_check_required($attemptid);
        }

        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_attempt_access_information return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_attempt_access_information_returns() {
        return new external_single_structure(
            array(
                'endtime' => new external_value(PARAM_INT, 'When the attempt must be submitted (determined by rules).',
                                                VALUE_OPTIONAL),
                'isfinished' => new external_value(PARAM_BOOL, 'Whether there is no way the user will ever be allowed to attempt.'),
                'ispreflightcheckrequired' => new external_value(PARAM_BOOL, 'whether a check is required before the user
                                                                    starts/continues his attempt.', VALUE_OPTIONAL),
                'preventnewattemptreasons' => new external_multiple_structure(
                                                new external_value(PARAM_TEXT, 'access restriction description'),
                                                                    'list of reasons'),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Describes the parameters for get_quiz_required_qtypes.
     *
     * @return external_external_function_parameters
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quiz_required_qtypes_parameters() {
        return new external_function_parameters (
            array(
                'quizid' => new external_value(PARAM_INT, 'quiz instance id')
            )
        );
    }

    /**
     * Return the potential question types that would be required for a given quiz.
     * Please note that for random question types we return the potential question types in the category choosen.
     *
     * @param int $quizid quiz instance id
     * @return array of warnings and the access information
     * @since Moodle 3.1
     * @throws  moodle_quiz_exception
     */
    public static function mod_quiz_get_quiz_required_qtypes($quizid) {
        global $DB, $USER;

        $warnings = array();

        $params = array(
            'quizid' => $quizid
        );
        $params = self::validate_parameters(self::mod_quiz_get_quiz_required_qtypes_parameters(), $params);

        list($quiz, $course, $cm, $context) = self::validate_quiz($params['quizid']);

        $quizobj = local_mobile_quiz::create($cm->instance, $USER->id);
        $quizobj->preload_questions();
        $quizobj->load_questions();

        // Question types used.
        $result = array();
        $result['questiontypes'] = $quizobj->get_all_question_types_used(true);
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Describes the get_quiz_required_qtypes return value.
     *
     * @return external_single_structure
     * @since Moodle 3.1
     */
    public static function mod_quiz_get_quiz_required_qtypes_returns() {
        return new external_single_structure(
            array(
                'questiontypes' => new external_multiple_structure(
                                    new external_value(PARAM_PLUGIN, 'question type'), 'list of question types used in the quiz'),
                'warnings' => new external_warnings(),
            )
        );
    }

}
