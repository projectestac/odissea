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
 * Global library file
 *
 * @author      Adrià Monguillot <amonguillot@clickedu.net>
 * @author      Daniel Ureña Zafra <durenadev@gmail.com>
 * @copyright   2019 CLICKART TALLER DE COMUNICACIÓ, S.L.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->dirroot/course/lib.php");
require_once("$CFG->dirroot/course/modlib.php");
require_once("$CFG->dirroot/mod/resource/locallib.php");
require_once("$CFG->dirroot/user/lib.php");
require_once("$CFG->libdir/adminlib.php");
require_once("$CFG->libdir/csvlib.class.php");
require_once("$CFG->libdir/formslib.php");
require_once("$CFG->libdir/resourcelib.php");

// Clave de la aplicación proporcionado por ClickArt
define('CLICKEDU_CONS_KEY', '1f76180abe3159af54cca4cfa387ec');
define('CLICKEDU_CONS_SECRET', '050a5cc249');

// Respuestas de clickedu_check_token
define('CLICKEDU_TOKEN_ACCEPTED', 'accepted');
define('CLICKEDU_TOKEN_PENDING', 'pending');
define('CLICKEDU_TOKEN_DENIED', 'denied');
define('CLICKEDU_TOKEN_INVALID', 'invalid');

class clickedu_invalid_response extends moodle_exception {

    public function __construct($path, array $params, $response) {
        if (!is_string($response)) {
            $response = json_encode($response);
        }

        $event = \local_clickedu\event\invalidresponse_received::create_from_response($path, $response);
        $event->trigger();

        $result = json_decode($response);
        if (!empty($result->error)) {
            $string = 'errorresponse';
            $a = $result->error;
        } else {
            $string = 'invalidresponse';
            $a = $response;
        }

        parent::__construct($string, 'local_clickedu', '' , $a, "$path => $response");
    }
}

class clickedu_login_form extends moodleform {

    public function definition() {
        global $CFG;

        $mform = $this->_form;

        $html = html_writer::tag('p', get_string('authenticationdesc', 'local_clickedu'));
        $mform->addElement('static', 'desc', '', $html);

        $mform->addElement('text', 'username', get_string('username'));
        $mform->setType('username', PARAM_RAW);

        $mform->addElement('password', 'password', get_string('password'));
        $mform->setType('password', PARAM_RAW);

        $mform->addElement('static', 'error', '');

        $mform->addElement('submit', 'submit', get_string('login'));
    }

    public function validation($data, $files) {
        $errors = array();
        if (!clickedu_login($data['username'], $data['password'])) {
            $errors['error'] = get_string('invalidlogin');
        }
        return $errors;
    }
}

class clickedu_moodle_webservice_setting extends admin_setting_configcheckbox {

    public function __construct($name, $visiblename, $description) {
        parent::__construct($name, $visiblename, $description, '0', '1', '0');
    }

    public function get_setting() {
        $value = get_config($this->plugin, $this->name);
        if ($value === false) {
            $value = null;
        }
        if ($value === $this->yes and !clickedu_moodle_webservice_configured()) {
            $value = $this->no;
        }
        return $value;
    }

    public function write_setting($data) {
        global $DB;

        $enable = ((string) $data === $this->yes);

        if ($enable) {
            clickedu_setup_moodle_webservice();
        }

        $DB->set_field('external_services', 'enabled', $enable, array('component' => 'local_clickedu'));

        set_config($this->name, $data, $this->plugin);

        return '';
    }
}

class clickedu_moodle_webservice_token_setting extends admin_setting_configpasswordunmask {

    public function __construct($name, $visiblename, $description) {
        parent::__construct($name, $visiblename, $description, '', PARAM_RAW, 50);
    }

    public function get_setting() {
        return clickedu_moodle_webservice_token();
    }

