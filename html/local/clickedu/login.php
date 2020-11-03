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

require_once('../../config.php');
require_once("$CFG->dirroot/local/clickedu/locallib.php");

$PAGE->set_context(context_system::instance());

$useridnumber = required_param('user', PARAM_RAW);
$courseidnumber = required_param('course', PARAM_RAW);
$requesttime = required_param('time', PARAM_INT);
$requesthash = required_param('hash', PARAM_ALPHANUM);

$loginurl = new moodle_url('/login/index.php');

// Comprueba si la clave está configurada
$key = clickedu_moodle_webservice_token();
if (!$key) {
    redirect($loginurl);
}

// Comprueba si el hash es correcto
$hash = hash_hmac('sha256', "$useridnumber\n$courseidnumber\n$requesttime", $key);
if ($requesthash !== $hash) {
    redirect($loginurl);
}

// Comprueba si el hash ha caducado
if (time() > $requesttime + $CFG->sessiontimeout) {
    redirect($loginurl);
}

// Comprueba si el usuario existe y puede hacer login
$user = get_complete_user_data('idnumber', $useridnumber, $CFG->mnet_localhost_id);
if (!$user or $user->auth != 'manual' or $user->deleted or $user->suspended or isguestuser($user)) {
    redirect($loginurl);
}

// Realiza el login del usuario
complete_user_login($user);

// Redirecciona al curso o a la página principal
$url = new moodle_url('/');
if ($courseidnumber) {
    $courseid = $DB->get_field('course', 'id', array('idnumber' => $courseidnumber));
    if ($courseid and $courseid != SITEID) {
        $url = new moodle_url('/course/view.php', array('id' => $courseid));
    }
}

redirect($url);
