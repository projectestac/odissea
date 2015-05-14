<?php

require_once('agora_script_base.class.php');

class script_test_mail extends agora_script_base{

    public $title = 'Envia un correu de prova';
    public $info = "Envia un correu a l'adreça especificada";
    public $cron = false;
    protected $test = false;
    public $cli = false;
    public $api = false;

    public function params() {
        $params = array();
        $params['subject'] = optional_param('subject', 'Test mail', PARAM_TEXT);
        $params['content'] = optional_param('content', 'Test mail àèìòù', PARAM_TEXT);
        $params['to'] = optional_param('to', false, PARAM_TEXT);
        $params['count'] = optional_param('count', 1, PARAM_INT);
        $params['plainhtml'] = optional_param('plainhtml', false, PARAM_BOOL);
        return $params;
    }


    protected function _execute($params = array(), $execute = true) {
        global $CFG, $USER;
        if (empty($params['to'] )) {
            $this->output('No recipients found', 'ERROR');
            return false;
        }

        $CFG->apligestlog = 1;
        $CFG->apligestlogdebug = 1;
        $CFG->apligestlogpath = '/dev/null';

        $mail = new StdClass();
        $mail->ContentType = $params['plainhtml'] ? 'text/plain' : 'text/html';
        $mail->to = array(array($params['to']));
        $mail->cc = array();
        $mail->bcc = array();
        $mail->Subject = $params['subject'];
        for ($i = 0; $i < $params['count']; $i++) {
            $mail->Body = $params['content']."\n Mail count: $i";

            if (send_apligest_mail($mail, $USER)) {
                $this->output('Email sent '.$i, 'OK');
            } else {
                $this->output('Email Error '.$i, 'ERROR');
                $log = $this->get_logger();
                if ($log) {
                    $log->print_log();
                } else {
                    $this->output('Log not found', 'ERROR');
                }
                return false;
            }
        }
        return true;
    }

    private function get_logger() {
        global $CFG;

        if (!@include_once($CFG->dirroot.'/local/agora/mailer/log4p.class.php')) {
            return false;
        }

        try {
            return log4p::instance(true, '/dev/null', 1);
        } catch (Exception $e) {
            $this->output('Cannot initialize apligestlogger, there won\'t be any log.', 'ERROR');
            $this->output($e->getMessage(), 'ERROR');
        }
        return false;
    }
}
