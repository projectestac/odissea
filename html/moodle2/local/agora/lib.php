<?php

function is_agora() {
    global $CFG;
    return isset($CFG->isagora) && $CFG->isagora;
}

function is_eoi() {
    global $CFG;
    return isset($CFG->iseoi) && $CFG->iseoi;
}

function is_portal() {
    global $CFG;
    return isset($CFG->isportal) && $CFG->isportal;
}

function is_xtecadmin($user=null) {
    global $USER;
    if (empty($user)) {
        $user = $USER;
    }

    return isset($user->username) && $user->username == 'xtecadmin';
}

function require_xtecadmin($canbesiteadmin = false) {
    require_login(0, false);
    if (!$canbesiteadmin) {
        if (!is_xtecadmin()) {
            print_error('noxtecadmin');
        }
    } else {
        if (is_agora() && !is_xtecadmin()) {
            print_error('noxtecadmin');
        }
        if (!is_siteadmin()) {
            print_error('no_siteadmin');
        }
    }

}

function get_protected_agora() {
    global $CFG, $USER;
    return !is_agora() || is_xtecadmin();
}

function require_not_rush_hour() {
    global $CFG;
    if (!get_protected_agora() && is_rush_hour()) {
         print_error('rush_hour', 'local_agora', $CFG->wwwroot);
    }
}

function get_debug() {
    global $CFG;

    // Get the cookie (only changes if the cookie is enabled), if not, takes default settings
    if (isset($_COOKIE['agora_debug']) && $_COOKIE['agora_debug'] == 1) {
            $CFG->debug = E_ALL | E_STRICT;
            $CFG->debugdisplay = 1;
            $CFG->showcrondebugging = true;
            error_reporting($CFG->debug);
            @ini_set('display_errors', '1');
            @ini_set('log_errors', '0');
    }
}

// Execute a command via CLI
function run_cli($command, $outputfile = false, $append = true, $background = true, $params = array()) {
    global $CFG;

    $command = $CFG->dirroot . '/'.$command;

    if (isset($CFG->dnscentre)) {
        $params['ccentre'] = $CFG->dnscentre;
    }
    if ($params && is_array($params)) {
        foreach ($params as $key => $value) {
            $command .= ' --'.$key.'='.$value;
        }
    }

    if (isset($CFG->clicommand)) {
        $cmd = $CFG->clicommand;
    } else {
        $cmd = "php";
    }

    $command = 'nohup '.$cmd.' '.$command;

    if ($append) {
        $command .= ' >> ';
    } else {
        $command .= ' > ';
    }

    if (empty($outputfile)) {
        if ($background) {
            $outputfile = '/dev/null';
        } else {
            $outputfile = '/dev/stdout';
        }
    }

    $command .= $outputfile.' 2>&1 ';

    if ($background) {
         $command .= ' & echo $!';
    }

    // Això és una marranada a evitar...
    if (isset($CFG->cli_ldlibrarypath)) {
        putenv('LD_LIBRARY_PATH='.$CFG->cli_ldlibrarypath);
    }
    if (isset($CFG->cli_path)) {
        putenv('PATH='.$CFG->cli_path);
    }

    $output = "";
    $returnvar = "";
    exec($command, $output, $returnvar);

    if (is_xtecadmin()) {
        mtrace($command, '<br/>');
        print_object($output);
        mtrace("Return var: $returnvar", '<br/>');
    }

    return $returnvar;
}

function check_cron_run() {
    global $CFG;
    if (!empty($CFG->cronclionly)) {
        $nocli = optional_param('nocli', false, PARAM_BOOL);
        if (!$nocli) {
            run_cli_cron();
            exit(0);
        }
    } else {
        $cli = optional_param('cli', false, PARAM_BOOL);
        if ($cli) {
            run_cli_cron();
            exit(0);
        }
    }
    $CFG->cronclionly = false;
}

