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
 * Self enrolment plugin.
 *
 * @package    enrol_self
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Self enrolment plugin implementation.
 * @author Petr Skoda
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class enrol_self_plugin extends enrol_plugin {

    protected $lasternoller = null;
    protected $lasternollerinstanceid = 0;

    /**
     * Returns optional enrolment information icons.
     *
     * This is used in course list for quick overview of enrolment options.
     *
     * We are not using single instance parameter because sometimes
     * we might want to prevent icon repetition when multiple instances
     * of one type exist. One instance may also produce several icons.
     *
     * @param array $instances all enrol instances of this type in one course
     * @return array of pix_icon
     */
    public function get_info_icons(array $instances) {
        $key = false;
        $nokey = false;
        foreach ($instances as $instance) {
            if ($this->can_self_enrol($instance, false) !== true) {
                // User can not enrol himself.
                // Note that we do not check here if user is already enrolled for performance reasons -
                // such check would execute extra queries for each course in the list of courses and
                // would hide self-enrolment icons from guests.
                continue;
            }
            if ($instance->password or $instance->customint1) {
                $key = true;
            } else {
                $nokey = true;
            }
        }
        $icons = array();
        if ($nokey) {
            $icons[] = new pix_icon('withoutkey', get_string('pluginname', 'enrol_self'), 'enrol_self');
        }
        if ($key) {
            $icons[] = new pix_icon('withkey', get_string('pluginname', 'enrol_self'), 'enrol_self');
        }
        return $icons;
    }

    /**
     * Returns localised name of enrol instance
     *
     * @param stdClass $instance (null is accepted too)
     * @return string
     */
    public function get_instance_name($instance) {
        global $DB;

        if (empty($instance->name)) {
            if (!empty($instance->roleid) and $role = $DB->get_record('role', array('id'=>$instance->roleid))) {
                $role = ' (' . role_get_name($role, context_course::instance($instance->courseid, IGNORE_MISSING)) . ')';
            } else {
                $role = '';
            }
            $enrol = $this->get_name();
            return get_string('pluginname', 'enrol_'.$enrol) . $role;
        } else {
            return format_string($instance->name);
        }
    }

    public function roles_protected() {
        // Users may tweak the roles later.
        return false;
    }

    public function allow_unenrol(stdClass $instance) {
        // Users with unenrol cap may unenrol other users manually manually.
        return true;
    }

    public function allow_manage(stdClass $instance) {
        // Users with manage cap may tweak period and status.
        return true;
    }

    public function show_enrolme_link(stdClass $instance) {

        if (true !== $this->can_self_enrol($instance, false)) {
            return false;
        }

        return true;
    }

    /**
     * Return true if we can add a new instance to this course.
     *
     * @param int $courseid
     * @return boolean
     */
    public function can_add_instance($courseid) {
        $context = context_course::instance($courseid, MUST_EXIST);

        if (!has_capability('moodle/course:enrolconfig', $context) or !has_capability('enrol/self:config', $context)) {
            return false;
        }

        return true;
    }

    /**
     * Returns edit icons for the page with list of instances.
     *
     * @param stdClass $instance
     * @return array
     */
    public function get_action_icons(stdClass $instance): array {
        global $OUTPUT;

        $context = context_course::instance($instance->courseid);

        $icons = [];
        if (has_any_capability(['enrol/self:config', 'moodle/course:editcoursewelcomemessage'], $context)) {
            $linkparams = [
                'courseid' => $instance->courseid,
                'id' => $instance->id,
                'type' => $instance->enrol,
            ];
            $editlink = new moodle_url('/enrol/editinstance.php', $linkparams);
            $icon = new pix_icon('t/edit', get_string('edit'), 'core', ['class' => 'iconsmall']);
            $icons[] = $OUTPUT->action_icon($editlink, $icon);
        }

        return $icons;
    }

    /**
     * Self enrol user to course
     *
     * @param stdClass $instance enrolment instance
     * @param stdClass $data data needed for enrolment.
     * @return bool|array true if enroled else eddor code and messege
     */
    public function enrol_self(stdClass $instance, $data = null) {
        global $DB, $USER, $CFG;

        // Don't enrol user if password is not passed when required.
        if ($instance->password && !isset($data->enrolpassword)) {
            return;
        }

        $timestart = time();
        if ($instance->enrolperiod) {
            $timeend = $timestart + $instance->enrolperiod;
        } else {
            $timeend = 0;
        }

        $this->enrol_user($instance, $USER->id, $instance->roleid, $timestart, $timeend);

        \core\notification::success(get_string('youenrolledincourse', 'enrol'));

        // Test whether the password is also used as a group key.
        if ($instance->password && $instance->customint1) {
            $groups = $DB->get_records('groups', array('courseid'=>$instance->courseid), 'id', 'id, enrolmentkey');
            foreach ($groups as $group) {
                if (empty($group->enrolmentkey)) {
                    continue;
                }
                if ($group->enrolmentkey === $data->enrolpassword) {
                    // Add user to group.
                    require_once($CFG->dirroot.'/group/lib.php');
                    groups_add_member($group->id, $USER->id);
                    break;
                }
            }
        }
    }

    /**
     * Creates course enrol form, checks if form submitted
     * and enrols user if necessary. It can also redirect.
     *
     * @param stdClass $instance
     * @return string html text, usually a form in a text box
     */
    public function enrol_page_hook(stdClass $instance) {
        global $CFG, $OUTPUT, $USER;

        require_once("$CFG->dirroot/enrol/self/locallib.php");

        $enrolstatus = $this->can_self_enrol($instance);

        if (true === $enrolstatus) {
            // This user can self enrol using this instance.
            $form = new enrol_self_enrol_form(null, $instance);
            $instanceid = optional_param('instance', 0, PARAM_INT);
            if ($instance->id == $instanceid) {
                if ($data = $form->get_data()) {
                    $this->enrol_self($instance, $data);
                }
            }
        } else {
            // This user can not self enrol using this instance. Using an empty form to keep
            // the UI consistent with other enrolment plugins that returns a form.
            $data = new stdClass();
            $data->header = $this->get_instance_name($instance);
            $data->info = $enrolstatus;

            // The can_self_enrol call returns a button to the login page if the user is a
            // guest, setting the login url to the form if that is the case.
            $url = isguestuser() ? get_login_url() : null;
            $form = new enrol_self_empty_form($url, $data);
        }

        ob_start();
        $form->display();
        $output = ob_get_clean();
        return $OUTPUT->box($output);
    }

    /**
     * Checks if user can self enrol.
     *
     * @param stdClass $instance enrolment instance
     * @param bool $checkuserenrolment if true will check if user enrolment is inactive.
     *             used by navigation to improve performance.
     * @return bool|string true if successful, else error message or false.
     */
    public function can_self_enrol(stdClass $instance, $checkuserenrolment = true) {
        global $DB, $OUTPUT, $USER;

        if ($checkuserenrolment) {
            if (isguestuser()) {
                // Can not enrol guest.
                return get_string('noguestaccess', 'enrol') . $OUTPUT->continue_button(get_login_url());
            }
            // Check if user is already enroled.
            if ($DB->get_record('user_enrolments', array('userid' => $USER->id, 'enrolid' => $instance->id))) {
                return get_string('canntenrol', 'enrol_self');
            }
        }

        // Check if self enrolment is available right now for users.
        $result = $this->is_self_enrol_available($instance);
        if ($result !== true) {
            return $result;
        }

        // Check if user has the capability to enrol in this context.
        if (!has_capability('enrol/self:enrolself', context_course::instance($instance->courseid))) {
            return get_string('canntenrol', 'enrol_self');
        }

        return true;
    }

    /**
     * Does this plugin support some way to self enrol?
     * This function doesn't check user capabilities. Use can_self_enrol to check capabilities.
     *
     * @param stdClass $instance enrolment instance
     * @return bool - true means "Enrol me in this course" link could be available
     */
    public function is_self_enrol_available(stdClass $instance) {
        global $CFG, $DB, $USER;

        if ($instance->status != ENROL_INSTANCE_ENABLED) {
            return get_string('canntenrol', 'enrol_self');
        }

        if ($instance->enrolstartdate != 0 and $instance->enrolstartdate > time()) {
            return get_string('canntenrolearly', 'enrol_self', userdate($instance->enrolstartdate));
        }

        if ($instance->enrolenddate != 0 and $instance->enrolenddate < time()) {
            return get_string('canntenrollate', 'enrol_self', userdate($instance->enrolenddate));
        }

        if (!$instance->customint6) {
            // New enrols not allowed.
            return get_string('canntenrol', 'enrol_self');
        }

        if ($DB->record_exists('user_enrolments', array('userid' => $USER->id, 'enrolid' => $instance->id))) {
            return get_string('canntenrol', 'enrol_self');
        }

        if ($instance->customint3 > 0) {
            // Max enrol limit specified.
            $count = $DB->count_records('user_enrolments', array('enrolid' => $instance->id));
            if ($count >= $instance->customint3) {
                // Bad luck, no more self enrolments here.
                return get_string('maxenrolledreached', 'enrol_self');
            }
        }

        if ($instance->customint5) {
            require_once("$CFG->dirroot/cohort/lib.php");
            if (!cohort_is_member($instance->customint5, $USER->id)) {
                $cohort = $DB->get_record('cohort', array('id' => $instance->customint5));
                if (!$cohort) {
                    return null;
                }
                $a = format_string($cohort->name, true, array('context' => context::instance_by_id($cohort->contextid)));
                return markdown_to_html(get_string('cohortnonmemberinfo', 'enrol_self', $a));
            }
        }

        return true;
    }

    /**
     * Return information for enrolment instance containing list of parameters required
     * for enrolment, name of enrolment plugin etc.
     *
     * @param stdClass $instance enrolment instance
     * @return stdClass instance info.
     */
    public function get_enrol_info(stdClass $instance) {

        $instanceinfo = new stdClass();
        $instanceinfo->id = $instance->id;
        $instanceinfo->courseid = $instance->courseid;
        $instanceinfo->type = $this->get_name();
        $instanceinfo->name = $this->get_instance_name($instance);
        $instanceinfo->status = $this->can_self_enrol($instance);

        if ($instance->password) {
            $instanceinfo->requiredparam = new stdClass();
            $instanceinfo->requiredparam->enrolpassword = get_string('password', 'enrol_self');
        }

        // If enrolment is possible and password is required then return ws function name to get more information.
        if ((true === $instanceinfo->status) && $instance->password) {
            $instanceinfo->wsfunction = 'enrol_self_get_instance_info';
        }
        return $instanceinfo;
    }

    /**
     * Add new instance of enrol plugin with default settings.
     * @param stdClass $course
     * @return int id of new instance
     */
    public function add_default_instance($course) {
        $fields = $this->get_instance_defaults();

        if ($this->get_config('requirepassword')) {
            $fields['password'] = generate_password(20);
        }

        return $this->add_instance($course, $fields);
    }

    /**
     * Returns defaults for new instances.
     * @return array
     */
    public function get_instance_defaults() {
        $expirynotify = $this->get_config('expirynotify');
        if ($expirynotify == 2) {
            $expirynotify = 1;
            $notifyall = 1;
        } else {
            $notifyall = 0;
        }

        $fields = array();
        $fields['status']          = $this->get_config('status');
        $fields['roleid']          = $this->get_config('roleid');
        $fields['enrolperiod']     = $this->get_config('enrolperiod');
        $fields['expirynotify']    = $expirynotify;
        $fields['notifyall']       = $notifyall;
        $fields['expirythreshold'] = $this->get_config('expirythreshold');
        $fields['customint1']      = $this->get_config('groupkey');
        $fields['customint2']      = $this->get_config('longtimenosee');
        $fields['customint3']      = $this->get_config('maxenrolled');
        $fields['customint4']      = $this->get_config('sendcoursewelcomemessage');
        $fields['customint5']      = 0;
        $fields['customint6']      = $this->get_config('newenrols');

        return $fields;
    }

    /**
     * Send welcome email to specified user.
     *
     * @param stdClass $instance
     * @param stdClass $user user record
     * @return void
     * @deprecated since Moodle 4.4
     * @see \enrol_plugin::send_course_welcome_message_to_user()
     * @todo MDL-81185 Final deprecation in Moodle 4.8.
     */
    #[\core\attribute\deprecated('enrol_plugin::send_course_welcome_message_to_user', since: '4.4', mdl: 'MDL-4188')]
    protected function email_welcome_message($instance, $user) {
        \core\deprecation::emit_deprecation_if_present(__FUNCTION__);
        $this->send_course_welcome_message_to_user(
            instance: $instance,
            userid: $user->id,
            sendoption: $instance->customint4,
            message: $instance->customtext1,
        );
    }

    /**
     * Sync all meta course links.
     *
     * @param progress_trace $trace
     * @param int $courseid one course, empty mean all
     * @return int 0 means ok, 1 means error, 2 means plugin disabled
     */
    public function sync(progress_trace $trace, $courseid = null) {
        global $DB;

        if (!enrol_is_enabled('self')) {
            $trace->finished();
            return 2;
        }

        // Unfortunately this may take a long time, execution can be interrupted safely here.
        core_php_time_limit::raise();
        raise_memory_limit(MEMORY_HUGE);

        $trace->output('Verifying self-enrolments...');

        $params = array('now'=>time(), 'useractive'=>ENROL_USER_ACTIVE, 'courselevel'=>CONTEXT_COURSE);
        $coursesql = "";
        if ($courseid) {
            $coursesql = "AND e.courseid = :courseid";
            $params['courseid'] = $courseid;
        }

        // Note: the logic of self enrolment guarantees that user logged in at least once (=== u.lastaccess set)
        //       and that user accessed course at least once too (=== user_lastaccess record exists).

        // First deal with users that did not log in for a really long time - they do not have user_lastaccess records.
        $sql = "SELECT e.*, ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = 'self' AND e.customint2 > 0)
                  JOIN {user} u ON u.id = ue.userid
                 WHERE :now - u.lastaccess > e.customint2
                       $coursesql";
        $rs = $DB->get_recordset_sql($sql, $params);
        foreach ($rs as $instance) {
            $userid = $instance->userid;
            unset($instance->userid);
            $this->unenrol_user($instance, $userid);
            $days = $instance->customint2 / DAYSECS;
            $trace->output("unenrolling user $userid from course $instance->courseid " .
                "as they did not log in for at least $days days", 1);
        }
        $rs->close();

        // Now unenrol from course user did not visit for a long time.
        $sql = "SELECT e.*, ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = 'self' AND e.customint2 > 0)
                  JOIN {user_lastaccess} ul ON (ul.userid = ue.userid AND ul.courseid = e.courseid)
                 WHERE :now - ul.timeaccess > e.customint2
                       $coursesql";
        $rs = $DB->get_recordset_sql($sql, $params);
        foreach ($rs as $instance) {
            $userid = $instance->userid;
            unset($instance->userid);
            $this->unenrol_user($instance, $userid);
            $days = $instance->customint2 / DAYSECS;
            $trace->output("unenrolling user $userid from course $instance->courseid " .
                "as they did not access the course for at least $days days", 1);
        }
        $rs->close();

        $trace->output('...user self-enrolment updates finished.');
        $trace->finished();

        $this->process_expirations($trace, $courseid);

        return 0;
    }

    /**
     * Notify users about enrolment expiration.
     *
     * Users may be notified by the expiration time of enrollment or unenrollment due to inactivity. The latter is checked in
     * the last condition of the where clause:
     * days of inactivity + number of days in advance to send the notification > days of inactivity allowed before unenrollment
     *
     * @param int $timenow Current time.
     * @param string $name Name of this enrol plugin.
     * @param progress_trace $trace (accepts bool for backwards compatibility only)
     * @return void
     */
    protected function fetch_users_and_notify_expiry(int $timenow, string $name, progress_trace $trace): void {
        global $DB, $CFG;

        $sql = "SELECT ue.*, e.expirynotify, e.notifyall, e.expirythreshold, e.courseid, c.fullname, e.customint2,
                       COALESCE(ul.timeaccess, 0) AS timeaccess, ue.timestart
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = :name AND e.expirynotify > 0  AND e.status = :enabled)
                  JOIN {course} c ON (c.id = e.courseid)
                  JOIN {user} u ON (u.id = ue.userid AND u.deleted = 0 AND u.suspended = 0)
                  LEFT JOIN {user_lastaccess} ul ON (ul.userid = u.id AND ul.courseid = c.id)
                 WHERE ue.status = :active
                       AND ((ue.timeend > 0 AND ue.timeend > :now1 AND ue.timeend < (e.expirythreshold + :now2))
                            OR (e.customint2 > 0 AND (:now3 - COALESCE(ul.timeaccess, 0) + e.expirythreshold > e.customint2)))
              ORDER BY ue.enrolid ASC, u.lastname ASC, u.firstname ASC, u.id ASC";
        $params = [
            'name' => $name,
            'enabled' => ENROL_INSTANCE_ENABLED,
            'active' => ENROL_USER_ACTIVE,
            'now1' => $timenow,
            'now2' => $timenow,
            'now3' => $timenow,
        ];

        $rs = $DB->get_recordset_sql($sql, $params);

        $lastenrollid = 0;
        $users = [];

        foreach ($rs as $ue) {
            $expirycond = ($ue->timeend > 0) && ($ue->timeend > $timenow) && ($ue->timeend < ($ue->expirythreshold + $timenow));
            $inactivitycond = ($ue->customint2 > 0) && (($timenow - $ue->timeaccess + $ue->expirythreshold) > $ue->customint2);

            $user = $DB->get_record('user', ['id' => $ue->userid]);

            if ($expirycond) {
                if ($lastenrollid && $lastenrollid != $ue->enrolid) {
                    $this->notify_expiry_enroller($lastenrollid, $users, $trace);
                    $users = [];
                }
                $lastenrollid = $ue->enrolid;

                $enroller = $this->get_enroller($ue->enrolid);
                $context = context_course::instance($ue->courseid);

                $users[] = [
                    'fullname' => fullname($user, has_capability('moodle/site:viewfullnames', $context, $enroller)),
                    'timeend' => $ue->timeend,
                ];
            }
            // Notifications to inactive users only if inactive time limit is set.
            if ($inactivitycond && $ue->notifyall) {
                $ue->message = 'expiryinactivemessageenrolledbody';
                $lastaccess = $ue->timeaccess;
                if (!$lastaccess) {
                    $lastaccess = $ue->timestart;
                }
                $ue->inactivetime = floor(($timenow - $lastaccess) / DAYSECS);
                $this->notify_expiry_enrolled($user, $ue, $trace);
            }

            if ($expirycond) {
                if (!$ue->notifyall) {
                    continue;
                }

                if ($ue->timeend - $ue->expirythreshold + 86400 < $timenow) {
                    // Notify enrolled users only once at the start of the threshold.
                    $trace->output("user $ue->userid was already notified that enrolment in course $ue->courseid expires on " .
                        userdate($ue->timeend, '', $CFG->timezone), 1);
                    continue;
                }

                $this->notify_expiry_enrolled($user, $ue, $trace);
            }
        }
        $rs->close();

        if ($lastenrollid && $users) {
            $this->notify_expiry_enroller($lastenrollid, $users, $trace);
        }
    }

    /**
     * Returns the user who is responsible for self enrolments in given instance.
     *
     * Usually it is the first editing teacher - the person with "highest authority"
     * as defined by sort_by_roleassignment_authority() having 'enrol/self:manage'
     * capability.
     *
     * @param int $instanceid enrolment instance id
     * @return stdClass user record
     */
    protected function get_enroller($instanceid) {
        global $DB;

        if ($this->lasternollerinstanceid == $instanceid and $this->lasternoller) {
            return $this->lasternoller;
        }

        $instance = $DB->get_record('enrol', array('id'=>$instanceid, 'enrol'=>$this->get_name()), '*', MUST_EXIST);
        $context = context_course::instance($instance->courseid);

        if ($users = get_enrolled_users($context, 'enrol/self:manage')) {
            $users = sort_by_roleassignment_authority($users, $context);
            $this->lasternoller = reset($users);
            unset($users);
        } else {
            $this->lasternoller = parent::get_enroller($instanceid);
        }

        $this->lasternollerinstanceid = $instanceid;

        return $this->lasternoller;
    }

    protected function get_expiry_message_body(stdClass $user, stdClass $ue, string $name,
            stdClass $enroller, context $context): string {
        $a = new stdClass();
        $a->course = format_string($ue->fullname, true, ['context' => $context]);
        $a->user = fullname($user, true);
        // If the enrolment duration is disabled, replace timeend with other data.
        if ($ue->timeend == 0) {
            $timenow = time();
            $lastaccess = $ue->timeaccess > 0 ? $ue->timeaccess : $ue->timestart;
            $ue->timeend = $timenow + ($ue->customint2 - ($timenow - $lastaccess));
        }
        $a->timeend  = userdate($ue->timeend, '', $user->timezone);
        $a->enroller = fullname($enroller, has_capability('moodle/site:viewfullnames', $context, $user));
        if (isset($ue->inactivetime)) {
            $a->inactivetime = $ue->inactivetime;
        }
        $a->url = new moodle_url('/course/view.php', ['id' => $ue->courseid]);
        return get_string($ue->message ?? 'expirymessageenrolledbody', 'enrol_' . $name, $a);
    }

    /**
     * Restore instance and map settings.
     *
     * @param restore_enrolments_structure_step $step
     * @param stdClass $data
     * @param stdClass $course
     * @param int $oldid
     */
    public function restore_instance(restore_enrolments_structure_step $step, stdClass $data, $course, $oldid) {
        global $DB;
        if ($step->get_task()->get_target() == backup::TARGET_NEW_COURSE) {
            $merge = false;
        } else {
            $merge = array(
                'courseid'   => $data->courseid,
                'enrol'      => $this->get_name(),
                'status'     => $data->status,
                'roleid'     => $data->roleid,
            );
        }
        if ($merge and $instances = $DB->get_records('enrol', $merge, 'id')) {
            $instance = reset($instances);
            $instanceid = $instance->id;
        } else {
            if (!empty($data->customint5)) {
                if ($step->get_task()->is_samesite()) {
                    // Keep cohort restriction unchanged - we are on the same site.
                } else {
                    // Use some id that can not exist in order to prevent self enrolment,
                    // because we do not know what cohort it is in this site.
                    $data->customint5 = -1;
                }
            }
            $instanceid = $this->add_instance($course, (array)$data);
        }
        $step->set_mapping('enrol', $oldid, $instanceid);
    }

    /**
     * Restore user enrolment.
     *
     * @param restore_enrolments_structure_step $step
     * @param stdClass $data
     * @param stdClass $instance
     * @param int $oldinstancestatus
     * @param int $userid
     */
    public function restore_user_enrolment(restore_enrolments_structure_step $step, $data, $instance, $userid, $oldinstancestatus) {
        $this->enrol_user($instance, $userid, null, $data->timestart, $data->timeend, $data->status);
    }

    /**
     * Restore role assignment.
     *
     * @param stdClass $instance
     * @param int $roleid
     * @param int $userid
     * @param int $contextid
     */
    public function restore_role_assignment($instance, $roleid, $userid, $contextid) {
        // This is necessary only because we may migrate other types to this instance,
        // we do not use component in manual or self enrol.
        role_assign($roleid, $userid, $contextid, '', 0);
    }

    /**
     * Is it possible to delete enrol instance via standard UI?
     *
     * @param stdClass $instance
     * @return bool
     */
    public function can_delete_instance($instance) {
        $context = context_course::instance($instance->courseid);
        return has_capability('enrol/self:config', $context);
    }

    /**
     * Is it possible to hide/show enrol instance via standard UI?
     *
     * @param stdClass $instance
     * @return bool
     */
    public function can_hide_show_instance($instance) {
        $context = context_course::instance($instance->courseid);

        if (!has_capability('enrol/self:config', $context)) {
            return false;
        }

        // If the instance is currently disabled, before it can be enabled,
        // we must check whether the password meets the password policies.
        if ($instance->status == ENROL_INSTANCE_DISABLED) {
            if ($this->get_config('requirepassword')) {
                if (empty($instance->password)) {
                    return false;
                }
            }
            // Only check the password if it is set.
            if (!empty($instance->password) && $this->get_config('usepasswordpolicy')) {
                if (!check_password_policy($instance->password, $errmsg)) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Return an array of valid options for the status.
     *
     * @return array
     */
    protected function get_status_options() {
        $options = array(ENROL_INSTANCE_ENABLED  => get_string('yes'),
                         ENROL_INSTANCE_DISABLED => get_string('no'));
        return $options;
    }

    /**
     * Return an array of valid options for the newenrols property.
     *
     * @return array
     */
    protected function get_newenrols_options() {
        $options = array(1 => get_string('yes'), 0 => get_string('no'));
        return $options;
    }

    /**
     * Return an array of valid options for the groupkey property.
     *
     * @return array
     */
    protected function get_groupkey_options() {
        $options = array(1 => get_string('yes'), 0 => get_string('no'));
        return $options;
    }

    /**
     * Return an array of valid options for the expirynotify property.
     *
     * @return array
     */
    protected function get_expirynotify_options() {
        $options = array(0 => get_string('no'),
                         1 => get_string('expirynotifyenroller', 'enrol_self'),
                         2 => get_string('expirynotifyall', 'enrol_self'));
        return $options;
    }

    /**
     * Return an array of valid options for the longtimenosee property.
     *
     * @return array
     */
    protected function get_longtimenosee_options() {
        $options = array(0 => get_string('never'),
                         1800 * 3600 * 24 => get_string('numdays', '', 1800),
                         1000 * 3600 * 24 => get_string('numdays', '', 1000),
                         365 * 3600 * 24 => get_string('numdays', '', 365),
                         180 * 3600 * 24 => get_string('numdays', '', 180),
                         150 * 3600 * 24 => get_string('numdays', '', 150),
                         120 * 3600 * 24 => get_string('numdays', '', 120),
                         90 * 3600 * 24 => get_string('numdays', '', 90),
                         60 * 3600 * 24 => get_string('numdays', '', 60),
                         30 * 3600 * 24 => get_string('numdays', '', 30),
                         21 * 3600 * 24 => get_string('numdays', '', 21),
                         14 * 3600 * 24 => get_string('numdays', '', 14),
                         7 * 3600 * 24 => get_string('numdays', '', 7));
        return $options;
    }

    /**
     * The self enrollment plugin has several bulk operations that can be performed.
     * @param course_enrolment_manager $manager
     * @return array
     */
    public function get_bulk_operations(course_enrolment_manager $manager) {
        global $CFG;
        require_once($CFG->dirroot.'/enrol/self/locallib.php');
        $context = $manager->get_context();
        $bulkoperations = array();
        if (has_capability("enrol/self:manage", $context)) {
            $bulkoperations['editselectedusers'] = new enrol_self_editselectedusers_operation($manager, $this);
        }
        if (has_capability("enrol/self:unenrol", $context)) {
            $bulkoperations['deleteselectedusers'] = new enrol_self_deleteselectedusers_operation($manager, $this);
        }
        return $bulkoperations;
    }

    /**
     * Add elements to the edit instance form.
     *
     * @param stdClass $instance
     * @param MoodleQuickForm $mform
     * @param context $context
     * @return bool
     */
    public function edit_instance_form($instance, MoodleQuickForm $mform, $context) {
        global $CFG, $DB;

        // Main fields.
        if (has_capability('enrol/self:config', $context)) {
            // Merge these two settings to one value for the single selection element.
            if ($instance->notifyall && $instance->expirynotify) {
                $instance->expirynotify = 2;
            }
            unset($instance->notifyall);

            $nameattribs = ['size' => '20', 'maxlength' => '255'];
            $mform->addElement('text', 'name', get_string('custominstancename', 'enrol'), $nameattribs);
            $mform->setType('name', PARAM_TEXT);
            $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'server');

            $options = $this->get_status_options();
            $mform->addElement('select', 'status', get_string('status', 'enrol_self'), $options);
            $mform->addHelpButton('status', 'status', 'enrol_self');

            $options = $this->get_newenrols_options();
            $mform->addElement('select', 'customint6', get_string('newenrols', 'enrol_self'), $options);
            $mform->addHelpButton('customint6', 'newenrols', 'enrol_self');
            $mform->disabledIf('customint6', 'status', 'eq', ENROL_INSTANCE_DISABLED);

            $passattribs = ['size' => '20', 'maxlength' => '50'];
            $mform->addElement('passwordunmask', 'password', get_string('password', 'enrol_self'), $passattribs);
            $mform->addHelpButton('password', 'password', 'enrol_self');
            if (empty($instance->id) && $this->get_config('requirepassword')) {
                $mform->addRule('password', get_string('required'), 'required', null, 'client');
            }
            $mform->addRule('password', get_string('maximumchars', '', 50), 'maxlength', 50, 'server');

            $options = $this->get_groupkey_options();
            $mform->addElement('select', 'customint1', get_string('groupkey', 'enrol_self'), $options);
            $mform->addHelpButton('customint1', 'groupkey', 'enrol_self');

            $roles = $this->extend_assignable_roles($context, $instance->roleid);
            $mform->addElement('select', 'roleid', get_string('role', 'enrol_self'), $roles);

            $options = ['optional' => true, 'defaultunit' => 86400];
            $mform->addElement('duration', 'enrolperiod', get_string('enrolperiod', 'enrol_self'), $options);
            $mform->addHelpButton('enrolperiod', 'enrolperiod', 'enrol_self');

            $options = $this->get_expirynotify_options();
            $mform->addElement('select', 'expirynotify', get_string('expirynotify', 'core_enrol'), $options);
            $mform->addHelpButton('expirynotify', 'expirynotify', 'core_enrol');

            $options = ['optional' => false, 'defaultunit' => 86400];
            $mform->addElement('duration', 'expirythreshold', get_string('expirythreshold', 'core_enrol'), $options);
            $mform->addHelpButton('expirythreshold', 'expirythreshold', 'core_enrol');
            $mform->disabledIf('expirythreshold', 'expirynotify', 'eq', 0);

            $options = ['optional' => true];
            $mform->addElement('date_time_selector', 'enrolstartdate', get_string('enrolstartdate', 'enrol_self'), $options);
            $mform->setDefault('enrolstartdate', 0);
            $mform->addHelpButton('enrolstartdate', 'enrolstartdate', 'enrol_self');

            $options = ['optional' => true];
            $mform->addElement('date_time_selector', 'enrolenddate', get_string('enrolenddate', 'enrol_self'), $options);
            $mform->setDefault('enrolenddate', 0);
            $mform->addHelpButton('enrolenddate', 'enrolenddate', 'enrol_self');

            $options = $this->get_longtimenosee_options();
            $mform->addElement('select', 'customint2', get_string('longtimenosee', 'enrol_self'), $options);
            $mform->addHelpButton('customint2', 'longtimenosee', 'enrol_self');

            $mform->addElement('text', 'customint3', get_string('maxenrolled', 'enrol_self'));
            $mform->addHelpButton('customint3', 'maxenrolled', 'enrol_self');
            $mform->setType('customint3', PARAM_INT);

            require_once($CFG->dirroot.'/cohort/lib.php');

            $cohorts = [0 => get_string('no')];
            $allcohorts = cohort_get_available_cohorts($context, 0, 0, 0);
            if ($instance->customint5 && !isset($allcohorts[$instance->customint5])) {
                $c = $DB->get_record('cohort',
                                    ['id' => $instance->customint5],
                                    'id, name, idnumber, contextid, visible',
                                    IGNORE_MISSING);
                if ($c) {
                    // Current cohort was not found because current user can not see it. Still keep it.
                    $allcohorts[$instance->customint5] = $c;
                }
            }
            foreach ($allcohorts as $c) {
                $cohorts[$c->id] = format_string($c->name, true, ['context' => context::instance_by_id($c->contextid)]);
                if ($c->idnumber) {
                    $cohorts[$c->id] .= ' ['.s($c->idnumber).']';
                }
            }
            if ($instance->customint5 && !isset($allcohorts[$instance->customint5])) {
                // Somebody deleted a cohort, better keep the wrong value so that random ppl can not enrol.
                $cohorts[$instance->customint5] = get_string('unknowncohort', 'cohort', $instance->customint5);
            }
            if (count($cohorts) > 1) {
                $mform->addElement('select', 'customint5', get_string('cohortonly', 'enrol_self'), $cohorts);
                $mform->addHelpButton('customint5', 'cohortonly', 'enrol_self');
            } else {
                $mform->addElement('hidden', 'customint5');
                $mform->setType('customint5', PARAM_INT);
                $mform->setConstant('customint5', 0);
            }
        }

        // Course welcome message.
        if (has_any_capability(['enrol/self:config', 'moodle/course:editcoursewelcomemessage'], $context)) {
            $mform->addElement('select', 'customint4', get_string('sendcoursewelcomemessage', 'enrol_self'),
                    enrol_send_welcome_email_options());
            $mform->addHelpButton('customint4', 'sendcoursewelcomemessage', 'enrol_self');

            $options = [
                'cols' => '60',
                'rows' => '8',
            ];
            $mform->addElement('textarea', 'customtext1', get_string('customwelcomemessage', 'core_enrol'), $options);
            $mform->setDefault('customtext1', get_string('customwelcomemessageplaceholder', 'core_enrol'));
            $mform->hideIf(
                elementname: 'customtext1',
                dependenton: 'customint4',
                condition: 'eq',
                value: ENROL_DO_NOT_SEND_EMAIL,
            );

            // Static form elements cannot be hidden by hideIf() so we need to add a dummy group.
            // See: https://tracker.moodle.org/browse/MDL-66251.
            $group[] = $mform->createElement(
                'static',
                'customwelcomemessage_extra_help',
                null,
                get_string(
                    identifier: 'customwelcomemessage_help',
                    component: 'core_enrol',
                ),
            );
            $mform->addGroup($group, 'group_customwelcomemessage_extra_help', '', ' ', false);
            $mform->hideIf(
                elementname: 'group_customwelcomemessage_extra_help',
                dependenton: 'customint4',
                condition: 'eq',
                value: ENROL_DO_NOT_SEND_EMAIL,
            );
        }

        // Enrolment changes warning.
        if (has_capability('enrol/self:config', $context) && enrol_accessing_via_instance($instance)) {
            $warntext = get_string('instanceeditselfwarningtext', 'core_enrol');
            $mform->addElement('static', 'selfwarn', get_string('instanceeditselfwarning', 'core_enrol'), $warntext);
        }
    }

    /**
     * We are a good plugin and don't invent our own UI/validation code path.
     *
     * @return boolean
     */
    public function use_standard_editing_ui() {
        return true;
    }

    /**
     * Perform custom validation of the data used to edit the instance.
     *
     * @param array $data array of ("fieldname"=>value) of submitted data
     * @param array $files array of uploaded files "element_name"=>tmp_file_path
     * @param object $instance The instance loaded from the DB
     * @param context $context The context of the instance we are editing
     * @return array of "element_name"=>"error_description" if there are errors,
     *         or an empty array if everything is OK.
     * @return void
     */
    public function edit_instance_validation($data, $files, $instance, $context) {
        global $CFG;
        require_once("{$CFG->dirroot}/enrol/self/locallib.php");

        $errors = array();

        $checkpassword = false;

        if ($instance->id) {
            // Check the password if we are enabling the plugin again.
            if (($instance->status == ENROL_INSTANCE_DISABLED) && ($data['status'] == ENROL_INSTANCE_ENABLED)) {
                $checkpassword = true;
            }

            // Check the password if the instance is enabled and the password has changed.
            if (($data['status'] == ENROL_INSTANCE_ENABLED) && ($instance->password !== $data['password'])) {
                $checkpassword = true;
            }

            // Check the password if we are enabling group enrolment keys.
            if (!$instance->customint1 && $data['customint1']) {
                $checkpassword = true;
            }
        } else {
            $checkpassword = true;
        }

        if ($checkpassword) {
            $require = $this->get_config('requirepassword');
            $policy = $this->get_config('usepasswordpolicy');
            if ($require and trim($data['password']) === '') {
                $errors['password'] = get_string('required');
            } else if (!empty($data['password'])) {
                if ($policy) {
                    $errmsg = '';
                    if (!check_password_policy($data['password'], $errmsg)) {
                        $errors['password'] = $errmsg;
                    }
                }
                if ($data['customint1'] && enrol_self_check_group_enrolment_key($instance->courseid, $data['password'])) {
                    $errors['password'] = get_string('passwordmatchesgroupkey', 'enrol_self');
                }
            }
        }

        if ($data['status'] == ENROL_INSTANCE_ENABLED) {
            if (!empty($data['enrolenddate']) and $data['enrolenddate'] < $data['enrolstartdate']) {
                $errors['enrolenddate'] = get_string('enrolenddaterror', 'enrol_self');
            }
        }

        // If expirynotify is selected, then ensure the threshold is at least one day.
        if (isset($data['expirynotify']) && $data['expirynotify'] > 0 && $data['expirythreshold'] < DAYSECS) {
            $errors['expirythreshold'] = get_string('errorthresholdlow', 'core_enrol');
        }

        // Now these ones are checked by quickforms, but we may be called by the upload enrolments tool, or a webservive.
        if (array_key_exists('name', $data) && core_text::strlen($data['name']) > 255) {
            $errors['name'] = get_string('err_maxlength', 'form', 255);
        }
        $validstatus = array_keys($this->get_status_options());
        $validnewenrols = array_keys($this->get_newenrols_options());
        if (core_text::strlen($data['password']) > 50) {
            $errors['name'] = get_string('err_maxlength', 'form', 50);
        }
        $validgroupkey = array_keys($this->get_groupkey_options());
        $context = context_course::instance($instance->courseid);
        $validroles = array_keys($this->extend_assignable_roles($context, $instance->roleid));
        $validexpirynotify = array_keys($this->get_expirynotify_options());
        $validlongtimenosee = array_keys($this->get_longtimenosee_options());
        $tovalidate = array(
            'enrolstartdate' => PARAM_INT,
            'enrolenddate' => PARAM_INT,
            'name' => PARAM_TEXT,
            'customint1' => $validgroupkey,
            'customint2' => $validlongtimenosee,
            'customint3' => PARAM_INT,
            'customint4' => PARAM_INT,
            'customint5' => PARAM_INT,
            'customint6' => $validnewenrols,
            'status' => $validstatus,
            'enrolperiod' => PARAM_INT,
            'expirynotify' => $validexpirynotify,
            'roleid' => $validroles
        );
        if (array_key_exists('expirynotify', $data) && $data['expirynotify'] != 0) {
            $tovalidate['expirythreshold'] = PARAM_INT;
        }
        $typeerrors = $this->validate_param_types($data, $tovalidate);
        $errors = array_merge($errors, $typeerrors);

        return $errors;
    }

    /**
     * Add new instance of enrol plugin.
     * @param object $course
     * @param array $fields instance fields
     * @return int id of new instance, null if can not be created
     */
    public function add_instance($course, ?array $fields = null) {
        // In the form we are representing 2 db columns with one field.
        if (!empty($fields) && !empty($fields['expirynotify'])) {
            if ($fields['expirynotify'] == 2) {
                $fields['expirynotify'] = 1;
                $fields['notifyall'] = 1;
            } else {
                $fields['notifyall'] = 0;
            }
        }

        return parent::add_instance($course, $fields);
    }

    /**
     * Update instance of enrol plugin.
     * @param stdClass $instance
     * @param stdClass $data modified instance fields
     * @return boolean
     */
    public function update_instance($instance, $data) {
        // In the form we are representing 2 db columns with one field.
        if ($data->expirynotify == 2) {
            $data->expirynotify = 1;
            $data->notifyall = 1;
        } else {
            $data->notifyall = 0;
        }
        // Keep previous/default value of disabled expirythreshold option.
        if (!$data->expirynotify) {
            $data->expirythreshold = $instance->expirythreshold;
        }
        // Add previous value of newenrols if disabled.
        if (!isset($data->customint6)) {
            $data->customint6 = $instance->customint6;
        }

        return parent::update_instance($instance, $data);
    }

    /**
     * Gets a list of roles that this user can assign for the course as the default for self-enrolment.
     *
     * @param context $context the context.
     * @param integer $defaultrole the id of the role that is set as the default for self-enrolment
     * @return array index is the role id, value is the role name
     */
    public function extend_assignable_roles($context, $defaultrole) {
        global $DB;

        $roles = get_assignable_roles($context, ROLENAME_BOTH);
        if (!isset($roles[$defaultrole])) {
            if ($role = $DB->get_record('role', array('id' => $defaultrole))) {
                $roles[$defaultrole] = role_get_name($role, $context, ROLENAME_BOTH);
            }
        }
        return $roles;
    }

    /**
     * Get the "from" contact which the email will be sent from.
     *
     * @param int $sendoption send email from constant ENROL_SEND_EMAIL_FROM_*
     * @param $context context where the user will be fetched
     * @return mixed|stdClass the contact user object.
     * @deprecated since Moodle 4.4
     * @see \enrol_plugin::get_welcome_message_contact()
     * @todo MDL-81185 Final deprecation in Moodle 4.8.
     */
    #[\core\attribute\deprecated('enrol_plugin::get_welcome_message_contact', since: '4.4', mdl: 'MDL-4188')]
    public function get_welcome_email_contact($sendoption, $context) {
        \core\deprecation::emit_deprecation_if_present(__FUNCTION__);
        return $this->get_welcome_message_contact(
            sendoption: $sendoption,
            context: $context,
        );
    }

    /**
     * Check if enrolment plugin is supported in csv course upload.
     *
     * @return bool
     */
    public function is_csv_upload_supported(): bool {
        return true;
    }

    /**
     * Finds matching instances for a given course.
     *
     * @param array $enrolmentdata enrolment data.
     * @param int $courseid Course ID.
     * @return stdClass|null Matching instance
     */
    public function find_instance(array $enrolmentdata, int $courseid): ?stdClass {

        $instances = enrol_get_instances($courseid, false);
        $instance = null;
        foreach ($instances as $i) {
            if ($i->enrol == 'self') {
                // This is bad - we can not really distinguish between self instances. So grab first available.
                $instance = $i;
                break;
            }
        }
        return $instance;
    }

    /**
     * Fill custom fields data for a given enrolment plugin.
     *
     * @param array $enrolmentdata enrolment data.
     * @param int $courseid Course ID.
     * @return array Updated enrolment data with custom fields info.
     */
    public function fill_enrol_custom_fields(array $enrolmentdata, int $courseid): array {
        return $enrolmentdata + ['password' => ''];
    }

    /**
     * Updates enrol plugin instance with provided data.
     * @param int $courseid Course ID.
     * @param array $enrolmentdata enrolment data.
     * @param stdClass $instance Instance to update.
     *
     * @return stdClass updated instance
     */
    public function update_enrol_plugin_data(int $courseid, array $enrolmentdata, stdClass $instance): stdClass {
        if (!empty($enrolmentdata['password'])) {
            $instance->password = $enrolmentdata['password'];
        }
        return parent::update_enrol_plugin_data($courseid, $enrolmentdata, $instance);
    }

    /**
     * Check if data is valid for a given enrolment plugin
     *
     * @param array $enrolmentdata enrolment data to validate.
     * @param int|null $courseid Course ID.
     * @return array Errors
     */
    public function validate_enrol_plugin_data(array $enrolmentdata, ?int $courseid = null): array {
        global $CFG, $DB;

        require_once($CFG->dirroot . "/enrol/self/locallib.php");

        // If password is omitted or empty in csv it will be generated automatically if it is a required policy.

        $errors = parent::validate_enrol_plugin_data($enrolmentdata, $courseid);
        $policy = $this->get_config('usepasswordpolicy');
        if (!empty($enrolmentdata['password'])) {
            if ($policy) {
                $errarray = get_password_policy_errors($enrolmentdata['password']);
                foreach ($errarray as $i => $err) {
                    $errors['enrol_self' . $i] = $err;
                }
            }

            if ($courseid) {
                // This is bad - no way to identify which instance it is.
                // So if any instance in course uses group key we should error.
                $usegroupenrolmentkeys =
                    $DB->count_records('enrol', ['courseid' => $courseid, 'enrol' => 'self', 'customint1' => 1]);
                if ($usegroupenrolmentkeys && enrol_self_check_group_enrolment_key($courseid, $enrolmentdata['password'])) {
                    $errors['errorpasswordmatchesgroupkey'] =
                        new lang_string('passwordmatchesgroupkey', 'enrol_self', $enrolmentdata['password']);
                }
            }
        }
        return $errors;
    }
}

/**
 * Get icon mapping for font-awesome.
 */
function enrol_self_get_fontawesome_icon_map() {
    return [
        'enrol_self:withkey' => 'fa-key',
        'enrol_self:withoutkey' => 'fa-solid fa-right-to-bracket',
    ];
}
