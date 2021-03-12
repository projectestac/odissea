<?php

get_debug();

$dirroot = dirname(dirname(__FILE__));

$CFG->altcacheconfigpath = $dirroot . '/html/local/agora/muc/';
$CFG->agora_muc_path = $dirroot . '/localdata/odissea';
$CFG->cachedir = $CFG->agora_muc_path . '/cache';
$CFG->localcachedir = $CFG->agora_muc_path . '/localcache';
$CFG->siteidentifier = 'odi_';

$CFG->langotherroot = dirname(__FILE__) . '/langpacks/';
$CFG->langlocalroot = dirname(__FILE__) . '/langpacks/';
$CFG->skiplangupgrade = true;
$CFG->updateautocheck = false;
$CFG->disableupdatenotifications = true;
$CFG->disableupdateautodeploy = true;
$CFG->disableonclickaddoninstall = true;

$CFG->directorypermissions = 0777;

$CFG->disableupdatenotifications = 1;
$CFG->slasharguments = true;

// $CFG->session_handler_class = '\core\session\database';
// $CFG->session_database_acquire_lock_timeout = 120;
$CFG->sessioncookie = 'odissea';

$CFG->isagora = false;
$CFG->iseoi = false;
$CFG->isodissea = true;
$CFG->isalexandria = false;

$CFG->memcache_prefix = 'odi_';
$CFG->redis_prefix = 'odi_';

$CFG->recaptchapublickey = '';
$CFG->recaptchaprivatekey = '';

// E-mail
$CFG->smtpsecure = 'tls';
$CFG->smtpmaxbulk = 15;
$CFG->digestmailtime = 1;
$CFG->emailfromvia = 0;
$CFG->mailheader = '[Odissea]';

// This variable must be defined
$CFG->apligestenv = '';

// Change locking from NFS to redis
$CFG->lock_factory = '\\local_redislock\\lock\\redis_lock_factory';

// Configure redis for sessions
$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_database = 0;  // Optional, default is db 0.
$CFG->session_redis_auth = ''; // Optional, default is don't set one.
$CFG->session_redis_prefix = 'odi_sess_'; // Optional, default is don't set one.
$CFG->session_redis_acquire_lock_timeout = 120;
$CFG->session_redis_acquire_lock_retry = 100; // Optional, default is 100ms (from 3.9)
$CFG->session_redis_lock_expire = 7200;
$CFG->session_redis_serializer_use_igbinary = false; // Optional, default is PHP builtin serializer.

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

$CFG->customusermenuitems = "grades,grades|/grade/report/mygrades.php|grades
messages,message|/message/index.php|message
badges,badges|/badges/mybadges.php|award
calendar,calendar|/calendar/view.php|i/calendar
preferences,moodle|/user/preferences.php|preferences";

