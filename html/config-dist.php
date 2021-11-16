<?php

unset($CFG);
global $CFG;

$CFG = new stdClass();

$CFG->dbtype = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost = '';
$CFG->dbname = '';
$CFG->dbuser = '';
$CFG->dbpass = '';
$CFG->prefix = '';

$CFG->dboptions = [
    'dbpersist' => 0,
    'fetchbuffersize' => 0,
    'dbsocket' => 0,
    'dbport' => 5432,
];

$CFG->wwwroot = '';
$CFG->dataroot = '';
$CFG->admin = 'admin';

$CFG->passwordsaltmain = '';

// Application cache
$CFG->memcache_servers = '';
$CFG->redis_servers = '';

// Redis for application lock
$CFG->local_redislock_redis_server = '';

// Redis for sessions
$CFG->session_redis_host = '';
$CFG->session_redis_port = 6379; // Optional

// E-mail
$CFG->smtphosts = '';
$CFG->smtpuser = '';
$CFG->smtppass = '';
$CFG->noreplyaddress = '';

require_once __DIR__ . '/local/agora/lib.php';
require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/lib/setup.php';