    public function write_setting($data) {
        global $CFG, $DB;

        if ($data) {
            clickedu_setup_moodle_webservice();
        }

        $conditions = array('component' => 'local_clickedu');
        $serviceid = $DB->get_field('external_services', 'id', $conditions);

        $conditions = array('username' => 'clickedu', 'mnethostid' => $CFG->mnet_localhost_id);
        $userid = $DB->get_field('user', 'id', $conditions);

        $conditions = array('externalserviceid' => $serviceid, 'userid' => $userid);
        if ($data) {
            if ($DB->record_exists('external_tokens', $conditions)) {
                $DB->set_field('external_tokens', 'token', $data, $conditions);
            } else {
                $context = context_system::instance();
                $record = new stdClass;
                $record->externalserviceid = $serviceid;
                $record->userid = $userid;
                $record->token = $data;
                $record->tokentype = 0;
                $record->contextid = $context->id;
                $record->creatorid = $userid;
                $record->timecreated = time();
                $DB->insert_record('external_tokens', $record);
            }
        } else {
            $DB->delete_records('external_tokens', $conditions);
        }

        return '';
    }
}

function clickedu_check_token() {
    $id = get_user_preferences('clickedu_id');
    $token = get_user_preferences('clickedu_token');
    $secret = get_user_preferences('clickedu_secret');

    if (!$id or !$token or !$secret) {
        return CLICKEDU_TOKEN_INVALID;
    }

    $path = '/ws/ws_validated.php';
    $params = array(
        'cons_key' => CLICKEDU_CONS_KEY,
        'id_usuari' => $id,
        'auth_token' => $token,
        'auth_secret' => $secret,
        'ind_pm' => false,
    );
    $result = clickedu_webservice_call($path, $params);

    if (!empty($result['validat'])) {
        return CLICKEDU_TOKEN_ACCEPTED;
    } else if (isset($result['error']) or !isset($result['status'])) {
        return CLICKEDU_TOKEN_INVALID;
    } else if ($result['status'] == 2) {
        return CLICKEDU_TOKEN_DENIED;
    } else if ($result['status'] == 3) {
        return CLICKEDU_TOKEN_PENDING;
    }

    throw new clickedu_invalid_response($path, $params, $result);
}

function clickedu_get_course_enrolments($courseid) {
    global $DB;

    if (!$courseid) {
        return array(array(), array());
    }

    $teacherroleid = get_config('local_clickedu', 'teacherrole');
    $studentroleid = get_config('local_clickedu', 'studentrole');

    $sql = 'SELECT ra.id, ra.userid, ra.roleid
            FROM {context} ctx
            JOIN {role_assignments} ra ON ra.contextid = ctx.id
            JOIN {enrol} e ON e.courseid = ctx.instanceid
            JOIN {user_enrolments} ue ON ue.enrolid = e.id AND ue.userid = ra.userid
            WHERE ctx.instanceid = :instanceid
            AND ctx.contextlevel = :contextlevel
            AND e.enrol = :enrol
            AND ra.roleid IN (:studentroleid, :teacherroleid)
            ORDER BY ra.userid';
    $params = array(
        'contextlevel' => CONTEXT_COURSE,
        'instanceid' => $courseid,
        'enrol' => 'manual',
        'studentroleid' => $studentroleid,
        'teacherroleid' => $teacherroleid,
    );
    $records = $DB->get_records_sql($sql, $params);

    $teachers = array();
    $students = array();
    foreach ($records as $record) {
        if ($record->roleid == $teacherroleid) {
            $teachers[] = $record->userid;
        } else if ($record->roleid == $studentroleid) {
            $students[] = $record->userid;
        }
    }
    return array($teachers, $students);
}

