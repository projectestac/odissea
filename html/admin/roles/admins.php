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
 * Select site administrators.
 *
 * @package    core_role
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

$addusersaction = optional_param('add', false, PARAM_BOOL);
$addusers = optional_param('addusers', '', PARAM_SEQUENCE);
$removeusersaction = optional_param('remove', false, PARAM_BOOL);
$removeusers = optional_param('removeusers', '', PARAM_SEQUENCE);

$PAGE->set_url('/admin/roles/admins.php');

admin_externalpage_setup('admins');
if (!is_siteadmin()) {
    die;
}

// XTEC ************ AFEGIT - Allow access only to xtecadmin.
// 2024.10.16 @aginard
if (!get_protected_agora()) {
    die();
}
// ************ FI

$admisselector = new core_role_admins_existing_selector();

if (array_key_exists('siteadmins', $CFG->config_php_settings)) {
    echo $OUTPUT->header();
    echo $OUTPUT->heading(get_string('manageadmins', 'core_role'), 3);
    echo $OUTPUT->notification(get_string('siteadministratorsconfigphp', 'core_role'), \core\output\notification::NOTIFY_INFO);
    echo $OUTPUT->box_start();
    echo $OUTPUT->paragraph(get_string('existingadmins', 'core_role'));
    $admisselector->display();
    echo $OUTPUT->box_end();
    echo $OUTPUT->footer();
    die();
}

$potentialadmisselector = new core_role_admins_potential_selector();

if ($addusersaction) {
    if ($userstoadd = $potentialadmisselector->get_selected_users()) {
        $usernames = array_map(static function(stdClass $user) use ($potentialadmisselector): string {
            return $potentialadmisselector->output_user($user);
        }, $userstoadd);

        $userids = implode(',', array_keys($usernames));

        echo $OUTPUT->header();
        echo $OUTPUT->confirm(get_string('confirmaddadmins', 'core_role') . html_writer::alist($usernames),
            new moodle_url('/admin/roles/admins.php', ['addusers' => $userids, 'sesskey' => sesskey()]), $PAGE->url);
        echo $OUTPUT->footer();
        die;
    }

} else if ($removeusersaction) {
    if ($userstoremove = $admisselector->get_selected_users()) {

        // Can not remove self.
        $userstoremove = array_filter($userstoremove, static function(int $userid): bool {
            global $USER;
            return $userid != $USER->id;
        }, ARRAY_FILTER_USE_KEY);

        if ($userstoremove) {
            $usernames = array_map(static function(stdClass $user) use ($admisselector): string {
                return $admisselector->output_user($user);
            }, $userstoremove);

            $userids = implode(',', array_keys($usernames));

            echo $OUTPUT->header();
            echo $OUTPUT->confirm(get_string('confirmremoveadmins', 'core_role') . html_writer::alist($usernames),
                new moodle_url('/admin/roles/admins.php', ['removeusers' => $userids, 'sesskey' => sesskey()]), $PAGE->url);
            echo $OUTPUT->footer();
            die;
        }
    }

} else if (optional_param('main', false, PARAM_BOOL) && confirm_sesskey()) {
    // Setting main administrator will choose the first selected user in the case of multiple selections.
    if ($newmain = $admisselector->get_selected_users()) {
        $newmain = reset($newmain);
        $newmain = $newmain->id;
        $admins = array();
        foreach (explode(',', $CFG->siteadmins) as $admin) {
            $admin = (int)$admin;
            if ($admin) {
                $admins[$admin] = $admin;
            }
        }

        if (isset($admins[$newmain])) {
            $logstringold = implode(', ', $admins);

            unset($admins[$newmain]);
            array_unshift($admins, $newmain);

            $logstringnew = implode(', ', $admins);

            set_config('siteadmins', implode(',', $admins));
            add_to_config_log('siteadmins', $logstringold, $logstringnew, null);

            redirect($PAGE->url);
        }
    }

} else if ($addusers && confirm_sesskey()) {
    $admins = array();
    foreach (explode(',', $CFG->siteadmins) as $admin) {
        $admin = (int)$admin;
        if ($admin) {
            $admins[$admin] = $admin;
        }
    }

    $logstringold = implode(', ', $admins);

    foreach (explode(',', $addusers) as $userid) {
        $admins[$userid] = $userid;
    }

    $logstringnew = implode(', ', $admins);

    set_config('siteadmins', implode(',', $admins));
    add_to_config_log('siteadmins', $logstringold, $logstringnew, 'core');

    redirect($PAGE->url);

} else if ($removeusers && confirm_sesskey()) {
    $admins = array();
    foreach (explode(',', $CFG->siteadmins) as $admin) {
        $admin = (int)$admin;
        if ($admin) {
            $admins[$admin] = $admin;
        }
    }

    $logstringold = implode(', ', $admins);

    // Can not remove self.
    foreach (explode(',', $removeusers) as $userid) {
        if ($userid != $USER->id) {
            unset($admins[$userid]);
        }
    }

    $logstringnew = implode(', ', $admins);

    set_config('siteadmins', implode(',', $admins));
    add_to_config_log('siteadmins', $logstringold, $logstringnew, 'core');

    redirect($PAGE->url);
}

// Print header.
echo $OUTPUT->header();
?>

<div id="addadmisform">
    <h3 class="main"><?php print_string('manageadmins', 'core_role'); ?></h3>

    <form id="assignform" method="post" action="<?php echo $PAGE->url ?>">
    <div>
    <input type="hidden" name="sesskey" value="<?php p(sesskey()); ?>" />

    <table class="generaltable generalbox groupmanagementtable boxaligncenter" summary="">
    <tr>
      <td id='existingcell'>
          <p>
            <label for="removeselect"><?php print_string('existingadmins', 'core_role'); ?></label>
          </p>
          <?php $admisselector->display(); ?>
          </td>
      <td id="buttonscell">
        <p class="arrow_button">
            <input name="add" id="add" type="submit" value="<?php echo $OUTPUT->larrow().'&nbsp;'.get_string('add'); ?>"
                   title="<?php print_string('add'); ?>" class="btn btn-secondary"/><br />
            <input name="remove" id="remove" type="submit" value="<?php echo get_string('remove').'&nbsp;'.$OUTPUT->rarrow(); ?>"
                   title="<?php print_string('remove'); ?>" class="btn btn-secondary"/><br />
            <input name="main" id="main" type="submit" value="<?php echo get_string('mainadminset', 'core_role'); ?>"
                   title="<?php print_string('mainadminset', 'core_role'); ?>" class="btn btn-secondary"/>
        </p>
      </td>
      <td id="potentialcell">
          <p>
            <label for="addselect"><?php print_string('users'); ?></label>
          </p>
          <?php $potentialadmisselector->display(); ?>
      </td>
    </tr>
    </table>
    </div>
    </form>
</div>

<?php

echo $OUTPUT->footer();