// Executes a cron via CLI
function run_cli_cron($background = true) {
    global $CFG, $DB;

    if (!empty($CFG->cronremotepassword)) {
        $pass = optional_param('password', '', PARAM_RAW);
        if ($pass != $CFG->cronremotepassword) {
            // wrong password.
            print_error('cronerrorpassword', 'admin');
            exit(1);
        }
    }

    if (CLI_MAINTENANCE) {
        echo "CLI maintenance mode active, cron execution suspended.\n";
        exit(1);
    }

    if (moodle_needs_upgrading()) {
        echo "Moodle upgrade pending, cron execution suspended.\n";
        exit(1);
    }

    $command = $CFG->admin.'/cli/cron.php';

    $force = optional_param('forcecron', false, PARAM_BOOL);
    if (!$force) {
        $cronstart = get_config(null, 'cronstart');
        $cronperiod = 900; // 15 minutes minimum
        if ($cronstart + $cronperiod > time()) {
            echo "Moodle cron was executed recently.\n";
            exit(1);
        }
    } else {
        $command .= ' --forcecron=true';
        echo "Moodle cron forced.\n";
    }

    $outputfile = false;
    if (isset($CFG->savecronlog)) {
        $savecronlog = $CFG->savecronlog;
    } else {
        $savecronlog = $DB->get_field('config', 'value', array('name' => 'savecronlog'));
    }
    if (!empty($savecronlog)) {
        $outputdir = get_admin_datadir_folder('crons', false);
        if ($outputdir) {
            $outputfile = $outputdir.'/cron_'.$CFG->siteidentifier.'_'.date("Ymd").'.log';
        }

        // Erase old files
        $search = $outputdir.'/cron_'.$CFG->siteidentifier.'_'.date("Ym", strtotime("-2 month"));
        foreach (glob($search.'*.log') as $filename) {
            unlink($filename);
        }
        $outputfile = $outputdir.'/cron_'.$CFG->siteidentifier.'_'.date("Ymd").'.log';
    }
    $append = true;

    mtrace('Cron is being executing in background by CLI...');

    run_cli($command, $outputfile, $append, $background);
}

/**
 * Check if the current time is considered rush hour in order to apply restrictions
 *
 * @global Object $CFG
 * @return Boolean true if restrictions apply, false otherwise.
 */
function is_rush_hour() {
    global $CFG;

    // If param is not defined or is false, there's no rush hour.
    if (!isset($CFG->enable_hour_restrictions) || ($CFG->enable_hour_restrictions == false)) {
        return false;
    }

    // Get the hour frames
    if (!isset($CFG->hour_restrictions) || empty($CFG->hour_restrictions)) {
        // Default values
        $timeframes = array(array('start' => '9:00', 'end' => '13:59', 'days' => '1|2|3|4|5'),
                            array('start' => '15:00', 'end' => '16:59', 'days' => '1|2|3|4|5'));
    } else {
        // Check for serialized data in $CFG->hour_restrictions
        $data = @unserialize($CFG->hour_restrictions);
        if ($CFG->hour_restrictions === 'b:0;' || $data !== false) {
            $timeframes = $data;
        } else {
            $timeframes = $CFG->hour_restrictions;
        }
    }

    // Check the hour frames
    $weekday = idate('w'); // 0 = sunday
    $hour = idate('H');
    $minutes = idate('i');
    $nowminutes = ($hour * 60) + $minutes;

    foreach ($timeframes as $frame) {
        $start = explode(':', $frame['start']);
        $end = explode(':', $frame['end']);
        $days = explode('|', $frame['days']);

        // Check if "today" is in the list of allowed days
        if (!in_array($weekday, $days)) {
            continue;
        }

        $startminutes = ((int) $start[0] * 60) + (int) $start[1];
        $endminutes = ((int) $end[0] * 60) + (int) $end[1];

        // Check if current time is in the frame
        if (($nowminutes >= $startminutes) && ($nowminutes < $endminutes)) {
            return true;
        }
    }

    return false;
}

/**
 * Check if specified module/block name is enabled
 * @param String $mod module name
 * @return Boolean True if specified module name is enabled and false otherwise.
 *
 * @author sarjona
 **/
function is_enabled_in_agora ($mod) {
    if (is_agora()) {
        // Disabled in all Agora Moodles
        if ($mod == 'clean' || $mod == 'more' || $mod == 'canvas' || $mod == 'base' ||
            $mod == 'chat' || $mod == 'alfresco' || $mod == 'tinymce') {
            return false;
        }
    }
    return true;
}

function local_agora_extends_navigation(global_navigation $navigation) {
    global $DB, $CFG;
    if (isloggedin() && is_service_enabled('nodes') && $DB->record_exists('oauth_clients', array('client_id' => 'nodes'))) {
        $nodesurl = $CFG->wwwroot.'/local/agora/login_service.php?service=nodes';
        $icon = new pix_icon('i/permissions', "");
        $navigation->add(get_string('login_nodes', 'local_agora'), $nodesurl, navigation_node::TYPE_SETTING, null, get_string('login_nodes', 'local_agora'), $icon);
    }
}

function is_service_enabled($service) {
    if (!is_agora()) {
        return false;
    }

    global $school_info;
    return isset($school_info['id_'.$service]) && !empty($school_info['id_'.$service]);
}