function clickedu_get_courses() {
    global $DB;

    $courses = array();

    foreach (clickedu_webservice_query('/moodle/cgaps') as $course) {
        if (empty($course['id_cgap']) or
            empty($course['nom_cgap']) or
            empty($course['nom_cgap_curt'])) {
            continue;
        }

        $idcgap = $course['id_cgap'];

        $courseid = $DB->get_field('course', 'id', array('idnumber' => $idcgap));
        list($oldteachers, $oldstudents) = clickedu_get_course_enrolments($courseid);

        $fullname = $course['nom_cgap'];
        $shortname = $course['nom_cgap_curt'];

        if (!$courseid) {
            $n = 1;
            while ($DB->record_exists('course', array('shortname' => $shortname))) {
                $shortname = $course['nom_cgap_curt'] . ' ~ ' . $n;
                $fullname = $course['nom_cgap'] . ' ~ ' . $n;
                $n++;
            }
        }

        $teachers = array();
        if (!empty($course['id_pd'])) {
            $teachers[] = $course['id_pd'];
        }
        if (!empty($course['ids_pd'])) {
            $teachers = array_merge($teachers, $course['ids_pd']);
        }
        $users = $DB->get_records_list('user', 'idnumber', $teachers, 'id', 'id');
        $newteachers = array_keys($users);

        $courses[$idcgap] = (object) array(
            'id' => $courseid,
            'idnumber' => $idcgap,
            'shortname' => $shortname,
            'fullname' => $fullname,
            'oldteachers' => $oldteachers,
            'oldstudents' => $oldstudents,
            'newteachers' => $newteachers,
            'newstudents' => array(),
            'needssync' => !$courseid or $oldteachers != $newteachers,
        );
    }

    $params = array('cgaps' => json_encode(array_keys($courses)));
    foreach (clickedu_webservice_query('/moodle/cgaps.users', $params) as $course) {
        if (empty($course['id_cgap']) or !isset($course['students'])) {
            continue;
        }

        $idcgap = $course['id_cgap'];

        $students = array();
        foreach ($course['students'] as $student) {
            if (!empty($student['id'])) {
                $students[] = (string) $student['id'];
            }
        }

        $users = $DB->get_records_list('user', 'idnumber', $students, 'id', 'id');
        $courses[$idcgap]->newstudents = array_keys($users);

        if ($courses[$idcgap]->oldstudents != $courses[$idcgap]->newstudents) {
            $courses[$idcgap]->needssync = true;
        }
    }

    core_collator::asort_objects_by_property($courses, 'shortname', core_collator::SORT_NATURAL);

    return $courses;
}

function clickedu_get_new_users() {
    global $CFG, $DB;

    $result = clickedu_webservice_query('/moodle/users');

    $users = array();

    foreach ($result as $user) {
        if (empty($user['id']) or
            empty($user['username']) or
            empty($user['name']) or
            empty($user['surname'])) {
            continue;
        }

        $conditions = array(
            'mnethostid' => $CFG->mnet_localhost_id,
            'username' => core_text::strtolower($user['username']),
        );
        if ($DB->record_exists('user', $conditions)) {
            continue;
        }

        $users[$user['id']] = (object) array(
            'username' => core_text::strtolower($user['username']),
            'firstname' => $user['name'],
            'lastname' => $user['surname'],
            'idnumber' => $user['id'],
            'email' => isset($user['email']) ? clean_param($user['email'], PARAM_EMAIL) : '',
            'sortorder' => $user['surname'] . ' ' . $user['name'],
        );
    }

    core_collator::asort_objects_by_property($users, 'sortorder');

    return $users;
}

function clickedu_login($username, $password) {
    global $COURSE, $USER;

    // Obtención del token y secret de usuario

    $path = '/ws/ws_init.php';
    $params = array(
        'cons_key' => CLICKEDU_CONS_KEY,
        'cons_secret' => CLICKEDU_CONS_SECRET,
    );
    $result = clickedu_webservice_call($path, $params);

    if (empty($result['token']) or empty($result['secret'])) {
        throw new clickedu_invalid_response($path, $params, $result);
    }

    set_user_preference('clickedu_token', $result['token']);
    set_user_preference('clickedu_secret', $result['secret']);

    // Login de usuario y obtención del id

    $path = '/authorization.php';
    $params = array(
        'access_token' => get_user_preferences('clickedu_token'),
        'user' => $username,
        'pass' => $password,
    );
    $result = clickedu_webservice_call($path, $params);

    if (!empty($result['error'])) {
        // Login incorrecto
        return false;
    }

    if (empty($result['id_usuari'])) {
        throw new clickedu_invalid_response($path, $params, $result);
    }

    set_user_preference('clickedu_id', $result['id_usuari']);

    // Solicitud de permisos del usuario

    $path = '/ws/ws_permissions.php';
    $params = array(
        'id_usr' => get_user_preferences('clickedu_id'),
        'oauth_token' => get_user_preferences('clickedu_token'),
        'acceptar' => 1,
        'resource' => [0, 1],
    );
    $result = clickedu_webservice_call($path, $params);

    if (isset($result['status']) and $result['status'] == 'acceptat') {
        $event = \local_clickedu\event\user_authenticated::create_from_username($username);
        $event->trigger();
        return true;
    }

    throw new clickedu_invalid_response($path, $params, $result);
}

