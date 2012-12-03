<?php

unset($CFG);
global $CFG;

$CFG = new stdClass();

$CFG->dbtype = 'oci8po';
$CFG->dbhost = '';
$CFG->dbname = 'moodle';
$CFG->dbuser = 'usu2';
$CFG->dbpass = 'agora';
$CFG->prefix = 'm2';
$CFG->admin  = 'admin';

$CFG->wwwroot   = 'http://odissea/moodle2';
$CFG->dataroot  = '/srv/www/odissea/moodledata2';

// Dades pel Moodle 1.9
global $agora;
$agora['moodle']['dbhost']  = '';
$agora['moodle']['user']    = 'usu1';
$agora['moodle']['userpwd'] = 'agora';
$agora['moodle']['dbname']  = 'moodle';
$agora['moodle']['prefix']  = 'md';
$agora['moodle2']['repository_files'] = '/repository/files/';
$CFG->wwwroot19 = 'http://odissea/moodle';
// Fi dades pel Moodle 1.9

$CFG->dboptions = array (
    'dbpersist' => true,
    'dbsocket' => false,
    'dbport' => ''
);

$CFG->langotherroot = dirname(__FILE__) . '/lang/';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltalt1 = '';
$CFG->passwordsaltmain = 'y7a!Eb019n8Z5*43Sl5J&ly4pjJUk-b';

$CFG->alternateloginurl = '';
$CFG->mymoodleredirect = 0;
$CFG->isagora = 0;
$CFG->iseoi = 0;
$CFG->isportal = 0;
$CFG->diskPercent = 0;
$CFG->disableupdatenotifications = 1;

$CFG->apligestmail = 1;
$CFG->apligestlog = 1;
$CFG->apligestlogdebug = 1;
$CFG->apligestlogpath = $CFG->dataroot.'/repository/files/mailsender.log';
$CFG->apligestaplic = 'ODISSEA';
$CFG->apligestenv = 'INT';
//$CFG->apligestenv = 'ACC';
//$CFG->apligestenv = 'PRO';

require_once(dirname(__FILE__) . '/local/agora/lib.php');
require_once(dirname(__FILE__) . '/lib/setup.php');

