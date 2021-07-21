<?php

include_once dirname(dirname(dirname(__FILE__))) . '/html/config/env-config.php';

unset($CFG);
global $CFG;

$CFG = new stdClass();

$CFG->dbtype = $agora['moodle2']['dbtype'];
$CFG->dbpass = $agora['moodle2']['userpwd'];
$CFG->prefix = $agora['moodle2']['prefix'];

$CFG->admin = 'admin';

$CFG->dboptions = [
    'dbpersist' => false,
    'dbsocket' => false,
    'fetchbuffersize' => 0,
    'dbport' => $agora['moodle2']['port'],
];

$CFG->directorypermissions = 00777;

$CFG->passwordsaltalt1 = '';
$CFG->passwordsaltmain = 'y7a!Eb019n8Z5*43Sl5J&ly4pjJUk-b';

require_once $agora['server']['root'] . '/html/moodle2/site-config.php';
require_once $agora['server']['root'] . '/html/moodle2/settings.php';
require_once $agora['server']['root'] . '/html/moodle2/lib/setup.php';
