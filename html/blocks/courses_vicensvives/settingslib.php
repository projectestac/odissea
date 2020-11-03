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

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir.'/adminlib.php');

/**
 * Parámetro falso para comprobar la configuración y mostrar errores.
 */
class courses_vicensvives_setting_wscheck extends admin_setting {

    private $error;

    public function __construct() {
        parent::__construct('vicensvives_wscheck', '', '', null);
    }

    public function get_setting() {
        return true;
    }

    public function write_setting($data) {
        return '';
    }

    public function output_html($data, $query='') {
        $errors = array();

        // Comprueba la conexión con el web service de Vicens Vives.
        $ws = new vicensvives_ws();
        try {
            $ws->books();
        } catch (vicensvives_ws_error $e) {
            $errors[] = html_writer::tag('div', $e->getMessage(), array('class' => 'alert alert-danger'));
        }

        // Comprueba si el plugin local del web service está instalado.
        if (!courses_vicensvives_setting_moodlews::get_service()) {
            $message = get_string('moodlewsnotinstalled', 'block_courses_vicensvives');
            $errors[] = html_writer::tag('div', $message, array('class' => 'alert alert-danger'));
        }

        $adminroot = admin_get_root();

        if (!$errors) {
            // Comprueba si el web service está configurado.
            if (!courses_vicensvives_setting_moodlews::is_enabled()) {
                $message = get_string('moodlewsnotenabled', 'block_courses_vicensvives');
                $errors[] = html_writer::tag('div', $message, array('class' => 'alert alert-danger'));
            }

            // Comprueba si ha habido un error en enviar el token.
            if (array_key_exists('s__vicensvives_moodlews', $adminroot->errors)) {
                $message = $adminroot->errors['s__vicensvives_moodlews']->error;
                $errors[] = html_writer::tag('div', $message, array('class' => 'alert alert-danger'));
            }
        }

        return implode('', $errors);
    }
}

/**
 * Parámetro para configurar el web service de Moodle y enviar el token a Vicens Vives.
 */
class courses_vicensvives_setting_moodlews extends admin_setting {

    const USERNAME = 'wsvicensvives';
    const FIRSTNAME = 'Web Service';
    const LASTNAME = 'Vicens Vives';
    const SERVICE = 'local_wsvicensvives';
    const PROTOCOL = 'rest';
    const ROLESHORTNAME = 'wsvicensvives';
    const ROLENAME = 'Web Service Vicens Vives';

    private static $capabilities = array(
        'webservice/rest:use',
        'moodle/grade:edit',
    );

    public function __construct() {
        parent::__construct('vicensvives_moodlews', '', '', null);
    }

    public function get_setting() {
        $value = get_config($this->plugin, $this->name);
        if ($value === false) {
            // Parámetro no configurado (en instalar).
            return null;
        }
        return true;
    }

    public function output_html($data, $query='') {
        $attributes = array('type' => 'hidden', 'name' => $this->get_full_name(),  'value' => '1');
        return html_writer::empty_tag('input', $attributes);
    }

    public function write_setting($data) {
        // Marcamos el parámetro como configurado.
        set_config($this->name, '1', $this->plugin);

        if (vicensvives_ws::configured() and self::get_service()) {
            return self::enable();
        }

        return '';
    }

    public static function get_service() {
        global $DB;
        $conditions = array('component' => self::SERVICE);
        return $DB->get_record('external_services', $conditions);
    }

    public static function is_enabled() {
        global $CFG;

        // Web services activados.
        if (empty($CFG->enablewebservices)) {
            return false;
        }

        // Protocolo REST.
        $protocols = explode(',', get_config('core', 'webserviceprotocols'));
        if (!in_array(self::PROTOCOL, $protocols)) {
            return false;
        }

        // Servicio activado.
        $service = self::get_service();
        if (!$service or !$service->enabled) {
            return false;
        }

        // Usuario.
        $userid = self::get_user_id();
        if (!$userid) {
            return false;
        }

        // Rol.
        $roleid = self::get_role_id();
        if (!$roleid) {
            return false;
        }
        $context = context_system::instance();
        $rolecaps = role_context_capabilities($roleid, $context);
        foreach (self::$capabilities as $name) {
            if (!isset($rolecaps[$name]) or $rolecaps[$name] != CAP_ALLOW) {
                return false;
            }
        }
        if (!user_has_role_assignment($userid, $roleid, $context->id)) {
            return false;
        }

        // Token.
        if (!self::get_token($service, $userid)) {
            return false;
        }

        return true;
    }

    private static function enable() {
        global $CFG, $DB, $USER;

        require_once("$CFG->dirroot/user/lib.php");

        $context = context_system::instance();

        // Web services activados.
        set_config('enablewebservices', true);

        // Protocolo REST.
        $protocols = explode(',', get_config('core', 'webserviceprotocols'));
        if (!in_array(self::PROTOCOL, $protocols)) {
            $protocols[] = self::PROTOCOL;
            set_config('webserviceprotocols', trim(implode(',', $protocols), ','));
        }

        // Servicio.
        $service = self::get_service();
        if (!$service->enabled) {
            $DB->set_field('external_services', 'enabled', 1, array('id' => $service->id));
        }

        // Usuario.
        $userid = self::get_user_id();
        if (!$userid) {
            $user = new stdClass;
            $user->username = self::USERNAME;
            $user->firstname = self::FIRSTNAME;
            $user->lastname = self::LASTNAME;
            $user->mnethostid = $CFG->mnet_localhost_id;
            $user->auth = 'webservice';
            $user->confirmed = true;
            $userid = user_create_user($user, false);
        }

        // Rol.
        $roleid = self::get_role_id();
        if (!$roleid) {
            $roleid = create_role(self::ROLENAME, self::ROLESHORTNAME, '');
            set_role_contextlevels($roleid, array(CONTEXT_SYSTEM));
        }
        foreach (self::$capabilities as $name) {
            assign_capability($name, CAP_ALLOW, $roleid, $context, true);
        }
        $context->mark_dirty();
        role_assign($roleid, $userid, $context->id);

        // Token.
        $token = self::get_token($service, $userid);

        // Crea el token en activar.
        if (!$token) {
            $token = md5(uniqid(rand(), 1));
            $record = new stdClass();
            $record->token = $token;
            $record->tokentype = EXTERNAL_TOKEN_PERMANENT;
            $record->userid = $userid;
            $record->externalserviceid = $service->id;
            $record->contextid = $context->id;
            $record->creatorid = $USER->id;
            $record->timecreated = time();
            $DB->insert_record('external_tokens', $record);
        }

        // Emvía el token a Vicens Vives.
        try {
            $ws = new vicensvives_ws();
            $ws->send_token($token);
        } catch (vicensvives_ws_error $e) {
            return $e->getMessage();
        }

        return '';
    }

    private static function get_role_id() {
        global $DB;
        $conditions = array('shortname' => self::ROLESHORTNAME);
        return $DB->get_field('role', 'id', $conditions);
    }

    private static function get_token($service, $userid) {
        global $DB;

        $context = context_system::instance();
        $conditions = array(
            'tokentype' => EXTERNAL_TOKEN_PERMANENT,
            'userid' => $userid,
            'externalserviceid' => $service->id,
            'contextid' => $context->id,
        );
        return $DB->get_field('external_tokens', 'token', $conditions);
    }

    private static function get_user_id() {
        global $CFG, $DB;
        $conditions = array(
            'username' => self::USERNAME,
            'mnethostid' => $CFG->mnet_localhost_id,
            'deleted' => 0,
        );
        return $DB->get_field('user', 'id', $conditions);
    }
}