function clickedu_get_contents($course) {
    global $CFG;

    if ($course->id == SITEID) {
        return null;
    }

    $webserviceurl = get_config('local_clickedu', 'webserviceurl');

    $result = clickedu_webservice_query('/moodle/contents.users', array('cgap' => $course->idnumber));

    if (!isset($result[0]['continguts']) or !is_array($result[0]['continguts'])) {
        return null;
    }

    $sections = array();

    foreach ($result[0]['continguts'] as $contentid => $content) {
        if (empty($content['ordre'])) {
            continue;
        }
        $section = array(
            'name' => isset($content['nom']) ? $content['nom'] : null,
            'summary' => isset($content['continguts_alumnes']) ? $content['continguts_alumnes'] : '',
            'summaryformat' => FORMAT_PLAIN,
        );
        $mods = array();
        if (!empty($content['continguts'])) {
            $mods["contingut-$contentid-0"] = array(
                'modulename' => 'label',
                'name' => 'label',
                'intro' => html_writer::tag('p', s($content['continguts'])),
                'introformat' => FORMAT_HTML,
                'visible' => false,
            );
        }
        for ($i = 1; $i <= 12; $i++) {
            if (isset($content["contingut$i"]) and $mod = clickedu_get_contents_text($content["contingut$i"])) {
                $mods["contingut-$contentid-0-$i"] = $mod;
            }
        }

        if (isset($content['vincles']) and is_array($content['vincles'])) {
            $mods = array_merge($mods, clickedu_get_contents_vincles($content['vincles']));
        }

        if (isset($content['arxius']) and is_array($content['arxius'])) {
            $mods = array_merge($mods, clickedu_get_contents_arxius($content['arxius']));
        }

        if (!empty($content['num_sessions']) and !empty($content['sessions'])) {
            // Separador
            $mods["contingut-$contentid-hr-1"] = array(
                'modulename' => 'label',
                'name' => 'label',
                'intro' => '<hr style="border: 1px solid #888" />',
                'introformat' => FORMAT_HTML,
                'visible' => true,
            );

            for ($s = 1; $s <= $content['num_sessions']; $s++) {
                if (!isset($content['sessions'][$s]) or !is_array($content['sessions'][$s])) {
                    continue;
                }
                $session = $content['sessions'][$s];
                if ($s > 1) {
                    $mods["contingut-$contentid-hr-$s"] = array(
                        'modulename' => 'label',
                        'name' => 'label',
                        'intro' => '<hr style="border: none; border-top: 1px solid #aaa;" />',
                        'introformat' => FORMAT_HTML,
                        'visible' => true,
                    );
                }

                foreach ($session as $id => $contingut) {
                    if (is_numeric($id) and $mod = clickedu_get_contents_text($contingut)) {
                        $mods["contingut-$id"] = $mod;
                    }
                }
                if (isset($session['vincles']) and is_array($session['vincles'])) {
                    $mods = array_merge($mods, clickedu_get_contents_vincles($session['vincles']));
                }

                if (isset($session['arxius']) and is_array($session['arxius'])) {
                    $mods = array_merge($mods, clickedu_get_contents_arxius($session['arxius']));
                }
            }
        }
        $section['modules'] = $mods;
        $sections[$content['ordre']] = $section;
    }

    return $sections;
}

function clickedu_get_contents_arxius(array $arxius) {
    $modules = array();

    $webserviceurl = get_config('local_clickedu', 'webserviceurl');

    foreach ($arxius as $arxiuid => $arxiu) {
        if (empty($arxiu['arxiu'])) {
            continue;
        }
        preg_match('/^\.\.(\/.*\/([^\/]+))$/', $arxiu['arxiu'], $match);
        if (!$match) {
            continue;
        }
        $modules["arxiu-$arxiuid"] = array(
            'modulename' => 'url',
            'name' => $match[2],
            'intro' => isset($arxiu['descripcio']) ? $arxiu['descripcio'] : '',
            'introformat' => FORMAT_PLAIN,
            'showdescription' => true,
            'visible' => !empty($arxiu['visible_alus']),
            'externalurl' => $webserviceurl . $match[1],
            'display' => RESOURCELIB_DISPLAY_NEW,
        );
    }

    return $modules;
}

