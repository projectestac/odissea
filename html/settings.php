<?php
require_once(dirname(__FILE__) . '/local/agora/lib.php');

get_debug();

// Force general preferences. Prevails over database params.
$CFG->isagora = 1;
$CFG->iseoi = $agora['iseoi'];
$CFG->isodissea = false;
$CFG->isalexandria = false;
$CFG->center = isset($school_info['clientCode']) ? $school_info['clientCode'] : $school_info['id_moodle2'];

// The following line calculates correctly the diskPercent (uploading files will be disabled when diskPercent >= 100)
$CFG->diskPercent = isset($school_info['diskPercent_moodle2']) ? $school_info['diskPercent_moodle2'] : 0;
$CFG->userquota = 0;  // To avoid the private files area

$CFG->legacyfilesinnewcourses = false;
$CFG->updateautocheck = false;
$CFG->disableupdatenotifications = true;
$CFG->disableupdateautodeploy = true;
$CFG->disableonclickaddoninstall = true;
$CFG->updateminmaturity = 0;
$CFG->updatenotifybuilds = false;
$CFG->core_media_enable_mp3 = false;
$CFG->core_media_enable_html5audio = true;
$CFG->core_media_enable_html5video = true;
$CFG->repositorygetfiletimeout = 150;

//Preconfiguration setting
$CFG->alternateloginurl='';
$CFG->mymoodleredirect = false;
$CFG->enablestats = false;
$CFG->enableanalytics = false;
$CFG->themedesignermode = false;
$CFG->cachejs = true;
$CFG->slasharguments = true;
$CFG->themelist = 'xtec2020';
$CFG->useexternalyui = false;
$CFG->yuicomboloading = true;
$CFG->cachetemplates = true;

//Authentication
$CFG->recaptchapublickey = $agora['recaptchapublickey'];
$CFG->recaptchaprivatekey = $agora['recaptchaprivatekey'];

// E-mail
$CFG->smtphosts = $agora['mail']['server'];
$CFG->smtpuser = $agora['mail']['username'];
$CFG->smtppass = $agora['mail']['userpwd'];
$CFG->noreplyaddress = $agora['mail']['reply'];
//$CFG->supportemail = $agora['mail']['reply'];
$CFG->smtpsecure = 'tls';
$CFG->smtpmaxbulk = 15;
$CFG->emailfromvia = 0;
$CFG->mailheader = ($CFG->iseoi) ? '[Àgora-EOI]' : '[Àgora]';

//Cleanup
$CFG->disablegradehistory = 1;
$CFG->loglifetime = 365 * 2;
$CFG->tempdatafoldercleanup = 24;

//Rules
$CFG->forceloginforprofiles = 1;
$CFG->opentogoogle = 0;

//Ajax & Javascript
$CFG->enableajax = 1;
$CFG->disablecourseajax = 0;

//Backups
$CFG->backup_auto_active = 0;

//Session information
$CFG->session_handler_class = '\core\session\file';
$CFG->session_file_save_path = ini_get('session.save_path');
$CFG->sessioncookie = $CFG->dbuser;

// Force sessions in database (temporarily)
$CFG->session_handler_class = '\core\session\database';
$CFG->session_database_acquire_lock_timeout = 120;

//$CFG->enable_hour_restrictions = 1;   /* Set in database */
// This param (hour_restrictions) can be serialized. This is useful for setting it in database
// Values for days: 0 = sunday, 1 = monday, ..., 6 = saturday
if ($CFG->iseoi) {
    $CFG->hour_restrictions = array(array('start' => '16:00', 'end' => '23:59', 'days' => '1|2|3|4|5'),
                                array('start' => '00:00', 'end' => '23:59', 'days' => '0|6'));
} else {
    $CFG->hour_restrictions = array(array('start' => '9:00', 'end' => '13:59', 'days' => '1|2|3|4|5'),
                                array('start' => '15:00', 'end' => '16:59', 'days' => '1|2|3|4|5'));
}

// These variable define DEFAULT block variables for new courses
$CFG->defaultblocks_override = ':calendar_month,activity_modules';

// Mail information
$CFG->apligestenv = $agora['server']['enviroment'];
$CFG->apligestaplic = ($CFG->iseoi) ? 'AGORAEOI' : 'AGORA';

$CFG->langotherroot = dirname(__FILE__) . '/langpacks/';
$CFG->langlocalroot = dirname(__FILE__) . '/langpacks/';
$CFG->skiplangupgrade  = true;