function get_service_url($service) {
    global $agora, $CFG;
    if (isset($agora['server']) && is_service_enabled($service)) {
        $dns = $agora['server']['server'] . $agora['server']['base'].$CFG->dnscentre.'/';
        if ($service == 'nodes') {
            return $dns;
        }
        return $dns . $service.'/';
    }
    return false;
}

/**
 * Return the directory to store admin things
 *
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_admin_datadir($exceptiononerror = true) {
    global $agora, $CFG;
    if (isset($CFG->admindatadir)) {
        return $CFG->admindatadir;
    }

    if (isset($agora['admin']['datadir'])) {
        $dir = $agora['server']['root'].'/'.$agora['admin']['datadir'].'/data/moodle2/'.$CFG->siteidentifier;
    } else {
        $dir = $CFG->dataroot.'/repository/files';
    }
    $CFG->admindatadir = make_writable_directory($dir, $exceptiononerror);

    return $CFG->admindatadir;
}

/**
 * Return the directory to store admin things
 *
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_moodle2_admin_datadir($exceptiononerror = true) {
    global $agora, $CFG;
    if (isset($CFG->moodle2admindatadir)) {
        return $CFG->moodle2admindatadir;
    }
    if (isset($agora['admin']['datadir'])) {
        $dir = $agora['server']['root'].'/'.$agora['admin']['datadir'].'/data/moodle2';
    } else {
        $dir = $CFG->dataroot.'/repository/files';
    }
    $CFG->moodle2admindatadir = make_writable_directory($dir, $exceptiononerror);
    return $CFG->moodle2admindatadir;
}

/**
 * Return the folder inside admindatadir directory to store admin things
 *
 * @param string $folder to add to the admindatadir
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_admin_datadir_folder($folder = '', $exceptiononerror = true) {
    $directory = get_admin_datadir($exceptiononerror);
    if ($directory && !empty($folder)) {
        $directory .= '/'.$folder;
        $directory = make_writable_directory($directory, $exceptiononerror);
    }

    return $directory;
}

/**
 * Return the folder inside admindatadir directory to store admin things
 *
 * @param string $folder to add to the admindatadir
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_moodle2_admin_datadir_folder($folder = '', $exceptiononerror = true) {
    $directory = get_moodle2_admin_datadir($exceptiononerror);
    if ($directory && !empty($folder)) {
        $directory .= '/'.$folder;
        $directory = make_writable_directory($directory, $exceptiononerror);
    }

    return $directory;
}

function get_mailsender() {
    global $mailsender, $CFG;
    require_once($CFG->dirroot.'/local/agora/mailer/mailsender.class.php');

    if (!is_null($mailsender)) {
        return $mailsender;
    }

    // Load the mailsender
    $wsdl = get_config('local_agora', 'environment_url');
    $wsdl = empty($wsdl) ? $CFG->apligestenv : $wsdl;

    try {
        if (empty($CFG->apligestlogpath)) {
            $CFG->apligestlogpath = get_admin_datadir_folder('log');
            set_config('apligestlogpath', $CFG->apligestlogpath);
        }
        $mailsender = new mailsender($CFG->apligestaplic, $CFG->noreplyaddress, 'educacio', $wsdl, $CFG->apligestlog, $CFG->apligestlogdebug, $CFG->apligestlogpath);
    } catch (Exception $e) {
        if (CLI_SCRIPT) {
            mtrace('ERROR: Cannot initialize mailsender, no mail will be sent.');
            mtrace($e->getMessage());
            mtrace('The execution must go on!');
        } else {
            debugging('ERROR: Cannot initialize mailsender, no mail will be sent. <br> '.$e->getMessage(), DEBUG_NORMAL);
        }
        $mailsender = false;
    }
    return $mailsender;
}

function send_apligest_mail(&$mail, $user) {
    global $CFG;
    try {
        $sender = get_mailsender();
        if (!$sender) {
            $mail->ErrorInfo = 'Cannot initialize mailsender, no mail will be sent';
            return false;
        }

        require_once($CFG->dirroot.'/local/agora/mailer/message.class.php');

        if (empty($CFG->apligestlogpath)) {
            $CFG->apligestlogpath = get_admin_datadir_folder('log');
            set_config('apligestlogpath', $CFG->apligestlogpath);
        }

        // Load the message
        $type = $mail->ContentType == 'text/plain' ? TEXTPLAIN : TEXTHTML;
        $message = new message($type, $CFG->apligestlog, $CFG->apligestlogdebug, $CFG->apligestlogpath);

        // Set $to
        $toarray = array();
        foreach ($mail->to as $to) {
            $toarray[] = $to[0];
        }
        $message->set_to($toarray);

        // Set $cc
        $ccarray = array();
        foreach ($mail->cc as $cc) {
            $ccarray[] = $cc[0];
        }
        if (!empty($ccarray)) {
            $message->set_cc($ccarray);
        }

        // Set $bcc
        $bccarray = array();
        foreach ($mail->bcc as $bcc) {
            $bccarray[] = $bcc[0];
        }
        if (!empty($bccarray)) {
            $message->set_bcc($bccarray);
        }

        // Set $subject
        $message->set_subject($mail->Subject);

        // Set $bodyContent
        $message->set_bodyContent($mail->Body);

        // Add message to mailsender
        if (!$sender->add($message)) {
            $mail->ErrorInfo = 'Impossible to add message to mailsender';
            return false;
        }

        // Send messages
        if (!$sender->send_mail()) {
            $mail->ErrorInfo = 'Impossible to send messages';
            return false;
        } else {
            return true;
        }
    } catch (Exception $e) {
        $mail->ErrorInfo = 'Exception: '. $e->getMessage();
        return false;
    }
}

function get_colors_from_nodes($solveerrors = false) {

    try {
        $filename = INSTALL_BASE.'/html/wordpress/wp-content/themes/reactor-primaria-1/custom-tac/colors_nodes.php';
        if (file_exists($filename)) {
            global $colors_nodes;
            $db = external_db('nodes');
            $options = $db->get_field('options', 'option_value', array('option_name' => 'reactor_options'));
            $options = unserialize($options);
            $paleta = $options['paleta_colors'];

            require_once($filename);
            $paleta = $colors_nodes[$paleta];
            $colors = array(
                'color' => $paleta['secondary'],
                'logo_color' => $paleta['primary']
            );
            if ($solveerrors) {
                set_config('color2', $colors['color'], 'theme_xtec2');
                set_config('color4', $colors['color'], 'theme_xtec2');
                set_config('color5', $colors['color'], 'theme_xtec2');
                set_config('logo_color', $colors['logo_color'], 'theme_xtec2');
            }
            //$db->dispose();
            return $colors;
        }
    } catch (Exception $e) {
        // Nothing to do
    }

    if ($solveerrors) {
        set_config('colorset', 'grana', 'theme_xtec2');
        set_config('color2', '#AC2013', 'theme_xtec2');
        set_config('color4', '#303030', 'theme_xtec2');
        set_config('color5', '#AC2013', 'theme_xtec2');
    }
    return false;
}


/**
 * Connecta a una base de dades configurada d'un servei
 *
 * @param string shortname de la taula que vulguem consultar
 * @return  moodle_database
 */