function clickedu_get_contents_vincles(array $vincles) {
    $modules = array();

    foreach ($vincles as $vincleid => $vincle) {
        if (empty($vincle['vincle'])) {
            continue;
        }
        $modules["vincle-$vincleid"] = array(
            'modulename' => 'url',
            'name' => $vincle['vincle'],
            'intro' => isset($vincle['descripcio']) ? $vincle['descripcio'] : '',
            'introformat' => FORMAT_PLAIN,
            'showdescription' => true,
            'visible' => !empty($vincle['visible_alus']),
            'externalurl' => $vincle['vincle'],
            'display' => RESOURCELIB_DISPLAY_NEW,
        );
    }

    return $modules;
}

function clickedu_get_contents_text($text) {
    if (empty($text['desc'])) {
        return null;
    }
    $intro = '';
    if (!empty($text['nom'])) {
        $intro .= html_writer::tag('p', html_writer::tag('strong', s($text['nom'])));
    }
    $intro .= html_writer::tag('p', s($text['desc']));
    return array(
        'modulename' => 'label',
        'name' => 'label',
        'intro' => $intro,
        'introformat' => FORMAT_HTML,
        'visible' => !empty($text['visible_alus']),
    );
}

function clickedu_sync_contents(stdClass $course, array $contents, progress_bar $progress) {
    global $CFG, $DB;

    $msg = get_string('syncingcontents', 'local_clickedu');

    $total = 3;
    foreach ($contents as $sectionnum => $section) {
        $total += 1 + count($section['modules']);
    }
    $progress->update(0, $total, $msg);
    $cur = 1;

    // Parámetros del curso
    $course->format = 'topics';
    $course->numsections = count($contents);
    $course->coursedisplay = COURSE_DISPLAY_MULTIPAGE;
    update_course($course);
    $progress->update($cur++, $total, $msg);

    $processedmods = array();

    foreach ($contents as $sectionnum => $sectioncontents) {
        // Creación de la sección
        course_create_sections_if_missing($course, $sectionnum);

        // Parámetros de la sección
        $conditions = array('course' => $course->id, 'section' => $sectionnum);
        $section = $DB->get_record('course_sections', $conditions, '*', MUST_EXIST);
        $section->name = $sectioncontents['name'];
        $section->summary = $sectioncontents['summary'];
        $section->summaryformat = $sectioncontents['summaryformat'];
        $DB->update_record('course_sections', $section);

        $progress->update($cur++, $total, $msg);

        // Lista de mòdulos actuales de la sección
        $cms = array();
        foreach (explode(',', $section->sequence) as $cmid) {
            $cms[$cmid] = $DB->get_record('course_modules', array('id' => $cmid));
        }
        $cm = reset($cms);

        // Creación / actualización de recursos
        foreach ($sectioncontents['modules'] as $idnumber => $modulecontents) {
            // Avanza hasta el siguiente módulo de Clickedu no procesado
            while ($cm and
                   (isset($processedmods[$cm->idnumber]) or
                    empty($sectioncontents['modules'][$cm->idnumber]))) {
                $cm = next($cms);
            }

            if ($cm and $cm->idnumber == $idnumber) {
                $cm = next($cms);
                while ($cm and isset($processedmods[$cm->idnumber])) {
                    $cm = next($cms);
                }
            }

            clickedu_sync_contents_module($course, $section, $idnumber, $modulecontents, $cm);

            $processedmods[$idnumber] = true;
            $progress->update($cur++, $total, $msg);
        }
    }

    // Eliminación de recursos que ya no existen en Clickedu
    $cms = $DB->get_records('course_modules', array('course' => $course->id));
    foreach ($cms as $cm) {
        if (!empty($processedmods[$cm->idnumber])) {
            continue;
        }
        if (preg_match('/(contingut|arxiu|vincle)-/', $cm->idnumber)) {
            course_delete_module($cm->id);
        }
    }

    $progress->update($cur++, $total, $msg);
    rebuild_course_cache();
    $progress->update($total, $total, $msg);

    $event = \local_clickedu\event\contents_synced::create_from_course($course->id);
    $event->trigger();
}