// Only allow some of the languages
if (!$CFG->iseoi) {
    $CFG->langlist = 'ca,en,es,fr,de';
}

if(isset($agora['moodle2']['airnotifier'])) {
    $CFG->airnotifieraccesskey = $agora['moodle2']['airnotifier'];
}

// Path of the cacheconfig.php file, to have only one MUC file for Àgora (instead of having one for each site in moodledata/usuX/muc/config.php).
// This folder has to exists and to be writable
$CFG->altcacheconfigpath = dirname(__FILE__) . '/local/agora/muc/';
$CFG->siteidentifier = $CFG->dbuser;

$CFG->memcache_servers = (!empty($agora['moodle2']['memcache_servers'])) ? $agora['moodle2']['memcache_servers'] : '127.0.0.1';
$CFG->memcache_prefix = $CFG->dbuser . '_';

$CFG->redis_servers = (!empty($agora['moodle2']['redis_servers'])) ? $agora['moodle2']['redis_servers'] : '127.0.0.1';
$CFG->redis_prefix = $CFG->dbuser . '_';

if (!empty($agora['moodle2']['memcached_session_servers'])) {
    $CFG->session_handler_class = '\core\session\memcached';
    $CFG->session_memcached_save_path = $agora['moodle2']['memcached_session_servers'];
    $CFG->session_memcached_prefix = $CFG->memcache_prefix . 'sess_';
    $CFG->session_memcached_acquire_lock_timeout = 120;
    $CFG->session_memcached_lock_expire = 7200;
    $CFG->session_memcached_lock_retry_sleep = 150;
}

if (!empty($agora['moodle2']['redis_session_servers'])) {
    $CFG->session_handler_class = '\core\session\redis';
    $CFG->session_redis_host = $agora['moodle2']['redis_session_servers'];
    $CFG->session_redis_port = 6379;  // Optional.
    $CFG->session_redis_database = 0;  // Optional, default is db 0.
    $CFG->session_redis_auth = ''; // Optional, default is don't set one.
    $CFG->session_redis_prefix = $CFG->redis_prefix . 'sess_'; // Optional, default is don't set one.
    $CFG->session_redis_acquire_lock_timeout = 120;
    $CFG->session_redis_lock_expire = 7200;
}

if (isset($agora['server']['root']) && !empty($agora['server']['root'])) {
    // In FRM environment, put cache in moodledata. Otherwise, use local cache directories
    if ($agora['server']['enviroment'] != 'FRM') {
        $CFG->agora_muc_path = $agora['server']['root'] . $agora['moodle2']['localmuc'] . '/' . $CFG->dbuser;
        $CFG->cachedir       = $CFG->agora_muc_path . '/cache';
        $CFG->localcachedir  = $CFG->agora_muc_path . '/localcache';
    }
}

// Change locking from NFS to DB
$CFG->lock_factory = "\\core\\lock\\db_record_lock_factory";

$CFG->timezone = 99; // Changed by default to Server's local time
$CFG->cronremotepassword = '';  // changed to avoid schools change it
$CFG->cronclionly = 1; // changed to avoid schools change it

/*if (isset($agora['proxy']['host']) && !empty($agora['proxy']['host'])) {
    $CFG->proxyhost = $agora['proxy']['host'];
    $CFG->proxyport = $agora['proxy']['port'];
    $CFG->proxyuser = $agora['proxy']['user'];
    $CFG->proxypassword = $agora['proxy']['pass'];
}*/

$CFG->customusermenuitems = "grades,grades|/grade/report/mygrades.php|grades
messages,message|/message/index.php|message
badges,badges|/badges/mybadges.php|award
calendar,calendar|/calendar/view.php|i/calendar
preferences,moodle|/user/preferences.php|preferences";


$CFG->forced_plugin_settings = array('logstore_standard' => array('loglifetime' => 365 * 2),
                                     'logstore_legacy' => array('loglegacy' => 1),
                                     'filter_wiris' => array('uninstall' => 1),
                                     'backup' => array('loglifetime' => 7,
                                                       'backup_auto_delete_days' => 365,
                                                       'backup_auto_min_kept' => 1),
                                     'tool_recyclebin' => array('coursebinenable' => 1,
                                                                'coursebinexpiry' => 604800,
                                                                'categorybinenable' => 1,
                                                                'categorybinexpiry' => 604800)
                                     );
