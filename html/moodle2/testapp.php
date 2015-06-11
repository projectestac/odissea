<?php

require_once 'config.php';
require_once('testlib/testlib.php');
global $CFG;

checkOracle($CFG->dbname, $CFG->dbuser, $CFG->dbpass, $CFG->prefix);

test_mail('ODISSEA', false, $CFG->apligestenv);

test_ldap();

test_gicar('43549269b');

test_memcache();

test_session();


$ftpconfig = get_config('tool_odisseagtafsync');
test_ftp($ftpconfig->ftphost, $ftpconfig->ftpusername, $ftpconfig->ftppassword, $ftpconfig->inputpath);

test_cli(__DIR__.'/admin/cli/cron.php');

test_server();


