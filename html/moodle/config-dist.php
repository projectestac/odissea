<?php  /// Moodle Configuration File 

unset($CFG);

$CFG->dbtype    = 'oci8po';
$CFG->dbhost    = '';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'usu1';
$CFG->dbpass    = 'agora';
$CFG->dbpersist =  true;
$CFG->prefix    = 'md';

$CFG->wwwroot   = 'http://odissea/moodle';
$CFG->dirroot   = '/srv/www/odissea/html/moodle';
$CFG->dataroot  = '/srv/www/odissea/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode
$CFG->dblogerror = true;
$CFG->debug = 6143;

// Paràmetres pel Moodle 2
global $agora;
$agora['moodle2']['backuppath'] = '/srv/www/odissea/moodledata2/repository/files/';
// Fi paràmetres pel Moodle 2

$CFG->alternateloginurl = '';
$CFG->mymoodleredirect = 0;
$CFG->isagora = 0;
$CFG->iseoi = 0;
$CFG->isportal = 0;
$CFG->diskPercent = 0;

$CFG->noreplyaddress = 'noreply@odissea.xtec.cat';

$CFG->apligestmail = 1; /* Database param */
$CFG->apligestlog = 1; /* Database param */
$CFG->apligestlogdebug = 1; /* Database param */
$CFG->apligestlogpath = $CFG->dataroot.'/1/backupdata/log/mailsender.log';
$CFG->apligestaplic = 'ODISSEA';
$CFG->apligestenv = 'INT';
//$CFG->apligestenv = 'ACC';
//$CFG->apligestenv = 'PRO';

require_once("$CFG->dirroot/lib/setup.php");

