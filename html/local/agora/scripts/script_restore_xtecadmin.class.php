<?php

require_once('agora_script_base.class.php');

class script_restore_xtecadmin extends agora_script_base{

    public $title = 'Restaura xtecadmin';
    public $info = "Restaura l'usuari xtecadmin de la plataforma";
    public $cron = false;
    protected $test = true;
    public $cli = true;
    public $api = true;
    protected $category = 'Check and repair';

    public function params(): array {
        $params = [];
        $params['password'] = optional_param('password', false, PARAM_TEXT);

        return $params;
    }

    protected function _execute($params = array(), $execute = true) {
        global $CFG, $DB, $OUTPUT, $agora;

        if (empty($params['password'])) {
            $this->output('Missing password. Restore of xtecadmin aborted', 'ERROR');
            return false;
        } else {
            $password = (strlen($params['password']) == 32) ? $params['password'] : md5($params['password']);
        }

        $xtecadmin = $DB->get_record('user', array('username' => 'xtecadmin', 'deleted' => 0));
        if (!$execute) {
            if (!$xtecadmin) {
                echo $OUTPUT->notification('XTECadmin does not exists');
            } else {
                echo $OUTPUT->notification('XTECadmin exists', 'notifysuccess');
                if (!is_siteadmin($xtecadmin)) {
                    echo $OUTPUT->notification('Is not siteadmin!');
                } else {
                    echo $OUTPUT->notification('Is siteadmin!', 'notifysuccess');
                    $mainadmin = get_admin();
                    if ($xtecadmin->id != $mainadmin->id) {
                        echo $OUTPUT->notification('Is not main admin!');
                    } else {
                        echo $OUTPUT->notification('Is the main admin!', 'notifysuccess');
                    }
                }
            }
            return (boolean)$xtecadmin;
        }

        if (!$xtecadmin) {
            // Create xtecadmin
            $xtecadmin = create_user_record('xtecadmin', $password, 'manual');
            mtrace('Xtecadmin created', '<br>');
        } else {
            mtrace('Xtecadmin exists', '<br>');
        }

        // Restore to its original settings
        $xtecadmin->password = $password;
        $xtecadmin->firstname = 'Administrador/a';
        $xtecadmin->lastname = 'XTEC';
        $xtecadmin->email = $agora['xtecadmin']['mail'];
        $xtecadmin->emailstop = 1;
        $xtecadmin->country = 'es';
        $xtecadmin->lang = 'ca';
        $xtecadmin->timezone = 99;
        $xtecadmin->description = 'Administrador/a de la XTEC';
        $xtecadmin->mailformat = 0;
        $xtecadmin->maildigest = 0;
        $xtecadmin->maildisplay = 1;
        $xtecadmin->trackforums = 0;
        $DB->update_record('user', $xtecadmin);

        $newmain = $xtecadmin->id;
        $adminsaux = explode(',', $CFG->siteadmins);

        foreach ($adminsaux as $admin) {
            $admin = (int)$admin;
            if ($admin) {
                $admins[$admin] = $admin;
            }
        }

        if (isset($admins[$newmain])) {
            unset($admins[$newmain]);
        }

        // The main admin it has to be the first of the list
        array_unshift($admins, $newmain);
        set_config('siteadmins', implode(',', $admins));

        mtrace('Set as main admin', '<br>');

        return true;
    }

    function is_visible() {
        if (is_agora()) {
            return true;
        }
        return false;
    }
}
