<?php

require_once('agora_script_base.class.php');

class script_disable_intranet_login extends agora_script_base{

    public $title = 'Desactiva el login de la intranet';
    public $info = "Desactiva l'autenticació per base de dades i passa els usuaris a manual";
    public $cron = false;
    protected $test = false;
    public $cli = true;
    public $api = true;
    protected $category = "Upgrade";

    protected function _execute($params = array(), $execute = true) {
        global $CFG, $DB;

        $idb = external_db('intranet');
        if ($idb) {
            $dbusers = $DB->get_records('user', array('auth' => 'db'));
            foreach ($dbusers as $user) {
                $pass = $idb->get_field('users', 'pass', array('uname' => $user->username));
                if (substr($pass, 0, 3) == '1$$') {
                    $pass = substr($pass, 3);
                }
                $DB->set_field('user', 'password', $pass, array('id' => $user->id));
                $this->output('Username '. $user->username.' password '.$pass);
            }
        }

        $DB->set_field('user', 'auth', 'manual', array('auth' => 'db'));
        $this->output('All db auth users are now manual');

        get_enabled_auth_plugins(true); // fix the list of enabled auths
        if (empty($CFG->auth)) {
            $this->output('No auth plugin enabled');
            return true;
        }

        $authsenabled = explode(',', $CFG->auth);

        // remove from enabled list
        $key = array_search('db', $authsenabled);
        if ($key !== false) {
            unset($authsenabled[$key]);
            set_config('auth', implode(',', $authsenabled));
            $this->output('Auth DB disabed');
        }

        if ('db' == $CFG->registerauth) {
            set_config('registerauth', '');
            $this->output('Registerauth was DB so now is empty');
        }

        \core\session\manager::gc(); // Remove stale sessions.
        core_plugin_manager::reset_caches();

        return true;
    }
}