function clickedu_sync_contents_module($course, $section, $idnumber, $modulecontents, $beforemod=null) {
    global $DB;

    $module = $DB->get_record('modules', array('name' => $modulecontents['modulename']), '*', MUST_EXIST);

    $conditions = array('course' => $course->id, 'idnumber' => $idnumber);
    $cm = $DB->get_record('course_modules', $conditions);

    if ($cm and $cm->module != $module->id) {
        course_delete_module($cm->id);
        $cm = null;
    }

    $moduleinfo = new stdClass;
    $moduleinfo->module = $module->id;
    $moduleinfo->course = $course->id;
    $moduleinfo->section = $section->section;
    $moduleinfo->cmidnumber = $idnumber;
    $moduleinfo->visibleoncoursepage = 1;

    foreach ($modulecontents as $key => $value) {
        $moduleinfo->$key = $value;
    }

    if ($cm) {
        $moduleinfo->coursemodule = $cm->id;
        $moduleinfo->introeditor = array(
            'itemid' => 0,
            'format' => $moduleinfo->introformat,
            'text' => $moduleinfo->intro,
        );
        $cm->modname = $moduleinfo->modulename;
        $cm->name = $moduleinfo->name;
        update_moduleinfo($cm, $moduleinfo, $course);
    } else {
        $moduleinfo = add_moduleinfo($moduleinfo, $course);
        $cm = $DB->get_record('course_modules', array('id' => $moduleinfo->coursemodule));
    }

    moveto_module($cm, $section, $beforemod);
}

function clickedu_sync_courses(array $courses, progress_bar $progress) {
    global $CFG, $DB;

    $msg = get_string('syncingcourses', 'local_clickedu');
    $total = 1;
    foreach ($courses as $course) {
        if (!$course->id) {
            $total++; // create course
        }
        $total += count(array_diff($course->newteachers, $course->oldteachers)); // enrolled teachers
        $total += count(array_diff($course->oldteachers, $course->newteachers)); // unenrolled teachersx
        $total += count(array_diff($course->newstudents, $course->oldstudents)); // enrolled students
        $total += count(array_diff($course->oldstudents, $course->newstudents)); // unenrolled students
    }
    $progress->update(0, $total, $msg);
    $cur = 1;

    $enrolplugin = enrol_get_plugin('manual');
    $teacherroleid = get_config('local_clickedu', 'teacherrole');
    $studentroleid = get_config('local_clickedu', 'studentrole');
    $categoryid = get_config('local_clickedu', 'coursecat');
    $category = core_course_category::get($categoryid, IGNORE_MISSING, true);
    if (!$category or !$category->id) {
        $category = core_course_category::get_default();
        set_config('coursecat', $category->id, 'local_clickedu');
    }

    foreach ($courses as $course) {
        if (!$course->id) {
            $course->category = $category->id;
            $course->startdate = time();
            $course->id = create_course($course)->id;
            $progress->update($cur++, $total, $msg);
        }

        $instance = null;
        foreach (enrol_get_instances($course->id, true) as $i) {
            if ($i->enrol == 'manual') {
                $instance = $i;
                break;
            }
        }

        if (!$instance) {
            continue;
        }

        // unenrol teachers
        foreach (array_diff($course->oldteachers, $course->newteachers) as $userid) {
            $enrolplugin->unenrol_user($instance, $userid);
            $progress->update($cur++, $total, $msg);
        }

        // unenrol students
        foreach (array_diff($course->oldstudents, $course->newstudents) as $userid) {
            $enrolplugin->unenrol_user($instance, $userid);
            $progress->update($cur++, $total, $msg);
        }

        // enrol teachers
        foreach (array_diff($course->newteachers, $course->oldteachers) as $userid) {
            $enrolplugin->enrol_user($instance, $userid, $teacherroleid);
            $progress->update($cur++, $total, $msg);
        }

        // enrol students
        foreach (array_diff($course->newstudents, $course->oldstudents) as $userid) {
            $enrolplugin->enrol_user($instance, $userid, $studentroleid);
            $progress->update($cur++, $total, $msg);
        }
    }

    $event = \local_clickedu\event\courses_synced::create_from_count(count($courses));
    $event->trigger();

    $progress->update($total, $total, $msg);
}

function clickedu_moodle_webservice_token() {
    global $CFG, $DB;

    $conditions = array('component' => 'local_clickedu');
    $serviceid = $DB->get_field('external_services', 'id', $conditions);

    $conditions = array('username' => 'clickedu', 'mnethostid' => $CFG->mnet_localhost_id);
    $userid = $DB->get_field('user', 'id', $conditions);

    $conditions = array('externalserviceid' => $serviceid, 'userid' => $userid);
    return $DB->get_field('external_tokens', 'token', $conditions) ?: '';
}

