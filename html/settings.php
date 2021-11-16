<?php

get_debug();

$dirroot = dirname(__FILE__, 2);

$CFG->directorypermissions = 0777;

$CFG->isagora = false;
$CFG->iseoi = false;
$CFG->isodissea = true;
$CFG->isalexandria = false;

$CFG->updateautocheck = false;
$CFG->disableupdatenotifications = true;
$CFG->disableupdateautodeploy = true;
$CFG->disableonclickaddoninstall = true;
$CFG->updateminmaturity = 0;
$CFG->updatenotifybuilds = false;
$CFG->slasharguments = true;

// Activate X-SendFile
$CFG->xsendfile = 'X-Sendfile';

// E-mail
$CFG->smtpsecure = 'tls';
$CFG->smtpmaxbulk = 15;
$CFG->emailfromvia = 0;

$CFG->langotherroot = __DIR__ . '/langpacks/';
$CFG->langlocalroot = __DIR__ . '/langpacks/';
$CFG->skiplangupgrade = true;

$CFG->altcacheconfigpath = __DIR__ . '/local/agora/muc/';
$CFG->siteidentifier = 'odi_';


$CFG->memcache_prefix = 'odi_';
$CFG->redis_prefix = 'odi_';

// $CFG->session_handler_class = '\core\session\database';
// $CFG->session_database_acquire_lock_timeout = 120;
$CFG->sessioncookie = 'odissea';


// Configure redis for sessions
$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_database = 0;  // Optional, default is db 0.
$CFG->session_redis_auth = ''; // Optional, default is don't set one.
$CFG->session_redis_prefix = 'odi_sess_'; // Optional, default is don't set one.
$CFG->session_redis_acquire_lock_timeout = 120;
$CFG->session_redis_acquire_lock_retry = 100; // Optional, default is 100ms (from 3.9)
$CFG->session_redis_lock_expire = 7200;
$CFG->session_redis_serializer_use_igbinary = false; // Optional, default is PHP builtin serializer.

$CFG->agora_muc_path = $dirroot . '/localdata/odissea';
$CFG->cachedir = $CFG->agora_muc_path . '/cache';
$CFG->localcachedir = $CFG->agora_muc_path . '/localcache';

// Change locking from NFS to redis
$CFG->lock_factory = '\\local_redislock\\lock\\redis_lock_factory';
$CFG->local_redislock_logging = false;

// Use the system temporary directory
$CFG->localrequestdir = '/tmp';

$CFG->customusermenuitems = "grades,grades|/grade/report/mygrades.php|grades
    messages,message|/message/index.php|message
    badges,badges|/badges/mybadges.php|award
    calendar,calendar|/calendar/view.php|i/calendar
    preferences,moodle|/user/preferences.php|preferences";

$CFG->forced_plugin_settings = [
    'block_configurable_reports' => [
        'sqlsecurity' => true,
        'dbhost' => '',
        'dbname' => '',
        'dbuser' => '',
        'dbpass' => '',
    ],
    'logstore_legacy' => [
        'loglegacy' => 1,
    ],
    'filter_wiris' => [
        'uninstall' => 1,
    ],
];


