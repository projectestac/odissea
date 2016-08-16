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
 * Plugin settings
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {

    $settings = new admin_settingpage('local_mobile', new lang_string('pluginname', 'local_mobile'));
    $ADMIN->add('localplugins', $settings);

    $options = array(
        1 => new lang_string('loginintheapp', 'local_mobile'),
        2 => new lang_string('logininthebrowser', 'local_mobile'),
        3 => new lang_string('loginintheinappbrowser', 'local_mobile'),
    );

    $settings->add(new admin_setting_configselect('local_mobile/typeoflogin',
                        get_string('local_mobiletypeoflogin_key', 'local_mobile'),
                        get_string('local_mobiletypeoflogin', 'local_mobile'), 1, $options));

    $settings->add(new admin_setting_configtext('local_mobile/urlscheme',
                        get_string('local_mobileurlscheme_key', 'local_mobile'),
                        get_string('local_mobileurlscheme', 'local_mobile'), '', PARAM_NOTAGS));

    $url = new moodle_url('/local/mobile/checkconfiguration.php', array('sesskey' => sesskey()));
    $link = html_writer::link($url, get_string('checkpluginconfiguration', 'local_mobile'));
    $settings->add(new admin_setting_heading('checkpluginconfiguration', '', $link));
}