function clickedu_webservice_call($path, array $params) {
    $webserviceurl = get_config('local_clickedu', 'webserviceurl');
    if (!$webserviceurl) {
        throw new moodle_exception('notconfigured', 'local_clickedu');
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_URL, $webserviceurl . $path);
    curl_setopt($ch, CURLOPT_POSTFIELDS, clickedu_webservice_params($params));
    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status != 200) {
        throw new moodle_exception('connectionerror', 'local_clickedu');
    }

    if (!$response) {
        throw new clickedu_invalid_response($path, $params, $response);
    }

    $result = json_decode($response, true);

    if (!is_array($result)) {
        throw new clickedu_invalid_response($path, $params, $response);
    }

    return $result;
}

function clickedu_webservice_params(array $params, $parentkey='') {
    $query = array();
    foreach ($params as $key => $value) {
        if ($parentkey) {
            $fullkey = $parentkey . '[' . urlencode($key) . ']';
        } else {
            $fullkey = urlencode($key);
        }
        if (is_array($value)) {
            $query[] = clickedu_webservice_params($value, $fullkey);
        } else {
            $query[] = $fullkey . '=' . urlencode($value);
        }
    }
    return implode('&', $query);
}

function clickedu_webservice_query($function, array $extraparams=null) {
    global $CFG;

    $token = get_user_preferences('clickedu_token');
    $secret = get_user_preferences('clickedu_secret');
    $id = get_user_preferences('clickedu_id');

    $path = '/ws/ws_query.php';
    $params = array(
        'query' => $function,
        'moodle' => preg_replace('/^https?:\/\//', '', $CFG->wwwroot),
        'cons_key' => CLICKEDU_CONS_KEY,
        'cons_secret' => CLICKEDU_CONS_SECRET,
        'auth_token' => $token,
        'auth_secret' => $secret,
    );

    if ($extraparams) {
        $params = array_merge($params, $extraparams);
    }

    return clickedu_webservice_call($path, $params);
}

function clickedu_create_users(array $users, progress_bar $progress) {
    global $CFG, $DB;

    $msg = get_string('syncingusers', 'local_clickedu');
    $total = count($users) + 1;
    $progress->update(0, $total, $msg);
    $cur = 1;

    foreach ($users as $user) {
        $user->mnethostid = $CFG->mnet_localhost_id;
        $user->confirmed = true;
        $user->password = generate_password();
        $id = user_create_user(clone($user), true);
        set_user_preference('auth_forcepasswordchange', 1, $id);
        if (!empty($user->email)) {
            $record = $DB->get_record('user', array('id' => $id));
            clickedu_send_password($record, $user->password);
        }
        $progress->update($cur, $total, $msg);
        $cur++;
    }

    clickedu_send_users_csv($users);

    $event = \local_clickedu\event\users_synced::create_from_count(count($users));
    $event->trigger();

    $progress->update($total, $total, $msg);
}

function clickedu_send_password($user, $password) {
    global $CFG, $SITE;

    $supportuser = core_user::get_support_user();

    $a = new stdClass();
    $a->firstname   = fullname($user);
    $a->sitename    = format_string($SITE->fullname);
    $a->username    = $user->username;
    $a->newpassword = $password;
    $a->link        = $CFG->wwwroot .'/login/';
    $a->signoff     = generate_email_signoff();

    $message = get_string('newusernewpasswordtext', '', $a);
    $subject = format_string($SITE->fullname) . ': ' . get_string('newusernewpasswordsubj', '', $a);

    email_to_user($user, $supportuser, $subject, $message);
}

function clickedu_send_users_csv($users) {
    global $SITE, $USER;

    $cew = new csv_export_writer();
    $cew->add_data(array(
        get_string('firstname'),
        get_string('lastname'),
        get_string('username'),
        get_string('password'),
        get_string('email'),
    ));
    foreach ($users as $user) {
        $cew->add_data(array(
            $user->firstname,
            $user->lastname,
            $user->username,
            $user->password,
            $user->email,
        ));
    }

    $supportuser = core_user::get_support_user();
    $attachname = 'Moodle_' . get_string('users') . '_' . gmdate("Ymd_Hi") . '.csv';

    $a = new stdClass();
    $a->firstname  = fullname($USER);
    $a->sitename   = format_string($SITE->fullname);
    $a->users      = count($users);
    $a->attachname = $attachname;
    $a->signoff    = generate_email_signoff();

    $message = get_string('newusersemail', 'local_clickedu', $a);
    $subject = format_string($SITE->fullname) . ': ' . get_string('newusers');

    email_to_user($USER, $supportuser, $subject, $message, '', $cew->path, $attachname);
}

