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
    'dbsocket' => 0,
    'dbport' => 5432,
];

$CFG->wwwroot = '';
$CFG->dataroot = '';
$CFG->admin = 'admin';

$CFG->passwordsaltmain = '';
$CFG->memcache_servers = '';
$CFG->redis_servers = '';

// E-mail
$CFG->smtphosts = '';
$CFG->smtpuser = '';
$CFG->smtppass = '';
$CFG->noreplyaddress = '';
 
require_once(dirname(__FILE__) . '/local/agora/lib.php');
require_once(dirname(__FILE__) . '/settings.php');
require_once(dirname(__FILE__) . '/lib/setup.php');
