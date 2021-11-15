<?php

require_once __DIR__ . '/local/agora/lib.php';

get_debug();

// Specific Àgora params
$CFG->isagora = true;
$CFG->iseoi = $agora['iseoi'];
$CFG->isodissea = false;
$CFG->isalexandria = false;
$CFG->center = $school_info['clientCode'] ?? $school_info['id_moodle2'];

// The following line calculates correctly the diskPercent (uploading files will be disabled when diskPercent >= 100)
$CFG->diskPercent = $school_info['diskPercent_moodle2'] ?? 0;
$CFG->userquota = 0;  // Block private files

// Force values for standard Moodle params to ensure proper values
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
$CFG->repositorygetfiletimeout = 300;
$CFG->alternateloginurl = '';
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
$CFG->timezone = 99; // Changed by default to Server's local time
$CFG->cronremotepassword = '';
$CFG->cronclionly = 1;

// Activate X-SendFile
$CFG->xsendfile = 'X-Sendfile';

// Captcha keys
$CFG->recaptchapublickey = $agora['recaptchapublickey'];
$CFG->recaptchaprivatekey = $agora['recaptchaprivatekey'];

// E-mail
$CFG->smtphosts = $agora['mail']['server'];
$CFG->smtpuser = $agora['mail']['username'];
$CFG->smtppass = $agora['mail']['userpwd'];
$CFG->noreplyaddress = $agora['mail']['reply'];
// $CFG->supportemail = $agora['mail']['reply'];
$CFG->smtpsecure = 'tls';
$CFG->smtpmaxbulk = 15;
$CFG->emailfromvia = 0;

// Cleanup
$CFG->disablegradehistory = 1;
$CFG->tempdatafoldercleanup = 24;

// Rules
$CFG->forceloginforprofiles = 1;
$CFG->opentogoogle = 0;

// Ajax & Javascript
$CFG->enableajax = 1;
$CFG->disablecourseajax = 0;

// Backups
$CFG->backup_auto_active = 0;

// Tell Moodle not to be worried if cron executes every 10 minutes
$CFG->expectedcronfrequency = 600;

// These variable define DEFAULT block variables for new courses
$CFG->defaultblocks_override = ':calendar_month,activity_modules';

// Language parameters
$CFG->langotherroot = __DIR__ . '/langpacks/';
$CFG->langlocalroot = __DIR__ . '/langpacks/';
$CFG->skiplangupgrade = true;

// Only allow some of the languages
if (!$CFG->iseoi) {
    $CFG->langlist = 'ca,en,es,fr,de';
}

// Path of the cacheconfig.php file, to have only one MUC file for Àgora (instead of having one for each site in moodledata/usuX/muc/config.php).
$CFG->altcacheconfigpath = __DIR__ . '/local/agora/muc/';
$CFG->siteidentifier = $CFG->dbuser;

// Cache servers configuration for MUC, used in custom cacheconfig.php
$CFG->memcache_servers = (!empty($agora['moodle2']['memcache_servers'])) ? $agora['moodle2']['memcache_servers'] : '';
$CFG->memcache_prefix = $CFG->dbuser . '_';
$CFG->redis_servers = (!empty($agora['moodle2']['redis_servers'])) ? $agora['moodle2']['redis_servers'] : '';
$CFG->redis_prefix = $CFG->dbuser . '_';

// Session configuration
$CFG->session_handler_class = '\core\session\database'; // Default
$CFG->session_database_acquire_lock_timeout = 120;
$CFG->sessioncookie = $CFG->dbuser;

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
    $CFG->session_redis_port = 6379; // Optional
    $CFG->session_redis_database = 0; // Optional, default is db 0
    $CFG->session_redis_auth = ''; // Optional, default is don't set one
    $CFG->session_redis_prefix = $CFG->redis_prefix . 'sess_'; // Optional, default is don't set one
    $CFG->session_redis_acquire_lock_timeout = 120;
    $CFG->session_redis_lock_expire = 7200;
}

// MUC configuration
if (isset($agora['server']['root']) && !empty($agora['server']['root'])) {
    $CFG->agora_muc_path = $agora['server']['root'] . $agora['moodle2']['localmuc'] . '/' . $CFG->dbuser;
    $CFG->cachedir = $CFG->agora_muc_path . '/cache';
    $CFG->localcachedir = $CFG->agora_muc_path . '/localcache';
}

// Move locking. Default location is moodledata
if (!empty($agora['moodle2']['redis_session_servers'])) {
    $CFG->local_redislock_redis_server = $agora['moodle2']['redis_session_servers'];
    $CFG->lock_factory = '\\local_redislock\\lock\\redis_lock_factory';
    $CFG->local_redislock_logging = false;
} else {
    $CFG->lock_factory = '\\core\\lock\\db_record_lock_factory';
}

// Use the system temporary directory
$CFG->localrequestdir = '/tmp';

// if (isset($agora['proxy']['host']) && !empty($agora['proxy']['host'])) {
//    $CFG->proxyhost = $agora['proxy']['host'];
//    $CFG->proxyport = $agora['proxy']['port'];
//    $CFG->proxyuser = $agora['proxy']['user'];
//    $CFG->proxypassword = $agora['proxy']['pass'];
//}

$CFG->customusermenuitems = "grades,grades|/grade/report/mygrades.php|grades
    messages,message|/message/index.php|message
    badges,badges|/badges/mybadges.php|award
    calendar,calendar|/calendar/view.php|i/calendar
    preferences,moodle|/user/preferences.php|preferences";

$CFG->forced_plugin_settings = [
    'logstore_standard' => [
        'loglifetime' => 365 * 2,
    ],
    'filter_wiris' => [
        'uninstall' => 1,
    ],
    'backup' => [
        'loglifetime' => 7,
        'backup_auto_delete_days' => 365,
        'backup_auto_min_kept' => 1,
    ],
    'tool_recyclebin' => [
        'coursebinenable' => 1,
        'coursebinexpiry' => 604800,
        'categorybinenable' => 1,
        'categorybinexpiry' => 604800,
    ]
];

// $CFG->enable_hour_restrictions = 1; /* Set in database */
// This param (hour_restrictions) can be serialized. This is useful for setting it in database
// Values for days: 0 = sunday, 1 = monday, ..., 6 = saturday
if ($CFG->iseoi) {
    $CFG->hour_restrictions = [
        ['start' => '16:00', 'end' => '23:59', 'days' => '1|2|3|4|5',],
        ['start' => '00:00', 'end' => '23:59', 'days' => '0|6',],
    ];
} else {
    $CFG->hour_restrictions = [
        ['start' => '9:00', 'end' => '13:59', 'days' => '1|2|3|4|5',],
        ['start' => '15:00', 'end' => '16:59', 'days' => '1|2|3|4|5',],
    ];
}