function clickedu_require_token() {
    global $OUTPUT, $PAGE;

    switch (clickedu_check_token()) {

        case CLICKEDU_TOKEN_PENDING:
            echo $OUTPUT->header();
            echo $OUTPUT->heading(get_string('pluginname', 'local_clickedu'));
            $url = get_config('local_clickedu', 'webserviceurl');
            $text = get_string('noauthorization', 'local_clickedu', $url);
            echo html_writer::div($text, 'generalbox', array('id' => 'notice'));
            echo $OUTPUT->footer();
            exit;

        case CLICKEDU_TOKEN_DENIED:
        case CLICKEDU_TOKEN_INVALID:
            $form = new clickedu_login_form($PAGE->url);
            if ($form->get_data()) {
                redirect($PAGE->url);
            }
            echo $OUTPUT->header();
            echo $OUTPUT->heading(get_string('pluginname', 'local_clickedu'));
            $form->display();
            echo $OUTPUT->footer();
            exit;
    }
}

function clickedu_setup_moodle_webservice() {
    global $CFG, $DB;

    // Web services activados
    set_config('enablewebservices', true);

    // Protocolo REST
    $protocols = explode(',', get_config('core', 'webserviceprotocols'));
    if (!in_array('rest', $protocols)) {
        $protocols[] = 'rest';
        set_config('webserviceprotocols', trim(implode(',', $protocols), ','));
    }

    // Usuario web service
    $conditions = array(
        'username' => 'clickedu',
        'mnethostid' => $CFG->mnet_localhost_id,
        'deleted' => 0,
    );
    $user = $DB->get_record('user', $conditions);
    if (!$user) {
        $user = new stdClass;
        $user->username = 'clickedu';
        $user->firstname = 'Robot';
        $user->lastname = 'Clickedu';
        $user->mnethostid = $CFG->mnet_localhost_id;
        $user->auth = 'webservice';
        $user->confirmed = true;
        $user->id = user_create_user($user, false);
    }

    // Usuario web service adminiistrador
    $admins = explode(',', get_config('core', 'siteadmins'));
    if (!in_array($user->id, $admins)) {
        $admins[] = $user->id;
        set_config('siteadmins', trim(implode(',', $admins), ','));
    }

    // Usuario autorizado en servicio externo
    $conditions = array('component' => 'local_clickedu');
    $service = $DB->get_record('external_services', $conditions, '*', MUST_EXIST);

    $conditions = array('externalserviceid' => $service->id, 'userid' => $user->id);
    if (!$DB->record_exists('external_services_users', $conditions)) {
        $record = new stdClass;
        $record->externalserviceid = $service->id;
        $record->userid = $user->id;
        $record->timecreated = time();
        $DB->insert_record('external_services_users', $record);
    }
}

function clickedu_moodle_webservice_configured() {
    global $CFG, $DB;

    // Web services activados
    if (empty($CFG->enablewebservices)) {
        return false;
    }

    // Protocolo REST
    $protocols = explode(',', get_config('core', 'webserviceprotocols'));
    if (!in_array('rest', $protocols)) {
        return false;
    }

    // Servicio externo activado
    $conditions = array('component' => 'local_clickedu');
    $service = $DB->get_record('external_services', $conditions, '*', MUST_EXIST);
    if (!$service->enabled) {
        return false;
    }

    // Usuario web service existe
    $conditions = array(
        'username' => 'clickedu',
        'mnethostid' => $CFG->mnet_localhost_id,
        'deleted' => 0,
    );
    $user = $DB->get_record('user', $conditions);
    if (!$user) {
        return false;
    }

    // Usuario web service es administrador
    $admins = explode(',', get_config('core', 'siteadmins'));
    if (!in_array($user->id, $admins)) {
        return false;
    }

    // Usuario autorizado en servicio externo
    $conditions = array('externalserviceid' => $service->id, 'userid' => $user->id);
    if (!$DB->record_exists('external_services_users', $conditions)) {
        return false;
    }

    return true;
}
