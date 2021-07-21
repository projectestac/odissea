<?php

require_once('agora_script_base.class.php');

class script_enable_service extends agora_script_base{

    public $title = 'Activa el servei Àgora';
    public $info = "Fa els passos necessàris per activar Moodle2 i deixar-lo a punt per començar";
    public $cron = false;
    protected $test = false;
    public $api = true;
    public $cli = true;
    protected $category = "Upgrade";

    public function params(){
        $params = [];
        $params['password'] = optional_param('password', false, PARAM_TEXT);
        $params['xtecadminPassword'] = optional_param('xtecadminPassword', false, PARAM_TEXT);
        $params['clientName'] = optional_param('clientName', false, PARAM_TEXT);
        $params['clientCode'] = optional_param('clientCode', false, PARAM_TEXT);
        $params['clientAddress'] = optional_param('clientAddress', false, PARAM_TEXT);
        $params['clientCity'] = optional_param('clientCity', false, PARAM_TEXT);
        $params['clientDNS'] = optional_param('clientDNS', false, PARAM_TEXT);

        return $params;
    }

    protected function _execute($params = array(), $execute = true) {
        global $CFG, $DB;

        if (empty($params['password'])) {
            mtrace('El password no pot ser buit', '<br/>');
            return false;
        }

        $adminuser = $DB->get_record('user', array('username' => 'admin'));
        if (!$adminuser) {
            mtrace('No s\'ha trobat l\'usuari admin', '<br/>');
            return false;
        }

        $adminuser->password = $params['password'];
        $adminuser->firstname = 'Administrador/a';
        $adminuser->lastname = $params['clientName'];
        $adminuser->email = $params['clientCode'].'@xtec.cat';
        $adminuser->institution = $params['clientName'];
        $adminuser->address = $params['clientAddress'];
        $adminuser->city = $params['clientCity'];
        $DB->update_record('user', $adminuser);

        // Force change of password of user admin
        set_user_preference('auth_forcepasswordchange', 1, $adminuser);

        if (!is_siteadmin($adminuser)) {
            $admins = explode(',', $CFG->siteadmins);
            $admins[] = $adminuser->id;
            set_config('siteadmins', implode(',', $admins));
            mtrace('Set admin as siteadmin', '<br>');
        }

        mtrace('Usuari admin configurat', '<br/>');

        // Upgrade Moodle
        $success = $this->execute_suboperation('restore_xtecadmin', ['password' => $params['xtecadminPassword']]);

        // Update site name and site description
        $maincourse = $DB->get_record('course', array('id' => SITEID));
        if (!$maincourse) {
            mtrace('No s\'ha trobat el curs principal', '<br/>');
            return false;
        }
        $maincourse->fullname = $params['clientName'];
        $maincourse->shortname = $params['clientDNS'];
        $maincourse->summary = 'Moodle del centre ' . $params['clientName'];
        $DB->update_record('course', $maincourse);
        mtrace('Curs principal configurat', '<br/>');

        filter_set_global_state('filter/tex', TEXTFILTER_ON);
        mtrace('Activat filtre TEX', '<br/>');

        set_config('maxbytes', 0, 'assignsubmission_file');
        mtrace('Límit de tramesa de tasques pujat al límit de servidor', '<br/>');

        // Change rcommon log to admin datadir
        $rcommonlogdir = get_admin_datadir_folder();
        set_config('data_store_log', $rcommonlogdir, 'rcommon');

        set_config('grade_report_showcalculations', 1);
        mtrace('Activat Mostrar calculs del qualificador', '<br/>');

        // Solve error on Upgrade Bigdata
        if (!$DB->get_manager()->table_exists('bigdata_profiles')) {
            unset_config('version', 'local_bigdata');
        }

        // Upgrade Moodle
        $success = $this->execute_suboperation('upgrade_moodle');

        /*if ($success) {
            // Autoregister Moodle
            $this->execute_suboperation('moodle_register', array('disable' => 0));
        }*/


        purge_all_caches();
        return $success;
    }

    function is_visible() {
        if (is_agora()) {
            return true;
        }
        return false;
    }
}
