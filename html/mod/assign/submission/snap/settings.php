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
 * This file defines the admin settings for this plugin.
 *
 * @package   assignsubmission_snap
 * @copyright 2020 Sara Arjona <sara@moodle.com> and Joan Guillén <jguille2@xtec.cat>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    require_once($CFG->dirroot.'/mod/assign/submission/snap/lib.php');

    $settings->add(new admin_setting_configcheckbox('assignsubmission_snap/default',
                   new lang_string('default', 'assignsubmission_snap'),
                   new lang_string('default_help', 'assignsubmission_snap'), 0));

    $exampleDistros = "</br><i>Example with two available distros:</i></br><textarea rows='2' cols='60' disabled>snap | Snap! | https://snap.berkeley.edu/snap/snap.html
snap4arduino | Snap4Arduino | https://snap4arduino.rocks/run/index.html</textarea>";
    $settings->add(new admin_setting_configtextarea('assignsubmission_snap/distros',
                   new lang_string('distros', 'assignsubmission_snap'),
                   new lang_string('distros_help', 'assignsubmission_snap').$exampleDistros,
                   'snap | Snap! | https://snap.berkeley.edu/snap/snap.html',
                   PARAM_RAW, '70', '2'));

    $options = array();
    $options[ASSIGNSUBMISSION_SNAP_CLOUDDISABLED] = get_string('cloud_op_disabled', 'assignsubmission_snap');
    $options[ASSIGNSUBMISSION_SNAP_CLOUDENABLED] = get_string('cloud_op_enabled', 'assignsubmission_snap');
    $options[ASSIGNSUBMISSION_SNAP_CLOUDBYDEFAULT] = get_string('cloud_op_bydefault', 'assignsubmission_snap');

    $settings->add(new admin_setting_configselect('assignsubmission_snap/cloud',
                   new lang_string('cloud', 'assignsubmission_snap'),
                   new lang_string('cloud_help', 'assignsubmission_snap'),
                   ASSIGNSUBMISSION_SNAP_CLOUDDISABLED, $options));

}
