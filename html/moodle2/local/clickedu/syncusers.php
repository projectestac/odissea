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
 * Syncro clickedu users file
 *
 * @author      Adrià Monguillot <amonguillot@clickedu.net>
 * @author      Daniel Ureña Zafra <durenadev@gmail.com>
 * @copyright   2019 CLICKART TALLER DE COMUNICACIÓ, S.L.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('NO_OUTPUT_BUFFERING', true);

require_once('../../config.php');
require_once("$CFG->libdir/adminlib.php");
require_once("$CFG->dirroot/local/clickedu/locallib.php");

require_login();

admin_externalpage_setup('clickedu_syncusers');

clickedu_require_token();

// Comprueba si permiten carácteres extendidos en los nombre  de usaurio
if (empty($CFG->extendedusernamechars)) {
    echo $OUTPUT->header();
    echo $OUTPUT->heading(get_string('syncusers', 'local_clickedu'), 3);
    $title = get_string('extendedusernamechars', 'admin');
    $url = new moodle_url('/admin/settings.php');
    $url->param('section', 'sitepolicies');
    $url->set_anchor('id_s__extendedusernamechars');
    $link = html_writer::link($url, $title);
    $text = get_string('extendedusernamecharsrequired', 'local_clickedu', $link);
    echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
    echo $OUTPUT->footer();
    exit;
}

echo $OUTPUT->header();

$users = clickedu_get_new_users();

if ($users) {
    if (optional_param('confirm', false, PARAM_BOOL)) {
        require_sesskey();
        set_time_limit(0);
        echo html_writer::start_div('clickedu-progressbar');
        $progressbar = new progress_bar();
        $progressbar->create();
        clickedu_create_users($users, $progressbar);
        echo html_writer::end_div();
        $text = get_string('newuserscreated', 'local_clickedu', count($users));
        echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
    } else {
        echo $OUTPUT->heading(get_string('syncusers', 'local_clickedu'), 3);
        $text = html_writer::tag('p', get_string('newusers', 'local_clickedu', count($users)));
        $url = new moodle_url($PAGE->url, array('confirm' => true, 'sesskey' => sesskey()));
        $button = $OUTPUT->single_button($url, get_string('continue'));
        echo html_writer::div($text . $button, 'generalbox', array('id' => 'notice'));
        $table = new html_table;
        $table->attributes['class'] = 'generaltable';
        $table->align = array('left', 'left', 'left', 'left');
        $table->head = array(
            get_string('firstname'),
            get_string('lastname'),
            get_string('email'),
            get_string('username'),
        );
        foreach ($users as $user) {
            $table->data[] = array(
                $user->firstname,
                $user->lastname,
                $user->email,
                $user->username,
            );
        }
        echo html_writer::table($table);
    }
} else {
    $text = get_string('nonewusers', 'local_clickedu');
    echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
}

echo $OUTPUT->footer();