function external_db($service) {
    global $DBHANDLERS, $school_info, $agora;

    //Es comprova si en la cache de handlers ja existeix el solicitat
    if (!isset($DBHANDLERS)) {
        $DBHANDLERS = array();
    }
    if (isset($DBHANDLERS[$service])) {
        return $DBHANDLERS[$service];
    }

    if (!is_service_enabled($service)) {
        $DBHANDLERS[$service] = false;
        return false;
    }

    $options = array();
    $options['dbpersist'] = false;
    if (isset($agora[$service]['port']) && !empty($agora[$service]['port'])) {
        $options['dbport'] = $agora[$service]['port'];
    }

    // Per ara només farem servir aquestes, per ampliar-ho caldria afegir aquest paràmetre a la taula
    $library = 'native';
    $dbtype = $agora[$service]['dbtype'];
    if ($dbtype == 'mysql') {
        $dbtype = 'mysqli';
    }

    if (!$handler = moodle_database::get_driver_instance($dbtype, $library, true)) {
        throw new dml_exception('dbdriverproblem', "Unknown driver $library/$dbtype");
    }

    $host = $school_info['dbhost_'.$service];
    $username = $agora[$service]['username'];
    $password = $agora[$service]['userpwd'];
    $prefix = $agora[$service]['prefix'].'_';
    $dbname = $agora[$service]['userprefix'].$school_info['id_'.$service];

    try {
        if ($handler->connect($host, $username, $password, $dbname, $prefix, $options)) {
            $DBHANDLERS[$service] = $handler;
        } else {
            $DBHANDLERS[$service] = false;
            return false;

        }
    } catch (Exception $e) {
        debugging('Error connecting external DB '.$service);
        debugging($e->getMessage());
        $DBHANDLERS[$service] = false;
        return false;
    }

    return $handler;
}

function local_agora_cron() {
    global $CFG;

    require_once('scripts/scripts.lib.php');

    mtrace("Executing Agora cron...", "\n");

    scripts_execute_crons();

    require_once('adware/lib.php');
    detect_adware_cron();

    mtrace("Agora cron done.", "\n");
}