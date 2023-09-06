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
 * Renderer for the grade user report
 *
 * @package   gradereport_user
 * @copyright 2010 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Custom renderer for the user grade report
 *
 * To get an instance of this use the following code:
 * $renderer = $PAGE->get_renderer('gradereport_user');
 *
 * @copyright 2010 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class gradereport_user_renderer extends plugin_renderer_base {

    /**
     * Small rendering function that helps with outputting the relevant user selector.
     *
     * @param string $report
     * @param stdClass $course
     * @param int $userid
     * @param null|int $groupid
     * @param bool $includeall
     * @return string The raw HTML to render.
     * @throws coding_exception
     */
    public function graded_users_selector(string $report, stdClass $course, int $userid, ?int $groupid, bool $includeall): string {

        $select = grade_get_graded_users_select($report, $course, $userid, $groupid, $includeall);
        $output = html_writer::tag('div', $this->output->render($select), ['id' => 'graded_users_selector']);
        $output .= html_writer::tag('p', '', ['style' => 'page-break-after: always;']);

        return $output;
    }

    /**
     * Creates and renders the single select box for the user view.
     *
     * @param int $userid The selected userid
     * @param int $userview The current view user setting constant
     * @return string
     */
    public function view_user_selector(int $userid, int $userview): string {
        global $USER;
        $url = $this->page->url;
        if ($userid != $USER->id) {
            $url->param('userid', $userid);
        }

        $options = [
            GRADE_REPORT_USER_VIEW_USER => get_string('otheruser', 'grades'),
            GRADE_REPORT_USER_VIEW_SELF => get_string('myself', 'grades')
        ];
        $select = new single_select($url, 'userview', $options, $userview, null);

        $select->label = get_string('viewas', 'grades');

        $output = html_writer::tag('div', $this->output->render($select), ['class' => 'view_users_selector']);

        return $output;
    }

    /**
     * Renders the user selector trigger element.
     *
     * @param object $course The course object.
     * @param int|null $userid The user ID.
     * @param int|null $groupid The group ID.
     * @return string The raw HTML to render.
     * @throws coding_exception
     */
    public function users_selector(object $course, ?int $userid = null, ?int $groupid = null): string {

        $data = [
            'courseid' => $course->id,
            'groupid' => $groupid ?? 0,
        ];

        // If a particular option is selected (not in zero state).
        if (!is_null($userid)) {
            if ($userid) { // A single user selected.
                $user = core_user::get_user($userid);
                $data['selectedoption'] = [
                    'image' => $this->user_picture($user, ['size' => 40, 'link' => false]),
                    'text' => fullname($user),
                    'additionaltext' => $user->email,
                ];
            } else { // All users selected.
                // Get the total number of users.
                $defaultgradeshowactiveenrol = !empty($CFG->grade_report_showonlyactiveenrol);
                $showonlyactiveenrol = get_user_preferences('grade_report_showonlyactiveenrol', $defaultgradeshowactiveenrol);
                $showonlyactiveenrol = $showonlyactiveenrol ||
                    !has_capability('moodle/course:viewsuspendedusers', context_course::instance($course->id));
                $gui = new graded_users_iterator($course, null, $groupid);
                $gui->require_active_enrolment($showonlyactiveenrol);
                $gui->init();
                $totalusersnum = 0;
                while ($userdata = $gui->next_user()) {
                    $totalusersnum++;
                }
                $gui->close();

                $data['selectedoption'] = [
                    'text' => get_string('allusersnum', 'gradereport_user', $totalusersnum),
                ];
            }
        }

        $this->page->requires->js_call_amd('gradereport_user/user', 'init');
        return $this->render_from_template('core_grades/user_selector', $data);
    }

    /**
     * Creates and renders previous/next user navigation.
     *
     * @param graded_users_iterator $gui Objects that is used to iterate over a list of gradable users in the course.
     * @param int $userid The ID of the current user.
     * @param int $courseid The course ID.
     * @return string The raw HTML to render.
     */
    public function user_navigation(graded_users_iterator $gui, int $userid, int $courseid): string {

        $navigationdata = [];

        $users = [];
        while ($userdata = $gui->next_user()) {
            $users[$userdata->user->id] = $userdata->user;
        }
        $gui->close();

        $arraykeys = array_keys($users);
        $keynumber = array_search($userid, $arraykeys);

        // Without a valid user or users list, there's nothing to render.
        if ($keynumber === false) {
            return '';
        }

        // Determine directionality so that icons can be modified to suit language.
        $previousarrow = right_to_left() ? 'right' : 'left';
        $nextarrow = right_to_left() ? 'left' : 'right';

        // If the current user is not the first one in the list, find and render the previous user.
        if ($keynumber !== 0) {
            $previoususer = $users[$arraykeys[$keynumber - 1]];
            $navigationdata['previoususer'] = [
                'name' => fullname($previoususer),
                'url' => (new moodle_url('/grade/report/user/index.php', ['id' => $courseid, 'userid' => $previoususer->id]))
                    ->out(false),
                'previousarrow' => $previousarrow
            ];
        }
        // If the current user is not the last one in the list, find and render the last user.
        if ($keynumber < count($users) - 1) {
            $nextuser = $users[$arraykeys[$keynumber + 1]];
            $navigationdata['nextuser'] = [
                'name' => fullname($nextuser),
                'url' => (new moodle_url('/grade/report/user/index.php', ['id' => $courseid, 'userid' => $nextuser->id]))
                    ->out(false),
                'nextarrow' => $nextarrow
            ];
        }

        return $this->render_from_template('gradereport_user/user_navigation', $navigationdata);
    }

    /**
     * Creates and renders 'view report as' selector element.
     *
     * @param int $userid The selected userid
     * @param int $userview The current view user setting constant
     * @param int $courseid The course ID.
     * @return string The raw HTML to render.
     */
    public function view_mode_selector(int $userid, int $userview, int $courseid): string {

        $viewasotheruser = new moodle_url('/grade/report/user/index.php', ['id' => $courseid, 'userid' => $userid,
            'userview' => GRADE_REPORT_USER_VIEW_USER]);
        $viewasmyself = new moodle_url('/grade/report/user/index.php', ['id' => $courseid, 'userid' => $userid,
            'userview' => GRADE_REPORT_USER_VIEW_SELF]);

        $selectoroptions = [
            $viewasotheruser->out(false) => get_string('otheruser', 'core_grades'),
            $viewasmyself->out(false) => get_string('myself', 'core_grades')
        ];

        $selectoractiveurl = $userview === GRADE_REPORT_USER_VIEW_USER ? $viewasotheruser : $viewasmyself;

        $viewasselect = new \core\output\select_menu('viewas', $selectoroptions, $selectoractiveurl->out(false));
        $viewasselect->set_label(get_string('viewas', 'core_grades'));

        return $this->render_from_template('gradereport_user/view_mode_selector',
            $viewasselect->export_for_template($this));
    }
}
